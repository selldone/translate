<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Ces informations d\'identification ne correspondent pas à nos dossiers.',
    'throttle' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',


    'title_shop' => 'Connectez-vous à :name',
    'title_app' => 'Accès aux applications pour :name',
    'login_message' => 'Demandez l\'accès à votre compte.',
    'scopes_title' => 'Cette application aura accès aux portées suivantes',
    'accept' => 'Confirmer',
    'reject' => 'Rejeter',


    'login_incorrect_password' => 'Nom d\'utilisateur ou mot de passe invalide.',


    'reset_2fa_title' => 'Réinitialiser la demande de connexion en deux étapes',
    'go_main_page' => 'Aller à la page d\'accueil',

    'signing_in' => 'Connectez-vous...',


    'erp' => [
        'message' => "● Choisissez un magasin pour continuer. Si vous avez besoin d'un nouveau magasin, créez-le d'abord et reconnectez-vous.<br>Quantity Assurez-vous de connaître le logiciel auquel vous vous connectez ou contactez le fournisseur pour obtenir de l'aide.",
    ],
    'token-display' => [
        'message' => "Nous avons créé ce jeton pour accéder à :shop pour :software en fonction de votre demande. Veuillez le conserver en sécurité et ne le partagez avec personne. Si vous pensez que votre token a été compromis, vous pouvez le révoquer à tout moment.",
        'scopes-message' => "Il s'agit d'un token qui a accès à la boutique avec ses scopes",
        'manage-tokens-action' => 'Gérer les jetons',
        'manage-tokens-message' => "Vous pouvez révoquer ce jeton ici à tout moment."
    ]


,

    'password' => 'Le mot de passe fourni est incorrect.',
];
