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

    'accepted' => ':attribute skal accepteres.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after' => ':attribute skal være en dato efter :date.',
    'after_or_equal' => ':attribute skal være en dato efter eller lig med :date.',
    'alpha' => ':attribute må kun indeholde bogstaver.',
    'alpha_dash' => ':attribute må kun indeholde bogstaver, tal og bindestreger.',
    'alpha_num' => ':attribute må kun indeholde bogstaver og tal.',
    'array' => ':attribute skal være et array.',
    'before' => ':attribute skal være en dato før :date.',
    'before_or_equal' => ':attribute skal være en dato før eller lig med :date.',
    'between' => [
        'numeric' => ':attribute skal være mellem :min og :max.',
        'file' => ':attribute skal være mellem :min og :max kilobyte.',
        'string' => ':attribute skal være mellem :min og :max tegn.',
        'array' => ':attribute skal have mellem :min og :max elementer.',
    ],
    'boolean' => 'Feltet :attribute skal være sandt eller falsk.',
    'confirmed' => ':attribute-bekræftelsen stemmer ikke overens.',
    'date' => ':attribute er ikke en gyldig dato.',
    'date_format' => ':attribute matcher ikke formatet :format.',
    'different' => ':attribute og :other skal være forskellige.',
    'digits' => ':attribute skal være :digits-cifre.',
    'digits_between' => ':attribute skal være mellem :min og :max cifrene.',
    'dimensions' => ':attribute har ugyldige billeddimensioner.',
    'distinct' => 'Feltet :attribute har en dubletværdi.',
    'email' => ':attribute skal være en gyldig e-mailadresse.',
    'exists' => 'Den valgte :attribute er ugyldig.',
    'file' => ':attribute skal være en fil.',
    'filled' => 'Feltet :attribute skal have en værdi.',
    'gt' => [
        'numeric' => ':attribute skal være større end :value.',
        'file' => ':attribute skal være større end :value kilobyte.',
        'string' => ':attribute skal være større end :value tegn.',
        'array' => ':attribute skal have mere end :value elementer.',
    ],
    'gte' => [
        'numeric' => ':attribute skal være større end eller lig med :value.',
        'file' => ':attribute skal være større end eller lig med :value kilobytes.',
        'string' => ':attribute skal være større end eller lig med :value tegn.',
        'array' => ':attribute skal have :value elementer eller flere.',
    ],
    'image' => ':attribute skal være et billede.',
    'in' => 'Den valgte :attribute er ugyldig.',
    'in_array' => 'Feltet :attribute findes ikke i :other.',
    'integer' => ':attribute skal være et heltal.',
    'ip' => ':attribute skal være en gyldig IP-adresse.',
    'ipv4' => ':attribute skal være en gyldig IPv4-adresse.',
    'ipv6' => ':attribute skal være en gyldig IPv6-adresse.',
    'json' => ':attribute skal være en gyldig JSON-streng.',
    'lt' => [
        'numeric' => ':attribute skal være mindre end :value.',
        'file' => ':attribute skal være mindre end :value kilobyte.',
        'string' => ':attribute skal være mindre end :value tegn.',
        'array' => ':attribute skal have færre end :value elementer.',
    ],
    'lte' => [
        'numeric' => ':attribute skal være mindre end eller lig med :value.',
        'file' => ':attribute skal være mindre end eller lig med :value kilobytes.',
        'string' => ':attribute skal være mindre end eller lig med :value-tegn.',
        'array' => ':attribute må ikke have mere end :value elementer.',
    ],
    'max' => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file' => ':attribute må ikke være større end :max kilobytes.',
        'string' => ':attribute må ikke være større end :max-tegn.',
        'array' => ':attribute må ikke have mere end :max elementer.',
    ],
    'mimes' => ':attribute skal være en fil af typen: :values.',
    'mimetypes' => ':attribute skal være en fil af typen: :values.',
    'min' => [
        'numeric' => ':attribute skal mindst være :min.',
        'file' => ':attribute skal være mindst :min kilobyte.',
        'string' => ':attribute skal være mindst :min tegn.',
        'array' => ':attribute skal have mindst :min elementer.',
    ],
    'not_in' => 'Den valgte :attribute er ugyldig.',
    'not_regex' => ':attribute-formatet er ugyldigt.',
    'numeric' => ':attribute skal være et tal.',
    'present' => 'Feltet :attribute skal være til stede.',
    'regex' => ':attribute-formatet er ugyldigt.',
    'required' => 'Feltet :attribute er påkrævet.',
    'required_if' => 'Feltet :attribute er påkrævet, når :other er :value.',
    'required_unless' => 'Feltet :attribute er påkrævet, medmindre :other er i :values.',
    'required_with' => 'Feltet :attribute er påkrævet, når :values er til stede.',
    'required_with_all' => 'Feltet :attribute er påkrævet, når :values er til stede.',
    'required_without' => 'Feltet :attribute er påkrævet, når :values ikke er til stede.',
    'required_without_all' => ':attribute-feltet er påkrævet, når ingen af :values er til stede.',
    'same' => ':attribute og :other skal matche.',
    'size' => [
        'numeric' => ':attribute skal være :size.',
        'file' => ':attribute skal være :size kilobyte.',
        'string' => ':attribute skal være :size-tegn.',
        'array' => ':attribute skal indeholde :size elementer.',
    ],
    'string' => ':attribute skal være en streng.',
    'timezone' => ':attribute skal være en gyldig zone.',
    'unique' => ':attribute er allerede taget.',
    'uploaded' => ':attribute kunne ikke uploades.',
    'url' => ':attribute-formatet er ugyldigt.',

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
            'rule-name' => 'tilpasset besked',
        ],
        'g-recaptcha-response' => [
            'required' => 'Bekræft venligst, at du ikke er en robot.',
            'captcha' => 'Captcha fejl! prøv igen senere eller kontakt webstedsadministratoren.',
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



    'accepted_if' => 'Feltet :attribute skal accepteres, når :other er :værdi.',
    'ascii' => 'Feltet :attribute må kun indeholde enkeltbyte alfanumeriske tegn og symboler.',
    'can' => 'Feltet :attribute indeholder en uautoriseret værdi.',
    'contains' => 'Feltet :attribute mangler en påkrævet værdi.',
    'current_password' => 'Adgangskoden er forkert.',
    'date_equals' => 'Feltet :attribute skal være en dato lig med :date.',
    'decimal' => 'Feltet :attribut skal have :decimal decimaler.',
    'declined' => 'Feltet :attribute skal afvises.',
    'declined_if' => 'Feltet :attribute skal afvises, når :other er :værdi.',
    'doesnt_end_with' => 'Feltet :attribute må ikke slutte med en af følgende: :værdier.',
    'doesnt_start_with' => 'Feltet :attribute må ikke starte med en af følgende: :værdier.',
    'ends_with' => 'Feltet :attribute skal slutte med en af følgende: :values.',
    'enum' => 'Den valgte :attribut er ugyldig.',
    'extensions' => 'Feltet :attribute skal have en af følgende udvidelser: :values.',
    'hex_color' => 'Feltet :attribute skal være en gyldig hexadecimal farve.',
    'list' => 'Feltet :attribute skal være en liste.',
    'lowercase' => 'Feltet :attribute skal være med små bogstaver.',
    'mac_address' => 'Feltet :attribute skal være en gyldig MAC-adresse.',
    'max_digits' => 'Feltet :attribute må ikke have mere end :max cifre.',
    'min_digits' => 'Feltet :attribute skal have mindst :min-cifre.',
    'missing' => 'Feltet :attribute skal mangle.',
    'missing_if' => 'Feltet :attribute skal mangle, når :other er :værdi.',
    'missing_unless' => 'Feltet :attribute skal mangle, medmindre :other er :value.',
    'missing_with' => 'Feltet :attribute skal mangle, når :values er til stede.',
    'missing_with_all' => 'Feltet :attribute skal mangle, når :værdier er til stede.',
    'multiple_of' => 'Feltet :attribute skal være et multiplum af :value.',
    'password' => [
        'letters' => 'Feltet :attribute skal indeholde mindst ét bogstav.',
        'mixed' => 'Feltet :attribute skal indeholde mindst et stort og et lille bogstav.',
        'numbers' => 'Feltet :attribute skal indeholde mindst ét tal.',
        'symbols' => 'Feltet :attribute skal indeholde mindst ét symbol.',
        'uncompromised' => 'Den givne :attribut er dukket op i et datalæk. Vælg venligst en anden :attribut.',
    ],
    'present_if' => 'Feltet :attribute skal være til stede, når :other er :værdi.',
    'present_unless' => 'Feltet :attribute skal være til stede, medmindre :other er :value.',
    'present_with' => 'Feltet :attribute skal være til stede, når :values er til stede.',
    'present_with_all' => 'Feltet :attribute skal være til stede, når :værdier er til stede.',
    'prohibited' => 'Feltet :attribute er forbudt.',
    'prohibited_if' => 'Feltet :attribute er forbudt, når :other er :værdi.',
    'prohibited_unless' => 'Feltet :attribute er forbudt, medmindre :other er i :values.',
    'prohibits' => 'Feltet :attribute forbyder :other at være til stede.',
    'required_array_keys' => 'Feltet :attribute skal indeholde indgange for: :værdier.',
    'required_if_accepted' => 'Feltet :attribute er påkrævet, når :other accepteres.',
    'required_if_declined' => 'Feltet :attribute er påkrævet, når :other afvises.',
    'starts_with' => 'Feltet :attribute skal starte med en af følgende: :values.',
    'uppercase' => 'Feltet :attribute skal være stort.',
    'ulid' => 'Feltet :attribute skal være et gyldigt ULID.',
    'uuid' => 'Feltet :attribute skal være et gyldigt UUID.',
];
