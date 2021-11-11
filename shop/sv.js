export default {
  /** @see ProductRatingView **/
  surveys: ["Mycket dålig", "Dålig", "Normal", "Bra", "Utmärkt"],


  /** @see ShopFooter **/
  footer: {
    map: "Karta",
    email: "E-post",
    phone: "Telefon",
    address: "Adress",

    copyright:
      "Användning av innehåll endast för icke-kommersiella ändamål och med hänvisning till källan (länk med {shop_title}). Alla rättigheter reserverade för {shop_title}.",
    powered_by: "Drivs av",
    privacy: "Integritetspolicy",
    term_of_use: "Villkor",
    shop_app_setting: "Butiksinställning & GDPR",

    dialog_setting: {
      title: "Butik Applikation Inställning",
      app_list: "Lista över applikationer",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Utsåld",
    review_unit: "recension",
    not_original: "Inte original",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtrera",
    native: {
      title: "Ansökan logga in",
      message:
        "Denna app kräver åtkomst till din butikskontoinformation. Detta inkluderar tillgång till namn, kontaktnummer, adress, e-post, beställningshistorik, beställning och att lägga upp kommentarer i denna butik.",
      message_bold:
        "Se till att använda den officiella butiksappen för att komma in i den här butiken.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sortera efter",
    title_small: "Sortera efter..",
    nothing: "Ingenting",
    most_views: "De flesta vyer",
    most_likes: "Mest populär",
    most_recent: "Nyaste",
    most_sell: "Bästsäljare",
    cheapest: "Billigast",
    most_expensive: "Dyraste",
    only_available: "Tillgängliga",
    view_mode: {
      normal: "Vanligt",
      grid: "Rutnät",
      list: "Lista",
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Falsk",
    action: "Auktion",
    compare_limit: "10 artiklar gräns",
    compare_add: "Lägg till för att jämföra",
    compare_be_in_list: "I jämförelselistan",

    type: "Typ",
    brand: "varumärke",
    category: "Kategori",
    discount: "Rabatt",
    track_price: "Spårpris",
    waiting_for_auction: "Väntar du på auktion?",
    inform_auction: "Berätta om auktion",
    return_in_days: "{days} dagars garantiretur",
    support24h7: "Support 24 timmar 7 dagar",
    support_normal: "Arbetstidsstöd",
    original_guarantee: "Originalgaranti",
    cod_payment: "Postförskottsstöd",

    pros: "Fördelar",
    cons: "Nackdelar",

    external_link: "Läs mer",
    notifications: {
      congratulation: "Grattis",
      waiting_list_add_success:
        "Vi kommer att meddela dig när denna produkt auktioneras ut.",
      waiting_list_delete_success: "Du lämnade auktionens väntelista.",
    },

    offer_message: "Köp {min_quantity} Få {percent} % rabatt på dessa varor",
    up_to: "Upp till {per_order}x per beställning",
    get_free: "FÅ GRATIS",
    get_off: "FÅ {percent} % RABATT",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "Väntar på tillgänglighet",
    inform_me_when_available: "Väntar du på det här?",
    pay_buy: "Betala & Köp",
    quantity: "Räkna",
    quantity_in_basket: "Artiklar i varukorgen",
    count_unit: "x",
    remove: "Avlägsna",
    add_to_basket: "Lägg till i kundvagn",
    buy: "köpa",
    notifications: {
      inform_add_success: "Vi meddelar dig när den är tillgänglig.",
      inform_remove_success: "Du har tagits bort från väntelistan.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Recension",
    spec: "Spec",
    comments: "Kommentarer",
    related_products_title: "Relaterade produkter",
    price: "Pris",
    rate: "Betygsätta",
    comment: "kommentar",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "Beställningshistorik",
      profile: "Profil",
      favorites: "Mina favoriter",
      gift_cards: "Presentkort",
      return_requests: "Returförfrågningar",
      basket: "Kundvagn",
    },
    user_menu: {
      my_shops: "Mina butiker",
      go_to_admin: "Hantera {shop_name}",
      exit_from: "Logga ut {shop_name}",
      chips: "{marker} Marker",
    },
    login_to_shop: "Logga in i butik",
    login_to_shop_short: "logga in",
    item_in_basket_message: "{count} Den här artikeln finns i din kundvagn.",
    search_title: "Sök i butik {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Vagn",
    basket_is_empty: "Din vagn är tom.",
    total_price: "Total",
    view_basket: "Visa kundvagn",
    more: "Mer ...",
    accept_and_pay: "Kolla upp",
    items: "föremål",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "avvisade",
    table: {
      code: "Beställningskod",
      reserved: "Datum",
      delivery_state: "Leveransstatus",
      price: "Totalbelopp",
      status: "Betalningsstatus",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "Beställningskod",
      items: "Föremål",
      reserved: "Datum",
      delivery_state: "Senaste status",
      price: "Totalbelopp",
      status: "Betalningsstatus",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Present kort",
      comments: "Kommentarer",
      favorites: "Favoriter",
      return_requests: "Returnerar",
      addresses: "Adresser",
      profile: "profil",
      orders: "Order",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "Order",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Betalning",
      payment_waiting: "Väntar på betalning",
      payment_completed: "Betalt",
      table: {
        title: "Titel",
        amount: "Belopp",
        description: "Beskrivning",
      },
      total_payment: "Betalt belopp",
      discount: "Rabatt",
      discount_code: "Rabattkod",
      delivery_fee: "Fraktkostnad",
      delivery_fee_after: "Ingen leverans betald",

      total_price: "Totalt pris för artiklar",
      total_items_discount: "Varor rabatt",
      total_price_after_offers: "Totalpris efter ansökningserbjudanden",

      buyer_payment: "Köparens betalningsbelopp",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Leverans",
      subtitle: "Köparinformation",
      confirm_received_action: "Bekräfta produktkvitto",
      confirm_received_info:
        "Klicka på bekräftelseknappen om du tagit emot beställningen. Vid behov kommer du att kunna skicka in en remiss om du får bekräftelse.",
      receiver: "Mottagare",
      bill: "Faktura",
      name: "namn",
      tel: "Telefon",
      email: "E-post",
      country: "Land",
      state: "stat",
      city: "Stad",
      address: "Adress",
      building_no: "Husnummer",
      unit_no: "Enhetsnummer",
      postal_code: "Postnummer",
      description: "Beskrivning",
      order_delivered: "Beställningen har levererats.",
      delivery_time: "Leveranstid",
      tracking_code: "Spårningskod",
      tracking_url: "Spårningsurl",

      notifications: {
        confirm_delivery: "Din beställning har godkänts.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Garanti för varornas originalitet",
      return: "Lämna tillbaka",
      table: {
        product: "produktnamn",
        count: "Räkna",
        unit_price: "Enhetspris",
        total_price: "Totalbelopp",
        discount: "Rabatt",
        final_price: "Slutgiltigt pris",
        returned: "Returnerad",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Lämna tillbaka",
    count_input: "Antal returnerade varor",
    count_input_message: "Hur många lämnar du tillbaka?",
    reason_input: "anledning att återvända",
    reason_input_message: "Välj skälet till att returnera denna vara.",
    note_input: "Beskrivning",
    note_input_hint: "Beskriv anledningen till referensen..",
    note_input_message:
      "Beskriv anledningen till att du hänvisar den här artikeln om det behövs.",
    media_message:
      "Du kan ladda upp bild, ljud eller video av produkten här för att få bättre support för produktstatusinformation. Om du väljer filen skickas och bekräftas automatiskt.",
    video: "Video",
    voice: "Röst",
    add_action: "Skicka returförfrågan",
    notifications: "Din hänvisningsbegäran har registrerats.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "Beställa",
    info: {
      title: "Köpt virtuell produkt",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Min personliga information",
    name: "namn",
    email: "E-post",
    tel: "Tel",
    identity: "Autentisering",
    success_kyc: "Godkänd KYC",
    club: "Användarnivå",
    subscription: "Nyhetsprenumeration",
    leave_shop: "Lämna den här butiken och ta bort alla kundnivåer",
    leave_shop_action: "Lämna butiken",
    leave_dialog: {
      title: "Lämna butiken",
      message:
        "Att avbryta prenumerationen på den här butiken kommer inte att radera din beställningsinformation och register.",
      action: "Lämna",
    },
    notifications: {
      leave_success: "Lämna butiken",
    },
    club_table: {
      discount: "Rabatt",
      limit: "Begränsa",
      currency: "Valuta",
      free_shipping: "Gratis frakt",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "Kundvagn",
    total_price: "Totala summan",
    shipping: "Fraktkostnad",
    free_shipping: "Gratis frakt",
    shipping_not_pay: "Ingår ej",
    total_discount: "Total rabatt",
    customer_club: "Klientklubbmedlem",
    customer_club_discount: "Medlemsrabatt",
    final_price: "Sista betalningen",
    lead_time: "Förberedelsetid",
    lead_time_unit: "timme",
    receive_time: "Dags att ta emot",
    select_time: "Välj Leveranstid",
    no_select_time: "Skicka när du är redo.",
    transportation_type: "typ av fordon",
    days_input: "Leveransdagar",
    days_input_label: "dagar",
    days_input_no_data: "Välj minst en dag",
    time_input: "Leveranstid",
    time_input_label: "Leverans kl",
    time_input_label_no_data: "Välj minst ett tidsintervall",
    support_cod: "Postförskott",
    not_support_cod: "Kan inte betala lokalt!",
    final_confirm_action: "Slutlig orderbekräftelse",
    pay_and_complete_action: "Betala nu",
    pre_confirm_service: "Skicka förfrågan",

    errors: {
      no_address: "Välj den adress du vill att din beställning ska skickas till.",
      no_phone: "Ange ett kontaktnummer för att samordna mottagandet av varor.",
      select_billing_country: "Välj ditt faktureringsland",
      select_billing_state: "Välj din skatteregion",
    },
    same_billing_address: "Faktureringsinformation samma som mottagarinformation",
    custom_billing_info: "Olika faktureringsuppgifter",
    basket_empty: "Korgen är tom",
    extra_shipping_count: "Du kommer att få {count} paket.",
    select_location_error:
      "Hitta platsen för mottagandet av försändelsen på kartan och klicka på indikatorn i mitten av kartan för att fastställa mottagarens exakta adress.",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "timme",
    count_input: "Räkna",

    price_changed: "Priset har ändrats. nytt pris:",
    offer: "Få {count}x varor med {percent} % rabatt",
    offer_free: "Få {count}x gratis",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title:"Mina adresser",
    new_action: "Ny adress",
    receiver: "Mottagare",
    address: "Adress",
    building_no: "registreringsskylt",
    building_unit: "enhet",
    postcode: "Postnummer",
    tel: "Tel",
    description: "Notera",

    map: {
      title: "Mina adresser",
      confirm: "Adressregistrering",
      address_type: "Adress",
      receptor_type: "Mottagare",
    },
    add_dialog: {
      title: "Nytt adressnamn",
      message: "Ange en titel för en ny adress.",
      address_name_input:"Adress (obligatoriskt)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "Returförfrågningar",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "önskelista",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Mina kommentarer",
    first_post: "Första inlägg",
    last_edit: "Senaste redigering",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Mina presentkort",
    add_action: "Lägg till kort",
    add_card_dialog: {
      title: "Lägg till presentkort",
      message:
       "Ange kortnummer och säkerhetskod. Ett presentkort kommer att läggas till ditt konto.",
      card_number_input: "kortnummer",
      info: "Obs: När du köper från butiken kommer du att se möjligheten att betala med presentkort. Genom att välja detta alternativ kommer beloppet för ditt omladdningssaldo att dras från beställningsbeloppet. ",
      add_action: "Kortregistrering",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Produktjämförelse",
    action_button: "jämföra",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "Inga produkter har lagts till i jämförelselistan.",
      price: "Pris",
      type: "Typ",
      brand: "varumärke",
      warranty: "Garanti",
      variants_comparison: "Jämför produktmångfald",
      spec: "Tekniska specifikationer",
      pros: "Fördelar",
      cons: "Nackdelar",
      user_review: "Användarkommentarer",
      rating: "Betyg",
      rating_count: "Antal recensioner",
      info: "Du kan dela denna produktjämförelsetabell med dina vänner genom att skicka följande länk, eller komma åt den senare genom att spara den här länken.",
      copy_action: "Kopiera jämförelselänk",
      check_list: ["Ja", "Har"],
      cross_list: ["Nej", "Har inte"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Endast original",
    only_has_discount: "Endast rabatterat",
    price_range: "Prisklass",
    brands: "varumärke",
    main_shop_page: "Butiks huvudsida",
    home: "Hem",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Bästa {användare}, Du har köpt den här produkten. Vad tycker du om den här produkten?",
    notification: {
      title: "Grattis",
      message: "Din kommentar har spelats in.",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Blogg",
    add_new_blog: "Ny blogg",
    popular: "Populär",
    topics: "Ämnen",
    suggestions: "Förslag",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "Om oss",
    terms: "Villkor",
    privacy: "Integritetspolicy",
    contact_us: "Kontakta oss",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Kontakta oss formulär",
    name: "namn",
    email: "E-post",
    phone: "Telefon",
    message: "Meddelande",
    notifications: {
      success: "Ditt meddelande har skickats.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Betalningsbekräftelse",
      payment_success: "Betalning genomförd.",
      buy_title: "köpa",
      pay_by_giftcards: "Din beställning betalades med ett presentkort.",
      free_order: "Din beställning är gratis.",
      pay_by_cod: "Din beställning har lagts till som postförskott.",
      pay_by_dir:
        "Din beställning har lagts till. Nu kan du betala med direkt pengaöverföring och sedan ladda upp betalningskvittot på beställningssidan.",
      pay_title: "Betalning",
      qr_code_payment: "QR-kod för betalning har skapats.",
      connecting_to_online_gateway: "Ansluter till onlinebetalningsgateway.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Återstår till början",
    title_between_start_end: "Återstår till slutet",
    title_after_end: "Färdiga",
    title_no_start_end: "Utan tidsperiod!",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Du kan få en gåva per beställning.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Kupongskod",
    add_coupon: "Lägg till kupong",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "Avokadoformen är inte aktiverad!",
    last_update: "Senaste uppdateringen:",
    step1:
      "1. Ange namn och detaljer för produkten du vill beställa och klicka på knappen Lägg till.",
    title_plc: "Ange namnet på produkten.",
    description_plc: "Har du fler produktbeskrivningar?",
    link_plc: "Har du en länk till produkten?",
    image: "Produktbild",
    image_msg: "Du kan skicka produktbilden om det behövs.",
    add_item: "Lägg till vara",
    items_list: "Lista över efterfrågade produkter",
    currency_msg: "Du måste betala beloppet för denna beställning med denna valuta.",
    step2:
      "2. När du har lagt till alla önskade artiklar klickar du på knappen för begäran om beställningsgranskning. I detta skede kommer vi att granska beställningen och meddela dig om priset. Genom att klicka på denna länk kommer du att kunna se pris och betalningslänk.",
    order_action: "Beställningsregistrering",
    show_all: "Visa allt",
    show_accepted: "Visa verifierade objekt",
    last_orders: "Lista över dina senaste beställningar",
    pending_status: "under granskning",
    check_now: "Kontrollera beställning",
    add_new_order: "Registrera ny beställning",
    pay_online: "betala online",
    pricing_not_completed_message:
      "Din beställning granskas. Din beställning kommer att granskas och prissättas snart och du kommer att kunna betala beställningen.",

    delete_item_dialog: {
      title: "Ta bort varan från varukorgen",
      message: "Vill du ta bort den här artikeln från kundvagnen?",
      action: "Ja, radera",
    },

    notifications: {
      order_success: "Din beställning gjordes framgångsrikt.",
      delete_success: "Objekt raderade.",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Skapande av order",
    message:
      "Skapa listan över produkter du vill köpa genom att skanna produktkoden.",

    currency_msg: "Valutan du vill betala med.",
    order_action: "Betalning",
    add_new_order: "Ny order",
    continue_order: "Fortsätt beställning",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Ladda upp bild av betalningskvittot.",
    upload_payment_receipt_done:
      "✔ Du har redan laddat upp kvittobilden, vänta på vårt godkännande. Om du behöver ändra kan du ersätta den tidigare bilden med en ny.",
    public_form_title: "Kontoinformation för pengaöverföring",
  },
};
