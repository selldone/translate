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

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL.',
    'after' => ':attribute должен быть датой после :date.',
    'after_or_equal' => ':attribute должен быть датой после :date или равным ей.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры и тире.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен быть датой до :date.',
    'before_or_equal' => ':attribute должен быть датой, предшествующей :date или равной ей.',
    'between' => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайтами.',
        'string' => ':attribute должен находиться между символами :min и :max.',
        'array' => ':attribute должен иметь элементы от :min до :max.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed' => 'Подтверждение :attribute не совпадает.',
    'date' => ':attribute не является действительной датой.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должны быть разными.',
    'digits' => ':attribute должен быть :digits цифры.',
    'digits_between' => ':attribute должен быть между цифрами :min и :max.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => ':attribute должен быть действительным адресом электронной почты.',
    'exists' => 'Выбранный :attribute недействителен.',
    'file' => ':attribute должен быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должен быть больше :value.',
        'file' => ':attribute должен быть больше :value килобайт.',
        'string' => ':attribute должен быть больше символов :value.',
        'array' => ':attribute должен иметь более :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должен быть больше или равен :value.',
        'file' => ':attribute должен быть больше или равен :value килобайт.',
        'string' => ':attribute должен быть больше или равен :value символов.',
        'array' => ':attribute должен иметь элементы :value или более.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Выбранный :attribute недействителен.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => ':attribute должен быть целым числом.',
    'ip' => ':attribute должен быть действительным IP-адресом.',
    'ipv4' => ':attribute должен быть действительным адресом IPv4.',
    'ipv6' => ':attribute должен быть действительным адресом IPv6.',
    'json' => ':attribute должен быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => ':attribute должен быть меньше :value.',
        'file' => 'Размер :attribute должен быть меньше :value килобайт.',
        'string' => ':attribute должен быть меньше символов :value.',
        'array' => 'Элемент :attribute должен содержать меньше элементов :value.',
    ],
    'lte' => [
        'numeric' => ':attribute должен быть меньше или равен :value.',
        'file' => ':attribute должен быть меньше или равен :value килобайтам.',
        'string' => ':attribute должен быть меньше или равен :value символов.',
        'array' => ':attribute не должен содержать более :value элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше :max.',
        'file' => 'Размер :attribute не может превышать :max килобайт.',
        'string' => ':attribute не может быть больше, чем :max символов.',
        'array' => ':attribute может иметь не более :max элементов.',
    ],
    'mimes' => ':attribute должен быть файлом типа: :values.',
    'mimetypes' => ':attribute должен быть файлом типа: :values.',
    'min' => [
        'numeric' => ':attribute должен быть как минимум :min.',
        'file' => 'Размер :attribute должен быть не менее :min килобайт.',
        'string' => ':attribute должен содержать не менее :min символов.',
        'array' => ':attribute должен иметь как минимум :min элементов.',
    ],
    'not_in' => 'Выбранный :attribute недействителен.',
    'not_regex' => 'Недопустимый формат :attribute.',
    'numeric' => ':attribute должен быть числом.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Недопустимый формат :attribute.',
    'required' => 'Поле :attribute является обязательным.',
    'required_if' => 'Поле :attribute является обязательным, если :other равно :value.',
    'required_unless' => 'Поле :attribute является обязательным, если только :other не находится в :values.',
    'required_with' => 'Поле :attribute обязательно, когда присутствует :values.',
    'required_with_all' => 'Поле :attribute обязательно, когда присутствует :values.',
    'required_without' => 'Поле :attribute является обязательным, если :values отсутствует.',
    'required_without_all' => 'Поле :attribute является обязательным, если ни одно из полей :values не присутствует.',
    'same' => ':attribute и :other должны совпадать.',
    'size' => [
        'numeric' => ':attribute должен быть :size.',
        'file' => ':attribute должен быть :size килобайт.',
        'string' => ':attribute должен состоять из символов :size.',
        'array' => ':attribute должен содержать элементы :size.',
    ],
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должен быть допустимой зоной.',
    'unique' => ':attribute уже занят.',
    'uploaded' => 'Не удалось загрузить :attribute.',
    'url' => 'Недопустимый формат :attribute.',

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
            'rule-name' => 'пользовательское сообщение',
        ],
        'g-recaptcha-response' => [
            'required' => 'Пожалуйста, подтвердите, что вы не робот.',
            'captcha' => 'Ошибка капчи! повторите попытку позже или обратитесь к администратору сайта.',
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



    'accepted_if' => 'Поле :attribute должно быть принято, если :other равно :value.',
    'ascii' => 'Поле :attribute должно содержать только однобайтовые буквенно-цифровые символы и символы.',
    'can' => 'Поле :attribute содержит недопустимое значение.',
    'contains' => 'В поле :attribute отсутствует обязательное значение.',
    'current_password' => 'Пароль неверный.',
    'date_equals' => 'Поле :attribute должно содержать дату, равную :date.',
    'decimal' => 'Поле :attribute должно иметь :decimal десятичных знаков.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено, если :other равно :value.',
    'doesnt_end_with' => 'Поле :attribute не должно заканчиваться одним из следующих: :values.',
    'doesnt_start_with' => 'Поле :attribute не должно начинаться с одного из следующих: :values.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих значений: :values.',
    'enum' => 'Выбранный :attribute недействителен.',
    'extensions' => 'Поле :attribute должно иметь одно из следующих расширений: :values.',
    'hex_color' => 'Поле :attribute должно содержать допустимый шестнадцатеричный цвет.',
    'list' => 'Поле :attribute должно быть списком.',
    'lowercase' => 'Поле :attribute должно быть указано строчными буквами.',
    'mac_address' => 'Поле :attribute должно быть действительным MAC-адресом.',
    'max_digits' => 'Поле :attribute не должно содержать более :max цифр.',
    'min_digits' => 'Поле :attribute должно содержать не менее :min цифр.',
    'missing' => 'Поле :attribute должно отсутствовать.',
    'missing_if' => 'Поле :attribute должно отсутствовать, если :other равно :value.',
    'missing_unless' => 'Поле :attribute должно отсутствовать, если только :other не равно :value.',
    'missing_with' => 'Поле :attribute должно отсутствовать, если присутствует :values.',
    'missing_with_all' => 'Поле :attribute должно отсутствовать, если присутствуют :values.',
    'multiple_of' => 'Поле :attribute должно быть кратно :value.',
    'password' => [
        'letters' => 'Поле :attribute должно содержать хотя бы одну букву.',
        'mixed' => 'Поле :attribute должно содержать как минимум одну заглавную и одну строчную букву.',
        'numbers' => 'Поле :attribute должно содержать хотя бы одно число.',
        'symbols' => 'Поле :attribute должно содержать хотя бы один символ.',
        'uncompromised' => 'Данный :attribute появился в утечке данных. Пожалуйста, выберите другой :attribute.',
    ],
    'present_if' => 'Поле :attribute должно присутствовать, когда :other равно :value.',
    'present_unless' => 'Поле :attribute должно присутствовать, если только :other не равно :value.',
    'present_with' => 'Поле :attribute должно присутствовать при наличии :values.',
    'present_with_all' => 'Поле :attribute должно присутствовать при наличии :values.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, если :other равно :value.',
    'prohibited_unless' => 'Поле :attribute запрещено, если только :other не находится в :values.',
    'prohibits' => 'Поле :attribute запрещает присутствие :other.',
    'required_array_keys' => 'Поле :attribute должно содержать записи для: :values.',
    'required_if_accepted' => 'Поле :attribute является обязательным, если принимается :other.',
    'required_if_declined' => 'Поле :attribute обязательно, если :other отклонено.',
    'starts_with' => 'Поле :attribute должно начинаться с одного из следующих: :values.',
    'uppercase' => 'Поле :attribute должно быть указано заглавными буквами.',
    'ulid' => 'Поле :attribute должно быть действительным ULID.',
    'uuid' => 'Поле :attribute должно быть действительным UUID.',
];
