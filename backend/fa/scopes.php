<?php

use App\Providers\AuthServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */


    AuthServiceProvider::SCOPE_PROFILE => 'خواندن اطلاعات پروفایل شامل نام، آدرس ایمیل، تصویر و وضعیت تایید هویت.',
    AuthServiceProvider::SCOPE_PHONE => 'دسترسی به شماره تماس.',
    AuthServiceProvider::SCOPE_ADDRESS => 'خواندن و ویرایش آدرس از دفترچه آدرس های ذخیره شده.',

    AuthServiceProvider::SCOPE_BUY => 'ثبت سفارش و خرید از فروشگاه.',
    AuthServiceProvider::SCOPE_ORDER_HISTORY => 'خواندن تاریخچه سفارشات.',
    AuthServiceProvider::SCOPE_MY_GIFT_CARDS => 'دسترسی به گیفت کارت های من.',


    AuthServiceProvider::SCOPE_ARTICLES => 'ویرایش مقالات.',
    AuthServiceProvider::SCOPE_NOTIFICATIONS => 'ارسال و دریافت نوتیفیکیشن.',


    AuthServiceProvider::SCOPE_READ_SHOPS => 'خواندن لیست فروشگاه ها.',

    AuthServiceProvider::SCOPE_SHOP_EDIT => 'دسترسی ویرایش فروشگاه.',

    AuthServiceProvider::SCOPE_SHOP_CONTACTS => 'دریافت و ویرایش فرم های تماس.',
    AuthServiceProvider::SCOPE_SHOP_GIFT_CARDS => 'ایجاد، ویرایش و مدیریت گیفت کارت ها.',
    AuthServiceProvider::SCOPE_SHOP_FAQS => 'ایجاد، ویرایش و مدیریت سوالات متداول.',
    AuthServiceProvider::SCOPE_SHOP_CATEGORIES => 'ایجاد، ویرایش و مدیریت دسته بندی ها.',
    AuthServiceProvider::SCOPE_SHOP_PRODUCTS => 'ایجاد، ویرایش و مدیریت محصولات.',
    AuthServiceProvider::SCOPE_SHOP_READ_REPORTS => 'خواندن اطلاعات و گزارشات.',
    AuthServiceProvider::SCOPE_SHOP_SOCIALS => 'ویرایش شبکه های اجتمائی فروشگاه.',
    AuthServiceProvider::SCOPE_SHOP_ACCOUNTS => 'ویرایش و حذف حساب های مالی متصل به فروشگاه.',
    AuthServiceProvider::SCOPE_SHOP_MENUS => 'ویرایش منو های فروشگاه.',
    AuthServiceProvider::SCOPE_SHOP_PAGES => 'ویرایش صفحات فروشگاه.',
    AuthServiceProvider::SCOPE_SHOP_WAREHOUSE => 'ویرایش انبار فروشگاه.',
    AuthServiceProvider::SCOPE_SHOP_PERMISSIONS => 'مشاهده و ویرایش دسترسی های فروشگاه.',
    AuthServiceProvider::SCOPE_SHOP_PROCESS_CENTER => 'مدیریت سفارشات دریافتی.',
    AuthServiceProvider::SCOPE_SHOP_PROFILE => 'مدیریت پروفایل های فروشگاه.',
    AuthServiceProvider::SCOPE_SHOP_DISCOUNT_CODE => 'مدیریت کدهای تخفیف.',
    AuthServiceProvider::SCOPE_SHOP_COUPON => 'مدیریت کپون ها.',
    AuthServiceProvider::SCOPE_SHOP_OFFER => 'مدیریت پیشنهادهای فروش.',
    AuthServiceProvider::SCOPE_SHOP_LOTTERY => 'مدیریت گردونه شانس فروشگاه.',
    AuthServiceProvider::SCOPE_SHOP_COMMUNITY => 'مدیریت انجمن فروشگاه.',




];
