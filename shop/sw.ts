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
  surveys: ["Maskini sana", "Maskini", "Kawaida", "Nzuri", "Bora kabisa"],

  /** @see SFooterSection **/
  footer: {
    map: "Ramani",
    email: "Barua pepe",
    phone: "Simu",
    address: "Anwani",

    copyright:
      "Matumizi ya maudhui kwa madhumuni yasiyo ya kibiashara pekee na kwa kurejelea chanzo (kiungo na {shop_title}). Haki zote zimehifadhiwa kwa {shop_title}.",
    powered_by: "Kinatumia",
    privacy: "Sera ya faragha",
    term_of_use: "Masharti ya matumizi",
    shop_app_setting: "Mipangilio ya duka na GDPR",

    dialog_setting: {
      title: "Mipangilio ya Maombi ya duka",
      app_list: "Orodha ya maombi",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Imeuzwa",
    review_unit: "Kagua",
    not_original: "Sio asili",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Chuja",
    native: {
      title: "Ingia kwa Maombi",
      message:
        "Programu hii inahitaji ufikiaji wa maelezo ya akaunti yako ya duka. Hii inajumuisha ufikiaji wa jina, nambari ya mawasiliano, anwani, barua pepe, historia ya agizo, kuagiza na kuchapisha maoni kwenye duka hili.",
      message_bold:
        "Hakikisha unatumia programu rasmi ya duka kuingia kwenye duka hili.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Panga kwa",
    title_small: "Panga kwa..",
    nothing: "Hakuna",
    most_views: "Maoni mengi",
    most_likes: "Maarufu sana",
    most_recent: "Mpya zaidi",
    most_sell: "Mauzo mazuri",
    cheapest: "Nafuu zaidi",
    most_expensive: "Ghali zaidi",
    only_available: "Inapatikana",
    view_mode: {
      normal: "Kawaida",
      grid: "Gridi",
      list: "Orodha",
      insta: "Mwonekano wa Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Bandia",
    action: "Mnada",
    compare_limit: "Vipengee 10 vikomo",
    compare_add: "Ongeza kwa Kulinganisha",
    compare_be_in_list: "Katika orodha ya kulinganisha",

    type: "Aina",
    brand: "Chapa",
    category: "Kategoria",
    discount: "Punguzo",
    track_price: "Fuatilia bei",
    waiting_for_auction: "Unasubiri mnada?",
    inform_auction: "Niambie kuhusu mnada",
    return_in_days: "{days} Kurudi kwa Dhamana ya Siku",
    support24h7: "Msaada masaa 24 siku 7",
    support_normal: "Usaidizi wa saa za kazi",
    original_guarantee: "Dhamana ya asili",
    cod_payment: "Pesa kwa usaidizi wa utoaji",

    pros: "Faida",
    cons: "Hasara",

    external_link: "Soma zaidi",
    notifications: {
      congratulation: "Hongera sana",
      waiting_list_add_success:
        "Tutakuarifu bidhaa hii itakapouzwa kwa mnada.",
      waiting_list_delete_success: "Umetoka kwenye orodha ya wanaosubiri katika mnada.",
    },

    offer_message: "Nunua {min_quantity} Pata punguzo la {percent}% kwa bidhaa hizi",
    up_to: "Hadi {per_order}x kwa kila agizo",
    get_free: "PATA BURE",
    get_off: "PATA PUNGUZO la {percent}%.",
    select_a_vendor_message: "Tafadhali chagua mchuuzi.",
    product_description_header: "Tunakuletea {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Inasubiri upatikanaji",
    inform_me_when_available: "Unasubiri hili?",
    pay_buy: "Lipa na Ununue",
    quantity: "Hesabu",
    quantity_in_basket: "Vipengee kwenye toroli",
    count_unit: "x",
    remove: "Ondoa",
    add_to_basket: "Ongeza kwenye rukwama",
    buy: "Nunua",
    subscribe_now: "Jisajili Sasa",
    unsubscribe: "Jiondoe",
    select_a_subscription_plan: "Chagua mpango kwanza!",
    manage_subscriptions: "Dhibiti usajili",
    notifications: {
      inform_add_success: "Tutakujulisha itakapopatikana.",
      inform_remove_success: "Umeondolewa kwenye orodha ya wanaosubiri.",
    },
    zip_pin_input: "Msimbo wa ZIP / PIN",
    zip_pin_not_available_msg: "Haipatikani katika eneo hili!",
    zip_pin_placeholder: "Chagua msimbo wa ZIP/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Kagua",
    spec: "Maalum",
    comments: "Maoni",
    price: "Bei",
    rate: "Kiwango",
    comment: "Maoni",
    warranty: "Udhamini",
    return_policy: "Sera ya Kurudisha",
    guide: "Mwongozo",
    shipping: "Usafirishaji",
    related_products_title: "Bidhaa zinazohusiana",
    related_categories_title: "Gundua katika mikusanyiko",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Historia ya Maagizo",
      profile: "Wasifu Wangu",
      favorites: "Vipengee Vipendwa",
      gift_cards: "Kadi ya Zawadi",
      return_requests: "Amri Zilizorejeshwa",
      basket: "Kikapu cha ununuzi",
    },
    user_menu: {
      my_shops: "Maduka Yangu",
      go_to_admin: "Dhibiti {shop_name}",
      exit_from: "Ondoka kwa {shop_name}",
      chips: "{chips} sarafu",
    },
    login_to_shop: "Ingia kwenye Hifadhi",
    login_to_shop_short: "Ingia",
    item_in_basket_message: "{count} Bidhaa hii iko kwenye rukwama yako.",
    search_title: "Tafuta dukani {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Mkokoteni",
    basket_is_empty: "Rukwama yako haina chochote.",
    total_price: "Jumla",
    view_basket: "Mkokoteni Wako",
    more: "Zaidi ...",
    accept_and_pay: "Angalia",
    items: "Bidhaa",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Imekataliwa",
    table: {
      code: "Kanuni ya Agizo",
      reserved: "Tarehe",
      delivery_state: "Hali ya utoaji",
      price: "Bei jumla",
      status: "Hali ya Malipo",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Kanuni ya Agizo",
      items: "Vipengee",
      reserved: "Tarehe",
      delivery_state: "Hali ya hivi punde",
      price: "Bei jumla",
      status: "Hali ya Malipo",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Kadi ya Zawadi",
      comments: "Maoni",
      favorites: "Vipendwa",
      return_requests: "Inarudi",
      addresses: "Anwani",
      profile: "wasifu",
      orders: "Maagizo",
      wallets: "Pochi",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Pochi zangu",
    subtitle: "Ikiwa unastahiki na mpango wa kurejeshewa fedha unatumika, sehemu ya agizo lako itawekwa kwenye pochi yako. Unaweza kutumia fedha hizi katika ununuzi wako unaofuata."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Salio la pochi yangu",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Agizo",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Malipo",
      payment_waiting: "Inasubiri malipo",
      payment_completed: "Imelipwa",
      table: {
        title: "Kichwa",
        amount: "Kiasi",
        description: "Maelezo",
      },
      total_payment: "Kiasi kilicholipwa",
      discount: "Punguzo",
      discount_code: "Msimbo wa Punguzo",
      delivery_fee: "Gharama ya usafirishaji",
      delivery_fee_after: "Hakuna utoaji uliolipwa",

      total_price: "Bei ya Jumla ya Bidhaa",
      total_items_discount: "Punguzo la Bidhaa",
      total_price_after_offers: "Jumla baada ya kutuma ofa",
      total_order_price_before_tax: "Jumla ya Bei ya Kabla ya Kodi",

      buyer_payment: "Kiasi cha malipo ya mnunuzi",

      payment_is_in_require_capture_message:
        "Tumepokea malipo yako, lakini bado hayajathibitishwa.",
      settle_the_earlier_bill_first: "Lipa bili ya awali kwanza!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Uwasilishaji",
      subtitle: "Taarifa za mnunuzi",
      confirm_received_action: "Thibitisha Risiti ya Bidhaa",
      confirm_received_info:
        "Bonyeza kitufe cha uthibitisho ikiwa umepokea agizo. Ikihitajika, utaweza kuwasilisha rufaa ukipokea uthibitisho.",
      Recipient: "Mpokeaji",
      bill: "ankara",
      name: "Jina",
      tel: "Simu",
      email: "Barua pepe",
      country: "Nchi",
      state: "Jimbo",
      city: "Jiji",
      address: "Anwani",
      building_no: "Nambari ya jengo",
      unit_no: "Nambari ya kitengo",
      postal_code: "Msimbo wa posta",
      description: "Maelezo",
      order_delivered: "Agizo limewasilishwa.",
      delivery_time: "Wakati wa utoaji",
      tracking_code: "Msimbo wa ufuatiliaji",
      tracking_url: "URL ya Kufuatilia",

      notifications: {
        confirm_delivery: "Agizo lako limethibitishwa.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Dhamana ya uhalisi wa bidhaa",
      return: "Rudi",
      table: {
        product: "Jina la bidhaa",
        count: "Hesabu",
        unit_price: "Bei ya kitengo",
        total_price: "Bei jumla",
        discount: "Punguzo",
        final_price: "Bei ya Mwisho",
        returned: "Imerejeshwa",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Rudi",
    count_input: "Idadi ya vitu vilivyorejeshwa",
    count_input_message: "Je, unarudisha vitu vingapi?",
    reason_input: "Sababu ya kurudi",
    reason_input_message: "Chagua sababu ya kurejesha kipengee hiki.",
    note_input: "Maelezo",
    note_input_hint: "Eleza sababu ya kurudi..",
    note_input_message:
      "Eleza sababu ya kurejesha bidhaa hii ikiwa inahitajika.",
    media_message:
      "Unaweza kupakia picha, sauti au video ya bidhaa hapa ili kupata usaidizi bora kwa maelezo ya hali ya bidhaa. Kuchagua faili itatuma na kuthibitisha kiotomatiki.",
    video: "Klipu ya video",
    voice: "Sauti",
    add_action: "Tuma ombi la kurejesha",
    notifications: "Ombi lako la kurejesha limesajiliwa kwa ufanisi.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Agizo",
    info: {
      title: "Bidhaa Pepe iliyonunuliwa",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Taarifa Zangu Binafsi",
    name: "Jina",
    email: "Barua pepe",
    tel: "Simu",
    identity: "Uthibitisho",
    success_kyc: "KYC iliyothibitishwa",
    no_kyc: "Hakuna KYC",
    club: "Kiwango cha Mtumiaji",
    subscription: "Usajili wa habari",
    leave_shop: "Ondoka kwenye duka hili na uondoe kiwango cha wateja wote",
    leave_shop_action: "Ondoka dukani",
    edit_personal_info: "Hariri maelezo ya kibinafsi",
    leave_dialog: {
      title: "Ondoka dukani",
      message:
        "Kujiondoa kwenye duka hili hakutafuta maelezo na rekodi za agizo lako.",
      action: "Ondoka",
    },
    notifications: {
      leave_success: "Ondoka dukani",
    },
    club_table: {
      discount: "Punguzo",
      limit: "Kikomo",
      currency: "Sarafu",
      free_shipping: "Usafirishaji Bila Malipo",
    },

    my_profile: {
      title: "Wasifu wangu",
      subtitle: "Hii ni taarifa ya wasifu wangu wa mteja kwa ajili ya duka.",
      edit_action: "Hariri wasifu"
    },
    subscribe_status: {
      subscribed: "Nimejisajili kupokea habari mpya na ofa kupitia barua pepe.",
      unsubscribed: "Sijajisajili kupokea habari au ofa zozote kupitia barua pepe."
    },
    my_club: {
      subtitle: "Kiwango changu cha klabu na manufaa yake."
    },
    kyc: {
      subtitle: "Hii ni taarifa yangu ya utambulisho wa kimataifa."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Kikapu cha ununuzi",
    total_price: "Jumla",
    shipping: "Gharama ya usafirishaji",
    free_shipping: "Usafirishaji Bila Malipo",
    shipping_not_pay: "Haijajumuishwa",
    total_discount: "Jumla ya punguzo",
    customer_club: "Mwanachama wa Klabu ya Wateja",
    customer_club_discount: "Punguzo la Mwanachama",
    final_price: "Malipo ya Mwisho",
    lead_time: "Muda wa maandalizi",
    lead_time_unit: "Saa",
    receive_time: "Wakati wa kujifungua unaopendekezwa",
    select_time: "Chagua Wakati wa Uwasilishaji",
    no_select_time: "Haraka iwezekanavyo",
    transportation_type: "Aina ya usafirishaji",
    days_input: "Siku za utoaji",
    days_input_label: "Siku",
    days_input_no_data: "Chagua angalau siku moja",
    time_input: "Wakati wa utoaji",
    time_input_label: "Uwasilishaji saa",
    time_input_label_no_data: "Chagua angalau muda wa wakati mmoja",
    support_cod: "Pesa kwenye Uwasilishaji",
    not_support_cod: "Imeshindwa kulipa ndani ya nchi!",
    final_confirm_action: "Uthibitisho wa agizo la mwisho",
    pay_and_complete_action: "LIPA sasa",
    pre_confirm_service: "Wasilisha ombi",
    cross_selling_discount: "Punguzo la mkusanyiko",

    errors: {
      no_address: "Chagua anwani unayotaka agizo lako lisafirishwe.",
      no_phone: "Weka nambari ya mawasiliano ili kuratibu upokeaji wa bidhaa.",
      select_billing_country: "Chagua nchi yako ya kutuma bili",
      select_billing_state: "Chagua eneo lako la ushuru",
    },
    same_billing_address: "Maelezo ya bili sawa na maelezo ya Mpokeaji",
    same_billing_address_desc:
      "Anwani ya kutuma bili ni sawa na anwani ya usafirishaji.",
    custom_billing_info: "Maelezo tofauti ya malipo",
    custom_billing_info_desc:
      "Unaweza kuingiza nambari yako ya kodi na kuweka anwani tofauti ya malipo.",
    basket_empty: "Kikapu ni tupu",
    extra_shipping_count: "Utapokea vifurushi {count}.",
    select_location_error:
      "Tafuta mahali pa kupokea usafirishaji kwenye ramani na ubofye kiashiria kilicho katikati ya ramani ili kuamua anwani halisi ya mpokeaji.",

    billing_business_desc: "Ni akaunti ya biashara yenye nambari ya kodi.",
    billing_personal_desc: "Ni akaunti ya kibinafsi.",

    no_billing_title: "Hakuna malipo",
    no_billing_desc: "Acha anwani ya bili tupu.",

    can_pay_cod_message:"Unaweza kulipia agizo hili kwa pesa taslimu wakati wa kupokea.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Saa",
    count_input: "Hesabu",

    price_changed: "Bei imebadilika. bei mpya:",
    offer: "Pata punguzo la {count}x kwa {percent}%.",
    offer_free: "Pata {count}x bila malipo",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Anwani Zangu",
    subtitle:"Tazama anwani zako zilizohifadhiwa hapa, na uongeze mpya kwa urahisi.",
    new_action: "Anwani Mpya",
    receiver: "Mpokeaji",
    address: "Anwani",
    building_no: "sahani ya leseni",
    building_unit: "kitengo",
    postcode: "Msimbo wa posta",
    tel: "Simu",
    description: "Kumbuka",

    map: {
      title: "Anwani Zangu",
      confirm: "Usajili wa anwani",
      address_type: "Anwani",
      receptor_type: "Mpokeaji",
    },
    add_dialog: {
      title: "Jina Jipya la Anwani",
      message: "Weka jina la anwani mpya.",
      address_name_input: "Anwani (inahitajika)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Rudisha maombi",
    subtitle:"Tazama maombi yako ya kurejesha hapa. Kwa bidhaa zilizo na sera ya kurejesha, unaweza kuwasilisha ombi la kurejesha kwenye ukurasa wa agizo.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Orodha ya matamanio",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Maoni Yangu",
    first_post: "Chapisho la kwanza",
    last_edit: "Uhariri wa mwisho",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Kadi Zangu Za Zawadi",
    add_action: "Ongeza kadi",
    add_card_dialog: {
      title: "Ongeza Kadi ya Zawadi",
      message:
        "Weka nambari ya kadi na msimbo wa usalama. Kadi ya zawadi itaongezwa kwenye akaunti yako.",
      card_number_input: "Namba ya kadi",
      info: "Kumbuka: Unaponunua kwenye duka, utaonyeshwa chaguo la kulipa na kadi za zawadi. Kwa kuchagua chaguo hili, kiasi cha salio lako la kuchaji tena kitatolewa kutoka kwa kiasi cha agizo.",
      add_action: "Usajili wa Kadi",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Linganisha Bidhaa",
    action_button: "Linganisha",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Hakuna bidhaa zilizoongezwa kwenye orodha ya kulinganisha.",
      price: "Bei",
      type: "Aina",
      brand: "Chapa",
      warranty: "Udhamini",
      variants_comparison: "Linganisha lahaja za bidhaa",
      spec: "Maelezo ya kiufundi",
      pros: "Faida",
      cons: "Hasara",
      user_review: "Maoni ya mtumiaji",
      rating: "Ukadiriaji",
      rating_count: "Idadi ya hakiki",
      info: "Unaweza kushiriki jedwali hili la kulinganisha bidhaa na marafiki zako kwa kutuma kiungo kifuatacho, au ufikie baadaye kwa kuhifadhi kiungo hiki.",
      copy_action: "Nakili Kiungo cha Kulinganisha",
      check_list: ["Ndiyo", "Imefanya"],
      cross_list: ["Hapana", "Haijafanya hivyo"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Asili pekee",
    only_has_discount: "Imepunguzwa bei pekee",
    price_range: "Bei mbalimbali",
    brands: "Chapa",
    main_shop_page: "Hifadhi ukurasa kuu",
    home: "Nyumbani",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Mpendwa {user}, Umenunua bidhaa hii. Una maoni gani kuhusu bidhaa hii?",
    notification: {
      title: "Hongera",
      message: "Maoni yako yamerekodiwa.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blogu",
    add_new_blog: "Blogu Mpya",
    popular: "Maarufu",
    topics: "Mada",
    suggestions: "Mapendekezo",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Kuhusu sisi",
    terms: "Masharti ya matumizi",
    privacy: "Sera ya faragha",
    contact_us: "Wasiliana nasi",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Wasiliana nasi kwa fomu",
    name: "Jina",
    email: "Barua pepe",
    phone: "Simu",
    message: "Ujumbe",
    notifications: {
      success: "Ujumbe wako umetumwa.",
    },
    submitted_title: "Asante Kwa Kutufikia!",
    submitted_message:
      "Tunashukuru kwa muda wako wa kuwasiliana nasi. Ujumbe wako umepokelewa na timu yetu inaukagua kwa sasa. Tutajibu haraka iwezekanavyo, na tunakushukuru kwa uvumilivu wako wakati huu. Nia yako na maoni ni muhimu kwetu, na tumejitolea kukupa usaidizi bora zaidi.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Uthibitisho wa Malipo",
      payment_success: "Malipo yamekamilika.",
      buy_title: "Nunua",
      pay_by_giftcards: "Agizo lako lililipwa kwa kadi ya zawadi.",
      free_order: "Agizo lako ni bure.",
      pay_by_cod: "Agizo lako limeongezwa kama pesa taslimu unapoletewa.",
      pay_by_dir:
        "Agizo lako limeongezwa. Sasa unaweza kulipa kwa uhamishaji wa pesa moja kwa moja na kisha upakie risiti ya malipo kwenye ukurasa wa agizo.",
      pay_title: "Malipo",
      qr_code_payment: "Anwani ya malipo ya msimbo wa QR imeundwa.",
      connecting_to_online_gateway: "Inaunganisha kwenye lango la malipo ya mtandaoni.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Imebaki mwanzo",
    title_between_start_end: "Imebaki hadi mwisho",
    title_after_end: "Imekamilika",
    title_no_start_end: "Bila kipindi cha wakati!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Unaweza kupokea zawadi moja kwa agizo.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Msimbo wa kuponi",
    add_coupon: "Ongeza kuponi",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Fomu ya parachichi haijawashwa!",
    last_update: "Sasisho la mwisho:",
    step1:
      "1. Weka jina na maelezo ya bidhaa unayotaka kuagiza na ubofye kitufe cha Ongeza.",
    title_plc: "Ingiza jina la bidhaa.",
    description_plc: "Je! una maelezo zaidi ya bidhaa?",
    link_plc: "Je, una kiungo cha bidhaa?",
    image: "Picha ya Bidhaa",
    image_msg: "Unaweza kutuma picha ya bidhaa ikiwa inahitajika.",
    add_item: "Ongeza kipengee",
    items_list: "Orodha ya bidhaa zilizoombwa",
    currency_msg: "Ni lazima ulipe kiasi cha agizo hili kwa sarafu hii.",
    step2:
      "2. Baada ya kuongeza vitu vyote vinavyohitajika, bofya kwenye kifungo cha ombi la ukaguzi wa utaratibu. Katika hatua hii, tutapitia agizo na kukufahamisha kuhusu bei. Kwa kubofya kiungo hiki, utaweza kuona kiungo cha bei na malipo.",
    order_action: "Usajili wa agizo",
    show_all: "Onyesha yote",
    show_accepted: "Onyesha Vipengee Vilivyothibitishwa",
    last_orders: "Orodha ya maagizo yako ya hivi majuzi",
    pending_status: "inakaguliwa",
    check_now: "Angalia utaratibu",
    add_new_order: "Tengeneza Agizo Jipya",
    pay_online: "Lipa mtandaoni",
    pricing_not_completed_message:
      "Agizo lako linakaguliwa. Agizo lako litakaguliwa na kuwekewa bei hivi karibuni na utaweza kulipa agizo hilo.",

    select_address_message:
      "Tafadhali weka anwani yako, na kisha unaweza kuwasilisha agizo.",

    delete_item_dialog: {
      title: "Ondoa bidhaa kutoka kwa kikapu",
      message: "Je, ungependa kufuta kipengee hiki kutoka kwenye rukwama?",
      action: "Ndiyo, futa",
    },

    notifications: {
      order_success: "Agizo lako limefaulu kufanywa.",
      delete_success: "Kipengee kimefutwa.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Uundaji wa agizo",
    message:
      "Unda orodha ya bidhaa unazotaka kununua kwa kuchanganua msimbo wa bidhaa.",

    currency_msg: "Sarafu unayotaka kulipa nayo.",
    order_action: "Malipo",
    add_new_order: "Agizo jipya",
    continue_order: "Endelea kuagiza",

    delete_item_dialog: {
      title: "Ondoa bidhaa kutoka kwa kikapu",
      message: "Je, ungependa kufuta kipengee hiki kutoka kwenye rukwama?",
      action: "Ndiyo, futa",
    },
    notifications: {
      order_success: "Agizo lako limefaulu kufanywa.",
      delete_success: "Kipengee kimefutwa.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Pakia picha ya risiti ya malipo.",
    upload_payment_receipt_done:
      "✔ Tayari umepakia picha ya risiti, subiri idhini yetu. Ikiwa unahitaji kubadilisha, unaweza kubadilisha picha ya awali na mpya.",
    public_form_title: "Maelezo ya akaunti kwa uhamisho wa pesa",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Orodha ya mambo ya kufanya",
      message: "Bainisha mada za kazi unayotaka kufanya na umjulishe mnunuzi imefikia wapi.",
    },
    booking: {
      title: "Kuhifadhi / Kuhifadhi",
      message: "Agizo hili litashughulikiwa kwa wakati maalum, mteja amechagua kipindi kinachohitajika, ikiwa unataka kufanya mabadiliko yoyote katika kipindi kilichochaguliwa, mjulishe mteja.",

      selected_checkin: "Kuingia kumechaguliwa na mteja",
      selected_checkout: "Likizo iliyochaguliwa na mteja",
      change_days_question:
        "Je, unahitaji kubadilisha katika siku ulizochagua mteja?",
      show_calendar: "Onyesha Kalenda ya Maagizo",
    },
    pricing: {
      title: "Kuweka bei",
      message: "Je, unatoza kiasi gani kwa huduma hii?",
    },
    subscription: {
      title: "Usajili",
      message:
        "Unaweza kuchagua kipindi cha usajili kwa kununua huduma hii kila siku. Mjulishe mnunuzi ikiwa ungependa kubadilisha thamani chaguomsingi ambazo tayari umeweka.",
      duration: "Kipindi cha usajili",
    },
    charge: {
      title: "Malipo",
      message:
        "Umebainisha gharama ya bidhaa hii. Unaweza kubadilisha kiasi cha malipo ya bidhaa iliyonunuliwa na mteja.",
      charge: "Malipo",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Inasubiri kuangalia ufikiaji...",
    no_access_message:
      "Kwa bahati mbaya, huna ufikiaji wa duka letu.<br/> Tafadhali wasiliana nasi.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Shiriki agizo",
    title: "Shiriki agizo hili na wengine.",
    message:
      "Ni kiungo salama, shiriki tu na wale unaowajua. Kila mtu aliye na kiungo hiki anaweza kurudia agizo lako na kuona anwani uliyochagua. Itakuwa na taarifa kuhusu rukwama yako ya sasa.",
    valid_period: "Muda wa kiungo hiki utaisha baada ya saa 48.",
    import_order_action: "Agizo la kuagiza",
    retrieve_dialog_title: "Rejesha agizo la nje",
    address_included: "Shiriki vitu vya kikapu + Anwani",
    address_excluded: "Shiriki vitu vya kikapu pekee",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Bei",
    inventory: "Malipo",
    discount: "Punguzo",
  },

  rating: {
    product_rating_message:
      "Bidhaa hii imepokea ukadiriaji wa {rate} kati ya nyota 5 na ukadiriaji wa watu {rate_count}.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Chunguza!",
      same_tags_subtitle: "Pata vitu vya kushangaza zaidi vinavyohusiana.",
      same_category_subtitle: "Pata vitu vya kushangaza zaidi katika kitengo hiki.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Agiza {product} pamoja na",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Tazama duka la {vendor}",
  },

  login: {
    welcome: "Karibu",
  },


};
