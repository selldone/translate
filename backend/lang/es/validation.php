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

    'accepted' => 'Se debe aceptar el :attribute.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute sólo puede contener letras.',
    'alpha_dash' => 'El :attribute solo puede contener letras, números y guiones.',
    'alpha_num' => 'El :attribute sólo puede contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre caracteres :min y :max.',
        'array' => 'El :attribute debe tener entre elementos :min y :max.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación :attribute no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'different' => 'El :attribute y el :other deben ser diferentes.',
    'digits' => 'El :attribute debe tener dígitos :digits.',
    'digits_between' => 'El :attribute debe estar entre los dígitos :min y :max.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'exists' => 'El :attribute seleccionado no es válido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que los caracteres :value.',
        'array' => 'El :attribute debe tener más de elementos :value.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual que :value.',
        'file' => 'El :attribute debe ser mayor o igual a :value kilobytes.',
        'string' => 'El :attribute debe ser mayor o igual a los caracteres :value.',
        'array' => 'El :attribute debe tener elementos :value o más.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'El :attribute seleccionado no es válido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => ':attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file' => 'El :attribute debe tener menos de :value kilobytes.',
        'string' => 'El :attribute debe tener menos de caracteres :value.',
        'array' => 'El :attribute debe tener menos de elementos :value.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor o igual a :value.',
        'file' => 'El :attribute debe ser menor o igual a :value kilobytes.',
        'string' => 'El :attribute debe tener caracteres :value menores o iguales.',
        'array' => 'El :attribute no debe tener más de elementos :value.',
    ],
    'max' => [
        'numeric' => 'El :attribute no podrá ser mayor que :max.',
        'file' => 'El :attribute no podrá ser superior a los kilobytes :max.',
        'string' => 'El :attribute no puede tener más de caracteres :max.',
        'array' => 'El :attribute no puede tener más de elementos :max.',
    ],
    'mimes' => 'El :attribute debe ser un archivo del tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo del tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file' => 'El :attribute debe tener al menos :min kilobytes.',
        'string' => 'El :attribute debe tener al menos caracteres :min.',
        'array' => 'El :attribute debe tener al menos elementos :min.',
    ],
    'not_in' => 'El :attribute seleccionado no es válido.',
    'not_regex' => 'El formato :attribute no es válido.',
    'numeric' => 'El :attribute debe ser un número.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato :attribute no es válido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando no hay ninguno de :values presente.',
    'same' => 'El :attribute y el :other deben coincidir.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'string' => 'El :attribute debe contener caracteres :size.',
        'array' => 'El :attribute debe contener elementos :size.',
    ],
    'string' => ':attribute debe ser una cadena.',
    'timezone' => 'El :attribute debe ser una zona válida.',
    'unique' => 'El :attribute ya ha sido tomado.',
    'uploaded' => 'El :attribute no se pudo cargar.',
    'url' => 'The :attribute format is invalid.',

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
            'rule-name' => 'mensaje personalizado',
        ],
        'g-recaptcha-response' => [
            'required' => 'Por favor verifica que no eres un robot.',
            'captcha' => '¡Error de CAPTCHA! inténtelo de nuevo más tarde o comuníquese con el administrador del sitio.',
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



    'accepted_if' => 'El campo :attribute debe aceptarse cuando :other es :value.',
    'ascii' => 'El campo :attribute solo debe contener caracteres alfanuméricos y símbolos de un solo byte.',
    'can' => 'El campo :attribute contiene un valor no autorizado.',
    'contains' => 'Al campo :attribute le falta un valor obligatorio.',
    'current_password' => 'La contraseña es incorrecta.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'decimal' => 'El campo :attribute debe tener :decimal decimales.',
    'declined' => 'El campo :attribute debe ser rechazado.',
    'declined_if' => 'El campo :attribute debe rechazarse cuando :other es :value.',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con uno de los siguientes: :values.',
    'doesnt_start_with' => 'El campo :attribute no debe comenzar con uno de los siguientes: :values.',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El :atributo seleccionado no es válido.',
    'extensions' => 'El campo :attribute debe tener una de las siguientes extensiones: :values.',
    'hex_color' => 'El campo :attribute debe ser un color hexadecimal válido.',
    'list' => 'El campo :attribute debe ser una lista.',
    'lowercase' => 'El campo :attribute debe estar en minúsculas.',
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',
    'max_digits' => 'El campo :attribute no debe tener más de :max dígitos.',
    'min_digits' => 'El campo :attribute debe tener al menos :min dígitos.',
    'missing' => 'El campo :attribute debe faltar.',
    'missing_if' => 'El campo :attribute debe faltar cuando :other es :value.',
    'missing_unless' => 'El campo :attribute debe faltar a menos que :other sea :value.',
    'missing_with' => 'El campo :attribute debe faltar cuando :values está presente.',
    'missing_with_all' => 'El campo :attribute debe faltar cuando :values están presentes.',
    'multiple_of' => 'El campo :attribute debe ser un múltiplo de :value.',
    'password' => [
        'letters' => 'El campo :attribute debe contener al menos una letra.',
        'mixed' => 'El campo :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers' => 'El campo :attribute debe contener al menos un número.',
        'symbols' => 'El campo :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El atributo :attribute indicado ha aparecido en una fuga de datos. Elija un atributo :attribute diferente.',
    ],
    'present_if' => 'El campo :attribute debe estar presente cuando :other es :value.',
    'present_unless' => 'El campo :attribute debe estar presente a menos que :other sea :value.',
    'present_with' => 'El campo :attribute debe estar presente cuando :values está presente.',
    'present_with_all' => 'El campo :attribute debe estar presente cuando :values están presentes.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'El campo :attribute prohíbe que :other esté presente.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para: :values.',
    'required_if_accepted' => 'El campo :attribute es obligatorio cuando se acepta :other.',
    'required_if_declined' => 'El campo :attribute es obligatorio cuando se rechaza :other.',
    'starts_with' => 'El campo :attribute debe comenzar con uno de los siguientes: :values.',
    'uppercase' => 'El campo :attribute debe estar en mayúsculas.',
    'ulid' => 'El campo :attribute debe ser un ULID válido.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',
];
