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

    'accepted' => 'Me whakaae te :attribute.',
    'active_url' => 'Ko te :attribute ehara i te URL whaimana.',
    'after' => 'Me noho te :attribute i muri i te :date.',
    'after_or_equal' => 'Ko te :attribute me noho he ra i muri mai, kia rite ranei ki te :date.',
    'alpha' => 'Kei roto i te :attribute nga reta anake.',
    'alpha_dash' => 'Kei roto i te :attribute nga reta, nga nama, me nga tohu.',
    'alpha_num' => 'Kei roto i te :attribute nga reta me nga nama anake.',
    'array' => 'Ko te :attribute me noho he huinga.',
    'before' => 'Ko te :attribute me noho he ra i mua i te :date.',
    'before_or_equal' => 'Ko te :attribute he ra i mua, he rite ranei ki te :date.',
    'between' => [
        'numeric' => 'Me noho te :attribute i waenga i te :min me te :max.',
        'file' => 'Me noho te :attribute i waenga i te :min me te :max kiropaita.',
        'string' => 'Me noho te :attribute i waenga i nga tohu :min me :max.',
        'array' => 'Ko te :attribute me whai i waenga i nga taonga :min me :max.',
    ],
    'boolean' => 'Ko te mara :attribute me pono, he teka ranei.',
    'confirmed' => 'Ko te whakapumautanga :attribute kaore e rite.',
    'date' => 'Ko te :attribute ehara i te ra whaimana.',
    'date_format' => 'Ko te :attribute kaore i te rite ki te whakatakotoranga :format.',
    'different' => 'Ko te :attribute me te :other me rereke.',
    'digits' => 'Ko te :attribute me tohu :digits.',
    'digits_between' => 'Me noho te :attribute i waenga i nga mati :min me :max.',
    'dimensions' => 'He ahua muhu te ahua o te :attribute.',
    'distinct' => 'Ko te mara :attribute he uara taarua.',
    'email' => 'Ko te :attribute he wahitau imeera whaimana.',
    'exists' => 'Ko te :attribute kua tohua he muhu.',
    'file' => 'Ko te :attribute he konae.',
    'filled' => 'Me whai uara te mara :attribute.',
    'gt' => [
        'numeric' => 'Ko te :attribute me nui ake i te :value.',
        'file' => 'Ko te :attribute me nui ake i te :value kiropaita.',
        'string' => 'Me nui ake te :attribute i nga tohu :value.',
        'array' => 'Ko te :attribute me nui ake nga taonga :value.',
    ],
    'gte' => [
        'numeric' => 'Ko te :attribute me nui ake, kia rite ranei ki te :value.',
        'file' => 'Ko te :attribute me nui ake, kia rite ranei ki te :value kiropaita.',
        'string' => 'Ko te :attribute me nui ake, kia rite ranei nga tohu :value.',
        'array' => 'Ko te :attribute me whai taonga :value, neke atu ranei.',
    ],
    'image' => 'Ko te :attribute he ahua.',
    'in' => 'Ko te :attribute kua tohua he muhu.',
    'in_array' => 'Karekau te mara :attribute i te :other.',
    'integer' => 'Me noho tauoti te :attribute.',
    'ip' => 'Ko te :attribute me whaimana he wahitau IP.',
    'ipv4' => 'Me whai mana te :attribute he wāhitau IPv4.',
    'ipv6' => 'Ko te :attribute he wahitau IPv6 whaimana.',
    'json' => 'Ko te :attribute he aho JSON whaimana.',
    'lt' => [
        'numeric' => 'Ko te :attribute me iti ake i te :value.',
        'file' => 'Ko te :attribute me iti ake i te :value kiropaita.',
        'string' => 'Ko te :attribute me iti ake i nga tohu :value.',
        'array' => 'Ko te :attribute me iti ake i nga taonga :value.',
    ],
    'lte' => [
        'numeric' => 'Ko te :attribute me iti ake i te rite ranei ki te :value.',
        'file' => 'Ko te :attribute me iti ake, kia rite ranei ki te :value kiropaita.',
        'string' => 'Ko te :attribute me iti ake i te rite ranei nga tohu :value.',
        'array' => 'Ko te :attribute me kaua e nui ake i nga taonga :value.',
    ],
    'max' => [
        'numeric' => 'Ko te :attribute kaore pea e nui ake i te :max.',
        'file' => 'Ko te :attribute kaore pea e nui ake i te :max kiropaita.',
        'string' => 'Ko te :attribute kaore pea e nui ake i nga tohu :max.',
        'array' => 'Ko te :attribute kaore pea he nui ake i nga taonga :max.',
    ],
    'mimes' => 'Ko te :attribute me he momo momo: :values.',
    'mimetypes' => 'Ko te :attribute me he momo momo: :values.',
    'min' => [
        'numeric' => 'Ko te :attribute me iti rawa te :min.',
        'file' => 'Ko te :attribute me iti rawa te :min kiropaita.',
        'string' => 'Ko te :attribute kia iti rawa nga tohu :min.',
        'array' => 'Ko te :attribute me whai taonga :min.',
    ],
    'not_in' => 'Ko te :attribute kua tohua he muhu.',
    'not_regex' => 'He muhu te whakatakotoranga :attribute.',
    'numeric' => 'Me he tau te :attribute.',
    'present' => 'Me noho te mara :attribute.',
    'regex' => 'He muhu te whakatakotoranga :attribute.',
    'required' => 'Kei te hiahiatia te mara :attribute.',
    'required_if' => 'Ko te mara :attribute e hiahiatia ana ina ko :other te :value.',
    'required_unless' => 'Ko te mara :attribute e hiahiatia ana mena ko :other kei :values.',
    'required_with' => 'Kei te hiahiatia te mara :attribute i te wa e noho ana a :values.',
    'required_with_all' => 'Kei te hiahiatia te mara :attribute i te wa e noho ana a :values.',
    'required_without' => 'Ko te mara :attribute e hiahiatia ana i te wa kaore a :values.',
    'required_without_all' => 'Kei te hiahiatia te mara :attribute karekau he :values.',
    'same' => 'Ko te :attribute me te :other me rite.',
    'size' => [
        'numeric' => 'Ko te :attribute me :size.',
        'file' => 'Ko te :attribute me :size kiropaita.',
        'string' => 'Ko te :attribute me tohu :size.',
        'array' => 'Ko te :attribute me whai taonga :size.',
    ],
    'string' => 'Ko te :attribute he aho.',
    'timezone' => 'Ko te :attribute he rohe whaimana.',
    'unique' => 'Kua tangohia te :attribute.',
    'uploaded' => 'I rahua te tukuake a :attribute.',
    'url' => 'He muhu te whakatakotoranga :attribute.',

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
            'rule-name' => 'ritenga-karere',
        ],
        'g-recaptcha-response' => [
            'required' => 'Manatoko koa ehara koe i te karetao.',
            'captcha' => 'Hapa Captcha! ngana ano i muri mai, whakapā atu ranei ki te kaiwhakahaere o te pae.',
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



    'accepted_if' => 'Ko te :huanga āpure me whakaae ina :kotahi ko :uara.',
    'ascii' => 'Ko te :huanga apure me mau anake nga tohu-paita-a-papa-arepa me nga tohu.',
    'can' => 'Ko te :huanga āpure he uara kore mana.',
    'contains' => 'Ko te :huanga āpure kei te ngaro he uara e hiahiatia ana.',
    'current_password' => 'Kei te hē te kupuhipa.',
    'date_equals' => 'Ko te :huanga āpure me rite te rā ki te :rā.',
    'decimal' => 'Ko te :huanga apure me whai :nga ira-ira.',
    'declined' => 'Ko te :huanga āpure me whakakore.',
    'declined_if' => 'Ko te :huanga āpure me turakina ina ko :kotahi te :uara.',
    'doesnt_end_with' => 'Ko te :huanga mara kaua e mutu ki tetahi o enei e whai ake nei: : uara.',
    'doesnt_start_with' => 'Ko te :huanga mara kaua e timata ki tetahi o enei e whai ake nei: : uara.',
    'ends_with' => 'Ko te :huanga āpure me mutu ki tetahi o enei e whai ake nei: :values.',
    'enum' => 'Ko te :huanga kua tohua he muhu.',
    'extensions' => 'Ko te :huanga āpure me whai tetahi o nga toronga e whai ake nei: :values.',
    'hex_color' => 'Ko te :huanga āpure me whaimana te tae hautekaumāono.',
    'list' => 'Ko te :huanga mara me he rarangi.',
    'lowercase' => 'Me pūriki te āpure :huanga.',
    'mac_address' => 'Ko te :huanga āpure me whai wāhitau MAC whaimana.',
    'max_digits' => 'Ko te :huanga āpure kaua e nui ake i te :max mati.',
    'min_digits' => 'Ko te :huanga āpure me whai i te iti rawa :min mati.',
    'missing' => 'Me ngaro te āpure :huanga.',
    'missing_if' => 'Me ngaro te āpure :huanga ina :kotahi ko :uara.',
    'missing_unless' => 'Me ngaro te :huanga āpure mena ko :kotahi ko te :value.',
    'missing_with' => 'Me ngaro te āpure :huanga ina : uara.',
    'missing_with_all' => 'Me ngaro te apure :huanga ina : uara.',
    'multiple_of' => 'Ko te :huanga āpure me taurea o :uara.',
    'password' => [
        'letters' => 'Ko te :huanga āpure me whai kia kotahi te reta.',
        'mixed' => 'Ko te :huanga āpure me whai kia kotahi te rahi me te reta iti.',
        'numbers' => 'Ko te :huanga āpure kia kotahi neke atu te tau.',
        'symbols' => 'Ko te :huanga āpure me whai tohu kia kotahi neke atu.',
        'uncompromised' => 'Ko te : huanga kua puta i roto i te turuturu raraunga. Tena koa whiriwhiria tetahi atu :huanga.',
    ],
    'present_if' => 'Ko te :huanga āpure me noho i te wa ko :kotahi te :uara.',
    'present_unless' => 'Ko te :huanga āpure me noho ki te kore ko :other ko :value.',
    'present_with' => 'Ko te :huanga āpure me noho ina tae mai nga :values.',
    'present_with_all' => 'Ko te :huanga āpure me noho i te wa e noho ana :values.',
    'prohibited' => 'Kua rāhuitia te āpure :huanga.',
    'prohibited_if' => 'Ko te :huanga āpure ka rāhuitia ina ko :kotahi te :uara.',
    'prohibited_unless' => 'Ko te :huanga āpure e rāhuitia ana mena ko :kei roto i te : uara.',
    'prohibits' => 'Ko te :huanga mara ka aukati i a :tetahi atu kia tae mai.',
    'required_array_keys' => 'Me whai urunga te mara :huanga mo: :values.',
    'required_if_accepted' => 'Ko te :huanga āpure e hiahiatia ana ina whakaaehia te :tahi atu.',
    'required_if_declined' => 'Ko te :huanga āpure e hiahiatia ana i te wa e paopao ana tetahi atu.',
    'starts_with' => 'Me timata te apure :huanga ki tetahi o enei e whai ake nei: : uara.',
    'uppercase' => 'Me pūmatua te āpure :huanga.',
    'ulid' => 'Ko te :huanga āpure me ULID whaimana.',
    'uuid' => 'Ko te :huanga āpure he UUID whaimana.',
];
