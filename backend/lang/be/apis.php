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
            'description' => 'Атрымаць спіс тавараў крамы.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Паказаць толькі даступныя прадукты. Можа быць сапраўдным або ілжывым.', 'type' => 'лагічны', 'default' => false],
                'with_parent' => ['title' => 'Атрымаць іерархію бацькоўскіх катэгорый. Можа быць сапраўдным або ілжывым.', 'type' => 'лагічны', 'default' => false],
                'offset' => ['title' => 'Зрушэнне спісу тавараў (для пагінацыі).', 'type' => 'міжнар', 'default' => 0],
                'limit' => ['title' => 'Колькасць тавараў у спісе (для пагінацыі).', 'type' => 'міжнар', 'default' => 20],
                'sort' => ['title' => 'Тып сартавання спісу', 'type' => 'пералік', 'default' => null, 'values' => [null, 'звязаныя', 'самы_наведвальны', 'самы_папулярны', 'самы новы', 'бэстсэлер', 'самы танны', 'самы_даражэйшы', 'выпадковы', 'звязаныя', 'любімы', 'выпадковы']],
                'product_id' => ['title' => 'Прадукт ID выкарыстоўваецца для вяртання звязаных прадуктаў (сартаваць = звязаны).', 'type' => 'міжнар', 'default' => null],
                'set' => ['title' => 'Набор даных аб прадукце. Можа быць нулявым або спецыфікацыйным (нулявы: па змаўчанні, спецыфікацыя: аптымізавана для атрымання спецыфікацый).', 'type' => 'пералік', 'default' => null, 'values' => [null, 'спец']],
                'search' => ['title' => 'Пошукавы тэкст', 'type' => 'радок', 'default' => null],
                'search_type' => ['title' => 'Тып пошуку. Можа быць нулявым або катэгорыяй.', 'type' => 'пералік', 'default' => null, 'values' => [null, 'катэгорыя']],
                'dir' => ['title' => 'Катэгорыя ID або імя. Калі ўстаноўлена, атрымлівае прадукты ў гэтай катэгорыі.', 'type' => 'любы', 'default' => null],
                'products_only' => ['title' => 'Атрымлівайце толькі прадукты (катэгорыі не ўключаны).', 'type' => 'лагічны', 'default' => false],
                'categories_only' => ['title' => 'Атрымаць толькі катэгорыі (прадукты не ўключаны).', 'type' => 'лагічны', 'default' => false],
                'need_full_variants' => ['title' => 'Атрымаць поўную інфармацыю аб варыянце.', 'type' => 'лагічны', 'default' => false],
                'optimized' => ['title' => '(Толькі пры атрыманні прадуктаў у якасці адміністратара) Атрымлівайце спіс прадуктаў без коштаў, тарыфаў і статыстыкі.', 'type' => 'лагічны', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'масіў',
                    '_object' => 'Прадукт',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'масіў',
                    '_object' => 'Катэгорыя',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'аб\'ект',
                    '_object' => 'Катэгорыя',
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
            'description' => 'Атрымлівайце інфармацыю аб прадукце і статыстыку.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'аб\'ект',
                    '_object' => 'Прадукт',
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
                    '_type' => 'масіў',
                    '_object' => 'Дадзеныя аб прадукце',
                    'title' => 'дадзеныя за апошнія 30 дзён',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Інфармацыя пра заказы.',
                    'type' => 'Віртуальны: count (int)|Фізічны: [колькасць, стан_дастаўкі] (масіў)'
                ],

                'new_comments_count' => [
                    'title' => 'Новыя каментарыі лічацца.',
                    'type' => 'міжнар'
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
            'description' => 'Дадаць новы тавар у краму.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Устанавіць тып прадукту / паслугі.', 'type' => 'пералік', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Кошт тавару.', 'type' => 'паплавок', 'require' => true],
                'commission' => ['title' => 'Дадайце камісію да цаны.', 'type' => 'паплавок', 'default' => 0],
                'discount' => ['title' => 'Зніжка на цану прадукту па змаўчанні.', 'type' => 'паплавок', 'default' => 0],
                'dis_start' => ['title' => 'Час пачатку скідкі ў часавым поясе UTC (фармат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'Час заканчэння скідкі ў часавым поясе UTC (фармат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'валюта,', 'type' => 'пералік', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Назва прадукту.", 'type' => 'радок', 'require' => true],
                'title_en' => ['title' => 'Ангельская назва прадукту (або падзагаловак)', 'type' => 'радок', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'радок', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'радок', 'default' => null],
                'gtin' => ['title' => "Глабальны нумар гандлёвай адзінкі прадукту.", 'type' => 'радок', 'default' => null],
                'gpc' => ['title' => 'Код катэгорыі прадукту Google.', 'type' => 'міжнар', 'default' => null],
                'condition' => ['title' => "Бягучы стан тавару ў вашай краме.", 'type' => 'пералік', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Паведамленне паказваецца карыстальніку, калі існуюць палі ўводу (выкарыстоўваецца для віртуальных прадуктаў).', 'type' => 'радок', 'default' => null],
                'inputs' => ['title' => 'Дадатковыя палі ўводу (выкарыстоўваюцца для віртуальных прадуктаў).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Неабавязковыя палі вываду (выкарыстоўваюцца для віртуальных прадуктаў).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Дадатковы блог або URL-адрас вэб-сайта.', 'type' => 'радок', 'default' => false],
                'status' => ['title' => 'стан прадукту Адкрыта / Зачынена, па змаўчанні - Адкрыта.', 'type' => 'пералік', 'default' => 'Адкрыты', 'values' => ['Адкрыты', 'Блізка']],
                'category_id' => ['title' => 'ідэнтыфікатар катэгорыі.', 'type' => 'міжнар', 'default' => null],
                'lead' => ['title' => 'Час выканання ў гадзінах..', 'type' => 'міжнар', 'default' => null],
                'style' => ['title' => 'Стыль прадукту (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Марка тавару. .', 'type' => 'радок', 'default' => null],
                'warranty' => ['title' => 'апісанне гарантыі. .', 'type' => 'радок', 'default' => null],
                'original' => ['title' => 'Гэты прадукт арыгінальны?', 'type' => 'лагічны', 'default' => false],
                'return_warranty' => ['title' => 'Гарантыя на вяртанне па днях.', 'type' => 'міжнар', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'аб\'ект',
                    '_object' => 'Прадукт',
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
            'description' => 'Дадаць новы тавар у краму.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Устанавіць тып прадукту / паслугі.', 'type' => 'пералік', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Кошт тавару.', 'type' => 'паплавок', 'require' => true],
                'commission' => ['title' => 'Дадайце камісію да цаны.', 'type' => 'паплавок', 'default' => 0],
                'discount' => ['title' => 'Зніжка на цану прадукту па змаўчанні.', 'type' => 'паплавок', 'default' => 0],
                'dis_start' => ['title' => 'Час пачатку скідкі ў часавым поясе UTC (фармат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'dis_end' => ['title' => 'Час заканчэння скідкі ў часавым поясе UTC (фармат: ГГГГ-ММ-ДД HH:mm:ss).', 'type' => 'дата', 'default' => null],
                'currency' => ['title' => 'валюта,', 'type' => 'пералік', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Назва прадукту.", 'type' => 'радок', 'require' => true],
                'title_en' => ['title' => 'Ангельская назва прадукту (або падзагаловак)', 'type' => 'радок', 'default' => null],
                'message' => ['title' => 'Паведамленне паказваецца карыстальніку, калі існуюць палі ўводу (выкарыстоўваецца для віртуальных прадуктаў).', 'type' => 'радок', 'default' => null],
                'inputs' => ['title' => 'Дадатковыя палі ўводу (выкарыстоўваюцца для віртуальных прадуктаў).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Неабавязковыя палі вываду (выкарыстоўваюцца для віртуальных прадуктаў).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Дадатковы блог або URL-адрас вэб-сайта.', 'type' => 'радок', 'default' => false],
                'status' => ['title' => 'стан прадукту Адкрыта / Зачынена, па змаўчанні - Адкрыта.', 'type' => 'пералік', 'default' => 'Адкрыты', 'values' => ['Адкрыты', 'Блізка']],
                'category_id' => ['title' => 'ідэнтыфікатар катэгорыі.', 'type' => 'міжнар', 'default' => null],
                'lead' => ['title' => 'Час выканання ў гадзінах..', 'type' => 'міжнар', 'default' => null],
                'style' => ['title' => 'Стыль прадукту (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Марка тавару. .', 'type' => 'радок', 'default' => null],
                'warranty' => ['title' => 'апісанне гарантыі. .', 'type' => 'радок', 'default' => null],
                'original' => ['title' => 'Гэты прадукт арыгінальны?', 'type' => 'лагічны', 'default' => false],
                'return_warranty' => ['title' => 'Гарантыя на вяртанне па днях.', 'type' => 'міжнар', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'аб\'ект',
                    '_object' => 'Прадукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Стан прадукту абноўлены.', 'type' => 'лагічны'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Дадайце ў краму новы прадукт са сховішча па SKU.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'радок', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Аўтаматычная ўстаноўка катэгорыі', 'type' => 'лагічны', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Дадайце прадукт у гэтую катэгорыю па ідэнтыфікатары катэгорыі ў краме.', 'type' => 'міжнар', 'default' => null],

                'price' => ['title' => 'Кошт тавару.', 'type' => 'паплавок', 'require' => true],
                'currency' => ['title' => 'валюта,', 'type' => 'пералік', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Колькасць', 'type' => 'міжнар', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'аб\'ект',
                    '_object' => 'Прадукт',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Стан прадукту абноўлены.', 'type' => 'лагічны'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
