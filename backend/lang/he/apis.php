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
            'description' => 'קבלו את רשימת המוצרים של החנות.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'הצג רק מוצרים זמינים. יכול להיות נכון או שקר.', 'type' => 'בוליאני', 'default' => false],
                'with_parent' => ['title' => 'קבל את היררכיית קטגוריית האב. יכול להיות נכון או שקר.', 'type' => 'בוליאני', 'default' => false],
                'offset' => ['title' => 'קיזוז רשימת המוצרים (לעימוד).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'מספר המוצרים ברשימה (לעימוד).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'סוג מיון רשימה', 'type' => 'enum', 'default' => null, 'values' => [null, 'קשורים', 'הכי_מבוקרים', 'הכי_פופולרי', 'הכי חדש', 'רבי מכר', 'הזול ביותר', 'הכי_יקר', 'אקראי', 'קשורים', 'מועדף', 'אקראי']],
                'product_id' => ['title' => 'מוצר ID המשמש להחזרת מוצרים קשורים (מיון = קשור).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'סט נתוני מוצר. יכול להיות null או spec (null: ברירת מחדל, spec: מותאם לאחזור מפרטים).', 'type' => 'enum', 'default' => null, 'values' => [null, 'מפרט']],
                'search' => ['title' => 'חיפוש טקסט', 'type' => 'מחרוזת', 'default' => null],
                'search_type' => ['title' => 'סוג חיפוש. יכול להיות ריק או קטגוריה.', 'type' => 'enum', 'default' => null, 'values' => [null, 'קטגוריה']],
                'dir' => ['title' => 'קטגוריה ID או שם. מקבל מוצרים בקטגוריה זו כאשר מוגדר.', 'type' => 'כל', 'default' => null],
                'products_only' => ['title' => 'קבל רק מוצרים (קטגוריות לא כלולות).', 'type' => 'בוליאני', 'default' => false],
                'categories_only' => ['title' => 'קבל רק קטגוריות (מוצרים לא כלולים).', 'type' => 'בוליאני', 'default' => false],
                'need_full_variants' => ['title' => 'קבל מידע מלא על הגרסה.', 'type' => 'בוליאני', 'default' => false],
                'optimized' => ['title' => '(רק כאשר מקבלים מוצרים כמנהל) קבל את רשימת המוצרים ללא מחיר, תעריף או סטטיסטיקה.', 'type' => 'בוליאני', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'מערך',
                    '_object' => 'מוצר',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'מערך',
                    '_object' => 'קטגוריה',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'חפץ',
                    '_object' => 'קטגוריה',
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
            'description' => 'קבל מידע על מוצר וסטטיסטיקה.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'חפץ',
                    '_object' => 'מוצר',
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
                    '_type' => 'מערך',
                    '_object' => 'מוצר-נתונים',
                    'title' => 'נתוני 30 הימים האחרונים',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'הזמנות עם מידע.',
                    'type' => 'וירטואלי: ספירה (int)|פיזי: [ספירה, מצב_משלוח] (מערך)'
                ],

                'new_comments_count' => [
                    'title' => 'הערות חדשות נחשבות.',
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
            'description' => 'הוסף מוצר חדש לחנות.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'הגדר את סוג המוצר / השירות.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'מחיר המוצר.', 'type' => 'לצוף', 'require' => true],
                'commission' => ['title' => 'הוסף עמלה למחיר.', 'type' => 'לצוף', 'default' => 0],
                'discount' => ['title' => 'הנחה במחיר ברירת המחדל של המוצר.', 'type' => 'לצוף', 'default' => 0],
                'dis_start' => ['title' => 'זמן התחלה של הנחה באזור הזמן UTC (פורמט: YYYY-MM-DD HH:mm:ss).', 'type' => 'תאריך', 'default' => null],
                'dis_end' => ['title' => 'שעת סיום הנחה באזור הזמן UTC (פורמט: YYYY-MM-DD HH:mm:ss).', 'type' => 'תאריך', 'default' => null],
                'currency' => ['title' => 'מטבע,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "כותרת המוצר.", 'type' => 'מחרוזת', 'require' => true],
                'title_en' => ['title' => 'כותרת באנגלית של המוצר (או כותרת משנה)', 'type' => 'מחרוזת', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'מחרוזת', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'מחרוזת', 'default' => null],
                'gtin' => ['title' => "מספר פריט הסחר העולמי של המוצר.", 'type' => 'מחרוזת', 'default' => null],
                'gpc' => ['title' => 'קוד קטגוריית מוצרים של Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "המצב הנוכחי של הפריט בחנות שלך.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ההודעה תראה למשתמש אם קיימים שדות קלט (משמש למוצרים וירטואליים).', 'type' => 'מחרוזת', 'default' => null],
                'inputs' => ['title' => 'שדות קלט אופציונליים (משמשים למוצרים וירטואליים).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'שדות פלט אופציונליים (משמשים למוצרים וירטואליים).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'כתובת אתר אופציונלית של בלוג או אתר.', 'type' => 'מחרוזת', 'default' => false],
                'status' => ['title' => 'מצב המוצר פתח/סגור, ברירת המחדל היא פתוחה.', 'type' => 'enum', 'default' => 'פתוח', 'values' => ['פתוח', 'סגור']],
                'category_id' => ['title' => 'מזהה קטגוריה.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'זמן אספקה בשעות..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'סגנון המוצר (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'מותג המוצר..', 'type' => 'מחרוזת', 'default' => null],
                'warranty' => ['title' => 'תיאור אחריות..', 'type' => 'מחרוזת', 'default' => null],
                'original' => ['title' => 'המוצר הזה מקורי?', 'type' => 'בוליאני', 'default' => false],
                'return_warranty' => ['title' => 'אחריות להחזרה לפי ימים.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'חפץ',
                    '_object' => 'מוצר',
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
            'description' => 'הוסף מוצר חדש לחנות.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'הגדר את סוג המוצר / השירות.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'מחיר המוצר.', 'type' => 'לצוף', 'require' => true],
                'commission' => ['title' => 'הוסף עמלה למחיר.', 'type' => 'לצוף', 'default' => 0],
                'discount' => ['title' => 'הנחה במחיר ברירת המחדל של המוצר.', 'type' => 'לצוף', 'default' => 0],
                'dis_start' => ['title' => 'זמן התחלה של הנחה באזור הזמן UTC (פורמט: YYYY-MM-DD HH:mm:ss).', 'type' => 'תאריך', 'default' => null],
                'dis_end' => ['title' => 'שעת סיום הנחה באזור הזמן UTC (פורמט: YYYY-MM-DD HH:mm:ss).', 'type' => 'תאריך', 'default' => null],
                'currency' => ['title' => 'מטבע,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "כותרת המוצר.", 'type' => 'מחרוזת', 'require' => true],
                'title_en' => ['title' => 'כותרת באנגלית של המוצר (או כותרת משנה)', 'type' => 'מחרוזת', 'default' => null],
                'message' => ['title' => 'ההודעה תראה למשתמש אם קיימים שדות קלט (משמש למוצרים וירטואליים).', 'type' => 'מחרוזת', 'default' => null],
                'inputs' => ['title' => 'שדות קלט אופציונליים (משמשים למוצרים וירטואליים).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'שדות פלט אופציונליים (משמשים למוצרים וירטואליים).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'כתובת אתר אופציונלית של בלוג או אתר.', 'type' => 'מחרוזת', 'default' => false],
                'status' => ['title' => 'מצב המוצר פתח/סגור, ברירת המחדל היא פתוחה.', 'type' => 'enum', 'default' => 'פתוח', 'values' => ['פתוח', 'סגור']],
                'category_id' => ['title' => 'מזהה קטגוריה.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'זמן אספקה בשעות..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'סגנון המוצר (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'מותג המוצר..', 'type' => 'מחרוזת', 'default' => null],
                'warranty' => ['title' => 'תיאור אחריות..', 'type' => 'מחרוזת', 'default' => null],
                'original' => ['title' => 'המוצר הזה מקורי?', 'type' => 'בוליאני', 'default' => false],
                'return_warranty' => ['title' => 'אחריות להחזרה לפי ימים.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'חפץ',
                    '_object' => 'מוצר',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'מצב המוצר עודכן בהצלחה.', 'type' => 'בוליאני'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'הוסף מוצר חדש מהמאגר לפי מק"ט לחנות.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'מחרוזת', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'הגדרה אוטומטית של קטגוריה', 'type' => 'בוליאני', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'מוצר הוסף לקטגוריה זו לפי מזהה קטגוריה בחנות.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'מחיר המוצר.', 'type' => 'לצוף', 'require' => true],
                'currency' => ['title' => 'מטבע,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'כמות', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'חפץ',
                    '_object' => 'מוצר',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'מצב המוצר עודכן בהצלחה.', 'type' => 'בוליאני'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
