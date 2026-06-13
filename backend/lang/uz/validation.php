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

    'accepted' => ':attribute qabul qilinishi kerak.',
    'active_url' => ':attribute haqiqiy URL emas.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => ':attribute sanasi :date sanasidan keyin yoki unga teng bo‘lishi kerak.',
    'alpha' => ':attribute faqat harflardan iborat bo\'lishi mumkin.',
    'alpha_dash' => ':attribute faqat harflar, raqamlar va chiziqlardan iborat bo\'lishi mumkin.',
    'alpha_num' => ':attribute faqat harflar va raqamlardan iborat bo\'lishi mumkin.',
    'array' => ':attribute massiv bo\'lishi kerak.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => ':attribute :min va :max orasida bo\'lishi kerak.',
        'file' => ':attribute :min va :max kilobaytlar orasida bo\'lishi kerak.',
        'string' => ':attribute :min va :max belgilar orasida bo\'lishi kerak.',
        'array' => ':attribute :min va :max orasida bo\'lishi kerak.',
    ],
    'boolean' => ':attribute maydoni rost yoki yolgʻon boʻlishi kerak.',
    'confirmed' => ':attribute tasdiqlash mos kelmaydi.',
    'date' => ':attribute haqiqiy sana emas.',
    'date_format' => ':attribute :format formatiga mos kelmaydi.',
    'different' => ':attribute va :other boshqacha bo\'lishi kerak.',
    'digits' => ':attribute :digits raqamlari bo\'lishi kerak.',
    'digits_between' => ':attribute :min va :max raqamlari orasida bo\'lishi kerak.',
    'dimensions' => ':attribute rasm o‘lchamlari yaroqsiz.',
    'distinct' => ':attribute maydonida takroriy qiymat mavjud.',
    'email' => ':attribute yaroqli elektron pochta manzili boʻlishi kerak.',
    'exists' => 'Tanlangan :attribute yaroqsiz.',
    'file' => ':attribute fayl bo\'lishi kerak.',
    'filled' => ':attribute maydonida qiymat bo\'lishi kerak.',
    'gt' => [
        'numeric' => ':attribute :value dan katta bo‘lishi kerak.',
        'file' => ':attribute :value kilobaytdan katta bo\'lishi kerak.',
        'string' => ':attribute :value belgilaridan kattaroq bo‘lishi kerak.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute :value dan katta yoki teng bo\'lishi kerak.',
        'file' => ':attribute :value kilobaytdan katta yoki teng bo\'lishi kerak.',
        'string' => ':attribute :value belgilaridan katta yoki teng bo‘lishi kerak.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute rasm bo\'lishi kerak.',
    'in' => 'Tanlangan :attribute yaroqsiz.',
    'in_array' => ':attribute maydoni :other ichida mavjud emas.',
    'integer' => ':attribute butun son bo\'lishi kerak.',
    'ip' => ':attribute yaroqli IP manzili bo‘lishi kerak.',
    'ipv4' => ':attribute yaroqli IPv4 manzili boʻlishi kerak.',
    'ipv6' => ':attribute yaroqli IPv6 manzili boʻlishi kerak.',
    'json' => ':attribute yaroqli JSON qatori boʻlishi kerak.',
    'lt' => [
        'numeric' => ':attribute :value dan kam bo\'lishi kerak.',
        'file' => ':attribute :value kilobaytdan kam bo\'lishi kerak.',
        'string' => ':attribute :value belgilaridan kam bo‘lishi kerak.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute :value dan kichik yoki teng bo\'lishi kerak.',
        'file' => ':attribute :value kilobaytdan kam yoki unga teng bo\'lishi kerak.',
        'string' => ':attribute :value belgilaridan kam yoki teng bo‘lishi kerak.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute :max dan katta bo\'lmasligi mumkin.',
        'file' => ':attribute :max kilobaytdan oshmasligi mumkin.',
        'string' => ':attribute :max belgilaridan oshmasligi mumkin.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute quyidagi turdagi fayl bo\'lishi kerak: :values.',
    'mimetypes' => ':attribute quyidagi turdagi fayl bo\'lishi kerak: :values.',
    'min' => [
        'numeric' => ':attribute kamida :min bo\'lishi kerak.',
        'file' => ':attribute kamida :min kilobayt bo\'lishi kerak.',
        'string' => ':attribute kamida :min belgilaridan iborat bo‘lishi kerak.',
        'array' => ':attribute kamida :min elementlariga ega bo\'lishi kerak.',
    ],
    'not_in' => 'Tanlangan :attribute yaroqsiz.',
    'not_regex' => ':attribute formati yaroqsiz.',
    'numeric' => ':attribute raqam bo\'lishi kerak.',
    'present' => ':attribute maydoni mavjud bo\'lishi kerak.',
    'regex' => ':attribute formati yaroqsiz.',
    'required' => ':attribute maydoni talab qilinadi.',
    'required_if' => ':other :value bo\'lganda :attribute maydoni talab qilinadi.',
    'required_unless' => ':values ichida :other bo\'lmasa, :attribute maydoni talab qilinadi.',
    'required_with' => ':values mavjud bo\'lganda :attribute maydoni talab qilinadi.',
    'required_with_all' => ':values mavjud bo\'lganda :attribute maydoni talab qilinadi.',
    'required_without' => ':attribute maydoni :values mavjud bo\'lmaganda talab qilinadi.',
    'required_without_all' => ':attribute maydoni :values dan hech biri mavjud bo\'lmaganda talab qilinadi.',
    'same' => ':attribute va :other mos kelishi kerak.',
    'size' => [
        'numeric' => ':attribute :size bo\'lishi kerak.',
        'file' => ':attribute :size kilobayt bo\'lishi kerak.',
        'string' => ':attribute :size belgilaridan iborat bo‘lishi kerak.',
        'array' => ':attribute :size elementlarini o\'z ichiga olishi kerak.',
    ],
    'string' => ':attribute qator bo\'lishi kerak.',
    'timezone' => ':attribute yaroqli zona boʻlishi kerak.',
    'unique' => ':attribute allaqachon olingan.',
    'uploaded' => ':attribute yuklanmadi.',
    'url' => ':attribute formati yaroqsiz.',

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
            'rule-name' => 'maxsus xabar',
        ],
        'g-recaptcha-response' => [
            'required' => 'Iltimos, robot emasligingizni tasdiqlang.',
            'captcha' => 'Captcha xatosi! keyinroq qayta urinib ko\'ring yoki sayt administratoriga murojaat qiling.',
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



    'accepted_if' => ':atribut maydoni :other :value bo\'lganda qabul qilinishi kerak.',
    'ascii' => ':atribut maydonida faqat bitta baytli alfanumerik belgilar va belgilar bo\'lishi kerak.',
    'can' => ':attribute maydonida ruxsat etilmagan qiymat mavjud.',
    'contains' => ':attribute maydonida kerakli qiymat yoʻq.',
    'current_password' => 'Parol noto\'g\'ri.',
    'date_equals' => ':attribute maydoni :date ga teng sana bo\'lishi kerak.',
    'decimal' => ':attribute maydonida :onlik kasrlar bo\'lishi kerak.',
    'declined' => ':attribute maydoni rad etilishi kerak.',
    'declined_if' => ':diger :value bo\'lganda :attribute maydoni rad etilishi kerak.',
    'doesnt_end_with' => ':attribute maydoni quyidagilardan biri bilan tugamasligi kerak: :values.',
    'doesnt_start_with' => ':attribute maydoni quyidagilardan biri bilan boshlanmasligi kerak: :values.',
    'ends_with' => ':attribute maydoni quyidagilardan biri bilan tugashi kerak: :values.',
    'enum' => 'Tanlangan :atribut yaroqsiz.',
    'extensions' => ':attribute maydoni quyidagi kengaytmalardan biriga ega bo\'lishi kerak: :values.',
    'hex_color' => ':atribut maydoni yaroqli oʻn oltilik rang boʻlishi kerak.',
    'list' => ':attribute maydoni ro\'yxat bo\'lishi kerak.',
    'lowercase' => ':attribute maydoni kichik harf bilan yozilishi kerak.',
    'mac_address' => ':atribut maydoni toʻgʻri MAC manzili boʻlishi kerak.',
    'max_digits' => ':attribute maydonida :max dan ortiq raqamlar bo‘lmasligi kerak.',
    'min_digits' => ':attribute maydonida kamida :min raqamlari bo\'lishi kerak.',
    'missing' => ':attribute maydoni yo\'q bo\'lishi kerak.',
    'missing_if' => ':other :value bo\'lganda :attribute maydoni bo\'lmasligi kerak.',
    'missing_unless' => ':attribute maydoni boʻlmasligi kerak, agar :other :value boʻlmasa.',
    'missing_with' => ':values mavjud bo\'lganda :attribute maydoni bo\'lmasligi kerak.',
    'missing_with_all' => ':qiymatlari mavjud bo\'lganda :attribute maydoni bo\'lmasligi kerak.',
    'multiple_of' => ':atribut maydoni :valuening ko\'paytmasi bo\'lishi kerak.',
    'password' => [
        'letters' => ':attribute maydonida kamida bitta harf boʻlishi kerak.',
        'mixed' => ':attribute maydonida kamida bitta katta va bitta kichik harf boʻlishi kerak.',
        'numbers' => ':attribute maydonida kamida bitta raqam boʻlishi kerak.',
        'symbols' => ':attribute maydonida kamida bitta belgi boʻlishi kerak.',
        'uncompromised' => 'Berilgan :atributi maʼlumotlar sizib chiqishida paydo boʻldi. Boshqa :atributni tanlang.',
    ],
    'present_if' => ':atribut maydoni :diger :value bo\'lganda mavjud bo\'lishi kerak.',
    'present_unless' => ':attribute maydoni, agar : other :value bo\'lmasa, mavjud bo\'lishi kerak.',
    'present_with' => ':values mavjud bo\'lganda :attribute maydoni mavjud bo\'lishi kerak.',
    'present_with_all' => ':qiymatlari mavjud bo\'lganda :attribute maydoni mavjud bo\'lishi kerak.',
    'prohibited' => ':attribute maydoni taqiqlangan.',
    'prohibited_if' => ':diger :value bo\'lganda :attribute maydoni taqiqlanadi.',
    'prohibited_unless' => ':atribut maydoni, agar :values ichida :other bo\'lmasa, taqiqlanadi.',
    'prohibits' => ':attribute maydoni :other ning mavjud bo\'lishini taqiqlaydi.',
    'required_array_keys' => ':attribute maydonida: :values uchun yozuvlar bo\'lishi kerak.',
    'required_if_accepted' => ': other qabul qilinganda :attribute maydoni talab qilinadi.',
    'required_if_declined' => ':other rad etilganda :attribute maydoni talab qilinadi.',
    'starts_with' => ':attribute maydoni quyidagilardan biri bilan boshlanishi kerak: :values.',
    'uppercase' => ':attribute maydoni katta harflardan iborat bo\'lishi kerak.',
    'ulid' => ':attribute maydoni haqiqiy ULID bo\'lishi kerak.',
    'uuid' => ':attribute maydoni yaroqli UUID bo\'lishi kerak.',
];
