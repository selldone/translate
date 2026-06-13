<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administratorski opseg.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ograničen pristup investitorima.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Pročitajte detalje korisničkog profila.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Pročitajte broj telefona.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Pročitajte i ažurirajte sačuvane adrese.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ažurirajte korisnički profil.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Naručite.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Pogledajte historiju narudžbi.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Pristupite poklon karticama.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Uredite članke.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Upravljajte obavještenjima.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Pogledajte listu prodavnica.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Uredite detalje prodavnice.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Dodaj novu radnju.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Obriši prodavnicu.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Upravljajte tiketima za podršku.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Upravljajte poklon karticama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Pogledajte poklon kartice.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Upravljajte često postavljanim pitanjima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Pogledajte najčešća pitanja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Upravljajte kategorijama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Pogledajte kategorije.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Upravljajte proizvodima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Pogledajte proizvode.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Pogledajte izvještaje.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Upravljajte finansijskim računima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Pogledajte finansijske račune.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Uredite stranice trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Pregledajte stranice trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Upravljajte skladištem.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Pogled na skladište.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Upravljajte pristupom osoblja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Pogledajte pristup osoblja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Pogledajte narudžbe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Upravljajte nalozima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Upravljajte poslovnim profilom.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Pogledajte poslovni profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Upravljajte kodovima za popust.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Pogledajte kodove za popust.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Upravljajte kuponima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Pogledajte kupone.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Upravljajte ponudama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Pogledajte ponude.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Upravljajte povratima novca.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Pogledajte povrate novca.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Upravljajte lutrijama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Pogledajte lutrije.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Upravljajte zajednicom.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Pogledaj zajednicu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Upravljajte kupcima.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Pogledajte kupce.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Upravljajte pretplatama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Pogledajte pretplate.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Pogledajte narudžbe dobavljača.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Upravljajte narudžbama i plaćanjima dobavljača.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Upravljajte provajderima povezivanja.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Pogledajte provajdere za povezivanje.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Izvršite AI komande.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Pogledajte AI informacije.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Upravljajte plaćanjima dobavljača.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Pogledajte uplate dobavljača.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Pogledajte poslovni profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Upravljajte poslovnim profilom.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Pogledajte informacije o agenciji.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Upravljajte informacijama o agenciji.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Pogledajte bilješke iz trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Upravljajte bilješkama u trgovini.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Pogledajte sredstva programera.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Upravljajte imovinom programera.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Pristupite ličnim podacima i postavkama računa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Upravljajte novčanikom i transakcijama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Pogledajte transakcije novčanika.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Pogledajte OAuth tokene i klijente.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Upravljajte OAuth tokenima i klijentima.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Upravljajte sigurnosnim postavkama.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Upravljajte podružnicama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Pogledajte podružnice.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Upravljajte predlošcima za štampanje.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Pogledajte šablone za štampanje.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Upravljajte recenzijama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Pogledaj recenzije.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Pogledajte informacije o unovčavanju.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Upravljajte informacijama o unovčavanju.',



    'profile' => 'Pročitajte informacije o profilu uključujući ime, adresu e-pošte, sliku i status autentifikacije.',
    'phone' => 'Pristup kontakt broju',
    'address' => 'Pročitajte i uredite adresu iz sačuvanog adresara',
    'buy' => 'Red & Shop Order.',
    'order-history' => 'Pročitajte istoriju narudžbi.',
    'my-gift-cards' => 'Pristup mojim poklon karticama.',
    'articles' => 'Uredi članke.',
    'notifications' => 'Šaljite i primajte obavještenja.',
    'read-shops' => 'Pročitajte listu prodavnica.',
    'shop-edit' => 'Pristup za uređivanje trgovine.',
    'shop-contacts' => 'Primajte i uređujte kontakt forme.',
    'shop-gift-cards' => 'Kreiranje, uređivanje i upravljanje karticama.',
    'shop-faqs' => 'Kreirajte, uređujte i upravljajte često postavljanim pitanjima.',
    'shop-categories' => 'Kreiranje, uređivanje i upravljanje kategorijama.',
    'backoffice-write-products' => 'Ovlastite kreiranje, uređivanje i upravljanje proizvodima u back officeu.',
    'backoffice-read-products' => 'Ovlastite pristup za pregled liste proizvoda i detaljnih informacija o proizvodu u back officeu.',
    'shop-read-reports' => 'Pročitajte informacije i izvještaje.',
    'shop-socials' => 'Uredite društvene mreže trgovine.',
    'shop-accounts' => 'Uredite i izbrišite finansijske račune povezane s trgovinom.',
    'shop-menus' => 'Uredite menije prodavnice.',
    'shop-pages' => 'Uredite stranice trgovine.',
    'shop-warehouse' => 'Uredi Store Warehouse',
    'shop-permissions' => 'Pregledajte i uredite pristup trgovini.',
    'shop-process-center' => 'Upravljajte primljenim narudžbama.',
    'shop-profile' => 'Upravljajte profilima trgovine.',
    'shop-discount-code' => 'Upravljajte kodovima za popust.',
    'shop-coupon' => 'Upravljajte kuponima.',
    'shop-offer' => 'Upravljajte ponudama.',
    'shop-cashback' => 'Upravljajte povratima novca.',
    'shop-lottery' => 'Upravljajte lutrijama.',
    'shop-community' => 'Upravljajte zajednicom.',
    'shop-customers' => 'Upravljajte kupcima.',
    'shop-ribbon' => 'Upravljajte pretplatama na traku.',
    'community-read' => 'Pročitajte Selldone zajednicu.',
    'community-write' => 'Napišite selldone community.',
    'profile-write' => 'Napišite informacije o korisničkom profilu.',
    'vendor-read' => 'Pristup radnjama ispunjenja narudžbi dobavljača.',
    'vendor-write' => 'Promijenite narudžbe, plaćanje i druge podatke dobavljača.',
    'connect-providers' => 'Dodavanje, čitanje i pisanje povezivanja dobavljača.',
    'personal-identification' => 'Pročitajte lične podatke, pristupe i konfiguraciju naloga.',
    'accounts' => 'Pristup novčanicima, čitanje transakcija i historije dopune.',
    'shop-add' => 'Dodaj novu radnju.',
    'shop-delete' => 'Uklonite prodavnicu.',
    'shop-ai-write' => 'Omogućava korisniku da izvrši AI komande.',
    'shop-ai-read' => 'Omogućava korisniku da pristupi AI informacijama bez izvršavanja naredbi.',
    'vendor-payment' => 'Omogućava korisniku da dodaje evidenciju plaćanja za dobavljače ili prenosi sredstva preko njihovih povezanih računa kao što je Stripe Connect.',
    'company-read' => 'Omogućava čitanje informacija o poslovnom profilu.',
    'company-write' => 'Omogućava čitanje i pisanje informacija o poslovnom profilu.',
    'agency-read' => 'Omogućava čitanje informacija o agenciji.',
    'agency-write' => 'Omogućava čitanje i pisanje informacija o agenciji.',
    'note-read' => 'Omogućava čitanje bilješki trgovine.',
    'note-write' => 'Omogućava čitanje i pisanje bilješki trgovine.',
    'developer-read' => 'Omogućava čitanje sredstava programera.',
    'developer-write' => 'Omogućava čitanje i pisanje sredstava programera.',
    'tokens-read' => 'Pročitajte Oauth tokene i klijente.',
    'tokens-write' => 'Napišite Oauth tokene i klijente.',
];
