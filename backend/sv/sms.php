<?php 

 return [
     "shop-order-payment" => [
     "title" => "Acceptera betalning",
     "sample" => "Din betalning på 267 $ har lösts.<br> Beställning: SM-425<br> Tack, <b>ditt butiksnamn</b> .<br> Selldone",
     "body" => "Din :param2-betalning har lösts. Beställning: :param1 Tack, :param3. Selldone",
     "description" => "Skicka ett meddelande till butikskund för att informera om lyckad betalning.",
],
     "shop-order-payment-admin" => [
     "title" => "Acceptera betalning",
     "sample" => "Ny betalning på 267 $ löstes.<br> Beställning: SM-425<br> Tack, <b>ditt butiksnamn</b> .<br> Selldone",
     "body" => "Ny :param2-betalning har lösts. Beställning: :param1 Tack, :param3. Selldone",
     "description" => "Skicka ett meddelande till butiksägaren för att informera dem om framgångsrik betalning.",
],
     "vendor-new-order" => [
     "title" => "Säljarens ny beställning",
     "sample" => "Du har fått en ny $200-beställning.<br> Beställning: SM-870 från <b>Leverantörens namn</b> .",
     "body" => "Du har fått en ny :param2-beställning. Beställ: :param1 för :param3.",
     "description" => "Skicka ett meddelande till leverantören för att informera dem om en ny beställning.",
],
     "shop-login" => [
     "title" => "Verifieringskod för inloggning",
     "sample" => "Din inloggningskod är: <b>123456</b><br> <b>Ditt butiksnamn</b><br> Selldone",
     "body" => "Din inloggningskod är: :param1 :param2 Selldon",
     "description" => "Skicka inloggningskod till kunden för att logga in i butiken.",
],
     "user-login" => [
     "title" => "Meddelande om inloggning",
     "sample" => "Kära <b>namn</b> ,<br> Du har loggat in på ditt konto med <b>iPhone 165.250.300.1</b> <b>den 5/8/2021 9:14</b> .<br> Selldone",
     "body" => "Bästa :param1, Du har loggat in på ditt konto med :param2 på :param3. Selldone",
     "description" => "Skicka ett meddelande efter att kunden loggat in i butiken.",
],
     "avocado-order-submit" => [
     "title" => "Avokado ny beställning skickas till köparen",
     "sample" => "<b>Ditt butiksnamn</b><br> Kära <b>ditt namn</b> ,<br> Vi har tagit emot din beställning och vi granskar den.<br> Beställningsnummer: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Bästa :param1, Vi har tagit emot din beställning och vi granskar den. Beställningsnummer: :param2 Selldon",
     "description" => "Skicka ett meddelande till kunden efter att ha lagt en avokadobeställning.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado får ny beställning skickas till säljaren",
     "sample" => "Du har fått en avokadobeställning:<br> Butik: <b>Ditt butiksnamn</b><br> Köpare: <b>Köparens namn</b><br> Beställning: <b>AVO-246</b><br> Selldone",
     "body" => "Du fick en avokadobeställning: Butik: :param1 Köpare: :param2 Beställning: :param3 Selldon",
     "description" => "Skicka ett meddelande till butiksägaren för att informera dem om att få en ny avokadobeställning.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avokadobeställning redo att betala",
     "sample" => "<b>Ditt butiksnamn</b><br> Din beställning har bekräftats och kan betalas via följande länk.<br> Beställningsnummer: <b>AVO-246</b><br> Länk: <b>https://din-domän/avocado</b><br> Selldone",
     "body" => ":param3 Din beställning har bekräftats och kan betalas via följande länk. Beställningsnummer: :param2 Länk: :param1 Säljd",
     "description" => "Skicka ett meddelande med betalningslänken till kunden efter att säljaren ställt in kostnaden och bekräfta sin Avocado-beställning.",
],
];