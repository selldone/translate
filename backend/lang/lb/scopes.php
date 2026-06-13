<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone Administrator Ëmfang.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Beschränkt Investor Zougang.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Liesen Benotzer Profil Detailer.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Liesen Telefonsnummer.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Liesen an update gespäichert Adressen.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Update Benotzerprofil.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Place Bestellungen.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Kuckt d\'Bestellungsgeschicht.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Zougang Kaddoskaarten.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Artikel änneren.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Managen Notifikatiounen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'View Buttek Lëscht.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Änneren Buttek Detailer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Füügt neie Buttek.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Läschen Buttek.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Managen Ënnerstëtzung Ticketen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Verwalte Geschenkkaarten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Kuckt Kaddoskaarten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Managen FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'View FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Verwalte Kategorien.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'View Kategorien.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Managen Produiten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Gesinn Produiten.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Kuckt Berichter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Verwalte finanziell Konten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Gesinn Finanzkonten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Änneren Store Säiten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'View Store Säiten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gestioun Lager.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Gesinn Lager.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Verwalte Personal Zougang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Gesinn Personal Zougang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'View Commanden.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Bestellungen managen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Managen Geschäftsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Gesinn Geschäftsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Managen Remise Coden.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Gesinn Remise Coden.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Couponen managen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Kuckt Couponen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Managen Offeren.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'View offréiert.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Verwalte Cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Kuckt Cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Verwalte Lotterien.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Gesinn lotteries.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Verwalte Gemeinschaft.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'View Communautéit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Verwalte Clienten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'View Clienten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Managen Abonnementer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'View Abonnementer.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'View Verkeefer Commanden.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Verwalte Verkeefer Bestellungen a Bezuelungen.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Verwalte Connect Provider.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'View konnektéieren Ubidder.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI Kommandoen ausféieren.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Gesinn AI Informatiounen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Verwalte Verkeefer Bezuelungen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'View Verkeefer Bezuelen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Gesinn Geschäftsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Managen Geschäftsprofil.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'View Agence Informatiounen.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Managen Agence Informatiounen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'View Buttek Notize.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Managen Buttek Notizen.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'View Entwéckler Verméigen.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Managen Entwéckler Verméigen.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Zougang perséinlech Informatiounen a Kont Astellunge.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Managen Portemonnaie an Transaktiounen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Kuckt Portemonnaie Transaktiounen.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Kuckt OAuth Tokens a Clienten.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Managen OAuth Tokens a Clienten.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Managen Sécherheet Astellunge.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Verwalte Partner.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'View Partner.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Managen Drécken Templates.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'View Drécken Schablounen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Verwalte Kritik.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'View Kritik.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Gesinn monetization Informatiounen.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Verwalte Monetiséierungsinformatioun.',



    'profile' => 'Liest Profilinformatioun abegraff Numm, E-Mail Adress, Bild an Authentifikatiounsstatus.',
    'phone' => 'Kontakt Zuel Zougang',
    'address' => 'Liesen an änneren Adress aus gespäichert Adress Buch',
    'buy' => 'Uerdnung & Shop Uerdnung.',
    'order-history' => 'Liest d\'Bestellungsgeschicht.',
    'my-gift-cards' => 'Zougang zu menge Geschenkkaarten.',
    'articles' => 'Artikel änneren.',
    'notifications' => 'Schéckt a kritt Notifikatiounen.',
    'read-shops' => 'Liest Store Lëscht.',
    'shop-edit' => 'Store Redaktioun Zougang.',
    'shop-contacts' => 'Kréien an änneren Kontakt Formen.',
    'shop-gift-cards' => 'Kaarten erstellen, änneren a managen.',
    'shop-faqs' => 'Erstelle, änneren a verwalten dacks gestallte Froen.',
    'shop-categories' => 'Kategorien erstellen, änneren a managen.',
    'backoffice-write-products' => 'Autoriséiert d\'Schafung, d\'Editioun an d\'Gestioun vu Produkter am Back Office.',
    'backoffice-read-products' => 'Autoriséiert Zougang fir d\'Produktlëscht an detailléiert Produktinformatioun am Back Office ze gesinn.',
    'shop-read-reports' => 'Liest Informatioun a Berichter.',
    'shop-socials' => 'Änneren Buttek sozialen Netzwierker.',
    'shop-accounts' => 'Änneren a läschen Store-verbonne Finanzkonten.',
    'shop-menus' => 'Änneren Buttek Menue.',
    'shop-pages' => 'Änneren Store Säiten.',
    'shop-warehouse' => 'Änneren Store Warehouse',
    'shop-permissions' => 'Gesinn an änneren Buttek Zougang.',
    'shop-process-center' => 'Managen kritt Commanden.',
    'shop-profile' => 'Managen Store Profiler.',
    'shop-discount-code' => 'Managen Remise Coden.',
    'shop-coupon' => 'Couponen managen.',
    'shop-offer' => 'Managen Offeren.',
    'shop-cashback' => 'Verwalte Cashbacks.',
    'shop-lottery' => 'Verwalte Lotterien.',
    'shop-community' => 'Verwalte Gemeinschaft.',
    'shop-customers' => 'Verwalte Clienten.',
    'shop-ribbon' => 'Managen Ribbon Abonnementer.',
    'community-read' => 'Liest Selldone Gemeinschaft.',
    'community-write' => 'Schreiwen selldone Communautéit.',
    'profile-write' => 'Schreiwen Benotzer Profil Informatiounen.',
    'vendor-read' => 'Zougang zu Erfëllungsaktioune vu Verkeeferbestellungen.',
    'vendor-write' => 'Ännere Bestellungen, Bezuelung an aner Informatioun vum Verkeefer.',
    'connect-providers' => 'Füügt, liesen a schreift Connect Provider.',
    'personal-identification' => 'Liest perséinlech Informatioun, Zougang, a Kontkonfiguratioun.',
    'accounts' => 'Zougang zu Portemonnaie, liesen Transaktiounen an Top-up Geschichten.',
    'shop-add' => 'Füügt neie Buttek.',
    'shop-delete' => 'E Buttek ewechhuelen.',
    'shop-ai-write' => 'Erlaabt de Benotzer AI Kommandoen auszeféieren.',
    'shop-ai-read' => 'Erlaabt de Benotzer Zougang zu AI Informatioun ouni Kommandoen auszeféieren.',
    'vendor-payment' => 'Erlaabt de Benotzer Bezuelungsrecords fir Verkeefer ze addéieren oder Fongen iwwer hir verbonne Konten wéi Stripe Connect ze transferéieren.',
    'company-read' => 'Erlaabt Geschäftsprofilinformatioun ze liesen.',
    'company-write' => 'Erlaabt Geschäftsprofilinformatioun ze liesen a schreiwen.',
    'agency-read' => 'Erlaabt Agence Informatiounen ze liesen.',
    'agency-write' => 'Erlaabt Agence Informatiounen ze liesen a schreiwen.',
    'note-read' => 'Erlaabt Buttek Notizen ze liesen.',
    'note-write' => 'Erlaabt Buttek Notizen ze liesen a schreiwen.',
    'developer-read' => 'Erlaabt Entwéckler Verméigen ze liesen.',
    'developer-write' => 'Erlaabt Entwéckler Verméigen ze liesen a schreiwen.',
    'tokens-read' => 'Liest Oauth Tokens a Clienten.',
    'tokens-write' => 'Schreift Oauth Tokens a Clienten.',
];
