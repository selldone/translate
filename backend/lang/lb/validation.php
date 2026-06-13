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

    'accepted' => 'D\':attribute muss ugeholl ginn.',
    'active_url' => 'D\':attribute ass net eng valabel URL.',
    'after' => 'D\':attribute muss en Datum no :date sinn.',
    'after_or_equal' => 'De :attribute muss en Datum no oder gläich wéi :date sinn.',
    'alpha' => 'D\':attribute kann nëmme Buschtawen enthalen.',
    'alpha_dash' => 'D\':attribute däerf nëmme Buschtawen, Zuelen an Bindestrecken enthalen.',
    'alpha_num' => 'D\':attribute kann nëmmen Buschtawen an Zuelen enthalen.',
    'array' => 'D\':attribute muss eng Array sinn.',
    'before' => 'D\':attribute muss en Datum virum :date sinn.',
    'before_or_equal' => 'D\':attribute muss en Datum virum oder gläich wéi :date sinn.',
    'between' => [
        'numeric' => 'D\':attribute muss tëscht :min an :max sinn.',
        'file' => 'D\':attribute muss tëscht :min an :max Kilobytes sinn.',
        'string' => 'D\':attribute muss tëscht :min an :max Zeeche sinn.',
        'array' => 'D\':attribute muss tëscht :min an :max Artikelen hunn.',
    ],
    'boolean' => 'D\':attribute Feld muss richteg oder falsch sinn.',
    'confirmed' => 'D\':attribute Bestätegung passt net.',
    'date' => 'D\':attribute ass net e gültege Datum.',
    'date_format' => 'D\':attribute entsprécht net dem Format:format.',
    'different' => 'D\':attribute an :other mussen anescht sinn.',
    'digits' => 'D\':attribute muss :digits Ziffere sinn.',
    'digits_between' => 'D\':attribute muss tëscht :min an :max Ziffere sinn.',
    'dimensions' => 'D\':attribute huet ongëlteg Bild Dimensiounen.',
    'distinct' => 'D\':attribute Feld huet en duplizéierte Wäert.',
    'email' => 'D\':attribute muss eng valabel E-Mailadress sinn.',
    'exists' => 'Déi gewielte :attribute ass ongëlteg.',
    'file' => 'D\':attribute muss e Fichier sinn.',
    'filled' => 'D\':attribute Feld muss e Wäert hunn.',
    'gt' => [
        'numeric' => 'D\':attribute muss méi grouss sinn wéi :value.',
        'file' => 'De :attribute muss méi grouss wéi :value Kilobytes sinn.',
        'string' => 'D\':attribute muss méi grouss sinn wéi :value Zeechen.',
        'array' => 'D\':attribute muss méi wéi :value Artikelen hunn.',
    ],
    'gte' => [
        'numeric' => 'D\':attribute muss méi grouss wéi oder gläich :value sinn.',
        'file' => 'De :attribute muss méi grouss wéi oder gläich :value Kilobytes sinn.',
        'string' => 'D\':attribute muss méi grouss wéi oder gläich :value Zeeche sinn.',
        'array' => 'D\':attribute muss :value Artikelen oder méi hunn.',
    ],
    'image' => 'D\':attribute muss e Bild sinn.',
    'in' => 'Déi gewielte :attribute ass ongëlteg.',
    'in_array' => 'D\':attribute Feld existéiert net am :other.',
    'integer' => 'D\':attribute muss eng ganz Zuel sinn.',
    'ip' => 'D\':attribute muss eng valabel IP Adress sinn.',
    'ipv4' => 'D\':attribute muss eng valabel IPv4 Adress sinn.',
    'ipv6' => 'D\':attribute muss eng valabel IPv6 Adress sinn.',
    'json' => 'D\':attribute muss eng valabel JSON String sinn.',
    'lt' => [
        'numeric' => 'D\':attribute muss manner wéi :value sinn.',
        'file' => 'Den :attribute muss manner wéi :value kilobytes sinn.',
        'string' => 'D\':attribute muss manner wéi :value Zeeche sinn.',
        'array' => 'D\':attribute muss manner wéi :value Artikelen hunn.',
    ],
    'lte' => [
        'numeric' => 'D\':attribute muss manner wéi oder gläich sinn :value.',
        'file' => 'De :attribute muss manner wéi oder gläich :value Kilobytes sinn.',
        'string' => 'D\':attribute muss manner wéi oder gläich :value Zeeche sinn.',
        'array' => 'D\':attribute däerf net méi wéi :value Artikelen hunn.',
    ],
    'max' => [
        'numeric' => 'D\':attribute däerf net méi grouss sinn wéi :max.',
        'file' => 'D\':attribute däerf net méi grouss sinn wéi :max Kilobytes.',
        'string' => 'D\':attribute däerf net méi grouss sinn wéi :max Zeechen.',
        'array' => 'D\':attribute däerf net méi wéi :max Artikelen hunn.',
    ],
    'mimes' => 'De :attribute muss e Fichier vum Typ sinn: :values.',
    'mimetypes' => 'De :attribute muss e Fichier vum Typ sinn: :values.',
    'min' => [
        'numeric' => 'D\':attribute muss op d\'mannst :min sinn.',
        'file' => 'De :attribute muss op d\'mannst :min Kilobytes sinn.',
        'string' => 'D\':attribute muss op d\'mannst :min Zeeche sinn.',
        'array' => 'D\':attribute muss op d\'mannst :min Elementer hunn.',
    ],
    'not_in' => 'Déi gewielte :attribute ass ongëlteg.',
    'not_regex' => 'Den :attribute-Format ass ongëlteg.',
    'numeric' => 'D\':attribute muss eng Zuel sinn.',
    'present' => 'D\':attribute Feld muss präsent sinn.',
    'regex' => 'Den :attribute-Format ass ongëlteg.',
    'required' => 'D\':attribute Feld ass néideg.',
    'required_if' => 'D\':attribute Feld ass néideg wann :other ass :value.',
    'required_unless' => 'D\':attribute Feld ass erfuerderlech ausser :other ass am :values.',
    'required_with' => 'D\':attribute Feld ass néideg wann :values präsent ass.',
    'required_with_all' => 'D\':attribute Feld ass néideg wann :values präsent ass.',
    'required_without' => 'D\':attribute Feld ass néideg wann :values net präsent ass.',
    'required_without_all' => 'D\':attribute Feld ass erfuerderlech wann keng vun :values präsent ass.',
    'same' => 'D\':attribute an :other musse passen.',
    'size' => [
        'numeric' => 'D\':attribute muss :size sinn.',
        'file' => 'De :attribute muss :size kilobytes sinn.',
        'string' => 'D\':attribute muss :size Charaktere sinn.',
        'array' => 'D\':attribute muss :size Elementer enthalen.',
    ],
    'string' => 'D\':attribute muss eng String sinn.',
    'timezone' => 'D\':attribute muss eng valabel Zone sinn.',
    'unique' => 'D\':attribute gouf scho geholl.',
    'uploaded' => 'D\':attribute konnt net eropgeluede ginn.',
    'url' => 'Den :attribute-Format ass ongëlteg.',

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
            'rule-name' => 'Benotzerdefinéiert Message',
        ],
        'g-recaptcha-response' => [
            'required' => 'Vergewëssert Iech datt Dir kee Roboter sidd.',
            'captcha' => 'Captcha Feeler! probéiert méi spéit nach eng Kéier oder kontaktéiert de Site Admin.',
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



    'accepted_if' => 'D\':Attributfeld muss akzeptéiert ginn wann: aner ass: Wäert.',
    'ascii' => 'D\':Attributfeld däerf nëmmen eenzel-byte alphanumeresch Zeechen a Symboler enthalen.',
    'can' => 'D\': Attribut Feld enthält en onerlaabten Wäert.',
    'contains' => 'Den :attribute Feld fehlt en erfuerderleche Wäert.',
    'current_password' => 'D\'Passwuert ass falsch.',
    'date_equals' => 'D\':Attributfeld muss en Datum sinn gläich wéi:Datum.',
    'decimal' => 'D\':Attributfeld muss: Dezimaldezimalplazen hunn.',
    'declined' => 'D\':Attributfeld muss ofgeleent ginn.',
    'declined_if' => 'D\':Attributfeld muss ofgeleent ginn wann :other :value ass.',
    'doesnt_end_with' => 'D\':Attributfeld däerf net mat engem vun de folgende:: Wäerter ophalen.',
    'doesnt_start_with' => 'D\':Attributfeld däerf net mat engem vun de folgenden ufänken:: Wäerter.',
    'ends_with' => 'D\':Attributfeld muss mat engem vun den folgenden ophalen::Wäerter.',
    'enum' => 'De gewielte :Attribut ass ongëlteg.',
    'extensions' => 'D\':attribute-Feld muss eng vun den folgenden Extensiounen hunn::values.',
    'hex_color' => 'D\':Attributfeld muss eng valabel hexadezimal Faarf sinn.',
    'list' => 'D\':Attributfeld muss eng Lëscht sinn.',
    'lowercase' => 'D\':Attributfeld muss kleng sinn.',
    'mac_address' => 'D\':Attributfeld muss eng valabel MAC Adress sinn.',
    'max_digits' => 'D\':Attributfeld däerf net méi wéi :max Zifferen hunn.',
    'min_digits' => 'D\':Attributfeld muss mindestens :min Zifferen hunn.',
    'missing' => 'D\':attribute Feld muss fehlen.',
    'missing_if' => 'D\':Attributfeld muss fehlen wann :other :value ass.',
    'missing_unless' => 'D\':attribute Feld muss fehlen, ausser :other ass:value.',
    'missing_with' => 'D\':Attributfeld muss fehlen wann: Wäerter präsent ass.',
    'missing_with_all' => 'D\': Attribut Feld muss fehlen wann: Wäerter präsent sinn.',
    'multiple_of' => 'D\': Attribut Feld muss e Multiple vun: Wäert sinn.',
    'password' => [
        'letters' => 'D\':attribute Feld muss mindestens ee Buschtaf enthalen.',
        'mixed' => 'D\':attribute-Feld muss mindestens e grousse Buschtaf an e klenge Buschtaf enthalen.',
        'numbers' => 'D\':attribute Feld muss mindestens eng Nummer enthalen.',
        'symbols' => 'D\':Attributfeld muss mindestens ee Symbol enthalen.',
        'uncompromised' => 'De gegebene :Attribut ass an engem Datelek opgetaucht. Wielt w.e.g. en anert :attribut.',
    ],
    'present_if' => 'D\':Attributfeld muss präsent sinn wann :aner: Wäert ass.',
    'present_unless' => 'D\':Attributfeld muss präsent sinn ausser :other ass:value.',
    'present_with' => 'D\': Attribut Feld muss präsent sinn wann: Wäerter präsent ass.',
    'present_with_all' => 'D\': Attributfeld muss präsent sinn wann : Wäerter präsent sinn.',
    'prohibited' => 'D\': Attribut Feld ass verbueden.',
    'prohibited_if' => 'D\': Attribut Feld ass verbueden wann : aner ass: Wäert.',
    'prohibited_unless' => 'D\':Attributfeld ass verbueden ausser :other ass an: Wäerter.',
    'prohibits' => 'D\':Attributfeld verbitt :aner derbäi ze sinn.',
    'required_array_keys' => 'D\':Attributfeld muss Entréen fir:: Wäerter enthalen.',
    'required_if_accepted' => 'D\':Attributfeld ass erfuerderlech wann :other ugeholl gëtt.',
    'required_if_declined' => 'D\':Attributfeld ass erfuerderlech wann :other refuséiert gëtt.',
    'starts_with' => 'D\':Attributfeld muss mat engem vun de folgenden ufänken:: Wäerter.',
    'uppercase' => 'D\':Attributfeld muss grouss Buschtawen sinn.',
    'ulid' => 'D\':Attributfeld muss e gëltege ULID sinn.',
    'uuid' => 'D\':Attributfeld muss e gültege UUID sinn.',
];
