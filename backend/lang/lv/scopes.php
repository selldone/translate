<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administratora darbības joma.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ierobežota investoru piekļuve.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Izlasiet lietotāja profila informāciju.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Lasīt tālruņa numuru.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Lasiet un atjauniniet saglabātās adreses.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Atjaunināt lietotāja profilu.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Veiciet pasūtījumus.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Skatīt pasūtījumu vēsturi.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Piekļūstiet dāvanu kartēm.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Rediģēt rakstus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Pārvaldiet paziņojumus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Skatīt veikalu sarakstu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Rediģēt veikala informāciju.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Pievienot jaunu veikalu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Dzēst veikalu.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Pārvaldiet atbalsta biļetes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Pārvaldiet dāvanu kartes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Skatīt dāvanu kartes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Pārvaldīt FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Skatīt BUJ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Pārvaldīt kategorijas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Skatīt kategorijas.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Pārvaldiet produktus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Skatīt produktus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Skatīt pārskatus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Pārvaldīt finanšu kontus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Skatīt finanšu kontus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Rediģēt veikala lapas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Skatiet veikala lapas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Pārvaldīt noliktavu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Apskatīt noliktavu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Pārvaldīt personāla piekļuvi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Skatīt personāla piekļuvi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Skatīt pasūtījumus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Pārvaldīt pasūtījumus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Pārvaldīt uzņēmuma profilu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Skatīt uzņēmuma profilu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Pārvaldiet atlaižu kodus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Skatīt atlaižu kodus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Pārvaldīt kuponus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Skatīt kuponus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Pārvaldīt piedāvājumus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Skatīt piedāvājumus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Pārvaldiet naudas atdošanu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Skatiet naudas atmaksas.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Pārvaldīt loterijas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Skatīt loterijas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Pārvaldīt kopienu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Skatīt kopienu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Pārvaldīt klientus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Skatīt klientus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Pārvaldīt abonementus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Skatīt abonementus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Skatiet piegādātāju pasūtījumus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Pārvaldiet piegādātāju pasūtījumus un maksājumus.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Pārvaldiet savienojuma pakalpojumu sniedzējus.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Skatiet savienojuma pakalpojumu sniedzējus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Izpildiet AI komandas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Skatiet AI informāciju.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Pārvaldiet pārdevēja maksājumus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Skatiet pārdevēja maksājumus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Skatīt uzņēmuma profilu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Pārvaldīt uzņēmuma profilu.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Skatīt aģentūras informāciju.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Pārvaldīt aģentūru informāciju.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Skatīt veikala piezīmes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Pārvaldiet veikala piezīmes.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Skatīt izstrādātāja līdzekļus.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Pārvaldiet izstrādātāja līdzekļus.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Piekļūstiet personas informācijai un konta iestatījumiem.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Pārvaldiet maku un darījumus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Skatiet maka darījumus.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Skatiet OAuth žetonus un klientus.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Pārvaldiet OAuth marķierus un klientus.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Pārvaldiet drošības iestatījumus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Pārvaldīt saistītos uzņēmumus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Skatīt saistītos uzņēmumus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Pārvaldiet drukas veidnes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Skatīt drukas veidnes.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Pārvaldīt atsauksmes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Skatīt atsauksmes.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Skatiet monetizācijas informāciju.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Pārvaldiet monetizācijas informāciju.',



    'profile' => 'Lasiet profila informāciju, tostarp vārdu, e-pasta adresi, attēlu un autentifikācijas statusu.',
    'phone' => 'Piekļuve kontaktpersonas numuram',
    'address' => 'Lasīt un rediģēt adresi no saglabātās adrešu grāmatas',
    'buy' => 'Pasūtījums un pasūtījums veikalā.',
    'order-history' => 'Lasīt pasūtījumu vēsturi.',
    'my-gift-cards' => 'Piekļuve manām dāvanu kartēm.',
    'articles' => 'Rediģēt rakstus.',
    'notifications' => 'Sūtīt un saņemt paziņojumus.',
    'read-shops' => 'Izlasiet veikalu sarakstu.',
    'shop-edit' => 'Veikala rediģēšanas piekļuve.',
    'shop-contacts' => 'Saņemt un rediģēt kontaktu veidlapas.',
    'shop-gift-cards' => 'Karšu izveide, rediģēšana un pārvaldība.',
    'shop-faqs' => 'Izveidojiet, rediģējiet un pārvaldiet bieži uzdotos jautājumus.',
    'shop-categories' => 'Kategoriju izveide, rediģēšana un pārvaldība.',
    'backoffice-write-products' => 'Atļaut izveidot, rediģēt un pārvaldīt produktus aizmugurējā birojā.',
    'backoffice-read-products' => 'Atļaujiet piekļuvi, lai skatītu produktu sarakstu un detalizētu informāciju par produktiem birojā.',
    'shop-read-reports' => 'Lasīt informāciju un atskaites.',
    'shop-socials' => 'Rediģēt veikala sociālos tīklus.',
    'shop-accounts' => 'Rediģējiet un dzēsiet ar veikalu saistītos finanšu kontus.',
    'shop-menus' => 'Rediģēt veikala izvēlnes.',
    'shop-pages' => 'Rediģēt veikala lapas.',
    'shop-warehouse' => 'Rediģēt veikala noliktavu',
    'shop-permissions' => 'Skatiet un rediģējiet piekļuvi veikalam.',
    'shop-process-center' => 'Pārvaldiet saņemtos pasūtījumus.',
    'shop-profile' => 'Pārvaldīt veikalu profilus.',
    'shop-discount-code' => 'Pārvaldiet atlaižu kodus.',
    'shop-coupon' => 'Pārvaldīt kuponus.',
    'shop-offer' => 'Pārvaldiet piedāvājumus.',
    'shop-cashback' => 'Pārvaldiet naudas atdošanu.',
    'shop-lottery' => 'Pārvaldīt loterijas.',
    'shop-community' => 'Pārvaldīt kopienu.',
    'shop-customers' => 'Pārvaldīt klientus.',
    'shop-ribbon' => 'Pārvaldiet lentes abonementus.',
    'community-read' => 'Lasiet Selldone kopienu.',
    'community-write' => 'Uzrakstiet pardoto kopienu.',
    'profile-write' => 'Uzrakstiet lietotāja profila informāciju.',
    'vendor-read' => 'Piekļuve piegādātāja pasūtījumu izpildes darbībām.',
    'vendor-write' => 'Mainīt pasūtījumus, maksājumus un citu pārdevēja informāciju.',
    'connect-providers' => 'Pievienojiet, lasiet un rakstiet savienojuma pakalpojumu sniedzējus.',
    'personal-identification' => 'Lasiet personisko informāciju, piekļuves un konta konfigurāciju.',
    'accounts' => 'Piekļuve makiem, darījumu un papildināšanas vēstures lasīšana.',
    'shop-add' => 'Pievienot jaunu veikalu.',
    'shop-delete' => 'Noņemiet veikalu.',
    'shop-ai-write' => 'Ļauj lietotājam izpildīt AI komandas.',
    'shop-ai-read' => 'Ļauj lietotājam piekļūt AI informācijai, neizpildot komandas.',
    'vendor-payment' => 'Ļauj lietotājam pievienot pārdevēju maksājumu ierakstus vai pārskaitīt līdzekļus, izmantojot savus saistītos kontus, piemēram, Stripe Connect.',
    'company-read' => 'Ļauj lasīt uzņēmuma profila informāciju.',
    'company-write' => 'Ļauj lasīt un rakstīt uzņēmuma profila informāciju.',
    'agency-read' => 'Ļauj lasīt aģentūras informāciju.',
    'agency-write' => 'Ļauj lasīt un rakstīt aģentūras informāciju.',
    'note-read' => 'Ļauj lasīt veikala piezīmes.',
    'note-write' => 'Ļauj lasīt un rakstīt veikala piezīmes.',
    'developer-read' => 'Ļauj lasīt izstrādātāju līdzekļus.',
    'developer-write' => 'Ļauj lasīt un rakstīt izstrādātāju līdzekļus.',
    'tokens-read' => 'Lasiet Oauth pilnvaras un klientus.',
    'tokens-write' => 'Rakstiet Oauth marķierus un klientus.',
];
