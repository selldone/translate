<?php 

 return [
     "shop-order-payment" => [
     "title" => "Akzeptéieren Bezuelen",
     "sample" => "Är 267 $ Bezuelung erfollegräich ofgeschloss.<br> Uerdnung: SM-425<br> Merci, <b>Äre Buttek Numm</b> .<br> Selldon",
     "body" => "Är: param2 Bezuelung erfollegräich ofgeléist. Uerdnung: :param1 Merci, :param3. Selldon",
     "description" => "Schéckt e Message un de Buttek Client fir iwwer erfollegräich Bezuelung z'informéieren.",
],
     "shop-order-payment-admin" => [
     "title" => "Akzeptéieren Bezuelen",
     "sample" => "Nei 267 $ Bezuelung erfollegräich ofgeschloss.<br> Uerdnung: SM-425<br> Merci, <b>Äre Buttek Numm</b> .<br> Selldon",
     "body" => "Nei: param2 Bezuelung erfollegräich ofgeschloss. Uerdnung: :param1 Merci, :param3. Selldon",
     "description" => "Schéckt e Message un de Buttek Besëtzer hinnen iwwer erfollegräich Bezuelen ze informéieren.",
],
     "vendor-new-order" => [
     "title" => "Verkeefer New Uerdnung",
     "sample" => "Dir hutt eng nei $ 200 Bestellung kritt.<br> Uerdnung: SM-870 vum <b>Verkeefer Numm</b> .",
     "body" => "Dir krut eng nei Bestellung: param2. Uerdnung: :param1 fir :param3.",
     "description" => "Schéckt e Message un de Verkeefer fir hinnen iwwer eng nei Bestellung z'informéieren.",
],
     "shop-login" => [
     "title" => "Login Verifikatiounscode",
     "sample" => "Äre Login Code ass: <b>123456</b><br> <b>Äre Buttek Numm</b><br> Selldon",
     "body" => "Äre Logincode ass: :param1 :param2 Selldone",
     "description" => "Schéckt Login Code un de Client fir aloggen op de Buttek.",
],
     "user-login" => [
     "title" => "Login Erfolleg Message",
     "sample" => "Léif <b>Numm</b> ,<br> Dir hutt op Äre Kont um <b>iPhone 165.250.300.1</b> um <b>5/8/2021 9:14 AM ageloggt</b> .<br> Selldon",
     "body" => "Léif :param1, Dir hutt op Äre Kont ageloggt duerch :param2 um :param3. Selldon",
     "description" => "Schéckt e Message nom Client Login an de Buttek.",
],
     "avocado-order-submit" => [
     "title" => "Avocado nei Bestellung presentéiert un de Keefer schécken",
     "sample" => "<b>Äre Buttek Numm</b><br> Léif <b>Ären Numm</b> ,<br> Mir hunn Är Bestellung kritt a mir iwwerpréiwen se.<br> Uerdnung #: <b>AVO-246</b><br> Selldon",
     "body" => ":param3 Léif :param1, Mir hunn Är Bestellung kritt a mir iwwerpréiwen se. Uerdnung #:: param2 Selldone",
     "description" => "Schéckt e Message un de Client nodeems Dir eng Avocado Bestellung gemaach hutt.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado kritt nei Bestellung un de Verkeefer geschéckt",
     "sample" => "Dir krut eng Avocadobestellung:<br> Store: <b>Äre Buttek Numm</b><br> Keefer: <b>Keefer Numm</b><br> Uerdnung: <b>AVO-246</b><br> Selldon",
     "body" => "Dir krut eng Avocado Bestellung: Store: :param1 Keefer: :param2 Bestellung: :param3 Selldone",
     "description" => "Schéckt e Message un de Buttekbesëtzer fir hinnen z'informéieren iwwer d'Erhalen vun neien Avocado-Bestellung.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avocado Bestellung prett ze bezuelen",
     "sample" => "<b>Äre Buttek Numm</b><br> Är Bestellung gouf bestätegt a kann iwwer de folgende Link bezuelt ginn.<br> Uerdnung #: <b>AVO-246</b><br> Link: <b>https://your-Domain/avocado</b><br> Selldon",
     "body" => ":param3 Är Bestellung gouf bestätegt a kann iwwer de folgende Link bezuelt ginn. Bestellung #: :param2 Link: :param1 Selldone",
     "description" => "Schéckt e Message mam Bezuelungslink un de Client nodeems de Verkeefer d'Käschte gesat huet an hir Avocado Bestellung bestätegt.",
],
];