<?php

use App\Http\Controllers\Shop\Product\ProductAddController;
use App\Http\Controllers\Shop\Product\ProductController;
use App\Http\Controllers\Shop\Product\ProductEditController;
use App\Samin\Account\Enums\Currency;
use App\Shop\Category\ShopCategory;
use App\Shop\Products\Enums\ProductCondition;
use App\Shop\Products\Product;
use App\Shop\Products\ProductImages;
use App\Shop\Products\ProductVariant;
use App\Shop\Rating\ShopRating;
use App\Shop\Shop;
use App\Shop\Statistic\ProductData;
use App\Social\Article;
const StandardJsonHeaders=['Accept' => 'application/json', 'Content-Type' => 'application/json'];

return [

    /*
    |--------------------------------------------------------------------------
    | APIs repository (For playground / help)
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */


    'Product' => [

        /**
         * @see ProductController::api_getMyProductsAll()
         */

        'Get products list' => [
            'auth' => true,
            'scope' => ProductController::GET_MY_PRODUCTS_SCOPE,
            'permissions' => ProductController::GET_MY_PRODUCTS_PERMISSION,
            'description' => 'Nweta ndepụta ngwaahịa ụlọ ahịa ahụ.',
            'url' => 'ụlọ ahịa/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Gosi naanị ngwaahịa dị. Nwere ike ịbụ eziokwu ma ọ bụ ụgha.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Nweta ọkwa ọkwa nne na nna. Nwere ike ịbụ eziokwu ma ọ bụ ụgha.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Mwepu nke ndepụta ngwaahịa (maka pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Ọnụọgụ nke ngwaahịa na ndepụta (maka pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Ụdị ụdị ndepụta', 'type' => 'enum', 'default' => null, 'values' => [null, 'metụtara', 'Ọtụtụ_eleta', 'kacha_ewu ewu', 'kacha ọhụrụ', 'kacha ere', 'dị ọnụ ala', 'kacha_ọnụ ọnụ', 'random', 'metụtara', 'ọkacha mmasị', 'random']],
                'product_id' => ['title' => 'Ngwaahịa ID eji weghachi ngwaahịa ndị metụtara ya (ụdị = metụtara).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Ntọala data ngwaahịa. Nwere ike ịbụ efu ma ọ bụ spec (efu: ndabere, spec: kachasị maka iweghachite nkọwapụta).', 'type' => 'enum', 'default' => null, 'values' => [null, 'nkọwa']],
                'search' => ['title' => 'Chọọ ederede', 'type' => 'eriri', 'default' => null],
                'search_type' => ['title' => 'Ụdị ọchụchọ. Nwere ike ịbụ efu ma ọ bụ udi.', 'type' => 'enum', 'default' => null, 'values' => [null, 'udi']],
                'dir' => ['title' => 'Atiya ID ma ọ bụ aha. Na-enweta ngwaahịa n\'ụdị a mgbe edobere ya.', 'type' => 'nke ọ bụla', 'default' => null],
                'products_only' => ['title' => 'Nweta naanị ngwaahịa (otu anaghị etinye).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Nweta naanị otu (ngwaahịa anaghị etinye).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Nweta ozi dị iche iche zuru oke.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(naanị mgbe ị na-enweta ngwaahịa dị ka onye nchịkwa) Nweta ndepụta ngwaahịa na-enweghị ọnụ ahịa, ọnụego, ma ọ bụ ọnụ ọgụgụ.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'n\'usoro',
                    '_object' => 'Ngwaahịa',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'n\'usoro',
                    '_object' => 'Otu',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ihe',
                    '_object' => 'Otu',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,parent_id,filters')
                ],


            ]
        ],

        /**
         * @see ProductController::api_getMyProduct()
         */
        'Get product info' => [
            'auth' => true,
            'scope' => ProductController::GET_MY_PRODUCTS_SCOPE,
            'permissions' => ProductController::GET_MY_PRODUCTS_PERMISSION,
            'description' => 'Nweta ozi ngwaahịa na ọnụ ọgụgụ.',
            'url' => 'ụlọ ahịa/{shop_id}/ngwaahịa/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ihe',
                    '_object' => 'Ngwaahịa',
                    'structure' => array_merge(Product::STRUCTURE, [
                        'category' => [
                            '_type' => 'object',
                            '_object' => 'Category',
                            'structure' => ShopCategory::STRUCTURE
                        ],
                        'images' => [
                            '_type' => 'array',
                            '_object' => 'Product-Image',
                            'structure' => ProductImages::CustomStructure('id,path,variant_id')
                        ],
                        'product_variants' => [
                            '_type' => 'array',
                            '_object' => 'Variant',
                            'structure' => ProductVariant::STRUCTURE
                        ],

                        'shop' => [
                            '_type' => 'object',
                            '_object' => 'Shop',
                            'structure' => Shop::CustomStructure('id,name')
                        ],
                        'article' => [
                            '_type' => 'object',
                            '_object' => 'Article',
                            'structure' => Article::STRUCTURE
                        ],


                        'ratings' => [
                            '_type' => 'array',
                            '_object' => 'Rating',
                            'structure' => ShopRating::CustomStructure('id,name,value,count')
                        ],

                    ]),
                ],
                'data' => [
                    '_type' => 'n\'usoro',
                    '_object' => 'Ngwaahịa-Data',
                    'title' => 'ikpeazụ 30 ụbọchị data',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Iwu que ozi.',
                    'type' => 'Mebere: gụọ (int)|Anụ ahụ: [ọnụ, nnyefe_state] (n\'usoro)'
                ],

                'new_comments_count' => [
                    'title' => 'Ọhụrụ kwuru ọnụ.',
                    'type' => 'int'
                ],

            ]

            ],

        /**
         * @see ProductAddController::api_addProduct()
         */
        'Add new product' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Tinye ngwaahịa ọhụrụ na ụlọ ahịa ahụ.',
            'url' => 'ụlọ ahịa/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Tọọ ụdị ngwaahịa/ọrụ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ọnụ ahịa ngwaahịa.', 'type' => 'sere n\'elu', 'require' => true],
                'commission' => ['title' => 'Tinye kọmishọna na ọnụahịa.', 'type' => 'sere n\'elu', 'default' => 0],
                'discount' => ['title' => 'Mbelata ọnụahịa ngwaahịa mbụ.', 'type' => 'sere n\'elu', 'default' => 0],
                'dis_start' => ['title' => 'Oge mmalite ego ego na mpaghara oge UTC (ụdị: YYYY-MM-DD HH:mm:ss).', 'type' => 'ụbọchị', 'default' => null],
                'dis_end' => ['title' => 'Oge ngwụcha ego na mpaghara oge UTC (ụdị: YYYY-MM-DD HH:mm:ss).', 'type' => 'ụbọchị', 'default' => null],
                'currency' => ['title' => 'Ego,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Aha ngwaahịa.", 'type' => 'eriri', 'require' => true],
                'title_en' => ['title' => 'Aha Bekee nke ngwaahịa (ma ọ bụ aha sub aha)', 'type' => 'eriri', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'eriri', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'eriri', 'default' => null],
                'gtin' => ['title' => "Nọmba Ihe Azụmahịa zuru ụwa ọnụ nke ngwaahịa.", 'type' => 'eriri', 'default' => null],
                'gpc' => ['title' => 'Koodu mpaghara ngwaahịa Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Ọnọdụ ihe dị ugbu a na ụlọ ahịa gị.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Gosi onye ọrụ ozi ma ọ bụrụ na mpaghara ntinye dị (eji maka ngwaahịa mebere).', 'type' => 'eriri', 'default' => null],
                'inputs' => ['title' => 'Oghere ntinye nhọrọ (eji maka ngwaahịa mebere).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Mpaghara mmepụta nhọrọ (eji maka ngwaahịa mebere).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'blọọgụ nhọrọ ma ọ bụ url webụsaịtị.', 'type' => 'eriri', 'default' => false],
                'status' => ['title' => 'Ọkwa ngwaahịa Mepee / Mechie, Ihe ndabara mepere emepe.', 'type' => 'enum', 'default' => 'Mepee', 'values' => ['Mepee', 'Mechie']],
                'category_id' => ['title' => 'ụdị id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Ogologo oge n\'ime awa..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Ụdị ngwaahịa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ụdị ngwaahịa..', 'type' => 'eriri', 'default' => null],
                'warranty' => ['title' => 'nkọwa akwụkwọ ikike..', 'type' => 'eriri', 'default' => null],
                'original' => ['title' => 'Ngwaahịa a bụ nke izizi?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Weghachite akwụkwọ ikike site na ụbọchị.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ihe',
                    '_object' => 'Ngwaahịa',
                    'structure' => Product::STRUCTURE
                ],
            ]
        ],



        /**
         * @see ProductEditController::api_editProduct()
         */
        'Edit product' => [
            'auth' => true,
            'scope' => ProductEditController::EDIT_PRODUCT_SCOPE,
            'permissions' => ProductEditController::EDIT_PERMISSION,
            'description' => 'Tinye ngwaahịa ọhụrụ na ụlọ ahịa ahụ.',
            'url' => 'ụlọ ahịa/{shop_id}/ngwaahịa/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Tọọ ụdị ngwaahịa/ọrụ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ọnụ ahịa ngwaahịa.', 'type' => 'sere n\'elu', 'require' => true],
                'commission' => ['title' => 'Tinye kọmishọna na ọnụahịa.', 'type' => 'sere n\'elu', 'default' => 0],
                'discount' => ['title' => 'Mbelata ọnụahịa ngwaahịa mbụ.', 'type' => 'sere n\'elu', 'default' => 0],
                'dis_start' => ['title' => 'Oge mmalite ego ego na mpaghara oge UTC (ụdị: YYYY-MM-DD HH:mm:ss).', 'type' => 'ụbọchị', 'default' => null],
                'dis_end' => ['title' => 'Oge ngwụcha ego na mpaghara oge UTC (ụdị: YYYY-MM-DD HH:mm:ss).', 'type' => 'ụbọchị', 'default' => null],
                'currency' => ['title' => 'Ego,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Aha ngwaahịa.", 'type' => 'eriri', 'require' => true],
                'title_en' => ['title' => 'Aha Bekee nke ngwaahịa (ma ọ bụ aha sub aha)', 'type' => 'eriri', 'default' => null],
                'message' => ['title' => 'Gosi onye ọrụ ozi ma ọ bụrụ na mpaghara ntinye dị (eji maka ngwaahịa mebere).', 'type' => 'eriri', 'default' => null],
                'inputs' => ['title' => 'Oghere ntinye nhọrọ (eji maka ngwaahịa mebere).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Mpaghara mmepụta nhọrọ (eji maka ngwaahịa mebere).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'blọọgụ nhọrọ ma ọ bụ url webụsaịtị.', 'type' => 'eriri', 'default' => false],
                'status' => ['title' => 'Ọkwa ngwaahịa Mepee / Mechie, Ihe ndabara mepere emepe.', 'type' => 'enum', 'default' => 'Mepee', 'values' => ['Mepee', 'Mechie']],
                'category_id' => ['title' => 'ụdị id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Ogologo oge n\'ime awa..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Ụdị ngwaahịa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ụdị ngwaahịa..', 'type' => 'eriri', 'default' => null],
                'warranty' => ['title' => 'nkọwa akwụkwọ ikike..', 'type' => 'eriri', 'default' => null],
                'original' => ['title' => 'Ngwaahịa a bụ nke izizi?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Weghachite akwụkwọ ikike site na ụbọchị.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ihe',
                    '_object' => 'Ngwaahịa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Ala ngwaahịa emelitere nke ọma.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Tinye ngwaahịa ọhụrụ site na sku n\'ụlọ ahịa.',
            'url' => 'ụlọ ahịa/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'eriri', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Atiri setịpụrụ akpaaka', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Tinye ngwaahịa na udi a site na ụdị id n\'ime ụlọ ahịa ahụ.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Ọnụ ahịa ngwaahịa.', 'type' => 'sere n\'elu', 'require' => true],
                'currency' => ['title' => 'Ego,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Ọnụọgụ', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ihe',
                    '_object' => 'Ngwaahịa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Ala ngwaahịa emelitere nke ọma.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
