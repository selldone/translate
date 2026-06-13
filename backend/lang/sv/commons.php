<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Handla",
    'request' => "begäran",
    'stage' => "Status",
    'budget' => "budget",
    'contact' => "Kontakta",
    'name' => "Namn",
    'email' => "E-post",
    'user' => "Användare",
    'copy' => "Kopiera",
    'important' => "Viktigt",
    'faq' => "FAQ",

    'select_shop' => "Välj Butik",
    'loading' => "Laddar",

    'add_comment' => "Lägg till kommentar",
    'add_comment_sub' => "Dela dina tankar med oss",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "Genom att klicka på \"Registrera dig\" godkänner du :name <a href='/terms' target='_blank'> Användarvillkor</a> och <a href='/privacy' target='_blank'>Sekretesspolicy</a>. Du samtycker till att ta emot telefonsamtal och SMS-meddelanden från :name för orderuppdateringar och/eller marknadsföringsändamål. Meddelandefrekvensen beror på din aktivitet. Du kan välja bort det genom att smsa <b>STOP</b> till <b>86753</b>. Meddelande- och datahastigheter kan tillkomma. Vi respekterar människors integritet och säljer aldrig din data eller använder den för annonser. Om du behöver ytterligare information, kontakta oss.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Inte inställt. Jag behöver mer information.',
        'start' => "Jag har precis startat mitt företag.",
        'online' => "Jag har ett företag och vill göra det online.",
        'extend' => "Jag jobbar på min webbutik.",
        'pos' => "Jag tänker använda Selldone POS i min fysiska butik.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Banköverföring",
            'description' => "Överför pengar manuellt till säljarens konto.",
        ],
    ],

];
