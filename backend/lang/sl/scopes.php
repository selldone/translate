<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Obseg skrbnika Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Omejen dostop vlagateljev.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Preberite podrobnosti uporabniškega profila.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Preberi telefonsko številko.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Preberite in posodobite shranjene naslove.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Posodobite uporabniški profil.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Oddajte naročila.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Ogled zgodovine naročil.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Dostop do darilnih kartic.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Uredite članke.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Upravljanje obvestil.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Oglejte si seznam trgovin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Uredite podrobnosti trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Dodaj novo trgovino.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Izbriši trgovino.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Upravljajte vstopnice za podporo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Upravljajte darilne kartice.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Oglejte si darilne kartice.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Upravljajte pogosta vprašanja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Oglejte si pogosta vprašanja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Upravljanje kategorij.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Ogled kategorij.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Upravljanje izdelkov.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Oglejte si izdelke.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ogled poročil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Upravljajte finančne račune.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Oglejte si finančne račune.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Urejanje strani trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Oglejte si strani trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Upravljanje skladišča.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ogled skladišča.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Upravljajte dostop osebja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Oglejte si dostop osebja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Oglejte si naročila.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Upravljanje naročil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Upravljajte poslovni profil.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Ogled poslovnega profila.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Upravljajte kode za popust.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Oglejte si kode za popust.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Upravljanje kuponov.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Oglejte si kupone.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Upravljanje ponudb.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Oglejte si ponudbe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Upravljajte vračila denarja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Ogled vračil denarja.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Upravljajte loterije.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Oglejte si loterije.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Upravljanje skupnosti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Ogled skupnosti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Upravljajte stranke.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Oglejte si stranke.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Upravljanje naročnin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Oglejte si naročnine.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Oglejte si naročila prodajalcev.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Upravljajte naročila in plačila prodajalcev.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Upravljanje povezovalnih ponudnikov.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Oglejte si ponudnike povezav.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Izvajajte ukaze AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Ogled informacij AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Upravljajte plačila prodajalcem.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Oglejte si plačila prodajalca.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Ogled poslovnega profila.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Upravljajte poslovni profil.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Oglejte si podatke agencije.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Upravljajte podatke agencije.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Oglejte si opombe trgovine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Upravljajte opombe v trgovini.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Oglejte si sredstva razvijalca.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Upravljajte sredstva razvijalca.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Dostop do osebnih podatkov in nastavitev računa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Upravljajte denarnico in transakcije.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Oglejte si transakcije denarnice.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Oglejte si žetone OAuth in odjemalce.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Upravljajte žetone OAuth in odjemalce.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Upravljanje varnostnih nastavitev.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Upravljajte podružnice.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Oglejte si podružnice.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Upravljajte predloge za tiskanje.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Oglejte si predloge za tiskanje.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Upravljanje pregledov.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Oglejte si ocene.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Oglejte si podatke o monetizaciji.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Upravljajte podatke o monetizaciji.',



    'profile' => 'Preberite podatke o profilu, vključno z imenom, e-poštnim naslovom, sliko in stanjem preverjanja pristnosti.',
    'phone' => 'Dostop do kontaktne številke',
    'address' => 'Preberite in uredite naslov iz shranjenega imenika',
    'buy' => 'Naročilo in naročilo v trgovini.',
    'order-history' => 'Preberi zgodovino naročil.',
    'my-gift-cards' => 'Dostop do mojih darilnih kartic.',
    'articles' => 'Uredi članke.',
    'notifications' => 'Pošiljanje in prejemanje obvestil.',
    'read-shops' => 'Preberite seznam trgovin.',
    'shop-edit' => 'Dostop za urejanje trgovine.',
    'shop-contacts' => 'Prejemanje in urejanje kontaktnih obrazcev.',
    'shop-gift-cards' => 'Ustvarjanje, urejanje in upravljanje kartic.',
    'shop-faqs' => 'Ustvarite, uredite in upravljajte pogosto zastavljena vprašanja.',
    'shop-categories' => 'Ustvarjanje, urejanje in upravljanje kategorij.',
    'backoffice-write-products' => 'Dovolite ustvarjanje, urejanje in upravljanje izdelkov v zaledni pisarni.',
    'backoffice-read-products' => 'Dovolite dostop za ogled seznama izdelkov in podrobnih informacij o izdelkih v zaledni pisarni.',
    'shop-read-reports' => 'Preberite informacije in poročila.',
    'shop-socials' => 'Uredite družabna omrežja trgovine.',
    'shop-accounts' => 'Urejanje in brisanje finančnih računov, povezanih s trgovino.',
    'shop-menus' => 'Uredite menije trgovine.',
    'shop-pages' => 'Urejanje strani trgovine.',
    'shop-warehouse' => 'Uredi skladišče trgovine',
    'shop-permissions' => 'Oglejte si in uredite dostop do trgovine.',
    'shop-process-center' => 'Upravljajte prejeta naročila.',
    'shop-profile' => 'Upravljajte profile trgovin.',
    'shop-discount-code' => 'Upravljajte kode za popust.',
    'shop-coupon' => 'Upravljanje kuponov.',
    'shop-offer' => 'Upravljanje ponudb.',
    'shop-cashback' => 'Upravljajte vračila denarja.',
    'shop-lottery' => 'Upravljajte loterije.',
    'shop-community' => 'Upravljanje skupnosti.',
    'shop-customers' => 'Upravljajte stranke.',
    'shop-ribbon' => 'Upravljajte naročnine na trak.',
    'community-read' => 'Preberite skupnost Selldone.',
    'community-write' => 'Napišite skupnost selldone.',
    'profile-write' => 'Napišite podatke o uporabniškem profilu.',
    'vendor-read' => 'Dostop do dejanj izpolnjevanja naročil prodajalca.',
    'vendor-write' => 'Spremenite naročila, plačila in druge podatke prodajalca.',
    'connect-providers' => 'Dodajanje, branje in pisanje povezovalnih ponudnikov.',
    'personal-identification' => 'Preberite osebne podatke, dostope in konfiguracijo računa.',
    'accounts' => 'Dostop do denarnic, branje transakcij in zgodovine dopolnitev.',
    'shop-add' => 'Dodaj novo trgovino.',
    'shop-delete' => 'Odstranite trgovino.',
    'shop-ai-write' => 'Uporabniku omogoča izvajanje ukazov AI.',
    'shop-ai-read' => 'Uporabniku omogoča dostop do informacij AI brez izvajanja ukazov.',
    'vendor-payment' => 'Uporabniku omogoča dodajanje zapisov o plačilih za prodajalce ali prenos sredstev prek njihovih povezanih računov, kot je Stripe Connect.',
    'company-read' => 'Omogoča branje informacij o poslovnem profilu.',
    'company-write' => 'Omogoča branje in pisanje podatkov o poslovnem profilu.',
    'agency-read' => 'Omogoča branje agencijskih podatkov.',
    'agency-write' => 'Omogoča branje in pisanje agencijskih informacij.',
    'note-read' => 'Omogoča branje opomb v trgovini.',
    'note-write' => 'Omogoča branje in pisanje opomb v trgovini.',
    'developer-read' => 'Omogoča branje sredstev razvijalcev.',
    'developer-write' => 'Omogoča branje in pisanje sredstev razvijalcev.',
    'tokens-read' => 'Preberite žetone Oauth in odjemalce.',
    'tokens-write' => 'Pišite žetone Oauth in odjemalce.',
];
