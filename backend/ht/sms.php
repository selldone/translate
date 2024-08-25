<?php 

 return [
     "shop-order-payment" => [
     "title" => "Aksepte peman",
     "sample" => "Peman 267$ ou a byen regle.<br> Lòd: SM-425<br> Mèsi, <b>non magazen ou</b> .<br> Selldone",
     "body" => "Peman :param2 ou a rezoud avèk siksè. Lòd: :param1 Mèsi, :param3. Selldone",
     "description" => "Voye yon mesaj bay kliyan boutik pou enfòme sou peman siksè.",
],
     "shop-order-payment-admin" => [
     "title" => "Aksepte peman",
     "sample" => "Nouvo peman 267$ rezoud avèk siksè.<br> Lòd: SM-425<br> Mèsi, <b>non magazen ou</b> .<br> Selldone",
     "body" => "Nouvo: peman param2 rezoud avèk siksè. Lòd: :param1 Mèsi, :param3. Selldone",
     "description" => "Voye yon mesaj bay pwopriyetè boutik la pou enfòme yo sou peman ki gen siksè.",
],
     "vendor-new-order" => [
     "title" => "Vandè nouvo lòd",
     "sample" => "Ou te resevwa yon nouvo lòd $200.<br> Lòd: SM-870 soti nan <b>non vandè</b> .",
     "body" => "Ou te resevwa yon nouvo lòd :param2. Lòd: :param1 pou :param3.",
     "description" => "Voye yon mesaj bay vandè a pou enfòme yo sou yon nouvo lòd.",
],
     "shop-login" => [
     "title" => "Kòd verifikasyon konekte",
     "sample" => "Kòd konekte ou a se: <b>123456</b><br> <b>Non magazen ou</b><br> Selldone",
     "body" => "Kòd konekte ou a se: :param1 :param2 Selldone",
     "description" => "Voye kòd login bay kliyan an pou konekte nan boutik la.",
],
     "user-login" => [
     "title" => "Konekte mesaj siksè",
     "sample" => "Chè <b>non</b> ,<br> Ou te konekte sou kont ou pa <b>iPhone 165.250.300.1</b> nan <b>5/8/2021 9:14AM</b> .<br> Selldone",
     "body" => "Chè :param1, Ou te konekte sou kont ou pa :param2 nan :param3. Selldone",
     "description" => "Voye yon mesaj apre kliyan an konekte nan boutik la.",
],
     "avocado-order-submit" => [
     "title" => "Zaboka nouvo lòd soumèt voye bay achtè",
     "sample" => "<b>Non magazen ou</b><br> Chè <b>non ou</b> ,<br> Nou te resevwa lòd ou a epi n ap revize li.<br> Lòd #: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Chè :param1, Nou resevwa lòd ou a epi n ap revize li. Lòd #: :param2 Selldone",
     "description" => "Voye yon mesaj bay kliyan an apre yo fin mete yon lòd zaboka.",
],
     "avocado-order-submit-seller" => [
     "title" => "Zaboka resevwa nouvo lòd voye bay vandè",
     "sample" => "Ou te resevwa yon lòd zaboka:<br> Magazen: <b>Non magazen ou</b><br> Achtè: <b>Non achtè</b><br> Lòd: <b>AVO-246</b><br> Selldone",
     "body" => "Ou te resevwa yon lòd zaboka: Magazen: :param1 Achtè: :param2 Lòd: :param3 Selldone",
     "description" => "Voye yon mesaj bay pwopriyetè magazen an pou enfòme yo sou resevwa nouvo lòd zaboka.",
],
     "avocado-ready-to-pay" => [
     "title" => "Lòd zaboka pare pou peye",
     "sample" => "<b>Non magazen ou</b><br> Kòmand ou a te konfime epi yo ka peye nan lyen sa a.<br> Lòd #: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Selldone",
     "body" => ":param3 Yo konfime lòd ou a epi yo ka peye pa lyen sa a. Lòd #: :param2 Link: :param1 Selldone",
     "description" => "Voye yon mesaj ak lyen peman an bay kliyan an apre vandè a fikse pri epi konfime lòd zaboka yo.",
],
];