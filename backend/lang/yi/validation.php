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

    'accepted' => 'די :attribute מוזן זיין אנגענומען.',
    'active_url' => 'די :attribute איז נישט אַ גילטיק URL.',
    'after' => 'די :attribute מוזן זיין אַ דאַטע נאָך :date.',
    'after_or_equal' => 'די :attribute מוזן זיין אַ דאַטע נאָך אָדער גלייַך צו :date.',
    'alpha' => 'די :attribute קען בלויז אַנטהאַלטן אותיות.',
    'alpha_dash' => 'די :attribute קען בלויז אַנטהאַלטן אותיות, נומערן און דאַשעס.',
    'alpha_num' => 'די :attribute קען בלויז אַנטהאַלטן אותיות און נומערן.',
    'array' => 'די :attribute מוזן זיין אַ מענגע.',
    'before' => 'די :attribute מוזן זיין אַ דאַטע איידער :date.',
    'before_or_equal' => 'די :attribute מוזן זיין אַ דאַטע איידער אָדער גלייַך צו :date.',
    'between' => [
        'numeric' => 'די :attribute מוזן זיין צווישן :min און :max.',
        'file' => 'די :attribute מוזן זיין צווישן :min און :max קילאבייט.',
        'string' => 'די :attribute מוזן זיין צווישן :min און :max אותיות.',
        'array' => 'די :attribute מוזן האָבן צווישן :min און :max זאכן.',
    ],
    'boolean' => 'די :attribute פעלד מוזן זיין אמת אָדער פאַלש.',
    'confirmed' => 'די :attribute באַשטעטיקונג קען נישט שטימען.',
    'date' => 'די :attribute איז נישט אַ גילטיק דאַטע.',
    'date_format' => 'די :attribute קען נישט גלייַכן די פֿאָרמאַט :format.',
    'different' => 'די :attribute און :other מוזן זיין אַנדערש.',
    'digits' => 'די :attribute מוזן זיין :digits דידזשאַץ.',
    'digits_between' => 'די :attribute מוזן זיין צווישן :min און :max דידזשאַץ.',
    'dimensions' => 'די :attribute האט פאַרקריפּלט בילד דימענשאַנז.',
    'distinct' => 'די :attribute פעלד האט אַ דופּליקאַט ווערט.',
    'email' => 'די :attribute מוזן זיין אַ גילטיק בליצפּאָסט אַדרעס.',
    'exists' => 'די אויסגעקליבן :attribute איז פאַרקריפּלט.',
    'file' => 'די :attribute מוזן זיין אַ טעקע.',
    'filled' => 'די :attribute פעלד מוזן האָבן אַ ווערט.',
    'gt' => [
        'numeric' => 'די :attribute מוזן זיין גרעסער ווי :value.',
        'file' => 'די :attribute מוזן זיין גרעסער ווי :value קילאבייט.',
        'string' => 'די :attribute מוזן זיין מער ווי :value אותיות.',
        'array' => 'די :attribute מוזן האָבן מער ווי :value זאכן.',
    ],
    'gte' => [
        'numeric' => 'די :attribute מוזן זיין גרעסער ווי אָדער גלייַך :value.',
        'file' => 'די :attribute מוזן זיין גרעסער ווי אָדער גלייַך :value קילאבייט.',
        'string' => 'די :attribute מוזן זיין גרעסער ווי אָדער גלייַך :value אותיות.',
        'array' => 'די :attribute מוזן האָבן :value ייטאַמז אָדער מער.',
    ],
    'image' => 'די :attribute מוזן זיין אַ בילד.',
    'in' => 'די אויסגעקליבן :attribute איז פאַרקריפּלט.',
    'in_array' => 'די :attribute פעלד איז נישט עקסיסטירט אין :other.',
    'integer' => 'די :attribute מוזן זיין אַ גאַנץ נומער.',
    'ip' => 'די :attribute מוזן זיין אַ גילטיק IP אַדרעס.',
    'ipv4' => 'די :attribute מוזן זיין אַ גילטיק IPv4 אַדרעס.',
    'ipv6' => 'די :attribute מוזן זיין אַ גילטיק IPv6 אַדרעס.',
    'json' => 'די :attribute מוזן זיין אַ גילטיק דזשסאָן שטריקל.',
    'lt' => [
        'numeric' => 'די :attribute מוזן זיין ווייניקער ווי :value.',
        'file' => 'די :attribute מוזן זיין ווייניקער ווי :value קילאבייט.',
        'string' => 'די :attribute מוזן זיין ווייניקער ווי :value אותיות.',
        'array' => 'די :attribute מוזן האָבן ווייניקער ווי :value זאכן.',
    ],
    'lte' => [
        'numeric' => 'די :attribute מוזן זיין ווייניקער ווי אָדער גלייַך :value.',
        'file' => 'די :attribute מוזן זיין ווייניקער ווי אָדער גלייַך :value קילאבייט.',
        'string' => 'די :attribute מוזן זיין ווייניקער ווי אָדער גלייַך :value אותיות.',
        'array' => 'די :attribute זאָל נישט האָבן מער ווי :value זאכן.',
    ],
    'max' => [
        'numeric' => 'די :attribute קען נישט זיין גרעסער ווי :max.',
        'file' => 'די :attribute קען נישט זיין גרעסער ווי :max קילאבייט.',
        'string' => 'די :attribute קען נישט זיין מער ווי :max אותיות.',
        'array' => 'די :attribute קען נישט האָבן מער ווי :max זאכן.',
    ],
    'mimes' => 'די :attribute מוזן זיין אַ טעקע פון טיפּ: :values.',
    'mimetypes' => 'די :attribute מוזן זיין אַ טעקע פון טיפּ: :values.',
    'min' => [
        'numeric' => 'די :attribute מוזן זיין לפּחות :min.',
        'file' => 'די :attribute מוזן זיין לפּחות :min קילאבייט.',
        'string' => 'די :attribute מוזן זיין אין מינדסטער :min אותיות.',
        'array' => 'די :attribute מוזן האָבן בייַ מינדסטער :min זאכן.',
    ],
    'not_in' => 'די אויסגעקליבן :attribute איז פאַרקריפּלט.',
    'not_regex' => 'די :attribute פֿאָרמאַט איז פאַרקריפּלט.',
    'numeric' => 'די :attribute מוזן זיין אַ נומער.',
    'present' => 'די :attribute פעלד מוזן זיין פאָרשטעלן.',
    'regex' => 'די :attribute פֿאָרמאַט איז פאַרקריפּלט.',
    'required' => 'די :attribute פעלד איז פארלאנגט.',
    'required_if' => 'די :attribute פעלד איז פארלאנגט ווען :other איז :value.',
    'required_unless' => 'די :attribute פעלד איז פארלאנגט סייַדן :other איז אין :values.',
    'required_with' => 'די :attribute פעלד איז פארלאנגט ווען :values איז פאָרשטעלן.',
    'required_with_all' => 'די :attribute פעלד איז פארלאנגט ווען :values איז פאָרשטעלן.',
    'required_without' => 'די :attribute פעלד איז פארלאנגט ווען :values איז נישט פאָרשטעלן.',
    'required_without_all' => 'די :attribute פעלד איז פארלאנגט ווען קיינער פון :values איז נישט פאָרשטעלן.',
    'same' => 'די :attribute און :other מוזן גלייַכן.',
    'size' => [
        'numeric' => 'די :attribute מוזן זיין :size.',
        'file' => 'די :attribute מוזן זיין :size קילאבייט.',
        'string' => 'די :attribute מוזן זיין :size אותיות.',
        'array' => 'די :attribute מוזן אַנטהאַלטן :size זאכן.',
    ],
    'string' => 'די :attribute מוזן זיין אַ שטריקל.',
    'timezone' => 'די :attribute מוזן זיין אַ גילטיק זאָנע.',
    'unique' => 'די :attribute איז שוין גענומען.',
    'uploaded' => 'די :attribute קען נישט צופֿעליקער.',
    'url' => 'די :attribute פֿאָרמאַט איז פאַרקריפּלט.',

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
            'rule-name' => 'מנהג-אָנזאָג',
        ],
        'g-recaptcha-response' => [
            'required' => 'ביטע באַשטעטיקן אַז איר זענט נישט אַ ראָבאָט.',
            'captcha' => 'קאַפּטטשאַ טעות! פּרוּווט ווידער שפּעטער אָדער קאָנטאַקט פּלאַץ אַדמין.',
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



    'accepted_if' => 'די: אַטריביוט פעלד מוזן זיין אנגענומען ווען: אנדערע איז: ווערט.',
    'ascii' => 'די : אַטריביוט פעלד מוזן בלויז אַנטהאַלטן איין-ביטע אַלפאַנומעריק אותיות און סימבאָלס.',
    'can' => 'די : אַטריביוט פעלד כּולל אַן אַנאָטערייזד ווערט.',
    'contains' => 'די : אַטריביוט פעלד איז פעלנדיק אַ פארלאנגט ווערט.',
    'current_password' => 'די פּאַראָל איז פאַלש.',
    'date_equals' => 'די : אַטריביוט פעלד מוזן זיין אַ דאַטע גלייַך צו : דאַטע.',
    'decimal' => 'די: אַטריביוט פעלד מוזן האָבן: דעצימאַל דעצימאַל ערטער.',
    'declined' => 'די : אַטריביוט פעלד מוזן זיין דיקליינד.',
    'declined_if' => 'די : אַטריביוט פעלד מוזן זיין דיקליינד ווען :other איז :value.',
    'doesnt_end_with' => 'די : אַטריביוט פעלד מוזן נישט סוף מיט איינער פון די פאלגענדע: : וואַלועס.',
    'doesnt_start_with' => 'די : אַטריביוט פעלד מוזן נישט אָנהייבן מיט איינער פון די פאלגענדע: : וואַלועס.',
    'ends_with' => 'די : אַטריביוט פעלד מוזן ענדיקן מיט איינער פון די פאלגענדע: : וואַלועס.',
    'enum' => 'די אויסגעקליבן: אַטריביוט איז פאַרקריפּלט.',
    'extensions' => 'די : אַטריביוט פעלד מוזן האָבן איינער פון די פאלגענדע יקסטענשאַנז: : וואַלועס.',
    'hex_color' => 'די : אַטריביוט פעלד מוזן זיין אַ גילטיק העקסאַדעסימאַל קאָליר.',
    'list' => 'די: אַטריביוט פעלד מוזן זיין אַ רשימה.',
    'lowercase' => 'די : אַטריביוט פעלד מוזן זיין קליין.',
    'mac_address' => 'די : אַטריביוט פעלד מוזן זיין אַ גילטיק מעק אַדרעס.',
    'max_digits' => 'די : אַטריביוט פעלד זאָל נישט האָבן מער ווי :מאַקס דידזשאַץ.',
    'min_digits' => 'די : אַטריביוט פעלד מוזן האָבן בייַ מינדסטער : מין דידזשאַץ.',
    'missing' => 'די : אַטריביוט פעלד מוזן זיין פעלנדיק.',
    'missing_if' => 'די: אַטריביוט פעלד מוזן זיין פעלנדיק ווען: אנדערע איז: ווערט.',
    'missing_unless' => 'די : אַטריביוט פעלד מוזן זיין פעלנדיק סייַדן :other איז :value.',
    'missing_with' => 'די : אַטריביוט פעלד מוזן זיין פעלנדיק ווען : וואַלועס איז פאָרשטעלן.',
    'missing_with_all' => 'די : אַטריביוט פעלד מוזן זיין פעלנדיק ווען : וואַלועס זענען פאָרשטעלן.',
    'multiple_of' => 'די : אַטריביוט פעלד מוזן זיין אַ קייפל פון : ווערט.',
    'password' => [
        'letters' => 'די : אַטריביוט פעלד מוזן אַנטהאַלטן לפּחות איין בריוו.',
        'mixed' => 'די : אַטריביוט פעלד מוזן אַנטהאַלטן בייַ מינדסטער איין ופּפּערקאַסע און איין קליין בריוו.',
        'numbers' => 'די: אַטריביוט פעלד מוזן אַנטהאַלטן לפּחות איין נומער.',
        'symbols' => 'די: אַטריביוט פעלד מוזן אַנטהאַלטן לפּחות איין סימבאָל.',
        'uncompromised' => 'דער געגעבן: אַטריביוט איז ארויס אין אַ דאַטן רינען. ביטע קלייַבן אַ אַנדערש: אַטריביוט.',
    ],
    'present_if' => 'די: אַטריביוט פעלד מוזן זיין פאָרשטעלן ווען: אנדערע איז: ווערט.',
    'present_unless' => 'די : אַטריביוט פעלד מוזן זיין פאָרשטעלן סייַדן : אנדערע איז : ווערט.',
    'present_with' => 'די : אַטריביוט פעלד מוזן זיין פאָרשטעלן ווען : וואַלועס איז פאָרשטעלן.',
    'present_with_all' => 'די : אַטריביוט פעלד מוזן זיין פאָרשטעלן ווען : וואַלועס זענען פאָרשטעלן.',
    'prohibited' => 'די : אַטריביוט פעלד איז פּראָוכיבאַטאַד.',
    'prohibited_if' => 'די: אַטריביוט פעלד איז פּראָוכיבאַטאַד ווען: אנדערע איז: ווערט.',
    'prohibited_unless' => 'די: אַטריביוט פעלד איז פּראָוכיבאַטאַד סייַדן: אנדערע איז אין: וואַלועס.',
    'prohibits' => 'די: אַטריביוט פעלד פּראָוכיבאַץ: אנדערע צו זיין פאָרשטעלן.',
    'required_array_keys' => 'די : אַטריביוט פעלד מוזן אַנטהאַלטן איינסן פֿאַר: : וואַלועס.',
    'required_if_accepted' => 'די : אַטריביוט פעלד איז פארלאנגט ווען :other איז אנגענומען.',
    'required_if_declined' => 'די : אַטריביוט פעלד איז פארלאנגט ווען :other איז דיקליינד.',
    'starts_with' => 'די : אַטריביוט פעלד מוזן אָנהייבן מיט איינער פון די פאלגענדע: : וואַלועס.',
    'uppercase' => 'די : אַטריביוט פעלד מוזן זיין ופּפּערקאַסע.',
    'ulid' => 'די : אַטריביוט פעלד מוזן זיין אַ גילטיק ULID.',
    'uuid' => 'די: אַטריביוט פעלד מוזן זיין אַ גילטיק UUID.',
];
