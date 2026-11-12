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

    'accepted' => ':attribute harus diterima.',
    'active_url' => ':attribute bukan URL yang valid.',
    'after' => ':attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka, dan tanda hubung.',
    'alpha_num' => ':attribute hanya boleh berisi huruf dan angka.',
    'array' => ':attribute harus berupa array.',
    'before' => ':attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute harus berada di antara :min dan :max.',
        'file' => ':attribute harus antara :min dan :max kilobyte.',
        'string' => ':attribute harus antara :min dan :max karakter.',
        'array' => ':attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean' => 'Bidang :attribute harus benar atau salah.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'date' => ':attribute bukan tanggal yang valid.',
    'date_format' => ':attribute tidak cocok dengan format :format.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus berupa digit :digits.',
    'digits_between' => ':attribute harus berada di antara digit :min dan :max.',
    'dimensions' => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Bidang :attribute memiliki nilai duplikat.',
    'email' => ':attribute harus berupa alamat email yang valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => 'Bidang :attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value kilobyte.',
        'string' => ':attribute harus lebih besar dari :value karakter.',
        'array' => ':attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar dari atau sama dengan :value.',
        'file' => ':attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'string' => ':attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => ':attribute harus memiliki :value item atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => 'Bidang :attribute tidak ada di :other.',
    'integer' => ':attribute harus berupa bilangan bulat.',
    'ip' => ':attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':attribute harus berupa string JSON yang valid.',
    'lt' => [
        'numeric' => ':attribute harus lebih kecil dari :value.',
        'file' => ':attribute harus kurang dari :value kilobyte.',
        'string' => ':attribute harus kurang dari :value karakter.',
        'array' => ':attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => ':attribute harus lebih kecil atau sama dengan :value.',
        'file' => ':attribute harus kurang dari atau sama dengan :value kilobyte.',
        'string' => ':attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => ':attribute tidak boleh memiliki lebih dari :value item.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file' => ':attribute tidak boleh lebih besar dari :max kilobyte.',
        'string' => ':attribute tidak boleh lebih besar dari :max karakter.',
        'array' => ':attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'numeric' => ':attribute setidaknya harus :min.',
        'file' => ':attribute harus minimal :min kilobyte.',
        'string' => ':attribute harus minimal :min karakter.',
        'array' => ':attribute harus memiliki setidaknya :min item.',
    ],
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'present' => 'Bidang :attribute harus ada.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => 'Bidang :attribute wajib diisi.',
    'required_if' => 'Bidang :attribute diperlukan ketika :other adalah :value.',
    'required_unless' => 'Bidang :attribute wajib diisi kecuali :other ada di :values.',
    'required_with' => 'Bidang :attribute diperlukan bila :values ada.',
    'required_with_all' => 'Bidang :attribute diperlukan bila :values ada.',
    'required_without' => 'Bidang :attribute diperlukan bila :values tidak ada.',
    'required_without_all' => 'Bidang :attribute diperlukan bila tidak ada :values yang ada.',
    'same' => ':attribute dan :other harus cocok.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobyte.',
        'string' => ':attribute harus berupa :size karakter.',
        'array' => ':attribute harus berisi :size item.',
    ],
    'string' => ':attribute harus berupa string.',
    'timezone' => ':attribute harus berupa zona yang valid.',
    'unique' => ':attribute telah diambil.',
    'uploaded' => ':attribute gagal diunggah.',
    'url' => 'Format :attribute tidak valid.',

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
            'rule-name' => 'pesan khusus',
        ],
        'g-recaptcha-response' => [
            'required' => 'Harap verifikasi bahwa Anda bukan robot.',
            'captcha' => 'kesalahan captcha! coba lagi nanti atau hubungi admin situs.',
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



    'accepted_if' => 'Kolom :attribute harus diterima jika :other adalah :value.',
    'ascii' => 'Bidang :attribute hanya boleh berisi karakter alfanumerik dan simbol satu-byte.',
    'can' => 'Bidang :attribute berisi nilai yang tidak sah.',
    'contains' => 'Bidang :attribute tidak memiliki nilai yang diperlukan.',
    'current_password' => 'Kata sandinya salah.',
    'date_equals' => 'Kolom :attribute harus berupa tanggal yang sama dengan :date.',
    'decimal' => 'Kolom :attribute harus memiliki :tempat desimal desimal.',
    'declined' => 'Kolom :attribute harus ditolak.',
    'declined_if' => 'Kolom :attribute harus ditolak jika :other adalah :value.',
    'doesnt_end_with' => 'Kolom :attribute tidak boleh diakhiri dengan salah satu dari berikut ini: :values.',
    'doesnt_start_with' => 'Kolom :attribute tidak boleh diawali dengan salah satu berikut: :values.',
    'ends_with' => 'Kolom :attribute harus diakhiri dengan salah satu dari berikut: :values.',
    'enum' => ':atribut yang dipilih tidak valid.',
    'extensions' => 'Bidang :attribute harus memiliki salah satu ekstensi berikut: :values.',
    'hex_color' => 'Bidang :attribute harus berupa warna heksadesimal yang valid.',
    'list' => 'Bidang :attribute harus berupa daftar.',
    'lowercase' => 'Kolom :attribute harus huruf kecil.',
    'mac_address' => 'Kolom :attribute harus berupa alamat MAC yang valid.',
    'max_digits' => 'Kolom :attribute tidak boleh memiliki lebih dari :max digit.',
    'min_digits' => 'Kolom :attribute harus memiliki sekurang-kurangnya :min digit.',
    'missing' => 'Kolom :attribute harus dihilangkan.',
    'missing_if' => 'Kolom :attribute tidak boleh diisi jika :other adalah :value.',
    'missing_unless' => 'Kolom :attribute tidak boleh diisi kecuali :other adalah :value.',
    'missing_with' => 'Kolom :attribute harus hilang jika :values ada.',
    'missing_with_all' => 'Kolom :attribute harus hilang jika :values ada.',
    'multiple_of' => 'Bidang :attribute harus merupakan kelipatan :value.',
    'password' => [
        'letters' => 'Kolom :attribute harus berisi setidaknya satu huruf.',
        'mixed' => 'Kolom :attribute harus berisi minimal satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Kolom :attribute harus berisi minimal satu angka.',
        'symbols' => 'Kolom :attribute harus berisi minimal satu simbol.',
        'uncompromised' => 'Atribut yang diberikan telah muncul dalam kebocoran data. Harap pilih atribut yang lain.',
    ],
    'present_if' => 'Kolom :attribute harus ada saat :other adalah :value.',
    'present_unless' => 'Kolom :attribute harus ada kecuali :other adalah :value.',
    'present_with' => 'Kolom :attribute harus ada saat :values ada.',
    'present_with_all' => 'Kolom :attribute harus ada jika :values ada.',
    'prohibited' => 'Kolom :attribute dilarang.',
    'prohibited_if' => 'Kolom :attribute dilarang saat :other adalah :value.',
    'prohibited_unless' => 'Kolom :attribute dilarang kecuali :other ada di dalam :values.',
    'prohibits' => 'Kolom :attribute melarang :other untuk hadir.',
    'required_array_keys' => 'Bidang :attribute harus berisi entri untuk: :values.',
    'required_if_accepted' => 'Kolom :attribute diperlukan jika :other diterima.',
    'required_if_declined' => 'Kolom :attribute diperlukan jika :other ditolak.',
    'starts_with' => 'Bidang :attribute harus dimulai dengan salah satu berikut: :values.',
    'uppercase' => 'Kolom :attribute harus berupa huruf besar.',
    'ulid' => 'Bidang :attribute harus berupa ULID yang valid.',
    'uuid' => 'Bidang :attribute harus berupa UUID yang valid.',
];
