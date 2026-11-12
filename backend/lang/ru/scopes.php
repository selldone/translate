<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Область администратора Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ограниченный доступ инвесторов.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Прочтите детали профиля пользователя.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Прочитайте номер телефона.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Чтение и обновление сохраненных адресов.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Обновить профиль пользователя.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Размещайте заказы.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Просмотр истории заказов.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Доступ к подарочным картам.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Редактировать статьи.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Управление уведомлениями.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Посмотреть список магазинов.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Редактировать информацию о магазине.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Добавить новый магазин.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Удалить магазин.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Управление заявками в службу поддержки.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Управление подарочными картами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Посмотреть подарочные карты.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Управление часто задаваемыми вопросами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Просмотрите часто задаваемые вопросы.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Управление категориями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Просмотр категорий.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Управляйте продуктами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Посмотреть продукты.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Просмотр отчетов.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Управляйте финансовыми счетами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Просмотр финансовых счетов.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Редактировать страницы магазина.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Просмотр страниц магазина.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Управлять складом.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Посмотреть склад.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Управляйте доступом сотрудников.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Просмотр доступа персонала.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Посмотреть заказы.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Управляйте заказами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Управление бизнес-профилем.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Посмотреть бизнес-профиль.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Управление кодами скидок.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Посмотреть коды скидок.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Управление купонами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Посмотреть купоны.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Управляйте предложениями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Посмотреть предложения.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Управляйте кэшбэками.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Посмотреть кэшбэки.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Управление лотереями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Посмотреть лотереи.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Управляйте сообществом.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Посмотреть сообщество.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Управляйте клиентами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Просмотр клиентов.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Управление подписками.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Просмотр подписок.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Просмотр заказов поставщиков.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Управление заказами и платежами поставщиков.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Управление поставщиками подключений.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Просмотр поставщиков подключений.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Выполняйте команды ИИ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Просмотр информации об ИИ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Управляйте платежами поставщиков.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Просмотр платежей поставщикам.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Посмотреть бизнес-профиль.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Управление бизнес-профилем.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Посмотреть информацию об агентстве.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Управляйте информацией агентства.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Посмотреть заметки магазина.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Управление заметками магазина.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Просмотр ресурсов разработчика.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Управляйте активами разработчика.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Доступ к личной информации и настройкам учетной записи.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Управляйте кошельком и транзакциями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Просмотр транзакций кошелька.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Просмотрите токены и клиентов OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Управляйте токенами и клиентами OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Управление настройками безопасности.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Управляйте филиалами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Просмотр филиалов.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Управление шаблонами печати.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Просмотр шаблонов печати.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Управляйте отзывами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Посмотреть отзывы.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Просмотрите информацию о монетизации.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Управляйте информацией о монетизации.',



    'profile' => 'Прочитайте информацию о профиле, включая имя, адрес электронной почты, изображение и статус аутентификации.',
    'phone' => 'Доступ к контактному номеру',
    'address' => 'Чтение и редактирование адреса из сохраненной адресной книги',
    'buy' => 'Заказ и заказ в магазине.',
    'order-history' => 'Читать историю заказов.',
    'my-gift-cards' => 'Доступ к моим подарочным картам.',
    'articles' => 'Редактировать статьи.',
    'notifications' => 'Отправляйте и получайте уведомления.',
    'read-shops' => 'Читать список магазинов.',
    'shop-edit' => 'Доступ к редактированию магазина.',
    'shop-contacts' => 'Получайте и редактируйте контактные формы.',
    'shop-gift-cards' => 'Создание, редактирование и управление картами.',
    'shop-faqs' => 'Создавайте, редактируйте и управляйте часто задаваемыми вопросами.',
    'shop-categories' => 'Создание, редактирование и управление категориями.',
    'backoffice-write-products' => 'Разрешите создание, редактирование и управление продуктами в бэк-офисе.',
    'backoffice-read-products' => 'Разрешите доступ для просмотра списка продуктов и подробной информации о продуктах в бэк-офисе.',
    'shop-read-reports' => 'Читайте информацию и отчеты.',
    'shop-socials' => 'Редактировать магазин социальных сетей.',
    'shop-accounts' => 'Редактировать и удалять финансовые счета, связанные с магазином.',
    'shop-menus' => 'Редактировать меню магазина.',
    'shop-pages' => 'Редактировать страницы магазина.',
    'shop-warehouse' => 'Редактировать склад магазина',
    'shop-permissions' => 'Просмотр и изменение доступа к магазину.',
    'shop-process-center' => 'Управление полученными заказами.',
    'shop-profile' => 'Управление профилями магазинов.',
    'shop-discount-code' => 'Управляйте кодами скидок.',
    'shop-coupon' => 'Управление купонами.',
    'shop-offer' => 'Управляйте предложениями.',
    'shop-cashback' => 'Управляйте кэшбэками.',
    'shop-lottery' => 'Управляйте лотереями.',
    'shop-community' => 'Управлять сообществом.',
    'shop-customers' => 'Управляйте клиентами.',
    'shop-ribbon' => 'Управление подписками Ribbon.',
    'community-read' => 'Читайте сообщество Selldone.',
    'community-write' => 'Напишите продаваемое сообщество.',
    'profile-write' => 'Запишите информацию профиля пользователя.',
    'vendor-read' => 'Доступ к действиям по выполнению заказов поставщиков.',
    'vendor-write' => 'Изменение заказов, оплаты и другой информации о продавце.',
    'connect-providers' => 'Добавление, чтение и запись поставщиков подключений.',
    'personal-identification' => 'Чтение личной информации, прав доступа и конфигурации учетной записи.',
    'accounts' => 'Доступ к кошелькам, чтение транзакций и истории пополнений.',
    'shop-add' => 'Добавить новый магазин.',
    'shop-delete' => 'Удалить магазин.',
    'shop-ai-write' => 'Позволяет пользователю выполнять команды ИИ.',
    'shop-ai-read' => 'Позволяет пользователю получать доступ к информации ИИ без выполнения команд.',
    'vendor-payment' => 'Позволяет пользователю добавлять записи платежей для поставщиков или переводить средства через их подключенные счета, такие как Stripe Connect.',
    'company-read' => 'Позволяет читать информацию профиля компании.',
    'company-write' => 'Позволяет читать и записывать информацию о бизнес-профиле.',
    'agency-read' => 'Позволяет читать информацию агентства.',
    'agency-write' => 'Позволяет читать и записывать информацию агентства.',
    'note-read' => 'Позволяет читать заметки магазина.',
    'note-write' => 'Позволяет читать и писать заметки.',
    'developer-read' => 'Позволяет читать ресурсы разработчиков.',
    'developer-write' => 'Позволяет читать и записывать ресурсы разработчиков.',
    'tokens-read' => 'Прочитайте OAuth-токены и клиенты.',
    'tokens-write' => 'Напишите OAuth-токены и клиенты.',
];
