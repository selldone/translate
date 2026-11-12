<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone நிர்வாகி நோக்கம்.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'கட்டுப்படுத்தப்பட்ட முதலீட்டாளர் அணுகல்.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'பயனர் சுயவிவர விவரங்களைப் படிக்கவும்.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'தொலைபேசி எண்ணைப் படிக்கவும்.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'சேமித்த முகவரிகளைப் படித்து புதுப்பிக்கவும்.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'பயனர் சுயவிவரத்தைப் புதுப்பிக்கவும்.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ஆர்டர்களை வைக்கவும்.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ஆர்டர் வரலாற்றைக் காண்க.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'பரிசு அட்டைகளை அணுகவும்.',

    AuthServiceProvider::SCOPE_ARTICLES => 'கட்டுரைகளைத் திருத்தவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'அறிவிப்புகளை நிர்வகிக்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'கடை பட்டியலைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'கடை விவரங்களைத் திருத்தவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'புதிய கடையைச் சேர்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'கடையை நீக்கு.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'ஆதரவு டிக்கெட்டுகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'பரிசு அட்டைகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'பரிசு அட்டைகளைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'அடிக்கடி கேட்கப்படும் கேள்விகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'அடிக்கடி கேட்கப்படும் கேள்விகளைக் காண்க.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'வகைகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'வகைகளைக் காண்க.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'தயாரிப்புகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'தயாரிப்புகளைப் பார்க்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'அறிக்கைகளைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'நிதி கணக்குகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'நிதிக் கணக்குகளைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ஸ்டோர் பக்கங்களைத் திருத்தவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'கடை பக்கங்களைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'கிடங்கை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'கிடங்கைக் காண்க.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'பணியாளர் அணுகலை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'ஊழியர்களின் அணுகலைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ஆர்டர்களைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ஆர்டர்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'வணிக சுயவிவரத்தை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'வணிக சுயவிவரத்தைக் காண்க.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'தள்ளுபடி குறியீடுகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'தள்ளுபடி குறியீடுகளைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'கூப்பன்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'கூப்பன்களைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'சலுகைகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'சலுகைகளைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'கேஷ்பேக்குகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'கேஷ்பேக்குகளைப் பார்க்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'லாட்டரிகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'லாட்டரிகளைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'சமூகத்தை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'சமூகத்தைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'வாடிக்கையாளர்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'வாடிக்கையாளர்களைக் காண்க.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'சந்தாக்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'சந்தாக்களைப் பார்க்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'விற்பனையாளர் ஆர்டர்களைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'விற்பனையாளர் ஆர்டர்கள் மற்றும் கட்டணங்களை நிர்வகிக்கவும்.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'இணைப்பு வழங்குநர்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'இணைப்பு வழங்குநர்களைக் காண்க.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI கட்டளைகளை இயக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI தகவலைப் பார்க்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'விற்பனையாளர் கட்டணங்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'விற்பனையாளர் கொடுப்பனவுகளைப் பார்க்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'வணிக சுயவிவரத்தைக் காண்க.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'வணிக சுயவிவரத்தை நிர்வகிக்கவும்.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ஏஜென்சி தகவலைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ஏஜென்சி தகவலை நிர்வகிக்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'கடை குறிப்புகளைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'கடை குறிப்புகளை நிர்வகிக்கவும்.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'டெவலப்பர் சொத்துக்களைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'டெவலப்பர் சொத்துக்களை நிர்வகிக்கவும்.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'தனிப்பட்ட தகவல் மற்றும் கணக்கு அமைப்புகளை அணுகவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'பணப்பை மற்றும் பரிவர்த்தனைகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'பணப்பை பரிவர்த்தனைகளைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth டோக்கன்கள் மற்றும் வாடிக்கையாளர்களைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth டோக்கன்கள் மற்றும் வாடிக்கையாளர்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'பாதுகாப்பு அமைப்புகளை நிர்வகிக்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'துணை நிறுவனங்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'துணை நிறுவனங்களைக் காண்க.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'அச்சு வார்ப்புருக்களை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'அச்சு வார்ப்புருக்களைப் பார்க்கவும்.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'மதிப்புரைகளை நிர்வகிக்கவும்.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'விமர்சனங்களைப் பார்க்கவும்.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'பணமாக்குதல் தகவலைப் பார்க்கவும்.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'பணமாக்குதல் தகவலை நிர்வகிக்கவும்.',



    'profile' => 'பெயர், மின்னஞ்சல் முகவரி, படம் மற்றும் அங்கீகார நிலை உள்ளிட்ட சுயவிவரத் தகவலைப் படிக்கவும்.',
    'phone' => 'தொடர்பு எண் அணுகல்',
    'address' => 'சேமித்த முகவரி புத்தகத்திலிருந்து முகவரியைப் படித்து திருத்தவும்',
    'buy' => 'ஆர்டர் & ஷாப் ஆர்டர்.',
    'order-history' => 'ஆர்டர் வரலாற்றைப் படிக்கவும்.',
    'my-gift-cards' => 'எனது பரிசு அட்டைகளுக்கான அணுகல்.',
    'articles' => 'கட்டுரைகளைத் திருத்தவும்.',
    'notifications' => 'அறிவிப்புகளை அனுப்பவும் மற்றும் பெறவும்.',
    'read-shops' => 'ஸ்டோர் பட்டியலைப் படிக்கவும்.',
    'shop-edit' => 'ஸ்டோர் எடிட்டிங் அணுகல்.',
    'shop-contacts' => 'தொடர்பு படிவங்களைப் பெற்று திருத்தவும்.',
    'shop-gift-cards' => 'அட்டைகளை உருவாக்குதல், திருத்துதல் மற்றும் நிர்வகித்தல்.',
    'shop-faqs' => 'அடிக்கடி கேட்கப்படும் கேள்விகளை உருவாக்கவும், திருத்தவும் மற்றும் நிர்வகிக்கவும்.',
    'shop-categories' => 'வகைகளை உருவாக்குதல், திருத்துதல் மற்றும் நிர்வகித்தல்.',
    'backoffice-write-products' => 'பின் அலுவலகத்தில் தயாரிப்புகளை உருவாக்குதல், திருத்துதல் மற்றும் நிர்வகித்தல் ஆகியவற்றை அங்கீகரிக்கவும்.',
    'backoffice-read-products' => 'பின் அலுவலகத்தில் தயாரிப்புகள் பட்டியல் மற்றும் விரிவான தயாரிப்பு தகவலைப் பார்ப்பதற்கான அணுகலை அங்கீகரிக்கவும்.',
    'shop-read-reports' => 'தகவல் மற்றும் அறிக்கைகளைப் படிக்கவும்.',
    'shop-socials' => 'ஸ்டோர் சமூக வலைப்பின்னல்களைத் திருத்தவும்.',
    'shop-accounts' => 'ஸ்டோர்-இணைக்கப்பட்ட நிதிக் கணக்குகளைத் திருத்தி நீக்கவும்.',
    'shop-menus' => 'ஸ்டோர் மெனுக்களை திருத்து.',
    'shop-pages' => 'ஸ்டோர் பக்கங்களைத் திருத்தவும்.',
    'shop-warehouse' => 'ஸ்டோர் கிடங்கைத் திருத்து',
    'shop-permissions' => 'ஸ்டோர் அணுகலைப் பார்த்து திருத்தவும்.',
    'shop-process-center' => 'பெறப்பட்ட ஆர்டர்களை நிர்வகிக்கவும்.',
    'shop-profile' => 'ஸ்டோர் சுயவிவரங்களை நிர்வகிக்கவும்.',
    'shop-discount-code' => 'தள்ளுபடி குறியீடுகளை நிர்வகிக்கவும்.',
    'shop-coupon' => 'கூப்பன்களை நிர்வகிக்கவும்.',
    'shop-offer' => 'சலுகைகளை நிர்வகிக்கவும்.',
    'shop-cashback' => 'கேஷ்பேக்குகளை நிர்வகிக்கவும்.',
    'shop-lottery' => 'லாட்டரிகளை நிர்வகிக்கவும்.',
    'shop-community' => 'சமூகத்தை நிர்வகிக்கவும்.',
    'shop-customers' => 'வாடிக்கையாளர்களை நிர்வகிக்கவும்.',
    'shop-ribbon' => 'ரிப்பன் சந்தாக்களை நிர்வகிக்கவும்.',
    'community-read' => 'Selldone சமூகத்தைப் படியுங்கள்.',
    'community-write' => 'விற்கப்பட்ட சமூகத்தை எழுதுங்கள்.',
    'profile-write' => 'பயனர் சுயவிவரத் தகவலை எழுதவும்.',
    'vendor-read' => 'விற்பனையாளர் ஆர்டர்களை நிறைவேற்றும் செயல்களுக்கான அணுகல்.',
    'vendor-write' => 'ஆர்டர்கள், பணம் செலுத்துதல் மற்றும் விற்பனையாளரின் பிற தகவல்களை மாற்றவும்.',
    'connect-providers' => 'இணைப்பு வழங்குநர்களைச் சேர்க்கவும், படிக்கவும் மற்றும் எழுதவும்.',
    'personal-identification' => 'தனிப்பட்ட தகவல், அணுகல்கள் மற்றும் கணக்கு உள்ளமைவைப் படிக்கவும்.',
    'accounts' => 'பணப்பைகளுக்கான அணுகல், பரிவர்த்தனைகள் மற்றும் டாப்-அப் வரலாறுகளைப் படிக்கவும்.',
    'shop-add' => 'புதிய கடையைச் சேர்க்கவும்.',
    'shop-delete' => 'ஒரு கடையை அகற்று.',
    'shop-ai-write' => 'AI கட்டளைகளை இயக்க பயனரை அனுமதிக்கிறது.',
    'shop-ai-read' => 'கட்டளைகளை இயக்காமல் AI தகவலை அணுக பயனரை அனுமதிக்கிறது.',
    'vendor-payment' => 'விற்பனையாளர்களுக்கான கட்டணப் பதிவுகளைச் சேர்க்க அல்லது ஸ்ட்ரைப் கனெக்ட் போன்ற அவர்களது இணைக்கப்பட்ட கணக்குகள் வழியாகப் பணப் பரிமாற்றம் செய்ய பயனரை அனுமதிக்கிறது.',
    'company-read' => 'வணிக சுயவிவரத் தகவலைப் படிக்க அனுமதிக்கிறது.',
    'company-write' => 'வணிக சுயவிவரத் தகவலைப் படிக்கவும் எழுதவும் அனுமதிக்கிறது.',
    'agency-read' => 'ஏஜென்சி தகவலைப் படிக்க அனுமதிக்கிறது.',
    'agency-write' => 'ஏஜென்சி தகவலைப் படிக்கவும் எழுதவும் அனுமதிக்கிறது.',
    'note-read' => 'கடை குறிப்புகளைப் படிக்க அனுமதிக்கிறது.',
    'note-write' => 'கடைக் குறிப்புகளைப் படிக்கவும் எழுதவும் அனுமதிக்கிறது.',
    'developer-read' => 'டெவலப்பர்களின் சொத்துகளைப் படிக்க அனுமதிக்கிறது.',
    'developer-write' => 'டெவலப்பர்களின் சொத்துகளைப் படிக்கவும் எழுதவும் அனுமதிக்கிறது.',
    'tokens-read' => 'Oauth டோக்கன்கள் மற்றும் வாடிக்கையாளர்களைப் படிக்கவும்.',
    'tokens-write' => 'Oauth டோக்கன்கள் மற்றும் வாடிக்கையாளர்களை எழுதுங்கள்.',
];
