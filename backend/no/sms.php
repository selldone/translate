<?php 

 return [
     "shop-order-payment" => [
     "title" => "Godta betaling",
     "sample" => "Betalingen din på 267 $ ble avgjort.<br> Bestilling: SM-425<br> Takk, <b>butikknavnet ditt</b> .<br> Selldone",
     "body" => "Din :param2-betaling ble avgjort. Bestill: :param1 Takk, :param3. Selldone",
],
     "shop-order-payment-admin" => [
     "title" => "Godta betaling",
     "sample" => "Ny betaling på 267$ ble avgjort.<br> Bestilling: SM-425<br> Takk, <b>butikknavnet ditt</b> .<br> Selldone",
     "body" => "Ny :param2-betaling ble avgjort. Bestill: :param1 Takk, :param3. Selldone",
],
     "shop-login" => [
     "title" => "Bekreftelseskode for pålogging",
     "sample" => "Påloggingskoden din er: <b>123456</b><br> <b>Butikkens navn</b><br> Selldone",
     "body" => "Din påloggingskode er: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Melding om suksess pålogging",
     "sample" => "Kjære <b>navn</b> ,<br> Du har logget på kontoen din med <b>iPhone 165.250.300.1</b> kl. <b>08.05.2021 kl. 9:14</b> .<br> Selldone",
     "body" => "Kjære :param1, Du har logget på kontoen din med :param2 på :param3. Selldone",
],
     "avocado-order-submit" => [
     "title" => "Avokado ny bestilling sendes til kjøper",
     "sample" => "<b>Butikkens navn</b><br> Kjære <b>ditt navn</b> ,<br> Vi har mottatt bestillingen din og vi vurderer den.<br> Bestillingsnummer: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Kjære :param1, Vi har mottatt bestillingen din og vi vurderer den. Bestillingsnummer: :param2 Selldone",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado motta ny bestilling sendes til selger",
     "sample" => "Du har mottatt en avokadobestilling:<br> Butikk: <b>Butikkens navn</b><br> Kjøper: <b>Kjøpers navn</b><br> Bestilling: <b>AVO-246</b><br> Selldone",
     "body" => "Du mottok en avokadobestilling: Butikk: :param1 Kjøper: :param2 Bestilling: :param3 Selldone",
],
     "avocado-ready-to-pay" => [
     "title" => "Avokadobestilling klar til å betale",
     "sample" => "<b>Butikkens navn</b><br> Bestillingen din er bekreftet og kan betales via følgende lenke.<br> Bestillingsnummer: <b>AVO-246</b><br> Link: <b>https://ditt-domene/avocado</b><br> Selldone",
     "body" => ":param3 Bestillingen din er bekreftet og kan betales via følgende lenke. Bestillingsnummer: :param2 Link: :param1 Selldone",
],
];