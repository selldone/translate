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

    'accepted' => ':attribute phải được chấp nhận.',
    'active_url' => ':attribute không phải là URL hợp lệ.',
    'after' => ':attribute phải là ngày sau :date.',
    'after_or_equal' => ':attribute phải có ngày sau hoặc bằng :date.',
    'alpha' => ':attribute chỉ có thể chứa các chữ cái.',
    'alpha_dash' => ':attribute chỉ có thể chứa các chữ cái, số và dấu gạch ngang.',
    'alpha_num' => ':attribute chỉ có thể chứa các chữ cái và số.',
    'array' => ':attribute phải là một mảng.',
    'before' => ':attribute phải có ngày trước :date.',
    'before_or_equal' => ':attribute phải có ngày trước hoặc bằng :date.',
    'between' => [
        'numeric' => ':attribute phải nằm trong khoảng từ :min đến :max.',
        'file' => ':attribute phải nằm trong khoảng từ :min đến :max kilobyte.',
        'string' => ':attribute phải nằm trong khoảng từ :min đến :max.',
        'array' => ':attribute phải có giữa các mục :min và :max.',
    ],
    'boolean' => 'Trường :attribute phải đúng hoặc sai.',
    'confirmed' => 'Xác nhận :attribute không khớp.',
    'date' => ':attribute không phải là ngày hợp lệ.',
    'date_format' => ':attribute không khớp với định dạng :format.',
    'different' => ':attribute và :other phải khác nhau.',
    'digits' => ':attribute phải là chữ số :digits.',
    'digits_between' => ':attribute phải nằm trong khoảng từ :min đến :max.',
    'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Trường :attribute có giá trị trùng lặp.',
    'email' => ':attribute phải là địa chỉ email hợp lệ.',
    'exists' => ':attribute đã chọn không hợp lệ.',
    'file' => ':attribute phải là một tập tin.',
    'filled' => 'Trường :attribute phải có giá trị.',
    'gt' => [
        'numeric' => ':attribute phải lớn hơn :value.',
        'file' => ':attribute phải lớn hơn :value kilobyte.',
        'string' => ':attribute phải lớn hơn ký tự :value.',
        'array' => ':attribute phải có nhiều hơn :value.',
    ],
    'gte' => [
        'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
        'file' => ':attribute phải lớn hơn hoặc bằng :value kilobyte.',
        'string' => ':attribute phải lớn hơn hoặc bằng ký tự :value.',
        'array' => ':attribute phải có các mục :value trở lên.',
    ],
    'image' => ':attribute phải là một hình ảnh.',
    'in' => ':attribute đã chọn không hợp lệ.',
    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => ':attribute phải là số nguyên.',
    'ip' => ':attribute phải là địa chỉ IP hợp lệ.',
    'ipv4' => ':attribute phải là địa chỉ IPv4 hợp lệ.',
    'ipv6' => ':attribute phải là địa chỉ IPv6 hợp lệ.',
    'json' => ':attribute phải là chuỗi JSON hợp lệ.',
    'lt' => [
        'numeric' => ':attribute phải nhỏ hơn :value.',
        'file' => ':attribute phải nhỏ hơn :value kilobyte.',
        'string' => ':attribute phải nhỏ hơn :value ký tự.',
        'array' => ':attribute phải có ít hơn :value.',
    ],
    'lte' => [
        'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
        'file' => ':attribute phải nhỏ hơn hoặc bằng :value kilobyte.',
        'string' => ':attribute phải nhỏ hơn hoặc bằng ký tự :value.',
        'array' => ':attribute không được có nhiều hơn :value.',
    ],
    'max' => [
        'numeric' => ':attribute không được lớn hơn :max.',
        'file' => ':attribute không được lớn hơn :max kilobyte.',
        'string' => ':attribute không được lớn hơn ký tự :max.',
        'array' => ':attribute không được có nhiều hơn :max.',
    ],
    'mimes' => ':attribute phải là tệp thuộc loại: :values.',
    'mimetypes' => ':attribute phải là tệp thuộc loại: :values.',
    'min' => [
        'numeric' => ':attribute ít nhất phải là :min.',
        'file' => ':attribute phải có ít nhất :min kilobyte.',
        'string' => ':attribute phải có ít nhất ký tự :min.',
        'array' => ':attribute phải có ít nhất các mục :min.',
    ],
    'not_in' => ':attribute đã chọn không hợp lệ.',
    'not_regex' => 'Định dạng :attribute không hợp lệ.',
    'numeric' => ':attribute phải là một số.',
    'present' => 'Trường :attribute phải có mặt.',
    'regex' => 'Định dạng :attribute không hợp lệ.',
    'required' => 'Trường :attribute là bắt buộc.',
    'required_if' => 'Trường :attribute là bắt buộc khi :other là :value.',
    'required_unless' => 'Trường :attribute là bắt buộc trừ khi :other nằm trong :values.',
    'required_with' => 'Trường :attribute là bắt buộc khi có :values.',
    'required_with_all' => 'Trường :attribute là bắt buộc khi có :values.',
    'required_without' => 'Trường :attribute là bắt buộc khi không có :values.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi không có :values nào hiện diện.',
    'same' => ':attribute và :other phải khớp nhau.',
    'size' => [
        'numeric' => ':attribute phải là :size.',
        'file' => ':attribute phải là :size kilobyte.',
        'string' => ':attribute phải là ký tự :size.',
        'array' => ':attribute phải chứa các mục :size.',
    ],
    'string' => ':attribute phải là một chuỗi.',
    'timezone' => ':attribute phải là vùng hợp lệ.',
    'unique' => ':attribute đã được sử dụng.',
    'uploaded' => ':attribute không tải lên được.',
    'url' => 'Định dạng :attribute không hợp lệ.',

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
            'rule-name' => 'thông báo tùy chỉnh',
        ],
        'g-recaptcha-response' => [
            'required' => 'Vui lòng xác minh rằng bạn không phải là rô bốt.',
            'captcha' => 'Lỗi CAPTCHA! thử lại sau hoặc liên hệ với quản trị viên trang web.',
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



    'accepted_if' => 'Trường :attribute phải được chấp nhận khi :other là :value.',
    'ascii' => 'Trường :attribute chỉ được chứa các ký tự chữ số và ký hiệu một byte.',
    'can' => 'Trường :attribute chứa giá trị không được phép.',
    'contains' => 'Trường :attribute thiếu giá trị bắt buộc.',
    'current_password' => 'Mật khẩu không đúng.',
    'date_equals' => 'Trường :attribute phải là ngày bằng :date.',
    'decimal' => 'Trường :attribute phải có chữ số thập phân :decimal.',
    'declined' => 'Trường :attribute phải bị từ chối.',
    'declined_if' => 'Trường :attribute phải bị từ chối khi :other là :value.',
    'doesnt_end_with' => 'Trường :attribute không được kết thúc bằng một trong những giá trị sau: :values.',
    'doesnt_start_with' => 'Trường :attribute không được bắt đầu bằng một trong những giá trị sau: :values.',
    'ends_with' => 'Trường :attribute phải kết thúc bằng một trong những giá trị sau: :values.',
    'enum' => 'Thuộc tính đã chọn: không hợp lệ.',
    'extensions' => 'Trường :attribute phải có một trong các phần mở rộng sau: :values.',
    'hex_color' => 'Trường :attribute phải là màu thập lục phân hợp lệ.',
    'list' => 'Trường :attribute phải là một danh sách.',
    'lowercase' => 'Trường :attribute phải viết thường.',
    'mac_address' => 'Trường :attribute phải là địa chỉ MAC hợp lệ.',
    'max_digits' => 'Trường :attribute không được có nhiều hơn :max chữ số.',
    'min_digits' => 'Trường :attribute phải có ít nhất :min chữ số.',
    'missing' => 'Có thể trường :attribute bị thiếu.',
    'missing_if' => 'Trường :attribute phải bị thiếu khi :other là :value.',
    'missing_unless' => 'Trường :attribute phải bị thiếu trừ khi :other là :value.',
    'missing_with' => 'Trường :attribute phải bị thiếu khi có :values.',
    'missing_with_all' => 'Trường :attribute phải bị thiếu khi có :values.',
    'multiple_of' => 'Trường :attribute phải là bội số của :value.',
    'password' => [
        'letters' => 'Trường :attribute phải chứa ít nhất một chữ cái.',
        'mixed' => 'Trường :attribute phải chứa ít nhất một chữ cái viết hoa và một chữ cái viết thường.',
        'numbers' => 'Trường :attribute phải chứa ít nhất một số.',
        'symbols' => 'Trường :attribute phải chứa ít nhất một ký hiệu.',
        'uncompromised' => 'Thuộc tính :attribute đã cho đã xuất hiện trong một vụ rò rỉ dữ liệu. Vui lòng chọn một thuộc tính :attribute khác.',
    ],
    'present_if' => 'Trường :attribute phải có khi :other là :value.',
    'present_unless' => 'Trường :attribute phải có trừ khi :other là :value.',
    'present_with' => 'Trường :attribute phải có mặt khi :values có mặt.',
    'present_with_all' => 'Trường :attribute phải có mặt khi có :values.',
    'prohibited' => 'Trường :attribute bị cấm.',
    'prohibited_if' => 'Trường :attribute bị cấm khi :other là :value.',
    'prohibited_unless' => 'Trường :attribute bị cấm trừ khi :other nằm trong :values.',
    'prohibits' => 'Trường :attribute cấm sự xuất hiện của :other.',
    'required_array_keys' => 'Trường :attribute phải chứa các mục nhập cho: :values.',
    'required_if_accepted' => 'Trường :attribute là bắt buộc khi :other được chấp nhận.',
    'required_if_declined' => 'Trường :attribute là bắt buộc khi :other bị từ chối.',
    'starts_with' => 'Trường :attribute phải bắt đầu bằng một trong các giá trị sau: :values.',
    'uppercase' => 'Trường :attribute phải viết hoa.',
    'ulid' => 'Trường :attribute phải là ULID hợp lệ.',
    'uuid' => 'Trường :attribute phải là UUID hợp lệ.',
];
