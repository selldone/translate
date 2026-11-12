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

    'accepted' => ':attribute کو قبول کرنا ضروری ہے۔',
    'active_url' => ':attribute ایک درست URL نہیں ہے۔',
    'after' => ':attribute:date کے بعد کی تاریخ ہونی چاہیے۔',
    'after_or_equal' => ':attribute:date کے بعد یا اس کے مساوی تاریخ ہونی چاہیے۔',
    'alpha' => ':attribute میں صرف حروف شامل ہو سکتے ہیں۔',
    'alpha_dash' => ':attribute میں صرف حروف، اعداد اور ڈیش ہو سکتے ہیں۔',
    'alpha_num' => ':attribute میں صرف حروف اور اعداد شامل ہو سکتے ہیں۔',
    'array' => ':attribute ایک صف ہونی چاہیے۔',
    'before' => ':attribute:date سے پہلے کی تاریخ ہونی چاہیے۔',
    'before_or_equal' => ':attribute کو :date سے پہلے یا اس کے برابر کی تاریخ ہونی چاہیے۔',
    'between' => [
        'numeric' => ':attribute کو :min اور :max کے درمیان ہونا چاہیے۔',
        'file' => ':attribute:min اور :max kilobytes کے درمیان ہونا چاہیے۔',
        'string' => ':attribute کو :min اور :max حروف کے درمیان ہونا چاہیے۔',
        'array' => ':attribute میں :min اور :max اشیاء کے درمیان ہونا ضروری ہے۔',
    ],
    'boolean' => ':attribute فیلڈ کو صحیح یا غلط ہونا چاہیے۔',
    'confirmed' => ':attribute کی تصدیق مماثل نہیں ہے۔',
    'date' => ':attribute ایک درست تاریخ نہیں ہے۔',
    'date_format' => ':attribute فارمیٹ :format سے مماثل نہیں ہے۔',
    'different' => ':attribute اور :other مختلف ہونا چاہیے۔',
    'digits' => ':attribute کا ہونا ضروری ہے :digits digits۔',
    'digits_between' => ':attribute کو :min اور :max ہندسوں کے درمیان ہونا چاہیے۔',
    'dimensions' => ':attribute میں تصویر کے غلط طول و عرض ہیں۔',
    'distinct' => ':attribute فیلڈ میں ڈپلیکیٹ ویلیو ہے۔',
    'email' => ':attribute ایک درست ای میل پتہ ہونا چاہیے۔',
    'exists' => 'منتخب کردہ :attribute غلط ہے۔',
    'file' => ':attribute ایک فائل ہونی چاہیے۔',
    'filled' => ':attribute فیلڈ میں ایک قدر ہونی چاہیے۔',
    'gt' => [
        'numeric' => ':attribute کو :value سے بڑا ہونا چاہیے۔',
        'file' => ':attribute کو :value kilobytes سے بڑا ہونا چاہیے۔',
        'string' => ':attribute کو :value حروف سے بڑا ہونا چاہیے۔',
        'array' => ':attribute میں :value آئٹمز سے زیادہ ہونا ضروری ہے۔',
    ],
    'gte' => [
        'numeric' => ':attribute کو :value سے بڑا یا برابر ہونا چاہیے۔',
        'file' => ':attribute کو :value kilobytes سے بڑا یا برابر ہونا چاہیے۔',
        'string' => ':attribute کو :value حروف سے بڑا یا برابر ہونا چاہیے۔',
        'array' => ':attribute میں :value آئٹمز یا اس سے زیادہ ہونا ضروری ہے۔',
    ],
    'image' => ':attribute ایک تصویر ہونی چاہیے۔',
    'in' => 'منتخب کردہ :attribute غلط ہے۔',
    'in_array' => ':attribute فیلڈ :other میں موجود نہیں ہے۔',
    'integer' => ':attribute ایک عدد عدد ہونا چاہیے۔',
    'ip' => ':attribute ایک درست IP پتہ ہونا چاہیے۔',
    'ipv4' => ':attribute ایک درست IPv4 پتہ ہونا چاہیے۔',
    'ipv6' => ':attribute ایک درست IPv6 پتہ ہونا چاہیے۔',
    'json' => ':attribute ایک درست JSON سٹرنگ ہونی چاہیے۔',
    'lt' => [
        'numeric' => ':attribute کو :value سے کم ہونا چاہیے۔',
        'file' => ':attribute کو :value kilobytes سے کم ہونا چاہیے۔',
        'string' => ':attribute کو :value حروف سے کم ہونا چاہیے۔',
        'array' => ':attribute میں :value آئٹمز سے کم ہونا ضروری ہے۔',
    ],
    'lte' => [
        'numeric' => ':attribute کو :value سے کم یا برابر ہونا چاہیے۔',
        'file' => ':attribute کو :value kilobytes سے کم یا برابر ہونا چاہیے۔',
        'string' => ':attribute کو :value حروف سے کم یا برابر ہونا چاہیے۔',
        'array' => ':attribute میں :value آئٹمز سے زیادہ نہیں ہونا چاہیے۔',
    ],
    'max' => [
        'numeric' => ':attribute :max سے زیادہ نہیں ہو سکتا۔',
        'file' => ':attribute :max kilobytes سے زیادہ نہیں ہو سکتا۔',
        'string' => ':attribute :max حروف سے زیادہ نہیں ہو سکتا۔',
        'array' => ':attribute میں :max سے زیادہ آئٹمز نہیں ہو سکتے۔',
    ],
    'mimes' => ':attribute ٹائپ: :values کی فائل ہونی چاہیے۔',
    'mimetypes' => ':attribute ٹائپ: :values کی فائل ہونی چاہیے۔',
    'min' => [
        'numeric' => ':attribute کم از کم :min ہونا چاہیے۔',
        'file' => ':attribute کم از کم :min kilobytes ہونا چاہیے۔',
        'string' => ':attribute کم از کم :min حروف کا ہونا چاہیے۔',
        'array' => ':attribute میں کم از کم :min اشیاء ہونی چاہئیں۔',
    ],
    'not_in' => 'منتخب کردہ :attribute غلط ہے۔',
    'not_regex' => ':attribute فارمیٹ غلط ہے۔',
    'numeric' => ':attribute کو ایک عدد ہونا چاہیے۔',
    'present' => ':attribute فیلڈ کا موجود ہونا ضروری ہے۔',
    'regex' => ':attribute فارمیٹ غلط ہے۔',
    'required' => ':attribute فیلڈ درکار ہے۔',
    'required_if' => ':attribute فیلڈ کی ضرورت ہوتی ہے جب :other ہے :value۔',
    'required_unless' => ':attribute فیلڈ کی ضرورت ہے جب تک کہ :other :values میں نہ ہو۔',
    'required_with' => ':attribute فیلڈ کی ضرورت ہوتی ہے جب :values موجود ہو۔',
    'required_with_all' => ':attribute فیلڈ کی ضرورت ہوتی ہے جب :values موجود ہو۔',
    'required_without' => ':attribute فیلڈ کی ضرورت ہوتی ہے جب :values موجود نہ ہو۔',
    'required_without_all' => ':attribute فیلڈ کی ضرورت ہے جب :values میں سے کوئی بھی موجود نہ ہو۔',
    'same' => ':attribute اور :other کو مماثل ہونا چاہیے۔',
    'size' => [
        'numeric' => ':attribute کو :size ہونا چاہیے۔',
        'file' => ':attribute کا ہونا ضروری ہے :size kilobytes۔',
        'string' => ':attribute کا ہونا ضروری ہے :size حروف۔',
        'array' => ':attribute میں :size آئٹمز کا ہونا ضروری ہے۔',
    ],
    'string' => ':attribute ایک تار ہونا چاہیے۔',
    'timezone' => ':attribute ایک درست زون ہونا چاہیے۔',
    'unique' => ':attribute پہلے ہی لیا جا چکا ہے۔',
    'uploaded' => ':attribute اپ لوڈ کرنے میں ناکام۔',
    'url' => ':attribute فارمیٹ غلط ہے۔',

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
            'rule-name' => 'حسب ضرورت پیغام',
        ],
        'g-recaptcha-response' => [
            'required' => 'براہ کرم تصدیق کریں کہ آپ روبوٹ نہیں ہیں۔',
            'captcha' => 'کیپچا کی خرابی! بعد میں دوبارہ کوشش کریں یا سائٹ کے منتظم سے رابطہ کریں۔',
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



    'accepted_if' => ':attribute فیلڈ کو قبول کرنا ضروری ہے جب :other ہے :value۔',
    'ascii' => ':attribute فیلڈ میں صرف سنگل بائٹ حروف اور علامتیں ہونی چاہئیں۔',
    'can' => ':attribute فیلڈ ایک غیر مجاز قدر پر مشتمل ہے۔',
    'contains' => ':attribute فیلڈ میں مطلوبہ قدر موجود نہیں ہے۔',
    'current_password' => 'پاس ورڈ غلط ہے۔',
    'date_equals' => ':attribute فیلڈ کو :date کے برابر تاریخ ہونی چاہیے۔',
    'decimal' => ':attribute فیلڈ میں :decimal decimal جگہیں ہونی چاہئیں۔',
    'declined' => ':attribute فیلڈ کو مسترد کرنا ضروری ہے۔',
    'declined_if' => ':attribute فیلڈ کو مسترد کر دینا چاہیے جب :other ہے :value۔',
    'doesnt_end_with' => ':attribute فیلڈ کو مندرجہ ذیل میں سے کسی ایک کے ساتھ ختم نہیں ہونا چاہیے: :values۔',
    'doesnt_start_with' => ':attribute فیلڈ کو درج ذیل میں سے کسی ایک سے شروع نہیں ہونا چاہیے: :values۔',
    'ends_with' => ':attribute فیلڈ کو مندرجہ ذیل میں سے کسی ایک کے ساتھ ختم ہونا چاہیے: :values۔',
    'enum' => 'منتخب کردہ :attribute غلط ہے۔',
    'extensions' => ':attribute فیلڈ میں درج ذیل ایکسٹینشنز میں سے ایک ہونا ضروری ہے: :values۔',
    'hex_color' => ':attribute فیلڈ ایک درست ہیکساڈیسیمل رنگ کا ہونا چاہیے۔',
    'list' => ':attribute فیلڈ ایک فہرست ہونی چاہیے۔',
    'lowercase' => ':attribute فیلڈ کو چھوٹا ہونا چاہیے۔',
    'mac_address' => ':attribute فیلڈ ایک درست MAC پتہ ہونا چاہیے۔',
    'max_digits' => ':attribute فیلڈ میں :max ہندسوں سے زیادہ نہیں ہونا چاہیے۔',
    'min_digits' => ':attribute فیلڈ میں کم از کم :min ہندسوں کا ہونا ضروری ہے۔',
    'missing' => ':attribute فیلڈ کا غائب ہونا ضروری ہے۔',
    'missing_if' => ':attribute فیلڈ کا غائب ہونا ضروری ہے جب :other ہے :value۔',
    'missing_unless' => ':attribute فیلڈ کا غائب ہونا ضروری ہے جب تک کہ :other نہیں ہے :value۔',
    'missing_with' => 'جب :values موجود ہو تو :attribute فیلڈ غائب ہونا چاہیے۔',
    'missing_with_all' => 'جب :values موجود ہوں تو :attribute فیلڈ غائب ہونا چاہیے۔',
    'multiple_of' => ':attribute فیلڈ کو :value کا کثیر ہونا چاہیے۔',
    'password' => [
        'letters' => ':attribute فیلڈ میں کم از کم ایک حرف ہونا چاہیے۔',
        'mixed' => ':attribute فیلڈ میں کم از کم ایک بڑے اور ایک چھوٹے حرف کا ہونا ضروری ہے۔',
        'numbers' => ':attribute فیلڈ میں کم از کم ایک نمبر ہونا چاہیے۔',
        'symbols' => ':attribute فیلڈ میں کم از کم ایک علامت ہونی چاہیے۔',
        'uncompromised' => 'دیا گیا :attribute ڈیٹا لیک میں ظاہر ہوا ہے۔ براہ کرم ایک مختلف منتخب کریں :attribute۔',
    ],
    'present_if' => ':attribute فیلڈ کا موجود ہونا ضروری ہے جب :other ہے :value۔',
    'present_unless' => ':attribute فیلڈ کا موجود ہونا ضروری ہے جب تک کہ :other نہیں ہے :value۔',
    'present_with' => ':attribute فیلڈ کا موجود ہونا ضروری ہے جب :values موجود ہو۔',
    'present_with_all' => ':attribute فیلڈ کا موجود ہونا ضروری ہے جب :values موجود ہوں۔',
    'prohibited' => ':attribute فیلڈ ممنوع ہے۔',
    'prohibited_if' => ':attribute فیلڈ ممنوع ہے جب :other ہے :value۔',
    'prohibited_unless' => ':attribute فیلڈ ممنوع ہے جب تک کہ :other :values میں نہ ہو۔',
    'prohibits' => ':attribute فیلڈ :other کو موجود ہونے سے روکتی ہے۔',
    'required_array_keys' => ':attribute فیلڈ میں ::values کے لیے اندراجات شامل ہونا چاہیے۔',
    'required_if_accepted' => 'جب :other کو قبول کیا جاتا ہے تو :attribute فیلڈ کی ضرورت ہوتی ہے۔',
    'required_if_declined' => 'جب :other کو مسترد کر دیا جاتا ہے تو :attribute فیلڈ کی ضرورت ہوتی ہے۔',
    'starts_with' => ':attribute فیلڈ کو درج ذیل میں سے کسی ایک سے شروع ہونا چاہیے: :values۔',
    'uppercase' => ':attribute فیلڈ کا بڑا ہونا ضروری ہے۔',
    'ulid' => ':attribute فیلڈ ایک درست ULID ہونا چاہیے۔',
    'uuid' => ':attribute فیلڈ ایک درست UUID ہونا چاہیے۔',
];
