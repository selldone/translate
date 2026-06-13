<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'វិសាលភាពអ្នកគ្រប់គ្រង Selldone ។',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ការចូលប្រើរបស់វិនិយោគិនមានកម្រិត។',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'អានព័ត៌មានលម្អិតអំពីទម្រង់អ្នកប្រើប្រាស់។',
    AuthServiceProvider::SCOPE_USER_PHONE => 'អានលេខទូរស័ព្ទ។',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'អាន និងធ្វើបច្ចុប្បន្នភាពអាសយដ្ឋានដែលបានរក្សាទុក។',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ធ្វើបច្ចុប្បន្នភាពទម្រង់អ្នកប្រើប្រាស់។',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ដាក់ការបញ្ជាទិញ។',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'មើលប្រវត្តិនៃការបញ្ជាទិញ។',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'ចូលប្រើកាតអំណោយ។',

    AuthServiceProvider::SCOPE_ARTICLES => 'កែសម្រួលអត្ថបទ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'គ្រប់គ្រងការជូនដំណឹង។',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'មើលបញ្ជីហាង។',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'កែសម្រួលព័ត៌មានលម្អិតរបស់ហាង។',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'បន្ថែមហាងថ្មី។',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'លុបហាង។',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'គ្រប់គ្រងសំបុត្រជំនួយ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'គ្រប់គ្រងកាតអំណោយ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'មើលកាតអំណោយ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'គ្រប់គ្រង FAQs ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'មើលសំណួរដែលសួរញឹកញាប់។',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'គ្រប់គ្រងប្រភេទ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'មើលប្រភេទ។',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'គ្រប់គ្រងផលិតផល។',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'មើលផលិតផល។',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'មើលរបាយការណ៍។',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'គ្រប់គ្រងគណនីហិរញ្ញវត្ថុ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'មើលគណនីហិរញ្ញវត្ថុ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'កែសម្រួលទំព័រហាង។',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'មើលទំព័រហាង។',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'គ្រប់គ្រងឃ្លាំង។',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'មើលឃ្លាំង។',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'គ្រប់គ្រងការចូលប្រើបុគ្គលិក។',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'មើលការចូលប្រើបុគ្គលិក។',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'មើលការបញ្ជាទិញ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'គ្រប់គ្រងការបញ្ជាទិញ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'គ្រប់គ្រងប្រវត្តិរូបអាជីវកម្ម។',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'មើលកម្រងព័ត៌មានអាជីវកម្ម។',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'គ្រប់គ្រងលេខកូដបញ្ចុះតម្លៃ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'មើលលេខកូដបញ្ចុះតម្លៃ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'គ្រប់គ្រងគូប៉ុង។',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'មើលប័ណ្ណ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'គ្រប់គ្រងការផ្តល់ជូន។',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'មើលការផ្តល់ជូន។',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'គ្រប់គ្រងសាច់ប្រាក់ត្រឡប់មកវិញ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'មើលសាច់ប្រាក់ត្រឡប់មកវិញ។',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'គ្រប់គ្រងឆ្នោត។',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'មើលឆ្នោត។',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'គ្រប់គ្រងសហគមន៍។',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'មើលសហគមន៍។',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'គ្រប់គ្រងអតិថិជន។',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'មើលអតិថិជន។',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'គ្រប់គ្រងការជាវ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'មើលការជាវ។',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'មើលការបញ្ជាទិញរបស់អ្នកលក់។',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'គ្រប់គ្រងការបញ្ជាទិញ និងការទូទាត់របស់អ្នកលក់។',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'គ្រប់គ្រងអ្នកផ្តល់សេវាភ្ជាប់។',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'មើលអ្នកផ្តល់សេវាភ្ជាប់។',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'ប្រតិបត្តិពាក្យបញ្ជា AI ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'មើលព័ត៌មាន AI ។',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'គ្រប់គ្រងការទូទាត់របស់អ្នកលក់។',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'មើលការទូទាត់របស់អ្នកលក់។',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'មើលកម្រងព័ត៌មានអាជីវកម្ម។',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'គ្រប់គ្រងប្រវត្តិរូបអាជីវកម្ម។',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'មើលព័ត៌មានភ្នាក់ងារ។',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'គ្រប់គ្រងព័ត៌មានភ្នាក់ងារ។',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'មើលចំណាំហាង។',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'គ្រប់គ្រងចំណាំហាង។',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'មើលទ្រព្យសម្បត្តិអ្នកអភិវឌ្ឍន៍។',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'គ្រប់គ្រងទ្រព្យសម្បត្តិរបស់អ្នកអភិវឌ្ឍន៍។',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'ចូលប្រើព័ត៌មានផ្ទាល់ខ្លួន និងការកំណត់គណនី។',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'គ្រប់គ្រងកាបូប និងប្រតិបត្តិការ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'មើលប្រតិបត្តិការកាបូប។',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'មើលថូខឹន OAuth និងអតិថិជន។',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'គ្រប់គ្រង OAuth tokens និងអតិថិជន។',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'គ្រប់គ្រងការកំណត់សុវត្ថិភាព។',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'គ្រប់គ្រងសាខា។',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'មើលសាខា។',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'គ្រប់គ្រងពុម្ពបោះពុម្ព។',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'មើលគំរូបោះពុម្ព។',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'គ្រប់គ្រងការវាយតម្លៃ។',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'មើលការវាយតម្លៃ។',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'មើលព័ត៌មានអំពីការរកប្រាក់។',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'គ្រប់គ្រងព័ត៌មានអំពីការរកប្រាក់។',



    'profile' => 'អានព័ត៌មានប្រវត្តិរូប រួមទាំងឈ្មោះ អាសយដ្ឋានអ៊ីមែល រូបភាព និងស្ថានភាពផ្ទៀងផ្ទាត់។',
    'phone' => 'ការចូលប្រើលេខទំនាក់ទំនង',
    'address' => 'អាន និងកែសម្រួលអាសយដ្ឋានពីសៀវភៅអាសយដ្ឋានដែលបានរក្សាទុក',
    'buy' => 'បញ្ជាទិញ & បញ្ជាទិញ។',
    'order-history' => 'អានប្រវត្តិនៃការបញ្ជាទិញ។',
    'my-gift-cards' => 'ចូលប្រើកាតអំណោយរបស់ខ្ញុំ។',
    'articles' => 'កែសម្រួលអត្ថបទ។',
    'notifications' => 'ផ្ញើ និងទទួលការជូនដំណឹង។',
    'read-shops' => 'អានបញ្ជីហាង។',
    'shop-edit' => 'ការចូលដំណើរការកែសម្រួលហាង។',
    'shop-contacts' => 'ទទួល និងកែសម្រួលទម្រង់ទំនាក់ទំនង។',
    'shop-gift-cards' => 'ការបង្កើត កែសម្រួល និងគ្រប់គ្រងកាត។',
    'shop-faqs' => 'បង្កើត កែសម្រួល និងគ្រប់គ្រងសំណួរដែលសួរញឹកញាប់។',
    'shop-categories' => 'ការបង្កើត កែសម្រួល និងគ្រប់គ្រងប្រភេទ។',
    'backoffice-write-products' => 'អនុញ្ញាតឱ្យបង្កើត ការកែសម្រួល និងការគ្រប់គ្រងផលិតផលនៅក្នុងការិយាល័យខាងក្រោយ។',
    'backoffice-read-products' => 'អនុញ្ញាតឱ្យចូលមើលបញ្ជីផលិតផល និងព័ត៌មានលំអិតអំពីផលិតផលនៅក្នុងការិយាល័យខាងក្រោយ។',
    'shop-read-reports' => 'អានព័ត៌មាន និងរបាយការណ៍។',
    'shop-socials' => 'កែសម្រួល​បណ្តាញ​សង្គម​ហាង។',
    'shop-accounts' => 'កែសម្រួល និងលុបគណនីហិរញ្ញវត្ថុដែលភ្ជាប់ជាមួយហាង។',
    'shop-menus' => 'កែសម្រួលម៉ឺនុយហាង។',
    'shop-pages' => 'កែសម្រួលទំព័រហាង។',
    'shop-warehouse' => 'កែសម្រួលឃ្លាំងស្តុក',
    'shop-permissions' => 'មើល និងកែសម្រួលការចូលប្រើហាង។',
    'shop-process-center' => 'គ្រប់គ្រងការបញ្ជាទិញដែលបានទទួល។',
    'shop-profile' => 'គ្រប់គ្រងទម្រង់ហាង។',
    'shop-discount-code' => 'គ្រប់គ្រងលេខកូដបញ្ចុះតម្លៃ។',
    'shop-coupon' => 'គ្រប់គ្រងគូប៉ុង។',
    'shop-offer' => 'គ្រប់គ្រងការផ្តល់ជូន។',
    'shop-cashback' => 'គ្រប់គ្រងសាច់ប្រាក់ត្រឡប់មកវិញ។',
    'shop-lottery' => 'គ្រប់គ្រងឆ្នោត។',
    'shop-community' => 'គ្រប់គ្រងសហគមន៍។',
    'shop-customers' => 'គ្រប់គ្រងអតិថិជន។',
    'shop-ribbon' => 'គ្រប់គ្រងការជាវ Ribbon ។',
    'community-read' => 'អានសហគមន៍ Selldone ។',
    'community-write' => 'សរសេរសហគមន៍ដែលលក់រួច។',
    'profile-write' => 'សរសេរព័ត៌មានប្រវត្តិរូបអ្នកប្រើប្រាស់។',
    'vendor-read' => 'សិទ្ធិទទួលបានសកម្មភាពបំពេញនៃការបញ្ជាទិញរបស់អ្នកលក់។',
    'vendor-write' => 'ផ្លាស់ប្តូរការបញ្ជាទិញ ការទូទាត់ និងព័ត៌មានផ្សេងទៀតរបស់អ្នកលក់។',
    'connect-providers' => 'បន្ថែម អាន និងសរសេរភ្ជាប់អ្នកផ្តល់សេវា។',
    'personal-identification' => 'អានព័ត៌មានផ្ទាល់ខ្លួន ការចូលប្រើ និងការកំណត់គណនី។',
    'accounts' => 'ចូលប្រើកាបូប អានប្រតិបត្តិការ និងប្រវត្តិបញ្ចូលទឹកប្រាក់។',
    'shop-add' => 'បន្ថែមហាងថ្មី។',
    'shop-delete' => 'ដកហាងមួយ។',
    'shop-ai-write' => 'អនុញ្ញាតឱ្យអ្នកប្រើប្រតិបត្តិពាក្យបញ្ជា AI ។',
    'shop-ai-read' => 'អនុញ្ញាតឱ្យអ្នកប្រើចូលប្រើព័ត៌មាន AI ដោយមិនចាំបាច់ប្រតិបត្តិពាក្យបញ្ជា។',
    'vendor-payment' => 'អនុញ្ញាតឱ្យអ្នកប្រើប្រាស់បន្ថែមកំណត់ត្រាការទូទាត់សម្រាប់អ្នកលក់ ឬផ្ទេរប្រាក់តាមរយៈគណនីដែលបានភ្ជាប់របស់ពួកគេដូចជា Stripe Connect ជាដើម។',
    'company-read' => 'អនុញ្ញាតឱ្យអានព័ត៌មានប្រវត្តិរូបអាជីវកម្ម។',
    'company-write' => 'អនុញ្ញាតឱ្យអាន និងសរសេរព័ត៌មានប្រវត្តិរូបអាជីវកម្ម។',
    'agency-read' => 'អនុញ្ញាតឱ្យអានព័ត៌មានភ្នាក់ងារ។',
    'agency-write' => 'អនុញ្ញាតឱ្យអាន និងសរសេរព័ត៌មានភ្នាក់ងារ។',
    'note-read' => 'អនុញ្ញាតឱ្យអានកំណត់ចំណាំហាង។',
    'note-write' => 'អនុញ្ញាតឱ្យអាន និងសរសេរកំណត់ចំណាំហាង។',
    'developer-read' => 'អនុញ្ញាតឱ្យអានទ្រព្យសម្បត្តិរបស់អ្នកអភិវឌ្ឍន៍។',
    'developer-write' => 'អនុញ្ញាតឱ្យអាន និងសរសេរទ្រព្យសម្បត្តិរបស់អ្នកអភិវឌ្ឍន៍។',
    'tokens-read' => 'អាន Oauth tokens និងអតិថិជន។',
    'tokens-write' => 'សរសេរនិមិត្តសញ្ញា Oauth និងអតិថិជន។',
];
