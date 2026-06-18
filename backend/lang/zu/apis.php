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
            'description' => 'Thola uhlu lwemikhiqizo yesitolo.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Bonisa kuphela imikhiqizo etholakalayo. Kungaba iqiniso noma amanga.
I-', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Thola ukulandelana kwesigaba somzali. Kungaba iqiniso noma amanga.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'I-offset yohlu lwemikhiqizo (yokwenza amakhasi).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Inombolo yemikhiqizo esohlwini (yokwenza amakhasi).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Uhlobo lohlu lohlu', 'type' => 'enum
I-', 'default' => null, 'values' => [null, 'ezihlobene', 'iningi_elivakashelwe', 'edume_kakhulu', 'okusha kakhulu', 'edayisa kakhulu', 'eshibhe', 'kubiza_okuningi', 'okungahleliwe', 'ezihlobene', 'intandokazi', 'okungahleliwe']],
                'product_id' => ['title' => 'Umkhiqizo ID usetshenziselwe ukubuyisela imikhiqizo ehlobene (hlunga = ehlobene).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Isethi yedatha yomkhiqizo. Kungaba ize noma kucaciswe (null: okuzenzakalelayo, ukucaciswa: okulungiselelwe ukubuyisa imininingwane).', 'type' => 'enum
I-', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Sesha umbhalo', 'type' => 'umucu', 'default' => null],
                'search_type' => ['title' => 'Uhlobo lokusesha. Kungaba null noma isigaba.', 'type' => 'enum
I-', 'default' => null, 'values' => [null, 'isigaba']],
                'dir' => ['title' => 'Isigaba ID noma igama. Ithola imikhiqizo kulesi sigaba uma isethiwe.', 'type' => 'noma yikuphi', 'default' => null],
                'products_only' => ['title' => 'Thola imikhiqizo kuphela (izigaba azifakiwe).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Thola izigaba kuphela (imikhiqizo ayifakiwe).
I-', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Thola ulwazi oluphelele oluhlukile.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Uma kuphela uthola imikhiqizo njengomlawuli) Thola uhlu lomkhiqizo ngaphandle kwentengo, isilinganiso, noma izibalo.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'uhlu',
                    '_object' => 'Umkhiqizo',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'uhlu',
                    '_object' => 'Isigaba',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'into',
                    '_object' => 'Isigaba',
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
            'description' => 'Thola ulwazi lomkhiqizo kanye nezibalo.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'into',
                    '_object' => 'Umkhiqizo',
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
                    '_type' => 'uhlu',
                    '_object' => 'Idatha yomkhiqizo',
                    'title' => 'idatha yezinsuku ezingu-30 zokugcina',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Ama-oda que ulwazi.',
                    'type' => 'Okubonakalayo: count (int)|Okomzimba: [ukubala, ukudiliva_isimo] (uhlu)'
                ],

                'new_comments_count' => [
                    'title' => 'Isibalo samazwana amasha.',
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
            'description' => 'Engeza umkhiqizo omusha esitolo.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setha uhlobo lomkhiqizo / isevisi.', 'type' => 'enum
I-', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Intengo yomkhiqizo.', 'type' => 'ntanta', 'require' => true],
                'commission' => ['title' => 'Engeza ikhomishini enanini.', 'type' => 'ntanta', 'default' => 0],
                'discount' => ['title' => 'Isaphulelo senani lomkhiqizo okuzenzakalelayo.', 'type' => 'ntanta', 'default' => 0],
                'dis_start' => ['title' => 'Isikhathi sokuqala sesaphulelo endaweni yesikhathi ye-UTC (ifomethi: YYYY-MM-DD HH:mm:ss).', 'type' => 'usuku', 'default' => null],
                'dis_end' => ['title' => 'Isikhathi sokuphela sesaphulelo endaweni yesikhathi ye-UTC (ifomethi: YYYY-MM-DD HH:mm:ss).', 'type' => 'usuku', 'default' => null],
                'currency' => ['title' => 'Imali,', 'type' => 'enum
I-', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Isihloko somkhiqizo.", 'type' => 'umucu', 'require' => true],
                'title_en' => ['title' => 'Isihloko sesiNgisi somkhiqizo (noma isihloko esincane)', 'type' => 'umucu', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'umucu', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'umucu', 'default' => null],
                'gtin' => ['title' => "Inombolo Yento Yohwebo Yomhlaba Wonke.", 'type' => 'umucu', 'default' => null],
                'gpc' => ['title' => 'Ikhodi yesigaba somkhiqizo we-Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Isimo samanje sento esitolo sakho.", 'type' => 'enum
I-', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Bonisa umlayezo kumsebenzisi uma izinkambu zokufaka zikhona (ezisetshenziselwa imikhiqizo ebonakalayo).', 'type' => 'umucu', 'default' => null],
                'inputs' => ['title' => 'Izinkambu zokufaka ozikhethela zona (ezisetshenziselwa imikhiqizo ebonakalayo).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Izinkambu zokuphuma ozikhethela zona (ezisetshenziselwa imikhiqizo ebonakalayo).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ibhulogi ozikhethela yona noma i-url yewebhusayithi.
I-', 'type' => 'umucu', 'default' => false],
                'status' => ['title' => 'isimo somkhiqizo Vula / Vala, Okuzenzakalelayo Kuvuliwe.', 'type' => 'enum
I-', 'default' => 'Vula', 'values' => ['Vula', 'Vala']],
                'category_id' => ['title' => 'i-id yesigaba.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Isikhathi sokuhamba ngamahora..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Isitayela somkhiqizo (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ibhrendi yomkhiqizo..', 'type' => 'umucu', 'default' => null],
                'warranty' => ['title' => 'incazelo yewaranti..', 'type' => 'umucu', 'default' => null],
                'original' => ['title' => 'Lo mkhiqizo ungowoqobo?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Buyisela iwaranti ngezinsuku.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'into',
                    '_object' => 'Umkhiqizo',
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
            'description' => 'Engeza umkhiqizo omusha esitolo.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit
I-',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setha uhlobo lomkhiqizo / isevisi.', 'type' => 'enum
I-', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Intengo yomkhiqizo.', 'type' => 'ntanta', 'require' => true],
                'commission' => ['title' => 'Engeza ikhomishini enanini.', 'type' => 'ntanta', 'default' => 0],
                'discount' => ['title' => 'Isaphulelo senani lomkhiqizo okuzenzakalelayo.', 'type' => 'ntanta', 'default' => 0],
                'dis_start' => ['title' => 'Isikhathi sokuqala sesaphulelo endaweni yesikhathi ye-UTC (ifomethi: YYYY-MM-DD HH:mm:ss).', 'type' => 'usuku', 'default' => null],
                'dis_end' => ['title' => 'Isikhathi sokuphela sesaphulelo endaweni yesikhathi ye-UTC (ifomethi: YYYY-MM-DD HH:mm:ss).', 'type' => 'usuku', 'default' => null],
                'currency' => ['title' => 'Imali,', 'type' => 'enum
I-', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Isihloko somkhiqizo.", 'type' => 'umucu', 'require' => true],
                'title_en' => ['title' => 'Isihloko sesiNgisi somkhiqizo (noma isihloko esincane)', 'type' => 'umucu', 'default' => null],
                'message' => ['title' => 'Bonisa umlayezo kumsebenzisi uma izinkambu zokufaka zikhona (ezisetshenziselwa imikhiqizo ebonakalayo).', 'type' => 'umucu', 'default' => null],
                'inputs' => ['title' => 'Izinkambu zokufaka ozikhethela zona (ezisetshenziselwa imikhiqizo ebonakalayo).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Izinkambu zokuphuma ozikhethela zona (ezisetshenziselwa imikhiqizo ebonakalayo).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ibhulogi ozikhethela yona noma i-url yewebhusayithi.
I-', 'type' => 'umucu', 'default' => false],
                'status' => ['title' => 'isimo somkhiqizo Vula / Vala, Okuzenzakalelayo Kuvuliwe.', 'type' => 'enum
I-', 'default' => 'Vula', 'values' => ['Vula', 'Vala']],
                'category_id' => ['title' => 'i-id yesigaba.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Isikhathi sokuhamba ngamahora..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Isitayela somkhiqizo (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ibhrendi yomkhiqizo..', 'type' => 'umucu', 'default' => null],
                'warranty' => ['title' => 'incazelo yewaranti..', 'type' => 'umucu', 'default' => null],
                'original' => ['title' => 'Lo mkhiqizo ungowoqobo?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Buyisela iwaranti ngezinsuku.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'into',
                    '_object' => 'Umkhiqizo',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Isimo somkhiqizo obuyekeziwe wempumelelo.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Engeza umkhiqizo omusha osuka endaweni yokugcina nge-sku uye esitolo.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'umucu', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Ukusetha okuzenzakalelayo isigaba', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Engeza umkhiqizo kulesi sigaba nge-id yesigaba esitolo.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Intengo yomkhiqizo.', 'type' => 'ntanta', 'require' => true],
                'currency' => ['title' => 'Imali,', 'type' => 'enum
I-', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Ubuningi', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'into',
                    '_object' => 'Umkhiqizo',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Isimo somkhiqizo obuyekeziwe wempumelelo.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
