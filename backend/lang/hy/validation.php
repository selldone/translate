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

    'accepted' => ':attribute-ն պետք է ընդունվի:',
    'active_url' => ':attribute-ն վավեր URL չէ:',
    'after' => ':attribute-ն պետք է լինի :date-ից հետո:',
    'after_or_equal' => ':attribute-ն պետք է լինի :date-ին հաջորդող կամ հավասար ամսաթիվ:',
    'alpha' => ':attribute-ն կարող է պարունակել միայն տառեր:',
    'alpha_dash' => ':attribute-ն կարող է պարունակել միայն տառեր, թվեր և գծիկներ:',
    'alpha_num' => ':attribute-ն կարող է պարունակել միայն տառեր և թվեր:',
    'array' => ':attribute-ն պետք է լինի զանգված:',
    'before' => ':attribute-ն պետք է լինի :date-ից առաջ ամսաթիվ:',
    'before_or_equal' => ':attribute-ն պետք է լինի :date-ին նախորդող կամ հավասար ամսաթիվ:',
    'between' => [
        'numeric' => ':attribute-ն պետք է լինի :min-ի և :max-ի միջև:',
        'file' => ':attribute պետք է լինի :min և :max կիլոբայթների միջև:',
        'string' => ':attribute պետք է լինի :min և :max նիշերի միջև:',
        'array' => ':attribute-ն պետք է ունենա :min և :max տարրեր:',
    ],
    'boolean' => ':attribute դաշտը պետք է լինի true կամ false:',
    'confirmed' => ':attribute հաստատումը չի համընկնում:',
    'date' => ':attribute-ն վավեր ամսաթիվ չէ:',
    'date_format' => ':attribute-ն չի համապատասխանում :format ձևաչափին:',
    'different' => ':attribute-ը և :other-ը պետք է տարբեր լինեն։',
    'digits' => ':attribute պետք է լինի :digits թվանշաններ:',
    'digits_between' => ':attribute պետք է լինի :min և :max թվանշանների միջև:',
    'dimensions' => ':attribute-ն ունի պատկերի անվավեր չափեր:',
    'distinct' => ':attribute դաշտը կրկնօրինակ արժեք ունի:',
    'email' => ':attribute-ն պետք է վավեր էլփոստի հասցե լինի:',
    'exists' => 'Ընտրված :attribute-ն անվավեր է:',
    'file' => ':attribute-ն պետք է լինի ֆայլ:',
    'filled' => ':attribute դաշտը պետք է արժեք ունենա:',
    'gt' => [
        'numeric' => ':attribute-ն պետք է ավելի մեծ լինի, քան :value:',
        'file' => ':attribute պետք է լինի :value կիլոբայթից մեծ:',
        'string' => ':attribute պետք է լինի :value նիշից մեծ:',
        'array' => ':attribute պետք է ունենա ավելի քան :value տարրեր:',
    ],
    'gte' => [
        'numeric' => ':attribute-ն պետք է մեծ լինի կամ հավասար լինի :value-ին:',
        'file' => ':attribute պետք է լինի :value կիլոբայթից մեծ կամ հավասար:',
        'string' => ':attribute պետք է լինի ավելի մեծ կամ հավասար :value նիշերից:',
        'array' => ':attribute պետք է ունենա :value տարրեր կամ ավելին:',
    ],
    'image' => ':attribute-ն պետք է լինի պատկեր:',
    'in' => 'Ընտրված :attribute-ն անվավեր է:',
    'in_array' => ':attribute դաշտը գոյություն չունի :other-ում:',
    'integer' => ':attribute-ն պետք է լինի ամբողջ թիվ:',
    'ip' => ':attribute պետք է լինի վավեր IP հասցե:',
    'ipv4' => ':attribute-ն պետք է լինի վավեր IPv4 հասցե:',
    'ipv6' => ':attribute-ն պետք է լինի վավեր IPv6 հասցե:',
    'json' => ':attribute պետք է լինի վավեր JSON տող:',
    'lt' => [
        'numeric' => ':attribute-ն պետք է պակաս լինի :value-ից:',
        'file' => ':attribute պետք է լինի :value կիլոբայթից պակաս:',
        'string' => ':attribute պետք է պակաս լինի :value նիշերից:',
        'array' => ':attribute-ն պետք է ունենա :value-ից պակաս տարրեր:',
    ],
    'lte' => [
        'numeric' => ':attribute պետք է լինի փոքր կամ հավասար :value:',
        'file' => ':attribute պետք է լինի :value կիլոբայթից փոքր կամ հավասար:',
        'string' => ':attribute պետք է լինի փոքր կամ հավասար :value նիշերից:',
        'array' => ':attribute չպետք է ունենա ավելի քան :value տարրեր:',
    ],
    'max' => [
        'numeric' => ':attribute-ն չի կարող ավելի մեծ լինել, քան :max:',
        'file' => ':attribute-ն չի կարող գերազանցել :max կիլոբայթը:',
        'string' => ':attribute չի կարող ավելի մեծ լինել, քան :max նիշերը:',
        'array' => ':attribute-ն չի կարող ունենալ :max-ից ավելի տարրեր:',
    ],
    'mimes' => ':attribute-ն պետք է լինի :values տեսակի ֆայլ:',
    'mimetypes' => ':attribute-ն պետք է լինի :values տեսակի ֆայլ:',
    'min' => [
        'numeric' => ':attribute պետք է լինի առնվազն :min:',
        'file' => ':attribute պետք է լինի առնվազն :min կիլոբայթ:',
        'string' => ':attribute պետք է լինի առնվազն :min նիշ:',
        'array' => ':attribute-ն պետք է ունենա առնվազն :min տարրեր:',
    ],
    'not_in' => 'Ընտրված :attribute-ն անվավեր է:',
    'not_regex' => ':attribute ձևաչափն անվավեր է:',
    'numeric' => ':attribute-ն պետք է լինի թիվ:',
    'present' => ':attribute դաշտը պետք է լինի:',
    'regex' => ':attribute ձևաչափն անվավեր է:',
    'required' => ':attribute դաշտը պարտադիր է:',
    'required_if' => ':attribute դաշտը պարտադիր է, երբ :other-ը :value է:',
    'required_unless' => ':attribute դաշտը պարտադիր է, եթե :other-ը :values-ում չէ:',
    'required_with' => ':attribute դաշտը պահանջվում է, երբ առկա է :values:',
    'required_with_all' => ':attribute դաշտը պահանջվում է, երբ առկա է :values:',
    'required_without' => ':attribute դաշտը պահանջվում է, երբ :values չկա:',
    'required_without_all' => ':attribute դաշտը պահանջվում է, երբ :values-ից ոչ մեկը չկա:',
    'same' => ':attribute-ը և :other-ը պետք է համապատասխանեն:',
    'size' => [
        'numeric' => ':attribute պետք է լինի :size:',
        'file' => ':attribute պետք է լինի :size կիլոբայթ:',
        'string' => ':attribute պետք է լինի :size նիշ:',
        'array' => ':attribute պետք է պարունակի :size տարրեր:',
    ],
    'string' => ':attribute պետք է լինի տող:',
    'timezone' => ':attribute-ն պետք է վավեր գոտի լինի:',
    'unique' => ':attribute-ն արդեն վերցված է:',
    'uploaded' => ':attribute-ն չհաջողվեց վերբեռնել:',
    'url' => ':attribute ձևաչափն անվավեր է:',

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
            'rule-name' => 'մաքսային հաղորդագրություն',
        ],
        'g-recaptcha-response' => [
            'required' => 'Խնդրում ենք ստուգել, որ դուք ռոբոտ չեք:',
            'captcha' => 'Captcha-ի սխալ! փորձեք ավելի ուշ կամ կապվեք կայքի ադմինիստրատորի հետ:',
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



    'accepted_if' => ':attribute դաշտը պետք է ընդունվի, երբ :other-ը :value է:',
    'ascii' => ':attribute դաշտը պետք է պարունակի միայն մեկ բայթանոց տառային թվային նիշեր և նշաններ:',
    'can' => ':attribute դաշտը պարունակում է չթույլատրված արժեք:',
    'contains' => ':attribute դաշտում բացակայում է պահանջվող արժեքը:',
    'current_password' => 'Գաղտնաբառը սխալ է:',
    'date_equals' => ':attribute դաշտը պետք է լինի :date-ին հավասար ամսաթիվ:',
    'decimal' => ':attribute դաշտը պետք է ունենա : տասնորդական տասնորդական թվեր:',
    'declined' => ':attribute դաշտը պետք է մերժվի:',
    'declined_if' => ':attribute դաշտը պետք է մերժվի, երբ :other-ը :value է:',
    'doesnt_end_with' => ':attribute դաշտը չպետք է ավարտվի հետևյալներից որևէ մեկով. :values:',
    'doesnt_start_with' => ':attribute դաշտը չպետք է սկսվի հետևյալներից որևէ մեկով. :values:',
    'ends_with' => ':attribute դաշտը պետք է ավարտվի հետևյալով. :values:',
    'enum' => 'Ընտրված :հատկանիշն անվավեր է:',
    'extensions' => ':attribute դաշտը պետք է ունենա հետևյալ ընդարձակումներից մեկը՝ :values:',
    'hex_color' => ':attribute դաշտը պետք է լինի վավեր տասնվեցական գույն:',
    'list' => ':attribute դաշտը պետք է լինի ցուցակ:',
    'lowercase' => ':attribute դաշտը պետք է լինի փոքրատառ:',
    'mac_address' => ':attribute դաշտը պետք է լինի վավեր MAC հասցե:',
    'max_digits' => ':attribute դաշտը չպետք է ունենա ավելի քան :max թվանշան:',
    'min_digits' => ':attribute դաշտը պետք է ունենա առնվազն :min թվանշաններ:',
    'missing' => ':attribute դաշտը պետք է բացակայի:',
    'missing_if' => ':attribute դաշտը պետք է բացակայի, երբ :other-ը :value է:',
    'missing_unless' => ':attribute դաշտը պետք է բացակայի, եթե :other-ը :value չէ:',
    'missing_with' => ':attribute դաշտը պետք է բացակայի, երբ առկա է :values:',
    'missing_with_all' => ':attribute դաշտը պետք է բացակայի, երբ առկա են :values:',
    'multiple_of' => ':attribute դաշտը պետք է լինի :value-ի բազմապատիկ:',
    'password' => [
        'letters' => ':attribute դաշտը պետք է պարունակի առնվազն մեկ տառ:',
        'mixed' => ':attribute դաշտը պետք է պարունակի առնվազն մեկ մեծատառ և մեկ փոքրատառ:',
        'numbers' => ':attribute դաշտը պետք է պարունակի առնվազն մեկ թիվ։',
        'symbols' => ':attribute դաշտը պետք է պարունակի առնվազն մեկ նշան:',
        'uncompromised' => 'Տվյալ :ատրիբուտը հայտնվել է տվյալների արտահոսքի մեջ: Խնդրում ենք ընտրել այլ :attribute:',
    ],
    'present_if' => ':attribute դաշտը պետք է ներկա լինի, երբ :other-ը :value է:',
    'present_unless' => ':attribute դաշտը պետք է ներկա լինի, եթե :other-ը :value չէ:',
    'present_with' => ':attribute դաշտը պետք է ներկա լինի, երբ առկա է :values:',
    'present_with_all' => ':attribute դաշտը պետք է ներկա լինի, երբ առկա են :values:',
    'prohibited' => ':attribute դաշտն արգելված է:',
    'prohibited_if' => ':attribute դաշտն արգելված է, երբ :other-ը :value է:',
    'prohibited_unless' => ':attribute դաշտն արգելված է, եթե :other-ը :values-ում չէ:',
    'prohibits' => ':attribute դաշտն արգելում է :other-ին ներկա լինել:',
    'required_array_keys' => ':attribute դաշտը պետք է պարունակի գրառումներ՝ :values-ի համար:',
    'required_if_accepted' => ':attribute դաշտը պարտադիր է, երբ :other ընդունված է:',
    'required_if_declined' => ':attribute դաշտը պահանջվում է, երբ :other մերժված է:',
    'starts_with' => ':attribute դաշտը պետք է սկսվի հետևյալներից մեկով. :values:',
    'uppercase' => ':attribute դաշտը պետք է լինի մեծատառ:',
    'ulid' => ':attribute դաշտը պետք է լինի վավեր ULID:',
    'uuid' => ':attribute դաշտը պետք է լինի վավեր UUID:',
];
