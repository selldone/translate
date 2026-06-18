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
            'description' => 'Entuk dhaptar produk toko.',
            'url' => 'toko/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Tampilake mung produk sing kasedhiya. Bisa bener utawa salah.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Entuk hierarki kategori induk. Bisa bener utawa salah.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset saka dhaptar produk (kanggo pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Jumlah produk ing dhaptar (kanggo pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Dhaptar jinis ngurutake', 'type' => 'enum', 'default' => null, 'values' => [null, 'gegandhengan', 'paling_ngunjungi', 'paling_populer', 'paling anyar', 'laris', 'paling murah', 'paling_larang', 'acak-acakan', 'gegandhengan', 'favorit', 'acak-acakan']],
                'product_id' => ['title' => 'Product ID digunakake kanggo bali produk related (urut = related).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'set data produk. Bisa null utawa spec (null: standar, spec: optimized kanggo njupuk specifications).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spek']],
                'search' => ['title' => 'Telusuri teks', 'type' => 'senar', 'default' => null],
                'search_type' => ['title' => 'Jinis telusuran. Bisa null utawa kategori.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID utawa jeneng. Entuk produk ing kategori iki nalika disetel.', 'type' => 'sembarang', 'default' => null],
                'products_only' => ['title' => 'Entuk mung produk (kategori ora kalebu).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Entuk mung kategori (produk ora kalebu).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Entuk informasi varian lengkap.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Mung nalika entuk produk minangka admin) Entuk dhaptar produk tanpa rega, tarif, utawa statistik.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'susunan',
                    '_object' => 'produk',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'susunan',
                    '_object' => 'kategori',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'obyek',
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
            'description' => 'Entuk informasi lan statistik produk.',
            'url' => 'toko/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'obyek',
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
                    '_type' => 'susunan',
                    '_object' => 'Product-Data',
                    'title' => 'data 30 dina pungkasan',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Info pesenan.',
                    'type' => 'Virtual: count (int)|Fisik: [count, delivery_state] (larik)'
                ],

                'new_comments_count' => [
                    'title' => 'Komentar anyar count.',
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
            'description' => 'Tambah produk anyar menyang toko.',
            'url' => 'toko/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setel jinis produk / layanan.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Rega produk.', 'type' => 'ngambang', 'require' => true],
                'commission' => ['title' => 'Tambah komisi kanggo rega.', 'type' => 'ngambang', 'default' => 0],
                'discount' => ['title' => 'Diskon rega produk standar.', 'type' => 'ngambang', 'default' => 0],
                'dis_start' => ['title' => 'Wektu wiwitan diskon ing zona wektu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tanggal', 'default' => null],
                'dis_end' => ['title' => 'Diskon wektu pungkasan ing zona wektu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tanggal', 'default' => null],
                'currency' => ['title' => 'mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Judul produk.", 'type' => 'senar', 'require' => true],
                'title_en' => ['title' => 'Judhul produk ing Inggris (utawa subtitle)', 'type' => 'senar', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'senar', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'senar', 'default' => null],
                'gtin' => ['title' => "Nomer Barang Perdagangan Global Produk.", 'type' => 'senar', 'default' => null],
                'gpc' => ['title' => 'Kode kategori produk Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Kondisi barang saiki ing toko sampeyan.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Pesen nuduhake menyang pangguna yen kolom input ana (digunakake kanggo produk virtual).', 'type' => 'senar', 'default' => null],
                'inputs' => ['title' => 'Kolom input opsional (digunakake kanggo produk virtual).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Kolom output opsional (digunakake kanggo produk virtual).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog opsional utawa url situs web.', 'type' => 'senar', 'default' => false],
                'status' => ['title' => 'status produk Bukak / Tutup, Default mbukak.', 'type' => 'enum', 'default' => 'Mbukak', 'values' => ['Mbukak', 'Nutup']],
                'category_id' => ['title' => 'id kategori', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Lead time ing jam..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Gaya produk (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merk produk..', 'type' => 'senar', 'default' => null],
                'warranty' => ['title' => 'katrangan garansi..', 'type' => 'senar', 'default' => null],
                'original' => ['title' => 'Produk iki asli?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garansi bali kanthi dina.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obyek',
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
            'description' => 'Tambah produk anyar menyang toko.',
            'url' => 'toko/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setel jinis produk / layanan.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Rega produk.', 'type' => 'ngambang', 'require' => true],
                'commission' => ['title' => 'Tambah komisi kanggo rega.', 'type' => 'ngambang', 'default' => 0],
                'discount' => ['title' => 'Diskon rega produk standar.', 'type' => 'ngambang', 'default' => 0],
                'dis_start' => ['title' => 'Wektu wiwitan diskon ing zona wektu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tanggal', 'default' => null],
                'dis_end' => ['title' => 'Diskon wektu pungkasan ing zona wektu UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'tanggal', 'default' => null],
                'currency' => ['title' => 'mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Judul produk.", 'type' => 'senar', 'require' => true],
                'title_en' => ['title' => 'Judhul produk ing Inggris (utawa subtitle)', 'type' => 'senar', 'default' => null],
                'message' => ['title' => 'Pesen nuduhake menyang pangguna yen kolom input ana (digunakake kanggo produk virtual).', 'type' => 'senar', 'default' => null],
                'inputs' => ['title' => 'Kolom input opsional (digunakake kanggo produk virtual).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Kolom output opsional (digunakake kanggo produk virtual).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog opsional utawa url situs web.', 'type' => 'senar', 'default' => false],
                'status' => ['title' => 'status produk Bukak / Tutup, Default mbukak.', 'type' => 'enum', 'default' => 'Mbukak', 'values' => ['Mbukak', 'Nutup']],
                'category_id' => ['title' => 'id kategori', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Lead time ing jam..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Gaya produk (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merk produk..', 'type' => 'senar', 'default' => null],
                'warranty' => ['title' => 'katrangan garansi..', 'type' => 'senar', 'default' => null],
                'original' => ['title' => 'Produk iki asli?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garansi bali kanthi dina.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obyek',
                    '_object' => 'produk',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Sukses nganyari status produk.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Tambah produk anyar saka gudang dening sku menyang toko.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'senar', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Auto set kategori', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Tambah produk menyang kategori iki miturut kategori id ing toko.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Rega produk.', 'type' => 'ngambang', 'require' => true],
                'currency' => ['title' => 'mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Jumlah', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'obyek',
                    '_object' => 'produk',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Sukses nganyari status produk.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
