<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone yönetici kapsamı.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Kısıtlı yatırımcı erişimi.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Kullanıcı profili ayrıntılarını okuyun.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Telefon numarasını okuyun.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Kaydedilen adresleri okuyun ve güncelleyin.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Kullanıcı profilini güncelleyin.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Sipariş verin.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Sipariş geçmişini görüntüleyin.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Hediye kartlarına erişin.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Makaleleri düzenleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Bildirimleri yönetin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Mağaza listesini görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Mağaza ayrıntılarını düzenleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Yeni mağaza ekle.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Mağazayı sil.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Destek biletlerini yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Hediye kartlarını yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Hediye kartlarını görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'SSS\'leri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'SSS\'leri görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kategorileri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Kategorileri görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Ürünleri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Ürünleri görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Raporları görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Finansal hesapları yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Finansal hesapları görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Mağaza sayfalarını düzenleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Mağaza sayfalarını görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Depoyu yönet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Depoyu görüntüle.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Personel erişimini yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Personel erişimini görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Siparişleri görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Siparişleri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'İşletme profilini yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'İşletme profilini görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'İndirim kodlarını yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'İndirim kodlarını görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Kuponları yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Kuponları görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Teklifleri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Teklifleri görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Para iadelerini yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Para iadelerini görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Piyangoları yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Piyangoları görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Topluluğu yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Topluluğu görüntüle.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Müşterileri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Müşterileri görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Abonelikleri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Abonelikleri görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Satıcı siparişlerini görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Satıcı siparişlerini ve ödemelerini yönetin.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Bağlantı sağlayıcılarını yönetin.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Bağlantı sağlayıcılarını görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI komutlarını yürütün.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI bilgilerini görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Satıcı ödemelerini yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Satıcı ödemelerini görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'İşletme profilini görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'İşletme profilini yönetin.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Ajans bilgilerini görüntüleyin.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Ajans bilgilerini yönetin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Mağaza notlarını görüntüleyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Mağaza notlarını yönetin.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Geliştirici varlıklarını görüntüleyin.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Geliştirici varlıklarını yönetin.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Kişisel bilgilere ve hesap ayarlarına erişin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Cüzdanı ve işlemleri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Cüzdan işlemlerini görüntüleyin.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth belirteçlerini ve istemcilerini görüntüleyin.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth belirteçlerini ve istemcilerini yönetin.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Güvenlik ayarlarını yönetin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Bağlı kuruluşları yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Bağlı kuruluşları görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Yazdırma şablonlarını yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Yazdırma şablonlarını görüntüleyin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'İncelemeleri yönetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'İncelemeleri görüntüleyin.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Para kazanma bilgilerini görüntüleyin.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Para kazanma bilgilerini yönetin.',



    'profile' => 'Ad, e-posta adresi, resim ve kimlik doğrulama durumu dahil olmak üzere profil bilgilerini okuyun.',
    'phone' => 'İletişim numarası erişimi',
    'address' => 'Kayıtlı adres defterinden adresi okuyun ve düzenleyin',
    'buy' => 'Sipariş ve Mağaza Siparişi.',
    'order-history' => 'Sipariş geçmişini okuyun.',
    'my-gift-cards' => 'Hediye kartlarıma erişim.',
    'articles' => 'Makaleleri Düzenle.',
    'notifications' => 'Bildirimler gönderin ve alın.',
    'read-shops' => 'Mağaza Listesini Okuyun.',
    'shop-edit' => 'Mağaza düzenleme erişimi.',
    'shop-contacts' => 'İletişim formlarını alın ve düzenleyin.',
    'shop-gift-cards' => 'Kart Oluşturma, Düzenleme ve Yönetme.',
    'shop-faqs' => 'Sık sorulan soruları oluşturun, düzenleyin ve yönetin.',
    'shop-categories' => 'Kategoriler Oluşturma, Düzenleme ve Yönetme.',
    'backoffice-write-products' => 'Back office\'te ürünlerin oluşturulmasını, düzenlenmesini ve yönetilmesini yetkilendirin.',
    'backoffice-read-products' => 'Arka ofisteki ürün listesini ve detaylı ürün bilgilerini görüntüleme erişimini yetkilendirin.',
    'shop-read-reports' => 'Bilgi ve raporları okuyun.',
    'shop-socials' => 'Mağaza sosyal ağlarını düzenleyin.',
    'shop-accounts' => 'Mağaza bağlantılı finansal hesapları düzenleyin ve silin.',
    'shop-menus' => 'Mağaza menülerini düzenleyin.',
    'shop-pages' => 'Mağaza sayfalarını düzenleyin.',
    'shop-warehouse' => 'Mağaza Deposunu Düzenle',
    'shop-permissions' => 'Mağaza erişimini görüntüleyin ve düzenleyin.',
    'shop-process-center' => 'Alınan siparişleri yönetin.',
    'shop-profile' => 'Mağaza profillerini yönetin.',
    'shop-discount-code' => 'İndirim kodlarını yönetin.',
    'shop-coupon' => 'Kuponları yönetin.',
    'shop-offer' => 'Teklifleri yönetin.',
    'shop-cashback' => 'Geri ödemeleri yönetin.',
    'shop-lottery' => 'Piyangoları yönetin.',
    'shop-community' => 'Topluluğu yönetin.',
    'shop-customers' => 'Müşterileri yönetin.',
    'shop-ribbon' => 'Ribbon aboneliklerini yönetin.',
    'community-read' => 'Selldone topluluğunu okuyun.',
    'community-write' => 'Yaz selldone topluluğu.',
    'profile-write' => 'Kullanıcı profil bilgilerini yazın.',
    'vendor-read' => 'Tedarikçi siparişlerinin yerine getirilmesi eylemlerine erişim.',
    'vendor-write' => 'Satıcının sipariş, ödeme ve diğer bilgilerini değiştirin.',
    'connect-providers' => 'Bağlantı sağlayıcılarını ekleyin, okuyun ve yazın.',
    'personal-identification' => 'Kişisel bilgileri, erişimleri ve hesap yapılandırmasını okuyun.',
    'accounts' => 'Cüzdanlara erişim, işlem ve yükleme geçmişlerini okuma.',
    'shop-add' => 'Yeni mağaza ekle.',
    'shop-delete' => 'Bir dükkanı kaldır.',
    'shop-ai-write' => 'Kullanıcının AI komutlarını yürütmesine olanak tanır.',
    'shop-ai-read' => 'Kullanıcının komut çalıştırmadan yapay zeka bilgilerine erişebilmesini sağlar.',
    'vendor-payment' => 'Kullanıcının satıcılar için ödeme kayıtları eklemesine veya Stripe Connect gibi bağlı hesapları üzerinden para transferi yapmasına olanak tanır.',
    'company-read' => 'İşletme profili bilgilerinin okunmasını sağlar.',
    'company-write' => 'İşletme profili bilgilerinin okunmasını ve yazılmasını sağlar.',
    'agency-read' => 'Acente bilgilerinin okunmasını sağlar.',
    'agency-write' => 'Acente bilgilerinin okunmasını ve yazılmasını sağlar.',
    'note-read' => 'Mağaza notlarını okumanızı sağlar.',
    'note-write' => 'Mağaza notlarının okunmasını ve yazılmasını sağlar.',
    'developer-read' => 'Geliştiricilerin varlıklarının okunmasına izin verir.',
    'developer-write' => 'Geliştiricilerin varlıklarının okunmasına ve yazılmasına olanak tanır.',
    'tokens-read' => 'Oauth tokenlarını ve istemcilerini okuyun.',
    'tokens-write' => 'Oauth token ve istemcilerini yazın.',
];
