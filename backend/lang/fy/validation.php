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

    'accepted' => 'De :attribute moat wurde akseptearre.',
    'active_url' => 'It :attribute is gjin jildige URL.',
    'after' => 'De :attribute moat in datum wêze nei :date.',
    'after_or_equal' => 'De :attribute moat in datum wêze nei of gelyk oan :date.',
    'alpha' => 'De :attribute mei allinnich letters befetsje.',
    'alpha_dash' => 'De :attribute kin allinich letters, sifers en streepkes befetsje.',
    'alpha_num' => 'De :attribute mei allinnich letters en sifers befetsje.',
    'array' => 'De :attribute moat in array wêze.',
    'before' => 'De :attribute moat in datum wêze foar :date.',
    'before_or_equal' => 'De :attribute moat in datum wêze foar of gelyk oan :date.',
    'between' => [
        'numeric' => 'De :attribute moat tusken :min en :max wêze.',
        'file' => 'De :attribute moat tusken :min en :max kilobytes wêze.',
        'string' => 'De :attribute moat tusken :min en :max karakters wêze.',
        'array' => 'De :attribute moat tusken :min en :max items hawwe.',
    ],
    'boolean' => 'It fjild :attribute moat wier of falsk wêze.',
    'confirmed' => 'De :attribute befêstiging komt net oerien.',
    'date' => 'De :attribute is gjin jildige datum.',
    'date_format' => 'De :attribute komt net oerien mei it formaat :format.',
    'different' => 'It :attribute en :other moatte oars wêze.',
    'digits' => 'It :attribute moat :digits sifers wêze.',
    'digits_between' => 'De :attribute moat tusken :min en :max sifers wêze.',
    'dimensions' => 'It :attribute hat ûnjildige ôfbyldingsdimensjes.',
    'distinct' => 'It fjild :attribute hat in dûbele wearde.',
    'email' => 'It :attribute moat in jildich e-mailadres wêze.',
    'exists' => 'It selektearre :attribute is ûnjildich.',
    'file' => 'De :attribute moat in bestân wêze.',
    'filled' => 'It fjild :attribute moat in wearde hawwe.',
    'gt' => [
        'numeric' => 'De :attribute moat grutter wêze dan :value.',
        'file' => 'De :attribute moat grutter wêze as :value kilobytes.',
        'string' => 'De :attribute moat grutter wêze as :value-tekens.',
        'array' => 'De :attribute moat mear dan :value items hawwe.',
    ],
    'gte' => [
        'numeric' => 'De :attribute moat grutter wêze as of lyk oan :value.',
        'file' => 'De :attribute moat grutter wêze as of lyk oan :value kilobytes.',
        'string' => 'De :attribute moat grutter wêze as of lyk oan :value-tekens.',
        'array' => 'De :attribute moat :value items of mear hawwe.',
    ],
    'image' => 'De :attribute moat in ôfbylding wêze.',
    'in' => 'It selektearre :attribute is ûnjildich.',
    'in_array' => 'It fjild :attribute bestiet net yn :other.',
    'integer' => 'De :attribute moat in hiel getal wêze.',
    'ip' => 'De :attribute moat in jildich IP-adres wêze.',
    'ipv4' => 'De :attribute moat in jildich IPv4-adres wêze.',
    'ipv6' => 'De :attribute moat in jildich IPv6-adres wêze.',
    'json' => 'De :attribute moat in jildige JSON-string wêze.',
    'lt' => [
        'numeric' => 'De :attribute moat minder wêze dan :value.',
        'file' => 'De :attribute moat minder wêze as :value kilobytes.',
        'string' => 'De :attribute moat minder wêze as :value-tekens.',
        'array' => 'De :attribute moat minder dan :value items hawwe.',
    ],
    'lte' => [
        'numeric' => 'De :attribute moat minder as of lyk wêze :value.',
        'file' => 'De :attribute moat minder as of lyk wêze :value kilobytes.',
        'string' => 'De :attribute moat minder as of gelyk wêze oan :value-tekens.',
        'array' => 'De :attribute moat net mear as :value items hawwe.',
    ],
    'max' => [
        'numeric' => 'De :attribute mei net grutter wêze as :max.',
        'file' => 'De :attribute mei net grutter wêze as :max kilobytes.',
        'string' => 'De :attribute meie net grutter wêze as :max tekens.',
        'array' => 'De :attribute meie net mear as :max items hawwe.',
    ],
    'mimes' => 'De :attribute moat in bestân wêze fan it type: :values.',
    'mimetypes' => 'De :attribute moat in bestân wêze fan it type: :values.',
    'min' => [
        'numeric' => 'De :attribute moat op syn minst :min wêze.',
        'file' => 'De :attribute moat op syn minst :min kilobytes wêze.',
        'string' => 'De :attribute moat op syn minst :min karakters wêze.',
        'array' => 'De :attribute moat op syn minst :min items hawwe.',
    ],
    'not_in' => 'It selektearre :attribute is ûnjildich.',
    'not_regex' => 'It :attribute-formaat is ûnjildich.',
    'numeric' => 'De :attribute moat in nûmer wêze.',
    'present' => 'It fjild :attribute moat oanwêzich wêze.',
    'regex' => 'It :attribute-formaat is ûnjildich.',
    'required' => 'It fjild :attribute is fereaske.',
    'required_if' => 'It fjild :attribute is fereaske as :other :value is.',
    'required_unless' => 'It fjild :attribute is fereaske, útsein as :other yn :values is.',
    'required_with' => 'It fjild :attribute is fereaske as :values oanwêzich is.',
    'required_with_all' => 'It fjild :attribute is fereaske as :values oanwêzich is.',
    'required_without' => 'It fjild :attribute is fereaske as :values net oanwêzich is.',
    'required_without_all' => 'It fjild :attribute is fereaske as gjin fan :values oanwêzich is.',
    'same' => 'It :attribute en :other moatte oerienkomme.',
    'size' => [
        'numeric' => 'De :attribute moat :size wêze.',
        'file' => 'De :attribute moat :size kilobytes wêze.',
        'string' => 'De :attribute moat :size karakters wêze.',
        'array' => 'De :attribute moat :size items befetsje.',
    ],
    'string' => 'De :attribute moat in tekenrige wêze.',
    'timezone' => 'De :attribute moat in jildige sône wêze.',
    'unique' => 'It :attribute is al nommen.',
    'uploaded' => 'It :attribute koe net uploade.',
    'url' => 'It :attribute-formaat is ûnjildich.',

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
            'rule-name' => 'oanpaste-berjocht',
        ],
        'g-recaptcha-response' => [
            'required' => 'Kontrolearje asjebleaft dat jo gjin robot binne.',
            'captcha' => 'Captcha flater! besykje it letter nochris of nim kontakt op mei de sideadmin.',
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



    'accepted_if' => 'It :attributefjild moat akseptearre wurde as :other :wearde is.',
    'ascii' => 'It :attribute-fjild moat allinich single-byte alfanumerike tekens en symboalen befetsje.',
    'can' => 'It :attributefjild befettet in net autorisearre wearde.',
    'contains' => 'It :attributefjild mist in fereaske wearde.',
    'current_password' => 'It wachtwurd is ferkeard.',
    'date_equals' => 'It :attribútfjild moat in datum wêze gelyk oan :date.',
    'decimal' => 'It :attributefjild moat :desimale desimale plakken hawwe.',
    'declined' => 'It :attributefjild moat ôfwiisd wurde.',
    'declined_if' => 'It :attributefjild moat wegere wurde as :other :wearde is.',
    'doesnt_end_with' => 'It :attributefjild mei net einigje op ien fan \'e folgjende: :wearden.',
    'doesnt_start_with' => 'It :attributefjild mei net begjinne mei ien fan \'e folgjende: :wearden.',
    'ends_with' => 'It :attributefjild moat einigje mei ien fan \'e folgjende: :wearden.',
    'enum' => 'It selektearre :attribute is ûnjildich.',
    'extensions' => 'It :attributefjild moat ien fan de folgjende tafoegings hawwe: :wearden.',
    'hex_color' => 'It :attributefjild moat in jildige heksadesimale kleur wêze.',
    'list' => 'It :attributefjild moat in list wêze.',
    'lowercase' => 'It :attributefjild moat lytse letters wêze.',
    'mac_address' => 'It :attributefjild moat in jildich MAC-adres wêze.',
    'max_digits' => 'It :attributefjild mei net mear as :max sifers hawwe.',
    'min_digits' => 'It :attributefjild moat op syn minst :min sifers hawwe.',
    'missing' => 'It :attributefjild moat ûntbrekke.',
    'missing_if' => 'It :attributefjild moat ûntbrekke as :other :wearde is.',
    'missing_unless' => 'It :attributefjild moat ûntbrekke, útsein as :other :wearde is.',
    'missing_with' => 'It :attributefjild moat ûntbrekke as :wearden oanwêzich is.',
    'missing_with_all' => 'It :attributefjild moat ûntbrekke as :wearden oanwêzich binne.',
    'multiple_of' => 'It :attributefjild moat in mearfâld fan :wearde wêze.',
    'password' => [
        'letters' => 'It :attributefjild moat op syn minst ien letter befetsje.',
        'mixed' => 'It :attributefjild moat op syn minst ien haadletter en ien lytse letter befetsje.',
        'numbers' => 'It :attributefjild moat op syn minst ien nûmer befetsje.',
        'symbols' => 'It :attributefjild moat op syn minst ien symboal befetsje.',
        'uncompromised' => 'It opjûne :attribút is ferskynd yn in gegevenslek. Kies asjebleaft in oar :attribute.',
    ],
    'present_if' => 'It :attributefjild moat oanwêzich wêze as :other :wearde is.',
    'present_unless' => 'It :attributefjild moat oanwêzich wêze, útsein as :other :wearde is.',
    'present_with' => 'It :attributefjild moat oanwêzich wêze as :wearden oanwêzich is.',
    'present_with_all' => 'It :attributefjild moat oanwêzich wêze as :wearden oanwêzich binne.',
    'prohibited' => 'It :attributefjild is ferbean.',
    'prohibited_if' => 'It :attributefjild is ferbean as :other :wearde is.',
    'prohibited_unless' => 'It :attributefjild is ferbean, útsein as :other yn :wearden stiet.',
    'prohibits' => 'It :attributefjild ferbiedt :other oanwêzich te wêzen.',
    'required_array_keys' => 'It :attributefjild moat ynstjoerings befetsje foar: :wearden.',
    'required_if_accepted' => 'It :attributefjild is ferplicht as :other wurdt akseptearre.',
    'required_if_declined' => 'It :attributefjild is ferplicht as :other wegere wurdt.',
    'starts_with' => 'It :attributefjild moat begjinne mei ien fan \'e folgjende: :wearden.',
    'uppercase' => 'It :attributefjild moat haadletters wêze.',
    'ulid' => 'It :attributefjild moat in jildich ULID wêze.',
    'uuid' => 'It :attributefjild moat in jildich UUID wêze.',
];
