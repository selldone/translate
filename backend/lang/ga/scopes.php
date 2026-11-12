<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Raon feidhme riarthóir Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Rochtain teoranta d\'infheisteoirí.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Léigh sonraí próifíle úsáideora.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Léigh uimhir theileafóin.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Léigh agus nuashonraigh seoltaí sábháilte.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Nuashonraigh próifíl úsáideora.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Orduithe a chur.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Féach ar stair na n-orduithe.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Rochtain a fháil ar chártaí bronntanais.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Cuir ailt in eagar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Bainistigh fógraí.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Féach ar liosta na siopaí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Cuir sonraí an tsiopa in eagar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Cuir siopa nua leis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Scrios siopa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Bainistigh ticéid tacaíochta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Bainistigh cártaí bronntanais.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Féach ar chártaí bronntanais.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Bainistigh CCanna.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Féach ar na Ceisteanna Coitianta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Bainistigh catagóirí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Féach ar na catagóirí.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Bainistigh táirgí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Féach ar tháirgí.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Féach ar thuarascálacha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Bainistigh cuntais airgeadais.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Féach ar chuntais airgeadais.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Cuir leathanaigh siopa in eagar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Féach ar leathanaigh siopa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Bainistigh stóras.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Féach ar an stóras.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Bainistigh rochtain foirne.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Féach ar rochtain na foirne.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Féach ar orduithe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Orduithe a bhainistiú.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Bainistigh próifíl gnó.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Féach ar phróifíl ghnó.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Bainistigh cóid lascaine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Féach ar na cóid lascaine.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Bainistigh cúpóin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Féach cúpóin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Bainistigh tairiscintí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Féach ar thairiscintí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Bainistigh aisíocaíochtaí airgid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Féach ar aisíocaíochtaí airgid.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Bainistigh crannchuir.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Féach ar chrannchuir.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Bainistigh pobail.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Féach ar an bpobal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Custaiméirí a bhainistiú.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Féach ar chustaiméirí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Bainistigh síntiúis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Féach ar shíntiúis.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Féach ar orduithe díoltóirí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Bainistigh orduithe agus íocaíochtaí díoltóra.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Bainistigh soláthraithe ceangail.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Féach ar sholáthraithe ceangail.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Orduithe AI a fhorghníomhú.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Féach ar fhaisnéis AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Bainistigh íocaíochtaí díoltóirí.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Féach ar íocaíochtaí díoltóirí.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Féach ar phróifíl ghnó.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Bainistigh próifíl gnó.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Féach ar fhaisnéis gníomhaireachta.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Bainistigh faisnéis gníomhaireachta.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Féach ar nótaí siopa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Bainistigh nótaí siopa.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Féach ar shócmhainní an fhorbróra.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Bainistigh sócmhainní forbróra.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Faigh rochtain ar fhaisnéis phearsanta agus ar shocruithe cuntais.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Bainistigh sparán agus idirbhearta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Féach ar idirbhearta sparán.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Féach ar comharthaí OAuth agus cliaint.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Bainistigh comharthaí OAuth agus cliaint.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Bainistigh socruithe slándála.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Bainistigh cleamhnaithe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Féach ar chleamhnaithe.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Bainistigh teimpléid priontála.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Féach teimpléid priontála.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Bainistigh léirmheasanna.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Féach ar léirmheasanna.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Féach ar fhaisnéis airgeadú.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Bainistigh faisnéis airgeadaíochta.',



    'profile' => 'Léigh faisnéis phróifíle lena n-áirítear ainm, seoladh ríomhphoist, íomhá agus stádas fíordheimhnithe.',
    'phone' => 'Rochtain uimhir theagmhála',
    'address' => 'Léigh agus cuir in eagar seoladh ón leabhar seoltaí sábháilte',
    'buy' => 'Ordú & Ordú Siopa.',
    'order-history' => 'Léigh stair ordaithe.',
    'my-gift-cards' => 'Rochtain ar mo chártaí bronntanais.',
    'articles' => 'Cuir Airteagail in Eagar.',
    'notifications' => 'Seol agus faigh fógraí.',
    'read-shops' => 'Léigh Liosta Siopaí.',
    'shop-edit' => 'Rochtain eagarthóireacht siopa.',
    'shop-contacts' => 'Faigh agus cuir in eagar foirmeacha teagmhála.',
    'shop-gift-cards' => 'Cártaí a Chruthú, a Eagarthóireacht agus a Bhainistiú.',
    'shop-faqs' => 'Cruthaigh, cuir in eagar agus bainistigh ceisteanna coitianta.',
    'shop-categories' => 'Catagóirí a Chruthú, a Eagarthóireacht agus a Bhainistiú.',
    'backoffice-write-products' => 'Cruthú, eagarthóireacht agus bainistiú táirgí sa chúloifig a údarú.',
    'backoffice-read-products' => 'Ceadaigh rochtain chun féachaint ar liosta na dtáirgí agus ar fhaisnéis mhionsonraithe an táirge sa chúloifig.',
    'shop-read-reports' => 'Léigh faisnéis agus tuarascálacha.',
    'shop-socials' => 'Cuir líonraí sóisialta siopa in eagar.',
    'shop-accounts' => 'Cuir cuntais airgeadais atá nasctha le siopa in eagar agus scrios.',
    'shop-menus' => 'Cuir biachláir siopa in eagar.',
    'shop-pages' => 'Cuir leathanaigh siopa in eagar.',
    'shop-warehouse' => 'Cuir Stóras Store in eagar',
    'shop-permissions' => 'Féach ar agus cuir in eagar rochtain siopa.',
    'shop-process-center' => 'Bainistigh orduithe faighte.',
    'shop-profile' => 'Bainistigh próifílí siopa.',
    'shop-discount-code' => 'Bainistigh cóid lascaine.',
    'shop-coupon' => 'Bainistigh cúpóin.',
    'shop-offer' => 'Bainistigh tairiscintí.',
    'shop-cashback' => 'Bainistigh aisíocaíochtaí airgid.',
    'shop-lottery' => 'Bainistigh crannchuir.',
    'shop-community' => 'Bainistigh pobail.',
    'shop-customers' => 'Custaiméirí a bhainistiú.',
    'shop-ribbon' => 'Bainistigh síntiúis Ribbon.',
    'community-read' => 'Léigh pobal Soldone.',
    'community-write' => 'Scríobh pobail díolta.',
    'profile-write' => 'Scríobh faisnéis phróifíl úsáideora.',
    'vendor-read' => 'Rochtain ar ghníomhartha comhlíonta orduithe díoltóirí.',
    'vendor-write' => 'Orduithe a athrú, íocaíocht agus faisnéis eile an díoltóra.',
    'connect-providers' => 'Soláthraithe ceangail a chur leis, a léamh agus a scríobh.',
    'personal-identification' => 'Léigh faisnéis phearsanta, rochtain agus cumraíocht chuntais.',
    'accounts' => 'Rochtain ar sparán, léamh idirbhearta agus stair bhreisithe.',
    'shop-add' => 'Cuir siopa nua leis.',
    'shop-delete' => 'Bain siopa.',
    'shop-ai-write' => 'Ligeann sé don úsáideoir orduithe AI a fhorghníomhú.',
    'shop-ai-read' => 'Ligeann sé don úsáideoir rochtain a fháil ar fhaisnéis AI gan orduithe a fhorghníomhú.',
    'vendor-payment' => 'Ligeann sé don úsáideoir taifid íocaíochtaí do dhíoltóirí a chur leis nó cistí a aistriú trína gcuntais nasctha amhail Stripe Connect.',
    'company-read' => 'Ligeann sé faisnéis phróifíle gnó a léamh.',
    'company-write' => 'Ligeann sé faisnéis phróifíle gnó a léamh agus a scríobh.',
    'agency-read' => 'Ligeann sé faisnéis gníomhaireachta a léamh.',
    'agency-write' => 'Ligeann sé faisnéis gníomhaireachta a léamh agus a scríobh.',
    'note-read' => 'Ligeann sé nótaí siopa a léamh.',
    'note-write' => 'Ligeann sé nótaí siopa a léamh agus a scríobh.',
    'developer-read' => 'Ceadaíonn a léamh forbróirí sócmhainní.',
    'developer-write' => 'Ceadaíonn a léamh agus a scríobh forbróirí sócmhainní.',
    'tokens-read' => 'Léigh Oauth comharthaí agus cliaint.',
    'tokens-write' => 'Scríobh Oauth comharthaí agus cliaint.',
];
