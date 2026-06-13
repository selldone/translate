<?php

/*
|--------------------------------------------------------------------------
| Shop SMS list
|--------------------------------------------------------------------------
| This array return to shop admin to see SMS preview!
|
*/

return [

    'shop-order-payment' => [
        'title' => 'Přijměte platbu',
        'sample' => "Vaše platba 267 USD byla úspěšně uhrazena.<br>Objednávka: SM-425<br>Děkujeme, <b>Název vašeho obchodu</b>.<br>Selldone",
        'body' => "Vaše platba :param2 byla úspěšně uhrazena.\nObjednávka: :param1\nDěkuji, :param3.\nSelldone",
        'icon' => 'platba',
        'description' => 'Odešlete zprávu zákazníkovi obchodu, abyste jej informovali o úspěšné platbě.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Přijměte platbu',
        'sample' => "Nová platba 267 USD byla úspěšně uhrazena.<br>Objednávka: SM-425<br>Děkujeme, <b>Název vašeho obchodu</b>.<br>Selldone",
        'body' => "Nová platba :param2 byla úspěšně uhrazena.\nObjednávka: :param1\nDěkuji, :param3.\nSelldone",
        'icon' => 'platba',
        'description' => 'Pošlete zprávu majiteli obchodu a informujte ho o úspěšné platbě.',

    ],

    'vendor-new-order' => [
        'title' => 'Prodejce Nová objednávka',
        'sample' => "Obdrželi jste novou objednávku v hodnotě 200 USD.<br>Objednávka: <b>SM-870</b> pro <b>Jméno dodavatele</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x",
        'body' => "Obdrželi jste novou objednávku :param2.\nObjednávka: :param1 pro :param3.\n:param4",
        'icon' => 'výkladní skříň',
        'description' => 'Odešlete zprávu prodejci a informujte jej o nové objednávce.',
    ],








    'shop-login' => [
        'title' => 'Přihlašovací ověřovací kód',
        'sample' => "Váš přihlašovací kód je: <b>123456</b><br><b>Název vašeho obchodu</b><br>Selldone",
        'body' => "Váš přihlašovací kód je: :param1\n:param2\nSelldone",
        'icon' => 'přihlášení',
        'description' => 'Pro přihlášení do obchodu zašlete zákazníkovi přihlašovací kód.',

    ],

    'user-login' => [
        'title' => 'Zpráva o úspěšném přihlášení',
        'sample' => "Vážený <b>Name</b>,<br>Přihlásili jste se ke svému účtu pomocí <b>iPhone 165.250.300.1</b> v <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Vážený :param1,\nPřihlásili jste se ke svému účtu pomocí :param2 na :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Odešlete zprávu po přihlášení zákazníka do obchodu.',

    ],

    'avocado-order-submit' => [
        'title' => 'Nová objednávka avokáda odeslána kupujícímu',
        'sample' => "<b>Vaše jméno obchodu</b><br>Vážený <b>Vaše jméno</b>,<br>Přijali jsme vaši objednávku a kontrolujeme ji.<br>Číslo objednávky: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nVážený :param1,\nVaši objednávku jsme obdrželi a posuzujeme ji.\nČíslo objednávky: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Pošlete zprávu zákazníkovi po zadání objednávky avokáda.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokádo přijímat novou objednávku odeslat prodejci',
        'sample' => "Obdrželi jste objednávku avokáda:<br>Obchod: <b>Název vašeho obchodu</b><br>Kupující: <b>Jméno kupujícího</b><br>Objednávka: <b>AVO-246</b><br>Selldone",
        'body' => "Obdrželi jste objednávku avokáda:\nObchod: :param1\nKupující: :param2\nObjednávka: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Pošlete zprávu majiteli obchodu a informujte ho o přijetí nové objednávky avokáda.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Objednávka avokáda připravena k zaplacení',
        'sample' => "<b>Název vašeho obchodu</b><br>Vaše objednávka byla potvrzena a můžete ji zaplatit prostřednictvím následujícího odkazu.<br>Číslo objednávky: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nVaše objednávka byla potvrzena a můžete ji zaplatit prostřednictvím následujícího odkazu.\nČíslo objednávky: :param2\nOdkaz: :param1\nSelldone",
        'icon' => 'účtenka',
        'description' => 'Odešlete zprávu s odkazem na platbu zákazníkovi poté, co prodejce nastaví cenu a potvrdí objednávku avokáda.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Objednávka připravena k odeslání',
        'sample' => "Ahoj <b>Alex</b>, máme dobré zprávy, vaše objednávka je nyní připravena k odeslání.<br>Objednávka: <b>SM-123</b>",
        'body' => "Ahoj :param4, máme dobré zprávy, vaše objednávka je nyní připravena k odeslání.\nObjednávka: :param1",
        'icon' => 'local_shipping',
        'description' => 'Pošlete zákazníkovi zprávu, že je jeho objednávka připravena k odeslání.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Objednávka připravena k vyzvednutí',
        'sample' => "Ahoj Alexi, dobré zprávy, vaše objednávka je nyní připravena k vyzvednutí. <br>Objednávka: <b>SM-123</b>",
        'body' => "Dobrý den, :param4, dobrá zpráva, vaše objednávka je nyní připravena k vyzvednutí.\nObjednávka: :param1",
        'icon' => 'share_location',
        'description' => 'Pošlete zákazníkovi zprávu, že je jeho objednávka připravena k vyzvednutí.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Objednávka dodavatele připravena k odeslání',
        'sample' => "Ahoj <b>Alex</b>, máme dobré zprávy, vaše objednávka je nyní připravena k odeslání.<br>Objednávka: <b>SM-123</b>",
        'body' => "Ahoj :param4, máme dobré zprávy, vaše objednávka je nyní připravena k odeslání.\nObjednávka: :param1",
        'icon' => 'local_shipping',
        'description' => 'Pošlete zákazníkovi zprávu, že je jeho objednávka připravena k odeslání. Jen na trhu s režimem přímé dopravy a typem doručení není Vyzvednutí.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Objednávka dodavatele připravena k vyzvednutí',
        'sample' => "Ahoj Alexi, dobré zprávy, vaše objednávka je nyní připravena k vyzvednutí. <br>Objednávka: <b>SM-123</b>",
        'body' => "Dobrý den, :param4, dobrá zpráva, vaše objednávka je nyní připravena k vyzvednutí.\nObjednávka: :param1",
        'icon' => 'share_location',
        'description' => 'Pošlete zákazníkovi zprávu, že je jeho objednávka připravena k vyzvednutí. Právě na trhu s režimem přímé dopravy a typem doručení je vyzvednutí.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Potvrzení objednávky položek',
        'sample' => "Dobrý den Alex, zkontrolovali jsme vaši objednávku. Zde je stav potvrzení pro vaše položky: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Dobrý den, :param4, zkontrolovali jsme vaši objednávku. Zde je stav potvrzení pro vaše položky:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'úkol_ odevzdán_',
        'description' => 'Informuje zákazníka o položkách v jeho objednávce, které byly přijaty nebo odmítnuty prodejcem.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Potvrzení objednávky zboží dodavatele',
        'sample' => "Dobrý den Alex, zkontrolovali jsme vaši objednávku. Zde je stav potvrzení pro vaše položky: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Dobrý den, :param4, zkontrolovali jsme vaši objednávku. Zde je stav potvrzení pro vaše položky:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'úkol_ odevzdán_',
        'description' => 'Informuje zákazníka o položkách v jeho objednávce, které byly přijaty nebo odmítnuty prodejcem.',
    ],



];
