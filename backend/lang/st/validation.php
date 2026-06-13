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

    'accepted' => ':attribute e tlameha ho amoheloa.',
    'active_url' => 'The :attribute ha se URL e nepahetseng.',
    'after' => ':attribute e tlameha ho ba letsatsi le hlahlamang :date.',
    'after_or_equal' => ':attribute e tlameha ho ba letsatsi ka morao kapa le lekanang le :date.',
    'alpha' => 'The :attribute e kanna ea ba le litlhaku feela.',
    'alpha_dash' => ':attribute e kanna ea ba le litlhaku, linomoro le li-dashes feela.',
    'alpha_num' => 'The :attribute e kanna ea ba le litlhaku le linomoro feela.',
    'array' => 'The :attribute must be an array.',
    'before' => ':attribute e tlameha ho ba letsatsi pele ho :date.',
    'before_or_equal' => ':attribute e tlameha ho ba letsatsi la pele kapa le lekanang le :date.',
    'between' => [
        'numeric' => ':attribute e tlameha ho ba lipakeng tsa :min le :max.',
        'file' => ':attribute e tlameha ho ba lipakeng tsa :min le :max kilobytes.',
        'string' => ':attribute e tlameha ho ba lipakeng tsa litlhaku tsa :min le :max.',
        'array' => ':attribute e tlameha ho ba le lipakeng tsa lintlha tsa :min le :max.',
    ],
    'boolean' => 'The :attribute field e tlameha ho ba \'nete kapa bohata.',
    'confirmed' => 'Netefatso ea :attribute ha e tsamaellane.',
    'date' => 'The :attribute ha se letsatsi le nepahetseng.',
    'date_format' => ':attribute ha e tsamaellane le sebopeho sa :format.',
    'different' => ':attribute le :other li tlameha ho fapana.',
    'digits' => ':attribute e tlameha ho ba linomoro tsa :digits.',
    'digits_between' => ':attribute e tlameha ho ba lipakeng tsa linomoro tsa :min le :max.',
    'dimensions' => 'The :attribute na le litekanyo tse fosahetseng tsa setšoantšo.',
    'distinct' => 'Sebaka sa :attribute se na le boleng bo lekanang.',
    'email' => 'The :attribute e tlameha ho ba aterese ea lengolo-tsoibila e nepahetseng.',
    'exists' => ':attribute e khethiloeng ha e sebetse.',
    'file' => ':attribute e tlameha ho ba faele.',
    'filled' => 'The :attribute field e tlameha ho ba le boleng.',
    'gt' => [
        'numeric' => ':attribute e tlameha ho ba kholo ho feta :value.',
        'file' => ':attribute e tlameha ho ba kholo ho feta :value kilobytes.',
        'string' => ':attribute e tlameha ho ba kholo ho feta litlhaku tsa :value.',
        'array' => ':attribute e tlameha ho ba le lintho tse fetang :value.',
    ],
    'gte' => [
        'numeric' => ':attribute e tlameha ho ba kholo ho feta kapa ho lekana :value.',
        'file' => ':attribute e tlameha ho ba kholo ho feta kapa ho lekana :value kilobytes.',
        'string' => ':attribute e tlameha ho ba kholo ho feta kapa ho lekana litlhaku tsa :value.',
        'array' => ':attribute e tlameha ho ba le lintho tsa :value kapa ho feta.',
    ],
    'image' => ':attribute e tlameha ho ba setšoantšo.',
    'in' => ':attribute e khethiloeng ha e sebetse.',
    'in_array' => 'Sebaka sa :attribute ha se teng ho :other.',
    'integer' => ':attribute e tlameha ho ba palo e felletseng.',
    'ip' => ':attribute e tlameha ho ba aterese e nepahetseng ea IP.',
    'ipv4' => ':attribute e tlameha ho ba aterese e nepahetseng ea IPv4.',
    'ipv6' => ':attribute e tlameha ho ba aterese e nepahetseng ea IPv6.',
    'json' => 'The :attribute e tlameha ho ba thapo e nepahetseng ea JSON.',
    'lt' => [
        'numeric' => ':attribute e tlameha ho ba ka tlase ho :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => ':attribute e tlameha ho ba le lintho tse ka tlase ho :value.',
    ],
    'lte' => [
        'numeric' => ':attribute e tlameha ho ba ka tlase ho kapa ho lekana :value.',
        'file' => ':attribute e tlameha ho ba ka tlase ho kapa ho lekana ka li-kilobyte tsa :value.',
        'string' => ':attribute e tlameha ho ba ka tlase ho kapa ho lekana litlhaku tsa :value.',
        'array' => ':attribute ha ea tlameha ho ba le lintho tse fetang :value.',
    ],
    'max' => [
        'numeric' => ':attribute e kanna ea se be kholo ho feta :max.',
        'file' => ':attribute e kanna ea se be kholo ho feta :max kilobytes.',
        'string' => ':attribute e kanna ea se be kholo ho feta litlhaku tsa :max.',
        'array' => ':attribute e kanna ea se be le lintho tse fetang :max.',
    ],
    'mimes' => 'The :attribute e tlameha ho ba faele ea mofuta: :values.',
    'mimetypes' => 'The :attribute e tlameha ho ba faele ea mofuta: :values.',
    'min' => [
        'numeric' => ':attribute e tlameha ho ba bonyane :min.',
        'file' => ':attribute e tlameha ho ba bonyane li-kilobyte tsa :min.',
        'string' => ':attribute e tlameha ho ba bonyane litlhaku tsa :min.',
        'array' => ':attribute e tlameha ho ba le bonyane lintho tsa :min.',
    ],
    'not_in' => ':attribute e khethiloeng ha e sebetse.',
    'not_regex' => 'Sebopeho sa :attribute ha se sebetse.',
    'numeric' => ':attribute e tlameha ho ba nomoro.',
    'present' => 'Sebaka sa :attribute se tlameha ho ba teng.',
    'regex' => 'Sebopeho sa :attribute ha se sebetse.',
    'required' => 'Ho hlokahala sebaka sa :attribute.',
    'required_if' => 'Karolo ea :attribute ea hlokahala ha :other e le :value.',
    'required_unless' => 'Karolo ea :attribute ea hlokahala ntle le haeba :other e le ho :values.',
    'required_with' => 'Karolo ea :attribute ea hlokahala ha :values e le teng.',
    'required_with_all' => 'Karolo ea :attribute ea hlokahala ha :values e le teng.',
    'required_without' => 'Karolo ea :attribute ea hlokahala ha :values e le sieo.',
    'required_without_all' => 'Karolo ea :attribute ea hlokahala ha ho se le e \'ngoe ea :values e teng.',
    'same' => ':attribute le :other li tlameha ho lumellana.',
    'size' => [
        'numeric' => ':attribute e tlameha ho ba :size.',
        'file' => ':attribute e tlameha ho ba li-kilobyte tsa :size.',
        'string' => 'The :attribute must be :size characters.',
        'array' => ':attribute e tlameha ho ba le lintlha tsa :size.',
    ],
    'string' => ':attribute e tlameha ho ba khoele.',
    'timezone' => ':attribute e tlameha ho ba sebaka se nepahetseng.',
    'unique' => 'The :attribute e se e nkiloe.',
    'uploaded' => 'The :attribute hlolehile ho kenya.',
    'url' => 'Sebopeho sa :attribute ha se sebetse.',

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
            'rule-name' => 'tloaelo-molaetsa',
        ],
        'g-recaptcha-response' => [
            'required' => 'Ka kopo, netefatsa hore ha u roboto.',
            'captcha' => 'Phoso ea Captcha! leka hape hamorao kapa ikopanye le balaoli ba sebaka.',
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



    'accepted_if' => 'The :thamo ea tšobotsi e tlameha ho amoheloa ha :other e le :value.',
    'ascii' => 'Sebaka sa :attribute se tlameha ho ba le litlhaku le matšoao a alphanumeric ea baiti e le \'ngoe feela.',
    'can' => 'The :attribute field e na le boleng bo sa lumelloeng.',
    'contains' => 'Sebaka sa :attribute ha se na boleng bo hlokahalang.',
    'current_password' => 'Lekunutu le fosahetse.',
    'date_equals' => 'Sebaka sa :attribute e tlameha ho ba letsatsi le lekanang le :date.',
    'decimal' => 'The :thamo ea tšobotsi e tlameha ho ba le :decimal decimal places.',
    'declined' => 'Sebaka sa : tšobotsi e tlameha ho hanoa.',
    'declined_if' => 'Sebaka sa :attribute se tlameha ho hanoa ha :other e le :value.',
    'doesnt_end_with' => 'Karolo ea :attribute ha ea tlameha ho fella ka e \'ngoe ea tse latelang: :values.',
    'doesnt_start_with' => 'Sebaka sa :attribute ha se ea tlameha ho qala ka e \'ngoe ea tse latelang: :values.',
    'ends_with' => 'Sebaka sa :attribute se tlameha ho fela ka e \'ngoe ea tse latelang: :values.',
    'enum' => ':ts\'ebetso e khethiloeng ha e sebetse.',
    'extensions' => 'Sebaka sa :attribute se tlameha ho ba le e \'ngoe ea likeketso tse latelang: :values.',
    'hex_color' => 'Sebaka sa :attribute e tlameha ho ba \'mala o nepahetseng oa hexadecimal.',
    'list' => 'The :attribute field e tlameha ho ba lethathamo.',
    'lowercase' => 'Lethathamo la: karolo ea tšobotsi e tlameha ho ba litlhaku tse nyane.',
    'mac_address' => 'Sebaka sa :attribute e tlameha ho ba aterese e nepahetseng ea MAC.',
    'max_digits' => 'Karolo ea :attribute ha ea tlameha ho ba le linomoro tse fetang :max.',
    'min_digits' => 'Sebaka sa :attribute se tlameha ho ba le bonyane linomoro tse :min.',
    'missing' => 'Sebaka sa :attribute se tlameha ho ba sieo.',
    'missing_if' => 'Sebaka sa :attribute se tlameha ho ba sieo ha :other e le :value.',
    'missing_unless' => 'Sebaka sa :attribute se tlameha ho ba sieo ntle le haeba :other e le :value.',
    'missing_with' => 'Sebaka sa :attribute se tlameha ho ba sieo ha :values e le teng.',
    'missing_with_all' => 'Sebaka sa :attribute se tlameha ho ba sieo ha :values li le teng.',
    'multiple_of' => 'Karolo ea :attribute e tlameha ho ba ngata ea :value.',
    'password' => [
        'letters' => 'The :attribute field e tlameha ho ba le bonyane tlhaku e le \'ngoe.',
        'mixed' => 'The :attribute field e tlameha ho ba le bonyane tlhaku e kholo e le \'ngoe le litlhaku tse nyane.',
        'numbers' => 'The :attribute field e tlameha ho ba le bonyane nomoro e le \'ngoe.',
        'symbols' => 'Sebaka sa :attribute se tlameha ho ba le bonyane letšoao le le leng.',
        'uncompromised' => 'E fanoeng :attribute e hlahile ho dutla ha data. Ka kopo, khetha e \'ngoe :tšobotsi.',
    ],
    'present_if' => 'Sebaka sa :attribute se tlameha ho ba teng ha :other e le :value.',
    'present_unless' => 'Sebaka sa :attribute se tlameha ho ba teng ntle le haeba :other e le :value.',
    'present_with' => 'The :attribute field e tlameha ho ba teng ha :values e le teng.',
    'present_with_all' => 'The :attribute field e tlameha ho ba teng ha :values e le teng.',
    'prohibited' => 'Sebaka sa :attribute ha se lumelloe.',
    'prohibited_if' => 'Sebaka sa :attribute ha se lumelloe ha :other e le :value.',
    'prohibited_unless' => 'Sebaka sa :attribute ha se lumelloe ntle le haeba :other e le ho :values.',
    'prohibits' => 'The :attribute field e thibela :ther ho ba teng.',
    'required_array_keys' => 'Sebaka sa :attribute se tlameha ho ba le likenyelletso tsa: :values.',
    'required_if_accepted' => 'The :tamo ea tšobotsi ea hlokahala ha :other e amoheloa.',
    'required_if_declined' => 'The :attribute field ea hlokahala ha :other e hanoa.',
    'starts_with' => 'Sebaka sa :attribute se tlameha ho qala ka e \'ngoe ea tse latelang: :values.',
    'uppercase' => 'Sebaka sa :attribute e tlameha ho ba litlhaku tse kholo.',
    'ulid' => 'Sebaka sa :attribute e tlameha ho ba ULID e nepahetseng.',
    'uuid' => 'Sebaka sa :attribute e tlameha ho ba UUID e nepahetseng.',
];
