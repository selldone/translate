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

    'accepted' => ':attribute ត្រូវតែទទួលយក។',
    'active_url' => ':attribute មិនមែនជា URL ត្រឹមត្រូវទេ។',
    'after' => ':attribute ត្រូវតែជាកាលបរិច្ឆេទបន្ទាប់ពី :date ។',
    'after_or_equal' => ':attribute ត្រូវតែជាកាលបរិច្ឆេទបន្ទាប់ពី ឬស្មើនឹង :date។',
    'alpha' => ':attribute អាចមានត្រឹមតែអក្សរប៉ុណ្ណោះ។',
    'alpha_dash' => 'គុណលក្ខណៈ :attribute អាចមានតែអក្សរ លេខ និងសញ្ញាដាច់ៗប៉ុណ្ណោះ។',
    'alpha_num' => ':attribute អាចមានត្រឹមតែអក្សរ និងលេខប៉ុណ្ណោះ។',
    'array' => ':attribute ត្រូវតែជាអារេ។',
    'before' => ':attribute ត្រូវតែជាកាលបរិច្ឆេទមុន :date ។',
    'before_or_equal' => ':attribute ត្រូវតែជាកាលបរិច្ឆេទមុន ឬស្មើនឹង :date។',
    'between' => [
        'numeric' => ':attribute ត្រូវតែស្ថិតនៅចន្លោះ :min និង :max។',
        'file' => ':attribute ត្រូវតែស្ថិតនៅចន្លោះ :min និង :max kilobytes។',
        'string' => ':attribute ត្រូវតែស្ថិតនៅចន្លោះ :min និង :max តួអក្សរ។',
        'array' => ':attribute ត្រូវតែមានរវាង :min និង :max items។',
    ],
    'boolean' => 'វាល :attribute ត្រូវតែពិត ឬមិនពិត។',
    'confirmed' => 'ការបញ្ជាក់ :attribute មិនត្រូវគ្នាទេ។',
    'date' => ':attribute មិនមែនជាកាលបរិច្ឆេទត្រឹមត្រូវទេ។',
    'date_format' => ':attribute មិនត្រូវគ្នានឹង format :format។',
    'different' => ':attribute និង :other ត្រូវតែខុសគ្នា។',
    'digits' => ':attribute ត្រូវតែជា :digits digits។',
    'digits_between' => ':attribute ត្រូវតែស្ថិតនៅចន្លោះ :min និង :max digits។',
    'dimensions' => ':attribute មានវិមាត្ររូបភាពមិនត្រឹមត្រូវ។',
    'distinct' => 'វាល :attribute មានតម្លៃស្ទួន។',
    'email' => ':attribute ត្រូវតែជាអាសយដ្ឋានអ៊ីមែលត្រឹមត្រូវ។',
    'exists' => ':attribute ដែលបានជ្រើសរើសមិនត្រឹមត្រូវទេ។',
    'file' => ':attribute ត្រូវតែជាឯកសារ។',
    'filled' => 'វាល :attribute ត្រូវតែមានតម្លៃ។',
    'gt' => [
        'numeric' => ':attribute ត្រូវតែធំជាង :value។',
        'file' => ':attribute ត្រូវតែធំជាង :value kilobytes។',
        'string' => ':attribute ត្រូវតែធំជាង :value តួអក្សរ។',
        'array' => ':attribute ត្រូវតែមានច្រើនជាង :value items។',
    ],
    'gte' => [
        'numeric' => 'គុណលក្ខណៈ :attribute ត្រូវតែធំជាង ឬស្មើ :value។',
        'file' => ':attribute ត្រូវតែធំជាង ឬស្មើ :value kilobytes។',
        'string' => ':attribute ត្រូវតែធំជាង ឬស្មើ :value តួអក្សរ។',
        'array' => ':attribute ត្រូវតែមាន :value items ឬច្រើនជាងនេះ។',
    ],
    'image' => ':attribute ត្រូវតែជារូបភាព។',
    'in' => ':attribute ដែលបានជ្រើសរើសមិនត្រឹមត្រូវទេ។',
    'in_array' => 'វាល :attribute មិនមាននៅក្នុង :other ទេ។',
    'integer' => ':attribute ត្រូវតែជាចំនួនគត់។',
    'ip' => ':attribute ត្រូវតែជាអាសយដ្ឋាន IP ត្រឹមត្រូវ។',
    'ipv4' => ':attribute ត្រូវតែជាអាសយដ្ឋាន IPv4 ត្រឹមត្រូវ។',
    'ipv6' => ':attribute ត្រូវតែជាអាសយដ្ឋាន IPv6 ត្រឹមត្រូវ។',
    'json' => ':attribute ត្រូវតែជាខ្សែអក្សរ JSON ត្រឹមត្រូវ។',
    'lt' => [
        'numeric' => ':attribute ត្រូវតែតិចជាង :value។',
        'file' => ':attribute ត្រូវតែតិចជាង :value kilobytes។',
        'string' => ':attribute ត្រូវតែតិចជាង :value តួអក្សរ។',
        'array' => ':attribute ត្រូវតែមានធាតុតិចជាង :value ។',
    ],
    'lte' => [
        'numeric' => ':attribute ត្រូវតែតិចជាង ឬស្មើ :value។',
        'file' => ':attribute ត្រូវតែតិចជាង ឬស្មើ :value kilobytes។',
        'string' => ':attribute ត្រូវតែតិចជាង ឬស្មើ :value តួអក្សរ។',
        'array' => ':attribute មិនត្រូវមានច្រើនជាង :value items។',
    ],
    'max' => [
        'numeric' => ':attribute ប្រហែលជាមិនធំជាង :max.',
        'file' => ':attribute ប្រហែលជាមិនធំជាង :max kilobytes។',
        'string' => ':attribute ប្រហែលជាមិនធំជាង :max តួអក្សរទេ។',
        'array' => ':attribute ប្រហែលជាមិនមានច្រើនជាង :max items។',
    ],
    'mimes' => ':attribute ត្រូវតែជាឯកសារប្រភេទ: :values។',
    'mimetypes' => ':attribute ត្រូវតែជាឯកសារប្រភេទ: :values។',
    'min' => [
        'numeric' => 'គុណលក្ខណៈ :attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min ។',
        'file' => ':attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min គីឡូបៃ។',
        'string' => ':attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min តួអក្សរ។',
        'array' => ':attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min items ។',
    ],
    'not_in' => ':attribute ដែលបានជ្រើសរើសមិនត្រឹមត្រូវទេ។',
    'not_regex' => 'ទម្រង់ :attribute មិន​ត្រឹមត្រូវ។',
    'numeric' => ':attribute ត្រូវតែជាលេខ។',
    'present' => 'វាល :attribute ត្រូវតែមានវត្តមាន។',
    'regex' => 'ទម្រង់ :attribute មិន​ត្រឹមត្រូវ។',
    'required' => 'វាល :attribute ត្រូវបានទាមទារ។',
    'required_if' => 'វាល :attribute ត្រូវបានទាមទារនៅពេលដែល :other is :value។',
    'required_unless' => 'វាល :attribute គឺត្រូវបានទាមទារ លុះត្រាតែ :other ស្ថិតនៅក្នុង :values។',
    'required_with' => 'វាល :attribute ត្រូវបានទាមទារនៅពេលដែល :values មានវត្តមាន។',
    'required_with_all' => 'វាល :attribute ត្រូវបានទាមទារនៅពេលដែល :values មានវត្តមាន។',
    'required_without' => 'វាល :attribute ត្រូវបានទាមទារនៅពេលដែល :values មិនមានវត្តមាន។',
    'required_without_all' => 'វាល :attribute គឺត្រូវបានទាមទារនៅពេលដែលគ្មាន :values មានវត្តមាន។',
    'same' => ':attribute និង :other ត្រូវតែផ្គូផ្គង។',
    'size' => [
        'numeric' => ':attribute ត្រូវតែជា :size ។',
        'file' => ':attribute ត្រូវតែជា :size kilobytes។',
        'string' => ':attribute ត្រូវតែជា :size តួអក្សរ។',
        'array' => ':attribute ត្រូវតែមានធាតុ :size ។',
    ],
    'string' => ':attribute ត្រូវតែជាខ្សែអក្សរ។',
    'timezone' => ':attribute ត្រូវតែជាតំបន់ត្រឹមត្រូវ។',
    'unique' => ':attribute ត្រូវបានយករួចហើយ។',
    'uploaded' => ':attribute បរាជ័យក្នុងការបង្ហោះ។',
    'url' => 'ទម្រង់ :attribute មិន​ត្រឹមត្រូវ។',

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
            'rule-name' => 'សារផ្ទាល់ខ្លួន',
        ],
        'g-recaptcha-response' => [
            'required' => 'សូមផ្ទៀងផ្ទាត់ថាអ្នកមិនមែនជាមនុស្សយន្តទេ។',
            'captcha' => 'កំហុស Captcha! ព្យាយាមម្តងទៀតនៅពេលក្រោយ ឬទាក់ទងអ្នកគ្រប់គ្រងគេហទំព័រ។',
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



    'accepted_if' => 'វាល :attribute ត្រូវតែទទួលយកនៅពេលដែល :other is :value។',
    'ascii' => 'វាល :attribute ត្រូវតែមានតួអក្សរ និងនិមិត្តសញ្ញាលេខមួយបៃប៉ុណ្ណោះ។',
    'can' => 'វាល :attribute មានតម្លៃដែលមិនមានការអនុញ្ញាត។',
    'contains' => 'វាល :attribute បាត់តម្លៃដែលត្រូវការ។',
    'current_password' => 'ពាក្យ​សម្ងាត់​មិន​ត្រឹមត្រូវ។',
    'date_equals' => 'វាល :attribute ត្រូវតែជាកាលបរិច្ឆេទស្មើនឹង :date ។',
    'decimal' => 'វាល :attribute ត្រូវតែមាន :ខ្ទង់ទសភាគ។',
    'declined' => 'វាល :attribute ត្រូវតែត្រូវបានបដិសេធ។',
    'declined_if' => 'វាល :attribute ត្រូវតែត្រូវបានបដិសេធនៅពេលដែល :other គឺ :value។',
    'doesnt_end_with' => 'វាល :attribute មិនត្រូវបញ្ចប់ដោយមួយក្នុងចំណោមខាងក្រោម៖ :values ។',
    'doesnt_start_with' => 'វាល :attribute មិនត្រូវចាប់ផ្តើមដោយមួយក្នុងចំណោមខាងក្រោម: :values ។',
    'ends_with' => 'វាល :attribute ត្រូវតែបញ្ចប់ដោយមួយក្នុងចំណោមខាងក្រោម: :values ។',
    'enum' => 'គុណលក្ខណៈដែលបានជ្រើសរើសគឺមិនត្រឹមត្រូវទេ។',
    'extensions' => 'វាល :attribute ត្រូវតែមានផ្នែកបន្ថែមមួយខាងក្រោម៖ :values ។',
    'hex_color' => 'វាល :attribute ត្រូវតែជាពណ៌គោលដប់ប្រាំមួយត្រឹមត្រូវ។',
    'list' => 'វាល :attribute ត្រូវតែជាបញ្ជី។',
    'lowercase' => 'វាល :attribute ត្រូវតែជាអក្សរតូច។',
    'mac_address' => 'វាល :attribute ត្រូវតែជាអាសយដ្ឋាន MAC ត្រឹមត្រូវ។',
    'max_digits' => 'វាល :attribute មិនត្រូវមានច្រើនជាង : ខ្ទង់អតិបរមាទេ។',
    'min_digits' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min digits ។',
    'missing' => 'វាល :attribute ត្រូវតែបាត់។',
    'missing_if' => 'វាល :attribute ត្រូវតែបាត់នៅពេលដែល :other is :value។',
    'missing_unless' => 'វាល :attribute ត្រូវតែបាត់ លុះត្រាតែ :other គឺ :value។',
    'missing_with' => 'វាល :attribute ត្រូវតែបាត់នៅពេលដែល :values មានវត្តមាន។',
    'missing_with_all' => 'វាល :attribute ត្រូវតែបាត់នៅពេលដែល :values មានវត្តមាន។',
    'multiple_of' => 'វាល :attribute ត្រូវតែជាពហុគុណនៃ :value ។',
    'password' => [
        'letters' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយអក្សរ។',
        'mixed' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់អក្សរធំមួយ និងអក្សរតូចមួយ។',
        'numbers' => 'វាល :attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយលេខ។',
        'symbols' => 'វាល :attribute ត្រូវតែមាននិមិត្តសញ្ញាយ៉ាងហោចណាស់មួយ។',
        'uncompromised' => ':attribute ដែលបានផ្តល់ឱ្យបានលេចឡើងនៅក្នុងការលេចធ្លាយទិន្នន័យ។ សូមជ្រើសរើសផ្សេង៖ attribute។',
    ],
    'present_if' => 'វាល :attribute ត្រូវតែមានវត្តមាននៅពេលដែល :other is :value។',
    'present_unless' => 'វាល :attribute ត្រូវតែមានវត្តមាន លុះត្រាតែ :other គឺ :value។',
    'present_with' => 'វាល :attribute ត្រូវតែមានវត្តមាននៅពេលដែល :values មានវត្តមាន។',
    'present_with_all' => 'វាល :attribute ត្រូវតែមានវត្តមាននៅពេលដែល :values មានវត្តមាន។',
    'prohibited' => 'វាល :attribute ត្រូវបានហាមឃាត់។',
    'prohibited_if' => 'វាល :attribute ត្រូវបានហាមឃាត់នៅពេលដែល :other is :value។',
    'prohibited_unless' => 'វាល :attribute ត្រូវបានហាមឃាត់ លុះត្រាតែ :other ស្ថិតនៅក្នុង :values។',
    'prohibits' => 'វាល :attribute ហាមឃាត់ : ផ្សេងទៀតពីការមានវត្តមាន។',
    'required_array_keys' => 'វាល :attribute ត្រូវតែមានធាតុសម្រាប់: :values ។',
    'required_if_accepted' => 'វាល :attribute ត្រូវបានទាមទារនៅពេលដែល :other ត្រូវបានទទួលយក។',
    'required_if_declined' => 'វាល :attribute ត្រូវបានទាមទារនៅពេលដែល :other ត្រូវបានបដិសេធ។',
    'starts_with' => 'វាល :attribute ត្រូវតែចាប់ផ្តើមដោយមួយក្នុងចំណោមខាងក្រោម: :values ។',
    'uppercase' => 'វាល :attribute ត្រូវតែជាអក្សរធំ។',
    'ulid' => 'វាល :attribute ត្រូវតែជា ULID ត្រឹមត្រូវ។',
    'uuid' => 'វាល :attribute ត្រូវតែជា UUID ត្រឹមត្រូវ។',
];
