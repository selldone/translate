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
            'description' => 'Кибетнең продукт исемлеген алыгыз.',
            'url' => 'кибетләр / {shop_id} / продуктлар / бөтен-администратор',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Мөмкин булган продуктларны гына күрсәтегез. Дөрес яки ялган булырга мөмкин.', 'type' => 'буле', 'default' => false],
                'with_parent' => ['title' => 'Ата-аналар категориясе иерархиясен алыгыз. Дөрес яки ялган булырга мөмкин.', 'type' => 'буле', 'default' => false],
                'offset' => ['title' => 'Продукция исемлеген офсет (пагинация өчен).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Исемлектәге продуктлар саны (пагинация өчен).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Сорт төре', 'type' => 'энум', 'default' => null, 'values' => [null, 'белән бәйле', 'иң күп', 'күпчелек', 'иң яңа', 'иң күп сату', 'иң арзан', 'иң кыйммәт', 'очраклы', 'белән бәйле', 'яраткан', 'очраклы']],
                'product_id' => ['title' => 'ID продукт бәйләнешле продуктларны кайтару өчен кулланыла (сорт = бәйләнешле).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Продукция мәгълүматлары җыелмасы. Нуль яки спек булырга мөмкин (null: default, spec: спецификацияләрне алу өчен оптимальләштерелгән).', 'type' => 'энум', 'default' => null, 'values' => [null, 'спек']],
                'search' => ['title' => 'Текстны эзләү', 'type' => 'кыл', 'default' => null],
                'search_type' => ['title' => 'Эзләү төре. Нуль яки категория булырга мөмкин.', 'type' => 'энум', 'default' => null, 'values' => [null, 'категориясе']],
                'dir' => ['title' => 'ID категориясе яки исем. Бу категориядә продуктлар алына.', 'type' => 'теләсә нинди', 'default' => null],
                'products_only' => ['title' => 'Продукцияне генә алыгыз (категорияләр кертелмәгән).', 'type' => 'буле', 'default' => false],
                'categories_only' => ['title' => 'Төркемнәрне генә алыгыз (продуктлар кертелмәгән).', 'type' => 'буле', 'default' => false],
                'need_full_variants' => ['title' => 'Тулы вариант турында мәгълүмат алыгыз.', 'type' => 'буле', 'default' => false],
                'optimized' => ['title' => '(Администратор буларак продуктлар алганда гына) Продукция исемлеген бәя, ставка, статистикасыз алыгыз.', 'type' => 'буле', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'массив',
                    '_object' => 'Продукция',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'массив',
                    '_object' => 'Төркем',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'объект',
                    '_object' => 'Төркем',
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
            'description' => 'Продукция турында мәгълүмат һәм статистика алыгыз.',
            'url' => 'кибетләр / {shop_id} / продуктлар / {продукт_ид} / админ',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Продукция',
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
                    '_object' => 'Продукция-мәгълүмат',
                    'title' => 'соңгы 30 көн мәгълүмат',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Заказлар.',
                    'type' => 'Виртуаль: санау (int)|Физик: [санау, тапшыру_ дәүләт] (массив)'
                ],

                'new_comments_count' => [
                    'title' => 'Яңа аңлатмалар санала.',
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
            'description' => 'Кибеткә яңа продукт өстәгез.',
            'url' => 'кибетләр / {shop_id} / продукт / өстәү',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Продукциянең / хезмәтнең төрен билгеләгез.', 'type' => 'энум', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Продукция бәясе.', 'type' => 'йөзү', 'require' => true],
                'commission' => ['title' => 'Бәягә комиссия өстәргә.', 'type' => 'йөзү', 'default' => 0],
                'discount' => ['title' => 'Килешенгән продукт бәясенә ташлама.', 'type' => 'йөзү', 'default' => 0],
                'dis_start' => ['title' => 'UTC вакыт зонасында ташлама башлау вакыты (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'UTC вакыт зонасында ташлама вакыты (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'Валюта,', 'type' => 'энум', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Продукциянең исеме.", 'type' => 'кыл', 'require' => true],
                'title_en' => ['title' => 'Продукциянең инглизчә исеме (яки суб исеме)', 'type' => 'кыл', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'кыл', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'кыл', 'default' => null],
                'gtin' => ['title' => "Продукциянең глобаль сәүдә пункты саны.", 'type' => 'кыл', 'default' => null],
                'gpc' => ['title' => 'Google продукт категориясе коды.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Сезнең кибеттә әйбернең хәзерге торышы.", 'type' => 'энум', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Кулланучына кертү кырлары булса (виртуаль продуктлар өчен кулланыла).', 'type' => 'кыл', 'default' => null],
                'inputs' => ['title' => 'Өстәмә кертү кырлары (виртуаль продуктлар өчен кулланыла).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Өстәмә чыгару кырлары (виртуаль продуктлар өчен кулланыла).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ихтимал блог яки сайт url.', 'type' => 'кыл', 'default' => false],
                'status' => ['title' => 'продукт статусы Ачык / Ябу, Килешү Ачык.', 'type' => 'энум', 'default' => 'Ачык', 'values' => ['Ачык', 'Ябу']],
                'category_id' => ['title' => 'категория идентификаторы.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Сәгатьләрдә әйдәп бару ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Продукт стиле (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Продукт маркасы ..', 'type' => 'кыл', 'default' => null],
                'warranty' => ['title' => 'гарантия тасвирламасы ..', 'type' => 'кыл', 'default' => null],
                'original' => ['title' => 'Бу продукт оригиналь?', 'type' => 'буле', 'default' => false],
                'return_warranty' => ['title' => 'Гарантияне берничә көнгә кайтару.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Продукция',
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
            'description' => 'Кибеткә яңа продукт өстәгез.',
            'url' => 'кибетләр / {shop_id} / продуктлар / {продукт_ид} / үзгәртү',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Продукциянең / хезмәтнең төрен билгеләгез.', 'type' => 'энум', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Продукция бәясе.', 'type' => 'йөзү', 'require' => true],
                'commission' => ['title' => 'Бәягә комиссия өстәргә.', 'type' => 'йөзү', 'default' => 0],
                'discount' => ['title' => 'Килешенгән продукт бәясенә ташлама.', 'type' => 'йөзү', 'default' => 0],
                'dis_start' => ['title' => 'UTC вакыт зонасында ташлама башлау вакыты (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'UTC вакыт зонасында ташлама вакыты (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'Валюта,', 'type' => 'энум', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Продукциянең исеме.", 'type' => 'кыл', 'require' => true],
                'title_en' => ['title' => 'Продукциянең инглизчә исеме (яки суб исеме)', 'type' => 'кыл', 'default' => null],
                'message' => ['title' => 'Кулланучына кертү кырлары булса (виртуаль продуктлар өчен кулланыла).', 'type' => 'кыл', 'default' => null],
                'inputs' => ['title' => 'Өстәмә кертү кырлары (виртуаль продуктлар өчен кулланыла).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Өстәмә чыгару кырлары (виртуаль продуктлар өчен кулланыла).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ихтимал блог яки сайт url.', 'type' => 'кыл', 'default' => false],
                'status' => ['title' => 'продукт статусы Ачык / Ябу, Килешү Ачык.', 'type' => 'энум', 'default' => 'Ачык', 'values' => ['Ачык', 'Ябу']],
                'category_id' => ['title' => 'категория идентификаторы.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Сәгатьләрдә әйдәп бару ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Продукт стиле (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Продукт маркасы ..', 'type' => 'кыл', 'default' => null],
                'warranty' => ['title' => 'гарантия тасвирламасы ..', 'type' => 'кыл', 'default' => null],
                'original' => ['title' => 'Бу продукт оригиналь?', 'type' => 'буле', 'default' => false],
                'return_warranty' => ['title' => 'Гарантияне берничә көнгә кайтару.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Продукция',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Уңыш яңартылган продукт торышы.', 'type' => 'буле'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ску белән кибеткә яңа продукт өстәгез.',
            'url' => 'кибетләр / {shop_id} / продукт-репозитория / өстәмә-ску',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'кыл', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Автомобиль категориясе', 'type' => 'буле', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Продукция бу категориягә кибеттә id категориясе буенча өстәлә.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Продукция бәясе.', 'type' => 'йөзү', 'require' => true],
                'currency' => ['title' => 'Валюта,', 'type' => 'энум', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Сан', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Продукция',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Уңыш яңартылган продукт торышы.', 'type' => 'буле'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
