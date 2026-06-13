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

    'accepted' => ':attribute ကို လက်ခံရပါမည်။',
    'active_url' => ':attribute သည် မှန်ကန်သော URL မဟုတ်ပါ။',
    'after' => ':attribute သည် :date ပြီးနောက် ရက်စွဲတစ်ခု ဖြစ်ရပါမည်။',
    'after_or_equal' => ':attribute သည် :date နှင့် တူညီပြီးနောက် ရက်စွဲတစ်ခု ဖြစ်ရပါမည်။',
    'alpha' => ':attribute တွင် စာလုံးများသာ ပါဝင်နိုင်သည်။',
    'alpha_dash' => ':attribute တွင် စာလုံးများ၊ နံပါတ်များနှင့် ဒက်ရှ်များသာ ပါဝင်နိုင်သည်။',
    'alpha_num' => ':attribute တွင် စာလုံးများနှင့် နံပါတ်များသာ ပါဝင်နိုင်သည်။',
    'array' => ':attribute သည် array တစ်ခု ဖြစ်ရပါမည်။',
    'before' => ':attribute သည် :date မတိုင်မီ ရက်စွဲတစ်ခု ဖြစ်ရပါမည်။',
    'before_or_equal' => ':attribute သည် :date မတိုင်မီ သို့မဟုတ် တူညီသော ရက်စွဲတစ်ခု ဖြစ်ရပါမည်။',
    'between' => [
        'numeric' => ':attribute သည် :min နှင့် :max အကြား ဖြစ်ရမည်။',
        'file' => ':attribute သည် :min နှင့် :max ကီလိုဘိုက်ကြားရှိရမည်။',
        'string' => ':attribute သည် :min နှင့် :max အက္ခရာများကြားရှိရမည်။',
        'array' => ':attribute သည် :min နှင့် :max items များကြားရှိရမည်။',
    ],
    'boolean' => ':attribute အကွက်သည် မှန် သို့မဟုတ် အမှား ဖြစ်ရမည်။',
    'confirmed' => ':attribute အတည်ပြုချက်သည် မကိုက်ညီပါ။',
    'date' => ':attribute သည် တရားဝင်သော ရက်စွဲမဟုတ်ပါ။',
    'date_format' => ':attribute သည် ဖော်မတ် :format နှင့် မကိုက်ညီပါ။',
    'different' => ':attribute နှင့် :other သည် ကွဲပြားရပါမည်။',
    'digits' => ':attribute သည် :digits ဂဏန်းများ ဖြစ်ရမည်။',
    'digits_between' => ':attribute သည် :min နှင့် :max ဂဏန်းများကြား ဖြစ်ရမည်။',
    'dimensions' => ':attribute တွင် မမှန်ကန်သော ပုံအတိုင်းအတာများရှိသည်။',
    'distinct' => ':attribute အကွက်တွင် ထပ်နေသောတန်ဖိုးတစ်ခုရှိသည်။',
    'email' => ':attribute သည် တရားဝင်အီးမေးလ်လိပ်စာဖြစ်ရမည်။',
    'exists' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'file' => ':attribute သည် ဖိုင်ဖြစ်ရပါမည်။',
    'filled' => ':attribute အကွက်တွင် တန်ဖိုးတစ်ခု ရှိရပါမည်။',
    'gt' => [
        'numeric' => ':attribute သည် :value ထက်ကြီးရမည်။',
        'file' => ':attribute သည် :value kilobytes ထက်ကြီးနေရပါမည်။',
        'string' => ':attribute သည် :value စာလုံးများထက် ကြီးရမည်။',
        'array' => ':attribute တွင် :value items ထက်ပို၍ ရှိရမည်။',
    ],
    'gte' => [
        'numeric' => ':attribute သည် :value ထက်ကြီးသည် သို့မဟုတ် ညီမျှရပါမည်။',
        'file' => ':attribute သည် :value kilobytes ထက်ကြီးသည် သို့မဟုတ် ညီမျှရပါမည်။',
        'string' => ':attribute သည် :value စာလုံးများထက် ကြီးသည် သို့မဟုတ် ညီရပါမည်။',
        'array' => ':attribute တွင် :value items သို့မဟုတ် ထို့ထက်ပို၍ ရှိရမည်။',
    ],
    'image' => ':attribute သည် ပုံဖြစ်ရပါမည်။',
    'in' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'in_array' => ':attribute အကွက်သည် :other တွင်မရှိပါ။',
    'integer' => ':attribute သည် ကိန်းပြည့်ဖြစ်ရပါမည်။',
    'ip' => ':attribute သည် တရားဝင် IP လိပ်စာဖြစ်ရမည်။',
    'ipv4' => ':attribute သည် တရားဝင် IPv4 လိပ်စာဖြစ်ရမည်။',
    'ipv6' => ':attribute သည် တရားဝင် IPv6 လိပ်စာဖြစ်ရမည်။',
    'json' => ':attribute သည် မှန်ကန်သော JSON စာကြောင်းဖြစ်ရပါမည်။',
    'lt' => [
        'numeric' => ':attribute သည် :value ထက်နည်းရမည်။',
        'file' => ':attribute သည် :value kilobytes ထက်နည်းရမည်။',
        'string' => ':attribute သည် :value စာလုံးများထက် နည်းနေရပါမည်။',
        'array' => ':attribute တွင် :value items ထက် နည်းနေရပါမည်။',
    ],
    'lte' => [
        'numeric' => ':attribute သည် :value ထက်နည်းသည် သို့မဟုတ် ညီမျှရပါမည်။',
        'file' => ':attribute သည် :value kilobytes ထက်နည်းသည် သို့မဟုတ် ညီမျှရပါမည်။',
        'string' => ':attribute သည် :value အက္ခရာများထက် နည်းသည် သို့မဟုတ် ညီရပါမည်။',
        'array' => ':attribute တွင် :value items ထက် မပိုရပါ။',
    ],
    'max' => [
        'numeric' => ':attribute သည် :max ထက်ကြီးမည်မဟုတ်ပါ။',
        'file' => ':attribute သည် :max ကီလိုဘိုက်ထက် ကြီးမည်မဟုတ်ပါ။',
        'string' => ':attribute သည် :max စာလုံးထက် ကြီးမည်မဟုတ်ပါ။',
        'array' => ':attribute တွင် :max items ထက် မပိုနိုင်ပါ။',
    ],
    'mimes' => ':attribute သည် အမျိုးအစား- :values ဖိုင်ဖြစ်ရမည်။',
    'mimetypes' => ':attribute သည် အမျိုးအစား- :values ဖိုင်ဖြစ်ရမည်။',
    'min' => [
        'numeric' => ':attribute သည် အနည်းဆုံး :min ဖြစ်ရမည်။',
        'file' => ':attribute သည် အနည်းဆုံး :min ကီလိုဘိုက်ရှိရမည်။',
        'string' => ':attribute သည် အနည်းဆုံး :min စာလုံးဖြစ်ရပါမည်။',
        'array' => ':attribute တွင် အနည်းဆုံး :min အရာများ ရှိရပါမည်။',
    ],
    'not_in' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'not_regex' => ':attribute ဖော်မတ်သည် မမှန်ကန်ပါ။',
    'numeric' => ':attribute သည် နံပါတ်တစ်ခု ဖြစ်ရပါမည်။',
    'present' => ':attribute အကွက်သည် ရှိနေရပါမည်။',
    'regex' => ':attribute ဖော်မတ်သည် မမှန်ကန်ပါ။',
    'required' => ':attribute အကွက် လိုအပ်သည်။',
    'required_if' => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်ကို လိုအပ်သည်။',
    'required_unless' => ':other သည် :values တွင် မရှိလျှင် :attribute အကွက် လိုအပ်ပါသည်။',
    'required_with' => ':values ရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_with_all' => ':values ရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_without' => ':values မရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_without_all' => ':values တစ်ခုမျှ မရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'same' => ':attribute နှင့် :other သည် တူညီရပါမည်။',
    'size' => [
        'numeric' => ':attribute သည် :size ဖြစ်ရမည်။',
        'file' => ':attribute သည် :size ကီလိုဘိုက်ဖြစ်ရမည်။',
        'string' => ':attribute သည် :size စာလုံးဖြစ်ရမည်။',
        'array' => ':attribute တွင် :size အရာများ ပါဝင်ရပါမည်။',
    ],
    'string' => ':attribute သည် string တစ်ခု ဖြစ်ရမည်။',
    'timezone' => ':attribute သည် မှန်ကန်သောဇုန်ဖြစ်ရမည်။',
    'unique' => ':attribute ကို ယူထားပြီးဖြစ်သည်။',
    'uploaded' => ':attribute ကို အပ်လုဒ်လုပ်၍မရပါ။',
    'url' => ':attribute ဖော်မတ်သည် မမှန်ကန်ပါ။',

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
            'rule-name' => 'စိတ်ကြိုက်စာတို',
        ],
        'g-recaptcha-response' => [
            'required' => 'သင်သည် စက်ရုပ်မဟုတ်ကြောင်း အတည်ပြုပါ။',
            'captcha' => 'Captcha အမှား။ နောက်မှ ထပ်ကြိုးစားပါ သို့မဟုတ် ဆိုက်စီမံခန့်ခွဲသူကို ဆက်သွယ်ပါ။',
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



    'accepted_if' => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်ကို လက်ခံရပါမည်။',
    'ascii' => ':attribute အကွက်တွင် single-byte အက္ခရာဂဏန်းစာလုံးများနှင့် သင်္ကေတများသာ ပါဝင်ရပါမည်။',
    'can' => ':attribute အကွက်တွင် ခွင့်ပြုချက်မရှိဘဲ တန်ဖိုးတစ်ခု ပါရှိသည်။',
    'contains' => ':attribute အကွက်သည် လိုအပ်သောတန်ဖိုးတစ်ခု ပျောက်ဆုံးနေပါသည်။',
    'current_password' => 'စကားဝှက် မမှန်ပါ။',
    'date_equals' => ':attribute အကွက်သည် :date နှင့် ညီမျှသော ရက်စွဲတစ်ခု ဖြစ်ရမည်။',
    'decimal' => ':attribute အကွက်တွင် :decimal ဒဿမနေရာများ ရှိရပါမည်။',
    'declined' => ':attribute အကွက်ကို ငြင်းပယ်ရပါမည်။',
    'declined_if' => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်ကို ငြင်းပယ်ရပါမည်။',
    'doesnt_end_with' => ':attribute အကွက်သည် အောက်ပါများထဲမှ တစ်ခုနှင့် အဆုံးမသတ်ရပါ။ :values',
    'doesnt_start_with' => ':attribute အကွက်သည် အောက်ပါတို့အနက်မှ တစ်ခုနှင့် မစတင်ရပါမည်- :values။',
    'ends_with' => ':attribute အကွက်သည် အောက်ပါများထဲမှ တစ်ခုနှင့် အဆုံးသတ်ရမည်- :values။',
    'enum' => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'extensions' => ':attribute အကွက်တွင် အောက်ပါ extension များထဲမှ တစ်ခု ရှိရမည်- :values။',
    'hex_color' => ':attribute အကွက်သည် မှန်ကန်သော hexadecimal အရောင်ဖြစ်ရမည်။',
    'list' => ':attribute အကွက်သည် စာရင်းတစ်ခု ဖြစ်ရပါမည်။',
    'lowercase' => ':attribute အကွက်သည် စာလုံးသေးဖြစ်ရမည်။',
    'mac_address' => ':attribute အကွက်သည် တရားဝင် MAC လိပ်စာဖြစ်ရမည်။',
    'max_digits' => ':attribute အကွက်တွင် :max digits ထက် မပိုရပါ။',
    'min_digits' => ':attribute အကွက်တွင် အနည်းဆုံး :min digits ရှိရပါမည်။',
    'missing' => ':attribute အကွက် ပျောက်ဆုံးနေရပါမည်။',
    'missing_if' => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်သည် ပျောက်ဆုံးနေရပါမည်။',
    'missing_unless' => ':other သည် :value မဟုတ်ပါက :attribute အကွက်သည် ပျောက်ဆုံးနေရပါမည်။',
    'missing_with' => ':values ရှိသည့်အခါ :attribute အကွက် ပျောက်ဆုံးနေရပါမည်။',
    'missing_with_all' => ':values ရှိသည့်အခါ :attribute အကွက် ပျောက်ဆုံးနေရပါမည်။',
    'multiple_of' => ':attribute အကွက်သည် :value ၏ ဆတိုးကိန်းဖြစ်ရပါမည်။',
    'password' => [
        'letters' => ':attribute အကွက်တွင် အနည်းဆုံး စာလုံးတစ်လုံး ပါဝင်ရပါမည်။',
        'mixed' => ':attribute အကွက်တွင် အနည်းဆုံး စာလုံးအကြီးတစ်လုံးနှင့် စာလုံးသေးတစ်လုံး ပါဝင်ရပါမည်။',
        'numbers' => ':attribute အကွက်တွင် အနည်းဆုံး နံပါတ်တစ်ခု ပါဝင်ရပါမည်။',
        'symbols' => ':attribute အကွက်တွင် အနည်းဆုံး သင်္ကေတတစ်ခု ပါဝင်ရပါမည်။',
        'uncompromised' => 'ပေးထားသော :attribute သည် ဒေတာပေါက်ကြားမှုတွင် ပေါ်လာသည်။ မတူညီသော :attribute ကို ရွေးပါ။',
    ],
    'present_if' => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်သည် ရှိနေရပါမည်။',
    'present_unless' => ':other သည် :value မဟုတ်ပါက :attribute အကွက်သည် ရှိနေရပါမည်။',
    'present_with' => ':values ရှိသောအခါတွင် :attribute အကွက်သည် ရှိနေရပါမည်။',
    'present_with_all' => ':values ရှိနေသောအခါတွင် :attribute အကွက်သည် ရှိနေရပါမည်။',
    'prohibited' => ':attribute အကွက်ကို တားမြစ်ထားသည်။',
    'prohibited_if' => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်ကို တားမြစ်ထားသည်။',
    'prohibited_unless' => ':attribute အကွက်ကို :other သည် :values တွင်မရှိပါက တားမြစ်ထားသည်။',
    'prohibits' => ':attribute အကွက်သည် :အခြားအရာများ ရှိနေခြင်းမှ တားမြစ်ထားသည်။',
    'required_array_keys' => ':attribute အကွက်တွင်- :values အတွက် ထည့်သွင်းမှုများ ပါဝင်ရပါမည်။',
    'required_if_accepted' => ':other ကို လက်ခံသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_if_declined' => ':other ကို ငြင်းပယ်သည့်အခါ :attribute အကွက် လိုအပ်သည်။',
    'starts_with' => ':attribute အကွက်သည် အောက်ပါများထဲမှ တစ်ခုနှင့် စတင်ရပါမည်- :values။',
    'uppercase' => ':attribute အကွက်သည် စာလုံးအကြီးဖြစ်ရမည်။',
    'ulid' => ':attribute အကွက်သည် မှန်ကန်သော ULID ဖြစ်ရပါမည်။',
    'uuid' => ':attribute အကွက်သည် တရားဝင် UUID ဖြစ်ရပါမည်။',
];
