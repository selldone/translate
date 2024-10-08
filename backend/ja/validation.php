<?php 

 return [
     "accepted" => ":attribute を受け入れる必要があります。",
     "accepted_if" => ":other が :value の場合、:attribute フィールドを受け入れる必要があります。",
     "active_url" => ":attribute は有効な URL ではありません。",
     "after" => ":attribute は、:date より後の日付でなければなりません。",
     "after_or_equal" => ":attribute は、:date 以降の日付でなければなりません。",
     "alpha" => ":attribute には文字のみを含めることができます。",
     "alpha_dash" => ":attribute には、文字、数字、およびダッシュのみを含めることができます。",
     "alpha_num" => ":attribute には、文字と数字のみを含めることができます。",
     "array" => ":attribute は配列でなければなりません。",
     "ascii" => ":attribute フィールドには、1 バイトの英数字と記号のみを含める必要があります。",
     "before" => ":attribute は、:date より前の日付でなければなりません。",
     "before_or_equal" => ":attribute は、:date より前または等しい日付でなければなりません。",
     "between" => [
     "array" => ":attribute には、:min から :max までの項目が含まれている必要があります。",
     "file" => ":attribute は、:min から :max キロバイトの間でなければなりません。",
     "numeric" => ":attribute は、:min と :max の間にある必要があります。",
     "string" => ":attribute は、:min から :max 文字の間でなければなりません。",
],
     "boolean" => ":attribute フィールドは true または false でなければなりません。",
     "can" => ":attribute フィールドに許可されていない値が含まれています。",
     "confirmed" => ":attribute の確認が一致しません。",
     "contains" => ":attribute フィールドに必要な値がありません。",
     "current_password" => "パスワードが間違っています。",
     "date" => ":attribute は有効な日付ではありません。",
     "date_equals" => ":attribute フィールドは :date と同じ日付である必要があります。",
     "date_format" => ":attribute がフォーマット :format と一致しません。",
     "decimal" => ":attribute フィールドには :decimal の小数点以下の桁数が必要です。",
     "declined" => ":attribute フィールドは拒否する必要があります。",
     "declined_if" => ":other が :value の場合、:attribute フィールドは拒否される必要があります。",
     "different" => ":attribute と :other は異なる必要があります。",
     "digits" => ":attribute は :digits 桁でなければなりません。",
     "digits_between" => ":attribute は、:min から :max 桁の間でなければなりません。",
     "dimensions" => ":attribute の画像サイズが無効です。",
     "distinct" => ":attribute フィールドの値が重複しています。",
     "doesnt_end_with" => ":attribute フィールドは、次のいずれかで終わってはなりません: :values。",
     "doesnt_start_with" => ":attribute フィールドは、次のいずれかで始まってはなりません: :values。",
     "email" => ":attribute は有効な電子メール アドレスである必要があります。",
     "ends_with" => ":attribute フィールドは、次のいずれかで終わる必要があります: :values。",
     "enum" => "選択された :attribute は無効です。",
     "exists" => "選択された :attribute は無効です。",
     "extensions" => ":attribute フィールドには、次のいずれかの拡張子: :values が必要です。",
     "file" => ":attribute はファイルでなければなりません。",
     "filled" => ":attribute フィールドには値が必要です。",
     "gt" => [
     "array" => ":attribute には、:value よりも多くの項目が必要です。",
     "file" => ":attribute は :value キロバイトより大きくなければなりません。",
     "numeric" => ":attribute は :value より大きくなければなりません。",
     "string" => ":attribute は :value 文字より大きくなければなりません。",
],
     "gte" => [
     "array" => ":attribute には :value 項目以上が必要です。",
     "file" => ":attribute は、:value キロバイト以上である必要があります。",
     "numeric" => ":attribute は :value 以上である必要があります。",
     "string" => ":attribute は、:value 文字以上である必要があります。",
],
     "hex_color" => ":attribute フィールドは有効な 16 進数の色である必要があります。",
     "image" => ":attribute は画像でなければなりません。",
     "in" => "選択された :attribute は無効です。",
     "in_array" => ":attribute フィールドが :other に存在しません。",
     "integer" => ":attribute は整数でなければなりません。",
     "ip" => ":attribute は有効な IP アドレスでなければなりません。",
     "ipv4" => ":attribute は有効な IPv4 アドレスでなければなりません。",
     "ipv6" => ":attribute は有効な IPv6 アドレスでなければなりません。",
     "json" => ":attribute は有効な JSON 文字列である必要があります。",
     "list" => ":attribute フィールドはリストである必要があります。",
     "lowercase" => ":attribute フィールドは小文字にする必要があります。",
     "lt" => [
     "array" => ":attribute の項目数は :value 未満でなければなりません。",
     "file" => ":attribute は :value キロバイト未満でなければなりません。",
     "numeric" => ":attribute は :value 未満でなければなりません。",
     "string" => ":attribute は :value 文字未満でなければなりません。",
],
     "lte" => [
     "array" => ":attribute には、:value を超えるアイテムを含めることはできません。",
     "file" => ":attribute は、:value キロバイト以下でなければなりません。",
     "numeric" => ":attribute は :value 以下でなければなりません。",
     "string" => ":attribute は、:value 文字以下でなければなりません。",
],
     "mac_address" => ":attribute フィールドは有効な MAC アドレスである必要があります。",
     "max" => [
     "array" => ":attribute には :max を超えるアイテムを含めることはできません。",
     "file" => ":attribute は :max キロバイトを超えることはできません。",
     "numeric" => ":attribute は :max を超えることはできません。",
     "string" => ":attribute は :max 文字を超えることはできません。",
],
     "max_digits" => ":attribute フィールドには :max 桁を超える文字数を指定することはできません。",
     "mimes" => ":attribute は、タイプ: :values のファイルでなければなりません。",
     "mimetypes" => ":attribute は、タイプ: :values のファイルでなければなりません。",
     "min" => [
     "array" => ":attribute には少なくとも :min 項目が必要です。",
     "file" => ":attribute は少なくとも :min キロバイトでなければなりません。",
     "numeric" => ":attribute は少なくとも :min である必要があります。",
     "string" => ":attribute は少なくとも :min 文字でなければなりません。",
],
     "min_digits" => ":attribute フィールドには少なくとも :min 桁が必要です。",
     "missing" => ":attribute フィールドが欠落している必要があります。",
     "missing_if" => ":other が :value の場合、:attribute フィールドは省略する必要があります。",
     "missing_unless" => ":other が :value でない限り、:attribute フィールドは省略する必要があります。",
     "missing_with" => ":values が存在する場合、:attribute フィールドは欠落している必要があります。",
     "missing_with_all" => ":values が存在する場合、:attribute フィールドは欠落している必要があります。",
     "multiple_of" => ":attribute フィールドは :value の倍数である必要があります。",
     "not_in" => "選択された :attribute は無効です。",
     "not_regex" => ":attribute 形式が無効です。",
     "numeric" => ":attribute は数値でなければなりません。",
     "password" => [
     "letters" => ":attribute フィールドには少なくとも 1 文字が含まれている必要があります。",
     "mixed" => ":attribute フィールドには、少なくとも 1 つの大文字と 1 つの小文字が含まれている必要があります。",
     "numbers" => ":attribute フィールドには少なくとも 1 つの数値が含まれている必要があります。",
     "symbols" => ":attribute フィールドには少なくとも 1 つのシンボルが含まれている必要があります。",
     "uncompromised" => "指定された :attribute はデータ漏洩に発生しました。別の :attribute を選択してください。",
],
     "present" => ":attribute フィールドが存在する必要があります。",
     "present_if" => ":other が :value の場合、:attribute フィールドが存在する必要があります。",
     "present_unless" => ":other が :value でない限り、:attribute フィールドが存在する必要があります。",
     "present_with" => ":values が存在する場合は、:attribute フィールドも存在する必要があります。",
     "present_with_all" => ":values が存在する場合は、:attribute フィールドも存在する必要があります。",
     "prohibited" => ":attribute フィールドは禁止されています。",
     "prohibited_if" => ":other が :value の場合、:attribute フィールドは禁止されます。",
     "prohibited_unless" => ":other が :values に含まれていない限り、:attribute フィールドは禁止されます。",
     "prohibits" => ":attribute フィールドでは :other の存在が禁止されます。",
     "regex" => ":attribute 形式が無効です。",
     "required" => ":attribute フィールドは必須です。",
     "required_array_keys" => ":attribute フィールドには、:values のエントリが含まれている必要があります。",
     "required_if" => ":other が :value の場合、:attribute フィールドは必須です。",
     "required_if_accepted" => ":other が受け入れられる場合、:attribute フィールドは必須です。",
     "required_if_declined" => ":other が拒否された場合、:attribute フィールドは必須です。",
     "required_unless" => ":values に :other がない限り、:attribute フィールドは必須です。",
     "required_with" => ":values が存在する場合、:attribute フィールドは必須です。",
     "required_with_all" => ":values が存在する場合、:attribute フィールドは必須です。",
     "required_without" => ":values が存在しない場合、:attribute フィールドは必須です。",
     "required_without_all" => ":values が存在しない場合、:attribute フィールドは必須です。",
     "same" => ":attribute と :other は一致する必要があります。",
     "size" => [
     "array" => ":attribute には :size 項目が含まれている必要があります。",
     "file" => ":attribute は :size キロバイトでなければなりません。",
     "numeric" => ":attribute は :size でなければなりません。",
     "string" => ":attribute は :size 文字でなければなりません。",
],
     "starts_with" => ":attribute フィールドは、次のいずれかで始まる必要があります: :values。",
     "string" => ":attribute は文字列でなければなりません。",
     "timezone" => ":attribute は有効なゾーンでなければなりません。",
     "unique" => ":attribute は既に取得されています。",
     "uploaded" => ":attribute のアップロードに失敗しました。",
     "uppercase" => ":attribute フィールドは大文字にする必要があります。",
     "url" => ":attribute 形式が無効です。",
     "ulid" => ":attribute フィールドは有効な ULID である必要があります。",
     "uuid" => ":attribute フィールドは有効な UUID である必要があります。",
     "custom" => [
     "attribute-name" => [
     "rule-name" => "カスタム メッセージ",
],
     "g-recaptcha-response" => [
     "required" => "あなたがロボットでないことを確認してください。",
     "captcha" => "キャプチャーエラー！後でもう一度試すか、サイト管理者に連絡してください。",
],
],
     "attributes" => [
        
     ],
];