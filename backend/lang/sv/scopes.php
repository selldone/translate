<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administratörsomfång.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Begränsad tillgång för investerare.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Read user profile details.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Läs telefonnummer.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Read and update saved addresses.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Uppdatera användarprofil.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Lägg beställningar.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Se orderhistorik.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Få tillgång till presentkort.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Redigera artiklar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Hantera aviseringar.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Se butikslista.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Redigera butiksinformation.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Lägg till ny butik.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Ta bort butik.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Hantera supportbiljetter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Hantera presentkort.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Se presentkort.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Hantera vanliga frågor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Se vanliga frågor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Hantera kategorier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Visa kategorier.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Hantera produkter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Se produkter.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Visa rapporter.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Manage financial accounts.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Visa finansiella konton.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Redigera butikssidor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Visa butikssidor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Hantera lager.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Se lager.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Hantera personalåtkomst.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Se personalens tillgång.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Se beställningar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Hantera beställningar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Hantera företagsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Visa företagsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Hantera rabattkoder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Se rabattkoder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Hantera kuponger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Visa kuponger.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Hantera erbjudanden.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Se erbjudanden.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Hantera cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Se cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Hantera lotterier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Se lotterier.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Hantera gemenskapen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Visa community.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Hantera kunder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Se kunder.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Hantera prenumerationer.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Visa prenumerationer.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Visa leverantörsbeställningar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Manage vendor orders and payments.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Manage connect providers.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Se Connect-leverantörer.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Utför AI-kommandon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Visa AI-information.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Hantera leverantörsbetalningar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Visa leverantörsbetalningar.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Visa företagsprofil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Hantera företagsprofil.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Visa byråinformation.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Manage agency information.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Se butiksanteckningar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Hantera butiksanteckningar.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Visa utvecklartillgångar.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Hantera utvecklartillgångar.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Få tillgång till personlig information och kontoinställningar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Manage wallet and transactions.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'View wallet transactions.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'View OAuth tokens and clients.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Manage OAuth tokens and clients.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Manage security settings.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Hantera affiliates.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Se affiliates.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Hantera utskriftsmallar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Visa utskriftsmallar.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Hantera recensioner.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Se recensioner.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'View monetization information.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Manage monetization information.',



    'profile' => 'Läs profilinformation inklusive namn, e-postadress, bild och autentiseringsstatus.',
    'phone' => 'Tillgång till kontaktnummer',
    'address' => 'Läs och redigera adress från sparad adressbok',
    'buy' => 'Kassa och lägga beställningar.',
    'order-history' => 'Läs orderhistorik.',
    'my-gift-cards' => 'Tillgång till mina presentkort.',
    'articles' => 'Redigera artiklar.',
    'notifications' => 'Skicka och ta emot aviseringar.',
    'read-shops' => 'Läs butikslistan.',
    'shop-edit' => 'Redigeringsåtkomst till butik.',
    'shop-contacts' => 'Ta emot och redigera kontaktformulär.',
    'shop-gift-cards' => 'Skapa, redigera och hantera kort.',
    'shop-faqs' => 'Skapa, redigera och hantera vanliga frågor.',
    'shop-categories' => 'Skapa, redigera och hantera kategorier.',
    'backoffice-write-products' => 'Auktorisera skapande, redigering och hantering av produkter i backoffice.',
    'backoffice-read-products' => 'Auktorisera åtkomst för att se produktlistan och detaljerad produktinformation i backoffice.',
    'shop-read-reports' => 'Läs information och rapporter.',
    'shop-socials' => 'Redigera butiks sociala nätverk.',
    'shop-accounts' => 'Redigera och ta bort butikslänkade finansiella konton.',
    'shop-menus' => 'Redigera butiksmenyer.',
    'shop-pages' => 'Redigera butikssidor.',
    'shop-warehouse' => 'Redigera butikslager',
    'shop-permissions' => 'Visa och redigera butiksåtkomst.',
    'shop-process-center' => 'Hantera mottagna beställningar.',
    'shop-profile' => 'Hantera butiksprofiler.',
    'shop-discount-code' => 'Hantera rabattkoder.',
    'shop-coupon' => 'Hantera kuponger.',
    'shop-offer' => 'Hantera erbjudanden.',
    'shop-cashback' => 'Hantera cashbacks.',
    'shop-lottery' => 'Hantera lotterier.',
    'shop-community' => 'Hantera gemenskapen.',
    'shop-customers' => 'Hantera kunder.',
    'shop-ribbon' => 'Hantera Ribbon-prenumerationer.',
    'community-read' => 'Läs Selldones community.',
    'community-write' => 'Skriv såld gemenskap.',
    'profile-write' => 'Skriv användarprofilinformation.',
    'vendor-read' => 'Åtkomst till genomförandeåtgärder för leverantörsbeställningar.',
    'vendor-write' => 'Ändra order, betalning och annan information om säljaren.',
    'connect-providers' => 'Lägg till, läs och skriv anslutningsleverantörer.',
    'personal-identification' => 'Läs personlig information, åtkomster och kontokonfiguration.',
    'accounts' => 'Tillgång till plånböcker, läs transaktioner och påfyllningshistorik.',
    'shop-add' => 'Lägg till ny butik.',
    'shop-delete' => 'Ta bort en butik.',
    'shop-ai-write' => 'Tillåter användaren att utföra AI-kommandon.',
    'shop-ai-read' => 'Ger användaren åtkomst till AI-information utan att utföra kommandon.',
    'vendor-payment' => 'Tillåter användaren att lägga till betalningsposter för leverantörer eller överföra pengar via deras anslutna konton som Stripe Connect.',
    'company-read' => 'Tillåter att läsa företagsprofilinformation.',
    'company-write' => 'Tillåter att läsa och skriva företagsprofilinformation.',
    'agency-read' => 'Tillåter att läsa byråinformation.',
    'agency-write' => 'Tillåter att läsa och skriva byråinformation.',
    'note-read' => 'Gör det möjligt att läsa butiksanteckningar.',
    'note-write' => 'Tillåter att läsa och skriva butiksanteckningar.',
    'developer-read' => 'Tillåter att läsa utvecklare tillgångar.',
    'developer-write' => 'Tillåter att läsa och skriva utvecklare tillgångar.',
    'tokens-read' => 'Läs Oauth-tokens och klienter.',
    'tokens-write' => 'Skriv Oauth-tokens och klienter.',
];
