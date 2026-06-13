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

    'accepted'             => 'Die :attribute moet aanvaar word.',
    'active_url'           => 'Die :attribute is nie \'n geldige URL nie.',
    'after'                => 'Die :attribute moet \'n datum na :date wees.',
    'after_or_equal'       => 'Die :attribute moet \'n datum na of gelyk aan :date wees.',
    'alpha'                => 'Die :attribute mag slegs letters bevat.',
    'alpha_dash'           => 'Die :attribute mag slegs letters, syfers en strepe bevat.',
    'alpha_num'            => 'Die :attribute mag slegs letters en syfers bevat.',
    'array'                => 'Die :attribute moet \'n skikking wees.',
    'before'               => 'Die :attribute moet \'n datum voor :date wees.',
    'before_or_equal'      => 'Die :attribute moet \'n datum voor of gelyk aan :date wees.',
    'between'              => [
        'numeric' => 'Die :attribute moet tussen :min en :max wees.',
        'file'    => 'Die :attribute moet tussen :min en :max kilogrepe wees.',
        'string'  => 'Die :attribute moet tussen :min en :max karakters wees.',
        'array'   => 'Die :attribute moet tussen :min en :max items hê.',
    ],
    'boolean'              => 'Die :attribute-veld moet waar of onwaar wees.',
    'confirmed'            => 'Die :attribute-bevestiging stem nie ooreen nie.',
    'date'                 => 'Die :attribute is nie \'n geldige datum nie.',
    'date_format'          => 'Die :attribute stem nie ooreen met die formaat :format nie.',
    'different'            => 'Die :attribute en :other moet anders wees.',
    'digits'               => 'Die :attribute moet :digits-syfers wees.',
    'digits_between'       => 'Die :attribute moet tussen :min en :max syfers wees.',
    'dimensions'           => 'Die :attribute het ongeldige prentafmetings.',
    'distinct'             => 'Die :attribute-veld het \'n duplikaatwaarde.',
    'email'                => 'Die :attribute moet \'n geldige e-posadres wees.',
    'exists'               => 'Die gekose :attribute is ongeldig.',
    'file'                 => 'Die :attribute moet \'n lêer wees.',
    'filled'               => 'Die :attribute-veld moet \'n waarde hê.',
    'gt'                   => [
        'numeric' => 'Die :attribute moet groter as :value wees.',
        'file'    => 'Die :attribute moet groter as :value kilogrepe wees.',
        'string'  => 'Die :attribute moet groter as :value karakters wees.',
        'array'   => 'Die :attribute moet meer as :value-items hê.',
    ],
    'gte'                  => [
        'numeric' => 'Die :attribute moet groter as of gelyk wees aan :value.',
        'file'    => 'Die :attribute moet groter as of gelyk wees aan :value kilogrepe.',
        'string'  => 'Die :attribute moet groter as of gelyk wees aan :value karakters.',
        'array'   => 'Die :attribute moet :value-items of meer hê.',
    ],
    'image'                => 'Die :attribute moet \'n prent wees.',
    'in'                   => 'Die gekose :attribute is ongeldig.',
    'in_array'             => 'Die :attribute-veld bestaan nie in :other nie.',
    'integer'              => 'Die :attribute moet \'n heelgetal wees.',
    'ip'                   => 'Die :attribute moet \'n geldige IP-adres wees.',
    'ipv4'                 => 'Die :attribute moet \'n geldige IPv4-adres wees.',
    'ipv6'                 => 'Die :attribute moet \'n geldige IPv6-adres wees.',
    'json'                 => 'Die :attribute moet \'n geldige JSON-string wees.',
    'lt'                   => [
        'numeric' => 'Die :attribute moet minder as :value wees.',
        'file'    => 'Die :attribute moet minder as :value kilogrepe wees.',
        'string'  => 'Die :attribute moet minder as :value karakters wees.',
        'array'   => 'Die :attribute moet minder as :value-items hê.',
    ],
    'lte'                  => [
        'numeric' => 'Die :attribute moet minder as of gelyk wees aan :value.',
        'file'    => 'Die :attribute moet minder as of gelyk wees aan :value kilogrepe.',
        'string'  => 'Die :attribute moet minder as of gelyk wees aan :value karakters.',
        'array'   => 'Die :attribute mag nie meer as :value-items hê nie.',
    ],
    'max'                  => [
        'numeric' => 'Die :attribute mag nie groter as :max wees nie.',
        'file'    => 'Die :attribute mag nie groter as :max kilogrepe wees nie.',
        'string'  => 'Die :attribute mag nie groter as :max karakters wees nie.',
        'array'   => 'Die :attribute mag nie meer as :max items hê nie.',
    ],
    'mimes'                => 'Die :attribute moet \'n lêer van tipe: :values wees.',
    'mimetypes'            => 'Die :attribute moet \'n lêer van tipe: :values wees.',
    'min'                  => [
        'numeric' => 'Die :attribute moet ten minste :min wees.',
        'file'    => 'Die :attribute moet ten minste :min kilogrepe wees.',
        'string'  => 'Die :attribute moet ten minste :min karakters wees.',
        'array'   => 'Die :attribute moet ten minste :min items hê.',
    ],
    'not_in'               => 'Die gekose :attribute is ongeldig.',
    'not_regex'            => 'Die :attribute-formaat is ongeldig.',
    'numeric'              => 'Die :attribute moet \'n getal wees.',
    'present'              => 'Die :attribute veld moet teenwoordig wees.',
    'regex'                => 'Die :attribute-formaat is ongeldig.',
    'required'             => 'Die :attribute-veld word vereis.',
    'required_if'          => 'Die :attribute-veld word vereis wanneer :other :value is.',
    'required_unless'      => 'Die :attribute-veld word vereis tensy :other in :values is.',
    'required_with'        => 'Die :attribute-veld word vereis wanneer :values teenwoordig is.',
    'required_with_all'    => 'Die :attribute-veld word vereis wanneer :values teenwoordig is.',
    'required_without'     => 'Die :attribute-veld word vereis wanneer :values nie teenwoordig is nie.',
    'required_without_all' => 'Die :attribute-veld word vereis wanneer geen van :values teenwoordig is nie.',
    'same'                 => 'Die :attribute en :other moet ooreenstem.',
    'size'                 => [
        'numeric' => 'Die :attribute moet :size wees.',
        'file'    => 'Die :attribute moet :size kilogrepe wees.',
        'string'  => 'Die :attribute moet :size karakters wees.',
        'array'   => 'Die :attribute moet :size items bevat.',
    ],
    'string'               => 'Die :attribute moet \'n string wees.',
    'timezone'             => 'Die :attribute moet \'n geldige sone wees.',
    'unique'               => 'Die :attribute is reeds geneem.',
    'uploaded'             => 'Die :attribute kon nie oplaai nie.',
    'url'                  => 'Die :attribute-formaat is ongeldig.',

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
            'rule-name' => 'pasgemaakte boodskap',
        ],
        'g-recaptcha-response' => [
            'required' => 'Verifieer asseblief dat jy nie \'n robot is nie.',
            'captcha' => 'Captcha fout! probeer later weer of kontak werfadmin.',
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

];
