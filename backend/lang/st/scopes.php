<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone boholo ba batsamaisi.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'E thibetsoe ho fihlella batseteli.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Bala lintlha tsa boemo ba mosebelisi.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Bala nomoro ea mohala.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Bala le ho ntlafatsa liaterese tse bolokiloeng.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ntlafatsa boemo ba mosebelisi.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Etsa litaelo.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Sheba nalane ea odara.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Fumana likarete tsa limpho.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Fetola lingoliloeng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Laola litsebiso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Sheba lenane la mabenkele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Fetola lintlha tsa lebenkele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Kenya lebenkele le lecha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Hlakola lebenkele.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Laola litekete tsa tšehetso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Laola likarete tsa limpho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Sheba likarete tsa limpho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Laola FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Sheba FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Laola lihlopha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Sheba lihlopha.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Laola lihlahisoa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Sheba lihlahisoa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Sheba litlaleho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Laola liakhaonto tsa lichelete.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Sheba liakhaonto tsa lichelete.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Fetola maqephe a lebenkele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Sheba maqephe a lebenkele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Laola ntlo ea polokelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Sheba ntlo ea polokelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Laola phihlello ya basebetsi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Sheba phihlello ea basebetsi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Sheba litaelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Laola litaelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Laola boemo ba khoebo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Sheba boemo ba khoebo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Laola dikhoutu tsa theolelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Sheba likhoutu tsa theolelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Laola li-coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Sheba li-coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Laola litlhahiso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Sheba litlhahiso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Laola mekotla ea chelete.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Sheba li-cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Laola lilotho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Sheba lilotho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Laola sechaba.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Sheba sechaba.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Laola bareki.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Sheba bareki.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Laola lipeeletso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Sheba lipeeletso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Sheba litaelo tsa barekisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Laola litaelo tsa barekisi le litefo.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Laola bafani ba khokahano.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Sheba likhokahano tsa bafani.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Etsa litaelo tsa AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Sheba lintlha tsa AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Laola litefiso tsa barekisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Sheba litefiso tsa barekisi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Sheba boemo ba khoebo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Laola boemo ba khoebo.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Sheba lintlha tsa setsi.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Laola lintlha tsa setsi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Sheba lintlha tsa lebenkele.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Laola lintlha tsa lebenkele.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Sheba lisebelisoa tsa bahlahisi.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Laola thepa ea bahlahisi.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Fumana lintlha tsa hau le litlhophiso tsa akhaonto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Laola wallet le transactions.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Sheba lits\'ebetso tsa sepache.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Sheba li-tokens tsa OAuth le bareki.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Laola li-tokens tsa OAuth le bareki.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Laola litlhophiso tsa tshireletso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Laola mekhatlo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Sheba lihlopha.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Laola lithempleite tsa khatiso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Sheba lithempleite tsa khatiso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Laola maikutlo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Sheba maikutlo.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Sheba lintlha tsa ho etsa chelete.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Laola lintlha tsa ho etsa chelete.',



    'profile' => 'Bala lintlha tsa profaele ho kenyelletsa lebitso, aterese ea lengolo-tsoibila, setšoantšo le boemo ba netefatso.',
    'phone' => 'Fumana nomoro ea mohala',
    'address' => 'Bala \'me u fetole aterese ho tsoa bukeng ea liaterese e bolokiloeng',
    'buy' => 'Odara & odara mabenkeleng.',
    'order-history' => 'Bala nalane ea odara.',
    'my-gift-cards' => 'Ho fihlella likarete tsa ka tsa limpho.',
    'articles' => 'Fetola Lingoloa.',
    'notifications' => 'Romela le ho amohela ditsebiso.',
    'read-shops' => 'Bala List Store.',
    'shop-edit' => 'Boloka mokhoa oa ho fetola.',
    'shop-contacts' => 'Fumana le ho lokisa liforomo tsa mabitso.',
    'shop-gift-cards' => 'Ho theha, ho hlophisa, le ho laola likarete.',
    'shop-faqs' => 'Etsa, fetola, le ho laola lipotso tse botsoang khafetsa.',
    'shop-categories' => 'Ho theha, ho hlophisa le ho laola lihlopha.',
    'backoffice-write-products' => 'Fana ka tumello ea ho theha, ho hlophisa le ho laola lihlahisoa ka ofising e ka morao.',
    'backoffice-read-products' => 'Fana ka tumello ea ho bona lenane la lihlahisoa le lintlha tse felletseng ka har\'a ofisi e ka morao.',
    'shop-read-reports' => 'Bala lintlha le litlaleho.',
    'shop-socials' => 'Fetola marang-rang a lebenkeleng.',
    'shop-accounts' => 'Fetola le ho hlakola liakhaonto tsa lichelete tse amanang le lebenkele.',
    'shop-menus' => 'Fetola menyetla ea mabenkele.',
    'shop-pages' => 'Fetola maqephe a lebenkele.',
    'shop-warehouse' => 'Fetola Warehouse ea Lebenkele',
    'shop-permissions' => 'Sheba le ho lokisa mokhoa oa ho kena lebenkeleng.',
    'shop-process-center' => 'Laola litaelo tse amohetsoeng.',
    'shop-profile' => 'Laola boemo ba lebenkele.',
    'shop-discount-code' => 'Laola dikhoutu tsa theolelo.',
    'shop-coupon' => 'Laola li-coupons.',
    'shop-offer' => 'Laola litlhahiso.',
    'shop-cashback' => 'Laola mekotla ea chelete.',
    'shop-lottery' => 'Laola lilotho.',
    'shop-community' => 'Laola sechaba.',
    'shop-customers' => 'Laola bareki.',
    'shop-ribbon' => 'Laola lipeeletso tsa Ribone.',
    'community-read' => 'Bala sechaba sa Selldone.',
    'community-write' => 'Ngola selldone sechaba.',
    'profile-write' => 'Ngola lintlha tsa boemo ba mosebelisi.',
    'vendor-read' => 'Ho fihlella liketsong tsa ho phethahatsa litaelo tsa barekisi.',
    'vendor-write' => 'Fetola litaelo, tefo le lintlha tse ling tsa morekisi.',
    'connect-providers' => 'Eketsa, bala le ho ngola hokela bafani.',
    'personal-identification' => 'Bala lintlha tsa hau, phihlello, le litlhophiso tsa akhaonto.',
    'accounts' => 'Phihlello ea li-wallet, bala li-transactions le nalane ea holimo.',
    'shop-add' => 'Kenya lebenkele le lecha.',
    'shop-delete' => 'Tlosa lebenkele.',
    'shop-ai-write' => 'E lumella mosebelisi ho phethahatsa litaelo tsa AI.',
    'shop-ai-read' => 'E lumella mosebelisi ho fihlella tlhahisoleseling ea AI ntle le ho phethahatsa litaelo.',
    'vendor-payment' => 'E lumella mosebelisi ho kenya lirekoto tsa litefo bakeng sa barekisi kapa ho fetisetsa chelete ka li-account tsa bona tse hoketsoeng joalo ka Stripe Connect.',
    'company-read' => 'E lumella ho bala lintlha tsa boemo ba khoebo.',
    'company-write' => 'E lumella ho bala le ho ngola lintlha tsa boemo ba khoebo.',
    'agency-read' => 'E lumella ho bala lintlha tsa setsi.',
    'agency-write' => 'E lumella ho bala le ho ngola lintlha tsa setsi.',
    'note-read' => 'E lumella ho bala lintlha tsa lebenkele.',
    'note-write' => 'E lumella ho bala le ho ngola lintlha tsa lebenkele.',
    'developer-read' => 'E lumella ho bala lisebelisoa tsa batho ba ntlafatsang.',
    'developer-write' => 'E lumella ho bala le ho ngola lisebelisoa tsa bahlahisi.',
    'tokens-read' => 'Bala li-tokens tsa Oauth le bareki.',
    'tokens-write' => 'Ngola li-tokens tsa Oauth le bareki.',
];
