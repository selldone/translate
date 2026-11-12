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

    'accepted' => ':attribute lazima ukubaliwe.',
    'active_url' => ':attribute si URL halali.',
    'after' => ':attribute lazima iwe tarehe baada ya :date.',
    'after_or_equal' => ':attribute lazima iwe tarehe baada au sawa na :date.',
    'alpha' => ':attribute inaweza kuwa na herufi pekee.',
    'alpha_dash' => ':attribute inaweza kuwa na herufi, nambari na deshi pekee.',
    'alpha_num' => ':attribute inaweza kuwa na herufi na nambari pekee.',
    'array' => ':attribute lazima iwe safu.',
    'before' => ':attribute lazima iwe tarehe kabla ya :date.',
    'before_or_equal' => ':attribute lazima iwe tarehe kabla au sawa na :date.',
    'between' => [
        'numeric' => ':attribute lazima iwe kati ya :min na :max.',
        'file' => ':attribute lazima iwe kati ya :min na :max kilobaiti.',
        'string' => ':attribute lazima iwe kati ya vibambo vya :min na :max.',
        'array' => ':attribute lazima iwe na kati ya vipengee vya :min na :max.',
    ],
    'boolean' => 'Sehemu ya :attribute lazima iwe kweli au si kweli.',
    'confirmed' => 'Uthibitishaji wa :attribute haulingani.',
    'date' => ':attribute sio tarehe halali.',
    'date_format' => ':attribute hailingani na umbizo la :format.',
    'different' => ':attribute na :other lazima ziwe tofauti.',
    'digits' => ':attribute lazima iwe tarakimu za :digits.',
    'digits_between' => ':attribute lazima iwe kati ya tarakimu za :min na :max.',
    'dimensions' => ':attribute ina vipimo batili vya picha.',
    'distinct' => 'Sehemu ya :attribute ina thamani iliyorudiwa.',
    'email' => ':attribute lazima iwe barua pepe halali.',
    'exists' => ':attribute iliyochaguliwa ni batili.',
    'file' => ':attribute lazima iwe faili.',
    'filled' => 'Sehemu ya :attribute lazima iwe na thamani.',
    'gt' => [
        'numeric' => ':attribute lazima iwe kubwa kuliko :value.',
        'file' => ':attribute lazima iwe kubwa kuliko :value kilobaiti.',
        'string' => ':attribute lazima iwe kubwa kuliko vibambo vya :value.',
        'array' => ':attribute lazima iwe na zaidi ya vipengee vya :value.',
    ],
    'gte' => [
        'numeric' => ':attribute lazima iwe kubwa kuliko au sawa na :value.',
        'file' => ':attribute lazima iwe kubwa kuliko au sawa na :value kilobaiti.',
        'string' => ':attribute lazima iwe kubwa kuliko au sawa na herufi za :value.',
        'array' => ':attribute lazima iwe na vipengee vya :value au zaidi.',
    ],
    'image' => ':attribute lazima iwe picha.',
    'in' => ':attribute iliyochaguliwa ni batili.',
    'in_array' => 'Sehemu ya :attribute haipo katika :other.',
    'integer' => ':attribute lazima iwe nambari kamili.',
    'ip' => ':attribute lazima iwe anwani halali ya IP.',
    'ipv4' => ':attribute lazima iwe anwani halali ya IPv4.',
    'ipv6' => ':attribute lazima iwe anwani halali ya IPv6.',
    'json' => ':attribute lazima iwe mfuatano halali wa JSON.',
    'lt' => [
        'numeric' => ':attribute lazima iwe chini ya :value.',
        'file' => ':attribute lazima iwe chini ya kilobaiti za :value.',
        'string' => ':attribute lazima iwe chini ya vibambo vya :value.',
        'array' => ':attribute lazima iwe na chini ya vipengee vya :value.',
    ],
    'lte' => [
        'numeric' => ':attribute lazima iwe chini ya au sawa na :value.',
        'file' => ':attribute lazima iwe chini ya au sawa na kilobaiti za :value.',
        'string' => ':attribute lazima iwe chini ya au sawa na vibambo vya :value.',
        'array' => ':attribute lazima isiwe na zaidi ya vipengee vya :value.',
    ],
    'max' => [
        'numeric' => ':attribute inaweza isiwe kubwa kuliko :max.',
        'file' => ':attribute inaweza kuwa kubwa kuliko :max kilobaiti.',
        'string' => ':attribute inaweza kuwa kubwa kuliko vibambo vya :max.',
        'array' => ':attribute inaweza isiwe na zaidi ya vipengee vya :max.',
    ],
    'mimes' => ':attribute lazima iwe faili ya aina: :values.',
    'mimetypes' => ':attribute lazima iwe faili ya aina: :values.',
    'min' => [
        'numeric' => ':attribute lazima iwe angalau :min.',
        'file' => ':attribute lazima iwe angalau kilobaiti za :min.',
        'string' => ':attribute lazima iwe angalau vibambo :min.',
        'array' => ':attribute lazima iwe na angalau vipengee vya :min.',
    ],
    'not_in' => ':attribute iliyochaguliwa ni batili.',
    'not_regex' => 'Umbizo la :attribute ni batili.',
    'numeric' => ':attribute lazima iwe nambari.',
    'present' => 'Sehemu ya :attribute lazima iwepo.',
    'regex' => 'Umbizo la :attribute ni batili.',
    'required' => 'Sehemu ya :attribute inahitajika.',
    'required_if' => 'Sehemu ya :attribute inahitajika wakati :other ni :value.',
    'required_unless' => 'Sehemu ya :attribute inahitajika isipokuwa :other iko katika :values.',
    'required_with' => 'Sehemu ya :attribute inahitajika wakati :values ipo.',
    'required_with_all' => 'Sehemu ya :attribute inahitajika wakati :values ipo.',
    'required_without' => 'Sehemu ya :attribute inahitajika wakati :values haipo.',
    'required_without_all' => 'Sehemu ya :attribute inahitajika wakati hakuna :values yoyote iliyopo.',
    'same' => ':attribute na :other lazima zilingane.',
    'size' => [
        'numeric' => ':attribute lazima iwe :size.',
        'file' => ':attribute lazima iwe :size kilobaiti.',
        'string' => ':attribute lazima iwe na vibambo vya :size.',
        'array' => ':attribute lazima iwe na vipengee vya :size.',
    ],
    'string' => ':attribute lazima iwe kamba.',
    'timezone' => ':attribute lazima iwe eneo halali.',
    'unique' => ':attribute tayari imechukuliwa.',
    'uploaded' => ':attribute imeshindwa kupakia.',
    'url' => 'Umbizo la :attribute ni batili.',

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
            'rule-name' => 'ujumbe maalum',
        ],
        'g-recaptcha-response' => [
            'required' => 'Tafadhali thibitisha kuwa wewe si roboti.',
            'captcha' => 'Hitilafu ya Captcha! jaribu tena baadaye au wasiliana na msimamizi wa tovuti.',
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



    'accepted_if' => 'Sehemu ya :attribute lazima ukubaliwe wakati :other ni :value.',
    'ascii' => 'Sehemu ya :attribute lazima iwe na herufi na alama za alphanumeric za baiti moja pekee.',
    'can' => 'Sehemu ya :attribute ina thamani isiyoidhinishwa.',
    'contains' => 'Sehemu ya :attribute inakosa thamani inayohitajika.',
    'current_password' => 'Nenosiri si sahihi.',
    'date_equals' => 'Sehemu ya :attribute lazima iwe tarehe sawa na :date.',
    'decimal' => 'Sehemu ya :attribute lazima iwe na :desimal desimali.',
    'declined' => 'Sehemu ya :sifa lazima ikataliwe.',
    'declined_if' => 'Sehemu ya :attribute lazima ikataliwe wakati :other ni :value.',
    'doesnt_end_with' => 'Sehemu ya :attribute lazima isiishie na mojawapo ya yafuatayo: :values.',
    'doesnt_start_with' => 'Sehemu ya :attribute lazima ianze na mojawapo ya yafuatayo: :values.',
    'ends_with' => 'Sehemu ya :attribute lazima imalizike na mojawapo ya yafuatayo: :values.',
    'enum' => ':attribute iliyochaguliwa ni batili.',
    'extensions' => 'Sehemu ya :attribute lazima iwe na mojawapo ya viendelezi vifuatavyo: :values.',
    'hex_color' => 'Sehemu ya :sifa lazima iwe rangi halali ya heksadesimali.',
    'list' => 'Sehemu ya :attribute lazima iwe orodha.',
    'lowercase' => ':uga wa sifa lazima uwe na herufi ndogo.',
    'mac_address' => 'Sehemu ya :sifa lazima iwe anwani halali ya MAC.',
    'max_digits' => 'Sehemu ya :attribute lazima isiwe na zaidi ya tarakimu :max.',
    'min_digits' => 'Sehemu ya :attribute lazima iwe na angalau tarakimu :min.',
    'missing' => 'Sehemu ya :attribute lazima ikosekana.',
    'missing_if' => 'Sehemu ya :attribute lazima ikosekana wakati :other ni :value.',
    'missing_unless' => 'Sehemu ya :attribute lazima ikose isipokuwa :other iwe :value.',
    'missing_with' => 'Sehemu ya :attribute lazima ikosekana wakati :values ipo.',
    'missing_with_all' => 'Sehemu ya :attribute lazima ikosekana wakati :values zipo.',
    'multiple_of' => 'Sehemu ya :attribute lazima iwe mseto wa :value.',
    'password' => [
        'letters' => 'Sehemu ya :sifa lazima iwe na angalau herufi moja.',
        'mixed' => 'Sehemu ya :sifa lazima iwe na angalau herufi kubwa moja na herufi ndogo moja.',
        'numbers' => 'Sehemu ya :sifa lazima iwe na angalau nambari moja.',
        'symbols' => 'Sehemu ya :sifa lazima iwe na angalau alama moja.',
        'uncompromised' => ':attribute iliyotolewa imeonekana katika uvujaji wa data. Tafadhali chagua :sifa tofauti.',
    ],
    'present_if' => 'Sehemu ya :attribute lazima iwepo wakati :other ni :value.',
    'present_unless' => 'Sehemu ya :attribute lazima iwepo isipokuwa :other ni :value.',
    'present_with' => 'Sehemu ya :attribute lazima iwepo wakati :values ipo.',
    'present_with_all' => 'Sehemu ya :attribute lazima iwepo wakati :values zipo.',
    'prohibited' => 'Sehemu ya :attribute hairuhusiwi.',
    'prohibited_if' => 'Sehemu ya :attribute hairuhusiwi wakati :other ni :value.',
    'prohibited_unless' => 'Sehemu ya :attribute hairuhusiwi isipokuwa :other iko katika :values.',
    'prohibits' => 'Sehemu ya :attribute inakataza :other kuwepo.',
    'required_array_keys' => 'Sehemu ya :attribute lazima iwe na maingizo ya: :values.',
    'required_if_accepted' => 'Sehemu ya :attribute inahitajika wakati :other inakubaliwa.',
    'required_if_declined' => 'Sehemu ya :attribute inahitajika wakati :other imekataliwa.',
    'starts_with' => 'Sehemu ya :attribute lazima ianze na mojawapo ya yafuatayo: :values.',
    'uppercase' => 'Sehemu ya :attribute lazima iwe herufi kubwa.',
    'ulid' => 'Sehemu ya :sifa lazima iwe ULID halali.',
    'uuid' => 'Sehemu ya :attribute lazima iwe UUID halali.',
];
