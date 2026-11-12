<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Boutique",
    'request' => "demande",
    'stage' => "Statut",
    'budget' => "budget",
    'contact' => "Contact",
    'name' => "Nom",
    'email' => "E-mail",
    'user' => "Utilisateur",
    'copy' => "Copie",
    'important' => "Important",
    'faq' => "FAQ",

    'select_shop' => "Sélectionnez la boutique",
    'loading' => "Chargement",

    'add_comment' => "Ajouter un commentaire",
    'add_comment_sub' => "Partagez vos réflexions avec nous",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "En cliquant sur « S'inscrire », vous acceptez les Conditions d'utilisation de :name <a href='/terms' target='_blank'></a> et la Politique de confidentialité de <a href='/privacy' target='_blank'></a>. Vous consentez à recevoir des appels téléphoniques et des messages SMS de :name à des fins de mise à jour des commandes et/ou à des fins de marketing. La fréquence des messages dépend de votre activité. Vous pouvez vous désinscrire en envoyant un SMS <b>STOP</b> à <b>86753</b>. Des frais de message et de données peuvent s'appliquer. Nous respectons la vie privée des gens et ne vendons jamais vos données ni ne les utilisons à des fins publicitaires. Si vous avez besoin d'informations supplémentaires, contactez-nous.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Non défini. J\'ai besoin de plus d\'informations.',
        'start' => "Je viens tout juste de démarrer mon entreprise.",
        'online' => "J'ai une entreprise et je souhaite la mettre en ligne.",
        'extend' => "Je travaille sur ma boutique en ligne.",
        'pos' => "J'ai l'intention d'utiliser Selldone POS dans mon magasin physique.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Virement bancaire",
            'description' => "Transférez manuellement les fonds sur le compte du fournisseur.",
        ],
    ],

];
