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

    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute ليس URL صالحًا.',
    'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'قد يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'قد يحتوي :attribute على أحرف وأرقام وشرطات فقط.',
    'alpha_num' => 'قد يحتوي :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخًا قبل :date أو يساويه.',
    'between' => [
        'numeric' => 'يجب أن يكون :attribute بين :min و:max.',
        'file' => 'يجب أن يتراوح حجم :attribute بين :min و:max بالكيلو بايت.',
        'string' => 'يجب أن يكون :attribute بين الأحرف :min و:max.',
        'array' => 'يجب أن يحتوي :attribute على عناصر بين :min و:max.',
    ],
    'boolean' => 'يجب أن يكون الحقل :attribute صحيحًا أو خطأ.',
    'confirmed' => 'تأكيد :attribute غير متطابق.',
    'date' => ':attribute ليس تاريخًا صالحًا.',
    'date_format' => ':attribute لا يتطابق مع التنسيق :format.',
    'different' => 'يجب أن يكون :attribute و:other مختلفين.',
    'digits' => 'يجب أن يتكون :attribute من أرقام :digits.',
    'digits_between' => 'يجب أن يكون :attribute بين أرقام :min و:max.',
    'dimensions' => 'يحتوي :attribute على أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي الحقل :attribute على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
    'exists' => ':attribute المحدد غير صالح.',
    'file' => 'يجب أن يكون :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي الحقل :attribute على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
        'file' => 'يجب أن يكون :attribute أكبر من :value كيلو بايت.',
        'string' => 'يجب أن يكون :attribute أكبر من أحرف :value.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من عناصر :value.',
    ],
    'gte' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
        'file' => 'يجب أن يكون :attribute أكبر من أو يساوي :value كيلو بايت.',
        'string' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
        'array' => 'يجب أن يحتوي :attribute على عناصر :value أو أكثر.',
    ],
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => ':attribute المحدد غير صالح.',
    'in_array' => 'الحقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون :attribute عبارة عن سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => 'يجب أن يكون :attribute أقل من :value.',
        'file' => 'يجب أن يكون :attribute أقل من :value كيلو بايت.',
        'string' => 'يجب أن يكون :attribute أقل من أحرف :value.',
        'array' => 'يجب أن يحتوي :attribute على عناصر أقل من :value.',
    ],
    'lte' => [
        'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
        'file' => 'يجب أن يكون :attribute أقل من أو يساوي :value كيلو بايت.',
        'string' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
        'array' => 'يجب ألا يحتوي :attribute على أكثر من عناصر :value.',
    ],
    'max' => [
        'numeric' => 'قد لا يكون :attribute أكبر من :max.',
        'file' => 'قد لا يكون :attribute أكبر من :max كيلو بايت.',
        'string' => 'لا يجوز أن يكون :attribute أكبر من أحرف :max.',
        'array' => 'قد لا يحتوي :attribute على أكثر من عناصر :max.',
    ],
    'mimes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
    'min' => [
        'numeric' => 'يجب أن يكون :attribute :min على الأقل.',
        'file' => 'يجب أن يكون :attribute على الأقل :min كيلو بايت.',
        'string' => 'يجب أن يتكون :attribute من أحرف :min على الأقل.',
        'array' => 'يجب أن يحتوي :attribute على عناصر :min على الأقل.',
    ],
    'not_in' => ':attribute المحدد غير صالح.',
    'not_regex' => 'تنسيق :attribute غير صالح.',
    'numeric' => 'يجب أن يكون :attribute رقمًا.',
    'present' => 'يجب أن يكون الحقل :attribute موجودًا.',
    'regex' => 'تنسيق :attribute غير صالح.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_if' => 'الحقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم يكن :other موجودًا في :values.',
    'required_with' => 'الحقل :attribute مطلوب عند وجود :values.',
    'required_with_all' => 'الحقل :attribute مطلوب عند وجود :values.',
    'required_without' => 'الحقل :attribute مطلوب في حالة عدم وجود :values.',
    'required_without_all' => 'الحقل :attribute مطلوب في حالة عدم وجود أي من :values.',
    'same' => 'يجب أن يتطابق :attribute و:other.',
    'size' => [
        'numeric' => 'يجب أن يكون :attribute هو :size.',
        'file' => 'يجب أن يكون :attribute بالكيلوبايت :size.',
        'string' => 'يجب أن يتكون :attribute من أحرف :size.',
        'array' => 'يجب أن يحتوي :attribute على عناصر :size.',
    ],
    'string' => 'يجب أن يكون :attribute عبارة عن سلسلة.',
    'timezone' => 'يجب أن تكون :attribute منطقة صالحة.',
    'unique' => 'لقد تم بالفعل أخذ :attribute.',
    'uploaded' => 'فشل تحميل :attribute.',
    'url' => 'تنسيق :attribute غير صالح.',

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
            'rule-name' => 'رسالة مخصصة',
        ],
        'g-recaptcha-response' => [
            'required' => 'يرجى التحقق من أنك لست روبوتًا.',
            'captcha' => 'خطأ في كلمة التحقق! حاول مرة أخرى لاحقًا أو اتصل بمسؤول الموقع.',
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



    'accepted_if' => 'يجب قبول الحقل :attribute عندما يكون :other هو :value.',
    'ascii' => 'يجب أن يحتوي الحقل :attribute فقط على أحرف أبجدية رقمية ورموز أحادية البايت.',
    'can' => 'يحتوي الحقل :attribute على قيمة غير مصرح بها.',
    'contains' => 'حقل :attribute يفتقد قيمة مطلوبة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date_equals' => 'يجب أن يكون الحقل :attribute تاريخًا يساوي :date.',
    'decimal' => 'يجب أن يحتوي الحقل :attribute على :decimal أماكن عشرية.',
    'declined' => 'يجب رفض الحقل :attribute.',
    'declined_if' => 'يجب رفض الحقل :attribute عندما يكون :other هو :value.',
    'doesnt_end_with' => 'لا يجب أن ينتهي الحقل :attribute بواحد مما يلي: :values.',
    'doesnt_start_with' => 'لا يجب أن يبدأ الحقل :attribute بواحد مما يلي: :values.',
    'ends_with' => 'يجب أن ينتهي الحقل :attribute بواحد مما يلي: :values.',
    'enum' => 'السمة المحددة: غير صالحة.',
    'extensions' => 'يجب أن يحتوي الحقل :attribute على أحد الامتدادات التالية: :values.',
    'hex_color' => 'يجب أن يكون الحقل :attribute لونًا سداسيًا عشريًا صالحًا.',
    'list' => 'يجب أن يكون الحقل :attribute عبارة عن قائمة.',
    'lowercase' => 'يجب أن يكون الحقل :attribute بأحرف صغيرة.',
    'mac_address' => 'يجب أن يكون الحقل :attribute عنوان MAC صالحًا.',
    'max_digits' => 'لا يجب أن يحتوي الحقل :attribute على أكثر من :max أرقام.',
    'min_digits' => 'يجب أن يحتوي الحقل :attribute على :min أرقامًا على الأقل.',
    'missing' => 'يجب أن يكون الحقل :attribute مفقودًا.',
    'missing_if' => 'يجب أن يكون الحقل :attribute مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'يجب أن يكون الحقل :attribute مفقودًا ما لم يكن :other هو :value.',
    'missing_with' => 'يجب أن يكون الحقل :attribute مفقودًا عندما يكون :values موجودًا.',
    'missing_with_all' => 'يجب أن يكون الحقل :attribute مفقودًا عندما تكون :values موجودة.',
    'multiple_of' => 'يجب أن يكون الحقل :attribute مضاعفًا لـ :value.',
    'password' => [
        'letters' => 'يجب أن يحتوي الحقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي الحقل :attribute على حرف كبير واحد على الأقل وحرف صغير واحد.',
        'numbers' => 'يجب أن يحتوي الحقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي الحقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'ظهرت السمة المعطاة في تسريب بيانات. يرجى اختيار سمة أخرى.',
    ],
    'present_if' => 'يجب أن يكون الحقل :attribute موجودًا عندما يكون :other هو :value.',
    'present_unless' => 'يجب أن يكون الحقل :attribute موجودًا ما لم يكن :other هو :value.',
    'present_with' => 'يجب أن يكون الحقل :attribute موجودًا عندما يكون :values موجودًا.',
    'present_with_all' => 'يجب أن يكون الحقل :attribute موجودًا عندما تكون :values موجودة.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'يُحظر استخدام الحقل :attribute عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other موجودًا في :values.',
    'prohibits' => 'يمنع الحقل :attribute وجود :other.',
    'required_array_keys' => 'يجب أن يحتوي الحقل :attribute على إدخالات لـ: :values.',
    'required_if_accepted' => 'يعد الحقل :attribute مطلوبًا عند قبول :other.',
    'required_if_declined' => 'يعد الحقل :attribute مطلوبًا عند رفض :other.',
    'starts_with' => 'يجب أن يبدأ الحقل :attribute بواحد مما يلي: :values.',
    'uppercase' => 'يجب أن يكون الحقل :attribute بأحرف كبيرة.',
    'ulid' => 'يجب أن يكون الحقل :attribute عبارة عن ULID صالح.',
    'uuid' => 'يجب أن يكون الحقل :attribute عبارة عن UUID صالح.',
];
