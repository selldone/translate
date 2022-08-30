<?php 

 return [
     "shop-order-payment" => [
     "title" => "Zahlung akzeptieren",
     "sample" => "Ihre Zahlung in Höhe von 267 $ wurde erfolgreich abgewickelt.<br> Bestellung: SM-425<br> Danke, <b>Ihr Geschäftsname</b> .<br> Ausverkauft",
     "body" => "Ihre :param2-Zahlung wurde erfolgreich abgewickelt. Bestellung: :param1 Danke, :param3. Ausverkauft",
],
     "shop-order-payment-admin" => [
     "title" => "Zahlung akzeptieren",
     "sample" => "Neue 267 $-Zahlung erfolgreich abgewickelt.<br> Bestellung: SM-425<br> Danke, <b>Ihr Geschäftsname</b> .<br> Ausverkauft",
     "body" => "Neue :param2-Zahlung erfolgreich abgewickelt. Bestellung: :param1 Danke, :param3. Ausverkauft",
],
     "shop-login" => [
     "title" => "Login-Bestätigungscode",
     "sample" => "Ihr Login-Code lautet: <b>123456</b><br> <b>Ihr Geschäftsname</b><br> Ausverkauft",
     "body" => "Ihr Anmeldecode lautet: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Login-Erfolgsmeldung",
     "sample" => "Lieber <b>Name</b> ,<br> Sie haben sich am <b>08.05.2021 09:14 Uhr</b> mit dem <b>iPhone 165.250.300.1</b> bei Ihrem Konto angemeldet.<br> Ausverkauft",
     "body" => "Hallo :param1, Sie haben sich mit :param2 unter :param3 in Ihr Konto eingeloggt. Ausverkauft",
],
     "avocado-order-submit" => [
     "title" => "Avocado neue Bestellung aufgegeben an Käufer senden",
     "sample" => "<b>Ihr Geschäftsname</b><br> Lieber <b>Dein Name</b> ,<br> Wir haben Ihre Bestellung erhalten und prüfen sie.<br> Bestellnummer: <b>AVO-246</b><br> Ausverkauft",
     "body" => ":param3 Sehr geehrte/r :param1, Wir haben Ihre Bestellung erhalten und prüfen sie. Bestellnummer: :param2 Verkauft",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado erhält eine neue Bestellung, die an den Verkäufer gesendet wird",
     "sample" => "Sie haben eine Avocado-Bestellung erhalten:<br> Shop: <b>Ihr Shop-Name</b><br> Käufer: <b>Name</b> des Käufers<br> Bestellung: <b>AVO-246</b><br> Ausverkauft",
     "body" => "Sie haben eine Avocado-Bestellung erhalten: Geschäft: :param1 Käufer: :param2 Bestellung: :param3 Verkauft",
],
     "avocado-ready-to-pay" => [
     "title" => "Avocado-Bestellung zahlungsbereit",
     "sample" => "<b>Ihr Geschäftsname</b><br> Ihre Bestellung wurde bestätigt und kann über den folgenden Link bezahlt werden.<br> Bestellnummer: <b>AVO-246</b><br> Link: <b>https://ihre-domain/avocado</b><br> Ausverkauft",
     "body" => ":param3 Ihre Bestellung wurde bestätigt und kann über den folgenden Link bezahlt werden. Bestellnummer: :param2 Link: :param1 Verkauft",
],
];