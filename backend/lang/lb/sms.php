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
        'title' => 'Akzeptéieren Bezuelen',
        'sample' => "Är \$267 Bezuelung gouf erfollegräich ofgeléist.<br>Uerdnung: SM-425<br>Merci, <b> Äre Buttek Numm</b>.<br>Selldone",
        'body' => "Är :param2 Bezuelung gouf erfollegräich geléist.\nUerdnung: :param1\nMerci, :param3.\nSelldone",
        'icon' => 'Bezuelen',
        'description' => 'Schéckt e Message un de Buttek Client fir iwwer erfollegräich Bezuelung z\'informéieren.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Akzeptéieren Bezuelen',
        'sample' => "Nei \$267 Bezuelung gouf erfollegräich ofgeléist.<br>Bestellung: SM-425<br>Merci, <b> Äre Buttek Numm</b>.<br>Selldone",
        'body' => "Nei :param2 Bezuelung gouf erfollegräich geléist.\nUerdnung: :param1\nMerci, :param3.\nSelldone",
        'icon' => 'Bezuelen',
        'description' => 'Schéckt e Message un de Buttek Besëtzer hinnen iwwer erfollegräich Bezuelen ze informéieren.',

    ],

    'vendor-new-order' => [
        'title' => 'Verkeefer New Uerdnung',
        'sample' => "Dir hutt eng nei \$200 Bestellung kritt.<br>Bestellung: <b>SM-870</b> fir <b> Verkeefer Numm</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x vun",
        'body' => "Dir hutt eng nei :param2 Bestellung kritt.\nUerdnung: :param1 fir :param3.\n:param4",
        'icon' => 'storefront',
        'description' => 'Schéckt e Message un de Verkeefer fir hinnen iwwer eng nei Bestellung z\'informéieren.',
    ],








    'shop-login' => [
        'title' => 'Login Verifikatiounscode',
        'sample' => "Äre Logincode ass: <b>123456</b><br><b> Äre Buttek Numm</b><br>Selldone",
        'body' => "Äre Login Code ass: :param1\n:param2\nSelldone",
        'icon' => 'aloggen',
        'description' => 'Schéckt Login Code un de Client fir aloggen op de Buttek.',

    ],

    'user-login' => [
        'title' => 'Login Erfolleg Message',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Léif :param1,\nDir hutt op Äre Kont ageloggt :param2 um :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Schéckt e Message nom Client Login an de Buttek.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado nei Bestellung presentéiert un de Keefer schécken',
        'sample' => "<b> Äre Buttek Numm</b><br>Léif <b>Däin Numm</b>,<br>Mir hunn Är Bestellung kritt a mir iwwerpréiwen se.<br>Bestellung #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nLéif :param1,\nMir hunn Är Bestellung kritt a mir iwwerpréiwen se.\nUerdnung #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Schéckt e Message un de Client nodeems Dir eng Avocado Bestellung gemaach hutt.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado kritt nei Bestellung un de Verkeefer geschéckt',
        'sample' => "Dir krut eng Avocado-Bestellung:<br>Store: <b>Äre Geschäftnumm</b><br>Keefer: <b>Keefernumm</b><br>Bestellung: <b>AVO-246</b><br>Selldone",
        'body' => "Dir krut eng Avocado Bestellung:\nStore: :param1\nKeefer: :param2\nUerdnung: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Schéckt e Message un de Buttekbesëtzer fir hinnen z\'informéieren iwwer d\'Erhalen vun neien Avocado-Bestellung.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado Bestellung prett ze bezuelen',
        'sample' => "<b> Äre Buttek Numm</b><br> Är Bestellung gouf bestätegt a kann iwwer de folgende Link bezuelt ginn.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nÄr Bestellung gouf bestätegt a kann iwwer de folgende Link bezuelt ginn.\nUerdnung #: :param2\nLink: :param1\nSelldone",
        'icon' => 'Empfang',
        'description' => 'Schéckt e Message mam Bezuelungslink un de Client nodeems de Verkeefer d\'Käschte gesat huet an hir Avocado Bestellung bestätegt.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Bestellung prett fir ze verschécken',
        'sample' => "Salut <b>Alex</b>, gutt Noriicht, Är Bestellung ass elo prett fir ze verschécken.<br>Bestellung: <b>SM-123</b>",
        'body' => "Salut :param4, gutt Noriicht, Är Bestellung ass elo prett fir geschéckt ze ginn.\nUerdnung: :param1",
        'icon' => 'local_shipping',
        'description' => 'Schéckt e Message un de Client fir hinnen z\'informéieren datt hir Bestellung prett ass fir ze verschécken.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Bestellung prett fir ofzehuelen',
        'sample' => "Salut Alex, gutt Noriicht, Är Bestellung ass elo prett fir ofgeholl ze ginn.<br>Bestellung: <b>SM-123</b>",
        'body' => "Salut :param4, gutt Noriicht, Är Bestellung ass elo prett fir ofgeholl ze ginn.\nUerdnung: :param1",
        'icon' => 'share_location',
        'description' => 'Schéckt e Message un de Client fir hinnen z\'informéieren datt hir Bestellung prett ass fir ofgeholl ze ginn.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Verkeefer Bestellung prett fir ze verschécken',
        'sample' => "Salut <b>Alex</b>, gutt Noriicht, Är Bestellung ass elo prett fir ze verschécken.<br>Bestellung: <b>SM-123</b>",
        'body' => "Salut :param4, gutt Noriicht, Är Bestellung ass elo prett fir geschéckt ze ginn.\nUerdnung: :param1",
        'icon' => 'local_shipping',
        'description' => 'Schéckt e Message un de Client fir hinnen z\'informéieren datt hir Bestellung prett ass fir ze verschécken. Just um Maartplaz mam Direct Shipping Modus a Liwwertyp ass net Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Verkeefer Bestellung prett fir ofzehuelen',
        'sample' => "Salut Alex, gutt Noriicht, Är Bestellung ass elo prett fir ofgeholl ze ginn.<br>Bestellung: <b>SM-123</b>",
        'body' => "Salut :param4, gutt Noriicht, Är Bestellung ass elo prett fir ofgeholl ze ginn.\nUerdnung: :param1",
        'icon' => 'share_location',
        'description' => 'Schéckt e Message un de Client fir hinnen z\'informéieren datt hir Bestellung prett ass fir ofgeholl ze ginn. Just um Maartplaz mam Direct Shipping Modus a Liwwertyp ass Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Bestellung Artikelen Confirmatioun',
        'sample' => "Moien Alex, mir hunn Är Bestellung iwwerpréift. Hei ass de Bestätegungsstatus fir Är Artikelen: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hallo :param4, mir hunn Är Bestellung iwwerpréift. Hei ass de Confirmatiounsstatus fir Är Artikelen:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notéiert de Client iwwer d\'Elementer an hirer Bestellung, déi vum Verkeefer ugeholl oder verworf goufen.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Verkeefer Bestellung Artikelen Confirmatioun',
        'sample' => "Moien Alex, mir hunn Är Bestellung iwwerpréift. Hei ass de Bestätegungsstatus fir Är Artikelen: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hallo :param4, mir hunn Är Bestellung iwwerpréift. Hei ass de Confirmatiounsstatus fir Är Artikelen:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notéiert de Client iwwer d\'Elementer an hirer Bestellung, déi vum Verkeefer ugeholl oder verworf goufen.',
    ],



];
