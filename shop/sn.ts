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
  surveys: ["Murombo zvikuru", "Murombo", "Zvakajairika", "Kugona", "Zvakanakisa"],

  /** @see SFooterSection **/
  footer: {
    map: "Mepu",
    email: "Imeyili",
    phone: "Runhare",
    address: "Kero",

    copyright:
      "Zvirimo zvinogona kushandiswa chete pazvinangwa zvisiri zvekutengeserana uye nekureva kwazvakabva (chinongedzo ne{shop_title}). Kodzero dzese dzakachengeterwa {shop_title}.",
    powered_by: "Inotsigirwa na",
    privacy: "Gwaro rekuvanzika",
    term_of_use: "Mitemo yekushandisa",
    shop_app_setting: "Kurongeka kwechitoro & GDPR",

    dialog_setting: {
      title: "Marongero emaapplication echitoro",
      app_list: "Rondedzero yezvikumbiro",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Zvapera",
    review_unit: "Ongorora",
    not_original: "Kwete yepakutanga",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Sefa",
    native: {
      title: "Kupinda muapplication",
      message:
        "Ichi chishandiso chinoda kuwana ruzivo rweakaundi yako yechitoro. Izvi zvinosanganisira kuwana zita, nhamba yekubata, kero, imeyili, nhoroondo yemahodha, kuodha uye kutumira makomendi pachitoro ichi.",
      message_bold:
        "Iva nechokwadi chekushandisa chishandiso chepamutemo chechitoro kuti upinde muchitoro ichi.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Ronga ne",
    title_small: "Ronga ne..",
    nothing: "Hapana",
    most_views: "Maonero mazhinji",
    most_likes: "Zvinonyanya kufarirwa",
    most_recent: "Zvitsva zvikuru",
    most_sell: "Zvinotengeswa zvakanyanya",
    cheapest: "Zvakachipa zvikuru",
    most_expensive: "Zvakanyanya kudhura",
    only_available: "Inowanikwa",
    view_mode: {
      normal: "Zvakajairika",
      grid: "Giridhi",
      list: "Rondedzero",
      insta: "Maonero eInsta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Yekunyepedzera",
    action: "Okisheni",
    compare_limit: "10 zvinhu zvinogumira",
    compare_add: "Wedzera kuKuenzanisa",
    compare_be_in_list: "Mukuenzanisa rondedzero",

    type: "Rudzi",
    brand: "Mucherechedzo",
    category: "Chikamu",
    discount: "Dzikiso",
    track_price: "Tevera mutengo",
    waiting_for_auction: "Kumirira okisheni?",
    inform_auction: "Ndiudze nezve okisheni",
    return_in_days: "{days} mazuva ewaranti yekudzorera",
    support24h7: "Tsigira maawa makumi maviri nemana nemazuva manomwe",
    support_normal: "Kutsigira maawa ekushanda",
    original_guarantee: "Chekutanga garandi",
    cod_payment: "Mari pakutumira rutsigiro",

    pros: "Zvakanakira",
    cons: "Zvakaipira",

    external_link: "Verenga Zvimwe",
    notifications: {
      congratulation: "Makorokoto",
      waiting_list_add_success:
        "Isu tichakuzivisa iwe kana chigadzirwa ichi chatengeswa.",
      waiting_list_delete_success: "Wabuda muokisheni yekumirira runyorwa.",
    },

    offer_message: "Tenga {min_quantity}, uwane dzikiso ye{percent}% pazvinhu izvi",
    up_to: "Kusvika pa{per_order}x pahodha imwe neimwe",
    get_free: "WANA MAHARA",
    get_off: "WANA {percent}% DZIDZISO",
    select_a_vendor_message: "Ndapota sarudza mutengesi.",
    product_description_header: "Kusuma {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Kumirira kuwanikwa",
    inform_me_when_available: "Kumirira izvi?",
    pay_buy: "Bhadhara & Tenga",
    quantity: "Huwandu",
    quantity_in_basket: "Zvinhu zviri mungoro",
    count_unit: "x",
    remove: "Bvisa",
    add_to_basket: "Wedzera kungoro",
    buy: "Tenga",
    subscribe_now: "Nyorera Izvozvi",
    unsubscribe: "Rega kunyoresa",
    select_a_subscription_plan: "Sarudza chirongwa kutanga!",
    manage_subscriptions: "Tonga zvinyoreso",
    notifications: {
      inform_add_success: "Tichakuzivisai kana yavepo.",
      inform_remove_success: "Wabviswa parondedzero yekumirira.",
    },
    zip_pin_input: "Kodhi yeZIP / PIN",
    zip_pin_not_available_msg: "Hazviwanikwi munzvimbo ino!",
    zip_pin_placeholder: "Sarudza kodhi yeZIP/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Ongorora",
    spec: "Zvimiro",
    comments: "Makomendi",
    price: "Mutengo",
    rate: "Chiyero",
    comment: "Mhinduro",
    warranty: "Waranti",
    return_policy: "Gwaro rekudzorera",
    guide: "Nhungamiro",
    shipping: "Kutumira",
    related_products_title: "Zvigadzirwa zvinoenderana",
    related_categories_title: "Ziva mumiunganidzwa",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Nhoroondo yemahodha",
      profile: "Profaira yangu",
      favorites: "Zvinhu zvandinofarira",
      gift_cards: "Zvipo Makadhi",
      return_requests: "Mahodha akadzoserwa",
      basket: "Ngoro yekutengera",
    },
    user_menu: {
      my_shops: "Zvitoro Zvangu",
      go_to_admin: "Tonga {shop_name}",
      exit_from: "Pinda kunze {shop_name}",
      chips: "{chips} Chipi",
    },
    login_to_shop: "Pinda muchitoro",
    login_to_shop_short: "pinda",
    item_in_basket_message: "{count} Chinhu ichi chiri mungoro yako.",
    search_title: "Tsvaga muchitoro {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Ngoro",
    basket_is_empty: "Ngoro yako haina chinhu.",
    total_price: "Zvese",
    view_basket: "Ngoro yako",
    more: "Zvimwe...",
    accept_and_pay: "Buda",
    items: "Zvinhu",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Rambwa",
    table: {
      code: "Kodhi yeodha",
      reserved: "Zuva",
      delivery_state: "Mamiriro ekutumirwa",
      price: "Mutengo wese",
      status: "Mamiriro ekubhadhara",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Kodhi yeodha",
      items: "Zvinhu",
      reserved: "Zuva",
      delivery_state: "Mamiriro azvino",
      price: "Mutengo wese",
      status: "Mamiriro ekubhadhara",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Kadhi rechipo",
      comments: "Makomendi",
      favorites: "Zvandafarira",
      return_requests: "Zvakadzorerwa",
      addresses: "Kero",
      profile: "profaira",
      orders: "Mahodha",
      wallets: "Mawallet",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Mawallet angu",
    subtitle: "Kana uchikodzera uye chirongwa chekudzoserwa mari chiri kushanda, chikamu cheodha yako chichaiswa muwallet yako. Unogona kushandisa mari iyi pakutenga kwako kunotevera."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Mari iri muwallet yangu",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Odha",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Kubhadhara",
      payment_waiting: "Kumirira kubhadharwa",
      payment_completed: "Yakabhadharwa",
      table: {
        title: "Musoro",
        amount: "Mari",
        description: "Tsanangudzo",
      },
      total_payment: "Mari yakabhadharwa",
      discount: "Dzikiso",
      discount_code: "Kodhi yedzikiso",
      delivery_fee: "Mari yekutumidzira",
      delivery_fee_after: "Hapana kutumira kwakabhadharwa",

      total_price: "Mutengo wese wezvinhu",
      total_items_discount: "Dzikiso yezvinhu",
      total_price_after_offers: "Zvese mushure mekushandisa zvinopihwa",
      total_order_price_before_tax: "Mutengo wese usati wabhadhariswa mutero",

      buyer_payment: "Mutengi kubhadhara mari",

      payment_is_in_require_capture_message:
        "Tagamuchira mubhadharo wako, asi hausati wasimbiswa.",
      settle_the_earlier_bill_first: "Tanga wabhadhara bhiri rapfuura!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Kutumirwa",
      subtitle: "Mutengi ruzivo",
      confirm_received_action: "Simbisa kugamuchirwa kwechigadzirwa",
      confirm_received_info:
        "Dzvanya bhatani rekusimbisa kana wagamuchira odha. Kana zvichidikanwa, iwe unozokwanisa kutumira kutumira kana iwe ukagamuchira simbiso.",
      Recipient: "Mugamuchiri",
      bill: "Inivhoisi",
      name: "Zita",
      tel: "Runhare",
      email: "Imeyili",
      country: "Nyika",
      state: "Dunhu",
      city: "Guta",
      address: "Kero",
      building_no: "Kuvaka nhamba",
      unit_no: "Nhamba yeyuniti",
      postal_code: "Kodhi yepositi",
      description: "Tsanangudzo",
      order_delivered: "Odha yatumirwa.",
      delivery_time: "Nguva yekutumirwa",
      tracking_code: "Kodhi yekutevera",
      tracking_url: "Kutsvaga Url",

      notifications: {
        confirm_delivery: "Odha yako yakasimbiswa.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Waranti yekuti zvinhu ndezvepakutanga",
      return: "Dzoka",
      table: {
        product: "Zita rechigadzirwa",
        count: "Huwandu",
        unit_price: "Mutengo weyuniti",
        total_price: "Mutengo wese",
        discount: "Dzikiso",
        final_price: "Mutengo wekupedzisira",
        returned: "Akadzoka",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Dzoka",
    count_input: "Nhamba yezvinhu zvakadzorerwa",
    count_input_message: "Zvinhu zvingani zvaunodzorera?",
    reason_input: "Chikonzero chekudzoka",
    reason_input_message: "Sarudza chikonzero chekudzosera chinhu ichi.",
    note_input: "Tsanangudzo",
    note_input_hint: "Rondedzera chikonzero chekudzoka..",
    note_input_message:
      "Rondedzera chikonzero chekudzosera chinhu ichi kana zvichidikanwa.",
    media_message:
      "Unogona kurodha mufananidzo, odhiyo kana vhidhiyo yechigadzirwa pano kuti uwane rutsigiro rwuri nani rweruzivo rwechigadzirwa. Kusarudza faira kunotumira otomatiki uye kusimbisa.",
    video: "Vhidhiyo",
    voice: "Izwi",
    add_action: "Tumira chikumbiro chekudzoka",
    notifications: "Chikumbiro chako chekudzoka chanyoreswa zvakabudirira.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Odha",
    info: {
      title: "Chigadzirwa chedhijitari chakatengwa",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Ruzivo Rwangu Paga",
    name: "Zita",
    email: "Imeyili",
    tel: "Runhare",
    identity: "Authentication",
    success_kyc: "Yakasimbiswa KYC",
    no_kyc: "Hapana KYC",
    club: "Chikamu chemushandisi",
    subscription: "Kunyoreswa kwenhau",
    leave_shop: "Siya chitoro ichi uye bvisa mazinga ese evatengi",
    leave_shop_action: "Siya chitoro",
    edit_personal_info: "Rongedza ruzivo rwemunhu",
    leave_dialog: {
      title: "Siya chitoro",
      message:
        "Kusanyoresa kuchitoro ichi hakuzodzime ruzivo rweodha yako uye marekodhi.",
      action: "Siya",
    },
    notifications: {
      leave_success: "Siya chitoro",
    },
    club_table: {
      discount: "Dzikiso",
      limit: "Muganhu",
      currency: "Mari",
      free_shipping: "Kutakurirwa mahara",
    },

    my_profile: {
      title: "Profaira yangu",
      subtitle: "Iri ndiro ruzivo rweprofaira yangu yemutengi muchitoro.",
      edit_action: "Gadzirisa profaira"
    },
    subscribe_status: {
      subscribed: "Ndakanyoresa kugamuchira nhau dzazvino uye kushambadzwa kuburikidza neimeyili.",
      unsubscribed: "Handina kunyoresa kugamuchira nhau kana kushambadzwa kuburikidza neimeyili."
    },
    my_club: {
      subtitle: "Chikamu changu chekirabhu nemabhenefiti acho."
    },
    kyc: {
      subtitle: "Iri ndiro ruzivo rwangu rwekuzivikanwa pasi rose."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Ngoro yekutengera",
    total_price: "Mari yese",
    shipping: "Mari yekutumidzira",
    free_shipping: "Kutakurirwa mahara",
    shipping_not_pay: "Haina kubatanidzwa",
    total_discount: "Dzikiso yese",
    customer_club: "Nhengo yeKirabhu yeVatengi",
    customer_club_discount: "Dzikiso yenhengo",
    final_price: "Kubhadhara kwekupedzisira",
    lead_time: "Nguva yekugadzirira",
    lead_time_unit: "Awa",
    receive_time: "Inodiwa nguva yekutumira",
    select_time: "Sarudza Nguva Yekutumira",
    no_select_time: "Kukurumidza kukuru",
    transportation_type: "Rudzi rwekutumira",
    days_input: "Mazuva ekutumira",
    days_input_label: "Mazuva",
    days_input_no_data: "Sarudza kana zuva rimwe chete",
    time_input: "Nguva yekutumirwa",
    time_input_label: "Kutumirwa pa",
    time_input_label_no_data: "Sarudza kana imwe nguva yekuzorora",
    support_cod: "Mari pakutumirwa",
    not_support_cod: "Haukwanisi kubhadhara munharaunda!",
    final_confirm_action: "Simbiso yekupedzisira yeodha",
    pay_and_complete_action: "Bhadhara izvozvi",
    pre_confirm_service: "Tumira chikumbiro",
    cross_selling_discount: "Dzikiso yemuunganidzwa",

    errors: {
      no_address: "Sarudza kero yaunoda kuti odha yako itumirwe kwairi.",
      no_phone: "Isa nhamba yekubata kuti urongedze kugamuchirwa kwezvinhu.",
      select_billing_country: "Sarudza nyika yako yekubhadhara",
      select_billing_state: "Sarudza nzvimbo yako yemutero",
    },
    same_billing_address: "Ruzivo rwekubhadharisa rwakafanana neruzivo rweMugamuchiri",
    same_billing_address_desc:
      "Kero yekubhadhara yakafanana nekero yekutumira.",
    custom_billing_info: "Ruzivo rwekubhadharisa rwakasiyana",
    custom_billing_info_desc:
      "Unogona kuisa nhamba yako yemutero uye kuseta kero yakasiyana yekubhadharisa.",
    basket_empty: "Dengu harina chinhu",
    extra_shipping_count: "Iwe uchagashira {count} mapakeji.",
    select_location_error:
      "Tsvaga nzvimbo yekugamuchira yekutumira pamepu uye tinya pane chiratidzo chiri pakati pemepu kuti uone kero chaiyo yeanogamuchira.",

    billing_business_desc: "Iakaundi yebhizinesi ine nhamba yemutero.",
    billing_personal_desc: "Iakaundi yako pachako.",

    no_billing_title: "Hapana kubhadhara",
    no_billing_desc: "Siya kero yekubhadhara isina chinhu.",

    can_pay_cod_message:"Unogona kubhadhara odha iyi nemari paunogamuchira kutumirwa.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Awa",
    count_input: "Huwandu",

    price_changed: "Mutengo washanduka. mutengo mutsva:",
    offer: "Wana {count}x chinhu ne{percent}%.",
    offer_free: "Wana {count}x mahara",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Makero angu",
    subtitle:"Ona makero ako akachengetwa pano, uye wedzera idzva zviri nyore.",
    new_action: "Kero Itsva",
    receiver: "Mugamuchiri",
    address: "Kero",
    building_no: "nhamba yechivako",
    building_unit: "yuniti",
    postcode: "Kodhi yepositi",
    tel: "Runhare",
    description: "Cherechedza",

    map: {
      title: "Makero angu",
      confirm: "Kunyoresa kero",
      address_type: "Kero",
      receptor_type: "Mugamuchiri",
    },
    add_dialog: {
      title: "Zita Idzva Kero",
      message: "Isa zita rekero itsva.",
      address_name_input: "Kero (inodiwa)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Dzorera zvikumbiro",
    subtitle:"Ona zvikumbiro zvako zvekudzorera pano. Pazvinhu zvine gwaro rekudzorera, unogona kutumira chikumbiro chekudzorera papeji yeodha.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Rondedzero yezvandinoda",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Maonero angu",
    first_post: "Chinyorwa chekutanga",
    last_edit: "Kupepetwa kwekupedzisira",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Zvipo zvangu Makadhi",
    add_action: "Wedzera kadhi",
    add_card_dialog: {
      title: "Wedzera kadhi rechipo",
      message:
        "Isa nhamba yekadhi uye kodhi yekuchengetedza. Kadhi rechipo richawedzerwa kuaccount yako.",
      card_number_input: "Nhamba yekadhi",
      info: "Cherechedza: Paunenge uchitenga kubva kuchitoro, iwe unozoratidzwa sarudzo yekubhadhara nemakadhi echipo. Nekusarudza sarudzo iyi, huwandu hwemari yako yekuchaja ichabviswa kubva pamari yekuodha.",
      add_action: "Kunyoresa Kadhi",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Enzanisa Chigadzirwa",
    action_button: "Enzanisa",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Hapana zvigadzirwa zvakawedzerwa kune rondedzero yekuenzanisa.",
      price: "Mutengo",
      type: "Rudzi",
      brand: "Mucherechedzo",
      warranty: "Waranti",
      variants_comparison: "Enzanisa zvigadzirwa zvakasiyana",
      spec: "Zvidimbu zvehunyanzvi",
      pros: "Zvakanakira",
      cons: "Zvakaipira",
      user_review: "Mashoko emushandisi",
      rating: "Chiyero",
      rating_count: "Nhamba yeongororo",
      info: "Unogona kugovera tafura iyi yekuenzanisa zvigadzirwa neshamwari dzako nekutumira chinongedzo chinotevera. Uyezve, unogona kuiwana zvakare nekuchengetedza chinongedzo.",
      copy_action: "Kopa chinongedzo chekuenzanisa",
      check_list: ["Ehe", "Inazvo"],
      cross_list: ["Aihwa", "Haana kudaro"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Chekutanga chete",
    only_has_discount: "Yakaderedzwa chete",
    price_range: "Renji yemitengo",
    brands: "Mucherechedzo",
    main_shop_page: "Chengetedza peji guru",
    home: "Kumba",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Wadiwa {user}, Wakatenga chigadzirwa ichi. Unofungei nezvechigadzirwa ichi?",
    notification: {
      title: "Makorokoto",
      message: "Mhinduro yako yakarekodhwa.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Bhulogu",
    add_new_blog: "Bhulogu idzva",
    popular: "Zvinofarirwa",
    topics: "Misoro",
    suggestions: "Mazano",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Nezvedu",
    terms: "Mitemo yekushandisa",
    privacy: "Gwaro rekuvanzika",
    contact_us: "Taura nesu",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Bata nesu fomu",
    name: "Zita",
    email: "Imeyili",
    phone: "Runhare",
    message: "Mharidzo",
    notifications: {
      success: "Shoko renyu ratumirwa.",
    },
    submitted_title: "Tinokutendai neKusvika Kwatiri!",
    submitted_message:
      "Tinokoshesa nguva yako mukutaura nesu. Meseji yako yagamuchirwa uye timu yedu iri kuiongorora parizvino. Tichapindura nekukurumidza sezvinobvira, uye tinokutendai nemoyo murefu wenyu panguva ino. Kufarira kwako uye mhinduro zvakakosha kwatiri, uye takazvipira kukupa iwe nerutsigiro rwakanyanya.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Kubhadhara Kusimbisa",
      payment_success: "Kubhadhara kwapera.",
      buy_title: "Tenga",
      pay_by_giftcards: "Odha yako yakabhadharwa nekadhi rechipo.",
      free_order: "Odha yako ndeyemahara.",
      pay_by_cod: "Odha yako yawedzerwa semari pakutumira.",
      pay_by_dir:
        "Odha yako yawedzerwa zvinobudirira. Iye zvino unogona kubhadhara nekutumira mari zvakananga uye wozoisa risiti yekubhadhara pane peji reodha.",
      pay_title: "Kubhadhara",
      qr_code_payment: "Kubhadhara QR kodhi kero yakagadzirwa.",
      connecting_to_online_gateway: "Kubatanidza kugedhi rekubhadhara repamhepo.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Zvakaramba kusvika pekutanga",
    title_between_start_end: "Rakaramba kusvika kumagumo",
    title_after_end: "Yapera",
    title_no_start_end: "Pasina nguva yenguva!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Unogona kugamuchira chipo chimwe paodha.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kodhi yekuponi",
    add_coupon: "Wedzera kuponi",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Iyo fomu yeavocado haina kugoneswa!",
    last_update: "Kugadziridzwa kwekupedzisira:",
    step1:
      "1. Isa zita uye ruzivo rwechigadzirwa chaunoda kuhodha uye baya bhatani reKuwedzera.",
    title_plc: "Isa zita rechigadzirwa.",
    description_plc: "Iwe une zvimwe zvinotsanangurwa zvechigadzirwa here?",
    link_plc: "Iwe une chinongedzo kune chigadzirwa here?",
    image: "Mufananidzo wechigadzirwa",
    image_msg: "Iwe unogona kutumira mufananidzo wechigadzirwa kana zvichidikanwa.",
    add_item: "Wedzera chinhu",
    items_list: "Rondedzero yezvigadzirwa zvakakumbirwa",
    currency_msg: "Iwe unofanirwa kubhadhara mari yeodha iyi nemari iyi.",
    step2:
      "2. Mushure mekuwedzera zvinhu zvese zvaunoda, tinya bhatani rekukumbira kuongororwa kweodha. Panguva ino, tichaongorora odha uye tokuzivisa nezvemutengo. Nekudzvanya pachinongedzo ichi, unokwanisa kuona mutengo nechokubatanidza chekubhadhara.",
    order_action: "Kunyoresa odha",
    show_all: "Ratidza zvese",
    show_accepted: "Ratidza Zvinhu Zvakasimbiswa",
    last_orders: "Rondedzero yemaodha ako achangoburwa",
    pending_status: "iri kuongororwa",
    check_now: "Tarisa kurongeka",
    add_new_order: "Gadzira odha itsva",
    pay_online: "Bhadhara paIndaneti",
    pricing_not_completed_message:
      "Odha yako iri kuongororwa. Odha yako ichaongororwa uye nemutengo munguva pfupi iri kutevera uye iwe uchakwanisa kubhadhara iyo odha.",

    select_address_message:
      "Ndapota isa kero yako, uye ipapo unogona kutumira odha.",

    delete_item_dialog: {
      title: "Bvisa chinhu kubva mungoro yekutenga",
      message: "Unoda kudzima chinhu ichi mungoro here?",
      action: "Hongu, bvisa",
    },

    notifications: {
      order_success: "Odha yako yakaiswa zvinobudirira.",
      delete_success: "Chinhu chadzimwa.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Odha kugadzira",
    message:
      "Gadzira runyorwa rwezvigadzirwa zvaunoda kutenga nekutarisa kodhi yechigadzirwa.",

    currency_msg: "Mari yaunoda kubhadhara nayo.",
    order_action: "Kubhadhara",
    add_new_order: "Odha itsva",
    continue_order: "Ramba wakarongeka",

    delete_item_dialog: {
      title: "Bvisa chinhu kubva mungoro yekutenga",
      message: "Unoda kudzima chinhu ichi mungoro here?",
      action: "Hongu, bvisa",
    },
    notifications: {
      order_success: "Odha yako yakaiswa zvinobudirira.",
      delete_success: "Chinhu chadzimwa.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Isa mufananidzo werisiti yekubhadhara.",
    upload_payment_receipt_done:
      "✔ Wakatoisa mufananidzo werisiti, mirira kubvumidzwa kwedu. Kana iwe uchida kuchinja, unogona kutsiva mufananidzo wekare neutsva.",
    public_form_title: "Ruzivo rweakaundi yekuendesa mari",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Rondedzero yezvekuita",
      message: "Rondedzera mazita ebasa raunoda kuita uye ita kuti mutengi azive kuti rasvika papi.",
    },
    booking: {
      title: "Kubhuka / Kureserve",
      message: "Ichi chirongwa chichagadziriswa panguva yakatarwa, mutengi akasarudza nguva yaunoda, kana iwe uchida kuita chero shanduko munguva yakasarudzwa, ita kuti mutengi azive.",

      selected_checkin: "Kupinda kwakasarudzwa nemutengi",
      selected_checkout: "Kubuda kwakasarudzwa nemutengi",
      change_days_question:
        "Iwe unofanirwa kuchinja panguva yemutengi akasarudzwa mazuva?",
      show_calendar: "Ratidza Karenda yeOdha",
    },
    pricing: {
      title: "Mitengo",
      message: "Unobhadharisa marii pasevhisi iyi?",
    },
    subscription: {
      title: "Kunyoresa",
      message:
        "Iwe unogona kusarudza nguva yekunyorera nekutenga iyi sevhisi zuva nezuva. Rega mutengi azive kana iwe uchida kushandura maitiro ekutanga awakatopinda.",
      duration: "Nguva yekunyorera",
    },
    charge: {
      title: "Muripo",
      message:
        "Wataura muripo wechinhu ichi. Iwe unogona kushandura mari yechaji yechinhu chakatengwa nemutengi.",
      charge: "Muripo",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Takamirira kutarisa kupinda...",
    no_access_message:
      "Sezvineiwo, haugone kuwana chitoro chedu.<br/> Ndapota taura nesu.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Govera odha",
    title: "Govera odha iyi nevamwe.",
    message:
      "Ichi chinongedzo chakachengeteka; chigovere chete nevanhu vaunoziva. Ani naani ane chinongedzo ichi anogona kutevedzera odha yako uye kuona kero yakasarudzwa. Chichava neruzivo rwegoro rako razvino.",
    valid_period: "Chinongedzo ichi chichapera mushure memaawa 48.",
    import_order_action: "Pinza odha",
    retrieve_dialog_title: "Dzora kurongeka kwekunze",
    address_included: "Govera bhasiketi zvinhu + Kero",
    address_excluded: "Goverana chete zvinhu zvetswanda",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Mitengo",
    inventory: "Stock",
    discount: "Dzikiso",
  },

  rating: {
    product_rating_message:
      "Chigadzirwa ichi chakawana kuyerwa kwe{rate} kubva panyeredzi 5 uye zvakayerwa nevanhu {rate_count}.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Ongorora!",
      same_tags_subtitle: "Tsvaga zvimwe zvinoshamisa zvine hukama.",
      same_category_subtitle: "Tsvaga zvimwe zvinhu zvinoshamisa muchikamu ichi.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Odha {product} pamwe ne",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Ona chitoro cha{vendor}",
  },

  login: {
    welcome: "Mauya",
  },


};
