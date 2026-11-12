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

    'accepted' => ':attribute स्वीकार गर्नुपर्छ।',
    'active_url' => ':attribute मान्य URL होइन।',
    'after' => ':attribute:date पछिको मिति हुनुपर्छ।',
    'after_or_equal' => ':attribute :date पछिको वा बराबरको मिति हुनुपर्छ।',
    'alpha' => ':attribute मा अक्षर मात्र हुन सक्छ।',
    'alpha_dash' => ':attribute मा अक्षर, संख्या र ड्यास मात्र हुन सक्छ।',
    'alpha_num' => ':attribute मा अक्षर र संख्या मात्र हुन सक्छ।',
    'array' => ':attribute एरे हुनुपर्छ।',
    'before' => ':attribute :date अघिको मिति हुनुपर्छ।',
    'before_or_equal' => ':attribute :date अघिको वा बराबरको मिति हुनुपर्छ।',
    'between' => [
        'numeric' => ':attribute :min र :max बीचको हुनुपर्छ।',
        'file' => ':attribute :min र :max किलोबाइटहरू बीच हुनुपर्छ।',
        'string' => ':attribute :min र :max वर्णहरू बीच हुनुपर्छ।',
        'array' => ':attribute मा :min र :max वस्तुहरू बीच हुनुपर्छ।',
    ],
    'boolean' => ':attribute फिल्ड सत्य वा गलत हुनुपर्छ।',
    'confirmed' => ':attribute पुष्टि मेल खाँदैन।',
    'date' => ':attribute मान्य मिति होइन।',
    'date_format' => ':attribute :format ढाँचासँग मेल खाँदैन।',
    'different' => ':attribute र :other फरक हुनुपर्छ।',
    'digits' => ':attribute :digits अंक हुनुपर्छ।',
    'digits_between' => ':attribute :min र :max अंकहरू बीच हुनुपर्छ।',
    'dimensions' => ':attribute मा अमान्य छवि आयामहरू छन्।',
    'distinct' => ':attribute फिल्डमा डुप्लिकेट मान छ।',
    'email' => ':attribute मान्य इमेल ठेगाना हुनुपर्छ।',
    'exists' => 'चयन गरिएको :attribute अमान्य छ।',
    'file' => ':attribute फाइल हुनुपर्छ।',
    'filled' => ':attribute फिल्डमा मान हुनुपर्छ।',
    'gt' => [
        'numeric' => ':attribute :value भन्दा ठूलो हुनुपर्छ।',
        'file' => ':attribute :value किलोबाइट भन्दा ठूलो हुनुपर्छ।',
        'string' => ':attribute :value वर्णहरू भन्दा ठूलो हुनुपर्छ।',
        'array' => ':attribute मा :value भन्दा बढी वस्तुहरू हुनुपर्छ।',
    ],
    'gte' => [
        'numeric' => ':attribute :value भन्दा ठूलो वा बराबर हुनुपर्छ।',
        'file' => ':attribute :value किलोबाइट भन्दा ठूलो वा बराबर हुनुपर्छ।',
        'string' => ':attribute :value वर्णहरू भन्दा ठूलो वा बराबर हुनुपर्छ।',
        'array' => ':attribute मा :value वस्तुहरू वा बढी हुनुपर्छ।',
    ],
    'image' => ':attribute एउटा छवि हुनुपर्छ।',
    'in' => 'चयन गरिएको :attribute अमान्य छ।',
    'in_array' => ':attribute क्षेत्र :other मा अवस्थित छैन।',
    'integer' => ':attribute एक पूर्णांक हुनुपर्छ।',
    'ip' => ':attribute मान्य IP ठेगाना हुनुपर्छ।',
    'ipv4' => ':attribute मान्य IPv4 ठेगाना हुनुपर्छ।',
    'ipv6' => ':attribute मान्य IPv6 ठेगाना हुनुपर्छ।',
    'json' => ':attribute एक मान्य JSON स्ट्रिङ हुनुपर्छ।',
    'lt' => [
        'numeric' => ':attribute :value भन्दा कम हुनुपर्छ।',
        'file' => ':attribute :value किलोबाइट भन्दा कम हुनुपर्छ।',
        'string' => ':attribute :value वर्णहरू भन्दा कम हुनुपर्छ।',
        'array' => ':attribute मा :value भन्दा कम वस्तुहरू हुनुपर्छ।',
    ],
    'lte' => [
        'numeric' => ':attribute :value भन्दा कम वा बराबर हुनुपर्छ।',
        'file' => ':attribute :value किलोबाइट भन्दा कम वा बराबर हुनुपर्छ।',
        'string' => ':attribute :value वर्णहरू भन्दा कम वा बराबर हुनुपर्छ।',
        'array' => ':attribute मा :value वस्तुहरू भन्दा बढी हुनुहुँदैन।',
    ],
    'max' => [
        'numeric' => ':attribute :max भन्दा ठूलो नहुन सक्छ।',
        'file' => ':attribute :max किलोबाइट भन्दा ठूलो नहुन सक्छ।',
        'string' => ':attribute :max वर्णहरू भन्दा ठूलो नहुन सक्छ।',
        'array' => ':attribute मा :max भन्दा बढी वस्तुहरू नहुन सक्छ।',
    ],
    'mimes' => ':attribute प्रकारको फाइल हुनुपर्छ: :values।',
    'mimetypes' => ':attribute प्रकारको फाइल हुनुपर्छ: :values।',
    'min' => [
        'numeric' => ':attribute कम्तिमा :min हुनुपर्छ।',
        'file' => ':attribute कम्तिमा :min किलोबाइट हुनुपर्छ।',
        'string' => ':attribute कम्तिमा :min वर्णहरू हुनुपर्छ।',
        'array' => ':attribute मा कम्तिमा :min वस्तुहरू हुनुपर्छ।',
    ],
    'not_in' => 'चयन गरिएको :attribute अमान्य छ।',
    'not_regex' => ':attribute ढाँचा अमान्य छ।',
    'numeric' => ':attribute एउटा नम्बर हुनुपर्छ।',
    'present' => ':attribute फिल्ड अनिवार्य रूपमा उपस्थित हुनुपर्छ।',
    'regex' => ':attribute ढाँचा अमान्य छ।',
    'required' => ':attribute फिल्ड आवश्यक छ।',
    'required_if' => ':attribute फिल्ड आवश्यक हुन्छ जब :other हुन्छ :value।',
    'required_unless' => ':other :values मा नभएसम्म :attribute फिल्ड आवश्यक हुन्छ।',
    'required_with' => ':values उपस्थित हुँदा :attribute फिल्ड आवश्यक हुन्छ।',
    'required_with_all' => ':values उपस्थित हुँदा :attribute फिल्ड आवश्यक हुन्छ।',
    'required_without' => ':values नभएको बेला :attribute फिल्ड आवश्यक हुन्छ।',
    'required_without_all' => ':values मध्ये कुनै पनि उपस्थित नभएको बेला :attribute फिल्ड आवश्यक हुन्छ।',
    'same' => ':attribute र :other मिल्नुपर्छ।',
    'size' => [
        'numeric' => ':attribute :size हुनुपर्छ।',
        'file' => ':attribute :size किलोबाइट हुनुपर्छ।',
        'string' => ':attribute अनिवार्य रूपमा :size वर्णहरू हुनुपर्छ।',
        'array' => ':attribute मा :size वस्तुहरू समावेश हुनुपर्छ।',
    ],
    'string' => ':attribute एउटा स्ट्रिङ हुनुपर्छ।',
    'timezone' => ':attribute मान्य क्षेत्र हुनुपर्छ।',
    'unique' => ':attribute पहिले नै लिइसकेको छ।',
    'uploaded' => ':attribute अपलोड गर्न असफल भयो।',
    'url' => ':attribute ढाँचा अमान्य छ।',

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
            'rule-name' => 'अनुकूलन सन्देश',
        ],
        'g-recaptcha-response' => [
            'required' => 'कृपया प्रमाणित गर्नुहोस् कि तपाईं रोबोट हुनुहुन्न।',
            'captcha' => 'क्याप्चा त्रुटि! पछि पुन: प्रयास गर्नुहोस् वा साइट प्रशासकलाई सम्पर्क गर्नुहोस्।',
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



    'accepted_if' => ':attribute फिल्ड स्वीकार गर्नुपर्छ जब :other हुन्छ :value।',
    'ascii' => ':विशेषता फिल्डमा एकल-बाइट अल्फान्यूमेरिक वर्ण र प्रतीकहरू मात्र समावेश हुनुपर्छ।',
    'can' => ':attribute फिल्डमा अनाधिकृत मान समावेश छ।',
    'contains' => ':attribute फिल्डमा आवश्यक मान छैन।',
    'current_password' => 'पासवर्ड गलत छ।',
    'date_equals' => ':attribute फिल्ड :date बराबरको मिति हुनुपर्छ।',
    'decimal' => ':विशेषता फिल्डमा :दशमलव दशमलव स्थानहरू हुनुपर्छ।',
    'declined' => ':विशेषता क्षेत्र अस्वीकार गरिनु पर्छ।',
    'declined_if' => ':attribute फिल्ड अस्वीकार गरिनुपर्छ जब :other :value हुन्छ।',
    'doesnt_end_with' => ':attribute फिल्ड निम्न मध्ये कुनै एकसँग समाप्त हुनु हुँदैन: :values।',
    'doesnt_start_with' => ':attribute फिल्ड निम्न मध्ये एकबाट सुरु हुनु हुँदैन: :values।',
    'ends_with' => ':attribute फिल्ड निम्न मध्ये एउटासँग अन्त्य हुनुपर्छ: :values।',
    'enum' => 'चयन गरिएको :विशेषता अमान्य छ।',
    'extensions' => ':attribute फिल्डमा निम्न मध्ये एउटा विस्तार हुनुपर्छ: :values।',
    'hex_color' => ':attribute फिल्ड मान्य हेक्साडेसिमल रङ हुनुपर्छ।',
    'list' => ':विशेषता क्षेत्र एक सूची हुनुपर्छ।',
    'lowercase' => ':attribute फिल्ड लोअरकेस हुनुपर्छ।',
    'mac_address' => ':विशेषता फिल्ड वैध MAC ठेगाना हुनुपर्छ।',
    'max_digits' => ':विशेषता फिल्डमा :अधिकतम अंकहरू हुनुहुँदैन।',
    'min_digits' => ':attribute फिल्डमा कम्तिमा :min अंक हुनुपर्छ।',
    'missing' => ':विशेषता फिल्ड हराइरहेको हुनुपर्छ।',
    'missing_if' => ':attribute फिल्ड हराइरहेको हुनुपर्छ जब :other हुन्छ :value।',
    'missing_unless' => ':अन्य :मान नभएसम्म :विशेषता फिल्ड हराइरहेको हुनुपर्छ।',
    'missing_with' => ':values उपस्थित हुँदा :attribute फिल्ड हराइरहेको हुनुपर्छ।',
    'missing_with_all' => ':values उपस्थित हुँदा :attribute फिल्ड हराइरहेको हुनुपर्छ।',
    'multiple_of' => ':attribute फिल्ड :value को गुणन हुनुपर्छ।',
    'password' => [
        'letters' => ':विशेषता फिल्डमा कम्तिमा एउटा अक्षर हुनुपर्छ।',
        'mixed' => ':attribute फिल्डमा कम्तिमा एउटा ठूलो र एउटा सानो अक्षर हुनु पर्छ।',
        'numbers' => ':विशेषता फिल्डमा कम्तिमा एउटा नम्बर हुनुपर्छ।',
        'symbols' => ':attribute फिल्डमा कम्तिमा एउटा प्रतीक हुनुपर्छ।',
        'uncompromised' => 'दिइएको :विशेषता डाटा चुहावटमा देखा परेको छ। कृपया फरक छान्नुहोस् :विशेषता।',
    ],
    'present_if' => ':attribute फिल्ड उपस्थित हुनुपर्छ जब :other हुन्छ :value।',
    'present_unless' => ':अन्य :मान नभएसम्म :विशेषता क्षेत्र उपस्थित हुनुपर्छ।',
    'present_with' => ':values उपस्थित हुँदा :attribute फिल्ड उपस्थित हुनुपर्छ।',
    'present_with_all' => ':values उपस्थित हुँदा :attribute फिल्ड उपस्थित हुनुपर्छ।',
    'prohibited' => ':विशेषता क्षेत्र निषेधित छ।',
    'prohibited_if' => ':attribute फिल्ड निषेध गरिएको छ जब :other हुन्छ :value।',
    'prohibited_unless' => ':attribute फिल्ड निषेधित छ जबसम्म :अन्य :values मा छैन।',
    'prohibits' => ':attribute फिल्डले :अन्यलाई उपस्थित हुनबाट रोक्छ।',
    'required_array_keys' => ':विशेषता फिल्डमा::values का लागि प्रविष्टिहरू समावेश हुनुपर्छ।',
    'required_if_accepted' => ':अन्य स्वीकृत हुँदा :विशेषता क्षेत्र आवश्यक हुन्छ।',
    'required_if_declined' => ':अन्य अस्वीकृत हुँदा :विशेषता क्षेत्र आवश्यक हुन्छ।',
    'starts_with' => ':attribute फिल्ड निम्न मध्ये एकबाट सुरु हुनुपर्छ: :values।',
    'uppercase' => ':attribute फिल्ड अपरकेस हुनुपर्छ।',
    'ulid' => ':विशेषता फिल्ड मान्य ULID हुनुपर्छ।',
    'uuid' => ':विशेषता फिल्ड मान्य UUID हुनुपर्छ।',
];
