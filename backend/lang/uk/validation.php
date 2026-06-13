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

    'accepted' => 'Необхідно прийняти атрибут :attribute.',
    'active_url' => ':attribute не є дійсною URL-адресою.',
    'after' => ':attribute має бути датою після :date.',
    'after_or_equal' => ':attribute має бути датою після або дорівнювати :date.',
    'alpha' => ':attribute може містити лише літери.',
    'alpha_dash' => ':attribute може містити лише літери, цифри та тире.',
    'alpha_num' => ':attribute може містити лише літери та цифри.',
    'array' => ':attribute має бути масивом.',
    'before' => ':attribute має бути датою перед :date.',
    'before_or_equal' => ':attribute має бути датою, що передує або дорівнює :date.',
    'between' => [
        'numeric' => ':attribute має бути між :min та :max.',
        'file' => ':attribute має бути між :min і :max кілобайтами.',
        'string' => ':attribute має бути між символами :min і :max.',
        'array' => ':attribute має містити між елементами :min і :max.',
    ],
    'boolean' => 'Поле :attribute має мати значення true або false.',
    'confirmed' => 'Підтвердження :attribute не збігається.',
    'date' => ':attribute не є дійсною датою.',
    'date_format' => ':attribute не відповідає формату :format.',
    'different' => ':attribute та :other мають бути різними.',
    'digits' => ':attribute має бути :digits цифрами.',
    'digits_between' => ':attribute має бути між :min та :max цифрами.',
    'dimensions' => ':attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'email' => ':attribute має бути дійсною електронною адресою.',
    'exists' => 'Вибраний :attribute недійсний.',
    'file' => ':attribute має бути файлом.',
    'filled' => 'Поле :attribute має містити значення.',
    'gt' => [
        'numeric' => ':attribute має бути більшим за :value.',
        'file' => ':attribute має бути більшим за :value кілобайт.',
        'string' => ':attribute має бути більшим за :value.',
        'array' => ':attribute має містити більше ніж :value елементів.',
    ],
    'gte' => [
        'numeric' => ':attribute має бути більшим або дорівнювати :value.',
        'file' => ':attribute має бути більшим або дорівнювати :value кілобайтам.',
        'string' => ':attribute має бути більше або дорівнювати символам :value.',
        'array' => ':attribute повинен містити елементи :value або більше.',
    ],
    'image' => ':attribute має бути зображенням.',
    'in' => 'Вибраний :attribute недійсний.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer' => ':attribute має бути цілим числом.',
    'ip' => ':attribute має бути дійсною IP-адресою.',
    'ipv4' => ':attribute має бути дійсною адресою IPv4.',
    'ipv6' => ':attribute має бути дійсною адресою IPv6.',
    'json' => ':attribute має бути дійсним рядком JSON.',
    'lt' => [
        'numeric' => ':attribute має бути меншим за :value.',
        'file' => ':attribute має бути меншим за :value кілобайт.',
        'string' => ':attribute має містити менше ніж :value символів.',
        'array' => ':attribute має містити менше ніж :value елементів.',
    ],
    'lte' => [
        'numeric' => ':attribute має бути меншим або дорівнювати :value.',
        'file' => ':attribute має бути меншим або дорівнювати :value кілобайтам.',
        'string' => ':attribute має містити менше або дорівнювати символам :value.',
        'array' => ':attribute не може містити більше ніж :value елементів.',
    ],
    'max' => [
        'numeric' => ':attribute не може перевищувати :max.',
        'file' => ':attribute не може бути більшим за :max кілобайт.',
        'string' => ':attribute не може містити більше :max символів.',
        'array' => ':attribute не може містити більше ніж :max елементів.',
    ],
    'mimes' => ':attribute має бути файлом типу: :values.',
    'mimetypes' => ':attribute має бути файлом типу: :values.',
    'min' => [
        'numeric' => ':attribute має бути принаймні :min.',
        'file' => ':attribute має бути не менше :min кілобайт.',
        'string' => ':attribute має містити принаймні :min символів.',
        'array' => ':attribute має містити принаймні :min елементів.',
    ],
    'not_in' => 'Вибраний :attribute недійсний.',
    'not_regex' => 'Формат :attribute недійсний.',
    'numeric' => ':attribute має бути числом.',
    'present' => 'Поле :attribute має бути присутнім.',
    'regex' => 'Формат :attribute недійсний.',
    'required' => 'Поле :attribute є обов’язковим.',
    'required_if' => 'Поле :attribute є обов’язковим, якщо :other дорівнює :value.',
    'required_unless' => 'Поле :attribute є обов’язковим, якщо :other не міститься в :values.',
    'required_with' => 'Поле :attribute є обов’язковим, якщо присутній :values.',
    'required_with_all' => 'Поле :attribute є обов’язковим, якщо присутній :values.',
    'required_without' => 'Поле :attribute є обов’язковим, якщо немає :values.',
    'required_without_all' => 'Поле :attribute є обов’язковим, якщо немає жодного з :values.',
    'same' => ':attribute та :other мають збігатися.',
    'size' => [
        'numeric' => ':attribute має бути :size.',
        'file' => ':attribute має бути :size кілобайт.',
        'string' => ':attribute має бути символами :size.',
        'array' => ':attribute повинен містити елементи :size.',
    ],
    'string' => ':attribute має бути рядком.',
    'timezone' => ':attribute має бути дійсною зоною.',
    'unique' => ':attribute вже зайнято.',
    'uploaded' => 'Не вдалося завантажити :attribute.',
    'url' => 'Формат :attribute недійсний.',

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
            'rule-name' => 'custom-message',
        ],
        'g-recaptcha-response' => [
            'required' => 'Підтвердьте, що ви не робот.',
            'captcha' => 'Помилка Captcha! спробуйте пізніше або зверніться до адміністратора сайту.',
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



    'accepted_if' => 'Поле :attribute має бути прийнятним, якщо :other є :value.',
    'ascii' => 'Поле :attribute має містити лише однобайтові буквено-цифрові символи та символи.',
    'can' => 'Поле :attribute містить недозволене значення.',
    'contains' => 'У полі :attribute відсутнє обов’язкове значення.',
    'current_password' => 'Пароль неправильний.',
    'date_equals' => 'Поле :attribute має бути датою, що дорівнює :date.',
    'decimal' => 'Поле :attribute має містити :decimal знаків після коми.',
    'declined' => 'Поле :attribute має бути відхилено.',
    'declined_if' => 'Поле :attribute має бути відхилено, якщо :other дорівнює :value.',
    'doesnt_end_with' => 'Поле :attribute не має закінчуватися одним із таких: :values.',
    'doesnt_start_with' => 'Поле :attribute не має починатися з одного з наступного: :values.',
    'ends_with' => 'Поле :attribute має закінчуватися одним із таких: :values.',
    'enum' => 'Вибраний :attribute недійсний.',
    'extensions' => 'Поле :attribute повинно мати одне з таких розширень: :values.',
    'hex_color' => 'Поле :attribute має мати дійсний шістнадцятковий колір.',
    'list' => 'Поле :attribute має бути списком.',
    'lowercase' => 'Поле :attribute має бути малим регістром.',
    'mac_address' => 'Поле :attribute має бути дійсною MAC-адресою.',
    'max_digits' => 'Поле :attribute не повинно містити більше ніж :max цифр.',
    'min_digits' => 'Поле :attribute має містити принаймні :min цифр.',
    'missing' => 'Поле :attribute має бути відсутнім.',
    'missing_if' => 'Поле :attribute має бути відсутнім, якщо :other є :value.',
    'missing_unless' => 'Поле :attribute має бути відсутнім, якщо :other не є :value.',
    'missing_with' => 'Поле :attribute має бути відсутнім, якщо присутній :values.',
    'missing_with_all' => 'Поле :attribute має бути відсутнім, якщо присутні :values.',
    'multiple_of' => 'Поле :attribute має бути кратним :value.',
    'password' => [
        'letters' => 'Поле :attribute має містити принаймні одну літеру.',
        'mixed' => 'Поле :attribute має містити принаймні одну велику та одну малу літери.',
        'numbers' => 'Поле :attribute має містити принаймні одне число.',
        'symbols' => 'Поле :attribute має містити принаймні один символ.',
        'uncompromised' => 'Даний :attribute з’явився під час витоку даних. Виберіть інший :attribute.',
    ],
    'present_if' => 'Поле :attribute має бути присутнім, коли :other є :value.',
    'present_unless' => 'Поле :attribute має бути присутнім, якщо :other не є :value.',
    'present_with' => 'Поле :attribute має бути присутнім, якщо присутній :values.',
    'present_with_all' => 'Поле :attribute має бути присутнім, якщо присутні :values.',
    'prohibited' => 'Поле :attribute заборонено.',
    'prohibited_if' => 'Поле :attribute заборонено, якщо :other дорівнює :value.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо :other не міститься в :values.',
    'prohibits' => 'Поле :attribute забороняє присутність :other.',
    'required_array_keys' => 'Поле :attribute має містити записи для: :values.',
    'required_if_accepted' => 'Поле :attribute є обов’язковим, якщо прийнято :other.',
    'required_if_declined' => 'Поле :attribute є обов’язковим, якщо відхилено :other.',
    'starts_with' => 'Поле :attribute має починатися з одного з наступного: :values.',
    'uppercase' => 'Поле :attribute має бути великим.',
    'ulid' => 'Поле :attribute має бути дійсним ULID.',
    'uuid' => 'Поле :attribute має бути дійсним UUID.',
];
