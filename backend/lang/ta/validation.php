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

    'accepted' => ':attribute ஏற்றுக்கொள்ளப்பட வேண்டும்.',
    'active_url' => ':attribute சரியான URL அல்ல.',
    'after' => ':attribute :date க்குப் பின் வரும் தேதியாக இருக்க வேண்டும்.',
    'after_or_equal' => ':attribute என்பது :dateக்குப் பின் அல்லது அதற்கு சமமான தேதியாக இருக்க வேண்டும்.',
    'alpha' => ':attribute எழுத்துகளை மட்டுமே கொண்டிருக்கலாம்.',
    'alpha_dash' => ':attribute இல் எழுத்துக்கள், எண்கள் மற்றும் கோடுகள் மட்டுமே இருக்கலாம்.',
    'alpha_num' => ':attribute எழுத்துகள் மற்றும் எண்களை மட்டுமே கொண்டிருக்கலாம்.',
    'array' => ':attribute ஒரு வரிசையாக இருக்க வேண்டும்.',
    'before' => ':attribute என்பது :dateக்கு முந்தைய தேதியாக இருக்க வேண்டும்.',
    'before_or_equal' => ':attribute என்பது :dateக்கு முந்தைய அல்லது அதற்கு சமமான தேதியாக இருக்க வேண்டும்.',
    'between' => [
        'numeric' => ':attribute :min மற்றும் :max க்கு இடையில் இருக்க வேண்டும்.',
        'file' => ':attribute என்பது :min மற்றும் :max கிலோபைட்டுகளுக்கு இடையில் இருக்க வேண்டும்.',
        'string' => ':attribute என்பது :min மற்றும் :max எழுத்துகளுக்கு இடையில் இருக்க வேண்டும்.',
        'array' => ':attribute ஆனது :min மற்றும் :max உருப்படிகளுக்கு இடையில் இருக்க வேண்டும்.',
    ],
    'boolean' => ':attribute புலம் உண்மையாகவோ அல்லது தவறாகவோ இருக்க வேண்டும்.',
    'confirmed' => ':attribute உறுதிப்படுத்தல் பொருந்தவில்லை.',
    'date' => ':attribute சரியான தேதி அல்ல.',
    'date_format' => ':attribute, :format வடிவத்துடன் பொருந்தவில்லை.',
    'different' => ':attribute மற்றும் :other வேறுபட்டதாக இருக்க வேண்டும்.',
    'digits' => ':attribute என்பது :digits இலக்கங்களாக இருக்க வேண்டும்.',
    'digits_between' => ':attribute என்பது :min மற்றும் :max இலக்கங்களுக்கு இடையில் இருக்க வேண்டும்.',
    'dimensions' => ':attribute தவறான பட பரிமாணங்களைக் கொண்டுள்ளது.',
    'distinct' => ':attribute புலத்தில் நகல் மதிப்பு உள்ளது.',
    'email' => ':attribute சரியான மின்னஞ்சல் முகவரியாக இருக்க வேண்டும்.',
    'exists' => 'தேர்ந்தெடுக்கப்பட்ட :attribute தவறானது.',
    'file' => ':attribute ஒரு கோப்பாக இருக்க வேண்டும்.',
    'filled' => ':attribute புலத்திற்கு மதிப்பு இருக்க வேண்டும்.',
    'gt' => [
        'numeric' => ':attribute :value ஐ விட அதிகமாக இருக்க வேண்டும்.',
        'file' => ':attribute :value கிலோபைட்டுகளை விட அதிகமாக இருக்க வேண்டும்.',
        'string' => ':attribute என்பது :value எழுத்துகளை விட அதிகமாக இருக்க வேண்டும்.',
        'array' => ':attribute ஆனது :value ஐ விட அதிகமாக இருக்க வேண்டும்.',
    ],
    'gte' => [
        'numeric' => ':attribute :value ஐ விட அதிகமாகவோ அல்லது அதற்கு சமமாகவோ இருக்க வேண்டும்.',
        'file' => ':attribute என்பது :value கிலோபைட்டுகளை விட அதிகமாகவோ அல்லது அதற்கு சமமாகவோ இருக்க வேண்டும்.',
        'string' => ':attribute என்பது :value எழுத்துகளை விட அதிகமாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
        'array' => ':attribute இல் :value உருப்படிகள் அல்லது அதற்கு மேற்பட்டவை இருக்க வேண்டும்.',
    ],
    'image' => ':attribute ஒரு படமாக இருக்க வேண்டும்.',
    'in' => 'தேர்ந்தெடுக்கப்பட்ட :attribute தவறானது.',
    'in_array' => ':attribute புலம் :other இல் இல்லை.',
    'integer' => ':attribute ஒரு முழு எண்ணாக இருக்க வேண்டும்.',
    'ip' => ':attribute சரியான IP முகவரியாக இருக்க வேண்டும்.',
    'ipv4' => ':attribute சரியான IPv4 முகவரியாக இருக்க வேண்டும்.',
    'ipv6' => ':attribute சரியான IPv6 முகவரியாக இருக்க வேண்டும்.',
    'json' => ':attribute சரியான JSON சரமாக இருக்க வேண்டும்.',
    'lt' => [
        'numeric' => ':attribute :value ஐ விட குறைவாக இருக்க வேண்டும்.',
        'file' => ':attribute என்பது :value கிலோபைட்டுகளுக்கு குறைவாக இருக்க வேண்டும்.',
        'string' => ':attribute என்பது :value எழுத்துகளை விட குறைவாக இருக்க வேண்டும்.',
        'array' => ':attribute :value ஐ விடக் குறைவான உருப்படிகளைக் கொண்டிருக்க வேண்டும்.',
    ],
    'lte' => [
        'numeric' => ':attribute :value ஐ விட குறைவாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
        'file' => ':attribute என்பது :value கிலோபைட்டுகளை விட குறைவாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
        'string' => ':attribute என்பது :value எழுத்துகளை விட குறைவாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
        'array' => ':attribute இல் :value உருப்படிகளுக்கு மேல் இருக்கக்கூடாது.',
    ],
    'max' => [
        'numeric' => ':attribute :max ஐ விட அதிகமாக இருக்கக்கூடாது.',
        'file' => ':attribute :max kilobytes ஐ விட அதிகமாக இருக்கக்கூடாது.',
        'string' => ':attribute :max எழுத்துகளை விட அதிகமாக இருக்கக்கூடாது.',
        'array' => ':attribute இல் :max ஐ விட அதிகமாக இருக்கக்கூடாது.',
    ],
    'mimes' => ':attribute என்பது வகை: :values என்ற கோப்பாக இருக்க வேண்டும்.',
    'mimetypes' => ':attribute என்பது வகை: :values என்ற கோப்பாக இருக்க வேண்டும்.',
    'min' => [
        'numeric' => ':attribute குறைந்தது :min ஆக இருக்க வேண்டும்.',
        'file' => ':attribute குறைந்தபட்சம் :min கிலோபைட்டுகளாக இருக்க வேண்டும்.',
        'string' => ':attribute குறைந்தது :min எழுத்துகளாக இருக்க வேண்டும்.',
        'array' => ':attribute குறைந்தது :min உருப்படிகளைக் கொண்டிருக்க வேண்டும்.',
    ],
    'not_in' => 'தேர்ந்தெடுக்கப்பட்ட :attribute தவறானது.',
    'not_regex' => ':attribute வடிவம் தவறானது.',
    'numeric' => ':attribute ஒரு எண்ணாக இருக்க வேண்டும்.',
    'present' => ':attribute புலம் இருக்க வேண்டும்.',
    'regex' => ':attribute வடிவம் தவறானது.',
    'required' => ':attribute புலம் தேவை.',
    'required_if' => ':attribute புலம் தேவைப்படும் போது :other :value.',
    'required_unless' => ':other :values இல் இல்லாவிட்டால் :attribute புலம் தேவைப்படுகிறது.',
    'required_with' => ':values இருக்கும் போது :attribute புலம் தேவைப்படுகிறது.',
    'required_with_all' => ':values இருக்கும் போது :attribute புலம் தேவைப்படுகிறது.',
    'required_without' => ':values இல்லாதபோது :attribute புலம் தேவைப்படுகிறது.',
    'required_without_all' => ':values எதுவும் இல்லாதபோது :attribute புலம் தேவைப்படுகிறது.',
    'same' => ':attribute மற்றும் :other பொருந்த வேண்டும்.',
    'size' => [
        'numeric' => ':attribute :size ஆக இருக்க வேண்டும்.',
        'file' => ':attribute என்பது :size கிலோபைட்டுகளாக இருக்க வேண்டும்.',
        'string' => ':attribute என்பது :size எழுத்துகளாக இருக்க வேண்டும்.',
        'array' => ':attribute :size உருப்படிகளைக் கொண்டிருக்க வேண்டும்.',
    ],
    'string' => ':attribute ஒரு சரமாக இருக்க வேண்டும்.',
    'timezone' => ':attribute சரியான மண்டலமாக இருக்க வேண்டும்.',
    'unique' => ':attribute ஏற்கனவே எடுக்கப்பட்டது.',
    'uploaded' => ':attribute பதிவேற்றம் செய்ய முடியவில்லை.',
    'url' => ':attribute வடிவம் தவறானது.',

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
            'rule-name' => 'விருப்ப-செய்தி',
        ],
        'g-recaptcha-response' => [
            'required' => 'நீங்கள் ஒரு ரோபோ இல்லை என்பதைச் சரிபார்க்கவும்.',
            'captcha' => 'கேப்ட்சா பிழை! பிறகு முயற்சிக்கவும் அல்லது தள நிர்வாகியைத் தொடர்பு கொள்ளவும்.',
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



    'accepted_if' => ':attribute புலம் ஏற்கப்பட வேண்டும்: மற்றவை :மதிப்பு.',
    'ascii' => ':attribute புலத்தில் ஒற்றை-பைட் எண்ணெழுத்து எழுத்துக்கள் மற்றும் குறியீடுகள் மட்டுமே இருக்க வேண்டும்.',
    'can' => ':attribute புலத்தில் அங்கீகரிக்கப்படாத மதிப்பு உள்ளது.',
    'contains' => ':attribute புலத்தில் தேவையான மதிப்பு இல்லை.',
    'current_password' => 'கடவுச்சொல் தவறானது.',
    'date_equals' => ':attribute புலம் :dateக்கு சமமான தேதியாக இருக்க வேண்டும்.',
    'decimal' => ':attribute புலத்தில் கண்டிப்பாக :தசம தசம இடங்கள் இருக்க வேண்டும்.',
    'declined' => ':attribute புலம் நிராகரிக்கப்பட வேண்டும்.',
    'declined_if' => ':attribute புலத்தை நிராகரிக்க வேண்டும் :மற்றது :value.',
    'doesnt_end_with' => ':attribute புலம் பின்வருவனவற்றில் ஒன்றில் முடிவடையக்கூடாது: :values.',
    'doesnt_start_with' => ':attribute புலம் பின்வருவனவற்றில் ஒன்றில் தொடங்கக்கூடாது: :values.',
    'ends_with' => ':attribute புலம் பின்வருவனவற்றில் ஒன்றில் முடிவடைய வேண்டும்: :values.',
    'enum' => 'தேர்ந்தெடுக்கப்பட்ட :பண்பு தவறானது.',
    'extensions' => ':attribute புலம் பின்வரும் நீட்டிப்புகளில் ஒன்றைக் கொண்டிருக்க வேண்டும்: :values.',
    'hex_color' => ':attribute புலம் சரியான பதினாறும நிறமாக இருக்க வேண்டும்.',
    'list' => ':attribute புலம் கண்டிப்பாக பட்டியலாக இருக்க வேண்டும்.',
    'lowercase' => ':attribute புலம் சிறிய எழுத்தாக இருக்க வேண்டும்.',
    'mac_address' => ':attribute புலம் சரியான MAC முகவரியாக இருக்க வேண்டும்.',
    'max_digits' => ':attribute புலத்தில் :max இலக்கங்களுக்கு மேல் இருக்கக்கூடாது.',
    'min_digits' => ':attribute புலத்தில் குறைந்தபட்சம் :min இலக்கங்கள் இருக்க வேண்டும்.',
    'missing' => ':attribute புலம் தவறியிருக்க வேண்டும்.',
    'missing_if' => ':attribute புலம் தவறியிருக்க வேண்டும் :மற்றது :value.',
    'missing_unless' => ':attribute புலம் தவறியிருக்க வேண்டும்:மற்றது :value.',
    'missing_with' => ':values இருக்கும் போது :attribute புலம் இல்லாமல் இருக்க வேண்டும்.',
    'missing_with_all' => 'மதிப்புகள் இருக்கும் போது :attribute புலம் தவறியிருக்க வேண்டும்.',
    'multiple_of' => ':attribute புலம் :value இன் பெருக்கமாக இருக்க வேண்டும்.',
    'password' => [
        'letters' => ':attribute புலத்தில் குறைந்தது ஒரு எழுத்தாவது இருக்க வேண்டும்.',
        'mixed' => ':attribute புலத்தில் குறைந்தபட்சம் ஒரு பெரிய எழுத்து மற்றும் ஒரு சிறிய எழுத்து இருக்க வேண்டும்.',
        'numbers' => ':attribute புலத்தில் குறைந்தது ஒரு எண்ணாவது இருக்க வேண்டும்.',
        'symbols' => ':attribute புலத்தில் குறைந்தது ஒரு சின்னம் இருக்க வேண்டும்.',
        'uncompromised' => 'கொடுக்கப்பட்ட: பண்புக்கூறு தரவு கசிவில் தோன்றியது. தயவு செய்து வேறு: பண்புக்கூறை தேர்வு செய்யவும்.',
    ],
    'present_if' => ':attribute புலம் இருக்க வேண்டும் :மற்றது :value.',
    'present_unless' => ':attribute புலம் இருக்க வேண்டும்:மற்றது :value.',
    'present_with' => 'மதிப்புகள் இருக்கும் போது :attribute புலம் இருக்க வேண்டும்.',
    'present_with_all' => 'மதிப்புகள் இருக்கும் போது :attribute புலம் இருக்க வேண்டும்.',
    'prohibited' => ':attribute புலம் தடைசெய்யப்பட்டுள்ளது.',
    'prohibited_if' => ':attribute புலம் தடைசெய்யப்படும் போது :other :value.',
    'prohibited_unless' => ':attribute புலம்:மற்றது :values இல் இல்லாவிட்டால் தடைசெய்யப்பட்டுள்ளது.',
    'prohibits' => ':attribute புலம்: மற்றவை தற்போது இருப்பதைத் தடுக்கிறது.',
    'required_array_keys' => ':attribute புலத்தில்: :values க்கான உள்ளீடுகள் இருக்க வேண்டும்.',
    'required_if_accepted' => 'மற்றவை ஏற்கப்படும் போது :attribute புலம் தேவைப்படுகிறது.',
    'required_if_declined' => 'மற்றவை நிராகரிக்கப்படும் போது :attribute புலம் தேவைப்படுகிறது.',
    'starts_with' => ':attribute புலம் பின்வருவனவற்றில் ஒன்றில் தொடங்க வேண்டும்: :values.',
    'uppercase' => ':attribute புலம் பெரிய எழுத்தாக இருக்க வேண்டும்.',
    'ulid' => ':attribute புலம் சரியான ULID ஆக இருக்க வேண்டும்.',
    'uuid' => ':attribute புலம் சரியான UUID ஆக இருக்க வேண்டும்.',
];
