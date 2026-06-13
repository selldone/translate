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

    'accepted' => ':attribute трябва да бъде приет.',
    'active_url' => ':attribute не е валиден URL адрес.',
    'after' => ':attribute трябва да бъде дата след :date.',
    'after_or_equal' => ':attribute трябва да бъде дата след или равна на :date.',
    'alpha' => ':attribute може да съдържа само букви.',
    'alpha_dash' => ':attribute може да съдържа само букви, цифри и тирета.',
    'alpha_num' => ':attribute може да съдържа само букви и цифри.',
    'array' => ':attribute трябва да е масив.',
    'before' => ':attribute трябва да е дата преди :date.',
    'before_or_equal' => ':attribute трябва да е дата преди или равна на :date.',
    'between' => [
        'numeric' => ':attribute трябва да е между :min и :max.',
        'file' => ':attribute трябва да е между :min и :max килобайта.',
        'string' => ':attribute трябва да е между :min и :max знаци.',
        'array' => ':attribute трябва да има между :min и :max елементи.',
    ],
    'boolean' => 'Полето :attribute трябва да е true или false.',
    'confirmed' => 'Потвърждението :attribute не съвпада.',
    'date' => ':attribute не е валидна дата.',
    'date_format' => ':attribute не съответства на формата :format.',
    'different' => ':attribute и :other трябва да са различни.',
    'digits' => ':attribute трябва да бъде :digits цифри.',
    'digits_between' => ':attribute трябва да бъде между :min и :max цифри.',
    'dimensions' => ':attribute има невалидни размери на изображението.',
    'distinct' => 'Полето :attribute има дублирана стойност.',
    'email' => ':attribute трябва да е валиден имейл адрес.',
    'exists' => 'Избраният :attribute е невалиден.',
    'file' => ':attribute трябва да е файл.',
    'filled' => 'Полето :attribute трябва да има стойност.',
    'gt' => [
        'numeric' => ':attribute трябва да е по-голям от :value.',
        'file' => ':attribute трябва да е по-голям от :value килобайта.',
        'string' => 'Знаците :attribute трябва да са по-големи от :value.',
        'array' => ':attribute трябва да има повече от :value елементи.',
    ],
    'gte' => [
        'numeric' => ':attribute трябва да е по-голям или равен на :value.',
        'file' => ':attribute трябва да е по-голям или равен на :value килобайта.',
        'string' => 'Знаците :attribute трябва да са по-големи или равни на :value.',
        'array' => ':attribute трябва да има :value елементи или повече.',
    ],
    'image' => ':attribute трябва да е изображение.',
    'in' => 'Избраният :attribute е невалиден.',
    'in_array' => 'Полето :attribute не съществува в :other.',
    'integer' => ':attribute трябва да е цяло число.',
    'ip' => ':attribute трябва да е валиден IP адрес.',
    'ipv4' => ':attribute трябва да е валиден IPv4 адрес.',
    'ipv6' => ':attribute трябва да е валиден IPv6 адрес.',
    'json' => ':attribute трябва да е валиден JSON низ.',
    'lt' => [
        'numeric' => ':attribute трябва да е по-малко от :value.',
        'file' => ':attribute трябва да е по-малко от :value килобайта.',
        'string' => 'Знаците :attribute трябва да са по-малко от :value.',
        'array' => ':attribute трябва да има по-малко от :value елементи.',
    ],
    'lte' => [
        'numeric' => ':attribute трябва да е по-малък или равен на :value.',
        'file' => ':attribute трябва да е по-малък или равен на :value килобайта.',
        'string' => 'Знаците :attribute трябва да са по-малки или равни на :value.',
        'array' => ':attribute не трябва да има повече от :value елементи.',
    ],
    'max' => [
        'numeric' => ':attribute не може да бъде по-голям от :max.',
        'file' => ':attribute не може да бъде по-голям от :max килобайта.',
        'string' => ':attribute не може да бъде по-голям от :max знаци.',
        'array' => ':attribute не може да има повече от :max елементи.',
    ],
    'mimes' => ':attribute трябва да е файл от тип: :values.',
    'mimetypes' => ':attribute трябва да е файл от тип: :values.',
    'min' => [
        'numeric' => ':attribute трябва да бъде поне :min.',
        'file' => ':attribute трябва да бъде поне :min килобайта.',
        'string' => ':attribute трябва да съдържа поне :min знака.',
        'array' => ':attribute трябва да има поне :min елементи.',
    ],
    'not_in' => 'Избраният :attribute е невалиден.',
    'not_regex' => 'Форматът :attribute е невалиден.',
    'numeric' => ':attribute трябва да е число.',
    'present' => 'Полето :attribute трябва да присъства.',
    'regex' => 'Форматът :attribute е невалиден.',
    'required' => 'Полето :attribute е задължително.',
    'required_if' => 'Полето :attribute е задължително, когато :other е :value.',
    'required_unless' => 'Полето :attribute е задължително, освен ако :other е в :values.',
    'required_with' => 'Полето :attribute е задължително, когато присъства :values.',
    'required_with_all' => 'Полето :attribute е задължително, когато присъства :values.',
    'required_without' => 'Полето :attribute е задължително, когато :values не присъства.',
    'required_without_all' => 'Полето :attribute е задължително, когато не присъства нито една от :values.',
    'same' => ':attribute и :other трябва да съвпадат.',
    'size' => [
        'numeric' => ':attribute трябва да бъде :size.',
        'file' => ':attribute трябва да бъде :size килобайта.',
        'string' => ':attribute трябва да бъде :size знаци.',
        'array' => ':attribute трябва да съдържа :size елементи.',
    ],
    'string' => ':attribute трябва да е низ.',
    'timezone' => ':attribute трябва да е валидна зона.',
    'unique' => ':attribute вече е взет.',
    'uploaded' => 'Качването на :attribute не бе успешно.',
    'url' => 'Форматът :attribute е невалиден.',

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
            'rule-name' => 'персонализирано съобщение',
        ],
        'g-recaptcha-response' => [
            'required' => 'Моля, потвърдете, че не сте робот.',
            'captcha' => 'Captcha грешка! опитайте отново по-късно или се свържете с администратора на сайта.',
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



    'accepted_if' => 'Полето :attribute трябва да бъде прието, когато :other е :value.',
    'ascii' => 'Полето :attribute трябва да съдържа само еднобайтови буквено-цифрови знаци и символи.',
    'can' => 'Полето :attribute съдържа неразрешена стойност.',
    'contains' => 'В полето :attribute липсва задължителна стойност.',
    'current_password' => 'Паролата е неправилна.',
    'date_equals' => 'Полето :attribute трябва да бъде дата, равна на :date.',
    'decimal' => 'Полето :attribute трябва да има :decimal десетични знаци.',
    'declined' => 'Полето :attribute трябва да бъде отхвърлено.',
    'declined_if' => 'Полето :attribute трябва да бъде отхвърлено, когато :other е :value.',
    'doesnt_end_with' => 'Полето :attribute не трябва да завършва с едно от следните: :values.',
    'doesnt_start_with' => 'Полето :attribute не трябва да започва с едно от следните: :values.',
    'ends_with' => 'Полето :attribute трябва да завършва с едно от следните: :values.',
    'enum' => 'Избраният :attribute е невалиден.',
    'extensions' => 'Полето :attribute трябва да има едно от следните разширения: :values.',
    'hex_color' => 'Полето :attribute трябва да е с валиден шестнадесетичен цвят.',
    'list' => 'Полето :attribute трябва да бъде списък.',
    'lowercase' => 'Полето :attribute трябва да е с малки букви.',
    'mac_address' => 'Полето :attribute трябва да е валиден MAC адрес.',
    'max_digits' => 'Полето :attribute не трябва да има повече от :max цифри.',
    'min_digits' => 'Полето :attribute трябва да има поне :min цифри.',
    'missing' => 'Полето :attribute трябва да липсва.',
    'missing_if' => 'Полето :attribute трябва да липсва, когато :other е :value.',
    'missing_unless' => 'Полето :attribute трябва да липсва, освен ако :other е :value.',
    'missing_with' => 'Полето :attribute трябва да липсва, когато присъства :values.',
    'missing_with_all' => 'Полето :attribute трябва да липсва, когато присъстват :values.',
    'multiple_of' => 'Полето :attribute трябва да е кратно на :value.',
    'password' => [
        'letters' => 'Полето :attribute трябва да съдържа поне една буква.',
        'mixed' => 'Полето :attribute трябва да съдържа поне една главна и една малка буква.',
        'numbers' => 'Полето :attribute трябва да съдържа поне едно число.',
        'symbols' => 'Полето :attribute трябва да съдържа поне един символ.',
        'uncompromised' => 'Даденият :attribute се появи при изтичане на данни. Моля, изберете различен :attribute.',
    ],
    'present_if' => 'Полето :attribute трябва да присъства, когато :other е :value.',
    'present_unless' => 'Полето :attribute трябва да присъства, освен ако :other е :value.',
    'present_with' => 'Полето :attribute трябва да присъства, когато присъства :values.',
    'present_with_all' => 'Полето :attribute трябва да присъства, когато има :values.',
    'prohibited' => 'Полето :attribute е забранено.',
    'prohibited_if' => 'Полето :attribute е забранено, когато :other е :value.',
    'prohibited_unless' => 'Полето :attribute е забранено, освен ако :other е в :values.',
    'prohibits' => 'Полето :attribute забранява присъствието на :other.',
    'required_array_keys' => 'Полето :attribute трябва да съдържа записи за: :values.',
    'required_if_accepted' => 'Полето :attribute е задължително, когато се приема :other.',
    'required_if_declined' => 'Полето :attribute е задължително, когато :other е отхвърлено.',
    'starts_with' => 'Полето :attribute трябва да започва с едно от следните: :values.',
    'uppercase' => 'Полето :attribute трябва да е с главни букви.',
    'ulid' => 'Полето :attribute трябва да е валиден ULID.',
    'uuid' => 'Полето :attribute трябва да е валиден UUID.',
];
