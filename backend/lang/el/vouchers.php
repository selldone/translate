<?php


use App\Backoffice\Voucher\Enums\VoucherTypes;

return [

    VoucherTypes::ONE_MONTH_STARTUP => ['title' => 'Ένα μήνα δωρεάν πρόγραμμα εκκίνησης', 'image' => '/images/email/vouchers/one-month-startup.png', 'price' => '9.99', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_STARTUP => ['title' => 'Τρίμηνο δωρεάν πρόγραμμα εκκίνησης', 'image' => '/images/email/vouchers/three-months-startup.png', 'price' => '30', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_STARTUP => ['title' => 'Εξάμηνο δωρεάν πρόγραμμα εκκίνησης', 'image' => '/images/email/vouchers/six-months-startup.png', 'price' => '60', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_STARTUP => ['title' => 'Δώδεκα μήνες δωρεάν πρόγραμμα εκκίνησης', 'image' => '/images/email/vouchers/twelve-months-startup.png', 'price' => '120', 'currency' => 'USD'],

    VoucherTypes::ONE_MONTH_COMPANY => ['title' => 'Ένα μήνα δωρεάν εταιρικό πρόγραμμα', 'image' => '/images/email/vouchers/one-month-company.png', 'price' => '69', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_COMPANY => ['title' => 'Τρίμηνο δωρεάν εταιρικό πρόγραμμα', 'image' => '/images/email/vouchers/three-months-company.png', 'price' => '207', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_COMPANY => ['title' => 'Εξάμηνο δωρεάν εταιρικό πρόγραμμα', 'image' => '/images/email/vouchers/six-months-company.png', 'price' => '414', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_COMPANY => ['title' => 'Δώδεκα μήνες δωρεάν εταιρικό πρόγραμμα', 'image' => '/images/email/vouchers/twelve-months-company.png', 'price' => '828', 'currency' => 'USD'],

    VoucherTypes::ONE_MONTH_ENTERPRISE => ['title' => 'Δωρεάν επιχειρηματικό πρόγραμμα ενός μήνα', 'image' => '/images/email/vouchers/one-month-enterprise.png', 'price' => '299', 'currency' => 'USD'],
    VoucherTypes::THREE_MONTHS_ENTERPRISE => ['title' => 'Τρίμηνο δωρεάν επιχειρηματικό πρόγραμμα', 'image' => '/images/email/vouchers/three-months-enterprise.png', 'price' => '897', 'currency' => 'USD'],
    VoucherTypes::SIX_MONTHS_ENTERPRISE => ['title' => 'Εξάμηνο δωρεάν επιχειρηματικό πρόγραμμα', 'image' => '/images/email/vouchers/six-months-enterprise.png', 'price' => '1.794', 'currency' => 'USD'],
    VoucherTypes::TWELVE_MONTHS_ENTERPRISE => ['title' => 'Δώδεκα μήνες δωρεάν επιχειρηματικό πρόγραμμα', 'image' => '/images/email/vouchers/twelve-months-enterprise.png', 'price' => '3.588', 'currency' => 'USD'],


    // Default register voucher for invited user by referral link:
  /*  'register_voucher' => ['title' => 'Congratulations, register and receive this gift card', 'image' => '/images/email/vouchers/one-month-startup.png', 'delay' => 5000,
        'header' => '/images/popups/referral/m1.jpg',
        'color' => '#d83852',
        'color_btn' => '#C2185B',
        'contain' => true,
        'message' => 'You followed a link from an active Selldone user. If you register with Selldone now, you will receive a gift card worth $14.90. Registering and building a store in Selldone is 100% free, and you can use these recharge cards to pay for services.']
*/

];
