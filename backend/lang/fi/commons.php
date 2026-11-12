<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Kauppa",
    'request' => "pyytää",
    'stage' => "Tila",
    'budget' => "budjetti",
    'contact' => "Ota yhteyttä",
    'name' => "Nimi",
    'email' => "Sähköposti",
    'user' => "Käyttäjä",
    'copy' => "Kopioi",
    'important' => "Tärkeää",
    'faq' => "FAQ",

    'select_shop' => "Valitse Kauppa",
    'loading' => "Ladataan",

    'add_comment' => "Lisää kommentti",
    'add_comment_sub' => "Jaa ajatuksesi kanssamme",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "Napsauttamalla \"Rekisteröidy\" hyväksyt :name <a href='/terms' target='_blank'></a>- ja <a href='/privacy' target='_blank'>-tietosuojakäytännön</a>. Suostut vastaanottamaan puheluita ja SMS-viestejä :name tilauspäivityksiä ja/tai markkinointitarkoituksiin. Viestitiheys riippuu aktiivisuudestasi. Voit kieltäytyä lähettämällä tekstiviestillä <b>STOP</b> numeroon <b>86753</b>. Viesti- ja tiedonsiirtomaksuja saatetaan periä. Kunnioitamme ihmisten yksityisyyttä emmekä koskaan myy tietojasi tai käytä niitä mainoksiin. Jos tarvitset lisätietoja, ota meihin yhteyttä.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Ei asetettu. Tarvitsen lisätietoja.',
        'start' => "Olen juuri aloittamassa yritystäni.",
        'online' => "Minulla on yritys ja haluan tuoda sen verkkoon.",
        'extend' => "Työskentelen verkkokaupassani.",
        'pos' => "Aion käyttää Selldone POSia fyysisessä kaupassani.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Pankkisiirto",
            'description' => "Siirrä varat manuaalisesti myyjän tilille.",
        ],
    ],

];
