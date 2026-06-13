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
            'description' => 'Pata orodha ya bidhaa za duka.',
            'url' => 'maduka/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Onyesha bidhaa zinazopatikana pekee. Inaweza kuwa kweli au uongo.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Pata daraja la kategoria ya mzazi. Inaweza kuwa kweli au uongo.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Kukabiliana na orodha ya bidhaa (kwa pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Idadi ya bidhaa katika orodha (kwa pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Aina ya aina ya orodha', 'type' => 'enum', 'default' => null, 'values' => [null, 'kuhusiana', 'waliotembelewa_ zaidi', 'maarufu_zaidi', 'mpya zaidi', 'inayouzwa zaidi', 'gharama nafuu', 'ghali_zaidi', 'nasibu', 'kuhusiana', 'favorite', 'nasibu']],
                'product_id' => ['title' => 'Bidhaa ID inayotumika kurudisha bidhaa zinazohusiana (panga = zinazohusiana).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Seti ya data ya bidhaa. Inaweza kuwa batili au maalum (batili: chaguo-msingi, maalum: iliyoboreshwa kwa kupata vipimo).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Tafuta maandishi', 'type' => 'kamba', 'default' => null],
                'search_type' => ['title' => 'Aina ya utafutaji. Inaweza kuwa null au kategoria.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategoria']],
                'dir' => ['title' => 'Kitengo ID au jina. Hupata bidhaa katika aina hii inapowekwa.', 'type' => 'yoyote', 'default' => null],
                'products_only' => ['title' => 'Pata bidhaa pekee (aina hazijajumuishwa).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Pata kategoria pekee (bidhaa hazijajumuishwa).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Pata maelezo kamili ya lahaja.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Unapopata bidhaa tu kama msimamizi) Pata orodha ya bidhaa bila bei, bei au takwimu.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'safu',
                    '_object' => 'Bidhaa',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'safu',
                    '_object' => 'Kategoria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'kitu',
                    '_object' => 'Kategoria',
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
            'description' => 'Pata maelezo ya bidhaa na takwimu.',
            'url' => 'maduka/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'kitu',
                    '_object' => 'Bidhaa',
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
                    '_type' => 'safu',
                    '_object' => 'Bidhaa-Data',
                    'title' => 'data ya siku 30 zilizopita',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Maagizo kwa habari.',
                    'type' => 'Kiukweli: hesabu (int)|Kimwili: [hesabu, utoaji_hali] (safu)'
                ],

                'new_comments_count' => [
                    'title' => 'Maoni mapya yanahesabiwa.',
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
            'description' => 'Ongeza bidhaa mpya kwenye duka.',
            'url' => 'maduka/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Weka aina ya bidhaa/huduma.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Bei ya bidhaa.', 'type' => 'kuelea', 'require' => true],
                'commission' => ['title' => 'Ongeza tume kwa bei.', 'type' => 'kuelea', 'default' => 0],
                'discount' => ['title' => 'Punguzo la bei ya bidhaa chaguomsingi.', 'type' => 'kuelea', 'default' => 0],
                'dis_start' => ['title' => 'Muda wa kuanza kwa punguzo katika saa za eneo la UTC (muundo: YYYY-MM-DD HH:mm:ss).', 'type' => 'tarehe', 'default' => null],
                'dis_end' => ['title' => 'Muda wa mwisho wa punguzo katika saa za eneo la UTC (muundo: YYYY-MM-DD HH:mm:ss).', 'type' => 'tarehe', 'default' => null],
                'currency' => ['title' => 'Sarafu,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Jina la bidhaa.", 'type' => 'kamba', 'require' => true],
                'title_en' => ['title' => 'Jina la Kiingereza la bidhaa (au kichwa kidogo)', 'type' => 'kamba', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'kamba', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'kamba', 'default' => null],
                'gtin' => ['title' => "Nambari ya Bidhaa ya Biashara ya Kimataifa.", 'type' => 'kamba', 'default' => null],
                'gpc' => ['title' => 'Msimbo wa aina ya bidhaa za Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Hali ya sasa ya bidhaa kwenye duka lako.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Ujumbe huonyeshwa kwa mtumiaji ikiwa sehemu za ingizo zipo (zinazotumika kwa bidhaa pepe).', 'type' => 'kamba', 'default' => null],
                'inputs' => ['title' => 'Sehemu za hiari za kuingiza (zinazotumika kwa bidhaa pepe).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Sehemu za pato za hiari (zinazotumika kwa bidhaa pepe).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blogu ya hiari au url ya tovuti.', 'type' => 'kamba', 'default' => false],
                'status' => ['title' => 'hali ya bidhaa Fungua / Funga, Chaguomsingi ni Fungua.', 'type' => 'enum', 'default' => 'Fungua', 'values' => ['Fungua', 'Funga']],
                'category_id' => ['title' => 'kitambulisho cha kategoria.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Muda wa kuongoza kwa saa..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Mtindo wa bidhaa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Brand ya bidhaa..', 'type' => 'kamba', 'default' => null],
                'warranty' => ['title' => 'maelezo ya dhamana..', 'type' => 'kamba', 'default' => null],
                'original' => ['title' => 'Bidhaa hii ni ya asili?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Rudisha udhamini kwa siku.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'kitu',
                    '_object' => 'Bidhaa',
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
            'description' => 'Ongeza bidhaa mpya kwenye duka.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Weka aina ya bidhaa/huduma.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Bei ya bidhaa.', 'type' => 'kuelea', 'require' => true],
                'commission' => ['title' => 'Ongeza tume kwa bei.', 'type' => 'kuelea', 'default' => 0],
                'discount' => ['title' => 'Punguzo la bei ya bidhaa chaguomsingi.', 'type' => 'kuelea', 'default' => 0],
                'dis_start' => ['title' => 'Muda wa kuanza kwa punguzo katika saa za eneo la UTC (muundo: YYYY-MM-DD HH:mm:ss).', 'type' => 'tarehe', 'default' => null],
                'dis_end' => ['title' => 'Muda wa mwisho wa punguzo katika saa za eneo la UTC (muundo: YYYY-MM-DD HH:mm:ss).', 'type' => 'tarehe', 'default' => null],
                'currency' => ['title' => 'Sarafu,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Jina la bidhaa.", 'type' => 'kamba', 'require' => true],
                'title_en' => ['title' => 'Jina la Kiingereza la bidhaa (au kichwa kidogo)', 'type' => 'kamba', 'default' => null],
                'message' => ['title' => 'Ujumbe huonyeshwa kwa mtumiaji ikiwa sehemu za ingizo zipo (zinazotumika kwa bidhaa pepe).', 'type' => 'kamba', 'default' => null],
                'inputs' => ['title' => 'Sehemu za hiari za kuingiza (zinazotumika kwa bidhaa pepe).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Sehemu za pato za hiari (zinazotumika kwa bidhaa pepe).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blogu ya hiari au url ya tovuti.', 'type' => 'kamba', 'default' => false],
                'status' => ['title' => 'hali ya bidhaa Fungua / Funga, Chaguomsingi ni Fungua.', 'type' => 'enum', 'default' => 'Fungua', 'values' => ['Fungua', 'Funga']],
                'category_id' => ['title' => 'kitambulisho cha kategoria.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Muda wa kuongoza kwa saa..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Mtindo wa bidhaa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Brand ya bidhaa..', 'type' => 'kamba', 'default' => null],
                'warranty' => ['title' => 'maelezo ya dhamana..', 'type' => 'kamba', 'default' => null],
                'original' => ['title' => 'Bidhaa hii ni ya asili?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Rudisha udhamini kwa siku.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'kitu',
                    '_object' => 'Bidhaa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Umesasisha hali ya bidhaa.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ongeza bidhaa mpya kutoka kwa ghala kwa sku hadi dukani.',
            'url' => 'maduka/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'kamba', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kuweka otomatiki kategoria', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Bidhaa ongeza kwa kategoria hii kwa kitambulisho cha kategoria kwenye duka.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Bei ya bidhaa.', 'type' => 'kuelea', 'require' => true],
                'currency' => ['title' => 'Sarafu,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kiasi', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'kitu',
                    '_object' => 'Bidhaa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Umesasisha hali ya bidhaa.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
