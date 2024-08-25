<?php 

 return [
     "shop-order-payment" => [
     "title" => "Priimti mokėjimą",
     "sample" => "Jūsų 267 USD mokėjimas sėkmingai atliktas.<br> Užsakymas: SM-425<br> Ačiū, <b>Jūsų parduotuvės pavadinimas</b> .<br> Parduota",
     "body" => "Jūsų :param2 mokėjimas sėkmingai atliktas. Užsakymas: :param1 Ačiū, :param3. Parduota",
     "description" => "Nusiųskite žinutę parduotuvės klientui, kad praneštumėte apie sėkmingą apmokėjimą.",
],
     "shop-order-payment-admin" => [
     "title" => "Priimti mokėjimą",
     "sample" => "Naujas 267 USD mokėjimas sėkmingai apmokėtas.<br> Užsakymas: SM-425<br> Ačiū, <b>Jūsų parduotuvės pavadinimas</b> .<br> Parduota",
     "body" => "Naujas :param2 mokėjimas sėkmingai atliktas. Užsakymas: :param1 Ačiū, :param3. Parduota",
     "description" => "Nusiųskite žinutę parduotuvės savininkui, kad praneštumėte apie sėkmingą apmokėjimą.",
],
     "vendor-new-order" => [
     "title" => "Pardavėjas naujas užsakymas",
     "sample" => "Gavote naują 200 USD užsakymą.<br> Užsakymas: SM-870 iš <b>Pardavėjo pavadinimo</b> .",
     "body" => "Gavote naują :param2 užsakymą. Užsakymas: :param1, skirtas :param3.",
     "description" => "Nusiųskite pranešimą pardavėjui, kad praneštumėte apie naują užsakymą.",
],
     "shop-login" => [
     "title" => "Prisijungimo patvirtinimo kodas",
     "sample" => "Jūsų prisijungimo kodas yra: <b>123456</b><br> <b>Jūsų parduotuvės pavadinimas</b><br> Parduota",
     "body" => "Jūsų prisijungimo kodas yra: :param1 :param2 Selldone",
     "description" => "Išsiųskite prisijungimo kodą klientui, kad jis prisijungtų prie parduotuvės.",
],
     "user-login" => [
     "title" => "Sėkmingo prisijungimo pranešimas",
     "sample" => "Gerbiamas <b>vardas</b> ,<br> Jūs prisijungėte prie savo paskyros naudodami <b>iPhone 165.250.300.1</b> <b>2021-05-08 9:14 val</b> .<br> Parduota",
     "body" => "Gerb. :param1, Jūs prisijungėte prie savo paskyros :param2 adresu :param3. Parduota",
     "description" => "Klientui prisijungus prie parduotuvės išsiųskite žinutę.",
],
     "avocado-order-submit" => [
     "title" => "Pateiktas naujas avokado užsakymas, išsiųsti pirkėjui",
     "sample" => "<b>Jūsų parduotuvės pavadinimas</b><br> Mielas <b>tavo vardas</b> ,<br> Gavome jūsų užsakymą ir jį peržiūrime.<br> Užsakymo nr.: <b>AVO-246</b><br> Parduota",
     "body" => ":param3 Gerb. :param1, Gavome jūsų užsakymą ir jį peržiūrime. Užsakymo Nr.: :param2 Parduota",
     "description" => "Pateikę avokado užsakymą, išsiųskite klientui žinutę.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokadas gauti naują užsakymą, išsiųsti pardavėjui",
     "sample" => "Gavote avokado užsakymą:<br> Parduotuvė: <b>Jūsų parduotuvės pavadinimas</b><br> Pirkėjas: <b>Pirkėjo vardas</b><br> Užsakymas: <b>AVO-246</b><br> Parduota",
     "body" => "Gavote avokado užsakymą: Parduotuvė: :param1 Pirkėjas: :param2 Užsakymas: :param3 Parduota",
     "description" => "Nusiųskite žinutę parduotuvės savininkui, kad praneštumėte apie naujo avokado užsakymo gavimą.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avokadų užsakymas paruoštas sumokėti",
     "sample" => "<b>Jūsų parduotuvės pavadinimas</b><br> Jūsų užsakymas patvirtintas ir jį galite apmokėti spustelėję šią nuorodą.<br> Užsakymo nr.: <b>AVO-246</b><br> Nuoroda: <b>https://your-domain/avokadas</b><br> Parduota",
     "body" => ":param3 Jūsų užsakymas patvirtintas ir gali būti apmokėtas naudojant šią nuorodą. Užsakymo Nr.: :param2 Nuoroda: :param1 Parduota",
     "description" => "Pardavėjui nustačius kainą ir patvirtinus avokado užsakymą, klientui išsiųskite pranešimą su mokėjimo nuoroda.",
],
];