<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone باشقۇرغۇچى دائىرىسى.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'مەبلەغ سالغۇچىلارنىڭ زىيارەت قىلىشى چەكلەنگەن.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'ئىشلەتكۈچى ئارخىپى تەپسىلاتلىرىنى ئوقۇڭ.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'تېلېفون نومۇرىنى ئوقۇڭ.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'ساقلانغان ئادرېسلارنى ئوقۇش ۋە يېڭىلاش.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ئىشلەتكۈچى ئارخىپىنى يېڭىلاڭ.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'زاكاز قىلىڭ.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'تەرتىپ تارىخىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'سوۋغات كارتىلىرىنى زىيارەت قىلىڭ.',

    AuthServiceProvider::SCOPE_ARTICLES => 'ماقالىلەرنى تەھرىرلەڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'ئۇقتۇرۇشلارنى باشقۇرۇش.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'دۇكان تىزىملىكىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'دۇكان تەپسىلاتلىرىنى تەھرىرلەڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'يېڭى دۇكان قوشۇڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'دۇكاننى ئۆچۈرۈڭ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'قوللاش بېلىتىنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'سوۋغات كارتىلىرىنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'سوۋغات كارتىلىرىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'سوئاللارنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'سوئاللارنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'تۈرلەرنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'سەھىپىلەرنى كۆرۈش.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'مەھسۇلاتلارنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'مەھسۇلاتلارنى كۆرۈش.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'دوكلاتلارنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'مالىيە ھېساباتىنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'مالىيە ھېساباتىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'دۇكان بەتلىرىنى تەھرىرلەش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'دۇكان بەتلىرىنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'ئامبارنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ئامبارنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'خىزمەتچىلەرنىڭ زىيارەت قىلىشىنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'خىزمەتچىلەرنىڭ زىيارەت قىلىشىنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'زاكازنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'زاكازنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'سودا ئارخىپىنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'سودا ئارخىپىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ئېتىبار كودىنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ئېتىبار كودىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'تالونلارنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'تالونلارنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'تەكلىپلەرنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'تەكلىپلەرنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'نەق پۇلنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'نەق پۇل قايتۇرۇش.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'لاتارىيە باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'لاتارىيەچىلەرنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'مەھەللە باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'مەھەللە كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'خېرىدارلارنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'خېرىدارلارنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'مۇشتەرىلىكنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'مۇشتەرىلىكلەرنى كۆرۈڭ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'ساتقۇچىلارنىڭ زاكازلىرىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'ساتقۇچىلارنىڭ زاكاز ۋە چىقىملىرىنى باشقۇرۇش.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'ئۇلىنىش تەمىنلىگۈچىلەرنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'ئۇلىنىش تەمىنلىگۈچىلەرنى كۆرۈڭ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI بۇيرۇقلىرىنى ئىجرا قىلىڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'سۈنئىي ئەقىل ئۇچۇرىنى كۆرۈڭ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'ساتقۇچىلارنىڭ چىقىملىرىنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'ساتقۇچىلارنىڭ چىقىملىرىنى كۆرۈڭ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'سودا ئارخىپىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'سودا ئارخىپىنى باشقۇرۇش.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ئورگان ئۇچۇرلىرىنى كۆرۈش.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ئورگان ئۇچۇرلىرىنى باشقۇرۇش.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'دۇكان خاتىرىسىنى كۆرۈش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'دۇكان خاتىرىسىنى باشقۇرۇش.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'ئاچقۇچىلارنىڭ مۈلكىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'ئاچقۇچىلارنىڭ مۈلكىنى باشقۇرۇش.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'شەخسىي ئۇچۇر ۋە ھېسابات تەڭشىكىنى زىيارەت قىلىڭ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ھەميان ۋە سودىلارنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ھەميان سودىسىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth بەلگىسى ۋە خېرىدارلارنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth بەلگە ۋە خېرىدارلارنى باشقۇرۇڭ.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'بىخەتەرلىك تەڭشەكلىرىنى باشقۇرۇڭ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'تارماقلارنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ھەمكارلاشقۇچىلارنى كۆرۈڭ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'بېسىش قېلىپىنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'بېسىش قېلىپىنى كۆرۈڭ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'باھالارنى باشقۇرۇش.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'باھالارنى كۆرۈش.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'پۇللاشتۇرۇش ئۇچۇرىنى كۆرۈڭ.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'پۇللاشتۇرۇش ئۇچۇرلىرىنى باشقۇرۇش.',



    'profile' => 'ئىسىم ، ئېلېكترونلۇق خەت ئادرېسى ، رەسىم ۋە دەلىللەش ھالىتى قاتارلىق ئارخىپ ئۇچۇرلىرىنى ئوقۇڭ.',
    'phone' => 'ئالاقىلىشىش نومۇرى',
    'address' => 'ساقلانغان ئادرېس دەپتىرىدىن ئادرېسنى ئوقۇش ۋە تەھرىرلەش',
    'buy' => 'زاكاز ۋە دۇكان زاكاز.',
    'order-history' => 'تەرتىپ تارىخىنى ئوقۇڭ.',
    'my-gift-cards' => 'سوۋغات كارتىلىرىمنى زىيارەت قىلىڭ.',
    'articles' => 'ماقالىلەرنى تەھرىرلەش.',
    'notifications' => 'ئۇقتۇرۇش ئەۋەتىش ۋە تاپشۇرۇۋېلىش.',
    'read-shops' => 'دۇكان تىزىملىكىنى ئوقۇڭ.',
    'shop-edit' => 'دۇكان تەھرىرلەش ھوقۇقى.',
    'shop-contacts' => 'ئالاقىلىشىش جەدۋىلىنى قوبۇل قىلىش ۋە تەھرىرلەش.',
    'shop-gift-cards' => 'كارتا قۇرۇش ، تەھرىرلەش ۋە باشقۇرۇش.',
    'shop-faqs' => 'دائىم سورالغان سوئاللارنى قۇرۇش ، تەھرىرلەش ۋە باشقۇرۇش.',
    'shop-categories' => 'سەھىپىلەرنى قۇرۇش ، تەھرىرلەش ۋە باشقۇرۇش.',
    'backoffice-write-products' => 'ئارقا ئىشخانىدا مەھسۇلات يارىتىش ، تەھرىرلەش ۋە باشقۇرۇشقا ھوقۇق بېرىش.',
    'backoffice-read-products' => 'ئارقا ئىشخانىدىكى مەھسۇلات تىزىملىكى ۋە تەپسىلىي مەھسۇلات ئۇچۇرلىرىنى كۆرۈشكە ئىجازەت بېرىڭ.',
    'shop-read-reports' => 'ئۇچۇر ۋە دوكلاتلارنى ئوقۇڭ.',
    'shop-socials' => 'ئىجتىمائىي ئالاقە تورىنى تەھرىرلەش.',
    'shop-accounts' => 'دۇكانغا باغلانغان مالىيە ھېساباتىنى تەھرىرلەش ۋە ئۆچۈرۈش.',
    'shop-menus' => 'دۇكان تىزىملىكىنى تەھرىرلەش.',
    'shop-pages' => 'دۇكان بەتلىرىنى تەھرىرلەش.',
    'shop-warehouse' => 'دۇكان ئامبىرىنى تەھرىرلەش',
    'shop-permissions' => 'دۇكان زىيارىتىنى كۆرۈش ۋە تەھرىرلەش.',
    'shop-process-center' => 'زاكاز قوبۇل قىلدى.',
    'shop-profile' => 'دۇكان ئارخىپىنى باشقۇرۇش.',
    'shop-discount-code' => 'ئېتىبار كودىنى باشقۇرۇش.',
    'shop-coupon' => 'تالونلارنى باشقۇرۇش.',
    'shop-offer' => 'تەكلىپلەرنى باشقۇرۇش.',
    'shop-cashback' => 'نەق پۇلنى باشقۇرۇش.',
    'shop-lottery' => 'لاتارىيە باشقۇرۇش.',
    'shop-community' => 'مەھەللە باشقۇرۇش.',
    'shop-customers' => 'خېرىدارلارنى باشقۇرۇش.',
    'shop-ribbon' => 'لېنتا مۇشتەرىلىكىنى باشقۇرۇش.',
    'community-read' => 'Selldone مەھەللىسىنى ئوقۇڭ.',
    'community-write' => 'ساتقۇچى مەھەللە يېزىڭ.',
    'profile-write' => 'ئىشلەتكۈچى ئارخىپى ئۇچۇرلىرىنى يېزىڭ.',
    'vendor-read' => 'ساتقۇچىلار زاكازلىرىنىڭ ئورۇندىلىش ھەرىكەتلىرىگە ئېرىشىش.',
    'vendor-write' => 'مال ساتقۇچىنىڭ زاكاز ، ھەق ۋە باشقا ئۇچۇرلىرىنى ئۆزگەرتىڭ.',
    'connect-providers' => 'ئۇلىنىش تەمىنلىگۈچىلەرنى قوشۇش ، ئوقۇش ۋە يېزىش.',
    'personal-identification' => 'شەخسىي ئۇچۇرلارنى ، زىيارەتلەرنى ۋە ھېسابات سەپلىمىسىنى ئوقۇڭ.',
    'accounts' => 'ھەميانغا كىرىش ، سودا ۋە تولۇقلىما تارىخىنى ئوقۇش.',
    'shop-add' => 'يېڭى دۇكان قوشۇڭ.',
    'shop-delete' => 'دۇكاننى ئېلىۋېتىڭ.',
    'shop-ai-write' => 'ئىشلەتكۈچىنىڭ AI بۇيرۇقلىرىنى ئىجرا قىلىشىغا يول قويىدۇ.',
    'shop-ai-read' => 'ئىشلەتكۈچىنىڭ بۇيرۇقنى ئىجرا قىلماي تۇرۇپ سۈنئىي ئەقىل ئۇچۇرىغا ئېرىشىشىگە يول قويىدۇ.',
    'vendor-payment' => 'ئىشلەتكۈچىنىڭ Stripe Connect غا ئوخشاش ئۇلىنىش ھېساباتى ئارقىلىق ساتقۇچىلارغا پۇل تۆلەش خاتىرىسىنى قوشۇشىغا ياكى مەبلەغ يۆتكىشىگە يول قويىدۇ.',
    'company-read' => 'سودا ئارخىپى ئۇچۇرلىرىنى ئوقۇشقا يول قويىدۇ.',
    'company-write' => 'سودا ئارخىپى ئۇچۇرلىرىنى ئوقۇش ۋە يېزىشقا يول قويىدۇ.',
    'agency-read' => 'ئورگان ئۇچۇرلىرىنى ئوقۇشقا يول قويىدۇ.',
    'agency-write' => 'ئورگان ئۇچۇرلىرىنى ئوقۇش ۋە يېزىشقا يول قويىدۇ.',
    'note-read' => 'دۇكان خاتىرىسىنى ئوقۇشقا يول قويىدۇ.',
    'note-write' => 'دۇكان خاتىرىسىنى ئوقۇش ۋە يېزىشقا يول قويىدۇ.',
    'developer-read' => 'ئاچقۇچىلارنىڭ مۈلۈكلىرىنى ئوقۇشقا يول قويىدۇ.',
    'developer-write' => 'ئاچقۇچىلارنىڭ مۈلۈكلىرىنى ئوقۇش ۋە يېزىشقا يول قويىدۇ.',
    'tokens-read' => 'Oauth بەلگىسى ۋە خېرىدارلىرىنى ئوقۇڭ.',
    'tokens-write' => 'Oauth بەلگىسى ۋە خېرىدارلىرىنى يېزىڭ.',
];
