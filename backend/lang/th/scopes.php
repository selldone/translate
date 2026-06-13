<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'ขอบเขตผู้ดูแลระบบ Selldone',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'การเข้าถึงนักลงทุนที่ถูกจำกัด',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'อ่านรายละเอียดโปรไฟล์ผู้ใช้',
    AuthServiceProvider::SCOPE_USER_PHONE => 'อ่านหมายเลขโทรศัพท์',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'อ่านและอัปเดตที่อยู่ที่บันทึกไว้',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'อัพเดตโปรไฟล์ผู้ใช้',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'สั่งซื้อ',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ดูประวัติการสั่งซื้อ',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'เข้าถึงบัตรของขวัญ',

    AuthServiceProvider::SCOPE_ARTICLES => 'แก้ไขบทความ',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'จัดการการแจ้งเตือน',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'ดูรายการร้านค้า',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'แก้ไขรายละเอียดร้านค้า',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'เพิ่มร้านใหม่.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ลบร้านค้า.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'จัดการตั๋วสนับสนุน',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'จัดการบัตรของขวัญ',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'ดูบัตรของขวัญ',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'จัดการคำถามที่พบบ่อย',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'ดูคำถามที่พบบ่อย',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'จัดการหมวดหมู่',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'ดูหมวดหมู่',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'จัดการผลิตภัณฑ์',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ชมสินค้า.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'ดูรายงาน',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'จัดการบัญชีการเงิน',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'ดูบัญชีการเงิน',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'แก้ไขหน้าร้าน',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'ดูหน้าร้าน',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'จัดการคลังสินค้า',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ดูโกดัง.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'จัดการการเข้าถึงของพนักงาน',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'ดูการเข้าถึงของพนักงาน',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ดูคำสั่งซื้อ',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'จัดการคำสั่งซื้อ',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'จัดการโปรไฟล์ธุรกิจ',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ดูโปรไฟล์ธุรกิจ',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'จัดการรหัสส่วนลด',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ดูรหัสส่วนลด',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'จัดการคูปอง',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'ดูคูปอง',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'จัดการข้อเสนอ',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ดูข้อเสนอ',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'จัดการเงินคืน',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'ดูเงินคืน',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'จัดการลอตเตอรี่',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ดูลอตเตอรี่.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'จัดการชุมชน',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'ดูชุมชน',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'จัดการลูกค้า',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ดูลูกค้า.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'จัดการการสมัครสมาชิก',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'ดูการสมัครสมาชิก',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'ดูคำสั่งซื้อของผู้ขาย',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'จัดการคำสั่งซื้อและการชำระเงินของผู้ขาย',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'จัดการผู้ให้บริการเชื่อมต่อ',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'ดูผู้ให้บริการเชื่อมต่อ',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'ดำเนินการคำสั่ง AI',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'ดูข้อมูล AI',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'จัดการการชำระเงินของผู้ขาย',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'ดูการชำระเงินของผู้ขาย',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ดูโปรไฟล์ธุรกิจ',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'จัดการโปรไฟล์ธุรกิจ',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ดูข้อมูลหน่วยงาน',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'จัดการข้อมูลหน่วยงาน',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'ดูหมายเหตุร้านค้า',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'จัดการบันทึกร้านค้า',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'ดูทรัพย์สินของนักพัฒนา',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'จัดการทรัพย์สินของนักพัฒนา',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'เข้าถึงข้อมูลส่วนบุคคลและการตั้งค่าบัญชี',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'จัดการกระเป๋าเงินและธุรกรรม',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ดูธุรกรรมกระเป๋าเงิน',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'ดูโทเค็นและไคลเอ็นต์ OAuth',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'จัดการโทเค็นและไคลเอนต์ OAuth',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'จัดการการตั้งค่าความปลอดภัย',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'จัดการบริษัทในเครือ',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ดูบริษัทในเครือ',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'จัดการเทมเพลตการพิมพ์',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'ดูเทมเพลตการพิมพ์',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'จัดการบทวิจารณ์',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'ดูรีวิว.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'ดูข้อมูลการสร้างรายได้',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'จัดการข้อมูลการสร้างรายได้',



    'profile' => 'อ่านข้อมูลโปรไฟล์รวมถึงชื่อ ที่อยู่อีเมล รูปภาพ และสถานะการตรวจสอบสิทธิ์',
    'phone' => 'การเข้าถึงหมายเลขติดต่อ',
    'address' => 'อ่านและแก้ไขที่อยู่จากสมุดที่อยู่ที่บันทึกไว้',
    'buy' => 'สั่งซื้อและสั่งซื้อสินค้า',
    'order-history' => 'อ่านประวัติการสั่งซื้อ',
    'my-gift-cards' => 'การเข้าถึงบัตรของขวัญของฉัน',
    'articles' => 'แก้ไขบทความ',
    'notifications' => 'ส่งและรับการแจ้งเตือน',
    'read-shops' => 'อ่านรายชื่อร้านค้า',
    'shop-edit' => 'การเข้าถึงการแก้ไขร้านค้า',
    'shop-contacts' => 'รับและแก้ไขแบบฟอร์มการติดต่อ',
    'shop-gift-cards' => 'การสร้าง แก้ไข และจัดการการ์ด',
    'shop-faqs' => 'สร้าง แก้ไข และจัดการคำถามที่พบบ่อย',
    'shop-categories' => 'การสร้าง แก้ไข และจัดการหมวดหมู่',
    'backoffice-write-products' => 'อนุญาติให้สร้าง แก้ไข และจัดการสินค้าในระบบ Back Office',
    'backoffice-read-products' => 'อนุญาตการเข้าถึงเพื่อดูรายการสินค้าและข้อมูลสินค้าโดยละเอียดในระบบ Back Office',
    'shop-read-reports' => 'อ่านข้อมูลและรายงาน',
    'shop-socials' => 'แก้ไขร้านค้าโซเชียลเน็ตเวิร์ก',
    'shop-accounts' => 'แก้ไขและลบบัญชีการเงินที่เชื่อมโยงกับร้านค้า',
    'shop-menus' => 'แก้ไขเมนูร้านค้า',
    'shop-pages' => 'แก้ไขหน้าร้านค้า',
    'shop-warehouse' => 'แก้ไขโกดังเก็บของ',
    'shop-permissions' => 'ดูและแก้ไขการเข้าถึงร้านค้า',
    'shop-process-center' => 'จัดการคำสั่งซื้อที่ได้รับ',
    'shop-profile' => 'จัดการโปรไฟล์ร้านค้า',
    'shop-discount-code' => 'จัดการรหัสส่วนลด',
    'shop-coupon' => 'จัดการคูปอง',
    'shop-offer' => 'จัดการข้อเสนอ',
    'shop-cashback' => 'จัดการเงินคืน',
    'shop-lottery' => 'จัดการลอตเตอรี่',
    'shop-community' => 'จัดการชุมชน',
    'shop-customers' => 'จัดการลูกค้า',
    'shop-ribbon' => 'จัดการการสมัครใช้งาน Ribbon',
    'community-read' => 'อ่านชุมชน Selldone',
    'community-write' => 'เขียนชุมชนขายเสร็จแล้ว',
    'profile-write' => 'เขียนข้อมูลโปรไฟล์ผู้ใช้',
    'vendor-read' => 'การเข้าถึงการดำเนินการปฏิบัติตามคำสั่งซื้อของผู้ขาย',
    'vendor-write' => 'เปลี่ยนแปลงคำสั่งซื้อ การชำระเงิน และข้อมูลอื่น ๆ ของผู้ขาย',
    'connect-providers' => 'เพิ่ม อ่าน และเขียนเชื่อมต่อผู้ให้บริการ',
    'personal-identification' => 'อ่านข้อมูลส่วนตัว การเข้าถึงและการกำหนดค่าบัญชี',
    'accounts' => 'เข้าถึงกระเป๋าเงิน อ่านรายการธุรกรรมและประวัติการเติมเงิน',
    'shop-add' => 'เพิ่มร้านค้าใหม่',
    'shop-delete' => 'ลบร้านค้าออก',
    'shop-ai-write' => 'ช่วยให้ผู้ใช้สามารถดำเนินการคำสั่ง AI ได้',
    'shop-ai-read' => 'ช่วยให้ผู้ใช้สามารถเข้าถึงข้อมูล AI ได้โดยไม่ต้องดำเนินการคำสั่ง',
    'vendor-payment' => 'อนุญาตให้ผู้ใช้งานเพิ่มบันทึกการชำระเงินสำหรับผู้ขายหรือโอนเงินผ่านบัญชีที่เชื่อมต่อเช่น Stripe Connect',
    'company-read' => 'อนุญาตให้อ่านข้อมูลโปรไฟล์ธุรกิจ',
    'company-write' => 'อนุญาตให้อ่านและเขียนข้อมูลโปรไฟล์ธุรกิจ',
    'agency-read' => 'ช่วยให้สามารถอ่านข้อมูลหน่วยงานได้',
    'agency-write' => 'ช่วยให้สามารถอ่านและเขียนข้อมูลหน่วยงานได้',
    'note-read' => 'อนุญาตให้อ่านหมายเหตุร้านค้า',
    'note-write' => 'ช่วยให้สามารถอ่านและเขียนบันทึกร้านค้าได้',
    'developer-read' => 'อนุญาตให้อ่านสินทรัพย์ของนักพัฒนา',
    'developer-write' => 'อนุญาตให้อ่านและเขียนสินทรัพย์ของนักพัฒนา',
    'tokens-read' => 'อ่านโทเค็น OAuth และไคลเอนต์',
    'tokens-write' => 'เขียนโทเค็น OAuth และไคลเอนต์',
];
