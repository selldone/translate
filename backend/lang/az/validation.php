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

    'accepted' => ':attribute qəbul edilməlidir.',
    'active_url' => ':attribute etibarlı URL deyil.',
    'after' => ':attribute :date-dan sonrakı tarix olmalıdır.',
    'after_or_equal' => ':attribute :date tarixindən sonrakı və ya ona bərabər olan tarix olmalıdır.',
    'alpha' => ':attribute yalnız hərflərdən ibarət ola bilər.',
    'alpha_dash' => ':attribute yalnız hərflər, rəqəmlər və tirelərdən ibarət ola bilər.',
    'alpha_num' => ':attribute yalnız hərf və rəqəmlərdən ibarət ola bilər.',
    'array' => ':attribute massiv olmalıdır.',
    'before' => ':attribute :date-dan əvvəlki tarix olmalıdır.',
    'before_or_equal' => ':attribute :date tarixindən əvvəl və ya ona bərabər bir tarix olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min və :max arasında olmalıdır.',
        'file' => ':attribute :min və :max kilobayt arasında olmalıdır.',
        'string' => ':attribute :min və :max simvolları arasında olmalıdır.',
        'array' => ':attribute :min və :max arasında elementlərə malik olmalıdır.',
    ],
    'boolean' => ':attribute sahəsi doğru və ya yalan olmalıdır.',
    'confirmed' => ':attribute təsdiqi uyğun gəlmir.',
    'date' => ':attribute etibarlı tarix deyil.',
    'date_format' => ':attribute :format formatına uyğun gəlmir.',
    'different' => ':attribute və :other fərqli olmalıdır.',
    'digits' => ':attribute :digits rəqəmləri olmalıdır.',
    'digits_between' => ':attribute :min və :max rəqəmləri arasında olmalıdır.',
    'dimensions' => ':attribute yanlış şəkil ölçülərinə malikdir.',
    'distinct' => ':attribute sahəsinin dublikat dəyəri var.',
    'email' => ':attribute etibarlı e-poçt ünvanı olmalıdır.',
    'exists' => 'Seçilmiş :attribute yanlışdır.',
    'file' => ':attribute fayl olmalıdır.',
    'filled' => ':attribute sahəsinin dəyəri olmalıdır.',
    'gt' => [
        'numeric' => ':attribute :value-dan böyük olmalıdır.',
        'file' => ':attribute :value kilobaytdan böyük olmalıdır.',
        'string' => ':attribute :value simvollarından böyük olmalıdır.',
        'array' => ':attribute-da :value-dan çox element olmalıdır.',
    ],
    'gte' => [
        'numeric' => ':attribute :value-dan böyük və ya ona bərabər olmalıdır.',
        'file' => ':attribute :value kilobaytdan böyük və ya ona bərabər olmalıdır.',
        'string' => ':attribute :value simvollarından böyük və ya ona bərabər olmalıdır.',
        'array' => ':attribute-da :value elementləri və ya daha çox olmalıdır.',
    ],
    'image' => ':attribute şəkil olmalıdır.',
    'in' => 'Seçilmiş :attribute yanlışdır.',
    'in_array' => ':attribute sahəsi :other-da mövcud deyil.',
    'integer' => ':attribute tam ədəd olmalıdır.',
    'ip' => ':attribute etibarlı IP ünvanı olmalıdır.',
    'ipv4' => ':attribute etibarlı IPv4 ünvanı olmalıdır.',
    'ipv6' => ':attribute etibarlı IPv6 ünvanı olmalıdır.',
    'json' => ':attribute etibarlı JSON sətri olmalıdır.',
    'lt' => [
        'numeric' => ':attribute :value-dan az olmalıdır.',
        'file' => ':attribute :value kilobaytdan az olmalıdır.',
        'string' => ':attribute :value simvollarından az olmalıdır.',
        'array' => ':attribute-da :value elementlərindən az olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':attribute :value-dan az və ya ona bərabər olmalıdır.',
        'file' => ':attribute :value kilobaytdan az və ya ona bərabər olmalıdır.',
        'string' => ':attribute :value simvollarından az və ya ona bərabər olmalıdır.',
        'array' => ':attribute-da :value-dan çox element olmamalıdır.',
    ],
    'max' => [
        'numeric' => ':attribute :max-dan böyük ola bilməz.',
        'file' => ':attribute :max kilobaytdan çox ola bilməz.',
        'string' => ':attribute :max simvollarından çox ola bilməz.',
        'array' => ':attribute-da :max-dan çox element ola bilməz.',
    ],
    'mimes' => ':attribute belə bir fayl olmalıdır: :values.',
    'mimetypes' => ':attribute belə bir fayl olmalıdır: :values.',
    'min' => [
        'numeric' => ':attribute ən azı :min olmalıdır.',
        'file' => ':attribute ən azı :min kilobayt olmalıdır.',
        'string' => ':attribute ən azı :min simvollarından ibarət olmalıdır.',
        'array' => ':attribute ən azı :min elementlərinə malik olmalıdır.',
    ],
    'not_in' => 'Seçilmiş :attribute yanlışdır.',
    'not_regex' => ':attribute formatı yanlışdır.',
    'numeric' => 'The :attribute must be a number.',
    'present' => ':attribute sahəsi mövcud olmalıdır.',
    'regex' => ':attribute formatı yanlışdır.',
    'required' => ':attribute sahəsi tələb olunur.',
    'required_if' => ':other :value olduqda :attribute sahəsi tələb olunur.',
    'required_unless' => ':other :values-da deyilsə, :attribute sahəsi tələb olunur.',
    'required_with' => ':values mövcud olduqda :attribute sahəsi tələb olunur.',
    'required_with_all' => ':values mövcud olduqda :attribute sahəsi tələb olunur.',
    'required_without' => ':attribute sahəsi :values olmadıqda tələb olunur.',
    'required_without_all' => ':attribute sahəsi :values-dan heç biri olmadıqda tələb olunur.',
    'same' => ':attribute və :other uyğun olmalıdır.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size simvolları olmalıdır.',
        'array' => ':attribute :size elementlərini ehtiva etməlidir.',
    ],
    'string' => ':attribute sətir olmalıdır.',
    'timezone' => ':attribute etibarlı zona olmalıdır.',
    'unique' => ':attribute artıq götürülüb.',
    'uploaded' => ':attribute yükləmək alınmadı.',
    'url' => ':attribute formatı yanlışdır.',

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
            'rule-name' => 'xüsusi mesaj',
        ],
        'g-recaptcha-response' => [
            'required' => 'Robot olmadığınızı təsdiqləyin.',
            'captcha' => 'Captcha xətası! sonra yenidən cəhd edin və ya sayt admini ilə əlaqə saxlayın.',
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



    'accepted_if' => ':atribut sahəsi :digər :value olduqda qəbul edilməlidir.',
    'ascii' => ':atribut sahəsi yalnız bir baytlıq alfasayısal simvol və simvollardan ibarət olmalıdır.',
    'can' => ':atribut sahəsində icazəsiz dəyər var.',
    'contains' => ':atribut sahəsində tələb olunan dəyər yoxdur.',
    'current_password' => 'Parol səhvdir.',
    'date_equals' => ':atribut sahəsi :date ilə bərabər tarix olmalıdır.',
    'decimal' => ':atribut sahəsində :onluq onluq yerləri olmalıdır.',
    'declined' => ':atribut sahəsi rədd edilməlidir.',
    'declined_if' => ':digər :dəyər olduqda :atribut sahəsi rədd edilməlidir.',
    'doesnt_end_with' => ':atribut sahəsi aşağıdakılardan biri ilə bitməməlidir: :dəyərlər.',
    'doesnt_start_with' => ':atribut sahəsi aşağıdakılardan biri ilə başlamamalıdır: :dəyərlər.',
    'ends_with' => ':atribut sahəsi aşağıdakılardan biri ilə bitməlidir: :dəyərlər.',
    'enum' => 'Seçilmiş :atribut etibarsızdır.',
    'extensions' => ':atribut sahəsi aşağıdakı genişlənmələrdən birinə malik olmalıdır: :dəyərlər.',
    'hex_color' => ':atribut sahəsi etibarlı onaltılıq rəng olmalıdır.',
    'list' => ':atribut sahəsi siyahı olmalıdır.',
    'lowercase' => ':atribut sahəsi kiçik hərf olmalıdır.',
    'mac_address' => ':atribut sahəsi etibarlı MAC ünvanı olmalıdır.',
    'max_digits' => ':atribut sahəsində :max rəqəmindən çox olmamalıdır.',
    'min_digits' => ':atribut sahəsində ən azı :min rəqəmləri olmalıdır.',
    'missing' => ':atribut sahəsi əskik olmalıdır.',
    'missing_if' => ':digər :value olduqda :atribut sahəsi əskik olmalıdır.',
    'missing_unless' => ':digər :value olmadığı halda :atribut sahəsi əskik olmalıdır.',
    'missing_with' => ':dəyərlər mövcud olduqda :atribut sahəsi əskik olmalıdır.',
    'missing_with_all' => ':dəyərlər mövcud olduqda :atribut sahəsi əskik olmalıdır.',
    'multiple_of' => ':atribut sahəsi :dəyərin çoxluğu olmalıdır.',
    'password' => [
        'letters' => ':atribut sahəsində ən azı bir hərf olmalıdır.',
        'mixed' => ':atribut sahəsində ən azı bir böyük və bir kiçik hərf olmalıdır.',
        'numbers' => ':atribut sahəsində ən azı bir ədəd olmalıdır.',
        'symbols' => ':atribut sahəsində ən azı bir simvol olmalıdır.',
        'uncompromised' => 'Verilmiş :atribut məlumat sızmasında ortaya çıxdı. Fərqli :atribut seçin.',
    ],
    'present_if' => ':atribut sahəsi :digər :value olduqda mövcud olmalıdır.',
    'present_unless' => ':digər :value olmadığı halda :atribut sahəsi mövcud olmalıdır.',
    'present_with' => ':atribut sahəsi :dəyərlər mövcud olduqda mövcud olmalıdır.',
    'present_with_all' => ':atribut sahəsi :dəyərlər mövcud olduqda mövcud olmalıdır.',
    'prohibited' => ':atribut sahəsi qadağandır.',
    'prohibited_if' => ':digər :dəyər olduqda :atribut sahəsi qadağandır.',
    'prohibited_unless' => ':digər :dəyərlərdə olmadığı halda :atribut sahəsi qadağandır.',
    'prohibits' => ':atribut sahəsi :digərin mövcud olmasını qadağan edir.',
    'required_array_keys' => ':atribut sahəsində: :dəyərlər üçün qeydlər olmalıdır.',
    'required_if_accepted' => ':digər qəbul edildikdə :atribut sahəsi tələb olunur.',
    'required_if_declined' => ':digər rədd edildikdə :atribut sahəsi tələb olunur.',
    'starts_with' => ':atribut sahəsi aşağıdakılardan biri ilə başlamalıdır: :dəyərlər.',
    'uppercase' => ':atribut sahəsi böyük hərf olmalıdır.',
    'ulid' => ':atribut sahəsi etibarlı ULID olmalıdır.',
    'uuid' => ':atribut sahəsi etibarlı UUID olmalıdır.',
];
