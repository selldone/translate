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
            'description' => 'Tikina te rarangi hua o te toa.',
            'url' => 'toa/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Whakaatuhia nga hua e waatea ana. Ka taea te pono, te teka ranei.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Tikina te aroākapa kāwai matua. Ka taea te pono, te teka ranei.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Wehenga o te rarangi hua (mo te whakaingoatanga).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Te maha o nga hua kei te rarangi (mo te whakaingoatanga).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Rarangi momo momo', 'type' => 'enum', 'default' => null, 'values' => [null, 'pātahi', 'te nuinga_toro', 'tino_rongonui', 'hōu', 'hoko pai', 'iti rawa', 'tino_utu', 'matapōkeretia', 'pātahi', 'tino pai', 'matapōkeretia']],
                'product_id' => ['title' => 'Hua ID whakamahia hei whakahoki i nga hua e pa ana (ahua = e pa ana).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'huinga raraunga hua. Ka taea te kore, te tohu ranei (null: taunoa, spec: kua arotauhia mo te tiki korero).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Rapu kuputuhi', 'type' => 'aho', 'default' => null],
                'search_type' => ['title' => 'Momo rapu. Ka taea te kore, te waahanga ranei.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kāwai']],
                'dir' => ['title' => 'Kāwai ID ingoa ranei. Ka whiwhi hua i tenei waahanga ina whakaritea.', 'type' => 'tetahi', 'default' => null],
                'products_only' => ['title' => 'Tikina nga hua anake (kaore i whakauruhia nga waahanga).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Tikina nga waahanga anake (kaore nga hua i whakauruhia).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Tikina nga korero rereke katoa.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Ka whiwhi hua anake hei kaiwhakahaere) Tikina te rarangi hua kaore he utu, reeti, tatauranga ranei.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'huinga',
                    '_object' => 'Hua',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'huinga',
                    '_object' => 'Kāwai',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ahanoa',
                    '_object' => 'Kāwai',
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
            'description' => 'Tikina nga korero hua me nga tatauranga.',
            'url' => 'toa/{shop_id}/hua/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ahanoa',
                    '_object' => 'Hua',
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
                    '_type' => 'huinga',
                    '_object' => 'Hua-Raraunga',
                    'title' => 'raraunga 30 ra whakamutunga',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Nga ota ki nga korero.',
                    'type' => 'Mariko: tatau (int)|A-tinana: [tatau, te ahua_tuku] (te huānga)'
                ],

                'new_comments_count' => [
                    'title' => 'Ka tatau nga korero hou.',
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
            'description' => 'Tāpiri hua hou ki te toa.',
            'url' => 'toa/{shop_id}/product/apiri',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Tautuhi momo hua / ratonga.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Utu o te hua.', 'type' => 'mānu', 'require' => true],
                'commission' => ['title' => 'Tāpirihia he komihana ki te utu.', 'type' => 'mānu', 'default' => 0],
                'discount' => ['title' => 'utu utu hua taunoa.', 'type' => 'mānu', 'default' => 0],
                'dis_start' => ['title' => 'Wā tīmatanga hekenga i te rohe wā UTC (hōputu: YYYY-MM-DD HH:mm:ss).', 'type' => 'rā', 'default' => null],
                'dis_end' => ['title' => 'Te wa mutunga utu i roto i te rohe wa UTC (hōputu: YYYY-MM-DD HH:mm:ss).', 'type' => 'rā', 'default' => null],
                'currency' => ['title' => 'Moni,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Te taitara o te hua.", 'type' => 'aho', 'require' => true],
                'title_en' => ['title' => 'Taitara Ingarihi o te hua (taitara iti ranei)', 'type' => 'aho', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'aho', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'aho', 'default' => null],
                'gtin' => ['title' => "Te Tau Tuemi Tauhokohoko Ao o te Hua.", 'type' => 'aho', 'default' => null],
                'gpc' => ['title' => 'Waehere kāwai hua Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Ko te ahuatanga o te taonga kei roto i to toa.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Whakaatu karere ki te kaiwhakamahi mena kei te noho nga mara whakauru (whakamahia mo nga hua mariko).', 'type' => 'aho', 'default' => null],
                'inputs' => ['title' => 'Ko nga waahi whakauru (whakamahia mo nga hua mariko).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Ko nga waahanga whakaputa (whakamahia mo nga hua mariko).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'He rangitaki, he url paetukutuku ranei.', 'type' => 'aho', 'default' => false],
                'status' => ['title' => 'tūnga hua Tuwhera / Katia, Ka tuwhera te Taunoa.', 'type' => 'enum', 'default' => 'Tuwhera', 'values' => ['Tuwhera', 'Katia']],
                'category_id' => ['title' => 'id kāwai.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Te wa arahi i nga haora..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Te ahua o te hua (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Waitohu hua..', 'type' => 'aho', 'default' => null],
                'warranty' => ['title' => 'whakaahuatanga whakamana..', 'type' => 'aho', 'default' => null],
                'original' => ['title' => 'He taketake tenei hua?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Whakahokia te whakamana i nga ra.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ahanoa',
                    '_object' => 'Hua',
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
            'description' => 'Tāpiri hua hou ki te toa.',
            'url' => 'toa/{shop_id}/hua/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Tautuhi momo hua / ratonga.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Utu o te hua.', 'type' => 'mānu', 'require' => true],
                'commission' => ['title' => 'Tāpirihia he komihana ki te utu.', 'type' => 'mānu', 'default' => 0],
                'discount' => ['title' => 'utu utu hua taunoa.', 'type' => 'mānu', 'default' => 0],
                'dis_start' => ['title' => 'Wā tīmatanga hekenga i te rohe wā UTC (hōputu: YYYY-MM-DD HH:mm:ss).', 'type' => 'rā', 'default' => null],
                'dis_end' => ['title' => 'Te wa mutunga utu i roto i te rohe wa UTC (hōputu: YYYY-MM-DD HH:mm:ss).', 'type' => 'rā', 'default' => null],
                'currency' => ['title' => 'Moni,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Te taitara o te hua.", 'type' => 'aho', 'require' => true],
                'title_en' => ['title' => 'Taitara Ingarihi o te hua (taitara iti ranei)', 'type' => 'aho', 'default' => null],
                'message' => ['title' => 'Whakaatu karere ki te kaiwhakamahi mena kei te noho nga mara whakauru (whakamahia mo nga hua mariko).', 'type' => 'aho', 'default' => null],
                'inputs' => ['title' => 'Ko nga waahi whakauru (whakamahia mo nga hua mariko).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Ko nga waahanga whakaputa (whakamahia mo nga hua mariko).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'He rangitaki, he url paetukutuku ranei.', 'type' => 'aho', 'default' => false],
                'status' => ['title' => 'tūnga hua Tuwhera / Katia, Ka tuwhera te Taunoa.', 'type' => 'enum', 'default' => 'Tuwhera', 'values' => ['Tuwhera', 'Katia']],
                'category_id' => ['title' => 'id kāwai.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Te wa arahi i nga haora..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Te ahua o te hua (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Waitohu hua..', 'type' => 'aho', 'default' => null],
                'warranty' => ['title' => 'whakaahuatanga whakamana..', 'type' => 'aho', 'default' => null],
                'original' => ['title' => 'He taketake tenei hua?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Whakahokia te whakamana i nga ra.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ahanoa',
                    '_object' => 'Hua',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Angitu te ahua o nga hua kua whakahoutia.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Taapirihia he hua hou mai i te putunga na sku ki te toa.',
            'url' => 'toa/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'aho', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Tautuhi aunoa kāwai', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Ko nga hua ka taapirihia ki tenei waahanga ma te waahanga id i te toa.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Utu o te hua.', 'type' => 'mānu', 'require' => true],
                'currency' => ['title' => 'Moni,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Te nui', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ahanoa',
                    '_object' => 'Hua',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Angitu te ahua o nga hua kua whakahoutia.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
