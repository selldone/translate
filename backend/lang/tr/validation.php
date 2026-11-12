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

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute, :date\'den sonraki bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, :date\'den sonraki veya buna eşit bir tarih olmalıdır.',
    'alpha' => ':attribute yalnızca harf içerebilir.',
    'alpha_dash' => ':attribute yalnızca harf, sayı ve tire içerebilir.',
    'alpha_num' => ':attribute yalnızca harf ve sayı içerebilir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute, :date\'den önceki bir tarih olmalıdır.',
    'before_or_equal' => ':attribute, :date tarihinden önce veya buna eşit bir tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min ve :max arasında olmalıdır.',
        'file' => ':attribute :min ve :max kilobaytlar arasında olmalıdır.',
        'string' => ':attribute :min ve :max karakterleri arasında olmalıdır.',
        'array' => ':attribute, :min ve :max öğeleri arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_format' => ':attribute, :format biçimiyle eşleşmiyor.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits rakamlardan oluşmalıdır.',
    'digits_between' => ':attribute :min ve :max basamakları arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı bir değere sahip olmalıdır.',
    'gt' => [
        'numeric' => ':attribute, :value değerinden büyük olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük olmalıdır.',
        'string' => ':attribute, :value karakterlerinden büyük olmalıdır.',
        'array' => ':attribute, :value öğelerinden daha fazlasına sahip olmalıdır.',
    ],
    'gte' => [
        'numeric' => ':attribute, :value değerinden büyük veya ona eşit olmalıdır.',
        'file' => ':attribute, :value kilobayttan büyük veya ona eşit olmalıdır.',
        'string' => ':attribute, :value karakterlerinden büyük veya ona eşit olmalıdır.',
        'array' => ':attribute, :value öğelerine veya daha fazlasına sahip olmalıdır.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute bir tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ':attribute, :value değerinden küçük olmalıdır.',
        'file' => ':attribute, :value kilobayttan küçük olmalıdır.',
        'string' => ':attribute, :value karakterlerinden daha az olmalıdır.',
        'array' => ':attribute, :value öğelerinden daha azına sahip olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':attribute, :value değerinden küçük veya ona eşit olmalıdır.',
        'file' => ':attribute :value kilobayttan küçük veya ona eşit olmalıdır.',
        'string' => ':attribute, :value karakterlerinden küçük veya ona eşit olmalıdır.',
        'array' => ':attribute, :value öğelerinden daha fazlasına sahip olmamalıdır.',
    ],
    'max' => [
        'numeric' => ':attribute :max değerinden büyük olamaz.',
        'file' => ':attribute :max kilobayttan büyük olamaz.',
        'string' => ':attribute, :max karakterlerinden büyük olamaz.',
        'array' => ':attribute öğesi, :max öğesinden fazla öğeye sahip olamaz.',
    ],
    'mimes' => ':attribute, :values türünde bir dosya olmalıdır.',
    'mimetypes' => ':attribute, :values türünde bir dosya olmalıdır.',
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min öğelerine sahip olmalıdır.',
    ],
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':attribute alanı, :other :value olduğunda gereklidir.',
    'required_unless' => ':attribute alanı, :other :values içinde olmadığı sürece gereklidir.',
    'required_with' => ':attribute alanı, :values mevcut olduğunda gereklidir.',
    'required_with_all' => ':attribute alanı, :values mevcut olduğunda gereklidir.',
    'required_without' => ':attribute alanı, :values olmadığında gereklidir.',
    'required_without_all' => ':attribute alanı, :values değerlerinin hiçbiri mevcut olmadığında gereklidir.',
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute :size öğeleri içermelidir.',
    ],
    'string' => ':attribute bir dize olmalıdır.',
    'timezone' => ':attribute geçerli bir bölge olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute biçimi geçersiz.',

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
            'rule-name' => 'özel mesaj',
        ],
        'g-recaptcha-response' => [
            'required' => 'Lütfen robot olmadığınızı doğrulayın.',
            'captcha' => 'CAPTCHA hatası! daha sonra tekrar deneyin veya site yöneticisiyle iletişime geçin.',
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



    'accepted_if' => ':attribute alanı, :other değeri :value olduğunda kabul edilmelidir.',
    'ascii' => ':attribute alanı yalnızca tek baytlık alfanümerik karakterler ve semboller içermelidir.',
    'can' => ':attribute alanı yetkisiz bir değer içeriyor.',
    'contains' => ':attribute alanında gerekli bir değer eksik.',
    'current_password' => 'Şifre hatalı.',
    'date_equals' => ':attribute alanı :date değerine eşit bir tarih olmalıdır.',
    'decimal' => ':attribute alanı :decimal ondalık basamaklara sahip olmalıdır.',
    'declined' => ':attribute alanı reddedilmelidir.',
    'declined_if' => ':attribute alanı, :other değeri :value olduğunda reddedilmelidir.',
    'doesnt_end_with' => ':attribute alanı aşağıdakilerden biriyle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute alanı aşağıdakilerden biriyle başlamamalıdır: :values.',
    'ends_with' => ':attribute alanı aşağıdakilerden biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersiz.',
    'extensions' => ':attribute alanı aşağıdaki uzantılardan birine sahip olmalıdır: :values.',
    'hex_color' => ':attribute alanı geçerli bir onaltılık renk olmalıdır.',
    'list' => ':attribute alanı bir liste olmalıdır.',
    'lowercase' => ':attribute alanı küçük harfle yazılmalıdır.',
    'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
    'max_digits' => ':attribute alanı :max\'tan fazla rakam içeremez.',
    'min_digits' => ':attribute alanı en az :min rakam içermelidir.',
    'missing' => ':attribute alanı eksik olmalı.',
    'missing_if' => ':other ifadesi :value olduğunda :attribute alanı eksik olmalıdır.',
    'missing_unless' => ':attribute alanı, :other değeri :value olmadığı sürece eksik olmalıdır.',
    'missing_with' => ':values mevcut olduğunda :attribute alanı eksik olmalıdır.',
    'missing_with_all' => ':values mevcut olduğunda :attribute alanı eksik olmalıdır.',
    'multiple_of' => ':attribute alanı :value\'nun katı olmalıdır.',
    'password' => [
        'letters' => ':attribute alanı en az bir harf içermelidir.',
        'mixed' => ':attribute alanı en az bir büyük harf ve bir küçük harf içermelidir.',
        'numbers' => ':attribute alanı en az bir rakam içermelidir.',
        'symbols' => ':attribute alanı en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute bir veri sızıntısında ortaya çıktı. Lütfen farklı bir :attribute seçin.',
    ],
    'present_if' => ':other değeri :value olduğunda :attribute alanı mevcut olmalıdır.',
    'present_unless' => ':attribute alanı, :other değeri :value olmadığı sürece mevcut olmalıdır.',
    'present_with' => ':values mevcut olduğunda :attribute alanı da mevcut olmalıdır.',
    'present_with_all' => ':attribute alanı, :values mevcut olduğunda mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':attribute alanı, :other değeri :value olduğunda yasaktır.',
    'prohibited_unless' => ':attribute alanı, :other alanı :values içinde olmadığı sürece yasaktır.',
    'prohibits' => ':attribute alanı :other özelliğinin bulunmasını yasaklar.',
    'required_array_keys' => ':attribute alanı :values için girdiler içermelidir.',
    'required_if_accepted' => ':attribute alanı :other kabul edildiğinde zorunludur.',
    'required_if_declined' => ':attribute alanı :other reddedildiğinde zorunludur.',
    'starts_with' => ':attribute alanı aşağıdakilerden biriyle başlamalıdır: :values.',
    'uppercase' => ':attribute alanı büyük harfle yazılmalıdır.',
    'ulid' => ':attribute alanı geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute alanı geçerli bir UUID olmalıdır.',
];
