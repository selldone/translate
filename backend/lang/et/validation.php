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

    'accepted' => ':attribute tuleb aktsepteerida.',
    'active_url' => 'Atribuut :attribute ei ole kehtiv URL.',
    'after' => 'Atribuut :attribute peab olema kuupäev pärast :date.',
    'after_or_equal' => ':attribute peab olema kuupäev pärast :date või sellega võrdne.',
    'alpha' => ':attribute võib sisaldada ainult tähti.',
    'alpha_dash' => ':attribute võib sisaldada ainult tähti, numbreid ja sidekriipse.',
    'alpha_num' => ':attribute võib sisaldada ainult tähti ja numbreid.',
    'array' => 'Atribuut :attribute peab olema massiiv.',
    'before' => 'Atribuut :attribute peab olema kuupäev enne :date.',
    'before_or_equal' => ':attribute peab olema kuupäev, mis on enne :date või sellega võrdne.',
    'between' => [
        'numeric' => ':attribute peab jääma :min ja :max vahele.',
        'file' => ':attribute peab olema vahemikus :min kuni :max kilobaiti.',
        'string' => ':attribute peab jääma :min ja :max tähemärkide vahele.',
        'array' => 'Atribuudi :attribute üksused peavad olema vahemikus :min kuni :max.',
    ],
    'boolean' => 'Väli :attribute peab olema tõene või väär.',
    'confirmed' => ':attribute kinnitus ei ühti.',
    'date' => ':attribute ei ole kehtiv kuupäev.',
    'date_format' => 'Atribuut :attribute ei vasta vormingule :format.',
    'different' => ':attribute ja :other peavad olema erinevad.',
    'digits' => ':attribute peab koosnema :digits numbrist.',
    'digits_between' => ':attribute peab jääma :min ja :max numbri vahele.',
    'dimensions' => 'Atribuudil :attribute on sobimatud pildi mõõtmed.',
    'distinct' => 'Väljal :attribute on duplikaatväärtus.',
    'email' => 'Atribuut :attribute peab olema kehtiv e-posti aadress.',
    'exists' => 'Valitud :attribute on kehtetu.',
    'file' => 'Atribuut :attribute peab olema fail.',
    'filled' => 'Väljal :attribute peab olema väärtus.',
    'gt' => [
        'numeric' => ':attribute peab olema suurem kui :value.',
        'file' => ':attribute peab olema suurem kui :value kilobait.',
        'string' => ':attribute peab olema suurem kui :value märke.',
        'array' => 'Atribuudil :attribute peab olema rohkem kui :value üksusi.',
    ],
    'gte' => [
        'numeric' => ':attribute peab olema suurem kui :value või sellega võrdne.',
        'file' => ':attribute peab olema suurem kui :value kilobait või sellega võrdne.',
        'string' => 'Atribuut :attribute peab olema suurem kui :value märk või sellega võrdne.',
        'array' => ':attribute peab sisaldama :value või rohkem elemente.',
    ],
    'image' => 'Atribuut :attribute peab olema pilt.',
    'in' => 'Valitud :attribute on kehtetu.',
    'in_array' => ':attribute välja :other ei eksisteeri.',
    'integer' => ':attribute peab olema täisarv.',
    'ip' => 'Atribuut :attribute peab olema kehtiv IP-aadress.',
    'ipv4' => 'Atribuut :attribute peab olema kehtiv IPv4-aadress.',
    'ipv6' => 'Atribuut :attribute peab olema kehtiv IPv6-aadress.',
    'json' => 'Atribuut :attribute peab olema kehtiv JSON-string.',
    'lt' => [
        'numeric' => ':attribute peab olema väiksem kui :value.',
        'file' => ':attribute peab olema väiksem kui :value kilobaiti.',
        'string' => ':attribute peab olema väiksem kui :value märke.',
        'array' => 'Atribuudis :attribute peab olema vähem kui :value üksusi.',
    ],
    'lte' => [
        'numeric' => ':attribute peab olema väiksem kui :value või sellega võrdne.',
        'file' => ':attribute peab olema väiksem või võrdne :value kilobaidiga.',
        'string' => ':attribute peab olema väiksem kui :value tähemärki või sellega võrdne.',
        'array' => 'Atribuudis :attribute ei tohi olla rohkem kui :value üksusi.',
    ],
    'max' => [
        'numeric' => ':attribute ei tohi olla suurem kui :max.',
        'file' => ':attribute ei tohi olla suurem kui :max kilobait.',
        'string' => ':attribute ei tohi olla suurem kui :max tähemärki.',
        'array' => 'Atribuudis :attribute ei tohi olla rohkem kui :max üksusi.',
    ],
    'mimes' => 'Atribuut :attribute peab olema faili tüüpi: :values.',
    'mimetypes' => 'Atribuut :attribute peab olema faili tüüpi: :values.',
    'min' => [
        'numeric' => ':attribute peab olema vähemalt :min.',
        'file' => ':attribute peab olema vähemalt :min kilobaiti.',
        'string' => ':attribute peab sisaldama vähemalt :min märki.',
        'array' => ':attribute peab sisaldama vähemalt :min üksusi.',
    ],
    'not_in' => 'Valitud :attribute on kehtetu.',
    'not_regex' => ':attribute vorming on kehtetu.',
    'numeric' => ':attribute peab olema arv.',
    'present' => 'Väli :attribute peab olema olemas.',
    'regex' => ':attribute vorming on kehtetu.',
    'required' => 'Väli :attribute on kohustuslik.',
    'required_if' => 'Väli :attribute on kohustuslik, kui :other on :value.',
    'required_unless' => 'Väli :attribute on kohustuslik, välja arvatud juhul, kui :other on jaotises :values.',
    'required_with' => 'Väli :attribute on kohustuslik, kui :values on olemas.',
    'required_with_all' => 'Väli :attribute on kohustuslik, kui :values on olemas.',
    'required_without' => 'Väli :attribute on kohustuslik, kui :values puudub.',
    'required_without_all' => 'Väli :attribute on nõutav, kui ükski :values pole olemas.',
    'same' => ':attribute ja :other peavad ühtima.',
    'size' => [
        'numeric' => ':attribute peab olema :size.',
        'file' => ':attribute peab olema :size kilobaiti.',
        'string' => ':attribute peab sisaldama :size märke.',
        'array' => 'Atribuut :attribute peab sisaldama :size üksusi.',
    ],
    'string' => ':attribute peab olema string.',
    'timezone' => ':attribute peab olema kehtiv tsoon.',
    'unique' => ':attribute on juba võetud.',
    'uploaded' => 'Atribuudi :attribute üleslaadimine ebaõnnestus.',
    'url' => ':attribute vorming on kehtetu.',

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
            'rule-name' => 'kohandatud sõnum',
        ],
        'g-recaptcha-response' => [
            'required' => 'Veenduge, et te pole robot.',
            'captcha' => 'Captcha viga! proovige hiljem uuesti või võtke ühendust saidi administraatoriga.',
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



    'accepted_if' => 'Välja :attribute tuleb aktsepteerida, kui :other on :value.',
    'ascii' => 'Väli :attribute tohib sisaldada ainult ühebaidiseid tähtnumbrilisi märke ja sümboleid.',
    'can' => 'Väli :attribute sisaldab volitamata väärtust.',
    'contains' => 'Väljal :attribute puudub nõutav väärtus.',
    'current_password' => 'Parool on vale.',
    'date_equals' => 'Väljal :attribute peab olema kuupäev, mis on võrdne väärtusega :date.',
    'decimal' => 'Väljal :attribute peavad olema :decimal kümnendkohad.',
    'declined' => 'Väljast :attribute tuleb keelduda.',
    'declined_if' => 'Välja :attribute tuleb tagasi lükata, kui :other on :value.',
    'doesnt_end_with' => 'Väli :attribute ei tohi lõppeda ühega järgmistest: :values.',
    'doesnt_start_with' => 'Väli :attribute ei tohi alata ühega järgmistest: :values.',
    'ends_with' => 'Väli :attribute peab lõppema ühega järgmistest: :values.',
    'enum' => 'Valitud :attribute on kehtetu.',
    'extensions' => 'Väljal :attribute peab olema üks järgmistest laienditest: :values.',
    'hex_color' => 'Väljal :attribute peab olema kehtiv kuueteistkümnendvärv.',
    'list' => 'Väli :attribute peab olema loend.',
    'lowercase' => ':attribute väli peab olema väiketähtedega.',
    'mac_address' => 'Väljal :attribute peab olema kehtiv MAC-aadress.',
    'max_digits' => 'Väljal :attribute ei tohi olla rohkem kui :max.',
    'min_digits' => 'Väljal :attribute peab olema vähemalt :min.',
    'missing' => 'Välja :attribute peab puuduma.',
    'missing_if' => 'Väli :attribute peab puuduma, kui :other on :value.',
    'missing_unless' => 'Välja :attribute peab puuduma, välja arvatud juhul, kui :other on :value.',
    'missing_with' => 'Väli :attribute peab puuduma, kui :values on olemas.',
    'missing_with_all' => 'Väli :attribute peab puuduma, kui :values on olemas.',
    'multiple_of' => 'Väli :attribute peab olema väärtuse :value kordne.',
    'password' => [
        'letters' => 'Väljal :attribute peab olema vähemalt üks täht.',
        'mixed' => 'Väljal :attribute peab olema vähemalt üks suur- ja üks väiketäht.',
        'numbers' => 'Väljal :attribute peab olema vähemalt üks number.',
        'symbols' => 'Väljal :attribute peab olema vähemalt üks sümbol.',
        'uncompromised' => 'Antud :attribute on ilmunud andmelekkesse. Valige mõni muu :attribute.',
    ],
    'present_if' => 'Väli :attribute peab olema olemas, kui :other on :value.',
    'present_unless' => 'Väli :attribute peab olema olemas, välja arvatud juhul, kui :other on :value.',
    'present_with' => 'Väli :attribute peab olema olemas, kui :values on olemas.',
    'present_with_all' => 'Väli :attribute peab olema olemas, kui :values on olemas.',
    'prohibited' => ':attribute väli on keelatud.',
    'prohibited_if' => 'Väli :attribute on keelatud, kui :other on :value.',
    'prohibited_unless' => 'Väli :attribute on keelatud, välja arvatud juhul, kui :other on väljas :values.',
    'prohibits' => 'Väli :attribute keelab :other olemasolu.',
    'required_array_keys' => 'Väli :attribute peab sisaldama kirjeid: :values.',
    'required_if_accepted' => 'Väli :attribute on kohustuslik, kui :other on aktsepteeritud.',
    'required_if_declined' => 'Väli :attribute on kohustuslik, kui :other on tagasi lükatud.',
    'starts_with' => 'Väli :attribute peab algama ühega järgmistest: :values.',
    'uppercase' => 'Väli :attribute peab olema suurtähtedega.',
    'ulid' => 'Väli :attribute peab olema kehtiv ULID.',
    'uuid' => 'Väli :attribute peab olema kehtiv UUID.',
];
