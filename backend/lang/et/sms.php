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
        'title' => 'Nõustu maksega',
        'sample' => "Teie 267-dollarine makse arveldati edukalt.<br>Tellimus: SM-425<br>QQ<b>Teie poe nimi</b>.<br>Selldone",
        'body' => "Teie :param2 makse tasumine õnnestus.\nTellimus: :param1\nAitäh, :param3.\nSelldone",
        'icon' => 'makse',
        'description' => 'Edukast maksest teavitamiseks saatke poe kliendile sõnum.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Nõustu maksega',
        'sample' => "Uus 267-dollarine makse arveldati edukalt.<br>Tellimus: SM-425<br>QQ<b>Teie poe nimi</b>.<br>Selldone",
        'body' => "Uus :param2 makse arveldati edukalt.\nTellimus: :param1\nAitäh, :param3.\nSelldone",
        'icon' => 'makse',
        'description' => 'Saada poe omanikule sõnum, et teavitada edukast maksest.',

    ],

    'vendor-new-order' => [
        'title' => 'Müüja Uus tellimus',
        'sample' => "Saite uue 200-dollarise tellimuse. <br>Tellimus: <b>SM-870</b> <b>Tarnija nimi</b>.<br>✅ Toode A| SKU100001 |1x<br>✅ Toode B| SKU100002 |1x",
        'body' => "Saite uue :param2 tellimuse.\nTellimus: :param1 :param3 jaoks.\n:param4",
        'icon' => 'vitriin',
        'description' => 'Saatke müüjale sõnum, et teavitada teda uuest tellimusest.',
    ],








    'shop-login' => [
        'title' => 'Sisselogimise kinnituskood',
        'sample' => "Teie sisselogimiskood on: <b>123456</b><br><b>Teie poe nimi</b><br>Selldone",
        'body' => "Teie sisselogimiskood on: :param1\n:param2\nSelldone",
        'icon' => 'sisse logida',
        'description' => 'Poodi sisselogimiseks saada kliendile sisselogimiskood.',

    ],

    'user-login' => [
        'title' => 'Sisselogimise õnnestumise teade',
        'sample' => "Lugupeetud <b>Name</b>,<br>Olete oma kontole sisse loginud <b>iPhone 165.250.300.1</b> aadressil <b>5/8/2021 9:14AMQQQQ007QQQ00.",
        'body' => "Kallis :param1!\nOlete oma kontole sisse loginud :param2 aadressil :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Saatke sõnum pärast kliendi sisselogimist poodi.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokaado uus tellimus esitatud, saatke ostjale',
        'sample' => "<b>Teie poe nimi</b><br>Kallis <b>Teie nimi</b>,<br>Saime teie tellimuse kätte ja vaatame seda üle.<br>Tellimisnumber: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nLugupeetud :param1!\nSaime teie tellimuse kätte ja vaatame seda üle.\nTellimuse nr: :param2\nSelldone",
        'icon' => 'fakti_kontroll',
        'description' => 'Pärast Avokaado tellimuse esitamist saada kliendile sõnum.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokaado saada uus tellimus saata müüjale',
        'sample' => "Saite avokaado tellimuse:<br>Pood: <b>Teie poe nimi</b><br>Ostja: <b>Ostja nimi</b><br>Tell: <b>AVO-246</b><br>Selldone",
        'body' => "Saite avokaado tellimuse:\nKauplus: :param1\nOstja: :param2\nTellimus: :param3\nSelldone",
        'icon' => 'kuidas_registreerida',
        'description' => 'Saada poe omanikule sõnum, et teavitada teda uue Avokaado tellimuse saamisest.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokaado tellimus on tasumiseks valmis',
        'sample' => "<b>Teie poe nimi</b><br>Teie tellimus on kinnitatud ja selle saab tasuda järgmise lingi kaudu.<br>Tellimisnumber: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nTeie tellimus on kinnitatud ja selle saab tasuda alloleva lingi kaudu.\nTellimuse nr: :param2\nLink: :param1\nSelldone",
        'icon' => 'kviitung',
        'description' => 'Saatke kliendile makselingiga sõnum pärast seda, kui müüja on hinna määranud ja avokaado tellimuse kinnitanud.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Tellimus saatmiseks valmis',
        'sample' => "Tere, <b>Alex</b>, head uudised, teie tellimus on nüüd saatmiseks valmis. <br>Tell: <b>SM-123</b>",
        'body' => "Tere, :param4, head uudised, teie tellimus on nüüd saatmiseks valmis.\nTellimus: :param1",
        'icon' => 'kohalik_saatmine',
        'description' => 'Saatke kliendile teade, et tema tellimus on saatmiseks valmis.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Tellimus on järeletulemiseks valmis',
        'sample' => "Tere Alex, head uudised! Teie tellimus on nüüd vastuvõtmiseks valmis. <br>Tell: <b>SM-123</b>",
        'body' => "Tere, :param4, head uudised, teie tellimus on nüüd vastuvõtmiseks valmis.\nTellimus: :param1",
        'icon' => 'share_location',
        'description' => 'Saatke kliendile teade, et tema tellimus on kättesaamiseks valmis.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Müüja tellimus on saatmiseks valmis',
        'sample' => "Tere, <b>Alex</b>, head uudised, teie tellimus on nüüd saatmiseks valmis. <br>Tell: <b>SM-123</b>",
        'body' => "Tere, :param4, head uudised, teie tellimus on nüüd saatmiseks valmis.\nTellimus: :param1",
        'icon' => 'kohalik_saatmine',
        'description' => 'Saatke kliendile teade, et tema tellimus on saatmiseks valmis. Just turul otse kohaletoimetamise režiimiga ja kohaletoimetamise tüüp ei ole järeletulemine.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Müüja tellimus valmis järeletulemiseks',
        'sample' => "Tere Alex, head uudised! Teie tellimus on nüüd vastuvõtmiseks valmis. <br>Tell: <b>SM-123</b>",
        'body' => "Tere, :param4, head uudised, teie tellimus on nüüd vastuvõtmiseks valmis.\nTellimus: :param1",
        'icon' => 'share_location',
        'description' => 'Saatke kliendile teade, et tema tellimus on kättesaamiseks valmis. Just turul otse kohaletoimetamise režiimiga ja kohaletoimetamise tüüp on Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Tellimuse esemete kinnitus',
        'sample' => "Tere Alex, vaatasime teie tellimuse üle. Siin on teie kaupade kinnitusolek: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Tere, :param4, oleme teie tellimuse üle vaadanud. Siin on teie üksuste kinnitusolek:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Teatab klienti tema tellimuses olevate kaupade kohta, mille müüja on vastu võtnud või tagasi lükanud.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Tarnija tellimuse esemete kinnitus',
        'sample' => "Tere Alex, vaatasime teie tellimuse üle. Siin on teie kaupade kinnitusolek: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Tere, :param4, oleme teie tellimuse üle vaadanud. Siin on teie üksuste kinnitusolek:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Teavitab klienti tema tellimuses olevatest kaupadest, mille müüja on vastu võtnud või tagasi lükanud.',
    ],



];
