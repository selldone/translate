<?php 

 return [
     "shop-order-payment" => [
     "title" => "Sprejmi plačilo",
     "sample" => "Vaše plačilo v višini 267 $ je bilo uspešno poravnano.<br> Vrstni red: SM-425<br> Hvala, <b>ime vaše trgovine</b> .<br> Prodano",
     "body" => "Vaše :param2 plačilo je uspešno poravnano. Naročilo: :param1 Hvala, :param3. Prodano",
     "description" => "Pošljite sporočilo kupcu trgovine, da ga obvestite o uspešnem plačilu.",
],
     "shop-order-payment-admin" => [
     "title" => "Sprejmi plačilo",
     "sample" => "Novo plačilo v višini 267 $ je bilo uspešno poravnano.<br> Vrstni red: SM-425<br> Hvala, <b>ime vaše trgovine</b> .<br> Prodano",
     "body" => "Novo :param2 plačilo uspešno poravnano. Naročilo: :param1 Hvala, :param3. Prodano",
     "description" => "Pošljite sporočilo lastniku trgovine, da ga obvestite o uspešnem plačilu.",
],
     "vendor-new-order" => [
     "title" => "Prodajalec Novo naročilo",
     "sample" => "Prejeli ste novo naročilo v vrednosti 200 USD.<br> Naročilo: SM-870 pri <b>imenu prodajalca</b> .",
     "body" => "Prejeli ste novo naročilo :param2. Vrstni red: :param1 za :param3.",
     "description" => "Pošljite sporočilo prodajalcu, da ga obvestite o novem naročilu.",
],
     "shop-login" => [
     "title" => "Koda za preverjanje prijave",
     "sample" => "Vaša prijavna koda je: <b>123456</b><br> <b>Ime vaše trgovine</b><br> Prodano",
     "body" => "Vaša prijavna koda je: :param1 :param2 Prodaja",
     "description" => "Pošljite prijavno kodo stranki za prijavo v trgovino.",
],
     "user-login" => [
     "title" => "Sporočilo o uspešni prijavi",
     "sample" => "Spoštovano <b>ime</b> ,<br> V svoj račun ste se prijavili z <b>iPhone 165.250.300.1</b> 8. 5. 2021 ob <b>9:14</b> .<br> Prodano",
     "body" => "Spoštovani :param1, v svoj račun ste se prijavili z :param2 na :param3. Prodano",
     "description" => "Pošljite sporočilo po prijavi stranke v trgovino.",
],
     "avocado-order-submit" => [
     "title" => "Avokado novo naročilo oddano pošljite kupcu",
     "sample" => "<b>Ime vaše trgovine</b><br> Spoštovano <b>tvoje ime</b> ,<br> Prejeli smo vaše naročilo in ga pregledujemo.<br> Številka naročila: <b>AVO-246</b><br> Prodano",
     "body" => ":param3 Spoštovani :param1, Prejeli smo vaše naročilo in ga pregledujemo. Naročilo št.: :param2 Prodano",
     "description" => "Po oddaji naročila avokada stranki pošljite sporočilo.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado prejme novo naročilo, poslano prodajalcu",
     "sample" => "Prejeli ste naročilo avokada:<br> Trgovina: <b>Ime vaše trgovine</b><br> Kupec: <b>Ime kupca</b><br> Vrstni red: <b>AVO-246</b><br> Prodano",
     "body" => "Prejeli ste naročilo avokada: Trgovina: :param1 Kupec: :param2 Naročilo: :param3 Prodano",
     "description" => "Pošljite sporočilo lastniku trgovine, da ga obvestite o prejemu novega naročila avokada.",
],
     "avocado-ready-to-pay" => [
     "title" => "Naročilo avokada pripravljeno za plačilo",
     "sample" => "<b>Ime vaše trgovine</b><br> Vaše naročilo je potrjeno in ga lahko plačate preko naslednje povezave.<br> Številka naročila: <b>AVO-246</b><br> Povezava: <b>https://vaša-domena/avokado</b><br> Prodano",
     "body" => ":param3 Vaše naročilo je potrjeno in ga lahko plačate preko naslednje povezave. Naročilo št.: :param2 Povezava: :param1 Prodano",
     "description" => "Po tem, ko prodajalec določi stroške, stranki pošljite sporočilo s povezavo za plačilo in potrdite naročilo avokada.",
],
];