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
        'title' => 'قبول الدفع',
        'sample' => "تمت تسوية دفعتك البالغة 267 دولارًا بنجاح.<br>الطلب: SM-425<br> شكرًا، <b>اسم متجرك</b>.<br>Selldone",
        'body' => "تمت تسوية دفعتك :param2 بنجاح.\nالطلب: :param1\nشكرا، :param3.\nSelldone",
        'icon' => 'الدفع',
        'description' => 'إرسال رسالة إلى عميل المتجر لإبلاغه بنجاح الدفع.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'قبول الدفع',
        'sample' => "تمت تسوية الدفعة الجديدة البالغة 267 دولارًا بنجاح.<br>الطلب: SM-425<br> شكرًا، <b>اسم متجرك</b>.<br>Selldone",
        'body' => "تمت تسوية دفعة :param2 الجديدة بنجاح.\nالطلب: :param1\nشكرا، :param3.\nSelldone",
        'icon' => 'الدفع',
        'description' => 'أرسل رسالة إلى صاحب المتجر لإبلاغه بنجاح الدفع.',

    ],

    'vendor-new-order' => [
        'title' => 'البائع طلب جديد',
        'sample' => "لقد تلقيت طلبًا جديدًا بقيمة 200 دولار.<br>Order: <b>SM-870</b> لـ <b> اسم البائع</b>.<br> ✅ المنتج أ| SKU100001 |1x<br> ✅ المنتج ب| SKU100002 |1x",
        'body' => "لقد تلقيت طلب :param2 جديد.\nالترتيب: :param1 لـ :param3.\n:param4",
        'icon' => 'واجهة المتجر',
        'description' => 'إرسال رسالة إلى البائع لإبلاغه بطلب جديد.',
    ],








    'shop-login' => [
        'title' => 'رمز التحقق من تسجيل الدخول',
        'sample' => "رمز تسجيل الدخول الخاص بك هو: <b>123456</b><br><b>اسم متجرك</b><br>Selldone",
        'body' => "رمز تسجيل الدخول الخاص بك هو: :param1\n:param2\nSelldone",
        'icon' => 'تسجيل الدخول',
        'description' => 'إرسال رمز الدخول إلى العميل لتسجيل الدخول إلى المتجر.',

    ],

    'user-login' => [
        'title' => 'رسالة نجاح تسجيل الدخول',
        'sample' => "عزيزي <b>Name</b>,<br> لقد قمت بتسجيل الدخول إلى حسابك عن طريق <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "عزيزي :param1،\nلقد قمت بتسجيل الدخول إلى حسابك عن طريق :param2 على :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'إرسال رسالة بعد تسجيل دخول العميل إلى المتجر.',

    ],

    'avocado-order-submit' => [
        'title' => 'تم إرسال طلب الأفوكادو الجديد إلى المشتري',
        'sample' => "<b>اسم متجرك</b><br>عزيزي <b>اسمك</b>,<br>لقد استلمنا طلبك ونحن نقوم بمراجعته.<br>رقم الطلب: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nعزيزي :param1،\nلقد تلقينا طلبك ونقوم بمراجعته.\nرقم الطلب: :param2\nSelldone",
        'icon' => 'Fact_check',
        'description' => 'إرسال رسالة إلى العميل بعد تقديم طلب الأفوكادو.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'الأفوكادو تتلقى طلبية جديدة ترسل إلى البائع',
        'sample' => "لقد تلقيت طلب أفوكادو: <br>المتجر: <b>اسم متجرك</b><br>المشتري: <b>اسم المشتري</b><br>الطلب: <b>AVO-246</b><br>Selldone",
        'body' => "لقد تلقيت طلب الأفوكادو:\nالمتجر: :param1\nالمشتري: :param2\nالطلب: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'أرسل رسالة إلى صاحب المتجر لإبلاغه بتلقي طلب أفوكادو جديد.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'طلب الأفوكادو جاهز للدفع',
        'sample' => "<b>اسم متجرك</b><br>تم تأكيد طلبك ويمكن الدفع من خلال الرابط التالي.<br>رقم الطلب: <b>AVO-246</b><br>الرابط: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nلقد تم تأكيد طلبك ويمكن الدفع من خلال الرابط التالي.\nرقم الطلب: :param2\nالرابط: :param1\nSelldone",
        'icon' => 'إيصال',
        'description' => 'أرسل رسالة تحتوي على رابط الدفع إلى العميل بعد أن يحدد البائع التكلفة ويؤكد طلب الأفوكادو الخاص به.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'الطلب جاهز للشحن',
        'sample' => "مرحبًا <b>Alex</b>، أخبار جيدة، طلبك الآن جاهز للشحن.<br>Order: <b>SM-123</b>",
        'body' => "مرحبًا :param4، أخبار جيدة، طلبك الآن جاهز للشحن.\nالطلب: :param1",
        'icon' => 'local_shipping',
        'description' => 'إرسال رسالة إلى العميل لإبلاغه بأن طلبه جاهز للشحن.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'الطلب جاهز للاستلام',
        'sample' => "مرحبًا أليكس، أخبار جيدة، طلبك الآن جاهز للاستلام.<br>Order: <b>SM-123</b>",
        'body' => "مرحبًا :param4، أخبار جيدة، طلبك الآن جاهز للاستلام.\nالطلب: :param1",
        'icon' => 'share_location',
        'description' => 'أرسل رسالة إلى العميل لإبلاغه بأن طلبه جاهز للاستلام.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'طلبية البائع جاهزة للشحن',
        'sample' => "مرحبًا <b>Alex</b>، أخبار جيدة، طلبك الآن جاهز للشحن.<br>Order: <b>SM-123</b>",
        'body' => "مرحبًا :param4، أخبار جيدة، طلبك الآن جاهز للشحن.\nالطلب: :param1",
        'icon' => 'local_shipping',
        'description' => 'إرسال رسالة إلى العميل لإبلاغه بأن طلبه جاهز للشحن. فقط في السوق مع وضع الشحن المباشر ونوع التسليم ليس بيك اب.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'أمر البائع جاهز للاستلام',
        'sample' => "مرحبًا أليكس، أخبار جيدة، طلبك الآن جاهز للاستلام.<br>Order: <b>SM-123</b>",
        'body' => "مرحبًا :param4، أخبار جيدة، طلبك الآن جاهز للاستلام.\nالطلب: :param1",
        'icon' => 'share_location',
        'description' => 'أرسل رسالة إلى العميل لإبلاغه بأن طلبه جاهز للاستلام. فقط في السوق مع وضع الشحن المباشر ونوع التسليم هو الاستلام.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'تأكيد عناصر الطلب',
        'sample' => "مرحبًا أليكس، لقد قمنا بمراجعة طلبك. فيما يلي حالة التأكيد لعناصرك:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "مرحبًا :param4، لقد قمنا بمراجعة طلبك. فيما يلي حالة التأكيد لعناصرك:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'مهمة_تحول_في',
        'description' => 'إخطار العميل بالعناصر الموجودة في طلبه والتي تم قبولها أو رفضها من قبل البائع.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'تأكيد عناصر طلب البائع',
        'sample' => "مرحبًا أليكس، لقد قمنا بمراجعة طلبك. فيما يلي حالة التأكيد لعناصرك:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "مرحبًا :param4، لقد قمنا بمراجعة طلبك. فيما يلي حالة التأكيد لعناصرك:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'مهمة_تحول_في',
        'description' => 'إخطار العميل بالعناصر الموجودة في طلبه والتي تم قبولها أو رفضها من قبل البائع.',
    ],



];
