<?php 

 return [
     "shop-order-payment" => [
     "title" => "Hyväksy maksu",
     "sample" => "267 $:n maksusi on suoritettu.<br> Tilaus: SM-425<br> Kiitos, <b>myymäläsi nimi</b> .<br> myyty valmis",
     "body" => ":param2-maksusi suoritettu onnistuneesti. Tilaa: :param1 Kiitos, :param3. myyty valmis",
],
     "shop-order-payment-admin" => [
     "title" => "Hyväksy maksu",
     "sample" => "Uusi 267 $ maksu suoritettu onnistuneesti.<br> Tilaus: SM-425<br> Kiitos, <b>myymäläsi nimi</b> .<br> myyty valmis",
     "body" => "Uusi :param2 maksu suoritettu onnistuneesti. Tilaa: :param1 Kiitos, :param3. myyty valmis",
],
     "shop-login" => [
     "title" => "Kirjautumisen vahvistuskoodi",
     "sample" => "Kirjautumiskoodisi on: <b>123456</b><br> <b>Kauppasi nimi</b><br> myyty valmis",
     "body" => "Kirjautumiskoodisi on: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Kirjautumisen onnistumisviesti",
     "sample" => "Rakas <b>nimi</b> ,<br> Olet kirjautunut tilillesi <b>iPhonella 165.250.300.1 8.5.2021</b> klo <b>9:14</b> .<br> myyty valmis",
     "body" => "Hyvä :param1, olet kirjautunut tilillesi :param2:n kautta osoitteessa :param3. myyty valmis",
],
     "avocado-order-submit" => [
     "title" => "Avocado uusi tilaus lähetetty lähetä ostajalle",
     "sample" => "<b>Kauppasi nimi</b><br> Rakas <b>nimesi</b> ,<br> Olemme vastaanottaneet tilauksesi ja tarkistamme sen.<br> Tilausnumero: <b>AVO-246</b><br> myyty valmis",
     "body" => ":param3 Hyvä :param1, Olemme vastaanottaneet tilauksesi ja tarkistamme sitä. Tilausnumero: :param2 Selldone",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado vastaanottaa uuden tilauksen lähettää myyjälle",
     "sample" => "Sait avokadotilauksen:<br> Kauppa: <b>Kauppasi nimi</b><br> Ostaja: <b>Ostajan nimi</b><br> Tilaus: <b>AVO-246</b><br> myyty valmis",
     "body" => "Sait avokadotilauksen: Kauppa: :param1 Ostaja: :param2 Tilaus: :param3 Myyty",
],
     "avocado-ready-to-pay" => [
     "title" => "Avokadotilaus valmis maksamaan",
     "sample" => "<b>Kauppasi nimi</b><br> Tilauksesi on vahvistettu ja voit maksaa alla olevan linkin kautta.<br> Tilausnumero: <b>AVO-246</b><br> Linkki: <b>https://oma-verkkotunnus/avokado</b><br> myyty valmis",
     "body" => ":param3 Tilauksesi on vahvistettu ja voit maksaa seuraavan linkin kautta. Tilausnumero: :param2 Linkki: :param1 Selldone",
],
];