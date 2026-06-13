<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Botiga",
    'request' => "petició",
    'stage' => "Estat",
    'budget' => "pressupost",
    'contact' => "Contacte",
    'name' => "Nom",
    'email' => "Correu electrònic",
    'user' => "Usuari",
    'copy' => "Còpia",
    'important' => "Important",
    'faq' => "FAQ",

    'select_shop' => "Seleccioneu Botiga",
    'loading' => "Carregant",

    'add_comment' => "Afegeix un comentari",
    'add_comment_sub' => "Comparteix els teus pensaments amb nosaltres",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "En fer clic a \"Registreu-vos\", accepteu les :name <a href='/terms' target='_blank'>Condicions d'ús</a> i <a href='/privacy' target='_blank'>Política de privadesa</a>. Accepteu rebre trucades telefòniques i missatges SMS de :name per a actualitzacions de comandes i/o finalitats de màrqueting. La freqüència dels missatges depèn de la vostra activitat. Podeu desactivar-vos enviant un missatge de text <b>STOP</b> a <b>86753</b>. Es poden aplicar tarifes de missatges i dades. Respectem la privadesa de les persones i mai venem les vostres dades ni les utilitzem per a anuncis. Si necessiteu informació addicional, poseu-vos en contacte amb nosaltres.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'No configurat. Necessito més informació.',
        'start' => "Acabo de començar el meu negoci.",
        'online' => "Tinc un negoci i vull posar-lo en línia.",
        'extend' => "Treballo a la meva botiga en línia.",
        'pos' => "Tinc la intenció d'utilitzar Selldone POS a la meva botiga física.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Transferència bancària",
            'description' => "Transfereix fons manualment al compte del venedor.",
        ],
    ],

];
