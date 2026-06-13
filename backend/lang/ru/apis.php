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
            'description' => 'Получите список товаров магазина.',
            'url' => 'магазины/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Показать только доступные товары. Может быть правдой или ложью.', 'type' => 'логическое значение', 'default' => false],
                'with_parent' => ['title' => 'Получите иерархию родительских категорий. Может быть правдой или ложью.', 'type' => 'логическое значение', 'default' => false],
                'offset' => ['title' => 'Смещение списка товаров (для нумерации страниц).', 'type' => 'интервал', 'default' => 0],
                'limit' => ['title' => 'Количество товаров в списке (для нумерации страниц).', 'type' => 'интервал', 'default' => 20],
                'sort' => ['title' => 'Тип сортировки списка', 'type' => 'перечисление', 'default' => null, 'values' => [null, 'связанный', 'самые_посещаемые', 'самый_популярный', 'новейший', 'бестселлер', 'самый дешевый', 'самый_дорогой', 'случайный', 'связанный', 'любимый', 'случайный']],
                'product_id' => ['title' => 'Продукт ID используется для возврата связанных продуктов (сортировка = связанные).', 'type' => 'интервал', 'default' => null],
                'set' => ['title' => 'Набор данных о продукте. Может иметь значение null или спецификацию (null: по умолчанию, spec: оптимизировано для получения спецификаций).', 'type' => 'перечисление', 'default' => null, 'values' => [null, 'спецификация']],
                'search' => ['title' => 'Поиск текста', 'type' => 'строка', 'default' => null],
                'search_type' => ['title' => 'Тип поиска. Может иметь значение null или категорию.', 'type' => 'перечисление', 'default' => null, 'values' => [null, 'категория']],
                'dir' => ['title' => 'Категория ID или имя. Получает продукты в этой категории, если установлено.', 'type' => 'любой', 'default' => null],
                'products_only' => ['title' => 'Получите только товары (категории не включены).', 'type' => 'логическое значение', 'default' => false],
                'categories_only' => ['title' => 'Получить только категории (продукты не включены).', 'type' => 'логическое значение', 'default' => false],
                'need_full_variants' => ['title' => 'Получите полную информацию о вариантах.', 'type' => 'логическое значение', 'default' => false],
                'optimized' => ['title' => '(Только при получении продуктов от имени администратора) Получите список продуктов без цены, тарифа или статистики.', 'type' => 'логическое значение', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'массив',
                    '_object' => 'Продукт',
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
            'description' => 'Получите информацию о продукте и статистику.',
            'url' => 'магазины/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'объект',
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
                    '_type' => 'массив',
                    '_object' => 'Данные о продукте',
                    'title' => 'данные за последние 30 дней',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Информация о заказах.',
                    'type' => 'Виртуальный: счетчик (int)|Физический: [count, Delivery_state] (массив)'
                ],

                'new_comments_count' => [
                    'title' => 'Новые комментарии учитываются.',
                    'type' => 'интервал'
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
            'description' => 'Добавьте новый товар в магазин.',
            'url' => 'магазины/{shop_id}/продукт/добавить',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Установите тип продукта/услуги.', 'type' => 'перечисление', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Цена продукта.', 'type' => 'плавать', 'require' => true],
                'commission' => ['title' => 'Добавьте комиссию к цене.', 'type' => 'плавать', 'default' => 0],
                'discount' => ['title' => 'Скидка на цену продукта по умолчанию.', 'type' => 'плавать', 'default' => 0],
                'dis_start' => ['title' => 'Время начала скидки в часовом поясе UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'Время окончания скидки в часовом поясе UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'Валюта,', 'type' => 'перечисление', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Название продукта.", 'type' => 'строка', 'require' => true],
                'title_en' => ['title' => 'Английское название продукта (или подзаголовок)', 'type' => 'строка', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'строка', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'строка', 'default' => null],
                'gtin' => ['title' => "Глобальный номер торговой единицы продукта.", 'type' => 'строка', 'default' => null],
                'gpc' => ['title' => 'Код категории продукта Google.', 'type' => 'интервал', 'default' => null],
                'condition' => ['title' => "Текущее состояние товара в вашем магазине.", 'type' => 'перечисление', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Сообщение отображается пользователю, если существуют поля ввода (используется для виртуальных продуктов).', 'type' => 'строка', 'default' => null],
                'inputs' => ['title' => 'Необязательные поля ввода (используются для виртуальных продуктов).', 'type' => 'JSON', 'default' => null],
                'outputs' => ['title' => 'Дополнительные поля вывода (используются для виртуальных продуктов).', 'type' => 'JSON', 'default' => false],
                'blog' => ['title' => 'Необязательный URL-адрес блога или веб-сайта.', 'type' => 'строка', 'default' => false],
                'status' => ['title' => 'Статус продукта Открыт/Закрыт, по умолчанию – Открыт.', 'type' => 'перечисление', 'default' => 'Открыть', 'values' => ['Открыть', 'Закрыть']],
                'category_id' => ['title' => 'идентификатор категории.', 'type' => 'интервал', 'default' => null],
                'lead' => ['title' => 'Срок выполнения в часах..', 'type' => 'интервал', 'default' => null],
                'style' => ['title' => 'Стиль продукта (Json).', 'type' => 'JSON', 'default' => null],
                'brand' => ['title' => 'Марка товара..', 'type' => 'строка', 'default' => null],
                'warranty' => ['title' => 'описание гарантии..', 'type' => 'строка', 'default' => null],
                'original' => ['title' => 'Этот товар оригинальный?', 'type' => 'логическое значение', 'default' => false],
                'return_warranty' => ['title' => 'Гарантия возврата по дням.', 'type' => 'интервал', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
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
            'description' => 'Добавьте новый товар в магазин.',
            'url' => 'магазины/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Установите тип продукта/услуги.', 'type' => 'перечисление', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Цена продукта.', 'type' => 'плавать', 'require' => true],
                'commission' => ['title' => 'Добавьте комиссию к цене.', 'type' => 'плавать', 'default' => 0],
                'discount' => ['title' => 'Скидка на цену продукта по умолчанию.', 'type' => 'плавать', 'default' => 0],
                'dis_start' => ['title' => 'Время начала скидки в часовом поясе UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'Время окончания скидки в часовом поясе UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'Валюта,', 'type' => 'перечисление', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Название продукта.", 'type' => 'строка', 'require' => true],
                'title_en' => ['title' => 'Английское название продукта (или подзаголовок)', 'type' => 'строка', 'default' => null],
                'message' => ['title' => 'Сообщение отображается пользователю, если существуют поля ввода (используется для виртуальных продуктов).', 'type' => 'строка', 'default' => null],
                'inputs' => ['title' => 'Необязательные поля ввода (используются для виртуальных продуктов).', 'type' => 'JSON', 'default' => null],
                'outputs' => ['title' => 'Дополнительные поля вывода (используются для виртуальных продуктов).', 'type' => 'JSON', 'default' => false],
                'blog' => ['title' => 'Необязательный URL-адрес блога или веб-сайта.', 'type' => 'строка', 'default' => false],
                'status' => ['title' => 'Статус продукта Открыт/Закрыт, по умолчанию – Открыт.', 'type' => 'перечисление', 'default' => 'Открыть', 'values' => ['Открыть', 'Закрыть']],
                'category_id' => ['title' => 'идентификатор категории.', 'type' => 'интервал', 'default' => null],
                'lead' => ['title' => 'Срок выполнения в часах..', 'type' => 'интервал', 'default' => null],
                'style' => ['title' => 'Стиль продукта (Json).', 'type' => 'JSON', 'default' => null],
                'brand' => ['title' => 'Марка товара..', 'type' => 'строка', 'default' => null],
                'warranty' => ['title' => 'описание гарантии..', 'type' => 'строка', 'default' => null],
                'original' => ['title' => 'Этот товар оригинальный?', 'type' => 'логическое значение', 'default' => false],
                'return_warranty' => ['title' => 'Гарантия возврата по дням.', 'type' => 'интервал', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Продукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Состояние продукта обновлено.', 'type' => 'логическое значение'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Добавьте в магазин новый товар из репозитория по артикулу.',
            'url' => 'магазины/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'строка', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Автоматически установить категорию', 'type' => 'логическое значение', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Товар добавляется в эту категорию по идентификатору категории в магазине.', 'type' => 'интервал', 'default' => null],

                'price' => ['title' => 'Цена продукта.', 'type' => 'плавать', 'require' => true],
                'currency' => ['title' => 'Валюта,', 'type' => 'перечисление', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Количество', 'type' => 'интервал', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Продукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Состояние продукта обновлено.', 'type' => 'логическое значение'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
