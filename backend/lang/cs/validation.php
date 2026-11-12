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

    'accepted' => 'Musí být přijat :attribute.',
    'active_url' => ':attribute není platná adresa URL.',
    'after' => ':attribute musí být datum po :date.',
    'after_or_equal' => ':attribute musí být datum po nebo rovné :date.',
    'alpha' => ':attribute může obsahovat pouze písmena.',
    'alpha_dash' => 'Atribut :attribute může obsahovat pouze písmena, čísla a pomlčky.',
    'alpha_num' => ':attribute může obsahovat pouze písmena a čísla.',
    'array' => ':attribute musí být pole.',
    'before' => ':attribute musí být datum před :date.',
    'before_or_equal' => ':attribute musí být datum před nebo rovné :date.',
    'between' => [
        'numeric' => ':attribute musí být mezi :min a :max.',
        'file' => 'Atribut :attribute musí být mezi :min a :max kilobajty.',
        'string' => 'Atribut :attribute musí být mezi znaky :min a :max.',
        'array' => ':attribute musí mít položky mezi :min a :max.',
    ],
    'boolean' => 'Pole :attribute musí být true nebo false.',
    'confirmed' => 'Potvrzení :attribute se neshoduje.',
    'date' => ':attribute není platné datum.',
    'date_format' => ':attribute neodpovídá formátu :format.',
    'different' => ':attribute a :other se musí lišit.',
    'digits' => ':attribute musí být :digits číslice.',
    'digits_between' => ':attribute musí být mezi :min a :max číslic.',
    'dimensions' => ':attribute má neplatné rozměry obrázku.',
    'distinct' => 'Pole :attribute má duplicitní hodnotu.',
    'email' => ':attribute musí být platná e-mailová adresa.',
    'exists' => 'Vybraný atribut :attribute je neplatný.',
    'file' => ':attribute musí být soubor.',
    'filled' => 'Pole :attribute musí mít hodnotu.',
    'gt' => [
        'numeric' => 'Atribut :attribute musí být větší než :value.',
        'file' => 'Atribut :attribute musí být větší než :value kilobajtů.',
        'string' => 'Atribut :attribute musí být větší než znaků :value.',
        'array' => ':attribute musí mít více než :value položek.',
    ],
    'gte' => [
        'numeric' => 'Atribut :attribute musí být větší nebo roven :value.',
        'file' => 'Atribut :attribute musí být větší nebo roven :value kilobajtů.',
        'string' => ':attribute musí být větší nebo roven :value znakům.',
        'array' => ':attribute musí mít položky :value nebo více.',
    ],
    'image' => ':attribute musí být obrázek.',
    'in' => 'Vybraný atribut :attribute je neplatný.',
    'in_array' => 'Pole :attribute v :other neexistuje.',
    'integer' => ':attribute musí být celé číslo.',
    'ip' => ':attribute musí být platná IP adresa.',
    'ipv4' => ':attribute musí být platná adresa IPv4.',
    'ipv6' => ':attribute musí být platná adresa IPv6.',
    'json' => ':attribute musí být platný řetězec JSON.',
    'lt' => [
        'numeric' => 'Atribut :attribute musí být menší než :value.',
        'file' => ':attribute musí být menší než :value kilobajtů.',
        'string' => ':attribute musí být menší než :value znaků.',
        'array' => ':attribute musí mít méně než :value položek.',
    ],
    'lte' => [
        'numeric' => 'Atribut :attribute musí být menší nebo roven :value.',
        'file' => 'Atribut :attribute musí být menší nebo roven :value kilobajtů.',
        'string' => ':attribute musí být menší nebo roven :value znakům.',
        'array' => ':attribute nesmí mít více než :value položek.',
    ],
    'max' => [
        'numeric' => ':attribute nesmí být větší než :max.',
        'file' => ':attribute nesmí být větší než :max kilobajtů.',
        'string' => ':attribute nesmí být větší než :max znaků.',
        'array' => ':attribute nesmí mít více než :max položek.',
    ],
    'mimes' => ':attribute musí být soubor typu: :values.',
    'mimetypes' => ':attribute musí být soubor typu: :values.',
    'min' => [
        'numeric' => ':attribute musí být alespoň :min.',
        'file' => ':attribute musí mít alespoň :min kilobajtů.',
        'string' => ':attribute musí obsahovat alespoň :min znaků.',
        'array' => ':attribute musí mít alespoň :min položek.',
    ],
    'not_in' => 'Vybraný atribut :attribute je neplatný.',
    'not_regex' => 'Formát :attribute je neplatný.',
    'numeric' => ':attribute musí být číslo.',
    'present' => 'Pole :attribute musí být přítomno.',
    'regex' => 'Formát :attribute je neplatný.',
    'required' => 'Pole :attribute je povinné.',
    'required_if' => 'Pole :attribute je povinné, když :other je :value.',
    'required_unless' => 'Pole :attribute je povinné, pokud :other není v :values.',
    'required_with' => 'Pole :attribute je povinné, když je přítomen :values.',
    'required_with_all' => 'Pole :attribute je povinné, když je přítomen :values.',
    'required_without' => 'Pole :attribute je povinné, když :values není přítomen.',
    'required_without_all' => 'Pole :attribute je povinné, pokud není přítomno žádné z :values.',
    'same' => ':attribute a :other se musí shodovat.',
    'size' => [
        'numeric' => ':attribute musí být :size.',
        'file' => ':attribute musí být :size kilobajtů.',
        'string' => ':attribute musí obsahovat znaky :size.',
        'array' => ':attribute musí obsahovat položky :size.',
    ],
    'string' => ':attribute musí být řetězec.',
    'timezone' => ':attribute musí být platná zóna.',
    'unique' => ':attribute již bylo pořízeno.',
    'uploaded' => ':attribute se nepodařilo nahrát.',
    'url' => 'Formát :attribute je neplatný.',

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
            'rule-name' => 'vlastní zpráva',
        ],
        'g-recaptcha-response' => [
            'required' => 'Prosím ověřte, že nejste robot.',
            'captcha' => 'Chyba captcha! zkuste to znovu později nebo kontaktujte správce webu.',
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



    'accepted_if' => 'Pole :attribute musí být přijato, když :other je :value.',
    'ascii' => 'Pole :attribute musí obsahovat pouze jednobajtové alfanumerické znaky a symboly.',
    'can' => 'Pole :attribute obsahuje neautorizovanou hodnotu.',
    'contains' => 'V poli :attribute chybí povinná hodnota.',
    'current_password' => 'Heslo je nesprávné.',
    'date_equals' => 'Pole :attribute musí být datum rovné :date.',
    'decimal' => 'Pole :attribute musí mít :desetinná místa.',
    'declined' => 'Pole :attribute musí být odmítnuto.',
    'declined_if' => 'Pole :attribute musí být odmítnuto, když :other je :value.',
    'doesnt_end_with' => 'Pole :attribute nesmí končit jedním z následujících: :values.',
    'doesnt_start_with' => 'Pole :attribute nesmí začínat jedním z následujících: :values.',
    'ends_with' => 'Pole :attribute musí končit jednou z následujících: :values.',
    'enum' => 'Vybraný atribut :attribute je neplatný.',
    'extensions' => 'Pole :attribute musí mít jednu z následujících přípon: :values.',
    'hex_color' => 'Pole :attribute musí mít platnou hexadecimální barvu.',
    'list' => 'Pole :attribute musí být seznam.',
    'lowercase' => 'Pole :attribute musí být malé.',
    'mac_address' => 'Pole :attribute musí být platná adresa MAC.',
    'max_digits' => 'Pole :attribute nesmí mít více než :max číslic.',
    'min_digits' => 'Pole :attribute musí mít alespoň :min číslic.',
    'missing' => 'Pole :attribute musí chybět.',
    'missing_if' => 'Pole :attribute musí chybět, když :other je :value.',
    'missing_unless' => 'Pole :attribute musí chybět, pokud :other není :value.',
    'missing_with' => 'Pole :attribute musí chybět, když je přítomen :values.',
    'missing_with_all' => 'Pole :attribute musí chybět, pokud jsou přítomny hodnoty :values.',
    'multiple_of' => 'Pole :attribute musí být násobkem :value.',
    'password' => [
        'letters' => 'Pole :attribute musí obsahovat alespoň jedno písmeno.',
        'mixed' => 'Pole :attribute musí obsahovat alespoň jedno velké a jedno malé písmeno.',
        'numbers' => 'Pole :attribute musí obsahovat alespoň jedno číslo.',
        'symbols' => 'Pole :attribute musí obsahovat alespoň jeden symbol.',
        'uncompromised' => 'Daný atribut :attribute se objevil při úniku dat. Vyberte prosím jiný :attribute.',
    ],
    'present_if' => 'Pole :attribute musí být přítomno, když :other je :value.',
    'present_unless' => 'Pole :attribute musí být přítomno, pokud :other není :value.',
    'present_with' => 'Pole :attribute musí být přítomno, když je přítomen :values.',
    'present_with_all' => 'Pole :attribute musí být přítomno, když jsou přítomny :values.',
    'prohibited' => 'Pole :attribute je zakázáno.',
    'prohibited_if' => 'Pole :attribute je zakázáno, když :other je :value.',
    'prohibited_unless' => 'Pole :attribute je zakázáno, pokud :other není v :values.',
    'prohibits' => 'Pole :attribute zakazuje přítomnost :other.',
    'required_array_keys' => 'Pole :attribute musí obsahovat položky pro: :values.',
    'required_if_accepted' => 'Pole :attribute je povinné, když je akceptováno :other.',
    'required_if_declined' => 'Pole :attribute je povinné, když je :other odmítnuto.',
    'starts_with' => 'Pole :attribute musí začínat jedním z následujících: :values.',
    'uppercase' => 'Pole :attribute musí být velké.',
    'ulid' => 'Pole :attribute musí být platným ULID.',
    'uuid' => 'Pole :attribute musí být platné UUID.',
];
