<?php 

 return [
     "shop-order-payment" => [
     "title" => "Accepter betaling",
     "sample" => "Din betaling på 267 $ blev afviklet.<br> Ordre: SM-425<br> Tak, <b>dit butiksnavn</b> .<br> Selldone",
     "body" => "Din :param2-betaling blev afviklet. Ordre: :param1 Tak, :param3. Selldone",
],
     "shop-order-payment-admin" => [
     "title" => "Accepter betaling",
     "sample" => "Ny betaling på 267 $ blev afviklet.<br> Ordre: SM-425<br> Tak, <b>dit butiksnavn</b> .<br> Selldone",
     "body" => "Ny :param2 betaling blev afviklet. Ordre: :param1 Tak, :param3. Selldone",
],
     "shop-login" => [
     "title" => "Login bekræftelseskode",
     "sample" => "Din loginkode er: <b>123456</b><br> <b>Dit butiksnavn</b><br> Selldone",
     "body" => "Din login-kode er: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Besked om succes med login",
     "sample" => "Kære <b>navn</b> ,<br> Du har logget ind på din konto med <b>iPhone 165.250.300.1</b> den <b>5/8/2021 kl. 9:14</b> .<br> Selldone",
     "body" => "Kære :param1, Du har logget ind på din konto ved :param2 på :param3. Selldone",
],
     "avocado-order-submit" => [
     "title" => "Avocado ny ordre indsendt sendes til køber",
     "sample" => "<b>Dit butiksnavn</b><br> Kære <b>dit navn</b> ,<br> Vi har modtaget din ordre, og vi gennemgår den.<br> Ordrenummer: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Kære :param1, Vi har modtaget din ordre, og vi gennemgår den. Ordre #: :param2 Selldone",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado modtage ny ordre sendes til sælger",
     "sample" => "Du har modtaget en avocadobestilling:<br> Butik: <b>Dit butiksnavn</b><br> Køber: <b>Købers navn</b><br> Bestilling: <b>AVO-246</b><br> Selldone",
     "body" => "Du har modtaget en avocadoordre: Butik: :param1 Køber: :param2 Ordre: :param3 Selldone",
],
     "avocado-ready-to-pay" => [
     "title" => "Avocado ordre klar til betaling",
     "sample" => "<b>Dit butiksnavn</b><br> Din ordre er blevet bekræftet og kan betales via følgende link.<br> Ordrenummer: <b>AVO-246</b><br> Link: <b>https://dit-domæne/avocado</b><br> Selldone",
     "body" => ":param3 Din ordre er blevet bekræftet og kan betales via følgende link. Ordrenummer: :param2 Link: :param1 Sælges",
],
];