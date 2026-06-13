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

    'accepted' => 'U :attribute deve esse accettatu.',
    'active_url' => 'U :attribute ùn hè micca un URL validu.',
    'after' => 'U :attribute deve esse una data dopu à :date.',
    'after_or_equal' => 'U :attribute deve esse una data dopu o uguale à :date.',
    'alpha' => 'U :attribute pò cuntene solu lettere.',
    'alpha_dash' => 'U :attribute pò cuntene solu lettere, numeri è trattini.',
    'alpha_num' => 'U :attribute pò cuntene solu lettere è numeri.',
    'array' => 'U :attribute deve esse un array.',
    'before' => 'U :attribute deve esse una data prima di :date.',
    'before_or_equal' => 'U :attribute deve esse una data prima o uguale à :date.',
    'between' => [
        'numeric' => 'U :attribute deve esse trà :min è :max.',
        'file' => 'U :attribute deve esse trà :min è :max kilobytes.',
        'string' => 'U :attribute deve esse trà i caratteri :min è :max.',
        'array' => 'U :attribute deve avè trà l\'articuli :min è :max.',
    ],
    'boolean' => 'U campu :attribute deve esse veru o falsu.',
    'confirmed' => 'A cunferma :attribute ùn currisponde micca.',
    'date' => 'U :attribute ùn hè micca una data valida.',
    'date_format' => 'U :attribute ùn currisponde à u format :format.',
    'different' => 'U :attribute è :other deve esse sfarenti.',
    'digits' => 'U :attribute deve esse numeri :digits.',
    'digits_between' => 'U :attribute deve esse trà i numeri :min è :max.',
    'dimensions' => 'U :attribute hà dimensioni di l\'imaghjini invalide.',
    'distinct' => 'U campu :attribute hà un valore duplicatu.',
    'email' => 'U :attribute deve esse un indirizzu email validu.',
    'exists' => 'U :attribute sceltu hè invalidu.',
    'file' => 'U :attribute deve esse un schedariu.',
    'filled' => 'U campu :attribute deve avè un valore.',
    'gt' => [
        'numeric' => 'U :attribute deve esse più grande di :value.',
        'file' => 'U :attribute deve esse più grande di :value kilobytes.',
        'string' => 'U :attribute deve esse più grande di i caratteri :value.',
        'array' => 'U :attribute deve avè più di :value elementi.',
    ],
    'gte' => [
        'numeric' => 'U :attribute deve esse più grande o uguale à :value.',
        'file' => 'U :attribute deve esse più grande o uguale à :value kilobytes.',
        'string' => 'U :attribute deve esse più grande o uguale à i caratteri :value.',
        'array' => 'U :attribute deve avè elementi :value o più.',
    ],
    'image' => 'U :attribute deve esse una maghjina.',
    'in' => 'U :attribute sceltu hè invalidu.',
    'in_array' => 'U campu :attribute ùn esiste micca in :other.',
    'integer' => 'U :attribute deve esse un interu.',
    'ip' => 'U :attribute deve esse un indirizzu IP validu.',
    'ipv4' => 'U :attribute deve esse un indirizzu IPv4 validu.',
    'ipv6' => 'U :attribute deve esse un indirizzu IPv6 validu.',
    'json' => 'U :attribute deve esse una stringa JSON valida.',
    'lt' => [
        'numeric' => 'U :attribute deve esse menu di :value.',
        'file' => 'U :attribute deve esse menu di :value kilobytes.',
        'string' => 'U :attribute deve esse menu di caratteri :value.',
        'array' => 'U :attribute deve avè menu di elementi :value.',
    ],
    'lte' => [
        'numeric' => 'U :attribute deve esse menu o uguale à :value.',
        'file' => 'U :attribute deve esse menu o uguale :value kilobytes.',
        'string' => 'U :attribute deve esse menu di caratteri :value o uguali.',
        'array' => 'U :attribute ùn deve micca più di :value elementi.',
    ],
    'max' => [
        'numeric' => 'U :attribute ùn pò esse più grande di :max.',
        'file' => 'U :attribute ùn pò esse più grande di :max kilobytes.',
        'string' => 'U :attribute ùn pò esse più grande di :max caratteri.',
        'array' => 'U :attribute ùn pò micca avè più di :max elementi.',
    ],
    'mimes' => 'U :attribute deve esse un schedariu di tipu : :values.',
    'mimetypes' => 'U :attribute deve esse un schedariu di tipu : :values.',
    'min' => [
        'numeric' => 'U :attribute deve esse almenu :min.',
        'file' => 'U :attribute deve esse almenu :min kilobytes.',
        'string' => 'U :attribute deve esse almenu :min caratteri.',
        'array' => 'U :attribute deve avè almenu elementi :min.',
    ],
    'not_in' => 'U :attribute sceltu hè invalidu.',
    'not_regex' => 'U furmatu :attribute ùn hè micca validu.',
    'numeric' => 'U :attribute deve esse un numeru.',
    'present' => 'U campu :attribute deve esse presente.',
    'regex' => 'U furmatu :attribute ùn hè micca validu.',
    'required' => 'U campu :attribute hè necessariu.',
    'required_if' => 'U campu :attribute hè necessariu quandu :other hè :value.',
    'required_unless' => 'U campu :attribute hè necessariu salvu chì :other hè in :values.',
    'required_with' => 'U campu :attribute hè necessariu quandu :values hè presente.',
    'required_with_all' => 'U campu :attribute hè necessariu quandu :values hè presente.',
    'required_without' => 'U campu :attribute hè necessariu quandu :values ùn hè micca presente.',
    'required_without_all' => 'U campu :attribute hè necessariu quandu nimu di :values sò prisenti.',
    'same' => 'U :attribute è :other deve currispondenu.',
    'size' => [
        'numeric' => 'U :attribute deve esse :size.',
        'file' => 'U :attribute deve esse :size kilobytes.',
        'string' => 'U :attribute deve esse caratteri :size.',
        'array' => 'U :attribute deve cuntene elementi :size.',
    ],
    'string' => 'U :attribute deve esse una stringa.',
    'timezone' => 'U :attribute deve esse una zona valida.',
    'unique' => 'U :attribute hè digià statu pigliatu.',
    'uploaded' => 'U :attribute hà fiascatu à carica.',
    'url' => 'U furmatu :attribute ùn hè micca validu.',

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
            'rule-name' => 'missaghju persunalizata',
        ],
        'g-recaptcha-response' => [
            'required' => 'Per piacè verificate chì ùn site micca un robot.',
            'captcha' => 'Errore Captcha! pruvate più tardi o cuntattate l\'amministratore di u situ.',
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



    'accepted_if' => 'U campu :attribute deve esse accettatu quandu :other hè :value.',
    'ascii' => 'U campu :attribute deve cuntene solu caratteri è simboli alfanumerichi di un byte.',
    'can' => 'U campu :attribute cuntene un valore micca autorizatu.',
    'contains' => 'U campu :attribute manca un valore necessariu.',
    'current_password' => 'A password hè incorrecta.',
    'date_equals' => 'U campu :attribute deve esse una data uguale à :date.',
    'decimal' => 'U campu :attribute deve avè : decimali decimali.',
    'declined' => 'U campu :attribute deve esse rifiutatu.',
    'declined_if' => 'U campu :attribute deve esse rifiutatu quandu :other hè :value.',
    'doesnt_end_with' => 'U campu :attribute ùn deve micca finisce cù unu di i seguenti: :values.',
    'doesnt_start_with' => 'U campu :attribute ùn deve micca principià cù unu di i seguenti: :values.',
    'ends_with' => 'U campu :attribute deve finisce cù unu di i seguenti: :values.',
    'enum' => 'L\'attributu sceltu: ùn hè micca validu.',
    'extensions' => 'U campu :attribute deve avè una di e seguenti estensioni: :values.',
    'hex_color' => 'U campu :attribute deve esse un culore esadecimale validu.',
    'list' => 'U campu :attribute deve esse una lista.',
    'lowercase' => 'U campu :attribute deve esse minuscule.',
    'mac_address' => 'U campu :attribute deve esse un indirizzu MAC validu.',
    'max_digits' => 'U campu :attribute ùn deve micca più di :max digits.',
    'min_digits' => 'U campu :attribute deve avè almenu :min cifre.',
    'missing' => 'U campu :attribute deve esse mancante.',
    'missing_if' => 'U campu :attribute deve esse mancante quandu :other hè :value.',
    'missing_unless' => 'U campu :attribute deve esse mancante, salvu chì :other hè :value.',
    'missing_with' => 'U campu :attribute deve esse mancante quandu :values hè presente.',
    'missing_with_all' => 'U campu :attribute deve esse mancante quandu :values sò prisenti.',
    'multiple_of' => 'U campu :attribute deve esse un multiplu di :value.',
    'password' => [
        'letters' => 'U campu :attribute deve cuntene almenu una lettera.',
        'mixed' => 'U campu :attribute deve cuntene almenu una lettera maiuscula è una lettera minuscula.',
        'numbers' => 'U campu :attribute deve cuntene almenu un numeru.',
        'symbols' => 'U campu :attribute deve cuntene almenu un simbulu.',
        'uncompromised' => 'L\'attributu datu : hè apparsu in una fuga di dati. Per piacè sceglite un altru :attribute.',
    ],
    'present_if' => 'U campu :attribute deve esse presente quandu :other hè :value.',
    'present_unless' => 'U campu :attribute deve esse presente, salvu chì :other hè :value.',
    'present_with' => 'U campu :attribute deve esse presente quandu :values hè presente.',
    'present_with_all' => 'U campu :attribute deve esse presente quandu :values sò prisenti.',
    'prohibited' => 'U campu :attribute hè pruibitu.',
    'prohibited_if' => 'U campu :attribute hè pruibitu quandu :other hè :value.',
    'prohibited_unless' => 'U campu :attribute hè pruibitu à menu chì :other hè in :values.',
    'prohibits' => 'U campu :attribute pruibisce à :altri da esse presente.',
    'required_array_keys' => 'U campu :attribute deve cuntene entrate per : :values.',
    'required_if_accepted' => 'U campu :attribute hè necessariu quandu :altru hè accettatu.',
    'required_if_declined' => 'U campu :attribute hè necessariu quandu :other hè rifiutatu.',
    'starts_with' => 'U campu :attribute deve principià cù unu di i seguenti: :values.',
    'uppercase' => 'U campu :attribute deve esse maiuscule.',
    'ulid' => 'U campu :attribute deve esse un ULID validu.',
    'uuid' => 'U campu :attribute deve esse un UUID validu.',
];
