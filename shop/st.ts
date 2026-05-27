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
  surveys: ["E futsanehileng haholo", "Mafutsana", "Tloaelehileng", "E ntle", "E kgabane"],

  /** @see SFooterSection **/
  footer: {
    map: "'Mapa",
    email: "Imeile",
    phone: "Mohala",
    address: "Aterese",

    copyright:
      "Ts'ebeliso ea litaba e lumelloa feela bakeng sa merero e seng ea khoebo le ka ho supa mohloli (sehokelo le {shop_title}). Litokelo tsohle li boloketsoe {shop_title}.",
    powered_by: "E tsamaisoa ke",
    privacy: "Leano la lekunutu",
    term_of_use: "Lipehelo tsa tšebeliso",
    shop_app_setting: "Litlhophiso tsa mabenkele le GDPR",

    dialog_setting: {
      title: "Reka Litlhophiso tsa Likopo",
      app_list: "Lenane la likopo",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Litekete li felile",
    review_unit: "Hlahloba",
    not_original: "Eseng ea mantlha",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Sefe",
    native: {
      title: "Keno ea Kopo",
      message:
        "Sesebelisoa sena se hloka ho fihlella lintlha tsa akhaonto ea hau ea lebenkele. Sena se kenyelletsa ho fumana lebitso, nomoro ea mohala, aterese, lengolo-tsoibila, nalane ea odara, ho odara le ho beha maikutlo lebenkeleng lena.",
      message_bold:
        "Netefatsa hore o sebelisa sesebelisoa sa semmuso sa lebenkele ho kena lebenkeleng lena.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Hlophisa ka",
    title_small: "Hlophisa ka..",
    nothing: "Ha ho letho",
    most_views: "Maikutlo a mangata",
    most_likes: "Ka ho Fetisisa",
    most_recent: "E ncha ka ho fetisisa",
    most_sell: "Ho rekisa ka ho fetisisa",
    cheapest: "Theko e tlaase ka ho fetisisa",
    most_expensive: "Ka ho fetisisa turu",
    only_available: "E fumaneha",
    view_mode: {
      normal: "Tloaelehileng",
      grid: "Keriti",
      list: "Lenane",
      insta: "Pono ea Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Ea maiketsetso",
    action: "Fantisi",
    compare_limit: "10 lintlha moeli",
    compare_add: "Eketsa ho Bapisa",
    compare_be_in_list: "Lethathamong la ho bapisa",

    type: "Mofuta",
    brand: "Letšoao",
    category: "Sehlopha",
    discount: "Theolelo",
    track_price: "Latela theko",
    waiting_for_auction: "Na o emetse fantisi?",
    inform_auction: "Mpolelle ka fantisi",
    return_in_days: "{days} Ho Khutlisa Tiisetso ea Matsatsi",
    support24h7: "Tšehetsa lihora tse 24 matsatsi a 7",
    support_normal: "Tšehetso ea lihora tsa ho sebetsa",
    original_guarantee: "Tiisetso ea pele",
    cod_payment: "Chelete ea tšehetso ea ho pepa",

    pros: "Melemo",
    cons: "Mebe",

    external_link: "Bala haholoanyane",
    notifications: {
      congratulation: "Mahlohonolo",
      waiting_list_add_success:
        "Re tla u tsebisa ha sehlahisoa sena se fantisoa.",
      waiting_list_delete_success: "U tsoile lethathamong la ba emetseng fantisi.",
    },

    offer_message: "Reka {min_quantity} Fumana phokoletso ea {percent}% bakeng sa thepa ena",
    up_to: "Ho fihla ho {per_order}x ka otara e 'ngoe",
    get_free: "HLOKOMELA",
    get_off: "FUMANA {percent}%.",
    select_a_vendor_message: "Ka kopo, khetha morekisi.",
    product_description_header: "Re hlahisa {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "E emetse ho fumaneha",
    inform_me_when_available: "U emetse see?",
    pay_buy: "Lefa & Reka",
    quantity: "Bala",
    quantity_in_basket: "Lintho tse ka kariking",
    count_unit: "x",
    remove: "Tlosa",
    add_to_basket: "Kenya lenaneng",
    buy: "Reka",
    subscribe_now: "Ngolisa Hona Joale",
    unsubscribe: "Tlosa boingodiso",
    select_a_subscription_plan: "Khetha moralo pele!",
    manage_subscriptions: "Laola lipeeletso",
    notifications: {
      inform_add_success: "Re tla u tsebisa ha e fumaneha.",
      inform_remove_success: "U tlositsoe lethathamong la ba emetseng.",
    },
    zip_pin_input: "Khoutu ea ZIP / PIN",
    zip_pin_not_available_msg: "Ha e fumanehe sebakeng sena!",
    zip_pin_placeholder: "Khetha khoutu ea ZIP/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Hlahloba",
    spec: "Litlhaloso",
    comments: "Maikutlo",
    price: "Theko",
    rate: "Sekhahla",
    comment: "Maikutlo",
    warranty: "Tiisetso",
    return_policy: "LEANO LA THEPA E KHUTLISOANG",
    guide: "Tataiso",
    shipping: "Ho tsamaisa ka sekepe",
    related_products_title: "Lihlahisoa tse amanang",
    related_categories_title: "Fumana ka likoleke",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Litaelo Histori",
      profile: "Boemo ba ka",
      favorites: "Lintho Tse Ratoang",
      gift_cards: "Likarete tsa Limpho",
      return_requests: "Litaelo tse Khutsitsoeng",
      basket: "Koloana ea ho reka",
    },
    user_menu: {
      my_shops: "Mabenkele a Ka",
      go_to_admin: "Laola {shop_name}",
      exit_from: "Tsoha {shop_name}",
      chips: "{chips} Li-chips",
    },
    login_to_shop: "Kena lebenkeleng",
    login_to_shop_short: "kena",
    item_in_basket_message: "{count} Ntho ena e ka kariking ea hau.",
    search_title: "Batla lebenkeleng {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Kariki",
    basket_is_empty: "Kariki ea hau ha e na letho.",
    total_price: "Kakaretso",
    view_basket: "Koloi ea Hao",
    more: "Hape ...",
    accept_and_pay: "Sheba",
    items: "Ntho(li)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Hanoa",
    table: {
      code: "Khoutu ea Odara",
      reserved: "Letsatsi",
      delivery_state: "Boemo ba thomello",
      price: "Kakaretso ea Theko",
      status: "Boemo ba Tefo",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Khoutu ea Odara",
      items: "Lintho",
      reserved: "Letsatsi",
      delivery_state: "Boemo ba moraorao",
      price: "Kakaretso ea Theko",
      status: "Boemo ba Tefo",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Karete ea Mpho",
      comments: "Maikutlo",
      favorites: "Tse ratwang",
      return_requests: "E khutla",
      addresses: "Liaterese",
      profile: "boemo",
      orders: "Litaelo",
      wallets: "Liwalete",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Liwalete tsa ka",
    subtitle: "Haeba u tšoaneleha 'me lenaneo la puseletso ea chelete le sebetsa, karolo ea odara ea hau e tla kenngoa waleteng ea hau. U ka sebelisa chelete ena thekong ea hau e latelang."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Balense ea walete ea ka",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Taelo",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Tefo",
      payment_waiting: "E emetse tefo",
      payment_completed: "E lefelletsoe",
      table: {
        title: "Sehlooho",
        amount: "Chelete",
        description: "Tlhaloso",
      },
      total_payment: "Chelete e lefshoang",
      discount: "Theolelo",
      discount_code: "Khoutu ea theolelo",
      delivery_fee: "Litšenyehelo tsa ho romella",
      delivery_fee_after: "Ha ho delibari e lefuoang",

      total_price: "Kakaretso ea Theko ea Lintho",
      total_items_discount: "Thepa Theolelo",
      total_price_after_offers: "Kakaretso ka mor'a ho kenya kopo",
      total_order_price_before_tax: "Pele ho lekhetho Kakaretso ea Theko",

      buyer_payment: "Chelete ea tefo ea moreki",

      payment_is_in_require_capture_message:
        "Re amohetse tefo ea hau, empa ha e so tšoaroe.",
      settle_the_earlier_bill_first: "Lefa sekoloto sa pele pele!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Phano",
      subtitle: "Lintlha tsa moreki",
      confirm_received_action: "Netefatsa kamohelo ea sehlahisoa",
      confirm_received_info:
        "Tobetsa konopo ea tiiso haeba u fumane taelo. Haeba ho hlokahala, o tla khona ho fana ka lengolo-tsoibila haeba o fumana netefatso.",
      Recipient: "Moamohedi",
      bill: "Faktura",
      name: "Lebitso",
      tel: "Mohala",
      email: "Imeile",
      country: "Naha",
      state: "Naha",
      city: "Motse",
      address: "Aterese",
      building_no: "Nomoro ea mohaho",
      unit_no: "Nomoro ea yuniti",
      postal_code: "Khoutu ea poso",
      description: "Tlhaloso",
      order_delivered: "Odara e fihlile.",
      delivery_time: "Nako ea thomello",
      tracking_code: "Khoutu ea ho sala morao",
      tracking_url: "Ho latela Url",

      notifications: {
        confirm_delivery: "Odara ea hau e netefalitsoe.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Tiisetso ea hore thepa ke ea mantlha",
      return: "Kgutla",
      table: {
        product: "Lebitso la Sehlahiswa",
        count: "Bala",
        unit_price: "Theko ea thepa ka 'ngoe",
        total_price: "Kakaretso ea Theko",
        discount: "Theolelo",
        final_price: "Theko ea ho qetela",
        returned: "Khutsitsoe",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Kgutla",
    count_input: "Nomoro ea lintho tse khutlisitsoeng",
    count_input_message: "U khutlisetsa lintho tse kae?",
    reason_input: "Lebaka la ho khutla",
    reason_input_message: "Khetha lebaka la ho khutlisa ntho ena.",
    note_input: "Tlhaloso",
    note_input_hint: "Hlalosa lebaka la ho khutla ..",
    note_input_message:
      "Hlalosa lebaka la ho khutlisa ntho ena haeba ho hlokahala.",
    media_message:
      "U ka kenya setšoantšo, molumo kapa video ea sehlahisoa mona ho fumana tšehetso e betere bakeng sa tlhaiso-leseling ea boemo ba sehlahisoa. Ho khetha faele ho tla romella le ho netefatsa ka bo eona.",
    video: "Video-khoutu",
    voice: "Lentsoe",
    add_action: "Romela kopo ea ho khutlisa",
    notifications: "Kopo ea hau ea ho khutlisa e ngolisitsoe ka katleho.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Taelo",
    info: {
      title: "Sehlahisoa sa dijithale se rekiloeng",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Lintlha tsa ka tsa Botho",
    name: "Lebitso",
    email: "Imeile",
    tel: "Mohala",
    identity: "Netefatso",
    success_kyc: "KYC e netefalitsoeng",
    no_kyc: "Ha ho KYC",
    club: "Boemo ba mosebelisi",
    subscription: "Ngoliso ea litaba",
    leave_shop: "Tloha lebenkeleng lena 'me u tlose boemo bohle ba bareki",
    leave_shop_action: "Tloha lebenkeleng",
    edit_personal_info: "Fetola lintlha tsa hau",
    leave_dialog: {
      title: "Tloha lebenkeleng",
      message:
        "Ho tlohela ho ingolisa lebenkeleng lena ho ke ke ha hlakola lintlha tsa odara le lirekoto.",
      action: "Tloha",
    },
    notifications: {
      leave_success: "Tloha lebenkeleng",
    },
    club_table: {
      discount: "Theolelo",
      limit: "Moeli",
      currency: "Chelete",
      free_shipping: "Thomello ea mahala",
    },

    my_profile: {
      title: "Profaele ea ka",
      subtitle: "Ena ke tlhahisoleseling ea profaele ea ka ea moreki bakeng sa lebenkele.",
      edit_action: "Fetola profaele"
    },
    subscribe_status: {
      subscribed: "Ke ngoliselitsoe ho fumana litaba tsa morao-rao le lipapatso ka imeile.",
      unsubscribed: "Ha kea ngolisoa ho fumana litaba kapa lipapatso ka imeile."
    },
    my_club: {
      subtitle: "Boemo ba ka ba klabo le melemo ea bona."
    },
    kyc: {
      subtitle: "Ena ke tlhahisoleseling ea ka ea boitsebiso ba lefats'e."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Koloana ea ho reka",
    total_price: "Kakaretso",
    shipping: "Litšenyehelo tsa ho romella",
    free_shipping: "Thomello ea mahala",
    shipping_not_pay: "Ha e kenyelelitsoe",
    total_discount: "Kakaretso ea theolelo",
    customer_club: "Setho sa klabo ea bareki",
    customer_club_discount: "Setho Setheolelo",
    final_price: "Tefo ea ho Qetela",
    lead_time: "Nako ea ho itokisa",
    lead_time_unit: "Hora",
    receive_time: "Nako e khethiloeng ea ho fihla",
    select_time: "Kgetha Nako ya Phepelo",
    no_select_time: "Ka pele ka potlako",
    transportation_type: "Mofuta oa ho romella",
    days_input: "Matsatsi a thomello",
    days_input_label: "Matsatsi",
    days_input_no_data: "Khetha bonyane letsatsi le le leng",
    time_input: "Nako ea thomello",
    time_input_label: "Ho tlisoa ka",
    time_input_label_no_data: "Khetha bonyane nako e le 'ngoe",
    support_cod: "Chelete ha ho tlisoa",
    not_support_cod: "Ha e khone ho lefa sebakeng sa heno!",
    final_confirm_action: "Netefatso ea taelo ea ho qetela",
    pay_and_complete_action: "Lefa Hona Joale",
    pre_confirm_service: "Kenya kopo",
    cross_selling_discount: "Theko ea pokello",

    errors: {
      no_address: "Khetha aterese eo u batlang hore odara ea hau e romelloe ho eona.",
      no_phone: "Kenya nomoro ea mohala ho hokahanya ho amoheloa ha thepa.",
      select_billing_country: "Khetha naha ea hau ea tefiso",
      select_billing_state: "Khetha sebaka sa hau sa lekhetho",
    },
    same_billing_address: "Litaba tsa tefiso li tšoana le tsa Moamoheli",
    same_billing_address_desc:
      "Aterese ea tefiso e tšoana le aterese ea thomello.",
    custom_billing_info: "Lintlha tse fapaneng tsa litefiso",
    custom_billing_info_desc:
      "U ka kenya nomoro ea hau ea lekhetho 'me ua seta aterese e fapaneng bakeng sa tefo.",
    basket_empty: "Kariki ha e na letho",
    extra_shipping_count: "U tla fumana liphutheloana tse {count}.",
    select_location_error:
      "Fumana sebaka seo thomello e romelloang ho sona 'mapeng, 'me u tobetse sesupo se bohareng ba 'mapa ho fumana aterese e nepahetseng ea moamoheli.",

    billing_business_desc: "Ke ak'haonte ea khoebo e nang le nomoro ea lekhetho.",
    billing_personal_desc: "Ke ak'haonte ea hau.",

    no_billing_title: "Ha ho tefiso",
    no_billing_desc: "Tlohela aterese ea tefiso e se na letho.",

    can_pay_cod_message:"U ka lefella odara ena ka chelete ha e tlisoa.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Hora",
    count_input: "Bala",

    price_changed: "Theko e fetohile. theko e ncha:",
    offer: "Fumana phokoletso ea {count}x ka {percent}%.",
    offer_free: "Fumana {count}x mahala",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Liaterese Tsaka",
    subtitle:"Sheba liaterese tsa hau tse bolokiloeng mona, 'me u kenye e ncha habonolo.",
    new_action: "Aterese e Ncha",
    receiver: "Moamoheli",
    address: "Aterese",
    building_no: "nomoro ea mohaho",
    building_unit: "yuniti",
    postcode: "Khoutu ea poso",
    tel: "Mohala",
    description: "Hlokomela",

    map: {
      title: "Liaterese Tsaka",
      confirm: "Ngoliso ea aterese",
      address_type: "Aterese",
      receptor_type: "Moamohedi",
    },
    add_dialog: {
      title: "Lebitso le Lecha la Aterese",
      message: "Kenya sehlooho bakeng sa aterese e ncha.",
      address_name_input: "Aterese (ea hlokahala)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Khutlisa likopo",
    subtitle:"Sheba likopo tsa hau tsa ho khutlisa mona. Bakeng sa lintho tse nang le leano la ho khutlisa, u ka kenya kopo ea ho khutlisa leqepheng la odara.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Lenane la litakatso",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Maikutlo a ka",
    first_post: "Poso ea pele",
    last_edit: "Phetoho ea ho qetela",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Likarete Tsa Limpho Tsa Ka",
    add_action: "Kenya karete",
    add_card_dialog: {
      title: "Kenya Karete ea Limpho",
      message:
        "Kenya nomoro ea karete le khoutu ea ts'ireletso. Karete ea limpho e tla kenngoa akhaonteng ea hau.",
      card_number_input: "Nomoro ea karete",
      info: "Tlhokomeliso: Ha u reka lebenkeleng, u tla bontšoa khetho ea ho lefa ka likarete tsa limpho. Ka ho khetha khetho ena, chelete eo u e rekang e tla ntšoa ho chelete ea odara.",
      add_action: "Ngoliso ea Karete",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Bapisa Sehlahisoa",
    action_button: "Bapisa",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Ha ho lihlahisoa tse kentsoeng lenaneng la papiso.",
      price: "Theko",
      type: "Mofuta",
      brand: "Letšoao",
      warranty: "Tiisetso",
      variants_comparison: "Bapisa mefuta e fapaneng ea lihlahisoa",
      spec: "Litlhaloso tsa Tekheniki",
      pros: "Melemo",
      cons: "Mebe",
      user_review: "Maikutlo a basebelisi",
      rating: "Lintlha",
      rating_count: "Palo ea maikutlo",
      info: "U ka arolelana tafole ena ea papiso ea sehlahisoa le metsoalle ea hau ka ho romella sehokelo se latelang, kapa ho se fumana hamorao ka ho boloka sehokelo sena.",
      copy_action: "Kopitsa Sehokelo sa Papiso",
      check_list: ["Ee", "E na le"],
      cross_list: ["Che", "Ha e so e etse"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Ke tsa mantlha feela",
    only_has_discount: "E theotsoe feela",
    price_range: "Theko e fapaneng",
    brands: "Letšoao",
    main_shop_page: "Boloka leqephe la sehlooho",
    home: "Lehae",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Ratehang {user}, U rekile sehlahisoa sena. U nahana'ng ka sehlahisoa see?",
    notification: {
      title: "Bokang",
      message: "Maikutlo a hau a tlalehiloe.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blogo",
    add_new_blog: "Blogo e ncha",
    popular: "Tse tumileng",
    topics: "Lihlooho",
    suggestions: "Litlhahiso",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Mabapi le rona",
    terms: "Lipehelo tsa tšebeliso",
    privacy: "Leano la lekunutu",
    contact_us: "Iteanye le rona",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Ikopanye le rona ka foromo",
    name: "Lebitso",
    email: "Imeile",
    phone: "Mohala",
    message: "Molaetsa",
    notifications: {
      success: "Molaetsa oa hau o rometsoe.",
    },
    submitted_title: "Kea Le leboha ka ho Re Phetlela!",
    submitted_message:
      "Re ananela nako ea hau ea ho iteanya le rona. Molaetsa oa hau o amohetsoe 'me sehlopha sa rona se ntse se o hlahloba. Re tla arabela kapele kamoo ho ka khonehang, 'me re leboha mamello ea hau nakong ena. Thahasello ea hau le maikutlo a hau ke tsa bohlokoa ho rona, 'me re ikemiselitse ho u fa tšehetso e molemo ka ho fetisisa.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Netefatso ya Tefo",
      payment_success: "Tefo e phethiloe.",
      buy_title: "Reka",
      pay_by_giftcards: "Odara ea hau e lefiloe ka karete ea mpho.",
      free_order: "Odara ea hau ke mahala.",
      pay_by_cod: "Odara ea hau e kentsoe joalo ka chelete ha o fihla.",
      pay_by_dir:
        "Odara ea hau e kentsoe ka katleho. Hona joale o ka lefa ka ho fetisetsa chelete ka kotloloho ebe o kenya rasiti ea tefo leqepheng la odara.",
      pay_title: "Tefo",
      qr_code_payment: "Aterese ea khoutu ea QR ea tefo e entsoe.",
      connecting_to_online_gateway: "E hokahana le tsela ea ho lefa ea inthaneteng.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "E sala ho tloha qalong",
    title_between_start_end: "E sala ho fihlela qetellong",
    title_after_end: "E felile",
    title_no_start_end: "Ntle le nako!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "U ka fumana mpho e le 'ngoe ka odara.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Setlankane khoutu",
    add_coupon: "Kenya setlankane",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Sebopeho sa avocado ha se sebetse!",
    last_update: "Nchafatso ea ho qetela:",
    step1:
      "1. Kenya lebitso le lintlha tsa sehlahisoa seo u batlang ho se odara ebe u tobetsa konopo ea Kenya.",
    title_plc: "Kenya lebitso la sehlahisoa.",
    description_plc: "O na le litlhaloso tse ling tsa sehlahisoa?",
    link_plc: "O na le sehokelo sa sehlahisoa?",
    image: "Setšoantšo sa Sehlahisoa",
    image_msg: "U ka romela setšoantšo sa sehlahisoa haeba ho hlokahala.",
    add_item: "Kenya ntho",
    items_list: "Lethathamo la lihlahisoa tse kopiloeng",
    currency_msg: "U tlameha ho lefa chelete ea odara ena ka chelete ena.",
    step2:
      "2. Kamora ho kenyelletsa lintho tsohle tse lakatsehang, tobetsa konopo ea kopo ea tlhahlobo ea odara. Mothating ona, re tla hlahloba odara mme re u tsebise ka theko. Ka ho tobetsa sehokelo sena, u tla khona ho bona sehokelo sa theko le tefo.",
    order_action: "Ngoliso ea taelo",
    show_all: "Bontša Tsohle",
    show_accepted: "Hlahisa Lintho Tse Tiisitsoeng",
    last_orders: "Lenane la liodara tsa hau tsa morao-rao",
    pending_status: "e hlahlojoang",
    check_now: "Sheba taelo",
    add_new_order: "Etsa Tlhophiso e Ncha",
    pay_online: "Lefa inthaneteng",
    pricing_not_completed_message:
      "Odara ea hau e ntse e hlahlojoa. Odara ea hau e tla hlahlojoa le ho rekoa theko haufinyane 'me u tla khona ho lefa odara.",

    select_address_message:
      "Ka kopo, kenya aterese ea hau, 'me u ka fana ka odara.",

    delete_item_dialog: {
      title: "Tlosa ntho kariking ea ho reka",
      message: "O batla ho hlakola ntho ee kariking?",
      action: "E, hlakola",
    },

    notifications: {
      order_success: "Odara ea hau e entsoe ka katleho.",
      delete_success: "Ntho e hlakotsoe.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Tlhophiso ea taelo",
    message:
      "Etsa lethathamo la lihlahisoa tseo u batlang ho li reka ka ho hlahloba khoutu ea sehlahisoa.",

    currency_msg: "Chelete eo u batlang ho lefa ka eona.",
    order_action: "Tefo",
    add_new_order: "Taelo e ncha",
    continue_order: "Tsoela pele ka taelo",

    delete_item_dialog: {
      title: "Tlosa ntho kariking ea ho reka",
      message: "O batla ho hlakola ntho ee kariking?",
      action: "E, hlakola",
    },
    notifications: {
      order_success: "Odara ea hau e entsoe ka katleho.",
      delete_success: "Ntho e hlakotsoe.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Kenya setšoantšo sa rasiti ea tefo.",
    upload_payment_receipt_done:
      "✔ U se u kentse setšoantšo sa rasiti, emela tumello ea rona. Haeba o hloka ho fetola, o ka nkela setšoantšo se fetileng sebaka ka se secha.",
    public_form_title: "Lintlha tsa akhaonto bakeng sa phetiso ea chelete",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lenane la lintho tse lokelang ho etsoa",
      message: "Hlalosa litlotla tsa mosebetsi oo u batlang ho o etsa 'me u tsebise moreki hore na o tsoetse pele hakae.",
    },
    booking: {
      title: "Peeletso / Ho behella",
      message: "Taelo ena e tla sebetsoa ka nako e behiloeng, moreki o khethile nako e lakatsehang, haeba u batla ho etsa liphetoho leha e le life nakong e khethiloeng, tsebisa moreki.",

      selected_checkin: "Khetho ea ho kena ke moreki",
      selected_checkout: "Ho tsoa ho tsoa ho moreki",
      change_days_question:
        "Na u hloka ho fetoha matsatsing a khethiloeng ke moreki?",
      show_calendar: "Bontša Khalendara ea Litaelo",
    },
    pricing: {
      title: "Theko",
      message: "O lefisa bokae bakeng sa tshebeletso ee?",
    },
    subscription: {
      title: "Ngoliso",
      message:
        "U ka khetha nako ea ho ngolisa ka ho reka tšebeletso ena letsatsi le leng le le leng. Tsebisa moreki haeba o batla ho fetola boleng ba kamehla boo o seng o bo kentse.",
      duration: "Nako ea ho ngolisa",
    },
    charge: {
      title: "Tefiso",
      message:
        "U boletse tefiso ea ntho ena. U ka fetola chelete ea tefiso bakeng sa ntho e rekiloeng ke moreki.",
      charge: "Tefiso",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "E emetse ho hlahloba phihlello...",
    no_access_message:
      "Ka bomalimabe, ha u khone ho kena lebenkeleng la rona.<br/> Ka kopo ikopanye le rona.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Arolelana odara",
    title: "Arolelana odara ena le ba bang.",
    message:
      "Ke sehokelo se sireletsehileng, se arolelane feela le bao u ba tsebang. Motho e mong le e mong ea nang le sehokelo sena a ka kopitsa odara ea hau mme a bona aterese e khethiloeng. E tla ba le lintlha mabapi le kariki ea hau ea hajoale.",
    valid_period: "Sehokelo sena se tla felloa ke nako ka mor'a lihora tse 48.",
    import_order_action: "Odara kantle",
    retrieve_dialog_title: "Fumana odara ea kantle",
    address_included: "Arolelana lintho tsa baskete + Aterese",
    address_excluded: "Arolelana feela lintho tsa baskete",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Litheko",
    inventory: "Setoko",
    discount: "Theolelo",
  },

  rating: {
    product_rating_message:
      "Sehlahisoa sena se fumane lintlha tse {rate} ho linaleli tse 5 'me li fuoe batho ba {rate_count}.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Tseba!",
      same_tags_subtitle: "Fumana lintlha tse eketsehileng tse amanang le tsona.",
      same_category_subtitle: "Fumana lintho tse ling tse ikhethang sehlopheng sena.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Odara {product} le",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Sheba lebenkele la {vendor}",
  },

  login: {
    welcome: "Rea u amohela",
  },


};
