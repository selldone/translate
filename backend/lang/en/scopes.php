<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administrator scope.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Restricted investor access.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Read user profile details.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Read phone number.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Read and update saved addresses.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Update user profile.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Place orders.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'View order history.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Access gift cards.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Edit articles.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Manage notifications.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'View shop list.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Edit shop details.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Add new shop.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Delete shop.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Manage support tickets.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Manage gift cards.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'View gift cards.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Manage FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'View FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Manage categories.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'View categories.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Manage products.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'View products.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'View reports.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Manage financial accounts.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'View financial accounts.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Edit store pages.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'View store pages.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Manage warehouse.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'View warehouse.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Manage staff access.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'View staff access.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'View orders.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Manage orders.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Manage business profile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'View business profile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Manage discount codes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'View discount codes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Manage coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'View coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Manage offers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'View offers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Manage cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'View cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Manage lotteries.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'View lotteries.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Manage community.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'View community.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Manage customers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'View customers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Manage subscriptions.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'View subscriptions.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'View vendor orders.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Manage vendor orders and payments.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Manage connect providers.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'View connect providers.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Execute AI commands.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'View AI information.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Manage vendor payments.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'View vendor payments.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'View business profile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Manage business profile.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'View agency information.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Manage agency information.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'View shop notes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Manage shop notes.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'View developer assets.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Manage developer assets.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Access personal information and account settings.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Manage wallet and transactions.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'View wallet transactions.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'View OAuth tokens and clients.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Manage OAuth tokens and clients.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Manage security settings.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Manage affiliates.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'View affiliates.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Manage print templates.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'View print templates.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Manage reviews.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'View reviews.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'View monetization information.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Manage monetization information.',

];
