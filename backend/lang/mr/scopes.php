<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone प्रशासक व्याप्ती.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'प्रतिबंधित गुंतवणूकदार प्रवेश.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'वापरकर्ता प्रोफाइल तपशील वाचा.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'फोन नंबर वाचा.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'सेव्ह केलेले पत्ते वाचा आणि अपडेट करा.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'वापरकर्ता प्रोफाइल अद्यतनित करा.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ऑर्डर द्या.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ऑर्डर इतिहास पहा.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'भेट कार्ड्समध्ये प्रवेश करा.',

    AuthServiceProvider::SCOPE_ARTICLES => 'लेख संपादित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'सूचना व्यवस्थापित करा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'दुकानाची यादी पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'दुकान तपशील संपादित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'नवीन दुकान जोडा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'दुकान हटवा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'समर्थन तिकिटे व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'भेट कार्ड व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'भेट कार्ड पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQ व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'वारंवार विचारले जाणारे प्रश्न पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'श्रेणी व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'श्रेणी पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'उत्पादने व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'उत्पादने पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'अहवाल पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'आर्थिक खाती व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'आर्थिक खाती पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'स्टोअर पृष्ठे संपादित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'स्टोअर पृष्ठे पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'गोदाम व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'गोदाम पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'कर्मचारी प्रवेश व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'कर्मचारी प्रवेश पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ऑर्डर पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ऑर्डर व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'व्यवसाय प्रोफाइल व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'व्यवसाय प्रोफाइल पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'सवलत कोड व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'सवलत कोड पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'कूपन व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'कूपन पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ऑफर व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ऑफर पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'कॅशबॅक व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'कॅशबॅक पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'लॉटरी व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'लॉटरी पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'समुदाय व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'समुदाय पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ग्राहक व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ग्राहक पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'सदस्यता व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'सदस्यता पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'विक्रेता ऑर्डर पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'विक्रेता ऑर्डर आणि देयके व्यवस्थापित करा.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'कनेक्ट प्रदाते व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'कनेक्ट प्रदाते पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'एआय कमांड कार्यान्वित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI माहिती पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'विक्रेता पेमेंट व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'विक्रेता पेमेंट पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'व्यवसाय प्रोफाइल पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'व्यवसाय प्रोफाइल व्यवस्थापित करा.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'एजन्सीची माहिती पहा.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'एजन्सी माहिती व्यवस्थापित करा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'दुकानाच्या नोट्स पहा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'दुकानाच्या नोट्स व्यवस्थापित करा.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'विकसक मालमत्ता पहा.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'विकसक मालमत्ता व्यवस्थापित करा.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'वैयक्तिक माहिती आणि खाते सेटिंग्जमध्ये प्रवेश करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'पाकीट आणि व्यवहार व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'वॉलेट व्यवहार पहा.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth टोकन आणि क्लायंट पहा.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth टोकन आणि क्लायंट व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'सुरक्षा सेटिंग्ज व्यवस्थापित करा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'संलग्न व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'संलग्न पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'प्रिंट टेम्पलेट्स व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'प्रिंट टेम्पलेट्स पहा.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'पुनरावलोकने व्यवस्थापित करा.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'पुनरावलोकने पहा.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'कमाईची माहिती पहा.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'कमाई माहिती व्यवस्थापित करा.',



    'profile' => 'नाव, ईमेल पत्ता, प्रतिमा आणि प्रमाणीकरण स्थिती यासह प्रोफाइल माहिती वाचा.',
    'phone' => 'संपर्क क्रमांक प्रवेश',
    'address' => 'जतन केलेल्या अॅड्रेस बुकमधून पत्ता वाचा आणि संपादित करा',
    'buy' => 'ऑर्डर आणि दुकान ऑर्डर.',
    'order-history' => 'ऑर्डर इतिहास वाचा.',
    'my-gift-cards' => 'माझ्या गिफ्टकार्डमध्ये प्रवेश.',
    'articles' => 'लेख संपादित करा.',
    'notifications' => 'सूचना पाठवा आणि प्राप्त करा.',
    'read-shops' => 'स्टोअर लिस्ट वाचा.',
    'shop-edit' => 'स्टोअर संपादन प्रवेश.',
    'shop-contacts' => 'संपर्क फॉर्म प्राप्त करा आणि संपादित करा.',
    'shop-gift-cards' => 'कार्ड तयार करणे, संपादित करणे आणि व्यवस्थापित करणे.',
    'shop-faqs' => 'वारंवार विचारले जाणारे प्रश्न तयार करा, संपादित करा आणि व्यवस्थापित करा.',
    'shop-categories' => 'श्रेणी तयार करणे, संपादित करणे आणि व्यवस्थापित करणे.',
    'backoffice-write-products' => 'बॅक ऑफिसमध्ये उत्पादनांची निर्मिती, संपादन आणि व्यवस्थापन अधिकृत करा.',
    'backoffice-read-products' => 'बॅक ऑफिसमध्ये उत्पादनांची यादी आणि तपशीलवार उत्पादन माहिती पाहण्यासाठी प्रवेश अधिकृत करा.',
    'shop-read-reports' => 'माहिती आणि अहवाल वाचा.',
    'shop-socials' => 'स्टोअर सामाजिक नेटवर्क संपादित करा.',
    'shop-accounts' => 'स्टोअर-लिंक केलेली आर्थिक खाती संपादित करा आणि हटवा.',
    'shop-menus' => 'स्टोअर मेनू संपादित करा.',
    'shop-pages' => 'स्टोअर पृष्ठे संपादित करा.',
    'shop-warehouse' => 'स्टोअर वेअरहाऊस संपादित करा',
    'shop-permissions' => 'स्टोअर प्रवेश पहा आणि संपादित करा.',
    'shop-process-center' => 'प्राप्त ऑर्डर व्यवस्थापित करा.',
    'shop-profile' => 'स्टोअर प्रोफाइल व्यवस्थापित करा.',
    'shop-discount-code' => 'सवलत कोड व्यवस्थापित करा.',
    'shop-coupon' => 'कूपन व्यवस्थापित करा.',
    'shop-offer' => 'ऑफर व्यवस्थापित करा.',
    'shop-cashback' => 'कॅशबॅक व्यवस्थापित करा.',
    'shop-lottery' => 'लॉटरी व्यवस्थापित करा.',
    'shop-community' => 'समुदाय व्यवस्थापित करा.',
    'shop-customers' => 'ग्राहक व्यवस्थापित करा.',
    'shop-ribbon' => 'रिबन सदस्यता व्यवस्थापित करा.',
    'community-read' => 'Selldone समुदाय वाचा.',
    'community-write' => 'विकलेला समुदाय लिहा.',
    'profile-write' => 'वापरकर्ता प्रोफाइल माहिती लिहा.',
    'vendor-read' => 'विक्रेत्याच्या ऑर्डरच्या पूर्ततेच्या क्रियांमध्ये प्रवेश.',
    'vendor-write' => 'ऑर्डर, पेमेंट आणि विक्रेत्याची इतर माहिती बदला.',
    'connect-providers' => 'कनेक्ट प्रदाते जोडा, वाचा आणि लिहा.',
    'personal-identification' => 'वैयक्तिक माहिती, प्रवेश आणि खाते कॉन्फिगरेशन वाचा.',
    'accounts' => 'वॉलेटमध्ये प्रवेश, व्यवहार आणि टॉप-अप इतिहास वाचा.',
    'shop-add' => 'नवीन दुकान जोडा.',
    'shop-delete' => 'एक दुकान काढा.',
    'shop-ai-write' => 'वापरकर्त्यास AI कमांड कार्यान्वित करण्यास अनुमती देते.',
    'shop-ai-read' => 'कमांड कार्यान्वित केल्याशिवाय वापरकर्त्याला AI माहितीमध्ये प्रवेश करण्याची अनुमती देते.',
    'vendor-payment' => 'वापरकर्त्याला विक्रेत्यांसाठी पेमेंट रेकॉर्ड जोडण्याची किंवा स्ट्राइप कनेक्ट सारख्या त्यांच्या कनेक्ट केलेल्या खात्यांद्वारे निधी हस्तांतरित करण्याची अनुमती देते.',
    'company-read' => 'व्यवसाय प्रोफाइल माहिती वाचण्यास अनुमती देते.',
    'company-write' => 'व्यवसाय प्रोफाइल माहिती वाचण्यास आणि लिहिण्यास अनुमती देते.',
    'agency-read' => 'एजन्सीची माहिती वाचण्यास अनुमती देते.',
    'agency-write' => 'एजन्सीची माहिती वाचण्यास आणि लिहिण्यास अनुमती देते.',
    'note-read' => 'दुकानाच्या नोट्स वाचण्याची परवानगी देते.',
    'note-write' => 'दुकानाच्या नोट्स वाचण्यास आणि लिहिण्यास अनुमती देते.',
    'developer-read' => 'विकसक मालमत्ता वाचण्याची अनुमती देते.',
    'developer-write' => 'विकसक मालमत्ता वाचण्यास आणि लिहिण्यास अनुमती देते.',
    'tokens-read' => 'Oauth टोकन आणि क्लायंट वाचा.',
    'tokens-write' => 'Oauth टोकन आणि क्लायंट लिहा.',
];
