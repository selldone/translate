<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Àmbit de l\'administrador Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Accés restringit als inversors.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Llegeix els detalls del perfil d\'usuari.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Llegeix el número de telèfon.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Llegeix i actualitza les adreces desades.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Actualitza el perfil d\'usuari.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Fes comandes.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Veure l\'historial de comandes.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Accedeix a targetes regal.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Edita articles.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Gestiona les notificacions.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Veure llista de la botiga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Editeu els detalls de la botiga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Afegeix una botiga nova.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Suprimeix la botiga.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Gestioneu els bitllets d\'assistència.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Gestionar targetes regal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Veure targetes regal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Gestioneu les preguntes freqüents.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Consulta les preguntes freqüents.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Gestionar categories.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Veure categories.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Gestionar els productes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Veure productes.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Veure informes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Gestionar els comptes financers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Veure els comptes financers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Edita les pàgines de la botiga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Veure pàgines de botiga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gestionar el magatzem.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Veure el magatzem.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Gestionar l\'accés del personal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Veure l\'accés del personal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Veure comandes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Gestionar les comandes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Gestionar el perfil de l\'empresa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Veure el perfil de l\'empresa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Gestionar codis de descompte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Veure codis de descompte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Gestionar els cupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Veure cupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Gestionar ofertes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Veure ofertes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gestionar els cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Veure reemborsaments.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Gestionar les loteries.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Veure loteries.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Gestionar la comunitat.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Veure comunitat.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Gestionar clients.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Veure clients.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Gestionar les subscripcions.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Veure subscripcions.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Veure comandes de proveïdors.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Gestioneu les comandes i els pagaments dels proveïdors.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Gestioneu els proveïdors de connexió.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Veure els proveïdors de connexió.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Executeu ordres d\'IA.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Veure informació de l\'IA.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Gestioneu els pagaments dels proveïdors.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Consulta els pagaments dels proveïdors.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Veure el perfil de l\'empresa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Gestionar el perfil de l\'empresa.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Consulta la informació de l\'agència.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Gestionar la informació de l\'agència.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Veure notes de la botiga.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Gestioneu les notes de la botiga.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Consulta els recursos del desenvolupador.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Gestioneu els actius dels desenvolupadors.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Accediu a la informació personal i a la configuració del compte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Gestioneu la cartera i les transaccions.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Veure transaccions de cartera.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Veure fitxes OAuth i clients.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Gestioneu fitxes i clients OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Gestioneu la configuració de seguretat.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Gestionar els afiliats.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Veure afiliats.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Gestionar plantilles d\'impressió.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Veure plantilles d\'impressió.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Gestionar ressenyes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Veure comentaris.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Consulta la informació de monetització.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Gestioneu la informació de monetització.',



    'profile' => 'Llegiu la informació del perfil, com ara el nom, l\'adreça de correu electrònic, la imatge i l\'estat d\'autenticació.',
    'phone' => 'Accés al número de contacte',
    'address' => 'Llegeix i edita l\'adreça de la llibreta d\'adreces desada',
    'buy' => 'Comanda i comanda de botiga.',
    'order-history' => 'Llegeix l\'historial de comandes.',
    'my-gift-cards' => 'Accés a les meves targetes regal.',
    'articles' => 'Edita articles.',
    'notifications' => 'Enviar i rebre notificacions.',
    'read-shops' => 'Llegeix la llista de botigues.',
    'shop-edit' => 'Accés d\'edició a la botiga.',
    'shop-contacts' => 'Rebre i edita formularis de contacte.',
    'shop-gift-cards' => 'Creació, edició i gestió de targetes.',
    'shop-faqs' => 'Crea, edita i gestiona les preguntes més freqüents.',
    'shop-categories' => 'Creació, edició i gestió de categories.',
    'backoffice-write-products' => 'Autoritzar la creació, edició i gestió de productes al back office.',
    'backoffice-read-products' => 'Autoritzeu l\'accés per veure la llista de productes i la informació detallada del producte a l\'oficina.',
    'shop-read-reports' => 'Llegeix informació i informes.',
    'shop-socials' => 'Edita les xarxes socials de la botiga.',
    'shop-accounts' => 'Editeu i suprimiu els comptes financers vinculats a la botiga.',
    'shop-menus' => 'Edita els menús de la botiga.',
    'shop-pages' => 'Edita les pàgines de la botiga.',
    'shop-warehouse' => 'Edita el magatzem de la botiga',
    'shop-permissions' => 'Veure i editar l\'accés a la botiga.',
    'shop-process-center' => 'Gestionar les comandes rebudes.',
    'shop-profile' => 'Gestionar perfils de botiga.',
    'shop-discount-code' => 'Gestionar codis de descompte.',
    'shop-coupon' => 'Gestionar els cupons.',
    'shop-offer' => 'Gestionar ofertes.',
    'shop-cashback' => 'Gestioneu les devolució de diners.',
    'shop-lottery' => 'Gestionar les loteries.',
    'shop-community' => 'Gestionar la comunitat.',
    'shop-customers' => 'Gestionar clients.',
    'shop-ribbon' => 'Gestioneu les subscripcions a la cinta.',
    'community-read' => 'Llegeix la comunitat de Selldone.',
    'community-write' => 'Escriu comunitat selldone.',
    'profile-write' => 'Escriu la informació del perfil d\'usuari.',
    'vendor-read' => 'Accés a les accions de compliment de comandes de proveïdors.',
    'vendor-write' => 'Canvi de comandes, pagament i altra informació del venedor.',
    'connect-providers' => 'Afegiu, llegiu i escriviu proveïdors de connexió.',
    'personal-identification' => 'Llegiu la informació personal, els accessos i la configuració del compte.',
    'accounts' => 'Accés a carteres, lectura de transaccions i historials de recàrregues.',
    'shop-add' => 'Afegeix una botiga nova.',
    'shop-delete' => 'Eliminar una botiga.',
    'shop-ai-write' => 'Permet a l\'usuari executar ordres d\'IA.',
    'shop-ai-read' => 'Permet a l\'usuari accedir a la informació de la IA sense executar ordres.',
    'vendor-payment' => 'Permet a l\'usuari afegir registres de pagaments per a venedors o transferir fons mitjançant els seus comptes connectats com Stripe Connect.',
    'company-read' => 'Permet llegir la informació del perfil de l\'empresa.',
    'company-write' => 'Permet llegir i escriure informació del perfil de l\'empresa.',
    'agency-read' => 'Permet llegir la informació de l\'agència.',
    'agency-write' => 'Permet llegir i escriure informació de l\'agència.',
    'note-read' => 'Permet llegir les notes de la botiga.',
    'note-write' => 'Permet llegir i escriure notes de la botiga.',
    'developer-read' => 'Permet llegir els actius dels desenvolupadors.',
    'developer-write' => 'Permet llegir i escriure actius dels desenvolupadors.',
    'tokens-read' => 'Llegiu fitxes i clients Oauth.',
    'tokens-write' => 'Escriu fitxes i clients Oauth.',
];
