<?php


use App\Samin\Voucher\Enums\VoucherTypes;

return [

    VoucherTypes::ONE_MONTH_STARTUP => ['title' => 'پلن استارتاپ 1 ماهه', 'image' => '/images/email/vouchers/one-month-startup.png', 'price' => '9.99', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_STARTUP => ['title' => 'پلن استارتاپ 3 ماهه', 'image' => '/images/email/vouchers/three-months-startup.png', 'price' => '30', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_STARTUP => ['title' => 'پلن استارتاپ 6 ماهه', 'image' => '/images/email/vouchers/six-months-startup.png', 'price' => '60', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_STARTUP => ['title' => 'پلن استارتاپ 12 ماهه', 'image' => '/images/email/vouchers/twelve-months-startup.png', 'price' => '120', 'currency' => 'USD'],

    VoucherTypes::ONE_MONTH_COMPANY => ['title' => 'پلن فروشگاه متوسط 1 ماهه', 'image' => '/images/email/vouchers/one-month-company.png', 'price' => '69', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_COMPANY => ['title' => 'پلن فروشگاه متوسط 3 ماهه', 'image' => '/images/email/vouchers/three-months-company.png', 'price' => '207', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_COMPANY => ['title' => 'پلن فروشگاه متوسط 6 ماهه', 'image' => '/images/email/vouchers/six-months-company.png', 'price' => '414', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_COMPANY => ['title' => 'پلن فروشگاه متوسط 12 ماهه', 'image' => '/images/email/vouchers/twelve-months-company.png', 'price' => '828', 'currency' => 'USD'],

    VoucherTypes::ONE_MONTH_ENTERPRISE => ['title' => 'پلن فروشگاه بزرگ 1 ماهه', 'image' => '/images/email/vouchers/one-month-enterprise.png', 'price' => '299', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_ENTERPRISE => ['title' => 'پلن فروشگاه بزرگ 1 ماهه', 'image' => '/images/email/vouchers/three-months-enterprise.png', 'price' => '897', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_ENTERPRISE => ['title' => 'پلن فروشگاه بزرگ 1 ماهه', 'image' => '/images/email/vouchers/six-months-enterprise.png', 'price' => '1,794‬', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_ENTERPRISE => ['title' => 'پلن فروشگاه بزرگ 1 ماهه', 'image' => '/images/email/vouchers/twelve-months-enterprise.png', 'price' => '3,588', 'currency' => 'USD'],

    // Default register voucher for invited user by referral link:
   /* 'register_voucher' => ['title' => 'تبریک، ثبت نام کنید و این کارت هدیه را دریافت نمایید', 'image' => '/images/email/vouchers/one-month-startup.png','delay'=>5000,
        'header'=> '/images/popups/referral/m1.jpg',
        'color'=>'#d83852',
        'color_btn'=>'#C2185B',
        'contain'=>true,
        'message' => 'شما از طریق لینک یک کاربر فعال سلدان وارد سایت شده اید، اگر همین حالا در سلدان ثبت نام نمایید یک کارت هدیه به ارزش 84,000 تومان دریافت می نمایید. ثبت نام و ساخت فروشگاه در سلدان 100% رایگان است، اما میتوانید از این کارت های شارژ برای ارتقاع سرویستان استفاده نمایید.']
*/
];
