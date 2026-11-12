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

    'accepted' => ':attribute павінен быць прыняты.',
    'active_url' => ':attribute не з\'яўляецца сапраўдным URL.',
    'after' => ':attribute павінен быць датай пасля :date.',
    'after_or_equal' => ':attribute павінен быць датай пасля або роўнай :date.',
    'alpha' => ':attribute можа ўтрымліваць толькі літары.',
    'alpha_dash' => ':attribute можа ўтрымліваць толькі літары, лічбы і працяжнікі.',
    'alpha_num' => ':attribute можа ўтрымліваць толькі літары і лічбы.',
    'array' => ':attribute павінен быць масівам.',
    'before' => ':attribute павінен быць датай перад :date.',
    'before_or_equal' => ':attribute павінен быць датай ранейшай або роўнай :date.',
    'between' => [
        'numeric' => ':attribute павінен быць паміж :min і :max.',
        'file' => ':attribute павінен быць паміж :min і :max кілабайтамі.',
        'string' => ':attribute павінен быць паміж сімваламі :min і :max.',
        'array' => ':attribute павінен мець паміж :min і :max элементы.',
    ],
    'boolean' => 'Поле :attribute павінна мець значэнне true або false.',
    'confirmed' => 'Пацвярджэнне :attribute не супадае.',
    'date' => ':attribute не з\'яўляецца сапраўднай датай.',
    'date_format' => ':attribute не адпавядае фармату :format.',
    'different' => ':attribute і :other павінны адрознівацца.',
    'digits' => ':attribute павінен быць :digits лічбамі.',
    'digits_between' => ':attribute павінен быць паміж лічбамі :min і :max.',
    'dimensions' => ':attribute мае несапраўдныя памеры выявы.',
    'distinct' => 'Поле :attribute мае паўтаральнае значэнне.',
    'email' => ':attribute павінен быць сапраўдным адрасам электроннай пошты.',
    'exists' => 'Выбраны :attribute несапраўдны.',
    'file' => ':attribute павінен быць файлам.',
    'filled' => 'Поле :attribute павінна мець значэнне.',
    'gt' => [
        'numeric' => ':attribute павінен быць большым за :value.',
        'file' => ':attribute павінен быць большым за :value кілабайт.',
        'string' => 'Знак :attribute павінен быць большы за :value.',
        'array' => ':attribute павінен мець больш, чым :value элементаў.',
    ],
    'gte' => [
        'numeric' => ':attribute павінен быць большым або роўным :value.',
        'file' => ':attribute павінен быць большым або роўным :value кілабайтам.',
        'string' => 'Знак :attribute павінен быць большым або роўным сімвалам :value.',
        'array' => ':attribute павінен мець :value элементы або больш.',
    ],
    'image' => ':attribute павінен быць выявай.',
    'in' => 'Выбраны :attribute несапраўдны.',
    'in_array' => 'Поле :attribute не існуе ў :other.',
    'integer' => ':attribute павінен быць цэлым лікам.',
    'ip' => ':attribute павінен быць сапраўдным IP-адрасам.',
    'ipv4' => ':attribute павінен быць сапраўдным адрасам IPv4.',
    'ipv6' => ':attribute павінен быць сапраўдным адрасам IPv6.',
    'json' => ':attribute павінен быць сапраўдным радком JSON.',
    'lt' => [
        'numeric' => ':attribute павінен быць меншым за :value.',
        'file' => ':attribute павінен быць меншым за :value кілабайт.',
        'string' => ':attribute павінна быць менш за :value сімвалаў.',
        'array' => ':attribute павінен мець менш, чым :value элементаў.',
    ],
    'lte' => [
        'numeric' => ':attribute павінен быць меншым або роўным :value.',
        'file' => ':attribute павінен быць менш або роўны :value кілабайт.',
        'string' => 'Знак :attribute павінен быць меншым або роўным сімвалам :value.',
        'array' => ':attribute не можа мець больш за :value элементаў.',
    ],
    'max' => [
        'numeric' => ':attribute не можа быць большым за :max.',
        'file' => ':attribute не можа перавышаць :max кілабайт.',
        'string' => ':attribute не можа быць большым за :max сімвалаў.',
        'array' => ':attribute не можа мець больш за :max элементаў.',
    ],
    'mimes' => ':attribute павінен быць файлам тыпу: :values.',
    'mimetypes' => ':attribute павінен быць файлам тыпу: :values.',
    'min' => [
        'numeric' => ':attribute павінен быць не меншым за :min.',
        'file' => ':attribute павінен быць не менш за :min кілабайт.',
        'string' => ':attribute павінен змяшчаць не менш за :min сімвалаў.',
        'array' => ':attribute павінен мець не менш за :min элементаў.',
    ],
    'not_in' => 'Выбраны :attribute несапраўдны.',
    'not_regex' => 'Фармат :attribute няправільны.',
    'numeric' => ':attribute павінен быць лікам.',
    'present' => 'Павінна быць поле :attribute.',
    'regex' => 'Фармат :attribute няправільны.',
    'required' => 'Поле :attribute абавязковае.',
    'required_if' => 'Поле :attribute абавязковае, калі :other роўна :value.',
    'required_unless' => 'Поле :attribute абавязковае, калі :other не знаходзіцца ў :values.',
    'required_with' => 'Поле :attribute абавязковае, калі прысутнічае :values.',
    'required_with_all' => 'Поле :attribute абавязковае, калі прысутнічае :values.',
    'required_without' => 'Поле :attribute абавязковае, калі :values адсутнічае.',
    'required_without_all' => 'Поле :attribute абавязковае, калі няма ніводнага з :values.',
    'same' => ':attribute і :other павінны супадаць.',
    'size' => [
        'numeric' => ':attribute павінен быць :size.',
        'file' => ':attribute павінен быць :size кілабайт.',
        'string' => ':attribute павінен быць сімваламі :size.',
        'array' => ':attribute павінен утрымліваць элементы :size.',
    ],
    'string' => ':attribute павінен быць радком.',
    'timezone' => ':attribute павінен быць сапраўднай зонай.',
    'unique' => 'Атрыбут :attribute ужо заняты.',
    'uploaded' => 'Не ўдалося загрузіць :attribute.',
    'url' => 'Фармат :attribute няправільны.',

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
            'rule-name' => 'карыстацкае паведамленне',
        ],
        'g-recaptcha-response' => [
            'required' => 'Калі ласка, пераканайцеся, што вы не робат.',
            'captcha' => 'Памылка Captcha! паўтарыце спробу пазней або звярніцеся да адміністратара сайта.',
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



    'accepted_if' => 'Поле :attribute павінна прымацца, калі :other роўна :value.',
    'ascii' => 'Поле :attribute павінна ўтрымліваць толькі аднабайтавыя літары і сімвалы.',
    'can' => 'Поле :attribute змяшчае несанкцыянаванае значэнне.',
    'contains' => 'У полі :attribute адсутнічае абавязковае значэнне.',
    'current_password' => 'Пароль няправільны.',
    'date_equals' => 'Поле :attribute павінна быць датай, роўнай :date.',
    'decimal' => 'Поле :attribute павінна мець :decimal знакаў пасля коскі.',
    'declined' => 'Поле :attribute павінна быць адхілена.',
    'declined_if' => 'Поле :attribute павінна быць адхілена, калі :other роўна :value.',
    'doesnt_end_with' => 'Поле :attribute не павінна заканчвацца адным з наступнага: :values.',
    'doesnt_start_with' => 'Поле :attribute не павінна пачынацца з аднаго з наступнага: :values.',
    'ends_with' => 'Поле :attribute павінна заканчвацца адным з наступнага: :values.',
    'enum' => 'Выбраны :attribute несапраўдны.',
    'extensions' => 'Поле :attribute павінна мець адно з наступных пашырэнняў: :values.',
    'hex_color' => 'Поле :attribute павінна мець сапраўдны шаснаццатковы колер.',
    'list' => 'Поле :attribute павінна быць спісам.',
    'lowercase' => 'Поле :attribute павінна быць напісана ў ніжнім рэгістры.',
    'mac_address' => 'Поле :attribute павінна быць сапраўдным MAC-адрасам.',
    'max_digits' => 'Поле :attribute не павінна мець больш за :max лічбаў.',
    'min_digits' => 'Поле :attribute павінна мець не менш за :min лічбаў.',
    'missing' => 'Поле :attribute павінна адсутнічаць.',
    'missing_if' => 'Поле :attribute павінна адсутнічаць, калі :other роўна :value.',
    'missing_unless' => 'Поле :attribute павінна адсутнічаць, калі :other не роўна :value.',
    'missing_with' => 'Поле :attribute павінна адсутнічаць, калі прысутнічае :values.',
    'missing_with_all' => 'Поле :attribute павінна адсутнічаць, калі прысутнічаюць :values.',
    'multiple_of' => 'Поле :attribute павінна быць кратным :value.',
    'password' => [
        'letters' => 'Поле :attribute павінна змяшчаць хаця б адну літару.',
        'mixed' => 'Поле :attribute павінна змяшчаць як мінімум адну вялікую і адну малую літары.',
        'numbers' => 'Поле :attribute павінна змяшчаць хаця б адну лічбу.',
        'symbols' => 'Поле :attribute павінна змяшчаць хаця б адзін сімвал.',
        'uncompromised' => 'Дадзены :attribute з\'явіўся ў выніку ўцечкі даных. Выберыце іншы :attribute.',
    ],
    'present_if' => 'Поле :attribute павінна прысутнічаць, калі :other роўна :value.',
    'present_unless' => 'Поле :attribute павінна прысутнічаць, калі толькі :other не з\'яўляецца :value.',
    'present_with' => 'Поле :attribute павінна прысутнічаць, калі прысутнічае :values.',
    'present_with_all' => 'Поле :attribute павінна прысутнічаць, калі прысутнічаюць :values.',
    'prohibited' => 'Поле :attribute забаронена.',
    'prohibited_if' => 'Поле :attribute забаронена, калі :other роўна :value.',
    'prohibited_unless' => 'Поле :attribute забаронена, калі толькі :other не знаходзіцца ў :values.',
    'prohibits' => 'Поле :attribute забараняе прысутнасць :other.',
    'required_array_keys' => 'Поле :attribute павінна ўтрымліваць запісы для: :values.',
    'required_if_accepted' => 'Поле :attribute абавязковае, калі прымаецца :other.',
    'required_if_declined' => 'Поле :attribute абавязковае, калі :other адхілена.',
    'starts_with' => 'Поле :attribute павінна пачынацца з аднаго з наступнага: :values.',
    'uppercase' => 'Поле :attribute павінна быць загалоўным.',
    'ulid' => 'Поле :attribute павінна быць сапраўдным ULID.',
    'uuid' => 'Поле :attribute павінна быць сапраўдным UUID.',
];
