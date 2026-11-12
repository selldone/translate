<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone behearder berik.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Beheinde ynvestearder tagong.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lês brûkersprofyl details.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Lês telefoannûmer.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Lês en bywurkje bewarre adressen.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Update brûkersprofyl.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Plak oarders.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Besjoch oarder skiednis.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Tagong ta gift cards.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Artikels bewurkje.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Beheare notifikaasjes.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Besjoch winkellist.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Winkeldetails bewurkje.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Add nije winkel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Wiskje winkel.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Beheare stipe tickets.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Beheare gift cards.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Besjoch kadokaarten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQs beheare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Besjoch FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kategoryen beheare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Besjoch kategoryen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Produkten beheare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Besjoch produkten.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Besjoch rapporten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Beheare finansjele akkounts.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Besjoch finansjele akkounts.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Winkelsiden bewurkje.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Besjoch winkelsiden.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Beheare pakhús.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Besjoch pakhús.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Behear personiel tagong.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Besjoch personiel tagong.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Besjoch oarders.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Beheare oarders.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Beheare bedriuw profyl.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Besjoch bedriuwsprofyl.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Behear koarting koades.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Besjoch koarting koades.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Beheare coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Besjoch coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Oanbiedingen beheare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Besjoch oanbiedingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Behear cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Sjoch cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Beheare lotterijen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Sjoch lotterijen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Behear mienskip.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Besjoch mienskip.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Beheare klanten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Besjoch klanten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Beheare abonneminten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Besjoch abonneminten.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Besjoch ferkeaper oarders.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Beheare ferkeaper oarders en betellingen.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Behear ferbine providers.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Besjoch ferbine providers.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI-kommando\'s útfiere.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Besjoch AI-ynformaasje.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Beheare ferkeaper betellingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Besjoch ferkeaper betellingen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Besjoch bedriuwsprofyl.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Beheare bedriuw profyl.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Besjoch agintskip ynformaasje.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Beheare agintskip ynformaasje.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Besjoch winkelnotysjes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Behear winkelnotysjes.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Besjoch ûntwikkeldersaktiva.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Beheare ûntwikkeldersaktiva.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Tagong ta persoanlike ynformaasje en akkount ynstellings.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Beheare beurs en transaksjes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Besjoch portemonnee-transaksjes.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Besjoch OAuth tokens en kliïnten.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Behear OAuth tokens en kliïnten.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Beheare feiligens ynstellings.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Beheare affiliates.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Sjoch affiliates.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Beheare printsjabloanen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Besjoch printsjabloanen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Beheare resinsjes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Besjoch resinsjes.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Besjoch monetarisaasjeynformaasje.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Behear monetization ynformaasje.',



    'profile' => 'Lês profylynformaasje ynklusyf namme, e-postadres, ôfbylding en autentikaasjestatus.',
    'phone' => 'Kontakt nûmer tagong',
    'address' => 'Lês en bewurkje adres út bewarre adresboek',
    'buy' => 'Order & Winkel Order.',
    'order-history' => 'Lês oarder skiednis.',
    'my-gift-cards' => 'Tagong ta myn kadokaarten.',
    'articles' => 'Artikels bewurkje.',
    'notifications' => 'Stjoer en ûntfange notifikaasjes.',
    'read-shops' => 'Lês Store List.',
    'shop-edit' => 'Winkel bewurkje tagong.',
    'shop-contacts' => 'Untfang en bewurkje kontaktformulieren.',
    'shop-gift-cards' => 'Kaarten oanmeitsje, bewurkje en beheare.',
    'shop-faqs' => 'Meitsje, bewurkje en beheare faak stelde fragen.',
    'shop-categories' => 'Kategoryen oanmeitsje, bewurkje en beheare.',
    'backoffice-write-products' => 'Autorisearje it oanmeitsjen, bewurkjen en behearen fan produkten yn it efterkantoar.',
    'backoffice-read-products' => 'Autorisearje tagong om de produktlist en detaillearre produktynformaasje te besjen yn \'e efterkant.',
    'shop-read-reports' => 'Lês ynformaasje en rapporten.',
    'shop-socials' => 'Bewurkje winkel sosjale netwurken.',
    'shop-accounts' => 'Bewurkje en wiskje winkel-keppele finansjele akkounts.',
    'shop-menus' => 'Winkelmenu\'s bewurkje.',
    'shop-pages' => 'Winkelsiden bewurkje.',
    'shop-warehouse' => 'Store Warehouse bewurkje',
    'shop-permissions' => 'Besjoch en bewurkje winkel tagong.',
    'shop-process-center' => 'Beheare ûntfongen oarders.',
    'shop-profile' => 'Behear winkel profilen.',
    'shop-discount-code' => 'Behear koarting koades.',
    'shop-coupon' => 'Beheare coupons.',
    'shop-offer' => 'Oanbiedingen beheare.',
    'shop-cashback' => 'Behear cashbacks.',
    'shop-lottery' => 'Beheare lotterijen.',
    'shop-community' => 'Behear mienskip.',
    'shop-customers' => 'Beheare klanten.',
    'shop-ribbon' => 'Behear Ribbon abonneminten.',
    'community-read' => 'Lês Selldone mienskip.',
    'community-write' => 'Skriuw selldone mienskip.',
    'profile-write' => 'Skriuw brûkersprofylynformaasje.',
    'vendor-read' => 'Tagong ta ferfolling aksjes fan ferkeaper oarders.',
    'vendor-write' => 'Feroarje oarders, betelling en oare ynformaasje fan de ferkeaper.',
    'connect-providers' => 'Ferbineproviders tafoegje, lêze en skriuwe.',
    'personal-identification' => 'Lês persoanlike ynformaasje, tagongen en akkountkonfiguraasje.',
    'accounts' => 'Tagong ta slúven, lês transaksjes en histoarjes foar oanfolling.',
    'shop-add' => 'Add nije winkel.',
    'shop-delete' => 'Fuortsmite in winkel.',
    'shop-ai-write' => 'Stelt de brûker ta om AI-kommando\'s út te fieren.',
    'shop-ai-read' => 'Stelt de brûker tagong ta AI-ynformaasje sûnder kommando\'s út te fieren.',
    'vendor-payment' => 'Stelt de brûker ta om betellingsrecords foar ferkeapers ta te foegjen of jild oer te bringen fia har ferbûne akkounts lykas Stripe Connect.',
    'company-read' => 'It makket it mooglik om ynformaasje oer bedriuwsprofyl te lêzen.',
    'company-write' => 'Stelt it lêzen en skriuwen fan saaklike profylynformaasje mooglik.',
    'agency-read' => 'It makket it mooglik om ynformaasje oer buro te lêzen.',
    'agency-write' => 'Stelt it lêzen en skriuwen fan agintskipynformaasje mooglik.',
    'note-read' => 'Lit winkelnotysjes lêze.',
    'note-write' => 'Lit winkelnotysjes lêze en skriuwe.',
    'developer-read' => 'It makket it mooglik om ûntwikkelders fermogen te lêzen.',
    'developer-write' => 'Stelt it lêzen en skriuwen fan ûntwikkelders fermogen.',
    'tokens-read' => 'Lês Oauth tokens en kliïnten.',
    'tokens-write' => 'Skriuw Oauth tokens en kliïnten.',
];
