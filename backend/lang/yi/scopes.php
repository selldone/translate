<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone אַדמיניסטראַטאָר פאַרנעם.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ריסטריקטיד ינוועסטער צוטריט.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'לייענען באַניצער פּראָפיל דעטאַילס.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'לייענען טעלעפאָן נומער.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'לייענען און דערהייַנטיקן געראטעוועט אַדרעסעס.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'דערהייַנטיקן באַניצער פּראָפיל.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'שטעלן אָרדערס.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'זען סדר געשיכטע.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'אַקסעס טאַלאַנט קאַרדס.',

    AuthServiceProvider::SCOPE_ARTICLES => 'רעדאַגירן אַרטיקלען.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'פירן נאָוטאַפאַקיישאַנז.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'זען קראָם רשימה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'רעדאַגירן קראָם פרטים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'לייג נייַ קראָם.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ויסמעקן קראָם.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'פירן שטיצן טיקיץ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'פירן טאַלאַנט קאַרדס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'זען טאַלאַנט קאַרדס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'פירן FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'זען FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'פירן קאַטעגאָריעס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'View קאַטעגאָריעס.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'פירן פּראָדוקטן.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'זען פּראָדוקטן.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'קוק ריפּאָרץ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'פירן פינאַנציעל אַקאַונץ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'זען פינאַנציעל אַקאַונץ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'רעדאַגירן קראָם בלעטער.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'זען קראָם בלעטער.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'פירן ווערכאַוס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'View ווערכאַוס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'פירן שטעקן צוטריט.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'View שטעקן אַקסעס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'זען אָרדערס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'פירן אָרדערס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'פירן געשעפט פּראָפיל.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'זען געשעפט פּראָפיל.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'פירן אַראָפּרעכענען קאָודז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'זען אַראָפּרעכענען קאָודז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'פירן קופּאָנז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'זען קופּאָנז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'פירן אָפּציעס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'זען אָפּציעס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'פירן קאַשבאַקקס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'זען קאַשבאַקקס.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'פירן לאַטעריז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'זען לאַטעריז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'פירן קהל.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'זען קהל.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'פירן קאַסטאַמערז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'קוק קאַסטאַמערז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'פירן סאַבסקריפּשאַנז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'זען סאַבסקריפּשאַנז.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'זען פאַרקויפער אָרדערס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'פירן פאַרקויפער אָרדערס און פּיימאַנץ.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'פירן פאַרבינדן פּראַוויידערז.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'זען פאַרבינדן פּראַוויידערז.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'ויספירן אַי קאַמאַנדז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'זען אַי אינפֿאָרמאַציע.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'פירן פאַרקויפער פּיימאַנץ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'View פאַרקויפער פּיימאַנץ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'זען געשעפט פּראָפיל.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'פירן געשעפט פּראָפיל.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'View אַגענטור אינפֿאָרמאַציע.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'פירן אַגענטור אינפֿאָרמאַציע.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'זען קראָם הערות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'פירן קראָם הערות.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'View דעוועלאָפּער אַסעץ.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'פירן דעוועלאָפּער אַסעץ.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'אַקסעס פערזענלעכע אינפֿאָרמאַציע און חשבון סעטטינגס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'פירן בייַטל און טראַנזאַקשאַנז.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'קוק בייַטל טראַנזאַקשאַנז.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'זען OAuth טאָקענס און קלייאַנץ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'פירן OAuth טאָקענס און קלייאַנץ.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'פירן זיכערהייט סעטטינגס.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'פירן אַפיליאַץ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'View אַפיליאַץ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'פירן דרוק טעמפּלאַטעס.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'View דרוק טעמפּלאַטעס.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'פירן באריכטן.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'זען באריכטן.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'זען מאָנעטיזאַטיאָן אינפֿאָרמאַציע.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'פירן מאָנעטיזאַטיאָן אינפֿאָרמאַציע.',



    'profile' => 'לייענען פּראָפיל אינפֿאָרמאַציע אַרייַנגערעכנט נאָמען, E- בריוו אַדרעס, בילד און אָטענטאַקיישאַן סטאַטוס.',
    'phone' => 'קאָנטאַקט נומער אַקסעס',
    'address' => 'לייענען און רעדאַגירן אַדרעס פון געראטעוועט אַדרעס בוך',
    'buy' => 'סדר & קראָם סדר.',
    'order-history' => 'לייענען סדר געשיכטע.',
    'my-gift-cards' => 'אַקסעס צו מיין גיפטקאַרדס.',
    'articles' => 'רעדאַגירן אַרטיקלען.',
    'notifications' => 'שיקן און באַקומען נאָוטאַפאַקיישאַנז.',
    'read-shops' => 'לייענען סטאָר רשימה.',
    'shop-edit' => 'סטאָר עדיטינג אַקסעס.',
    'shop-contacts' => 'באַקומען און רעדאַגירן קאָנטאַקט פארמען.',
    'shop-gift-cards' => 'שאַפֿן, עדיטינג און אָנפירונג קאַרדס.',
    'shop-faqs' => 'שאַפֿן, רעדאַגירן און פירן אָפט געשטעלטע פֿראגן.',
    'shop-categories' => 'שאפן, עדיטינג און אָנפירונג קאַטעגאָריעס.',
    'backoffice-write-products' => 'דערלויבט די שאַפונג, עדיטינג און פאַרוואַלטונג פון פּראָדוקטן אין די צוריק אָפיס.',
    'backoffice-read-products' => 'דערלויבן אַקסעס צו זען די פּראָדוקטן רשימה און דיטיילד פּראָדוקט אינפֿאָרמאַציע אין די צוריק אָפיס.',
    'shop-read-reports' => 'לייענען אינפֿאָרמאַציע און ריפּאָרץ.',
    'shop-socials' => 'רעדאַגירן קראָם געזעלשאַפטלעך נעטוואָרקס.',
    'shop-accounts' => 'רעדאַגירן און ויסמעקן קראָם-לינגקט פינאַנציעל אַקאַונץ.',
    'shop-menus' => 'רעדאַגירן קראָם מעניוז.',
    'shop-pages' => 'רעדאַגירן קראָם בלעטער.',
    'shop-warehouse' => 'רעדאַגירן סטאָר וואַרעהאָוסע',
    'shop-permissions' => 'קוק און רעדאַגירן קראָם אַקסעס.',
    'shop-process-center' => 'פירן באקומען אָרדערס.',
    'shop-profile' => 'פירן קראָם פּראָופיילז.',
    'shop-discount-code' => 'פירן אַראָפּרעכענען קאָודז.',
    'shop-coupon' => 'פירן קופּאָנז.',
    'shop-offer' => 'פירן אָפּציעס.',
    'shop-cashback' => 'פירן קאַשבאַקקס.',
    'shop-lottery' => 'פירן לאַטעריז.',
    'shop-community' => 'פירן קהל.',
    'shop-customers' => 'פירן קאַסטאַמערז.',
    'shop-ribbon' => 'פירן בענד סאַבסקריפּשאַנז.',
    'community-read' => 'לייענען סעללדאָנע קהל.',
    'community-write' => 'שרייב סעללדאָן קהל.',
    'profile-write' => 'שרייב באַניצער פּראָפיל אינפֿאָרמאַציע.',
    'vendor-read' => 'אַקסעס צו מקיים אַקשאַנז פון פאַרקויפער אָרדערס.',
    'vendor-write' => 'טוישן אָרדערס, צאָלונג און אנדערע אינפֿאָרמאַציע פון די פאַרקויפער.',
    'connect-providers' => 'לייג, לייענען און שרייַבן קאָננעקט פּראַוויידערז.',
    'personal-identification' => 'לייענען פערזענלעכע אינפֿאָרמאַציע, אַקסעס און חשבון קאַנפיגיעריישאַן.',
    'accounts' => 'אַקסעס צו וואָלאַץ, לייענען טראַנזאַקשאַנז און שפּיץ-אַרויף היסטאָריעס.',
    'shop-add' => 'לייג נייַ קראָם.',
    'shop-delete' => 'אַראָפּנעמען אַ קראָם.',
    'shop-ai-write' => 'אַלאַוז דער באַניצער צו ויספירן אַי קאַמאַנדז.',
    'shop-ai-read' => 'אַלאַוז דער באַניצער צו אַקסעס אַי אינפֿאָרמאַציע אָן עקסאַקיוטינג קאַמאַנדז.',
    'vendor-payment' => 'אַלאַוז דער באַניצער צו לייגן פּיימאַנץ רעקאָרדס פֿאַר ווענדאָרס אָדער אַריבערפירן געלט דורך זייער פארבונדן אַקאַונץ ווי Stripe Connect.',
    'company-read' => 'אַלאַוז צו לייענען געשעפט פּראָפיל אינפֿאָרמאַציע.',
    'company-write' => 'אַלאַוז צו לייענען און שרייַבן געשעפט פּראָפיל אינפֿאָרמאַציע.',
    'agency-read' => 'אַלאַוז צו לייענען אַגענטור אינפֿאָרמאַציע.',
    'agency-write' => 'אַלאַוז צו לייענען און שרייַבן אַגענטור אינפֿאָרמאַציע.',
    'note-read' => 'אַלאַוז צו לייענען קראָם הערות.',
    'note-write' => 'אַלאַוז צו לייענען און שרייַבן קראָם הערות.',
    'developer-read' => 'אַלאַוז צו לייענען דעוועלאָפּערס אַסעץ.',
    'developer-write' => 'אַלאַוז צו לייענען און שרייַבן אַסעץ פֿאַר דעוועלאָפּערס.',
    'tokens-read' => 'לייענען Oauth טאָקענס און קלייאַנץ.',
    'tokens-write' => 'שרייב אָאַוט טאָקענס און קלייאַנץ.',
];
