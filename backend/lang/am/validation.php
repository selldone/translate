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

    'accepted' => ':attribute መቀበል አለበት።',
    'active_url' => ':attribute ትክክለኛ URL አይደለም።',
    'after' => ':attribute ከ:date በኋላ ያለ ቀን መሆን አለበት።',
    'after_or_equal' => ':attribute ከ:date በኋላ ወይም እኩል የሆነ ቀን መሆን አለበት።',
    'alpha' => ':attribute ፊደሎችን ብቻ ሊይዝ ይችላል።',
    'alpha_dash' => ':attribute ፊደሎችን፣ ቁጥሮችን እና ሰረዞችን ብቻ ሊይዝ ይችላል።',
    'alpha_num' => ':attribute ፊደሎችን እና ቁጥሮችን ብቻ ሊይዝ ይችላል።',
    'array' => ':attribute ድርድር መሆን አለበት።',
    'before' => ':attribute ከ:date በፊት ያለ ቀን መሆን አለበት።',
    'before_or_equal' => ':attribute ከ:date በፊት ወይም እኩል የሆነ ቀን መሆን አለበት።',
    'between' => [
        'numeric' => ':attribute በ:min እና :max መካከል መሆን አለበት።',
        'file' => ':attribute በ:min እና :max ኪሎባይት መካከል መሆን አለበት።',
        'string' => ':attribute በ:min እና :max ቁምፊዎች መካከል መሆን አለበት።',
        'array' => ':attribute በ:min እና :max ንጥሎች መካከል ሊኖረው ይገባል።',
    ],
    'boolean' => 'የ:attribute መስክ እውነት ወይም ሐሰት መሆን አለበት።',
    'confirmed' => 'የ:attribute ማረጋገጫ አይዛመድም።',
    'date' => ':attribute የሚሰራ ቀን አይደለም።',
    'date_format' => ':attribute ከ :format ቅርጸት ጋር አይዛመድም።',
    'different' => ':attribute እና :other የተለያዩ መሆን አለባቸው።',
    'digits' => ':attribute :digits አሃዞች መሆን አለበት።',
    'digits_between' => ':attribute በ:min እና :max አሃዞች መካከል መሆን አለበት።',
    'dimensions' => ':attribute ልክ ያልሆኑ የምስል ልኬቶች አሉት።',
    'distinct' => 'የ:attribute መስክ የተባዛ እሴት አለው።',
    'email' => ':attribute ትክክለኛ የኢሜይል አድራሻ መሆን አለበት።',
    'exists' => 'የተመረጠው :attribute ልክ ያልሆነ ነው።',
    'file' => ':attribute ፋይል መሆን አለበት።',
    'filled' => 'የ:attribute መስክ ዋጋ ሊኖረው ይገባል።',
    'gt' => [
        'numeric' => ':attribute ከ:value የበለጠ መሆን አለበት።',
        'file' => ':attribute ከ:value ኪሎባይት የበለጠ መሆን አለበት።',
        'string' => ':attribute ከ:value ቁምፊዎች የበለጠ መሆን አለበት።',
        'array' => ':attribute ከ:value በላይ እቃዎች ሊኖሩት ይገባል።',
    ],
    'gte' => [
        'numeric' => ':attribute ከ:value የበለጠ ወይም እኩል መሆን አለበት።',
        'file' => ':attribute ከ:value ኪሎባይት የበለጠ ወይም እኩል መሆን አለበት።',
        'string' => ':attribute ከ:value ቁምፊዎች የበለጠ ወይም እኩል መሆን አለበት።',
        'array' => ':attribute :value እቃዎች ወይም ከዚያ በላይ ሊኖሩት ይገባል።',
    ],
    'image' => ':attribute ምስል መሆን አለበት።',
    'in' => 'የተመረጠው :attribute ልክ ያልሆነ ነው።',
    'in_array' => 'የ:attribute መስክ በ:other ውስጥ የለም።',
    'integer' => ':attribute ኢንቲጀር መሆን አለበት።',
    'ip' => ':attribute ትክክለኛ IP አድራሻ መሆን አለበት።',
    'ipv4' => ':attribute የሚሰራ IPv4 አድራሻ መሆን አለበት።',
    'ipv6' => ':attribute የሚሰራ IPv6 አድራሻ መሆን አለበት።',
    'json' => ':attribute የሚሰራ JSON ሕብረቁምፊ መሆን አለበት።',
    'lt' => [
        'numeric' => ':attribute ከ:value ያነሰ መሆን አለበት።',
        'file' => ':attribute ከ:value ኪሎባይት ያነሰ መሆን አለበት።',
        'string' => ':attribute ከ:value ቁምፊዎች ያነሰ መሆን አለበት።',
        'array' => ':attribute ከ:value እቃዎች ያነሰ መሆን አለበት።',
    ],
    'lte' => [
        'numeric' => ':attribute ከ:value ያነሰ ወይም እኩል መሆን አለበት።',
        'file' => ':attribute ከ:value ኪሎባይት ያነሰ ወይም እኩል መሆን አለበት።',
        'string' => ':attribute ከ:value ቁምፊዎች ያነሰ ወይም እኩል መሆን አለበት።',
        'array' => ':attribute ከ:value በላይ እቃዎች ሊኖሩት አይገባም።',
    ],
    'max' => [
        'numeric' => ':attribute ከ :max በላይ ላይሆን ይችላል።',
        'file' => ':attribute ከ :max ኪሎባይት በላይ ላይሆን ይችላል።',
        'string' => ':attribute ከ:max ቁምፊዎች በላይ ላይሆን ይችላል።',
        'array' => ':attribute ከ:max እቃዎች በላይ ላይኖረው ይችላል።',
    ],
    'mimes' => ':attribute የፋይል አይነት መሆን አለበት፡- :values።',
    'mimetypes' => ':attribute የፋይል አይነት መሆን አለበት፡- :values።',
    'min' => [
        'numeric' => ':attribute ቢያንስ :min መሆን አለበት።',
        'file' => ':attribute ቢያንስ :min ኪሎባይት መሆን አለበት።',
        'string' => ':attribute ቢያንስ :min ቁምፊዎች መሆን አለበት።',
        'array' => ':attribute ቢያንስ :min እቃዎች ሊኖሩት ይገባል።',
    ],
    'not_in' => 'የተመረጠው :attribute ልክ ያልሆነ ነው።',
    'not_regex' => 'የ:attribute ቅርጸት ልክ ያልሆነ ነው።',
    'numeric' => ':attribute ቁጥር መሆን አለበት።',
    'present' => 'የ:attribute መስክ መገኘት አለበት።',
    'regex' => 'የ:attribute ቅርጸት ልክ ያልሆነ ነው።',
    'required' => 'የ:attribute መስክ ያስፈልጋል።',
    'required_if' => 'የ:attribute መስክ ያስፈልጋል :other :value ነው።',
    'required_unless' => ':other :values ውስጥ ካልሆነ በስተቀር የ:attribute መስክ ያስፈልጋል።',
    'required_with' => 'የ:attribute መስክ :values ሲኖር ያስፈልጋል።',
    'required_with_all' => 'የ:attribute መስክ :values ሲኖር ያስፈልጋል።',
    'required_without' => ':values በማይኖርበት ጊዜ የ:attribute መስክ ያስፈልጋል።',
    'required_without_all' => ':values አንዳቸውም በማይገኙበት ጊዜ የ:attribute መስክ ያስፈልጋል።',
    'same' => ':attribute እና :other መመሳሰል አለባቸው።',
    'size' => [
        'numeric' => ':attribute :size መሆን አለበት።',
        'file' => ':attribute :size ኪሎባይት መሆን አለበት።',
        'string' => ':attribute :size ቁምፊዎች መሆን አለበት።',
        'array' => ':attribute :size ንጥሎችን መያዝ አለበት።',
    ],
    'string' => ':attribute ሕብረቁምፊ መሆን አለበት።',
    'timezone' => ':attribute የሚሰራ ዞን መሆን አለበት።',
    'unique' => ':attribute አስቀድሞ ተወስዷል።',
    'uploaded' => ':attribute መስቀል አልቻለም።',
    'url' => 'የ:attribute ቅርጸት ልክ ያልሆነ ነው።',

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
            'rule-name' => 'ብጁ መልእክት',
        ],
        'g-recaptcha-response' => [
            'required' => 'እባክህ ሮቦት አለመሆንህን አረጋግጥ።',
            'captcha' => 'የ Captcha ስህተት! ቆይተው እንደገና ይሞክሩ ወይም የጣቢያ አስተዳዳሪን ያግኙ።',
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



    'accepted_if' => 'የ: ባህሪ መስኩ መቀበል ያለበት :ሌላው : እሴት ነው።',
    'ascii' => 'የ: ባህሪ መስኩ ነጠላ ባይት ፊደል ቁጥራዊ ቁምፊዎችን እና ምልክቶችን ብቻ መያዝ አለበት።',
    'can' => 'የ: ባህሪ መስክ ያልተፈቀደ እሴት ይዟል።',
    'contains' => 'የ: ባህሪ መስክ የሚፈለገው እሴት ይጎድላል።',
    'current_password' => 'የይለፍ ቃሉ የተሳሳተ ነው።',
    'date_equals' => 'የ: ባህሪ መስክ ከ: ቀን ጋር እኩል የሆነ ቀን መሆን አለበት.',
    'decimal' => 'የ: መለያ መስክ :አስርዮሽ አስርዮሽ ቦታዎች ሊኖሩት ይገባል።',
    'declined' => 'የ: ባህሪ መስክ ውድቅ መሆን አለበት.',
    'declined_if' => 'የ: ባህሪ መስኩ :ሌላ: እሴት ሲሆን ውድቅ መደረግ አለበት::',
    'doesnt_end_with' => 'የ:የባህሪ መስኩ ከሚከተሉት በአንዱ ማለቅ የለበትም::እሴቶች::',
    'doesnt_start_with' => 'የ: ባህሪ መስክ ከሚከተሉት ውስጥ በአንዱ መጀመር የለበትም: እሴቶች።',
    'ends_with' => 'የ: ባህሪ መስኩ ከሚከተሉት ውስጥ በአንዱ ማለቅ አለበት:: እሴቶች።',
    'enum' => 'የተመረጠው: ባህሪ ልክ ያልሆነ ነው።',
    'extensions' => 'የ:ባህሪ መስኩ ከሚከተሉት ቅጥያዎች ውስጥ አንዱ ሊኖረው ይገባል::እሴቶች::',
    'hex_color' => 'የ: መለያ መስክ ትክክለኛ ሄክሳዴሲማል ቀለም መሆን አለበት።',
    'list' => 'የ: ባህሪ መስክ ዝርዝር መሆን አለበት.',
    'lowercase' => 'የ: ባህሪ መስክ ትንሽ ፊደል መሆን አለበት.',
    'mac_address' => 'የ: መለያ መስኩ ትክክለኛ የማክ አድራሻ መሆን አለበት።',
    'max_digits' => 'የ: ባህሪ መስክ ከ: ከፍተኛ አሃዞች በላይ ሊኖረው አይገባም።',
    'min_digits' => 'የ: ባህሪ መስክ ቢያንስ : ደቂቃ አሃዞች ሊኖሩት ይገባል.',
    'missing' => 'የ: ባህሪ መስክ መጥፋት አለበት።',
    'missing_if' => ':የባህሪ መስኩ :ሌላ:እሴት ሲሆን መጥፋት አለበት::',
    'missing_unless' => ':የባህሪ መስኩ :ሌላ:እሴት ካልሆነ በስተቀር መጥፋት አለበት።',
    'missing_with' => 'የ: ባህሪ መስክ : እሴቶች በሚኖሩበት ጊዜ መጥፋት አለበት።',
    'missing_with_all' => 'የ: ባህሪ መስክ :እሴቶች በሚገኙበት ጊዜ መጥፋት አለበት።',
    'multiple_of' => 'የ: ባህሪ መስክ የ: እሴት ብዜት መሆን አለበት።',
    'password' => [
        'letters' => 'የ: ባህሪ መስክ ቢያንስ አንድ ፊደል መያዝ አለበት.',
        'mixed' => 'የ: ባህሪ መስክ ቢያንስ አንድ ትልቅ እና አንድ ትንሽ ሆሄ መያዝ አለበት.',
        'numbers' => 'የ: ባህሪ መስክ ቢያንስ አንድ ቁጥር መያዝ አለበት.',
        'symbols' => 'የ: ባህሪ መስክ ቢያንስ አንድ ምልክት መያዝ አለበት.',
        'uncompromised' => 'የተሰጠው፡ ባህሪ በመረጃ መፍሰስ ውስጥ ታይቷል። እባክዎን የተለየ ባህሪ ይምረጡ።',
    ],
    'present_if' => 'የ: ባህሪ መስኩ :ሌላ: እሴት ሲሆን መገኘት አለበት።',
    'present_unless' => ':የባህሪው መስክ :ሌላ:እሴት ካልሆነ በስተቀር መገኘት አለበት።',
    'present_with' => 'የ: ባህሪ መስክ : እሴቶች ሲኖሩ መገኘት አለበት.',
    'present_with_all' => 'የ: ባህሪ መስኩ : እሴቶች በሚኖሩበት ጊዜ መገኘት አለበት.',
    'prohibited' => 'የ: ባህሪ መስክ የተከለከለ ነው።',
    'prohibited_if' => 'የ: ባህሪ መስኩ የተከለከለ ነው :ሌላ: እሴት።',
    'prohibited_unless' => ':ሌሎች በ:እሴቶች ውስጥ ካልሆነ በስተቀር የ:ባህሪው መስክ የተከለከለ ነው.',
    'prohibits' => 'የ: ባህሪ መስክ :ሌላ እንዳይገኝ ይከለክላል።',
    'required_array_keys' => 'የ: ባህሪ መስክ ለ: እሴቶች ግቤቶችን መያዝ አለበት.',
    'required_if_accepted' => 'የ: ባህሪ መስክ ያስፈልጋል :ሌሎች ተቀባይነት ሲያገኙ።',
    'required_if_declined' => 'የ: ባህሪ መስክ ያስፈልጋል :ሌሎች ውድቅ ሲደረግ።',
    'starts_with' => 'የ: ባህሪ መስክ ከሚከተሉት ውስጥ በአንዱ መጀመር አለበት: እሴቶች።',
    'uppercase' => 'የ: ባህሪ መስክ አቢይ ሆሄ መሆን አለበት.',
    'ulid' => 'የ: መለያ መስክ ትክክለኛ ULID መሆን አለበት።',
    'uuid' => 'የ: ባህሪ መስክ ትክክለኛ UUID መሆን አለበት።',
];
