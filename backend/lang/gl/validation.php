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

    'accepted' => 'O :attribute debe ser aceptado.',
    'active_url' => 'O :attribute non é un URL válido.',
    'after' => 'O :attribute debe ser unha data posterior a :date.',
    'after_or_equal' => 'O :attribute debe ser unha data posterior ou igual a :date.',
    'alpha' => 'O :attribute só pode conter letras.',
    'alpha_dash' => 'O :attribute só pode conter letras, números e guións.',
    'alpha_num' => 'O :attribute só pode conter letras e números.',
    'array' => 'O :attribute debe ser unha matriz.',
    'before' => 'O :attribute debe ser unha data anterior a :date.',
    'before_or_equal' => 'O :attribute debe ser unha data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute debe estar entre :min e :max.',
        'file' => 'O :attribute debe estar entre os kilobytes :min e :max.',
        'string' => 'O :attribute debe estar entre os caracteres :min e :max.',
        'array' => 'O :attribute debe ter entre :min e :max elementos.',
    ],
    'boolean' => 'O campo :attribute debe ser verdadeiro ou falso.',
    'confirmed' => 'A confirmación :attribute non coincide.',
    'date' => 'O :attribute non é unha data válida.',
    'date_format' => 'O :attribute non coincide co formato :format.',
    'different' => 'O :attribute e :other deben ser diferentes.',
    'digits' => 'O :attribute debe ser díxitos :digits.',
    'digits_between' => 'O :attribute debe estar entre os díxitos :min e :max.',
    'dimensions' => 'O :attribute ten dimensións de imaxe non válidas.',
    'distinct' => 'O campo :attribute ten un valor duplicado.',
    'email' => 'O :attribute debe ser un enderezo de correo electrónico válido.',
    'exists' => 'O :attribute seleccionado non é válido.',
    'file' => 'O :attribute debe ser un ficheiro.',
    'filled' => 'O campo :attribute debe ter un valor.',
    'gt' => [
        'numeric' => 'O :attribute debe ser maior que :value.',
        'file' => 'O :attribute debe ser maior que :value kilobytes.',
        'string' => 'O :attribute debe ser maior que os caracteres :value.',
        'array' => 'O :attribute debe ter máis de elementos :value.',
    ],
    'gte' => [
        'numeric' => 'O :attribute debe ser maior ou igual que :value.',
        'file' => 'O :attribute debe ser maior ou igual aos kilobytes :value.',
        'string' => 'O :attribute debe ser maior ou igual aos caracteres :value.',
        'array' => 'O :attribute debe ter elementos :value ou máis.',
    ],
    'image' => 'O :attribute debe ser unha imaxe.',
    'in' => 'O :attribute seleccionado non é válido.',
    'in_array' => 'O campo :attribute non existe en :other.',
    'integer' => 'O :attribute debe ser un número enteiro.',
    'ip' => 'O :attribute debe ser un enderezo IP válido.',
    'ipv4' => 'O :attribute debe ser un enderezo IPv4 válido.',
    'ipv6' => 'O :attribute debe ser un enderezo IPv6 válido.',
    'json' => 'O :attribute debe ser unha cadea JSON válida.',
    'lt' => [
        'numeric' => 'O :attribute debe ser inferior a :value.',
        'file' => 'O :attribute debe ser inferior a :value kilobytes.',
        'string' => 'O :attribute debe ter menos de caracteres :value.',
        'array' => 'O :attribute debe ter menos de elementos :value.',
    ],
    'lte' => [
        'numeric' => 'O :attribute debe ser menor ou igual a :value.',
        'file' => 'O :attribute debe ser inferior ou igual aos kilobytes :value.',
        'string' => 'O :attribute debe ser inferior ou igual aos caracteres :value.',
        'array' => 'O :attribute non debe ter máis de elementos :value.',
    ],
    'max' => [
        'numeric' => 'O :attribute non pode ser maior que :max.',
        'file' => 'O :attribute non pode ser superior aos kilobytes :max.',
        'string' => 'O :attribute non pode ser maior que os caracteres :max.',
        'array' => 'O :attribute pode non ter máis de elementos :max.',
    ],
    'mimes' => 'O :attribute debe ser un ficheiro do tipo: :values.',
    'mimetypes' => 'O :attribute debe ser un ficheiro do tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute debe ser polo menos :min.',
        'file' => 'O :attribute debe ser polo menos :min kilobytes.',
        'string' => 'O :attribute debe ter polo menos caracteres :min.',
        'array' => 'O :attribute debe ter polo menos elementos :min.',
    ],
    'not_in' => 'O :attribute seleccionado non é válido.',
    'not_regex' => 'O formato :attribute non é válido.',
    'numeric' => 'O :attribute debe ser un número.',
    'present' => 'O campo :attribute debe estar presente.',
    'regex' => 'O formato :attribute non é válido.',
    'required' => 'O campo :attribute é obrigatorio.',
    'required_if' => 'O campo :attribute é obrigatorio cando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatorio a menos que :other estea en :values.',
    'required_with' => 'O campo :attribute é obrigatorio cando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatorio cando :values está presente.',
    'required_without' => 'O campo :attribute é obrigatorio cando :values non está presente.',
    'required_without_all' => 'O campo :attribute é obrigatorio cando ningún dos :values está presente.',
    'same' => 'O :attribute e :other deben coincidir.',
    'size' => [
        'numeric' => 'O :attribute debe ser :size.',
        'file' => 'O :attribute debe ser :size kilobytes.',
        'string' => 'O :attribute debe ser caracteres :size.',
        'array' => 'O :attribute debe conter elementos :size.',
    ],
    'string' => 'O :attribute debe ser unha cadea.',
    'timezone' => 'O :attribute debe ser unha zona válida.',
    'unique' => 'O :attribute xa foi tomado.',
    'uploaded' => 'Non se puido cargar o :attribute.',
    'url' => 'O formato :attribute non é válido.',

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
            'rule-name' => 'mensaxe personalizada',
        ],
        'g-recaptcha-response' => [
            'required' => 'Verifique que non es un robot.',
            'captcha' => 'Erro de captcha! téntao de novo máis tarde ou ponte en contacto co administrador do sitio.',
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



    'accepted_if' => 'O campo :attribute debe aceptarse cando :other é :value.',
    'ascii' => 'O campo :attribute só debe conter caracteres e símbolos alfanuméricos dun só byte.',
    'can' => 'O campo :attribute contén un valor non autorizado.',
    'contains' => 'O campo :attribute non ten un valor obrigatorio.',
    'current_password' => 'O contrasinal é incorrecto.',
    'date_equals' => 'O campo :attribute debe ser unha data igual a :date.',
    'decimal' => 'O campo :attribute debe ter cifras decimais :decimais.',
    'declined' => 'O campo :attribute debe ser rexeitado.',
    'declined_if' => 'O campo :attribute debe rexeitarse cando :other é :value.',
    'doesnt_end_with' => 'O campo :attribute non debe rematar cun dos seguintes: :values.',
    'doesnt_start_with' => 'O campo :attribute non debe comezar cun dos seguintes: :values.',
    'ends_with' => 'O campo :attribute debe rematar cun dos seguintes: :values.',
    'enum' => 'O atributo : seleccionado non é válido.',
    'extensions' => 'O campo :attribute debe ter unha das seguintes extensións: :values.',
    'hex_color' => 'O campo :attribute debe ser unha cor hexadecimal válida.',
    'list' => 'O campo :attribute debe ser unha lista.',
    'lowercase' => 'O campo :attribute debe estar en minúscula.',
    'mac_address' => 'O campo :attribute debe ser un enderezo MAC válido.',
    'max_digits' => 'O campo :attribute non debe ter máis de :max díxitos.',
    'min_digits' => 'O campo :attribute debe ter polo menos :min díxitos.',
    'missing' => 'O campo :attribute debe faltar.',
    'missing_if' => 'O campo :attribute debe faltar cando :other é :value.',
    'missing_unless' => 'O campo :attribute debe faltar a menos que :other sexa :value.',
    'missing_with' => 'O campo :attribute debe faltar cando :values está presente.',
    'missing_with_all' => 'O campo :attribute debe faltar cando :values están presentes.',
    'multiple_of' => 'O campo :attribute debe ser un múltiplo de :value.',
    'password' => [
        'letters' => 'O campo :attribute debe conter polo menos unha letra.',
        'mixed' => 'O campo :attribute debe conter polo menos unha letra maiúscula e unha minúscula.',
        'numbers' => 'O campo :attribute debe conter polo menos un número.',
        'symbols' => 'O campo :attribute debe conter polo menos un símbolo.',
        'uncompromised' => 'O atributo :: apareceu nunha fuga de datos. Escolla un :atributo diferente.',
    ],
    'present_if' => 'O campo :attribute debe estar presente cando :other é :value.',
    'present_unless' => 'O campo :attribute debe estar presente a non ser que :other sexa :value.',
    'present_with' => 'O campo :attribute debe estar presente cando :values está presente.',
    'present_with_all' => 'O campo :attribute debe estar presente cando :values están presentes.',
    'prohibited' => 'O campo :attribute está prohibido.',
    'prohibited_if' => 'O campo :attribute está prohibido cando :other é :value.',
    'prohibited_unless' => 'O campo :attribute está prohibido a menos que :other estea en :values.',
    'prohibits' => 'O campo :attribute prohibe que :other estea presente.',
    'required_array_keys' => 'O campo :attribute debe conter entradas para: :values.',
    'required_if_accepted' => 'O campo :attribute é obrigatorio cando se acepta :other.',
    'required_if_declined' => 'O campo :attribute é obrigatorio cando se rexeita :other.',
    'starts_with' => 'O campo :attribute debe comezar cun dos seguintes: :values.',
    'uppercase' => 'O campo :attribute debe estar en maiúscula.',
    'ulid' => 'O campo :attribute debe ser un ULID válido.',
    'uuid' => 'O campo :attribute debe ser un UUID válido.',
];
