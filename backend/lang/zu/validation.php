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

    'accepted' => 'I-:attribute kumele yamukelwe.',
    'active_url' => 'I-:attribute ayiyona i-URL evumelekile.',
    'after' => 'I-:attribute kufanele ibe idethi engemva kwe-:date.',
    'after_or_equal' => 'I-:attribute kufanele ibe idethi engemva noma elingana ne-:date.',
    'alpha' => 'I-:attribute ingase ibe nezinhlamvu kuphela.',
    'alpha_dash' => 'I-:attribute ingaqukatha kuphela izinhlamvu, izinombolo, namadeshi.',
    'alpha_num' => 'I-:attribute ingaqukatha izinhlamvu nezinombolo kuphela.',
    'array' => 'I-:attribute kumele ibe amalungu afanayo.',
    'before' => 'I-:attribute kufanele ibe idethi engaphambi kwe-:date.',
    'before_or_equal' => 'I-:attribute kufanele kube idethi yangaphambili noma elingana ne-:date.',
    'between' => [
        'numeric' => 'I-:attribute kufanele ibe phakathi kwe-:min ne-:max.',
        'file' => 'I-:attribute kufanele ibe phakathi kwe-:min ne-:max amakhilobhayithi.',
        'string' => 'I-:attribute kumele ibe phakathi kwezinhlamvu ezingu-:min kanye ne-:max.',
        'array' => 'I-:attribute kufanele ibe phakathi kwezinto ze-:min kanye ne-:max.',
    ],
    'boolean' => 'I-:attribute field kufanele ibe yiqiniso noma amanga.',
    'confirmed' => 'Ukuqinisekiswa kwe-:attribute akufani.',
    'date' => 'I-:attribute ayiyona idethi evumelekile.',
    'date_format' => 'I-:attribute ayifani nefomethi ethi :format.',
    'different' => 'I-:attribute ne-:other kumele zihluke.',
    'digits' => 'I-:attribute kufanele ibe amadijithi angu-:digits.
I-',
    'digits_between' => 'I-:attribute kufanele ibe phakathi kwamadijithi angu-:min kanye no-:max.',
    'dimensions' => 'I-:attribute inobukhulu besithombe obungavumelekile.',
    'distinct' => 'I-:attribute field inenani eliyimpinda.',
    'email' => 'I-:attribute kumele kube ikheli le-imeyili elivumelekile.',
    'exists' => 'I-:attribute ekhethiwe ayivumelekile.',
    'file' => 'I-:attribute kumele kube ifayela.',
    'filled' => 'I-:attribute field kufanele ibe nevelu.',
    'gt' => [
        'numeric' => 'I-:attribute kufanele ibe nkulu kune-:value.',
        'file' => 'I-:attribute kumele ibe nkulu kune-:value kilobytes.',
        'string' => 'I-:attribute kufanele ibe nkulu kunezinhlamvu ze-:value.',
        'array' => 'I-:attribute kumele ibe nezinto ezingaphezu kuka-:value.',
    ],
    'gte' => [
        'numeric' => 'I-:attribute kufanele ibe nkulu noma ilingane ne-:value.',
        'file' => 'I-:attribute kumele ibe nkulu noma ilingane :value kilobytes.',
        'string' => 'I-:attribute kufanele ibe nkulu noma ilingane nezinhlamvu ze-:value.',
        'array' => 'I-:attribute kufanele ibe nezinto ze-:value noma ngaphezulu.',
    ],
    'image' => 'I-:attribute kumele ibe isithombe.',
    'in' => 'I-:attribute ekhethiwe ayivumelekile.',
    'in_array' => 'Inkambu ye-:attribute ayikho ku-:other.',
    'integer' => 'I-:attribute kumele ibe inombolo ephelele.',
    'ip' => 'I-:attribute kumele kube ikheli le-IP elivumelekile.',
    'ipv4' => 'I-:attribute kumele kube ikheli le-IPv4 elivumelekile.',
    'ipv6' => 'I-:attribute kumele kube ikheli le-IPv6 elivumelekile.',
    'json' => 'I-:attribute kumele kube iyunithi yezinhlamvu ye-JSON evumelekile.',
    'lt' => [
        'numeric' => 'I-:attribute kufanele ibe ngaphansi kuka-:value.',
        'file' => 'I-:attribute kumele ibe ngaphansi kuka-:value kilobytes.',
        'string' => 'I-:attribute kumele ibe ngaphansi kwezinhlamvu ezingu-:value.',
        'array' => 'I-:attribute kumele ibe nezinto ezingaphansi kuka-:value.',
    ],
    'lte' => [
        'numeric' => 'I-:attribute kufanele ibe ngaphansi noma ilingane ne-:value.',
        'file' => 'I-:attribute kumele ibe ngaphansi noma ilingane :value kilobytes.',
        'string' => 'I-:attribute kufanele ibe ngaphansi noma ilingane nezinhlamvu ze-:value.',
        'array' => 'I-:attribute akufanele ibe nezinto ezingaphezu kuka-:value.',
    ],
    'max' => [
        'numeric' => 'I-:attribute ingase ingabi nkulu kuno-:max.',
        'file' => 'I-:attribute ingase ingabi nkulu kuno-:max kilobytes.',
        'string' => 'I-:attribute ingase ingabi nkulu kunezinhlamvu ezingu-:max.',
        'array' => 'I-:attribute ingase ingabi nezinto ezingaphezu kuka-:max.',
    ],
    'mimes' => 'I-:attribute kumele kube ifayela lohlobo: :values.',
    'mimetypes' => 'I-:attribute kumele kube ifayela lohlobo: :values.',
    'min' => [
        'numeric' => 'I-:attribute kufanele okungenani ibe ngu-:min.',
        'file' => 'I-:attribute kumele okungenani ibe :min kilobytes.',
        'string' => 'I-:attribute kumele okungenani ibe izinhlamvu ezingu-:min.',
        'array' => 'I-:attribute kumele okungenani ibe nezinto ezingu-:min.',
    ],
    'not_in' => 'I-:attribute ekhethiwe ayivumelekile.',
    'not_regex' => 'Ifomethi ye-:attribute ayivumelekile.',
    'numeric' => 'I-:attribute kumele kube inombolo.',
    'present' => 'I-:attribute field kufanele ibe khona.',
    'regex' => 'Ifomethi ye-:attribute ayivumelekile.',
    'required' => 'I-:attribute field iyadingeka.',
    'required_if' => 'I-:attribute field iyadingeka uma :other ithi :value.',
    'required_unless' => 'Inkambu ye-:attribute iyadingeka ngaphandle uma i-:other iku-:values.',
    'required_with' => 'I-:attribute field iyadingeka uma :values ikhona.',
    'required_with_all' => 'I-:attribute field iyadingeka uma :values ikhona.',
    'required_without' => 'I-:attribute field iyadingeka uma :values ingekho.',
    'required_without_all' => 'Inkambu ye-:attribute iyadingeka uma kungekho neyodwa ye-:values ekhona.',
    'same' => 'I-:attribute ne-:other kufanele zifane.',
    'size' => [
        'numeric' => 'I-:attribute kumele ibe :size.',
        'file' => 'I-:attribute kumele ibe :size kilobytes.',
        'string' => 'I-:attribute kumele ibe yizinhlamvu ezingu-:size.',
        'array' => 'I-:attribute kufanele iqukathe izinto ze-:size.
I-',
    ],
    'string' => 'I-:attribute kumele ibe iyunithi yezinhlamvu.',
    'timezone' => 'I-:attribute kumele kube indawo evumelekile.',
    'unique' => 'I-:attribute isivele ithathiwe.',
    'uploaded' => 'I-:attribute ihlulekile ukulayisha.',
    'url' => 'Ifomethi ye-:attribute ayivumelekile.',

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
            'rule-name' => 'umlayezo wangokwezifiso',
        ],
        'g-recaptcha-response' => [
            'required' => 'Sicela uqinisekise ukuthi awulona irobhothi.',
            'captcha' => 'Iphutha le-Captcha! zama futhi emuva kwesikhathi noma thintana nomphathi wesayithi.',
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



    'accepted_if' => 'I-:attribute field kufanele yamukelwe uma :other ethi :value.',
    'ascii' => 'I-:attribute field kufanele ibe nezinhlamvu ze-alphanumeric zebhayithi eyodwa kuphela namasimbuli.',
    'can' => 'I-:attribute field iqukethe inani elingagunyaziwe.',
    'contains' => 'I-:attribute field ishoda ngenani elidingekayo.',
    'current_password' => 'Iphasiwedi ayilungile.',
    'date_equals' => 'I-:attribute field kufanele ibe idethi elingana no-:date.',
    'decimal' => 'I-:attribute field kufanele ibe :decimal izindawo zedesimali.',
    'declined' => 'I-:attribute field kumele yenqatshwe.',
    'declined_if' => 'I-:attribute field kufanele inqatshwe uma :other ithi :value.',
    'doesnt_end_with' => 'I-:attribute field akumele igcine ngokukodwa kwalokhu okulandelayo: :values.',
    'doesnt_start_with' => 'I-:attribute field akumele iqale ngokukodwa kwalokhu okulandelayo: :values.',
    'ends_with' => 'I-:attribute field kufanele igcine ngokukodwa kwalokhu okulandelayo: :values.',
    'enum' => 'I-:attribute ekhethiwe ayivumelekile.',
    'extensions' => 'I-:attribute field kufanele ibe nesandiso esisodwa kwezilandelayo: :values.',
    'hex_color' => 'I-:attribute field kufanele ibe umbala ovumelekile we-hexadecimal.',
    'list' => 'I-:attribute field kumele kube uhlu.',
    'lowercase' => 'I-:attribute field kumele ibe nezinhlamvu ezincane.',
    'mac_address' => 'I-:attribute field kufanele kube ikheli le-MAC elivumelekile.',
    'max_digits' => 'I-:attribute field akumele ibe namadijithi angaphezu kuka-:max.',
    'min_digits' => 'I-:attribute field kufanele okungenani ibe namadijithi angu-:min.',
    'missing' => 'I-:attribute field kumele ingekho.',
    'missing_if' => 'I-:attribute field kumele ingekho uma :other ithi :value.',
    'missing_unless' => 'I-:attribute field kumele ingekho ngaphandle uma :other ethi :value.',
    'missing_with' => 'I-:attribute field kumele ingekho uma :values ikhona.',
    'missing_with_all' => 'I-:attribute field kumele ingekho uma :values ekhona.',
    'multiple_of' => 'I-:attribute field kufanele ibe ukuphindaphindwa kwe-:value.',
    'password' => [
        'letters' => 'I-:attribute field kufanele iqukathe okungenani uhlamvu olulodwa.',
        'mixed' => 'I-:attribute field kufanele iqukathe okungenani usonhlamvukazi oyedwa kanye nohlamvu olulodwa oluncane.',
        'numbers' => 'I-:attribute field kufanele iqukathe okungenani inombolo eyodwa.',
        'symbols' => 'I-:attribute field kufanele iqukathe okungenani uphawu olulodwa.',
        'uncompromised' => 'I-:attribute enikeziwe ivele ekuputshuzweni kwedatha. Sicela ukhethe :imfanelo ehlukile.',
    ],
    'present_if' => 'I-:attribute field kufanele ibe khona uma :other ethi :value.',
    'present_unless' => 'I-:attribute field kufanele ibe khona ngaphandle uma :other ethi :value.',
    'present_with' => 'I-:attribute field kufanele ibe khona uma :values ikhona.',
    'present_with_all' => 'I-:attribute field kufanele ibe khona uma :values ekhona.',
    'prohibited' => 'I-:attribute field ayivunyelwe.',
    'prohibited_if' => 'I-:attribute field ayivunyelwe uma :other ethi :value.',
    'prohibited_unless' => 'I-:attribute field ayivunyelwe ngaphandle kokuthi :other iku:value.',
    'prohibits' => 'I-:attribute field iyakwenqabela :okunye ukuba khona.',
    'required_array_keys' => 'I-:attribute field kumele iqukathe okufakiwe: :values.',
    'required_if_accepted' => 'I-:attribute field iyadingeka uma :okunye kwamukelwa.',
    'required_if_declined' => 'I-:attribute field iyadingeka uma :okunye kunqatshwa.',
    'starts_with' => 'I-:attribute field kufanele iqale ngokukodwa kwalokhu okulandelayo: :values.',
    'uppercase' => 'I-:attribute field kumele ibe ngofeleba.',
    'ulid' => 'I-:attribute field kufanele ibe yi-LID evumelekile.',
    'uuid' => 'I-:attribute field kufanele ibe i-UUID evumelekile.',
];
