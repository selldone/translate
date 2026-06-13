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
            'description' => 'Отримайте список товарів магазину.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Показати лише доступні продукти. Може бути істинним або хибним.', 'type' => 'логічний', 'default' => false],
                'with_parent' => ['title' => 'Отримати ієрархію батьківських категорій. Може бути істинним або хибним.', 'type' => 'логічний', 'default' => false],
                'offset' => ['title' => 'Зміщення списку товарів (для нумерації сторінок).', 'type' => 'внутр', 'default' => 0],
                'limit' => ['title' => 'Кількість товарів у списку (для нумерації сторінок).', 'type' => 'внутр', 'default' => 20],
                'sort' => ['title' => 'Тип сортування списку', 'type' => 'перелік', 'default' => null, 'values' => [null, 'пов\'язані', 'найбільш відвідуваний', 'найпопулярніший', 'найновіший', 'бестселер', 'найдешевший', 'найдорожчий', 'випадковий', 'пов\'язані', 'улюблений', 'випадковий']],
                'product_id' => ['title' => 'Продукт ID використовується для повернення пов’язаних продуктів (сортувати = пов’язані).', 'type' => 'внутр', 'default' => null],
                'set' => ['title' => 'Набір даних про продукт. Може мати значення null або spec (null: за замовчуванням, spec: оптимізовано для отримання специфікацій).', 'type' => 'перелік', 'default' => null, 'values' => [null, 'спец']],
                'search' => ['title' => 'Пошуковий текст', 'type' => 'рядок', 'default' => null],
                'search_type' => ['title' => 'Тип пошуку. Може мати значення null або категорії.', 'type' => 'перелік', 'default' => null, 'values' => [null, 'категорія']],
                'dir' => ['title' => 'Категорія ID або назва. Якщо встановлено, отримує продукти цієї категорії.', 'type' => 'будь-який', 'default' => null],
                'products_only' => ['title' => 'Отримайте лише продукти (категорії не включені).', 'type' => 'логічний', 'default' => false],
                'categories_only' => ['title' => 'Отримати лише категорії (продукція не включена).', 'type' => 'логічний', 'default' => false],
                'need_full_variants' => ['title' => 'Отримайте повну інформацію про варіанти.', 'type' => 'логічний', 'default' => false],
                'optimized' => ['title' => '(Лише при отриманні продуктів від імені адміністратора) Отримайте список продуктів без ціни, ціни чи статистики.', 'type' => 'логічний', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'масив',
                    '_object' => 'Продукт',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'масив',
                    '_object' => 'Категорія',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'об\'єкт',
                    '_object' => 'Категорія',
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
            'description' => 'Отримайте інформацію про продукт і статистику.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'об\'єкт',
                    '_object' => 'Продукт',
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
                    '_type' => 'масив',
                    '_object' => 'Дані продукту',
                    'title' => 'дані за останні 30 днів',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Інформація про замовлення.',
                    'type' => 'Віртуальний: count (int)|Фізичні: [кількість, стан_доставки] (масив)'
                ],

                'new_comments_count' => [
                    'title' => 'Нові коментарі враховуються.',
                    'type' => 'внутр'
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
            'description' => 'Додати новий товар в магазин.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Встановити тип товару/послуги.', 'type' => 'перелік', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ціна товару.', 'type' => 'плавати', 'require' => true],
                'commission' => ['title' => 'Додайте комісію до ціни.', 'type' => 'плавати', 'default' => 0],
                'discount' => ['title' => 'Знижка на ціну товару за замовчуванням.', 'type' => 'плавати', 'default' => 0],
                'dis_start' => ['title' => 'Час початку знижки в часовому поясі UTC (формат: РРРР-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'Час закінчення знижки в часовому поясі UTC (формат: РРРР-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'валюта,', 'type' => 'перелік', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Назва товару.", 'type' => 'рядок', 'require' => true],
                'title_en' => ['title' => 'Англійська назва продукту (або підзаголовок)', 'type' => 'рядок', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'рядок', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'рядок', 'default' => null],
                'gtin' => ['title' => "Глобальний номер товарної позиції продукту.", 'type' => 'рядок', 'default' => null],
                'gpc' => ['title' => 'Код категорії продукту Google.', 'type' => 'внутр', 'default' => null],
                'condition' => ['title' => "Поточний стан товару у вашому магазині.", 'type' => 'перелік', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Повідомлення, яке відображається користувачеві, якщо існують поля введення (використовується для віртуальних продуктів).', 'type' => 'рядок', 'default' => null],
                'inputs' => ['title' => 'Додаткові поля введення (використовуються для віртуальних продуктів).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Додаткові поля виводу (використовуються для віртуальних продуктів).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Додаткова URL-адреса блогу або веб-сайту.', 'type' => 'рядок', 'default' => false],
                'status' => ['title' => 'стан продукту Відкрити / Закрити, за умовчанням відкрито.', 'type' => 'перелік', 'default' => 'відкритий', 'values' => ['відкритий', 'Закрити']],
                'category_id' => ['title' => 'ідентифікатор категорії.', 'type' => 'внутр', 'default' => null],
                'lead' => ['title' => 'Термін виконання в годинах..', 'type' => 'внутр', 'default' => null],
                'style' => ['title' => 'Стиль продукту (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Марка товару..', 'type' => 'рядок', 'default' => null],
                'warranty' => ['title' => 'опис гарантії..', 'type' => 'рядок', 'default' => null],
                'original' => ['title' => 'Цей товар оригінальний?', 'type' => 'логічний', 'default' => false],
                'return_warranty' => ['title' => 'Гарантія на повернення по днях.', 'type' => 'внутр', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'об\'єкт',
                    '_object' => 'Продукт',
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
            'description' => 'Додати новий товар в магазин.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Встановити тип товару/послуги.', 'type' => 'перелік', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Ціна товару.', 'type' => 'плавати', 'require' => true],
                'commission' => ['title' => 'Додайте комісію до ціни.', 'type' => 'плавати', 'default' => 0],
                'discount' => ['title' => 'Знижка на ціну товару за замовчуванням.', 'type' => 'плавати', 'default' => 0],
                'dis_start' => ['title' => 'Час початку знижки в часовому поясі UTC (формат: РРРР-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'Час закінчення знижки в часовому поясі UTC (формат: РРРР-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'валюта,', 'type' => 'перелік', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Назва товару.", 'type' => 'рядок', 'require' => true],
                'title_en' => ['title' => 'Англійська назва продукту (або підзаголовок)', 'type' => 'рядок', 'default' => null],
                'message' => ['title' => 'Повідомлення, яке відображається користувачеві, якщо існують поля введення (використовується для віртуальних продуктів).', 'type' => 'рядок', 'default' => null],
                'inputs' => ['title' => 'Додаткові поля введення (використовуються для віртуальних продуктів).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Додаткові поля виводу (використовуються для віртуальних продуктів).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Додаткова URL-адреса блогу або веб-сайту.', 'type' => 'рядок', 'default' => false],
                'status' => ['title' => 'стан продукту Відкрити / Закрити, за умовчанням відкрито.', 'type' => 'перелік', 'default' => 'відкритий', 'values' => ['відкритий', 'Закрити']],
                'category_id' => ['title' => 'ідентифікатор категорії.', 'type' => 'внутр', 'default' => null],
                'lead' => ['title' => 'Термін виконання в годинах..', 'type' => 'внутр', 'default' => null],
                'style' => ['title' => 'Стиль продукту (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Марка товару..', 'type' => 'рядок', 'default' => null],
                'warranty' => ['title' => 'опис гарантії..', 'type' => 'рядок', 'default' => null],
                'original' => ['title' => 'Цей товар оригінальний?', 'type' => 'логічний', 'default' => false],
                'return_warranty' => ['title' => 'Гарантія на повернення по днях.', 'type' => 'внутр', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'об\'єкт',
                    '_object' => 'Продукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Успішно оновлено стан продукту.', 'type' => 'логічний'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Додайте новий продукт зі сховища за кодом до магазину.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'рядок', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Автоматичне встановлення категорії', 'type' => 'логічний', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Товар додайте до цієї категорії за ідентифікатором категорії в магазині.', 'type' => 'внутр', 'default' => null],

                'price' => ['title' => 'Ціна товару.', 'type' => 'плавати', 'require' => true],
                'currency' => ['title' => 'валюта,', 'type' => 'перелік', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Кількість', 'type' => 'внутр', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'об\'єкт',
                    '_object' => 'Продукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Успішно оновлено стан продукту.', 'type' => 'логічний'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
