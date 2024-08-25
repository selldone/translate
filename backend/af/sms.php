<?php 

 return [
     "shop-order-payment" => [
     "title" => "Aanvaar betaling",
     "sample" => "Jou betaling van 267$ is suksesvol afgehandel.<br> Bestel: SM-425<br> Dankie, <b>jou winkelnaam</b> .<br> Seldone",
     "body" => "Jou :param2-betaling is suksesvol vereffen. Bestel: :param1 Dankie, :param3. Seldone",
     "description" => "Stuur 'n boodskap aan winkelkliënt om in te lig oor suksesvolle betaling.",
],
     "shop-order-payment-admin" => [
     "title" => "Aanvaar betaling",
     "sample" => "Nuwe betaling van 267$ suksesvol afgehandel.<br> Bestel: SM-425<br> Dankie, <b>jou winkelnaam</b> .<br> Seldone",
     "body" => "Nuwe :param2-betaling suksesvol vereffen. Bestel: :param1 Dankie, :param3. Seldone",
     "description" => "Stuur 'n boodskap aan die winkeleienaar om hulle in te lig oor suksesvolle betaling.",
],
     "vendor-new-order" => [
     "title" => "Verkoper nuwe bestelling",
     "sample" => "Jy het 'n nuwe $200 bestelling ontvang.<br> Bestel: SM-870 vanaf <b>verkoper se naam</b> .",
     "body" => "Jy het 'n nuwe :param2 bestelling ontvang. Bestel: :param1 vir :param3.",
     "description" => "Stuur 'n boodskap aan die verkoper om hulle in te lig oor 'n nuwe bestelling.",
],
     "shop-login" => [
     "title" => "Aanmelding verifikasie kode",
     "sample" => "Jou aanmeldkode is: <b>123456</b><br> <b>Jou winkelnaam</b><br> Seldone",
     "body" => "Jou aanmeldkode is: :param1 :param2 Selldone",
     "description" => "Stuur aanmeldkode aan die kliënt om by die winkel aan te meld.",
],
     "user-login" => [
     "title" => "Meld suksesboodskap",
     "sample" => "Liewe <b>Naam</b> ,<br> Jy het by jou rekening aangemeld deur <b>iPhone 165.250.300.1</b> om <b>5/8/2021 9:14AM</b> .<br> Seldone",
     "body" => "Beste :param1, Jy het by jou rekening aangemeld deur :param2 by :param3. Seldone",
     "description" => "Stuur 'n boodskap nadat die kliënt by die winkel aangemeld het.",
],
     "avocado-order-submit" => [
     "title" => "Avokado nuwe bestelling ingedien stuur aan koper",
     "sample" => "<b>Jou winkelnaam</b><br> Liewe <b>jou naam</b> ,<br> Ons het jou bestelling ontvang en ons hersien dit.<br> Bestelnommer: <b>AVO-246</b><br> Seldone",
     "body" => ":param3 Beste :param1, Ons het jou bestelling ontvang en ons hersien dit. Bestel #: :param2 Selldone",
     "description" => "Stuur 'n boodskap aan die kliënt nadat jy 'n avokado-bestelling geplaas het.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado ontvang nuwe bestelling stuur aan verkoper",
     "sample" => "Jy het 'n avokadobestelling ontvang:<br> Winkel: <b>Jou winkelnaam</b><br> Koper: <b>Koper se naam</b><br> Bestelling: <b>AVO-246</b><br> Seldone",
     "body" => "Jy het 'n avokadobestelling ontvang: Winkel: :param1 Koper: :param2 Bestelling: :param3 Verkoop",
     "description" => "Stuur 'n boodskap aan die winkeleienaar om hulle in te lig oor die ontvangs van nuwe avokadobestelling.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avokado bestelling gereed om te betaal",
     "sample" => "<b>Jou winkelnaam</b><br> Jou bestelling is bevestig en kan deur die volgende skakel betaal word.<br> Bestelnommer: <b>AVO-246</b><br> Skakel: <b>https://jou-domein/avocado</b><br> Seldone",
     "body" => ":param3 Jou bestelling is bevestig en kan deur die volgende skakel betaal word. Bestel #: :param2 Skakel: :param1 Selldone",
     "description" => "Stuur 'n boodskap met die betalingskakel na die kliënt nadat die verkoper koste vasgestel het en bevestig hul avokadobestelling.",
],
];