<?php

use App\Providers\AuthServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */


    AuthServiceProvider::SCOPE_PROFILE => 'Read profile information including name, email address, image and KYC status.',
    AuthServiceProvider::SCOPE_PHONE => 'Read phone number.',
    AuthServiceProvider::SCOPE_ADDRESS => 'Read and edit addresses from the saved address book.',

    AuthServiceProvider::SCOPE_BUY => 'Checkout and place orders.',
    AuthServiceProvider::SCOPE_ORDER_HISTORY => 'Read orders history.',
    AuthServiceProvider::SCOPE_MY_GIFT_CARDS => 'Access to my giftcards.',


    AuthServiceProvider::SCOPE_ARTICLES => 'Edit Articles.',
    AuthServiceProvider::SCOPE_NOTIFICATIONS => 'Send and receive notifications.',


    AuthServiceProvider::SCOPE_READ_SHOPS => 'Read shops list.',

    AuthServiceProvider::SCOPE_SHOP_EDIT => 'Store editing access.',

    AuthServiceProvider::SCOPE_SHOP_CONTACTS => 'Receive and edit contact forms.',
    AuthServiceProvider::SCOPE_SHOP_GIFT_CARDS => 'Creating, Editing, and Managing Cards.',
    AuthServiceProvider::SCOPE_SHOP_FAQS => 'Create, edit, and manage frequently asked questions.',
    AuthServiceProvider::SCOPE_SHOP_CATEGORIES => 'Creating, Editing, and Managing Categories.',

    AuthServiceProvider::SCOPE_BACKOFFICE_WRITE_PRODUCTS => "Authorize the creation, editing, and management of products in the back office.",
    AuthServiceProvider::SCOPE_BACKOFFICE_READ_PRODUCTS => "Authorize access to view the products list and detailed product information in the back office.",


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
    AuthServiceProvider::SCOPE_SHOP_CASHBACK => 'Manage cashbacks.',

    AuthServiceProvider::SCOPE_SHOP_LOTTERY => 'Manage lotteries.',
    AuthServiceProvider::SCOPE_SHOP_COMMUNITY => 'Manage community.',
    AuthServiceProvider::SCOPE_SHOP_CUSTOMERS => 'Manage customers.',
    AuthServiceProvider::SCOPE_SHOP_RIBBON => 'Manage Ribbon subscriptions.',


    AuthServiceProvider::SCOPE_COMMUNITY_READ => 'Read Selldone community.',
    AuthServiceProvider::SCOPE_COMMUNITY_WRITE => 'Write selldone community.',

    AuthServiceProvider::SCOPE_PROFILE_WRITE => 'Write user profile information.',

    AuthServiceProvider::SCOPE_VENDOR_READ => 'Access to fulfillment actions of vendor orders.',
    AuthServiceProvider::SCOPE_VENDOR_WRITE => 'Change orders, payment and other information of the vendor.',


    AuthServiceProvider::SCOPE_CONNECT_PROVIDERS => 'Add, read and write connect providers.',

    // Restricted:
    AuthServiceProvider::SCOPE_PERSONAL_IDENTIFICATION => 'Read personal information, accesses, and account config.',
    AuthServiceProvider::SCOPE_ACCOUNTS => 'Access to wallets, read transactions and top-up histories.',
    AuthServiceProvider::SCOPE_SHOP_ADD => 'Add new shop.',
    AuthServiceProvider::SCOPE_SHOP_DELETE => 'Remove a shop.',


    AuthServiceProvider::SCOPE_AI_WRITE => 'Allows the user to execute AI commands.',
    AuthServiceProvider::SCOPE_AI_READ => 'Allows the user to access AI information without executing commands.',

    AuthServiceProvider::SCOPE_VENDOR_PAYMENT => 'Allows the user to add payments records for vendors or transfer funds via their connected accounts like Stripe Connect.',


    AuthServiceProvider::SCOPE_COMPANY_READ => 'Allows to read business profile information.',
    AuthServiceProvider::SCOPE_COMPANY_WRITE => 'Allows to read and write business profile information.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Allows to read agency information.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Allows to read and write agency information.',

    AuthServiceProvider::SCOPE_NOTE_READ => 'Allows to read shop notes.',
    AuthServiceProvider::SCOPE_NOTE_WRITE => 'Allows to read and write shop notes.',

    AuthServiceProvider::SCOPE_DEVELOPER_READ => 'Allows to read developers assets.',
    AuthServiceProvider::SCOPE_DEVELOPER_WRITE => 'Allows to read and write developers assets.',

    // Oauth tokens and clients:
    AuthServiceProvider::SCOPE_TOKENS_READ => 'Read Oauth tokens and clients.',
    AuthServiceProvider::SCOPE_TOKENS_WRITE => 'Write Oauth tokens and clients.',

];
