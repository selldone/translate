<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Iyakar mai gudanarwa Selldone.
Saukewa:',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ƙuntataccen damar saka hannun jari.
Saukewa:',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Karanta bayanan bayanan mai amfani.
Saukewa:',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Karanta lambar waya.
Saukewa:',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Karanta kuma sabunta adiresoshin da aka adana.
Saukewa:',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Sabunta bayanin martabar mai amfani.
Saukewa:',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Sanya umarni.
Saukewa:',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Duba tarihin oda.
Saukewa:',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Samun damar katunan kyauta.
Saukewa:',

    AuthServiceProvider::SCOPE_ARTICLES => 'Gyara labarai.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Sarrafa sanarwa.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Duba jerin kantuna.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Gyara bayanan kantin.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Ƙara sabon shago.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Share shagon.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Sarrafa tikitin tallafi.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Sarrafa katunan kyauta.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Duba katunan kyauta.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Sarrafa FAQs.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Duba FAQs.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Sarrafa rukunoni.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Duba rukunoni.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Sarrafa samfurori.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Duba samfuran.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Duba rahotanni.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Sarrafa asusun kuɗi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Duba asusun kuɗi.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Gyara shafukan kantin.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Duba shafuffukan shaguna.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Sarrafa sito.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Duba sito.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Sarrafa samun damar ma\'aikata.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Duba damar ma\'aikata.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Duba umarni.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Sarrafa umarni.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Sarrafa bayanan kasuwanci.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Duba bayanan kasuwanci.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Sarrafa lambobin rangwame.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Duba lambobin rangwame.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Sarrafa takardun shaida.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Duba takardun shaida.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Sarrafa tayin.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Duba tayi
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Sarrafa cashbacks.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Duba cashbacks.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Sarrafa irin caca.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Duba irin caca.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Sarrafa al\'umma.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Duba al\'umma.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Sarrafa abokan ciniki.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Duba abokan ciniki.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Sarrafa biyan kuɗi.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Duba biyan kuɗi.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Duba umarnin mai siyarwa.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Sarrafa odar dillalai da biyan kuɗi.
Saukewa:',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Sarrafa masu samar da haɗin haɗin gwiwa.
Saukewa:',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Duba masu samar da haɗin kai.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Yi umarnin AI.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Duba bayanan AI.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Sarrafa biyan kuɗi na mai siyarwa.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Duba biyan kuɗi na mai siyarwa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Duba bayanan kasuwanci.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Sarrafa bayanan kasuwanci.
Saukewa:',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Duba bayanin hukumar.
Saukewa:',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Sarrafa bayanan hukuma.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Duba bayanin kula kanti.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Sarrafa bayanin kula kanti.
Saukewa:',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Duba kadarorin masu haɓakawa.
Saukewa:',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Sarrafa kadarorin masu haɓakawa.
Saukewa:',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Samun damar bayanan sirri da saitunan asusu.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Sarrafa walat da ma\'amaloli.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Duba mu\'amalar walat.
Saukewa:',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Duba alamun OAuth da abokan ciniki.
Saukewa:',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Sarrafa alamun OAuth da abokan ciniki.
Saukewa:',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Sarrafa saitunan tsaro.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Sarrafa masu alaƙa.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Duba masu alaƙa.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Sarrafa samfuran bugawa.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Duba samfuran bugawa.
Saukewa:',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Sarrafa bita.
Saukewa:',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Duba sake dubawa.
Saukewa:',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Duba bayanin samun kuɗi.
Saukewa:',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Sarrafa bayanan samun kuɗi.
Saukewa:',



    'profile' => 'Karanta bayanin martaba gami da suna, adireshin imel, hoto da matsayin tantancewa.',
    'phone' => 'Samun damar lamba',
    'address' => 'Karanta kuma gyara adireshin daga ajiyayyun littafin adireshi',
    'buy' => 'Oda & Kayayyakin Kasuwanci.',
    'order-history' => 'Karanta tarihin oda.',
    'my-gift-cards' => 'Samun dama ga katunan kyauta na.',
    'articles' => 'Gyara Labarai.',
    'notifications' => 'Aika da karɓar sanarwa.',
    'read-shops' => 'Karanta Jerin Store.',
    'shop-edit' => 'Adana damar yin gyara.',
    'shop-contacts' => 'Karɓi ku shirya siffofin lamba.',
    'shop-gift-cards' => 'Ƙirƙirar, Gyarawa, da Gudanar da Katuna.',
    'shop-faqs' => 'Ƙirƙiri, gyara, da sarrafa tambayoyin da ake yawan yi.',
    'shop-categories' => 'Ƙirƙirar, Gyarawa, da Gudanar da Rukunoni.',
    'backoffice-write-products' => 'Ba da izinin ƙirƙira, gyarawa, da sarrafa samfura a ofishin baya.',
    'backoffice-read-products' => 'Ba da izini don duba jerin samfuran da cikakkun bayanan samfur a cikin ofishin baya.',
    'shop-read-reports' => 'Karanta bayanai da rahotanni.',
    'shop-socials' => 'Shirya kantin sayar da cibiyoyin sadarwar jama\'a.',
    'shop-accounts' => 'Shirya ku share asusun kuɗi masu alaƙa da shagunan.',
    'shop-menus' => 'Shirya menu na kantin sayar da kayayyaki.',
    'shop-pages' => 'Gyara shafukan kantin.',
    'shop-warehouse' => 'Shirya Store Warehouse',
    'shop-permissions' => 'Duba ku shirya shiga kantin sayar da kayayyaki.',
    'shop-process-center' => 'Sarrafa umarni da aka karɓa.',
    'shop-profile' => 'Sarrafa bayanan bayanan ajiya.',
    'shop-discount-code' => 'Sarrafa lambobin rangwame.',
    'shop-coupon' => 'Sarrafa takardun shaida.',
    'shop-offer' => 'Sarrafa tayin.',
    'shop-cashback' => 'Sarrafa cashbacks.',
    'shop-lottery' => 'Sarrafa irin caca.',
    'shop-community' => 'Sarrafa al\'umma.',
    'shop-customers' => 'Sarrafa abokan ciniki.',
    'shop-ribbon' => 'Sarrafa biyan kuɗi na Ribbon.',
    'community-read' => 'Karanta Al\'ummar Selldone.',
    'community-write' => 'Rubuta al\'ummar da aka sayar.',
    'profile-write' => 'Rubuta bayanin bayanin mai amfani.',
    'vendor-read' => 'Samun damar cika ayyukan umarni mai siyarwa.',
    'vendor-write' => 'Canja umarni, biyan kuɗi da sauran bayanan mai siyarwa.',
    'connect-providers' => 'Ƙara, karantawa da rubuta masu samar da haɗin kai.',
    'personal-identification' => 'Karanta bayanan sirri, shiga, da saitin asusu.',
    'accounts' => 'Samun damar wallet, karanta ma\'amaloli da tarihin sama.',
    'shop-add' => 'Ƙara sabon shago.',
    'shop-delete' => 'Cire kanti.',
    'shop-ai-write' => 'Yana ba mai amfani damar aiwatar da umarnin AI.',
    'shop-ai-read' => 'Yana ba mai amfani damar samun damar bayanan AI ba tare da aiwatar da umarni ba.',
    'vendor-payment' => 'Yana ba mai amfani damar ƙara bayanan biyan kuɗi don masu siyarwa ko canja wurin kuɗi ta hanyar haɗin haɗin asusun su kamar Stripe Connect.',
    'company-read' => 'Yana ba da damar karanta bayanin martabar kasuwanci.',
    'company-write' => 'Yana ba da damar karantawa da rubuta bayanan bayanan kasuwanci.',
    'agency-read' => 'Yana ba da damar karanta bayanan hukumar.',
    'agency-write' => 'Yana ba da damar karantawa da rubuta bayanan hukumar.',
    'note-read' => 'Yana ba da damar karanta bayanan kanti.',
    'note-write' => 'Yana ba da damar karantawa da rubuta bayanan kanti.',
    'developer-read' => 'Yana ba da damar karanta kadarorin masu haɓakawa.',
    'developer-write' => 'Yana ba da damar karantawa da rubuta kadarorin masu haɓakawa.',
    'tokens-read' => 'Karanta Alamomin Oauth da abokan ciniki.',
    'tokens-write' => 'Rubuta alamun Oauth da abokan ciniki.',
];
