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

    'accepted' => ':attribute باید ومنل شي.',
    'active_url' => ':attribute یو معتبر URL نه دی.',
    'after' => ':attribute باید د :date څخه وروسته نیټه وي.',
    'after_or_equal' => ':attribute باید د :date څخه وروسته یا مساوي نیټه وي.',
    'alpha' => 'د :attribute کېدای شي یوازې لیکونه ولري.',
    'alpha_dash' => ':attribute کېدای شي یوازې لیکونه، شمېرې او ډشونه ولري.',
    'alpha_num' => ':attribute ممکن یوازې لیکونه او شمیرې ولري.',
    'array' => ':attribute باید یو صف وي.',
    'before' => ':attribute باید د :date څخه مخکې نیټه وي.',
    'before_or_equal' => ':attribute باید د :date څخه دمخه یا مساوي نیټه وي.',
    'between' => [
        'numeric' => ':attribute باید د :min او :max ترمنځ وي.',
        'file' => ':attribute باید د :min او :max کیلوبایټ ترمنځ وي.',
        'string' => ':attribute باید د :min او :max حروفو ترمنځ وي.',
        'array' => ':attribute باید د :min او :max توکو ترمنځ وي.',
    ],
    'boolean' => 'د :attribute ساحه باید ریښتیا یا غلط وي.',
    'confirmed' => 'د :attribute تصدیق سره سمون نه خوري.',
    'date' => ':attribute د اعتبار وړ نیټه نه ده.',
    'date_format' => ':attribute د شکل :format سره سمون نه خوري.',
    'different' => ':attribute او :other باید توپیر ولري.',
    'digits' => ':attribute باید د :digits عددونه وي.',
    'digits_between' => ':attribute باید د :min او :max عددونو ترمنځ وي.',
    'dimensions' => 'د :attribute ناسم انځور ابعاد لري.',
    'distinct' => 'د :attribute ساحه یو نقل ارزښت لري.',
    'email' => ':attribute باید یو معتبر بریښنالیک پته وي.',
    'exists' => 'ټاکل شوی :attribute ناسم دی.',
    'file' => ':attribute باید یو فایل وي.',
    'filled' => 'د :attribute ساحه باید ارزښت ولري.',
    'gt' => [
        'numeric' => ':attribute باید د :value څخه لوی وي.',
        'file' => ':attribute باید له :value کیلوبایټ څخه لوی وي.',
        'string' => ':attribute باید د :value حروف څخه لوی وي.',
        'array' => ':attribute باید له :value څخه ډیر شیان ولري.',
    ],
    'gte' => [
        'numeric' => ':attribute باید د :value څخه لوی یا مساوي وي.',
        'file' => ':attribute باید د :value کیلوبایټ څخه لوی یا مساوي وي.',
        'string' => ':attribute باید د :value حروف څخه لوی یا مساوي وي.',
        'array' => ':attribute باید :value توکي یا نور ولري.',
    ],
    'image' => ':attribute باید یو انځور وي.',
    'in' => 'ټاکل شوی :attribute ناسم دی.',
    'in_array' => 'د :attribute ساحه په :other کې شتون نلري.',
    'integer' => ':attribute باید یو عدد وي.',
    'ip' => ':attribute باید یو معتبر IP پته وي.',
    'ipv4' => ':attribute باید یو معتبر IPv4 پته وي.',
    'ipv6' => ':attribute باید یو معتبر IPv6 پته وي.',
    'json' => ':attribute باید د اعتبار وړ JSON تار وي.',
    'lt' => [
        'numeric' => ':attribute باید د :value څخه کم وي.',
        'file' => ':attribute باید د :value کیلوبایټ څخه کم وي.',
        'string' => ':attribute باید د :value حروف څخه کم وي.',
        'array' => ':attribute باید له :value څخه کم وي.',
    ],
    'lte' => [
        'numeric' => ':attribute باید د :value څخه کم یا مساوي وي.',
        'file' => ':attribute باید د :value کیلوبایټ څخه کم یا مساوي وي.',
        'string' => ':attribute باید د :value حروف څخه کم یا مساوي وي.',
        'array' => ':attribute باید له :value څخه زیات نه وي.',
    ],
    'max' => [
        'numeric' => ':attribute ممکن د :max څخه لوی نه وي.',
        'file' => ':attribute ممکن د :max کیلوبایټ څخه لوی نه وي.',
        'string' => ':attribute ممکن د :max حروف څخه لوی نه وي.',
        'array' => ':attribute ممکن له :max څخه زیات توکي ونه لري.',
    ],
    'mimes' => ':attribute باید د ډول: :values فایل وي.',
    'mimetypes' => ':attribute باید د ډول: :values فایل وي.',
    'min' => [
        'numeric' => ':attribute باید لږ تر لږه :min وي.',
        'file' => ':attribute باید لږ تر لږه :min کیلوبایټ وي.',
        'string' => ':attribute باید لږ تر لږه :min حروف وي.',
        'array' => ':attribute باید لږترلږه :min توکي ولري.',
    ],
    'not_in' => 'ټاکل شوی :attribute ناسم دی.',
    'not_regex' => 'د :attribute بڼه ناسمه ده.',
    'numeric' => ':attribute باید یو شمیر وي.',
    'present' => 'د :attribute ساحه باید موجوده وي.',
    'regex' => 'د :attribute بڼه ناسمه ده.',
    'required' => 'د :attribute ساحه اړینه ده.',
    'required_if' => 'د :attribute ساحه اړینه ده کله چې :other وي :value.',
    'required_unless' => 'د :attribute ساحه اړینه ده پرته لدې چې :other په :values کې وي.',
    'required_with' => 'د :attribute ساحه اړینه ده کله چې :values موجود وي.',
    'required_with_all' => 'د :attribute ساحه اړینه ده کله چې :values موجود وي.',
    'required_without' => 'د :attribute ساحه اړینه ده کله چې :values شتون نلري.',
    'required_without_all' => 'د :attribute ساحه اړینه ده کله چې د :values څخه هیڅ شتون نلري.',
    'same' => ':attribute او :other باید سره سمون ولري.',
    'size' => [
        'numeric' => ':attribute باید :size وي.',
        'file' => ':attribute باید :size کیلوبایټ وي.',
        'string' => ':attribute باید د :size حروف وي.',
        'array' => ':attribute باید :size توکي ولري.',
    ],
    'string' => ':attribute باید یو تار وي.',
    'timezone' => ':attribute باید یو معتبر زون وي.',
    'unique' => ':attribute لا دمخه اخیستل شوی.',
    'uploaded' => 'د :attribute اپلوډ کولو کې پاتې راغلی.',
    'url' => 'د :attribute بڼه ناسمه ده.',

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
            'rule-name' => 'دودیز پیغام',
        ],
        'g-recaptcha-response' => [
            'required' => 'مهرباني وکړئ تصدیق کړئ چې تاسو روبوټ نه یاست.',
            'captcha' => 'د کیپچا تېروتنه! وروسته بیا هڅه وکړئ یا د سایټ مدیر سره اړیکه ونیسئ.',
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



    'accepted_if' => 'د :attribute ساحه باید ومنل شي کله چې :other وي :value.',
    'ascii' => 'د : خاصیت ساحه باید یوازې د واحد بایټ الفانومیریک حروف او سمبولونه ولري.',
    'can' => 'د :attribute ساحه یو غیر مجاز ارزښت لري.',
    'contains' => 'د :attribute ساحه یو اړین ارزښت ورک دی.',
    'current_password' => 'پټنوم غلط دی.',
    'date_equals' => 'د :attribute ساحه باید د :date سره مساوي نیټه وي.',
    'decimal' => 'د :attribute ساحه باید: decimal decimal ځایونه ولري.',
    'declined' => 'د :attribute ساحه باید رد شي.',
    'declined_if' => 'د :attribute ساحه باید رد شي کله چې :other وي :value.',
    'doesnt_end_with' => 'د :attribute ساحه باید د لاندې څخه یوه سره پای ته ونه رسیږي: :values.',
    'doesnt_start_with' => 'د :attribute ساحه باید د لاندې څخه یو سره پیل نشي: :values.',
    'ends_with' => 'د :attribute ساحه باید د لاندې څخه یوه سره پای ته ورسیږي: :values.',
    'enum' => 'ټاکل شوی : صفت ناقص دی.',
    'extensions' => 'د :attribute ساحه باید د لاندې توسیعونو څخه یو ولري: :values.',
    'hex_color' => 'د :attribute ساحه باید د اعتبار وړ هیکساډیسیمل رنګ وي.',
    'list' => 'د :attribute ساحه باید یو لیست وي.',
    'lowercase' => 'د :attribute ساحه باید کوچنی وي.',
    'mac_address' => 'د :attribute ساحه باید یو معتبر MAC پته وي.',
    'max_digits' => 'د :attribute ډګر باید له :max عددونو څخه زیات نه وي.',
    'min_digits' => 'د :attribute ساحه باید لږترلږه :min عددونه ولري.',
    'missing' => 'د :attribute ساحه باید ورکه وي.',
    'missing_if' => 'د :attribute ساحه باید ورکه وي کله چې :other وي :value.',
    'missing_unless' => 'د :attribute ساحه باید ورکه وي پرته لدې چې :other وي :value.',
    'missing_with' => 'د :attribute ساحه باید ورکه وي کله چې :values موجود وي.',
    'missing_with_all' => 'د :attribute ساحه باید ورکه وي کله چې :values موجود وي.',
    'multiple_of' => 'د :attribute ساحه باید د :value څو وي.',
    'password' => [
        'letters' => 'د :attribute ساحه باید لږترلږه یو لیک ولري.',
        'mixed' => 'د :attribute ساحه باید لږترلږه یو لوی او یو کوچنی توری ولري.',
        'numbers' => 'د : خاصیت ساحه باید لږترلږه یوه شمیره ولري.',
        'symbols' => 'د :attribute ساحه باید لږترلږه یو سمبول ولري.',
        'uncompromised' => 'ورکړل شوی : خاصیت د معلوماتو لیک کې څرګند شوی. مهرباني وکړئ یو مختلف انتخاب کړئ: خاصیت.',
    ],
    'present_if' => 'د :attribute ساحه باید موجوده وي کله چې :other وي :value.',
    'present_unless' => 'د :attribute ساحه باید موجوده وي پرته لدې چې :other وي :value.',
    'present_with' => 'د :attribute ساحه باید موجوده وي کله چې :values موجود وي.',
    'present_with_all' => 'د :attribute ساحه باید موجوده وي کله چې :values موجود وي.',
    'prohibited' => 'د :attribute ساحه منع ده.',
    'prohibited_if' => 'د :attribute ساحه منع ده کله چې :other وي :value.',
    'prohibited_unless' => 'د :attribute ساحه منع ده پرته لدې چې :other په :values کې وي.',
    'prohibits' => 'د :attribute ساحه منع کوي :نور له شتون څخه.',
    'required_array_keys' => 'د :attribute ساحه باید د : :values لپاره ننوتنې ولري.',
    'required_if_accepted' => 'د :attribute ساحه اړینه ده کله چې :other ومنل شي.',
    'required_if_declined' => 'د :attribute ساحه اړینه ده کله چې :other رد شي.',
    'starts_with' => 'د :attribute ساحه باید د لاندې څخه یو سره پیل شي: :values.',
    'uppercase' => 'د :attribute ساحه باید لوی وي.',
    'ulid' => 'د :attribute ساحه باید یو معتبر ULID وي.',
    'uuid' => 'د :attribute ساحه باید یو معتبر UUID وي.',
];
