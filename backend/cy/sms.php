<?php 

 return [
     "shop-order-payment" => [
     "title" => "Derbyn taliad",
     "sample" => "Wedi setlo'ch taliad 267$ yn llwyddiannus.<br> Gorchymyn: SM-425<br> Diolch, <b>enw eich siop</b> .<br> Gwerthwyd",
     "body" => "Eich taliad :param2 wedi'i setlo'n llwyddiannus. Gorchymyn: :param1 Diolch, :param3. Gwerthwyd",
     "description" => "Anfonwch neges i gwsmer siop i roi gwybod am daliad llwyddiannus.",
],
     "shop-order-payment-admin" => [
     "title" => "Derbyn taliad",
     "sample" => "Taliad newydd o 267$ wedi'i setlo'n llwyddiannus.<br> Gorchymyn: SM-425<br> Diolch, <b>enw eich siop</b> .<br> Gwerthwyd",
     "body" => "Newydd: taliad param2 wedi'i setlo'n llwyddiannus. Gorchymyn: :param1 Diolch, :param3. Gwerthwyd",
     "description" => "Anfonwch neges at berchennog y siop i'w hysbysu am daliad llwyddiannus.",
],
     "vendor-new-order" => [
     "title" => "Archeb Newydd Gwerthwr",
     "sample" => "Rydych chi wedi derbyn archeb $200 newydd.<br> Gorchymyn: SM-870 o <b>enw'r Gwerthwr</b> .",
     "body" => "Rydych chi wedi derbyn archeb newydd:param2. Gorchymyn: :param1 ar gyfer: param3.",
     "description" => "Anfonwch neges at y gwerthwr i roi gwybod iddynt am archeb newydd.",
],
     "shop-login" => [
     "title" => "Cod dilysu mewngofnodi",
     "sample" => "Eich cod mewngofnodi yw: <b>123456</b><br> <b>Enw eich siop</b><br> Gwerthwyd",
     "body" => "Eich cod mewngofnodi yw: :param1 :param2 Selldone",
     "description" => "Anfonwch y cod mewngofnodi at y cwsmer i fewngofnodi i'r siop.",
],
     "user-login" => [
     "title" => "Neges Llwyddiant Mewngofnodi",
     "sample" => "Annwyl <b>Enw</b> ,<br> Rydych chi wedi mewngofnodi i'ch cyfrif erbyn <b>iPhone 165.250.300.1</b> am <b>5/8/2021 9:14AM</b> .<br> Gwerthwyd",
     "body" => "Annwyl :param1, Rydych chi wedi mewngofnodi i'ch cyfrif erbyn: param2 yn: param3. Gwerthwyd",
     "description" => "Anfonwch neges ar ôl i'r cwsmer fewngofnodi i'r siop.",
],
     "avocado-order-submit" => [
     "title" => "Archeb newydd afocado wedi'i gyflwyno anfon at y prynwr",
     "sample" => "<b>Enw eich siop</b><br> Annwyl <b>Eich enw</b> ,<br> Rydym wedi derbyn eich archeb ac rydym yn ei adolygu.<br> Gorchymyn #: <b>AVO-246</b><br> Gwerthwyd",
     "body" => ":param3 Annwyl: param1, Rydym wedi derbyn eich archeb ac rydym yn ei adolygu. Archeb #: :param2 Selldone",
     "description" => "Anfonwch neges at y cwsmer ar ôl gosod archeb Afocado.",
],
     "avocado-order-submit-seller" => [
     "title" => "Afocado yn derbyn archeb newydd yn cael ei anfon at y gwerthwr",
     "sample" => "Rydych wedi derbyn archeb afocado:<br> Siop: <b>Enw eich siop</b><br> Prynwr: <b>Enw'r prynwr</b><br> Gorchymyn: <b>AVO-246</b><br> Gwerthwyd",
     "body" => "Cawsoch archeb afocado: Storfa: :param1 Prynwr: :param2 Archeb: :param3 Selldone",
     "description" => "Anfonwch neges at berchennog y siop i roi gwybod iddynt am dderbyn archeb newydd am Afocado.",
],
     "avocado-ready-to-pay" => [
     "title" => "Archeb afocado yn barod i dalu",
     "sample" => "<b>Enw eich siop</b><br> Mae'ch archeb wedi'i chadarnhau a gellir ei thalu trwy'r ddolen ganlynol.<br> Gorchymyn #: <b>AVO-246</b><br> Dolen: <b>https://your-domain/avocado</b><br> Gwerthwyd",
     "body" => ":param3 Mae'ch archeb wedi'i chadarnhau a gellir ei thalu trwy'r ddolen ganlynol. Archeb #: :param2 Dolen: :param1 Selldone",
     "description" => "Anfonwch neges gyda'r ddolen talu i'r cwsmer ar ôl i'r gwerthwr osod y gost a chadarnhau eu harcheb Afocado.",
],
];