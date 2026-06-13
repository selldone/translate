<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administratoromfang.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Begrænset investoradgang.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Læs brugerprofiloplysninger.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Læs telefonnummer.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Læs og opdater gemte adresser.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Opdater brugerprofil.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Afgiv ordrer.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Se ordrehistorik.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Få adgang til gavekort.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Rediger artikler.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Administrer meddelelser.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Se butiksliste.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Rediger butiksoplysninger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Tilføj ny butik.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Slet butik.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Administrer supportbilletter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Administrer gavekort.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Se gavekort.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Administrer ofte stillede spørgsmål.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Se ofte stillede spørgsmål.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Administrer kategorier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Se kategorier.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Administrer produkter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Se produkter.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Se rapporter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Håndtere finansielle konti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Se finansielle konti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Rediger butikssider.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Se butikssider.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Administrere lager.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Se lageret.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Administrer personaleadgang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Se personaleadgang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Se ordrer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Administrer ordrer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Administrer virksomhedsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Se virksomhedsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Administrer rabatkoder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Se rabatkoder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Administrer kuponer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Se kuponer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Administrer tilbud.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Se tilbud.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Administrer cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Se cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Håndtere lotterier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Se lotterier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Administrer fællesskabet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Se fællesskabet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Administrer kunder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Se kunder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Administrer abonnementer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Se abonnementer.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Se leverandørordrer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Administrer leverandørordrer og betalinger.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Administrer forbindelsesudbydere.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Se connect-udbydere.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Udfør AI-kommandoer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Se AI-oplysninger.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Administrer leverandørbetalinger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Se leverandørbetalinger.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Se virksomhedsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Administrer virksomhedsprofil.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Se bureauoplysninger.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Administrer bureauoplysninger.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Se butiksnotater.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Administrer butiksnotater.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Se udvikleraktiver.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Administrer udvikleraktiver.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Få adgang til personlige oplysninger og kontoindstillinger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Administrer tegnebog og transaktioner.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Se tegnebogstransaktioner.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Se OAuth-tokens og klienter.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Administrer OAuth-tokens og klienter.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Administrer sikkerhedsindstillinger.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Administrer tilknyttede selskaber.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Se tilknyttede selskaber.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Administrer printskabeloner.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Se udskriftsskabeloner.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Administrer anmeldelser.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Se anmeldelser.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Se oplysninger om indtægtsgenerering.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Administrer oplysninger om indtægtsgenerering.',



    'profile' => 'Læs profiloplysninger, herunder navn, e-mailadresse, billede og godkendelsesstatus.',
    'phone' => 'Adgang til kontaktnummer',
    'address' => 'Læs og rediger adresse fra gemt adressebog',
    'buy' => 'Ordre & Shop Ordre.',
    'order-history' => 'Læs ordrehistorik.',
    'my-gift-cards' => 'Adgang til mine gavekort.',
    'articles' => 'Rediger artikler.',
    'notifications' => 'Send og modtag notifikationer.',
    'read-shops' => 'Læs butiksliste.',
    'shop-edit' => 'Redigeringsadgang til butik.',
    'shop-contacts' => 'Modtag og rediger kontaktformularer.',
    'shop-gift-cards' => 'Oprettelse, redigering og administration af kort.',
    'shop-faqs' => 'Opret, rediger og administrer ofte stillede spørgsmål.',
    'shop-categories' => 'Oprettelse, redigering og administration af kategorier.',
    'backoffice-write-products' => 'Godkend oprettelse, redigering og administration af produkter i backoffice.',
    'backoffice-read-products' => 'Tillad adgang til at se produktlisten og detaljerede produktoplysninger i backoffice.',
    'shop-read-reports' => 'Læs information og rapporter.',
    'shop-socials' => 'Rediger butiks sociale netværk.',
    'shop-accounts' => 'Rediger og slet butikslinkede finansielle konti.',
    'shop-menus' => 'Rediger butiksmenuer.',
    'shop-pages' => 'Rediger butikssider.',
    'shop-warehouse' => 'Rediger butikslager',
    'shop-permissions' => 'Se og rediger butiksadgang.',
    'shop-process-center' => 'Administrer modtagne ordrer.',
    'shop-profile' => 'Administrer butiksprofiler.',
    'shop-discount-code' => 'Administrer rabatkoder.',
    'shop-coupon' => 'Administrer kuponer.',
    'shop-offer' => 'Administrer tilbud.',
    'shop-cashback' => 'Administrer cashbacks.',
    'shop-lottery' => 'Håndtere lotterier.',
    'shop-community' => 'Administrer fællesskabet.',
    'shop-customers' => 'Administrer kunder.',
    'shop-ribbon' => 'Administrer Ribbon-abonnementer.',
    'community-read' => 'Læs Selldone-fællesskabet.',
    'community-write' => 'Skriv solgte fællesskab.',
    'profile-write' => 'Skriv brugerprofiloplysninger.',
    'vendor-read' => 'Adgang til opfyldelseshandlinger af leverandørordrer.',
    'vendor-write' => 'Ændre ordrer, betaling og andre oplysninger om leverandøren.',
    'connect-providers' => 'Tilføj, læs og skriv connect-udbydere.',
    'personal-identification' => 'Læs personlige oplysninger, adgange og kontokonfiguration.',
    'accounts' => 'Adgang til tegnebøger, læs transaktioner og top-up historier.',
    'shop-add' => 'Tilføj ny butik.',
    'shop-delete' => 'Fjern en butik.',
    'shop-ai-write' => 'Giver brugeren mulighed for at udføre AI-kommandoer.',
    'shop-ai-read' => 'Giver brugeren adgang til AI-oplysninger uden at udføre kommandoer.',
    'vendor-payment' => 'Giver brugeren mulighed for at tilføje betalingsposter for leverandører eller overføre penge via deres tilsluttede konti som Stripe Connect.',
    'company-read' => 'Giver mulighed for at læse virksomhedsprofiloplysninger.',
    'company-write' => 'Giver mulighed for at læse og skrive virksomhedsprofiloplysninger.',
    'agency-read' => 'Giver mulighed for at læse bureauoplysninger.',
    'agency-write' => 'Giver mulighed for at læse og skrive agenturoplysninger.',
    'note-read' => 'Giver mulighed for at læse butiksnoter.',
    'note-write' => 'Giver mulighed for at læse og skrive butiksnotater.',
    'developer-read' => 'Giver mulighed for at læse udvikleraktiver.',
    'developer-write' => 'Giver mulighed for at læse og skrive udvikleraktiver.',
    'tokens-read' => 'Læs Oauth-tokens og klienter.',
    'tokens-write' => 'Skriv Oauth-tokens og klienter.',
];
