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
            'description' => 'Mağazanın ürün listesini alın.',
            'url' => 'mağazalar/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Yalnızca mevcut ürünleri göster. Doğru ya da yanlış olabilir.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Üst kategori hiyerarşisini alın. Doğru ya da yanlış olabilir.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Ürün listesinin ofseti (sayfalandırma için).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Listedeki ürün sayısı (sayfalandırma için).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Liste sıralama türü', 'type' => 'numaralandırma', 'default' => null, 'values' => [null, 'ilgili', 'en çok ziyaret edilen', 'en_popüler', 'en yeni', 'çok satan', 'en ucuz', 'en_pahalı', 'rastgele', 'ilgili', 'favori', 'rastgele']],
                'product_id' => ['title' => 'İlgili ürünleri iade etmek için kullanılan ID ürünü (sıralama = ilgili).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Ürün veri seti. Boş veya spesifikasyon olabilir (null: varsayılan, spesifikasyon: spesifikasyonları almak için optimize edilmiş).', 'type' => 'numaralandırma', 'default' => null, 'values' => [null, 'spesifikasyon']],
                'search' => ['title' => 'Metin ara', 'type' => 'dize', 'default' => null],
                'search_type' => ['title' => 'Arama türü. Null veya kategori olabilir.', 'type' => 'numaralandırma', 'default' => null, 'values' => [null, 'kategori']],
                'dir' => ['title' => 'Kategori ID veya adı. Ayarlandığında bu kategorideki ürünleri alır.', 'type' => 'herhangi biri', 'default' => null],
                'products_only' => ['title' => 'Yalnızca ürünleri alın (kategoriler dahil değildir).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Yalnızca kategorileri alın (ürünler dahil değildir).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Tam varyant bilgisini alın.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Yalnızca yönetici olarak ürün alırken) Ürün listesini fiyat, ücret veya istatistik olmadan alın.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'dizi',
                    '_object' => 'Ürün',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'dizi',
                    '_object' => 'Kategori',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'nesne',
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
            'description' => 'Ürün bilgilerini ve istatistiklerini alın.',
            'url' => 'mağazalar/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'nesne',
                    '_object' => 'Ürün',
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
                    '_type' => 'dizi',
                    '_object' => 'Ürün Verileri',
                    'title' => 'son 30 günün verileri',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Sipariş bilgileri.',
                    'type' => 'Sanal: sayım (int)|Fiziksel: [sayı, teslimat_durumu] (dizi)'
                ],

                'new_comments_count' => [
                    'title' => 'Yeni yorumlar sayılır.',
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
            'description' => 'Mağazaya yeni ürün ekleyin.',
            'url' => 'mağazalar/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ürün/hizmetin türünü ayarlayın.', 'type' => 'numaralandırma', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ürünün fiyatı.', 'type' => 'şamandıra', 'require' => true],
                'commission' => ['title' => 'Fiyata komisyon ekleyin.', 'type' => 'şamandıra', 'default' => 0],
                'discount' => ['title' => 'Varsayılan ürün fiyatı indirimi.', 'type' => 'şamandıra', 'default' => 0],
                'dis_start' => ['title' => 'UTC saat diliminde indirim başlangıç zamanı (biçim: YYYY-AA-GG HH:mm:ss).', 'type' => 'tarih', 'default' => null],
                'dis_end' => ['title' => 'UTC saat diliminde indirim bitiş zamanı (biçim: YYYY-AA-GG HH:mm:ss).', 'type' => 'tarih', 'default' => null],
                'currency' => ['title' => 'Para birimi,', 'type' => 'numaralandırma', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Ürünün başlığı.", 'type' => 'dize', 'require' => true],
                'title_en' => ['title' => 'Ürünün İngilizce başlığı (veya alt başlığı)', 'type' => 'dize', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'dize', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'dize', 'default' => null],
                'gtin' => ['title' => "Ürünün Küresel Ticari Ürün Numarası.", 'type' => 'dize', 'default' => null],
                'gpc' => ['title' => 'Google ürün kategorisi kodu.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Öğenin mağazanızdaki mevcut durumu.", 'type' => 'numaralandırma', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Giriş alanlarının mevcut olup olmadığı (sanal ürünler için kullanılır) kullanıcıya gösterilen mesajdır.', 'type' => 'dize', 'default' => null],
                'inputs' => ['title' => 'İsteğe bağlı giriş alanları (sanal ürünler için kullanılır).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'İsteğe bağlı çıktı alanları (sanal ürünler için kullanılır).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'İsteğe bağlı blog veya web sitesi URL\'si.', 'type' => 'dize', 'default' => false],
                'status' => ['title' => 'ürün durumu Açık / Kapalı, Varsayılan Açık\'tır.', 'type' => 'numaralandırma', 'default' => 'Açık', 'values' => ['Açık', 'Kapat']],
                'category_id' => ['title' => 'kategori kimliği.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Teslimat süresi saat cinsinden..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Ürün stili (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ürünün markası..', 'type' => 'dize', 'default' => null],
                'warranty' => ['title' => 'garanti açıklaması..', 'type' => 'dize', 'default' => null],
                'original' => ['title' => 'Bu ürün orijinal mi?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Günlere göre iade garantisi.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'nesne',
                    '_object' => 'Ürün',
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
            'description' => 'Mağazaya yeni ürün ekleyin.',
            'url' => 'mağazalar/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ürün/hizmetin türünü ayarlayın.', 'type' => 'numaralandırma', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ürünün fiyatı.', 'type' => 'şamandıra', 'require' => true],
                'commission' => ['title' => 'Fiyata komisyon ekleyin.', 'type' => 'şamandıra', 'default' => 0],
                'discount' => ['title' => 'Varsayılan ürün fiyatı indirimi.', 'type' => 'şamandıra', 'default' => 0],
                'dis_start' => ['title' => 'UTC saat diliminde indirim başlangıç zamanı (biçim: YYYY-AA-GG HH:mm:ss).', 'type' => 'tarih', 'default' => null],
                'dis_end' => ['title' => 'UTC saat diliminde indirim bitiş zamanı (biçim: YYYY-AA-GG HH:mm:ss).', 'type' => 'tarih', 'default' => null],
                'currency' => ['title' => 'Para birimi,', 'type' => 'numaralandırma', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Ürünün başlığı.", 'type' => 'dize', 'require' => true],
                'title_en' => ['title' => 'Ürünün İngilizce başlığı (veya alt başlığı)', 'type' => 'dize', 'default' => null],
                'message' => ['title' => 'Giriş alanlarının mevcut olup olmadığı (sanal ürünler için kullanılır) kullanıcıya gösterilen mesajdır.', 'type' => 'dize', 'default' => null],
                'inputs' => ['title' => 'İsteğe bağlı giriş alanları (sanal ürünler için kullanılır).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'İsteğe bağlı çıktı alanları (sanal ürünler için kullanılır).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'İsteğe bağlı blog veya web sitesi URL\'si.', 'type' => 'dize', 'default' => false],
                'status' => ['title' => 'ürün durumu Açık / Kapalı, Varsayılan Açık\'tır.', 'type' => 'numaralandırma', 'default' => 'Açık', 'values' => ['Açık', 'Kapat']],
                'category_id' => ['title' => 'kategori kimliği.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Teslimat süresi saat cinsinden..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Ürün stili (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Ürünün markası..', 'type' => 'dize', 'default' => null],
                'warranty' => ['title' => 'garanti açıklaması..', 'type' => 'dize', 'default' => null],
                'original' => ['title' => 'Bu ürün orijinal mi?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Günlere göre iade garantisi.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'nesne',
                    '_object' => 'Ürün',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Başarıyla güncellenen ürün durumu.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Mağazaya SKU ile depodan yeni ürün ekleyin.',
            'url' => 'mağazalar/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'dize', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategoriyi otomatik ayarla', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Ürün, mağazadaki kategori kimliğine göre bu kategoriye eklenir.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Ürünün fiyatı.', 'type' => 'şamandıra', 'require' => true],
                'currency' => ['title' => 'Para birimi,', 'type' => 'numaralandırma', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'miktar', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'nesne',
                    '_object' => 'Ürün',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Başarıyla güncellenen ürün durumu.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
