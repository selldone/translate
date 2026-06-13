<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Доираи маъмури Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Дастрасии маҳдуди сармоягузор.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Тафсилоти профили корбарро хонед.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Рақами телефонро хонед.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Суроғаҳои захирашударо хонед ва навсозӣ кунед.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Навсозии профили корбар.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Фармоиш диҳед.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Дидани таърихи фармоиш.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Дастрасӣ ба кортҳои тӯҳфаҳо.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Таҳрири мақолаҳо.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Огоҳиҳоро идора кунед.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Рӯйхати мағозаҳоро дидан.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Тафсилоти мағозаро таҳрир кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Дӯкони нав илова кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Дӯконро нест кунед.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Чиптаҳои дастгирӣро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Кортҳои тӯҳфаро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Кортҳои тӯҳфаро тамошо кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Саволҳои Саволро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Саволҳои Саволҳоро бинед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Категорияҳоро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Намоиши категорияҳо.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Маҳсулотро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Намоиши маҳсулот.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ҳисоботҳоро дидан.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Ҳисобҳои молиявиро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Ҳисобҳои молиявиро дидан.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Саҳифаҳои мағозаро таҳрир кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Намоиши саҳифаҳои мағоза.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Идоракунии анбор.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Анборро дидан.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Дастрасии кормандонро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Дидани дастрасии кормандон.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Намоиши фармоишҳо.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Фармоишҳоро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Профили тиҷоратиро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Намоиши профили тиҷорӣ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Рамзҳои тахфифро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Рамзҳои тахфифро бинед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Купонҳоро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Намоиши купонҳо.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Идоракунии пешниҳодҳо.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Намоиши пешниҳодҳо.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Идоракунии пули нақд.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Намоиши пули нақд.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Лотереяҳоро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Лотереяҳоро тамошо кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Ҷамъиятро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Ҷамъиятро бинед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Муштариёнро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Муштариёнро бинед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Обунаҳоро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Дидани обунаҳо.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Фармоишҳои фурӯшандаро бинед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Фармоишҳо ва пардохтҳои фурӯшандаро идора кунед.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Провайдерҳои пайвастро идора кунед.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Дидани провайдерҳои пайвастшавӣ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Фармонҳои AI-ро иҷро кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Дидани маълумоти AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Идоракунии пардохтҳои фурӯшанда.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Дидани пардохтҳои фурӯшанда.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Намоиши профили тиҷорӣ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Профили тиҷоратиро идора кунед.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Дидани маълумоти агентӣ.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Идоракунии иттилооти агентӣ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Дидани ёддоштҳои мағоза.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Қайдҳои мағозаро идора кунед.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Дидани дороиҳои таҳиякунанда.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Дороиҳои таҳиягарро идора кунед.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Дастрасӣ ба маълумоти шахсӣ ва танзимоти ҳисоб.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Ҳамён ва транзаксияҳоро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Дидани транзаксияҳои ҳамён.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Нишонаҳо ва мизоҷони OAuth-ро бинед.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Токенҳо ва мизоҷони OAuth -ро идора кунед.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Танзимоти амниятро идора кунед.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Филиалҳоро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Дидани шарикон.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Шаблонҳои чопро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Шаблонҳои чопро дидан.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Баррасиҳоро идора кунед.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Бознигарии баррасиҳо.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Дидани маълумоти монетизатсия.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Идоракунии иттилооти монетизатсия.',



    'profile' => 'Маълумоти профилро хонед, аз ҷумла ном, суроғаи почтаи электронӣ, тасвир ва ҳолати аутентификатсия.',
    'phone' => 'Дастрасӣ ба рақами тамос',
    'address' => 'Суроғаро аз китоби суроғаҳои захирашуда хонед ва таҳрир кунед',
    'buy' => 'Фармоиш ва фармоиш.',
    'order-history' => 'Таърихи фармоишро хонед.',
    'my-gift-cards' => 'Дастрасӣ ба кортҳои тӯҳфаҳои ман.',
    'articles' => 'Таҳрири мақолаҳо.',
    'notifications' => 'Ирсол ва қабули огоҳиҳо.',
    'read-shops' => 'Рӯйхати мағозаҳоро хонед.',
    'shop-edit' => 'Дастрасии таҳрирро захира кунед.',
    'shop-contacts' => 'Шаклҳои тамосро қабул ва таҳрир кунед.',
    'shop-gift-cards' => 'Эҷод, таҳрир ва идоракунии кортҳо.',
    'shop-faqs' => 'Саволҳои зуд-зуд додашударо эҷод, таҳрир ва идора кунед.',
    'shop-categories' => 'Эҷод, таҳрир ва идоракунии категорияҳо.',
    'backoffice-write-products' => 'Иҷозати эҷод, таҳрир ва идоракунии маҳсулот дар офиси пуштибонӣ.',
    'backoffice-read-products' => 'Дастрасиро барои дидани рӯйхати маҳсулот ва маълумоти муфассали маҳсулот дар идораи пуштибонӣ иҷозат диҳед.',
    'shop-read-reports' => 'Маълумот ва ҳисоботҳоро хонед.',
    'shop-socials' => 'Шабакаҳои иҷтимоии мағозаро таҳрир кунед.',
    'shop-accounts' => 'Таҳрир ва нест кардани ҳисобҳои молиявии ба мағоза алоқаманд.',
    'shop-menus' => 'Менюҳои мағозаро таҳрир кунед.',
    'shop-pages' => 'Саҳифаҳои мағозаро таҳрир кунед.',
    'shop-warehouse' => 'Таҳрири анбори мағоза',
    'shop-permissions' => 'Дастрасии мағозаро дидан ва таҳрир кунед.',
    'shop-process-center' => 'Фармоишҳои гирифташударо идора кунед.',
    'shop-profile' => 'Профилҳои мағозаҳоро идора кунед.',
    'shop-discount-code' => 'Рамзҳои тахфифро идора кунед.',
    'shop-coupon' => 'Купонҳоро идора кунед.',
    'shop-offer' => 'Идоракунии пешниҳодҳо.',
    'shop-cashback' => 'Идоракунии пули нақд.',
    'shop-lottery' => 'Лотереяҳоро идора кунед.',
    'shop-community' => 'Ҷамъиятро идора кунед.',
    'shop-customers' => 'Муштариёнро идора кунед.',
    'shop-ribbon' => 'Обунаҳои Ribbonро идора кунед.',
    'community-read' => 'Ҷамъияти Selldone-ро хонед.',
    'community-write' => 'Ҷамъияти фурӯхташударо нависед.',
    'profile-write' => 'Маълумоти профили корбарро нависед.',
    'vendor-read' => 'Дастрасӣ ба амалҳои иҷрои фармоишҳои фурӯшанда.',
    'vendor-write' => 'Фармоишҳо, пардохтҳо ва дигар маълумоти фурӯшандаро тағир диҳед.',
    'connect-providers' => 'Провайдерҳои пайвастшавӣ илова, хондан ва нависед.',
    'personal-identification' => 'Маълумоти шахсӣ, дастрасӣ ва танзимоти ҳисобро хонед.',
    'accounts' => 'Дастрасӣ ба ҳамёнҳо, хондани транзаксияҳо ва таърихи пуркунӣ.',
    'shop-add' => 'Дӯкони нав илова кунед.',
    'shop-delete' => 'Дӯконро хориҷ кунед.',
    'shop-ai-write' => 'Ба корбар имкон медиҳад, ки фармонҳои AI-ро иҷро кунад.',
    'shop-ai-read' => 'Ба корбар имкон медиҳад, ки бидуни иҷрои фармонҳо ба маълумоти AI дастрасӣ пайдо кунад.',
    'vendor-payment' => 'Ба корбар имкон медиҳад, ки сабтҳои пардохтро барои фурӯшандагон илова кунад ё тавассути суратҳисобҳои пайвастшудаи онҳо ба монанди Stripe Connect маблағ интиқол диҳад.',
    'company-read' => 'Имкон медиҳад, ки маълумоти профили бизнесро хонед.',
    'company-write' => 'Имконияти хондан ва навиштани маълумоти профили тиҷоратӣ.',
    'agency-read' => 'Имкон медиҳад, ки маълумоти агентиро хонед.',
    'agency-write' => 'Барои хондан ва навиштани маълумоти агентӣ имкон медиҳад.',
    'note-read' => 'Ба хондани қайдҳои мағоза имкон медиҳад.',
    'note-write' => 'Ба хондан ва навиштани қайдҳои мағоза имкон медиҳад.',
    'developer-read' => 'Имкон медиҳад, ки дороиҳои таҳиягаронро хонед.',
    'developer-write' => 'Барои хондан ва навиштани дороиҳои таҳиягарон имкон медиҳад.',
    'tokens-read' => 'Токенҳо ва мизоҷони Oauth-ро хонед.',
    'tokens-write' => 'Токенҳо ва мизоҷони Oauth нависед.',
];
