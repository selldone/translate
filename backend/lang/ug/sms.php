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
        'title' => 'ھەقنى قوبۇل قىلىڭ',
        'sample' => "267 دوللار تۆلىشىڭىز مۇۋەپپەقىيەتلىك ھەل قىلىندى.<br> زاكاز: SM-425<br> رەھمەت ، <b>دۇكىنىڭىز</b> .<br> Selldone",
        'body' => "سىزنىڭ :param2 تۆلىشىڭىز مۇۋەپپەقىيەتلىك ھەل قىلىندى.\nزاكاز: :param1\nرەھمەت ، :param3.\nSelldone",
        'icon' => 'پۇل تۆلەش',
        'description' => 'مۇۋەپپەقىيەتلىك پۇل تۆلەش توغرىسىدا دۇكان خېرىدارلىرىغا ئۇچۇر ئەۋەتىڭ.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ھەقنى قوبۇل قىلىڭ',
        'sample' => "يېڭى 267 دوللار تۆلەش مۇۋەپپەقىيەتلىك ھەل قىلىندى.<br> زاكاز: SM-425<br> رەھمەت ، <b>دۇكىنىڭىزنىڭ ئىسمى</b> .<br> Selldone",
        'body' => "يېڭى :param2 تۆلەش مۇۋەپپەقىيەتلىك ھەل قىلىندى.\nزاكاز: :param1\nرەھمەت ، :param3.\nSelldone",
        'icon' => 'پۇل تۆلەش',
        'description' => 'دۇكان خوجايىنىغا ئۇچۇر ئەۋەتىپ ، ئۇلارغا مۇۋەپپەقىيەتلىك پۇل تۆلەش توغرىسىدا ئۇچۇر بېرىڭ.',

    ],

    'vendor-new-order' => [
        'title' => 'ساتقۇچى يېڭى زاكاز',
        'sample' => "سىز 200 دوللارلىق يېڭى زاكازنى تاپشۇرۇۋالدىڭىز.| SKU100001 |1x<br>✅ مەھسۇلات B.| SKU100002 |1x",
        'body' => "يېڭى :param2 زاكاز تاپشۇرۇۋالدىڭىز.\nزاكاز: :param3 ئۈچۈن :param1.\n:param4",
        'icon' => 'دۇكان ئالدى',
        'description' => 'ساتقۇچىغا ئۇچۇر ئەۋەتىپ ئۇلارغا يېڭى زاكاز ھەققىدە ئۇچۇر قىلىڭ.',
    ],








    'shop-login' => [
        'title' => 'كىرىش دەلىللەش كودى',
        'sample' => "كىرىش كودىڭىز: <b>123456</b><br> <b>دۇكىنىڭىز</b><br> Selldone",
        'body' => "كىرىش كودىڭىز: :param1\n:param2\nSelldone",
        'icon' => 'كىرىش',
        'description' => 'دۇكانغا كىرىش ئۈچۈن خېرىدارغا كىرىش كودى ئەۋەتىڭ.',

    ],

    'user-login' => [
        'title' => 'كىرىش مۇۋەپپەقىيەت ئۇچۇرى',
        'sample' => "ھۆرمەتلىك <b>ئىسىم</b> ،<br> ھېساباتىڭىزغا <b>iPhone 165.250.300.1</b> ئارقىلىق <b>5/8/2021 9:14 دە تىزىملاتتىڭىز</b> .<br> Selldone",
        'body' => "ھۆرمەتلىك :param1 ،\nھېساباتىڭىزغا :param2 ئارقىلىق :param3 غا كىردىڭىز.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'خېرىدارلار دۇكانغا كىرگەندىن كېيىن ئۇچۇر ئەۋەتىڭ.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado يېڭى زاكاز سېتىۋالغۇچىغا ئەۋەتىلگەن',
        'sample' => "<b>دۇكىنىڭىز</b><br> ھۆرمەتلىك <b>ئىسمىڭىز</b> ،<br> بىز سىزنىڭ بۇيرۇقىڭىزنى تاپشۇرۇۋالدۇق ، ئۇنى تەكشۈرۈۋاتىمىز.<br> زاكاز #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nھۆرمەتلىك :param1 ،\nبىز سىزنىڭ بۇيرۇقىڭىزنى تاپشۇرۇۋالدۇق ، ئۇنى تەكشۈرۈۋاتىمىز.\nزاكاز #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Avocado زاكازنى قويغاندىن كېيىن خېرىدارغا ئۇچۇر ئەۋەتىڭ.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado ساتقۇچىغا ئەۋەتىلگەن يېڭى زاكازنى تاپشۇرۇۋالىدۇ',
        'sample' => "ئالۋاستى بۇيرۇقىنى تاپشۇرۇۋالدىڭىز:<br> دۇكان: <b>دۇكىنىڭىز</b><br> سېتىۋالغۇچى: <b>سېتىۋالغۇچىنىڭ ئىسمى</b><br> زاكاز: <b>AVO-246</b><br> Selldone",
        'body' => "Avocado بۇيرۇقىنى تاپشۇرۇۋالدىڭىز:\nدۇكان: :param1\nسېتىۋالغۇچى: :param2\nزاكاز: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'دۇكان خوجايىنىغا ئۇچۇر ئەۋەتىپ ، ئۇلارغا يېڭى Avocado زاكازنى تاپشۇرۇۋالغانلىقىنى ئۇقتۇرۇڭ.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'پۇل تۆلەشكە تەييارلانغان Avocado زاكاز',
        'sample' => "<b>Y دۇكىنىڭىزنىڭ ئىسمى </b><br> سىزنىڭ زاكازڭىز جەزملەشتۈرۈلدى ھەمدە تۆۋەندىكى ئۇلىنىش ئارقىلىق پۇل تۆلىگىلى بولىدۇ. <br>Order #: <b>AVO-246</b>QQ",
        'body' => ":param3\nزاكازڭىز جەزملەشتۈرۈلدى ، تۆۋەندىكى ئۇلىنىش ئارقىلىق پۇل تۆلىسىڭىز بولىدۇ.\nزاكاز #: :param2\nئۇلىنىش: :param1\nSelldone",
        'icon' => 'تالون',
        'description' => 'ساتقۇچى تەننەرخنى بەلگىلىگەندىن كېيىن خېرىدارغا پۇل ئۇلىنىشى بىلەن ئۇچۇر ئەۋەتىپ ، ئۇلارنىڭ Avocado زاكازنى جەزملەشتۈرۈڭ.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'مال ئەۋەتىشكە تەييار',
        'sample' => "ئەسسالامۇئەلەيكۇم <b>Alex</b> ، خۇشخەۋەر ، زاكازڭىز ھازىر توشۇشقا تەييارلاندى. <br>Order: <b>SM-123</b>",
        'body' => "ئەسسالامۇئەلەيكۇم :param4 ، خۇشخەۋەر ، زاكازڭىز ھازىر ئەۋەتىشكە تەييار.\nزاكاز: :param1",
        'icon' => 'local_shipping',
        'description' => 'خېرىدارغا ئۇچۇر ئەۋەتىپ ، ئۇلارنىڭ زاكازلىرىنىڭ توشۇشقا تەييار ئىكەنلىكىنى ئۇقتۇرۇڭ.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'تاللاشقا تەييار',
        'sample' => "ئەسسالامۇئەلەيكۇم ئالېكىس ، خۇشخەۋەر ، زاكازڭىز ھازىر ئالماقچى. <br>Order: <b>SM-123</b>",
        'body' => "ئەسسالامۇئەلەيكۇم :param4 ، خۇشخەۋەر ، زاكازڭىز ھازىر ئالماقچى.\nزاكاز: :param1",
        'icon' => 'share_location',
        'description' => 'خېرىدارغا ئۇچۇر ئەۋەتىپ ، ئۇلارنىڭ زاكازلىرىنى ئېلىشقا تەييار ئىكەنلىكىنى ئۇقتۇرۇڭ.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'مال ساتقۇچىلار مال ئەۋەتىشكە تەييار',
        'sample' => "ئەسسالامۇئەلەيكۇم <b>Alex</b> ، خۇشخەۋەر ، زاكازڭىز ھازىر توشۇشقا تەييارلاندى. <br>Order: <b>SM-123</b>",
        'body' => "ئەسسالامۇئەلەيكۇم :param4 ، خۇشخەۋەر ، زاكازڭىز ھازىر ئەۋەتىشكە تەييار.\nزاكاز: :param1",
        'icon' => 'local_shipping',
        'description' => 'خېرىدارغا ئۇچۇر ئەۋەتىپ ، ئۇلارنىڭ زاكازلىرىنىڭ توشۇشقا تەييار ئىكەنلىكىنى ئۇقتۇرۇڭ. بىۋاسىتە توشۇش شەكلى ۋە مال يەتكۈزۈش تىپىدىكى بازاردا Pickup ئەمەس.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'مال سېتىۋالغۇچىلار زاكاز قىلىشقا تەييار',
        'sample' => "ئەسسالامۇئەلەيكۇم ئالېكىس ، خۇشخەۋەر ، زاكازڭىز ھازىر ئالماقچى. <br>Order: <b>SM-123</b>",
        'body' => "ئەسسالامۇئەلەيكۇم :param4 ، خۇشخەۋەر ، زاكازڭىز ھازىر ئالماقچى.\nزاكاز: :param1",
        'icon' => 'share_location',
        'description' => 'خېرىدارغا ئۇچۇر ئەۋەتىپ ، ئۇلارنىڭ زاكازلىرىنى ئېلىشقا تەييار ئىكەنلىكىنى ئۇقتۇرۇڭ. بىۋاسىتە توشۇش ھالىتى ۋە مال يەتكۈزۈش تىپىدىكى بازاردا Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'تۈرلەرنى جەزملەشتۈرۈش',
        'sample' => "ئەسسالامۇ ئەلەيكۇم ، بىز سىزنىڭ زاكازلىرىڭىزنى تەكشۈردۇق. بۇ تۈرلىرىڭىزنىڭ جەزملەشتۈرۈش ھالىتى: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ياخشىمۇسىز :param4 ، زاكاسلىرىڭىزنى تەكشۈردۇق. بۇ تۈرلىرىڭىزنىڭ جەزملەشتۈرۈش ھالىتى:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ساتقۇچى تەرىپىدىن قوبۇل قىلىنغان ياكى رەت قىلىنغان تۈرلەر بويىچە خېرىدارغا ئۇقتۇرۇش قىلىدۇ.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'ساتقۇچىلار زاكاز تۈرلىرىنى جەزملەشتۈرۈش',
        'sample' => "ئەسسالامۇ ئەلەيكۇم ، بىز سىزنىڭ زاكازلىرىڭىزنى تەكشۈردۇق. بۇ تۈرلىرىڭىزنىڭ جەزملەشتۈرۈش ھالىتى: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ياخشىمۇسىز :param4 ، زاكاسلىرىڭىزنى تەكشۈردۇق. بۇ تۈرلىرىڭىزنىڭ جەزملەشتۈرۈش ھالىتى:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ساتقۇچى تەرىپىدىن قوبۇل قىلىنغان ياكى رەت قىلىنغان تۈرلەر بويىچە خېرىدارغا ئۇقتۇرۇش قىلىدۇ.',
    ],



];
