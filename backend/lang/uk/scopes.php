<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Область адміністратора Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Обмежений доступ інвестора.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Читайте деталі профілю користувача.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Прочитати номер телефону.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Читайте та оновлюйте збережені адреси.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Оновити профіль користувача.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Розміщуйте замовлення.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Переглянути історію замовлень.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Доступ до подарункових карток.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Редагувати статті.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Керувати сповіщеннями.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Переглянути список магазинів.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Редагувати деталі магазину.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Додати новий магазин.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Видалити магазин.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Керуйте заявками в службу підтримки.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Керуйте подарунковими картками.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Переглянути подарункові картки.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Керуйте поширеними запитаннями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Переглянути поширені запитання.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Керуйте категоріями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Переглянути категорії.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Керуйте продуктами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Переглянути продукти.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Переглянути звіти.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Керуйте фінансовими рахунками.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Перегляд фінансових рахунків.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Редагувати сторінки магазину.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Переглянути сторінки магазину.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Керувати складом.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Переглянути склад.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Керуйте доступом персоналу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Переглянути доступ персоналу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Переглянути замовлення.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Керуйте замовленнями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Керуйте бізнес-профілем.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Переглянути бізнес-профіль.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Керуйте кодами знижок.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Переглянути коди знижок.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Керуйте купонами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Переглянути купони.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Керуйте пропозиціями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Переглянути пропозиції.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Керуйте поверненням грошей.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Переглянути кешбеки.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Керуйте лотереями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Перегляд лотерей.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Керуйте спільнотою.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Переглянути спільноту.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Керуйте клієнтами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Переглянути клієнтів.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Керуйте підписками.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Переглянути підписки.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Переглянути замовлення постачальників.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Керуйте замовленнями постачальників і платежами.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Керуйте підключенням провайдерів.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Переглянути постачальників підключення.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Виконуйте команди ШІ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Перегляд інформації AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Керуйте платежами постачальників.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Перегляньте платежі постачальника.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Переглянути бізнес-профіль.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Керуйте бізнес-профілем.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Переглянути інформацію агентства.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Керуйте інформацією агентства.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Переглянути примітки магазину.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Керуйте нотатками магазину.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Перегляд ресурсів розробника.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Керуйте активами розробника.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Доступ до особистої інформації та налаштувань облікового запису.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Керуйте гаманцем і транзакціями.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Перегляд транзакцій гаманця.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Перегляньте токени OAuth і клієнтів.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Керуйте токенами OAuth і клієнтами.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Керуйте параметрами безпеки.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Керуйте афіліатами.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Переглянути філії.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Керуйте шаблонами друку.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Перегляд шаблонів друку.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Керувати відгуками.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Переглянути відгуки.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Перегляньте інформацію про монетизацію.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Керуйте інформацією про монетизацію.',



    'profile' => 'Прочитайте інформацію профілю, включаючи ім’я, адресу електронної пошти, зображення та статус автентифікації.',
    'phone' => 'Доступ до контактного номера',
    'address' => 'Читайте та редагуйте адресу зі збереженої адресної книги',
    'buy' => 'Замовлення та замовлення в магазині.',
    'order-history' => 'Читати історію замовлень.',
    'my-gift-cards' => 'Доступ до моїх подарункових карток.',
    'articles' => 'Редагувати статті.',
    'notifications' => 'Надсилайте та отримуйте сповіщення.',
    'read-shops' => 'Читати список магазинів.',
    'shop-edit' => 'Доступ до редагування магазину.',
    'shop-contacts' => 'Отримувати та редагувати контактні форми.',
    'shop-gift-cards' => 'Створення, редагування та керування картками.',
    'shop-faqs' => 'Створюйте, редагуйте та керуйте поширеними запитаннями.',
    'shop-categories' => 'Створення, редагування та керування категоріями.',
    'backoffice-write-products' => 'Авторизуйте створення, редагування та керування продуктами в бек-офісі.',
    'backoffice-read-products' => 'Авторизуйте доступ для перегляду списку продуктів і детальної інформації про продукт у бек-офісі.',
    'shop-read-reports' => 'Читайте інформацію та звіти.',
    'shop-socials' => 'Редагувати магазин соціальних мереж.',
    'shop-accounts' => 'Редагувати та видаляти пов’язані з магазином фінансові рахунки.',
    'shop-menus' => 'Редагувати меню магазину.',
    'shop-pages' => 'Редагувати сторінки магазину.',
    'shop-warehouse' => 'Редагувати склад магазину',
    'shop-permissions' => 'Перегляд і редагування доступу до магазину.',
    'shop-process-center' => 'Керуйте отриманими замовленнями.',
    'shop-profile' => 'Керуйте профілями магазину.',
    'shop-discount-code' => 'Керуйте кодами знижок.',
    'shop-coupon' => 'Керуйте купонами.',
    'shop-offer' => 'Керуйте пропозиціями.',
    'shop-cashback' => 'Керуйте поверненням грошей.',
    'shop-lottery' => 'Керуйте лотереями.',
    'shop-community' => 'Керуйте спільнотою.',
    'shop-customers' => 'Керуйте клієнтами.',
    'shop-ribbon' => 'Керуйте підписками на стрічку.',
    'community-read' => 'Читайте спільноту Selldone.',
    'community-write' => 'Напишіть спільноту selldone.',
    'profile-write' => 'Напишіть інформацію профілю користувача.',
    'vendor-read' => 'Доступ до дій виконання замовлень постачальника.',
    'vendor-write' => 'Змінити замовлення, платіжну та іншу інформацію постачальника.',
    'connect-providers' => 'Додавання, читання та запис підключення провайдерів.',
    'personal-identification' => 'Читання особистої інформації, доступу та конфігурації облікового запису.',
    'accounts' => 'Доступ до гаманців, читання транзакцій та історія поповнень.',
    'shop-add' => 'Додати новий магазин.',
    'shop-delete' => 'Видалити магазин.',
    'shop-ai-write' => 'Дозволяє користувачеві виконувати команди ШІ.',
    'shop-ai-read' => 'Дозволяє користувачеві отримувати доступ до інформації ШІ без виконання команд.',
    'vendor-payment' => 'Дозволяє користувачеві додавати платіжні записи для постачальників або переказувати кошти через підключені облікові записи, наприклад Stripe Connect.',
    'company-read' => 'Дозволяє читати інформацію профілю підприємства.',
    'company-write' => 'Дозволяє читати та писати інформацію про бізнес-профіль.',
    'agency-read' => 'Дозволяє читати інформацію агентства.',
    'agency-write' => 'Дозволяє читати та записувати агентську інформацію.',
    'note-read' => 'Дозволяє читати нотатки магазину.',
    'note-write' => 'Дозволяє читати та писати магазинні нотатки.',
    'developer-read' => 'Дозволяє читати ресурси розробників.',
    'developer-write' => 'Дозволяє читати та записувати ресурси розробників.',
    'tokens-read' => 'Читайте маркери Oauth і клієнтів.',
    'tokens-write' => 'Напишіть токени Oauth і клієнтів.',
];
