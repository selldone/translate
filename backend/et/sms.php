<?php 

 return [
     "shop-order-payment" => [
     "title" => "Nõustu maksega",
     "sample" => "Teie 267-dollarine makse on edukalt tasutud.<br> Tellimus: SM-425<br> Aitäh, <b>teie poe nimi</b> .<br> Müüdud tehtud",
     "body" => "Teie :param2 makse on edukalt tasutud. Tellimus: :param1 Aitäh, :param3. Müüdud tehtud",
     "description" => "Edukast maksest teavitamiseks saatke poe kliendile sõnum.",
],
     "shop-order-payment-admin" => [
     "title" => "Nõustu maksega",
     "sample" => "Uus 267 $ makse on edukalt tasutud.<br> Tellimus: SM-425<br> Aitäh, <b>teie poe nimi</b> .<br> Müüdud tehtud",
     "body" => "Uus :param2 makse sooritatud. Tellimus: :param1 Aitäh, :param3. Müüdud tehtud",
     "description" => "Saada poe omanikule sõnum, et teavitada edukast maksest.",
],
     "vendor-new-order" => [
     "title" => "Müüja Uus tellimus",
     "sample" => "Saite uue 200-dollarise tellimuse.<br> Tellimus: SM-870 <b>hankija nimest</b> .",
     "body" => "Saite uue :param2 tellimuse. Tellimus: :param1 :param3 jaoks.",
     "description" => "Saatke müüjale sõnum, et teavitada teda uuest tellimusest.",
],
     "shop-login" => [
     "title" => "Sisselogimise kinnituskood",
     "sample" => "Teie sisselogimise kood on: <b>123456</b><br> <b>Teie poe nimi</b><br> Müüdud tehtud",
     "body" => "Teie sisselogimiskood on: :param1 :param2 Selldone",
     "description" => "Poodi sisselogimiseks saada kliendile sisselogimiskood.",
],
     "user-login" => [
     "title" => "Sisselogimise õnnestumise teade",
     "sample" => "Kallis <b>nimi</b> ,<br> Olete oma kontole sisse loginud <b>iPhone 165.250.300.1</b> kaudu kell <b>08.05.2021 9:14</b> .<br> Müüdud tehtud",
     "body" => "Kallis :param1, olete oma kontole sisse loginud :param2 kaudu aadressil :param3. Müüdud tehtud",
     "description" => "Saatke sõnum pärast kliendi sisselogimist poodi.",
],
     "avocado-order-submit" => [
     "title" => "Avokaado uus tellimus esitatud, saatke ostjale",
     "sample" => "<b>Teie poe nimi</b><br> Kallis, <b>Sinu nimi</b> ,<br> Saime teie tellimuse kätte ja vaatame seda üle.<br> Tellimuse nr: <b>AVO-246</b><br> Müüdud tehtud",
     "body" => ":param3 Kallis :param1, Saime teie tellimuse kätte ja vaatame seda üle. Tellimuse nr: :param2 Müüdud",
     "description" => "Pärast Avokaado tellimuse esitamist saada kliendile sõnum.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokaado saada uus tellimus saata müüjale",
     "sample" => "Saite avokaado tellimuse:<br> Kauplus: <b>teie poe nimi</b><br> Ostja: <b>Ostja nimi</b><br> Tellimus: <b>AVO-246</b><br> Müüdud tehtud",
     "body" => "Saite avokaado tellimuse: Pood: :param1 Ostja: :param2 Tellimus: :param3 Müüdud tehtud",
     "description" => "Saada poe omanikule sõnum, et teavitada teda uue Avokaado tellimuse saamisest.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avokaado tellimus on tasumiseks valmis",
     "sample" => "<b>Teie poe nimi</b><br> Teie tellimus on kinnitatud ja selle saab tasuda alloleva lingi kaudu.<br> Tellimuse nr: <b>AVO-246</b><br> Link: <b>https://teie-domeen/avokaado</b><br> Müüdud tehtud",
     "body" => ":param3 Teie tellimus on kinnitatud ja selle saab tasuda järgmisel lingil. Tellimuse nr: :param2 Link: :param1 Müüdud",
     "description" => "Saatke kliendile makselingiga sõnum pärast seda, kui müüja on hinna määranud ja avokaado tellimuse kinnitanud.",
],
];