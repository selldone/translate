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

    'accepted' => 'Ní mór glacadh leis an :attribute.',
    'active_url' => 'Ní :attribute bailí é an :attribute.',
    'after' => 'Caithfidh an :attribute a bheith ina dháta tar éis :date.',
    'after_or_equal' => 'Caithfidh an :attribute a bheith ina dháta tar éis nó cothrom le :date.',
    'alpha' => 'Ní fhéadfaidh ach litreacha a bheith sa :attribute.',
    'alpha_dash' => 'Ní fhéadfaidh ach litreacha, uimhreacha agus daiseanna a bheith sa :attribute.',
    'alpha_num' => 'Ní fhéadfaidh ach litreacha agus uimhreacha a bheith sa :attribute.',
    'array' => 'Caithfidh an :attribute a bheith ina eagar.',
    'before' => 'Caithfidh an :attribute a bheith ina dháta roimh :date.',
    'before_or_equal' => 'Caithfidh an :attribute a bheith ina dháta roimh nó comhionann le :date.',
    'between' => [
        'numeric' => 'Caithfidh an :attribute a bheith idir :min agus :max.',
        'file' => 'Caithfidh an :attribute a bheith idir cilibheart :min agus :max.',
        'string' => 'Caithfidh an :attribute a bheith idir carachtair :min agus :max.',
        'array' => 'Ní mór go mbeadh idir míreanna :min agus :max ag an :attribute.',
    ],
    'boolean' => 'Caithfidh an réimse :attribute a bheith fíor nó bréagach.',
    'confirmed' => 'Ní hionann an deimhniú :attribute.',
    'date' => 'Ní dáta bailí é an :attribute.',
    'date_format' => 'Ní mheaitseálann an :attribute leis an bhformáid :format.',
    'different' => 'Caithfidh an :attribute agus :other a bheith difriúil.',
    'digits' => 'Caithfidh an :attribute a bheith digit :digits.',
    'digits_between' => 'Caithfidh an :attribute a bheith idir dhigit :min agus :max.',
    'dimensions' => 'Tá toisí íomhá neamhbhailí ag an :attribute.',
    'distinct' => 'Tá luach dúblach ag an réimse :attribute.',
    'email' => 'Caithfidh an :attribute a bheith ina sheoladh ríomhphoist bailí.',
    'exists' => 'Tá an :attribute roghnaithe neamhbhailí.',
    'file' => 'Caithfidh an :attribute a bheith ina chomhad.',
    'filled' => 'Ní mór luach a bheith ag an réimse :attribute.',
    'gt' => [
        'numeric' => 'Caithfidh an :attribute a bheith níos mó ná :value.',
        'file' => 'Caithfidh an :attribute a bheith níos mó ná cilibheart :value.',
        'string' => 'Caithfidh an :attribute a bheith níos mó ná carachtair :value.',
        'array' => 'Ní mór go mbeadh níos mó ná míreanna :value ag an :attribute.',
    ],
    'gte' => [
        'numeric' => 'Caithfidh an :attribute a bheith níos mó ná nó cothrom le :value.',
        'file' => 'Caithfidh an :attribute a bheith níos mó ná nó cothrom le cilibheart :value.',
        'string' => 'Caithfidh an :attribute a bheith níos mó ná nó cothrom le carachtair :value.',
        'array' => 'Ní mór go mbeadh míreanna :value nó níos mó ag an :attribute.',
    ],
    'image' => 'Caithfidh an :attribute a bheith ina íomhá.',
    'in' => 'Tá an :attribute roghnaithe neamhbhailí.',
    'in_array' => 'Níl an réimse :attribute ann i :other.',
    'integer' => 'Caithfidh an :attribute a bheith ina shlánuimhir.',
    'ip' => 'Caithfidh an :attribute a bheith ina sheoladh IP bailí.',
    'ipv4' => 'Caithfidh an :attribute a bheith ina sheoladh IPv4 bailí.',
    'ipv6' => 'Caithfidh an :attribute a bheith ina sheoladh IPv6 bailí.',
    'json' => 'Caithfidh an :attribute a bheith ina theaghrán JSON bailí.',
    'lt' => [
        'numeric' => 'Ní mór don :attribute a bheith níos lú ná :value.',
        'file' => 'Caithfidh an :attribute a bheith níos lú ná cilibheart :value.',
        'string' => 'Ní mór don :attribute a bheith níos lú ná carachtair :value.',
        'array' => 'Ní mór go mbeadh níos lú ná míreanna :value ag an :attribute.',
    ],
    'lte' => [
        'numeric' => 'Caithfidh an :attribute a bheith níos lú ná nó cothrom le :value.',
        'file' => 'Caithfidh an :attribute a bheith níos lú ná nó cothrom le cilibheart :value.',
        'string' => 'Caithfidh an :attribute a bheith níos lú ná nó cothrom le carachtair :value.',
        'array' => 'Ní mór nach mbeadh níos mó ná míreanna :value ag an :attribute.',
    ],
    'max' => [
        'numeric' => 'Ní fhéadfaidh an :attribute a bheith níos mó ná :max.',
        'file' => 'Ní fhéadfaidh an :attribute a bheith níos mó ná cilibheart :max.',
        'string' => 'Ní fhéadfaidh an :attribute a bheith níos mó ná carachtair :max.',
        'array' => 'Ní fhéadfaidh an :attribute níos mó ná míreanna :max.',
    ],
    'mimes' => 'Caithfidh an :attribute a bheith ina chomhad cineál: :values.',
    'mimetypes' => 'Caithfidh an :attribute a bheith ina chomhad cineál: :values.',
    'min' => [
        'numeric' => 'Caithfidh an :attribute a bheith ar a laghad :min.',
        'file' => 'Caithfidh an :attribute cilibheart :min ar a laghad.',
        'string' => 'Ní mór carachtair :min ar a laghad a bheith sa :attribute.',
        'array' => 'Ní mór go mbeadh míreanna :min ar a laghad ag an :attribute.',
    ],
    'not_in' => 'Tá an :attribute roghnaithe neamhbhailí.',
    'not_regex' => 'Tá an fhormáid :attribute neamhbhailí.',
    'numeric' => 'Caithfidh an :attribute a bheith ina uimhir.',
    'present' => 'Caithfidh an réimse :attribute a bheith i láthair.',
    'regex' => 'Tá an fhormáid :attribute neamhbhailí.',
    'required' => 'Tá gá le réimse :attribute.',
    'required_if' => 'Tá gá le réimse :attribute nuair a bhíonn :other :value.',
    'required_unless' => 'Tá gá le réimse :attribute mura bhfuil :other i :values.',
    'required_with' => 'Tá gá le réimse :attribute nuair a bhíonn :values i láthair.',
    'required_with_all' => 'Tá gá le réimse :attribute nuair a bhíonn :values i láthair.',
    'required_without' => 'Tá gá le réimse :attribute nuair nach bhfuil :values i láthair.',
    'required_without_all' => 'Tá gá le réimse :attribute nuair nach bhfuil aon cheann de :values i láthair.',
    'same' => 'Caithfidh an :attribute agus :other a mheaitseáil.',
    'size' => [
        'numeric' => 'Caithfidh an :attribute a bheith :size.',
        'file' => 'Caithfidh an :attribute cilibheart :size.',
        'string' => 'Ní mór carachtair :size a bheith sa :attribute.',
        'array' => 'Ní mór míreanna :size a bheith sa :attribute.',
    ],
    'string' => 'Caithfidh an :attribute a bheith ina sreang.',
    'timezone' => 'Ní mór don :attribute a bheith ina chrios bailí.',
    'unique' => 'Tá an :attribute tógtha cheana féin.',
    'uploaded' => 'Theip ar an :attribute a uaslódáil.',
    'url' => 'Tá an fhormáid :attribute neamhbhailí.',

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
            'rule-name' => 'saincheaptha-teachtaireacht',
        ],
        'g-recaptcha-response' => [
            'required' => 'Deimhnigh le do thoil nach róbat thú.',
            'captcha' => 'Earráid Captcha! bain triail eile as ar ball nó déan teagmháil le riarthóir an tsuímh.',
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



    'accepted_if' => 'Ní mór glacadh leis an réimse :tréith nuair a bhíonn :eile :luach.',
    'ascii' => 'Ní mór ach carachtair agus siombailí alfa-uimhriúla aon bheart a bheith sa réimse tréithe :.',
    'can' => 'Tá luach neamhúdaraithe sa réimse :tréith.',
    'contains' => 'Tá luach riachtanach in easnamh ar an réimse :tréith.',
    'current_password' => 'Tá an pasfhocal mícheart.',
    'date_equals' => 'Caithfidh an réimse tréithe a bheith cothrom le :dáta.',
    'decimal' => 'Caithfidh :ionad deachúlach a bheith sa réimse tréitheach.',
    'declined' => 'Ní mór an :réimse tréithe a dhiúltú.',
    'declined_if' => 'Ní mór an réimse :tréith a dhiúltú nuair is é :eile :luach.',
    'doesnt_end_with' => 'Níor cheart go gcríochnódh réimse na tréithe le ceann amháin díobh seo a leanas: :luachanna.',
    'doesnt_start_with' => 'Níor cheart go dtosódh réimse na tréithe : le ceann amháin díobh seo a leanas: :values.',
    'ends_with' => 'Ní mór go gcríochnódh réimse na tréithe le ceann amháin díobh seo a leanas: :luachanna.',
    'enum' => 'Tá an :tréith roghnaithe neamhbhailí.',
    'extensions' => 'Caithfidh ceann de na síntí seo a leanas a bheith sa réimse :tréithe: :values.',
    'hex_color' => 'Caithfidh dath heicsidheachúil bailí a bheith sa réimse :tréith.',
    'list' => 'Ní mór liosta a bheith sa réimse tréithe.',
    'lowercase' => 'Caithfidh an réimse tréithe a bheith ina chás íochtair.',
    'mac_address' => 'Caithfidh an réimse :tréithe a bheith ina sheoladh MAC bailí.',
    'max_digits' => 'Ní fhéadfaidh níos mó ná :uasdigit a bheith sa réimse :tréithe.',
    'min_digits' => 'Caithfidh :mindigit ar a laghad a bheith sa réimse :tréith.',
    'missing' => 'Caithfidh an réimse :tréith a bheith in easnamh.',
    'missing_if' => 'Caithfidh an réimse :tréith a bheith in easnamh nuair is é :eile :luach.',
    'missing_unless' => 'Caithfidh an réimse :tréith a bheith in easnamh mura :eile: luach.',
    'missing_with' => 'Caithfidh an réimse :tréithe a bheith in easnamh nuair a bhíonn :luachanna i láthair.',
    'missing_with_all' => 'Caithfidh an réimse :tréith a bheith in easnamh nuair a bhíonn :luachanna i láthair.',
    'multiple_of' => 'Caithfidh an réimse :tréithe a bheith ina iolraí de :luach.',
    'password' => [
        'letters' => 'Caithfidh litir amháin ar a laghad a bheith sa réimse :tréith.',
        'mixed' => 'Caithfidh ar a laghad litir chás uachtair agus litir bheag amháin a bheith sa réimse tréithe :.',
        'numbers' => 'Caithfidh uimhir amháin ar a laghad a bheith sa réimse :tréith.',
        'symbols' => 'Caithfidh siombail amháin ar a laghad a bheith sa réimse :tréith.',
        'uncompromised' => 'Tá an :tréith tugtha le feiceáil i sceitheadh sonraí. Roghnaigh :tréith eile.',
    ],
    'present_if' => 'Caithfidh an réimse tréithe :a bheith i láthair nuair is :eile :luach.',
    'present_unless' => 'Caithfidh an réimse :tréith a bheith i láthair mura :eile: luach.',
    'present_with' => 'Caithfidh an réimse tréithe a bheith i láthair nuair a bhíonn :luachanna i láthair.',
    'present_with_all' => 'Caithfidh an réimse tréithe a bheith i láthair nuair a bhíonn :luachanna i láthair.',
    'prohibited' => 'Tá an réimse tréithe toirmiscthe.',
    'prohibited_if' => 'Tá an réimse tréithe toirmiscthe nuair is :eile :luach.',
    'prohibited_unless' => 'Tá an réimse tréithe toirmiscthe mura bhfuil :eile i :luachanna.',
    'prohibits' => 'Cuireann an réimse tréithe cosc ar dhaoine eile a bheith i láthair.',
    'required_array_keys' => 'Caithfidh iontrálacha le haghaidh: :luachanna a bheith sa réimse :tréithe.',
    'required_if_accepted' => 'Teastaíonn an réimse tréithe nuair a ghlactar le :eile.',
    'required_if_declined' => 'Teastaíonn an réimse tréithe nuair a dhiúltaítear :eile.',
    'starts_with' => 'Caithfidh an réimse tréithe : tosú le ceann amháin díobh seo a leanas: :luachanna.',
    'uppercase' => 'Caithfidh an réimse tréithe a bheith ina chás uachtair.',
    'ulid' => 'Caithfidh an réimse :tréithe a bheith ina ULID bailí.',
    'uuid' => 'Caithfidh an réimse :tréithe a bheith ina UUID bailí.',
];
