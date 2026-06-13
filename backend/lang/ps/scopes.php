<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone د مدیر ساحه.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'د پانګوالو لاسرسی محدود شوی.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'د کارونکي پروفایل توضیحات ولولئ.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'د تلیفون شمیره ولولئ.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'خوندي شوي پتې ولولئ او تازه کړئ.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'د کارونکي پروفایل تازه کړئ.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'امرونه ورکړئ.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'د امر تاریخ وګورئ.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'د ډالۍ کارتونو ته لاسرسی.',

    AuthServiceProvider::SCOPE_ARTICLES => 'مقالې ایډیټ کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'خبرتیاوې اداره کړئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'د پلورنځي لیست وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'د پلورنځي توضیحات سم کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'نوی هټۍ اضافه کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'هټۍ ړنګ کړئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'د ملاتړ ټکټونو اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'د ډالۍ کارتونه اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'د ډالۍ کارتونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQs اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQs وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'کټګورۍ اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'کتګورۍ وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'د محصولاتو اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'محصولات وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'راپورونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'د مالي حسابونو اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'مالي حسابونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'د پلورنځي پاڼې ایډیټ کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'د پلورنځي پاڼې وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'د ګودام اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ګودام وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'د کارمندانو لاسرسی اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'د کارمندانو لاسرسی وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'امرونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'امرونه اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'د سوداګرۍ پروفایل اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'د سوداګرۍ پروفایل وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'د تخفیف کوډونه اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'د تخفیف کوډونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'کوپنونه اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'کوپنونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'وړاندیزونه اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'وړاندیزونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'د نغدو پیسو اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'کیش بیکونه وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'د لاټرۍ اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'لاټرۍ وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'د ټولنې اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'ټولنه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'د پیرودونکو اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'پیرودونکي وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'ګډونونه اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'ګډون وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'د پلورونکي امرونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'د پلورونکي امرونه او تادیات اداره کړئ.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'د ارتباط چمتو کونکي اداره کړئ.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'د ارتباط چمتو کونکي وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'د AI امرونه اجرا کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'د AI معلومات وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'د پلورونکي تادیات اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'د پلورونکي تادیات وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'د سوداګرۍ پروفایل وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'د سوداګرۍ پروفایل اداره کړئ.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'د ادارې معلومات وګورئ.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'د ادارې معلومات اداره کړئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'د پلورنځي نوټونه وګورئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'د پلورنځي نوټونه اداره کړئ.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'د پراختیا کونکي شتمنۍ وګورئ.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'د پراختیا کونکي شتمنیو اداره کول.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'شخصي معلوماتو او د حساب تنظیماتو ته لاسرسی.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'د بټوې او راکړې ورکړې اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'د بټوې معاملې وګورئ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'د OAuth ټوکنونه او پیرودونکي وګورئ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'د OAuth ټوکن او پیرودونکي اداره کړئ.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'د امنیت ترتیبات اداره کړئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'وابسته اداره کول.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ملګري وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'د چاپ ټیمپلیټونه اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'د چاپ ټیمپلیټونه وګورئ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'بیاکتنې اداره کړئ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'بیاکتنې وګورئ.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'د پیسو مینځلو معلومات وګورئ.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'د پیسو مینځلو معلوماتو اداره کول.',



    'profile' => 'د پروفایل معلومات ولولئ په شمول نوم، بریښنالیک آدرس، عکس او د تصدیق حالت.',
    'phone' => 'د اړیکې شمیرې ته لاسرسی',
    'address' => 'د خوندي شوي ادرس کتاب څخه پته ولولئ او ایډیټ کړئ',
    'buy' => 'د امر او پلورنځي امر.',
    'order-history' => 'د امر تاریخ ولولئ.',
    'my-gift-cards' => 'زما ډالۍ کارتونو ته لاسرسی.',
    'articles' => 'د مقالو سمون.',
    'notifications' => 'خبرتیاوې واستوئ او ترلاسه کړئ.',
    'read-shops' => 'د پلورنځي لیست ولولئ.',
    'shop-edit' => 'د ذخیره کولو ترمیم لاسرسی.',
    'shop-contacts' => 'د اړیکو فورمې ترلاسه او ترمیم کړئ.',
    'shop-gift-cards' => 'د کارتونو جوړول، تدوین او اداره کول.',
    'shop-faqs' => 'په مکرر ډول پوښتل شوي پوښتنې رامینځته کړئ ، ایډیټ کړئ او اداره کړئ.',
    'shop-categories' => 'د کټګوریو جوړول، ایډیټ کول او اداره کول.',
    'backoffice-write-products' => 'په شاته دفتر کې د محصولاتو رامینځته کول ، ترمیم او مدیریت اجازه ورکړئ.',
    'backoffice-read-products' => 'په شاته دفتر کې د محصولاتو لیست او د محصول تفصيلي معلوماتو لیدو ته د لاسرسي اجازه ورکړئ.',
    'shop-read-reports' => 'معلومات او راپورونه ولولئ.',
    'shop-socials' => 'د پلورنځي ټولنیز شبکې ایډیټ کړئ.',
    'shop-accounts' => 'د پلورنځي پورې تړلي مالي حسابونه ایډیټ او حذف کړئ.',
    'shop-menus' => 'د پلورنځي مینو ایډیټ کړئ.',
    'shop-pages' => 'د پلورنځي پاڼې ایډیټ کړئ.',
    'shop-warehouse' => 'د پلورنځي ګودام ترمیم',
    'shop-permissions' => 'د پلورنځي لاسرسی وګورئ او ترمیم کړئ.',
    'shop-process-center' => 'ترلاسه شوي امرونه اداره کړئ.',
    'shop-profile' => 'د پلورنځي پروفایلونه اداره کړئ.',
    'shop-discount-code' => 'د تخفیف کوډونه اداره کړئ.',
    'shop-coupon' => 'کوپنونه اداره کړئ.',
    'shop-offer' => 'وړاندیزونه اداره کړئ.',
    'shop-cashback' => 'د نغدو پیسو اداره کول.',
    'shop-lottery' => 'د لاټرۍ اداره کول.',
    'shop-community' => 'د ټولنې اداره کول.',
    'shop-customers' => 'د پیرودونکو اداره کول.',
    'shop-ribbon' => 'د ربن ګډونونه اداره کړئ.',
    'community-read' => 'د سیلډون ټولنه ولولئ.',
    'community-write' => 'پلورل شوې ټولنه ولیکئ.',
    'profile-write' => 'د کارونکي پروفایل معلومات ولیکئ.',
    'vendor-read' => 'د پلورونکي امرونو بشپړولو عملونو ته لاسرسی.',
    'vendor-write' => 'د پلورونکي امرونه، تادیه او نور معلومات بدل کړئ.',
    'connect-providers' => 'د نښلونکي چمتو کونکي اضافه کول، لوستل او لیکل.',
    'personal-identification' => 'شخصي معلومات، لاسرسي، او د حساب ترتیب ولولئ.',
    'accounts' => 'بټو ته لاسرسی، د راکړې ورکړې او پورته تاریخونو لوستل.',
    'shop-add' => 'نوی هټۍ اضافه کړئ.',
    'shop-delete' => 'یو هټۍ لرې کړئ.',
    'shop-ai-write' => 'کارونکي ته اجازه ورکوي چې د AI امرونه اجرا کړي.',
    'shop-ai-read' => 'کارونکي ته اجازه ورکوي چې د امرونو پلي کولو پرته AI معلوماتو ته لاسرسی ومومي.',
    'vendor-payment' => 'کارونکي ته اجازه ورکوي چې د پلورونکو لپاره د تادیاتو ریکارډونه اضافه کړي یا د دوی د تړل شوي حسابونو لکه سټیپ کنیکټ له لارې فنډونه لیږدوي.',
    'company-read' => 'د سوداګرۍ پروفایل معلوماتو لوستلو ته اجازه ورکوي.',
    'company-write' => 'د سوداګرۍ پروفایل معلوماتو لوستلو او لیکلو ته اجازه ورکوي.',
    'agency-read' => 'د ادارې معلوماتو لوستلو ته اجازه ورکوي.',
    'agency-write' => 'د ادارې معلوماتو لوستلو او لیکلو ته اجازه ورکوي.',
    'note-read' => 'د پلورنځي نوټونو لوستلو ته اجازه ورکوي.',
    'note-write' => 'د پلورنځي نوټونو لوستلو او لیکلو ته اجازه ورکوي.',
    'developer-read' => 'د پراختیا کونکو شتمنیو لوستلو ته اجازه ورکوي.',
    'developer-write' => 'د پراختیا کونکو شتمنیو لوستلو او لیکلو ته اجازه ورکوي.',
    'tokens-read' => 'د Oauth نښې او پیرودونکي ولولئ.',
    'tokens-write' => 'د Oauth نښې او پیرودونکي ولیکئ.',
];
