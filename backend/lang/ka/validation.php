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

    'accepted' => ':attribute უნდა იქნას მიღებული.',
    'active_url' => ':attribute არ არის სწორი URL.',
    'after' => ':attribute უნდა იყოს :date შემდგომი თარიღი.',
    'after_or_equal' => ':attribute უნდა იყოს თარიღი :date-ის შემდგომი ან ტოლი.',
    'alpha' => ':attribute შეიძლება შეიცავდეს მხოლოდ ასოებს.',
    'alpha_dash' => ':attribute შეიძლება შეიცავდეს მხოლოდ ასოებს, ციფრებს და ტირეებს.',
    'alpha_num' => ':attribute შეიძლება შეიცავდეს მხოლოდ ასოებსა და ციფრებს.',
    'array' => ':attribute უნდა იყოს მასივი.',
    'before' => ':attribute უნდა იყოს :date-მდე თარიღი.',
    'before_or_equal' => ':attribute უნდა იყოს თარიღი ადრე ან ტოლი :date.',
    'between' => [
        'numeric' => ':attribute უნდა იყოს :min და :max შორის.',
        'file' => ':attribute უნდა იყოს :min და :max კილობაიტებს შორის.',
        'string' => ':attribute უნდა იყოს :min და :max სიმბოლოებს შორის.',
        'array' => ':attribute უნდა ჰქონდეს :min და :max ელემენტებს შორის.',
    ],
    'boolean' => ':attribute ველი უნდა იყოს true ან false.',
    'confirmed' => ':attribute დადასტურება არ ემთხვევა.',
    'date' => ':attribute არ არის სწორი თარიღი.',
    'date_format' => ':attribute არ ემთხვევა :format ფორმატს.',
    'different' => ':attribute და :other განსხვავებული უნდა იყოს.',
    'digits' => ':attribute უნდა იყოს :digits ციფრი.',
    'digits_between' => ':attribute უნდა იყოს :min და :max ციფრებს შორის.',
    'dimensions' => ':attribute აქვს არასწორი გამოსახულების ზომები.',
    'distinct' => ':attribute ველს აქვს დუბლიკატი მნიშვნელობა.',
    'email' => ':attribute უნდა იყოს სწორი ელფოსტის მისამართი.',
    'exists' => 'არჩეული :attribute არასწორია.',
    'file' => ':attribute უნდა იყოს ფაილი.',
    'filled' => ':attribute ველს უნდა ჰქონდეს მნიშვნელობა.',
    'gt' => [
        'numeric' => ':attribute უნდა იყოს :value-ზე მეტი.',
        'file' => ':attribute უნდა იყოს :value კილობაიტზე მეტი.',
        'string' => ':attribute უნდა აღემატებოდეს :value სიმბოლოებს.',
        'array' => ':attribute უნდა ჰქონდეს :value-ზე მეტი ელემენტი.',
    ],
    'gte' => [
        'numeric' => ':attribute უნდა იყოს მეტი ან ტოლი :value.',
        'file' => ':attribute უნდა იყოს მეტი ან ტოლი :value კილობაიტზე.',
        'string' => ':attribute უნდა იყოს მეტი ან ტოლი :value სიმბოლოზე.',
        'array' => ':attribute უნდა ჰქონდეს :value ელემენტი ან მეტი.',
    ],
    'image' => ':attribute უნდა იყოს სურათი.',
    'in' => 'არჩეული :attribute არასწორია.',
    'in_array' => ':attribute ველი არ არსებობს :other-ში.',
    'integer' => ':attribute უნდა იყოს მთელი რიცხვი.',
    'ip' => ':attribute უნდა იყოს სწორი IP მისამართი.',
    'ipv4' => ':attribute უნდა იყოს სწორი IPv4 მისამართი.',
    'ipv6' => ':attribute უნდა იყოს სწორი IPv6 მისამართი.',
    'json' => ':attribute უნდა იყოს სწორი JSON სტრიქონი.',
    'lt' => [
        'numeric' => ':attribute უნდა იყოს :value-ზე ნაკლები.',
        'file' => ':attribute უნდა იყოს :value კილობაიტზე ნაკლები.',
        'string' => ':attribute უნდა იყოს :value სიმბოლოზე ნაკლები.',
        'array' => ':attribute უნდა ჰქონდეს :value-ზე ნაკლები ელემენტი.',
    ],
    'lte' => [
        'numeric' => ':attribute უნდა იყოს ნაკლები ან ტოლი :value.',
        'file' => ':attribute უნდა იყოს :value კილობაიტზე ნაკლები ან ტოლი.',
        'string' => ':attribute უნდა იყოს ნაკლები ან ტოლი :value სიმბოლოებზე.',
        'array' => ':attribute არ უნდა ჰქონდეს :value-ზე მეტი ელემენტი.',
    ],
    'max' => [
        'numeric' => ':attribute არ შეიძლება იყოს :max-ზე მეტი.',
        'file' => ':attribute არ შეიძლება იყოს :max კილობაიტზე მეტი.',
        'string' => ':attribute არ შეიძლება იყოს :max სიმბოლოზე მეტი.',
        'array' => ':attribute შეიძლება არ ჰქონდეს :max-ზე მეტი ელემენტი.',
    ],
    'mimes' => ':attribute უნდა იყოს ფაილი ტიპის: :values.',
    'mimetypes' => ':attribute უნდა იყოს ფაილი ტიპის: :values.',
    'min' => [
        'numeric' => ':attribute უნდა იყოს მინიმუმ :min.',
        'file' => ':attribute უნდა იყოს მინიმუმ :min კილობაიტი.',
        'string' => ':attribute უნდა იყოს მინიმუმ :min სიმბოლო.',
        'array' => ':attribute უნდა ჰქონდეს მინიმუმ :min ელემენტი.',
    ],
    'not_in' => 'არჩეული :attribute არასწორია.',
    'not_regex' => ':attribute ფორმატი არასწორია.',
    'numeric' => ':attribute უნდა იყოს რიცხვი.',
    'present' => ':attribute ველი უნდა იყოს წარმოდგენილი.',
    'regex' => ':attribute ფორმატი არასწორია.',
    'required' => 'საჭიროა :attribute ველი.',
    'required_if' => ':attribute ველი საჭიროა, როდესაც :other არის :value.',
    'required_unless' => ':attribute ველი საჭიროა, თუ :other არ არის :values-ში.',
    'required_with' => ':attribute ველი საჭიროა, როდესაც არსებობს :values.',
    'required_with_all' => ':attribute ველი საჭიროა, როდესაც არსებობს :values.',
    'required_without' => ':attribute ველი საჭიროა, როდესაც :values არ არის.',
    'required_without_all' => ':attribute ველი საჭიროა, როდესაც არცერთი :values არ არის.',
    'same' => ':attribute და :other უნდა ემთხვეოდეს.',
    'size' => [
        'numeric' => ':attribute უნდა იყოს :size.',
        'file' => ':attribute უნდა იყოს :size კილობაიტი.',
        'string' => ':attribute უნდა იყოს :size სიმბოლოები.',
        'array' => ':attribute უნდა შეიცავდეს :size ელემენტებს.',
    ],
    'string' => ':attribute უნდა იყოს სტრიქონი.',
    'timezone' => ':attribute უნდა იყოს მოქმედი ზონა.',
    'unique' => ':attribute უკვე აღებულია.',
    'uploaded' => ':attribute ვერ აიტვირთა.',
    'url' => ':attribute ფორმატი არასწორია.',

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
            'rule-name' => 'საბაჟო შეტყობინება',
        ],
        'g-recaptcha-response' => [
            'required' => 'გთხოვთ დაადასტუროთ, რომ არ ხართ რობოტი.',
            'captcha' => 'Captcha შეცდომა! სცადეთ მოგვიანებით ან დაუკავშირდით საიტის ადმინისტრატორს.',
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



    'accepted_if' => ':ატრიბუტის ველი უნდა იქნას მიღებული, როდესაც :other არის :value.',
    'ascii' => ':ატრიბუტის ველი უნდა შეიცავდეს მხოლოდ ერთ ბაიტიან ალფაციფრულ სიმბოლოებს და სიმბოლოებს.',
    'can' => ':ატრიბუტის ველი შეიცავს არაავტორიზებულ მნიშვნელობას.',
    'contains' => ':ატრიბუტის ველს აკლია საჭირო მნიშვნელობა.',
    'current_password' => 'პაროლი არასწორია.',
    'date_equals' => ':ატრიბუტის ველი უნდა იყოს თარიღი ტოლი :date.',
    'decimal' => ':ატრიბუტის ველს უნდა ჰქონდეს :ათწილადი ათობითი ადგილები.',
    'declined' => ':ატრიბუტის ველი უნდა იყოს უარყოფილი.',
    'declined_if' => ':ატრიბუტის ველი უნდა იყოს უარყოფილი, როდესაც :other არის :value.',
    'doesnt_end_with' => ':ატრიბუტის ველი არ უნდა დასრულდეს ერთ-ერთი შემდეგით: :values.',
    'doesnt_start_with' => ':ატრიბუტის ველი არ უნდა იწყებოდეს ქვემოთ ჩამოთვლილიდან ერთით: :values.',
    'ends_with' => ':ატრიბუტის ველი უნდა დასრულდეს შემდეგი სიტყვებით: :values.',
    'enum' => 'არჩეული :ატრიბუტი არასწორია.',
    'extensions' => ':ატრიბუტის ველს უნდა ჰქონდეს ერთ-ერთი შემდეგი გაფართოება: :values.',
    'hex_color' => ':ატრიბუტის ველი უნდა იყოს სწორი თექვსმეტობითი ფერი.',
    'list' => ':ატრიბუტის ველი უნდა იყოს სია.',
    'lowercase' => ':ატრიბუტის ველი უნდა იყოს პატარა.',
    'mac_address' => ':ატრიბუტის ველი უნდა იყოს სწორი MAC მისამართი.',
    'max_digits' => ':ატრიბუტის ველში არ უნდა იყოს :max ციფრზე მეტი.',
    'min_digits' => ':ატრიბუტის ველი უნდა შეიცავდეს მინიმუმ :min ციფრებს.',
    'missing' => ':ატრიბუტის ველი უნდა გამოტოვოთ.',
    'missing_if' => ':ატრიბუტის ველი უნდა იყოს დაკარგული, როდესაც :other არის :value.',
    'missing_unless' => ':ატრიბუტის ველი უნდა გამოტოვოთ, თუ :other არ არის :value.',
    'missing_with' => ':ატრიბუტის ველი უნდა იყოს დაკარგული, როდესაც :values არსებობს.',
    'missing_with_all' => ':ატრიბუტის ველი უნდა იყოს დაკარგული, როდესაც :მნიშვნელობები არსებობს.',
    'multiple_of' => ':ატრიბუტის ველი უნდა იყოს :მნიშვნელობის ჯერადი.',
    'password' => [
        'letters' => ':ატრიბუტის ველი უნდა შეიცავდეს მინიმუმ ერთ ასოს.',
        'mixed' => ':ატრიბუტის ველი უნდა შეიცავდეს მინიმუმ ერთ დიდ და ერთ პატარა ასოს.',
        'numbers' => ':ატრიბუტის ველი უნდა შეიცავდეს მინიმუმ ერთ რიცხვს.',
        'symbols' => ':ატრიბუტის ველი უნდა შეიცავდეს მინიმუმ ერთ სიმბოლოს.',
        'uncompromised' => 'მოცემული :ატრიბუტი გამოჩნდა მონაცემთა გაჟონვაში. გთხოვთ, აირჩიოთ სხვა :ატრიბუტი.',
    ],
    'present_if' => ':ატრიბუტის ველი უნდა იყოს წარმოდგენილი, როდესაც :other არის :value.',
    'present_unless' => ':ატრიბუტის ველი უნდა იყოს წარმოდგენილი, თუ :other არ არის :value.',
    'present_with' => ':ატრიბუტის ველი უნდა იყოს წარმოდგენილი, როდესაც :values არსებობს.',
    'present_with_all' => ':ატრიბუტის ველი უნდა იყოს წარმოდგენილი, როდესაც :მნიშვნელობები არსებობს.',
    'prohibited' => ':ატრიბუტის ველი აკრძალულია.',
    'prohibited_if' => ':ატრიბუტის ველი აკრძალულია, როცა :other არის :value.',
    'prohibited_unless' => ':ატრიბუტის ველი აკრძალულია, თუ :other არ არის :მნიშვნელობებში.',
    'prohibits' => ':ატრიბუტის ველი კრძალავს :სხვას ყოფნას.',
    'required_array_keys' => ':ატრიბუტის ველი უნდა შეიცავდეს ჩანაწერებს: :მნიშვნელობებისთვის.',
    'required_if_accepted' => ':ატრიბუტის ველი საჭიროა, როცა :other მიღებულია.',
    'required_if_declined' => ':ატრიბუტის ველი საჭიროა, როცა :other უარყოფილია.',
    'starts_with' => ':ატრიბუტის ველი უნდა იწყებოდეს შემდეგი სიტყვებით: :values.',
    'uppercase' => ':ატრიბუტის ველი უნდა იყოს დიდი.',
    'ulid' => ':ატრიბუტის ველი უნდა იყოს სწორი ULID.',
    'uuid' => ':ატრიბუტის ველი უნდა იყოს სწორი UUID.',
];
