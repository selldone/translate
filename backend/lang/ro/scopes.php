<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Domeniul de aplicare al administratorului Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Acces restricționat pentru investitori.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Citiți detaliile profilului utilizatorului.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Citiți numărul de telefon.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Citiți și actualizați adresele salvate.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Actualizați profilul utilizatorului.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Plasați comenzi.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Vezi istoricul comenzilor.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Accesați carduri cadou.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Editați articole.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Gestionați notificările.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Vezi lista magazinului.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Editați detaliile magazinului.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Adăugați un magazin nou.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Șterge magazinul.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Gestionați biletele de asistență.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Gestionați cardurile cadou.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Vizualizați carduri cadou.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Gestionați întrebările frecvente.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Vedeți întrebări frecvente.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Gestionați categoriile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Vizualizați categorii.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Gestionați produsele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Vezi produse.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Vizualizați rapoarte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Gestionați conturile financiare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Vizualizați conturile financiare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Editați paginile magazinului.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Vizualizați paginile magazinului.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gestionează depozitul.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Vezi depozitul.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Gestionați accesul personalului.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Vedeți accesul personalului.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Vizualizați comenzile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Gestionați comenzile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Gestionați profilul companiei.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Vezi profilul companiei.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Gestionați codurile de reducere.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Vedeți codurile de reducere.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Gestionați cupoanele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Vezi cupoane.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Gestionați ofertele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Vezi oferte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gestionați cashback-urile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Vedeți rambursările.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Gestionați loteriile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Vizualizați loteriile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Gestionează comunitatea.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Vizualizați comunitatea.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Gestionați clienții.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Vedeți clienții.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Gestionați abonamentele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Vizualizați abonamentele.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Vizualizați comenzile furnizorilor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Gestionați comenzile și plățile furnizorilor.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Gestionați furnizorii de conectare.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Vedeți furnizorii de conectare.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Executați comenzile AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Vizualizați informații despre AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Gestionați plățile furnizorilor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Vedeți plățile furnizorilor.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Vezi profilul companiei.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Gestionați profilul companiei.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Vizualizați informații despre agenție.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Gestionați informațiile agenției.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Vezi notele magazinului.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Gestionați notele din magazin.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Vedeți elementele dezvoltatorului.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Gestionați activele dezvoltatorului.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Accesați informațiile personale și setările contului.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Gestionați portofelul și tranzacțiile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Vizualizați tranzacțiile cu portofel.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Vedeți jetoanele OAuth și clienții.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Gestionați jetoanele și clienții OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Gestionați setările de securitate.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Gestionați afiliații.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Vedeți afiliații.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Gestionați șabloanele de imprimare.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Vizualizați șabloanele de imprimare.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Gestionați recenziile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Vezi recenzii.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Vedeți informații despre generare de bani.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Gestionați informațiile de generare de bani.',



    'profile' => 'Citiți informațiile de profil, inclusiv numele, adresa de e-mail, imaginea și starea de autentificare.',
    'phone' => 'Acces la numărul de contact',
    'address' => 'Citiți și editați adresa din agenda salvată',
    'buy' => 'Comandă și comandă la magazin.',
    'order-history' => 'Citiți istoricul comenzilor.',
    'my-gift-cards' => 'Acces la cardurile mele cadou.',
    'articles' => 'Editați articole.',
    'notifications' => 'Trimiteți și primiți notificări.',
    'read-shops' => 'Citiți Lista magazinului.',
    'shop-edit' => 'Acces de editare în magazin.',
    'shop-contacts' => 'Primiți și editați formulare de contact.',
    'shop-gift-cards' => 'Crearea, editarea și gestionarea cardurilor.',
    'shop-faqs' => 'Creați, editați și gestionați întrebările frecvente.',
    'shop-categories' => 'Crearea, editarea și gestionarea categoriilor.',
    'backoffice-write-products' => 'Autorizați crearea, editarea și gestionarea produselor din back office.',
    'backoffice-read-products' => 'Autorizați accesul pentru a vizualiza lista de produse și informații detaliate despre produse în back office.',
    'shop-read-reports' => 'Citiți informații și rapoarte.',
    'shop-socials' => 'Editați rețelele sociale ale magazinului.',
    'shop-accounts' => 'Editați și ștergeți conturile financiare legate de magazine.',
    'shop-menus' => 'Editați meniurile magazinului.',
    'shop-pages' => 'Editați paginile magazinului.',
    'shop-warehouse' => 'Editați depozitul magazinului',
    'shop-permissions' => 'Vizualizați și editați accesul la magazin.',
    'shop-process-center' => 'Gestionați comenzile primite.',
    'shop-profile' => 'Gestionați profilurile magazinului.',
    'shop-discount-code' => 'Gestionați codurile de reducere.',
    'shop-coupon' => 'Gestionați cupoanele.',
    'shop-offer' => 'Gestionați ofertele.',
    'shop-cashback' => 'Gestionați cashback-urile.',
    'shop-lottery' => 'Gestionați loteriile.',
    'shop-community' => 'Gestionează comunitatea.',
    'shop-customers' => 'Gestionați clienții.',
    'shop-ribbon' => 'Gestionați abonamentele Ribbon.',
    'community-read' => 'Citiți comunitatea Selldone.',
    'community-write' => 'Scrie comunitatea selldone.',
    'profile-write' => 'Scrieți informații despre profilul utilizatorului.',
    'vendor-read' => 'Acces la acțiunile de onorare a comenzilor furnizorilor.',
    'vendor-write' => 'Modificați comenzile, plata și alte informații ale vânzătorului.',
    'connect-providers' => 'Adăugați, citiți și scrieți furnizori de conectare.',
    'personal-identification' => 'Citiți informațiile personale, accesările și configurația contului.',
    'accounts' => 'Acces la portofele, citiți tranzacțiile și istoricul reîncărcărilor.',
    'shop-add' => 'Adăugați un magazin nou.',
    'shop-delete' => 'Scoateți un magazin.',
    'shop-ai-write' => 'Permite utilizatorului să execute comenzi AI.',
    'shop-ai-read' => 'Permite utilizatorului să acceseze informațiile AI fără a executa comenzi.',
    'vendor-payment' => 'Permite utilizatorului să adauge înregistrări de plăți pentru furnizori sau să transfere fonduri prin conturile lor conectate, cum ar fi Stripe Connect.',
    'company-read' => 'Permite citirea informațiilor despre profilul companiei.',
    'company-write' => 'Permite citirea și scrierea informațiilor despre profilul companiei.',
    'agency-read' => 'Permite citirea informațiilor despre agenție.',
    'agency-write' => 'Permite citirea și scrierea informațiilor despre agenție.',
    'note-read' => 'Permite citirea notițelor magazinului.',
    'note-write' => 'Permite citirea și scrierea notițelor din magazin.',
    'developer-read' => 'Permite citirea activelor dezvoltatorilor.',
    'developer-write' => 'Permite citirea și scrierea activelor dezvoltatorilor.',
    'tokens-read' => 'Citiți jetoane și clienți Oauth.',
    'tokens-write' => 'Scrieți jetoane și clienți Oauth.',
];
