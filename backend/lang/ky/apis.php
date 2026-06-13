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
            'description' => 'Дүкөндүн товарларынын тизмесин алыңыз.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Жеткиликтүү өнүмдөрдү гана көрсөтүү. Чын же жалган болушу мүмкүн.', 'type' => 'логикалык', 'default' => false],
                'with_parent' => ['title' => 'Аталык категория иерархиясын алыңыз. Чын же жалган болушу мүмкүн.', 'type' => 'логикалык', 'default' => false],
                'offset' => ['title' => 'Продукциянын тизмесинин офсети (беттөө үчүн).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Тизмедеги өнүмдөрдүн саны (баракчалоо үчүн).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Тизме сорттоо түрү', 'type' => 'энум', 'default' => null, 'values' => [null, 'байланыштуу', 'эң_барылган', 'эң_популярдуу', 'эң жаңы', 'бестселлер', 'эң арзан', 'эң_кымбат', 'кокустук', 'байланыштуу', 'сүйүктүү', 'кокустук']],
                'product_id' => ['title' => 'Продукт ID байланыштуу өнүмдөрдү кайтаруу үчүн колдонулат (сорт = байланыштуу).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Продукт маалымат топтому. Нөл же өзгөчө болушу мүмкүн (нөл: демейки, спецификация: спецификацияларды алуу үчүн оптималдаштырылган).', 'type' => 'энум', 'default' => null, 'values' => [null, 'спец']],
                'search' => ['title' => 'Текстти издөө', 'type' => 'сап', 'default' => null],
                'search_type' => ['title' => 'Издөө түрү. Нөл же категория болушу мүмкүн.', 'type' => 'энум', 'default' => null, 'values' => [null, 'категория']],
                'dir' => ['title' => 'Категория ID же аты. Коюлганда ушул категориядагы өнүмдөрдү алат.', 'type' => 'каалаган', 'default' => null],
                'products_only' => ['title' => 'Продукцияларды гана алыңыз (категориялар камтылган эмес).', 'type' => 'логикалык', 'default' => false],
                'categories_only' => ['title' => 'Категорияларды гана алыңыз (өнүмдөр камтылган эмес).', 'type' => 'логикалык', 'default' => false],
                'need_full_variants' => ['title' => 'Толук вариант маалымат алуу.', 'type' => 'логикалык', 'default' => false],
                'optimized' => ['title' => '(Администратор катары продуктыларды алууда гана) Баасы, тарифи же статистикасы жок товардын тизмесин алыңыз.', 'type' => 'логикалык', 'default' => false],

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
            'description' => 'Продукт маалыматын жана статистикасын алыңыз.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
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
                    '_object' => 'Продукт-Маалымат',
                    'title' => 'акыркы 30 күндүк маалымат',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Заказдар que маалымат.',
                    'type' => 'Виртуалдык: count (int)|Физикалык: [саноо, жеткирүү_стату] (массив)'
                ],

                'new_comments_count' => [
                    'title' => 'Жаңы комментарийлер эсептелет.',
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
            'description' => 'Дүкөнгө жаңы продукт кошуу.',
            'url' => 'дүкөндөр/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Продукциянын/кызматтын түрүн коюңуз.', 'type' => 'энум', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'буюмдун баасы.', 'type' => 'сүзүү', 'require' => true],
                'commission' => ['title' => 'Баага комиссия кошуу.', 'type' => 'сүзүү', 'default' => 0],
                'discount' => ['title' => 'Демейки продукт баасы арзандатуу.', 'type' => 'сүзүү', 'default' => 0],
                'dis_start' => ['title' => 'UTC убакыт алкагында арзандатуу башталуу убактысы (формат: ЖЖЖЖ-АА-КК HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'UTC убакыт алкагындагы арзандатуу аяктоо убактысы (формат: ЖЖЖЖ-АА-КК HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'Валюта,', 'type' => 'энум', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "продуктунун аталышы.", 'type' => 'сап', 'require' => true],
                'title_en' => ['title' => 'Буюмдун англисче аталышы (же кошумча аталышы)', 'type' => 'сап', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'сап', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'сап', 'default' => null],
                'gtin' => ['title' => "Продукттун глобалдык соода товарынын номери.", 'type' => 'сап', 'default' => null],
                'gpc' => ['title' => 'Google продукт категориясынын коду.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Дүкөнүңүздөгү буюмдун учурдагы абалы.", 'type' => 'энум', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Киргизүү талаалары бар болсо, билдирүү колдонуучуга көрсөтүлөт (виртуалдык өнүмдөр үчүн колдонулат).', 'type' => 'сап', 'default' => null],
                'inputs' => ['title' => 'Кошумча киргизүү талаалары (виртуалдык өнүмдөр үчүн колдонулат).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Кошумча чыгаруу талаалары (виртуалдык өнүмдөр үчүн колдонулат).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Кошумча блог же вебсайт url.', 'type' => 'сап', 'default' => false],
                'status' => ['title' => 'продукт абалы Ачык / Жабуу, Демейки Ачык.', 'type' => 'энум', 'default' => 'Open', 'values' => ['Open', 'Жабуу']],
                'category_id' => ['title' => 'категория идентификатору.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Саат менен жеткирүү убактысы..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Продукциянын стили (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Продукциянын маркасы..', 'type' => 'сап', 'default' => null],
                'warranty' => ['title' => 'кепилдик сүрөттөлүшү ..', 'type' => 'сап', 'default' => null],
                'original' => ['title' => 'Бул продукт оригиналдуубу?', 'type' => 'логикалык', 'default' => false],
                'return_warranty' => ['title' => 'Кепилдик күн менен кайтарылат.', 'type' => 'int', 'default' => 0],


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
            'description' => 'Дүкөнгө жаңы продукт кошуу.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Продукциянын/кызматтын түрүн коюңуз.', 'type' => 'энум', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'буюмдун баасы.', 'type' => 'сүзүү', 'require' => true],
                'commission' => ['title' => 'Баага комиссия кошуу.', 'type' => 'сүзүү', 'default' => 0],
                'discount' => ['title' => 'Демейки продукт баасы арзандатуу.', 'type' => 'сүзүү', 'default' => 0],
                'dis_start' => ['title' => 'UTC убакыт алкагында арзандатуу башталуу убактысы (формат: ЖЖЖЖ-АА-КК HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'UTC убакыт алкагындагы арзандатуу аяктоо убактысы (формат: ЖЖЖЖ-АА-КК HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'Валюта,', 'type' => 'энум', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "продуктунун аталышы.", 'type' => 'сап', 'require' => true],
                'title_en' => ['title' => 'Буюмдун англисче аталышы (же кошумча аталышы)', 'type' => 'сап', 'default' => null],
                'message' => ['title' => 'Киргизүү талаалары бар болсо, билдирүү колдонуучуга көрсөтүлөт (виртуалдык өнүмдөр үчүн колдонулат).', 'type' => 'сап', 'default' => null],
                'inputs' => ['title' => 'Кошумча киргизүү талаалары (виртуалдык өнүмдөр үчүн колдонулат).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Кошумча чыгаруу талаалары (виртуалдык өнүмдөр үчүн колдонулат).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Кошумча блог же вебсайт url.', 'type' => 'сап', 'default' => false],
                'status' => ['title' => 'продукт абалы Ачык / Жабуу, Демейки Ачык.', 'type' => 'энум', 'default' => 'Open', 'values' => ['Open', 'Жабуу']],
                'category_id' => ['title' => 'категория идентификатору.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Саат менен жеткирүү убактысы..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Продукциянын стили (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Продукциянын маркасы..', 'type' => 'сап', 'default' => null],
                'warranty' => ['title' => 'кепилдик сүрөттөлүшү ..', 'type' => 'сап', 'default' => null],
                'original' => ['title' => 'Бул продукт оригиналдуубу?', 'type' => 'логикалык', 'default' => false],
                'return_warranty' => ['title' => 'Кепилдик күн менен кайтарылат.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Продукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Ийгилик жаңыртылды.', 'type' => 'логикалык'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ску боюнча репозиторийден жаңы продуктуну дүкөнгө кошуңуз.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'сап', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Категорияны автоматтык түрдө коюу', 'type' => 'логикалык', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Продукт дүкөндөгү категория идентификатору боюнча бул категорияга кошуу.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'буюмдун баасы.', 'type' => 'сүзүү', 'require' => true],
                'currency' => ['title' => 'Валюта,', 'type' => 'энум', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Саны', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Продукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Ийгилик жаңыртылды.', 'type' => 'логикалык'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
