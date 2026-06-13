<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Bolt",
    'request' => "kérésére",
    'stage' => "Állapot",
    'budget' => "költségvetést",
    'contact' => "Kapcsolatfelvétel",
    'name' => "Név",
    'email' => "E-mail",
    'user' => "Felhasználó",
    'copy' => "Másolás",
    'important' => "Fontos",
    'faq' => "FAQ",

    'select_shop' => "Válassza a Shop lehetőséget",
    'loading' => "Betöltés",

    'add_comment' => "Megjegyzés hozzáadása",
    'add_comment_sub' => "Ossza meg velünk gondolatait",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "A „Regisztráció” gombra kattintva elfogadja a :name <a href='/terms' target='_blank'>Q</a> és a <a href='/privacy' target='_blank'>Adatvédelmi szabályzatot</a>. Ön beleegyezik abba, hogy telefonhívásokat és SMS üzeneteket fogadjon a :name-tól rendelési frissítések és/vagy marketing célból. Az üzenetek gyakorisága az Ön tevékenységétől függ. Leiratkozhat a <b>STOP</b> üzenettel a <b>86753</b> számra. Üzenet- és adatátviteli díjak vonatkozhatnak. Tiszteletben tartjuk az emberek magánéletét, és soha nem adjuk el az Ön adatait, és nem használjuk fel hirdetésekre. Ha további információra van szüksége, forduljon hozzánk.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Nincs beállítva. További információra van szükségem.',
        'start' => "Most kezdem a vállalkozásomat.",
        'online' => "Vállalkozásom van, és szeretném online hozni.",
        'extend' => "Az online boltomon dolgozom.",
        'pos' => "A Selldone POS-t a fizikai üzletemben kívánom használni.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Banki átutalás",
            'description' => "Manuálisan utaljon át pénzt a szállító számlájára.",
        ],
    ],

];
