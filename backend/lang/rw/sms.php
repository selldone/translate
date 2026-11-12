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
        'title' => 'Emera kwishyura',
        'sample' => "Amafaranga yawe 267 \$ yishyuwe neza.<br> Tegeka: SM-425<br> Urakoze, <b>izina ryububiko bwawe</b> .<br> Selldone",
        'body' => "Ubwishyu bwawe bwa :param2 bwakemuwe neza.\nTegeka: :param1\nUrakoze, :param3.\nSelldone",
        'icon' => 'kwishura',
        'description' => 'Ohereza ubutumwa bwo guhaha abakiriya kugirango bamenyeshe ibyishyuwe neza.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Emera kwishyura',
        'sample' => "Amafaranga mashya 267 \$ yishyuwe neza.<br> Tegeka: SM-425<br> Urakoze, <b>izina ryububiko bwawe</b> .<br> Selldone",
        'body' => "Ubwishyu bushya bwa :param2 bwakemuwe neza.\nTegeka: :param1\nUrakoze, :param3.\nSelldone",
        'icon' => 'kwishura',
        'description' => 'Ohereza ubutumwa kuri nyiri iduka kugirango ubamenyeshe ibijyanye no kwishyura neza.',

    ],

    'vendor-new-order' => [
        'title' => 'Abacuruzi Urutonde rushya',
        'sample' => "Wakiriye itegeko rishya 200 \$.| SKU100001 |1x<br>✅ Igicuruzwa B.| SKU100002 |1x",
        'body' => "Wakiriye itegeko rishya rya :param2.\nTegeka: :param1 kuri :param3.\n:param4",
        'icon' => 'ububiko',
        'description' => 'Ohereza ubutumwa kubacuruzi kugirango ubamenyeshe ibyerekeye gahunda nshya.',
    ],








    'shop-login' => [
        'title' => 'Injira yo kugenzura kode',
        'sample' => "Kode yawe yinjira ni: <b>123456</b><br> <b>Izina ryububiko bwawe</b><br> Selldone",
        'body' => "Kode yawe yinjira ni: :param1\n:param2\nSelldone",
        'icon' => 'injira',
        'description' => 'Ohereza kode yinjira kubakiriya kugirango binjire mu iduka.',

    ],

    'user-login' => [
        'title' => 'Injira Intsinzi Ubutumwa',
        'sample' => "Nshuti <b>Nshuti</b> ,<br> Winjiye kuri konte yawe na <b>iPhone 165.250.300.1</b> saa <b>5/8/2021 9:14 AM</b> .<br> Selldone",
        'body' => "Nshuti :param1,\nWinjiye kuri konte yawe na :param2 kuri :param3.\nSelldone",
        'icon' => 'sisitemu_umutekano_ibihe byiza',
        'description' => 'Ohereza ubutumwa nyuma yumukiriya yinjiye mu iduka.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado itegeko rishya ryatanzwe ryohereze kubaguzi',
        'sample' => "<b>Izina ryububiko bwawe</b><br> Nshuti <b>Izina ryawe</b> ,<br> Twakiriye ibyo wategetse kandi turabisubiramo.<br> Tegeka #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nNshuti :param1,\nTwakiriye ibyo wategetse kandi turabisubiramo.\nTegeka #: :param2\nSelldone",
        'icon' => 'kugenzura',
        'description' => 'Ohereza ubutumwa kubakiriya nyuma yo gutanga itegeko rya Avoka.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avoka yakira itegeko rishya ryohereza kubagurisha',
        'sample' => "Wakiriye itegeko rya avoka:<br> Ububiko: <b>Izina ryububiko</b><br> Umuguzi: <b>Izina ryumuguzi</b><br> Tegeka: <b>AVO-246</b><br> Selldone",
        'body' => "Wakiriye itegeko rya Avoka:\nUbubiko: :param1\nUmuguzi: :param2\nTegeka: :param3\nSelldone",
        'icon' => 'How_to_reg',
        'description' => 'Ohereza ubutumwa kuri nyiri iduka kugirango ubamenyeshe ibijyanye no kwakira ibicuruzwa bishya bya Avoka.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Urutonde rwa Avoka rwiteguye kwishyura',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nIbicuruzwa byawe byemejwe kandi birashobora kwishyurwa binyuze kumurongo ukurikira.\nTegeka #: :param2\nIhuza: :param1\nSelldone",
        'icon' => 'inyemezabwishyu',
        'description' => 'Ohereza ubutumwa hamwe nu murongo wo kwishyura kubakiriya nyuma yuko umugurisha ashyiraho igiciro hanyuma wemeze ibyo Avocado yatumije.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Tegeka kohereza',
        'sample' => "Muraho <b>Alex</b>, inkuru nziza, itegeko ryawe ryiteguye koherezwa.<br>Order: <b>SM-123</b>",
        'body' => "Muraho :param4, inkuru nziza, ordre yawe iriteguye koherezwa.\nTegeka: :param1",
        'icon' => 'Kurungika',
        'description' => 'Ohereza ubutumwa kubakiriya kugirango ubamenyeshe ko ibicuruzwa byabo byiteguye koherezwa.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Tegeka kwitegura gutwara',
        'sample' => "Muraho Alex, inkuru nziza, itegeko ryawe ryiteguye gutorwa.<br>Order: <b>SM-123</b>",
        'body' => "Muraho :param4, amakuru meza, itegeko ryawe ryiteguye gutorwa.\nTegeka: :param1",
        'icon' => 'kugabana',
        'description' => 'Ohereza ubutumwa kubakiriya kugirango ubamenyeshe ko ibyo batumije byiteguye gutorwa.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Ibicuruzwa byabacuruzi biteguye kohereza',
        'sample' => "Muraho <b>Alex</b>, inkuru nziza, itegeko ryawe ryiteguye koherezwa.<br>Order: <b>SM-123</b>",
        'body' => "Muraho :param4, inkuru nziza, ordre yawe iriteguye koherezwa.\nTegeka: :param1",
        'icon' => 'Kurungika',
        'description' => 'Ohereza ubutumwa kubakiriya kugirango ubamenyeshe ko ibicuruzwa byabo byiteguye koherezwa. Gusa kumasoko hamwe na Direct Shipping Mode hamwe nubwoko bwo gutanga ntabwo ari Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Ibicuruzwa byabacuruzi biteguye gutwara',
        'sample' => "Muraho Alex, inkuru nziza, itegeko ryawe ryiteguye gutorwa.<br>Order: <b>SM-123</b>",
        'body' => "Muraho :param4, amakuru meza, itegeko ryawe ryiteguye gutorwa.\nTegeka: :param1",
        'icon' => 'kugabana',
        'description' => 'Ohereza ubutumwa kubakiriya kugirango ubamenyeshe ko ibyo batumije byiteguye gutorwa. Gusa mumasoko hamwe na Direct Shipping Mode hamwe nubwoko bwo gutanga ni Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Tegeka Ibintu Kwemeza',
        'sample' => "Mwaramutse Alex, twasuzumye ibyo wategetse. Dore imiterere yo kwemeza kubintu byawe: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Mwaramutse :param4, twasuzumye ibyo wategetse. Dore ibyemezo byemeza kubintu byawe:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'umukoro_washubijwe_in',
        'description' => 'Menyesha umukiriya ibintu biri murutonde rwemewe cyangwa rwanze nugurisha.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Abacuruzi Batumiza Ibintu Kwemeza',
        'sample' => "Mwaramutse Alex, twasuzumye ibyo wategetse. Dore imiterere yo kwemeza kubintu byawe: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Mwaramutse :param4, twasuzumye ibyo wategetse. Dore ibyemezo byemeza kubintu byawe:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'umukoro_washubijwe_in',
        'description' => 'Menyesha umukiriya kubintu biri murutonde rwemewe cyangwa rwanze nu mucuruzi.',
    ],



];
