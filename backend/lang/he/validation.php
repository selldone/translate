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

    'accepted' => 'יש לאשר את ה-:attribute.',
    'active_url' => 'ה-:attribute אינו URL חוקי.',
    'after' => 'ה-:attribute חייב להיות תאריך אחרי :date.',
    'after_or_equal' => 'ה-:attribute חייב להיות תאריך לאחר או שווה ל-:date.',
    'alpha' => 'ה-:attribute עשוי להכיל רק אותיות.',
    'alpha_dash' => 'ה-:attribute עשוי להכיל רק אותיות, מספרים ומקפים.',
    'alpha_num' => 'ה-:attribute עשוי להכיל רק אותיות ומספרים.',
    'array' => 'ה-:attribute חייב להיות מערך.',
    'before' => 'ה-:attribute חייב להיות תאריך לפני :date.',
    'before_or_equal' => 'ה-:attribute חייב להיות תאריך לפני או שווה ל-:date.',
    'between' => [
        'numeric' => 'ה-:attribute חייב להיות בין :min ל-:max.',
        'file' => 'ה-:attribute חייב להיות בין :min ל-:max קילובייט.',
        'string' => 'ה-:attribute חייב להיות בין התווים :min ל-:max.',
        'array' => 'ה-:attribute חייב לכלול פריטים בין :min ל-:max.',
    ],
    'boolean' => 'השדה :attribute חייב להיות נכון או לא נכון.',
    'confirmed' => 'אישור ה-:attribute אינו תואם.',
    'date' => 'ה-:attribute אינו תאריך חוקי.',
    'date_format' => 'ה-:attribute אינו תואם את הפורמט :format.',
    'different' => 'ה-:attribute ו-:other חייבים להיות שונים.',
    'digits' => 'ה-:attribute חייב להיות ספרות :digits.',
    'digits_between' => 'ה-:attribute חייב להיות בין הספרות :min ל-:max.',
    'dimensions' => 'ל-:attribute יש ממדי תמונה לא חוקיים.',
    'distinct' => 'לשדה :attribute יש ערך כפול.',
    'email' => 'ה-:attribute חייבת להיות כתובת דוא"ל חוקית.',
    'exists' => 'ה-:attribute שנבחר אינו חוקי.',
    'file' => 'ה-:attribute חייב להיות קובץ.',
    'filled' => 'השדה :attribute חייב להיות בעל ערך.',
    'gt' => [
        'numeric' => 'ה-:attribute חייב להיות גדול מ-:value.',
        'file' => 'ה-:attribute חייב להיות גדול מ-:value קילובייט.',
        'string' => 'ה-:attribute חייב להיות גדול מתווי :value.',
        'array' => 'ה-:attribute חייב לכלול יותר מפריטי :value.',
    ],
    'gte' => [
        'numeric' => 'ה-:attribute חייב להיות גדול או שווה ל-:value.',
        'file' => 'ה-:attribute חייב להיות גדול או שווה ל-:value קילובייט.',
        'string' => 'ה-:attribute חייב להיות גדול או שווה לתווי :value.',
        'array' => 'ה-:attribute חייב לכלול פריטי :value או יותר.',
    ],
    'image' => 'ה-:attribute חייב להיות תמונה.',
    'in' => 'ה-:attribute שנבחר אינו חוקי.',
    'in_array' => 'השדה :attribute אינו קיים ב-:other.',
    'integer' => 'ה-:attribute חייב להיות מספר שלם.',
    'ip' => 'ה-:attribute חייבת להיות כתובת IP חוקית.',
    'ipv4' => 'ה-:attribute חייבת להיות כתובת IPv4 חוקית.',
    'ipv6' => 'ה-:attribute חייבת להיות כתובת IPv6 חוקית.',
    'json' => 'ה-:attribute חייב להיות מחרוזת JSON חוקית.',
    'lt' => [
        'numeric' => 'ה-:attribute חייב להיות קטן מ-:value.',
        'file' => 'ה-:attribute חייב להיות קטן מ-:value קילובייט.',
        'string' => 'ה-:attribute חייב להיות פחות מתווי :value.',
        'array' => 'ה-:attribute חייב לכלול פחות מפריטי :value.',
    ],
    'lte' => [
        'numeric' => 'ה-:attribute חייב להיות קטן או שווה ל-:value.',
        'file' => 'ה-:attribute חייב להיות קטן או שווה ל-:value קילובייט.',
        'string' => 'ה-:attribute חייב להיות קטן או שווה לתווי :value.',
        'array' => 'אסור ל-:attribute לכלול יותר מפריטי :value.',
    ],
    'max' => [
        'numeric' => 'ה-:attribute לא יכול להיות גדול מ-:max.',
        'file' => 'ה-:attribute לא יכול להיות גדול מ-:max קילובייט.',
        'string' => 'ה-:attribute לא יכול להיות גדול מתווי :max.',
        'array' => 'ה-:attribute לא יכול לכלול יותר מפריטי :max.',
    ],
    'mimes' => 'ה-:attribute חייב להיות קובץ מסוג: :values.',
    'mimetypes' => 'ה-:attribute חייב להיות קובץ מסוג: :values.',
    'min' => [
        'numeric' => 'ה-:attribute חייב להיות לפחות :min.',
        'file' => 'ה-:attribute חייב להיות לפחות :min קילובייט.',
        'string' => 'ה-:attribute חייב להיות לפחות תווי :min.',
        'array' => 'ה-:attribute חייב לכלול פריטי :min לפחות.',
    ],
    'not_in' => 'ה-:attribute שנבחר אינו חוקי.',
    'not_regex' => 'פורמט :attribute אינו חוקי.',
    'numeric' => 'ה-:attribute חייב להיות מספר.',
    'present' => 'השדה :attribute חייב להיות קיים.',
    'regex' => 'פורמט :attribute אינו חוקי.',
    'required' => 'השדה :attribute נדרש.',
    'required_if' => 'השדה :attribute נדרש כאשר :other הוא :value.',
    'required_unless' => 'השדה :attribute נדרש אלא אם כן :other נמצא ב-:values.',
    'required_with' => 'השדה :attribute נדרש כאשר :values קיים.',
    'required_with_all' => 'השדה :attribute נדרש כאשר :values קיים.',
    'required_without' => 'השדה :attribute נדרש כאשר :values אינו קיים.',
    'required_without_all' => 'השדה :attribute נדרש כאשר אף אחד מ-:values אינו קיים.',
    'same' => 'ה-:attribute ו-:other חייבים להתאים.',
    'size' => [
        'numeric' => 'ה-:attribute חייב להיות :size.',
        'file' => 'ה-:attribute חייב להיות :size קילובייט.',
        'string' => 'ה-:attribute חייב להיות תווי :size.',
        'array' => 'ה-:attribute חייב להכיל פריטי :size.',
    ],
    'string' => 'ה-:attribute חייב להיות מחרוזת.',
    'timezone' => 'ה-:attribute חייב להיות אזור חוקי.',
    'unique' => 'ה-:attribute כבר נלקח.',
    'uploaded' => 'ה-:attribute לא הצליח להעלות.',
    'url' => 'פורמט :attribute אינו חוקי.',

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
            'rule-name' => 'הודעה מותאמת אישית',
        ],
        'g-recaptcha-response' => [
            'required' => 'אנא ודא שאתה לא רובוט.',
            'captcha' => 'שגיאת Captcha! נסה שוב מאוחר יותר או פנה למנהל האתר.',
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



    'accepted_if' => 'יש לקבל את השדה :attribute כאשר :other הוא :value.',
    'ascii' => 'השדה :attribute חייב להכיל רק תווים וסמלים אלפאנומריים של בייט בודד.',
    'can' => 'השדה :attribute מכיל ערך לא מורשה.',
    'contains' => 'בשדה :attribute חסר ערך נדרש.',
    'current_password' => 'הסיסמה שגויה.',
    'date_equals' => 'השדה :attribute חייב להיות תאריך השווה ל-:date.',
    'decimal' => 'השדה :attribute חייב לכלול :מקומות עשרוניים עשרוניים.',
    'declined' => 'יש לדחות את השדה :attribute.',
    'declined_if' => 'יש לדחות את השדה :attribute כאשר :other הוא :value.',
    'doesnt_end_with' => 'השדה :attribute אינו יכול להסתיים באחד מהבאים: :values.',
    'doesnt_start_with' => 'השדה :attribute אינו יכול להתחיל באחד מהבאים: :values.',
    'ends_with' => 'השדה :attribute חייב להסתיים באחד מהבאים: :values.',
    'enum' => 'התכונה :נבחרה אינה חוקית.',
    'extensions' => 'השדה :attribute חייב לכלול אחת מההרחבות הבאות: :values.',
    'hex_color' => 'השדה :attribute חייב להיות צבע הקסדצימלי חוקי.',
    'list' => 'השדה :attribute חייב להיות רשימה.',
    'lowercase' => 'השדה :attribute חייב להיות באותיות קטנות.',
    'mac_address' => 'השדה :attribute חייב להיות כתובת MAC חוקית.',
    'max_digits' => 'השדה :attribute לא יכול לכלול יותר מ- :max ספרות.',
    'min_digits' => 'השדה :attribute חייב לכלול לפחות ספרות :min.',
    'missing' => 'השדה :attribute חייב להיות חסר.',
    'missing_if' => 'השדה :attribute חייב להיות חסר כאשר :other הוא :value.',
    'missing_unless' => 'השדה :attribute חייב להיות חסר אלא אם כן :other הוא :value.',
    'missing_with' => 'השדה :attribute חייב להיות חסר כאשר :values קיים.',
    'missing_with_all' => 'השדה :attribute חייב להיות חסר כאשר קיימים :values.',
    'multiple_of' => 'השדה :attribute חייב להיות כפולה של :value.',
    'password' => [
        'letters' => 'השדה :attribute חייב להכיל לפחות אות אחת.',
        'mixed' => 'השדה :attribute חייב להכיל לפחות אות אחת גדולה ואות קטנה אחת.',
        'numbers' => 'השדה :attribute חייב להכיל לפחות מספר אחד.',
        'symbols' => 'השדה :attribute חייב להכיל לפחות סמל אחד.',
        'uncompromised' => 'התכונה :הנתונה הופיעה בדליפת נתונים. אנא בחר :attribute אחר.',
    ],
    'present_if' => 'השדה :attribute חייב להיות קיים כאשר :other הוא :value.',
    'present_unless' => 'השדה :attribute חייב להיות קיים אלא אם כן :other הוא :value.',
    'present_with' => 'השדה :attribute חייב להיות קיים כאשר :values קיים.',
    'present_with_all' => 'השדה :attribute חייב להיות קיים כאשר קיימים :values.',
    'prohibited' => 'השדה :attribute אסור.',
    'prohibited_if' => 'השדה :attribute אסור כאשר :other הוא :value.',
    'prohibited_unless' => 'השדה :attribute אסור אלא אם כן :other נמצא ב-:values.',
    'prohibits' => 'השדה :attribute אוסר על :other להיות נוכח.',
    'required_array_keys' => 'השדה :attribute חייב להכיל ערכים עבור: :values.',
    'required_if_accepted' => 'השדה :attribute נדרש כאשר :other מתקבל.',
    'required_if_declined' => 'השדה :attribute נדרש כאשר :other נדחה.',
    'starts_with' => 'השדה :attribute חייב להתחיל באחד מהבאים: :values.',
    'uppercase' => 'השדה :attribute חייב להיות רישיות.',
    'ulid' => 'השדה :attribute חייב להיות ULID חוקי.',
    'uuid' => 'השדה :attribute חייב להיות UUID חוקי.',
];
