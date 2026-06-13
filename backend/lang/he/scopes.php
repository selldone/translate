<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone היקף מנהל.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'גישה מוגבלת למשקיעים.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'קרא את פרטי פרופיל המשתמש.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'קרא את מספר הטלפון.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'קרא ועדכן כתובות שמורות.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'עדכן את פרופיל המשתמש.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'בצע הזמנות.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'הצג היסטוריית הזמנות.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'גישה לכרטיסי מתנה.',

    AuthServiceProvider::SCOPE_ARTICLES => 'ערוך מאמרים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'נהל התראות.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'צפה ברשימת החנויות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ערוך את פרטי החנות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'הוסף חנות חדשה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'מחק את החנות.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'ניהול כרטיסי תמיכה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'ניהול כרטיסי מתנה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'צפה בכרטיסי מתנה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'נהל שאלות נפוצות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'הצג שאלות נפוצות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'נהל קטגוריות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'הצג קטגוריות.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ניהול מוצרים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'הצג מוצרים.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'הצג דוחות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'ניהול חשבונות פיננסיים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'הצג חשבונות פיננסיים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ערוך דפי חנות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'הצג דפי חנות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'ניהול מחסן.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'צפה במחסן.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'נהל את הגישה לצוות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'צפה בגישה לצוות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'צפה בהזמנות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ניהול הזמנות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ניהול פרופיל עסקי.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'צפה בפרופיל העסק.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ניהול קודי הנחה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'צפו בקודי הנחה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'נהל קופונים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'צפו בקופונים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'נהל הצעות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'צפה בהצעות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'ניהול החזר כספי.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'צפה בהחזרים כספיים.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ניהול הגרלות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'צפה בהגרלות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'ניהול קהילה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'הצג את הקהילה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ניהול לקוחות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'הצג לקוחות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'ניהול מנויים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'הצג מנויים.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'הצג הזמנות של ספקים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'ניהול הזמנות ספקים ותשלומים.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'נהל ספקי חיבור.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'הצג ספקי חיבור.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'בצע פקודות AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'הצג מידע בינה מלאכותית.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'ניהול תשלומי ספקים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'צפה בתשלומי ספקים.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'צפה בפרופיל העסק.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ניהול פרופיל עסקי.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'הצג מידע על הסוכנות.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'נהל מידע על הסוכנות.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'הצג הערות לחנות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'ניהול הערות בחנות.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'הצג נכסי מפתחים.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'ניהול נכסי מפתחים.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'גישה למידע אישי והגדרות חשבון.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ניהול ארנק ועסקאות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'הצג עסקאות בארנק.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'הצג אסימונים ולקוחות של OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'נהל OAuth אסימונים ולקוחות.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'נהל הגדרות אבטחה.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'ניהול שותפים.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'הצג שותפים.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'נהל תבניות הדפסה.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'הצג תבניות הדפסה.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'ניהול ביקורות.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'צפו בביקורות.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'הצג מידע על מונטיזציה.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'נהל מידע על מונטיזציה.',



    'profile' => 'קרא מידע פרופיל כולל שם, כתובת דוא\'ל, תמונה וסטטוס אימות.',
    'phone' => 'גישה למספר איש קשר',
    'address' => 'קרא וערוך כתובת מפנקס הכתובות השמור',
    'buy' => 'הזמנה והזמנה בחנות.',
    'order-history' => 'קרא את היסטוריית ההזמנות.',
    'my-gift-cards' => 'גישה לכרטיסי המתנה שלי.',
    'articles' => 'ערוך מאמרים.',
    'notifications' => 'שלח וקבל התראות.',
    'read-shops' => 'קרא את רשימת החנויות.',
    'shop-edit' => 'גישה לעריכה בחנות.',
    'shop-contacts' => 'קבלה ועריכה של טפסי יצירת קשר.',
    'shop-gift-cards' => 'יצירה, עריכה וניהול של כרטיסים.',
    'shop-faqs' => 'צור, ערוך ונהל שאלות נפוצות.',
    'shop-categories' => 'יצירה, עריכה וניהול קטגוריות.',
    'backoffice-write-products' => 'אישור יצירה, עריכה וניהול של מוצרים ב-Back Office.',
    'backoffice-read-products' => 'אשר גישה לצפייה ברשימת המוצרים ובמידע מפורט על המוצר ב-Back Office.',
    'shop-read-reports' => 'קרא מידע ודוחות.',
    'shop-socials' => 'ערוך רשתות חברתיות בחנות.',
    'shop-accounts' => 'ערוך ומחק חשבונות פיננסיים מקושרים לחנות.',
    'shop-menus' => 'ערוך תפריטי חנות.',
    'shop-pages' => 'ערוך דפי חנות.',
    'shop-warehouse' => 'ערוך את מחסן החנות',
    'shop-permissions' => 'הצג וערוך את הגישה לחנות.',
    'shop-process-center' => 'ניהול הזמנות שהתקבלו.',
    'shop-profile' => 'ניהול פרופילי חנות.',
    'shop-discount-code' => 'ניהול קודי הנחה.',
    'shop-coupon' => 'נהל קופונים.',
    'shop-offer' => 'נהל הצעות.',
    'shop-cashback' => 'ניהול החזר כספי.',
    'shop-lottery' => 'ניהול הגרלות.',
    'shop-community' => 'ניהול קהילה.',
    'shop-customers' => 'ניהול לקוחות.',
    'shop-ribbon' => 'ניהול מנויי רצועת הכלים.',
    'community-read' => 'קרא את קהילת Selldone.',
    'community-write' => 'כתוב קהילה שנמכרה.',
    'profile-write' => 'כתוב מידע על פרופיל משתמש.',
    'vendor-read' => 'גישה לפעולות מימוש של הזמנות ספקים.',
    'vendor-write' => 'שינוי הזמנות, תשלום ומידע אחר של הספק.',
    'connect-providers' => 'הוסף, קרא וכתוב ספקי חיבור.',
    'personal-identification' => 'קרא מידע אישי, גישה ותצורת חשבון.',
    'accounts' => 'גישה לארנקים, קריאת עסקאות והיסטוריית הטעינה.',
    'shop-add' => 'הוסף חנות חדשה.',
    'shop-delete' => 'הסר חנות.',
    'shop-ai-write' => 'מאפשר למשתמש לבצע פקודות AI.',
    'shop-ai-read' => 'מאפשר למשתמש לגשת למידע בינה מלאכותית מבלי לבצע פקודות.',
    'vendor-payment' => 'מאפשר למשתמש להוסיף רשומות תשלומים עבור ספקים או להעביר כספים דרך החשבונות המחוברים שלהם כמו Stripe Connect.',
    'company-read' => 'מאפשר לקרוא מידע על פרופיל עסקי.',
    'company-write' => 'מאפשר לקרוא ולכתוב מידע על פרופיל עסקי.',
    'agency-read' => 'מאפשר לקרוא מידע על הסוכנות.',
    'agency-write' => 'מאפשר לקרוא ולכתוב מידע על הסוכנות.',
    'note-read' => 'מאפשר לקרוא הערות בחנות.',
    'note-write' => 'מאפשר לקרוא ולכתוב הערות בחנות.',
    'developer-read' => 'מאפשר לקרוא נכסי מפתחים.',
    'developer-write' => 'מאפשר לקרוא ולכתוב נכסי מפתחים.',
    'tokens-read' => 'קרא אסימונים ולקוחות של Oauth.',
    'tokens-write' => 'כתוב אסימונים ולקוחות של Oauth.',
];
