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

    'accepted' => ':attribute бояд қабул карда шавад.',
    'active_url' => ':attribute URL дуруст нест.',
    'after' => ':attribute бояд санаи пас аз :date бошад.',
    'after_or_equal' => ':attribute бояд санаи баъд аз :date ё баробар бошад.',
    'alpha' => ':attribute метавонад танҳо ҳарфҳоро дар бар гирад.',
    'alpha_dash' => ':attribute метавонад танҳо ҳарфҳо, рақамҳо ва тире дошта бошад.',
    'alpha_num' => ':attribute метавонад танҳо ҳарфҳо ва рақамҳоро дар бар гирад.',
    'array' => ':attribute бояд массив бошад.',
    'before' => ':attribute бояд санаи пеш аз :date бошад.',
    'before_or_equal' => ':attribute бояд санаи пеш аз :date бошад ё баробар бошад.',
    'between' => [
        'numeric' => ':attribute бояд дар байни :min ва :max бошад.',
        'file' => ':attribute бояд дар байни :min ва :max килобайт бошад.',
        'string' => ':attribute бояд дар байни аломатҳои :min ва :max бошад.',
        'array' => ':attribute бояд байни :min ва :max бошад.',
    ],
    'boolean' => 'Майдони :attribute бояд дуруст ё нодуруст бошад.',
    'confirmed' => 'Тасдиқи :attribute мувофиқат намекунад.',
    'date' => ':attribute санаи дуруст нест.',
    'date_format' => ':attribute ба формати :format мувофиқат намекунад.',
    'different' => ':attribute ва :other бояд гуногун бошанд.',
    'digits' => ':attribute бояд рақамҳои :digits бошанд.',
    'digits_between' => ':attribute бояд байни рақамҳои :min ва :max бошад.',
    'dimensions' => ':attribute андозаҳои тасвири нодуруст дорад.',
    'distinct' => 'Майдони :attribute арзиши такрорӣ дорад.',
    'email' => ':attribute бояд суроғаи почтаи электронии дуруст бошад.',
    'exists' => ':attribute интихобшуда нодуруст аст.',
    'file' => ':attribute бояд файл бошад.',
    'filled' => 'Майдони :attribute бояд арзиш дошта бошад.',
    'gt' => [
        'numeric' => ':attribute бояд аз :value бузургтар бошад.',
        'file' => ':attribute бояд аз :value килобайт зиёд бошад.',
        'string' => ':attribute бояд аз аломатҳои :value зиёдтар бошад.',
        'array' => ':attribute бояд зиёда аз ҷузъҳои :value дошта бошад.',
    ],
    'gte' => [
        'numeric' => ':attribute бояд аз :value зиёд ё баробар бошад.',
        'file' => ':attribute бояд аз :value килобайт зиёд ё баробар бошад.',
        'string' => ':attribute бояд аз аломатҳои :value зиёдтар ё баробар бошад.',
        'array' => ':attribute бояд ҷузъҳои :value ё бештар дошта бошад.',
    ],
    'image' => ':attribute бояд тасвир бошад.',
    'in' => ':attribute интихобшуда нодуруст аст.',
    'in_array' => 'Майдони :attribute дар :other вуҷуд надорад.',
    'integer' => ':attribute бояд адади бутун бошад.',
    'ip' => ':attribute бояд суроғаи дурусти IP бошад.',
    'ipv4' => ':attribute бояд суроғаи дурусти IPv4 бошад.',
    'ipv6' => ':attribute бояд суроғаи дурусти IPv6 бошад.',
    'json' => ':attribute бояд сатри дурусти JSON бошад.',
    'lt' => [
        'numeric' => ':attribute бояд аз :value камтар бошад.',
        'file' => ':attribute бояд аз :value килобайт камтар бошад.',
        'string' => ':attribute бояд камтар аз аломатҳои :value бошад.',
        'array' => ':attribute бояд камтар аз ҷузъҳои :value дошта бошад.',
    ],
    'lte' => [
        'numeric' => ':attribute бояд аз :value камтар ё баробар бошад.',
        'file' => ':attribute бояд аз :value килобайт камтар ё баробар бошад.',
        'string' => ':attribute бояд аз аломатҳои :value камтар ё баробар бошад.',
        'array' => ':attribute набояд аз ҷузъҳои :value зиёд бошад.',
    ],
    'max' => [
        'numeric' => ':attribute метавонад аз :max зиёд набошад.',
        'file' => ':attribute метавонад аз :max килобайт зиёд набошад.',
        'string' => ':attribute набояд аз аломатҳои :max зиёд бошад.',
        'array' => ':attribute метавонад аз ҷузъҳои :max зиёд набошад.',
    ],
    'mimes' => ':attribute бояд файли навъи :values бошад.',
    'mimetypes' => ':attribute бояд файли навъи :values бошад.',
    'min' => [
        'numeric' => ':attribute бояд ҳадди аққал :min бошад.',
        'file' => ':attribute бояд ҳадди аққал :min килобайт бошад.',
        'string' => ':attribute бояд ҳадди аққал аломатҳои :min бошад.',
        'array' => ':attribute бояд ҳадди аққал ҷузъҳои :min дошта бошад.',
    ],
    'not_in' => ':attribute интихобшуда нодуруст аст.',
    'not_regex' => 'Формати :attribute нодуруст аст.',
    'numeric' => ':attribute бояд рақам бошад.',
    'present' => 'Майдони :attribute бояд мавҷуд бошад.',
    'regex' => 'Формати :attribute нодуруст аст.',
    'required' => 'Майдони :attribute лозим аст.',
    'required_if' => 'Майдони :attribute вақте лозим аст, ки :other :value бошад.',
    'required_unless' => 'Майдони :attribute талаб карда мешавад, агар :other дар :values набошад.',
    'required_with' => 'Майдони :attribute ҳангоми мавҷудияти :values талаб карда мешавад.',
    'required_with_all' => 'Майдони :attribute ҳангоми мавҷудияти :values талаб карда мешавад.',
    'required_without' => 'Майдони :attribute ҳангоми мавҷуд набудани :values талаб карда мешавад.',
    'required_without_all' => 'Майдони :attribute ҳангоме лозим аст, ки ҳеҷ яке аз :values мавҷуд набошад.',
    'same' => ':attribute ва :other бояд мувофиқат кунанд.',
    'size' => [
        'numeric' => ':attribute бояд :size бошад.',
        'file' => ':attribute бояд :size килобайт бошад.',
        'string' => ':attribute бояд аломатҳои :size бошад.',
        'array' => ':attribute бояд ҷузъҳои :size дошта бошад.',
    ],
    'string' => ':attribute бояд сатр бошад.',
    'timezone' => ':attribute бояд минтақаи дуруст бошад.',
    'unique' => ':attribute аллакай гирифта шудааст.',
    'uploaded' => ':attribute боргузорӣ нашуд.',
    'url' => 'Формати :attribute нодуруст аст.',

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
            'rule-name' => 'паёми фармоишӣ',
        ],
        'g-recaptcha-response' => [
            'required' => 'Лутфан тасдиқ кунед, ки шумо робот нестед.',
            'captcha' => 'Хатогии Captcha! дертар бори дигар кӯшиш кунед ё бо администратори сайт тамос гиред.',
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



    'accepted_if' => 'Майдони :attribute бояд қабул карда шавад, вақте ки : other :value аст.',
    'ascii' => 'Майдони :attribute бояд танҳо аломатҳо ва аломатҳои алифбои рақамии як байтӣ дошта бошад.',
    'can' => 'Майдони :attribute дорои арзиши беиҷозат аст.',
    'contains' => 'Майдони :attribute арзиши зарурӣ надорад.',
    'current_password' => 'Парол нодуруст аст.',
    'date_equals' => 'Майдони :attribute бояд санаи баробар ба :date бошад.',
    'decimal' => 'Майдони :attribute бояд дорои ададҳои даҳии даҳӣ бошад.',
    'declined' => 'Майдони :attribute бояд рад карда шавад.',
    'declined_if' => 'Майдони :attribute бояд рад карда шавад, вақте ки : other :value аст.',
    'doesnt_end_with' => 'Майдони :attribute набояд бо яке аз зерин хотима ёбад: :арзишҳо.',
    'doesnt_start_with' => 'Майдони :attribute набояд бо яке аз зерин оғоз шавад: :қиматҳо.',
    'ends_with' => 'Майдони :attribute бояд бо яке аз зерин хотима ёбад: :арзишҳо.',
    'enum' => 'Аттрибути интихобшудаи :беэътибор аст.',
    'extensions' => 'Майдони :attribute бояд яке аз васеъшавии зеринро дошта бошад: :value.',
    'hex_color' => 'Майдони :attribute бояд ранги шонздаҳӣ бошад.',
    'list' => 'Майдони :attribute бояд рӯйхат бошад.',
    'lowercase' => 'Майдони :attribute бояд хурд бошад.',
    'mac_address' => 'Майдони :attribute бояд суроғаи дурусти MAC бошад.',
    'max_digits' => 'Майдони :attribute набояд аз рақамҳои :max зиёд бошад.',
    'min_digits' => 'Майдони :attribute бояд ҳадди аққал рақамҳои :min дошта бошад.',
    'missing' => 'Майдони :attribute бояд мавҷуд набошад.',
    'missing_if' => 'Майдони :attribute ҳангоме ки :diger :value аст, бояд мавҷуд набошад.',
    'missing_unless' => 'Майдони :attribute бояд мавҷуд набошад, агар :diger :value набошад.',
    'missing_with' => 'Майдони :attribute ҳангоме ки арзишҳо мавҷуд бошанд, бояд мавҷуд набошад.',
    'missing_with_all' => 'Ҳангоми мавҷуд будани арзишҳои : майдони :attribute бояд мавҷуд набошад.',
    'multiple_of' => 'Майдони :attribute бояд чандкаратаи :value бошад.',
    'password' => [
        'letters' => 'Майдони :attribute бояд ҳадди аққал як ҳарф дошта бошад.',
        'mixed' => 'Майдони :attribute бояд ҳадди аққал як ҳарфи калон ва як ҳарфи хурд дошта бошад.',
        'numbers' => 'Майдони :attribute бояд ҳадди аққал як ададро дар бар гирад.',
        'symbols' => 'Майдони :attribute бояд ҳадди аққал як аломат дошта бошад.',
        'uncompromised' => 'Аттрибути додашуда дар ихроҷи маълумот пайдо шудааст. Лутфан :атрибути дигарро интихоб кунед.',
    ],
    'present_if' => 'Майдони :attribute бояд мавҷуд бошад, вақте ки : other :value аст.',
    'present_unless' => 'Майдони :attribute бояд мавҷуд бошад, агар :diger :value набошад.',
    'present_with' => 'Майдони :attribute бояд ҳангоми мавҷуд будани арзишҳои : мавҷуд бошад.',
    'present_with_all' => 'Майдони :attribute бояд ҳангоми мавҷуд будани арзишҳои : мавҷуд бошад.',
    'prohibited' => 'Майдони :attribute манъ аст.',
    'prohibited_if' => 'Майдони :attribute манъ аст, вақте ки :diger :value аст.',
    'prohibited_unless' => 'Майдони :attribute манъ аст, агар дар :diger дар арзишҳо набошад.',
    'prohibits' => 'Майдони :attribute мавҷуд будани :дигарро манъ мекунад.',
    'required_array_keys' => 'Майдони :attribute бояд дорои сабтҳо барои: арзишҳо бошад.',
    'required_if_accepted' => 'Майдони :attribute ҳангоме лозим аст, ки : other қабул карда шавад.',
    'required_if_declined' => 'Майдони :attribute вақте талаб карда мешавад, ки : other рад карда шавад.',
    'starts_with' => 'Майдони :attribute бояд бо яке аз зерин оғоз шавад: :қиматҳо.',
    'uppercase' => 'Майдони :attribute бояд бо ҳарфи калон бошад.',
    'ulid' => 'Майдони :attribute бояд ULID дуруст бошад.',
    'uuid' => 'Майдони :attribute бояд UUID дуруст бошад.',
];
