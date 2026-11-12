<?php

use App\Providers\AuthServiceProvider;

return [

    /*
       |--------------------------------------------------------------------------
       | Scopes
       |--------------------------------------------------------------------------
       |
       */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'دسترسی مدیر سلدان.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'دسترسی محدود سرمایه‌گذار.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'خواندن جزئیات پروفایل کاربر.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'خواندن شماره تلفن.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'خواندن و به‌روزرسانی آدرس‌های ذخیره شده.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'به‌روزرسانی پروفایل کاربر.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ثبت سفارش.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'مشاهده تاریخچه سفارش‌ها.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'دسترسی به کارت‌های هدیه.',

    AuthServiceProvider::SCOPE_ARTICLES => 'ویرایش مقالات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'مدیریت اعلان‌ها.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'مشاهده لیست فروشگاه‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ویرایش جزئیات فروشگاه.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'افزودن فروشگاه جدید.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'حذف فروشگاه.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'مدیریت تیکت‌های پشتیبانی.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'مدیریت کارت‌های هدیه.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'مشاهده کارت‌های هدیه.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'مدیریت سوالات متداول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'مشاهده سوالات متداول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'مدیریت دسته‌بندی‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'مشاهده دسته‌بندی‌ها.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'مدیریت محصولات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'مشاهده محصولات.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'مشاهده گزارش‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'مدیریت حساب‌های مالی.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'مشاهده حساب‌های مالی.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ویرایش صفحات فروشگاه.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'مشاهده صفحات فروشگاه.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'مدیریت انبار.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'مشاهده انبار.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'مدیریت دسترسی کارکنان.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'مشاهده دسترسی کارکنان.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'مشاهده سفارش‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'مدیریت سفارش‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'مدیریت پروفایل کسب‌وکار.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'مشاهده پروفایل کسب‌وکار.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'مدیریت کدهای تخفیف.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'مشاهده کدهای تخفیف.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'مدیریت کوپن‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'مشاهده کوپن‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'مدیریت پیشنهادات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'مشاهده پیشنهادات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'مدیریت بازپرداخت‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'مشاهده بازپرداخت‌ها.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'مدیریت قرعه‌کشی‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'مشاهده قرعه‌کشی‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'مدیریت انجمن.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'مشاهده انجمن.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'مدیریت مشتریان.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'مشاهده مشتریان.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'مدیریت اشتراک‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'مشاهده اشتراک‌ها.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'مشاهده سفارش‌های فروشنده.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'مدیریت سفارش‌ها و پرداخت‌های فروشنده.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'مدیریت ارائه‌دهندگان اتصال.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'مشاهده ارائه‌دهندگان اتصال.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'اجرای دستورات هوش مصنوعی.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'مشاهده اطلاعات هوش مصنوعی.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'مدیریت پرداخت‌های فروشنده.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'مشاهده پرداخت‌های فروشنده.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'مشاهده پروفایل کسب‌وکار.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'مدیریت پروفایل کسب‌وکار.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'مشاهده اطلاعات نمایندگی.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'مدیریت اطلاعات نمایندگی.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'مشاهده یادداشت‌های فروشگاه.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'مدیریت یادداشت‌های فروشگاه.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'مشاهده دارایی‌های توسعه‌دهنده.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'مدیریت دارایی‌های توسعه‌دهنده.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'دسترسی به اطلاعات شخصی و تنظیمات حساب.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'مدیریت کیف پول و تراکنش‌ها.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'مشاهده تراکنش‌های کیف پول.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'مشاهده توکن‌های OAuth و کلاینت‌ها.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'مدیریت توکن‌های OAuth و کلاینت‌ها.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'مدیریت تنظیمات امنیتی.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'مدیریت همکاران فروش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'مشاهده همکاران فروش.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'مدیریت قالب‌های چاپ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'مشاهده قالب‌های چاپ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'مدیریت نظرات.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'مشاهده نظرات.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'مشاهده اطلاعات درآمدزایی.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'مدیریت اطلاعات درآمدزایی.',

];