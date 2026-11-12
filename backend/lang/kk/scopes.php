<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone әкімші ауқымы.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Шектеулі инвесторға кіру.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Пайдаланушы профилінің мәліметтерін оқыңыз.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Телефон нөмірін оқыңыз.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Сақталған мекенжайларды оқыңыз және жаңартыңыз.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Пайдаланушы профилін жаңартыңыз.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Тапсырыс беру.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Тапсырыс тарихын қарау.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Сыйлық карталарына қол жеткізіңіз.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Мақалаларды өңдеу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Хабарландыруларды басқару.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Дүкен тізімін қарау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Дүкен мәліметтерін өңдеу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Жаңа дүкен қосыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Дүкенді жою.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Қолдау билеттерін басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Сыйлық карталарын басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Сыйлық карталарын көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Жиі қойылатын сұрақтарды басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Жиі қойылатын сұрақтарды қарау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Санаттарды басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Санаттарды көру.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Өнімдерді басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Өнімдерді көру.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Есептерді қарау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Қаржылық есептерді басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Қаржылық есептерді көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Дүкен беттерін өңдеу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Дүкен беттерін қарау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Қойманы басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Қойманы көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Қызметкерлерге қолжетімділікті басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Қызметкерлердің қолжетімділігін көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Тапсырыстарды қарау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Тапсырыстарды басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Бизнес профилін басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Бизнес профилін қараңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Жеңілдік кодтарын басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Жеңілдік кодтарын қараңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Купондарды басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Купондарды көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Ұсыныстарды басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Ұсыныстарды көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Кэшбэктерді басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Кэшбэктерді көру.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Лотереяларды басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Лотереяларды көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Қауымдастықты басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Қауымдастықты көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Клиенттерді басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Клиенттерді көру.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Жазылымдарды басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Жазылымдарды көру.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Жеткізушілердің тапсырыстарын қарау.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Жеткізушінің тапсырыстары мен төлемдерін басқарыңыз.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Қосылу провайдерлерін басқарыңыз.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Қосылу провайдерлерін қараңыз.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI командаларын орындаңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI ақпаратын көру.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Жеткізуші төлемдерін басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Жеткізушілердің төлемдерін көру.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Бизнес профилін қараңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Бизнес профилін басқарыңыз.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Агенттік ақпаратын көру.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Агенттік ақпаратын басқарыңыз.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Дүкен жазбаларын қараңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Дүкен жазбаларын басқарыңыз.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Әзірлеуші активтерін көру.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Әзірлеуші активтерін басқарыңыз.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Жеке ақпарат пен тіркелгі параметрлеріне қол жеткізіңіз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Әмиян мен транзакцияларды басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Әмиян транзакцияларын көру.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth таңбалауыштары мен клиенттерін қараңыз.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth таңбалауыштары мен клиенттерін басқарыңыз.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Қауіпсіздік параметрлерін басқару.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Серіктестіктерді басқарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Серіктестіктерді қарау.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Басып шығару үлгілерін басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Басып шығару үлгілерін қараңыз.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Пікірлерді басқару.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Пікірлерді қарау.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Монетизация туралы ақпаратты көру.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Монетизация туралы ақпаратты басқарыңыз.',



    'profile' => 'Аты, электрондық пошта мекенжайы, сурет және аутентификация күйін қамтитын профиль ақпаратын оқыңыз.',
    'phone' => 'Байланыс нөміріне қол жеткізу',
    'address' => 'Сақталған мекенжай кітабынан мекенжайды оқыңыз және өңдеңіз',
    'buy' => 'Тапсырыс беру және дүкенге тапсырыс беру.',
    'order-history' => 'Тапсырыс тарихын оқыңыз.',
    'my-gift-cards' => 'Менің сыйлық карталарыма қол жеткізу.',
    'articles' => 'Мақалаларды өңдеу.',
    'notifications' => 'Хабарландыруларды жіберу және алу.',
    'read-shops' => 'Дүкен тізімін оқу.',
    'shop-edit' => 'Өңдеу рұқсатын сақтау.',
    'shop-contacts' => 'Байланыс пішіндерін алыңыз және өңдеңіз.',
    'shop-gift-cards' => 'Карталарды жасау, өңдеу және басқару.',
    'shop-faqs' => 'Жиі қойылатын сұрақтарды жасаңыз, өңдеңіз және басқарыңыз.',
    'shop-categories' => 'Категорияларды құру, өңдеу және басқару.',
    'backoffice-write-products' => 'Бэк-офисте өнімдерді жасауға, өңдеуге және басқаруға рұқсат беріңіз.',
    'backoffice-read-products' => 'Бэк-офисте өнімдер тізімін және толық өнім ақпаратын қарауға рұқсат беріңіз.',
    'shop-read-reports' => 'Ақпарат пен есептерді оқыңыз.',
    'shop-socials' => 'Дүкеннің әлеуметтік желілерін өңдеу.',
    'shop-accounts' => 'Дүкенге байланысты қаржылық шоттарды өңдеу және жою.',
    'shop-menus' => 'Дүкен мәзірлерін өңдеу.',
    'shop-pages' => 'Дүкен беттерін өңдеу.',
    'shop-warehouse' => 'Дүкен қоймасын өңдеу',
    'shop-permissions' => 'Дүкенге кіру рұқсатын көру және өңдеу.',
    'shop-process-center' => 'Алынған тапсырыстарды басқарыңыз.',
    'shop-profile' => 'Дүкен профильдерін басқарыңыз.',
    'shop-discount-code' => 'Жеңілдік кодтарын басқарыңыз.',
    'shop-coupon' => 'Купондарды басқару.',
    'shop-offer' => 'Ұсыныстарды басқару.',
    'shop-cashback' => 'Кэшбэктерді басқарыңыз.',
    'shop-lottery' => 'Лотереяларды басқарыңыз.',
    'shop-community' => 'Қауымдастықты басқару.',
    'shop-customers' => 'Клиенттерді басқару.',
    'shop-ribbon' => 'Таспа жазылымдарын басқару.',
    'community-read' => 'Selldone қауымдастығын оқыңыз.',
    'community-write' => 'Сатылған қауымдастық деп жазыңыз.',
    'profile-write' => 'Пайдаланушы профилі туралы ақпаратты жазыңыз.',
    'vendor-read' => 'Жеткізушінің тапсырыстарын орындау әрекеттеріне қол жеткізу.',
    'vendor-write' => 'Тапсырыстарды, төлемді және жеткізушінің басқа ақпаратын өзгерту.',
    'connect-providers' => 'Қосылу провайдерлерін қосу, оқу және жазу.',
    'personal-identification' => 'Жеке ақпаратты, рұқсаттарды және тіркелгі конфигурациясын оқыңыз.',
    'accounts' => 'Әмияндарға қол жеткізу, транзакцияларды оқу және толтыру тарихы.',
    'shop-add' => 'Жаңа дүкен қосыңыз.',
    'shop-delete' => 'Дүкенді алып тастаңыз.',
    'shop-ai-write' => 'Пайдаланушыға AI командаларын орындауға мүмкіндік береді.',
    'shop-ai-read' => 'Пайдаланушыға пәрмендерді орындамай AI ақпаратына қол жеткізуге мүмкіндік береді.',
    'vendor-payment' => 'Пайдаланушыға жеткізушілер үшін төлемдер жазбаларын қосуға немесе Stripe Connect сияқты қосылған есептік жазбалары арқылы ақша аударуға мүмкіндік береді.',
    'company-read' => 'Бизнес профилі туралы ақпаратты оқуға мүмкіндік береді.',
    'company-write' => 'Бизнес профилі ақпаратын оқуға және жазуға мүмкіндік береді.',
    'agency-read' => 'Агенттік ақпаратын оқуға мүмкіндік береді.',
    'agency-write' => 'Агенттік ақпаратын оқуға және жазуға мүмкіндік береді.',
    'note-read' => 'Дүкен жазбаларын оқуға мүмкіндік береді.',
    'note-write' => 'Дүкен жазбаларын оқуға және жазуға мүмкіндік береді.',
    'developer-read' => 'Әзірлеушілердің активтерін оқуға мүмкіндік береді.',
    'developer-write' => 'Әзірлеушілердің активтерін оқуға және жазуға мүмкіндік береді.',
    'tokens-read' => 'Oauth токендері мен клиенттерін оқыңыз.',
    'tokens-write' => 'Oauth токендері мен клиенттерін жазыңыз.',
];
