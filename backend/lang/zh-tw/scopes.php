<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone管理員範圍。',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => '限制投資者准入。',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => '閱讀用戶個人資料詳細資訊。',
    AuthServiceProvider::SCOPE_USER_PHONE => '讀取電話號碼。',
    AuthServiceProvider::SCOPE_USER_ADDRESS => '讀取並更新已儲存的位址。',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => '更新用戶個人資料。',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => '下訂單。',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => '查看訂單歷史記錄。',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => '訪問禮品卡。',

    AuthServiceProvider::SCOPE_ARTICLES => '編輯文章。',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => '管理通知。',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => '查看商店清單。',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => '編輯商店詳細資料。',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => '新增商店。',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => '刪除店家。',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => '管理支持票證。',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => '管理禮品卡。',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => '查看禮品卡。',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => '管理常見問題。',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => '查看常見問題。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => '管理類別。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => '查看類別。',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => '管理產品。',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => '查看產品。',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => '查看報告。',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => '管理財務帳戶。',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => '查看財務帳戶。',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => '編輯商店頁面。',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => '查看商店頁面。',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => '管理倉庫。',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => '查看倉庫。',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => '管理員工存取權限。',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => '查看員工存取權限。',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => '查看訂單。',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => '管理訂單。',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => '管理業務資料。',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => '查看企業簡介。',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => '管理折扣代碼。',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => '查看折扣代碼。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => '管理優惠券。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => '查看優惠券。',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => '管理優惠。',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => '查看優惠。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => '管理現金回饋。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => '查看現金回饋。',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => '管理彩票。',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => '查看彩票。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => '管理社區。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => '查看社區。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => '管理客戶。',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => '查看客戶。',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => '管理訂閱。',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => '查看訂閱。',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => '查看供應商訂單。',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => '管理供應商訂單和付款。',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => '管理連線提供者。',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => '查看連線提供者。',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => '執行AI命令。',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => '查看AI資訊。',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => '管理供應商付款。',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => '查看供應商付款。',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => '查看企業簡介。',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => '管理業務資料。',

    AuthServiceProvider::SCOPE_AGENCY_READ => '查看機構資訊。',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => '管理機構資訊。',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => '查看店鋪備註。',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => '管理商店筆記。',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => '查看開發者資產。',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => '管理開發者資產。',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => '存取個人資訊和帳戶設定。',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => '管理錢包和交易。',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => '查看錢包交易。',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => '查看 OAuth 令牌和客戶端。',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => '管理OAuth代幣和客戶。',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => '管理安全設定。',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => '管理附屬機構。',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => '查看附屬機構。',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => '管理列印模板。',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => '查看列印模板。',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => '管理評論。',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => '查看評論。',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => '查看獲利資訊。',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => '管理貨幣化資訊。',



    'profile' => '閱讀個人資料信息，包括姓名、電子郵件地址、圖像和身份驗證狀態。',
    'phone' => '聯繫電話訪問',
    'address' => '從保存的通訊錄中讀取和編輯地址',
    'buy' => '訂單和商店訂單。',
    'order-history' => '閱讀訂單歷史。',
    'my-gift-cards' => '參觀我的禮品卡。',
    'articles' => '編輯文章。',
    'notifications' => '發送和接收通知。',
    'read-shops' => '閱讀商店列表。',
    'shop-edit' => '存儲編輯權限。',
    'shop-contacts' => '接收和編輯聯繫表格。',
    'shop-gift-cards' => '創建、編輯和管理卡片。',
    'shop-faqs' => '創建、編輯和管理常見問題。',
    'shop-categories' => '創建、編輯和管理類別。',
    'backoffice-write-products' => '授權在背景建立、編輯和管理產品。',
    'backoffice-read-products' => '授權存取後台查看產品清單和詳細產品資訊。',
    'shop-read-reports' => '閱讀信息和報告。',
    'shop-socials' => '編輯商店社交網絡。',
    'shop-accounts' => '編輯和刪除與商店關聯的財務賬戶。',
    'shop-menus' => '編輯商店菜單。',
    'shop-pages' => '編輯商店頁面。',
    'shop-warehouse' => '編輯商店倉庫',
    'shop-permissions' => '查看和編輯商店訪問權限。',
    'shop-process-center' => '管理收到的訂單。',
    'shop-profile' => '管理商店資料。',
    'shop-discount-code' => '管理折扣代碼。',
    'shop-coupon' => '管理優惠券。',
    'shop-offer' => '管理優惠。',
    'shop-cashback' => '管理現金回饋。',
    'shop-lottery' => '管理彩票。',
    'shop-community' => '管理社區。',
    'shop-customers' => '管理客戶。',
    'shop-ribbon' => '管理功能區訂閱。',
    'community-read' => '閱讀 Selldone 社群。',
    'community-write' => '寫soldone社區。',
    'profile-write' => '寫入使用者個人資料資訊。',
    'vendor-read' => '存取供應商訂單的履行操作。',
    'vendor-write' => '更改供應商的訂單、付款等資訊。',
    'connect-providers' => '新增、讀取和寫入連接提供者。',
    'personal-identification' => '讀取個人資訊、存取權限和帳戶配置。',
    'accounts' => '存取錢包、讀取交易和儲值歷史記錄。',
    'shop-add' => '新增商店。',
    'shop-delete' => '刪除一個商店。',
    'shop-ai-write' => '允許使用者執行 AI 命令。',
    'shop-ai-read' => '允許使用者在不執行命令的情況下存取AI資訊。',
    'vendor-payment' => '允許用戶新增供應商的付款記錄或透過其連結帳戶（例如 Stripe Connect）轉移資金。',
    'company-read' => '允許讀取企業簡介資訊。',
    'company-write' => '允許讀取和寫入企業資料資訊。',
    'agency-read' => '允許讀取機構資訊。',
    'agency-write' => '允許讀取和寫入機構資訊。',
    'note-read' => '允許閱讀商店筆記。',
    'note-write' => '允許讀取和寫入商店註釋。',
    'developer-read' => '允許讀取開發人員資產。',
    'developer-write' => '允許讀取和寫入開發人員資產。',
    'tokens-read' => '閱讀 Oauth 令牌和客戶端。',
    'tokens-write' => '編寫 Oauth 令牌和客戶端。',
];
