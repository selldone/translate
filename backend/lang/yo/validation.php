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

    'accepted' => ':attribute gbọdọ jẹ gbigba.',
    'active_url' => ':attribute kii ṣe URL ti o wulo.',
    'after' => ':attribute gbọdọ jẹ ọjọ kan lẹhin :date.',
    'after_or_equal' => ':attribute gbọdọ jẹ ọjọ kan lẹhin tabi dọgba si :date.',
    'alpha' => ':attribute le ni awọn lẹta nikan ninu.',
    'alpha_dash' => ':attribute le ni awọn lẹta nikan, awọn nọmba, ati dashes ninu.',
    'alpha_num' => ':attribute le ni awọn lẹta ati awọn nọmba nikan ninu.',
    'array' => ':attribute gbọdọ jẹ opo.',
    'before' => ':attribute gbọdọ jẹ ọjọ kan ṣaaju :date.',
    'before_or_equal' => ':attribute gbọdọ jẹ ọjọ ṣaaju tabi dọgba si :date.',
    'between' => [
        'numeric' => ':attribute gbọdọ wa laarin :min ati :max.',
        'file' => ':attribute gbọdọ wa laarin :min ati :max kilobytes.',
        'string' => ':attribute gbọdọ wa laarin :min ati :max ohun kikọ.',
        'array' => ':attribute gbọdọ ni laarin awọn nkan :min ati :max.',
    ],
    'boolean' => 'Aaye :attribute gbọdọ jẹ otitọ tabi eke.',
    'confirmed' => 'Ìmúdájú :attribute ko baramu.',
    'date' => ':attribute kii ṣe ọjọ to wulo.',
    'date_format' => ':attribute ko baramu ọna kika :format.',
    'different' => ':attribute ati :other gbọdọ yatọ.',
    'digits' => ':attribute gbọdọ jẹ awọn nọmba :digits.',
    'digits_between' => ':attribute gbọdọ wa laarin awọn nọmba :min ati :max.',
    'dimensions' => ':attribute ni awọn iwọn aworan ti ko tọ.',
    'distinct' => 'Aaye :attribute ni iye ẹda-iwe.',
    'email' => ':attribute gbọdọ jẹ adirẹsi imeeli to wulo.',
    'exists' => ':attribute ti a yan ko wulo.',
    'file' => ':attribute gbọdọ jẹ faili kan.',
    'filled' => 'Aaye :attribute gbọdọ ni iye kan.',
    'gt' => [
        'numeric' => ':attribute gbọdọ tobi ju :value.',
        'file' => ':attribute gbọdọ tobi ju :value kilobytes.',
        'string' => ':attribute gbọdọ tobi ju awọn ohun kikọ :value lọ.',
        'array' => ':attribute gbọdọ ni diẹ ẹ sii ju awọn nkan :value lọ.',
    ],
    'gte' => [
        'numeric' => ':attribute gbọdọ tobi ju tabi dọgba :value.',
        'file' => ':attribute gbọdọ tobi ju tabi dọgba :value kilobytes.',
        'string' => ':attribute gbọdọ tobi ju tabi dọgba ju awọn ohun kikọ :value lọ.',
        'array' => ':attribute gbọdọ ni awọn nkan :value tabi diẹ sii.',
    ],
    'image' => ':attribute gbọdọ jẹ aworan.',
    'in' => ':attribute ti a yan ko wulo.',
    'in_array' => 'Aaye :attribute ko si ni :other.',
    'integer' => ':attribute gbọdọ jẹ odidi kan.',
    'ip' => ':attribute gbọdọ jẹ adiresi IP to wulo.',
    'ipv4' => ':attribute gbọdọ jẹ adiresi IPv4 to wulo.',
    'ipv6' => ':attribute gbọdọ jẹ adiresi IPv6 to wulo.',
    'json' => ':attribute gbọdọ jẹ okun JSON to wulo.',
    'lt' => [
        'numeric' => ':attribute gbọdọ jẹ kere ju :value.',
        'file' => ':attribute gbọdọ jẹ kere ju :value kilobytes.',
        'string' => ':attribute gbọdọ jẹ kere ju awọn ohun kikọ :value.',
        'array' => ':attribute gbọdọ ni kere ju awọn nkan :value.',
    ],
    'lte' => [
        'numeric' => ':attribute gbọdọ jẹ kere ju tabi dọgba :value.',
        'file' => ':attribute gbọdọ jẹ kere ju tabi dọgba :value kilobytes.',
        'string' => ':attribute gbọdọ jẹ kere ju tabi dọgba awọn ohun kikọ :value.',
        'array' => ':attribute ko gbọdọ ni ju awọn nkan :value lọ.',
    ],
    'max' => [
        'numeric' => ':attribute le ma tobi ju :max.',
        'file' => ':attribute le ma tobi ju :max kilobytes.',
        'string' => ':attribute le ma tobi ju awọn kikọ :max lọ.',
        'array' => ':attribute le ma ni ju awọn nkan :max lọ.',
    ],
    'mimes' => ':attribute gbọdọ jẹ iru faili: :values.',
    'mimetypes' => ':attribute gbọdọ jẹ iru faili: :values.',
    'min' => [
        'numeric' => ':attribute gbọdọ jẹ o kere ju :min.',
        'file' => ':attribute gbọdọ jẹ o kere ju :min kilobytes.',
        'string' => ':attribute gbọdọ jẹ o kere ju awọn ohun kikọ :min.',
        'array' => ':attribute gbọdọ ni o kere ju awọn nkan :min.',
    ],
    'not_in' => ':attribute ti a yan ko wulo.',
    'not_regex' => 'Ọna kika :attribute ko wulo.',
    'numeric' => ':attribute gbọdọ jẹ nọmba kan.',
    'present' => 'Aaye :attribute gbọdọ wa.',
    'regex' => 'Ọna kika :attribute ko wulo.',
    'required' => 'Aaye :attribute ni a nilo.',
    'required_if' => 'Aaye :attribute ni a nilo nigbati :other jẹ :value.',
    'required_unless' => 'Aaye :attribute nilo ayafi ti :other wa ni :values.',
    'required_with' => 'Aaye :attribute ni a nilo nigbati :values wa.',
    'required_with_all' => 'Aaye :attribute ni a nilo nigbati :values wa.',
    'required_without' => 'Aaye :attribute nilo nigbati :values ko si.',
    'required_without_all' => 'Aaye :attribute ni a nilo nigbati ko si ọkan ninu :values ti o wa.',
    'same' => ':attribute ati :other gbọdọ baramu.',
    'size' => [
        'numeric' => ':attribute gbọdọ jẹ :size.',
        'file' => ':attribute gbọdọ jẹ :size kilobytes.',
        'string' => ':attribute gbọdọ jẹ awọn ohun kikọ :size.',
        'array' => ':attribute gbọdọ ni awọn nkan :size ninu.',
    ],
    'string' => ':attribute gbọdọ jẹ okun.',
    'timezone' => ':attribute gbọdọ jẹ agbegbe to wulo.',
    'unique' => ':attribute ti gba tẹlẹ.',
    'uploaded' => ':attribute kuna lati gbejade.',
    'url' => 'Ọna kika :attribute ko wulo.',

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
            'rule-name' => 'aṣa-ifiranṣẹ',
        ],
        'g-recaptcha-response' => [
            'required' => 'Jọwọ rii daju pe o kii ṣe roboti.',
            'captcha' => 'Aṣiṣe Captcha! gbiyanju lẹẹkansi nigbamii tabi kan si alabojuto ojula.',
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



    'accepted_if' => 'Aaye abuda gbọdọ jẹ gbigba nigbati :miran jẹ: iye.',
    'ascii' => 'Aaye ẹya-ara gbọdọ ni awọn ami alphanumeric-baiti kan ṣoṣo ati awọn aami ninu.',
    'can' => 'Aaye abuda ni iye laigba aṣẹ ninu.',
    'contains' => 'Aaye abuda: nsọnu iye ti a beere.',
    'current_password' => 'Ọrọigbaniwọle ko tọ.',
    'date_equals' => 'Aaye abuda gbọdọ jẹ ọjọ ti o dọgba si ọjọ.',
    'decimal' => 'Aaye abuda : gbọdọ ni: awọn aaye eleemewa eleemewa.',
    'declined' => 'Aaye abuda gbọdọ jẹ kọ.',
    'declined_if' => 'Aaye abuda gbọdọ kọ silẹ nigbati: omiran jẹ: iye.',
    'doesnt_end_with' => 'Aaye abuda ko gbọdọ pari pẹlu ọkan ninu awọn atẹle: awọn iye.',
    'doesnt_start_with' => 'Aaye abuda ko gbọdọ bẹrẹ pẹlu ọkan ninu awọn atẹle: awọn iye.',
    'ends_with' => 'Aaye abuda gbọdọ pari pẹlu ọkan ninu awọn atẹle: awọn iye.',
    'enum' => 'Iwa ti a yan ko wulo.',
    'extensions' => 'Aaye abuda gbọdọ ni ọkan ninu awọn amugbooro wọnyi: awọn iye.',
    'hex_color' => 'Aaye abuda gbọdọ jẹ awọ hexadecimal to wulo.',
    'list' => 'Aaye abuda gbọdọ jẹ atokọ kan.',
    'lowercase' => 'Aaye abuda gbọdọ jẹ kekere.',
    'mac_address' => 'Aaye abuda gbọdọ jẹ adiresi MAC ti o wulo.',
    'max_digits' => 'Aaye abuda ko gbọdọ ni ju: awọn nọmba ti o pọju lọ.',
    'min_digits' => 'Aaye abuda gbọdọ ni o kere ju awọn nọmba :min.',
    'missing' => 'Aaye abuda gbọdọ wa ni sonu.',
    'missing_if' => 'Aaye abuda gbọdọ sonu nigbati :miran jẹ: iye.',
    'missing_unless' => 'Aaye abuda gbọdọ sonu ayafi ti :omiran jẹ: iye.',
    'missing_with' => 'Aaye abuda gbọdọ sonu nigbati: awọn iye wa.',
    'missing_with_all' => 'Aaye abuda gbọdọ sonu nigbati: awọn iye wa.',
    'multiple_of' => 'Aaye abuda gbọdọ jẹ ọpọ ti: iye.',
    'password' => [
        'letters' => 'Aaye abuda gbọdọ ni o kere ju lẹta kan ninu.',
        'mixed' => 'Aaye abuda gbọdọ ni o kere ju lẹta nla kan ati lẹta kekere kan ninu.',
        'numbers' => 'Aaye abuda gbọdọ ni o kere ju nọmba kan ninu.',
        'symbols' => 'Aaye abuda gbọdọ ni o kere ju aami kan ninu.',
        'uncompromised' => 'Iwa ti a fun ni ti han ninu jijo data kan. Jọwọ yan o yatọ: abuda.',
    ],
    'present_if' => 'Aaye abuda gbọdọ wa nigbati :miran jẹ: iye.',
    'present_unless' => 'Aaye abuda gbọdọ wa ayafi ti: omiran jẹ: iye.',
    'present_with' => 'Aaye abuda gbọdọ wa nigbati: awọn iye ba wa.',
    'present_with_all' => 'Aaye abuda gbọdọ wa nigba ti: awọn iye wa.',
    'prohibited' => 'Aaye abuda ti ni eewọ.',
    'prohibited_if' => 'Aaye abuda jẹ eewọ nigbati :miran jẹ: iye.',
    'prohibited_unless' => 'Aaye abuda ti ni idinamọ ayafi ti :miran wa ninu: awọn iye.',
    'prohibits' => 'Aaye abuda ti ni idinamọ: miiran lati wa.',
    'required_array_keys' => 'Aaye abuda gbọdọ ni awọn titẹ sii fun: awọn iye.',
    'required_if_accepted' => 'Aaye abuda ni a nilo nigbati :miran ba gba.',
    'required_if_declined' => 'Aaye abuda ni a nilo nigbati :miran ti kọ.',
    'starts_with' => 'Aaye abuda gbọdọ bẹrẹ pẹlu ọkan ninu awọn atẹle: awọn iye.',
    'uppercase' => 'Aaye abuda gbọdọ jẹ oke.',
    'ulid' => 'Aaye abuda gbọdọ jẹ ULID to wulo.',
    'uuid' => 'Aaye abuda gbọdọ jẹ UUID to wulo.',
];
