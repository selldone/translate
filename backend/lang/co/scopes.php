<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Scopu di l\'amministratore Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Accessu ristrettu di l\'investitori.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Leghjite i dettagli di u prufilu d\'utilizatore.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Leghjite u numeru di telefunu.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Leghjite è aghjurnà l\'indirizzi salvati.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Aghjurnate u prufilu d\'utilizatore.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Fate ordini.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Vede a storia di l\'ordine.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Accedi à e carte rigalu.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Edite l\'articuli.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Gestisce e notificazioni.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Vede a lista di a tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Edite i dettagli di a tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Aghjunghjite una nova tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Sguassà a tenda.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Gestisce i biglietti di supportu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Gestisce e carte rigalu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Vede carte rigalu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Gestisce e FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Vede e FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Gestisce e categurie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Vede e categurie.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Gestisce i prudutti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Vede i prudutti.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Vede i rapporti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Gestisce i cunti finanziarii.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Vede i cunti finanziarii.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Edite e pagine di u magazinu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Vede e pagine di a tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gestisce u magazzinu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Vede u magazzinu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Gestisce l\'accessu di u persunale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Vede l\'accessu di u persunale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Vede ordini.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Gestisce ordini.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Gestisce u prufilu cummerciale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Vede u prufilu cummerciale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Gestisce i codici di sconto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Vede i codici di sconto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Gestisce i cuponi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Vede i cuponi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Gestisce offerte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Vede l\'offerte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gestisce i cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Vede i cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Gestisce lotterie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Vede lotterie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Gestisce a cumunità.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Vede a cumunità.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Gestisce i clienti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Vede i clienti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Gestisce l\'abbonamenti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Vede l\'abbonamenti.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Vede l\'ordine di u venditore.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Gestisce l\'ordine di i venditori è i pagamenti.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Gestisce i fornitori di cunnessione.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Vede i fornituri di cunnessione.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Eseguite cumandamenti AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Vede l\'infurmazioni AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Gestisce i pagamenti di u venditore.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Vede i pagamenti di u venditore.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Vede u prufilu cummerciale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Gestisce u prufilu cummerciale.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Vede l\'infurmazioni di l\'agenzia.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Gestisce l\'infurmazioni di l\'agenzia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Vede e note di a tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Gestisce e note di a tenda.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Vede l\'assi di u sviluppatore.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Gestisce l\'assi di u sviluppatore.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Accede à l\'infurmazioni persunali è i paràmetri di u contu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Gestisce a billetera è e transazzione.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Vede e transazzione di portafogli.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Vede i tokens OAuth è i clienti.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Gestisce i tokens è i clienti OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Gestisce i paràmetri di sicurità.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Gestisce l\'affiliati.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Vede l\'affiliati.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Gestisce mudelli di stampa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Vede i mudelli di stampa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Gestisce recensioni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Vede recensioni.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Vede l\'infurmazioni di monetizazione.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Gestisce l\'infurmazioni di monetizazione.',



    'profile' => 'Leghjite l\'infurmazioni di u prufilu cumprese u nome, l\'indirizzu email, l\'imaghjini è u statutu di autentificazione.',
    'phone' => 'Accessu à u numeru di cuntattu',
    'address' => 'Leghjite è edità l\'indirizzu da u libru di indirizzu salvatu',
    'buy' => 'Ordine & Shop Order.',
    'order-history' => 'Leghjite a storia di l\'ordine.',
    'my-gift-cards' => 'Accessu à i mo giftcards.',
    'articles' => 'Edita l\'articuli.',
    'notifications' => 'Mandate è riceve notificazioni.',
    'read-shops' => 'Leghjite a lista di a tenda.',
    'shop-edit' => 'Accessu di editazione di u magazinu.',
    'shop-contacts' => 'Riceve è edità forme di cuntattu.',
    'shop-gift-cards' => 'Creazione, editazione è gestione di carte.',
    'shop-faqs' => 'Crea, edità è gestione e dumande frequenti.',
    'shop-categories' => 'Crià, edità, è Gestisce Categorie.',
    'backoffice-write-products' => 'Autorizà a creazione, edizione è gestione di i prudutti in u back office.',
    'backoffice-read-products' => 'Autorizà l\'accessu per vede a lista di i prudutti è l\'infurmazioni detallate di u produttu in u back office.',
    'shop-read-reports' => 'Leghjite l\'infurmazioni è i rapporti.',
    'shop-socials' => 'Edite e rete suciale di a tenda.',
    'shop-accounts' => 'Edite è sguassate i cunti finanziari ligati à u magazinu.',
    'shop-menus' => 'Edite i menu di u magazinu.',
    'shop-pages' => 'Edite e pagine di u magazinu.',
    'shop-warehouse' => 'Edita Store Warehouse',
    'shop-permissions' => 'Vede è edità l\'accessu à a tenda.',
    'shop-process-center' => 'Gestisce ordini ricevuti.',
    'shop-profile' => 'Gestisce i profili di a tenda.',
    'shop-discount-code' => 'Gestisce i codici di sconto.',
    'shop-coupon' => 'Gestisce i cuponi.',
    'shop-offer' => 'Gestisce offerte.',
    'shop-cashback' => 'Gestisce i cashbacks.',
    'shop-lottery' => 'Gestisce lotterie.',
    'shop-community' => 'Gestisce a cumunità.',
    'shop-customers' => 'Gestisce i clienti.',
    'shop-ribbon' => 'Gestisce abbonamenti Ribbon.',
    'community-read' => 'Leghjite a cumunità di Selldone.',
    'community-write' => 'Scrivite a cumunità selldone.',
    'profile-write' => 'Scrivite l\'infurmazione di u prufilu d\'utilizatore.',
    'vendor-read' => 'Accessu à l\'azzioni di cumpiimentu di ordini di venditore.',
    'vendor-write' => 'Cambia ordini, pagamentu è altre informazioni di u venditore.',
    'connect-providers' => 'Aghjunghjite, leghje è scrive i fornitori di cunnessione.',
    'personal-identification' => 'Leghjite l\'infurmazioni persunali, l\'accessi è a cunfigurazione di u contu.',
    'accounts' => 'Accessu à i portafogli, leghje transazzioni è storie di ricaricamentu.',
    'shop-add' => 'Aghjunghjite una nova tenda.',
    'shop-delete' => 'Eliminate una buttrega.',
    'shop-ai-write' => 'Permette à l\'utilizatore per eseguisce cumandamenti AI.',
    'shop-ai-read' => 'Permette à l\'utilizatore per accede à l\'infurmazioni AI senza eseguisce cumandamenti.',
    'vendor-payment' => 'Permette à l\'utilizatore per aghjunghje registri di pagamentu per i venditori o trasferisce fondi via i so cunti cunnessi cum\'è Stripe Connect.',
    'company-read' => 'Permette di leghje l\'infurmazioni di u prufilu cummerciale.',
    'company-write' => 'Permette di leghje è scrive l\'infurmazioni di u prufilu cummerciale.',
    'agency-read' => 'Permette di leghje l\'infurmazioni di l\'agenzia.',
    'agency-write' => 'Permette di leghje è scrive l\'infurmazioni di l\'agenzia.',
    'note-read' => 'Permette di leghje e note di a tenda.',
    'note-write' => 'Permette di leghje è scrive note di a tenda.',
    'developer-read' => 'Permette di leghje l\'assi di sviluppatori.',
    'developer-write' => 'Permette di leghje è scrive l\'assi di sviluppatori.',
    'tokens-read' => 'Leghjite i tokens Oauth è i clienti.',
    'tokens-write' => 'Scrivite tokens Oauth è clienti.',
];
