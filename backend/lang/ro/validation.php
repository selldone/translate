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

    'accepted' => ':attribute trebuie acceptat.',
    'active_url' => ':attribute nu este o adresă URL validă.',
    'after' => ':attribute trebuie să fie o dată după :date.',
    'after_or_equal' => ':attribute trebuie să fie o dată ulterioară sau egală cu :date.',
    'alpha' => ':attribute poate conține doar litere.',
    'alpha_dash' => ':attribute poate conține numai litere, cifre și liniuțe.',
    'alpha_num' => ':attribute poate conține numai litere și cifre.',
    'array' => ':attribute trebuie să fie o matrice.',
    'before' => ':attribute trebuie să fie o dată înainte de :date.',
    'before_or_equal' => ':attribute trebuie să fie o dată anterioară sau egală cu :date.',
    'between' => [
        'numeric' => ':attribute trebuie să fie între :min și :max.',
        'file' => ':attribute trebuie să fie între :min și :max kilobytes.',
        'string' => ':attribute trebuie să fie între caracterele :min și :max.',
        'array' => ':attribute trebuie să aibă elemente între :min și :max.',
    ],
    'boolean' => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed' => 'Confirmarea :attribute nu se potrivește.',
    'date' => ':attribute nu este o dată validă.',
    'date_format' => ':attribute nu se potrivește cu formatul :format.',
    'different' => ':attribute și :other trebuie să fie diferite.',
    'digits' => ':attribute trebuie să fie :digits cifre.',
    'digits_between' => ':attribute trebuie să fie între cifrele :min și :max.',
    'dimensions' => ':attribute are dimensiuni nevalide ale imaginii.',
    'distinct' => 'Câmpul :attribute are o valoare duplicat.',
    'email' => ':attribute trebuie să fie o adresă de e-mail validă.',
    'exists' => ':attribute selectat este nevalid.',
    'file' => ':attribute trebuie să fie un fișier.',
    'filled' => 'Câmpul :attribute trebuie să aibă o valoare.',
    'gt' => [
        'numeric' => ':attribute trebuie să fie mai mare decât :value.',
        'file' => ':attribute trebuie să fie mai mare decât :value kilobytes.',
        'string' => ':attribute trebuie să fie mai mare decât caracterele :value.',
        'array' => ':attribute trebuie să aibă mai multe elemente decât :value.',
    ],
    'gte' => [
        'numeric' => ':attribute trebuie să fie mai mare sau egal cu :value.',
        'file' => ':attribute trebuie să fie mai mare sau egal cu :value kiloocteți.',
        'string' => ':attribute trebuie să fie mai mare sau egal cu caracterele :value.',
        'array' => ':attribute trebuie să aibă elemente :value sau mai multe.',
    ],
    'image' => ':attribute trebuie să fie o imagine.',
    'in' => ':attribute selectat este nevalid.',
    'in_array' => 'Câmpul :attribute nu există în :other.',
    'integer' => ':attribute trebuie să fie un număr întreg.',
    'ip' => ':attribute trebuie să fie o adresă IP validă.',
    'ipv4' => ':attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6' => ':attribute trebuie să fie o adresă IPv6 validă.',
    'json' => ':attribute trebuie să fie un șir JSON valid.',
    'lt' => [
        'numeric' => ':attribute trebuie să fie mai mic decât :value.',
        'file' => ':attribute trebuie să fie mai mic de :value kilobytes.',
        'string' => ':attribute trebuie să fie mai mic decât caractere :value.',
        'array' => ':attribute trebuie să aibă mai puțin de elemente :value.',
    ],
    'lte' => [
        'numeric' => ':attribute trebuie să fie mai mic sau egal cu :value.',
        'file' => ':attribute trebuie să fie mai mic sau egal cu :value kiloocteți.',
        'string' => ':attribute trebuie să fie mai mic sau egal cu caracterele :value.',
        'array' => ':attribute nu trebuie să aibă mai mult de :value elemente.',
    ],
    'max' => [
        'numeric' => ':attribute nu poate fi mai mare decât :max.',
        'file' => ':attribute nu poate fi mai mare de :max kilobytes.',
        'string' => ':attribute nu poate fi mai mare decât caracterele :max.',
        'array' => ':attribute nu poate avea mai mult de :max elemente.',
    ],
    'mimes' => ':attribute trebuie să fie un fișier de tip: :values.',
    'mimetypes' => ':attribute trebuie să fie un fișier de tip: :values.',
    'min' => [
        'numeric' => ':attribute trebuie să fie cel puțin :min.',
        'file' => ':attribute trebuie să fie de cel puțin :min kilobytes.',
        'string' => ':attribute trebuie să aibă cel puțin caractere :min.',
        'array' => ':attribute trebuie să aibă cel puțin elemente :min.',
    ],
    'not_in' => ':attribute selectat este nevalid.',
    'not_regex' => 'Formatul :attribute este nevalid.',
    'numeric' => ':attribute trebuie să fie un număr.',
    'present' => 'Câmpul :attribute trebuie să fie prezent.',
    'regex' => 'Formatul :attribute este nevalid.',
    'required' => 'Câmpul :attribute este obligatoriu.',
    'required_if' => 'Câmpul :attribute este obligatoriu când :other este :value.',
    'required_unless' => 'Câmpul :attribute este obligatoriu, cu excepția cazului în care :other se află în :values.',
    'required_with' => 'Câmpul :attribute este obligatoriu când :values este prezent.',
    'required_with_all' => 'Câmpul :attribute este obligatoriu când :values este prezent.',
    'required_without' => 'Câmpul :attribute este obligatoriu când :values nu este prezent.',
    'required_without_all' => 'Câmpul :attribute este obligatoriu atunci când niciunul dintre :values nu este prezent.',
    'same' => ':attribute și :other trebuie să se potrivească.',
    'size' => [
        'numeric' => ':attribute trebuie să fie :size.',
        'file' => ':attribute trebuie să fie :size kilobytes.',
        'string' => ':attribute trebuie să fie caractere :size.',
        'array' => ':attribute trebuie să conţină elemente :size.',
    ],
    'string' => ':attribute trebuie să fie un șir.',
    'timezone' => ':attribute trebuie să fie o zonă validă.',
    'unique' => ':attribute a fost deja luat.',
    'uploaded' => ':attribute nu a putut fi încărcat.',
    'url' => 'Formatul :attribute este nevalid.',

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
            'rule-name' => 'mesaj personalizat',
        ],
        'g-recaptcha-response' => [
            'required' => 'Vă rugăm să verificați că nu sunteți un robot.',
            'captcha' => 'Eroare captcha! încercați din nou mai târziu sau contactați administratorul site-ului.',
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



    'accepted_if' => 'Câmpul :attribute trebuie acceptat când :other este :value.',
    'ascii' => 'Câmpul :attribute trebuie să conțină doar caractere și simboluri alfanumerice pe un singur octet.',
    'can' => 'Câmpul :attribute conține o valoare neautorizată.',
    'contains' => 'Câmpului :attribute lipsește o valoare obligatorie.',
    'current_password' => 'Parola este incorectă.',
    'date_equals' => 'Câmpul :attribute trebuie să fie o dată egală cu :date.',
    'decimal' => 'Câmpul :attribute trebuie să aibă :zecimal zecimal.',
    'declined' => 'Câmpul :attribute trebuie refuzat.',
    'declined_if' => 'Câmpul :attribute trebuie refuzat când :other este :value.',
    'doesnt_end_with' => 'Câmpul :attribute nu trebuie să se încheie cu una dintre următoarele: :values.',
    'doesnt_start_with' => 'Câmpul :attribute nu trebuie să înceapă cu una dintre următoarele: :values.',
    'ends_with' => 'Câmpul :attribute trebuie să se încheie cu una dintre următoarele: :values.',
    'enum' => 'Atributul : selectat este nevalid.',
    'extensions' => 'Câmpul :attribute trebuie să aibă una dintre următoarele extensii: :values.',
    'hex_color' => 'Câmpul :attribute trebuie să fie o culoare hexazecimală validă.',
    'list' => 'Câmpul :attribute trebuie să fie o listă.',
    'lowercase' => 'Câmpul :attribute trebuie să fie cu litere mici.',
    'mac_address' => 'Câmpul :attribute trebuie să fie o adresă MAC validă.',
    'max_digits' => 'Câmpul :attribute nu trebuie să aibă mai mult de :max cifre.',
    'min_digits' => 'Câmpul :attribute trebuie să aibă cel puțin cifre :min.',
    'missing' => 'Câmpul :attribute trebuie să lipsească.',
    'missing_if' => 'Câmpul :attribute trebuie să lipsească atunci când :other este :value.',
    'missing_unless' => 'Câmpul :attribute trebuie să lipsească, cu excepția cazului în care :other este :value.',
    'missing_with' => 'Câmpul :attribute trebuie să lipsească atunci când :values este prezent.',
    'missing_with_all' => 'Câmpul :attribute trebuie să lipsească atunci când sunt prezente :value.',
    'multiple_of' => 'Câmpul :attribute trebuie să fie un multiplu al :value.',
    'password' => [
        'letters' => 'Câmpul :attribute trebuie să conțină cel puțin o literă.',
        'mixed' => 'Câmpul :attribute trebuie să conțină cel puțin o literă mare și o literă mică.',
        'numbers' => 'Câmpul :attribute trebuie să conțină cel puțin un număr.',
        'symbols' => 'Câmpul :attribute trebuie să conțină cel puțin un simbol.',
        'uncompromised' => 'Atributul : dat a apărut într-o scurgere de date. Vă rugăm să alegeți un alt :attribute.',
    ],
    'present_if' => 'Câmpul :attribute trebuie să fie prezent când :other este :value.',
    'present_unless' => 'Câmpul :attribute trebuie să fie prezent, cu excepția cazului în care :other este :value.',
    'present_with' => 'Câmpul :attribute trebuie să fie prezent când este prezent :values.',
    'present_with_all' => 'Câmpul :attribute trebuie să fie prezent atunci când sunt prezente :values.',
    'prohibited' => 'Câmpul :attribute este interzis.',
    'prohibited_if' => 'Câmpul :attribute este interzis când :other este :value.',
    'prohibited_unless' => 'Câmpul :attribute este interzis dacă :other este în :values.',
    'prohibits' => 'Câmpul :attribute interzice :other să fie prezent.',
    'required_array_keys' => 'Câmpul :attribute trebuie să conţină intrări pentru: :valori.',
    'required_if_accepted' => 'Câmpul :attribute este obligatoriu când :other este acceptat.',
    'required_if_declined' => 'Câmpul :attribute este obligatoriu când :other este refuzat.',
    'starts_with' => 'Câmpul :attribute trebuie să înceapă cu una dintre următoarele: :values.',
    'uppercase' => 'Câmpul :attribute trebuie să fie cu majuscule.',
    'ulid' => 'Câmpul :attribute trebuie să fie un ULID valid.',
    'uuid' => 'Câmpul :attribute trebuie să fie un UUID valid.',
];
