<?php 

 return [
     "shop-order-payment" => [
     "title" => "Akseptearje betelling",
     "sample" => "Jo betelling fan 267 $ is mei súkses regele.<br> Oarder: SM-425<br> Tankewol, <b>jo winkelnamme</b> .<br> Seldone",
     "body" => "Jo: param2 betelling is mei súkses ôfrekke. Oarder: :param1 Tankewol, :param3. Seldone",
     "description" => "Stjoer in berjocht nei winkel klant te ynformearjen oer suksesfolle betelling.",
],
     "shop-order-payment-admin" => [
     "title" => "Akseptearje betelling",
     "sample" => "Nije 267 $ betelling mei súkses regele.<br> Oarder: SM-425<br> Tankewol, <b>jo winkelnamme</b> .<br> Seldone",
     "body" => "Nije: param2 betelling mei súkses regele. Oarder: :param1 Tankewol, :param3. Seldone",
     "description" => "Stjoer in berjocht nei de winkeleigner om har te ynformearjen oer suksesfolle betelling.",
],
     "vendor-new-order" => [
     "title" => "Ferkeaper Nije oarder",
     "sample" => "Jo hawwe in nije bestelling fan $ 200 krigen.<br> Oarder: SM-870 fan <b>Vendor namme</b> .",
     "body" => "Jo hawwe in nije opdracht krigen: param2. Oarder: :param1 foar :param3.",
     "description" => "Stjoer in berjocht nei de ferkeaper om har te ynformearjen oer in nije bestelling.",
],
     "shop-login" => [
     "title" => "Login ferifikaasje koade",
     "sample" => "Jo oanmeldekoade is: <b>123456</b><br> <b>Jo winkelnamme</b><br> Seldone",
     "body" => "Jo oanmeldkoade is::param1:param2 Selldone",
     "description" => "Stjoer oanmeldkoade nei de klant om oan te melden by de winkel.",
],
     "user-login" => [
     "title" => "Oanmelde Sukses Berjocht",
     "sample" => "Beste <b>namme</b> ,<br> Jo hawwe oanmeld by jo akkount by <b>iPhone 165.250.300.1</b> op <b>5/8/2021 9:14AM</b> .<br> Seldone",
     "body" => "Beste :param1, Jo binne oanmeld by jo akkount troch :param2 op :param3. Seldone",
     "description" => "Stjoer in berjocht nei de klant oanmeld by de winkel.",
],
     "avocado-order-submit" => [
     "title" => "Avocado nije bestelling yntsjinne ferstjoere nei keaper",
     "sample" => "<b>Jo winkelnamme</b><br> Beste <b>dyn namme</b> ,<br> Wy hawwe jo bestelling ûntfongen en wy beoardielje it.<br> Oarder #: <b>AVO-246</b><br> Seldone",
     "body" => ":param3 Beste :param1, Wy hawwe jo bestelling ûntfongen en wy beoardielje it. Order #: :param2 Selldone",
     "description" => "Stjoer in berjocht nei de klant nei it pleatsen fan in Avocado bestelling.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado ûntfange nije bestelling ferstjoere nei ferkeaper",
     "sample" => "Jo hawwe in avokadobestelling krigen:<br> Winkel: <b>Jo winkelnamme</b><br> Keaper: <b>Keaper namme</b><br> Oarder: <b>AVO-246</b><br> Seldone",
     "body" => "Jo hawwe in avokadobestelling krigen: Winkel: :param1 Keaper: :param2 Bestelling: :param3 Selldone",
     "description" => "Stjoer in berjocht nei de winkeleigner om har te ynformearjen oer it ûntfangen fan nije Avocado-bestelling.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avocado bestelling klear om te beteljen",
     "sample" => "<b>Jo winkelnamme</b><br> Jo bestelling is befêstige en kin wurde betelle fia de folgjende keppeling.<br> Oarder #: <b>AVO-246</b><br> Keppeling: <b>https://your-domain/avocado</b><br> Seldone",
     "body" => ":param3 Jo bestelling is befêstige en kin betelle wurde fia de folgjende keppeling. Order #: :param2 Link: :param1 Selldone",
     "description" => "Stjoer in berjocht mei de betelling keppeling nei de klant neidat de ferkeaper set kosten en befêstigje harren Avocado oarder.",
],
];