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

    'accepted' => 'Il :attribute deve essere accettato.',
    'active_url' => 'Il :attribute non è un URL valido.',
    'after' => ':attribute deve essere una data successiva a :date.',
    'after_or_equal' => ':attribute deve essere una data successiva o uguale a :date.',
    'alpha' => 'Il :attribute può contenere solo lettere.',
    'alpha_dash' => 'Il :attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num' => 'Il :attribute può contenere solo lettere e numeri.',
    'array' => 'Il :attribute deve essere un array.',
    'before' => ':attribute deve essere una data precedente a :date.',
    'before_or_equal' => ':attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'numeric' => 'Il :attribute deve essere compreso tra :min e :max.',
        'file' => 'Il :attribute deve essere compreso tra :min e :max kilobyte.',
        'string' => 'Il :attribute deve essere compreso tra i caratteri :min e :max.',
        'array' => 'Il :attribute deve contenere articoli compresi tra :min e :max.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma :attribute non corrisponde.',
    'date' => ':attribute non è una data valida.',
    'date_format' => 'Il :attribute non corrisponde al formato :format.',
    'different' => ':attribute e :other devono essere diversi.',
    'digits' => 'Il :attribute deve essere composto da cifre :digits.',
    'digits_between' => 'Il :attribute deve essere compreso tra le cifre :min e :max.',
    'dimensions' => ':attribute ha dimensioni dell\'immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'email' => 'Il :attribute deve essere un indirizzo email valido.',
    'exists' => 'Il :attribute selezionato non è valido.',
    'file' => 'Il :attribute deve essere un file.',
    'filled' => 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'numeric' => 'Il :attribute deve essere maggiore di :value.',
        'file' => 'Il :attribute deve essere maggiore di :value kilobyte.',
        'string' => 'Il :attribute deve essere maggiore dei caratteri :value.',
        'array' => 'Il :attribute deve contenere più di articoli :value.',
    ],
    'gte' => [
        'numeric' => 'Il :attribute deve essere maggiore o uguale a :value.',
        'file' => 'I kilobyte :attribute devono essere maggiori o uguali a :value.',
        'string' => 'I caratteri :attribute devono essere maggiori o uguali a :value.',
        'array' => 'Il :attribute deve contenere elementi :value o più.',
    ],
    'image' => 'Il :attribute deve essere un\'immagine.',
    'in' => 'Il :attribute selezionato non è valido.',
    'in_array' => 'Il campo :attribute non esiste in :other.',
    'integer' => 'Il :attribute deve essere un numero intero.',
    'ip' => 'Il :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'Il :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Il :attribute deve essere un indirizzo IPv6 valido.',
    'json' => ':attribute deve essere una stringa JSON valida.',
    'lt' => [
        'numeric' => 'Il :attribute deve essere inferiore a :value.',
        'file' => 'Il :attribute deve essere inferiore a :value kilobyte.',
        'string' => 'Il :attribute deve contenere meno di :value caratteri.',
        'array' => 'Il :attribute deve contenere meno di :value articoli.',
    ],
    'lte' => [
        'numeric' => 'Il :attribute deve essere inferiore o uguale a :value.',
        'file' => 'I kilobyte :attribute devono essere inferiori o uguali a :value.',
        'string' => 'Il :attribute deve essere inferiore o uguale ai caratteri :value.',
        'array' => 'Il :attribute non deve contenere più di :value articoli.',
    ],
    'max' => [
        'numeric' => 'Il :attribute non può essere maggiore di :max.',
        'file' => 'Il :attribute non può essere maggiore dei kilobyte :max.',
        'string' => 'Il :attribute non può essere maggiore dei caratteri :max.',
        'array' => 'Il :attribute non può contenere più di :max.',
    ],
    'mimes' => 'Il :attribute deve essere un file di tipo: :values.',
    'mimetypes' => 'Il :attribute deve essere un file di tipo: :values.',
    'min' => [
        'numeric' => 'Il :attribute deve essere almeno :min.',
        'file' => 'Il :attribute deve essere almeno :min kilobyte.',
        'string' => 'Il :attribute deve contenere almeno caratteri :min.',
        'array' => 'Il :attribute deve contenere almeno elementi :min.',
    ],
    'not_in' => 'Il :attribute selezionato non è valido.',
    'not_regex' => 'Il formato :attribute non è valido.',
    'numeric' => 'Il :attribute deve essere un numero.',
    'present' => 'Deve essere presente il campo :attribute.',
    'regex' => 'Il formato :attribute non è valido.',
    'required' => 'Il campo :attribute è obbligatorio.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando è presente :values.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando è presente :values.',
    'required_without' => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando non è presente nessuno dei :values.',
    'same' => ':attribute e :other devono corrispondere.',
    'size' => [
        'numeric' => 'Il :attribute deve essere :size.',
        'file' => 'I :attribute devono essere :size kilobyte.',
        'string' => 'I :attribute devono essere caratteri :size.',
        'array' => 'Il :attribute deve contenere elementi :size.',
    ],
    'string' => 'Il :attribute deve essere una stringa.',
    'timezone' => 'La :attribute deve essere una zona valida.',
    'unique' => 'Il :attribute è già stato preso.',
    'uploaded' => 'Impossibile caricare il :attribute.',
    'url' => 'Il formato :attribute non è valido.',

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
            'rule-name' => 'messaggio personalizzato',
        ],
        'g-recaptcha-response' => [
            'required' => 'Verifica di non essere un robot.',
            'captcha' => 'Errore captcha! riprova più tardi o contatta l\'amministratore del sito.',
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



    'accepted_if' => 'Il campo :attribute deve essere accettato quando :other è :value.',
    'ascii' => 'Il campo :attribute deve contenere solo caratteri alfanumerici e simboli a un byte.',
    'can' => 'Il campo :attribute contiene un valore non autorizzato.',
    'contains' => 'Nel campo :attribute manca un valore obbligatorio.',
    'current_password' => 'La password non è corretta.',
    'date_equals' => 'Il campo :attribute deve essere una data uguale a :date.',
    'decimal' => 'Il campo :attribute deve avere cifre decimali :decimal.',
    'declined' => 'Il campo :attribute deve essere rifiutato.',
    'declined_if' => 'Il campo :attribute deve essere rifiutato quando :other è :value.',
    'doesnt_end_with' => 'Il campo :attribute non deve terminare con uno dei seguenti: :values.',
    'doesnt_start_with' => 'Il campo :attribute non deve iniziare con uno dei seguenti: :values.',
    'ends_with' => 'Il campo :attribute deve terminare con uno dei seguenti: :values.',
    'enum' => 'L\'attributo :selezionato non è valido.',
    'extensions' => 'Il campo :attribute deve avere una delle seguenti estensioni: :values.',
    'hex_color' => 'Il campo :attribute deve essere un colore esadecimale valido.',
    'list' => 'Il campo :attribute deve essere un elenco.',
    'lowercase' => 'Il campo :attribute deve essere in minuscolo.',
    'mac_address' => 'Il campo :attribute deve essere un indirizzo MAC valido.',
    'max_digits' => 'Il campo :attribute non deve contenere più di :max cifre.',
    'min_digits' => 'Il campo :attribute deve contenere almeno :min cifre.',
    'missing' => 'Il campo :attribute deve essere mancante.',
    'missing_if' => 'Il campo :attribute deve essere mancante quando :other è :value.',
    'missing_unless' => 'Il campo :attribute deve essere mancante a meno che :other non sia :value.',
    'missing_with' => 'Il campo :attribute deve essere mancante quando :values è presente.',
    'missing_with_all' => 'Il campo :attribute deve essere mancante quando sono presenti :values.',
    'multiple_of' => 'Il campo :attribute deve essere un multiplo di :value.',
    'password' => [
        'letters' => 'Il campo :attribute deve contenere almeno una lettera.',
        'mixed' => 'Il campo :attribute deve contenere almeno una lettera maiuscola e una minuscola.',
        'numbers' => 'Il campo :attribute deve contenere almeno un numero.',
        'symbols' => 'Il campo :attribute deve contenere almeno un simbolo.',
        'uncompromised' => 'L\'attributo :attribute specificato è apparso in una fuga di dati. Scegli un :attribute diverso.',
    ],
    'present_if' => 'Il campo :attribute deve essere presente quando :other è :value.',
    'present_unless' => 'Il campo :attribute deve essere presente a meno che :other non sia :value.',
    'present_with' => 'Il campo :attribute deve essere presente quando è presente :values.',
    'present_with_all' => 'Il campo :attribute deve essere presente quando sono presenti :values.',
    'prohibited' => 'Il campo :attribute è proibito.',
    'prohibited_if' => 'Il campo :attribute è proibito quando :other è :value.',
    'prohibited_unless' => 'Il campo :attribute è proibito a meno che :other non sia in :values.',
    'prohibits' => 'Il campo :attribute impedisce la presenza di :other.',
    'required_array_keys' => 'Il campo :attribute deve contenere voci per: :values.',
    'required_if_accepted' => 'Il campo :attribute è obbligatorio quando viene accettato :other.',
    'required_if_declined' => 'Il campo :attribute è obbligatorio quando :other viene rifiutato.',
    'starts_with' => 'Il campo :attribute deve iniziare con uno dei seguenti: :values.',
    'uppercase' => 'Il campo :attribute deve essere in maiuscolo.',
    'ulid' => 'Il campo :attribute deve essere un ULID valido.',
    'uuid' => 'Il campo :attribute deve essere un UUID valido.',
];
