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

    'accepted' => ':attribute мора да се прифати.',
    'active_url' => ':attribute не е валиден URL.',
    'after' => ':attribute мора да биде датум по :date.',
    'after_or_equal' => ':attribute мора да биде датум после или еднаков на :date.',
    'alpha' => ':attribute може да содржи само букви.',
    'alpha_dash' => ':attribute може да содржи само букви, бројки и цртички.',
    'alpha_num' => ':attribute може да содржи само букви и бројки.',
    'array' => ':attribute мора да биде низа.',
    'before' => ':attribute мора да биде датум пред :date.',
    'before_or_equal' => ':attribute мора да биде датум пред или еднаков на :date.',
    'between' => [
        'numeric' => ':attribute мора да биде помеѓу :min и :max.',
        'file' => ':attribute мора да биде помеѓу :min и :max килобајти.',
        'string' => ':attribute мора да биде помеѓу :min и :max знаци.',
        'array' => ':attribute мора да има помеѓу :min и :max ставки.',
    ],
    'boolean' => 'Полето :attribute мора да биде точно или неточно.',
    'confirmed' => 'Потврдата :attribute не се совпаѓа.',
    'date' => ':attribute не е валиден датум.',
    'date_format' => ':attribute не се совпаѓа со форматот :format.',
    'different' => ':attribute и :other мора да бидат различни.',
    'digits' => ':attribute мора да биде :digits цифри.',
    'digits_between' => ':attribute мора да биде помеѓу :min и :max цифри.',
    'dimensions' => ':attribute има неважечки димензии на сликата.',
    'distinct' => 'Полето :attribute има дупликат вредност.',
    'email' => ':attribute мора да биде валидна адреса за е-пошта.',
    'exists' => 'Избраниот :attribute е неважечки.',
    'file' => ':attribute мора да биде датотека.',
    'filled' => 'Полето :attribute мора да има вредност.',
    'gt' => [
        'numeric' => ':attribute мора да биде поголем од :value.',
        'file' => ':attribute мора да биде поголем од :value килобајти.',
        'string' => ':attribute мора да биде поголем од :value знаците.',
        'array' => ':attribute мора да има повеќе од :value ставки.',
    ],
    'gte' => [
        'numeric' => ':attribute мора да биде поголем или еднаков на :value.',
        'file' => ':attribute мора да биде поголем или еднаков на :value килобајти.',
        'string' => ':attribute мора да биде поголем или еднаков на :value знаците.',
        'array' => ':attribute мора да има :value ставки или повеќе.',
    ],
    'image' => ':attribute мора да биде слика.',
    'in' => 'Избраниот :attribute е неважечки.',
    'in_array' => 'Полето :attribute не постои во :other.',
    'integer' => ':attribute мора да биде цел број.',
    'ip' => ':attribute мора да биде валидна IP адреса.',
    'ipv4' => ':attribute мора да биде валидна IPv4 адреса.',
    'ipv6' => ':attribute мора да биде валидна IPv6 адреса.',
    'json' => ':attribute мора да биде валидна JSON низа.',
    'lt' => [
        'numeric' => ':attribute мора да биде помал од :value.',
        'file' => ':attribute мора да биде помал од :value килобајти.',
        'string' => ':attribute мора да биде помал од :value знаци.',
        'array' => ':attribute мора да има помалку од :value ставки.',
    ],
    'lte' => [
        'numeric' => ':attribute мора да биде помал или еднаков на :value.',
        'file' => ':attribute мора да биде помал или еднаков на :value килобајти.',
        'string' => ':attribute мора да биде помал или еднаков на :value знаци.',
        'array' => ':attribute не смее да има повеќе од :value ставки.',
    ],
    'max' => [
        'numeric' => ':attribute не може да биде поголем од :max.',
        'file' => ':attribute можеби не е поголем од :max килобајти.',
        'string' => ':attribute не може да биде поголем од :max знаци.',
        'array' => ':attribute не може да има повеќе од :max ставки.',
    ],
    'mimes' => ':attribute мора да биде датотека од типот: :values.',
    'mimetypes' => ':attribute мора да биде датотека од типот: :values.',
    'min' => [
        'numeric' => ':attribute мора да биде најмалку :min.',
        'file' => ':attribute мора да биде најмалку :min килобајти.',
        'string' => ':attribute мора да содржи најмалку :min знаци.',
        'array' => ':attribute мора да има најмалку ставки :min.',
    ],
    'not_in' => 'Избраниот :attribute е неважечки.',
    'not_regex' => 'Форматот :attribute е неважечки.',
    'numeric' => ':attribute мора да биде бројка.',
    'present' => 'Полето :attribute мора да биде присутно.',
    'regex' => 'Форматот :attribute е неважечки.',
    'required' => 'Полето :attribute е потребно.',
    'required_if' => 'Полето :attribute е потребно кога :other е :value.',
    'required_unless' => 'Полето :attribute е потребно освен ако :other не е во :values.',
    'required_with' => 'Полето :attribute е потребно кога е присутно :values.',
    'required_with_all' => 'Полето :attribute е потребно кога е присутно :values.',
    'required_without' => 'Полето :attribute е потребно кога :values не е присутно.',
    'required_without_all' => 'Полето :attribute е потребно кога ниту едно од :values не е присутно.',
    'same' => ':attribute и :other мора да се совпаѓаат.',
    'size' => [
        'numeric' => ':attribute мора да биде :size.',
        'file' => ':attribute мора да биде :size килобајти.',
        'string' => ':attribute мора да биде :size знаци.',
        'array' => ':attribute мора да содржи ставки :size.',
    ],
    'string' => ':attribute мора да биде низа.',
    'timezone' => ':attribute мора да биде валидна зона.',
    'unique' => ':attribute веќе е земен.',
    'uploaded' => ':attribute не успеа да се постави.',
    'url' => 'Форматот :attribute е неважечки.',

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
            'rule-name' => 'прилагодена порака',
        ],
        'g-recaptcha-response' => [
            'required' => 'Ве молиме потврдете дека не сте робот.',
            'captcha' => 'Грешка во Captcha! обидете се повторно подоцна или контактирајте со администраторот на страницата.',
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



    'accepted_if' => 'Полето :атрибут мора да се прифати кога :other е :вредност.',
    'ascii' => 'Полето :атрибут мора да содржи само алфанумерички знаци и симболи од еден бајт.',
    'can' => 'Полето: атрибут содржи неовластена вредност.',
    'contains' => 'На полето :атрибут недостасува потребната вредност.',
    'current_password' => 'Лозинката е неточна.',
    'date_equals' => 'Полето :атрибут мора да биде датум еднаков на :date.',
    'decimal' => 'Полето :атрибут мора да има :децимални децимални места.',
    'declined' => 'Полето :атрибут мора да се одбие.',
    'declined_if' => 'Полето :атрибут мора да се одбие кога :other е :value.',
    'doesnt_end_with' => 'Полето :атрибут не смее да завршува со едно од следниве: :вредности.',
    'doesnt_start_with' => 'Полето :атрибут не смее да започнува со едно од следниве: :вредности.',
    'ends_with' => 'Полето :атрибут мора да завршува со едно од следниве: :вредности.',
    'enum' => 'Избраниот :атрибут е неважечки.',
    'extensions' => 'Полето :атрибут мора да има едно од следните екстензии: :вредности.',
    'hex_color' => 'Полето: атрибут мора да биде валидна хексадецимална боја.',
    'list' => 'Полето :атрибут мора да биде листа.',
    'lowercase' => 'Полето: атрибут мора да биде со мали букви.',
    'mac_address' => 'Полето :атрибут мора да биде валидна MAC адреса.',
    'max_digits' => 'Полето :атрибут не смее да има повеќе од :max цифри.',
    'min_digits' => 'Полето :атрибут мора да има најмалку :мин цифри.',
    'missing' => 'Полето :атрибут мора да недостасува.',
    'missing_if' => 'Полето :атрибут мора да недостасува кога :other е :value.',
    'missing_unless' => 'Полето :атрибут мора да недостасува освен ако :other не е :value.',
    'missing_with' => 'Полето :атрибут мора да недостасува кога е присутно :values.',
    'missing_with_all' => 'Полето :атрибут мора да недостасува кога се присутни :вредности.',
    'multiple_of' => 'Полето :атрибут мора да биде повеќекратно од :value.',
    'password' => [
        'letters' => 'Полето: атрибут мора да содржи најмалку една буква.',
        'mixed' => 'Полето: атрибут мора да содржи најмалку една голема и една мала буква.',
        'numbers' => 'Полето: атрибут мора да содржи најмалку еден број.',
        'symbols' => 'Полето :атрибут мора да содржи најмалку еден симбол.',
        'uncompromised' => 'Дадениот :атрибут се појави во протекување податоци. Ве молиме изберете друг :атрибут.',
    ],
    'present_if' => 'Полето :атрибут мора да биде присутно кога :other е :вредност.',
    'present_unless' => 'Полето :атрибут мора да биде присутно освен ако :other не е :value.',
    'present_with' => 'Полето :атрибут мора да биде присутно кога е присутно :values.',
    'present_with_all' => 'Полето :атрибут мора да биде присутно кога се присутни :вредности.',
    'prohibited' => 'Полето: атрибут е забрането.',
    'prohibited_if' => 'Полето :атрибут е забрането кога :other е :вредност.',
    'prohibited_unless' => 'Полето :атрибут е забрането освен ако :other не е во :вредности.',
    'prohibits' => 'Полето :атрибут забранува присуство на:друго.',
    'required_array_keys' => 'Полето :атрибут мора да содржи записи за: :вредности.',
    'required_if_accepted' => 'Полето :атрибут е потребно кога е прифатено :other.',
    'required_if_declined' => 'Полето :атрибут е потребно кога :other е одбиено.',
    'starts_with' => 'Полето :атрибут мора да започне со едно од следниве: :вредности.',
    'uppercase' => 'Полето :атрибут мора да биде со големи букви.',
    'ulid' => 'Полето :атрибут мора да биде валиден ULID.',
    'uuid' => 'Полето :атрибут мора да биде валиден UUID.',
];
