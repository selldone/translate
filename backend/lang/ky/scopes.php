<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone администратордун чөйрөсү.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Чектелген инвесторлордун мүмкүнчүлүгү.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Колдонуучунун профилинин чоо-жайын окуу.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Телефон номерин оку.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Сакталган даректерди окуп, жаңыртыңыз.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Колдонуучунун профилин жаңыртыңыз.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Заказ бериңиз.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Буйрутма тарыхын көрүү.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Белек карталарына кирүү.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Макалаларды түзөтүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Билдирмелерди башкаруу.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Дүкөн тизмесин көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Дүкөндүн чоо-жайын түзөтүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Жаңы дүкөн кошуу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Дүкөндү жок кылуу.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Колдоо билеттерин башкарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Белек карталарын башкарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Белек карталарын көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Көп берилүүчү суроолорду башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Көп берилүүчү суроолорду көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Категорияларды башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Категорияларды көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Товарларды башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Продукцияларды көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Отчетторду көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Финансылык эсептерди башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Каржылык эсептерди көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Дүкөн барактарын түзөтүңүз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Дүкөн барактарын көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Складды башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Складды көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Кызматкерлердин кирүү мүмкүнчүлүгүн башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Кызматкерлердин кирүү мүмкүнчүлүгүн көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Заказдарды көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Буйруктарды башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Бизнес профилин башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Бизнес профилин көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Арзандатуу коддорун башкарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Арзандатуу коддорун көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Купондорду башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Купондорду көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Сунуштарды башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Сунуштарды көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Кэшбэктерди башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Кэшбэктерди көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Лотереяларды башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Лотереяларды көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Коомчулукту башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Коомчулукту көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Кардарларды башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Кардарларды көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Жазылууну башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Жазылууларды көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Сатуучунун заказдарын көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Сатуучунун заказдарын жана төлөмдөрүн башкарыңыз.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Туташуу провайдерлерин башкарыңыз.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Туташуу провайдерлерин көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI буйруктарын аткарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI маалыматын көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Сатуучунун төлөмдөрүн башкарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Сатуучунун төлөмдөрүн көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Бизнес профилин көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Бизнес профилин башкаруу.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Агенттиктин маалыматын көрүү.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Агенттиктин маалыматын башкарыңыз.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Дүкөн жазууларын көрүү.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Дүкөн жазууларын башкарыңыз.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Иштеп чыгуучунун активдерин көрүү.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Иштеп чыгуучунун активдерин башкарыңыз.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Жеке маалыматка жана каттоо эсебинин жөндөөлөрүнө кириңиз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Капчыкты жана транзакцияларды башкарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Капчык транзакцияларын көрүү.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth токендерин жана кардарларын көрүү.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth токендерин жана кардарларын башкарыңыз.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Коопсуздук жөндөөлөрүн башкаруу.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Филиалдарды башкарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Филиалдарды көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Басып чыгаруу үлгүлөрүн башкарыңыз.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Басып чыгаруу шаблондорун көрүү.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Сын-пикирлерди башкаруу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Сын-пикирлерди көрүү.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Монетизация маалыматын көрүү.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Монетизация маалыматын башкарыңыз.',



    'profile' => 'аты, электрондук почта дареги, сүрөт жана аутентификация статусун камтыган профиль маалыматын окуңуз.',
    'phone' => 'Байланыш номерине кирүү',
    'address' => 'Сакталган дарек китебинен даректи окуу жана түзөтүү',
    'buy' => 'Заказ жана магазин заказы.',
    'order-history' => 'Буйрутма тарыхын окуу.',
    'my-gift-cards' => 'Менин белек карталарыма кирүү.',
    'articles' => 'Макалаларды түзөтүү.',
    'notifications' => 'Билдирмелерди жөнөтүү жана алуу.',
    'read-shops' => 'Дүкөн тизмесин окуу.',
    'shop-edit' => 'Дүкөнгө түзөтүү мүмкүнчүлүгү.',
    'shop-contacts' => 'Байланыш формаларын алуу жана түзөтүү.',
    'shop-gift-cards' => 'Карталарды түзүү, түзөтүү жана башкаруу.',
    'shop-faqs' => 'Көп берилүүчү суроолорду түзүңүз, түзөтүңүз жана башкарыңыз.',
    'shop-categories' => 'Категорияларды түзүү, түзөтүү жана башкаруу.',
    'backoffice-write-products' => 'Арткы кеңседе өнүмдөрдү түзүүгө, редакциялоого жана башкарууга уруксат бериңиз.',
    'backoffice-read-products' => 'Арткы кеңседе өнүмдөрдүн тизмесин жана толук маалыматын көрүү мүмкүнчүлүгүнө уруксат бериңиз.',
    'shop-read-reports' => 'Маалыматтарды жана отчетторду окуу.',
    'shop-socials' => 'Дүкөндүн социалдык тармактарын түзөтүңүз.',
    'shop-accounts' => 'Дүкөнгө байланышкан каржы эсептерин түзөтүңүз жана жок кылыңыз.',
    'shop-menus' => 'Дүкөн менюларын түзөтүңүз.',
    'shop-pages' => 'Дүкөн барактарын түзөтүңүз.',
    'shop-warehouse' => 'Дүкөн кампасын түзөтүү',
    'shop-permissions' => 'Дүкөнгө кирүү мүмкүнчүлүгүн көрүү жана түзөтүү.',
    'shop-process-center' => 'Кабыл алынган буйруктарды башкаруу.',
    'shop-profile' => 'Дүкөн профилдерин башкарыңыз.',
    'shop-discount-code' => 'Арзандатуу коддорун башкарыңыз.',
    'shop-coupon' => 'Купондорду башкаруу.',
    'shop-offer' => 'Сунуштарды башкаруу.',
    'shop-cashback' => 'Кэшбэктерди башкаруу.',
    'shop-lottery' => 'Лотереяларды башкаруу.',
    'shop-community' => 'Коомчулукту башкаруу.',
    'shop-customers' => 'Кардарларды башкаруу.',
    'shop-ribbon' => 'Ribbon жазылууларын башкаруу.',
    'community-read' => 'Selldone коомчулугун оку.',
    'community-write' => 'Сатылган коом деп жаз.',
    'profile-write' => 'Колдонуучунун профилинин маалыматын жазыңыз.',
    'vendor-read' => 'Сатуучунун буйрутмаларын аткаруу аракеттерине жетүү.',
    'vendor-write' => 'Заказдарды, төлөмдү жана сатуучунун башка маалыматын өзгөртүү.',
    'connect-providers' => 'Туташуу провайдерлерин кошуу, окуу жана жазуу.',
    'personal-identification' => 'Жеке маалыматты, кирүү мүмкүнчүлүгүн жана каттоо эсебинин конфигурациясын окуңуз.',
    'accounts' => 'Капчыктарга кирүү, транзакцияларды окуу жана толуктоо тарыхы.',
    'shop-add' => 'Жаңы дүкөн кошуу.',
    'shop-delete' => 'Дүкөндү алып салыңыз.',
    'shop-ai-write' => 'Колдонуучуга AI буйруктарын аткарууга мүмкүндүк берет.',
    'shop-ai-read' => 'Колдонуучуга буйруктарды аткарбастан AI маалыматына кирүү мүмкүнчүлүгүн берет.',
    'vendor-payment' => 'Колдонуучуга сатуучулар үчүн төлөм жазууларын кошууга же Stripe Connect сыяктуу туташкан эсептери аркылуу акча которууга мүмкүндүк берет.',
    'company-read' => 'Бизнес профилинин маалыматын окууга мүмкүндүк берет.',
    'company-write' => 'Бизнес профилинин маалыматын окууга жана жазууга мүмкүндүк берет.',
    'agency-read' => 'Агенттиктин маалыматын окууга мүмкүндүк берет.',
    'agency-write' => 'Агенттиктин маалыматын окууга жана жазууга мүмкүндүк берет.',
    'note-read' => 'Дүкөн жазууларын окууга мүмкүндүк берет.',
    'note-write' => 'Дүкөн жазууларын окууга жана жазууга мүмкүндүк берет.',
    'developer-read' => 'Иштеп чыгуучулардын активдерин окууга мүмкүндүк берет.',
    'developer-write' => 'Иштеп чыгуучулардын активдерин окууга жана жазууга мүмкүндүк берет.',
    'tokens-read' => 'Oauth токендерин жана кардарларын окуңуз.',
    'tokens-write' => 'Oauth токендерин жана кардарларын жазыңыз.',
];
