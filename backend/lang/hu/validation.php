<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Az :attribute-t el kell fogadni.',
    'active_url' => 'Az :attribute nem érvényes URL.',
    'after' => 'Az :attribute értéknek a :date utáni dátumnak kell lennie.',
    'after_or_equal' => 'Az :attribute dátumnak a :date után vagy azzal egyenlőnek kell lennie.',
    'alpha' => 'Az :attribute csak betűket tartalmazhat.',
    'alpha_dash' => 'Az :attribute csak betűket, számokat és kötőjeleket tartalmazhat.',
    'alpha_num' => 'Az :attribute csak betűket és számokat tartalmazhat.',
    'array' => 'Az :attribute-nek egy tömbnek kell lennie.',
    'before' => 'Az :attribute értéknek a :date előtti dátumnak kell lennie.',
    'before_or_equal' => 'Az :attribute dátumnak a :date előtt vagy azzal egyenlőnek kell lennie.',
    'between' => [
        'numeric' => 'Az :attribute értéknek :min és :max között kell lennie.',
        'file' => 'Az :attribute értéknek :min és :max kilobájt között kell lennie.',
        'string' => 'Az :attribute karakternek :min és :max karakterek között kell lennie.',
        'array' => 'Az :attribute elemnek :min és :max között kell lennie.',
    ],
    'boolean' => 'Az :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'confirmed' => 'Az :attribute megerősítés nem egyezik.',
    'date' => 'Az :attribute nem érvényes dátum.',
    'date_format' => 'Az :attribute nem egyezik a :format formátummal.',
    'different' => 'Az :attribute és az :other eltérőnek kell lennie.',
    'digits' => 'Az :attribute-nek :digits számjegynek kell lennie.',
    'digits_between' => 'Az :attribute értéknek :min és :max számjegyek között kell lennie.',
    'dimensions' => 'A :attribute képméretei érvénytelenek.',
    'distinct' => 'Az :attribute mezőnek ismétlődő értéke van.',
    'email' => 'Az :attribute értéknek érvényes e-mail címnek kell lennie.',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'file' => 'Az :attribute fájlnak kell lennie.',
    'filled' => 'Az :attribute mezőnek értékkel kell rendelkeznie.',
    'gt' => [
        'numeric' => 'Az :attribute értéknek nagyobbnak kell lennie, mint :value.',
        'file' => 'Az :attribute értéknek nagyobbnak kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute nagyobbnak kell lennie, mint :value karakter.',
        'array' => 'Az :attribute-nek több mint :value elemet kell tartalmaznia.',
    ],
    'gte' => [
        'numeric' => 'Az :attribute értéknek nagyobbnak vagy egyenlőnek kell lennie, mint :value.',
        'file' => 'Az :attribute értéknek nagyobbnak vagy egyenlőnek kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute értéknek nagyobbnak vagy egyenlőnek kell lennie, mint :value karakter.',
        'array' => 'Az :attribute-nek legalább :value elemekkel kell rendelkeznie.',
    ],
    'image' => 'Az :attribute képnek kell lennie.',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'in_array' => 'A :attribute mező nem létezik a :other-ban.',
    'integer' => 'Az :attribute-nek egész számnak kell lennie.',
    'ip' => 'Az :attribute értéknek érvényes IP-címnek kell lennie.',
    'ipv4' => 'Az :attribute értéknek érvényes IPv4-címnek kell lennie.',
    'ipv6' => 'Az :attribute értéknek érvényes IPv6-címnek kell lennie.',
    'json' => 'Az :attribute értéknek érvényes JSON-karakterláncnak kell lennie.',
    'lt' => [
        'numeric' => 'Az :attribute kisebbnek kell lennie, mint :value.',
        'file' => 'Az :attribute kisebbnek kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute kisebbnek kell lennie, mint :value karakter.',
        'array' => 'Az :attribute elemnek kevesebbnek kell lennie, mint :value.',
    ],
    'lte' => [
        'numeric' => 'Az :attribute értéknek kisebbnek vagy egyenlőnek kell lennie, mint :value.',
        'file' => 'Az :attribute értékének kisebbnek vagy egyenlőnek kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute karakternek kisebbnek vagy egyenlőnek kell lennie, mint :value karakter.',
        'array' => 'Az :attribute nem tartalmazhat több mint :value elemet.',
    ],
    'max' => [
        'numeric' => 'Az :attribute nem lehet nagyobb, mint :max.',
        'file' => 'Az :attribute nem lehet nagyobb, mint :max kilobájt.',
        'string' => 'Az :attribute nem lehet nagyobb, mint :max karakter.',
        'array' => 'Az :attribute legfeljebb :max elemet tartalmazhat.',
    ],
    'mimes' => 'Az :attribute fájlnak a következő típusúnak kell lennie: :values.',
    'mimetypes' => 'Az :attribute fájlnak a következő típusúnak kell lennie: :values.',
    'min' => [
        'numeric' => 'Az :attribute értéke legalább :min.',
        'file' => 'Az :attribute legalább :min kilobájtnak kell lennie.',
        'string' => 'Az :attribute legalább :min karakterből álljon.',
        'array' => 'Az :attribute-nek legalább :min elemet kell tartalmaznia.',
    ],
    'not_in' => 'A kiválasztott :attribute érvénytelen.',
    'not_regex' => 'Az :attribute formátum érvénytelen.',
    'numeric' => 'Az :attribute számnak kell lennie.',
    'present' => 'Az :attribute mezőnek jelen kell lennie.',
    'regex' => 'Az :attribute formátum érvénytelen.',
    'required' => 'Az :attribute mező kitöltése kötelező.',
    'required_if' => 'Az :attribute mező kitöltése kötelező, ha az :other értéke :value.',
    'required_unless' => 'Az :attribute mező kitöltése kötelező, kivéve, ha az :other szerepel a :values mezőben.',
    'required_with' => 'Az :attribute mező kitöltése kötelező, ha a :values jelen van.',
    'required_with_all' => 'Az :attribute mező kitöltése kötelező, ha a :values jelen van.',
    'required_without' => 'Az :attribute mező kitöltése kötelező, ha a :values nincs jelen.',
    'required_without_all' => 'A :attribute mező kitöltése kötelező, ha a :values egyike sem szerepel.',
    'same' => 'Az :attribute és az :other egyeznie kell.',
    'size' => [
        'numeric' => 'Az :attribute :size legyen.',
        'file' => 'A :attribute-nak :size kilobájtnak kell lennie.',
        'string' => 'Az :attribute-nek :size karakterekből kell állnia.',
        'array' => 'Az :attribute-nek tartalmaznia kell a :size elemeket.',
    ],
    'string' => 'Az :attribute karakterláncnak kell lennie.',
    'timezone' => 'Az :attribute értéknek érvényes zónának kell lennie.',
    'unique' => 'Az :attribute már foglalt.',
    'uploaded' => 'A :attribute feltöltése nem sikerült.',
    'url' => 'Az :attribute formátum érvénytelen.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'egyéni üzenet',
        ],
        'g-recaptcha-response' => [
            'required' => 'Kérjük, ellenőrizze, hogy Ön nem robot.',
            'captcha' => 'Captcha hiba! próbálkozzon újra később, vagy lépjen kapcsolatba a webhely adminisztrátorával.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],



    'accepted_if' => 'Az :attribute mezőt el kell fogadni, ha az :other értéke :value.',
    'ascii' => 'Az :attribute mező csak egybájtos alfanumerikus karaktereket és szimbólumokat tartalmazhat.',
    'can' => 'Az :attribute mező nem engedélyezett értéket tartalmaz.',
    'contains' => 'Az :attribute mezőből hiányzik egy kötelező érték.',
    'current_password' => 'A jelszó helytelen.',
    'date_equals' => 'Az :attribute mezőben a dátumnak egyenlőnek kell lennie a :date értékkel.',
    'decimal' => 'Az :attribute mezőben :decimal tizedesjegynek kell szerepelnie.',
    'declined' => 'Az :attribute mezőt el kell utasítani.',
    'declined_if' => 'Az :attribute mezőt el kell utasítani, ha az :other értéke :value.',
    'doesnt_end_with' => 'Az :attribute mező nem végződhet a következők egyikével: :values.',
    'doesnt_start_with' => 'Az :attribute mező nem kezdődhet a következők egyikével: :values.',
    'ends_with' => 'Az :attribute mezőnek a következők valamelyikével kell végződnie: :values.',
    'enum' => 'A kiválasztott :attribute érvénytelen.',
    'extensions' => 'Az :attribute mezőnek a következő kiterjesztések egyikével kell rendelkeznie: :values.',
    'hex_color' => 'Az :attribute mezőnek érvényes hexadecimális színnek kell lennie.',
    'list' => 'Az :attribute mezőnek listának kell lennie.',
    'lowercase' => 'Az :attribute mezőnek kisbetűnek kell lennie.',
    'mac_address' => 'Az :attribute mezőnek érvényes MAC-címnek kell lennie.',
    'max_digits' => 'Az :attribute mező legfeljebb :max számjegyből állhat.',
    'min_digits' => 'Az :attribute mezőnek legalább :min számjegyet kell tartalmaznia.',
    'missing' => 'Az :attribute mezőnek hiányoznia kell.',
    'missing_if' => 'Az :attribute mezőnek hiányoznia kell, ha az :other értéke :value.',
    'missing_unless' => 'Az :attribute mezőnek hiányoznia kell, kivéve, ha az :other a :value.',
    'missing_with' => 'Az :attribute mezőnek hiányoznia kell, ha a :values jelen van.',
    'missing_with_all' => 'Az :attribute mezőnek hiányoznia kell, ha a :values jelen van.',
    'multiple_of' => 'Az :attribute mezőnek a :value többszörösének kell lennie.',
    'password' => [
        'letters' => 'Az :attribute mezőnek legalább egy betűt kell tartalmaznia.',
        'mixed' => 'Az :attribute mezőnek legalább egy nagybetűt és egy kisbetűt kell tartalmaznia.',
        'numbers' => 'Az :attribute mezőnek legalább egy számot kell tartalmaznia.',
        'symbols' => 'Az :attribute mezőnek legalább egy szimbólumot kell tartalmaznia.',
        'uncompromised' => 'A megadott :attribute adatszivárgásban jelent meg. Kérjük, válasszon másik :attribute-t.',
    ],
    'present_if' => 'Az :attribute mezőnek jelen kell lennie, ha az :other értéke :value.',
    'present_unless' => 'Az :attribute mezőnek jelen kell lennie, kivéve, ha az :other a :value.',
    'present_with' => 'Az :attribute mezőnek jelen kell lennie, ha a :values jelen van.',
    'present_with_all' => 'Az :attribute mezőnek jelen kell lennie, ha a :values jelen van.',
    'prohibited' => 'Az :attribute mező tilos.',
    'prohibited_if' => 'Az :attribute mező tiltott, ha az :other értéke :value.',
    'prohibited_unless' => 'Az :attribute mező tilos, kivéve, ha az :other az :values mezőben szerepel.',
    'prohibits' => 'Az :attribute mező megtiltja, hogy az :other jelen legyen.',
    'required_array_keys' => 'Az :attribute mezőnek tartalmaznia kell a következő bejegyzéseket: :values.',
    'required_if_accepted' => 'Az :attribute mező kitöltése kötelező, ha az :other elfogadásra került.',
    'required_if_declined' => 'Az :attribute mező kitöltése kötelező, ha az :other elutasításra kerül.',
    'starts_with' => 'Az :attribute mezőnek a következők valamelyikével kell kezdődnie: :values.',
    'uppercase' => 'Az :attribute mezőnek nagybetűsnek kell lennie.',
    'ulid' => 'Az :attribute mezőnek érvényes ULID-nek kell lennie.',
    'uuid' => 'Az :attribute mezőnek érvényes UUID-nek kell lennie.',
];
