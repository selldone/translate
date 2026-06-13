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

    'accepted' => 'S\'ha d\'acceptar el :attribute.',
    'active_url' => 'El :attribute no és un URL vàlid.',
    'after' => 'El :attribute ha de ser una data posterior a :date.',
    'after_or_equal' => 'El :attribute ha de ser una data posterior o igual a :date.',
    'alpha' => 'El :attribute només pot contenir lletres.',
    'alpha_dash' => 'El :attribute només pot contenir lletres, números i guions.',
    'alpha_num' => 'El :attribute només pot contenir lletres i números.',
    'array' => 'El :attribute ha de ser una matriu.',
    'before' => 'El :attribute ha de ser una data anterior a :date.',
    'before_or_equal' => 'El :attribute ha de ser una data anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute ha d\'estar entre :min i :max.',
        'file' => 'El :attribute ha d\'estar entre els quilobytes :min i :max.',
        'string' => 'El :attribute ha d\'estar entre els caràcters :min i :max.',
        'array' => 'El :attribute ha de tenir entre :min i :max elements.',
    ],
    'boolean' => 'El camp :attribute ha de ser vertader o fals.',
    'confirmed' => 'La confirmació :attribute no coincideix.',
    'date' => 'El :attribute no és una data vàlida.',
    'date_format' => 'El :attribute no coincideix amb el format :format.',
    'different' => 'El :attribute i :other han de ser diferents.',
    'digits' => 'El :attribute ha de ser :digits dígits.',
    'digits_between' => 'El :attribute ha d\'estar entre els dígits :min i :max.',
    'dimensions' => 'El :attribute té dimensions d\'imatge no vàlides.',
    'distinct' => 'El camp :attribute té un valor duplicat.',
    'email' => 'El :attribute ha de ser una adreça de correu electrònic vàlida.',
    'exists' => 'El :attribute seleccionat no és vàlid.',
    'file' => 'El :attribute ha de ser un fitxer.',
    'filled' => 'El camp :attribute ha de tenir un valor.',
    'gt' => [
        'numeric' => 'El :attribute ha de ser més gran que :value.',
        'file' => 'El :attribute ha de ser més gran que :value kilobytes.',
        'string' => 'El :attribute ha de ser més gran que els caràcters :value.',
        'array' => 'El :attribute ha de tenir més de :value elements.',
    ],
    'gte' => [
        'numeric' => 'El :attribute ha de ser més gran o igual que :value.',
        'file' => 'El :attribute ha de ser més gran o igual que :value kilobytes.',
        'string' => 'El :attribute ha de ser més gran o igual que els caràcters :value.',
        'array' => 'El :attribute ha de tenir elements :value o més.',
    ],
    'image' => 'El :attribute ha de ser una imatge.',
    'in' => 'El :attribute seleccionat no és vàlid.',
    'in_array' => 'El camp :attribute no existeix a :other.',
    'integer' => 'El :attribute ha de ser un nombre enter.',
    'ip' => 'El :attribute ha de ser una adreça IP vàlida.',
    'ipv4' => 'El :attribute ha de ser una adreça IPv4 vàlida.',
    'ipv6' => 'El :attribute ha de ser una adreça IPv6 vàlida.',
    'json' => 'El :attribute ha de ser una cadena JSON vàlida.',
    'lt' => [
        'numeric' => 'El :attribute ha de ser inferior a :value.',
        'file' => 'El :attribute ha de ser inferior a :value kilobytes.',
        'string' => 'El :attribute ha de tenir menys de caràcters :value.',
        'array' => 'El :attribute ha de tenir menys de :value elements.',
    ],
    'lte' => [
        'numeric' => 'El :attribute ha de ser menor o igual que :value.',
        'file' => 'El :attribute ha de ser inferior o igual a :value kilobytes.',
        'string' => 'El :attribute ha de ser igual o inferior a caràcters :value.',
        'array' => 'El :attribute no ha de tenir més de :value elements.',
    ],
    'max' => [
        'numeric' => 'El :attribute no pot ser més gran que :max.',
        'file' => 'El :attribute no pot ser superior a :max kilobytes.',
        'string' => 'El :attribute no pot ser més gran que :max caràcters.',
        'array' => 'El :attribute no pot tenir més de :max elements.',
    ],
    'mimes' => 'El :attribute ha de ser un fitxer del tipus: :values.',
    'mimetypes' => 'El :attribute ha de ser un fitxer del tipus: :values.',
    'min' => [
        'numeric' => 'El :attribute ha de ser com a mínim :min.',
        'file' => 'El :attribute ha de tenir almenys :min kilobytes.',
        'string' => 'El :attribute ha de tenir com a mínim caràcters :min.',
        'array' => 'El :attribute ha de tenir com a mínim elements :min.',
    ],
    'not_in' => 'El :attribute seleccionat no és vàlid.',
    'not_regex' => 'El format :attribute no és vàlid.',
    'numeric' => 'El :attribute ha de ser un número.',
    'present' => 'El camp :attribute ha d\'estar present.',
    'regex' => 'El format :attribute no és vàlid.',
    'required' => 'El camp :attribute és obligatori.',
    'required_if' => 'El camp :attribute és obligatori quan :other és :value.',
    'required_unless' => 'El camp :attribute és obligatori tret que :other estigui a :values.',
    'required_with' => 'El camp :attribute és obligatori quan hi ha :values.',
    'required_with_all' => 'El camp :attribute és obligatori quan hi ha :values.',
    'required_without' => 'El camp :attribute és obligatori quan :values no està present.',
    'required_without_all' => 'El camp :attribute és obligatori quan no hi ha cap dels :values.',
    'same' => 'El :attribute i :other han de coincidir.',
    'size' => [
        'numeric' => 'El :attribute ha de ser :size.',
        'file' => 'El :attribute ha de ser :size kilobytes.',
        'string' => 'El :attribute ha de ser caràcters :size.',
        'array' => 'El :attribute ha de contenir elements :size.',
    ],
    'string' => 'El :attribute ha de ser una cadena.',
    'timezone' => 'El :attribute ha de ser una zona vàlida.',
    'unique' => 'El :attribute ja s\'ha pres.',
    'uploaded' => 'El :attribute no s\'ha pogut carregar.',
    'url' => 'El format :attribute no és vàlid.',

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
            'rule-name' => 'missatge personalitzat',
        ],
        'g-recaptcha-response' => [
            'required' => 'Verifiqueu que no sou un robot.',
            'captcha' => 'Error de captcha! torna-ho a provar més tard o contacta amb l\'administrador del lloc.',
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



    'accepted_if' => 'El camp :attribute s\'ha d\'acceptar quan :other és :value.',
    'ascii' => 'El camp :attribute només ha de contenir caràcters i símbols alfanumèrics d\'un sol byte.',
    'can' => 'El camp :attribute conté un valor no autoritzat.',
    'contains' => 'Al camp :attribute li falta un valor obligatori.',
    'current_password' => 'La contrasenya és incorrecta.',
    'date_equals' => 'El camp :attribute ha de ser una data igual a :date.',
    'decimal' => 'El camp :attribute ha de tenir : decimals decimals.',
    'declined' => 'El camp :attribute s\'ha de rebutjar.',
    'declined_if' => 'El camp :attribute s\'ha de rebutjar quan :other és :value.',
    'doesnt_end_with' => 'El camp :attribute no ha d\'acabar amb un dels següents: :values.',
    'doesnt_start_with' => 'El camp :attribute no ha de començar amb un dels següents: :values.',
    'ends_with' => 'El camp :attribute ha d\'acabar amb un dels següents: :values.',
    'enum' => 'L\'atribut seleccionat: no és vàlid.',
    'extensions' => 'El camp :attribute ha de tenir una de les extensions següents: :values.',
    'hex_color' => 'El camp :attribute ha de ser un color hexadecimal vàlid.',
    'list' => 'El camp :attribute ha de ser una llista.',
    'lowercase' => 'El camp :attribute ha d\'estar en minúscules.',
    'mac_address' => 'El camp :attribute ha de ser una adreça MAC vàlida.',
    'max_digits' => 'El camp :attribute no ha de tenir més de :max dígits.',
    'min_digits' => 'El camp :attribute ha de tenir almenys :min dígits.',
    'missing' => 'El camp :attribute ha de faltar.',
    'missing_if' => 'El camp :attribute ha de faltar quan :other és :value.',
    'missing_unless' => 'El camp :attribute ha de faltar tret que :other sigui :value.',
    'missing_with' => 'El camp :attribute ha de faltar quan hi ha :values.',
    'missing_with_all' => 'El camp :attribute ha de faltar quan hi ha :values.',
    'multiple_of' => 'El camp :attribute ha de ser un múltiple de :value.',
    'password' => [
        'letters' => 'El camp :attribute ha de contenir almenys una lletra.',
        'mixed' => 'El camp :attribute ha de contenir almenys una lletra majúscula i una minúscula.',
        'numbers' => 'El camp :attribute ha de contenir almenys un número.',
        'symbols' => 'El camp :attribute ha de contenir almenys un símbol.',
        'uncompromised' => 'L\'atribut: donat ha aparegut en una filtració de dades. Si us plau, trieu un :attribute diferent.',
    ],
    'present_if' => 'El camp :attribute ha d\'estar present quan :other és :value.',
    'present_unless' => 'El camp :attribute ha d\'estar present tret que :other sigui :value.',
    'present_with' => 'El camp :attribute ha d\'estar present quan hi ha :values.',
    'present_with_all' => 'El camp :attribute ha d\'estar present quan hi ha :values.',
    'prohibited' => 'El camp :attribute està prohibit.',
    'prohibited_if' => 'El camp :attribute està prohibit quan :other és :value.',
    'prohibited_unless' => 'El camp :attribute està prohibit tret que :other estigui a :values.',
    'prohibits' => 'El camp :attribute prohibeix la presència de : other.',
    'required_array_keys' => 'El camp :attribute ha de contenir entrades per a: :values.',
    'required_if_accepted' => 'El camp :attribute és obligatori quan s\'accepta :other.',
    'required_if_declined' => 'El camp :attribute és obligatori quan es rebutja :other.',
    'starts_with' => 'El camp :attribute ha de començar amb un dels següents: :values.',
    'uppercase' => 'El camp :attribute ha d\'estar en majúscules.',
    'ulid' => 'El camp :attribute ha de ser un ULID vàlid.',
    'uuid' => 'El camp :attribute ha de ser un UUID vàlid.',
];
