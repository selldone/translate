<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone администраторски опсег.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ограничен пристап на инвеститорите.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Прочитајте ги деталите за корисничкиот профил.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Прочитајте го телефонскиот број.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Читајте и ажурирајте ги зачуваните адреси.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ажурирајте го корисничкиот профил.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Поставете нарачки.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Погледнете ја историјата на нарачки.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Пристап до картички за подароци.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Уредете статии.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Управувајте со известувањата.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Погледнете ја листата на продавници.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Уредете ги деталите за продавницата.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Додадете нова продавница.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Избриши продавница.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Управувајте со билети за поддршка.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Управувајте со картички за подароци.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Погледнете ги картичките за подароци.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Управувајте со ЧПП.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Прикажи ЧПП.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Управувајте со категориите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Прикажи категории.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Управувајте со производите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Погледнете ги производите.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Прикажи извештаи.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Управувајте со финансиските сметки.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Погледнете ги финансиските сметки.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Уредете ги страниците на продавницата.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Погледнете ги страниците на продавницата.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Управувајте со складиштето.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Погледни магацин.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Управувајте со пристапот на персоналот.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Погледнете го пристапот на персоналот.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Погледнете ги нарачките.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Управувајте со нарачките.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Управувајте со деловниот профил.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Погледнете го деловниот профил.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Управувајте со шифрите за попуст.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Погледнете ги шифрите за попуст.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Управувајте со купони.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Погледнете купони.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Управувајте со понудите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Погледнете ги понудите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Управувајте со враќање на готовина.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Прикажи поврат на готовина.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Управувајте со лотарии.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Погледнете лотарии.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Управувајте со заедницата.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Погледнете ја заедницата.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Управувајте со клиентите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Прикажи клиенти.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Управувајте со претплати.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Погледнете ги претплатите.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Погледнете ги нарачките од продавачите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Управувајте со нарачките и плаќањата на продавачите.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Управувајте со провајдери за поврзување.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Прикажи ги давателите на поврзување.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Извршете команди со вештачка интелигенција.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Погледнете информации за вештачката интелигенција.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Управувајте со плаќањата на продавачите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Погледнете ги плаќањата на продавачите.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Погледнете го деловниот профил.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Управувајте со деловниот профил.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Погледнете ги информациите за агенцијата.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Управувајте со информациите за агенцијата.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Погледнете ги белешките од продавницата.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Управувајте со белешките од продавницата.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Погледнете ги средствата на програмерите.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Управувајте со средствата на програмерите.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Пристапете до личните информации и поставките на сметката.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Управувајте со паричникот и трансакциите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Погледнете ги трансакциите со паричник.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Погледнете ги токените и клиентите OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Управувајте со OAuth токени и клиенти.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Управувајте со поставките за безбедност.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Управувајте со филијали.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Прикажи ги подружниците.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Управувајте со шаблони за печатење.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Погледнете ги шаблоните за печатење.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Управувајте со прегледите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Прикажи прегледи.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Погледнете ги информациите за монетизација.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Управувајте со информациите за монетизација.',



    'profile' => 'Прочитајте ги информациите за профилот, вклучувајќи име, адреса на е-пошта, слика и статус на автентикација.',
    'phone' => 'Пристап до бројот за контакт',
    'address' => 'Читајте и уредувајте ја адресата од зачуваниот адресар',
    'buy' => 'Нарачајте и купувајте нарачка.',
    'order-history' => 'Прочитајте ја историјата на нарачки.',
    'my-gift-cards' => 'Пристап до моите картички за подароци.',
    'articles' => 'Уредете написи.',
    'notifications' => 'Испраќајте и примајте известувања.',
    'read-shops' => 'Прочитајте го списокот на продавници.',
    'shop-edit' => 'Зачувај пристап за уредување.',
    'shop-contacts' => 'Примајте и уредувајте формулари за контакт.',
    'shop-gift-cards' => 'Креирање, уредување и управување со картички.',
    'shop-faqs' => 'Креирајте, уредувајте и управувајте со често поставуваните прашања.',
    'shop-categories' => 'Креирање, уредување и управување со категории.',
    'backoffice-write-products' => 'Овластете го креирањето, уредувањето и управувањето со производите во задната канцеларија.',
    'backoffice-read-products' => 'Овластете пристап за прегледување на списокот на производи и детални информации за производот во задната канцеларија.',
    'shop-read-reports' => 'Читајте информации и извештаи.',
    'shop-socials' => 'Уредете ги социјалните мрежи на продавницата.',
    'shop-accounts' => 'Уредете и бришете финансиски сметки поврзани со продавницата.',
    'shop-menus' => 'Уредете ги менијата на продавницата.',
    'shop-pages' => 'Уредете ги страниците на продавницата.',
    'shop-warehouse' => 'Уреди Магацин на продавница',
    'shop-permissions' => 'Приказ и уредување на пристапот до продавницата.',
    'shop-process-center' => 'Управувајте со примените нарачки.',
    'shop-profile' => 'Управувајте со профилите на продавницата.',
    'shop-discount-code' => 'Управувајте со шифрите за попуст.',
    'shop-coupon' => 'Управувајте со купони.',
    'shop-offer' => 'Управувајте со понудите.',
    'shop-cashback' => 'Управувајте со враќање на готовина.',
    'shop-lottery' => 'Управувајте со лотарии.',
    'shop-community' => 'Управувајте со заедницата.',
    'shop-customers' => 'Управувајте со клиентите.',
    'shop-ribbon' => 'Управувајте со претплатите на лентата.',
    'community-read' => 'Прочитајте ја заедницата Селдоне.',
    'community-write' => 'Напиши продадена заедница.',
    'profile-write' => 'Напишете информации за корисничкиот профил.',
    'vendor-read' => 'Пристап до дејствијата за исполнување на нарачките од продавачот.',
    'vendor-write' => 'Променете ги нарачките, плаќањата и другите информации на продавачот.',
    'connect-providers' => 'Додавање, читање и пишување поврзете провајдери.',
    'personal-identification' => 'Читајте лични информации, пристапи и конфигурација на сметката.',
    'accounts' => 'Пристап до паричници, читање трансакции и историја на надополнување.',
    'shop-add' => 'Додадете нова продавница.',
    'shop-delete' => 'Отстранете продавница.',
    'shop-ai-write' => 'Дозволува корисникот да извршува команди со вештачка интелигенција.',
    'shop-ai-read' => 'Дозволува корисникот да пристапи до информации за вештачката интелигенција без извршување наредби.',
    'vendor-payment' => 'Дозволува корисникот да додава записи за плаќања за продавачите или да префрла средства преку нивните поврзани сметки како Stripe Connect.',
    'company-read' => 'Овозможува читање информации за деловниот профил.',
    'company-write' => 'Овозможува читање и пишување информации за деловниот профил.',
    'agency-read' => 'Овозможува читање информации за агенцијата.',
    'agency-write' => 'Овозможува читање и пишување информации за агенцијата.',
    'note-read' => 'Овозможува читање белешки од продавница.',
    'note-write' => 'Овозможува читање и пишување белешки од продавница.',
    'developer-read' => 'Овозможува читање на средствата на програмерите.',
    'developer-write' => 'Овозможува читање и пишување на средствата на програмерите.',
    'tokens-read' => 'Прочитајте ги токените и клиентите на Oauth.',
    'tokens-write' => 'Напишете Oauth токени и клиенти.',
];
