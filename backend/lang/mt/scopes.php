<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone ambitu amministratur.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Aċċess ristrett għall-investitur.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Aqra d-dettalji tal-profil tal-utent.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Aqra n-numru tat-telefon.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Aqra u aġġorna l-indirizzi salvati.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Aġġorna l-profil tal-utent.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Poġġi ordnijiet.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Ara l-istorja tal-ordnijiet.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Aċċess kards rigal.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Editja l-artikoli.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Immaniġġja n-notifiki.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Ara l-lista tal-ħanut.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Editja d-dettalji tal-ħanut.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Żid ħanut ġdid.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Ħassar il-ħanut.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Immaniġġja l-biljetti ta \'appoġġ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Immaniġġja karti tar-rigali.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Ara karti tar-rigali.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Immaniġġja l-FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Ara l-FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Immaniġġja l-kategoriji.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Ara l-kategoriji.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Immaniġġja l-prodotti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Ara l-prodotti.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ara rapporti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Immaniġġja kontijiet finanzjarji.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Ara l-kontijiet finanzjarji.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Editja paġni tal-maħżen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Ara l-paġni tal-maħżen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Immaniġġja l-maħżen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ara l-maħżen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Immaniġġja l-aċċess tal-persunal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Ara l-aċċess tal-persunal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Ara l-ordnijiet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Immaniġġja l-ordnijiet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Immaniġġja l-profil tan-negozju.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Ara l-profil tan-negozju.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Immaniġġja kodiċijiet ta \'skont.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Ara kodiċijiet ta\' skont.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Immaniġġja l-kupuni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Ara kupuni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Immaniġġja l-offerti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Ara l-offerti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Immaniġġja cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Ara cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Immaniġġja lotteriji.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Ara lotteriji.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Immaniġġja l-komunità.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Ara l-komunità.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Immaniġġja l-klijenti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Ara l-klijenti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Immaniġġja l-abbonamenti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Ara l-abbonamenti.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Ara l-ordnijiet tal-bejjiegħ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Immaniġġja l-ordnijiet u l-ħlasijiet tal-bejjiegħ.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Immaniġġja l-fornituri tal-konnessjoni.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Ara l-fornituri tal-konnessjoni.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Eżegwixxi kmandi AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Ara l-informazzjoni tal-AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Immaniġġja l-ħlasijiet tal-bejjiegħ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Ara l-ħlasijiet tal-bejjiegħ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Ara l-profil tan-negozju.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Immaniġġja l-profil tan-negozju.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Ara l-informazzjoni tal-aġenzija.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Immaniġġja l-informazzjoni tal-aġenzija.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Ara n-noti tal-ħanut.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Immaniġġja n-noti tal-ħanut.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Ara l-assi tal-iżviluppatur.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Immaniġġja l-assi tal-iżviluppatur.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Aċċessa informazzjoni personali u settings tal-kont.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Immaniġġja l-kartiera u t-tranżazzjonijiet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Ara t-tranżazzjonijiet tal-kartiera.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Ara t-tokens u l-klijenti OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Immaniġġja tokens u klijenti OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Immaniġġja s-settings tas-sigurtà.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Immaniġġja l-affiljati.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Ara l-affiljati.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Immaniġġja mudelli tal-istampar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Ara mudelli tal-istampar.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Immaniġġja reviżjonijiet.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Ara r-reviżjonijiet.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Ara l-informazzjoni dwar il-monetizzazzjoni.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Immaniġġja l-informazzjoni dwar il-monetizzazzjoni.',



    'profile' => 'Aqra l-informazzjoni tal-profil inkluż l-isem, l-indirizz tal-email, l-immaġni u l-istatus tal-awtentikazzjoni.',
    'phone' => 'Aċċess għan-numru ta\' kuntatt',
    'address' => 'Aqra u editja l-indirizz mill-ktieb tal-indirizzi salvat',
    'buy' => 'Ordni u Ordni tal-Ħanut.',
    'order-history' => 'Aqra l-istorja tal-ordni.',
    'my-gift-cards' => 'Aċċess għal giftcards tiegħi.',
    'articles' => 'Editja l-Artikoli.',
    'notifications' => 'Ibgħat u tirċievi notifiki.',
    'read-shops' => 'Aqra Lista tal-Aħżen.',
    'shop-edit' => 'Aċċess għall-editjar tal-maħżen.',
    'shop-contacts' => 'Irċievi u editja formoli ta\' kuntatt.',
    'shop-gift-cards' => 'Ħolqien, Editjar, u Ġestjoni tal-Kards.',
    'shop-faqs' => 'Oħloq, editja, u mmaniġġja l-mistoqsijiet frekwenti.',
    'shop-categories' => 'Ħolqien, Editjar, u Ġestjoni ta\' Kategoriji.',
    'backoffice-write-products' => 'Awtorizza l-ħolqien, l-editjar, u l-ġestjoni ta \'prodotti fil-back office.',
    'backoffice-read-products' => 'Awtorizza l-aċċess biex tara l-lista tal-prodotti u l-informazzjoni dettaljata tal-prodott fil-back office.',
    'shop-read-reports' => 'Aqra l-informazzjoni u r-rapporti.',
    'shop-socials' => 'Editja n-netwerks soċjali tal-maħżen.',
    'shop-accounts' => 'Editja u ħassar il-kontijiet finanzjarji marbuta mal-maħżen.',
    'shop-menus' => 'Editja menus tal-maħżen.',
    'shop-pages' => 'Editja paġni tal-maħżen.',
    'shop-warehouse' => 'Edit Aħżen Maħżen',
    'shop-permissions' => 'Ara u editja l-aċċess għall-maħżen.',
    'shop-process-center' => 'Immaniġġja l-ordnijiet riċevuti.',
    'shop-profile' => 'Immaniġġja l-profili tal-ħwienet.',
    'shop-discount-code' => 'Immaniġġja kodiċijiet ta \'skont.',
    'shop-coupon' => 'Immaniġġja l-kupuni.',
    'shop-offer' => 'Immaniġġja l-offerti.',
    'shop-cashback' => 'Immaniġġja cashbacks.',
    'shop-lottery' => 'Immaniġġja lotteriji.',
    'shop-community' => 'Immaniġġja l-komunità.',
    'shop-customers' => 'Immaniġġja l-klijenti.',
    'shop-ribbon' => 'Immaniġġja l-abbonamenti ta\' Ribbon.',
    'community-read' => 'Aqra l-komunità Selldone.',
    'community-write' => 'Ikteb selldone komunità.',
    'profile-write' => 'Ikteb l-informazzjoni tal-profil tal-utent.',
    'vendor-read' => 'Aċċess għal azzjonijiet ta\' twettiq tal-ordnijiet tal-bejjiegħ.',
    'vendor-write' => 'Bidla l-ordnijiet, ħlas u informazzjoni oħra tal-bejjiegħ.',
    'connect-providers' => 'Żid, aqra u ikteb connect providers.',
    'personal-identification' => 'Aqra l-informazzjoni personali, l-aċċessi, u l-konfigurazzjoni tal-kont.',
    'accounts' => 'Aċċess għal kartieri, aqra tranżazzjonijiet u storja ta \'top-up.',
    'shop-add' => 'Żid ħanut ġdid.',
    'shop-delete' => 'Neħħi ħanut.',
    'shop-ai-write' => 'Jippermetti lill-utent jesegwixxi kmandi AI.',
    'shop-ai-read' => 'Jippermetti lill-utent jaċċessa informazzjoni AI mingħajr ma jesegwixxi kmandi.',
    'vendor-payment' => 'Jippermetti lill-utent iżid rekords tal-ħlasijiet għall-bejjiegħa jew jittrasferixxi fondi permezz tal-kontijiet konnessi tagħhom bħal Stripe Connect.',
    'company-read' => 'Jippermetti li taqra l-informazzjoni tal-profil tan-negozju.',
    'company-write' => 'Jippermetti li taqra u tikteb informazzjoni dwar il-profil tan-negozju.',
    'agency-read' => 'Jippermetti li taqra l-informazzjoni tal-aġenzija.',
    'agency-write' => 'Jippermetti li taqra u tikteb informazzjoni tal-aġenzija.',
    'note-read' => 'Jippermetti li taqra n-noti tal-ħanut.',
    'note-write' => 'Jippermetti li taqra u tikteb noti tal-ħanut.',
    'developer-read' => 'Jippermetti li taqra l-assi tal-iżviluppaturi.',
    'developer-write' => 'Jippermetti li taqra u tikteb l-assi tal-iżviluppaturi.',
    'tokens-read' => 'Aqra tokens u klijenti Oauth.',
    'tokens-write' => 'Ikteb tokens Oauth u klijenti.',
];
