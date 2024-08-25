<?php 

 return [
     "shop-order-payment" => [
     "title" => "Prihvati plaćanje",
     "sample" => "Vaša uplata od 267$ uspješno je podmirena.<br> Narudžba: SM-425<br> Hvala, <b>naziv vaše trgovine</b> .<br> Prodano",
     "body" => "Vaše :param2 plaćanje je uspješno podmireno. Narudžba: :param1 Hvala, :param3. Prodano",
     "description" => "Pošaljite poruku kupcu trgovine kako biste ga obavijestili o uspješnom plaćanju.",
],
     "shop-order-payment-admin" => [
     "title" => "Prihvati plaćanje",
     "sample" => "Nova uplata od 267$ uspješno je izvršena.<br> Narudžba: SM-425<br> Hvala, <b>naziv vaše trgovine</b> .<br> Prodano",
     "body" => "Novo :param2 plaćanje je uspješno izvršeno. Narudžba: :param1 Hvala, :param3. Prodano",
     "description" => "Pošaljite poruku vlasniku trgovine i obavijestite ga o uspješnoj uplati.",
],
     "vendor-new-order" => [
     "title" => "Nova narudžba dobavljača",
     "sample" => "Primili ste novu narudžbu od 200 USD.<br> Narudžba: SM-870 od <b>imena dobavljača</b> .",
     "body" => "Dobili ste novu :param2 narudžbu. Redoslijed: :param1 za :param3.",
     "description" => "Pošaljite poruku dobavljaču da ga obavijestite o novoj narudžbi.",
],
     "shop-login" => [
     "title" => "Kod za provjeru prijave",
     "sample" => "Vaš kod za prijavu je: <b>123456</b><br> <b>Naziv vaše trgovine</b><br> Prodano",
     "body" => "Vaš kod za prijavu je: :param1 :param2 Selldone",
     "description" => "Pošaljite kod za prijavu kupcu da se prijavi u trgovinu.",
],
     "user-login" => [
     "title" => "Poruka o uspješnoj prijavi",
     "sample" => "Dragi <b>ime</b> ,<br> Prijavili ste se na svoj račun putem <b>iPhonea 165.250.300.1</b> u <b>8.5.2021. u 9:14</b> .<br> Prodano",
     "body" => "Poštovani :param1, prijavili ste se na svoj račun putem :param2 na :param3. Prodano",
     "description" => "Pošaljite poruku nakon prijave kupca u trgovinu.",
],
     "avocado-order-submit" => [
     "title" => "Nova narudžba za avokado je poslana i pošaljite kupcu",
     "sample" => "<b>Naziv vaše trgovine</b><br> Drago <b>tvoje ime</b> ,<br> Zaprimili smo vašu narudžbu i pregledavamo je.<br> Narudžba #: <b>AVO-246</b><br> Prodano",
     "body" => ":param3 Poštovani :param1, primili smo vašu narudžbu i pregledavamo je. Narudžba #: :param2 Prodajno",
     "description" => "Pošaljite poruku kupcu nakon što naručite avokado.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado primi novu narudžbu i pošalje prodavaču",
     "sample" => "Primili ste narudžbu avokada:<br> Trgovina: <b>Naziv vaše trgovine</b><br> Kupac: <b>Ime kupca</b><br> Narudžba: <b>AVO-246</b><br> Prodano",
     "body" => "Primili ste narudžbu avokada: Trgovina: :param1 Kupac: :param2 Narudžba: :param3 Prodajno",
     "description" => "Pošaljite poruku vlasniku trgovine kako biste ga obavijestili o primanju nove narudžbe avokada.",
],
     "avocado-ready-to-pay" => [
     "title" => "Narudžba avokada spremna za plaćanje",
     "sample" => "<b>Naziv vaše trgovine</b><br> Vaša narudžba je potvrđena i možete je platiti putem sljedeće poveznice.<br> Narudžba #: <b>AVO-246</b><br> Link: <b>https://vaša-domena/avokado</b><br> Prodano",
     "body" => ":param3 Vaša narudžba je potvrđena i možete je platiti putem sljedećeg linka. Narudžba br.: :param2 Veza: :param1 Prodajno",
     "description" => "Pošaljite poruku s vezom za plaćanje kupcu nakon što prodavatelj postavi cijenu i potvrdi svoju narudžbu avokada.",
],
];