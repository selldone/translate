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

    'accepted' => ':attribute පිළිගත යුතුය.',
    'active_url' => ':attribute වලංගු URL එකක් නොවේ.',
    'after' => ':attribute එක :date පසු දිනයක් විය යුතුය.',
    'after_or_equal' => ':attribute එක පසු දිනයක් හෝ :date ට සමාන විය යුතුය.',
    'alpha' => ':attribute හි අඩංගු විය හැක්කේ අකුරු පමණි.',
    'alpha_dash' => ':attribute හි අඩංගු විය හැක්කේ අකුරු, ඉලක්කම් සහ ඉරි පමණි.',
    'alpha_num' => ':attribute හි අඩංගු විය හැක්කේ අකුරු සහ ඉලක්කම් පමණි.',
    'array' => ':attribute අරාවක් විය යුතුය.',
    'before' => ':attribute එක :date ට පෙර දිනයක් විය යුතුය.',
    'before_or_equal' => ':attribute එක :date ට පෙර හෝ සමාන දිනයක් විය යුතුය.',
    'between' => [
        'numeric' => ':attribute එක :min සහ :max අතර විය යුතුය.',
        'file' => ':attribute එක :min සහ :max kilobytes අතර විය යුතුය.',
        'string' => ':attribute එක :min සහ :max අක්ෂර අතර විය යුතුය.',
        'array' => ':attribute එකට :min සහ :max අයිතම අතර තිබිය යුතුය.',
    ],
    'boolean' => ':attribute ක්ෂේත්‍රය සත්‍ය හෝ අසත්‍ය විය යුතුය.',
    'confirmed' => ':attribute තහවුරු කිරීම නොගැලපේ.',
    'date' => ':attribute වලංගු දිනයක් නොවේ.',
    'date_format' => ':attribute ආකෘතිය :format එකට නොගැලපේ.',
    'different' => ':attribute සහ :other වෙනස් විය යුතුය.',
    'digits' => ':attribute එක :digits digits විය යුතුය.',
    'digits_between' => ':attribute එක :min සහ :max ඉලක්කම් අතර විය යුතුය.',
    'dimensions' => ':attribute හි වලංගු නොවන රූප මානයන් ඇත.',
    'distinct' => ':attribute ක්ෂේත්‍රයට අනුපිටපත් අගයක් ඇත.',
    'email' => ':attribute වලංගු ඊමේල් ලිපිනයක් විය යුතුය.',
    'exists' => 'තෝරාගත් :attribute වලංගු නොවේ.',
    'file' => ':attribute ගොනුවක් විය යුතුය.',
    'filled' => ':attribute ක්ෂේත්‍රයට අගයක් තිබිය යුතුය.',
    'gt' => [
        'numeric' => ':attribute එක :value ට වඩා වැඩි විය යුතුය.',
        'file' => ':attribute :value කිලෝබයිට් වලට වඩා වැඩි විය යුතුය.',
        'string' => ':attribute එක :value characters වලට වඩා වැඩි විය යුතුය.',
        'array' => ':attribute හි :value අයිතමවලට වඩා තිබිය යුතුය.',
    ],
    'gte' => [
        'numeric' => ':attribute :value ට වඩා වැඩි හෝ සමාන විය යුතුය.',
        'file' => ':attribute කිලෝබයිට් :value ට වඩා වැඩි හෝ සමාන විය යුතුය.',
        'string' => ':attribute එක :value characters වලට වඩා වැඩි හෝ සමාන විය යුතුය.',
        'array' => ':attribute හි තිබිය යුතුයි :value items හෝ ඊට වඩා.',
    ],
    'image' => ':attribute රූපයක් විය යුතුය.',
    'in' => 'තෝරාගත් :attribute වලංගු නොවේ.',
    'in_array' => ':attribute ක්ෂේත්‍රය :other හි නොපවතී.',
    'integer' => ':attribute පූර්ණ සංඛ්‍යාවක් විය යුතුය.',
    'ip' => ':attribute වලංගු IP ලිපිනයක් විය යුතුය.',
    'ipv4' => ':attribute වලංගු IPv4 ලිපිනයක් විය යුතුය.',
    'ipv6' => ':attribute වලංගු IPv6 ලිපිනයක් විය යුතුය.',
    'json' => ':attribute වලංගු JSON තන්තුවක් විය යුතුය.',
    'lt' => [
        'numeric' => ':attribute එක :value ට වඩා අඩු විය යුතුය.',
        'file' => ':attribute :value කිලෝබයිට් වලට වඩා අඩු විය යුතුය.',
        'string' => ':attribute එක :value characters වලට වඩා අඩු විය යුතුය.',
        'array' => ':attribute එකේ :value අයිතම වලට වඩා අඩුවෙන් තිබිය යුතුය.',
    ],
    'lte' => [
        'numeric' => ':attribute :value ට අඩු හෝ සමාන විය යුතුය.',
        'file' => ':attribute :value කිලෝබයිට් වලට වඩා අඩු හෝ සමාන විය යුතුය.',
        'string' => ':attribute එක :value characters වලට වඩා අඩු හෝ සමාන විය යුතුය.',
        'array' => ':attribute හි :value අයිතමවලට වඩා වැඩි නොවිය යුතුය.',
    ],
    'max' => [
        'numeric' => ':attribute එක :max ට වඩා වැඩි නොවිය හැක.',
        'file' => ':attribute එක :max kilobytes ට වඩා වැඩි නොවිය හැක.',
        'string' => ':attribute එක :max අක්ෂර වලට වඩා වැඩි නොවිය හැක.',
        'array' => ':attribute හි :max අයිතම වලට වඩා වැඩි නොවිය හැක.',
    ],
    'mimes' => ':attribute: :values වර්ගයේ ගොනුවක් විය යුතුය.',
    'mimetypes' => ':attribute: :values වර්ගයේ ගොනුවක් විය යුතුය.',
    'min' => [
        'numeric' => ':attribute අවම වශයෙන් :min විය යුතුය.',
        'file' => ':attribute අවම වශයෙන් :min කිලෝබයිට් විය යුතුය.',
        'string' => ':attribute අවම වශයෙන් :min අක්ෂර විය යුතුය.',
        'array' => ':attribute හි අවම වශයෙන් :min අයිතම තිබිය යුතුය.',
    ],
    'not_in' => 'තෝරාගත් :attribute වලංගු නොවේ.',
    'not_regex' => ':attribute ආකෘතිය වලංගු නොවේ.',
    'numeric' => ':attribute අංකයක් විය යුතුය.',
    'present' => ':attribute ක්ෂේත්‍රය තිබිය යුතුය.',
    'regex' => ':attribute ආකෘතිය වලංගු නොවේ.',
    'required' => ':attribute ක්ෂේත්‍රය අවශ්‍යයි.',
    'required_if' => ':other :value වන විට :attribute ක්ෂේත්‍රය අවශ්‍ය වේ.',
    'required_unless' => ':attribute ක්ෂේත්‍රය අවශ්‍ය වන්නේ :other :values හි නොමැති නම් පමණි.',
    'required_with' => ':values පවතින විට :attribute ක්ෂේත්‍රය අවශ්‍ය වේ.',
    'required_with_all' => ':values පවතින විට :attribute ක්ෂේත්‍රය අවශ්‍ය වේ.',
    'required_without' => ':values නොමැති විට :attribute ක්ෂේත්‍රය අවශ්‍ය වේ.',
    'required_without_all' => ':values කිසිවක් නොමැති විට :attribute ක්ෂේත්‍රය අවශ්‍ය වේ.',
    'same' => ':attribute සහ :other අනිවාර්යයෙන්ම ගැලපේ.',
    'size' => [
        'numeric' => ':attribute එක :size විය යුතුය.',
        'file' => ':attribute :size කිලෝබයිට් විය යුතුය.',
        'string' => ':attribute එක :size අක්ෂර විය යුතුය.',
        'array' => ':attribute හි :size අයිතම අඩංගු විය යුතුය.',
    ],
    'string' => ':attribute තන්තුවක් විය යුතුය.',
    'timezone' => ':attribute වලංගු කලාපයක් විය යුතුය.',
    'unique' => ':attribute දැනටමත් ගෙන ඇත.',
    'uploaded' => ':attribute උඩුගත කිරීමට අසමත් විය.',
    'url' => ':attribute ආකෘතිය වලංගු නොවේ.',

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
            'rule-name' => 'අභිරුචි-පණිවිඩය',
        ],
        'g-recaptcha-response' => [
            'required' => 'ඔබ රොබෝ කෙනෙක් නොවන බව කරුණාකර තහවුරු කරන්න.',
            'captcha' => 'Captcha දෝෂයක්! පසුව නැවත උත්සාහ කරන්න හෝ අඩවි පරිපාලක අමතන්න.',
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



    'accepted_if' => ':attribute ක්ෂේත්‍රය පිළිගත යුත්තේ :වෙනත් විට :value වේ.',
    'ascii' => ':attribute ක්ෂේත්‍රයේ අඩංගු විය යුත්තේ තනි-බයිට් අක්ෂරාංක අක්ෂර සහ සංකේත පමණි.',
    'can' => ':attribute ක්ෂේත්‍රයේ අනවසර අගයක් අඩංගු වේ.',
    'contains' => ':attribute ක්ෂේත්‍රයට අවශ්‍ය අගයක් නොමැත.',
    'current_password' => 'මුරපදය වැරදියි.',
    'date_equals' => ':attribute ක්ෂේත්‍රය :date ට සමාන දිනයක් විය යුතුය.',
    'decimal' => ':attribute ක්ෂේත්‍රයට :දශම දශම ස්ථාන තිබිය යුතුය.',
    'declined' => ':attribute ක්ෂේත්‍රය ප්‍රතික්ෂේප කළ යුතුය.',
    'declined_if' => ':attribute ක්ෂේත්‍රය ප්‍රතික්‍ෂේප කළ යුත්තේ :other :value වේ.',
    'doesnt_end_with' => ':attribute ක්ෂේත්‍රය පහත සඳහන් එකකින් අවසන් නොවිය යුතුය: :values.',
    'doesnt_start_with' => ':attribute ක්ෂේත්‍රය පහත සඳහන් එකකින් ආරම්භ නොවිය යුතුය: :values.',
    'ends_with' => ':attribute ක්ෂේත්‍රය පහත සඳහන් එකකින් අවසන් විය යුතුය: :values.',
    'enum' => 'තෝරාගත් :attribute වලංගු නොවේ.',
    'extensions' => ':attribute ක්ෂේත්‍රයට පහත දිගු වලින් එකක් තිබිය යුතුය: :values.',
    'hex_color' => ':attribute ක්ෂේත්‍රය වලංගු ෂඩ් දශම වර්ණයක් විය යුතුය.',
    'list' => ':attribute ක්ෂේත්‍රය ලැයිස්තුවක් විය යුතුය.',
    'lowercase' => ':attribute ක්ෂේත්‍රය කුඩා අකුරු විය යුතුය.',
    'mac_address' => ':attribute ක්ෂේත්‍රය වලංගු MAC ලිපිනයක් විය යුතුය.',
    'max_digits' => ':attribute ක්ෂේත්‍රයේ :max ඉලක්කම් වලට වඩා වැඩි නොවිය යුතුය.',
    'min_digits' => ':attribute ක්ෂේත්‍රයේ අවම වශයෙන් :min ඉලක්කම් තිබිය යුතුය.',
    'missing' => ':attribute ක්ෂේත්‍රය අතුරුදහන් විය යුතුය.',
    'missing_if' => ':attribute ක්ෂේත්‍රය අස්ථානගත විය යුත්තේ :අනෙක් නම් :value වේ.',
    'missing_unless' => ':attribute ක්ෂේත්‍රය අස්ථානගත විය යුතුය :අනෙක් නම් මිස :value.',
    'missing_with' => ': අගයන් පවතින විට :attribute ක්ෂේත්‍රය අතුරුදහන් විය යුතුය.',
    'missing_with_all' => ': අගයන් පවතින විට :attribute ක්ෂේත්‍රය අතුරුදහන් විය යුතුය.',
    'multiple_of' => ':attribute ක්ෂේත්‍රය :value හි ගුණාකාරයක් විය යුතුය.',
    'password' => [
        'letters' => ':attribute ක්ෂේත්‍රයේ අවම වශයෙන් එක් අකුරක්වත් අඩංගු විය යුතුය.',
        'mixed' => ':attribute ක්ෂේත්‍රයේ අවම වශයෙන් එක් ලොකු අකුරක් සහ කුඩා අකුරක්වත් අඩංගු විය යුතුය.',
        'numbers' => ':attribute ක්ෂේත්‍රයේ අවම වශයෙන් එක් අංකයක්වත් අඩංගු විය යුතුය.',
        'symbols' => ':attribute ක්ෂේත්‍රයේ අවම වශයෙන් එක් සංකේතයක්වත් අඩංගු විය යුතුය.',
        'uncompromised' => 'ලබා දී ඇති :attribute දත්ත කාන්දුවක දිස්වී ඇත. කරුණාකර වෙනස් :attribute එකක් තෝරන්න.',
    ],
    'present_if' => ':attribute ක්ෂේත්‍රය තිබිය යුත්තේ :other :value වේ.',
    'present_unless' => ':attribute ක්ෂේත්‍රය තිබිය යුත්තේ :other :value නම් මිස.',
    'present_with' => ': අගයන් පවතින විට :attribute ක්ෂේත්‍රය තිබිය යුතුය.',
    'present_with_all' => ': අගයන් පවතින විට :attribute ක්ෂේත්‍රය තිබිය යුතුය.',
    'prohibited' => ':attribute ක්ෂේත්‍රය තහනම්.',
    'prohibited_if' => ':attribute ක්ෂේත්‍රය තහනම් වන්නේ :වෙනත් විට :value වේ.',
    'prohibited_unless' => ':attribute ක්ෂේත්‍රය :අනිත් එක :values හි නොමැති නම් තහනම් වේ.',
    'prohibits' => ':attribute ක්ෂේත්‍රය තහනම් කරයි :අනෙකුත් සිටීමෙන්.',
    'required_array_keys' => ':attribute ක්ෂේත්‍රයේ: :values සඳහා ඇතුළත් කිරීම් අඩංගු විය යුතුය.',
    'required_if_accepted' => 'වෙනත් පිළිගත් විට :attribute ක්ෂේත්‍රය අවශ්‍ය වේ.',
    'required_if_declined' => ':attribute ක්ෂේත්‍රය අවශ්‍ය වන්නේ :other ප්‍රතික්ෂේප කළ විටය.',
    'starts_with' => ':attribute ක්ෂේත්‍රය පහත සඳහන් එකකින් ආරම්භ විය යුතුය: :values.',
    'uppercase' => ':attribute ක්ෂේත්‍රය ලොකු අකුරු විය යුතුය.',
    'ulid' => ':attribute ක්ෂේත්‍රය වලංගු ULID එකක් විය යුතුය.',
    'uuid' => ':attribute ක්ෂේත්‍රය වලංගු UUID එකක් විය යුතුය.',
];
