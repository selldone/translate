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

    'accepted' => ':attribute چوقۇم قوبۇل قىلىنىشى كېرەك.',
    'active_url' => ':attribute ئىناۋەتلىك URL ئەمەس.',
    'after' => ':attribute چوقۇم :date دىن كېيىنكى ۋاقىت بولۇشى كېرەك.',
    'after_or_equal' => ':attribute چوقۇم :date دىن كېيىنكى ياكى تەڭ بولۇشى كېرەك.',
    'alpha' => ':attribute پەقەت ھەرپلەرنىلا ئۆز ئىچىگە ئالىدۇ.',
    'alpha_dash' => ':attribute پەقەت ھەرپ ، سان ۋە سىزىقنى ئۆز ئىچىگە ئالىدۇ.',
    'alpha_num' => ':attribute پەقەت ھەرپ ۋە سانلارنىلا ئۆز ئىچىگە ئالىدۇ.',
    'array' => ':attribute چوقۇم بىر سانلار گۇرپىسى بولۇشى كېرەك.',
    'before' => ':attribute چوقۇم :date دىن بۇرۇن بولۇشى كېرەك.',
    'before_or_equal' => ':attribute چوقۇم :date دىن بۇرۇن ياكى ئۇنىڭغا تەڭ بولۇشى كېرەك.',
    'between' => [
        'numeric' => ':attribute چوقۇم :min بىلەن :max ئارىلىقىدا بولۇشى كېرەك.',
        'file' => ':attribute چوقۇم :min بىلەن :max كىلوبايت ئارىلىقىدا بولۇشى كېرەك.',
        'string' => ':attribute چوقۇم :min بىلەن :max ھەرپلىرى ئارىسىدا بولۇشى كېرەك.',
        'array' => ':attribute چوقۇم :min بىلەن :max تۈرلىرى ئارىسىدا بولۇشى كېرەك.',
    ],
    'boolean' => ':attribute مەيدانى چوقۇم راست ياكى يالغان بولۇشى كېرەك.',
    'confirmed' => ':attribute جەزملەشتۈرۈش ماس كەلمەيدۇ.',
    'date' => ':attribute ئىناۋەتلىك ۋاقىت ئەمەس.',
    'date_format' => ':attribute :format فورماتىغا ماس كەلمەيدۇ.',
    'different' => ':attribute بىلەن :other ئوخشىماسلىقى كېرەك.',
    'digits' => ':attribute چوقۇم :digits خانىسى بولۇشى كېرەك.',
    'digits_between' => ':attribute چوقۇم :min بىلەن :max رەقەم ئارىسىدا بولۇشى كېرەك.',
    'dimensions' => ':attribute رەسىمنىڭ ئىناۋەتسىز.',
    'distinct' => ':attribute مەيدانىنىڭ كۆپەيتىلگەن قىممىتى بار.',
    'email' => ':attribute چوقۇم ئۈنۈملۈك ئېلېكترونلۇق خەت ئادرېسى بولۇشى كېرەك.',
    'exists' => 'تاللانغان :attribute ئىناۋەتسىز.',
    'file' => ':attribute چوقۇم ھۆججەت بولۇشى كېرەك.',
    'filled' => ':attribute مەيدانىنىڭ قىممىتى بولۇشى كېرەك.',
    'gt' => [
        'numeric' => ':attribute چوقۇم :value دىن چوڭ بولۇشى كېرەك.',
        'file' => ':attribute چوقۇم :value كىلوبايتتىن چوڭ بولۇشى كېرەك.',
        'string' => ':attribute چوقۇم :value ھەرپتىن چوڭ بولۇشى كېرەك.',
        'array' => ':attribute چوقۇم :value دىن كۆپ بولۇشى كېرەك.',
    ],
    'gte' => [
        'numeric' => ':attribute چوقۇم :value دىن چوڭ ياكى تەڭ بولۇشى كېرەك.',
        'file' => ':attribute چوقۇم :value كىلوبايتتىن چوڭ ياكى تەڭ بولۇشى كېرەك.',
        'string' => ':attribute چوقۇم :value ھەرپتىن چوڭ ياكى تەڭ بولۇشى كېرەك.',
        'array' => ':attribute چوقۇم :value تۈرلىرى ياكى ئۇنىڭدىن يۇقىرى بولۇشى كېرەك.',
    ],
    'image' => ':attribute چوقۇم بىر رەسىم بولۇشى كېرەك.',
    'in' => 'تاللانغان :attribute ئىناۋەتسىز.',
    'in_array' => ':attribute مەيدانى :other دا مەۋجۇت ئەمەس.',
    'integer' => ':attribute چوقۇم پۈتۈن سان بولۇشى كېرەك.',
    'ip' => ':attribute چوقۇم ئىناۋەتلىك IP ئادرېسى بولۇشى كېرەك.',
    'ipv4' => ':attribute چوقۇم ئۈنۈملۈك IPv4 ئادرېسى بولۇشى كېرەك.',
    'ipv6' => ':attribute چوقۇم ئۈنۈملۈك IPv6 ئادرېسى بولۇشى كېرەك.',
    'json' => ':attribute چوقۇم ئۈنۈملۈك JSON تىزمىسى بولۇشى كېرەك.',
    'lt' => [
        'numeric' => ':attribute چوقۇم :value دىن تۆۋەن بولۇشى كېرەك.',
        'file' => ':attribute چوقۇم :value كىلوبايتتىن تۆۋەن بولۇشى كېرەك.',
        'string' => ':attribute چوقۇم :value ھەرپتىن تۆۋەن بولۇشى كېرەك.',
        'array' => ':attribute چوقۇم :value دىن تۆۋەن بولۇشى كېرەك.',
    ],
    'lte' => [
        'numeric' => ':attribute چوقۇم :value دىن تۆۋەن ياكى تەڭ بولۇشى كېرەك.',
        'file' => ':attribute چوقۇم :value كىلوبايتتىن تۆۋەن ياكى تەڭ بولۇشى كېرەك.',
        'string' => ':attribute چوقۇم :value ھەرپتىن ئاز ياكى تەڭ بولۇشى كېرەك.',
        'array' => ':attribute چوقۇم :value دىن ئېشىپ كەتمەسلىكى كېرەك.',
    ],
    'max' => [
        'numeric' => ':attribute :max دىن چوڭ بولماسلىقى مۇمكىن.',
        'file' => ':attribute :max كىلوبايتتىن چوڭ بولماسلىقى مۇمكىن.',
        'string' => ':attribute :max ھەرپتىن چوڭ بولماسلىقى مۇمكىن.',
        'array' => ':attribute نىڭ :max دىن ئېشىپ كەتمەسلىكى مۇمكىن.',
    ],
    'mimes' => ':attribute چوقۇم بىر ھۆججەت بولۇشى كېرەك: :values.',
    'mimetypes' => ':attribute چوقۇم بىر ھۆججەت بولۇشى كېرەك: :values.',
    'min' => [
        'numeric' => ':attribute كەم دېگەندە :min بولۇشى كېرەك.',
        'file' => ':attribute كەم دېگەندە :min كىلوبايت بولۇشى كېرەك.',
        'string' => ':attribute كەم دېگەندە :min ھەرپ بولۇشى كېرەك.',
        'array' => ':attribute كەم دېگەندە :min تۈرلىرى بولۇشى كېرەك.',
    ],
    'not_in' => 'تاللانغان :attribute ئىناۋەتسىز.',
    'not_regex' => ':attribute فورماتى ئىناۋەتسىز.',
    'numeric' => ':attribute چوقۇم بىر سان بولۇشى كېرەك.',
    'present' => ':attribute مەيدانى چوقۇم بولۇشى كېرەك.',
    'regex' => ':attribute فورماتى ئىناۋەتسىز.',
    'required' => ':attribute مەيدانى تەلەپ قىلىنىدۇ.',
    'required_if' => ':other :value بولغاندا :attribute مەيدانى تەلەپ قىلىنىدۇ.',
    'required_unless' => ':other :values بولمىسا ، :attribute مەيدانى تەلەپ قىلىنىدۇ.',
    'required_with' => ':values بولغاندا :attribute مەيدانى تەلەپ قىلىنىدۇ.',
    'required_with_all' => ':values بولغاندا :attribute مەيدانى تەلەپ قىلىنىدۇ.',
    'required_without' => ':values بولمىغان ۋاقىتتا :attribute مەيدانى تەلەپ قىلىنىدۇ.',
    'required_without_all' => ':values نىڭ ھېچقايسىسى بولمىغاندا :attribute مەيدانى تەلەپ قىلىنىدۇ.',
    'same' => ':attribute بىلەن :other ماس كېلىشى كېرەك.',
    'size' => [
        'numeric' => ':attribute چوقۇم :size بولۇشى كېرەك.',
        'file' => ':attribute چوقۇم :size كىلوبايت بولۇشى كېرەك.',
        'string' => ':attribute چوقۇم :size ھەرپ بولۇشى كېرەك.',
        'array' => ':attribute چوقۇم :size تۈرلىرىنى ئۆز ئىچىگە ئېلىشى كېرەك.',
    ],
    'string' => ':attribute چوقۇم بىر قۇر بولۇشى كېرەك.',
    'timezone' => ':attribute چوقۇم ئۈنۈملۈك رايون بولۇشى كېرەك.',
    'unique' => ':attribute ئاللىقاچان ئېلىندى.',
    'uploaded' => ':attribute يۈكلىيەلمىدى.',
    'url' => ':attribute فورماتى ئىناۋەتسىز.',

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
            'rule-name' => 'ئىختىيارى ئۇچۇر',
        ],
        'g-recaptcha-response' => [
            'required' => 'سىزنىڭ ماشىنا ئادەم ئەمەسلىكىڭىزنى تەكشۈرۈپ بېقىڭ.',
            'captcha' => 'Captcha خاتالىقى! كېيىن قايتا سىناڭ ياكى تور بېكەت باشقۇرغۇچىسى بىلەن ئالاقىلىشىڭ.',
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



    'accepted_if' => ':: خاسلىق مەيدانى چوقۇم قوبۇل قىلىنىشى كېرەك: باشقا بولسا: قىممەت.',
    'ascii' => ':: خاسلىق مەيدانىدا پەقەت بىرلا بايتلىق ھەرپ-بەلگىلەر ۋە بەلگىلەر بولۇشى كېرەك.',
    'can' => ':: خاسلىق مەيدانى رۇخسەتسىز قىممەتنى ئۆز ئىچىگە ئالىدۇ.',
    'contains' => ':: خاسلىق مەيدانى ئېھتىياجلىق قىممەتنى قولدىن بېرىپ قويدى.',
    'current_password' => 'پارول خاتا.',
    'date_equals' => ':: خاسلىق مەيدانى چوقۇم چېسلاغا تەڭ كېلىدىغان چېسلا بولۇشى كېرەك.',
    'decimal' => ':: خاسلىق مەيدانى چوقۇم بولۇشى كېرەك: ئونلۇق ئونلۇق ئورۇن.',
    'declined' => ':: خاسلىق مەيدانى رەت قىلىنىشى كېرەك.',
    'declined_if' => ':: خاسلىق مەيدانى چوقۇم رەت قىلىنىشى كېرەك: باشقا بولسا: قىممەت.',
    'doesnt_end_with' => ':: خاسلىق مەيدانى تۆۋەندىكىلەرنىڭ بىرى بىلەن ئاخىرلاشماسلىقى كېرەك :: قىممەت.',
    'doesnt_start_with' => ':: خاسلىق مەيدانى تۆۋەندىكىلەرنىڭ بىرىدىن باشلىماسلىقى كېرەك :: قىممەت.',
    'ends_with' => ':: خاسلىق مەيدانى چوقۇم تۆۋەندىكى بىرسى بىلەن ئاخىرلىشىشى كېرەك: قىممەت.',
    'enum' => 'تاللانغان: خاسلىق ئىناۋەتسىز.',
    'extensions' => ':: خاسلىق مەيدانىدا تۆۋەندىكى كېڭەيتىلمىلەر بولۇشى كېرەك: قىممەت.',
    'hex_color' => ':: خاسلىق مەيدانى چوقۇم ئۈنۈملۈك ئالتە تەرەپلىك رەڭ بولۇشى كېرەك.',
    'list' => ': خاسلىق مەيدانى چوقۇم بىر تىزىملىك بولۇشى كېرەك.',
    'lowercase' => ':: خاسلىق مەيدانى چوقۇم كىچىك ھەرپ بولۇشى كېرەك.',
    'mac_address' => ':: خاسلىق مەيدانى چوقۇم ئىناۋەتلىك MAC ئادرېسى بولۇشى كېرەك.',
    'max_digits' => ':: خاسلىق مەيدانىدىن ئېشىپ كەتمەسلىكى كېرەك: ئەڭ چوڭ رەقەم.',
    'min_digits' => ':: خاسلىق مەيدانىدا كەم دېگەندە: min خانىسى بولۇشى كېرەك.',
    'missing' => ':: خاسلىق مەيدانى كەم بولسا كېرەك.',
    'missing_if' => ':: خاسلىق مەيدانى كەم بولسا كېرەك: باشقا بولسا: قىممەت.',
    'missing_unless' => ': خاسلىق مەيدانى كەم بولسا كېرەك: باشقا بولسا: قىممەت.',
    'missing_with' => ': خاسلىق بولغاندا چوقۇم خاسلىق مەيدانى كەم بولۇشى كېرەك.',
    'missing_with_all' => ':: خاسلىق بولغاندا چوقۇم خاسلىق مەيدانى كەم بولۇشى كېرەك.',
    'multiple_of' => ':: خاسلىق مەيدانى چوقۇم بىر قانچە قىممەت بولۇشى كېرەك.',
    'password' => [
        'letters' => ':: خاسلىق مەيدانىدا كەم دېگەندە بىر ھەرپ بولۇشى كېرەك.',
        'mixed' => ':: خاسلىق رايونىدا كەم دېگەندە بىر چوڭ ھەرپ ۋە بىر كىچىك ھەرپ بولۇشى كېرەك.',
        'numbers' => ':: خاسلىق مەيدانى كەم دېگەندە بىر ساننى ئۆز ئىچىگە ئېلىشى كېرەك.',
        'symbols' => ':: خاسلىق مەيدانىدا كەم دېگەندە بىر بەلگە بولۇشى كېرەك.',
        'uncompromised' => 'بېرىلگەن: خاسلىق سانلىق مەلۇمات ئاشكارىلىنىپ كەتتى. باشقىچە: خاسلىقنى تاللاڭ.',
    ],
    'present_if' => ': خاسلىق مەيدانى چوقۇم بولۇشى كېرەك: باشقا بولسا: قىممەت.',
    'present_unless' => ': خاسلىق مەيدانى چوقۇم بولۇشى كېرەك: باشقا بولسا: قىممەت.',
    'present_with' => ':: خاسلىق بولغاندا چوقۇم خاسلىق مەيدانى بولۇشى كېرەك.',
    'present_with_all' => ':: خاسلىق بولغاندا چوقۇم خاسلىق مەيدانى بولۇشى كېرەك.',
    'prohibited' => ': خاسلىق مەيدانى چەكلەنگەن.',
    'prohibited_if' => ':: خاسلىق مەيدانى چەكلەنگەندە: باشقا بولسا: قىممەت.',
    'prohibited_unless' => ': خاسلىق مەيدانى چەكلىنىدۇ: باشقا بولسا: قىممەت.',
    'prohibits' => ':: خاسلىق مەيدانى چەكلەيدۇ: باشقالارنىڭ ھازىر بولۇشىنى چەكلەيدۇ.',
    'required_array_keys' => ':: خاسلىق بۆلىكىدە چوقۇم: قىممەتلەر بار.',
    'required_if_accepted' => ': خاسلىق مەيدانى تەلەپ قىلىنىدۇ: باشقالىرى قوبۇل قىلىنغاندا.',
    'required_if_declined' => ':: خاسلىق مەيدانى تەلەپ قىلىنغاندا: خاسلىق مەيدانى تەلەپ قىلىنىدۇ.',
    'starts_with' => ':: خاسلىق مەيدانى چوقۇم تۆۋەندىكى بىرىدىن باشلىنىشى كېرەك: قىممەت.',
    'uppercase' => ':: خاسلىق مەيدانى چوقۇم چوڭ ھەرپ بولۇشى كېرەك.',
    'ulid' => ':: خاسلىق مەيدانى چوقۇم ئۈنۈملۈك ULID بولۇشى كېرەك.',
    'uuid' => ':: خاسلىق مەيدانى چوقۇم ئۈنۈملۈك UUID بولۇشى كېرەك.',
];
