<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Shtrirja e administratorit Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Akses i kufizuar i investitorëve.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lexoni detajet e profilit të përdoruesit.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Lexoni numrin e telefonit.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Lexoni dhe përditësoni adresat e ruajtura.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Përditëso profilin e përdoruesit.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Vendosni porosi.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Shikoni historikun e porosive.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Qasuni te kartat e dhuratave.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Redaktoni artikuj.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Menaxho njoftimet.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Shikoni listën e dyqaneve.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Redakto detajet e dyqanit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Shto dyqan të ri.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Fshi dyqanin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Menaxho biletat e mbështetjes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Menaxho kartat e dhuratave.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Shikoni kartat e dhuratave.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Menaxho FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Shiko FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Menaxho kategoritë.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Shikoni kategoritë.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Menaxhoni produktet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Shikoni produktet.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Shiko raportet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Menaxhoni llogaritë financiare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Shikoni llogaritë financiare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Redaktoni faqet e dyqaneve.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Shikoni faqet e dyqaneve.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Menaxhoni depon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Shiko depo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Menaxhoni aksesin e stafit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Shikoni aksesin e stafit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Shikoni porositë.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Menaxhoni porositë.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Menaxho profilin e biznesit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Shiko profilin e biznesit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Menaxho kodet e zbritjes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Shikoni kodet e zbritjes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Menaxhoni kuponët.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Shikoni kuponat.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Menaxho ofertat.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Shiko ofertat.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Menaxhoni kthimin e parave të gatshme.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Shikoni kthimet e parave të gatshme.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Menaxhoni llotaritë.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Shiko llotaritë.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Menaxhoni komunitetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Shiko komunitetin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Menaxhoni klientët.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Shiko klientët.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Menaxho abonimet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Shikoni abonimet.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Shikoni porositë e shitësve.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Menaxhoni porositë dhe pagesat e shitësve.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Menaxho ofruesit e lidhjes.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Shiko ofruesit e lidhjes.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Ekzekutoni komandat e AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Shikoni informacionin e AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Menaxho pagesat e shitësve.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Shikoni pagesat e shitësve.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Shiko profilin e biznesit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Menaxho profilin e biznesit.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Shikoni informacionin e agjencisë.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Menaxhoni informacionin e agjencisë.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Shikoni shënimet e dyqanit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Menaxho shënimet e dyqanit.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Shikoni asetet e zhvilluesit.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Menaxho asetet e zhvilluesit.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Hyni në informacionin personal dhe cilësimet e llogarisë.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Menaxhoni portofolin dhe transaksionet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Shikoni transaksionet e portofolit.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Shikoni argumentet dhe klientët OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Menaxhoni argumentet dhe klientët OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Menaxho cilësimet e sigurisë.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Menaxhoni filialet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Shiko filialet.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Menaxho shabllonet e printimit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Shikoni shabllonet e printimit.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Menaxho komentet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Shiko komentet.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Shikoni informacionin e fitimit të parave.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Menaxho informacionin e fitimit të parave.',



    'profile' => 'Lexoni informacionin e profilit duke përfshirë emrin, adresën e emailit, imazhin dhe statusin e vërtetimit.',
    'phone' => 'Qasja në numrin e kontaktit',
    'address' => 'Lexoni dhe modifikoni adresën nga libri i ruajtur i adresave',
    'buy' => 'Porosit & Blini porosi.',
    'order-history' => 'Lexoni historinë e porosive.',
    'my-gift-cards' => 'Qasja në kartat e mia të dhuratave.',
    'articles' => 'Redakto artikuj.',
    'notifications' => 'Dërgoni dhe merrni njoftime.',
    'read-shops' => 'Lexoni listën e dyqaneve.',
    'shop-edit' => 'Dyqani akses për modifikim.',
    'shop-contacts' => 'Merrni dhe modifikoni formularët e kontaktit.',
    'shop-gift-cards' => 'Krijimi, modifikimi dhe administrimi i kartave.',
    'shop-faqs' => 'Krijoni, modifikoni dhe menaxhoni pyetjet e bëra shpesh.',
    'shop-categories' => 'Krijimi, redaktimi dhe menaxhimi i kategorive.',
    'backoffice-write-products' => 'Autorizoni krijimin, redaktimin dhe menaxhimin e produkteve në zyrën e pasme.',
    'backoffice-read-products' => 'Autorizoni aksesin për të parë listën e produkteve dhe informacionin e detajuar të produktit në zyrën e pasme.',
    'shop-read-reports' => 'Lexoni informacione dhe raporte.',
    'shop-socials' => 'Redaktoni rrjetet sociale të dyqaneve.',
    'shop-accounts' => 'Redaktoni dhe fshini llogaritë financiare të lidhura me dyqanin.',
    'shop-menus' => 'Redakto menutë e dyqaneve.',
    'shop-pages' => 'Redaktoni faqet e dyqaneve.',
    'shop-warehouse' => 'Redakto Magazina e Dyqanit',
    'shop-permissions' => 'Shikoni dhe modifikoni aksesin në dyqan.',
    'shop-process-center' => 'Menaxhoni porositë e marra.',
    'shop-profile' => 'Menaxho profilet e dyqaneve.',
    'shop-discount-code' => 'Menaxho kodet e zbritjes.',
    'shop-coupon' => 'Menaxhoni kuponët.',
    'shop-offer' => 'Menaxho ofertat.',
    'shop-cashback' => 'Menaxhoni kthimin e parave të gatshme.',
    'shop-lottery' => 'Menaxhoni llotaritë.',
    'shop-community' => 'Menaxhoni komunitetin.',
    'shop-customers' => 'Menaxhoni klientët.',
    'shop-ribbon' => 'Menaxho abonimet e Ribbon.',
    'community-read' => 'Lexoni komunitetin e shitjes.',
    'community-write' => 'Shkruani komunitetin e shitur.',
    'profile-write' => 'Shkruani informacionin e profilit të përdoruesit.',
    'vendor-read' => 'Qasje në veprimet e përmbushjes së porosive të shitësve.',
    'vendor-write' => 'Ndryshoni porositë, pagesat dhe informacione të tjera të shitësit.',
    'connect-providers' => 'Shtoni, lexoni dhe shkruani ofruesit e lidhjes.',
    'personal-identification' => 'Lexoni informacionin personal, akseset dhe konfigurimin e llogarisë.',
    'accounts' => 'Qasje në kuletat, lexoni transaksionet dhe historitë e rimbushjes.',
    'shop-add' => 'Shto dyqan të ri.',
    'shop-delete' => 'Hiq një dyqan.',
    'shop-ai-write' => 'Lejon përdoruesin të ekzekutojë komandat e AI.',
    'shop-ai-read' => 'Lejon përdoruesin të aksesojë informacionin e AI pa ekzekutuar komanda.',
    'vendor-payment' => 'Lejon përdoruesin të shtojë regjistrimet e pagesave për shitësit ose të transferojë fonde nëpërmjet llogarive të tyre të lidhura si Stripe Connect.',
    'company-read' => 'Lejon leximin e informacionit të profilit të biznesit.',
    'company-write' => 'Lejon leximin dhe shkrimin e informacionit të profilit të biznesit.',
    'agency-read' => 'Lejon të lexojë informacionin e agjencisë.',
    'agency-write' => 'Lejon të lexojë dhe të shkruajë informacionin e agjencisë.',
    'note-read' => 'Lejon leximin e shënimeve të dyqanit.',
    'note-write' => 'Lejon leximin dhe shkrimin e shënimeve të dyqanit.',
    'developer-read' => 'Lejon leximin e aseteve të zhvilluesve.',
    'developer-write' => 'Lejon leximin dhe shkrimin e aseteve të zhvilluesve.',
    'tokens-read' => 'Lexoni shenjat dhe klientët Oauth.',
    'tokens-write' => 'Shkruani shenjat dhe klientët Oauth.',
];
