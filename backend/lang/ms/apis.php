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
            'description' => 'Dapatkan senarai produk kedai.',
            'url' => 'kedai/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Tunjukkan hanya produk yang tersedia. Boleh jadi benar atau salah.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Dapatkan hierarki kategori induk. Boleh jadi benar atau salah.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset senarai produk (untuk penomboran).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Bilangan produk dalam senarai (untuk penomboran).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Senarai jenis jenis', 'type' => 'enum', 'default' => null, 'values' => [null, 'berkaitan', 'paling_dilawati', 'paling_popular', 'terbaru', 'terlaris', 'paling murah', 'paling_mahal', 'rawak', 'berkaitan', 'kegemaran', 'rawak']],
                'product_id' => ['title' => 'Produk ID digunakan untuk memulangkan produk berkaitan (sort = related).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Set data produk. Boleh jadi nol atau spec (null: lalai, spec: dioptimumkan untuk mendapatkan semula spesifikasi).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spek']],
                'search' => ['title' => 'Cari teks', 'type' => 'rentetan', 'default' => null],
                'search_type' => ['title' => 'Jenis carian. Boleh nol atau kategori.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID atau nama. Mendapat produk dalam kategori ini apabila ditetapkan.', 'type' => 'mana-mana', 'default' => null],
                'products_only' => ['title' => 'Dapatkan produk sahaja (kategori tidak termasuk).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Dapatkan hanya kategori (produk tidak termasuk).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Dapatkan maklumat varian penuh.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Hanya apabila mendapatkan produk sebagai pentadbir) Dapatkan senarai produk tanpa harga, kadar atau statistik.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'tatasusunan',
                    '_object' => 'produk',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'tatasusunan',
                    '_object' => 'kategori',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objek',
                    '_object' => 'kategori',
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
            'description' => 'Dapatkan maklumat dan statistik produk.',
            'url' => 'kedai/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objek',
                    '_object' => 'produk',
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
                    '_type' => 'tatasusunan',
                    '_object' => 'Data-Produk',
                    'title' => 'data 30 hari lepas',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Pesanan que info.',
                    'type' => 'Maya: count (int)|Fizikal: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Komen baharu dikira.',
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
            'description' => 'Tambah produk baharu ke kedai.',
            'url' => 'kedai/{shop_id}/produk/tambah',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Tetapkan jenis produk / perkhidmatan.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Harga produk.', 'type' => 'terapung', 'require' => true],
                'commission' => ['title' => 'Tambah komisen pada harga.', 'type' => 'terapung', 'default' => 0],
                'discount' => ['title' => 'Diskaun harga produk lalai.', 'type' => 'terapung', 'default' => 0],
                'dis_start' => ['title' => 'Masa mula diskaun dalam zon waktu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tarikh', 'default' => null],
                'dis_end' => ['title' => 'Diskaun masa tamat dalam zon waktu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tarikh', 'default' => null],
                'currency' => ['title' => 'mata wang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tajuk produk.", 'type' => 'rentetan', 'require' => true],
                'title_en' => ['title' => 'Tajuk bahasa Inggeris produk (atau sari kata)', 'type' => 'rentetan', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'rentetan', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'rentetan', 'default' => null],
                'gtin' => ['title' => "Nombor Item Perdagangan Global Produk.", 'type' => 'rentetan', 'default' => null],
                'gpc' => ['title' => 'Kod kategori produk Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Keadaan semasa item di kedai anda.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Tunjukkan mesej kepada pengguna jika medan input wujud (digunakan untuk produk maya).', 'type' => 'rentetan', 'default' => null],
                'inputs' => ['title' => 'Medan input pilihan (digunakan untuk produk maya).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Medan keluaran pilihan (digunakan untuk produk maya).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog atau url tapak web pilihan.', 'type' => 'rentetan', 'default' => false],
                'status' => ['title' => 'status produk Buka / Tutup, Lalai adalah Buka.', 'type' => 'enum', 'default' => 'Buka', 'values' => ['Buka', 'tutup']],
                'category_id' => ['title' => 'id kategori', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Masa utama dalam jam..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Gaya produk (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Jenama produk..', 'type' => 'rentetan', 'default' => null],
                'warranty' => ['title' => 'keterangan jaminan..', 'type' => 'rentetan', 'default' => null],
                'original' => ['title' => 'Produk ini asli?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Pulangan waranti mengikut hari.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objek',
                    '_object' => 'produk',
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
            'description' => 'Tambah produk baharu ke kedai.',
            'url' => 'kedai/{shop_id}/produk/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Tetapkan jenis produk / perkhidmatan.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Harga produk.', 'type' => 'terapung', 'require' => true],
                'commission' => ['title' => 'Tambah komisen pada harga.', 'type' => 'terapung', 'default' => 0],
                'discount' => ['title' => 'Diskaun harga produk lalai.', 'type' => 'terapung', 'default' => 0],
                'dis_start' => ['title' => 'Masa mula diskaun dalam zon waktu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tarikh', 'default' => null],
                'dis_end' => ['title' => 'Diskaun masa tamat dalam zon waktu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tarikh', 'default' => null],
                'currency' => ['title' => 'mata wang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tajuk produk.", 'type' => 'rentetan', 'require' => true],
                'title_en' => ['title' => 'Tajuk bahasa Inggeris produk (atau sari kata)', 'type' => 'rentetan', 'default' => null],
                'message' => ['title' => 'Tunjukkan mesej kepada pengguna jika medan input wujud (digunakan untuk produk maya).', 'type' => 'rentetan', 'default' => null],
                'inputs' => ['title' => 'Medan input pilihan (digunakan untuk produk maya).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Medan keluaran pilihan (digunakan untuk produk maya).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog atau url tapak web pilihan.', 'type' => 'rentetan', 'default' => false],
                'status' => ['title' => 'status produk Buka / Tutup, Lalai adalah Buka.', 'type' => 'enum', 'default' => 'Buka', 'values' => ['Buka', 'tutup']],
                'category_id' => ['title' => 'id kategori', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Masa utama dalam jam..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Gaya produk (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Jenama produk..', 'type' => 'rentetan', 'default' => null],
                'warranty' => ['title' => 'keterangan jaminan..', 'type' => 'rentetan', 'default' => null],
                'original' => ['title' => 'Produk ini asli?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Pulangan waranti mengikut hari.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objek',
                    '_object' => 'produk',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Kejayaan kemas kini keadaan produk.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Tambah produk baru dari repositori oleh sku ke kedai.',
            'url' => 'kedai/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'rentetan', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategori set automatik', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produk tambah pada kategori ini mengikut id kategori di kedai.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Harga produk.', 'type' => 'terapung', 'require' => true],
                'currency' => ['title' => 'mata wang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kuantiti', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objek',
                    '_object' => 'produk',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Kejayaan kemas kini keadaan produk.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
