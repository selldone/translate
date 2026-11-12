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

    'accepted' => ':attribute onartu behar da.',
    'active_url' => ':attribute ez da baliozko URL bat.',
    'after' => ':attribute :date ondorengo data izan behar du.',
    'after_or_equal' => ':attribute-k :date ondorengo edo berdina izan behar du.',
    'alpha' => ':attribute hizkiak soilik izan ditzake.',
    'alpha_dash' => ':attribute hizkiak, zenbakiak eta marratxoak soilik izan ditzake.',
    'alpha_num' => ':attribute hizkiak eta zenbakiak soilik izan ditzake.',
    'array' => ':attribute array bat izan behar du.',
    'before' => ':attribute :date aurreko data izan behar du.',
    'before_or_equal' => ':attribute :date aurreko edo berdineko data izan behar du.',
    'between' => [
        'numeric' => ':attribute :min eta :max artean egon behar du.',
        'file' => ':attribute :min eta :max kilobyte artean egon behar du.',
        'string' => ':attribute :min eta :max karaktereen artean egon behar du.',
        'array' => ':attribute :min eta :max elementuen artean izan behar du.',
    ],
    'boolean' => ':attribute eremuak egia ala faltsua izan behar du.',
    'confirmed' => ':attribute berrespena ez dator bat.',
    'date' => ':attribute ez da baliozko data.',
    'date_format' => ':attribute ez dator bat :format formatuarekin.',
    'different' => ':attribute eta :other desberdinak izan behar dute.',
    'digits' => ':attribute :digits zifrak izan behar dira.',
    'digits_between' => ':attribute :min eta :max zifren artean egon behar du.',
    'dimensions' => ':attribute-k irudi-dimentsio baliogabeak ditu.',
    'distinct' => ':attribute eremuak balio bikoiztua du.',
    'email' => ':attribute-k baliozko helbide elektronikoa izan behar du.',
    'exists' => 'Hautatutako :attribute baliogabea da.',
    'file' => ':attribute fitxategi bat izan behar da.',
    'filled' => ':attribute eremuak balio bat izan behar du.',
    'gt' => [
        'numeric' => ':attribute :value baino handiagoa izan behar du.',
        'file' => ':attribute :value kilobyte baino handiagoa izan behar du.',
        'string' => ':attribute :value karaktereak baino handiagoa izan behar du.',
        'array' => ':attribute-k :value elementu baino gehiago izan behar ditu.',
    ],
    'gte' => [
        'numeric' => ':attribute :value baino handiagoa edo berdina izan behar du.',
        'file' => ':attribute :value kilobyte baino handiagoa edo berdina izan behar du.',
        'string' => ':attribute :value karaktereak baino handiagoa edo berdina izan behar du.',
        'array' => ':attribute-k :value elementuak edo gehiago izan behar ditu.',
    ],
    'image' => ':attribute-ak irudi bat izan behar du.',
    'in' => 'Hautatutako :attribute baliogabea da.',
    'in_array' => ':attribute eremua ez dago :other-n.',
    'integer' => ':attribute zenbaki oso bat izan behar du.',
    'ip' => ':attribute baliozko IP helbidea izan behar du.',
    'ipv4' => ':attribute baliozko IPv4 helbide bat izan behar du.',
    'ipv6' => ':attribute baliozko IPv6 helbidea izan behar du.',
    'json' => ':attribute baliozko JSON kate bat izan behar du.',
    'lt' => [
        'numeric' => ':attribute :value baino txikiagoa izan behar du.',
        'file' => ':attribute :value kilobyte baino txikiagoa izan behar du.',
        'string' => ':attribute :value karaktereak baino txikiagoa izan behar du.',
        'array' => ':attribute-k :value elementuak baino gutxiago izan behar ditu.',
    ],
    'lte' => [
        'numeric' => ':attribute :value baino txikiagoa edo berdina izan behar du.',
        'file' => ':attribute :value kilobyte baino txikiagoa edo berdina izan behar du.',
        'string' => ':attribute :value karaktereak baino txikiagoa edo berdina izan behar du.',
        'array' => ':attribute-k ezin du :value elementu baino gehiago izan.',
    ],
    'max' => [
        'numeric' => 'Baliteke :attribute ez izatea :max baino handiagoa.',
        'file' => 'Baliteke :attribute ez izatea :max kilobyte baino handiagoa.',
        'string' => ':attribute ezingo da :max karaktereak baino handiagoa izan.',
        'array' => ':attribute-k ezin du :max elementu baino gehiago izan.',
    ],
    'mimes' => ':attribute motako fitxategia izan behar du: :values.',
    'mimetypes' => ':attribute motako fitxategia izan behar du: :values.',
    'min' => [
        'numeric' => ':attribute gutxienez :min izan behar du.',
        'file' => ':attribute gutxienez :min kilobyte izan behar du.',
        'string' => ':attribute-ak gutxienez :min karaktereak izan behar ditu.',
        'array' => ':attribute-ak gutxienez :min elementuak izan behar ditu.',
    ],
    'not_in' => 'Hautatutako :attribute baliogabea da.',
    'not_regex' => ':attribute formatua ez da baliozkoa.',
    'numeric' => ':attribute zenbaki bat izan behar du.',
    'present' => ':attribute eremuak egon behar du.',
    'regex' => ':attribute formatua ez da baliozkoa.',
    'required' => ':attribute eremua beharrezkoa da.',
    'required_if' => ':attribute eremua beharrezkoa da :other :value denean.',
    'required_unless' => ':attribute eremua beharrezkoa da :other :values ez badago.',
    'required_with' => ':attribute eremua beharrezkoa da :values dagoenean.',
    'required_with_all' => ':attribute eremua beharrezkoa da :values dagoenean.',
    'required_without' => ':attribute eremua beharrezkoa da :values ez dagoenean.',
    'required_without_all' => ':attribute eremua beharrezkoa da :values bat ere ez dagoenean.',
    'same' => ':attribute eta :other bat etorri behar dira.',
    'size' => [
        'numeric' => ':attribute :size izan behar du.',
        'file' => ':attribute :size kilobyte izan behar du.',
        'string' => ':attribute-ak :size karaktereak izan behar ditu.',
        'array' => ':attribute-k :size elementuak izan behar ditu.',
    ],
    'string' => ':attribute kate bat izan behar du.',
    'timezone' => ':attribute baliozko zona bat izan behar du.',
    'unique' => ':attribute dagoeneko hartu da.',
    'uploaded' => 'Ezin izan da :attribute kargatu.',
    'url' => ':attribute formatua ez da baliozkoa.',

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
            'rule-name' => 'mezu pertsonalizatua',
        ],
        'g-recaptcha-response' => [
            'required' => 'Egiaztatu ez zarela robot bat.',
            'captcha' => 'Captcha errorea! saiatu berriro geroago edo jarri harremanetan guneko administratzailearekin.',
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



    'accepted_if' => ':attribute eremua onartu behar da :beste :value denean.',
    'ascii' => ':attribute eremuak byte bakarreko karaktere alfanumeriko eta ikurrak izan behar ditu soilik.',
    'can' => ':attribute eremuak baimenik gabeko balio bat dauka.',
    'contains' => ':attribute eremuari beharrezko balio bat falta zaio.',
    'current_password' => 'Pasahitza okerra da.',
    'date_equals' => ':attribute eremuak :dataren berdina izan behar du.',
    'decimal' => ':attribute eremuak : hamartar hamartar izan behar ditu.',
    'declined' => ':attribute eremua baztertu behar da.',
    'declined_if' => ':attribute eremua baztertu behar da :other :value denean.',
    'doesnt_end_with' => ':attribute eremuak ez du honako hauetako batekin amaitu behar: :values.',
    'doesnt_start_with' => ':attribute eremuak ez du hasi behar hauetako batekin: :values.',
    'ends_with' => ':attribute eremuak honako hauetako batekin amaitu behar du: :values.',
    'enum' => 'Hautatutako : atributua baliogabea da.',
    'extensions' => ':attribute eremuak luzapen hauetako bat izan behar du: :values.',
    'hex_color' => ':attribute eremuak balio hamaseitar kolorekoa izan behar du.',
    'list' => ':attribute eremuak zerrenda bat izan behar du.',
    'lowercase' => ':attribute eremuak minuskula izan behar du.',
    'mac_address' => ':attribute eremuak baliozko MAC helbide bat izan behar du.',
    'max_digits' => ':attribute eremuak ezin du izan :max zifra baino gehiago.',
    'min_digits' => ':attribute eremuak gutxienez :min digitu izan behar ditu.',
    'missing' => ':attribute eremua falta izan behar du.',
    'missing_if' => ':attribute eremuak falta izan behar du :other :value denean.',
    'missing_unless' => ':attribute eremua falta izan behar du :beste :value ez bada.',
    'missing_with' => ':attribute eremuak falta izan behar du :values dagoenean.',
    'missing_with_all' => ':attribute eremua falta izan behar du :values daudenean.',
    'multiple_of' => ':attribute eremuak :value-ren multiploa izan behar du.',
    'password' => [
        'letters' => ':attribute eremuak gutxienez letra bat izan behar du.',
        'mixed' => ':attribute eremuak gutxienez letra larriz eta minuskula bat izan behar ditu.',
        'numbers' => ':attribute eremuak zenbaki bat izan behar du gutxienez.',
        'symbols' => ':attribute eremuak ikur bat izan behar du gutxienez.',
        'uncompromised' => 'Emandako :attribute datu-filtrazio batean agertu da. Mesedez, aukeratu beste :attribute bat.',
    ],
    'present_if' => ':attribute eremuak egon behar du :other :value denean.',
    'present_unless' => ':attribute eremuak egon behar du :beste :value ez bada.',
    'present_with' => ':attribute eremuak egon behar du :values dagoenean.',
    'present_with_all' => ':attribute eremuak egon behar du :values daudenean.',
    'prohibited' => ':attribute eremua debekatuta dago.',
    'prohibited_if' => ':attribute eremua debekatuta dago :beste :value denean.',
    'prohibited_unless' => ':attribute eremua debekatuta dago :beste :values-etan ez badago.',
    'prohibits' => ':attribute eremuak debekatu egiten du :besterik egotea.',
    'required_array_keys' => ':attribute eremuak sarrerak izan behar ditu: :values.',
    'required_if_accepted' => ':attribute eremua beharrezkoa da :beste onartzen denean.',
    'required_if_declined' => ':attribute eremua beharrezkoa da :bestea baztertzen denean.',
    'starts_with' => ':attribute eremuak honako hauetako batekin hasi behar du: :values.',
    'uppercase' => ':attribute eremuak maiuskulak izan behar ditu.',
    'ulid' => ':attribute eremuak baliozko ULID bat izan behar du.',
    'uuid' => ':attribute eremuak baliozko UUID bat izan behar du.',
];
