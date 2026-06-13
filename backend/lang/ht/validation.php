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

    'accepted' => ':attribute a dwe aksepte.',
    'active_url' => ':attribute a se pa yon URL valab.',
    'after' => ':attribute a dwe yon dat apre :date.',
    'after_or_equal' => ':attribute a dwe yon dat apre oswa egal a :date.',
    'alpha' => ':attribute a ka sèlman genyen lèt.',
    'alpha_dash' => ':attribute a ka genyen sèlman lèt, nimewo, ak tirè.',
    'alpha_num' => ':attribute a ka sèlman genyen lèt ak nimewo.',
    'array' => ':attribute a dwe yon etalaj.',
    'before' => ':attribute a dwe yon dat anvan :date.',
    'before_or_equal' => ':attribute a dwe yon dat anvan oswa egal a :date.',
    'between' => [
        'numeric' => ':attribute a dwe ant :min ak :max.',
        'file' => ':attribute a dwe ant :min ak :max kilobytes.',
        'string' => ':attribute a dwe ant :min ak :max karaktè.',
        'array' => ':attribute a dwe genyen ant atik :min ak :max.',
    ],
    'boolean' => 'Champ :attribute a dwe vre oswa fo.',
    'confirmed' => 'Konfimasyon :attribute a pa matche.',
    'date' => ':attribute a pa yon dat valab.',
    'date_format' => ':attribute a pa matche ak fòma :format la.',
    'different' => ':attribute ak :other dwe diferan.',
    'digits' => ':attribute dwe :digits chif yo.',
    'digits_between' => ':attribute dwe ant chif :min ak :max.',
    'dimensions' => ':attribute a gen dimansyon imaj ki pa valab.',
    'distinct' => 'Jaden :attribute a gen yon valè kopi.',
    'email' => ':attribute a dwe yon adrès imel ki valab.',
    'exists' => ':attribute chwazi a pa valab.',
    'file' => ':attribute a dwe yon dosye.',
    'filled' => 'Jaden :attribute a dwe gen yon valè.',
    'gt' => [
        'numeric' => ':attribute a dwe pi gran pase :value.',
        'file' => ':attribute a dwe pi gran pase :value kilobytes.',
        'string' => ':attribute a dwe pi gran pase karaktè :value.',
        'array' => ':attribute a dwe gen plis pase atik :value.',
    ],
    'gte' => [
        'numeric' => ':attribute a dwe pi gran pase oswa egal :value.',
        'file' => ':attribute a dwe pi gran pase oswa egal :value kilobytes.',
        'string' => ':attribute a dwe pi gran pase karaktè :value oswa egal.',
        'array' => ':attribute a dwe gen :value atik oswa plis.',
    ],
    'image' => ':attribute a dwe yon imaj.',
    'in' => ':attribute chwazi a pa valab.',
    'in_array' => 'Jaden :attribute a pa egziste nan :other.',
    'integer' => ':attribute a dwe yon nonb antye relatif.',
    'ip' => ':attribute a dwe yon adrès IP valab.',
    'ipv4' => ':attribute a dwe yon adrès IPv4 valab.',
    'ipv6' => ':attribute a dwe yon adrès IPv6 valab.',
    'json' => ':attribute a dwe yon kòd JSON valab.',
    'lt' => [
        'numeric' => ':attribute a dwe mwens pase :value.',
        'file' => ':attribute a dwe mwens pase :value kilobytes.',
        'string' => ':attribute a dwe mwens pase karaktè :value.',
        'array' => ':attribute a dwe gen mwens pase :value atik yo.',
    ],
    'lte' => [
        'numeric' => ':attribute a dwe mwens pase oswa egal :value.',
        'file' => ':attribute a dwe mwens pase oswa egal :value kilobytes.',
        'string' => ':attribute a dwe mwens pase oswa egal :value karaktè.',
        'array' => ':attribute a pa dwe gen plis pase :value atik.',
    ],
    'max' => [
        'numeric' => ':attribute a pa ka pi gran pase :max.',
        'file' => ':attribute a pa ka pi gran pase :max kilobytes.',
        'string' => ':attribute a pa ka pi gran pase karaktè :max.',
        'array' => ':attribute a pa ka gen plis pase :max atik.',
    ],
    'mimes' => ':attribute a dwe yon dosye ki gen kalite: :values.',
    'mimetypes' => ':attribute a dwe yon dosye ki gen kalite: :values.',
    'min' => [
        'numeric' => ':attribute a dwe omwen :min.',
        'file' => ':attribute a dwe omwen :min kilobyte.',
        'string' => ':attribute a dwe omwen :min karaktè.',
        'array' => ':attribute a dwe genyen omwen :min atik.',
    ],
    'not_in' => ':attribute chwazi a pa valab.',
    'not_regex' => 'Fòma :attribute a pa valab.',
    'numeric' => ':attribute a dwe yon nimewo.',
    'present' => 'Champ :attribute dwe prezan.',
    'regex' => 'Fòma :attribute a pa valab.',
    'required' => 'Se jaden an :attribute obligatwa.',
    'required_if' => 'Jaden :attribute obligatwa lè :other se :value.',
    'required_unless' => 'Jaden :attribute la obligatwa sof si :other nan :values.',
    'required_with' => 'Jaden :attribute a obligatwa lè :values prezan.',
    'required_with_all' => 'Jaden :attribute a obligatwa lè :values prezan.',
    'required_without' => 'Champ :attribute a obligatwa lè :values pa prezan.',
    'required_without_all' => 'Jaden :attribute a obligatwa lè okenn nan :values pa prezan.',
    'same' => ':attribute a ak :other dwe matche.',
    'size' => [
        'numeric' => ':attribute a dwe :size.',
        'file' => ':attribute a dwe :size kilobytes.',
        'string' => ':attribute a dwe :size karaktè.',
        'array' => ':attribute a dwe genyen atik :size.',
    ],
    'string' => ':attribute a dwe yon fisèl.',
    'timezone' => ':attribute a dwe yon zòn valab.',
    'unique' => ':attribute la deja pran.',
    'uploaded' => ':attribute a echwe pou pou telechaje.',
    'url' => 'Fòma :attribute a pa valab.',

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
            'rule-name' => 'koutim-mesaj',
        ],
        'g-recaptcha-response' => [
            'required' => 'Tanpri verifye ke ou pa yon robo.',
            'captcha' => 'Erè Captcha! eseye ankò pita oswa kontakte admin sit la.',
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



    'accepted_if' => 'Yo dwe aksepte jaden :attribute a lè :other se :valè.',
    'ascii' => 'Champ :attribute a dwe genyen sèlman karaktè alfanumerik yon sèl-octet ak senbòl.',
    'can' => 'Jaden :attribute a gen yon valè ki pa otorize.',
    'contains' => 'Jaden :attribute a manke yon valè obligatwa.',
    'current_password' => 'Modpas la pa kòrèk.',
    'date_equals' => 'Champ :attribute a dwe yon dat egal a :date.',
    'decimal' => 'Jaden :attribute a dwe genyen :dezimal kote desimal.',
    'declined' => 'Yo dwe refize jaden :attribute la.',
    'declined_if' => 'Yo dwe refize jaden :attribute a lè :other se :valè.',
    'doesnt_end_with' => 'Champ :attribute pa dwe fini ak youn nan sa ki annapre yo: :values.',
    'doesnt_start_with' => 'Champ :attribute a pa dwe kòmanse ak youn nan sa ki annapre yo: :values.',
    'ends_with' => 'Champ :attribute dwe fini ak youn nan sa ki annapre yo: :values.',
    'enum' => 'Atribi chwazi a pa valab.',
    'extensions' => 'Jaden :attribute a dwe genyen youn nan ekstansyon sa yo: :values.',
    'hex_color' => 'Jaden :attribute a dwe gen yon koulè egzadesimal ki valab.',
    'list' => 'Jaden :attribute a dwe yon lis.',
    'lowercase' => 'Jaden :attribute a dwe gen miniskil.',
    'mac_address' => 'Jaden :attribute a dwe yon adrès MAC valab.',
    'max_digits' => 'Jaden :attribute a pa dwe gen plis pase :max chif.',
    'min_digits' => 'Jaden :attribute a dwe genyen omwen :min chif.',
    'missing' => 'Champ :attribute a dwe manke.',
    'missing_if' => 'Champ :attribute a dwe manke lè :other se :valè.',
    'missing_unless' => 'Champ :attribute a dwe manke sof si :other se :value.',
    'missing_with' => 'Champ :attribute a dwe manke lè :values prezan.',
    'missing_with_all' => 'Champ :attribute a dwe manke lè :values yo prezan.',
    'multiple_of' => 'Jaden :attribute a dwe yon miltip :value.',
    'password' => [
        'letters' => 'Champ :attribute a dwe genyen omwen yon lèt.',
        'mixed' => 'Champ :attribute a dwe genyen omwen yon lèt majiskil ak yon lèt miniskil.',
        'numbers' => 'Jaden :attribute a dwe genyen omwen yon nimewo.',
        'symbols' => 'Champ :attribute a dwe genyen omwen yon senbòl.',
        'uncompromised' => 'Atribi yo bay la te parèt nan yon fwit done. Tanpri chwazi yon atribi diferan.',
    ],
    'present_if' => 'Champ :attribute a dwe prezan lè :other se :valè.',
    'present_unless' => 'Champ :attribute a dwe prezan sof si :other se :value.',
    'present_with' => 'Champ :attribute dwe prezan lè :values prezan.',
    'present_with_all' => 'Jaden :attribute a dwe prezan lè :valè yo prezan.',
    'prohibited' => 'Champ :attribute a entèdi.',
    'prohibited_if' => 'Chanm :attribute a entèdi lè :other se :valè.',
    'prohibited_unless' => 'Chanm :attribute a entèdi sof si :other nan :valè.',
    'prohibits' => 'Champ :attribute la entèdi :other prezan.',
    'required_array_keys' => 'Champ :attribute a dwe genyen antre pou :valè.',
    'required_if_accepted' => 'Champ :attribute a obligatwa lè yo aksepte :other.',
    'required_if_declined' => 'Champ :attribute a obligatwa lè :other refize.',
    'starts_with' => 'Jaden :attribute a dwe kòmanse ak youn nan sa ki annapre yo: :values.',
    'uppercase' => 'Jaden :attribute a dwe majiskil.',
    'ulid' => 'Jaden :attribute a dwe yon ULID valab.',
    'uuid' => 'Jaden :attribute a dwe yon UUID valab.',
];
