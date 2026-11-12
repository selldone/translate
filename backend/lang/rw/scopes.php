<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone urwego rwabayobozi.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Kubuzwa gushora imari.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Soma ibisobanuro byumukoresha.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Soma nimero ya terefone.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Soma kandi uvugurure aderesi zabitswe.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Kuvugurura umwirondoro wabakoresha.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Tanga amabwiriza.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Reba amateka yatondekanye.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Shakisha amakarita yimpano.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Hindura ingingo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Gucunga imenyesha.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Reba urutonde rwamaduka.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Hindura ibisobanuro birambuye.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Ongeraho iduka rishya.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Siba iduka.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Gucunga amatike.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Gucunga amakarita yimpano.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Reba amakarita yimpano.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Gucunga ibibazo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Reba Ibibazo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Gucunga ibyiciro.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Reba ibyiciro.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Gucunga ibicuruzwa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Reba ibicuruzwa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Reba raporo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Gucunga konti yimari.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Reba konti yimari.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Hindura impapuro zububiko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Reba impapuro zububiko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gucunga ububiko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Reba ububiko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Gucunga abakozi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Reba uburyo abakozi babona.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Reba amabwiriza.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Gucunga amabwiriza.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Gucunga umwirondoro wubucuruzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Reba umwirondoro wubucuruzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Gucunga kode yo kugabanya.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Reba kode yo kugabanya.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Gucunga ama coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Reba udupapuro.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Gucunga ibyifuzo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Reba ibyifuzo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gucunga amafaranga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Reba amafaranga yagaruwe.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Gucunga tombora.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Reba ubufindo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Gucunga umuryango.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Reba umuryango.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Gucunga abakiriya.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Reba abakiriya.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Gucunga abiyandikishije.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Reba abiyandikishije.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Reba ibicuruzwa byabacuruzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Gucunga ibicuruzwa n\'abacuruzi.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Gucunga abatanga imiyoboro.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Reba abatanga amahuza.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Kora amategeko ya AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Reba amakuru ya AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Gucunga ibicuruzwa byabacuruzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Reba ubwishyu bwabacuruzi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Reba umwirondoro wubucuruzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Gucunga umwirondoro wubucuruzi.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Reba amakuru yikigo.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Gucunga amakuru yikigo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Reba inyandiko zamaduka.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Gucunga inoti.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Reba umutungo wabateza imbere.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Gucunga umutungo wabateza imbere.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Shikira amakuru yihariye hamwe na konte ya konte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Gucunga ikotomoni n\'ibikorwa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Reba ibicuruzwa.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Reba ibimenyetso bya OAuth hamwe nabakiriya.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Gucunga ibimenyetso bya OAuth hamwe nabakiriya.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Gucunga igenamiterere ry\'umutekano.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Gucunga amashami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Reba amashirahamwe.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Gucunga inyandikorugero.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Reba inyandikorugero zanditse.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Gucunga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Reba ibisobanuro.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Reba amakuru ya monetisation.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Gucunga amakuru ya monetisation.',



    'profile' => 'Soma amakuru yumwirondoro harimo izina, aderesi imeri, ishusho hamwe no kwemeza imiterere.',
    'phone' => 'Menyesha nomero',
    'address' => 'Soma kandi uhindure aderesi uhereye kubitabo byabitswe',
    'buy' => 'Tegeka & Amaduka.',
    'order-history' => 'Soma amateka.',
    'my-gift-cards' => 'Kugera ku mpano zanjye.',
    'articles' => 'Hindura ingingo.',
    'notifications' => 'Ohereza kandi wakire imenyesha.',
    'read-shops' => 'Soma Urutonde rwububiko.',
    'shop-edit' => 'Ububiko bwo guhindura ububiko.',
    'shop-contacts' => 'Kwakira no guhindura impapuro zabugenewe.',
    'shop-gift-cards' => 'Gukora, Guhindura, no gucunga amakarita.',
    'shop-faqs' => 'Kurema, guhindura, no gucunga ibibazo bikunze kubazwa.',
    'shop-categories' => 'Kurema, Guhindura, no kuyobora ibyiciro.',
    'backoffice-write-products' => 'Emera kurema, gutunganya, no gucunga ibicuruzwa mubiro byinyuma.',
    'backoffice-read-products' => 'Emera kubona uburenganzira bwo kureba urutonde rwibicuruzwa nibisobanuro birambuye mubiro byinyuma.',
    'shop-read-reports' => 'Soma amakuru na raporo.',
    'shop-socials' => 'Hindura ububiko bwimbuga rusange.',
    'shop-accounts' => 'Hindura kandi usibe konti yimari ihuza ububiko.',
    'shop-menus' => 'Hindura ububiko.',
    'shop-pages' => 'Hindura impapuro zububiko.',
    'shop-warehouse' => 'Hindura ububiko bwububiko',
    'shop-permissions' => 'Reba kandi uhindure uburyo bwo kubona ububiko.',
    'shop-process-center' => 'Gucunga byakiriwe.',
    'shop-profile' => 'Gucunga imyirondoro yububiko.',
    'shop-discount-code' => 'Gucunga kode yo kugabanya.',
    'shop-coupon' => 'Gucunga ama coupons.',
    'shop-offer' => 'Gucunga ibyifuzo.',
    'shop-cashback' => 'Gucunga amafaranga.',
    'shop-lottery' => 'Gucunga tombora.',
    'shop-community' => 'Gucunga umuryango.',
    'shop-customers' => 'Gucunga abakiriya.',
    'shop-ribbon' => 'Gucunga abiyandikishije.',
    'community-read' => 'Soma umuryango wa Selldone.',
    'community-write' => 'Andika umuryango wa selldone.',
    'profile-write' => 'Andika amakuru yumukoresha amakuru.',
    'vendor-read' => 'Kugera kubikorwa byo gutumiza ibicuruzwa.',
    'vendor-write' => 'Hindura ibicuruzwa, ubwishyu nandi makuru yumucuruzi.',
    'connect-providers' => 'Ongeraho, soma kandi wandike abatanga imiyoboro.',
    'personal-identification' => 'Soma amakuru yihariye, kwinjira, hamwe na konte ya konte.',
    'accounts' => 'Kugera kumufuka, soma ibyakozwe hamwe namateka yo hejuru.',
    'shop-add' => 'Ongeraho iduka rishya.',
    'shop-delete' => 'Kuraho iduka.',
    'shop-ai-write' => 'Emerera umukoresha gukora amategeko ya AI.',
    'shop-ai-read' => 'Emerera umukoresha kubona amakuru ya AI adakoresheje amategeko.',
    'vendor-payment' => 'Emerera umukoresha kongeramo inyandiko zishyurwa kubacuruzi cyangwa kohereza amafaranga ukoresheje konti zabo zihuza nka Stripe ihuza.',
    'company-read' => 'Emerera gusoma amakuru yubucuruzi.',
    'company-write' => 'Emerera gusoma no kwandika amakuru yubucuruzi.',
    'agency-read' => 'Emerera gusoma amakuru yikigo.',
    'agency-write' => 'Emerera gusoma no kwandika amakuru yikigo.',
    'note-read' => 'Emerera gusoma inoti.',
    'note-write' => 'Emerera gusoma no kwandika inoti.',
    'developer-read' => 'Emerera gusoma umutungo wabateza imbere.',
    'developer-write' => 'Emerera gusoma no kwandika umutungo wabateza imbere.',
    'tokens-read' => 'Soma ibimenyetso bya Oauth nabakiriya.',
    'tokens-write' => 'Andika ibimenyetso bya Oauth nabakiriya.',
];
