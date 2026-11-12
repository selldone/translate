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

    'accepted' => ':attribute se mora prihvatiti.',
    'active_url' => ':attribute nije važeći URL.',
    'after' => ':attribute mora biti datum nakon :date.',
    'after_or_equal' => ':attribute mora biti datum nakon ili jednak :date.',
    'alpha' => ':attribute može sadržavati samo slova.',
    'alpha_dash' => ':attribute može sadržavati samo slova, brojeve i crtice.',
    'alpha_num' => ':attribute može sadržavati samo slova i brojeve.',
    'array' => ':attribute mora biti niz.',
    'before' => ':attribute mora biti datum prije :date.',
    'before_or_equal' => ':attribute mora biti datum prije ili jednak :date.',
    'between' => [
        'numeric' => ':attribute mora biti između :min i :max.',
        'file' => ':attribute mora biti između :min i :max kilobajta.',
        'string' => ':attribute mora biti između :min i :max znakova.',
        'array' => ':attribute mora imati između :min i :max stavki.',
    ],
    'boolean' => 'Polje :attribute mora biti istinito ili netočno.',
    'confirmed' => 'Potvrda :attribute se ne podudara.',
    'date' => ':attribute nije važeći datum.',
    'date_format' => ':attribute ne odgovara formatu :format.',
    'different' => ':attribute i :other moraju biti različiti.',
    'digits' => ':attribute mora biti :digits cifre.',
    'digits_between' => ':attribute mora biti između :min i :max znamenki.',
    'dimensions' => ':attribute ima nevažeće dimenzije slike.',
    'distinct' => 'Polje :attribute ima dupliranu vrijednost.',
    'email' => ':attribute mora biti važeća adresa e-pošte.',
    'exists' => 'Odabrani :attribute je nevažeći.',
    'file' => ':attribute mora biti datoteka.',
    'filled' => 'Polje :attribute mora imati vrijednost.',
    'gt' => [
        'numeric' => ':attribute mora biti veći od :value.',
        'file' => ':attribute mora biti veći od :value kilobajta.',
        'string' => ':attribute mora biti veći od :value znakova.',
        'array' => ':attribute mora imati više od :value stavki.',
    ],
    'gte' => [
        'numeric' => ':attribute mora biti veći ili jednak :value.',
        'file' => ':attribute mora biti veći ili jednak :value kilobajta.',
        'string' => ':attribute mora biti veći ili jednak :value znakova.',
        'array' => ':attribute mora imati :value stavke ili više.',
    ],
    'image' => ':attribute mora biti slika.',
    'in' => 'Odabrani :attribute je nevažeći.',
    'in_array' => 'Polje :attribute ne postoji u :other.',
    'integer' => ':attribute mora biti cijeli broj.',
    'ip' => ':attribute mora biti važeća IP adresa.',
    'ipv4' => ':attribute mora biti važeća IPv4 adresa.',
    'ipv6' => ':attribute mora biti važeća IPv6 adresa.',
    'json' => ':attribute mora biti važeći JSON niz.',
    'lt' => [
        'numeric' => ':attribute mora biti manji od :value.',
        'file' => ':attribute mora biti manji od :value kilobajta.',
        'string' => ':attribute mora biti manji od :value znakova.',
        'array' => ':attribute mora imati manje od :value stavki.',
    ],
    'lte' => [
        'numeric' => ':attribute mora biti manji ili jednak :value.',
        'file' => ':attribute mora biti manji ili jednak :value kilobajta.',
        'string' => ':attribute mora biti manji od ili jednak :value znakova.',
        'array' => ':attribute ne smije imati više od :value stavki.',
    ],
    'max' => [
        'numeric' => ':attribute ne smije biti veći od :max.',
        'file' => ':attribute ne smije biti veći od :max kilobajta.',
        'string' => ':attribute ne smije biti veći od :max znakova.',
        'array' => ':attribute ne smije imati više od :max stavki.',
    ],
    'mimes' => ':attribute mora biti datoteka tipa: :values.',
    'mimetypes' => ':attribute mora biti datoteka tipa: :values.',
    'min' => [
        'numeric' => ':attribute mora biti najmanje :min.',
        'file' => ':attribute mora imati najmanje :min kilobajta.',
        'string' => ':attribute mora imati najmanje :min znakova.',
        'array' => ':attribute mora imati najmanje :min stavke.',
    ],
    'not_in' => 'Odabrani :attribute je nevažeći.',
    'not_regex' => 'Format :attribute je nevažeći.',
    'numeric' => ':attribute mora biti broj.',
    'present' => 'Polje :attribute mora biti prisutno.',
    'regex' => 'Format :attribute je nevažeći.',
    'required' => 'Polje :attribute je obavezno.',
    'required_if' => 'Polje :attribute je obavezno kada je :other :value.',
    'required_unless' => 'Polje :attribute je obavezno osim ako :other nije u :values.',
    'required_with' => 'Polje :attribute je obavezno kada je :values prisutno.',
    'required_with_all' => 'Polje :attribute je obavezno kada je :values prisutno.',
    'required_without' => 'Polje :attribute je obavezno kada :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je obavezno kada nije prisutan nijedan od :values.',
    'same' => ':attribute i :other moraju odgovarati.',
    'size' => [
        'numeric' => ':attribute mora biti :size.',
        'file' => ':attribute mora biti :size kilobajta.',
        'string' => ':attribute mora biti :size znakova.',
        'array' => ':attribute mora sadržavati :size stavke.',
    ],
    'string' => ':attribute mora biti string.',
    'timezone' => ':attribute mora biti važeća zona.',
    'unique' => ':attribute je već zauzet.',
    'uploaded' => 'Učitavanje :attribute nije uspjelo.',
    'url' => 'Format :attribute je nevažeći.',

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
            'rule-name' => 'prilagođena poruka',
        ],
        'g-recaptcha-response' => [
            'required' => 'Molimo potvrdite da niste robot.',
            'captcha' => 'Captcha greška! pokušajte ponovo kasnije ili kontaktirajte administratora stranice.',
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



    'accepted_if' => 'Polje :attribute mora biti prihvaćeno kada je :other :value.',
    'ascii' => 'Polje :attribute mora sadržavati samo jednobajtne alfanumeričke znakove i simbole.',
    'can' => 'Polje :attribute sadrži neovlaštenu vrijednost.',
    'contains' => 'Polju :attribute nedostaje potrebna vrijednost.',
    'current_password' => 'Lozinka je netačna.',
    'date_equals' => 'Polje :attribute mora biti datum jednak :date.',
    'decimal' => 'Polje :attribute mora imati :decimala decimalna mjesta.',
    'declined' => 'Polje :attribute mora biti odbijeno.',
    'declined_if' => 'Polje :attribute mora biti odbijeno kada je :other :value.',
    'doesnt_end_with' => 'Polje :attribute ne smije završavati sa jednim od sljedećih: :values.',
    'doesnt_start_with' => 'Polje :attribute ne smije početi s jednim od sljedećih: :values.',
    'ends_with' => 'Polje :attribute mora završiti sa jednim od sljedećih: :values.',
    'enum' => 'Odabrani :attribut je nevažeći.',
    'extensions' => 'Polje :attribute mora imati jednu od sljedećih ekstenzija: :values.',
    'hex_color' => 'Polje :attribute mora biti važeća heksadecimalna boja.',
    'list' => 'Polje :attribute mora biti lista.',
    'lowercase' => 'Polje :attribute mora biti malim slovima.',
    'mac_address' => 'Polje :attribute mora biti važeća MAC adresa.',
    'max_digits' => 'Polje :attribute ne smije imati više od :max cifara.',
    'min_digits' => 'Polje :attribute mora imati najmanje :min znamenke.',
    'missing' => 'Polje :attribute mora nedostajati.',
    'missing_if' => 'Polje :attribute mora nedostajati kada je :other :value.',
    'missing_unless' => 'Polje :attribute mora nedostajati osim ako :other nije :value.',
    'missing_with' => 'Polje :attribute mora nedostajati kada je :values prisutno.',
    'missing_with_all' => 'Polje :attribute mora nedostajati kada su prisutne :vrijednosti.',
    'multiple_of' => 'Polje :attribute mora biti višekratnik :value.',
    'password' => [
        'letters' => 'Polje :attribute mora sadržavati najmanje jedno slovo.',
        'mixed' => 'Polje :attribute mora sadržavati najmanje jedno veliko i jedno malo slovo.',
        'numbers' => 'Polje :attribute mora sadržavati najmanje jedan broj.',
        'symbols' => 'Polje :attribute mora sadržavati najmanje jedan simbol.',
        'uncompromised' => 'Dati atribut : pojavio se u curenju podataka. Molimo odaberite drugi :attribute.',
    ],
    'present_if' => 'Polje :attribute mora biti prisutno kada je :other :value.',
    'present_unless' => 'Polje :attribute mora biti prisutno osim ako :other nije :value.',
    'present_with' => 'Polje :attribute mora biti prisutno kada je :values prisutno.',
    'present_with_all' => 'Polje :attribute mora biti prisutno kada su prisutne :value.',
    'prohibited' => 'Polje :attribute je zabranjeno.',
    'prohibited_if' => 'Polje :attribute je zabranjeno kada je :other :value.',
    'prohibited_unless' => 'Polje :attribute je zabranjeno osim ako :other nije u :values.',
    'prohibits' => 'Polje :attribute zabranjuje prisustvo :other.',
    'required_array_keys' => 'Polje :attribute mora sadržavati unose za: :values.',
    'required_if_accepted' => 'Polje :attribute je obavezno kada je :other prihvaćeno.',
    'required_if_declined' => 'Polje :attribute je obavezno kada je :other odbijen.',
    'starts_with' => 'Polje :attribute mora početi s jednim od sljedećih: :values.',
    'uppercase' => 'Polje :attribute mora biti velikim slovima.',
    'ulid' => 'Polje :attribute mora biti važeći ULID.',
    'uuid' => 'Polje :attribute mora biti važeći UUID.',
];
