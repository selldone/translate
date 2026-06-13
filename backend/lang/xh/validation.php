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

    'accepted' => 'I-:attribute kufuneka yamkelwe.',
    'active_url' => 'I-:attribute ayisiyo-URL esebenzayo.',
    'after' => 'I-:attribute kufuneka ibe ngumhla osemva kwe-:date.',
    'after_or_equal' => 'I-:attribute kufuneka ibe ngumhla osemva okanye olingana ne-:date.',
    'alpha' => 'I-:attribute inokuqulatha kuphela oonobumba.',
    'alpha_dash' => 'I-:attribute inokuqulatha kuphela oonobumba, amanani, kunye nodwi.',
    'alpha_num' => 'I-:attribute inokuqulatha kuphela oonobumba kunye namanani.',
    'array' => 'I-:attribute kufuneka ibe luluhlu.',
    'before' => 'I-:attribute kufuneka ibe ngumhla ophambi kwe-:date.',
    'before_or_equal' => 'I-:attribute kufuneka ibe ngumhla ongaphambi okanye olingana ne-:date.',
    'between' => [
        'numeric' => 'I-:attribute kufuneka ibe phakathi kwe-:min kunye ne-:max.',
        'file' => 'I-:attribute kufuneka ibe phakathi kwe-:min kunye ne-:max iikhilobhayithi.',
        'string' => 'I-:attribute kufuneka ibe phakathi kwe-:min kunye ne-:max oonobumba.',
        'array' => 'I-:attribute kufuneka ibe phakathi kwezinto ze-:min kunye ne-:max.',
    ],
    'boolean' => 'Intsimi ye-:attribute kufuneka ibe yinyani okanye bubuxoki.',
    'confirmed' => 'Ukuqinisekiswa kwe-:attribute akuhambelani.',
    'date' => 'I-:attribute ayingomhla osebenzayo.',
    'date_format' => 'I-:attribute ayihambelani nefomathi ye-:format.',
    'different' => 'I-:attribute kunye ne-:other kufuneka yahluke.',
    'digits' => 'I-:attribute kufuneka ibe ngamanani e-:digits.',
    'digits_between' => 'I-:attribute kufuneka ibe phakathi kwe-:min kunye ne-:max amanani.',
    'dimensions' => 'I-:attribute inemilinganiselo yomfanekiso engasebenziyo.',
    'distinct' => 'Intsimi ye-:attribute inexabiso eliphindwe kabini.',
    'email' => 'I-:attribute kufuneka ibe yidilesi ye-imeyile esebenzayo.',
    'exists' => 'I-:attribute ekhethiweyo ayisebenzi.',
    'file' => 'I-:attribute kufuneka ibe yifayile.',
    'filled' => 'Intsimi ye-:attribute kufuneka ibe nexabiso.',
    'gt' => [
        'numeric' => 'I-:attribute kufuneka ibe nkulu kune-:value.',
        'file' => 'I-:attribute mayibe nkulu kune-:value iikhilobhayithi.',
        'string' => 'I-:attribute mayibe nkulu kunoonobumba be-:value.',
        'array' => 'I-:attribute kufuneka ibe nezinto ezingaphezu kwe-:value.',
    ],
    'gte' => [
        'numeric' => 'I-:attribute kufuneka ibe nkulu okanye ilingane ne-:value.',
        'file' => 'I-:attribute mayibe nkulu okanye ilingane neekhilobhayithi ze-:value.',
        'string' => 'I-:attribute kufuneka ibe nkulu okanye ilingane noonobumba be-:value.',
        'array' => 'I-:attribute kufuneka ibe nezinto ze-:value okanye ngaphezulu.',
    ],
    'image' => 'I-:attribute kufuneka ibe ngumfanekiso.',
    'in' => 'I-:attribute ekhethiweyo ayisebenzi.',
    'in_array' => 'Intsimi ye-:attribute ayikho kwi-:other.',
    'integer' => 'I-:attribute mayibe yinani elipheleleyo.',
    'ip' => 'I-:attribute kufuneka ibe yidilesi ye-IP esebenzayo.',
    'ipv4' => 'I-:attribute kufuneka ibe yidilesi ye-IPv4 esebenzayo.',
    'ipv6' => 'I-:attribute kufuneka ibe yidilesi ye-IPv6 esebenzayo.',
    'json' => 'I-:attribute kufuneka ibe ngumtya osebenzayo we-JSON.',
    'lt' => [
        'numeric' => 'I-:attribute kufuneka ibe ngaphantsi kwe-:value.',
        'file' => 'I-:attribute mayibe ngaphantsi kweekhilobhayithi ze-:value.',
        'string' => 'I-:attribute kufuneka ibe ngaphantsi koonobumba be-:value.',
        'array' => 'I-:attribute kufuneka ibe nezinto ezingaphantsi kwe-:value.',
    ],
    'lte' => [
        'numeric' => 'I-:attribute kufuneka ibe ngaphantsi okanye ilingane ne-:value.',
        'file' => 'I-:attribute kufuneka ibe ngaphantsi okanye ilingane neekhilobhayithi ze:value.',
        'string' => 'I-:attribute kufuneka ibe ngaphantsi okanye ilingane noonobumba be-:value.',
        'array' => 'I-:attribute mayingabi nezinto ezingaphezu kwe-:value.',
    ],
    'max' => [
        'numeric' => 'I-:attribute isenokungabi nkulu kune-:max.',
        'file' => 'I-:attribute ayinakuba nkulu kune-:max iikhilobhayithi.',
        'string' => 'I-:attribute isenokungabi nkulu kunoonobumba be-:max.',
        'array' => 'I-:attribute ayinakuba nezinto ezingaphezulu kwe-:max.',
    ],
    'mimes' => 'I-:attribute kufuneka ibe yifayile yodidi: :values.',
    'mimetypes' => 'I-:attribute kufuneka ibe yifayile yodidi: :values.',
    'min' => [
        'numeric' => 'I-:attribute kufuneka ibe yi-:min ubuncinane.',
        'file' => 'I-:attribute mayibe ubuncinane iikhilobhayithi ze-:min.',
        'string' => 'I-:attribute kufuneka ubuncinane ibeneempawu ze-:min.',
        'array' => 'I-:attribute kufuneka ubuncinane ibe nezinto ze-:min.',
    ],
    'not_in' => 'I-:attribute ekhethiweyo ayisebenzi.',
    'not_regex' => 'Ifomati ye-:attribute ayisebenzi.',
    'numeric' => 'I-:attribute kufuneka ibe yinombolo.',
    'present' => 'Indawo ye-:attribute kufuneka ibekho.',
    'regex' => 'Ifomati ye-:attribute ayisebenzi.',
    'required' => 'Indawo ye-:attribute iyafuneka.',
    'required_if' => 'Indawo ye-:attribute iyafuneka xa i-:other iyi-:value.',
    'required_unless' => 'Indawo ye-:attribute iyafuneka ngaphandle kokuba i-:other iku-:values.',
    'required_with' => 'Indawo ye-:attribute iyafuneka xa i-:values ikhona.',
    'required_with_all' => 'Indawo ye-:attribute iyafuneka xa i-:values ikhona.',
    'required_without' => 'Indawo ye-:attribute iyafuneka xa i-:values ingekho.',
    'required_without_all' => 'Indawo ye-:attribute iyafuneka xa kungekho nanye ye-:values ekhoyo.',
    'same' => 'I-:attribute kunye ne-:other kufuneka zihambelane.',
    'size' => [
        'numeric' => 'I-:attribute kufuneka ibe yi-:size.',
        'file' => 'I-:attribute mayibe yi-:size iikhilobhayithi.',
        'string' => 'I-:attribute kufuneka ibe ngabalinganiswa be-:size.',
        'array' => 'I-:attribute kufuneka iqulathe izinto ze-:size.',
    ],
    'string' => 'I-:attribute kufuneka ibe ngumtya.',
    'timezone' => 'I-:attribute kufuneka ibe yindawo esebenzayo.',
    'unique' => 'The :attribute sele ithathiwe.',
    'uploaded' => 'I-:attribute ayiphumelelanga ukulayisha.',
    'url' => 'Ifomati ye-:attribute ayisebenzi.',

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
            'rule-name' => 'isiko-umyalezo',
        ],
        'g-recaptcha-response' => [
            'required' => 'Nceda qinisekisa ukuba awuyorobhothi.',
            'captcha' => 'Impazamo yeCaptcha! zama kwakhona kamva okanye qhagamshelana nomphathi wendawo.',
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



    'accepted_if' => 'Indawo yophawu kufuneka yamkelwe xa :enye ingu :value.',
    'ascii' => 'Indawo yophawu kufuneka iqulathe kuphela amagama ealphanumeric kunye neempawu.',
    'can' => 'I :indawo yophawu iqulathe ixabiso elingagunyaziswanga.',
    'contains' => 'Indawo yophawu loyelelwano luswele ixabiso elifunekayo.',
    'current_password' => 'Igama lokugqithisa alichanekanga.',
    'date_equals' => 'Indawo yophawu kufuneka ibe ngumhla olingana :nomhla.',
    'decimal' => 'Indawo:yendawo yophawu kufuneka ibenendawo zedesimal.',
    'declined' => 'Indawo yophawu kufuneka yaliwe.',
    'declined_if' => 'Indawo yophawu kufuneka yaliwe xa :enye ingu :value.',
    'doesnt_end_with' => 'Indawo yophawu loyelelwano mayingapheli ngenye yezi zilandelayo: :amaxabiso.',
    'doesnt_start_with' => 'I :indawo yophawu loyelelwano mayingaqali ngenye yezi zilandelayo: :amaxabiso.',
    'ends_with' => 'I-:inkalo yophawu kufuneka iphele ngenye yezi zilandelayo: :amaxabiso.',
    'enum' => 'Okukhethiweyo :uphawu loyelelwano alusebenzi.',
    'extensions' => 'I :indawo yophawu kufuneka ibenesinye sezi zandiso zilandelayo: :amaxabiso.',
    'hex_color' => 'Indawo yophawu kufuneka ibe ngumbala osebenzayo we-hexadecimal.',
    'list' => 'Indawo yophawu kufuneka ibe luluhlu.',
    'lowercase' => 'Indawo:yendawo yophawu kufuneka ibe ngoonobumba abancinci.',
    'mac_address' => 'Indawo yophawu kufuneka ibe yidilesi ye-MAC esebenzayo.',
    'max_digits' => 'I-:indawo yophawu loyelelwano kufuneka ingabinamanani angaphezu kwe-:max.',
    'min_digits' => 'Indawo yophawu kufuneka ibenamanani ubuncinane :min.',
    'missing' => 'I :indawo yophawu kufuneka ingabikho.',
    'missing_if' => 'Indawo yophawu kufuneka ilahlekile xa :enye ingu :value.',
    'missing_unless' => 'I :indawo yophawu loyelelwano kufuneka ilahlekile ngaphandle kokuba :enye yi :value.',
    'missing_with' => 'Indawo yophawu kufuneka ilahlekile xa :amaxabiso ekhona.',
    'missing_with_all' => 'Indawo yophawu kufuneka ilahlekile xa :amaxabiso ekhona.',
    'multiple_of' => 'Indawo yophawu kufuneka ibe luphinda-phindo lwe :xabiso.',
    'password' => [
        'letters' => 'Indawo yophawu kufuneka iqulathe nokuba mnye unobumba.',
        'mixed' => 'Indawo yophawu kufuneka iqulathe nonobumba omnye omkhulu kunye nonobumba omncinci omnye.',
        'numbers' => 'Indawo yophawu kufuneka iqulathe ubuncinane inani elinye.',
        'symbols' => 'Indawo yophawu kufuneka iqulathe ubuncinci isimboli enye.',
        'uncompromised' => 'Inikiweyo :uphawu luvele kwidatha evuzayo. Nceda ukhethe eyahlukileyo :uphawu.',
    ],
    'present_if' => 'Indawo yophawu kufuneka ibekho xa :enye ingu :value.',
    'present_unless' => 'Indawo yophawu kufuneka ibekho ngaphandle kokuba :enye yi :value.',
    'present_with' => 'Indawo yophawu kufuneka ibekho xa :amaxabiso ekhona.',
    'present_with_all' => 'Indawo yophawu kufuneka ibekho xa :amaxabiso ekhona.',
    'prohibited' => 'I :indawo yophawu ayivumelekanga.',
    'prohibited_if' => 'I :indawo yophawu loyelelwano aluvumelekanga xa :okunye :ixabiso.',
    'prohibited_unless' => 'Indawo yophawu loyelelwano aluvumelekanga ngaphandle kokuba :okunye kuku :amaxabiso.',
    'prohibits' => 'I :indawo yophawu iyanqanda :olunye ukuba lubekho.',
    'required_array_keys' => 'Indawo yophawu kufuneka iqulathe amangeno: :amaxabiso.',
    'required_if_accepted' => 'I-:indawo yophawu iyafuneka xa :enye yamkelwe.',
    'required_if_declined' => 'Indawo yophawu loyelelwano iyafuneka xa :enye yaliwe.',
    'starts_with' => 'I :indawo yophawu kufuneka iqale ngenye yezi zilandelayo: :amaxabiso.',
    'uppercase' => 'Indawo:yendawo yophawu kufuneka ibe ngoonobumba abakhulu.',
    'ulid' => 'Indawo yophawu kufuneka ibe yi-LID esebenzayo.',
    'uuid' => 'Indawo yophawu kufuneka ibe yi-UUID esebenzayo.',
];
