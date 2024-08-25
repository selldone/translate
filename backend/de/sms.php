<?php 

 return [
     "shop-order-payment" => [
     "title" => "Zahlung akzeptieren",
     "sample" => "Ihre Zahlung in Höhe von 267 $ wurde erfolgreich abgewickelt.<br> Bestellung: SM-425<br> Danke, <b>Ihr Geschäftsname</b> .<br> Ausverkauft",
     "body" => "Ihre :param2-Zahlung wurde erfolgreich abgewickelt. Bestellung: :param1 Danke, :param3. Ausverkauft",
     "description" => "Senden Sie dem Shop-Kunden eine Nachricht, um ihn über die erfolgreiche Zahlung zu informieren.",
],
     "shop-order-payment-admin" => [
     "title" => "Zahlung akzeptieren",
     "sample" => "Neue 267 $-Zahlung erfolgreich abgewickelt.<br> Bestellung: SM-425<br> Danke, <b>Ihr Geschäftsname</b> .<br> Ausverkauft",
     "body" => "Neue :param2-Zahlung erfolgreich abgewickelt. Bestellung: :param1 Danke, :param3. Ausverkauft",
     "description" => "Senden Sie dem Shop-Inhaber eine Nachricht, um ihn über die erfolgreiche Zahlung zu informieren.",
],
     "vendor-new-order" => [
     "title" => "Neue Lieferantenbestellung",
     "sample" => "Sie haben eine neue Bestellung im Wert von 200 $ erhalten.<br> Bestellung: SM-870 von <b>Herstellername</b> .",
     "body" => "Sie haben eine neue :param2-Bestellung erhalten. Bestellung: :param1 für :param3.",
     "description" => "Senden Sie dem Lieferanten eine Nachricht, um ihn über eine neue Bestellung zu informieren.",
],
     "shop-login" => [
     "title" => "Login-Bestätigungscode",
     "sample" => "Ihr Login-Code lautet: <b>123456</b><br> <b>Ihr Geschäftsname</b><br> Ausverkauft",
     "body" => "Ihr Anmeldecode lautet: :param1 :param2 Selldone",
     "description" => "Senden Sie dem Kunden einen Login-Code, um sich im Shop anzumelden.",
],
     "user-login" => [
     "title" => "Login-Erfolgsmeldung",
     "sample" => "Lieber <b>Name</b> ,<br> Sie haben sich am <b>08.05.2021 09:14 Uhr</b> mit dem <b>iPhone 165.250.300.1</b> bei Ihrem Konto angemeldet.<br> Ausverkauft",
     "body" => "Hallo :param1, Sie haben sich mit :param2 unter :param3 in Ihr Konto eingeloggt. Ausverkauft",
     "description" => "Senden Sie eine Nachricht, nachdem sich der Kunde im Shop angemeldet hat.",
],
     "avocado-order-submit" => [
     "title" => "Avocado neue Bestellung aufgegeben an Käufer senden",
     "sample" => "<b>Ihr Geschäftsname</b><br> Lieber <b>Dein Name</b> ,<br> Wir haben Ihre Bestellung erhalten und prüfen sie.<br> Bestellnummer: <b>AVO-246</b><br> Ausverkauft",
     "body" => ":param3 Sehr geehrte/r :param1, Wir haben Ihre Bestellung erhalten und prüfen sie. Bestellnummer: :param2 Verkauft",
     "description" => "Senden Sie dem Kunden eine Nachricht, nachdem Sie eine Avocado-Bestellung aufgegeben haben.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado erhält eine neue Bestellung, die an den Verkäufer gesendet wird",
     "sample" => "Sie haben eine Avocado-Bestellung erhalten:<br> Shop: <b>Ihr Shop-Name</b><br> Käufer: <b>Name</b> des Käufers<br> Bestellung: <b>AVO-246</b><br> Ausverkauft",
     "body" => "Sie haben eine Avocado-Bestellung erhalten: Geschäft: :param1 Käufer: :param2 Bestellung: :param3 Verkauft",
     "description" => "Senden Sie dem Shop-Inhaber eine Nachricht, um ihn über den Eingang einer neuen Avocado-Bestellung zu informieren.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avocado-Bestellung zahlungsbereit",
     "sample" => "<b>Ihr Geschäftsname</b><br> Ihre Bestellung wurde bestätigt und kann über den folgenden Link bezahlt werden.<br> Bestellnummer: <b>AVO-246</b><br> Link: <b>https://ihre-domain/avocado</b><br> Ausverkauft",
     "body" => ":param3 Ihre Bestellung wurde bestätigt und kann über den folgenden Link bezahlt werden. Bestellnummer: :param2 Link: :param1 Verkauft",
     "description" => "Senden Sie dem Kunden eine Nachricht mit dem Zahlungslink, nachdem der Verkäufer die Kosten festgelegt und seine Avocado-Bestellung bestätigt hat.",
],
];