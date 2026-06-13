<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone umda womlawuli.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ufikelelo lwabatyali-mali oluthintelweyo.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Funda iinkcukacha zeprofayile yomsebenzisi.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Funda inombolo yefowuni.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Funda kwaye uhlaziye iidilesi ezigciniweyo.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Hlaziya iprofayile yomsebenzisi.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Faka iiodolo.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Jonga imbali ye-odolo.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Ukufikelela amakhadi esipho.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Hlela amanqaku.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Lawula izaziso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Jonga uluhlu lweevenkile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Hlela iinkcukacha zevenkile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Yongeza ivenkile entsha.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Cima ivenkile.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Lawula amatikiti enkxaso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Lawula amakhadi esipho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Jonga amakhadi esipho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Lawula FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Jonga ii-FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Lawula iindidi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Jonga iindidi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Lawula iimveliso.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Jonga iimveliso.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Jonga iingxelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Lawula ii-akhawunti zemali.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Jonga iiakhawunti zemali.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Hlela amaphepha evenkile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Jonga amaphepha evenkile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Lawula indawo yokugcina impahla.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Jonga indawo yokugcina impahla.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Ukulawula ukufikelela kwabasebenzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Jonga ukufikelela kwabasebenzi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Jonga iiodolo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Lawula iiodolo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Lawula iprofayile yeshishini.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Jonga iprofayile yeshishini.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Lawula iikhowudi zesaphulelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Jonga iikhowudi zesaphulelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Lawula amakhuphoni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Jonga amakhuphoni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Lawula unikezelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Jonga izibonelelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Lawula iimbuyiselo zemali.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Jonga i-cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Lawula ilotho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Jonga ilotho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Lawula uluntu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Jonga uluntu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Lawula abathengi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Jonga abathengi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Lawula imirhumo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Jonga imirhumo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Jonga imiyalelo yomthengisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Lawula imiyalelo yabathengisi kunye neentlawulo.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Lawula ababoneleli boqhagamshelwano.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Jonga ukudibanisa ababoneleli.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Yenza imiyalelo ye-AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Jonga ulwazi lwe-AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Lawula iintlawulo zabathengisi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Jonga iintlawulo zabathengisi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Jonga iprofayile yeshishini.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Lawula iprofayile yeshishini.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Jonga ulwazi lwe-arhente.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Lawula ulwazi lwe-arhente.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Jonga amanqaku evenkile.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Lawula amanqaku evenkile.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Jonga ii-asethi zomphuhlisi.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Lawula ii-asethi zomphuhlisi.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Fikelela kulwazi lomntu kunye nesetingi zeakhawunti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Lawula isipaji kunye neentengiselwano.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Jonga iintengiselwano zesipaji.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Jonga iithokheni ze-OAuth kunye nabaxhasi.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Lawula iithokheni ze-OAuth kunye nabaxhasi.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Lawula useto lokhuseleko.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Lawula amaqabane.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Jonga amaqabane.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Lawula itemplates zoshicilelo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Jonga itemplates zoshicilelo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Lawula uphononongo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Jonga uphononongo.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Jonga ulwazi lokwenza imali.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Lawula ulwazi lokwenza imali.',



    'profile' => 'Funda ulwazi lweprofayile kuquka igama, idilesi ye-imeyile, umfanekiso kunye nobume bobunyani.',
    'phone' => 'Ukufikelela kwinombolo yoqhagamshelwano',
    'address' => 'Funda kwaye uhlele idilesi kwincwadi yeedilesi egciniweyo',
    'buy' => 'Iodolo kunye ne-Order yevenkile.',
    'order-history' => 'Funda imbali yeodolo.',
    'my-gift-cards' => 'Ukufikelela kumakhadi am esipho.',
    'articles' => 'Hlela amaNqaku.',
    'notifications' => 'Thumela kwaye ufumane izaziso.',
    'read-shops' => 'Funda uLuhlu lweVenkile.',
    'shop-edit' => 'Gcina ufikelelo lokuhlela.',
    'shop-contacts' => 'Fumana kwaye uhlele iifom zoqhagamshelwano.',
    'shop-gift-cards' => 'Ukwenza, ukuhlela, kunye nokulawula amakhadi.',
    'shop-faqs' => 'Yila, hlela, kwaye ulawule imibuzo edla ngokubuzwa.',
    'shop-categories' => 'Ukuyila, ukuhlela, kunye nokulawula amacandelo.',
    'backoffice-write-products' => 'Ukugunyazisa ukwenziwa, ukuhlela, kunye nolawulo lweemveliso kwi-ofisi engasemva.',
    'backoffice-read-products' => 'Ukugunyazisa ukufikelela ukujonga uluhlu lweemveliso kunye nolwazi oluneenkcukacha lwemveliso kwi-ofisi engasemva.',
    'shop-read-reports' => 'Funda ulwazi kunye neengxelo.',
    'shop-socials' => 'Hlela iinethiwekhi zentlalo zasevenkileni.',
    'shop-accounts' => 'Hlela kwaye ucime iiakhawunti zemali ezinxibelelene nevenkile.',
    'shop-menus' => 'Hlela iimenyu zevenkile.',
    'shop-pages' => 'Hlela amaphepha evenkile.',
    'shop-warehouse' => 'Hlela iSitora seSitora',
    'shop-permissions' => 'Jonga kwaye uhlele ukufikelela kwivenkile.',
    'shop-process-center' => 'Lawula iiodolo ezifunyenweyo.',
    'shop-profile' => 'Lawula iinkangeleko zevenkile.',
    'shop-discount-code' => 'Lawula iikhowudi zesaphulelo.',
    'shop-coupon' => 'Lawula amakhuphoni.',
    'shop-offer' => 'Lawula unikezelo.',
    'shop-cashback' => 'Lawula iimbuyiselo zemali.',
    'shop-lottery' => 'Lawula ilotho.',
    'shop-community' => 'Lawula uluntu.',
    'shop-customers' => 'Lawula abathengi.',
    'shop-ribbon' => 'Lawula imirhumo yeRibhoni.',
    'community-read' => 'Funda uluntu lwaseSelldone.',
    'community-write' => 'Bhala selldone uluntu.',
    'profile-write' => 'Bhala iinkcukacha zeprofayile yomsebenzisi.',
    'vendor-read' => 'Ukufikelela kwizenzo zokuzaliseka kwee-odolo zabathengisi.',
    'vendor-write' => 'Guqula ii-odolo, intlawulo kunye nolunye ulwazi lomthengisi.',
    'connect-providers' => 'Yongeza, funda kwaye ubhale qhagamshela ababoneleli.',
    'personal-identification' => 'Funda iinkcukacha zobuqu, ufikelelo, kunye nolungiselelo lweakhawunti.',
    'accounts' => 'Ukufikelela kwizipaji, ukufunda ukuthengiselana kunye neembali eziphezulu.',
    'shop-add' => 'Yongeza ivenkile entsha.',
    'shop-delete' => 'Susa ivenkile.',
    'shop-ai-write' => 'Ivumela umsebenzisi ukuba aphumeze imiyalelo ye-AI.',
    'shop-ai-read' => 'Ivumela umsebenzisi ukuba afikelele kulwazi lwe-AI ngaphandle kokuphumeza imiyalelo.',
    'vendor-payment' => 'Ivumela umsebenzisi ukuba afake iirekhodi zeentlawulo kubathengisi okanye ukudlulisela imali ngeeakhawunti zabo eziqhagamshelweyo njengeStripe Connect.',
    'company-read' => 'Ivumela ukufunda ulwazi lweprofayile yeshishini.',
    'company-write' => 'Ivumela ukufunda nokubhala ulwazi lweprofayile yeshishini.',
    'agency-read' => 'Ivumela ukufunda ulwazi lwe-arhente.',
    'agency-write' => 'Ivumela ukufunda nokubhala ulwazi lwe-arhente.',
    'note-read' => 'Ivumela ukufunda amanqaku evenkileni.',
    'note-write' => 'Ivumela ukufunda nokubhala amanqaku evenkileni.',
    'developer-read' => 'Ivumela ukufunda izinto zexabiso zabaphuhlisi.',
    'developer-write' => 'Ivumela ukufunda nokubhala ii-asethi zabaphuhlisi.',
    'tokens-read' => 'Funda iithokheni ze-Oauth kunye nabaxhasi.',
    'tokens-write' => 'Bhala iithokheni ze-Oauth kunye nabaxhasi.',
];
