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

    'accepted' => 'ต้องยอมรับ :attribute',
    'active_url' => ':attribute ไม่ใช่ URL ที่ถูกต้อง',
    'after' => ':attribute ต้องเป็นวันที่หลัง :date',
    'after_or_equal' => ':attribute ต้องเป็นวันที่หลังหรือเท่ากับ :date',
    'alpha' => ':attribute ต้องประกอบด้วยตัวอักษรเท่านั้น',
    'alpha_dash' => ':attribute ต้องประกอบด้วยตัวอักษร ตัวเลข และขีดกลางเท่านั้น',
    'alpha_num' => ':attribute มีได้เฉพาะตัวอักษรและตัวเลขเท่านั้น',
    'array' => ':attribute ต้องเป็นอาร์เรย์',
    'before' => ':attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal' => ':attribute ต้องเป็นวันที่ก่อนหรือเท่ากับ :date',
    'between' => [
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min และ :max',
        'file' => ':attribute ต้องอยู่ระหว่าง :min และ :max กิโลไบต์',
        'string' => ':attribute ต้องอยู่ระหว่าง :min และ :max อักขระ',
        'array' => ':attribute ต้องมีรายการระหว่าง :min และ :max',
    ],
    'boolean' => 'ฟิลด์ :attribute จะต้องเป็นจริงหรือเท็จ',
    'confirmed' => 'การยืนยัน :attribute ไม่ตรงกัน',
    'date' => ':attribute ไม่ใช่วันที่ที่ถูกต้อง',
    'date_format' => ':attribute ไม่ตรงกับรูปแบบ :format',
    'different' => ':attribute และ :other ต้องแตกต่างกัน',
    'digits' => ':attribute ต้องเป็น :digits หลัก',
    'digits_between' => ':attribute ต้องอยู่ระหว่าง :min ถึง :max หลัก',
    'dimensions' => ':attribute มีขนาดภาพที่ไม่ถูกต้อง',
    'distinct' => 'ฟิลด์ :attribute มีค่าที่ซ้ำกัน',
    'email' => ':attribute ต้องเป็นที่อยู่อีเมลที่ถูกต้อง',
    'exists' => ':attribute ที่เลือกไม่ถูกต้อง',
    'file' => ':attribute ต้องเป็นไฟล์',
    'filled' => 'ฟิลด์ :attribute ต้องมีค่า',
    'gt' => [
        'numeric' => ':attribute ต้องมากกว่า :value',
        'file' => ':attribute ต้องมากกว่า :value กิโลไบต์',
        'string' => ':attribute ต้องมากกว่า :value อักขระ',
        'array' => ':attribute ต้องมีมากกว่า :value รายการ',
    ],
    'gte' => [
        'numeric' => ':attribute ต้องมากกว่าหรือเท่ากับ :value',
        'file' => ':attribute ต้องมากกว่าหรือเท่ากับ :value กิโลไบต์',
        'string' => ':attribute ต้องมากกว่าหรือเท่ากับ :value อักขระ',
        'array' => ':attribute ต้องมีรายการ :value ขึ้นไป',
    ],
    'image' => ':attribute ต้องเป็นรูปภาพ',
    'in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'in_array' => 'ฟิลด์ :attribute ไม่มีอยู่ใน :other',
    'integer' => ':attribute ต้องเป็นจำนวนเต็ม',
    'ip' => ':attribute ต้องเป็นที่อยู่ IP ที่ถูกต้อง',
    'ipv4' => ':attribute ต้องเป็นที่อยู่ IPv4 ที่ถูกต้อง',
    'ipv6' => ':attribute ต้องเป็นที่อยู่ IPv6 ที่ถูกต้อง',
    'json' => ':attribute ต้องเป็นสตริง JSON ที่ถูกต้อง',
    'lt' => [
        'numeric' => ':attribute ต้องน้อยกว่า :value',
        'file' => ':attribute ต้องน้อยกว่า :value กิโลไบต์',
        'string' => ':attribute ต้องน้อยกว่า :value อักขระ',
        'array' => ':attribute ต้องมีรายการน้อยกว่า :value',
    ],
    'lte' => [
        'numeric' => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value',
        'file' => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value กิโลไบต์',
        'string' => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value อักขระ',
        'array' => ':attribute ต้องไม่เกิน :value รายการ',
    ],
    'max' => [
        'numeric' => ':attribute ต้องไม่เกิน :max',
        'file' => ':attribute ต้องไม่เกิน :max กิโลไบต์',
        'string' => ':attribute ต้องไม่เกิน :max อักขระ',
        'array' => ':attribute ไม่สามารถมีมากกว่า :max รายการ',
    ],
    'mimes' => ':attribute ต้องเป็นไฟล์ประเภท: :values',
    'mimetypes' => ':attribute ต้องเป็นไฟล์ประเภท: :values',
    'min' => [
        'numeric' => ':attribute ต้องมีอย่างน้อย :min',
        'file' => ':attribute ต้องมีอย่างน้อย :min กิโลไบต์',
        'string' => ':attribute ต้องมีอักขระอย่างน้อย :min',
        'array' => ':attribute ต้องมีอย่างน้อย :min รายการ',
    ],
    'not_in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'not_regex' => 'รูปแบบ :attribute ไม่ถูกต้อง',
    'numeric' => ':attribute ต้องเป็นตัวเลข',
    'present' => 'ต้องมีฟิลด์ :attribute',
    'regex' => 'รูปแบบ :attribute ไม่ถูกต้อง',
    'required' => 'ต้องระบุฟิลด์ :attribute',
    'required_if' => 'ฟิลด์ :attribute จำเป็นเมื่อ :other คือ :value',
    'required_unless' => 'ต้องระบุฟิลด์ :attribute เว้นแต่ :other อยู่ใน :values',
    'required_with' => 'ฟิลด์ :attribute จำเป็นเมื่อมี :values',
    'required_with_all' => 'ฟิลด์ :attribute จำเป็นเมื่อมี :values',
    'required_without' => 'ต้องระบุฟิลด์ :attribute เมื่อไม่มี :values',
    'required_without_all' => 'ฟิลด์ :attribute จำเป็นเมื่อไม่มี :values อยู่',
    'same' => ':attribute และ :other ต้องตรงกัน',
    'size' => [
        'numeric' => ':attribute ต้องเป็น :size',
        'file' => ':attribute ต้องเป็น :size กิโลไบต์',
        'string' => ':attribute ต้องเป็น :size อักขระ',
        'array' => ':attribute ต้องมี :size รายการ',
    ],
    'string' => ':attribute ต้องเป็นสตริง',
    'timezone' => ':attribute ต้องเป็นโซนที่ถูกต้อง',
    'unique' => ':attribute ถูกนำไปใช้แล้ว',
    'uploaded' => ':attribute ล้มเหลวในการอัปโหลด',
    'url' => 'รูปแบบ :attribute ไม่ถูกต้อง',

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
            'rule-name' => 'ข้อความที่กำหนดเอง',
        ],
        'g-recaptcha-response' => [
            'required' => 'โปรดตรวจสอบว่าคุณไม่ใช่หุ่นยนต์',
            'captcha' => 'แคปช่าผิดพลาด! ลองอีกครั้งในภายหลังหรือติดต่อผู้ดูแลไซต์',
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



    'accepted_if' => 'ฟิลด์ :attribute จะต้องได้รับการยอมรับเมื่อ :other เป็น :value',
    'ascii' => 'ฟิลด์ :attribute จะต้องประกอบด้วยอักขระตัวอักษรและตัวเลขและสัญลักษณ์แบบไบต์เดียวเท่านั้น',
    'can' => 'ฟิลด์ :attribute มีค่าที่ไม่ได้รับอนุญาต',
    'contains' => 'ฟิลด์ :attribute ขาดค่าที่จำเป็น',
    'current_password' => 'รหัสผ่านไม่ถูกต้อง.',
    'date_equals' => 'ฟิลด์ :attribute จะต้องเป็นวันที่เท่ากับ :date',
    'decimal' => 'ฟิลด์ :attribute ต้องมี :decimal ตำแหน่งทศนิยม',
    'declined' => 'ฟิลด์ :attribute จะต้องถูกปฏิเสธ',
    'declined_if' => 'ฟิลด์ :attribute จะต้องถูกปฏิเสธเมื่อ :other เป็น :value',
    'doesnt_end_with' => 'ฟิลด์ :attribute จะต้องไม่ลงท้ายด้วยสิ่งใดสิ่งหนึ่งต่อไปนี้: :values',
    'doesnt_start_with' => 'ฟิลด์ :attribute จะต้องไม่เริ่มต้นด้วยสิ่งใดสิ่งหนึ่งต่อไปนี้: :values',
    'ends_with' => 'ฟิลด์ :attribute จะต้องลงท้ายด้วยหนึ่งในรายการต่อไปนี้: :values',
    'enum' => ':แอตทริบิวต์ที่เลือกไม่ถูกต้อง',
    'extensions' => 'ฟิลด์ :attribute จะต้องมีนามสกุลใดนามสกุลหนึ่งต่อไปนี้: :values',
    'hex_color' => 'ฟิลด์ :attribute จะต้องเป็นสีเลขฐานสิบหกที่ถูกต้อง',
    'list' => 'ฟิลด์ :attribute จะต้องเป็นรายการ',
    'lowercase' => 'ฟิลด์ :attribute จะต้องเป็นตัวพิมพ์เล็ก',
    'mac_address' => 'ฟิลด์ :attribute จะต้องเป็นที่อยู่ MAC ที่ถูกต้อง',
    'max_digits' => 'ฟิลด์ :attribute จะต้องไม่เกิน :max หลัก',
    'min_digits' => 'ฟิลด์ :attribute ต้องมีอย่างน้อย :min หลัก',
    'missing' => 'ฟิลด์ :attribute ต้องหายไป',
    'missing_if' => 'ฟิลด์ :attribute ต้องหายไปเมื่อ :other เป็น :value',
    'missing_unless' => 'ฟิลด์ :attribute ต้องหายไป เว้นแต่ :other เป็น :value',
    'missing_with' => 'ฟิลด์ :attribute ต้องหายไปเมื่อมี :values อยู่',
    'missing_with_all' => 'ฟิลด์ :attribute จะต้องหายไปเมื่อ :values มีอยู่',
    'multiple_of' => 'ฟิลด์ :attribute จะต้องเป็นผลคูณของ :value',
    'password' => [
        'letters' => 'ฟิลด์ :attribute ต้องมีตัวอักษรอย่างน้อยหนึ่งตัว',
        'mixed' => 'ฟิลด์ :attribute จะต้องประกอบด้วยตัวอักษรพิมพ์ใหญ่อย่างน้อย 1 ตัวและตัวอักษรพิมพ์เล็กอย่างน้อย 1 ตัว',
        'numbers' => 'ฟิลด์ :attribute ต้องมีตัวเลขอย่างน้อยหนึ่งตัว',
        'symbols' => 'ฟิลด์ :attribute ต้องมีสัญลักษณ์อย่างน้อยหนึ่งตัว',
        'uncompromised' => ':attribute ที่ระบุปรากฏในการรั่วไหลของข้อมูล โปรดเลือก :attribute อื่น',
    ],
    'present_if' => 'ฟิลด์ :attribute จะต้องมีอยู่เมื่อ :other เป็น :value',
    'present_unless' => 'ฟิลด์ :attribute จะต้องมีอยู่ เว้นแต่ :other คือ :value',
    'present_with' => 'ฟิลด์ :attribute จะต้องมีอยู่เมื่อมี :values อยู่',
    'present_with_all' => 'ฟิลด์ :attribute จะต้องมีอยู่เมื่อมี :values อยู่',
    'prohibited' => 'ฟิลด์ :attribute ถูกห้าม',
    'prohibited_if' => 'ฟิลด์ :attribute จะถูกห้ามเมื่อ :other เป็น :value',
    'prohibited_unless' => 'ฟิลด์ :attribute จะถูกห้าม เว้นแต่ :other อยู่ใน :values',
    'prohibits' => 'ฟิลด์ :attribute ห้ามไม่ให้ :other มีอยู่',
    'required_array_keys' => 'ฟิลด์ :attribute ต้องมีรายการสำหรับ: :values',
    'required_if_accepted' => 'จำเป็นต้องมีฟิลด์ :attribute เมื่อ :other ได้รับการยอมรับ',
    'required_if_declined' => 'ฟิลด์ :attribute เป็นสิ่งจำเป็นเมื่อ :other ถูกปฏิเสธ',
    'starts_with' => 'ฟิลด์ :attribute จะต้องเริ่มต้นด้วยหนึ่งในรายการต่อไปนี้: :values',
    'uppercase' => 'ฟิลด์ :attribute จะต้องเป็นตัวพิมพ์ใหญ่',
    'ulid' => 'ฟิลด์ :attribute จะต้องเป็น ULID ที่ถูกต้อง',
    'uuid' => 'ฟิลด์ :attribute จะต้องเป็น UUID ที่ถูกต้อง',
];
