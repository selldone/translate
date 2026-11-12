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

    'accepted' => ':attribute ਨੂੰ ਸਵੀਕਾਰ ਕੀਤਾ ਜਾਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'active_url' => ':attribute ਇੱਕ ਵੈਧ URL ਨਹੀਂ ਹੈ।',
    'after' => ':attribute:date ਤੋਂ ਬਾਅਦ ਦੀ ਮਿਤੀ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'after_or_equal' => ':attribute:date ਤੋਂ ਬਾਅਦ ਜਾਂ ਇਸ ਦੇ ਬਰਾਬਰ ਦੀ ਮਿਤੀ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'alpha' => ':attribute ਵਿੱਚ ਸਿਰਫ਼ ਅੱਖਰ ਸ਼ਾਮਲ ਹੋ ਸਕਦੇ ਹਨ।',
    'alpha_dash' => ':attribute ਵਿੱਚ ਸਿਰਫ਼ ਅੱਖਰ, ਨੰਬਰ ਅਤੇ ਡੈਸ਼ ਹੋ ਸਕਦੇ ਹਨ।',
    'alpha_num' => ':attribute ਵਿੱਚ ਸਿਰਫ਼ ਅੱਖਰ ਅਤੇ ਨੰਬਰ ਹੋ ਸਕਦੇ ਹਨ।',
    'array' => ':attribute ਇੱਕ ਐਰੇ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'before' => ':attribute:date ਤੋਂ ਪਹਿਲਾਂ ਦੀ ਮਿਤੀ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'before_or_equal' => ':attribute:date ਤੋਂ ਪਹਿਲਾਂ ਜਾਂ ਬਰਾਬਰ ਦੀ ਮਿਤੀ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'between' => [
        'numeric' => ':attribute :min ਅਤੇ :max ਦੇ ਵਿਚਕਾਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'file' => ':attribute :min ਅਤੇ :max ਕਿਲੋਬਾਈਟ ਦੇ ਵਿਚਕਾਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'string' => ':attribute :min ਅਤੇ :max ਅੱਖਰਾਂ ਦੇ ਵਿਚਕਾਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'array' => ':attribute ਵਿੱਚ :min ਅਤੇ :max ਆਈਟਮਾਂ ਹੋਣੀਆਂ ਚਾਹੀਦੀਆਂ ਹਨ।',
    ],
    'boolean' => ':attribute ਖੇਤਰ ਸਹੀ ਜਾਂ ਗਲਤ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'confirmed' => ':attribute ਪੁਸ਼ਟੀ ਮੇਲ ਨਹੀਂ ਖਾਂਦੀ।',
    'date' => ':attribute ਇੱਕ ਵੈਧ ਮਿਤੀ ਨਹੀਂ ਹੈ।',
    'date_format' => ':attribute ਫਾਰਮੈਟ :format ਨਾਲ ਮੇਲ ਨਹੀਂ ਖਾਂਦਾ।',
    'different' => ':attribute ਅਤੇ :other ਵੱਖਰੇ ਹੋਣੇ ਚਾਹੀਦੇ ਹਨ।',
    'digits' => ':attribute :digits ਅੰਕ ਹੋਣੇ ਚਾਹੀਦੇ ਹਨ।',
    'digits_between' => ':attribute :min ਅਤੇ :max ਅੰਕਾਂ ਦੇ ਵਿਚਕਾਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'dimensions' => ':attribute ਵਿੱਚ ਅਵੈਧ ਚਿੱਤਰ ਮਾਪ ਹਨ।',
    'distinct' => ':attribute ਖੇਤਰ ਦਾ ਡੁਪਲੀਕੇਟ ਮੁੱਲ ਹੈ।',
    'email' => ':attribute ਇੱਕ ਵੈਧ ਈਮੇਲ ਪਤਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'exists' => 'ਚੁਣਿਆ :attribute ਅਵੈਧ ਹੈ।',
    'file' => ':attribute ਇੱਕ ਫ਼ਾਈਲ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'filled' => ':attribute ਖੇਤਰ ਦਾ ਇੱਕ ਮੁੱਲ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'gt' => [
        'numeric' => ':attribute :value ਤੋਂ ਵੱਡਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'file' => ':attribute :value ਕਿਲੋਬਾਈਟ ਤੋਂ ਵੱਧ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'string' => ':attribute :value ਅੱਖਰਾਂ ਤੋਂ ਵੱਡਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'array' => ':attribute ਵਿੱਚ :value ਤੋਂ ਵੱਧ ਆਈਟਮਾਂ ਹੋਣੀਆਂ ਚਾਹੀਦੀਆਂ ਹਨ।',
    ],
    'gte' => [
        'numeric' => ':attribute :value ਤੋਂ ਵੱਧ ਜਾਂ ਬਰਾਬਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'file' => ':attribute :value ਕਿਲੋਬਾਈਟ ਤੋਂ ਵੱਧ ਜਾਂ ਬਰਾਬਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'string' => ':attribute :value ਅੱਖਰਾਂ ਤੋਂ ਵੱਧ ਜਾਂ ਬਰਾਬਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'array' => ':attribute ਵਿੱਚ :value ਆਈਟਮਾਂ ਜਾਂ ਹੋਰ ਹੋਣੀਆਂ ਚਾਹੀਦੀਆਂ ਹਨ।',
    ],
    'image' => ':attribute ਇੱਕ ਚਿੱਤਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'in' => 'ਚੁਣਿਆ :attribute ਅਵੈਧ ਹੈ।',
    'in_array' => ':attribute ਖੇਤਰ :other ਵਿੱਚ ਮੌਜੂਦ ਨਹੀਂ ਹੈ।',
    'integer' => ':attribute ਇੱਕ ਪੂਰਨ ਅੰਕ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'ip' => ':attribute ਇੱਕ ਵੈਧ IP ਪਤਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'ipv4' => ':attribute ਇੱਕ ਵੈਧ IPv4 ਪਤਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'ipv6' => ':attribute ਇੱਕ ਵੈਧ IPv6 ਪਤਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'json' => ':attribute ਇੱਕ ਵੈਧ JSON ਸਟ੍ਰਿੰਗ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'lt' => [
        'numeric' => ':attribute :value ਤੋਂ ਘੱਟ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'file' => ':attribute :value ਕਿਲੋਬਾਈਟ ਤੋਂ ਘੱਟ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'string' => ':attribute :value ਅੱਖਰਾਂ ਤੋਂ ਘੱਟ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'array' => ':attribute ਵਿੱਚ :value ਤੋਂ ਘੱਟ ਆਈਟਮਾਂ ਹੋਣੀਆਂ ਚਾਹੀਦੀਆਂ ਹਨ।',
    ],
    'lte' => [
        'numeric' => ':attribute :value ਤੋਂ ਘੱਟ ਜਾਂ ਬਰਾਬਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'file' => ':attribute :value ਕਿਲੋਬਾਈਟ ਤੋਂ ਘੱਟ ਜਾਂ ਬਰਾਬਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'string' => ':attribute :value ਅੱਖਰਾਂ ਤੋਂ ਘੱਟ ਜਾਂ ਬਰਾਬਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'array' => ':attribute ਵਿੱਚ :value ਆਈਟਮਾਂ ਤੋਂ ਵੱਧ ਨਹੀਂ ਹੋਣੇ ਚਾਹੀਦੇ।',
    ],
    'max' => [
        'numeric' => ':attribute :max ਤੋਂ ਵੱਧ ਨਹੀਂ ਹੋ ਸਕਦਾ।',
        'file' => ':attribute :max ਕਿਲੋਬਾਈਟ ਤੋਂ ਵੱਧ ਨਹੀਂ ਹੋ ਸਕਦਾ।',
        'string' => ':attribute :max ਅੱਖਰਾਂ ਤੋਂ ਵੱਧ ਨਹੀਂ ਹੋ ਸਕਦਾ।',
        'array' => ':attribute ਵਿੱਚ :max ਤੋਂ ਵੱਧ ਆਈਟਮਾਂ ਨਹੀਂ ਹੋ ਸਕਦੀਆਂ।',
    ],
    'mimes' => ':attribute ਕਿਸਮ: :values ਦੀ ਇੱਕ ਫਾਈਲ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'mimetypes' => ':attribute ਕਿਸਮ: :values ਦੀ ਇੱਕ ਫਾਈਲ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'min' => [
        'numeric' => ':attribute ਘੱਟੋ-ਘੱਟ:min ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
        'file' => ':attribute ਘੱਟੋ-ਘੱਟ :min ਕਿਲੋਬਾਈਟ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'string' => ':attribute ਘੱਟੋ-ਘੱਟ :min ਅੱਖਰਾਂ ਦਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'array' => ':attribute ਵਿੱਚ ਘੱਟੋ-ਘੱਟ:min ਆਈਟਮਾਂ ਹੋਣੀਆਂ ਚਾਹੀਦੀਆਂ ਹਨ।',
    ],
    'not_in' => 'ਚੁਣਿਆ :attribute ਅਵੈਧ ਹੈ।',
    'not_regex' => ':attribute ਫਾਰਮੈਟ ਅਵੈਧ ਹੈ।',
    'numeric' => ':attribute ਇੱਕ ਨੰਬਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'present' => ':attribute ਖੇਤਰ ਮੌਜੂਦ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'regex' => ':attribute ਫਾਰਮੈਟ ਅਵੈਧ ਹੈ।',
    'required' => ':attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੈ।',
    'required_if' => ':attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੁੰਦੀ ਹੈ ਜਦੋਂ :other :value ਹੁੰਦਾ ਹੈ।',
    'required_unless' => ':attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੈ ਜਦੋਂ ਤੱਕ :other :values ਵਿੱਚ ਨਹੀਂ ਹੈ।',
    'required_with' => ':attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੁੰਦੀ ਹੈ ਜਦੋਂ :values ਮੌਜੂਦ ਹੁੰਦਾ ਹੈ।',
    'required_with_all' => ':attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੁੰਦੀ ਹੈ ਜਦੋਂ :values ਮੌਜੂਦ ਹੁੰਦਾ ਹੈ।',
    'required_without' => ':attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੁੰਦੀ ਹੈ ਜਦੋਂ :values ਮੌਜੂਦ ਨਹੀਂ ਹੁੰਦਾ ਹੈ।',
    'required_without_all' => ':attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੁੰਦੀ ਹੈ ਜਦੋਂ ਕੋਈ ਵੀ :values ਮੌਜੂਦ ਨਹੀਂ ਹੁੰਦਾ ਹੈ।',
    'same' => ':attribute ਅਤੇ :other ਦਾ ਮੇਲ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'size' => [
        'numeric' => ':attribute :size ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'file' => ':attribute :size ਕਿਲੋਬਾਈਟ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'string' => ':attribute :size ਅੱਖਰ ਹੋਣੇ ਚਾਹੀਦੇ ਹਨ।',
        'array' => ':attribute ਵਿੱਚ :size ਆਈਟਮਾਂ ਸ਼ਾਮਲ ਹੋਣੀਆਂ ਚਾਹੀਦੀਆਂ ਹਨ।',
    ],
    'string' => ':attribute ਇੱਕ ਸਤਰ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'timezone' => ':attribute ਇੱਕ ਵੈਧ ਜ਼ੋਨ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'unique' => ':attribute ਪਹਿਲਾਂ ਹੀ ਲਿਆ ਜਾ ਚੁੱਕਾ ਹੈ।',
    'uploaded' => ':attribute ਅੱਪਲੋਡ ਕਰਨ ਵਿੱਚ ਅਸਫਲ ਰਿਹਾ।',
    'url' => ':attribute ਫਾਰਮੈਟ ਅਵੈਧ ਹੈ।',

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
            'rule-name' => 'ਕਸਟਮ-ਸੁਨੇਹਾ',
        ],
        'g-recaptcha-response' => [
            'required' => 'ਕਿਰਪਾ ਕਰਕੇ ਪੁਸ਼ਟੀ ਕਰੋ ਕਿ ਤੁਸੀਂ ਰੋਬੋਟ ਨਹੀਂ ਹੋ।',
            'captcha' => 'ਕੈਪਚਾ ਗਲਤੀ! ਬਾਅਦ ਵਿੱਚ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ ਜਾਂ ਸਾਈਟ ਪ੍ਰਸ਼ਾਸਕ ਨਾਲ ਸੰਪਰਕ ਕਰੋ।',
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



    'accepted_if' => ': ਵਿਸ਼ੇਸ਼ਤਾ ਖੇਤਰ ਨੂੰ ਸਵੀਕਾਰ ਕੀਤਾ ਜਾਣਾ ਚਾਹੀਦਾ ਹੈ ਜਦੋਂ :other ਹੈ :value.',
    'ascii' => ':attribute ਖੇਤਰ ਵਿੱਚ ਸਿਰਫ਼ ਸਿੰਗਲ-ਬਾਈਟ ਅੱਖਰ ਅਤੇ ਚਿੰਨ੍ਹ ਹੋਣੇ ਚਾਹੀਦੇ ਹਨ।',
    'can' => ':attribute ਖੇਤਰ ਵਿੱਚ ਇੱਕ ਅਣਅਧਿਕਾਰਤ ਮੁੱਲ ਹੈ।',
    'contains' => ':attribute ਖੇਤਰ ਵਿੱਚ ਲੋੜੀਂਦਾ ਮੁੱਲ ਨਹੀਂ ਹੈ।',
    'current_password' => 'ਪਾਸਵਰਡ ਗਲਤ ਹੈ।',
    'date_equals' => ':attribute ਖੇਤਰ :date ਦੇ ਬਰਾਬਰ ਮਿਤੀ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'decimal' => ':attribute ਖੇਤਰ ਵਿੱਚ :decimal decimal ਸਥਾਨ ਹੋਣੇ ਚਾਹੀਦੇ ਹਨ।',
    'declined' => ':attribute ਖੇਤਰ ਨੂੰ ਅਸਵੀਕਾਰ ਕੀਤਾ ਜਾਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'declined_if' => ': ਵਿਸ਼ੇਸ਼ਤਾ ਖੇਤਰ ਨੂੰ ਅਸਵੀਕਾਰ ਕੀਤਾ ਜਾਣਾ ਚਾਹੀਦਾ ਹੈ ਜਦੋਂ : ਹੋਰ ਹੁੰਦਾ ਹੈ : ਮੁੱਲ।',
    'doesnt_end_with' => ': ਵਿਸ਼ੇਸ਼ਤਾ ਖੇਤਰ ਨੂੰ ਇਹਨਾਂ ਵਿੱਚੋਂ ਕਿਸੇ ਇੱਕ ਨਾਲ ਖਤਮ ਨਹੀਂ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ: :values.',
    'doesnt_start_with' => ':attribute ਖੇਤਰ ਨੂੰ ਇਹਨਾਂ ਵਿੱਚੋਂ ਕਿਸੇ ਇੱਕ ਨਾਲ ਸ਼ੁਰੂ ਨਹੀਂ ਹੋਣਾ ਚਾਹੀਦਾ: :values.',
    'ends_with' => ':attribute ਖੇਤਰ ਨੂੰ ਇਹਨਾਂ ਵਿੱਚੋਂ ਇੱਕ ਨਾਲ ਖਤਮ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ: :values.',
    'enum' => 'ਚੁਣੀ ਗਈ :ਵਿਸ਼ੇਸ਼ਤਾ ਅਵੈਧ ਹੈ।',
    'extensions' => ':attribute ਖੇਤਰ ਵਿੱਚ ਹੇਠ ਲਿਖੀਆਂ ਐਕਸਟੈਂਸ਼ਨਾਂ ਵਿੱਚੋਂ ਇੱਕ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ: :values.',
    'hex_color' => ':attribute ਖੇਤਰ ਇੱਕ ਵੈਧ ਹੈਕਸਾਡੈਸੀਮਲ ਰੰਗ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'list' => ':attribute ਖੇਤਰ ਇੱਕ ਸੂਚੀ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ।',
    'lowercase' => ':attribute ਖੇਤਰ ਲੋਅਰਕੇਸ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'mac_address' => ':attribute ਖੇਤਰ ਇੱਕ ਵੈਧ MAC ਪਤਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'max_digits' => ': ਵਿਸ਼ੇਸ਼ਤਾ ਖੇਤਰ ਵਿੱਚ : ਅਧਿਕਤਮ ਅੰਕਾਂ ਤੋਂ ਵੱਧ ਨਹੀਂ ਹੋਣੇ ਚਾਹੀਦੇ।',
    'min_digits' => ':attribute ਖੇਤਰ ਵਿੱਚ ਘੱਟੋ-ਘੱਟ :min ਅੰਕ ਹੋਣੇ ਚਾਹੀਦੇ ਹਨ।',
    'missing' => ':attribute ਖੇਤਰ ਗੁੰਮ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'missing_if' => ': ਵਿਸ਼ੇਸ਼ਤਾ ਖੇਤਰ ਲਾਜ਼ਮੀ ਤੌਰ \'ਤੇ ਗੁੰਮ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ ਜਦੋਂ : ਹੋਰ ਹੁੰਦਾ ਹੈ : ਮੁੱਲ।',
    'missing_unless' => ':attribute ਖੇਤਰ ਲਾਜ਼ਮੀ ਤੌਰ \'ਤੇ ਗੁੰਮ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ ਜਦੋਂ ਤੱਕ :other ਨਾ ਹੋਵੇ :value।',
    'missing_with' => 'ਜਦੋਂ :values ਮੌਜੂਦ ਹੋਵੇ ਤਾਂ :attribute ਖੇਤਰ ਗੁੰਮ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'missing_with_all' => 'ਜਦੋਂ :ਵੈਲਯੂਜ਼ ਮੌਜੂਦ ਹੋਣ ਤਾਂ :attribute ਖੇਤਰ ਗੁੰਮ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'multiple_of' => ':attribute ਖੇਤਰ ਨੂੰ :value ਦਾ ਮਲਟੀਪਲ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'password' => [
        'letters' => ':attribute ਖੇਤਰ ਵਿੱਚ ਘੱਟੋ-ਘੱਟ ਇੱਕ ਅੱਖਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'mixed' => ':attribute ਖੇਤਰ ਵਿੱਚ ਘੱਟੋ-ਘੱਟ ਇੱਕ ਵੱਡੇ ਅਤੇ ਇੱਕ ਛੋਟੇ ਅੱਖਰ ਹੋਣੇ ਚਾਹੀਦੇ ਹਨ।',
        'numbers' => ':attribute ਖੇਤਰ ਵਿੱਚ ਘੱਟੋ-ਘੱਟ ਇੱਕ ਨੰਬਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'symbols' => ':attribute ਖੇਤਰ ਵਿੱਚ ਘੱਟੋ-ਘੱਟ ਇੱਕ ਚਿੰਨ੍ਹ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
        'uncompromised' => 'ਦਿੱਤਾ ਗਿਆ : ਵਿਸ਼ੇਸ਼ਤਾ ਇੱਕ ਡੇਟਾ ਲੀਕ ਵਿੱਚ ਪ੍ਰਗਟ ਹੋਇਆ ਹੈ। ਕਿਰਪਾ ਕਰਕੇ ਕੋਈ ਵੱਖਰਾ : ਵਿਸ਼ੇਸ਼ਤਾ ਚੁਣੋ।',
    ],
    'present_if' => ':attribute ਖੇਤਰ ਮੌਜੂਦ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ ਜਦੋਂ :other ਹੈ :value।',
    'present_unless' => ':attribute ਖੇਤਰ ਮੌਜੂਦ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ ਜਦੋਂ ਤੱਕ :other:value ਨਾ ਹੋਵੇ।',
    'present_with' => ': ਵਿਸ਼ੇਸ਼ਤਾ ਖੇਤਰ ਮੌਜੂਦ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ ਜਦੋਂ : ਮੁੱਲ ਮੌਜੂਦ ਹੁੰਦੇ ਹਨ।',
    'present_with_all' => ': ਵਿਸ਼ੇਸ਼ਤਾ ਖੇਤਰ ਮੌਜੂਦ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ ਜਦੋਂ : ਮੁੱਲ ਮੌਜੂਦ ਹੁੰਦੇ ਹਨ।',
    'prohibited' => ':attribute ਖੇਤਰ ਦੀ ਮਨਾਹੀ ਹੈ।',
    'prohibited_if' => ':attribute ਖੇਤਰ ਦੀ ਮਨਾਹੀ ਹੈ ਜਦੋਂ :other ਹੈ :value।',
    'prohibited_unless' => ':attribute ਖੇਤਰ ਦੀ ਮਨਾਹੀ ਹੈ ਜਦੋਂ ਤੱਕ :other :values ਵਿੱਚ ਨਾ ਹੋਵੇ।',
    'prohibits' => ':attribute ਖੇਤਰ :ਹੋਰ ਨੂੰ ਮੌਜੂਦ ਹੋਣ ਤੋਂ ਰੋਕਦਾ ਹੈ।',
    'required_array_keys' => ':attribute ਖੇਤਰ ਵਿੱਚ: :values ਲਈ ਐਂਟਰੀਆਂ ਹੋਣੀਆਂ ਚਾਹੀਦੀਆਂ ਹਨ।',
    'required_if_accepted' => 'ਜਦੋਂ :ਹੋਰ ਨੂੰ ਸਵੀਕਾਰ ਕੀਤਾ ਜਾਂਦਾ ਹੈ ਤਾਂ :attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੁੰਦੀ ਹੈ।',
    'required_if_declined' => 'ਜਦੋਂ :ਹੋਰ ਨੂੰ ਅਸਵੀਕਾਰ ਕੀਤਾ ਜਾਂਦਾ ਹੈ ਤਾਂ :attribute ਖੇਤਰ ਦੀ ਲੋੜ ਹੁੰਦੀ ਹੈ।',
    'starts_with' => ':attribute ਖੇਤਰ ਨੂੰ ਇਹਨਾਂ ਵਿੱਚੋਂ ਇੱਕ ਨਾਲ ਸ਼ੁਰੂ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ: :values.',
    'uppercase' => ':attribute ਖੇਤਰ ਵੱਡੇ ਅੱਖਰਾਂ ਵਿੱਚ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'ulid' => ':attribute ਖੇਤਰ ਇੱਕ ਵੈਧ ULID ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
    'uuid' => ':attribute ਖੇਤਰ ਇੱਕ ਵੈਧ UUID ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
];
