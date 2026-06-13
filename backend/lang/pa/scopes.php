<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone ਪ੍ਰਸ਼ਾਸਕ ਦਾ ਘੇਰਾ।',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ਨਿਵੇਸ਼ਕ ਪਹੁੰਚ ਪ੍ਰਤੀਬੰਧਿਤ.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'ਉਪਭੋਗਤਾ ਪ੍ਰੋਫਾਈਲ ਵੇਰਵੇ ਪੜ੍ਹੋ।',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ਫ਼ੋਨ ਨੰਬਰ ਪੜ੍ਹੋ।',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'ਸੁਰੱਖਿਅਤ ਕੀਤੇ ਪਤੇ ਪੜ੍ਹੋ ਅਤੇ ਅੱਪਡੇਟ ਕਰੋ।',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ਉਪਭੋਗਤਾ ਪ੍ਰੋਫਾਈਲ ਨੂੰ ਅੱਪਡੇਟ ਕਰੋ।',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ਆਰਡਰ ਦਿਓ।',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ਆਰਡਰ ਇਤਿਹਾਸ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'ਤੋਹਫ਼ੇ ਕਾਰਡਾਂ ਤੱਕ ਪਹੁੰਚ ਕਰੋ।',

    AuthServiceProvider::SCOPE_ARTICLES => 'ਲੇਖਾਂ ਦਾ ਸੰਪਾਦਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'ਸੂਚਨਾਵਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'ਦੁਕਾਨ ਦੀ ਸੂਚੀ ਵੇਖੋ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ਦੁਕਾਨ ਦੇ ਵੇਰਵਿਆਂ ਦਾ ਸੰਪਾਦਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'ਨਵੀਂ ਦੁਕਾਨ ਸ਼ਾਮਲ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ਦੁਕਾਨ ਨੂੰ ਮਿਟਾਓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'ਸਹਾਇਤਾ ਟਿਕਟਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'ਤੋਹਫ਼ੇ ਕਾਰਡਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'ਤੋਹਫ਼ੇ ਕਾਰਡ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'ਅਕਸਰ ਪੁੱਛੇ ਜਾਂਦੇ ਸਵਾਲਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'ਅਕਸਰ ਪੁੱਛੇ ਜਾਂਦੇ ਸਵਾਲ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'ਸ਼੍ਰੇਣੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'ਸ਼੍ਰੇਣੀਆਂ ਦੇਖੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ਉਤਪਾਦਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ਉਤਪਾਦ ਵੇਖੋ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'ਰਿਪੋਰਟਾਂ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'ਵਿੱਤੀ ਖਾਤਿਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'ਵਿੱਤੀ ਖਾਤੇ ਵੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ਸਟੋਰ ਪੰਨਿਆਂ ਦਾ ਸੰਪਾਦਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'ਸਟੋਰ ਪੰਨੇ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'ਗੋਦਾਮ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ਗੋਦਾਮ ਵੇਖੋ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'ਸਟਾਫ ਦੀ ਪਹੁੰਚ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'ਸਟਾਫ ਦੀ ਪਹੁੰਚ ਵੇਖੋ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ਆਰਡਰ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ਆਰਡਰ ਪ੍ਰਬੰਧਿਤ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ਕਾਰੋਬਾਰੀ ਪ੍ਰੋਫਾਈਲ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ਕਾਰੋਬਾਰੀ ਪ੍ਰੋਫਾਈਲ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ਛੂਟ ਕੋਡ ਪ੍ਰਬੰਧਿਤ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ਛੂਟ ਕੋਡ ਵੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'ਕੂਪਨ ਪ੍ਰਬੰਧਿਤ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'ਕੂਪਨ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ਪੇਸ਼ਕਸ਼ਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ਪੇਸ਼ਕਸ਼ਾਂ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'ਕੈਸ਼ਬੈਕ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'ਕੈਸ਼ਬੈਕ ਦੇਖੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ਲਾਟਰੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ਲਾਟਰੀਆਂ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'ਭਾਈਚਾਰੇ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'ਭਾਈਚਾਰਾ ਵੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ਗਾਹਕਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ਗਾਹਕ ਵੇਖੋ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'ਗਾਹਕੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'ਸਬਸਕ੍ਰਿਪਸ਼ਨ ਦੇਖੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'ਵਿਕਰੇਤਾ ਦੇ ਆਦੇਸ਼ ਵੇਖੋ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'ਵਿਕਰੇਤਾ ਦੇ ਆਦੇਸ਼ਾਂ ਅਤੇ ਭੁਗਤਾਨਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'ਕਨੈਕਟ ਪ੍ਰਦਾਤਾਵਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'ਕਨੈਕਟ ਪ੍ਰਦਾਤਾ ਦੇਖੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI ਕਮਾਂਡਾਂ ਚਲਾਓ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI ਜਾਣਕਾਰੀ ਵੇਖੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'ਵਿਕਰੇਤਾ ਭੁਗਤਾਨਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'ਵਿਕਰੇਤਾ ਭੁਗਤਾਨ ਵੇਖੋ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ਕਾਰੋਬਾਰੀ ਪ੍ਰੋਫਾਈਲ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ਕਾਰੋਬਾਰੀ ਪ੍ਰੋਫਾਈਲ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ਏਜੰਸੀ ਦੀ ਜਾਣਕਾਰੀ ਵੇਖੋ।',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ਏਜੰਸੀ ਦੀ ਜਾਣਕਾਰੀ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'ਦੁਕਾਨ ਦੇ ਨੋਟ ਵੇਖੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'ਦੁਕਾਨ ਦੇ ਨੋਟਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'ਡਿਵੈਲਪਰ ਸੰਪਤੀਆਂ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'ਵਿਕਾਸਕਾਰ ਸੰਪਤੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'ਨਿੱਜੀ ਜਾਣਕਾਰੀ ਅਤੇ ਖਾਤਾ ਸੈਟਿੰਗਾਂ ਤੱਕ ਪਹੁੰਚ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ਵਾਲਿਟ ਅਤੇ ਲੈਣ-ਦੇਣ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ਵਾਲਿਟ ਲੈਣ-ਦੇਣ ਦੇਖੋ।',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth ਟੋਕਨ ਅਤੇ ਕਲਾਇੰਟਸ ਵੇਖੋ।',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth ਟੋਕਨਾਂ ਅਤੇ ਗਾਹਕਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'ਸੁਰੱਖਿਆ ਸੈਟਿੰਗਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'ਸਹਿਯੋਗੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ਸਹਿਯੋਗੀ ਵੇਖੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'ਪ੍ਰਿੰਟ ਟੈਂਪਲੇਟਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'ਪ੍ਰਿੰਟ ਟੈਂਪਲੇਟ ਦੇਖੋ।',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'ਸਮੀਖਿਆਵਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'ਸਮੀਖਿਆਵਾਂ ਦੇਖੋ।',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'ਮੁਦਰੀਕਰਨ ਜਾਣਕਾਰੀ ਵੇਖੋ।',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'ਮੁਦਰੀਕਰਨ ਜਾਣਕਾਰੀ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',



    'profile' => 'ਨਾਮ, ਈਮੇਲ ਪਤਾ, ਚਿੱਤਰ ਅਤੇ ਪ੍ਰਮਾਣਿਕਤਾ ਸਥਿਤੀ ਸਮੇਤ ਪ੍ਰੋਫਾਈਲ ਜਾਣਕਾਰੀ ਪੜ੍ਹੋ।',
    'phone' => 'ਸੰਪਰਕ ਨੰਬਰ ਪਹੁੰਚ',
    'address' => 'ਸੁਰੱਖਿਅਤ ਐਡਰੈੱਸ ਬੁੱਕ ਤੋਂ ਪਤਾ ਪੜ੍ਹੋ ਅਤੇ ਸੰਪਾਦਿਤ ਕਰੋ',
    'buy' => 'ਆਰਡਰ ਅਤੇ ਸ਼ਾਪ ਆਰਡਰ।',
    'order-history' => 'ਆਰਡਰ ਇਤਿਹਾਸ ਪੜ੍ਹੋ।',
    'my-gift-cards' => 'ਮੇਰੇ ਗਿਫਟ ਕਾਰਡਾਂ ਤੱਕ ਪਹੁੰਚ।',
    'articles' => 'ਲੇਖ ਸੰਪਾਦਿਤ ਕਰੋ।',
    'notifications' => 'ਸੂਚਨਾਵਾਂ ਭੇਜੋ ਅਤੇ ਪ੍ਰਾਪਤ ਕਰੋ।',
    'read-shops' => 'ਸਟੋਰ ਸੂਚੀ ਪੜ੍ਹੋ।',
    'shop-edit' => 'ਸਟੋਰ ਸੰਪਾਦਨ ਪਹੁੰਚ.',
    'shop-contacts' => 'ਸੰਪਰਕ ਫਾਰਮ ਪ੍ਰਾਪਤ ਕਰੋ ਅਤੇ ਸੰਪਾਦਿਤ ਕਰੋ।',
    'shop-gift-cards' => 'ਕਾਰਡ ਬਣਾਉਣਾ, ਸੰਪਾਦਿਤ ਕਰਨਾ ਅਤੇ ਪ੍ਰਬੰਧਨ ਕਰਨਾ।',
    'shop-faqs' => 'ਅਕਸਰ ਪੁੱਛੇ ਜਾਂਦੇ ਸਵਾਲ ਬਣਾਓ, ਸੰਪਾਦਿਤ ਕਰੋ ਅਤੇ ਪ੍ਰਬੰਧਿਤ ਕਰੋ।',
    'shop-categories' => 'ਸ਼੍ਰੇਣੀਆਂ ਬਣਾਉਣਾ, ਸੰਪਾਦਨ ਕਰਨਾ ਅਤੇ ਪ੍ਰਬੰਧਨ ਕਰਨਾ।',
    'backoffice-write-products' => 'ਬੈਕ ਆਫਿਸ ਵਿੱਚ ਉਤਪਾਦਾਂ ਦੀ ਰਚਨਾ, ਸੰਪਾਦਨ ਅਤੇ ਪ੍ਰਬੰਧਨ ਨੂੰ ਅਧਿਕਾਰਤ ਕਰੋ।',
    'backoffice-read-products' => 'ਬੈਕ ਆਫਿਸ ਵਿੱਚ ਉਤਪਾਦਾਂ ਦੀ ਸੂਚੀ ਅਤੇ ਵਿਸਤ੍ਰਿਤ ਉਤਪਾਦ ਜਾਣਕਾਰੀ ਦੇਖਣ ਲਈ ਪਹੁੰਚ ਦਾ ਅਧਿਕਾਰ ਦਿਓ।',
    'shop-read-reports' => 'ਜਾਣਕਾਰੀ ਅਤੇ ਰਿਪੋਰਟਾਂ ਪੜ੍ਹੋ।',
    'shop-socials' => 'ਸਟੋਰ ਸੋਸ਼ਲ ਨੈਟਵਰਕਸ ਨੂੰ ਸੰਪਾਦਿਤ ਕਰੋ।',
    'shop-accounts' => 'ਸਟੋਰ ਨਾਲ ਜੁੜੇ ਵਿੱਤੀ ਖਾਤਿਆਂ ਨੂੰ ਸੰਪਾਦਿਤ ਕਰੋ ਅਤੇ ਮਿਟਾਓ।',
    'shop-menus' => 'ਸਟੋਰ ਮੀਨੂ ਦਾ ਸੰਪਾਦਨ ਕਰੋ।',
    'shop-pages' => 'ਸਟੋਰ ਪੰਨਿਆਂ ਦਾ ਸੰਪਾਦਨ ਕਰੋ।',
    'shop-warehouse' => 'ਸਟੋਰ ਵੇਅਰਹਾਊਸ ਦਾ ਸੰਪਾਦਨ ਕਰੋ',
    'shop-permissions' => 'ਸਟੋਰ ਪਹੁੰਚ ਵੇਖੋ ਅਤੇ ਸੰਪਾਦਿਤ ਕਰੋ।',
    'shop-process-center' => 'ਪ੍ਰਾਪਤ ਹੋਏ ਆਦੇਸ਼ਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    'shop-profile' => 'ਸਟੋਰ ਪ੍ਰੋਫਾਈਲਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    'shop-discount-code' => 'ਛੂਟ ਕੋਡ ਪ੍ਰਬੰਧਿਤ ਕਰੋ।',
    'shop-coupon' => 'ਕੂਪਨ ਪ੍ਰਬੰਧਿਤ ਕਰੋ।',
    'shop-offer' => 'ਪੇਸ਼ਕਸ਼ਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    'shop-cashback' => 'ਕੈਸ਼ਬੈਕ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    'shop-lottery' => 'ਲਾਟਰੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    'shop-community' => 'ਭਾਈਚਾਰੇ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    'shop-customers' => 'ਗਾਹਕਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    'shop-ribbon' => 'ਰਿਬਨ ਗਾਹਕੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ।',
    'community-read' => 'Selldone ਭਾਈਚਾਰੇ ਨੂੰ ਪੜ੍ਹੋ.',
    'community-write' => 'ਵਿਕਾਊ ਭਾਈਚਾਰਾ ਲਿਖੋ।',
    'profile-write' => 'ਉਪਭੋਗਤਾ ਪ੍ਰੋਫਾਈਲ ਜਾਣਕਾਰੀ ਲਿਖੋ।',
    'vendor-read' => 'ਵਿਕਰੇਤਾ ਦੇ ਆਦੇਸ਼ਾਂ ਦੀ ਪੂਰਤੀ ਦੀਆਂ ਕਾਰਵਾਈਆਂ ਤੱਕ ਪਹੁੰਚ।',
    'vendor-write' => 'ਵਿਕਰੇਤਾ ਦੇ ਆਰਡਰ, ਭੁਗਤਾਨ ਅਤੇ ਹੋਰ ਜਾਣਕਾਰੀ ਬਦਲੋ।',
    'connect-providers' => 'ਕਨੈਕਟ ਪ੍ਰਦਾਤਾ ਸ਼ਾਮਲ ਕਰੋ, ਪੜ੍ਹੋ ਅਤੇ ਲਿਖੋ।',
    'personal-identification' => 'ਨਿੱਜੀ ਜਾਣਕਾਰੀ, ਪਹੁੰਚ ਅਤੇ ਖਾਤਾ ਸੰਰਚਨਾ ਪੜ੍ਹੋ।',
    'accounts' => 'ਵਾਲਿਟ ਤੱਕ ਪਹੁੰਚ, ਟ੍ਰਾਂਜੈਕਸ਼ਨਾਂ ਅਤੇ ਟਾਪ-ਅੱਪ ਇਤਿਹਾਸ ਪੜ੍ਹੋ।',
    'shop-add' => 'ਨਵੀਂ ਦੁਕਾਨ ਸ਼ਾਮਲ ਕਰੋ।',
    'shop-delete' => 'ਇੱਕ ਦੁਕਾਨ ਨੂੰ ਹਟਾਓ.',
    'shop-ai-write' => 'ਉਪਭੋਗਤਾ ਨੂੰ AI ਕਮਾਂਡਾਂ ਚਲਾਉਣ ਦੀ ਆਗਿਆ ਦਿੰਦਾ ਹੈ।',
    'shop-ai-read' => 'ਉਪਭੋਗਤਾ ਨੂੰ ਕਮਾਂਡਾਂ ਨੂੰ ਲਾਗੂ ਕੀਤੇ ਬਿਨਾਂ AI ਜਾਣਕਾਰੀ ਤੱਕ ਪਹੁੰਚ ਕਰਨ ਦੀ ਆਗਿਆ ਦਿੰਦਾ ਹੈ।',
    'vendor-payment' => 'ਉਪਭੋਗਤਾ ਨੂੰ ਵਿਕਰੇਤਾਵਾਂ ਲਈ ਭੁਗਤਾਨ ਰਿਕਾਰਡ ਜੋੜਨ ਜਾਂ ਉਹਨਾਂ ਦੇ ਕਨੈਕਟ ਕੀਤੇ ਖਾਤਿਆਂ ਜਿਵੇਂ ਕਿ ਸਟ੍ਰਾਈਪ ਕਨੈਕਟ ਦੁਆਰਾ ਫੰਡ ਟ੍ਰਾਂਸਫਰ ਕਰਨ ਦੀ ਆਗਿਆ ਦਿੰਦਾ ਹੈ।',
    'company-read' => 'ਕਾਰੋਬਾਰੀ ਪ੍ਰੋਫਾਈਲ ਜਾਣਕਾਰੀ ਨੂੰ ਪੜ੍ਹਨ ਦੀ ਇਜਾਜ਼ਤ ਦਿੰਦਾ ਹੈ।',
    'company-write' => 'ਕਾਰੋਬਾਰੀ ਪ੍ਰੋਫਾਈਲ ਜਾਣਕਾਰੀ ਨੂੰ ਪੜ੍ਹਨ ਅਤੇ ਲਿਖਣ ਦੀ ਆਗਿਆ ਦਿੰਦਾ ਹੈ।',
    'agency-read' => 'ਏਜੰਸੀ ਦੀ ਜਾਣਕਾਰੀ ਨੂੰ ਪੜ੍ਹਨ ਦੀ ਇਜਾਜ਼ਤ ਦਿੰਦਾ ਹੈ।',
    'agency-write' => 'ਏਜੰਸੀ ਦੀ ਜਾਣਕਾਰੀ ਨੂੰ ਪੜ੍ਹਨ ਅਤੇ ਲਿਖਣ ਦੀ ਆਗਿਆ ਦਿੰਦਾ ਹੈ।',
    'note-read' => 'ਦੁਕਾਨ ਦੇ ਨੋਟ ਪੜ੍ਹਨ ਦੀ ਇਜਾਜ਼ਤ ਦਿੰਦਾ ਹੈ.',
    'note-write' => 'ਦੁਕਾਨ ਦੇ ਨੋਟ ਪੜ੍ਹਨ ਅਤੇ ਲਿਖਣ ਦੀ ਆਗਿਆ ਦਿੰਦਾ ਹੈ.',
    'developer-read' => 'ਡਿਵੈਲਪਰ ਸੰਪਤੀਆਂ ਨੂੰ ਪੜ੍ਹਨ ਦੀ ਇਜਾਜ਼ਤ ਦਿੰਦਾ ਹੈ।',
    'developer-write' => 'ਡਿਵੈਲਪਰ ਸੰਪਤੀਆਂ ਨੂੰ ਪੜ੍ਹਨ ਅਤੇ ਲਿਖਣ ਦੀ ਆਗਿਆ ਦਿੰਦਾ ਹੈ।',
    'tokens-read' => 'Oauth ਟੋਕਨ ਅਤੇ ਗਾਹਕ ਪੜ੍ਹੋ।',
    'tokens-write' => 'Oauth ਟੋਕਨ ਅਤੇ ਕਲਾਇੰਟਸ ਲਿਖੋ।',
];
