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
        'title' => 'Prijmite platbu',
        'sample' => "Vaša platba 267 USD bola úspešne uhradená.<br>Objednávka: SM-425<br>Ďakujem, <b>Názov vášho obchodu</b>.<br>Selldone",
        'body' => "Vaša platba :param2 bola úspešne uhradená.\nObjednávka: :param1\nĎakujem, :param3.\nSelldone",
        'icon' => 'platba',
        'description' => 'Pošlite správu zákazníkovi obchodu a informujte ho o úspešnej platbe.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Prijmite platbu',
        'sample' => "Nová platba 267 USD bola úspešne uhradená.<br>Objednávka: SM-425<br>Ďakujem, <b>Názov vášho obchodu</b>.<br>Selldone",
        'body' => "Nová platba :param2 bola úspešne uhradená.\nObjednávka: :param1\nĎakujem, :param3.\nSelldone",
        'icon' => 'platba',
        'description' => 'Pošlite správu majiteľovi obchodu, aby ste ho informovali o úspešnej platbe.',

    ],

    'vendor-new-order' => [
        'title' => 'Predajca Nová objednávka',
        'sample' => "Dostali ste novú objednávku v hodnote 200 USD.<br>Objednávka: <b>SM-870</b> pre <b>Názov dodávateľa</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x",
        'body' => "Dostali ste novú objednávku :param2.\nObjednávka: :param1 pre :param3.\n:param4",
        'icon' => 'výkladná skriňa',
        'description' => 'Pošlite správu predajcovi a informujte ho o novej objednávke.',
    ],








    'shop-login' => [
        'title' => 'Prihlasovací overovací kód',
        'sample' => "Váš prihlasovací kód je: <b>123456</b><br><b>Názov vášho obchodu</b><br>Selldone",
        'body' => "Váš prihlasovací kód je: :param1\n:param2\nSelldone",
        'icon' => 'prihlásenie',
        'description' => 'Pošlite prihlasovací kód zákazníkovi na prihlásenie do obchodu.',

    ],

    'user-login' => [
        'title' => 'Správa o úspešnom prihlásení',
        'sample' => "Vážený <b>Name</b>,<br>Do svojho účtu ste sa prihlásili pomocou <b>iPhone 165.250.300.1</b> na <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Vážený :param1,\nDo svojho účtu ste sa prihlásili pomocou :param2 na :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Po prihlásení zákazníka do obchodu odošlite správu.',

    ],

    'avocado-order-submit' => [
        'title' => 'Nová objednávka avokáda odoslaná kupujúcemu',
        'sample' => "<b>Názov vášho obchodu</b><br>Vážený <b>Vaše meno</b>,<br>Prijali sme vašu objednávku a kontrolujeme ju.<br>Objednávka č: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nVážený :param1,\nVašu objednávku sme dostali a posudzujeme ju.\nČíslo objednávky: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Po zadaní objednávky avokáda odošlite správu zákazníkovi.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokádo prijať novú objednávku poslať predajcovi',
        'sample' => "Dostali ste objednávku avokáda:<br>Obchod: <b>Názov vášho obchodu</b><br>Kupujúci: <b>Meno kupujúceho</b><br>Objednávka: <b>AVO-246</b><br>Selldone",
        'body' => "Dostali ste objednávku avokáda:\nObchod: :param1\nKupujúci: :param2\nObjednávka: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Pošlite správu majiteľovi obchodu, aby ste ho informovali o prijatí novej objednávky avokáda.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Objednávka avokáda pripravená na zaplatenie',
        'sample' => "<b>Názov vášho obchodu</b><br>Vaša objednávka bola potvrdená a môžete ju zaplatiť prostredníctvom nasledujúceho odkazu.<br>Číslo objednávky: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nVaša objednávka bola potvrdená a môžete ju zaplatiť cez nasledujúci odkaz.\nČíslo objednávky: :param2\nOdkaz: :param1\nSelldone",
        'icon' => 'potvrdenie',
        'description' => 'Pošlite správu s odkazom na platbu zákazníkovi potom, čo predajca nastavil cenu a potvrdil objednávku avokáda.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Objednávka pripravená na odoslanie',
        'sample' => "Ahoj <b>Alex</b>, máme dobré správy, vaša objednávka je teraz pripravená na odoslanie.<br>Objednávka: <b>SM-123</b>",
        'body' => "Dobrý deň, :param4, máme dobré správy, vaša objednávka je teraz pripravená na odoslanie.\nObjednávka: :param1",
        'icon' => 'local_shipping',
        'description' => 'Pošlite správu zákazníkovi, aby ste ho informovali, že jeho objednávka je pripravená na odoslanie.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Objednávka pripravená na vyzdvihnutie',
        'sample' => "Ahoj Alex, dobré správy, vaša objednávka je teraz pripravená na vyzdvihnutie.<br>Objednávka: <b>SM-123</b>",
        'body' => "Dobrý deň, :param4, máme dobré správy, vaša objednávka je teraz pripravená na vyzdvihnutie.\nObjednávka: :param1",
        'icon' => 'share_location',
        'description' => 'Pošlite zákazníkovi správu, aby ste ho informovali, že jeho objednávka je pripravená na vyzdvihnutie.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Objednávka predajcu pripravená na odoslanie',
        'sample' => "Ahoj <b>Alex</b>, máme dobré správy, vaša objednávka je teraz pripravená na odoslanie.<br>Objednávka: <b>SM-123</b>",
        'body' => "Dobrý deň, :param4, máme dobré správy, vaša objednávka je teraz pripravená na odoslanie.\nObjednávka: :param1",
        'icon' => 'local_shipping',
        'description' => 'Pošlite správu zákazníkovi, aby ste ho informovali, že jeho objednávka je pripravená na odoslanie. Len na trhu s režimom priamej dopravy a typom doručenia nie je Vyzdvihnutie.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Objednávka predajcu pripravená na vyzdvihnutie',
        'sample' => "Ahoj Alex, dobré správy, vaša objednávka je teraz pripravená na vyzdvihnutie.<br>Objednávka: <b>SM-123</b>",
        'body' => "Dobrý deň, :param4, máme dobré správy, vaša objednávka je teraz pripravená na vyzdvihnutie.\nObjednávka: :param1",
        'icon' => 'share_location',
        'description' => 'Pošlite zákazníkovi správu, aby ste ho informovali, že jeho objednávka je pripravená na vyzdvihnutie. Len na trhu s režimom priamej dopravy a typom doručenia je Vyzdvihnutie.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Potvrdenie objednávky položiek',
        'sample' => "Dobrý deň Alex, skontrolovali sme vašu objednávku. Tu je stav potvrdenia pre vaše položky: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Dobrý deň, :param4, skontrolovali sme vašu objednávku. Tu je stav potvrdenia pre vaše položky:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'zadanie_odovzdané_',
        'description' => 'Informuje zákazníka o položkách v objednávke, ktoré predajca prijal alebo zamietol.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Potvrdenie objednávky dodávateľa',
        'sample' => "Dobrý deň Alex, skontrolovali sme vašu objednávku. Tu je stav potvrdenia pre vaše položky: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Dobrý deň, :param4, skontrolovali sme vašu objednávku. Tu je stav potvrdenia pre vaše položky:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'zadanie_odovzdané_',
        'description' => 'Informuje zákazníka o položkách v jeho objednávke, ktoré boli prijaté alebo odmietnuté predajcom.',
    ],



];
