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
            'description' => 'Вземете продуктовия списък на магазина.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Показване само на налични продукти. Може да бъде вярно или невярно.', 'type' => 'булево', 'default' => false],
                'with_parent' => ['title' => 'Вземете йерархията на родителските категории. Може да бъде вярно или невярно.', 'type' => 'булево', 'default' => false],
                'offset' => ['title' => 'Отместване на списъка с продукти (за пагинация).', 'type' => 'вътр', 'default' => 0],
                'limit' => ['title' => 'Брой продукти в списъка (за страниране).', 'type' => 'вътр', 'default' => 20],
                'sort' => ['title' => 'Тип сортиране на списък', 'type' => 'изброяване', 'default' => null, 'values' => [null, 'свързани', 'най-посещаван', 'най-популярен', 'най-новите', 'бестселър', 'най-евтиният', 'най-скъпо', 'случаен', 'свързани', 'любими', 'случаен']],
                'product_id' => ['title' => 'Продукт ID, използван за връщане на свързани продукти (сортирай = свързани).', 'type' => 'вътр', 'default' => null],
                'set' => ['title' => 'Набор от данни за продукта. Може да бъде null или spec (null: по подразбиране, spec: оптимизиран за извличане на спецификации).', 'type' => 'изброяване', 'default' => null, 'values' => [null, 'спец']],
                'search' => ['title' => 'Текст за търсене', 'type' => 'низ', 'default' => null],
                'search_type' => ['title' => 'Тип търсене. Може да бъде нула или категория.', 'type' => 'изброяване', 'default' => null, 'values' => [null, 'категория']],
                'dir' => ['title' => 'Категория ID или име. Получава продукти в тази категория, когато е зададено.', 'type' => 'всякакви', 'default' => null],
                'products_only' => ['title' => 'Вземете само продукти (категориите не са включени).', 'type' => 'булево', 'default' => false],
                'categories_only' => ['title' => 'Вземете само категории (не са включени продукти).', 'type' => 'булево', 'default' => false],
                'need_full_variants' => ['title' => 'Получете пълна информация за варианта.', 'type' => 'булево', 'default' => false],
                'optimized' => ['title' => '(Само когато получавате продукти като администратор) Вземете списъка с продукти без цена, тарифа или статистика.', 'type' => 'булево', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'масив',
                    '_object' => 'Продукт',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'масив',
                    '_object' => 'Категория',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'обект',
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
            'description' => 'Вземете информация за продукта и статистика.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'обект',
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
                    '_object' => 'Продуктови данни',
                    'title' => 'данни за последните 30 дни',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Поръчки que info.',
                    'type' => 'Виртуален: брой (int)|Физически: [брой, състояние_на_доставка] (масив)'
                ],

                'new_comments_count' => [
                    'title' => 'Новите коментари се броят.',
                    'type' => 'вътр'
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
            'description' => 'Добавете нов продукт към магазина.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Задайте вид на продукта/услугата.', 'type' => 'изброяване', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Цена на продукта.', 'type' => 'плавам', 'require' => true],
                'commission' => ['title' => 'Добавете комисионна към цената.', 'type' => 'плавам', 'default' => 0],
                'discount' => ['title' => 'Отстъпка от цената на продукта по подразбиране.', 'type' => 'плавам', 'default' => 0],
                'dis_start' => ['title' => 'Начален час на отстъпката в часовата зона UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'Краен час на отстъпката в часовата зона UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'валута,', 'type' => 'изброяване', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Заглавие на продукта.", 'type' => 'низ', 'require' => true],
                'title_en' => ['title' => 'Английско заглавие на продукта (или подзаглавие)', 'type' => 'низ', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'низ', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'низ', 'default' => null],
                'gtin' => ['title' => "Глобален номер на търговски артикул на продукта.", 'type' => 'низ', 'default' => null],
                'gpc' => ['title' => 'Код на продуктова категория на Google.', 'type' => 'вътр', 'default' => null],
                'condition' => ['title' => "Текущото състояние на артикула във вашия магазин.", 'type' => 'изброяване', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Съобщението се показва на потребителя, ако съществуват полета за въвеждане (използвано за виртуални продукти).', 'type' => 'низ', 'default' => null],
                'inputs' => ['title' => 'Незадължителни полета за въвеждане (използвани за виртуални продукти).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Изходни полета по избор (използвани за виртуални продукти).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Незадължителен URL адрес на блог или уебсайт.', 'type' => 'низ', 'default' => false],
                'status' => ['title' => 'състояние на продукта Open / Close, По подразбиране е Open.', 'type' => 'изброяване', 'default' => 'Отворете', 'values' => ['Отворете', 'затвори']],
                'category_id' => ['title' => 'категория id.', 'type' => 'вътр', 'default' => null],
                'lead' => ['title' => 'Време за изпълнение в часове..', 'type' => 'вътр', 'default' => null],
                'style' => ['title' => 'Стил на продукта (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Марка на продукта..', 'type' => 'низ', 'default' => null],
                'warranty' => ['title' => 'описание на гаранцията..', 'type' => 'низ', 'default' => null],
                'original' => ['title' => 'Този продукт оригинален ли е?', 'type' => 'булево', 'default' => false],
                'return_warranty' => ['title' => 'Гаранция за връщане по дни.', 'type' => 'вътр', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'обект',
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
            'description' => 'Добавете нов продукт към магазина.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Задайте вид на продукта/услугата.', 'type' => 'изброяване', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Цена на продукта.', 'type' => 'плавам', 'require' => true],
                'commission' => ['title' => 'Добавете комисионна към цената.', 'type' => 'плавам', 'default' => 0],
                'discount' => ['title' => 'Отстъпка от цената на продукта по подразбиране.', 'type' => 'плавам', 'default' => 0],
                'dis_start' => ['title' => 'Начален час на отстъпката в часовата зона UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'Краен час на отстъпката в часовата зона UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'валута,', 'type' => 'изброяване', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Заглавие на продукта.", 'type' => 'низ', 'require' => true],
                'title_en' => ['title' => 'Английско заглавие на продукта (или подзаглавие)', 'type' => 'низ', 'default' => null],
                'message' => ['title' => 'Съобщението се показва на потребителя, ако съществуват полета за въвеждане (използвано за виртуални продукти).', 'type' => 'низ', 'default' => null],
                'inputs' => ['title' => 'Незадължителни полета за въвеждане (използвани за виртуални продукти).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Изходни полета по избор (използвани за виртуални продукти).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Незадължителен URL адрес на блог или уебсайт.', 'type' => 'низ', 'default' => false],
                'status' => ['title' => 'състояние на продукта Open / Close, По подразбиране е Open.', 'type' => 'изброяване', 'default' => 'Отворете', 'values' => ['Отворете', 'затвори']],
                'category_id' => ['title' => 'категория id.', 'type' => 'вътр', 'default' => null],
                'lead' => ['title' => 'Време за изпълнение в часове..', 'type' => 'вътр', 'default' => null],
                'style' => ['title' => 'Стил на продукта (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Марка на продукта..', 'type' => 'низ', 'default' => null],
                'warranty' => ['title' => 'описание на гаранцията..', 'type' => 'низ', 'default' => null],
                'original' => ['title' => 'Този продукт оригинален ли е?', 'type' => 'булево', 'default' => false],
                'return_warranty' => ['title' => 'Гаранция за връщане по дни.', 'type' => 'вътр', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'обект',
                    '_object' => 'Продукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Успешно актуализирано състояние на продукта.', 'type' => 'булево'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Добавяне на нов продукт от хранилище по sku към магазина.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'низ', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Автоматично задаване на категория', 'type' => 'булево', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Продуктът се добавя към тази категория по идентификатор на категория в магазина.', 'type' => 'вътр', 'default' => null],

                'price' => ['title' => 'Цена на продукта.', 'type' => 'плавам', 'require' => true],
                'currency' => ['title' => 'валута,', 'type' => 'изброяване', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Количество', 'type' => 'вътр', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'обект',
                    '_object' => 'Продукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Успешно актуализирано състояние на продукта.', 'type' => 'булево'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
