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

    'accepted' => ':attribute অবশ্যই গ্রহণ করতে হবে।',
    'active_url' => ':attribute একটি বৈধ URL নয়।',
    'after' => ':attribute অবশ্যই :date এর পরে একটি তারিখ হতে হবে৷',
    'after_or_equal' => ':attribute অবশ্যই :date এর পরে বা তার সমান হতে হবে৷',
    'alpha' => ':attribute শুধুমাত্র অক্ষর থাকতে পারে।',
    'alpha_dash' => ':attribute শুধুমাত্র অক্ষর, সংখ্যা এবং ড্যাশ থাকতে পারে।',
    'alpha_num' => ':attribute শুধুমাত্র অক্ষর এবং সংখ্যা থাকতে পারে।',
    'array' => ':attribute একটি অ্যারে হতে হবে।',
    'before' => ':attribute অবশ্যই :date এর আগে একটি তারিখ হতে হবে।',
    'before_or_equal' => ':attributeটি অবশ্যই :date এর আগে বা সমান একটি তারিখ হতে হবে।',
    'between' => [
        'numeric' => ':attribute অবশ্যই :min এবং :max এর মধ্যে হতে হবে।',
        'file' => ':attribute অবশ্যই :min এবং :max কিলোবাইটের মধ্যে হতে হবে৷',
        'string' => ':attribute অবশ্যই :min এবং :max অক্ষরের মধ্যে হতে হবে।',
        'array' => ':attribute এর মধ্যে থাকতে হবে :min এবং :max আইটেম।',
    ],
    'boolean' => ':attribute ক্ষেত্রটি সত্য বা মিথ্যা হতে হবে।',
    'confirmed' => ':attribute নিশ্চিতকরণ মেলে না।',
    'date' => ':attribute একটি বৈধ তারিখ নয়।',
    'date_format' => ':attribute ফর্ম্যাট :format এর সাথে মেলে না৷',
    'different' => ':attribute এবং :other আলাদা হতে হবে।',
    'digits' => ':attribute অবশ্যই :digits সংখ্যা হতে হবে।',
    'digits_between' => ':attribute অবশ্যই :min এবং :max সংখ্যার মধ্যে হতে হবে।',
    'dimensions' => ':attribute এর অবৈধ চিত্র মাত্রা রয়েছে৷',
    'distinct' => ':attribute ক্ষেত্রের একটি ডুপ্লিকেট মান আছে।',
    'email' => ':attribute একটি বৈধ ইমেল ঠিকানা হতে হবে।',
    'exists' => 'নির্বাচিত :attribute অবৈধ৷',
    'file' => ':attribute একটি ফাইল হতে হবে।',
    'filled' => ':attribute ক্ষেত্রের একটি মান থাকতে হবে।',
    'gt' => [
        'numeric' => ':attribute অবশ্যই :value এর থেকে বড় হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে বেশি হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে বড় হতে হবে।',
        'array' => ':attribute-এ অবশ্যই :value আইটেম এর থেকে বেশি থাকতে হবে।',
    ],
    'gte' => [
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে বড় বা সমান হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের থেকে বড় বা সমান হতে হবে৷',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে বড় বা সমান হতে হবে।',
        'array' => ':attribute-এর অবশ্যই :value আইটেম বা তার বেশি থাকতে হবে।',
    ],
    'image' => ':attribute একটি ছবি হতে হবে।',
    'in' => 'নির্বাচিত :attribute অবৈধ৷',
    'in_array' => ':attribute ক্ষেত্রটি :other-এ বিদ্যমান নেই৷',
    'integer' => ':attribute একটি পূর্ণসংখ্যা হতে হবে।',
    'ip' => ':attribute একটি বৈধ IP ঠিকানা হতে হবে৷',
    'ipv4' => ':attribute একটি বৈধ IPv4 ঠিকানা হতে হবে।',
    'ipv6' => ':attribute একটি বৈধ IPv6 ঠিকানা হতে হবে।',
    'json' => ':attribute একটি বৈধ JSON স্ট্রিং হতে হবে।',
    'lt' => [
        'numeric' => ':attribute অবশ্যই :value-এর চেয়ে কম হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে কম হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে কম হতে হবে।',
        'array' => ':attribute এর থেকে কম :value আইটেম থাকতে হবে।',
    ],
    'lte' => [
        'numeric' => ':attribute অবশ্যই :value এর থেকে কম বা সমান হতে হবে।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের থেকে কম বা সমান হতে হবে।',
        'string' => ':attribute অবশ্যই :value অক্ষরের কম বা সমান হতে হবে।',
        'array' => ':attribute তে :value এর বেশি আইটেম থাকতে হবে না৷',
    ],
    'max' => [
        'numeric' => ':attribute :max এর থেকে বেশি নাও হতে পারে।',
        'file' => ':attribute :max kilobytes এর থেকে বেশি নাও হতে পারে৷',
        'string' => ':attributeটি :max অক্ষরের চেয়ে বেশি নাও হতে পারে।',
        'array' => ':attribute এ :max এর বেশি আইটেম নাও থাকতে পারে।',
    ],
    'mimes' => ':attribute টাইপ: :values ফাইল হতে হবে।',
    'mimetypes' => ':attribute টাইপ: :values ফাইল হতে হবে।',
    'min' => [
        'numeric' => ':attribute কমপক্ষে :min হতে হবে।',
        'file' => ':attribute কমপক্ষে :min কিলোবাইট হতে হবে৷',
        'string' => ':attribute অন্তত :min অক্ষর হতে হবে।',
        'array' => ':attribute তে কমপক্ষে :min আইটেম থাকতে হবে৷',
    ],
    'not_in' => 'নির্বাচিত :attribute অবৈধ৷',
    'not_regex' => ':attribute বিন্যাসটি অবৈধ।',
    'numeric' => ':attribute একটি সংখ্যা হতে হবে।',
    'present' => ':attribute ক্ষেত্রটি অবশ্যই উপস্থিত থাকতে হবে।',
    'regex' => ':attribute বিন্যাসটি অবৈধ।',
    'required' => ':attribute ক্ষেত্র প্রয়োজন।',
    'required_if' => ':other হলে :value হলে :attribute ক্ষেত্রটি প্রয়োজন৷',
    'required_unless' => ':attribute ক্ষেত্রটি প্রয়োজন যদি না :other :values তে থাকে।',
    'required_with' => 'যখন :values উপস্থিত থাকে তখন :attribute ফিল্ডের প্রয়োজন হয়।',
    'required_with_all' => 'যখন :values উপস্থিত থাকে তখন :attribute ফিল্ডের প্রয়োজন হয়।',
    'required_without' => 'যখন :values উপস্থিত না থাকে তখন :attribute ফিল্ডের প্রয়োজন হয়।',
    'required_without_all' => ':values এর কোনোটিই উপস্থিত না থাকলে :attribute ক্ষেত্রটির প্রয়োজন হয়৷',
    'same' => ':attribute এবং :other অবশ্যই মিলবে।',
    'size' => [
        'numeric' => ':attribute অবশ্যই :size হতে হবে।',
        'file' => ':attribute অবশ্যই :size কিলোবাইট হতে হবে।',
        'string' => ':attribute অবশ্যই :size অক্ষর হতে হবে।',
        'array' => ':attribute তে অবশ্যই :size আইটেম থাকতে হবে।',
    ],
    'string' => ':attribute একটি স্ট্রিং হতে হবে।',
    'timezone' => ':attribute একটি বৈধ অঞ্চল হতে হবে৷',
    'unique' => ':attribute ইতিমধ্যে নেওয়া হয়েছে।',
    'uploaded' => ':attribute আপলোড করতে ব্যর্থ হয়েছে৷',
    'url' => ':attribute বিন্যাসটি অবৈধ।',

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
            'rule-name' => 'কাস্টম-বার্তা',
        ],
        'g-recaptcha-response' => [
            'required' => 'অনুগ্রহ করে যাচাই করুন যে আপনি রোবট নন।',
            'captcha' => 'ক্যাপচা ত্রুটি! পরে আবার চেষ্টা করুন বা সাইট অ্যাডমিনের সাথে যোগাযোগ করুন।',
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



    'accepted_if' => ':অ্যাট্রিবিউট ক্ষেত্রটি অবশ্যই গ্রহণ করা উচিত যখন :অন্য:মান।',
    'ascii' => ':attribute ফিল্ডে শুধুমাত্র একক-বাইট আলফানিউমেরিক অক্ষর এবং চিহ্ন থাকতে হবে।',
    'can' => ':attribute ক্ষেত্রের একটি অননুমোদিত মান রয়েছে।',
    'contains' => ':attribute ক্ষেত্রের একটি প্রয়োজনীয় মান অনুপস্থিত।',
    'current_password' => 'পাসওয়ার্ডটি ভুল।',
    'date_equals' => ':attribute ক্ষেত্রটি অবশ্যই :date এর সমান একটি তারিখ হতে হবে।',
    'decimal' => ':attribute ক্ষেত্রে অবশ্যই :decimal দশমিক স্থান থাকতে হবে।',
    'declined' => ':attribute ক্ষেত্রটি অবশ্যই প্রত্যাখ্যান করতে হবে।',
    'declined_if' => ':অ্যাট্রিবিউট ক্ষেত্রটি অবশ্যই প্রত্যাখ্যান করতে হবে যখন :অন্যান্য হয় :মান।',
    'doesnt_end_with' => ':attribute ক্ষেত্রটি অবশ্যই নিম্নলিখিতগুলির একটি দিয়ে শেষ হবে না: :values৷',
    'doesnt_start_with' => ':attribute ক্ষেত্রটি অবশ্যই নিম্নলিখিতগুলির একটি দিয়ে শুরু হবে না: :values৷',
    'ends_with' => ':attribute ক্ষেত্রটি অবশ্যই নিম্নলিখিতগুলির একটি দিয়ে শেষ হতে হবে: :values৷',
    'enum' => 'নির্বাচিত :অ্যাট্রিবিউটটি অবৈধ।',
    'extensions' => ':attribute ক্ষেত্রে নিম্নলিখিত এক্সটেনশনগুলির মধ্যে একটি থাকতে হবে: :values.',
    'hex_color' => ':attribute ক্ষেত্রটি অবশ্যই একটি বৈধ হেক্সাডেসিমেল রঙ হতে হবে।',
    'list' => ':attribute ক্ষেত্রটি অবশ্যই একটি তালিকা হতে হবে।',
    'lowercase' => ':attribute ক্ষেত্রটি ছোট হাতের হতে হবে।',
    'mac_address' => ':attribute ক্ষেত্রটি অবশ্যই একটি বৈধ MAC ঠিকানা হতে হবে।',
    'max_digits' => ':attribute ফিল্ডে অবশ্যই :max সংখ্যার বেশি থাকতে হবে না।',
    'min_digits' => ':attribute ফিল্ডে কমপক্ষে :min সংখ্যা থাকতে হবে।',
    'missing' => ':attribute ক্ষেত্রটি অবশ্যই অনুপস্থিত।',
    'missing_if' => ':অ্যাট্রিবিউট ক্ষেত্রটি অবশ্যই অনুপস্থিত থাকবে যখন :অন্য হল :মান।',
    'missing_unless' => ':অ্যাট্রিবিউট ক্ষেত্রটি অবশ্যই অনুপস্থিত থাকবে যদি না :অন্য :মান থাকে।',
    'missing_with' => ':values উপস্থিত থাকলে :attribute ক্ষেত্রটি অবশ্যই অনুপস্থিত থাকবে।',
    'missing_with_all' => ':values উপস্থিত থাকলে :attribute ক্ষেত্রটি অবশ্যই অনুপস্থিত থাকবে।',
    'multiple_of' => ':attribute ক্ষেত্রটি অবশ্যই :value-এর একাধিক হতে হবে।',
    'password' => [
        'letters' => ':attribute ফিল্ডে অন্তত একটি অক্ষর থাকতে হবে।',
        'mixed' => ':attribute ক্ষেত্রে অন্তত একটি বড় হাতের এবং একটি ছোট হাতের অক্ষর থাকতে হবে।',
        'numbers' => ':attribute ফিল্ডে অন্তত একটি সংখ্যা থাকতে হবে।',
        'symbols' => ':attribute ফিল্ডে অন্তত একটি চিহ্ন থাকতে হবে।',
        'uncompromised' => 'প্রদত্ত :অ্যাট্রিবিউট একটি ডেটা ফাঁসের মধ্যে উপস্থিত হয়েছে। অনুগ্রহ করে একটি ভিন্ন চয়ন করুন: বৈশিষ্ট্য।',
    ],
    'present_if' => ':অ্যাট্রিবিউট ক্ষেত্রটি অবশ্যই উপস্থিত থাকতে হবে যখন :অন্য হল :মান।',
    'present_unless' => ':অ্যাট্রিবিউট ক্ষেত্রটি অবশ্যই উপস্থিত থাকতে হবে যদি না :অন্য :মান থাকে।',
    'present_with' => ':values উপস্থিত থাকলে :attribute ক্ষেত্রটি অবশ্যই উপস্থিত থাকতে হবে৷',
    'present_with_all' => 'যখন :values থাকে তখন :attribute ক্ষেত্রটি অবশ্যই উপস্থিত থাকতে হবে।',
    'prohibited' => ':attribute ক্ষেত্রটি নিষিদ্ধ।',
    'prohibited_if' => ':অ্যাট্রিবিউট ক্ষেত্রটি নিষিদ্ধ যখন :অন্যান্য হয় :মান।',
    'prohibited_unless' => ':অ্যাট্রিবিউট ক্ষেত্রটি নিষিদ্ধ যদি না :অন্য :মানে থাকে।',
    'prohibits' => ':অ্যাট্রিবিউট ক্ষেত্রটি :অন্যকে উপস্থিত হতে নিষেধ করে।',
    'required_array_keys' => ':attribute ফিল্ডে অবশ্যই: :values এর জন্য এন্ট্রি থাকতে হবে।',
    'required_if_accepted' => 'যখন :অন্য গৃহীত হয় তখন :অ্যাট্রিবিউট ফিল্ডের প্রয়োজন হয়।',
    'required_if_declined' => 'যখন :অন্য প্রত্যাখ্যান করা হয় তখন :অ্যাট্রিবিউট ফিল্ডের প্রয়োজন হয়।',
    'starts_with' => ':attribute ক্ষেত্রটি অবশ্যই নিম্নলিখিতগুলির একটি দিয়ে শুরু করতে হবে: :values৷',
    'uppercase' => ':attribute ক্ষেত্রটি অবশ্যই বড় হাতের হতে হবে।',
    'ulid' => ':attribute ক্ষেত্রটি অবশ্যই একটি বৈধ ULID হতে হবে।',
    'uuid' => ':attribute ক্ষেত্রটি অবশ্যই একটি বৈধ UUID হতে হবে।',
];
