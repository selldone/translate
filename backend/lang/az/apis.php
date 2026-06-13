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
            'description' => 'Mağazanın məhsul siyahısını əldə edin.',
            'url' => 'mağazalar/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Yalnız mövcud məhsulları göstərin. Doğru və ya yalan ola bilər.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Ana kateqoriya iyerarxiyasını əldə edin. Doğru və ya yalan ola bilər.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Məhsul siyahısının ofseti (səhifələmə üçün).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Siyahıdakı məhsulların sayı (səhifələmə üçün).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Siyahı çeşidləmə növü', 'type' => 'nömrə', 'default' => null, 'values' => [null, 'əlaqəli', 'ən çox ziyarət edilən', 'ən_məşhur', 'ən yeni', 'bestseller', 'ən ucuz', 'ən_bahalı', 'təsadüfi', 'əlaqəli', 'sevimli', 'təsadüfi']],
                'product_id' => ['title' => 'Məhsul ID əlaqəli məhsulları qaytarmaq üçün istifadə olunur (çeşidləmə = əlaqəli).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Məhsul məlumat dəsti. Null və ya spesifik ola bilər (null: default, spec: spesifikasiyaları əldə etmək üçün optimallaşdırılmışdır).', 'type' => 'nömrə', 'default' => null, 'values' => [null, 'spesifikasiya']],
                'search' => ['title' => 'Mətni axtarın', 'type' => 'simli', 'default' => null],
                'search_type' => ['title' => 'Axtarış növü. Null və ya kateqoriya ola bilər.', 'type' => 'nömrə', 'default' => null, 'values' => [null, 'kateqoriya']],
                'dir' => ['title' => 'ID kateqoriyası və ya adı. Quraşdırıldıqda bu kateqoriyaya aid məhsulları alır.', 'type' => 'hər hansı', 'default' => null],
                'products_only' => ['title' => 'Yalnız məhsulları əldə edin (kateqoriyalar daxil deyil).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Yalnız kateqoriyalar əldə edin (məhsullar daxil deyil).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Tam variant məlumatı alın.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Yalnız admin olaraq məhsullar əldə edərkən) Qiymət, tarif və ya statistika olmadan məhsul siyahısını əldə edin.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'massiv',
                    '_object' => 'Məhsul',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'massiv',
                    '_object' => 'Kateqoriya',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'obyekt',
                    '_object' => 'Kateqoriya',
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
            'description' => 'Məhsul haqqında məlumat və statistika əldə edin.',
            'url' => 'mağazalar/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'obyekt',
                    '_object' => 'Məhsul',
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
                    '_type' => 'massiv',
                    '_object' => 'Məhsul-Data',
                    'title' => 'son 30 gün məlumatları',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Sifarişlər que məlumat.',
                    'type' => 'Virtual: count (int)|Fiziki: [say, çatdırılma_state] (massiv)'
                ],

                'new_comments_count' => [
                    'title' => 'Yeni şərhlər sayılır.',
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
            'description' => 'Mağazaya yeni məhsul əlavə edin.',
            'url' => 'mağazalar/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Məhsulun / xidmətin növünü təyin edin.', 'type' => 'nömrə', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Məhsulun qiyməti.', 'type' => 'üzmək', 'require' => true],
                'commission' => ['title' => 'Qiymətə komissiya əlavə edin.', 'type' => 'üzmək', 'default' => 0],
                'discount' => ['title' => 'Standart məhsul qiymət endirimi.', 'type' => 'üzmək', 'default' => 0],
                'dis_start' => ['title' => 'UTC saat qurşağında endirim başlama vaxtı (format: YYYY-AA-GG HH:mm:ss).', 'type' => 'tarix', 'default' => null],
                'dis_end' => ['title' => 'UTC vaxt zonasında endirim bitmə vaxtı (format: YYYY-AA-GG HH:mm:ss).', 'type' => 'tarix', 'default' => null],
                'currency' => ['title' => 'Valyuta,', 'type' => 'nömrə', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "məhsulun adı.", 'type' => 'simli', 'require' => true],
                'title_en' => ['title' => 'Məhsulun ingiliscə adı (və ya alt başlıq)', 'type' => 'simli', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'simli', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'simli', 'default' => null],
                'gtin' => ['title' => "Məhsulun Qlobal Ticarət Elementinin Nömrəsi.", 'type' => 'simli', 'default' => null],
                'gpc' => ['title' => 'Google məhsul kateqoriya kodu.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Mağazanızdakı əşyanın hazırkı vəziyyəti.", 'type' => 'nömrə', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Giriş sahələri varsa (virtual məhsullar üçün istifadə olunur) istifadəçiyə mesaj göstərir.', 'type' => 'simli', 'default' => null],
                'inputs' => ['title' => 'Könüllü daxiletmə sahələri (virtual məhsullar üçün istifadə olunur).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Könüllü çıxış sahələri (virtual məhsullar üçün istifadə olunur).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Könüllü blog və ya veb sayt url.', 'type' => 'simli', 'default' => false],
                'status' => ['title' => 'məhsul statusu Açıq / Bağlayın, Defolt Açıqdır.', 'type' => 'nömrə', 'default' => 'Açıq', 'values' => ['Açıq', 'Bağlayın']],
                'category_id' => ['title' => 'kateqoriya id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Çatdırılma müddəti saatlarla..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Məhsulun üslubu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Məhsulun markası..', 'type' => 'simli', 'default' => null],
                'warranty' => ['title' => 'zəmanət təsviri..', 'type' => 'simli', 'default' => null],
                'original' => ['title' => 'Bu məhsul orijinaldır?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Zəmanəti günlərlə qaytarın.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obyekt',
                    '_object' => 'Məhsul',
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
            'description' => 'Mağazaya yeni məhsul əlavə edin.',
            'url' => 'mağazalar/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Məhsulun / xidmətin növünü təyin edin.', 'type' => 'nömrə', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Məhsulun qiyməti.', 'type' => 'üzmək', 'require' => true],
                'commission' => ['title' => 'Qiymətə komissiya əlavə edin.', 'type' => 'üzmək', 'default' => 0],
                'discount' => ['title' => 'Standart məhsul qiymət endirimi.', 'type' => 'üzmək', 'default' => 0],
                'dis_start' => ['title' => 'UTC saat qurşağında endirim başlama vaxtı (format: YYYY-AA-GG HH:mm:ss).', 'type' => 'tarix', 'default' => null],
                'dis_end' => ['title' => 'UTC vaxt zonasında endirim bitmə vaxtı (format: YYYY-AA-GG HH:mm:ss).', 'type' => 'tarix', 'default' => null],
                'currency' => ['title' => 'Valyuta,', 'type' => 'nömrə', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "məhsulun adı.", 'type' => 'simli', 'require' => true],
                'title_en' => ['title' => 'Məhsulun ingiliscə adı (və ya alt başlıq)', 'type' => 'simli', 'default' => null],
                'message' => ['title' => 'Giriş sahələri varsa (virtual məhsullar üçün istifadə olunur) istifadəçiyə mesaj göstərir.', 'type' => 'simli', 'default' => null],
                'inputs' => ['title' => 'Könüllü daxiletmə sahələri (virtual məhsullar üçün istifadə olunur).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Könüllü çıxış sahələri (virtual məhsullar üçün istifadə olunur).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Könüllü blog və ya veb sayt url.', 'type' => 'simli', 'default' => false],
                'status' => ['title' => 'məhsul statusu Açıq / Bağlayın, Defolt Açıqdır.', 'type' => 'nömrə', 'default' => 'Açıq', 'values' => ['Açıq', 'Bağlayın']],
                'category_id' => ['title' => 'kateqoriya id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Çatdırılma müddəti saatlarla..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Məhsulun üslubu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Məhsulun markası..', 'type' => 'simli', 'default' => null],
                'warranty' => ['title' => 'zəmanət təsviri..', 'type' => 'simli', 'default' => null],
                'original' => ['title' => 'Bu məhsul orijinaldır?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Zəmanəti günlərlə qaytarın.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obyekt',
                    '_object' => 'Məhsul',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Uğur məhsulun vəziyyətini yenilədi.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Mağazaya sku üzrə depodan yeni məhsul əlavə edin.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'simli', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Avtomatik təyin kateqoriyası', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Məhsulu mağazada kateqoriya id-si ilə bu kateqoriyaya əlavə edin.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Məhsulun qiyməti.', 'type' => 'üzmək', 'require' => true],
                'currency' => ['title' => 'Valyuta,', 'type' => 'nömrə', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Kəmiyyət', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'obyekt',
                    '_object' => 'Məhsul',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Uğur məhsulun vəziyyətini yenilədi.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
