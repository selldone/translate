<?php 

 return [
     "shop-order-payment" => [
     "title" => "Přijměte platbu",
     "sample" => "Vaše platba 267 $ byla úspěšně uhrazena.<br> Objednávka: SM-425<br> Děkuji, <b>název vašeho obchodu</b> .<br> Prodáno",
     "body" => "Vaše platba :param2 byla úspěšně uhrazena. Objednávka: :param1 Díky, :param3. Prodáno",
     "description" => "Odešlete zprávu zákazníkovi obchodu, abyste jej informovali o úspěšné platbě.",
],
     "shop-order-payment-admin" => [
     "title" => "Přijměte platbu",
     "sample" => "Nová platba 267 $ byla úspěšně uhrazena.<br> Objednávka: SM-425<br> Děkuji, <b>název vašeho obchodu</b> .<br> Prodáno",
     "body" => "Nová platba :param2 byla úspěšně zúčtována. Objednávka: :param1 Díky, :param3. Prodáno",
     "description" => "Pošlete zprávu majiteli obchodu a informujte ho o úspěšné platbě.",
],
     "vendor-new-order" => [
     "title" => "Prodejce Nová objednávka",
     "sample" => "Obdrželi jste novou objednávku v hodnotě 200 USD.<br> Objednávka: SM-870 od <b>jména dodavatele</b> .",
     "body" => "Obdrželi jste novou objednávku :param2. Pořadí: :param1 pro :param3.",
     "description" => "Odešlete zprávu prodejci a informujte jej o nové objednávce.",
],
     "shop-login" => [
     "title" => "Přihlašovací ověřovací kód",
     "sample" => "Váš přihlašovací kód je: <b>123456</b><br> <b>Název vašeho obchodu</b><br> Prodáno",
     "body" => "Váš přihlašovací kód je: :param1 :param2 Prodáno",
     "description" => "Pro přihlášení do obchodu zašlete zákazníkovi přihlašovací kód.",
],
     "user-login" => [
     "title" => "Zpráva o úspěšném přihlášení",
     "sample" => "milé <b>jméno</b> ,<br> Přihlásili jste se ke svému účtu pomocí <b>iPhone 165.250.300.1</b> dne 8. 5. <b>2021 9:14</b> .<br> Prodáno",
     "body" => "Vážený :param1, přihlásili jste se ke svému účtu pomocí :param2 na :param3. Prodáno",
     "description" => "Odešlete zprávu po přihlášení zákazníka do obchodu.",
],
     "avocado-order-submit" => [
     "title" => "Nová objednávka avokáda odeslána kupujícímu",
     "sample" => "<b>Název vašeho obchodu</b><br> Drahé <b>tvé jméno</b> ,<br> Vaši objednávku jsme obdrželi a posuzujeme ji.<br> Číslo objednávky: <b>AVO-246</b><br> Prodáno",
     "body" => ":param3 Vážený :param1, obdrželi jsme vaši objednávku a kontrolujeme ji. Číslo objednávky: :param2 Prodáno",
     "description" => "Pošlete zprávu zákazníkovi po zadání objednávky avokáda.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokádo přijímat novou objednávku odeslat prodejci",
     "sample" => "Obdrželi jste objednávku avokáda:<br> Obchod: <b>Název vašeho obchodu</b><br> Kupující: <b>Jméno kupujícího</b><br> Objednávka: <b>AVO-246</b><br> Prodáno",
     "body" => "Obdrželi jste objednávku avokáda: Obchod: :param1 Kupující: :param2 Objednávka: :param3 Prodáno",
     "description" => "Pošlete zprávu majiteli obchodu a informujte ho o přijetí nové objednávky avokáda.",
],
     "avocado-ready-to-pay" => [
     "title" => "Objednávka avokáda připravena k zaplacení",
     "sample" => "<b>Název vašeho obchodu</b><br> Vaše objednávka byla potvrzena a můžete ji zaplatit prostřednictvím následujícího odkazu.<br> Číslo objednávky: <b>AVO-246</b><br> Odkaz: <b>https://vaše-doména/avokádo</b><br> Prodáno",
     "body" => ":param3 Vaše objednávka byla potvrzena a můžete ji zaplatit prostřednictvím následujícího odkazu. Objednávka č: :param2 Odkaz: :param1 Prodáno",
     "description" => "Odešlete zprávu s odkazem na platbu zákazníkovi poté, co prodejce nastaví cenu a potvrdí objednávku avokáda.",
],
];