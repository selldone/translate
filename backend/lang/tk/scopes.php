<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administrator çäkleri.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Maýa goýujylaryň girişi çäklendirildi.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Ulanyjy profiliniň jikme-jikliklerini okaň.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Telefon belgisini okaň.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Saklanan salgylary okaň we täzeläň.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ulanyjy profilini täzeläň.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Sargytlary ýerleşdiriň.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Sargyt taryhyny görüň.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Sowgat kartlaryna giriň.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Makalalary redaktirläň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Duýduryşlary dolandyryň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Dükanlaryň sanawyny görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Dükanyň jikme-jikliklerini redaktirläň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Täze dükan goşuň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Dükany poz',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Goldaw biletlerini dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Sowgat kartlaryny dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Sowgat kartlaryny görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Sorag-jogap soraglaryny dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Sorag-jogap soraglaryny görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kategoriýalary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Kategoriýalary görmek.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Önümleri dolandyrmak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Önümleri görmek.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Hasabatlary görmek.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Maliýe hasaplaryny dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Maliýe hasaplaryny görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Dükan sahypalaryny redaktirläň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Dükan sahypalaryny görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Ammary dolandyrmak',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ammary görmek',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Işgärleriň girişini dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Işgärleriň girişini görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Sargytlary görmek.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Sargytlary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Iş profilini dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Iş profilini görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Arzanladyş kodlaryny dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Arzanladyş kodlaryny görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Talonlary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Talonlary görmek.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Teklipleri dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Teklipleri görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Nagt pullary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Nagt pullary görüň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Lotereýalary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Lotereýalary görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Jemgyýeti dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Jemgyýeti görmek.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Müşderileri dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Müşderileri görmek.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Abunalary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Abunalary görüň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Satyjy sargytlaryny görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Satyjy sargytlaryny we töleglerini dolandyryň.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Birikdiriji üpjün edijileri dolandyryň.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Birikdiriji üpjün edijileri görüň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI buýruklaryny ýerine ýetiriň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI maglumatyny görüň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Satyjy töleglerini dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Satyjy töleglerini görüň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Iş profilini görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Iş profilini dolandyryň.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Agentlik maglumatlaryny görüň.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Agentlik maglumatyny dolandyryň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Dükan belliklerini görüň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Dükan belliklerini dolandyryň.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Öndürijiniň aktiwlerini görüň.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Öndürijiniň emläklerini dolandyryň.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Şahsy maglumatlara we hasap sazlamalaryna giriň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Gapjyk we amallary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Gapjyk amallaryny görüň.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth belliklerini we müşderilerini görüň.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth belliklerini we müşderilerini dolandyryň.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Howpsuzlyk sazlamalaryny dolandyryň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Şahamçalary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Şahamçalary görüň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Çap şablonlaryny dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Çap galyplaryny görüň.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Synlary dolandyryň.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Synlary görüň.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Monetizasiýa maglumatlary görüň.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Monetizasiýa maglumatlary dolandyryň.',



    'profile' => 'Ady, e-poçta salgysy, surat we tanamaklyk ýagdaýy ýaly profil maglumatlaryny okaň.',
    'phone' => 'Aragatnaşyk belgisine giriş',
    'address' => 'Saklanan salgylar kitabyndan adresi okaň we redaktirläň',
    'buy' => 'Sargyt we dükan',
    'order-history' => 'Sargyt taryhyny okaň.',
    'my-gift-cards' => 'Sowgat kartlaryma girmek.',
    'articles' => 'Makalalary redaktirläň.',
    'notifications' => 'Habarnamalary iberiň we alyň.',
    'read-shops' => 'Dükanyň sanawyny okaň.',
    'shop-edit' => 'Dükan redaktirleme ygtyýary.',
    'shop-contacts' => 'Aragatnaşyk formalaryny alyň we redaktirläň.',
    'shop-gift-cards' => 'Kartlary döretmek, redaktirlemek we dolandyrmak.',
    'shop-faqs' => 'Frequygy-ýygydan berilýän soraglary dörediň, redaktirläň we dolandyryň.',
    'shop-categories' => 'Kategoriýalary döretmek, redaktirlemek we dolandyrmak.',
    'backoffice-write-products' => 'Yzky ofisde önümleri döretmäge, redaktirlemäge we dolandyrmaga ygtyýar beriň.',
    'backoffice-read-products' => 'Önümleriň sanawyny we önümiň jikme-jik maglumatyny arka ofisde görmäge ygtyýar beriň.',
    'shop-read-reports' => 'Maglumatlary we hasabatlary okaň.',
    'shop-socials' => 'Dükan sosial ulgamlaryny redaktirläň.',
    'shop-accounts' => 'Dükan bilen baglanyşykly maliýe hasaplaryny redaktirläň we pozuň.',
    'shop-menus' => 'Dükan menýusyny redaktirläň.',
    'shop-pages' => 'Dükan sahypalaryny redaktirläň.',
    'shop-warehouse' => 'Dükan ammaryny redaktirläň',
    'shop-permissions' => 'Dükana girişi görmek we redaktirlemek.',
    'shop-process-center' => 'Alnan sargytlary dolandyrmak.',
    'shop-profile' => 'Dükanyň profilini dolandyryň.',
    'shop-discount-code' => 'Arzanladyş kodlaryny dolandyryň.',
    'shop-coupon' => 'Talonlary dolandyryň.',
    'shop-offer' => 'Teklipleri dolandyryň.',
    'shop-cashback' => 'Nagt pullary dolandyryň.',
    'shop-lottery' => 'Lotereýalary dolandyryň.',
    'shop-community' => 'Jemgyýeti dolandyryň.',
    'shop-customers' => 'Müşderileri dolandyryň.',
    'shop-ribbon' => 'Lenta abunalaryny dolandyryň.',
    'community-read' => 'Selldone jemgyýetini okaň.',
    'community-write' => 'Selldone jemgyýetini ýazyň.',
    'profile-write' => 'Ulanyjy profil maglumatyny ýazyň.',
    'vendor-read' => 'Satyjy sargytlarynyň ýerine ýetirilişine giriş.',
    'vendor-write' => 'Satyjynyň sargytlaryny, tölegini we beýleki maglumatlaryny üýtgediň.',
    'connect-providers' => 'Birikdiriji üpjün edijileri goşuň, okaň we ýazyň.',
    'personal-identification' => 'Şahsy maglumatlary, girişleri we hasap sazlamalaryny okaň.',
    'accounts' => 'Gapjyklara girmek, amallary we goşmaça taryhy okamak.',
    'shop-add' => 'Täze dükan goşuň.',
    'shop-delete' => 'Dükany aýyryň.',
    'shop-ai-write' => 'Ulanyja AI buýruklaryny ýerine ýetirmäge mümkinçilik berýär.',
    'shop-ai-read' => 'Ulanyja buýruklary ýerine ýetirmän AI maglumatlaryna girmäge mümkinçilik berýär.',
    'vendor-payment' => 'Ulanyja satyjylar üçin töleg ýazgylaryny goşmaga ýa-da “Stripe Connect” ýaly birikdirilen hasaplary arkaly serişdeleri geçirmäge mümkinçilik berýär.',
    'company-read' => 'Işewürlik maglumatlary okamaga mümkinçilik berýär.',
    'company-write' => 'Işewürlik maglumatlary okamaga we ýazmaga mümkinçilik berýär.',
    'agency-read' => 'Agentlik maglumatyny okamaga mümkinçilik berýär.',
    'agency-write' => 'Agentlik maglumatyny okamaga we ýazmaga mümkinçilik berýär.',
    'note-read' => 'Dükan belliklerini okamaga mümkinçilik berýär.',
    'note-write' => 'Dükan belliklerini okamaga we ýazmaga mümkinçilik berýär.',
    'developer-read' => 'Döredijileriň aktiwlerini okamaga mümkinçilik berýär.',
    'developer-write' => 'Döredijileriň aktiwlerini okamaga we ýazmaga mümkinçilik berýär.',
    'tokens-read' => 'Oauth belliklerini we müşderilerini okaň.',
    'tokens-write' => 'Oauth belliklerini we müşderilerini ýazyň.',
];
