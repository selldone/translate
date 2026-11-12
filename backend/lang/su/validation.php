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

    'accepted' => 'The :attribute kudu ditarima.',
    'active_url' => ':attribute sanes a URL valid.',
    'after' => ':attribute kedah janten tanggal saatos :date.',
    'after_or_equal' => ':attribute kedah janten tanggal saatos atanapi sami sareng :date.',
    'alpha' => ':attribute ngan ukur tiasa ngandung hurup.',
    'alpha_dash' => ':attribute ngan ukur tiasa ngandung hurup, angka, sareng garis.',
    'alpha_num' => ':attribute ngan ukur tiasa ngandung hurup sareng angka.',
    'array' => ':attribute kedah janten susunan.',
    'before' => ':attribute kedah janten tanggal sateuacan :date.',
    'before_or_equal' => ':attribute kedah janten tanggal sateuacan atanapi sami sareng :date.',
    'between' => [
        'numeric' => ':attribute kudu antara :min na :max.',
        'file' => ':attribute kudu antara :min na :max kilobytes.',
        'string' => ':attribute kedah antara karakter :min sareng :max.',
        'array' => ':attribute kedah gaduh antara barang :min sareng :max.',
    ],
    'boolean' => 'Widang :attribute kedah leres atanapi palsu.',
    'confirmed' => 'Konfirmasi :attribute teu cocog.',
    'date' => ':attribute sanes tanggal valid.',
    'date_format' => ':attribute henteu cocog sareng format :format.',
    'different' => ':attribute sareng :other kedah béda.',
    'digits' => ':attribute kedah janten angka :digits.',
    'digits_between' => ':attribute kudu antara :min na :max digit.',
    'dimensions' => ':attribute boga dimensi gambar teu valid.',
    'distinct' => 'Widang :attribute gaduh nilai duplikat.',
    'email' => ':attribute kedah janten alamat email anu sah.',
    'exists' => ':attribute nu dipilih teu valid.',
    'file' => ':attribute kedah file.',
    'filled' => 'Widang :attribute kedah gaduh nilai.',
    'gt' => [
        'numeric' => ':attribute kedah langkung ageung tibatan :value.',
        'file' => ':attribute kedah langkung ageung tibatan kilobyte :value.',
        'string' => ':attribute kedah langkung ageung tibatan karakter :value.',
        'array' => ':attribute kedah gaduh langkung ti barang :value.',
    ],
    'gte' => [
        'numeric' => ':attribute kedah langkung ageung atanapi sami sareng :value.',
        'file' => ':attribute kedah langkung ageung atanapi sami sareng kilobyte :value.',
        'string' => ':attribute kedah langkung ageung atanapi sami sareng karakter :value.',
        'array' => ':attribute kedah gaduh barang :value atanapi langkung.',
    ],
    'image' => ':attribute kedah janten gambar.',
    'in' => ':attribute nu dipilih teu valid.',
    'in_array' => 'Widang :attribute teu aya di :other.',
    'integer' => ':attribute kudu integer.',
    'ip' => ':attribute kedah janten alamat IP anu valid.',
    'ipv4' => ':attribute kedah janten alamat IPv4 anu sah.',
    'ipv6' => ':attribute kedah janten alamat IPv6 anu sah.',
    'json' => ':attribute kedah janten string JSON anu valid.',
    'lt' => [
        'numeric' => ':attribute kedah kirang ti :value.',
        'file' => ':attribute kedah kirang ti :value kilobyte.',
        'string' => ':attribute kedah kirang ti karakter :value.',
        'array' => ':attribute kedah gaduh kirang ti item :value.',
    ],
    'lte' => [
        'numeric' => ':attribute kedah kirang atanapi sami sareng :value.',
        'file' => ':attribute kedah kirang atanapi sami sareng :value kilobyte.',
        'string' => ':attribute kedah kirang atanapi sami sareng karakter :value.',
        'array' => 'The :attribute teu kudu boga leuwih ti :value item.',
    ],
    'max' => [
        'numeric' => 'The :attribute bisa jadi teu leuwih gede ti :max.',
        'file' => 'The :attribute bisa jadi teu leuwih gede ti :max kilobytes.',
        'string' => ':attribute bisa jadi teu leuwih gede ti :max karakter.',
        'array' => 'The :attribute bisa jadi teu boga leuwih ti item :max.',
    ],
    'mimes' => ':attribute kedah janten file tina tipe: :values.',
    'mimetypes' => ':attribute kedah janten file tina tipe: :values.',
    'min' => [
        'numeric' => ':attribute kedah sahenteuna :min.',
        'file' => ':attribute kedah sahenteuna :min kilobyte.',
        'string' => ':attribute kedah sahenteuna karakter :min.',
        'array' => ':attribute kudu boga sahanteuna :min item.',
    ],
    'not_in' => ':attribute nu dipilih teu valid.',
    'not_regex' => 'Format :attribute teu valid.',
    'numeric' => ':attribute kedah janten angka.',
    'present' => 'Widang :attribute kedah aya.',
    'regex' => 'Format :attribute teu valid.',
    'required' => 'Widang :attribute diperyogikeun.',
    'required_if' => 'Widang :attribute diperlukeun nalika :other nyaeta :value.',
    'required_unless' => 'Widang :attribute diperlukeun iwal :other aya dina :values.',
    'required_with' => 'Widang :attribute diperlukeun nalika :values hadir.',
    'required_with_all' => 'Widang :attribute diperlukeun nalika :values hadir.',
    'required_without' => 'Widang :attribute diperyogikeun nalika :values henteu aya.',
    'required_without_all' => 'Widang :attribute diperlukeun nalika euweuh :values hadir.',
    'same' => ':attribute sareng :other kedah cocog.',
    'size' => [
        'numeric' => ':attribute kedah :size.',
        'file' => ':attribute kedah :size kilobyte.',
        'string' => ':attribute kedah janten karakter :size.',
        'array' => ':attribute kedah ngandung item :size.',
    ],
    'string' => ':attribute kedah janten senar.',
    'timezone' => ':attribute kedah janten zona valid.',
    'unique' => ':attribute parantos dicandak.',
    'uploaded' => ':attribute gagal unggah.',
    'url' => 'Format :attribute teu valid.',

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
            'rule-name' => 'custom-pesen',
        ],
        'g-recaptcha-response' => [
            'required' => 'Punten parios yén anjeun sanés robot.',
            'captcha' => 'Kasalahan Captcha! cobian deui engké atanapi hubungi admin situs.',
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



    'accepted_if' => 'Widang :atribut kedah ditampi nalika:lain nyaéta:nilai.',
    'ascii' => 'Widang : atribut ngan ukur kedah ngandung karakter sareng simbol alfanumerik bait tunggal.',
    'can' => 'Widang :atribut ngandung nilai anu teu sah.',
    'contains' => 'Widang : atribut leungit nilai anu diperyogikeun.',
    'current_password' => 'Sandi lepat.',
    'date_equals' => 'Widang :atribut kedah janten tanggal anu sami sareng:tanggal.',
    'decimal' => 'Widang : atribut kedah gaduh : tempat desimal desimal.',
    'declined' => 'Widang : atribut kedah ditolak.',
    'declined_if' => 'Widang :atribut kedah ditolak nalika:lain nyaéta:nilai.',
    'doesnt_end_with' => 'Widang : atribut teu kudu ditungtungan ku salah sahiji di handap ieu: : nilai.',
    'doesnt_start_with' => 'Widang : atribut teu kudu dimimitian ku salah sahiji di handap ieu: : nilai.',
    'ends_with' => 'Widang : atribut kudu ditungtungan ku salah sahiji di handap ieu: : nilai.',
    'enum' => 'Atribut anu dipilih henteu sah.',
    'extensions' => 'Widang : atribut kedah gaduh salah sahiji ekstensi ieu: : nilai.',
    'hex_color' => 'Widang : atribut kedah warna héksadesimal anu valid.',
    'list' => 'Widang : atribut kedah janten daptar.',
    'lowercase' => 'Widang : atribut kedah hurup leutik.',
    'mac_address' => 'Widang : atribut kedah alamat MAC anu valid.',
    'max_digits' => 'Widang : atribut teu kedah gaduh langkung ti : max digit.',
    'min_digits' => 'Widang : atribut kedah gaduh sahenteuna : min digit.',
    'missing' => 'Widang : atribut kedah leungit.',
    'missing_if' => 'Widang :atribut kedah leungit nalika:lain nyaéta:nilai.',
    'missing_unless' => 'Widang :atribut kedah leungit kecuali:lain nyaéta:nilai.',
    'missing_with' => 'Widang : atribut kedah leungit nalika: nilai aya.',
    'missing_with_all' => 'Widang : atribut kedah leungit nalika: nilai aya.',
    'multiple_of' => 'Widang : atribut kudu mangrupa kelipatan tina : nilai.',
    'password' => [
        'letters' => 'Widang :atribut kedah ngandung sahenteuna hiji hurup.',
        'mixed' => 'Widang :atribut kedah ngandung sahenteuna hiji hurup ageung sareng hiji hurup leutik.',
        'numbers' => 'Widang : atribut kudu ngandung sahanteuna hiji angka.',
        'symbols' => 'Widang : atribut kudu ngandung sahanteuna hiji simbol.',
        'uncompromised' => 'Atribut anu dipasihkeun parantos muncul dina bocor data. Mangga pilih anu béda: atribut.',
    ],
    'present_if' => 'Widang :atribut kedah aya nalika:lain nyaéta:nilai.',
    'present_unless' => 'Widang :atribut kedah aya iwal :lain nyaeta :nilai.',
    'present_with' => 'Widang : atribut kedah aya nalika : nilai aya.',
    'present_with_all' => 'Widang :atribut kedah aya nalika:nilai aya.',
    'prohibited' => 'Widang : atribut dilarang.',
    'prohibited_if' => 'Widang :atribut dilarang nalika:lain nyaéta:nilai.',
    'prohibited_unless' => 'Widang :atribut dilarang iwal:lain aya dina:nilai.',
    'prohibits' => 'Widang :atribut ngalarang :lain hadir.',
    'required_array_keys' => 'Widang : atribut kedah ngandung éntri pikeun: : nilai.',
    'required_if_accepted' => 'Widang :atribut diperyogikeun nalika:lainna ditarima.',
    'required_if_declined' => 'Widang :atribut diperyogikeun nalika:lain ditolak.',
    'starts_with' => 'Widang : atribut kudu dimimitian ku salah sahiji di handap ieu: : nilai.',
    'uppercase' => 'Widang : atribut kedah hurup ageung.',
    'ulid' => 'Widang :atribut kedah janten ULID anu valid.',
    'uuid' => 'Widang : atribut kedah janten UUID anu valid.',
];
