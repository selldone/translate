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
            'description' => 'Meunang daptar produk toko urang.',
            'url' => 'toko/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Témbongkeun ngan produk sadia. Bisa bener atawa salah.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Meunangkeun hirarki kategori indungna. Bisa bener atawa salah.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Offset tina daptar produk (pikeun pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Jumlah produk dina daptar (pikeun pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Daptar jinis sortir', 'type' => 'enum', 'default' => null, 'values' => [null, 'patali', 'pang_didatangan', 'pang_populér', 'pang anyarna', 'laris', 'pangmurahna', 'paling_mahal', 'acak-acakan', 'patali', 'karesep', 'acak-acakan']],
                'product_id' => ['title' => 'Produk ID dipaké pikeun balik produk patali (sort = patali).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'set data produk. Bisa null atawa spésifikasi (null: standar, spésifikasi: dioptimalkeun pikeun retrieving spésifikasi).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spésifikasi']],
                'search' => ['title' => 'Pilarian téks', 'type' => 'senar', 'default' => null],
                'search_type' => ['title' => 'Jenis pilarian. Bisa null atawa kategori.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID atawa ngaran. Meunang produk dina kategori ieu nalika disetel.', 'type' => 'sagala', 'default' => null],
                'products_only' => ['title' => 'Meunang ngan produk (kategori teu kaasup).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Meunang ukur kategori (produk teu kaasup).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Kéngingkeun inpormasi varian lengkep.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Ngan nalika kéngingkeun produk salaku admin) Kéngingkeun daptar produk tanpa harga, harga, atanapi statistik.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'susunan',
                    '_object' => 'produk',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'susunan',
                    '_object' => 'Kategori',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objék',
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
            'description' => 'Kéngingkeun inpormasi sareng statistik produk.',
            'url' => 'toko/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objék',
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
                    '_object' => 'Produk-Data',
                    'title' => 'data panungtungan 30 poé',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Pesenan que info.',
                    'type' => 'Virtual: cacah (int)|Fisik: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'koméntar anyar diitung.',
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
            'description' => 'Tambahkeun produk anyar ka toko.',
            'url' => 'toko/{shop_id}/produk/tambah',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setel jinis produk / jasa.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Harga produk.', 'type' => 'ngambang', 'require' => true],
                'commission' => ['title' => 'Tambahkeun komisi kana harga.', 'type' => 'ngambang', 'default' => 0],
                'discount' => ['title' => 'Diskon harga produk standar.', 'type' => 'ngambang', 'default' => 0],
                'dis_start' => ['title' => 'Diskon waktos mimiti dina zona waktos UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'titimangsa', 'default' => null],
                'dis_end' => ['title' => 'Diskon waktos tungtung dina zona waktos UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'titimangsa', 'default' => null],
                'currency' => ['title' => 'Mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Judul produk.", 'type' => 'senar', 'require' => true],
                'title_en' => ['title' => 'Judul produk dina basa Inggris (atanapi subjudul)', 'type' => 'senar', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'senar', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'senar', 'default' => null],
                'gtin' => ['title' => "Nomer Barang Perdagangan Global Produk.", 'type' => 'senar', 'default' => null],
                'gpc' => ['title' => 'Kode kategori produk Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Kaayaan barang ayeuna di toko anjeun.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Pesen nembongkeun ka pamaké lamun widang input aya (dipaké pikeun produk virtual).', 'type' => 'senar', 'default' => null],
                'inputs' => ['title' => 'Widang input pilihan (dipaké pikeun produk virtual).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Widang kaluaran pilihan (dipaké pikeun produk virtual).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog pilihan atanapi url ramatloka.', 'type' => 'senar', 'default' => false],
                'status' => ['title' => 'status produk Buka / Tutup, Default nyaeta Buka.', 'type' => 'enum', 'default' => 'Buka', 'values' => ['Buka', 'Tutup']],
                'category_id' => ['title' => 'id kategori.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Waktosna dina jam..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Gaya produk (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merk produk..', 'type' => 'senar', 'default' => null],
                'warranty' => ['title' => 'katerangan garansi..', 'type' => 'senar', 'default' => null],
                'original' => ['title' => 'Produk ieu asli?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Ngabalikeun jaminan ku poé.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objék',
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
            'description' => 'Tambahkeun produk anyar ka toko.',
            'url' => 'toko/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Setel jinis produk / jasa.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Harga produk.', 'type' => 'ngambang', 'require' => true],
                'commission' => ['title' => 'Tambahkeun komisi kana harga.', 'type' => 'ngambang', 'default' => 0],
                'discount' => ['title' => 'Diskon harga produk standar.', 'type' => 'ngambang', 'default' => 0],
                'dis_start' => ['title' => 'Diskon waktos mimiti dina zona waktos UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'titimangsa', 'default' => null],
                'dis_end' => ['title' => 'Diskon waktos tungtung dina zona waktos UTC (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'titimangsa', 'default' => null],
                'currency' => ['title' => 'Mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Judul produk.", 'type' => 'senar', 'require' => true],
                'title_en' => ['title' => 'Judul produk dina basa Inggris (atanapi subjudul)', 'type' => 'senar', 'default' => null],
                'message' => ['title' => 'Pesen nembongkeun ka pamaké lamun widang input aya (dipaké pikeun produk virtual).', 'type' => 'senar', 'default' => null],
                'inputs' => ['title' => 'Widang input pilihan (dipaké pikeun produk virtual).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Widang kaluaran pilihan (dipaké pikeun produk virtual).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Blog pilihan atanapi url ramatloka.', 'type' => 'senar', 'default' => false],
                'status' => ['title' => 'status produk Buka / Tutup, Default nyaeta Buka.', 'type' => 'enum', 'default' => 'Buka', 'values' => ['Buka', 'Tutup']],
                'category_id' => ['title' => 'id kategori.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Waktosna dina jam..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Gaya produk (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Merk produk..', 'type' => 'senar', 'default' => null],
                'warranty' => ['title' => 'katerangan garansi..', 'type' => 'senar', 'default' => null],
                'original' => ['title' => 'Produk ieu asli?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Ngabalikeun jaminan ku poé.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objék',
                    '_object' => 'produk',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Kasuksésan diropéa kaayaan produk.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Tambahkeun produk anyar tina gudang ku sku ka warung.',
            'url' => 'toko/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'senar', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategori set otomatis', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produk tambahkeun kana kategori ieu ku id kategori di toko.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Harga produk.', 'type' => 'ngambang', 'require' => true],
                'currency' => ['title' => 'Mata uang,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'kuantitas', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objék',
                    '_object' => 'produk',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Kasuksésan diropéa kaayaan produk.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
