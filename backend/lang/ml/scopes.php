<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone അഡ്മിനിസ്ട്രേറ്റർ സ്കോപ്പ്.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'നിയന്ത്രിത നിക്ഷേപക പ്രവേശനം.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'ഉപയോക്തൃ പ്രൊഫൈൽ വിശദാംശങ്ങൾ വായിക്കുക.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ഫോൺ നമ്പർ വായിക്കുക.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'സംരക്ഷിച്ച വിലാസങ്ങൾ വായിച്ച് അപ്ഡേറ്റ് ചെയ്യുക.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ഉപയോക്തൃ പ്രൊഫൈൽ അപ്ഡേറ്റ് ചെയ്യുക.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ഓർഡറുകൾ സ്ഥാപിക്കുക.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ഓർഡർ ചരിത്രം കാണുക.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'സമ്മാന കാർഡുകൾ ആക്‌സസ് ചെയ്യുക.',

    AuthServiceProvider::SCOPE_ARTICLES => 'ലേഖനങ്ങൾ എഡിറ്റ് ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'അറിയിപ്പുകൾ നിയന്ത്രിക്കുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'ഷോപ്പ് ലിസ്റ്റ് കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ഷോപ്പ് വിശദാംശങ്ങൾ എഡിറ്റ് ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'പുതിയ കട ചേർക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ഷോപ്പ് ഇല്ലാതാക്കുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'പിന്തുണ ടിക്കറ്റുകൾ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'സമ്മാന കാർഡുകൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'സമ്മാന കാർഡുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'പതിവുചോദ്യങ്ങൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'പതിവുചോദ്യങ്ങൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'വിഭാഗങ്ങൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'വിഭാഗങ്ങൾ കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ഉൽപ്പന്നങ്ങൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ഉൽപ്പന്നങ്ങൾ കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'റിപ്പോർട്ടുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'സാമ്പത്തിക അക്കൗണ്ടുകൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'സാമ്പത്തിക അക്കൗണ്ടുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'സ്റ്റോർ പേജുകൾ എഡിറ്റ് ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'സ്റ്റോർ പേജുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'വെയർഹൗസ് കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'വെയർഹൗസ് കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'ജീവനക്കാരുടെ പ്രവേശനം നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'സ്റ്റാഫ് ആക്സസ് കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ഓർഡറുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ഓർഡറുകൾ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ബിസിനസ് പ്രൊഫൈൽ മാനേജ് ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ബിസിനസ് പ്രൊഫൈൽ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'കിഴിവ് കോഡുകൾ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ഡിസ്കൗണ്ട് കോഡുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'കൂപ്പണുകൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'കൂപ്പണുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ഓഫറുകൾ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ഓഫറുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'ക്യാഷ്ബാക്കുകൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'ക്യാഷ്ബാക്ക് കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ലോട്ടറികൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ലോട്ടറികൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'കമ്മ്യൂണിറ്റി നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'കമ്മ്യൂണിറ്റി കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ഉപഭോക്താക്കളെ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ഉപഭോക്താക്കളെ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'സബ്‌സ്‌ക്രിപ്‌ഷനുകൾ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'സബ്സ്ക്രിപ്ഷനുകൾ കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'വെണ്ടർ ഓർഡറുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'വെണ്ടർ ഓർഡറുകളും പേയ്‌മെൻ്റുകളും നിയന്ത്രിക്കുക.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'കണക്റ്റ് ദാതാക്കളെ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'കണക്റ്റ് ദാതാക്കളെ കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI കമാൻഡുകൾ എക്സിക്യൂട്ട് ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI വിവരങ്ങൾ കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'വെണ്ടർ പേയ്‌മെൻ്റുകൾ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'വെണ്ടർ പേയ്‌മെൻ്റുകൾ കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ബിസിനസ് പ്രൊഫൈൽ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ബിസിനസ് പ്രൊഫൈൽ മാനേജ് ചെയ്യുക.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ഏജൻസി വിവരങ്ങൾ കാണുക.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ഏജൻസി വിവരങ്ങൾ കൈകാര്യം ചെയ്യുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'ഷോപ്പ് കുറിപ്പുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'ഷോപ്പ് നോട്ടുകൾ കൈകാര്യം ചെയ്യുക.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'ഡെവലപ്പർ അസറ്റുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'ഡെവലപ്പർ അസറ്റുകൾ നിയന്ത്രിക്കുക.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'വ്യക്തിഗത വിവരങ്ങളും അക്കൗണ്ട് ക്രമീകരണങ്ങളും ആക്സസ് ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'വാലറ്റും ഇടപാടുകളും നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'വാലറ്റ് ഇടപാടുകൾ കാണുക.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth ടോക്കണുകളും ക്ലയൻ്റുകളും കാണുക.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth ടോക്കണുകളും ക്ലയൻ്റുകളും നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'സുരക്ഷാ ക്രമീകരണങ്ങൾ നിയന്ത്രിക്കുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'അഫിലിയേറ്റുകളെ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'അഫിലിയേറ്റുകൾ കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'പ്രിൻ്റ് ടെംപ്ലേറ്റുകൾ കൈകാര്യം ചെയ്യുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'പ്രിൻ്റ് ടെംപ്ലേറ്റുകൾ കാണുക.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'അവലോകനങ്ങൾ നിയന്ത്രിക്കുക.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'അവലോകനങ്ങൾ കാണുക.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'ധനസമ്പാദന വിവരം കാണുക.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'ധനസമ്പാദന വിവരങ്ങൾ കൈകാര്യം ചെയ്യുക.',



    'profile' => 'പേര്, ഇമെയിൽ വിലാസം, ചിത്രം, പ്രാമാണീകരണ നില എന്നിവ ഉൾപ്പെടെയുള്ള പ്രൊഫൈൽ വിവരങ്ങൾ വായിക്കുക.',
    'phone' => 'ബന്ധപ്പെടാനുള്ള നമ്പർ ആക്സസ്',
    'address' => 'സംരക്ഷിച്ച വിലാസ പുസ്തകത്തിൽ നിന്ന് വിലാസം വായിക്കുകയും എഡിറ്റ് ചെയ്യുകയും ചെയ്യുക',
    'buy' => 'ഓർഡർ & ഷോപ്പ് ഓർഡർ.',
    'order-history' => 'ഓർഡർ ചരിത്രം വായിക്കുക.',
    'my-gift-cards' => 'എൻ്റെ സമ്മാന കാർഡുകളിലേക്കുള്ള ആക്‌സസ്.',
    'articles' => 'ലേഖനങ്ങൾ എഡിറ്റ് ചെയ്യുക.',
    'notifications' => 'അറിയിപ്പുകൾ അയയ്‌ക്കുകയും സ്വീകരിക്കുകയും ചെയ്യുക.',
    'read-shops' => 'സ്റ്റോർ ലിസ്റ്റ് വായിക്കുക.',
    'shop-edit' => 'സ്റ്റോർ എഡിറ്റിംഗ് ആക്സസ്.',
    'shop-contacts' => 'കോൺടാക്റ്റ് ഫോമുകൾ സ്വീകരിക്കുക, എഡിറ്റ് ചെയ്യുക.',
    'shop-gift-cards' => 'കാർഡുകൾ സൃഷ്ടിക്കുക, എഡിറ്റുചെയ്യുക, കൈകാര്യം ചെയ്യുക.',
    'shop-faqs' => 'പതിവായി ചോദിക്കുന്ന ചോദ്യങ്ങൾ സൃഷ്‌ടിക്കുക, എഡിറ്റ് ചെയ്യുക, നിയന്ത്രിക്കുക.',
    'shop-categories' => 'വിഭാഗങ്ങൾ സൃഷ്ടിക്കുക, എഡിറ്റുചെയ്യുക, കൈകാര്യം ചെയ്യുക.',
    'backoffice-write-products' => 'ബാക്ക് ഓഫീസിലെ ഉൽപ്പന്നങ്ങളുടെ സൃഷ്‌ടി, എഡിറ്റിംഗ്, മാനേജ്‌മെൻ്റ് എന്നിവയ്ക്ക് അംഗീകാരം നൽകുക.',
    'backoffice-read-products' => 'ബാക്ക് ഓഫീസിൽ ഉൽപ്പന്ന ലിസ്റ്റും വിശദമായ ഉൽപ്പന്ന വിവരങ്ങളും കാണാനുള്ള ആക്‌സസ്സ് അംഗീകരിക്കുക.',
    'shop-read-reports' => 'വിവരങ്ങളും റിപ്പോർട്ടുകളും വായിക്കുക.',
    'shop-socials' => 'സ്റ്റോർ സോഷ്യൽ നെറ്റ്‌വർക്കുകൾ എഡിറ്റ് ചെയ്യുക.',
    'shop-accounts' => 'സ്‌റ്റോർ-ലിങ്ക് ചെയ്‌ത സാമ്പത്തിക അക്കൗണ്ടുകൾ എഡിറ്റ് ചെയ്‌ത് ഇല്ലാതാക്കുക.',
    'shop-menus' => 'സ്റ്റോർ മെനുകൾ എഡിറ്റ് ചെയ്യുക.',
    'shop-pages' => 'സ്റ്റോർ പേജുകൾ എഡിറ്റ് ചെയ്യുക.',
    'shop-warehouse' => 'സ്റ്റോർ വെയർഹൗസ് എഡിറ്റ് ചെയ്യുക',
    'shop-permissions' => 'സ്റ്റോർ ആക്സസ് കാണുക, എഡിറ്റ് ചെയ്യുക.',
    'shop-process-center' => 'ലഭിച്ച ഓർഡറുകൾ നിയന്ത്രിക്കുക.',
    'shop-profile' => 'സ്റ്റോർ പ്രൊഫൈലുകൾ നിയന്ത്രിക്കുക.',
    'shop-discount-code' => 'കിഴിവ് കോഡുകൾ നിയന്ത്രിക്കുക.',
    'shop-coupon' => 'കൂപ്പണുകൾ കൈകാര്യം ചെയ്യുക.',
    'shop-offer' => 'ഓഫറുകൾ നിയന്ത്രിക്കുക.',
    'shop-cashback' => 'ക്യാഷ്ബാക്കുകൾ കൈകാര്യം ചെയ്യുക.',
    'shop-lottery' => 'ലോട്ടറികൾ കൈകാര്യം ചെയ്യുക.',
    'shop-community' => 'കമ്മ്യൂണിറ്റി നിയന്ത്രിക്കുക.',
    'shop-customers' => 'ഉപഭോക്താക്കളെ നിയന്ത്രിക്കുക.',
    'shop-ribbon' => 'റിബൺ സബ്‌സ്‌ക്രിപ്‌ഷനുകൾ നിയന്ത്രിക്കുക.',
    'community-read' => 'Selldone കമ്മ്യൂണിറ്റി വായിക്കുക.',
    'community-write' => 'വിൽക്കപ്പെട്ട കമ്മ്യൂണിറ്റി എഴുതുക.',
    'profile-write' => 'ഉപയോക്തൃ പ്രൊഫൈൽ വിവരങ്ങൾ എഴുതുക.',
    'vendor-read' => 'വെണ്ടർ ഓർഡറുകളുടെ പൂർത്തീകരണ പ്രവർത്തനങ്ങളിലേക്കുള്ള ആക്സസ്.',
    'vendor-write' => 'വെണ്ടറുടെ ഓർഡറുകൾ, പേയ്‌മെൻ്റ്, മറ്റ് വിവരങ്ങൾ എന്നിവ മാറ്റുക.',
    'connect-providers' => 'കണക്റ്റ് ദാതാക്കളെ ചേർക്കുക, വായിക്കുക, എഴുതുക.',
    'personal-identification' => 'വ്യക്തിഗത വിവരങ്ങൾ, ആക്‌സസുകൾ, അക്കൗണ്ട് കോൺഫിഗറേഷൻ എന്നിവ വായിക്കുക.',
    'accounts' => 'വാലറ്റുകളിലേക്കുള്ള ആക്‌സസ്, ഇടപാടുകൾ, ടോപ്പ്-അപ്പ് ചരിത്രങ്ങൾ എന്നിവ വായിക്കുക.',
    'shop-add' => 'പുതിയ കട ചേർക്കുക.',
    'shop-delete' => 'ഒരു കട നീക്കം ചെയ്യുക.',
    'shop-ai-write' => 'AI കമാൻഡുകൾ എക്സിക്യൂട്ട് ചെയ്യാൻ ഉപയോക്താവിനെ അനുവദിക്കുന്നു.',
    'shop-ai-read' => 'കമാൻഡുകൾ നടപ്പിലാക്കാതെ തന്നെ AI വിവരങ്ങൾ ആക്സസ് ചെയ്യാൻ ഉപയോക്താവിനെ അനുവദിക്കുന്നു.',
    'vendor-payment' => 'വെണ്ടർമാർക്കായി പേയ്‌മെൻ്റ് റെക്കോർഡുകൾ ചേർക്കുന്നതിനോ സ്‌ട്രൈപ്പ് കണക്ട് പോലുള്ള അവരുടെ ബന്ധിപ്പിച്ച അക്കൗണ്ടുകൾ വഴി ഫണ്ട് ട്രാൻസ്ഫർ ചെയ്യുന്നതിനോ ഉപയോക്താവിനെ അനുവദിക്കുന്നു.',
    'company-read' => 'ബിസിനസ്സ് പ്രൊഫൈൽ വിവരങ്ങൾ വായിക്കാൻ അനുവദിക്കുന്നു.',
    'company-write' => 'ബിസിനസ്സ് പ്രൊഫൈൽ വിവരങ്ങൾ വായിക്കാനും എഴുതാനും അനുവദിക്കുന്നു.',
    'agency-read' => 'ഏജൻസി വിവരങ്ങൾ വായിക്കാൻ അനുവദിക്കുന്നു.',
    'agency-write' => 'ഏജൻസി വിവരങ്ങൾ വായിക്കാനും എഴുതാനും അനുവദിക്കുന്നു.',
    'note-read' => 'ഷോപ്പ് കുറിപ്പുകൾ വായിക്കാൻ അനുവദിക്കുന്നു.',
    'note-write' => 'ഷോപ്പ് കുറിപ്പുകൾ വായിക്കാനും എഴുതാനും അനുവദിക്കുന്നു.',
    'developer-read' => 'ഡെവലപ്പർമാരുടെ അസറ്റുകൾ വായിക്കാൻ അനുവദിക്കുന്നു.',
    'developer-write' => 'ഡെവലപ്പർമാരുടെ അസറ്റുകൾ വായിക്കാനും എഴുതാനും അനുവദിക്കുന്നു.',
    'tokens-read' => 'Oauth ടോക്കണുകളും ക്ലയൻ്റുകളും വായിക്കുക.',
    'tokens-write' => 'Oauth ടോക്കണുകളും ക്ലയൻ്റുകളും എഴുതുക.',
];
