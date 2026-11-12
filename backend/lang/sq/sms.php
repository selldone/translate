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
        'title' => 'Prano pagesën',
        'sample' => "Pagesa juaj prej 267 dollarësh u pagua me sukses.<br>Urdhëroni: SM-425<br>Faleminderit, <b>Emri i dyqanit tuaj</b>.<br>Selldone",
        'body' => "Pagesa juaj :param2 u pagua me sukses.\nPorosit: :param1\nFaleminderit, :param3.\nSelldone",
        'icon' => 'pagesa',
        'description' => 'Dërgoni një mesazh klientit të dyqanit për të informuar për pagesën e suksesshme.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Prano pagesën',
        'sample' => "Pagesa e re prej 267 dollarësh u pagua me sukses.<br>Porosi: SM-425<br>Faleminderit, <b>Emri i dyqanit tuaj</b>.<br>Selldone",
        'body' => "Pagesa e re :param2 u pagua me sukses.\nPorosit: :param1\nFaleminderit, :param3.\nSelldone",
        'icon' => 'pagesa',
        'description' => 'Dërgoni një mesazh pronarit të dyqanit për t\'i informuar ata për pagesën e suksesshme.',

    ],

    'vendor-new-order' => [
        'title' => 'Shitësi porosi e re',
        'sample' => "Ke marrë një porosi të re prej 200 dollarësh.<br>Urdhri: <b>SM-870</b> për <b>Emri i shitësit</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkti B| SKU100002 |1x",
        'body' => "Ju morët një porosi të re :param2.\nPorosit: :param1 për :param3.\n:param4",
        'icon' => 'vitrinën',
        'description' => 'Dërgoni një mesazh shitësit për t\'i informuar ata për një porosi të re.',
    ],








    'shop-login' => [
        'title' => 'Kodi i verifikimit të hyrjes',
        'sample' => "Kodi juaj i hyrjes është: <b>123456</b><br><b>Emri i dyqanit tuaj</b><br>Selldone",
        'body' => "Kodi juaj i hyrjes është: :param1\n:param2\nSelldone",
        'icon' => 'identifikimi',
        'description' => 'Dërgojini klientit kodin e hyrjes për të hyrë në dyqan.',

    ],

    'user-login' => [
        'title' => 'Mesazhi i suksesit të hyrjes',
        'sample' => "I dashur <b>Name</b>,<br>Ju keni hyrë në llogarinë tuaj nga <b>iPhone 165.250.300.1</b> në <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "I dashur :param1,\nJu keni hyrë në llogarinë tuaj nga :param2 në :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Dërgoni një mesazh pas hyrjes së klientit në dyqan.',

    ],

    'avocado-order-submit' => [
        'title' => 'Porosia e re e avokados u dërgua tek blerësi',
        'sample' => "<b>Emri i dyqanit tuaj</b><br>I dashur <b>Emri juaj</b>,<br>Kemi marrë porosinë tuaj dhe po e shqyrtojmë atë.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nI dashur :param1,\nNe kemi marrë porosinë tuaj dhe po e shqyrtojmë atë.\nNumri i porosisë: :param2\nSelldone",
        'icon' => 'kontroll_fakt',
        'description' => 'Dërgoni një mesazh te klienti pasi të keni bërë një porosi Avokado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado merr porosi të re, dërgohet tek shitësi',
        'sample' => "Ju morët një porosi Avokado:<br>Dyqani: <b>Emri i dyqanit tuaj</b><br>Blerësi: <b>Emri i blerësit</b><br>Urdhëri: <b>AVO-246</b><br>Selldone",
        'body' => "Ju keni marrë një porosi Avokado:\nDyqani: :param1\nBlerësi: :param2\nPorosit: :param3\nSelldone",
        'icon' => 'si_të_regjistrosh',
        'description' => 'Dërgojini një mesazh pronarit të dyqanit për ta informuar për marrjen e porosisë së re të Avokados.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Porosia e avokados gati për t\'u paguar',
        'sample' => "<b>Emri i dyqanit tuaj</b><br>Porosia juaj është konfirmuar dhe mund të paguhet përmes lidhjes së mëposhtme.<br>Numri i porosisë: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nPorosia juaj është konfirmuar dhe mund të paguhet në linkun e mëposhtëm.\nNumri i porosisë: :param2\nLidhja: :param1\nSelldone",
        'icon' => 'faturë',
        'description' => 'Dërgojini klientit një mesazh me lidhjen e pagesës pasi shitësi të caktojë koston dhe të konfirmojë porosinë e tij të Avokados.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Porosia gati për transport',
        'sample' => "Përshëndetje <b>Alex</b>, lajme të mira, porosia juaj tani është gati për t'u dërguar.<br>Porosi: <b>SM-123</b>",
        'body' => "Përshëndetje :param4, lajm i mirë, porosia juaj tani është gati për t'u dërguar.\nPorosit: :param1",
        'icon' => 'transporti_lokal',
        'description' => 'Dërgojini një mesazh klientit për ta informuar se porosia e tyre është gati për t\'u dërguar.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Porosit gati për marrje',
        'sample' => "Përshëndetje Alex, lajme të mira, porosia juaj tani është gati për t'u marrë.<br>Urdhri: <b>SM-123</b>",
        'body' => "Përshëndetje :param4, lajme të mira, porosia juaj tani është gati për t'u marrë.\nPorosit: :param1",
        'icon' => 'share_location',
        'description' => 'Dërgojini një mesazh klientit për ta informuar se porosia e tyre është gati për t\'u marrë.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Porosia e shitësit gati për t\'u dërguar',
        'sample' => "Përshëndetje <b>Alex</b>, lajme të mira, porosia juaj tani është gati për t'u dërguar.<br>Porosi: <b>SM-123</b>",
        'body' => "Përshëndetje :param4, lajm i mirë, porosia juaj tani është gati për t'u dërguar.\nPorosit: :param1",
        'icon' => 'transporti_lokal',
        'description' => 'Dërgojini një mesazh klientit për ta informuar se porosia e tyre është gati për t\'u dërguar. Vetëm në treg me modalitetin e dërgesës direkte dhe lloji i dërgesës nuk është marrje.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Porosia e shitësit gati për t\'u marrë',
        'sample' => "Përshëndetje Alex, lajme të mira, porosia juaj tani është gati për t'u marrë.<br>Urdhri: <b>SM-123</b>",
        'body' => "Përshëndetje :param4, lajme të mira, porosia juaj tani është gati për t'u marrë.\nPorosit: :param1",
        'icon' => 'share_location',
        'description' => 'Dërgojini një mesazh klientit për ta informuar se porosia e tyre është gati për t\'u marrë. Vetëm në treg me mënyrën e dërgesës direkte dhe lloji i dërgesës është Marrja.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Konfirmimi i artikujve të porosisë',
        'sample' => "Përshëndetje Alex, ne kemi shqyrtuar porosinë tuaj. Këtu është statusi i konfirmimit për artikujt tuaj:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Përshëndetje :param4, ne kemi shqyrtuar porosinë tuaj. Këtu është statusi i konfirmimit për artikujt tuaj:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'detyrë_i_kthyer',
        'description' => 'Njofton klientin për artikujt në porosinë e tyre që janë pranuar ose refuzuar nga shitësi.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Konfirmimi i artikujve të porosisë së shitësit',
        'sample' => "Përshëndetje Alex, ne kemi shqyrtuar porosinë tuaj. Këtu është statusi i konfirmimit për artikujt tuaj:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Përshëndetje :param4, ne kemi shqyrtuar porosinë tuaj. Këtu është statusi i konfirmimit për artikujt tuaj:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'detyrë_i_kthyer',
        'description' => 'Njofton klientin për artikujt në porosinë e tyre që janë pranuar ose refuzuar nga shitësi.',
    ],



];
