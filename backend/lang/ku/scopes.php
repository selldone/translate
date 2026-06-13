<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Qada rêveberê Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Gihîştina veberhênerê sînorkirî.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Agahiyên profîla bikarhêner bixwînin.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Hejmara têlefonê bixwînin.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Navnîşanên tomarkirî bixwînin û nûve bikin.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Profîla bikarhênerê nûve bikin.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Cihê fermanan.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Dîroka fermanê bibînin.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Gihîştina kartên diyariyê.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Gotaran biguherîne.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Agahdariyên birêvebirin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Lîsteya dikanê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Detayên dikanê biguherînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Dikana nû zêde bikin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Dikanê jêbirin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Bilêtên piştgiriyê birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Kartên diyariyê birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Kartên diyariyê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Pirs û Pirsiyan Birêve Bikin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Pirsên Pirsiyan Binêrin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kategorî birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Kategorî bibînin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Hilberan birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Berheman bibînin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Raporan bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Hesabên darayî birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Hesabên darayî bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Rûpelên dikanê biguherînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Rûpelên dikanê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Depoyê bi rê ve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Depoyê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Rêvekirina gihîştina karmendan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Gihîştina karmendan bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Dîtina fermanan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Birêvebirina fermanan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Profîla karsaziyê birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Profîla karsaziyê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Kodên dakêşanê birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Kodên dakêşanê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Manage coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'View coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Pêşniyarên birêvebirin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Pêşniyarên xwe bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Birêvebirina cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Binêre cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Manage loto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Binêre loto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Civakê birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Civatê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Birêvebirina xerîdar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Binêre xerîdaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Birêvebirina abonetiyê.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Binêre abonetiyê.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Fermanên firoşkarê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Ferman û dravdana firoşkaran birêve bibin.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Pêşkêşkerên girêdanê birêve bibin.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Pêşkêşkerên girêdanê bibînin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Fermanên AI-ê bicîh bikin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Agahdariya AI-ê bibînin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Birêvebirina dravdana firoşkaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Binêre dayinên vendor.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Profîla karsaziyê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Profîla karsaziyê birêve bibin.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Agahdariya ajansê bibînin.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Agahdariya ajansa rêvebirin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Nîşaneyên dikanê bibînin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Manage notes shop.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Taybetmendiyên pêşdebiran bibînin.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Malên pêşdebiran birêve bibin.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Gihîştina agahdariya kesane û mîhengên hesabê.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Wallet û danûstendinan birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Danûstendinên walletê bibînin.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Nîşan û xerîdarên OAuth bibînin.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Nîşan û xerîdarên OAuth birêve bibin.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Mîhengên ewlehiyê birêve bibin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Pargîdaniyên rêvebirin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Parmendan bibînin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Şablonên çapkirinê birêve bibin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Şablonên çapkirinê bibînin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Rêvebirina nirxandinan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'View reviews.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Agahdariya diravkirinê bibînin.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Agahdariya diravkirinê birêve bibin.',



    'profile' => 'Agahdariya profîlê tevî nav, navnîşana e-nameyê, wêne û rewşa erêkirinê bixwînin.',
    'phone' => 'Gihîştina hejmara pêwendiyê',
    'address' => 'Navnîşana ji pirtûka navnîşana tomarkirî bixwînin û biguherînin',
    'buy' => 'Checkout û emir cihê.',
    'order-history' => 'Dîroka fermanê bixwînin.',
    'my-gift-cards' => 'Gihîştina kartên diyariyên min.',
    'articles' => 'Gotaran biguherîne.',
    'notifications' => 'Agahdariyê bişînin û bistînin.',
    'read-shops' => 'Lîsteya Store bixwînin.',
    'shop-edit' => 'Gihîştina guherandinê hilîne.',
    'shop-contacts' => 'Formên têkiliyê bistînin û biguherînin.',
    'shop-gift-cards' => 'Afirandin, Veguherandin û Birêvebirina Kartan.',
    'shop-faqs' => 'Pirsên ku pir caran têne pirsîn biafirînin, biguherînin û rêvebirin.',
    'shop-categories' => 'Afirandin, Veguherandin û Birêvebirina Kategoriyan.',
    'backoffice-write-products' => 'Destûra afirandin, guherandin û birêvebirina hilberan di nivîsgeha paşîn de bidin.',
    'backoffice-read-products' => 'Destûr bidin ku hûn navnîşa hilberan û agahdariya hilberê ya berfireh li nivîsgeha paşîn bibînin.',
    'shop-read-reports' => 'Agahdarî û raporan bixwînin.',
    'shop-socials' => 'Torên civakî yên dikanê biguherînin.',
    'shop-accounts' => 'Hesabên darayî yên girêdayî dikanê biguherînin û jêbirin.',
    'shop-menus' => 'Pêşekên dikanê biguherînin.',
    'shop-pages' => 'Rûpelên dikanê biguherînin.',
    'shop-warehouse' => 'Edit Store Warehouse',
    'shop-permissions' => 'Gihîştina dikanê bibînin û biguherînin.',
    'shop-process-center' => 'Fermanên wergirtî birêve bibin.',
    'shop-profile' => 'Profîlên dikanê birêve bibin.',
    'shop-discount-code' => 'Kodên dakêşanê birêve bibin.',
    'shop-coupon' => 'Manage coupons.',
    'shop-offer' => 'Pêşniyarên birêvebirin.',
    'shop-cashback' => 'Birêvebirina cashbacks.',
    'shop-lottery' => 'Manage loto.',
    'shop-community' => 'Civakê birêve bibin.',
    'shop-customers' => 'Birêvebirina xerîdar.',
    'shop-ribbon' => 'Aboneyên Ribbon birêve bibin.',
    'community-read' => 'Civata Selldone bixwînin.',
    'community-write' => 'Civata selldone binivîse.',
    'profile-write' => 'Agahdariya profîla bikarhênerê binivîse.',
    'vendor-read' => 'Gihîştina çalakiyên bicihanîna fermanên firoşkar.',
    'vendor-write' => 'Ferman, drav û agahdariyên din ên firoşkar biguhezînin.',
    'connect-providers' => 'Pêşkêşkerên girêdanê zêde bikin, bixwînin û binivîsin.',
    'personal-identification' => 'Agahiyên kesane, gihîştinan, û veavakirina hesabê bixwînin.',
    'accounts' => 'Gihîştina berîkan, xwendina danûstendinan û dîrokên top-up.',
    'shop-add' => 'Dikana nû zêde bikin.',
    'shop-delete' => 'Dikanek derxînin.',
    'shop-ai-write' => 'Destûrê dide bikarhêner ku emrên AI-ê bicîh bîne.',
    'shop-ai-read' => 'Destûrê dide bikarhêner ku bêyî pêkanîna fermanan bigihîje agahdariya AI-ê.',
    'vendor-payment' => 'Destûrê dide bikarhêner ku tomarên dravdanê ji bo firoşkaran zêde bike an drav bi navgîniya hesabên xwe yên girêdayî mîna Stripe Connect veguhezîne.',
    'company-read' => 'Destûrê dide ku agahdariya profîla karsaziyê bixwînin.',
    'company-write' => 'Destûrê dide ku agahdariya profîla karsaziyê bixwînin û binivîsin.',
    'agency-read' => 'Destûrê dide ku agahdariya ajansê bixwîne.',
    'agency-write' => 'Destûrê dide ku agahdariya ajansê bixwînin û binivîsin.',
    'note-read' => 'Destûrê dide xwendina notên dikanê.',
    'note-write' => 'Destûrê dide xwendin û nivîsandina notên dikanê.',
    'developer-read' => 'Destûrê dide xwendina hebûnên pêşdebiran.',
    'developer-write' => 'Destûrê dide xwendin û nivîsandina hebûnên pêşdebiran.',
    'tokens-read' => 'Nîşan û xerîdarên Oauth bixwînin.',
    'tokens-write' => 'Nîşan û xerîdarên Oauth binivîsin.',
];
