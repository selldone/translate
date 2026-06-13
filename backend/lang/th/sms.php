<?php

/*
|--------------------------------------------------------------------------
| Shop SMS list
|--------------------------------------------------------------------------
| This array return to shop admin to see SMS preview!
|
*/

return [

    'shop-order-payment' => [
        'title' => 'ยอมรับการชำระเงิน',
        'sample' => "การชำระเงิน \$267 ของคุณสำเร็จเรียบร้อยแล้ว",
        'body' => "การชำระเงิน :param2 ของคุณได้รับการชำระเรียบร้อยแล้ว\nคำสั่งซื้อ: :param1\nขอบคุณครับ :param3\nSelldone",
        'icon' => 'การชำระเงิน',
        'description' => 'ส่งข้อความถึงลูกค้าร้านค้าเพื่อแจ้งการชำระเงินสำเร็จ',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ยอมรับการชำระเงิน',
        'sample' => "การชำระเงินใหม่จำนวน 267 เหรียญสหรัฐได้รับการชำระเรียบร้อยแล้ว",
        'body' => "การชำระเงิน :param2 ใหม่สำเร็จแล้ว\nคำสั่งซื้อ: :param1\nขอบคุณครับ :param3\nSelldone",
        'icon' => 'การชำระเงิน',
        'description' => 'ส่งข้อความถึงเจ้าของร้านค้าเพื่อแจ้งให้ทราบว่าชำระเงินสำเร็จ',

    ],

    'vendor-new-order' => [
        'title' => 'ผู้ขายคำสั่งซื้อใหม่',
        'sample' => "คุณได้รับคำสั่งซื้อมูลค่า \$200 ใหม่| SKU100001 |1x<br>✅ สินค้าบี| SKU100002 |1x",
        'body' => "คุณได้รับคำสั่งซื้อ :param2 ใหม่\nคำสั่งซื้อ: :param1 สำหรับ :param3\n:param4",
        'icon' => 'หน้าร้าน',
        'description' => 'ส่งข้อความไปยังผู้ขายเพื่อแจ้งให้ทราบเกี่ยวกับคำสั่งซื้อใหม่',
    ],








    'shop-login' => [
        'title' => 'รหัสยืนยันการเข้าสู่ระบบ',
        'sample' => "รหัสเข้าสู่ระบบของคุณคือ: <b>123456</b><br><b>ชื่อร้านค้าของคุณ</b><br>Selldone",
        'body' => "รหัสเข้าสู่ระบบของคุณคือ: :param1\n:param2\nSelldone",
        'icon' => 'เข้าสู่ระบบ',
        'description' => 'ส่งรหัสล็อคอินให้กับลูกค้าเพื่อเข้าสู่ระบบร้านค้า',

    ],

    'user-login' => [
        'title' => 'ข้อความสำเร็จในการเข้าสู่ระบบ',
        'sample' => "เรียน <b>Name</b>,<br>คุณได้ลงชื่อเข้าใช้บัญชีของคุณโดย <b>iPhone 165.250.300.1</b> ที่ <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "เรียน :param1\nคุณได้ลงชื่อเข้าใช้บัญชีของคุณภายใน :param2 ที่ :param3\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'ส่งข้อความหลังจากที่ลูกค้าเข้าสู่ระบบร้านค้าแล้ว',

    ],

    'avocado-order-submit' => [
        'title' => 'ส่งคำสั่งซื้ออะโวคาโดใหม่ ส่งให้ผู้ซื้อ',
        'sample' => "<b>ชื่อร้านค้าของคุณ</b><br>เรียน <b>ชื่อของคุณ</b>,<br>เราได้รับคำสั่งซื้อของคุณแล้วและเรากำลังตรวจสอบอยู่<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nเรียน :param1\nเราได้รับคำสั่งซื้อของคุณแล้ว และเรากำลังตรวจสอบอยู่\nคำสั่งซื้อ #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'ส่งข้อความถึงลูกค้าหลังจากวางคำสั่งซื้ออะโวคาโด',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'อะโวคาโดรับออเดอร์ใหม่ ส่งให้แม่ค้า',
        'sample' => "คุณได้รับคำสั่งซื้ออะโวคาโด:<br>ร้านค้า: <b>ชื่อร้านค้าของคุณ</b><br>ผู้ซื้อ: <b>ชื่อผู้ซื้อ</b><br>คำสั่งซื้อ: <b>AVO-246</b><br>Selldone",
        'body' => "คุณได้รับคำสั่งซื้ออะโวคาโด:\nร้านค้า: :param1\nผู้ซื้อ: :param2\nคำสั่งซื้อ: :param3\nSelldone",
        'icon' => 'วิธีการ_to_reg',
        'description' => 'ส่งข้อความถึงเจ้าของร้านเพื่อแจ้งให้ทราบเกี่ยวกับการรับออเดอร์อะโวคาโดใหม่',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'ออเดอร์อะโวคาโดพร้อมจ่าย',
        'sample' => "<b>ชื่อร้านค้าของคุณ</b><br>คำสั่งซื้อของคุณได้รับการยืนยันแล้วและสามารถชำระเงินผ่านลิงก์ต่อไปนี้<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nคำสั่งซื้อของคุณได้รับการยืนยันแล้วและสามารถชำระเงินผ่านลิงก์ต่อไปนี้\nคำสั่งซื้อ #: :param2\nลิงค์: :param1\nSelldone",
        'icon' => 'ใบเสร็จรับเงิน',
        'description' => 'ส่งข้อความพร้อมลิงค์การชำระเงินให้กับลูกค้าหลังจากที่ผู้ขายตั้งค่าต้นทุนและยืนยันการสั่งซื้ออะโวคาโดของพวกเขา',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ออเดอร์พร้อมส่ง',
        'sample' => "สวัสดี <b>Alex</b> ข่าวดี ตอนนี้คำสั่งซื้อของคุณพร้อมส่งแล้ว<br>Order: <b>SM-123</b>",
        'body' => "สวัสดี :param4 ข่าวดี ตอนนี้คำสั่งซื้อของคุณพร้อมส่งแล้ว\nคำสั่งซื้อ: :param1",
        'icon' => 'local_shipping',
        'description' => 'ส่งข้อความถึงลูกค้าเพื่อแจ้งให้ทราบว่ามีสินค้าที่พร้อมส่งแล้ว',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ออเดอร์พร้อมรับ',
        'sample' => "สวัสดีอเล็กซ์ ข่าวดี ตอนนี้คำสั่งซื้อของคุณพร้อมที่จะให้ไปรับแล้ว<br>Order: <b>SM-123</b>",
        'body' => "สวัสดี :param4 ข่าวดี ตอนนี้คำสั่งซื้อของคุณพร้อมให้ไปรับแล้ว\nคำสั่งซื้อ: :param1",
        'icon' => 'share_location',
        'description' => 'ส่งข้อความถึงลูกค้าเพื่อแจ้งให้ทราบว่าสินค้าที่สั่งซื้อพร้อมให้มารับแล้ว',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'ออเดอร์พ่อค้าพร้อมส่ง',
        'sample' => "สวัสดี <b>Alex</b> ข่าวดี ตอนนี้คำสั่งซื้อของคุณพร้อมส่งแล้ว<br>Order: <b>SM-123</b>",
        'body' => "สวัสดี :param4 ข่าวดี ตอนนี้คำสั่งซื้อของคุณพร้อมส่งแล้ว\nคำสั่งซื้อ: :param1",
        'icon' => 'local_shipping',
        'description' => 'ส่งข้อความถึงลูกค้าเพื่อแจ้งให้ทราบว่ามีสินค้าที่พร้อมส่งแล้ว เฉพาะในตลาดที่มีโหมดการจัดส่งโดยตรงและประเภทการจัดส่งไม่ใช่การรับสินค้า',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'แม่ค้าสั่งพร้อมรับ',
        'sample' => "สวัสดีอเล็กซ์ ข่าวดี ตอนนี้คำสั่งซื้อของคุณพร้อมที่จะให้ไปรับแล้ว<br>Order: <b>SM-123</b>",
        'body' => "สวัสดี :param4 ข่าวดี ตอนนี้คำสั่งซื้อของคุณพร้อมให้ไปรับแล้ว\nคำสั่งซื้อ: :param1",
        'icon' => 'share_location',
        'description' => 'ส่งข้อความถึงลูกค้าเพื่อแจ้งให้ทราบว่าสินค้าที่สั่งซื้อพร้อมให้มารับแล้ว ในตลาดที่มีโหมดการจัดส่งโดยตรงและประเภทการจัดส่งคือการรับสินค้า',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'การยืนยันรายการสั่งซื้อ',
        'sample' => "สวัสดีอเล็กซ์ เราได้ตรวจสอบคำสั่งซื้อของคุณแล้ว นี่คือสถานะการยืนยันสำหรับรายการของคุณ:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "สวัสดี :param4 เราได้ตรวจสอบคำสั่งซื้อของคุณแล้ว นี่คือสถานะการยืนยันสำหรับรายการของคุณ:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'การมอบหมาย_turned_in',
        'description' => 'แจ้งให้ลูกค้าทราบเกี่ยวกับสินค้าในคำสั่งซื้อที่ผู้ขายยอมรับหรือปฏิเสธ',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'การยืนยันรายการสั่งซื้อของผู้ขาย',
        'sample' => "สวัสดีอเล็กซ์ เราได้ตรวจสอบคำสั่งซื้อของคุณแล้ว นี่คือสถานะการยืนยันสำหรับรายการของคุณ:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "สวัสดี :param4 เราได้ตรวจสอบคำสั่งซื้อของคุณแล้ว นี่คือสถานะการยืนยันสำหรับรายการของคุณ:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'การมอบหมาย_turned_in',
        'description' => 'แจ้งให้ลูกค้าทราบเกี่ยวกับสินค้าในคำสั่งซื้อที่ผู้ขายยอมรับหรือปฏิเสธ',
    ],



];
