<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone вобласць адміністратара.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Абмежаваны доступ інвестараў.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Чытаць дэталі профілю карыстальніка.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Прачытаць нумар тэлефона.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Чытайце і абнаўляйце захаваныя адрасы.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Абнавіць профіль карыстальніка.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Размяшчайце заказы.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Прагляд гісторыі заказаў.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Падарункавыя карты доступу.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Рэдагаваць артыкулы.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Кіраванне апавяшчэннямі.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Праглядзіце спіс крам.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Рэдагаваць дэталі крамы.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Дадаць новую краму.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Выдаліць краму.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Кіруйце заяўкамі ў службу падтрымкі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Кіраванне падарункавымі картамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Праглядзець падарункавыя карты.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Кіраванне FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Праглядзець FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Кіраванне катэгорыямі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Прагляд катэгорый.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Кіраванне прадуктамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Прагляд прадуктаў.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Прагляд справаздач.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Кіраванне фінансавымі рахункамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Прагляд фінансавых рахункаў.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Рэдагаваць старонкі крамы.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Праглядзіце старонкі крамы.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Кіраваць складам.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Паглядзець склад.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Кіраванне доступам персаналу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Прагляд доступу персаналу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Прагляд заказаў.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Кіраванне заказамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Кіраванне бізнес-профілем.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Праглядзіце бізнес-профіль.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Кіруйце кодамі скідак.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Праглядзіце коды скідак.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Кіраванне купонамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Прагляд купонаў.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Кіраванне прапановамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Праглядзіце прапановы.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Кіруйце кэшбэкамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Прагляд кэшбэкаў.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Кіруйце латарэямі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Прагляд латарэі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Кіраванне супольнасцю.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Прагляд суполкі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Кіруйце кліентамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Прагляд кліентаў.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Кіраванне падпіскамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Праглядзіце падпіскі.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Праглядзіце заказы пастаўшчыкоў.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Кіруйце заказамі пастаўшчыкоў і плацяжамі.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Кіраванне пастаўшчыкамі падлучэння.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Прагляд пастаўшчыкоў падлучэння.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Выконвайце каманды штучнага інтэлекту.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Прагляд інфармацыі AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Кіраванне плацяжамі пастаўшчыкоў.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Прагляд плацяжоў пастаўшчыка.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Праглядзіце бізнес-профіль.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Кіраванне бізнес-профілем.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Прагляд інфармацыі агенцтва.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Кіраванне інфармацыяй агенцтва.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Праглядзіце нататкі крамы.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Кіруйце нататкамі крамы.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Прагляд актываў распрацоўшчыка.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Кіраванне актывамі распрацоўшчыка.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Доступ да асабістай інфармацыі і налад уліковага запісу.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Кіруйце кашальком і транзакцыямі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Прагляд транзакцый кашалька.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Праглядзіце токены і кліенты OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Кіруйце токенамі і кліентамі OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Кіраванне параметрамі бяспекі.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Кіраванне філіяламі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Прагляд філіялаў.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Кіраванне шаблонамі друку.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Прагляд шаблонаў друку.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Кіраванне аглядамі.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Праглядзіце водгукі.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Прагляд інфармацыі аб манетызацыі.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Кіраванне інфармацыяй аб манетызацыі.',



    'profile' => 'Чытайце інфармацыю профілю, уключаючы імя, адрас электроннай пошты, выяву і статус аўтэнтыфікацыі.',
    'phone' => 'Кантактны нумар доступу',
    'address' => 'Чытайце і рэдагуйце адрас з захаванай адраснай кнігі',
    'buy' => 'Заказ і заказ у краме.',
    'order-history' => 'Чытаць гісторыю заказаў.',
    'my-gift-cards' => 'Доступ да маіх падарункавых карт.',
    'articles' => 'Рэдагаваць артыкулы.',
    'notifications' => 'Адпраўляць і атрымліваць апавяшчэнні.',
    'read-shops' => 'Чытайце спіс крам.',
    'shop-edit' => 'Доступ да рэдагавання крамы.',
    'shop-contacts' => 'Атрымліваць і рэдагаваць кантактныя формы.',
    'shop-gift-cards' => 'Стварэнне, рэдагаванне і кіраванне картамі.',
    'shop-faqs' => 'Стварайце, рэдагуйце і кіруйце часта задаванымі пытаннямі.',
    'shop-categories' => 'Стварэнне, рэдагаванне і кіраванне катэгорыямі.',
    'backoffice-write-products' => 'Аўтарызуйце стварэнне, рэдагаванне і кіраванне прадуктамі ў бэк-офісе.',
    'backoffice-read-products' => 'Аўтарызуйце доступ для прагляду спісу прадуктаў і падрабязнай інфармацыі аб прадуктах у бэк-офісе.',
    'shop-read-reports' => 'Чытайце інфармацыю і справаздачы.',
    'shop-socials' => 'Рэдагаваць сацыяльныя сеткі крамы.',
    'shop-accounts' => 'Рэдагаваць і выдаляць звязаныя з крамай фінансавыя рахункі.',
    'shop-menus' => 'Рэдагаваць меню крамы.',
    'shop-pages' => 'Рэдагаваць старонкі крамы.',
    'shop-warehouse' => 'Рэдагаваць склад крамы',
    'shop-permissions' => 'Прагляд і рэдагаванне доступу да крамы.',
    'shop-process-center' => 'Кіруйце атрыманымі заказамі.',
    'shop-profile' => 'Кіраванне профілямі крамы.',
    'shop-discount-code' => 'Кіруйце кодамі скідак.',
    'shop-coupon' => 'Кіраванне купонамі.',
    'shop-offer' => 'Кіраванне прапановамі.',
    'shop-cashback' => 'Кіруйце кэшбэкамі.',
    'shop-lottery' => 'Кіруйце латарэямі.',
    'shop-community' => 'Кіраванне супольнасцю.',
    'shop-customers' => 'Кіруйце кліентамі.',
    'shop-ribbon' => 'Кіраванне падпіскамі на стужку.',
    'community-read' => 'Чытайце суполку Selldone.',
    'community-write' => 'Напісаць супольнасць selldone.',
    'profile-write' => 'Напішыце інфармацыю профілю карыстальніка.',
    'vendor-read' => 'Доступ да дзеянняў выканання заказаў пастаўшчыка.',
    'vendor-write' => 'Змяніць заказы, аплату і іншую інфармацыю пастаўшчыка.',
    'connect-providers' => 'Дадаванне, чытанне і запіс пастаўшчыкоў падлучэння.',
    'personal-identification' => 'Чытайце асабістую інфармацыю, доступы і канфігурацыю ўліковага запісу.',
    'accounts' => 'Доступ да кашалькоў, чытанне транзакцый і гісторыі папаўненняў.',
    'shop-add' => 'Дадаць новую краму.',
    'shop-delete' => 'Выдаліць краму.',
    'shop-ai-write' => 'Дазваляе карыстальніку выконваць каманды штучнага інтэлекту.',
    'shop-ai-read' => 'Дазваляе карыстальніку атрымліваць доступ да інфармацыі штучнага інтэлекту без выканання каманд.',
    'vendor-payment' => 'Дазваляе карыстальніку дадаваць запісы плацяжоў для пастаўшчыкоў або пераводзіць сродкі праз іх падлучаныя ўліковыя запісы, такія як Stripe Connect.',
    'company-read' => 'Дазваляе чытаць інфармацыю пра бізнес-профіль.',
    'company-write' => 'Дазваляе чытаць і запісваць інфармацыю пра бізнес-профіль.',
    'agency-read' => 'Дазваляе чытаць інфармацыю агенцтва.',
    'agency-write' => 'Дазваляе чытаць і запісваць інфармацыю агенцтва.',
    'note-read' => 'Дазваляе чытаць нататкі крамы.',
    'note-write' => 'Дазваляе чытаць і пісаць крамныя нататкі.',
    'developer-read' => 'Дазваляе чытаць актывы распрацоўшчыкаў.',
    'developer-write' => 'Дазваляе чытаць і запісваць актывы распрацоўшчыкаў.',
    'tokens-read' => 'Чытайце маркеры Oauth і кліентаў.',
    'tokens-write' => 'Напісаць токены Oauth і кліентаў.',
];
