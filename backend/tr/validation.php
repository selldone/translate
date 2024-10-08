<?php 

 return [
     "accepted" => ":attribute kabul edilmelidir.",
     "accepted_if" => ":attribute alanı, :other değeri :value olduğunda kabul edilmelidir.",
     "active_url" => ":attribute geçerli bir URL değil.",
     "after" => ":attribute, :date'den sonraki bir tarih olmalıdır.",
     "after_or_equal" => ":attribute, :date'den sonraki veya buna eşit bir tarih olmalıdır.",
     "alpha" => ":attribute yalnızca harf içerebilir.",
     "alpha_dash" => ":attribute yalnızca harf, sayı ve tire içerebilir.",
     "alpha_num" => ":attribute yalnızca harf ve sayı içerebilir.",
     "array" => ":attribute bir dizi olmalıdır.",
     "ascii" => ":attribute alanı yalnızca tek baytlık alfanümerik karakterler ve semboller içermelidir.",
     "before" => ":attribute, :date'den önceki bir tarih olmalıdır.",
     "before_or_equal" => ":attribute, :date tarihinden önce veya buna eşit bir tarih olmalıdır.",
     "between" => [
     "array" => ":attribute, :min ve :max öğeleri arasında olmalıdır.",
     "file" => ":attribute :min ve :max kilobaytlar arasında olmalıdır.",
     "numeric" => ":attribute :min ve :max arasında olmalıdır.",
     "string" => ":attribute :min ve :max karakterleri arasında olmalıdır.",
],
     "boolean" => ":attribute alanı doğru veya yanlış olmalıdır.",
     "can" => ":attribute alanı yetkisiz bir değer içeriyor.",
     "confirmed" => ":attribute onayı eşleşmiyor.",
     "contains" => ":attribute alanında gerekli bir değer eksik.",
     "current_password" => "Şifre hatalı.",
     "date" => ":attribute geçerli bir tarih değil.",
     "date_equals" => ":attribute alanı :date değerine eşit bir tarih olmalıdır.",
     "date_format" => ":attribute, :format biçimiyle eşleşmiyor.",
     "decimal" => ":attribute alanı :decimal ondalık basamaklara sahip olmalıdır.",
     "declined" => ":attribute alanı reddedilmelidir.",
     "declined_if" => ":attribute alanı, :other değeri :value olduğunda reddedilmelidir.",
     "different" => ":attribute ve :other farklı olmalıdır.",
     "digits" => ":attribute :digits rakamlardan oluşmalıdır.",
     "digits_between" => ":attribute :min ve :max basamakları arasında olmalıdır.",
     "dimensions" => ":attribute geçersiz resim boyutlarına sahip.",
     "distinct" => ":attribute alanı yinelenen bir değere sahip.",
     "doesnt_end_with" => ":attribute alanı aşağıdakilerden biriyle bitmemelidir: :values.",
     "doesnt_start_with" => ":attribute alanı aşağıdakilerden biriyle başlamamalıdır: :values.",
     "email" => ":attribute geçerli bir e-posta adresi olmalıdır.",
     "ends_with" => ":attribute alanı aşağıdakilerden biriyle bitmelidir: :values.",
     "enum" => "Seçilen :attribute geçersiz.",
     "exists" => "Seçilen :attribute geçersiz.",
     "extensions" => ":attribute alanı aşağıdaki uzantılardan birine sahip olmalıdır: :values.",
     "file" => ":attribute bir dosya olmalıdır.",
     "filled" => ":attribute alanı bir değere sahip olmalıdır.",
     "gt" => [
     "array" => ":attribute, :value öğelerinden daha fazlasına sahip olmalıdır.",
     "file" => ":attribute, :value kilobayttan büyük olmalıdır.",
     "numeric" => ":attribute, :value değerinden büyük olmalıdır.",
     "string" => ":attribute, :value karakterlerinden büyük olmalıdır.",
],
     "gte" => [
     "array" => ":attribute, :value öğelerine veya daha fazlasına sahip olmalıdır.",
     "file" => ":attribute, :value kilobayttan büyük veya ona eşit olmalıdır.",
     "numeric" => ":attribute, :value değerinden büyük veya ona eşit olmalıdır.",
     "string" => ":attribute, :value karakterlerinden büyük veya ona eşit olmalıdır.",
],
     "hex_color" => ":attribute alanı geçerli bir onaltılık renk olmalıdır.",
     "image" => ":attribute bir resim olmalıdır.",
     "in" => "Seçilen :attribute geçersiz.",
     "in_array" => ":attribute alanı :other içinde mevcut değil.",
     "integer" => ":attribute bir tamsayı olmalıdır.",
     "ip" => ":attribute geçerli bir IP adresi olmalıdır.",
     "ipv4" => ":attribute geçerli bir IPv4 adresi olmalıdır.",
     "ipv6" => ":attribute geçerli bir IPv6 adresi olmalıdır.",
     "json" => ":attribute geçerli bir JSON dizesi olmalıdır.",
     "list" => ":attribute alanı bir liste olmalıdır.",
     "lowercase" => ":attribute alanı küçük harfle yazılmalıdır.",
     "lt" => [
     "array" => ":attribute, :value öğelerinden daha azına sahip olmalıdır.",
     "file" => ":attribute, :value kilobayttan küçük olmalıdır.",
     "numeric" => ":attribute, :value değerinden küçük olmalıdır.",
     "string" => ":attribute, :value karakterlerinden daha az olmalıdır.",
],
     "lte" => [
     "array" => ":attribute, :value öğelerinden daha fazlasına sahip olmamalıdır.",
     "file" => ":attribute :value kilobayttan küçük veya ona eşit olmalıdır.",
     "numeric" => ":attribute, :value değerinden küçük veya ona eşit olmalıdır.",
     "string" => ":attribute, :value karakterlerinden küçük veya ona eşit olmalıdır.",
],
     "mac_address" => ":attribute alanı geçerli bir MAC adresi olmalıdır.",
     "max" => [
     "array" => ":attribute öğesi, :max öğesinden fazla öğeye sahip olamaz.",
     "file" => ":attribute :max kilobayttan büyük olamaz.",
     "numeric" => ":attribute :max değerinden büyük olamaz.",
     "string" => ":attribute, :max karakterlerinden büyük olamaz.",
],
     "max_digits" => ":attribute alanı :max'tan fazla rakam içeremez.",
     "mimes" => ":attribute, :values türünde bir dosya olmalıdır.",
     "mimetypes" => ":attribute, :values türünde bir dosya olmalıdır.",
     "min" => [
     "array" => ":attribute en az :min öğelerine sahip olmalıdır.",
     "file" => ":attribute en az :min kilobayt olmalıdır.",
     "numeric" => ":attribute en az :min olmalıdır.",
     "string" => ":attribute en az :min karakter olmalıdır.",
],
     "min_digits" => ":attribute alanı en az :min rakam içermelidir.",
     "missing" => ":attribute alanı eksik olmalı.",
     "missing_if" => ":other ifadesi :value olduğunda :attribute alanı eksik olmalıdır.",
     "missing_unless" => ":attribute alanı, :other değeri :value olmadığı sürece eksik olmalıdır.",
     "missing_with" => ":values mevcut olduğunda :attribute alanı eksik olmalıdır.",
     "missing_with_all" => ":values mevcut olduğunda :attribute alanı eksik olmalıdır.",
     "multiple_of" => ":attribute alanı :value'nun katı olmalıdır.",
     "not_in" => "Seçilen :attribute geçersiz.",
     "not_regex" => ":attribute biçimi geçersiz.",
     "numeric" => ":attribute bir sayı olmalıdır.",
     "password" => [
     "letters" => ":attribute alanı en az bir harf içermelidir.",
     "mixed" => ":attribute alanı en az bir büyük harf ve bir küçük harf içermelidir.",
     "numbers" => ":attribute alanı en az bir rakam içermelidir.",
     "symbols" => ":attribute alanı en az bir sembol içermelidir.",
     "uncompromised" => "Verilen :attribute bir veri sızıntısında ortaya çıktı. Lütfen farklı bir :attribute seçin.",
],
     "present" => ":attribute alanı mevcut olmalıdır.",
     "present_if" => ":other değeri :value olduğunda :attribute alanı mevcut olmalıdır.",
     "present_unless" => ":attribute alanı, :other değeri :value olmadığı sürece mevcut olmalıdır.",
     "present_with" => ":values mevcut olduğunda :attribute alanı da mevcut olmalıdır.",
     "present_with_all" => ":attribute alanı, :values mevcut olduğunda mevcut olmalıdır.",
     "prohibited" => ":attribute alanı yasaktır.",
     "prohibited_if" => ":attribute alanı, :other değeri :value olduğunda yasaktır.",
     "prohibited_unless" => ":attribute alanı, :other alanı :values içinde olmadığı sürece yasaktır.",
     "prohibits" => ":attribute alanı :other özelliğinin bulunmasını yasaklar.",
     "regex" => ":attribute biçimi geçersiz.",
     "required" => ":attribute alanı gereklidir.",
     "required_array_keys" => ":attribute alanı :values için girdiler içermelidir.",
     "required_if" => ":attribute alanı, :other :value olduğunda gereklidir.",
     "required_if_accepted" => ":attribute alanı :other kabul edildiğinde zorunludur.",
     "required_if_declined" => ":attribute alanı :other reddedildiğinde zorunludur.",
     "required_unless" => ":attribute alanı, :other :values içinde olmadığı sürece gereklidir.",
     "required_with" => ":attribute alanı, :values mevcut olduğunda gereklidir.",
     "required_with_all" => ":attribute alanı, :values mevcut olduğunda gereklidir.",
     "required_without" => ":attribute alanı, :values olmadığında gereklidir.",
     "required_without_all" => ":attribute alanı, :values değerlerinin hiçbiri mevcut olmadığında gereklidir.",
     "same" => ":attribute ve :other eşleşmelidir.",
     "size" => [
     "array" => ":attribute :size öğeleri içermelidir.",
     "file" => ":attribute :size kilobayt olmalıdır.",
     "numeric" => ":attribute :size olmalıdır.",
     "string" => ":attribute :size karakter olmalıdır.",
],
     "starts_with" => ":attribute alanı aşağıdakilerden biriyle başlamalıdır: :values.",
     "string" => ":attribute bir dize olmalıdır.",
     "timezone" => ":attribute geçerli bir bölge olmalıdır.",
     "unique" => ":attribute zaten alınmış.",
     "uploaded" => ":attribute yüklenemedi.",
     "uppercase" => ":attribute alanı büyük harfle yazılmalıdır.",
     "url" => ":attribute biçimi geçersiz.",
     "ulid" => ":attribute alanı geçerli bir ULID olmalıdır.",
     "uuid" => ":attribute alanı geçerli bir UUID olmalıdır.",
     "custom" => [
     "attribute-name" => [
     "rule-name" => "özel mesaj",
],
     "g-recaptcha-response" => [
     "required" => "Lütfen robot olmadığınızı doğrulayın.",
     "captcha" => "CAPTCHA hatası! daha sonra tekrar deneyin veya site yöneticisiyle iletişime geçin.",
],
],
     "attributes" => [
        
     ],
];