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

    'accepted' => ':attribute iyenera kulandiridwa.',
    'active_url' => ':attribute si URL yovomerezeka.',
    'after' => ':attribute iyenera kukhala tsiku pambuyo pa :date.',
    'after_or_equal' => ':attribute iyenera kukhala tsiku lotsatira kapena lofanana ndi :date.',
    'alpha' => ':attribute ikhoza kukhala ndi zilembo zokha.',
    'alpha_dash' => 'The :attribute atha kukhala ndi zilembo, manambala, ndi mizere.',
    'alpha_num' => 'The :attribute atha kukhala ndi zilembo ndi manambala okha.',
    'array' => ':attribute iyenera kukhala yosanja.',
    'before' => ':attribute iyenera kukhala deti :date isanakwane.',
    'before_or_equal' => ':attribute iyenera kukhala tsiku lakale kapena lofanana ndi :date.',
    'between' => [
        'numeric' => ':attribute iyenera kukhala pakati pa :min ndi :max.',
        'file' => ':attribute iyenera kukhala pakati pa :min ndi :max ma kilobytes.',
        'string' => 'The :attribute iyenera kukhala pakati pa :min ndi :max zilembo.',
        'array' => ':attribute iyenera kukhala pakati pa zinthu za :min ndi :max.',
    ],
    'boolean' => 'The :attribute field iyenera kukhala yowona kapena zabodza.',
    'confirmed' => 'The :attribute chitsimikizo sichikufanana.',
    'date' => 'The :attribute si tsiku lovomerezeka.',
    'date_format' => 'The :attribute sagwirizana ndi mtundu :format.',
    'different' => ':attribute ndi :other ziyenera kukhala zosiyana.',
    'digits' => ':attribute iyenera kukhala manambala a :digits.',
    'digits_between' => ':attribute iyenera kukhala pakati pa :min ndi :max manambala.',
    'dimensions' => 'The :attribute ali ndi miyeso yolakwika yazithunzi.',
    'distinct' => 'The :attribute field ili ndi mtengo wobwereza.',
    'email' => 'The :attribute iyenera kukhala imelo yovomerezeka.',
    'exists' => ':attribute yosankhidwa ndiyolakwika.',
    'file' => 'The :attribute iyenera kukhala fayilo.',
    'filled' => 'The :attribute field iyenera kukhala ndi mtengo.',
    'gt' => [
        'numeric' => ':attribute iyenera kukhala yayikulu kuposa :value.',
        'file' => ':attribute iyenera kukhala yayikulu kuposa :value makilogalamu.',
        'string' => 'The :attribute iyenera kukhala yayikulu kuposa :value zilembo.',
        'array' => 'The :attribute ayenera kukhala ndi zambiri kuposa :value zinthu.',
    ],
    'gte' => [
        'numeric' => ':attribute iyenera kukhala yayikulu kuposa kapena yofanana ndi :value.',
        'file' => ':attribute iyenera kukhala yayikulu kuposa kapena yofanana ndi :value kilobytes.',
        'string' => ':attribute iyenera kukhala yayikulu kuposa kapena yofanana ndi zilembo za :value.',
        'array' => ':attribute iyenera kukhala ndi zinthu za :value kapena zambiri.',
    ],
    'image' => ':attribute iyenera kukhala chithunzi.',
    'in' => ':attribute yosankhidwa ndiyolakwika.',
    'in_array' => 'Gawo la :attribute kulibe ku :other.',
    'integer' => ':attribute iyenera kukhala yowerengeka.',
    'ip' => 'The :attribute ayenera kukhala adilesi ya IP yovomerezeka.',
    'ipv4' => 'The :attribute iyenera kukhala adilesi yovomerezeka ya IPv4.',
    'ipv6' => 'The :attribute iyenera kukhala adilesi yovomerezeka ya IPv6.',
    'json' => 'The :attribute iyenera kukhala chingwe chovomerezeka cha JSON.',
    'lt' => [
        'numeric' => ':attribute iyenera kukhala yochepa kuposa :value.',
        'file' => ':attribute iyenera kukhala yocheperako ma kilobytes a :value.',
        'string' => 'The :attribute should be less than :value characters.',
        'array' => 'The :attribute iyenera kukhala ndi zochepa kuposa :value zinthu.',
    ],
    'lte' => [
        'numeric' => ':attribute iyenera kukhala yochepera kapena yofanana ndi :value.',
        'file' => ':attribute iyenera kukhala yocheperako kapena yofanana ndi :value kilobytes.',
        'string' => ':attribute iyenera kukhala yochepa kapena yofanana ndi zilembo za :value.',
        'array' => 'The :attribute sayenera kukhala ndi zinthu zambiri kuposa :value.',
    ],
    'max' => [
        'numeric' => ':attribute ikhoza kukhala yayikulu kuposa :max.',
        'file' => 'The :attribute mwina si wamkulu kuposa :max kilobytes.',
        'string' => 'The :attribute mwina sangakhale wamkulu kuposa :max zilembo.',
        'array' => 'The :attribute mwina asakhale ndi zinthu zopitilira :max.',
    ],
    'mimes' => 'The :attribute iyenera kukhala fayilo yamtundu: :values.',
    'mimetypes' => 'The :attribute iyenera kukhala fayilo yamtundu: :values.',
    'min' => [
        'numeric' => ':attribute iyenera kukhala osachepera :min.',
        'file' => ':attribute iyenera kukhala ma kilobytes osachepera :min.',
        'string' => 'The :attribute ayenera kukhala osachepera :min zilembo.',
        'array' => ':attribute iyenera kukhala ndi zinthu zosachepera za :min.',
    ],
    'not_in' => ':attribute yosankhidwa ndiyolakwika.',
    'not_regex' => 'Mtundu wa :attribute ndi wolakwika.',
    'numeric' => ':attribute iyenera kukhala nambala.',
    'present' => 'The :attribute field iyenera kukhalapo.',
    'regex' => 'Mtundu wa :attribute ndi wolakwika.',
    'required' => 'The :attribute field ndiyofunika.',
    'required_if' => 'The :attribute field ndiyofunika pamene :other ndi :value.',
    'required_unless' => 'The :attribute field ikufunika pokhapokha :other ili mu :values.',
    'required_with' => 'The :attribute field ndiyofunika pamene :values ilipo.',
    'required_with_all' => 'The :attribute field ndiyofunika pamene :values ilipo.',
    'required_without' => 'The :attribute field ndiyofunika pamene :values palibe.',
    'required_without_all' => 'The :attribute field ndiyofunika ngati palibe :values ilipo.',
    'same' => ':attribute ndi :other ziyenera kufanana.',
    'size' => [
        'numeric' => ':attribute iyenera kukhala :size.',
        'file' => ':attribute iyenera kukhala :size ma kilobytes.',
        'string' => 'The :attribute should be :size characters.',
        'array' => ':attribute iyenera kukhala ndi zinthu za :size.',
    ],
    'string' => ':attribute iyenera kukhala chingwe.',
    'timezone' => ':attribute iyenera kukhala malo ovomerezeka.',
    'unique' => 'The :attribute yatengedwa kale.',
    'uploaded' => ':attribute yalephera kukwezedwa.',
    'url' => 'Mtundu wa :attribute ndi wolakwika.',

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
            'rule-name' => 'mwambo-uthenga',
        ],
        'g-recaptcha-response' => [
            'required' => 'Chonde tsimikizirani kuti sindinu loboti.',
            'captcha' => 'Cholakwika cha Captcha! yesaninso nthawi ina kapena funsani woyang\'anira webusayiti.',
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



    'accepted_if' => 'The :attribute field iyenera kulandiridwa pamene :other ndi :value.',
    'ascii' => 'Gawo la :attribute liyenera kukhala ndi zilembo za alphanumeric ndi zizindikiro zokha.',
    'can' => 'The :attribute field ili ndi mtengo wosaloleka.',
    'contains' => 'Gawo la :attribute likusowa mtengo wofunikira.',
    'current_password' => 'Mawu achinsinsi ndi olakwika.',
    'date_equals' => 'The :attribute field iyenera kukhala deti lofanana ndi :deti.',
    'decimal' => 'The :attribute field should have :decimal decimal places.',
    'declined' => 'The :mawonekedwe akuyenera kukanidwa.',
    'declined_if' => 'The :attribute field iyenera kukanidwa pamene :other ndi :value.',
    'doesnt_end_with' => 'The :attribute field sayenera kutha ndi chimodzi mwa izi: :values.',
    'doesnt_start_with' => 'The :attribute field sayenera kuyamba ndi chimodzi mwa izi: :values.',
    'ends_with' => 'The :attribute field iyenera kutha ndi chimodzi mwa izi: :values.',
    'enum' => 'Chosankhidwa :mawonekedwe ndi olakwika.',
    'extensions' => 'The :attribute field iyenera kukhala ndi chimodzi mwazowonjezera izi: :values.',
    'hex_color' => 'The :attribute field iyenera kukhala mtundu wovomerezeka wa hexadecimal.',
    'list' => 'The :attribute field iyenera kukhala mndandanda.',
    'lowercase' => 'The :attribute field iyenera kukhala yaing\'ono.',
    'mac_address' => 'The :attribute field iyenera kukhala adilesi yovomerezeka ya MAC.',
    'max_digits' => 'Gawo la :attribute sikuyenera kukhala ndi manambala opitilira :max.',
    'min_digits' => 'Gawo la :attribute liyenera kukhala ndi manambala osachepera :min.',
    'missing' => 'The :attribute gawo liyenera kusowa.',
    'missing_if' => 'The :attribute field iyenera kusowa pamene :other ndi :value.',
    'missing_unless' => 'Gawo la :attribute liyenera kusowa pokhapokha :other ndi :value.',
    'missing_with' => 'The :attribute field iyenera kusowa pamene :values ilipo.',
    'missing_with_all' => 'The :attribute field iyenera kusowa pamene :values alipo.',
    'multiple_of' => 'The :attribute field iyenera kukhala yochuluka ya :value.',
    'password' => [
        'letters' => 'The :attribute field iyenera kukhala ndi chilembo chimodzi.',
        'mixed' => 'The :attribute field iyenera kukhala ndi zilembo zazikulu imodzi ndi zing\'onozing\'ono.',
        'numbers' => 'The :attribute field iyenera kukhala ndi nambala imodzi.',
        'symbols' => 'The :attribute field iyenera kukhala ndi chizindikiro chimodzi.',
        'uncompromised' => 'Zomwe zapatsidwa :attribute zawonekera pakutayikira kwa data. Chonde sankhani china :makhalidwe.',
    ],
    'present_if' => 'The :attribute field iyenera kukhalapo pamene :other ndi :value.',
    'present_unless' => 'The :attribute field iyenera kukhalapo pokhapokha :other ndi :value.',
    'present_with' => 'The :attribute field iyenera kukhalapo pamene :values ilipo.',
    'present_with_all' => 'The :attribute field iyenera kukhalapo pamene :values alipo.',
    'prohibited' => 'The :attribute field ndiyoletsedwa.',
    'prohibited_if' => 'The :attribute field ndi yoletsedwa pamene :other ndi :value.',
    'prohibited_unless' => 'The :attribute field ndiyoletsedwa pokhapokha :other ili mu :values.',
    'prohibits' => 'The :attribute field imaletsa :zina kukhalapo.',
    'required_array_keys' => 'The :attribute field iyenera kukhala ndi zolembera za: :values.',
    'required_if_accepted' => 'The :attribute field ikufunika pamene :zina zavomerezedwa.',
    'required_if_declined' => 'The :attribute field ndiyofunika pamene :zina zikana.',
    'starts_with' => 'The :attribute field iyenera kuyamba ndi chimodzi mwa izi: :values.',
    'uppercase' => 'The :attribute field iyenera kukhala yayikulu.',
    'ulid' => 'The :attribute field iyenera kukhala ULID yovomerezeka.',
    'uuid' => 'The :attribute field iyenera kukhala UUID yovomerezeka.',
];
