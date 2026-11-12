<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone администратор күләме.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Инвесторларга керү мөмкинлеге чикләнгән.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Кулланучының профиле детальләрен укыгыз.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Телефон номерын укыгыз.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Сакланган адресларны укыгыз һәм яңартыгыз.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Кулланучының профилен яңарту.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Заказлар урнаштырыгыз.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Заказ тарихын карау.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Бүләк карточкаларына керегез.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Мәкаләләрне үзгәртү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Хәбәрләр белән идарә итү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Кибет исемлеген карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Кибет детальләрен үзгәртү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Яңа кибет өстәргә.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Кибетне бетерү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Ярдәм билетлары белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Бүләк карточкалары белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Бүләк карточкаларын карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Сораулар белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Сорауларны карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Төркемнәр белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Төркемнәрне карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Продукция белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Продукцияне карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Докладларны карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Финанс счетлары белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Финанс счетларын карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Кибет битләрен үзгәртү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Кибет битләрен карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Склад белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Складны карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Персоналга керү белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Персоналга керү мөмкинлеген карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Заказларны карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Заказлар белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Бизнес профиле белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Бизнес профилен карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Ташлама кодлары белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Ташлама кодларын карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Купоннар белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Купоннарны карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Тәкъдимнәр белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Тәкъдимнәрне карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Акча белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Акчаларны карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Лотереялар белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Лотереяларны карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Communityәмгыять белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Communityәмгыятьне карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Клиентлар белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Клиентларны карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Подписка белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Подписка карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Сатучы заказларын карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Сатучы заказларын һәм түләүләрен идарә итегез.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Провайдерлар белән идарә итү.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Тоташтыручыларны карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'ЯИ боерыкларын үтәү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'ЯИ мәгълүматларын карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Сатучы түләүләрен идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Сатучы түләүләрен карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Бизнес профилен карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Бизнес профиле белән идарә итү.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Агентлык мәгълүматын карау.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Агентлык мәгълүматы белән идарә итү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Кибет язмаларын карау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Кибет язмалары белән идарә итү.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Төзүче активларын карау.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Төзүче активларын идарә итү.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Шәхси мәгълүматка һәм хисап көйләүләренә керегез.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Капчык һәм операцияләр белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Капчык операцияләрен карау.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth билгеләрен һәм клиентларны карау.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth билгеләре һәм клиентлары белән идарә итү.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Куркынычсызлык көйләүләрен идарә итегез.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Филиаллар белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Филиалларны карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Басма шаблоннары белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Басма шаблоннарын карау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Кабатлау белән идарә итү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Карап чыгу.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Монетизация турында мәгълүматны карау.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Монетизация турында мәгълүмат белән идарә итү.',



    'profile' => 'Исем, электрон почта адресы, рәсем һәм аутентификация статусын кертеп, профиль мәгълүматларын укыгыз.',
    'phone' => 'Контакт номерына керү',
    'address' => 'Сакланган адрес китабыннан адресны укыгыз һәм редакцияләгез',
    'buy' => 'Заказ һәм кибет заказы.',
    'order-history' => 'Заказ тарихын уку.',
    'my-gift-cards' => 'Минем бүләк карточкаларына керү.',
    'articles' => 'Мәкаләләрне үзгәртү.',
    'notifications' => 'Хәбәрләр җибәрегез һәм алыгыз.',
    'read-shops' => 'Кибет исемлеген укыгыз.',
    'shop-edit' => 'Кибет редакцияләү мөмкинлеге.',
    'shop-contacts' => 'Контакт формаларын кабул итү һәм үзгәртү.',
    'shop-gift-cards' => 'Карточкалар ясау, редакцияләү һәм идарә итү.',
    'shop-faqs' => 'Еш бирелә торган сораулар булдыру, үзгәртү һәм идарә итү.',
    'shop-categories' => 'Төркемнәр булдыру, редакцияләү һәм идарә итү.',
    'backoffice-write-products' => 'Арткы офиста продуктлар булдыру, редакцияләү һәм идарә итү.',
    'backoffice-read-products' => 'Арткы офиста продуктлар исемлеген һәм продукт турында тулы мәгълүматны карарга рөхсәт итегез.',
    'shop-read-reports' => 'Мәгълүматны һәм докладларны укыгыз.',
    'shop-socials' => 'Социаль челтәрләрне үзгәртү.',
    'shop-accounts' => 'Кибет белән бәйләнгән финанс счетларын үзгәртү һәм бетерү.',
    'shop-menus' => 'Кибет менюларын үзгәртү.',
    'shop-pages' => 'Кибет битләрен үзгәртү.',
    'shop-warehouse' => 'Кибет складын үзгәртү',
    'shop-permissions' => 'Кибеткә керү мөмкинлеген карау һәм үзгәртү.',
    'shop-process-center' => 'Алынган заказлар белән идарә итү.',
    'shop-profile' => 'Кибет профильләрен идарә итү.',
    'shop-discount-code' => 'Ташлама кодлары белән идарә итү.',
    'shop-coupon' => 'Купоннар белән идарә итү.',
    'shop-offer' => 'Тәкъдимнәр белән идарә итү.',
    'shop-cashback' => 'Акча белән идарә итү.',
    'shop-lottery' => 'Лотереялар белән идарә итү.',
    'shop-community' => 'Communityәмгыять белән идарә итү.',
    'shop-customers' => 'Клиентлар белән идарә итү.',
    'shop-ribbon' => 'Тасмага язылу белән идарә итү.',
    'community-read' => 'Селдон җәмгыятен укыгыз.',
    'community-write' => 'Селдон җәмгыяте языгыз.',
    'profile-write' => 'Кулланучының профиле турында мәгълүмат языгыз.',
    'vendor-read' => 'Сатучы заказларының үтәлешенә керү.',
    'vendor-write' => 'Сатучының заказларын, түләүләрен һәм бүтән мәгълүматларын үзгәртү.',
    'connect-providers' => 'Бәйләү провайдерларын өстәгез, укыгыз һәм языгыз.',
    'personal-identification' => 'Шәхси мәгълүматны, рөхсәтләрне, хисап конфигурациясен укыгыз.',
    'accounts' => 'Капчыкларга керү, операцияләрне һәм тулы тарихны уку.',
    'shop-add' => 'Яңа кибет өстәргә.',
    'shop-delete' => 'Кибетне алып ташлагыз.',
    'shop-ai-write' => 'Кулланучыга AI боерыкларын башкарырга рөхсәт итә.',
    'shop-ai-read' => 'Кулланучының боерыкларны үтәмичә AI мәгълүматына керү мөмкинлеге бирә.',
    'vendor-payment' => 'Кулланучыга сатучылар өчен түләү язмаларын өстәргә яки Stripe Connect кебек тоташтырылган счетлары аша акча күчерергә рөхсәт итә.',
    'company-read' => 'Бизнес профиле турында мәгълүматны укырга рөхсәт итә.',
    'company-write' => 'Бизнес профиле турында мәгълүматны укырга һәм язарга рөхсәт итә.',
    'agency-read' => 'Агентлык мәгълүматын укырга рөхсәт итә.',
    'agency-write' => 'Агентлык мәгълүматын укырга һәм язарга рөхсәт итә.',
    'note-read' => 'Кибет язмаларын укырга рөхсәт итә.',
    'note-write' => 'Кибет язмаларын укырга һәм язарга рөхсәт итә.',
    'developer-read' => 'Төзүчеләрнең активларын укырга рөхсәт итә.',
    'developer-write' => 'Төзүчеләрнең активларын укырга һәм язарга рөхсәт итә.',
    'tokens-read' => 'Oauth билгеләрен һәм клиентларны укыгыз.',
    'tokens-write' => 'Oauth билгеләрен һәм клиентларын языгыз.',
];
