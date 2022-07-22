<?php

/*
|--------------------------------------------------------------------------
| Shop SMS list
|--------------------------------------------------------------------------
| This array return to shop admin to see SMS preview!
|
*/

return [

    'shop-order-payment' => [
        'title' => 'Accept payment',
        'sample' => "Your 267$ payment successfully settled.<br>Order: SM-425<br>Thanks, <b>Your store name</b>.<br>Selldone",
        'body' => "Your :param2 payment successfully settled.\nOrder: :param1\nThanks, :param3.\nSelldone",
        'icon'=>'payment'
    ],
    'shop-order-payment-admin' => [
        'title' => 'Accept payment',
        'sample' => "New 267$ payment successfully settled.<br>Order: SM-425<br>Thanks, <b>Your store name</b>.<br>Selldone",
        'body' => "New :param2 payment successfully settled.\nOrder: :param1\nThanks, :param3.\nSelldone",
        'icon'=>'payment'
    ],


    'shop-login' => [
        'title' => 'Login verification code',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "Your login code is: :param1\n:param2\nSelldone",
        'icon'=>'login'
    ],

    'user-login' => [
        'title' => 'Login Success Message',
        'sample' => "Dear <b>Name</b>, <br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Dear :param1,\nYou have logged in to your account by :param2 at :param3.\nSelldone",
        'icon'=>'system_security_update_good'
    ],

    'avocado-order-submit' => [
        'title' => 'Avocado new order submitted send to buyer',
        'sample' => "<b>Your store name</b> <br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nDear :param1,\nWe have received your order and we are reviewing it.\nOrder #: :param2\nSelldone",
        'icon'=>'fact_check'
    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado receive new order send to seller',
        'sample' => "You received an avocado order: <br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "You received an avocado order:\nStore: :param1\nBuyer: :param2\nOrder: :param3\nSelldone",
        'icon'=>'how_to_reg'
    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado order ready to pay',
        'sample' => "<b>Your store name</b> <br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nYour order has been confirmed and can be paid through the following link.\nOrder #: :param2\nLink: :param1\nSelldone",
        'icon'=>'receipt'
    ],






];
