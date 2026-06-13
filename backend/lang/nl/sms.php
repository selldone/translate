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
        'title' => 'Accepteer betaling',
        'sample' => "Uw betaling van \$ 267 is succesvol afgehandeld.<br>Bestel: SM-425<br>Bedankt, <b>Uw winkelnaam</b>.<br>Selldone",
        'body' => "Uw :param2-betaling is succesvol afgehandeld.\nBestelling: :param1\nBedankt, :param3.\nSelldone",
        'icon' => 'betaling',
        'description' => 'Stuur een bericht naar de klant in de winkel om hem te informeren over een succesvolle betaling.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Accepteer betaling',
        'sample' => "De nieuwe betaling van \$ 267 is succesvol afgehandeld.<br>Bestelling: SM-425<br>Bedankt, <b>Uw winkelnaam</b>.<br>Selldone",
        'body' => "Nieuwe :param2-betaling is succesvol afgehandeld.\nBestelling: :param1\nBedankt, :param3.\nSelldone",
        'icon' => 'betaling',
        'description' => 'Stuur een bericht naar de winkeleigenaar om hem of haar te informeren over een succesvolle betaling.',

    ],

    'vendor-new-order' => [
        'title' => 'Leverancier Nieuwe bestelling',
        'sample' => "U heeft een nieuwe bestelling van \$ 200 ontvangen.<br>Bestelling: <b>SM-870</b> voor <b>Verkopernaam</b>.<br>✅ Product A| SKU100001 |1x<br>✅ Product B| SKU100002 |1x",
        'body' => "U heeft een nieuwe :param2-bestelling ontvangen.\nBestel: :param1 voor :param3.\n:param4",
        'icon' => 'winkelpui',
        'description' => 'Stuur een bericht naar de leverancier om hem te informeren over een nieuwe bestelling.',
    ],








    'shop-login' => [
        'title' => 'Login verificatiecode',
        'sample' => "Uw inlogcode is: <b>123456</b><br><b>Uw winkelnaam</b><br>Selldone",
        'body' => "Uw inlogcode is: :param1\n:param2\nSelldone",
        'icon' => 'inloggen',
        'description' => 'Stuur de inlogcode naar de klant om in te loggen in de winkel.',

    ],

    'user-login' => [
        'title' => 'Succesbericht inloggen',
        'sample' => "Beste <b>Naam</b>,<br>U bent ingelogd op uw account via <b>iPhone 165.250.300.1</b> op <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Beste :param1,\nU bent ingelogd op uw account van :param2 op :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Stuur een bericht nadat de klant is ingelogd in de winkel.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado nieuwe bestelling ingediend verzenden naar koper',
        'sample' => "<b>Uw winkelnaam</b><br>Beste <b>Uw naam</b>,<br>Wij hebben uw bestelling ontvangen en zijn deze aan het beoordelen.<br>Bestelnummer: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nBeste :param1,\nWij hebben uw bestelling ontvangen en zijn deze aan het beoordelen.\nBestelnummer: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Stuur een bericht naar de klant nadat hij een avocado-bestelling heeft geplaatst.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado nieuwe bestelling ontvangen verzenden naar verkoper',
        'sample' => "Je hebt een Avocado-bestelling ontvangen:<br>Winkel: <b>Je winkelnaam</b><br>Koper: <b>Naam koper</b><br>Bestelling: <b>AVO-246</b><br>Selldone",
        'body' => "Je hebt een Avocado-bestelling ontvangen:\nWinkel: :param1\nKoper: :param2\nBestelling: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Stuur een bericht naar de winkeleigenaar om hem of haar te informeren over een nieuwe bestelling met avocado\'s.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado bestelling klaar om te betalen',
        'sample' => "<b>Uw winkelnaam</b><br>Uw bestelling is bevestigd en kunt u betalen via de volgende link.<br>Bestelnummer: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nUw bestelling is bevestigd en u kunt betalen via de volgende link.\nBestelnummer: :param2\nLink: :param1\nSelldone",
        'icon' => 'ontvangst',
        'description' => 'Stuur een bericht met de betalingslink naar de klant nadat de verkoper de kosten heeft ingesteld en de avocado-bestelling heeft bevestigd.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Bestelling klaar voor verzending',
        'sample' => "Hallo <b>Alex</b>, goed nieuws, uw bestelling is nu klaar voor verzending.<br>Bestelling: <b>SM-123</b>",
        'body' => "Hallo :param4, goed nieuws, uw bestelling is nu klaar voor verzending.\nBestelling: :param1",
        'icon' => 'lokale_verzending',
        'description' => 'Stuur een bericht naar de klant om hem te laten weten dat zijn bestelling klaar is voor verzending.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Bestelling klaar om af te halen',
        'sample' => "Hallo Alex, goed nieuws, je bestelling staat nu klaar om afgehaald te worden.<br>Bestelling: <b>SM-123</b>",
        'body' => "Hallo :param4, goed nieuws, uw bestelling is nu klaar om opgehaald te worden.\nBestelling: :param1",
        'icon' => 'deel_locatie',
        'description' => 'Stuur een bericht naar de klant om hem te laten weten dat zijn bestelling klaar is om opgehaald te worden.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Leveranciersorder klaar voor verzending',
        'sample' => "Hallo <b>Alex</b>, goed nieuws, uw bestelling is nu klaar voor verzending.<br>Bestelling: <b>SM-123</b>",
        'body' => "Hallo :param4, goed nieuws, uw bestelling is nu klaar voor verzending.\nBestelling: :param1",
        'icon' => 'lokale_verzending',
        'description' => 'Stuur een bericht naar de klant om hem te laten weten dat zijn bestelling klaar is voor verzending. Alleen op marktplaats met directe verzendmodus en het bezorgtype is niet afhalen.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Bestelling van leverancier klaar om opgehaald te worden',
        'sample' => "Hallo Alex, goed nieuws, je bestelling staat nu klaar om afgehaald te worden.<br>Bestelling: <b>SM-123</b>",
        'body' => "Hallo :param4, goed nieuws, uw bestelling is nu klaar om opgehaald te worden.\nBestelling: :param1",
        'icon' => 'deel_locatie',
        'description' => 'Stuur een bericht naar de klant om hem te laten weten dat zijn bestelling klaar is om opgehaald te worden. Alleen op de marktplaats met de directe verzendmodus en het bezorgingstype is Afhalen.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Bevestiging van bestelartikelen',
        'sample' => "Hallo Alex, we hebben je bestelling beoordeeld. Hier is de bevestigingsstatus voor uw artikelen: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hallo :param4, we hebben uw bestelling beoordeeld. Hier is de bevestigingsstatus voor uw artikelen:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'opdracht_ingeschakeld',
        'description' => 'Informeert de klant over de artikelen in zijn bestelling die door de verkoper zijn geaccepteerd of afgewezen.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Bevestiging van orderartikelen van leverancier',
        'sample' => "Hallo Alex, we hebben je bestelling beoordeeld. Hier is de bevestigingsstatus voor uw artikelen: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hallo :param4, we hebben uw bestelling beoordeeld. Hier is de bevestigingsstatus voor uw artikelen:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'opdracht_ingeschakeld',
        'description' => 'Informeert de klant over de artikelen in zijn bestelling die door de leverancier zijn geaccepteerd of afgewezen.',
    ],



];
