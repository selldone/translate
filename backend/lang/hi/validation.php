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

    'accepted' => ':attribute को स्वीकार किया जाना चाहिए।',
    'active_url' => ':attribute वैध URL नहीं है।',
    'after' => ':attribute :date के बाद की तारीख होनी चाहिए।',
    'after_or_equal' => ':attribute की तारीख :date के बाद या उसके बराबर होनी चाहिए।',
    'alpha' => ':attribute में केवल अक्षर हो सकते हैं।',
    'alpha_dash' => ':attribute में केवल अक्षर, संख्याएँ और डैश हो सकते हैं।',
    'alpha_num' => ':attribute में केवल अक्षर और संख्याएँ हो सकती हैं।',
    'array' => ':attribute एक सरणी होनी चाहिए.',
    'before' => ':attribute, :date से पहले की तारीख होनी चाहिए।',
    'before_or_equal' => ':attribute :date से पहले या उसके बराबर की तारीख होनी चाहिए।',
    'between' => [
        'numeric' => ':attribute :min और :max के बीच होना चाहिए।',
        'file' => ':attribute :min और :max किलोबाइट के बीच होना चाहिए।',
        'string' => ':attribute :min और :max वर्णों के बीच होना चाहिए।',
        'array' => ':attribute में :min और :max आइटम के बीच होना चाहिए।',
    ],
    'boolean' => ':attribute फ़ील्ड सही या गलत होनी चाहिए।',
    'confirmed' => ':attribute पुष्टिकरण मेल नहीं खाता।',
    'date' => ':attribute वैध दिनांक नहीं है.',
    'date_format' => ':attribute :format प्रारूप से मेल नहीं खाता है।',
    'different' => ':attribute और :other अलग-अलग होने चाहिए।',
    'digits' => ':attribute :digits अंक होना चाहिए।',
    'digits_between' => ':attribute :min और :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute में अमान्य छवि आयाम हैं।',
    'distinct' => ':attribute फ़ील्ड में डुप्लिकेट मान है।',
    'email' => ':attribute एक वैध ईमेल पता होना चाहिए।',
    'exists' => 'चयनित :attribute अमान्य है.',
    'file' => ':attribute एक फ़ाइल होनी चाहिए.',
    'filled' => ':attribute फ़ील्ड का एक मान होना चाहिए.',
    'gt' => [
        'numeric' => ':attribute :value से बड़ा होना चाहिए।',
        'file' => ':attribute :value किलोबाइट से अधिक होना चाहिए।',
        'string' => ':attribute :value वर्णों से अधिक होना चाहिए।',
        'array' => ':attribute में :value से अधिक आइटम होने चाहिए।',
    ],
    'gte' => [
        'numeric' => ':attribute :value से बड़ा या उसके बराबर होना चाहिए।',
        'file' => ':attribute :value किलोबाइट से अधिक या उसके बराबर होना चाहिए।',
        'string' => ':attribute :value वर्णों से अधिक या उसके बराबर होना चाहिए।',
        'array' => ':attribute में :value आइटम या अधिक होने चाहिए।',
    ],
    'image' => ':attribute एक छवि होनी चाहिए.',
    'in' => 'चयनित :attribute अमान्य है.',
    'in_array' => ':attribute फ़ील्ड :other में मौजूद नहीं है।',
    'integer' => ':attribute एक पूर्णांक होना चाहिए.',
    'ip' => ':attribute एक वैध IP पता होना चाहिए।',
    'ipv4' => ':attribute एक वैध IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute एक वैध IPv6 पता होना चाहिए।',
    'json' => ':attribute एक वैध JSON स्ट्रिंग होनी चाहिए।',
    'lt' => [
        'numeric' => ':attribute :value से कम होना चाहिए।',
        'file' => ':attribute :value किलोबाइट से कम होना चाहिए।',
        'string' => ':attribute :value वर्णों से कम होना चाहिए.',
        'array' => ':attribute में :value से कम आइटम होने चाहिए।',
    ],
    'lte' => [
        'numeric' => ':attribute :value से कम या उसके बराबर होना चाहिए।',
        'file' => ':attribute :value किलोबाइट से कम या उसके बराबर होना चाहिए।',
        'string' => ':attribute :value वर्णों से कम या उसके बराबर होना चाहिए।',
        'array' => ':attribute में :value से अधिक आइटम नहीं होने चाहिए।',
    ],
    'max' => [
        'numeric' => ':attribute, :max से बड़ा नहीं हो सकता है।',
        'file' => ':attribute :max किलोबाइट से अधिक नहीं हो सकता है।',
        'string' => ':attribute :max वर्णों से अधिक नहीं हो सकता है।',
        'array' => ':attribute में :max से अधिक आइटम नहीं हो सकते हैं।',
    ],
    'mimes' => ':attribute इस प्रकार की फ़ाइल होनी चाहिए: :values।',
    'mimetypes' => ':attribute इस प्रकार की फ़ाइल होनी चाहिए: :values।',
    'min' => [
        'numeric' => ':attribute कम से कम :min होना चाहिए।',
        'file' => ':attribute कम से कम :min किलोबाइट होना चाहिए।',
        'string' => ':attribute कम से कम :min वर्ण का होना चाहिए.',
        'array' => ':attribute में कम से कम :min आइटम होने चाहिए।',
    ],
    'not_in' => 'चयनित :attribute अमान्य है.',
    'not_regex' => ':attribute प्रारूप अमान्य है.',
    'numeric' => ':attribute एक संख्या होनी चाहिए.',
    'present' => ':attribute फ़ील्ड मौजूद होनी चाहिए.',
    'regex' => ':attribute प्रारूप अमान्य है.',
    'required' => ':attribute फ़ील्ड आवश्यक है.',
    'required_if' => ':attribute फ़ील्ड की आवश्यकता तब होती है जब :other, :value हो।',
    'required_unless' => ':attribute फ़ील्ड तब तक आवश्यक है जब तक :other :values में न हो।',
    'required_with' => ':values मौजूद होने पर :attribute फ़ील्ड आवश्यक है।',
    'required_with_all' => ':values मौजूद होने पर :attribute फ़ील्ड आवश्यक है।',
    'required_without' => ':values मौजूद नहीं होने पर :attribute फ़ील्ड आवश्यक है।',
    'required_without_all' => ':attribute फ़ील्ड की आवश्यकता तब होती है जब :values में से कोई भी मौजूद न हो।',
    'same' => ':attribute और :other का मिलान होना चाहिए।',
    'size' => [
        'numeric' => ':attribute :size होना चाहिए।',
        'file' => ':attribute :size किलोबाइट होना चाहिए।',
        'string' => ':attribute :size वर्ण का होना चाहिए.',
        'array' => ':attribute में :size आइटम अवश्य होने चाहिए।',
    ],
    'string' => ':attribute एक स्ट्रिंग होनी चाहिए.',
    'timezone' => ':attribute एक वैध क्षेत्र होना चाहिए।',
    'unique' => ':attribute पहले ही लिया जा चुका है।',
    'uploaded' => ':attribute अपलोड करने में विफल रहा।',
    'url' => ':attribute प्रारूप अमान्य है.',

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
            'rule-name' => 'सीमा शुल्क संदेश',
        ],
        'g-recaptcha-response' => [
            'required' => 'कृपया सत्यापित करें कि आप रोबोट नहीं हैं।',
            'captcha' => 'कैप्चा त्रुटि! बाद में पुन: प्रयास करें या साइट व्यवस्थापक से संपर्क करें।',
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



    'accepted_if' => 'जब :other :value हो तो :attribute फ़ील्ड को स्वीकार किया जाना चाहिए।',
    'ascii' => ':attribute फ़ील्ड में केवल एकल-बाइट अल्फ़ान्यूमेरिक वर्ण और प्रतीक ही होने चाहिए।',
    'can' => ':attribute फ़ील्ड में एक अनधिकृत मान शामिल है.',
    'contains' => ':attribute फ़ील्ड में आवश्यक मान गुम है.',
    'current_password' => 'पासवर्ड ग़लत है.',
    'date_equals' => ':attribute फ़ील्ड की तिथि :date के बराबर होनी चाहिए.',
    'decimal' => ':attribute फ़ील्ड में :decimal दशमलव स्थान होना चाहिए.',
    'declined' => ':attribute फ़ील्ड को अस्वीकार किया जाना चाहिए.',
    'declined_if' => 'जब :other :value हो तो :attribute फ़ील्ड को अस्वीकार किया जाना चाहिए।',
    'doesnt_end_with' => ':attribute फ़ील्ड निम्न में से किसी एक के साथ समाप्त नहीं होनी चाहिए: :values.',
    'doesnt_start_with' => ':attribute फ़ील्ड निम्न में से किसी एक से शुरू नहीं होनी चाहिए: :values.',
    'ends_with' => ':attribute फ़ील्ड निम्न में से किसी एक के साथ समाप्त होनी चाहिए: :values.',
    'enum' => 'चयनित :विशेषता अमान्य है।',
    'extensions' => ':attribute फ़ील्ड में निम्न में से एक एक्सटेंशन होना चाहिए: :values.',
    'hex_color' => ':attribute फ़ील्ड एक वैध हेक्साडेसिमल रंग होना चाहिए.',
    'list' => ':attribute फ़ील्ड एक सूची होनी चाहिए.',
    'lowercase' => ':attribute फ़ील्ड लोअरकेस में होनी चाहिए.',
    'mac_address' => ':attribute फ़ील्ड एक वैध MAC पता होना चाहिए.',
    'max_digits' => ':attribute फ़ील्ड में :max से अधिक अंक नहीं होने चाहिए.',
    'min_digits' => ':attribute फ़ील्ड में कम से कम :min अंक होने चाहिए.',
    'missing' => ':attribute फ़ील्ड अवश्य ही अनुपस्थित होनी चाहिए.',
    'missing_if' => 'जब :other :value हो तो :attribute फ़ील्ड अवश्य गायब होनी चाहिए।',
    'missing_unless' => ':attribute फ़ील्ड अनुपस्थित होनी चाहिए जब तक कि :other :value न हो।',
    'missing_with' => 'जब :values मौजूद हो तो :attribute फ़ील्ड अवश्य गायब होनी चाहिए।',
    'missing_with_all' => 'जब :values मौजूद हो तो :attribute फ़ील्ड अवश्य गायब होनी चाहिए।',
    'multiple_of' => ':attribute फ़ील्ड :value का गुणज होना चाहिए.',
    'password' => [
        'letters' => ':attribute फ़ील्ड में कम से कम एक अक्षर अवश्य होना चाहिए.',
        'mixed' => ':attribute फ़ील्ड में कम से कम एक बड़ा और एक छोटा अक्षर होना चाहिए।',
        'numbers' => ':attribute फ़ील्ड में कम से कम एक संख्या अवश्य होनी चाहिए.',
        'symbols' => ':attribute फ़ील्ड में कम से कम एक प्रतीक अवश्य होना चाहिए.',
        'uncompromised' => 'दिया गया :attribute डेटा लीक में दिखाई दिया है। कृपया कोई दूसरा :attribute चुनें।',
    ],
    'present_if' => 'जब :other :value हो तो :attribute फ़ील्ड अवश्य मौजूद होना चाहिए।',
    'present_unless' => ':attribute फ़ील्ड तब तक मौजूद रहना चाहिए जब तक :other :value न हो।',
    'present_with' => ':values मौजूद होने पर :attribute फ़ील्ड मौजूद होना चाहिए.',
    'present_with_all' => 'जब :values मौजूद हों तो :attribute फ़ील्ड मौजूद होना चाहिए.',
    'prohibited' => ':attribute फ़ील्ड निषिद्ध है.',
    'prohibited_if' => 'जब :other :value हो तो :attribute फ़ील्ड निषिद्ध है।',
    'prohibited_unless' => ':attribute फ़ील्ड का प्रयोग निषिद्ध है जब तक कि :other :values में न हो।',
    'prohibits' => ':attribute फ़ील्ड :other को उपस्थित होने से रोकता है।',
    'required_array_keys' => ':attribute फ़ील्ड में :values के लिए प्रविष्टियाँ होनी चाहिए.',
    'required_if_accepted' => 'जब :other स्वीकार किया जाता है तो :attribute फ़ील्ड आवश्यक है।',
    'required_if_declined' => 'जब :other अस्वीकृत हो तो :attribute फ़ील्ड आवश्यक है।',
    'starts_with' => ':attribute फ़ील्ड निम्न में से किसी एक से शुरू होनी चाहिए: :values.',
    'uppercase' => ':attribute फ़ील्ड बड़े अक्षरों में होनी चाहिए.',
    'ulid' => ':attribute फ़ील्ड एक वैध ULID होना चाहिए.',
    'uuid' => ':attribute फ़ील्ड एक वैध UUID होना चाहिए.',
];
