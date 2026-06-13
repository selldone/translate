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

    'accepted' => ':attribute måste godkännas.',
    'active_url' => ':attribute är inte en giltig URL.',
    'after' => ':attribute måste vara ett datum efter :date.',
    'after_or_equal' => ':attribute måste vara ett datum efter eller lika med :date.',
    'alpha' => ':attribute får bara innehålla bokstäver.',
    'alpha_dash' => ':attribute får bara innehålla bokstäver, siffror och bindestreck.',
    'alpha_num' => ':attribute får bara innehålla bokstäver och siffror.',
    'array' => ':attribute måste vara en array.',
    'before' => ':attribute måste vara ett datum före :date.',
    'before_or_equal' => ':attribute måste vara ett datum före eller lika med :date.',
    'between' => [
        'numeric' => ':attribute måste vara mellan :min och :max.',
        'file' => ':attribute måste vara mellan :min och :max kilobyte.',
        'string' => ':attribute måste vara mellan :min och :max tecken.',
        'array' => ':attribute måste ha mellan :min och :max artiklar.',
    ],
    'boolean' => 'Fältet :attribute måste vara sant eller falskt.',
    'confirmed' => ':attribute-bekräftelsen matchar inte.',
    'date' => ':attribute är inte ett giltigt datum.',
    'date_format' => ':attribute matchar inte formatet :format.',
    'different' => ':attribute och :other måste vara olika.',
    'digits' => ':attribute måste vara :digits-siffror.',
    'digits_between' => ':attribute måste vara mellan :min och :max siffror.',
    'dimensions' => ':attribute har ogiltiga bildmått.',
    'distinct' => 'Fältet :attribute har ett dubblettvärde.',
    'email' => ':attribute måste vara en giltig e-postadress.',
    'exists' => 'Den valda :attribute är ogiltig.',
    'file' => ':attribute måste vara en fil.',
    'filled' => 'Fältet :attribute måste ha ett värde.',
    'gt' => [
        'numeric' => ':attribute måste vara större än :value.',
        'file' => ':attribute måste vara större än :value kilobyte.',
        'string' => ':attribute måste vara större än :value-tecken.',
        'array' => ':attribute måste ha fler än :value-artiklar.',
    ],
    'gte' => [
        'numeric' => ':attribute måste vara större än eller lika med :value.',
        'file' => ':attribute måste vara större än eller lika med :value kilobyte.',
        'string' => ':attribute måste vara större än eller lika med :value-tecken.',
        'array' => ':attribute måste ha :value-artiklar eller fler.',
    ],
    'image' => ':attribute måste vara en bild.',
    'in' => 'Den valda :attribute är ogiltig.',
    'in_array' => 'Fältet :attribute finns inte i :other.',
    'integer' => ':attribute måste vara ett heltal.',
    'ip' => ':attribute måste vara en giltig IP-adress.',
    'ipv4' => ':attribute måste vara en giltig IPv4-adress.',
    'ipv6' => ':attribute måste vara en giltig IPv6-adress.',
    'json' => ':attribute måste vara en giltig JSON-sträng.',
    'lt' => [
        'numeric' => ':attribute måste vara mindre än :value.',
        'file' => ':attribute måste vara mindre än :value kilobyte.',
        'string' => ':attribute måste vara mindre än :value-tecken.',
        'array' => ':attribute måste ha färre än :value-objekt.',
    ],
    'lte' => [
        'numeric' => ':attribute måste vara mindre än eller lika med :value.',
        'file' => ':attribute måste vara mindre än eller lika med :value kilobyte.',
        'string' => ':attribute måste vara mindre än eller lika med :value-tecken.',
        'array' => ':attribute får inte ha fler än :value-artiklar.',
    ],
    'max' => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file' => ':attribute får inte vara större än :max kilobyte.',
        'string' => ':attribute får inte vara större än :max-tecken.',
        'array' => ':attribute får inte ha fler än :max-artiklar.',
    ],
    'mimes' => ':attribute måste vara en fil av typen: :values.',
    'mimetypes' => ':attribute måste vara en fil av typen: :values.',
    'min' => [
        'numeric' => ':attribute måste vara minst :min.',
        'file' => ':attribute måste vara minst :min kilobyte.',
        'string' => ':attribute måste bestå av minst :min-tecken.',
        'array' => ':attribute måste ha minst :min-objekt.',
    ],
    'not_in' => 'Den valda :attribute är ogiltig.',
    'not_regex' => 'Formatet :attribute är ogiltigt.',
    'numeric' => ':attribute måste vara ett nummer.',
    'present' => 'Fältet :attribute måste finnas.',
    'regex' => 'Formatet :attribute är ogiltigt.',
    'required' => 'Fältet :attribute är obligatoriskt.',
    'required_if' => 'Fältet :attribute krävs när :other är :value.',
    'required_unless' => 'Fältet :attribute är obligatoriskt om inte :other finns i :values.',
    'required_with' => 'Fältet :attribute är obligatoriskt när :values finns.',
    'required_with_all' => 'Fältet :attribute är obligatoriskt när :values finns.',
    'required_without' => 'Fältet :attribute är obligatoriskt när :values inte finns.',
    'required_without_all' => 'Fältet :attribute krävs när inget av :values finns.',
    'same' => ':attribute och :other måste matcha.',
    'size' => [
        'numeric' => ':attribute måste vara :size.',
        'file' => ':attribute måste vara :size kilobyte.',
        'string' => ':attribute måste vara :size-tecken.',
        'array' => ':attribute måste innehålla :size-objekt.',
    ],
    'string' => ':attribute måste vara en sträng.',
    'timezone' => ':attribute måste vara en giltig zon.',
    'unique' => ':attribute har redan tagits.',
    'uploaded' => ':attribute kunde inte laddas upp.',
    'url' => 'Formatet :attribute är ogiltigt.',

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
            'rule-name' => 'anpassat meddelande',
        ],
        'g-recaptcha-response' => [
            'required' => 'Kontrollera att du inte är en robot.',
            'captcha' => 'Captcha-fel! försök igen senare eller kontakta webbplatsadministratören.',
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



    'accepted_if' => ':attributfältet måste accepteras när :other är :värde.',
    'ascii' => 'Fältet :attribute får endast innehålla enbyte alfanumeriska tecken och symboler.',
    'can' => 'Fältet :attribute innehåller ett obehörigt värde.',
    'contains' => 'Fältet :attribute saknar ett obligatoriskt värde.',
    'current_password' => 'Lösenordet är felaktigt.',
    'date_equals' => ':attributfältet måste vara ett datum lika med :date.',
    'decimal' => ':attributfältet måste ha :decimal decimaler.',
    'declined' => 'Fältet :attribute måste avvisas.',
    'declined_if' => ':attributfältet måste avvisas när :other är :värde.',
    'doesnt_end_with' => ':attributfältet får inte sluta med något av följande: :värden.',
    'doesnt_start_with' => ':attributfältet får inte börja med något av följande: :värden.',
    'ends_with' => ':attributfältet måste sluta med något av följande: :values.',
    'enum' => 'Det valda :attributet är ogiltigt.',
    'extensions' => ':attributfältet måste ha ett av följande tillägg: :values.',
    'hex_color' => 'Fältet :attribute måste vara en giltig hexadecimal färg.',
    'list' => ':attributfältet måste vara en lista.',
    'lowercase' => ':attributfältet måste vara gemener.',
    'mac_address' => ':attributfältet måste vara en giltig MAC-adress.',
    'max_digits' => ':attributfältet får inte ha fler än :max siffror.',
    'min_digits' => ':attributfältet måste ha minst :min-siffror.',
    'missing' => 'Fältet :attribute måste saknas.',
    'missing_if' => ':attributfältet måste saknas när :other är :värde.',
    'missing_unless' => ':attributfältet måste saknas om inte :other är :värde.',
    'missing_with' => ':attributfältet måste saknas när :values finns.',
    'missing_with_all' => ':attributfältet måste saknas när :värden finns.',
    'multiple_of' => ':attributfältet måste vara en multipel av :värde.',
    'password' => [
        'letters' => ':attributfältet måste innehålla minst en bokstav.',
        'mixed' => ':attributfältet måste innehålla minst en stor och en liten bokstav.',
        'numbers' => 'Fältet :attribute måste innehålla minst ett nummer.',
        'symbols' => ':attributfältet måste innehålla minst en symbol.',
        'uncompromised' => 'Det givna :attributet har dykt upp i en dataläcka. Välj ett annat :attribut.',
    ],
    'present_if' => ':attributfältet måste finnas när :other är :värde.',
    'present_unless' => ':attributfältet måste finnas om inte :other är :värde.',
    'present_with' => ':attributfältet måste finnas när :values finns.',
    'present_with_all' => ':attributfältet måste finnas när :värden finns.',
    'prohibited' => 'Fältet :attribute är förbjudet.',
    'prohibited_if' => ':attributfältet är förbjudet när :other är :värde.',
    'prohibited_unless' => ':attributfältet är förbjudet om inte :other finns i :values.',
    'prohibits' => ':attributfältet förbjuder :other från att vara närvarande.',
    'required_array_keys' => ':attributfältet måste innehålla poster för: :värden.',
    'required_if_accepted' => ':attributfältet krävs när :other accepteras.',
    'required_if_declined' => ':attributfältet krävs när :other avvisas.',
    'starts_with' => ':attributfältet måste börja med något av följande: :values.',
    'uppercase' => ':attributfältet måste vara versaler.',
    'ulid' => 'Fältet :attribute måste vara ett giltigt ULID.',
    'uuid' => 'Fältet :attribute måste vara ett giltigt UUID.',
];
