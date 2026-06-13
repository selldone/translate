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

    'accepted' => ':attribute je treba sprejeti.',
    'active_url' => ':attribute ni veljaven URL.',
    'after' => ':attribute mora biti datum po :date.',
    'after_or_equal' => ':attribute mora biti datum po :date ali enak.',
    'alpha' => ':attribute lahko vsebuje samo črke.',
    'alpha_dash' => ':attribute lahko vsebuje le črke, številke in pomišljaje.',
    'alpha_num' => ':attribute lahko vsebuje samo črke in številke.',
    'array' => ':attribute mora biti niz.',
    'before' => ':attribute mora biti datum pred :date.',
    'before_or_equal' => ':attribute mora biti datum pred ali enak datumu :date.',
    'between' => [
        'numeric' => ':attribute mora biti med :min in :max.',
        'file' => ':attribute mora biti med :min in :max kilobajti.',
        'string' => ':attribute mora biti med znaki :min in :max.',
        'array' => ':attribute mora imeti med :min in :max elementa.',
    ],
    'boolean' => 'Polje :attribute mora biti true ali false.',
    'confirmed' => 'Potrditev :attribute se ne ujema.',
    'date' => ':attribute ni veljaven datum.',
    'date_format' => ':attribute se ne ujema z obliko :format.',
    'different' => ':attribute in :other morata biti različna.',
    'digits' => ':attribute mora biti :digits števk.',
    'digits_between' => ':attribute mora biti med :min in :max števkami.',
    'dimensions' => ':attribute ima neveljavne dimenzije slike.',
    'distinct' => 'Polje :attribute ima podvojeno vrednost.',
    'email' => ':attribute mora biti veljaven e-poštni naslov.',
    'exists' => 'Izbrani :attribute ni veljaven.',
    'file' => ':attribute mora biti datoteka.',
    'filled' => 'Polje :attribute mora imeti vrednost.',
    'gt' => [
        'numeric' => ':attribute mora biti večji od :value.',
        'file' => ':attribute mora biti večji od :value kilobajtov.',
        'string' => ':attribute mora biti večji od znakov :value.',
        'array' => ':attribute mora imeti več kot :value postavk.',
    ],
    'gte' => [
        'numeric' => ':attribute mora biti večji ali enak :value.',
        'file' => ':attribute mora biti večji ali enak :value kilobajtov.',
        'string' => 'Znaki :attribute morajo biti večji ali enaki znakom :value.',
        'array' => ':attribute mora imeti elemente :value ali več.',
    ],
    'image' => ':attribute mora biti slika.',
    'in' => 'Izbrani :attribute ni veljaven.',
    'in_array' => 'Polje :attribute ne obstaja v :other.',
    'integer' => ':attribute mora biti celo število.',
    'ip' => ':attribute mora biti veljaven naslov IP.',
    'ipv4' => ':attribute mora biti veljaven naslov IPv4.',
    'ipv6' => ':attribute mora biti veljaven naslov IPv6.',
    'json' => ':attribute mora biti veljaven niz JSON.',
    'lt' => [
        'numeric' => ':attribute mora biti manjši od :value.',
        'file' => ':attribute mora biti manjši od :value kilobajtov.',
        'string' => ':attribute mora vsebovati manj kot :value znakov.',
        'array' => ':attribute mora imeti manj kot :value elementov.',
    ],
    'lte' => [
        'numeric' => ':attribute mora biti manjši ali enak :value.',
        'file' => ':attribute mora biti manjši ali enak :value kilobajtov.',
        'string' => 'Znaki :attribute morajo biti manjši ali enaki znakom :value.',
        'array' => ':attribute ne sme imeti več kot :value elementov.',
    ],
    'max' => [
        'numeric' => ':attribute ne sme biti večji od :max.',
        'file' => ':attribute ne sme biti večji od :max kilobajtov.',
        'string' => ':attribute ne sme biti daljši od :max znakov.',
        'array' => ':attribute ne sme imeti več kot :max elementov.',
    ],
    'mimes' => ':attribute mora biti datoteka tipa: :values.',
    'mimetypes' => ':attribute mora biti datoteka tipa: :values.',
    'min' => [
        'numeric' => ':attribute mora biti vsaj :min.',
        'file' => ':attribute mora imeti najmanj :min kilobajtov.',
        'string' => ':attribute mora imeti najmanj :min znakov.',
        'array' => ':attribute mora imeti vsaj :min elementov.',
    ],
    'not_in' => 'Izbrani :attribute ni veljaven.',
    'not_regex' => 'Format :attribute je neveljaven.',
    'numeric' => ':attribute mora biti številka.',
    'present' => 'Polje :attribute mora biti prisotno.',
    'regex' => 'Format :attribute je neveljaven.',
    'required' => 'Polje :attribute je obvezno.',
    'required_if' => 'Polje :attribute je obvezno, kadar je :other :value.',
    'required_unless' => 'Polje :attribute je obvezno, razen če je :other v :values.',
    'required_with' => 'Polje :attribute je obvezno, če je prisotno :values.',
    'required_with_all' => 'Polje :attribute je obvezno, če je prisotno :values.',
    'required_without' => 'Polje :attribute je obvezno, če :values ni prisotno.',
    'required_without_all' => 'Polje :attribute je obvezno, če ni prisotna nobena od :values.',
    'same' => ':attribute in :other se morata ujemati.',
    'size' => [
        'numeric' => ':attribute mora biti :size.',
        'file' => ':attribute mora biti :size kilobajtov.',
        'string' => ':attribute mora vsebovati znake :size.',
        'array' => ':attribute mora vsebovati elemente :size.',
    ],
    'string' => ':attribute mora biti niz.',
    'timezone' => ':attribute mora biti veljavno območje.',
    'unique' => ':attribute je že zaseden.',
    'uploaded' => ':attribute ni bilo mogoče naložiti.',
    'url' => 'Format :attribute je neveljaven.',

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
            'rule-name' => 'sporočilo po meri',
        ],
        'g-recaptcha-response' => [
            'required' => 'Preverite, ali niste robot.',
            'captcha' => 'Captcha napaka! poskusite znova pozneje ali kontaktirajte skrbnika spletnega mesta.',
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



    'accepted_if' => 'Polje :attribute mora biti sprejeto, če je :other :value.',
    'ascii' => 'Polje :attribute mora vsebovati samo enobajtne alfanumerične znake in simbole.',
    'can' => 'Polje :attribute vsebuje nepooblaščeno vrednost.',
    'contains' => 'V polju :attribute manjka zahtevana vrednost.',
    'current_password' => 'Geslo ni pravilno.',
    'date_equals' => 'Polje :attribute mora biti datum enak :date.',
    'decimal' => 'Polje :attribute mora imeti :decimal decimalnih mest.',
    'declined' => 'Polje :attribute je treba zavrniti.',
    'declined_if' => 'Polje :attribute je treba zavrniti, če je :other :value.',
    'doesnt_end_with' => 'Polje :attribute se ne sme končati z enim od naslednjih: :values.',
    'doesnt_start_with' => 'Polje :attribute se ne sme začeti z enim od naslednjih: :values.',
    'ends_with' => 'Polje :attribute se mora končati z enim od naslednjega: :values.',
    'enum' => 'Izbrani :attribute ni veljaven.',
    'extensions' => 'Polje :attribute mora imeti eno od naslednjih končnic: :values.',
    'hex_color' => 'Polje :attribute mora biti veljavne šestnajstiške barve.',
    'list' => 'Polje :attribute mora biti seznam.',
    'lowercase' => 'Polje :attribute mora biti napisano z malimi črkami.',
    'mac_address' => 'Polje :attribute mora biti veljaven naslov MAC.',
    'max_digits' => 'Polje :attribute ne sme imeti več kot :max številk.',
    'min_digits' => 'Polje :attribute mora imeti vsaj :min števk.',
    'missing' => 'Polje :attribute mora manjkati.',
    'missing_if' => 'Polje :attribute mora manjkati, če je :other :value.',
    'missing_unless' => 'Polje :attribute mora manjkati, razen če je :other :value.',
    'missing_with' => 'Polje :attribute mora manjkati, če je prisotno :values.',
    'missing_with_all' => 'Polje :attribute mora manjkati, če so prisotne :values.',
    'multiple_of' => 'Polje :attribute mora biti večkratnik :value.',
    'password' => [
        'letters' => 'Polje :attribute mora vsebovati vsaj eno črko.',
        'mixed' => 'Polje :attribute mora vsebovati vsaj eno veliko in eno malo črko.',
        'numbers' => 'Polje :attribute mora vsebovati vsaj eno številko.',
        'symbols' => 'Polje :attribute mora vsebovati vsaj en simbol.',
        'uncompromised' => 'Podani :attribute se je pojavil pri uhajanju podatkov. Izberite drug :atribut.',
    ],
    'present_if' => 'Polje :attribute mora biti prisotno, ko je :other :value.',
    'present_unless' => 'Polje :attribute mora biti prisotno, razen če je :other :value.',
    'present_with' => 'Polje :attribute mora biti prisotno, ko je prisotno :values.',
    'present_with_all' => 'Polje :attribute mora biti prisotno, ko so prisotne :values.',
    'prohibited' => 'Polje :attribute je prepovedano.',
    'prohibited_if' => 'Polje :attribute je prepovedano, če je :other :value.',
    'prohibited_unless' => 'Polje :attribute je prepovedano, razen če je :other v :values.',
    'prohibits' => 'Polje :attribute prepoveduje prisotnost :other.',
    'required_array_keys' => 'Polje :attribute mora vsebovati vnose za: :values.',
    'required_if_accepted' => 'Polje :attribute je obvezno, ko je :other sprejeto.',
    'required_if_declined' => 'Polje :attribute je obvezno, ko je :other zavrnjeno.',
    'starts_with' => 'Polje :attribute se mora začeti z enim od naslednjega: :values.',
    'uppercase' => 'Polje :attribute mora biti napisano z velikimi črkami.',
    'ulid' => 'Polje :attribute mora biti veljaven ULID.',
    'uuid' => 'Polje :attribute mora biti veljaven UUID.',
];
