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
            'description' => 'Дүкен өнімдерінің тізімін алыңыз.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Тек қолжетімді өнімдерді көрсетіңіз. Шын немесе жалған болуы мүмкін.', 'type' => 'логикалық', 'default' => false],
                'with_parent' => ['title' => 'Негізгі санат иерархиясын алыңыз. Шын немесе жалған болуы мүмкін.', 'type' => 'логикалық', 'default' => false],
                'offset' => ['title' => 'Өнімдер тізімінің ығысуы (беттеу үшін).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Тізімдегі өнімдердің саны (беттеу үшін).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Тізім сұрыптау түрі', 'type' => 'enum', 'default' => null, 'values' => [null, 'байланысты', 'ең_барылған', 'ең_танымал', 'ең жаңа', 'бестселлер', 'ең арзан', 'ең_қымбат', 'кездейсоқ', 'байланысты', 'сүйікті', 'кездейсоқ']],
                'product_id' => ['title' => 'ID өнімі қатысты өнімдерді қайтару үшін пайдаланылады (сұрыптау = қатысты).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Өнім деректер жинағы. Нөл немесе ерекше болуы мүмкін (нөл: әдепкі, спецификация: спецификацияларды алу үшін оңтайландырылған).', 'type' => 'enum', 'default' => null, 'values' => [null, 'спец']],
                'search' => ['title' => 'Мәтінді іздеу', 'type' => 'жол', 'default' => null],
                'search_type' => ['title' => 'Іздеу түрі. Нөл немесе санат болуы мүмкін.', 'type' => 'enum', 'default' => null, 'values' => [null, 'санат']],
                'dir' => ['title' => 'ID санаты немесе атауы. Орнатылған кезде осы санаттағы өнімдерді алады.', 'type' => 'кез келген', 'default' => null],
                'products_only' => ['title' => 'Тек өнімдерді алыңыз (санаттар кірмейді).', 'type' => 'логикалық', 'default' => false],
                'categories_only' => ['title' => 'Тек санаттарды алыңыз (өнімдерді қамтымайды).', 'type' => 'логикалық', 'default' => false],
                'need_full_variants' => ['title' => 'Толық нұсқа туралы ақпаратты алыңыз.', 'type' => 'логикалық', 'default' => false],
                'optimized' => ['title' => '(Тек өнімдерді әкімші ретінде алған кезде) Бағасыз, бағасыз немесе статистикасыз өнім тізімін алыңыз.', 'type' => 'логикалық', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'массив',
                    '_object' => 'Өнім',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'массив',
                    '_object' => 'Санат',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'объект',
                    '_object' => 'Санат',
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
            'description' => 'Өнім туралы ақпарат пен статистиканы алыңыз.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Өнім',
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
                    '_object' => 'Өнім-деректер',
                    'title' => 'соңғы 30 күндік деректер',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Тапсырыс que ақпарат.',
                    'type' => 'Виртуалды: санау (int)|Физикалық: [санақ, жеткізілім_күйі] (массив)'
                ],

                'new_comments_count' => [
                    'title' => 'Жаңа пікірлер есептеледі.',
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
            'description' => 'Дүкенге жаңа өнімді қосыңыз.',
            'url' => 'дүкендер/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Өнім/қызмет түрін орнатыңыз.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Өнімнің бағасы.', 'type' => 'жүзу', 'require' => true],
                'commission' => ['title' => 'Бағаға комиссия қосыңыз.', 'type' => 'жүзу', 'default' => 0],
                'discount' => ['title' => 'Әдепкі өнім бағасы бойынша жеңілдік.', 'type' => 'жүзу', 'default' => 0],
                'dis_start' => ['title' => 'UTC уақыт белдеуіндегі жеңілдіктің басталу уақыты (пішімі: ЖЖЖЖ-АА-КК HH:mm:ss).', 'type' => 'күні', 'default' => null],
                'dis_end' => ['title' => 'UTC уақыт белдеуіндегі жеңілдік аяқталу уақыты (пішімі: ЖЖЖЖ-АА-КК HH:mm:ss).', 'type' => 'күні', 'default' => null],
                'currency' => ['title' => 'Валюта,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "өнімнің атауы.", 'type' => 'жол', 'require' => true],
                'title_en' => ['title' => 'Өнімнің ағылшынша атауы (немесе қосымша атауы)', 'type' => 'жол', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'жол', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'жол', 'default' => null],
                'gtin' => ['title' => "Өнімнің жаһандық сауда элементінің нөмірі.", 'type' => 'жол', 'default' => null],
                'gpc' => ['title' => 'Google өнім санатының коды.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Дүкеніңіздегі заттың ағымдағы жағдайы.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Енгізу өрістері бар болса (виртуалды өнімдер үшін пайдаланылады) пайдаланушыға хабар көрсетеді.', 'type' => 'жол', 'default' => null],
                'inputs' => ['title' => 'Қосымша енгізу өрістері (виртуалды өнімдер үшін пайдаланылады).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Қосымша шығыс өрістері (виртуалды өнімдер үшін пайдаланылады).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Қосымша блог немесе веб-сайттың URL мекенжайы.', 'type' => 'жол', 'default' => false],
                'status' => ['title' => 'өнім күйі Ашық / Жабу, Әдепкі - Ашық.', 'type' => 'enum', 'default' => 'Ашық', 'values' => ['Ашық', 'Жабу']],
                'category_id' => ['title' => 'санат идентификаторы.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Жеткізу уақыты сағатпен..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Өнім стилі (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Өнім бренді..', 'type' => 'жол', 'default' => null],
                'warranty' => ['title' => 'кепілдік сипаттамасы ..', 'type' => 'жол', 'default' => null],
                'original' => ['title' => 'Бұл өнім түпнұсқа ма?', 'type' => 'логикалық', 'default' => false],
                'return_warranty' => ['title' => 'Кепілдікті күндер бойынша қайтарыңыз.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Өнім',
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
            'description' => 'Дүкенге жаңа өнімді қосыңыз.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Өнім/қызмет түрін орнатыңыз.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Өнімнің бағасы.', 'type' => 'жүзу', 'require' => true],
                'commission' => ['title' => 'Бағаға комиссия қосыңыз.', 'type' => 'жүзу', 'default' => 0],
                'discount' => ['title' => 'Әдепкі өнім бағасы бойынша жеңілдік.', 'type' => 'жүзу', 'default' => 0],
                'dis_start' => ['title' => 'UTC уақыт белдеуіндегі жеңілдіктің басталу уақыты (пішімі: ЖЖЖЖ-АА-КК HH:mm:ss).', 'type' => 'күні', 'default' => null],
                'dis_end' => ['title' => 'UTC уақыт белдеуіндегі жеңілдік аяқталу уақыты (пішімі: ЖЖЖЖ-АА-КК HH:mm:ss).', 'type' => 'күні', 'default' => null],
                'currency' => ['title' => 'Валюта,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "өнімнің атауы.", 'type' => 'жол', 'require' => true],
                'title_en' => ['title' => 'Өнімнің ағылшынша атауы (немесе қосымша атауы)', 'type' => 'жол', 'default' => null],
                'message' => ['title' => 'Енгізу өрістері бар болса (виртуалды өнімдер үшін пайдаланылады) пайдаланушыға хабар көрсетеді.', 'type' => 'жол', 'default' => null],
                'inputs' => ['title' => 'Қосымша енгізу өрістері (виртуалды өнімдер үшін пайдаланылады).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Қосымша шығыс өрістері (виртуалды өнімдер үшін пайдаланылады).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Қосымша блог немесе веб-сайттың URL мекенжайы.', 'type' => 'жол', 'default' => false],
                'status' => ['title' => 'өнім күйі Ашық / Жабу, Әдепкі - Ашық.', 'type' => 'enum', 'default' => 'Ашық', 'values' => ['Ашық', 'Жабу']],
                'category_id' => ['title' => 'санат идентификаторы.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Жеткізу уақыты сағатпен..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Өнім стилі (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Өнім бренді..', 'type' => 'жол', 'default' => null],
                'warranty' => ['title' => 'кепілдік сипаттамасы ..', 'type' => 'жол', 'default' => null],
                'original' => ['title' => 'Бұл өнім түпнұсқа ма?', 'type' => 'логикалық', 'default' => false],
                'return_warranty' => ['title' => 'Кепілдікті күндер бойынша қайтарыңыз.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Өнім',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Сәтті жаңартылған өнім күйі.', 'type' => 'логикалық'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Дүкенге sku бойынша репозиторийден жаңа өнімді қосыңыз.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'жол', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Санатты автоматты орнату', 'type' => 'логикалық', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Өнімді дүкендегі санат идентификаторы бойынша осы санатқа қосыңыз.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Өнімнің бағасы.', 'type' => 'жүзу', 'require' => true],
                'currency' => ['title' => 'Валюта,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Саны', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Өнім',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Сәтті жаңартылған өнім күйі.', 'type' => 'логикалық'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
