<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Rozsah správce Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Omezený přístup investorů.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Přečtěte si podrobnosti uživatelského profilu.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Přečtěte si telefonní číslo.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Číst a aktualizovat uložené adresy.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Aktualizujte uživatelský profil.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Zadávejte objednávky.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Zobrazit historii objednávek.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Přístup k dárkovým kartám.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Upravovat články.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Spravujte oznámení.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Zobrazit seznam obchodů.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Upravit podrobnosti obchodu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Přidat nový obchod.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Smazat obchod.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Správa lístků podpory.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Správa dárkových karet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Zobrazit dárkové karty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Spravovat časté dotazy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Zobrazit nejčastější dotazy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Správa kategorií.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Zobrazit kategorie.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Správa produktů.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Zobrazit produkty.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Zobrazit přehledy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Spravovat finanční účty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Zobrazit finanční účty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Upravit stránky obchodu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Zobrazit stránky obchodu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Spravovat sklad.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Zobrazit sklad.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Spravujte přístup zaměstnanců.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Zobrazit přístup zaměstnanců.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Zobrazit objednávky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Spravujte objednávky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Správa firemního profilu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Zobrazit firemní profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Správa slevových kódů.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Zobrazit slevové kódy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Spravujte kupóny.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Zobrazit kupóny.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Spravujte nabídky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Zobrazit nabídky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Spravujte cashbacky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Zobrazit cashbacky.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Spravovat loterie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Zobrazit loterie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Spravovat komunitu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Zobrazit komunitu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Správa zákazníků.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Zobrazit zákazníky.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Správa předplatných.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Zobrazit odběry.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Zobrazit objednávky dodavatelů.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Správa objednávek a plateb dodavatelů.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Správa poskytovatelů připojení.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Zobrazit poskytovatele připojení.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Provádějte příkazy AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Zobrazení informací o AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Spravujte platby dodavatele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Zobrazit platby dodavatele.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Zobrazit firemní profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Správa firemního profilu.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Zobrazit informace o agentuře.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Spravujte informace o agenturách.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Zobrazit poznámky k obchodu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Spravujte poznámky k obchodu.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Zobrazit aktiva vývojáře.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Správa aktiv vývojářů.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Přístup k osobním údajům a nastavení účtu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Správa peněženky a transakcí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Zobrazit transakce peněženky.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Zobrazit tokeny a klienty OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Správa tokenů a klientů OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Spravujte nastavení zabezpečení.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Správa přidružených společností.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Zobrazit přidružené společnosti.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Správa tiskových šablon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Zobrazit tiskové šablony.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Spravovat recenze.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Zobrazit recenze.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Zobrazit informace o zpeněžení.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Správa informací o zpeněžení.',



    'profile' => 'Přečtěte si informace o profilu včetně jména, e-mailové adresy, obrázku a stavu ověření.',
    'phone' => 'Přístup na kontaktní číslo',
    'address' => 'Číst a upravovat adresu z uloženého adresáře',
    'buy' => 'Objednávka a nákup Objednávka.',
    'order-history' => 'Přečtěte si historii objednávek.',
    'my-gift-cards' => 'Přístup k mým dárkovým kartám.',
    'articles' => 'Upravit články.',
    'notifications' => 'Odesílejte a přijímejte upozornění.',
    'read-shops' => 'Přečtěte si seznam obchodů.',
    'shop-edit' => 'Přístup k úpravám obchodu.',
    'shop-contacts' => 'Přijímejte a upravujte kontaktní formuláře.',
    'shop-gift-cards' => 'Vytváření, úpravy a správa karet.',
    'shop-faqs' => 'Vytvářejte, upravujte a spravujte často kladené otázky.',
    'shop-categories' => 'Vytváření, úpravy a správa kategorií.',
    'backoffice-write-products' => 'Autorizujte vytváření, úpravy a správu produktů v back office.',
    'backoffice-read-products' => 'Autorizujte přístup k zobrazení seznamu produktů a podrobných informací o produktech v back office.',
    'shop-read-reports' => 'Přečtěte si informace a zprávy.',
    'shop-socials' => 'Upravit sociální sítě obchodu.',
    'shop-accounts' => 'Upravujte a mažte finanční účty propojené s obchodem.',
    'shop-menus' => 'Upravit nabídky obchodů.',
    'shop-pages' => 'Upravit stránky obchodu.',
    'shop-warehouse' => 'Upravit sklad skladu',
    'shop-permissions' => 'Zobrazit a upravit přístup k obchodu.',
    'shop-process-center' => 'Správa přijatých objednávek.',
    'shop-profile' => 'Správa profilů obchodů.',
    'shop-discount-code' => 'Správa slevových kódů.',
    'shop-coupon' => 'Spravujte kupóny.',
    'shop-offer' => 'Spravujte nabídky.',
    'shop-cashback' => 'Spravujte cashbacky.',
    'shop-lottery' => 'Spravovat loterie.',
    'shop-community' => 'Spravovat komunitu.',
    'shop-customers' => 'Správa zákazníků.',
    'shop-ribbon' => 'Správa předplatného pásu karet.',
    'community-read' => 'Přečtěte si komunitu Selldone.',
    'community-write' => 'Napište prodanou komunitu.',
    'profile-write' => 'Napište informace o uživatelském profilu.',
    'vendor-read' => 'Přístup k akcím plnění objednávek dodavatele.',
    'vendor-write' => 'Změňte objednávky, platby a další údaje prodejce.',
    'connect-providers' => 'Přidejte, čtěte a zapisujte poskytovatele připojení.',
    'personal-identification' => 'Přečtěte si osobní informace, přístupy a konfiguraci účtu.',
    'accounts' => 'Přístup k peněženkám, čtení transakcí a historie dobíjení.',
    'shop-add' => 'Přidat nový obchod.',
    'shop-delete' => 'Odstraňte obchod.',
    'shop-ai-write' => 'Umožňuje uživateli provádět příkazy AI.',
    'shop-ai-read' => 'Umožňuje uživateli přístup k informacím AI bez provádění příkazů.',
    'vendor-payment' => 'Umožňuje uživateli přidávat záznamy o platbách pro dodavatele nebo převádět prostředky prostřednictvím jejich propojených účtů, jako je Stripe Connect.',
    'company-read' => 'Umožňuje číst informace o firemním profilu.',
    'company-write' => 'Umožňuje číst a zapisovat informace o obchodním profilu.',
    'agency-read' => 'Umožňuje číst informace agentury.',
    'agency-write' => 'Umožňuje číst a zapisovat informace agentury.',
    'note-read' => 'Umožňuje číst poznámky z obchodu.',
    'note-write' => 'Umožňuje číst a psát poznámky z obchodu.',
    'developer-read' => 'Umožňuje číst aktiva vývojářů.',
    'developer-write' => 'Umožňuje číst a zapisovat aktiva vývojářů.',
    'tokens-read' => 'Přečtěte si Oauth tokeny a klienty.',
    'tokens-write' => 'Napište Oauth tokeny a klienty.',
];
