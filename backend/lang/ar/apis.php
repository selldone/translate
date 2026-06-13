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
            'description' => 'احصل على قائمة منتجات المتجر.',
            'url' => 'محلات/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'عرض المنتجات المتوفرة فقط. يمكن أن تكون صحيحة أو خاطئة.', 'type' => 'منطقية', 'default' => false],
                'with_parent' => ['title' => 'احصل على التسلسل الهرمي للفئة الأصل. يمكن أن تكون صحيحة أو خاطئة.', 'type' => 'منطقية', 'default' => false],
                'offset' => ['title' => 'إزاحة قائمة المنتجات (لترقيم الصفحات).', 'type' => 'كثافة العمليات', 'default' => 0],
                'limit' => ['title' => 'عدد المنتجات في القائمة (لترقيم الصفحات).', 'type' => 'كثافة العمليات', 'default' => 20],
                'sort' => ['title' => 'نوع فرز القائمة', 'type' => 'التعداد', 'default' => null, 'values' => [null, 'ذات صلة', 'Most_visited', 'Most_popular', 'الأحدث', 'الأكثر مبيعا', 'أرخص', 'الأكثر_تكلفة', 'عشوائي', 'ذات صلة', 'المفضلة', 'عشوائي']],
                'product_id' => ['title' => 'المنتج ID يستخدم لإرجاع المنتجات ذات الصلة (الفرز = ذو صلة).', 'type' => 'كثافة العمليات', 'default' => null],
                'set' => ['title' => 'مجموعة بيانات المنتج. يمكن أن تكون فارغة أو المواصفات (خالية: افتراضية، المواصفات: محسنة لاسترداد المواصفات).', 'type' => 'التعداد', 'default' => null, 'values' => [null, 'المواصفات']],
                'search' => ['title' => 'بحث في النص', 'type' => 'سلسلة', 'default' => null],
                'search_type' => ['title' => 'نوع البحث. يمكن أن تكون فارغة أو الفئة.', 'type' => 'التعداد', 'default' => null, 'values' => [null, 'فئة']],
                'dir' => ['title' => 'الفئة ID أو الاسم. الحصول على المنتجات في هذه الفئة عند تعيينها.', 'type' => 'أي', 'default' => null],
                'products_only' => ['title' => 'احصل على المنتجات فقط (الفئات غير متضمنة).', 'type' => 'منطقية', 'default' => false],
                'categories_only' => ['title' => 'احصل على الفئات فقط (المنتجات غير مدرجة).', 'type' => 'منطقية', 'default' => false],
                'need_full_variants' => ['title' => 'الحصول على معلومات البديل الكامل.', 'type' => 'منطقية', 'default' => false],
                'optimized' => ['title' => '(فقط عند الحصول على المنتجات كمسؤول) احصل على قائمة المنتجات بدون سعر أو سعر أو إحصائيات.', 'type' => 'منطقية', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'صفيف',
                    '_object' => 'المنتج',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'صفيف',
                    '_object' => 'الفئة',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'كائن',
                    '_object' => 'الفئة',
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
            'description' => 'الحصول على معلومات المنتج والإحصائيات.',
            'url' => 'محلات/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'كائن',
                    '_object' => 'المنتج',
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
                    '_type' => 'صفيف',
                    '_object' => 'بيانات المنتج',
                    'title' => 'بيانات آخر 30 يومًا',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'أوامر كيو المعلومات.',
                    'type' => 'الظاهري: العد (كثافة العمليات)|المادية: [العدد، حالة التسليم] (صفيف)'
                ],

                'new_comments_count' => [
                    'title' => 'عدد التعليقات الجديدة.',
                    'type' => 'كثافة العمليات'
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
            'description' => 'إضافة منتج جديد إلى المتجر.',
            'url' => 'محلات/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'تحديد نوع المنتج/الخدمة.', 'type' => 'التعداد', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'سعر المنتج.', 'type' => 'تعويم', 'require' => true],
                'commission' => ['title' => 'أضف العمولة إلى السعر.', 'type' => 'تعويم', 'default' => 0],
                'discount' => ['title' => 'خصم سعر المنتج الافتراضي.', 'type' => 'تعويم', 'default' => 0],
                'dis_start' => ['title' => 'وقت بدء الخصم بالمنطقة الزمنية UTC (التنسيق: YYYY-MM-DD HH:mm:ss).', 'type' => 'تاريخ', 'default' => null],
                'dis_end' => ['title' => 'وقت انتهاء الخصم حسب المنطقة الزمنية UTC (التنسيق: YYYY-MM-DD HH:mm:ss).', 'type' => 'تاريخ', 'default' => null],
                'currency' => ['title' => 'العملة،', 'type' => 'التعداد', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "عنوان المنتج.", 'type' => 'سلسلة', 'require' => true],
                'title_en' => ['title' => 'العنوان باللغة الإنجليزية للمنتج (أو العنوان الفرعي)', 'type' => 'سلسلة', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'سلسلة', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'سلسلة', 'default' => null],
                'gtin' => ['title' => "رقم السلعة التجاري العالمي للمنتج.", 'type' => 'سلسلة', 'default' => null],
                'gpc' => ['title' => 'رمز فئة منتج جوجل.', 'type' => 'كثافة العمليات', 'default' => null],
                'condition' => ['title' => "حالة السلعة الحالية في متجرك.", 'type' => 'التعداد', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'تظهر الرسالة للمستخدم في حالة وجود حقول الإدخال (تُستخدم للمنتجات الافتراضية).', 'type' => 'سلسلة', 'default' => null],
                'inputs' => ['title' => 'حقول الإدخال الاختيارية (تستخدم للمنتجات الافتراضية).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'حقول الإخراج الاختيارية (المستخدمة للمنتجات الافتراضية).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'مدونة اختيارية أو عنوان URL لموقع الويب.', 'type' => 'سلسلة', 'default' => false],
                'status' => ['title' => 'حالة المنتج مفتوح/مغلق، الافتراضي هو مفتوح.', 'type' => 'التعداد', 'default' => 'مفتوح', 'values' => ['مفتوح', 'إغلاق']],
                'category_id' => ['title' => 'معرف الفئة', 'type' => 'كثافة العمليات', 'default' => null],
                'lead' => ['title' => 'المدة بالساعات..', 'type' => 'كثافة العمليات', 'default' => null],
                'style' => ['title' => 'نمط المنتج (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ماركة المنتج..', 'type' => 'سلسلة', 'default' => null],
                'warranty' => ['title' => 'وصف الضمان ..', 'type' => 'سلسلة', 'default' => null],
                'original' => ['title' => 'هذا المنتج أصلي؟', 'type' => 'منطقية', 'default' => false],
                'return_warranty' => ['title' => 'ضمان الإرجاع بالأيام.', 'type' => 'كثافة العمليات', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'كائن',
                    '_object' => 'المنتج',
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
            'description' => 'إضافة منتج جديد إلى المتجر.',
            'url' => 'محلات/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'تحديد نوع المنتج/الخدمة.', 'type' => 'التعداد', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'سعر المنتج.', 'type' => 'تعويم', 'require' => true],
                'commission' => ['title' => 'أضف العمولة إلى السعر.', 'type' => 'تعويم', 'default' => 0],
                'discount' => ['title' => 'خصم سعر المنتج الافتراضي.', 'type' => 'تعويم', 'default' => 0],
                'dis_start' => ['title' => 'وقت بدء الخصم بالمنطقة الزمنية UTC (التنسيق: YYYY-MM-DD HH:mm:ss).', 'type' => 'تاريخ', 'default' => null],
                'dis_end' => ['title' => 'وقت انتهاء الخصم حسب المنطقة الزمنية UTC (التنسيق: YYYY-MM-DD HH:mm:ss).', 'type' => 'تاريخ', 'default' => null],
                'currency' => ['title' => 'العملة،', 'type' => 'التعداد', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "عنوان المنتج.", 'type' => 'سلسلة', 'require' => true],
                'title_en' => ['title' => 'العنوان باللغة الإنجليزية للمنتج (أو العنوان الفرعي)', 'type' => 'سلسلة', 'default' => null],
                'message' => ['title' => 'تظهر الرسالة للمستخدم في حالة وجود حقول الإدخال (تُستخدم للمنتجات الافتراضية).', 'type' => 'سلسلة', 'default' => null],
                'inputs' => ['title' => 'حقول الإدخال الاختيارية (تستخدم للمنتجات الافتراضية).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'حقول الإخراج الاختيارية (المستخدمة للمنتجات الافتراضية).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'مدونة اختيارية أو عنوان URL لموقع الويب.', 'type' => 'سلسلة', 'default' => false],
                'status' => ['title' => 'حالة المنتج مفتوح/مغلق، الافتراضي هو مفتوح.', 'type' => 'التعداد', 'default' => 'مفتوح', 'values' => ['مفتوح', 'إغلاق']],
                'category_id' => ['title' => 'معرف الفئة', 'type' => 'كثافة العمليات', 'default' => null],
                'lead' => ['title' => 'المدة بالساعات..', 'type' => 'كثافة العمليات', 'default' => null],
                'style' => ['title' => 'نمط المنتج (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ماركة المنتج..', 'type' => 'سلسلة', 'default' => null],
                'warranty' => ['title' => 'وصف الضمان ..', 'type' => 'سلسلة', 'default' => null],
                'original' => ['title' => 'هذا المنتج أصلي؟', 'type' => 'منطقية', 'default' => false],
                'return_warranty' => ['title' => 'ضمان الإرجاع بالأيام.', 'type' => 'كثافة العمليات', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'كائن',
                    '_object' => 'المنتج',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'تم تحديث حالة المنتج بنجاح.', 'type' => 'منطقية'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'أضف منتجًا جديدًا من المستودع بواسطة sku إلى المتجر.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'سلسلة', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'فئة الضبط التلقائي', 'type' => 'منطقية', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'أضف المنتج إلى هذه الفئة حسب معرف الفئة في المتجر.', 'type' => 'كثافة العمليات', 'default' => null],

                'price' => ['title' => 'سعر المنتج.', 'type' => 'تعويم', 'require' => true],
                'currency' => ['title' => 'العملة،', 'type' => 'التعداد', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'الكمية', 'type' => 'كثافة العمليات', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'كائن',
                    '_object' => 'المنتج',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'تم تحديث حالة المنتج بنجاح.', 'type' => 'منطقية'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
