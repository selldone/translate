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
            'description' => 'دکان کی مصنوعات کی فہرست حاصل کریں۔',
            'url' => 'دکانیں/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'صرف دستیاب مصنوعات دکھائیں۔ سچ یا غلط ہو سکتا ہے۔', 'type' => 'بولین', 'default' => false],
                'with_parent' => ['title' => 'پیرنٹ زمرہ کا درجہ بندی حاصل کریں۔ سچ یا غلط ہو سکتا ہے۔', 'type' => 'بولین', 'default' => false],
                'offset' => ['title' => 'مصنوعات کی فہرست کا آفسیٹ (صفحہ بندی کے لیے)۔', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'فہرست میں مصنوعات کی تعداد (صفحہ بندی کے لیے)۔', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'فہرست ترتیب کی قسم', 'type' => 'enum', 'default' => null, 'values' => [null, 'متعلقہ', 'سب سے زیادہ دیکھے گئے', 'سب سے زیادہ_مقبول', 'تازہ ترین', 'سب سے زیادہ فروخت ہونے والا', 'سب سے سستا', 'سب سے زیادہ_مہنگا', 'بے ترتیب', 'متعلقہ', 'پسندیدہ', 'بے ترتیب']],
                'product_id' => ['title' => 'پروڈکٹ ID متعلقہ مصنوعات کو واپس کرنے کے لیے استعمال کیا جاتا ہے (سانٹ = متعلقہ)۔', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'پروڈکٹ ڈیٹا سیٹ۔ null یا spec ہو سکتا ہے (null: default، spec: وضاحتیں بازیافت کرنے کے لیے بہتر)۔', 'type' => 'enum', 'default' => null, 'values' => [null, 'تفصیلات']],
                'search' => ['title' => 'متن تلاش کریں۔', 'type' => 'تار', 'default' => null],
                'search_type' => ['title' => 'تلاش کی قسم۔ کالعدم یا زمرہ جا سکتا ہے۔', 'type' => 'enum', 'default' => null, 'values' => [null, 'زمرہ']],
                'dir' => ['title' => 'زمرہ ID یا نام۔ سیٹ ہونے پر اس زمرے میں پروڈکٹس ملتا ہے۔', 'type' => 'کوئی بھی', 'default' => null],
                'products_only' => ['title' => 'صرف مصنوعات حاصل کریں (زمرے شامل نہیں)۔', 'type' => 'بولین', 'default' => false],
                'categories_only' => ['title' => 'صرف زمرے حاصل کریں (مصنوعات شامل نہیں)۔', 'type' => 'بولین', 'default' => false],
                'need_full_variants' => ['title' => 'مختلف قسم کی مکمل معلومات حاصل کریں۔', 'type' => 'بولین', 'default' => false],
                'optimized' => ['title' => '(صرف ایڈمن کے طور پر پروڈکٹس حاصل کرنے پر) قیمت، شرح یا اعدادوشمار کے بغیر مصنوعات کی فہرست حاصل کریں۔', 'type' => 'بولین', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'صف',
                    '_object' => 'پروڈکٹ',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'صف',
                    '_object' => 'زمرہ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'اعتراض',
                    '_object' => 'زمرہ',
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
            'description' => 'مصنوعات کی معلومات اور اعدادوشمار حاصل کریں۔',
            'url' => 'دکانیں/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'اعتراض',
                    '_object' => 'پروڈکٹ',
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
                    '_object' => 'پروڈکٹ ڈیٹا',
                    'title' => 'آخری 30 دنوں کا ڈیٹا',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'آرڈر کی معلومات.',
                    'type' => 'مجازی: شمار (انٹ)|فزیکل: [count, delivery_state] (صفی)'
                ],

                'new_comments_count' => [
                    'title' => 'نئے تبصرے شمار ہوتے ہیں۔',
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
            'description' => 'دکان میں نئی مصنوعات شامل کریں۔',
            'url' => 'دکانیں/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'پروڈکٹ/سروس کی قسم سیٹ کریں۔', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'مصنوعات کی قیمت۔', 'type' => 'تیرنا', 'require' => true],
                'commission' => ['title' => 'قیمت میں کمیشن شامل کریں۔', 'type' => 'تیرنا', 'default' => 0],
                'discount' => ['title' => 'پہلے سے طے شدہ مصنوعات کی قیمت میں رعایت۔', 'type' => 'تیرنا', 'default' => 0],
                'dis_start' => ['title' => 'UTC ٹائم زون میں ڈسکاؤنٹ شروع ہونے کا وقت (فارمیٹ: YYYY-MM-DD HH:mm:ss)۔', 'type' => 'تاریخ', 'default' => null],
                'dis_end' => ['title' => 'UTC ٹائم زون میں رعایتی اختتامی وقت (فارمیٹ: YYYY-MM-DD HH:mm:ss)۔', 'type' => 'تاریخ', 'default' => null],
                'currency' => ['title' => 'کرنسی،', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "پروڈکٹ کا عنوان۔", 'type' => 'تار', 'require' => true],
                'title_en' => ['title' => 'پروڈکٹ کا انگریزی عنوان (یا ذیلی عنوان)', 'type' => 'تار', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'تار', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'تار', 'default' => null],
                'gtin' => ['title' => "پروڈکٹ کا عالمی تجارتی آئٹم نمبر۔", 'type' => 'تار', 'default' => null],
                'gpc' => ['title' => 'گوگل پروڈکٹ کیٹیگری کوڈ۔', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "آپ کے اسٹور میں آئٹم کی موجودہ حالت۔", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'اگر ان پٹ فیلڈز موجود ہیں تو صارف کو پیغام دکھائیں (ورچوئل پروڈکٹس کے لیے استعمال کیا جاتا ہے)۔', 'type' => 'تار', 'default' => null],
                'inputs' => ['title' => 'اختیاری ان پٹ فیلڈز (ورچوئل پروڈکٹس کے لیے استعمال کیا جاتا ہے)۔', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'اختیاری آؤٹ پٹ فیلڈز (مجازی مصنوعات کے لیے استعمال کیا جاتا ہے)۔', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'اختیاری بلاگ یا ویب سائٹ یو آر ایل۔', 'type' => 'تار', 'default' => false],
                'status' => ['title' => 'مصنوعات کی حیثیت کھلی / بند، ڈیفالٹ کھلا ہے.', 'type' => 'enum', 'default' => 'کھولیں۔', 'values' => ['کھولیں۔', 'بند']],
                'category_id' => ['title' => 'زمرہ کی شناخت', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'لیڈ ٹائم گھنٹوں میں ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'مصنوعات کا انداز (Json)۔', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'مصنوعات کا برانڈ ..', 'type' => 'تار', 'default' => null],
                'warranty' => ['title' => 'وارنٹی کی تفصیل..', 'type' => 'تار', 'default' => null],
                'original' => ['title' => 'یہ مصنوعات اصل ہے؟', 'type' => 'بولین', 'default' => false],
                'return_warranty' => ['title' => 'دنوں کے حساب سے وارنٹی واپس کریں۔', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'اعتراض',
                    '_object' => 'پروڈکٹ',
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
            'description' => 'دکان میں نئی مصنوعات شامل کریں۔',
            'url' => 'دکانیں/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'پروڈکٹ/سروس کی قسم سیٹ کریں۔', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'مصنوعات کی قیمت۔', 'type' => 'تیرنا', 'require' => true],
                'commission' => ['title' => 'قیمت میں کمیشن شامل کریں۔', 'type' => 'تیرنا', 'default' => 0],
                'discount' => ['title' => 'پہلے سے طے شدہ مصنوعات کی قیمت میں رعایت۔', 'type' => 'تیرنا', 'default' => 0],
                'dis_start' => ['title' => 'UTC ٹائم زون میں ڈسکاؤنٹ شروع ہونے کا وقت (فارمیٹ: YYYY-MM-DD HH:mm:ss)۔', 'type' => 'تاریخ', 'default' => null],
                'dis_end' => ['title' => 'UTC ٹائم زون میں رعایتی اختتامی وقت (فارمیٹ: YYYY-MM-DD HH:mm:ss)۔', 'type' => 'تاریخ', 'default' => null],
                'currency' => ['title' => 'کرنسی،', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "پروڈکٹ کا عنوان۔", 'type' => 'تار', 'require' => true],
                'title_en' => ['title' => 'پروڈکٹ کا انگریزی عنوان (یا ذیلی عنوان)', 'type' => 'تار', 'default' => null],
                'message' => ['title' => 'اگر ان پٹ فیلڈز موجود ہیں تو صارف کو پیغام دکھائیں (ورچوئل پروڈکٹس کے لیے استعمال کیا جاتا ہے)۔', 'type' => 'تار', 'default' => null],
                'inputs' => ['title' => 'اختیاری ان پٹ فیلڈز (ورچوئل پروڈکٹس کے لیے استعمال کیا جاتا ہے)۔', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'اختیاری آؤٹ پٹ فیلڈز (مجازی مصنوعات کے لیے استعمال کیا جاتا ہے)۔', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'اختیاری بلاگ یا ویب سائٹ یو آر ایل۔', 'type' => 'تار', 'default' => false],
                'status' => ['title' => 'مصنوعات کی حیثیت کھلی / بند، ڈیفالٹ کھلا ہے.', 'type' => 'enum', 'default' => 'کھولیں۔', 'values' => ['کھولیں۔', 'بند']],
                'category_id' => ['title' => 'زمرہ کی شناخت', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'لیڈ ٹائم گھنٹوں میں ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'مصنوعات کا انداز (Json)۔', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'مصنوعات کا برانڈ ..', 'type' => 'تار', 'default' => null],
                'warranty' => ['title' => 'وارنٹی کی تفصیل..', 'type' => 'تار', 'default' => null],
                'original' => ['title' => 'یہ مصنوعات اصل ہے؟', 'type' => 'بولین', 'default' => false],
                'return_warranty' => ['title' => 'دنوں کے حساب سے وارنٹی واپس کریں۔', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'اعتراض',
                    '_object' => 'پروڈکٹ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'کامیابی کی تازہ کاری شدہ مصنوعات کی حالت۔', 'type' => 'بولین'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'ذخیرے سے sku بذریعہ دکان میں نئی ​​مصنوعات شامل کریں۔',
            'url' => 'دکانیں/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'تار', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'آٹو سیٹ کیٹیگری', 'type' => 'بولین', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'دکان میں زمرہ آئی ڈی کے لحاظ سے مصنوعات کو اس زمرے میں شامل کریں۔', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'مصنوعات کی قیمت۔', 'type' => 'تیرنا', 'require' => true],
                'currency' => ['title' => 'کرنسی،', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'مقدار', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'اعتراض',
                    '_object' => 'پروڈکٹ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'کامیابی کی تازہ کاری شدہ مصنوعات کی حالت۔', 'type' => 'بولین'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
