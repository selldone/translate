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
        'title' => 'Ödemeyi kabul et',
        'sample' => "267 ABD doları tutarındaki ödemeniz başarıyla tamamlandı.<br>Sipariş: SM-425<br>Teşekkürler, <b>Mağaza adınız</b>.<br>Selldone",
        'body' => ":param2 ödemeniz başarıyla tamamlandı.\nSipariş: :param1\nTeşekkürler :param3.\nSelldone",
        'icon' => 'ödeme',
        'description' => 'Başarılı ödeme hakkında bilgi vermek için mağaza müşterisine mesaj gönderin.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Ödemeyi kabul et',
        'sample' => "267 dolarlık yeni ödeme başarıyla tamamlandı.<br>Sipariş: SM-425<br>Teşekkürler, <b>Mağazanızın adı</b>.<br>Selldone",
        'body' => "Yeni :param2 ödemesi başarıyla yapıldı.\nSipariş: :param1\nTeşekkürler :param3.\nSelldone",
        'icon' => 'ödeme',
        'description' => 'Ödemenizin başarılı olduğunu mağaza sahibine bildirmek için mesaj gönderin.',

    ],

    'vendor-new-order' => [
        'title' => 'Satıcı Yeni Sipariş',
        'sample' => "200 ABD doları tutarında yeni bir sipariş aldınız.<br>Sipariş: <b>SM-870</b>, <b>Satıcı adı</b>.<br>✅ Ürün A| SKU100001 |1x<br>✅ Ürün B| SKU100002 |1x",
        'body' => "Yeni bir :param2 siparişi aldınız.\nSipariş: :param3 için :param1.\n:param4",
        'icon' => 'vitrin',
        'description' => 'Yeni bir sipariş hakkında satıcıya bilgi vermek için bir mesaj gönderin.',
    ],








    'shop-login' => [
        'title' => 'Giriş doğrulama kodu',
        'sample' => "Giriş kodunuz: <b>123456</b><br><b>Mağaza adınız</b><br>Selldone",
        'body' => "Giriş kodunuz: :param1\n:param2\nSelldone",
        'icon' => 'giriş yap',
        'description' => 'Müşteriye mağazaya giriş yapabilmesi için giriş kodunu gönderin.',

    ],

    'user-login' => [
        'title' => 'Giriş Başarı Mesajı',
        'sample' => "Sayın <b>Name</b>,<br><b>iPhone 165.250.300.1</b> ile <b>5/8/2021 9:14AM</b>.<br>Selldone tarihinde hesabınıza giriş yaptınız.",
        'body' => "Sayın :param1,\nHesabınıza :param2 ile :param3 adresinden giriş yaptınız.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Müşteri mağazaya giriş yaptıktan sonra mesaj gönder.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokado yeni sipariş gönderildi alıcıya gönder',
        'sample' => "<b>Mağaza adınız</b><br>Sevgili <b>Adınız</b>,<br>Siparişinizi aldık ve inceliyoruz.<br>Sipariş #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nSayın :param1,\nSiparişinizi aldık ve inceliyoruz.\nSipariş No: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Avokado siparişi verdikten sonra müşteriye bir mesaj gönderin.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado satıcıya yeni sipariş gönder',
        'sample' => "Bir Avokado siparişi aldınız:<br>Mağaza: <b>Mağazanızın adı</b><br>Alıcı: <b>Alıcı adı</b><br>Sipariş: <b>AVO-246</b><br>Selldone",
        'body' => "Bir Avokado siparişi aldınız:\nMağaza: :param1\nAlıcı: :param2\nSipariş: :param3\nSelldone",
        'icon' => 'nasıl_to_reg',
        'description' => 'Yeni Avokado siparişinizi aldığınızı mağaza sahibine bildirmek için bir mesaj gönderin.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokado siparişi ödemeye hazır',
        'sample' => "<b>Mağaza adınız</b><br>Siparişiniz onaylandı ve aşağıdaki bağlantıdan ödeme yapabilirsiniz.<br>Sipariş No: <b>AVO-246</b><br>Bağlantı: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nSiparişiniz onaylanmıştır ve aşağıdaki bağlantıdan ödeme yapabilirsiniz.\nSipariş No: :param2\nBağlantı: :param1\nSelldone",
        'icon' => 'makbuz',
        'description' => 'Satıcı maliyeti belirledikten ve Avokado siparişini onayladıktan sonra müşteriye ödeme bağlantısını içeren bir mesaj gönderin.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Sipariş gönderilmeye hazır',
        'sample' => "Merhaba <b>Alex</b>, iyi haber, siparişiniz artık gönderilmeye hazır.<br>Sipariş: <b>SM-123</b>",
        'body' => "Merhaba :param4, iyi haber, siparişiniz artık gönderilmeye hazır.\nSipariş: :param1",
        'icon' => 'local_shipping',
        'description' => 'Müşteriye, siparişinin gönderilmeye hazır olduğunu bildiren bir mesaj gönderin.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Sipariş teslim alınmaya hazır',
        'sample' => "Merhaba Alex, güzel haber, siparişin artık teslim alınmaya hazır.<br>Sipariş: <b>SM-123</b>",
        'body' => "Merhaba :param4, iyi haber, siparişiniz artık teslim alınmaya hazır.\nSipariş: :param1",
        'icon' => 'paylaşım_konumu',
        'description' => 'Müşteriye, siparişinin teslim alınmaya hazır olduğunu bildiren bir mesaj gönderin.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Satıcının siparişi gönderilmeye hazır',
        'sample' => "Merhaba <b>Alex</b>, iyi haber, siparişiniz artık gönderilmeye hazır.<br>Sipariş: <b>SM-123</b>",
        'body' => "Merhaba :param4, iyi haber, siparişiniz artık gönderilmeye hazır.\nSipariş: :param1",
        'icon' => 'local_shipping',
        'description' => 'Müşteriye, siparişinin gönderilmeye hazır olduğunu bildiren bir mesaj gönderin. Doğrudan Gönderim Modu ile sadece pazar yerinde ve teslim şekli Teslim Alma değildir.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Satıcı siparişi teslim alınmaya hazır',
        'sample' => "Merhaba Alex, güzel haber, siparişin artık teslim alınmaya hazır.<br>Sipariş: <b>SM-123</b>",
        'body' => "Merhaba :param4, iyi haber, siparişiniz artık teslim alınmaya hazır.\nSipariş: :param1",
        'icon' => 'paylaşım_konumu',
        'description' => 'Müşteriye, siparişinin teslim alınmaya hazır olduğunu bildiren bir mesaj gönderin. Doğrudan Gönderim Modu ile sadece pazaryerinde ve teslimat türü Teslim Almadır.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Sipariş Öğeleri Onayı',
        'sample' => "Merhaba Alex, siparişinizi inceledik. Öğelerinizin onay durumu şu şekildedir:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Merhaba :param4, siparişinizi inceledik. Öğelerinizin onay durumu aşağıdadır:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'atama_turned_in',
        'description' => 'Müşteriye, siparişindeki satıcı tarafından kabul edilen veya reddedilen ürünler hakkında bilgi verir.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Satıcı Sipariş Öğeleri Onayı',
        'sample' => "Merhaba Alex, siparişinizi inceledik. Öğelerinizin onay durumu şu şekildedir:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Merhaba :param4, siparişinizi inceledik. Öğelerinizin onay durumu aşağıdadır:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'atama_turned_in',
        'description' => 'Siparişindeki satıcı tarafından kabul edilen veya reddedilen ürünler hakkında müşteriye bilgi verir.',
    ],



];
