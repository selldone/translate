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

    'accepted' => ':attribute кабыл алынышы керек.',
    'active_url' => ':attribute жарактуу URL эмес.',
    'after' => ':attribute :date кийинки күн болушу керек.',
    'after_or_equal' => ':attribute :dateдан кийинки же барабар күн болушу керек.',
    'alpha' => ':attribute тамгаларды гана камтышы мүмкүн.',
    'alpha_dash' => ':attribute тамгаларды, сандарды жана сызыктарды гана камтышы мүмкүн.',
    'alpha_num' => ':attribute тамгаларды жана сандарды гана камтышы мүмкүн.',
    'array' => ':attribute массив болушу керек.',
    'before' => ':attribute :date чейин күн болушу керек.',
    'before_or_equal' => ':attribute :date чейин же ага барабар күн болушу керек.',
    'between' => [
        'numeric' => ':attribute :min менен :max ортосунда болушу керек.',
        'file' => ':attribute :min менен :max килобайттын ортосунда болушу керек.',
        'string' => ':attribute :min жана :max белгилердин ортосунда болушу керек.',
        'array' => ':attribute :min менен :max ортосунда болушу керек.',
    ],
    'boolean' => ':attribute талаасы чын же жалган болушу керек.',
    'confirmed' => ':attribute ырастоосу дал келбейт.',
    'date' => ':attribute жарактуу күн эмес.',
    'date_format' => ':attribute :format форматына дал келбейт.',
    'different' => ':attribute жана :other башка болушу керек.',
    'digits' => ':attribute :digits цифралары болушу керек.',
    'digits_between' => ':attribute :min жана :max цифраларынын ортосунда болушу керек.',
    'dimensions' => ':attribute жараксыз сүрөт өлчөмдөрү бар.',
    'distinct' => ':attribute талаасында кайталанма маани бар.',
    'email' => ':attribute жарактуу электрондук почта дареги болушу керек.',
    'exists' => 'Тандалган :attribute жараксыз.',
    'file' => ':attribute файл болушу керек.',
    'filled' => ':attribute талаасында маани болушу керек.',
    'gt' => [
        'numeric' => ':attribute :valueдан чоңураак болушу керек.',
        'file' => ':attribute :value килобайттан чоңураак болушу керек.',
        'string' => ':attribute :value белгиден чоңураак болушу керек.',
        'array' => ':attribute :value элементтеринен көп болушу керек.',
    ],
    'gte' => [
        'numeric' => ':attribute :valueдан чоңураак же барабар болушу керек.',
        'file' => ':attribute :value килобайттан чоң же барабар болушу керек.',
        'string' => ':attribute :value белгиден чоңураак же барабар болушу керек.',
        'array' => ':attribute :value же андан көп нерселерди камтышы керек.',
    ],
    'image' => ':attribute сүрөт болушу керек.',
    'in' => 'Тандалган :attribute жараксыз.',
    'in_array' => ':attribute талаасы :other ичинде жок.',
    'integer' => ':attribute бүтүн сан болушу керек.',
    'ip' => ':attribute жарактуу IP дареги болушу керек.',
    'ipv4' => ':attribute жарактуу IPv4 дареги болушу керек.',
    'ipv6' => ':attribute жарактуу IPv6 дареги болушу керек.',
    'json' => ':attribute жарактуу JSON сап болушу керек.',
    'lt' => [
        'numeric' => ':attribute :value аз болушу керек.',
        'file' => ':attribute :value килобайттан аз болушу керек.',
        'string' => ':attribute :value белгиден аз болушу керек.',
        'array' => ':attribute :value элементтеринен азыраак болушу керек.',
    ],
    'lte' => [
        'numeric' => ':attribute :value аз же барабар болушу керек.',
        'file' => ':attribute :value килобайттан аз же барабар болушу керек.',
        'string' => ':attribute :value белгиден аз же барабар болушу керек.',
        'array' => ':attribute :value элементтеринен көп болбошу керек.',
    ],
    'max' => [
        'numeric' => ':attribute :max жогору болбошу мүмкүн.',
        'file' => ':attribute :max килобайттан ашпашы мүмкүн.',
        'string' => ':attribute :max символдорунан ашпашы мүмкүн.',
        'array' => ':attribute :max элементтеринен ашык болбошу мүмкүн.',
    ],
    'mimes' => ':attribute төмөнкү түрдөгү файл болушу керек: :values.',
    'mimetypes' => ':attribute төмөнкү түрдөгү файл болушу керек: :values.',
    'min' => [
        'numeric' => ':attribute жок дегенде :min болушу керек.',
        'file' => ':attribute кеминде :min килобайт болушу керек.',
        'string' => ':attribute кеминде :min белгиден турушу керек.',
        'array' => ':attribute кеминде :min элементтери болушу керек.',
    ],
    'not_in' => 'Тандалган :attribute жараксыз.',
    'not_regex' => ':attribute форматы жараксыз.',
    'numeric' => ':attribute сан болушу керек.',
    'present' => ':attribute талаасы болушу керек.',
    'regex' => ':attribute форматы жараксыз.',
    'required' => ':attribute талаасы талап кылынат.',
    'required_if' => ':other :value болгондо :attribute талаасы талап кылынат.',
    'required_unless' => ':other :values ичинде болбосо, :attribute талаасы талап кылынат.',
    'required_with' => ':attribute талаасы :values болгондо талап кылынат.',
    'required_with_all' => ':attribute талаасы :values болгондо талап кылынат.',
    'required_without' => ':attribute талаасы :values жок болгондо талап кылынат.',
    'required_without_all' => ':attribute талаасынын бири :values жок болгондо талап кылынат.',
    'same' => ':attribute жана :other дал келиши керек.',
    'size' => [
        'numeric' => ':attribute :size болушу керек.',
        'file' => ':attribute :size килобайт болушу керек.',
        'string' => ':attribute :size белгилер болушу керек.',
        'array' => ':attribute :size элементтерин камтышы керек.',
    ],
    'string' => ':attribute сап болушу керек.',
    'timezone' => ':attribute жарактуу аймак болушу керек.',
    'unique' => ':attribute мурунтан эле алынган.',
    'uploaded' => ':attribute жүктөлбөй калды.',
    'url' => ':attribute форматы жараксыз.',

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
            'rule-name' => 'жеке билдирүү',
        ],
        'g-recaptcha-response' => [
            'required' => 'Сураныч, робот эмес экениңизди ырастаңыз.',
            'captcha' => 'Captcha катасы! кийинчерээк кайра аракет кылыңыз же сайттын администраторуна кайрылыңыз.',
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



    'accepted_if' => ':attribute талаасы : other :value болгондо кабыл алынышы керек.',
    'ascii' => ':attribute талаасы бир байт алфавиттик-сандык белгилерди жана символдорду гана камтышы керек.',
    'can' => ':attribute талаасы уруксатсыз маанини камтыйт.',
    'contains' => ':attribute талаасында талап кылынган маани жок.',
    'current_password' => 'Сырсөз туура эмес.',
    'date_equals' => ':attribute талаасы :датага барабар күн болушу керек.',
    'decimal' => ':attribute талаасында :ондук ондук орундар болушу керек.',
    'declined' => ':attribute талаасы четке кагылышы керек.',
    'declined_if' => ':attribute талаасы : other :value болгондо четке кагылышы керек.',
    'doesnt_end_with' => ':attribute талаасы төмөнкүлөрдүн бири менен аяктабашы керек: :value.',
    'doesnt_start_with' => ':attribute талаасы төмөнкүлөрдүн бири менен башталбашы керек: :value.',
    'ends_with' => ':attribute талаасы төмөнкүлөрдүн бири менен аякташы керек: :value.',
    'enum' => 'Тандалган :атрибуту жараксыз.',
    'extensions' => ':attribute талаасы төмөнкү кеңейтүүлөрдүн бирине ээ болушу керек: :values.',
    'hex_color' => ':attribute талаасы жарактуу он алтылык түс болушу керек.',
    'list' => ':attribute талаасы тизме болушу керек.',
    'lowercase' => ':attribute талаасы кичине тамга болушу керек.',
    'mac_address' => ':атрибут талаасы жарактуу MAC дареги болушу керек.',
    'max_digits' => ':attribute талаасында :max сандан ашпашы керек.',
    'min_digits' => ':attribute талаасында кеминде :min сандары болушу керек.',
    'missing' => ':attribute талаасы жок болушу керек.',
    'missing_if' => ':diger :value болгондо :attribute талаасы жок болушу керек.',
    'missing_unless' => ':attribute талаасы жок болушу керек, эгерде : other :value.',
    'missing_with' => ':values болгондо :attribute талаасы жок болушу керек.',
    'missing_with_all' => ':атрибут талаасы :маани бар болгондо жок болушу керек.',
    'multiple_of' => ':атрибут талаасы :valueга бир эсе болушу керек.',
    'password' => [
        'letters' => ':attribute талаасында кеминде бир тамга болушу керек.',
        'mixed' => ':attribute талаасында жок дегенде бир чоң жана бир кичине тамга болушу керек.',
        'numbers' => ':attribute талаасында жок дегенде бир сан болушу керек.',
        'symbols' => ':attribute талаасы жок дегенде бир символду камтышы керек.',
        'uncompromised' => 'Берилген :атрибуту маалымат агып чыгууда пайда болду. Башка :атрибут тандаңыз.',
    ],
    'present_if' => ':attribute талаасы : other :value болгондо болушу керек.',
    'present_unless' => ':attribute талаасы болушу керек, эгерде : other :value.',
    'present_with' => ':attribute талаасы :values болгондо болушу керек.',
    'present_with_all' => ':атрибут талаасы :маани бар болгондо болушу керек.',
    'prohibited' => ':attribute талаасына тыюу салынган.',
    'prohibited_if' => ':attribute талаасына : other :value болгондо тыюу салынат.',
    'prohibited_unless' => ':attribute талаасына тыюу салынат, эгерде : other :values ичинде.',
    'prohibits' => ':attribute талаасы :other болуусуна тыюу салат.',
    'required_array_keys' => ':attribute талаасында: :value үчүн жазуулар болушу керек.',
    'required_if_accepted' => ':attribute талаасы : other кабыл алынганда талап кылынат.',
    'required_if_declined' => ':attribute талаасы : other четке кагылганда талап кылынат.',
    'starts_with' => ':attribute талаасы төмөнкүлөрдүн бири менен башталышы керек: :value.',
    'uppercase' => ':attribute талаасы баш тамга болушу керек.',
    'ulid' => ':атрибут талаасы жарактуу ULID болушу керек.',
    'uuid' => ':attribute талаасы жарактуу UUID болушу керек.',
];
