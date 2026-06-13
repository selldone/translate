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

    'accepted' => ':attribute musi zostać zaakceptowany.',
    'active_url' => ':attribute nie jest prawidłowym adresem URL.',
    'after' => ':attribute musi być datą po :date.',
    'after_or_equal' => ':attribute musi być datą po lub równą :date.',
    'alpha' => ':attribute może zawierać tylko litery.',
    'alpha_dash' => ':attribute może zawierać tylko litery, cyfry i myślniki.',
    'alpha_num' => ':attribute może zawierać tylko litery i cyfry.',
    'array' => ':attribute musi być tablicą.',
    'before' => ':attribute musi być datą przed :date.',
    'before_or_equal' => ':attribute musi być datą przed lub równą :date.',
    'between' => [
        'numeric' => ':attribute musi zawierać się w przedziale od :min do :max.',
        'file' => ':attribute musi zawierać się w przedziale od :min do :max kilobajtów.',
        'string' => ':attribute musi zawierać się między :min a :max znakami.',
        'array' => ':attribute musi zawierać pozycje od :min do :max.',
    ],
    'boolean' => 'Pole :attribute musi mieć wartość prawda lub fałsz.',
    'confirmed' => 'Potwierdzenie :attribute nie pasuje.',
    'date' => ':attribute nie jest prawidłową datą.',
    'date_format' => ':attribute nie pasuje do formatu :format.',
    'different' => ':attribute i :other muszą być różne.',
    'digits' => ':attribute musi składać się z cyfr :digits.',
    'digits_between' => ':attribute musi zawierać się między cyframi :min i :max.',
    'dimensions' => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'email' => ':attribute musi być prawidłowym adresem e-mail.',
    'exists' => 'Wybrany :attribute jest nieprawidłowy.',
    'file' => ':attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi mieć wartość.',
    'gt' => [
        'numeric' => ':attribute musi być większy niż :value.',
        'file' => ':attribute musi być większy niż :value kilobajtów.',
        'string' => ':attribute musi być większy niż znaki :value.',
        'array' => ':attribute musi zawierać więcej niż :value elementów.',
    ],
    'gte' => [
        'numeric' => ':attribute musi być większy lub równy :value.',
        'file' => ':attribute musi być większy lub równy :value kilobajtów.',
        'string' => ':attribute musi być większy lub równy :value znaków.',
        'array' => ':attribute musi zawierać elementy :value lub więcej.',
    ],
    'image' => ':attribute musi być obrazem.',
    'in' => 'Wybrany :attribute jest nieprawidłowy.',
    'in_array' => 'Pole :attribute nie istnieje w :other.',
    'integer' => ':attribute musi być liczbą całkowitą.',
    'ip' => ':attribute musi być prawidłowym adresem IP.',
    'ipv4' => ':attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => ':attribute musi być prawidłowym adresem IPv6.',
    'json' => ':attribute musi być prawidłowym ciągiem JSON.',
    'lt' => [
        'numeric' => ':attribute musi być mniejszy niż :value.',
        'file' => ':attribute musi być mniejszy niż :value kilobajtów.',
        'string' => ':attribute musi mieć mniej niż :value znaków.',
        'array' => ':attribute musi mieć mniej niż :value elementów.',
    ],
    'lte' => [
        'numeric' => ':attribute musi być mniejszy lub równy :value.',
        'file' => ':attribute musi być mniejszy lub równy :value kilobajtów.',
        'string' => ':attribute musi być mniejszy lub równy :value znaków.',
        'array' => ':attribute nie może zawierać więcej niż :value elementów.',
    ],
    'max' => [
        'numeric' => ':attribute nie może być większy niż :max.',
        'file' => ':attribute nie może być większy niż :max kilobajtów.',
        'string' => ':attribute nie może być większy niż :max znaków.',
        'array' => ':attribute nie może mieć więcej niż :max elementów.',
    ],
    'mimes' => ':attribute musi być plikiem typu: :values.',
    'mimetypes' => ':attribute musi być plikiem typu: :values.',
    'min' => [
        'numeric' => ':attribute musi wynosić co najmniej :min.',
        'file' => ':attribute musi mieć co najmniej :min kilobajtów.',
        'string' => ':attribute musi mieć co najmniej :min znaków.',
        'array' => ':attribute musi zawierać co najmniej :min elementów.',
    ],
    'not_in' => 'Wybrany :attribute jest nieprawidłowy.',
    'not_regex' => 'Format :attribute jest nieprawidłowy.',
    'numeric' => ':attribute musi być liczbą.',
    'present' => 'Pole :attribute musi być obecne.',
    'regex' => 'Format :attribute jest nieprawidłowy.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_if' => 'Pole :attribute jest wymagane, gdy :other ma wartość :value.',
    'required_unless' => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with' => 'Pole :attribute jest wymagane, gdy występuje :values.',
    'required_with_all' => 'Pole :attribute jest wymagane, gdy występuje :values.',
    'required_without' => 'Pole :attribute jest wymagane, gdy nie ma :values.',
    'required_without_all' => 'Pole :attribute jest wymagane, jeśli nie ma żadnego z :values.',
    'same' => ':attribute i :other muszą się zgadzać.',
    'size' => [
        'numeric' => ':attribute musi mieć wartość :size.',
        'file' => ':attribute musi mieć :size kilobajtów.',
        'string' => ':attribute musi składać się ze znaków :size.',
        'array' => ':attribute musi zawierać elementy :size.',
    ],
    'string' => ':attribute musi być ciągiem.',
    'timezone' => ':attribute musi być prawidłową strefą.',
    'unique' => ':attribute zostało już zajęte.',
    'uploaded' => 'Nie udało się przesłać :attribute.',
    'url' => 'Format :attribute jest nieprawidłowy.',

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
            'rule-name' => 'niestandardowy komunikat',
        ],
        'g-recaptcha-response' => [
            'required' => 'Sprawdź, czy nie jesteś robotem.',
            'captcha' => 'Błąd CAPTCHA! spróbuj ponownie później lub skontaktuj się z administratorem witryny.',
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



    'accepted_if' => 'Pole :attribute musi zostać zaakceptowane, gdy :other jest równe :value.',
    'ascii' => 'Pole :attribute może zawierać wyłącznie jednobajtowe znaki alfanumeryczne i symbole.',
    'can' => 'Pole :attribute zawiera nieautoryzowaną wartość.',
    'contains' => 'Pole :attribute nie zawiera wymaganej wartości.',
    'current_password' => 'Hasło jest nieprawidłowe.',
    'date_equals' => 'Pole :attribute musi być datą równą :date.',
    'decimal' => 'Pole :attribute musi zawierać :decimal miejsc dziesiętnych.',
    'declined' => 'Pole :attribute musi zostać odrzucone.',
    'declined_if' => 'Pole :attribute musi zostać odrzucone, gdy :other ma wartość :value.',
    'doesnt_end_with' => 'Pole :attribute nie może kończyć się żadnym z następujących elementów: :values.',
    'doesnt_start_with' => 'Pole :attribute nie może zaczynać się od żadnego z następujących elementów: :values.',
    'ends_with' => 'Pole :attribute musi kończyć się jednym z następujących elementów: :values.',
    'enum' => 'Wybrany :atrybut jest nieprawidłowy.',
    'extensions' => 'Pole :attribute musi mieć jedno z następujących rozszerzeń: :values.',
    'hex_color' => 'Pole :attribute musi zawierać prawidłowy kod szesnastkowy koloru.',
    'list' => 'Pole :attribute musi być listą.',
    'lowercase' => 'Pole :attribute musi być napisane małymi literami.',
    'mac_address' => 'Pole :attribute musi zawierać prawidłowy adres MAC.',
    'max_digits' => 'Pole :attribute nie może zawierać więcej niż :max cyfr.',
    'min_digits' => 'Pole :attribute musi mieć co najmniej :min cyfr.',
    'missing' => 'Pole :attribute musi być pominięte.',
    'missing_if' => 'Pole :attribute musi być pominięte, gdy :other ma wartość :value.',
    'missing_unless' => 'Pole :attribute musi być pominięte, chyba że :other jest polem :value.',
    'missing_with' => 'Pole :attribute musi być pominięte, jeśli obecne jest :values.',
    'missing_with_all' => 'Pole :attribute musi być pominięte, gdy obecne jest :values.',
    'multiple_of' => 'Pole :attribute musi być wielokrotnością :value.',
    'password' => [
        'letters' => 'Pole :attribute musi zawierać co najmniej jedną literę.',
        'mixed' => 'Pole :attribute musi zawierać co najmniej jedną wielką i jedną małą literę.',
        'numbers' => 'Pole :attribute musi zawierać co najmniej jedną liczbę.',
        'symbols' => 'Pole :attribute musi zawierać co najmniej jeden symbol.',
        'uncompromised' => 'Podany :attribute pojawił się w wycieku danych. Wybierz inny :attribute.',
    ],
    'present_if' => 'Pole :attribute musi być obecne, gdy :other jest równe :value.',
    'present_unless' => 'Pole :attribute musi być obecne, chyba że :other jest polem :value.',
    'present_with' => 'Pole :attribute musi być obecne, gdy obecne jest :values.',
    'present_with_all' => 'Pole :attribute musi być obecne, gdy obecne są :values.',
    'prohibited' => 'Pole :attribute jest zabronione.',
    'prohibited_if' => 'Pole :attribute jest zabronione, gdy :other ma wartość :value.',
    'prohibited_unless' => 'Pole :attribute jest zabronione, chyba że :other znajduje się w :values.',
    'prohibits' => 'Pole :attribute zabrania obecności :other.',
    'required_array_keys' => 'Pole :attribute musi zawierać wpisy dla: :values.',
    'required_if_accepted' => 'Pole :attribute jest wymagane, gdy akceptowane jest :other.',
    'required_if_declined' => 'Pole :attribute jest wymagane, gdy odrzucono pole :other.',
    'starts_with' => 'Pole :attribute musi zaczynać się od jednego z następujących elementów: :values.',
    'uppercase' => 'Pole :attribute musi być pisane wielkimi literami.',
    'ulid' => 'Pole :attribute musi zawierać prawidłowy identyfikator ULID.',
    'uuid' => 'Pole :attribute musi być prawidłowym identyfikatorem UUID.',
];
