<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Cwmpas gweinyddwr Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Mynediad cyfyngedig i fuddsoddwyr.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Darllenwch fanylion proffil defnyddiwr.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Darllenwch y rhif ffôn.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Darllen a diweddaru cyfeiriadau sydd wedi\'u cadw.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Diweddaru proffil defnyddiwr.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Gosod archebion.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Gweld hanes archebu.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Cyrchu cardiau rhodd.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Golygu erthyglau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Rheoli hysbysiadau.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Gweld rhestr siopau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Golygu manylion siop.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Ychwanegu siop newydd.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Dileu siop.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Rheoli tocynnau cymorth.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Rheoli cardiau rhodd.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Gweld cardiau rhodd.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Rheoli Cwestiynau Cyffredin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Gweld Cwestiynau Cyffredin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Rheoli categorïau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Gweld categorïau.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Rheoli cynhyrchion.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Gweld cynhyrchion.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Gweld adroddiadau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Rheoli cyfrifon ariannol.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Gweld cyfrifon ariannol.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Golygu tudalennau siop.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Gweld tudalennau siop.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Rheoli warws.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Gweld warws.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Rheoli mynediad staff.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Gweld mynediad staff.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Gweld archebion.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Rheoli archebion.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Rheoli proffil busnes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Gweld proffil busnes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Rheoli codau disgownt.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Gweld codau disgownt.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Rheoli cwponau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Gweld cwponau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Rheoli cynigion.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Gweld cynigion.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Rheoli arian yn ôl.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Gweld arian yn ôl.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Rheoli loterïau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Gweld loterïau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Rheoli cymuned.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Gweld cymuned.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Rheoli cwsmeriaid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Gweld cwsmeriaid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Rheoli tanysgrifiadau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Gweld tanysgrifiadau.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Gweld archebion gwerthwr.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Rheoli archebion a thaliadau gwerthwr.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Rheoli darparwyr cyswllt.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Gweld darparwyr cyswllt.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Gweithredu gorchmynion AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Gweld gwybodaeth AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Rheoli taliadau gwerthwr.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Gweld taliadau gwerthwr.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Gweld proffil busnes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Rheoli proffil busnes.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Gweld gwybodaeth asiantaeth.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Rheoli gwybodaeth asiantaeth.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Gweld nodiadau siop.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Rheoli nodiadau siop.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Gweld asedau datblygwr.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Rheoli asedau datblygwyr.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Cyrchu gwybodaeth bersonol a gosodiadau cyfrif.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Rheoli waled a thrafodion.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Gweld trafodion waled.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Gweld tocynnau OAuth a chleientiaid.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Rheoli tocynnau a chleientiaid OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Rheoli gosodiadau diogelwch.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Rheoli cysylltiedig.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Gweld cysylltiedig.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Rheoli templedi argraffu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Gweld templedi argraffu.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Rheoli adolygiadau.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Gweld adolygiadau.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Gweld gwybodaeth ariannol.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Rheoli gwybodaeth ariannol.',



    'profile' => 'Darllen gwybodaeth proffil gan gynnwys enw, cyfeiriad e-bost, delwedd a statws dilysu.',
    'phone' => 'Mynediad rhif cyswllt',
    'address' => 'Darllen a golygu cyfeiriad o\'r llyfr cyfeiriadau sydd wedi\'i gadw',
    'buy' => 'Archeb a Siop Archeb.',
    'order-history' => 'Darllenwch hanes archeb.',
    'my-gift-cards' => 'Mynediad i\'m cardiau rhodd.',
    'articles' => 'Golygu Erthyglau.',
    'notifications' => 'Anfon a derbyn hysbysiadau.',
    'read-shops' => 'Darllen Rhestr Siop.',
    'shop-edit' => 'Mynediad golygu storfa.',
    'shop-contacts' => 'Derbyn a golygu ffurflenni cyswllt.',
    'shop-gift-cards' => 'Creu, Golygu, a Rheoli Cardiau.',
    'shop-faqs' => 'Creu, golygu a rheoli cwestiynau cyffredin.',
    'shop-categories' => 'Creu, Golygu, a Rheoli Categorïau.',
    'backoffice-write-products' => 'Awdurdodi creu, golygu a rheoli cynhyrchion yn y swyddfa gefn.',
    'backoffice-read-products' => 'Awdurdodi mynediad i weld y rhestr cynnyrch a gwybodaeth fanwl am y cynnyrch yn y swyddfa gefn.',
    'shop-read-reports' => 'Darllen gwybodaeth ac adroddiadau.',
    'shop-socials' => 'Golygu rhwydweithiau cymdeithasol storfa.',
    'shop-accounts' => 'Golygu a dileu cyfrifon ariannol sy\'n gysylltiedig â siop.',
    'shop-menus' => 'Golygu dewislenni siop.',
    'shop-pages' => 'Golygu tudalennau siop.',
    'shop-warehouse' => 'Golygu Warws Store',
    'shop-permissions' => 'Gweld a golygu mynediad siop.',
    'shop-process-center' => 'Rheoli archebion a dderbyniwyd.',
    'shop-profile' => 'Rheoli proffiliau siopau.',
    'shop-discount-code' => 'Rheoli codau disgownt.',
    'shop-coupon' => 'Rheoli cwponau.',
    'shop-offer' => 'Rheoli cynigion.',
    'shop-cashback' => 'Rheoli arian yn ôl.',
    'shop-lottery' => 'Rheoli loterïau.',
    'shop-community' => 'Rheoli cymuned.',
    'shop-customers' => 'Rheoli cwsmeriaid.',
    'shop-ribbon' => 'Rheoli tanysgrifiadau Rhuban.',
    'community-read' => 'Darllenwch gymuned Soldone.',
    'community-write' => 'Ysgrifennwch gymuned wedi\'i gwerthu.',
    'profile-write' => 'Ysgrifennu gwybodaeth proffil defnyddiwr.',
    'vendor-read' => 'Mynediad at weithredoedd cyflawni gorchmynion gwerthwr.',
    'vendor-write' => 'Newid archebion, taliad a gwybodaeth arall y gwerthwr.',
    'connect-providers' => 'Ychwanegu, darllen ac ysgrifennu darparwyr cysylltu.',
    'personal-identification' => 'Darllen gwybodaeth bersonol, mynediad, a ffurfweddu cyfrif.',
    'accounts' => 'Mynediad i waledi, darllen trafodion a hanesion atodol.',
    'shop-add' => 'Ychwanegu siop newydd.',
    'shop-delete' => 'Tynnu siop.',
    'shop-ai-write' => 'Yn caniatáu i\'r defnyddiwr weithredu gorchmynion AI.',
    'shop-ai-read' => 'Yn caniatáu i\'r defnyddiwr gael mynediad at wybodaeth AI heb weithredu gorchmynion.',
    'vendor-payment' => 'Yn caniatáu i\'r defnyddiwr ychwanegu cofnodion taliadau ar gyfer gwerthwyr neu drosglwyddo arian trwy eu cyfrifon cysylltiedig fel Stripe Connect.',
    'company-read' => 'Caniatáu i ddarllen gwybodaeth proffil busnes.',
    'company-write' => 'Caniatáu i ddarllen ac ysgrifennu gwybodaeth proffil busnes.',
    'agency-read' => 'Caniatáu i ddarllen gwybodaeth asiantaeth.',
    'agency-write' => 'Caniatáu i ddarllen ac ysgrifennu gwybodaeth asiantaeth.',
    'note-read' => 'Caniatáu i ddarllen nodiadau siop.',
    'note-write' => 'Caniatáu i ddarllen ac ysgrifennu nodiadau siop.',
    'developer-read' => 'Caniatáu i ddarllen asedau datblygwyr.',
    'developer-write' => 'Caniatáu i ddarllen ac ysgrifennu asedau datblygwyr.',
    'tokens-read' => 'Darllenwch Oauth tocynnau a chleientiaid.',
    'tokens-write' => 'Ysgrifennu tocynnau Oauth a chleientiaid.',
];
