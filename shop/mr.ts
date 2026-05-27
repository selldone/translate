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
  surveys: ["अतिशय गरीब", "गरीब", "सामान्य", "चांगले", "उत्कृष्ट"],

  /** @see SFooterSection **/
  footer: {
    map: "नकाशा",
    email: "ईमेल",
    phone: "फोन",
    address: "पत्ता",

    copyright:
      "सामग्रीचा वापर केवळ गैर-व्यावसायिक हेतूंसाठी आणि स्त्रोताच्या संदर्भात ({shop_title} सह दुवा). सर्व हक्क {shop_title} कडे राखीव आहेत.",
    powered_by: "द्वारा संचालित",
    privacy: "गोपनीयता धोरण",
    term_of_use: "वापरण्याच्या अटी",
    shop_app_setting: "दुकान सेटिंग आणि GDPR",

    dialog_setting: {
      title: "खरेदी अनुप्रयोग सेटिंग",
      app_list: "अर्जांची यादी",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "विकले गेले",
    review_unit: "पुनरावलोकन करा",
    not_original: "मूळ नाही",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "फिल्टर करा",
    native: {
      title: "अर्ज लॉगिन",
      message:
        "या अॅपला तुमच्या स्टोअर खात्याच्या माहितीमध्ये प्रवेश आवश्यक आहे. यामध्ये नाव, संपर्क क्रमांक, पत्ता, ईमेल, ऑर्डर इतिहास, ऑर्डर करणे आणि या स्टोअरवरील टिप्पण्या पोस्ट करणे यांचा समावेश आहे.",
      message_bold:
        "या स्टोअरमध्ये प्रवेश करण्यासाठी अधिकृत स्टोअर अॅप वापरण्याची खात्री करा.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "यानुसार क्रमवारी लावा",
    title_small: "यानुसार क्रमवारी लावा..",
    nothing: "काहीही नाही",
    most_views: "सर्वाधिक दृश्ये",
    most_likes: "सर्वात लोकप्रिय",
    most_recent: "नवीनतम",
    most_sell: "सर्वोत्तम विक्री",
    cheapest: "सर्वात स्वस्त",
    most_expensive: "सर्वात महाग",
    only_available: "उपलब्ध",
    view_mode: {
      normal: "सामान्य",
      grid: "ग्रिड",
      list: "यादी",
      insta: "इन्स्टा",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "बनावट",
    action: "लिलाव",
    compare_limit: "10 आयटम मर्यादा",
    compare_add: "तुलना करा",
    compare_be_in_list: "तुलना यादीत",

    type: "प्रकार",
    brand: "ब्रँड",
    category: "श्रेणी",
    discount: "सवलत",
    track_price: "किंमत ट्रॅक करा",
    waiting_for_auction: "लिलावाची वाट पाहत आहात?",
    inform_auction: "मला लिलावाबद्दल सांगा",
    return_in_days: "{days} दिवसांची वॉरंटी रिटर्न",
    support24h7: "24 तास 7 दिवस समर्थन",
    support_normal: "कामाचे तास समर्थन",
    original_guarantee: "मूळ हमी",
    cod_payment: "कॅश ऑन डिलिव्हरी सपोर्ट",

    pros: "साधक",
    cons: "बाधक",

    external_link: "पुढे वाचा",
    notifications: {
      congratulation: "अभिनंदन",
      waiting_list_add_success:
        "या उत्पादनाचा लिलाव झाल्यावर आम्ही तुम्हाला सूचित करू.",
      waiting_list_delete_success: "तुम्ही लिलावाच्या प्रतिक्षा यादीतून बाहेर पडलात.",
    },

    offer_message: "{min_quantity} खरेदी करा या आयटमसाठी {percent}% सूट मिळवा",
    up_to: "प्रति ऑर्डर {per_order}x पर्यंत",
    get_free: "मोफत मिळवा",
    get_off: "{percent}% सूट मिळवा",
    select_a_vendor_message: "कृपया विक्रेता निवडा.",
    product_description_header: "{product} सादर करत आहे",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "उपलब्धतेची वाट पाहत आहे",
    inform_me_when_available: "याची वाट पाहत आहात?",
    pay_buy: "पैसे द्या आणि खरेदी करा",
    quantity: "मोजा",
    quantity_in_basket: "कार्टमधील आयटम",
    count_unit: "x",
    remove: "काढा",
    add_to_basket: "कार्टमध्ये जोडा",
    buy: "खरेदी करा",
    subscribe_now: "आत्ता सभासद व्हा",
    unsubscribe: "सदस्यत्व रद्द करा",
    select_a_subscription_plan: "प्रथम एक योजना निवडा!",
    manage_subscriptions: "सदस्यता व्यवस्थापित करा",
    notifications: {
      inform_add_success: "ते उपलब्ध झाल्यावर आम्ही तुम्हाला कळवू.",
      inform_remove_success: "तुम्हाला प्रतीक्षा यादीतून काढून टाकण्यात आले आहे.",
    },
    zip_pin_input: "ZIP / PIN",
    zip_pin_not_available_msg: "या ठिकाणी उपलब्ध नाही!",
    zip_pin_placeholder: "ZIP/PIN कोड निवडा...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "पुनरावलोकन करा",
    spec: "तपशील",
    comments: "टिप्पण्या",
    price: "किंमत",
    rate: "दर",
    comment: "टिप्पणी",
    warranty: "हमी",
    return_policy: "रिटर्न पॉलिसी",
    guide: "मार्गदर्शन",
    shipping: "शिपिंग",
    related_products_title: "संबंधित उत्पादने",
    related_categories_title: "संग्रहांमध्ये शोधा",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "ऑर्डर इतिहास",
      profile: "माझे प्रोफाइल",
      favorites: "आवडते आयटम",
      gift_cards: "भेटपत्र",
      return_requests: "ऑर्डर परत केल्या",
      basket: "शॉपिंग कार्ट",
    },
    user_menu: {
      my_shops: "माझे स्टोअर्स",
      go_to_admin: "{shop_name} व्यवस्थापित करा",
      exit_from: "लॉगआउट {shop_name}",
      chips: "{chips} चिप्स",
    },
    login_to_shop: "स्टोअरमध्ये लॉग इन करा",
    login_to_shop_short: "लॉगिन",
    item_in_basket_message: "{count} हा आयटम तुमच्या कार्टमध्ये आहे.",
    search_title: "स्टोअरमध्ये शोधा {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "कार्ट",
    basket_is_empty: "तुमची कार्ट रिकामी आहे.",
    total_price: "एकूण",
    view_basket: "तुमची कार्ट",
    more: "आणखी...",
    accept_and_pay: "तपासा",
    items: "आयटम",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "नाकारले",
    table: {
      code: "ऑर्डर कोड",
      reserved: "तारीख",
      delivery_state: "वितरण स्थिती",
      price: "एकूण किंमत",
      status: "पैसे भरल्याची स्थिती",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "ऑर्डर कोड",
      items: "वस्तू",
      reserved: "तारीख",
      delivery_state: "नवीनतम स्थिती",
      price: "एकूण किंमत",
      status: "पैसे भरल्याची स्थिती",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "गिफ्ट कार्ड",
      comments: "टिप्पण्या",
      favorites: "आवडी",
      return_requests: "परतावा",
      addresses: "पत्ते",
      profile: "प्रोफाइल",
      orders: "आदेश",
      wallets: "वॉलेट्स",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "माझी वॉलेट्स",
    subtitle: "तुम्ही पात्र असाल आणि कॅशबॅक कार्यक्रम सक्रिय असेल, तर तुमच्या ऑर्डरचा एक भाग तुमच्या वॉलेटमध्ये जमा केला जाईल. ही रक्कम तुम्ही पुढील खरेदीसाठी वापरू शकता."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"माझ्या वॉलेटची शिल्लक",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "ऑर्डर करा",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "पेमेंट",
      payment_waiting: "पेमेंटची वाट पाहत आहे",
      payment_completed: "पैसे दिले",
      table: {
        title: "शीर्षक",
        amount: "रक्कम",
        description: "वर्णन",
      },
      total_payment: "दिलेली रक्कम",
      discount: "सवलत",
      discount_code: "सवलत कोड",
      delivery_fee: "वाहतूक खर्च",
      delivery_fee_after: "डिलिव्हरी दिली नाही",

      total_price: "एकूण वस्तूंची किंमत",
      total_items_discount: "आयटम सवलत",
      total_price_after_offers: "ऑफर लागू केल्यानंतर एकूण",
      total_order_price_before_tax: "करपूर्व एकूण किंमत",

      buyer_payment: "खरेदीदार पेमेंट रक्कम",

      payment_is_in_require_capture_message:
        "आम्हाला तुमचे पेमेंट मिळाले आहे, परंतु ते अद्याप कॅप्चर झालेले नाही.",
      settle_the_earlier_bill_first: "आधीचे बिल आधी भरून पूर्ण करा!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "डिलिव्हरी",
      subtitle: "खरेदीदार माहिती",
      confirm_received_action: "उत्पादन पावतीची पुष्टी करा",
      confirm_received_info:
        "तुम्हाला ऑर्डर मिळाल्यास पुष्टीकरण बटणावर क्लिक करा. आवश्यक असल्यास, तुम्हाला पुष्टीकरण मिळाल्यास तुम्ही रेफरल सबमिट करण्यास सक्षम असाल.",
      Recipient: "प्राप्तकर्ता",
      bill: "चलन",
      name: "नाव",
      tel: "फोन",
      email: "ईमेल",
      country: "देश",
      state: "राज्य",
      city: "शहर",
      address: "पत्ता",
      building_no: "इमारत क्रमांक",
      unit_no: "युनिट क्रमांक",
      postal_code: "पिनकोड",
      description: "वर्णन",
      order_delivered: "ऑर्डर वितरित केली आहे.",
      delivery_time: "वितरण वेळ",
      tracking_code: "ट्रॅकिंग कोड",
      tracking_url: "ट्रॅकिंग URL",

      notifications: {
        confirm_delivery: "तुमच्या ऑर्डरची पुष्टी झाली आहे.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "वस्तूंच्या मौलिकतेची हमी",
      return: "परत",
      table: {
        product: "उत्पादनाचे नांव",
        count: "मोजा",
        unit_price: "युनिट किंमत",
        total_price: "एकूण किंमत",
        discount: "सवलत",
        final_price: "अंतिम किंमत",
        returned: "परतले",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "परत",
    count_input: "परत केलेल्या वस्तूंची संख्या",
    count_input_message: "तुम्ही किती वस्तू परत करता?",
    reason_input: "परत येण्याचे कारण",
    reason_input_message: "हा आयटम परत करण्याचे कारण निवडा.",
    note_input: "वर्णन",
    note_input_hint: "परत येण्याचे कारण सांगा..",
    note_input_message:
      "आवश्यक असल्यास हा आयटम परत करण्याचे कारण सांगा.",
    media_message:
      "उत्पादन स्थिती माहितीसाठी अधिक चांगले समर्थन मिळविण्यासाठी तुम्ही उत्पादनाची प्रतिमा, ऑडिओ किंवा व्हिडिओ येथे अपलोड करू शकता. फाइल निवडल्याने आपोआप पाठवले जाईल आणि पुष्टी होईल.",
    video: "व्हिडिओ",
    voice: "आवाज",
    add_action: "परतीची विनंती पाठवा",
    notifications: "तुमची परतावा विनंती यशस्वीरित्या नोंदणीकृत झाली आहे.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "ऑर्डर करा",
    info: {
      title: "आभासी उत्पादन खरेदी केले",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "माझी वैयक्तिक माहिती",
    name: "नाव",
    email: "ईमेल",
    tel: "दूरध्वनी",
    identity: "प्रमाणीकरण",
    success_kyc: "सत्यापित केवायसी",
    no_kyc: "KYC नाही",
    club: "वापरकर्ता स्तर",
    subscription: "बातम्या सदस्यता",
    leave_shop: "हे स्टोअर सोडा आणि सर्व ग्राहक स्तर काढून टाका",
    leave_shop_action: "दुकान सोडा",
    edit_personal_info: "वैयक्तिक माहिती संपादित करा",
    leave_dialog: {
      title: "दुकान सोडा",
      message:
        "या स्टोअरची सदस्यता रद्द केल्याने तुमची ऑर्डर माहिती आणि रेकॉर्ड हटवले जाणार नाहीत.",
      action: "सोडा",
    },
    notifications: {
      leave_success: "दुकान सोडा",
    },
    club_table: {
      discount: "सवलत",
      limit: "मर्यादा",
      currency: "चलन",
      free_shipping: "मोफत शिपिंग",
    },

    my_profile: {
      title: "माझे प्रोफाइल",
      subtitle: "ही स्टोअरसाठी माझी ग्राहक प्रोफाइल माहिती आहे.",
      edit_action: "प्रोफाइल संपादित करा"
    },
    subscribe_status: {
      subscribed: "मी ईमेलद्वारे ताज्या बातम्या आणि प्रमोशन मिळवण्यासाठी सदस्यता घेतली आहे.",
      unsubscribed: "मी ईमेलद्वारे कोणत्याही बातम्या किंवा प्रमोशन मिळवण्यासाठी सदस्यता घेतलेली नाही."
    },
    my_club: {
      subtitle: "माझी क्लब पातळी आणि तिचे फायदे."
    },
    kyc: {
      subtitle: "ही माझी जागतिक ओळख माहिती आहे."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "शॉपिंग कार्ट",
    total_price: "एकूण रक्कम",
    shipping: "वाहतूक खर्च",
    free_shipping: "मोफत शिपिंग",
    shipping_not_pay: "समाविष्ट नाही",
    total_discount: "एकूण सवलत",
    customer_club: "क्लायंट क्लब सदस्य",
    customer_club_discount: "सदस्य सवलत",
    final_price: "अंतिम पेमेंट",
    lead_time: "तयारीची वेळ",
    lead_time_unit: "तास",
    receive_time: "प्राधान्य वितरण वेळ",
    select_time: "वितरण वेळ निवडा",
    no_select_time: "लवकरात लवकर",
    transportation_type: "शिपिंग प्रकार",
    days_input: "वितरण दिवस",
    days_input_label: "दिवस",
    days_input_no_data: "किमान एक दिवस निवडा",
    time_input: "वितरण वेळ",
    time_input_label: "येथे वितरण",
    time_input_label_no_data: "किमान एक वेळ मध्यांतर निवडा",
    support_cod: "घरपोच दिल्यावर रोख रक्कम",
    not_support_cod: "स्थानिक पातळीवर पैसे देऊ शकत नाही!",
    final_confirm_action: "अंतिम ऑर्डर पुष्टीकरण",
    pay_and_complete_action: "आता द्या",
    pre_confirm_service: "विनंती सबमिट करा",
    cross_selling_discount: "संकलन सवलत",

    errors: {
      no_address: "तुमची ऑर्डर ज्यावर पाठवायची आहे तो पत्ता निवडा.",
      no_phone: "मालाची पावती समन्वयित करण्यासाठी संपर्क क्रमांक प्रविष्ट करा.",
      select_billing_country: "तुमचा बिलिंग देश निवडा",
      select_billing_state: "तुमचा कर प्रदेश निवडा",
    },
    same_billing_address: "प्राप्तकर्त्याच्या माहितीप्रमाणेच बिलिंग माहिती",
    same_billing_address_desc:
      "बिलिंग पत्ता शिपिंग पत्त्यासारखाच आहे.",
    custom_billing_info: "भिन्न बिलिंग माहिती",
    custom_billing_info_desc:
      "तुम्ही तुमचा कर क्रमांक टाकू शकता आणि बिलिंगसाठी वेगळा पत्ता सेट करू शकता.",
    basket_empty: "टोपली रिकामी आहे",
    extra_shipping_count: "तुम्हाला {count} पॅकेजेस मिळतील.",
    select_location_error:
      "नकाशावर शिपमेंटच्या पावतीचे ठिकाण शोधा आणि प्राप्तकर्त्याचा अचूक पत्ता निर्धारित करण्यासाठी नकाशाच्या मध्यभागी असलेल्या निर्देशकावर क्लिक करा.",

    billing_business_desc: "हे कर क्रमांक असलेले व्यवसाय खाते आहे.",
    billing_personal_desc: "ते वैयक्तिक खाते आहे.",

    no_billing_title: "बिलिंग नाही",
    no_billing_desc: "बिलिंग पत्ता रिकामा सोडा.",

    can_pay_cod_message:"तुम्ही या ऑर्डरसाठी डिलिव्हरीवेळी रोखीने पैसे देऊ शकता.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "तास",
    count_input: "मोजा",

    price_changed: "किंमत बदलली आहे. नवीन किंमत:",
    offer: "{count}x आयटमवर {percent}% सूट मिळवा",
    offer_free: "{count}x मोफत मिळवा",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "माझे पत्ते",
    subtitle:"तुमचे जतन केलेले पत्ते येथे पहा आणि सहजपणे नवीन पत्ता जोडा.",
    new_action: "नवीन पत्ता",
    receiver: "प्राप्तकर्ता",
    address: "पत्ता",
    building_no: "परवाना प्लेट",
    building_unit: "युनिट",
    postcode: "पिनकोड",
    tel: "दूरध्वनी",
    description: "नोंद",

    map: {
      title: "माझे पत्ते",
      confirm: "पत्ता नोंदणी",
      address_type: "पत्ता",
      receptor_type: "प्राप्तकर्ता",
    },
    add_dialog: {
      title: "नवीन पत्त्याचे नाव",
      message: "नवीन पत्त्यासाठी शीर्षक प्रविष्ट करा.",
      address_name_input: "पत्ता (आवश्यक)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "विनंत्या परत करा",
    subtitle:"तुमच्या परतावा विनंत्या येथे पहा. परतावा धोरण असलेल्या वस्तूंसाठी, तुम्ही ऑर्डर पृष्ठावर परतावा विनंती सबमिट करू शकता.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "विशलिस्ट",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "माझ्या टिप्पण्या",
    first_post: "पहिली पोस्ट",
    last_edit: "शेवटचे संपादन",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "माझी भेट कार्डे",
    add_action: "कार्ड जोडा",
    add_card_dialog: {
      title: "गिफ्ट कार्ड जोडा",
      message:
        "कार्ड क्रमांक आणि सुरक्षा कोड प्रविष्ट करा. तुमच्या खात्यात भेट कार्ड जोडले जाईल.",
      card_number_input: "कार्ड क्रमांक",
      info: "टीप: स्टोअरमधून खरेदी करताना, तुम्हाला गिफ्ट कार्डसह पैसे देण्याचा पर्याय दाखवला जाईल. हा पर्याय निवडून, तुमच्या रिचार्ज शिल्लक रकमेची रक्कम ऑर्डरच्या रकमेतून वजा केली जाईल.",
      add_action: "कार्ड नोंदणी",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "उत्पादनाची तुलना करा",
    action_button: "तुलना करा",

    /** {@see SComparisonList} **/
    list: {
      no_data: "तुलना सूचीमध्ये कोणतीही उत्पादने जोडली गेली नाहीत.",
      price: "किंमत",
      type: "प्रकार",
      brand: "ब्रँड",
      warranty: "हमी",
      variants_comparison: "उत्पादन प्रकारांची तुलना करा",
      spec: "तांत्रिक माहिती",
      pros: "साधक",
      cons: "बाधक",
      user_review: "वापरकर्ता टिप्पण्या",
      rating: "रेटिंग",
      rating_count: "पुनरावलोकनांची संख्या",
      info: "तुम्ही खालील लिंक पाठवून तुमच्या मित्रांसह हे उत्पादन तुलना सारणी शेअर करू शकता किंवा ही लिंक सेव्ह करून नंतर त्यात प्रवेश करू शकता.",
      copy_action: "तुलना लिंक कॉपी करा",
      check_list: ["होय", "आहे"],
      cross_list: ["नाही", "नाही"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "फक्त मूळ",
    only_has_discount: "फक्त सवलत",
    price_range: "मुल्य श्रेणी",
    brands: "ब्रँड",
    main_shop_page: "मुख्य पृष्ठ संग्रहित करा",
    home: "मुख्यपृष्ठ",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "प्रिय {user}, तुम्ही हे उत्पादन खरेदी केले आहे. तुम्हाला या उत्पादनाबद्दल काय वाटते?",
    notification: {
      title: "अभिनंदन",
      message: "तुमची टिप्पणी रेकॉर्ड केली गेली आहे.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "ब्लॉग",
    add_new_blog: "नवीन ब्लॉग",
    popular: "लोकप्रिय",
    topics: "विषय",
    suggestions: "सूचना",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "आमच्याबद्दल",
    terms: "वापरण्याच्या अटी",
    privacy: "गोपनीयता धोरण",
    contact_us: "आमच्याशी संपर्क साधा",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "आमच्याशी संपर्क साधा फॉर्म",
    name: "नाव",
    email: "ईमेल",
    phone: "फोन",
    message: "संदेश",
    notifications: {
      success: "आपला संदेश पाठवला गेला आहे.",
    },
    submitted_title: "आमच्यापर्यंत पोहोचल्याबद्दल धन्यवाद!",
    submitted_message:
      "आमच्याशी संपर्क साधण्यासाठी आम्ही तुमचा वेळ प्रशंसा करतो. तुमचा संदेश प्राप्त झाला आहे आणि आमची टीम सध्या त्याचे पुनरावलोकन करत आहे. आम्ही शक्य तितक्या लवकर प्रतिसाद देऊ, आणि या वेळी तुमच्या संयमासाठी आम्ही तुमचे आभारी आहोत. तुमची स्वारस्य आणि अभिप्राय आमच्यासाठी महत्त्वपूर्ण आहेत आणि आम्ही तुम्हाला शक्य तितके सर्वोत्तम समर्थन प्रदान करण्यासाठी वचनबद्ध आहोत.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "प्रदान खात्री",
      payment_success: "पेमेंट पूर्ण झाले.",
      buy_title: "खरेदी करा",
      pay_by_giftcards: "तुमच्या ऑर्डरचे गिफ्ट कार्डने पैसे दिले गेले.",
      free_order: "तुमची ऑर्डर मोफत आहे.",
      pay_by_cod: "तुमची ऑर्डर कॅश ऑन डिलिव्हरी म्हणून जोडली गेली आहे.",
      pay_by_dir:
        "तुमची ऑर्डर यशस्वीरित्या जोडली गेली आहे. आता तुम्ही थेट मनी ट्रान्सफरद्वारे पैसे देऊ शकता आणि नंतर ऑर्डर पृष्ठावर पेमेंट पावती अपलोड करू शकता.",
      pay_title: "पेमेंट",
      qr_code_payment: "पेमेंट QR कोड पत्ता तयार केला.",
      connecting_to_online_gateway: "ऑनलाइन पेमेंट गेटवेशी कनेक्ट होत आहे.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "सुरुवातीपर्यंत राहिले",
    title_between_start_end: "शेवटपर्यंत राहिले",
    title_after_end: "संपले",
    title_no_start_end: "कालावधीशिवाय!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "तुम्हाला प्रति ऑर्डर एक भेट मिळू शकते.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "कूपन कोड",
    add_coupon: "कूपन जोडा",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "एवोकॅडो फॉर्म सक्षम नाही!",
    last_update: "शेवटचे अपडेट:",
    step1:
      "1. तुम्ही ऑर्डर करू इच्छित उत्पादनाचे नाव आणि तपशील प्रविष्ट करा आणि जोडा बटण क्लिक करा.",
    title_plc: "उत्पादनाचे नाव प्रविष्ट करा.",
    description_plc: "तुमच्याकडे उत्पादनाचे अधिक वर्णन आहे का?",
    link_plc: "तुमच्याकडे उत्पादनाची लिंक आहे का?",
    image: "उत्पादन प्रतिमा",
    image_msg: "आवश्यक असल्यास आपण उत्पादन प्रतिमा पाठवू शकता.",
    add_item: "सामान जोडा",
    items_list: "विनंती केलेल्या उत्पादनांची यादी",
    currency_msg: "तुम्ही या ऑर्डरची रक्कम या चलनाने भरणे आवश्यक आहे.",
    step2:
      "2. सर्व इच्छित आयटम जोडल्यानंतर, ऑर्डर पुनरावलोकन विनंती बटणावर क्लिक करा. या टप्प्यावर, आम्ही ऑर्डरचे पुनरावलोकन करू आणि तुम्हाला किंमतीबद्दल कळवू. या लिंकवर क्लिक करून, तुम्ही किंमत आणि पेमेंट लिंक पाहण्यास सक्षम असाल.",
    order_action: "ऑर्डर नोंदणी",
    show_all: "सगळं दाखवा",
    show_accepted: "पुष्टी केलेल्या वस्तू दाखवा",
    last_orders: "तुमच्या अलीकडील ऑर्डरची यादी",
    pending_status: "निरीक्षणाखाली",
    check_now: "ऑर्डर तपासा",
    add_new_order: "नवीन ऑर्डर करा",
    pay_online: "ऑनलाइन पैसे द्या",
    pricing_not_completed_message:
      "तुमच्या ऑर्डरचे पुनरावलोकन केले जात आहे. तुमच्या ऑर्डरचे लवकरच पुनरावलोकन केले जाईल आणि किंमत दिली जाईल आणि तुम्ही ऑर्डरचे पैसे भरण्यास सक्षम असाल.",

    select_address_message:
      "कृपया तुमचा पत्ता प्रविष्ट करा आणि नंतर तुम्ही ऑर्डर सबमिट करू शकता.",

    delete_item_dialog: {
      title: "शॉपिंग कार्टमधून आयटम काढा",
      message: "तुम्हाला कार्टमधून हा आयटम हटवायचा आहे का?",
      action: "होय, हटवा",
    },

    notifications: {
      order_success: "तुमची ऑर्डर यशस्वीरीत्या देण्यात आली.",
      delete_success: "आयटम हटवला.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "ऑर्डर निर्मिती",
    message:
      "उत्पादन कोड स्कॅन करून तुम्हाला खरेदी करायच्या असलेल्या उत्पादनांची यादी तयार करा.",

    currency_msg: "तुम्हाला ज्या चलनाने पैसे द्यायचे आहेत.",
    order_action: "पेमेंट",
    add_new_order: "नवीन ऑर्डर",
    continue_order: "ऑर्डर सुरू ठेवा",

    delete_item_dialog: {
      title: "शॉपिंग कार्टमधून आयटम काढा",
      message: "तुम्हाला कार्टमधून हा आयटम हटवायचा आहे का?",
      action: "होय, हटवा",
    },
    notifications: {
      order_success: "तुमची ऑर्डर यशस्वीरीत्या देण्यात आली.",
      delete_success: "आयटम हटवला.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "पेमेंट पावतीची प्रतिमा अपलोड करा.",
    upload_payment_receipt_done:
      "✔ तुम्ही आधीच पावतीची प्रतिमा अपलोड केली आहे, आमच्या मंजुरीची प्रतीक्षा करा. तुम्हाला बदलण्याची आवश्यकता असल्यास, तुम्ही मागील इमेज नवीनसह बदलू शकता.",
    public_form_title: "पैसे हस्तांतरणासाठी खाते माहिती",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "करण्याची यादी",
      message: "तुम्ही करू इच्छित असलेल्या कामाची शीर्षके निर्दिष्ट करा आणि खरेदीदाराला कळू द्या की ते किती पुढे गेले आहे.",
    },
    booking: {
      title: "बुकिंग / आरक्षण",
      message: "या ऑर्डरवर एका ठराविक वेळेत प्रक्रिया केली जाईल, ग्राहकाने इच्छित कालावधी निवडला आहे, तुम्हाला निवडलेल्या कालावधीत काही बदल करायचे असल्यास, ग्राहकाला कळवा.",

      selected_checkin: "ग्राहकाने निवडलेले चेक-इन",
      selected_checkout: "ग्राहकाने निवडलेले चेक-आउट",
      change_days_question:
        "ग्राहकाने निवडलेल्या दिवसांमध्ये तुम्हाला बदल करण्याची गरज आहे का?",
      show_calendar: "ऑर्डरचे कॅलेंडर दर्शवा",
    },
    pricing: {
      title: "किंमत",
      message: "या सेवेसाठी तुम्ही किती शुल्क आकारता?",
    },
    subscription: {
      title: "वर्गणी",
      message:
        "तुम्ही ही सेवा दररोज खरेदी करून सदस्यत्व कालावधी निवडू शकता. आपण आधीच प्रविष्ट केलेली डीफॉल्ट मूल्ये बदलू इच्छित असल्यास खरेदीदारास कळवा.",
      duration: "सदस्यता कालावधी",
    },
    charge: {
      title: "चार्ज करा",
      message:
        "तुम्ही या आयटमसाठी शुल्क निर्दिष्ट केले आहे. तुम्ही ग्राहकाने खरेदी केलेल्या वस्तूसाठी शुल्काची रक्कम बदलू शकता.",
      charge: "चार्ज करा",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "प्रवेश तपासण्यासाठी प्रतीक्षा करत आहे...",
    no_access_message:
      "दुर्दैवाने, तुम्हाला आमच्या स्टोअरमध्ये प्रवेश नाही.<br/> कृपया आमच्याशी संपर्क साधा.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "ऑर्डर शेअर करा",
    title: "ही ऑर्डर इतरांसोबत शेअर करा.",
    message:
      "हा एक सुरक्षित दुवा आहे, फक्त तुमच्या ओळखीत असलेल्यांसोबत शेअर करा. या लिंकसह प्रत्येकजण तुमची ऑर्डर डुप्लिकेट करू शकतो आणि निवडलेला पत्ता पाहू शकतो. त्यात तुमच्या वर्तमान कार्टबद्दल माहिती असेल.",
    valid_period: "ही लिंक ४८ तासांनंतर कालबाह्य होईल.",
    import_order_action: "ऑर्डर आयात करा",
    retrieve_dialog_title: "बाह्य ऑर्डर पुनर्प्राप्त करा",
    address_included: "बास्केट आयटम + पत्ता सामायिक करा",
    address_excluded: "फक्त बास्केट आयटम सामायिक करा",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "किमती",
    inventory: "इन्व्हेंटरी",
    discount: "सवलत",
  },

  rating: {
    product_rating_message:
      "या उत्पादनाला 5 पैकी {rate} तारे मिळाले आहेत आणि {rate_count} लोकांनी रेट केले आहे.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "अन्वेषण!",
      same_tags_subtitle: "अधिक उल्लेखनीय संबंधित आयटम शोधा.",
      same_category_subtitle: "या श्रेणीतील आणखी उल्लेखनीय वस्तू शोधा.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "{product} यासोबत ऑर्डर करा",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "{vendor} चे स्टोअर पहा",
  },

  login: {
    welcome: "स्वागत आहे",
  },


};
