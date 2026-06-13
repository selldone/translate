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
        'title' => 'Pieņemt maksājumu',
        'sample' => "Jūsu maksājums 267 ASV dolāru apmērā tika veiksmīgi apmaksāts.<br>Pasūtījums: SM-425<br>QPaldies, <b>Jūsu veikala nosaukums</b>.<br>Selldone",
        'body' => "Jūsu :param2 maksājums tika veiksmīgi apmaksāts.\nPasūtījums: :param1\nPaldies, :param3.\nSelldone",
        'icon' => 'maksājumu',
        'description' => 'Nosūtiet ziņu veikala klientam, lai informētu par veiksmīgu maksājumu.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Pieņemt maksājumu',
        'sample' => "Jaunais 267 ASV dolāru maksājums tika veiksmīgi apmaksāts.<br>Pasūtījums: SM-425<br>Paldies, <b>Jūsu veikala nosaukums</b>.<br>Selldone",
        'body' => "Jaunais :param2 maksājums tika veiksmīgi apmaksāts.\nPasūtījums: :param1\nPaldies, :param3.\nSelldone",
        'icon' => 'maksājumu',
        'description' => 'Nosūtiet ziņu veikala īpašniekam, lai informētu viņu par veiksmīgu maksājumu.',

    ],

    'vendor-new-order' => [
        'title' => 'Pārdevējs Jauns pasūtījums',
        'sample' => "Jūs saņēmāt jaunu pasūtījumu 200 \$| SKU100001 |1x<br>✅ Produkts B| SKU100002 |1x",
        'body' => "Jūs saņēmāt jaunu :param2 pasūtījumu.\nPasūtījums: :param1 :param3.\n:param4",
        'icon' => 'veikala skatlogs',
        'description' => 'Nosūtiet ziņojumu pārdevējam, lai informētu viņu par jaunu pasūtījumu.',
    ],








    'shop-login' => [
        'title' => 'Pieteikšanās verifikācijas kods',
        'sample' => "Jūsu pieteikšanās kods ir: <b>123456</b><br><b>Jūsu veikala nosaukums</b><br>Selldone",
        'body' => "Jūsu pieteikšanās kods ir: :param1\n:param2\nSelldone",
        'icon' => 'pieteikšanās',
        'description' => 'Nosūtiet klientam pieteikšanās kodu, lai pieteiktos veikalā.',

    ],

    'user-login' => [
        'title' => 'Pieteikšanās veiksmes ziņojums',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Cienījamais :param1!\nJūs esat pieteicies savā kontā, izmantojot :param2 vietnē :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Nosūtiet ziņu pēc klienta pieteikšanās veikalā.',

    ],

    'avocado-order-submit' => [
        'title' => 'Jauns avokado pasūtījums iesniegts, nosūtiet pircējam',
        'sample' => "<b>Jūsu veikala nosaukums</b><br>Cienījamais <b>Jūsu vārds</b>,<br>Mēs esam saņēmuši jūsu pasūtījumu, un mēs to izskatām.<br>Pasūtījuma Nr. <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nCien. :param1!\nEsam saņēmuši jūsu pasūtījumu un to izskatām.\nPasūtījuma nr.: :param2\nSelldone",
        'icon' => 'faktu_pārbaude',
        'description' => 'Pēc avokado pasūtījuma nosūtiet klientam ziņu.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado saņem jaunu pasūtījumu, nosūta pārdevējam',
        'sample' => "Jūs saņēmāt avokado pasūtījumu:<br>Veikals: <b>Jūsu veikala nosaukums</b><br>Pircējs: <b>Pircēja nosaukums</b><br>Pasūtījums: <b>AVO-246</b><br>Selldone",
        'body' => "Jūs saņēmāt avokado pasūtījumu:\nVeikals: :param1\nPircējs: :param2\nPasūtījums: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Nosūtiet ziņu veikala īpašniekam, lai informētu viņu par jauna Avokado pasūtījuma saņemšanu.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokado pasūtījums gatavs apmaksai',
        'sample' => "<b>Jūsu veikala nosaukums</b><br>Jūsu pasūtījums ir apstiprināts, un to var apmaksāt, izmantojot šo saiti.<br>Pasūtījuma numurs: <b>AVO-246</b><br>Saite: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nJūsu pasūtījums ir apstiprināts, un to var apmaksāt, izmantojot šo saiti.\nPasūtījuma nr.: :param2\nSaite: :param1\nSelldone",
        'icon' => 'kvīts',
        'description' => 'Nosūtiet klientam ziņojumu ar maksājuma saiti pēc tam, kad pārdevējs ir iestatījis izmaksas un apstiprinājis viņa avokado pasūtījumu.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Pasūtījums gatavs nosūtīšanai',
        'sample' => "Sveiki, <b>Alex</b>! Labas ziņas! Jūsu pasūtījums tagad ir gatavs nosūtīšanai. <br>Pasūtījums: <b>SM-123</b>",
        'body' => "Sveiki, :param4, labas ziņas, jūsu pasūtījums tagad ir gatavs nosūtīšanai.\nPasūtījums: :param1",
        'icon' => 'vietējā_piegāde',
        'description' => 'Nosūtiet klientam ziņojumu, lai informētu viņu, ka pasūtījums ir gatavs nosūtīšanai.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pasūtījums gatavs saņemšanai',
        'sample' => "Sveiki, Aleks! Labas ziņas! Jūsu pasūtījums tagad ir gatavs saņemšanai. <br>Pasūtījums: <b>SM-123</b>",
        'body' => "Sveiki, :param4, labas ziņas, jūsu pasūtījums tagad ir gatavs saņemšanai.\nPasūtījums: :param1",
        'icon' => 'share_location',
        'description' => 'Nosūtiet klientam ziņojumu, lai informētu viņu, ka pasūtījums ir gatavs saņemšanai.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pārdevēja pasūtījums gatavs nosūtīšanai',
        'sample' => "Sveiki, <b>Alex</b>! Labas ziņas! Jūsu pasūtījums tagad ir gatavs nosūtīšanai. <br>Pasūtījums: <b>SM-123</b>",
        'body' => "Sveiki, :param4, labas ziņas, jūsu pasūtījums tagad ir gatavs nosūtīšanai.\nPasūtījums: :param1",
        'icon' => 'vietējā_piegāde',
        'description' => 'Nosūtiet klientam ziņojumu, lai informētu viņu, ka pasūtījums ir gatavs nosūtīšanai. Tikai tirgū ar tiešās piegādes režīmu un piegādes veids nav Saņemšana.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pārdevēja pasūtījums gatavs saņemšanai',
        'sample' => "Sveiki, Aleks! Labas ziņas! Jūsu pasūtījums tagad ir gatavs saņemšanai. <br>Pasūtījums: <b>SM-123</b>",
        'body' => "Sveiki, :param4, labas ziņas, jūsu pasūtījums tagad ir gatavs saņemšanai.\nPasūtījums: :param1",
        'icon' => 'share_location',
        'description' => 'Nosūtiet klientam ziņojumu, lai informētu viņu, ka pasūtījums ir gatavs saņemšanai. Tieši tirgū ar tiešās piegādes režīmu un piegādes veidu ir Saņemšana.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Preču pasūtījuma apstiprinājums',
        'sample' => "Sveiki, Aleks! Mēs esam pārskatījuši jūsu pasūtījumu. Šeit ir jūsu preču apstiprinājuma statuss: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Sveiki, :param4, mēs esam pārskatījuši jūsu pasūtījumu. Šeit ir jūsu preču apstiprinājuma statuss:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Paziņo pircējam par viņa pasūtījumā esošajām precēm, kuras pārdevējs ir pieņēmis vai noraidījis.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Pārdevēja pasūtījuma preču apstiprinājums',
        'sample' => "Sveiki, Aleks! Mēs esam pārskatījuši jūsu pasūtījumu. Šeit ir jūsu preču apstiprinājuma statuss: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Sveiki, :param4, mēs esam pārskatījuši jūsu pasūtījumu. Šeit ir jūsu preču apstiprinājuma statuss:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Paziņo pircējam par viņa pasūtījumā esošajām precēm, kuras pārdevējs ir pieņēmis vai noraidījis.',
    ],



];
