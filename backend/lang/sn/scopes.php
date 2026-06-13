<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administrator chiyero.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Kurambidzwa kuwana investor.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Verenga nhoroondo yevashandisi.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Verenga nhamba yefoni.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Verenga uye uvandudze kero dzakachengetwa.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Gadziridza chimiro chemushandisi.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Isa maodha.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Ona nhoroondo yekuraira.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Svika makadhi ezvipo.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Rongedza zvinyorwa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Manage zviziviso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Ona chitoro rondedzero.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Rongedza zvinhu zvechitoro.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Wedzera chitoro chitsva.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Delete shop.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Tonga matikiti ekutsigira.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Ronga makadhi ezvipo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Ona makadhi ezvipo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Manage FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Ona FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Manage zvikamu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Ona zvikamu.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Manage zvigadzirwa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Ona zvigadzirwa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ona mishumo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Tonga maakaundi emari.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Ona maakaundi emari.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Rongedza mapeji echitoro.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Ona mapeji ezvitoro.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Manage warehouse.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ona warehouse.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Tonga kuwana kwevashandi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Ona kuwanikwa kwevashandi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Ona maodha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Manage maodha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Manage bhizinesi profile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Ona bhizinesi profile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Manage discounts codes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Ona makodhi edhisheni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Manage makuponi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Ona makuponi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Manage zvinopihwa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Ona zvinopihwa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gadzirisa mari yakadzoserwa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Ona cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Tonga marotari.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Ona marotari.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Manage community.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'View community.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Manage vatengi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Ona vatengi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Manage zvinyoreso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Ona zvakanyoreswa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Ona mirairo yevatengesi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Tonga maodha evatengesi uye kubhadhara.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Manage kubatanidza vanopa.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Ona kubatanidza vanopa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Ita mirairo yeAI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Ona ruzivo rweAI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Tonga kubhadhara kwevatengesi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Ona kubhadhara kwevatengesi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Ona bhizinesi profile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Manage bhizinesi profile.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Ona ruzivo rwesangano.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Manage agency information.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Ona zvinyorwa zvechitoro.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Ronga zvinyorwa zvechitoro.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Ona zvinhu zvemugadziri.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Manage developer assets.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Svika ruzivo rwemunhu uye zvigadziriso zveakaundi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Manage wallet uye kutengeserana.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Wona wallet transactions.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Wona OAuth tokeni uye vatengi.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Tonga OAuth tokeni uye vatengi.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Ronga zvigadziriso zvekuchengetedza.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Manage affiliates.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'View affiliates.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Manage print templates.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Ona matemplate ekudhindwa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Manage wongororo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Ona wongororo.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Ona ruzivo rwekuita mari.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Ronga ruzivo rwekuita mari.',



    'profile' => 'Verenga ruzivo rweprofile kusanganisira zita, email kero, mufananidzo uye chimiro chechokwadi.',
    'phone' => 'Bata nhamba yekuwana',
    'address' => 'Verenga uye gadzirisa kero kubva mubhuku rekero rakachengetwa',
    'buy' => 'Checkout uye isa maodha.',
    'order-history' => 'Verenga nhoroondo yekuodha.',
    'my-gift-cards' => 'Kusvikirwa nemakadhi angu ezvipo.',
    'articles' => 'Edit Zvinyorwa.',
    'notifications' => 'Tumira uye ugamuchire zviziviso.',
    'read-shops' => 'Verenga Store List.',
    'shop-edit' => 'Chengetedza kuwana editing.',
    'shop-contacts' => 'Gamuchira uye gadzirisa mafomu ekuonana.',
    'shop-gift-cards' => 'Kugadzira, Kugadzirisa, uye Kugadzirisa Makadhi.',
    'shop-faqs' => 'Gadzira, gadzirisa, uye gadzirisa mibvunzo inowanzo bvunzwa.',
    'shop-categories' => 'Kugadzira, Kugadzirisa, uye Kugadzirisa Zvikamu.',
    'backoffice-write-products' => 'Bvumira kugadzirwa, kugadzirisa, uye manejimendi ezvigadzirwa muhofisi yekuseri.',
    'backoffice-read-products' => 'Bvumira mukana wekuona rondedzero yezvigadzirwa uye ruzivo rwakadzama rwechigadzirwa muhofisi yekuseri.',
    'shop-read-reports' => 'Verenga ruzivo nemishumo.',
    'shop-socials' => 'Rongedza chitoro masocial network.',
    'shop-accounts' => 'Rongedza uye udzime maakaundi emari ane chitoro.',
    'shop-menus' => 'Rongedza mamenu ezvitoro.',
    'shop-pages' => 'Rongedza mapeji echitoro.',
    'shop-warehouse' => 'Rongedza Store Warehouse',
    'shop-permissions' => 'Ona uye gadzirisa kupinda muchitoro.',
    'shop-process-center' => 'Tonga maodha akagamuchirwa.',
    'shop-profile' => 'Ronga nhoroondo dzechitoro.',
    'shop-discount-code' => 'Manage discounts codes.',
    'shop-coupon' => 'Manage makuponi.',
    'shop-offer' => 'Manage zvinopihwa.',
    'shop-cashback' => 'Gadzirisa mari yakadzoserwa.',
    'shop-lottery' => 'Tonga marotari.',
    'shop-community' => 'Manage community.',
    'shop-customers' => 'Manage vatengi.',
    'shop-ribbon' => 'Tonga kunyoreswa kweRibhoni.',
    'community-read' => 'Verenga Selldone nharaunda.',
    'community-write' => 'Nyora selldone community.',
    'profile-write' => 'Nyora ruzivo rwemushandisi.',
    'vendor-read' => 'Kuwana kuzadzisa zviito zvevatengesi mirairo.',
    'vendor-write' => 'Shandura maodha, kubhadhara uye rumwe ruzivo rwemutengesi.',
    'connect-providers' => 'Wedzera, verenga uye nyora batanidza vanopa.',
    'personal-identification' => 'Verenga ruzivo rwemunhu, kuwana, uye account config.',
    'accounts' => 'Kuwana wallet, kuverenga kutengeserana uye kumusoro-up nhoroondo.',
    'shop-add' => 'Wedzera chitoro chitsva.',
    'shop-delete' => 'Bvisa chitoro.',
    'shop-ai-write' => 'Inobvumira mushandisi kuita mirairo yeAI.',
    'shop-ai-read' => 'Inobvumira mushandisi kuwana ruzivo rweAI pasina kuita mirairo.',
    'vendor-payment' => 'Inobvumira mushandisi kuwedzera marekodhi ekubhadhara kune vatengesi kana kutamisa mari kuburikidza nemaakaundi avo akabatana seStripe Connect.',
    'company-read' => 'Inobvumira kuverenga ruzivo rwebhizinesi.',
    'company-write' => 'Inobvumira kuverenga nekunyora ruzivo rwebhizinesi.',
    'agency-read' => 'Inobvumira kuverenga ruzivo rwesangano.',
    'agency-write' => 'Inobvumira kuverenga nekunyora ruzivo rwesangano.',
    'note-read' => 'Inobvumira kuverenga zvinyorwa zvechitoro.',
    'note-write' => 'Inobvumira kuverenga nekunyora zvinyorwa zvechitoro.',
    'developer-read' => 'Inobvumira kuverenga zvigadzirwa zvevagadziri.',
    'developer-write' => 'Inobvumira kuverenga nekunyora zvinhu zvevagadziri.',
    'tokens-read' => 'Verenga maOauth tokens uye vatengi.',
    'tokens-write' => 'Nyora Oauth tokeni uye vatengi.',
];
