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

    'accepted' => ':attribute on hyväksyttävä.',
    'active_url' => ':attribute ei ole kelvollinen URL-osoite.',
    'after' => ':attribute on oltava :date jälkeinen päivämäärä.',
    'after_or_equal' => ':attribute on oltava :date jälkeen tai yhtä suuri kuin päivämäärä.',
    'alpha' => ':attribute voi sisältää vain kirjaimia.',
    'alpha_dash' => ':attribute voi sisältää vain kirjaimia, numeroita ja väliviivoja.',
    'alpha_num' => ':attribute voi sisältää vain kirjaimia ja numeroita.',
    'array' => ':attribute on oltava taulukko.',
    'before' => ':attribute on oltava päivämäärä ennen :date.',
    'before_or_equal' => ':attribute on oltava päivämäärä, joka on ennen tai yhtä suuri kuin :date.',
    'between' => [
        'numeric' => ':attribute on oltava välillä :min ja :max.',
        'file' => ':attribute on oltava välillä :min ja :max kilotavua.',
        'string' => ':attribute on oltava välillä :min ja :max merkkiä.',
        'array' => ':attribute on oltava :min - :max kohteita.',
    ],
    'boolean' => ':attribute-kentän on oltava tosi tai epätosi.',
    'confirmed' => ':attribute-vahvistus ei täsmää.',
    'date' => ':attribute ei ole kelvollinen päivämäärä.',
    'date_format' => ':attribute ei vastaa muotoa :format.',
    'different' => 'Attribuuttien :attribute ja :other on oltava erilaisia.',
    'digits' => ':attribute on oltava :digits-numeroa.',
    'digits_between' => ':attribute on oltava :min ja :max-numeroiden välillä.',
    'dimensions' => ':attribute on virheellinen kuvan mitat.',
    'distinct' => ':attribute-kentässä on päällekkäinen arvo.',
    'email' => 'Attribuutin :attribute on oltava kelvollinen sähköpostiosoite.',
    'exists' => 'Valittu :attribute on virheellinen.',
    'file' => ':attribute on oltava tiedosto.',
    'filled' => ':attribute-kentällä on oltava arvo.',
    'gt' => [
        'numeric' => ':attribute on oltava suurempi kuin :value.',
        'file' => ':attribute on oltava suurempi kuin :value kilotavua.',
        'string' => ':attribute on oltava suurempi kuin :value merkkiä.',
        'array' => ':attribute on oltava enemmän kuin :value tuotteita.',
    ],
    'gte' => [
        'numeric' => ':attribute on oltava suurempi tai yhtä suuri kuin :value.',
        'file' => ':attribute on oltava suurempi tai yhtä suuri kuin :value kilotavua.',
        'string' => ':attribute on oltava suurempi tai yhtä suuri kuin :value-merkki.',
        'array' => ':attribute on oltava :value-tuotteita tai enemmän.',
    ],
    'image' => ':attribute on oltava kuva.',
    'in' => 'Valittu :attribute on virheellinen.',
    'in_array' => ':attribute-kenttää ei ole :other-kentässä.',
    'integer' => ':attribute on oltava kokonaisluku.',
    'ip' => ':attribute on oltava kelvollinen IP-osoite.',
    'ipv4' => ':attribute on oltava kelvollinen IPv4-osoite.',
    'ipv6' => ':attribute on oltava kelvollinen IPv6-osoite.',
    'json' => ':attribute on oltava kelvollinen JSON-merkkijono.',
    'lt' => [
        'numeric' => ':attribute on oltava pienempi kuin :value.',
        'file' => ':attribute on oltava pienempi kuin :value kilotavua.',
        'string' => ':attribute on oltava pienempi kuin :value merkkiä.',
        'array' => ':attribute on oltava vähemmän kuin :value tuotteita.',
    ],
    'lte' => [
        'numeric' => ':attribute on oltava pienempi tai yhtä suuri kuin :value.',
        'file' => ':attribute on oltava pienempi tai yhtä suuri kuin :value kilotavua.',
        'string' => ':attribute on oltava pienempi tai yhtä suuri kuin :value-merkki.',
        'array' => ':attribute ei saa sisältää enempää kuin :value alkioita.',
    ],
    'max' => [
        'numeric' => ':attribute ei saa olla suurempi kuin :max.',
        'file' => ':attribute ei saa olla suurempi kuin :max kilotavua.',
        'string' => ':attribute ei saa olla suurempi kuin :max merkkiä.',
        'array' => ':attribute voi sisältää enintään :max kohteita.',
    ],
    'mimes' => ':attribute on oltava tiedostotyyppiä: :values.',
    'mimetypes' => ':attribute on oltava tiedostotyyppiä: :values.',
    'min' => [
        'numeric' => ':attribute on oltava vähintään :min.',
        'file' => ':attribute on oltava vähintään :min kilotavua.',
        'string' => ':attribute on oltava vähintään :min-merkkiä.',
        'array' => ':attribute on oltava vähintään :min tuotteita.',
    ],
    'not_in' => 'Valittu :attribute on virheellinen.',
    'not_regex' => ':attribute-muoto on virheellinen.',
    'numeric' => ':attribute on oltava numero.',
    'present' => ':attribute-kentän on oltava läsnä.',
    'regex' => ':attribute-muoto on virheellinen.',
    'required' => ':attribute-kenttä on pakollinen.',
    'required_if' => ':attribute-kenttä on pakollinen, kun :other on :value.',
    'required_unless' => ':attribute-kenttä on pakollinen, ellei :other ole kohdassa :values.',
    'required_with' => ':attribute-kenttä on pakollinen, kun :values on läsnä.',
    'required_with_all' => ':attribute-kenttä on pakollinen, kun :values on läsnä.',
    'required_without' => ':attribute-kenttä on pakollinen, kun :values ei ole läsnä.',
    'required_without_all' => ':attribute-kenttä vaaditaan, kun mitään :values ei ole.',
    'same' => 'Attribuuttien :attribute ja :other on oltava samat.',
    'size' => [
        'numeric' => ':attribute on oltava :size.',
        'file' => ':attribute on oltava :size kilotavua.',
        'string' => ':attribute on oltava :size-merkkiä.',
        'array' => ':attribute on sisällettävä :size-tuotteita.',
    ],
    'string' => ':attribute on oltava merkkijono.',
    'timezone' => ':attribute on oltava kelvollinen vyöhyke.',
    'unique' => ':attribute on jo varattu.',
    'uploaded' => 'Attribuutin :attribute lataus epäonnistui.',
    'url' => ':attribute-muoto on virheellinen.',

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
            'rule-name' => 'mukautettu viesti',
        ],
        'g-recaptcha-response' => [
            'required' => 'Varmista, että et ole robotti.',
            'captcha' => 'Captcha-virhe! yritä myöhemmin uudelleen tai ota yhteyttä sivuston ylläpitäjään.',
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



    'accepted_if' => ':attribute-kenttä on hyväksyttävä, kun :other on :arvo.',
    'ascii' => ':attribute-kenttä saa sisältää vain yksitavuisia aakkosnumeerisia merkkejä ja symboleja.',
    'can' => ':attribute-kenttä sisältää luvattoman arvon.',
    'contains' => ':attribute-kentästä puuttuu pakollinen arvo.',
    'current_password' => 'Salasana on väärä.',
    'date_equals' => ':attribute-kentän on oltava päivämäärä, joka on yhtä suuri kuin :date.',
    'decimal' => ':attribute-kentässä on oltava :decimal desimaalit.',
    'declined' => ':attribute-kenttä on hylättävä.',
    'declined_if' => ':attribute-kenttä on hylättävä, kun :other on :value.',
    'doesnt_end_with' => ':attribute-kenttä ei saa päättyä johonkin seuraavista: :values.',
    'doesnt_start_with' => ':attribute-kenttä ei saa alkaa jollakin seuraavista: :values.',
    'ends_with' => ':attribute-kentän tulee päättyä johonkin seuraavista: :values.',
    'enum' => 'Valittu :attribute on virheellinen.',
    'extensions' => ':attribute-kentässä on oltava jokin seuraavista laajennuksista: :values.',
    'hex_color' => ':attribute-kentän on oltava kelvollinen heksadesimaaliväri.',
    'list' => ':attribute-kentän on oltava luettelo.',
    'lowercase' => ':attribute-kentän on oltava pienillä kirjaimilla.',
    'mac_address' => ':attribute-kentän on oltava kelvollinen MAC-osoite.',
    'max_digits' => ':attribute-kentässä saa olla enintään :max numeroa.',
    'min_digits' => ':attribute-kentässä on oltava vähintään :min numeroita.',
    'missing' => ':attribute-kentän täytyy puuttua.',
    'missing_if' => ':attribute-kentän tulee puuttua, kun :other on :value.',
    'missing_unless' => ':attribute-kentän tulee puuttua, ellei :other ole :value.',
    'missing_with' => ':attribute-kentän tulee puuttua, kun :values on läsnä.',
    'missing_with_all' => ':attribute-kentän tulee puuttua, kun :arvot ovat läsnä.',
    'multiple_of' => ':attribute-kentän on oltava arvon :value kerrannainen.',
    'password' => [
        'letters' => ':attribute-kentässä on oltava vähintään yksi kirjain.',
        'mixed' => ':attribute-kentässä on oltava vähintään yksi iso ja yksi pieni kirjain.',
        'numbers' => ':attribute-kentässä on oltava vähintään yksi numero.',
        'symbols' => ':attribute-kentässä on oltava vähintään yksi symboli.',
        'uncompromised' => 'Annettu :attribute on ilmestynyt tietovuotoon. Valitse toinen :attribute.',
    ],
    'present_if' => ':attribute-kentän on oltava läsnä, kun :other on :arvo.',
    'present_unless' => ':attribute-kentän on oltava läsnä, ellei :other ole :arvo.',
    'present_with' => ':attribute-kentän on oltava läsnä, kun :values on läsnä.',
    'present_with_all' => ':attribute-kentän on oltava läsnä, kun :arvot ovat läsnä.',
    'prohibited' => ':attribute-kenttä on kielletty.',
    'prohibited_if' => ':attribute-kenttä on kielletty, kun :other on :value.',
    'prohibited_unless' => ':attribute-kenttä on kielletty, ellei :other ole :valuesissa.',
    'prohibits' => ':attribute-kenttä estää :otherin läsnäolon.',
    'required_array_keys' => ':attribute-kentässä on oltava merkinnät: :values.',
    'required_if_accepted' => ':attribute-kenttä on pakollinen, kun :other on hyväksytty.',
    'required_if_declined' => ':attribute-kenttä on pakollinen, kun :other hylätään.',
    'starts_with' => ':attribute-kentän tulee alkaa jollakin seuraavista: :values.',
    'uppercase' => ':attribute-kentän on oltava isoja kirjaimia.',
    'ulid' => ':attribute-kentän on oltava kelvollinen ULID.',
    'uuid' => ':attribute-kentän on oltava kelvollinen UUID.',
];
