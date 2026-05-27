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
  surveys: ["Trè pòv", "Pòv", "Nòmal", "Bon", "Ekselan"],

  /** @see SFooterSection **/
  footer: {
    map: "Kat jeyografik",
    email: "Imèl",
    phone: "Telefòn",
    address: "Adrès",

    copyright:
      "Itilizasyon kontni sèlman pou rezon ki pa komèsyal ak referans ak sous la (lyen ak {shop_title}). Tout dwa rezève pou {shop_title}.",
    powered_by: "Patrone pa",
    privacy: "Règ sou enfòmasyon prive",
    term_of_use: "Tèm itilizasyon",
    shop_app_setting: "Anviwònman magazen & GDPR",

    dialog_setting: {
      title: "Boutik Aplikasyon Anviwònman",
      app_list: "Lis aplikasyon yo",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Vann deyò",
    review_unit: "Revizyon",
    not_original: "Pa orijinal",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtre",
    native: {
      title: "Koneksyon aplikasyon",
      message:
        "Aplikasyon sa a mande aksè a enfòmasyon sou kont magazen ou. Sa gen ladann aksè a non, nimewo kontak, adrès, imèl, istwa lòd, kòmantè ak afiche kòmantè sou magazen sa a.",
      message_bold:
        "Asire w ou itilize aplikasyon magazen ofisyèl la pou antre nan magazen sa a.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Triye pa",
    title_small: "Klase pa..",
    nothing: "Pa gen anyen",
    most_views: "Pifò opinyon",
    most_likes: "Ki pi popilè",
    most_recent: "Destriktè pi nouvo an",
    most_sell: "Pi vann",
    cheapest: "Pi bon mache",
    most_expensive: "Pi chè",
    only_available: "Disponib",
    view_mode: {
      normal: "Nòmal",
      grid: "Kadriyaj",
      list: "Lis",
      insta: "Stil Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Fo",
    action: "Vann piblik",
    compare_limit: "10 atik limit",
    compare_add: "Ajoute pou konpare",
    compare_be_in_list: "Nan konpare lis",

    type: "Kalite",
    brand: "Mak",
    category: "Kategori",
    discount: "Rabè",
    track_price: "Track pri",
    waiting_for_auction: "Ap tann pou vann piblik la?",
    inform_auction: "Pale m de vann piblik",
    return_in_days: "{days} Jou Retounen Garanti",
    support24h7: "Sipòte 24 èdtan 7 jou",
    support_normal: "Sipò lè travay",
    original_guarantee: "Garanti orijinal",
    cod_payment: "Lajan kach sou sipò livrezon",

    pros: "Avantaj",
    cons: "Dezavantaj",

    external_link: "Li piplis",
    notifications: {
      congratulation: "Felisitasyon",
      waiting_list_add_success:
        "Nou pral fè w konnen lè pwodwi sa a vann a lakriye piblik.",
      waiting_list_delete_success: "Ou soti nan lis datant vann piblik la.",
    },

    offer_message: "Achte {min_quantity} Jwenn {percent}% remise pou atik sa yo",
    up_to: "Jiska {per_order}x pou chak lòd",
    get_free: "JWENN GRATIS",
    get_off: "JWENN {percent}% RABÈ",
    select_a_vendor_message: "Tanpri chwazi yon machann.",
    product_description_header: "Prezante {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Ap tann disponiblite",
    inform_me_when_available: "Ap tann sa?",
    pay_buy: "Peye & Achte",
    quantity: "Konte",
    quantity_in_basket: "Atik nan charyo",
    count_unit: "x",
    remove: "Retire",
    add_to_basket: "Ajoute nan kabwa",
    buy: "Achte",
    subscribe_now: "Abònman Kounye a",
    unsubscribe: "Dezabòne",
    select_a_subscription_plan: "Chwazi yon plan an premye!",
    manage_subscriptions: "Jere abònman",
    notifications: {
      inform_add_success: "Nou pral fè w konnen lè li disponib.",
      inform_remove_success: "Yo retire w nan lis datant la.",
    },
    zip_pin_input: "Kòd postal / PIN",
    zip_pin_not_available_msg: "Pa disponib nan kote sa a!",
    zip_pin_placeholder: "Chwazi kòd postal/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Revizyon",
    spec: "Espesifikasyon",
    comments: "Kòmantè",
    price: "Pri",
    rate: "Pousantaj",
    comment: "Kòmantè",
    warranty: "Garanti",
    return_policy: "Règleman retounen",
    guide: "Gid",
    shipping: "Livrezon",
    related_products_title: "Pwodwi ki gen rapò",
    related_categories_title: "Dekouvri nan koleksyon yo",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Istwa lòd",
      profile: "Pwofil mwen",
      favorites: "Atik pi renmen yo",
      gift_cards: "Kat kado",
      return_requests: "Retounen Lòd",
      basket: "Panier",
    },
    user_menu: {
      my_shops: "Magazen mwen yo",
      go_to_admin: "Jere {shop_name}",
      exit_from: "Dekonekte {shop_name}",
      chips: "{chips} jeton",
    },
    login_to_shop: "Konekte nan magazen an",
    login_to_shop_short: "ouvri sesyon an",
    item_in_basket_message: "{count} Atik sa a nan kabwa ou.",
    search_title: "Chèche nan magazen {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Panier",
    basket_is_empty: "Charyo ou vid.",
    total_price: "Total",
    view_basket: "Charyo ou a",
    more: "Plis...",
    accept_and_pay: "Kesye",
    items: "Atik (yo)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Rejte",
    table: {
      code: "Kòd Lòd",
      reserved: "Dat",
      delivery_state: "Estati livrezon",
      price: "Pri total",
      status: "Estati Peman",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Kòd Lòd",
      items: "Atik",
      reserved: "Dat",
      delivery_state: "Dènye estati",
      price: "Pri total",
      status: "Estati Peman",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Kat kado",
      comments: "Kòmantè",
      favorites: "Favoris",
      return_requests: "Retounen",
      addresses: "Adrès",
      profile: "pwofil",
      orders: "Lòd",
      wallets: "Bous",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Bous mwen yo",
    subtitle: "Si ou kalifye epi gen yon pwogram ranbousman lajan ki aktif, yon pati nan kòmann ou ap kredite nan bous ou. Ou ka itilize lajan sa yo pou pwochen acha ou."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Balans bous mwen',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Lòd",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Peman",
      payment_waiting: "Ap tann pou peman",
      payment_completed: "Peye",
      table: {
        title: "Tit",
        amount: "Kantite lajan",
        description: "Deskripsyon",
      },
      total_payment: "Kantite lajan yo peye",
      discount: "Rabè",
      discount_code: "Kòd rabè",
      delivery_fee: "Pri transpò",
      delivery_fee_after: "Pa gen livrezon peye",

      total_price: "Total Atik Pri",
      total_items_discount: "Atik rabè",
      total_price_after_offers: "Total apre aplike òf",
      total_order_price_before_tax: "Pri total anvan taks",

      buyer_payment: "Montan peman achtè",

      payment_is_in_require_capture_message:
        "Nou resevwa peman ou, men li poko konfime nèt.",
      settle_the_earlier_bill_first: "Peye bòdwo anvan an an premye!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Livrezon",
      subtitle: "Enfòmasyon achtè",
      confirm_received_action: "Konfime resi pwodwi",
      confirm_received_info:
        "Klike sou bouton konfimasyon an si ou te resevwa lòd la. Si sa nesesè, w ap kapab soumèt yon referans si w resevwa konfimasyon.",
      Recipient: "Moun k ap resevwa",
      bill: "Fakti",
      name: "Non",
      tel: "Telefòn",
      email: "Imèl",
      country: "Peyi",
      state: "Eta",
      city: "Vil",
      address: "Adrès",
      building_no: "Nimewo bilding lan",
      unit_no: "Nimewo inite a",
      postal_code: "Kòd postal",
      description: "Deskripsyon",
      order_delivered: "Lòd la te delivre.",
      delivery_time: "Tan livrezon",
      tracking_code: "Kòd pou swiv",
      tracking_url: "URL swivi",

      notifications: {
        confirm_delivery: "Lòd ou a konfime.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garanti orijinalite machandiz yo",
      return: "Retounen",
      table: {
        product: "Non pwodwi",
        count: "Konte",
        unit_price: "Pri inite",
        total_price: "Pri total",
        discount: "Rabè",
        final_price: "Pri final la",
        returned: "Retounen",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Retounen",
    count_input: "Kantite atik retounen yo",
    count_input_message: "Konbyen atik ou retounen?",
    reason_input: "Rezon pou retounen",
    reason_input_message: "Chwazi rezon pou retounen atik sa a.",
    note_input: "Deskripsyon",
    note_input_hint: "Dekri rezon pou retounen an ..",
    note_input_message:
      "Dekri rezon pou retounen atik sa a si sa nesesè.",
    media_message:
      "Ou ka telechaje imaj, odyo oswa videyo pwodwi a isit la pou jwenn pi bon sipò pou enfòmasyon sou estati pwodwi a. Chwazi fichye a pral otomatikman voye ak konfime.",
    video: "Videyo",
    voice: "Vwa",
    add_action: "Voye demann retounen",
    notifications: "Demann retounen ou an te anrejistre avèk siksè.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Lòd",
    info: {
      title: "Achte pwodwi Virtual",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Enfòmasyon pèsonèl mwen",
    name: "Non",
    email: "Imèl",
    tel: "Telefòn",
    identity: "Otantifikasyon",
    success_kyc: "Verifye KYC",
    no_kyc: "Pa gen KYC",
    club: "Nivo itilizatè",
    subscription: "Nouvèl abònman",
    leave_shop: "Kite magazen sa a epi retire tout nivo kliyan yo",
    leave_shop_action: "Kite boutik",
    edit_personal_info: "Edit enfòmasyon pèsonèl",
    leave_dialog: {
      title: "Kite boutik",
      message:
        "Dezabònman nan magazen sa a pa pral efase enfòmasyon ak dosye sou lòd ou yo.",
      action: "Kite",
    },
    notifications: {
      leave_success: "Kite boutik",
    },
    club_table: {
      discount: "Rabè",
      limit: "Plafon",
      currency: "Lajan",
      free_shipping: "Livrezon gratis",
    },

    my_profile: {
      title: "Pwofil mwen",
      subtitle: "Sa a se enfòmasyon pwofil kliyan mwen pou boutik la.",
      edit_action: "Modifye pwofil"
    },
    subscribe_status: {
      subscribed: "Mwen abòne pou resevwa dènye nouvèl ak pwomosyon yo pa imel.",
      unsubscribed: "Mwen pa abòne pou resevwa nouvèl oswa pwomosyon pa imel."
    },
    my_club: {
      subtitle: "Nivo klib mwen ak avantaj li yo."
    },
    kyc: {
      subtitle: "Sa a se enfòmasyon idantifikasyon mondyal mwen."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Panier",
    total_price: "Kantite total",
    shipping: "Pri transpò",
    free_shipping: "Livrezon gratis",
    shipping_not_pay: "Pa enkli",
    total_discount: "Rabè total",
    customer_club: "Manm Kliyan Kliyan",
    customer_club_discount: "Rabè manm",
    final_price: "Final Peman",
    lead_time: "Tan preparasyon",
    lead_time_unit: "Lè",
    receive_time: "Tan livrezon pi pito",
    select_time: "Chwazi Tan livrezon",
    no_select_time: "Osito ke posib",
    transportation_type: "Kalite anbake",
    days_input: "Jou livrezon",
    days_input_label: "Jou",
    days_input_no_data: "Chwazi omwen yon jou",
    time_input: "Tan livrezon",
    time_input_label: "Livrezon nan",
    time_input_label_no_data: "Chwazi omwen yon entèval tan",
    support_cod: "Lajan Kach sou livrezon",
    not_support_cod: "Pa kapab peye lokalman!",
    final_confirm_action: "Final konfimasyon lòd",
    pay_and_complete_action: "Peye kounye a",
    pre_confirm_service: "Soumèt demann",
    cross_selling_discount: "Koleksyon rabè",

    errors: {
      no_address: "Chwazi adrès ou vle yo voye lòd ou a.",
      no_phone: "Antre yon nimewo kontak pou kowòdone resi machandiz yo.",
      select_billing_country: "Chwazi peyi ou facturation",
      select_billing_state: "Chwazi rejyon taks ou",
    },
    same_billing_address: "Enfòmasyon sou bòdwo yo menm jan ak enfòmasyon moun k ap resevwa yo",
    same_billing_address_desc:
      "Adrès bòdwo a se menm ak adrès anbake.",
    custom_billing_info: "Diferan enfòmasyon bòdwo",
    custom_billing_info_desc:
      "Ou ka antre nimewo TAX ou a epi mete yon lòt adrès pou voye bòdwo.",
    basket_empty: "Panyen vid",
    extra_shipping_count: "Ou pral resevwa {count} pakè.",
    select_location_error:
      "Jwenn kote ou resevwa chajman an sou kat jeyografik la epi klike sou endikatè ki nan mitan kat la pou detèmine adrès egzak moun k ap resevwa a.",

    billing_business_desc: "Se yon kont biznis ki gen yon nimewo TAX.",
    billing_personal_desc: "Se yon kont pèsonèl.",

    no_billing_title: "Pa gen bòdwo",
    no_billing_desc: "Kite adrès facturation vid.",

    can_pay_cod_message:"Ou kapab peye lòd sa a an kach lè yo livre li.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Lè",
    count_input: "Konte",

    price_changed: "Pri te chanje. nouvo pri:",
    offer: "Jwenn {count}x atik pa {percent}% remise",
    offer_free: "Jwenn {count}x gratis",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Adrès mwen yo",
    subtitle:"Gade adrès ou te sove yo isit la, epi ajoute yon nouvo fasilman.",
    new_action: "Nouvo Adrès",
    receiver: "Moun k ap resevwa",
    address: "Adrès",
    building_no: "plak machin",
    building_unit: "inite",
    postcode: "Kòd postal",
    tel: "Telefòn",
    description: "Remak",

    map: {
      title: "Adrès mwen yo",
      confirm: "Enskripsyon adrès",
      address_type: "Adrès",
      receptor_type: "Moun k ap resevwa",
    },
    add_dialog: {
      title: "Nouvo Adrès Non",
      message: "Antre yon tit pou yon nouvo adrès.",
      address_name_input: "Adrès (obligatwa)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Retounen demann",
    subtitle:"Gade demann retou ou yo isit la. Pou atik ki gen yon règleman retou, ou ka soumèt yon demann retou sou paj lòd la.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Lis dezi",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Kòmantè mwen yo",
    first_post: "Premye pòs",
    last_edit: "Dènye modifye",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Kat kado mwen yo",
    add_action: "Ajoute kat",
    add_card_dialog: {
      title: "Ajoute Kat kado",
      message:
        "Antre nimewo kat la ak kòd sekirite. Y ap ajoute yon kat kado sou kont ou.",
      card_number_input: "Nimewo kat",
      info: "Remak: Lè w ap achte nan magazen an, yo pral montre w opsyon pou peye ak kat kado. Lè w chwazi opsyon sa a, yo pral retire kantite balans rechaj ou a nan kantite kòmann la.",
      add_action: "Enskripsyon kat",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Konpare pwodwi",
    action_button: "Konpare",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Pa gen okenn pwodwi yo te ajoute nan lis la konparezon.",
      price: "Pri",
      type: "Kalite",
      brand: "Mak",
      warranty: "Garanti",
      variants_comparison: "Konpare variantes pwodwi yo",
      spec: "Espesifikasyon teknik",
      pros: "Avantaj",
      cons: "Dezavantaj",
      user_review: "Kòmantè itilizatè yo",
      rating: "Evalyasyon",
      rating_count: "Kantite revize",
      info: "Ou ka pataje tab konparezon pwodwi sa a ak zanmi ou yo lè w voye lyen sa a, oswa jwenn aksè nan li pita lè w sove lyen sa a.",
      copy_action: "Kopi lyen konparezon",
      check_list: ["Wi", "Gen"],
      cross_list: ["Non", "Pa gen"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Sèlman orijinal yo",
    only_has_discount: "Sèlman rabè",
    price_range: "Ranje pri",
    brands: "Mak",
    main_shop_page: "Paj prensipal magazen an",
    home: "Lakay",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Chè {user}, Ou te achte pwodui sa a. Kisa ou panse de pwodui sa a?",
    notification: {
      title: "Felisitasyon",
      message: "Yo anrejistre kòmantè w la.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blòg",
    add_new_blog: "Nouvo blòg",
    popular: "Popilè",
    topics: "Sijè",
    suggestions: "Sijesyon",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Sou nou",
    terms: "Tèm itilizasyon",
    privacy: "Règ sou enfòmasyon prive",
    contact_us: "Kontakte nou",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Kontakte nou fòm",
    name: "Non",
    email: "Imèl",
    phone: "Telefòn",
    message: "Mesaj",
    notifications: {
      success: "Mesaj ou a ale.",
    },
    submitted_title: "Mèsi paske w te kontakte nou!",
    submitted_message:
      "Nou apresye tan ou nan kontakte nou. Nou resevwa mesaj ou a epi ekip nou an ap revize li. Nou pral reponn pi vit posib, epi nou remèsye ou pou pasyans ou pandan tan sa a. Enterè ou ak fidbak yo enpòtan pou nou, epi nou pran angajman pou ba ou pi bon sipò posib.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Konfimasyon Peman",
      payment_success: "Peman fini.",
      buy_title: "Achte",
      pay_by_giftcards: "Yo te peye lòd ou a ak yon kat kado.",
      free_order: "Lòd ou a gratis.",
      pay_by_cod: "Yo te ajoute lòd ou a kòm lajan kach sou livrezon.",
      pay_by_dir:
        "Yo te ajoute lòd ou a avèk siksè. Koulye a, ou ka peye pa transfè lajan dirèk ak Lè sa a, telechaje resi peman an sou paj lòd la.",
      pay_title: "Peman",
      qr_code_payment: "Adrès kòd QR peman kreye.",
      connecting_to_online_gateway: "Konekte ak pòtay peman sou entènèt la.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Rete nan kòmansman an",
    title_between_start_end: "Rete jiska lafen",
    title_after_end: "Fini",
    title_no_start_end: "San peryòd tan!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Ou ka resevwa yon kado pou chak lòd.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kòd koupon",
    add_coupon: "Ajoute koupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Fòm zaboka a pa aktive!",
    last_update: "Dènye aktyalizasyon:",
    step1:
      "1. Antre non ak detay pwodwi ou vle kòmande a, epi klike sou bouton Ajoute a.",
    title_plc: "Antre non pwodwi a.",
    description_plc: "Èske ou gen plis deskripsyon pwodwi?",
    link_plc: "Èske ou gen yon lyen pou pwodwi a?",
    image: "Imaj pwodwi",
    image_msg: "Ou ka voye imaj pwodwi a si sa nesesè.",
    add_item: "Ajoute atik",
    items_list: "Lis pwodwi yo mande yo",
    currency_msg: "Ou dwe peye kantite lajan an nan lòd sa a ak lajan sa a.",
    step2:
      "2. Apre ou fin ajoute tout atik yo vle, klike sou bouton demann revizyon lòd la. Nan etap sa a, nou pral revize lòd la epi fè w konnen sou pri a. Lè w klike sou lyen sa a, w ap kapab wè pri ak lyen peman an.",
    order_action: "Enskripsyon lòd",
    show_all: "Montre tout",
    show_accepted: "Montre Atik Konfime",
    last_orders: "Lis dènye lòd ou yo",
    pending_status: "anba revizyon",
    check_now: "Tcheke lòd",
    add_new_order: "Fè nouvo lòd",
    pay_online: "Peye sou entènèt",
    pricing_not_completed_message:
      "Yo revize lòd ou a. Kòmand ou a pral revize ak pri byento epi ou pral kapab peye lòd la.",

    select_address_message:
      "Tanpri antre adrès ou, epi Lè sa a, ou ka soumèt lòd la.",

    delete_item_dialog: {
      title: "Retire atik nan charyo a",
      message: "Èske ou vle efase atik sa a nan kabwa a?",
      action: "Wi, efase",
    },

    notifications: {
      order_success: "Kòmand ou a te byen plase.",
      delete_success: "Atik efase.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Kreyasyon lòd",
    message:
      "Kreye lis pwodwi ou vle achte pa eskane kòd pwodwi a.",

    currency_msg: "Lajan ou vle peye ak.",
    order_action: "Peman",
    add_new_order: "Nouvo lòd",
    continue_order: "Kontinye lòd",

    delete_item_dialog: {
      title: "Retire atik nan charyo a",
      message: "Èske ou vle efase atik sa a nan kabwa a?",
      action: "Wi, efase",
    },
    notifications: {
      order_success: "Kòmand ou a te byen plase.",
      delete_success: "Atik efase.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Telechaje imaj resi peman an.",
    upload_payment_receipt_done:
      "✔ Ou deja telechaje imaj resi a, tann apwobasyon nou an. Si ou bezwen chanje, ou ka ranplase imaj anvan an ak yon nouvo.",
    public_form_title: "Enfòmasyon sou kont pou transfè lajan",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lis pou fè",
      message: "Espesifye tit travay ou vle fè a epi fè achtè a konnen ki jan li te pwogrese.",
    },
    booking: {
      title: "Anrjistreman / rezèvasyon",
      message: "Lòd sa a pral trete nan yon tan espesifye, kliyan an te chwazi peryòd la vle, si ou vle fè nenpòt chanjman nan peryòd la chwazi, kite kliyan an konnen.",

      selected_checkin: "Chwazi chèk-in pa kliyan",
      selected_checkout: "Chwazi chèk-soti pa kliyan",
      change_days_question:
        "Èske ou bezwen chanje pandan jou kliyan chwazi yo?",
      show_calendar: "Montre Kalandriye Lòd yo",
    },
    pricing: {
      title: "Pri",
      message: "Konbyen ou peye pou sèvis sa a?",
    },
    subscription: {
      title: "Abònman",
      message:
        "Ou ka chwazi peryòd abònman an lè w achte sèvis sa a chak jou. Fè achtè a konnen si ou vle chanje valè default ou te deja antre.",
      duration: "Peryòd abònman",
    },
    charge: {
      title: "Chaje",
      message:
        "Ou te espesifye yon chaj pou atik sa a. Ou ka chanje kantite lajan chaj pou atik la achte pa kliyan an.",
      charge: "Chaje",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Ap tann pou tcheke aksè...",
    no_access_message:
      "Malerezman, ou pa gen aksè nan magazen nou an.<br/> Tanpri kontakte nou.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Pataje lòd",
    title: "Pataje lòd sa a ak lòt moun.",
    message:
      "Li se yon lyen an sekirite, sèlman pataje li ak moun ou konnen yo. Tout moun ki gen lyen sa a ka kopi lòd ou a epi wè adrès ou chwazi a. Li pral genyen enfòmasyon sou kabwa ou ye kounye a.",
    valid_period: "Lyen sa a ap ekspire apre 48 èdtan.",
    import_order_action: "Enpòte lòd",
    retrieve_dialog_title: "Rekipere lòd ekstèn",
    address_included: "Pataje atik panyen + Adrès",
    address_excluded: "Pataje sèlman atik panyen yo",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Pri yo",
    inventory: "Envantè",
    discount: "Rabè",
  },

  rating: {
    product_rating_message:
      "Pwodui sa a te resevwa yon evalyasyon de {rate} sou 5 etwal ak evalye pa {rate_count} moun.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Eksplore!",
      same_tags_subtitle: "Jwenn plis atik ki gen rapò remakab.",
      same_category_subtitle: "Jwenn plis atik remakab nan kategori sa a.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Kòmande {product} ansanm ak",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Gade boutik {vendor}",
  },

  login: {
    welcome: "Byenvini",
  },


};
