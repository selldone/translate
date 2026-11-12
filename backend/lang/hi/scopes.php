<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone प्रशासक का दायरा।',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'प्रतिबंधित निवेशक पहुंच.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'उपयोगकर्ता प्रोफ़ाइल विवरण पढ़ें.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'फ़ोन नंबर पढ़ें.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'सहेजे गए पते पढ़ें और अपडेट करें.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'उपयोगकर्ता प्रोफ़ाइल अपडेट करें.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ऑर्डर दें.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ऑर्डर इतिहास देखें.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'उपहार कार्ड तक पहुंचें।',

    AuthServiceProvider::SCOPE_ARTICLES => 'लेख संपादित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'सूचनाएं प्रबंधित करें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'दुकान सूची देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'दुकान विवरण संपादित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'नई दुकान जोड़ें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'दुकान हटाएं.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'समर्थन टिकट प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'उपहार कार्ड प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'उपहार कार्ड देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'अक्सर पूछे जाने वाले प्रश्न प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'अक्सर पूछे जाने वाले प्रश्न देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'श्रेणियां प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'श्रेणियां देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'उत्पादों का प्रबंधन करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'उत्पाद देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'रिपोर्ट देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'वित्तीय खाते प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'वित्तीय खाते देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'स्टोर पेज संपादित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'स्टोर पेज देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'गोदाम का प्रबंधन करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'गोदाम देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'कर्मचारियों की पहुंच प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'स्टाफ़ की पहुंच देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'आदेश देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ऑर्डर प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'व्यवसाय प्रोफ़ाइल प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'व्यवसाय प्रोफ़ाइल देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'डिस्काउंट कोड प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'डिस्काउंट कोड देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'कूपन प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'कूपन देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ऑफ़र प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ऑफर देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'कैशबैक प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'कैशबैक देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'लॉटरी का प्रबंधन करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'लॉटरी देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'समुदाय का प्रबंधन करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'समुदाय देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ग्राहकों को प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ग्राहक देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'सदस्यताएँ प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'सदस्यताएँ देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'विक्रेता के आदेश देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'विक्रेता के ऑर्डर और भुगतान प्रबंधित करें।',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'कनेक्ट प्रदाताओं को प्रबंधित करें.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'कनेक्ट प्रदाता देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'एआई कमांड निष्पादित करें।',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'एआई जानकारी देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'विक्रेता भुगतान प्रबंधित करें।',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'विक्रेता भुगतान देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'व्यवसाय प्रोफ़ाइल देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'व्यवसाय प्रोफ़ाइल प्रबंधित करें.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'एजेंसी की जानकारी देखें.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'एजेंसी की जानकारी प्रबंधित करें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'दुकान के नोट देखें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'दुकान नोट्स प्रबंधित करें.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'डेवलपर संपत्ति देखें.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'डेवलपर संपत्तियों का प्रबंधन करें।',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'व्यक्तिगत जानकारी और खाता सेटिंग्स तक पहुंचें।',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'वॉलेट और लेनदेन प्रबंधित करें।',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'वॉलेट लेनदेन देखें.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth टोकन और क्लाइंट देखें।',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth टोकन और क्लाइंट प्रबंधित करें।',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'सुरक्षा सेटिंग्स प्रबंधित करें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'सहयोगियों को प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'सहयोगी देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'प्रिंट टेम्प्लेट प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'प्रिंट टेम्प्लेट देखें.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'समीक्षाएँ प्रबंधित करें.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'समीक्षाएँ देखें.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'मुद्रीकरण जानकारी देखें.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'मुद्रीकरण जानकारी प्रबंधित करें.',



    'profile' => 'नाम, ईमेल पता, छवि और प्रमाणीकरण स्थिति सहित प्रोफ़ाइल जानकारी पढ़ें।',
    'phone' => 'संपर्क नंबर पहुंच',
    'address' => 'सहेजी गई पता पुस्तिका से पता पढ़ें और संपादित करें',
    'buy' => 'ऑर्डर और शॉप ऑर्डर।',
    'order-history' => 'आदेश इतिहास पढ़ें।',
    'my-gift-cards' => 'मेरे उपहार कार्ड तक पहुंच.',
    'articles' => 'लेख संपादित करें।',
    'notifications' => 'सूचनाएं भेजें और प्राप्त करें।',
    'read-shops' => 'स्टोर सूची पढ़ें।',
    'shop-edit' => 'स्टोर संपादन पहुंच।',
    'shop-contacts' => 'संपर्क फ़ॉर्म प्राप्त करें और संपादित करें।',
    'shop-gift-cards' => 'कार्ड बनाना, संपादित करना और प्रबंधित करना।',
    'shop-faqs' => 'अक्सर पूछे जाने वाले प्रश्न बनाएं, संपादित करें और प्रबंधित करें।',
    'shop-categories' => 'श्रेणियाँ बनाना, संपादित करना और प्रबंधित करना।',
    'backoffice-write-products' => 'बैक ऑफिस में उत्पादों के निर्माण, संपादन और प्रबंधन को अधिकृत करना।',
    'backoffice-read-products' => 'बैक ऑफिस में उत्पाद सूची और विस्तृत उत्पाद जानकारी देखने के लिए पहुंच को अधिकृत करें।',
    'shop-read-reports' => 'जानकारी और रिपोर्ट पढ़ें।',
    'shop-socials' => 'स्टोर सामाजिक नेटवर्क संपादित करें।',
    'shop-accounts' => 'स्टोर से जुड़े वित्तीय खातों को संपादित करें और हटाएं।',
    'shop-menus' => 'स्टोर मेनू संपादित करें।',
    'shop-pages' => 'स्टोर पेज संपादित करें।',
    'shop-warehouse' => 'स्टोर वेयरहाउस संपादित करें',
    'shop-permissions' => 'स्टोर एक्सेस देखें और संपादित करें।',
    'shop-process-center' => 'प्राप्त आदेश प्रबंधित करें।',
    'shop-profile' => 'स्टोर प्रोफाइल प्रबंधित करें।',
    'shop-discount-code' => 'छूट कोड प्रबंधित करें।',
    'shop-coupon' => 'कूपन प्रबंधित करें।',
    'shop-offer' => 'ऑफ़र प्रबंधित करें।',
    'shop-cashback' => 'कैशबैक का प्रबंधन करें.',
    'shop-lottery' => 'लॉटरी का प्रबंधन करें।',
    'shop-community' => 'समुदाय का प्रबंधन करें।',
    'shop-customers' => 'ग्राहकों का प्रबंधन करें.',
    'shop-ribbon' => 'रिबन सदस्यता प्रबंधित करें.',
    'community-read' => 'Selldone समुदाय पढ़ें.',
    'community-write' => 'selldone समुदाय लिखें.',
    'profile-write' => 'उपयोगकर्ता प्रोफ़ाइल जानकारी लिखें.',
    'vendor-read' => 'विक्रेता के आदेशों की पूर्ति की कार्रवाई तक पहुंच।',
    'vendor-write' => 'विक्रेता के आदेश, भुगतान और अन्य जानकारी बदलें।',
    'connect-providers' => 'कनेक्ट प्रदाताओं को जोड़ें, पढ़ें और लिखें.',
    'personal-identification' => 'व्यक्तिगत जानकारी, पहुंच और खाता कॉन्फ़िगरेशन पढ़ें.',
    'accounts' => 'वॉलेट तक पहुंच, लेनदेन और टॉप-अप इतिहास पढ़ना।',
    'shop-add' => 'नई दुकान जोड़ें.',
    'shop-delete' => 'एक दुकान हटाओ.',
    'shop-ai-write' => 'उपयोगकर्ता को AI कमांड निष्पादित करने की अनुमति देता है।',
    'shop-ai-read' => 'उपयोगकर्ता को आदेशों का पालन किए बिना AI जानकारी तक पहुंचने की अनुमति देता है।',
    'vendor-payment' => 'यह उपयोगकर्ता को विक्रेताओं के लिए भुगतान रिकॉर्ड जोड़ने या स्ट्राइप कनेक्ट जैसे उनके जुड़े खातों के माध्यम से धन हस्तांतरण करने की अनुमति देता है।',
    'company-read' => 'व्यवसाय प्रोफ़ाइल जानकारी पढ़ने की अनुमति देता है.',
    'company-write' => 'व्यवसाय प्रोफ़ाइल जानकारी पढ़ने और लिखने की अनुमति देता है.',
    'agency-read' => 'एजेंसी की जानकारी पढ़ने की अनुमति देता है.',
    'agency-write' => 'एजेंसी की जानकारी पढ़ने और लिखने की अनुमति देता है।',
    'note-read' => 'दुकान के नोट्स पढ़ने की अनुमति देता है।',
    'note-write' => 'दुकान के नोट्स पढ़ने और लिखने की अनुमति देता है।',
    'developer-read' => 'डेवलपर्स की परिसंपत्तियों को पढ़ने की अनुमति देता है।',
    'developer-write' => 'डेवलपर्स की संपत्तियों को पढ़ने और लिखने की अनुमति देता है।',
    'tokens-read' => 'Oauth टोकन और क्लाइंट पढ़ें.',
    'tokens-write' => 'Oauth टोकन और क्लाइंट लिखें.',
];
