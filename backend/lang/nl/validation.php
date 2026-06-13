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

    'accepted' => 'De :attribute moet worden geaccepteerd.',
    'active_url' => 'De :attribute is geen geldige URL.',
    'after' => 'De :attribute moet een datum na :date zijn.',
    'after_or_equal' => 'De :attribute moet een datum zijn na of gelijk zijn aan :date.',
    'alpha' => 'De :attribute mag alleen letters bevatten.',
    'alpha_dash' => 'De :attribute mag alleen letters, cijfers en streepjes bevatten.',
    'alpha_num' => 'De :attribute mag alleen letters en cijfers bevatten.',
    'array' => 'De :attribute moet een array zijn.',
    'before' => 'De :attribute moet een datum vóór :date zijn.',
    'before_or_equal' => 'De :attribute moet een datum vóór of gelijk aan :date zijn.',
    'between' => [
        'numeric' => 'De :attribute moet tussen :min en :max liggen.',
        'file' => 'De :attribute moet tussen :min en :max kilobytes liggen.',
        'string' => 'De :attribute moet tussen de tekens :min en :max liggen.',
        'array' => 'De :attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean' => 'Het veld :attribute moet waar of onwaar zijn.',
    'confirmed' => 'De :attribute-bevestiging komt niet overeen.',
    'date' => 'De :attribute is geen geldige datum.',
    'date_format' => 'De :attribute komt niet overeen met het formaat :format.',
    'different' => 'De :attribute en :other moeten verschillend zijn.',
    'digits' => 'De :attribute moet uit :digits-cijfers bestaan.',
    'digits_between' => 'De :attribute moet tussen de cijfers :min en :max liggen.',
    'dimensions' => 'De :attribute heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => 'Het veld :attribute heeft een dubbele waarde.',
    'email' => 'De :attribute moet een geldig e-mailadres zijn.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'file' => 'De :attribute moet een bestand zijn.',
    'filled' => 'Het veld :attribute moet een waarde hebben.',
    'gt' => [
        'numeric' => 'De :attribute moet groter zijn dan :value.',
        'file' => 'De :attribute moet groter zijn dan :value kilobytes.',
        'string' => 'De :attribute moet groter zijn dan :value-tekens.',
        'array' => 'De :attribute moet meer dan :value-items bevatten.',
    ],
    'gte' => [
        'numeric' => 'De :attribute moet groter zijn dan of gelijk zijn aan :value.',
        'file' => 'De :attribute moet groter zijn dan of gelijk zijn aan :value kilobytes.',
        'string' => 'De :attribute moet groter zijn dan of gelijk zijn aan :value-tekens.',
        'array' => 'De :attribute moet :value-items of meer bevatten.',
    ],
    'image' => 'De :attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het veld :attribute bestaat niet in :other.',
    'integer' => 'De :attribute moet een geheel getal zijn.',
    'ip' => 'De :attribute moet een geldig IP-adres zijn.',
    'ipv4' => 'De :attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => 'De :attribute moet een geldig IPv6-adres zijn.',
    'json' => 'De :attribute moet een geldige JSON-tekenreeks zijn.',
    'lt' => [
        'numeric' => 'De :attribute moet kleiner zijn dan :value.',
        'file' => 'De :attribute moet kleiner zijn dan :value kilobytes.',
        'string' => 'De :attribute moet minder dan :value-tekens bevatten.',
        'array' => 'De :attribute moet minder dan :value-items bevatten.',
    ],
    'lte' => [
        'numeric' => 'De :attribute moet kleiner zijn dan of gelijk zijn aan :value.',
        'file' => 'De :attribute moet kleiner zijn dan of gelijk zijn aan :value kilobytes.',
        'string' => 'De :attribute moet kleiner zijn dan of gelijk zijn aan :value-tekens.',
        'array' => 'De :attribute mag niet meer dan :value-items bevatten.',
    ],
    'max' => [
        'numeric' => 'De :attribute mag niet groter zijn dan :max.',
        'file' => 'De :attribute mag niet groter zijn dan :max kilobytes.',
        'string' => 'De :attribute mag niet groter zijn dan :max-tekens.',
        'array' => 'De :attribute mag niet meer dan :max-items bevatten.',
    ],
    'mimes' => 'De :attribute moet een bestand zijn van het type: :values.',
    'mimetypes' => 'De :attribute moet een bestand zijn van het type: :values.',
    'min' => [
        'numeric' => 'De :attribute moet minimaal :min zijn.',
        'file' => 'De :attribute moet minimaal :min kilobytes zijn.',
        'string' => 'De :attribute moet minimaal :min-tekens bevatten.',
        'array' => 'De :attribute moet minimaal :min-items bevatten.',
    ],
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'not_regex' => 'Het :attribute-formaat is ongeldig.',
    'numeric' => 'De :attribute moet een getal zijn.',
    'present' => 'Het veld :attribute moet aanwezig zijn.',
    'regex' => 'Het :attribute-formaat is ongeldig.',
    'required' => 'Het veld :attribute is verplicht.',
    'required_if' => 'Het veld :attribute is vereist als :other gelijk is aan :value.',
    'required_unless' => 'Het veld :attribute is vereist tenzij :other in :values staat.',
    'required_with' => 'Het veld :attribute is vereist als :values aanwezig is.',
    'required_with_all' => 'Het veld :attribute is vereist als :values aanwezig is.',
    'required_without' => 'Het veld :attribute is vereist als :values niet aanwezig is.',
    'required_without_all' => 'Het veld :attribute is vereist als geen van de waarden :values aanwezig is.',
    'same' => 'De :attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => 'De :attribute moet :size zijn.',
        'file' => 'De :attribute moet :size kilobytes zijn.',
        'string' => 'De :attribute moet uit :size-tekens bestaan.',
        'array' => 'De :attribute moet :size-items bevatten.',
    ],
    'string' => 'De :attribute moet een tekenreeks zijn.',
    'timezone' => 'De :attribute moet een geldige zone zijn.',
    'unique' => 'De :attribute is al in gebruik.',
    'uploaded' => 'Het uploaden van de :attribute is mislukt.',
    'url' => 'Het :attribute-formaat is ongeldig.',

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
            'rule-name' => 'aangepast bericht',
        ],
        'g-recaptcha-response' => [
            'required' => 'Controleer of u geen robot bent.',
            'captcha' => 'CAPTCHA foutmelding! probeer het later opnieuw of neem contact op met de sitebeheerder.',
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



    'accepted_if' => 'Het veld :attribute moet geaccepteerd worden wanneer :other gelijk is aan :value.',
    'ascii' => 'Het veld :attribute mag alleen enkelbyte alfanumerieke tekens en symbolen bevatten.',
    'can' => 'Het veld :attribute bevat een ongeautoriseerde waarde.',
    'contains' => 'Er ontbreekt een vereiste waarde in het veld :attribute.',
    'current_password' => 'Het wachtwoord is onjuist.',
    'date_equals' => 'Het veld :attribute moet een datum bevatten die gelijk is aan :date.',
    'decimal' => 'Het veld :attribute moet :decimal decimalen hebben.',
    'declined' => 'Het veld :attribute moet worden geweigerd.',
    'declined_if' => 'Het veld :attribute moet worden geweigerd als :other gelijk is aan :value.',
    'doesnt_end_with' => 'Het veld :attribute mag niet eindigen met een van de volgende waarden: :values.',
    'doesnt_start_with' => 'Het veld :attribute mag niet beginnen met een van de volgende waarden: :values.',
    'ends_with' => 'Het veld :attribute moet eindigen met een van de volgende waarden: :values.',
    'enum' => 'Het geselecteerde :attribuut is ongeldig.',
    'extensions' => 'Het veld :attribute moet een van de volgende extensies hebben: :values.',
    'hex_color' => 'Het veld :attribute moet een geldige hexadecimale kleur hebben.',
    'list' => 'Het veld :attribute moet een lijst zijn.',
    'lowercase' => 'Het veld :attribute moet in kleine letters zijn.',
    'mac_address' => 'Het veld :attribute moet een geldig MAC-adres zijn.',
    'max_digits' => 'Het veld :attribute mag niet meer dan :max cijfers bevatten.',
    'min_digits' => 'Het veld :attribute moet minimaal :min cijfers bevatten.',
    'missing' => 'Het veld :attribute mag niet ontbreken.',
    'missing_if' => 'Het veld :attribute mag ontbreken als :other gelijk is aan :value.',
    'missing_unless' => 'Het veld :attribute mag ontbreken, tenzij :other gelijk is aan :value.',
    'missing_with' => 'Het veld :attribute mag ontbreken als :values aanwezig is.',
    'missing_with_all' => 'Het veld :attribute mag ontbreken als :values aanwezig zijn.',
    'multiple_of' => 'Het veld :attribute moet een veelvoud zijn van :value.',
    'password' => [
        'letters' => 'Het veld :attribute moet minimaal één letter bevatten.',
        'mixed' => 'Het veld :attribute moet minimaal één hoofdletter en één kleine letter bevatten.',
        'numbers' => 'Het veld :attribute moet minimaal één getal bevatten.',
        'symbols' => 'Het veld :attribute moet minimaal één symbool bevatten.',
        'uncompromised' => 'Het opgegeven :attribute is verschenen in een datalek. Kies een ander :attribute.',
    ],
    'present_if' => 'Het veld :attribute moet aanwezig zijn als :other gelijk is aan :value.',
    'present_unless' => 'Het veld :attribute moet aanwezig zijn, tenzij :other gelijk is aan :value.',
    'present_with' => 'Het veld :attribute moet aanwezig zijn als :values aanwezig is.',
    'present_with_all' => 'Het veld :attribute moet aanwezig zijn als :values aanwezig zijn.',
    'prohibited' => 'Het veld :attribute is verboden.',
    'prohibited_if' => 'Het veld :attribute is verboden wanneer :other gelijk is aan :value.',
    'prohibited_unless' => 'Het veld :attribute is verboden, tenzij :other in :values staat.',
    'prohibits' => 'Het veld :attribute zorgt ervoor dat :other niet aanwezig is.',
    'required_array_keys' => 'Het veld :attribute moet de volgende waarden bevatten: :values.',
    'required_if_accepted' => 'Het veld :attribute is vereist wanneer :other wordt geaccepteerd.',
    'required_if_declined' => 'Het veld :attribute is verplicht wanneer :other is geweigerd.',
    'starts_with' => 'Het veld :attribute moet beginnen met een van de volgende waarden: :values.',
    'uppercase' => 'Het veld :attribute moet in hoofdletters zijn.',
    'ulid' => 'Het veld :attribute moet een geldige ULID zijn.',
    'uuid' => 'Het veld :attribute moet een geldige UUID zijn.',
];
