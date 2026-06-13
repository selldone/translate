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
            'description' => 'Рӯйхати маҳсулоти мағозаро гиред.',
            'url' => 'мағозаҳо/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Танҳо маҳсулоти дастрасро нишон диҳед. Метавонад рост ё дурӯғ бошад.', 'type' => 'булӣ', 'default' => false],
                'with_parent' => ['title' => 'Гирархияи категорияи волидайнро гиред. Метавонад рост ё дурӯғ бошад.', 'type' => 'булӣ', 'default' => false],
                'offset' => ['title' => 'Офсети рӯйхати маҳсулот (барои саҳифабандӣ).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Шумораи маҳсулот дар рӯйхат (барои саҳифаҳо).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Навъи рӯйхат', 'type' => 'шумораи', 'default' => null, 'values' => [null, 'алоқаманд', 'бештар_боздидшуда', 'маъмултарин', 'навтарин', 'беҳтарин фурӯшанда', 'арзонтарин', 'аз ҳама_гарон', 'тасодуфӣ', 'алоқаманд', 'дӯстдошта', 'тасодуфӣ']],
                'product_id' => ['title' => 'Маҳсулоти ID барои баргардонидани маҳсулоти алоқаманд истифода мешавад (гуруф = алоқаманд).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Маҷмӯи маълумоти маҳсулот. Метавонад нул ё мушаххас бошад (null: пешфарз, мушаххас: барои дарёфти мушаххасот оптимизатсияшуда).', 'type' => 'шумораи', 'default' => null, 'values' => [null, 'мушаххас']],
                'search' => ['title' => 'Ҷустуҷӯи матн', 'type' => 'сатр', 'default' => null],
                'search_type' => ['title' => 'Навъи ҷустуҷӯ. Метавонад нул ё категория бошад.', 'type' => 'шумораи', 'default' => null, 'values' => [null, 'категория']],
                'dir' => ['title' => 'Категорияи ID ё ном. Ҳангоми насб кардани ин категория маҳсулотро мегирад.', 'type' => 'ягон', 'default' => null],
                'products_only' => ['title' => 'Танҳо маҳсулотро гиред (категорияҳо дохил карда нашудаанд).', 'type' => 'булӣ', 'default' => false],
                'categories_only' => ['title' => 'Танҳо категорияҳоро гиред (маҳсулот дохил карда нашудааст).', 'type' => 'булӣ', 'default' => false],
                'need_full_variants' => ['title' => 'Маълумоти пурраи вариантро гиред.', 'type' => 'булӣ', 'default' => false],
                'optimized' => ['title' => '(Танҳо ҳангоми гирифтани маҳсулот ҳамчун администратор) Рӯйхати маҳсулотро бидуни нарх, нарх ё омор гиред.', 'type' => 'булӣ', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'массив',
                    '_object' => 'Маҳсулот',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'массив',
                    '_object' => 'Категория',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'объект',
                    '_object' => 'Категория',
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
            'description' => 'Маълумот ва омори маҳсулотро гиред.',
            'url' => 'мағозаҳо/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Маҳсулот',
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
                    '_type' => 'массив',
                    '_object' => 'Маҳсулот - Маълумот',
                    'title' => 'маълумоти 30 рӯзи охир',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Фармоишҳо аз рӯи маълумот.',
                    'type' => 'Виртуалӣ: ҳисоб (int)|Физикӣ: [ҳисоб, ҳолати таҳвил] (массив)'
                ],

                'new_comments_count' => [
                    'title' => 'Шарҳҳои нав ҳисоб карда мешаванд.',
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
            'description' => 'Ба мағоза маҳсулоти нав илова кунед.',
            'url' => 'мағозаҳо/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Навъи маҳсулот / хидматро муқаррар кунед.', 'type' => 'шумораи', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Нархи махсулот.', 'type' => 'шино кардан', 'require' => true],
                'commission' => ['title' => 'Ба нарх комиссия илова кунед.', 'type' => 'шино кардан', 'default' => 0],
                'discount' => ['title' => 'Тахфифи арзиши аслии маҳсулот.', 'type' => 'шино кардан', 'default' => 0],
                'dis_start' => ['title' => 'Вақти оғози тахфиф дар минтақаи вақти UTC (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'сана', 'default' => null],
                'dis_end' => ['title' => 'Вақти анҷоми тахфиф дар минтақаи вақти UTC (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'сана', 'default' => null],
                'currency' => ['title' => 'Асъор,', 'type' => 'шумораи', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "унвони маҳсулот.", 'type' => 'сатр', 'require' => true],
                'title_en' => ['title' => 'Сарлавҳаи англисии маҳсулот (ё зерсарлавҳа)', 'type' => 'сатр', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'сатр', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'сатр', 'default' => null],
                'gtin' => ['title' => "Рақами ашёи тиҷорати ҷаҳонии маҳсулот.", 'type' => 'сатр', 'default' => null],
                'gpc' => ['title' => 'Рамзи категорияи маҳсулоти Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Ҳолати кунунии ашё дар мағозаи шумо.", 'type' => 'шумораи', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Паём ба корбар нишон медиҳад, ки агар майдонҳои вуруд вуҷуд дошта бошанд (барои маҳсулоти виртуалӣ истифода мешаванд).', 'type' => 'сатр', 'default' => null],
                'inputs' => ['title' => 'Майдонҳои вуруди ихтиёрӣ (барои маҳсулоти виртуалӣ истифода мешаванд).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Майдонҳои баромади ихтиёрӣ (барои маҳсулоти виртуалӣ истифода мешаванд).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Блог ё URL-и вебсайти ихтиёрӣ.', 'type' => 'сатр', 'default' => false],
                'status' => ['title' => 'Ҳолати маҳсулот Кушодан / Пӯшидан, Пешфарз Кушода аст.', 'type' => 'шумораи', 'default' => 'Кушода', 'values' => ['Кушода', 'Пӯшед']],
                'category_id' => ['title' => 'категорияи ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Вақти интиқол бо соатҳо ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Услуби маҳсулот (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Тамғаи маҳсулот..', 'type' => 'сатр', 'default' => null],
                'warranty' => ['title' => 'тавсифи кафолат ..', 'type' => 'сатр', 'default' => null],
                'original' => ['title' => 'Оё ин маҳсулот аслӣ аст?', 'type' => 'булӣ', 'default' => false],
                'return_warranty' => ['title' => 'Баргардонидани кафолат аз рӯи рӯз.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Маҳсулот',
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
            'description' => 'Ба мағоза маҳсулоти нав илова кунед.',
            'url' => 'мағозаҳо/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Навъи маҳсулот / хидматро муқаррар кунед.', 'type' => 'шумораи', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Нархи махсулот.', 'type' => 'шино кардан', 'require' => true],
                'commission' => ['title' => 'Ба нарх комиссия илова кунед.', 'type' => 'шино кардан', 'default' => 0],
                'discount' => ['title' => 'Тахфифи арзиши аслии маҳсулот.', 'type' => 'шино кардан', 'default' => 0],
                'dis_start' => ['title' => 'Вақти оғози тахфиф дар минтақаи вақти UTC (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'сана', 'default' => null],
                'dis_end' => ['title' => 'Вақти анҷоми тахфиф дар минтақаи вақти UTC (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'сана', 'default' => null],
                'currency' => ['title' => 'Асъор,', 'type' => 'шумораи', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "унвони маҳсулот.", 'type' => 'сатр', 'require' => true],
                'title_en' => ['title' => 'Сарлавҳаи англисии маҳсулот (ё зерсарлавҳа)', 'type' => 'сатр', 'default' => null],
                'message' => ['title' => 'Паём ба корбар нишон медиҳад, ки агар майдонҳои вуруд вуҷуд дошта бошанд (барои маҳсулоти виртуалӣ истифода мешаванд).', 'type' => 'сатр', 'default' => null],
                'inputs' => ['title' => 'Майдонҳои вуруди ихтиёрӣ (барои маҳсулоти виртуалӣ истифода мешаванд).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Майдонҳои баромади ихтиёрӣ (барои маҳсулоти виртуалӣ истифода мешаванд).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Блог ё URL-и вебсайти ихтиёрӣ.', 'type' => 'сатр', 'default' => false],
                'status' => ['title' => 'Ҳолати маҳсулот Кушодан / Пӯшидан, Пешфарз Кушода аст.', 'type' => 'шумораи', 'default' => 'Кушода', 'values' => ['Кушода', 'Пӯшед']],
                'category_id' => ['title' => 'категорияи ID.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Вақти интиқол бо соатҳо ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Услуби маҳсулот (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Тамғаи маҳсулот..', 'type' => 'сатр', 'default' => null],
                'warranty' => ['title' => 'тавсифи кафолат ..', 'type' => 'сатр', 'default' => null],
                'original' => ['title' => 'Оё ин маҳсулот аслӣ аст?', 'type' => 'булӣ', 'default' => false],
                'return_warranty' => ['title' => 'Баргардонидани кафолат аз рӯи рӯз.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Маҳсулот',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Муваффақият ҳолати маҳсулотро нав кард.', 'type' => 'булӣ'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Маҳсулоти навро аз анбори sku ба мағоза илова кунед.',
            'url' => 'мағозаҳо/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'сатр', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Категорияи танзими худкор', 'type' => 'булӣ', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Маҳсулотро ба ин категория аз рӯи ID категория дар мағоза илова кунед.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Нархи махсулот.', 'type' => 'шино кардан', 'require' => true],
                'currency' => ['title' => 'Асъор,', 'type' => 'шумораи', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Миқдор', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Маҳсулот',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Муваффақият ҳолати маҳсулотро нав кард.', 'type' => 'булӣ'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
