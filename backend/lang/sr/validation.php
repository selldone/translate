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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values is present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
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
            'rule-name' => 'прилагођена порука',
        ],
        'g-recaptcha-response' => [
            'required' => 'Молимо потврдите да нисте робот.',
            'captcha' => 'Цаптцха грешка! покушајте поново касније или контактирајте администратора сајта.',
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



    'accepted_if' => 'Поље :аттрибуте мора бити прихваћено када је :отхер :валуе.',
    'ascii' => 'Поље :аттрибуте мора да садржи само једнобајтне алфанумеричке знакове и симболе.',
    'can' => 'Поље :аттрибуте садржи неовлашћену вредност.',
    'contains' => 'У пољу :аттрибуте недостаје обавезна вредност.',
    'current_password' => 'Лозинка је нетачна.',
    'date_equals' => 'Поље :аттрибуте мора бити датум једнак :дате.',
    'decimal' => 'Поље :аттрибуте мора имати :децимала децимална места.',
    'declined' => 'Поље :аттрибуте мора бити одбијено.',
    'declined_if' => 'Поље :аттрибуте мора бити одбијено када је :отхер :валуе.',
    'doesnt_end_with' => 'Поље :аттрибуте не сме да се завршава са једним од следећих: :валуес.',
    'doesnt_start_with' => 'Поље :аттрибуте не сме да почиње са једним од следећих: :валуес.',
    'ends_with' => 'Поље :аттрибуте мора да се завршава са једним од следећих: :валуес.',
    'enum' => 'Изабрани атрибут : је неважећи.',
    'extensions' => 'Поље :аттрибуте мора имати једну од следећих екстензија: :валуес.',
    'hex_color' => 'Поље :аттрибуте мора бити важећа хексадецимална боја.',
    'list' => 'Поље :аттрибуте мора бити листа.',
    'lowercase' => 'Поље :аттрибуте мора бити малим словима.',
    'mac_address' => 'Поље :аттрибуте мора бити важећа МАЦ адреса.',
    'max_digits' => 'Поље :аттрибуте не сме имати више од :мак цифара.',
    'min_digits' => 'Поље :аттрибуте мора имати најмање :мин цифара.',
    'missing' => 'Поље :аттрибуте мора недостајати.',
    'missing_if' => 'Поље :аттрибуте мора недостајати када је :отхер :валуе.',
    'missing_unless' => 'Поље :аттрибуте мора недостајати осим ако :отхер није :валуе.',
    'missing_with' => 'Поље :аттрибуте мора недостајати када је :валуес присутно.',
    'missing_with_all' => 'Поље :аттрибуте мора недостајати када су присутне :валуе.',
    'multiple_of' => 'Поље :аттрибуте мора бити вишеструко од :валуе.',
    'password' => [
        'letters' => 'Поље :аттрибуте мора да садржи најмање једно слово.',
        'mixed' => 'Поље :аттрибуте мора да садржи најмање једно велико и једно мало слово.',
        'numbers' => 'Поље :аттрибуте мора да садржи најмање један број.',
        'symbols' => 'Поље :аттрибуте мора да садржи најмање један симбол.',
        'uncompromised' => 'Дати атрибут : појавио се у цурењу података. Молимо изаберите други :атрибут.',
    ],
    'present_if' => 'Поље :аттрибуте мора бити присутно када је :отхер :валуе.',
    'present_unless' => 'Поље :аттрибуте мора бити присутно осим ако :отхер није :валуе.',
    'present_with' => 'Поље :аттрибуте мора бити присутно када је :валуес присутно.',
    'present_with_all' => 'Поље :аттрибуте мора бити присутно када су присутне :валуе.',
    'prohibited' => 'Поље :аттрибуте је забрањено.',
    'prohibited_if' => 'Поље :аттрибуте је забрањено када је :отхер :валуе.',
    'prohibited_unless' => 'Поље :аттрибуте је забрањено осим ако :отхер није у :вредности.',
    'prohibits' => 'Поље :аттрибуте забрањује присуство :отхер.',
    'required_array_keys' => 'Поље :аттрибуте мора садржати уносе за: :валуес.',
    'required_if_accepted' => 'Поље :аттрибуте је обавезно када је :отхер прихваћено.',
    'required_if_declined' => 'Поље :аттрибуте је обавезно када је :отхер одбијено.',
    'starts_with' => 'Поље :аттрибуте мора почети са једним од следећих: :валуес.',
    'uppercase' => 'Поље :аттрибуте мора бити великим словима.',
    'ulid' => 'Поље :аттрибуте мора бити важећи УЛИД.',
    'uuid' => 'Поље :аттрибуте мора бити важећи УУИД.',
];
