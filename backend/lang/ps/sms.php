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
        'title' => 'تادیه قبول کړئ',
        'sample' => "ستاسو \$267 تادیه په بریالیتوب سره حل شوه.<br>Order: SM-425<br> مننه، <b> ستاسو د پلورنځي نوم</b>.<br>Selldone",
        'body' => "ستاسو د :param2 تادیه په بریالیتوب سره حل شوه.\nامر: :param1\nمننه، :param3.\nSelldone",
        'icon' => 'تادیه',
        'description' => 'د پلورنځي پیرودونکي ته یو پیغام واستوئ ترڅو د بریالي تادیې په اړه خبر کړئ.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'تادیه قبول کړئ',
        'sample' => "د 267 ډالرو نوې تادیه په بریالیتوب سره حل شوه.<br>Order: SM-425<br> مننه، <b> ستاسو د پلورنځي نوم</b>.<br>Selldone",
        'body' => "نوی :param2 تادیه په بریالیتوب سره حل شوه.\nامر: :param1\nمننه، :param3.\nSelldone",
        'icon' => 'تادیه',
        'description' => 'د هټۍ مالک ته یو پیغام واستوئ ترڅو دوی د بریالي تادیې په اړه خبر کړي.',

    ],

    'vendor-new-order' => [
        'title' => 'د پلورونکي نوی امر',
        'sample' => "تاسو د 200 ډالرو نوی امر ترلاسه کړ. <br>Order: <b>SM-870</b> د <b>Vendor نوم</b>.<br>✅ د محصول A لپاره| SKU100001 |1x<br>✅ محصول ب| SKU100002 |1x",
        'body' => "تاسو د :param2 نوی امر ترلاسه کړ.\nامر: :param1 د :param3 لپاره.\n:param4",
        'icon' => 'پلورنځي',
        'description' => 'پلورونکي ته یو پیغام واستوئ ترڅو دوی د نوي امر په اړه خبر کړي.',
    ],








    'shop-login' => [
        'title' => 'د ننوتلو تایید کوډ',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "ستاسو د ننوتلو کوډ دا دی: :param1\n:param2\nSelldone",
        'icon' => 'ننوت',
        'description' => 'هټۍ ته د ننوتلو لپاره پیرودونکي ته د ننوتلو کوډ واستوئ.',

    ],

    'user-login' => [
        'title' => 'د ننوتلو بریالیتوب پیغام',
        'sample' => "ګرانه <b>Name</b>،<br> تاسو د <b>iPhone 165.250.300.1</b> په <b>5/8/2021 کې خپل حساب ته ننوتلی یاست 9:14AM</b>.<br>Selldone",
        'body' => "ګرانه :param1،\nتاسو د :param2 لخوا په :param3 کې خپل حساب ته ننوتلی یاست.\nSelldone",
        'icon' => 'سیسټم_امنیت_تازه_ښه',
        'description' => 'هټۍ ته د پیرودونکي ننوتلو وروسته یو پیغام واستوئ.',

    ],

    'avocado-order-submit' => [
        'title' => 'د ایوکاډو نوی امر سپارل شوی پیرودونکي ته لیږل',
        'sample' => "<b> ستاسو د پلورنځي نوم</b><br> ګران <b> ستاسو نوم</b>، <br> موږ ستاسو امر ترلاسه کړ او موږ یې بیاکتنه کوو.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nګرانه :param1،\nموږ ستاسو امر ترلاسه کړ او موږ یې بیاکتنه کوو.\nامر #: :param2\nSelldone",
        'icon' => 'حقیقت_څیړنه',
        'description' => 'د ایوکاډو امر ورکولو وروسته پیرودونکي ته پیغام واستوئ.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'ایوکاډو نوي امر ترلاسه کوي پلورونکي ته لیږل',
        'sample' => "تاسو د ایوکاډو آرډر ترلاسه کړ: <br>Store: <b> ستاسو د پلورنځي نوم</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "تاسو د ایوکاډو امر ترلاسه کړی:\nپلورنځي: :param1\nپېرودونکی: :param2\nامر: :param3\nSelldone",
        'icon' => 'څنګه_ته_ریګ',
        'description' => 'د هټۍ مالک ته یو پیغام واستوئ ترڅو د نوي ایوکاډو آرډر ترلاسه کولو په اړه خبر کړي.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'د ایوکاډو امر تادیه کولو ته چمتو دی',
        'sample' => "<b> ستاسو د پلورنځي نوم</b><br> ستاسو امر تایید شوی او د لاندې لینک له لارې تادیه کیدی شي. <br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nستاسو امر تایید شوی او د لاندې لینک له لارې تادیه کیدی شي.\nامر #: :param2\nلینک: :param1\nSelldone",
        'icon' => 'رسید',
        'description' => 'پیرودونکي ته د تادیې لینک سره یو پیغام واستوئ وروسته له دې چې پلورونکي لګښت ټاکي او د دوی د ایوکاډو امر تایید کړئ.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'امر د بار وړلو لپاره چمتو دی',
        'sample' => "سلام <b>Alex</b>، ښه خبر، ستاسو امر اوس د لیږدولو لپاره چمتو دی. <br>Order: <b>SM-123</b>",
        'body' => "سلام :param4، ښه خبر، ستاسو امر اوس د لیږلو لپاره چمتو دی.\nامر: :param1",
        'icon' => 'ځایی_لیږدول',
        'description' => 'پیرودونکي ته یو پیغام واستوئ ترڅو دوی ته خبر ورکړي چې د دوی امر لیږلو ته چمتو دی.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'امر پورته کولو ته چمتو دی',
        'sample' => "سلام الیکس، ښه خبر، ستاسو امر اوس د اخیستلو لپاره چمتو دی. <br>Order: <b>SM-123</b>",
        'body' => "سلام :param4، ښه خبر، ستاسو امر اوس د اخیستلو لپاره چمتو دی.\nامر: :param1",
        'icon' => 'شریکول_ځای',
        'description' => 'پیرودونکي ته یو پیغام واستوئ ترڅو دوی ته خبر ورکړي چې د دوی امر اخیستلو ته چمتو دی.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'د پلورونکي امر لیږلو ته چمتو دی',
        'sample' => "سلام <b>Alex</b>، ښه خبر، ستاسو امر اوس د لیږدولو لپاره چمتو دی. <br>Order: <b>SM-123</b>",
        'body' => "سلام :param4، ښه خبر، ستاسو امر اوس د لیږلو لپاره چمتو دی.\nامر: :param1",
        'icon' => 'ځایی_لیږدول',
        'description' => 'پیرودونکي ته یو پیغام واستوئ ترڅو دوی ته خبر ورکړي چې د دوی امر لیږلو ته چمتو دی. یوازې په بازار کې د مستقیم بار وړلو حالت سره او د تحویلي ډول اخیستل ندي.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'د پلورونکي امر اخیستلو ته چمتو دی',
        'sample' => "سلام الیکس، ښه خبر، ستاسو امر اوس د اخیستلو لپاره چمتو دی. <br>Order: <b>SM-123</b>",
        'body' => "سلام :param4، ښه خبر، ستاسو امر اوس د اخیستلو لپاره چمتو دی.\nامر: :param1",
        'icon' => 'شریکول_ځای',
        'description' => 'پیرودونکي ته یو پیغام واستوئ ترڅو دوی ته خبر ورکړي چې د دوی امر اخیستلو ته چمتو دی. یوازې په بازار کې د مستقیم بار وړلو حالت سره او د تحویل ډول اخیستل دي.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'د امر توکي تایید',
        'sample' => "سلام الیکس، موږ ستاسو امر بیاکتنه کړې. دلته ستاسو د توکو لپاره د تایید حالت دی: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "سلام :param4، موږ ستاسو امر بیاکتنه کړې. دلته ستاسو د توکو لپاره د تایید حالت دی:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'پیرودونکي ته د دوی په امر کې د توکو په اړه خبر ورکوي چې د پلورونکي لخوا منل شوي یا رد شوي.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'د پلورونکي امر توکي تایید',
        'sample' => "سلام الیکس، موږ ستاسو امر بیاکتنه کړې. دلته ستاسو د توکو لپاره د تایید حالت دی: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "سلام :param4، موږ ستاسو امر بیاکتنه کړې. دلته ستاسو د توکو لپاره د تایید حالت دی:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'پیرودونکي ته د دوی په امر کې د توکو په اړه خبر ورکوي چې د پلورونکي لخوا منل شوي یا رد شوي.',
    ],



];
