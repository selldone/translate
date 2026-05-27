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
  surveys: ["Oso pobrea", "Pobrea", "Normala", "Ona", "Bikaina"],

  /** @see SFooterSection **/
  footer: {
    map: "Mapa",
    email: "Posta elektronikoa",
    phone: "Mugikorra",
    address: "Helbidea",

    copyright:
      "Edukia helburu ez-komertzialetarako eta iturriari erreferentzia eginez soilik erabiltzea (esteka {shop_title}-rekin). Eskubide guztiak {shop_title}rentzat gordeta.",
    powered_by: "Honek eskaintzen du",
    privacy: "Pribatutasun politika",
    term_of_use: "Erabilera baldintzak",
    shop_app_setting: "Dendaren ezarpena eta GDPR",

    dialog_setting: {
      title: "Denda aplikazioen ezarpena",
      app_list: "Aplikazioen zerrenda",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Salduta",
    review_unit: "Iritzia",
    not_original: "Ez originala",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Iragazkia",
    native: {
      title: "Aplikazioaren saioa hasteko",
      message:
        "Aplikazio honek zure dendako kontuaren informaziorako sarbidea behar du. Honek izena, kontaktu-zenbakia, helbidea, posta elektronikoa, eskaera-historia, eskaerak eta denda honetan iruzkinak argitaratzea barne hartzen ditu.",
      message_bold:
        "Ziurtatu denda-aplikazio ofiziala erabiltzen duzula denda honetara sartzeko.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Ordenatu",
    title_small: "Ordenatu..",
    nothing: "Ezer ez",
    most_views: "Ikuspegi gehienak",
    most_likes: "Ezagunena",
    most_recent: "Berriena",
    most_sell: "Salduena",
    cheapest: "Merkeena",
    most_expensive: "Garestiena",
    only_available: "Eskuragarri",
    view_mode: {
      normal: "Normala",
      grid: "Sarea",
      list: "Zerrenda",
      insta: "Insta estiloa",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Gezurra",
    action: "Enkantea",
    compare_limit: "10 elementu muga",
    compare_add: "Gehitu alderatzeko",
    compare_be_in_list: "Konparazio zerrendan",

    type: "Mota",
    brand: "Marka",
    category: "Kategoria",
    discount: "Deskontua",
    track_price: "Jarraitu prezioa",
    waiting_for_auction: "Enkantearen zain?",
    inform_auction: "Kontatu enkanteari buruz",
    return_in_days: "{days} Egun Bermearen Itzulketa",
    support24h7: "Laguntza 24 ordu 7 egunetan",
    support_normal: "Lanorduen laguntza",
    original_guarantee: "Jatorrizko bermea",
    cod_payment: "Eskudirutan entregatzeko laguntza",

    pros: "Aldekoak",
    cons: "Alde txarrak",

    external_link: "Irakurri gehiago",
    notifications: {
      congratulation: "Zorionak",
      waiting_list_add_success:
        "Produktu hau enkantean jartzen denean jakinaraziko dizugu.",
      waiting_list_delete_success: "Enkantearen itxaron zerrendatik irten zara.",
    },

    offer_message: "Erosi {min_quantity} Lortu % {percent} deskontua elementu hauengatik",
    up_to: "{per_order}x gehienez eskaera bakoitzeko",
    get_free: "LORTU DOAN",
    get_off: "Lortu % {percent} DESKONTUA",
    select_a_vendor_message: "Mesedez, hautatu saltzaile bat.",
    product_description_header: "{product} aurkezten",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Erabilgarritasunaren zain",
    inform_me_when_available: "Honen zain?",
    pay_buy: "Ordaindu eta Erosi",
    quantity: "zenbaketa",
    quantity_in_basket: "Saskian dauden gauzak",
    count_unit: "x",
    remove: "Kendu",
    add_to_basket: "Gehitu saskira",
    buy: "Erosi",
    subscribe_now: "Harpidetu orain",
    unsubscribe: "Harpidetza kendu",
    select_a_subscription_plan: "Aukeratu plan bat lehenik!",
    manage_subscriptions: "Kudeatu harpidetzak",
    notifications: {
      inform_add_success: "Eskuragarri dagoenean jakinaraziko dizugu.",
      inform_remove_success: "Itxaron zerrendatik kendu zaituzte.",
    },
    zip_pin_input: "Posta-kodea / PIN",
    zip_pin_not_available_msg: "Ez dago erabilgarri kokapen honetan!",
    zip_pin_placeholder: "Hautatu posta-kodea/PIN kodea...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Iritzia",
    spec: "Zehaztapenak",
    comments: "Iruzkinak",
    price: "Prezioa",
    rate: "Tarifa",
    comment: "Iruzkina",
    warranty: "Bermea",
    return_policy: "Itzultze politika",
    guide: "Gida",
    shipping: "Bidalketa",
    related_products_title: "Lotutako produktuak",
    related_categories_title: "Ezagutu bildumetan",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Eskaeren Historia",
      profile: "Nire profila",
      favorites: "Gogoko elementuak",
      gift_cards: "Opari Txartelak",
      return_requests: "Itzulitako eskaerak",
      basket: "Erosketa saskia",
    },
    user_menu: {
      my_shops: "Nire dendak",
      go_to_admin: "Kudeatu {shop_name}",
      exit_from: "Amaitu saioa {shop_name}",
      chips: "{chips} Txipak",
    },
    login_to_shop: "Hasi saioa dendan",
    login_to_shop_short: "saioa hasi",
    item_in_basket_message: "{count} Artikulu hau zure saskian dago.",
    search_title: "Bilatu {shop_name} dendan",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Saskia",
    basket_is_empty: "Zure saskia hutsik dago.",
    total_price: "Guztira",
    view_basket: "Zure saskia",
    more: "Gehiago...",
    accept_and_pay: "Errebisatu",
    items: "Elementua(k)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Baztertua",
    table: {
      code: "Eskaera kodea",
      reserved: "Data",
      delivery_state: "Entrega-egoera",
      price: "Prezio totala",
      status: "Ordainketa-egoera",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Eskaera kodea",
      items: "Elementuak",
      reserved: "Data",
      delivery_state: "Azken egoera",
      price: "Prezio totala",
      status: "Ordainketa-egoera",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Opari txartela",
      comments: "Iruzkinak",
      favorites: "Gogokoak",
      return_requests: "Itzuliak",
      addresses: "Helbideak",
      profile: "profila",
      orders: "Aginduak",
      wallets: "Diru-zorroak",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Nire diru-zorroak",
    subtitle: "Baldintzak betetzen badituzu eta dirua itzultzeko programa aktibo badago, zure eskaeraren zati bat zure diru-zorroan kreditatuko da. Funts horiek hurrengo erosketan erabil ditzakezu."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Nire diru-zorroaren saldoa',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Agindu",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Ordainketa",
      payment_waiting: "Ordainketaren zain",
      payment_completed: "Ordaindua",
      table: {
        title: "Izenburua",
        amount: "Zenbatekoa",
        description: "Deskribapena",
      },
      total_payment: "Ordaindutako zenbatekoa",
      discount: "Deskontua",
      discount_code: "Deskontu kodea",
      delivery_fee: "Bidalketa kostua",
      delivery_fee_after: "Ez da entregarik ordaindu",

      total_price: "Elementuen prezioa guztira",
      total_items_discount: "Elementuen deskontua",
      total_price_after_offers: "Eskaintzak aplikatu ondoren guztira",
      total_order_price_before_tax: "Zerga aurreko Prezio osoa",

      buyer_payment: "Eroslearen ordainketaren zenbatekoa",

      payment_is_in_require_capture_message:
        "Zure ordainketa jaso dugu, baina oraindik ez da behin betiko kobratu.",
      settle_the_earlier_bill_first: "Lehenik, kitatu aurreko faktura!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Entrega",
      subtitle: "Erosleari buruzko informazioa",
      confirm_received_action: "Berretsi produktuaren ordainagiria",
      confirm_received_info:
        "Egin klik berrespen botoian eskaera jaso baduzu. Behar izanez gero, erreferentzia bat bidali ahal izango duzu berrespena jasotzen baduzu.",
      Recipient: "Hartzailea",
      bill: "Faktura",
      name: "Izena",
      tel: "Mugikorra",
      email: "Posta elektronikoa",
      country: "Herrialdea",
      state: "Estatu",
      city: "Hiria",
      address: "Helbidea",
      building_no: "Eraikinaren zenbakia",
      unit_no: "Unitatearen zenbakia",
      postal_code: "Posta kodea",
      description: "Deskribapena",
      order_delivered: "Eskaera entregatu da.",
      delivery_time: "Entregatzeko epea",
      tracking_code: "Jarraipen kodea",
      tracking_url: "Jarraipenaren URLa",

      notifications: {
        confirm_delivery: "Zure eskaera berretsi da.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Ondasunen originaltasunaren bermea",
      return: "Itzuli",
      table: {
        product: "produktuaren izena",
        count: "zenbaketa",
        unit_price: "Unitatearen prezioa",
        total_price: "Prezio totala",
        discount: "Deskontua",
        final_price: "Azken Prezioa",
        returned: "Itzuli",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Itzuli",
    count_input: "Itzulitako elementu kopurua",
    count_input_message: "Zenbat artikulu itzultzen dituzu?",
    reason_input: "Itzultzeko arrazoia",
    reason_input_message: "Hautatu elementu hau itzultzeko arrazoia.",
    note_input: "Deskribapena",
    note_input_hint: "Deskribatu itzuleraren arrazoia..",
    note_input_message:
      "Deskribatu elementu hau itzultzeko arrazoia behar izanez gero.",
    media_message:
      "Produktuaren irudia, audioa edo bideoa karga dezakezu hemen produktuaren egoerari buruzko informaziorako laguntza hobea lortzeko. Fitxategia hautatzean automatikoki bidaliko da eta berretsiko da.",
    video: "Bideoa",
    voice: "Ahotsa",
    add_action: "Bidali itzultzeko eskaera",
    notifications: "Zure itzultzeko eskaera behar bezala erregistratu da.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Agindu",
    info: {
      title: "Erositako produktu birtuala",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Nire informazio pertsonala",
    name: "Izena",
    email: "Posta elektronikoa",
    tel: "Telefonoa",
    identity: "Autentifikazioa",
    success_kyc: "Egiaztatutako KYC",
    no_kyc: "KYC gabe",
    club: "Erabiltzaile Maila",
    subscription: "Albisteen harpidetza",
    leave_shop: "Irten denda honetatik eta kendu bezeroen maila",
    leave_shop_action: "Utzi denda",
    edit_personal_info: "Editatu informazio pertsonala",
    leave_dialog: {
      title: "Utzi denda",
      message:
        "Denda honetara harpidetza kentzeak ez ditu zure eskaeraren informazioa eta erregistroak ezabatuko.",
      action: "Utzi",
    },
    notifications: {
      leave_success: "Utzi denda",
    },
    club_table: {
      discount: "Deskontua",
      limit: "Muga",
      currency: "Moneta",
      free_shipping: "Doako bidalketa",
    },

    my_profile: {
      title: "Nire profila",
      subtitle: "Hau da dendako nire bezero-profilaren informazioa.",
      edit_action: "Editatu profila"
    },
    subscribe_status: {
      subscribed: "Posta elektronikoz azken berriak eta promozioak jasotzeko harpidetuta nago.",
      unsubscribed: "Ez nago harpidetuta posta elektronikoz berriak edo promozioak jasotzeko."
    },
    my_club: {
      subtitle: "Nire klub-maila eta haren abantailak."
    },
    kyc: {
      subtitle: "Hau da nire identifikazio globalaren informazioa."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Erosketa saskia",
    total_price: "Kopuru osoa",
    shipping: "Bidalketa kostua",
    free_shipping: "Doako bidalketa",
    shipping_not_pay: "Ez dago barne",
    total_discount: "Deskontua osoa",
    customer_club: "Bezeroen klubeko kidea",
    customer_club_discount: "Bazkideen Deskontua",
    final_price: "Azken Ordainketa",
    lead_time: "Prestaketa denbora",
    lead_time_unit: "Ordua",
    receive_time: "Bidalketa denbora hobetsi",
    select_time: "Hautatu Entrega-ordua",
    no_select_time: "Ahal bezain laister",
    transportation_type: "Bidalketa mota",
    days_input: "Entrega egunak",
    days_input_label: "Egunak",
    days_input_no_data: "Hautatu gutxienez egun bat",
    time_input: "Entregatzeko epea",
    time_input_label: "Heldu den entrega",
    time_input_label_no_data: "Hautatu gutxienez denbora-tarte bat",
    support_cod: "Eskudirutan hartutakoan",
    not_support_cod: "Ezin da lokalean ordaindu!",
    final_confirm_action: "Azken eskaera berrespena",
    pay_and_complete_action: "Ordaindu Orain",
    pre_confirm_service: "Bidali eskaera",
    cross_selling_discount: "Bilketa deskontua",

    errors: {
      no_address: "Hautatu zure eskaera bidaltzea nahi duzun helbidea.",
      no_phone: "Sartu harremanetarako zenbaki bat salgaiak jasotzea koordinatzeko.",
      select_billing_country: "Hautatu fakturazio-herrialdea",
      select_billing_state: "Hautatu zure zerga-eskualdea",
    },
    same_billing_address: "Fakturazio-informazioa Hartzailearen informazio bera",
    same_billing_address_desc:
      "Fakturazio helbidea bidalketa helbidearen berdina da.",
    custom_billing_info: "Fakturazio-informazio desberdinak",
    custom_billing_info_desc:
      "Zure FAX zenbakia sar dezakezu eta beste helbide bat ezar dezakezu fakturaziorako.",
    basket_empty: "Saskia hutsik dago",
    extra_shipping_count: "{count} pakete jasoko dituzu.",
    select_location_error:
      "Bilatu mapan bidalketa jaso duen lekua eta egin klik maparen erdiko adierazlean hartzailearen helbide zehatza zehazteko.",

    billing_business_desc: "FAX zenbakia duen negozio kontu bat da.",
    billing_personal_desc: "Kontu pertsonala da.",

    no_billing_title: "Fakturaziorik ez",
    no_billing_desc: "Utzi fakturazio helbidea hutsik.",

    can_pay_cod_message:"Eskaera hau eskudirutan ordaindu dezakezu entregatzean.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Ordua",
    count_input: "zenbaketa",

    price_changed: "Prezioa aldatu da. prezio berria:",
    offer: "Lortu {count}x elementu deskontu % {percent}",
    offer_free: "Lortu {count}x doan",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Nire helbideak",
    subtitle:"Ikusi hemen gordetako helbideak, eta gehitu berri bat erraz.",
    new_action: "Helbide berria",
    receiver: "Hartzailea",
    address: "Helbidea",
    building_no: "matrikula",
    building_unit: "unitatea",
    postcode: "Posta kodea",
    tel: "Telefonoa",
    description: "Ohar",

    map: {
      title: "Nire helbideak",
      confirm: "Helbidea erregistratzea",
      address_type: "Helbidea",
      receptor_type: "Hartzailea",
    },
    add_dialog: {
      title: "Helbide-izen berria",
      message: "Idatzi izenburu bat helbide berri baterako.",
      address_name_input: "Helbidea (beharrezkoa)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Itzultzeko eskaerak",
    subtitle:"Ikusi hemen zure itzulketa-eskaerak. Itzulketa-politika duten artikuluetarako, eskaeraren orrian itzulketa-eskaera bidal dezakezu.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Desioen zerrenda",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Nire iruzkinak",
    first_post: "Lehenengo mezua",
    last_edit: "Azken edizioa",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Nire Opari Txartelak",
    add_action: "Gehitu txartela",
    add_card_dialog: {
      title: "Gehitu opari txartela",
      message:
        "Sartu txartelaren zenbakia eta segurtasun kodea. Opari-txartel bat gehituko da zure kontuan.",
      card_number_input: "Txartel zenbakia",
      info: "Oharra: dendan erostean, opari-txartelekin ordaintzeko aukera erakutsiko zaizu. Aukera hau hautatuz gero, zure karga-saldoaren zenbatekoa eskaeraren zenbatekotik kenduko da.",
      add_action: "Txartela Erregistratzea",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Konparatu produktua",
    action_button: "Konparatu",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Ez da produkturik gehitu konparazio-zerrendan.",
      price: "Prezioa",
      type: "Mota",
      brand: "Marka",
      warranty: "Bermea",
      variants_comparison: "Konparatu produktuen aldaerak",
      spec: "Zehaztapen Teknikoak",
      pros: "Aldekoak",
      cons: "Alde txarrak",
      user_review: "Erabiltzaileen iruzkinak",
      rating: "Balorazioa",
      rating_count: "Iritzi kopurua",
      info: "Produktuen alderaketa-taula hau zure lagunekin parteka dezakezu hurrengo esteka bidalita, edo geroago atzitu, esteka hau gordeta.",
      copy_action: "Kopiatu Konparazio Esteka",
      check_list: ["Bai", "Du"],
      cross_list: ["Ez", "Ez du"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Jatorrizkoak bakarrik",
    only_has_discount: "Deskontua bakarrik",
    price_range: "Prezio tartea",
    brands: "Marka",
    main_shop_page: "Gorde orri nagusia",
    home: "Hasiera",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "{user} maitea, produktu hau erosi duzu. Zer iruditzen zaizu produktu hau?",
    notification: {
      title: "Zorionak",
      message: "Zure iruzkina grabatu da.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Bloga",
    add_new_blog: "Blog berria",
    popular: "Herrikoia",
    topics: "Gaiak",
    suggestions: "Iradokizunak",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Guri buruz",
    terms: "Erabilera baldintzak",
    privacy: "Pribatutasun politika",
    contact_us: "Jarri gurekin harremanetan",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Jarri gurekin harremanetan formularioa",
    name: "Izena",
    email: "Posta elektronikoa",
    phone: "Mugikorra",
    message: "Mezua",
    notifications: {
      success: "Zure mezua bidali da.",
    },
    submitted_title: "Eskerrik asko gurekin harremanetan jartzeagatik!",
    submitted_message:
      "Eskertzen dugu gurekin harremanetan jartzean izan duzun denbora. Zure mezua jaso da eta gure taldea berrikusten ari da. Ahalik eta azkarren erantzungo dugu, eta eskertzen dizugu denbora honetan izan duzun pazientziagatik. Zure interesa eta iritzia garrantzitsuak dira guretzat, eta ahalik eta laguntza onena eskaintzeko konpromisoa hartzen dugu.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Ordainketa berrespena",
      payment_success: "Ordainketa amaitu da.",
      buy_title: "Erosi",
      pay_by_giftcards: "Zure eskaera opari-txartel batekin ordaindu da.",
      free_order: "Zure eskaera doan da.",
      pay_by_cod: "Zure eskaera bidaltzeko eskudiru gisa gehitu da.",
      pay_by_dir:
        "Zure eskaera behar bezala gehitu da. Orain zuzeneko diru-transferentzia bidez ordaindu dezakezu eta, ondoren, ordainketa-agiria igo dezakezu eskaera orrian.",
      pay_title: "Ordainketa",
      qr_code_payment: "Ordainketa QR kodea helbidea sortu da.",
      connecting_to_online_gateway: "Lineako ordainketa-pasabidera konektatzen.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Hasierarako geratu zen",
    title_between_start_end: "Azkenera arte geratu zen",
    title_after_end: "Amaitu",
    title_no_start_end: "Denbora tarterik gabe!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Eskaera bakoitzeko opari bat jaso dezakezu.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kupoi kodea",
    add_coupon: "Gehitu kupoia",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Ahuakatearen forma ez dago gaituta!",
    last_update: "Azken eguneratzea:",
    step1:
      "1. Sartu eskatu nahi duzun produktuaren izena eta xehetasunak eta egin klik Gehitu botoian.",
    title_plc: "Sartu produktuaren izena.",
    description_plc: "Produktuen deskribapen gehiago dituzu?",
    link_plc: "Ba al duzu produkturako estekarik?",
    image: "Produktuaren irudia",
    image_msg: "Behar izanez gero, produktuaren irudia bidal dezakezu.",
    add_item: "Gehitu elementua",
    items_list: "Eskatutako produktuen zerrenda",
    currency_msg: "Eskaera honen zenbatekoa moneta honekin ordaindu behar duzu.",
    step2:
      "2. Nahi dituzun elementu guztiak gehitu ondoren, egin klik eskaera berrikusteko eskaera botoian. Fase honetan, eskaera berrikusiko dugu eta prezioaren berri emango dizugu. Esteka honetan klik eginez, prezioa eta ordainketa esteka ikusteko aukera izango duzu.",
    order_action: "Eskaeraren erregistroa",
    show_all: "Erakutsi dena",
    show_accepted: "Erakutsi baieztatutako elementuak",
    last_orders: "Zure azken eskaeren zerrenda",
    pending_status: "berrikusten ari dira",
    check_now: "Egiaztatu ordena",
    add_new_order: "Egin eskaera berria",
    pay_online: "Ordaindu sarean",
    pricing_not_completed_message:
      "Zure eskaera berrikusten ari da. Zure eskaera berrikusi eta prezioa laster egingo da eta eskaera ordaindu ahal izango duzu.",

    select_address_message:
      "Mesedez, idatzi zure helbidea eta, ondoren, eskaera bidali dezakezu.",

    delete_item_dialog: {
      title: "Kendu elementua erosketa saskitik",
      message: "Elementu hau saskitik ezabatu nahi duzu?",
      action: "Bai, ezabatu",
    },

    notifications: {
      order_success: "Zure eskaera behar bezala egin da.",
      delete_success: "Elementua ezabatu da.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Aginduak sortzea",
    message:
      "Sortu erosi nahi dituzun produktuen zerrenda produktuaren kodea eskaneatuz.",

    currency_msg: "Ordaindu nahi duzun moneta.",
    order_action: "Ordainketa",
    add_new_order: "Agindu berria",
    continue_order: "Jarraitu ordena",

    delete_item_dialog: {
      title: "Kendu elementua erosketa saskitik",
      message: "Elementu hau saskitik ezabatu nahi duzu?",
      action: "Bai, ezabatu",
    },
    notifications: {
      order_success: "Zure eskaera behar bezala egin da.",
      delete_success: "Elementua ezabatu da.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Kargatu ordainketa-ordainagiriaren irudia.",
    upload_payment_receipt_done:
      "✔ Ordainagiriaren irudia dagoeneko igo duzu, itxaron gure onespena. Aldatu behar baduzu, aurreko irudia berri batekin ordez dezakezu.",
    public_form_title: "Dirua transferitzeko kontuaren informazioa",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Egiteko zerrenda",
      message: "Zehaztu egin nahi duzun lanaren izenburuak eta jakinarazi erosleari zenbaterainoko aurrerapena duen.",
    },
    booking: {
      title: "Erreserba / Reserva",
      message: "Eskaera hau zehaztutako une batean prozesatuko da, bezeroak nahi den epea hautatu du, hautatutako epean aldaketarik egin nahi baduzu, jakinarazi bezeroari.",

      selected_checkin: "Bezeroak hautatutako check-in-a",
      selected_checkout: "Bezeroek aukeratutako check-out",
      change_days_question:
        "Bezeroak aukeratutako egunetan aldatu behar al duzu?",
      show_calendar: "Erakutsi Eskaeren Egutegia",
    },
    pricing: {
      title: "Prezioak",
      message: "Zenbat kobratzen duzu zerbitzu honengatik?",
    },
    subscription: {
      title: "Harpidetza",
      message:
        "Harpidetza epea aukera dezakezu egunero zerbitzu hau erosiz. Esan erosleari dagoeneko sartu dituzun balio lehenetsiak aldatu nahi dituzun ala ez.",
      duration: "Harpidetza epea",
    },
    charge: {
      title: "Kargatu",
      message:
        "Elementu honengatik kobratu bat zehaztu duzu. Bezeroak erositako elementuaren kargaren zenbatekoa alda dezakezu.",
      charge: "Kargatu",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Sarbidea egiaztatzeko zain...",
    no_access_message:
      "Zoritxarrez, ez duzu gure dendara sarbiderik.<br/> Mesedez, jarri gurekin harremanetan.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Partekatu ordena",
    title: "Partekatu eskaera hau besteekin.",
    message:
      "Esteka segurua da, ezagutzen dituzunekin bakarrik partekatu. Esteka hau duten guztiek zure eskaera bikoiztu dezakete eta hautatutako helbidea ikusi. Zure uneko saskiari buruzko informazioa edukiko du.",
    valid_period: "Esteka hau 48 orduren buruan iraungiko da.",
    import_order_action: "Inportazio eskaera",
    retrieve_dialog_title: "Berreskuratu kanpoko ordena",
    address_included: "Partekatu saskirako elementuak + Helbidea",
    address_excluded: "Partekatu saskiko elementuak soilik",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prezioak",
    inventory: "Inbentarioa",
    discount: "Deskontua",
  },

  rating: {
    product_rating_message:
      "Produktu honek 5 izarretako {rate} balorazioa jaso du eta {rate_count} pertsonek baloratu dute.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Arakatu!",
      same_tags_subtitle: "Aurkitu erlazionatutako elementu aipagarriagoak.",
      same_category_subtitle: "Aurkitu elementu aipagarri gehiago kategoria honetan.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Eskatu {product} honekin",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Ikusi {vendor} saltokia",
  },

  login: {
    welcome: "Ongi etorri",
  },


};
