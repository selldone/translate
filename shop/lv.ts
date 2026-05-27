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
  surveys: ["Ļoti slikta", "Nabadzīgs", "Normāls", "Labi", "Lieliski"],

  /** @see SFooterSection **/
  footer: {
    map: "Karte",
    email: "E-pasts",
    phone: "Tālrunis",
    address: "Adrese",

    copyright:
      "Satura izmantošana tikai nekomerciālos nolūkos un ar atsauci uz avotu (saite ar {shop_title}). Visas tiesības paturētas {shop_title}.",
    powered_by: "Nodrošina",
    privacy: "Privātuma politika",
    term_of_use: "Lietošanas noteikumi",
    shop_app_setting: "Veikala iestatījumi un GDPR",

    dialog_setting: {
      title: "Veikala lietojumprogrammu iestatījums",
      app_list: "Lietojumprogrammu saraksts",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Izpārdots",
    review_unit: "Pārskats",
    not_original: "Nav oriģināls",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtrs",
    native: {
      title: "Lietojumprogrammas pieteikšanās",
      message:
        "Šai lietotnei ir nepieciešama piekļuve jūsu veikala konta informācijai. Tas ietver piekļuvi vārdam, kontakttālruņa numuram, adresei, e-pastam, pasūtījumu vēsturei, pasūtīšanai un komentāru ievietošanai šajā veikalā.",
      message_bold:
        "Lai ieietu šajā veikalā, noteikti izmantojiet oficiālo veikala lietotni.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Kārtot pēc",
    title_small: "Kārtot pēc..",
    nothing: "Nekas",
    most_views: "Lielākā daļa skatījumu",
    most_likes: "Populārākais",
    most_recent: "Jaunākās",
    most_sell: "Labāk pārdotais",
    cheapest: "Lētākais",
    most_expensive: "Dārgākā",
    only_available: "Pieejams",
    view_mode: {
      normal: "Normāls",
      grid: "Režģis",
      list: "Saraksts",
      insta: "Insta stils",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Viltus",
    action: "Izsole",
    compare_limit: "10 preču ierobežojums",
    compare_add: "Pievienot salīdzināšanai",
    compare_be_in_list: "Salīdzināšanas sarakstā",

    type: "Tips",
    brand: "Zīmols",
    category: "Kategorija",
    discount: "Atlaide",
    track_price: "Izsekot cenu",
    waiting_for_auction: "Gaidi izsoli?",
    inform_auction: "Pastāstiet par izsoli",
    return_in_days: "{days} dienu garantijas atgriešana",
    support24h7: "Atbalsts 24 stundas 7 dienas",
    support_normal: "Darba laika atbalsts",
    original_guarantee: "Oriģinālā garantija",
    cod_payment: "Atbalsts skaidrā naudā pēc piegādes",

    pros: "Priekšrocības",
    cons: "Mīnusi",

    external_link: "Lasīt vairāk",
    notifications: {
      congratulation: "Apsveicu",
      waiting_list_add_success:
        "Mēs jums paziņosim, kad šis produkts tiks izsolīts.",
      waiting_list_delete_success: "Jūs izgājāt no izsoles gaidīšanas saraksta.",
    },

    offer_message: "Pērciet {min_quantity} Saņemiet {percent}% atlaidi šīm precēm",
    up_to: "Līdz {per_order}x vienam pasūtījumam",
    get_free: "SAŅEMT BEZMAKSAS",
    get_off: "SAŅEMIET {percent}% ATLAIDI",
    select_a_vendor_message: "Lūdzu, atlasiet pārdevēju.",
    product_description_header: "Iepazīstinām ar {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Gaida pieejamību",
    inform_me_when_available: "Vai gaidāt šo?",
    pay_buy: "Maksājiet un iegādājieties",
    quantity: "Skaitīt",
    quantity_in_basket: "Preces grozā",
    count_unit: "x",
    remove: "Noņemt",
    add_to_basket: "Pievienot grozam",
    buy: "Pirkt",
    subscribe_now: "Abonē tagad",
    unsubscribe: "Anulēt abonementu",
    select_a_subscription_plan: "Vispirms izvēlieties plānu!",
    manage_subscriptions: "Pārvaldīt abonementus",
    notifications: {
      inform_add_success: "Mēs jūs informēsim, kad tas būs pieejams.",
      inform_remove_success: "Jūs esat izņemts no gaidīšanas saraksta.",
    },
    zip_pin_input: "Pasta indekss / PIN",
    zip_pin_not_available_msg: "Šajā atrašanās vietā nav pieejams!",
    zip_pin_placeholder: "Izvēlieties pasta indeksu/PIN kodu...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Pārskats",
    spec: "Specifikācija",
    comments: "komentāri",
    price: "Cena",
    rate: "Likme",
    comment: "komentēt",
    warranty: "Garantija",
    return_policy: "Atgriešanas nosacījumi",
    guide: "Vadīt",
    shipping: "Piegāde",
    related_products_title: "Saistītie produkti",
    related_categories_title: "Atklājiet kolekcijās",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Pasūtījumu vēsture",
      profile: "Mans profils",
      favorites: "Iecienītākās preces",
      gift_cards: "Dāvanu kartes",
      return_requests: "Atgrieztie pasūtījumi",
      basket: "Iepirkšanās ratiņi",
    },
    user_menu: {
      my_shops: "Mani veikali",
      go_to_admin: "Pārvaldīt {shop_name}",
      exit_from: "Atteikties no {shop_name}",
      chips: "{chips} Čipsi",
    },
    login_to_shop: "Piesakieties veikalā",
    login_to_shop_short: "Pieslēgties",
    item_in_basket_message: "{count} Šī prece ir jūsu grozā.",
    search_title: "Meklēt veikalā {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Ratiņi",
    basket_is_empty: "Jūsu grozs ir tukšs.",
    total_price: "Kopā",
    view_basket: "Jūsu grozs",
    more: "Vairāk...",
    accept_and_pay: "Izrakstīties",
    items: "Prece(-es)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Noraidīts",
    table: {
      code: "Pasūtījuma kods",
      reserved: "Datums",
      delivery_state: "Piegādes statuss",
      price: "Kopējā cena",
      status: "Maksājuma statuss",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Pasūtījuma kods",
      items: "Preces",
      reserved: "Datums",
      delivery_state: "Jaunākais statuss",
      price: "Kopējā cena",
      status: "Maksājuma statuss",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Dāvanu karte",
      comments: "komentāri",
      favorites: "Izlase",
      return_requests: "Atgriežas",
      addresses: "Adreses",
      profile: "profils",
      orders: "Pasūtījumi",
      wallets: "Maciņi",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Mani maciņi",
    subtitle: "Ja atbilstat nosacījumiem un cashback programma ir aktīva, daļa no jūsu pasūtījuma tiks ieskaitīta jūsu maciņā. Šos līdzekļus varēsiet izmantot nākamajam pirkumam."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Mana maciņa atlikums',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Pasūtiet",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Maksājums",
      payment_waiting: "Gaida maksājumu",
      payment_completed: "Apmaksāts",
      table: {
        title: "Nosaukums",
        amount: "Summa",
        description: "Apraksts",
      },
      total_payment: "Samaksātā summa",
      discount: "Atlaide",
      discount_code: "Atlaides kods",
      delivery_fee: "Pārvadājuma maksa",
      delivery_fee_after: "Nav apmaksāta piegāde",

      total_price: "Kopējā preču cena",
      total_items_discount: "Preces Atlaide",
      total_price_after_offers: "Kopā pēc piedāvājumu pieteikšanas",
      total_order_price_before_tax: "Kopējā cena pirms nodokļu nomaksas",

      buyer_payment: "Pircēja maksājuma summa",

      payment_is_in_require_capture_message:
        "Esam saņēmuši jūsu maksājumu, taču tas vēl nav iekasēts.",
      settle_the_earlier_bill_first: "Vispirms apmaksājiet iepriekšējo rēķinu!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Piegāde",
      subtitle: "Pircēja informācija",
      confirm_received_action: "Apstipriniet produkta saņemšanu",
      confirm_received_info:
        "Noklikšķiniet uz apstiprinājuma pogas, ja esat saņēmis pasūtījumu. Ja nepieciešams, varēsiet iesniegt nosūtījumu, saņemot apstiprinājumu.",
      Recipient: "Saņēmējs",
      bill: "Rēķins",
      name: "Vārds",
      tel: "Tālrunis",
      email: "E-pasts",
      country: "Valsts",
      state: "Valsts",
      city: "Pilsēta",
      address: "Adrese",
      building_no: "Ēkas numurs",
      unit_no: "Vienības numurs",
      postal_code: "Pasta indekss",
      description: "Apraksts",
      order_delivered: "Pasūtījums ir piegādāts.",
      delivery_time: "Piegādes laiks",
      tracking_code: "Izsekošanas kods",
      tracking_url: "Izsekošanas URL",

      notifications: {
        confirm_delivery: "Jūsu pasūtījums ir apstiprināts.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Preču oriģinalitātes garantija",
      return: "Atgriezties",
      table: {
        product: "produkta nosaukums",
        count: "Skaitīt",
        unit_price: "Vienības cena",
        total_price: "Kopējā cena",
        discount: "Atlaide",
        final_price: "Galīgā cena",
        returned: "Atgriezās",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Atgriezties",
    count_input: "Atgriezto preču skaits",
    count_input_message: "Cik preces jūs atdodat atpakaļ?",
    reason_input: "Atgriešanās iemesls",
    reason_input_message: "Izvēlieties šīs preces atgriešanas iemeslu.",
    note_input: "Apraksts",
    note_input_hint: "Aprakstiet atgriešanas iemeslu..",
    note_input_message:
      "Ja nepieciešams, aprakstiet šīs preces atgriešanas iemeslu.",
    media_message:
      "Šeit varat augšupielādēt produkta attēlu, audio vai video, lai iegūtu labāku produkta statusa informācijas atbalstu. Izvēloties failu, tas tiks automātiski nosūtīts un apstiprināts.",
    video: "Videoklips",
    voice: "Balss",
    add_action: "Nosūtiet atgriešanas pieprasījumu",
    notifications: "Jūsu atgriešanas pieprasījums ir veiksmīgi reģistrēts.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Pasūtiet",
    info: {
      title: "Iegādāts virtuālais produkts",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Mana personīgā informācija",
    name: "Vārds",
    email: "E-pasts",
    tel: "Tālr",
    identity: "Autentifikācija",
    success_kyc: "Pārbaudīts KYC",
    no_kyc: "Bez KYC",
    club: "Lietotāja līmenis",
    subscription: "Ziņu abonēšana",
    leave_shop: "Izejiet no šī veikala un noņemiet visu klientu līmeni",
    leave_shop_action: "Iziet no veikala",
    edit_personal_info: "Rediģēt personisko informāciju",
    leave_dialog: {
      title: "Iziet no veikala",
      message:
        "Atceļot šī veikala abonementu, jūsu pasūtījuma informācija un ieraksti netiks dzēsti.",
      action: "Aiziet",
    },
    notifications: {
      leave_success: "Iziet no veikala",
    },
    club_table: {
      discount: "Atlaide",
      limit: "Ierobežot",
      currency: "Valūta",
      free_shipping: "Bezmaksas sūtīšana",
    },

    my_profile: {
      title: "Mans profils",
      subtitle: "Šī ir mana klienta profila informācija šim veikalam.",
      edit_action: "Rediģēt profilu"
    },
    subscribe_status: {
      subscribed: "Esmu abonējis jaunāko ziņu un akciju saņemšanu e-pastā.",
      unsubscribed: "Neesmu abonējis ziņu vai akciju saņemšanu e-pastā."
    },
    my_club: {
      subtitle: "Mans kluba līmenis un tā priekšrocības."
    },
    kyc: {
      subtitle: "Šī ir mana globālā identifikācijas informācija."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Iepirkšanās ratiņi",
    total_price: "Kopējā summa",
    shipping: "Pārvadājuma maksa",
    free_shipping: "Bezmaksas sūtīšana",
    shipping_not_pay: "Nav iekļauts",
    total_discount: "Kopējā atlaide",
    customer_club: "Klientu kluba biedrs",
    customer_club_discount: "Dalībnieku atlaide",
    final_price: "Galīgais maksājums",
    lead_time: "Gatavošanas laiks",
    lead_time_unit: "Stunda",
    receive_time: "Vēlamais piegādes laiks",
    select_time: "Izvēlieties Piegādes laiks",
    no_select_time: "Tik drīz cik vien iespējams",
    transportation_type: "Piegādes veids",
    days_input: "Piegādes dienas",
    days_input_label: "Dienas",
    days_input_no_data: "Izvēlieties vismaz vienu dienu",
    time_input: "Piegādes laiks",
    time_input_label: "Piegāde plkst",
    time_input_label_no_data: "Izvēlieties vismaz vienu laika intervālu",
    support_cod: "Ar pēcmaksu",
    not_support_cod: "Nevar norēķināties uz vietas!",
    final_confirm_action: "Galīgais pasūtījuma apstiprinājums",
    pay_and_complete_action: "Maksā tagad",
    pre_confirm_service: "Iesniedziet pieprasījumu",
    cross_selling_discount: "Kolekcijas atlaide",

    errors: {
      no_address: "Izvēlieties adresi, uz kuru vēlaties nosūtīt pasūtījumu.",
      no_phone: "Ievadiet kontakttālruni, lai saskaņotu preču saņemšanu.",
      select_billing_country: "Izvēlieties norēķinu valsti",
      select_billing_state: "Izvēlieties savu nodokļu reģionu",
    },
    same_billing_address: "Norēķinu informācija ir tāda pati kā informācija par saņēmēju",
    same_billing_address_desc:
      "Norēķinu adrese ir tāda pati kā piegādes adrese.",
    custom_billing_info: "Dažāda norēķinu informācija",
    custom_billing_info_desc:
      "Varat ievadīt savu nodokļu numuru un iestatīt citu norēķinu adresi.",
    basket_empty: "Grozs ir tukšs",
    extra_shipping_count: "Jūs saņemsiet {count} pakas.",
    select_location_error:
      "Atrodiet kartē sūtījuma saņemšanas vietu un noklikšķiniet uz indikatora kartes vidū, lai noteiktu precīzu saņēmēja adresi.",

    billing_business_desc: "Tas ir uzņēmuma konts ar nodokļu numuru.",
    billing_personal_desc: "Tas ir personīgais konts.",

    no_billing_title: "Nav norēķinu",
    no_billing_desc: "Atstājiet norēķinu adresi tukšu.",

    can_pay_cod_message:"Par šo pasūtījumu varat samaksāt skaidrā naudā piegādes brīdī.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Stunda",
    count_input: "Skaitīt",

    price_changed: "Cena ir mainījusies. jauna cena:",
    offer: "Saņemiet {count}x preces ar {percent}% atlaidi",
    offer_free: "Saņemiet {count}x bez maksas",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Manas adreses",
    subtitle:"Šeit skatiet saglabātās adreses un viegli pievienojiet jaunu.",
    new_action: "Jauna adrese",
    receiver: "Saņēmējs",
    address: "Adrese",
    building_no: "Numurzīme",
    building_unit: "vienība",
    postcode: "Pasta indekss",
    tel: "Tālr",
    description: "Piezīme",

    map: {
      title: "Manas adreses",
      confirm: "Adreses reģistrācija",
      address_type: "Adrese",
      receptor_type: "Saņēmējs",
    },
    add_dialog: {
      title: "Jauns adreses nosaukums",
      message: "Ievadiet jaunas adreses nosaukumu.",
      address_name_input: "Adrese (obligāti)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Atgriešanas pieprasījumi",
    subtitle:"Šeit skatiet savus atgriešanas pieprasījumus. Precēm ar atgriešanas politiku pieprasījumu varat iesniegt pasūtījuma lapā.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Vēlmju saraksts",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Mani komentāri",
    first_post: "Pirmais ieraksts",
    last_edit: "Pēdējais labojums",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Manas dāvanu kartes",
    add_action: "Pievienojiet karti",
    add_card_dialog: {
      title: "Pievienojiet dāvanu karti",
      message:
        "Ievadiet kartes numuru un drošības kodu. Jūsu kontam tiks pievienota dāvanu karte.",
      card_number_input: "Kartes numurs",
      info: "Piezīme: Pērkot veikalā, tiks parādīta iespēja norēķināties ar dāvanu kartēm. Izvēloties šo opciju, jūsu papildināšanas atlikuma summa tiks atskaitīta no pasūtījuma summas.",
      add_action: "Kartes reģistrācija",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Salīdziniet produktu",
    action_button: "Salīdzināt",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Salīdzināšanas sarakstam netika pievienots neviens produkts.",
      price: "Cena",
      type: "Tips",
      brand: "Zīmols",
      warranty: "Garantija",
      variants_comparison: "Salīdziniet produktu variantus",
      spec: "Tehniskās specifikācijas",
      pros: "Priekšrocības",
      cons: "Mīnusi",
      user_review: "Lietotāju komentāri",
      rating: "Vērtējums",
      rating_count: "Recenziju skaits",
      info: "Varat kopīgot šo produktu salīdzināšanas tabulu ar saviem draugiem, nosūtot šo saiti, vai piekļūt tai vēlāk, saglabājot šo saiti.",
      copy_action: "Kopēt salīdzināšanas saiti",
      check_list: ["Jā", "Ir"],
      cross_list: ["Nē", "Nav"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Tikai oriģināli",
    only_has_discount: "Tikai ar atlaidi",
    price_range: "Cenu amplitūda",
    brands: "Zīmols",
    main_shop_page: "Veikala galvenā lapa",
    home: "Mājas",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Cien. {user}! Jūs esat iegādājies šo produktu. Ko jūs domājat par šo produktu?",
    notification: {
      title: "Apsveicu",
      message: "Jūsu komentārs ir ierakstīts.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Emuārs",
    add_new_blog: "Jauns emuārs",
    popular: "Populārs",
    topics: "Tēmas",
    suggestions: "Ieteikumi",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Par mums",
    terms: "Lietošanas noteikumi",
    privacy: "Privātuma politika",
    contact_us: "Sazinies ar mums",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Sazinieties ar mums formu",
    name: "Vārds",
    email: "E-pasts",
    phone: "Tālrunis",
    message: "Ziņa",
    notifications: {
      success: "Jūsu ziņojums ir nosūtīts.",
    },
    submitted_title: "Paldies, ka sazinājāties ar mums!",
    submitted_message:
      "Mēs novērtējam jūsu laiku, sazinoties ar mums. Jūsu ziņojums ir saņemts, un mūsu komanda to pašlaik izskata. Mēs atbildēsim, cik drīz vien iespējams, un pateicamies par jūsu pacietību šajā laikā. Jūsu interese un atsauksmes mums ir svarīgas, un mēs esam apņēmušies sniegt jums vislabāko iespējamo atbalstu.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Maksājuma apstiprinājums",
      payment_success: "Maksājums pabeigts.",
      buy_title: "Pirkt",
      pay_by_giftcards: "Jūsu pasūtījums tika apmaksāts ar dāvanu karti.",
      free_order: "Jūsu pasūtījums ir bezmaksas.",
      pay_by_cod: "Jūsu pasūtījums ir pievienots skaidrā naudā pēc piegādes.",
      pay_by_dir:
        "Jūsu pasūtījums ir veiksmīgi pievienots. Tagad varat maksāt ar tiešo naudas pārskaitījumu un pēc tam pasūtījuma lapā augšupielādēt maksājuma kvīti.",
      pay_title: "Maksājums",
      qr_code_payment: "Maksājuma QR koda adrese ir izveidota.",
      connecting_to_online_gateway: "Savienojuma izveide ar tiešsaistes maksājumu vārteju.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Palika līdz sākumam",
    title_between_start_end: "Palika līdz galam",
    title_after_end: "Pabeigts",
    title_no_start_end: "Bez laika perioda!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Vienā pasūtījumā varat saņemt vienu dāvanu.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kupona Kods",
    add_coupon: "Pievienojiet kuponu",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Avokado forma nav iespējota!",
    last_update: "Pēdējā atjaunošana:",
    step1:
      "1. Ievadiet tās preces nosaukumu un informāciju, kuru vēlaties pasūtīt, un noklikšķiniet uz pogas Pievienot.",
    title_plc: "Ievadiet preces nosaukumu.",
    description_plc: "Vai jums ir vairāk produktu aprakstu?",
    link_plc: "Vai jums ir saite uz produktu?",
    image: "Produkta attēls",
    image_msg: "Ja nepieciešams, varat nosūtīt produkta attēlu.",
    add_item: "Pievienot vienumu",
    items_list: "Pieprasīto produktu saraksts",
    currency_msg: "Jums ir jāsamaksā šī pasūtījuma summa ar šo valūtu.",
    step2:
      "2. Pēc visu vajadzīgo preču pievienošanas noklikšķiniet uz pasūtījuma pārskatīšanas pieprasījuma pogas. Šajā posmā mēs izskatīsim pasūtījumu un informēsim jūs par cenu. Noklikšķinot uz šīs saites, jūs varēsiet redzēt cenas un maksājuma saiti.",
    order_action: "Pasūtījuma reģistrācija",
    show_all: "Parādīt visu",
    show_accepted: "Rādīt apstiprinātos vienumus",
    last_orders: "Jūsu neseno pasūtījumu saraksts",
    pending_status: "tiek pārskatīta",
    check_now: "Pārbaudiet pasūtījumu",
    add_new_order: "Veikt jaunu pasūtījumu",
    pay_online: "Maksājiet tiešsaistē",
    pricing_not_completed_message:
      "Jūsu pasūtījums tiek pārskatīts. Jūsu pasūtījums drīzumā tiks pārskatīts un noteikta cena, un jūs varēsiet apmaksāt pasūtījumu.",

    select_address_message:
      "Lūdzu, ievadiet savu adresi, un pēc tam varat iesniegt pasūtījumu.",

    delete_item_dialog: {
      title: "Izņemiet preci no iepirkumu groza",
      message: "Vai vēlaties dzēst šo preci no groza?",
      action: "Jā, dzēst",
    },

    notifications: {
      order_success: "Jūsu pasūtījums tika veiksmīgi veikts.",
      delete_success: "Vienums izdzēsts.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Pasūtījuma izveide",
    message:
      "Izveidojiet to produktu sarakstu, kurus vēlaties iegādāties, skenējot preces kodu.",

    currency_msg: "Valūta, ar kuru vēlaties maksāt.",
    order_action: "Maksājums",
    add_new_order: "Jauns pasūtījums",
    continue_order: "Turpināt pasūtījumu",

    delete_item_dialog: {
      title: "Izņemiet preci no iepirkumu groza",
      message: "Vai vēlaties dzēst šo preci no groza?",
      action: "Jā, dzēst",
    },
    notifications: {
      order_success: "Jūsu pasūtījums tika veiksmīgi veikts.",
      delete_success: "Vienums izdzēsts.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Augšupielādējiet maksājuma kvīts attēlu.",
    upload_payment_receipt_done:
      "✔ Jūs jau esat augšupielādējis kvīts attēlu, gaidiet mūsu apstiprinājumu. Ja nepieciešams mainīt, iepriekšējo attēlu var aizstāt ar jaunu.",
    public_form_title: "Konta informācija naudas pārskaitīšanai",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Darāmo lietu saraksts",
      message: "Norādiet darāmā darba nosaukumus un dariet pircējam zināmu, cik tālu tas ir virzījies.",
    },
    booking: {
      title: "Rezervācija / Rezervācija",
      message: "Šis pasūtījums tiks apstrādāts noteiktā laikā, klients ir izvēlējies vēlamo periodu, ja vēlaties veikt kādas izmaiņas izvēlētajā periodā, informējiet klientu.",

      selected_checkin: "Klienta izvēlēta reģistrēšanās",
      selected_checkout: "Klienta izvēlēta izrakstīšanās",
      change_days_question:
        "Vai ir jāmaina klienta izvēlētajās dienās?",
      show_calendar: "Rādīt pasūtījumu kalendāru",
    },
    pricing: {
      title: "Cenu noteikšana",
      message: "Cik jūs maksājat par šo pakalpojumu?",
    },
    subscription: {
      title: "Abonēšana",
      message:
        "Jūs varat izvēlēties abonēšanas periodu, pērkot šo pakalpojumu katru dienu. Informējiet pircēju, ja vēlaties mainīt jau ievadītās noklusējuma vērtības.",
      duration: "Abonēšanas periods",
    },
    charge: {
      title: "Uzlādē",
      message:
        "Jūs esat norādījis maksu par šo preci. Jūs varat mainīt klienta iegādātās preces maksas summu.",
      charge: "Uzlādē",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Gaida, lai pārbaudītu piekļuvi...",
    no_access_message:
      "Diemžēl jums nav piekļuves mūsu veikalam.<br/> Lūdzu, sazinieties ar mums.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Kopīgojiet pasūtījumu",
    title: "Kopīgojiet šo pasūtījumu ar citiem.",
    message:
      "Tā ir droša saite, kopīgojiet to tikai ar tiem, kurus pazīstat. Ikviens, kam ir šī saite, var dublēt jūsu pasūtījumu un redzēt izvēlēto adresi. Tajā būs informācija par jūsu pašreizējo grozu.",
    valid_period: "Šīs saites derīguma termiņš beigsies pēc 48 stundām.",
    import_order_action: "Importa pasūtījums",
    retrieve_dialog_title: "Izgūt ārējo pasūtījumu",
    address_included: "Kopīgojiet groza preces + Adrese",
    address_excluded: "Kopīgojiet tikai groza preces",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Cenas",
    inventory: "Inventārs",
    discount: "Atlaide",
  },

  rating: {
    product_rating_message:
      "Šis produkts ir saņēmis vērtējumu {rate} no 5 zvaigznēm, un to ir novērtējuši {rate_count} cilvēki.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Izpētiet!",
      same_tags_subtitle: "Atrodiet vairāk ievērojamu saistīto priekšmetu.",
      same_category_subtitle: "Atrodiet citas ievērojamas preces šajā kategorijā.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Pasūtiet {product} kopā ar",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Skatīt {vendor} veikalu",
  },

  login: {
    welcome: "Laipni lūdzam",
  },


};
