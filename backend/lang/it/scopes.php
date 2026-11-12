<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Ambito amministratore Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Accesso limitato agli investitori.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Leggi i dettagli del profilo utente.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Leggi il numero di telefono.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Leggere e aggiornare gli indirizzi salvati.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Aggiorna il profilo utente.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Effettua ordini.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Visualizza la cronologia degli ordini.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Accedi alle carte regalo.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Modifica articoli.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Gestisci le notifiche.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Visualizza l\'elenco dei negozi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Modifica i dettagli del negozio.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Aggiungi nuovo negozio.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Elimina negozio.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Gestisci i ticket di supporto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Gestisci le carte regalo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Visualizza le carte regalo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Gestisci le domande frequenti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Visualizza le domande frequenti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Gestisci le categorie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Visualizza le categorie.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Gestisci i prodotti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Visualizza i prodotti.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Visualizza rapporti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Gestire i conti finanziari.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Visualizza i conti finanziari.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Modifica le pagine del negozio.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Visualizza le pagine del negozio.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gestire il magazzino.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Visualizza magazzino.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Gestire l\'accesso del personale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Visualizza l\'accesso del personale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Visualizza gli ordini.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Gestisci gli ordini.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Gestisci il profilo aziendale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Visualizza il profilo aziendale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Gestisci i codici sconto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Visualizza i codici sconto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Gestisci i coupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Visualizza coupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Gestisci le offerte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Visualizza le offerte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gestisci i cashback.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Visualizza i cashback.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Gestisci le lotterie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Visualizza le lotterie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Gestisci la comunità.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Visualizza comunità.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Gestisci i clienti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Visualizza i clienti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Gestisci gli abbonamenti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Visualizza gli abbonamenti.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Visualizza gli ordini dei fornitori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Gestire gli ordini e i pagamenti dei fornitori.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Gestisci i provider di connessione.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Visualizza i provider di connessione.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Esegui i comandi dell\'IA.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Visualizza le informazioni sull\'IA.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Gestire i pagamenti dei fornitori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Visualizza i pagamenti dei fornitori.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Visualizza il profilo aziendale.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Gestisci il profilo aziendale.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Visualizza le informazioni dell\'agenzia.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Gestisci le informazioni dell\'agenzia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Visualizza le note del negozio.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Gestisci le note del negozio.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Visualizza le risorse dello sviluppatore.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Gestisci le risorse degli sviluppatori.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Accedi alle informazioni personali e alle impostazioni dell\'account.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Gestisci portafoglio e transazioni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Visualizza le transazioni del portafoglio.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Visualizza token e client OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Gestisci token e client OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Gestisci le impostazioni di sicurezza.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Gestisci gli affiliati.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Visualizza affiliati.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Gestisci modelli di stampa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Visualizza i modelli di stampa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Gestisci le recensioni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Visualizza recensioni.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Visualizza le informazioni sulla monetizzazione.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Gestisci le informazioni sulla monetizzazione.',



    'profile' => 'Leggi le informazioni sul profilo tra cui nome, indirizzo e-mail, immagine e stato di autenticazione.',
    'phone' => 'Accesso al numero di contatto',
    'address' => 'Leggere e modificare l\'indirizzo dalla rubrica salvata',
    'buy' => 'Ordina e acquista.',
    'order-history' => 'Leggi la cronologia degli ordini.',
    'my-gift-cards' => 'Accesso alle mie carte regalo.',
    'articles' => 'Modifica articoli.',
    'notifications' => 'Invia e ricevi notifiche.',
    'read-shops' => 'Leggi l\'elenco dei negozi.',
    'shop-edit' => 'Accesso alla modifica del negozio.',
    'shop-contacts' => 'Ricevi e modifica i moduli di contatto.',
    'shop-gift-cards' => 'Creazione, modifica e gestione delle carte.',
    'shop-faqs' => 'Crea, modifica e gestisci le domande frequenti.',
    'shop-categories' => 'Creazione, modifica e gestione delle categorie.',
    'backoffice-write-products' => 'Autorizzare la creazione, la modifica e la gestione dei prodotti nel back office.',
    'backoffice-read-products' => 'Autorizza l\'accesso per visualizzare l\'elenco dei prodotti e le informazioni dettagliate sui prodotti nel back office.',
    'shop-read-reports' => 'Leggi informazioni e rapporti.',
    'shop-socials' => 'Modifica i social network del negozio.',
    'shop-accounts' => 'Modifica ed elimina gli account finanziari collegati al negozio.',
    'shop-menus' => 'Modifica i menu del negozio.',
    'shop-pages' => 'Modifica le pagine del negozio.',
    'shop-warehouse' => 'Modifica Magazzino negozio',
    'shop-permissions' => 'Visualizza e modifica l\'accesso al negozio.',
    'shop-process-center' => 'Gestisci gli ordini ricevuti.',
    'shop-profile' => 'Gestisci i profili del negozio.',
    'shop-discount-code' => 'Gestisci codici sconto.',
    'shop-coupon' => 'Gestisci i coupon.',
    'shop-offer' => 'Gestisci le offerte.',
    'shop-cashback' => 'Gestisci i cashback.',
    'shop-lottery' => 'Gestisci le lotterie.',
    'shop-community' => 'Gestisci la comunità.',
    'shop-customers' => 'Gestire i clienti.',
    'shop-ribbon' => 'Gestisci gli abbonamenti Ribbon.',
    'community-read' => 'Leggi la community Selldone.',
    'community-write' => 'Scrivi alla comunità selldone.',
    'profile-write' => 'Scrivi le informazioni del profilo utente.',
    'vendor-read' => 'Accesso alle azioni di evasione degli ordini dei fornitori.',
    'vendor-write' => 'Modifiche agli ordini, pagamenti e altre informazioni del fornitore.',
    'connect-providers' => 'Aggiungere, leggere e scrivere provider di connessione.',
    'personal-identification' => 'Leggi le informazioni personali, gli accessi e la configurazione dell\'account.',
    'accounts' => 'Accesso ai portafogli, lettura delle transazioni e cronologie delle ricariche.',
    'shop-add' => 'Aggiungi nuovo negozio.',
    'shop-delete' => 'Rimuovi un negozio.',
    'shop-ai-write' => 'Consente all\'utente di eseguire comandi AI.',
    'shop-ai-read' => 'Consente all\'utente di accedere alle informazioni dell\'IA senza eseguire comandi.',
    'vendor-payment' => 'Consente all\'utente di aggiungere record di pagamento per i fornitori o di trasferire fondi tramite i propri account collegati, come Stripe Connect.',
    'company-read' => 'Consente di leggere le informazioni del profilo aziendale.',
    'company-write' => 'Consente di leggere e scrivere le informazioni del profilo aziendale.',
    'agency-read' => 'Consente di leggere le informazioni dell\'agenzia.',
    'agency-write' => 'Consente di leggere e scrivere le informazioni dell\'agenzia.',
    'note-read' => 'Permette di leggere le note del negozio.',
    'note-write' => 'Permette di leggere e scrivere note di officina.',
    'developer-read' => 'Consente di leggere le risorse degli sviluppatori.',
    'developer-write' => 'Consente di leggere e scrivere le risorse degli sviluppatori.',
    'tokens-read' => 'Leggere i token e i client Oauth.',
    'tokens-write' => 'Scrivi token e client Oauth.',
];
