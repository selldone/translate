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
        'title' => 'Ödənişi qəbul edin',
        'sample' => "267\$ ödənişiniz uğurla yerinə yetirildi.<br> Sifariş: SM-425<br> Təşəkkürlər, <b>Mağazanızın adı</b> .<br> Selldone",
        'body' => ":param2 ödənişiniz uğurla yerinə yetirildi.\nSifariş: :param1\nTəşəkkürlər, :param3.\nSelldone",
        'icon' => 'ödəniş',
        'description' => 'Müvəffəqiyyətli ödəniş haqqında məlumat vermək üçün mağaza müştərisinə mesaj göndərin.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Ödənişi qəbul edin',
        'sample' => "Yeni 267\$ ödəniş uğurla yerinə yetirildi.<br> Sifariş: SM-425<br> Təşəkkürlər, <b>Mağazanızın adı</b> .<br> Selldone",
        'body' => "Yeni :param2 ödənişi uğurla həyata keçirilib.\nSifariş: :param1\nTəşəkkürlər, :param3.\nSelldone",
        'icon' => 'ödəniş',
        'description' => 'Uğurlu ödəniş haqqında məlumat vermək üçün mağaza sahibinə mesaj göndərin.',

    ],

    'vendor-new-order' => [
        'title' => 'Satıcı Yeni Sifariş',
        'sample' => "Siz 200\$-lıq yeni sifariş aldınız.<br>Sifariş: <b> üçün <b>SM-870</b> Təchizatçı adı</b>.<br>✅ Məhsul A| SKU100001 |1x<br>✅ Məhsul B| SKU100002 |1x",
        'body' => "Yeni :param2 sifarişi aldınız.\nSifariş: :param3 üçün :param1.\n:param4",
        'icon' => 'vitrin',
        'description' => 'Satıcıya yeni sifariş barədə məlumat vermək üçün mesaj göndərin.',
    ],








    'shop-login' => [
        'title' => 'Giriş doğrulama kodu',
        'sample' => "Giriş kodunuz: <b>123456</b><br> <b>Mağazanızın adı</b><br> Selldone",
        'body' => "Giriş kodunuz: :param1\n:param2\nSelldone",
        'icon' => 'daxil olun',
        'description' => 'Mağazaya daxil olmaq üçün müştəriyə giriş kodunu göndərin.',

    ],

    'user-login' => [
        'title' => 'Giriş Uğur Mesajı',
        'sample' => "Hörmətli <b>Ad</b> ,<br> Siz <b>iPhone 165.250.300.1 vasitəsilə</b> <b>08.05.2021 9</b> :14-də hesabınıza daxil olmusunuz.<br> Selldone",
        'body' => "Hörmətli :param1,\nSiz :param2 ilə :param3 ünvanında hesabınıza daxil olmusunuz.\nSelldone",
        'icon' => 'sistem_təhlükəsizliyi_yeniləmə_yaxşı',
        'description' => 'Müştəri mağazaya daxil olduqdan sonra mesaj göndərin.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokado yeni sifarişi alıcıya göndərin',
        'sample' => "<b>Mağazanızın adı</b><br> Hörmətli <b>adın</b> ,<br> Sifarişinizi aldıq və onu nəzərdən keçiririk.<br> Sifariş №: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nHörmətli :param1,\nSifarişinizi aldıq və onu nəzərdən keçiririk.\nSifariş №: :param2\nSelldone",
        'icon' => 'fakt_yoxlanışı',
        'description' => 'Avokado sifarişi verdikdən sonra müştəriyə mesaj göndərin.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado satıcıya yeni sifariş göndərir',
        'sample' => "Siz avokado sifarişi aldınız:<br> Mağaza: <b>Mağazanızın adı</b><br> Alıcı: <b>Alıcının adı</b><br> Sifariş: <b>AVO-246</b><br> Selldone",
        'body' => "Avokado sifarişi aldınız:\nMağaza: :param1\nAlıcı: :param2\nSifariş: :param3\nSelldone",
        'icon' => 'necə_reg',
        'description' => 'Yeni Avokado sifarişi alması barədə məlumat vermək üçün mağaza sahibinə mesaj göndərin.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokado sifarişi ödəməyə hazırdır',
        'sample' => "<b>Mağazanızın adı</b><br> Sifarişiniz təsdiqləndi və aşağıdakı link vasitəsilə ödəniş edə bilərsiniz.<br> Sifariş №: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nSifarişiniz təsdiqləndi və ödənişi aşağıdakı link vasitəsilə həyata keçirə bilərsiniz.\nSifariş №: :param2\nƏlaqə: :param1\nSelldone",
        'icon' => 'qəbz',
        'description' => 'Satıcı dəyəri təyin etdikdən sonra müştəriyə ödəniş linki ilə mesaj göndərin və Avokado sifarişini təsdiqləyin.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Sifariş göndərilməyə hazırdır',
        'sample' => "Salam <b>Alex</b>, yaxşı xəbər, sifarişiniz artıq göndərilməyə hazırdır.<br>Sifariş: <b>SM-123</b>",
        'body' => "Salam :param4, yaxşı xəbər, sifarişiniz artıq göndərilməyə hazırdır.\nSifariş: :param1",
        'icon' => 'yerli_göndərmə',
        'description' => 'Sifarişinin göndərilməyə hazır olduğunu bildirmək üçün müştəriyə mesaj göndərin.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Sifariş götürməyə hazırdır',
        'sample' => "Salam Alex, yaxşı xəbər, sifarişiniz artıq götürülməyə hazırdır.<br>Sifariş: <b>SM-123</b>",
        'body' => "Salam :param4, yaxşı xəbər, sifarişiniz artıq götürülməyə hazırdır.\nSifariş: :param1",
        'icon' => 'paylaşma_yeri',
        'description' => 'Sifarişinin götürülməyə hazır olduğunu bildirmək üçün müştəriyə mesaj göndərin.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Satıcı sifarişi göndərilməyə hazırdır',
        'sample' => "Salam <b>Alex</b>, yaxşı xəbər, sifarişiniz artıq göndərilməyə hazırdır.<br>Sifariş: <b>SM-123</b>",
        'body' => "Salam :param4, yaxşı xəbər, sifarişiniz artıq göndərilməyə hazırdır.\nSifariş: :param1",
        'icon' => 'yerli_göndərmə',
        'description' => 'Sifarişinin göndərilməyə hazır olduğunu bildirmək üçün müştəriyə mesaj göndərin. Yalnız Birbaşa Göndərmə Rejimi ilə bazarda və çatdırılma növü Göndərmə deyil.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Satıcı sifarişi götürməyə hazırdır',
        'sample' => "Salam Alex, yaxşı xəbər, sifarişiniz artıq götürülməyə hazırdır.<br>Sifariş: <b>SM-123</b>",
        'body' => "Salam :param4, yaxşı xəbər, sifarişiniz artıq götürülməyə hazırdır.\nSifariş: :param1",
        'icon' => 'paylaşma_yeri',
        'description' => 'Sifarişinin götürülməyə hazır olduğunu bildirmək üçün müştəriyə mesaj göndərin. Birbaşa Göndərmə Rejimi ilə bazarda və çatdırılma növü Pikapdır.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Sifarişlərin Təsdiqlənməsi',
        'sample' => "Salam Alex, sifarişinizi nəzərdən keçirdik. Elementlərinizin təsdiq statusu budur:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Salam :param4, biz sifarişinizi nəzərdən keçirdik. Elementləriniz üçün təsdiq statusu budur:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'tapşırıldı',
        'description' => 'Sifarişində satıcı tərəfindən qəbul edilmiş və ya rədd edilmiş əşyalar barədə müştəriyə məlumat verir.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Satıcı Sifarişlərinin Təsdiqi',
        'sample' => "Salam Alex, sifarişinizi nəzərdən keçirdik. Elementlərinizin təsdiq statusu budur:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Salam :param4, biz sifarişinizi nəzərdən keçirdik. Elementləriniz üçün təsdiq statusu budur:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'tapşırıldı',
        'description' => 'Satıcı tərəfindən qəbul edilmiş və ya rədd edilmiş sifarişlər haqqında müştəriyə məlumat verir.',
    ],



];
