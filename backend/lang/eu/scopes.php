<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administratzailearen esparrua.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Inbertitzaileentzako sarbide mugatua.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Irakurri erabiltzailearen profilaren xehetasunak.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Irakurri telefono zenbakia.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Irakurri eta eguneratu gordetako helbideak.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Eguneratu erabiltzailearen profila.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Egin eskaerak.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Ikusi eskaera-historia.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Sar zaitez opari txartelak.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Editatu artikuluak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Kudeatu jakinarazpenak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Ikusi denda zerrenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Editatu dendaren xehetasunak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Gehitu denda berria.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Ezabatu denda.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Kudeatu laguntza-txartelak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Kudeatu opari txartelak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Ikusi opari txartelak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Kudeatu ohiko galderak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Ikusi ohiko galderak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kategoriak kudeatu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Ikusi kategoriak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Kudeatu produktuak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Ikusi produktuak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ikusi txostenak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Kudeatu finantza-kontuak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Ikusi finantza-kontuak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Editatu dendako orriak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Ikusi dendako orriak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Biltegia kudeatu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ikusi biltegia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Kudeatu langileen sarbidea.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Ikusi langileen sarbidea.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Ikusi eskaerak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Kudeatu eskaerak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Kudeatu negozioaren profila.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Ikusi negozioaren profila.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Kudeatu deskontu kodeak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Ikusi deskontu kodeak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Kudeatu kupoiak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Ikusi kupoiak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Kudeatu eskaintzak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Ikusi eskaintzak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Kudeatu cashback-ak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Ikusi diru-itzulketak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Loteriak kudeatu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Ikusi loteriak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Kudeatu komunitatea.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Ikusi komunitatea.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Kudeatu bezeroak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Ikusi bezeroak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Kudeatu harpidetzak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Ikusi harpidetzak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Ikusi saltzaileen eskaerak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Kudeatu saltzaileen eskaerak eta ordainketak.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Kudeatu konektatzeko hornitzaileak.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Ikusi konektatzeko hornitzaileak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Exekutatu AI komandoak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Ikusi AI informazioa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Kudeatu saltzaileen ordainketak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Ikusi saltzaileen ordainketak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Ikusi negozioaren profila.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Kudeatu negozioaren profila.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Ikusi agentziaren informazioa.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Kudeatu agentziaren informazioa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Ikusi dendako oharrak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Kudeatu dendako oharrak.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Ikusi garatzaileen aktiboak.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Kudeatu garatzaileen aktiboak.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Sartu informazio pertsonala eta kontuaren ezarpenetara.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Kudeatu diru-zorroa eta transakzioak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Ikusi zorroaren transakzioak.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Ikusi OAuth tokenak eta bezeroak.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Kudeatu OAuth tokenak eta bezeroak.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Kudeatu segurtasun ezarpenak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Kudeatu afiliatuak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Ikusi afiliatuak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Kudeatu inprimatzeko txantiloiak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Ikusi inprimatzeko txantiloiak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Kudeatu iritziak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Ikusi iritziak.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Ikusi dirua irabazteko informazioa.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Kudeatu dirua irabazteko informazioa.',



    'profile' => 'Irakurri profileko informazioa izena, helbide elektronikoa, irudia eta autentifikazio-egoera barne.',
    'phone' => 'Harremanetarako zenbakirako sarbidea',
    'address' => 'Irakurri eta editatu helbidea gordetako helbide-liburutik',
    'buy' => 'Eskaera eta Denda Eskaera.',
    'order-history' => 'Irakurri eskaeraren historia.',
    'my-gift-cards' => 'Nire opari-txarteletarako sarbidea.',
    'articles' => 'Editatu artikuluak.',
    'notifications' => 'Bidali eta jaso jakinarazpenak.',
    'read-shops' => 'Irakurri denda zerrenda.',
    'shop-edit' => 'Denda editatzeko sarbidea.',
    'shop-contacts' => 'Harremanetarako formularioak jaso eta editatu.',
    'shop-gift-cards' => 'Txartelak sortzea, editatzea eta kudeatzea.',
    'shop-faqs' => 'Sortu, editatu eta kudeatu maiz egiten diren galderak.',
    'shop-categories' => 'Kategoriak sortzea, editatzea eta kudeatzea.',
    'backoffice-write-products' => 'Back office-ko produktuak sortzeko, editatzeko eta kudeatzeko baimena ematea.',
    'backoffice-read-products' => 'Baimendu sarbidea produktuen zerrenda eta produktuen informazio zehatza atzeko bulegoan ikusteko.',
    'shop-read-reports' => 'Irakurri informazioa eta txostenak.',
    'shop-socials' => 'Editatu dendako sare sozialak.',
    'shop-accounts' => 'Editatu eta ezabatu dendari lotutako finantza-kontuak.',
    'shop-menus' => 'Editatu dendako menuak.',
    'shop-pages' => 'Editatu dendako orriak.',
    'shop-warehouse' => 'Editatu denda biltegia',
    'shop-permissions' => 'Ikusi eta editatu dendarako sarbidea.',
    'shop-process-center' => 'Kudeatu jasotako eskaerak.',
    'shop-profile' => 'Kudeatu dendako profilak.',
    'shop-discount-code' => 'Kudeatu deskontu kodeak.',
    'shop-coupon' => 'Kudeatu kupoiak.',
    'shop-offer' => 'Kudeatu eskaintzak.',
    'shop-cashback' => 'Kudeatu cashback-ak.',
    'shop-lottery' => 'Loteriak kudeatu.',
    'shop-community' => 'Kudeatu komunitatea.',
    'shop-customers' => 'Kudeatu bezeroak.',
    'shop-ribbon' => 'Kudeatu Ribbon harpidetzak.',
    'community-read' => 'Irakurri Selldone komunitatea.',
    'community-write' => 'Idatzi selldone komunitatea.',
    'profile-write' => 'Idatzi erabiltzailearen profileko informazioa.',
    'vendor-read' => 'Saltzaileen eskaeren betetze ekintzetarako sarbidea.',
    'vendor-write' => 'Aldatu eskaerak, ordainketa eta saltzailearen beste informazioa.',
    'connect-providers' => 'Gehitu, irakurri eta idatzi konektatzeko hornitzaileak.',
    'personal-identification' => 'Irakurri informazio pertsonala, sarbideak eta kontuaren konfigurazioa.',
    'accounts' => 'Diru-zorroetarako sarbidea, irakurri transakzioak eta karga-historiak.',
    'shop-add' => 'Gehitu denda berria.',
    'shop-delete' => 'Kendu denda bat.',
    'shop-ai-write' => 'Erabiltzaileari AI komandoak exekutatzeko aukera ematen dio.',
    'shop-ai-read' => 'Erabiltzaileari AI informazioa atzitzeko aukera ematen dio komandoak exekutatu gabe.',
    'vendor-payment' => 'Erabiltzaileari saltzaileentzako ordainketa-erregistroak gehitzeko edo fondoak transferitzeko aukera ematen dio Stripe Connect bezalako konektatutako kontuen bidez.',
    'company-read' => 'Enpresa-profilaren informazioa irakurtzeko aukera ematen du.',
    'company-write' => 'Enpresa-profilaren informazioa irakurtzeko eta idazteko aukera ematen du.',
    'agency-read' => 'Agentziaren informazioa irakurtzeko aukera ematen du.',
    'agency-write' => 'Agentziaren informazioa irakurtzeko eta idazteko aukera ematen du.',
    'note-read' => 'Dendako oharrak irakurtzeko aukera ematen du.',
    'note-write' => 'Dendako oharrak irakurtzeko eta idazteko aukera ematen du.',
    'developer-read' => 'Garatzaileen aktiboak irakurtzeko aukera ematen du.',
    'developer-write' => 'Garatzaileen aktiboak irakurtzeko eta idazteko aukera ematen du.',
    'tokens-read' => 'Irakurri Oauth tokenak eta bezeroak.',
    'tokens-write' => 'Idatzi Oauth tokenak eta bezeroak.',
];
