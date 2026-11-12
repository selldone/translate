<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone منتظم کا دائرہ کار۔',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'سرمایہ کاروں کی رسائی محدود۔',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'صارف کے پروفائل کی تفصیلات پڑھیں۔',
    AuthServiceProvider::SCOPE_USER_PHONE => 'فون نمبر پڑھیں۔',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'محفوظ کردہ پتے پڑھیں اور اپ ڈیٹ کریں۔',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'صارف پروفائل کو اپ ڈیٹ کریں۔',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'آرڈر دیں۔',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'آرڈر کی تاریخ دیکھیں۔',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'گفٹ کارڈز تک رسائی حاصل کریں۔',

    AuthServiceProvider::SCOPE_ARTICLES => 'مضامین میں ترمیم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'اطلاعات کا نظم کریں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'دکان کی فہرست دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'دکان کی تفصیلات میں ترمیم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'نئی دکان شامل کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'دکان کو حذف کریں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'سپورٹ ٹکٹس کا انتظام کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'گفٹ کارڈز کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'گفٹ کارڈز دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'اکثر پوچھے گئے سوالات کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQs دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'زمروں کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'زمرے دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'مصنوعات کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'مصنوعات دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'رپورٹس دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'مالی کھاتوں کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'مالی اکاؤنٹس دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'اسٹور کے صفحات میں ترمیم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'اسٹور کے صفحات دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'گودام کا انتظام کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'گودام دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'عملے کی رسائی کا انتظام کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'عملے تک رسائی دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'آرڈرز دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'آرڈرز کا انتظام کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'کاروباری پروفائل کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'کاروباری پروفائل دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ڈسکاؤنٹ کوڈز کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ڈسکاؤنٹ کوڈز دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'کوپن کا انتظام کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'کوپن دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'پیشکشوں کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'پیشکشیں دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'کیش بیکس کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'کیش بیکس دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'لاٹریوں کا انتظام کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'لاٹریز دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'کمیونٹی کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'کمیونٹی دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'گاہکوں کو منظم کریں.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'صارفین کو دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'سبسکرپشنز کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'سبسکرپشنز دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'وینڈر کے آرڈر دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'وینڈر آرڈرز اور ادائیگیوں کا نظم کریں۔',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'کنیکٹ فراہم کنندگان کا نظم کریں۔',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'کنیکٹ فراہم کنندگان کو دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI کمانڈز پر عمل کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI کی معلومات دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'وینڈر کی ادائیگیوں کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'وینڈر کی ادائیگی دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'کاروباری پروفائل دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'کاروباری پروفائل کا نظم کریں۔',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ایجنسی کی معلومات دیکھیں۔',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ایجنسی کی معلومات کا نظم کریں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'دکان کے نوٹ دیکھیں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'دکان کے نوٹوں کا نظم کریں۔',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'ڈویلپر کے اثاثے دیکھیں۔',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'ڈویلپر کے اثاثوں کا نظم کریں۔',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'ذاتی معلومات اور اکاؤنٹ کی ترتیبات تک رسائی حاصل کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'پرس اور لین دین کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'بٹوے کے لین دین دیکھیں۔',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth ٹوکن اور کلائنٹس دیکھیں۔',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth ٹوکنز اور کلائنٹس کا نظم کریں۔',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'سیکیورٹی کی ترتیبات کا نظم کریں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'ملحقہ اداروں کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ملحقہ اداروں کو دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'پرنٹ ٹیمپلیٹس کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'پرنٹ ٹیمپلیٹس دیکھیں۔',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'جائزوں کا نظم کریں۔',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'جائزے دیکھیں۔',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'منیٹائزیشن کی معلومات دیکھیں۔',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'منیٹائزیشن کی معلومات کا نظم کریں۔',



    'profile' => 'نام، ای میل پتہ، تصویر اور تصدیق کی حیثیت سمیت پروفائل کی معلومات پڑھیں۔',
    'phone' => 'رابطہ نمبر تک رسائی',
    'address' => 'محفوظ کردہ ایڈریس بک سے ایڈریس پڑھیں اور اس میں ترمیم کریں۔',
    'buy' => 'آرڈر اور شاپ آرڈر۔',
    'order-history' => 'آرڈر کی تاریخ پڑھیں۔',
    'my-gift-cards' => 'میرے گفٹ کارڈز تک رسائی۔',
    'articles' => 'مضامین میں ترمیم کریں۔',
    'notifications' => 'اطلاعات بھیجیں اور وصول کریں۔',
    'read-shops' => 'اسٹور لسٹ پڑھیں۔',
    'shop-edit' => 'اسٹور میں ترمیم کی رسائی۔',
    'shop-contacts' => 'رابطہ فارم وصول کریں اور ان میں ترمیم کریں۔',
    'shop-gift-cards' => 'کارڈز بنانا، ترمیم کرنا اور ان کا انتظام کرنا۔',
    'shop-faqs' => 'اکثر پوچھے گئے سوالات بنائیں، ان میں ترمیم کریں اور ان کا نظم کریں۔',
    'shop-categories' => 'زمرہ جات کی تخلیق، تدوین اور انتظام۔',
    'backoffice-write-products' => 'بیک آفس میں مصنوعات کی تخلیق، تدوین اور انتظام کی اجازت دیں۔',
    'backoffice-read-products' => 'بیک آفس میں مصنوعات کی فہرست اور مصنوعات کی تفصیلی معلومات دیکھنے کے لیے رسائی کی اجازت دیں۔',
    'shop-read-reports' => 'معلومات اور رپورٹس پڑھیں۔',
    'shop-socials' => 'اسٹور سوشل نیٹ ورکس میں ترمیم کریں۔',
    'shop-accounts' => 'اسٹور سے منسلک مالی اکاؤنٹس میں ترمیم اور حذف کریں۔',
    'shop-menus' => 'اسٹور مینو میں ترمیم کریں۔',
    'shop-pages' => 'اسٹور کے صفحات میں ترمیم کریں۔',
    'shop-warehouse' => 'اسٹور گودام میں ترمیم کریں۔',
    'shop-permissions' => 'اسٹور تک رسائی دیکھیں اور اس میں ترمیم کریں۔',
    'shop-process-center' => 'موصولہ آرڈرز کا نظم کریں۔',
    'shop-profile' => 'اسٹور پروفائلز کا نظم کریں۔',
    'shop-discount-code' => 'ڈسکاؤنٹ کوڈز کا نظم کریں۔',
    'shop-coupon' => 'کوپن کا انتظام کریں۔',
    'shop-offer' => 'پیشکشوں کا نظم کریں۔',
    'shop-cashback' => 'کیش بیکس کا نظم کریں۔',
    'shop-lottery' => 'لاٹریوں کا انتظام کریں۔',
    'shop-community' => 'کمیونٹی کا نظم کریں۔',
    'shop-customers' => 'گاہکوں کو منظم کریں.',
    'shop-ribbon' => 'ربن سبسکرپشنز کا نظم کریں۔',
    'community-read' => 'سیلڈون کمیونٹی پڑھیں۔',
    'community-write' => 'فروخت شدہ کمیونٹی لکھیں۔',
    'profile-write' => 'صارف کی پروفائل کی معلومات لکھیں۔',
    'vendor-read' => 'وینڈر کے احکامات کی تکمیل کے اعمال تک رسائی۔',
    'vendor-write' => 'وینڈر کے آرڈرز، ادائیگی اور دیگر معلومات کو تبدیل کریں۔',
    'connect-providers' => 'کنیکٹ فراہم کنندگان کو شامل کریں، پڑھیں اور لکھیں۔',
    'personal-identification' => 'ذاتی معلومات، رسائی، اور اکاؤنٹ کی تشکیل پڑھیں۔',
    'accounts' => 'بٹوے تک رسائی، لین دین اور ٹاپ اپ ہسٹری پڑھیں۔',
    'shop-add' => 'نئی دکان شامل کریں۔',
    'shop-delete' => 'ایک دکان ہٹا دیں۔',
    'shop-ai-write' => 'صارف کو AI کمانڈز پر عمل کرنے کی اجازت دیتا ہے۔',
    'shop-ai-read' => 'صارف کو حکموں پر عمل کیے بغیر AI معلومات تک رسائی کی اجازت دیتا ہے۔',
    'vendor-payment' => 'صارف کو وینڈرز کے لیے ادائیگیوں کے ریکارڈ شامل کرنے یا ان کے منسلک اکاؤنٹس جیسے اسٹرائپ کنیکٹ کے ذریعے رقوم کی منتقلی کی اجازت دیتا ہے۔',
    'company-read' => 'کاروباری پروفائل کی معلومات کو پڑھنے کی اجازت دیتا ہے۔',
    'company-write' => 'کاروباری پروفائل کی معلومات کو پڑھنے اور لکھنے کی اجازت دیتا ہے۔',
    'agency-read' => 'ایجنسی کی معلومات کو پڑھنے کی اجازت دیتا ہے۔',
    'agency-write' => 'ایجنسی کی معلومات کو پڑھنے اور لکھنے کی اجازت دیتا ہے۔',
    'note-read' => 'دکان کے نوٹ پڑھنے کی اجازت دیتا ہے۔',
    'note-write' => 'دکان کے نوٹ پڑھنے اور لکھنے کی اجازت دیتا ہے۔',
    'developer-read' => 'ڈویلپرز کے اثاثوں کو پڑھنے کی اجازت دیتا ہے۔',
    'developer-write' => 'ڈویلپرز کے اثاثوں کو پڑھنے اور لکھنے کی اجازت دیتا ہے۔',
    'tokens-read' => 'Oauth ٹوکن اور کلائنٹس پڑھیں۔',
    'tokens-write' => 'Oauth ٹوکن اور کلائنٹس لکھیں۔',
];
