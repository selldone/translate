<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone woyang\'anira',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Kuchepetsa mwayi wopeza ndalama.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Werengani zambiri za mbiri ya ogwiritsa ntchito.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Werengani nambala yafoni.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Werengani ndikusintha ma adilesi osungidwa.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Sinthani mbiri yanu.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Ikani maoda.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Onani mbiri yakale.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Pezani makadi amphatso.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Sinthani zolemba.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Sinthani zidziwitso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Onani mndandanda wamashopu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Sinthani zambiri zamalonda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Onjezani sitolo yatsopano.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Chotsani shopu.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Sinthani matikiti othandizira.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Konzani makadi amphatso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Onani makadi amphatso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Sinthani ma FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Onani FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Sinthani magulu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Onani magulu.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Sinthani katundu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Onani malonda.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Onani malipoti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Sinthani maakaunti azachuma.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Onani maakaunti azachuma.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Sinthani masamba asitolo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Onani masamba ogulitsa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Sinthani nyumba yosungiramo zinthu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Onani nyumba yosungiramo zinthu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Sinthani mwayi wogwira ntchito.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Onani mwayi wogwira ntchito.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Onani maoda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Sinthani maoda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Konzani mbiri yabizinesi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Onani mbiri yabizinesi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Sinthani makhodi ochotsera.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Onani ma code ochotsera.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Sinthani makuponi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Onani makuponi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Sinthani zotsatsa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Onani zotsatsa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Sinthani zobweza ndalama.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Onani zobweza ndalama.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Sinthani malotale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Onani malotale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Sinthani gulu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Onani gulu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Sinthani makasitomala.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Onani makasitomala.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Konzani zolembetsa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Onani zolembetsa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Onani ma oda ogulitsa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Sinthani maoda a ogulitsa ndi malipiro.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Sinthani othandizira olumikizirana.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Onani opereka olumikizana.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Pangani malamulo a AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Onani zambiri za AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Sinthani malipiro a ogulitsa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Onani malipiro a ogulitsa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Onani mbiri yabizinesi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Konzani mbiri yabizinesi.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Onani zambiri za bungwe.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Sinthani zambiri zabungwe.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Onani zolemba zamalonda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Sinthani zolemba zasitolo.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Onani katundu wamapulogalamu.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Sinthani katundu wamapulogalamu.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Pezani zambiri zanu komanso zokonda za akaunti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Sinthani chikwama chandalama ndi zochitika.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Onani zochitika zachikwama.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Onani zizindikiro za OAuth ndi makasitomala.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Sinthani zizindikiro za OAuth ndi makasitomala.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Konzani makonda achitetezo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Sinthani ogwirizana.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Onani ogwirizana.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Konzani zosindikiza.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Onani ma tempuleti osindikizira.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Sinthani ndemanga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Onani ndemanga.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Onani zambiri zopezera ndalama.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Konzani zokhudza ndalama.',



    'profile' => 'Werengani zambiri za mbiri yanu kuphatikiza dzina, imelo adilesi, chithunzi ndi mawonekedwe otsimikizira.',
    'phone' => 'Kufikira manambala',
    'address' => 'Werengani ndikusintha maadiresi kuchokera m\'buku la maadiresi losungidwa',
    'buy' => 'Lipirani ndi kuyitanitsa maoda.',
    'order-history' => 'Werengani mbiri ya maoda.',
    'my-gift-cards' => 'Kufikira makadi anga amphatso.',
    'articles' => 'Sinthani Nkhani.',
    'notifications' => 'Tumizani ndi kulandira zidziwitso.',
    'read-shops' => 'Werengani List List.',
    'shop-edit' => 'Sungani zosintha.',
    'shop-contacts' => 'Landirani ndikusintha mafomu olumikizana nawo.',
    'shop-gift-cards' => 'Kupanga, Kusintha, ndi Kuwongolera Makhadi.',
    'shop-faqs' => 'Pangani, sinthani, ndi kukonza mafunso omwe amafunsidwa pafupipafupi.',
    'shop-categories' => 'Kupanga, Kusintha, ndi Kuwongolera Magawo.',
    'backoffice-write-products' => 'Lolani kupanga, kusintha, ndi kuyang\'anira zinthu muofesi yakumbuyo.',
    'backoffice-read-products' => 'Perekani chilolezo chofikira kuti muwone mndandanda wazogulitsa ndi zambiri zazinthu kuofesi yakumbuyo.',
    'shop-read-reports' => 'Werengani zambiri ndi malipoti.',
    'shop-socials' => 'Sinthani malo ochezera a sitolo.',
    'shop-accounts' => 'Sinthani ndi kufufuta maakaunti azachuma olumikizidwa ndi sitolo.',
    'shop-menus' => 'Sinthani mindandanda yazakudya.',
    'shop-pages' => 'Sinthani masamba asitolo.',
    'shop-warehouse' => 'Sinthani Malo Osungirako Malo',
    'shop-permissions' => 'Onani ndikusintha sitolo.',
    'shop-process-center' => 'Sinthani maoda omwe alandilidwa.',
    'shop-profile' => 'Konzani mbiri ya sitolo.',
    'shop-discount-code' => 'Sinthani makhodi ochotsera.',
    'shop-coupon' => 'Sinthani makuponi.',
    'shop-offer' => 'Sinthani zotsatsa.',
    'shop-cashback' => 'Sinthani zobweza ndalama.',
    'shop-lottery' => 'Sinthani malotale.',
    'shop-community' => 'Sinthani gulu.',
    'shop-customers' => 'Sinthani makasitomala.',
    'shop-ribbon' => 'Konzani zolembetsa za Riboni.',
    'community-read' => 'Werengani gulu la Selldone.',
    'community-write' => 'Lembani gulu la selldone.',
    'profile-write' => 'Lembani zambiri za mbiri yanu.',
    'vendor-read' => 'Kupeza kukwaniritsidwa kwa maoda a ogulitsa.',
    'vendor-write' => 'Sinthani malamulo, malipiro ndi zina zambiri za wogulitsa.',
    'connect-providers' => 'Onjezani, werengani ndi kulemba gwirizanitsani opereka.',
    'personal-identification' => 'Werengani zambiri zanu, zolowa, ndi makonzedwe a akaunti.',
    'accounts' => 'Kupeza ma wallet, kuwerenga zochitika ndi mbiri yowonjezereka.',
    'shop-add' => 'Onjezani sitolo yatsopano.',
    'shop-delete' => 'Chotsani sitolo.',
    'shop-ai-write' => 'Amalola wogwiritsa ntchito kutsatira malamulo a AI.',
    'shop-ai-read' => 'Amalola wosuta kupeza zambiri za AI popanda kutsatira malamulo.',
    'vendor-payment' => 'Amalola wogwiritsa ntchito kuwonjezera marekodi olipira kwa ogulitsa kapena kusamutsa ndalama kudzera pamaakaunti awo olumikizidwa monga Stripe Connect.',
    'company-read' => 'Amalola kuti muwerenge zambiri za mbiri yabizinesi.',
    'company-write' => 'Amalola kuwerenga ndi kulemba zambiri zokhudza bizinesi.',
    'agency-read' => 'Amalola kuwerenga zambiri za bungwe.',
    'agency-write' => 'Amalola kuwerenga ndi kulemba zambiri za bungwe.',
    'note-read' => 'Amalola kuwerenga zolemba zamalonda.',
    'note-write' => 'Amalola kuwerenga ndi kulemba zolemba za sitolo.',
    'developer-read' => 'Imakulolani kuti muwerenge katundu wa opanga.',
    'developer-write' => 'Amalola kuwerenga ndi kulemba zinthu zomanga.',
    'tokens-read' => 'Werengani zizindikiro za Oauth ndi makasitomala.',
    'tokens-write' => 'Lembani zizindikiro za Oauth ndi makasitomala.',
];
