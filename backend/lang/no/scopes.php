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
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Begrenset investortilgang.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Les brukerprofildetaljer.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Les telefonnummer.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Les og oppdater lagrede adresser.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Oppdater brukerprofilen.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Legg inn bestillinger.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Se ordrehistorikk.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Få tilgang til gavekort.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Rediger artikler.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Administrer varsler.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Se butikkliste.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Rediger butikkdetaljer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Legg til ny butikk.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Slett butikk.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Administrer støttebilletter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Administrer gavekort.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Se gavekort.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Administrer vanlige spørsmål.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Se vanlige spørsmål.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Administrer kategorier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Se kategorier.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Administrer produkter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Se produkter.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Se rapporter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Administrer finansielle kontoer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Se finansregnskap.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Rediger butikksider.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Se butikksider.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Administrere lager.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Se lageret.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Administrer personaltilgang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Se personaltilgang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Se bestillinger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Administrer bestillinger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Administrer bedriftsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Se bedriftsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Administrer rabattkoder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Se rabattkoder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Administrer kuponger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Se kuponger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Administrer tilbud.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Se tilbud.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Administrer cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Se cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'administrere lotterier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Se lotterier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Administrer fellesskapet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Se fellesskapet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Administrer kunder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Se kunder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Administrer abonnementer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Se abonnementer.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Se leverandørens bestillinger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Administrer leverandørordrer og betalinger.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Administrer tilkoblingsleverandører.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Se Connect-leverandører.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Utfør AI-kommandoer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Se AI-informasjon.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Administrer leverandørbetalinger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Se leverandørbetalinger.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Se bedriftsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Administrer bedriftsprofil.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Se byråinformasjon.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Administrer byråinformasjon.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Se butikknotater.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Administrer butikknotater.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Se utviklerressurser.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Administrer utviklerressurser.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Få tilgang til personlig informasjon og kontoinnstillinger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Administrer lommebok og transaksjoner.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Se lommeboktransaksjoner.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Se OAuth-tokens og klienter.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Administrer OAuth-tokens og klienter.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Administrer sikkerhetsinnstillinger.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Administrer tilknyttede selskaper.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Se tilknyttede selskaper.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Administrer utskriftsmaler.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Se utskriftsmaler.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Administrer anmeldelser.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Se anmeldelser.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Se informasjon om inntektsgenerering.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Administrer informasjon om inntektsgenerering.',



    'profile' => 'Les profilinformasjon, inkludert navn, e-postadresse, bilde og autentiseringsstatus.',
    'phone' => 'Tilgang til kontaktnummer',
    'address' => 'Les og rediger adresse fra lagret adressebok',
    'buy' => 'Bestill & Shop Bestill.',
    'order-history' => 'Les ordrehistorikk.',
    'my-gift-cards' => 'Tilgang til mine gavekort.',
    'articles' => 'Rediger artikler.',
    'notifications' => 'Send og motta varsler.',
    'read-shops' => 'Les Butikkliste.',
    'shop-edit' => 'Lagre redigeringstilgang.',
    'shop-contacts' => 'Motta og redigere kontaktskjemaer.',
    'shop-gift-cards' => 'Opprette, redigere og administrere kort.',
    'shop-faqs' => 'Opprett, rediger og administrer vanlige spørsmål.',
    'shop-categories' => 'Opprette, redigere og administrere kategorier.',
    'backoffice-write-products' => 'Autoriser opprettelse, redigering og administrasjon av produkter i backoffice.',
    'backoffice-read-products' => 'Autoriser tilgang for å se produktlisten og detaljert produktinformasjon i backoffice.',
    'shop-read-reports' => 'Les informasjon og rapporter.',
    'shop-socials' => 'Rediger sosiale nettverk i butikken.',
    'shop-accounts' => 'Rediger og slett butikktilknyttede finanskontoer.',
    'shop-menus' => 'Rediger butikkmenyer.',
    'shop-pages' => 'Rediger butikksider.',
    'shop-warehouse' => 'Rediger butikklager',
    'shop-permissions' => 'Se og rediger butikktilgang.',
    'shop-process-center' => 'Administrer mottatte bestillinger.',
    'shop-profile' => 'Administrer butikkprofiler.',
    'shop-discount-code' => 'Administrer rabattkoder.',
    'shop-coupon' => 'Administrer kuponger.',
    'shop-offer' => 'Administrer tilbud.',
    'shop-cashback' => 'Administrer cashbacks.',
    'shop-lottery' => 'administrere lotterier.',
    'shop-community' => 'Administrer fellesskapet.',
    'shop-customers' => 'Administrer kunder.',
    'shop-ribbon' => 'Administrer Ribbon-abonnementer.',
    'community-read' => 'Les Selldone-fellesskapet.',
    'community-write' => 'Skriv solgte fellesskap.',
    'profile-write' => 'Skriv brukerprofilinformasjon.',
    'vendor-read' => 'Tilgang til oppfyllelseshandlinger for leverandørordrer.',
    'vendor-write' => 'Endre bestillinger, betaling og annen informasjon om leverandøren.',
    'connect-providers' => 'Legg til, les og skriv tilkoblingsleverandører.',
    'personal-identification' => 'Les personlig informasjon, tilganger og kontokonfigurasjon.',
    'accounts' => 'Tilgang til lommebøker, les transaksjoner og påfyllingshistorikk.',
    'shop-add' => 'Legg til ny butikk.',
    'shop-delete' => 'Fjern en butikk.',
    'shop-ai-write' => 'Lar brukeren utføre AI-kommandoer.',
    'shop-ai-read' => 'Lar brukeren få tilgang til AI-informasjon uten å utføre kommandoer.',
    'vendor-payment' => 'Lar brukeren legge til betalingsposter for leverandører eller overføre midler via deres tilkoblede kontoer som Stripe Connect.',
    'company-read' => 'Lar deg lese bedriftsprofilinformasjon.',
    'company-write' => 'Lar deg lese og skrive bedriftsprofilinformasjon.',
    'agency-read' => 'Lar deg lese byråinformasjon.',
    'agency-write' => 'Lar deg lese og skrive byråinformasjon.',
    'note-read' => 'Gjør det mulig å lese butikknotater.',
    'note-write' => 'Gjør det mulig å lese og skrive butikknotater.',
    'developer-read' => 'Lar deg lese utviklerens ressurser.',
    'developer-write' => 'Lar deg lese og skrive utviklere.',
    'tokens-read' => 'Les Oauth-tokens og klienter.',
    'tokens-write' => 'Skriv Oauth-tokens og klienter.',
];
