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
            'description' => 'Добијте го списокот со производи на продавницата.',
            'url' => 'продавници/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Прикажи само достапни производи. Може да биде точно или лажно.', 'type' => 'булови', 'default' => false],
                'with_parent' => ['title' => 'Добијте ја хиерархијата на родителската категорија. Може да биде точно или лажно.', 'type' => 'булови', 'default' => false],
                'offset' => ['title' => 'Поместување на списокот со производи (за пагинирање).', 'type' => 'инт', 'default' => 0],
                'limit' => ['title' => 'Број на производи во списокот (за пагинирање).', 'type' => 'инт', 'default' => 20],
                'sort' => ['title' => 'Тип на сортирање на листа', 'type' => 'enum', 'default' => null, 'values' => [null, 'поврзани', 'повеќето_посетени', 'повеќето_популарни', 'најново', 'бестселер', 'најевтин', 'најскапо', 'по случаен избор', 'поврзани', 'омилен', 'по случаен избор']],
                'product_id' => ['title' => 'Производ ID се користи за враќање на поврзани производи (сорт = поврзани).', 'type' => 'инт', 'default' => null],
                'set' => ['title' => 'Збир на податоци за производот. Може да биде null или spec (null: default, spec: оптимизиран за преземање спецификации).', 'type' => 'enum', 'default' => null, 'values' => [null, 'спец']],
                'search' => ['title' => 'Пребарај текст', 'type' => 'низа', 'default' => null],
                'search_type' => ['title' => 'Тип на пребарување. Може да биде нула или категорија.', 'type' => 'enum', 'default' => null, 'values' => [null, 'категорија']],
                'dir' => ['title' => 'Категорија ID или име. Добива производи во оваа категорија кога е поставен.', 'type' => 'било кој', 'default' => null],
                'products_only' => ['title' => 'Добијте само производи (не се вклучени категории).', 'type' => 'булови', 'default' => false],
                'categories_only' => ['title' => 'Добијте само категории (производи не се вклучени).', 'type' => 'булови', 'default' => false],
                'need_full_variants' => ['title' => 'Добијте целосни информации за варијантата.', 'type' => 'булови', 'default' => false],
                'optimized' => ['title' => '(Само кога добивате производи како администратор) Добијте го списокот со производи без цена, стапка или статистика.', 'type' => 'булови', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'низа',
                    '_object' => 'Производ',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'низа',
                    '_object' => 'Категорија',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'објект',
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
            'description' => 'Добијте информации за производот и статистика.',
            'url' => 'продавници/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'објект',
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
                    '_type' => 'низа',
                    '_object' => 'Производ-податоци',
                    'title' => 'податоци за последните 30 дена',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Нарачки по информации.',
                    'type' => 'Виртуелно: брои (int)|Физички: [броење, состојба на испорака] (низа)'
                ],

                'new_comments_count' => [
                    'title' => 'Новите коментари се бројат.',
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
            'description' => 'Додадете нов производ во продавницата.',
            'url' => 'продавници/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Поставете го типот на производот/услугата.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Цена на производот.', 'type' => 'плови', 'require' => true],
                'commission' => ['title' => 'Додадете провизија на цената.', 'type' => 'плови', 'default' => 0],
                'discount' => ['title' => 'Стандарден попуст на цената на производот.', 'type' => 'плови', 'default' => 0],
                'dis_start' => ['title' => 'Време на започнување со попуст во временската зона UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'датум', 'default' => null],
                'dis_end' => ['title' => 'Време на завршување на попустот во временската зона UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'датум', 'default' => null],
                'currency' => ['title' => 'Валута,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Наслов на производот.", 'type' => 'низа', 'require' => true],
                'title_en' => ['title' => 'Англиски наслов на производот (или поднаслов)', 'type' => 'низа', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'низа', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'низа', 'default' => null],
                'gtin' => ['title' => "Глобален број на трговска ставка на производот.", 'type' => 'низа', 'default' => null],
                'gpc' => ['title' => 'Код на категоријата производ на Google.', 'type' => 'инт', 'default' => null],
                'condition' => ['title' => "Тековната состојба на ставката во вашата продавница.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Прикажи порака до корисникот ако има полиња за внесување (се користи за виртуелни производи).', 'type' => 'низа', 'default' => null],
                'inputs' => ['title' => 'Изборни полиња за внесување (се користи за виртуелни производи).', 'type' => 'јсон', 'default' => null],
                'outputs' => ['title' => 'Изборни полиња за излез (се користи за виртуелни производи).', 'type' => 'јсон', 'default' => false],
                'blog' => ['title' => 'Изборен блог или URL на веб-страница.', 'type' => 'низа', 'default' => false],
                'status' => ['title' => 'статус на производот Отвори / Затвори, Стандардно е Отворено.', 'type' => 'enum', 'default' => 'Отвори', 'values' => ['Отвори', 'Затвори']],
                'category_id' => ['title' => 'ИД на категоријата.', 'type' => 'инт', 'default' => null],
                'lead' => ['title' => 'Времетраење во часови..', 'type' => 'инт', 'default' => null],
                'style' => ['title' => 'Стил на производ (Json).', 'type' => 'јсон', 'default' => null],
                'brand' => ['title' => 'Марка на производ..', 'type' => 'низа', 'default' => null],
                'warranty' => ['title' => 'опис на гаранцијата..', 'type' => 'низа', 'default' => null],
                'original' => ['title' => 'Овој производ е оригинален?', 'type' => 'булови', 'default' => false],
                'return_warranty' => ['title' => 'Гаранција за враќање по денови.', 'type' => 'инт', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'објект',
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
            'description' => 'Додадете нов производ во продавницата.',
            'url' => 'продавници/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Поставете го типот на производот/услугата.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Цена на производот.', 'type' => 'плови', 'require' => true],
                'commission' => ['title' => 'Додадете провизија на цената.', 'type' => 'плови', 'default' => 0],
                'discount' => ['title' => 'Стандарден попуст на цената на производот.', 'type' => 'плови', 'default' => 0],
                'dis_start' => ['title' => 'Време на започнување со попуст во временската зона UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'датум', 'default' => null],
                'dis_end' => ['title' => 'Време на завршување на попустот во временската зона UTC (формат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'датум', 'default' => null],
                'currency' => ['title' => 'Валута,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Наслов на производот.", 'type' => 'низа', 'require' => true],
                'title_en' => ['title' => 'Англиски наслов на производот (или поднаслов)', 'type' => 'низа', 'default' => null],
                'message' => ['title' => 'Прикажи порака до корисникот ако има полиња за внесување (се користи за виртуелни производи).', 'type' => 'низа', 'default' => null],
                'inputs' => ['title' => 'Изборни полиња за внесување (се користи за виртуелни производи).', 'type' => 'јсон', 'default' => null],
                'outputs' => ['title' => 'Изборни полиња за излез (се користи за виртуелни производи).', 'type' => 'јсон', 'default' => false],
                'blog' => ['title' => 'Изборен блог или URL на веб-страница.', 'type' => 'низа', 'default' => false],
                'status' => ['title' => 'статус на производот Отвори / Затвори, Стандардно е Отворено.', 'type' => 'enum', 'default' => 'Отвори', 'values' => ['Отвори', 'Затвори']],
                'category_id' => ['title' => 'ИД на категоријата.', 'type' => 'инт', 'default' => null],
                'lead' => ['title' => 'Времетраење во часови..', 'type' => 'инт', 'default' => null],
                'style' => ['title' => 'Стил на производ (Json).', 'type' => 'јсон', 'default' => null],
                'brand' => ['title' => 'Марка на производ..', 'type' => 'низа', 'default' => null],
                'warranty' => ['title' => 'опис на гаранцијата..', 'type' => 'низа', 'default' => null],
                'original' => ['title' => 'Овој производ е оригинален?', 'type' => 'булови', 'default' => false],
                'return_warranty' => ['title' => 'Гаранција за враќање по денови.', 'type' => 'инт', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'објект',
                    '_object' => 'Производ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Успешно ажурирана состојба на производот.', 'type' => 'булови'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Додајте нов производ од складиштето по sku во продавницата.',
            'url' => 'продавници/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'низа', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Категорија за автоматско поставување', 'type' => 'булови', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Додадете производ во оваа категорија по ID на категорија во продавницата.', 'type' => 'инт', 'default' => null],

                'price' => ['title' => 'Цена на производот.', 'type' => 'плови', 'require' => true],
                'currency' => ['title' => 'Валута,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Количина', 'type' => 'инт', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'објект',
                    '_object' => 'Производ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Успешно ажурирана состојба на производот.', 'type' => 'булови'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
