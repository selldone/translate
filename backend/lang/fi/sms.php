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
        'title' => 'Hyväksy maksu',
        'sample' => "267 \$ maksusi suoritettiin onnistuneesti.<br>Tilaus: SM-425<br>Kiitos, <b>Liikkeesi nimi</b>.<br>Selldone",
        'body' => ":param2-maksusi suoritettiin onnistuneesti.\nTilaus: :param1\nKiitos, :param3.\nSelldone",
        'icon' => 'maksu',
        'description' => 'Lähetä myymälän asiakkaalle viesti ja kerro onnistuneesta maksusta.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Hyväksy maksu',
        'sample' => "Uusi 267 dollarin maksu suoritettiin onnistuneesti.<br>Tilaus: SM-425<br>Kiitos, <b>kaupan nimi</b>.<br>Selldone",
        'body' => "Uusi :param2-maksu suoritettiin onnistuneesti.\nTilaus: :param1\nKiitos, :param3.\nSelldone",
        'icon' => 'maksu',
        'description' => 'Lähetä viesti kaupan omistajalle ja ilmoita onnistuneesta maksusta.',

    ],

    'vendor-new-order' => [
        'title' => 'Myyjä Uusi tilaus',
        'sample' => "Sait uuden 200 dollarin tilauksen.<br>Tilaus: <b>SM-870</b> <b>Myyjän nimi</b>.<br>✅ Tuote A| SKU100001 |1x<br>✅ Tuote B| SKU100002 |1x",
        'body' => "Sait uuden :param2-tilauksen.\nTilaus: :param1 :param3.\n:param4",
        'icon' => 'myymälä',
        'description' => 'Lähetä myyjälle viesti uudesta tilauksesta.',
    ],








    'shop-login' => [
        'title' => 'Kirjautumisen vahvistuskoodi',
        'sample' => "Kirjautumiskoodisi on: <b>123456</b><br><b> Kauppasi nimi</b><br>Selldone",
        'body' => "Kirjautumiskoodisi on: :param1\n:param2\nSelldone",
        'icon' => 'kirjaudu sisään',
        'description' => 'Lähetä asiakkaalle kirjautumiskoodi myymälään kirjautumiseksi.',

    ],

    'user-login' => [
        'title' => 'Kirjautumisen onnistumisviesti',
        'sample' => "Hyvä <b>Name</b>,<br>Olet kirjautunut tilillesi numerolla <b>iPhone 165.250.300.1</b> osoitteessa <b>5/8/2021 9:14AMQQQQ00QQQ07.",
        'body' => "Hyvä :param1,\nOlet kirjautunut tilillesi :param2 osoitteessa :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Lähetä viesti, kun asiakas on kirjautunut myymälään.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado uusi tilaus lähetetty lähetä ostajalle',
        'sample' => "<b>Liikkeesi nimi</b><br>Hei <b>Nimesi</b>,<br>Olemme vastaanottaneet tilauksesi ja tarkistamme sen.<br>Tilausnumero: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nHyvä :param1,\nOlemme vastaanottaneet tilauksesi ja tarkistamme sen.\nTilausnumero: :param2\nSelldone",
        'icon' => 'faktan_tarkistus',
        'description' => 'Lähetä asiakkaalle viesti Avocado-tilauksen jälkeen.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado vastaanottaa uuden tilauksen lähettää myyjälle',
        'sample' => "Sait Avocado-tilauksen:<br>Kauppa: <b> Kauppasi nimi</b><br>Ostaja: <b>Ostajan nimi</b><br>Tilaus: <b>AVO-246</b><br>Selldone",
        'body' => "Sait avokadotilauksen:\nKauppa: :param1\nOstaja: :param2\nTilaus: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Lähetä myymälän omistajalle viesti uudesta Avocado-tilauksesta.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokadotilaus valmis maksamaan',
        'sample' => "<b>Liikkesi nimi</b><br>Tilauksesi on vahvistettu ja voit maksaa seuraavan linkin kautta.<br>Tilausnumero: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nTilauksesi on vahvistettu ja voit maksaa alla olevan linkin kautta.\nTilausnumero: :param2\nLinkki: :param1\nSelldone",
        'icon' => 'kuitti',
        'description' => 'Lähetä asiakkaalle maksulinkin sisältävä viesti, kun myyjä on asettanut hinnan ja vahvistanut Avocado-tilauksensa.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Tilaus valmis lähetettäväksi',
        'sample' => "Hei <b>Alex</b>, hyviä uutisia, tilauksesi on nyt valmis lähetettäväksi.<br>Tilaus: <b>SM-123</b>",
        'body' => "Hei :param4, hyviä uutisia, tilauksesi on nyt valmis lähetettäväksi.\nTilaus: :param1",
        'icon' => 'local_shipping',
        'description' => 'Lähetä asiakkaalle viesti, jossa kerrotaan, että hänen tilauksensa on valmis lähetettäväksi.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Tilaus valmiina noudettavaksi',
        'sample' => "Hei Alex, hyviä uutisia, tilauksesi on nyt valmis noudettavaksi.<br>Tilaus: <b>SM-123</b>",
        'body' => "Hei :param4, hyviä uutisia, tilauksesi on nyt valmis noudettavaksi.\nTilaus: :param1",
        'icon' => 'share_location',
        'description' => 'Lähetä asiakkaalle viesti, jossa kerrotaan, että hänen tilauksensa on valmis noudettavaksi.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Myyjän tilaus valmiina lähetettäväksi',
        'sample' => "Hei <b>Alex</b>, hyviä uutisia, tilauksesi on nyt valmis lähetettäväksi.<br>Tilaus: <b>SM-123</b>",
        'body' => "Hei :param4, hyviä uutisia, tilauksesi on nyt valmis lähetettäväksi.\nTilaus: :param1",
        'icon' => 'local_shipping',
        'description' => 'Lähetä asiakkaalle viesti, jossa kerrotaan, että hänen tilauksensa on valmis lähetettäväksi. Juuri markkinoilla suoratoimitustilassa ja toimitustapa ei ole nouto.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Myyjän tilaus valmiina noudettavaksi',
        'sample' => "Hei Alex, hyviä uutisia, tilauksesi on nyt valmis noudettavaksi.<br>Tilaus: <b>SM-123</b>",
        'body' => "Hei :param4, hyviä uutisia, tilauksesi on nyt valmis noudettavaksi.\nTilaus: :param1",
        'icon' => 'share_location',
        'description' => 'Lähetä asiakkaalle viesti, jossa kerrotaan, että hänen tilauksensa on valmis noudettavaksi. Juuri markkinoilla suoratoimitustilassa ja toimitustapa on nouto.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Tilaustuotteiden vahvistus',
        'sample' => "Hei Alex, olemme tarkistaneet tilauksesi. Tässä on tuotteidesi vahvistustila: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hei :param4, olemme tarkistaneet tilauksesi. Tässä on tuotteidesi vahvistuksen tila:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Ilmoittaa asiakkaalle tilauksensa tuotteista, jotka myyjä on hyväksynyt tai hylännyt.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Myyjän tilaustuotteiden vahvistus',
        'sample' => "Hei Alex, olemme tarkistaneet tilauksesi. Tässä on tuotteidesi vahvistustila: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hei :param4, olemme tarkistaneet tilauksesi. Tässä on tuotteidesi vahvistuksen tila:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Ilmoittaa asiakkaalle tilauksensa tuotteista, jotka myyjä on hyväksynyt tai hylännyt.',
    ],



];
