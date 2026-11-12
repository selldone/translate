<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone প্রশাসকের সুযোগ।',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'বিনিয়োগকারীদের প্রবেশাধিকার সীমাবদ্ধ।',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'ব্যবহারকারীর প্রোফাইলের বিবরণ পড়ুন।',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ফোন নম্বর পড়ুন।',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'সংরক্ষিত ঠিকানাগুলি পড়ুন এবং আপডেট করুন।',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ব্যবহারকারীর প্রোফাইল আপডেট করুন।',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'অর্ডার দিন।',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'অর্ডার ইতিহাস দেখুন।',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'উপহার কার্ড অ্যাক্সেস করুন।',

    AuthServiceProvider::SCOPE_ARTICLES => 'নিবন্ধগুলি সম্পাদনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'বিজ্ঞপ্তিগুলি পরিচালনা করুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'দোকানের তালিকা দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'দোকানের বিবরণ সম্পাদনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'নতুন দোকান যোগ করুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'দোকান মুছে দিন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'সমর্থন টিকিট পরিচালনা করুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'উপহার কার্ড পরিচালনা করুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'উপহার কার্ড দেখুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQs পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQs দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'বিভাগ পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'বিভাগগুলি দেখুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'পণ্য পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'পণ্য দেখুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'রিপোর্ট দেখুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'আর্থিক অ্যাকাউন্ট পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'আর্থিক হিসাব দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'স্টোর পৃষ্ঠাগুলি সম্পাদনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'দোকান পাতা দেখুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'গুদাম পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'গুদাম দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'কর্মীদের অ্যাক্সেস পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'কর্মীদের অ্যাক্সেস দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'আদেশ দেখুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'অর্ডার ম্যানেজ করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ব্যবসার প্রোফাইল পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ব্যবসার প্রোফাইল দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ডিসকাউন্ট কোড পরিচালনা করুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ডিসকাউন্ট কোড দেখুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'কুপন পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'কুপন দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'অফার পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'অফার দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'ক্যাশব্যাক পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'ক্যাশব্যাক দেখুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'লটারি পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'লটারি দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'সম্প্রদায় পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'সম্প্রদায় দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'গ্রাহকদের পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'গ্রাহকদের দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'সদস্যতা পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'সদস্যতা দেখুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'বিক্রেতা আদেশ দেখুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'বিক্রেতা আদেশ এবং অর্থপ্রদান পরিচালনা করুন.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'সংযোগ প্রদানকারীদের পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'সংযোগ প্রদানকারী দেখুন.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'এআই কমান্ড চালান।',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI তথ্য দেখুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'বিক্রেতা পেমেন্ট পরিচালনা করুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'বিক্রেতা পেমেন্ট দেখুন.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ব্যবসার প্রোফাইল দেখুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ব্যবসার প্রোফাইল পরিচালনা করুন।',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'সংস্থার তথ্য দেখুন।',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'সংস্থার তথ্য পরিচালনা করুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'দোকান নোট দেখুন.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'দোকান নোট পরিচালনা করুন.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'বিকাশকারী সম্পদ দেখুন।',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'বিকাশকারী সম্পদ পরিচালনা করুন।',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'ব্যক্তিগত তথ্য এবং অ্যাকাউন্ট সেটিংস অ্যাক্সেস করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ওয়ালেট এবং লেনদেন পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ওয়ালেট লেনদেন দেখুন।',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth টোকেন এবং ক্লায়েন্ট দেখুন।',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth টোকেন এবং ক্লায়েন্ট পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'নিরাপত্তা সেটিংস পরিচালনা করুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'সহযোগীদের পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'অধিভুক্ত দেখুন.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'প্রিন্ট টেমপ্লেট পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'প্রিন্ট টেমপ্লেট দেখুন।',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'পর্যালোচনা পরিচালনা করুন।',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'পর্যালোচনা দেখুন.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'নগদীকরণ তথ্য দেখুন।',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'নগদীকরণ তথ্য পরিচালনা করুন।',



    'profile' => 'নাম, ইমেল ঠিকানা, ছবি এবং প্রমাণীকরণ স্থিতি সহ প্রোফাইল তথ্য পড়ুন।',
    'phone' => 'যোগাযোগ নম্বর অ্যাক্সেস',
    'address' => 'সংরক্ষিত ঠিকানা বই থেকে ঠিকানা পড়ুন এবং সম্পাদনা করুন',
    'buy' => 'অর্ডার এবং শপ অর্ডার।',
    'order-history' => 'অর্ডার ইতিহাস পড়ুন।',
    'my-gift-cards' => 'আমার উপহার কার্ড অ্যাক্সেস.',
    'articles' => 'প্রবন্ধ সম্পাদনা করুন.',
    'notifications' => 'বিজ্ঞপ্তি পাঠান এবং গ্রহণ করুন.',
    'read-shops' => 'স্টোরের তালিকা পড়ুন।',
    'shop-edit' => 'স্টোর সম্পাদনার অ্যাক্সেস।',
    'shop-contacts' => 'যোগাযোগ ফর্ম গ্রহণ এবং সম্পাদনা করুন.',
    'shop-gift-cards' => 'কার্ড তৈরি করা, সম্পাদনা করা এবং পরিচালনা করা।',
    'shop-faqs' => 'প্রায়শই জিজ্ঞাসিত প্রশ্ন তৈরি করুন, সম্পাদনা করুন এবং পরিচালনা করুন।',
    'shop-categories' => 'বিভাগ তৈরি করা, সম্পাদনা করা এবং পরিচালনা করা।',
    'backoffice-write-products' => 'ব্যাক অফিসে পণ্য তৈরি, সম্পাদনা এবং পরিচালনার অনুমোদন দিন।',
    'backoffice-read-products' => 'ব্যাক অফিসে পণ্য তালিকা এবং বিস্তারিত পণ্য তথ্য দেখতে অ্যাক্সেস অনুমোদন করুন.',
    'shop-read-reports' => 'তথ্য এবং রিপোর্ট পড়ুন.',
    'shop-socials' => 'দোকান সামাজিক নেটওয়ার্ক সম্পাদনা করুন.',
    'shop-accounts' => 'স্টোর-লিঙ্ক করা আর্থিক অ্যাকাউন্টগুলি সম্পাদনা করুন এবং মুছুন।',
    'shop-menus' => 'স্টোর মেনু সম্পাদনা করুন।',
    'shop-pages' => 'স্টোর পৃষ্ঠাগুলি সম্পাদনা করুন।',
    'shop-warehouse' => 'স্টোর গুদাম সম্পাদনা করুন',
    'shop-permissions' => 'দোকান অ্যাক্সেস দেখুন এবং সম্পাদনা করুন.',
    'shop-process-center' => 'প্রাপ্ত আদেশ পরিচালনা করুন.',
    'shop-profile' => 'স্টোর প্রোফাইল পরিচালনা করুন।',
    'shop-discount-code' => 'ডিসকাউন্ট কোড পরিচালনা করুন.',
    'shop-coupon' => 'কুপন পরিচালনা করুন।',
    'shop-offer' => 'অফার পরিচালনা করুন।',
    'shop-cashback' => 'ক্যাশব্যাক পরিচালনা করুন।',
    'shop-lottery' => 'লটারি পরিচালনা করুন।',
    'shop-community' => 'সম্প্রদায় পরিচালনা করুন।',
    'shop-customers' => 'গ্রাহকদের পরিচালনা করুন।',
    'shop-ribbon' => 'রিবন সদস্যতা পরিচালনা করুন।',
    'community-read' => 'Selldone সম্প্রদায় পড়ুন.',
    'community-write' => 'বিক্রিত সম্প্রদায় লিখুন।',
    'profile-write' => 'ব্যবহারকারীর প্রোফাইল তথ্য লিখুন।',
    'vendor-read' => 'বিক্রেতা আদেশের পূর্ণতা কর্ম অ্যাক্সেস.',
    'vendor-write' => 'অর্ডার, পেমেন্ট এবং বিক্রেতার অন্যান্য তথ্য পরিবর্তন করুন।',
    'connect-providers' => 'সংযোগ প্রদানকারী যোগ করুন, পড়ুন এবং লিখুন।',
    'personal-identification' => 'ব্যক্তিগত তথ্য, অ্যাক্সেস, এবং অ্যাকাউন্ট কনফিগার পড়ুন।',
    'accounts' => 'ওয়ালেটে অ্যাক্সেস, লেনদেন এবং টপ-আপ ইতিহাস পড়ুন।',
    'shop-add' => 'নতুন দোকান যোগ করুন.',
    'shop-delete' => 'একটি দোকান সরান.',
    'shop-ai-write' => 'ব্যবহারকারীকে এআই কমান্ড চালানোর অনুমতি দেয়।',
    'shop-ai-read' => 'ব্যবহারকারীকে কমান্ড নির্বাহ না করে AI তথ্য অ্যাক্সেস করার অনুমতি দেয়।',
    'vendor-payment' => 'ব্যবহারকারীকে বিক্রেতাদের জন্য অর্থপ্রদানের রেকর্ড যোগ করতে বা স্ট্রাইপ কানেক্টের মতো তাদের সংযুক্ত অ্যাকাউন্টগুলির মাধ্যমে তহবিল স্থানান্তর করার অনুমতি দেয়৷',
    'company-read' => 'ব্যবসার প্রোফাইল তথ্য পড়তে অনুমতি দেয়।',
    'company-write' => 'ব্যবসার প্রোফাইল তথ্য পড়তে এবং লিখতে অনুমতি দেয়।',
    'agency-read' => 'এজেন্সি তথ্য পড়তে অনুমতি দেয়.',
    'agency-write' => 'এজেন্সি তথ্য পড়তে এবং লিখতে অনুমতি দেয়।',
    'note-read' => 'দোকান নোট পড়তে অনুমতি দেয়.',
    'note-write' => 'দোকান নোট পড়তে এবং লিখতে অনুমতি দেয়.',
    'developer-read' => 'বিকাশকারীদের সম্পদ পড়ার অনুমতি দেয়।',
    'developer-write' => 'বিকাশকারীদের সম্পদ পড়তে এবং লিখতে অনুমতি দেয়।',
    'tokens-read' => 'Oauth টোকেন এবং ক্লায়েন্ট পড়ুন।',
    'tokens-write' => 'Oauth টোকেন এবং ক্লায়েন্ট লিখুন।',
];
