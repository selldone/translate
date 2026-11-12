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

    'accepted' => 'Rhaid derbyn y :attribute.',
    'active_url' => 'Nid yw\'r :attribute yn URL dilys.',
    'after' => 'Rhaid i\'r :attribute fod yn ddyddiad ar ôl :date.',
    'after_or_equal' => 'Rhaid i\'r :attribute fod yn ddyddiad ar ôl neu\'n hafal i :date.',
    'alpha' => 'Gall y :attribute gynnwys llythyrau yn unig.',
    'alpha_dash' => 'Gall y :attribute gynnwys llythrennau, rhifau a llinellau toriad yn unig.',
    'alpha_num' => 'Gall y :attribute gynnwys llythrennau a rhifau yn unig.',
    'array' => 'Rhaid i\'r :attribute fod yn arae.',
    'before' => 'Rhaid i\'r :attribute fod yn ddyddiad cyn :date.',
    'before_or_equal' => 'Rhaid i\'r :attribute fod yn ddyddiad cyn neu\'n hafal i :date.',
    'between' => [
        'numeric' => 'Rhaid i\'r :attribute fod rhwng :min a :max.',
        'file' => 'Rhaid i\'r :attribute fod rhwng cilobeit :min a :max.',
        'string' => 'Rhaid i\'r :attribute fod rhwng nodau :min a :max.',
        'array' => 'Rhaid i\'r :attribute gael rhwng eitemau :min a :max.',
    ],
    'boolean' => 'Rhaid i faes :attribute fod yn wir neu\'n anwir.',
    'confirmed' => 'Nid yw\'r cadarnhad :attribute yn cyfateb.',
    'date' => 'Nid yw\'r :attribute yn ddyddiad dilys.',
    'date_format' => 'Nid yw\'r :attribute yn cyfateb i\'r fformat :format.',
    'different' => 'Rhaid i\'r :attribute a :other fod yn wahanol.',
    'digits' => 'Rhaid i\'r :attribute fod yn ddigidau :digits.',
    'digits_between' => 'Rhaid i\'r :attribute fod rhwng digidau :min a :max.',
    'dimensions' => 'Mae gan y :attribute ddimensiynau delwedd annilys.',
    'distinct' => 'Mae gan faes :attribute werth dyblyg.',
    'email' => 'Rhaid i\'r :attribute fod yn gyfeiriad e-bost dilys.',
    'exists' => 'Mae\'r :attribute a ddewiswyd yn annilys.',
    'file' => 'Rhaid i\'r :attribute fod yn ffeil.',
    'filled' => 'Rhaid i\'r maes :attribute gael gwerth.',
    'gt' => [
        'numeric' => 'Rhaid i\'r :attribute fod yn fwy na :value.',
        'file' => 'Rhaid i\'r :attribute fod yn fwy na cilobeit :value.',
        'string' => 'Rhaid i\'r :attribute fod yn fwy na nodau :value.',
        'array' => 'Rhaid i\'r :attribute gael mwy nag eitemau :value.',
    ],
    'gte' => [
        'numeric' => 'Rhaid i\'r :attribute fod yn fwy neu\'n hafal i :value.',
        'file' => 'Rhaid i\'r :attribute fod yn fwy na neu\'n hafal i kilobytes :value.',
        'string' => 'Rhaid i\'r :attribute fod yn fwy na neu\'n hafal i nodau :value.',
        'array' => 'Rhaid i\'r :attribute gael eitemau :value neu fwy.',
    ],
    'image' => 'Rhaid i\'r :attribute fod yn ddelwedd.',
    'in' => 'Mae\'r :attribute a ddewiswyd yn annilys.',
    'in_array' => 'Nid yw\'r maes :attribute yn bodoli yn :other.',
    'integer' => 'Rhaid i\'r :attribute fod yn gyfanrif.',
    'ip' => 'Rhaid i\'r :attribute fod yn gyfeiriad IP dilys.',
    'ipv4' => 'Rhaid i\'r :attribute fod yn gyfeiriad IPv4 dilys.',
    'ipv6' => 'Rhaid i\'r :attribute fod yn gyfeiriad IPv6 dilys.',
    'json' => 'Rhaid i\'r :attribute fod yn llinyn JSON dilys.',
    'lt' => [
        'numeric' => 'Rhaid i\'r :attribute fod yn llai na :value.',
        'file' => 'Rhaid i\'r :attribute fod yn llai na cilobeit :value.',
        'string' => 'Rhaid i\'r :attribute fod yn llai na nodau :value.',
        'array' => 'Rhaid i\'r :attribute gael llai nag eitemau :value.',
    ],
    'lte' => [
        'numeric' => 'Rhaid i\'r :attribute fod yn llai na neu\'n hafal i :value.',
        'file' => 'Rhaid i\'r :attribute fod yn llai na neu\'n hafal i kilobytes :value.',
        'string' => 'Rhaid i\'r :attribute fod yn llai na neu\'n hafal i nodau :value.',
        'array' => 'Ni ddylai\'r :attribute fod â mwy nag eitemau :value.',
    ],
    'max' => [
        'numeric' => 'Efallai na fydd y :attribute yn fwy na :max.',
        'file' => 'Efallai na fydd y :attribute yn fwy na cilobeit :max.',
        'string' => 'Efallai na fydd y :attribute yn fwy na nodau :max.',
        'array' => 'Efallai na fydd gan y :attribute fwy nag eitemau :max.',
    ],
    'mimes' => 'Rhaid i\'r :attribute fod yn ffeil o fath: :values.',
    'mimetypes' => 'Rhaid i\'r :attribute fod yn ffeil o fath: :values.',
    'min' => [
        'numeric' => 'Rhaid i\'r :attribute fod o leiaf :min.',
        'file' => 'Rhaid i\'r :attribute fod o leiaf :min kilobytes.',
        'string' => 'Rhaid i\'r :attribute fod o leiaf nodau :min.',
        'array' => 'Rhaid i\'r :attribute gael o leiaf eitemau :min.',
    ],
    'not_in' => 'Mae\'r :attribute a ddewiswyd yn annilys.',
    'not_regex' => 'Mae\'r fformat :attribute yn annilys.',
    'numeric' => 'Rhaid i\'r :attribute fod yn rhif.',
    'present' => 'Rhaid i\'r maes :attribute fod yn bresennol.',
    'regex' => 'Mae\'r fformat :attribute yn annilys.',
    'required' => 'Mae angen y maes :attribute.',
    'required_if' => 'Mae angen y maes :attribute pan fydd :other yn :value.',
    'required_unless' => 'Mae angen y maes :attribute oni bai bod :other yn :values.',
    'required_with' => 'Mae angen y maes :attribute pan fydd :values yn bresennol.',
    'required_with_all' => 'Mae angen y maes :attribute pan fydd :values yn bresennol.',
    'required_without' => 'Mae angen y maes :attribute pan nad yw :values yn bresennol.',
    'required_without_all' => 'Mae angen y maes :attribute pan nad oes unrhyw un o :values yn bresennol.',
    'same' => 'Rhaid i\'r :attribute a :other gyfateb.',
    'size' => [
        'numeric' => 'Rhaid i\'r :attribute fod yn :size.',
        'file' => 'Rhaid i\'r :attribute fod yn :size kilobytes.',
        'string' => 'Rhaid i\'r :attribute fod yn nodau :size.',
        'array' => 'Rhaid i\'r :attribute gynnwys eitemau :size.',
    ],
    'string' => 'Rhaid i\'r :attribute fod yn llinyn.',
    'timezone' => 'Rhaid i\'r :attribute fod yn barth dilys.',
    'unique' => 'Mae\'r :attribute eisoes wedi\'i gymryd.',
    'uploaded' => 'Methodd y :attribute ag uwchlwytho.',
    'url' => 'Mae\'r fformat :attribute yn annilys.',

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
            'rule-name' => 'arfer-neges',
        ],
        'g-recaptcha-response' => [
            'required' => 'Gwiriwch nad ydych yn robot.',
            'captcha' => 'Gwall Captcha! ceisiwch eto yn nes ymlaen neu cysylltwch â gweinyddwr y safle.',
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



    'accepted_if' => 'Rhaid derbyn y maes :priodoledd pan :arall yw :gwerth.',
    'ascii' => 'Rhaid i\'r maes :priodoledd gynnwys nodau a symbolau alffaniwmerig un-beit yn unig.',
    'can' => 'Mae maes :priodoledd yn cynnwys gwerth anawdurdodedig.',
    'contains' => 'Mae\'r maes priodoledd : ar goll o werth gofynnol.',
    'current_password' => 'Mae\'r cyfrinair yn anghywir.',
    'date_equals' => 'Rhaid i\'r maes priodoledd fod yn ddyddiad sy\'n hafal i :dyddiad.',
    'decimal' => 'Rhaid i\'r maes priodoledd gael :lleoedd degol degol.',
    'declined' => 'Rhaid gwrthod y maes priodoledd.',
    'declined_if' => 'Rhaid gwrthod y maes :priodoledd pan :arall yw :gwerth.',
    'doesnt_end_with' => 'Ni ddylai\'r maes priodoledd orffen gydag un o\'r canlynol: :gwerthoedd.',
    'doesnt_start_with' => 'Ni ddylai\'r maes priodoledd ddechrau gydag un o\'r canlynol: :gwerthoedd.',
    'ends_with' => 'Rhaid i\'r maes priodoledd ddod i ben gydag un o\'r canlynol: :gwerthoedd.',
    'enum' => 'Mae\'r priodoledd :yn annilys.',
    'extensions' => 'Rhaid i\'r maes priodoledd gynnwys un o\'r estyniadau canlynol: :values.',
    'hex_color' => 'Rhaid i\'r maes priodoledd fod yn lliw hecsadegol dilys.',
    'list' => 'Rhaid i\'r maes :priodoledd fod yn rhestr.',
    'lowercase' => 'Rhaid i\'r maes priodoledd fod yn llythrennau bach.',
    'mac_address' => 'Rhaid i\'r maes priodoledd fod yn gyfeiriad MAC dilys.',
    'max_digits' => 'Ni ddylai\'r maes priodoledd fod â mwy na :uchafswm o ddigidau.',
    'min_digits' => 'Rhaid i\'r maes priodoledd fod o leiaf :min ddigidau.',
    'missing' => 'Rhaid i\'r maes priodoledd : fod ar goll.',
    'missing_if' => 'Rhaid i\'r maes :priodoledd fod ar goll pan :arall yw :gwerth.',
    'missing_unless' => 'Rhaid i\'r maes :priodoledd fod ar goll oni bai :arall yw :gwerth.',
    'missing_with' => 'Rhaid i\'r maes :priodoledd fod ar goll pan fo :gwerthoedd yn bresennol.',
    'missing_with_all' => 'Rhaid i\'r maes :priodoledd fod ar goll pan fydd :gwerthoedd yn bresennol.',
    'multiple_of' => 'Rhaid i\'r maes :priodoledd fod yn lluosrif o :gwerth.',
    'password' => [
        'letters' => 'Rhaid i\'r maes :priodoledd gynnwys o leiaf un llythyren.',
        'mixed' => 'Rhaid i\'r maes priodoledd gynnwys o leiaf un llythyren fawr ac un llythyren fach.',
        'numbers' => 'Rhaid i\'r maes :priodoledd gynnwys o leiaf un rhif.',
        'symbols' => 'Rhaid i\'r maes :priodoledd gynnwys o leiaf un symbol.',
        'uncompromised' => 'Mae\'r priodoledd a roddwyd wedi ymddangos mewn gollyngiad data. Dewiswch :briodoledd gwahanol.',
    ],
    'present_if' => 'Rhaid i\'r maes :priodoledd fod yn bresennol pan :arall yw :gwerth.',
    'present_unless' => 'Rhaid i\'r maes :priodoledd fod yn bresennol oni bai :arall yw :gwerth.',
    'present_with' => 'Rhaid i\'r maes :priodoledd fod yn bresennol pan fo :gwerthoedd yn bresennol.',
    'present_with_all' => 'Rhaid i\'r maes :priodoledd fod yn bresennol pan fo :gwerthoedd yn bresennol.',
    'prohibited' => 'Mae\'r maes priodoledd wedi\'i wahardd.',
    'prohibited_if' => 'Gwaherddir y maes priodoledd pan :arall yw :gwerth.',
    'prohibited_unless' => 'Gwaherddir y maes priodoledd oni bai bod :arall mewn :gwerthoedd.',
    'prohibits' => 'Mae\'r maes priodoledd yn gwahardd eraill rhag bod yn bresennol.',
    'required_array_keys' => 'Rhaid i\'r maes :priodoledd gynnwys cofnodion ar gyfer: :values.',
    'required_if_accepted' => 'Mae angen y maes priodoledd pan fydd :arall yn cael ei dderbyn.',
    'required_if_declined' => 'Mae angen y maes priodoledd pan fydd :arall yn cael ei wrthod.',
    'starts_with' => 'Rhaid i\'r maes priodoledd ddechrau gydag un o\'r canlynol: :gwerthoedd.',
    'uppercase' => 'Rhaid i\'r maes priodoledd fod yn briflythrennau.',
    'ulid' => 'Rhaid i\'r maes priodoledd fod yn ULID dilys.',
    'uuid' => 'Rhaid i\'r maes priodoledd : fod yn UUID dilys.',
];
