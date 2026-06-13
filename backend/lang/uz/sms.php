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
        'title' => 'To\'lovni qabul qiling',
        'sample' => "267\$ toʻlovingiz muvaffaqiyatli amalga oshirildi.<br> Buyurtma: SM-425<br> Rahmat, <b>do'koningiz nomi</b> .<br> Selldone",
        'body' => ":param2 toʻlovingiz muvaffaqiyatli amalga oshirildi.\nBuyurtma: :param1\nRahmat, :param3.\nSelldone",
        'icon' => 'to\'lov',
        'description' => 'Muvaffaqiyatli to\'lov haqida xabar berish uchun do\'kon mijoziga xabar yuboring.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'To\'lovni qabul qiling',
        'sample' => "Yangi 267\$ toʻlov muvaffaqiyatli amalga oshirildi.<br> Buyurtma: SM-425<br> Rahmat, <b>do'koningiz nomi</b> .<br> Selldone",
        'body' => "Yangi :param2 to'lovi muvaffaqiyatli amalga oshirildi.\nBuyurtma: :param1\nRahmat, :param3.\nSelldone",
        'icon' => 'to\'lov',
        'description' => 'Muvaffaqiyatli to\'lov haqida xabar berish uchun do\'kon egasiga xabar yuboring.',

    ],

    'vendor-new-order' => [
        'title' => 'Sotuvchining yangi buyurtmasi',
        'sample' => "Siz yangi \$200 buyurtma oldingiz.<br>Buyurtma: <b> uchun <b>SM-870</b> Sotuvchi nomi</b>.<br>✅ Mahsulot A| SKU100001 |1x<br>✅ Mahsulot B| SKU100002 |1x",
        'body' => "Siz yangi :param2 buyurtma oldingiz.\nBuyurtma: :param3 uchun :param1.\n:param4",
        'icon' => 'do\'kon vitrini',
        'description' => 'Sotuvchiga yangi buyurtma haqida xabar berish uchun xabar yuboring.',
    ],








    'shop-login' => [
        'title' => 'Kirish tasdiqlash kodi',
        'sample' => "Sizning login kodingiz: <b>123456</b><br> <b>Sizning do'koningiz nomi</b><br> Selldone",
        'body' => "Sizning login kodingiz: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Do\'konga kirish uchun mijozga login kodini yuboring.',

    ],

    'user-login' => [
        'title' => 'Kirish muvaffaqiyati haqida xabar',
        'sample' => "Hurmatli <b>ism</b> ,<br> Siz <b>iPhone 165.250.300.1</b> orqali hisobingizga <b>08.05.2021 9:14</b> da kirgansiz.<br> Selldone",
        'body' => "Hurmatli :param1,\nHisobingizga :param2 orqali :param3 orqali kirgansiz.\nSelldone",
        'icon' => 'tizim_xavfsizlikni_yangilash_yaxshi',
        'description' => 'Xaridor do\'konga kirgandan so\'ng xabar yuboring.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avakado yangi buyurtmasi xaridorga yuboriladi',
        'sample' => "<b>Sizning do'koningiz nomi</b><br> Hurmatli <b>ismingiz</b> ,<br> Buyurtmangizni oldik va biz uni ko'rib chiqmoqdamiz.<br> Buyurtma raqami: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nHurmatli :param1,\nBuyurtmangizni oldik va biz uni ko'rib chiqmoqdamiz.\nBuyurtma raqami: :param2\nSelldone",
        'icon' => 'fakt_check',
        'description' => 'Avokadoga buyurtma berganingizdan so\'ng mijozga xabar yuboring.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado yangi buyurtmani sotuvchiga yuboradi',
        'sample' => "Siz avokado buyurtmasini oldingiz:<br> Do'kon: <b>do'koningiz nomi</b><br> Xaridor: <b>Xaridor nomi</b><br> Buyurtma: <b>AVO-246</b><br> Selldone",
        'body' => "Siz Avokado buyurtmasini oldingiz:\nDo'kon: :param1\nXaridor: :param2\nBuyurtma: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Do\'kon egasiga yangi Avokado buyurtmasini olish haqida xabar berish uchun xabar yuboring.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avakado buyurtmasi toʻlashga tayyor',
        'sample' => "<b>Do‘kon nomi</b><br>Buyurtmangiz tasdiqlangan va uni quyidagi havola orqali to‘lash mumkin.<br>Buyurtma raqami: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nBuyurtmangiz tasdiqlandi va uni quyidagi havola orqali toʻlash mumkin.\nBuyurtma raqami: :param2\nHavola: :param1\nSelldone",
        'icon' => 'kvitansiya',
        'description' => 'Sotuvchi narxni belgilaganidan so\'ng mijozga to\'lov havolasi bilan xabar yuboring va Avakado buyurtmasini tasdiqlang.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Buyurtma jo\'natishga tayyor',
        'sample' => "Salom <b>Alex</b>, yaxshi xabar, buyurtmangiz jo'natishga tayyor.<br>Buyurtma: <b>SM-123</b>",
        'body' => "Salom :param4, yaxshi xabar, buyurtmangiz jo'natishga tayyor.\nBuyurtma: :param1",
        'icon' => 'mahalliy_yuborish',
        'description' => 'Buyurtma jo\'natishga tayyorligi haqida xabar berish uchun mijozga xabar yuboring.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Buyurtma olishga tayyor',
        'sample' => "Salom Aleks, yaxshi xabar, buyurtmangizni olishga tayyor.<br>Buyurtma: <b>SM-123</b>",
        'body' => "Salom :param4, yaxshi xabar, buyurtmangizni olishga tayyor.\nBuyurtma: :param1",
        'icon' => 'joylashuvni almashish',
        'description' => 'Buyurtmani olishga tayyorligi haqida xabar berish uchun mijozga xabar yuboring.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Sotuvchining buyurtmasi jo\'natishga tayyor',
        'sample' => "Salom <b>Alex</b>, yaxshi xabar, buyurtmangiz jo'natishga tayyor.<br>Buyurtma: <b>SM-123</b>",
        'body' => "Salom :param4, yaxshi xabar, buyurtmangiz jo'natishga tayyor.\nBuyurtma: :param1",
        'icon' => 'mahalliy_yuborish',
        'description' => 'Buyurtma jo\'natishga tayyorligi haqida xabar berish uchun mijozga xabar yuboring. To\'g\'ridan-to\'g\'ri etkazib berish rejimiga ega bozorda va etkazib berish turi olib ketish emas.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Sotuvchi buyurtmasi olishga tayyor',
        'sample' => "Salom Aleks, yaxshi xabar, buyurtmangizni olishga tayyor.<br>Buyurtma: <b>SM-123</b>",
        'body' => "Salom :param4, yaxshi xabar, buyurtmangizni olishga tayyor.\nBuyurtma: :param1",
        'icon' => 'joylashuvni almashish',
        'description' => 'Buyurtmani olishga tayyorligi haqida xabar berish uchun mijozga xabar yuboring. Faqat bozorda to\'g\'ridan-to\'g\'ri etkazib berish rejimi va etkazib berish turi Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Buyurtma buyumlarini tasdiqlash',
        'sample' => "Salom Aleks, buyurtmangizni ko'rib chiqdik. Bu yerda sizning mahsulotlaringiz uchun tasdiqlash holati: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Salom :param4, buyurtmangizni ko'rib chiqdik. Elementlaringiz uchun tasdiq holati:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'topshiriq_burildi',
        'description' => 'Buyurtmachiga sotuvchi tomonidan qabul qilingan yoki rad etilgan buyurtmalar to\'g\'risida xabar beradi.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Sotuvchining buyurtma ob\'ektlarini tasdiqlash',
        'sample' => "Salom Aleks, buyurtmangizni ko'rib chiqdik. Bu yerda sizning mahsulotlaringiz uchun tasdiqlash holati: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Salom :param4, buyurtmangizni ko'rib chiqdik. Elementlaringiz uchun tasdiq holati:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'topshiriq_burildi',
        'description' => 'Buyurtmachini sotuvchi tomonidan qabul qilingan yoki rad etilgan buyurtmadagi narsalar haqida xabardor qiladi.',
    ],



];
