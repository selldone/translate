<?php 

 return [
     "shop-order-payment" => [
     "title" => "Samþykkja greiðslu",
     "sample" => "267$ greiðslan þín var gerð upp.<br> Pöntun: SM-425<br> Takk, <b>nafn verslunarinnar þitt</b> .<br> Selldone",
     "body" => ":param2 greiðslan þín var gerð upp. Pöntun: :param1 Takk, :param3. Selldone",
     "description" => "Sendu skilaboð til viðskiptavina verslunar til að upplýsa um árangursríka greiðslu.",
],
     "shop-order-payment-admin" => [
     "title" => "Samþykkja greiðslu",
     "sample" => "Ný 267$ greiðsla tókst upp.<br> Pöntun: SM-425<br> Takk, <b>nafn verslunarinnar þitt</b> .<br> Selldone",
     "body" => "Ný :param2 greiðsla tókst upp. Pöntun: :param1 Takk, :param3. Selldone",
     "description" => "Sendu verslunareiganda skilaboð til að upplýsa hann um vel heppnaða greiðslu.",
],
     "vendor-new-order" => [
     "title" => "Ný pöntun söluaðila",
     "sample" => "Þú fékkst nýja $200 pöntun.<br> Pöntun: SM-870 frá <b>nafn seljanda</b> .",
     "body" => "Þú fékkst nýja :param2 pöntun. Panta: :param1 fyrir :param3.",
     "description" => "Sendu skilaboð til seljanda til að upplýsa hann um nýja pöntun.",
],
     "shop-login" => [
     "title" => "Staðfestingarkóði innskráningar",
     "sample" => "Innskráningarkóði þinn er: <b>123456</b><br> <b>Nafn verslunarinnar þíns</b><br> Selldone",
     "body" => "Innskráningarkóði þinn er: :param1 :param2 Selldone",
     "description" => "Sendu innskráningarkóða til viðskiptavinarins til að skrá þig inn í búðina.",
],
     "user-login" => [
     "title" => "Skilaboð um árangur innskráningar",
     "sample" => "Kæri <b>nafni</b> ,<br> Þú hefur skráð þig inn á reikninginn þinn með <b>iPhone 165.250.300.1</b> á <b>5/8/2021 9:14AM</b> .<br> Selldone",
     "body" => "Kæri :param1, Þú hefur skráð þig inn á reikninginn þinn með því að :param2 á :param3. Selldone",
     "description" => "Sendu skilaboð eftir að viðskiptavinurinn hefur skráð sig inn í búðina.",
],
     "avocado-order-submit" => [
     "title" => "Ný pöntun avókadó send send til kaupanda",
     "sample" => "<b>Nafn verslunarinnar þíns</b><br> Kæri <b>nafn þitt</b> ,<br> Við höfum móttekið pöntunina þína og erum að skoða hana.<br> Pöntunarnúmer: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Kæri :param1, Við höfum móttekið pöntunina þína og erum að fara yfir hana. Pöntun #: :param2 Selldone",
     "description" => "Sendu skilaboð til viðskiptavinarins eftir að hafa lagt inn avókadó pöntun.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avókadó fá nýja pöntun send til seljanda",
     "sample" => "Þú fékkst avókadópöntun:<br> Verslun: <b>Nafn verslunarinnar þíns</b><br> Kaupandi: <b>Nafn kaupanda</b><br> Pöntun: <b>AVO-246</b><br> Selldone",
     "body" => "Þú fékkst avókadópöntun: Verslun: :param1 Kaupandi: :param2 Pöntun: :param3 Selldone",
     "description" => "Sendu skilaboð til eiganda verslunarinnar til að upplýsa hann um að fá nýja avókadó pöntun.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avókadópöntun tilbúin til greiðslu",
     "sample" => "<b>Nafn verslunarinnar þíns</b><br> Pöntun þín hefur verið staðfest og hægt er að greiða hana í gegnum eftirfarandi hlekk.<br> Pöntunarnúmer: <b>AVO-246</b><br> Tengill: <b>https://your-domain/avocado</b><br> Selldone",
     "body" => ":param3 Pöntunin þín hefur verið staðfest og hægt er að greiða hana í gegnum eftirfarandi hlekk. Pöntun #: :param2 Tengill: :param1 Selldone",
     "description" => "Sendu skilaboð með greiðslutenglinum til viðskiptavinarins eftir að seljandi setti kostnað og staðfestu avókadópöntun sína.",
],
];