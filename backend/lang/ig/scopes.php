<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Oke nchịkwa Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Nnweta ndị ọchụnta ego amachibidoro.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Gụọ nkọwa profaịlụ onye ọrụ.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Gụọ nọmba ekwentị.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Gụọ wee kwalite adreesị echekwara.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Melite profaịlụ onye ọrụ.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Tinye iwu.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Lelee akụkọ ihe mere eme.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Nweta kaadị onyinye.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Dezie akụkọ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Jikwaa amamọkwa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Lelee ndepụta ụlọ ahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Dezie nkọwa ụlọ ahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Tinye ụlọ ahịa ọhụrụ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Hichapụ ụlọ ahịa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Jikwaa tiketi nkwado.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Jikwaa kaadị onyinye.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Lelee kaadị onyinye.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Jikwaa FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Lelee ajụjụ ọnụ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Jikwaa ngalaba.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Lelee ngalaba.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Jikwaa ngwaahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Lelee ngwaahịa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Lelee akụkọ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Jikwaa akaụntụ ego.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Lelee akaụntụ ego.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Dezie ibe ụlọ ahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Lelee ibe ụlọ ahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Jikwaa ụlọ nkwakọba ihe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Lelee ụlọ nkwakọba ihe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Jikwaa ohere ndị ọrụ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Lelee ohere ndị ọrụ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Lelee iwu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Jikwaa iwu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Jikwaa profaịlụ azụmahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Lelee profaịlụ azụmahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Jikwaa koodu mbelata ego.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Lelee koodu mbelata ego.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Jikwaa kupọns.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Lelee akwụkwọ ikike.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Jikwaa onyinye.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Lelee onyinye.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Jikwaa cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Lelee cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Jikwaa lọtrị.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Lelee lọtrị.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Jikwaa obodo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Lelee obodo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Jikwaa ndị ahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Lelee ndị ahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Jikwaa ndenye aha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Lelee ndenye aha.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Lelee iwu ndị na-ere ahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Jikwaa iwu ndị ere na ịkwụ ụgwọ.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Jikwaa ndị na-eweta njikọ.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Lelee ndị na-eweta njikọ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Mezue iwu AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Lelee ozi AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Jikwaa ịkwụ ụgwọ ndị ere.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Lelee ịkwụ ụgwọ ndị ere.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Lelee profaịlụ azụmahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Jikwaa profaịlụ azụmahịa.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Lelee ozi ụlọ ọrụ.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Jikwaa ozi ụlọ ọrụ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Lelee ndetu ụlọ ahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Jikwaa ndetu ụlọ ahịa.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Lelee akụ onye nrụpụta.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Jikwaa akụ onye nrụpụta.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Nweta ozi nkeonwe yana ntọala akaụntụ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Jikwaa obere akpa na azụmahịa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Lelee azụmahịa ego obere akpa.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Lelee akara OAuth na ndị ahịa.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Jikwaa OAuth token na ndị ahịa.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Jikwaa ntọala nchekwa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Jikwaa ndị mmekọ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Lelee ndị mmekọ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Jikwaa ndebiri mbipụta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Lelee ndebiri mbipụta.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Jikwaa nyocha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Lelee nyocha.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Lelee ozi ego.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Jikwaa ozi ịkpata ego.',



    'profile' => 'Gụọ ozi profaịlụ gụnyere aha, adreesị ozi-e, onyonyo na ọkwa nyocha.',
    'phone' => 'Nweta nọmba kọntaktị',
    'address' => 'Gụọ ma dezie adreesị site na akwụkwọ adreesị echekwara',
    'buy' => 'Order & ụlọ ahịa Order.',
    'order-history' => 'Gụọ akụkọ ihe mere eme.',
    'my-gift-cards' => 'Ịnweta kaadị onyinye m.',
    'articles' => 'Dezie akụkọ.',
    'notifications' => 'Zipu ma nata ọkwa.',
    'read-shops' => 'Gụọ Ndepụta Ụlọ Ahịa.',
    'shop-edit' => 'Nweta ndezi ụlọ ahịa.',
    'shop-contacts' => 'Anata ma dezie ụdị kọntaktị.',
    'shop-gift-cards' => 'Ịmepụta, dezie, na ijikwa kaadị.',
    'shop-faqs' => 'Mepụta, dezie ma jikwaa ajụjụ ndị a na-ajụkarị.',
    'shop-categories' => 'Ịmepụta, dezie na ijikwa ngalaba.',
    'backoffice-write-products' => 'Nye ikike imepụta, ndezi na njikwa ngwaahịa na ụlọ ọrụ azụ.',
    'backoffice-read-products' => 'Nye ikike ka ịlele ndepụta ngwaahịa yana ozi ngwaahịa zuru ezu na ụlọ ọrụ azụ.',
    'shop-read-reports' => 'Gụọ ozi na akụkọ.',
    'shop-socials' => 'Dezie netwọk mmekọrịta.',
    'shop-accounts' => 'Dezie ma hichapụ akaụntụ ego jikọtara ụlọ ahịa.',
    'shop-menus' => 'Dezie menu ụlọ ahịa.',
    'shop-pages' => 'Dezie ibe ụlọ ahịa.',
    'shop-warehouse' => 'Dezie Ụlọ nkwakọba ihe',
    'shop-permissions' => 'Lelee ma dezie ohere ụlọ ahịa.',
    'shop-process-center' => 'Jikwaa iwu natara.',
    'shop-profile' => 'Jikwaa profaịlụ ụlọ ahịa.',
    'shop-discount-code' => 'Jikwaa koodu mbelata ego.',
    'shop-coupon' => 'Jikwaa kupọns.',
    'shop-offer' => 'Jikwaa onyinye.',
    'shop-cashback' => 'Jikwaa cashbacks.',
    'shop-lottery' => 'Jikwaa lọtrị.',
    'shop-community' => 'Jikwaa obodo.',
    'shop-customers' => 'Jikwaa ndị ahịa.',
    'shop-ribbon' => 'Jikwaa ndenye aha Ribbon.',
    'community-read' => 'Gụọ obodo Selldone.',
    'community-write' => 'Dee obodo rere ere.',
    'profile-write' => 'Dee ozi profaịlụ onye ọrụ.',
    'vendor-read' => 'Ịnweta mmezu omume nke iwu ndị ere.',
    'vendor-write' => 'Gbanwee iwu, ịkwụ ụgwọ na ozi ndị ọzọ nke onye na-ere ahịa.',
    'connect-providers' => 'Tinye, gụọ na dee ndị na-eweta njikọ.',
    'personal-identification' => 'Gụọ ozi nkeonwe, ohere, na nhazi akaụntụ.',
    'accounts' => 'Ịnweta obere akpa, gụọ azụmahịa na akụkọ ihe mere eme.',
    'shop-add' => 'Tinye ụlọ ahịa ọhụrụ.',
    'shop-delete' => 'Wepu ụlọ ahịa.',
    'shop-ai-write' => 'Na-enye onye ọrụ ohere ime iwu AI.',
    'shop-ai-read' => 'Na-enye onye ọrụ ohere ịnweta ozi AI na-emezughị iwu.',
    'vendor-payment' => 'Na-enye onye ọrụ ohere ịgbakwunye ndekọ ịkwụ ụgwọ maka ndị na-ere ahịa ma ọ bụ bufee ego site na akaụntụ ejikọrọ ha dị ka Stripe Connect.',
    'company-read' => 'Na-enye ohere ịgụ ozi profaịlụ azụmahịa.',
    'company-write' => 'Na-enye ohere ịgụ na dee ozi profaịlụ azụmahịa.',
    'agency-read' => 'Na-enye ohere ịgụ ozi ụlọ ọrụ.',
    'agency-write' => 'Na-enye ohere ịgụ na ide ozi ụlọ ọrụ.',
    'note-read' => 'Na-enye ohere ịgụ ndetu ụlọ ahịa.',
    'note-write' => 'Na-enye ohere ịgụ na ide ndetu ụlọ ahịa.',
    'developer-read' => 'Na-enye ohere ịgụ akụ ndị mmepe.',
    'developer-write' => 'Na-enye ohere ịgụ na ide akụ ndị mmepe.',
    'tokens-read' => 'Gụọ akara ngosi Oauth na ndị ahịa.',
    'tokens-write' => 'Dee akara ngosi Oauth na ndị ahịa.',
];
