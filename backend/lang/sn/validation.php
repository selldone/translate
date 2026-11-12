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

    'accepted' => 'Iyo :attribute inofanira kugamuchirwa.',
    'active_url' => 'Iyo :attribute haisi URL inoshanda.',
    'after' => 'The :attribute inofanira kuva zuva rinotevera :date.',
    'after_or_equal' => 'Iyo :attribute inofanira kunge iri zuva rakatevera kana rakaenzana ne:date.',
    'alpha' => 'The :attribute inogona kunge iine mavara chete.',
    'alpha_dash' => 'The :attribute inogona kunge iine mavara, manhamba, nemadheshi chete.',
    'alpha_num' => 'The :attribute inogona kunge iine mavara nenhamba chete.',
    'array' => 'Iyo :attribute inofanirwa kuve yakarongeka.',
    'before' => 'The :attribute inofanira kuva zuva risati rasvika :date.',
    'before_or_equal' => 'The :attribute inofanira kuva zuva risati rasvika kana kuenzana ne:date.',
    'between' => [
        'numeric' => 'Iyo :attribute inofanirwa kunge iri pakati pe:min ne:max.',
        'file' => 'Iyo :attribute inofanira kunge iri pakati pe:min ne:max makirobhayiti.',
        'string' => 'Iyo :attribute inofanirwa kunge iri pakati pe:min ne:max mavara.',
        'array' => 'Iyo :attribute inofanirwa kuva pakati pe:min ne:max zvinhu.',
    ],
    'boolean' => 'The :attribute field inofanira kuva yechokwadi kana yenhema.',
    'confirmed' => 'Iyo :attribute simbiso haienderane.',
    'date' => 'The :attribute harisi zuva rinoshanda.',
    'date_format' => 'Iyo :attribute haienderane nefomati :format.',
    'different' => 'Iyo :attribute uye :other inofanira kunge yakasiyana.',
    'digits' => 'Iyo :attribute inofanira kunge iri manhamba e:digits.',
    'digits_between' => 'Iyo :attribute inofanirwa kunge iri pakati pe:min ne:max manhamba.',
    'dimensions' => 'The :attribute has invalid image sizements.',
    'distinct' => 'Iyo :attribute field ine duplicate value.',
    'email' => 'The :attribute inofanira kunge iri kero yeemail inoshanda.',
    'exists' => 'Yakasarudzwa :attribute haina kushanda.',
    'file' => 'Iyo :attribute inofanira kunge iri faira.',
    'filled' => 'The :attribute field inofanira kuva ne value.',
    'gt' => [
        'numeric' => 'Iyo :attribute inofanira kunge yakakura kupfuura :value.',
        'file' => 'Iyo :attribute inofanira kunge yakakura kupfuura :value makirobhati.',
        'string' => 'Iyo :attribute inofanira kunge yakakura kudarika :value mavara.',
        'array' => 'The :attribute inofanira kuva nezvakawanda kupfuura :value zvinhu.',
    ],
    'gte' => [
        'numeric' => 'Iyo :attribute inofanirwa kuve yakakura kupfuura kana kuenzana :value.',
        'file' => 'Iyo :attribute inofanirwa kuve yakakura kupfuura kana kuenzana :value makirobhaiti.',
        'string' => 'Iyo :attribute inofanirwa kunge yakakura kupfuura kana kuenzana :value mavara.',
        'array' => 'Iyo :attribute inofanirwa kuve ne:value zvinhu kana zvimwe.',
    ],
    'image' => 'Iyo :attribute inofanira kunge iri mufananidzo.',
    'in' => 'Yakasarudzwa :attribute haina kushanda.',
    'in_array' => 'Iyo :attribute munda haipo mu:other.',
    'integer' => 'The :attribute inofanira kuva nhamba yakakwana.',
    'ip' => 'Iyo :attribute inofanirwa kunge iri kero inoshanda yeIP.',
    'ipv4' => 'Iyo :attribute inofanira kunge iri kero yeIPv4 inoshanda.',
    'ipv6' => 'The :attribute inofanira kunge iri kero yeIPv6 inoshanda.',
    'json' => 'Iyo :attribute inofanira kunge iri tambo yeJSON inoshanda.',
    'lt' => [
        'numeric' => 'Iyo :attribute inofanirwa kunge iri pasi pe:value.',
        'file' => 'Iyo :attribute inofanirwa kunge iri pasi pe:value kilobytes.',
        'string' => 'Iyo :attribute inofanirwa kunge iri pasi pe:value mavara.',
        'array' => 'The :attribute inofanira kunge iine zvishoma pane :value zvinhu.',
    ],
    'lte' => [
        'numeric' => 'Iyo :attribute inofanira kunge iri pasi kana kuenzana ne:value.',
        'file' => 'Iyo :attribute inofanirwa kunge iri pasi kana kuenzana :value kilobytes.',
        'string' => 'Iyo :attribute inofanirwa kunge iri pasi kana kuenzana :value mavara.',
        'array' => 'The :attribute haifanire kunge iine zvinopfuura :value zvinhu.',
    ],
    'max' => [
        'numeric' => 'Iyo :attribute inogona kunge isiri yakakura kupfuura :max.',
        'file' => 'Iyo :attribute inogona kunge isiri yakakura kupfuura :max kilobytes.',
        'string' => 'The :attribute inogona kusapfuura :max mavara.',
        'array' => 'The :attribute inogona kunge isina zvinopfuura :max zvinhu.',
    ],
    'mimes' => 'Iyo :attribute inofanira kunge iri faira remhando: :values.',
    'mimetypes' => 'Iyo :attribute inofanira kunge iri faira remhando: :values.',
    'min' => [
        'numeric' => 'Iyo :attribute inofanirwa kunge iri :min.',
        'file' => 'Iyo :attribute inofanira kunge iine :min makirobhayiti.',
        'string' => 'The :attribute inofanira kunge iine :min mavara.',
        'array' => 'Iyo :attribute inofanirwa kunge iine zvishoma :min zvinhu.',
    ],
    'not_in' => 'Yakasarudzwa :attribute haina kushanda.',
    'not_regex' => 'Iyo :attribute fomati haina basa.',
    'numeric' => 'The :attribute inofanira kuva nhamba.',
    'present' => 'The :attribute field inofanira kuvapo.',
    'regex' => 'Iyo :attribute fomati haina basa.',
    'required' => 'The :attribute field inodiwa.',
    'required_if' => 'Iyo :attribute field inodiwa kana :other iri :value.',
    'required_unless' => 'Iyo :attribute ndima inodiwa kunze kwekunge :other iri mu:values.',
    'required_with' => 'Iyo :attribute field inodiwa kana :values iripo.',
    'required_with_all' => 'Iyo :attribute field inodiwa kana :values iripo.',
    'required_without' => 'Iyo :attribute field inodiwa kana :values isipo.',
    'required_without_all' => 'Iyo :attribute field inodiwa kana pasina imwe ye:values iripo.',
    'same' => 'Iyo :attribute uye :other inofanira kufanana.',
    'size' => [
        'numeric' => 'Iyo :attribute inofanira kunge iri :size.',
        'file' => 'Iyo :attribute inofanira kunge iri :size kilobytes.',
        'string' => 'Iyo :attribute inofanirwa kunge iri :size mavara.',
        'array' => 'Iyo :attribute inofanirwa kunge iine :size zvinhu.',
    ],
    'string' => 'The :attribute inofanira kunge iri tambo.',
    'timezone' => 'Iyo :attribute inofanirwa kunge iri nzvimbo inoshanda.',
    'unique' => 'The :attribute yakatotorwa.',
    'uploaded' => 'The :attribute yatadza kuisa.',
    'url' => 'Iyo :attribute fomati haina basa.',

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
            'rule-name' => 'tsika-meseji',
        ],
        'g-recaptcha-response' => [
            'required' => 'Ndokumbira utarise kuti hausi robhoti.',
            'captcha' => 'Captcha kukanganisa! edza zvakare gare gare kana kubata saiti admin.',
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



    'accepted_if' => 'The :attribute field inofanira kugamuchirwa kana :other iri :value.',
    'ascii' => 'Iyo :attribute field inofanira kunge iine single-byte alphanumeric characters nezviratidzo.',
    'can' => 'Iyo :attribute field ine kukosha kusingatenderwe.',
    'contains' => 'The :attribute field inoshaya kukosha kunodiwa.',
    'current_password' => 'Pasiwedhi haina kururama.',
    'date_equals' => 'The :attribute field inofanira kuva zuva rakaenzana ne :date.',
    'decimal' => 'Iyo :attribute munda inofanirwa kuve ne:decimal decimal nzvimbo.',
    'declined' => 'The :attribute field inofanira kurambwa.',
    'declined_if' => 'The :attribute field inofanira kurambwa kana :other iri :value.',
    'doesnt_end_with' => 'Iyo :attribute field haifanire kupera neimwe yeinotevera: :values.',
    'doesnt_start_with' => 'Iyo :attribute field haifanire kutanga neimwe yeinotevera: :values.',
    'ends_with' => 'Iyo :attribute field inofanira kupera neimwe yeinotevera: :values.',
    'enum' => 'Yakasarudzwa :attribute haina kushanda.',
    'extensions' => 'Iyo :attribute field inofanirwa kuve neimwe yeanotevera edzedzero: :values.',
    'hex_color' => 'Iyo :attribute field inofanira kunge iri yechokwadi hexadecimal color.',
    'list' => 'The :attribute field inofanira kunge iri rondedzero.',
    'lowercase' => 'The :attribute field inofanira kuva maduku maduku.',
    'mac_address' => 'The :attribute field inofanira kunge iri kero yeMAC inoshanda.',
    'max_digits' => 'Iyo :attribute nzvimbo haifanire kuva inodarika :max manhamba.',
    'min_digits' => 'The :attribute field inofanira kuva ne:min digits.',
    'missing' => 'The :attribute field inofanira kunge isipo.',
    'missing_if' => 'Iyo :attribute munda inofanira kunge isipo kana :other iri :value.',
    'missing_unless' => 'Iyo :attribute field inofanira kunge isipo kunze kwekunge :other iri :value.',
    'missing_with' => 'Iyo :attribute field inofanirwa kunge isipo kana :values iripo.',
    'missing_with_all' => 'Iyo :attribute field inofanirwa kunge isipo kana :values iripo.',
    'multiple_of' => 'The :attribute field inofanira kuva yakawanda ye:value.',
    'password' => [
        'letters' => 'The :attribute field inofanira kunge iine vara rimwechete.',
        'mixed' => 'Iyo :attribute field inofanirwa kunge iine kanenge kahobhuri nemavara madiki.',
        'numbers' => 'The :attribute field inofanira kunge iine nhamba imwe chete.',
        'symbols' => 'Iyo :attribute field inofanira kunge iine kana chiratidzo chimwe chete.',
        'uncompromised' => 'Iyo yakapihwa :attribute yaonekwa mune data leak. Ndapota sarudza zvakasiyana :hunhu.',
    ],
    'present_if' => 'Iyo :attribute field inofanira kunge iripo kana :other iri :value.',
    'present_unless' => 'The :attribute field inofanira kuvapo kunze kwekunge :other iri :value.',
    'present_with' => 'Iyo :attribute field inofanirwa kunge iripo kana :values iripo.',
    'present_with_all' => 'Iyo :attribute field inofanirwa kunge iripo kana :values iripo.',
    'prohibited' => 'The :attribute field inorambidzwa.',
    'prohibited_if' => 'Iyo :attribute munda inorambidzwa kana :other iri :value.',
    'prohibited_unless' => 'Iyo :attribute munda inorambidzwa kunze kwekunge :imwe iri mu:values.',
    'prohibits' => 'Iyo :attribute field inorambidza :zvimwe kuvapo.',
    'required_array_keys' => 'Iyo :attribute field inofanira kunge ine zvinyorwa zve: :values.',
    'required_if_accepted' => 'Iyo :attribute munda inodiwa kana :zvimwe zvagamuchirwa.',
    'required_if_declined' => 'The :attribute field inodiwa kana :zvimwe zvaramba.',
    'starts_with' => 'The :attribute field inofanira kutanga neimwe yeinotevera: :values.',
    'uppercase' => 'The :attribute field inofanira kuva huru.',
    'ulid' => 'The :attribute field inofanira kunge iri ULID inoshanda.',
    'uuid' => 'Iyo :attribute field inofanirwa kunge iri UUID inoshanda.',
];
