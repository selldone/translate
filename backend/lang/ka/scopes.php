<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone ადმინისტრატორის ფარგლები.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ინვესტორების წვდომა შეზღუდულია.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'წაიკითხეთ მომხმარებლის პროფილის დეტალები.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'წაიკითხეთ ტელეფონის ნომერი.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'წაიკითხეთ და განაახლეთ შენახული მისამართები.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'მომხმარებლის პროფილის განახლება.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'განათავსეთ შეკვეთები.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'შეკვეთის ისტორიის ნახვა.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'წვდომა სასაჩუქრე ბარათებზე.',

    AuthServiceProvider::SCOPE_ARTICLES => 'სტატიების რედაქტირება.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'შეტყობინებების მართვა.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'იხილეთ მაღაზიების სია.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'მაღაზიის დეტალების რედაქტირება.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'დაამატეთ ახალი მაღაზია.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'მაღაზიის წაშლა.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'მართეთ მხარდაჭერის ბილეთები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'სასაჩუქრე ბარათების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'სასაჩუქრე ბარათების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'ხშირად დასმული კითხვების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'ხშირად დასმული კითხვების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'კატეგორიების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'კატეგორიების ნახვა.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'პროდუქტების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'პროდუქტების ნახვა.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'იხილეთ ანგარიშები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'ფინანსური ანგარიშების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'ფინანსური ანგარიშების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'მაღაზიის გვერდების რედაქტირება.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'მაღაზიის გვერდების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'მართეთ საწყობი.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'საწყობის ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'პერსონალის წვდომის მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'პერსონალის წვდომის ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'შეკვეთების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'შეკვეთების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ბიზნეს პროფილის მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ბიზნეს პროფილის ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'მართეთ ფასდაკლების კოდები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'იხილეთ ფასდაკლების კოდები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'კუპონების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'კუპონების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'მართეთ შეთავაზებები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'იხილეთ შეთავაზებები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'მართეთ ქეშბექი.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'ნაღდი ფულის ნახვა.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'მართეთ ლატარიები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ლატარიის ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'მართეთ საზოგადოება.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'საზოგადოების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'მართეთ მომხმარებლები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'კლიენტების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'მართეთ გამოწერები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'იხილეთ გამოწერები.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'იხილეთ გამყიდველის შეკვეთები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'მართეთ გამყიდველის შეკვეთები და გადახდები.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'დაკავშირების პროვაიდერების მართვა.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'დაკავშირების პროვაიდერების ნახვა.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'შეასრულეთ AI ბრძანებები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'იხილეთ AI ინფორმაცია.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'გამყიდველის გადახდების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'იხილეთ გამყიდველის გადახდები.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ბიზნეს პროფილის ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ბიზნეს პროფილის მართვა.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'იხილეთ სააგენტოს ინფორმაცია.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'სააგენტოს ინფორმაციის მართვა.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'მაღაზიის შენიშვნების ნახვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'მართეთ მაღაზიის შენიშვნები.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'დეველოპერის აქტივების ნახვა.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'მართეთ დეველოპერის აქტივები.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'წვდომა პერსონალურ ინფორმაციაზე და ანგარიშის პარამეტრებზე.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'მართეთ საფულე და ტრანზაქციები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'საფულის ტრანზაქციების ნახვა.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'იხილეთ OAuth ტოკენები და კლიენტები.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'მართეთ OAuth ტოკენები და კლიენტები.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'მართეთ უსაფრთხოების პარამეტრები.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'მართეთ შვილობილი კომპანიები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ფილიალების ნახვა.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'ბეჭდვის შაბლონების მართვა.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'იხილეთ ბეჭდვის შაბლონები.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'მართეთ მიმოხილვები.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'იხილეთ მიმოხილვები.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'მონეტიზაციის ინფორმაციის ნახვა.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'მონეტიზაციის ინფორმაციის მართვა.',



    'profile' => 'წაიკითხეთ პროფილის ინფორმაცია, მათ შორის სახელი, ელექტრონული ფოსტის მისამართი, სურათი და ავტორიზაციის სტატუსი.',
    'phone' => 'საკონტაქტო ნომერზე წვდომა',
    'address' => 'წაიკითხეთ და შეცვალეთ მისამართი შენახული მისამართების წიგნიდან',
    'buy' => 'შეკვეთა და შეკვეთა.',
    'order-history' => 'წაიკითხეთ შეკვეთის ისტორია.',
    'my-gift-cards' => 'წვდომა ჩემს სასაჩუქრე ბარათებზე.',
    'articles' => 'სტატიების რედაქტირება.',
    'notifications' => 'გაგზავნეთ და მიიღეთ შეტყობინებები.',
    'read-shops' => 'წაიკითხეთ მაღაზიის სია.',
    'shop-edit' => 'შენახვა რედაქტირების წვდომა.',
    'shop-contacts' => 'მიიღეთ და შეცვალეთ საკონტაქტო ფორმები.',
    'shop-gift-cards' => 'ბარათების შექმნა, რედაქტირება და მართვა.',
    'shop-faqs' => 'შექმენით, დაარედაქტირეთ და მართეთ ხშირად დასმული კითხვები.',
    'shop-categories' => 'კატეგორიების შექმნა, რედაქტირება და მართვა.',
    'backoffice-write-products' => 'ნება დართოთ პროდუქტების შექმნა, რედაქტირება და მართვა ოფისში.',
    'backoffice-read-products' => 'დაუშვით წვდომა პროდუქციის სიის და დეტალური პროდუქტის ინფორმაციის სანახავად უკანა ოფისში.',
    'shop-read-reports' => 'წაიკითხეთ ინფორმაცია და მოხსენებები.',
    'shop-socials' => 'მაღაზიის სოციალური ქსელების რედაქტირება.',
    'shop-accounts' => 'შეცვალეთ და წაშალეთ მაღაზიასთან დაკავშირებული ფინანსური ანგარიშები.',
    'shop-menus' => 'მაღაზიის მენიუს რედაქტირება.',
    'shop-pages' => 'მაღაზიის გვერდების რედაქტირება.',
    'shop-warehouse' => 'მაღაზიის საწყობის რედაქტირება',
    'shop-permissions' => 'მაღაზიაში წვდომის ნახვა და რედაქტირება.',
    'shop-process-center' => 'მიღებული შეკვეთების მართვა.',
    'shop-profile' => 'მაღაზიის პროფილების მართვა.',
    'shop-discount-code' => 'მართეთ ფასდაკლების კოდები.',
    'shop-coupon' => 'კუპონების მართვა.',
    'shop-offer' => 'მართეთ შეთავაზებები.',
    'shop-cashback' => 'მართეთ ქეშბექი.',
    'shop-lottery' => 'მართეთ ლატარიები.',
    'shop-community' => 'მართეთ საზოგადოება.',
    'shop-customers' => 'მართეთ მომხმარებლები.',
    'shop-ribbon' => 'Ribbon გამოწერების მართვა.',
    'community-read' => 'წაიკითხეთ Selldone საზოგადოება.',
    'community-write' => 'დაწერეთ გაყიდული საზოგადოება.',
    'profile-write' => 'დაწერეთ მომხმარებლის პროფილის ინფორმაცია.',
    'vendor-read' => 'გამყიდველის შეკვეთების შესრულების მოქმედებებზე წვდომა.',
    'vendor-write' => 'შეცვალეთ შეკვეთები, გადახდა და გამყიდველის სხვა ინფორმაცია.',
    'connect-providers' => 'დაამატეთ, წაიკითხეთ და ჩაწერეთ დამაკავშირებელი პროვაიდერები.',
    'personal-identification' => 'წაიკითხეთ პირადი ინფორმაცია, წვდომა და ანგარიშის კონფიგურაცია.',
    'accounts' => 'საფულეებზე წვდომა, ტრანზაქციების წაკითხვა და შევსების ისტორიები.',
    'shop-add' => 'დაამატეთ ახალი მაღაზია.',
    'shop-delete' => 'წაშალეთ მაღაზია.',
    'shop-ai-write' => 'საშუალებას აძლევს მომხმარებელს შეასრულოს AI ბრძანებები.',
    'shop-ai-read' => 'საშუალებას აძლევს მომხმარებელს წვდომა AI ინფორმაციაზე ბრძანებების შესრულების გარეშე.',
    'vendor-payment' => 'საშუალებას აძლევს მომხმარებელს დაამატოს გადახდების ჩანაწერები გამყიდველებისთვის ან გადარიცხოს თანხები მათი დაკავშირებული ანგარიშების მეშვეობით, როგორიცაა Stripe Connect.',
    'company-read' => 'საშუალებას აძლევს წაიკითხოს ბიზნეს პროფილის ინფორმაცია.',
    'company-write' => 'საშუალებას აძლევს წაიკითხოს და დაწეროს ბიზნეს პროფილის ინფორმაცია.',
    'agency-read' => 'იძლევა სააგენტოს ინფორმაციის წაკითხვის საშუალებას.',
    'agency-write' => 'საშუალებას აძლევს წაიკითხოს და დაწეროს სააგენტოს ინფორმაცია.',
    'note-read' => 'იძლევა მაღაზიის შენიშვნების წაკითხვის საშუალებას.',
    'note-write' => 'საშუალებას აძლევს წაიკითხოს და დაწეროს მაღაზიის შენიშვნები.',
    'developer-read' => 'დეველოპერების აქტივების წაკითხვის საშუალებას იძლევა.',
    'developer-write' => 'დეველოპერების აქტივების წაკითხვისა და ჩაწერის საშუალებას იძლევა.',
    'tokens-read' => 'წაიკითხეთ Oauth ნიშნები და კლიენტები.',
    'tokens-write' => 'დაწერეთ Oauth ნიშნები და კლიენტები.',
];
