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
        'title' => 'Fizetés elfogadása',
        'sample' => "267 USD-s befizetését sikeresen rendeztük.<br>Rendelés: SM-425<br>Köszönöm, <b>Az üzlet neve</b>.<br>Selldone",
        'body' => ":param2 befizetését sikeresen kiegyenlítettük.\nRendelés: :param1\nKöszönöm, :param3.\nSelldone",
        'icon' => 'fizetés',
        'description' => 'A sikeres fizetésről küldjön üzenetet az üzlet vásárlójának.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Fizetés elfogadása',
        'sample' => "Az új 267 USD-s befizetés sikeresen kiegyenlítésre került.<br>Rendelés: SM-425<br>Köszönöm, <b>Az üzlet neve</b>.<br>Selldone",
        'body' => "Az új :param2 fizetés sikeresen kiegyenlítésre került.\nRendelés: :param1\nKöszönöm, :param3.\nSelldone",
        'icon' => 'fizetés',
        'description' => 'A sikeres fizetésről küldjön üzenetet az üzlet tulajdonosának.',

    ],

    'vendor-new-order' => [
        'title' => 'Szállító Új rendelés',
        'sample' => "Új 200 USD értékű rendelést kapott.<br>Rendelés: <b>SM-870</b> <b>Szállító neve</b>.<br>✅ A termék| SKU100001 |1x<br>✅ B termék| SKU100002 |1x",
        'body' => "Új :param2 rendelést kapott.\nRendelés: :param1 a :param3 számára.\n:param4",
        'icon' => 'kirakat',
        'description' => 'Küldjön üzenetet az eladónak, hogy tájékoztassa őket az új megrendelésről.',
    ],








    'shop-login' => [
        'title' => 'Bejelentkezési ellenőrző kód',
        'sample' => "Az Ön bejelentkezési kódja: <b>123456</b><br><b>Az üzlet neve</b><br>Selldone",
        'body' => "Az Ön bejelentkezési kódja: :param1\n:param2\nSelldone",
        'icon' => 'bejelentkezni',
        'description' => 'Küldje el a bejelentkezési kódot a vásárlónak az üzletbe való bejelentkezéshez.',

    ],

    'user-login' => [
        'title' => 'Sikeres bejelentkezési üzenet',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Kedves :param1!\nA :param2 által bejelentkezett fiókjába a :param3 címen.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Üzenet küldése, miután a vásárló belépett az üzletbe.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokádó új rendelés benyújtva, küldje el a vevőnek',
        'sample' => "<b>Az üzlet neve</b><br>Kedves <b>QQ</b>,<br>Megkaptuk megrendelését, és azt felülvizsgáljuk.<br>Rendelési szám: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nKedves :param1!\nMegrendelését megkaptuk, és azt felülvizsgáljuk.\nRendelési szám: :param2\nSelldone",
        'icon' => 'tény_ellenőrzés',
        'description' => 'Az avokádó rendelés leadása után küldjön üzenetet a vásárlónak.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Az avokádó új rendelést kap, és elküldi az eladónak',
        'sample' => "Avokádó rendelést kapott:<br>Store: <b>Az üzlet neve</b>Q<br>Vevő: <b>Vevő neve</b><br>Rendelés: <b>AVO-246</b><br>Selldone",
        'body' => "Avokádó rendelést kapott:\nÜzlet: :param1\nVevő: :param2\nRendelés: :param3\nSelldone",
        'icon' => 'hogyan_reg',
        'description' => 'Küldjön üzenetet az üzlet tulajdonosának, hogy tájékoztassa őket az új avokádó rendelésről.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Fizetésre kész avokádórendelés',
        'sample' => "<b>Az üzlet neve</b><br>Rendelése megerősítésre került, és a következő linken keresztül fizethető ki.<br>Rendelési szám: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nMegrendelését visszaigazoltuk, és az alábbi linken keresztül fizetheti ki.\nRendelési szám: :param2\nLink: :param1\nSelldone",
        'icon' => 'nyugta',
        'description' => 'Küldjön üzenetet a fizetési linkkel az ügyfélnek, miután az eladó beállította a költségeket, és megerősítette az avokádó megrendelését.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Szállításra kész rendelés',
        'sample' => "Szia <b>Alex</b>! Jó hír, rendelése készen áll a kiszállításra. <br>Rendelés: <b>SM-123</b>",
        'body' => "Szia :param4! Jó hír! A rendelése készen áll a kiszállításra.\nRendelés: :param1",
        'icon' => 'helyi_szállítás',
        'description' => 'Küldjön üzenetet az ügyfélnek, hogy tájékoztassa, hogy rendelése készen áll a kiszállításra.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Rendelés kész átvételre',
        'sample' => "Szia Alex, jó hír! Megrendelése készen áll az átvételre.<br>Rendelés: <b>SM-123</b>",
        'body' => "Szia :param4! Jó hír, rendelése készen áll az átvételre.\nRendelés: :param1",
        'icon' => 'share_location',
        'description' => 'Küldjön üzenetet az ügyfélnek, hogy tájékoztassa, hogy rendelése készen áll az átvételre.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Az eladói rendelés szállításra kész',
        'sample' => "Szia <b>Alex</b>! Jó hír, rendelése készen áll a kiszállításra. <br>Rendelés: <b>SM-123</b>",
        'body' => "Szia :param4! Jó hír! A rendelése készen áll a kiszállításra.\nRendelés: :param1",
        'icon' => 'helyi_szállítás',
        'description' => 'Küldjön üzenetet az ügyfélnek, hogy tájékoztassa, hogy rendelése készen áll a kiszállításra. Csak a piacon közvetlen szállítási móddal, és a szállítási típus nem átvétel.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Az eladói rendelés készen áll az átvételre',
        'sample' => "Szia Alex, jó hír! Megrendelése készen áll az átvételre.<br>Rendelés: <b>SM-123</b>",
        'body' => "Szia :param4! Jó hír, rendelése készen áll az átvételre.\nRendelés: :param1",
        'icon' => 'share_location',
        'description' => 'Küldjön üzenetet az ügyfélnek, hogy tájékoztassa, hogy rendelése készen áll az átvételre. Csak a piacon a Közvetlen Szállítási móddal, és a szállítási típus a Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Rendelési tételek visszaigazolása',
        'sample' => "Kedves Alex! Megvizsgáltuk megrendelését. Itt van a tételek megerősítési állapota: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Kedves :param4! Megrendelését felülvizsgáltuk. Íme a tételek megerősítési állapota:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'hozzárendelés_beadva',
        'description' => 'Értesíti a vásárlót a megrendelésében szereplő tételekről, amelyeket az eladó elfogadott vagy elutasított.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Eladói rendelési tételek megerősítése',
        'sample' => "Kedves Alex! Megvizsgáltuk megrendelését. Itt van a tételek megerősítési állapota: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Kedves :param4! Megrendelését felülvizsgáltuk. Íme a tételek megerősítési állapota:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'hozzárendelés_beadva',
        'description' => 'Értesíti a vevőt a megrendelésében szereplő, az eladó által elfogadott vagy elutasított tételekről.',
    ],



];
