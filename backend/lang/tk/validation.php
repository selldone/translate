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

    'accepted' => ':attribute kabul edilmeli.',
    'active_url' => ':attribute dogry URL däl.',
    'after' => ':attribute :date-dan soň bir sene bolmaly.',
    'after_or_equal' => ':attribute, :date-dan soň ýa-da deň bolan sene bolmaly.',
    'alpha' => ':attribute diňe harplary öz içine alyp biler.',
    'alpha_dash' => ':attribute diňe harplary, sanlary we çyzgylary öz içine alyp biler.',
    'alpha_num' => ':attribute diňe harplary we sanlary öz içine alyp biler.',
    'array' => ':attribute bir massiw bolmaly.',
    'before' => ':attribute :date-dan öň bir sene bolmaly.',
    'before_or_equal' => ':attribute öň ýa-da :date bilen deň bolmaly.',
    'between' => [
        'numeric' => ':attribute :min bilen :max arasynda bolmaly.',
        'file' => ':attribute :min bilen :max kilobaýt arasynda bolmaly.',
        'string' => ':attribute :min bilen :max nyşanlaryň arasynda bolmaly.',
        'array' => ':attribute :min bilen :max elementleriniň arasynda bolmaly.',
    ],
    'boolean' => ':attribute meýdany dogry ýa-da ýalan bolmaly.',
    'confirmed' => ':attribute tassyklamasy gabat gelenok.',
    'date' => ':attribute dogry sene däl.',
    'date_format' => ':attribute :format formatyna gabat gelenok.',
    'different' => ':attribute we :other başgaça bolmaly.',
    'digits' => ':attribute :digits sanlary bolmaly.',
    'digits_between' => ':attribute :min bilen :max sanlaryň arasynda bolmaly.',
    'dimensions' => ':attribute nädogry şekil ölçeglerine eýe.',
    'distinct' => ':attribute meýdanynyň iki gezek bahasy bar.',
    'email' => ':attribute dogry e-poçta salgysy bolmaly.',
    'exists' => 'Saýlanan :attribute nädogry.',
    'file' => ':attribute faýl bolmaly.',
    'filled' => ':attribute meýdanynyň bahasy bolmaly.',
    'gt' => [
        'numeric' => ':attribute :value-dan uly bolmaly.',
        'file' => ':attribute :value kilobaýtdan uly bolmaly.',
        'string' => ':attribute :value nyşanlaryndan uly bolmaly.',
        'array' => ':attribute-de :value-den köp element bolmaly.',
    ],
    'gte' => [
        'numeric' => ':attribute :value-dan uly ýa-da deň bolmaly.',
        'file' => ':attribute :value kilobaýtdan uly ýa-da deň bolmaly.',
        'string' => ':attribute :value nyşanlaryndan uly ýa-da deň bolmaly.',
        'array' => ':attribute-de :value elementleri ýa-da has köp bolmaly.',
    ],
    'image' => ':attribute şekil bolmaly.',
    'in' => 'Saýlanan :attribute nädogry.',
    'in_array' => ':attribute meýdany :other-de ýok.',
    'integer' => ':attribute bitewi san bolmaly.',
    'ip' => ':attribute dogry IP salgy bolmaly.',
    'ipv4' => ':attribute dogry IPv4 salgy bolmaly.',
    'ipv6' => ':attribute dogry IPv6 salgy bolmaly.',
    'json' => ':attribute dogry JSON setiri bolmaly.',
    'lt' => [
        'numeric' => ':attribute :value-dan pes bolmaly.',
        'file' => ':attribute :value kilobaýtdan az bolmalydyr.',
        'string' => ':attribute :value nyşanlaryndan az bolmalydyr.',
        'array' => ':attribute :value elementlerinden az bolmalydyr.',
    ],
    'lte' => [
        'numeric' => ':attribute :value-dan az ýa-da deň bolmaly.',
        'file' => ':attribute :value kilobaýtdan az ýa-da deň bolmaly.',
        'string' => ':attribute :value nyşanlaryndan az ýa-da deň bolmaly.',
        'array' => ':attribute-de :value elementleri köp bolmaly däldir.',
    ],
    'max' => [
        'numeric' => ':attribute :max-dan uly bolup bilmez.',
        'file' => ':attribute :max kilobaýtdan uly bolup bilmez.',
        'string' => ':attribute :max nyşanlaryndan uly bolup bilmez.',
        'array' => ':attribute-de :max elementleri köp bolup bilmez.',
    ],
    'mimes' => ':attribute görnüşli faýl bolmaly: :values.',
    'mimetypes' => ':attribute görnüşli faýl bolmaly: :values.',
    'min' => [
        'numeric' => ':attribute iň azyndan :min bolmaly.',
        'file' => ':attribute azyndan :min kilobaýt bolmaly.',
        'string' => ':attribute iň azyndan :min nyşan bolmaly.',
        'array' => ':attribute azyndan :min elementleri bolmaly.',
    ],
    'not_in' => 'Saýlanan :attribute nädogry.',
    'not_regex' => ':attribute formaty nädogry.',
    'numeric' => ':attribute san bolmaly.',
    'present' => ':attribute meýdany bolmaly.',
    'regex' => ':attribute formaty nädogry.',
    'required' => ':attribute meýdany talap edilýär.',
    'required_if' => ':other :value bolanda :attribute meýdany talap edilýär.',
    'required_unless' => ':other :values bolmasa, :attribute meýdany talap edilýär.',
    'required_with' => ':values bar bolanda :attribute meýdany talap edilýär.',
    'required_with_all' => ':values bar bolanda :attribute meýdany talap edilýär.',
    'required_without' => ':values ýok wagty :attribute meýdany talap edilýär.',
    'required_without_all' => ':values ýok bolsa, :attribute meýdany talap edilýär.',
    'same' => ':attribute we :other gabat gelmeli.',
    'size' => [
        'numeric' => ':attribute :size bolmaly.',
        'file' => ':attribute :size kilobaýt bolmaly.',
        'string' => ':attribute :size nyşanlary bolmaly.',
        'array' => ':attribute-de :size elementleri bolmaly.',
    ],
    'string' => ':attribute setir bolmaly.',
    'timezone' => ':attribute dogry zona bolmaly.',
    'unique' => ':attribute eýýäm alyndy.',
    'uploaded' => ':attribute ýükläp bilmedi.',
    'url' => ':attribute formaty nädogry.',

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
            'rule-name' => 'adaty habar',
        ],
        'g-recaptcha-response' => [
            'required' => 'Robot däldigiňizi barlaň.',
            'captcha' => 'Captcha ýalňyşlygy! soň gaýtadan synanyşyň ýa-da sahypa administratoryna ýüz tutuň.',
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



    'accepted_if' => ': Atribut meýdany kabul ediler: beýlekisi: baha.',
    'ascii' => ': Atribut meýdançasynda diňe bir baýtly harp sanlary we nyşanlary bolmaly.',
    'can' => ': Atribut meýdançasynda birugsat baha bar.',
    'contains' => ': Atribut meýdançasy zerur bahany ýitirýär.',
    'current_password' => 'Parol nädogry',
    'date_equals' => ': Atribut meýdany: senä deň sene bolmaly.',
    'decimal' => ': Atribut meýdany bolmaly: onluk onluk ýerler.',
    'declined' => ': Atribut meýdany ret edilmeli.',
    'declined_if' => 'Haçan-da: atribut meýdany ret edilmeli: beýlekisi: baha.',
    'doesnt_end_with' => ': Atribut meýdany aşakdakylaryň biri bilen gutarmaly däldir: bahalar.',
    'doesnt_start_with' => ': Atribut meýdany aşakdakylardan biri bilen başlamaly däldir: bahalar.',
    'ends_with' => ': Atribut meýdançasy aşakdakylaryň biri bilen gutarmaly: bahalar.',
    'enum' => 'Saýlanan: atribut nädogry.',
    'extensions' => ': Atribut meýdançasynda aşakdaky giňeltmeleriň biri bolmaly: bahalar.',
    'hex_color' => ': Atribut meýdany dogry altyburç reňk bolmaly.',
    'list' => ': Atribut meýdançasy sanaw bolmaly.',
    'lowercase' => ': Atribut meýdany kiçi harp bolmaly.',
    'mac_address' => ': Atribut meýdany dogry MAC salgysy bolmaly.',
    'max_digits' => ': Atribut meýdany: iň ýokary sanlardan köp bolmaly däldir.',
    'min_digits' => ': Atribut meýdany azyndan: min san bolmaly.',
    'missing' => ': Atribut meýdançasy ýok bolmaly.',
    'missing_if' => ': Atribut meýdançasy ýitirim bolmaly: beýlekisi: baha.',
    'missing_unless' => ': Atribut meýdançasy ýok bolmaly: beýlekisi: baha.',
    'missing_with' => ': Atributlar meýdançasy: bahalar bar bolanda ýitirim bolmaly.',
    'missing_with_all' => ': Atributlar meýdany: bahalar bar bolanda ýitmeli.',
    'multiple_of' => ': Atribut meýdançasy: bahadan köp bolmaly.',
    'password' => [
        'letters' => ': Atribut meýdançasynda azyndan bir harp bolmaly.',
        'mixed' => ': Atribut meýdançasynda azyndan bir baş harp we bir kiçi harp bolmaly.',
        'numbers' => ': Atribut meýdançasynda azyndan bir san bolmaly.',
        'symbols' => ': Atribut meýdançasynda azyndan bir nyşan bolmaly.',
        'uncompromised' => 'Berlen: atribut maglumatlaryň syzmagynda peýda boldy. Başga: atribut saýlaň.',
    ],
    'present_if' => ': Atribut meýdany şu wagt bolmaly: beýlekisi: baha.',
    'present_unless' => ': Atribut meýdançasy şu ýerde bolmaly: beýlekisi: baha.',
    'present_with' => ': Atribut meýdançasy: bahalar bar bolanda bolmaly.',
    'present_with_all' => ': Atribut meýdançasy: bahalar bar bolanda bolmaly.',
    'prohibited' => ': Atribut meýdany gadagan.',
    'prohibited_if' => 'Haçan-da: atribut meýdany gadagan: beýleki: baha.',
    'prohibited_unless' => ': Atribut meýdany gadagan: eger beýlekiler: bahalar bolmasa.',
    'prohibits' => ': Atribut meýdançasy gadagan edýär: beýlekileriň bolmagy.',
    'required_array_keys' => ': Atribut meýdançasynda :: bahalar üçin ýazgylar bolmaly.',
    'required_if_accepted' => ': Atribut meýdany talap edilýär: başgalary kabul edilende.',
    'required_if_declined' => ': Atribut meýdany talap edilýär: beýlekisi ret edilende.',
    'starts_with' => ': Atribut meýdançasy aşakdakylardan biri bilen başlamaly: bahalar.',
    'uppercase' => ': Atribut meýdany baş harp bolmaly.',
    'ulid' => ': Atribut meýdany dogry ULID bolmaly.',
    'uuid' => ': Atribut meýdany dogry UUID bolmaly.',
];
