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
            'description' => 'Fumana lethathamo la lihlahisoa tsa lebenkele.',
            'url' => 'mabenkele/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Hlahisa lihlahisoa tse fumanehang feela. E ka ba \'nete kapa bohata.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Fumana lenane la sehlopha sa batsoali. E ka ba \'nete kapa bohata.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset ea lenane la lihlahisoa (bakeng sa pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Palo ea lihlahisoa tse lethathamong (bakeng sa pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Mofuta oa lethathamo', 'type' => 'enum', 'default' => null, 'values' => [null, 'amanang', 'boholo_ba etetsweng', 'ratoang_ka ho fetisisa', 'e ncha ka ho fetisisa', 'tse rekisoang ka ho fetisisa', 'theko e tlaase', 'fetisisa_tse tura', 'ka tšohanyetso', 'amanang', 'thatohatsi', 'ka tšohanyetso']],
                'product_id' => ['title' => 'Sehlahisoa ID se sebelisetsoang ho khutlisa lihlahisoa tse amanang (mofuta = tse amanang).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Sete ya data ya sehlahiswa. E ka ba lefeela kapa e qotsitsoeng (null: default, spec: optimized bakeng sa ho fumana litlhaloso).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Batla mongolo', 'type' => 'khoele', 'default' => null],
                'search_type' => ['title' => 'Mofuta oa ho batla. E ka ba lefeela kapa sehlopha.', 'type' => 'enum', 'default' => null, 'values' => [null, 'sehlopha']],
                'dir' => ['title' => 'Sehlopha sa ID kapa lebitso. E fumana lihlahisoa sehlopheng sena ha e setiloe.', 'type' => 'leha e le efe', 'default' => null],
                'products_only' => ['title' => 'Fumana lihlahisoa feela (mekhahlelo ha e kenyelelitsoe).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Fumana lihlopha feela (lihlahisoa ha li kenyelelitsoe).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Fumana lintlha tse felletseng tse fapaneng.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Ha feela o fumana dihlahiswa jwalo ka molaodi) Fumana lenane la disebediswa ntle le theko, reiti, kapa dipalopalo.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Sehlahisoa',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'Sehlopha',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ntho',
                    '_object' => 'Sehlopha',
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
            'description' => 'Fumana lintlha tsa sehlahisoa le lipalo-palo.',
            'url' => 'mabenkele/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ntho',
                    '_object' => 'Sehlahisoa',
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
                    '_type' => 'array',
                    '_object' => 'Sehlahisoa-Boitsebiso',
                    'title' => 'data ea matsatsi a 30 a fetileng',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Litaelo mabapi le lintlha.',
                    'type' => 'Virtual: palo (int)|\'Mele: [palo, delivery_state] (sehlopha)'
                ],

                'new_comments_count' => [
                    'title' => 'Litlhaloso tse ncha lia baloa.',
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
            'description' => 'Kenya sehlahisoa se secha lebenkeleng.',
            'url' => 'mabenkele/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Beha mofuta oa sehlahisoa / tšebeletso.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Theko ea sehlahisoa.', 'type' => 'phaphametse', 'require' => true],
                'commission' => ['title' => 'Kenya khomishene ho theko.', 'type' => 'phaphametse', 'default' => 0],
                'discount' => ['title' => 'Theko ea kamehla ea theko ea sehlahisoa.', 'type' => 'phaphametse', 'default' => 0],
                'dis_start' => ['title' => 'Nako ea ho qala ea litheolelo sebakeng sa nako sa UTC (sebopeho: YYYY-MM-DD HH:mm:ss).', 'type' => 'letsatsi', 'default' => null],
                'dis_end' => ['title' => 'Nako ea ho qetela ea litheolelo sebakeng sa nako sa UTC (sebopeho: YYYY-MM-DD HH:mm:ss).', 'type' => 'letsatsi', 'default' => null],
                'currency' => ['title' => 'Chelete,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Sehlooho sa sehlahisoa.", 'type' => 'khoele', 'require' => true],
                'title_en' => ['title' => 'Sehlooho sa Senyesemane sa sehlahisoa (kapa sehloohoana)', 'type' => 'khoele', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'khoele', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'khoele', 'default' => null],
                'gtin' => ['title' => "Nomoro ea Ntho ea Khoebo ea Lefatše ea Sehlahisoa.", 'type' => 'khoele', 'default' => null],
                'gpc' => ['title' => 'Khouto ea sehlopha sa sehlahisoa sa Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Boemo ba hona joale ba ntho lebenkeleng la hau.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Hlahisa molaetsa ho mosebelisi haeba likarolo tsa ho kenya li le teng (tse sebelisoang bakeng sa lihlahisoa tsa sebele).', 'type' => 'khoele', 'default' => null],
                'inputs' => ['title' => 'Mabaka a boikhethelo a ho kenya (a sebelisoa bakeng sa lihlahisoa tsa sebele).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Libaka tseo u ka li khethang (tse sebelisoang bakeng sa lihlahisoa tsa sebele).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog ea boikhethelo kapa url ea sebaka sa marang-rang.', 'type' => 'khoele', 'default' => false],
                'status' => ['title' => 'boemo ba sehlahisoa Bula / Koala, Default ke Open.', 'type' => 'enum', 'default' => 'Bula', 'values' => ['Bula', 'Koala']],
                'category_id' => ['title' => 'mofuta oa id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Nako ea ho tsamaea ka hora..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Mokhoa oa sehlahisoa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Brand ea sehlahisoa..', 'type' => 'khoele', 'default' => null],
                'warranty' => ['title' => 'tlhaloso ea waranti..', 'type' => 'khoele', 'default' => null],
                'original' => ['title' => 'Sehlahisoa sena ke sa mantlha?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Khutlisa tiisetso ka matsatsi.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ntho',
                    '_object' => 'Sehlahisoa',
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
            'description' => 'Kenya sehlahisoa se secha lebenkeleng.',
            'url' => 'mabenkele/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Beha mofuta oa sehlahisoa / tšebeletso.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Theko ea sehlahisoa.', 'type' => 'phaphametse', 'require' => true],
                'commission' => ['title' => 'Kenya khomishene ho theko.', 'type' => 'phaphametse', 'default' => 0],
                'discount' => ['title' => 'Theko ea kamehla ea theko ea sehlahisoa.', 'type' => 'phaphametse', 'default' => 0],
                'dis_start' => ['title' => 'Nako ea ho qala ea litheolelo sebakeng sa nako sa UTC (sebopeho: YYYY-MM-DD HH:mm:ss).', 'type' => 'letsatsi', 'default' => null],
                'dis_end' => ['title' => 'Nako ea ho qetela ea litheolelo sebakeng sa nako sa UTC (sebopeho: YYYY-MM-DD HH:mm:ss).', 'type' => 'letsatsi', 'default' => null],
                'currency' => ['title' => 'Chelete,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Sehlooho sa sehlahisoa.", 'type' => 'khoele', 'require' => true],
                'title_en' => ['title' => 'Sehlooho sa Senyesemane sa sehlahisoa (kapa sehloohoana)', 'type' => 'khoele', 'default' => null],
                'message' => ['title' => 'Hlahisa molaetsa ho mosebelisi haeba likarolo tsa ho kenya li le teng (tse sebelisoang bakeng sa lihlahisoa tsa sebele).', 'type' => 'khoele', 'default' => null],
                'inputs' => ['title' => 'Mabaka a boikhethelo a ho kenya (a sebelisoa bakeng sa lihlahisoa tsa sebele).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Libaka tseo u ka li khethang (tse sebelisoang bakeng sa lihlahisoa tsa sebele).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog ea boikhethelo kapa url ea sebaka sa marang-rang.', 'type' => 'khoele', 'default' => false],
                'status' => ['title' => 'boemo ba sehlahisoa Bula / Koala, Default ke Open.', 'type' => 'enum', 'default' => 'Bula', 'values' => ['Bula', 'Koala']],
                'category_id' => ['title' => 'mofuta oa id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Nako ea ho tsamaea ka hora..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Mokhoa oa sehlahisoa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Brand ea sehlahisoa..', 'type' => 'khoele', 'default' => null],
                'warranty' => ['title' => 'tlhaloso ea waranti..', 'type' => 'khoele', 'default' => null],
                'original' => ['title' => 'Sehlahisoa sena ke sa mantlha?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Khutlisa tiisetso ka matsatsi.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ntho',
                    '_object' => 'Sehlahisoa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Sehlahisoa se ntlafalitsoeng ka katleho.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Kenya sehlahisoa se secha ho tsoa polokelong ka sku ho ea lebenkeleng.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'khoele', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Sehlopha se setang ka boits\'oaro', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Kenya sehlahisoa ho sehlopha sena ho ea ka mofuta oa id lebenkeleng.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Theko ea sehlahisoa.', 'type' => 'phaphametse', 'require' => true],
                'currency' => ['title' => 'Chelete,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Bongata', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ntho',
                    '_object' => 'Sehlahisoa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Sehlahisoa se ntlafalitsoeng ka katleho.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
