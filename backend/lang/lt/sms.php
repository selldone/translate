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
        'title' => 'Priimti mokėjimą',
        'sample' => "Jūsų 267 USD mokėjimas buvo sėkmingai apmokėtas.<br>QUsakymas: SM-425<br>QQ<b>Jūsų parduotuvės pavadinimas</b>.<br>Selldone",
        'body' => "Jūsų :param2 mokėjimas buvo sėkmingai apmokėtas.\nUžsakymas: :param1\nAčiū, :param3.\nSelldone",
        'icon' => 'mokėjimas',
        'description' => 'Nusiųskite žinutę parduotuvės klientui, kad praneštumėte apie sėkmingą apmokėjimą.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Priimti mokėjimą',
        'sample' => "Naujas 267 USD mokėjimas buvo sėkmingai apmokėtas.<br>QUsakymas: SM-425<br>QQ<b>Jūsų parduotuvės pavadinimas</b>.<br>Selldone",
        'body' => "New :param2 payment was settled successfully.\nUžsakymas: :param1\nAčiū, :param3.\nSelldone",
        'icon' => 'mokėjimas',
        'description' => 'Nusiųskite žinutę parduotuvės savininkui, kad praneštumėte apie sėkmingą apmokėjimą.',

    ],

    'vendor-new-order' => [
        'title' => 'Pardavėjas naujas užsakymas',
        'sample' => "Gavote naują 200 USD užsakymą.<br>Užsakymas: <b>SM-870</b>, skirtas <b>Pardavėjo pavadinimas</b>.<br>✅ Produktas A| SKU100001 |1x<br>✅ Produktas B| SKU100002 |1x",
        'body' => "Gavote naują :param2 užsakymą.\nUžsakymas: :param1 :param3.\n:param4",
        'icon' => 'vitrinos',
        'description' => 'Nusiųskite pranešimą pardavėjui, kad praneštumėte apie naują užsakymą.',
    ],








    'shop-login' => [
        'title' => 'Prisijungimo patvirtinimo kodas',
        'sample' => "Jūsų prisijungimo kodas yra: <b>123456</b><br><b>Jūsų parduotuvės pavadinimas</b><br>Selldone",
        'body' => "Jūsų prisijungimo kodas yra: :param1\n:param2\nSelldone",
        'icon' => 'prisijungti',
        'description' => 'Išsiųskite prisijungimo kodą klientui, kad jis prisijungtų prie parduotuvės.',

    ],

    'user-login' => [
        'title' => 'Sėkmingo prisijungimo pranešimas',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Gerbiamas :param1,\nJūs prisijungėte prie savo paskyros naudodami :param2 adresu :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Klientui prisijungus prie parduotuvės išsiųskite žinutę.',

    ],

    'avocado-order-submit' => [
        'title' => 'Pateiktas naujas avokado užsakymas, išsiųsti pirkėjui',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nGerbiamas :param1,\nGavome jūsų užsakymą ir jį peržiūrime.\nUžsakymo numeris: :param2\nSelldone",
        'icon' => 'faktų_tikrinimas',
        'description' => 'Pateikę avokado užsakymą, išsiųskite klientui žinutę.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokadas gauti naują užsakymą, išsiųsti pardavėjui',
        'sample' => "Gavote avokado užsakymą:<br>Parduotuvė: <b>Jūsų parduotuvės pavadinimas</b><br>Pirkėjas: <b>Pirkėjo pavadinimas</b><br>Užsakymas: <b>AVO-246</b><br>Selldone",
        'body' => "Gavote avokado užsakymą:\nParduotuvė: :param1\nPirkėjas: :param2\nUžsakymas: :param3\nSelldone",
        'icon' => 'kaip_reg',
        'description' => 'Nusiųskite žinutę parduotuvės savininkui, kad praneštumėte apie naujo avokado užsakymo gavimą.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokadų užsakymas paruoštas sumokėti',
        'sample' => "<b>Jūsų parduotuvės pavadinimas</b><br>Jūsų užsakymas buvo patvirtintas ir gali būti apmokėtas naudojant šią nuorodą.<br>QUžsakymo Nr.: <b>AVO-246</b><br>Nuoroda: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nJūsų užsakymas patvirtintas ir jį galite apmokėti spustelėję šią nuorodą.\nUžsakymo numeris: :param2\nNuoroda: :param1\nSelldone",
        'icon' => 'kvitas',
        'description' => 'Pardavėjui nustačius kainą ir patvirtinus avokado užsakymą, klientui išsiųskite pranešimą su mokėjimo nuoroda.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Užsakymas paruoštas siuntimui',
        'sample' => "Sveiki, <b>Alex</b>, geros naujienos, jūsų užsakymas dabar paruoštas išsiųsti. <br>Užsakymas: <b>SM-123</b>",
        'body' => "Sveiki, :param4, geros naujienos, jūsų užsakymas dabar paruoštas išsiųsti.\nUžsakymas: :param1",
        'icon' => 'vietinis_gabenimas',
        'description' => 'Nusiųskite klientui pranešimą, kad jo užsakymas paruoštas išsiųsti.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Užsakymas paruoštas atsiimti',
        'sample' => "Sveiki, Aleksai, geros naujienos, jūsų užsakymas jau paruoštas atsiimti.<br>Q<b>SM-123</b>",
        'body' => "Sveiki, :param4, geros naujienos, jūsų užsakymas paruoštas atsiimti.\nUžsakymas: :param1",
        'icon' => 'share_location',
        'description' => 'Nusiųskite klientui pranešimą, kad jo užsakymas paruoštas atsiimti.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pardavėjo užsakymas paruoštas siuntimui',
        'sample' => "Sveiki, <b>Alex</b>, geros naujienos, jūsų užsakymas dabar paruoštas išsiųsti. <br>Užsakymas: <b>SM-123</b>",
        'body' => "Sveiki, :param4, geros naujienos, jūsų užsakymas dabar paruoštas išsiųsti.\nUžsakymas: :param1",
        'icon' => 'vietinis_gabenimas',
        'description' => 'Nusiųskite klientui pranešimą, kad jo užsakymas paruoštas išsiųsti. Tiesiog prekyvietėje su tiesioginio pristatymo režimu, o pristatymo tipas nėra atsiėmimas.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pardavėjo užsakymas paruoštas atsiimti',
        'sample' => "Sveiki, Aleksai, geros naujienos, jūsų užsakymas jau paruoštas atsiimti.<br>Q<b>SM-123</b>",
        'body' => "Sveiki, :param4, geros naujienos, jūsų užsakymas paruoštas atsiimti.\nUžsakymas: :param1",
        'icon' => 'share_location',
        'description' => 'Send a message to the customer to inform them that their order is ready to be picked up. Tiesiogiai prekyvietėje su tiesioginio pristatymo režimu, o pristatymo tipas yra atsiėmimas.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Prekių užsakymo patvirtinimas',
        'sample' => "Sveiki, Aleksai, peržiūrėjome jūsų užsakymą. Štai jūsų prekių patvirtinimo būsena: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Sveiki, :param4, peržiūrėjome jūsų užsakymą. Štai jūsų prekių patvirtinimo būsena:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Informuoja klientą apie jo užsakyme esančias prekes, kurias pardavėjas priėmė arba atmetė.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Pardavėjo užsakymo prekių patvirtinimas',
        'sample' => "Sveiki, Aleksai, peržiūrėjome jūsų užsakymą. Štai jūsų prekių patvirtinimo būsena: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Sveiki, :param4, peržiūrėjome jūsų užsakymą. Štai jūsų prekių patvirtinimo būsena:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Informuoja klientą apie jo užsakyme esančias prekes, kurias pardavėjas priėmė arba atmetė.',
    ],



];
