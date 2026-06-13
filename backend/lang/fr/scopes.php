<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Portée de l\'administrateur Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Accès restreint aux investisseurs.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lisez les détails du profil utilisateur.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Lisez le numéro de téléphone.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Lisez et mettez à jour les adresses enregistrées.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Mettre à jour le profil utilisateur.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Passer des commandes.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Afficher l\'historique des commandes.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Accédez aux cartes-cadeaux.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Modifier des articles.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Gérer les notifications.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Voir la liste des boutiques.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Modifiez les détails de la boutique.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Ajouter une nouvelle boutique.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Supprimer la boutique.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Gérer les tickets d\'assistance.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Gérer les cartes cadeaux.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Voir les cartes-cadeaux.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Gérer les FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Consultez la FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Gérer les catégories.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Afficher les catégories.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Gérer les produits.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Afficher les produits.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Afficher les rapports.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Gérer les comptes financiers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Consultez les comptes financiers.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Modifier les pages du magasin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Afficher les pages du magasin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gérer l\'entrepôt.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Voir l\'entrepôt.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Gérer l\'accès du personnel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Afficher l\'accès du personnel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Afficher les commandes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Gérer les commandes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Gérer le profil de l\'entreprise.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Afficher le profil de l\'entreprise.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Gérez les codes de réduction.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Afficher les codes de réduction.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Gérer les coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Voir les coupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Gérer les offres.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Consultez les offres.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gérez les remises en argent.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Afficher les remises en argent.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Gérer les loteries.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Voir les loteries.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Gérer la communauté.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Afficher la communauté.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Gérer les clients.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Afficher les clients.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Gérer les abonnements.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Afficher les abonnements.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Afficher les commandes des fournisseurs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Gérer les commandes et les paiements des fournisseurs.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Gérer les fournisseurs de connexion.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Afficher les fournisseurs de connexion.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Exécutez les commandes de l\'IA.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Afficher les informations sur l\'IA.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Gérer les paiements des fournisseurs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Afficher les paiements des fournisseurs.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Afficher le profil de l\'entreprise.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Gérer le profil de l\'entreprise.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Consultez les informations de l\'agence.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Gérer les informations de l\'agence.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Consultez les notes de la boutique.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Gérez les notes de la boutique.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Afficher les actifs du développeur.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Gérer les actifs des développeurs.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Accédez aux informations personnelles et aux paramètres du compte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Gérez le portefeuille et les transactions.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Afficher les transactions du portefeuille.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Affichez les jetons et les clients OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Gérez les jetons et les clients OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Gérer les paramètres de sécurité.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Gérer les affiliés.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Afficher les affiliés.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Gérer les modèles d\'impression.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Afficher les modèles d\'impression.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Gérer les avis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Afficher les avis.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Afficher les informations de monétisation.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Gérer les informations de monétisation.',



    'profile' => 'Lire les informations de profil, y compris le nom, l\'adresse e-mail, l\'image et le statut d\'authentification.',
    'phone' => 'Accès au numéro de contact',
    'address' => 'Lire et modifier l\'adresse du carnet d\'adresses enregistré',
    'buy' => 'Commande et commande en magasin.',
    'order-history' => 'Lire l\'historique des commandes.',
    'my-gift-cards' => 'Accès à mes cartes cadeaux.',
    'articles' => 'Modifier les articles.',
    'notifications' => 'Envoyer et recevoir des notifications.',
    'read-shops' => 'Lire la liste des magasins.',
    'shop-edit' => 'Accès à la modification du magasin.',
    'shop-contacts' => 'Recevoir et modifier des formulaires de contact.',
    'shop-gift-cards' => 'Création, modification et gestion des cartes.',
    'shop-faqs' => 'Créez, modifiez et gérez les questions fréquemment posées.',
    'shop-categories' => 'Création, modification et gestion des catégories.',
    'backoffice-write-products' => 'Autoriser la création, la modification et la gestion des produits dans le back-office.',
    'backoffice-read-products' => 'Autoriser l\'accès pour visualiser la liste des produits et les informations détaillées sur les produits dans le back-office.',
    'shop-read-reports' => 'Lire des informations et des rapports.',
    'shop-socials' => 'Modifier les réseaux sociaux du magasin.',
    'shop-accounts' => 'Modifiez et supprimez les comptes financiers liés au magasin.',
    'shop-menus' => 'Modifier les menus du magasin.',
    'shop-pages' => 'Modifier les pages du magasin.',
    'shop-warehouse' => 'Modifier l\'entrepôt du magasin',
    'shop-permissions' => 'Afficher et modifier l\'accès au magasin.',
    'shop-process-center' => 'Gérer les commandes reçues.',
    'shop-profile' => 'Gérer les profils de magasin.',
    'shop-discount-code' => 'Gérer les codes de réduction.',
    'shop-coupon' => 'Gérer les coupons.',
    'shop-offer' => 'Gérer les offres.',
    'shop-cashback' => 'Gérer les cashbacks.',
    'shop-lottery' => 'Gérer les loteries.',
    'shop-community' => 'Gérer la communauté.',
    'shop-customers' => 'Gérer les clients.',
    'shop-ribbon' => 'Gérer les abonnements au ruban.',
    'community-read' => 'Lisez la communauté Selldone.',
    'community-write' => 'Écrivez à la communauté selldone.',
    'profile-write' => 'Écrire les informations du profil utilisateur.',
    'vendor-read' => 'Accès aux actions d\'exécution des commandes fournisseurs.',
    'vendor-write' => 'Modification des commandes, paiement et autres informations du vendeur.',
    'connect-providers' => 'Ajoutez, lisez et écrivez des fournisseurs de connexion.',
    'personal-identification' => 'Lisez les informations personnelles, les accès et la configuration du compte.',
    'accounts' => 'Accès aux portefeuilles, lecture des transactions et historiques de rechargement.',
    'shop-add' => 'Ajouter une nouvelle boutique.',
    'shop-delete' => 'Supprimer une boutique.',
    'shop-ai-write' => 'Permet à l\'utilisateur d\'exécuter des commandes AI.',
    'shop-ai-read' => 'Permet à l\'utilisateur d\'accéder aux informations de l\'IA sans exécuter de commandes.',
    'vendor-payment' => 'Permet à l\'utilisateur d\'ajouter des enregistrements de paiement pour les fournisseurs ou de transférer des fonds via leurs comptes connectés comme Stripe Connect.',
    'company-read' => 'Permet de lire les informations du profil de l\'entreprise.',
    'company-write' => 'Permet de lire et d\'écrire les informations du profil de l\'entreprise.',
    'agency-read' => 'Permet de lire les informations de l\'agence.',
    'agency-write' => 'Permet de lire et d\'écrire les informations de l\'agence.',
    'note-read' => 'Permet de lire les notes de la boutique.',
    'note-write' => 'Permet de lire et d\'écrire des notes d\'atelier.',
    'developer-read' => 'Permet de lire les ressources des développeurs.',
    'developer-write' => 'Permet de lire et d\'écrire les ressources des développeurs.',
    'tokens-read' => 'Lire les jetons et les clients Oauth.',
    'tokens-write' => 'Écrire des jetons et des clients Oauth.',
];
