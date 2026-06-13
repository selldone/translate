<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone opseg administratora.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ograničen pristup investitora.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Pročitajte detalje korisničkog profila.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Pročitaj telefonski broj.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Pročitajte i ažurirajte spremljene adrese.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ažurirajte korisnički profil.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Naručite.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Pregledajte povijest narudžbi.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Pristup darovnim karticama.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Uredite članke.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Upravljanje obavijestima.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Pogledajte popis trgovina.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Uredi detalje trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Dodaj novu trgovinu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Izbriši trgovinu.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Upravljajte ulaznicama za podršku.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Upravljajte darovnim karticama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Pogledajte darovne kartice.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Upravljanje često postavljanim pitanjima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Pogledajte FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Upravljanje kategorijama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Pogledajte kategorije.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Upravljanje proizvodima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Pogledajte proizvode.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Pregledajte izvješća.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Upravljanje financijskim računima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Pregledajte financijske račune.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Uređivanje stranica trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Pogledajte stranice trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Upravljanje skladištem.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Pogled na skladište.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Upravljanje pristupom osoblja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Pregledajte pristup osoblja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Pogledajte narudžbe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Upravljanje narudžbama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Upravljanje poslovnim profilom.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Pogledajte poslovni profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Upravljajte kodovima za popust.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Pogledajte kodove za popust.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Upravljanje kuponima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Pogledajte kupone.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Upravljanje ponudama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Pogledajte ponude.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Upravljajte povratima novca.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Pogledajte povrate novca.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Upravljajte lutrijom.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Pogledajte lutrije.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Upravljanje zajednicom.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Pogledaj zajednicu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Upravljajte klijentima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Pogledajte kupce.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Upravljanje pretplatama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Pogledajte pretplate.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Pregledajte narudžbe dobavljača.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Upravljajte narudžbama dobavljača i plaćanjima.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Upravljajte pružateljima usluga povezivanja.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Pogledajte pružatelje usluga povezivanja.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Izvršite AI naredbe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Pregledajte informacije o umjetnoj inteligenciji.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Upravljajte plaćanjima dobavljača.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Pogledajte plaćanja dobavljača.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Pogledajte poslovni profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Upravljanje poslovnim profilom.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Pogledajte podatke agencije.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Upravljanje podacima agencije.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Pogledajte bilješke trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Upravljajte bilješkama trgovine.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Pregledajte sredstva programera.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Upravljajte imovinom programera.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Pristup osobnim podacima i postavkama računa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Upravljajte novčanikom i transakcijama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Pregledajte transakcije novčanika.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Pregledajte OAuth tokene i klijente.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Upravljajte OAuth tokenima i klijentima.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Upravljanje sigurnosnim postavkama.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Upravljajte podružnicama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Pogledajte podružnice.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Upravljanje predlošcima za ispis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Pogledajte predloške za ispis.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Upravljanje recenzijama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Pogledajte recenzije.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Pogledajte podatke o monetizaciji.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Upravljanje informacijama o unovčavanju.',



    'profile' => 'Pročitajte podatke o profilu uključujući ime, adresu e-pošte, sliku i status provjere autentičnosti.',
    'phone' => 'Pristup kontakt broju',
    'address' => 'Pročitajte i uredite adresu iz spremljenog adresara',
    'buy' => 'Naručite i naručite.',
    'order-history' => 'Pročitajte povijest narudžbi.',
    'my-gift-cards' => 'Pristup mojim poklon karticama.',
    'articles' => 'Uredi članke.',
    'notifications' => 'Šaljite i primajte obavijesti.',
    'read-shops' => 'Pročitajte popis trgovina.',
    'shop-edit' => 'Pristup uređivanju trgovine.',
    'shop-contacts' => 'Primajte i uređujte kontakt forme.',
    'shop-gift-cards' => 'Izrada, uređivanje i upravljanje karticama.',
    'shop-faqs' => 'Stvorite, uredite i upravljajte često postavljanim pitanjima.',
    'shop-categories' => 'Stvaranje, uređivanje i upravljanje kategorijama.',
    'backoffice-write-products' => 'Ovlastite kreiranje, uređivanje i upravljanje proizvodima u pozadinskom uredu.',
    'backoffice-read-products' => 'Odobrite pristup za pregled popisa proizvoda i detaljnih informacija o proizvodu u pozadinskom uredu.',
    'shop-read-reports' => 'Pročitajte informacije i izvješća.',
    'shop-socials' => 'Uredite društvene mreže trgovine.',
    'shop-accounts' => 'Uređivanje i brisanje financijskih računa povezanih s trgovinama.',
    'shop-menus' => 'Uredite izbornike trgovine.',
    'shop-pages' => 'Uređivanje stranica trgovine.',
    'shop-warehouse' => 'Uredi Skladište trgovine',
    'shop-permissions' => 'Pregledajte i uredite pristup trgovini.',
    'shop-process-center' => 'Upravljanje primljenim narudžbama.',
    'shop-profile' => 'Upravljajte profilima trgovine.',
    'shop-discount-code' => 'Upravljajte kodovima za popust.',
    'shop-coupon' => 'Upravljanje kuponima.',
    'shop-offer' => 'Upravljanje ponudama.',
    'shop-cashback' => 'Upravljajte povratima novca.',
    'shop-lottery' => 'Upravljajte lutrijom.',
    'shop-community' => 'Upravljanje zajednicom.',
    'shop-customers' => 'Upravljajte klijentima.',
    'shop-ribbon' => 'Upravljajte pretplatama na vrpcu.',
    'community-read' => 'Pročitajte Selldone zajednicu.',
    'community-write' => 'Napišite selldone zajednicu.',
    'profile-write' => 'Napišite informacije o korisničkom profilu.',
    'vendor-read' => 'Pristup radnjama ispunjenja narudžbi dobavljača.',
    'vendor-write' => 'Promjena narudžbi, plaćanja i ostalih podataka dobavljača.',
    'connect-providers' => 'Dodavanje, čitanje i pisanje povezivanja pružatelja usluga.',
    'personal-identification' => 'Čitajte osobne podatke, pristupe i konfiguraciju računa.',
    'accounts' => 'Pristup novčanicima, čitanje transakcija i povijest dopuna.',
    'shop-add' => 'Dodaj novu trgovinu.',
    'shop-delete' => 'Uklonite trgovinu.',
    'shop-ai-write' => 'Omogućuje korisniku izvršavanje AI naredbi.',
    'shop-ai-read' => 'Omogućuje korisniku pristup informacijama AI bez izvršavanja naredbi.',
    'vendor-payment' => 'Omogućuje korisniku dodavanje evidencije plaćanja za dobavljače ili prijenos sredstava putem njihovih povezanih računa kao što je Stripe Connect.',
    'company-read' => 'Omogućuje čitanje informacija o poslovnom profilu.',
    'company-write' => 'Omogućuje čitanje i pisanje podataka o poslovnom profilu.',
    'agency-read' => 'Omogućuje čitanje agencijskih podataka.',
    'agency-write' => 'Omogućuje čitanje i pisanje agencijskih podataka.',
    'note-read' => 'Omogućuje čitanje bilješki trgovine.',
    'note-write' => 'Omogućuje čitanje i pisanje bilješki trgovine.',
    'developer-read' => 'Omogućuje čitanje sredstava programera.',
    'developer-write' => 'Omogućuje čitanje i pisanje resursa programera.',
    'tokens-read' => 'Čitajte Oauth tokene i klijente.',
    'tokens-write' => 'Pišite Oauth tokene i klijente.',
];
