<?php 

 return [
     "shop-order-payment" => [
     "title" => "Pieņemt maksājumu",
     "sample" => "Jūsu 267 $ maksājums ir veiksmīgi apmaksāts.<br> Pasūtījums: SM-425<br> Paldies, <b>Jūsu veikala nosaukums</b> .<br> Pārdots",
     "body" => "Jūsu :param2 maksājums ir veiksmīgi apmaksāts. Pasūtījums: :param1 Paldies, :param3. Pārdots",
     "description" => "Nosūtiet ziņu veikala klientam, lai informētu par veiksmīgu maksājumu.",
],
     "shop-order-payment-admin" => [
     "title" => "Pieņemt maksājumu",
     "sample" => "Jauns 267 $ maksājums veiksmīgi apmaksāts.<br> Pasūtījums: SM-425<br> Paldies, <b>Jūsu veikala nosaukums</b> .<br> Pārdots",
     "body" => "Jaunais :param2 maksājums veiksmīgi apmaksāts. Pasūtījums: :param1 Paldies, :param3. Pārdots",
     "description" => "Nosūtiet ziņu veikala īpašniekam, lai informētu viņu par veiksmīgu maksājumu.",
],
     "vendor-new-order" => [
     "title" => "Pārdevējs Jauns pasūtījums",
     "sample" => "Jūs saņēmāt jaunu 200 ASV dolāru pasūtījumu.<br> Pasūtījums: SM-870 no <b>pārdevēja nosaukuma</b> .",
     "body" => "Jūs saņēmāt jaunu :param2 pasūtījumu. Pasūtījums: :param1 priekš :param3.",
     "description" => "Nosūtiet ziņojumu pārdevējam, lai informētu viņu par jaunu pasūtījumu.",
],
     "shop-login" => [
     "title" => "Pieteikšanās verifikācijas kods",
     "sample" => "Jūsu pieteikšanās kods ir: <b>123456</b><br> <b>Jūsu veikala nosaukums</b><br> Pārdots",
     "body" => "Jūsu pieteikšanās kods ir: :param1 :param2 Selldone",
     "description" => "Nosūtiet klientam pieteikšanās kodu, lai pieteiktos veikalā.",
],
     "user-login" => [
     "title" => "Pieteikšanās veiksmes ziņojums",
     "sample" => "Dārgais <b>Vārds</b> ,<br> Jūs esat pieteicies savā kontā, izmantojot <b>iPhone 165.250.300.1</b> plkst. <b>5/8/2021 9:14</b> .<br> Pārdots",
     "body" => "Cien. :param1, Jūs esat pieteicies savā kontā, izmantojot :param2 vietnē :param3. Pārdots",
     "description" => "Nosūtiet ziņu pēc klienta pieteikšanās veikalā.",
],
     "avocado-order-submit" => [
     "title" => "Jauns avokado pasūtījums iesniegts, nosūtiet pircējam",
     "sample" => "<b>Jūsu veikala nosaukums</b><br> Dārgais <b>tavs vārds</b> ,<br> Esam saņēmuši jūsu pasūtījumu un to izskatām.<br> Pasūtījuma nr.: <b>AVO-246</b><br> Pārdots",
     "body" => ":param3 Cien. :param1! Mēs esam saņēmuši jūsu pasūtījumu un to izskatām. Pasūtījuma nr.: :param2 Pārdots",
     "description" => "Pēc avokado pasūtījuma nosūtiet klientam ziņu.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado saņem jaunu pasūtījumu, nosūta pārdevējam",
     "sample" => "Jūs saņēmāt avokado pasūtījumu:<br> Veikals: <b>jūsu veikala nosaukums</b><br> Pircējs: <b>Pircēja vārds</b><br> Pasūtījums: <b>AVO-246</b><br> Pārdots",
     "body" => "Jūs saņēmāt avokado pasūtījumu: Veikals: :param1 Pircējs: :param2 Pasūtījums: :param3 Pārdots",
     "description" => "Nosūtiet ziņu veikala īpašniekam, lai informētu viņu par jauna Avokado pasūtījuma saņemšanu.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avokado pasūtījums gatavs apmaksai",
     "sample" => "<b>Jūsu veikala nosaukums</b><br> Jūsu pasūtījums ir apstiprināts, un to var apmaksāt, izmantojot šo saiti.<br> Pasūtījuma nr.: <b>AVO-246</b><br> Saite: <b>https://jūsu-domēns/avokado</b><br> Pārdots",
     "body" => ":param3 Jūsu pasūtījums ir apstiprināts, un to var apmaksāt, izmantojot šo saiti. Pasūtījuma nr.: :param2 Saite: :param1 Pārdots",
     "description" => "Nosūtiet klientam ziņojumu ar maksājuma saiti pēc tam, kad pārdevējs ir iestatījis izmaksas un apstiprinājis viņa avokado pasūtījumu.",
],
];