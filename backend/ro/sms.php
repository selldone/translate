<?php 

 return [
     "shop-order-payment" => [
     "title" => "Accept plata",
     "sample" => "Plata dvs. de 267 USD a fost decontată cu succes.<br> Comanda: SM-425<br> Mulțumesc, <b>numele magazinului dvs.</b><br> Selldone",
     "body" => "Plata dvs. :param2 a fost decontată cu succes. Comanda: :param1 Multumesc, :param3. Selldone",
],
     "shop-order-payment-admin" => [
     "title" => "Accept plata",
     "sample" => "Noua plată de 267 USD a fost decontată cu succes.<br> Comanda: SM-425<br> Mulțumesc, <b>numele magazinului dvs.</b><br> Selldone",
     "body" => "Noua plată :param2 a fost decontată cu succes. Comanda: :param1 Multumesc, :param3. Selldone",
],
     "shop-login" => [
     "title" => "Cod de verificare a autentificarii",
     "sample" => "Codul dvs. de conectare este: <b>123456</b><br> <b>Numele magazinului dvs</b><br> Selldone",
     "body" => "Codul dvs. de conectare este: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Mesaj de succes de conectare",
     "sample" => "Stimate <b>nume</b> ,<br> V-ați conectat la contul dvs. prin <b>iPhone 165.250.300.1</b> la <b>08.05.2021 9:14</b> .<br> Selldone",
     "body" => "Stimate :param1, Te-ai autentificat la contul tau de :param2 la :param3. Selldone",
],
     "avocado-order-submit" => [
     "title" => "Comanda noua de avocado trimisa trimite cumparatorului",
     "sample" => "<b>Numele magazinului dvs</b><br> Dragă <b>numele tău</b> ,<br> Am primit comanda dvs. și o examinăm.<br> Comanda #: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Dragă :param1, Am primit comanda dumneavoastră și o revizuim. Comanda #: :param2 Selldone",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado primește o nouă comandă trimisă vânzătorului",
     "sample" => "Ai primit o comandă de avocado:<br> Magazin: <b>numele magazinului dvs</b><br> Cumpărător: <b>numele cumpărătorului</b><br> Comanda: <b>AVO-246</b><br> Selldone",
     "body" => "Ați primit o comandă de avocado: Magazin: :param1 Cumpărător: :param2 Comanda: :param3 Selldone",
],
     "avocado-ready-to-pay" => [
     "title" => "Comanda de avocado gata de plată",
     "sample" => "<b>Numele magazinului dvs</b><br> Comanda dvs. a fost confirmată și poate fi plătită prin următorul link.<br> Comanda #: <b>AVO-246</b><br> Link: <b>https://domeniul-tau/avocado</b><br> Selldone",
     "body" => ":param3 Comanda dumneavoastră a fost confirmată și poate fi plătită prin următorul link. Comanda #: :param2 Link: :param1 Selldone",
],
];