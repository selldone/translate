<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone ನಿರ್ವಾಹಕರ ವ್ಯಾಪ್ತಿ.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ನಿರ್ಬಂಧಿತ ಹೂಡಿಕೆದಾರರ ಪ್ರವೇಶ.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'ಬಳಕೆದಾರರ ಪ್ರೊಫೈಲ್ ವಿವರಗಳನ್ನು ಓದಿ.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ಫೋನ್ ಸಂಖ್ಯೆಯನ್ನು ಓದಿ.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'ಉಳಿಸಿದ ವಿಳಾಸಗಳನ್ನು ಓದಿ ಮತ್ತು ನವೀಕರಿಸಿ.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ಬಳಕೆದಾರರ ಪ್ರೊಫೈಲ್ ಅನ್ನು ನವೀಕರಿಸಿ.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ಆದೇಶಗಳನ್ನು ಇರಿಸಿ.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ಆರ್ಡರ್ ಇತಿಹಾಸವನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'ಉಡುಗೊರೆ ಕಾರ್ಡ್‌ಗಳನ್ನು ಪ್ರವೇಶಿಸಿ.',

    AuthServiceProvider::SCOPE_ARTICLES => 'ಲೇಖನಗಳನ್ನು ಸಂಪಾದಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'ಅಧಿಸೂಚನೆಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'ಅಂಗಡಿ ಪಟ್ಟಿಯನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ಅಂಗಡಿ ವಿವರಗಳನ್ನು ಸಂಪಾದಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'ಹೊಸ ಅಂಗಡಿಯನ್ನು ಸೇರಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ಅಂಗಡಿಯನ್ನು ಅಳಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'ಬೆಂಬಲ ಟಿಕೆಟ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'ಉಡುಗೊರೆ ಕಾರ್ಡ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'ಉಡುಗೊರೆ ಕಾರ್ಡ್‌ಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQ ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQ ಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'ವರ್ಗಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'ವರ್ಗಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ಉತ್ಪನ್ನಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ಉತ್ಪನ್ನಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'ವರದಿಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'ಹಣಕಾಸು ಖಾತೆಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'ಹಣಕಾಸು ಖಾತೆಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ಅಂಗಡಿ ಪುಟಗಳನ್ನು ಸಂಪಾದಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'ಅಂಗಡಿ ಪುಟಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'ಗೋದಾಮನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ಗೋದಾಮು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'ಸಿಬ್ಬಂದಿ ಪ್ರವೇಶವನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'ಸಿಬ್ಬಂದಿ ಪ್ರವೇಶವನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ಆದೇಶಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ಆದೇಶಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ವ್ಯಾಪಾರ ಪ್ರೊಫೈಲ್ ಅನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ವ್ಯಾಪಾರ ಪ್ರೊಫೈಲ್ ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ರಿಯಾಯಿತಿ ಕೋಡ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ರಿಯಾಯಿತಿ ಕೋಡ್‌ಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'ಕೂಪನ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'ಕೂಪನ್‌ಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ಕೊಡುಗೆಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ಕೊಡುಗೆಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'ಕ್ಯಾಶ್ಬ್ಯಾಕ್ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'ಕ್ಯಾಶ್‌ಬ್ಯಾಕ್‌ಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ಲಾಟರಿಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ಲಾಟರಿಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'ಸಮುದಾಯವನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'ಸಮುದಾಯವನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ಗ್ರಾಹಕರನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ಗ್ರಾಹಕರನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'ಚಂದಾದಾರಿಕೆಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'ಚಂದಾದಾರಿಕೆಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'ಮಾರಾಟಗಾರರ ಆದೇಶಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'ಮಾರಾಟಗಾರರ ಆದೇಶಗಳು ಮತ್ತು ಪಾವತಿಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'ಸಂಪರ್ಕ ಪೂರೈಕೆದಾರರನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'ಸಂಪರ್ಕ ಪೂರೈಕೆದಾರರನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI ಆಜ್ಞೆಗಳನ್ನು ಕಾರ್ಯಗತಗೊಳಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI ಮಾಹಿತಿಯನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'ಮಾರಾಟಗಾರರ ಪಾವತಿಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'ಮಾರಾಟಗಾರರ ಪಾವತಿಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ವ್ಯಾಪಾರ ಪ್ರೊಫೈಲ್ ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ವ್ಯಾಪಾರ ಪ್ರೊಫೈಲ್ ಅನ್ನು ನಿರ್ವಹಿಸಿ.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ಏಜೆನ್ಸಿ ಮಾಹಿತಿಯನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ಏಜೆನ್ಸಿ ಮಾಹಿತಿಯನ್ನು ನಿರ್ವಹಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'ಅಂಗಡಿ ಟಿಪ್ಪಣಿಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'ಅಂಗಡಿ ಟಿಪ್ಪಣಿಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'ಡೆವಲಪರ್ ಸ್ವತ್ತುಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'ಡೆವಲಪರ್ ಸ್ವತ್ತುಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'ವೈಯಕ್ತಿಕ ಮಾಹಿತಿ ಮತ್ತು ಖಾತೆ ಸೆಟ್ಟಿಂಗ್‌ಗಳನ್ನು ಪ್ರವೇಶಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ವ್ಯಾಲೆಟ್ ಮತ್ತು ವಹಿವಾಟುಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ವಾಲೆಟ್ ವಹಿವಾಟುಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth ಟೋಕನ್‌ಗಳು ಮತ್ತು ಕ್ಲೈಂಟ್‌ಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth ಟೋಕನ್‌ಗಳು ಮತ್ತು ಕ್ಲೈಂಟ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'ಭದ್ರತಾ ಸೆಟ್ಟಿಂಗ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'ಅಂಗಸಂಸ್ಥೆಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ಅಂಗಸಂಸ್ಥೆಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'ಮುದ್ರಣ ಟೆಂಪ್ಲೆಟ್ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'ಮುದ್ರಣ ಟೆಂಪ್ಲೆಟ್ಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'ವಿಮರ್ಶೆಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'ವಿಮರ್ಶೆಗಳನ್ನು ವೀಕ್ಷಿಸಿ.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'ಹಣಗಳಿಕೆ ಮಾಹಿತಿಯನ್ನು ವೀಕ್ಷಿಸಿ.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'ಹಣಗಳಿಕೆ ಮಾಹಿತಿಯನ್ನು ನಿರ್ವಹಿಸಿ.',



    'profile' => 'ಹೆಸರು, ಇಮೇಲ್ ವಿಳಾಸ, ಚಿತ್ರ ಮತ್ತು ದೃಢೀಕರಣ ಸ್ಥಿತಿ ಸೇರಿದಂತೆ ಪ್ರೊಫೈಲ್ ಮಾಹಿತಿಯನ್ನು ಓದಿ.',
    'phone' => 'ಸಂಪರ್ಕ ಸಂಖ್ಯೆ ಪ್ರವೇಶ',
    'address' => 'ಉಳಿಸಿದ ವಿಳಾಸ ಪುಸ್ತಕದಿಂದ ವಿಳಾಸವನ್ನು ಓದಿ ಮತ್ತು ಸಂಪಾದಿಸಿ',
    'buy' => 'ಆರ್ಡರ್ ಮತ್ತು ಶಾಪ್ ಆರ್ಡರ್.',
    'order-history' => 'ಆರ್ಡರ್ ಇತಿಹಾಸವನ್ನು ಓದಿ.',
    'my-gift-cards' => 'ನನ್ನ ಉಡುಗೊರೆ ಕಾರ್ಡ್‌ಗಳಿಗೆ ಪ್ರವೇಶ.',
    'articles' => 'ಲೇಖನಗಳನ್ನು ಸಂಪಾದಿಸಿ.',
    'notifications' => 'ಅಧಿಸೂಚನೆಗಳನ್ನು ಕಳುಹಿಸಿ ಮತ್ತು ಸ್ವೀಕರಿಸಿ.',
    'read-shops' => 'ಅಂಗಡಿ ಪಟ್ಟಿಯನ್ನು ಓದಿ.',
    'shop-edit' => 'ಅಂಗಡಿ ಸಂಪಾದನೆ ಪ್ರವೇಶ.',
    'shop-contacts' => 'ಸಂಪರ್ಕ ಫಾರ್ಮ್‌ಗಳನ್ನು ಸ್ವೀಕರಿಸಿ ಮತ್ತು ಸಂಪಾದಿಸಿ.',
    'shop-gift-cards' => 'ಕಾರ್ಡ್‌ಗಳನ್ನು ರಚಿಸುವುದು, ಸಂಪಾದಿಸುವುದು ಮತ್ತು ನಿರ್ವಹಿಸುವುದು.',
    'shop-faqs' => 'ಪದೇ ಪದೇ ಕೇಳಲಾಗುವ ಪ್ರಶ್ನೆಗಳನ್ನು ರಚಿಸಿ, ಸಂಪಾದಿಸಿ ಮತ್ತು ನಿರ್ವಹಿಸಿ.',
    'shop-categories' => 'ವರ್ಗಗಳನ್ನು ರಚಿಸುವುದು, ಸಂಪಾದಿಸುವುದು ಮತ್ತು ನಿರ್ವಹಿಸುವುದು.',
    'backoffice-write-products' => 'ಬ್ಯಾಕ್ ಆಫೀಸ್‌ನಲ್ಲಿ ಉತ್ಪನ್ನಗಳ ರಚನೆ, ಸಂಪಾದನೆ ಮತ್ತು ನಿರ್ವಹಣೆಗೆ ಅಧಿಕಾರ ನೀಡಿ.',
    'backoffice-read-products' => 'ಬ್ಯಾಕ್ ಆಫೀಸ್‌ನಲ್ಲಿ ಉತ್ಪನ್ನಗಳ ಪಟ್ಟಿ ಮತ್ತು ವಿವರವಾದ ಉತ್ಪನ್ನ ಮಾಹಿತಿಯನ್ನು ವೀಕ್ಷಿಸಲು ಪ್ರವೇಶವನ್ನು ದೃಢೀಕರಿಸಿ.',
    'shop-read-reports' => 'ಮಾಹಿತಿ ಮತ್ತು ವರದಿಗಳನ್ನು ಓದಿ.',
    'shop-socials' => 'ಅಂಗಡಿ ಸಾಮಾಜಿಕ ನೆಟ್ವರ್ಕ್ಗಳನ್ನು ಸಂಪಾದಿಸಿ.',
    'shop-accounts' => 'ಸ್ಟೋರ್-ಲಿಂಕ್ ಮಾಡಿದ ಹಣಕಾಸು ಖಾತೆಗಳನ್ನು ಸಂಪಾದಿಸಿ ಮತ್ತು ಅಳಿಸಿ.',
    'shop-menus' => 'ಅಂಗಡಿ ಮೆನುಗಳನ್ನು ಸಂಪಾದಿಸಿ.',
    'shop-pages' => 'ಅಂಗಡಿ ಪುಟಗಳನ್ನು ಸಂಪಾದಿಸಿ.',
    'shop-warehouse' => 'ಅಂಗಡಿ ಗೋದಾಮು ಸಂಪಾದಿಸಿ',
    'shop-permissions' => 'ಅಂಗಡಿ ಪ್ರವೇಶವನ್ನು ವೀಕ್ಷಿಸಿ ಮತ್ತು ಸಂಪಾದಿಸಿ.',
    'shop-process-center' => 'ಸ್ವೀಕರಿಸಿದ ಆದೇಶಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-profile' => 'ಅಂಗಡಿ ಪ್ರೊಫೈಲ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-discount-code' => 'ರಿಯಾಯಿತಿ ಕೋಡ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-coupon' => 'ಕೂಪನ್‌ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-offer' => 'ಕೊಡುಗೆಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-cashback' => 'ಕ್ಯಾಶ್ಬ್ಯಾಕ್ಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-lottery' => 'ಲಾಟರಿಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-community' => 'ಸಮುದಾಯವನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-customers' => 'ಗ್ರಾಹಕರನ್ನು ನಿರ್ವಹಿಸಿ.',
    'shop-ribbon' => 'ರಿಬ್ಬನ್ ಚಂದಾದಾರಿಕೆಗಳನ್ನು ನಿರ್ವಹಿಸಿ.',
    'community-read' => 'Selldone ಸಮುದಾಯವನ್ನು ಓದಿ.',
    'community-write' => 'ಮಾರಾಟವಾದ ಸಮುದಾಯವನ್ನು ಬರೆಯಿರಿ.',
    'profile-write' => 'ಬಳಕೆದಾರರ ಪ್ರೊಫೈಲ್ ಮಾಹಿತಿಯನ್ನು ಬರೆಯಿರಿ.',
    'vendor-read' => 'ಮಾರಾಟಗಾರರ ಆದೇಶಗಳನ್ನು ಪೂರೈಸುವ ಕ್ರಿಯೆಗಳಿಗೆ ಪ್ರವೇಶ.',
    'vendor-write' => 'ಮಾರಾಟಗಾರರ ಆದೇಶಗಳು, ಪಾವತಿ ಮತ್ತು ಇತರ ಮಾಹಿತಿಯನ್ನು ಬದಲಾಯಿಸಿ.',
    'connect-providers' => 'ಸಂಪರ್ಕ ಪೂರೈಕೆದಾರರನ್ನು ಸೇರಿಸಿ, ಓದಿ ಮತ್ತು ಬರೆಯಿರಿ.',
    'personal-identification' => 'ವೈಯಕ್ತಿಕ ಮಾಹಿತಿ, ಪ್ರವೇಶಗಳು ಮತ್ತು ಖಾತೆ ಸಂರಚನೆಯನ್ನು ಓದಿ.',
    'accounts' => 'ವ್ಯಾಲೆಟ್‌ಗಳಿಗೆ ಪ್ರವೇಶ, ವಹಿವಾಟುಗಳು ಮತ್ತು ಟಾಪ್-ಅಪ್ ಇತಿಹಾಸಗಳನ್ನು ಓದಿ.',
    'shop-add' => 'ಹೊಸ ಅಂಗಡಿಯನ್ನು ಸೇರಿಸಿ.',
    'shop-delete' => 'ಒಂದು ಅಂಗಡಿಯನ್ನು ತೆಗೆದುಹಾಕಿ.',
    'shop-ai-write' => 'AI ಆಜ್ಞೆಗಳನ್ನು ಕಾರ್ಯಗತಗೊಳಿಸಲು ಬಳಕೆದಾರರಿಗೆ ಅನುಮತಿಸುತ್ತದೆ.',
    'shop-ai-read' => 'ಆಜ್ಞೆಗಳನ್ನು ಕಾರ್ಯಗತಗೊಳಿಸದೆಯೇ AI ಮಾಹಿತಿಯನ್ನು ಪ್ರವೇಶಿಸಲು ಬಳಕೆದಾರರಿಗೆ ಅನುಮತಿಸುತ್ತದೆ.',
    'vendor-payment' => 'ಮಾರಾಟಗಾರರಿಗೆ ಪಾವತಿ ದಾಖಲೆಗಳನ್ನು ಸೇರಿಸಲು ಅಥವಾ ಸ್ಟ್ರೈಪ್ ಕನೆಕ್ಟ್‌ನಂತಹ ಅವರ ಸಂಪರ್ಕಿತ ಖಾತೆಗಳ ಮೂಲಕ ಹಣವನ್ನು ವರ್ಗಾಯಿಸಲು ಬಳಕೆದಾರರಿಗೆ ಅನುಮತಿಸುತ್ತದೆ.',
    'company-read' => 'ವ್ಯಾಪಾರ ಪ್ರೊಫೈಲ್ ಮಾಹಿತಿಯನ್ನು ಓದಲು ಅನುಮತಿಸುತ್ತದೆ.',
    'company-write' => 'ವ್ಯಾಪಾರದ ಪ್ರೊಫೈಲ್ ಮಾಹಿತಿಯನ್ನು ಓದಲು ಮತ್ತು ಬರೆಯಲು ಅನುಮತಿಸುತ್ತದೆ.',
    'agency-read' => 'ಏಜೆನ್ಸಿ ಮಾಹಿತಿಯನ್ನು ಓದಲು ಅನುಮತಿಸುತ್ತದೆ.',
    'agency-write' => 'ಏಜೆನ್ಸಿ ಮಾಹಿತಿಯನ್ನು ಓದಲು ಮತ್ತು ಬರೆಯಲು ಅನುಮತಿಸುತ್ತದೆ.',
    'note-read' => 'ಅಂಗಡಿ ಟಿಪ್ಪಣಿಗಳನ್ನು ಓದಲು ಅನುಮತಿಸುತ್ತದೆ.',
    'note-write' => 'ಅಂಗಡಿ ಟಿಪ್ಪಣಿಗಳನ್ನು ಓದಲು ಮತ್ತು ಬರೆಯಲು ಅನುಮತಿಸುತ್ತದೆ.',
    'developer-read' => 'ಡೆವಲಪರ್‌ಗಳ ಸ್ವತ್ತುಗಳನ್ನು ಓದಲು ಅನುಮತಿಸುತ್ತದೆ.',
    'developer-write' => 'ಡೆವಲಪರ್‌ಗಳ ಸ್ವತ್ತುಗಳನ್ನು ಓದಲು ಮತ್ತು ಬರೆಯಲು ಅನುಮತಿಸುತ್ತದೆ.',
    'tokens-read' => 'Oauth ಟೋಕನ್‌ಗಳು ಮತ್ತು ಕ್ಲೈಂಟ್‌ಗಳನ್ನು ಓದಿ.',
    'tokens-write' => 'Oauth ಟೋಕನ್‌ಗಳು ಮತ್ತು ಕ್ಲೈಂಟ್‌ಗಳನ್ನು ಬರೆಯಿರಿ.',
];
