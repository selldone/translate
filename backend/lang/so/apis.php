<?php

use App\Http\Controllers\Shop\Product\ProductAddController;
use App\Http\Controllers\Shop\Product\ProductController;
use App\Http\Controllers\Shop\Product\ProductEditController;
use App\Backoffice\Account\Enums\Currency;
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
            'description' => 'Hel liiska alaabta dukaanka.',
            'url' => 'dukaamada/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Muuji kaliya alaabta la heli karo Run iyo been buu noqon karaa.', 'type' => 'booliyan', 'default' => false],
                'with_parent' => ['title' => 'Hel kala sareynta qaybta waalidka. Run iyo been buu noqon karaa.', 'type' => 'booliyan', 'default' => false],
                'offset' => ['title' => 'Dejinta liiska alaabta (ee boggaga).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Tirada alaabta liiska ku jirta (ee boggaga).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Ku tax nooca nooca', 'type' => 'tiro', 'default' => null, 'values' => [null, 'la xidhiidha', 'inta badan_booqdey', 'ugu_caansan', 'ugu cusub', 'iibka badan', 'ugu jaban', 'ugu_qaalisan', 'random', 'la xidhiidha', 'jecel yahay', 'random']],
                'product_id' => ['title' => 'Alaabta ID loo isticmaalo in lagu soo celiyo alaabta la xidhiidha (nooca = la xidhiidha).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Dejinta xogta alaabta. Waxa uu noqon karaa mid aan waxba ka jirin ama sifayn (null: default, spec: loo habeeyay soo celinta tilmaamo).', 'type' => 'tiro', 'default' => null, 'values' => [null, 'gaar ah']],
                'search' => ['title' => 'Ka raadi qoraalka', 'type' => 'xadhig', 'default' => null],
                'search_type' => ['title' => 'Nooca raadinta. Waxay noqon kartaa wax aan jirin ama qayb.', 'type' => 'tiro', 'default' => null, 'values' => [null, 'qaybta']],
                'dir' => ['title' => 'Qaybta ID ama magaca. Waxay helaysaa alaabo qaybtan marka la dejiyo.', 'type' => 'mid kasta', 'default' => null],
                'products_only' => ['title' => 'Kaliya hel badeecooyinka (qaybaha kuma jiraan).', 'type' => 'booliyan', 'default' => false],
                'categories_only' => ['title' => 'Hel qaybaha kaliya (alaabta kuma jiraan).', 'type' => 'booliyan', 'default' => false],
                'need_full_variants' => ['title' => 'Hel macluumaad kala duwan oo buuxa.', 'type' => 'booliyan', 'default' => false],
                'optimized' => ['title' => '(Kaliya marka aad alaabta u helayso maamule ahaan) Hel liiska alaabta iyada oo aan qiimo lahayn, qiime ama tirakoob.', 'type' => 'booliyan', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'diyaarin',
                    '_object' => 'Alaabta',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'diyaarin',
                    '_object' => 'Qaybta',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'shay',
                    '_object' => 'Qaybta',
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
            'description' => 'Hel macluumaadka alaabta iyo tirakoobka.',
            'url' => 'dukaamada/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'shay',
                    '_object' => 'Alaabta',
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
                    '_type' => 'diyaarin',
                    '_object' => 'Xogta- Alaabta',
                    'title' => 'xogta 30 maalmood ee la soo dhaafay',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Dalbado que info.',
                    'type' => 'Virtual: tirinta (int)|Jireed: [tirinta, gaarsiinta_state] (habayn)'
                ],

                'new_comments_count' => [
                    'title' => 'Faallooyinka cusub ayaa tirinaya',
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
            'description' => 'Ku dar badeeco cusub dukaanka',
            'url' => 'dukaamada/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Deji nooca badeecada/adeegga.', 'type' => 'tiro', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Qiimaha alaabta.', 'type' => 'sabeyn', 'require' => true],
                'commission' => ['title' => 'Ku dar komishanka qiimaha', 'type' => 'sabeyn', 'default' => 0],
                'discount' => ['title' => 'Qiimo dhimista alaabta caadiga ah.', 'type' => 'sabeyn', 'default' => 0],
                'dis_start' => ['title' => 'Wakhtiga bilawga dhimista ee aagga wakhtiga UTC (qaabka: YYYY-MM-DD HH:mm:ss).', 'type' => 'taariikhda', 'default' => null],
                'dis_end' => ['title' => 'Dhimista wakhtiga dhamaadka wakhtiga UTC (qaabka: YYYY-MM-DD HH:mm:ss).', 'type' => 'taariikhda', 'default' => null],
                'currency' => ['title' => 'Lacagta,', 'type' => 'tiro', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Magaca badeecada.", 'type' => 'xadhig', 'require' => true],
                'title_en' => ['title' => 'Magaca Ingiriisida ee alaabta (ama cinwaan hoose)', 'type' => 'xadhig', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'xadhig', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'xadhig', 'default' => null],
                'gtin' => ['title' => "Nambarka Shayga Ganacsiga Caalamiga ah ee Alaabta.", 'type' => 'xadhig', 'default' => null],
                'gpc' => ['title' => 'Koodhka qaybta alaabta Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Xaaladda shayga hadda ee dukaankaaga.", 'type' => 'tiro', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Fariinta ayaa tusi isticmaalaha haddii meelaha wax gelinta ahi jiraan (loo isticmaalo alaabada farsamada gacanta).', 'type' => 'xadhig', 'default' => null],
                'inputs' => ['title' => 'Garoomada gelinta ikhtiyaariga ah (loo isticmaalo alaabada casriga ah).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Goobaha wax-soo-saarka ee ikhtiyaarka ah (loo isticmaalo alaabta farsamada).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog ama website url ikhtiyaari ah.', 'type' => 'xadhig', 'default' => false],
                'status' => ['title' => 'heerka sheyga Fur / Xidh, Default waa furan yahay.', 'type' => 'tiro', 'default' => 'Furan', 'values' => ['Furan', 'Xir']],
                'category_id' => ['title' => 'qaybta id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Waqtiga hogaaminta saacado gudahood..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Habka badeecada (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Nooca badeecada', 'type' => 'xadhig', 'default' => null],
                'warranty' => ['title' => 'Sharaxaada dammaanadda', 'type' => 'xadhig', 'default' => null],
                'original' => ['title' => 'Alaabtani waa asal?', 'type' => 'booliyan', 'default' => false],
                'return_warranty' => ['title' => 'Soo celi dammaanadda maalmo.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'shay',
                    '_object' => 'Alaabta',
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
            'description' => 'Ku dar badeeco cusub dukaanka',
            'url' => 'dukaamada/{shop_id}/products/{product_id}/wax ka beddel',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Deji nooca badeecada/adeegga.', 'type' => 'tiro', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Qiimaha alaabta.', 'type' => 'sabeyn', 'require' => true],
                'commission' => ['title' => 'Ku dar komishanka qiimaha', 'type' => 'sabeyn', 'default' => 0],
                'discount' => ['title' => 'Qiimo dhimista alaabta caadiga ah.', 'type' => 'sabeyn', 'default' => 0],
                'dis_start' => ['title' => 'Wakhtiga bilawga dhimista ee aagga wakhtiga UTC (qaabka: YYYY-MM-DD HH:mm:ss).', 'type' => 'taariikhda', 'default' => null],
                'dis_end' => ['title' => 'Dhimista wakhtiga dhamaadka wakhtiga UTC (qaabka: YYYY-MM-DD HH:mm:ss).', 'type' => 'taariikhda', 'default' => null],
                'currency' => ['title' => 'Lacagta,', 'type' => 'tiro', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Magaca badeecada.", 'type' => 'xadhig', 'require' => true],
                'title_en' => ['title' => 'Magaca Ingiriisida ee alaabta (ama cinwaan hoose)', 'type' => 'xadhig', 'default' => null],
                'message' => ['title' => 'Fariinta ayaa tusi isticmaalaha haddii meelaha wax gelinta ahi jiraan (loo isticmaalo alaabada farsamada gacanta).', 'type' => 'xadhig', 'default' => null],
                'inputs' => ['title' => 'Garoomada gelinta ikhtiyaariga ah (loo isticmaalo alaabada casriga ah).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Goobaha wax-soo-saarka ee ikhtiyaarka ah (loo isticmaalo alaabta farsamada).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog ama website url ikhtiyaari ah.', 'type' => 'xadhig', 'default' => false],
                'status' => ['title' => 'heerka sheyga Fur / Xidh, Default waa furan yahay.', 'type' => 'tiro', 'default' => 'Furan', 'values' => ['Furan', 'Xir']],
                'category_id' => ['title' => 'qaybta id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Waqtiga hogaaminta saacado gudahood..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Habka badeecada (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Nooca badeecada', 'type' => 'xadhig', 'default' => null],
                'warranty' => ['title' => 'Sharaxaada dammaanadda', 'type' => 'xadhig', 'default' => null],
                'original' => ['title' => 'Alaabtani waa asal?', 'type' => 'booliyan', 'default' => false],
                'return_warranty' => ['title' => 'Soo celi dammaanadda maalmo.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'shay',
                    '_object' => 'Alaabta',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Xaaladda badeecada oo la cusboonaysiiyay.', 'type' => 'booliyan'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ku dar badeeco cusub bakhaar sku dukaanka',
            'url' => 'dukaamada/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'xadhig', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Qeybta otomaatiga ah', 'type' => 'booliyan', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Alaabta ku dar noocaan oo ah nooca aqoonsiga dukaanka.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Qiimaha alaabta.', 'type' => 'sabeyn', 'require' => true],
                'currency' => ['title' => 'Lacagta,', 'type' => 'tiro', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Tirada', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'shay',
                    '_object' => 'Alaabta',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Xaaladda badeecada oo la cusboonaysiiyay.', 'type' => 'booliyan'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
