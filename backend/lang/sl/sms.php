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
        'title' => 'Sprejmi plačilo',
        'sample' => "Vaše plačilo v višini 267 USD je bilo uspešno poravnano.<br>Naročilo: SM-425<br>Hvala, <b>Ime vaše trgovine</b>.<br>Selldone",
        'body' => "Vaše plačilo :param2 je bilo uspešno poravnano.\nNaročilo: :param1\nHvala, :param3.\nSelldone",
        'icon' => 'plačilo',
        'description' => 'Pošljite sporočilo kupcu trgovine, da ga obvestite o uspešnem plačilu.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Sprejmi plačilo',
        'sample' => "Novo plačilo v višini 267 USD je bilo uspešno poravnano.<br>Naročilo: SM-425<br>Hvala, <b>Ime vaše trgovine</b>.<br>Selldone",
        'body' => "Novo plačilo :param2 je bilo uspešno poravnano.\nNaročilo: :param1\nHvala, :param3.\nSelldone",
        'icon' => 'plačilo',
        'description' => 'Pošljite sporočilo lastniku trgovine, da ga obvestite o uspešnem plačilu.',

    ],

    'vendor-new-order' => [
        'title' => 'Prodajalec Novo naročilo',
        'sample' => "Prejeli ste novo naročilo v vrednosti 200 USD. <br>Naročilo: <b>SM-870</b> za <b> Ime prodajalca</b>.<br>✅ Izdelek A| SKU100001 |1x<br>✅ Izdelek B| SKU100002 |1x",
        'body' => "Prejeli ste novo naročilo :param2.\nNaročilo: :param1 za :param3.\n:param4",
        'icon' => 'izložba',
        'description' => 'Pošljite sporočilo prodajalcu, da ga obvestite o novem naročilu.',
    ],








    'shop-login' => [
        'title' => 'Koda za preverjanje prijave',
        'sample' => "Vaša koda za prijavo je: <b>123456</b><br><b>Ime vaše trgovine</b><br>Selldone",
        'body' => "Vaša prijavna koda je: :param1\n:param2\nSelldone",
        'icon' => 'prijava',
        'description' => 'Pošljite prijavno kodo stranki za prijavo v trgovino.',

    ],

    'user-login' => [
        'title' => 'Sporočilo o uspešni prijavi',
        'sample' => "Spoštovani <b>Name</b>, <br> V svoj račun ste se prijavili prek <b>iPhone 165.250.300.1</b> na <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Spoštovani :param1,\nV svoj račun ste se prijavili s :param2 na :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Pošljite sporočilo po prijavi stranke v trgovino.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokado novo naročilo oddano pošljite kupcu',
        'sample' => "<b>Ime vaše trgovine</b><br>Dragi <b>Vaše ime</b>,<br>Prejeli smo vaše naročilo in ga pregledujemo.<br>Št. naročila: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nSpoštovani :param1,\nPrejeli smo vaše naročilo in ga pregledujemo.\nŠtevilka naročila: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Po oddaji naročila avokada stranki pošljite sporočilo.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado prejme novo naročilo, poslano prodajalcu',
        'sample' => "Prejeli ste naročilo avokada: <br>Trgovina: <b>Ime vaše trgovine</b><br>Kupec: <b>Ime kupca</b><br>Naročilo: <b>AVO-246</b><br>Selldone",
        'body' => "Prejeli ste naročilo za avokado:\nTrgovina: :param1\nKupec: :param2\nNaročilo: :param3\nSelldone",
        'icon' => 'kako_reg',
        'description' => 'Pošljite sporočilo lastniku trgovine, da ga obvestite o prejemu novega naročila avokada.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Naročilo avokada pripravljeno za plačilo',
        'sample' => "<b>Ime vaše trgovine</b><br>Vaše naročilo je potrjeno in ga je mogoče plačati prek naslednje povezave.<br>Št. naročila: <b>AVO-246</b><br>Povezava: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nVaše naročilo je potrjeno in ga lahko plačate preko naslednje povezave.\nŠtevilka naročila: :param2\nPovezava: :param1\nSelldone",
        'icon' => 'potrdilo o prejemu',
        'description' => 'Po tem, ko prodajalec določi stroške, stranki pošljite sporočilo s povezavo za plačilo in potrdite naročilo avokada.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Naročilo pripravljeno za pošiljanje',
        'sample' => "Pozdravljeni <b>Alex</b>, dobra novica, vaše naročilo je zdaj pripravljeno za pošiljanje. <br>Naročilo: <b>SM-123</b>",
        'body' => "Pozdravljeni :param4, dobre novice, vaše naročilo je zdaj pripravljeno za pošiljanje.\nNaročilo: :param1",
        'icon' => 'local_shipping',
        'description' => 'Pošljite stranki sporočilo, da je njeno naročilo pripravljeno za pošiljanje.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Naročilo pripravljeno za prevzem',
        'sample' => "Živjo Alex, dobre novice, vaše naročilo je zdaj pripravljeno za prevzem.<br>Naročilo: <b>SM-123</b>",
        'body' => "Živijo :param4, dobre novice, vaše naročilo je zdaj pripravljeno za prevzem.\nNaročilo: :param1",
        'icon' => 'deli_lokacijo',
        'description' => 'Pošljite stranki sporočilo, da je njeno naročilo pripravljeno za prevzem.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Naročilo prodajalca je pripravljeno za pošiljanje',
        'sample' => "Pozdravljeni <b>Alex</b>, dobra novica, vaše naročilo je zdaj pripravljeno za pošiljanje. <br>Naročilo: <b>SM-123</b>",
        'body' => "Pozdravljeni :param4, dobre novice, vaše naročilo je zdaj pripravljeno za pošiljanje.\nNaročilo: :param1",
        'icon' => 'local_shipping',
        'description' => 'Pošljite stranki sporočilo, da je njeno naročilo pripravljeno za pošiljanje. Samo na trgu z načinom neposredne dostave in vrsta dostave ni prevzem.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Naročilo prodajalca je pripravljeno za prevzem',
        'sample' => "Živjo Alex, dobre novice, vaše naročilo je zdaj pripravljeno za prevzem.<br>Naročilo: <b>SM-123</b>",
        'body' => "Živijo :param4, dobre novice, vaše naročilo je zdaj pripravljeno za prevzem.\nNaročilo: :param1",
        'icon' => 'deli_lokacijo',
        'description' => 'Pošljite stranki sporočilo, da je njeno naročilo pripravljeno za prevzem. Samo na trgu z načinom neposredne dostave in vrsto dostave je prevzem.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Potrditev naročila',
        'sample' => "Pozdravljeni Alex, pregledali smo vaše naročilo. Tukaj je stanje potrditve za vaše predmete: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Pozdravljeni :param4, pregledali smo vaše naročilo. Tukaj je stanje potrditve za vaše elemente:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'naloga_oddana',
        'description' => 'Obvesti kupca o artiklih v njegovem naročilu, ki jih je prodajalec sprejel ali zavrnil.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Potrditev artiklov naročila dobavitelja',
        'sample' => "Pozdravljeni Alex, pregledali smo vaše naročilo. Tukaj je stanje potrditve za vaše predmete: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Pozdravljeni :param4, pregledali smo vaše naročilo. Tukaj je stanje potrditve za vaše elemente:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'naloga_oddana',
        'description' => 'Obvesti kupca o artiklih v njegovem naročilu, ki jih je prodajalec sprejel ali zavrnil.',
    ],



];
