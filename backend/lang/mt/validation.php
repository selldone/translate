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

    'accepted' => 'Il-:attribute għandu jiġi aċċettat.',
    'active_url' => 'Il-:attribute mhuwiex URL validu.',
    'after' => 'Il-:attribute għandha tkun data wara :date.',
    'after_or_equal' => 'Il-:attribute għandha tkun data wara jew ugwali għal :date.',
    'alpha' => 'Il-:attribute jista\' jkun fih biss ittri.',
    'alpha_dash' => 'Il-:attribute jista\' jkun fih biss ittri, numri, u daxxijiet.',
    'alpha_num' => 'Il-:attribute jista\' jkun fih biss ittri u numri.',
    'array' => 'Il-:attribute għandu jkun firxa.',
    'before' => 'Il-:attribute għandu jkun data qabel :date.',
    'before_or_equal' => 'Il-:attribute għandu jkun data qabel jew ugwali għal :date.',
    'between' => [
        'numeric' => 'Il-:attribute għandu jkun bejn :min u :max.',
        'file' => 'Il-:attribute għandu jkun bejn il-kilobytes :min u :max.',
        'string' => 'Il-:attribute għandu jkun bejn il-karattri :min u :max.',
        'array' => 'Il-:attribute għandu jkollu bejn :min u :max oġġetti.',
    ],
    'boolean' => 'Il-qasam :attribute għandu jkun veru jew falz.',
    'confirmed' => 'Il-konferma :attribute ma taqbilx.',
    'date' => 'Il-:attribute mhix data valida.',
    'date_format' => 'Il- :attribute ma jaqbilx mal-format :format.',
    'different' => 'Il-:attribute u :other għandhom ikunu differenti.',
    'digits' => 'Il- :attribute għandu jkun :digits ċifri.',
    'digits_between' => 'Il-:attribute għandu jkun bejn iċ-ċifri :min u :max.',
    'dimensions' => 'Il-:attribute għandu dimensjonijiet tal-immaġni invalidi.',
    'distinct' => 'Il-qasam :attribute għandu valur duplikat.',
    'email' => 'Il-:attribute għandu jkun indirizz elettroniku validu.',
    'exists' => 'Il-:attribute magħżul huwa invalidu.',
    'file' => 'Il-:attribute għandu jkun fajl.',
    'filled' => 'Il-qasam :attribute għandu jkollu valur.',
    'gt' => [
        'numeric' => 'Il-:attribute għandu jkun akbar minn :value.',
        'file' => 'Il- :attribute għandu jkun akbar minn :value kilobytes.',
        'string' => 'Il-:attribute għandu jkun akbar minn karattri :value.',
        'array' => 'Il- :attribute għandu jkollu aktar minn :value oġġetti.',
    ],
    'gte' => [
        'numeric' => 'Il-:attribute għandu jkun akbar minn jew ugwali :value.',
        'file' => 'Il- :attribute għandu jkun akbar minn jew ugwali :value kilobytes.',
        'string' => 'Il-:attribute għandu jkun akbar minn jew daqs il-karattri :value.',
        'array' => 'Il-:attribute għandu jkollu oġġetti :value jew aktar.',
    ],
    'image' => 'Il-:attribute għandu jkun immaġini.',
    'in' => 'Il-:attribute magħżul huwa invalidu.',
    'in_array' => 'Il-qasam :attribute ma jeżistix f\' :other.',
    'integer' => 'Il-:attribute għandu jkun numru sħiħ.',
    'ip' => 'Il-:attribute għandu jkun indirizz IP validu.',
    'ipv4' => 'Il-:attribute għandu jkun indirizz IPv4 validu.',
    'ipv6' => 'Il-:attribute għandu jkun indirizz IPv6 validu.',
    'json' => 'Il-:attribute għandu jkun string JSON valida.',
    'lt' => [
        'numeric' => 'Il-:attribute għandu jkun inqas minn :value.',
        'file' => 'Il-:attribute għandu jkun inqas minn :value kilobytes.',
        'string' => 'Il-:attribute għandu jkun inqas minn karattri :value.',
        'array' => 'Il-:attribute għandu jkollu inqas minn oġġetti :value.',
    ],
    'lte' => [
        'numeric' => 'Il-:attribute għandu jkun inqas minn jew ugwali :value.',
        'file' => 'Il- :attribute għandu jkun inqas minn jew ugwali :value kilobytes.',
        'string' => 'Il-:attribute għandu jkun karattri :value inqas jew ugwali.',
        'array' => 'Il- :attribute m\'għandux ikollu aktar minn :value oġġetti.',
    ],
    'max' => [
        'numeric' => 'Il-:attribute ma jistax ikun akbar minn :max.',
        'file' => 'Il-:attribute ma jistax ikun akbar minn :max kilobytes.',
        'string' => 'Il-:attribute ma jistax ikun akbar minn karattri :max.',
        'array' => 'Il-:attribute jista\' ma jkollux aktar minn oġġetti :max.',
    ],
    'mimes' => 'Il- :attribute għandu jkun fajl tat-tip: :values.',
    'mimetypes' => 'Il- :attribute għandu jkun fajl tat-tip: :values.',
    'min' => [
        'numeric' => 'Il-:attribute għandu jkun mill-inqas :min.',
        'file' => 'Il-:attribute għandu jkun mill-inqas :min kilobytes.',
        'string' => 'Il-:attribute għandu jkun mill-inqas karattri :min.',
        'array' => 'Il-:attribute għandu jkollu mill-inqas oġġetti :min.',
    ],
    'not_in' => 'Il-:attribute magħżul huwa invalidu.',
    'not_regex' => 'Il-format :attribute mhuwiex validu.',
    'numeric' => 'Il-:attribute għandu jkun numru.',
    'present' => 'Il-qasam :attribute għandu jkun preżenti.',
    'regex' => 'Il-format :attribute mhuwiex validu.',
    'required' => 'Il-qasam :attribute huwa meħtieġ.',
    'required_if' => 'Il-qasam :attribute huwa meħtieġ meta :other huwa :value.',
    'required_unless' => 'Il-qasam :attribute huwa meħtieġ sakemm :other ma jkunx f\' :values.',
    'required_with' => 'Il-qasam :attribute huwa meħtieġ meta :values ikun preżenti.',
    'required_with_all' => 'Il-qasam :attribute huwa meħtieġ meta :values ikun preżenti.',
    'required_without' => 'Il-qasam :attribute huwa meħtieġ meta :values ma jkunx preżenti.',
    'required_without_all' => 'Il-qasam :attribute huwa meħtieġ meta l-ebda wieħed minn :values ma jkun preżenti.',
    'same' => 'Il- :attribute u :other iridu jaqblu.',
    'size' => [
        'numeric' => 'Il- :attribute għandu jkun :size.',
        'file' => 'Il- :attribute għandu jkun :size kilobytes.',
        'string' => 'Il- :attribute għandu jkun karattri :size.',
        'array' => 'Il-:attribute għandu jkun fih oġġetti :size.',
    ],
    'string' => 'Il-:attribute għandu jkun string.',
    'timezone' => 'Il-:attribute għandha tkun żona valida.',
    'unique' => 'Il-:attribute diġà ttieħdet.',
    'uploaded' => 'Il-:attribute naqas milli jtella\'.',
    'url' => 'Il-format :attribute mhuwiex validu.',

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
            'rule-name' => 'messaġġ apposta',
        ],
        'g-recaptcha-response' => [
            'required' => 'Jekk jogħġbok ivverifika li m\'intix robot.',
            'captcha' => 'Żball captcha! ipprova aktar tard jew ikkuntattja lill-amministratur tas-sit.',
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



    'accepted_if' => 'Il-qasam :attribute għandu jiġi aċċettat meta :other huwa :value.',
    'ascii' => 'Il-qasam :attribute għandu jkun fih biss karattri u simboli alfanumeriċi b\'byte wieħed.',
    'can' => 'Il-qasam :attribute fih valur mhux awtorizzat.',
    'contains' => 'Il-qasam :attribute huwa nieqes valur meħtieġ.',
    'current_password' => 'Il-password mhix korretta.',
    'date_equals' => 'Il-qasam :attribute għandu jkun data ugwali għal :date.',
    'decimal' => 'Il-qasam :attribute għandu jkollu :decimal postijiet deċimali.',
    'declined' => 'Il-qasam :attribute għandu jiġi rrifjutat.',
    'declined_if' => 'Il-qasam :attribute għandu jiġi rrifjutat meta :other ikun :value.',
    'doesnt_end_with' => 'Il-qasam :attribute m\'għandux jispiċċa b\'wieħed minn dawn li ġejjin: :values.',
    'doesnt_start_with' => 'Il-qasam :attribute m\'għandux jibda b\'wieħed minn dawn li ġejjin: :values.',
    'ends_with' => 'Il-qasam :attribute għandu jispiċċa b\'wieħed minn dawn li ġejjin: :values.',
    'enum' => 'L-attribut : magħżul huwa invalidu.',
    'extensions' => 'Il-qasam :attribute għandu jkollu waħda mill-estensjonijiet li ġejjin: :values.',
    'hex_color' => 'Il-qasam :attribute għandu jkun kulur eżadeċimali validu.',
    'list' => 'Il-qasam :attribute għandu jkun lista.',
    'lowercase' => 'Il-qasam :attribute għandu jkun zgħar.',
    'mac_address' => 'Il-qasam :attribute għandu jkun indirizz MAC validu.',
    'max_digits' => 'Il-qasam :attribute m\'għandux ikollu aktar minn :max ċifri.',
    'min_digits' => 'Il-qasam :attribute għandu jkollu mill-inqas :min ċifri.',
    'missing' => 'Il-qasam :attribute għandu jkun nieqes.',
    'missing_if' => 'Il-qasam :attribute għandu jkun nieqes meta :other huwa :value.',
    'missing_unless' => 'Il-qasam :attribute għandu jkun nieqes sakemm :other ma jkunx :value.',
    'missing_with' => 'Il-qasam :attribute għandu jkun nieqes meta :values ikun preżenti.',
    'missing_with_all' => 'Il-qasam :attribute għandu jkun nieqes meta :values huma preżenti.',
    'multiple_of' => 'Il-qasam :attribute għandu jkun multiplu ta\' :value.',
    'password' => [
        'letters' => 'Il-qasam :attribute għandu jkun fih mill-inqas ittra waħda.',
        'mixed' => 'Il-qasam :attribute għandu jkun fih mill-inqas ittra waħda kbira u ittra żgħira waħda.',
        'numbers' => 'Il-qasam :attribute għandu jkun fih mill-inqas numru wieħed.',
        'symbols' => 'Il-qasam :attribute għandu jkun fih mill-inqas simbolu wieħed.',
        'uncompromised' => 'L-attribut::deher fi tnixxija tad-dejta. Jekk jogħġbok agħżel :attribut differenti.',
    ],
    'present_if' => 'Il-qasam :attribute għandu jkun preżenti meta :other huwa :value.',
    'present_unless' => 'Il-qasam :attribute għandu jkun preżenti sakemm :other ma jkunx :value.',
    'present_with' => 'Il-qasam :attribute għandu jkun preżenti meta :values ikun preżenti.',
    'present_with_all' => 'Il-qasam :attribute għandu jkun preżenti meta :values huma preżenti.',
    'prohibited' => 'Il-qasam :attribute huwa pprojbit.',
    'prohibited_if' => 'Il-qasam :attribute huwa pprojbit meta :other huwa :value.',
    'prohibited_unless' => 'Il-qasam :attribute huwa pprojbit sakemm :other ma jkunx f\' :values.',
    'prohibits' => 'Il-qasam :attribute jipprojbixxi lil :other milli jkun preżenti.',
    'required_array_keys' => 'Il-qasam :attribute għandu jkun fih entrati għal: :values.',
    'required_if_accepted' => 'Il-qasam :attribute huwa meħtieġ meta :other tkun aċċettata.',
    'required_if_declined' => 'Il-qasam :attribute huwa meħtieġ meta :other jiġi rrifjutat.',
    'starts_with' => 'Il-qasam :attribute għandu jibda b\'wieħed minn dawn li ġejjin: :values.',
    'uppercase' => 'Il-qasam :attribute għandu jkun b\'ittri kbar.',
    'ulid' => 'Il-qasam :attribute għandu jkun ULID validu.',
    'uuid' => 'Il-qasam :attribute għandu jkun UUID validu.',
];
