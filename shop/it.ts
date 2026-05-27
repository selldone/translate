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
  surveys: ["Scarso", "Non buono", "Normale", "Buono", "Eccellente"],

  /** @see SFooterSection **/
  footer: {
    map: "Mappa",
    email: "E-mail",
    phone: "Telefono",
    address: "Indirizzo",

    copyright:
      "L’uso dei contenuti è consentito solo per scopi non commerciali e con riferimento alla fonte (collegamento con {shop_title}). Tutti i diritti sono riservati a {shop_title}.",
    powered_by: "Offerto da",
    privacy: "Informativa sui dati personali",
    term_of_use: "Termini e Condizioni d'uso",
    shop_app_setting: "Impostazione negozio e GDPR",

    dialog_setting: {
      title: "Impostazione applicazione negozio",
      app_list: "Elenco applicazioni",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Esaurito",
    review_unit: "Prodotto in esposizione",
    not_original: "Non originale",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtro",
    native: {
      title: "Accesso all'applicazione",
      message:
        "Questa app richiede l'accesso alle informazioni sull'account del tuo negozio. Ciò include l'accesso a nome, numero di contatto, indirizzo, e-mail, cronologia degli ordini, ordinazione e pubblicazione di commenti su questo negozio.",
      message_bold:
        "Assicurati di utilizzare l’app ufficiale del negozio per accedere a questo negozio.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Ordina per",
    title_small: "Ordina per..",
    nothing: "Niente",
    most_views: "Più visti",
    most_likes: "Più apprezzati",
    most_recent: "Più recenti",
    most_sell: "Più venduti",
    cheapest: "Più economici",
    most_expensive: "Più costosi",
    only_available: "Disponibile",
    view_mode: {
      normal: "Normale",
      grid: "Griglia",
      list: "Elenco",
      insta: "Stile Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Falso",
    action: "Asta",
    compare_limit: "Limite di 10 articoli",
    compare_add: "Confronta",
    compare_be_in_list: "Nella lista di confronto",

    type: "Tipo",
    brand: "Marca",
    category: "Categoria",
    discount: "Sconto",
    track_price: "Segui il prodotto",
    waiting_for_auction: "Avvisami sulle offerte",
    inform_auction: "Avvisi offerte attivate",
    return_in_days: "{days} Giorni Garanzia Resi",
    support24h7: "Supporto 24 ore 7 giorni",
    support_normal: "Supporto orario di lavoro",
    original_guarantee: "Garanzia originale",
    cod_payment: "Assistenza in contrassegno",

    pros: "Pro",
    cons: "Contro",

    external_link: "Leggi di più",
    notifications: {
      congratulation: "Congratulazioni",
      waiting_list_add_success:
        "Ti avviseremo quando il prodotto sarà in offerta.",
      waiting_list_delete_success: "Sei uscito dalle notifiche delle offerte.",
    },

    offer_message: "Acquista {min_quantity} Ottieni uno sconto del {percent}% su questi articoli",
    up_to: "Fino a {per_order}x per ordine",
    get_free: "RICEVI GRATIS",
    get_off: "OTTIENI uno SCONTO DEL {percent}%.",
    select_a_vendor_message: "Seleziona un fornitore.",
    product_description_header: "Ti presentiamo {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "In attesa di disponibilità",
    inform_me_when_available: "Avvisami quando disponibile",
    pay_buy: "Paga e acquista",
    quantity: "Quantità",
    quantity_in_basket: "Articoli nel carrello",
    count_unit: "X",
    remove: "Rimuovi",
    add_to_basket: "Aggiungi al carrello",
    buy: "Acquista",
    subscribe_now: "Iscriviti ora",
    unsubscribe: "Annulla l'iscrizione",
    select_a_subscription_plan: "Seleziona prima un piano!",
    manage_subscriptions: "Gestisci le iscrizioni",
    notifications: {
      inform_add_success: "Ti faremo sapere quando sarà disponibile.",
      inform_remove_success: "Sei stato rimosso dalla lista offerte.",
    },
    zip_pin_input: "CAP / PIN",
    zip_pin_not_available_msg: "Non disponibile in questa località!",
    zip_pin_placeholder: "Seleziona codice CAP/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Descrizione",
    spec: "Specifiche",
    comments: "Recensioni",
    price: "Prezzo",
    rate: "Dai un voto",
    comment: "Recensione",
    warranty: "Garanzia",
    return_policy: "Politica di ritorno",
    guide: "Guida",
    shipping: "Spedizione",
    related_products_title: "Prodotti correlati",
    related_categories_title: "Scopri nelle collezioni",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Cronologia degli ordini",
      profile: "Il mio profilo",
      favorites: "Articoli preferiti",
      gift_cards: "Carte regalo",
      return_requests: "Ordini resi",
      basket: "Carrello",
    },
    user_menu: {
      my_shops: "I miei negozi",
      go_to_admin: "Gestisci {shop_name}",
      exit_from: "Esci {shop_name}",
      chips: "{chips} Chip",
    },
    login_to_shop: "Accedi al negozio",
    login_to_shop_short: "Accedi",
    item_in_basket_message: "Hai {count} di questo articolo nel tuo carrello.",
    search_title: "Cerca nel negozio {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Carrello",
    basket_is_empty: "Il tuo carrello è vuoto.",
    total_price: "Totale",
    view_basket: "Il tuo carrello",
    more: "Di più ...",
    accept_and_pay: "Conferma e paga",
    items: "Quantità)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Respinto",
    table: {
      code: "Codice dell'ordine",
      reserved: "Data",
      delivery_state: "Stato della consegna",
      price: "Prezzo totale",
      status: "Stato del pagamento",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Codice dell'ordine",
      items: "Elementi",
      reserved: "Data",
      delivery_state: "Ultimo stato",
      price: "Prezzo totale",
      status: "Stato del pagamento",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Carta regalo",
      comments: "Recensioni",
      favorites: "Preferiti",
      return_requests: "Richieste di reso",
      addresses: "Indirizzi",
      profile: "profilo",
      orders: "Ordini",
      wallets: "Portafogli",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "I miei portafogli",
    subtitle: "Se hai i requisiti e un programma di cashback è attivo, una parte del tuo ordine verrà accreditata sul tuo portafoglio. Puoi usare questi fondi per il prossimo acquisto."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Saldo del mio portafoglio',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Ordine",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Pagamento",
      payment_waiting: "In attesa del pagamento",
      payment_completed: "Pagamento completato",
      table: {
        title: "Titolo",
        amount: "Importo",
        description: "Descrizione",
      },
      total_payment: "Importo pagato",
      discount: "Sconto",
      discount_code: "Codice di sconto",
      delivery_fee: "Spese di spedizione",
      delivery_fee_after: "Nessuna consegna pagata",

      total_price: "Prezzo totale degli articoli",
      total_items_discount: "Sconto",
      total_price_after_offers: "Totale dopo aver applicato le offerte",
      total_order_price_before_tax: "Prezzo totale al lordo delle imposte",

      buyer_payment: "Importo da pagare",

      payment_is_in_require_capture_message:
        "Abbiamo ricevuto il tuo pagamento, ma non è stato ancora acquisito.",
      settle_the_earlier_bill_first: "Salda prima la fattura precedente!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Consegna",
      subtitle: "Informazioni sull'acquirente",
      confirm_received_action: "Conferma la ricezione del prodotto",
      confirm_received_info:
        "Fai clic sul pulsante di conferma se hai ricevuto l'ordine. Se necessario, sarai in grado di inviare un referral se ricevi una conferma.",
      Recipient: "Destinatario",
      bill: "Fattura",
      name: "Nome",
      tel: "Telefono",
      email: "E-mail",
      country: "Paese",
      state: "Stato",
      city: "Città",
      address: "Indirizzo",
      building_no: "Numero edificio/interno",
      unit_no: "Numero di unità",
      postal_code: "Codice postale",
      description: "Descrizione",
      order_delivered: "L'ordine è stato consegnato.",
      delivery_time: "Tempo di consegna",
      tracking_code: "Codice di monitoraggio",
      tracking_url: "URL di monitoraggio",

      notifications: {
        confirm_delivery: "Il tuo ordine è confermato.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garanzia di originalità della merce",
      return: "Reso",
      table: {
        product: "nome del prodotto",
        count: "Conteggio",
        unit_price: "Prezzo unitario",
        total_price: "Prezzo totale",
        discount: "Sconto",
        final_price: "Prezzo finale",
        returned: "Reso",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Ritorno",
    count_input: "Numero di articoli resi",
    count_input_message: "Quanti articoli restituisci?",
    reason_input: "Motivo del reso",
    reason_input_message: "Seleziona il motivo della restituzione di questo articolo.",
    note_input: "Descrizione",
    note_input_hint: "Scrivi una descrizione sul motivo del reso..",
    note_input_message:
      "Descrivi il motivo della restituzione di questo articolo, se necessario.",
    media_message:
      "Puoi caricare immagini, audio o video del prodotto qui per ottenere un supporto migliore per le informazioni sullo stato del prodotto. Selezionando il file verrà automaticamente inviato e confermato.",
    video: "video",
    voice: "Voce",
    add_action: "Invia richiesta di reso",
    notifications: "La tua richiesta di reso è stata registrata con successo.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Ordine",
    info: {
      title: "Prodotto virtuale acquistato",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "I miei dati personali",
    name: "Nome",
    email: "E-mail",
    tel: "tel",
    identity: "Autenticazione",
    success_kyc: "KYC verificato",
    no_kyc: "Nessun KYC",
    club: "Livello utente",
    subscription: "Ricevi le novità",
    leave_shop: "Lascia questo negozio e rimuovi tutti i livelli di clienti",
    leave_shop_action: "Lascia il negozio",
    edit_personal_info: "Modifica le informazioni personali",
    leave_dialog: {
      title: "Cancellami dal negozio",
      message:
        "La cancellazione dal negozio non cancellerà le informazioni e i record degli ordini.",
      action: "Cancella",
    },
    notifications: {
      leave_success: "Cancellati dal negozio",
    },
    club_table: {
      discount: "Sconto",
      limit: "Limite",
      currency: "Valuta",
      free_shipping: "Spedizione gratuita",
    },

    my_profile: {
      title: "Il mio profilo",
      subtitle: "Queste sono le informazioni del mio profilo cliente per il negozio.",
      edit_action: "Modifica profilo"
    },
    subscribe_status: {
      subscribed: "Sono iscritto per ricevere le ultime notizie e promozioni via e-mail.",
      unsubscribed: "Non sono iscritto per ricevere notizie o promozioni via e-mail."
    },
    my_club: {
      subtitle: "Il mio livello club e i relativi vantaggi."
    },
    kyc: {
      subtitle: "Queste sono le mie informazioni di identificazione globale."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Carrello",
    total_price: "Importo totale",
    shipping: "Spese di spedizione",
    free_shipping: "Spedizione gratuita",
    shipping_not_pay: "Non inclusa",
    total_discount: "Sconto totale",
    customer_club: "Membro del club clienti",
    customer_club_discount: "Sconto per i membri",
    final_price: "Pagamento finale",
    lead_time: "Tempo di preparazione",
    lead_time_unit: "Ora/e",
    receive_time: "Tempo di consegna preferito",
    select_time: "Seleziona Tempi di consegna",
    no_select_time: "Appena possibile",
    transportation_type: "Tipo di spedizione",
    days_input: "Giorni di consegna",
    days_input_label: "Giorni",
    days_input_no_data: "Seleziona almeno un giorno",
    time_input: "Tempo di consegna",
    time_input_label: "Consegna a",
    time_input_label_no_data: "Seleziona almeno un intervallo di tempo",
    support_cod: "Pagamento alla consegna",
    not_support_cod: "Impossibile pagare alla consegna",
    final_confirm_action: "Conferma d'ordine finale",
    pay_and_complete_action: "Paga ora",
    pre_confirm_service: "Invia la richiesta",
    cross_selling_discount: "Sconto sul ritiro",

    errors: {
      no_address: "Seleziona l'indirizzo a cui desideri che il tuo ordine venga spedito.",
      no_phone: "Inserisci un numero di contatto per coordinare la ricezione della merce.",
      select_billing_country: "Seleziona il tuo paese di fatturazione",
      select_billing_state: "Seleziona la tua regione fiscale",
    },
    same_billing_address: "Informazioni di fatturazione uguali alle Informazioni sul destinatario",
    same_billing_address_desc:
      "L'indirizzo di fatturazione è lo stesso dell'indirizzo di spedizione.",
    custom_billing_info: "Informazioni di fatturazione diverse",
    custom_billing_info_desc:
      "Puoi inserire il tuo codice fiscale e impostare un indirizzo diverso per la fatturazione.",
    basket_empty: "Il cestino è vuoto",
    extra_shipping_count: "Riceverai {count} pacchi.",
    select_location_error:
      "Trova il luogo di ricezione della spedizione sulla mappa e fai clic sull'indicatore al centro della mappa per determinare l'indirizzo esatto del destinatario.",

    billing_business_desc: "È un conto aziendale con codice fiscale.",
    billing_personal_desc: "È un account personale.",

    no_billing_title: "Nessuna fatturazione",
    no_billing_desc: "Lascia vuoto l'indirizzo di fatturazione.",

    can_pay_cod_message:"Puoi pagare questo ordine in contanti alla consegna.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "X",
    lead_unit: "Ora",
    count_input: "Conteggio",

    price_changed: "Il prezzo è cambiato. Nuovo prezzo:",
    offer: "Ottieni {count}x articolo/i al {percent}% di sconto",
    offer_free: "Ottieni {count}x gratis",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "I miei indirizzi di recapito",
    subtitle:"Visualizza qui gli indirizzi salvati e aggiungine facilmente uno nuovo.",
    new_action: "Nuovo indirizzo",
    receiver: "Destinatario",
    address: "Indirizzo",
    building_no: "Numero edificio/interno",
    building_unit: "Numero civico",
    postcode: "Codice postale",
    tel: "tel",
    description: "Nota",

    map: {
      title: "I miei indirizzi di recapito",
      confirm: "Registra l'indirizzo",
      address_type: "Indirizzo",
      receptor_type: "Destinatario",
    },
    add_dialog: {
      title: "Nuovo nome indirizzo",
      message: "Inserisci un nome per un nuovo indirizzo.",
      address_name_input: "Indirizzo (richiesto)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Richieste di reso",
    subtitle:"Visualizza qui le tue richieste di reso. Per gli articoli con una politica di reso, puoi inviare una richiesta di reso nella pagina dell’ordine.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Lista dei desideri",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Le mie recensioni",
    first_post: "Primo post",
    last_edit: "Ultima modifica",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "I miei buoni regalo",
    add_action: "Aggiungi buono",
    add_card_dialog: {
      title: "Aggiungi buono regalo",
      message:
        "Inserisci il numero della carta e il codice di sicurezza. Una carta regalo verrà aggiunta al tuo account.",
      card_number_input: "Numero del buono",
      info: "Nota: quando acquisti dal negozio, avrai la possibilità di pagare usando buoni regalo. Se scegli questo metodo di pagamento, l'importo verrà detratto dal saldo di ricarica, incidendo direttamente sul totale dell'ordine.",
      add_action: "Registra buono",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Confronta Prodotto",
    action_button: "Confronta",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Nessun prodotto è stato aggiunto all'elenco di confronto.",
      price: "Prezzo",
      type: "Tipo",
      brand: "Marca",
      warranty: "Garanzia",
      variants_comparison: "Confronta le varianti di prodotto",
      spec: "Specifiche tecniche",
      pros: "Pro",
      cons: "Contro",
      user_review: "Recensioni degli utenti",
      rating: "Valutazione",
      rating_count: "Numero di valutazioni",
      info: "Puoi condividere questa tabella di confronto dei prodotti con i tuoi amici inviando il seguente link, o accedervi in seguito salvando questo link.",
      copy_action: "Copia link di confronto",
      check_list: ["sì", "Ha"],
      cross_list: ["Assente", "Non ha"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Solo prodotti originali",
    only_has_discount: "Solo prodotti scontati",
    price_range: "Fascia di prezzo",
    brands: "Marca",
    main_shop_page: "Pagina principale del negozio",
    home: "Pagina iniziale",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Gentile {user}, hai acquistato questo prodotto. Fai una recensione",
    notification: {
      title: "Congratulazioni",
      message: "Abbiamo ricevuto la tua recensione.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Articoli",
    add_new_blog: "Nuovo blog",
    popular: "Articoli Popolari",
    topics: "Temi",
    suggestions: "Suggerimenti",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Chi siamo",
    terms: "Termini e Condizioni d'uso",
    privacy: "Informativa sui dati personali",
    contact_us: "Contattaci",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Modulo dei Contatti",
    name: "Nome",
    email: "E-mail",
    phone: "Telefono",
    message: "Messaggio",
    notifications: {
      success: "Il vostro messaggio è stato inviato.",
    },
    submitted_title: "Grazie per averci contattato!",
    submitted_message:
      "Apprezziamo il tempo che dedichi nel contattarci. Il tuo messaggio è stato ricevuto e il nostro team lo sta attualmente esaminando. Risponderemo il prima possibile e ti ringraziamo per la pazienza dimostrata durante questo periodo. Il tuo interesse e il tuo feedback sono importanti per noi e ci impegniamo a fornirti il miglior supporto possibile.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Conferma di pagamento",
      payment_success: "Pagamento completato.",
      buy_title: "Acquista",
      pay_by_giftcards: "Il tuo ordine è stato pagato con un buono regalo.",
      free_order: "Il tuo ordine è gratuito.",
      pay_by_cod: "Il tuo ordine è stato aggiunto in contrassegno.",
      pay_by_dir:
        "Il tuo ordine è stato aggiunto con successo. Ora puoi pagare tramite bonifico bancario diretto e poi caricare la ricevuta di pagamento nella pagina dell'ordine.",
      pay_title: "Pagamento",
      qr_code_payment: "Codice di pagamento con codice QR creato.",
      connecting_to_online_gateway: "Connessione al gateway di pagamento online.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Quanto manca all'inizio",
    title_between_start_end: "Quanto manca alla fine",
    title_after_end: "Completato",
    title_no_start_end: "Senza periodo di tempo!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Puoi ricevere un regalo per ordine.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Codice coupon",
    add_coupon: "Aggiungi coupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Il modulo avocado non è abilitato!",
    last_update: "Ultimo aggiornamento",
    step1:
      "1. Inserisci il nome e i dettagli del prodotto che desideri ordinare e fai clic sul pulsante Aggiungi.",
    title_plc: "Inserisci il nome del prodotto.",
    description_plc: "Hai più descrizioni dei prodotti?",
    link_plc: "Hai un link al prodotto?",
    image: "Immagine del prodotto",
    image_msg: "Se necessario, puoi inviare l'immagine del prodotto.",
    add_item: "Aggiungi articolo",
    items_list: "Elenco dei prodotti richiesti",
    currency_msg: "Devi pagare l'importo di questo ordine con questa valuta.",
    step2:
      "2. Dopo aver aggiunto tutti gli articoli desiderati, fare clic sul pulsante di richiesta di revisione dell'ordine. A questo punto, esamineremo l'ordine e ti faremo sapere il prezzo. Cliccando su questo link, potrai vedere il link del prezzo e del pagamento.",
    order_action: "Registrazione dell'ordine",
    show_all: "Mostra tutto",
    show_accepted: "Mostra elementi confermati",
    last_orders: "Elenco dei tuoi ordini recenti",
    pending_status: "in corso di revisione",
    check_now: "Controlla l'ordine",
    add_new_order: "Fai un nuovo ordine",
    pay_online: "Paga in linea",
    pricing_not_completed_message:
      "Il tuo ordine è in fase di revisione. Il tuo ordine verrà esaminato e valutato a breve e sarai in grado di pagare l'ordine.",

    select_address_message:
      "Inserisci il tuo indirizzo, quindi puoi inviare l'ordine.",

    delete_item_dialog: {
      title: "Rimuovere l'articolo dal carrello",
      message: "Vuoi eliminare questo articolo dal carrello?",
      action: "Sì, elimina",
    },

    notifications: {
      order_success: "Il tuo ordine è stato effettuato con successo.",
      delete_success: "Prodotto eliminato.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Creazione dell'ordine",
    message:
      "Crea l'elenco dei prodotti che desideri acquistare scansionando il codice prodotto.",

    currency_msg: "La valuta con cui vuoi pagare.",
    order_action: "Pagamento",
    add_new_order: "Nuovo ordine",
    continue_order: "Continua l'ordine",

    delete_item_dialog: {
      title: "Rimuovere l'articolo dal carrello",
      message: "Vuoi eliminare questo articolo dal carrello?",
      action: "Sì, elimina",
    },
    notifications: {
      order_success: "Il tuo ordine è stato effettuato con successo.",
      delete_success: "Prodotto eliminato.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Carica immagine della ricevuta di pagamento.",
    upload_payment_receipt_done:
      "✔ Hai già caricato l'immagine dello ricevuta di pagamento, attendi la nostra approvazione. Se è necessario modificare, è possibile sostituire l'immagine precedente con una nuova.",
    public_form_title: "Informazioni sull'account per il trasferimento di denaro",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lista delle cose da fare",
      message: "Specifica le mansioni che farai e fai sapere all'acquirente a che punto sei.",
    },
    booking: {
      title: "Prenotazione / Prenotazione",
      message: "Questo ordine verrà elaborato a un'ora specificata, il cliente ha selezionato il periodo desiderato, se desideri apportare modifiche nel periodo selezionato, informa il cliente.",

      selected_checkin: "Check-in selezionato dal cliente",
      selected_checkout: "Uscita selezionata dal cliente",
      change_days_question:
        "Hai bisogno di cambiare durante i giorni selezionati dal cliente?",
      show_calendar: "Mostra il calendario degli ordini",
    },
    pricing: {
      title: "Prezzo",
      message: "Quanto costa questo servizio?",
    },
    subscription: {
      title: "Abbonamento",
      message:
        "Puoi scegliere il periodo di abbonamento acquistando questo servizio su base giornaliera. Fai sapere all'acquirente se desideri modificare i valori predefiniti che hai già inserito.",
      duration: "Periodo di abbonamento",
    },
    charge: {
      title: "Addebito",
      message:
        "Hai specificato un addebito per questo articolo. È possibile modificare l'importo dell'addebito per l'articolo acquistato dal cliente.",
      charge: "Addebito",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "In attesa di verificare l'accesso...",
    no_access_message:
      "Sfortunatamente, non hai accesso al nostro negozio.<br/> Ci contatti per favore.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Condividi l'ordine",
    title: "Condividi questo ordine con gli altri.",
    message:
      "È un collegamento sicuro, condividilo solo con coloro che conosci. Chiunque abbia questo link può duplicare il tuo ordine e vedere l'indirizzo selezionato. Conterrà informazioni sul tuo carrello attuale.",
    valid_period: "Questo collegamento scadrà dopo 48 ore.",
    import_order_action: "Ordine di importazione",
    retrieve_dialog_title: "Recupera l'ordine esterno",
    address_included: "Condividi gli articoli del carrello + Indirizzo",
    address_excluded: "Condividi solo gli articoli del carrello",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prezzi",
    inventory: "Inventario",
    discount: "Sconto",
  },

  rating: {
    product_rating_message:
      "Questo prodotto ha ricevuto una valutazione di {rate} stelle su 5 ed è stato valutato da {rate_count} persone.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Esplorare!",
      same_tags_subtitle: "Trova articoli correlati più notevoli.",
      same_category_subtitle: "Trova altri oggetti notevoli in questa categoria.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Ordina {product} con",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Visualizza il negozio di {vendor}",
  },

  login: {
    welcome: "Benvenuto",
  },


};
