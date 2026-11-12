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

    'accepted' => ':attribute ಅನ್ನು ಒಪ್ಪಿಕೊಳ್ಳಬೇಕು.',
    'active_url' => ':attribute ಮಾನ್ಯವಾದ URL ಅಲ್ಲ.',
    'after' => ':attribute :date ನಂತರದ ದಿನಾಂಕವಾಗಿರಬೇಕು.',
    'after_or_equal' => ':attribute ನಂತರದ ದಿನಾಂಕವಾಗಿರಬೇಕು ಅಥವಾ :date ಗೆ ಸಮನಾಗಿರಬೇಕು.',
    'alpha' => ':attribute ಅಕ್ಷರಗಳನ್ನು ಮಾತ್ರ ಹೊಂದಿರಬಹುದು.',
    'alpha_dash' => ':attribute ಅಕ್ಷರಗಳು, ಸಂಖ್ಯೆಗಳು ಮತ್ತು ಡ್ಯಾಶ್‌ಗಳನ್ನು ಮಾತ್ರ ಒಳಗೊಂಡಿರಬಹುದು.',
    'alpha_num' => ':attribute ಅಕ್ಷರಗಳು ಮತ್ತು ಸಂಖ್ಯೆಗಳನ್ನು ಮಾತ್ರ ಹೊಂದಿರಬಹುದು.',
    'array' => ':attribute ಒಂದು ಶ್ರೇಣಿಯಾಗಿರಬೇಕು.',
    'before' => ':attribute :date ಮೊದಲು ದಿನಾಂಕವಾಗಿರಬೇಕು.',
    'before_or_equal' => ':attribute ಮೊದಲು ದಿನಾಂಕವಾಗಿರಬೇಕು ಅಥವಾ :date ಗೆ ಸಮನಾಗಿರಬೇಕು.',
    'between' => [
        'numeric' => ':attribute :min ಮತ್ತು :max ನಡುವೆ ಇರಬೇಕು.',
        'file' => ':attribute :min ಮತ್ತು :max ಕಿಲೋಬೈಟ್‌ಗಳ ನಡುವೆ ಇರಬೇಕು.',
        'string' => ':attribute :min ಮತ್ತು :max ಅಕ್ಷರಗಳ ನಡುವೆ ಇರಬೇಕು.',
        'array' => ':attribute :min ಮತ್ತು :max ಐಟಂಗಳ ನಡುವೆ ಇರಬೇಕು.',
    ],
    'boolean' => ':attribute ಕ್ಷೇತ್ರವು ಸರಿ ಅಥವಾ ತಪ್ಪಾಗಿರಬೇಕು.',
    'confirmed' => ':attribute ದೃಢೀಕರಣವು ಹೊಂದಿಕೆಯಾಗುವುದಿಲ್ಲ.',
    'date' => ':attribute ಮಾನ್ಯವಾದ ದಿನಾಂಕವಲ್ಲ.',
    'date_format' => ':attribute ಸ್ವರೂಪವು :format ಗೆ ಹೊಂದಿಕೆಯಾಗುವುದಿಲ್ಲ.',
    'different' => ':attribute ಮತ್ತು :other ವಿಭಿನ್ನವಾಗಿರಬೇಕು.',
    'digits' => ':attribute :digits ಅಂಕೆಗಳಾಗಿರಬೇಕು.',
    'digits_between' => ':attribute :min ಮತ್ತು :max ಅಂಕೆಗಳ ನಡುವೆ ಇರಬೇಕು.',
    'dimensions' => ':attribute ಅಮಾನ್ಯವಾದ ಚಿತ್ರ ಆಯಾಮಗಳನ್ನು ಹೊಂದಿದೆ.',
    'distinct' => ':attribute ಕ್ಷೇತ್ರವು ನಕಲಿ ಮೌಲ್ಯವನ್ನು ಹೊಂದಿದೆ.',
    'email' => ':attribute ಮಾನ್ಯವಾದ ಇಮೇಲ್ ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'exists' => 'ಆಯ್ಕೆಮಾಡಿದ :attribute ಅಮಾನ್ಯವಾಗಿದೆ.',
    'file' => ':attribute ಫೈಲ್ ಆಗಿರಬೇಕು.',
    'filled' => ':attribute ಕ್ಷೇತ್ರವು ಮೌಲ್ಯವನ್ನು ಹೊಂದಿರಬೇಕು.',
    'gt' => [
        'numeric' => ':attribute :value ಗಿಂತ ಹೆಚ್ಚಿರಬೇಕು.',
        'file' => ':attribute :value ಕಿಲೋಬೈಟ್‌ಗಳಿಗಿಂತ ಹೆಚ್ಚಾಗಿರಬೇಕು.',
        'string' => ':attribute :value ಅಕ್ಷರಗಳಿಗಿಂತ ಹೆಚ್ಚಾಗಿರಬೇಕು.',
        'array' => ':attribute :value ಗಿಂತ ಹೆಚ್ಚಿನ ಐಟಂಗಳನ್ನು ಹೊಂದಿರಬೇಕು.',
    ],
    'gte' => [
        'numeric' => ':attribute :value ಗಿಂತ ಹೆಚ್ಚಿರಬೇಕು ಅಥವಾ ಸಮಾನವಾಗಿರಬೇಕು.',
        'file' => ':attribute :value ಕಿಲೋಬೈಟ್‌ಗಳಿಗಿಂತ ಹೆಚ್ಚಾಗಿರಬೇಕು ಅಥವಾ ಸಮಾನವಾಗಿರಬೇಕು.',
        'string' => ':attribute :value ಅಕ್ಷರಗಳಿಗಿಂತ ಹೆಚ್ಚಾಗಿರಬೇಕು ಅಥವಾ ಸಮಾನವಾಗಿರಬೇಕು.',
        'array' => ':attribute :value ಐಟಂಗಳನ್ನು ಅಥವಾ ಹೆಚ್ಚಿನದನ್ನು ಹೊಂದಿರಬೇಕು.',
    ],
    'image' => ':attribute ಒಂದು ಚಿತ್ರವಾಗಿರಬೇಕು.',
    'in' => 'ಆಯ್ಕೆಮಾಡಿದ :attribute ಅಮಾನ್ಯವಾಗಿದೆ.',
    'in_array' => ':attribute ಕ್ಷೇತ್ರವು :other ನಲ್ಲಿ ಅಸ್ತಿತ್ವದಲ್ಲಿಲ್ಲ.',
    'integer' => ':attribute ಪೂರ್ಣಾಂಕವಾಗಿರಬೇಕು.',
    'ip' => ':attribute ಮಾನ್ಯವಾದ IP ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'ipv4' => ':attribute ಮಾನ್ಯವಾದ IPv4 ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'ipv6' => ':attribute ಮಾನ್ಯವಾದ IPv6 ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'json' => ':attribute ಮಾನ್ಯವಾದ JSON ಸ್ಟ್ರಿಂಗ್ ಆಗಿರಬೇಕು.',
    'lt' => [
        'numeric' => ':attribute :value ಗಿಂತ ಕಡಿಮೆಯಿರಬೇಕು.',
        'file' => ':attribute :value ಕಿಲೋಬೈಟ್‌ಗಳಿಗಿಂತ ಕಡಿಮೆಯಿರಬೇಕು.',
        'string' => ':attribute :value ಅಕ್ಷರಗಳಿಗಿಂತ ಕಡಿಮೆ ಇರಬೇಕು.',
        'array' => ':attribute :value ಗಿಂತ ಕಡಿಮೆ ಐಟಂಗಳನ್ನು ಹೊಂದಿರಬೇಕು.',
    ],
    'lte' => [
        'numeric' => ':attribute :value ಗಿಂತ ಕಡಿಮೆ ಅಥವಾ ಸಮಾನವಾಗಿರಬೇಕು.',
        'file' => ':attribute :value ಕಿಲೋಬೈಟ್‌ಗಳಿಗಿಂತ ಕಡಿಮೆ ಅಥವಾ ಸಮಾನವಾಗಿರಬೇಕು.',
        'string' => ':attribute :value ಅಕ್ಷರಗಳಿಗಿಂತ ಕಡಿಮೆ ಅಥವಾ ಸಮಾನವಾಗಿರಬೇಕು.',
        'array' => ':attribute :value ಗಿಂತ ಹೆಚ್ಚಿನ ಐಟಂಗಳನ್ನು ಹೊಂದಿರಬಾರದು.',
    ],
    'max' => [
        'numeric' => ':attribute :max ಗಿಂತ ಹೆಚ್ಚಿಲ್ಲದಿರಬಹುದು.',
        'file' => ':attribute :max ಕಿಲೋಬೈಟ್‌ಗಳಿಗಿಂತ ಹೆಚ್ಚಿಲ್ಲದಿರಬಹುದು.',
        'string' => ':attribute :max ಅಕ್ಷರಗಳಿಗಿಂತ ಹೆಚ್ಚಿರಬಾರದು.',
        'array' => ':attribute :max ಗಿಂತ ಹೆಚ್ಚಿನ ಐಟಂಗಳನ್ನು ಹೊಂದಿಲ್ಲದಿರಬಹುದು.',
    ],
    'mimes' => ':attribute ಪ್ರಕಾರದ ಫೈಲ್ ಆಗಿರಬೇಕು: :values.',
    'mimetypes' => ':attribute ಪ್ರಕಾರದ ಫೈಲ್ ಆಗಿರಬೇಕು: :values.',
    'min' => [
        'numeric' => ':attribute ಕನಿಷ್ಠ :min ಆಗಿರಬೇಕು.',
        'file' => ':attribute ಕನಿಷ್ಠ :min ಕಿಲೋಬೈಟ್‌ಗಳಾಗಿರಬೇಕು.',
        'string' => ':attribute ಕನಿಷ್ಠ :min ಅಕ್ಷರಗಳಾಗಿರಬೇಕು.',
        'array' => ':attribute ಕನಿಷ್ಠ :min ಐಟಂಗಳನ್ನು ಹೊಂದಿರಬೇಕು.',
    ],
    'not_in' => 'ಆಯ್ಕೆಮಾಡಿದ :attribute ಅಮಾನ್ಯವಾಗಿದೆ.',
    'not_regex' => ':attribute ಫಾರ್ಮ್ಯಾಟ್ ಅಮಾನ್ಯವಾಗಿದೆ.',
    'numeric' => ':attribute ಒಂದು ಸಂಖ್ಯೆಯಾಗಿರಬೇಕು.',
    'present' => ':attribute ಕ್ಷೇತ್ರವು ಇರಬೇಕು.',
    'regex' => ':attribute ಫಾರ್ಮ್ಯಾಟ್ ಅಮಾನ್ಯವಾಗಿದೆ.',
    'required' => ':attribute ಕ್ಷೇತ್ರದ ಅಗತ್ಯವಿದೆ.',
    'required_if' => ':other :value ಆಗಿರುವಾಗ :attribute ಕ್ಷೇತ್ರವು ಅಗತ್ಯವಿದೆ.',
    'required_unless' => ':other :values ನಲ್ಲಿ ಇಲ್ಲದಿದ್ದರೆ :attribute ಕ್ಷೇತ್ರದ ಅಗತ್ಯವಿದೆ.',
    'required_with' => ':values ಇದ್ದಾಗ :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ.',
    'required_with_all' => ':values ಇದ್ದಾಗ :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ.',
    'required_without' => ':values ಇಲ್ಲದಿದ್ದಾಗ :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ.',
    'required_without_all' => ':values ಯಾವುದೂ ಇಲ್ಲದಿದ್ದಾಗ :attribute ಕ್ಷೇತ್ರದ ಅಗತ್ಯವಿದೆ.',
    'same' => ':attribute ಮತ್ತು :other ಹೊಂದಿಕೆಯಾಗಬೇಕು.',
    'size' => [
        'numeric' => ':attribute :size ಆಗಿರಬೇಕು.',
        'file' => ':attribute :size ಕಿಲೋಬೈಟ್‌ಗಳಾಗಿರಬೇಕು.',
        'string' => ':attribute :size ಅಕ್ಷರಗಳಾಗಿರಬೇಕು.',
        'array' => ':attribute :size ಐಟಂಗಳನ್ನು ಹೊಂದಿರಬೇಕು.',
    ],
    'string' => ':attribute ಸ್ಟ್ರಿಂಗ್ ಆಗಿರಬೇಕು.',
    'timezone' => ':attribute ಮಾನ್ಯವಾದ ವಲಯವಾಗಿರಬೇಕು.',
    'unique' => ':attribute ಅನ್ನು ಈಗಾಗಲೇ ತೆಗೆದುಕೊಳ್ಳಲಾಗಿದೆ.',
    'uploaded' => ':attribute ಅಪ್‌ಲೋಡ್ ಮಾಡಲು ವಿಫಲವಾಗಿದೆ.',
    'url' => ':attribute ಫಾರ್ಮ್ಯಾಟ್ ಅಮಾನ್ಯವಾಗಿದೆ.',

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
            'rule-name' => 'ಕಸ್ಟಮ್-ಸಂದೇಶ',
        ],
        'g-recaptcha-response' => [
            'required' => 'ನೀವು ರೋಬೋಟ್ ಅಲ್ಲ ಎಂಬುದನ್ನು ದಯವಿಟ್ಟು ಪರಿಶೀಲಿಸಿ.',
            'captcha' => 'ಕ್ಯಾಪ್ಚಾ ದೋಷ! ನಂತರ ಮತ್ತೆ ಪ್ರಯತ್ನಿಸಿ ಅಥವಾ ಸೈಟ್ ನಿರ್ವಾಹಕರನ್ನು ಸಂಪರ್ಕಿಸಿ.',
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



    'accepted_if' => ':attribute ಕ್ಷೇತ್ರವನ್ನು ಸ್ವೀಕರಿಸಬೇಕು :ಇತರೆ :ಮೌಲ್ಯ.',
    'ascii' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಏಕ-ಬೈಟ್ ಆಲ್ಫಾನ್ಯೂಮರಿಕ್ ಅಕ್ಷರಗಳು ಮತ್ತು ಚಿಹ್ನೆಗಳನ್ನು ಮಾತ್ರ ಹೊಂದಿರಬೇಕು.',
    'can' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಅನಧಿಕೃತ ಮೌಲ್ಯವನ್ನು ಹೊಂದಿದೆ.',
    'contains' => ':attribute ಕ್ಷೇತ್ರವು ಅಗತ್ಯವಿರುವ ಮೌಲ್ಯವನ್ನು ಕಳೆದುಕೊಂಡಿದೆ.',
    'current_password' => 'ಗುಪ್ತಪದವು ತಪ್ಪಾಗಿದೆ.',
    'date_equals' => ':attribute ಕ್ಷೇತ್ರವು :date ಗೆ ಸಮನಾದ ದಿನಾಂಕವಾಗಿರಬೇಕು.',
    'decimal' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು :ದಶಮಾಂಶ ದಶಮಾಂಶ ಸ್ಥಾನಗಳನ್ನು ಹೊಂದಿರಬೇಕು.',
    'declined' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವನ್ನು ನಿರಾಕರಿಸಬೇಕು.',
    'declined_if' => ':attribute ಕ್ಷೇತ್ರವನ್ನು ನಿರಾಕರಿಸಬೇಕು :ಇತರೆ :ಮೌಲ್ಯ.',
    'doesnt_end_with' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಈ ಕೆಳಗಿನವುಗಳಲ್ಲಿ ಒಂದನ್ನು ಕೊನೆಗೊಳಿಸಬಾರದು: :ಮೌಲ್ಯಗಳು.',
    'doesnt_start_with' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಈ ಕೆಳಗಿನವುಗಳಲ್ಲಿ ಒಂದರಿಂದ ಪ್ರಾರಂಭವಾಗಬಾರದು: :ಮೌಲ್ಯಗಳು.',
    'ends_with' => ':ಅಟ್ರಿಬ್ಯೂಟ್ ಕ್ಷೇತ್ರವು ಈ ಕೆಳಗಿನವುಗಳಲ್ಲಿ ಒಂದರಲ್ಲಿ ಕೊನೆಗೊಳ್ಳಬೇಕು: :ಮೌಲ್ಯಗಳು.',
    'enum' => 'ಆಯ್ಕೆಮಾಡಿದ :ಗುಣಲಕ್ಷಣವು ಅಮಾನ್ಯವಾಗಿದೆ.',
    'extensions' => ':attribute ಕ್ಷೇತ್ರವು ಈ ಕೆಳಗಿನ ವಿಸ್ತರಣೆಗಳಲ್ಲಿ ಒಂದನ್ನು ಹೊಂದಿರಬೇಕು: :values.',
    'hex_color' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಮಾನ್ಯವಾದ ಹೆಕ್ಸಾಡೆಸಿಮಲ್ ಬಣ್ಣವಾಗಿರಬೇಕು.',
    'list' => ':attribute ಕ್ಷೇತ್ರವು ಪಟ್ಟಿಯಾಗಿರಬೇಕು.',
    'lowercase' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಚಿಕ್ಕ ಅಕ್ಷರವಾಗಿರಬೇಕು.',
    'mac_address' => ':attribute ಕ್ಷೇತ್ರವು ಮಾನ್ಯವಾದ MAC ವಿಳಾಸವಾಗಿರಬೇಕು.',
    'max_digits' => ':attribute ಕ್ಷೇತ್ರವು :max ಅಂಕೆಗಳಿಗಿಂತ ಹೆಚ್ಚಿನದನ್ನು ಹೊಂದಿರಬಾರದು.',
    'min_digits' => ':ಅಟ್ರಿಬ್ಯೂಟ್ ಕ್ಷೇತ್ರವು ಕನಿಷ್ಟ :ನಿಮಿಷ ಅಂಕೆಗಳನ್ನು ಹೊಂದಿರಬೇಕು.',
    'missing' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ತಪ್ಪಿಹೋಗಿರಬೇಕು.',
    'missing_if' => ':attribute ಕ್ಷೇತ್ರವು ಕಾಣೆಯಾಗಬೇಕು :ಇತರೆ :ಮೌಲ್ಯ.',
    'missing_unless' => ':attribute ಕ್ಷೇತ್ರವು ಕಾಣೆಯಾಗಬೇಕು ಹೊರತು :ಇತರ :ಮೌಲ್ಯ.',
    'missing_with' => ':ಮೌಲ್ಯಗಳು ಇದ್ದಾಗ :attribute ಕ್ಷೇತ್ರವು ತಪ್ಪಿಹೋಗಿರಬೇಕು.',
    'missing_with_all' => ':ಮೌಲ್ಯಗಳು ಇರುವಾಗ :ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಕಾಣೆಯಾಗಬೇಕು.',
    'multiple_of' => ':attribute ಕ್ಷೇತ್ರವು :value ನ ಬಹುಸಂಖ್ಯೆಯಾಗಿರಬೇಕು.',
    'password' => [
        'letters' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಕನಿಷ್ಠ ಒಂದು ಅಕ್ಷರವನ್ನು ಹೊಂದಿರಬೇಕು.',
        'mixed' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಕನಿಷ್ಟ ಒಂದು ದೊಡ್ಡಕ್ಷರ ಮತ್ತು ಒಂದು ಸಣ್ಣ ಅಕ್ಷರವನ್ನು ಹೊಂದಿರಬೇಕು.',
        'numbers' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಕನಿಷ್ಠ ಒಂದು ಸಂಖ್ಯೆಯನ್ನು ಹೊಂದಿರಬೇಕು.',
        'symbols' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಕನಿಷ್ಠ ಒಂದು ಚಿಹ್ನೆಯನ್ನು ಹೊಂದಿರಬೇಕು.',
        'uncompromised' => 'ಡೇಟಾ ಸೋರಿಕೆಯಲ್ಲಿ ನೀಡಲಾದ :ಗುಣಲಕ್ಷಣ ಕಾಣಿಸಿಕೊಂಡಿದೆ. ದಯವಿಟ್ಟು ಬೇರೆ: ಗುಣಲಕ್ಷಣವನ್ನು ಆಯ್ಕೆಮಾಡಿ.',
    ],
    'present_if' => ':attribute ಕ್ಷೇತ್ರವು :ಇತರೆ :ಮೌಲ್ಯ ಎಂದಾಗ ಇರಬೇಕು.',
    'present_unless' => ':ಅಟ್ರಿಬ್ಯೂಟ್ ಕ್ಷೇತ್ರವು ಇರಬೇಕು ಹೊರತು :ಇತರ :ಮೌಲ್ಯ.',
    'present_with' => 'ಮೌಲ್ಯಗಳು ಇರುವಾಗ :ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಇರಬೇಕು.',
    'present_with_all' => 'ಮೌಲ್ಯಗಳು ಇರುವಾಗ :ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಇರಬೇಕು.',
    'prohibited' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವನ್ನು ನಿಷೇಧಿಸಲಾಗಿದೆ.',
    'prohibited_if' => ':ಅಟ್ರಿಬ್ಯೂಟ್ ಕ್ಷೇತ್ರವನ್ನು ನಿಷೇಧಿಸಲಾಗಿದೆ :ಇತರೆ :ಮೌಲ್ಯ.',
    'prohibited_unless' => ':attribute ಕ್ಷೇತ್ರವನ್ನು ನಿಷೇಧಿಸಲಾಗಿದೆ ಹೊರತು :ಇತರೆ :ಮೌಲ್ಯಗಳು.',
    'prohibits' => ':ಅಟ್ರಿಬ್ಯೂಟ್ ಕ್ಷೇತ್ರವು :ಇತರರು ಇರುವುದನ್ನು ನಿಷೇಧಿಸುತ್ತದೆ.',
    'required_array_keys' => ':attribute ಕ್ಷೇತ್ರವು: :values ಗಾಗಿ ನಮೂದುಗಳನ್ನು ಹೊಂದಿರಬೇಕು.',
    'required_if_accepted' => ':ಇತರೆ ಸ್ವೀಕರಿಸಿದಾಗ :attribute ಕ್ಷೇತ್ರ ಅಗತ್ಯವಿದೆ.',
    'required_if_declined' => ':ಇತರರನ್ನು ನಿರಾಕರಿಸಿದಾಗ :attribute ಕ್ಷೇತ್ರವು ಅಗತ್ಯವಾಗಿರುತ್ತದೆ.',
    'starts_with' => ':ಅಟ್ರಿಬ್ಯೂಟ್ ಕ್ಷೇತ್ರವು ಈ ಕೆಳಗಿನವುಗಳಲ್ಲಿ ಒಂದರಿಂದ ಪ್ರಾರಂಭವಾಗಬೇಕು: :ಮೌಲ್ಯಗಳು.',
    'uppercase' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ದೊಡ್ಡಕ್ಷರವಾಗಿರಬೇಕು.',
    'ulid' => ':attribute ಕ್ಷೇತ್ರವು ಮಾನ್ಯವಾದ ULID ಆಗಿರಬೇಕು.',
    'uuid' => ':ಗುಣಲಕ್ಷಣ ಕ್ಷೇತ್ರವು ಮಾನ್ಯವಾದ UUID ಆಗಿರಬೇಕು.',
];
