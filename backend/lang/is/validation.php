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

    'accepted' => 'Samþykkja verður :attribute.',
    'active_url' => ':attribute er ekki gilt URL.',
    'after' => ':attribute verður að vera dagsetning á eftir :date.',
    'after_or_equal' => ':attribute verður að vera dagsetning á eftir eða jafnt og :date.',
    'alpha' => ':attribute má aðeins innihalda stafi.',
    'alpha_dash' => ':attribute má aðeins innihalda bókstafi, tölustafi og strik.',
    'alpha_num' => ':attribute má aðeins innihalda bókstafi og tölustafi.',
    'array' => ':attribute verður að vera fylki.',
    'before' => ':attribute verður að vera dagsetning á undan :date.',
    'before_or_equal' => ':attribute verður að vera dagsetning fyrir eða jafnt og :date.',
    'between' => [
        'numeric' => ':attribute verður að vera á milli :min og :max.',
        'file' => ':attribute verður að vera á milli :min og :max kílóbæti.',
        'string' => ':attribute verður að vera á milli :min og :max stafir.',
        'array' => ':attribute verður að hafa á milli :min og :max hluti.',
    ],
    'boolean' => 'Reiturinn :attribute verður að vera satt eða ósatt.',
    'confirmed' => 'Staðfestingin :attribute passar ekki.',
    'date' => ':attribute er ekki gild dagsetning.',
    'date_format' => ':attribute passar ekki við sniðið :format.',
    'different' => ':attribute og :other verða að vera mismunandi.',
    'digits' => ':attribute verður að vera :digits tölustafir.',
    'digits_between' => ':attribute verður að vera á milli :min og :max tölustafa.',
    'dimensions' => ':attribute hefur ógildar myndstærðir.',
    'distinct' => 'Reiturinn :attribute hefur tvítekið gildi.',
    'email' => ':attribute verður að vera gilt netfang.',
    'exists' => 'Valin :attribute er ógild.',
    'file' => ':attribute verður að vera skrá.',
    'filled' => 'Reiturinn :attribute verður að hafa gildi.',
    'gt' => [
        'numeric' => ':attribute verður að vera stærra en :value.',
        'file' => ':attribute verður að vera stærra en :value kílóbæti.',
        'string' => ':attribute verður að vera stærra en :value stafir.',
        'array' => ':attribute verður að hafa fleiri en :value hluti.',
    ],
    'gte' => [
        'numeric' => ':attribute verður að vera stærra en eða jafnt :value.',
        'file' => ':attribute verður að vera stærra en eða jafnt og :value kílóbæti.',
        'string' => ':attribute verður að vera stærri en eða jafngildir :value stöfum.',
        'array' => ':attribute verður að hafa :value hluti eða fleiri.',
    ],
    'image' => ':attribute verður að vera mynd.',
    'in' => 'Valin :attribute er ógild.',
    'in_array' => ':attribute reiturinn er ekki til í :other.',
    'integer' => ':attribute verður að vera heil tala.',
    'ip' => ':attribute verður að vera gilt IP heimilisfang.',
    'ipv4' => ':attribute verður að vera gilt IPv4 vistfang.',
    'ipv6' => ':attribute verður að vera gilt IPv6 vistfang.',
    'json' => ':attribute verður að vera gildur JSON strengur.',
    'lt' => [
        'numeric' => ':attribute verður að vera minna en :value.',
        'file' => ':attribute verður að vera minna en :value kílóbæti.',
        'string' => ':attribute verður að vera minna en :value stafir.',
        'array' => ':attribute verður að hafa færri en :value hluti.',
    ],
    'lte' => [
        'numeric' => ':attribute verður að vera minna en eða jafnt :value.',
        'file' => ':attribute verður að vera minna en eða jafnt og :value kílóbæti.',
        'string' => ':attribute verður að vera minna en eða jafnt og :value stafir.',
        'array' => ':attribute má ekki innihalda fleiri en :value hluti.',
    ],
    'max' => [
        'numeric' => ':attribute má ekki vera stærra en :max.',
        'file' => ':attribute má ekki vera stærra en :max kílóbæti.',
        'string' => ':attribute má ekki vera stærra en :max stafir.',
        'array' => ':attribute má ekki innihalda fleiri en :max hluti.',
    ],
    'mimes' => ':attribute verður að vera skrá af gerðinni: :values.',
    'mimetypes' => ':attribute verður að vera skrá af gerðinni: :values.',
    'min' => [
        'numeric' => ':attribute verður að vera að minnsta kosti :min.',
        'file' => ':attribute verður að vera að minnsta kosti :min kílóbæti.',
        'string' => ':attribute verður að vera að minnsta kosti :min stafir.',
        'array' => ':attribute verður að hafa að minnsta kosti :min hluti.',
    ],
    'not_in' => 'Valin :attribute er ógild.',
    'not_regex' => 'Snið :attribute er ógilt.',
    'numeric' => ':attribute verður að vera tala.',
    'present' => 'Reiturinn :attribute verður að vera til staðar.',
    'regex' => 'Snið :attribute er ógilt.',
    'required' => 'Reiturinn :attribute er nauðsynlegur.',
    'required_if' => ':attribute reiturinn er nauðsynlegur þegar :other er :value.',
    'required_unless' => ':attribute reiturinn er nauðsynlegur nema :other sé í :values.',
    'required_with' => ':attribute reiturinn er nauðsynlegur þegar :values er til staðar.',
    'required_with_all' => ':attribute reiturinn er nauðsynlegur þegar :values er til staðar.',
    'required_without' => ':attribute reiturinn er nauðsynlegur þegar :values er ekki til staðar.',
    'required_without_all' => ':attribute reiturinn er nauðsynlegur þegar ekkert af :values er til staðar.',
    'same' => ':attribute og :other verða að passa saman.',
    'size' => [
        'numeric' => ':attribute verður að vera :size.',
        'file' => ':attribute verður að vera :size kílóbæti.',
        'string' => ':attribute verður að vera :size stafir.',
        'array' => ':attribute verður að innihalda :size hluti.',
    ],
    'string' => ':attribute verður að vera strengur.',
    'timezone' => ':attribute verður að vera gilt svæði.',
    'unique' => ':attribute hefur þegar verið tekið.',
    'uploaded' => ':attribute tókst ekki að hlaða upp.',
    'url' => 'Snið :attribute er ógilt.',

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
            'rule-name' => 'sérsniðin skilaboð',
        ],
        'g-recaptcha-response' => [
            'required' => 'Vinsamlegast staðfestu að þú sért ekki vélmenni.',
            'captcha' => 'Captcha villa! reyndu aftur síðar eða hafðu samband við síðustjóra.',
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



    'accepted_if' => 'Samþykkja verður :eigindareitinn þegar :other er :value.',
    'ascii' => 'Reiturinn :attribute má aðeins innihalda eins-bæta tölustafi og tákn.',
    'can' => 'Reiturinn :attribute inniheldur óheimilt gildi.',
    'contains' => 'Áskilið gildi vantar í reitinn :attribute.',
    'current_password' => 'Lykilorðið er rangt.',
    'date_equals' => 'Reiturinn :attribute verður að vera dagsetning sem er jöfn :date.',
    'decimal' => ':eigindareiturinn verður að hafa :tugastafi aukastafa.',
    'declined' => 'Það verður að hafna reitnum :attribute.',
    'declined_if' => ':attributareitnum verður að hafna þegar :other er :value.',
    'doesnt_end_with' => 'Reiturinn :attribute má ekki enda á einu af eftirfarandi: :gildum.',
    'doesnt_start_with' => 'Reiturinn :attribute má ekki byrja á einu af eftirfarandi: :gildum.',
    'ends_with' => 'Reiturinn :attribute verður að enda á einu af eftirfarandi: :values.',
    'enum' => 'Valin :eiginleiki er ógild.',
    'extensions' => 'Reiturinn :attribute verður að hafa eina af eftirfarandi viðbótum: :values.',
    'hex_color' => 'Reiturinn :attribute verður að vera gildur sextándabilslitur.',
    'list' => 'Reiturinn :attribute verður að vera listi.',
    'lowercase' => 'Reiturinn :attribute verður að vera lítill.',
    'mac_address' => 'Reiturinn :attribute verður að vera gilt MAC vistfang.',
    'max_digits' => 'Reiturinn :attribute má ekki hafa fleiri en :max tölustafi.',
    'min_digits' => 'Reiturinn :attribute verður að hafa að minnsta kosti :min tölustafi.',
    'missing' => ':attribute reitinn verður að vanta.',
    'missing_if' => ':attributareitinn verður að vanta þegar :other er :value.',
    'missing_unless' => ':attributareitinn verður að vanta nema :other sé :value.',
    'missing_with' => ':attribute reitinn verður að vanta þegar :values er til staðar.',
    'missing_with_all' => ':attributareitinn verður að vanta þegar :gildi eru til staðar.',
    'multiple_of' => 'Reiturinn :attribute verður að vera margfeldi af :value.',
    'password' => [
        'letters' => 'Reiturinn :attribute verður að innihalda að minnsta kosti einn staf.',
        'mixed' => 'Reiturinn :attribute verður að innihalda að minnsta kosti einn hástaf og einn lágstaf.',
        'numbers' => 'Reiturinn :attribute verður að innihalda að minnsta kosti eina tölu.',
        'symbols' => 'Reiturinn :attribute verður að innihalda að minnsta kosti eitt tákn.',
        'uncompromised' => 'Uppgefin :eiginleiki hefur birst í gagnaleka. Vinsamlegast veldu annan :eiginleika.',
    ],
    'present_if' => 'Reiturinn :attribute verður að vera til staðar þegar :other er :value.',
    'present_unless' => 'Reiturinn :attribute verður að vera til staðar nema :other sé :value.',
    'present_with' => 'Reiturinn :attribute verður að vera til staðar þegar :values er til staðar.',
    'present_with_all' => 'Reiturinn :attribute verður að vera til staðar þegar :gildi eru til staðar.',
    'prohibited' => 'Reiturinn :attribute er bannaður.',
    'prohibited_if' => 'Reiturinn :attribute er bannaður þegar :other er :value.',
    'prohibited_unless' => ':eigindareiturinn er bannaður nema :other sé í :gildum.',
    'prohibits' => ':attribute reiturinn bannar :other að vera til staðar.',
    'required_array_keys' => 'Reiturinn :attribute verður að innihalda færslur fyrir: :values.',
    'required_if_accepted' => ':attribute reiturinn er nauðsynlegur þegar :other er samþykkt.',
    'required_if_declined' => ':attribute reiturinn er nauðsynlegur þegar :other er hafnað.',
    'starts_with' => 'Reiturinn :attribute verður að byrja á einu af eftirfarandi: :values.',
    'uppercase' => 'Reiturinn :attribute verður að vera hástöfum.',
    'ulid' => 'Reiturinn :attribute verður að vera gilt ULID.',
    'uuid' => 'Reiturinn :attribute verður að vera gilt UUID.',
];
