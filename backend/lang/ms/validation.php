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

    'accepted' => ':attribute mesti diterima.',
    'active_url' => ':attribute bukan URL yang sah.',
    'after' => ':attribute mestilah tarikh selepas :date.',
    'after_or_equal' => ':attribute mestilah tarikh selepas atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh mengandungi huruf.',
    'alpha_dash' => ':attribute hanya boleh mengandungi huruf, nombor dan sempang.',
    'alpha_num' => ':attribute hanya boleh mengandungi huruf dan nombor.',
    'array' => 'The :attribute mestilah array.',
    'before' => ':attribute mestilah tarikh sebelum :date.',
    'before_or_equal' => ':attribute mestilah tarikh sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute mestilah antara :min dan :max.',
        'file' => ':attribute mestilah antara :min dan :max kilobait.',
        'string' => ':attribute mestilah antara aksara :min dan :max.',
        'array' => ':attribute mesti mempunyai antara item :min dan :max.',
    ],
    'boolean' => 'Medan :attribute mestilah benar atau salah.',
    'confirmed' => 'Pengesahan :attribute tidak sepadan.',
    'date' => ':attribute bukan tarikh yang sah.',
    'date_format' => ':attribute tidak sepadan dengan format :format.',
    'different' => ':attribute dan :other mestilah berbeza.',
    'digits' => ':attribute mestilah digit :digits.',
    'digits_between' => ':attribute mestilah antara digit :min dan :max.',
    'dimensions' => ':attribute mempunyai dimensi imej yang tidak sah.',
    'distinct' => 'Medan :attribute mempunyai nilai pendua.',
    'email' => ':attribute mestilah alamat e-mel yang sah.',
    'exists' => ':attribute yang dipilih adalah tidak sah.',
    'file' => ':attribute mestilah fail.',
    'filled' => 'Medan :attribute mesti mempunyai nilai.',
    'gt' => [
        'numeric' => ':attribute mestilah lebih besar daripada :value.',
        'file' => ':attribute mestilah lebih besar daripada :value kilobait.',
        'string' => ':attribute mestilah lebih besar daripada :value characters.',
        'array' => ':attribute mesti mempunyai lebih daripada item :value.',
    ],
    'gte' => [
        'numeric' => ':attribute mestilah lebih besar daripada atau sama dengan :value.',
        'file' => ':attribute mestilah lebih besar daripada atau sama dengan :value kilobait.',
        'string' => ':attribute mestilah lebih besar daripada atau sama dengan aksara :value.',
        'array' => ':attribute mesti mempunyai item :value atau lebih.',
    ],
    'image' => ':attribute mestilah imej.',
    'in' => ':attribute yang dipilih adalah tidak sah.',
    'in_array' => 'Medan :attribute tidak wujud dalam :other.',
    'integer' => ':attribute mestilah integer.',
    'ip' => ':attribute mestilah alamat IP yang sah.',
    'ipv4' => ':attribute mestilah alamat IPv4 yang sah.',
    'ipv6' => ':attribute mestilah alamat IPv6 yang sah.',
    'json' => ':attribute mestilah rentetan JSON yang sah.',
    'lt' => [
        'numeric' => ':attribute mestilah kurang daripada :value.',
        'file' => ':attribute mestilah kurang daripada :value kilobait.',
        'string' => ':attribute mestilah kurang daripada aksara :value.',
        'array' => ':attribute mesti mempunyai kurang daripada item :value.',
    ],
    'lte' => [
        'numeric' => ':attribute mestilah kurang daripada atau sama dengan :value.',
        'file' => ':attribute mestilah kurang daripada atau sama dengan :value kilobait.',
        'string' => ':attribute mestilah kurang daripada atau sama dengan aksara :value.',
        'array' => ':attribute mestilah tidak mempunyai lebih daripada item :value.',
    ],
    'max' => [
        'numeric' => ':attribute mungkin tidak lebih besar daripada :max.',
        'file' => ':attribute tidak boleh lebih besar daripada :max kilobait.',
        'string' => ':attribute mungkin tidak lebih besar daripada aksara :max.',
        'array' => ':attribute mungkin tidak mempunyai lebih daripada item :max.',
    ],
    'mimes' => ':attribute mestilah fail jenis: :values.',
    'mimetypes' => ':attribute mestilah fail jenis: :values.',
    'min' => [
        'numeric' => ':attribute mestilah sekurang-kurangnya :min.',
        'file' => ':attribute mestilah sekurang-kurangnya :min kilobait.',
        'string' => ':attribute mestilah sekurang-kurangnya :min aksara.',
        'array' => ':attribute mesti mempunyai sekurang-kurangnya item :min.',
    ],
    'not_in' => ':attribute yang dipilih adalah tidak sah.',
    'not_regex' => 'Format :attribute tidak sah.',
    'numeric' => ':attribute mestilah nombor.',
    'present' => 'Medan :attribute mesti ada.',
    'regex' => 'Format :attribute tidak sah.',
    'required' => 'Medan :attribute diperlukan.',
    'required_if' => 'Medan :attribute diperlukan apabila :other ialah :value.',
    'required_unless' => 'Medan :attribute diperlukan melainkan :other berada dalam :values.',
    'required_with' => 'Medan :attribute diperlukan apabila :values hadir.',
    'required_with_all' => 'Medan :attribute diperlukan apabila :values hadir.',
    'required_without' => 'Medan :attribute diperlukan apabila :values tidak ada.',
    'required_without_all' => 'Medan :attribute diperlukan apabila tiada satu pun daripada :values hadir.',
    'same' => ':attribute dan :other mesti sepadan.',
    'size' => [
        'numeric' => ':attribute mestilah :size.',
        'file' => ':attribute mestilah :size kilobait.',
        'string' => ':attribute mestilah aksara :size.',
        'array' => ':attribute mesti mengandungi item :size.',
    ],
    'string' => ':attribute mestilah rentetan.',
    'timezone' => ':attribute mestilah zon yang sah.',
    'unique' => ':attribute telah pun diambil.',
    'uploaded' => ':attribute gagal dimuat naik.',
    'url' => 'Format :attribute tidak sah.',

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
            'rule-name' => 'pesanan tersuai',
        ],
        'g-recaptcha-response' => [
            'required' => 'Sila sahkan bahawa anda bukan robot.',
            'captcha' => 'Ralat Captcha! cuba lagi kemudian atau hubungi pentadbir tapak.',
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



    'accepted_if' => 'Medan :attribute mesti diterima apabila :other ialah :value.',
    'ascii' => 'Medan :attribute hanya boleh mengandungi aksara dan simbol alfanumerik bait tunggal.',
    'can' => 'Medan :attribute mengandungi nilai yang tidak dibenarkan.',
    'contains' => 'Medan :attribute tiada nilai yang diperlukan.',
    'current_password' => 'Kata laluan tidak betul.',
    'date_equals' => 'Medan :attribute mestilah tarikh bersamaan dengan :date.',
    'decimal' => 'Medan :attribute mesti mempunyai :perpuluhan tempat perpuluhan.',
    'declined' => 'Medan :attribute mesti ditolak.',
    'declined_if' => 'Medan :attribute mesti ditolak apabila :other ialah :value.',
    'doesnt_end_with' => 'Medan :attribute tidak boleh berakhir dengan salah satu daripada berikut: :values.',
    'doesnt_start_with' => 'Medan :attribute tidak boleh bermula dengan salah satu daripada berikut: :values.',
    'ends_with' => 'Medan :attribute mesti berakhir dengan salah satu daripada berikut: :values.',
    'enum' => ':atribut yang dipilih tidak sah.',
    'extensions' => 'Medan :attribute mesti mempunyai salah satu daripada sambungan berikut: :values.',
    'hex_color' => 'Medan :attribute mestilah warna perenambelasan yang sah.',
    'list' => 'Medan :attribute mestilah senarai.',
    'lowercase' => 'Medan :attribute mestilah huruf kecil.',
    'mac_address' => 'Medan :attribute mestilah alamat MAC yang sah.',
    'max_digits' => 'Medan :attribute mestilah tidak mempunyai lebih daripada :max digit.',
    'min_digits' => 'Medan :attribute mesti mempunyai sekurang-kurangnya :min digit.',
    'missing' => 'Medan :attribute mesti tiada.',
    'missing_if' => 'Medan :attribute mesti tiada apabila :other ialah :value.',
    'missing_unless' => 'Medan :attribute mesti tiada melainkan :other ialah :value.',
    'missing_with' => 'Medan :attribute mesti tiada apabila :values hadir.',
    'missing_with_all' => 'Medan :attribute mesti tiada apabila :values hadir.',
    'multiple_of' => 'Medan :attribute mestilah gandaan :value.',
    'password' => [
        'letters' => 'Medan :attribute mesti mengandungi sekurang-kurangnya satu huruf.',
        'mixed' => 'Medan :attribute mesti mengandungi sekurang-kurangnya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Medan :attribute mesti mengandungi sekurang-kurangnya satu nombor.',
        'symbols' => 'Medan :attribute mesti mengandungi sekurang-kurangnya satu simbol.',
        'uncompromised' => 'Atribut : yang diberikan telah muncul dalam kebocoran data. Sila pilih :attribute yang berbeza.',
    ],
    'present_if' => 'Medan :attribute mesti ada apabila :other ialah :value.',
    'present_unless' => 'Medan :attribute mesti ada melainkan :other ialah :value.',
    'present_with' => 'Medan :attribute mesti ada apabila :values hadir.',
    'present_with_all' => 'Medan :attribute mesti ada apabila :values hadir.',
    'prohibited' => 'Medan :atribut adalah dilarang.',
    'prohibited_if' => 'Medan :attribute adalah dilarang apabila :other ialah :value.',
    'prohibited_unless' => 'Medan :attribute adalah dilarang melainkan :other berada dalam :values.',
    'prohibits' => 'Medan :atribut melarang :lain daripada hadir.',
    'required_array_keys' => 'Medan :attribute mesti mengandungi entri untuk: :values.',
    'required_if_accepted' => 'Medan :attribute diperlukan apabila :lain diterima.',
    'required_if_declined' => 'Medan :attribute diperlukan apabila :other ditolak.',
    'starts_with' => 'Medan :attribute mesti bermula dengan salah satu daripada berikut: :values.',
    'uppercase' => 'Medan :attribute mestilah huruf besar.',
    'ulid' => 'Medan :attribute mestilah ULID yang sah.',
    'uuid' => 'Medan :attribute mestilah UUID yang sah.',
];
