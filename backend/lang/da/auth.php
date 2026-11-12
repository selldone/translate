<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Disse legitimationsoplysninger stemmer ikke overens med vores optegnelser.',
    'throttle' => 'For mange loginforsøg. Prøv venligst igen om :seconds sekunder.',


    'title_shop' => 'Log ind på :name',
    'title_app' => 'Applikationsadgang for :name',
    'login_message' => 'Anmod om adgang til din konto.',
    'scopes_title' => 'Denne app vil have adgang til følgende omfang',
    'accept' => 'Bekræfte',
    'reject' => 'Afvise',


    'login_incorrect_password' => 'Ugyldigt brugernavn eller kodeord.',


    'reset_2fa_title' => 'Nulstil to-trins login-anmodning',
    'go_main_page' => 'Gå til hjemmesiden',

    'signing_in' => 'Logger ind...',


    'erp' => [
        'message' => "● Vælg en butik for at fortsætte. Hvis du har brug for en ny butik, skal du oprette den først og oprette forbindelse igen.<br>● Sørg for, at du kender den software, du opretter forbindelse til, eller kontakt udbyderen for at få hjælp.",
    ],
    'token-display' => [
        'message' => "Vi oprettede dette token for at få adgang til :shop til :software baseret på din anmodning. Opbevar det venligst og del det ikke med nogen. Hvis du mener, at dit token er blevet kompromitteret, kan du til enhver tid tilbagekalde det.",
        'scopes-message' => "Dette er en token, der har adgang til butikken med dens omfang",
        'manage-tokens-action' => 'Administrer tokens',
        'manage-tokens-message' => "Du kan til enhver tid tilbagekalde dette token her."
    ]


,

    'password' => 'Den angivne adgangskode er forkert.',
];
