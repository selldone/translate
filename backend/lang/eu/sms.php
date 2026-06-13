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
        'title' => 'Ordainketa onartu',
        'sample' => "Zure 267 \$-ko ordainketa behar bezala likidatu da.<br>Eskaera: SM-425<br>Eskerrik asko, <b>Zure dendaren izena</b>.<br>Selldone",
        'body' => "Zure :param2 ordainketa behar bezala likidatu da.\nEskaera: :param1\nEskerrik asko, :param3.\nSelldone",
        'icon' => 'ordainketa',
        'description' => 'Bidali mezu bat dendako bezeroari ordainketa arrakastatsuaren berri emateko.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Ordainketa onartu',
        'sample' => "267 \$-ko ordainketa berria behar bezala likidatu da.<br>Eskaera: SM-425<br>Eskerrik asko, <b>Zure dendaren izena</b>.<br>Selldone",
        'body' => ":param2 ordainketa berria behar bezala likidatu da.\nEskaera: :param1\nEskerrik asko, :param3.\nSelldone",
        'icon' => 'ordainketa',
        'description' => 'Bidali mezu bat dendaren jabeari ordainketa arrakastatsuaren berri emateko.',

    ],

    'vendor-new-order' => [
        'title' => 'Saltzaileen Eskaera Berria',
        'sample' => "200 \$-ko eskaera berria jaso duzu.<br>Eskaera: <b>SM-870</b> <b>Saltzailearen izena</b>.<br>✅ A produktua| SKU100001 |1x<br>✅ B produktua| SKU100002 |1x",
        'body' => ":param2 eskaera berria jaso duzu.\nEskaera: :param1 :param3-rako.\n:param4",
        'icon' => 'erakusleihoa',
        'description' => 'Bidali mezu bat saltzaileari eskaera berri baten berri emateko.',
    ],








    'shop-login' => [
        'title' => 'Saioa hasteko egiaztapen-kodea',
        'sample' => "Zure saio-kodea hau da: <b>123456</b><br><b>Zure dendaren izena</b><br>Selldone",
        'body' => "Zure saio-kodea da: :param1\n:param2\nSelldone",
        'icon' => 'saioa hasi',
        'description' => 'Bidali saio-kodea bezeroari dendan saioa hasteko.',

    ],

    'user-login' => [
        'title' => 'Saioa hasi arrakastaren mezua',
        'sample' => "Agur <b>Izena</b>,<br>Zure kontuan saioa hasi duzu <b>iPhone 165.250.300.1</b> <b>5/8/2021 9:14AMQQQQQ006QQQQ006</b> helbidean",
        'body' => "Maitea :param1,\n:param2-k :param3 helbidean hasi duzu zure kontuan.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Bidali mezu bat bezeroak dendara saioa hasi ondoren.',

    ],

    'avocado-order-submit' => [
        'title' => 'Ahuakatearen eskaera berria bidali da erosleari',
        'sample' => "<b>Zure dendaren izena</b><br>Agur <b>Zure izena</b>,<br>Zure eskaera jaso dugu eta berrikusten ari gara.<br>Eskaera #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nAgur :param1,\nZure eskaera jaso dugu eta berrikusten ari gara.\nEskaera #: :param2\nSelldone",
        'icon' => 'egi_egiaztapena',
        'description' => 'Bidali mezu bat bezeroari Avocado eskaera egin ondoren.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Ahuakateak saltzaileari bidali eskaera berria jasotzen du',
        'sample' => "Avocado eskaera bat jaso duzu:<br>Denda: <b>Zure dendaren izena</b><br>Eroslea: <b>Eroslearen izena</b><br>Eskaera: <b>AVO-246</b><br>Selldone",
        'body' => "Avocado eskaera bat jaso duzu:\nDenda: :param1\nEroslea: :param2\nEskaera: :param3\nSelldone",
        'icon' => 'nola_erregistratu',
        'description' => 'Bidali mezu bat dendaren jabeari Avocado eskaera berria jasotzearen berri emateko.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Ahuakatearen eskaera ordaintzeko prest',
        'sample' => "<b>Zure dendaren izena</b><br>Zure eskaera berretsi da eta hurrengo esteka bidez ordain daiteke.<br>Eskaera #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nZure eskaera berretsi da eta hurrengo esteka bidez ordain daiteke.\nEskaera #: :param2\nEsteka: :param1\nSelldone",
        'icon' => 'ordainagiria',
        'description' => 'Bidali mezu bat ordainketa-esteka duen bezeroari saltzaileak kostua ezarri ondoren eta berretsi bere Avocado eskaera.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Eskaera bidaltzeko prest',
        'sample' => "Kaixo <b>Alex</b>, berri ona, zure eskaera bidaltzeko prest dago.<br>Eskaria: <b>SM-123</b>",
        'body' => "Kaixo :param4, berri ona, zure eskaera bidaltzeko prest dago.\nEskaera: :param1",
        'icon' => 'tokiko_bidalketa',
        'description' => 'Bidali mezu bat bezeroari bere eskaera bidaltzeko prest dagoela jakinarazteko.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Eskaera jasotzeko prest',
        'sample' => "Kaixo Alex, albiste ona da, zure eskaera jasotzeko prest dago.<br>Eskaera: <b>SM-123</b>",
        'body' => "Kaixo :param4, berri ona, zure eskaera jasotzeko prest dago.\nEskaera: :param1",
        'icon' => 'partekatu_kokapena',
        'description' => 'Bidali mezu bat bezeroari bere eskaera jasotzeko prest dagoela jakinarazteko.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Saltzaileen eskaera bidaltzeko prest',
        'sample' => "Kaixo <b>Alex</b>, berri ona, zure eskaera bidaltzeko prest dago.<br>Eskaria: <b>SM-123</b>",
        'body' => "Kaixo :param4, berri ona, zure eskaera bidaltzeko prest dago.\nEskaera: :param1",
        'icon' => 'tokiko_bidalketa',
        'description' => 'Bidali mezu bat bezeroari bere eskaera bidaltzeko prest dagoela jakinarazteko. Bidalketa Zuzeneko modua duen merkatuan eta bidalketa mota ez da Bilketa.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Saltzaileen eskaera jasotzeko prest',
        'sample' => "Kaixo Alex, albiste ona da, zure eskaera jasotzeko prest dago.<br>Eskaera: <b>SM-123</b>",
        'body' => "Kaixo :param4, berri ona, zure eskaera jasotzeko prest dago.\nEskaera: :param1",
        'icon' => 'partekatu_kokapena',
        'description' => 'Bidali mezu bat bezeroari bere eskaera jasotzeko prest dagoela jakinarazteko. Bidalketa Zuzeneko modua duen merkatuan eta bidalketa mota Bilketa da.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Eskaera elementuen berrespena',
        'sample' => "Kaixo Alex, zure eskaera berrikusi dugu. Hona hemen zure elementuen berrespen-egoera: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Kaixo :param4, zure eskaera berrikusi dugu. Hona hemen zure elementuen berrespen-egoera:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'zeregina_eman',
        'description' => 'Bezeroari bere eskaeran saltzaileak onartu edo baztertu dituen elementuen berri ematen dio.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Saltzaileen eskaeraren elementuen berrespena',
        'sample' => "Kaixo Alex, zure eskaera berrikusi dugu. Hona hemen zure elementuen berrespen-egoera: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Kaixo :param4, zure eskaera berrikusi dugu. Hona hemen zure elementuen berrespen-egoera:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'zeregina_eman',
        'description' => 'Bezeroari jakinarazten dio bere eskaeran saltzaileak onartu edo baztertu dituen elementuei buruz.',
    ],



];
