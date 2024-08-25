<?php 

 return [
     "shop-order-payment" => [
     "title" => "Ordainketa onartu",
     "sample" => "Zure 267$-ko ordainketa behar bezala likidatu da.<br> Eskaera: SM-425<br> Eskerrik asko, <b>zure dendaren izena</b> .<br> Saldu",
     "body" => "Zure :param2 ordainketa behar bezala likidatu da. Eskaera: :param1 Eskerrik asko, :param3. Saldu",
     "description" => "Bidali mezu bat dendako bezeroari ordainketa arrakastatsuaren berri emateko.",
],
     "shop-order-payment-admin" => [
     "title" => "Ordainketa onartu",
     "sample" => "267$-ko ordainketa berria behar bezala likidatu da.<br> Eskaera: SM-425<br> Eskerrik asko, <b>zure dendaren izena</b> .<br> Saldu",
     "body" => "Berria: param2 ordainketa behar bezala likidatu da. Eskaera: :param1 Eskerrik asko, :param3. Saldu",
     "description" => "Bidali mezu bat dendaren jabeari ordainketa arrakastatsuaren berri emateko.",
],
     "vendor-new-order" => [
     "title" => "Saltzaileen Eskaera Berria",
     "sample" => "$ 200 eskaera berri bat jaso duzu.<br> Eskaera: SM-870 <b>Saltzailearen izenetik</b> .",
     "body" => ":param2 eskaera berri bat jaso duzu. Ordena: :param1 :param3.",
     "description" => "Bidali mezu bat saltzaileari eskaera berri baten berri emateko.",
],
     "shop-login" => [
     "title" => "Saioa hasteko egiaztapen-kodea",
     "sample" => "Zure saio-kodea da: <b>123456</b><br> <b>Zure dendaren izena</b><br> Saldu",
     "body" => "Zure saioa hasteko kodea hau da: :param1 :param2 Selldone",
     "description" => "Bidali saio-kodea bezeroari dendan saioa hasteko.",
],
     "user-login" => [
     "title" => "Saioa hasi arrakastaren mezua",
     "sample" => "<b>Izen</b> maitea,<br> Zure kontuan saioa hasi duzu <b>iPhone 165.250.300.1</b> <b>2021/05/08</b> 09:14an.<br> Saldu",
     "body" => "Kaixo :param1, Zure kontuan saioa hasi duzu :param2 helbidean :param3. Saldu",
     "description" => "Bidali mezu bat bezeroak dendara saioa hasi ondoren.",
],
     "avocado-order-submit" => [
     "title" => "Ahuakatearen eskaera berria bidali da erosleari",
     "sample" => "<b>Zure dendaren izena</b><br> <b>Zure izena</b> maitea,<br> Zure eskaera jaso dugu eta berrikusten ari gara.<br> Agindu #: <b>AVO-246</b><br> Saldu",
     "body" => ":param3 Maitea :param1, Zure eskaera jaso dugu eta berrikusten ari gara. Eskaera #: :param2 Selldone",
     "description" => "Bidali mezu bat bezeroari Avocado eskaera egin ondoren.",
],
     "avocado-order-submit-seller" => [
     "title" => "Ahuakateak saltzaileari bidali eskaera berria jasotzen du",
     "sample" => "Ahuakatearen eskaera jaso duzu:<br> Denda: <b>zure dendaren izena</b><br> Eroslea: <b>Eroslearen izena</b><br> Agindua: <b>AVO-246</b><br> Saldu",
     "body" => "Ahuakate eskaera bat jaso duzu: Denda: :param1 Eroslea: :param2 Eskaera: :param3 Selldone",
     "description" => "Bidali mezu bat dendaren jabeari Avocado eskaera berria jasotzearen berri emateko.",
],
     "avocado-ready-to-pay" => [
     "title" => "Ahuakatearen eskaera ordaintzeko prest",
     "sample" => "<b>Zure dendaren izena</b><br> Zure eskaera berretsi da eta hurrengo esteka bidez ordain daiteke.<br> Agindu #: <b>AVO-246</b><br> Esteka: <b>https://zure-domeinua/avocado</b><br> Saldu",
     "body" => ":param3 Zure eskaera berretsi da eta hurrengo esteka bidez ordain daiteke. Eskaera #: :param2 Esteka: :param1 Selldone",
     "description" => "Bidali mezu bat ordainketa-esteka duen bezeroari saltzaileak kostua ezarri ondoren eta berretsi bere Avocado eskaera.",
],
];