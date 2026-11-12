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

    'accepted' => ':attribute-г хүлээн зөвшөөрөх ёстой.',
    'active_url' => ':attribute нь хүчинтэй URL биш байна.',
    'after' => ':attribute нь :date-ээс хойшхи огноо байх ёстой.',
    'after_or_equal' => ':attribute нь :date-аас хойш буюу тэнцүү байх ёстой.',
    'alpha' => ':attribute нь зөвхөн үсэг агуулж болно.',
    'alpha_dash' => ':attribute нь зөвхөн үсэг, тоо, зураас агуулсан байж болно.',
    'alpha_num' => ':attribute нь зөвхөн үсэг, тоо агуулсан байж болно.',
    'array' => ':attribute нь массив байх ёстой.',
    'before' => ':attribute нь :date-ээс өмнөх огноо байх ёстой.',
    'before_or_equal' => ':attribute нь :date-аас өмнөх буюу тэнцүү огноо байх ёстой.',
    'between' => [
        'numeric' => ':attribute нь :min болон :max хооронд байх ёстой.',
        'file' => ':attribute нь :min болон :max килобайт хооронд байх ёстой.',
        'string' => ':attribute нь :min болон :max тэмдэгтүүдийн хооронд байх ёстой.',
        'array' => ':attribute нь :min болон :max хооронд байх ёстой.',
    ],
    'boolean' => ':attribute талбар нь үнэн эсвэл худал байх ёстой.',
    'confirmed' => ':attribute баталгаажуулалт таарахгүй байна.',
    'date' => ':attribute нь хүчинтэй огноо биш байна.',
    'date_format' => ':attribute нь :format форматтай таарахгүй байна.',
    'different' => ':attribute болон :other өөр байх ёстой.',
    'digits' => ':attribute нь :digits цифр байх ёстой.',
    'digits_between' => ':attribute нь :min ба :max цифрүүдийн хооронд байх ёстой.',
    'dimensions' => ':attribute-д зургийн хэмжээ буруу байна.',
    'distinct' => ':attribute талбар нь давхардсан утгатай байна.',
    'email' => ':attribute нь хүчинтэй имэйл хаяг байх ёстой.',
    'exists' => 'Сонгосон :attribute буруу байна.',
    'file' => ':attribute нь файл байх ёстой.',
    'filled' => ':attribute талбар нь утгатай байх ёстой.',
    'gt' => [
        'numeric' => ':attribute нь :value-аас их байх ёстой.',
        'file' => ':attribute нь :value килобайтаас их байх ёстой.',
        'string' => ':attribute нь :value тэмдэгтээс их байх ёстой.',
        'array' => ':attribute нь :value зүйлээс илүү байх ёстой.',
    ],
    'gte' => [
        'numeric' => ':attribute нь :value-аас их буюу тэнцүү байх ёстой.',
        'file' => ':attribute нь :value килобайтаас их буюу тэнцүү байх ёстой.',
        'string' => ':attribute нь :value тэмдэгтээс их буюу тэнцүү байх ёстой.',
        'array' => ':attribute нь :value буюу түүнээс дээш зүйлтэй байх ёстой.',
    ],
    'image' => ':attribute нь зураг байх ёстой.',
    'in' => 'Сонгосон :attribute буруу байна.',
    'in_array' => ':attribute талбар :other-д байхгүй.',
    'integer' => ':attribute бүхэл тоо байх ёстой.',
    'ip' => ':attribute нь хүчинтэй IP хаяг байх ёстой.',
    'ipv4' => ':attribute нь хүчинтэй IPv4 хаяг байх ёстой.',
    'ipv6' => ':attribute нь хүчинтэй IPv6 хаяг байх ёстой.',
    'json' => ':attribute нь хүчинтэй JSON мөр байх ёстой.',
    'lt' => [
        'numeric' => ':attribute нь :value-аас бага байх ёстой.',
        'file' => ':attribute нь :value килобайтаас бага байх ёстой.',
        'string' => ':attribute нь :value тэмдэгтээс бага байх ёстой.',
        'array' => ':attribute нь :value зүйлээс бага байх ёстой.',
    ],
    'lte' => [
        'numeric' => ':attribute нь :value-аас бага буюу тэнцүү байх ёстой.',
        'file' => ':attribute нь :value килобайтаас бага буюу тэнцүү байх ёстой.',
        'string' => ':attribute нь :value тэмдэгтээс бага эсвэл тэнцүү байх ёстой.',
        'array' => ':attribute нь :value зүйлээс илүү байж болохгүй.',
    ],
    'max' => [
        'numeric' => ':attribute нь :max-аас их байж болохгүй.',
        'file' => ':attribute нь :max килобайтаас их байж болохгүй.',
        'string' => ':attribute нь :max тэмдэгтээс их байж болохгүй.',
        'array' => ':attribute нь :max-аас илүүгүй байж болно.',
    ],
    'mimes' => ':attribute нь :values төрлийн файл байх ёстой.',
    'mimetypes' => ':attribute нь :values төрлийн файл байх ёстой.',
    'min' => [
        'numeric' => ':attribute хамгийн багадаа :min байх ёстой.',
        'file' => ':attribute хамгийн багадаа :min килобайт байх ёстой.',
        'string' => ':attribute хамгийн багадаа :min тэмдэгттэй байх ёстой.',
        'array' => ':attribute дор хаяж :min зүйлтэй байх ёстой.',
    ],
    'not_in' => 'Сонгосон :attribute буруу байна.',
    'not_regex' => ':attribute формат буруу байна.',
    'numeric' => ':attribute нь тоо байх ёстой.',
    'present' => ':attribute талбар байх ёстой.',
    'regex' => ':attribute формат буруу байна.',
    'required' => ':attribute талбар шаардлагатай.',
    'required_if' => ':other :value үед :attribute талбар шаардлагатай.',
    'required_unless' => ':other :values-д байхгүй бол :attribute талбар шаардлагатай.',
    'required_with' => ':values байгаа үед :attribute талбар шаардлагатай.',
    'required_with_all' => ':values байгаа үед :attribute талбар шаардлагатай.',
    'required_without' => ':values байхгүй үед :attribute талбар шаардлагатай.',
    'required_without_all' => ':values-ийн аль нь ч байхгүй үед :attribute талбар шаардлагатай.',
    'same' => ':attribute болон :other таарч байх ёстой.',
    'size' => [
        'numeric' => ':attribute нь :size байх ёстой.',
        'file' => ':attribute нь :size килобайт байх ёстой.',
        'string' => ':attribute нь :size тэмдэгт байх ёстой.',
        'array' => ':attribute нь :size зүйлсийг агуулсан байх ёстой.',
    ],
    'string' => ':attribute нь тэмдэгт мөр байх ёстой.',
    'timezone' => ':attribute хүчинтэй бүс байх ёстой.',
    'unique' => ':attribute аль хэдийн авсан байна.',
    'uploaded' => ':attribute-г байршуулж чадсангүй.',
    'url' => ':attribute формат буруу байна.',

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
            'rule-name' => 'захиалгат мессеж',
        ],
        'g-recaptcha-response' => [
            'required' => 'Та робот биш гэдгээ баталгаажуулна уу.',
            'captcha' => 'Captcha алдаа! Дараа дахин оролдох эсвэл сайтын админтай холбогдоно уу.',
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



    'accepted_if' => ':attribute талбарыг : other нь :value үед хүлээн зөвшөөрөх ёстой.',
    'ascii' => ':attribute талбар нь зөвхөн нэг байт үсэг, тоон тэмдэгтүүдийг агуулсан байх ёстой.',
    'can' => ':attribute талбар нь зөвшөөрөлгүй утгыг агуулж байна.',
    'contains' => ':attribute талбарт шаардлагатай утга дутуу байна.',
    'current_password' => 'Нууц үг буруу байна.',
    'date_equals' => ':attribute талбар нь :огноотой тэнцүү огноо байх ёстой.',
    'decimal' => ':attribute талбар нь :аравтын бутархай байх ёстой.',
    'declined' => ':attribute талбараас татгалзах ёстой.',
    'declined_if' => 'Бусад нь :утга байх үед :attribute талбараас татгалзах ёстой.',
    'doesnt_end_with' => ':attribute талбар нь дараах зүйлсийн аль нэгээр төгсөх ёсгүй: :утга.',
    'doesnt_start_with' => ':attribute талбар нь дараах зүйлсийн аль нэгээр эхэлж болохгүй: :утга.',
    'ends_with' => ':attribute талбар нь дараах зүйлсийн аль нэгээр төгсөх ёстой: :утга.',
    'enum' => 'Сонгосон :атрибут буруу байна.',
    'extensions' => ':attribute талбар нь дараах өргөтгөлүүдийн аль нэгтэй байх ёстой: :value.',
    'hex_color' => ':attribute талбар нь хүчинтэй арван зургаатын өнгө байх ёстой.',
    'list' => ':attribute талбар нь жагсаалт байх ёстой.',
    'lowercase' => ':attribute талбар нь жижиг үсгээр бичигдсэн байх ёстой.',
    'mac_address' => ':attribute талбар нь хүчинтэй MAC хаяг байх ёстой.',
    'max_digits' => ':attribute талбар нь :max-аас ихгүй цифртэй байх ёстой.',
    'min_digits' => ':attribute талбар нь дор хаяж :min цифртэй байх ёстой.',
    'missing' => ':attribute талбар байхгүй байх ёстой.',
    'missing_if' => ': other нь :value үед :attribute талбар байхгүй байх ёстой.',
    'missing_unless' => ':other нь :value биш бол :attribute талбар дутуу байх ёстой.',
    'missing_with' => ':утга байгаа үед :attribute талбар байхгүй байх ёстой.',
    'missing_with_all' => ':утга байгаа үед :attribute талбар байхгүй байх ёстой.',
    'multiple_of' => ':attribute талбар нь :value-ийн үржвэр байх ёстой.',
    'password' => [
        'letters' => ':attribute талбар нь дор хаяж нэг үсэг агуулсан байх ёстой.',
        'mixed' => ':attribute талбар нь дор хаяж нэг том, нэг жижиг үсэг агуулсан байх ёстой.',
        'numbers' => ':attribute талбарт дор хаяж нэг тоо байх ёстой.',
        'symbols' => ':attribute талбар нь дор хаяж нэг тэмдэгт агуулсан байх ёстой.',
        'uncompromised' => 'Өгөгдсөн :атрибут нь өгөгдөл алдагдсан үед гарч ирсэн. Өөр :атрибут сонгоно уу.',
    ],
    'present_if' => ': other нь :value үед :attribute талбар байх ёстой.',
    'present_unless' => ': other нь :value биш бол :attribute талбар байх ёстой.',
    'present_with' => ':утга байгаа үед :attribute талбар заавал байх ёстой.',
    'present_with_all' => ':утга байгаа үед :attribute талбар заавал байх ёстой.',
    'prohibited' => ':attribute талбарыг хориглоно.',
    'prohibited_if' => ':oth нь :утга байх үед :attribute талбарыг хориглоно.',
    'prohibited_unless' => 'Бусад нь :утга дотор байхгүй бол :attribute талбарыг хориглоно.',
    'prohibits' => ':attribute талбар нь : other-г байхыг хориглодог.',
    'required_array_keys' => ':attribute талбар нь: :утгад зориулсан оруулгуудыг агуулсан байх ёстой.',
    'required_if_accepted' => ': other-г хүлээн зөвшөөрөх үед :attribute талбар шаардлагатай.',
    'required_if_declined' => ':other татгалзсан үед :attribute талбар шаардлагатай.',
    'starts_with' => ':attribute талбар нь дараах зүйлсийн аль нэгээр эхлэх ёстой: :утга.',
    'uppercase' => ':attribute талбар нь том үсгээр бичигдсэн байх ёстой.',
    'ulid' => ':attribute талбар нь хүчинтэй ULID байх ёстой.',
    'uuid' => ':attribute талбар нь хүчинтэй UUID байх ёстой.',
];
