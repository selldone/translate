<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'КК0000КК администраторски опсег.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ограничен приступ инвеститорима.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Прочитајте детаље корисничког профила.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Прочитајте број телефона.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Прочитајте и ажурирајте сачуване адресе.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ажурирајте кориснички профил.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Наручите.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Погледајте историју поруџбина.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Приступите поклон картицама.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Уредите чланке.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Управљајте обавештењима.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Погледајте листу продавница.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Уредите детаље продавнице.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Додајте нову продавницу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Обриши продавницу.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Управљајте тикетима за подршку.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Управљајте поклон картицама.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Погледајте поклон картице.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Управљајте честим питањима.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Погледајте најчешћа питања.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Управљајте категоријама.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Прикажи категорије.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Управљајте производима.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Погледајте производе.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Погледајте извештаје.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Управљајте финансијским рачунима.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Погледајте финансијске рачуне.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Измените странице продавнице.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Прегледајте странице продавнице.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Управљајте складиштем.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Погледајте складиште.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Управљајте приступом особља.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Погледајте приступ особља.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Погледајте наруџбине.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Управљајте налозима.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Управљајте пословним профилом.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Погледајте профил предузећа.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Управљајте кодовима за попуст.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Погледајте кодове за попуст.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Управљајте купонима.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Погледајте купоне.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Управљајте понудама.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Погледајте понуде.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Управљајте повратима новца.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Погледајте поврате новца.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Управљајте лутријама.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Погледајте лутрије.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Управљајте заједницом.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Прикажи заједницу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Управљајте купцима.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Погледајте купце.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Управљајте претплатама.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Погледајте претплате.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Погледајте поруџбине добављача.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Управљајте наруџбинама и плаћањима добављача.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Управљајте провајдерима повезивања.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Погледајте добављаче повезивања.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Извршите АИ команде.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Погледајте АИ информације.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Управљајте плаћањима добављача.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Погледајте уплате добављача.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Погледајте профил предузећа.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Управљајте пословним профилом.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Погледајте информације о агенцији.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Управљајте информацијама о агенцији.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Погледајте белешке о продавници.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Управљајте белешкама продавнице.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Погледајте средства програмера.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Управљајте средствима програмера.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Приступите личним подацима и подешавањима налога.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Управљајте новчаником и трансакцијама.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Погледајте трансакције новчаника.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Погледајте КК0000КК токене и клијенте.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Управљајте КК0000КК токенима и клијентима.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Управљајте безбедносним подешавањима.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Управљајте филијалама.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Погледајте подружнице.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Управљајте шаблонима за штампање.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Погледајте шаблоне за штампање.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Управљајте рецензијама.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Погледајте рецензије.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Погледајте информације о монетизацији.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Управљајте информацијама о монетизацији.',



    'profile' => 'Прочитајте информације о профилу укључујући име, адресу е-поште, слику и статус аутентификације.',
    'phone' => 'Приступ контакт броју',
    'address' => 'Прочитајте и уредите адресу из сачуваног адресара',
    'buy' => 'Наручите и наручите.',
    'order-history' => 'Прочитајте историју поруџбина.',
    'my-gift-cards' => 'Приступ мојим поклон картицама.',
    'articles' => 'Уреди чланке.',
    'notifications' => 'Шаљите и примајте обавештења.',
    'read-shops' => 'Прочитајте листу продавница.',
    'shop-edit' => 'Приступ за уређивање продавнице.',
    'shop-contacts' => 'Примите и уредите контакт форме.',
    'shop-gift-cards' => 'Креирање, уређивање и управљање картицама.',
    'shop-faqs' => 'Креирајте, уређујте и управљајте често постављаним питањима.',
    'shop-categories' => 'Креирање, уређивање и управљање категоријама.',
    'backoffice-write-products' => 'Овластите креирање, уређивање и управљање производима у позадинској канцеларији.',
    'backoffice-read-products' => 'Овластите приступ за преглед листе производа и детаљних информација о производима у позадинској канцеларији.',
    'shop-read-reports' => 'Прочитајте информације и извештаје.',
    'shop-socials' => 'Уредите друштвене мреже продавнице.',
    'shop-accounts' => 'Измените и избришите финансијске налоге повезане са продавницама.',
    'shop-menus' => 'Уредите меније продавнице.',
    'shop-pages' => 'Измените странице продавнице.',
    'shop-warehouse' => 'Уреди складиште продавнице',
    'shop-permissions' => 'Прегледајте и уредите приступ продавници.',
    'shop-process-center' => 'Управљајте примљеним налозима.',
    'shop-profile' => 'Управљајте профилима продавнице.',
    'shop-discount-code' => 'Управљајте кодовима за попуст.',
    'shop-coupon' => 'Управљајте купонима.',
    'shop-offer' => 'Управљајте понудама.',
    'shop-cashback' => 'Управљајте повратима новца.',
    'shop-lottery' => 'Управљајте лутријама.',
    'shop-community' => 'Управљајте заједницом.',
    'shop-customers' => 'Управљајте купцима.',
    'shop-ribbon' => 'Управљајте претплатама на траку.',
    'community-read' => 'Прочитајте Селлдоне заједницу.',
    'community-write' => 'Напишите селлдоне цоммунити.',
    'profile-write' => 'Напишите информације о корисничком профилу.',
    'vendor-read' => 'Приступ радњама испуњења налога добављача.',
    'vendor-write' => 'Промените поруџбине, плаћање и друге информације о продавцу.',
    'connect-providers' => 'Додајте, читајте и пишите провајдере повезивања.',
    'personal-identification' => 'Прочитајте личне податке, приступе и конфигурацију налога.',
    'accounts' => 'Приступ новчаницима, читање трансакција и историја допуна.',
    'shop-add' => 'Додајте нову продавницу.',
    'shop-delete' => 'Уклоните продавницу.',
    'shop-ai-write' => 'Омогућава кориснику да изврши АИ команде.',
    'shop-ai-read' => 'Омогућава кориснику да приступи АИ информацијама без извршавања команди.',
    'vendor-payment' => 'Омогућава кориснику да додаје евиденцију плаћања за добављаче или преноси средства преко њихових повезаних налога као што је Стрипе Цоннецт.',
    'company-read' => 'Омогућава читање информација о профилу предузећа.',
    'company-write' => 'Омогућава читање и писање информација о пословном профилу.',
    'agency-read' => 'Омогућава читање информација о агенцији.',
    'agency-write' => 'Омогућава читање и писање информација о агенцији.',
    'note-read' => 'Омогућава читање белешки из продавнице.',
    'note-write' => 'Омогућава читање и писање белешки из продавнице.',
    'developer-read' => 'Омогућава читање средстава програмера.',
    'developer-write' => 'Омогућава читање и писање средстава програмера.',
    'tokens-read' => 'Прочитајте Оаутх токене и клијенте.',
    'tokens-write' => 'Напишите Оаутх токене и клијенте.',
];
