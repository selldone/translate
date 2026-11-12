<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone te waahanga kaiwhakahaere.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Te whakawhäiti i te urunga putea.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Pānuihia nga korero mo te kotaha kaiwhakamahi.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Pānuihia te nama waea.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Pānuihia me te whakahou i nga wahitau kua tiakina.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Whakahōu kōtaha kaiwhakamahi.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Tuhia nga ota.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Tirohia te hitori ota.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Uru ki nga kaari koha.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Whakatika tuhinga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Whakahaere whakamōhiotanga.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Tirohia te rarangi toa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Whakatikahia nga taipitopito toa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Tāpirihia he toa hou.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Mukua te toa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Whakahaerehia nga tikiti tautoko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Whakahaerehia nga kaari koha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Tirohia nga kaari koha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Whakahaerehia nga FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Tirohia nga FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Whakahaerehia nga waahanga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Tirohia nga waahanga.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Whakahaerehia nga hua.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Tirohia nga hua.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Tirohia nga purongo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Whakahaerehia nga kaute putea.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Tirohia nga kaute putea.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Whakatikaina nga wharangi toa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Tirohia nga wharangi toa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Whakahaere whare putunga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Tirohia te whare putunga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Whakahaerehia te uru atu o nga kaimahi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Tirohia te uru atu o nga kaimahi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Tirohia nga ota.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Whakahaere ota.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Whakahaere pūkete pakihi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Tirohia te kōtaha pakihi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Whakahaerehia nga waehere utu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Tirohia nga waehere utu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Whakahaerehia nga tīkitipati.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Tirohia nga tīkitipati.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Whakahaere tuku.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Tirohia nga tuku.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Whakahaerehia nga moni whakahoki.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Tirohia nga moni whakahoki.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Whakahaere rota.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Tirohia nga rota.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Whakahaerehia te hapori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Tirohia te hapori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Whakahaerehia nga kaihoko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Tirohia nga kaihoko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Whakahaere ohaurunga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Tirohia ohaurunga.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Tirohia nga ota kaihoko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Whakahaerehia nga ota kaihoko me nga utu.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Whakahaerehia nga kaiwhakarato hono.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Tirohia nga kaiwhakarato hono.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Whakahaerehia nga whakahau AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Tirohia nga korero AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Whakahaere utu kaihoko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Tirohia nga utu a nga kaihoko.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Tirohia te kōtaha pakihi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Whakahaere pūkete pakihi.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Tirohia nga korero umanga.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Whakahaerehia nga korero umanga.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Tirohia nga korero toa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Whakahaerehia nga tuhipoka toa.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Tirohia nga rawa kaiwhakawhanake.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Whakahaerehia nga rawa kaiwhakawhanake.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Uru ki nga korero whaiaro me nga tautuhinga kaute.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Whakahaere putea me nga whakawhitinga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Tirohia nga whakawhitinga putea.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Tirohia nga tohu OAuth me nga kaihoko.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Whakahaerehia nga tohu OAuth me nga kaihoko.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Whakahaerehia nga tautuhinga haumarutanga.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Whakahaerehia nga hononga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Tirohia nga hononga.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Whakahaere tātauira tā.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Tirohia nga tauira ta.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Whakahaerehia nga arotake.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Tirohia nga arotake.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Tirohia nga korero moneti.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Whakahaerehia nga korero moni.',



    'profile' => 'Panuitia nga korero moohio tae atu ki te ingoa, te wahitau imeera, te ahua me te mana motuhēhēnga.',
    'phone' => 'Te urunga nama whakapā',
    'address' => 'Pānuihia, whakatika wāhitau mai i te pukapuka wāhitau kua tiakina',
    'buy' => 'Ota & Ota Toa.',
    'order-history' => 'Pānuihia te hitori ota.',
    'my-gift-cards' => 'Te uru ki aku kaari koha.',
    'articles' => 'Whakatika Tuhinga.',
    'notifications' => 'Tukuna ka whiwhi whakamohiotanga.',
    'read-shops' => 'Pānuihia te Rarangi Toa.',
    'shop-edit' => 'Rokiroki uru whakatika.',
    'shop-contacts' => 'Whiwhi me te whakatika puka whakapā.',
    'shop-gift-cards' => 'Te Waihanga, Te Whakatikatika, me te Whakahaere Kaari.',
    'shop-faqs' => 'Waihanga, whakatika me te whakahaere i nga patai auau.',
    'shop-categories' => 'Te Waihanga, Te Whakatika, me te Whakahaere i nga waahanga.',
    'backoffice-write-products' => 'Whakamanahia te hanga, te whakatika, me te whakahaere i nga hua ki te tari o muri.',
    'backoffice-read-products' => 'Whakamanahia te uru ki te tiro i te rarangi hua me nga korero taipitopito hua kei te tari o muri.',
    'shop-read-reports' => 'Panuihia nga korero me nga purongo.',
    'shop-socials' => 'Whakatikahia nga whatunga hapori toa.',
    'shop-accounts' => 'Whakatika me te whakakore i nga kaute putea hono-toa.',
    'shop-menus' => 'Whakatika tahua toa.',
    'shop-pages' => 'Whakatikaina nga wharangi toa.',
    'shop-warehouse' => 'Whakatikaina Whare Putunga Toa',
    'shop-permissions' => 'Tirohia me te whakatika i te urunga toa.',
    'shop-process-center' => 'Whakahaerehia nga ota kua riro mai.',
    'shop-profile' => 'Whakahaerehia nga whakaaturanga toa.',
    'shop-discount-code' => 'Whakahaerehia nga waehere utu.',
    'shop-coupon' => 'Whakahaerehia nga tīkitipati.',
    'shop-offer' => 'Whakahaere tuku.',
    'shop-cashback' => 'Whakahaerehia nga moni whakahoki.',
    'shop-lottery' => 'Whakahaere rota.',
    'shop-community' => 'Whakahaerehia te hapori.',
    'shop-customers' => 'Whakahaerehia nga kaihoko.',
    'shop-ribbon' => 'Whakahaere ohaurunga Riipene.',
    'community-read' => 'Panui hapori Selldone.',
    'community-write' => 'Tuhia te hapori seldone.',
    'profile-write' => 'Tuhia nga korero korero mo te kaiwhakamahi.',
    'vendor-read' => 'Te uru ki nga mahi whakatutukitanga o nga ota kaihoko.',
    'vendor-write' => 'Hurihia nga ota, utu me etahi atu korero a te kaihoko.',
    'connect-providers' => 'Tāpiri, panui me te tuhi i nga kaiwhakarato hono.',
    'personal-identification' => 'Pānuihia nga korero whaiaro, nga urunga, me te whirihora kaute.',
    'accounts' => 'Te uru ki nga putea, panui i nga whakawhitinga me nga hitori o runga ake.',
    'shop-add' => 'Tāpirihia he toa hou.',
    'shop-delete' => 'Tangohia he toa.',
    'shop-ai-write' => 'Ka taea e te kaiwhakamahi te whakahaere i nga whakahau AI.',
    'shop-ai-read' => 'Ka taea e te kaiwhakamahi te uru atu ki nga korero AI me te kore e whakahaere whakahau.',
    'vendor-payment' => 'Ka taea e te kaiwhakamahi te taapiri i nga rekoata utu mo nga kaihoko me te whakawhiti moni ma o raatau putea hono penei i te Stripe Connect.',
    'company-read' => 'Ka taea te panui i nga korero korero pakihi.',
    'company-write' => 'Ka taea e koe te panui me te tuhi i nga korero korero pakihi.',
    'agency-read' => 'Ka taea te panui i nga korero a te umanga.',
    'agency-write' => 'Ka taea te panui me te tuhi i nga korero a te umanga.',
    'note-read' => 'Ka taea te panui i nga korero a te toa.',
    'note-write' => 'Ka taea te panui me te tuhi tuhipoka toa.',
    'developer-read' => 'Ka taea te panui i nga rawa a nga kaihanga.',
    'developer-write' => 'Ka taea te panui me te tuhi i nga rawa a nga kaihanga.',
    'tokens-read' => 'Panuitia nga tohu Oauth me nga kaihoko.',
    'tokens-write' => 'Tuhia nga tohu Oauth me nga kaihoko.',
];
