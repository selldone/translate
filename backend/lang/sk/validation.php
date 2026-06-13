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

    'accepted' => 'Musí sa akceptovať :attribute.',
    'active_url' => 'Atribút :attribute nie je platná adresa URL.',
    'after' => ':attribute musí byť dátum po :date.',
    'after_or_equal' => ':attribute musí byť dátum nasledujúci alebo rovný :date.',
    'alpha' => ':attribute môže obsahovať iba písmená.',
    'alpha_dash' => ':attribute môže obsahovať iba písmená, čísla a pomlčky.',
    'alpha_num' => ':attribute môže obsahovať iba písmená a čísla.',
    'array' => ':attribute musí byť pole.',
    'before' => ':attribute musí byť dátum pred :date.',
    'before_or_equal' => ':attribute musí byť dátum pred alebo rovný :date.',
    'between' => [
        'numeric' => 'Hodnota :attribute musí byť medzi :min a :max.',
        'file' => 'Atribút :attribute musí byť medzi :min a :max kilobajtov.',
        'string' => ':attribute musí byť medzi :min a :max znakmi.',
        'array' => 'Položka :attribute musí mať položky medzi :min a :max.',
    ],
    'boolean' => 'Pole :attribute musí byť true alebo false.',
    'confirmed' => 'Potvrdenie :attribute sa nezhoduje.',
    'date' => ':attribute nie je platný dátum.',
    'date_format' => ':attribute sa nezhoduje s formátom :format.',
    'different' => 'Parametre :attribute a :other musia byť odlišné.',
    'digits' => ':attribute musí byť :digits číslice.',
    'digits_between' => 'Hodnota :attribute musí byť medzi :min a :max číslicami.',
    'dimensions' => 'Atribút :attribute má neplatné rozmery obrázka.',
    'distinct' => 'Pole :attribute má duplicitnú hodnotu.',
    'email' => ':attribute musí byť platná e-mailová adresa.',
    'exists' => 'Vybratý atribút :attribute je neplatný.',
    'file' => ':attribute musí byť súbor.',
    'filled' => 'Pole :attribute musí mať hodnotu.',
    'gt' => [
        'numeric' => ':attribute musí byť väčšie ako :value.',
        'file' => 'Atribút :attribute musí byť väčší ako :value kilobajtov.',
        'string' => ':attribute musí byť väčší ako :value znakov.',
        'array' => ':attribute musí mať viac ako :value položiek.',
    ],
    'gte' => [
        'numeric' => 'Atribút :attribute musí byť väčší alebo rovný :value.',
        'file' => 'Atribút :attribute musí byť väčší alebo rovný :value kilobajtov.',
        'string' => ':attribute musí byť väčší alebo rovný :value znakov.',
        'array' => 'Atribút :attribute musí obsahovať položky :value alebo viac.',
    ],
    'image' => ':attribute musí byť obrázok.',
    'in' => 'Vybratý atribút :attribute je neplatný.',
    'in_array' => 'Pole :attribute v :other neexistuje.',
    'integer' => ':attribute musí byť celé číslo.',
    'ip' => ':attribute musí byť platná adresa IP.',
    'ipv4' => ':attribute musí byť platná adresa IPv4.',
    'ipv6' => ':attribute musí byť platná adresa IPv6.',
    'json' => ':attribute musí byť platný reťazec JSON.',
    'lt' => [
        'numeric' => ':attribute musí byť menšie ako :value.',
        'file' => 'Atribút :attribute musí byť menší ako :value kilobajtov.',
        'string' => 'Znak :attribute musí byť menší ako :value znakov.',
        'array' => ':attribute musí mať menej ako :value položiek.',
    ],
    'lte' => [
        'numeric' => 'Atribút :attribute musí byť menší alebo rovný :value.',
        'file' => 'Atribút :attribute musí byť menší alebo rovný :value kilobajtov.',
        'string' => 'Znak :attribute musí byť menší alebo rovný :value znakov.',
        'array' => ':attribute nesmie mať viac ako :value položiek.',
    ],
    'max' => [
        'numeric' => 'Atribút :attribute nesmie byť väčší ako :max.',
        'file' => 'Atribút :attribute nesmie byť väčší ako :max kilobajtov.',
        'string' => ':attribute nesmie byť väčší ako :max znakov.',
        'array' => ':attribute nemôže mať viac ako :max položiek.',
    ],
    'mimes' => ':attribute musí byť súbor typu: :values.',
    'mimetypes' => ':attribute musí byť súbor typu: :values.',
    'min' => [
        'numeric' => ':attribute musí byť aspoň :min.',
        'file' => ':attribute musí mať aspoň :min kilobajtov.',
        'string' => ':attribute musí mať aspoň :min znakov.',
        'array' => ':attribute musí mať aspoň :min položiek.',
    ],
    'not_in' => 'Vybratý atribút :attribute je neplatný.',
    'not_regex' => 'Formát :attribute je neplatný.',
    'numeric' => ':attribute musí byť číslo.',
    'present' => 'Pole :attribute musí byť prítomné.',
    'regex' => 'Formát :attribute je neplatný.',
    'required' => 'Pole :attribute je povinné.',
    'required_if' => 'Pole :attribute je povinné, keď :other je :value.',
    'required_unless' => 'Pole :attribute je povinné, pokiaľ :other nie je v :values.',
    'required_with' => 'Pole :attribute je povinné, keď je prítomný :values.',
    'required_with_all' => 'Pole :attribute je povinné, keď je prítomný :values.',
    'required_without' => 'Pole :attribute je povinné, keď :values nie je prítomný.',
    'required_without_all' => 'Pole :attribute je povinné, ak nie je prítomná žiadna z hodnôt :values.',
    'same' => 'Parametre :attribute a :other sa musia zhodovať.',
    'size' => [
        'numeric' => ':attribute musí byť :size.',
        'file' => ':attribute musí byť :size kilobajtov.',
        'string' => ':attribute musí obsahovať znaky :size.',
        'array' => 'Atribút :attribute musí obsahovať položky :size.',
    ],
    'string' => ':attribute musí byť reťazec.',
    'timezone' => ':attribute musí byť platná zóna.',
    'unique' => ':attribute už bol odobratý.',
    'uploaded' => 'Nepodarilo sa odovzdať :attribute.',
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
            'rule-name' => 'vlastná správa',
        ],
        'g-recaptcha-response' => [
            'required' => 'Prosím overte, že nie ste robot.',
            'captcha' => 'Chyba captcha! skúste to znova neskôr alebo kontaktujte správcu stránky.',
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



    'accepted_if' => 'Pole :attribute musí byť akceptované, keď :other je :value.',
    'ascii' => 'Pole :attribute musí obsahovať iba jednobajtové alfanumerické znaky a symboly.',
    'can' => 'Pole :attribute obsahuje neoprávnenú hodnotu.',
    'contains' => 'V poli :attribute chýba povinná hodnota.',
    'current_password' => 'Heslo je nesprávne.',
    'date_equals' => 'Pole :attribute musí byť dátum rovný :date.',
    'decimal' => 'Pole :attribute musí mať :decimal desatinné miesta.',
    'declined' => 'Pole :attribute musí byť odmietnuté.',
    'declined_if' => 'Pole :attribute musí byť odmietnuté, keď :other je :value.',
    'doesnt_end_with' => 'Pole :attribute nesmie končiť jedným z nasledujúcich: :values.',
    'doesnt_start_with' => 'Pole :attribute sa nesmie začínať jedným z nasledujúcich výrazov: :values.',
    'ends_with' => 'Pole :attribute musí končiť jedným z nasledujúcich výrazov: :values.',
    'enum' => 'Vybratý atribút :attribute je neplatný.',
    'extensions' => 'Pole :attribute musí mať jedno z nasledujúcich rozšírení: :values.',
    'hex_color' => 'Pole :attribute musí mať platnú hexadecimálnu farbu.',
    'list' => 'Pole :attribute musí byť zoznam.',
    'lowercase' => 'Pole :attribute musí byť malé.',
    'mac_address' => 'Pole :attribute musí byť platná adresa MAC.',
    'max_digits' => 'Pole :attribute nesmie mať viac ako :max číslic.',
    'min_digits' => 'Pole :attribute musí mať aspoň :min číslic.',
    'missing' => 'Pole :attribute musí chýbať.',
    'missing_if' => 'Pole :attribute musí chýbať, keď :other je :value.',
    'missing_unless' => 'Pole :attribute musí chýbať, pokiaľ :other nie je :value.',
    'missing_with' => 'Ak je prítomný :values, pole :attribute musí chýbať.',
    'missing_with_all' => 'Pole :attribute musí chýbať, ak sú prítomné :values.',
    'multiple_of' => 'Pole :attribute musí byť násobkom hodnoty :value.',
    'password' => [
        'letters' => 'Pole :attribute musí obsahovať aspoň jedno písmeno.',
        'mixed' => 'Pole :attribute musí obsahovať aspoň jedno veľké a jedno malé písmeno.',
        'numbers' => 'Pole :attribute musí obsahovať aspoň jedno číslo.',
        'symbols' => 'Pole :attribute musí obsahovať aspoň jeden symbol.',
        'uncompromised' => 'Daný atribút :attribute sa objavil pri úniku údajov. Vyberte iný :attribute.',
    ],
    'present_if' => 'Pole :attribute musí byť prítomné, keď :other je :value.',
    'present_unless' => 'Pole :attribute musí byť prítomné, pokiaľ :other nie je :value.',
    'present_with' => 'Pole :attribute musí byť prítomné, keď je prítomný :values.',
    'present_with_all' => 'Pole :attribute musí byť prítomné, keď sú prítomné :values.',
    'prohibited' => 'Pole :attribute je zakázané.',
    'prohibited_if' => 'Pole :attribute je zakázané, keď :other je :value.',
    'prohibited_unless' => 'Pole :attribute je zakázané, pokiaľ :other nie je v :values.',
    'prohibits' => 'Pole :attribute zakazuje prítomnosť :other.',
    'required_array_keys' => 'Pole :attribute musí obsahovať položky pre: :values.',
    'required_if_accepted' => 'Pole :attribute je povinné, keď je akceptované :other.',
    'required_if_declined' => 'Pole :attribute je povinné, keď je :other odmietnuté.',
    'starts_with' => 'Pole :attribute musí začínať jedným z nasledujúcich: :values.',
    'uppercase' => 'Pole :attribute musí byť veľké.',
    'ulid' => 'Pole :attribute musí byť platným ULID.',
    'uuid' => 'Pole :attribute musí byť platné UUID.',
];
