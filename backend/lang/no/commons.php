<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Handle",
    'request' => "forespørsel",
    'stage' => "Status",
    'budget' => "budsjett",
    'contact' => "Kontakt",
    'name' => "Navn",
    'email' => "E-post",
    'user' => "Bruker",
    'copy' => "Kopier",
    'important' => "Viktig",
    'faq' => "FAQ",

    'select_shop' => "Velg Butikk",
    'loading' => "Laster",

    'add_comment' => "Legg til kommentar",
    'add_comment_sub' => "Del dine tanker med oss",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "Ved å klikke \"Registrer deg\", godtar du :name <a href='/terms' target='_blank'>Vilkår for bruk</a> og <a href='/privacy' target='_blank'>Personvernregler</a>. Du samtykker i å motta telefonsamtaler og SMS-meldinger fra :name for bestillingsoppdateringer og/eller markedsføringsformål. Meldingsfrekvensen avhenger av aktiviteten din. Du kan melde deg av ved å sende SMS til <b>STOP</b> til <b>86753</b>. Meldings- og datatakster kan gjelde. Vi respekterer folks personvern og selger aldri dataene dine eller bruker dem til annonser. Hvis du trenger ytterligere informasjon, kontakt oss.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Ikke satt. Jeg trenger mer informasjon.',
        'start' => "Jeg har akkurat startet virksomheten min.",
        'online' => "Jeg har en bedrift og ønsker å bringe den på nettet.",
        'extend' => "Jeg jobber med nettbutikken min.",
        'pos' => "Jeg har tenkt å bruke Selldone POS i min fysiske butikk.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Bankoverføring",
            'description' => "Overfør penger manuelt til leverandørens konto.",
        ],
    ],

];
