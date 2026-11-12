<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Sklep",
    'request' => "prośba",
    'stage' => "Stan",
    'budget' => "budżet",
    'contact' => "Kontakt",
    'name' => "Imię",
    'email' => "E-mail",
    'user' => "Użytkownik",
    'copy' => "Kopiuj",
    'important' => "Ważne",
    'faq' => "FAQ",

    'select_shop' => "Wybierz opcję Sklep",
    'loading' => "Ładowanie",

    'add_comment' => "Dodaj komentarz",
    'add_comment_sub' => "Podziel się z nami swoimi przemyśleniami",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "Klikając „Zarejestruj się”, wyrażasz zgodę na :name <a href='/terms' target='_blank'>Warunki użytkowania</a> i <a href='/privacy' target='_blank'>Politykę prywatności</a>. Wyrażasz zgodę na otrzymywanie połączeń telefonicznych i wiadomości SMS od :name w celu aktualizacji zamówień i/lub celów marketingowych. Częstotliwość wiadomości zależy od Twojej aktywności. Możesz zrezygnować, wysyłając SMS-a o treści <b>STOP</b> na numer <b>86753</b>. Mogą obowiązywać stawki za wiadomości i transmisję danych. Szanujemy prywatność innych osób i nigdy nie sprzedajemy Twoich danych ani nie wykorzystujemy ich do celów reklamowych. Jeśli potrzebujesz dodatkowych informacji, skontaktuj się z nami.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Nie ustawiono. Potrzebuję więcej informacji.',
        'start' => "Dopiero zaczynam swoją działalność.",
        'online' => "Mam firmę i chcę ją przenieść do Internetu.",
        'extend' => "Pracuję nad swoim sklepem internetowym.",
        'pos' => "Zamierzam używać Selldone POS w moim sklepie fizycznym.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Przelew bankowy",
            'description' => "Ręcznie przelej środki na konto dostawcy.",
        ],
    ],

];
