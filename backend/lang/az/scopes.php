<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administrator əhatə dairəsi.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Məhdud investor girişi.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'İstifadəçi profili təfərrüatlarını oxuyun.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Telefon nömrəsini oxuyun.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Saxlanmış ünvanları oxuyun və yeniləyin.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'İstifadəçi profilini yeniləyin.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Sifariş verin.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Sifariş tarixçəsinə baxın.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Hədiyyə kartlarına daxil olun.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Məqalələri redaktə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Bildirişləri idarə edin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Mağaza siyahısına baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Mağaza detallarını redaktə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Yeni mağaza əlavə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Mağazanı silin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Dəstək biletlərini idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Hədiyyə kartlarını idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Hədiyyə kartlarına baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Tez-tez verilən sualları idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Tez-tez verilən suallara baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kateqoriyaları idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Kateqoriyalara baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Məhsulları idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Məhsullara baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Hesabatlara baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Maliyyə hesablarını idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Maliyyə hesablarına baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Mağaza səhifələrini redaktə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Mağaza səhifələrinə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Anbarı idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Anbara bax.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'İşçilərin girişini idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'İşçilərin girişinə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Sifarişlərə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Sifarişləri idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Biznes profilini idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Biznes profilinə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Endirim kodlarını idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Endirim kodlarına baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Kuponları idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Kuponlara baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Təklifləri idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Təkliflərə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Cashbackləri idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Cashbacklərə baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Lotereyaları idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Lotereyalara baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Cəmiyyəti idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'İcmaya baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Müştəriləri idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Müştərilərə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Abunəlikləri idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Abunəliklərə baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Satıcı sifarişlərinə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Satıcı sifarişlərini və ödənişlərini idarə edin.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Bağlantı provayderlərini idarə edin.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Bağlantı təminatçılarına baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI əmrlərini yerinə yetirin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI məlumatlarına baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Satıcı ödənişlərini idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Satıcı ödənişlərinə baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Biznes profilinə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Biznes profilini idarə edin.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Agentlik məlumatlarına baxın.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Agentlik məlumatlarını idarə edin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Mağaza qeydlərinə baxın.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Mağaza qeydlərini idarə edin.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Tərtibatçı aktivlərinə baxın.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Tərtibatçı aktivlərini idarə edin.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Şəxsi məlumatlara və hesab parametrlərinə daxil olun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Pul kisəsi və əməliyyatları idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Pul kisəsi əməliyyatlarına baxın.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth tokenlərinə və müştərilərinə baxın.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth tokenlərini və müştərilərini idarə edin.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Təhlükəsizlik parametrlərini idarə edin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Filialları idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Filiallara baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Çap şablonlarını idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Çap şablonlarına baxın.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Rəyləri idarə edin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Rəylərə baxın.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Monetizasiya məlumatlarına baxın.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Monetizasiya məlumatlarını idarə edin.',



    'profile' => 'Ad, e-poçt ünvanı, şəkil və autentifikasiya statusu daxil olmaqla profil məlumatını oxuyun.',
    'phone' => 'Əlaqə nömrəsinə giriş',
    'address' => 'Saxlanmış ünvan kitabından ünvanı oxuyun və redaktə edin',
    'buy' => 'Sifariş və Mağaza Sifarişi.',
    'order-history' => 'Sifariş tarixçəsini oxuyun.',
    'my-gift-cards' => 'Hədiyyə kartlarıma giriş.',
    'articles' => 'Məqalələri redaktə edin.',
    'notifications' => 'Bildirişlər göndərin və qəbul edin.',
    'read-shops' => 'Mağaza siyahısını oxuyun.',
    'shop-edit' => 'Mağaza redaktə girişi.',
    'shop-contacts' => 'Əlaqə formalarını qəbul edin və redaktə edin.',
    'shop-gift-cards' => 'Kartların yaradılması, redaktə edilməsi və idarə edilməsi.',
    'shop-faqs' => 'Tez-tez verilən sualları yaradın, redaktə edin və idarə edin.',
    'shop-categories' => 'Kateqoriyaların yaradılması, redaktə edilməsi və idarə edilməsi.',
    'backoffice-write-products' => 'Arxa ofisdə məhsulların yaradılması, redaktəsi və idarə edilməsinə icazə verin.',
    'backoffice-read-products' => 'Arxa ofisdə məhsullar siyahısına və ətraflı məhsul məlumatlarına baxmaq üçün giriş icazəsi verin.',
    'shop-read-reports' => 'Məlumat və hesabatları oxuyun.',
    'shop-socials' => 'Mağaza sosial şəbəkələrini redaktə edin.',
    'shop-accounts' => 'Mağaza ilə əlaqəli maliyyə hesablarını redaktə edin və silin.',
    'shop-menus' => 'Mağaza menyularını redaktə edin.',
    'shop-pages' => 'Mağaza səhifələrini redaktə edin.',
    'shop-warehouse' => 'Mağaza Anbarını redaktə edin',
    'shop-permissions' => 'Mağaza girişinə baxın və redaktə edin.',
    'shop-process-center' => 'Alınan sifarişləri idarə edin.',
    'shop-profile' => 'Mağaza profillərini idarə edin.',
    'shop-discount-code' => 'Endirim kodlarını idarə edin.',
    'shop-coupon' => 'Kuponları idarə edin.',
    'shop-offer' => 'Təklifləri idarə edin.',
    'shop-cashback' => 'Cashbackləri idarə edin.',
    'shop-lottery' => 'Lotereyaları idarə edin.',
    'shop-community' => 'Cəmiyyəti idarə edin.',
    'shop-customers' => 'Müştəriləri idarə edin.',
    'shop-ribbon' => 'Ribbon abunəliklərini idarə edin.',
    'community-read' => 'Selldone icmasını oxuyun.',
    'community-write' => 'Satılmış icma yazın.',
    'profile-write' => 'İstifadəçi profili məlumatlarını yazın.',
    'vendor-read' => 'Satıcı sifarişlərinin yerinə yetirilməsi hərəkətlərinə giriş.',
    'vendor-write' => 'Sifarişləri, ödənişləri və satıcının digər məlumatlarını dəyişdirin.',
    'connect-providers' => 'Bağlantı təminatçılarını əlavə edin, oxuyun və yazın.',
    'personal-identification' => 'Şəxsi məlumatları, girişləri və hesab konfiqurasiyasını oxuyun.',
    'accounts' => 'Pul kisələrinə giriş, əməliyyatları oxumaq və tarixləri doldurmaq.',
    'shop-add' => 'Yeni mağaza əlavə edin.',
    'shop-delete' => 'Mağazanı çıxarın.',
    'shop-ai-write' => 'İstifadəçiyə AI əmrlərini yerinə yetirməyə imkan verir.',
    'shop-ai-read' => 'İstifadəçiyə əmrləri yerinə yetirmədən AI məlumatlarına daxil olmaq imkanı verir.',
    'vendor-payment' => 'İstifadəçiyə satıcılar üçün ödəniş qeydlərini əlavə etmək və ya Stripe Connect kimi bağlı hesabları vasitəsilə vəsait köçürmək imkanı verir.',
    'company-read' => 'Biznes profili məlumatlarını oxumağa imkan verir.',
    'company-write' => 'Biznes profili məlumatlarını oxumağa və yazmağa imkan verir.',
    'agency-read' => 'Agentlik məlumatlarını oxumağa imkan verir.',
    'agency-write' => 'Agentlik məlumatlarını oxumağa və yazmağa imkan verir.',
    'note-read' => 'Mağaza qeydlərini oxumağa imkan verir.',
    'note-write' => 'Mağaza qeydlərini oxumağa və yazmağa imkan verir.',
    'developer-read' => 'Tərtibatçıların aktivlərini oxumağa imkan verir.',
    'developer-write' => 'Tərtibatçıların aktivlərini oxumağa və yazmağa imkan verir.',
    'tokens-read' => 'Oauth tokenlərini və müştərilərini oxuyun.',
    'tokens-write' => 'Oauth tokenlərini və müştərilərini yazın.',
];
