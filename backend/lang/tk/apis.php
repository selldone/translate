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
            'description' => 'Dükanyň önüm sanawyny alyň.',
            'url' => 'dükanlar / {shop_id} / önümler / hemme administrator',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Diňe elýeterli önümleri görkeziň. Dogry ýa-da ýalan bolup biler.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Baş kategoriýa iýerarhiýasyny alyň. Dogry ýa-da ýalan bolup biler.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Önüm sanawynyň ofset (sahypa üçin).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Sanawdaky önümleriň sany (sahypa üçin).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Sanawyň görnüşini görkeziň', 'type' => 'enum', 'default' => null, 'values' => [null, 'bilen baglanyşykly', 'Iň köp', 'iň köp', 'iň täze', 'iň köp satylýan', 'iň arzan', 'iň gymmat', 'tötänleýin', 'bilen baglanyşykly', 'halaýan', 'tötänleýin']],
                'product_id' => ['title' => 'Önüm ID degişli önümleri yzyna gaýtarmak üçin ulanylýar (sort = baglanyşykly).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Haryt maglumatlary toplumy. Null ýa-da spek bolup biler (null: default, spes: spesifikasiýalary almak üçin optimallaşdyrylan).', 'type' => 'enum', 'default' => null, 'values' => [null, 'sp']],
                'search' => ['title' => 'Gözleg teksti', 'type' => 'setir', 'default' => null],
                'search_type' => ['title' => 'Gözleg görnüşi. Biderek ýa-da kategoriýa bolup biler.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategoriýasy']],
                'dir' => ['title' => 'ID kategoriýasy ýa-da ady. Bellenende bu kategoriýada önüm alýar.', 'type' => 'Islendik', 'default' => null],
                'products_only' => ['title' => 'Diňe önümleri alyň (kategoriýalar goşulmaýar).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Diňe kategoriýalary alyň (önümler goşulmaýar).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Doly görnüşi barada maglumat alyň.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Diňe administrator hökmünde önüm alanyňyzda) Haryt sanawyny bahasy, bahasy ýa-da statistikasyz alyň.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'massiw',
                    '_object' => 'Haryt',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'massiw',
                    '_object' => 'Kategoriýa',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'obýekt',
                    '_object' => 'Kategoriýa',
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
            'description' => 'Önüm maglumatlary we statistika alyň.',
            'url' => 'dükanlar / {shop_id} / önümler / {önüm_id} / administrator',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'obýekt',
                    '_object' => 'Haryt',
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
                    '_type' => 'massiw',
                    '_object' => 'Önüm-maglumatlar',
                    'title' => 'soňky 30 günlük maglumatlar',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Sargyt maglumatlary',
                    'type' => 'Wirtual: san (int)|Fiziki: [sanamak, gowşurmak_state] (massiw)'
                ],

                'new_comments_count' => [
                    'title' => 'Täze teswirler hasaplanýar.',
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
            'description' => 'Dükana täze önüm goşuň.',
            'url' => 'dükanlar / {shop_id} / önüm / goşmak',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Önümiň / hyzmatyň görnüşini düzüň.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Önümiň bahasy.', 'type' => 'ýüzmek', 'require' => true],
                'commission' => ['title' => 'Bahasyna komissiýa goşuň.', 'type' => 'ýüzmek', 'default' => 0],
                'discount' => ['title' => 'Önümiň bahasy boýunça arzanladyş.', 'type' => 'ýüzmek', 'default' => 0],
                'dis_start' => ['title' => 'UTC wagt zolagynda arzanladyş wagty (formaty: YYYY-MM-DD HH:mm:ss).', 'type' => 'senesi', 'default' => null],
                'dis_end' => ['title' => 'UTC wagt zolagynda arzanladyş möhleti (formaty: YYYY-MM-DD HH:mm:ss).', 'type' => 'senesi', 'default' => null],
                'currency' => ['title' => 'Walýuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Önümiň ady.", 'type' => 'setir', 'require' => true],
                'title_en' => ['title' => 'Önümiň iňlis ady (ýa-da kiçi ady)', 'type' => 'setir', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'setir', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'setir', 'default' => null],
                'gtin' => ['title' => "Önümiň global söwda elementiniň belgisi.", 'type' => 'setir', 'default' => null],
                'gpc' => ['title' => 'Google önüm kategoriýasynyň kody.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Dükanyňyzdaky önümiň häzirki ýagdaýy.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Giriş meýdanlary bar bolsa (wirtual önümler üçin ulanylýar) ulanyja habar görkezýär.', 'type' => 'setir', 'default' => null],
                'inputs' => ['title' => 'Goşmaça giriş meýdanlary (wirtual önümler üçin ulanylýar).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Goşmaça çykyş meýdanlary (wirtual önümler üçin ulanylýar).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Meýletin blog ýa-da web sahypasy url.', 'type' => 'setir', 'default' => false],
                'status' => ['title' => 'önümiň ýagdaýy Açyk / ýapyň, deslapky açyk.', 'type' => 'enum', 'default' => 'Aç', 'values' => ['Aç', '.Akyn']],
                'category_id' => ['title' => 'kategoriýa ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Wagtyň geçmegi bilen ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Önümiň stili (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Önümiň markasy ..', 'type' => 'setir', 'default' => null],
                'warranty' => ['title' => 'kepillik beýany ..', 'type' => 'setir', 'default' => null],
                'original' => ['title' => 'Bu önüm asylmy?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Kepillik birnäçe gün.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obýekt',
                    '_object' => 'Haryt',
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
            'description' => 'Dükana täze önüm goşuň.',
            'url' => 'dükanlar / {shop_id} / önümler / {önüm_id} / redaktirlemek',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Önümiň / hyzmatyň görnüşini düzüň.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Önümiň bahasy.', 'type' => 'ýüzmek', 'require' => true],
                'commission' => ['title' => 'Bahasyna komissiýa goşuň.', 'type' => 'ýüzmek', 'default' => 0],
                'discount' => ['title' => 'Önümiň bahasy boýunça arzanladyş.', 'type' => 'ýüzmek', 'default' => 0],
                'dis_start' => ['title' => 'UTC wagt zolagynda arzanladyş wagty (formaty: YYYY-MM-DD HH:mm:ss).', 'type' => 'senesi', 'default' => null],
                'dis_end' => ['title' => 'UTC wagt zolagynda arzanladyş möhleti (formaty: YYYY-MM-DD HH:mm:ss).', 'type' => 'senesi', 'default' => null],
                'currency' => ['title' => 'Walýuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Önümiň ady.", 'type' => 'setir', 'require' => true],
                'title_en' => ['title' => 'Önümiň iňlis ady (ýa-da kiçi ady)', 'type' => 'setir', 'default' => null],
                'message' => ['title' => 'Giriş meýdanlary bar bolsa (wirtual önümler üçin ulanylýar) ulanyja habar görkezýär.', 'type' => 'setir', 'default' => null],
                'inputs' => ['title' => 'Goşmaça giriş meýdanlary (wirtual önümler üçin ulanylýar).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Goşmaça çykyş meýdanlary (wirtual önümler üçin ulanylýar).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Meýletin blog ýa-da web sahypasy url.', 'type' => 'setir', 'default' => false],
                'status' => ['title' => 'önümiň ýagdaýy Açyk / ýapyň, deslapky açyk.', 'type' => 'enum', 'default' => 'Aç', 'values' => ['Aç', '.Akyn']],
                'category_id' => ['title' => 'kategoriýa ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Wagtyň geçmegi bilen ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Önümiň stili (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Önümiň markasy ..', 'type' => 'setir', 'default' => null],
                'warranty' => ['title' => 'kepillik beýany ..', 'type' => 'setir', 'default' => null],
                'original' => ['title' => 'Bu önüm asylmy?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Kepillik birnäçe gün.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obýekt',
                    '_object' => 'Haryt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Üstünlik täzelenen önümiň ýagdaýy.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Dükana sku arkaly ammardan täze önüm goşuň.',
            'url' => 'dükanlar / {shop_id} / önüm ammary / add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'setir', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Awtomatiki toplum', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Dükanda kategoriýa ID boýunça önüm bu kategoriýa goşýar.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Önümiň bahasy.', 'type' => 'ýüzmek', 'require' => true],
                'currency' => ['title' => 'Walýuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Mukdar', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'obýekt',
                    '_object' => 'Haryt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Üstünlik täzelenen önümiň ýagdaýy.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
