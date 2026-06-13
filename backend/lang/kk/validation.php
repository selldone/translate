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

    'accepted' => ':attribute қабылдануы керек.',
    'active_url' => ':attribute жарамды URL емес.',
    'after' => ':attribute :date кейінгі күн болуы керек.',
    'after_or_equal' => ':attribute :date күнінен кейінгі немесе оған тең күн болуы керек.',
    'alpha' => ':attribute тек әріптерді қамтуы мүмкін.',
    'alpha_dash' => ':attribute тек әріптерді, сандарды және сызықшаларды қамтуы мүмкін.',
    'alpha_num' => ':attribute тек әріптер мен сандардан тұруы мүмкін.',
    'array' => ':attribute массив болуы керек.',
    'before' => ':attribute :date алдындағы күн болуы керек.',
    'before_or_equal' => ':attribute :date алдындағы немесе оған тең күн болуы керек.',
    'between' => [
        'numeric' => ':attribute :min және :max арасында болуы керек.',
        'file' => ':attribute :min және :max килобайттары арасында болуы керек.',
        'string' => ':attribute :min және :max таңбаларының арасында болуы керек.',
        'array' => ':attribute :min және :max элементтері арасында болуы керек.',
    ],
    'boolean' => ':attribute өрісі ақиқат немесе жалған болуы керек.',
    'confirmed' => ':attribute растауы сәйкес келмейді.',
    'date' => ':attribute жарамды күн емес.',
    'date_format' => ':attribute :format пішіміне сәйкес келмейді.',
    'different' => ':attribute және :other әртүрлі болуы керек.',
    'digits' => ':attribute :digits сандары болуы керек.',
    'digits_between' => ':attribute :min және :max сандары арасында болуы керек.',
    'dimensions' => ':attribute жарамсыз кескін өлшемдері бар.',
    'distinct' => ':attribute өрісінде қайталанатын мән бар.',
    'email' => ':attribute жарамды электрондық пошта мекенжайы болуы керек.',
    'exists' => 'Таңдалған :attribute жарамсыз.',
    'file' => ':attribute файл болуы керек.',
    'filled' => ':attribute өрісінде мән болуы керек.',
    'gt' => [
        'numeric' => ':attribute :value мәнінен үлкен болуы керек.',
        'file' => ':attribute :value килобайттан үлкен болуы керек.',
        'string' => ':attribute :value таңбаларынан үлкен болуы керек.',
        'array' => ':attribute ішінде :value элементтерінен көп болуы керек.',
    ],
    'gte' => [
        'numeric' => ':attribute :value мәнінен үлкен немесе оған тең болуы керек.',
        'file' => ':attribute :value килобайттан үлкен немесе оған тең болуы керек.',
        'string' => ':attribute :value таңбаларынан үлкен немесе оған тең болуы керек.',
        'array' => ':attribute :value немесе одан да көп элементтері болуы керек.',
    ],
    'image' => ':attribute кескін болуы керек.',
    'in' => 'Таңдалған :attribute жарамсыз.',
    'in_array' => ':attribute өрісі :other ішінде жоқ.',
    'integer' => ':attribute бүтін сан болуы керек.',
    'ip' => ':attribute жарамды IP мекенжайы болуы керек.',
    'ipv4' => ':attribute жарамды IPv4 мекенжайы болуы керек.',
    'ipv6' => ':attribute жарамды IPv6 мекенжайы болуы керек.',
    'json' => ':attribute жарамды JSON жолы болуы керек.',
    'lt' => [
        'numeric' => ':attribute :value мәнінен аз болуы керек.',
        'file' => ':attribute :value килобайттан аз болуы керек.',
        'string' => ':attribute :value таңбаларынан аз болуы керек.',
        'array' => ':attribute :value элементтерінен аз болуы керек.',
    ],
    'lte' => [
        'numeric' => ':attribute :value-дан аз немесе оған тең болуы керек.',
        'file' => ':attribute :value килобайттан аз немесе оған тең болуы керек.',
        'string' => ':attribute :value таңбаларынан аз немесе оған тең болуы керек.',
        'array' => ':attribute құрамында :value элементтерінен көп болмауы керек.',
    ],
    'max' => [
        'numeric' => ':attribute :max артық болмауы мүмкін.',
        'file' => ':attribute :max килобайттан артық болмауы мүмкін.',
        'string' => ':attribute :max таңбаларынан үлкен болмауы мүмкін.',
        'array' => ':attribute ішінде :max элементтерінен көп болмауы мүмкін.',
    ],
    'mimes' => ':attribute келесі түрдегі файл болуы керек: :values.',
    'mimetypes' => ':attribute келесі түрдегі файл болуы керек: :values.',
    'min' => [
        'numeric' => ':attribute кемінде :min болуы керек.',
        'file' => ':attribute кемінде :min килобайт болуы керек.',
        'string' => ':attribute кемінде :min таңбалары болуы керек.',
        'array' => ':attribute кемінде :min элементтері болуы керек.',
    ],
    'not_in' => 'Таңдалған :attribute жарамсыз.',
    'not_regex' => ':attribute пішімі жарамсыз.',
    'numeric' => ':attribute сан болуы керек.',
    'present' => ':attribute өрісі болуы керек.',
    'regex' => ':attribute пішімі жарамсыз.',
    'required' => ':attribute өрісі қажет.',
    'required_if' => ':attribute өрісі :other :value болғанда қажет.',
    'required_unless' => ':attribute өрісі :other :values ішінде болмаса, қажет.',
    'required_with' => ':attribute өрісі :values болған кезде қажет.',
    'required_with_all' => ':attribute өрісі :values болған кезде қажет.',
    'required_without' => ':attribute өрісі :values болмаған кезде қажет.',
    'required_without_all' => ':attribute өрісі :values ешқайсысы болмаған кезде қажет.',
    'same' => ':attribute және :other сәйкес келуі керек.',
    'size' => [
        'numeric' => ':attribute :size болуы керек.',
        'file' => ':attribute :size килобайт болуы керек.',
        'string' => ':attribute :size таңбалары болуы керек.',
        'array' => ':attribute :size элементтерін қамтуы керек.',
    ],
    'string' => ':attribute жол болуы керек.',
    'timezone' => ':attribute жарамды аймақ болуы керек.',
    'unique' => ':attribute қазірдің өзінде алынды.',
    'uploaded' => ':attribute жүктеп салынбады.',
    'url' => ':attribute пішімі жарамсыз.',

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
            'rule-name' => 'реттелетін хабарлама',
        ],
        'g-recaptcha-response' => [
            'required' => 'Робот емес екеніңізді растаңыз.',
            'captcha' => 'Captcha қатесі! әрекетті кейінірек қайталаңыз немесе сайт әкімшісіне хабарласыңыз.',
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



    'accepted_if' => ':attribute өрісі : other :value болғанда қабылдануы керек.',
    'ascii' => ':attribute өрісінде тек бір байтты әріптік-цифрлық таңбалар мен белгілер болуы керек.',
    'can' => ':attribute өрісінде рұқсат етілмеген мән бар.',
    'contains' => ':attribute өрісінде қажетті мән жоқ.',
    'current_password' => 'Құпия сөз дұрыс емес.',
    'date_equals' => ':attribute өрісі :date мәніне тең күн болуы керек.',
    'decimal' => ':атрибут өрісінде :ондық ондық таңбалар болуы керек.',
    'declined' => ':attribute өрісінен бас тарту керек.',
    'declined_if' => ':atribut өрісі :other :value болғанда қабылданбауы керек.',
    'doesnt_end_with' => ':атрибут өрісі келесілердің бірімен аяқталмауы керек: :мәндер.',
    'doesnt_start_with' => ':атрибут өрісі келесілердің бірінен басталмауы керек: :мәндер.',
    'ends_with' => ':атрибут өрісі келесілердің бірімен аяқталуы керек: :мәндер.',
    'enum' => 'Таңдалған :атрибут жарамсыз.',
    'extensions' => ':атрибут өрісінде келесі кеңейтімдердің біреуі болуы керек: :мәндер.',
    'hex_color' => ':атрибут өрісі жарамды он алтылық түс болуы керек.',
    'list' => ':attribute өрісі тізім болуы керек.',
    'lowercase' => ':attribute өрісі кіші әріппен жазылуы керек.',
    'mac_address' => ':атрибут өрісі жарамды MAC мекенжайы болуы керек.',
    'max_digits' => ':attribute өрісінде :max санынан көп болмауы керек.',
    'min_digits' => ':attribute өрісінде кемінде :min сандары болуы керек.',
    'missing' => ':attribute өрісі жоқ болуы керек.',
    'missing_if' => ': other :value болғанда :attribute өрісі болмауы керек.',
    'missing_unless' => ':attribute өрісі жоқ болуы керек, егер : other :value.',
    'missing_with' => ':мәндері болған кезде :атрибут өрісі болмауы керек.',
    'missing_with_all' => ':мәндері болған кезде :атрибут өрісі болмауы керек.',
    'multiple_of' => ':атрибут өрісі :мәннің еселігі болуы керек.',
    'password' => [
        'letters' => ':attribute өрісінде кемінде бір әріп болуы керек.',
        'mixed' => ':attribute өрісінде кемінде бір бас әріп және бір кіші әріп болуы керек.',
        'numbers' => ':attribute өрісінде кемінде бір сан болуы керек.',
        'symbols' => ':attribute өрісінде кемінде бір таңба болуы керек.',
        'uncompromised' => 'Берілген :атрибут деректер ағып кетуде пайда болды. Басқа :атрибут таңдаңыз.',
    ],
    'present_if' => ':attribute өрісі : other :value болғанда болуы керек.',
    'present_unless' => ':attribute өрісі, егер : other :value болмаса, болуы керек.',
    'present_with' => ':атрибут өрісі :мәндері болған кезде болуы керек.',
    'present_with_all' => ':атрибут өрісі :мәндері болған кезде болуы керек.',
    'prohibited' => ':атрибут өрісіне тыйым салынады.',
    'prohibited_if' => ':attribute өрісіне :other :value болғанда тыйым салынады.',
    'prohibited_unless' => ':attribute өрісіне : other :values ішінде болмаса, тыйым салынады.',
    'prohibits' => ':attribute өрісі :other қолданбасының болуына тыйым салады.',
    'required_array_keys' => ':атрибут өрісінде :мәндерге арналған жазбалар болуы керек.',
    'required_if_accepted' => ':attribute өрісі : other қабылданған кезде қажет.',
    'required_if_declined' => ': other қабылданбаған кезде :attribute өрісі қажет.',
    'starts_with' => ':атрибут өрісі келесілердің бірінен басталуы керек: :мәндер.',
    'uppercase' => ':attribute өрісі бас әріппен жазылуы керек.',
    'ulid' => ':атрибут өрісі жарамды ULID болуы керек.',
    'uuid' => ':атрибут өрісі жарамды UUID болуы керек.',
];
