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
  surveys: ["Zelo reven", "Ubogi", "Normalno", "dobro", "Odlično"],

  /** @see SFooterSection **/
  footer: {
    map: "Zemljevid",
    email: "E-naslov",
    phone: "Telefon",
    address: "naslov",

    copyright:
      "Uporaba vsebine samo v nekomercialne namene in s sklicevanjem na vir (povezava z {shop_title}). Vse pravice pridržane za {shop_title}.",
    powered_by: "Poganja ga",
    privacy: "Politika zasebnosti",
    term_of_use: "Pogoji uporabe",
    shop_app_setting: "Nastavitev trgovine in GDPR",

    dialog_setting: {
      title: "Nastavitev aplikacij za nakupovanje",
      app_list: "Seznam aplikacij",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Razprodano",
    review_unit: "Pregled",
    not_original: "Ni izvirno",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filter",
    native: {
      title: "Prijava v aplikacijo",
      message:
        "Ta aplikacija zahteva dostop do podatkov o vašem računu trgovine. To vključuje dostop do imena, kontaktne številke, naslova, e-pošte, zgodovine naročil, naročanja in objavljanja komentarjev v tej trgovini.",
      message_bold:
        "Za vstop v to trgovino uporabite uradno aplikacijo trgovine.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Razvrsti po",
    title_small: "Razvrsti po..",
    nothing: "Nič",
    most_views: "Večina ogledov",
    most_likes: "Najbolj priljubljena",
    most_recent: "Najnovejše",
    most_sell: "Najbolj prodajana",
    cheapest: "Najcenejši",
    most_expensive: "Najdražja",
    only_available: "Na voljo",
    view_mode: {
      normal: "Normalno",
      grid: "Mreža",
      list: "Seznam",
      insta: "Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Lažne",
    action: "Dražba",
    compare_limit: "Omejitev 10 predmetov",
    compare_add: "Dodaj v primerjavo",
    compare_be_in_list: "Na seznamu primerjav",

    type: "Vrsta",
    brand: "Blagovna znamka",
    category: "Kategorija",
    discount: "Popust",
    track_price: "Sledite ceni",
    waiting_for_auction: "Čakate na dražbo?",
    inform_auction: "Povej mi o dražbi",
    return_in_days: "{days} dni vračila garancije",
    support24h7: "Podpora 24 ur 7 dni",
    support_normal: "Podpora za delovni čas",
    original_guarantee: "Originalna garancija",
    cod_payment: "Podpora po povzetju",

    pros: "Prednosti",
    cons: "Slabosti",

    external_link: "Preberi več",
    notifications: {
      congratulation: "Čestitam",
      waiting_list_add_success:
        "Ko bo ta izdelek na dražbi, vas bomo obvestili.",
      waiting_list_delete_success: "Izstopili ste s čakalnega seznama dražbe.",
    },

    offer_message: "Kupite {min_quantity} Prejmite {percent} % popusta za te izdelke",
    up_to: "Do {per_order}x na naročilo",
    get_free: "DOBITI BREZPLAČNO",
    get_off: "PREBIJTE {percent} % POPUSTA",
    select_a_vendor_message: "Prosimo izberite prodajalca.",
    product_description_header: "Predstavljamo {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Čakanje na razpoložljivost",
    inform_me_when_available: "Čakam na to?",
    pay_buy: "Plačaj & Kupi",
    quantity: "štetje",
    quantity_in_basket: "Predmeti v košarici",
    count_unit: "x",
    remove: "Odstrani",
    add_to_basket: "Dodaj v voziček",
    buy: "Kupite",
    subscribe_now: "Naročite se zdaj",
    unsubscribe: "Odjavi se",
    select_a_subscription_plan: "Najprej izberite načrt!",
    manage_subscriptions: "Upravljanje naročnin",
    notifications: {
      inform_add_success: "Sporočili vam bomo, ko bo na voljo.",
      inform_remove_success: "Odstranjeni ste s čakalne liste.",
    },
    zip_pin_input: "Poštna številka / PIN",
    zip_pin_not_available_msg: "Ni na voljo na tej lokaciji!",
    zip_pin_placeholder: "Izberite kodo poštne številke/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Pregled",
    spec: "Specifikacije",
    comments: "Komentarji",
    price: "Cena",
    rate: "Oceniti",
    comment: "Komentar",
    warranty: "Garancija",
    return_policy: "Vračilo blaga",
    guide: "Vodnik",
    shipping: "Dostava",
    related_products_title: "Podobni izdelki",
    related_categories_title: "Odkrijte v zbirkah",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Zgodovina naročil",
      profile: "Moj profil",
      favorites: "Priljubljeni predmeti",
      gift_cards: "Darilne kartice",
      return_requests: "Vrnjena naročila",
      basket: "Nakupovalni voziček",
    },
    user_menu: {
      my_shops: "Moje trgovine",
      go_to_admin: "Upravljaj {shop_name}",
      exit_from: "Odjava {shop_name}",
      chips: "{chips} čips",
    },
    login_to_shop: "Prijavite se v trgovino",
    login_to_shop_short: "Vpiši se",
    item_in_basket_message: "{count} Ta izdelek je v vašem vozičku.",
    search_title: "Išči v trgovini {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Voziček",
    basket_is_empty: "Vaš nakupovalni voziček je prazen.",
    total_price: "Skupaj",
    view_basket: "Vaš voziček",
    more: "Več ...",
    accept_and_pay: "Preveri",
    items: "Predmet(i)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Zavrnjeno",
    table: {
      code: "Koda naročila",
      reserved: "Datum",
      delivery_state: "Stanje dostave",
      price: "Skupna cena",
      status: "Stanje plačila",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Koda naročila",
      items: "Predmeti",
      reserved: "Datum",
      delivery_state: "Najnovejše stanje",
      price: "Skupna cena",
      status: "Stanje plačila",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Darilne kartice",
      comments: "Komentarji",
      favorites: "Priljubljene",
      return_requests: "Vrne",
      addresses: "Naslovi",
      profile: "profil",
      orders: "Naročila",
      wallets: "Denarnice",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Moje denarnice",
    subtitle: "Če izpolnjujete pogoje in je program vračila denarja aktiven, bo del vašega naročila pripisan v vašo denarnico. Ta sredstva lahko uporabite pri naslednjem nakupu."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Stanje moje denarnice",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Naročite",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Plačilo",
      payment_waiting: "Čakanje na plačilo",
      payment_completed: "Plačano",
      table: {
        title: "Naslov",
        amount: "Znesek",
        description: "Opis",
      },
      total_payment: "Plačani znesek",
      discount: "Popust",
      discount_code: "Koda za popust",
      delivery_fee: "Stroški pošiljanja",
      delivery_fee_after: "Dostava ni plačana",

      total_price: "Skupna cena artiklov",
      total_items_discount: "Popust na artikle",
      total_price_after_offers: "Skupaj po uporabi ponudb",
      total_order_price_before_tax: "Skupna cena pred davkom",

      buyer_payment: "Znesek plačila kupca",

      payment_is_in_require_capture_message:
        "Vaše plačilo smo prejeli, vendar še ni bilo knjiženo.",
      settle_the_earlier_bill_first: "Najprej poravnajte prejšnji račun!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Dostava",
      subtitle: "Podatki o kupcu",
      confirm_received_action: "Potrdite prejem izdelka",
      confirm_received_info:
        "Kliknite gumb za potrditev, če ste naročilo prejeli. Po potrebi boste lahko oddali napotnico, če boste prejeli potrditev.",
      Recipient: "Prejemnik",
      bill: "Račun",
      name: "ime",
      tel: "Telefon",
      email: "E-naslov",
      country: "Država",
      state: "Država",
      city: "mesto",
      address: "naslov",
      building_no: "Številka stavbe",
      unit_no: "Številka enote",
      postal_code: "poštna številka",
      description: "Opis",
      order_delivered: "Naročilo je dostavljeno.",
      delivery_time: "Čas dostave",
      tracking_code: "Koda za sledenje",
      tracking_url: "URL za sledenje",

      notifications: {
        confirm_delivery: "Vaše naročilo je potrjeno.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garancija originalnosti blaga",
      return: "Vrnitev",
      table: {
        product: "ime izdelka",
        count: "štetje",
        unit_price: "Cena na enoto",
        total_price: "Skupna cena",
        discount: "Popust",
        final_price: "Končna cena",
        returned: "Vrnjeno",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Vrnitev",
    count_input: "Število vrnjenih artiklov",
    count_input_message: "Koliko artiklov vrnete?",
    reason_input: "Razlog za vrnitev",
    reason_input_message: "Izberite razlog za vračilo tega artikla.",
    note_input: "Opis",
    note_input_hint: "Opišite razlog za vračilo..",
    note_input_message:
      "Po potrebi opišite razlog za vračilo tega artikla.",
    media_message:
      "Tukaj lahko naložite sliko, zvok ali video izdelka, da dobite boljšo podporo za informacije o stanju izdelka. Izbira datoteke se samodejno pošlje in potrdi.",
    video: "Video",
    voice: "Glas",
    add_action: "Pošlji zahtevo za vračilo",
    notifications: "Vaša zahteva za vračilo je bila uspešno registrirana.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Naročite",
    info: {
      title: "Kupljeni virtualni izdelek",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Moji osebni podatki",
    name: "ime",
    email: "E-naslov",
    tel: "Telefon",
    identity: "Preverjanje pristnosti",
    success_kyc: "Preverjen KYC",
    no_kyc: "Brez KYC",
    club: "Uporabniška raven",
    subscription: "Naročnina na novice",
    leave_shop: "Zapustite to trgovino in odstranite vse ravni strank",
    leave_shop_action: "Zapusti trgovino",
    edit_personal_info: "Uredite osebne podatke",
    leave_dialog: {
      title: "Zapusti trgovino",
      message:
        "Če se odjavite od te trgovine, ne boste izbrisali vaših podatkov o naročilu in zapisov.",
      action: "odidi",
    },
    notifications: {
      leave_success: "Zapusti trgovino",
    },
    club_table: {
      discount: "Popust",
      limit: "Omejitev",
      currency: "valuta",
      free_shipping: "Brezplačna dostava",
    },

    my_profile: {
      title: "Moj profil",
      subtitle: "To so podatki mojega profila stranke za trgovino.",
      edit_action: "Uredi profil"
    },
    subscribe_status: {
      subscribed: "Naročen sem na prejemanje najnovejših novic in promocij po e-pošti.",
      unsubscribed: "Nisem naročen na prejemanje novic ali promocij po e-pošti."
    },
    my_club: {
      subtitle: "Moja raven kluba in njene ugodnosti."
    },
    kyc: {
      subtitle: "To so moji globalni identifikacijski podatki."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Nakupovalni voziček",
    total_price: "Skupni znesek",
    shipping: "Stroški pošiljanja",
    free_shipping: "Brezplačna dostava",
    shipping_not_pay: "Ni vključen",
    total_discount: "Skupni popust",
    customer_club: "Član kluba strank",
    customer_club_discount: "Članski popust",
    final_price: "Končno plačilo",
    lead_time: "Čas priprave",
    lead_time_unit: "ura",
    receive_time: "Želeni čas dostave",
    select_time: "Izberite Čas dostave",
    no_select_time: "Takoj, ko bo možno",
    transportation_type: "Vrsta pošiljanja",
    days_input: "Dnevi dostave",
    days_input_label: "Dnevi",
    days_input_no_data: "Izberite vsaj en dan",
    time_input: "Čas dostave",
    time_input_label: "Dostava na",
    time_input_label_no_data: "Izberite vsaj en časovni interval",
    support_cod: "Gotovino po povzetju",
    not_support_cod: "Ne morem plačati lokalno!",
    final_confirm_action: "Končna potrditev naročila",
    pay_and_complete_action: "Plačaj zdaj",
    pre_confirm_service: "Pošlji zahtevo",
    cross_selling_discount: "Zbirni popust",

    errors: {
      no_address: "Izberite naslov, na katerega želite, da se vaše naročilo pošlje.",
      no_phone: "Vnesite kontaktno številko za usklajevanje prevzema blaga.",
      select_billing_country: "Izberite državo za izstavitev računa",
      select_billing_state: "Izberite svojo davčno regijo",
    },
    same_billing_address: "Podatki za obračun so enaki kot podatki o prejemniku",
    same_billing_address_desc:
      "Naslov za izstavitev računa je enak naslovu za dostavo.",
    custom_billing_info: "Različne informacije za obračun",
    custom_billing_info_desc:
      "Vnesete lahko svojo DAVČNO številko in nastavite drug naslov za izstavitev računa.",
    basket_empty: "Košarica je prazna",
    extra_shipping_count: "Prejeli boste {count} paketov.",
    select_location_error:
      "Na zemljevidu poiščite kraj prevzema pošiljke in kliknite na indikator na sredini zemljevida, da ugotovite točen naslov prejemnika.",

    billing_business_desc: "Je poslovni račun z DAVČNO številko.",
    billing_personal_desc: "To je osebni račun.",

    no_billing_title: "Brez zaračunavanja",
    no_billing_desc: "Naslov za izstavitev računa pustite prazen.",

    can_pay_cod_message:"To naročilo lahko plačate z gotovino ob dostavi.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "ura",
    count_input: "štetje",

    price_changed: "Cena se je spremenila. nova cena:",
    offer: "Pridobite {count}x izdelek za {percent} % popusta",
    offer_free: "Prejmite {count}x brezplačno",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Moji naslovi",
    subtitle:"Tukaj si oglejte shranjene naslove in preprosto dodajte novega.",
    new_action: "Nov naslov",
    receiver: "Prejemnik",
    address: "naslov",
    building_no: "Registrska tablica",
    building_unit: "enoto",
    postcode: "poštna številka",
    tel: "Telefon",
    description: "Opomba",

    map: {
      title: "Moji naslovi",
      confirm: "Registracija naslova",
      address_type: "naslov",
      receptor_type: "Prejemnik",
    },
    add_dialog: {
      title: "Novo ime naslova",
      message: "Vnesite naslov za nov naslov.",
      address_name_input: "Naslov (obvezno)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Zahteve za vračilo",
    subtitle:"Tukaj si oglejte svoje zahteve za vračilo. Za izdelke s pravilnikom o vračilu lahko zahtevo za vračilo oddate na strani naročila.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Seznam želja",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Moji komentarji",
    first_post: "Prva objava",
    last_edit: "Zadnja sprememba",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Moje darilne kartice",
    add_action: "Dodaj kartico",
    add_card_dialog: {
      title: "Dodaj darilno kartico",
      message:
        "Vnesite številko kartice in varnostno kodo. Darilna kartica bo dodana na vaš račun.",
      card_number_input: "Številka kartice",
      info: "Opomba: Pri nakupu v trgovini vam bo prikazana možnost plačila z darilnimi karticami. Z izbiro te možnosti se znesek vašega polnjenja odšteje od zneska naročila.",
      add_action: "Registracija kartice",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Primerjaj izdelek",
    action_button: "Primerjaj",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Na primerjalni seznam ni bil dodan noben izdelek.",
      price: "Cena",
      type: "Vrsta",
      brand: "Blagovna znamka",
      warranty: "Garancija",
      variants_comparison: "Primerjajte različice izdelkov",
      spec: "Tehnične specifikacije",
      pros: "Prednosti",
      cons: "Slabosti",
      user_review: "Komentarji uporabnikov",
      rating: "Ocena",
      rating_count: "Število pregledov",
      info: "To primerjalno tabelo izdelkov lahko delite s prijatelji tako, da pošljete naslednjo povezavo, ali pa dostopate do nje pozneje, tako da shranite to povezavo.",
      copy_action: "Kopiraj primerjalno povezavo",
      check_list: ["da", "Ima"],
      cross_list: ["št", "ni"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Samo originali",
    only_has_discount: "Samo znižano",
    price_range: "Cenovni razpon",
    brands: "Blagovna znamka",
    main_shop_page: "Glavna stran trgovine",
    home: "Domov",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Spoštovani {user}, ta izdelek ste kupili. Kaj menite o tem izdelku?",
    notification: {
      title: "Čestitam",
      message: "Vaš komentar je bil posnet.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Nov blog",
    popular: "Priljubljeno",
    topics: "Teme",
    suggestions: "Predlogi",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "O nas",
    terms: "Pogoji uporabe",
    privacy: "Politika zasebnosti",
    contact_us: "Kontaktiraj nas",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Kontaktirajte nas obrazec",
    name: "ime",
    email: "E-naslov",
    phone: "Telefon",
    message: "Sporočilo",
    notifications: {
      success: "Vaše sporočilo je bilo poslano.",
    },
    submitted_title: "Hvala, ker ste se obrnili na nas!",
    submitted_message:
      "Cenimo vaš čas, ko ste nas kontaktirali. Vaše sporočilo smo prejeli in naša ekipa ga trenutno pregleduje. Odgovorili vam bomo v najkrajšem možnem času in se vam zahvaljujemo za vašo potrpežljivost v tem času. Vaše zanimanje in povratne informacije so za nas pomembni, zato se zavezujemo, da vam bomo zagotovili najboljšo možno podporo.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Potrdilo plačila",
      payment_success: "Plačilo zaključeno.",
      buy_title: "Kupite",
      pay_by_giftcards: "Vaše naročilo je bilo plačano z darilno kartico.",
      free_order: "Vaše naročilo je brezplačno.",
      pay_by_cod: "Vaše naročilo je bilo dodano kot plačilo po povzetju.",
      pay_by_dir:
        "Vaše naročilo je bilo uspešno dodano. Zdaj lahko plačate z neposrednim denarnim nakazilom in nato naložite potrdilo o plačilu na stran naročila.",
      pay_title: "Plačilo",
      qr_code_payment: "Ustvarjen naslov QR kode za plačilo.",
      connecting_to_online_gateway: "Povezava s spletnim plačilnim prehodom.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Ostal do začetka",
    title_between_start_end: "Ostal do konca",
    title_after_end: "Dokončano",
    title_no_start_end: "Brez časovnega obdobja!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Na naročilo lahko prejmete eno darilo.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Koda kupona",
    add_coupon: "Dodaj kupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Obrazec za avokado ni omogočen!",
    last_update: "Zadnja posodobitev:",
    step1:
      "1. Vnesite ime in podrobnosti izdelka, ki ga želite naročiti, in kliknite gumb Dodaj.",
    title_plc: "Vnesite ime izdelka.",
    description_plc: "Ali imate več opisov izdelkov?",
    link_plc: "Ali imate povezavo do izdelka?",
    image: "Slika izdelka",
    image_msg: "Po potrebi lahko pošljete sliko izdelka.",
    add_item: "Dodaj predmet",
    items_list: "Seznam zahtevanih izdelkov",
    currency_msg: "Znesek tega naročila morate plačati s to valuto.",
    step2:
      "2. Ko dodate vse želene artikle, kliknite na gumb Zahteva za pregled naročila. Na tej stopnji bomo naročilo pregledali in vas obvestili o ceni. S klikom na to povezavo si lahko ogledate povezavo cene in plačila.",
    order_action: "Registracija naročila",
    show_all: "Pokaži vse",
    show_accepted: "Pokaži potrjene predmete",
    last_orders: "Seznam vaših nedavnih naročil",
    pending_status: "v pregledu",
    check_now: "Preverite naročilo",
    add_new_order: "Naredite novo naročilo",
    pay_online: "Plačajte prek spleta",
    pricing_not_completed_message:
      "Vaše naročilo je v pregledu. Vaše naročilo bo kmalu pregledano in ocenjena cena in naročilo boste lahko plačali.",

    select_address_message:
      "Vnesite svoj naslov in nato lahko oddate naročilo.",

    delete_item_dialog: {
      title: "Odstranite artikel iz nakupovalnega vozička",
      message: "Ali želite izbrisati ta artikel iz košarice?",
      action: "Da, izbriši",
    },

    notifications: {
      order_success: "Vaše naročilo je bilo uspešno oddano.",
      delete_success: "Element je izbrisan.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Ustvarjanje naročila",
    message:
      "Ustvarite seznam izdelkov, ki jih želite kupiti, tako da skenirate kodo izdelka.",

    currency_msg: "Valuta, s katero želite plačati.",
    order_action: "Plačilo",
    add_new_order: "Novo naročilo",
    continue_order: "Nadaljujte z naročilom",

    delete_item_dialog: {
      title: "Odstranite artikel iz nakupovalnega vozička",
      message: "Ali želite izbrisati ta artikel iz košarice?",
      action: "Da, izbriši",
    },
    notifications: {
      order_success: "Vaše naročilo je bilo uspešno oddano.",
      delete_success: "Element je izbrisan.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Naložite sliko potrdila o plačilu.",
    upload_payment_receipt_done:
      "✔ Sliko potrdila ste že naložili, počakajte na našo odobritev. Če morate spremeniti, lahko prejšnjo sliko zamenjate z novo.",
    public_form_title: "Podatki o računu za prenos denarja",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Seznam opravil",
      message: "Določite naslove dela, ki ga želite opraviti, in kupcu sporočite, kako daleč je napredovalo.",
    },
    booking: {
      title: "Rezervacija / rezervacija",
      message: "To naročilo bo obdelano ob določenem času, stranka je izbrala želeno obdobje, če želite v izbranem terminu spremeniti, stranko o tem obvestite.",

      selected_checkin: "Izbrana prijava s strani stranke",
      selected_checkout: "Izbrana odjava s strani stranke",
      change_days_question:
        "Ali morate spremeniti med dnevi, ki jih je stranka izbrala?",
      show_calendar: "Prikaži koledar naročil",
    },
    pricing: {
      title: "Cenitev",
      message: "Koliko zaračunate za to storitev?",
    },
    subscription: {
      title: "Naročnina",
      message:
        "Obdobje naročnine lahko izberete z vsakodnevnim nakupom te storitve. Obvestite kupca, če želite spremeniti privzete vrednosti, ki ste jih že vnesli.",
      duration: "Obdobje naročnine",
    },
    charge: {
      title: "Napolniti",
      message:
        "Določili ste strošek za ta artikel. Znesek bremenitve za izdelek, ki ga je kupil kupec, lahko spremenite.",
      charge: "Napolniti",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Čakanje na preverjanje dostopa ...",
    no_access_message:
      "Na žalost nimate dostopa do naše trgovine.<br/> Kontaktirajte nas.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Delite naročilo",
    title: "Delite to naročilo z drugimi.",
    message:
      "To je varna povezava, delite jo samo s tistimi, ki jih poznate. Vsak s to povezavo lahko podvoji vaše naročilo in vidi izbrani naslov. Vsebovala bo informacije o vaši trenutni košarici.",
    valid_period: "Ta povezava poteče po 48 urah.",
    import_order_action: "Uvozno naročilo",
    retrieve_dialog_title: "Pridobite zunanje naročilo",
    address_included: "Delite elemente košarice + naslov",
    address_excluded: "Delite samo izdelke košarice",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Cene",
    inventory: "Inventar",
    discount: "Popust",
  },

  rating: {
    product_rating_message:
      "Ta izdelek je prejel oceno {rate} od 5 zvezdic in ga je ocenilo {rate_count} ljudi.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Raziščite!",
      same_tags_subtitle: "Poiščite več izjemnih povezanih predmetov.",
      same_category_subtitle: "Poiščite več izjemnih predmetov v tej kategoriji.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Naročite {product} z",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Ogled trgovine {vendor}",
  },

  login: {
    welcome: "Dobrodošli",
  },


};
