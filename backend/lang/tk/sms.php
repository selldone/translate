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
        'title' => 'Töleg kabul ediň',
        'sample' => "267 \$ tölegiňiz üstünlikli çözüldi.<br> Sargyt: SM-425<br> Sag bol, <b>dükanyňyzyň ady</b> .<br> Selldone",
        'body' => ":param2 tölegiňiz üstünlikli çözüldi.\nSargyt: :param1\nSag bol, :param3.\nSelldone",
        'icon' => 'töleg',
        'description' => 'Üstünlikli töleg barada maglumat bermek üçin dükan müşderisine habar iberiň.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Töleg kabul ediň',
        'sample' => "Täze 267 \$ töleg üstünlikli çözüldi.<br> Sargyt: SM-425<br> Sag bol, <b>dükanyňyzyň ady</b> .<br> Selldone",
        'body' => "Täze :param2 tölegi üstünlikli çözüldi.\nSargyt: :param1\nSag bol, :param3.\nSelldone",
        'icon' => 'töleg',
        'description' => 'Dükanyň eýesine üstünlikli töleg barada habar bermek üçin habar iberiň.',

    ],

    'vendor-new-order' => [
        'title' => 'Satyjy täze sargyt',
        'sample' => "Täze 200 \$ sargyt aldyňyz. <br>Order: <b>Vendor ady</b>.<br>✅ Önüm A| SKU100001 |1x<br>✅ Önüm B.| SKU100002 |1x",
        'body' => "Täze :param2 sargyt aldyňyz.\nSargyt: :param3 üçin :param1.\n:param4",
        'icon' => 'dükan',
        'description' => 'Satyja täze sargyt barada habar bermek üçin habar iberiň.',
    ],








    'shop-login' => [
        'title' => 'Giriş tassyklama kody',
        'sample' => "Giriş koduňyz: <b>123456</b><br> <b>Dükanyňyzyň ady</b><br> Selldone",
        'body' => "Giriş koduňyz: :param1\n:param2\nSelldone",
        'icon' => 'giriş',
        'description' => 'Dükana girmek üçin müşderä giriş koduny iberiň.',

    ],

    'user-login' => [
        'title' => 'Giriş Üstünlik habary',
        'sample' => "Gadyrly <b>Ady</b> ,<br> Hasabyňyza <b>iPhone 165.250.300.1</b> bilen 5/8/2021 sagat <b>9: 14</b> -de girdiňiz.<br> Selldone",
        'body' => "Hormatly :param1,\nHasabyňyza :param2 bilen :param3 hasabyňyzda girdiňiz.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Müşderi dükana gireninden soň habar iberiň.',

    ],

    'avocado-order-submit' => [
        'title' => 'Awakado täze sargyt alyja iberildi',
        'sample' => "<b>Dükanyňyzyň ady</b><br> Gadyrly <b>adyňyz</b> ,<br> Sargydyňyzy aldyk we gözden geçirýäris.<br> Sargyt #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nHormatly :param1,\nSargydyňyzy aldyk we gözden geçirýäris.\nSargyt #: :param2\nSelldone",
        'icon' => 'fakt_ barlaň',
        'description' => 'Awokado zakazyny goýanyňyzdan soň müşderä habar iberiň.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Awokado satyja ibermek üçin täze sargyt alýar',
        'sample' => "Awokado zakazyny aldyňyz:<br> Dükan: <b>Dükanyňyzyň ady</b><br> Satyn alyjy: <b>Alyjynyň ady</b><br> Sargyt: <b>AVO-246</b><br> Selldone",
        'body' => "Awokado zakazyny aldyňyz:\nDükan: :param1\nSatyn alyjy: :param2\nSargyt: :param3\nSelldone",
        'icon' => 'How_to_reg',
        'description' => 'Dükanyň eýesine täze Avokado zakazyny almak barada habar iberiň.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Awokado tölemäge taýyn',
        'sample' => "<b>Y dükanyňyzyň ady</b><br> Siziň sargydyňyz tassyklandy we aşakdaky baglanyşyk arkaly tölenip bilner.",
        'body' => ":param3\nSargydyňyz tassyklandy we aşakdaky baglanyşyk arkaly tölenip bilner.\nSargyt #: :param2\nBaglanyşyk: :param1\nSelldone",
        'icon' => 'kwitansiýa',
        'description' => 'Satyjy bahasy kesgitlenenden we Awokado zakazyny tassyklandan soň müşderä töleg baglanyşygy bilen habar iberiň.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Ibermäge taýyn sargyt',
        'sample' => "Salam <b>Alex</b>, gowy habar, sargydyňyz indi iberilmäge taýyn. <br>Order: <b>SM-123</b>",
        'body' => "Salam :param4, gowy habar, sargydyňyz indi iberilmäge taýyn.\nSargyt: :param1",
        'icon' => 'ýerli_ ýüklemek',
        'description' => 'Müşderä sargyt iberilmäge taýýardygyny habar bermek üçin habar iberiň.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Upygnamaga taýyn',
        'sample' => "Salam Alex, gowy habar, sargydyňyz indi alynmaga taýyn. <br>Order: <b>SM-123</b>",
        'body' => "Salam :param4, gowy habar, sargydyňyz indi alynmaga taýyn.\nSargyt: :param1",
        'icon' => 'paýlaşma',
        'description' => 'Müşderä sargytlary almaga taýýardygyny habar bermek üçin habar iberiň.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Satyjy ibermäge sargyt',
        'sample' => "Salam <b>Alex</b>, gowy habar, sargydyňyz indi iberilmäge taýyn. <br>Order: <b>SM-123</b>",
        'body' => "Salam :param4, gowy habar, sargydyňyz indi iberilmäge taýyn.\nSargyt: :param1",
        'icon' => 'ýerli_ ýüklemek',
        'description' => 'Müşderä sargyt iberilmäge taýýardygyny habar bermek üçin habar iberiň. Diňe göni iberiş tertibi we gowşuryş görnüşi bilen bazarda “Pickup” däl.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Satyjy sargyt almaga taýyn',
        'sample' => "Salam Alex, gowy habar, sargydyňyz indi alynmaga taýyn. <br>Order: <b>SM-123</b>",
        'body' => "Salam :param4, gowy habar, sargydyňyz indi alynmaga taýyn.\nSargyt: :param1",
        'icon' => 'paýlaşma',
        'description' => 'Müşderä sargytlary almaga taýýardygyny habar bermek üçin habar iberiň. Diňe göni iberiş tertibi we gowşuryş görnüşi bilen bazarda “Pickup”.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Sargyt elementlerini tassyklamak',
        'sample' => "Salam Alex, sargydyňyzy gözden geçirdik. Ine, önümleriňiziň tassyklama ýagdaýy: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Salam :param4, sargydyňyzy gözden geçirdik. Ine, önümleriňiziň tassyklama ýagdaýy:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Satyjy tarapyndan kabul edilen ýa-da ret edilen zatlar barada müşderä habar berýär.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Satyjy sargyt önümlerini tassyklamak',
        'sample' => "Salam Alex, sargydyňyzy gözden geçirdik. Ine, önümleriňiziň tassyklama ýagdaýy: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Salam :param4, sargydyňyzy gözden geçirdik. Ine, önümleriňiziň tassyklama ýagdaýy:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Satyjy tarapyndan kabul edilen ýa-da ret edilen zatlar barada müşderä habar berýär.',
    ],



];
