<?php 

 return [
     "accepted" => "ต้องยอมรับ :attribute",
     "active_url" => ":attribute ไม่ใช่ URL ที่ถูกต้อง",
     "after" => ":attribute ต้องเป็นวันที่หลัง :date",
     "after_or_equal" => ":attribute ต้องเป็นวันที่หลังหรือเท่ากับ :date",
     "alpha" => ":attribute ต้องประกอบด้วยตัวอักษรเท่านั้น",
     "alpha_dash" => ":attribute ต้องประกอบด้วยตัวอักษร ตัวเลข และขีดกลางเท่านั้น",
     "alpha_num" => ":attribute มีได้เฉพาะตัวอักษรและตัวเลขเท่านั้น",
     "array" => ":attribute ต้องเป็นอาร์เรย์",
     "before" => ":attribute ต้องเป็นวันที่ก่อน :date",
     "before_or_equal" => ":attribute ต้องเป็นวันที่ก่อนหรือเท่ากับ :date",
     "between" => [
     "numeric" => ":attribute ต้องอยู่ระหว่าง :min และ :max",
     "file" => ":attribute ต้องอยู่ระหว่าง :min และ :max กิโลไบต์",
     "string" => ":attribute ต้องอยู่ระหว่าง :min และ :max อักขระ",
     "array" => ":attribute ต้องมีรายการระหว่าง :min และ :max",
],
     "boolean" => "ฟิลด์ :attribute จะต้องเป็นจริงหรือเท็จ",
     "confirmed" => "การยืนยัน :attribute ไม่ตรงกัน",
     "date" => ":attribute ไม่ใช่วันที่ที่ถูกต้อง",
     "date_format" => ":attribute ไม่ตรงกับรูปแบบ :format",
     "different" => ":attribute และ :other ต้องแตกต่างกัน",
     "digits" => ":attribute ต้องเป็น :digits หลัก",
     "digits_between" => ":attribute ต้องอยู่ระหว่าง :min ถึง :max หลัก",
     "dimensions" => ":attribute มีขนาดภาพที่ไม่ถูกต้อง",
     "distinct" => "ฟิลด์ :attribute มีค่าที่ซ้ำกัน",
     "email" => ":attribute ต้องเป็นที่อยู่อีเมลที่ถูกต้อง",
     "exists" => ":แอตทริบิวต์ที่เลือกไม่ถูกต้อง",
     "file" => ":attribute ต้องเป็นไฟล์",
     "filled" => "ฟิลด์ :attribute ต้องมีค่า",
     "gt" => [
     "numeric" => ":attribute ต้องมากกว่า :value",
     "file" => ":attribute ต้องมากกว่า :value กิโลไบต์",
     "string" => ":attribute ต้องมากกว่า :value อักขระ",
     "array" => ":attribute ต้องมีมากกว่า :value รายการ",
],
     "gte" => [
     "numeric" => ":attribute ต้องมากกว่าหรือเท่ากับ :value",
     "file" => ":attribute ต้องมากกว่าหรือเท่ากับ :value กิโลไบต์",
     "string" => ":attribute ต้องมากกว่าหรือเท่ากับ :value อักขระ",
     "array" => ":attribute ต้องมีรายการ :value ขึ้นไป",
],
     "image" => ":attribute ต้องเป็นรูปภาพ",
     "in" => ":แอตทริบิวต์ที่เลือกไม่ถูกต้อง",
     "in_array" => "ฟิลด์ :attribute ไม่มีอยู่ใน :other",
     "integer" => ":attribute ต้องเป็นจำนวนเต็ม",
     "ip" => ":attribute ต้องเป็นที่อยู่ IP ที่ถูกต้อง",
     "ipv4" => ":attribute ต้องเป็นที่อยู่ IPv4 ที่ถูกต้อง",
     "ipv6" => ":attribute ต้องเป็นที่อยู่ IPv6 ที่ถูกต้อง",
     "json" => ":attribute ต้องเป็นสตริง JSON ที่ถูกต้อง",
     "lt" => [
     "numeric" => ":attribute ต้องน้อยกว่า :value",
     "file" => ":attribute ต้องน้อยกว่า :value กิโลไบต์",
     "string" => ":attribute ต้องน้อยกว่า :value อักขระ",
     "array" => ":attribute ต้องมีรายการน้อยกว่า :value",
],
     "lte" => [
     "numeric" => ":attribute ต้องน้อยกว่าหรือเท่ากับ :value",
     "file" => ":attribute ต้องน้อยกว่าหรือเท่ากับ :value กิโลไบต์",
     "string" => ":attribute ต้องน้อยกว่าหรือเท่ากับ :value อักขระ",
     "array" => ":attribute ต้องไม่เกิน :value รายการ",
],
     "max" => [
     "numeric" => ":attribute ต้องไม่เกิน :max",
     "file" => ":attribute ต้องไม่เกิน :max กิโลไบต์",
     "string" => ":attribute ต้องไม่เกิน :max อักขระ",
     "array" => ":attribute ไม่สามารถมีมากกว่า :max รายการ",
],
     "mimes" => ":attribute ต้องเป็นไฟล์ประเภท: :values",
     "mimetypes" => ":attribute ต้องเป็นไฟล์ประเภท: :values",
     "min" => [
     "numeric" => ":attribute ต้องมีอย่างน้อย :min",
     "file" => ":attribute ต้องมีอย่างน้อย :min กิโลไบต์",
     "string" => ":attribute ต้องมีอักขระอย่างน้อย :min",
     "array" => ":attribute ต้องมีอย่างน้อย :min รายการ",
],
     "not_in" => ":แอตทริบิวต์ที่เลือกไม่ถูกต้อง",
     "not_regex" => "รูปแบบ :attribute ไม่ถูกต้อง",
     "numeric" => ":attribute ต้องเป็นตัวเลข",
     "present" => "ต้องมีฟิลด์ :attribute",
     "regex" => "รูปแบบ :attribute ไม่ถูกต้อง",
     "required" => "ต้องระบุฟิลด์ :attribute",
     "required_if" => "ฟิลด์ :attribute จำเป็นเมื่อ :other คือ :value",
     "required_unless" => "ต้องระบุฟิลด์ :attribute เว้นแต่ :other อยู่ใน :values",
     "required_with" => "ฟิลด์ :attribute จำเป็นเมื่อมี :values",
     "required_with_all" => "ฟิลด์ :attribute จำเป็นเมื่อมี :values",
     "required_without" => "ต้องระบุฟิลด์ :attribute เมื่อไม่มี :values",
     "required_without_all" => "ฟิลด์ :attribute จำเป็นเมื่อไม่มี :values อยู่",
     "same" => ":attribute และ :other ต้องตรงกัน",
     "size" => [
     "numeric" => ":attribute ต้องเป็น :size",
     "file" => ":attribute ต้องเป็น :size กิโลไบต์",
     "string" => ":attribute ต้องเป็น :size อักขระ",
     "array" => ":attribute ต้องมี :size รายการ",
],
     "string" => ":attribute ต้องเป็นสตริง",
     "timezone" => ":attribute ต้องเป็นโซนที่ถูกต้อง",
     "unique" => ":attribute ถูกนำไปใช้แล้ว",
     "uploaded" => ":attribute ล้มเหลวในการอัปโหลด",
     "url" => "รูปแบบ :attribute ไม่ถูกต้อง",
     "custom" => [
     "attribute-name" => [
     "rule-name" => "ข้อความที่กำหนดเอง",
],
     "g-recaptcha-response" => [
     "required" => "โปรดตรวจสอบว่าคุณไม่ใช่หุ่นยนต์",
     "captcha" => "แคปช่าผิดพลาด! ลองอีกครั้งในภายหลังหรือติดต่อผู้ดูแลไซต์",
],
],
     "attributes" => [
        
     ],
];