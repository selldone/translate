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
            'description' => 'Faigh liosta táirgí an tsiopa.',
            'url' => 'siopaí/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Taispeáin táirgí atá ar fáil amháin. Is féidir a bheith fíor nó bréagach.', 'type' => 'Boole', 'default' => false],
                'with_parent' => ['title' => 'Faigh ordlathas na gcatagóirí tuismitheora. Is féidir a bheith fíor nó bréagach.', 'type' => 'Boole', 'default' => false],
                'offset' => ['title' => 'Fritháireamh ar an liosta táirgí (le haghaidh leathanach).', 'type' => 'slánuimhir', 'default' => 0],
                'limit' => ['title' => 'Líon na dtáirgí ar an liosta (le haghaidh leathanach).', 'type' => 'slánuimhir', 'default' => 20],
                'sort' => ['title' => 'Cineál sórtála liosta', 'type' => 'áim', 'default' => null, 'values' => [null, 'gaolmhar', 'is mó_cuairt', 'is mó_tóir', 'is nuaí', 'bestselling', 'saoire', 'is_daor', 'fánach', 'gaolmhar', 'is fearr leat', 'fánach']],
                'product_id' => ['title' => 'Táirge ID a úsáidtear chun táirgí gaolmhara a thabhairt ar ais (sórtáil = gaolmhar).', 'type' => 'slánuimhir', 'default' => null],
                'set' => ['title' => 'Tacar sonraí táirge. Is féidir é a bheith null nó sonrú (null: réamhshocraithe, sonrú: optamaithe chun sonraíochtaí a aisghabháil).', 'type' => 'áim', 'default' => null, 'values' => [null, 'sonra']],
                'search' => ['title' => 'Cuardaigh téacs', 'type' => 'teaghrán', 'default' => null],
                'search_type' => ['title' => 'Cineál cuardaigh. Is féidir a bheith null nó catagóir.', 'type' => 'áim', 'default' => null, 'values' => [null, 'chatagóir']],
                'dir' => ['title' => 'Catagóir ID nó ainm. Faigheann sé táirgí sa chatagóir seo nuair a shocraítear é.', 'type' => 'ar bith', 'default' => null],
                'products_only' => ['title' => 'Faigh táirgí amháin (catagóirí nach bhfuil san áireamh).', 'type' => 'Boole', 'default' => false],
                'categories_only' => ['title' => 'Faigh catagóirí amháin (táirgí nach bhfuil san áireamh).', 'type' => 'Boole', 'default' => false],
                'need_full_variants' => ['title' => 'Faigh faisnéis leagan iomlán.', 'type' => 'Boole', 'default' => false],
                'optimized' => ['title' => '(Agus tú ag fáil táirgí mar riarthóir amháin) Faigh an liosta táirgí gan praghas, ráta ná staitisticí.', 'type' => 'Boole', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'eagar',
                    '_object' => 'Táirge',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'eagar',
                    '_object' => 'Catagóir',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'réad',
                    '_object' => 'Catagóir',
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
            'description' => 'Faigh faisnéis agus staitisticí táirge.',
            'url' => 'siopaí/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'réad',
                    '_object' => 'Táirge',
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
                    '_type' => 'eagar',
                    '_object' => 'Sonraí Táirge',
                    'title' => 'sonraí 30 lá anuas',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Orduithe mar eolas.',
                    'type' => 'Fíorúil: comhaireamh (int)|Fisiciúil: [comhaireamh, seachadadh_stát] (eagar)'
                ],

                'new_comments_count' => [
                    'title' => 'Tá tuairimí nua san áireamh.',
                    'type' => 'slánuimhir'
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
            'description' => 'Cuir táirge nua leis an siopa.',
            'url' => 'siopaí/{shop_id}/product/cuir leis',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Socraigh cineál an táirge / seirbhíse.', 'type' => 'áim', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Praghas an táirge.', 'type' => 'snámh', 'require' => true],
                'commission' => ['title' => 'Cuir coimisiún leis an bpraghas.', 'type' => 'snámh', 'default' => 0],
                'discount' => ['title' => 'Lascaine réamhshocraithe ar phraghas an táirge.', 'type' => 'snámh', 'default' => 0],
                'dis_start' => ['title' => 'Am tosaithe lascaine i gcrios ama UTC (formáid: YYYY-MM-DD HH:mm:ss).', 'type' => 'dáta', 'default' => null],
                'dis_end' => ['title' => 'Am deiridh lascaine i gcrios ama UTC (formáid: YYYY-MM-DD HH:mm:ss).', 'type' => 'dáta', 'default' => null],
                'currency' => ['title' => 'Airgeadra,', 'type' => 'áim', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Teideal an táirge.", 'type' => 'teaghrán', 'require' => true],
                'title_en' => ['title' => 'Teideal Béarla an táirge (nó fotheideal)', 'type' => 'teaghrán', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'teaghrán', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'teaghrán', 'default' => null],
                'gtin' => ['title' => "Uimhir Mhíre Trádála Dhomhanda an Táirge.", 'type' => 'teaghrán', 'default' => null],
                'gpc' => ['title' => 'Cód catagóir táirge Google.', 'type' => 'slánuimhir', 'default' => null],
                'condition' => ['title' => "Staid reatha na míre i do shiopa.", 'type' => 'áim', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Taispeáin teachtaireacht don úsáideoir má tá réimsí ionchuir ann (a úsáidtear le haghaidh táirgí fíorúla).', 'type' => 'teaghrán', 'default' => null],
                'inputs' => ['title' => 'Réimsí ionchuir roghnacha (a úsáidtear le haghaidh táirgí fíorúla).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Réimsí aschuir roghnacha (a úsáidtear le haghaidh táirgí fíorúla).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blag roghnach nó url láithreán gréasáin.', 'type' => 'teaghrán', 'default' => false],
                'status' => ['title' => 'stádas an táirge Oscail / Dún, tá Réamhshocrú Oscailte.', 'type' => 'áim', 'default' => 'Oscail', 'values' => ['Oscail', 'Dún']],
                'category_id' => ['title' => 'catagóir aitheantais.', 'type' => 'slánuimhir', 'default' => null],
                'lead' => ['title' => 'Am luaidhe in uaireanta saor in aisce,. .', 'type' => 'slánuimhir', 'default' => null],
                'style' => ['title' => 'Stíl an táirge (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Branda an táirge saor in aisce,. .', 'type' => 'teaghrán', 'default' => null],
                'warranty' => ['title' => 'Cur síos ar bharántas saor in aisce,. .', 'type' => 'teaghrán', 'default' => null],
                'original' => ['title' => 'Tá an táirge bunaidh?', 'type' => 'Boole', 'default' => false],
                'return_warranty' => ['title' => 'Barántas ar ais de réir laethanta.', 'type' => 'slánuimhir', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'réad',
                    '_object' => 'Táirge',
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
            'description' => 'Cuir táirge nua leis an siopa.',
            'url' => 'siopaí/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Socraigh cineál an táirge / seirbhíse.', 'type' => 'áim', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Praghas an táirge.', 'type' => 'snámh', 'require' => true],
                'commission' => ['title' => 'Cuir coimisiún leis an bpraghas.', 'type' => 'snámh', 'default' => 0],
                'discount' => ['title' => 'Lascaine réamhshocraithe ar phraghas an táirge.', 'type' => 'snámh', 'default' => 0],
                'dis_start' => ['title' => 'Am tosaithe lascaine i gcrios ama UTC (formáid: YYYY-MM-DD HH:mm:ss).', 'type' => 'dáta', 'default' => null],
                'dis_end' => ['title' => 'Am deiridh lascaine i gcrios ama UTC (formáid: YYYY-MM-DD HH:mm:ss).', 'type' => 'dáta', 'default' => null],
                'currency' => ['title' => 'Airgeadra,', 'type' => 'áim', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Teideal an táirge.", 'type' => 'teaghrán', 'require' => true],
                'title_en' => ['title' => 'Teideal Béarla an táirge (nó fotheideal)', 'type' => 'teaghrán', 'default' => null],
                'message' => ['title' => 'Taispeáin teachtaireacht don úsáideoir má tá réimsí ionchuir ann (a úsáidtear le haghaidh táirgí fíorúla).', 'type' => 'teaghrán', 'default' => null],
                'inputs' => ['title' => 'Réimsí ionchuir roghnacha (a úsáidtear le haghaidh táirgí fíorúla).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Réimsí aschuir roghnacha (a úsáidtear le haghaidh táirgí fíorúla).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blag roghnach nó url láithreán gréasáin.', 'type' => 'teaghrán', 'default' => false],
                'status' => ['title' => 'stádas an táirge Oscail / Dún, tá Réamhshocrú Oscailte.', 'type' => 'áim', 'default' => 'Oscail', 'values' => ['Oscail', 'Dún']],
                'category_id' => ['title' => 'catagóir aitheantais.', 'type' => 'slánuimhir', 'default' => null],
                'lead' => ['title' => 'Am luaidhe in uaireanta saor in aisce,. .', 'type' => 'slánuimhir', 'default' => null],
                'style' => ['title' => 'Stíl an táirge (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Branda an táirge saor in aisce,. .', 'type' => 'teaghrán', 'default' => null],
                'warranty' => ['title' => 'Cur síos ar bharántas saor in aisce,. .', 'type' => 'teaghrán', 'default' => null],
                'original' => ['title' => 'Tá an táirge bunaidh?', 'type' => 'Boole', 'default' => false],
                'return_warranty' => ['title' => 'Barántas ar ais de réir laethanta.', 'type' => 'slánuimhir', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'réad',
                    '_object' => 'Táirge',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'D\'éirigh le staid an táirge nuashonraithe.', 'type' => 'Boole'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Cuir táirge nua ón stór le sku chuig an siopa.',
            'url' => 'siopaí/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'teaghrán', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Catagóir socraithe uathoibríoch', 'type' => 'Boole', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Táirge a chur leis an gcatagóir seo de réir catagóire aitheantais sa siopa.', 'type' => 'slánuimhir', 'default' => null],

                'price' => ['title' => 'Praghas an táirge.', 'type' => 'snámh', 'require' => true],
                'currency' => ['title' => 'Airgeadra,', 'type' => 'áim', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Cainníocht', 'type' => 'slánuimhir', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'réad',
                    '_object' => 'Táirge',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'D\'éirigh le staid an táirge nuashonraithe.', 'type' => 'Boole'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
