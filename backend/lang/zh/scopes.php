<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone 管理员权限.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => '受限的投资者访问权限.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => '读取用户资料详情.',
    AuthServiceProvider::SCOPE_USER_PHONE => '读取电话号码.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => '读取和更新保存的地址.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => '更新用户资料.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => '下订单.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => '查看订单历史记录.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => '访问礼品卡.',

    AuthServiceProvider::SCOPE_ARTICLES => '编辑文章.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => '管理通知.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => '查看店铺列表.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => '编辑店铺详情.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => '添加新店铺.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => '删除店铺.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => '管理支持票据.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => '管理礼品卡.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => '查看礼品卡.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => '管理常见问题.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => '查看常见问题.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => '管理分类.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => '查看分类.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => '管理产品.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => '查看产品.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => '查看报告.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => '管理财务账户.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => '查看财务账户.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => '编辑店铺页面.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => '查看店铺页面.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => '管理仓库.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => '查看仓库.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => '管理员工访问权限.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => '查看员工访问权限.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => '查看订单.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => '管理订单.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => '管理业务资料.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => '查看业务资料.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => '管理折扣码.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => '查看折扣码.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => '管理优惠券.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => '查看优惠券.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => '管理优惠.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => '查看优惠.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => '管理返现.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => '查看返现.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => '管理抽奖.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => '查看抽奖.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => '管理社区.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => '查看社区.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => '管理客户.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => '查看客户.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => '管理订阅.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => '查看订阅.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => '查看供应商订单.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => '管理供应商订单和付款.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => '管理连接提供商.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => '查看连接提供商.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => '执行 AI 命令.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => '查看 AI 信息.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => '管理供应商付款.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => '查看供应商付款.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => '查看业务资料.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => '管理业务资料.',

    AuthServiceProvider::SCOPE_AGENCY_READ => '查看代理信息.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => '管理代理信息.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => '查看店铺备注.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => '管理店铺备注.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => '查看开发者资产.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => '管理开发者资产.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => '访问个人信息和账户设置.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => '管理钱包和交易.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => '查看钱包交易.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => '查看 OAuth 令牌和客户端.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => '管理 OAuth 令牌和客户端.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => '管理安全设置.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => '管理联盟合作伙伴.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => '查看联盟合作伙伴.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => '管理打印模板.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => '查看打印模板.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => '管理评论。',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => '查看评论。',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => '查看盈利信息.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => '管理盈利信息.',

];
