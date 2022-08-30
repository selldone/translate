<?php 

 return [
     "shop-order-payment" => [
     "title" => "Accepteer betaling",
     "sample" => "Uw betaling van 267$ is succesvol afgehandeld.<br> Bestelling: SM-425<br> Bedankt, <b>uw winkelnaam</b> .<br> Verkocht",
     "body" => "Uw :param2-betaling is succesvol afgehandeld. Volgorde: :param1 Bedankt, :param3. Verkocht",
],
     "shop-order-payment-admin" => [
     "title" => "Accepteer betaling",
     "sample" => "Nieuwe 267$ betaling succesvol afgehandeld.<br> Bestelling: SM-425<br> Bedankt, <b>uw winkelnaam</b> .<br> Verkocht",
     "body" => "Nieuw :param2 betaling succesvol afgehandeld. Volgorde: :param1 Bedankt, :param3. Verkocht",
],
     "shop-login" => [
     "title" => "Login verificatiecode",
     "sample" => "Uw inlogcode is: <b>123456</b><br> <b>Uw winkelnaam</b><br> Verkocht",
     "body" => "Uw inlogcode is: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Succesbericht inloggen",
     "sample" => "Beste <b>naam</b> ,<br> U bent ingelogd op uw account via <b>iPhone 165.250.300.1</b> op <b>8-5-21 21:14 uur</b> .<br> Verkocht",
     "body" => "Beste :param1, U bent ingelogd op uw account door :param2 op :param3. Verkocht",
],
     "avocado-order-submit" => [
     "title" => "Avocado nieuwe bestelling ingediend verzenden naar koper",
     "sample" => "<b>Uw winkelnaam</b><br> Beste <b>uw naam</b> ,<br> We hebben uw bestelling ontvangen en zijn deze aan het beoordelen.<br> Bestel #: <b>AVO-246</b><br> Verkocht",
     "body" => ":param3 Beste :param1, We hebben uw bestelling ontvangen en zijn deze aan het beoordelen. Bestel #: :param2 Selldone",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado nieuwe bestelling ontvangen verzenden naar verkoper",
     "sample" => "Je hebt een avocado-bestelling ontvangen:<br> Winkel: <b>uw winkelnaam</b><br> Koper: <b>naam koper</b><br> Bestelling: <b>AVO-246</b><br> Verkocht",
     "body" => "Je hebt een avocado-bestelling ontvangen: Winkel: :param1 Koper: :param2 Bestelling: :param3 Selldone",
],
     "avocado-ready-to-pay" => [
     "title" => "Avocado bestelling klaar om te betalen",
     "sample" => "<b>Uw winkelnaam</b><br> Uw bestelling is bevestigd en kan worden betaald via de volgende link.<br> Bestel #: <b>AVO-246</b><br> Link: <b>https://uw-domein/avocado</b><br> Verkocht",
     "body" => ":param3 Uw bestelling is bevestigd en kan betaald worden via de volgende link. Bestel #: :param2 Link: :param1 Verkocht",
],
];