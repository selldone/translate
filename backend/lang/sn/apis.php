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
            'description' => 'Tora runyorwa rwezvigadzirwa zvechitoro.',
            'url' => 'zvitoro/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Ratidza zvigadzirwa zviripo chete. Inogona kuva yechokwadi kana yenhema.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Tora chikamu chevabereki hierarchy. Inogona kuva yechokwadi kana yenhema.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset yezvinyorwa zvechigadzirwa (zvepagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Nhamba yezvigadzirwa mune rondedzero (yepagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Rongedza mhando yemhando', 'type' => 'enum', 'default' => null, 'values' => [null, 'zvinoenderana', 'vazhinji_vakashanyirwa', 'most_popular', 'itsva', 'bestselling', 'zvakachipa', 'zvakanyanya_zvinodhura', 'random', 'zvinoenderana', 'favorite', 'random']],
                'product_id' => ['title' => 'Chigadzirwa ID chinoshandiswa kudzosera zvigadzirwa zvine hukama (mhando = zvine hukama).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Product data set. Inogona kuve isina kana kutsanangurwa (isina: default, spec: yakagadziridzwa yekudzoreredza zvakatemwa).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Tsvaga mavara', 'type' => 'tambo', 'default' => null],
                'search_type' => ['title' => 'Tsvaga mhando. Inogona kuva null kana chikamu.', 'type' => 'enum', 'default' => null, 'values' => [null, 'category']],
                'dir' => ['title' => 'Chikamu ID kana zita. Inowana zvigadzirwa muchikamu ichi kana yaiswa.', 'type' => 'chero', 'default' => null],
                'products_only' => ['title' => 'Wana chete zvigadzirwa (mapoka asina kubatanidzwa).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Wana chete zvikamu (zvigadzirwa zvisina kubatanidzwa).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Wana ruzivo rwakakwana rwakasiyana.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Chete kana uchiwana zvigadzirwa se admin) Tora runyorwa rwechigadzirwa pasina mutengo, chiyero, kana nhamba.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Product',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'Category',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'object',
                    '_object' => 'Category',
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
            'description' => 'Wana ruzivo rwechigadzirwa uye nhamba.',
            'url' => 'zvitoro/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
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
                    '_object' => 'Product-Data',
                    'title' => 'mazuva makumi matatu ekupedzisira data',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Orders que info.',
                    'type' => 'Virtual: kuverenga (int)|Muviri: [kuverenga, kuburitsa_nyika] (kuronga)'
                ],

                'new_comments_count' => [
                    'title' => 'New comments count.',
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
            'description' => 'Wedzera chigadzirwa chitsva kuchitoro.',
            'url' => 'zvitoro/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Seta mhando yechigadzirwa / sevhisi.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Mutengo wechigadzirwa.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Wedzera komisheni kumutengo.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Default chigadzirwa mutengo kuderedzwa.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Discount yekutanga nguva munzvimbo yeUTC yenguva (fomati: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Nguva yekupedzisira yediresi munzvimbo yeUTC yenguva (chimiro: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'Mari,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Musoro wechigadzirwa.", 'type' => 'tambo', 'require' => true],
                'title_en' => ['title' => 'Chirungu zita rechigadzirwa (kana sub title)', 'type' => 'tambo', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'tambo', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'tambo', 'default' => null],
                'gtin' => ['title' => "Chigadzirwa cheGlobal Trade Item Nhamba.", 'type' => 'tambo', 'default' => null],
                'gpc' => ['title' => 'Google product category code.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Chimiro chiripo muchitoro chako.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Mharidzo inoratidza kumushandisi kana nzvimbo dzekuisa dziripo (dzinoshandiswa kune chaiwo zvigadzirwa).', 'type' => 'tambo', 'default' => null],
                'inputs' => ['title' => 'Sarudzo minda yekupinza (inoshandiswa kune chaiwo zvigadzirwa).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Optional kubuda minda (inoshandiswa kune chaiwo zvigadzirwa).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Optional Blog kana webhusaiti url.', 'type' => 'tambo', 'default' => false],
                'status' => ['title' => 'Chigadzirwa chimiro Vhura / Vhara, Default yakavhurika.', 'type' => 'enum', 'default' => 'Vhura', 'values' => ['Vhura', 'Close']],
                'category_id' => ['title' => 'category id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Nguva yekutungamira mumaawa..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Chimiro chechigadzirwa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Brand yechigadzirwa..', 'type' => 'tambo', 'default' => null],
                'warranty' => ['title' => 'tsananguro yewaranti..', 'type' => 'tambo', 'default' => null],
                'original' => ['title' => 'Ichi chigadzirwa ndechepakutanga?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Dzorera waranti nemazuva.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
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
            'description' => 'Wedzera chigadzirwa chitsva kuchitoro.',
            'url' => 'zvitoro/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Seta mhando yechigadzirwa / sevhisi.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Mutengo wechigadzirwa.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Wedzera komisheni kumutengo.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Default chigadzirwa mutengo kuderedzwa.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Discount yekutanga nguva munzvimbo yeUTC yenguva (fomati: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Nguva yekupedzisira yediresi munzvimbo yeUTC yenguva (chimiro: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'Mari,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Musoro wechigadzirwa.", 'type' => 'tambo', 'require' => true],
                'title_en' => ['title' => 'Chirungu zita rechigadzirwa (kana sub title)', 'type' => 'tambo', 'default' => null],
                'message' => ['title' => 'Mharidzo inoratidza kumushandisi kana nzvimbo dzekuisa dziripo (dzinoshandiswa kune chaiwo zvigadzirwa).', 'type' => 'tambo', 'default' => null],
                'inputs' => ['title' => 'Sarudzo minda yekupinza (inoshandiswa kune chaiwo zvigadzirwa).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Optional kubuda minda (inoshandiswa kune chaiwo zvigadzirwa).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Optional Blog kana webhusaiti url.', 'type' => 'tambo', 'default' => false],
                'status' => ['title' => 'Chigadzirwa chimiro Vhura / Vhara, Default yakavhurika.', 'type' => 'enum', 'default' => 'Vhura', 'values' => ['Vhura', 'Close']],
                'category_id' => ['title' => 'category id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Nguva yekutungamira mumaawa..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Chimiro chechigadzirwa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Brand yechigadzirwa..', 'type' => 'tambo', 'default' => null],
                'warranty' => ['title' => 'tsananguro yewaranti..', 'type' => 'tambo', 'default' => null],
                'original' => ['title' => 'Ichi chigadzirwa ndechepakutanga?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Dzorera waranti nemazuva.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Success update product state.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Wedzera chigadzirwa chitsva kubva mudura ne sku kuchitoro.',
            'url' => 'zvitoro/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'tambo', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Auto set category', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Chigadzirwa wedzera kuchikamu ichi nechikamu id muchitoro.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Mutengo wechigadzirwa.', 'type' => 'float', 'require' => true],
                'currency' => ['title' => 'Mari,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantity', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Success update product state.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
