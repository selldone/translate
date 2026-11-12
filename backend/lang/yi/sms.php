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
        'title' => 'אָננעמען צאָלונג',
        'sample' => "דיין \$ 267 צאָלונג איז געווען סאַלווד הצלחה.",
        'body' => "דיין :param2 צאָלונג איז געווען געזעצט הצלחה.\nסדר: :param1\nדאַנקען, :param3.\nSelldone",
        'icon' => 'צאָלונג',
        'description' => 'שיקן אַ אָנזאָג צו קראָם קונה צו מיטטיילן וועגן געראָטן צאָלונג.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'אָננעמען צאָלונג',
        'sample' => "נייַ \$ 267 צאָלונג איז געווען געזעצט הצלחה.",
        'body' => "ניו :param2 צאָלונג איז געווען געזעצט הצלחה.\nסדר: :param1\nדאַנקען, :param3.\nSelldone",
        'icon' => 'צאָלונג',
        'description' => 'שיקן אַ אָנזאָג צו די קראָם באַזיצער צו מיטטיילן זיי וועגן מצליח צאָלונג.',

    ],

    'vendor-new-order' => [
        'title' => 'פאַרקויפער ניו אָרדער',
        'sample' => "איר האָט באַקומען אַ נייַע סדר פון \$ 200. <br> סדר: <b>SM-870</b> פֿאַר <b>| SKU100001 |1x<br>✅ פּראָדוקט ב| SKU100002 |1x",
        'body' => "איר האָט באַקומען אַ נייַע :param2 סדר.\nסדר: :param1 פֿאַר :param3.\n:param4",
        'icon' => 'סטאָרפראַנט',
        'description' => 'שיקן אַ אָנזאָג צו די פאַרקויפער צו מיטטיילן זיי וועגן אַ נייַע סדר.',
    ],








    'shop-login' => [
        'title' => 'לאָגין וועראַפאַקיישאַן קאָד',
        'sample' => "דיין לאָגין קאָד איז: <b>123456</b><br><b> דיין קראָם נאָמען</b><br>Selldone",
        'body' => "דיין לאָגין קאָד איז: :param1\n:param2\nSelldone",
        'icon' => 'לאָגין',
        'description' => 'שיקן לאָגין קאָד צו דער קונה צו קלאָץ אין צו די קראָם.',

    ],

    'user-login' => [
        'title' => 'לאָגין הצלחה אָנזאָג',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "ליב :param1,\nאיר האָט לאָגד אין דיין חשבון דורך :param2 ביי :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'שיקן אַ אָנזאָג נאָך דער קונה לאָגין צו די קראָם.',

    ],

    'avocado-order-submit' => [
        'title' => 'אַוואָקאַדאָ נייַ סדר דערלאנגט צו קוינע',
        'sample' => "<b> דיין קראָם נאָמען</b><br> ליב <b>דיין נאָמען</b>,<br>מיר האָבן באקומען דיין סדר און מיר ריוויו עס.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nליב :param1,\nמיר האָבן באקומען דיין סדר און מיר זענען ריוויוינג עס.\nסדר נומער: :param2\nSelldone",
        'icon' => 'פאַקט_טשעק',
        'description' => 'שיקן אַ אָנזאָג צו דער קונה נאָך פּלייסינג אַ אַוואָקאַדאָ סדר.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'אַוואָקאַדאָ באַקומען נייַ סדר שיקן צו טרעגער',
        'sample' => "איר האָט באַקומען אַן אַוואָקאַדאָ סדר: <br>Store: <b>דיין קראָם נאָמען</b><br>Buyer: <b>בויער נאָמען</b><br>סדר: <b>AVO-246</b><br>Selldone",
        'body' => "איר האָט באַקומען אַן אַוואָקאַדאָ סדר:\nקראָם: :param1\nקוינע: :param2\nסדר: :param3\nSelldone",
        'icon' => 'ווי_צו_רעגירן',
        'description' => 'שיקן אַ אָנזאָג צו די קראָם באַזיצער צו מיטטיילן זיי וועגן ריסיווינג אַ נייַ אַוואָקאַדאָ סדר.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'אַוואָקאַדאָ סדר גרייט צו באַצאָלן',
        'sample' => "<b> דיין קראָם נאָמען</b><br> דיין סדר איז באשטעטיקט און קענען זיין באַצאָלט דורך די פאלגענדע לינק.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nדיין סדר איז באשטעטיקט און קענען זיין באַצאָלט דורך די פאלגענדע לינק.\nסדר נומער: :param2\nלינק: :param1\nSelldone",
        'icon' => 'קאַבאָלע',
        'description' => 'שיקן אַ אָנזאָג מיט די צאָלונג לינק צו דער קונה נאָך די טרעגער שטעלן פּרייַז און באַשטעטיקן זייער אַוואָקאַדאָ סדר.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'סדר גרייט צו שיקן',
        'sample' => "הי <b>Alex</b>, גוט נייַעס, דיין סדר איז איצט גרייט צו זיין שיפּט.<br>Order: <b>SM-123</b>",
        'body' => "הי :param4, גוט נייַעס, דיין סדר איז איצט גרייט צו זיין שיפּט.\nסדר: :param1",
        'icon' => 'local_shipping',
        'description' => 'שיקן אַ אָנזאָג צו דער קונה צו מיטטיילן זיי אַז זייער סדר איז גרייט צו זיין שיפּט.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'סדר גרייט צו קויפן',
        'sample' => "העלא אַלעקס, גוט נייַעס, דיין סדר איז איצט גרייט צו זיין פּיקט אַרויף.<br>Order: <b>SM-123</b>",
        'body' => "הי :param4, גוט נייַעס, דיין סדר איז איצט גרייט צו זיין פּיקט אַרויף.\nסדר: :param1",
        'icon' => 'share_location',
        'description' => 'שיקן אַ אָנזאָג צו דער קונה צו מיטטיילן זיי אַז זייער סדר איז גרייט צו זיין פּיקט אַרויף.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'פאַרקויפער סדר גרייט צו שיקן',
        'sample' => "הי <b>Alex</b>, גוט נייַעס, דיין סדר איז איצט גרייט צו זיין שיפּט.<br>Order: <b>SM-123</b>",
        'body' => "הי :param4, גוט נייַעס, דיין סדר איז איצט גרייט צו זיין שיפּט.\nסדר: :param1",
        'icon' => 'local_shipping',
        'description' => 'שיקן אַ אָנזאָג צו דער קונה צו מיטטיילן זיי אַז זייער סדר איז גרייט צו זיין שיפּט. נאָר אין מאַרק מיט דירעקט שיפּינג מאָדע און עקספּרעס טיפּ איז נישט פּיקאַפּ.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'פאַרקויפער סדר גרייט צו קויפן',
        'sample' => "העלא אַלעקס, גוט נייַעס, דיין סדר איז איצט גרייט צו זיין פּיקט אַרויף.<br>Order: <b>SM-123</b>",
        'body' => "הי :param4, גוט נייַעס, דיין סדר איז איצט גרייט צו זיין פּיקט אַרויף.\nסדר: :param1",
        'icon' => 'share_location',
        'description' => 'שיקן אַ אָנזאָג צו דער קונה צו מיטטיילן זיי אַז זייער סדר איז גרייט צו זיין פּיקט אַרויף. פּונקט אין מאַרק מיט דירעקט שיפּינג מאָדע און עקספּרעס טיפּ איז פּיקאַפּ.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'סדר יטעמס באַשטעטיקונג',
        'sample' => "העלא אַלעקס, מיר האָבן ריוויוד דיין סדר. דאָ איז די באַשטעטיקונג סטאַטוס פֿאַר דיין זאכן: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "העלא :param4, מיר האָבן ריוויוד דיין סדר. דאָ איז די באַשטעטיקונג סטאַטוס פֿאַר דיין זאכן:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'נאָוטאַפייז דער קונה וועגן די זאכן אין זייער סדר וואָס זענען אנגענומען אָדער פארווארפן דורך די טרעגער.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'פאַרקויפער סדר יטעמס באַשטעטיקונג',
        'sample' => "העלא אַלעקס, מיר האָבן ריוויוד דיין סדר. דאָ איז די באַשטעטיקונג סטאַטוס פֿאַר דיין זאכן: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "העלא :param4, מיר האָבן ריוויוד דיין סדר. דאָ איז די באַשטעטיקונג סטאַטוס פֿאַר דיין זאכן:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'נאָוטאַפייז דער קונה וועגן די זאכן אין זייער סדר וואָס זענען אנגענומען אָדער פארווארפן דורך די פאַרקויפער.',
    ],



];
