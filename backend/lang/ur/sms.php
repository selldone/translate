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
        'title' => 'ادائیگی قبول کریں۔',
        'sample' => "آپ کی \$267 کی ادائیگی کامیابی سے طے ہو گئی۔<br>Order: SM-425<br>Thanks, <b>آپ کے اسٹور کا نام</b>.<br>Selldone",
        'body' => "آپ کی :param2 ادائیگی کامیابی کے ساتھ طے ہو گئی۔\nآرڈر: :param1\nشکریہ، :param3۔\nSelldone",
        'icon' => 'ادائیگی',
        'description' => 'کامیاب ادائیگی کے بارے میں مطلع کرنے کے لیے خریداری کے گاہک کو پیغام بھیجیں۔',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ادائیگی قبول کریں۔',
        'sample' => "\$267 کی نئی ادائیگی کامیابی سے طے ہو گئی۔<br>Order: SM-425<br>Thanks, <b>آپ کے اسٹور کا نام</b>.<br>Selldone",
        'body' => "نئی :param2 ادائیگی کامیابی کے ساتھ طے ہو گئی۔\nآرڈر: :param1\nشکریہ، :param3۔\nSelldone",
        'icon' => 'ادائیگی',
        'description' => 'کامیاب ادائیگی کے بارے میں مطلع کرنے کے لیے دکان کے مالک کو پیغام بھیجیں۔',

    ],

    'vendor-new-order' => [
        'title' => 'وینڈر نیا آرڈر',
        'sample' => "آپ کو \$200 کا نیا آرڈر ملا ہے۔| SKU100001 |1x<br>✅ پروڈکٹ B| SKU100002 |1x",
        'body' => "آپ کو ایک نیا :param2 آرڈر موصول ہوا ہے۔\nآرڈر: :param3 کے لیے :param1۔\n:param4",
        'icon' => 'اسٹور فرنٹ',
        'description' => 'نئے آرڈر کے بارے میں مطلع کرنے کے لیے وینڈر کو پیغام بھیجیں۔',
    ],








    'shop-login' => [
        'title' => 'لاگ ان توثیقی کوڈ',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "آپ کا لاگ ان کوڈ ہے: :param1\n:param2\nSelldone",
        'icon' => 'لاگ ان',
        'description' => 'دکان میں لاگ ان کرنے کے لیے گاہک کو لاگ ان کوڈ بھیجیں۔',

    ],

    'user-login' => [
        'title' => 'لاگ ان کامیابی کا پیغام',
        'sample' => "محترم <b>Name</b>,<br> آپ نے <b>iPhone 165.250.300.1</b> سے <b>5/8/2021 پر اپنے اکاؤنٹ میں لاگ ان کیا ہے۔ 9:14AM</b>.<br>Selldone",
        'body' => "محترم :param1،\nآپ نے اپنے اکاؤنٹ میں :param2 کے ذریعے :param3 پر لاگ ان کیا ہے۔\nSelldone",
        'icon' => 'سسٹم_سیکیورٹی_اپ ڈیٹ_اچھا',
        'description' => 'گاہک کے دکان پر لاگ ان ہونے کے بعد ایک پیغام بھیجیں۔',

    ],

    'avocado-order-submit' => [
        'title' => 'ایوکاڈو نیا آرڈر خریدار کو بھیجا۔',
        'sample' => "<b> آپ کے اسٹور کا نام</b><br> پیارے <b> آپ کا نام</b>,<br> ہمیں آپ کا آرڈر موصول ہوا ہے اور ہم اس کا جائزہ لے رہے ہیں۔ <br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nمحترم :param1،\nہمیں آپ کا آرڈر مل گیا ہے اور ہم اس کا جائزہ لے رہے ہیں۔\nآرڈر #: :param2\nSelldone",
        'icon' => 'فیکٹ_چیک',
        'description' => 'ایوکاڈو آرڈر دینے کے بعد گاہک کو پیغام بھیجیں۔',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'ایوکاڈو نیا آرڈر بیچنے والے کو بھیجیں۔',
        'sample' => "آپ کو ایوکاڈو آرڈر موصول ہوا:<br>Store: <b>آپ کے اسٹور کا نام</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "آپ کو ایوکاڈو آرڈر موصول ہوا ہے:\nاسٹور: :param1\nخریدار: :param2\nآرڈر: :param3\nSelldone",
        'icon' => 'کیسے_کرنا_ریگ',
        'description' => 'نئے ایوکاڈو آرڈر حاصل کرنے کے بارے میں مطلع کرنے کے لیے دکان کے مالک کو پیغام بھیجیں۔',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'ایوکاڈو آرڈر ادا کرنے کے لیے تیار ہے۔',
        'sample' => "<b> آپ کے اسٹور کا نام</b><br> آپ کے آرڈر کی تصدیق ہوگئی ہے اور درج ذیل لنک کے ذریعے ادائیگی کی جاسکتی ہے۔ <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nآپ کے آرڈر کی تصدیق ہو گئی ہے اور درج ذیل لنک کے ذریعے ادائیگی کی جا سکتی ہے۔\nآرڈر #: :param2\nلنک: :param1\nSelldone",
        'icon' => 'رسید',
        'description' => 'بیچنے والے کی جانب سے قیمت مقرر کرنے کے بعد ادائیگی کے لنک کے ساتھ ایک پیغام بھیجیں اور ان کے ایوکاڈو آرڈر کی تصدیق کریں۔',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'آرڈر بھیجنے کے لیے تیار ہے۔',
        'sample' => "ہیلو <b>Alex</b>، اچھی خبر، آپ کا آرڈر اب بھیجنے کے لیے تیار ہے۔ <br>Order: <b>SM-123</b>",
        'body' => "ہیلو :param4، اچھی خبر، آپ کا آرڈر اب بھیجنے کے لیے تیار ہے۔\nآرڈر: :param1",
        'icon' => 'مقامی_شپنگ',
        'description' => 'گاہک کو یہ بتانے کے لیے پیغام بھیجیں کہ ان کا آرڈر بھیجنے کے لیے تیار ہے۔',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'آرڈر لینے کے لیے تیار ہے۔',
        'sample' => "ہیلو ایلکس، اچھی خبر، آپ کا آرڈر اب لینے کے لیے تیار ہے۔<br>Order: <b>SM-123</b>",
        'body' => "ہیلو :param4، اچھی خبر، اب آپ کا آرڈر لینے کے لیے تیار ہے۔\nآرڈر: :param1",
        'icon' => 'share_location',
        'description' => 'گاہک کو پیغام بھیجیں کہ انہیں مطلع کریں کہ ان کا آرڈر لینے کے لیے تیار ہے۔',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'وینڈر آرڈر بھیجنے کے لیے تیار ہے۔',
        'sample' => "ہیلو <b>Alex</b>، اچھی خبر، آپ کا آرڈر اب بھیجنے کے لیے تیار ہے۔ <br>Order: <b>SM-123</b>",
        'body' => "ہیلو :param4، اچھی خبر، آپ کا آرڈر اب بھیجنے کے لیے تیار ہے۔\nآرڈر: :param1",
        'icon' => 'مقامی_شپنگ',
        'description' => 'گاہک کو یہ بتانے کے لیے پیغام بھیجیں کہ ان کا آرڈر بھیجنے کے لیے تیار ہے۔ براہ راست شپنگ موڈ کے ساتھ بازار میں اور ترسیل کی قسم پک اپ نہیں ہے۔',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'وینڈر آرڈر لینے کے لیے تیار ہے۔',
        'sample' => "ہیلو ایلکس، اچھی خبر، آپ کا آرڈر اب لینے کے لیے تیار ہے۔<br>Order: <b>SM-123</b>",
        'body' => "ہیلو :param4، اچھی خبر، اب آپ کا آرڈر لینے کے لیے تیار ہے۔\nآرڈر: :param1",
        'icon' => 'share_location',
        'description' => 'گاہک کو پیغام بھیجیں کہ انہیں مطلع کریں کہ ان کا آرڈر لینے کے لیے تیار ہے۔ براہ راست شپنگ موڈ کے ساتھ بازار میں اور ڈیلیوری کی قسم پک اپ ہے۔',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'آرڈر آئٹمز کی تصدیق',
        'sample' => "ہیلو ایلکس، ہم نے آپ کے آرڈر کا جائزہ لیا ہے۔ آپ کے آئٹمز کی تصدیق کی حیثیت یہ ہے:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ہیلو :param4، ہم نے آپ کے آرڈر کا جائزہ لیا ہے۔ آپ کے آئٹمز کی تصدیق کی حیثیت یہ ہے:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'کسٹمر کو ان کے آرڈر میں موجود اشیاء کے بارے میں مطلع کرتا ہے جنہیں بیچنے والے نے قبول یا مسترد کر دیا ہے۔',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'وینڈر آرڈر آئٹمز کی تصدیق',
        'sample' => "ہیلو ایلکس، ہم نے آپ کے آرڈر کا جائزہ لیا ہے۔ آپ کے آئٹمز کی تصدیق کی حیثیت یہ ہے:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ہیلو :param4، ہم نے آپ کے آرڈر کا جائزہ لیا ہے۔ آپ کے آئٹمز کی تصدیق کی حیثیت یہ ہے:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'گاہک کو ان کے آرڈر میں موجود اشیاء کے بارے میں مطلع کرتا ہے جنہیں وینڈر نے قبول یا مسترد کر دیا ہے۔',
    ],



];
