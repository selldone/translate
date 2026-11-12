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

    'accepted' => ':attribute må godtas.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after' => ':attribute må være en dato etter :date.',
    'after_or_equal' => ':attribute må være en dato etter eller lik :date.',
    'alpha' => ':attribute kan bare inneholde bokstaver.',
    'alpha_dash' => ':attribute kan bare inneholde bokstaver, tall og bindestreker.',
    'alpha_num' => ':attribute kan bare inneholde bokstaver og tall.',
    'array' => ':attribute må være en matrise.',
    'before' => ':attribute må være en dato før :date.',
    'before_or_equal' => ':attribute må være en dato før eller lik :date.',
    'between' => [
        'numeric' => ':attribute må være mellom :min og :max.',
        'file' => ':attribute må være mellom :min og :max kilobyte.',
        'string' => ':attribute må være mellom :min og :max tegn.',
        'array' => ':attribute må ha mellom :min og :max elementer.',
    ],
    'boolean' => ':attribute-feltet må være sant eller usant.',
    'confirmed' => ':attribute-bekreftelsen samsvarer ikke.',
    'date' => ':attribute er ikke en gyldig dato.',
    'date_format' => ':attribute samsvarer ikke med formatet :format.',
    'different' => ':attribute og :other må være forskjellige.',
    'digits' => ':attribute må være :digits sifre.',
    'digits_between' => ':attribute må være mellom :min og :max sifrene.',
    'dimensions' => ':attribute har ugyldige bildedimensjoner.',
    'distinct' => 'Feltet :attribute har en duplikatverdi.',
    'email' => ':attribute må være en gyldig e-postadresse.',
    'exists' => 'Den valgte :attribute er ugyldig.',
    'file' => ':attribute må være en fil.',
    'filled' => 'Feltet :attribute må ha en verdi.',
    'gt' => [
        'numeric' => ':attribute må være større enn :value.',
        'file' => ':attribute må være større enn :value kilobyte.',
        'string' => ':attribute må være større enn :value-tegn.',
        'array' => ':attribute må ha mer enn :value-elementer.',
    ],
    'gte' => [
        'numeric' => ':attribute må være større enn eller lik :value.',
        'file' => ':attribute må være større enn eller lik :value kilobyte.',
        'string' => ':attribute må være større enn eller lik :value-tegn.',
        'array' => ':attribute må ha :value-elementer eller flere.',
    ],
    'image' => ':attribute må være et bilde.',
    'in' => 'Den valgte :attribute er ugyldig.',
    'in_array' => ':attribute-feltet finnes ikke i :other.',
    'integer' => ':attribute må være et heltall.',
    'ip' => ':attribute må være en gyldig IP-adresse.',
    'ipv4' => ':attribute må være en gyldig IPv4-adresse.',
    'ipv6' => ':attribute må være en gyldig IPv6-adresse.',
    'json' => ':attribute må være en gyldig JSON-streng.',
    'lt' => [
        'numeric' => ':attribute må være mindre enn :value.',
        'file' => ':attribute må være mindre enn :value kilobyte.',
        'string' => ':attribute må være mindre enn :value-tegn.',
        'array' => ':attribute må ha færre enn :value-elementer.',
    ],
    'lte' => [
        'numeric' => ':attribute må være mindre enn eller lik :value.',
        'file' => ':attribute må være mindre enn eller lik :value kilobyte.',
        'string' => ':attribute må være mindre enn eller lik :value-tegn.',
        'array' => ':attribute må ikke ha mer enn :value-elementer.',
    ],
    'max' => [
        'numeric' => ':attribute kan ikke være større enn :max.',
        'file' => ':attribute kan ikke være større enn :max kilobyte.',
        'string' => ':attribute kan ikke være større enn :max-tegn.',
        'array' => ':attribute kan ikke ha mer enn :max-varer.',
    ],
    'mimes' => ':attribute må være en fil av typen: :values.',
    'mimetypes' => ':attribute må være en fil av typen: :values.',
    'min' => [
        'numeric' => ':attribute må være minst :min.',
        'file' => ':attribute må være minst :min kilobyte.',
        'string' => ':attribute må inneholde minst :min-tegn.',
        'array' => ':attribute må ha minst :min-elementer.',
    ],
    'not_in' => 'Den valgte :attribute er ugyldig.',
    'not_regex' => ':attribute-formatet er ugyldig.',
    'numeric' => ':attribute må være et tall.',
    'present' => 'Feltet :attribute må være til stede.',
    'regex' => ':attribute-formatet er ugyldig.',
    'required' => 'Feltet :attribute er obligatorisk.',
    'required_if' => ':attribute-feltet er obligatorisk når :other er :value.',
    'required_unless' => 'Feltet :attribute er obligatorisk med mindre :other er i :values.',
    'required_with' => ':attribute-feltet er obligatorisk når :values er tilstede.',
    'required_with_all' => ':attribute-feltet er obligatorisk når :values er tilstede.',
    'required_without' => 'Feltet :attribute er obligatorisk når :values ikke er til stede.',
    'required_without_all' => ':attribute-feltet er obligatorisk når ingen av :values er tilstede.',
    'same' => ':attribute og :other må samsvare.',
    'size' => [
        'numeric' => ':attribute må være :size.',
        'file' => ':attribute må være :size kilobyte.',
        'string' => ':attribute må være :size-tegn.',
        'array' => ':attribute må inneholde :size-elementer.',
    ],
    'string' => ':attribute må være en streng.',
    'timezone' => ':attribute må være en gyldig sone.',
    'unique' => ':attribute er allerede tatt.',
    'uploaded' => ':attribute kunne ikke lastes opp.',
    'url' => ':attribute-formatet er ugyldig.',

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
            'rule-name' => 'tilpasset melding',
        ],
        'g-recaptcha-response' => [
            'required' => 'Vennligst bekreft at du ikke er en robot.',
            'captcha' => 'Captcha-feil! prøv igjen senere eller kontakt nettstedadministratoren.',
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



    'accepted_if' => 'Feltet :attribute må godtas når :other er :verdi.',
    'ascii' => 'Feltet :attribute må bare inneholde enkeltbyte alfanumeriske tegn og symboler.',
    'can' => 'Feltet :attribute inneholder en uautorisert verdi.',
    'contains' => 'Feltet :attribute mangler en obligatorisk verdi.',
    'current_password' => 'Passordet er feil.',
    'date_equals' => ':attribute-feltet må være en dato lik :date.',
    'decimal' => 'Feltet :attribute må ha :desimal desimaler.',
    'declined' => 'Feltet :attribute må avvises.',
    'declined_if' => ':attributtfeltet må avvises når :other er :verdi.',
    'doesnt_end_with' => ':attribute-feltet må ikke ende med en av følgende: :verdier.',
    'doesnt_start_with' => ':attribute-feltet må ikke starte med en av følgende: :verdier.',
    'ends_with' => 'Feltet :attribute må slutte med ett av følgende: :verdier.',
    'enum' => 'Det valgte :attributtet er ugyldig.',
    'extensions' => ':attribute-feltet må ha en av følgende utvidelser: :values.',
    'hex_color' => 'Feltet :attribute må være en gyldig heksadesimal farge.',
    'list' => 'Feltet :attribute må være en liste.',
    'lowercase' => 'Feltet :attribute må være små bokstaver.',
    'mac_address' => ':attribute-feltet må være en gyldig MAC-adresse.',
    'max_digits' => ':attribute-feltet må ikke ha mer enn :max sifre.',
    'min_digits' => ':attribute-feltet må ha minst :min sifre.',
    'missing' => 'Feltet :attribute må mangle.',
    'missing_if' => 'Feltet :attribute må mangle når :other er :verdi.',
    'missing_unless' => 'Feltet :attribute må mangle med mindre :other er :verdi.',
    'missing_with' => ':attribute-feltet må mangle når :values er tilstede.',
    'missing_with_all' => 'Feltet :attribute må mangle når :verdier er tilstede.',
    'multiple_of' => 'Feltet :attribute må være et multiplum av :verdi.',
    'password' => [
        'letters' => ':attribute-feltet må inneholde minst én bokstav.',
        'mixed' => 'Feltet :attribute må inneholde minst én stor og én liten bokstav.',
        'numbers' => 'Feltet :attribute må inneholde minst ett tall.',
        'symbols' => ':attribute-feltet må inneholde minst ett symbol.',
        'uncompromised' => 'Det oppgitte :attributtet har dukket opp i en datalekkasje. Velg et annet :attributt.',
    ],
    'present_if' => ':attributtfeltet må være til stede når :other er :verdi.',
    'present_unless' => ':attributtfeltet må være til stede med mindre :other er :verdi.',
    'present_with' => ':attributtfeltet må være tilstede når :verdier er tilstede.',
    'present_with_all' => ':attribute-feltet må være til stede når :verdier er tilstede.',
    'prohibited' => 'Feltet :attribute er forbudt.',
    'prohibited_if' => 'Feltet :attribute er forbudt når :other er :verdi.',
    'prohibited_unless' => ':attribute-feltet er forbudt med mindre :other er i :values.',
    'prohibits' => 'Feltet :attribute forbyr :other å være tilstede.',
    'required_array_keys' => 'Feltet :attribute må inneholde oppføringer for: :verdier.',
    'required_if_accepted' => 'Feltet :attribute er obligatorisk når :other godtas.',
    'required_if_declined' => 'Feltet :attribute er obligatorisk når :other avvises.',
    'starts_with' => ':attribute-feltet må starte med ett av følgende: :verdier.',
    'uppercase' => 'Feltet :attribute må være store bokstaver.',
    'ulid' => 'Feltet :attribute må være en gyldig ULID.',
    'uuid' => 'Feltet :attribute må være en gyldig UUID.',
];
