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

    'accepted' => '必须接受 :attribute。',
    'active_url' => ':attribute 不是有效的 URL。',
    'after' => ':attribute 必须是 :date 之后的日期。',
    'after_or_equal' => ':attribute 必须是晚于或等于 :date 的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、数字和破折号。',
    'alpha_num' => ':attribute 只能包含字母和数字。',
    'array' => ':attribute 必须是一个数组。',
    'before' => ':attribute 必须是 :date 之前的日期。',
    'before_or_equal' => ':attribute 必须是早于或等于 :date 的日期。',
    'between' => [
        'numeric' => ':attribute 必须介于 :min 和 :max 之间。',
        'file' => ':attribute 必须介于 :min 和 :max 千字节之间。',
        'string' => ':attribute 必须介于 :min 和 :max 字符之间。',
        'array' => ':attribute 必须介于 :min 和 :max 项之间。',
    ],
    'boolean' => ':attribute 字段必须为真或假。',
    'confirmed' => ':attribute 确认不匹配。',
    'date' => ':attribute 不是有效日期。',
    'date_format' => ':attribute 与格式 :format 不匹配。',
    'different' => ':attribute 和 :other 必须不同。',
    'digits' => ':attribute 必须是 :digits 数字。',
    'digits_between' => ':attribute 必须介于 :min 和 :max 数字之间。',
    'dimensions' => ':attribute 具有无效的图像尺寸。',
    'distinct' => ':attribute 字段具有重复值。',
    'email' => ':attribute 必须是有效的电子邮件地址。',
    'exists' => '选择的:attribute无效。',
    'file' => ':attribute 必须是一个文件。',
    'filled' => ':attribute 字段必须有一个值。',
    'gt' => [
        'numeric' => ':attribute 必须大于 :value。',
        'file' => ':attribute 必须大于 :value 千字节。',
        'string' => ':attribute 必须大于 :value 字符。',
        'array' => ':attribute 必须有多个 :value 项。',
    ],
    'gte' => [
        'numeric' => ':attribute 必须大于或等于 :value。',
        'file' => ':attribute 必须大于或等于 :value 千字节。',
        'string' => ':attribute 必须大于或等于 :value 字符。',
        'array' => ':attribute 必须有 :value 项或更多项。',
    ],
    'image' => ':attribute 必须是图像。',
    'in' => '选择的:attribute无效。',
    'in_array' => ':other 中不存在 :attribute 字段。',
    'integer' => ':attribute 必须是整数。',
    'ip' => ':attribute 必须是有效的 IP 地址。',
    'ipv4' => ':attribute 必须是有效的 IPv4 地址。',
    'ipv6' => ':attribute 必须是有效的 IPv6 地址。',
    'json' => ':attribute 必须是有效的 JSON 字符串。',
    'lt' => [
        'numeric' => ':attribute 必须小于 :value。',
        'file' => ':attribute 必须小于 :value 千字节。',
        'string' => ':attribute 必须小于 :value 字符。',
        'array' => ':attribute 必须少于 :value 项。',
    ],
    'lte' => [
        'numeric' => ':attribute 必须小于或等于 :value。',
        'file' => ':attribute 必须小于或等于 :value 千字节。',
        'string' => ':attribute 必须小于或等于 :value 字符。',
        'array' => ':attribute 不能有超过 :value 项。',
    ],
    'max' => [
        'numeric' => ':attribute 不能大于:max。',
        'file' => ':attribute 不能大于 :max 千字节。',
        'string' => ':attribute 不能大于 :max 个字符。',
        'array' => ':attribute 不能有超过 :max 项。',
    ],
    'mimes' => ':attribute 必须是类型为: :values 的文件。',
    'mimetypes' => ':attribute 必须是类型为: :values 的文件。',
    'min' => [
        'numeric' => ':attribute 必须至少为 :min。',
        'file' => ':attribute 必须至少为 :min 千字节。',
        'string' => ':attribute 必须至少为 :min 个字符。',
        'array' => ':attribute 必须至少有 :min 项。',
    ],
    'not_in' => '选择的:attribute无效。',
    'not_regex' => ':attribute 格式无效。',
    'numeric' => ':attribute 必须是一个数字。',
    'present' => ':attribute 字段必须存在。',
    'regex' => ':attribute 格式无效。',
    'required' => ':attribute 字段是必需的。',
    'required_if' => '当 :other 是 :value 时需要 :attribute 字段。',
    'required_unless' => ':attribute 字段是必需的，除非 :other 在 :values 中。',
    'required_with' => '存在 :values 时需要 :attribute 字段。',
    'required_with_all' => '存在 :values 时需要 :attribute 字段。',
    'required_without' => '当 :values 不存在时，需要 :attribute 字段。',
    'required_without_all' => '当 :values 不存在时，需要填写 :attribute 字段。',
    'same' => ':attribute 和 :other 必须匹配。',
    'size' => [
        'numeric' => ':attribute 必须是 :size。',
        'file' => ':attribute 必须是 :size 千字节。',
        'string' => ':attribute 必须是 :size 字符。',
        'array' => ':attribute 必须包含 :size 项。',
    ],
    'string' => ':attribute 必须是字符串。',
    'timezone' => ':attribute 必须是有效区域。',
    'unique' => ':attribute 已被占用。',
    'uploaded' => ':attribute 上传失败。',
    'url' => ':attribute 格式无效。',

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
            'rule-name' => '自定义消息',
        ],
        'g-recaptcha-response' => [
            'required' => '请确认您不是机器人。',
            'captcha' => '验证码错误！请稍后再试或联系网站管理员。',
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



    'accepted_if' => '当 :other 为 :value 时，必须接受 :attribute 字段。',
    'ascii' => ':attribute 字段必须只包含单字节字母数字字符和符号。',
    'can' => ':attribute 字段包含未经授权的值。',
    'contains' => ':attribute 字段缺少必需值。',
    'current_password' => '密码不正确。',
    'date_equals' => ':attribute 字段必须是等于 :date 的日期。',
    'decimal' => ':attribute 字段必须有 :decimal 小数位。',
    'declined' => ':attribute 字段必须被拒绝。',
    'declined_if' => '当 :other 为 :value 时，必须拒绝 :attribute 字段。',
    'doesnt_end_with' => ':attribute 字段不能以下列之一结尾：:values。',
    'doesnt_start_with' => ':attribute 字段不能以下列之一开头：:values。',
    'ends_with' => ':attribute 字段必须以下列之一结尾：:values。',
    'enum' => '选择的 : 属性无效。',
    'extensions' => ':attribute 字段必须具有以下扩展之一：:values。',
    'hex_color' => ':attribute 字段必须是有效的十六进制颜色。',
    'list' => ':attribute 字段必须是一个列表。',
    'lowercase' => ':attribute 字段必须是小写的。',
    'mac_address' => ':attribute 字段必须是有效的 MAC 地址。',
    'max_digits' => ':attribute 字段不得超过 :max 位数字。',
    'min_digits' => ':attribute 字段必须至少有 :min 位数字。',
    'missing' => ':attribute 字段一定缺失。',
    'missing_if' => '当 :other 为 :value 时，:attribute 字段一定缺失。',
    'missing_unless' => ':attribute 字段必须缺失，除非 :other 是 :value。',
    'missing_with' => '当 :values 存在时，:attribute 字段一定缺失。',
    'missing_with_all' => '当 :values 存在时，:attribute 字段一定缺失。',
    'multiple_of' => ':attribute 字段必须是 :value 的倍数。',
    'password' => [
        'letters' => ':attribute 字段必须至少包含一个字母。',
        'mixed' => ':attribute 字段必须至少包含一个大写字母和一个小写字母。',
        'numbers' => ':attribute 字段必须至少包含一个数字。',
        'symbols' => ':attribute 字段必须至少包含一个符号。',
        'uncompromised' => '给定的 :attribute 已出现数据泄露。请选择其他 :attribute。',
    ],
    'present_if' => '当 :other 为 :value 时，:attribute 字段必须存在。',
    'present_unless' => ':attribute 字段必须存在，除非 :other 是 :value。',
    'present_with' => '当 :values 存在时，:attribute 字段必须存在。',
    'present_with_all' => '当 :values 存在时，:attribute 字段必须存在。',
    'prohibited' => ':attribute 字段是被禁止的。',
    'prohibited_if' => '当 :other 为 :value 时，:attribute 字段是被禁止的。',
    'prohibited_unless' => '除非 :other 在 :values 中，否则 :attribute 字段是被禁止的。',
    'prohibits' => ':attribute 字段禁止 :other 存在。',
    'required_array_keys' => ':attribute 字段必须包含以下条目：:values。',
    'required_if_accepted' => '当接受 :other 时，:attribute 字段是必需的。',
    'required_if_declined' => '当 :other 被拒绝时 :attribute 字段是必需的。',
    'starts_with' => ':attribute 字段必须以下列之一开头：:values。',
    'uppercase' => ':attribute 字段必须是大写。',
    'ulid' => ':attribute 字段必须是有效的 ULID。',
    'uuid' => ':attribute 字段必须是有效的 UUID。',
];
