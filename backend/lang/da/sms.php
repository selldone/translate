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
        'title' => 'Accepter betaling',
        'sample' => "Din betaling på 267 \$ blev afviklet.<br> Ordre: SM-425<br> Tak, <b>dit butiksnavn</b> .<br> Selldone",
        'body' => "Din :param2 betaling blev afviklet.\nOrdre: :param1\nTak, :param3.\nSelldone",
        'icon' => 'betaling',
        'description' => 'Send en besked til shopkunden for at informere om vellykket betaling.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Accepter betaling',
        'sample' => "Ny betaling på 267 \$ blev afviklet.<br> Ordre: SM-425<br> Tak, <b>dit butiksnavn</b> .<br> Selldone",
        'body' => "Ny :param2-betaling blev afviklet.\nOrdre: :param1\nTak, :param3.\nSelldone",
        'icon' => 'betaling',
        'description' => 'Send en besked til butiksejeren for at informere dem om vellykket betaling.',

    ],

    'vendor-new-order' => [
        'title' => 'Sælger ny ordre',
        'sample' => "Du har modtaget en ny \$200 ordre.<br>Ordre: <b>SM-870</b> for <b>Leverandørnavn</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x",
        'body' => "Du har modtaget en ny :param2 ordre.\nBestilling: :param1 til :param3.\n:param4",
        'icon' => 'butiksfacade',
        'description' => 'Send en besked til sælgeren for at informere dem om en ny ordre.',
    ],








    'shop-login' => [
        'title' => 'Login bekræftelseskode',
        'sample' => "Din loginkode er: <b>123456</b><br> <b>Dit butiksnavn</b><br> Selldone",
        'body' => "Din loginkode er: :param1\n:param2\nSelldone",
        'icon' => 'log ind',
        'description' => 'Send login-kode til kunden for at logge ind i butikken.',

    ],

    'user-login' => [
        'title' => 'Besked om succes med login',
        'sample' => "Kære <b>navn</b> ,<br> Du har logget ind på din konto med <b>iPhone 165.250.300.1</b> den <b>5/8/2021 kl. 9:14</b> .<br> Selldone",
        'body' => "Kære :param1,\nDu har logget ind på din konto af :param2 på :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Send en besked efter kundens login til butikken.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado ny ordre indsendt sendes til køber',
        'sample' => "<b>Dit butiksnavn</b><br> Kære <b>dit navn</b> ,<br> Vi har modtaget din ordre, og vi gennemgår den.<br> Ordrenummer: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nKære :param1,\nVi har modtaget din ordre, og vi gennemgår den.\nOrdrenummer: :param2\nSelldone",
        'icon' => 'faktatjek',
        'description' => 'Send en besked til kunden efter at have afgivet en Avocado-bestilling.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado modtage ny ordre sendes til sælger',
        'sample' => "Du har modtaget en avocadobestilling:<br> Butik: <b>Dit butiksnavn</b><br> Køber: <b>Købers navn</b><br> Bestilling: <b>AVO-246</b><br> Selldone",
        'body' => "Du har modtaget en Avocado-bestilling:\nButik: :param1\nKøber: :param2\nOrdre: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Send en besked til butiksejeren for at informere dem om at modtage en ny Avocado-ordre.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado ordre klar til betaling',
        'sample' => "<b>Dit butiksnavn</b><br>Din ordre er blevet bekræftet og kan betales via følgende link.<br>Ordre #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nDin ordre er blevet bekræftet og kan betales via følgende link.\nOrdrenummer: :param2\nLink: :param1\nSelldone",
        'icon' => 'kvittering',
        'description' => 'Send en besked med betalingslinket til kunden, efter at sælgeren har sat pris og bekræft deres Avocado-bestilling.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Ordren klar til afsendelse',
        'sample' => "Hej <b>Alex</b>, gode nyheder, din ordre er nu klar til at blive afsendt.<br>Ordre: <b>SM-123</b>",
        'body' => "Hej :param4, gode nyheder, din ordre er nu klar til at blive afsendt.\nOrdre: :param1",
        'icon' => 'lokal_forsendelse',
        'description' => 'Send en besked til kunden for at informere dem om, at deres ordre er klar til at blive afsendt.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Bestilling klar til afhentning',
        'sample' => "Hej Alex, gode nyheder, din ordre er nu klar til at blive afhentet.<br>Ordre: <b>SM-123</b>",
        'body' => "Hej :param4, gode nyheder, din ordre er nu klar til at blive afhentet.\nOrdre: :param1",
        'icon' => 'share_location',
        'description' => 'Send en besked til kunden for at informere dem om, at deres ordre er klar til at blive afhentet.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Leverandørordre klar til afsendelse',
        'sample' => "Hej <b>Alex</b>, gode nyheder, din ordre er nu klar til at blive afsendt.<br>Ordre: <b>SM-123</b>",
        'body' => "Hej :param4, gode nyheder, din ordre er nu klar til at blive afsendt.\nOrdre: :param1",
        'icon' => 'lokal_forsendelse',
        'description' => 'Send en besked til kunden for at informere dem om, at deres ordre er klar til at blive afsendt. Bare på markedspladsen med direkte forsendelsestilstand og leveringstype er ikke afhentning.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Leverandørordre klar til afhentning',
        'sample' => "Hej Alex, gode nyheder, din ordre er nu klar til at blive afhentet.<br>Ordre: <b>SM-123</b>",
        'body' => "Hej :param4, gode nyheder, din ordre er nu klar til at blive afhentet.\nOrdre: :param1",
        'icon' => 'share_location',
        'description' => 'Send en besked til kunden for at informere dem om, at deres ordre er klar til at blive afhentet. Lige på markedspladsen med Direct Shipping Mode og leveringstype er Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Bekræftelse af ordrevarer',
        'sample' => "Hej Alex, vi har gennemgået din ordre. Her er bekræftelsesstatus for dine varer: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hej :param4, vi har gennemgået din ordre. Her er bekræftelsesstatus for dine varer:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'opgave_afleveret',
        'description' => 'Meddeler kunden om de varer i deres ordre, som er blevet accepteret eller afvist af sælger.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Bekræftelse af leverandørordrevarer',
        'sample' => "Hej Alex, vi har gennemgået din ordre. Her er bekræftelsesstatus for dine varer: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hej :param4, vi har gennemgået din ordre. Her er bekræftelsesstatus for dine varer:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'opgave_afleveret',
        'description' => 'Meddeler kunden om de varer i deres ordre, der er blevet accepteret eller afvist af sælgeren.',
    ],



];
