<?php 

 return [
     "shop-order-payment" => [
     "title" => "Zaakceptuj płatność",
     "sample" => "Twoja płatność 267 $ została pomyślnie uregulowana.<br> Zamówienie: SM-425<br> Dzięki, <b>Twoja nazwa sklepu</b> .<br> Sprzedane",
     "body" => "Twoja płatność :param2 została pomyślnie rozliczona. Zamówienie: :param1 Dzięki, :param3. Sprzedane",
     "description" => "Wyślij wiadomość do klienta sklepu, aby poinformować go o pomyślnej płatności.",
],
     "shop-order-payment-admin" => [
     "title" => "Zaakceptuj płatność",
     "sample" => "Nowa płatność 267 $ została pomyślnie rozliczona.<br> Zamówienie: SM-425<br> Dzięki, <b>Twoja nazwa sklepu</b> .<br> Sprzedane",
     "body" => "Nowa płatność :param2 pomyślnie rozliczona. Zamówienie: :param1 Dzięki, :param3. Sprzedane",
     "description" => "Wyślij wiadomość do właściciela sklepu, aby poinformować go o pomyślnej płatności.",
],
     "vendor-new-order" => [
     "title" => "Nowe zamówienie dostawcy",
     "sample" => "Otrzymałeś nowe zamówienie na kwotę 200 USD.<br> Zamówienie: SM-870 od <b>Nazwa sprzedawcy</b> .",
     "body" => "Otrzymałeś nowe zamówienie :param2. Zamówienie: :param1 dla :param3.",
     "description" => "Wyślij wiadomość do sprzedawcy, aby poinformować go o nowym zamówieniu.",
],
     "shop-login" => [
     "title" => "Kod weryfikacyjny logowania",
     "sample" => "Twój kod logowania to: <b>123456</b><br> <b>Twoja nazwa sklepu</b><br> Sprzedane",
     "body" => "Twój kod logowania to: :param1 :param2 Sprzedane",
     "description" => "Wyślij klientowi kod logowania, aby mógł zalogować się do sklepu.",
],
     "user-login" => [
     "title" => "Wiadomość o pomyślnym zalogowaniu",
     "sample" => "Drogie <b>imię</b> ,<br> Zalogowałeś się na swoje konto przez <b>iPhone'a 165.250.300.1</b> o <b>5/8/2021 9:14 AM</b> .<br> Sprzedane",
     "body" => "Drogi :param1, Zalogowałeś się na swoje konto przez :param2 pod adresem :param3. Sprzedane",
     "description" => "Wyślij wiadomość po zalogowaniu się klienta do sklepu.",
],
     "avocado-order-submit" => [
     "title" => "Nowe zamówienie złożone awokado wyślij do kupującego",
     "sample" => "<b>Twoja nazwa sklepu</b><br> Drogi <b>Twoje imię</b> ,<br> Otrzymaliśmy Twoje zamówienie i je sprawdzamy.<br> Nr zamówienia: <b>AVO-246</b><br> Sprzedane",
     "body" => ":param3 Szanowni Państwo :param1, Otrzymaliśmy Twoje zamówienie i sprawdzamy je. Zamówienie nr:: param2 Sprzedane",
     "description" => "Wyślij wiadomość do klienta po złożeniu zamówienia na awokado.",
],
     "avocado-order-submit-seller" => [
     "title" => "Awokado odbierz nowe zamówienie wyślij do sprzedawcy",
     "sample" => "Otrzymałeś zamówienie na awokado:<br> Sklep: <b>Twoja nazwa sklepu!</b><br> Kupujący: <b>nazwa kupującego</b> !<br> Zamówienie: <b>AVO-246</b><br> Sprzedane",
     "body" => "Otrzymałeś zamówienie na awokado: Sklep: :param1 Kupujący: :param2 Zamówienie: :param3 Sprzedane",
     "description" => "Wyślij wiadomość do właściciela sklepu, aby poinformować go o otrzymaniu nowego zamówienia na awokado.",
],
     "avocado-ready-to-pay" => [
     "title" => "Zamówienie awokado gotowe do zapłaty",
     "sample" => "<b>Twoja nazwa sklepu</b><br> Twoje zamówienie zostało potwierdzone i można je opłacić, klikając poniższy link.<br> Nr zamówienia: <b>AVO-246</b><br> Link: <b>https://twoja-domena/awokado</b><br> Sprzedane",
     "body" => ":param3 Twoje zamówienie zostało potwierdzone i można je opłacić, klikając poniższy link. Numer zamówienia: :param2 Link: :param1 Sprzedane",
     "description" => "Po ustaleniu przez sprzedawcę ceny i potwierdzeniu zamówienia awokado, wyślij klientowi wiadomość zawierającą link do płatności.",
],
];