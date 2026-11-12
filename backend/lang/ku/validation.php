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

    'accepted' => 'Divê :attribute were pejirandin.',
    'active_url' => ':attribute URL ne derbasdar e.',
    'after' => 'Divê :attribute dîrokek piştî :date be.',
    'after_or_equal' => 'Divê :attribute dîrokek piştî :date an wekhev be.',
    'alpha' => ':attribute dibe ku tenê tîpan hebe.',
    'alpha_dash' => ':attribute dibe ku tenê tîp, jimar û daçek hebin.',
    'alpha_num' => ':attribute dibe ku tenê tîp û hejmaran hebin.',
    'array' => ':attribute divê rêzek be.',
    'before' => 'Divê :attribute dîrokek berî :date be.',
    'before_or_equal' => ':attribute divê dîrokek berî :date an wekhev be.',
    'between' => [
        'numeric' => ':attribute divê di navbera :min û :max de be.',
        'file' => ':attribute divê di navbera :min û :max kilobytes de be.',
        'string' => 'Divê :attribute di navbera tîpên :min û :max de be.',
        'array' => 'Pêdivî ye ku :attribute di navbera :min û :max de hebe.',
    ],
    'boolean' => 'Qada :attribute divê rast an xelet be.',
    'confirmed' => 'Pejirandina :attribute nayê hev.',
    'date' => ':attribute ne dîrokek derbasdar e.',
    'date_format' => ':attribute bi formata :format re nayê hev.',
    'different' => 'Divê :attribute û :other cuda bin.',
    'digits' => 'Divê :attribute reqemên :digits be.',
    'digits_between' => 'Pêdivî ye ku :attribute di navbera jimareyên :min û :max de be.',
    'dimensions' => ':attribute pîvanên wêneyê nederbasdar e.',
    'distinct' => 'Qada :attribute nirxek dubare heye.',
    'email' => 'Divê :attribute navnîşek e-nameyek derbasdar be.',
    'exists' => ':attribute ya hilbijartî nederbasdar e.',
    'file' => ':attribute divê pelek be.',
    'filled' => 'Divê qada :attribute xwedî nirxek be.',
    'gt' => [
        'numeric' => 'Divê :attribute ji :value mezintir be.',
        'file' => 'Divê :attribute ji kilobytes :value mezintir be.',
        'string' => 'Divê :attribute ji tîpên :value mezintir be.',
        'array' => 'Divê :attribute ji tiştên :value zêdetir be.',
    ],
    'gte' => [
        'numeric' => 'Divê :attribute ji :value mezintir an wekhev be.',
        'file' => ':attribute divê ji kîlobytes :value mezintir an wekhev be.',
        'string' => 'Divê :attribute ji tîpên :value mezintir an wekhev be.',
        'array' => 'Pêdivî ye ku :attribute hêmanên :value an bêtir hebe.',
    ],
    'image' => ':attribute divê wêneyek be.',
    'in' => ':attribute ya hilbijartî nederbasdar e.',
    'in_array' => 'Qada :attribute di :other de tune.',
    'integer' => ':attribute divê yekjimar be.',
    'ip' => 'Divê :attribute navnîşek IP derbasdar be.',
    'ipv4' => 'Divê :attribute navnîşek IPv4 derbasdar be.',
    'ipv6' => 'Divê :attribute navnîşek IPv6 derbasdar be.',
    'json' => ':attribute divê rêzek JSON derbasdar be.',
    'lt' => [
        'numeric' => 'Divê :attribute ji :value kêmtir be.',
        'file' => 'Divê :attribute ji kîlobyte :value kêmtir be.',
        'string' => 'Divê :attribute ji tîpên :value kêmtir be.',
        'array' => 'Divê :attribute ji tiştên :value kêmtir be.',
    ],
    'lte' => [
        'numeric' => 'Divê :attribute ji :value kêmtir an wekhev be.',
        'file' => ':attribute divê ji kîlobyte :value kêmtir an wekhev be.',
        'string' => 'Divê :attribute ji tîpên :value kêmtir an wekhev be.',
        'array' => 'Divê :attribute ji tiştên :value zêdetir nebe.',
    ],
    'max' => [
        'numeric' => 'Dibe ku :attribute ji :max ne mezintir be.',
        'file' => ':attribute dibe ku ji kilobytes :max ne mezintir be.',
        'string' => 'Dibe ku :attribute ji tîpên :max ne mezintir be.',
        'array' => 'Dibe ku :attribute ji tiştên :max zêdetir nebe.',
    ],
    'mimes' => ':attribute divê pelek celeb be: :values.',
    'mimetypes' => ':attribute divê pelek celeb be: :values.',
    'min' => [
        'numeric' => ':attribute divê herî kêm :min be.',
        'file' => ':attribute divê herî kêm :min kilobytes be.',
        'string' => ':attribute divê bi kêmî ve tîpên :min be.',
        'array' => 'Divê :attribute bi kêmanî tiştên :min hebin.',
    ],
    'not_in' => ':attribute ya hilbijartî nederbasdar e.',
    'not_regex' => 'Formata :attribute nederbasdar e.',
    'numeric' => ':attribute divê hejmarek be.',
    'present' => 'Divê qada :attribute hebe.',
    'regex' => 'Formata :attribute nederbasdar e.',
    'required' => 'Qada :attribute hewce ye.',
    'required_if' => 'Dema ku :other :value be qada :attribute hewce ye.',
    'required_unless' => 'Qada :attribute hewce ye ku :other di :values de nebe.',
    'required_with' => 'Dema ku :values hebe qada :attribute hewce ye.',
    'required_with_all' => 'Dema ku :values hebe qada :attribute hewce ye.',
    'required_without' => 'Dema ku :values tune be qada :attribute hewce ye.',
    'required_without_all' => 'Dema ku yek ji :values tune be qada :attribute hewce ye.',
    'same' => 'Divê :attribute û :other li hev bikin.',
    'size' => [
        'numeric' => ':attribute divê :size be.',
        'file' => ':attribute divê :size kilobytes be.',
        'string' => ':attribute divê karakterên :size bin.',
        'array' => 'Divê :attribute hêmanên :size hene.',
    ],
    'string' => ':attribute divê rêzek be.',
    'timezone' => 'Divê :attribute herêmek derbasdar be.',
    'unique' => ':attribute berê hatiye girtin.',
    'uploaded' => ':attribute nehat barkirin.',
    'url' => 'Formata :attribute nederbasdar e.',

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
            'rule-name' => 'custom-peyam',
        ],
        'g-recaptcha-response' => [
            'required' => 'Ji kerema xwe verast bikin ku hûn ne robot in.',
            'captcha' => 'Çewtiya Captcha! paşê dîsa biceribînin an bi rêvebirê malperê re têkilî daynin.',
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



    'accepted_if' => 'Dema ku :ya din :nirx be divê qada :taybet were qebûlkirin.',
    'ascii' => 'Di qada :taybetê de divê tenê tîp û sembolên alfan-hejmarî yên yek-byte hebin.',
    'can' => 'Qada : taybetmendiyê nirxek nedestûrkirî dihewîne.',
    'contains' => 'Qada :taybetmendiyê nirxek pêwîst winda ye.',
    'current_password' => 'Şîfre çewt e.',
    'date_equals' => 'Qada :taybet divê dîrokek bi :date be.',
    'decimal' => 'Di qada :taybetmendiyê de divê :cihên dehiyên dehiyan hebe.',
    'declined' => 'Divê qada :taybet bê redkirin.',
    'declined_if' => 'Dema ku :ya din :nirx be divê qada :taybet were red kirin.',
    'doesnt_end_with' => 'Divê qada :taybetî bi yek ji van jêrîn bi dawî nebe: :nirx.',
    'doesnt_start_with' => 'Divê qada :taybetî bi yek ji van jêrîn dest pê neke: :nirx.',
    'ends_with' => 'Qada :taybetî divê bi yek ji van jêrîn biqede: :nirx.',
    'enum' => 'Taybetmendiya hilbijartî nederbasdar e.',
    'extensions' => 'Qada :taybetî divê yek ji van pêvekên jêrîn hebe: :nirx.',
    'hex_color' => 'Qada :taybetî divê rengek hexadecimal derbasdar be.',
    'list' => 'Qada :taybet divê lîsteyek be.',
    'lowercase' => 'Qada :taybet divê bi tîpên piçûk be.',
    'mac_address' => 'Qada : taybetmendiyê divê navnîşek MAC-a derbasdar be.',
    'max_digits' => 'Di qada :taybetê de divê ji :max reqeman zêdetir nebe.',
    'min_digits' => 'Di qada :taybetê de divê herî kêm jimareyên :min hebin.',
    'missing' => 'Divê qada :taybetî tune be.',
    'missing_if' => 'Dema ku :nother :nirx be divê qada :taybetî tune be.',
    'missing_unless' => 'Divê qada :taybetmendiyê winda nebe heya ku :nother ne :nirx be.',
    'missing_with' => 'Dema ku :nirx hebin divê qada :taybetî tune be.',
    'missing_with_all' => 'Dema ku :nirx hebin divê qada :taybetî tune be.',
    'multiple_of' => 'Qada :taybet divê pirjimara :nirxê be.',
    'password' => [
        'letters' => 'Di qada :taybetê de divê herî kêm yek herfek hebe.',
        'mixed' => 'Qada :taybet divê herî kêm yek tîpek mezin û yek tîpek piçûk hebe.',
        'numbers' => 'Di qada : taybetmendiyê de divê herî kêm yek hejmar hebe.',
        'symbols' => 'Qada :taybet divê herî kêm sembolek hebe.',
        'uncompromised' => 'Taybetmendiya diyarkirî: di lewazek daneyê de xuya bû. Ji kerema xwe celebek cûda hilbijêrin: taybetmendiyek.',
    ],
    'present_if' => 'Dema ku :nother :nirx be divê qada :taybet hebe.',
    'present_unless' => 'Divê qada :taybetî hebe heya ku :nother :value be.',
    'present_with' => 'Dema ku :nirx hebin divê qada :taybetî hebe.',
    'present_with_all' => 'Dema ku :nirx hebin divê qada :taybet hebe.',
    'prohibited' => 'Qada : taybetmendiyê qedexe ye.',
    'prohibited_if' => 'Qada :taybetî qedexe ye dema :ya din :nirx be.',
    'prohibited_unless' => 'Qada :taybet qedexe ye heya ku :yên din di :nirxan de nebe.',
    'prohibits' => 'Qada :taybet hebûna :yên din qedexe dike.',
    'required_array_keys' => 'Di qada : taybetmendiyê de divê navnîşên ji bo: :nirxan hebe.',
    'required_if_accepted' => 'Dema ku :yên din were pejirandin qada :taybetî pêwîst e.',
    'required_if_declined' => 'Dema ku :yên din bê redkirin qada :taybetî pêwîst e.',
    'starts_with' => 'Qada :taybetî divê bi yek ji van jêrîn dest pê bike: :nirx.',
    'uppercase' => 'Divê qada :taybetî bi tîpên mezin be.',
    'ulid' => 'Qada :taybet divê ULIDek derbasdar be.',
    'uuid' => 'Divê qada :taybetî UUID-ya derbasdar be.',
];
