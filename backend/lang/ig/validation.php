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

    'accepted' => 'A ga-anabatarịrị :attribute.',
    'active_url' => ':attribute abụghị ezigbo URL.',
    'after' => ':attribute ga-abụrịrị ụbọchị mgbe :date gachara.',
    'after_or_equal' => ':attribute ga-abụrịrị ụbọchị gachara ma ọ bụ ha nhata na :date.',
    'alpha' => ':attribute nwere ike ịnwe naanị mkpụrụedemede.',
    'alpha_dash' => ':attribute nwere ike ịnwe naanị mkpụrụedemede, ọnụọgụ na akara akara.',
    'alpha_num' => ':attribute nwere ike ịnwe naanị mkpụrụedemede na ọnụọgụ.',
    'array' => ':attribute ga-abụrịrị n\'usoro.',
    'before' => ':attribute ga-abụrịrị ụbọchị tupu :date.',
    'before_or_equal' => ':attribute ga-abụrịrị ụbọchị tupu ma ọ bụ nhata na :date.',
    'between' => [
        'numeric' => ':attribute ga-abụrịrị n\'etiti :min na :max.',
        'file' => ':attribute ga-abụrịrị n\'etiti :min na :max kilobytes.',
        'string' => ':attribute ga-abụrịrị n\'etiti mkpụrụedemede :min na :max.',
        'array' => 'Ihe :attribute ga-enwerịrị n\'etiti ihe :min na :max.',
    ],
    'boolean' => 'Oghere :attribute ga-abụrịrị eziokwu ma ọ bụ ụgha.',
    'confirmed' => 'Nkwenye :attribute adabaghị.',
    'date' => ':attribute abụghị ezigbo ụbọchị.',
    'date_format' => ':attribute adabaghị na usoro :format.',
    'different' => ':attribute na :other ga-adị iche.',
    'digits' => ':attribute ga-abụrịrị nkeji :digits.',
    'digits_between' => ':attribute ga-abụrịrị n\'etiti ọnụọgụ :min na :max.',
    'dimensions' => ':attribute nwere akụkụ onyonyo ezighi ezi.',
    'distinct' => 'Ogige :attribute nwere uru oyiri.',
    'email' => ':attribute ga-abụrịrị adreesị ozi-e ziri ezi.',
    'exists' => ':attribute ahọpụtara adịghị mma.',
    'file' => ':attribute ga-abụrịrị faịlụ.',
    'filled' => 'Mpaghara :attribute ga-enwerịrị uru.',
    'gt' => [
        'numeric' => ':attribute ga-adịrịrị karịa :value.',
        'file' => ':attribute ga-adịrịrị karịa :value kilobytes.',
        'string' => ':attribute ga-adịrịrị karịa mkpụrụedemede :value.',
        'array' => ':attribute ga-enwerịrị ihe karịrị :value.',
    ],
    'gte' => [
        'numeric' => ':attribute ga-adịrịrị karịa ma ọ bụ ha nhata :value.',
        'file' => ':attribute ga-enwerịrị ibu karịa ma ọ bụ nhata :value kilobytes.',
        'string' => ':attribute ga-adịrịrị karịa ma ọ bụ ha nhata mkpụrụedemede :value.',
        'array' => ':attribute ga-enwerịrị ihe :value ma ọ bụ karịa.',
    ],
    'image' => ':attribute ga-abụrịrị onyonyo.',
    'in' => ':attribute ahọpụtara adịghị mma.',
    'in_array' => 'Oghere :attribute adịghị na :other.',
    'integer' => ':attribute ga-abụrịrị ọnụọgụ.',
    'ip' => ':attribute ga-abụrịrị adreesị IP bara uru.',
    'ipv4' => ':attribute ga-abụrịrị adreesị IPv4 bara uru.',
    'ipv6' => ':attribute ga-abụrịrị adreesị IPv6 bara uru.',
    'json' => ':attribute ga-abụrịrị eriri JSON bara uru.',
    'lt' => [
        'numeric' => ':attribute ga-abụrịrị ihe na-erughị :value.',
        'file' => ':attribute ga-abụrịrị ihe na-erughị :value kilobytes.',
        'string' => ':attribute ga-abụrịrị ihe na-erughị mkpụrụedemede :value.',
        'array' => 'Ihe :attribute ga-enwerịrị ihe na-erughị :value.',
    ],
    'lte' => [
        'numeric' => ':attribute ga-abụrịrị ihe na-erughị ma ọ bụ hà nhata :value.',
        'file' => ':attribute ga-abụrịrị ihe na-erughị ma ọ bụ nhata :value kilobytes.',
        'string' => ':attribute ga-abụrịrị ihe na-erughị ma ọ bụ ha nhata mkpụrụedemede :value.',
        'array' => ':attribute agaghị enwe ihe karịrị :value.',
    ],
    'max' => [
        'numeric' => ':attribute nwere ike ghara ibu karịa :max.',
        'file' => ':attribute nwere ike ghara ibu karịa :max kilobytes.',
        'string' => ':attribute nwere ike ghara ibu karịa mkpụrụedemede :max.',
        'array' => ':attribute nwere ike ọ gaghị enwe ihe karịrị :max.',
    ],
    'mimes' => ':attribute ga-abụrịrị faịlụ nke ụdị: :values.',
    'mimetypes' => ':attribute ga-abụrịrị faịlụ nke ụdị: :values.',
    'min' => [
        'numeric' => ':attribute ga-abụrịrị opekata mpe :min.',
        'file' => ':attribute ga-abụrịrị opekata mpe :min kilobytes.',
        'string' => ':attribute ga-abụrịrị opekata mpe mkpụrụedemede :min.',
        'array' => ':attribute ga-enwerịrị opekata mpe ihe :min.',
    ],
    'not_in' => ':attribute ahọpụtara adịghị mma.',
    'not_regex' => 'Ụdị :attribute abaghị uru.',
    'numeric' => ':attribute ga-abụrịrị ọnụọgụ.',
    'present' => 'Oghere :attribute ga-adịrịrị.',
    'regex' => 'Ụdị :attribute abaghị uru.',
    'required' => 'A chọrọ ubi :attribute.',
    'required_if' => 'A chọrọ ubi :attribute mgbe :other bụ :value.',
    'required_unless' => 'A chọrọ ubi :attribute ma ọ bụrụ na :other nọ na :values.',
    'required_with' => 'A chọrọ ubi :attribute mgbe :values dị.',
    'required_with_all' => 'A chọrọ ubi :attribute mgbe :values dị.',
    'required_without' => 'A choro ubi :attribute mgbe :values anọghị.',
    'required_without_all' => 'A chọrọ ubi :attribute mgbe ọ nweghị nke :values dị.',
    'same' => ':attribute na :other ga-adakọrịrị.',
    'size' => [
        'numeric' => ':attribute ga-abụrịrị :size.',
        'file' => ':attribute ga-abụrịrị :size kilobytes.',
        'string' => ':attribute ga-abụrịrị mkpụrụedemede :size.',
        'array' => 'Ihe :attribute ga-enwerịrị ihe :size.',
    ],
    'string' => ':attribute ga-abụrịrị eriri.',
    'timezone' => ':attribute ga-abụrịrị mpaghara dị irè.',
    'unique' => 'ewerela :attribute.',
    'uploaded' => ':attribute agaghị ebugo ya.',
    'url' => 'Ụdị :attribute abaghị uru.',

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
            'rule-name' => 'omenala-ozi',
        ],
        'g-recaptcha-response' => [
            'required' => 'Biko chọpụta na ị bụghị robot.',
            'captcha' => 'Njehie Captcha! nwaa ọzọ ma emechaa ma ọ bụ kpọtụrụ onye nchịkwa saịtị.',
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



    'accepted_if' => 'A ga-anabatarịrị ogige njirimara mgbe :ọzọ bụ: uru.',
    'ascii' => 'Mpaghara njirimara ga-enwerịrị naanị mkpụrụedemede na akara n\'otu-byte.',
    'can' => 'Mpaghara njirimara nwere uru na-akwadoghị.',
    'contains' => 'Mpaghara njirimara na-efu uru achọrọ.',
    'current_password' => 'Okwuntughe ezighi ezi.',
    'date_equals' => 'Ogige njirimara ga-abụrịrị ụbọchị ha nhata: ụbọchị.',
    'decimal' => 'Ogige njirimara ga-enwerịrị:decimal ntụpọ.',
    'declined' => 'A ga-ajụrịrị ogige njirimara:',
    'declined_if' => 'A ga-ajụrịrị ogige njirimara mgbe :ọzọ bụ: uru.',
    'doesnt_end_with' => 'Mpaghara njirimara agaghị ejedebe na otu n\'ime ihe ndị a: ụkpụrụ.',
    'doesnt_start_with' => 'Ogige njirimara agaghị ebido na otu n\'ime ihe ndị a: ụkpụrụ.',
    'ends_with' => 'Mpaghara njirimara ga-eji otu n\'ime ihe ndị a mechie: ụkpụrụ.',
    'enum' => 'Njirimara ahọpụtara ezighi ezi.',
    'extensions' => 'Ogige njirimara ga-enwerịrị otu n\'ime ndọtị ndị a: ụkpụrụ.',
    'hex_color' => 'Ogige njirimara ga-abụrịrị agba hexadecimal ziri ezi.',
    'list' => 'Ogige njirimara ga-abụrịrị ndepụta.',
    'lowercase' => 'Mpaghara njirimara ga-abụrịrị obere mkpụrụedemede.',
    'mac_address' => 'Ogige njirimara ga-abụrịrị adreesị MAC bara uru.',
    'max_digits' => 'Ogige njirimara agaghị enwe ihe karịrị: ọnụọgụ kacha.',
    'min_digits' => 'Ogige njirimara ga-enwerịrị opekata mpe :min.',
    'missing' => 'Ogige njirimara ga-efu.',
    'missing_if' => 'Ogige njirimara ga-efunarị mgbe :ọzọ bụ: uru.',
    'missing_unless' => 'Ogige njirimara ga-efu ma :ọzọ bụ :uru.',
    'missing_with' => 'Ogige njirimara ga-apụrịrị mgbe: ụkpụrụ dị.',
    'missing_with_all' => 'Ogige njirimara ga-efunarị mgbe: ụkpụrụ dị.',
    'multiple_of' => 'Ogige njirimara ga-abụrịrị otutu: uru.',
    'password' => [
        'letters' => 'Mpaghara njirimara ga-enwerịrị opekata mpe otu mkpụrụedemede.',
        'mixed' => 'Oghere àgwà: ga-enwerịrị opekata mpe otu mkpụrụedemede ukwu na otu obere mkpụrụedemede.',
        'numbers' => 'Ogige njirimara ga-enwerịrị opekata mpe otu nọmba.',
        'symbols' => 'Ogige njirimara ga-enwerịrị opekata mpe otu akara.',
        'uncompromised' => 'Njirimara enyere egosila na mwepu data. Biko họrọ iche: àgwà.',
    ],
    'present_if' => 'Mpaghara njirimara ga-adịrịrị mgbe :ọzọ bụ: uru.',
    'present_unless' => 'Ogige njirimara ga-adịrịrị ma :ọzọ bụ :uru.',
    'present_with' => 'Ogige njirimara ga-adịrịrị mgbe: ụkpụrụ dị.',
    'present_with_all' => 'Ogige njirimara ga-adịrịrị mgbe: ụkpụrụ dị.',
    'prohibited' => 'Amachibidoro ogige njirimara :',
    'prohibited_if' => 'Amachibidoro ubi : àgwà mgbe :ọzọ bụ : uru.',
    'prohibited_unless' => 'Amachibidoro ogige njirimara :ọ gwụla ma :ọzọ dị na: ụkpụrụ.',
    'prohibits' => 'Ogige àgwà :mmachibidoro :ọzọ ịnọ ya.',
    'required_array_keys' => 'Mpaghara njirimara ga-enwerịrị ndenye maka: ụkpụrụ.',
    'required_if_accepted' => 'A chọrọ ubi : àgwà mgbe :ọzọ anabatara.',
    'required_if_declined' => 'A chọrọ ubi : àgwà mgbe :ọzọ jụrụ.',
    'starts_with' => 'Ogige njirimara ga-amalite na otu n\'ime ihe ndị a: ụkpụrụ.',
    'uppercase' => 'Oghere njirimara: ga-abụrịrị nnukwu.',
    'ulid' => 'Ogige njirimara ga-abụrịrị ULID bara uru.',
    'uuid' => 'Ogige njirimara ga-abụrịrị UUID bara uru.',
];
