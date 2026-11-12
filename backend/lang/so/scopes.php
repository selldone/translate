<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'baaxadda maamulka Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Helitaanka maalgashadayaasha xaddidan.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Akhri faahfaahinta bogga isticmaalaha',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Akhri lambarka taleefanka',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Akhri oo cusboonaysii ciwaannada la kaydiyay.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Cusbooneysii astaanta isticmaalaha',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Dalbo dhig',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Eeg taariikhda dalbashada',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Hel kaararka hadiyadda.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Wax ka beddel maqaallada.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Maamul ogeysiisyada',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Eeg liiska dukaanka',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Wax ka beddel faahfaahinta dukaanka',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Ku dar dukaan cusub',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Tirtir dukaanka',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Maamul tigidhada taageerada',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Maamul kaararka hadiyadda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Daawo kaadhadhka hadyada',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Maamul FAQs',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Daawo FAQs',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Maamul qaybaha',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Eeg qaybaha',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Maamul alaabta',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Daawo alaabta',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Daawo warbixinada',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Maamul xisaabaadka maaliyadeed.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Eeg xisaabaadka maaliyadeed',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Wax ka beddel bogagga dukaanka',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Eeg boggaga dukaanka',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Maamul bakhaar',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Daawo bakhaarka',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Maamul gelitaanka shaqaalaha',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Eeg gelitaanka shaqaalaha',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Eeg dalabaadka',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Maamul amarada',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Maamul astaanta ganacsiga',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Eeg astaanta ganacsiga',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Maamul codes qiimo dhimis',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Eeg koodka dhimista',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Maamul kuubannada',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Daawo kuubannada',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Maamul soo jeedin',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Daawo soo jeedin',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Maamul lacag celinta',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Eeg dib u celinta lacagta',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Maamul bakhtiyaa-nasiibka',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Daawo bakhtiyaanasiibka',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Maamulka bulshada',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Daawo bulshada.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Maamul macaamiisha',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Daawo macaamiisha',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Maamul isdiiwaangelinta',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Eeg isdiiwaangelinta',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Eeg dalabaadka iibiyaha',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Maamul dalabaadka iibiyaha iyo lacagaha.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Maamul bixiyayaasha isku xidhka',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Eeg bixiyayaasha isku xidhka',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Fulinta amarrada AI',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Eeg macluumaadka AI',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Maamul lacagaha iibiyaha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Eeg lacagaha iibiyaha.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Eeg astaanta ganacsiga',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Maamul astaanta ganacsiga',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Eeg macluumaadka wakaalada',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Maamul macluumaadka wakaalada',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Eeg qoraallada dukaanka',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Maamul qoraalada dukaanka',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Arag hantida horumariyaha',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Maamul hantida horumariyaha',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Hel macluumaadka shakhsiyeed iyo dejinta akoonnada',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Maamul boorsada jeebka iyo wax kala iibsiga',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Fiiri wax kala iibsiga jeebka',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Arag calaamada OAuth iyo macaamiisha',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Maamul calaamadaha OAuth iyo macaamiisha.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Maamul dejinta amniga',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Maamul kuwa raacsan',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Eeg asxaabta.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Maamul qaababka daabacaadda',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Eeg qaababka daabacaadda',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Maamul dib u eegista',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Daawo faallooyinka',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Eeg macluumaadka lacagta.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Maamul macluumaadka lacagta',



    'profile' => 'Akhri macluumaadka bogga oo ay ku jiraan magaca, cinwaanka iimaylka, sawirka iyo heerka aqoonsiga.',
    'phone' => 'Helitaanka lambarka xiriirka',
    'address' => 'Akhri oo ka beddel ciwaanka buugga ciwaanka ee kaydsan',
    'buy' => 'Dalabka & Dalabka Dukaanka.',
    'order-history' => 'Akhri taariikhda dalbashada',
    'my-gift-cards' => 'Helitaanka kaadhadhkayga hadiyadda.',
    'articles' => 'Wax ka beddel Maqaallada.',
    'notifications' => 'Dir oo hel ogeysiisyada',
    'read-shops' => 'Akhri Liiska Bakhaarka',
    'shop-edit' => 'Helitaanka tafatirka kaydka',
    'shop-contacts' => 'Qaado oo wax ka beddel foomamka xidhiidhka',
    'shop-gift-cards' => 'Abuuritaanka, Tafatirka, iyo Maamulka Kaararka.',
    'shop-faqs' => 'Abuur, wax ka beddel, oo maamul su\'aalaha inta badan la is weydiiyo.',
    'shop-categories' => 'Abuuritaanka, Tafatirka, iyo Maamulka Qaybaha',
    'backoffice-write-products' => 'Oggolow abuurista, tafatirka, iyo maaraynta alaabta xafiiska dambe.',
    'backoffice-read-products' => 'Oggolow gelitaanka si aad u aragto liiska alaabta iyo macluumaadka alaabta oo faahfaahsan ee xafiiska dambe.',
    'shop-read-reports' => 'Akhri xogta iyo warbixinnada.',
    'shop-socials' => 'Wax ka beddel shabakadaha bulshada ee dukaanka',
    'shop-accounts' => 'Wax ka beddel oo tirtir akoonnada maaliyadeed ee ku xidhan dukaanka',
    'shop-menus' => 'Tafatir liiska dukaanka',
    'shop-pages' => 'Wax ka beddel bogagga dukaanka',
    'shop-warehouse' => 'Wax ka beddel Bakhaarka Bakhaarka',
    'shop-permissions' => 'Arag oo wax ka beddel gelitaanka dukaanka',
    'shop-process-center' => 'Maamul dalabaadka la helay',
    'shop-profile' => 'Maamul profiles dukaanka',
    'shop-discount-code' => 'Maamul codes qiimo dhimis',
    'shop-coupon' => 'Maamul kuubannada',
    'shop-offer' => 'Maamul soo jeedin',
    'shop-cashback' => 'Maamul lacag celinta',
    'shop-lottery' => 'Maamul bakhtiyaa-nasiibka',
    'shop-community' => 'Maamulka bulshada',
    'shop-customers' => 'Maamul macaamiisha',
    'shop-ribbon' => 'Maamul isdiiwaangelinta Ribbon',
    'community-read' => 'Akhri bulshada Selldone.',
    'community-write' => 'Qor bulshada la iibiyay.',
    'profile-write' => 'Qor xogta astaanta isticmaalaha',
    'vendor-read' => 'Helitaanka ficilada fulinta amarada iibiyaha.',
    'vendor-write' => 'Beddel dalabaadka, lacag bixinta iyo macluumaadka kale ee iibiyaha.',
    'connect-providers' => 'Ku dar, akhri oo qor ku xidh bixiyayaasha.',
    'personal-identification' => 'Akhri macluumaadka shakhsiyeed, gelida, iyo habaynta akoonnada',
    'accounts' => 'Helitaanka boorsooyinka, akhri wax kala iibsiga iyo kor u qaadista taariikhda.',
    'shop-add' => 'Ku dar dukaan cusub',
    'shop-delete' => 'Dukaan ka saar',
    'shop-ai-write' => 'U oggolow isticmaaluhu inuu fuliyo amarada AI.',
    'shop-ai-read' => 'U oggolow isticmaaluhu inuu galo macluumaadka AI isagoon fulin amarrada.',
    'vendor-payment' => 'U oggolow isticmaaluhu inuu ku daro diiwaannada lacag-bixinta iibiyeyaasha ama uu ku wareejiyo lacagaha iyaga oo isticmaalaya akoonnada ku xiran sida Stripe Connect.',
    'company-read' => 'Oggolow inuu akhriyo macluumaadka astaanta ganacsiga',
    'company-write' => 'Oggolow inuu akhriyo oo qoro macluumaadka astaanta ganacsiga.',
    'agency-read' => 'Oggolow inuu akhriyo macluumaadka wakaaladda',
    'agency-write' => 'Oggolow inuu akhriyo oo qoro macluumaadka wakaaladda.',
    'note-read' => 'Oggolow inuu akhriyo qoraallada dukaanka',
    'note-write' => 'Oggolow inuu akhriyo oo qoro qoraallada dukaanka.',
    'developer-read' => 'Oggolow inuu akhriyo horumarinta hantida',
    'developer-write' => 'Oggolow inuu akhriyo oo qoro hantida horumariyeyaasha.',
    'tokens-read' => 'Akhri calaamadaha Oauth iyo macaamiisha.',
    'tokens-write' => 'Qor calaamadaha Oauth iyo macaamiisha.',
];
