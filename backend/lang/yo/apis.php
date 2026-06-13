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
            'description' => 'Gba atokọ ọja ti ile itaja naa.',
            'url' => 'ìsọ/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Ṣe afihan awọn ọja to wa nikan. Le jẹ otitọ tabi eke.', 'type' => 'boolianu', 'default' => false],
                'with_parent' => ['title' => 'Gba awọn logalomomoise eya ẹka. Le jẹ otitọ tabi eke.', 'type' => 'boolianu', 'default' => false],
                'offset' => ['title' => 'Aiṣedeede akojọ ọja (fun pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Nọmba awọn ọja ninu atokọ (fun pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Akojọ too iru', 'type' => 'enum', 'default' => null, 'values' => [null, 'ti o ni ibatan', 'julọ_ṣàbẹwò', 'olokiki julọ', 'tuntun', 'bestselling', 'lawin', 'gbowolori_julọ', 'laileto', 'ti o ni ibatan', 'ayanfẹ', 'laileto']],
                'product_id' => ['title' => 'Ọja ID ti a lo lati pada awọn ọja ti o ni ibatan (iru = ti o ni ibatan).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Ọja data ṣeto. Le jẹ asan tabi pato (asan: aiyipada, spec: iṣapeye fun gbigba awọn pato pada).', 'type' => 'enum', 'default' => null, 'values' => [null, 'ni pato']],
                'search' => ['title' => 'Wa ọrọ', 'type' => 'okun', 'default' => null],
                'search_type' => ['title' => 'Àwáàrí irú. Le jẹ asan tabi ẹka.', 'type' => 'enum', 'default' => null, 'values' => [null, 'ẹka']],
                'dir' => ['title' => 'Ẹka ID tabi orukọ. Ngba awọn ọja ni ẹka yii nigbati o ba ṣeto.', 'type' => 'eyikeyi', 'default' => null],
                'products_only' => ['title' => 'Gba awọn ọja nikan (awọn ẹka ko si).', 'type' => 'boolianu', 'default' => false],
                'categories_only' => ['title' => 'Gba awọn ẹka nikan (awọn ọja ko si).', 'type' => 'boolianu', 'default' => false],
                'need_full_variants' => ['title' => 'Gba alaye iyatọ ni kikun.', 'type' => 'boolianu', 'default' => false],
                'optimized' => ['title' => '(Nikan nigbati o ba n gba awọn ọja bi abojuto) Gba atokọ ọja laisi idiyele, oṣuwọn, tabi awọn iṣiro.', 'type' => 'boolianu', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'orun',
                    '_object' => 'Ọja',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'orun',
                    '_object' => 'Ẹka',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'nkan',
                    '_object' => 'Ẹka',
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
            'description' => 'Gba alaye ọja ati awọn iṣiro.',
            'url' => 'awọn ile itaja/{shop_id}/awọn ọja/{product_id}/abojuto',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'nkan',
                    '_object' => 'Ọja',
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
                    '_type' => 'orun',
                    '_object' => 'Ọja-Data',
                    'title' => 'kẹhin 30 ọjọ data',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Awọn ibere que info.',
                    'type' => 'Foju: kika (int)|Ti ara: [ka, ifijiṣẹ_state] (ona)'
                ],

                'new_comments_count' => [
                    'title' => 'Titun comments ka.',
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
            'description' => 'Ṣafikun ọja tuntun si ile itaja.',
            'url' => 'awọn ile itaja/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ṣeto iru ọja / iṣẹ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Iye owo ọja naa.', 'type' => 'leefofo loju omi', 'require' => true],
                'commission' => ['title' => 'Ṣafikun igbimọ si idiyele.', 'type' => 'leefofo loju omi', 'default' => 0],
                'discount' => ['title' => 'Ẹdinwo idiyele ọja aiyipada.', 'type' => 'leefofo loju omi', 'default' => 0],
                'dis_start' => ['title' => 'Akoko ibẹrẹ ẹdinwo ni agbegbe aago UTC (ọna kika: YYYY-MM-DD HH:mm:ss).', 'type' => 'ọjọ', 'default' => null],
                'dis_end' => ['title' => 'Akoko ipari ẹdinwo ni agbegbe aago UTC (ọna kika: YYYY-MM-DD HH:mm:ss).', 'type' => 'ọjọ', 'default' => null],
                'currency' => ['title' => 'Owo,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Akọle ọja.", 'type' => 'okun', 'require' => true],
                'title_en' => ['title' => 'Akọle Gẹẹsi ọja naa (tabi akọle ipin)', 'type' => 'okun', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'okun', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'okun', 'default' => null],
                'gtin' => ['title' => "Nọmba Ohun kan Iṣowo Agbaye ti Ọja.", 'type' => 'okun', 'default' => null],
                'gpc' => ['title' => 'Google ọja ẹka koodu.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Ipo lọwọlọwọ nkan kan ninu ile itaja rẹ.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Fihan ifiranṣẹ si olumulo ti awọn aaye titẹ sii wa (ti a lo fun awọn ọja foju).', 'type' => 'okun', 'default' => null],
                'inputs' => ['title' => 'Awọn aaye titẹ sii yiyan (ti a lo fun awọn ọja foju).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Awọn aaye iṣelọpọ iyan (lo fun awọn ọja foju).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Bulọọgi iyan tabi url oju opo wẹẹbu.', 'type' => 'okun', 'default' => false],
                'status' => ['title' => 'ipo ọja Ṣii / Pade, Aiyipada wa ni Ṣii.', 'type' => 'enum', 'default' => 'Ṣii', 'values' => ['Ṣii', 'Sunmọ']],
                'category_id' => ['title' => 'ẹka id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Akoko idari ni awọn wakati ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Ara ti ọja (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Aami ọja ..', 'type' => 'okun', 'default' => null],
                'warranty' => ['title' => 'apejuwe atilẹyin ọja ..', 'type' => 'okun', 'default' => null],
                'original' => ['title' => 'Ọja yi jẹ atilẹba?', 'type' => 'boolianu', 'default' => false],
                'return_warranty' => ['title' => 'Pada atilẹyin ọja nipasẹ awọn ọjọ.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'nkan',
                    '_object' => 'Ọja',
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
            'description' => 'Ṣafikun ọja tuntun si ile itaja.',
            'url' => 'awọn ile itaja/{shop_id}/awọn ọja/{product_id}/àtúnṣe',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ṣeto iru ọja / iṣẹ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Iye owo ọja naa.', 'type' => 'leefofo loju omi', 'require' => true],
                'commission' => ['title' => 'Ṣafikun igbimọ si idiyele.', 'type' => 'leefofo loju omi', 'default' => 0],
                'discount' => ['title' => 'Ẹdinwo idiyele ọja aiyipada.', 'type' => 'leefofo loju omi', 'default' => 0],
                'dis_start' => ['title' => 'Akoko ibẹrẹ ẹdinwo ni agbegbe aago UTC (ọna kika: YYYY-MM-DD HH:mm:ss).', 'type' => 'ọjọ', 'default' => null],
                'dis_end' => ['title' => 'Akoko ipari ẹdinwo ni agbegbe aago UTC (ọna kika: YYYY-MM-DD HH:mm:ss).', 'type' => 'ọjọ', 'default' => null],
                'currency' => ['title' => 'Owo,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Akọle ọja.", 'type' => 'okun', 'require' => true],
                'title_en' => ['title' => 'Akọle Gẹẹsi ọja naa (tabi akọle ipin)', 'type' => 'okun', 'default' => null],
                'message' => ['title' => 'Fihan ifiranṣẹ si olumulo ti awọn aaye titẹ sii wa (ti a lo fun awọn ọja foju).', 'type' => 'okun', 'default' => null],
                'inputs' => ['title' => 'Awọn aaye titẹ sii yiyan (ti a lo fun awọn ọja foju).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Awọn aaye iṣelọpọ iyan (lo fun awọn ọja foju).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Bulọọgi iyan tabi url oju opo wẹẹbu.', 'type' => 'okun', 'default' => false],
                'status' => ['title' => 'ipo ọja Ṣii / Pade, Aiyipada wa ni Ṣii.', 'type' => 'enum', 'default' => 'Ṣii', 'values' => ['Ṣii', 'Sunmọ']],
                'category_id' => ['title' => 'ẹka id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Akoko idari ni awọn wakati ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Ara ti ọja (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Aami ọja ..', 'type' => 'okun', 'default' => null],
                'warranty' => ['title' => 'apejuwe atilẹyin ọja ..', 'type' => 'okun', 'default' => null],
                'original' => ['title' => 'Ọja yi jẹ atilẹba?', 'type' => 'boolianu', 'default' => false],
                'return_warranty' => ['title' => 'Pada atilẹyin ọja nipasẹ awọn ọjọ.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'nkan',
                    '_object' => 'Ọja',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Aṣeyọri imudojuiwọn ipo ọja.', 'type' => 'boolianu'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ṣafikun ọja tuntun lati ibi ipamọ nipasẹ sku si ile itaja.',
            'url' => 'ìsọ/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'okun', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Ẹka ṣeto laifọwọyi', 'type' => 'boolianu', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Fi ọja kun si ẹka yii nipasẹ id ẹka ninu ile itaja.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Iye owo ọja naa.', 'type' => 'leefofo loju omi', 'require' => true],
                'currency' => ['title' => 'Owo,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Opoiye', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'nkan',
                    '_object' => 'Ọja',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Aṣeyọri imudojuiwọn ipo ọja.', 'type' => 'boolianu'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
