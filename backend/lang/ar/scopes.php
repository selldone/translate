<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'نطاق المسؤول Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'وصول مقيد للمستثمرين.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'قراءة تفاصيل ملف تعريف المستخدم.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'قراءة رقم الهاتف.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'قراءة وتحديث العناوين المحفوظة.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'تحديث ملف تعريف المستخدم.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'وضع أوامر.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'عرض تاريخ الطلب.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'الوصول إلى بطاقات الهدايا.',

    AuthServiceProvider::SCOPE_ARTICLES => 'تحرير المقالات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'إدارة الإخطارات.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'عرض قائمة المتاجر.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'تعديل تفاصيل المتجر.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'إضافة متجر جديد.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'حذف المتجر.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'إدارة تذاكر الدعم.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'إدارة بطاقات الهدايا.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'عرض بطاقات الهدايا.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'إدارة الأسئلة الشائعة.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'عرض الأسئلة الشائعة.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'إدارة الفئات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'عرض الفئات.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'إدارة المنتجات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'عرض المنتجات.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'عرض التقارير.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'إدارة الحسابات المالية.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'عرض الحسابات المالية.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'تحرير صفحات المتجر.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'عرض صفحات المتجر.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'إدارة المستودع.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'عرض المستودع.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'إدارة وصول الموظفين.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'عرض وصول الموظفين.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'عرض الطلبات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'إدارة الطلبات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'إدارة الملف الشخصي للأعمال.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'عرض الملف الشخصي للأعمال.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'إدارة رموز الخصم.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'عرض رموز الخصم.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'إدارة القسائم.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'عرض القسائم.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'إدارة العروض.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'عرض العروض.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'إدارة استرداد النقود.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'عرض استرداد النقود.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'إدارة اليانصيب.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'عرض اليانصيب.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'إدارة المجتمع.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'عرض المجتمع.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'إدارة العملاء.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'عرض العملاء.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'إدارة الاشتراكات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'عرض الاشتراكات.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'عرض أوامر البائعين.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'إدارة أوامر البائعين والمدفوعات.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'إدارة موفري الاتصال.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'عرض موفري الاتصال.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'تنفيذ أوامر الذكاء الاصطناعي.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'عرض معلومات الذكاء الاصطناعي.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'إدارة مدفوعات البائعين.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'عرض مدفوعات البائع.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'عرض الملف الشخصي للأعمال.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'إدارة الملف الشخصي للأعمال.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'عرض معلومات الوكالة.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'إدارة معلومات الوكالة.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'عرض ملاحظات المتجر.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'إدارة ملاحظات المتجر.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'عرض أصول المطور.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'إدارة أصول المطور.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'الوصول إلى المعلومات الشخصية وإعدادات الحساب.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'إدارة المحفظة والمعاملات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'عرض معاملات المحفظة.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'عرض الرموز المميزة والعملاء OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'إدارة الرموز المميزة والعملاء OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'إدارة إعدادات الأمان.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'إدارة الشركات التابعة.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'عرض الشركات التابعة.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'إدارة قوالب الطباعة.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'عرض قوالب الطباعة.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'إدارة المراجعات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'عرض التقييمات.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'عرض معلومات تحقيق الدخل.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'إدارة معلومات تحقيق الدخل.',



    'profile' => 'اقرأ معلومات الملف الشخصي بما في ذلك الاسم وعنوان البريد الإلكتروني والصورة وحالة المصادقة.',
    'phone' => 'الوصول إلى رقم الاتصال',
    'address' => 'قراءة وتحرير العنوان من دفتر العناوين المحفوظ',
    'buy' => 'اطلب وتسوق النظام.',
    'order-history' => 'قراءة تاريخ الطلب.',
    'my-gift-cards' => 'الوصول إلى بطاقات الهدايا الخاصة بي.',
    'articles' => 'تحرير المقالات.',
    'notifications' => 'إرسال واستقبال الإخطارات.',
    'read-shops' => 'قراءة قائمة المتجر.',
    'shop-edit' => 'الوصول إلى تحرير المتجر.',
    'shop-contacts' => 'استلام وتحرير نماذج الاتصال.',
    'shop-gift-cards' => 'إنشاء وتحرير وإدارة البطاقات.',
    'shop-faqs' => 'إنشاء وتحرير وإدارة الأسئلة المتداولة.',
    'shop-categories' => 'إنشاء الفئات وتحريرها وإدارتها.',
    'backoffice-write-products' => 'تفويض إنشاء المنتجات وتحريرها وإدارتها في المكتب الخلفي.',
    'backoffice-read-products' => 'السماح بالوصول لعرض قائمة المنتجات ومعلومات المنتج التفصيلية في المكتب الخلفي.',
    'shop-read-reports' => 'اقرأ المعلومات والتقارير.',
    'shop-socials' => 'تحرير متجر الشبكات الاجتماعية.',
    'shop-accounts' => 'تحرير وحذف الحسابات المالية المرتبطة بالمتجر.',
    'shop-menus' => 'تحرير قوائم المتجر.',
    'shop-pages' => 'تحرير صفحات المتجر.',
    'shop-warehouse' => 'تحرير مخزن المتجر',
    'shop-permissions' => 'عرض وتحرير الوصول إلى المتجر.',
    'shop-process-center' => 'إدارة الطلبات المستلمة.',
    'shop-profile' => 'إدارة ملفات تعريف المتجر.',
    'shop-discount-code' => 'إدارة رموز الخصم.',
    'shop-coupon' => 'إدارة القسائم.',
    'shop-offer' => 'إدارة العروض.',
    'shop-cashback' => 'إدارة استرداد النقود.',
    'shop-lottery' => 'إدارة اليانصيب.',
    'shop-community' => 'إدارة المجتمع.',
    'shop-customers' => 'إدارة العملاء.',
    'shop-ribbon' => 'إدارة اشتراكات الشريط.',
    'community-read' => 'اقرأ مجتمع Selldone.',
    'community-write' => 'اكتب المجتمع الذي تم بيعه.',
    'profile-write' => 'اكتب معلومات الملف الشخصي للمستخدم.',
    'vendor-read' => 'الوصول إلى إجراءات تنفيذ طلبات البائعين.',
    'vendor-write' => 'أوامر التغيير والدفع والمعلومات الأخرى للبائع.',
    'connect-providers' => 'إضافة وقراءة وكتابة موفري الاتصال.',
    'personal-identification' => 'قراءة المعلومات الشخصية، والوصولات، وتكوين الحساب.',
    'accounts' => 'الوصول إلى المحافظ وقراءة المعاملات وتاريخ إعادة الشحن.',
    'shop-add' => 'إضافة متجر جديد.',
    'shop-delete' => 'إزالة متجر.',
    'shop-ai-write' => 'يسمح للمستخدم بتنفيذ أوامر الذكاء الاصطناعي.',
    'shop-ai-read' => 'يسمح للمستخدم بالوصول إلى معلومات الذكاء الاصطناعي دون تنفيذ الأوامر.',
    'vendor-payment' => 'يسمح للمستخدم بإضافة سجلات الدفع للبائعين أو تحويل الأموال عبر حساباتهم المتصلة مثل Stripe Connect.',
    'company-read' => 'يسمح بقراءة معلومات الملف الشخصي للشركة.',
    'company-write' => 'يسمح بقراءة وكتابة معلومات الملف الشخصي للشركة.',
    'agency-read' => 'يسمح بقراءة معلومات الوكالة.',
    'agency-write' => 'يسمح بقراءة وكتابة معلومات الوكالة.',
    'note-read' => 'يسمح بقراءة ملاحظات المتجر.',
    'note-write' => 'يسمح بقراءة وكتابة ملاحظات المتجر.',
    'developer-read' => 'يسمح بقراءة أصول المطورين.',
    'developer-write' => 'يسمح بقراءة وكتابة أصول المطورين.',
    'tokens-read' => 'قراءة رموز Oauth والعملاء.',
    'tokens-write' => 'اكتب رموز وعملاء Oauth.',
];
