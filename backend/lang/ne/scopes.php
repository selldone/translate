<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone प्रशासक दायरा।',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'प्रतिबन्धित लगानीकर्ता पहुँच।',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'प्रयोगकर्ता प्रोफाइल विवरण पढ्नुहोस्।',
    AuthServiceProvider::SCOPE_USER_PHONE => 'फोन नम्बर पढ्नुहोस्।',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'सुरक्षित गरिएका ठेगानाहरू पढ्नुहोस् र अद्यावधिक गर्नुहोस्।',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'प्रयोगकर्ता प्रोफाइल अपडेट गर्नुहोस्।',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'अर्डर राख्नुहोस्।',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'अर्डर इतिहास हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'उपहार कार्डहरू पहुँच गर्नुहोस्।',

    AuthServiceProvider::SCOPE_ARTICLES => 'लेखहरू सम्पादन गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'सूचनाहरू प्रबन्ध गर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'पसल सूची हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'पसल विवरणहरू सम्पादन गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'नयाँ पसल थप्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'पसल मेटाउनुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'समर्थन टिकटहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'उपहार कार्डहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'उपहार कार्डहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQs प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQ हरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'कोटीहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'कोटिहरू हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'उत्पादनहरू व्यवस्थापन गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'उत्पादनहरू हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'रिपोर्टहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'वित्तीय खाताहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'वित्तीय खाताहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'स्टोर पृष्ठहरू सम्पादन गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'स्टोर पृष्ठहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'गोदाम व्यवस्थापन गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'गोदाम हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'कर्मचारी पहुँच प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'कर्मचारी पहुँच हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'आदेशहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'आदेशहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'व्यापार प्रोफाइल प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'व्यापार प्रोफाइल हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'छुट कोडहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'छुट कोडहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'कुपनहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'कुपनहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'प्रस्तावहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'अफरहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'क्यासब्याकहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'क्यासब्याकहरू हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'लटरीहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'लटरीहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'समुदाय व्यवस्थापन गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'समुदाय हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ग्राहकहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ग्राहकहरु हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'सदस्यताहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'सदस्यताहरू हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'विक्रेता आदेशहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'विक्रेता आदेश र भुक्तानी प्रबन्ध गर्नुहोस्।',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'जडान प्रदायकहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'जडान प्रदायकहरू हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI आदेशहरू कार्यान्वयन गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'एआई जानकारी हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'विक्रेता भुक्तानी प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'विक्रेता भुक्तानी हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'व्यापार प्रोफाइल हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'व्यापार प्रोफाइल प्रबन्ध गर्नुहोस्।',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'एजेन्सी जानकारी हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'एजेन्सी जानकारी प्रबन्ध गर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'पसल नोटहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'पसल नोटहरू प्रबन्ध गर्नुहोस्।',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'विकासकर्ता सम्पत्तिहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'विकासकर्ता सम्पत्तिहरू व्यवस्थापन गर्नुहोस्।',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'व्यक्तिगत जानकारी र खाता सेटिङहरू पहुँच गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'वालेट र लेनदेन प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'वालेट लेनदेन हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth टोकन र ग्राहकहरू हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth टोकन र ग्राहकहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'सुरक्षा सेटिङहरू प्रबन्ध गर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'सम्बद्धहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'सम्बद्धहरू हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'प्रिन्ट टेम्प्लेटहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'प्रिन्ट टेम्प्लेटहरू हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'समीक्षाहरू प्रबन्ध गर्नुहोस्।',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'समीक्षाहरू हेर्नुहोस्।',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'मुद्रीकरण जानकारी हेर्नुहोस्।',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'मुद्रीकरण जानकारी प्रबन्ध गर्नुहोस्।',



    'profile' => 'नाम, इमेल ठेगाना, छवि र प्रमाणीकरण स्थिति सहित प्रोफाइल जानकारी पढ्नुहोस्।',
    'phone' => 'सम्पर्क नम्बर पहुँच',
    'address' => 'सुरक्षित ठेगाना पुस्तिकाबाट ठेगाना पढ्नुहोस् र सम्पादन गर्नुहोस्',
    'buy' => 'अर्डर र पसल अर्डर।',
    'order-history' => 'अर्डर इतिहास पढ्नुहोस्।',
    'my-gift-cards' => 'मेरो उपहारकार्डहरूमा पहुँच।',
    'articles' => 'लेख सम्पादन गर्नुहोस्।',
    'notifications' => 'सूचनाहरू पठाउनुहोस् र प्राप्त गर्नुहोस्।',
    'read-shops' => 'स्टोर सूची पढ्नुहोस्।',
    'shop-edit' => 'स्टोर सम्पादन पहुँच।',
    'shop-contacts' => 'सम्पर्क फारमहरू प्राप्त गर्नुहोस् र सम्पादन गर्नुहोस्।',
    'shop-gift-cards' => 'कार्डहरू सिर्जना गर्ने, सम्पादन गर्ने र व्यवस्थापन गर्ने।',
    'shop-faqs' => 'बारम्बार सोधिने प्रश्नहरू सिर्जना गर्नुहोस्, सम्पादन गर्नुहोस् र व्यवस्थापन गर्नुहोस्।',
    'shop-categories' => 'कोटिहरू सिर्जना गर्ने, सम्पादन गर्ने र व्यवस्थापन गर्ने।',
    'backoffice-write-products' => 'ब्याक अफिसमा उत्पादनहरूको सिर्जना, सम्पादन र व्यवस्थापनलाई अधिकृत गर्नुहोस्।',
    'backoffice-read-products' => 'ब्याक अफिसमा उत्पादनहरूको सूची र विस्तृत उत्पादन जानकारी हेर्न पहुँच अधिकृत गर्नुहोस्।',
    'shop-read-reports' => 'जानकारी र रिपोर्टहरू पढ्नुहोस्।',
    'shop-socials' => 'स्टोर सामाजिक सञ्जालहरू सम्पादन गर्नुहोस्।',
    'shop-accounts' => 'स्टोर-लिङ्क गरिएको वित्तीय खाताहरू सम्पादन गर्नुहोस् र मेटाउनुहोस्।',
    'shop-menus' => 'स्टोर मेनुहरू सम्पादन गर्नुहोस्।',
    'shop-pages' => 'स्टोर पृष्ठहरू सम्पादन गर्नुहोस्।',
    'shop-warehouse' => 'स्टोर गोदाम सम्पादन गर्नुहोस्',
    'shop-permissions' => 'स्टोर पहुँच हेर्नुहोस् र सम्पादन गर्नुहोस्।',
    'shop-process-center' => 'प्राप्त आदेशहरू प्रबन्ध गर्नुहोस्।',
    'shop-profile' => 'स्टोर प्रोफाइलहरू प्रबन्ध गर्नुहोस्।',
    'shop-discount-code' => 'छुट कोडहरू प्रबन्ध गर्नुहोस्।',
    'shop-coupon' => 'कुपनहरू प्रबन्ध गर्नुहोस्।',
    'shop-offer' => 'प्रस्तावहरू प्रबन्ध गर्नुहोस्।',
    'shop-cashback' => 'क्यासब्याकहरू प्रबन्ध गर्नुहोस्।',
    'shop-lottery' => 'लटरीहरू प्रबन्ध गर्नुहोस्।',
    'shop-community' => 'समुदाय व्यवस्थापन गर्नुहोस्।',
    'shop-customers' => 'ग्राहकहरू प्रबन्ध गर्नुहोस्।',
    'shop-ribbon' => 'रिबन सदस्यताहरू प्रबन्ध गर्नुहोस्।',
    'community-read' => 'Selldone समुदाय पढ्नुहोस्।',
    'community-write' => 'बेचेको समुदाय लेख्नुहोस्।',
    'profile-write' => 'प्रयोगकर्ता प्रोफाइल जानकारी लेख्नुहोस्।',
    'vendor-read' => 'विक्रेता आदेशहरूको पूर्ति कार्यहरूमा पहुँच।',
    'vendor-write' => 'अर्डर, भुक्तानी र विक्रेताको अन्य जानकारी परिवर्तन गर्नुहोस्।',
    'connect-providers' => 'जडान प्रदायकहरू थप्नुहोस्, पढ्नुहोस् र लेख्नुहोस्।',
    'personal-identification' => 'व्यक्तिगत जानकारी, पहुँच, र खाता कन्फिगरेसन पढ्नुहोस्।',
    'accounts' => 'वालेटहरूमा पहुँच, लेनदेनहरू र शीर्ष-अप इतिहासहरू पढ्नुहोस्।',
    'shop-add' => 'नयाँ पसल थप्नुहोस्।',
    'shop-delete' => 'एउटा पसल हटाउनुहोस्।',
    'shop-ai-write' => 'प्रयोगकर्तालाई AI आदेशहरू कार्यान्वयन गर्न अनुमति दिन्छ।',
    'shop-ai-read' => 'प्रयोगकर्तालाई आदेशहरू कार्यान्वयन नगरी AI जानकारी पहुँच गर्न अनुमति दिन्छ।',
    'vendor-payment' => 'प्रयोगकर्तालाई विक्रेताहरूका लागि भुक्तानी रेकर्डहरू थप्न वा तिनीहरूको जडान गरिएका खाताहरू जस्तै स्ट्राइप जडान मार्फत रकम स्थानान्तरण गर्न अनुमति दिन्छ।',
    'company-read' => 'व्यापार प्रोफाइल जानकारी पढ्न अनुमति दिन्छ।',
    'company-write' => 'व्यापार प्रोफाइल जानकारी पढ्न र लेख्न अनुमति दिन्छ।',
    'agency-read' => 'एजेन्सी जानकारी पढ्न अनुमति दिन्छ।',
    'agency-write' => 'एजेन्सी जानकारी पढ्न र लेख्न अनुमति दिन्छ।',
    'note-read' => 'पसल नोटहरू पढ्न अनुमति दिन्छ।',
    'note-write' => 'पसल नोटहरू पढ्न र लेख्न अनुमति दिन्छ।',
    'developer-read' => 'विकासकर्ता सम्पत्तिहरू पढ्न अनुमति दिन्छ।',
    'developer-write' => 'विकासकर्ता सम्पत्तिहरू पढ्न र लेख्न अनुमति दिन्छ।',
    'tokens-read' => 'Oauth टोकनहरू र ग्राहकहरू पढ्नुहोस्।',
    'tokens-write' => 'Oauth टोकन र ग्राहकहरू लेख्नुहोस्।',
];
