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
        'title' => 'تایید پرداخت سفارش مشتری',
        'sample' => "مبلغ <b>50000</b> ریال بابت سبدخرید با کد <b>SM-320</b>  از فروشگاه <b>نام فروشگاه شما</b> با موفقیت پرداخت گردید. <br>با تشکر، شما را در جریان روند ارسال سفارش قرار خواهیم داد.<br>Selldone ",
        'body' => "مبلغ :param2 بابت سبدخرید با کد :param1  از فروشگاه :param3 با موفقیت پرداخت گردید. \n با تشکر، شما را در جریان روند ارسال سفارش قرار خواهیم داد.\nسلدان",
        'icon'=>'payment',
        'description'=> 'ارسال پیام به مشتری فروشگاه برای اطلاع از پرداخت موفق.'


    ],


    'shop-order-payment-admin' => [
        'title' => 'اعلان سفارش جدید به فروشنده',
        'sample' => "شما یک سفارش جدید به مبلغ <b>50000</b> ریال بابت خرید با کد <b>SM-320</b>  دریافت نموده اید. <br>لطفا به صفحه پردازش سفارش فروشگاه <b>نام فروشگاه شما</b> در سلدان مراجعه نمایید.<br>Selldone",
        'body' => "شما یک سفارش جدید به مبلغ :param2 بابت خرید با کد :param1  دریافت نموده اید. \nلطفا به صفحه پردازش سفارش فروشگاه :param3 در سلدان مراجعه نمایید.\nسلدان",
        'icon'=>'payment',
        'description'=> 'ارسال پیام به صاحب فروشگاه برای اطلاع از پرداخت موفق.'


    ],

    'vendor-new-order' => [
        'title' => 'سفارش جدید وندور',
        'sample' => "شما یک سفارش جدید به مبلغ ۲۰۰ دلار دریافت کردید.<br>"
            ."سفارش: <b>SM-870</b> برای <b>نام فروشنده</b>.<br>"
            ."✅ محصول A | SKU100001 | ۱ عدد<br>"
            ."✅ محصول B | SKU100002 | ۱ عدد",

        'body' => "شما یک سفارش جدید :param2 دریافت کردید.\n"
            ."سفارش: :param1 برای :param3.\n"
            .":param4",
        'icon'=>'storefront',
        'description'=>'یک پیام به فروشنده ارسال می شود تا در مورد سفارش جدید آگاه شوند.',
    ],

    'shop-login' => [
        'title' => 'کد ورود به فروشگاه',
        'sample' => "code: <b>123456</b><br> کد ورود شما به فروشگاه: <b>123456</b> <br>سلدان",
        'body' => "code: :param1\nکد ورود شما به فروشگاه: \n:param2\nسلدان",
        'icon'=>'login',
        'description'=> 'ارسال کد ورود به مشتری برای ورود به فروشگاه.'


    ],


    'user-login' => [
        'title' => 'پیام ورود موفق کاربر',
        'sample' => "<b>نام</b> عزیز, <br>شما در تاریخ <b>5/8/2021 9:14AM</b> با دستگاه <b>iPhone 165.250.300.1</b>  وارد حساب کاربری خود در سلدان شده اید.<br>سلدان",
        'body' => ":param1 عزیز، \nشما در تاریخ :param3 با دستگاه :param2 وارد حساب کاربری خود در سلدان شده اید.\nسلدان",
        'icon'=>'system_security_update_good',
        'description'=> 'ارسال پیام پس از ورود مشتری به فروشگاه.'


    ],

    'avocado-order-submit' => [
        'title' => 'آووکادو، سفارش جدید (پیام به خریدار)',
        'sample' => "فروشگاه  <b>نام فروشگاه</b><br><b>نام خریدار</b> عزیز،<br>سفارش شما را دریافت کردیم و در حال بررسی آن هستیم.<br>شماره سفارش: <b>AVO-246</b><br>سلدان",
        'body' => "فروشگاه :param3\n:param1 عزیز،\nسفارش شما را دریافت کردیم و در حال بررسی آن هستیم.\nشماره سفارش: :param2\nسلدان",
        'icon'=>'fact_check',
        'description'=> 'ارسال پیام به مشتری پس از ثبت سفارش آووکادو.'


    ],


    'avocado-order-submit-seller' => [
        'title' => 'آووکادو، سفارش جدید (پیام به فروشنده)',
        'sample' => "شما یک سفارش آووکادو دریافت کردید، لطفا بررسی نمایید. <br>فروشگاه: <b>نام فروشگاه</b><br>خریدار: <b>نام خریدار</b><br>شماره سفارش: <b>AVO-246</b><br>سلدان",
        'body' => "شما یک سفارش آووکادو دریافت کردید، لطفا بررسی نمایید.\nفروشگاه: :param1\nخریدار: :param2\nشماره سفارش:  :param3\nسلدان",
        'icon'=>'how_to_reg',
        'description'=> 'ارسال پیام به صاحب فروشگاه برای اطلاع از دریافت سفارش جدید آووکادو.'


    ],



    'avocado-ready-to-pay' => [
        'title' => 'آووکادو، تایید و لینک پرداخت',
        'sample' => "<b>نام فروشگاه</b> <br>سفارش شما تایید شده و از طریق لینک زیر قابل پرداخت است.<br>شماره سفارش: <b>ACO-246</b><br>لینک: <b>https://your-domain/avocado</b><br>سلدان",
        'body' => ":param3\nسفارش شما تایید شده و از طریق لینک زیر قابل پرداخت است.\nشماره سفارش: :param2\nلینک : :param1\nسلدان",
        'icon'=>'receipt',
        'description'=> 'ارسال پیام همراه با لینک پرداخت به مشتری پس از تعیین هزینه و تأیید سفارش آووکادو توسط فروشنده.'


    ],

// ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━

    /**
     * In normal shops when the shop owner set order status to 'SentOrder' , and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'سفارش آماده ارسال است',
        'sample' => "سلام <b>الکس</b>، خبر خوب! سفارش شما اکنون آماده ارسال است.<br>شماره سفارش: <b>SM-123</b>",
        'body' => "سلام :param4، خبر خوب! سفارش شما اکنون آماده ارسال است.\nشماره سفارش: :param1",
        'icon' => 'local_shipping',
        'description' => 'ارسال پیام به مشتری برای اطلاع‌رسانی درباره آماده شدن سفارش جهت ارسال.',
    ],

    /**
     * In normal shops when the shop owner set order status to 'SentOrder' , and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'سفارش آماده تحویل است',
        'sample' => "سلام الکس، خبر خوب! سفارش شما اکنون آماده تحویل است.<br>شماره سفارش: <b>SM-123</b>",
        'body' => "سلام :param4، خبر خوب! سفارش شما اکنون آماده تحویل است.\nشماره سفارش: :param1",
        'icon' => 'share_location',
        'description' => 'ارسال پیام به مشتری برای اطلاع‌رسانی درباره آماده شدن سفارش جهت تحویل.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */
    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'سفارش فروشنده آماده ارسال است',
        'sample' => "سلام <b>الکس</b>، خبر خوب! سفارش شما اکنون آماده ارسال است.<br>شماره سفارش: <b>SM-123</b>",
        'body' => "سلام :param4، خبر خوب! سفارش شما اکنون آماده ارسال است.\nشماره سفارش: :param1",
        'icon' => 'local_shipping',
        'description' => 'ارسال پیام به مشتری برای اطلاع‌رسانی درباره آماده شدن سفارش جهت ارسال، فقط در حالت ارسال مستقیم و زمانی که نوع تحویل ارسال باشد.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'سفارش فروشنده آماده تحویل است',
        'sample' => "سلام الکس، خبر خوب! سفارش شما اکنون آماده تحویل است.<br>شماره سفارش: <b>SM-123</b>",
        'body' => "سلام :param4، خبر خوب! سفارش شما اکنون آماده تحویل است.\nشماره سفارش: :param1",
        'icon' => 'share_location',
        'description' => 'ارسال پیام به مشتری برای اطلاع‌رسانی درباره آماده شدن سفارش جهت تحویل، فقط در حالت ارسال مستقیم و زمانی که نوع تحویل تحویل باشد.',
    ],

// ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'تأیید اقلام سفارش',
        'sample' => "سلام الکس، ما سفارش شما را بررسی کردیم. وضعیت تأیید اقلام به شرح زیر است:<br>"
            . "فروشگاه: <b>نام فروشگاه</b><br>"
            . "شماره سفارش: <b>SM-123</b><br>"
            . "✅ محصول A | SKU100001 | 1x<br>"
            . "❌ محصول B | SKU100002 | 1x",
        'body' => "سلام :param4، ما سفارش شما را بررسی کردیم. وضعیت تأیید اقلام به شرح زیر است:\n"
            . "فروشگاه: :param3\n"
            . "شماره سفارش: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'اطلاع‌رسانی به مشتری درباره اقلام سفارش که توسط فروشنده تأیید یا رد شده‌اند.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'تأیید اقلام سفارش فروشنده',
        'sample' => "سلام الکس، ما سفارش شما را بررسی کردیم. وضعیت تأیید اقلام به شرح زیر است:<br>"
            . "فروشنده: <b>نام فروشنده</b><br>"
            . "شماره سفارش: <b>SM-123</b><br>"
            . "✅ محصول A | SKU100001 | 1x<br>"
            . "❌ محصول B | SKU100002 | 1x",
        'body' => "سلام :param4، ما سفارش شما را بررسی کردیم. وضعیت تأیید اقلام به شرح زیر است:\n"
            . "فروشنده: :param3\n"
            . "شماره سفارش: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'اطلاع‌رسانی به مشتری درباره اقلام سفارش که توسط فروشنده تأیید یا رد شده‌اند.',
    ],



];
