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

    'accepted' => 'Das :attribute muss akzeptiert werden.',
    'active_url' => 'Das :attribute ist keine gültige URL.',
    'after' => 'Das :attribute muss ein Datum nach :date sein.',
    'after_or_equal' => 'Das :attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => 'Das :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Das :attribute darf nur Buchstaben, Zahlen und Bindestriche enthalten.',
    'alpha_num' => 'Das :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das :attribute muss ein Array sein.',
    'before' => 'Das :attribute muss ein Datum vor :date sein.',
    'before_or_equal' => 'Das :attribute muss ein Datum vor oder gleich :date sein.',
    'between' => [
        'numeric' => 'Das :attribute muss zwischen :min und :max liegen.',
        'file' => 'Das :attribute muss zwischen :min und :max Kilobyte liegen.',
        'string' => 'Das :attribute muss zwischen :min und :max Zeichen liegen.',
        'array' => 'Das :attribute muss zwischen :min und :max Elemente enthalten.',
    ],
    'boolean' => 'Das Feld :attribute muss wahr oder falsch sein.',
    'confirmed' => 'Die Bestätigung des Feldes :attribute stimmt nicht überein.',
    'date' => 'Das :attribute ist kein gültiges Datum.',
    'date_format' => 'Das :attribute stimmt nicht mit dem Format :format überein.',
    'different' => 'Das :attribute und :other müssen unterschiedlich sein.',
    'digits' => 'Das :attribute muss :digits Ziffern haben.',
    'digits_between' => 'Das :attribute muss zwischen :min und :max Ziffern liegen.',
    'dimensions' => 'Das :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das Feld :attribute hat einen doppelten Wert.',
    'email' => 'Das :attribute muss eine gültige E-Mail-Adresse sein.',
    'exists' => 'Das ausgewählte :attribute ist ungültig.',
    'file' => 'Das :attribute muss eine Datei sein.',
    'filled' => 'Das Feld :attribute muss einen Wert haben.',
    'gt' => [
        'numeric' => 'Das :attribute muss größer als :value sein.',
        'file' => 'Das :attribute muss größer als :value Kilobyte sein.',
        'string' => 'Das :attribute muss mehr als :value Zeichen haben.',
        'array' => 'Das :attribute muss mehr als :value Elemente haben.',
    ],
    'gte' => [
        'numeric' => 'Das :attribute muss größer oder gleich :value sein.',
        'file' => 'Das :attribute muss größer oder gleich :value Kilobyte sein.',
        'string' => 'Das :attribute muss mindestens :value Zeichen haben.',
        'array' => 'Das :attribute muss mindestens :value Elemente enthalten.',
    ],
    'image' => 'Das :attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => 'Das Feld :attribute existiert nicht in :other.',
    'integer' => 'Das :attribute muss eine ganze Zahl sein.',
    'ip' => 'Das :attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Das :attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => 'Das :attribute muss eine gültige IPv6-Adresse sein.',
    'json' => 'Das :attribute muss eine gültige JSON-Zeichenkette sein.',
    'lt' => [
        'numeric' => 'Das :attribute muss kleiner als :value sein.',
        'file' => 'Das :attribute muss kleiner als :value Kilobyte sein.',
        'string' => 'Das :attribute muss weniger als :value Zeichen haben.',
        'array' => 'Das :attribute muss weniger als :value Elemente haben.',
    ],
    'lte' => [
        'numeric' => 'Das :attribute muss kleiner oder gleich :value sein.',
        'file' => 'Das :attribute muss kleiner oder gleich :value Kilobyte sein.',
        'string' => 'Das :attribute muss kleiner oder gleich :value Zeichen haben.',
        'array' => 'Das :attribute darf nicht mehr als :value Elemente haben.',
    ],
    'max' => [
        'numeric' => 'Das :attribute darf nicht größer als :max sein.',
        'file' => 'Das :attribute darf nicht größer als :max Kilobyte sein.',
        'string' => 'Das :attribute darf nicht mehr als :max Zeichen haben.',
        'array' => 'Das :attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => 'Das :attribute muss eine Datei des Typs :values sein.',
    'mimetypes' => 'Das :attribute muss eine Datei des Typs :values sein.',
    'min' => [
        'numeric' => 'Das :attribute muss mindestens :min sein.',
        'file' => 'Das :attribute muss mindestens :min Kilobyte groß sein.',
        'string' => 'Das :attribute muss mindestens :min Zeichen lang sein.',
        'array' => 'Das :attribute muss mindestens :min Elemente haben.',
    ],
    'not_in' => 'Das ausgewählte :attribute ist ungültig.',
    'not_regex' => 'Das Format des Feldes :attribute ist ungültig.',
    'numeric' => 'Das :attribute muss eine Zahl sein.',
    'present' => 'Das Feld :attribute muss vorhanden sein.',
    'regex' => 'Das Format des Feldes :attribute ist ungültig.',
    'required' => 'Das Feld :attribute ist erforderlich.',
    'required_if' => 'Das Feld :attribute ist erforderlich, wenn :other :value ist.',
    'required_unless' => 'Das Feld :attribute ist erforderlich, es sei denn, :other ist in :values enthalten.',
    'required_with' => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all' => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden sind.',
    'required_without' => 'Das Feld :attribute ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das Feld :attribute ist erforderlich, wenn keiner der Werte :values vorhanden ist.',
    'same' => ':attribute und :other müssen übereinstimmen.',
    'size' => [
        'numeric' => 'Das :attribute muss :size sein.',
        'file' => 'Das :attribute muss :size Kilobyte groß sein.',
        'string' => 'Das :attribute muss :size Zeichen lang sein.',
        'array' => 'Das :attribute muss :size Elemente enthalten.',
    ],
    'string' => 'Das :attribute muss eine Zeichenkette sein.',
    'timezone' => 'Das :attribute muss eine gültige Zeitzone sein.',
    'unique' => 'Das :attribute ist bereits vergeben.',
    'uploaded' => 'Das :attribute konnte nicht hochgeladen werden.',
    'url' => 'Das Format des Feldes :attribute ist ungültig.',

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
            'rule-name' => 'Benutzerdefinierte Nachricht',
        ],
        'g-recaptcha-response' => [
            'required' => 'Bitte bestätigen Sie, dass Sie kein Roboter sind.',
            'captcha' => 'CAPTCHA-Fehler! Bitte versuchen Sie es später erneut oder wenden Sie sich an den Administrator.',
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



    'accepted_if' => 'Das Feld :attribute muss akzeptiert werden, wenn :other :value ist.',
    'ascii' => 'Das :attribute-Feld darf nur einbytige alphanumerische Zeichen und Symbole enthalten.',
    'can' => 'Das Feld :attribute enthält einen nicht autorisierten Wert.',
    'contains' => 'Im Feld :attribute fehlt ein erforderlicher Wert.',
    'current_password' => 'Das Passwort ist falsch.',
    'date_equals' => 'Das Feld :attribute muss ein Datum enthalten, das dem Wert :date entspricht.',
    'decimal' => 'Das Feld :attribute muss :decimal Dezimalstellen haben.',
    'declined' => 'Das Feld :attribute muss abgelehnt werden.',
    'declined_if' => 'Das Feld :attribute muss abgelehnt werden, wenn :other :value ist.',
    'doesnt_end_with' => 'Das Feld :attribute darf nicht mit einem der folgenden Werte enden: :values.',
    'doesnt_start_with' => 'Das Feld :attribute darf nicht mit einem der folgenden Werte beginnen: :values.',
    'ends_with' => 'Das Feld :attribute muss mit einem der folgenden Werte enden: :values.',
    'enum' => 'Das ausgewählte :attribute ist ungültig.',
    'extensions' => 'Das Feld :attribute muss eine der folgenden Erweiterungen haben: :values.',
    'hex_color' => 'Das Feld :attribute muss eine gültige Hexadezimalfarbe sein.',
    'list' => 'Das Feld :attribute muss eine Liste sein.',
    'lowercase' => 'Das Feld :attribute muss in Kleinbuchstaben geschrieben sein.',
    'mac_address' => 'Das Feld :attribute muss eine gültige MAC-Adresse sein.',
    'max_digits' => 'Das :attribute-Feld darf nicht mehr als :max Ziffern haben.',
    'min_digits' => 'Das :attribute-Feld muss mindestens :min Ziffern haben.',
    'missing' => 'Das Feld :attribute darf nicht vorhanden sein.',
    'missing_if' => 'Das Feld :attribute darf nicht vorhanden sein, wenn :other :value ist.',
    'missing_unless' => 'Das Feld :attribute darf nicht vorhanden sein, es sei denn, :other ist :value.',
    'missing_with' => 'Das Feld :attribute darf nicht vorhanden sein, wenn :values vorhanden ist.',
    'missing_with_all' => 'Das Feld :attribute darf nicht vorhanden sein, wenn :values vorhanden sind.',
    'multiple_of' => 'Das Feld :attribute muss ein Vielfaches von :value sein.',
    'password' => [
        'letters' => 'Das Feld :attribute muss mindestens einen Buchstaben enthalten.',
        'mixed' => 'Das Feld :attribute muss mindestens einen Groß- und einen Kleinbuchstaben enthalten.',
        'numbers' => 'Das Feld :attribute muss mindestens eine Zahl enthalten.',
        'symbols' => 'Das Feld :attribute muss mindestens ein Sonderzeichen enthalten.',
        'uncompromised' => 'Das angegebene :attribute ist in einem Datenleck aufgetaucht. Bitte wählen Sie ein anderes :attribute.',
    ],
    'present_if' => 'Das Feld :attribute muss vorhanden sein, wenn :other :value ist.',
    'present_unless' => 'Das Feld :attribute muss vorhanden sein, es sei denn, :other ist :value.',
    'present_with' => 'Das Feld :attribute muss vorhanden sein, wenn :values vorhanden ist.',
    'present_with_all' => 'Das :attribute-Feld muss vorhanden sein, wenn :values vorhanden sind.',
    'prohibited' => 'Das Feld :attribute ist nicht erlaubt.',
    'prohibited_if' => 'Das Feld :attribute ist nicht erlaubt, wenn :other :value ist.',
    'prohibited_unless' => 'Das Feld :attribute ist nicht erlaubt, sofern :other nicht in :values enthalten ist.',
    'prohibits' => 'Das Feld :attribute verhindert die Angabe von :other.',
    'required_array_keys' => 'Das Feld :attribute muss Einträge für :values enthalten.',
    'required_if_accepted' => 'Das Feld :attribute ist erforderlich, wenn :other akzeptiert wird.',
    'required_if_declined' => 'Das Feld :attribute ist erforderlich, wenn :other abgelehnt wird.',
    'starts_with' => 'Das Feld :attribute muss mit einem der folgenden Werte beginnen: :values.',
    'uppercase' => 'Das Feld :attribute muss in Großbuchstaben geschrieben sein.',
    'ulid' => 'Das Feld :attribute muss eine gültige ULID sein.',
    'uuid' => 'Das Feld :attribute muss eine gültige UUID sein.',
];
