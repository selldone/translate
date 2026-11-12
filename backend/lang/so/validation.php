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

    'accepted' => ':attribute waa in la aqbalo.',
    'active_url' => ':attribute ma aha URL sax ah.',
    'after' => ':attribute waa inay noqotaa taariikh ka dib :date.',
    'after_or_equal' => ':attribute waa inay noqotaa taariikh ka dambaysa ama la mid ah :date.',
    'alpha' => ':attribute waxa ku jiri kara xarfo oo keliya.',
    'alpha_dash' => ':attribute waxa uu ka koobnaan karaa xarfo, nambaro, iyo dashes.',
    'alpha_num' => ':attribute waxa uu ka koobnaan karaa xarfo iyo tirooyin.',
    'array' => ':attribute waa in uu ahaado hannaan.',
    'before' => ':attribute waa inay noqotaa taariikh ka horeysa :date.',
    'before_or_equal' => ':attribute waa inay noqotaa taariikh ka hor ama la mid ah :date.',
    'between' => [
        'numeric' => ':attribute waa inuu u dhexeeyaa :min iyo :max.',
        'file' => ':attribute waa inuu u dhexeeyaa :min iyo :max kilobytes.',
        'string' => ':attribute waa inuu u dhexeeyaa jilayaasha :min iyo :max.',
        'array' => ':attribute waa inuu lahaadaa inta u dhaxaysa shay :min iyo :max.',
    ],
    'boolean' => 'Goobta :attribute waa inay noqotaa run ama been.',
    'confirmed' => 'Xaqiijinta :attribute kuma habboona.',
    'date' => ':attribute ma aha taariikh ansax ah.',
    'date_format' => ':attribute kuma habboona qaabka :format.',
    'different' => ':attribute iyo :other waa inay kala duwanaadaan.',
    'digits' => ':attribute waa inay ahaadaan lambar :digits.',
    'digits_between' => ':attribute waa inuu u dhexeeyaa :min iyo :max.',
    'dimensions' => ':attribute waxa uu leeyahay cabbir muuqaaleed aan sax ahayn.',
    'distinct' => 'Goobta :attribute waxay leedahay qiimo nuqul ah.',
    'email' => ':attribute waa inuu noqdaa ciwaan iimayl sax ah.',
    'exists' => ':attribute ee la doortay waa mid aan sax ahayn.',
    'file' => ':attribute waa inuu noqdaa fayl.',
    'filled' => 'Goobta :attribute waa inay lahaataa qiimo.',
    'gt' => [
        'numeric' => ':attribute waa inuu ka weynaadaa :value.',
        'file' => ':attribute waa in uu ka weynaadaa :value kilobytes.',
        'string' => ':attribute waa in uu ka weyn yahay xarfaha :value.',
        'array' => ':attribute waa inuu lahaadaa wax ka badan :value.',
    ],
    'gte' => [
        'numeric' => ':attribute waa in uu ka weyn yahay ama la siman yahay :value.',
        'file' => ':attribute waa in uu ka weyn yahay ama la siman yahay :value kilobytes.',
        'string' => ':attribute waa in uu ka weyn yahay ama la siman yahay xarfaha :value.',
        'array' => ':attribute waa inuu lahaadaa shay :value ama ka badan.',
    ],
    'image' => ':attribute waa inuu noqdaa sawir.',
    'in' => ':attribute ee la doortay waa mid aan sax ahayn.',
    'in_array' => 'Goobta :attribute kuma jirto :other.',
    'integer' => ':attribute waa in uu ahaado iskudar.',
    'ip' => ':attribute waa inuu noqdaa ciwaanka IP ansax ah.',
    'ipv4' => ':attribute waa inuu noqdaa ciwaanka IPv4 ansax ah.',
    'ipv6' => ':attribute waa inuu noqdaa ciwaanka IPv6 ansax ah.',
    'json' => ':attribute waa inuu noqdaa xadhig JSON sax ah.',
    'lt' => [
        'numeric' => ':attribute waa in uu ka yaraado :value.',
        'file' => ':attribute waa in uu ka yaraado :value kilobytes.',
        'string' => ':attribute waa in uu ka yaraado xarfaha :value.',
        'array' => ':attribute waa inuu lahaadaa wax ka yar :value.',
    ],
    'lte' => [
        'numeric' => ':attribute waa inuu ka yaraada ama la siman yahay :value.',
        'file' => ':attribute waa inuu ka yaraada ama la siman yahay :value kilobytes.',
        'string' => ':attribute waa inuu ka yaraada ama la siman yahay xarfaha :value.',
        'array' => ':attribute waa inuusan lahaan wax ka badan :value.',
    ],
    'max' => [
        'numeric' => ':attribute waxaa laga yaabaa inuusan ka weynaan :max.',
        'file' => ':attribute waxa laga yaabaa in aanu ka badnayn :max kilobytes.',
        'string' => ':attribute waxa laga yaabaa in aanu ka weynayn xarfaha :max.',
        'array' => ':attribute waxa laga yaabaa in aanu ka badnayn walxaha :max.',
    ],
    'mimes' => ':attribute waa inuu noqdaa fayl nooca: :values.',
    'mimetypes' => ':attribute waa inuu noqdaa fayl nooca: :values.',
    'min' => [
        'numeric' => ':attribute waa inuu ahaadaa ugu yaraan :min.',
        'file' => ':attribute waa inuu ahaadaa ugu yaraan :min kilobytes.',
        'string' => ':attribute waa inuu ahaadaa ugu yaraan :min xarfo.',
        'array' => ':attribute waa inuu lahaadaa ugu yaraan shay :min.',
    ],
    'not_in' => ':attribute ee la doortay waa mid aan sax ahayn.',
    'not_regex' => 'Qaabka :attribute waa mid aan sax ahayn.',
    'numeric' => ':attribute waa inuu noqdaa tiro.',
    'present' => 'Goobta :attribute waa inay joogtaa.',
    'regex' => 'Qaabka :attribute waa mid aan sax ahayn.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'Goobta :attribute ayaa loo baahan yahay marka :other uu yahay :value.',
    'required_unless' => 'Goobta :attribute waa loo baahan yahay ilaa :other ku jiro :values.',
    'required_with' => 'Goobta :attribute ayaa loo baahan yahay marka :values joogo.',
    'required_with_all' => 'Goobta :attribute ayaa loo baahan yahay marka :values joogo.',
    'required_without' => 'Goobta :attribute ayaa loo baahan yahay marka :values aanu joogin.',
    'required_without_all' => 'Goobta :attribute ayaa loo baahan yahay marka :values midna aanu joogin.',
    'same' => ':attribute iyo :other waa inay iswaafaqaan.',
    'size' => [
        'numeric' => ':attribute waa inuu ahaadaa :size.',
        'file' => ':attribute waa inuu noqdaa :size kilobytes.',
        'string' => ':attribute waa inuu noqdaa xarfo :size.',
        'array' => ':attribute waa in uu ka kooban yahay walxaha :size.',
    ],
    'string' => ':attribute waa in uu ahaado xadhig.',
    'timezone' => ':attribute waa in uu ahaado aag ansax ah.',
    'unique' => ':attribute mar hore ayaa la qaatay.',
    'uploaded' => ':attribute waa ku guul daraystay soo dejinta',
    'url' => 'Qaabka :attribute waa mid aan sax ahayn.',

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
            'rule-name' => 'caadadii-farriin',
        ],
        'g-recaptcha-response' => [
            'required' => 'Fadlan xaqiiji inaadan ahayn robot.',
            'captcha' => 'Khaladka Captcha! isku day mar kale hadhow ama la xidhiidh maamulaha goobta.',
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



    'accepted_if' => 'Goobta :sifada waa in la aqbalo marka :kale uu yahay :qiimo.',
    'ascii' => 'Goobta : sifada waa in ay ka kooban tahay hal-byte xarfo iyo calaamado xarfo ah.',
    'can' => 'Goobta: sifada waxay ka kooban tahay qiimo aan la ogolayn.',
    'contains' => 'Goobta: sifada waxaa ka maqan qiime loo baahnaa.',
    'current_password' => 'Furaha sirta ah waa khalad',
    'date_equals' => 'Goobta : sifada waa inay noqotaa taariikh u dhiganta :date.',
    'decimal' => 'Goobta : sifada waa in ay lahaataa: jajab tobanle meelood.',
    'declined' => 'Goobta sifada waa in la diiday',
    'declined_if' => 'Goobta : sifada waa in la diidaa marka :kale uu yahay :qiimaha.',
    'doesnt_end_with' => 'Goobta : sifada waa inaysan ku dhamaanin mid ka mid ah kuwan soo socda: :qiimaha.',
    'doesnt_start_with' => 'Goobta sifada waa in aanay ku bilaaban mid ka mid ah kuwan soo socda: :qiimaha.',
    'ends_with' => 'Goobta : sifada waa in ay ku dhamaato mid ka mid ah kuwan soo socda: :qiimaha.',
    'enum' => 'Xulashada: sifada waa mid aan sax ahayn.',
    'extensions' => 'Goobta : sifada waa in ay lahaataa mid ka mid ah kordhinta soo socota: : values.',
    'hex_color' => 'Goobta : sifada waa inay noqotaa midab hexadecimal sax ah.',
    'list' => 'Goobta : sifada waa inay noqotaa liis.',
    'lowercase' => 'Goobta : sifada waa inay noqotaa far yar.',
    'mac_address' => 'Goobta : sifada waa inay noqotaa ciwaan MAC ansax ah.',
    'max_digits' => 'Goobta : sifada waa in aanay ka badnayn :max digits.',
    'min_digits' => 'Goobta : sifada waa in ay lahaataa ugu yaraan :min tiro.',
    'missing' => 'Goobta sifada waa in ay maqan tahay',
    'missing_if' => 'Goobta : sifada waa in ay maqan tahay marka :kale uu yahay :qiimaha.',
    'missing_unless' => 'Goobta : sifada waa in ay maqan tahay ilaa :kale waa :qiimaha.',
    'missing_with' => 'Goobta : sifada waa in ay maqan tahay marka :qiimuhu jiro.',
    'missing_with_all' => 'Goobta : sifada waa in ay maqan tahay marka : qiimayaasha ay jiraan.',
    'multiple_of' => 'Goobta :sifada waa in ay noqotaa mid isku dhufasho ah :qiimo.',
    'password' => [
        'letters' => 'Goobta : sifada waa in ay ka kooban tahay ugu yaraan hal xaraf.',
        'mixed' => 'Goobta : sifada waa in ay ka kooban tahay ugu yaraan hal xaraf oo waaweyn iyo hal xaraf oo yar.',
        'numbers' => 'Goobta : sifada waa in ay ka kooban tahay ugu yaraan hal lambar.',
        'symbols' => 'Goobta : sifada waa in ay ka kooban tahay ugu yaraan hal calaamad.',
        'uncompromised' => 'Sifada la bixiyay ayaa ka soo muuqatay daadinta xogta Fadlan dooro mid ka duwan: sifo.',
    ],
    'present_if' => 'Goobta : sifada waa in ay jirtaa marka :kale uu yahay :qiimaha.',
    'present_unless' => 'Goobta :sifada waa in ay jirtaa ilaa :kale waa :qiimo.',
    'present_with' => 'Goobta : sifada waa in ay jirtaa marka :qiimuhu jiro.',
    'present_with_all' => 'Goobta :sifada waa in ay jirtaa marka :qiimaha ay jiraan.',
    'prohibited' => 'Goobta: sifada waa mamnuuc.',
    'prohibited_if' => 'Goobta : sifada waa mamnuuc marka :kale uu yahay :qiimo.',
    'prohibited_unless' => 'Goobta : sifada waa mamnuuc ilaa :kale uu ku jiro :qiimaha.',
    'prohibits' => 'Goobta :sifada ayaa ka mamnuucday :kale inay goobjoog ka ahaato.',
    'required_array_keys' => 'Goobta : sifada waa in ay ka kooban tahay gelinta: : qiimayaasha.',
    'required_if_accepted' => 'Goobta : sifada ayaa loo baahan yahay marka :kale la aqbalo.',
    'required_if_declined' => 'Goobta : sifada ayaa loo baahan yahay marka :kale la diido.',
    'starts_with' => 'Goobta : sifada waa in ay ka bilaabataa mid ka mid ah kuwan soo socda: :qiimaha.',
    'uppercase' => 'Goobta : sifada waa inay noqotaa far waaweyn.',
    'ulid' => 'Goobta : sifada waa inay noqotaa ULID sax ah.',
    'uuid' => 'Goobta : sifada waa inay noqotaa UUID sax ah.',
];
