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

    'accepted' => ':attribute igomba kwemerwa.',
    'active_url' => ':attribute ntabwo URL yemewe.',
    'after' => ':attribute igomba kuba itariki nyuma ya :date.',
    'after_or_equal' => ':attribute igomba kuba itariki nyuma cyangwa ingana na :date.',
    'alpha' => ':attribute irashobora kuba irimo inyuguti gusa.',
    'alpha_dash' => ':attribute irashobora kuba irimo inyuguti, imibare, hamwe nuduce.',
    'alpha_num' => ':attribute irashobora kuba irimo inyuguti nimibare gusa.',
    'array' => ':attribute igomba kuba umurongo.',
    'before' => ':attribute igomba kuba itariki mbere ya :date.',
    'before_or_equal' => ':attribute igomba kuba itariki mbere cyangwa ingana na :date.',
    'between' => [
        'numeric' => ':attribute igomba kuba hagati ya :min na :max.',
        'file' => ':attribute igomba kuba hagati ya :min na :max kilobytes.',
        'string' => ':attribute igomba kuba hagati ya :min na :max.',
        'array' => ':attribute igomba kugira hagati ya :min na :max.',
    ],
    'boolean' => 'Umwanya wa :attribute ugomba kuba ukuri cyangwa ibinyoma.',
    'confirmed' => 'Kwemeza :attribute ntabwo bihuye.',
    'date' => ':attribute ntabwo ari itariki yemewe.',
    'date_format' => ':attribute ntabwo ihuye nimiterere :format.',
    'different' => ':attribute na :other bigomba kuba bitandukanye.',
    'digits' => ':attribute igomba kuba :digits.',
    'digits_between' => ':attribute igomba kuba hagati ya :min na :max.',
    'dimensions' => ':attribute ifite ibipimo by\'ishusho bitemewe.',
    'distinct' => 'Umwanya wa :attribute ufite agaciro kabiri.',
    'email' => ':attribute igomba kuba aderesi imeri yemewe.',
    'exists' => 'Byahiswemo :attribute bitemewe.',
    'file' => ':attribute igomba kuba dosiye.',
    'filled' => 'Umwanya wa :attribute ugomba kugira agaciro.',
    'gt' => [
        'numeric' => ':attribute igomba kuba irenze :value.',
        'file' => ':attribute igomba kuba irenze :value kilobytes.',
        'string' => ':attribute igomba kuba irenze inyuguti za :value.',
        'array' => ':attribute igomba kuba ifite ibintu birenze :value.',
    ],
    'gte' => [
        'numeric' => ':attribute igomba kuba irenze cyangwa ingana :value.',
        'file' => ':attribute igomba kuba irenze cyangwa ingana na :value kilobytes.',
        'string' => ':attribute igomba kuba irenze cyangwa ingana :value.',
        'array' => ':attribute igomba kugira :value ibintu cyangwa byinshi.',
    ],
    'image' => ':attribute igomba kuba ishusho.',
    'in' => 'Byahiswemo :attribute bitemewe.',
    'in_array' => 'Umwanya wa :attribute ntubaho muri :other.',
    'integer' => ':attribute igomba kuba integer.',
    'ip' => ':attribute igomba kuba aderesi ya IP.',
    'ipv4' => ':attribute igomba kuba aderesi ya IPv4 yemewe.',
    'ipv6' => ':attribute igomba kuba aderesi ya IPv6 yemewe.',
    'json' => ':attribute igomba kuba umugozi wa JSON wemewe.',
    'lt' => [
        'numeric' => ':attribute igomba kuba munsi ya :value.',
        'file' => ':attribute igomba kuba munsi ya :value kilobytes.',
        'string' => ':attribute igomba kuba munsi yinyuguti za :value.',
        'array' => ':attribute igomba kuba ifite ibintu bitarenze :value.',
    ],
    'lte' => [
        'numeric' => ':attribute igomba kuba munsi cyangwa ingana :value.',
        'file' => ':attribute igomba kuba munsi cyangwa ingana na :value kilobytes.',
        'string' => ':attribute igomba kuba munsi cyangwa ingana na :value.',
        'array' => ':attribute ntigomba kugira ibintu birenze :value.',
    ],
    'max' => [
        'numeric' => ':attribute ntishobora kuba irenze :max.',
        'file' => ':attribute ntishobora kurenza :max kilobytes.',
        'string' => ':attribute ntishobora kuba irenze inyuguti za :max.',
        'array' => ':attribute ntishobora kuba ifite ibintu birenze :max.',
    ],
    'mimes' => ':attribute igomba kuba dosiye yubwoko: :values.',
    'mimetypes' => ':attribute igomba kuba dosiye yubwoko: :values.',
    'min' => [
        'numeric' => ':attribute igomba kuba nibura :min.',
        'file' => ':attribute igomba kuba byibura :min kilobytes.',
        'string' => ':attribute igomba kuba byibura inyuguti za :min.',
        'array' => ':attribute igomba kuba ifite byibura :min.',
    ],
    'not_in' => 'Byahiswemo :attribute bitemewe.',
    'not_regex' => 'Imiterere ya :attribute ntabwo yemewe.',
    'numeric' => ':attribute igomba kuba umubare.',
    'present' => 'Umwanya wa :attribute ugomba kuba uhari.',
    'regex' => 'Imiterere ya :attribute ntabwo yemewe.',
    'required' => 'Umwanya wa :attribute urakenewe.',
    'required_if' => 'Umwanya wa :attribute urasabwa mugihe :other ari :value.',
    'required_unless' => 'Umwanya wa :attribute urakenewe keretse :other iri muri :values.',
    'required_with' => 'Umwanya wa :attribute urakenewe mugihe :values ihari.',
    'required_with_all' => 'Umwanya wa :attribute urakenewe mugihe :values ihari.',
    'required_without' => 'Umwanya wa :attribute urakenewe mugihe :values idahari.',
    'required_without_all' => 'Umwanya wa :attribute urakenewe mugihe ntanumwe muri :values uhari.',
    'same' => ':attribute na :other bigomba guhura.',
    'size' => [
        'numeric' => ':attribute igomba kuba :size.',
        'file' => ':attribute igomba kuba :size kilobytes.',
        'string' => ':attribute igomba kuba inyuguti za :size.',
        'array' => ':attribute igomba kuba irimo :size.',
    ],
    'string' => ':attribute igomba kuba umugozi.',
    'timezone' => ':attribute igomba kuba akarere kemewe.',
    'unique' => ':attribute yamaze gufatwa.',
    'uploaded' => ':attribute yananiwe kohereza.',
    'url' => 'Imiterere ya :attribute ntabwo yemewe.',

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
            'rule-name' => 'ubutumwa-bwihariye',
        ],
        'g-recaptcha-response' => [
            'required' => 'Nyamuneka reba neza ko utari robot.',
            'captcha' => 'Ikosa rya Captcha! gerageza nanone nyuma cyangwa kuvugana numuyobozi wurubuga.',
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



    'accepted_if' => 'Ikiranga: Ikibanza kigomba kwemerwa iyo: ibindi ni: agaciro.',
    'ascii' => ': Ikiranga umurima ugomba kuba urimo gusa-byte inyuguti ninyuguti.',
    'can' => ': Ikiranga umurima urimo agaciro katemewe.',
    'contains' => ':: Ikiranga umurima wabuze agaciro gasabwa.',
    'current_password' => 'Ijambobanga ntabwo ari ryo.',
    'date_equals' => ': Ikiranga umurima ugomba kuba itariki ingana na: itariki.',
    'decimal' => ': Ikiranga umurima ugomba kugira: icumi icumi.',
    'declined' => ': Ikiranga umurima ugomba kwangwa.',
    'declined_if' => ': Ikiranga umurima ugomba kwangwa iyo: ibindi ni: agaciro.',
    'doesnt_end_with' => ': Ikiranga umurima ntigomba kurangirana numwe muribi bikurikira :: indangagaciro.',
    'doesnt_start_with' => ': Ikiranga umurima ntigomba gutangirana numwe muribi bikurikira :: indangagaciro.',
    'ends_with' => ': Ikiranga umurima ugomba kurangirana numwe muribi bikurikira :: indangagaciro.',
    'enum' => 'Byahiswemo: ikiranga nticyemewe.',
    'extensions' => ': Ikiranga ikibanza kigomba kugira kimwe mubikurikira :: indangagaciro.',
    'hex_color' => ': Ikiranga umurima ugomba kuba ibara ryemewe.',
    'list' => ': Ikiranga umurima ugomba kuba urutonde.',
    'lowercase' => ': Ikiranga umurima ugomba kuba muto.',
    'mac_address' => ':: Ikiranga umurima ugomba kuba adresse ya MAC yemewe.',
    'max_digits' => ': Ikiranga umurima ntigomba kugira ibirenze: imibare myinshi.',
    'min_digits' => ':: Ikiranga umurima ugomba kugira byibuze: min.',
    'missing' => ': Ikiranga umurima ugomba kubura.',
    'missing_if' => ': Ikiranga umurima ugomba kubura iyo: ibindi ni: agaciro.',
    'missing_unless' => ': Ikiranga umurima ugomba kubura keretse: ibindi ni: agaciro.',
    'missing_with' => ': Ikiranga umurima ugomba kubura iyo: indangagaciro zirahari.',
    'missing_with_all' => ': Ikiranga umurima ugomba kubura iyo: indangagaciro zirahari.',
    'multiple_of' => ': Ikiranga umurima ugomba kuba inshuro nyinshi: agaciro.',
    'password' => [
        'letters' => ': Ikiranga umurima ugomba kuba ufite byibuze inyuguti imwe.',
        'mixed' => ': Ikiranga umurima ugomba kuba ufite byibuze inyuguti nkuru ninyuguti nto.',
        'numbers' => ': Ikiranga umurima ugomba kuba ufite byibuze umubare umwe.',
        'symbols' => ': Ikiranga umurima ugomba kuba ufite byibuze ikimenyetso kimwe.',
        'uncompromised' => 'Yatanzwe: ikiranga yagaragaye mumakuru yamenetse. Nyamuneka hitamo ikindi: ikiranga.',
    ],
    'present_if' => ': Ikiranga umurima ugomba kuba uhari iyo: ibindi ni: agaciro.',
    'present_unless' => ': Ikiranga umurima ugomba kuba uhari keretse: ibindi ni: agaciro.',
    'present_with' => ': Ikiranga umurima ugomba kuba uhari iyo: indangagaciro zirahari.',
    'present_with_all' => ': Ikiranga umurima ugomba kuba uhari iyo: indangagaciro zirahari.',
    'prohibited' => ': Ikiranga ikibanza kirabujijwe.',
    'prohibited_if' => ':: Ikiranga umurima kirabujijwe iyo: ibindi ni: agaciro.',
    'prohibited_unless' => ':: Ikiranga umurima kirabujijwe keretse: ibindi biri muri: indangagaciro.',
    'prohibits' => ':: Ikiranga umurima kibuza: ibindi kuba bihari.',
    'required_array_keys' => ': Ikiranga umurima ugomba kuba urimo ibyanditswe :: indangagaciro.',
    'required_if_accepted' => ': Ikiranga ikibanza gisabwa iyo: ibindi byemewe.',
    'required_if_declined' => ': Ikiranga umurima urasabwa iyo: ibindi byanze.',
    'starts_with' => ': Ikiranga umurima ugomba gutangirana numwe muribi bikurikira: indangagaciro.',
    'uppercase' => ': Ikiranga umurima ugomba kuba inyuguti nkuru.',
    'ulid' => ': Ikiranga umurima ugomba kuba ULID yemewe.',
    'uuid' => ': Ikiranga umurima ugomba kuba UUID yemewe.',
];
