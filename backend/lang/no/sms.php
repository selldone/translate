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
        'title' => 'Godta betaling',
        'sample' => "Betalingen din på 267 \$ ble avgjort.<br> Bestilling: SM-425<br> Takk, <b>butikknavnet ditt</b> .<br> Selldone",
        'body' => "Din :param2-betaling ble avgjort.\nBestilling: :param1\nTakk, :param3.\nSelldone",
        'icon' => 'betaling',
        'description' => 'Send en melding til butikkkunden for å informere om vellykket betaling.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Godta betaling',
        'sample' => "Ny betaling på 267\$ ble avgjort.<br> Bestilling: SM-425<br> Takk, <b>butikknavnet ditt</b> .<br> Selldone",
        'body' => "Ny :param2-betaling ble avgjort.\nBestilling: :param1\nTakk, :param3.\nSelldone",
        'icon' => 'betaling',
        'description' => 'Send en melding til butikkeieren for å informere dem om vellykket betaling.',

    ],

    'vendor-new-order' => [
        'title' => 'Leverandørs ny ordre',
        'sample' => "Du mottok en ny \$200-bestilling.<br>Bestilling: <b>SM-870</b> for <b>Leverandørnavn</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x",
        'body' => "Du mottok en ny :param2-bestilling.\nBestilling: :param1 for :param3.\n:param4",
        'icon' => 'butikkfront',
        'description' => 'Send en melding til leverandøren for å informere dem om en ny bestilling.',
    ],








    'shop-login' => [
        'title' => 'Bekreftelseskode for pålogging',
        'sample' => "Påloggingskoden din er: <b>123456</b><br> <b>Butikkens navn</b><br> Selldone",
        'body' => "Påloggingskoden din er: :param1\n:param2\nSelldone",
        'icon' => 'logge inn',
        'description' => 'Send innloggingskode til kunden for å logge inn i butikken.',

    ],

    'user-login' => [
        'title' => 'Melding om suksess pålogging',
        'sample' => "Kjære <b>navn</b> ,<br> Du har logget på kontoen din med <b>iPhone 165.250.300.1</b> kl. <b>08.05.2021 kl. 9:14</b> .<br> Selldone",
        'body' => "Kjære :param1,\nDu har logget på kontoen din ved :param2 på :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Send en melding etter at kunden har logget inn i butikken.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokado ny bestilling sendes til kjøper',
        'sample' => "<b>Butikkens navn</b><br> Kjære <b>ditt navn</b> ,<br> Vi har mottatt bestillingen din og vi vurderer den.<br> Bestillingsnummer: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nKjære :param1,\nVi har mottatt bestillingen din og vi vurderer den.\nBestillingsnummer: :param2\nSelldone",
        'icon' => 'faktasjekk',
        'description' => 'Send en melding til kunden etter å ha lagt inn en Avocado-bestilling.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado motta ny bestilling sendes til selger',
        'sample' => "Du har mottatt en avokadobestilling:<br> Butikk: <b>Butikkens navn</b><br> Kjøper: <b>Kjøpers navn</b><br> Bestilling: <b>AVO-246</b><br> Selldone",
        'body' => "Du mottok en avokadobestilling:\nButikk: :param1\nKjøper: :param2\nBestilling: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Send en melding til butikkeieren for å informere dem om å motta ny Avocado-bestilling.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokadobestilling klar til å betale',
        'sample' => "<b> Butikknavnet ditt</b><br>Bestillingen din er bekreftet og kan betales via følgende lenke.<br>Bestillingsnummer: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nBestillingen din er bekreftet og kan betales via følgende lenke.\nBestillingsnummer: :param2\nLink: :param1\nSelldone",
        'icon' => 'kvittering',
        'description' => 'Send en melding med betalingslenken til kunden etter at selgeren har satt pris og bekreft Avocado-bestillingen.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Bestilling klar til å sendes',
        'sample' => "Hei <b>Alex</b>, gode nyheter, bestillingen din er nå klar til å sendes.<br>Bestilling: <b>SM-123</b>",
        'body' => "Hei :param4, gode nyheter, bestillingen din er nå klar til å sendes.\nBestilling: :param1",
        'icon' => 'lokal_frakt',
        'description' => 'Send en melding til kunden for å informere dem om at bestillingen deres er klar til å sendes.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Bestilling klar til henting',
        'sample' => "Hei Alex, gode nyheter, bestillingen din er nå klar til å bli hentet.<br>Order: <b>SM-123</b>",
        'body' => "Hei :param4, gode nyheter, bestillingen din er nå klar til å bli hentet.\nBestilling: :param1",
        'icon' => 'del_sted',
        'description' => 'Send en melding til kunden for å informere dem om at bestillingen deres er klar til å bli hentet.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Leverandørbestilling klar til å sendes',
        'sample' => "Hei <b>Alex</b>, gode nyheter, bestillingen din er nå klar til å sendes.<br>Bestilling: <b>SM-123</b>",
        'body' => "Hei :param4, gode nyheter, bestillingen din er nå klar til å sendes.\nBestilling: :param1",
        'icon' => 'lokal_frakt',
        'description' => 'Send en melding til kunden for å informere dem om at bestillingen deres er klar til å sendes. Bare på markedsplassen med direkte fraktmodus og leveringstype er ikke henting.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Leverandørbestilling klar til henting',
        'sample' => "Hei Alex, gode nyheter, bestillingen din er nå klar til å bli hentet.<br>Order: <b>SM-123</b>",
        'body' => "Hei :param4, gode nyheter, bestillingen din er nå klar til å bli hentet.\nBestilling: :param1",
        'icon' => 'del_sted',
        'description' => 'Send en melding til kunden for å informere dem om at bestillingen deres er klar til å bli hentet. Bare på markedsplassen med Direct Shipping Mode og leveringstype er Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Bekreftelse av bestillingsvarer',
        'sample' => "Hei Alex, vi har vurdert bestillingen din. Her er bekreftelsesstatusen for varene dine: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hei :param4, vi har vurdert bestillingen din. Her er bekreftelsesstatusen for varene dine:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'oppgave_avlevert',
        'description' => 'Varsler kunden om varene i bestillingen som er akseptert eller avvist av selgeren.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Bekreftelse av leverandørens bestillingsvarer',
        'sample' => "Hei Alex, vi har vurdert bestillingen din. Her er bekreftelsesstatusen for varene dine: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hei :param4, vi har vurdert bestillingen din. Her er bekreftelsesstatusen for varene dine:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'oppgave_avlevert',
        'description' => 'Varsler kunden om varene i bestillingen som har blitt akseptert eller avvist av leverandøren.',
    ],



];
