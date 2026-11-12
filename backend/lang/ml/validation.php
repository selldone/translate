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

    'accepted' => ':attribute അംഗീകരിക്കണം.',
    'active_url' => ':attribute ഒരു സാധുവായ URL അല്ല.',
    'after' => ':attribute :date-ന് ശേഷമുള്ള തീയതി ആയിരിക്കണം.',
    'after_or_equal' => ':attribute :date-ന് ശേഷമുള്ളതോ അതിന് തുല്യമായതോ ആയിരിക്കണം.',
    'alpha' => ':attribute-ൽ അക്ഷരങ്ങൾ മാത്രമേ അടങ്ങിയിട്ടുള്ളൂ.',
    'alpha_dash' => ':attribute-ൽ അക്ഷരങ്ങളും അക്കങ്ങളും ഡാഷുകളും മാത്രമേ അടങ്ങിയിട്ടുള്ളൂ.',
    'alpha_num' => ':attribute-ൽ അക്ഷരങ്ങളും അക്കങ്ങളും മാത്രമേ അടങ്ങിയിട്ടുള്ളൂ.',
    'array' => ':attribute ഒരു അറേ ആയിരിക്കണം.',
    'before' => ':attribute :date-ന് മുമ്പുള്ള ഒരു തീയതി ആയിരിക്കണം.',
    'before_or_equal' => ':attribute :date-ന് മുമ്പുള്ളതോ അതിന് തുല്യമായതോ ആയിരിക്കണം.',
    'between' => [
        'numeric' => ':attribute :min നും :max നും ഇടയിലായിരിക്കണം.',
        'file' => ':attribute :min നും :max കിലോബൈറ്റിനും ഇടയിലായിരിക്കണം.',
        'string' => ':attribute :min, :max പ്രതീകങ്ങൾക്കിടയിലായിരിക്കണം.',
        'array' => ':attribute-ൽ :min-നും :max-നും ഇടയിലുള്ള ഇനങ്ങൾ ഉണ്ടായിരിക്കണം.',
    ],
    'boolean' => ':attribute ഫീൽഡ് ശരിയോ തെറ്റോ ആയിരിക്കണം.',
    'confirmed' => ':attribute സ്ഥിരീകരണം പൊരുത്തപ്പെടുന്നില്ല.',
    'date' => ':attribute ഒരു സാധുവായ തീയതിയല്ല.',
    'date_format' => ':attribute ഫോർമാറ്റ് :format-മായി പൊരുത്തപ്പെടുന്നില്ല.',
    'different' => ':attribute, :other എന്നിവ വ്യത്യസ്തമായിരിക്കണം.',
    'digits' => ':attribute എന്നത് :digits അക്കങ്ങളായിരിക്കണം.',
    'digits_between' => ':attribute :min, :max അക്കങ്ങൾക്കിടയിലായിരിക്കണം.',
    'dimensions' => ':attribute ന് അസാധുവായ ഇമേജ് അളവുകൾ ഉണ്ട്.',
    'distinct' => ':attribute ഫീൽഡിന് ഒരു ഡ്യൂപ്ലിക്കേറ്റ് മൂല്യമുണ്ട്.',
    'email' => ':attribute സാധുവായ ഒരു ഇമെയിൽ വിലാസമായിരിക്കണം.',
    'exists' => 'തിരഞ്ഞെടുത്ത :attribute അസാധുവാണ്.',
    'file' => ':attribute ഒരു ഫയൽ ആയിരിക്കണം.',
    'filled' => ':attribute ഫീൽഡിന് ഒരു മൂല്യം ഉണ്ടായിരിക്കണം.',
    'gt' => [
        'numeric' => ':attribute :value-നേക്കാൾ വലുതായിരിക്കണം.',
        'file' => ':attribute :value കിലോബൈറ്റിനേക്കാൾ വലുതായിരിക്കണം.',
        'string' => ':attribute :value പ്രതീകങ്ങളേക്കാൾ വലുതായിരിക്കണം.',
        'array' => ':attribute-ൽ :value ഇനങ്ങളിൽ കൂടുതൽ ഉണ്ടായിരിക്കണം.',
    ],
    'gte' => [
        'numeric' => ':attribute :value-നേക്കാൾ വലുതോ തുല്യമോ ആയിരിക്കണം.',
        'file' => ':attribute :value കിലോബൈറ്റിനേക്കാൾ വലുതോ തുല്യമോ ആയിരിക്കണം.',
        'string' => ':attribute :value പ്രതീകങ്ങളേക്കാൾ വലുതോ തുല്യമോ ആയിരിക്കണം.',
        'array' => ':attribute-ൽ :value ഇനങ്ങളോ അതിൽ കൂടുതലോ ഉണ്ടായിരിക്കണം.',
    ],
    'image' => ':attribute ഒരു ചിത്രമായിരിക്കണം.',
    'in' => 'തിരഞ്ഞെടുത്ത :attribute അസാധുവാണ്.',
    'in_array' => ':attribute ഫീൽഡ് :other എന്നതിൽ നിലവിലില്ല.',
    'integer' => ':attribute ഒരു പൂർണ്ണസംഖ്യയായിരിക്കണം.',
    'ip' => ':attribute സാധുവായ ഒരു IP വിലാസമായിരിക്കണം.',
    'ipv4' => ':attribute സാധുവായ IPv4 വിലാസമായിരിക്കണം.',
    'ipv6' => ':attribute സാധുവായ IPv6 വിലാസമായിരിക്കണം.',
    'json' => ':attribute ഒരു സാധുവായ JSON സ്ട്രിംഗ് ആയിരിക്കണം.',
    'lt' => [
        'numeric' => ':attribute :value-നേക്കാൾ കുറവായിരിക്കണം.',
        'file' => ':attribute :value കിലോബൈറ്റിൽ കുറവായിരിക്കണം.',
        'string' => ':attribute :value പ്രതീകങ്ങളിൽ കുറവായിരിക്കണം.',
        'array' => ':attribute-ൽ :value ഇനങ്ങളിൽ കുറവായിരിക്കണം.',
    ],
    'lte' => [
        'numeric' => ':attribute :value-നേക്കാൾ കുറവോ തുല്യമോ ആയിരിക്കണം.',
        'file' => ':attribute :value കിലോബൈറ്റിനേക്കാൾ കുറവോ തുല്യമോ ആയിരിക്കണം.',
        'string' => ':attribute :value പ്രതീകങ്ങളേക്കാൾ കുറവോ തുല്യമോ ആയിരിക്കണം.',
        'array' => ':attribute-ൽ :value ഇനങ്ങളിൽ കൂടുതൽ ഉണ്ടാകരുത്.',
    ],
    'max' => [
        'numeric' => ':attribute :max-നേക്കാൾ വലുതായിരിക്കില്ല.',
        'file' => ':attribute :max കിലോബൈറ്റിനേക്കാൾ വലുതായിരിക്കില്ല.',
        'string' => ':attribute :max പ്രതീകങ്ങളേക്കാൾ വലുതായിരിക്കില്ല.',
        'array' => ':attribute-ൽ :max ഇനങ്ങളിൽ കൂടുതൽ ഉണ്ടാകണമെന്നില്ല.',
    ],
    'mimes' => ':attribute എന്ന തരത്തിലുള്ള ഫയലായിരിക്കണം: :values.',
    'mimetypes' => ':attribute എന്ന തരത്തിലുള്ള ഫയലായിരിക്കണം: :values.',
    'min' => [
        'numeric' => ':attribute കുറഞ്ഞത് :min ആയിരിക്കണം.',
        'file' => ':attribute കുറഞ്ഞത് :min കിലോബൈറ്റുകൾ ആയിരിക്കണം.',
        'string' => ':attribute കുറഞ്ഞത് :min പ്രതീകങ്ങളെങ്കിലും ആയിരിക്കണം.',
        'array' => ':attribute-ൽ കുറഞ്ഞത് :min ഇനങ്ങളെങ്കിലും ഉണ്ടായിരിക്കണം.',
    ],
    'not_in' => 'തിരഞ്ഞെടുത്ത :attribute അസാധുവാണ്.',
    'not_regex' => ':attribute ഫോർമാറ്റ് അസാധുവാണ്.',
    'numeric' => ':attribute ഒരു സംഖ്യയായിരിക്കണം.',
    'present' => ':attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം.',
    'regex' => ':attribute ഫോർമാറ്റ് അസാധുവാണ്.',
    'required' => ':attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_if' => ':other :value ആയിരിക്കുമ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_unless' => ':other :values-ൽ ഇല്ലെങ്കിൽ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_with' => ':values ഉള്ളപ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_with_all' => ':values ഉള്ളപ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_without' => ':values ഇല്ലാത്തപ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_without_all' => ':values ഒന്നും ഇല്ലെങ്കിൽ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'same' => ':attribute, :other എന്നിവ പൊരുത്തപ്പെടണം.',
    'size' => [
        'numeric' => ':attribute :size ആയിരിക്കണം.',
        'file' => ':attribute :size കിലോബൈറ്റുകൾ ആയിരിക്കണം.',
        'string' => ':attribute :size പ്രതീകങ്ങളായിരിക്കണം.',
        'array' => ':attribute-ൽ :size ഇനങ്ങൾ അടങ്ങിയിരിക്കണം.',
    ],
    'string' => ':attribute ഒരു സ്ട്രിംഗ് ആയിരിക്കണം.',
    'timezone' => ':attribute ഒരു സാധുവായ സോൺ ആയിരിക്കണം.',
    'unique' => ':attribute ഇതിനകം എടുത്തിട്ടുണ്ട്.',
    'uploaded' => ':attribute അപ്‌ലോഡ് ചെയ്യുന്നതിൽ പരാജയപ്പെട്ടു.',
    'url' => ':attribute ഫോർമാറ്റ് അസാധുവാണ്.',

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
            'rule-name' => 'കസ്റ്റം-സന്ദേശം',
        ],
        'g-recaptcha-response' => [
            'required' => 'നിങ്ങളൊരു റോബോട്ടല്ലെന്ന് ദയവായി പരിശോധിക്കുക.',
            'captcha' => 'ക്യാപ്‌ച പിശക്! പിന്നീട് വീണ്ടും ശ്രമിക്കുക അല്ലെങ്കിൽ സൈറ്റ് അഡ്‌മിനെ ബന്ധപ്പെടുക.',
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



    'accepted_if' => ':attribute ഫീൽഡ് :more ആകുമ്പോൾ അംഗീകരിക്കണം.',
    'ascii' => ':ആട്രിബ്യൂട്ട് ഫീൽഡിൽ ഒറ്റ-ബൈറ്റ് ആൽഫാന്യൂമെറിക് പ്രതീകങ്ങളും ചിഹ്നങ്ങളും മാത്രമേ അടങ്ങിയിരിക്കാവൂ.',
    'can' => ':attribute ഫീൽഡിൽ ഒരു അനധികൃത മൂല്യം അടങ്ങിയിരിക്കുന്നു.',
    'contains' => ':attribute ഫീൽഡിൽ ആവശ്യമായ മൂല്യം നഷ്‌ടമായിരിക്കുന്നു.',
    'current_password' => 'പാസ്‌വേഡ് തെറ്റാണ്.',
    'date_equals' => ':attribute ഫീൽഡ് :date എന്നതിന് തുല്യമായ ഒരു തീയതി ആയിരിക്കണം.',
    'decimal' => ':ആട്രിബ്യൂട്ട് ഫീൽഡിൽ: ദശാംശ ദശാംശ സ്ഥാനങ്ങൾ ഉണ്ടായിരിക്കണം.',
    'declined' => ':attribute ഫീൽഡ് നിരസിച്ചിരിക്കണം.',
    'declined_if' => ':attribute ഫീൽഡ് നിരസിച്ചിരിക്കണം :മറ്റുള്ളപ്പോൾ :value.',
    'doesnt_end_with' => ':attribute ഫീൽഡ് ഇനിപ്പറയുന്നവയിൽ ഒന്നിൽ അവസാനിക്കരുത്: :values.',
    'doesnt_start_with' => ':attribute ഫീൽഡ് ഇനിപ്പറയുന്നവയിൽ ഒന്നിൽ ആരംഭിക്കരുത്: :values.',
    'ends_with' => ':attribute ഫീൽഡ് ഇനിപ്പറയുന്നവയിലൊന്നിൽ അവസാനിക്കണം: :values.',
    'enum' => 'തിരഞ്ഞെടുത്ത :ആട്രിബ്യൂട്ട് അസാധുവാണ്.',
    'extensions' => ':attribute ഫീൽഡിന് ഇനിപ്പറയുന്ന വിപുലീകരണങ്ങളിൽ ഒന്ന് ഉണ്ടായിരിക്കണം: :values.',
    'hex_color' => ':ആട്രിബ്യൂട്ട് ഫീൽഡ് സാധുവായ ഹെക്സാഡെസിമൽ വർണ്ണമായിരിക്കണം.',
    'list' => ':attribute ഫീൽഡ് ഒരു ലിസ്റ്റ് ആയിരിക്കണം.',
    'lowercase' => ':attribute ഫീൽഡ് ചെറിയക്ഷരം ആയിരിക്കണം.',
    'mac_address' => ':attribute ഫീൽഡ് ഒരു സാധുവായ MAC വിലാസമായിരിക്കണം.',
    'max_digits' => ':attribute ഫീൽഡിന് :max അക്കങ്ങളിൽ കൂടുതൽ ഉണ്ടാകരുത്.',
    'min_digits' => ':attribute ഫീൽഡിൽ കുറഞ്ഞത് :min അക്കങ്ങളെങ്കിലും ഉണ്ടായിരിക്കണം.',
    'missing' => ':attribute ഫീൽഡ് നഷ്ടമായിരിക്കണം.',
    'missing_if' => ':മറ്റുള്ളപ്പോൾ :attribute ഫീൽഡ് കാണാതെയിരിക്കണം :value.',
    'missing_unless' => ':attribute ഫീൽഡ് നഷ്‌ടമായിരിക്കണം:മറ്റുള്ളത് :value.',
    'missing_with' => ':values ഉള്ളപ്പോൾ :attribute ഫീൽഡ് നഷ്ടമായിരിക്കണം.',
    'missing_with_all' => ':മൂല്യങ്ങൾ ഉള്ളപ്പോൾ :attribute ഫീൽഡ് നഷ്ടമായിരിക്കണം.',
    'multiple_of' => ':attribute ഫീൽഡ് :value യുടെ ഗുണിതമായിരിക്കണം.',
    'password' => [
        'letters' => ':attribute ഫീൽഡിൽ കുറഞ്ഞത് ഒരു അക്ഷരമെങ്കിലും ഉണ്ടായിരിക്കണം.',
        'mixed' => ':attribute ഫീൽഡിൽ കുറഞ്ഞത് ഒരു വലിയക്ഷരവും ഒരു ചെറിയക്ഷരവും ഉണ്ടായിരിക്കണം.',
        'numbers' => ':attribute ഫീൽഡിൽ കുറഞ്ഞത് ഒരു സംഖ്യയെങ്കിലും ഉണ്ടായിരിക്കണം.',
        'symbols' => ':ആട്രിബ്യൂട്ട് ഫീൽഡിൽ കുറഞ്ഞത് ഒരു ചിഹ്നമെങ്കിലും അടങ്ങിയിരിക്കണം.',
        'uncompromised' => 'നൽകിയിരിക്കുന്നത് :ആട്രിബ്യൂട്ട് ഒരു ഡാറ്റ ചോർച്ചയിൽ പ്രത്യക്ഷപ്പെട്ടു. ദയവായി മറ്റൊരു :ആട്രിബ്യൂട്ട് തിരഞ്ഞെടുക്കുക.',
    ],
    'present_if' => ':attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം :മറ്റുള്ളപ്പോൾ :value.',
    'present_unless' => ':attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം:മറ്റുള്ളത് :value.',
    'present_with' => ':values ഉള്ളപ്പോൾ :attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം.',
    'present_with_all' => ':മൂല്യങ്ങൾ ഉള്ളപ്പോൾ :attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം.',
    'prohibited' => ':attribute ഫീൽഡ് നിരോധിച്ചിരിക്കുന്നു.',
    'prohibited_if' => ':attribute ഫീൽഡ് നിരോധിക്കുമ്പോൾ :other :value ആണ്.',
    'prohibited_unless' => ':attribute ഫീൽഡ് നിരോധിച്ചിരിക്കുന്നു:മറ്റുള്ളവ: മൂല്യങ്ങളിൽ ഇല്ലെങ്കിൽ.',
    'prohibits' => ':attribute ഫീൽഡ് നിരോധിക്കുന്നു :മറ്റുള്ളവർ നിലവിൽ ഉണ്ടായിരിക്കുന്നത്.',
    'required_array_keys' => ':attribute ഫീൽഡിൽ: :values എന്നതിനായുള്ള എൻട്രികൾ ഉണ്ടായിരിക്കണം.',
    'required_if_accepted' => ':attribute ഫീൽഡ്:മറ്റുള്ളവ സ്വീകരിക്കുമ്പോൾ ആവശ്യമാണ്.',
    'required_if_declined' => ':other നിരസിക്കപ്പെടുമ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'starts_with' => ':attribute ഫീൽഡ് ഇനിപ്പറയുന്നവയിലൊന്നിൽ ആരംഭിക്കണം: :values.',
    'uppercase' => ':attribute ഫീൽഡ് വലിയക്ഷരം ആയിരിക്കണം.',
    'ulid' => ':attribute ഫീൽഡ് സാധുവായ ULID ആയിരിക്കണം.',
    'uuid' => ':attribute ഫീൽഡ് ഒരു സാധുവായ UUID ആയിരിക്കണം.',
];
