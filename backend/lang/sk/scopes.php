<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Rozsah správcu Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Obmedzený prístup investorov.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Prečítajte si podrobnosti o používateľskom profile.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Prečítajte si telefónne číslo.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Čítajte a aktualizujte uložené adresy.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Aktualizujte používateľský profil.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Zadávajte objednávky.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Zobraziť históriu objednávok.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Prístup k darčekovým kartám.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Upravovať články.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Spravovať upozornenia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Zobraziť zoznam obchodov.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Upraviť podrobnosti obchodu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Pridať nový obchod.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Odstrániť obchod.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Spravujte lístky podpory.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Správa darčekových kariet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Zobraziť darčekové karty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Spravovať často kladené otázky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Zobraziť často kladené otázky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Spravujte kategórie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Zobraziť kategórie.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Spravujte produkty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Zobraziť produkty.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Zobraziť prehľady.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Spravujte finančné účty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Pozrite si finančné účty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Upraviť stránky obchodu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Zobraziť stránky obchodu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Spravovať sklad.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Zobraziť sklad.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Spravujte prístup zamestnancov.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Zobraziť prístup personálu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Zobraziť objednávky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Spravujte objednávky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Spravovať firemný profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Zobraziť firemný profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Spravujte zľavové kódy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Pozrite si zľavové kódy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Spravujte kupóny.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Zobraziť kupóny.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Spravujte ponuky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Zobraziť ponuky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Spravujte cashbacky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Pozrite si cashbacky.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Spravujte lotérie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Pozrite si lotérie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Spravovať komunitu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Zobraziť komunitu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Spravujte zákazníkov.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Zobraziť zákazníkov.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Spravovať odbery.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Zobraziť odbery.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Zobraziť objednávky dodávateľov.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Spravujte objednávky a platby dodávateľov.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Spravujte poskytovateľov pripojenia.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Zobraziť poskytovateľov pripojenia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Vykonávajte príkazy AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Zobrazenie informácií o AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Spravujte platby dodávateľa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Pozrite si platby dodávateľa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Zobraziť firemný profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Spravovať firemný profil.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Zobraziť informácie o agentúre.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Spravujte informácie o agentúre.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Pozrite si poznámky v obchode.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Spravujte poznámky z obchodu.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Zobraziť diela vývojárov.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Spravujte aktíva vývojárov.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Prístup k osobným informáciám a nastaveniam účtu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Spravujte peňaženku a transakcie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Zobrazenie transakcií v peňaženke.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Pozrite si tokeny a klientov OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Spravujte tokeny a klientov OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Spravujte nastavenia zabezpečenia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Spravujte pridružené spoločnosti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Zobraziť pridružené spoločnosti.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Správa tlačových šablón.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Zobraziť šablóny tlače.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Spravovať recenzie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Zobraziť recenzie.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Zobraziť informácie o speňažovaní.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Spravujte informácie o speňažovaní.',



    'profile' => 'Prečítajte si informácie o profile vrátane mena, e-mailovej adresy, obrázka a stavu overenia.',
    'phone' => 'Prístup na kontaktné číslo',
    'address' => 'Čítanie a úprava adresy z uloženého adresára',
    'buy' => 'Objednať a nakupovať.',
    'order-history' => 'Prečítajte si históriu objednávok.',
    'my-gift-cards' => 'Prístup k mojim darčekovým kartám.',
    'articles' => 'Upraviť články.',
    'notifications' => 'Odosielajte a prijímajte upozornenia.',
    'read-shops' => 'Prečítajte si zoznam obchodov.',
    'shop-edit' => 'Prístup na úpravy obchodu.',
    'shop-contacts' => 'Prijímajte a upravujte kontaktné formuláre.',
    'shop-gift-cards' => 'Vytváranie, úprava a správa kariet.',
    'shop-faqs' => 'Vytvárajte, upravujte a spravujte často kladené otázky.',
    'shop-categories' => 'Vytváranie, úprava a správa kategórií.',
    'backoffice-write-products' => 'Autorizovať vytváranie, úpravu a správu produktov v back office.',
    'backoffice-read-products' => 'Autorizujte prístup na zobrazenie zoznamu produktov a podrobných informácií o produkte v back office.',
    'shop-read-reports' => 'Prečítajte si informácie a správy.',
    'shop-socials' => 'Upraviť sociálne siete obchodu.',
    'shop-accounts' => 'Upravte a odstráňte finančné účty prepojené s obchodom.',
    'shop-menus' => 'Upraviť ponuky obchodu.',
    'shop-pages' => 'Upraviť stránky obchodu.',
    'shop-warehouse' => 'Upraviť sklad obchodu',
    'shop-permissions' => 'Zobraziť a upraviť prístup k obchodu.',
    'shop-process-center' => 'Spravujte prijaté objednávky.',
    'shop-profile' => 'Spravujte profily obchodov.',
    'shop-discount-code' => 'Spravujte zľavové kódy.',
    'shop-coupon' => 'Spravujte kupóny.',
    'shop-offer' => 'Spravujte ponuky.',
    'shop-cashback' => 'Spravujte cashbacky.',
    'shop-lottery' => 'Spravujte lotérie.',
    'shop-community' => 'Spravovať komunitu.',
    'shop-customers' => 'Spravujte zákazníkov.',
    'shop-ribbon' => 'Spravovať odbery pása s nástrojmi.',
    'community-read' => 'Prečítajte si komunitu Selldone.',
    'community-write' => 'Napíšte predanú komunitu.',
    'profile-write' => 'Napíšte informácie o používateľskom profile.',
    'vendor-read' => 'Prístup k činnostiam plnenia objednávok dodávateľa.',
    'vendor-write' => 'Zmena objednávok, platieb a iných údajov predajcu.',
    'connect-providers' => 'Pridávať, čítať a zapisovať poskytovateľov pripojenia.',
    'personal-identification' => 'Prečítajte si osobné informácie, prístupy a konfiguráciu účtu.',
    'accounts' => 'Prístup k peňaženkám, čítaniu transakcií a histórii dobíjania.',
    'shop-add' => 'Pridať nový obchod.',
    'shop-delete' => 'Odstráňte obchod.',
    'shop-ai-write' => 'Umožňuje používateľovi vykonávať príkazy AI.',
    'shop-ai-read' => 'Umožňuje používateľovi prístup k informáciám AI bez vykonávania príkazov.',
    'vendor-payment' => 'Umožňuje používateľovi pridávať záznamy o platbách pre predajcov alebo prevádzať prostriedky prostredníctvom ich pripojených účtov, ako je Stripe Connect.',
    'company-read' => 'Umožňuje čítať informácie o firemnom profile.',
    'company-write' => 'Umožňuje čítať a zapisovať informácie o firemnom profile.',
    'agency-read' => 'Umožňuje čítať informácie o agentúre.',
    'agency-write' => 'Umožňuje čítať a zapisovať informácie agentúry.',
    'note-read' => 'Umožňuje čítať poznámky z obchodu.',
    'note-write' => 'Umožňuje čítať a písať poznámky z obchodu.',
    'developer-read' => 'Umožňuje čítať aktíva vývojárov.',
    'developer-write' => 'Umožňuje čítať a zapisovať aktíva vývojárov.',
    'tokens-read' => 'Prečítajte si tokeny a klientov Oauth.',
    'tokens-write' => 'Napíšte Oauth tokeny a klientov.',
];
