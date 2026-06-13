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
            'description' => 'د هټۍ د محصول لیست ترلاسه کړئ.',
            'url' => 'دوکانونه/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'یوازې موجود محصولات وښایاست. کیدای شي ریښتیا یا غلط وي.', 'type' => 'بولین', 'default' => false],
                'with_parent' => ['title' => 'د اصلي کټګورۍ درجه بندي ترلاسه کړئ. کیدای شي ریښتیا یا غلط وي.', 'type' => 'بولین', 'default' => false],
                'offset' => ['title' => 'د محصول لیست آفسیټ (د مخ کولو لپاره).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'په لیست کې د محصولاتو شمیر (د مخ کولو لپاره).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'د لیست ډول ډول', 'type' => 'enum', 'default' => null, 'values' => [null, 'اړوند', 'ډیری لیدل شوي', 'ډیری_مشهور', 'تازه', 'غوره پلورل', 'ارزانه', 'ډېر_ ګران', 'تصادفي', 'اړوند', 'غوره', 'تصادفي']],
                'product_id' => ['title' => 'محصول ID د اړونده محصولاتو بیرته راستنیدو لپاره کارول کیږي (ډول = اړوند).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'د محصول ډاټا ترتیب. کیدای شي ناپاک یا مشخص وي (نیل: ډیفالټ، سپیک: د ځانګړتیاوو د ترلاسه کولو لپاره غوره شوی).', 'type' => 'enum', 'default' => null, 'values' => [null, 'مشخصات']],
                'search' => ['title' => 'د متن لټون', 'type' => 'تار', 'default' => null],
                'search_type' => ['title' => 'د لټون ډول. کیدای شي ناپاک یا کټګوري وي.', 'type' => 'enum', 'default' => null, 'values' => [null, 'کټګورۍ']],
                'dir' => ['title' => 'کټګورۍ ID یا نوم. په دې کټګورۍ کې محصولات ترلاسه کوي کله چې تنظیم شي.', 'type' => 'کوم', 'default' => null],
                'products_only' => ['title' => 'یوازې محصولات ترلاسه کړئ (کټګورۍ شاملې ندي).', 'type' => 'بولین', 'default' => false],
                'categories_only' => ['title' => 'یوازې کټګورۍ ترلاسه کړئ (محصولات شامل ندي).', 'type' => 'بولین', 'default' => false],
                'need_full_variants' => ['title' => 'بشپړ ډول معلومات ترلاسه کړئ.', 'type' => 'بولین', 'default' => false],
                'optimized' => ['title' => '(یوازې کله چې محصولات د مدیر په توګه ترلاسه کړئ) پرته د نرخ ، نرخ یا احصایې پرته د محصول لیست ترلاسه کړئ.', 'type' => 'بولین', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'صف',
                    '_object' => 'محصول',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'صف',
                    '_object' => 'کټګوري',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'اعتراض',
                    '_object' => 'کټګوري',
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
            'description' => 'د محصول معلومات او احصایې ترلاسه کړئ.',
            'url' => 'دوکانونه/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'اعتراض',
                    '_object' => 'محصول',
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
                    '_type' => 'صف',
                    '_object' => 'د محصول ډاټا',
                    'title' => 'د تیرو 30 ورځو ډاټا',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'د معلوماتو امر کوي.',
                    'type' => 'مجازی: شمېرنه (int)|فزیکي: [شمیرنه، تحویلي_ریاست] (لری)'
                ],

                'new_comments_count' => [
                    'title' => 'نوي نظرونه شمیرل کیږي.',
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
            'description' => 'هټۍ ته نوی محصول اضافه کړئ.',
            'url' => 'دوکانونه/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'د محصول / خدمت ډول تنظیم کړئ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'د محصول قیمت.', 'type' => 'تیریدل', 'require' => true],
                'commission' => ['title' => 'په قیمت کې کمیسیون اضافه کړئ.', 'type' => 'تیریدل', 'default' => 0],
                'discount' => ['title' => 'د اصلي محصول قیمت تخفیف.', 'type' => 'تیریدل', 'default' => 0],
                'dis_start' => ['title' => 'د تخفیف د پیل وخت په UTC وخت زون کې (شکل: YYYY-MM-DD HH:mm:ss).', 'type' => 'نیټه', 'default' => null],
                'dis_end' => ['title' => 'د تخفیف پای وخت په UTC وخت زون کې (شکل: YYYY-MM-DD HH:mm:ss).', 'type' => 'نیټه', 'default' => null],
                'currency' => ['title' => 'اسعارو', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "د محصول سرلیک.", 'type' => 'تار', 'require' => true],
                'title_en' => ['title' => 'د محصول انګلیسي سرلیک (یا فرعي سرلیک)', 'type' => 'تار', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'تار', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'تار', 'default' => null],
                'gtin' => ['title' => "د محصول د نړیوال سوداګریز توکي شمیره.", 'type' => 'تار', 'default' => null],
                'gpc' => ['title' => 'د ګوګل محصول کټګورۍ کوډ.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "ستاسو په پلورنځي کې د توکو اوسنی حالت.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'کارونکي ته پیغام ښکاره کوي که چیرې د ننوتلو ساحې شتون ولري (د مجازی محصولاتو لپاره کارول کیږي).', 'type' => 'تار', 'default' => null],
                'inputs' => ['title' => 'اختیاري داخلې ساحې (د مجازی محصولاتو لپاره کارول کیږي).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'د محصول اختیاري ساحې (د مجازی محصولاتو لپاره کارول کیږي).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'اختیاري بلاګ یا ویب پاڼه یو آر ایل.', 'type' => 'تار', 'default' => false],
                'status' => ['title' => 'د محصول حالت خلاص / بند کړئ ، ډیفالټ خلاص دی.', 'type' => 'enum', 'default' => 'خلاص', 'values' => ['خلاص', 'تړل']],
                'category_id' => ['title' => 'د کټګورۍ id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'وخت په ساعتونو کې ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'د محصول سټایل (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'د محصول نښه ..', 'type' => 'تار', 'default' => null],
                'warranty' => ['title' => 'د تضمین توضیحات..', 'type' => 'تار', 'default' => null],
                'original' => ['title' => 'دا محصول اصلي دی؟', 'type' => 'بولین', 'default' => false],
                'return_warranty' => ['title' => 'د ورځو په واسطه بیرته تضمین.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'اعتراض',
                    '_object' => 'محصول',
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
            'description' => 'هټۍ ته نوی محصول اضافه کړئ.',
            'url' => 'دوکانونه/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'د محصول / خدمت ډول تنظیم کړئ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'د محصول قیمت.', 'type' => 'تیریدل', 'require' => true],
                'commission' => ['title' => 'په قیمت کې کمیسیون اضافه کړئ.', 'type' => 'تیریدل', 'default' => 0],
                'discount' => ['title' => 'د اصلي محصول قیمت تخفیف.', 'type' => 'تیریدل', 'default' => 0],
                'dis_start' => ['title' => 'د تخفیف د پیل وخت په UTC وخت زون کې (شکل: YYYY-MM-DD HH:mm:ss).', 'type' => 'نیټه', 'default' => null],
                'dis_end' => ['title' => 'د تخفیف پای وخت په UTC وخت زون کې (شکل: YYYY-MM-DD HH:mm:ss).', 'type' => 'نیټه', 'default' => null],
                'currency' => ['title' => 'اسعارو', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "د محصول سرلیک.", 'type' => 'تار', 'require' => true],
                'title_en' => ['title' => 'د محصول انګلیسي سرلیک (یا فرعي سرلیک)', 'type' => 'تار', 'default' => null],
                'message' => ['title' => 'کارونکي ته پیغام ښکاره کوي که چیرې د ننوتلو ساحې شتون ولري (د مجازی محصولاتو لپاره کارول کیږي).', 'type' => 'تار', 'default' => null],
                'inputs' => ['title' => 'اختیاري داخلې ساحې (د مجازی محصولاتو لپاره کارول کیږي).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'د محصول اختیاري ساحې (د مجازی محصولاتو لپاره کارول کیږي).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'اختیاري بلاګ یا ویب پاڼه یو آر ایل.', 'type' => 'تار', 'default' => false],
                'status' => ['title' => 'د محصول حالت خلاص / بند کړئ ، ډیفالټ خلاص دی.', 'type' => 'enum', 'default' => 'خلاص', 'values' => ['خلاص', 'تړل']],
                'category_id' => ['title' => 'د کټګورۍ id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'وخت په ساعتونو کې ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'د محصول سټایل (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'د محصول نښه ..', 'type' => 'تار', 'default' => null],
                'warranty' => ['title' => 'د تضمین توضیحات..', 'type' => 'تار', 'default' => null],
                'original' => ['title' => 'دا محصول اصلي دی؟', 'type' => 'بولین', 'default' => false],
                'return_warranty' => ['title' => 'د ورځو په واسطه بیرته تضمین.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'اعتراض',
                    '_object' => 'محصول',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'د بریالیتوب تازه محصول حالت.', 'type' => 'بولین'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'هټۍ ته د sku لخوا د ذخیره کولو څخه نوی محصول اضافه کړئ.',
            'url' => 'دوکانونه/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'تار', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'د اتوماتیک کټګورۍ ترتیب', 'type' => 'بولین', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'محصول په پلورنځي کې د کټګورۍ ID لخوا دې کټګورۍ ته اضافه کړئ.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'د محصول قیمت.', 'type' => 'تیریدل', 'require' => true],
                'currency' => ['title' => 'اسعارو', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'مقدار', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'اعتراض',
                    '_object' => 'محصول',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'د بریالیتوب تازه محصول حالت.', 'type' => 'بولین'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
