export default {
  /** @see ProductRatingView **/
  surveys: ["Très mauvais", "Mauvais", "Normal", "Bon", "Excellent"],


  /** @see ShopFooter **/
  footer: {
    map: "Carte",
    email: "E-mail",
    phone: "Téléphone",
    address: "Adresse",

    copyright:
      "L'utilisation du contenu uniquement à des fins non commerciales et en référence à la source (lien avec {shop_title}). Tous droits réservés à {shop_title}.",
    powered_by: "Alimenté par",
    privacy: "Politique de confidentialité",
    term_of_use: "Conditions d'utilisation",
    shop_app_setting: "Paramétrage de la boutique & RGPD",

    dialog_setting: {
      title: "Paramètres des applications de la boutique",
      app_list: "Liste des candidatures",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Épuisé",
    review_unit: "revoir",
    not_original: "Pas d'origine",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtre",
    native: {
      title: "Connexion à l'application",
      message:
        "Cette application nécessite l'accès aux informations de votre compte de magasin. Cela inclut l'accès au nom, au numéro de contact, à l'adresse, à l'e-mail, à l'historique des commandes, aux commandes et à la publication de commentaires sur ce magasin.",
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
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Faux",
    action: "Enchères",
    compare_limit: "Limite de 10 articles",
    compare_add: "Ajouter pour comparer",
    compare_be_in_list: "Dans la liste de comparaison",

    type: "Taper",
    brand: "Marque",
    category: "Catégorie",
    discount: "Remise",
    track_price: « Suivre le prix »,
    waiting_for_auction: "En attente d'enchères ?",
    inform_auction: "Parlez-moi des enchères",
    return_in_days: "{days} jours de retour de garantie",
    support24h7: "Assistance 24 heures 7 jours",
    support_normal: "Accompagnement des heures de travail",
    original_guarantee: "Garantie d'origine",
    cod_payment: "Paiement à la livraison",

    pros: "Avantages",
    cons: "Les inconvénients",

    external_link: "Lire la suite",
    notifications: {
      congratulation: "Toutes nos félicitations",
      waiting_list_add_success:
        "Nous vous informerons lorsque ce produit sera mis aux enchères.",
      waiting_list_delete_success: "Vous êtes sorti de la liste d'attente des enchères.",
    },

    offer_message: "Achetez {min_quantity} obtenez {percent} % de réduction sur ces articles",
    up_to: "Jusqu'à {per_order}x par commande",
    get_free: "OBTENEZ GRATUITEMENT",
    get_off: "OBTENEZ {pourcent} % DE RÉDUCTION",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "En attente de disponibilité",
    inform_me_when_available: « En attendant ça ? »,
    pay_buy: "Payez et achetez",
    quantity: "Compter",
    quantity_in_basket: "Articles dans le panier",
    count_unit: "x",
    remove: "Supprimer",
    add_to_basket: "Ajouter au panier",
    buy: "Acheter",
    notifications: {
      inform_add_success: "Nous vous informerons lorsqu'il sera disponible.",
      inform_remove_success: "Vous avez été retiré de la liste d'attente.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Revoir",
    spec: "Spécification",
    comments: "commentaires",
    related_products_title: "Produits connexes",
    price: "Prix",
    rate: "Taux",
    comment: "commenter",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "Historique des commandes",
      profile: "Profil",
      favorites: "Mes favoris",
      gift_cards: "Cartes cadeaux",
      return_requests: "Demandes de retour",
      basket: "Panier",
    },
    user_menu: {
      my_shops: "Mes magasins",
      go_to_admin: "Gérer {nom_boutique}",
      exit_from: "Déconnexion {shop_name}",
      chips: "{chips} Chips",
    },
    login_to_shop: "Connectez-vous au magasin",
    login_to_shop_short: "connexion",
    item_in_basket_message: "{count} Cet article est dans votre panier.",
    search_title: "Rechercher en magasin {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Chariot",
    basket_is_empty: "Votre panier est vide.",
    total_price: "Le total",
    view_basket: "Voir le panier",
    more: "Suite ...",
    accept_and_pay: "Vérifier",
    items: "éléments)",
  },



  /** {@see HistoryOrdersPhysical} **/
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
  /** {@see OrdersHistoryListTemplate} **/
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

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Carte cadeau",
      comments: "commentaires",
      favorites: "Favoris",
      return_requests: "Retour",
      addresses: "Adresses",
      profile: "profil",
      orders: "Ordres",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "Commander",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Paiement",
      payment_waiting: "En attente de paiement",
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

      total_price: « Prix total des articles »,
      total_items_discount: "Remise sur les articles",
      total_price_after_offers: "Prix total après application des offres",

      buyer_payment: « Montant du paiement de l'acheteur »,
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Livraison",
      subtitle: "Informations sur l'acheteur",
      confirm_received_action: "Confirmer la réception du produit",
      confirm_received_info:
        "Cliquez sur le bouton de confirmation si vous avez reçu la commande. Si nécessaire, vous pourrez soumettre une référence si vous recevez une confirmation. ",
      receiver: "Destinataire",
      bill: "Facture d'achat",
      name: "Nom",
      tel: "Téléphone",
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
      delivery_time: "Heure de livraison",
      tracking_code: "Code de suivi",
      tracking_url: "URL de suivi",

      notifications: {
        confirm_delivery: "Votre commande a été approuvée.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Garantie d'originalité des marchandises",
      return: "Revenir",
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

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Revenir",
    count_input: "Nombre d'articles retournés",
    count_input_message: "Combien en retournez-vous ?",
    reason_input: "Raison du retour",
    reason_input_message: "Sélectionnez la raison du retour de cet article.",
    note_input: "La description",
    note_input_hint: "Décrivez la raison de la référence ..",
    note_input_message:
      "Décrivez la raison du renvoi de cet article si nécessaire.",
    media_message:
      "Vous pouvez télécharger une image, un son ou une vidéo du produit ici pour obtenir une meilleure prise en charge des informations sur l'état du produit. La sélection du fichier enverra et confirmera automatiquement. ",
    video: "Vidéo",
    voice: "Voix",
    add_action: "Envoyer une demande de retour",
    notifications: "Votre demande de parrainage a été enregistrée avec succès.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "Commander",
    info: {
      title: "Produit virtuel acheté",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Mes informations personnelles",
    name: "Nom",
    email: "E-mail",
    tel: "Tél",
    identity: "Authentification",
    success_kyc: "KYC approuvé",
    club: "Niveau de l'utilisateur",
    subscription: "Abonnement aux nouvelles",
    leave_shop: "Quittez ce magasin et supprimez tous les niveaux de clients",
    leave_shop_action: "Quitter la boutique",
    leave_dialog: {
      title: "Quitter la boutique",
      message:
        "La désinscription à ce magasin ne supprimera pas les informations et les enregistrements de votre commande.",
      action: "Laisser",
    },
    notifications: {
      leave_success: "Quitter la boutique",
    },
    club_table: {
      discount: "Remise",
      limit: "Limite",
      currency: "Monnaie",
      free_shipping: "Livraison gratuite",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "Panier",
    total_price: "Montant total",
    shipping: "Frais de port",
    free_shipping: "Livraison gratuite",
    shipping_not_pay: "Non inclus",
    total_discount: "Remise totale",
    customer_club: "Membre du Club Client",
    customer_club_discount: "Réduction membre",
    final_price: "Paiement final",
    lead_time: "Temps de préparation",
    lead_time_unit: "heure",
    receive_time: "Le temps de recevoir",
    select_time: "Sélectionnez le délai de livraison",
    no_select_time: "Envoyer dès que vous êtes prêt.",
    transportation_type: "type de véhicule",
    days_input: "Jours de livraison",
    days_input_label: "Jours",
    days_input_no_data: "Sélectionnez au moins un jour",
    time_input: "Délai de livraison",
    time_input_label: "Livraison à",
    time_input_label_no_data: "Sélectionnez au moins un intervalle de temps",
    support_cod: "Paiement à la livraison",
    not_support_cod: "Impossible de payer sur place !",
    final_confirm_action: "Confirmation définitive de la commande",
    pay_and_complete_action: "Payez maintenant",
    pre_confirm_service: "Envoyer la demande",

    errors: {
      no_address: "Sélectionnez l'adresse à laquelle vous souhaitez que votre commande soit expédiée.",
      no_phone: "Entrez un numéro de contact pour coordonner la réception des marchandises.",
      select_billing_country: "Sélectionnez votre pays de facturation",
      select_billing_state: "Sélectionnez votre région fiscale",
    },
    same_billing_address: "Informations de facturation identiques aux informations du destinataire",
    custom_billing_info: "Différentes informations de facturation",
    basket_empty: "Le panier est vide",
    extra_shipping_count: "Vous recevrez {count} colis.",
    select_location_error:
      "Trouvez le lieu de réception de l'envoi sur la carte et cliquez sur l'indicateur au milieu de la carte pour déterminer l'adresse exacte du destinataire.",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "heure",
    count_input: "Compter",

    price_changed: "Le prix a changé. nouveau prix:",
    offer: "Obtenez {count}x article avec {percent} % de réduction",
    offer_free: "Obtenez {count}x gratuitement",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "Mes adresses",
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
      confirm: "Enregistrement de l'adresse",
      address_type: "Adresse",
      receptor_type: "Destinataire",
    },
    add_dialog: {
      title: "Nouveau nom d'adresse",
      message: "Entrez un titre pour une nouvelle adresse.",
      address_name_input: "Adresse (obligatoire)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "Demandes de retour",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "Liste de souhaits",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Mes commentaires",
    first_post: "Premier poste",
    last_edit: "Dernière modification",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Mes Cartes Cadeaux",
    add_action: "Ajouter une carte",
    add_card_dialog: {
      title: "Ajouter une carte-cadeau",
      message:
        "Entrez le numéro de carte et le code de sécurité. Une carte-cadeau sera ajoutée à votre compte.",
      card_number_input: "card number",
      info: "Remarque : lors de l'achat en magasin, vous aurez la possibilité de payer avec des cartes-cadeaux. En sélectionnant cette option, le montant de votre solde de recharge sera déduit du montant de la commande. ",
      add_action: "Enregistrement de la carte",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Comparateur de produits",
    action_button: "comparer",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "Aucun produit n'a été ajouté à la liste de comparaison.",
      price: "Prix",
      type: "Taper",
      brand: "Marque",
      warranty: "garantie",
      variants_comparison: "Comparez la diversité des produits",
      spec: "Spécifications techniques",
      pros: "Avantages",
      cons: "Les inconvénients",
      user_review: "Commentaires utilisateurs",
      rating: "Évaluation",
      rating_count: "Nombre d'avis",
      info: "Vous pouvez partager ce tableau comparatif de produits avec vos amis en envoyant le lien suivant, ou y accéder plus tard en enregistrant ce lien.",
      copy_action: "Copier le lien de comparaison",
      check_list: ["Oui", "A"],
      cross_list: ["Non", "N'a pas"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Uniquement des originaux",
    only_has_discount: "Uniquement à prix réduit",
    price_range: "Échelle des prix",
    brands: "Marque",
    main_shop_page: "Page principale du magasin",
    home: "Accueil",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Cher {utilisateur}, Vous avez acheté ce produit. Que pensez-vous de ce produit?",
    notification: {
      title: "Félicitations",
      message: "Votre commentaire a été enregistré.",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Blog",
    add_new_blog: "Nouveau Blog",
    popular: "Populaire",
    topics: "Les sujets",
    suggestions: "Suggestions",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "À propos de nous",
    terms: "Conditions d'utilisation",
    privacy: "Politique de confidentialité",
    contact_us: "Contactez-nous",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Formulaire de contact",
    name: "Nom",
    email: "E-mail",
    phone: "Téléphone",
    message: "Un message",
    notifications: {
      success: "Votre message a été envoyé.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Confirmation de paiement",
      payment_success: "Paiement terminé.",
      buy_title: "Acheter",
      pay_by_giftcards: "Votre commande a été payée avec une carte cadeau.",
      free_order: "Votre commande est gratuite.",
      pay_by_cod: "Votre commande a été ajoutée en paiement à la livraison.",
      pay_by_dir:
        "Votre commande a été ajoutée avec succès. Vous pouvez désormais payer par virement direct, puis télécharger le reçu de paiement sur la page de commande.",
      pay_title: "Paiement",
      qr_code_payment: "Adresse QR code de paiement créée.",
      connecting_to_online_gateway: "Connexion à la passerelle de paiement en ligne.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Reste au début",
    title_between_start_end: "Restant jusqu'au bout",
    title_after_end: "Fini",
    title_no_start_end: "Sans délai !",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Vous pouvez recevoir un cadeau par commande.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Code promo",
    add_coupon: "Ajouter un coupon",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "La forme avocat n'est pas activée !",
    last_update: "Dernière mise à jour:",
    step1:
      "1. Entrez le nom et les détails du produit que vous souhaitez commander et cliquez sur le bouton Ajouter.",
    title_plc: "Entrez le nom du produit.",
    description_plc: "Avez-vous plus de descriptions de produits ?",
    link_plc: "Avez-vous un lien vers le produit ?",
    image: "Image du produit",
    image_msg: "Vous pouvez envoyer l'image du produit si nécessaire.",
    add_item:"Ajouter un item",
    items_list: "Liste des produits demandés",
    currency_msg: "Vous devez payer le montant de cette commande avec cette devise.",
    step2:
      "2. Après avoir ajouté tous les articles souhaités, cliquez sur le bouton de demande d'examen de la commande. A ce stade, nous examinerons la commande et vous informerons du prix. En cliquant sur ce lien, vous pourrez voir le prix et lien de paiement.",
    order_action: "Enregistrement de la commande",
    show_all: "Afficher tout",
    show_accepted: "Afficher les éléments vérifiés",
    last_orders: "Liste de vos dernières commandes",
    pending_status: "à l'étude",
    check_now: "Vérifier la commande",
    add_new_order: "Enregistrer une nouvelle commande",
    pay_online: "payer en ligne",
    pricing_not_completed_message:
      "Votre commande est en cours d'examen. Votre commande sera examinée et son prix sera bientôt évalué et vous pourrez payer la commande.",

    delete_item_dialog: {
      title: "Supprimer l'article du panier",
      message: "Voulez-vous supprimer cet article du panier ?",
      action: "Oui, supprimer",
    },

    notifications: {
      order_success: "Votre commande a été passée avec succès.",
      delete_success: "Élément supprimé.",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Création de commande",
    message:
      "Créez la liste des produits que vous souhaitez acheter en scannant le code produit.",

    currency_msg: "La devise avec laquelle vous voulez payer.",
    order_action: "Paiement",
    add_new_order: "Nouvel ordre",
    continue_order: "Continuer la commande",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Téléchargez l'image du reçu de paiement.",
    upload_payment_receipt_done:
      "✔ Vous avez déjà téléchargé l'image du reçu, attendez notre approbation. Si vous devez changer, vous pouvez remplacer l'image précédente par une nouvelle.",
    public_form_title: "Informations sur le compte pour le transfert d'argent",
  },
};
