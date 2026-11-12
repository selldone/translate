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
        'title' => 'Yamkela intlawulo',
        'sample' => "Intlawulo yakho ye-267\$ ilungiswe ngempumelelo.<br> Umyalelo: SM-425<br> Enkosi, <b>Igama levenkile yakho</b> .<br> Selldone",
        'body' => "Intlawulo yakho ye-:param2 ihlaziywe ngempumelelo.\nUmyalelo: :param1\nEnkosi, :param3.\nSelldone",
        'icon' => 'intlawulo',
        'description' => 'Thumela umyalezo kumthengi wevenkile ukwazisa ngentlawulo eyimpumelelo.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Yamkela intlawulo',
        'sample' => "Intlawulo entsha ye-267\$ ilungiswe ngempumelelo.<br> Umyalelo: SM-425<br> Enkosi, <b>Igama levenkile yakho</b> .<br> Selldone",
        'body' => "Intlawulo entsha ye-:param2 yalungiswa ngempumelelo.\nUmyalelo: :param1\nEnkosi, :param3.\nSelldone",
        'icon' => 'intlawulo',
        'description' => 'Thumela umyalezo kumnini venkile ubazise ngentlawulo eyimpumelelo.',

    ],

    'vendor-new-order' => [
        'title' => 'Umthengisi New Order',
        'sample' => "Ufumene iodolo entsha yeedola ezingama-200.<br>Qorder: <b>SM-870</b> ye<b>Igama lomthengisi</b>.<br>✅ Imveliso A| SKU100001 |1x<br>✅ Imveliso B| SKU100002 |1x",
        'body' => "Ufumene iodolo entsha ye-:param2.\nUmyalelo: :param1 ye:param3.\n:param4",
        'icon' => 'phambi kwevenkile',
        'description' => 'Thumela umyalezo kumthengisi ukuze ubazise malunga nomyalelo omtsha.',
    ],








    'shop-login' => [
        'title' => 'Ngena ikhowudi yokuqinisekisa',
        'sample' => "Ikhowudi yakho yokungena ithi: <b>123456</b><br> <b>Igama levenkile yakho</b><br> Selldone",
        'body' => "Ikhowudi yakho yokungena ngu: :param1\n:param2\nSelldone",
        'icon' => 'ngena',
        'description' => 'Thumela ikhowudi yokungena kumthengi ukuze ungene kwivenkile.',

    ],

    'user-login' => [
        'title' => 'Ngena Umyalezo weMpumelelo',
        'sample' => "<b>Igama</b> elithandekayo,<br> Ungene kwiakhawunti yakho nge <b>iPhone 165.250.300.1</b> ngo <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => ":param1 ethandekayo,\nUngene kwiakhawunti yakho nge-:param2 kwi-:param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Thumela umyalezo emva kokungena komthengi evenkileni.',

    ],

    'avocado-order-submit' => [
        'title' => 'Iodolo entsha yeeavokhado ithunyelwe ithunyelwe kumthengi',
        'sample' => "<b>Igama levenkile yakho</b><br> Enkosi <b>igama lakho</b> ,<br> Siyifumene iodolo yakho kwaye siyayiphonononga.<br> Umyalelo #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\n:param1 ethandekayo,\nSiyifumene iodolo yakho kwaye siyayiphonononga.\nUmyalelo #: :param2\nSelldone",
        'icon' => 'inyani_jonga',
        'description' => 'Thumela umyalezo kumthengi emva kokufaka iodolo yeAvocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Iavokhado ifumana iodolo entsha ethunyelwa kumthengisi',
        'sample' => "Ufumene iodolo yeeavokhado:<br> Store: <b>Igama levenkile yakho</b><br> Umthengi: <b>Igama lomthengi</b><br> Umyalelo: <b>AVO-246</b><br> Selldone",
        'body' => "Ufumene iodolo yeAvocado:\nIvenkile: :param1\nUmthengi: :param2\nUmyalelo: :param3\nSelldone",
        'icon' => 'njani_i-reg',
        'description' => 'Thumela umyalezo kumnini venkile umazise ngokufumana iodolo entsha yeeavokhado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Umyalelo weavokhado ukulungele ukuhlawula',
        'sample' => "<b>Igama levenkile yakho</b><br> I-odolo yakho iqinisekisiwe kwaye inokuhlawulwa ngekhonkco elilandelayo.<br> Umyalelo #: <b>AVO-246</b><br> Ikhonkco: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nI-odolo yakho iqinisekisiwe kwaye inokuhlawulwa ngekhonkco elilandelayo.\nUmyalelo #: :param2\nIkhonkco: :param1\nSelldone",
        'icon' => 'irisithi',
        'description' => 'Thumela umyalezo kunye nekhonkco lokuhlawula kumthengi emva kokuba umthengisi ubeke iindleko kwaye uqinisekise i-odolo yabo yeAvocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Iodolo ilungele ukuthunyelwa',
        'sample' => "Molo <b>Alex</b>, iindaba ezimnandi, iodolo yakho ngoku ilungele ukuthunyelwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Molo :param4, iindaba ezimnandi, iodolo yakho ngoku ilungele ukuthunyelwa.\nUmyalelo: :param1",
        'icon' => 'local_shipping',
        'description' => 'Thumela umyalezo kumthengi ukubazisa ukuba iodolo yabo ikulungele ukuthunyelwa.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'I-odolo ilungele ukulandwa',
        'sample' => "Molo Alex, iindaba ezimnandi, iodolo yakho ngoku ilungele ukuthatyathwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Molo :param4, iindaba ezimnandi, iodolo yakho ngoku ilungele ukulandwa.\nUmyalelo: :param1",
        'icon' => 'share_indawo',
        'description' => 'Thumela umyalezo kumthengi ukubazisa ukuba iodolo yabo ikulungele ukulandwa.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Umyalelo womthengisi ulungele ukuthunyelwa',
        'sample' => "Molo <b>Alex</b>, iindaba ezimnandi, iodolo yakho ngoku ilungele ukuthunyelwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Molo :param4, iindaba ezimnandi, iodolo yakho ngoku ilungele ukuthunyelwa.\nUmyalelo: :param1",
        'icon' => 'local_shipping',
        'description' => 'Thumela umyalezo kumthengi ukubazisa ukuba iodolo yabo ikulungele ukuthunyelwa. Nje kwindawo yentengiso ngeNdlela yokuThumela ngokuNgqo kunye nohlobo lokuhanjiswa ayisiyiyo iPickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Iodolo yomthengisi ilungele ukulandwa',
        'sample' => "Molo Alex, iindaba ezimnandi, iodolo yakho ngoku ilungele ukuthatyathwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Molo :param4, iindaba ezimnandi, iodolo yakho ngoku ilungele ukulandwa.\nUmyalelo: :param1",
        'icon' => 'share_indawo',
        'description' => 'Thumela umyalezo kumthengi ukubazisa ukuba iodolo yabo ikulungele ukulandwa. Nje kwindawo yentengiso ngeNdlela yokuThumela ngokuNgqo kunye nohlobo lokuhanjiswa yiPickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'I-odolo yezinto eziQinisekisayo',
        'sample' => "Molo Alex, siyijongile iodolo yakho. Nantsi imeko yokuqinisekiswa kwezinto zakho:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Molo :param4, siyijongile iodolo yakho. Nantsi imeko yokuqinisekisa yezinto zakho:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Yazisa umthengi malunga nezinto kwi-odolo yazo ezamkelweyo okanye zaliwe ngumthengisi.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'UQinisekiso lweZinto zoMyalelo womthengisi',
        'sample' => "Molo Alex, siyijongile iodolo yakho. Nantsi imeko yokuqinisekiswa kwezinto zakho:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Molo :param4, siyijongile iodolo yakho. Nantsi imeko yokuqinisekisa yezinto zakho:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Yazisa umthengi malunga nezinto kwi-odolo yazo ezamkelweyo okanye zaliwe ngumthengisi.',
    ],



];
