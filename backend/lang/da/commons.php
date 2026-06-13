<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Butik",
    'request' => "anmodning",
    'stage' => "Status",
    'budget' => "budget",
    'contact' => "Kontakt",
    'name' => "Navn",
    'email' => "E-mail",
    'user' => "Bruger",
    'copy' => "Kopiér",
    'important' => "Vigtigt",
    'faq' => "FAQ",

    'select_shop' => "Vælg Butik",
    'loading' => "Indlæser",

    'add_comment' => "Tilføj kommentar",
    'add_comment_sub' => "Del dine tanker med os",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "Ved at klikke på 'Tilmeld' accepterer du :name <a href='/terms' target='_blank'>Vilkår for brug</a> og <a href='/privacy' target='_blank'>Privatlivspolitik</a>. Du giver samtykke til at modtage telefonopkald og SMS beskeder fra :name til ordreopdateringer og/eller marketingformål. Beskedfrekvens afhænger af din aktivitet. Du kan framelde dig ved at sende en sms til <b>STOP</b> til <b>86753</b>. Besked- og datatakster kan være gældende. Vi respekterer folks privatliv og sælger aldrig dine data eller bruger dem til annoncer. Hvis du har brug for yderligere information, så kontakt os.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Ikke indstillet. Jeg har brug for flere oplysninger.',
        'start' => "Jeg er lige startet min virksomhed.",
        'online' => "Jeg har en virksomhed og vil gerne bringe den online.",
        'extend' => "Jeg arbejder på min netbutik.",
        'pos' => "Jeg agter at bruge Selldone POS i min fysiske butik.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Bankoverførsel",
            'description' => "Overfør manuelt penge til leverandørens konto.",
        ],
    ],

];
