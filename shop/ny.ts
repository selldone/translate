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
  surveys: ["Osauka kwambiri", "Osauka", "Wamba", "Zabwino", "Zabwino kwambiri"],

  /** @see SFooterSection **/
  footer: {
    map: "Mapu",
    email: "Imelo",
    phone: "Foni",
    address: "Adilesi",

    copyright:
      "Kugwiritsa ntchito zinthu pazinthu zomwe si zamalonda komanso zokhudzana ndi gwero (ulalo ndi {shop_title}). Ufulu wonse ndi {shop_title}.",
    powered_by: "Mothandizidwa ndi",
    privacy: "Mfundo zazinsinsi",
    term_of_use: "Mgwirizano pazakagwiritsidwe",
    shop_app_setting: "Zogulitsa ndi GDPR",

    dialog_setting: {
      title: "Zokonda pa mapulogalamu a sitolo",
      app_list: "Mndandanda wamapulogalamu",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Zatha",
    review_unit: "Ndemanga",
    not_original: "Osati choyambirira",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Sefa",
    native: {
      title: "Kulowa Ntchito",
      message:
        "Pulogalamuyi ikufuna kupeza zambiri za akaunti yanu yasitolo. Izi zikuphatikiza mwayi wopeza dzina, nambala yolumikizirana, adilesi, imelo, mbiri yamaoda, kuyitanitsa ndi kutumiza ndemanga pasitolo iyi.",
      message_bold:
        "Onetsetsani kuti mukugwiritsa ntchito pulogalamu yovomerezeka ya sitolo kulowa musitoloyi.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sanjani potengera",
    title_small: "Sanjani potengera..",
    nothing: "Palibe",
    most_views: "Malingaliro ambiri",
    most_likes: "Zotchuka Kwambiri",
    most_recent: "Zatsopano",
    most_sell: "Kugulitsa kwambiri",
    cheapest: "Zotsika mtengo",
    most_expensive: "Zokwera mtengo kwambiri",
    only_available: "Likupezeka",
    view_mode: {
      normal: "Wamba",
      grid: "Gridi",
      list: "Mndandanda",
      insta: "Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Zabodza",
    action: "Kugulitsa",
    compare_limit: "10 zinthu malire",
    compare_add: "Onjezani ku Fananizani",
    compare_be_in_list: "Mu kufananiza mndandanda",

    type: "Mtundu",
    brand: "Mtundu",
    category: "Gulu",
    discount: "Kuchotsera",
    track_price: "Tsatani mtengo",
    waiting_for_auction: "Mukuyembekezera malonda?",
    inform_auction: "Ndiuzeni za malonda",
    return_in_days: "{days} Kubwerera kwa Chitsimikizo cha Masiku",
    support24h7: "Thandizani maola 24 masiku 7",
    support_normal: "Thandizo la maola ogwira ntchito",
    original_guarantee: "Chitsimikizo choyambirira",
    cod_payment: "Thandizo la ndalama popereka",

    pros: "Ubwino",
    cons: "kuipa",

    external_link: "Werengani zambiri",
    notifications: {
      congratulation: "Zabwino zonse",
      waiting_list_add_success:
        "Tikudziwitsani malondawa akagulitsidwa.",
      waiting_list_delete_success: "Mwatuluka pamndandanda woyembekezera.",
    },

    offer_message: "Gulani {min_quantity} Pezani kuchotsera {percent}% pa zinthuzi",
    up_to: "Mpaka {per_order}x pa kuyitanitsa",
    get_free: "KHALANI UFULU",
    get_off: "CHOZANI {percent} %.",
    select_a_vendor_message: "Chonde sankhani wogulitsa.",
    product_description_header: "Tikuyambitsa {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Kuyembekezera kupezeka",
    inform_me_when_available: "Mukuyembekezera izi?",
    pay_buy: "Lipirani & Gulani",
    quantity: "Werengani",
    quantity_in_basket: "Zinthu mu ngolo",
    count_unit: "x",
    remove: "Chotsani",
    add_to_basket: "Onjezani kungolo yogulira",
    buy: "Gulani",
    subscribe_now: "Lembetsani Tsopano",
    unsubscribe: "Chotsani kulembetsa",
    select_a_subscription_plan: "Sankhani pulani kaye!",
    manage_subscriptions: "Konzani zolembetsa",
    notifications: {
      inform_add_success: "Tikudziwitsani ikapezeka.",
      inform_remove_success: "Mwachotsedwa pamndandanda wodikirira.",
    },
    zip_pin_input: "ZIP / PIN",
    zip_pin_not_available_msg: "Sikupezeka m’dera lino!",
    zip_pin_placeholder: "Sankhani khodi ya ZIP/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Ndemanga",
    spec: "Mafotokozedwe",
    comments: "Ndemanga",
    price: "Mtengo",
    rate: "Mtengo",
    comment: "Ndemanga",
    warranty: "Chitsimikizo",
    return_policy: "Mfundo PAZAKABWEZEDWE",
    guide: "Wotsogolera",
    shipping: "Manyamulidwe",
    related_products_title: "Zogwirizana nazo",
    related_categories_title: "Dziwani m'zosonkhanitsa",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Mbiri Yamaoda",
      profile: "Mbiri yanga",
      favorites: "Zinthu zomwe mumakonda",
      gift_cards: "Makhadi Amphatso",
      return_requests: "Adabweza Maoda",
      basket: "Ngolo yogulira",
    },
    user_menu: {
      my_shops: "Masitolo Anga",
      go_to_admin: "Sinthani {shop_name}",
      exit_from: "Tulukani {shop_name}",
      chips: "{chips} tchipisi",
    },
    login_to_shop: "Lowani ku sitolo",
    login_to_shop_short: "Lowani muakaunti",
    item_in_basket_message: "{count} Chinthuchi chili m'ngolo yanu.",
    search_title: "Sakani m'sitolo {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Ngolo",
    basket_is_empty: "Ngolo yanu ilibe kanthu.",
    total_price: "Zonse",
    view_basket: "Ngolo Yanu",
    more: "Zambiri ...",
    accept_and_pay: "Onani",
    items: "Zinthu",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Wakanidwa",
    table: {
      code: "Khodi ya oda",
      reserved: "Tsiku",
      delivery_state: "Mkhalidwe wotumizira",
      price: "Mtengo wonse",
      status: "Malipiro Status",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Khodi ya oda",
      items: "Zinthu",
      reserved: "Tsiku",
      delivery_state: "Posachedwapa",
      price: "Mtengo wonse",
      status: "Malipiro Status",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Khadi la Mphatso",
      comments: "Ndemanga",
      favorites: "Zokondedwa",
      return_requests: "Kubwerera",
      addresses: "Maadiresi",
      profile: "mbiri",
      orders: "Malamulo",
      wallets: "Zikwama",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Zikwama zanga",
    subtitle: "Ngati ndinu oyenera ndipo pulogalamu yobweza ndalama ikugwira ntchito, gawo la oda yanu lidzayikidwa mu chikwama chanu. Mutha kugwiritsa ntchito ndalamazi pa kugula kwanu kotsatira."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Ndalama zotsala mu chikwama changa",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Oda",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Malipiro",
      payment_waiting: "Kuyembekezera malipiro",
      payment_completed: "Kulipira",
      table: {
        title: "Mutu",
        amount: "Ndalama",
        description: "Kufotokozera",
      },
      total_payment: "Ndalama zomwe zaperekedwa",
      discount: "Kuchotsera",
      discount_code: "Kodi Kuchotsera",
      delivery_fee: "Mtengo wotumizira",
      delivery_fee_after: "Palibe zotumizira zomwe zalipidwa",

      total_price: "Mtengo Wonse wa Zinthu",
      total_items_discount: "Zinthu Kuchotsera",
      total_price_after_offers: "Zonse pambuyo pofunsira zotsatsa",
      total_order_price_before_tax: "Mtengo Wonse Wopereka msonkho",

      buyer_payment: "Ndalama zolipirira wogula",

      payment_is_in_require_capture_message:
        "Talandira malipiro anu, koma sanatsimikizidwebe.",
      settle_the_earlier_bill_first: "Lilipirani kaye bilu yakale!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Kutumiza",
      subtitle: "Zambiri za ogula",
      confirm_received_action: "Tsimikizirani Chiphaso Chogulitsa",
      confirm_received_info:
        "Dinani batani lotsimikizira ngati mwalandira dongosolo. Ngati pakufunika, mudzatha kutumiza zotumizira ngati mutalandira chitsimikiziro.",
      Recipient: "Wolandira",
      bill: "Inivoyisi",
      name: "Dzina",
      tel: "Foni",
      email: "Imelo",
      country: "Dziko",
      state: "Boma",
      city: "Mzinda",
      address: "Adilesi",
      building_no: "Nambala yomanga",
      unit_no: "Nambala ya unit",
      postal_code: "Positi kodi",
      description: "Kufotokozera",
      order_delivered: "Dongosolo laperekedwa.",
      delivery_time: "Nthawi yoperekera",
      tracking_code: "Kodi kutsatira",
      tracking_url: "Ulalo wotsatira",

      notifications: {
        confirm_delivery: "Kulamula kwanu kwatsimikizika.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Chitsimikizo cha chiyambi cha katundu",
      return: "Bwererani",
      table: {
        product: "Dzina lazogulitsa",
        count: "Werengani",
        unit_price: "Mtengo wagawo",
        total_price: "Mtengo wonse",
        discount: "Kuchotsera",
        final_price: "Mtengo Womaliza",
        returned: "Wabwerera",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Bwererani",
    count_input: "Nambala ya zinthu zomwe zabwezedwa",
    count_input_message: "Mubweza zinthu zingati?",
    reason_input: "Chifukwa chobwerera",
    reason_input_message: "Sankhani chifukwa chobwezera chinthuchi.",
    note_input: "Kufotokozera",
    note_input_hint: "Fotokozani chifukwa chobwerera..",
    note_input_message:
      "Longosolani chifukwa chobwezera chinthuchi ngati chikufunika.",
    media_message:
      "Mutha kukweza chithunzi, zomvera kapena kanema wazogulitsa pano kuti muthandizidwe bwino pazambiri zamalonda. Kusankha wapamwamba adzatumiza basi ndi kutsimikizira.",
    video: "Kanema",
    voice: "Mawu",
    add_action: "Tumizani pempho lobwezera",
    notifications: "Pempho lanu lobweza lalembetsedwa bwino.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Oda",
    info: {
      title: "Chinthu cha digito chogulidwa",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Zambiri Zanga Payekha",
    name: "Dzina",
    email: "Imelo",
    tel: "Foni",
    identity: "Kutsimikizira",
    success_kyc: "KYC yotsimikizika",
    no_kyc: "Palibe KYC",
    club: "Mulingo Wogwiritsa",
    subscription: "Kulembetsa nkhani",
    leave_shop: "Chotsani sitoloyi ndikuchotsa makasitomala onse",
    leave_shop_action: "Chokani shopu",
    edit_personal_info: "Sinthani zambiri zanu",
    leave_dialog: {
      title: "Chokani shopu",
      message:
        "Kusiya kulembetsa ku sitoloyi sikuchotsa zomwe mwaitanitsa komanso zolemba zanu.",
      action: "Chokani",
    },
    notifications: {
      leave_success: "Chokani shopu",
    },
    club_table: {
      discount: "Kuchotsera",
      limit: "Malire",
      currency: "Ndalama",
      free_shipping: "Kutumiza kwaulere",
    },

    my_profile: {
      title: "Mbiri yanga",
      subtitle: "Izi ndi zambiri za mbiri yanga ya kasitomala ya sitolo.",
      edit_action: "Sinthani mbiri"
    },
    subscribe_status: {
      subscribed: "Ndalembetsa kuti ndilandire nkhani zaposachedwa ndi zotsatsa kudzera pa imelo.",
      unsubscribed: "Sindinalembetse kuti ndilandire nkhani kapena zotsatsa kudzera pa imelo."
    },
    my_club: {
      subtitle: "Mulingo wa kalabu yanga ndi maubwino ake."
    },
    kyc: {
      subtitle: "Izi ndi zambiri za chizindikiritso changa chapadziko lonse."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Ngolo yogulira",
    total_price: "Kuchuluka kwake pamodzi",
    shipping: "Mtengo wotumizira",
    free_shipping: "Kutumiza kwaulere",
    shipping_not_pay: "Osaphatikizidwa",
    total_discount: "Kuchotsera kwathunthu",
    customer_club: "Mamembala a Client Club",
    customer_club_discount: "Kuchotsera kwa Membala",
    final_price: "Malipiro Omaliza",
    lead_time: "Nthawi yokonzekera",
    lead_time_unit: "Ola",
    receive_time: "Nthawi yotumizira yomwe mumakonda",
    select_time: "Sankhani Nthawi Yotumizira",
    no_select_time: "Posachedwa pomwe pangathekele",
    transportation_type: "Mtundu wotumizira",
    days_input: "Masiku otumizira",
    days_input_label: "Masiku",
    days_input_no_data: "Sankhani tsiku limodzi",
    time_input: "Nthawi yoperekera",
    time_input_label: "Kutumiza pa",
    time_input_label_no_data: "Sankhani osachepera nthawi imodzi",
    support_cod: "Ndalama potumiza",
    not_support_cod: "Simungathe kulipira kwanuko!",
    final_confirm_action: "Kutsimikizira komaliza",
    pay_and_complete_action: "Lipirani Tsopano",
    pre_confirm_service: "Tumizani pempho",
    cross_selling_discount: "Kuchotsera",

    errors: {
      no_address: "Sankhani adilesi yomwe mukufuna kuti oda yanu atumizidweko.",
      no_phone: "Lowetsani nambala yolumikizirana kuti mugwirizane ndi kulandila katundu.",
      select_billing_country: "Sankhani dziko limene mumalipiritsa",
      select_billing_state: "Sankhani dera lanu lamisonkho",
    },
    same_billing_address: "Zolipiritsa ndizofanana ndi za Wolandira",
    same_billing_address_desc:
      "Adilesi yolipirira ndiyofanana ndi adilesi yotumizira.",
    custom_billing_info: "Zambiri zolipirira",
    custom_billing_info_desc:
      "Mutha kuyika nambala yanu ya TAX ndikukhazikitsa adilesi ina yolipira.",
    basket_empty: "Basket alibe kanthu",
    extra_shipping_count: "Mudzalandira {count} phukusi.",
    select_location_error:
      "Pezani malo olandirira katundu pamapu ndikudina chizindikiro chomwe chili pakati pa mapu kuti mudziwe adilesi yeniyeni ya wolandila.",

    billing_business_desc: "Ndi akaunti yabizinesi yokhala ndi nambala ya TAX.",
    billing_personal_desc: "Ndi akaunti yanu.",

    no_billing_title: "Palibe malipiro",
    no_billing_desc: "Siyani adilesi yolipirira yopanda kanthu.",

    can_pay_cod_message:"Mutha kulipira oda iyi ndi ndalama mukalandira katundu.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Ola",
    count_input: "Werengani",

    price_changed: "Mtengo wasintha. mtengo watsopano:",
    offer: "Pezani {count}x katundu ndi {percent}%.",
    offer_free: "Pezani {count}x kwaulere",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Maadiresi Anga",
    subtitle:"Onani ma adilesi anu osungidwa pano, ndipo onjezani yatsopano mosavuta.",
    new_action: "Adilesi Yatsopano",
    receiver: "Wolandira",
    address: "Adilesi",
    building_no: "pepala lalayisensi",
    building_unit: "Yuniti",
    postcode: "Positi kodi",
    tel: "Foni",
    description: "Zindikirani",

    map: {
      title: "Maadiresi Anga",
      confirm: "Kulembetsa adilesi",
      address_type: "Adilesi",
      receptor_type: "Wolandira",
    },
    add_dialog: {
      title: "Dzina Latsopano Adilesi",
      message: "Lowetsani mutu wa adilesi yatsopano.",
      address_name_input: "Adilesi (yofunikira)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Bweretsani zopempha",
    subtitle:"Onani zopempha zanu zobweza pano. Kwa zinthu zomwe zili ndi ndondomeko yobweza, mutha kutumiza pempho lobweza patsamba la oda.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Zofuna",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Ndemanga Zanga",
    first_post: "Cholemba choyamba",
    last_edit: "Kusintha komaliza",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Makadi Anga Amphatso",
    add_action: "Onjezani khadi",
    add_card_dialog: {
      title: "Onjezani Khadi la Mphatso",
      message:
        "Lowetsani nambala yakhadi ndi nambala yachitetezo. Khadi lamphatso liwonjezedwa ku akaunti yanu.",
      card_number_input: "Nambala yakhadi",
      info: "Chidziwitso: Mukamagula m'sitolo, mudzawonetsedwa mwayi wolipira ndi makadi amphatso. Posankha njira iyi, ndalama za recharge yanu zidzachotsedwa pamtengo woyitanitsa.",
      add_action: "Kulembetsa Makhadi",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Fananizani Zogulitsa",
    action_button: "Yerekezerani",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Palibe zogulitsa zomwe zidawonjezedwa pamndandanda wofananiza.",
      price: "Mtengo",
      type: "Mtundu",
      brand: "Mtundu",
      warranty: "Chitsimikizo",
      variants_comparison: "Fananizani mitundu yazinthu",
      spec: "Mfundo Zaukadaulo",
      pros: "Ubwino",
      cons: "kuipa",
      user_review: "Ndemanga za ogwiritsa ntchito",
      rating: "Muyezo",
      rating_count: "Chiwerengero cha ndemanga",
      info: "Mutha kugawana nawo tebulo lofananizira ndi anzanu potumiza ulalo wotsatirawu, kapena mudzaupeze pambuyo pake posunga ulalowu.",
      copy_action: "Koperani ulalo woyerekezera",
      check_list: ["Inde", "Wachita"],
      cross_list: ["Ayi", "Sanatero"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Zoyambirira zokha",
    only_has_discount: "Kuchotsera",
    price_range: "Mitengo yamitengo",
    brands: "Mtundu",
    main_shop_page: "Sungani tsamba lalikulu",
    home: "Kunyumba",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Wokondedwa {user}, Mwagula izi. Mukuganiza bwanji za mankhwalawa?",
    notification: {
      title: "Zabwino zonse",
      message: "Ndemanga yanu yajambulidwa.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Bulogu",
    add_new_blog: "Bulogu yatsopano",
    popular: "Zotchuka",
    topics: "Mitu",
    suggestions: "Malingaliro",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Zambiri zaife",
    terms: "Mgwirizano pazakagwiritsidwe",
    privacy: "Mfundo zazinsinsi",
    contact_us: "Lumikizanani nafe",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Lumikizanani nafe fomu",
    name: "Dzina",
    email: "Imelo",
    phone: "Foni",
    message: "Uthenga",
    notifications: {
      success: "Uthenga wanu watumizidwa.",
    },
    submitted_title: "Zikomo Potifikira!",
    submitted_message:
      "Timayamikira nthawi yanu yolumikizana nafe. Uthenga wanu walandiridwa ndipo gulu lathu likuwunikanso. Tiyankha posachedwa, ndipo tikukuthokozani chifukwa cha kudekha kwanu panthawiyi. Chidwi chanu ndi ndemanga zanu ndizofunikira kwa ife, ndipo tadzipereka kukupatsani chithandizo chabwino kwambiri.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Kutsimikizira Malipiro",
      payment_success: "Malipiro amalizidwa.",
      buy_title: "Gulani",
      pay_by_giftcards: "Oda yanu idalipidwa ndi khadi lamphatso.",
      free_order: "Oda yanu ndi yaulere.",
      pay_by_cod: "Oda yanu yawonjezedwa ngati ndalama mukabweretsa.",
      pay_by_dir:
        "Oda yanu yawonjezedwa bwino. Tsopano mutha kulipira mwachindunji kutengerapo ndalama ndikukweza chiphaso chamalipiro patsamba la dongosolo.",
      pay_title: "Malipiro",
      qr_code_payment: "Adilesi ya QR yolipira yapangidwa.",
      connecting_to_online_gateway: "Kulumikizana ndi njira yolipira pa intaneti.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Anatsalira kuyambira pachiyambi",
    title_between_start_end: "Anakhalabe mpaka mapeto",
    title_after_end: "Zatha",
    title_no_start_end: "Popanda nthawi!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Mutha kulandira mphatso imodzi pa oda.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kupon kodi",
    add_coupon: "Onjezani kuponi",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Fomu ya avocado siwololedwa!",
    last_update: "Kusintha komaliza:",
    step1:
      "1. Lowetsani dzina ndi tsatanetsatane wa chinthu chomwe mukufuna kuyitanitsa, kenako dinani batani lowonjezera.",
    title_plc: "Lowetsani dzina la malonda.",
    description_plc: "Kodi muli ndi kufotokozera zambiri zamalonda?",
    link_plc: "Kodi muli ndi ulalo wazinthu?",
    image: "Zithunzi Zamalonda",
    image_msg: "Mukhoza kutumiza chithunzi cha mankhwala ngati pakufunika.",
    add_item: "Onjezani chinthu",
    items_list: "Mndandanda wazinthu zomwe mwapemphedwa",
    currency_msg: "Muyenera kulipira kuchuluka kwa odayi ndi ndalamayi.",
    step2:
      "2. Mukawonjezera zinthu zonse zomwe mukufuna, dinani batani la pempho la oda. Pakadali pano, tiwonanso dongosolo ndikudziwitsani za mtengo wake. Podina ulalo uwu, mudzatha kuwona mtengo ndi ulalo wolipira.",
    order_action: "Kulembetsa kuyitanitsa",
    show_all: "Onetsani Zonse",
    show_accepted: "Onetsani Zinthu Zotsimikizika",
    last_orders: "Mndandanda wamaoda anu aposachedwa",
    pending_status: "tikuwunikidwa",
    check_now: "Onani dongosolo",
    add_new_order: "Pangani Dongosolo Latsopano",
    pay_online: "Lipirani pa intaneti",
    pricing_not_completed_message:
      "Zogula zanu zikuwunikidwa. Oda yanu idzawunikidwanso ndikuyika mtengo posachedwa ndipo mudzatha kulipira.",

    select_address_message:
      "Chonde lowetsani adilesi yanu, ndiyeno mutha kutumiza oda.",

    delete_item_dialog: {
      title: "Chotsani chinthucho pangolo yogulira",
      message: "Kodi mukufuna kuchotsa chinthuchi m'ngolo?",
      action: "Inde, chotsani",
    },

    notifications: {
      order_success: "Oda yanu idapangidwa bwino.",
      delete_success: "Chinthu chafufutidwa.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Kuyitanitsa kupanga",
    message:
      "Pangani mndandanda wazinthu zomwe mukufuna kugula posanthula kachidindo.",

    currency_msg: "Ndalama yomwe mukufuna kulipira nayo.",
    order_action: "Malipiro",
    add_new_order: "Dongosolo latsopano",
    continue_order: "Pitirizani kuyitanitsa",

    delete_item_dialog: {
      title: "Chotsani chinthucho pangolo yogulira",
      message: "Kodi mukufuna kuchotsa chinthuchi m'ngolo?",
      action: "Inde, chotsani",
    },
    notifications: {
      order_success: "Oda yanu idapangidwa bwino.",
      delete_success: "Chinthu chafufutidwa.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Kwezani chithunzi cha risiti yolipira.",
    upload_payment_receipt_done:
      "✔ Mwakweza kale chithunzi cha risiti, dikirani kuti tivomereze. Ngati mukufuna kusintha, mutha kusintha chithunzi choyambirira ndi chatsopano.",
    public_form_title: "Zambiri zamaakaunti zotengera ndalama",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Mndandanda wa zochita",
      message: "Tchulani mitu ya ntchito yomwe mukufuna kugwira ndikudziwitsa wogula momwe yapitira patsogolo.",
    },
    booking: {
      title: "Kusungitsa / Kusungitsa",
      message: "Lamuloli lidzakonzedwa panthawi yodziwika, kasitomala wasankha nthawi yomwe akufuna, ngati mukufuna kusintha nthawi yomwe mwasankha, mudziwitse kasitomala.",

      selected_checkin: "Kulowa kosankhidwa ndi kasitomala",
      selected_checkout: "Kutuluka kosankhidwa ndi kasitomala",
      change_days_question:
        "Kodi muyenera kusintha pamasiku omwe kasitomala asankha?",
      show_calendar: "Onetsani Kalendala Yamaoda",
    },
    pricing: {
      title: "Mitengo",
      message: "Kodi mumalipira ndalama zingati pantchitoyi?",
    },
    subscription: {
      title: "Kulembetsa",
      message:
        "Mukhoza kusankha nthawi yolembetsa pogula ntchitoyi tsiku ndi tsiku. Mudziwitse wogula ngati mukufuna kusintha zikhalidwe zomwe mwalowa kale.",
      duration: "Nthawi yolembetsa",
    },
    charge: {
      title: "Kulipiritsa",
      message:
        "Mwatchula mtengo wa chinthuchi. Mutha kusintha kuchuluka kwa mtengo wazinthu zomwe zagulidwa ndi kasitomala.",
      charge: "Kulipiritsa",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Tikudikirira kuwona mwayi wofikira...",
    no_access_message:
      "Tsoka ilo, mulibe mwayi wopita kusitolo yathu.<br/> Chonde titumizireni.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Gawani dongosolo",
    title: "Gawani izi ndi ena.",
    message:
      "Ndi ulalo wotetezedwa, gawanani ndi omwe mumawadziwa okha. Aliyense amene ali ndi ulalowu akhoza kutengera zomwe mwaitanitsa ndikuwona adilesi yomwe mwasankha. Zikhala ndi zambiri zangolo yanu yamakono.",
    valid_period: "Ulalo uwu utha pakatha maola 48.",
    import_order_action: "Kuitanitsa kunja",
    retrieve_dialog_title: "Pezani dongosolo lakunja",
    address_included: "Gawani zinthu za basket + Adilesi",
    address_excluded: "Gawani zinthu zamabasiketi okha",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Mitengo",
    inventory: "Katundu",
    discount: "Kuchotsera",
  },

  rating: {
    product_rating_message:
      "Chogulitsachi chalandila {rate} mwa nyenyezi 5 ndikuvoteledwa ndi anthu {rate_count}.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Onani!",
      same_tags_subtitle: "Pezani zinthu zambiri zofananira.",
      same_category_subtitle: "Pezani zinthu zochititsa chidwi kwambiri m'gululi.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Yitanitsani {product} ndi",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Onani sitolo ya {vendor}",
  },

  login: {
    welcome: "Takulandirani",
  },


};
