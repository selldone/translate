<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone beheerdersbereik.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Beperkte toegang voor investeerders.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lees gebruikersprofieldetails.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Telefoonnummer lezen.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Lees en update opgeslagen adressen.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Gebruikersprofiel bijwerken.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Bestellingen plaatsen.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Bestelgeschiedenis bekijken.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Toegang tot cadeaubonnen.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Artikelen bewerken.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Beheer meldingen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Bekijk winkellijst.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Winkelgegevens bewerken.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Nieuwe winkel toevoegen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Winkel verwijderen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Beheer supporttickets.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Beheer cadeaubonnen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Bekijk cadeaubonnen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Beheer veelgestelde vragen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Bekijk veelgestelde vragen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Beheer categorieën.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Bekijk categorieën.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Beheer producten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Bekijk producten.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Bekijk rapporten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Beheer financiële rekeningen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Financiële rekeningen bekijken.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Winkelpagina\'s bewerken.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Bekijk winkelpagina\'s.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Magazijn beheren.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Bekijk magazijn.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Beheer de toegang van medewerkers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Toegang voor personeel bekijken.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Bekijk bestellingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Beheer bestellingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Beheer bedrijfsprofiel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Bekijk bedrijfsprofiel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Beheer kortingscodes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Bekijk kortingscodes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Beheer kortingsbonnen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Bekijk kortingsbonnen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Beheer aanbiedingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Bekijk aanbiedingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Beheer cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Bekijk cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Beheer loterijen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Bekijk loterijen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Beheer gemeenschap.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Bekijk gemeenschap.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Beheer klanten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Bekijk klanten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Beheer abonnementen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Bekijk abonnementen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Bekijk leveranciersorders.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Beheer leveranciersorders en betalingen.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Connect-providers beheren.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Bekijk connect-providers.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Voer AI-opdrachten uit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Bekijk AI-informatie.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Beheer leveranciersbetalingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Bekijk leveranciersbetalingen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Bekijk bedrijfsprofiel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Beheer bedrijfsprofiel.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Informatie van bureaus bekijken.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Beheer informatie over bureaus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Bekijk winkelnotities.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Beheer winkelnotities.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Bekijk ontwikkelaarsactiva.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Beheer ontwikkelaarsactiva.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Toegang tot persoonlijke informatie en accountinstellingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Beheer portemonnee en transacties.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Bekijk portemonneetransacties.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Bekijk OAuth-tokens en clients.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Beheer OAuth-tokens en klanten.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Beheer beveiligingsinstellingen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Beheer filialen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Bekijk aangesloten bedrijven.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Beheer printsjablonen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Bekijk printsjablonen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Beheer beoordelingen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Bekijk beoordelingen.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Bekijk informatie over het genereren van inkomsten.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Beheer informatie over het genereren van inkomsten.',



    'profile' => 'Lees profielinformatie, inclusief naam, e-mailadres, afbeelding en authenticatiestatus.',
    'phone' => 'Toegang tot contactnummer',
    'address' => 'Adres uit opgeslagen adresboek lezen en bewerken',
    'buy' => 'Bestellen & Winkelbestelling.',
    'order-history' => 'Bestelgeschiedenis lezen.',
    'my-gift-cards' => 'Toegang tot mijn cadeaubonnen.',
    'articles' => 'Artikelen bewerken.',
    'notifications' => 'Meldingen verzenden en ontvangen.',
    'read-shops' => 'Lees Winkellijst.',
    'shop-edit' => 'Bewerkingstoegang opslaan.',
    'shop-contacts' => 'Contactformulieren ontvangen en bewerken.',
    'shop-gift-cards' => 'Kaarten maken, bewerken en beheren.',
    'shop-faqs' => 'Veelgestelde vragen maken, bewerken en beheren.',
    'shop-categories' => 'Categorieën maken, bewerken en beheren.',
    'backoffice-write-products' => 'Autoriseer het maken, bewerken en beheren van producten in de backoffice.',
    'backoffice-read-products' => 'Geef toegang om de productenlijst en gedetailleerde productinformatie in de backoffice te bekijken.',
    'shop-read-reports' => 'Lees informatie en rapporten.',
    'shop-socials' => 'Bewerk winkel sociale netwerken.',
    'shop-accounts' => 'Aan de winkel gekoppelde financiële rekeningen bewerken en verwijderen.',
    'shop-menus' => 'Winkelmenu\'s bewerken.',
    'shop-pages' => 'Winkelpagina\'s bewerken.',
    'shop-warehouse' => 'Winkelmagazijn bewerken',
    'shop-permissions' => 'Winkeltoegang bekijken en bewerken.',
    'shop-process-center' => 'Beheer ontvangen bestellingen.',
    'shop-profile' => 'Beheer winkelprofielen.',
    'shop-discount-code' => 'Beheer kortingscodes.',
    'shop-coupon' => 'Kortingsbonnen beheren.',
    'shop-offer' => 'Aanbiedingen beheren.',
    'shop-cashback' => 'Beheer cashbacks.',
    'shop-lottery' => 'Loterijen beheren.',
    'shop-community' => 'Beheer gemeenschap.',
    'shop-customers' => 'Klanten beheren.',
    'shop-ribbon' => 'Beheer Ribbon-abonnementen.',
    'community-read' => 'Lees de Selldone-community.',
    'community-write' => 'Schrijf een selldone community.',
    'profile-write' => 'Schrijf gebruikersprofielinformatie.',
    'vendor-read' => 'Toegang tot uitvoeringsacties van leveranciersorders.',
    'vendor-write' => 'Wijzigingen in bestellingen, betalingen en andere informatie van de leverancier.',
    'connect-providers' => 'Connect-providers toevoegen, lezen en schrijven.',
    'personal-identification' => 'Lees persoonlijke informatie, toegang en accountconfiguratie.',
    'accounts' => 'Toegang tot wallets, transacties lezen en opwaardeergeschiedenissen.',
    'shop-add' => 'Nieuwe winkel toevoegen.',
    'shop-delete' => 'Een winkel verwijderen.',
    'shop-ai-write' => 'Hiermee kan de gebruiker AI-opdrachten uitvoeren.',
    'shop-ai-read' => 'Hiermee kan de gebruiker toegang krijgen tot AI-informatie zonder opdrachten uit te voeren.',
    'vendor-payment' => 'Hiermee kan de gebruiker betalingsgegevens voor leveranciers toevoegen of geld overmaken via hun gekoppelde accounts, zoals Stripe Connect.',
    'company-read' => 'Hiermee kunt u bedrijfsprofielinformatie lezen.',
    'company-write' => 'Hiermee kunt u bedrijfsprofielinformatie lezen en schrijven.',
    'agency-read' => 'Hiermee kunt u informatie over het agentschap lezen.',
    'agency-write' => 'Hiermee kunt u informatie over het agentschap lezen en schrijven.',
    'note-read' => 'Maakt het mogelijk om winkelnotities te lezen.',
    'note-write' => 'Hiermee kunt u winkelnotities lezen en schrijven.',
    'developer-read' => 'Hiermee kunnen ontwikkelaarsactiva worden gelezen.',
    'developer-write' => 'Maakt het mogelijk om ontwikkelaarsactiva te lezen en schrijven.',
    'tokens-read' => 'Lees OAuth-tokens en -clients.',
    'tokens-write' => 'Schrijf OAuth-tokens en -clients.',
];
