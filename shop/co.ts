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
  surveys: ["Assai poviru", "Pauvre", "Normale", "Bene", "Eccellente"],

  /** @see SFooterSection **/
  footer: {
    map: "Mappa",
    email: "E-mail",
    phone: "telefonu",
    address: "Indirizzu",

    copyright:
      "L'usu di u cuntenutu solu per scopi micca cummerciale è cun riferimentu à a fonte (ligame cù {shop_title}). Tutti i diritti riservati à {shop_title}.",
    powered_by: "Alimentatu da",
    privacy: "Pulitica di privacy",
    term_of_use: "Termini di usu",
    shop_app_setting: "Configurazione di a tenda è GDPR",

    dialog_setting: {
      title: "Configurazione di l'applicazioni di a tenda",
      app_list: "Lista di l'applicazioni",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Saldà",
    review_unit: "Rivista",
    not_original: "Micca uriginale",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtru",
    native: {
      title: "Login di l'applicazione",
      message:
        "Questa app richiede l'accessu à l'infurmazioni di u vostru contu di a tenda. Questu include l'accessu à u nome, u numeru di cuntattu, l'indirizzu, l'email, a storia di l'ordine, l'ordine è a publicazione di cumenti nantu à sta tenda.",
      message_bold:
        "Assicuratevi di utilizà l'app ufficiale di a tenda per entra in questa tenda.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Ordine per",
    title_small: "Ordina per..",
    nothing: "Nunda",
    most_views: "A maiò parte di vista",
    most_likes: "U più populari",
    most_recent: "A più nova",
    most_sell: "I più venduti",
    cheapest: "U più prezzu",
    most_expensive: "U più caru",
    only_available: "Disponibile",
    view_mode: {
      normal: "Normale",
      grid: "Griglia",
      list: "Lista",
      insta: "Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Falsu",
    action: "Asta",
    compare_limit: "Limitu di 10 articuli",
    compare_add: "Aghjunghjite à paragunà",
    compare_be_in_list: "In a lista paragunata",

    type: "Tipu",
    brand: "Marca",
    category: "categuria",
    discount: "Scontu",
    track_price: "U prezzu di traccia",
    waiting_for_auction: "Aspettate l'asta ?",
    inform_auction: "Parlami di l'asta",
    return_in_days: "{days} Ghjorni Ritornu di Garanzia",
    support24h7: "Supportu 24 ore 7 ghjorni",
    support_normal: "Supportu per l'ore di travagliu",
    original_guarantee: "Garanzia originale",
    cod_payment: "Supportu in cash on delivery",

    pros: "Vantaghji",
    cons: "Svantaghji",

    external_link: "Leghjite più",
    notifications: {
      congratulation: "Felicitazioni",
      waiting_list_add_success:
        "Vi avvisemu quandu stu pruduttu hè vendutu à l'asta.",
      waiting_list_delete_success: "Sò surtitu da a lista d'attesa di l'asta.",
    },

    offer_message: "Cumprate {min_quantity} Ottene un {percent}% di sconto per questi articuli",
    up_to: "Finu à {per_order}x per ordine",
    get_free: "OTTENE GRATIS",
    get_off: "OTTENE {percent}% DI SCONTO",
    select_a_vendor_message: "Per piacè selezziunate un venditore.",
    product_description_header: "Presentazione di {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Aspittendu a dispunibilità",
    inform_me_when_available: "Aspittendu questu?",
    pay_buy: "Paga è cumprà",
    quantity: "Conti",
    quantity_in_basket: "Articuli in u carrettu",
    count_unit: "x",
    remove: "Eliminate",
    add_to_basket: "Aghjunghjite à u carrettu",
    buy: "Cumprà",
    subscribe_now: "Abbonate avà",
    unsubscribe: "Disabunà",
    select_a_subscription_plan: "Prima sceglite un pianu!",
    manage_subscriptions: "Gestisce l'abbonamenti",
    notifications: {
      inform_add_success: "Vi faremu sapè quandu hè dispunibule.",
      inform_remove_success: "Avete statu cacciatu da a lista d'attesa.",
    },
    zip_pin_input: "Codice postale / PIN",
    zip_pin_not_available_msg: "Micca dispunibule in questu locu!",
    zip_pin_placeholder: "Selezziunate u codice postale/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Descrizzione",
    spec: "Specifiche",
    comments: "Recensioni",
    price: "prezzu",
    rate: "Valutazione",
    comment: "Cummentu",
    warranty: "Garanzia",
    return_policy: "Pulitica di ritornu",
    guide: "Guida",
    shipping: "Spedizione",
    related_products_title: "Vi puderia ancu piacè",
    related_categories_title: "Scopre in cullezzione",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Storia di ordini",
      profile: "U mo prufilu",
      favorites: "Articuli preferiti",
      gift_cards: "Carte rigalu",
      return_requests: "Ordini restituiti",
      basket: "Carrettu di shopping",
    },
    user_menu: {
      my_shops: "I mo Stores",
      go_to_admin: "Gestisce {shop_name}",
      exit_from: "Esci da {shop_name}",
      chips: "{chips} gettoni",
    },
    login_to_shop: "Accedi à u Store",
    login_to_shop_short: "accede",
    item_in_basket_message: "{count} Stu articulu hè in u vostru carrettu.",
    search_title: "Cerca in a tenda {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "carrettu",
    basket_is_empty: "U vostru carrettu hè viotu.",
    total_price: "Totale",
    view_basket: "U vostru carrettu",
    more: "Più...",
    accept_and_pay: "Cuntrolla",
    items: "Articulu (s)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Rifiutata",
    table: {
      code: "Codice di ordine",
      reserved: "Data",
      delivery_state: "Statu di consegna",
      price: "Prezzu tutale",
      status: "Status di pagamentu",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Codice di ordine",
      items: "Articuli",
      reserved: "Data",
      delivery_state: "Ultimu statutu",
      price: "Prezzu tutale",
      status: "Status di pagamentu",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Carta rigalu",
      comments: "Cumenti",
      favorites: "Preferiti",
      return_requests: "Ritorna",
      addresses: "Indirizzi",
      profile: "prufilu",
      orders: "Ordini",
      wallets: "Portafogli",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "I mo portafogli",
    subtitle: "Sè vo site eligibile è un prugramma di rimborsu hè attivu, una parte di u vostru ordine serà accreditata in u vostru portafogliu. Pudete aduprà sti fondi in u vostru prossimu acquistu."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Saldo di u mo portafogliu",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Ordine",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Pagamentu",
      payment_waiting: "Aspittendu u pagamentu",
      payment_completed: "Pagatu",
      table: {
        title: "Titulu",
        amount: "A quantità",
        description: "Descrizzione",
      },
      total_payment: "A quantità pagata",
      discount: "Scontu",
      discount_code: "Codice di sconto",
      delivery_fee: "Costu di spedizione",
      delivery_fee_after: "Nisuna consegna pagata",

      total_price: "U prezzu tutale di l'articuli",
      total_items_discount: "Discount d'articuli",
      total_price_after_offers: "Totale dopu applicà offerte",
      total_order_price_before_tax: "Prezzu tutale senza imposte",

      buyer_payment: "A quantità di pagamentu di u cumpratore",

      payment_is_in_require_capture_message:
        "Avemu ricevutu u vostru pagamentu, ma ùn hè ancu statu catturatu.",
      settle_the_earlier_bill_first: "Saldate prima a fattura precedente!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Consegna",
      subtitle: "L'infurmazione di u cumpratore",
      confirm_received_action: "Cunfirmà a Ricevuta di u Produttu",
      confirm_received_info:
        "Cliccate u buttone di cunferma s'ellu avete ricevutu l'ordine. Se necessariu, puderà mandà un riferimentu se ricevi cunferma.",
      Recipient: "Recipiente",
      bill: "Fattura",
      name: "Nome",
      tel: "telefonu",
      email: "E-mail",
      country: "Paese",
      state: "Statu",
      city: "Cità",
      address: "Indirizzu",
      building_no: "Numaru di l'edificiu",
      unit_no: "numeru unità",
      postal_code: "codice postale",
      description: "Descrizzione",
      order_delivered: "L'ordine hè statu mandatu.",
      delivery_time: "Tempu di consegna",
      tracking_code: "U codice di seguimentu",
      tracking_url: "Url di seguimentu",

      notifications: {
        confirm_delivery: "U vostru ordine hè cunfirmatu.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garanzia di l'uriginale di e merchenzie",
      return: "Ritorna",
      table: {
        product: "Nome di u produttu",
        count: "Conti",
        unit_price: "Prezzu unità",
        total_price: "Prezzu tutale",
        discount: "Scontu",
        final_price: "Prezzu Finale",
        returned: "Riturnatu",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Ritorna",
    count_input: "Numaru di articuli restituiti",
    count_input_message: "Quanti articuli turnate?",
    reason_input: "Motivu di ritornu",
    reason_input_message: "Selezziunate u mutivu di rinvià stu articulu.",
    note_input: "Descrizzione",
    note_input_hint: "Scrivite u mutivu di u ritornu ..",
    note_input_message:
      "Descrivite u mutivu di rinvià stu articulu se necessariu.",
    media_message:
      "Pudete carricà l'imaghjini, l'audio o u video di u pruduttu quì per uttene un supportu megliu per l'infurmazioni di u statutu di u produttu. Selezziunà u schedariu hà da mandà automaticamente è cunfirmà.",
    video: "Video",
    voice: "Voce",
    add_action: "Mandate a dumanda di ritornu",
    notifications: "A vostra dumanda di ritornu hè stata registrata cù successu.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Ordine",
    info: {
      title: "Cumpratu un pruduttu virtuale",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "A mo infurmazione persunale",
    name: "Nome",
    email: "E-mail",
    tel: "Tel",
    identity: "Autentificazione",
    success_kyc: "KYC verificatu",
    no_kyc: "Nisun KYC",
    club: "Livellu d'Usuariu",
    subscription: "Abbonamentu di notizie",
    leave_shop: "Lascià stu magazinu è sguassate tutti i livelli di i clienti",
    leave_shop_action: "Lascià a tenda",
    edit_personal_info: "Edite l'infurmazioni persunali",
    leave_dialog: {
      title: "Lascià a tenda",
      message:
        "L'annullamentu di l'abbonamentu à sta tenda ùn sguasserà micca l'infurmazioni è i registri di l'ordine.",
      action: "Lasciate",
    },
    notifications: {
      leave_success: "Lascià a tenda",
    },
    club_table: {
      discount: "Scontu",
      limit: "Limitu",
      currency: "valuta",
      free_shipping: "Arricata gratisi",
    },

    my_profile: {
      title: "U mo prufilu",
      subtitle: "Queste sò l’infurmazioni di u mo prufilu di cliente per u magazinu.",
      edit_action: "Mudificà u prufilu"
    },
    subscribe_status: {
      subscribed: "Sò abbonatu per riceve l’ultime nutizie è prumuzioni per email.",
      unsubscribed: "Ùn sò micca abbonatu per riceve nutizie o prumuzioni per email."
    },
    my_club: {
      subtitle: "U mo livellu di club è i so benefici."
    },
    kyc: {
      subtitle: "Queste sò e mo informazioni d’identificazione glubale."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Carrettu di shopping",
    total_price: "A quantità tutale",
    shipping: "Costu di spedizione",
    free_shipping: "Arricata gratisi",
    shipping_not_pay: "Micca inclusu",
    total_discount: "Scontu tutale",
    customer_club: "Client Club Membru",
    customer_club_discount: "Discount per i membri",
    final_price: "Pagamentu Finale",
    lead_time: "Tempu di preparazione",
    lead_time_unit: "Ora",
    receive_time: "Tempu di consegna preferitu",
    select_time: "Selezziunà u tempu di consegna",
    no_select_time: "U prima pussibule",
    transportation_type: "Tipu di spedizione",
    days_input: "Ghjorni di consegna",
    days_input_label: "Ghjorni",
    days_input_no_data: "Sceglie almenu un ghjornu",
    time_input: "Tempu di consegna",
    time_input_label: "Consegna à",
    time_input_label_no_data: "Sceglie almenu un intervallu di tempu",
    support_cod: "Pagamentu à a consegna",
    not_support_cod: "Incapace di pagà in u locu!",
    final_confirm_action: "Conferma finale di l'ordine",
    pay_and_complete_action: "Paga avà",
    pre_confirm_service: "Invia a dumanda",
    cross_selling_discount: "Sconto di cullezzione",

    errors: {
      no_address: "Selezziunate l'indirizzu chì vulete chì u vostru ordine sia speditu.",
      no_phone: "Inserite un numeru di cuntattu per coordinà a ricezione di merchenzie.",
      select_billing_country: "Sceglite u vostru paese di fattura",
      select_billing_state: "Sceglite a vostra regione fiscale",
    },
    same_billing_address: "L'infurmazione di fatturazione hè uguale à l'infurmazione di u destinatariu",
    same_billing_address_desc:
      "L'indirizzu di fatturazione hè u listessu cum'è l'indirizzu di spedizione.",
    custom_billing_info: "Diverse infurmazione di fattura",
    custom_billing_info_desc:
      "Pudete inserisce u vostru numeru TAX è stabilisce un indirizzu diversu per a fatturazione.",
    basket_empty: "A cesta hè viota",
    extra_shipping_count: "Riceverete {count} pacchetti.",
    select_location_error:
      "Truvate u locu di ricezione di a spedizione nantu à a mappa è cliccate nantu à l'indicatore à mezu à a mappa per determinà l'indirizzu esatta di u destinatariu.",

    billing_business_desc: "Hè un contu cummerciale cù un numeru TAX.",
    billing_personal_desc: "Hè un contu persunale.",

    no_billing_title: "Nisuna fattura",
    no_billing_desc: "Lasciate l'indirizzu di fatturazione viotu.",

    can_pay_cod_message:"Pudete pagà questu ordine in contanti à a consegna.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Ora",
    count_input: "Conti",

    price_changed: "U prezzu hè cambiatu. novu prezzu:",
    offer: "Ottene {count}x articulu da {percent}% off",
    offer_free: "Ricevi {count}x gratis",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "I mo Indirizzi",
    subtitle:"Vede quì i vostri indirizzi salvati è aghjunghjite facilmente unu novu.",
    new_action: "Indirizzu novu",
    receiver: "Destinatariu",
    address: "Indirizzu",
    building_no: "numeru di u bastimentu",
    building_unit: "unità",
    postcode: "codice postale",
    tel: "Tel",
    description: "Nota",

    map: {
      title: "I mo Indirizzi",
      confirm: "Registrazione di l'indirizzu",
      address_type: "Indirizzu",
      receptor_type: "Recipiente",
    },
    add_dialog: {
      title: "Novu nome d’indirizzu",
      message: "Inserite un titulu per un novu indirizzu.",
      address_name_input: "Indirizzu (obligatoriu)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "E dumande di ritornu",
    subtitle:"Vede quì e vostre richieste di ritornu. Per l’articuli cù una pulitica di ritornu, pudete mandà una richiesta di ritornu nantu à a pagina di l’ordine.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Lista di desideri",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "I mo cumenti",
    first_post: "Primu postu",
    last_edit: "Ultima edizione",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "I mo Gift Cards",
    add_action: "Aghjunghjite a carta",
    add_card_dialog: {
      title: "Aghjunghjite una carta rigalu",
      message:
        "Inserite u numeru di carta è u codice di sicurità. Una carta rigalu serà aghjuntu à u vostru contu.",
      card_number_input: "numeru di carta",
      info: "Nota: Quandu compra da a tenda, vi sarà mostrata l'opzione di pagà cù carte di rigalu. Selezziunate sta opzione, a quantità di u vostru saldo di ricarica serà dedutta da a quantità di l'ordine.",
      add_action: "Registrazione di carta",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Comparare u pruduttu",
    action_button: "Comparare",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Nisun pruduttu hè statu aghjuntu à a lista di paragone.",
      price: "prezzu",
      type: "Tipu",
      brand: "Marca",
      warranty: "Garanzia",
      variants_comparison: "Comparare varianti di produttu",
      spec: "Specificazioni tecniche",
      pros: "Vantaghji",
      cons: "Svantaghji",
      user_review: "Cumenti di l'utilizatori",
      rating: "Valutazione",
      rating_count: "Numero di recensioni",
      info: "Pudete sparte stu tavulu di paragone di u produttu cù i vostri amichi mandendu u ligame seguente, o accede più tardi salvendu stu ligame.",
      copy_action: "Copia u ligame di cunfrontu",
      check_list: ["Iè", "Hà"],
      cross_list: ["Innò", "Ùn hà micca"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Solu originali",
    only_has_discount: "Solu scontu",
    price_range: "Gamma di prezzu",
    brands: "Marca",
    main_shop_page: "Store pagina principale",
    home: "A casa",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Caru {user}, Avete acquistatu stu pruduttu. Chì ne pensate di stu pruduttu?",
    notification: {
      title: "Felicitazione",
      message: "U vostru cumentu hè statu arregistratu.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Blog novu",
    popular: "Pupulare",
    topics: "Temi",
    suggestions: "Suggerimenti",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Nantu à noi",
    terms: "Termini di usu",
    privacy: "Pulitica di privacy",
    contact_us: "Cuntatta ci",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Cuntattateci forma",
    name: "Nome",
    email: "E-mail",
    phone: "telefonu",
    message: "Missaghju",
    notifications: {
      success: "U vostru messagiu hè statu mandatu.",
    },
    submitted_title: "Grazie per avè righjuntu à noi!",
    submitted_message:
      "Apprezzemu u vostru tempu per cuntattateci. U vostru missaghju hè statu ricevutu è a nostra squadra hè attualmente esaminata. Risponderemu u più prestu pussibule, è vi ringraziemu per a vostra pacienza durante stu tempu. U vostru interessu è i vostri feedback sò impurtanti per noi, è simu impegnati à furnisce u megliu sustegnu pussibule.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Cunfirmazione di pagamentu",
      payment_success: "Pagamentu cumpletu.",
      buy_title: "Cumprà",
      pay_by_giftcards: "U vostru ordine hè statu pagatu cù una carta rigalu.",
      free_order: "U vostru ordine hè liberu.",
      pay_by_cod: "U vostru ordine hè statu aghjuntu cum'è cash on delivery.",
      pay_by_dir:
        "U vostru ordine hè statu aghjuntu cù successu. Avà pudete pagà per trasferimentu di soldi direttu è poi caricate a ricevuta di pagamentu in a pagina di l'ordine.",
      pay_title: "Pagamentu",
      qr_code_payment: "Pagamentu indirizzu codice QR creatu.",
      connecting_to_online_gateway: "Cunnessione à a porta di pagamentu in linea.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Restava à u principiu",
    title_between_start_end: "Restava finu à a fine",
    title_after_end: "Finitu",
    title_no_start_end: "Senza tempu!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Pudete riceve un rigalu per ordine.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "codice coupon",
    add_coupon: "Aghjunghjite cuponu",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "A forma di avocado ùn hè micca attivata!",
    last_update: "Ultima aghjurnazione:",
    step1:
      "1. Inserite u nome è i ditaglii di u pruduttu chì vulete ordene è cliccate nantu à u buttone Aggiungi.",
    title_plc: "Inserite u nome di u pruduttu.",
    description_plc: "Avete più descrizzioni di i prudutti?",
    link_plc: "Avete un ligame à u pruduttu?",
    image: "Image di u produttu",
    image_msg: "Pudete mandà l'imaghjini di u produttu se necessariu.",
    add_item: "Aghjunghjite articulu",
    items_list: "Lista di i prudutti dumandati",
    currency_msg: "Duvete pagà a quantità di questu ordine cù questa munita.",
    step2:
      "2. Dopu à aghjunghje tutti l 'articuli bramatu, cliccate nant'à u buttone dumanda di rivista ordine. À questu stadiu, avemu da riviseghjà l'ordine è vi farà sapè di u prezzu. Cliccà nant'à stu ligame, vi sarà capaci di vede u ligame prezzu è pagamentu.",
    order_action: "Ordine di iscrizzione",
    show_all: "Mostra tuttu",
    show_accepted: "Mostra Articuli cunfirmati",
    last_orders: "Lista di i vostri ordini recenti",
    pending_status: "in rivisione",
    check_now: "Verificate l'ordine",
    add_new_order: "Fate un novu ordine",
    pay_online: "Paga in linea",
    pricing_not_completed_message:
      "U vostru ordine hè in rivisione. U vostru ordine serà rivisatu è prezzu prestu è puderete pagà l'ordine.",

    select_address_message:
      "Per piacè inserite u vostru indirizzu, è dopu pudete mandà l'ordine.",

    delete_item_dialog: {
      title: "Eliminate l'articulu da u carrettu",
      message: "Vulete sguassà stu articulu da u carrettu ?",
      action: "Iè, sguassate",
    },

    notifications: {
      order_success: "U vostru ordine hè statu piazzatu bè.",
      delete_success: "Elementu eliminatu.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Creazione di ordini",
    message:
      "Crea a lista di i prudutti chì vulete cumprà scannendu u codice di u produttu.",

    currency_msg: "A munita chì vulete pagà.",
    order_action: "Pagamentu",
    add_new_order: "Novu ordine",
    continue_order: "Cuntinuà l'ordine",

    delete_item_dialog: {
      title: "Eliminate l'articulu da u carrettu",
      message: "Vulete sguassà stu articulu da u carrettu ?",
      action: "Iè, sguassate",
    },
    notifications: {
      order_success: "U vostru ordine hè statu piazzatu bè.",
      delete_success: "Elementu eliminatu.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Caricate l'imaghjini di a ricevuta di pagamentu.",
    upload_payment_receipt_done:
      "✔ Avete digià caricatu l'imaghjini di a ricevuta, aspettate a nostra appruvazioni. Sè avete bisognu di cambià, pudete rimpiazzà l'imaghjina precedente cù una nova.",
    public_form_title: "L'infurmazione di u contu per u trasferimentu di soldi",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lista da fà",
      message: "Specificate i tituli di u travagliu chì vulete fà è fate à u cumpratore sapè quantu hè avanzatu.",
    },
    booking: {
      title: "Riservazione / Riservazione",
      message: "Questu ordine serà processatu à un tempu determinatu, u cliente hà sceltu u periodu desideratu, se vulete fà cambiamenti in u periodu sceltu, fate à sapè à u cliente.",

      selected_checkin: "Check-in sceltu da u cliente",
      selected_checkout: "Check-out sceltu da u cliente",
      change_days_question:
        "Avete bisognu di cambià durante i ghjorni selezziunati da u cliente?",
      show_calendar: "Mostra u calendariu di ordini",
    },
    pricing: {
      title: "Prezzi",
      message: "Quantu pagate per stu serviziu?",
    },
    subscription: {
      title: "Abbonamentu",
      message:
        "Pudete sceglie u periodu di abbunamentu per cumprà stu serviziu ogni ghjornu. Fate sapè à u cumpratore se vulete cambià i valori predeterminati chì avete digià inseritu.",
      duration: "Periudu di abbunamentu",
    },
    charge: {
      title: "Carica",
      message:
        "Avete specificatu una carica per questu articulu. Pudete cambià a quantità di carica per l'articulu acquistatu da u cliente.",
      charge: "Carica",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Aspetta per verificà l'accessu...",
    no_access_message:
      "Sfurtunatamente, ùn avete micca accessu à a nostra tenda.<br/> Per piacè cuntattateci.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Sparte l'ordine",
    title: "Condividi stu ordine cù l'altri.",
    message:
      "Hè un ligame sicuru, sparte solu cù quelli chì cunnosci. Tutti cù stu ligame ponu duplicà u vostru ordine è vede l'indirizzu sceltu. Contenerà infurmazioni nantu à u vostru carrettu attuale.",
    valid_period: "Stu ligame scade dopu à 48 ore.",
    import_order_action: "Ordine d'importazione",
    retrieve_dialog_title: "Ritruvà l'ordine esternu",
    address_included: "Sparte l'articuli di a cesta + Indirizzu",
    address_excluded: "Sparte solu l'articuli di cesti",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prezzi",
    inventory: "Invintariu",
    discount: "Scontu",
  },

  rating: {
    product_rating_message:
      "Stu pruduttu hà ricevutu una valutazione di {rate} fora di 5 stelle è valutatu da {rate_count} persone.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Esplora!",
      same_tags_subtitle: "Truvate articuli cunnessi più notevuli.",
      same_category_subtitle: "Truvate articuli più notevoli in questa categuria.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Ordinate {product} cù",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Vede u magazinu di {vendor}",
  },

  login: {
    welcome: "Benvenutu",
  },


};
