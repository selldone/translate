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
            'description' => 'Добијте листу производа продавнице.',
            'url' => 'схопс/{схоп_ид}/продуцтс/алл-админ',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Прикажи само доступне производе. Може бити истинито или лажно.', 'type' => 'боолеан', 'default' => false],
                'with_parent' => ['title' => 'Преузмите хијерархију надређених категорија. Може бити истинито или лажно.', 'type' => 'боолеан', 'default' => false],
                'offset' => ['title' => 'Помак листе производа (за пагинацију).', 'type' => 'инт', 'default' => 0],
                'limit' => ['title' => 'Број производа на листи (за пагинацију).', 'type' => 'инт', 'default' => 20],
                'sort' => ['title' => 'Тип сортирања листе', 'type' => 'енум', 'default' => null, 'values' => [null, 'повезане', 'најпосећенији', 'најпопуларније', 'најновији', 'бестселер', 'најјефтиније', 'најскупљи', 'насумично', 'повезане', 'омиљени', 'насумично']],
                'product_id' => ['title' => 'Производ КК0000КК који се користи за враћање сродних производа (сорт = повезани).', 'type' => 'инт', 'default' => null],
                'set' => ['title' => 'Скуп података о производу. Може бити нулл или спец (нулл: подразумевано, спец: оптимизовано за преузимање спецификација).', 'type' => 'енум', 'default' => null, 'values' => [null, 'спец']],
                'search' => ['title' => 'Претражите текст', 'type' => 'стринг', 'default' => null],
                'search_type' => ['title' => 'Тип претраге. Може бити нулл или категорија.', 'type' => 'енум', 'default' => null, 'values' => [null, 'категорија']],
                'dir' => ['title' => 'Категорија КК0000КК или назив. Добија производе у овој категорији када је подешено.', 'type' => 'било који', 'default' => null],
                'products_only' => ['title' => 'Набавите само производе (категорије нису укључене).', 'type' => 'боолеан', 'default' => false],
                'categories_only' => ['title' => 'Добијте само категорије (производи нису укључени).', 'type' => 'боолеан', 'default' => false],
                'need_full_variants' => ['title' => 'Добијте пуне информације о варијанти.', 'type' => 'боолеан', 'default' => false],
                'optimized' => ['title' => '(Само када добијате производе као администратор) Добијте листу производа без цене, цене или статистике.', 'type' => 'боолеан', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'низ',
                    '_object' => 'Производ',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'низ',
                    '_object' => 'Категорија',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'објекат',
                    '_object' => 'Категорија',
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
            'description' => 'Добијте информације о производима и статистику.',
            'url' => 'схопс/{схоп_ид}/продуцтс/{продуцт_ид}/админ',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'објекат',
                    '_object' => 'Производ',
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
                    '_type' => 'низ',
                    '_object' => 'Подаци о производу',
                    'title' => 'подаци за последњих 30 дана',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Поруџбине су информације.',
                    'type' => 'Виртуелно: број (инт)|Физички: [цоунт, деливери_стате] (низ)'
                ],

                'new_comments_count' => [
                    'title' => 'Нови коментари се рачунају.',
                    'type' => 'инт'
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
            'description' => 'Додајте нови производ у продавницу.',
            'url' => 'схопс/{схоп_ид}/продуцт/адд',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Подесите врсту производа/услуге.', 'type' => 'енум', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Цена производа.', 'type' => 'плутати', 'require' => true],
                'commission' => ['title' => 'Додајте провизију на цену.', 'type' => 'плутати', 'default' => 0],
                'discount' => ['title' => 'Попуст на подразумевану цену производа.', 'type' => 'плутати', 'default' => 0],
                'dis_start' => ['title' => 'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'датум', 'default' => null],
                'dis_end' => ['title' => 'Discount end time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'датум', 'default' => null],
                'currency' => ['title' => 'валута,', 'type' => 'енум', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Назив производа.", 'type' => 'стринг', 'require' => true],
                'title_en' => ['title' => 'Енглески наслов производа (или поднаслов)', 'type' => 'стринг', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'стринг', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'стринг', 'default' => null],
                'gtin' => ['title' => "Глобални број трговинске јединице производа.", 'type' => 'стринг', 'default' => null],
                'gpc' => ['title' => 'Код категорије Гоогле производа.', 'type' => 'инт', 'default' => null],
                'condition' => ['title' => "Тренутно стање артикла у вашој продавници.", 'type' => 'енум', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Порука се приказује кориснику ако постоје поља за унос (користе се за виртуелне производе).', 'type' => 'стринг', 'default' => null],
                'inputs' => ['title' => 'Опциона поља за унос (користе се за виртуелне производе).', 'type' => 'јсон', 'default' => null],
                'outputs' => ['title' => 'Опциона излазна поља (користе се за виртуелне производе).', 'type' => 'јсон', 'default' => false],
                'blog' => ['title' => 'Опциони блог или УРЛ веб локације.', 'type' => 'стринг', 'default' => false],
                'status' => ['title' => 'статус производа Отвори/Затвори, подразумевано је Отворено.', 'type' => 'енум', 'default' => 'Отвори', 'values' => ['Отвори', 'Затвори']],
                'category_id' => ['title' => 'ид категорије.', 'type' => 'инт', 'default' => null],
                'lead' => ['title' => 'Време испоруке у сатима..', 'type' => 'инт', 'default' => null],
                'style' => ['title' => 'Стил производа (Јсон).', 'type' => 'јсон', 'default' => null],
                'brand' => ['title' => 'Бренд производа..', 'type' => 'стринг', 'default' => null],
                'warranty' => ['title' => 'опис гаранције..', 'type' => 'стринг', 'default' => null],
                'original' => ['title' => 'Да ли је овај производ оригиналан?', 'type' => 'боолеан', 'default' => false],
                'return_warranty' => ['title' => 'Повратак гаранције по данима.', 'type' => 'инт', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'објекат',
                    '_object' => 'Производ',
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
            'description' => 'Додајте нови производ у продавницу.',
            'url' => 'схопс/{схоп_ид}/продуцтс/{продуцт_ид}/едит',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Подесите врсту производа/услуге.', 'type' => 'енум', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Цена производа.', 'type' => 'плутати', 'require' => true],
                'commission' => ['title' => 'Додајте провизију на цену.', 'type' => 'плутати', 'default' => 0],
                'discount' => ['title' => 'Попуст на подразумевану цену производа.', 'type' => 'плутати', 'default' => 0],
                'dis_start' => ['title' => 'Discount start time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'датум', 'default' => null],
                'dis_end' => ['title' => 'Discount end time in the UTC time zone (format: YYYY-MM-DD HH:mm:ss).', 'type' => 'датум', 'default' => null],
                'currency' => ['title' => 'валута,', 'type' => 'енум', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Назив производа.", 'type' => 'стринг', 'require' => true],
                'title_en' => ['title' => 'Енглески наслов производа (или поднаслов)', 'type' => 'стринг', 'default' => null],
                'message' => ['title' => 'Порука се приказује кориснику ако постоје поља за унос (користе се за виртуелне производе).', 'type' => 'стринг', 'default' => null],
                'inputs' => ['title' => 'Опциона поља за унос (користе се за виртуелне производе).', 'type' => 'јсон', 'default' => null],
                'outputs' => ['title' => 'Опциона излазна поља (користе се за виртуелне производе).', 'type' => 'јсон', 'default' => false],
                'blog' => ['title' => 'Опциони блог или УРЛ веб локације.', 'type' => 'стринг', 'default' => false],
                'status' => ['title' => 'статус производа Отвори/Затвори, подразумевано је Отворено.', 'type' => 'енум', 'default' => 'Отвори', 'values' => ['Отвори', 'Затвори']],
                'category_id' => ['title' => 'ид категорије.', 'type' => 'инт', 'default' => null],
                'lead' => ['title' => 'Време испоруке у сатима..', 'type' => 'инт', 'default' => null],
                'style' => ['title' => 'Стил производа (Јсон).', 'type' => 'јсон', 'default' => null],
                'brand' => ['title' => 'Бренд производа..', 'type' => 'стринг', 'default' => null],
                'warranty' => ['title' => 'опис гаранције..', 'type' => 'стринг', 'default' => null],
                'original' => ['title' => 'Да ли је овај производ оригиналан?', 'type' => 'боолеан', 'default' => false],
                'return_warranty' => ['title' => 'Повратак гаранције по данима.', 'type' => 'инт', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'објекат',
                    '_object' => 'Производ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Успешно ажурирано стање производа.', 'type' => 'боолеан'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Додајте нови производ из складишта по ску у продавницу.',
            'url' => 'схопс/{схоп_ид}/продуцт-репоситори/адд-ску',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'стринг', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Аутоматско подешавање категорије', 'type' => 'боолеан', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Додајте производ у ову категорију према ИД-у категорије у продавници.', 'type' => 'инт', 'default' => null],

                'price' => ['title' => 'Цена производа.', 'type' => 'плутати', 'require' => true],
                'currency' => ['title' => 'валута,', 'type' => 'енум', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Количина', 'type' => 'инт', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'објекат',
                    '_object' => 'Производ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Успешно ажурирано стање производа.', 'type' => 'боолеан'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
