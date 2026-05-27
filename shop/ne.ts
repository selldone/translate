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
  surveys: ["धेरै गरिब", "गरिब", "सामान्य", "राम्रो", "उत्कृष्ट"],

  /** @see SFooterSection **/
  footer: {
    map: "नक्सा",
    email: "इमेल",
    phone: "फोन",
    address: "ठेगाना",

    copyright:
      "सामग्रीको प्रयोग गैर-व्यावसायिक उद्देश्यका लागि मात्र र स्रोतको सन्दर्भमा ({shop_title} सँग लिङ्क)। {shop_title} मा सबै अधिकार सुरक्षित छन्।",
    powered_by: "द्वारा संचालित",
    privacy: "गोपनीयता नीति",
    term_of_use: "प्रयोगका सर्तहरू",
    shop_app_setting: "पसल सेटिङ र GDPR",

    dialog_setting: {
      title: "पसल अनुप्रयोग सेटिङ",
      app_list: "आवेदनहरूको सूची",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "बिक्री भइसक्यो",
    review_unit: "समीक्षा गर्नुहोस्",
    not_original: "मौलिक होइन",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "फिल्टर गर्नुहोस्",
    native: {
      title: "आवेदन लगइन",
      message:
        "यो एपलाई तपाइँको स्टोर खाता जानकारीमा पहुँच चाहिन्छ। यसमा नाम, सम्पर्क नम्बर, ठेगाना, इमेल, अर्डर इतिहास, अर्डर र यस स्टोरमा टिप्पणी पोस्ट गर्ने पहुँच समावेश छ।",
      message_bold:
        "यो स्टोरमा प्रवेश गर्न आधिकारिक स्टोर एप प्रयोग गर्न निश्चित हुनुहोस्।",
    },
  },

  /** @see SortView **/
  sort: {
    title: "अनुसार क्रमबद्ध गर्नुहोस्",
    title_small: "क्रमबद्ध गर्नुहोस्।।",
    nothing: "केही छैन",
    most_views: "धेरै हेराइहरू",
    most_likes: "सर्वाधिक लोकप्रिय",
    most_recent: "सबैभन्दा नयाँ",
    most_sell: "बेस्ट सेलिंग",
    cheapest: "सस्तो",
    most_expensive: "धेरै महँगो",
    only_available: "उपलब्ध छ",
    view_mode: {
      normal: "सामान्य",
      grid: "ग्रिड",
      list: "सूची",
      insta: "इन्स्टा",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "नक्कली",
    action: "लिलामी",
    compare_limit: "10 वस्तुहरूको सीमा",
    compare_add: "तुलना मा थप्नुहोस्",
    compare_be_in_list: "तुलना सूचीमा",

    type: "टाइप गर्नुहोस्",
    brand: "ब्रान्ड",
    category: "श्रेणी",
    discount: "छुट",
    track_price: "ट्र्याक मूल्य",
    waiting_for_auction: "लिलामी को लागी प्रतीक्षा गर्दै?",
    inform_auction: "मलाई लिलामी बारे बताउनुहोस्",
    return_in_days: "{days} दिन वारेन्टी फिर्ता",
    support24h7: "24 घण्टा 7 दिन समर्थन गर्नुहोस्",
    support_normal: "कार्य घण्टा समर्थन",
    original_guarantee: "मौलिक ग्यारेन्टी",
    cod_payment: "डेलिभरी समर्थनमा नगद",

    pros: "प्रो",
    cons: "विपक्ष",

    external_link: "थप पढ्नुहोस्",
    notifications: {
      congratulation: "बधाई छ",
      waiting_list_add_success:
        "यो उत्पादन लिलामी हुँदा हामी तपाईंलाई सूचित गर्नेछौं।",
      waiting_list_delete_success: "तपाईं लिलामी प्रतिक्षा सूचीबाट बाहिरिनुभयो।",
    },

    offer_message: "{min_quantity} किन्नुहोस् यी वस्तुहरूमा {percent}% छुट पाउनुहोस्",
    up_to: "प्रति अर्डर {per_order}x सम्म",
    get_free: "सित्तैमा पाउनुहोस्",
    get_off: "{percent}% छुट पाउनुहोस्",
    select_a_vendor_message: "कृपया विक्रेता चयन गर्नुहोस्।",
    product_description_header: "प्रस्तुत गर्दै {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "उपलब्धता को लागी प्रतिक्षा गर्दै",
    inform_me_when_available: "यसका लागि कुर्दै हुनुहुन्छ?",
    pay_buy: "तिर्नुहोस् र किन्नुहोस्",
    quantity: "गणना गर्नुहोस्",
    quantity_in_basket: "कार्टमा वस्तुहरू",
    count_unit: "x",
    remove: "हटाउनुहोस्",
    add_to_basket: "भाडोमा हाल",
    buy: "किन्नुहोस्",
    subscribe_now: "अब सदस्यता लिनुहोस्",
    unsubscribe: "सदस्यता रद्द गर्नुहोस्",
    select_a_subscription_plan: "पहिले योजना छान्नुहोस्!",
    manage_subscriptions: "सदस्यताहरू प्रबन्ध गर्नुहोस्",
    notifications: {
      inform_add_success: "यो उपलब्ध हुँदा हामी तपाईंलाई थाहा दिनेछौं।",
      inform_remove_success: "तपाईंलाई प्रतीक्षा सूचीबाट हटाइयो।",
    },
    zip_pin_input: "ZIP / PIN",
    zip_pin_not_available_msg: "यो स्थानमा उपलब्ध छैन!",
    zip_pin_placeholder: "ZIP/PIN कोड चयन गर्नुहोस्...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "समीक्षा गर्नुहोस्",
    spec: "विनिर्देश",
    comments: "टिप्पणीहरू",
    price: "मूल्य",
    rate: "दर",
    comment: "टिप्पणी गर्नुहोस्",
    warranty: "वारेन्टी",
    return_policy: "फिर्ता नीति",
    guide: "गाइड",
    shipping: "ढुवानी",
    related_products_title: "सम्बन्धित उत्पादनहरु",
    related_categories_title: "सङ्ग्रहमा पत्ता लगाउनुहोस्",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "अर्डर इतिहास",
      profile: "मेरो प्रोफाइल",
      favorites: "मनपर्ने वस्तुहरू",
      gift_cards: "उपहार कार्डहरू",
      return_requests: "फिर्ता आदेशहरू",
      basket: "किनमेल कार्ट",
    },
    user_menu: {
      my_shops: "मेरो स्टोरहरू",
      go_to_admin: "{shop_name} व्यवस्थापन गर्नुहोस्",
      exit_from: "लगआउट {shop_name}",
      chips: "{chips} चिप्स",
    },
    login_to_shop: "स्टोरमा लगइन गर्नुहोस्",
    login_to_shop_short: "लग - इन",
    item_in_basket_message: "{count} यो वस्तु तपाईंको कार्टमा छ।",
    search_title: "स्टोरमा खोज्नुहोस् {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "कार्ट",
    basket_is_empty: "तपाईंको कार्ट खाली छ।",
    total_price: "कुल",
    view_basket: "तपाईंको कार्ट",
    more: "थप...",
    accept_and_pay: "चेकआउट",
    items: "वस्तु(हरू)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "अस्वीकार गरियो",
    table: {
      code: "अर्डर कोड",
      reserved: "मिति",
      delivery_state: "वितरण स्थिति",
      price: "कुल रकम",
      status: "भुक्तानी स्थिति",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "अर्डर कोड",
      items: "वस्तुहरू",
      reserved: "मिति",
      delivery_state: "पछिल्लो स्थिति",
      price: "कुल रकम",
      status: "भुक्तानी स्थिति",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "उपहार कार्ड",
      comments: "टिप्पणीहरू",
      favorites: "मनपर्नेहरू",
      return_requests: "फर्काउँछ",
      addresses: "ठेगानाहरू",
      profile: "प्रोफाइल",
      orders: "आदेश",
      wallets: "वालेटहरू",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "मेरा वालेटहरू",
    subtitle: "यदि तपाईं योग्य हुनुहुन्छ र क्यासब्याक कार्यक्रम सक्रिय छ भने, तपाईंको अर्डरको एक हिस्सा तपाईंको वालेटमा जम्मा गरिनेछ। तपाईं यी रकम आफ्नो अर्को खरिदमा प्रयोग गर्न सक्नुहुन्छ।"
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"मेरो वालेट ब्यालेन्स",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "अर्डर",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "भुक्तानी",
      payment_waiting: "भुक्तानीको लागि पर्खँदै",
      payment_completed: "भुक्तान गरियो",
      table: {
        title: "शीर्षक",
        amount: "रकम",
        description: "विवरण",
      },
      total_payment: "तिरीएको रकम",
      discount: "छुट",
      discount_code: "छुट कोड",
      delivery_fee: "ढुवानी लागत",
      delivery_fee_after: "कुनै डेलिभरी भुक्तान गरिएको छैन",

      total_price: "कुल वस्तु मूल्य",
      total_items_discount: "वस्तु छुट",
      total_price_after_offers: "प्रस्तावहरू लागू गरेपछि कुल",
      total_order_price_before_tax: "पूर्व कर कुल मूल्य",

      buyer_payment: "क्रेता भुक्तानी रकम",

      payment_is_in_require_capture_message:
        "हामीले तपाईंको भुक्तानी प्राप्त गरेका छौँ, तर यो अझै क्याप्चर गरिएको छैन।",
      settle_the_earlier_bill_first: "पहिले अघिल्लो बिल मिलाउनुहोस्!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "डेलिभरी",
      subtitle: "क्रेता जानकारी",
      confirm_received_action: "उत्पादन रसिद पुष्टि गर्नुहोस्",
      confirm_received_info:
        "यदि तपाईंले अर्डर प्राप्त गर्नुभयो भने पुष्टिकरण बटनमा क्लिक गर्नुहोस्। यदि आवश्यक भएमा, यदि तपाइँ पुष्टिकरण प्राप्त गर्नुहुन्छ भने तपाइँ एक रेफरल पेश गर्न सक्षम हुनुहुनेछ।",
      Recipient: "प्रापक",
      bill: "इनभ्वाइस",
      name: "नाम",
      tel: "फोन",
      email: "इमेल",
      country: "देश",
      state: "राज्य",
      city: "सहर",
      address: "ठेगाना",
      building_no: "भवन नम्बर",
      unit_no: "एकाइ नम्बर",
      postal_code: "पोष्टकोड",
      description: "विवरण",
      order_delivered: "अर्डर पठाइएको छ।",
      delivery_time: "डेलिभरी समय",
      tracking_code: "ट्र्याकिङ कोड",
      tracking_url: "ट्र्याकिङ URL",

      notifications: {
        confirm_delivery: "तपाईंको अर्डर पुष्टि भयो।",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "सामानको मौलिकताको ग्यारेन्टी",
      return: "फर्किनु",
      table: {
        product: "उत्पादनको नाम",
        count: "गणना गर्नुहोस्",
        unit_price: "एकाइ मूल्य",
        total_price: "कुल रकम",
        discount: "छुट",
        final_price: "अन्तिम मूल्य",
        returned: "फर्कियो",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "फर्किनु",
    count_input: "फिर्ता गरिएका वस्तुहरूको सङ्ख्या",
    count_input_message: "कति वस्तु फिर्ता गर्नुहुन्छ ?",
    reason_input: "फिर्ताको कारण",
    reason_input_message: "यो वस्तु फिर्ता गर्नुको कारण चयन गर्नुहोस्।",
    note_input: "विवरण",
    note_input_hint: "फर्किनुको कारण बताउनुहोस् ..",
    note_input_message:
      "यदि आवश्यक भएमा यो वस्तु फिर्ता गर्नुको कारण वर्णन गर्नुहोस्।",
    media_message:
      "तपाईंले उत्पादनको स्थिति जानकारीको लागि राम्रो समर्थन प्राप्त गर्न यहाँ उत्पादनको छवि, अडियो वा भिडियो अपलोड गर्न सक्नुहुन्छ। फाइल चयन गर्दा स्वचालित रूपमा पठाउने र पुष्टि हुनेछ।",
    video: "भिडियो",
    voice: "आवाज",
    add_action: "फिर्ता अनुरोध पठाउनुहोस्",
    notifications: "तपाईंको फिर्ता अनुरोध सफलतापूर्वक दर्ता गरिएको छ।",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "अर्डर",
    info: {
      title: "भर्चुअल उत्पादन खरिद गरियो",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "मेरो व्यक्तिगत जानकारी",
    name: "नाम",
    email: "इमेल",
    tel: "टेलिफोन",
    identity: "प्रमाणीकरण",
    success_kyc: "प्रमाणित KYC",
    no_kyc: "KYC छैन",
    club: "प्रयोगकर्ता स्तर",
    subscription: "समाचार सदस्यता",
    leave_shop: "यो स्टोर छोड्नुहोस् र सबै ग्राहक स्तर हटाउनुहोस्",
    leave_shop_action: "पसल छोड्नुहोस्",
    edit_personal_info: "व्यक्तिगत जानकारी सम्पादन गर्नुहोस्",
    leave_dialog: {
      title: "पसल छोड्नुहोस्",
      message:
        "यस स्टोरको सदस्यता रद्द गर्दा तपाईंको अर्डर जानकारी र रेकर्डहरू मेटिने छैन।",
      action: "छोड",
    },
    notifications: {
      leave_success: "पसल छोड्नुहोस्",
    },
    club_table: {
      discount: "छुट",
      limit: "सीमा",
      currency: "मुद्रा",
      free_shipping: "निशुल्क ढुवानी",
    },

    my_profile: {
      title: "मेरो प्रोफाइल",
      subtitle: "यो स्टोरका लागि मेरो ग्राहक प्रोफाइल जानकारी हो।",
      edit_action: "प्रोफाइल सम्पादन गर्नुहोस्"
    },
    subscribe_status: {
      subscribed: "म इमेलमार्फत पछिल्ला समाचार र प्रवर्धनहरू प्राप्त गर्न सदस्यता लिएको छु।",
      unsubscribed: "म इमेलमार्फत कुनै समाचार वा प्रवर्धनहरू प्राप्त गर्न सदस्यता लिएको छैन।"
    },
    my_club: {
      subtitle: "मेरो क्लब स्तर र यसका लाभहरू।"
    },
    kyc: {
      subtitle: "यो मेरो विश्वव्यापी पहिचान जानकारी हो।"
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "किनमेल कार्ट",
    total_price: "कुल रकम",
    shipping: "ढुवानी लागत",
    free_shipping: "निशुल्क ढुवानी",
    shipping_not_pay: "समावेस गरिएको छैन",
    total_discount: "कुल छुट",
    customer_club: "ग्राहक क्लब सदस्य",
    customer_club_discount: "सदस्य छुट",
    final_price: "अन्तिम भुक्तानी",
    lead_time: "तयारी समय",
    lead_time_unit: "घण्टा",
    receive_time: "रुचाइएको डेलिभरी समय",
    select_time: "वितरण समय चयन गर्नुहोस्",
    no_select_time: "सकेसम्म चाँडो",
    transportation_type: "ढुवानी प्रकार",
    days_input: "डेलिभरी दिनहरू",
    days_input_label: "दिनहरू",
    days_input_no_data: "कम्तिमा एक दिन छान्नुहोस्",
    time_input: "डेलिभरी समय",
    time_input_label: "मा डेलिभरी",
    time_input_label_no_data: "कम्तिमा एक समय अन्तराल चयन गर्नुहोस्",
    support_cod: "डेलिभरीमा नगद",
    not_support_cod: "स्थानीय रूपमा भुक्तानी गर्न असमर्थ!",
    final_confirm_action: "अन्तिम आदेश पुष्टि",
    pay_and_complete_action: "अहिले तिर्नुहोस्",
    pre_confirm_service: "अनुरोध पेश गर्नुहोस्",
    cross_selling_discount: "सङ्कलन छुट",

    errors: {
      no_address: "तपाईंले आफ्नो अर्डर पठाउन चाहनुभएको ठेगाना चयन गर्नुहोस्।",
      no_phone: "सामानको रसिद समन्वय गर्न सम्पर्क नम्बर प्रविष्ट गर्नुहोस्।",
      select_billing_country: "आफ्नो बिलिङ देश चयन गर्नुहोस्",
      select_billing_state: "आफ्नो कर क्षेत्र चयन गर्नुहोस्",
    },
    same_billing_address: "प्राप्तकर्ता जानकारी जस्तै बिलिङ जानकारी",
    same_billing_address_desc:
      "बिलिङ ठेगाना ढुवानी ठेगाना जस्तै हो।",
    custom_billing_info: "फरक बिलिङ जानकारी",
    custom_billing_info_desc:
      "तपाईंले आफ्नो कर नम्बर प्रविष्ट गर्न सक्नुहुन्छ र बिलिङको लागि फरक ठेगाना सेट गर्न सक्नुहुन्छ।",
    basket_empty: "टोकरी खाली छ",
    extra_shipping_count: "तपाईंले {count} प्याकेजहरू प्राप्त गर्नुहुनेछ।",
    select_location_error:
      "नक्सामा ढुवानी प्राप्त गर्ने ठाउँ पत्ता लगाउनुहोस् र प्राप्तकर्ताको सही ठेगाना निर्धारण गर्न नक्साको बीचमा रहेको सूचकमा क्लिक गर्नुहोस्।",

    billing_business_desc: "यो कर नम्बर भएको व्यापार खाता हो।",
    billing_personal_desc: "यो एक व्यक्तिगत खाता हो।",

    no_billing_title: "कुनै बिलिङ छैन",
    no_billing_desc: "बिलिङ ठेगाना खाली छोड्नुहोस्।",

    can_pay_cod_message:"तपाईं यो अर्डरको भुक्तानी डेलिभरी हुँदा नगदमा गर्न सक्नुहुन्छ।",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "घण्टा",
    count_input: "गणना गर्नुहोस्",

    price_changed: "मूल्य परिवर्तन भएको छ। नयाँ मूल्य:",
    offer: "{count}x वस्तुमा {percent}% छुट पाउनुहोस्",
    offer_free: "{count}x नि:शुल्क प्राप्त गर्नुहोस्",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "मेरो ठेगानाहरू",
    subtitle:"तपाईंका सुरक्षित ठेगानाहरू यहाँ हेर्नुहोस्, र सजिलै नयाँ ठेगाना थप्नुहोस्।",
    new_action: "नयाँ ठेगाना",
    receiver: "प्रापक",
    address: "ठेगाना",
    building_no: "नम्बर प्लेट",
    building_unit: "एकाइ",
    postcode: "पोष्टकोड",
    tel: "टेलिफोन",
    description: "नोट",

    map: {
      title: "मेरो ठेगानाहरू",
      confirm: "ठेगाना दर्ता",
      address_type: "ठेगाना",
      receptor_type: "प्रापक",
    },
    add_dialog: {
      title: "नयाँ ठेगाना नाम",
      message: "नयाँ ठेगानाको लागि शीर्षक प्रविष्ट गर्नुहोस्।",
      address_name_input: "ठेगाना (आवश्यक)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "अनुरोधहरू फिर्ता गर्नुहोस्",
    subtitle:"तपाईंका फिर्ता अनुरोधहरू यहाँ हेर्नुहोस्। फिर्ता नीति भएका वस्तुहरूका लागि, तपाईं अर्डर पृष्ठमा फिर्ता अनुरोध पेश गर्न सक्नुहुन्छ।",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "इच्छा सुची",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "मेरा टिप्पणीहरू",
    first_post: "पहिलो पोस्ट",
    last_edit: "पछिल्लो सम्पादन",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "मेरो उपहार कार्डहरू",
    add_action: "कार्ड थप्नुहोस्",
    add_card_dialog: {
      title: "उपहार कार्ड थप्नुहोस्",
      message:
        "कार्ड नम्बर र सुरक्षा कोड प्रविष्ट गर्नुहोस्। तपाईंको खातामा उपहार कार्ड थपिनेछ।",
      card_number_input: "कार्ड नम्बर",
      info: "नोट: स्टोरबाट खरिद गर्दा, तपाईंलाई उपहार कार्डहरू मार्फत भुक्तानी गर्ने विकल्प देखाइनेछ। यो विकल्प चयन गरेर, तपाईंको रिचार्ज ब्यालेन्सको रकम अर्डर रकमबाट घटाइनेछ।",
      add_action: "कार्ड दर्ता",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "उत्पादन तुलना गर्नुहोस्",
    action_button: "तुलना गर्नुहोस्",

    /** {@see SComparisonList} **/
    list: {
      no_data: "तुलना सूचीमा कुनै उत्पादनहरू थपिएका छैनन्।",
      price: "मूल्य",
      type: "टाइप गर्नुहोस्",
      brand: "ब्रान्ड",
      warranty: "वारेन्टी",
      variants_comparison: "उत्पादन भेरियन्टहरू तुलना गर्नुहोस्",
      spec: "प्राविधिक विनिर्देशहरू",
      pros: "प्रो",
      cons: "विपक्ष",
      user_review: "प्रयोगकर्ता टिप्पणीहरू",
      rating: "मूल्याङ्कन",
      rating_count: "समीक्षाहरूको संख्या",
      info: "तपाईंले निम्न लिङ्क पठाएर आफ्ना साथीहरूसँग यो उत्पादन तुलना तालिका साझेदारी गर्न सक्नुहुन्छ, वा यो लिङ्क बचत गरेर पछि पहुँच गर्न सक्नुहुन्छ।",
      copy_action: "तुलना लिङ्क प्रतिलिपि गर्नुहोस्",
      check_list: ["हो", "छ"],
      cross_list: ["छैन", "गरेको छैन"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "केवल मौलिक",
    only_has_discount: "मात्र छुट",
    price_range: "मूल्य दायरा",
    brands: "ब्रान्ड",
    main_shop_page: "मुख्य पृष्ठ भण्डार गर्नुहोस्",
    home: "घर",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "प्रिय {user}, तपाईंले यो उत्पादन खरिद गर्नुभएको छ। तपाईं यो उत्पादन बारे के सोच्नुहुन्छ?",
    notification: {
      title: "बधाई छ",
      message: "तपाईंको टिप्पणी रेकर्ड गरिएको छ।",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "ब्लग",
    add_new_blog: "नयाँ ब्लग",
    popular: "लोकप्रिय",
    topics: "विषयहरू",
    suggestions: "सुझावहरू",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "हाम्रोबारे",
    terms: "प्रयोगका सर्तहरू",
    privacy: "गोपनीयता नीति",
    contact_us: "हामीलाई सम्पर्क गर्नुहोस",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "हामीलाई फारम सम्पर्क गर्नुहोस्",
    name: "नाम",
    email: "इमेल",
    phone: "फोन",
    message: "सन्देश",
    notifications: {
      success: "तपाईंको सन्देश पठाईयो।",
    },
    submitted_title: "हामी सम्म पुग्नु भएकोमा धन्यवाद!",
    submitted_message:
      "हामी हामीलाई सम्पर्क गर्नमा तपाईंको समयको कदर गर्छौं। तपाईंको सन्देश प्राप्त भएको छ र हाम्रो टोलीले हाल यसलाई समीक्षा गरिरहेको छ। हामी जतिसक्दो चाँडो जवाफ दिनेछौं, र यस समयमा तपाईंको धैर्यताको लागि हामी तपाईंलाई धन्यवाद दिन्छौं। तपाईंको चासो र प्रतिक्रिया हाम्रो लागि महत्त्वपूर्ण छ, र हामी तपाईंलाई उत्तम सम्भव सहयोग प्रदान गर्न प्रतिबद्ध छौं।",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "भुक्तानी पुष्टि",
      payment_success: "भुक्तानी पूरा भयो।",
      buy_title: "किन्नुहोस्",
      pay_by_giftcards: "तपाईंको अर्डर उपहार कार्ड मार्फत भुक्तान गरियो।",
      free_order: "तपाईंको अर्डर नि: शुल्क छ।",
      pay_by_cod: "तपाईंको अर्डर डेलिभरीमा नगदको रूपमा थपिएको छ।",
      pay_by_dir:
        "तपाईंको अर्डर सफलतापूर्वक थपिएको छ। अब तपाइँ प्रत्यक्ष पैसा स्थानान्तरण द्वारा भुक्तान गर्न सक्नुहुन्छ र त्यसपछि अर्डर पृष्ठमा भुक्तानी रसिद अपलोड गर्नुहोस्।",
      pay_title: "भुक्तानी",
      qr_code_payment: "भुक्तानी QR कोड ठेगाना सिर्जना गरियो।",
      connecting_to_online_gateway: "अनलाइन भुक्तानी गेटवेमा जडान गर्दै।",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "सुरुदेखि नै रह्यो",
    title_between_start_end: "अन्तिमसम्म रह्यो",
    title_after_end: "समाप्त भयो",
    title_no_start_end: "समय अवधि बिना!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "तपाईंले प्रति अर्डर एउटा उपहार प्राप्त गर्न सक्नुहुन्छ।",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "कुपन कोड",
    add_coupon: "कुपन थप्नुहोस्",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "एभोकाडो फारम सक्षम गरिएको छैन!",
    last_update: "अन्तिम अपडेट:",
    step1:
      "1. तपाईंले अर्डर गर्न चाहनुभएको उत्पादनको नाम र विवरणहरू प्रविष्ट गर्नुहोस् र थप्नुहोस् बटनमा क्लिक गर्नुहोस्।",
    title_plc: "उत्पादनको नाम प्रविष्ट गर्नुहोस्।",
    description_plc: "के तपाइँसँग थप उत्पादन विवरणहरू छन्?",
    link_plc: "के तपाइँसँग उत्पादनको लिङ्क छ?",
    image: "उत्पादन छवि",
    image_msg: "यदि आवश्यक भएमा तपाईले उत्पादन छवि पठाउन सक्नुहुन्छ।",
    add_item: "वस्तु थप्नुहोस्",
    items_list: "अनुरोध गरिएका उत्पादनहरूको सूची",
    currency_msg: "तपाईंले यस मुद्रासँग यस अर्डरको रकम तिर्नुपर्छ।",
    step2:
      "2. सबै इच्छित वस्तुहरू थपेपछि, अर्डर समीक्षा अनुरोध बटनमा क्लिक गर्नुहोस्। यस चरणमा, हामी अर्डरको समीक्षा गर्नेछौं र तपाईंलाई मूल्यको बारेमा जानकारी दिनेछौं। यो लिङ्कमा क्लिक गरेर, तपाईंले मूल्य र भुक्तानी लिङ्क हेर्न सक्षम हुनुहुनेछ।",
    order_action: "अर्डर दर्ता",
    show_all: "सबै देखाऊ",
    show_accepted: "पुष्टि गरिएका वस्तुहरू देखाउनुहोस्",
    last_orders: "तपाईंको हालको अर्डरहरूको सूची",
    pending_status: "समीक्षा अन्तर्गत",
    check_now: "अर्डर जाँच गर्नुहोस्",
    add_new_order: "नयाँ अर्डर गर्नुहोस्",
    pay_online: "अनलाइन तिर्नुहोस्",
    pricing_not_completed_message:
      "तपाईंको अर्डरको समीक्षा भइरहेको छ। तपाईंको अर्डरको समीक्षा गरी चाँडै मूल्य निर्धारण गरिनेछ र तपाईंले अर्डर तिर्न सक्षम हुनुहुनेछ।",

    select_address_message:
      "कृपया आफ्नो ठेगाना प्रविष्ट गर्नुहोस्, र त्यसपछि तपाईं अर्डर पेश गर्न सक्नुहुन्छ।",

    delete_item_dialog: {
      title: "किनमेल कार्टबाट वस्तु हटाउनुहोस्",
      message: "के तपाईं कार्टबाट यो वस्तु मेटाउन चाहनुहुन्छ?",
      action: "हो, मेटाउनुहोस्",
    },

    notifications: {
      order_success: "तपाईंको अर्डर सफलतापूर्वक राखिएको थियो।",
      delete_success: "वस्तु मेटाइयो।",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "अर्डर सिर्जना",
    message:
      "उत्पादन कोड स्क्यान गरेर किन्न चाहने उत्पादनहरूको सूची सिर्जना गर्नुहोस्।",

    currency_msg: "तपाईंले तिर्न चाहनुभएको मुद्रा।",
    order_action: "भुक्तानी",
    add_new_order: "नया ओर्देर",
    continue_order: "क्रम जारी राख्नुहोस्",

    delete_item_dialog: {
      title: "किनमेल कार्टबाट वस्तु हटाउनुहोस्",
      message: "के तपाईं कार्टबाट यो वस्तु मेटाउन चाहनुहुन्छ?",
      action: "हो, मेटाउनुहोस्",
    },
    notifications: {
      order_success: "तपाईंको अर्डर सफलतापूर्वक राखिएको थियो।",
      delete_success: "वस्तु मेटाइयो।",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "भुक्तानी रसिदको छवि अपलोड गर्नुहोस्।",
    upload_payment_receipt_done:
      "✔ तपाईंले पहिले नै रसिद छवि अपलोड गरिसक्नुभएको छ, हाम्रो स्वीकृतिको लागि पर्खनुहोस्। यदि तपाइँ परिवर्तन गर्न आवश्यक छ भने, तपाइँ अघिल्लो छविलाई नयाँसँग बदल्न सक्नुहुन्छ।",
    public_form_title: "पैसा स्थानान्तरणको लागि खाता जानकारी",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "कार्यतालिका",
      message: "तपाईंले गर्न चाहनुभएको कामको शीर्षकहरू निर्दिष्ट गर्नुहोस् र खरिदकर्तालाई थाहा दिनुहोस् कि यो कति टाढा छ।",
    },
    booking: {
      title: "बुकिंग / आरक्षण",
      message: "यो आदेश निर्दिष्ट समयमा प्रशोधन गरिनेछ, ग्राहकले इच्छित अवधि चयन गरेको छ, यदि तपाइँ चयन गरिएको अवधिमा कुनै परिवर्तन गर्न चाहनुहुन्छ भने, ग्राहकलाई थाहा दिनुहोस्।",

      selected_checkin: "ग्राहक द्वारा चयन गरिएको चेक-इन",
      selected_checkout: "ग्राहक द्वारा चयन गरिएको चेक-आउट",
      change_days_question:
        "के तपाइँ ग्राहक चयन दिनहरूमा परिवर्तन गर्न आवश्यक छ?",
      show_calendar: "अर्डरको पात्रो देखाउनुहोस्",
    },
    pricing: {
      title: "मूल्य निर्धारण",
      message: "तपाईं यो सेवाको लागि कति चार्ज गर्नुहुन्छ?",
    },
    subscription: {
      title: "सदस्यता",
      message:
        "तपाईंले यो सेवा दैनिक रूपमा खरिद गरेर सदस्यता अवधि छनौट गर्न सक्नुहुन्छ। यदि तपाईंले पहिले नै प्रविष्ट गर्नुभएको पूर्वनिर्धारित मानहरू परिवर्तन गर्न चाहनुहुन्छ भने खरिदकर्तालाई थाहा दिनुहोस्।",
      duration: "सदस्यता अवधि",
    },
    charge: {
      title: "चार्ज",
      message:
        "तपाईंले यो वस्तुको लागि शुल्क तोक्नुभएको छ। तपाईले ग्राहकले खरिद गरेको वस्तुको शुल्क रकम परिवर्तन गर्न सक्नुहुन्छ।",
      charge: "चार्ज",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "पहुँच जाँच गर्न प्रतिक्षा गर्दै...",
    no_access_message:
      "दुर्भाग्यवश, तपाईंसँग हाम्रो स्टोरमा पहुँच छैन।<br/> कृपया हामीलाई सम्पर्क गर्नुहोस्।",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "अर्डर सेयर गर्नुहोस्",
    title: "यो अर्डर अरूलाई साझा गर्नुहोस्।",
    message:
      "यो एक सुरक्षित लिङ्क हो, तपाईंले चिन्नेहरूसँग मात्र साझेदारी गर्नुहोस्। यो लिङ्क भएका सबैले तपाईंको अर्डरको नक्कल गर्न र चयन गरिएको ठेगाना हेर्न सक्छन्। यसले तपाइँको हालको कार्ट बारे जानकारी समावेश गर्दछ।",
    valid_period: "यो लिङ्क 48 घण्टा पछि समाप्त हुनेछ।",
    import_order_action: "आयात आदेश",
    retrieve_dialog_title: "बाह्य अर्डर पुन: प्राप्त गर्नुहोस्",
    address_included: "टोकरी वस्तुहरू + ठेगाना साझेदारी गर्नुहोस्",
    address_excluded: "टोकरी वस्तुहरू मात्र साझेदारी गर्नुहोस्",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "मूल्यहरू",
    inventory: "सूची",
    discount: "छुट",
  },

  rating: {
    product_rating_message:
      "यस उत्पादनले 5 ताराहरू मध्ये {rate} को मूल्याङ्कन प्राप्त गरेको छ र {rate_count} व्यक्तिहरूद्वारा मूल्याङ्कन गरिएको छ।",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "अन्वेषण गर्नुहोस्!",
      same_tags_subtitle: "थप उल्लेखनीय सम्बन्धित वस्तुहरू फेला पार्नुहोस्।",
      same_category_subtitle: "यस श्रेणीमा थप उल्लेखनीय वस्तुहरू फेला पार्नुहोस्।",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "{product} यससँग अर्डर गर्नुहोस्",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "{vendor} को स्टोर हेर्नुहोस्",
  },

  login: {
    welcome: "स्वागत छ",
  },


};
