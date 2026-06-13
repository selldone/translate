<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone అడ్మినిస్ట్రేటర్ పరిధి.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'పెట్టుబడిదారుల యాక్సెస్ పరిమితం చేయబడింది.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'వినియోగదారు ప్రొఫైల్ వివరాలను చదవండి.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ఫోన్ నంబర్ చదవండి.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'సేవ్ చేసిన చిరునామాలను చదవండి మరియు నవీకరించండి.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'వినియోగదారు ప్రొఫైల్‌ను నవీకరించండి.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ఆర్డర్లు ఇవ్వండి.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ఆర్డర్ చరిత్రను వీక్షించండి.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'బహుమతి కార్డ్‌లను యాక్సెస్ చేయండి.',

    AuthServiceProvider::SCOPE_ARTICLES => 'కథనాలను సవరించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'నోటిఫికేషన్‌లను నిర్వహించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'షాప్ జాబితాను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'షాప్ వివరాలను సవరించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'కొత్త దుకాణాన్ని జోడించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'దుకాణాన్ని తొలగించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'మద్దతు టిక్కెట్లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'బహుమతి కార్డ్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'బహుమతి కార్డ్‌లను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'తరచుగా అడిగే ప్రశ్నలను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'తరచుగా అడిగే ప్రశ్నలను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'వర్గాలను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'వర్గాలను వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ఉత్పత్తులను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ఉత్పత్తులను వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'నివేదికలను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'ఆర్థిక ఖాతాలను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'ఆర్థిక ఖాతాలను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'స్టోర్ పేజీలను సవరించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'స్టోర్ పేజీలను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'గిడ్డంగిని నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'గిడ్డంగిని వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'సిబ్బంది యాక్సెస్ నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'సిబ్బంది యాక్సెస్ చూడండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ఆర్డర్‌లను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ఆర్డర్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'వ్యాపార ప్రొఫైల్‌ని నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'వ్యాపార ప్రొఫైల్‌ను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'డిస్కౌంట్ కోడ్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'డిస్కౌంట్ కోడ్‌లను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'కూపన్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'కూపన్‌లను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ఆఫర్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ఆఫర్‌లను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'క్యాష్‌బ్యాక్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'క్యాష్‌బ్యాక్‌లను వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'లాటరీలను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'లాటరీలను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'సంఘాన్ని నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'సంఘాన్ని వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'కస్టమర్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'కస్టమర్‌లను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'సభ్యత్వాలను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'సభ్యత్వాలను వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'విక్రేత ఆర్డర్‌లను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'విక్రేత ఆర్డర్‌లు మరియు చెల్లింపులను నిర్వహించండి.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'కనెక్ట్ ప్రొవైడర్లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'కనెక్ట్ ప్రొవైడర్లను వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI ఆదేశాలను అమలు చేయండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI సమాచారాన్ని వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'విక్రేత చెల్లింపులను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'విక్రేత చెల్లింపులను వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'వ్యాపార ప్రొఫైల్‌ను వీక్షించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'వ్యాపార ప్రొఫైల్‌ని నిర్వహించండి.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ఏజెన్సీ సమాచారాన్ని వీక్షించండి.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ఏజెన్సీ సమాచారాన్ని నిర్వహించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'షాప్ నోట్స్ చూడండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'దుకాణ గమనికలను నిర్వహించండి.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'డెవలపర్ ఆస్తులను వీక్షించండి.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'డెవలపర్ ఆస్తులను నిర్వహించండి.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'వ్యక్తిగత సమాచారం మరియు ఖాతా సెట్టింగ్‌లను యాక్సెస్ చేయండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'వాలెట్ మరియు లావాదేవీలను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'వాలెట్ లావాదేవీలను వీక్షించండి.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth టోకెన్‌లు మరియు క్లయింట్‌లను వీక్షించండి.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth టోకెన్‌లు మరియు క్లయింట్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'భద్రతా సెట్టింగ్‌లను నిర్వహించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'అనుబంధాలను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'అనుబంధాలను వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'ప్రింట్ టెంప్లేట్‌లను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'ప్రింట్ టెంప్లేట్‌లను వీక్షించండి.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'సమీక్షలను నిర్వహించండి.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'సమీక్షలను వీక్షించండి.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'డబ్బు ఆర్జన సమాచారాన్ని వీక్షించండి.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'మానిటైజేషన్ సమాచారాన్ని నిర్వహించండి.',



    'profile' => 'పేరు, ఇమెయిల్ చిరునామా, చిత్రం మరియు ప్రమాణీకరణ స్థితితో సహా ప్రొఫైల్ సమాచారాన్ని చదవండి.',
    'phone' => 'సంప్రదింపు నంబర్ యాక్సెస్',
    'address' => 'సేవ్ చేయబడిన చిరునామా పుస్తకం నుండి చిరునామాను చదవండి మరియు సవరించండి',
    'buy' => 'ఆర్డర్ & షాప్ ఆర్డర్.',
    'order-history' => 'ఆర్డర్ చరిత్రను చదవండి.',
    'my-gift-cards' => 'నా గిఫ్ట్ కార్డ్‌లకు యాక్సెస్.',
    'articles' => 'వ్యాసాలను సవరించండి.',
    'notifications' => 'నోటిఫికేషన్‌లను పంపండి మరియు స్వీకరించండి.',
    'read-shops' => 'స్టోర్ జాబితాను చదవండి.',
    'shop-edit' => 'స్టోర్ ఎడిటింగ్ యాక్సెస్.',
    'shop-contacts' => 'సంప్రదింపు ఫారమ్‌లను స్వీకరించండి మరియు సవరించండి.',
    'shop-gift-cards' => 'కార్డ్‌లను సృష్టించడం, సవరించడం మరియు నిర్వహించడం.',
    'shop-faqs' => 'తరచుగా అడిగే ప్రశ్నలను సృష్టించండి, సవరించండి మరియు నిర్వహించండి.',
    'shop-categories' => 'వర్గాలను సృష్టించడం, సవరించడం మరియు నిర్వహించడం.',
    'backoffice-write-products' => 'బ్యాక్ ఆఫీస్‌లో ఉత్పత్తుల సృష్టి, సవరణ మరియు నిర్వహణకు అధికారం ఇవ్వండి.',
    'backoffice-read-products' => 'బ్యాక్ ఆఫీస్‌లో ఉత్పత్తుల జాబితా మరియు వివరణాత్మక ఉత్పత్తి సమాచారాన్ని వీక్షించడానికి యాక్సెస్‌ను అధికారం చేయండి.',
    'shop-read-reports' => 'సమాచారం మరియు నివేదికలను చదవండి.',
    'shop-socials' => 'స్టోర్ సోషల్ నెట్‌వర్క్‌లను సవరించండి.',
    'shop-accounts' => 'స్టోర్-లింక్ చేయబడిన ఆర్థిక ఖాతాలను సవరించండి మరియు తొలగించండి.',
    'shop-menus' => 'స్టోర్ మెనులను సవరించండి.',
    'shop-pages' => 'స్టోర్ పేజీలను సవరించండి.',
    'shop-warehouse' => 'స్టోర్ వేర్‌హౌస్‌ని సవరించండి',
    'shop-permissions' => 'స్టోర్ యాక్సెస్‌ని వీక్షించండి మరియు సవరించండి.',
    'shop-process-center' => 'అందుకున్న ఆర్డర్‌లను నిర్వహించండి.',
    'shop-profile' => 'స్టోర్ ప్రొఫైల్‌లను నిర్వహించండి.',
    'shop-discount-code' => 'డిస్కౌంట్ కోడ్‌లను నిర్వహించండి.',
    'shop-coupon' => 'కూపన్‌లను నిర్వహించండి.',
    'shop-offer' => 'ఆఫర్‌లను నిర్వహించండి.',
    'shop-cashback' => 'క్యాష్‌బ్యాక్‌లను నిర్వహించండి.',
    'shop-lottery' => 'లాటరీలను నిర్వహించండి.',
    'shop-community' => 'సంఘాన్ని నిర్వహించండి.',
    'shop-customers' => 'కస్టమర్లను నిర్వహించండి.',
    'shop-ribbon' => 'రిబ్బన్ సభ్యత్వాలను నిర్వహించండి.',
    'community-read' => 'Selldone కమ్యూనిటీని చదవండి.',
    'community-write' => 'విక్రయించబడిన సంఘాన్ని వ్రాయండి.',
    'profile-write' => 'వినియోగదారు ప్రొఫైల్ సమాచారాన్ని వ్రాయండి.',
    'vendor-read' => 'విక్రేత ఆర్డర్‌ల నెరవేర్పు చర్యలకు యాక్సెస్.',
    'vendor-write' => 'ఆర్డర్లు, చెల్లింపు మరియు విక్రేత యొక్క ఇతర సమాచారాన్ని మార్చండి.',
    'connect-providers' => 'కనెక్ట్ ప్రొవైడర్‌లను జోడించండి, చదవండి మరియు వ్రాయండి.',
    'personal-identification' => 'వ్యక్తిగత సమాచారం, యాక్సెస్‌లు మరియు ఖాతా కాన్ఫిగరేషన్‌ను చదవండి.',
    'accounts' => 'వాలెట్‌లకు యాక్సెస్, లావాదేవీలు మరియు టాప్-అప్ చరిత్రలను చదవండి.',
    'shop-add' => 'కొత్త దుకాణాన్ని జోడించండి.',
    'shop-delete' => 'ఒక దుకాణాన్ని తీసివేయండి.',
    'shop-ai-write' => 'AI ఆదేశాలను అమలు చేయడానికి వినియోగదారుని అనుమతిస్తుంది.',
    'shop-ai-read' => 'ఆదేశాలను అమలు చేయకుండానే AI సమాచారాన్ని యాక్సెస్ చేయడానికి వినియోగదారుని అనుమతిస్తుంది.',
    'vendor-payment' => 'విక్రేతల కోసం చెల్లింపుల రికార్డులను జోడించడానికి లేదా స్ట్రైప్ కనెక్ట్ వంటి వారి కనెక్ట్ చేయబడిన ఖాతాల ద్వారా నిధులను బదిలీ చేయడానికి వినియోగదారుని అనుమతిస్తుంది.',
    'company-read' => 'వ్యాపార ప్రొఫైల్ సమాచారాన్ని చదవడానికి అనుమతిస్తుంది.',
    'company-write' => 'వ్యాపార ప్రొఫైల్ సమాచారాన్ని చదవడానికి మరియు వ్రాయడానికి అనుమతిస్తుంది.',
    'agency-read' => 'ఏజెన్సీ సమాచారాన్ని చదవడానికి అనుమతిస్తుంది.',
    'agency-write' => 'ఏజెన్సీ సమాచారాన్ని చదవడానికి మరియు వ్రాయడానికి అనుమతిస్తుంది.',
    'note-read' => 'షాప్ నోట్స్ చదవడానికి అనుమతిస్తుంది.',
    'note-write' => 'షాప్ నోట్స్ చదవడానికి మరియు వ్రాయడానికి అనుమతిస్తుంది.',
    'developer-read' => 'డెవలపర్ ఆస్తులను చదవడానికి అనుమతిస్తుంది.',
    'developer-write' => 'డెవలపర్ ఆస్తులను చదవడానికి మరియు వ్రాయడానికి అనుమతిస్తుంది.',
    'tokens-read' => 'Oauth టోకెన్‌లు మరియు క్లయింట్‌లను చదవండి.',
    'tokens-write' => 'Oauth టోకెన్‌లు మరియు క్లయింట్‌లను వ్రాయండి.',
];
