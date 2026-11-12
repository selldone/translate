<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administrator doirasi.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Cheklangan investor kirish.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Foydalanuvchi profili tafsilotlarini o\'qing.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Telefon raqamini o\'qing.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Saqlangan manzillarni o\'qing va yangilang.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Foydalanuvchi profilini yangilang.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Buyurtmalarni joylashtirish.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Buyurtmalar tarixini ko\'rish.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Sovg\'a kartalariga kirish.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Maqolalarni tahrirlash.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Bildirishnomalarni boshqarish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Do\'konlar ro\'yxatini ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Do\'kon tafsilotlarini tahrirlash.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Yangi do\'kon qo\'shing.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Do\'konni o\'chirish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Yordam chiptalarini boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Sovg\'a kartalarini boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Sovg\'a kartalarini ko\'ring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Tez-tez so\'raladigan savollarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Tez-tez so\'raladigan savollarni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kategoriyalarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Kategoriyalarni ko\'rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Mahsulotlarni boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Mahsulotlarni ko\'rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Hisobotlarni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Moliyaviy hisoblarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Moliyaviy hisoblarni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Do\'kon sahifalarini tahrirlash.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Do\'kon sahifalarini ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Omborni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Omborni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Xodimlarning kirishini boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Xodimlarning ruxsatini ko\'ring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Buyurtmalarni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Buyurtmalarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Biznes profilini boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Biznes profilini ko\'ring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Chegirma kodlarini boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Chegirma kodlarini ko\'ring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Kuponlarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Kuponlarni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Takliflarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Takliflarni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Keshbeklarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Keshbeklarni ko\'rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Lotereyalarni boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Lotereyalarni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Jamiyatni boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Jamiyatni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Mijozlarni boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Mijozlarni ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Obunalarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Obunalarni ko‘rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Sotuvchining buyurtmalarini ko\'rish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Sotuvchining buyurtmalari va to\'lovlarini boshqaring.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Ulanish provayderlarini boshqaring.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Ulanish provayderlarini ko\'rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI buyruqlarini bajaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI ma\'lumotlarini ko\'rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Sotuvchi to\'lovlarini boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Sotuvchi to\'lovlarini ko\'rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Biznes profilini ko\'ring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Biznes profilini boshqaring.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Agentlik ma\'lumotlarini ko\'rish.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Agentlik ma\'lumotlarini boshqarish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Do\'kon yozuvlarini ko\'ring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Do\'kon qaydlarini boshqaring.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Ishlab chiquvchi aktivlarini ko‘rish.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Ishlab chiquvchi aktivlarini boshqaring.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Shaxsiy ma\'lumotlar va hisob sozlamalariga kirish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Hamyon va tranzaktsiyalarni boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Hamyon operatsiyalarini ko\'rish.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth tokenlari va mijozlarini ko\'ring.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth tokenlari va mijozlarini boshqaring.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Xavfsizlik sozlamalarini boshqaring.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Filiallarni boshqaring.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Filiallarni ko\'rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Chop etish shablonlarini boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Chop etish shablonlarini ko\'rish.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Sharhlarni boshqarish.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Sharhlarni ko\'rish.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Monetizatsiya ma\'lumotlarini ko\'rish.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Monetizatsiya ma\'lumotlarini boshqarish.',



    'profile' => 'Profil ma\'lumotlarini o\'qing, jumladan ism, elektron pochta manzili, rasm va autentifikatsiya holati.',
    'phone' => 'Aloqa raqamiga kirish',
    'address' => 'Saqlangan manzillar kitobidan manzilni o\'qing va tahrirlang',
    'buy' => 'Buyurtma va xarid qilish.',
    'order-history' => 'Buyurtma tarixini o\'qing.',
    'my-gift-cards' => 'Sovg\'a kartalarimga kirish.',
    'articles' => 'Maqolalarni tahrirlash.',
    'notifications' => 'Bildirishnomalarni yuborish va qabul qilish.',
    'read-shops' => 'Do\'konlar ro\'yxatini o\'qing.',
    'shop-edit' => 'Tahrirlash ruxsatini saqlash.',
    'shop-contacts' => 'Aloqa shakllarini qabul qilish va tahrirlash.',
    'shop-gift-cards' => 'Kartochkalarni yaratish, tahrirlash va boshqarish.',
    'shop-faqs' => 'Tez-tez beriladigan savollarni yarating, tahrirlang va boshqaring.',
    'shop-categories' => 'Kategoriyalarni yaratish, tahrirlash va boshqarish.',
    'backoffice-write-products' => 'Back-ofisda mahsulotlarni yaratish, tahrirlash va boshqarishga ruxsat bering.',
    'backoffice-read-products' => 'Orqa ofisda mahsulotlar ro\'yxatini va batafsil mahsulot ma\'lumotlarini ko\'rishga ruxsat bering.',
    'shop-read-reports' => 'Ma\'lumot va hisobotlarni o\'qing.',
    'shop-socials' => 'Do\'konning ijtimoiy tarmoqlarini tahrirlash.',
    'shop-accounts' => 'Do\'konga bog\'langan moliyaviy hisoblarni tahrirlash va o\'chirish.',
    'shop-menus' => 'Do\'kon menyularini tahrirlash.',
    'shop-pages' => 'Do\'kon sahifalarini tahrirlash.',
    'shop-warehouse' => 'Do\'kon omborini tahrirlash',
    'shop-permissions' => 'Doʻkonga kirishni koʻrish va tahrirlash.',
    'shop-process-center' => 'Qabul qilingan buyurtmalarni boshqarish.',
    'shop-profile' => 'Do\'kon profillarini boshqaring.',
    'shop-discount-code' => 'Chegirma kodlarini boshqaring.',
    'shop-coupon' => 'Kuponlarni boshqarish.',
    'shop-offer' => 'Takliflarni boshqarish.',
    'shop-cashback' => 'Keshbeklarni boshqarish.',
    'shop-lottery' => 'Lotereyalarni boshqaring.',
    'shop-community' => 'Jamiyatni boshqaring.',
    'shop-customers' => 'Mijozlarni boshqaring.',
    'shop-ribbon' => 'Ribbon obunalarini boshqarish.',
    'community-read' => 'Selldone hamjamiyatini o\'qing.',
    'community-write' => 'Sotilgan hamjamiyatni yozing.',
    'profile-write' => 'Foydalanuvchi profili ma\'lumotlarini yozing.',
    'vendor-read' => 'Sotuvchining buyurtmalarini bajarish harakatlariga kirish.',
    'vendor-write' => 'Buyurtmalarni, to\'lovlarni va sotuvchining boshqa ma\'lumotlarini o\'zgartirish.',
    'connect-providers' => 'Ulanish provayderlarini qo\'shish, o\'qish va yozish.',
    'personal-identification' => 'Shaxsiy ma\'lumotlar, kirishlar va hisob sozlamalarini o\'qing.',
    'accounts' => 'Hamyonlarga kirish, tranzaktsiyalarni o\'qish va to\'ldirish tarixi.',
    'shop-add' => 'Yangi do\'kon qo\'shing.',
    'shop-delete' => 'Do\'konni olib tashlang.',
    'shop-ai-write' => 'Foydalanuvchiga AI buyruqlarini bajarishga imkon beradi.',
    'shop-ai-read' => 'Foydalanuvchiga buyruqlarni bajarmasdan AI ma\'lumotlariga kirish imkonini beradi.',
    'vendor-payment' => 'Foydalanuvchiga sotuvchilar uchun toʻlovlar qaydlarini qoʻshish yoki Stripe Connect kabi bogʻlangan hisoblari orqali pul oʻtkazish imkonini beradi.',
    'company-read' => 'Biznes profili ma\'lumotlarini o\'qish imkonini beradi.',
    'company-write' => 'Biznes profili ma\'lumotlarini o\'qish va yozish imkonini beradi.',
    'agency-read' => 'Agentlik ma\'lumotlarini o\'qish imkonini beradi.',
    'agency-write' => 'Agentlik ma\'lumotlarini o\'qish va yozish imkonini beradi.',
    'note-read' => 'Do\'kon yozuvlarini o\'qish imkonini beradi.',
    'note-write' => 'Do\'kon yozuvlarini o\'qish va yozish imkonini beradi.',
    'developer-read' => 'Ishlab chiquvchilar aktivlarini o\'qish imkonini beradi.',
    'developer-write' => 'Ishlab chiquvchilar aktivlarini o\'qish va yozish imkonini beradi.',
    'tokens-read' => 'Oauth tokenlari va mijozlarini o\'qing.',
    'tokens-write' => 'Oauth tokenlari va mijozlarini yozing.',
];
