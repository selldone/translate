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
            'description' => 'Dapatkan daftar produk toko.',
            'url' => 'toko/{shop_id}/produk/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Tampilkan hanya produk yang tersedia. Bisa benar atau salah.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Dapatkan hierarki kategori induk. Bisa benar atau salah.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset daftar produk (untuk penomoran halaman).', 'type' => 'ke dalam', 'default' => 0],
                'limit' => ['title' => 'Jumlah produk dalam daftar (untuk penomoran halaman).', 'type' => 'ke dalam', 'default' => 20],
                'sort' => ['title' => 'Jenis pengurutan daftar', 'type' => 'enum', 'default' => null, 'values' => [null, 'terkait', 'paling_dikunjungi', 'paling_populer', 'terbaru', 'terlaris', 'termurah', 'paling_mahal', 'acak', 'terkait', 'favorit', 'acak']],
                'product_id' => ['title' => 'Produk ID digunakan untuk mengembalikan produk terkait (sort = terkait).', 'type' => 'ke dalam', 'default' => null],
                'set' => ['title' => 'Kumpulan data produk. Bisa null atau spec (null: default, spec: dioptimalkan untuk mengambil spesifikasi).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spesifikasi']],
                'search' => ['title' => 'Cari teks', 'type' => 'tali', 'default' => null],
                'search_type' => ['title' => 'Jenis pencarian. Bisa null atau kategori.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID atau nama. Mendapatkan produk dalam kategori ini saat disetel.', 'type' => 'apapun', 'default' => null],
                'products_only' => ['title' => 'Dapatkan hanya produk (kategori tidak termasuk).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Dapatkan hanya kategori (produk tidak termasuk).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Dapatkan informasi varian lengkap.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Hanya ketika mendapatkan produk sebagai admin) Dapatkan daftar produk tanpa harga, tarif, atau statistik.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'susunan',
                    '_object' => 'Produk',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'susunan',
                    '_object' => 'Kategori',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objek',
                    '_object' => 'Kategori',
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
            'description' => 'Dapatkan informasi dan statistik produk.',
            'url' => 'toko/{shop_id}/produk/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objek',
                    '_object' => 'Produk',
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
                    '_type' => 'susunan',
                    '_object' => 'Data Produk',
                    'title' => 'data 30 hari terakhir',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Info antrian pesanan.',
                    'type' => 'Virtual: hitungan (int)|Fisik: [hitungan, status_pengiriman] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Komentar baru dihitung.',
                    'type' => 'ke dalam'
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
            'description' => 'Tambahkan produk baru ke toko.',
            'url' => 'toko/{shop_id}/produk/tambahkan',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Tetapkan jenis produk/jasa.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Harga produk.', 'type' => 'mengapung', 'require' => true],
                'commission' => ['title' => 'Tambahkan komisi ke harga.', 'type' => 'mengapung', 'default' => 0],
                'discount' => ['title' => 'Diskon harga produk default.', 'type' => 'mengapung', 'default' => 0],
                'dis_start' => ['title' => 'Waktu mulai diskon dalam zona waktu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tanggal', 'default' => null],
                'dis_end' => ['title' => 'Waktu berakhir diskon dalam zona waktu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tanggal', 'default' => null],
                'currency' => ['title' => 'Mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Judul produk.", 'type' => 'tali', 'require' => true],
                'title_en' => ['title' => 'Judul produk dalam bahasa Inggris (atau sub judul)', 'type' => 'tali', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'tali', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'tali', 'default' => null],
                'gtin' => ['title' => "Nomor Barang Perdagangan Global Produk.", 'type' => 'tali', 'default' => null],
                'gpc' => ['title' => 'Kode kategori produk Google.', 'type' => 'ke dalam', 'default' => null],
                'condition' => ['title' => "Kondisi item saat ini di toko Anda.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Pesan ditampilkan kepada pengguna jika kolom input ada (digunakan untuk produk virtual).', 'type' => 'tali', 'default' => null],
                'inputs' => ['title' => 'Bidang masukan opsional (digunakan untuk produk virtual).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Bidang keluaran opsional (digunakan untuk produk virtual).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Url blog atau situs web opsional.', 'type' => 'tali', 'default' => false],
                'status' => ['title' => 'status produk Buka / Tutup, Defaultnya Terbuka.', 'type' => 'enum', 'default' => 'Buka', 'values' => ['Buka', 'Tutup']],
                'category_id' => ['title' => 'identitas kategori.', 'type' => 'ke dalam', 'default' => null],
                'lead' => ['title' => 'Waktu tunggu dalam hitungan jam..', 'type' => 'ke dalam', 'default' => null],
                'style' => ['title' => 'Gaya produk (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merek produk..', 'type' => 'tali', 'default' => null],
                'warranty' => ['title' => 'deskripsi garansi..', 'type' => 'tali', 'default' => null],
                'original' => ['title' => 'Produk ini asli?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garansi pengembalian per hari.', 'type' => 'ke dalam', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objek',
                    '_object' => 'Produk',
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
            'description' => 'Tambahkan produk baru ke toko.',
            'url' => 'toko/{shop_id}/produk/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Tetapkan jenis produk/jasa.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Harga produk.', 'type' => 'mengapung', 'require' => true],
                'commission' => ['title' => 'Tambahkan komisi ke harga.', 'type' => 'mengapung', 'default' => 0],
                'discount' => ['title' => 'Diskon harga produk default.', 'type' => 'mengapung', 'default' => 0],
                'dis_start' => ['title' => 'Waktu mulai diskon dalam zona waktu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tanggal', 'default' => null],
                'dis_end' => ['title' => 'Waktu berakhir diskon dalam zona waktu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tanggal', 'default' => null],
                'currency' => ['title' => 'Mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Judul produk.", 'type' => 'tali', 'require' => true],
                'title_en' => ['title' => 'Judul produk dalam bahasa Inggris (atau sub judul)', 'type' => 'tali', 'default' => null],
                'message' => ['title' => 'Pesan ditampilkan kepada pengguna jika kolom input ada (digunakan untuk produk virtual).', 'type' => 'tali', 'default' => null],
                'inputs' => ['title' => 'Bidang masukan opsional (digunakan untuk produk virtual).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Bidang keluaran opsional (digunakan untuk produk virtual).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Url blog atau situs web opsional.', 'type' => 'tali', 'default' => false],
                'status' => ['title' => 'status produk Buka / Tutup, Defaultnya Terbuka.', 'type' => 'enum', 'default' => 'Buka', 'values' => ['Buka', 'Tutup']],
                'category_id' => ['title' => 'identitas kategori.', 'type' => 'ke dalam', 'default' => null],
                'lead' => ['title' => 'Waktu tunggu dalam hitungan jam..', 'type' => 'ke dalam', 'default' => null],
                'style' => ['title' => 'Gaya produk (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merek produk..', 'type' => 'tali', 'default' => null],
                'warranty' => ['title' => 'deskripsi garansi..', 'type' => 'tali', 'default' => null],
                'original' => ['title' => 'Produk ini asli?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garansi pengembalian per hari.', 'type' => 'ke dalam', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objek',
                    '_object' => 'Produk',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Berhasil memperbarui status produk.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Tambahkan produk baru dari repositori berdasarkan sku ke toko.',
            'url' => 'toko/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'tali', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategori pengaturan otomatis', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produk ditambahkan ke kategori ini berdasarkan id kategori di toko.', 'type' => 'ke dalam', 'default' => null],

                'price' => ['title' => 'Harga produk.', 'type' => 'mengapung', 'require' => true],
                'currency' => ['title' => 'Mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kuantitas', 'type' => 'ke dalam', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objek',
                    '_object' => 'Produk',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Berhasil memperbarui status produk.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
