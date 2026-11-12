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

    'accepted' => ':attribute duhet të pranohet.',
    'active_url' => ':attribute nuk është një URL e vlefshme.',
    'after' => ':attribute duhet të jetë një datë pas :date.',
    'after_or_equal' => ':attribute duhet të jetë një datë pas ose e barabartë me :date.',
    'alpha' => ':attribute mund të përmbajë vetëm shkronja.',
    'alpha_dash' => ':attribute mund të përmbajë vetëm shkronja, numra dhe viza.',
    'alpha_num' => ':attribute mund të përmbajë vetëm shkronja dhe numra.',
    'array' => ':attribute duhet të jetë një grup.',
    'before' => ':attribute duhet të jetë një datë përpara :date.',
    'before_or_equal' => ':attribute duhet të jetë një datë përpara ose e barabartë me :date.',
    'between' => [
        'numeric' => ':attribute duhet të jetë midis :min dhe :max.',
        'file' => ':attribute duhet të jetë midis kilobajt :min dhe :max.',
        'string' => ':attribute duhet të jetë midis karaktereve :min dhe :max.',
        'array' => ':attribute duhet të ketë midis artikujve :min dhe :max.',
    ],
    'boolean' => 'Fusha :attribute duhet të jetë e vërtetë ose e gabuar.',
    'confirmed' => 'Konfirmimi :attribute nuk përputhet.',
    'date' => ':attribute nuk është një datë e vlefshme.',
    'date_format' => ':attribute nuk përputhet me formatin :format.',
    'different' => ':attribute dhe :other duhet të jenë të ndryshme.',
    'digits' => ':attribute duhet të jetë shifra :digits.',
    'digits_between' => ':attribute duhet të jetë midis shifrave :min dhe :max.',
    'dimensions' => ':attribute ka dimensione të pavlefshme imazhi.',
    'distinct' => 'Fusha :attribute ka një vlerë të kopjuar.',
    'email' => ':attribute duhet të jetë një adresë e vlefshme emaili.',
    'exists' => ':attribute e zgjedhur është e pavlefshme.',
    'file' => ':attribute duhet të jetë një skedar.',
    'filled' => 'Fusha :attribute duhet të ketë një vlerë.',
    'gt' => [
        'numeric' => ':attribute duhet të jetë më i madh se :value.',
        'file' => ':attribute duhet të jetë më i madh se kilobajt :value.',
        'string' => ':attribute duhet të jetë më i madh se karakteret :value.',
        'array' => ':attribute duhet të ketë më shumë se artikuj :value.',
    ],
    'gte' => [
        'numeric' => ':attribute duhet të jetë më i madh ose i barabartë me :value.',
        'file' => ':attribute duhet të jetë më i madh ose i barabartë me kilobajt :value.',
        'string' => ':attribute duhet të jetë më i madh ose i barabartë me karakteret :value.',
        'array' => ':attribute duhet të ketë artikuj :value ose më shumë.',
    ],
    'image' => ':attribute duhet të jetë një imazh.',
    'in' => ':attribute e zgjedhur është e pavlefshme.',
    'in_array' => 'Fusha :attribute nuk ekziston në :other.',
    'integer' => ':attribute duhet të jetë një numër i plotë.',
    'ip' => ':attribute duhet të jetë një adresë e vlefshme IP.',
    'ipv4' => ':attribute duhet të jetë një adresë e vlefshme IPv4.',
    'ipv6' => ':attribute duhet të jetë një adresë e vlefshme IPv6.',
    'json' => ':attribute duhet të jetë një varg i vlefshëm JSON.',
    'lt' => [
        'numeric' => ':attribute duhet të jetë më pak se :value.',
        'file' => ':attribute duhet të jetë më pak se kilobajt :value.',
        'string' => ':attribute duhet të jetë më pak se karaktere :value.',
        'array' => ':attribute duhet të ketë më pak se :value artikuj.',
    ],
    'lte' => [
        'numeric' => ':attribute duhet të jetë më i vogël ose i barabartë me :value.',
        'file' => ':attribute duhet të jetë më i vogël ose i barabartë me kilobajt :value.',
        'string' => ':attribute duhet të jetë më i vogël ose i barabartë me karakteret :value.',
        'array' => ':attribute nuk duhet të ketë më shumë se :value artikuj.',
    ],
    'max' => [
        'numeric' => ':attribute nuk mund të jetë më i madh se :max.',
        'file' => ':attribute mund të mos jetë më i madh se kilobajt :max.',
        'string' => ':attribute nuk mund të jetë më i madh se karakteret :max.',
        'array' => ':attribute nuk mund të ketë më shumë se :max artikuj.',
    ],
    'mimes' => ':attribute duhet të jetë një skedar i tipit: :values.',
    'mimetypes' => ':attribute duhet të jetë një skedar i tipit: :values.',
    'min' => [
        'numeric' => ':attribute duhet të jetë së paku :min.',
        'file' => ':attribute duhet të jetë së paku :min kilobajt.',
        'string' => ':attribute duhet të ketë të paktën karaktere :min.',
        'array' => ':attribute duhet të ketë të paktën artikuj :min.',
    ],
    'not_in' => ':attribute e zgjedhur është e pavlefshme.',
    'not_regex' => 'Formati :attribute është i pavlefshëm.',
    'numeric' => ':attribute duhet të jetë një numër.',
    'present' => 'Fusha :attribute duhet të jetë e pranishme.',
    'regex' => 'Formati :attribute është i pavlefshëm.',
    'required' => 'Kërkohet fusha :attribute.',
    'required_if' => 'Fusha :attribute kërkohet kur :other është :value.',
    'required_unless' => 'Fusha :attribute kërkohet përveç nëse :other është në :values.',
    'required_with' => 'Fusha :attribute kërkohet kur është e pranishme :values.',
    'required_with_all' => 'Fusha :attribute kërkohet kur është e pranishme :values.',
    'required_without' => 'Fusha :attribute kërkohet kur :values nuk është e pranishme.',
    'required_without_all' => 'Fusha :attribute kërkohet kur asnjë prej :values nuk është i pranishëm.',
    'same' => ':attribute dhe :other duhet të përputhen.',
    'size' => [
        'numeric' => ':attribute duhet të jetë :size.',
        'file' => ':attribute duhet të jetë kilobajt :size.',
        'string' => ':attribute duhet të jetë karaktere :size.',
        'array' => ':attribute duhet të përmbajë artikuj :size.',
    ],
    'string' => ':attribute duhet të jetë një varg.',
    'timezone' => ':attribute duhet të jetë një zonë e vlefshme.',
    'unique' => ':attribute tashmë është marrë.',
    'uploaded' => ':attribute nuk u ngarkua.',
    'url' => 'Formati :attribute është i pavlefshëm.',

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
            'rule-name' => 'porosi-mesazh',
        ],
        'g-recaptcha-response' => [
            'required' => 'Ju lutemi verifikoni që nuk jeni robot.',
            'captcha' => 'Gabim Captcha! provoni përsëri më vonë ose kontaktoni administratorin e faqes.',
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



    'accepted_if' => 'Fusha :atribut duhet të pranohet kur :other është :value.',
    'ascii' => 'Fusha :atribute duhet të përmbajë vetëm karaktere dhe simbole alfanumerike me një bajt.',
    'can' => 'Fusha :atribute përmban një vlerë të paautorizuar.',
    'contains' => 'Fushës :atribut i mungon vlera e kërkuar.',
    'current_password' => 'Fjalëkalimi është i pasaktë.',
    'date_equals' => 'Fusha :atribut duhet të jetë një datë e barabartë me :date.',
    'decimal' => 'Fusha :atribut duhet të ketë :shifra dhjetore dhjetore.',
    'declined' => 'Fusha :atribute duhet të refuzohet.',
    'declined_if' => 'Fusha :atribut duhet të refuzohet kur :other është :value.',
    'doesnt_end_with' => 'Fusha :atribute nuk duhet të përfundojë me një nga të mëposhtmet: :values.',
    'doesnt_start_with' => 'Fusha :atribute nuk duhet të fillojë me një nga sa vijon: :values.',
    'ends_with' => 'Fusha :atribute duhet të përfundojë me një nga sa vijon: :values.',
    'enum' => 'Atributi i zgjedhur : është i pavlefshëm.',
    'extensions' => 'Fusha :atribute duhet të ketë një nga shtesat e mëposhtme: :values.',
    'hex_color' => 'Fusha :atribut duhet të jetë një ngjyrë heksadecimal e vlefshme.',
    'list' => 'Fusha :atribute duhet të jetë një listë.',
    'lowercase' => 'Fusha :atribute duhet të jetë e vogël.',
    'mac_address' => 'Fusha :attribute duhet të jetë një adresë MAC e vlefshme.',
    'max_digits' => 'Fusha :atribute nuk duhet të ketë më shumë se :max shifra.',
    'min_digits' => 'Fusha :atribut duhet të ketë të paktën shifra :min.',
    'missing' => 'Fusha :atribut duhet të mungojë.',
    'missing_if' => 'Fusha :atribute duhet të mungojë kur :other është :value.',
    'missing_unless' => 'Fusha :atribut duhet të mungojë përveç nëse :other është :value.',
    'missing_with' => 'Fusha :atribute duhet të mungojë kur :values është i pranishëm.',
    'missing_with_all' => 'Fusha :atribute duhet të mungojë kur :vlerat janë të pranishme.',
    'multiple_of' => 'Fusha :atribut duhet të jetë shumëfish i :value.',
    'password' => [
        'letters' => 'Fusha :atribute duhet të përmbajë të paktën një shkronjë.',
        'mixed' => 'Fusha: atribut duhet të përmbajë të paktën një shkronjë të madhe dhe një shkronjë të vogël.',
        'numbers' => 'Fusha :atribute duhet të përmbajë të paktën një numër.',
        'symbols' => 'Fusha :atribute duhet të përmbajë të paktën një simbol.',
        'uncompromised' => 'Atributi i dhënë : është shfaqur në një rrjedhje të dhënash. Ju lutemi zgjidhni një :atribut tjetër.',
    ],
    'present_if' => 'Fusha :atribute duhet të jetë e pranishme kur :other është :value.',
    'present_unless' => 'Fusha :atribute duhet të jetë e pranishme përveç nëse :other është :value.',
    'present_with' => 'Fusha :atribute duhet të jetë e pranishme kur :values është i pranishëm.',
    'present_with_all' => 'Fusha :atribute duhet të jetë e pranishme kur :vlerat janë të pranishme.',
    'prohibited' => 'Fusha :atribute është e ndaluar.',
    'prohibited_if' => 'Fusha :atribute është e ndaluar kur :other është :value.',
    'prohibited_unless' => 'Fusha :atribute është e ndaluar përveç nëse :other është në :vlerat.',
    'prohibits' => 'Fusha :atribut ndalon praninë e :të tjerëve.',
    'required_array_keys' => 'Fusha :atribute duhet të përmbajë shënime për: :vlerat.',
    'required_if_accepted' => 'Fusha :atribute kërkohet kur pranohet :other.',
    'required_if_declined' => 'Fusha :atribut kërkohet kur :other refuzohet.',
    'starts_with' => 'Fusha :atribute duhet të fillojë me një nga sa vijon: :values.',
    'uppercase' => 'Fusha :atribut duhet të jetë e madhe.',
    'ulid' => 'Fusha :atribute duhet të jetë një ULID e vlefshme.',
    'uuid' => 'Fusha :atribute duhet të jetë një UUID e vlefshme.',
];
