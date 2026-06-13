<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ce message souhaite la bienvenue à un nouvel acheteur dans la boutique.',
        ShopMailTemplateCodes::OrderCheckout => 'Cette notification est envoyée lorsqu\'un acheteur confirme une commande.',
        ShopMailTemplateCodes::OrderPayment => 'Cette notification confirme le paiement réussi effectué par un client.',
        ShopMailTemplateCodes::OrderUpdate => 'Ce message est envoyé pour informer un acheteur du statut de sa commande.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ce message est envoyé à un vendeur pour l\'informer d\'une commande confirmée.',
        ShopMailTemplateCodes::PosCheckout => 'Cette notification est envoyée pour confirmer une commande en point de vente pour un acheteur.',
        ShopMailTemplateCodes::PosPayment => 'Cette notification confirme un paiement en point de vente effectué par un acheteur.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ce message informe le vendeur d\'un achat effectué dans son point de vente.',
        ShopMailTemplateCodes::ShopContact => 'Cette notification est envoyée lorsqu\'un formulaire de contact a été soumis.',
        ShopMailTemplateCodes::ShopGiftCard => 'Cette notification informe un utilisateur qu\'il a reçu une carte cadeau.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ce message souhaite la bienvenue à un nouveau vendeur dans la boutique.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ce message est envoyé pour inviter un fournisseur à rejoindre votre marché.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ce message est envoyé au fournisseur lorsqu'une commande est reçue avec le statut Payé ou Paiement à la livraison (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Envoyé quotidiennement pour informer les fournisseurs de l'état de leurs produits.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ce message est envoyé pour inviter un fournisseur à rejoindre votre marché.",

        ShopMailTemplateCodes::UserLogin => "Informez l'utilisateur avec les informations de connexion, y compris l'adresse IP, la date et l'appareil, à des fins de sécurité.",
        ShopMailTemplateCodes::LoginCode => "Envoyez un code de mot de passe à usage unique pour que les utilisateurs puissent se connecter au magasin.",

        ShopMailTemplateCodes::EmailVerifyLink => "Envoyez un lien pour vérifier l'adresse e-mail de l'utilisateur. Cet e-mail est envoyé lorsqu'un utilisateur s'inscrit par SMS et saisit son e-mail. Il n'est pas envoyé lorsqu'un utilisateur s'inscrit directement avec une connexion sociale ou par e-mail.",

        ShopMailTemplateCodes::EmailBulkOrder => "Envoyez une liste des commandes reçues et payées en masse pour un jour spécifique."


    ],


    'global' => [
        'greetings' => 'Bonjour, :name !',
        'end-statement' => 'Équipe de soutien',

        'receiver_name' => 'Salut :user_name',
        'footer-help' => "Besoin d'aide ? Demandez à [support@selldone.com](mailto:support@selldone.com) ou visitez notre [centre d'aide](https://selldone.com/community).",
        'selldone-team' => 'L\'équipe Selldone',
        'footer-shop' => "Si vous avez besoin d'aide pour quoi que ce soit, n'hésitez pas à nous envoyer un e-mail : :shop_mail",
        'accept' => "Accepter",
        'reject' => "Rejeter",
        'verify' => "vérifier",
        'title' => "Titre",
        'value' => "Valeur",
        'description' => "La description",
        'shop' => "Boutique",
        'shop-info' => "Informations sur le magasin",
        'user' => "Utilisateur",
        'user-info' => "Informations sur le compte",
        'license' => "Licence",
        'status' => "Statut",
        'start' => "Démarrer",
        'end' => "Finir",
        'renewal' => "Renouvellement",
        'view' => "Voir",

        'balance' => "Solde",
        'card_number' => "Numéro de carte",
        'cvv' => "CV",
        'expire_date' => "Date d'expiration",

        'Dashboard' => "Tableau de bord",
        'order' => "commande",
        'view_order' => "Voir l'ordre",
        'pay_now' => "Pay now",

        'official_selldone' => "VENTE OFFICIELLE",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Monnaie",
        'free-balance' => "Solde libre",
        'locked-balance' => "Solde bloqué",
        'bot' => "Robot",
        'requests' => "Demandes",
        'baskets' => 'Chariots',
        'physical' => "Physique",
        'virtual' => "Virtuel",
        'file' => "Dossier",
        'service' => "Un service",
        'fulfillment' => "Accomplissement",
        'open' => "Ouvrir",
        'reserved' => "Réservé",
        'canceled' => "Annulé",
        'payed' => "Payé",
        'cod' => "COD",
        'orders-count' => 'Ordres',
        'payments-count' => 'Paiements',
        'confirms-count' => 'Confirme',
        'sends-count' => 'Envoie',
        'delivers-count' => 'Livre',
        'count' => 'Compter',
        'transactions-count' => 'Les transactions comptent',
        'success-transactions' => 'Opérations réussies',
        'total-amount' => 'Montant total',
        'amount' => 'Montant',
        'wage' => 'Salaire',
        'debug' => 'Déboguer',
        'pos' => 'POS',
        'live' => 'Vivre',
        'CheckQueue' => 'Vérifier la file d\'attente',
        'OrderConfirm' => 'Confirmation de la commande',
        'PreparingOrder' => 'Préparation de la commande',
        'SentOrder' => 'Commande envoyée',
        'ToCustomer' => 'Livré au client',
        'Pending' => 'En attente',
        'Accepted' => 'Accepté',
        'Rejected' => 'Rejeté',
        'pc' => 'PC',
        'tablet' => 'Tablette',
        'phone' => 'Téléphoner',
        'total' => 'Total',
        'view-detail' => 'Voir les détails',
        'empty' => 'Vider',
        'dropshipping' => 'Livraison directe',
        'reply' => 'Réponse',
        'reactions' => 'Réactions',
        'Comments' => 'Commentaires',
        'last-comment' => 'Dernier commentaire',
        'response-to' => 'Réponse à',
        'posts' => 'Des postes',
        'post' => 'Poster',

        'name' => 'Nom',
        'email' => 'E-mail',
        'type' => 'taper',
        'device' => 'Appareil',
        'platform' => 'Plateforme',
        'browser' => 'Navigateur',
        'time' => 'Temps',
        'Wallet' => 'Portefeuille',
        'date' => 'Date',

        'account' => 'Compte',
        'transaction' => 'Transaction',
        'fee' => 'Frais',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Facture',
        'category' => 'Catégorie',
        'password' => 'Mot de passe',
        'verify-login' => "Vérifier et se connecter",
        'url' => 'URL',
        'avocado' => 'Avocat',
        'hyper' => 'Hyper',
        'buy-now' => "Acheter maintenant",
        'add-domain' => "Add Domain",
        'views' => 'Vues',


        'country' => 'Pays',
        'address' => 'adresse',
        'postal' => 'code postal',
        'building_no' => 'Imeuble #',
        'building_unit' => 'Unité #',
        'message' => 'Message',


        'customer' => 'Client',
        'cart-items' => 'Articles du panier',
        'payment' => 'Paiement',
        'receiver' => 'Receveur',
        'virtual-items' => 'Objets virtuels',
        'no-payment' => 'Pas de paiement!',

        'enable' => 'Permettre',
        'access' => 'Accéder',
        'bank' => 'Infos bancaires',

        'vendor' => 'Vendeur',

        'view_content' => "Voir le contenu complet",
        'files' => 'Des dossiers',
        'download' => 'Télécharger',
        'file_name' => 'Nom de fichier',
        'file_size' => 'Taille',

        'subscription' => 'Abonnement',
        'products' => 'Des produits',
        'vendor_products' => 'Produits du fournisseur',

        'pickup' => 'Ramasser',

        'minutes' => 'Minutes',
        'hours' => 'Heures',

        'refund' => 'Remboursement',
        'recipient_address' => 'Adresse du destinataire',
        'signature' => 'Signature',
        'blockchain' => 'Chaîne de blocs',
        'details' => 'Détails',


    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Système d'exploitation d'entreprise Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Rapport de performance, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Rapport saisonnier, Selldone'
        ],
        'Onboarding' => [
            'id' => 'salut',
            'name' => 'Selldone Marchands'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Prise en charge :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'salut',
            'name' => 'Communauté, Selldone'
        ],
        'NewShop' => [
            'id' => 'marchands',
            'name' => 'Selldone Marchands'
        ],
        'Approve' => [
            'id' => 'approuver',
            'name' => 'Selldone Marchands'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gestion des commandes :name'
        ],

        'Recovery' => [
            'id' => 'récupération',
            'name' => 'Équipe de récupération Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'En attente ⌛',
        'PAYED' => 'Payant ✅',
        'CANCELED' => 'Annulé ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrateur',
            'OFFICER' => 'Officier et Superviseur',
            'AUDITING' => 'Responsable audit',
            'EMPLOYEE' => 'Employé',
            'PRODUCT' => 'Responsable produits',
            'CONTENT' => 'Gestionnaire de contenu',
            'MARKETING' => 'Responsable marketing',
            'VIEWER' => 'Téléspectateur',

        ],
        'subject' => ":inviter vous a invité en tant que :level| :shop",
        'category' => "Invitation du personnel",
        'title' => "Vous avez été invité à <b>:shop_name</b> en tant que <b>:level</b> .",
        'message' => "Vous avez reçu une invitation à collaborer avec l'équipe <b>:shop_title</b> en entreprise. Vous avez la possibilité d'accepter ou de refuser cette offre. Si vous choisissez d'accepter, veuillez vous connecter au service Selldone pour confirmer votre décision. Après confirmation, vous aurez accès à la section de gestion du magasin.",

    ],

    'welcome-email' => [
        'subject' => "👋 Bienvenue :name, commençons avec Selldone !",
        'category' => 'CONGRATULATION',
        'title' => "Bienvenue sur Selldone",
        'message' => "Merci d'avoir choisi Selldone ! Vous faites désormais partie d'une communauté dynamique qui relie les vendeurs internationaux aux clients, les entreprises locales aux entreprises et les particuliers aux entreprises. Tous nos outils Master et Pro sont à votre disposition **gratuitement** et **illimité**. Nous sommes là pour vous accompagner et vous ouvrir les portes de votre réussite.",

        'index' => "Étape :step.",

        'step-domain' => [
            'title' => 'Ajoutez votre domaine personnalisé',
            'message' => "Pour commencer, ajoutez gratuitement votre domaine personnalisé dans le tableau de bord de la boutique sous Paramètres > Paramètres de domaines.",
            'action' => 'Gérer mes domaines',
        ],
        'step-landing' => [
            'title' => 'Personnalisez votre page d\'accueil',
            'message' => "Personnalisez votre page d'accueil en accédant à Tableau de bord > Pages. Choisissez une page de destination ou créez-en une nouvelle. C'est simple et intuitif, et vous pouvez commencer à travailler dessus immédiatement.",
            'action' => 'Personnaliser ma page de destination',
        ],
        'step-payment' => [
            'title' => 'Configurer les méthodes de paiement',
            'message' => "Commencez à accepter les paiements directement sur votre compte bancaire. Pour connecter vos fournisseurs de paiement comme Stripe, PayPal, etc., accédez à Tableau de bord > Comptabilité > Passerelle.",
            'action' => 'Ajouter des méthodes de paiement',
        ],
        'step-products' => [
            'title' => 'Ajoutez vos produits',
            'message' => "Ajoutez facilement des produits et des catégories dans le tableau de bord > Produits. C'est comme gérer des fichiers et des dossiers sur votre PC : entièrement compatible avec le glisser-déposer. Vous pouvez également importer des produits en masse à l’aide d’Excel. Un exemple de modèle est disponible pour vous aider à démarrer.",
            'action' => 'Gérer mes produits',
        ],
        'step-shipping' => [
            'title' => 'Configurer les méthodes d\'expédition',
            'message' => "Pour facturer les frais d'expédition aux clients, définissez vos méthodes d'expédition dans Tableau de bord > Logistique > Expédition. Vous pouvez définir des tarifs et une assistance différents pour différents emplacements. N'oubliez pas de définir l'origine de votre entrepôt dans Tableau de bord > Logistique > Entrepôt.",
            'action' => 'Gérer les méthodes d\'expédition',
        ],
    ],


    'charge-account' => [
        'category' => 'Portefeuille > Compte > Frais',
        'title' => "Frais de réussite",
        'message' => "Votre compte <b>:account_number</b> a été débité avec succès <b>:amount</b>.",
        'account' => 'Compte',
        'charge' => 'Charger',
        'balance' => 'Solde',
        'footer' => "Rendez les affaires faciles, réalisables et accessibles à tous dans le monde."
    ],

    'verify-email' => [
        'subject' => "🙌 Complétez votre inscription à Selldone ! Vérifiez le lien.",
        'category' => "VOUS ÊTES À UN PAS",
        'title' => "Vérifiez votre adresse e-mail",
        'message' => "Bonjour :name, <br><br>Merci d'avoir choisi Selldone !<br><br>Pour confirmer que <b>:email</b> est votre adresse e-mail correcte, veuillez cliquer sur le bouton ci-dessous ou utiliser le lien fourni. Vous disposez de 48 heures pour effectuer cette vérification.",
        'footer' => "Si vous ne parvenez pas à cliquer sur le bouton Vérifier, copiez et collez l'URL ci-dessous dans votre navigateur Web : :activation_url",
        'next-step' => "Ensuite, nous vous enverrons des documents utiles et un guide étape par étape pour vous permettre d'ajouter facilement votre domaine personnalisé, de configurer les paiements, d'ajouter des produits et d'obtenir votre première commande.",

    ],
    'verify-email-code' => [
        'subject' => "Code de vérification pour :name",
        'category' => "SECURITY",
        'title' => "Code de vérification par e-mail",
        'message' => "Bonjour :name, <br><br>Pour confirmer que <b>:email</b> est votre adresse e-mail correcte, veuillez saisir le code suivant dans les prochaines <b>10 minutes</b> :",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Votre boutique est prête| :name",
        'category' => "VOUS ÊTES À UN PAS",
        'title' => "Configuration terminée",
        'account_title' => "Votre compte",
        'account_msg' => "Vérifiez et connectez-vous à votre compte avec ces informations.",
        'shop_msg' => "Informations de compte sur le système d'exploitation d'entreprise Selldone.",

    ],

    'reset2fa' => [
        'category' => "MESSAGE OFFICIEL DE SÉCURITÉ",
        'title' => "Demander la désactivation de la connexion en 2 étapes",
        'message' => "Vous recevez cet e-mail, car nous avons reçu une demande de réinitialisation de l'authentification à deux facteurs pour le compte **:name** avec l'e-mail **:email**. <br><br>Nous avons trouvé les détails suivants pour votre compte :",
        'footer' => "Si vous n'avez pas demandé de réinitialisation de mot de passe, aucune autre action n'est requise.",
        'action' => 'Désactiver la connexion en deux étapes',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Votre boutique est prête maintenant !",
        'category' => "BORN NEW BOUTIQUE EN LIGNE DANS LE MONDE",
        'title' => "Félicitations, :name !",
        'message' => "<b>Félicitations, :name ! Votre nouvelle activité en ligne est maintenant en ligne !</b> Nous sommes ravis de vous accueillir dans la communauté Selldoners. Vous avez fait le premier pas vers le succès et nous sommes là pour vous aider à chaque étape du processus.<br>Maintenant que votre boutique est prête, assurons-nous que vous êtes prêt à recevoir les paiements directement de vos clients et à commencer à développer votre empire. Si jamais vous avez besoin d'aide, nous sommes à votre disposition : notre équipe d'assistance est toujours là pour vous. <br><br><b>Prochaines étapes importantes : </b> Pour commencer, assurez-vous que vous êtes tous prêts à recevoir des paiements et à effectuer des opérations fluides. Nous vous guiderons à travers chaque étape pour que votre boutique fonctionne sans problème.",
        'pdf-book' => "Ne manquez pas le manuel ci-joint : Do Your Business Like A Game",

        'account' => [
            'title' => 'Étape 1 : Créez un compte dans le portefeuille Selldone',
            'message' => "Pour commencer, créez un compte dans votre portefeuille Selldone. C'est ici que vos frais seront déduits, et c'est également là que vous rechargerez pour assurer le bon fonctionnement de votre boutique. Si jamais votre solde devient négatif, ne vous inquiétez pas ! Votre magasin continuera à fonctionner sans interruption.",
            'action' => 'Connectez-vous au portefeuille',
        ],

        'shop-account' => [
            'title' => 'Étape 2 : connectez le compte à la boutique',
            'message' => "Ensuite, connectez votre compte portefeuille à votre boutique. Dirigez-vous vers <b>Store > Comptabilité > Invoice</b> et associez votre portefeuille. Cela garantit que tous les paiements des clients sont déposés directement sur votre compte bancaire : Selldone ne déduit aucun montant de vos revenus.",
            'action' => 'Panneau de facturation du magasin',
        ],

        'gateway' => [
            'title' => 'Étape 3 : Connecter la passerelle de paiement en ligne',
            'message' => "Maintenant, configurons votre passerelle de paiement en ligne. Accédez à <b>Store > Comptabilité > Port</b> et cliquez sur <b>Ajouter un nouveau port</b>. Sélectionnez votre devise et vous verrez une liste des passerelles de paiement disponibles. Connecter une passerelle est simple et rapide, mais si vous avez besoin d'aide, n'hésitez pas à consulter les guides Selldone ou à nous contacter.",
            'action' => 'Ajouter un portail au magasin',
        ],

        'domain' => [
            'title' => 'Dernière étape : connecter un domaine dédié',
            'message' => "Maintenant, associez votre domaine personnalisé à votre boutique. Cela permet aux clients d’acheter vos produits ou services et de vous payer directement.",
            'action' => 'Présentation et réception de cartes-cadeaux illimitées',
        ],
    ],


    'basket-list' => [
        'item' => "Objet",
        'count' => "Compter",
        'price' => "le prix",
        'discount-code' => "Code de réduction",
        'customer-club' => 'Club client',
        'shipping' => "Expédition",
        'total' => "Total",
        'offer' => "Offre",
        'coupon' => "Coupon",
        'lottery' => "Décerner",
        'tax' => "Impôt",
        'tax_included' => "Inclus dans le prix",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Méthode',
        'amount' => 'Montant',
        'giftcard' => 'Gift card',
        'payment' => 'Paiement',
    ],


    'shop-subscription-email' => [
        'category' => "Mise à jour de l'abonnement",
        'title' => "Licence de magasin : :shop_title",
        'title-reserved' => "Licence de réserve : :shop_title",
        'title-active' => "Licence active : :shop_title",
        'title-finished' => "Licence terminée : :shop_title",
        'title-cancel' => "Annuler la licence : :shop_title",
        'message' => "Votre plan de licence boutique mis à jour,",
        'RESERVED' => "⚡ Votre plan d'abonnement a été **réservé**.",
        'ACTIVE' => "🟢 Votre plan d'abonnement a été **activé**.",
        'FINISHED' => "🚧 Votre plan d'abonnement est **terminé**.",
        'CANCEL' => "⛔ Votre plan d'abonnement a été **annulé**.",
    ],

    'support' => [
        'subject' => "Centre d'assistance|:name a répondu",
        'category' => "Centre de soutien",
        'title' => "Vous avez reçu une réponse",
        'action' => "Ouvrir l'administrateur de la boutique",
    ],

    'shop-customer-join' => [
        'subject' => "Rejoindre :shop_title",
        'category' => "Fête des nouveaux clients",
        'title' => "Nous sommes heureux de votre adhésion",
        'action' => "Visitez maintenant",
    ],

    'shop-vendor-join' => [
        'subject' => "Intégration des fournisseurs | :shop_title",
        'category' => "Célébration d'un nouveau fournisseur",
        'title' => "Nous sommes heureux de votre adhésion",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Carte cadeau :shop_title",
        'category' => "Ajouter une nouvelle carte",
        'title' => "Félicitations, vous avez reçu une carte cadeau",
        'action' => "Achetez maintenant",
        'message' => "Vous avez reçu une carte cadeau d'un montant de :balance :currency. Vous pourrez acheter dans notre magasin avec cette carte-cadeau.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centre d'assistance| :shop",
        'category' => "soutien",
        'title' => "Vous avez reçu une réponse",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Confirmation de commande|Commande :order_id",
        'title' => "commande",
        'message' => "Vous avez passé une commande dans notre magasin. Nous avons reçu votre commande et vous enverrons un autre e-mail une fois le paiement confirmé."
    ],

    'order-payment' => [
        'subject' => "🛍️ Confirmation de paiement|Commande :order_id",
        'title' => "Ordre de paiement",
        'message' => "Votre paiement effectué,<br> Nous avons votre commande. Nous vous enverrons un autre e-mail lorsque votre commande sera expédiée.",
    ],

    'order-update' => [
        'subject' => "🛍️ Mise à jour du statut de la commande|Commande :order_id",
        'title' => "Mise à jour du statut de la commande",
        'message' => "Votre commande a été mise à jour. Vous pouvez vérifier le dernier statut de cette commande dans votre compte.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Votre commande est en file d'attente pour traitement. Nous vous informerons lorsqu’il sera en préparation.",
                'OrderConfirm' => "Votre commande est confirmée et la préparation a commencé.",
                'PreparingOrder' => "Votre commande est en cours de préparation et sera expédiée prochainement.",
                'SentOrder' => "Votre commande a été expédiée. Vous le recevrez sous peu.",
                'ToCustomer' => "Votre commande a été livrée. Nous espérons que vous l'apprécierez !",

                'PreparingOrder-PICKUP' => "Votre commande est en cours de préparation. Vous recevrez une notification lorsqu'il sera prêt à être récupéré.",
                'SentOrder-PICKUP' => "Votre commande est prête à être récupérée. Merci de venir au magasin pour le récupérer.",
                'ToCustomer-PICKUP' => "Votre commande a été récupérée. Nous espérons que vous l'apprécierez !"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Votre commande est en file d'attente pour traitement. Nous vous informerons quand il sera prêt.",
                'OrderConfirm' => "Votre commande est confirmée et la préparation est en cours.",
                'PreparingOrder' => "Votre commande est en cours de préparation et vous sera envoyée prochainement.",
                'ToCustomer' => "Votre commande virtuelle a été livrée sur votre compte. Merci!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Votre demande de service est dans la file d'attente. Nous vous informerons lorsque nous commencerons.",
                'OrderConfirm' => "Votre service est confirmé et nous nous préparons à commencer.",
                'PreparingOrder' => "Nous préparons votre prestation et vous informerons une fois celle-ci terminée.",
                'ToCustomer' => "Votre prestation est terminée. Merci de nous avoir choisis !"
            ],
            'FILE' => [
                'PreparingOrder' => "Votre dossier est en cours de préparation et sera disponible prochainement.",
                'ToCustomer' => "Votre dossier est prêt et a été livré. Vous pouvez maintenant le télécharger."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Votre commande d'abonnement est dans la file d'attente. Nous vous informerons lorsque le traitement commencera.",
                'OrderConfirm' => "Votre abonnement a été confirmé et est en cours de mise en place.",
                'PreparingOrder' => "Nous préparons votre abonnement et il débutera bientôt.",
                'SentOrder' => "Votre abonnement a été activé. Vous recevrez des mises à jour continues.",
                'ToCustomer' => "Votre service d'abonnement a été activé avec succès."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Félicitations :name|Nouveau bon : :title',
        'category' => "FÉLICITATION, NOUVEAU BON",
        'message' => "Salut :name,<br><br>Vous avez reçu un nouveau bon en cadeau de notre part ! Vous pouvez gagner encore plus de bons en présentant Selldone à vos amis et à toutes vos connaissances. Ce bon vaut **:price :currency**.<br><br>Vous avez fait le premier pas et nous sommes là pour vous aider à débloquer de nouvelles fonctionnalités avec votre bon ! Veuillez vous connecter avec **:email** et trouver votre bon dans la boutique **Tableau de bord** > **Paramètres** > **Licence**.<br><br>Félicitations !",
        'action' => "Mon tableau de bord",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Félicitations, cher :name|Vous avez reçu un cadeau spécial !',
        'category' => "Annonce de réception d'un cadeau",
        'title' => "Cadeaux pour vous",
        'message' => "Bonjour :name, nous sommes ravis de vous annoncer que vous avez reçu un cadeau spécial de Selldone ! 🎉 Vous pouvez gagner plus de cadeaux en restant actif, en développant votre boutique et en améliorant votre expertise sur Selldone. Pour consulter votre cadeau, connectez-vous simplement avec :email et recherchez-le dans le coin supérieur droit de votre tableau de bord. <br><br>Ce cadeau vaut **:price :currency**, et vous pouvez facilement le déposer dans votre portefeuille dans Selldone.<br><br>Utilisez votre cadeau pour mettre à niveau la licence de votre magasin. et débloquez des outils encore plus puissants pour booster votre activité en ligne !",
        'action' => "Cadeaux",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nouvelle commande reçue| :order_id",
        'title' => "New Order",
        'message' => "Vous avez reçu une nouvelle commande. Veuillez vous rendre sur la page de traitement des commandes de votre magasin.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Vos informations remplies',
        'output-form-title' => 'Informations sur l\'article acheté',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬:shop_title|Rapport hebdomadaire :time',
        'title' => 'Rapport hebdomadaire sur les performances du magasin',
        'message' => "Il s'agit du rapport hebdomadaire de votre magasin, de <b>:start</b> à <b>:end</b>. Ce rapport comprend des conseils pour améliorer votre entreprise, vous pouvez également vérifier l'état de votre boutique en ligne et les commandes récentes. J'espère que vous passerez une bonne journée et une bonne semaine."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Votre rapport d\'épargne :amount au cours des trois derniers mois | :shop_title',
        'title' => 'Rapport saisonnier sur l\'activité de votre entreprise, les récompenses et les économies financières',
        'message' => "Il s'agit de votre rapport saisonnier <b>:shop_title</b>, de <b>:start</b> à <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Comptes connectés',
        'sub-title' => 'Quel est le dernier statut des comptes portefeuille connectés à ma boutique ?',
        'view-wallet' => 'Voir le portefeuille',
        'tip-title' => 'Conseils importants',
        'tip' => "Créez un portefeuille Selldone gratuit et associez-le à votre boutique. Même si votre solde est négatif, vos clients peuvent toujours faire leurs achats et payer sans aucun problème. Ne vous inquiétez pas, les opérations et les données de votre boutique se poursuivront sans problème pendant 1 mois maximum, sans aucune interruption.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Connectez-vous au compte'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Applications installées',
        'sub-title' => 'Liste des applications que vous avez installées dans votre boutique cette semaine.',
        'tip' => "Voulez-vous trouver plus d'applications pour votre magasin ?",
        'view-app-store' => 'Visitez l\'App Store de Selldone.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Les robots de votre magasin',
        'sub-title' => 'Bots de vente actifs dans mon magasin.',
        'tip-title' => 'Vente de robots',
        'tip' => "Selldone vous a fourni des bots de vente automatiques. Tout ce que vous avez à faire est d'aller dans le panneau Add-ons> Bots et d'activer les bots de votre boutique. Notez que le service concerné doit être disponible dans votre pays.",
        'view-bots' => 'Gérer les robots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Communication avec les clients',
        'sub-title' => 'Combien de contacts ai-je eu avec mes clients cette semaine ?',
        'faqs' => 'Questions fréquemment posées',
        'tickets' => 'Billets Clients',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Statut des utilisateurs',
        'sub-title' => 'Activité de :start à :end',
        'users' => [
            'title' => 'Les clients',
            'subtitle' => 'Inscription d\'utilisateurs',
        ],
        'views' => [
            'title' => 'Visites',
            'subtitle' => 'Combien de fois avez-vous visité le magasin',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utilisateurs retournés',

        'shop_views' => 'Vues de la boutique',
        'baskets' => [
            'title' => 'Paniers',
            'subtitle' => 'Signaler le nombre de nouveaux paniers',
        ],
        'products' => [
            'title' => 'Présentation des produits',
            'subtitle' => 'Statut des produits dans le magasin par type',
            'value_name' => 'Des produits'
        ],
        'products_count' => 'Types de produits',
        'views_count' => 'Nombre de vues',
        'sell_count' => 'Nombre de ventes',
        'send_count' => 'Nombre d\'expédition',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Livraison directe',
        'sub-title' => 'Panel pour les principaux vendeurs de Drop Shipping Selldone.',
        'total_fulfillments' => 'Total des commandes reçues',
        'ds_count' => 'Commandes reçues',
        'statistics_title' => 'Signaler les commandes reçues',
        'ds_cancels' => 'Annulation par le vendeur de l\'interface',
        'ds_rejects' => 'Annuler par vous',
        'tip' => "Êtes-vous un important vendeur de marchandises ? Possédez-vous un entrepôt, une usine ou un distributeur de produits ? Vous pouvez proposer vos produits à d'autres vendeurs dans le service Selldone Drop Shipping pour vendre votre produit à grande échelle. Envoyez-nous un e-mail à support@selldone.com pour vous guider.",
        'view-drop-shipping-panel' => 'Connectez-vous au panneau de vente en gros',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Taux d\'échange',
        'sub-title' => 'Liste des derniers taux de conversion des devises dans votre magasin.',
        'from' => 'Devise d\'origine',
        'to' => 'Devise de destination',
        'rate' => 'Taux de conversion',
        'view-exchange-panel' => 'Gérer les taux de change',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contrats d\'experts',
        'sub-title' => 'Quels professionnels travaillent sur ma boutique ?',
        'cost' => 'Montant du contrat',
        'duration' => 'Durée',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Date Annuler',
        'end_at' => 'La date de livraison',
        'tip' => 'Vous pouvez engager les meilleurs spécialistes de Selldone pour développer votre activité.',
        'view-experts' => 'Cliquez pour commencer.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Signaler les passerelles de paiement actives sur la boutique :shop.',
        'tip-title' => 'Conseils importants',
        'tip' => "Rendez-vous sur la page de gestion du portail de votre boutique et ajoutez au moins un port en quelques minutes. Vos clients aiment payer rapidement et en toute sécurité via des portails en ligne.",
        'view-shop-gateways' => 'Connectez-vous à la gestion du portail de ma boutique.',
        'view-gateways' => 'Voir plus de passerelles',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Ordres',
        'sub-title' => 'Liste des commandes que j\'ai reçues cette semaine.',
        'total_baskets' => 'Commandes totales',
        'total_posBaskets' => 'Total des commandes en espèces',
        'pos-title' => 'Boîte de magasin POS',
        'chart-label' => 'Commandes terminées (ces commandes ne sont pas forcément payées !)',
        'tip-title' => 'Tu devrais essayer plus fort...',
        'tip' => "Pas de simple réussite.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centre de traitement',
        'sub-title' => 'Combien de commandes avons-nous traitées dans le magasin cette semaine ?',
        'tip-title' => 'Vous n\'avez pas eu de vente !',
        'tip' => "Malheureusement, vous n'avez pas eu de ventes cette semaine. Vous devez en obtenir plus dans votre magasin. Vous pouvez ajouter plus de produits, choisir de meilleures images ou rédiger de meilleures descriptions pour vos produits. Envisagez un emploi à temps plein pour votre entreprise. Si vous le faites correctement et que vous ne vous frustrez pas, vous réussirez.",
        'view-process-center' => 'Voir le centre de traitement',
        'return' => [
            'title' => 'Commande retournée',
            'subtitle' => 'Signaler les commandes retournées.',
            'tip-title' => 'Saviez-vous que...',
            'tip' => "Vous pouvez créer autant de caisses enregistreuses que nécessaire avec Selldone POS ! Qu'il s'agisse de votre tablette, de votre mobile ou de votre ordinateur portable, vous pouvez transformer n'importe quel appareil en point de vente de votre magasin. C'est simple, rapide à configurer et entièrement préparé pour votre serveur. Commencez à l'utiliser dès aujourd'hui !",
            'view-pos' => 'Connectez-vous à la caisse de ma boutique en ligne'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Séances',
        'sub-title' => 'Combien de fois ai-je visité mon magasin ?',
        'countries-title' => 'Quels pays ont été les plus visités ?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Voulez-vous gagner de l\'argent sans dépenser un dollar?',
        'message' => "Bonjour :name, il est temps de commencer à gagner avec Selldone ! Accédez à Tableau de bord > Plus > Monétisation > Obtenez votre lien de parrainage. Partagez le lien avec vos amis et gagnez des cartes cadeaux et une part de leurs paiements. La meilleure partie ? Vous et votre ami recevez une carte-cadeau !",
        'action' => 'Voir mon lien d\'introduction',
        'mail-clip' => "<b style='color: #C2185B'>Important :</b> Si vous utilisez des services de messagerie tels que Gmail qui limitent la longueur de l'e-mail, recherchez l'option suivante à la fin de l'e-mail pour afficher le rapport complet et cliquez dessus :",

        'no-coin-reward' => "<b style='color: #C2185B'>Désolé :</b> votre activité n'a pas rempli les conditions requises pour obtenir une récompense SEL Coins gratuite. Essayez plus fort et vendez plus sur votre boutique pour la saison prochaine.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Récompense :</b> Félicitations, grâce à vos performances fantastiques, nous vous avons offert une récompense gratuite de :amount SEL Coin.",

        'need-buy-license' => "<b>Faites évoluer votre entreprise :</b> Il semble que vous n'ayez pas encore enregistré de plan d'abonnement pour votre site Web ! Mettez à niveau maintenant pour débloquer plus de fonctionnalités pour seulement :amount par mois si payé annuellement.",
        'not-afford-message' => "Si vous ne pouvez pas vous permettre ou avez des problèmes avec le paiement, n'hésitez pas à nous le dire via support@selldone.com.",
        'add-domain' => "<b>Pourquoi ne pas avoir un domaine personnalisé pour votre entreprise ?</b><br> Ajoutez un domaine à votre site Web maintenant ; c'est gratuit!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone est un<del> produit</del> <span style = 'color: forestgreen'>communauté</span> .<br> Soyez un revendeur professionnel !",
        'message' => "Suivez les pages officielles de Selldone sur Twitter, LinkedIn et les réseaux sociaux. Envoyez-nous vos commentaires, demandes ou critiques ou participez aux discussions sur Selldone. Nous faisons également partie de la communauté de Selldone que <b>vous créez</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nouvelles commandes d\'avocats reçues|:shop_title :time',
        'title' => "Rapport de performances des dernières 24 heures",
        'message' => "Vos clients attendent que vos commandes soient examinées et tarifées. Répondez aux demandes de vos clients dès que possible pour obtenir plus de ventes.",
        'card_title' => "Commandes dans la file d'attente",
        'card_subtitle' => "Depuis :date",

        'card_payed' => "Commandes payées"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Nouvelles réponses à votre message dans :community_title',
        'title' => ":name et :count d'autres personnes ont commenté vos messages.",
        'message' => "Bonjour :name, vos messages retiennent l'attention ! Vous avez reçu des commentaires dans notre communauté. Connectez-vous à votre compte pour rejoindre la discussion et voir ce que tout le monde dit.",
        'title-simple' => ":name a commenté votre message !",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Répondez à votre sujet :topic_title',
        'title' => ":name et :count d'autres personnes ont répondu à votre sujet.",
        'message' => "Bonjour :name, votre sujet retient l'attention ! Vous avez reçu des réponses dans notre communauté. Connectez-vous à votre compte pour rejoindre la discussion et voir ce que tout le monde dit.",
        'title-simple' => ":name a répondu sur votre sujet.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nouvelle connexion :name',
        'category' => 'Notifications de sécurité',
        'title' => "Connectez-vous au compte",
        'message' => "Cher :name, vous êtes connecté à votre compte Selldone.",   // Login in selldone (seller)
        'message-shop' => "Cher :name, vous êtes connecté à :shop_title .",  // Login in shop (buyer)

        'footer' => "Si vous n'êtes pas connecté, veuillez changer votre mot de passe.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Retrait",
        'deposit' => "Verser",

        'withdraw_subject' => "Retirer du compte :account",
        'deposit_subject' => "Dépôt sur le compte :account",

        'message' => "Le transfert d'argent a été effectué avec les spécifications suivantes.",

        'type' => "Type de transaction",

        'from' => "Compte source",
        'to' => "Destination account",

        'desc' => "Description de la transaction",
        'action' => "Afficher la transaction",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔Important ! Violation des règles| :shop",
        'category' => "Informer critique",
        'title' => "Votre boutique a été pénalisée",
        'action' => "Ouvrir le tableau de bord de la boutique",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter vous a invité à Selldone",
        'title' => ":name vous a envoyé :amount pour vous aider à lancer votre nouveau site Web en ligne et à le monétiser !",
        'message' => "Bonjour **:receiver_name**,<br><br>Bienvenue sur Selldone ! Sur Selldone, vous pouvez facilement créer votre site de commerce électronique, votre blog, votre communauté en ligne et même mettre en place un système de point de vente en ligne pour les ventes en personne, le tout en quelques minutes. Il s'agit du système d'exploitation d'entreprise en ligne complet conçu pour rendre votre entreprise meilleure, plus rapide et plus facile à gérer. <br><br>Inscrivez-vous via <b>:date</b> et recevez un bon :amount pour commencer !",
        'accept' => "Accepter l'invitation",
        'owner' => "Propriétaire de",
        'join-date' => "Sur Selldone depuis",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Lien de récupération| :shop",
        'category' => "Sécurité de la boutique",
        'title' => "Lien de récupération du magasin de <b>:shop_name</b> .",
        'message' => "Cet e-mail vous a été envoyé car vous avez demandé la restauration de votre boutique. En cliquant sur le lien ci-dessous, vous récupérerez votre boutique et toutes les données qui lui appartiennent.",
        'action' => "Confirmer la récupération de la boutique",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Combien d\'argent Selldone a-t-il économisé pour votre entreprise ?',
        'sub-title' => 'De la date :start à :end',
        'infrastructure' => [
            'title' => 'Infrastructure',
            'subtitle' => 'Serveurs, CDN, stockage et autres services cloud',
        ],
        'experts' => [
            'title' => 'Experts & Personnel',
            'subtitle' => 'Développeurs, maintenance et support',
        ],
        'total_save' => 'Somme totale économisée'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Vos performances',
        'sub-title' => 'Aperçu de l\'activité de :start à :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utilisateurs retournés',

        'shop_views' => 'Vues de la boutique',
        'baskets' => [
            'title' => 'Paniers',
            'subtitle' => 'Signaler le nombre de nouveaux paniers',

        ],
        'products' => [
            'title' => 'Présentation des produits',
            'subtitle' => 'Statut des produits dans le magasin par type',
            'value_name' => 'Des produits'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Nombre total de pages vues sur le site Web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Vous avez reçu une nouvelle commande. Veuillez vous rendre sur la page de traitement des commandes dans votre panneau fournisseur.",
        'subject' => "🛍️ Nouvelle commande reçue| :order_id",
        'your_revenue' => "Vos revenus",
    ],
    'vendor-invite' => [
        'title' => 'Invitation des fournisseurs',
        'message' => "Vous avez reçu une invitation pour devenir vendeur de :shop_name. Vous pouvez l'accepter ou la refuser en cliquant sur les boutons suivants.",
        'subject' => ":shop_name | Vous avez reçu une invitation pour devenir notre fournisseur",
        'accept' => "Accepter et devenir un fournisseur",
        'reject' => "Rejeter",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitation à rejoindre notre équipe',
        'message' => "Vous avez été invité à rejoindre :vendor_name sur :shop_name. Vous pouvez accepter ou refuser cette invitation en utilisant les boutons ci-dessous.",
        'subject' => "Invitation à rejoindre :vendor_name|Devenez membre de l'équipe",
        'accept' => "Acceptez et rejoignez l'équipe",
        'reject' => "Rejeter",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Votre code de connexion pour :shop",
        'header-message' => "Nous vous envoyons cet e-mail car vous avez demandé un code de connexion pour la boutique. Veuillez trouver ci-dessous votre mot de passe à usage unique (OTP) :",
        'footer-message' => "Ce code sera valable 10 minutes. Si vous n'avez pas demandé ce code de connexion, veuillez ignorer cet e-mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Vérifiez votre email | :shop",
        'title' => 'Vérification de l\'e-mail',
        'header-message' => "Bonjour :name, <br>Veuillez confirmer que **:email** est votre adresse e-mail en cliquant sur le bouton ci-dessous ou en utilisant le lien ci-dessous dans les 48 heures.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Mises à jour du produit| :shop",
        'title' => "Mise à jour sur l'état du produit - Dernières 24 heures",
        'message' => "J'espère que ce message vous trouvera bien. Il s'agit d'une brève mise à jour pour vous informer de l'état de vos produits sur notre plateforme au cours des dernières 24 heures.\nDurant cette période, des changements sont intervenus dans le statut de certains produits. Ces changements peuvent être dus à des achats, à des mises à jour de stocks ou à d'autres événements connexes.\nPour des informations plus détaillées sur chaque produit, veuillez vous connecter à votre compte et consulter la section « Statut du produit ».",
        'action' => "Ouvrir le panneau des fournisseurs",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Commandes groupées reçues| :shop | :date",
        'title' => "Notification de commandes groupées",
        'message' => "Vous avez reçu un lot de commandes groupées. Veuillez visiter la page de traitement des commandes dans votre panneau pour plus de détails. Vous pouvez également télécharger la liste de commandes via le lien sécurisé fourni, valable 7 jours.<br><br>\n        <b>IMPORTANT :</b> Ce lien est valable 7 jours.<br>\n        Ce lien est dynamique, donc chaque fois que vous cliquez dessus, vous recevrez les commandes les plus récentes pour cette date spécifique. <b>Cela signifie que si le statut de paiement de la commande passe à rejeté, vous ne verrez plus cette commande dans le CSV téléchargé, ou si la commande est payée, elle apparaîtra dans la liste.</b><br><br>\n        <ul>\n            <li>Le CSV contient les commandes payées avec une date réservée dans le :date.</li>\n            <li>La date réservée est la date à laquelle l'utilisateur clique sur le paiement sur la page de commande.</li>\n        </ul>\n        <b>Pour éviter les commandes en double, vérifiez toujours la commande ID avant de l'envoyer.</b>",
        'action' => "Télécharger la liste de commandes",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Certains articles de votre commande n'ont pas été acceptés et ne peuvent pas être livrés. Le montant de ces articles sera remboursé sur votre carte sous peu."
    ]

,

    'email-types-description' => [
    ],
    'global' => [
        'Shop' => 'Boutique',
        'dashboard' => 'tableau de bord',
        'comments' => 'commentaires',
        'wallet' => 'porte monnaie',
    ],
    'welcome-email' => [
        'seller' => [
            'title' => 'Êtes-vous un vendeur?',
            'message' => 'Pour commencer à vendre, entrez votre tableau de bord dans Selldone via le lien ci-dessous et créez votre première boutique entièrement gratuitement. Cela prendra quelques minutes et vous aurez votre propre boutique et site en ligne. Nous vous guiderons ensuite vers les étapes suivantes et obtiendrons la passerelle de paiement.',
            'action' => 'Connectez-vous à mon tableau de bord',
        ],
        'buyer' => [
            'title' => 'je suis acheteur',
            'message' => 'Toutes nos félicitations. Une fois que vous êtes membre de Selldone, vous vous débarrasserez de tous les tracas liés à l\'adhésion et à l\'authentification dans les magasins en ligne. Pour bénéficier de n\'importe quel magasin et site utilisant la plateforme Selldone, vous pouvez vous connecter en un clic et rendre votre achat simple, rapide et sûr.',
        ],
    ],
    'order-checkout' => [
        'payments' => 'Paiements',
    ],
    'order-payment' => [
        'payments' => 'Paiements',
    ],
    'EC-ShopExchangeRates' => [
        'vew-exchange-panel' => 'panneau de gestion des taux de change',
    ],
];
