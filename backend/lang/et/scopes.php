<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administraatori ulatus.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Investorite juurdepääs piiratud.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lugege kasutajaprofiili üksikasju.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Lugege telefoninumbrit.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Salvestatud aadresside lugemine ja värskendamine.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Uuenda kasutajaprofiili.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Esitage tellimusi.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Vaata tellimuste ajalugu.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Juurdepääs kinkekaartidele.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Redigeeri artikleid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Hallake teatisi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Vaata kaupluste nimekirja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Muutke poe üksikasju.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Lisa uus pood.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Kustuta pood.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Hallake tugipileteid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Kinkekaartide haldamine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Vaata kinkekaarte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'KKK haldamine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Vaadake KKK-sid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Hallake kategooriaid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Vaata kategooriaid.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Hallake tooteid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Vaata tooteid.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Vaadake aruandeid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Hallake finantskontosid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Vaadake finantskontosid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Muutke poe lehti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Vaadake poe lehti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Halda ladu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Vaata ladu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Hallake töötajate juurdepääsu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Vaadake töötajate juurdepääsu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Vaata tellimusi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Hallake tellimusi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Ettevõtte profiili haldamine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Vaadake ettevõtte profiili.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Halda sooduskoode.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Vaata sooduskoode.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Kupongide haldamine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Vaata kuponge.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Pakkumiste haldamine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Vaata pakkumisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Hallake rahatagastusi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Vaadake rahatagastusi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Halda loteriisid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Vaata loteriisid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Halda kogukonda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Kuva kogukond.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Hallake kliente.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Vaadake kliente.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Hallake tellimusi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Vaadake tellimusi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Vaadake tarnija tellimusi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Hallake tarnija tellimusi ja makseid.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Ühenduse pakkujate haldamine.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Vaadake ühenduse pakkujaid.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Käivitage AI-käsud.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Vaadake tehisintellekti teavet.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Hallake hankija makseid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Vaadake hankija makseid.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Vaadake ettevõtte profiili.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Ettevõtte profiili haldamine.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Vaadake agentuuri teavet.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Agentuuri teabe haldamine.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Vaadake poe märkmeid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Hallake poe märkmeid.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Vaadake arendaja varasid.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Hallake arendaja varasid.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Juurdepääs isiklikule teabele ja konto seadetele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Hallake rahakotti ja tehinguid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Vaadake rahakoti tehinguid.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Vaadake OAuth märke ja kliente.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Hallake OAuth žetoone ja kliente.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Turvaseadete haldamine.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Hallake sidusettevõtteid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Vaata sidusettevõtteid.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Prindimallide haldamine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Vaadake prindimalle.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Halda arvustusi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Vaadake arvustusi.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Vaadake monetiseerimisteavet.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Hallake monetiseerimisteavet.',



    'profile' => 'Lugege profiiliteavet, sealhulgas nime, e-posti aadressi, pilti ja autentimise olekut.',
    'phone' => 'Juurdepääs kontaktinumbrile',
    'address' => 'Lugege ja muutke aadressi salvestatud aadressiraamatust',
    'buy' => 'Tellimine ja tellimus poodi.',
    'order-history' => 'Lugege tellimuste ajalugu.',
    'my-gift-cards' => 'Juurdepääs minu kinkekaartidele.',
    'articles' => 'Redigeeri artikleid.',
    'notifications' => 'Saatke ja võtke vastu teateid.',
    'read-shops' => 'Lugege poe loendit.',
    'shop-edit' => 'Poe muutmise juurdepääs.',
    'shop-contacts' => 'Võtke vastu ja muutke kontaktivorme.',
    'shop-gift-cards' => 'Kaartide loomine, redigeerimine ja haldamine.',
    'shop-faqs' => 'Korduma kippuvate küsimuste loomine, muutmine ja haldamine.',
    'shop-categories' => 'Kategooriate loomine, redigeerimine ja haldamine.',
    'backoffice-write-products' => 'Luba toodete loomiseks, redigeerimiseks ja haldamiseks tagakontoris.',
    'backoffice-read-products' => 'Lubage juurdepääs toodete loendi ja üksikasjaliku tooteteabe vaatamiseks tagakontoris.',
    'shop-read-reports' => 'Lugege teavet ja aruandeid.',
    'shop-socials' => 'Muutke poe sotsiaalvõrgustikke.',
    'shop-accounts' => 'Muutke ja kustutage kauplusega seotud finantskontosid.',
    'shop-menus' => 'Muutke poe menüüsid.',
    'shop-pages' => 'Muutke poe lehti.',
    'shop-warehouse' => 'Redigeeri poe ladu',
    'shop-permissions' => 'Poe juurdepääsu vaatamine ja muutmine.',
    'shop-process-center' => 'Hallake saadud tellimusi.',
    'shop-profile' => 'Kaupluste profiilide haldamine.',
    'shop-discount-code' => 'Halda sooduskoode.',
    'shop-coupon' => 'Kupongide haldamine.',
    'shop-offer' => 'Pakkumiste haldamine.',
    'shop-cashback' => 'Hallake rahatagastusi.',
    'shop-lottery' => 'Halda loteriisid.',
    'shop-community' => 'Halda kogukonda.',
    'shop-customers' => 'Hallake kliente.',
    'shop-ribbon' => 'Lindi tellimuste haldamine.',
    'community-read' => 'Lugege Selldone\'i kogukonda.',
    'community-write' => 'Kirjutage müüdud kommuun.',
    'profile-write' => 'Kirjutage kasutajaprofiili teave.',
    'vendor-read' => 'Juurdepääs tarnija tellimuste täitmise toimingutele.',
    'vendor-write' => 'Muutke müüja tellimusi, makseid ja muud teavet.',
    'connect-providers' => 'Lisage, lugege ja kirjutage ühenduse pakkujaid.',
    'personal-identification' => 'Isikuandmete, juurdepääsude ja konto konfiguratsiooni lugemine.',
    'accounts' => 'Juurdepääs rahakottidele, tehingute ja laadimisajaloo lugemine.',
    'shop-add' => 'Lisa uus pood.',
    'shop-delete' => 'Eemaldage pood.',
    'shop-ai-write' => 'Võimaldab kasutajal täita AI-käske.',
    'shop-ai-read' => 'Võimaldab kasutajal juurdepääsu AI teabele ilma käske täitmata.',
    'vendor-payment' => 'Võimaldab kasutajal lisada hankijate maksekirjeid või kanda raha üle nende ühendatud kontode (nt Stripe Connect) kaudu.',
    'company-read' => 'Võimaldab lugeda ettevõtte profiiliteavet.',
    'company-write' => 'Võimaldab lugeda ja kirjutada ettevõtte profiiliteavet.',
    'agency-read' => 'Võimaldab lugeda agentuuri teavet.',
    'agency-write' => 'Võimaldab lugeda ja kirjutada agentuuriteavet.',
    'note-read' => 'Võimaldab lugeda poe märkmeid.',
    'note-write' => 'Võimaldab lugeda ja kirjutada poemärkmeid.',
    'developer-read' => 'Võimaldab lugeda arendaja varasid.',
    'developer-write' => 'Võimaldab lugeda ja kirjutada arendaja varasid.',
    'tokens-read' => 'Lugege Oauthi märke ja kliente.',
    'tokens-write' => 'Kirjutage Oauthi märgid ja kliendid.',
];
