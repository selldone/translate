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
            'description' => 'Shakisha urutonde rwibicuruzwa.',
            'url' => 'amaduka / {iduka_id} / ibicuruzwa / byose-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Erekana ibicuruzwa biboneka gusa. Birashobora kuba ukuri cyangwa ibinyoma.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Shaka icyiciro cyababyeyi. Birashobora kuba ukuri cyangwa ibinyoma.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Kureka urutonde rwibicuruzwa (kuri pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Umubare wibicuruzwa kurutonde (kuri pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Andika ubwoko bwubwoko', 'type' => 'enum', 'default' => null, 'values' => [null, 'bifitanye isano', 'Byinshi', 'abantu benshi', 'gishya', 'bestselling', 'bihendutse', 'byinshi_ bihenze', 'ku bushake', 'bifitanye isano', 'ukunda', 'ku bushake']],
                'product_id' => ['title' => 'Ibicuruzwa ID bikoreshwa mugusubiza ibicuruzwa bifitanye isano (sort = bifitanye isano).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Ibicuruzwa byashyizweho. Irashobora kuba impfabusa cyangwa idasanzwe (null: isanzwe, spec: optimizme yo kugarura ibisobanuro).', 'type' => 'enum', 'default' => null, 'values' => [null, 'ing']],
                'search' => ['title' => 'Shakisha inyandiko', 'type' => 'umugozi', 'default' => null],
                'search_type' => ['title' => 'Ubwoko bw\'ishakisha. Birashobora kuba impfabusa cyangwa icyiciro.', 'type' => 'enum', 'default' => null, 'values' => [null, 'icyiciro']],
                'dir' => ['title' => 'Icyiciro ID cyangwa izina. Kubona ibicuruzwa muriki cyiciro mugihe byashizweho.', 'type' => 'icyaricyo cyose', 'default' => null],
                'products_only' => ['title' => 'Shaka ibicuruzwa gusa (ibyiciro bitarimo).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Shaka ibyiciro gusa (ibicuruzwa bitarimo).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Shakisha amakuru yuzuye.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Gusa iyo ubonye ibicuruzwa nka admin) Shakisha urutonde rwibicuruzwa nta giciro, igipimo, cyangwa imibare.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Ibicuruzwa',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'Icyiciro',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ikintu',
                    '_object' => 'Icyiciro',
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
            'description' => 'Shakisha amakuru y\'ibicuruzwa n\'imibare.',
            'url' => 'amaduka / {iduka_id} / ibicuruzwa / {ibicuruzwa_id} / umuyobozi',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ikintu',
                    '_object' => 'Ibicuruzwa',
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
                    '_object' => 'Ibicuruzwa-Ibyatanzwe',
                    'title' => 'iminsi 30 yanyuma',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Tegeka umurongo amakuru.',
                    'type' => 'Virtual: kubara (int)|Umubiri: [kubara, gutanga_ibikorwa] (umurongo)'
                ],

                'new_comments_count' => [
                    'title' => 'Ibitekerezo bishya bibarwa.',
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
            'description' => 'Ongera ibicuruzwa bishya kumaduka.',
            'url' => 'amaduka / {iduka_id} / ibicuruzwa / ongeraho',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Shiraho ubwoko bwibicuruzwa / serivisi.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Igiciro cyibicuruzwa.', 'type' => 'kureremba', 'require' => true],
                'commission' => ['title' => 'Ongera komisiyo kubiciro.', 'type' => 'kureremba', 'default' => 0],
                'discount' => ['title' => 'Igiciro cyibicuruzwa bisanzwe.', 'type' => 'kureremba', 'default' => 0],
                'dis_start' => ['title' => 'Kugabanuka igihe cyo gutangira muri zone ya UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'itariki', 'default' => null],
                'dis_end' => ['title' => 'Kugabanya igihe cyanyuma muri zone ya UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'itariki', 'default' => null],
                'currency' => ['title' => 'Ifaranga,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Umutwe wibicuruzwa.", 'type' => 'umugozi', 'require' => true],
                'title_en' => ['title' => 'Icyongereza cyibicuruzwa (cyangwa umutwe wicyubahiro)', 'type' => 'umugozi', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'umugozi', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'umugozi', 'default' => null],
                'gtin' => ['title' => "Ibicuruzwa byubucuruzi bwisi yose Umubare.", 'type' => 'umugozi', 'default' => null],
                'gpc' => ['title' => 'Kode y\'ibicuruzwa bya Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Ikintu kiriho mububiko bwawe.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Ubutumwa bwereka umukoresha niba imirima yinjiza ibaho (ikoreshwa kubicuruzwa biboneka).', 'type' => 'umugozi', 'default' => null],
                'inputs' => ['title' => 'Ibice byinjiza byinjira (bikoreshwa mubicuruzwa biboneka).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Ibisohoka bisohoka mubice (bikoreshwa mubicuruzwa biboneka).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog cyangwa urubuga url.', 'type' => 'umugozi', 'default' => false],
                'status' => ['title' => 'ibicuruzwa imiterere Gufungura / Gufunga, Default irakinguye.', 'type' => 'enum', 'default' => 'Fungura', 'values' => ['Fungura', 'Funga']],
                'category_id' => ['title' => 'icyiciro id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Kuyobora umwanya mumasaha ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Imiterere y\'ibicuruzwa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ikirango cy\'ibicuruzwa ..', 'type' => 'umugozi', 'default' => null],
                'warranty' => ['title' => 'garanti ibisobanuro ..', 'type' => 'umugozi', 'default' => null],
                'original' => ['title' => 'Iki gicuruzwa ni umwimerere?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garuka garanti kumunsi.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ikintu',
                    '_object' => 'Ibicuruzwa',
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
            'description' => 'Ongera ibicuruzwa bishya kumaduka.',
            'url' => 'amaduka / {iduka_id} / ibicuruzwa / {ibicuruzwa_id} / guhindura',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Shiraho ubwoko bwibicuruzwa / serivisi.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Igiciro cyibicuruzwa.', 'type' => 'kureremba', 'require' => true],
                'commission' => ['title' => 'Ongera komisiyo kubiciro.', 'type' => 'kureremba', 'default' => 0],
                'discount' => ['title' => 'Igiciro cyibicuruzwa bisanzwe.', 'type' => 'kureremba', 'default' => 0],
                'dis_start' => ['title' => 'Kugabanuka igihe cyo gutangira muri zone ya UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'itariki', 'default' => null],
                'dis_end' => ['title' => 'Kugabanya igihe cyanyuma muri zone ya UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'itariki', 'default' => null],
                'currency' => ['title' => 'Ifaranga,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Umutwe wibicuruzwa.", 'type' => 'umugozi', 'require' => true],
                'title_en' => ['title' => 'Icyongereza cyibicuruzwa (cyangwa umutwe wicyubahiro)', 'type' => 'umugozi', 'default' => null],
                'message' => ['title' => 'Ubutumwa bwereka umukoresha niba imirima yinjiza ibaho (ikoreshwa kubicuruzwa biboneka).', 'type' => 'umugozi', 'default' => null],
                'inputs' => ['title' => 'Ibice byinjiza byinjira (bikoreshwa mubicuruzwa biboneka).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Ibisohoka bisohoka mubice (bikoreshwa mubicuruzwa biboneka).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog cyangwa urubuga url.', 'type' => 'umugozi', 'default' => false],
                'status' => ['title' => 'ibicuruzwa imiterere Gufungura / Gufunga, Default irakinguye.', 'type' => 'enum', 'default' => 'Fungura', 'values' => ['Fungura', 'Funga']],
                'category_id' => ['title' => 'icyiciro id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Kuyobora umwanya mumasaha ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Imiterere y\'ibicuruzwa (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ikirango cy\'ibicuruzwa ..', 'type' => 'umugozi', 'default' => null],
                'warranty' => ['title' => 'garanti ibisobanuro ..', 'type' => 'umugozi', 'default' => null],
                'original' => ['title' => 'Iki gicuruzwa ni umwimerere?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garuka garanti kumunsi.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ikintu',
                    '_object' => 'Ibicuruzwa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Intsinzi ivugururwa ryibicuruzwa.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ongeraho ibicuruzwa bishya mububiko bwa sku kumaduka.',
            'url' => 'amaduka / {iduka_id} / ibicuruzwa-ububiko / kongeraho-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'umugozi', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Icyiciro cyimodoka', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Ibicuruzwa ongeraho muriki cyiciro ukurikije id iduka.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Igiciro cyibicuruzwa.', 'type' => 'kureremba', 'require' => true],
                'currency' => ['title' => 'Ifaranga,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Umubare', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ikintu',
                    '_object' => 'Ibicuruzwa',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Intsinzi ivugururwa ryibicuruzwa.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
