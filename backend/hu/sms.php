<?php 

 return [
     "shop-order-payment" => [
     "title" => "Fizetés elfogadása",
     "sample" => "267 USD összegű befizetése sikeresen kiegyenlítve.<br> Rendelés: SM-425<br> Köszönöm, <b>az üzleted neve</b> .<br> Eladva",
     "body" => "A :param2 befizetése sikeresen kiegyenlítve. Rendelés: :param1 Köszönöm, :param3. Eladva",
     "description" => "A sikeres fizetésről küldjön üzenetet az üzlet vásárlójának.",
],
     "shop-order-payment-admin" => [
     "title" => "Fizetés elfogadása",
     "sample" => "Az új 267 dolláros fizetés sikeresen kiegyenlítve.<br> Rendelés: SM-425<br> Köszönöm, <b>az üzleted neve</b> .<br> Eladva",
     "body" => "Új :param2 fizetés sikeresen rendezve. Rendelés: :param1 Köszönöm, :param3. Eladva",
     "description" => "A sikeres fizetésről küldjön üzenetet az üzlet tulajdonosának.",
],
     "vendor-new-order" => [
     "title" => "Szállító Új rendelés",
     "sample" => "Új 200 dolláros rendelést kapott.<br> Rendelés: SM-870 <b>a gyártó nevétől</b> .",
     "body" => "Új :param2 rendelést kapott. Rendelés: :param1 for :param3.",
     "description" => "Küldjön üzenetet az eladónak, hogy tájékoztassa őket az új megrendelésről.",
],
     "shop-login" => [
     "title" => "Bejelentkezési ellenőrző kód",
     "sample" => "Bejelentkezési kódod: <b>123456</b><br> <b>Az üzleted neve</b><br> Eladva",
     "body" => "Az Ön bejelentkezési kódja: :param1 :param2 Selldone",
     "description" => "Küldje el a bejelentkezési kódot a vásárlónak az üzletbe való bejelentkezéshez.",
],
     "user-login" => [
     "title" => "Sikeres bejelentkezési üzenet",
     "sample" => "Kedves <b>Név</b> ,<br> Bejelentkezett fiókjába az <b>iPhone 165.250.300.1</b> <b>számmal 2021.05.08. 9:14-kor</b> .<br> Eladva",
     "body" => "Kedves :param1! Bejelentkezett fiókjába a :param2 által a :param3 címen. Eladva",
     "description" => "Üzenet küldése, miután a vásárló belépett az üzletbe.",
],
     "avocado-order-submit" => [
     "title" => "Avokádó új rendelés benyújtva, küldje el a vevőnek",
     "sample" => "<b>Az üzleted neve</b><br> Kedves <b>neved</b> ,<br> Megrendelését megkaptuk, és azt felülvizsgáljuk.<br> Rendelési szám: <b>AVO-246</b><br> Eladva",
     "body" => ":param3 Kedves :param1! Megkaptuk a megrendelését, és azt felülvizsgáljuk. Rendelési szám: :param2 Eladva",
     "description" => "Az avokádó rendelés leadása után küldjön üzenetet a vásárlónak.",
],
     "avocado-order-submit-seller" => [
     "title" => "Az avokádó új rendelést kap, és elküldi az eladónak",
     "sample" => "Avokádó rendelést kaptál:<br> Áruház: <b>Az üzlet neve</b><br> Vevő: <b>Vevő neve</b><br> Rendelés: <b>AVO-246</b><br> Eladva",
     "body" => "Avokádó rendelést kapott: Bolt: :param1 Vevő: :param2 Rendelés: :param3 Eladva",
     "description" => "Küldjön üzenetet az üzlet tulajdonosának, hogy tájékoztassa őket az új avokádó rendelésről.",
],
     "avocado-ready-to-pay" => [
     "title" => "Fizetésre kész avokádórendelés",
     "sample" => "<b>Az üzleted neve</b><br> Megrendelését visszaigazoltuk, és az alábbi linken keresztül fizetheti ki.<br> Rendelési szám: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Eladva",
     "body" => ":param3 Megrendelését visszaigazoltuk, és az alábbi linken keresztül fizetheti ki. Rendelési szám: :param2 Link: :param1 Eladva",
     "description" => "Küldjön üzenetet a fizetési linkkel az ügyfélnek, miután az eladó beállította a költségeket, és megerősítette az avokádó megrendelését.",
],
];