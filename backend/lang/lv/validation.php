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

    'accepted' => ':attribute ir jāpieņem.',
    'active_url' => ':attribute nav derīgs URL.',
    'after' => 'Atribūtam :attribute ir jābūt datumam pēc :date.',
    'after_or_equal' => 'Atribūtam :attribute ir jābūt datumam pēc :date vai vienādam ar to.',
    'alpha' => 'Atribūtā :attribute var būt tikai burti.',
    'alpha_dash' => ':attribute var saturēt tikai burtus, ciparus un domuzīmes.',
    'alpha_num' => ':attribute var saturēt tikai burtus un ciparus.',
    'array' => 'Atribūtam :attribute ir jābūt masīvam.',
    'before' => 'Atribūtam :attribute ir jābūt datumam pirms :date.',
    'before_or_equal' => 'Atribūtam :attribute ir jābūt datumam pirms :date vai vienādam ar to.',
    'between' => [
        'numeric' => 'Atribūtam :attribute ir jābūt no :min līdz :max.',
        'file' => ':attribute ir jābūt no :min un :max kilobaitiem.',
        'string' => ':attribute ir jābūt starp :min un :max rakstzīmēm.',
        'array' => 'Atribūtam :attribute jābūt no :min līdz :max vienumiem.',
    ],
    'boolean' => 'Laukam :attribute ir jābūt patiesam vai nepatiesam.',
    'confirmed' => ':attribute apstiprinājums neatbilst.',
    'date' => ':attribute nav derīgs datums.',
    'date_format' => 'Atribūts :attribute neatbilst formātam :format.',
    'different' => ':attribute un :other ir jāatšķiras.',
    'digits' => 'Atribūtam :attribute jābūt :digits cipariem.',
    'digits_between' => 'Atribūtam :attribute ir jābūt no :min līdz :max cipariem.',
    'dimensions' => 'Atribūtam :attribute ir nederīgi attēla izmēri.',
    'distinct' => 'Laukam :attribute ir dublēta vērtība.',
    'email' => 'Atribūtam :attribute ir jābūt derīgai e-pasta adresei.',
    'exists' => 'Atlasītais :attribute nav derīgs.',
    'file' => 'Atribūtam :attribute ir jābūt failam.',
    'filled' => 'Laukam :attribute ir jābūt vērtībai.',
    'gt' => [
        'numeric' => 'Atribūtam :attribute ir jābūt lielākam par :value.',
        'file' => ':attribute ir jābūt lielākam par :value kilobaitiem.',
        'string' => ':attribute ir jābūt lielākam par :value rakstzīmēm.',
        'array' => 'Atribūtam :attribute ir jābūt vairāk nekā :value vienumiem.',
    ],
    'gte' => [
        'numeric' => 'Atribūtam :attribute ir jābūt lielākam vai vienādam ar :value.',
        'file' => 'Atribūtam :attribute ir jābūt lielākam vai vienādam ar :value kilobaiti.',
        'string' => ':attribute ir jābūt lielākam vai vienādam ar :value rakstzīmēm.',
        'array' => 'Atribūtam :attribute ir jābūt :value vienumiem vai vairāk.',
    ],
    'image' => 'Atribūtam :attribute ir jābūt attēlam.',
    'in' => 'Atlasītais :attribute nav derīgs.',
    'in_array' => 'Lauks :attribute neeksistē :other.',
    'integer' => ':attribute ir jābūt veselam skaitlim.',
    'ip' => 'Atribūtam :attribute ir jābūt derīgai IP adresei.',
    'ipv4' => 'Atribūtam :attribute ir jābūt derīgai IPv4 adresei.',
    'ipv6' => 'Atribūtam :attribute ir jābūt derīgai IPv6 adresei.',
    'json' => 'Atribūtam :attribute ir jābūt derīgai JSON virknei.',
    'lt' => [
        'numeric' => 'Atribūtam :attribute ir jābūt mazākam par :value.',
        'file' => ':attribute ir jābūt mazākam par :value kilobaitiem.',
        'string' => 'Atribūtam :attribute ir jābūt mazākam par :value rakstzīmēm.',
        'array' => 'Atribūtam :attribute jābūt mazākam par :value vienumiem.',
    ],
    'lte' => [
        'numeric' => 'Atribūtam :attribute ir jābūt mazākam vai vienādam ar :value.',
        'file' => 'Atribūtam :attribute ir jābūt mazākam vai vienādam ar :value kilobaitiem.',
        'string' => ':attribute ir jābūt mazākam vai vienādam ar :value rakstzīmēm.',
        'array' => 'Atribūtā :attribute nedrīkst būt vairāk par :value vienumiem.',
    ],
    'max' => [
        'numeric' => 'Atribūts :attribute nedrīkst būt lielāks par :max.',
        'file' => ':attribute nedrīkst būt lielāks par :max kilobaiti.',
        'string' => ':attribute nedrīkst būt lielāks par :max rakstzīmēm.',
        'array' => 'Atribūtā :attribute nedrīkst būt vairāk par :max vienumiem.',
    ],
    'mimes' => 'Atribūtam :attribute ir jābūt šāda veida failam: :values.',
    'mimetypes' => 'Atribūtam :attribute ir jābūt šāda veida failam: :values.',
    'min' => [
        'numeric' => 'Atribūtam :attribute ir jābūt vismaz :min.',
        'file' => 'Atribūtam :attribute ir jābūt vismaz :min kilobaitiem.',
        'string' => 'Atribūtam :attribute ir jābūt vismaz :min rakstzīmēm.',
        'array' => 'Atribūtā :attribute ir jābūt vismaz :min vienumiem.',
    ],
    'not_in' => 'Atlasītais :attribute nav derīgs.',
    'not_regex' => ':attribute formāts nav derīgs.',
    'numeric' => 'Atribūtam :attribute ir jābūt skaitlim.',
    'present' => 'Jābūt laukam :attribute.',
    'regex' => ':attribute formāts nav derīgs.',
    'required' => 'Lauks :attribute ir jāaizpilda obligāti.',
    'required_if' => 'Lauks :attribute ir nepieciešams, ja :other ir :value.',
    'required_unless' => 'Lauks :attribute ir obligāts, ja vien :other nav :values.',
    'required_with' => 'Lauks :attribute ir nepieciešams, ja ir :values.',
    'required_with_all' => 'Lauks :attribute ir nepieciešams, ja ir :values.',
    'required_without' => 'Lauks :attribute ir nepieciešams, ja :values nav.',
    'required_without_all' => 'Lauks :attribute ir nepieciešams, ja nav neviena no :values.',
    'same' => ':attribute un :other ir jāsakrīt.',
    'size' => [
        'numeric' => ':attribute ir jābūt :size.',
        'file' => ':attribute ir jābūt :size kilobaitiem.',
        'string' => ':attribute ir jābūt :size rakstzīmēm.',
        'array' => 'Atribūtā :attribute ir jāsatur :size vienumi.',
    ],
    'string' => 'Atribūtam :attribute ir jābūt virknei.',
    'timezone' => 'Atribūtam :attribute ir jābūt derīgai zonai.',
    'unique' => ':attribute jau ir izmantots.',
    'uploaded' => 'Atribūtu :attribute neizdevās augšupielādēt.',
    'url' => ':attribute formāts nav derīgs.',

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
            'rule-name' => 'pielāgots ziņojums',
        ],
        'g-recaptcha-response' => [
            'required' => 'Lūdzu, pārbaudiet, vai neesat robots.',
            'captcha' => 'Captcha kļūda! vēlāk mēģiniet vēlreiz vai sazinieties ar vietnes administratoru.',
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



    'accepted_if' => 'Lauks :attribute ir jāpieņem, ja :other ir :value.',
    'ascii' => 'Laukā :attribute drīkst būt tikai viena baita burtciparu rakstzīmes un simboli.',
    'can' => 'Laukā :attribute ir neatļauta vērtība.',
    'contains' => 'Laukā :attribute trūkst obligātās vērtības.',
    'current_password' => 'Parole ir nepareiza.',
    'date_equals' => 'Laukam :attribute ir jābūt datumam, kas vienāds ar :date.',
    'decimal' => 'Laukā :attribute jābūt :decimal decimālzīmēm.',
    'declined' => 'Lauks :attribute ir jānoraida.',
    'declined_if' => 'Lauks :attribute ir jānoraida, ja :other ir :value.',
    'doesnt_end_with' => 'Lauks :attribute nedrīkst beigties ar vienu no šiem: :values.',
    'doesnt_start_with' => 'Lauks :attribute nedrīkst sākties ar vienu no šiem: :values.',
    'ends_with' => 'Laukam :attribute jābeidzas ar vienu no šiem: :values.',
    'enum' => 'Atlasītais :attribute nav derīgs.',
    'extensions' => 'Laukam :attribute ir jābūt vienam no šiem paplašinājumiem: :values.',
    'hex_color' => 'Laukam :attribute ir jābūt derīgai heksadecimālajai krāsai.',
    'list' => 'Laukam :attribute ir jābūt sarakstam.',
    'lowercase' => 'Laukam :attribute jābūt ar mazajiem burtiem.',
    'mac_address' => 'Laukam :attribute ir jābūt derīgai MAC adresei.',
    'max_digits' => 'Laukā :attribute nedrīkst būt vairāk par :max cipariem.',
    'min_digits' => 'Laukā :attribute jābūt vismaz :min cipariem.',
    'missing' => 'Jātrūkst laukam :attribute.',
    'missing_if' => 'Laukam :attribute ir jābūt iztrūkstošam, ja :other ir :value.',
    'missing_unless' => 'Laukam :attribute ir jātrūkst, ja vien :other nav :value.',
    'missing_with' => 'Laukam :attribute ir jābūt iztrūkstošam, ja ir :values.',
    'missing_with_all' => 'Ja ir :vērtības, laukam :attribute ir jābūt iztrūkstošam.',
    'multiple_of' => 'Laukam :attribute ir jābūt :value daudzkārtnim.',
    'password' => [
        'letters' => 'Laukā :attribute ir jāsatur vismaz viens burts.',
        'mixed' => 'Laukā :attribute ir jābūt vismaz vienam lielajam un vienam mazajam burtam.',
        'numbers' => 'Laukā :attribute ir jābūt vismaz vienam skaitlim.',
        'symbols' => 'Laukā :attribute ir jābūt vismaz vienam simbolam.',
        'uncompromised' => 'Dotais :attribute ir parādījies datu noplūdē. Lūdzu, izvēlieties citu :attribute.',
    ],
    'present_if' => 'Laukam :attribute ir jābūt, ja :other ir :value.',
    'present_unless' => 'Laukam :attribute ir jābūt, ja vien :other nav :value.',
    'present_with' => 'Laukam :attribute ir jābūt klāt, ja ir :values.',
    'present_with_all' => 'Laukam :attribute ir jābūt klāt, ja ir :vērtības.',
    'prohibited' => 'Lauks :attribute ir aizliegts.',
    'prohibited_if' => 'Lauks :attribute ir aizliegts, ja :other ir :value.',
    'prohibited_unless' => 'Lauks :attribute ir aizliegts, ja vien :other nav :values.',
    'prohibits' => 'Lauks :attribute neļauj :other atrasties.',
    'required_array_keys' => 'Laukā :attribute ir jābūt ierakstiem: :values.',
    'required_if_accepted' => 'Lauks :attribute ir obligāts, ja tiek pieņemts :other.',
    'required_if_declined' => 'Lauks :attribute ir nepieciešams, ja :other ir noraidīts.',
    'starts_with' => 'Laukam :attribute jāsākas ar vienu no šiem: :values.',
    'uppercase' => 'Laukam :attribute jābūt ar lielajiem burtiem.',
    'ulid' => 'Laukam :attribute ir jābūt derīgam ULID.',
    'uuid' => 'Laukam :attribute ir jābūt derīgam UUID.',
];
