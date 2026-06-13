<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Upeo wa msimamizi wa Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ufikiaji mdogo wa wawekezaji.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Soma maelezo ya wasifu wa mtumiaji.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Soma nambari ya simu.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Soma na usasishe anwani zilizohifadhiwa.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Sasisha wasifu wa mtumiaji.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Weka maagizo.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Tazama historia ya agizo.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Fikia kadi za zawadi.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Hariri makala.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Dhibiti arifa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Tazama orodha ya duka.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Badilisha maelezo ya duka.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Ongeza duka jipya.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Futa duka.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Dhibiti tikiti za usaidizi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Dhibiti kadi za zawadi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Tazama kadi za zawadi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Dhibiti Maswali Yanayoulizwa Mara kwa Mara.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Tazama Maswali Yanayoulizwa Mara kwa Mara.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Dhibiti kategoria.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Tazama kategoria.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Dhibiti bidhaa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Tazama bidhaa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Tazama ripoti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Dhibiti akaunti za fedha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Angalia akaunti za fedha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Hariri kurasa za duka.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Tazama kurasa za duka.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Dhibiti ghala.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Angalia ghala.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Dhibiti ufikiaji wa wafanyikazi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Tazama ufikiaji wa wafanyikazi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Tazama maagizo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Dhibiti maagizo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Dhibiti wasifu wa biashara.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Tazama wasifu wa biashara.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Dhibiti misimbo ya punguzo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Tazama misimbo ya punguzo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Dhibiti kuponi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Tazama kuponi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Dhibiti ofa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Tazama matoleo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Dhibiti urejeshaji pesa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Tazama pesa taslimu.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Dhibiti bahati nasibu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Tazama bahati nasibu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Dhibiti jumuiya.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Tazama jumuiya.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Dhibiti wateja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Tazama wateja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Dhibiti usajili.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Tazama usajili.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Tazama maagizo ya muuzaji.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Dhibiti maagizo na malipo ya wauzaji.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Dhibiti watoa huduma wa kuunganisha.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Tazama watoa huduma wa kuunganisha.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Tekeleza amri za AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Tazama habari ya AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Dhibiti malipo ya wauzaji.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Tazama malipo ya wauzaji.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Tazama wasifu wa biashara.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Dhibiti wasifu wa biashara.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Tazama maelezo ya wakala.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Dhibiti taarifa za wakala.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Tazama maelezo ya duka.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Dhibiti maelezo ya duka.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Tazama vipengee vya msanidi.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Dhibiti vipengee vya msanidi programu.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Fikia maelezo ya kibinafsi na mipangilio ya akaunti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Dhibiti mkoba na shughuli.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Tazama shughuli za mkoba.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Tazama tokeni za OAuth na wateja.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Dhibiti tokeni za OAuth na wateja.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Dhibiti mipangilio ya usalama.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Dhibiti washirika.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Tazama washirika.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Dhibiti violezo vya kuchapisha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Tazama violezo vya kuchapisha.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Dhibiti hakiki.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Tazama maoni.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Tazama maelezo ya uchumaji wa mapato.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Dhibiti maelezo ya uchumaji wa mapato.',



    'profile' => 'Soma maelezo ya wasifu ikijumuisha jina, anwani ya barua pepe, picha na hali ya uthibitishaji.',
    'phone' => 'Ufikiaji wa nambari ya mawasiliano',
    'address' => 'Soma na uhariri anwani kutoka kwa kitabu cha anwani kilichohifadhiwa',
    'buy' => 'Agiza & Agizo la Duka.',
    'order-history' => 'Soma historia ya agizo.',
    'my-gift-cards' => 'Ufikiaji wa kadi zangu za zawadi.',
    'articles' => 'Hariri Makala.',
    'notifications' => 'Tuma na upokee arifa.',
    'read-shops' => 'Soma Orodha ya Duka.',
    'shop-edit' => 'Hifadhi ufikiaji wa kuhariri.',
    'shop-contacts' => 'Pokea na uhariri fomu za mawasiliano.',
    'shop-gift-cards' => 'Kuunda, Kuhariri, na Kusimamia Kadi.',
    'shop-faqs' => 'Unda, hariri na udhibiti maswali yanayoulizwa mara kwa mara.',
    'shop-categories' => 'Kuunda, Kuhariri, na Kusimamia Kategoria.',
    'backoffice-write-products' => 'Idhinisha uundaji, uhariri na usimamizi wa bidhaa katika ofisi ya nyuma.',
    'backoffice-read-products' => 'Idhinisha ufikiaji wa kutazama orodha ya bidhaa na maelezo ya kina ya bidhaa katika ofisi ya nyuma.',
    'shop-read-reports' => 'Soma habari na ripoti.',
    'shop-socials' => 'Hariri kuhifadhi mitandao ya kijamii.',
    'shop-accounts' => 'Hariri na ufute akaunti za fedha zilizounganishwa na duka.',
    'shop-menus' => 'Badilisha menyu za duka.',
    'shop-pages' => 'Hariri kurasa za duka.',
    'shop-warehouse' => 'Hariri Ghala la Hifadhi',
    'shop-permissions' => 'Tazama na uhariri ufikiaji wa duka.',
    'shop-process-center' => 'Dhibiti maagizo yaliyopokelewa.',
    'shop-profile' => 'Dhibiti wasifu wa duka.',
    'shop-discount-code' => 'Dhibiti misimbo ya punguzo.',
    'shop-coupon' => 'Dhibiti kuponi.',
    'shop-offer' => 'Dhibiti ofa.',
    'shop-cashback' => 'Dhibiti urejeshaji pesa.',
    'shop-lottery' => 'Dhibiti bahati nasibu.',
    'shop-community' => 'Dhibiti jumuiya.',
    'shop-customers' => 'Dhibiti wateja.',
    'shop-ribbon' => 'Dhibiti usajili wa Utepe.',
    'community-read' => 'Soma jamii ya Selldone.',
    'community-write' => 'Andika jumuiya iliyouzwa.',
    'profile-write' => 'Andika maelezo ya wasifu wa mtumiaji.',
    'vendor-read' => 'Upatikanaji wa vitendo vya utimilifu wa maagizo ya muuzaji.',
    'vendor-write' => 'Badilisha maagizo, malipo na habari zingine za muuzaji.',
    'connect-providers' => 'Ongeza, soma na uandike unganisha watoa huduma.',
    'personal-identification' => 'Soma maelezo ya kibinafsi, ufikiaji na usanidi wa akaunti.',
    'accounts' => 'Upatikanaji wa pochi, shughuli za kusoma na historia za ziada.',
    'shop-add' => 'Ongeza duka jipya.',
    'shop-delete' => 'Ondoa duka.',
    'shop-ai-write' => 'Huruhusu mtumiaji kutekeleza amri za AI.',
    'shop-ai-read' => 'Huruhusu mtumiaji kufikia maelezo ya AI bila kutekeleza amri.',
    'vendor-payment' => 'Huruhusu mtumiaji kuongeza rekodi za malipo za wachuuzi au kuhamisha fedha kupitia akaunti zao zilizounganishwa kama vile Stripe Connect.',
    'company-read' => 'Inaruhusu kusoma maelezo ya wasifu wa biashara.',
    'company-write' => 'Inaruhusu kusoma na kuandika maelezo ya wasifu wa biashara.',
    'agency-read' => 'Inaruhusu kusoma maelezo ya wakala.',
    'agency-write' => 'Inaruhusu kusoma na kuandika taarifa za wakala.',
    'note-read' => 'Inaruhusu kusoma maelezo ya duka.',
    'note-write' => 'Inaruhusu kusoma na kuandika maelezo ya duka.',
    'developer-read' => 'Inaruhusu kusoma vipengee vya wasanidi programu.',
    'developer-write' => 'Inaruhusu kusoma na kuandika vipengee vya wasanidi programu.',
    'tokens-read' => 'Soma tokeni za Oauth na wateja.',
    'tokens-write' => 'Andika tokeni za Oauth na wateja.',
];
