<?php


use App\Backoffice\Voucher\Enums\VoucherTypes;

return [

    VoucherTypes::ONE_MONTH_STARTUP => ['title' => 'Shirin farawa kyauta na wata daya', 'image' => '/images/email/vouchers/one-month-startup.png', 'price' => '9.99', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_STARTUP => ['title' => 'Shirin farawa kyauta na wata uku
Saukewa:', 'image' => '/images/email/vouchers/three-months-startup.png', 'price' => '30', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_STARTUP => ['title' => 'Shirin farawa kyauta na wata shida
Saukewa:', 'image' => '/images/email/vouchers/six-months-startup.png', 'price' => '60', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_STARTUP => ['title' => 'Shirin farawa kyauta na wata goma sha biyu
Saukewa:', 'image' => '/images/email/vouchers/twelve-months-startup.png', 'price' => '120', 'currency' => 'USD'],

    VoucherTypes::ONE_MONTH_COMPANY => ['title' => 'Shirin kamfani kyauta na wata daya
Saukewa:', 'image' => '/images/email/vouchers/one-month-company.png', 'price' => '69', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_COMPANY => ['title' => 'Shirin kamfani kyauta na wata uku
Saukewa:', 'image' => '/images/email/vouchers/three-months-company.png', 'price' => '207', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_COMPANY => ['title' => 'Shirin kamfani kyauta na wata shida
Saukewa:', 'image' => '/images/email/vouchers/six-months-company.png', 'price' => '414', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_COMPANY => ['title' => 'Shirin kamfani kyauta na wata goma sha biyu
Saukewa:', 'image' => '/images/email/vouchers/twelve-months-company.png', 'price' => '828', 'currency' => 'USD'],

    VoucherTypes::ONE_MONTH_ENTERPRISE => ['title' => 'Shirin kasuwanci na kyauta na wata daya
Saukewa:', 'image' => '/images/email/vouchers/one-month-enterprise.png', 'price' => '299', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_ENTERPRISE => ['title' => 'Shirin kasuwanci na wata uku kyauta
Saukewa:', 'image' => '/images/email/vouchers/three-months-enterprise.png', 'price' => '897', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_ENTERPRISE => ['title' => 'Shirin kasuwancin kyauta na wata shida
Saukewa:', 'image' => '/images/email/vouchers/six-months-enterprise.png', 'price' => '1,794
Saukewa:', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_ENTERPRISE => ['title' => 'Shirin kasuwanci na wata goma sha biyu kyauta
Saukewa:', 'image' => '/images/email/vouchers/twelve-months-enterprise.png', 'price' => '3,588
Saukewa:', 'currency' => 'USD'],


    // Default register voucher for invited user by referral link:
  /*  'register_voucher' => ['title' => 'Congratulations, register and receive this gift card', 'image' => '/images/email/vouchers/one-month-startup.png', 'delay' => 5000,
        'header' => '/images/popups/referral/m1.jpg',
        'color' => '#d83852',
        'color_btn' => '#C2185B',
        'contain' => true,
        'message' => 'You followed a link from an active Selldone user. If you register with Selldone now, you will receive a gift card worth $14.90. Registering and building a store in Selldone is 100% free, and you can use these recharge cards to pay for services.']
*/

];
