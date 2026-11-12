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

    'accepted' => ':attribute स्वीकारणे आवश्यक आहे.',
    'active_url' => ':attribute वैध URL नाही.',
    'after' => ':attribute ही :date नंतरची तारीख असणे आवश्यक आहे.',
    'after_or_equal' => ':attribute ही :date च्या नंतरची किंवा समान तारीख असणे आवश्यक आहे.',
    'alpha' => ':attribute मध्ये फक्त अक्षरे असू शकतात.',
    'alpha_dash' => ':attribute मध्ये फक्त अक्षरे, संख्या आणि डॅश असू शकतात.',
    'alpha_num' => ':attribute मध्ये फक्त अक्षरे आणि संख्या असू शकतात.',
    'array' => ':attribute एक ॲरे असणे आवश्यक आहे.',
    'before' => ':attribute :date पूर्वीची तारीख असणे आवश्यक आहे.',
    'before_or_equal' => ':attribute ही :date पूर्वीची किंवा समान तारीख असणे आवश्यक आहे.',
    'between' => [
        'numeric' => ':attribute :min आणि :max दरम्यान असणे आवश्यक आहे.',
        'file' => ':attribute :min आणि :max किलोबाइट्स दरम्यान असणे आवश्यक आहे.',
        'string' => ':attribute :min आणि :max वर्णांच्या दरम्यान असणे आवश्यक आहे.',
        'array' => ':attribute मध्ये :min आणि :max आयटम असणे आवश्यक आहे.',
    ],
    'boolean' => ':attribute फील्ड सत्य किंवा असत्य असणे आवश्यक आहे.',
    'confirmed' => ':attribute पुष्टीकरण जुळत नाही.',
    'date' => ':attribute ही वैध तारीख नाही.',
    'date_format' => ':attribute format :format शी जुळत नाही.',
    'different' => ':attribute आणि :other भिन्न असणे आवश्यक आहे.',
    'digits' => ':attribute :digits अंक असणे आवश्यक आहे.',
    'digits_between' => ':attribute :min आणि :max अंकांच्या दरम्यान असणे आवश्यक आहे.',
    'dimensions' => ':attribute मध्ये अवैध प्रतिमा परिमाण आहेत.',
    'distinct' => ':attribute फील्डमध्ये डुप्लिकेट मूल्य आहे.',
    'email' => ':attribute एक वैध ईमेल पत्ता असणे आवश्यक आहे.',
    'exists' => 'निवडलेला :attribute अवैध आहे.',
    'file' => ':attribute फाइल असणे आवश्यक आहे.',
    'filled' => ':attribute फील्डमध्ये मूल्य असणे आवश्यक आहे.',
    'gt' => [
        'numeric' => ':attribute :value पेक्षा मोठा असणे आवश्यक आहे.',
        'file' => ':attribute :value किलोबाइट्सपेक्षा मोठा असणे आवश्यक आहे.',
        'string' => ':attribute :value वर्णांपेक्षा मोठा असणे आवश्यक आहे.',
        'array' => ':attribute मध्ये :value आयटम पेक्षा जास्त असणे आवश्यक आहे.',
    ],
    'gte' => [
        'numeric' => ':attribute :value पेक्षा मोठा किंवा समान असणे आवश्यक आहे.',
        'file' => ':attribute :value किलोबाइट पेक्षा मोठे किंवा समान असणे आवश्यक आहे.',
        'string' => ':attribute हे :value वर्णांपेक्षा मोठे किंवा समान असणे आवश्यक आहे.',
        'array' => ':attribute मध्ये :value आयटम किंवा अधिक असणे आवश्यक आहे.',
    ],
    'image' => ':attribute एक प्रतिमा असणे आवश्यक आहे.',
    'in' => 'निवडलेला :attribute अवैध आहे.',
    'in_array' => ':attribute फील्ड :other मध्ये अस्तित्वात नाही.',
    'integer' => ':attribute पूर्णांक असणे आवश्यक आहे.',
    'ip' => ':attribute हा वैध IP पत्ता असणे आवश्यक आहे.',
    'ipv4' => ':attribute हा वैध IPv4 पत्ता असणे आवश्यक आहे.',
    'ipv6' => ':attribute हा वैध IPv6 पत्ता असणे आवश्यक आहे.',
    'json' => ':attribute एक वैध JSON स्ट्रिंग असणे आवश्यक आहे.',
    'lt' => [
        'numeric' => ':attribute :value पेक्षा कमी असणे आवश्यक आहे.',
        'file' => ':attribute :value किलोबाइटपेक्षा कमी असणे आवश्यक आहे.',
        'string' => ':attribute :value वर्णांपेक्षा कमी असणे आवश्यक आहे.',
        'array' => ':attribute मध्ये :value पेक्षा कमी आयटम असणे आवश्यक आहे.',
    ],
    'lte' => [
        'numeric' => ':attribute :value पेक्षा कमी किंवा समान असणे आवश्यक आहे.',
        'file' => ':attribute :value किलोबाइटपेक्षा कमी किंवा समान असणे आवश्यक आहे.',
        'string' => ':attribute :value वर्णांपेक्षा कमी किंवा समान असणे आवश्यक आहे.',
        'array' => ':attribute मध्ये :value पेक्षा जास्त आयटम नसावेत.',
    ],
    'max' => [
        'numeric' => ':attribute :max पेक्षा जास्त असू शकत नाही.',
        'file' => ':attribute :max किलोबाइट्सपेक्षा जास्त असू शकत नाही.',
        'string' => ':attribute :max वर्णांपेक्षा मोठे असू शकत नाही.',
        'array' => ':attribute मध्ये :max पेक्षा जास्त आयटम असू शकत नाहीत.',
    ],
    'mimes' => ':attribute प्रकारची फाइल असणे आवश्यक आहे: :values.',
    'mimetypes' => ':attribute प्रकारची फाइल असणे आवश्यक आहे: :values.',
    'min' => [
        'numeric' => ':attribute किमान :min असणे आवश्यक आहे.',
        'file' => ':attribute किमान :min किलोबाइट असणे आवश्यक आहे.',
        'string' => ':attribute किमान :min वर्ण असणे आवश्यक आहे.',
        'array' => ':attribute मध्ये किमान :min आयटम असणे आवश्यक आहे.',
    ],
    'not_in' => 'निवडलेला :attribute अवैध आहे.',
    'not_regex' => ':attribute स्वरूप अवैध आहे.',
    'numeric' => ':attribute ही संख्या असणे आवश्यक आहे.',
    'present' => ':attribute फील्ड उपस्थित असणे आवश्यक आहे.',
    'regex' => ':attribute स्वरूप अवैध आहे.',
    'required' => ':attribute फील्ड आवश्यक आहे.',
    'required_if' => 'जेव्हा :other :value असेल तेव्हा :attribute फील्ड आवश्यक आहे.',
    'required_unless' => ':attribute फील्ड आवश्यक आहे जोपर्यंत :other :values मध्ये नाही.',
    'required_with' => 'जेव्हा :values असते तेव्हा :attribute फील्ड आवश्यक असते.',
    'required_with_all' => 'जेव्हा :values असते तेव्हा :attribute फील्ड आवश्यक असते.',
    'required_without' => 'जेव्हा :values नसतात तेव्हा :attribute फील्ड आवश्यक असते.',
    'required_without_all' => ':values पैकी कोणतेही उपस्थित नसताना :attribute फील्ड आवश्यक आहे.',
    'same' => ':attribute आणि :other जुळले पाहिजेत.',
    'size' => [
        'numeric' => ':attribute :size असणे आवश्यक आहे.',
        'file' => ':attribute :size किलोबाइट असणे आवश्यक आहे.',
        'string' => ':attribute मध्ये :size वर्ण असणे आवश्यक आहे.',
        'array' => ':attribute मध्ये :size आयटम असणे आवश्यक आहे.',
    ],
    'string' => ':attribute एक स्ट्रिंग असणे आवश्यक आहे.',
    'timezone' => ':attribute एक वैध झोन असणे आवश्यक आहे.',
    'unique' => ':attribute आधीच घेतले गेले आहे.',
    'uploaded' => ':attribute अपलोड करण्यात अयशस्वी.',
    'url' => ':attribute स्वरूप अवैध आहे.',

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
            'rule-name' => 'सानुकूल-संदेश',
        ],
        'g-recaptcha-response' => [
            'required' => 'कृपया तुम्ही रोबोट नसल्याचे सत्यापित करा.',
            'captcha' => 'कॅप्चा त्रुटी! नंतर पुन्हा प्रयत्न करा किंवा साइट प्रशासकाशी संपर्क साधा.',
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



    'accepted_if' => ':attribute फील्ड स्वीकारणे आवश्यक आहे जेव्हा :other:value असते.',
    'ascii' => ':विशेषता फील्डमध्ये फक्त सिंगल-बाइट अल्फान्यूमेरिक वर्ण आणि चिन्हे असणे आवश्यक आहे.',
    'can' => ':attribute फील्डमध्ये अनधिकृत मूल्य आहे.',
    'contains' => ':attribute फील्डमध्ये आवश्यक मूल्य गहाळ आहे.',
    'current_password' => 'पासवर्ड चुकीचा आहे.',
    'date_equals' => ':attribute फील्ड :date सारखी तारीख असणे आवश्यक आहे.',
    'decimal' => ':विशेषता फील्डमध्ये :दशांश दशांश स्थाने असणे आवश्यक आहे.',
    'declined' => ':attribute फील्ड नाकारणे आवश्यक आहे.',
    'declined_if' => ':attribute फील्ड नाकारणे आवश्यक आहे जेव्हा :other हे :value असते.',
    'doesnt_end_with' => ':attribute फील्ड खालीलपैकी एकाने संपू नये: :values.',
    'doesnt_start_with' => ':attribute फील्ड खालीलपैकी एकाने सुरू होऊ नये: :values.',
    'ends_with' => ':attribute फील्ड खालीलपैकी एकाने समाप्त होणे आवश्यक आहे: :values.',
    'enum' => 'निवडलेले :विशेषता अवैध आहे.',
    'extensions' => ':attribute फील्डमध्ये खालीलपैकी एक विस्तार असणे आवश्यक आहे: :values.',
    'hex_color' => ':विशेषता फील्ड वैध हेक्साडेसिमल रंग असणे आवश्यक आहे.',
    'list' => ':विशेषता फील्ड एक सूची असणे आवश्यक आहे.',
    'lowercase' => ':attribute फील्ड लोअरकेस असणे आवश्यक आहे.',
    'mac_address' => ':विशेषता फील्ड एक वैध MAC पत्ता असणे आवश्यक आहे.',
    'max_digits' => ':attribute फील्डमध्ये :max अंकांपेक्षा जास्त नसावे.',
    'min_digits' => ':attribute फील्डमध्ये किमान :min अंक असणे आवश्यक आहे.',
    'missing' => ':attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'missing_if' => 'जेव्हा :अन्य :value असेल तेव्हा :attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'missing_unless' => ':attribute फील्ड गहाळ असणे आवश्यक आहे जोपर्यंत :other :value नाही.',
    'missing_with' => ':values उपस्थित असताना :attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'missing_with_all' => ':values उपस्थित असताना :attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'multiple_of' => ':attribute फील्ड :value चा गुणाकार असणे आवश्यक आहे.',
    'password' => [
        'letters' => ':विशेषता फील्डमध्ये किमान एक अक्षर असणे आवश्यक आहे.',
        'mixed' => ':विशेषता फील्डमध्ये किमान एक अप्परकेस आणि एक लोअरकेस अक्षर असणे आवश्यक आहे.',
        'numbers' => ':विशेषता फील्डमध्ये किमान एक संख्या असणे आवश्यक आहे.',
        'symbols' => ':attribute फील्डमध्ये किमान एक चिन्ह असणे आवश्यक आहे.',
        'uncompromised' => 'दिलेला :विशेषता डेटा लीकमध्ये दिसून आली आहे. कृपया भिन्न निवडा :विशेषता.',
    ],
    'present_if' => 'जेव्हा :अन्य :value असेल तेव्हा :attribute फील्ड उपस्थित असणे आवश्यक आहे.',
    'present_unless' => ':attribute फील्ड :other :value असल्याशिवाय उपस्थित असणे आवश्यक आहे.',
    'present_with' => 'जेव्हा :values असते तेव्हा :attribute फील्ड उपस्थित असणे आवश्यक आहे.',
    'present_with_all' => 'जेव्हा :values असतात तेव्हा :attribute फील्ड उपस्थित असणे आवश्यक आहे.',
    'prohibited' => ':attribute फील्ड प्रतिबंधित आहे.',
    'prohibited_if' => ':attribute फील्ड प्रतिबंधित आहे जेव्हा :other आहे :value.',
    'prohibited_unless' => ':attribute फील्ड निषिद्ध आहे जोपर्यंत :other :values मध्ये नाही.',
    'prohibits' => ':विशेषता फील्ड :इतरांना उपस्थित राहण्यास प्रतिबंधित करते.',
    'required_array_keys' => ':attribute फील्डमध्ये: :values साठी एंट्री असणे आवश्यक आहे.',
    'required_if_accepted' => 'जेव्हा :other स्वीकारले जाते तेव्हा :attribute फील्ड आवश्यक असते.',
    'required_if_declined' => 'जेव्हा :other नाकारले जाते तेव्हा :attribute फील्ड आवश्यक असते.',
    'starts_with' => ':attribute फील्ड खालीलपैकी एकाने सुरू होणे आवश्यक आहे: :values.',
    'uppercase' => ':attribute फील्ड अपरकेस असणे आवश्यक आहे.',
    'ulid' => ':विशेषता फील्ड वैध ULID असणे आवश्यक आहे.',
    'uuid' => ':विशेषता फील्ड वैध UUID असणे आवश्यक आहे.',
];
