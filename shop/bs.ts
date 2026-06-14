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
  surveys: ["Veoma jadno", "Jadno", "Normalno", "Dobro", "Odlično"],

  /** @see SFooterSection **/
  footer: {
    map: "Mapa",
    email: "E-pošta",
    phone: "Telefon",
    address: "Adresa",

    copyright:
      "Korištenje sadržaja samo u nekomercijalne svrhe i uz upućivanje na izvor (link sa {shop_title}). Sva prava zadržana za {shop_title}.",
    powered_by: "Pokreće",
    privacy: "Politika privatnosti",
    term_of_use: "Pravila korištenja",
    shop_app_setting: "Podešavanje trgovine i GDPR",

    dialog_setting: {
      title: "Podešavanje aplikacija za kupovinu",
      app_list: "Lista aplikacija",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Rasprodato",
    review_unit: "Pregled",
    not_original: "Nije originalno",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtriraj",
    native: {
      title: "Prijava aplikacije",
      message:
        "Ova aplikacija zahtijeva pristup informacijama o vašem računu trgovine. Ovo uključuje pristup imenu, kontakt broju, adresi, emailu, istoriji narudžbi, naručivanju i objavljivanju komentara na ovoj prodavnici.",
      message_bold:
        "Obavezno koristite zvaničnu aplikaciju trgovine da uđete u ovu trgovinu.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sortiraj po",
    title_small: "Poredaj po..",
    nothing: "Ništa",
    most_views: "Većina pregleda",
    most_likes: "Najpopularniji",
    most_recent: "Najnovije",
    most_sell: "Najprodavaniji",
    cheapest: "Najjeftinije",
    most_expensive: "Najskuplja",
    only_available: "Dostupan",
    view_mode: {
      normal: "Normalno",
      grid: "Mreža",
      list: "Lista",
      insta: "Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Lažna",
    action: "Aukcija",
    compare_limit: "Ograničenje od 10 stavki",
    compare_add: "Dodaj za poređenje",
    compare_be_in_list: "Na listi za poređenje",

    type: "Tip",
    brand: "Brend",
    category: "Kategorija",
    discount: "Popust",
    track_price: "Pratite cijenu",
    waiting_for_auction: "Čekate aukciju?",
    inform_auction: "Reci mi nešto o aukciji",
    return_in_days: "{days} dana Povrat garancije",
    support24h7: "Podrška 24 sata 7 dana",
    support_normal: "Podrška za radno vrijeme",
    original_guarantee: "Originalna garancija",
    cod_payment: "Podrška pouzećem",

    pros: "Prednosti",
    cons: "Nedostaci",

    external_link: "Čitaj više",
    notifications: {
      congratulation: "Čestitam",
      waiting_list_add_success:
        "Obavijestit ćemo vas kada ovaj proizvod bude na aukciji.",
      waiting_list_delete_success: "Izašli ste sa liste čekanja za aukciju.",
    },

    offer_message: "Kupite {min_quantity} Dobijte {percent}% popusta za ove artikle",
    up_to: "Do {per_order}x po narudžbi",
    get_free: "DOBITI BESPLATNE",
    get_off: "OSTVARITE {percent}% POPUSTA",
    select_a_vendor_message: "Molimo odaberite dobavljača.",
    product_description_header: "Predstavljamo {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Čeka se dostupnost",
    inform_me_when_available: "Čekaš ovo?",
    pay_buy: "Plati i kupi",
    quantity: "Količina",
    quantity_in_basket: "Artikli u korpi",
    count_unit: "x",
    remove: "Ukloni",
    add_to_basket: "Dodaj u korpu",
    buy: "Kupi",
    subscribe_now: "Pretplatite se sada",
    unsubscribe: "Otkaži pretplatu",
    select_a_subscription_plan: "Prvo odaberite plan!",
    manage_subscriptions: "Upravljajte pretplatama",
    notifications: {
      inform_add_success: "Obavijestit ćemo vas kada bude dostupno.",
      inform_remove_success: "Uklonjeni ste sa liste čekanja.",
    },
    zip_pin_input: "Poštanski kod / PIN",
    zip_pin_not_available_msg: "Nije dostupno na ovoj lokaciji!",
    zip_pin_placeholder: "Odaberite poštanski/PIN kod...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Opis",
    spec: "Specifikacije",
    comments: "Recenzije",
    price: "Cijena",
    rate: "Ocjena",
    comment: "Komentar",
    warranty: "Garancija",
    return_policy: "Politika povrata",
    guide: "Vodič",
    shipping: "Dostava",
    related_products_title: "Možda će vam se svidjeti",
    related_categories_title: "Otkrijte u kolekcijama",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Istorija narudžbi",
      profile: "Moj profil",
      favorites: "Omiljeni artikli",
      gift_cards: "Poklon kartice",
      return_requests: "Vraćene narudžbe",
      basket: "Kolica za kupovinu",
    },
    user_menu: {
      my_shops: "Moje prodavnice",
      go_to_admin: "Upravljajte {shop_name}",
      exit_from: "Odjava {shop_name}",
      chips: "{chips} Čips",
    },
    login_to_shop: "Prijavite se u prodavnicu",
    login_to_shop_short: "Ulogovati se",
    item_in_basket_message: "{count} Ovaj artikal je u vašoj korpi.",
    search_title: "Traži u trgovini {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Korpa",
    basket_is_empty: "Vaša korpa je prazna.",
    total_price: "Ukupno",
    view_basket: "Vaša korpa",
    more: "Više...",
    accept_and_pay: "Provjeri",
    items: "Stavka(i)",
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
      items: "Predmeti",
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
      return_requests: "Povratak",
      addresses: "Adrese",
      profile: "profil",
      orders: "Naredbe",
      wallets: "Novčanici",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Moji novčanici",
    subtitle: "Ako ispunjavate uslove i program povrata novca je aktivan, dio vaše narudžbe bit će dodan u vaš novčanik. Ova sredstva možete koristiti pri sljedećoj kupovini."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Stanje mog novčanika",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Red",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Plaćanje",
      payment_waiting: "Čeka se plaćanje",
      payment_completed: "Plaćeno",
      table: {
        title: "Naslov",
        amount: "Iznos",
        description: "Opis",
      },
      total_payment: "Iznos plaćen",
      discount: "Popust",
      discount_code: "Kod za popust",
      delivery_fee: "Troškovi poštarine",
      delivery_fee_after: "Dostava nije plaćena",

      total_price: "Ukupna cijena predmeta",
      total_items_discount: "Popust na artikle",
      total_price_after_offers: "Ukupno nakon primjene ponuda",
      total_order_price_before_tax: "Ukupna cijena prije oporezivanja",

      buyer_payment: "Iznos plaćanja kupca",

      payment_is_in_require_capture_message:
        "Primili smo vašu uplatu, ali još nije evidentirana.",
      settle_the_earlier_bill_first: "Prvo izmirite prethodni račun!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Dostava",
      subtitle: "Informacije o kupcu",
      confirm_received_action: "Potvrdite prijem proizvoda",
      confirm_received_info:
        "Kliknite na dugme za potvrdu ako ste primili narudžbu. Ako je potrebno, moći ćete poslati uputnicu ako dobijete potvrdu.",
      Recipient: "Primalac",
      bill: "Račun",
      name: "Ime",
      tel: "Telefon",
      email: "E-pošta",
      country: "Država",
      state: "Država",
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
      original_warranty: "Garancija originalnosti robe",
      return: "Povratak",
      table: {
        product: "ime proizvoda",
        count: "Količina",
        unit_price: "Cijena po jedinici",
        total_price: "Ukupna cijena",
        discount: "Popust",
        final_price: "Konačna cijena",
        returned: "Vratio se",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Povratak",
    count_input: "Broj vraćenih artikala",
    count_input_message: "Koliko artikala vraćate?",
    reason_input: "Razlog za povratak",
    reason_input_message: "Odaberite razlog za vraćanje ovog artikla.",
    note_input: "Opis",
    note_input_hint: "Opišite razlog povratka..",
    note_input_message:
      "Opišite razlog za vraćanje ovog artikla ako je potrebno.",
    media_message:
      "Ovdje možete prenijeti sliku, audio ili video proizvoda kako biste dobili bolju podršku za informacije o statusu proizvoda. Odabirom datoteke će se automatski poslati i potvrditi.",
    video: "Video",
    voice: "Glas",
    add_action: "Pošaljite zahtjev za povrat",
    notifications: "Vaš zahtjev za povrat je uspješno registriran.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Red",
    info: {
      title: "Kupljeni virtuelni proizvod",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Moji lični podaci",
    name: "Ime",
    email: "E-pošta",
    tel: "Telefon",
    identity: "Autentifikacija",
    success_kyc: "Verificiran KYC",
    no_kyc: "Nema KYC-a",
    club: "Korisnički nivo",
    subscription: "Pretplata na vijesti",
    leave_shop: "Napustite ovu trgovinu i uklonite sve nivoe kupaca",
    leave_shop_action: "Napusti radnju",
    edit_personal_info: "Uredite lične podatke",
    leave_dialog: {
      title: "Napusti radnju",
      message:
        "Otkazivanjem pretplate na ovu trgovinu neće se izbrisati podaci o vašoj narudžbi i zapisi.",
      action: "Odlazi",
    },
    notifications: {
      leave_success: "Napusti radnju",
    },
    club_table: {
      discount: "Popust",
      limit: "Ograničenje",
      currency: "Valuta",
      free_shipping: "Besplatni transport",
    },

    my_profile: {
      title: "Moj profil",
      subtitle: "Ovo su informacije mog korisničkog profila za trgovinu.",
      edit_action: "Uredi profil"
    },
    subscribe_status: {
      subscribed: "Pretplaćen/a sam na primanje najnovijih vijesti i promocija putem e-pošte.",
      unsubscribed: "Nisam pretplaćen/a na primanje vijesti ili promocija putem e-pošte."
    },
    my_club: {
      subtitle: "Moj nivo kluba i njegove pogodnosti."
    },
    kyc: {
      subtitle: "Ovo su moje globalne identifikacijske informacije."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Kolica za kupovinu",
    total_price: "Ukupan iznos",
    shipping: "Troškovi poštarine",
    free_shipping: "Besplatni transport",
    shipping_not_pay: "Nisu uključeni",
    total_discount: "Totalni popust",
    customer_club: "Član Kluba klijenata",
    customer_club_discount: "Popust za članove",
    final_price: "Konačna uplata",
    lead_time: "Vrijeme pripreme",
    lead_time_unit: "Sat",
    receive_time: "Željeno vrijeme isporuke",
    select_time: "Odaberite Vrijeme isporuke",
    no_select_time: "Što je brže moguće",
    transportation_type: "Vrsta isporuke",
    days_input: "Dani isporuke",
    days_input_label: "Dani",
    days_input_no_data: "Odaberite barem jedan dan",
    time_input: "Vrijeme isporuke",
    time_input_label: "Dostava na",
    time_input_label_no_data: "Odaberite barem jedan vremenski interval",
    support_cod: "Pouzećem",
    not_support_cod: "Nije moguće platiti lokalno!",
    final_confirm_action: "Konačna potvrda narudžbe",
    pay_and_complete_action: "Plati sad",
    pre_confirm_service: "Pošaljite zahtjev",
    cross_selling_discount: "Popust za kolekciju",

    errors: {
      no_address: "Odaberite adresu na koju želite da se vaša narudžbina pošalje.",
      no_phone: "Unesite kontakt broj za koordinaciju prijema robe.",
      select_billing_country: "Odaberite svoju zemlju za naplatu",
      select_billing_state: "Odaberite svoju poresku regiju",
    },
    same_billing_address: "Podaci o naplati su isti kao i podaci o primaocu",
    same_billing_address_desc:
      "Adresa za naplatu je ista kao i adresa za dostavu.",
    custom_billing_info: "Različite informacije o naplati",
    custom_billing_info_desc:
      "Možete unijeti svoj PORESKI broj i postaviti drugu adresu za naplatu.",
    basket_empty: "Korpa je prazna",
    extra_shipping_count: "Primit ćete {count} paketa.",
    select_location_error:
      "Pronađite mjesto prijema pošiljke na mapi i kliknite na indikator u sredini karte kako biste odredili tačnu adresu primaoca.",

    billing_business_desc: "To je poslovni račun sa PORESKIM brojem.",
    billing_personal_desc: "To je lični račun.",

    no_billing_title: "Nema naplate",
    no_billing_desc: "Ostavite adresu za naplatu praznu.",

    can_pay_cod_message:"Ovu narudžbu možete platiti gotovinom pri dostavi.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Sat",
    count_input: "Količina",

    price_changed: "Cijena se promijenila. nova cijena:",
    offer: "Dobijte {count}x artikl za {percent}% popusta",
    offer_free: "Dobijte {count}x besplatno",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Moje adrese",
    subtitle:"Ovdje pogledajte svoje sačuvane adrese i lako dodajte novu.",
    new_action: "Nova adresa",
    receiver: "Primalac",
    address: "Adresa",
    building_no: "broj zgrade",
    building_unit: "jedinica",
    postcode: "Poštanski broj",
    tel: "Telefon",
    description: "Bilješka",

    map: {
      title: "Moje adrese",
      confirm: "Adresa registracije",
      address_type: "Adresa",
      receptor_type: "Primalac",
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
    subtitle:"Ovdje pogledajte svoje zahtjeve za povrat. Za artikle s pravilima povrata možete podnijeti zahtjev za povrat na stranici narudžbe.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Lista želja",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Moji komentari",
    first_post: "Prvi post",
    last_edit: "Zadnja izmjena",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Moje poklon kartice",
    add_action: "Dodaj karticu",
    add_card_dialog: {
      title: "Dodajte poklon karticu",
      message:
        "Unesite broj kartice i sigurnosni kod. Poklon kartica će biti dodana na vaš račun.",
      card_number_input: "Broj kartice",
      info: "Napomena: Prilikom kupovine u trgovini, prikazat će vam se mogućnost plaćanja poklon karticama. Odabirom ove opcije, iznos vašeg dopunskog salda će biti odbijen od iznosa narudžbe.",
      add_action: "Registracija kartice",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Uporedite proizvod",
    action_button: "Uporedite",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Nijedan proizvod nije dodan na listu za poređenje.",
      price: "Cijena",
      type: "Tip",
      brand: "Brend",
      warranty: "Garancija",
      variants_comparison: "Uporedite varijante proizvoda",
      spec: "Tehničke specifikacije",
      pros: "Prednosti",
      cons: "Nedostaci",
      user_review: "Komentari korisnika",
      rating: "Ocjena",
      rating_count: "Broj recenzija",
      info: "Ovu tabelu poređenja proizvoda možete podijeliti sa svojim prijateljima slanjem sljedećeg linka ili joj pristupiti kasnije tako što ćete sačuvati ovu vezu.",
      copy_action: "Kopiraj link za poređenje",
      check_list: ["Da", "Ima"],
      cross_list: ["br", "Nije"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Samo originali",
    only_has_discount: "Samo sniženo",
    price_range: "Raspon cijena",
    brands: "Brend",
    main_shop_page: "Glavna stranica prodavnice",
    home: "Dom",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Poštovani {user}, kupili ste ovaj proizvod. Šta mislite o ovom proizvodu?",
    notification: {
      title: "Čestitam",
      message: "Vaš komentar je zabilježen.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Novi blog",
    popular: "Popularno",
    topics: "Teme",
    suggestions: "Prijedlozi",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "O nama",
    terms: "Pravila korištenja",
    privacy: "Politika privatnosti",
    contact_us: "Kontaktiraj nas",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Kontaktirajte nas obrazac",
    name: "Ime",
    email: "E-pošta",
    phone: "Telefon",
    message: "Poruka",
    notifications: {
      success: "Vaša poruka je poslana.",
    },
    submitted_title: "Hvala vam što ste nam se obratili!",
    submitted_message:
      "Cijenimo vaše vrijeme kada ste nas kontaktirali. Vaša poruka je primljena i naš tim je trenutno razmatra. Odgovorit ćemo u najkraćem mogućem roku i zahvaljujemo vam se na strpljenju tokom ovog vremena. Vaše interesovanje i povratne informacije su nam važni, a mi smo posvećeni tome da vam pružimo najbolju moguću podršku.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Potvrda plaćanja",
      payment_success: "Plaćanje završeno.",
      buy_title: "Kupi",
      pay_by_giftcards: "Vaša narudžba je plaćena poklon karticom.",
      free_order: "Vaša narudžba je besplatna.",
      pay_by_cod: "Vaša narudžba je dodana kao pouzećem.",
      pay_by_dir:
        "Vaša narudžba je uspješno dodana. Sada možete platiti direktnim prijenosom novca, a zatim učitati potvrdu o uplati na stranicu za narudžbu.",
      pay_title: "Plaćanje",
      qr_code_payment: "Kreirana adresa QR koda za plaćanje.",
      connecting_to_online_gateway: "Povezivanje na mrežni prolaz za plaćanje.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Ostalo do početka",
    title_between_start_end: "Ostalo do kraja",
    title_after_end: "Završeno",
    title_no_start_end: "Bez vremenskog perioda!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Po narudžbini možete dobiti jedan poklon.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kupon kod",
    add_coupon: "Dodaj kupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Obrazac za avokado nije omogućen!",
    last_update: "Posljednje ažuriranje:",
    step1:
      "1. Unesite naziv i detalje proizvoda koji želite da naručite i kliknite na dugme Dodaj.",
    title_plc: "Unesite naziv proizvoda.",
    description_plc: "Imate li još opisa proizvoda?",
    link_plc: "Imate li link do proizvoda?",
    image: "Slika proizvoda",
    image_msg: "Po potrebi možete poslati sliku proizvoda.",
    add_item: "Dodaj stavku",
    items_list: "Lista traženih proizvoda",
    currency_msg: "Iznos ove narudžbe morate platiti ovom valutom.",
    step2:
      "2. Nakon što dodate sve željene artikle, kliknite na dugme Zahtjev za pregled narudžbe. U ovoj fazi ćemo pregledati narudžbu i obavijestiti vas o cijeni. Klikom na ovaj link moći ćete vidjeti cijenu i link za plaćanje.",
    order_action: "Registracija narudžbe",
    show_all: "Pokazi sve",
    show_accepted: "Prikaži potvrđene artikle",
    last_orders: "Lista vaših nedavnih narudžbi",
    pending_status: "pod pregledom",
    check_now: "Provjerite narudžbu",
    add_new_order: "Napravite novu narudžbu",
    pay_online: "Plaćajte online",
    pricing_not_completed_message:
      "Vaša narudžba se pregledava. Vaša narudžba će uskoro biti pregledana i ocijenjena cijena te ćete moći platiti narudžbu.",

    select_address_message:
      "Molimo unesite svoju adresu, a zatim možete poslati narudžbu.",

    delete_item_dialog: {
      title: "Uklonite artikl iz korpe",
      message: "Želite li izbrisati ovaj artikal iz korpe?",
      action: "Da, izbriši",
    },

    notifications: {
      order_success: "Vaša narudžba je uspješno poslana.",
      delete_success: "Stavka je izbrisana.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Kreiranje naloga",
    message:
      "Kreirajte listu proizvoda koje želite da kupite skeniranjem koda proizvoda.",

    currency_msg: "Valuta kojom želite da platite.",
    order_action: "Plaćanje",
    add_new_order: "Nova narudžba",
    continue_order: "Nastavite narudžbu",

    delete_item_dialog: {
      title: "Uklonite artikl iz korpe",
      message: "Želite li izbrisati ovaj artikal iz korpe?",
      action: "Da, izbriši",
    },
    notifications: {
      order_success: "Vaša narudžba je uspješno poslana.",
      delete_success: "Stavka je izbrisana.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Otpremite sliku računa o uplati.",
    upload_payment_receipt_done:
      "✔ Već ste prenijeli sliku računa, pričekajte naše odobrenje. Ako trebate promijeniti, prethodnu sliku možete zamijeniti novom.",
    public_form_title: "Podaci o računu za prijenos novca",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lista obaveza",
      message: "Navedite naslove posla koji želite da uradite i obavestite kupca koliko je daleko napredovao.",
    },
    booking: {
      title: "Rezervacija / Rezervacija",
      message: "Ova narudžba će biti obrađena u određeno vrijeme, kupac je odabrao željeni period, ukoliko želite da izvršite bilo kakve promjene u odabranom periodu, obavijestite kupca.",

      selected_checkin: "Odabrana prijava od strane korisnika",
      selected_checkout: "Odabrana odjava od strane kupca",
      change_days_question:
        "Trebate li promijeniti u danima koje je kupac izabrao?",
      show_calendar: "Prikaži kalendar narudžbi",
    },
    pricing: {
      title: "Cijene",
      message: "Koliko naplaćujete ovu uslugu?",
    },
    subscription: {
      title: "Pretplata",
      message:
        "Možete odabrati period pretplate kupovinom ove usluge na dnevnoj bazi. Obavijestite kupca ako želite promijeniti zadane vrijednosti koje ste već unijeli.",
      duration: "Period pretplate",
    },
    charge: {
      title: "Napunite",
      message:
        "Naveli ste naknadu za ovu stavku. Možete promijeniti iznos naknade za artikl koji je kupac kupio.",
      charge: "Napunite",
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
    action: "Podijelite red",
    title: "Podijelite ovu narudžbu s drugima.",
    message:
      "To je sigurna veza, podijelite je samo sa onima koje poznajete. Svi sa ovim linkom mogu duplirati vašu narudžbu i vidjeti odabranu adresu. Sadržat će informacije o vašoj trenutnoj košarici.",
    valid_period: "Ovaj link će isteći nakon 48 sati.",
    import_order_action: "Narudžba za uvoz",
    retrieve_dialog_title: "Dohvati eksternu narudžbu",
    address_included: "Podijelite artikle iz korpe + Adresa",
    address_excluded: "Dijelite samo artikle iz korpe",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Cijene",
    inventory: "Inventar",
    discount: "Popust",
  },

  rating: {
    product_rating_message:
      "Ovaj proizvod je dobio ocjenu {rate} od 5 zvjezdica i ocijenjeno od {rate_count} ljudi.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Istražiti!",
      same_tags_subtitle: "Pronađite još izvanrednih povezanih predmeta.",
      same_category_subtitle: "Pronađite još izuzetnih predmeta u ovoj kategoriji.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Naručite {product} uz",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Pogledajte trgovinu {vendor}",
  },

  login: {
    welcome: "Dobro došli",
  },


};
