<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone የአስተዳዳሪ ወሰን።',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'የተገደበ የባለሀብቶች መዳረሻ።',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'የተጠቃሚ መገለጫ ዝርዝሮችን ያንብቡ።',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ስልክ ቁጥር ያንብቡ።',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'የተቀመጡ አድራሻዎችን ያንብቡ እና ያዘምኑ።',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'የተጠቃሚ መገለጫ ያዘምኑ።',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ትዕዛዞችን ያስቀምጡ.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'የትዕዛዝ ታሪክን ይመልከቱ።',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'የስጦታ ካርዶችን ይድረሱ.',

    AuthServiceProvider::SCOPE_ARTICLES => 'ጽሑፎችን ያርትዑ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'ማሳወቂያዎችን ያስተዳድሩ።',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'የሱቅ ዝርዝርን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'የሱቅ ዝርዝሮችን ያርትዑ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'አዲስ ሱቅ ያክሉ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ሱቅ ሰርዝ።',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'የድጋፍ ትኬቶችን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'የስጦታ ካርዶችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'የስጦታ ካርዶችን ይመልከቱ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'የሚጠየቁ ጥያቄዎችን አስተዳድር።',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'የሚጠየቁ ጥያቄዎችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'ምድቦችን አስተዳድር።',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'ምድቦችን ይመልከቱ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ምርቶችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ምርቶችን ይመልከቱ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'ሪፖርቶችን ይመልከቱ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'የፋይናንስ ሂሳቦችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'የፋይናንስ ሂሳቦችን ይመልከቱ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'የሱቅ ገጾችን ያርትዑ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'የሱቅ ገጾችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'መጋዘን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'መጋዘን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'የሰራተኞች መዳረሻን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'የሰራተኞች መዳረሻን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ትዕዛዞችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ትዕዛዞችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'የንግድ መገለጫን አስተዳድር።',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'የንግድ መገለጫ ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'የቅናሽ ኮዶችን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'የቅናሽ ኮዶችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'ኩፖኖችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'ኩፖኖችን ይመልከቱ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ቅናሾችን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ቅናሾችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'የገንዘብ ተመላሾችን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'የገንዘብ ተመላሾችን ይመልከቱ።',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ሎተሪዎችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ሎተሪዎችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'ማህበረሰቡን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'ማህበረሰቡን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ደንበኞችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ደንበኞችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'የደንበኝነት ምዝገባዎችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'የደንበኝነት ምዝገባዎችን ይመልከቱ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'የአቅራቢ ትዕዛዞችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'የአቅራቢ ትዕዛዞችን እና ክፍያዎችን ያስተዳድሩ።',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'የግንኙነት አቅራቢዎችን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'የግንኙነት አቅራቢዎችን ይመልከቱ።',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'የ AI ትዕዛዞችን ያስፈጽም.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'የ AI መረጃን ይመልከቱ።',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'የአቅራቢ ክፍያዎችን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'የአቅራቢ ክፍያዎችን ይመልከቱ።',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'የንግድ መገለጫ ይመልከቱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'የንግድ መገለጫን አስተዳድር።',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'የኤጀንሲውን መረጃ ይመልከቱ።',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'የኤጀንሲውን መረጃ አስተዳድር።',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'የሱቅ ማስታወሻዎችን ይመልከቱ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'የሱቅ ማስታወሻዎችን ያስተዳድሩ.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'የገንቢ ንብረቶችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'የገንቢ ንብረቶችን አስተዳድር።',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'የግል መረጃን እና የመለያ ቅንብሮችን ይድረሱ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'የኪስ ቦርሳ እና ግብይቶችን ያስተዳድሩ።',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'የኪስ ቦርሳ ግብይቶችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth ቶከኖች እና ደንበኞችን ይመልከቱ።',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth ቶከኖችን እና ደንበኞችን አስተዳድር።',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'የደህንነት ቅንብሮችን ያስተዳድሩ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'ተባባሪዎችን ያስተዳድሩ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ተባባሪዎችን ይመልከቱ።',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'የህትመት አብነቶችን አስተዳድር።',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'የህትመት አብነቶችን ይመልከቱ።',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'ግምገማዎችን አስተዳድር።',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'ግምገማዎችን ይመልከቱ።',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'የገቢ መፍጠር መረጃን ይመልከቱ።',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'የገቢ መፍጠር መረጃን አስተዳድር።',



    'profile' => 'ስም፣ ኢሜይል አድራሻ፣ ምስል እና የማረጋገጫ ሁኔታን ጨምሮ የመገለጫ መረጃን ያንብቡ።',
    'phone' => 'የእውቂያ ቁጥር መዳረሻ',
    'address' => 'ከተቀመጠው የአድራሻ ደብተር አንብብ እና አስተካክል።',
    'buy' => 'ትእዛዝ እና የሱቅ ትእዛዝ።',
    'order-history' => 'የትእዛዝ ታሪክን ያንብቡ።',
    'my-gift-cards' => 'የስጦታ ካርዶቼን መድረስ።',
    'articles' => 'ጽሑፎችን ያርትዑ።',
    'notifications' => 'ማሳወቂያዎችን ይላኩ እና ይቀበሉ።',
    'read-shops' => 'የመደብር ዝርዝርን ያንብቡ።',
    'shop-edit' => 'የመደብር አርትዖት መዳረሻ.',
    'shop-contacts' => 'የእውቂያ ቅጾችን ይቀበሉ እና ያርትዑ።',
    'shop-gift-cards' => 'ካርዶችን መፍጠር፣ ማረም እና ማስተዳደር።',
    'shop-faqs' => 'በተደጋጋሚ የሚጠየቁ ጥያቄዎችን ይፍጠሩ፣ ያርትዑ እና ያስተዳድሩ።',
    'shop-categories' => 'ምድቦችን መፍጠር፣ ማረም እና ማስተዳደር።',
    'backoffice-write-products' => 'በኋለኛው ቢሮ ውስጥ ምርቶችን መፍጠር፣ ማረም እና ማስተዳደርን ፍቀድ።',
    'backoffice-read-products' => 'የምርቶቹን ዝርዝር እና ዝርዝር የምርት መረጃ በኋለኛው ቢሮ ለማየት መዳረሻን ፍቀድ።',
    'shop-read-reports' => 'መረጃ እና ሪፖርቶችን ያንብቡ.',
    'shop-socials' => 'የሱቅ ማህበራዊ አውታረ መረቦችን ያርትዑ።',
    'shop-accounts' => 'ከመደብር ጋር የተገናኙ የፋይናንስ መለያዎችን ያርትዑ እና ይሰርዙ።',
    'shop-menus' => 'የመደብር ምናሌዎችን ያርትዑ።',
    'shop-pages' => 'የሱቅ ገጾችን ያርትዑ።',
    'shop-warehouse' => 'የመደብር ማከማቻን ያርትዑ',
    'shop-permissions' => 'የመደብር መዳረሻን ይመልከቱ እና ያርትዑ።',
    'shop-process-center' => 'የተቀበሉ ትዕዛዞችን ያስተዳድሩ።',
    'shop-profile' => 'የመደብር መገለጫዎችን ያስተዳድሩ።',
    'shop-discount-code' => 'የቅናሽ ኮዶችን ያስተዳድሩ።',
    'shop-coupon' => 'ኩፖኖችን ያስተዳድሩ.',
    'shop-offer' => 'ቅናሾችን ያስተዳድሩ።',
    'shop-cashback' => 'የገንዘብ ተመላሾችን ያስተዳድሩ።',
    'shop-lottery' => 'ሎተሪዎችን ያስተዳድሩ.',
    'shop-community' => 'ማህበረሰቡን ያስተዳድሩ።',
    'shop-customers' => 'ደንበኞችን ያስተዳድሩ.',
    'shop-ribbon' => 'የሪባን ምዝገባዎችን ያስተዳድሩ።',
    'community-read' => 'Selldone ማህበረሰብ አንብብ።',
    'community-write' => 'የተሸጠ ማህበረሰብን ይፃፉ።',
    'profile-write' => 'የተጠቃሚ መገለጫ መረጃ ይጻፉ።',
    'vendor-read' => 'የሻጭ ትዕዛዞችን የማሟያ እርምጃዎች መዳረሻ።',
    'vendor-write' => 'ትዕዛዞችን ፣ ክፍያን እና ሌሎች የአቅራቢውን መረጃ ይለውጡ።',
    'connect-providers' => 'አቅራቢዎችን ያክሉ፣ ያንብቡ እና ይፃፉ።',
    'personal-identification' => 'የግል መረጃን፣ መዳረሻዎችን እና የመለያ ውቅረትን ያንብቡ።',
    'accounts' => 'የኪስ ቦርሳዎች መዳረሻ፣ ግብይቶችን ያንብቡ እና የተጨመሩ ታሪኮች።',
    'shop-add' => 'አዲስ ሱቅ ያክሉ።',
    'shop-delete' => 'ሱቅ ያስወግዱ.',
    'shop-ai-write' => 'ተጠቃሚው የ AI ትዕዛዞችን እንዲፈጽም ያስችለዋል።',
    'shop-ai-read' => 'ተጠቃሚው ትዕዛዞችን ሳያስፈጽም የኤአይ መረጃን እንዲደርስ ያስችለዋል።',
    'vendor-payment' => 'ተጠቃሚው ለአቅራቢዎች የክፍያ መዝገቦችን እንዲያክል ወይም ገንዘቦችን በተገናኙት እንደ Stripe Connect ባሉ መለያዎቻቸው እንዲያስተላልፍ ያስችለዋል።',
    'company-read' => 'የንግድ መገለጫ መረጃ ለማንበብ ይፈቅዳል።',
    'company-write' => 'የንግድ መገለጫ መረጃ ለማንበብ እና ለመፃፍ ይፈቅዳል።',
    'agency-read' => 'የኤጀንሲውን መረጃ ለማንበብ ይፈቅዳል።',
    'agency-write' => 'የኤጀንሲውን መረጃ ለማንበብ እና ለመፃፍ ይፈቅዳል።',
    'note-read' => 'የሱቅ ማስታወሻዎችን ለማንበብ ይፈቅዳል።',
    'note-write' => 'የሱቅ ማስታወሻዎችን ለማንበብ እና ለመፃፍ ይፈቅዳል።',
    'developer-read' => 'የገንቢ ንብረቶችን ለማንበብ ይፈቅዳል።',
    'developer-write' => 'የገንቢዎች ንብረቶችን ለማንበብ እና ለመፃፍ ይፈቅዳል።',
    'tokens-read' => 'የOauth ምልክቶችን እና ደንበኞችን ያንብቡ።',
    'tokens-write' => 'የOauth ምልክቶችን እና ደንበኞችን ይፃፉ።',
];
