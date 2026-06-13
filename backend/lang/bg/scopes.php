<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone администраторски обхват.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ограничен достъп на инвеститорите.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Прочетете подробностите за потребителския профил.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Прочетете телефонния номер.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Четете и актуализирайте запазените адреси.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Актуализирайте потребителския профил.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Правете поръчки.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Вижте историята на поръчките.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Достъп до подаръчни карти.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Редактиране на статии.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Управление на известията.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Вижте списъка с магазини.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Редактирайте подробностите за магазина.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Добавете нов магазин.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Изтриване на магазин.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Управлявайте билети за поддръжка.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Управлявайте подаръчни карти.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Вижте карти за подарък.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Управление на ЧЗВ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Вижте ЧЗВ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Управление на категории.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Преглед на категории.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Управлявайте продуктите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Вижте продуктите.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Преглед на отчетите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Управлявайте финансови сметки.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Преглед на финансови сметки.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Редактирайте страниците на магазина.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Вижте страниците на магазина.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Управлявайте склад.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Вижте склад.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Управлявайте достъпа на персонала.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Вижте достъпа на персонала.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Преглед на поръчките.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Управление на поръчките.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Управление на бизнес профил.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Вижте бизнес профила.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Управление на кодове за отстъпка.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Вижте кодовете за отстъпка.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Управление на купони.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Преглед на купони.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Управление на оферти.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Вижте офертите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Управлявайте връщанията на пари.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Вижте кешбековете.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Управлявайте лотарии.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Вижте лотарии.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Управлявайте общността.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Вижте общността.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Управлявайте клиентите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Вижте клиентите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Управление на абонаменти.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Преглед на абонаменти.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Вижте поръчките на доставчици.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Управлявайте поръчки и плащания на доставчици.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Управлявайте доставчици за свързване.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Вижте доставчици за свързване.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Изпълнявайте AI команди.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Вижте информация за AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Управлявайте плащанията на доставчици.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Вижте плащанията на доставчика.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Вижте бизнес профила.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Управление на бизнес профил.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Вижте информация за агенцията.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Управлявайте информацията на агенцията.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Вижте бележките на магазина.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Управлявайте бележките на магазина.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Вижте активите на разработчиците.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Управлявайте активите на разработчиците.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Достъп до лична информация и настройки на акаунта.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Управлявайте портфейла и транзакциите.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Преглед на транзакциите в портфейла.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Вижте OAuth токени и клиенти.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Управлявайте OAuth токени и клиенти.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Управление на настройките за сигурност.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Управлявайте филиали.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Вижте партньорите.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Управление на шаблони за печат.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Вижте шаблони за печат.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Управление на рецензии.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Вижте рецензии.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Вижте информация за осигуряване на приходи.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Управлявайте информацията за осигуряване на приходи.',



    'profile' => 'Прочетете информацията за профила, включително име, имейл адрес, изображение и състояние на удостоверяване.',
    'phone' => 'Достъп до номер за връзка',
    'address' => 'Четете и редактирайте адрес от запазена адресна книга',
    'buy' => 'Поръчайте и поръчайте в магазина.',
    'order-history' => 'Прочетете историята на поръчките.',
    'my-gift-cards' => 'Достъп до моите подаръчни карти.',
    'articles' => 'Редактиране на статии.',
    'notifications' => 'Изпращайте и получавайте известия.',
    'read-shops' => 'Прочетете списъка на магазините.',
    'shop-edit' => 'Достъп за редактиране на магазина.',
    'shop-contacts' => 'Получавайте и редактирайте формуляри за контакт.',
    'shop-gift-cards' => 'Създаване, редактиране и управление на карти.',
    'shop-faqs' => 'Създавайте, редактирайте и управлявайте често задавани въпроси.',
    'shop-categories' => 'Създаване, редактиране и управление на категории.',
    'backoffice-write-products' => 'Упълномощаване на създаването, редактирането и управлението на продукти в бек офиса.',
    'backoffice-read-products' => 'Разрешете достъп за преглед на списъка с продукти и подробна информация за продукта в бек офиса.',
    'shop-read-reports' => 'Четете информация и отчети.',
    'shop-socials' => 'Редактирайте социалните мрежи на магазина.',
    'shop-accounts' => 'Редактирайте и изтрийте финансови сметки, свързани с магазина.',
    'shop-menus' => 'Редактиране на менютата на магазина.',
    'shop-pages' => 'Редактирайте страниците на магазина.',
    'shop-warehouse' => 'Редактиране на Store Warehouse',
    'shop-permissions' => 'Преглеждайте и редактирайте достъпа до магазина.',
    'shop-process-center' => 'Управление на получените поръчки.',
    'shop-profile' => 'Управлявайте профилите на магазина.',
    'shop-discount-code' => 'Управление на кодове за отстъпка.',
    'shop-coupon' => 'Управление на купони.',
    'shop-offer' => 'Управление на оферти.',
    'shop-cashback' => 'Управлявайте връщанията на пари.',
    'shop-lottery' => 'Управлявайте лотарии.',
    'shop-community' => 'Управлявайте общността.',
    'shop-customers' => 'Управлявайте клиентите.',
    'shop-ribbon' => 'Управление на абонаменти за лента.',
    'community-read' => 'Прочетете общността на Selldone.',
    'community-write' => 'Напишете selldone общност.',
    'profile-write' => 'Напишете информация за потребителския профил.',
    'vendor-read' => 'Достъп до действия по изпълнение на поръчки на доставчици.',
    'vendor-write' => 'Промяна на поръчки, плащане и друга информация на доставчика.',
    'connect-providers' => 'Добавяне, четене и писане на свързващи доставчици.',
    'personal-identification' => 'Прочетете лична информация, достъпи и конфигурация на акаунта.',
    'accounts' => 'Достъп до портфейли, четене на транзакции и история на допълване.',
    'shop-add' => 'Добавете нов магазин.',
    'shop-delete' => 'Премахване на магазин.',
    'shop-ai-write' => 'Позволява на потребителя да изпълнява AI команди.',
    'shop-ai-read' => 'Позволява на потребителя достъп до AI информация, без да изпълнява команди.',
    'vendor-payment' => 'Позволява на потребителя да добавя записи за плащания за доставчици или да прехвърля средства чрез техните свързани акаунти като Stripe Connect.',
    'company-read' => 'Позволява четене на информация от бизнес профила.',
    'company-write' => 'Позволява четене и писане на информация за бизнес профила.',
    'agency-read' => 'Позволява четене на информация за агенцията.',
    'agency-write' => 'Позволява четене и писане на информация за агенцията.',
    'note-read' => 'Позволява четене на бележки от магазина.',
    'note-write' => 'Позволява четене и писане на бележки от магазина.',
    'developer-read' => 'Позволява четене на активи на разработчиците.',
    'developer-write' => 'Позволява четене и писане на активи на разработчиците.',
    'tokens-read' => 'Четете Oauth токени и клиенти.',
    'tokens-write' => 'Пишете Oauth токени и клиенти.',
];
