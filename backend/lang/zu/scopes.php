<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone ububanzi bomlawuli.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ukufinyelela komtshali kukhawulelwe.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Funda imininingwane yephrofayela yomsebenzisi.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Funda inombolo yocingo.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Funda futhi ubuyekeze amakheli alondoloziwe.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Buyekeza iphrofayela yomsebenzisi.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Faka ama-oda.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Buka umlando we-oda.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Finyelela amakhadi esipho.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Hlela izindatshana.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Phatha izaziso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Buka uhlu lwezitolo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Hlela imininingwane yesitolo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Engeza isitolo esisha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Susa isitolo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Phatha amathikithi osekelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Phatha amakhadi esipho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Buka amakhadi esipho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Phatha ama-FAQ.
I-',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Buka ama-FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Phatha izigaba.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Buka izigaba.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Phatha imikhiqizo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Buka imikhiqizo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Buka imibiko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Phatha ama-akhawunti ezezimali.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Buka ama-akhawunti ezezimali.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Hlela amakhasi esitolo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Buka amakhasi esitolo.
I-',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Phatha inqolobane.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Buka inqolobane.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Phatha ukufinyelela kwabasebenzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Buka ukufinyelela kwabasebenzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Buka ama-oda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Phatha ama-oda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Phatha iphrofayela yebhizinisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Buka iphrofayili yebhizinisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Phatha amakhodi esaphulelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Buka amakhodi esaphulelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Phatha amakhuphoni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Buka amakhuphoni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Phatha okunikezwayo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Buka okunikezwayo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Phatha ukubuyiselwa kwemali.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Buka ukubuyiselwa kwemali.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Phatha amalotho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Buka ilotho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Phatha umphakathi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Buka umphakathi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Phatha amakhasimende.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Buka amakhasimende.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Phatha okubhaliselwe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Buka okubhaliselwe.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Buka ama-oda omthengisi.
I-',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Phatha ama-oda omthengisi nezinkokhelo.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Phatha abahlinzeki bokuxhuma.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Buka abahlinzeki bokuxhuma.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Yenza imiyalo ye-AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Buka ulwazi lwe-AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Phatha izinkokhelo zabathengisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Buka izinkokhelo zomthengisi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Buka iphrofayili yebhizinisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Phatha iphrofayela yebhizinisi.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Buka imininingwane ye-ejensi.
I-',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Phatha imininingwane ye-ejensi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Buka amanothi esitolo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Phatha amanothi esitolo.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Buka amafa kanjiniyela.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Phatha amafa kanjiniyela.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Finyelela kulwazi lomuntu siqu kanye nezilungiselelo ze-akhawunti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Phatha isikhwama semali nezinto ezenziwayo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Buka ukuthengiselana kwe-wallet.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Buka amathokheni we-OAuth namakhasimende.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Phatha amathokheni we-OAuth namakhasimende.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Phatha izilungiselelo zokuphepha.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Phatha amanxusa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Buka amanxusa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Phatha izifanekiso zokuphrinta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Buka izifanekiso zokuphrinta.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Phatha izibuyekezo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Buka izibuyekezo.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Buka ulwazi lokwenza imali.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Phatha ulwazi lokwenza imali.',



    'profile' => 'Funda imininingwane yephrofayili efaka igama, ikheli le-imeyili, isithombe nesimo sokuqinisekisa.',
    'phone' => 'Ukufinyelela inombolo yokuxhumana',
    'address' => 'Funda futhi uhlele ikheli encwadini yamakheli elondoloziwe',
    'buy' => 'Oda & Thenga Oda.',
    'order-history' => 'Funda umlando we-oda.',
    'my-gift-cards' => 'Ukufinyelela kumakhadi wami wesipho.',
    'articles' => 'Hlela Izihloko.',
    'notifications' => 'Thumela futhi wamukele izaziso.',
    'read-shops' => 'Funda Uhlu Lwesitolo.',
    'shop-edit' => 'Gcina ukufinyelela kokuhlela.',
    'shop-contacts' => 'Thola futhi uhlele amafomu okuxhumana.',
    'shop-gift-cards' => 'Ukudala, ukuhlela, nokuphatha amakhadi.',
    'shop-faqs' => 'Dala, hlela, futhi uphathe imibuzo evame ukubuzwa.',
    'shop-categories' => 'Ukudala, ukuhlela, nokuphatha izigaba.',
    'backoffice-write-products' => 'Gunyaza ukudalwa, ukuhlela, nokuphathwa kwemikhiqizo ehhovisi elingemuva.',
    'backoffice-read-products' => 'Gunyaza ukufinyelela ukuze ubuke uhlu lwemikhiqizo kanye nemininingwane yomkhiqizo enemininingwane ehhovisi elingemuva.',
    'shop-read-reports' => 'Funda ulwazi nemibiko.',
    'shop-socials' => 'Hlela amanethiwekhi omphakathi esitolo.',
    'shop-accounts' => 'Hlela futhi ususe ama-akhawunti ezezimali axhunywe esitolo.',
    'shop-menus' => 'Hlela amamenyu esitolo.',
    'shop-pages' => 'Hlela amakhasi esitolo.',
    'shop-warehouse' => 'Hlela Isitolo Sempahla',
    'shop-permissions' => 'Buka futhi uhlele ukufinyelela esitolo.',
    'shop-process-center' => 'Phatha ama-oda atholiwe.',
    'shop-profile' => 'Phatha amaphrofayili esitolo.',
    'shop-discount-code' => 'Phatha amakhodi esaphulelo.',
    'shop-coupon' => 'Phatha amakhuphoni.',
    'shop-offer' => 'Phatha okunikezwayo.',
    'shop-cashback' => 'Phatha ukubuyiselwa kwemali.',
    'shop-lottery' => 'Phatha amalotho.',
    'shop-community' => 'Phatha umphakathi.',
    'shop-customers' => 'Phatha amakhasimende.',
    'shop-ribbon' => 'Phatha okubhaliselwe kweRibhoni.',
    'community-read' => 'Funda umphakathi we-Selldone.',
    'community-write' => 'Bhala umphakathi othengisiwe.',
    'profile-write' => 'Bhala imininingwane yephrofayili yomsebenzisi.',
    'vendor-read' => 'Ukufinyelela ezenzweni zokugcwalisa zama-oda omthengisi.',
    'vendor-write' => 'Shintsha ama-oda, inkokhelo kanye nolunye ulwazi lomthengisi.',
    'connect-providers' => 'Engeza, funda futhi ubhale xhuma abahlinzeki.',
    'personal-identification' => 'Funda ulwazi lomuntu siqu, ukufinyelela, nokulungiselelwa kwe-akhawunti.',
    'accounts' => 'Ukufinyelela kuma-wallet, ukufunda ukuthengiselana kanye nemilando ephezulu.',
    'shop-add' => 'Engeza isitolo esisha.',
    'shop-delete' => 'Susa isitolo.',
    'shop-ai-write' => 'Ivumela umsebenzisi ukuthi akhiphe imiyalo ye-AI.',
    'shop-ai-read' => 'Ivumela umsebenzisi ukuthi afinyelele ulwazi lwe-AI ngaphandle kokukhipha imiyalo.',
    'vendor-payment' => 'Ivumela umsebenzisi ukuthi engeze amarekhodi ezinkokhelo kubathengisi noma adlulisele izimali ngama-akhawunti abo axhunyiwe njenge-Stripe Connect.',
    'company-read' => 'Ivumela ukufunda imininingwane yephrofayela yebhizinisi.',
    'company-write' => 'Ivumela ukufunda nokubhala imininingwane yephrofayela yebhizinisi.',
    'agency-read' => 'Ivumela ukufunda imininingwane ye-ejensi.',
    'agency-write' => 'Ivumela ukufunda nokubhala imininingwane ye-ejensi.',
    'note-read' => 'Ivumela ukufunda amanothi esitolo.',
    'note-write' => 'Ivumela ukufunda nokubhala amanothi esitolo.',
    'developer-read' => 'Ivumela ukufunda amafa onjiniyela.',
    'developer-write' => 'Ivumela ukufunda nokubhala amafa onjiniyela.',
    'tokens-read' => 'Funda amathokheni we-Oauth namakhasimende.',
    'tokens-write' => 'Bhala amathokheni we-Oauth namakhasimende.',
];
