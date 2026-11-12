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
        'title' => 'Zaakceptuj płatność',
        'sample' => "Twoja płatność w wysokości 267 USD została pomyślnie rozliczona.<br>Zamówienie: SM-425<br>Dzięki, <b>Nazwa Twojego sklepu</b>.<br>Selldone",
        'body' => "Twoja płatność :param2 została pomyślnie rozliczona.\nZamówienie: :param1\nDziękuję, :param3.\nSelldone",
        'icon' => 'płatność',
        'description' => 'Wyślij wiadomość do klienta sklepu, aby poinformować go o pomyślnej płatności.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Zaakceptuj płatność',
        'sample' => "Nowa płatność w wysokości 267 USD została pomyślnie rozliczona.<br>Zamówienie: SM-425<br>Dzięki, <b>Nazwa Twojego sklepu</b>.<br>Selldone",
        'body' => "Nowa płatność :param2 została pomyślnie rozliczona.\nZamówienie: :param1\nDziękuję, :param3.\nSelldone",
        'icon' => 'płatność',
        'description' => 'Wyślij wiadomość do właściciela sklepu, aby poinformować go o pomyślnej płatności.',

    ],

    'vendor-new-order' => [
        'title' => 'Nowe zamówienie dostawcy',
        'sample' => "Otrzymałeś nowe zamówienie o wartości 200 USD.<br>Zamówienie: <b>SM-870</b> dla <b>Nazwa dostawcy</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x",
        'body' => "Otrzymałeś nowe zamówienie :param2.\nZamówienie: :param1 dla :param3.\n:param4",
        'icon' => 'witryna sklepowa',
        'description' => 'Wyślij wiadomość do sprzedawcy, aby poinformować go o nowym zamówieniu.',
    ],








    'shop-login' => [
        'title' => 'Kod weryfikacyjny logowania',
        'sample' => "Twój kod logowania to: <b>123456</b><br><b>Nazwa Twojego sklepu</b><br>Selldone",
        'body' => "Twój kod logowania to: :param1\n:param2\nSelldone",
        'icon' => 'zaloguj się',
        'description' => 'Wyślij klientowi kod logowania, aby mógł zalogować się do sklepu.',

    ],

    'user-login' => [
        'title' => 'Wiadomość o pomyślnym zalogowaniu',
        'sample' => "Drogi <b>Name</b>,<br>Zalogowałeś się na swoje konto przez <b>iPhone 165.250.300.1</b> o godzinie <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Drogi :param1,\nZalogowałeś się na swoje konto przez :param2 pod adresem :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Wyślij wiadomość po zalogowaniu się klienta do sklepu.',

    ],

    'avocado-order-submit' => [
        'title' => 'Nowe zamówienie złożone awokado wyślij do kupującego',
        'sample' => "<b>Nazwa Twojego sklepu</b><br>Drogi <b>Twoje imię</b>,<br>Otrzymaliśmy Twoje zamówienie i sprawdzamy je.<br>Nr zamówienia: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nDrogi :param1,\nOtrzymaliśmy Twoje zamówienie i sprawdzamy je.\nNr zamówienia: :param2\nSelldone",
        'icon' => 'fakt_check',
        'description' => 'Wyślij wiadomość do klienta po złożeniu zamówienia na awokado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Awokado odbierz nowe zamówienie wyślij do sprzedawcy',
        'sample' => "Otrzymałeś zamówienie na awokado: <br>Store: <b>Nazwa Twojego sklepu</b><br>Kupujący: <b>Nazwa kupującego</b><br>Zamówienie: <b>AVO-246</b><br>Selldone",
        'body' => "Otrzymałeś zamówienie na awokado:\nSklep: :param1\nKupujący: :param2\nZamówienie: :param3\nSelldone",
        'icon' => 'jak_reg',
        'description' => 'Wyślij wiadomość do właściciela sklepu, aby poinformować go o otrzymaniu nowego zamówienia na awokado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Zamówienie awokado gotowe do zapłaty',
        'sample' => "<b>Nazwa Twojego sklepu</b><br>Twoje zamówienie zostało potwierdzone i można opłacić je za pomocą poniższego linku.<br>Numer zamówienia: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nTwoje zamówienie zostało potwierdzone i możesz opłacić je za pomocą poniższego linku.\nNr zamówienia: :param2\nLink: :param1\nSelldone",
        'icon' => 'odbiór',
        'description' => 'Po ustaleniu przez sprzedawcę ceny i potwierdzeniu zamówienia awokado, wyślij klientowi wiadomość zawierającą link do płatności.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Zamówienie gotowe do wysyłki',
        'sample' => "Cześć <b>Alex</b>, dobre wieści, Twoje zamówienie jest już gotowe do wysyłki.<br>Zamówienie: <b>SM-123</b>",
        'body' => "Cześć :param4, dobre wieści, Twoje zamówienie jest teraz gotowe do wysyłki.\nZamówienie: :param1",
        'icon' => 'lokalna_wysyłka',
        'description' => 'Wyślij wiadomość do klienta, aby poinformować go, że jego zamówienie jest gotowe do wysyłki.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Zamówienie gotowe do odbioru',
        'sample' => "Cześć Alex, dobre wieści, Twoje zamówienie jest już gotowe do odbioru.<br>Zamówienie: <b>SM-123</b>",
        'body' => "Cześć :param4, dobre wieści, Twoje zamówienie jest teraz gotowe do odbioru.\nZamówienie: :param1",
        'icon' => 'lokalizacja_udostępnienia',
        'description' => 'Wyślij wiadomość do klienta, aby poinformować go, że jego zamówienie jest gotowe do odbioru.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Zamówienie dostawcy gotowe do wysyłki',
        'sample' => "Cześć <b>Alex</b>, dobre wieści, Twoje zamówienie jest już gotowe do wysyłki.<br>Zamówienie: <b>SM-123</b>",
        'body' => "Cześć :param4, dobre wieści, Twoje zamówienie jest teraz gotowe do wysyłki.\nZamówienie: :param1",
        'icon' => 'lokalna_wysyłka',
        'description' => 'Wyślij wiadomość do klienta, aby poinformować go, że jego zamówienie jest gotowe do wysyłki. Tylko na rynku z trybem wysyłki bezpośredniej i typem dostawy nie jest odbiór.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Zamówienie dostawcy gotowe do odbioru',
        'sample' => "Cześć Alex, dobre wieści, Twoje zamówienie jest już gotowe do odbioru.<br>Zamówienie: <b>SM-123</b>",
        'body' => "Cześć :param4, dobre wieści, Twoje zamówienie jest teraz gotowe do odbioru.\nZamówienie: :param1",
        'icon' => 'lokalizacja_udostępnienia',
        'description' => 'Wyślij wiadomość do klienta, aby poinformować go, że jego zamówienie jest gotowe do odbioru. Tylko na rynku z trybem wysyłki bezpośredniej i typem dostawy jest Odbiór.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Potwierdzenie pozycji zamówienia',
        'sample' => "Witaj Alex, sprawdziliśmy Twoje zamówienie. Oto status potwierdzenia Twoich produktów: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Witaj :param4, sprawdziliśmy Twoje zamówienie. Oto status potwierdzenia Twoich produktów:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'przydział_zakończony_w',
        'description' => 'Powiadamia klienta o pozycjach zamówienia, które zostały przyjęte lub odrzucone przez sprzedawcę.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Potwierdzenie pozycji zamówienia dostawcy',
        'sample' => "Witaj Alex, sprawdziliśmy Twoje zamówienie. Oto status potwierdzenia Twoich produktów: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Witaj :param4, sprawdziliśmy Twoje zamówienie. Oto status potwierdzenia Twoich produktów:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'przydział_zakończony_w',
        'description' => 'Powiadamia klienta o pozycjach zamówienia, które zostały przyjęte lub odrzucone przez sprzedawcę.',
    ],



];
