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
        'title' => 'Zahlung erfolgreich',
        'sample' => "Ihre Zahlung in Höhe von 267 \$ wurde erfolgreich abgewickelt.<br> Bestellung: SM-425<br> Danke, <b>Ihr Geschäftsname</b>.<br> Selldone",
        'body' => "Ihre :param2-Zahlung wurde erfolgreich abgewickelt.\nBestellnummer: :param1\nDanke, :param3.\nSelldone",
        'icon' => 'Zahlung',
        'description' => 'Senden Sie dem Shop-Kunden eine Nachricht, um ihn über die erfolgreiche Zahlung zu informieren.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Neue Zahlung eingegangen',
        'sample' => "Neue Zahlung in Höhe von 267 \$ erfolgreich abgewickelt.<br> Bestellung: SM-425<br> Danke, <b>Ihr Geschäftsname</b>.<br> Selldone",
        'body' => "Die neue Zahlung :param2 wurde erfolgreich abgewickelt.\nBestellnummer: :param1\nDanke, :param3.\nSelldone",
        'icon' => 'Zahlung',
        'description' => 'Senden Sie dem Shop-Inhaber eine Nachricht, um ihn über die erfolgreiche Zahlung zu informieren.',

    ],

    'vendor-new-order' => [
        'title' => 'Neue Lieferantenbestellung',
        'sample' => "Sie haben eine neue Bestellung im Wert von 200 \$ erhalten.<br>Bestellung: <b>SM-870</b> für <b>Name des Anbieters</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x",
        'body' => "Sie haben eine neue :param2-Bestellung erhalten.\nBestellen Sie: :param1 für :param3.\n:param4",
        'icon' => 'Schaufenster',
        'description' => 'Senden Sie dem Lieferanten eine Nachricht, um ihn über eine neue Bestellung zu informieren.',
    ],








    'shop-login' => [
        'title' => 'Login-Bestätigungscode',
        'sample' => "Ihr Login-Code lautet: <b>123456</b><br> <b>Ihr Geschäftsname</b><br> Selldone",
        'body' => "Ihr Login-Code lautet: :param1\n:param2\nSelldone",
        'icon' => 'Anmelden',
        'description' => 'Senden Sie dem Kunden einen Login-Code zur Anmeldung im Shop.',

    ],

    'user-login' => [
        'title' => 'Anmeldebenachrichtigung',
        'sample' => "Lieber <b>Name</b>,<br> Sie haben sich am <b>08.05.2021 09:14 Uhr</b> mit dem <b>iPhone 165.250.300.1</b> bei Ihrem Konto angemeldet.<br> Selldone",
        'body' => "Lieber :param1,\nSie haben sich bei :param2 bei :param3 bei Ihrem Konto angemeldet.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Senden Sie eine Nachricht, nachdem sich der Kunde im Shop angemeldet hat.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado-Bestellung eingegangen – Bestätigung an Käufer',
        'sample' => "<b>Ihr Geschäftsname</b><br> Liebe/r <b>Name</b>,<br> Wir haben Ihre Bestellung erhalten und prüfen sie.<br> Bestellnummer: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nLieber :param1,\nWir haben Ihre Bestellung erhalten und prüfen sie derzeit.\nBestellnummer: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Senden Sie dem Kunden eine Bestätigung, nachdem eine Avocado-Bestellung eingegangen ist.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Neue Avocado-Bestellung – Benachrichtigung an Verkäufer',
        'sample' => "Sie haben eine Avocado-Bestellung erhalten:<br> Shop: <b>Ihr Shop-Name</b><br> Käufer: <b>Name des Käufers</b><br> Bestellung: <b>AVO-246</b><br> Selldone",
        'body' => "Sie haben eine Avocado-Bestellung erhalten:\nShop: :param1\nKäufer: :param2\nBestellnummer: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Senden Sie dem Shop-Inhaber eine Nachricht über den Eingang einer neuen Avocado-Bestellung.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado-Bestellung zahlungsbereit',
        'sample' => "<b>Ihr Shopname</b><br>Ihre Bestellung wurde bestätigt und kann über den folgenden Link bezahlt werden.<br>Bestellnummer: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nIhre Bestellung wurde bestätigt und kann über den folgenden Link bezahlt werden.\nBestellnummer: :param2\nLink: :param1\nSelldone",
        'icon' => 'Quittung',
        'description' => 'Senden Sie dem Kunden den Zahlungslink, nachdem der Verkäufer die Kosten festgelegt und die Avocado-Bestellung bestätigt hat.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Bestellung versandfertig',
        'sample' => "Hallo <b>Alex</b>, gute Nachrichten, Ihre Bestellung ist jetzt versandbereit.<br>Bestellung: <b>SM-123</b>",
        'body' => "Hallo :param4, gute Nachrichten, Ihre Bestellung ist jetzt versandbereit.\nBestellnummer: :param1",
        'icon' => 'local_shipping',
        'description' => 'Senden Sie eine Nachricht an den Kunden, um ihn darüber zu informieren, dass seine Bestellung versandbereit ist.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Bestellung zur Abholung bereit',
        'sample' => "Hallo Alex, gute Nachrichten, deine Bestellung ist jetzt zur Abholung bereit.<br>Bestellung: <b>SM-123</b>",
        'body' => "Hallo :param4, gute Nachrichten, Ihre Bestellung ist jetzt zur Abholung bereit.\nBestellnummer: :param1",
        'icon' => 'share_location',
        'description' => 'Senden Sie eine Nachricht an den Kunden, um ihn darüber zu informieren, dass seine Bestellung zur Abholung bereit ist.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Lieferantenbestellung ist versandbereit',
        'sample' => "Hallo <b>Alex</b>, gute Nachrichten, Ihre Bestellung ist jetzt versandbereit.<br>Bestellung: <b>SM-123</b>",
        'body' => "Hallo :param4, gute Nachrichten, Ihre Bestellung ist jetzt versandbereit.\nBestellnummer: :param1",
        'icon' => 'local_shipping',
        'description' => 'Senden Sie eine Nachricht an den Kunden, um ihn darüber zu informieren, dass seine Bestellung versandbereit ist. Nur auf dem Marktplatz mit Direktversandmodus und der Lieferart ist nicht „Abholung“.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Lieferantenbestellung zur Abholung bereit',
        'sample' => "Hallo Alex, gute Nachrichten, deine Bestellung ist jetzt zur Abholung bereit.<br>Bestellung: <b>SM-123</b>",
        'body' => "Hallo :param4, gute Nachrichten, Ihre Bestellung ist jetzt zur Abholung bereit.\nBestellnummer: :param1",
        'icon' => 'share_location',
        'description' => 'Senden Sie eine Nachricht an den Kunden, um ihn darüber zu informieren, dass seine Bestellung zur Abholung bereit ist. Nur im Marktplatz mit Direktversandmodus und Lieferart „Abholung“.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Bestätigung der Bestellposition',
        'sample' => "Hallo Alex, wir haben deine Bestellung überprüft. Hier ist der Bestätigungsstatus für Ihre Artikel:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hallo :param4, wir haben Ihre Bestellung überprüft. Hier ist der Bestätigungsstatus für Ihre Artikel:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'Zuordnung_umgedreht_in',
        'description' => 'Benachrichtigt den Kunden über die Artikel in seiner Bestellung, die vom Verkäufer angenommen oder abgelehnt wurden.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Bestätigung der Lieferantenbestellpositionen',
        'sample' => "Hallo Alex, wir haben deine Bestellung überprüft. Hier ist der Bestätigungsstatus für Ihre Artikel:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hallo :param4, wir haben Ihre Bestellung überprüft. Hier ist der Bestätigungsstatus für Ihre Artikel:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'Zuordnung_umgedreht_in',
        'description' => 'Benachrichtigt den Kunden über die Artikel in seiner Bestellung, die vom Lieferanten angenommen oder abgelehnt wurden.',
    ],



];
