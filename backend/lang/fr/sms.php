<?php

/*
|--------------------------------------------------------------------------
| Shop SMS list
|--------------------------------------------------------------------------
| This array return to shop admin to see SMS preview!
|
*/

return [

    'shop-order-payment' => [
        'title' => 'Accepter le paiement',
        'sample' => "Votre paiement de 267 \$ a été réglé avec succès.<br>Commande : SM-425<br>Merci, <b>Nom de votre magasin</b>.<br>Selldone",
        'body' => "Votre paiement :param2 a été réglé avec succès.\nCommande : :param1\nMerci, :param3.\nSelldone",
        'icon' => 'paiement',
        'description' => 'Envoyez un message au client de la boutique pour l\'informer du paiement réussi.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Accepter le paiement',
        'sample' => "Le nouveau paiement de 267 \$ a été réglé avec succès.<br>Commande : SM-425<br>Merci, <b>Nom de votre magasin</b>.<br>Selldone",
        'body' => "Le nouveau paiement :param2 a été réglé avec succès.\nCommande : :param1\nMerci, :param3.\nSelldone",
        'icon' => 'paiement',
        'description' => 'Envoyez un message au propriétaire de la boutique pour l\'informer du paiement réussi.',

    ],

    'vendor-new-order' => [
        'title' => 'Nouvelle commande du fournisseur',
        'sample' => "Vous avez reçu une nouvelle commande de 200 \$.<br>Commande : <b>SM-870</b> pour <b>Nom du fournisseur</b>.<br>✅ Produit A| SKU100001 |1x<br>✅ Produit B| SKU100002 |1x",
        'body' => "Vous avez reçu une nouvelle commande :param2.\nCommande : :param1 pour :param3.\n:param4",
        'icon' => 'vitrine',
        'description' => 'Envoyez un message au vendeur pour l\'informer d\'une nouvelle commande.',
    ],








    'shop-login' => [
        'title' => 'Code de vérification de connexion',
        'sample' => "Votre code de connexion est : <b>123456</b><br><b>Nom de votre magasin</b><br>Selldone",
        'body' => "Votre code de connexion est : :param1\n:param2\nSelldone",
        'icon' => 'se connecter',
        'description' => 'Envoyez le code de connexion au client pour se connecter à la boutique.',

    ],

    'user-login' => [
        'title' => 'Message de réussite de la connexion',
        'sample' => "Cher <b>Name</b>, <br>Vous êtes connecté à votre compte par <b>iPhone 165.250.300.1</b> à <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Cher :param1,\nVous êtes connecté à votre compte par :param2 à :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Envoyer un message après que le client se soit connecté à la boutique.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocat nouvelle commande soumise envoyer à l\'acheteur',
        'sample' => "<b>Nom de votre magasin</b><br>Cher <b>Votre nom</b>,<br>Nous avons reçu votre commande et nous l'examinons.<br>Numéro de commande : <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nCher :param1,\nNous avons reçu votre commande et nous l'examinons.\nN° de commande : :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Envoyez un message au client après avoir passé une commande d\'avocat.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'L\'avocat reçoit une nouvelle commande envoyée au vendeur',
        'sample' => "Vous avez reçu une commande d'avocat : <br>Magasin : <b>Nom de votre magasin</b><br>Acheteur : <b>Nom de l'acheteur</b><br>Commande : <b>AVO-246</b><br>Selldone",
        'body' => "Vous avez reçu une commande d'avocat :\nMagasin: :param1\nAcheteur : :param2\nCommande : :param3\nSelldone",
        'icon' => 'comment_to_reg',
        'description' => 'Envoyez un message au propriétaire de la boutique pour l\'informer de la réception d\'une nouvelle commande d\'avocat.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Commande d\'avocat prête à payer',
        'sample' => "<b>Nom de votre magasin</b><br>Votre commande a été confirmée et peut être payée via le lien suivant.<br>N° de commande : <b>AVO-246</b><br>Lien : <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nVotre commande a été confirmée et peut être payée via le lien suivant.\nN° de commande : :param2\nLien : :param1\nSelldone",
        'icon' => 'reçu',
        'description' => 'Envoyez un message avec le lien de paiement au client après que le vendeur ait défini le coût et confirmé sa commande d\'avocat.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Commande prête à être expédiée',
        'sample' => "Bonjour <b>Alex</b>, bonne nouvelle, votre commande est maintenant prête à être expédiée.<br>Commande : <b>SM-123</b>",
        'body' => "Bonjour :param4, bonne nouvelle, votre commande est maintenant prête à être expédiée.\nCommande : :param1",
        'icon' => 'expédition_locale',
        'description' => 'Envoyez un message au client pour l\'informer que sa commande est prête à être expédiée.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Commande prête à être récupérée',
        'sample' => "Bonjour Alex, bonne nouvelle, votre commande est maintenant prête à être récupérée.<br>Commande : <b>SM-123</b>",
        'body' => "Bonjour :param4, bonne nouvelle, votre commande est désormais prête à être récupérée.\nCommande : :param1",
        'icon' => 'partage_emplacement',
        'description' => 'Envoyez un message au client pour l\'informer que sa commande est prête à être récupérée.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Commande fournisseur prête à être expédiée',
        'sample' => "Bonjour <b>Alex</b>, bonne nouvelle, votre commande est maintenant prête à être expédiée.<br>Commande : <b>SM-123</b>",
        'body' => "Bonjour :param4, bonne nouvelle, votre commande est maintenant prête à être expédiée.\nCommande : :param1",
        'icon' => 'expédition_locale',
        'description' => 'Envoyez un message au client pour l\'informer que sa commande est prête à être expédiée. Uniquement sur le marché avec le mode d\'expédition directe et le type de livraison n\'est pas le ramassage.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Commande du fournisseur prête à être récupérée',
        'sample' => "Bonjour Alex, bonne nouvelle, votre commande est maintenant prête à être récupérée.<br>Commande : <b>SM-123</b>",
        'body' => "Bonjour :param4, bonne nouvelle, votre commande est désormais prête à être récupérée.\nCommande : :param1",
        'icon' => 'partage_emplacement',
        'description' => 'Envoyez un message au client pour l\'informer que sa commande est prête à être récupérée. Uniquement sur le marché avec le mode d\'expédition directe et le type de livraison est le ramassage.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Confirmation des articles commandés',
        'sample' => "Bonjour Alex, nous avons examiné votre commande. Voici l'état de confirmation de vos articles : <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Bonjour :param4, nous avons examiné votre commande. Voici l'état de confirmation de vos articles :"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignation_turned_in',
        'description' => 'Informe le client des articles de sa commande qui ont été acceptés ou rejetés par le vendeur.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Confirmation des articles de commande fournisseur',
        'sample' => "Bonjour Alex, nous avons examiné votre commande. Voici l'état de confirmation de vos articles : <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Bonjour :param4, nous avons examiné votre commande. Voici l'état de confirmation de vos articles :"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignation_turned_in',
        'description' => 'Informe le client des articles de sa commande qui ont été acceptés ou rejetés par le fournisseur.',
    ],



];
