<?php

use App\Providers\AuthServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */


    AuthServiceProvider::SCOPE_PROFILE => 'Read profile information including name, email address, image and authentication status.',
    AuthServiceProvider::SCOPE_PHONE => 'Contact number access',
    AuthServiceProvider::SCOPE_ADDRESS => 'Read and edit address from saved address book',

    AuthServiceProvider::SCOPE_BUY => 'Order & Shop Order.',
    AuthServiceProvider::SCOPE_ORDER_HISTORY => 'Read order history.',
    AuthServiceProvider::SCOPE_MY_GIFT_CARDS => 'Access to my cards.',


    AuthServiceProvider::SCOPE_ARTICLES => 'Edit Articles.',
    AuthServiceProvider::SCOPE_NOTIFICATIONS => 'Send and receive notifications.',


    AuthServiceProvider::SCOPE_READ_SHOPS => 'Read Store List.',

    AuthServiceProvider::SCOPE_SHOP_EDIT => 'Store editing access.',

    AuthServiceProvider::SCOPE_SHOP_CONTACTS => 'Receive and edit contact forms.',
    AuthServiceProvider::SCOPE_SHOP_GIFT_CARDS => 'Creating, Editing, and Managing Cards.',
    AuthServiceProvider::SCOPE_SHOP_FAQS => 'Create, edit, and manage frequently asked questions.',
    AuthServiceProvider::SCOPE_SHOP_CATEGORIES => 'Creating, Editing, and Managing Categories.',
    AuthServiceProvider::SCOPE_SHOP_PRODUCTS => 'Creating, Editing and Managing Products.',
    AuthServiceProvider::SCOPE_SHOP_READ_REPORTS => 'Read information and reports.',
    AuthServiceProvider::SCOPE_SHOP_SOCIALS => 'Edit store social networks.',
    AuthServiceProvider::SCOPE_SHOP_ACCOUNTS => 'Edit and delete store-linked financial accounts.',
    AuthServiceProvider::SCOPE_SHOP_MENUS => 'Edit store menus.',
    AuthServiceProvider::SCOPE_SHOP_PAGES => 'Edit store pages.',
    AuthServiceProvider::SCOPE_SHOP_WAREHOUSE => 'Edit Store Warehouse',
    AuthServiceProvider::SCOPE_SHOP_PERMISSIONS => 'View and edit store access.',
    AuthServiceProvider::SCOPE_SHOP_PROCESS_CENTER => 'Manage received orders.',
    AuthServiceProvider::SCOPE_SHOP_PROFILE => 'Manage store profiles.',
    AuthServiceProvider::SCOPE_SHOP_DISCOUNT_CODE => 'Manage discount codes.',
    AuthServiceProvider::SCOPE_SHOP_COUPON => 'Manage coupons.',
    AuthServiceProvider::SCOPE_SHOP_OFFER => 'Manage offers.',
    AuthServiceProvider::SCOPE_SHOP_LOTTERY => 'Manage lotteries.',
    AuthServiceProvider::SCOPE_SHOP_COMMUNITY => 'Manage community.',





];
