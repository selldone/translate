/*
 * Copyright (c) 2023. Selldone® Business OS™
 *
 * Author: M.Pajuhaan
 * Web: https://selldone.com
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 *
 * All rights reserved. In the weave of time, where traditions and innovations intermingle, this content was crafted.
 * From the essence of thought, through the corridors of creativity, each word, and sentiment has been molded.
 * Not just to exist, but to inspire. Like an artist's stroke or a sculptor's chisel, every nuance is deliberate.
 * Our journey is not just about reaching a destination, but about creating a masterpiece.
 * Tread carefully, for you're treading on dreams.
 */

export default {
  /** @see SShopProductRatingView **/
  surveys: ["Très pauvre", "Pauvres", "Normal", "Bon", "Excellent"],

  /** @see SFooterSection **/
  footer: {
    map: "Carte",
    email: "E-mail",
    phone: "Téléphoner",
    address: "Adresse",

    copyright:
      "L'utilisation du contenu uniquement à des fins non commerciales et avec référence à la source (lien avec {shop_title}). Tous droits réservés à {shop_title}.",
    powered_by: "Alimenté par",
    privacy: "Politique de confidentialité",
    term_of_use: "Conditions d'utilisation",
    shop_app_setting: "Paramétrage de la boutique et RGPD",

    dialog_setting: {
      title: "Paramètres des applications de la boutique",
      app_list: "Liste des candidatures",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Solder",
    review_unit: "La revue",
    not_original: "Pas d'origine",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtre",
    native: {
      title: "Connexion à l'application",
      message:
        "Cette application nécessite l'accès aux informations de votre compte de magasin. Cela inclut l'accès au nom, au numéro de téléphone, à l'adresse, à l'e-mail, à l'historique des commandes, à la commande et à la publication de commentaires sur ce magasin.",
      message_bold:
        "Assurez-vous d'utiliser l'application officielle de la boutique pour entrer dans cette boutique.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Trier par",
    title_small: "Trier par..",
    nothing: "Rien",
    most_views: "Les plus vus",
    most_likes: "Le plus populaire",
    most_recent: "Le plus récent",
    most_sell: "Plus vendu",
    cheapest: "Le moins cher",
    most_expensive: "Très cher",
    only_available: "Disponible",
    view_mode: {
      normal: "Normal",
      grid: "Grille",
      list: "Lister",
      insta: "Style Instagram",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Faux",
    action: "Enchères",
    compare_limit: "limite de 10 articles",
    compare_add: "ajouter pour comparer",
    compare_be_in_list: "Dans la liste de comparaison",

    type: "Taper",
    brand: "Marque",
    category: "Catégorie",
    discount: "Remise",
    track_price: "Suivre le prix",
    waiting_for_auction: "En attendant la vente aux enchères ?",
    inform_auction: "Parlez-moi des enchères",
    return_in_days: "{days} jours de retour sous garantie",
    support24h7: "Assistance 24 heures 7 jours",
    support_normal: "Prise en charge des heures de travail",
    original_guarantee: "Garantie d'origine",
    cod_payment: "Prise en charge du paiement à la livraison",

    pros: "Avantages",
    cons: "Les inconvénients",

    external_link: "Lire la suite",
    notifications: {
      congratulation: "Toutes nos félicitations",
      waiting_list_add_success:
        "Nous vous informerons lorsque ce produit sera mis aux enchères.",
      waiting_list_delete_success: "Vous avez quitté la liste d'attente des enchères.",
    },

    offer_message: "Achetez {min_quantity} et obtenez {percent} % de réduction sur ces articles",
    up_to: "Jusqu'à {per_order}x par commande",
    get_free: "OBTENEZ GRATUITEMENT",
    get_off: "OBTENEZ {percent} % DE RÉDUCTION",
    select_a_vendor_message: "Veuillez sélectionner un fournisseur.",
    product_description_header: "Présentation de {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "En attente de disponibilité",
    inform_me_when_available: "Vous attendez ça ?",
    pay_buy: "Payer et acheter",
    quantity: "Compter",
    quantity_in_basket: "Articles dans le panier",
    count_unit: "X",
    remove: "Éliminer",
    add_to_basket: "Ajouter au panier",
    buy: "Acheter",
    subscribe_now: "Abonnez-vous maintenant",
    unsubscribe: "Se désabonner",
    select_a_subscription_plan: "Sélectionnez d'abord un plan !",
    manage_subscriptions: "Gérer les abonnements",
    notifications: {
      inform_add_success: "Nous vous ferons savoir quand il sera disponible.",
      inform_remove_success: "Vous avez été retiré de la liste d'attente.",
    },
    zip_pin_input: "Code postal / code PIN",
    zip_pin_not_available_msg: "Non disponible à cet endroit!",
    zip_pin_placeholder: "Sélectionnez le code postal/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "La revue",
    spec: "Spécification",
    comments: "commentaires",
    price: "Prix",
    rate: "Taux",
    comment: "Commenter",
    warranty: "garantie",
    return_policy: "Politique de retour",
    guide: "Guide",
    shipping: "Expédition",
    related_products_title: "Produits connexes",
    related_categories_title: "Découvrir dans les collections",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Historique des commandes",
      profile: "Mon profil",
      favorites: "Articles favoris",
      gift_cards: "Cartes cadeaux",
      return_requests: "Commandes retournées",
      basket: "Panier",
    },
    user_menu: {
      my_shops: "Mes magasins",
      go_to_admin: "Gérer {shop_name}",
      exit_from: "Déconnectez-vous {shop_name}",
      chips: "{chips} jetons",
    },
    login_to_shop: "Connectez-vous au magasin",
    login_to_shop_short: "Connexion",
    item_in_basket_message: "{count} Cet article est dans votre panier.",
    search_title: "Rechercher dans le magasin {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Chariot",
    basket_is_empty: "Votre panier est vide.",
    total_price: "Total",
    view_basket: "Votre panier",
    more: "Suite ...",
    accept_and_pay: "Vérifier",
    items: "Articles)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Rejeté",
    table: {
      code: "Code de commande",
      reserved: "Date",
      delivery_state: "Statut de livraison",
      price: "Prix total",
      status: "Statut de paiement",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Code de commande",
      items: "Articles",
      reserved: "Date",
      delivery_state: "Dernier statut",
      price: "Prix total",
      status: "Statut de paiement",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Carte cadeau",
      comments: "commentaires",
      favorites: "Favoris",
      return_requests: "Retour",
      addresses: "Adresses",
      profile: "Profil",
      orders: "Ordres",
      wallets: "Portefeuilles",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Mes portefeuilles",
    subtitle: "Si vous êtes éligible et qu’un programme de cashback est actif, une partie de votre commande sera créditée sur votre portefeuille. Vous pourrez utiliser ces fonds lors de votre prochain achat."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Solde de mon portefeuille',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Commande",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Paiement",
      payment_waiting: "en attente de paiement",
      payment_completed: "Payé",
      table: {
        title: "Titre",
        amount: "Montant",
        description: "La description",
      },
      total_payment: "Le montant payé",
      discount: "Remise",
      discount_code: "Code de réduction",
      delivery_fee: "Frais de port",
      delivery_fee_after: "Pas de livraison payée",

      total_price: "Prix total des articles",
      total_items_discount: "Rabais sur les articles",
      total_price_after_offers: "Total après application des offres",
      total_order_price_before_tax: "Prix total hors taxe",

      buyer_payment: "Montant du paiement de l'acheteur",

      payment_is_in_require_capture_message:
        "Nous avons reçu votre paiement, mais il n'a pas encore été capturé.",
      settle_the_earlier_bill_first: "Réglez d’abord la facture précédente !",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Livraison",
      subtitle: "Informations sur l'acheteur",
      confirm_received_action: "Confirmer la réception du produit",
      confirm_received_info:
        "Cliquez sur le bouton de confirmation si vous avez reçu la commande. Si nécessaire, vous pourrez soumettre une référence si vous recevez une confirmation.",
      Recipient: "Destinataire",
      bill: "Facturer",
      name: "Nom",
      tel: "Téléphoner",
      email: "E-mail",
      country: "Pays",
      state: "État",
      city: "Ville",
      address: "Adresse",
      building_no: "Numéro du bâtiment",
      unit_no: "Numéro d'unité",
      postal_code: "Code postal",
      description: "La description",
      order_delivered: "La commande a été livrée.",
      delivery_time: "Délai de livraison",
      tracking_code: "Code de suivi",
      tracking_url: "URL de suivi",

      notifications: {
        confirm_delivery: "Votre commande est confirmée.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garantie d'originalité des marchandises",
      return: "Retourner",
      table: {
        product: "Nom du produit",
        count: "Compter",
        unit_price: "Prix unitaire",
        total_price: "Prix total",
        discount: "Remise",
        final_price: "Prix final",
        returned: "Revenu",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Retourner",
    count_input: "Nombre d'articles retournés",
    count_input_message: "Combien d'articles retournez-vous ?",
    reason_input: "Raison du retour",
    reason_input_message: "Sélectionnez la raison du retour de cet article.",
    note_input: "La description",
    note_input_hint: "Décrivez la raison du retour ..",
    note_input_message:
      "Décrivez la raison du retour de cet article si nécessaire.",
    media_message:
      "Vous pouvez télécharger une image, un son ou une vidéo du produit ici pour obtenir une meilleure prise en charge des informations sur l'état du produit. La sélection du fichier sera automatiquement envoyée et confirmée.",
    video: "Vidéo",
    voice: "Voix",
    add_action: "Envoyer la demande de retour",
    notifications: "Votre demande de retour a été enregistrée avec succès.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Commande",
    info: {
      title: "Produit virtuel acheté",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Mes informations personnelles",
    name: "Nom",
    email: "E-mail",
    tel: "Tél",
    identity: "Authentification",
    success_kyc: "KYC vérifié",
    no_kyc: "Pas de KYC",
    club: "Niveau de l'utilisateur",
    subscription: "Abonnement aux nouvelles",
    leave_shop: "Quittez ce magasin et supprimez tous les niveaux de clients",
    leave_shop_action: "Quitter le magasin",
    edit_personal_info: "Modifier les informations personnelles",
    leave_dialog: {
      title: "Quitter le magasin",
      message:
        "La désinscription à cette boutique ne supprimera pas les informations et les enregistrements de votre commande.",
      action: "Quitter",
    },
    notifications: {
      leave_success: "Quitter le magasin",
    },
    club_table: {
      discount: "Remise",
      limit: "Limite",
      currency: "Monnaie",
      free_shipping: "Livraison gratuite",
    },

    my_profile: {
      title: "Mon profil",
      subtitle: "Il s’agit des informations de mon profil client pour la boutique.",
      edit_action: "Modifier le profil"
    },
    subscribe_status: {
      subscribed: "Je suis abonné(e) pour recevoir les dernières actualités et promotions par e-mail.",
      unsubscribed: "Je ne suis pas abonné(e) pour recevoir des actualités ou des promotions par e-mail."
    },
    my_club: {
      subtitle: "Mon niveau de club et ses avantages."
    },
    kyc: {
      subtitle: "Il s’agit de mes informations d’identification globales."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Panier",
    total_price: "Montant total",
    shipping: "Frais de port",
    free_shipping: "Livraison gratuite",
    shipping_not_pay: "Non inclus",
    total_discount: "Remise totale",
    customer_club: "Membre du club client",
    customer_club_discount: "Rabais pour les membres",
    final_price: "Paiement final",
    lead_time: "Temps de préparation",
    lead_time_unit: "Heure",
    receive_time: "Délai de livraison préféré",
    select_time: "Sélectionnez le délai de livraison",
    no_select_time: "Dès que possible",
    transportation_type: "Type d'expédition",
    days_input: "Jours de livraison",
    days_input_label: "Jours",
    days_input_no_data: "Sélectionnez au moins un jour",
    time_input: "Délai de livraison",
    time_input_label: "Livraison à",
    time_input_label_no_data: "Sélectionnez au moins un intervalle de temps",
    support_cod: "Paiement à la livraison",
    not_support_cod: "Impossible de payer sur place !",
    final_confirm_action: "Confirmation définitive de la commande",
    pay_and_complete_action: "Payez maintenant",
    pre_confirm_service: "Envoyer la demande",
    cross_selling_discount: "Remise de collecte",

    errors: {
      no_address: "Sélectionnez l'adresse à laquelle vous souhaitez que votre commande soit expédiée.",
      no_phone: "Entrez un numéro de contact pour coordonner la réception des marchandises.",
      select_billing_country: "Sélectionnez votre pays de facturation",
      select_billing_state: "Sélectionnez votre région fiscale",
    },
    same_billing_address: "Informations de facturation identiques à celles du destinataire",
    same_billing_address_desc:
      "L'adresse de facturation est la même que l'adresse de livraison.",
    custom_billing_info: "Informations de facturation différentes",
    custom_billing_info_desc:
      "Vous pouvez entrer votre numéro de taxe et définir une adresse différente pour la facturation.",
    basket_empty: "Le panier est vide",
    extra_shipping_count: "Vous recevrez {count} colis.",
    select_location_error:
      "Trouvez le lieu de réception de l'envoi sur la carte et cliquez sur l'indicateur au milieu de la carte pour déterminer l'adresse exacte du destinataire.",

    billing_business_desc: "Il s'agit d'un compte professionnel avec un numéro fiscal.",
    billing_personal_desc: "C'est un compte personnel.",

    no_billing_title: "Pas de facturation",
    no_billing_desc: "Laissez l'adresse de facturation vide.",

    can_pay_cod_message:"Vous pouvez payer cette commande en espèces à la livraison.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "X",
    lead_unit: "Heure",
    count_input: "Compter",

    price_changed: "Le prix a changé. nouveau prix:",
    offer: "Obtenez {count} x articles avec {percent} % de réduction",
    offer_free: "Obtenez {count} x gratuitement",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Mes adresses",
    subtitle:"Consultez ici vos adresses enregistrées et ajoutez-en facilement une nouvelle.",
    new_action: "Nouvelle adresse",
    receiver: "Destinataire",
    address: "Adresse",
    building_no: "plaque d'immatriculation",
    building_unit: "unité",
    postcode: "Code postal",
    tel: "Tél",
    description: "Noter",

    map: {
      title: "Mes adresses",
      confirm: "Enregistrement d'adresse",
      address_type: "Adresse",
      receptor_type: "Destinataire",
    },
    add_dialog: {
      title: "Nouveau nom d'adresse",
      message: "Entrez un titre pour une nouvelle adresse.",
      address_name_input: "Adresse (obligatoire)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Demandes de retour",
    subtitle:"Consultez ici vos demandes de retour. Pour les articles avec une politique de retour, vous pouvez soumettre une demande depuis la page de commande.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Liste de souhaits",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Mes commentaires",
    first_post: "Premier poste",
    last_edit: "Dernière modification",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Mes cartes-cadeaux",
    add_action: "Ajouter une carte",
    add_card_dialog: {
      title: "Ajouter une carte-cadeau",
      message:
        "Entrez le numéro de carte et le code de sécurité. Une carte-cadeau sera ajoutée à votre compte.",
      card_number_input: "Numéro de carte",
      info: "Remarque : lors de l'achat en magasin, vous aurez la possibilité de payer avec des cartes-cadeaux. En sélectionnant cette option, le montant de votre solde de recharge sera déduit du montant de la commande.",
      add_action: "Enregistrement de la carte",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Comparer le produit",
    action_button: "Comparer",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Aucun produit n'a été ajouté à la liste de comparaison.",
      price: "Prix",
      type: "Taper",
      brand: "Marque",
      warranty: "garantie",
      variants_comparison: "Comparer les variantes de produits",
      spec: "Spécifications techniques",
      pros: "Avantages",
      cons: "Les inconvénients",
      user_review: "Commentaires des utilisateurs",
      rating: "Évaluation",
      rating_count: "Nombre d'avis",
      info: "Vous pouvez partager ce tableau de comparaison de produits avec vos amis en envoyant le lien suivant, ou y accéder ultérieurement en enregistrant ce lien.",
      copy_action: "Copier le lien de comparaison",
      check_list: ["Oui", "Possède"],
      cross_list: ["Non", "N'a pas"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Seuls les originaux",
    only_has_discount: "Uniquement à prix réduit",
    price_range: "Échelle des prix",
    brands: "Marque",
    main_shop_page: "Page principale du magasin",
    home: "Domicile",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Cher/Chère {user}, vous avez acheté ce produit. Qu’en pensez-vous ?",
    notification: {
      title: "Félicitation",
      message: "Votre commentaire a été enregistré.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Nouveau blogue",
    popular: "Populaire",
    topics: "Les sujets",
    suggestions: "Suggestions",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "À propos de nous",
    terms: "Conditions d'utilisation",
    privacy: "Politique de confidentialité",
    contact_us: "Contactez-nous",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Formulaire de contact",
    name: "Nom",
    email: "E-mail",
    phone: "Téléphoner",
    message: "Message",
    notifications: {
      success: "Votre message a été envoyé.",
    },
    submitted_title: "Merci de nous avoir contactés !",
    submitted_message:
      "Nous apprécions votre temps pour nous contacter. Votre message a été reçu et notre équipe l'examine actuellement. Nous vous répondrons dans les plus brefs délais et nous vous remercions de votre patience pendant cette période. Votre intérêt et vos commentaires sont importants pour nous et nous nous engageons à vous fournir le meilleur soutien possible.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Confirmation de paiement",
      payment_success: "Paiement terminé.",
      buy_title: "Acheter",
      pay_by_giftcards: "Votre commande a été payée avec une carte cadeau.",
      free_order: "Votre commande est gratuite.",
      pay_by_cod: "Votre commande a été ajoutée en paiement à la livraison.",
      pay_by_dir:
        "Votre commande a été ajoutée avec succès. Vous pouvez maintenant payer par virement direct, puis télécharger le reçu de paiement sur la page de commande.",
      pay_title: "Paiement",
      qr_code_payment: "Adresse QR code de paiement créée.",
      connecting_to_online_gateway: "Connexion à la passerelle de paiement en ligne.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Resté au début",
    title_between_start_end: "Resté jusqu'au bout",
    title_after_end: "Achevée",
    title_no_start_end: "Sans délai !",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Vous pouvez recevoir un cadeau par commande.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Code promo",
    add_coupon: "Ajouter un coupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Le formulaire d'avocat n'est pas activé !",
    last_update: "Dernière mise à jour:",
    step1:
      "1. Entrez le nom et les détails du produit que vous souhaitez commander et cliquez sur le bouton Ajouter.",
    title_plc: "Entrez le nom du produit.",
    description_plc: "Avez-vous plus de descriptions de produits?",
    link_plc: "Avez-vous un lien vers le produit?",
    image: "Image du produit",
    image_msg: "Vous pouvez envoyer l'image du produit si nécessaire.",
    add_item: "Ajouter un item",
    items_list: "Liste des produits demandés",
    currency_msg: "Vous devez payer le montant de cette commande avec cette devise.",
    step2:
      "2. Après avoir ajouté tous les articles souhaités, cliquez sur le bouton de demande de révision de la commande. À ce stade, nous examinerons la commande et vous informerons du prix. En cliquant sur ce lien, vous pourrez voir le prix et le lien de paiement.",
    order_action: "Enregistrement de la commande",
    show_all: "Afficher tout",
    show_accepted: "Afficher les éléments confirmés",
    last_orders: "Liste de vos commandes récentes",
    pending_status: "à l'étude",
    check_now: "Vérifier la commande",
    add_new_order: "Passer une nouvelle commande",
    pay_online: "Payer en ligne",
    pricing_not_completed_message:
      "Votre commande est en cours d'examen. Votre commande sera examinée et tarifée bientôt et vous pourrez payer la commande.",

    select_address_message:
      "Veuillez entrer votre adresse, puis vous pourrez soumettre la commande.",

    delete_item_dialog: {
      title: "Supprimer l'article du panier",
      message: "Voulez-vous supprimer cet article du panier ?",
      action: "Oui, supprimer",
    },

    notifications: {
      order_success: "Votre commande a été passée avec succès.",
      delete_success: "Article supprimé.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Création de commande",
    message:
      "Créez la liste des produits que vous souhaitez acheter en scannant le code du produit.",

    currency_msg: "La devise avec laquelle vous souhaitez payer.",
    order_action: "Paiement",
    add_new_order: "nouvel ordre",
    continue_order: "Continuer la commande",

    delete_item_dialog: {
      title: "Supprimer l'article du panier",
      message: "Voulez-vous supprimer cet article du panier ?",
      action: "Oui, supprimer",
    },
    notifications: {
      order_success: "Votre commande a été passée avec succès.",
      delete_success: "Article supprimé.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Télécharger l'image du reçu de paiement.",
    upload_payment_receipt_done:
      "✔ Vous avez déjà téléchargé l'image du reçu, attendez notre approbation. Si vous avez besoin de changer, vous pouvez remplacer l'image précédente par une nouvelle.",
    public_form_title: "Informations sur le compte pour le transfert d'argent",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Liste de choses à faire",
      message: "Précisez les titres des travaux que vous souhaitez faire et informez l'acheteur de l'état d'avancement des travaux.",
    },
    booking: {
      title: "Réservation réservation",
      message: "Cette commande sera traitée à une heure précise, le client a sélectionné la période souhaitée, si vous souhaitez apporter des modifications dans la période sélectionnée, faites-le savoir au client.",

      selected_checkin: "Enregistrement sélectionné par client",
      selected_checkout: "Check-out sélectionné par le client",
      change_days_question:
        "Avez-vous besoin de changer pendant les jours sélectionnés par le client ?",
      show_calendar: "Afficher le calendrier des commandes",
    },
    pricing: {
      title: "Tarification",
      message: "Combien facturez-vous pour ce service ?",
    },
    subscription: {
      title: "Abonnement",
      message:
        "Vous pouvez choisir la période d'abonnement en achetant ce service quotidiennement. Informez l'acheteur si vous souhaitez modifier les valeurs par défaut que vous avez déjà saisies.",
      duration: "Période d'abonnement",
    },
    charge: {
      title: "Charger",
      message:
        "Vous avez indiqué des frais pour cet article. Vous pouvez modifier le montant des frais pour l'article acheté par le client.",
      charge: "Charger",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "En attente de vérification d'accès...",
    no_access_message:
      "Malheureusement, vous n'avez pas accès à notre boutique.<br/> Contactez nous s'il vous plait.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Partager la commande",
    title: "Partagez cette commande avec d'autres.",
    message:
      "C'est un lien sécurisé, ne le partagez qu'avec ceux que vous connaissez. Toute personne disposant de ce lien peut dupliquer votre commande et voir l'adresse sélectionnée. Il contiendra des informations sur votre panier actuel.",
    valid_period: "Ce lien expirera après 48 heures.",
    import_order_action: "Commande d'importation",
    retrieve_dialog_title: "Récupérer la commande externe",
    address_included: "Partager les articles du panier + Adresse",
    address_excluded: "Partager uniquement les articles du panier",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Des prix",
    inventory: "Inventaire",
    discount: "Remise",
  },

  rating: {
    product_rating_message:
      "Ce produit a reçu une note de {rate} sur 5 étoiles et évalué par {rate_count} personnes.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Explorer!",
      same_tags_subtitle: "Trouvez des articles connexes plus remarquables.",
      same_category_subtitle: "Trouvez des articles plus remarquables dans cette catégorie.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Commandez {product} avec",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Voir la boutique de {vendor}",
  },

  login: {
    welcome: "Accueillir",
  },


};
