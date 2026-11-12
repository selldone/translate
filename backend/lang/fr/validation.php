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

    'accepted' => 'Le :attribute doit être accepté.',
    'active_url' => 'Le :attribute n’est pas un URL valide.',
    'after' => 'Le :attribute doit être une date postérieure à :date.',
    'after_or_equal' => 'Le :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le :attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num' => 'Le :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'Le :attribute doit être un tableau.',
    'before' => 'Le :attribute doit être une date antérieure à :date.',
    'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le :attribute doit être compris entre :min et :max.',
        'file' => 'Le :attribute doit être compris entre les kilo-octets :min et :max.',
        'string' => 'Le :attribute doit être compris entre les caractères :min et :max.',
        'array' => 'Le :attribute doit contenir entre les éléments :min et :max.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation :attribute ne correspond pas.',
    'date' => 'Le :attribute n’est pas une date valide.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'different' => 'Les :attribute et :other doivent être différents.',
    'digits' => 'Le :attribute doit être composé de chiffres :digits.',
    'digits_between' => 'Le :attribute doit être compris entre les chiffres :min et :max.',
    'dimensions' => 'Le :attribute a des dimensions d\'image non valides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => 'Le :attribute doit être une adresse e-mail valide.',
    'exists' => 'Le :attribute sélectionné n’est pas valide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'file' => 'Le :attribute doit être supérieur aux kilo-octets :value.',
        'string' => 'Le :attribute doit être supérieur aux caractères :value.',
        'array' => 'Le :attribute doit contenir plus d’éléments :value.',
    ],
    'gte' => [
        'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
        'file' => 'Le :attribute doit être supérieur ou égal aux kilo-octets :value.',
        'string' => 'Le :attribute doit être supérieur ou égal aux caractères :value.',
        'array' => 'Le :attribute doit contenir des éléments :value ou plus.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'Le :attribute sélectionné n’est pas valide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
        'string' => 'Le :attribute doit contenir moins de caractères :value.',
        'array' => 'Le :attribute doit contenir moins d’éléments que le :value.',
    ],
    'lte' => [
        'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
        'file' => 'Le :attribute doit être inférieur ou égal aux kilo-octets :value.',
        'string' => 'Le :attribute doit être inférieur ou égal aux caractères :value.',
        'array' => 'Le :attribute ne doit pas contenir plus d\'éléments :value.',
    ],
    'max' => [
        'numeric' => 'Le :attribute ne peut pas être supérieur à :max.',
        'file' => 'Le :attribute ne peut pas dépasser les kilo-octets :max.',
        'string' => 'Le :attribute ne peut pas être supérieur aux caractères :max.',
        'array' => 'Le :attribute ne peut pas contenir plus d\'éléments :max.',
    ],
    'mimes' => 'Le :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file' => 'Le :attribute doit faire au moins :min kilo-octets.',
        'string' => 'Le :attribute doit contenir au moins des caractères :min.',
        'array' => 'Le :attribute doit contenir au moins des éléments :min.',
    ],
    'not_in' => 'Le :attribute sélectionné n’est pas valide.',
    'not_regex' => 'Le format :attribute n\'est pas valide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format :attribute n\'est pas valide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_if' => 'Le champ :attribute est obligatoire lorsque :other vaut :value.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_without' => 'Le champ :attribute est obligatoire lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire lorsqu\'aucun des :values n\'est présent.',
    'same' => 'Les :attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => 'Le :attribute doit être :size.',
        'file' => 'Le :attribute doit être un kilo-octet :size.',
        'string' => 'Le :attribute doit être composé de caractères :size.',
        'array' => 'Le :attribute doit contenir des éléments :size.',
    ],
    'string' => 'Le :attribute doit être une chaîne.',
    'timezone' => 'Le :attribute doit être une zone valide.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le téléchargement du :attribute a échoué.',
    'url' => 'Le format :attribute n\'est pas valide.',

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
            'rule-name' => 'message personnalisé',
        ],
        'g-recaptcha-response' => [
            'required' => 'Veuillez vérifier que vous n\'êtes pas un robot.',
            'captcha' => 'Erreur CAPTCHA! réessayez plus tard ou contactez l\'administrateur du site.',
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



    'accepted_if' => 'Le champ :attribute doit être accepté lorsque :other est :value.',
    'ascii' => 'Le champ :attribute ne doit contenir que des caractères alphanumériques et des symboles sur un octet.',
    'can' => 'Le champ :attribute contient une valeur non autorisée.',
    'contains' => 'Le champ :attribute manque d\'une valeur obligatoire.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'decimal' => 'Le champ :attribute doit avoir :decimal décimales.',
    'declined' => 'Le champ :attribute doit être refusé.',
    'declined_if' => 'Le champ :attribute doit être refusé lorsque :other est :value.',
    'doesnt_end_with' => 'Le champ :attribute ne doit pas se terminer par l’un des éléments suivants : :values.',
    'doesnt_start_with' => 'Le champ :attribute ne doit pas commencer par l’un des éléments suivants : :values.',
    'ends_with' => 'Le champ :attribute doit se terminer par l’un des éléments suivants : :values.',
    'enum' => 'L\'attribut : sélectionné n\'est pas valide.',
    'extensions' => 'Le champ :attribute doit avoir l\'une des extensions suivantes : :values.',
    'hex_color' => 'Le champ :attribute doit être une couleur hexadécimale valide.',
    'list' => 'Le champ :attribute doit être une liste.',
    'lowercase' => 'Le champ :attribute doit être en minuscules.',
    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
    'max_digits' => 'Le champ :attribute ne doit pas contenir plus de :max chiffres.',
    'min_digits' => 'Le champ :attribute doit avoir au moins :min chiffres.',
    'missing' => 'Le champ :attribute doit être manquant.',
    'missing_if' => 'Le champ :attribute doit être manquant lorsque :other est :value.',
    'missing_unless' => 'Le champ :attribute doit être manquant sauf si :other est :value.',
    'missing_with' => 'Le champ :attribute doit être manquant lorsque :values est présent.',
    'missing_with_all' => 'Le champ :attribute doit être manquant lorsque :values est présent.',
    'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
    'password' => [
        'letters' => 'Le champ :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le champ :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'Le champ :attribute doit contenir au moins un nombre.',
        'symbols' => 'Le champ :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'L\'attribut :attribute donné est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present_if' => 'Le champ :attribute doit être présent lorsque :other est :value.',
    'present_unless' => 'Le champ :attribute doit être présent sauf si :other est :value.',
    'present_with' => 'Le champ :attribute doit être présent lorsque :values est présent.',
    'present_with_all' => 'Le champ :attribute doit être présent lorsque :values est présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other est dans :values.',
    'prohibits' => 'Le champ :attribute interdit à :other d\'être présent.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour : :values.',
    'required_if_accepted' => 'Le champ :attribute est obligatoire lorsque :other est accepté.',
    'required_if_declined' => 'Le champ :attribute est obligatoire lorsque :other est refusé.',
    'starts_with' => 'Le champ :attribute doit commencer par l’un des éléments suivants : :values.',
    'uppercase' => 'Le champ :attribute doit être en majuscules.',
    'ulid' => 'Le champ :attribute doit être un ULID valide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide.',
];
