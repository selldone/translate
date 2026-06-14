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
  surveys: ["Fqira ħafna", "Miskin", "Normali", "Tajjeb", "Eċċellenti"],

  /** @see SFooterSection **/
  footer: {
    map: "Mappa",
    email: "Posta elettronika",
    phone: "Telefon",
    address: "Indirizz",

    copyright:
      "L-użu tal-kontenut għal skopijiet mhux kummerċjali biss u b'referenza għas-sors (link ma' {shop_title}). Id-drittijiet kollha riżervati għal {shop_title}.",
    powered_by: "Mħaddem minn",
    privacy: "Regoli tal-privatezza",
    term_of_use: "Termini ta 'Użu",
    shop_app_setting: "L-issettjar tal-ħanut u l-GDPR",

    dialog_setting: {
      title: "Issettjar tal-Applikazzjonijiet tal-Ħanut",
      app_list: "Lista ta' applikazzjonijiet",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Mibjuħ",
    review_unit: "Reviżjoni",
    not_original: "Mhux oriġinali",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Iffiltra",
    native: {
      title: "Dħul fl-applikazzjoni",
      message:
        "Din l-app teħtieġ aċċess għall-informazzjoni tal-kont tal-maħżen tiegħek. Dan jinkludi aċċess għall-isem, in-numru tal-kuntatt, l-indirizz, l-email, l-istorja tal-ordnijiet, l-ordnijiet u l-istazzjonar ta’ kummenti fuq dan il-maħżen.",
      message_bold:
        "Kun żgur li tuża l-app tal-maħżen uffiċjali biex tidħol f'dan il-maħżen.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Irranġa skond",
    title_small: "Irranġa skond..",
    nothing: "Xejn",
    most_views: "Ħafna fehmiet",
    most_likes: "L-aktar Popolari",
    most_recent: "L-aktar ġodda",
    most_sell: "L-aktar mibjugħ",
    cheapest: "L-orħos",
    most_expensive: "L-aktar għaljin",
    only_available: "Disponibbli",
    view_mode: {
      normal: "Normali",
      grid: "Grilja",
      list: "Lista",
      insta: "Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Foloz",
    action: "Irkant",
    compare_limit: "Limitu ta' 10 oġġetti",
    compare_add: "Żid biex Qabbel",
    compare_be_in_list: "Fil-lista tqabbel",

    type: "Tip",
    brand: "Marka",
    category: "Kategorija",
    discount: "Roħs",
    track_price: "Prezz tal-binarji",
    waiting_for_auction: "Tistenna l-irkant?",
    inform_auction: "Għidli dwar irkant",
    return_in_days: "{days} Jiem Ritorn ta' Garanzija",
    support24h7: "Appoġġ 24 siegħa 7 ijiem",
    support_normal: "Appoġġ għall-ħinijiet tax-xogħol",
    original_guarantee: "Garanzija oriġinali",
    cod_payment: "Appoġġ fi flus kontanti mal-kunsinna",

    pros: "Vantaġġi",
    cons: "Żvantaġġi",

    external_link: "Aqra iktar",
    notifications: {
      congratulation: "Prosit",
      waiting_list_add_success:
        "Aħna ninnotifikawk meta dan il-prodott jiġi rkantat.",
      waiting_list_delete_success: "Int ħriġt mil-lista ta' stennija tal-irkant.",
    },

    offer_message: "Ixtri {min_quantity} u ikseb skont ta' {percent}% fuq dawn l-oġġetti",
    up_to: "Sa {per_order}x għal kull ordni",
    get_free: "IKOLLOK B'XEJN",
    get_off: "IKOLLOK SKONT TA' {percent}%",
    select_a_vendor_message: "Jekk jogħġbok agħżel bejjiegħ.",
    product_description_header: "Nintroduċu {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Stennija għad-disponibbiltà",
    inform_me_when_available: "Tistenna għal dan?",
    pay_buy: "Ħlas u Ixtri",
    quantity: "Għadd",
    quantity_in_basket: "Oġġetti fil-karrettun",
    count_unit: "x",
    remove: "Neħħi",
    add_to_basket: "Żid mal-karrettun",
    buy: "Ixtri",
    subscribe_now: "Abbona Issa",
    unsubscribe: "Ħassar l-abbonament",
    select_a_subscription_plan: "Agħżel pjan l-ewwel!",
    manage_subscriptions: "Immaniġġja l-abbonamenti",
    notifications: {
      inform_add_success: "Aħna ser tavżak meta tkun disponibbli.",
      inform_remove_success: "Int tneħħejt mil-lista ta' stennija.",
    },
    zip_pin_input: "ZIP / PIN",
    zip_pin_not_available_msg: "Mhux disponibbli f’dan il-post!",
    zip_pin_placeholder: "Agħżel il-kodiċi ZIP/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Reviżjoni",
    spec: "Speċ",
    comments: "Kummenti",
    price: "Prezz",
    rate: "Rata",
    comment: "Ikkummenta",
    warranty: "Garanzija",
    return_policy: "Politika ta' Ritorn",
    guide: "Gwida",
    shipping: "Tbaħħir",
    related_products_title: "Prodotti relatati",
    related_categories_title: "Skopri fil-kollezzjonijiet",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Storja tal-Ordnijiet",
      profile: "Il-profil Tiegħi",
      favorites: "Oġġetti Favoriti",
      gift_cards: "Karti tar-rigal",
      return_requests: "Ordnijiet mibgħuta lura",
      basket: "Karrettun tax-xiri",
    },
    user_menu: {
      my_shops: "L-Imħażen Tiegħi",
      go_to_admin: "Immaniġġja {shop_name}",
      exit_from: "Logħġja minn {shop_name}",
      chips: "{chips} Ċipep",
    },
    login_to_shop: "Idħol fil-Aħżen",
    login_to_shop_short: "Idħol",
    item_in_basket_message: "{count} Dan l-oġġett jinsab fil-karrettun tiegħek.",
    search_title: "Fittex fil-ħanut {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Karrettun",
    basket_is_empty: "Il-karrettun tiegħek huwa vojt.",
    total_price: "Totali",
    view_basket: "Il-karrettun tiegħek",
    more: "Aktar...",
    accept_and_pay: "Iċċekkja",
    items: "Oġġett(i)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Miċħuda",
    table: {
      code: "Kodiċi tal-Ordni",
      reserved: "Data",
      delivery_state: "Status tal-kunsinna",
      price: "Prezz totali",
      status: "Status tal-Ħlas",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Kodiċi tal-Ordni",
      items: "Oġġetti",
      reserved: "Data",
      delivery_state: "L-aħħar status",
      price: "Prezz totali",
      status: "Status tal-Ħlas",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Karta tar-rigal",
      comments: "Kummenti",
      favorites: "Favoriti",
      return_requests: "Ritorni",
      addresses: "Indirizzi",
      profile: "profil",
      orders: "Ordnijiet",
      wallets: "Kartieri",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Il-kartieri tiegħi",
    subtitle: "Jekk inti eliġibbli u programm ta’ cashback huwa attiv, parti mill-ordni tiegħek tiġi kkreditata fil-kartiera tiegħek. Tista’ tuża dawn il-fondi fix-xiri li jmiss tiegħek."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Bilanċ tal-kartiera tiegħi",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Ordni",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Ħlas",
      payment_waiting: "Stennija għall-ħlas",
      payment_completed: "Imħallas",
      table: {
        title: "Titolu",
        amount: "Ammont",
        description: "Deskrizzjoni",
      },
      total_payment: "Ammont imħallas",
      discount: "Roħs",
      discount_code: "Kodiċi ta' Skont",
      delivery_fee: "Spiża tat-tbaħħir",
      delivery_fee_after: "Ebda konsenja mħallsa",

      total_price: "Prezz tal-Oġġetti Totali",
      total_items_discount: "Oġġetti Discount",
      total_price_after_offers: "Total wara l-applikazzjoni tal-offerti",
      total_order_price_before_tax: "Prezz Totali qabel it-taxxa",

      buyer_payment: "Ammont tal-ħlas tax-xerrej",

      payment_is_in_require_capture_message:
        "Irċevejna l-ħlas tiegħek, iżda għadu ma ġiex ikkonfermat.",
      settle_the_earlier_bill_first: "Ħallas il-kont preċedenti l-ewwel!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Kunsinna",
      subtitle: "Informazzjoni tax-xerrej",
      confirm_received_action: "Ikkonferma l-Irċevuta tal-Prodott",
      confirm_received_info:
        "Ikklikkja l-buttuna ta 'konferma jekk irċevejt l-ordni. Jekk meħtieġ, tkun tista' tissottometti referenza jekk tirċievi konferma.",
      Recipient: "Riċevitur",
      bill: "Fattura",
      name: "Isem",
      tel: "Telefon",
      email: "Posta elettronika",
      country: "Pajjiż",
      state: "Stat",
      city: "Belt",
      address: "Indirizz",
      building_no: "Numru tal-bini",
      unit_no: "Numru tal-unità",
      postal_code: "Kodiċi Postali",
      description: "Deskrizzjoni",
      order_delivered: "L-ordni ġiet ikkunsinnata.",
      delivery_time: "Ħin tal-kunsinna",
      tracking_code: "Kodiċi tat-traċċar",
      tracking_url: "URL tat-Traċċar",

      notifications: {
        confirm_delivery: "L-ordni tiegħek hija kkonfermata.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garanzija ta' l-oriġinalità ta' l-oġġetti",
      return: "Ritorn",
      table: {
        product: "Isem tal-Prodott",
        count: "Għadd",
        unit_price: "Prezz unitarju",
        total_price: "Prezz totali",
        discount: "Roħs",
        final_price: "Prezz Finali",
        returned: "Irritornat",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Ritorn",
    count_input: "Numru ta' oġġetti rritornati",
    count_input_message: "Kemm oġġetti tirritorna?",
    reason_input: "Raġuni għar-ritorn",
    reason_input_message: "Agħżel ir-raġuni għar-ritorn ta' dan l-oġġett.",
    note_input: "Deskrizzjoni",
    note_input_hint: "Iddeskrivi r-raġuni għar-ritorn ..",
    note_input_message:
      "Iddeskrivi r-raġuni għar-ritorn ta 'dan l-oġġett jekk meħtieġ.",
    media_message:
      "Tista 'ttella' immaġni, awdjo jew vidjo tal-prodott hawn biex tikseb appoġġ aħjar għall-informazzjoni dwar l-istatus tal-prodott. L-għażla tal-fajl se tibgħat u tikkonferma awtomatikament.",
    video: "Vidjo",
    voice: "Leħen",
    add_action: "Ibgħat it-talba għar-ritorn",
    notifications: "It-talba għar-ritorn tiegħek ġiet irreġistrata b'suċċess.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Ordni",
    info: {
      title: "Prodott Virtwali mixtri",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "L-Informazzjoni Personali Tiegħi",
    name: "Isem",
    email: "Posta elettronika",
    tel: "Telefown",
    identity: "Awtentikazzjoni",
    success_kyc: "KYC verifikata",
    no_kyc: "Ebda KYC",
    club: "Livell tal-Utent",
    subscription: "Abbonament għall-aħbarijiet",
    leave_shop: "Ħalli dan il-maħżen u neħħi l-livell tal-klijenti kollha",
    leave_shop_action: "Ħalli l-ħanut",
    edit_personal_info: "Editja l-informazzjoni personali",
    leave_dialog: {
      title: "Ħalli l-ħanut",
      message:
        "Jekk tneħħi l-abbonament għal dan il-maħżen mhux se tħassar l-informazzjoni u r-rekords tal-ordni tiegħek.",
      action: "Ħalli",
    },
    notifications: {
      leave_success: "Ħalli l-ħanut",
    },
    club_table: {
      discount: "Roħs",
      limit: "Limitu",
      currency: "Munita",
      free_shipping: "Tbaħħir Ħieles",
    },

    my_profile: {
      title: "Il-profil tiegħi",
      subtitle: "Din hija l-informazzjoni tal-profil tiegħi bħala klijent għall-ħanut.",
      edit_action: "Editja l-profil"
    },
    subscribe_status: {
      subscribed: "Jien abbonat biex nirċievi l-aħħar aħbarijiet u promozzjonijiet bl-email.",
      unsubscribed: "M’iniex abbonat biex nirċievi aħbarijiet jew promozzjonijiet bl-email."
    },
    my_club: {
      subtitle: "Il-livell tal-klabb tiegħi u l-benefiċċji tiegħu."
    },
    kyc: {
      subtitle: "Din hija l-informazzjoni tal-identifikazzjoni globali tiegħi."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Karrettun tax-xiri",
    total_price: "Ammont totali",
    shipping: "Spiża tat-tbaħħir",
    free_shipping: "Tbaħħir Ħieles",
    shipping_not_pay: "Mhux inkluż",
    total_discount: "Skont totali",
    customer_club: "Membru Klijent Club",
    customer_club_discount: "Skont tal-Membri",
    final_price: "Ħlas Finali",
    lead_time: "Ħin ta’ preparazzjoni",
    lead_time_unit: "Siegha",
    receive_time: "Ħin tal-kunsinna preferut",
    select_time: "Agħżel il-Ħin tal-Konsenja",
    no_select_time: "Malajr kemm jista 'jkun",
    transportation_type: "Tip ta' trasport bil-baħar",
    days_input: "Ġranet tal-kunsinna",
    days_input_label: "Jiem",
    days_input_no_data: "Agħżel mill-inqas ġurnata waħda",
    time_input: "Ħin tal-kunsinna",
    time_input_label: "Kunsinna fi",
    time_input_label_no_data: "Agħżel mill-inqas intervall ta' ħin wieħed",
    support_cod: "Ħlas mal-kunsinna",
    not_support_cod: "Ma tistax tħallas lokalment!",
    final_confirm_action: "Konferma finali tal-ordni",
    pay_and_complete_action: "Ħallas issa",
    pre_confirm_service: "Ibgħat it-talba",
    cross_selling_discount: "Skont tal-ġbir",

    errors: {
      no_address: "Agħżel l-indirizz fejn trid li l-ordni tiegħek tiġi mibgħuta.",
      no_phone: "Daħħal numru ta' kuntatt biex tikkoordina l-irċevuta tal-merkanzija.",
      select_billing_country: "Agħżel il-pajjiż tal-kontijiet tiegħek",
      select_billing_state: "Agħżel ir-reġjun tat-taxxa tiegħek",
    },
    same_billing_address: "Informazzjoni dwar il-kontijiet l-istess bħall-informazzjoni tar-Riċevitur",
    same_billing_address_desc:
      "L-indirizz tal-kontijiet huwa l-istess bħall-indirizz tat-tbaħħir.",
    custom_billing_info: "Informazzjoni differenti dwar il-kontijiet",
    custom_billing_info_desc:
      "Tista' ddaħħal in-numru tat-TAXXA tiegħek u tissettja indirizz differenti għall-kontijiet.",
    basket_empty: "Basket huwa vojt",
    extra_shipping_count: "Inti ser tirċievi {count} pakketti.",
    select_location_error:
      "Sib il-post tal-wasla tal-konsenja fuq il-mappa u kklikkja fuq l-indikatur fin-nofs tal-mappa biex tiddetermina l-indirizz eżatt tar-riċevitur.",

    billing_business_desc: "Huwa kont tan-negozju b'numru tat-TAXXA.",
    billing_personal_desc: "Huwa kont personali.",

    no_billing_title: "Ebda kontijiet",
    no_billing_desc: "Ħalli l-indirizz tal-kontijiet vojt.",

    can_pay_cod_message:"Tista’ tħallas għal din l-ordni fi flus kontanti mal-kunsinna.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Siegha",
    count_input: "Għadd",

    price_changed: "Il-prezz inbidel. prezz ġdid:",
    offer: "Ikseb {count}x oġġett bi skont ta' {percent}%",
    offer_free: "Ikseb {count}x b'xejn",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "L-indirizzi tiegħi",
    subtitle:"Ara l-indirizzi salvati tiegħek hawn, u żid wieħed ġdid faċilment.",
    new_action: "Indirizz Ġdid",
    receiver: "Riċevitur",
    address: "Indirizz",
    building_no: "pjanċa tal-liċenzja",
    building_unit: "unità",
    postcode: "Kodiċi Postali",
    tel: "Telefown",
    description: "Nota",

    map: {
      title: "L-indirizzi tiegħi",
      confirm: "Reġistrazzjoni ta' l-indirizz",
      address_type: "Indirizz",
      receptor_type: "Riċevitur",
    },
    add_dialog: {
      title: "Isem l-Indirizz Ġdid",
      message: "Daħħal titolu għal indirizz ġdid.",
      address_name_input: "Indirizz (meħtieġa)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Talbiet għar-ritorn",
    subtitle:"Ara t-talbiet għar-ritorn tiegħek hawn. Għal oġġetti b’politika ta’ ritorn, tista’ tibgħat talba għar-ritorn fil-paġna tal-ordni.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Lista tax-xewqat",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Il-Kummenti Tiegħi",
    first_post: "L-ewwel post",
    last_edit: "L-aħħar editjar",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Il-Kards Rigal Tiegħi",
    add_action: "Żid il-karta",
    add_card_dialog: {
      title: "Żid karta tar-rigal",
      message:
        "Daħħal in-numru tal-karta u l-kodiċi tas-sigurtà. Se tiġi miżjuda karta rigal mal-kont tiegħek.",
      card_number_input: "Numru tal-kard",
      info: "Nota: Meta tixtri mill-maħżen, tintwera l-għażla li tħallas b'kards rigal. Billi tagħżel din l-għażla, l-ammont tal-bilanċ mill-ġdid tiegħek se jitnaqqas mill-ammont tal-ordni.",
      add_action: "Reġistrazzjoni tal-Kard",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Qabbel il-Prodott",
    action_button: "Qabbel",

    /** {@see SComparisonList} **/
    list: {
      no_data: "L-ebda prodott ma ġie miżjud mal-lista ta’ tqabbil.",
      price: "Prezz",
      type: "Tip",
      brand: "Marka",
      warranty: "Garanzija",
      variants_comparison: "Qabbel il-varjanti tal-prodott",
      spec: "Speċifikazzjonijiet Tekniċi",
      pros: "Vantaġġi",
      cons: "Żvantaġġi",
      user_review: "Kummenti tal-utenti",
      rating: "Klassifikazzjoni",
      rating_count: "Numru ta' reviżjonijiet",
      info: "Tista' taqsam din it-tabella tal-paragun tal-prodott mal-ħbieb tiegħek billi tibgħat il-link li ġejja, jew taċċessaha aktar tard billi tissejvja din il-link.",
      copy_action: "Ikkopja Link ta' Tqabbil",
      check_list: ["Iva", "Għandu"],
      cross_list: ["Nru", "M'għandux"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Oriġinali biss",
    only_has_discount: "Skontijiet biss",
    price_range: "Firxa tal-prezzijiet",
    brands: "Marka",
    main_shop_page: "Aħżen il-paġna ewlenija",
    home: "Dar",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Għażiż {user}, Int xtrajt dan il-prodott. X'taħseb dwar dan il-prodott?",
    notification: {
      title: "Prosit",
      message: "Il-kumment tiegħek ġie rreġistrat.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Blog Ġdid",
    popular: "Popolari",
    topics: "Suġġetti",
    suggestions: "Suġġerimenti",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Fuqna",
    terms: "Termini ta 'Użu",
    privacy: "Regoli tal-privatezza",
    contact_us: "Ikkuntatjana",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Ikkuntattjana formola",
    name: "Isem",
    email: "Posta elettronika",
    phone: "Telefon",
    message: "Messaġġ",
    notifications: {
      success: "Il-messaġġ tiegħek ġie mibgħut.",
    },
    submitted_title: "Grazzi talli lħaqtna!",
    submitted_message:
      "Napprezzaw il-ħin tiegħek biex tikkuntattjana. Il-messaġġ tiegħek wasal u t-tim tagħna bħalissa qed jirrevedih. Aħna nirrispondu kemm jista 'jkun malajr, u nirringrazzjawkom tal-paċenzja tiegħek matul dan iż-żmien. L-interess u l-feedback tiegħek huma importanti għalina, u aħna impenjati li nipprovdulek l-aħjar appoġġ possibbli.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Konferma tal-Ħlas",
      payment_success: "Ħlas lest.",
      buy_title: "Ixtri",
      pay_by_giftcards: "L-ordni tiegħek tħallset b'karta rigal.",
      free_order: "L-ordni tiegħek hija b'xejn.",
      pay_by_cod: "L-ordni tiegħek ġiet miżjuda bħala flus kontanti mal-kunsinna.",
      pay_by_dir:
        "L-ordni tiegħek ġiet miżjuda b'suċċess. Issa tista 'tħallas permezz ta' trasferiment ta 'flus dirett u mbagħad ittella' l-irċevuta tal-ħlas fuq il-paġna tal-ordni.",
      pay_title: "Ħlas",
      qr_code_payment: "Ħlas l-indirizz tal-kodiċi QR maħluq.",
      connecting_to_online_gateway: "Konnessjoni mal-portal tal-ħlas onlajn.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Baqgħet għall-bidu",
    title_between_start_end: "Baqgħet sal-aħħar",
    title_after_end: "Lest",
    title_no_start_end: "Mingħajr perjodu ta 'żmien!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Tista' tirċievi rigal wieħed għal kull ordni.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kodiċi tal-kupun",
    add_coupon: "Żid il-kupun",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Il-forma tal-avokado mhix attivata!",
    last_update: "L-aħħar aġġornament:",
    step1:
      "1. Daħħal l-isem u d-dettalji tal-prodott li trid tordna u kklikkja l-buttuna Żid.",
    title_plc: "Daħħal l-isem tal-prodott.",
    description_plc: "Għandek aktar deskrizzjonijiet tal-prodott?",
    link_plc: "Għandek link għall-prodott?",
    image: "Immaġni tal-Prodott",
    image_msg: "Tista 'tibgħat l-immaġni tal-prodott jekk meħtieġ.",
    add_item: "Żid oġġett",
    items_list: "Lista ta' prodotti mitluba",
    currency_msg: "Int trid tħallas l-ammont ta 'din l-ordni b'din il-munita.",
    step2:
      "2. Wara li żżid l-oġġetti kollha mixtieqa, ikklikkja fuq il-buttuna tat-talba għal reviżjoni tal-ordni. F'dan l-istadju, aħna se nirrevedu l-ordni u tavżak dwar il-prezz. Billi tikklikkja fuq din il-link, tkun tista' tara l-prezz u l-link tal-ħlas.",
    order_action: "Reġistrazzjoni tal-ordni",
    show_all: "Uri kollox",
    show_accepted: "Uri l-Oġġetti Konfermati",
    last_orders: "Lista tal-ordnijiet riċenti tiegħek",
    pending_status: "taħt reviżjoni",
    check_now: "Iċċekkja l-ordni",
    add_new_order: "Agħmel Ordni Ġdid",
    pay_online: "Ħlas online",
    pricing_not_completed_message:
      "L-ordni tiegħek qed tiġi riveduta. L-ordni tiegħek ser tiġi riveduta u pprezzata dalwaqt u tkun tista' tħallas l-ordni.",

    select_address_message:
      "Jekk jogħġbok daħħal l-indirizz tiegħek, u mbagħad tista 'tissottometti l-ordni.",

    delete_item_dialog: {
      title: "Neħħi l-oġġett mill-karrettun tax-xiri",
      message: "Trid tħassar dan l-oġġett mill-karrettun?",
      action: "Iva, ħassar",
    },

    notifications: {
      order_success: "L-ordni tiegħek tqiegħdet b'suċċess.",
      delete_success: "Oġġett imħassra.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Ħolqien tal-ordni",
    message:
      "Oħloq il-lista tal-prodotti li trid tixtri billi tiskennja l-kodiċi tal-prodott.",

    currency_msg: "Il-munita li trid tħallas biha.",
    order_action: "Ħlas",
    add_new_order: "Ordni ġdida",
    continue_order: "Kompli l-ordni",

    delete_item_dialog: {
      title: "Neħħi l-oġġett mill-karrettun tax-xiri",
      message: "Trid tħassar dan l-oġġett mill-karrettun?",
      action: "Iva, ħassar",
    },
    notifications: {
      order_success: "L-ordni tiegħek tqiegħdet b'suċċess.",
      delete_success: "Oġġett imħassra.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Ittella immaġni tal-irċevuta tal-ħlas.",
    upload_payment_receipt_done:
      "✔ Diġà tellajt l-immaġni tal-irċevuta, stenna l-approvazzjoni tagħna. Jekk għandek bżonn tibdel, tista 'tissostitwixxi l-immaġni preċedenti b'waħda ġdida.",
    public_form_title: "Informazzjoni tal-kont għat-trasferiment tal-flus",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lista ta' affarijiet",
      message: "Speċifika t-titli tax-xogħol li trid tagħmel u ħalli lix-xerrej ikun jaf kemm mexa.",
    },
    booking: {
      title: "Booking / Riservazzjoni",
      message: "Din l-ordni se tiġi pproċessata fi żmien speċifikat, il-klijent għażel il-perjodu mixtieq, jekk trid tagħmel xi tibdil fil-perjodu magħżul, ħalli l-klijent ikun jaf.",

      selected_checkin: "Check-in magħżul mill-klijent",
      selected_checkout: "Check-out magħżul mill-klijent",
      change_days_question:
        "Għandek bżonn tibdel matul il-ġranet magħżula mill-klijent?",
      show_calendar: "Uri l-Kalendarju tal-Ordnijiet",
    },
    pricing: {
      title: "Ipprezzar",
      message: "Kemm titlob għal dan is-servizz?",
    },
    subscription: {
      title: "Abbonament",
      message:
        "Tista' tagħżel il-perjodu ta' abbonament billi tixtri dan is-servizz kuljum. Ħalli lix-xerrej jekk tridx tibdel il-valuri awtomatiċi li diġà daħħalt.",
      duration: "Perjodu ta' abbonament",
    },
    charge: {
      title: "Ħlas",
      message:
        "Int speċifikajt ħlas għal dan l-oġġett. Tista' tibdel l-ammont ta' ħlas għall-oġġett mixtri mill-klijent.",
      charge: "Ħlas",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Stennija biex jiċċekkja l-aċċess...",
    no_access_message:
      "Sfortunatament, m'għandekx aċċess għall-maħżen tagħna.<br/> Jekk jogħġbok ikkuntattjana.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Aqsam l-ordni",
    title: "Aqsam din l-ordni ma 'oħrajn.",
    message:
      "Hija rabta sigura, taqsamha biss ma' dawk li taf. Kull min għandu din il-link jista' jidduplika l-ordni tiegħek u jara l-indirizz magħżul. Se jkun fih informazzjoni dwar il-karrettun attwali tiegħek.",
    valid_period: "Din il-link tiskadi wara 48 siegħa.",
    import_order_action: "Ordni ta 'importazzjoni",
    retrieve_dialog_title: "Irkupra ordni esterna",
    address_included: "Aqsam oġġetti tal-basket + Indirizz",
    address_excluded: "Aqsam biss oġġetti tal-basket",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Prezzijiet",
    inventory: "Inventarju",
    discount: "Roħs",
  },

  rating: {
    product_rating_message:
      "Dan il-prodott irċieva klassifikazzjoni ta' {rate} minn 5 stilel u kklassifikat minn {rate_count} nies.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Esplora!",
      same_tags_subtitle: "Sib oġġetti relatati aktar notevoli.",
      same_category_subtitle: "Sib aktar oġġetti notevoli f'din il-kategorija.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Ordna {product} ma’",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Ara l-ħanut ta’ {vendor}",
  },

  login: {
    welcome: "Merħba",
  },


};
