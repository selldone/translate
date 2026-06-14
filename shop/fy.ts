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
  surveys: ["Hiel earm", "Earm", "Normaal", "Goed", "Treflik"],

  /** @see SFooterSection **/
  footer: {
    map: "Kaart",
    email: "E-mail",
    phone: "Tillefoan",
    address: "Adres",

    copyright:
      "It gebrûk fan ynhâld allinich foar net-kommersjele doelen en mei ferwizing nei de boarne (keppeling mei {shop_title}). Alle rjochten foarbehâlden oan {shop_title}.",
    powered_by: "Mei mooglik makke troch",
    privacy: "Privacybelied",
    term_of_use: "Betingsten fan gebrûk",
    shop_app_setting: "Winkelynstelling & GDPR",

    dialog_setting: {
      title: "Ynstellingen foar winkelapplikaasjes",
      app_list: "Oersjoch fan applikaasjes",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Útferkocht",
    review_unit: "Resinsje",
    not_original: "Net orizjineel",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filterje",
    native: {
      title: "Oanmelde yn applikaasje",
      message:
        "Dizze app fereasket tagong ta jo winkelkontoynformaasje. Dit omfettet tagong ta namme, kontaktnûmer, adres, e-post, bestelskiednis, bestelle en pleatse opmerkings op dizze winkel.",
      message_bold:
        "Wês wis dat jo de offisjele winkel-app brûke om dizze winkel yn te gean.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sortearje op",
    title_small: "Sortearje op..",
    nothing: "Neat",
    most_views: "De measte views",
    most_likes: "Meast populêr",
    most_recent: "Nijste",
    most_sell: "Bêst ferkeapjende",
    cheapest: "Goedkeapste",
    most_expensive: "It djoerste",
    only_available: "Beskikber",
    view_mode: {
      normal: "Normaal",
      grid: "Raster",
      list: "Listwerjefte",
      insta: "Insta-styl",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Nep",
    action: "Feiling",
    compare_limit: "10 items limyt",
    compare_add: "Tafoegje oan ferliking",
    compare_be_in_list: "Yn ferliking list",

    type: "Soarte",
    brand: "Merk",
    category: "Kategory",
    discount: "Koarting",
    track_price: "Track priis",
    waiting_for_auction: "Wachtsje op de feiling?",
    inform_auction: "Fertel my oer feiling",
    return_in_days: "{days} dagen werombringgarânsje",
    support24h7: "Stypje 24 oeren 7 dagen",
    support_normal: "Wurkoeren stipe",
    original_guarantee: "Orizjinele garânsje",
    cod_payment: "Stipe foar kontant beteljen by levering",

    pros: "Foardielen",
    cons: "Neidielen",

    external_link: "Lês mear",
    notifications: {
      congratulation: "Lokwinske",
      waiting_list_add_success:
        "Wy sille jo ynformearje as dit produkt wurdt veiling.",
      waiting_list_delete_success: "Jo binne út 'e wachtlist foar feiling gien.",
    },

    offer_message: "Keapje {min_quantity} Krij {percent}% koarting foar dizze items",
    up_to: "Oant {per_order}x per bestelling",
    get_free: "FERGEES TE KRIJEN",
    get_off: "KRY {percent}% KORTING",
    select_a_vendor_message: "Selektearje asjebleaft in ferkeaper.",
    product_description_header: "Yntroduksje fan {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Wachtsje op beskikberens",
    inform_me_when_available: "Wachtsje op dit?",
    pay_buy: "Betelje & Keapje",
    quantity: "Telle",
    quantity_in_basket: "Artikels yn winkelwein",
    count_unit: "x",
    remove: "Weinimme",
    add_to_basket: "Tafoegje oan winkelwein",
    buy: "Keapje",
    subscribe_now: "Abonnearje no",
    unsubscribe: "Utskriuwe",
    select_a_subscription_plan: "Selektearje earst in plan!",
    manage_subscriptions: "Beheare abonneminten",
    notifications: {
      inform_add_success: "Wy litte jo witte wannear't it beskikber is.",
      inform_remove_success: "Jo binne fuortsmiten fan de wachtlist.",
    },
    zip_pin_input: "Postkoade / PIN",
    zip_pin_not_available_msg: "Net beskikber op dizze lokaasje!",
    zip_pin_placeholder: "Selektearje postkoade/PIN-koade...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Resinsje",
    spec: "Spesifikaasjes",
    comments: "Comments",
    price: "Priis",
    rate: "Taryf",
    comment: "Kommentaar",
    warranty: "Garânsje",
    return_policy: "Retûrbelied",
    guide: "Gids",
    shipping: "Skipfeart",
    related_products_title: "Relatearre produkten",
    related_categories_title: "Untdek yn kolleksjes",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Bestellingsskiednis",
      profile: "Myn profyl",
      favorites: "Favorite artikels",
      gift_cards: "Jeftekaarten",
      return_requests: "Weromstjoerde bestellingen",
      basket: "Winkelwein",
    },
    user_menu: {
      my_shops: "Myn winkels",
      go_to_admin: "Beheare {shop_name}",
      exit_from: "Ofmelde {shop_name}",
      chips: "{chips} tokens",
    },
    login_to_shop: "Oanmelde by winkel",
    login_to_shop_short: "ynlogge",
    item_in_basket_message: "{count} Dit artikel is yn jo karre.",
    search_title: "Sykje yn winkel {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Karre",
    basket_is_empty: "Jo karre is leech.",
    total_price: "Totaal",
    view_basket: "Jo winkelwein",
    more: "Mear ...",
    accept_and_pay: "Betelje",
    items: "Artikels",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Ofwiisd",
    table: {
      code: "Bestelkoade",
      reserved: "Datum",
      delivery_state: "Leveringsstatus",
      price: "Totale priis",
      status: "Betelling Status",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Bestelkoade",
      items: "Artikels",
      reserved: "Datum",
      delivery_state: "Lêste status",
      price: "Totale priis",
      status: "Betelling Status",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Jeftekaart",
      comments: "Opmerkingen",
      favorites: "Favoriten",
      return_requests: "Retours",
      addresses: "Adressen",
      profile: "profyl",
      orders: "Oarders",
      wallets: "Portemonnees",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Myn portemonnees",
    subtitle: "As jo yn oanmerking komme en in cashback-programma aktyf is, wurdt in diel fan jo bestelling byskreaun op jo portemonnee. Jo kinne dizze middels brûke by jo folgjende oankeap."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Saldo fan myn portemonnee',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Oarder",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Betelling",
      payment_waiting: "Wachtsje op betelling",
      payment_completed: "Betelle",
      table: {
        title: "Titel",
        amount: "Tal",
        description: "Beskriuwing",
      },
      total_payment: "Betelle bedrach",
      discount: "Koarting",
      discount_code: "Koartingskoade",
      delivery_fee: "Ferstjoerskosten",
      delivery_fee_after: "Gjin levering betelle",

      total_price: "Totale artikelpriis",
      total_items_discount: "Artikelkoarting",
      total_price_after_offers: "Totaal nei it oanfreegjen fan oanbiedingen",
      total_order_price_before_tax: "Pre-belesting Totaal Priis",

      buyer_payment: "Buyer betelling bedrach",

      payment_is_in_require_capture_message:
        "Wy hawwe jo betelling ûntfangen, mar dy is noch net fêstlein.",
      settle_the_earlier_bill_first: "Betelje earst de eardere rekken!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Befalling",
      subtitle: "Keaper ynformaasje",
      confirm_received_action: "Untfangst fan produkt befêstigje",
      confirm_received_info:
        "Klikje op de befêstigingsknop as jo de bestelling hawwe ûntfongen. As it nedich is, kinne jo in ferwizing yntsjinje as jo befêstiging krije.",
      Recipient: "Ûntfanger",
      bill: "Faktuer",
      name: "Namme",
      tel: "Tillefoan",
      email: "E-mail",
      country: "Lân",
      state: "Steat",
      city: "Stêd",
      address: "Adres",
      building_no: "Gebou nûmer",
      unit_no: "Ienheidsnûmer",
      postal_code: "Postkoade",
      description: "Beskriuwing",
      order_delivered: "De bestelling is ôflevere.",
      delivery_time: "Levertiid",
      tracking_code: "Tracking koade",
      tracking_url: "Folg-URL",

      notifications: {
        confirm_delivery: "Jo bestelling is befêstige.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garânsje fan orizjinaliteit fan guod",
      return: "Weromkomme",
      table: {
        product: "Produkt Namme",
        count: "Telle",
        unit_price: "Unit priis",
        total_price: "Totale priis",
        discount: "Koarting",
        final_price: "Final Priis",
        returned: "Weromkommen",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Weromkomme",
    count_input: "Oantal werom te bringen artikels",
    count_input_message: "Hoefolle artikels bringe jo werom?",
    reason_input: "Reden foar werom",
    reason_input_message: "Selektearje de reden foar it werombringe fan dit artikel.",
    note_input: "Beskriuwing",
    note_input_hint: "Beskriuw de reden foar it weromkommen ..",
    note_input_message:
      "Beskriuw as nedich de reden foar it werombringe fan dit artikel.",
    media_message:
      "Jo kinne hjir ôfbylding, audio of fideo fan it produkt uploade om bettere stipe te krijen foar ynformaasje oer produktstatus. It selektearjen fan it bestân sil automatysk ferstjoere en befêstigje.",
    video: "Fideo",
    voice: "Lûd",
    add_action: "Stjoer weromfersyk",
    notifications: "Jo weromfersyk is mei súkses registrearre.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Oarder",
    info: {
      title: "Kocht Firtuele Produkt",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Myn persoanlike ynformaasje",
    name: "Namme",
    email: "E-mail",
    tel: "Telefoan",
    identity: "Autentikaasje",
    success_kyc: "Ferifiearre KYC",
    no_kyc: "Gjin KYC",
    club: "Meidogger Level",
    subscription: "Nijs abonnemint",
    leave_shop: "Ferlitte dizze winkel en fuortsmite alle klanten nivo",
    leave_shop_action: "Ferlitte winkel",
    edit_personal_info: "Persoanlike ynformaasje bewurkje",
    leave_dialog: {
      title: "Ferlitte winkel",
      message:
        "It útskriuwen fan dizze winkel sil jo bestellingynformaasje en records net wiskje.",
      action: "Ferlitte",
    },
    notifications: {
      leave_success: "Ferlitte winkel",
    },
    club_table: {
      discount: "Koarting",
      limit: "Beheine",
      currency: "Muntsoarte",
      free_shipping: "Fergese fersending",
    },

    my_profile: {
      title: "Myn profyl",
      subtitle: "Dit is myn klantprofyl-ynformaasje foar de winkel.",
      edit_action: "Profyl bewurkje"
    },
    subscribe_status: {
      subscribed: "Ik bin ynskreaun om it lêste nijs en promoasjes fia e-mail te ûntfangen.",
      unsubscribed: "Ik bin net ynskreaun om nijs of promoasjes fia e-mail te ûntfangen."
    },
    my_club: {
      subtitle: "Myn klupnivo en de foardielen dêrfan."
    },
    kyc: {
      subtitle: "Dit is myn wrâldwide identifikaasje-ynformaasje."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Winkelwein",
    total_price: "Totaalbedrach",
    shipping: "Ferstjoerskosten",
    free_shipping: "Fergese fersending",
    shipping_not_pay: "Net ynbegrepen",
    total_discount: "Totale koarting",
    customer_club: "Klanteklub-lid",
    customer_club_discount: "Member koarting",
    final_price: "Finale betelling",
    lead_time: "Tariedingstiid",
    lead_time_unit: "Oere",
    receive_time: "Preferred levertiid",
    select_time: "Selektearje Levertiid",
    no_select_time: "Sa gau mooglik",
    transportation_type: "Ferstjoertype",
    days_input: "Leveringsdagen",
    days_input_label: "Dagen",
    days_input_no_data: "Selektearje op syn minst ien dei",
    time_input: "Levertiid",
    time_input_label: "Levering at",
    time_input_label_no_data: "Selektearje op syn minst ien tiid ynterval",
    support_cod: "Kontant betelje by levering",
    not_support_cod: "Net yn steat om lokaal te beteljen!",
    final_confirm_action: "Finale oarder befêstiging",
    pay_and_complete_action: "Betelje no",
    pre_confirm_service: "Fersykje yntsjinje",
    cross_selling_discount: "Samling koarting",

    errors: {
      no_address: "Selektearje it adres dat jo wolle dat jo bestelling ferstjoerd wurde nei.",
      no_phone: "Fier in kontaktnûmer yn om de ûntfangst fan guod te koördinearjen.",
      select_billing_country: "Selektearje jo fakturearlân",
      select_billing_state: "Selektearje jo belestingregio",
    },
    same_billing_address: "Faktuereynformaasje itselde as Untfangerynformaasje",
    same_billing_address_desc:
      "It faktueradres is itselde as it ferstjoeradres.",
    custom_billing_info: "Ferskillende fakturearring ynformaasje",
    custom_billing_info_desc:
      "Jo kinne jo BELASTINGnûmer ynfiere en in oar adres ynstelle foar fakturearring.",
    basket_empty: "Basket is leech",
    extra_shipping_count: "Jo sille {count} pakketten ûntfange.",
    select_location_error:
      "Fyn it plak fan ûntfangst fan 'e ferstjoering op' e kaart en klikje op de yndikator yn 'e midden fan' e kaart om it krekte adres fan 'e ûntfanger te bepalen.",

    billing_business_desc: "It is in saaklik akkount mei in BELASTINGnûmer.",
    billing_personal_desc: "It is in persoanlik akkount.",

    no_billing_title: "Gjin fakturearring",
    no_billing_desc: "Lit faktueradres leech.",

    can_pay_cod_message:"Jo kinne dizze bestelling kontant betelje by levering.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Oere",
    count_input: "Telle",

    price_changed: "Priis is feroare. nije priis:",
    offer: "Krij {count}x artikel mei {percent}% koarting",
    offer_free: "Krij {count}x fergees",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Myn adressen",
    subtitle:"Besjoch hjir jo bewarre adressen en foegje maklik in nij adres ta.",
    new_action: "Nij adres",
    receiver: "Untfanger",
    address: "Adres",
    building_no: "nûmerboerd",
    building_unit: "ienheid",
    postcode: "Postkoade",
    tel: "Telefoan",
    description: "Noat",

    map: {
      title: "Myn adressen",
      confirm: "Adres registraasje",
      address_type: "Adres",
      receptor_type: "Ûntfanger",
    },
    add_dialog: {
      title: "Nije Adres Namme",
      message: "Fier in titel yn foar in nij adres.",
      address_name_input: "Adres (ferplicht)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Werombringfersiken",
    subtitle:"Besjoch hjir jo retouroanfragen. Foar artikels mei in retûrbelied kinne jo in retouroanfraach yntsjinje op de bestelpagina.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Winskelist",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Myn opmerkings",
    first_post: "Earste post",
    last_edit: "Lêste bewurking",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Myn Jeftekaarten",
    add_action: "Kaart tafoegje",
    add_card_dialog: {
      title: "Kadokaart tafoegje",
      message:
        "Fier it kaartnûmer en feiligenskoade yn. In kadokaart wurdt tafoege oan jo akkount.",
      card_number_input: "Kaartnûmer",
      info: "Opmerking: By it keapjen fan 'e winkel sille jo de opsje sjen om te beteljen mei kadokaarten. Troch dizze opsje te selektearjen, wurdt it bedrach fan jo oplaadsaldo ôfrekkene fan it bestellingsbedrach.",
      add_action: "Kaart registrearje",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Produkten ferlykje",
    action_button: "Ferlykje",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Gjin produkten waarden tafoege oan de ferliking list.",
      price: "Priis",
      type: "Soarte",
      brand: "Merk",
      warranty: "Garânsje",
      variants_comparison: "Ferlykje produkt farianten",
      spec: "Technyske spesifikaasjes",
      pros: "Foardielen",
      cons: "Neidielen",
      user_review: "Opmerkingen fan brûkers",
      rating: "Wurdearring",
      rating_count: "Oantal resinsjes",
      info: "Jo kinne dizze produktfergelikingstabel diele mei jo freonen troch de folgjende keppeling te stjoeren, of letter tagong krije troch dizze keppeling op te slaan.",
      copy_action: "Kopiearje Fergeliking Link",
      check_list: ["Ja", "Hat"],
      cross_list: ["Nee", "Hat net"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Allinnich orizjinelen",
    only_has_discount: "Allinnich koarting",
    price_range: "Priis berik",
    brands: "Merk",
    main_shop_page: "Haadside fan de winkel",
    home: "Thús",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Beste {user}, Jo hawwe dit produkt kocht. Wat tinke jo oer dit produkt?",
    notification: {
      title: "Lokwinske",
      message: "Jo opmerking is opnommen.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Nije blog",
    popular: "Populêr",
    topics: "Underwerpen",
    suggestions: "Suggestjes",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Oer ús",
    terms: "Betingsten fan gebrûk",
    privacy: "Privacybelied",
    contact_us: "Kontakt mei ús opnimme",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Nim kontakt mei ús op formulier",
    name: "Namme",
    email: "E-mail",
    phone: "Tillefoan",
    message: "Berjocht",
    notifications: {
      success: "Dyn berjocht is ferstjoerd.",
    },
    submitted_title: "Tankewol foar it berikken nei ús!",
    submitted_message:
      "Wy wurdearje jo tiid om kontakt mei ús op te nimmen. Jo berjocht is ûntfongen en ús team besjocht it op it stuit. Wy sille sa gau as mooglik reagearje, en wy tankje jo foar jo geduld yn dizze tiid. Jo belangstelling en feedback binne wichtich foar ús, en wy sette ús yn foar in foarsjen jo mei de bêste mooglik stipe.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Befêstiging fan betelling",
      payment_success: "Betelling klear.",
      buy_title: "Keapje",
      pay_by_giftcards: "Jo bestelling is betelle mei in kadokaart.",
      free_order: "Jo bestelling is fergees.",
      pay_by_cod: "Jo bestelling is tafoege as cash by levering.",
      pay_by_dir:
        "Jo bestelling is mei súkses tafoege. No kinne jo betelje troch direkte jild oerdracht en dan uploade de betelling ûntfangst op 'e oarder side.",
      pay_title: "Betelling",
      qr_code_payment: "Betelling QR code adres makke.",
      connecting_to_online_gateway: "Ferbine mei de online betelling gateway.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Bliuw oant it begjin",
    title_between_start_end: "Bliuw oant de ein ta",
    title_after_end: "Klear",
    title_no_start_end: "Sûnder tiidperioade!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Jo kinne ien kado per bestelling krije.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Coupon koade",
    add_coupon: "Foegje coupon ta",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "De avokadofoarm is net ynskeakele!",
    last_update: "Lêste fernijing:",
    step1:
      "1. Fier de namme en details fan it produkt yn dat jo bestelle wolle en klikje op de knop taheakje.",
    title_plc: "Fier de namme fan it produkt yn.",
    description_plc: "Hawwe jo mear produktbeskriuwings?",
    link_plc: "Hawwe jo in keppeling nei it produkt?",
    image: "Produktôfbylding",
    image_msg: "Jo kinne as nedich de produktôfbylding stjoere.",
    add_item: "Artikel tafoegje",
    items_list: "Oersjoch fan oanfrege produkten",
    currency_msg: "Jo moatte it bedrach fan dizze bestelling betelje mei dizze munt.",
    step2:
      "2. Nei it tafoegjen fan alle winske items, klikje jo op 'e knop foar beoardielingsfersyk. Op dit stadium sille wy de bestelling besjen en jo witte oer de priis. Troch op dizze keppeling te klikken, kinne jo de priis en betellingslink sjen.",
    order_action: "Bestelling registrearje",
    show_all: "Lit alles sjen",
    show_accepted: "Lit befêstige items sjen",
    last_orders: "Oersjoch fan jo resinte bestellingen",
    pending_status: "ûnder beoardieling",
    check_now: "Kontrolearje oarder",
    add_new_order: "Meitsje nije oarder",
    pay_online: "Betelje online",
    pricing_not_completed_message:
      "Jo bestelling wurdt hifke. Jo bestelling sil gau wurde hifke en priis en jo kinne de bestelling betelje.",

    select_address_message:
      "Fier jo adres yn, en dan kinne jo de bestelling yntsjinje.",

    delete_item_dialog: {
      title: "Ferwiderje it item út 'e winkelkarre",
      message: "Wolle jo dit item út 'e karre fuortsmite?",
      action: "Ja, wiskje",
    },

    notifications: {
      order_success: "Jo bestelling is mei súkses pleatst.",
      delete_success: "Artikel wiske.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Oarder oanmeitsjen",
    message:
      "Meitsje de list mei produkten dy't jo wolle keapje troch de produktkoade te scannen.",

    currency_msg: "De faluta wêrmei jo wolle betelje.",
    order_action: "Betelling",
    add_new_order: "Nije oarder",
    continue_order: "Trochgean oarder",

    delete_item_dialog: {
      title: "Ferwiderje it item út 'e winkelkarre",
      message: "Wolle jo dit item út 'e karre fuortsmite?",
      action: "Ja, wiskje",
    },
    notifications: {
      order_success: "Jo bestelling is mei súkses pleatst.",
      delete_success: "Artikel wiske.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Upload ôfbylding fan 'e betellingsûntfangst.",
    upload_payment_receipt_done:
      "✔ Jo hawwe de ûntfangstôfbylding al opladen, wachtsje op ús goedkarring. As jo wizigje moatte, kinne jo de foarige ôfbylding ferfange troch in nije.",
    public_form_title: "Account ynformaasje foar jild oerdracht",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Takenlist",
      message: "Spesifisearje de titels fan it wurk dat jo wolle dwaan en lit de keaper witte hoe fier it foarútgien is.",
    },
    booking: {
      title: "Reservearje / Reservearje",
      message: "Dizze oarder sil wurde ferwurke op in spesifisearre tiid, de klant hat selektearre de winske perioade, as jo wolle meitsje gjin feroarings yn de selektearre perioade, lit de klant witte.",

      selected_checkin: "Selektearre check-yn troch klant",
      selected_checkout: "Selektearre check-out troch klant",
      change_days_question:
        "Moatte jo feroarje tidens de troch de klant selekteare dagen?",
      show_calendar: "Lit kalinder fan oarders sjen",
    },
    pricing: {
      title: "Priis",
      message: "Hoefolle betelje jo foar dizze tsjinst?",
    },
    subscription: {
      title: "Ynskriuwing",
      message:
        "Jo kinne de abonnemintsperioade kieze troch dizze tsjinst op deistige basis te keapjen. Lit de keaper witte as jo de standertwearden wolle feroarje dy't jo al ynfierd hawwe.",
      duration: "Abonnemint perioade",
    },
    charge: {
      title: "Kosten",
      message:
        "Jo hawwe in kostenbedrach foar dit artikel opjûn. Jo kinne it kostenbedrach feroarje foar it artikel dat troch de klant kocht is.",
      charge: "Kosten",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Wachtsje om tagong te kontrolearjen...",
    no_access_message:
      "Spitigernôch hawwe jo gjin tagong ta ús winkel.<br/> Nim dan kontakt mei ús op.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Diele oarder",
    title: "Diel dizze bestelling mei oaren.",
    message:
      "It is in feilige keppeling, diel it allinich mei dyjingen dy't jo kenne. Elkenien mei dizze keppeling kin jo bestelling duplisearje en it selektearre adres sjen. It sil ynformaasje befetsje oer jo hjoeddeistige karre.",
    valid_period: "Dizze keppeling sil nei 48 oeren ferrinne.",
    import_order_action: "Ymportearje oarder",
    retrieve_dialog_title: "Eksterne oarder ophelje",
    address_included: "Diel winkelweinartikels + adres",
    address_excluded: "Diel allinnich winkelweinartikels",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prizen",
    inventory: "Ynventarisaasje",
    discount: "Koarting",
  },

  rating: {
    product_rating_message:
      "Dit produkt hat in wurdearring krigen fan {rate} fan de 5 stjerren en wurdearre troch {rate_count} minsken.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Ferkenne!",
      same_tags_subtitle: "Fyn mear opmerklike relatearre artikels.",
      same_category_subtitle: "Fyn mear opmerklike artikels yn dizze kategory.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Bestel {product} mei",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Besjoch de winkel fan {vendor}",
  },

  login: {
    welcome: "Wolkom",
  },


};
