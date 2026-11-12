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

    'accepted' => ':attribute кабул ителергә тиеш.',
    'active_url' => ':attribute дөрес URL түгел.',
    'after' => ':attribute :dateдан соң дата булырга тиеш.',
    'after_or_equal' => ':attribute :dateдан соң яки тигез булырга тиеш.',
    'alpha' => ':attribute хәрефләр генә булырга мөмкин.',
    'alpha_dash' => ':attribute хәрефләр, саннар һәм сызыклар гына булырга мөмкин.',
    'alpha_num' => ':attribute хәрефләр һәм саннарны гына үз эченә ала.',
    'array' => ':attribute массив булырга тиеш.',
    'before' => ':attribute :date алдыннан дата булырга тиеш.',
    'before_or_equal' => ':attribute :date алдыннан дата булырга тиеш.',
    'between' => [
        'numeric' => ':attribute :min белән :max арасында булырга тиеш.',
        'file' => ':attribute :min белән :max килобайт арасында булырга тиеш.',
        'string' => ':attribute :min һәм :max символлары арасында булырга тиеш.',
        'array' => ':attribute :min белән :max әйберләре арасында булырга тиеш.',
    ],
    'boolean' => ':attribute кыры дөрес яки ялган булырга тиеш.',
    'confirmed' => ':attribute раслау туры килми.',
    'date' => ':attribute дөрес дата түгел.',
    'date_format' => ':attribute :format форматына туры килми.',
    'different' => ':attribute һәм :other төрле булырга тиеш.',
    'digits' => ':attribute :digits саннары булырга тиеш.',
    'digits_between' => ':attribute :min белән :max саннары арасында булырга тиеш.',
    'dimensions' => ':attribute дөрес булмаган рәсем үлчәмнәренә ия.',
    'distinct' => ':attribute кырының икеләтә кыйммәте бар.',
    'email' => ':attribute дөрес электрон почта адресы булырга тиеш.',
    'exists' => 'Сайланган :attribute дөрес түгел.',
    'file' => ':attribute файл булырга тиеш.',
    'filled' => ':attribute кыры кыйммәткә ия булырга тиеш.',
    'gt' => [
        'numeric' => ':attribute :valueдан зуррак булырга тиеш.',
        'file' => ':attribute :value килобайттан зуррак булырга тиеш.',
        'string' => ':attribute :value символларыннан зуррак булырга тиеш.',
        'array' => ':attribute :value-тан артык булырга тиеш.',
    ],
    'gte' => [
        'numeric' => ':attribute :valueдан зуррак яки тигез булырга тиеш.',
        'file' => ':attribute :value килобайттан зуррак яки тигез булырга тиеш.',
        'string' => ':attribute :value символларыннан зуррак яки тигез булырга тиеш.',
        'array' => ':attribute :value әйберләре яки күбрәк булырга тиеш.',
    ],
    'image' => ':attribute рәсем булырга тиеш.',
    'in' => 'Сайланган :attribute дөрес түгел.',
    'in_array' => ':attribute кыры :otherда юк.',
    'integer' => ':attribute бөтен сан булырга тиеш.',
    'ip' => ':attribute дөрес IP адресы булырга тиеш.',
    'ipv4' => ':attribute дөрес IPv4 адресы булырга тиеш.',
    'ipv6' => ':attribute дөрес IPv6 адресы булырга тиеш.',
    'json' => ':attribute дөрес JSON сызыгы булырга тиеш.',
    'lt' => [
        'numeric' => ':attribute :valueдан ким булырга тиеш.',
        'file' => ':attribute :value килобайттан ким булырга тиеш.',
        'string' => ':attribute :value символларыннан ким булырга тиеш.',
        'array' => ':attribute :value әйберләреннән ким булырга тиеш.',
    ],
    'lte' => [
        'numeric' => ':attribute :valueдан ким яки тигез булырга тиеш.',
        'file' => ':attribute :value килобайттан ким яки тигез булырга тиеш.',
        'string' => ':attribute :value символларыннан ким яки тигез булырга тиеш.',
        'array' => ':attribute :valueдан артык булырга тиеш түгел.',
    ],
    'max' => [
        'numeric' => ':attribute :maxдан зур булмаска мөмкин.',
        'file' => ':attribute :max килобайттан зур булмаска мөмкин.',
        'string' => ':attribute :max символларыннан зуррак булмаска мөмкин.',
        'array' => ':attribute :max әйберләреннән артык булмаска мөмкин.',
    ],
    'mimes' => ':attribute тип файл булырга тиеш: :values.',
    'mimetypes' => ':attribute тип файл булырга тиеш: :values.',
    'min' => [
        'numeric' => ':attribute ким дигәндә :min булырга тиеш.',
        'file' => ':attribute ким дигәндә :min килобайт булырга тиеш.',
        'string' => ':attribute ким дигәндә :min символлары булырга тиеш.',
        'array' => ':attribute ким дигәндә :min әйберләре булырга тиеш.',
    ],
    'not_in' => 'Сайланган :attribute дөрес түгел.',
    'not_regex' => ':attribute форматы дөрес түгел.',
    'numeric' => ':attribute сан булырга тиеш.',
    'present' => ':attribute кыры булырга тиеш.',
    'regex' => ':attribute форматы дөрес түгел.',
    'required' => ':attribute кыры кирәк.',
    'required_if' => ':other :value булганда :attribute кыры кирәк.',
    'required_unless' => ':other :values булмаса, :attribute кыры кирәк.',
    'required_with' => ':values булганда :attribute кыры кирәк.',
    'required_with_all' => ':values булганда :attribute кыры кирәк.',
    'required_without' => ':values булмаганда :attribute кыры кирәк.',
    'required_without_all' => ':attribute кыры :values булмаганда кирәк.',
    'same' => ':attribute һәм :other туры килергә тиеш.',
    'size' => [
        'numeric' => ':attribute :size булырга тиеш.',
        'file' => ':attribute :size килобайт булырга тиеш.',
        'string' => ':attribute :size символлары булырга тиеш.',
        'array' => ':attribute :size әйберләрен үз эченә алырга тиеш.',
    ],
    'string' => ':attribute тез булырга тиеш.',
    'timezone' => ':attribute дөрес зона булырга тиеш.',
    'unique' => ':attribute алынды инде.',
    'uploaded' => ':attribute йөкли алмады.',
    'url' => ':attribute форматы дөрес түгел.',

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
            'rule-name' => 'махсус хәбәр',
        ],
        'g-recaptcha-response' => [
            'required' => 'Зинһар, сезнең робот түгеллеген тикшерегез.',
            'captcha' => 'Captcha хата! соңрак кабатлап карагыз яки сайт администраторы белән элемтәгә керегез.',
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



    'accepted_if' => ': Атрибут кыры кабул ителергә тиеш: бүтән: кыйммәт.',
    'ascii' => ':: Атрибут кырында бер байт хәреф саннары һәм символлары булырга тиеш.',
    'can' => ': Атрибут кырында рөхсәтсез кыйммәт бар.',
    'contains' => ': Атрибут кыры кирәкле кыйммәтне югалта.',
    'current_password' => 'Серсүз дөрес түгел.',
    'date_equals' => ': Атрибут кыры: датага тигез дата булырга тиеш.',
    'decimal' => ': Атрибут кыры булырга тиеш: унлыклы унлыклы урыннар.',
    'declined' => ': Атрибут кыры кире кагылырга тиеш.',
    'declined_if' => ': Атрибут кыры кире кагылырга тиеш: бүтән: кыйммәт.',
    'doesnt_end_with' => ': Атрибут кыры түбәндәгеләрнең берсе белән тәмамланырга тиеш түгел: кыйммәтләр.',
    'doesnt_start_with' => ': Атрибут кыры түбәндәгеләрнең берсе белән башланырга тиеш түгел: кыйммәтләр.',
    'ends_with' => ': Атрибут кыры түбәндәгеләрнең берсе белән тәмамланырга тиеш: кыйммәтләр.',
    'enum' => 'Сайланган: атрибут дөрес түгел.',
    'extensions' => ': Атрибут кырында түбәндәге киңәйтүләрнең берсе булырга тиеш: кыйммәтләр.',
    'hex_color' => ': Атрибут кыры дөрес алты почмаклы төс булырга тиеш.',
    'list' => ': Атрибут кыры исемлек булырга тиеш.',
    'lowercase' => ': Атрибут кыры кечкенә хәреф булырга тиеш.',
    'mac_address' => ':: Атрибут кыры дөрес MAC адресы булырга тиеш.',
    'max_digits' => ': Атрибут кыры күбрәк булырга тиеш: максимум саннар.',
    'min_digits' => ': Атрибут кыры ким дигәндә булырга тиеш: мин саннар.',
    'missing' => ': Атрибут кыры юкка чыгарга тиеш.',
    'missing_if' => ': Атрибут кыры юкка чыгарга тиеш: бүтән: кыйммәт.',
    'missing_unless' => ': Атрибут кыры юкка чыгарга тиеш: бүтән: кыйммәт.',
    'missing_with' => ': Атрибут кыры юкка чыгарга тиеш: кыйммәтләр булганда.',
    'missing_with_all' => ': Атрибут кыры юкка чыгарга тиеш: кыйммәтләр булганда.',
    'multiple_of' => ': Атрибут кыры күп булырга тиеш: кыйммәт.',
    'password' => [
        'letters' => ': Атрибут кырында ким дигәндә бер хәреф булырга тиеш.',
        'mixed' => ': Атрибут кырында ким дигәндә бер баш хәреф һәм бер кечкенә хәреф булырга тиеш.',
        'numbers' => ': Атрибут кырында ким дигәндә бер сан булырга тиеш.',
        'symbols' => ': Атрибут кырында ким дигәндә бер символ булырга тиеш.',
        'uncompromised' => 'Бирелгән: атрибут мәгълүмат агып чыкканда барлыкка килде. Зинһар, бүтәнне сайлагыз: атрибут.',
    ],
    'present_if' => ': Атрибут кыры булганда булырга тиеш: бүтәннәр: кыйммәт.',
    'present_unless' => ': Атрибут кыры булырга тиеш: бүтән: кыйммәт.',
    'present_with' => ': Атрибут кыры: кыйммәтләр булганда булырга тиеш.',
    'present_with_all' => ': Атрибут кыры: кыйммәтләр булганда булырга тиеш.',
    'prohibited' => ': Атрибут кыры тыелган.',
    'prohibited_if' => ': Атрибут кыры тыелган: бүтән: кыйммәт.',
    'prohibited_unless' => ': Атрибут кыры тыелган: бүтән булмаса: кыйммәтләр.',
    'prohibits' => ':: Атрибут кыры тыя: бүтәннәр булудан.',
    'required_array_keys' => ': Атрибут кырында :: кыйммәтләр өчен язмалар булырга тиеш.',
    'required_if_accepted' => ': Атрибут кыры кирәк булганда: бүтәннәр кабул ителгән.',
    'required_if_declined' => ': Атрибут кыры кирәк булганда: бүтән кире кагылган.',
    'starts_with' => ': Атрибут кыры түбәндәгеләрнең берсе белән башланырга тиеш: кыйммәтләр.',
    'uppercase' => ': Атрибут кыры зур хәреф булырга тиеш.',
    'ulid' => ': Атрибут кыры дөрес ULID булырга тиеш.',
    'uuid' => ': Атрибут кыры дөрес UUID булырга тиеш.',
];
