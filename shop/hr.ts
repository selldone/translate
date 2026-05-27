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
  surveys: ["Vrlo slaba", "Jadna", "Normalan", "Dobro", "Izvrsno"],

  /** @see SFooterSection **/
  footer: {
    map: "Karta",
    email: "E-mail",
    phone: "Telefon",
    address: "Adresa",

    copyright:
      "Korištenje sadržaja samo u nekomercijalne svrhe i s referencom na izvor (veza s {shop_title}). Sva prava pridržana za {shop_title}.",
    powered_by: "Pokreće",
    privacy: "Politika privatnosti",
    term_of_use: "Uvjeti korištenja",
    shop_app_setting: "Postavka trgovine i GDPR",

    dialog_setting: {
      title: "Postavka aplikacija za kupovinu",
      app_list: "Popis prijava",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Prodano",
    review_unit: "Pregled",
    not_original: "Nije originalno",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "filtar",
    native: {
      title: "Prijava aplikacije",
      message:
        "Ova aplikacija zahtijeva pristup podacima o vašem računu trgovine. To uključuje pristup imenu, kontakt broju, adresi, e-pošti, povijesti narudžbi, naručivanju i objavljivanju komentara na ovoj trgovini.",
      message_bold:
        "Svakako upotrijebite službenu aplikaciju trgovine za ulazak u ovu trgovinu.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Poredaj po",
    title_small: "Poredaj po..",
    nothing: "Ništa",
    most_views: "Većina pregleda",
    most_likes: "Najpopularniji",
    most_recent: "Najnoviji",
    most_sell: "Najprodavaniji",
    cheapest: "Najjeftinije",
    most_expensive: "Najskuplja",
    only_available: "Dostupno",
    view_mode: {
      normal: "Normalan",
      grid: "Mreža",
      list: "Popis",
      insta: "Insta stil",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Lažna",
    action: "Aukcija",
    compare_limit: "Ograničenje od 10 stavki",
    compare_add: "Dodaj u usporedbu",
    compare_be_in_list: "Na popisu za usporedbu",

    type: "Tip",
    brand: "Marka",
    category: "Kategorija",
    discount: "Popust",
    track_price: "Pratite cijenu",
    waiting_for_auction: "Čekate aukciju?",
    inform_auction: "Reci mi nešto o aukciji",
    return_in_days: "{days} dana Povrat jamstva",
    support24h7: "Podrška 24 sata 7 dana",
    support_normal: "Podrška za radno vrijeme",
    original_guarantee: "Originalna garancija",
    cod_payment: "Podrška pouzećem",

    pros: "Prednosti",
    cons: "Protiv",

    external_link: "Čitaj više",
    notifications: {
      congratulation: "Čestitamo",
      waiting_list_add_success:
        "Obavijestit ćemo vas kada ovaj proizvod bude na dražbi.",
      waiting_list_delete_success: "Izašli ste s liste čekanja na dražbi.",
    },

    offer_message: "Kupite {min_quantity} Dobijte {percent}% popusta za ove artikle",
    up_to: "Do {per_order}x po narudžbi",
    get_free: "DOBITI BESPLATNO",
    get_off: "OSTVARITE {percent}% POPUSTA",
    select_a_vendor_message: "Odaberite dobavljača.",
    product_description_header: "Predstavljamo {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Čeka se dostupnost",
    inform_me_when_available: "Čekate ovo?",
    pay_buy: "Plati i kupi",
    quantity: "Računati",
    quantity_in_basket: "Artikli u košarici",
    count_unit: "x",
    remove: "Ukloniti",
    add_to_basket: "Dodaj u košaricu",
    buy: "Kupiti",
    subscribe_now: "Pretplatite se sada",
    unsubscribe: "Odjavi pretplatu",
    select_a_subscription_plan: "Prvo odaberite plan!",
    manage_subscriptions: "Upravljanje pretplatama",
    notifications: {
      inform_add_success: "Obavijestit ćemo vas kada bude dostupno.",
      inform_remove_success: "Uklonjeni ste s liste čekanja.",
    },
    zip_pin_input: "Poštanski broj / PIN",
    zip_pin_not_available_msg: "Nije dostupno na ovoj lokaciji!",
    zip_pin_placeholder: "Odaberite poštanski/PIN kod...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Pregled",
    spec: "Specifikacije",
    comments: "Komentari",
    price: "Cijena",
    rate: "Stopa",
    comment: "Komentar",
    warranty: "Jamstvo",
    return_policy: "Politika povrata",
    guide: "Vodič",
    shipping: "dostava",
    related_products_title: "Povezani proizvodi",
    related_categories_title: "Otkrijte u zbirkama",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Povijest narudžbi",
      profile: "Moj profil",
      favorites: "Omiljene stavke",
      gift_cards: "Darovne kartice",
      return_requests: "Vraćene narudžbe",
      basket: "Košarica za kupovinu",
    },
    user_menu: {
      my_shops: "Moje trgovine",
      go_to_admin: "Upravljajte {shop_name}",
      exit_from: "Odjava {shop_name}",
      chips: "{chips} Čips",
    },
    login_to_shop: "Prijavite se u trgovinu",
    login_to_shop_short: "prijaviti se",
    item_in_basket_message: "{count} Ovaj artikl je u vašoj košarici.",
    search_title: "Traži u trgovini {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Košarica",
    basket_is_empty: "Vaša košarica je prazna.",
    total_price: "Ukupno",
    view_basket: "Vaša košarica",
    more: "Više...",
    accept_and_pay: "Provjeri",
    items: "Stavke",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Odbijeno",
    table: {
      code: "Šifra narudžbe",
      reserved: "Datum",
      delivery_state: "Status isporuke",
      price: "Ukupna cijena",
      status: "Status plaćanja",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Šifra narudžbe",
      items: "Stavke",
      reserved: "Datum",
      delivery_state: "Najnoviji status",
      price: "Ukupna cijena",
      status: "Status plaćanja",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Poklon kartica",
      comments: "Komentari",
      favorites: "Favoriti",
      return_requests: "Vraća",
      addresses: "Adrese",
      profile: "profil",
      orders: "Narudžbe",
      wallets: "Novčanici",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Moji novčanici",
    subtitle: "Ako ispunjavate uvjete i aktivan je program povrata novca, dio vaše narudžbe bit će dodijeljen vašem novčaniku. Ta sredstva možete koristiti pri sljedećoj kupnji."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Stanje mog novčanika',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Narudžba",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Plaćanje",
      payment_waiting: "Čeka se plaćanje",
      payment_completed: "Plaćeno",
      table: {
        title: "Titula",
        amount: "Iznos",
        description: "Opis",
      },
      total_payment: "Uplaćeni iznos",
      discount: "Popust",
      discount_code: "Kod za popust",
      delivery_fee: "Trošak dostave",
      delivery_fee_after: "Nije plaćena dostava",

      total_price: "Ukupna cijena predmeta",
      total_items_discount: "Popust na artikle",
      total_price_after_offers: "Ukupno nakon primjene ponuda",
      total_order_price_before_tax: "Ukupna cijena prije poreza",

      buyer_payment: "Iznos plaćanja kupca",

      payment_is_in_require_capture_message:
        "Primili smo vašu uplatu, ali još nije naplaćena.",
      settle_the_earlier_bill_first: "Najprije podmirite prethodni račun!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Dostava",
      subtitle: "Podaci o kupcu",
      confirm_received_action: "Potvrdite primitak proizvoda",
      confirm_received_info:
        "Kliknite na gumb za potvrdu ako ste primili narudžbu. Ako je potrebno, moći ćete poslati uputnicu ako dobijete potvrdu.",
      Recipient: "Primatelj",
      bill: "Dostavnica",
      name: "Ime",
      tel: "Telefon",
      email: "E-mail",
      country: "Zemlja",
      state: "država",
      city: "Grad",
      address: "Adresa",
      building_no: "Broj zgrade",
      unit_no: "Broj jedinice",
      postal_code: "Poštanski broj",
      description: "Opis",
      order_delivered: "Narudžba je isporučena.",
      delivery_time: "Vrijeme isporuke",
      tracking_code: "Kod za praćenje",
      tracking_url: "URL za praćenje",

      notifications: {
        confirm_delivery: "Vaša narudžba je potvrđena.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Jamstvo originalnosti robe",
      return: "Povratak",
      table: {
        product: "ime proizvoda",
        count: "Računati",
        unit_price: "Jedinična cijena",
        total_price: "Ukupna cijena",
        discount: "Popust",
        final_price: "Konačna cijena",
        returned: "Vraćeno",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Povratak",
    count_input: "Broj vraćenih artikala",
    count_input_message: "Koliko artikala vraćate?",
    reason_input: "Razlog povratka",
    reason_input_message: "Odaberite razlog za vraćanje ovog artikla.",
    note_input: "Opis",
    note_input_hint: "Opišite razlog povratka..",
    note_input_message:
      "Opišite razlog vraćanja ovog artikla ako je potrebno.",
    media_message:
      "Ovdje možete prenijeti sliku, audio ili video proizvoda kako biste dobili bolju podršku za informacije o statusu proizvoda. Odabir datoteke automatski će se poslati i potvrditi.",
    video: "Video",
    voice: "Glas",
    add_action: "Pošaljite zahtjev za povrat",
    notifications: "Vaš zahtjev za povrat je uspješno registriran.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Narudžba",
    info: {
      title: "Kupljeni virtualni proizvod",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Moji osobni podaci",
    name: "Ime",
    email: "E-mail",
    tel: "Telefon",
    identity: "Ovjera",
    success_kyc: "Provjereni KYC",
    no_kyc: "Bez KYC-a",
    club: "Korisnička razina",
    subscription: "Pretplata na vijesti",
    leave_shop: "Napustite ovu trgovinu i uklonite sve razine kupaca",
    leave_shop_action: "Napusti trgovinu",
    edit_personal_info: "Uredite osobne podatke",
    leave_dialog: {
      title: "Napusti trgovinu",
      message:
        "Otkazivanjem pretplate na ovu trgovinu neće se izbrisati podaci o vašoj narudžbi i zapisi.",
      action: "Napustiti",
    },
    notifications: {
      leave_success: "Napusti trgovinu",
    },
    club_table: {
      discount: "Popust",
      limit: "Ograničiti",
      currency: "Valuta",
      free_shipping: "Besplatna dostava",
    },

    my_profile: {
      title: "Moj profil",
      subtitle: "Ovo su podaci mog korisničkog profila za trgovinu.",
      edit_action: "Uredi profil"
    },
    subscribe_status: {
      subscribed: "Pretplaćen/a sam na primanje najnovijih vijesti i promocija e-poštom.",
      unsubscribed: "Nisam pretplaćen/a na primanje vijesti ni promocija e-poštom."
    },
    my_club: {
      subtitle: "Moja klupska razina i njezine pogodnosti."
    },
    kyc: {
      subtitle: "Ovo su moji globalni identifikacijski podaci."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Košarica za kupovinu",
    total_price: "Ukupni iznos",
    shipping: "Trošak dostave",
    free_shipping: "Besplatna dostava",
    shipping_not_pay: "Nije uključeno",
    total_discount: "Totalni popust",
    customer_club: "Član Kluba klijenata",
    customer_club_discount: "Popust za članove",
    final_price: "Završna isplata",
    lead_time: "Vrijeme pripreme",
    lead_time_unit: "Sat",
    receive_time: "Željeno vrijeme isporuke",
    select_time: "Odaberite Vrijeme isporuke",
    no_select_time: "Čim prije",
    transportation_type: "Vrsta dostave",
    days_input: "Dani isporuke",
    days_input_label: "dana",
    days_input_no_data: "Odaberite barem jedan dan",
    time_input: "Vrijeme isporuke",
    time_input_label: "Dostava na",
    time_input_label_no_data: "Odaberite barem jedan vremenski interval",
    support_cod: "Pouzećem",
    not_support_cod: "Nije moguće platiti lokalno!",
    final_confirm_action: "Konačna potvrda narudžbe",
    pay_and_complete_action: "Plati sada",
    pre_confirm_service: "Pošaljite zahtjev",
    cross_selling_discount: "Popust za kolekciju",

    errors: {
      no_address: "Odaberite adresu na koju želite da se vaša narudžba pošalje.",
      no_phone: "Unesite kontakt broj za koordinaciju prijema robe.",
      select_billing_country: "Odaberite svoju zemlju za naplatu",
      select_billing_state: "Odaberite svoju poreznu regiju",
    },
    same_billing_address: "Podaci o naplati isti kao i podaci o primatelju",
    same_billing_address_desc:
      "Adresa za naplatu ista je kao adresa za dostavu.",
    custom_billing_info: "Različite informacije o naplati",
    custom_billing_info_desc:
      "Možete unijeti svoj POREZNI broj i postaviti drugu adresu za naplatu.",
    basket_empty: "Košarica je prazna",
    extra_shipping_count: "Primit ćete {count} paketa.",
    select_location_error:
      "Na karti pronađite mjesto primitka pošiljke i kliknite na indikator u sredini karte kako biste odredili točnu adresu primatelja.",

    billing_business_desc: "To je poslovni račun s poreznim brojem.",
    billing_personal_desc: "To je osobni račun.",

    no_billing_title: "Nema naplate",
    no_billing_desc: "Ostavite adresu za naplatu praznu.",

    can_pay_cod_message:"Ovu narudžbu možete platiti gotovinom prilikom dostave.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Sat",
    count_input: "Računati",

    price_changed: "Cijena se promijenila. nova cijena:",
    offer: "Dobijte {count}x artikl za {percent}% popusta",
    offer_free: "Dobijte {count}x besplatno",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Moje adrese",
    subtitle:"Ovdje pregledajte svoje spremljene adrese i jednostavno dodajte novu.",
    new_action: "Nova adresa",
    receiver: "Primatelj",
    address: "Adresa",
    building_no: "registarske tablice",
    building_unit: "jedinica",
    postcode: "Poštanski broj",
    tel: "Telefon",
    description: "Bilješka",

    map: {
      title: "Moje adrese",
      confirm: "Adresa registracije",
      address_type: "Adresa",
      receptor_type: "Primatelj",
    },
    add_dialog: {
      title: "Novo ime adrese",
      message: "Unesite naslov za novu adresu.",
      address_name_input: "Adresa (obavezno)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Zahtjevi za povrat",
    subtitle:"Ovdje pregledajte svoje zahtjeve za povrat. Za artikle s pravilima povrata možete poslati zahtjev na stranici narudžbe.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Popis želja",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Moji komentari",
    first_post: "Prvi post",
    last_edit: "Posljednje uređivanje",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Moje poklon kartice",
    add_action: "Dodaj karticu",
    add_card_dialog: {
      title: "Dodajte poklon karticu",
      message:
        "Unesite broj kartice i sigurnosni kod. Darovna kartica bit će dodana na vaš račun.",
      card_number_input: "Broj kartice",
      info: "Napomena: Prilikom kupovine u trgovini bit će vam prikazana opcija plaćanja poklon karticama. Odabirom ove opcije od iznosa narudžbe oduzet će se iznos vašeg salda dopune.",
      add_action: "Registracija kartice",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Usporedi proizvod",
    action_button: "Usporedi",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Nijedan proizvod nije dodan na popis za usporedbu.",
      price: "Cijena",
      type: "Tip",
      brand: "Marka",
      warranty: "Jamstvo",
      variants_comparison: "Usporedite varijante proizvoda",
      spec: "Tehničke specifikacije",
      pros: "Prednosti",
      cons: "Protiv",
      user_review: "Komentari korisnika",
      rating: "Ocjena",
      rating_count: "Broj recenzija",
      info: "Ovu tablicu usporedbe proizvoda možete podijeliti sa svojim prijateljima slanjem sljedeće veze ili joj pristupiti kasnije spremanjem ove veze.",
      copy_action: "Kopiraj vezu za usporedbu",
      check_list: ["Da", "Ima"],
      cross_list: ["Ne", "nije"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Samo originali",
    only_has_discount: "Samo sniženo",
    price_range: "Raspon cijena",
    brands: "Marka",
    main_shop_page: "Glavna stranica trgovine",
    home: "Dom",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Poštovani {user}, kupili ste ovaj proizvod. Što mislite o ovom proizvodu?",
    notification: {
      title: "Čestitam",
      message: "Vaš komentar je zabilježen.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Novi blog",
    popular: "Popularan",
    topics: "Teme",
    suggestions: "Prijedlozi",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "O nama",
    terms: "Uvjeti korištenja",
    privacy: "Politika privatnosti",
    contact_us: "Kontaktirajte nas",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Kontaktirajte nas obrazac",
    name: "Ime",
    email: "E-mail",
    phone: "Telefon",
    message: "Poruka",
    notifications: {
      success: "Vaša poruka je poslana.",
    },
    submitted_title: "Hvala što ste nam se obratili!",
    submitted_message:
      "Cijenimo vaše vrijeme koje ste potrošili da nas kontaktirate. Vaša poruka je primljena i naš je tim trenutno pregledava. Odgovorit ćemo što je prije moguće i zahvaljujemo vam na strpljenju tijekom ovog vremena. Vaš interes i povratne informacije su nam važni, a mi smo posvećeni pružanju najbolje moguće podrške.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Potvrda uplate",
      payment_success: "Plaćanje je završeno.",
      buy_title: "Kupiti",
      pay_by_giftcards: "Vaša narudžba je plaćena poklon karticom.",
      free_order: "Vaša narudžba je besplatna.",
      pay_by_cod: "Vaša narudžba je dodana kao pouzećem.",
      pay_by_dir:
        "Vaša narudžba je uspješno dodana. Sada možete platiti izravnim prijenosom novca, a zatim prenijeti potvrdu o uplati na stranicu za narudžbu.",
      pay_title: "Plaćanje",
      qr_code_payment: "Kreirana adresa QR koda za plaćanje.",
      connecting_to_online_gateway: "Povezivanje s pristupnikom za online plaćanje.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Ostalo do početka",
    title_between_start_end: "Ostalo do kraja",
    title_after_end: "Gotovo",
    title_no_start_end: "Bez vremenskog perioda!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Po narudžbi možete dobiti jedan poklon.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kod kupona",
    add_coupon: "Dodajte kupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Obrazac za avokado nije omogućen!",
    last_update: "Zadnje ažuriranje:",
    step1:
      "1. Unesite naziv i detalje proizvoda koji želite naručiti i kliknite gumb Dodaj.",
    title_plc: "Unesite naziv proizvoda.",
    description_plc: "Imate li još opisa proizvoda?",
    link_plc: "Imate li link na proizvod?",
    image: "Slika proizvoda",
    image_msg: "Po potrebi možete poslati sliku proizvoda.",
    add_item: "Dodaj Predmet",
    items_list: "Popis traženih proizvoda",
    currency_msg: "Iznos ove narudžbe morate platiti ovom valutom.",
    step2:
      "2. Nakon što dodate sve željene artikle, kliknite na gumb Zahtjev za pregled narudžbe. U ovoj fazi pregledat ćemo narudžbu i obavijestiti vas o cijeni. Klikom na ovaj link moći ćete vidjeti cijenu i link za plaćanje.",
    order_action: "Registracija narudžbe",
    show_all: "Pokaži sve",
    show_accepted: "Prikaži potvrđene artikle",
    last_orders: "Popis vaših nedavnih narudžbi",
    pending_status: "pod pregledom",
    check_now: "Provjerite narudžbu",
    add_new_order: "Napravite novu narudžbu",
    pay_online: "Plaćajte online",
    pricing_not_completed_message:
      "Vaša se narudžba pregledava. Vaša narudžba će uskoro biti pregledana i ocijenjena cijena te ćete moći platiti narudžbu.",

    select_address_message:
      "Unesite svoju adresu, a zatim možete predati narudžbu.",

    delete_item_dialog: {
      title: "Uklonite artikl iz košarice",
      message: "Želite li izbrisati ovaj artikl iz košarice?",
      action: "Da, izbriši",
    },

    notifications: {
      order_success: "Vaša narudžba je uspješno poslana.",
      delete_success: "Stavka je izbrisana.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Kreiranje narudžbe",
    message:
      "Napravite popis proizvoda koje želite kupiti skeniranjem koda proizvoda.",

    currency_msg: "Valuta kojom želite platiti.",
    order_action: "Plaćanje",
    add_new_order: "Novi poredak",
    continue_order: "Nastavite narudžbu",

    delete_item_dialog: {
      title: "Uklonite artikl iz košarice",
      message: "Želite li izbrisati ovaj artikl iz košarice?",
      action: "Da, izbriši",
    },
    notifications: {
      order_success: "Vaša narudžba je uspješno poslana.",
      delete_success: "Stavka je izbrisana.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Prenesite sliku potvrde o uplati.",
    upload_payment_receipt_done:
      "✔ Već ste prenijeli sliku računa, pričekajte naše odobrenje. Ako trebate promijeniti, prethodnu sliku možete zamijeniti novom.",
    public_form_title: "Podaci o računu za prijenos novca",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Popis obaveza",
      message: "Navedite naslove posla koji želite obaviti i obavijestite kupca koliko je daleko napredovao.",
    },
    booking: {
      title: "Rezervacija / rezervacija",
      message: "Ova narudžba će biti obrađena u određeno vrijeme, kupac je odabrao željeni period, ako želite napraviti bilo kakve promjene u odabranom razdoblju, obavijestite kupca.",

      selected_checkin: "Odabrana prijava od strane korisnika",
      selected_checkout: "Odabrana odjava od strane kupca",
      change_days_question:
        "Trebate li promijeniti tijekom dana koje je kupac izabrao?",
      show_calendar: "Prikaži kalendar narudžbi",
    },
    pricing: {
      title: "Određivanje cijene",
      message: "Koliko naplaćujete ovu uslugu?",
    },
    subscription: {
      title: "Pretplata",
      message:
        "Možete odabrati razdoblje pretplate kupnjom ove usluge na dnevnoj bazi. Obavijestite kupca ako želite promijeniti zadane vrijednosti koje ste već unijeli.",
      duration: "Razdoblje pretplate",
    },
    charge: {
      title: "Naplatiti",
      message:
        "Naveli ste naknadu za ovu stavku. Možete promijeniti iznos naknade za artikl koji je kupac kupio.",
      charge: "Naplatiti",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Čeka se provjera pristupa...",
    no_access_message:
      "Nažalost, nemate pristup našoj trgovini.<br/> Molimo kontaktirajte nas.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Redoslijed dijeljenja",
    title: "Podijelite ovu narudžbu s drugima.",
    message:
      "To je sigurna veza, dijelite je samo s onima koje poznajete. Svatko s ovom vezom može duplicirati vašu narudžbu i vidjeti odabranu adresu. Sadržat će informacije o vašoj trenutnoj košarici.",
    valid_period: "Ova će veza isteći nakon 48 sati.",
    import_order_action: "Narudžba uvoza",
    retrieve_dialog_title: "Dohvati vanjski nalog",
    address_included: "Podijelite artikle u košarici + adresu",
    address_excluded: "Podijelite samo artikle iz košarice",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Cijene",
    inventory: "Inventar",
    discount: "Popust",
  },

  rating: {
    product_rating_message:
      "Ovaj je proizvod dobio ocjenu {rate} od 5 zvjezdica i ocijenilo ga je {rate_count} ljudi.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Istražiti!",
      same_tags_subtitle: "Pronađite još izvanrednih povezanih stavki.",
      same_category_subtitle: "Pronađite još izvanrednih predmeta u ovoj kategoriji.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Naručite {product} s",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Pogledajte trgovinu {vendor}",
  },

  login: {
    welcome: "Dobro došli",
  },


};
