<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone umfang stjórnanda.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Takmarkaður aðgangur fjárfesta.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lestu upplýsingar um notandaprófíl.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Lestu símanúmer.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Lestu og uppfærðu vistuð heimilisföng.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Uppfærðu notandasnið.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Gerðu pantanir.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Skoða pöntunarferil.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Fáðu aðgang að gjafakortum.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Breyta greinum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Stjórna tilkynningum.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Skoða verslunarlista.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Breyttu upplýsingum um verslun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Bæta við nýrri búð.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Eyða búð.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Stjórna stuðningsmiðum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Stjórna gjafakortum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Skoða gjafakort.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Stjórna algengum spurningum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Skoða algengar spurningar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Stjórna flokkum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Skoða flokka.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Stjórna vörum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Skoða vörur.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Skoða skýrslur.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Stjórna fjárhagsreikningum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Skoða fjárhagsreikninga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Breyta verslunarsíðum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Skoða verslunarsíður.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Stjórna vöruhúsi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Skoða vöruhús.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Stjórna aðgangi starfsfólks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Skoða aðgang starfsmanna.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Skoða pantanir.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Stjórna pöntunum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Stjórna viðskiptasniði.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Skoða viðskiptaprófíl.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Stjórna afsláttarkóðum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Skoða afsláttarkóða.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Stjórna afsláttarmiða.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Skoða afsláttarmiða.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Stjórna tilboðum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Skoða tilboð.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Stjórna endurgreiðslum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Skoða endurgreiðslur.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Stjórna happdrætti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Skoða happdrætti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Stjórna samfélaginu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Skoða samfélag.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Stjórna viðskiptavinum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Skoða viðskiptavini.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Stjórna áskriftum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Skoða áskriftir.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Skoða pantanir söluaðila.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Stjórna pöntunum og greiðslum söluaðila.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Stjórna tengiveitum.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Skoða tengiveitur.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Framkvæma gervigreindarskipanir.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Skoða AI upplýsingar.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Stjórna greiðslum lánardrottna.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Skoða greiðslur söluaðila.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Skoða viðskiptaprófíl.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Stjórna viðskiptasniði.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Skoða upplýsingar um stofnunina.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Hafa umsjón með upplýsingum um stofnun.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Skoða verslunarmiða.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Hafa umsjón með verslunarmiðum.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Skoða eignir þróunaraðila.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Stjórna eignum þróunaraðila.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Fáðu aðgang að persónulegum upplýsingum og reikningsstillingum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Stjórna veski og viðskiptum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Skoða veski viðskipti.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Skoða OAuth tákn og viðskiptavini.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Stjórna OAuth táknum og viðskiptavinum.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Stjórna öryggisstillingum.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Stjórna hlutdeildarfélögum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Skoða hlutdeildarfélög.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Stjórna prentsniðmátum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Skoðaðu prentsniðmát.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Stjórna umsögnum.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Skoða dóma.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Skoða upplýsingar um tekjuöflun.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Stjórna tekjuöflunarupplýsingum.',



    'profile' => 'Lestu upplýsingar um prófílinn þar á meðal nafn, netfang, mynd og auðkenningarstöðu.',
    'phone' => 'Aðgangur að símanúmeri',
    'address' => 'Lestu og breyttu heimilisfangi úr vistaða heimilisfangaskrá',
    'buy' => 'Panta & Shop Order.',
    'order-history' => 'Lestu pöntunarsögu.',
    'my-gift-cards' => 'Aðgangur að gjafakortunum mínum.',
    'articles' => 'Breyta greinum.',
    'notifications' => 'Senda og taka á móti tilkynningum.',
    'read-shops' => 'Lestu verslunarlista.',
    'shop-edit' => 'Aðgangur til að breyta verslun.',
    'shop-contacts' => 'Fáðu og breyttu tengiliðaeyðublöðum.',
    'shop-gift-cards' => 'Búa til, breyta og hafa umsjón með kortum.',
    'shop-faqs' => 'Búðu til, breyttu og stjórnaðu algengum spurningum.',
    'shop-categories' => 'Búa til, breyta og stjórna flokkum.',
    'backoffice-write-products' => 'Leyfðu stofnun, klippingu og stjórnun á vörum í bakvinnslunni.',
    'backoffice-read-products' => 'Heimilið aðgang til að skoða vörulistann og nákvæmar vöruupplýsingar í bakvinnslunni.',
    'shop-read-reports' => 'Lestu upplýsingar og skýrslur.',
    'shop-socials' => 'Breyttu samfélagsnetum verslana.',
    'shop-accounts' => 'Breyta og eyða verslunartengdum fjárhagsreikningum.',
    'shop-menus' => 'Breyta verslunarvalmyndum.',
    'shop-pages' => 'Breyta verslunarsíðum.',
    'shop-warehouse' => 'Breyta vöruhúsi verslunar',
    'shop-permissions' => 'Skoðaðu og breyttu verslunaraðgangi.',
    'shop-process-center' => 'Stjórna mótteknum pöntunum.',
    'shop-profile' => 'Stjórna verslunarsniðum.',
    'shop-discount-code' => 'Stjórna afsláttarkóðum.',
    'shop-coupon' => 'Stjórna afsláttarmiða.',
    'shop-offer' => 'Stjórna tilboðum.',
    'shop-cashback' => 'Stjórna endurgreiðslum.',
    'shop-lottery' => 'Stjórna happdrætti.',
    'shop-community' => 'Stjórna samfélaginu.',
    'shop-customers' => 'Stjórna viðskiptavinum.',
    'shop-ribbon' => 'Stjórna borði áskriftum.',
    'community-read' => 'Lestu Sellone samfélag.',
    'community-write' => 'Skrifaðu selldone samfélag.',
    'profile-write' => 'Skrifaðu upplýsingar um notandaprófíl.',
    'vendor-read' => 'Aðgangur að uppfyllingaraðgerðum lánardrottnapantana.',
    'vendor-write' => 'Breyta pöntunum, greiðslu og öðrum upplýsingum seljanda.',
    'connect-providers' => 'Bæta við, lesa og skrifa tengiveitur.',
    'personal-identification' => 'Lestu persónulegar upplýsingar, aðgang og reikningsstillingar.',
    'accounts' => 'Aðgangur að veski, lesið viðskipti og áfyllingarsögu.',
    'shop-add' => 'Bæta við nýrri búð.',
    'shop-delete' => 'Fjarlægðu búð.',
    'shop-ai-write' => 'Leyfir notandanum að framkvæma gervigreindarskipanir.',
    'shop-ai-read' => 'Leyfir notandanum aðgang að gervigreindarupplýsingum án þess að framkvæma skipanir.',
    'vendor-payment' => 'Leyfir notandanum að bæta við greiðsluskrám fyrir söluaðila eða millifæra fé í gegnum tengda reikninga þeirra eins og Stripe Connect.',
    'company-read' => 'Leyfir að lesa upplýsingar um viðskiptasnið.',
    'company-write' => 'Gerir kleift að lesa og skrifa upplýsingar um viðskiptasnið.',
    'agency-read' => 'Leyfir að lesa upplýsingar um stofnunina.',
    'agency-write' => 'Gerir kleift að lesa og skrifa upplýsingar um stofnunina.',
    'note-read' => 'Gerir kleift að lesa verslunarglósur.',
    'note-write' => 'Gerir kleift að lesa og skrifa verslunarglósur.',
    'developer-read' => 'Leyfir að lesa eignir þróunaraðila.',
    'developer-write' => 'Leyfir að lesa og skrifa eignir þróunaraðila.',
    'tokens-read' => 'Lestu Oauth tákn og viðskiptavini.',
    'tokens-write' => 'Skrifaðu Oauth tákn og viðskiptavini.',
];
