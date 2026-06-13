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

    'accepted' => ':attribute తప్పనిసరిగా ఆమోదించబడాలి.',
    'active_url' => ':attribute చెల్లుబాటు అయ్యే URL కాదు.',
    'after' => ':attribute తప్పనిసరిగా :date తర్వాత తేదీ అయి ఉండాలి.',
    'after_or_equal' => ':attribute తప్పనిసరిగా :date తర్వాత లేదా సమానమైన తేదీ అయి ఉండాలి.',
    'alpha' => ':attribute అక్షరాలను మాత్రమే కలిగి ఉండవచ్చు.',
    'alpha_dash' => ':attribute అక్షరాలు, సంఖ్యలు మరియు డాష్‌లను మాత్రమే కలిగి ఉండవచ్చు.',
    'alpha_num' => ':attribute అక్షరాలు మరియు సంఖ్యలను మాత్రమే కలిగి ఉండవచ్చు.',
    'array' => ':attribute తప్పనిసరిగా శ్రేణి అయి ఉండాలి.',
    'before' => ':attribute తప్పనిసరిగా :dateకి ముందు తేదీ అయి ఉండాలి.',
    'before_or_equal' => ':attribute తప్పనిసరిగా :dateకి ముందు లేదా సమానమైన తేదీ అయి ఉండాలి.',
    'between' => [
        'numeric' => ':attribute తప్పనిసరిగా :min మరియు :max మధ్య ఉండాలి.',
        'file' => ':attribute తప్పనిసరిగా :min మరియు :max కిలోబైట్‌ల మధ్య ఉండాలి.',
        'string' => ':attribute తప్పనిసరిగా :min మరియు :max అక్షరాల మధ్య ఉండాలి.',
        'array' => ':attribute తప్పనిసరిగా :min మరియు :max అంశాలను కలిగి ఉండాలి.',
    ],
    'boolean' => ':attribute ఫీల్డ్ తప్పక నిజం లేదా తప్పు అయి ఉండాలి.',
    'confirmed' => ':attribute నిర్ధారణ సరిపోలలేదు.',
    'date' => ':attribute చెల్లుబాటు అయ్యే తేదీ కాదు.',
    'date_format' => ':attribute ఫార్మాట్ :formatతో సరిపోలడం లేదు.',
    'different' => ':attribute మరియు :other తప్పనిసరిగా భిన్నంగా ఉండాలి.',
    'digits' => ':attribute తప్పనిసరిగా :digits అంకెలు అయి ఉండాలి.',
    'digits_between' => ':attribute తప్పనిసరిగా :min మరియు :max అంకెల మధ్య ఉండాలి.',
    'dimensions' => ':attribute చెల్లని చిత్ర కొలతలు కలిగి ఉంది.',
    'distinct' => ':attribute ఫీల్డ్ నకిలీ విలువను కలిగి ఉంది.',
    'email' => ':attribute తప్పనిసరిగా చెల్లుబాటు అయ్యే ఇమెయిల్ చిరునామా అయి ఉండాలి.',
    'exists' => 'ఎంచుకున్న :attribute చెల్లదు.',
    'file' => ':attribute తప్పనిసరిగా ఫైల్ అయి ఉండాలి.',
    'filled' => ':attribute ఫీల్డ్ తప్పనిసరిగా విలువను కలిగి ఉండాలి.',
    'gt' => [
        'numeric' => ':attribute తప్పనిసరిగా :value కంటే ఎక్కువగా ఉండాలి.',
        'file' => ':attribute తప్పనిసరిగా :value కిలోబైట్‌ల కంటే ఎక్కువగా ఉండాలి.',
        'string' => ':attribute తప్పనిసరిగా :value అక్షరాల కంటే ఎక్కువగా ఉండాలి.',
        'array' => ':attribute తప్పనిసరిగా :value కంటే ఎక్కువ అంశాలను కలిగి ఉండాలి.',
    ],
    'gte' => [
        'numeric' => ':attribute :value కంటే ఎక్కువగా లేదా సమానంగా ఉండాలి.',
        'file' => ':attribute తప్పనిసరిగా :value కిలోబైట్‌ల కంటే ఎక్కువగా లేదా సమానంగా ఉండాలి.',
        'string' => ':attribute తప్పనిసరిగా :value అక్షరాల కంటే ఎక్కువగా లేదా సమానంగా ఉండాలి.',
        'array' => ':attribute తప్పనిసరిగా :value అంశాలు లేదా అంతకంటే ఎక్కువ కలిగి ఉండాలి.',
    ],
    'image' => ':attribute తప్పనిసరిగా చిత్రం అయి ఉండాలి.',
    'in' => 'ఎంచుకున్న :attribute చెల్లదు.',
    'in_array' => ':attribute ఫీల్డ్ :otherలో లేదు.',
    'integer' => ':attribute తప్పనిసరిగా పూర్ణాంకం అయి ఉండాలి.',
    'ip' => ':attribute తప్పనిసరిగా చెల్లుబాటు అయ్యే IP చిరునామా అయి ఉండాలి.',
    'ipv4' => ':attribute తప్పనిసరిగా చెల్లుబాటు అయ్యే IPv4 చిరునామా అయి ఉండాలి.',
    'ipv6' => ':attribute తప్పనిసరిగా చెల్లుబాటు అయ్యే IPv6 చిరునామా అయి ఉండాలి.',
    'json' => ':attribute తప్పనిసరిగా చెల్లుబాటు అయ్యే JSON స్ట్రింగ్ అయి ఉండాలి.',
    'lt' => [
        'numeric' => ':attribute తప్పనిసరిగా :value కంటే తక్కువగా ఉండాలి.',
        'file' => ':attribute తప్పనిసరిగా :value కిలోబైట్‌ల కంటే తక్కువగా ఉండాలి.',
        'string' => ':attribute తప్పనిసరిగా :value అక్షరాల కంటే తక్కువగా ఉండాలి.',
        'array' => ':attribute తప్పనిసరిగా :value కంటే తక్కువ అంశాలను కలిగి ఉండాలి.',
    ],
    'lte' => [
        'numeric' => ':attribute :value కంటే తక్కువగా లేదా సమానంగా ఉండాలి.',
        'file' => ':attribute తప్పనిసరిగా :value కిలోబైట్‌ల కంటే తక్కువగా లేదా సమానంగా ఉండాలి.',
        'string' => ':attribute తప్పనిసరిగా :value అక్షరాల కంటే తక్కువగా లేదా సమానంగా ఉండాలి.',
        'array' => ':attribute :value కంటే ఎక్కువ అంశాలను కలిగి ఉండకూడదు.',
    ],
    'max' => [
        'numeric' => ':attribute :max కంటే ఎక్కువగా ఉండకపోవచ్చు.',
        'file' => ':attribute :max కిలోబైట్‌ల కంటే ఎక్కువగా ఉండకపోవచ్చు.',
        'string' => ':attribute :max అక్షరాల కంటే ఎక్కువగా ఉండకపోవచ్చు.',
        'array' => ':attribute :max కంటే ఎక్కువ అంశాలు ఉండకపోవచ్చు.',
    ],
    'mimes' => ':attribute తప్పనిసరిగా రకం ఫైల్ అయి ఉండాలి: :values.',
    'mimetypes' => ':attribute తప్పనిసరిగా రకం ఫైల్ అయి ఉండాలి: :values.',
    'min' => [
        'numeric' => ':attribute తప్పనిసరిగా కనీసం :min ఉండాలి.',
        'file' => ':attribute తప్పనిసరిగా కనీసం :min కిలోబైట్‌లు ఉండాలి.',
        'string' => ':attribute తప్పనిసరిగా కనీసం :min అక్షరాలు ఉండాలి.',
        'array' => ':attribute తప్పనిసరిగా కనీసం :min అంశాలను కలిగి ఉండాలి.',
    ],
    'not_in' => 'ఎంచుకున్న :attribute చెల్లదు.',
    'not_regex' => ':attribute ఫార్మాట్ చెల్లదు.',
    'numeric' => ':attribute తప్పనిసరిగా సంఖ్య అయి ఉండాలి.',
    'present' => ':attribute ఫీల్డ్ తప్పనిసరిగా ఉండాలి.',
    'regex' => ':attribute ఫార్మాట్ చెల్లదు.',
    'required' => ':attribute ఫీల్డ్ అవసరం.',
    'required_if' => ':attribute ఫీల్డ్ అవసరం అయితే :other :value.',
    'required_unless' => ':other :valuesలో ఉంటే తప్ప :attribute ఫీల్డ్ అవసరం.',
    'required_with' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ అవసరం.',
    'required_with_all' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ అవసరం.',
    'required_without' => ':values లేనప్పుడు :attribute ఫీల్డ్ అవసరం.',
    'required_without_all' => ':values ఏదీ లేనప్పుడు :attribute ఫీల్డ్ అవసరం.',
    'same' => ':attribute మరియు :other తప్పనిసరిగా సరిపోలాలి.',
    'size' => [
        'numeric' => ':attribute తప్పనిసరిగా :size అయి ఉండాలి.',
        'file' => ':attribute తప్పనిసరిగా :size కిలోబైట్‌లు ఉండాలి.',
        'string' => ':attribute తప్పనిసరిగా :size అక్షరాలు అయి ఉండాలి.',
        'array' => ':attribute తప్పనిసరిగా :size అంశాలను కలిగి ఉండాలి.',
    ],
    'string' => ':attribute తప్పనిసరిగా స్ట్రింగ్ అయి ఉండాలి.',
    'timezone' => ':attribute తప్పనిసరిగా చెల్లుబాటు అయ్యే జోన్ అయి ఉండాలి.',
    'unique' => ':attribute ఇప్పటికే తీసుకోబడింది.',
    'uploaded' => ':attribute అప్‌లోడ్ చేయడంలో విఫలమైంది.',
    'url' => ':attribute ఫార్మాట్ చెల్లదు.',

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
            'rule-name' => 'అనుకూల సందేశం',
        ],
        'g-recaptcha-response' => [
            'required' => 'దయచేసి మీరు రోబోట్ కాదని ధృవీకరించండి.',
            'captcha' => 'క్యాప్చా లోపం! తర్వాత మళ్లీ ప్రయత్నించండి లేదా సైట్ నిర్వాహకులను సంప్రదించండి.',
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



    'accepted_if' => ':attribute ఫీల్డ్ తప్పనిసరిగా ఆమోదించబడాలి :ఇతరది :value.',
    'ascii' => ':అట్రిబ్యూట్ ఫీల్డ్ తప్పనిసరిగా సింగిల్-బైట్ ఆల్ఫాన్యూమరిక్ అక్షరాలు మరియు చిహ్నాలను మాత్రమే కలిగి ఉండాలి.',
    'can' => ':attribute ఫీల్డ్ అనధికార విలువను కలిగి ఉంది.',
    'contains' => ':attribute ఫీల్డ్‌లో అవసరమైన విలువ లేదు.',
    'current_password' => 'పాస్వర్డ్ తప్పు.',
    'date_equals' => ':attribute ఫీల్డ్ తప్పనిసరిగా :dateకి సమానమైన తేదీ అయి ఉండాలి.',
    'decimal' => ':attribute ఫీల్డ్‌లో తప్పనిసరిగా :దశాంశ దశాంశ స్థానాలు ఉండాలి.',
    'declined' => ':attribute ఫీల్డ్ తప్పనిసరిగా తిరస్కరించబడాలి.',
    'declined_if' => ':attribute ఫీల్డ్ తప్పనిసరిగా తిరస్కరించబడాలి',
    'doesnt_end_with' => ':attribute ఫీల్డ్ కింది వాటిలో ఒకదానితో ముగియకూడదు: :values.',
    'doesnt_start_with' => ':attribute ఫీల్డ్ కింది వాటిలో ఒకదానితో ప్రారంభం కాకూడదు: :values.',
    'ends_with' => ':attribute ఫీల్డ్ తప్పనిసరిగా కింది వాటిలో ఒకదానితో ముగుస్తుంది: :values.',
    'enum' => 'ఎంచుకున్న :లక్షణం చెల్లదు.',
    'extensions' => ':attribute ఫీల్డ్ తప్పనిసరిగా కింది పొడిగింపులలో ఒకదాన్ని కలిగి ఉండాలి: :values.',
    'hex_color' => ':అట్రిబ్యూట్ ఫీల్డ్ తప్పనిసరిగా చెల్లుబాటు అయ్యే హెక్సాడెసిమల్ రంగు అయి ఉండాలి.',
    'list' => ':attribute ఫీల్డ్ తప్పనిసరిగా జాబితా అయి ఉండాలి.',
    'lowercase' => ':attribute ఫీల్డ్ తప్పనిసరిగా చిన్న అక్షరంగా ఉండాలి.',
    'mac_address' => ':attribute ఫీల్డ్ తప్పనిసరిగా చెల్లుబాటు అయ్యే MAC చిరునామా అయి ఉండాలి.',
    'max_digits' => ':attribute ఫీల్డ్‌లో :max అంకెల కంటే ఎక్కువ ఉండకూడదు.',
    'min_digits' => ':attribute ఫీల్డ్ తప్పనిసరిగా కనీసం :min అంకెలను కలిగి ఉండాలి.',
    'missing' => ':అట్రిబ్యూట్ ఫీల్డ్ తప్పక లేదు.',
    'missing_if' => ':attribute ఫీల్డ్ తప్పక తప్పిపోయి ఉండాలి:విలువ :other.',
    'missing_unless' => ':attribute ఫీల్డ్ తప్పక తప్పక తప్పక తప్పదు :other :value.',
    'missing_with' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ తప్పక తప్పక ఉండాలి.',
    'missing_with_all' => ':విలువలు ఉన్నప్పుడు :attribute ఫీల్డ్ తప్పక మిస్ అయి ఉండాలి.',
    'multiple_of' => ':attribute ఫీల్డ్ తప్పనిసరిగా :value యొక్క గుణకం అయి ఉండాలి.',
    'password' => [
        'letters' => ':attribute ఫీల్డ్ తప్పనిసరిగా కనీసం ఒక అక్షరాన్ని కలిగి ఉండాలి.',
        'mixed' => ':attribute ఫీల్డ్ తప్పనిసరిగా కనీసం ఒక పెద్ద అక్షరాన్ని మరియు ఒక చిన్న అక్షరాన్ని కలిగి ఉండాలి.',
        'numbers' => ':attribute ఫీల్డ్ తప్పనిసరిగా కనీసం ఒక సంఖ్యను కలిగి ఉండాలి.',
        'symbols' => ':attribute ఫీల్డ్ తప్పనిసరిగా కనీసం ఒక చిహ్నాన్ని కలిగి ఉండాలి.',
        'uncompromised' => 'డేటా లీక్‌లో ఇవ్వబడిన :attribute కనిపించింది. దయచేసి వేరే :లక్షణాన్ని ఎంచుకోండి.',
    ],
    'present_if' => ':attribute ఫీల్డ్ తప్పనిసరిగా ఉండాలి :ఇతరది :value.',
    'present_unless' => ':attribute ఫీల్డ్ తప్పనిసరిగా ఉండాలి తప్ప :other :value.',
    'present_with' => ':values ఉన్నప్పుడు :attribute ఫీల్డ్ తప్పనిసరిగా ఉండాలి.',
    'present_with_all' => ':విలువలు ఉన్నప్పుడు :attribute ఫీల్డ్ తప్పనిసరిగా ఉండాలి.',
    'prohibited' => ':attribute ఫీల్డ్ నిషేధించబడింది.',
    'prohibited_if' => ':attribute ఫీల్డ్ నిషేధించబడినప్పుడు :other :value.',
    'prohibited_unless' => ':attribute ఫీల్డ్ :విలువలు లో ఉంటే తప్ప:ఇతరది నిషేధించబడింది.',
    'prohibits' => ':attribute ఫీల్డ్:ఇతరులు ఉండకుండా నిషేధిస్తుంది.',
    'required_array_keys' => ':attribute ఫీల్డ్ తప్పనిసరిగా: :values కోసం ఎంట్రీలను కలిగి ఉండాలి.',
    'required_if_accepted' => ':attribute ఫీల్డ్ :ఇతరాన్ని ఆమోదించినప్పుడు అవసరం.',
    'required_if_declined' => ':attribute ఫీల్డ్ : ఇతర తిరస్కరించబడినప్పుడు అవసరం.',
    'starts_with' => ':attribute ఫీల్డ్ తప్పనిసరిగా కింది వాటిలో ఒకదానితో ప్రారంభం కావాలి: :values.',
    'uppercase' => ':attribute ఫీల్డ్ తప్పనిసరిగా పెద్ద అక్షరంగా ఉండాలి.',
    'ulid' => ':attribute ఫీల్డ్ తప్పనిసరిగా చెల్లుబాటు అయ్యే ULID అయి ఉండాలి.',
    'uuid' => ':attribute ఫీల్డ్ తప్పనిసరిగా చెల్లుబాటు అయ్యే UUID అయి ఉండాలి.',
];
