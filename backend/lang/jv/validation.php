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

    'accepted' => ':attribute kudu ditampa.',
    'active_url' => ':attribute dudu URL sing bener.',
    'after' => ':attribute kudu tanggal sawise :date.',
    'after_or_equal' => ':attribute kudu tanggal sawise utawa padha karo :date.',
    'alpha' => ':attribute mung bisa ngemot huruf.',
    'alpha_dash' => ':attribute mung bisa ngemot huruf, angka, lan garis.',
    'alpha_num' => ':attribute mung bisa ngemot huruf lan angka.',
    'array' => ':attribute kudu dadi array.',
    'before' => ':attribute kudu tanggal sadurunge :date.',
    'before_or_equal' => ':attribute kudu tanggal sadurunge utawa padha karo :date.',
    'between' => [
        'numeric' => ':attribute kudu antarane :min lan :max.',
        'file' => ':attribute kudu antarane :min lan :max kilobyte.',
        'string' => ':attribute kudu antarane karakter :min lan :max.',
        'array' => ':attribute kudu antarane :min lan :max item.',
    ],
    'boolean' => 'Lapangan :attribute kudu bener utawa salah.',
    'confirmed' => 'Konfirmasi :attribute ora cocog.',
    'date' => ':attribute dudu tanggal sing bener.',
    'date_format' => ':attribute ora cocog karo format :format.',
    'different' => ':attribute lan :other kudu beda.',
    'digits' => ':attribute kudu :digits digit.',
    'digits_between' => ':attribute kudu antarane :min lan :max digit.',
    'dimensions' => ':attribute nduweni ukuran gambar sing ora bener.',
    'distinct' => 'Lapangan :attribute nduweni nilai duplikat.',
    'email' => ':attribute kudu alamat email sing bener.',
    'exists' => ':attribute sing dipilih ora sah.',
    'file' => ':attribute kudu dadi file.',
    'filled' => 'Lapangan :attribute kudu duwe nilai.',
    'gt' => [
        'numeric' => ':attribute kudu luwih saka :value.',
        'file' => ':attribute kudu luwih saka :value kilobyte.',
        'string' => ':attribute kudu luwih gedhe tinimbang karakter :value.',
        'array' => ':attribute kudu duwe luwih saka item :value.',
    ],
    'gte' => [
        'numeric' => ':attribute kudu luwih saka utawa padha karo :value.',
        'file' => ':attribute kudu luwih gedhe utawa padha karo kilobyte :value.',
        'string' => ':attribute kudu luwih saka utawa padha karo karakter :value.',
        'array' => ':attribute kudu duwe item :value utawa luwih.',
    ],
    'image' => ':attribute kudu dadi gambar.',
    'in' => ':attribute sing dipilih ora sah.',
    'in_array' => 'Lapangan :attribute ora ana ing :other.',
    'integer' => ':attribute kudu integer.',
    'ip' => ':attribute kudu alamat IP sing bener.',
    'ipv4' => ':attribute kudu alamat IPv4 sing bener.',
    'ipv6' => ':attribute kudu alamat IPv6 sing bener.',
    'json' => ':attribute kudu dadi string JSON sing bener.',
    'lt' => [
        'numeric' => ':attribute kudu kurang saka :value.',
        'file' => ':attribute kudu kurang saka :value kilobyte.',
        'string' => ':attribute kudu kurang saka karakter :value.',
        'array' => ':attribute kudu kurang saka item :value.',
    ],
    'lte' => [
        'numeric' => ':attribute kudu kurang saka utawa padha karo :value.',
        'file' => ':attribute kudu kurang saka utawa padha karo kilobyte :value.',
        'string' => ':attribute kudu kurang saka utawa padha karo karakter :value.',
        'array' => ':attribute kudu ora luwih saka item :value.',
    ],
    'max' => [
        'numeric' => ':attribute bisa uga ora luwih saka :max.',
        'file' => ':attribute bisa uga ora luwih saka :max kilobyte.',
        'string' => ':attribute bisa uga ora luwih saka karakter :max.',
        'array' => ':attribute bisa uga ora duwe luwih saka item :max.',
    ],
    'mimes' => ':attribute kudu file saka jinis: :values.',
    'mimetypes' => ':attribute kudu file saka jinis: :values.',
    'min' => [
        'numeric' => ':attribute kudu paling sethithik :min.',
        'file' => ':attribute kudu paling sethithik :min kilobyte.',
        'string' => ':attribute kudu paling sethithik karakter :min.',
        'array' => ':attribute kudu paling sethithik item :min.',
    ],
    'not_in' => ':attribute sing dipilih ora sah.',
    'not_regex' => 'Format :attribute ora sah.',
    'numeric' => ':attribute kudu nomer.',
    'present' => 'Lapangan :attribute kudu ana.',
    'regex' => 'Format :attribute ora sah.',
    'required' => 'Kolom :attribute dibutuhake.',
    'required_if' => 'Lapangan :attribute dibutuhake nalika :other yaiku :value.',
    'required_unless' => 'Lapangan :attribute dibutuhake kajaba :other ing :values.',
    'required_with' => 'Kolom :attribute dibutuhake nalika :values ana.',
    'required_with_all' => 'Kolom :attribute dibutuhake nalika :values ana.',
    'required_without' => 'Kolom :attribute dibutuhake nalika :values ora ana.',
    'required_without_all' => 'Lapangan :attribute dibutuhake nalika ora ana :values.',
    'same' => ':attribute lan :other kudu cocog.',
    'size' => [
        'numeric' => ':attribute kudu :size.',
        'file' => ':attribute kudu :size kilobyte.',
        'string' => ':attribute kudu karakter :size.',
        'array' => ':attribute kudu ngemot item :size.',
    ],
    'string' => ':attribute kudu dadi senar.',
    'timezone' => ':attribute kudu dadi zona sing bener.',
    'unique' => ':attribute wis dijupuk.',
    'uploaded' => ':attribute gagal upload.',
    'url' => 'Format :attribute ora sah.',

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
            'rule-name' => 'pesen khusus',
        ],
        'g-recaptcha-response' => [
            'required' => 'Mangga verifikasi manawa sampeyan dudu robot.',
            'captcha' => 'Kesalahan Captcha! coba maneh mengko utawa hubungi admin situs.',
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



    'accepted_if' => 'Kolom :atribut kudu ditampa nalika :liyane iku :nilai.',
    'ascii' => 'Kolom :atribut mung kudu ngemot karakter lan simbol alfanumerik siji-byte.',
    'can' => 'Kolom :atribut ngemot nilai sing ora sah.',
    'contains' => 'Kolom :atribut ora ana nilai sing dibutuhake.',
    'current_password' => 'Sandi salah.',
    'date_equals' => 'Kolom :atribut kudu dadi tanggal sing padha karo: tanggal.',
    'decimal' => 'Kolom :atribut kudu duwe: desimal desimal.',
    'declined' => 'Kolom : atribut kudu ditolak.',
    'declined_if' => 'Kolom :atribut kudu ditolak nalika :liyane iku :nilai.',
    'doesnt_end_with' => 'Kolom :atribut ora kudu dipungkasi karo salah siji saka ing ngisor iki: : nilai.',
    'doesnt_start_with' => 'Kolom :atribut ora kudu diwiwiti karo salah siji saka ing ngisor iki:: nilai.',
    'ends_with' => 'Kolom :atribut kudu dipungkasi salah siji saka ing ngisor iki: :nilai.',
    'enum' => 'Atribut sing dipilih ora sah.',
    'extensions' => 'Kolom :attribute kudu duwe salah siji saka ekstensi ing ngisor iki: :values.',
    'hex_color' => 'Kolom :atribut kudu warna heksadesimal sing valid.',
    'list' => 'Kolom :atribut kudu dadi dhaptar.',
    'lowercase' => 'Kolom : atribut kudu huruf cilik.',
    'mac_address' => 'Kolom : atribut kudu alamat MAC sing bener.',
    'max_digits' => 'Kolom :atribut kudu ora luwih saka : maksimal digit.',
    'min_digits' => 'Kolom :atribut kudu paling sethithik :min digit.',
    'missing' => 'Kolom : atribut kudu ora ana.',
    'missing_if' => 'Kolom :atribut kudu ilang nalika :liyane iku :nilai.',
    'missing_unless' => 'Kolom :atribut kudu ilang kajaba: liyane yaiku:nilai.',
    'missing_with' => 'Kolom :attribute kudu ilang nalika :values ana.',
    'missing_with_all' => 'Kolom :attribute kudu ilang nalika:values ana.',
    'multiple_of' => 'Kolom :atribut kudu kelipatan saka :value.',
    'password' => [
        'letters' => 'Kolom :atribut kudu ngemot paling ora siji huruf.',
        'mixed' => 'Kolom :atribut kudu ngemot paling ora siji huruf gedhe lan siji huruf cilik.',
        'numbers' => 'Kolom :atribut kudu ngemot paling ora siji nomer.',
        'symbols' => 'Kolom :atribut kudu ngemot paling ora siji simbol.',
        'uncompromised' => 'Atribut sing diwenehake wis katon ing bocor data. Mangga pilih sing beda: atribut.',
    ],
    'present_if' => 'Kolom :atribut kudu ana nalika: liyane yaiku: nilai.',
    'present_unless' => 'Kolom :atribut kudu ana kajaba: liyane yaiku: nilai.',
    'present_with' => 'Kolom :atribut kudu ana nalika:nilai wis ana.',
    'present_with_all' => 'Kolom :atribut kudu ana nalika: nilai ana.',
    'prohibited' => 'Kolom : atribut dilarang.',
    'prohibited_if' => 'Kolom :atribut dilarang nalika :liyane iku :nilai.',
    'prohibited_unless' => 'Kolom :atribut dilarang kajaba:liyane ana ing:nilai.',
    'prohibits' => 'Bidang :atribut nglarang :liyane ora ana.',
    'required_array_keys' => 'Kolom :atribut kudu ngemot entri kanggo:: nilai.',
    'required_if_accepted' => 'Kolom :atribut dibutuhake nalika: liyane ditampa.',
    'required_if_declined' => 'Kolom :atribut dibutuhake nalika: liyane ditolak.',
    'starts_with' => 'Kolom :atribut kudu diwiwiti kanthi salah siji saka ing ngisor iki: : nilai.',
    'uppercase' => 'Kolom : atribut kudu huruf gedhe.',
    'ulid' => 'Kolom :atribut kudu ULID sing valid.',
    'uuid' => 'Kolom : atribut kudu dadi UUID sing valid.',
];
