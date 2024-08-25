<?php 

 return [
     "shop-order-payment" => [
     "title" => "Aċċetta ħlas",
     "sample" => "Il-ħlas tiegħek ta' 267$ ġie saldat b'suċċess.<br> Ordni: SM-425<br> Grazzi, <b>Isem il-maħżen tiegħek</b> .<br> Selldone",
     "body" => "Il-ħlas tiegħek :param2 ġie saldat b'suċċess. Ordni: :param1 Grazzi, :param3. Selldone",
     "description" => "Ibgħat messaġġ lill-klijent tal-ħanut biex tinforma dwar il-ħlas b'suċċess.",
],
     "shop-order-payment-admin" => [
     "title" => "Aċċetta ħlas",
     "sample" => "Ħlas ġdid ta' 267$ issetilja b'suċċess.<br> Ordni: SM-425<br> Grazzi, <b>Isem il-maħżen tiegħek</b> .<br> Selldone",
     "body" => "Ġdid: il-ħlas param2 ġie saldat b'suċċess. Ordni: :param1 Grazzi, :param3. Selldone",
     "description" => "Ibgħat messaġġ lis-sid tal-ħanut biex tinformahom dwar il-ħlas b'suċċess.",
],
     "vendor-new-order" => [
     "title" => "Ordni Ġdid tal-Bejjiegħ",
     "sample" => "Irċevejt ordni ġdida ta' $200.<br> Ordni: SM-870 mill <b>-isem tal-bejjiegħ</b> .",
     "body" => "Irċevejt ordni ġdida :param2. Ordni: :param1 għal :param3.",
     "description" => "Ibgħat messaġġ lill-bejjiegħ biex tinformahom dwar ordni ġdida.",
],
     "shop-login" => [
     "title" => "Kodiċi ta' verifika tal-login",
     "sample" => "Il-kodiċi tal-login tiegħek huwa: <b>123456</b><br> <b>L-isem tal-maħżen tiegħek</b><br> Selldone",
     "body" => "Il-kodiċi tal-login tiegħek huwa: :param1 :param2 Selldone",
     "description" => "Ibgħat il-kodiċi tal-login lill-klijent biex jidħol fil-ħanut.",
],
     "user-login" => [
     "title" => "Messaġġ ta' Suċċess tal-Loggja",
     "sample" => "Għażiż <b>Isem</b> ,<br> Dħalt fil-kont tiegħek mill <b>-iPhone 165.250.300.1</b> fi <b>5/8/2021 9:14AM</b> .<br> Selldone",
     "body" => "Għażiż :param1, Dħalt fil-kont tiegħek minn :param2 fi :param3. Selldone",
     "description" => "Ibgħat messaġġ wara l-login tal-klijent fil-ħanut.",
],
     "avocado-order-submit" => [
     "title" => "Avocado ordni ġdida sottomessa tibgħat lix-xerrej",
     "sample" => "<b>L-isem tal-maħżen tiegħek</b><br> Għażiż <b>ismek</b> ,<br> Irċevejna l-ordni tiegħek u qed nirreveduha.<br> Ordni #: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Għażiż :param1, Irċevejna l-ordni tiegħek u qed nirreveduha. Ordni #: :param2 Selldone",
     "description" => "Ibgħat messaġġ lill-klijent wara li tagħmel ordni ta 'Avocado.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado tirċievi ordni ġdida tibgħat lill-bejjiegħ",
     "sample" => "Irċevejt ordni ta' avokado:<br> Aħżen: <b>L-isem tal-maħżen tiegħek</b><br> Xerrej: <b>Isem ix-xerrej</b><br> Ordni: <b>AVO-246</b><br> Selldone",
     "body" => "Irċevejt ordni ta' avokado: Aħżen: :param1 Xerrej: :param2 Ordni: :param3 Selldone",
     "description" => "Ibgħat messaġġ lis-sid tal-ħanut biex tinformahom dwar ir-riċeviment ta' ordni ġdida ta' Avocado.",
],
     "avocado-ready-to-pay" => [
     "title" => "Ordni tal-avokado lesta biex tħallas",
     "sample" => "<b>L-isem tal-maħżen tiegħek</b><br> L-ordni tiegħek ġiet ikkonfermata u tista' titħallas permezz tal-link li ġej.<br> Ordni #: <b>AVO-246</b><br> Link: <b>https://dominju-tiegħek/avocado</b><br> Selldone",
     "body" => ":param3 L-ordni tiegħek ġiet ikkonfermata u tista' titħallas permezz tal-link li ġej. Ordni #: :param2 Link: :param1 Selldone",
     "description" => "Ibgħat messaġġ bil-link tal-ħlas lill-klijent wara li l-bejjiegħ stabbilixxa l-ispiża u jikkonferma l-ordni tal-Avocado tiegħu.",
],
];