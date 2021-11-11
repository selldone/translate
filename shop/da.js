export default {
  /** @see ProductRatingView **/
  surveys: ["Meget dårlig", "Fattige", "Normal", "godt", "Fremragende"],


  /** @see ShopFooter **/
  footer: {
    map: "Kort",
    email: "E-mail",
    phone: "telefon",
    address: "Adresse",

    copyright:
      "Brugen af indhold kun til ikke-kommercielle formål og med henvisning til kilden (link med {shop_title}). Alle rettigheder forbeholdt {shop_title}.",
    powered_by: "Drevet af",
    privacy: "Fortrolighedspolitik",
    term_of_use: "Vilkår for brug",
    shop_app_setting: "Butiksindstilling og GDPR",

    dialog_setting: {
      title: "Indstilling af butiksapplikationer",
      app_list: "Liste over applikationer",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Udsolgt",
    review_unit: "anmeldelse",
    not_original: "Ikke original",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filter",
    native: {
      title: "Ansøgning login",
      message:
        "Denne app kræver adgang til dine butikskontooplysninger. Dette inkluderer adgang til navn, kontaktnummer, adresse, e-mail, ordrehistorik, bestilling og udsendelse af kommentarer til denne butik.",
      message_bold:
        "Sørg for at bruge den officielle butiksapp til at komme ind i denne butik.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sorter efter",
    title_small: "Sorter efter",
    nothing: "Ikke noget",
    most_views: "De fleste udsigter",
    most_likes: "Mest populære",
    most_recent: "Nyeste",
    most_sell: "Bedstsælgende",
    cheapest: "Billigst",
    most_expensive: "Dyreste",
    only_available: "Ledig",
    view_mode: {
      normal: "Normal",
      grid: "Gitter",
      list: "Liste",
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Falsk",
    action: "Auktion",
    compare_limit: "10 varer grænse",
    compare_add: "Tilføj til sammenligning",
    compare_be_in_list: "I sammenligningslisten",

    type: "Type",
    brand: "Mærke",
    category: "Kategori",
    discount: "Rabat",
    track_price: "Spor pris",
    waiting_for_auction: "Venter du på auktion?",
    inform_auction: "Fortæl mig om auktion",
    return_in_days: "Returnering af {days} dages garanti",
    support24h7: "Support 24 timer 7 dage",
    support_normal: "Arbejdstidsstøtte",
    original_guarantee: "Original garanti",
    cod_payment: "Efterkrav support",

    pros: "Fordele",
    cons: "Ulemper",

    external_link: "Læs mere",
    notifications: {
      congratulation: "Tillykke",
      waiting_list_add_success:
        "Vi giver dig besked, når dette produkt er på auktion.",
      waiting_list_delete_success: "Du forlod auktionens venteliste.",
    },

    offer_message: "Køb {min_quantity} Få {percent} % i rabat på disse varer",
    up_to: "Op til {per_order}x pr. ordre",
    get_free: "FÅ GRATIS",
    get_off: "FÅ {percent} % i rabat",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "Venter på tilgængelighed",
    inform_me_when_available: "Venter du på dette?",
    pay_buy: "Betal & Køb",
    quantity: "Tælle",
    quantity_in_basket: "Varer i indkøbskurven",
    count_unit: "x",
    remove: "Fjerne",
    add_to_basket: "Tilføj til kurv",
    buy: "Købe",
    notifications: {
      inform_add_success: "Vi giver dig besked, når det er tilgængeligt.",
      inform_remove_success: "Du er blevet fjernet fra ventelisten.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Anmeldelse",
    spec: "Spec",
    comments: "Kommentarer",
    related_products_title: "Relaterede produkter",
    price: "Pris",
    rate: "Sats",
    comment: "kommentar",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "ordre historik",
      profile: "Profil",
      favorites: "Mine favoritter",
      gift_cards: "Gavekort",
      return_requests: "Returanmodninger",
      basket: "Indkøbskurv",
    },
    user_menu: {
      my_shops: "Mine butikker",
      go_to_admin: "Administrer {shop_name}",
      exit_from: "Log ud {shop_name}",
      chips: "{chips} Chips",
    },
    login_to_shop: "Log ind på butik",
    login_to_shop_short: "Log på",
    item_in_basket_message: "{count} Denne vare er i din indkøbskurv.",
    search_title: "Søg i butik {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Vogn",
    basket_is_empty: "Din vogn er tom.",
    total_price: "i alt",
    view_basket: "Se indkøbsvogn",
    more: "Mere ...",
    accept_and_pay: "Checkout",
    items: "vare(r)",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Afvist",
    table: {
      code: "Bestillingskode",
      reserved: "Dato",
      delivery_state: "Forsendelses status",
      price: "Total pris",
      status: "Betalingsstatus",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "Bestillingskode",
      items: "genstande",
      reserved: "Dato",
      delivery_state: "Seneste status",
      price: "Total pris",
      status: "Betalingsstatus",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Gavekort",
      comments: "Kommentarer",
      favorites: "Favoritter",
      return_requests: "Vender tilbage",
      addresses: "Adresser",
      profile: "profil",
      orders: "Ordre:% s",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "Bestille",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Betaling",
      payment_waiting: "Venter på betaling",
      payment_completed: "Betalt",
      table: {
        title: "Titel",
        amount: "Beløb",
        description: "Beskrivelse",
      },
      total_payment: "Betalt beløb",
      discount: "Rabat",
      discount_code: "Rabatkode",
      delivery_fee: "Forsendelsesomkostninger",
      delivery_fee_after: "Ingen levering betalt",

      total_price: "Samlet pris på varer",
      total_items_discount: "Varer rabat",
      total_price_after_offers: "Samlet pris efter gældende tilbud",

      buyer_payment: "Købers betalingsbeløb",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Levering",
      subtitle: "Køberoplysninger",
      confirm_received_action: "Bekræft produktkvittering",
      confirm_received_info:
        "Klik på bekræftelsesknappen, hvis du har modtaget ordren. Hvis det er nødvendigt, vil du kunne indsende en henvisning, hvis du modtager bekræftelse.",
      receiver: "Modtager",
      bill: "Faktura",
      name: "Navn",
      tel: "telefon",
      email: "E-mail",
      country: "Land",
      state: "Stat",
      city: "By",
      address: "Adresse",
      building_no: "Bygningsnummer",
      unit_no: "Enhedsnummer",
      postal_code: "Postnummer",
      description: "Beskrivelse",
      order_delivered: "Ordren er blevet leveret.",
      delivery_time: "Leveringstid",
      tracking_code: "Sporingskode",
      tracking_url: "Sporingsurl",

      notifications: {
        confirm_delivery: "Din ordre er blevet godkendt.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Garanti for varernes originalitet",
      return: "Vend tilbage",
      table: {
        product: "produktnavn",
        count: "Tælle",
        unit_price: "Pris per stk",
        total_price: "Total pris",
        discount: "Rabat",
        final_price: "Endelig pris",
        returned: "Vendt tilbage",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Vend tilbage",
    count_input: "Antal returnerede varer",
    count_input_message: "Hvor mange returnerer du?",
    reason_input: "Årsag til returnering",
    reason_input_message: "Vælg årsagen til at returnere denne vare.",
    note_input: "Beskrivelse",
    note_input_hint: "Beskriv årsagen til henvisningen..",
    note_input_message:
      "Beskriv årsagen til at henvise denne vare, hvis det er nødvendigt.",
    media_message:
      "Du kan uploade billede, lyd eller video af produktet her for at få bedre support til information om produktstatus. Valg af filen vil automatisk sende og bekræfte.",
    video: "Video",
    voice: "Stemme",
    add_action: "Send returanmodning",
    notifications: "Din henvisningsanmodning er blevet registreret.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "Bestille",
    info: {
      title: "Købt virtuelt produkt",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Mine personlige oplysninger",
    name: "Navn",
    email: "E-mail",
    tel: "Tlf",
    identity: "Godkendelse",
    success_kyc: "Godkendt KYC",
    club: "Brugerniveau",
    subscription: "Nyhedsabonnement",
    leave_shop: "Forlad denne butik og fjern alle kundeniveauer",
    leave_shop_action: "Forlad butikken",
    leave_dialog: {
      title: "Forlad butikken",
      message:
        "Afmeldelse af denne butik vil ikke slette dine ordreoplysninger og registreringer.",
      action: "Forlade",
    },
    notifications: {
      leave_success: "Forlad butikken",
    },
    club_table: {
      discount: "Rabat",
      limit: "Begrænse",
      currency: "betalingsmiddel",
      free_shipping: "Gratis fragt",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "Indkøbskurv",
    total_price: "Total beløb",
    shipping: "Forsendelsesomkostninger",
    free_shipping: "Gratis fragt",
    shipping_not_pay: "Ikke inkluderet",
    total_discount: "Samlet rabat",
    customer_club: "Klientklubmedlem",
    customer_club_discount: "Medlemsrabat",
    final_price: "Endelig betaling",
    lead_time: "Forberedelsestid",
    lead_time_unit: "time",
    receive_time: "Tid til at modtage",
    select_time: "Vælg Leveringstid",
    no_select_time: "Send når du er klar.",
    transportation_type: "type køretøj",
    days_input: "Leveringsdage",
    days_input_label: "Dage",
    days_input_no_data: "Vælg mindst én dag",
    time_input: "Leveringstid",
    time_input_label: "Levering kl",
    time_input_label_no_data: "Vælg mindst et tidsinterval",
    support_cod: "Kontant ved levering",
    not_support_cod: "Kan ikke betale lokalt!",
    final_confirm_action: "Endelig ordrebekræftelse",
    pay_and_complete_action: "Betal nu",
	pre_confirm_service: "Send anmodning",
	
    errors: {
      no_address: "Vælg den adresse, du ønsker din ordre skal sendes til."
      no_phone: "Indtast et kontaktnummer for at koordinere varemodtagelsen.",
      select_billing_country: "Vælg dit faktureringsland",
      select_billing_state: "Vælg dit skatteområde",
    },
    same_billing_address: "Faktureringsoplysninger samme som modtageroplysninger",
    custom_billing_info: "Forskellige faktureringsoplysninger",
    basket_empty: "Kurven er tom",
    extra_shipping_count: "Du modtager {count} pakker.",
    select_location_error:
      "Find stedet for modtagelse af forsendelsen på kortet, og klik på indikatoren i midten af kortet for at bestemme modtagerens nøjagtige adresse.",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "time",
    count_input: "Tæl",

    price_changed: "Prisen er ændret. ny pris:",
    tilbud: "Få {count}x vare med {percent} % i rabat",
    offer_free: "Få {count}x gratis",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "Mine adresser",
    new_action: "Ny adresse",
    receiver: "Modtager",
    address: "Adresse",
    building_no: "nummerplade",
    building_unit: "enhed",
    postcode: "Postnummer",
    tel: "Tlf",
    description: "Bemærk",

    map: {
      title: "Mine adresser",
      confirm: "Adresseregistrering",
      address_type: "Adresse",
      receptor_type: "Modtager",
    },
    add_dialog: {
      title: "Nyt adressenavn",
      message: "Indtast en titel for en ny adresse.",
      address_name_input: "Adresse (påkrævet)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "Returanmodninger",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "Ønskeliste",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Mine kommentarer",
    first_post: "Første indlæg",
    last_edit: "Sidste redigering",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Mine gavekort",
    add_action: "Tilføj kort",
    add_card_dialog: {
      title: "Tilføj gavekort",
      message:
        "Indtast kortnummeret og sikkerhedskoden. Et gavekort vil blive tilføjet til din konto.",
      card_number_input: "kortnummer",
      info: "Bemærk: Ved køb i butikken får du vist muligheden for at betale med gavekort. Ved at vælge denne mulighed vil beløbet for din genopladningssaldo blive trukket fra ordrebeløbet.",
      add_action: "Kort registrering",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Produktsammenligning",
    action_button: "sammenligne",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "Ingen produkter blev tilføjet til sammenligningslisten.",
      price: "Pris",
      type: "Type",
      brand: "Mærke",
      warranty: "Garanti",
      variants_comparison: "Sammenlign produktdiversitet",
      spec: "Tekniske specifikationer",
      pros: "Fordele",
      cons: "Ulemper",
      user_review: "Brugerkommentarer",
      rating: "Bedømmelse",
      rating_count: "Antal anmeldelser",
      info: "Du kan dele denne produktsammenligningstabel med dine venner ved at sende følgende link, eller få adgang til den senere ved at gemme dette link.",
      copy_action: "Kopiér sammenligningslink",
      check_list: ["Ja", "Har"],
      cross_list: ["Ingen", "Har ikke"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Kun originaler",
    only_has_discount: "Kun nedsat",
    price_range: "Prisklasse",
    brands: "Mærke",
    main_shop_page: "Butiks hovedside",
    home: "Hjem",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Kære {bruger}, Du har købt dette produkt. Hvad synes du om dette produkt?",
    notification: {
      title: "Tillykke",
      message: "Din kommentar er blevet optaget.",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Blog",
    add_new_blog: "Ny blog",
    popular: "Populær",
    topics: "Emner",
    suggestions: "Forslag",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "Om os",
    terms: "Vilkår for brug",
    privacy: "Fortrolighedspolitik",
    contact_us: "Kontakt os",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Kontakt os formular",
    name: "Navn",
    email: "E-mail",
    phone: "telefon",
    message: "Besked",
    notifications: {
      success: "Din besked er blevet sendt.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Betalingsbekræftelse",
      payment_success: "Betaling gennemført.",
      buy_title: "Købe",
      pay_by_giftcards: "Din ordre blev betalt med et gavekort.",
      free_order: "Din ordre er gratis.",
      pay_by_cod: "Din ordre er tilføjet som efterkrav.",
      pay_by_dir:
        "Din ordre er blevet tilføjet. Nu kan du betale med direkte pengeoverførsel og derefter uploade betalingskvitteringen på ordresiden.",
      pay_title: "Betaling",
      qr_code_payment: "Betalings QR-kodeadresse er oprettet.",
      connecting_to_online_gateway: "Opretter forbindelse til online betalingsgateway.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Tilbage til begyndelsen",
    title_between_start_end: "Tilbage til slutningen",
    title_after_end: "Færdig",
    title_no_start_end: "Uden tidsrum!",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Du kan modtage én gave pr. ordre.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Kuponkode",
    add_coupon: "Tilføj kupon",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "Avocadoformen er ikke aktiveret!",
    last_update: "Sidste ændring:",
    step1:
      "1. Indtast navn og detaljer for det produkt, du vil bestille, og klik på knappen Tilføj.",
    title_plc: "Indtast navnet på produktet.",
    description_plc: "Har du flere produktbeskrivelser?",
    link_plc: "Har du et link til produktet?",
    image: "Produktbillede",
    image_msg: "Du kan sende produktbilledet, hvis det er nødvendigt.",
    add_item: "Tilføj element",
    items_list: "Liste over efterspurgte produkter",
    currency_msg: "Du skal betale beløbet for denne ordre med denne valuta.",
    step2:
      "2. Når du har tilføjet alle de ønskede varer, skal du klikke på knappen for anmodning om ordregennemgang. På dette tidspunkt vil vi gennemgå ordren og give dig besked om prisen. Ved at klikke på dette link vil du kunne se pris og betalingslink.",
    order_action: "Ordreregistrering",
    show_all: "Vis alt",
    show_accepted: "Vis verificerede varer",
    last_orders: "Liste over dine seneste ordrer",
    pending_status: "Under gennemsyn",
    check_now: "Tjek rækkefølgen",
    add_new_order: "Registrer ny ordre",
    pay_online: "betale online",
    pricing_not_completed_message:
      "Din ordre bliver gennemgået. Din ordre vil snart blive gennemgået og prissat, og du vil være i stand til at betale ordren.",

    delete_item_dialog: {
      title: "Fjern varen fra indkøbskurven",
      message: "Vil du slette denne vare fra indkøbskurven?",
      action: "Ja, slet",
    },

    notifications: {
      order_success: "Din ordre blev afgivet.",
      delete_success: "Varen er slettet.",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Ordreoprettelse",
    message:
      "Opret listen over produkter, du vil købe, ved at scanne produktkoden.",

    currency_msg: "Den valuta du vil betale med.",
    order_action: "Betaling",
    add_new_order: "Ny ordre",
    continue_order: "Fortsæt bestilling",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Upload billede af betalingskvitteringen.",
    upload_payment_receipt_done:
      "✔ Du har allerede uploadet kvitteringsbilledet, vent på vores godkendelse. Hvis du har brug for at ændre, kan du erstatte det forrige billede med et nyt.",
    public_form_title: "Kontooplysninger til pengeoverførsel",
  },
};
