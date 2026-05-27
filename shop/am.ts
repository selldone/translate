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
  surveys: ["በጣም ድሃ", "ድሆች", "መደበኛ", "ጥሩ", "በጣም ጥሩ"],

  /** @see SFooterSection **/
  footer: {
    map: "ካርታ",
    email: "ኢሜይል",
    phone: "ስልክ",
    address: "አድራሻ",

    copyright:
      "ይዘትን ለንግድ ላልሆኑ ዓላማዎች እና ከምንጩ ጋር በማጣቀስ ብቻ መጠቀም (ከ{shop_title} ጋር ያለው አገናኝ)። ሁሉም መብቶች ለ{shop_title} የተጠበቁ ናቸው።",
    powered_by: "የተጎላበተው በ",
    privacy: "የ ግል የሆነ",
    term_of_use: "የአጠቃቀም መመሪያ",
    shop_app_setting: "የሱቅ ቅንብር እና GDPR",

    dialog_setting: {
      title: "መተግበሪያዎችን ይግዙ",
      app_list: "የመተግበሪያዎች ዝርዝር",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "ተሽጦ አልቆዋል",
    review_unit: "ግምገማ",
    not_original: "ኦሪጅናል አይደለም።",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "አጣራ",
    native: {
      title: "የመተግበሪያ መግቢያ",
      message:
        "ይህ መተግበሪያ የማከማቻ መለያህን መረጃ መድረስን ይፈልጋል። ይህ የስም ፣ የእውቂያ ቁጥር ፣ አድራሻ ፣ ኢሜል ፣ የትዕዛዝ ታሪክ ፣ ማዘዝ እና በዚህ መደብር ላይ አስተያየቶችን መለጠፍን ያካትታል ።",
      message_bold:
        "ወደዚህ መደብር ለመግባት ኦፊሴላዊውን የመደብር መተግበሪያ መጠቀምዎን ያረጋግጡ።",
    },
  },

  /** @see SortView **/
  sort: {
    title: "ቅደምተከተሉ የተስተካከለው",
    title_small: "ቅደምተከተሉ የተስተካከለው..",
    nothing: "መነም",
    most_views: "አብዛኞቹ እይታዎች",
    most_likes: "በ ጣ ም ታ ዋ ቂ",
    most_recent: "አዲሱ",
    most_sell: "ምርጥ ሽያጭ",
    cheapest: "በጣም ርካሹ",
    most_expensive: "በጣም ውድ",
    only_available: "ይገኛል።",
    view_mode: {
      normal: "መደበኛ",
      grid: "ፍርግርግ",
      list: "ዝርዝር",
      insta: "ኢንስታ",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "የውሸት",
    action: "ጨረታ",
    compare_limit: "የ 10 እቃዎች ገደብ",
    compare_add: "ለማነፃፀር ያክሉ",
    compare_be_in_list: "በንፅፅር ዝርዝር ውስጥ",

    type: "ዓይነት",
    brand: "የምርት ስም",
    category: "ምድብ",
    discount: "ቅናሽ",
    track_price: "ዋጋ ይከታተሉ",
    waiting_for_auction: "ጨረታውን እየጠበቅን ነው?",
    inform_auction: "ስለ ጨረታ ንገረኝ።",
    return_in_days: "{days} የቀኖች ዋስትና መመለሻ",
    support24h7: "ድጋፍ 24 ሰዓታት 7 ቀናት",
    support_normal: "የሥራ ሰዓት ድጋፍ",
    original_guarantee: "ኦሪጅናል ዋስትና",
    cod_payment: "በጥሬ ገንዘብ አቅርቦት ድጋፍ",

    pros: "ጥቅም",
    cons: "ጉዳቶች",

    external_link: "ተጨማሪ ያንብቡ",
    notifications: {
      congratulation: "እንኳን ደስ አላችሁ",
      waiting_list_add_success:
        "ይህ ምርት ሲሸጥ እናሳውቅዎታለን።",
      waiting_list_delete_success: "ከጨረታ መጠበቂያ ዝርዝር ወጥተሃል።",
    },

    offer_message: "ለእነዚህ እቃዎች {min_quantity} ይግዙ {percent}% ቅናሽ ያግኙ",
    up_to: "በትዕዛዝ እስከ {per_order}x ድረስ",
    get_free: "ነፃ ያግኙ",
    get_off: "{percent}% ቅናሽ ያግኙ",
    select_a_vendor_message: "እባክዎን ሻጭ ይምረጡ።",
    product_description_header: "{product}ን በማስተዋወቅ ላይ",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "ተገኝነትን በመጠበቅ ላይ",
    inform_me_when_available: "ይህን በመጠበቅ ላይ?",
    pay_buy: "ይክፈሉ እና ይግዙ",
    quantity: "መቁጠር",
    quantity_in_basket: "በጋሪው ውስጥ ያሉ እቃዎች",
    count_unit: "x",
    remove: "አስወግድ",
    add_to_basket: "ወደ ግዢው ቅርጫት ጨምር",
    buy: "ግዛ",
    subscribe_now: "አሁን ይመዝገቡ",
    unsubscribe: "ከደንበኝነት ምዝገባ ይውጡ",
    select_a_subscription_plan: "መጀመሪያ እቅድ ይምረጡ!",
    manage_subscriptions: "የደንበኝነት ምዝገባዎችን ያስተዳድሩ",
    notifications: {
      inform_add_success: "ሲገኝ እናሳውቅዎታለን።",
      inform_remove_success: "ከተጠባባቂ ዝርዝር ውስጥ ተወግደዋል።",
    },
    zip_pin_input: "የፖስታ / PIN ኮድ",
    zip_pin_not_available_msg: "በዚህ አካባቢ አይገኝም!",
    zip_pin_placeholder: "የፖስታ/PIN ኮድ ይምረጡ...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "መግለጫ",
    spec: "ዝርዝር መግለጫ",
    comments: "ግምገማዎች",
    price: "ዋጋ",
    rate: "ደረጃ",
    comment: "አስተያየት",
    warranty: "ዋስትና",
    return_policy: "የተመላሽ እቃ አፈፃፀም ሂደት",
    guide: "መመሪያ",
    shipping: "መላኪያ",
    related_products_title: "እነዚህንም ሊወዱ ይችላሉ",
    related_categories_title: "በክምችቶች ውስጥ ያግኙ",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "የትዕዛዝ ታሪክ",
      profile: "የግል ማህደሬ",
      favorites: "ተወዳጅ እቃዎች",
      gift_cards: "የስጦታ ካርዶች",
      return_requests: "የተመለሱ ትዕዛዞች",
      basket: "የግዢ ጋሪ",
    },
    user_menu: {
      my_shops: "የእኔ መደብሮች",
      go_to_admin: "{shop_name}ን ያስተዳድሩ",
      exit_from: "ውጣ {shop_name}",
      chips: "{chips} ቺፕስ",
    },
    login_to_shop: "ወደ ማከማቻ ይግቡ",
    login_to_shop_short: "ግባ",
    item_in_basket_message: "{count} ይህ ንጥል በእርስዎ ጋሪ ውስጥ ነው።",
    search_title: "በመደብር ውስጥ ይፈልጉ {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "ጋሪ",
    basket_is_empty: "ጋሪዎ ባዶ ነው።",
    total_price: "ጠቅላላ",
    view_basket: "የእርስዎ ጋሪ",
    more: "ተጨማሪ...",
    accept_and_pay: "ጨርሰህ ውጣ",
    items: "ንጥል(ዎች)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "ውድቅ ተደርጓል",
    table: {
      code: "የትዕዛዝ ኮድ",
      reserved: "ቀን",
      delivery_state: "የማስረከቢያ ሁኔታ",
      price: "ጠቅላላ ዋጋ",
      status: "የክፍያ ሁኔታ",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "የትዕዛዝ ኮድ",
      items: "እቃዎች",
      reserved: "ቀን",
      delivery_state: "የቅርብ ጊዜ ሁኔታ",
      price: "ጠቅላላ ዋጋ",
      status: "የክፍያ ሁኔታ",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "ስጦታ ካርድ",
      comments: "አስተያየቶች",
      favorites: "ተወዳጆች",
      return_requests: "ይመለሳል",
      addresses: "አድራሻዎች",
      profile: "መገለጫ",
      orders: "ትዕዛዞች",
      wallets: "የገንዘብ ቦርሳዎች",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "የእኔ ቦርሳዎች",
    subtitle: "ብቁ ከሆኑ እና የገንዘብ መመለሻ ፕሮግራም ንቁ ከሆነ፣ የትዕዛዝዎ አንድ ክፍል ወደ ቦርሳዎ ይገባል። እነዚህን ገንዘቦች በሚቀጥለው ግዢዎ መጠቀም ይችላሉ።"
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"የእኔ ቦርሳ ቀሪ ሂሳብ",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "ማዘዝ",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "ክፍያ",
      payment_waiting: "ክፍያ በመጠባበቅ ላይ",
      payment_completed: "የተከፈለ",
      table: {
        title: "ርዕስ",
        amount: "መጠን",
        description: "መግለጫ",
      },
      total_payment: "የተከፈለው መጠን",
      discount: "ቅናሽ",
      discount_code: "የቅናሽ ኮድ",
      delivery_fee: "የመላኪያ ወጪ",
      delivery_fee_after: "ምንም መላኪያ አልተከፈለም።",

      total_price: "ጠቅላላ ዕቃዎች ዋጋ",
      total_items_discount: "የዕቃዎች ቅናሽ",
      total_price_after_offers: "ቅናሾችን ከተገበሩ በኋላ አጠቃላይ",
      total_order_price_before_tax: "ቅድመ-ታክስ ጠቅላላ ዋጋ",

      buyer_payment: "የገዢ ክፍያ መጠን",

      payment_is_in_require_capture_message:
        "ክፍያዎን ተቀብለናል፣ ነገር ግን እስካሁን አልተያዘም።",
      settle_the_earlier_bill_first: "መጀመሪያ የቀድሞውን ሂሳብ ያስተካክሉ!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "ማድረስ",
      subtitle: "የገዢ መረጃ",
      confirm_received_action: "የምርት ደረሰኝ ያረጋግጡ",
      confirm_received_info:
        "ትዕዛዙን ከተቀበሉ የማረጋገጫ ቁልፍን ጠቅ ያድርጉ። ካስፈለገ ማረጋገጫ ካገኙ ሪፈራል ማስገባት ይችላሉ።",
      Recipient: "ተቀባይ",
      bill: "ደረሰኝ",
      name: "ስም",
      tel: "ስልክ",
      email: "ኢሜይል",
      country: "ሀገር",
      state: "ግዛት",
      city: "ከተማ",
      address: "አድራሻ",
      building_no: "የግንባታ ቁጥር",
      unit_no: "ክፍል ቁጥር",
      postal_code: "የፖስታ ኮድ",
      description: "መግለጫ",
      order_delivered: "ትዕዛዙ ደርሷል።",
      delivery_time: "የማስረከቢያ ቀን ገደብ",
      tracking_code: "የመከታተያ ኮድ",
      tracking_url: "የመከታተያ ዩአርኤል",

      notifications: {
        confirm_delivery: "ትዕዛዝህ ተረጋግጧል።",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "የእቃዎቹ የመጀመሪያነት ዋስትና",
      return: "ተመለስ",
      table: {
        product: "የምርት ስም",
        count: "መቁጠር",
        unit_price: "ነጠላ ዋጋ",
        total_price: "ጠቅላላ ዋጋ",
        discount: "ቅናሽ",
        final_price: "የመጨረሻ ዋጋ",
        returned: "ተመልሷል",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "ተመለስ",
    count_input: "የተመለሱ ዕቃዎች ብዛት",
    count_input_message: "ምን ያህል እቃዎች ይመለሳሉ?",
    reason_input: "የመመለሻ ምክንያት",
    reason_input_message: "ይህን ንጥል የሚመልስበትን ምክንያት ይምረጡ።",
    note_input: "መግለጫ",
    note_input_hint: "የተመለሰበትን ምክንያት ግለጽ።",
    note_input_message:
      "አስፈላጊ ከሆነ ይህንን ንጥል የሚመልስበትን ምክንያት ይግለጹ።",
    media_message:
      "ለምርት ሁኔታ መረጃ የተሻለ ድጋፍ ለማግኘት የምርቱን ምስል፣ ኦዲዮ ወይም ቪዲዮ እዚህ መስቀል ይችላሉ። ፋይሉን መምረጥ በራስ-ሰር ይልካል እና ያረጋግጣል።",
    video: "ቪዲዮ",
    voice: "ድምጽ",
    add_action: "የመመለሻ ጥያቄ ላክ",
    notifications: "የመመለሻ ጥያቄዎ በተሳካ ሁኔታ ተመዝግቧል።",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "ማዘዝ",
    info: {
      title: "የተገዛ ምናባዊ ምርት",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "የእኔ የግል መረጃ",
    name: "ስም",
    email: "ኢሜይል",
    tel: "ስልክ",
    identity: "ማረጋገጫ",
    success_kyc: "የተረጋገጠ KYC",
    no_kyc: "KYC የለም",
    club: "የተጠቃሚ ደረጃ",
    subscription: "የዜና ምዝገባ",
    leave_shop: "ይህንን መደብር ይልቀቁ እና ሁሉንም የደንበኞች ደረጃ ያስወግዱ",
    leave_shop_action: "ሱቅ ይውጡ",
    edit_personal_info: "የግል መረጃን ያርትዑ",
    leave_dialog: {
      title: "ሱቅ ይውጡ",
      message:
        "የዚህ መደብር ደንበኝነት ምዝገባ መውጣት የትዕዛዝ መረጃዎን እና መዝገቦችን አይሰርዝም።",
      action: "ተወው",
    },
    notifications: {
      leave_success: "ሱቅ ይውጡ",
    },
    club_table: {
      discount: "ቅናሽ",
      limit: "ገደብ",
      currency: "ምንዛሪ",
      free_shipping: "ነጻ ማጓጓዣ",
    },

    my_profile: {
      title: "የእኔ መገለጫ",
      subtitle: "ይህ ለመደብሩ የእኔ ደንበኛ መገለጫ መረጃ ነው።",
      edit_action: "መገለጫን አርትዕ"
    },
    subscribe_status: {
      subscribed: "የቅርብ ጊዜ ዜናዎችን እና ማስተዋወቂያዎችን በኢሜይል ለመቀበል ተመዝግቤያለሁ።",
      unsubscribed: "ምንም ዜና ወይም ማስተዋወቂያ በኢሜይል ለመቀበል አልተመዘገብኩም።"
    },
    my_club: {
      subtitle: "የእኔ የክለብ ደረጃ እና ጥቅሞቹ።"
    },
    kyc: {
      subtitle: "ይህ የእኔ ዓለም አቀፍ መታወቂያ መረጃ ነው።"
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "የግዢ ጋሪ",
    total_price: "አጠቃላይ ድምሩ",
    shipping: "የመላኪያ ወጪ",
    free_shipping: "ነጻ ማጓጓዣ",
    shipping_not_pay: "አልተካተተም",
    total_discount: "አጠቃላይ ቅናሽ",
    customer_club: "የደንበኛ ክለብ አባል",
    customer_club_discount: "የአባል ቅናሽ",
    final_price: "የመጨረሻ ክፍያ",
    lead_time: "የዝግጅት ጊዜ",
    lead_time_unit: "ሰአት",
    receive_time: "ተመራጭ የማድረሻ ጊዜ",
    select_time: "የማስረከቢያ ጊዜን ይምረጡ",
    no_select_time: "በተቻለ ፍጥነት",
    transportation_type: "የማጓጓዣ ዓይነት",
    days_input: "የማስረከቢያ ቀናት",
    days_input_label: "ቀናት",
    days_input_no_data: "ቢያንስ አንድ ቀን ይምረጡ",
    time_input: "የማስረከቢያ ቀን ገደብ",
    time_input_label: "ማድረስ በ",
    time_input_label_no_data: "ቢያንስ አንድ ጊዜ ልዩነት ይምረጡ",
    support_cod: "በመላክ ላይ ጥሬ ገንዘብ",
    not_support_cod: "በአገር ውስጥ መክፈል አልተቻለም!",
    final_confirm_action: "የመጨረሻ ትዕዛዝ ማረጋገጫ",
    pay_and_complete_action: "አሁን ይክፈሉ",
    pre_confirm_service: "ጥያቄ አስገባ",
    cross_selling_discount: "የስብስብ ቅናሽ",

    errors: {
      no_address: "ትዕዛዝዎ እንዲላክ የሚፈልጉትን አድራሻ ይምረጡ።",
      no_phone: "የእቃውን ደረሰኝ ለማስተባበር የእውቂያ ቁጥር ያስገቡ።",
      select_billing_country: "የሂሳብ አከፋፈል ሀገርዎን ይምረጡ",
      select_billing_state: "የግብር ክልልዎን ይምረጡ",
    },
    same_billing_address: "የሂሳብ አከፋፈል መረጃ ከተቀባዩ መረጃ ጋር ተመሳሳይ ነው።",
    same_billing_address_desc:
      "የክፍያ መጠየቂያ አድራሻ ከመላኪያ አድራሻ ጋር አንድ ነው።",
    custom_billing_info: "የተለያዩ የሂሳብ አከፋፈል መረጃ",
    custom_billing_info_desc:
      "የታክስ ቁጥርዎን ማስገባት እና ለክፍያ መጠየቂያ ሌላ አድራሻ ማዘጋጀት ይችላሉ።",
    basket_empty: "ቅርጫቱ ባዶ ነው።",
    extra_shipping_count: "{count} ፓኬጆችን ይቀበላሉ።",
    select_location_error:
      "በካርታው ላይ የጭነት ደረሰኝ ቦታ ይፈልጉ እና በካርታው መሃል ላይ ያለውን አመላካች ጠቅ ያድርጉ የተቀባዩን ትክክለኛ አድራሻ ለመወሰን.",

    billing_business_desc: "የታክስ ቁጥር ያለው የንግድ መለያ ነው።",
    billing_personal_desc: "የግል መለያ ነው።",

    no_billing_title: "የሂሳብ አከፋፈል የለም።",
    no_billing_desc: "የክፍያ መጠየቂያ አድራሻን ባዶ ይተዉት።",

    can_pay_cod_message:"ለዚህ ትዕዛዝ በማድረስ ጊዜ በጥሬ ገንዘብ መክፈል ይችላሉ።",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "ሰአት",
    count_input: "መቁጠር",

    price_changed: "ዋጋው ተለውጧል። አዲስ ዋጋ:",
    offer: "የ{count}x ንጥልን በ{percent}% ቅናሽ ያግኙ",
    offer_free: "{count}x በነጻ ያግኙ",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "የእኔ አድራሻዎች",
    subtitle:"የተቀመጡ አድራሻዎችዎን እዚህ ይመልከቱ፣ እና አዲስ በቀላሉ ያክሉ።",
    new_action: "አዲስ አድራሻ",
    receiver: "ተቀባይ",
    address: "አድራሻ",
    building_no: "የሕንፃ ቁጥር",
    building_unit: "ክፍል",
    postcode: "የፖስታ ኮድ",
    tel: "ስልክ",
    description: "ማስታወሻ",

    map: {
      title: "የእኔ አድራሻዎች",
      confirm: "የአድራሻ ምዝገባ",
      address_type: "አድራሻ",
      receptor_type: "ተቀባይ",
    },
    add_dialog: {
      title: "አዲስ የአድራሻ ስም",
      message: "ለአዲስ አድራሻ ርዕስ አስገባ።",
      address_name_input: "አድራሻ (የሚያስፈልግ)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "ጥያቄዎችን ይመልሱ",
    subtitle:"የመመለሻ ጥያቄዎችዎን እዚህ ይመልከቱ። የመመለሻ ፖሊሲ ላላቸው እቃዎች፣ በትዕዛዝ ገጽ ላይ የመመለሻ ጥያቄ ማቅረብ ይችላሉ።",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "የምኞት ዝርዝር",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "የእኔ አስተያየቶች",
    first_post: "የመጀመሪያ ልጥፍ",
    last_edit: "የመጨረሻ አርትዖት",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "የእኔ የስጦታ ካርዶች",
    add_action: "ካርድ ጨምር",
    add_card_dialog: {
      title: "የስጦታ ካርድ ያክሉ",
      message:
        "የካርድ ቁጥሩን እና የደህንነት ኮድ ያስገቡ። የስጦታ ካርድ ወደ መለያዎ ይታከላል።",
      card_number_input: "የካርታ ቁጥር",
      info: "ማሳሰቢያ: ከሱቅ ሲገዙ, በስጦታ ካርዶች የመክፈል አማራጭ ይታይዎታል. ይህንን አማራጭ በመምረጥ፣ የመሙያ ሒሳብዎ መጠን ከትዕዛዙ መጠን ይቀነሳል።",
      add_action: "የካርድ ምዝገባ",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "ምርትን አወዳድር",
    action_button: "አወዳድር",

    /** {@see SComparisonList} **/
    list: {
      no_data: "በንፅፅር ዝርዝር ውስጥ ምንም ምርቶች አልተጨመሩም።",
      price: "ዋጋ",
      type: "ዓይነት",
      brand: "የምርት ስም",
      warranty: "ዋስትና",
      variants_comparison: "የምርት ልዩነቶችን ያወዳድሩ",
      spec: "ቴክኒካዊ ዝርዝሮች",
      pros: "ጥቅም",
      cons: "ጉዳቶች",
      user_review: "የተጠቃሚ አስተያየቶች",
      rating: "ደረጃ መስጠት",
      rating_count: "የግምገማዎች ብዛት",
      info: "የሚከተለውን ሊንክ በመላክ ይህንን የምርት ንጽጽር ሠንጠረዥ ከጓደኞችዎ ጋር መጋራት ወይም በኋላ ላይ ይህን ሊንክ በማስቀመጥ ማግኘት ይችላሉ።",
      copy_action: "የንጽጽር ማገናኛን ቅዳ",
      check_list: ["አዎ", "ያለው"],
      cross_list: ["አይ", "አላደረገም"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "ኦሪጅናል ብቻ",
    only_has_discount: "ቅናሽ ብቻ",
    price_range: "የዋጋ ክልል",
    brands: "የምርት ስም",
    main_shop_page: "የማከማቻ ዋናው ገጽ",
    home: "ቤት",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "ውድ {user}፣ ይህን ምርት ገዝተሃል። ስለዚህ ምርት ምን ያስባሉ?",
    notification: {
      title: "እንኳን ደስ አላችሁ",
      message: "አስተያየትህ ተመዝግቧል።",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "ብሎግ",
    add_new_blog: "አዲስ ብሎግ",
    popular: "ታዋቂ",
    topics: "ርዕሶች",
    suggestions: "ጥቆማዎች",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "ስለ እኛ",
    terms: "የአጠቃቀም መመሪያ",
    privacy: "የ ግል የሆነ",
    contact_us: "አግኙን",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "ቅጽ ያግኙን",
    name: "ስም",
    email: "ኢሜይል",
    phone: "ስልክ",
    message: "መልእክት",
    notifications: {
      success: "መልእክት ተላኳል.",
    },
    submitted_title: "ስላገኙን እናመሰግናለን!",
    submitted_message:
      "እኛን ለማነጋገር ጊዜዎን እናመሰግናለን። መልእክትህ ደርሷል እና ቡድናችን በአሁኑ ጊዜ እየገመገመው ነው። በተቻለ ፍጥነት ምላሽ እንሰጣለን, እና በዚህ ጊዜ ለትዕግስትዎ እናመሰግናለን. የእርስዎ ፍላጎት እና አስተያየት ለእኛ አስፈላጊ ናቸው፣ እና በተቻለ መጠን እርስዎን ለመርዳት ቁርጠኞች ነን።",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "የክፍያ ማረጋገጫ",
      payment_success: "ክፍያ ተጠናቅቋል።",
      buy_title: "ግዛ",
      pay_by_giftcards: "ትዕዛዝህ የተከፈለው በስጦታ ካርድ ነው።",
      free_order: "ትዕዛዝህ ነፃ ነው።",
      pay_by_cod: "ትዕዛዝዎ እንደ ጥሬ ገንዘብ ተጨምሯል።",
      pay_by_dir:
        "ትዕዛዝህ በተሳካ ሁኔታ ታክሏል። አሁን በቀጥታ ገንዘብ ማስተላለፍ መክፈል እና ከዚያም የክፍያ ደረሰኝ በትዕዛዝ ገጹ ላይ መጫን ይችላሉ.",
      pay_title: "ክፍያ",
      qr_code_payment: "የክፍያ QR ኮድ አድራሻ ተፈጥሯል።",
      connecting_to_online_gateway: "ከመስመር ላይ ክፍያ መግቢያ ጋር በመገናኘት ላይ።",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "እስከ መጀመሪያው ቀረ",
    title_between_start_end: "እስከ መጨረሻው ቀርቷል",
    title_after_end: "ጨርሷል",
    title_no_start_end: "ያለ ጊዜ ገደብ!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "በአንድ ትዕዛዝ አንድ ስጦታ መቀበል ይችላሉ.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "የኩፖን ኮድ",
    add_coupon: "ኩፖን አክል",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "የአቮካዶ ቅጹ አልነቃም!",
    last_update: "የመጨረሻው ዝመና፡-",
    step1:
      "1. ለማዘዝ የሚፈልጉትን ምርት ስም እና ዝርዝሮችን ያስገቡ እና አክል ቁልፍን ጠቅ ያድርጉ።",
    title_plc: "የምርቱን ስም ያስገቡ።",
    description_plc: "ተጨማሪ የምርት መግለጫዎች አሉዎት?",
    link_plc: "ወደ ምርቱ አገናኝ አለህ?",
    image: "የምርት ምስል",
    image_msg: "አስፈላጊ ከሆነ የምርት ምስሉን መላክ ይችላሉ.",
    add_item: "ንጥል ያክሉ",
    items_list: "የተጠየቁ ምርቶች ዝርዝር",
    currency_msg: "የዚህን ትዕዛዝ መጠን በዚህ ምንዛሬ መክፈል አለቦት።",
    step2:
      "2. ሁሉንም የሚፈለጉትን እቃዎች ካከሉ በኋላ, የትዕዛዝ ግምገማ ጥያቄ አዝራርን ጠቅ ያድርጉ. በዚህ ደረጃ, ትዕዛዙን እንገመግማለን እና ስለ ዋጋው እናሳውቅዎታለን. ይህንን ሊንክ በመጫን የዋጋ እና የክፍያ ማያያዣውን ማየት ይችላሉ።",
    order_action: "የትዕዛዝ ምዝገባ",
    show_all: "ሁሉንም አሳይ",
    show_accepted: "የተረጋገጡ ዕቃዎችን አሳይ",
    last_orders: "የቅርብ ጊዜ ትዕዛዞችዎ ዝርዝር",
    pending_status: "በ ግምገማ ላይ",
    check_now: "ትዕዛዙን ያረጋግጡ",
    add_new_order: "አዲስ ትእዛዝ ይስሩ",
    pay_online: "በመስመር ላይ ይክፈሉ።",
    pricing_not_completed_message:
      "ትዕዛዝህ እየተገመገመ ነው። ትዕዛዝዎ በቅርቡ ይገመገማል እና ዋጋ ይከፈላል እና ትዕዛዙን መክፈል ይችላሉ።",

    select_address_message:
      "እባክህ አድራሻህን አስገባና ትዕዛዙን ማስገባት ትችላለህ።",

    delete_item_dialog: {
      title: "ንጥሉን ከግዢው ጋሪ ያስወግዱት።",
      message: "ይህን ንጥል ከጋሪው ላይ መሰረዝ ይፈልጋሉ?",
      action: "አዎ ሰርዝ",
    },

    notifications: {
      order_success: "ትዕዛዝዎ በተሳካ ሁኔታ ቀርቧል።",
      delete_success: "ንጥል ተሰርዟል።",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "ትዕዛዝ መፍጠር",
    message:
      "የምርት ኮዱን በመቃኘት ለመግዛት የሚፈልጉትን ምርቶች ዝርዝር ይፍጠሩ።",

    currency_msg: "መክፈል የሚፈልጉት ምንዛሬ።",
    order_action: "ክፍያ",
    add_new_order: "አዲስ ትዕዛዝ",
    continue_order: "ማዘዙን ይቀጥሉ",

    delete_item_dialog: {
      title: "ንጥሉን ከግዢው ጋሪ ያስወግዱት።",
      message: "ይህን ንጥል ከጋሪው ላይ መሰረዝ ይፈልጋሉ?",
      action: "አዎ ሰርዝ",
    },
    notifications: {
      order_success: "ትዕዛዝዎ በተሳካ ሁኔታ ቀርቧል።",
      delete_success: "ንጥል ተሰርዟል።",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "የክፍያ ደረሰኝ ምስል ይስቀሉ.",
    upload_payment_receipt_done:
      "✔ የደረሰኙን ምስል አስቀድመህ ሰቅለሃል፣ መጽደቅህን ጠብቅ። መለወጥ ካስፈለገዎት የቀደመውን ምስል በአዲስ መተካት ይችላሉ።",
    public_form_title: "ለገንዘብ ማስተላለፍ የመለያ መረጃ",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "የሚደረጉ ነገሮች ዝርዝር",
      message: "ሊሰሩት የሚፈልጓቸውን ስራዎች አርእስቶች ይግለጹ እና ገዥው ምን ያህል እድገት እንዳደረገ ያሳውቁ።",
    },
    booking: {
      title: "ቦታ ማስያዝ / ቦታ ማስያዝ",
      message: "ይህ ትዕዛዝ በተወሰነ ጊዜ ውስጥ ይከናወናል, ደንበኛው የሚፈለገውን ጊዜ መርጧል, በተመረጠው ጊዜ ውስጥ ማንኛውንም ለውጥ ማድረግ ከፈለጉ, ለደንበኛው ያሳውቁ.",

      selected_checkin: "ተመዝግቦ መግባት በደንበኛ ተመርጧል",
      selected_checkout: "ተመዝግቦ መውጫ በደንበኛ ተመርጧል",
      change_days_question:
        "በደንበኛው በተመረጡት ቀናት ውስጥ መለወጥ ያስፈልግዎታል?",
      show_calendar: "የትዕዛዝ የቀን መቁጠሪያ አሳይ",
    },
    pricing: {
      title: "የዋጋ አሰጣጥ",
      message: "ለዚህ አገልግሎት ምን ያህል ያስከፍላሉ?",
    },
    subscription: {
      title: "የደንበኝነት ምዝገባ",
      message:
        "ይህንን አገልግሎት በየቀኑ በመግዛት የምዝገባ ጊዜውን መምረጥ ይችላሉ። አስቀድመው ያስገቡትን ነባሪ እሴቶች መለወጥ ከፈለጉ ለገዢው ያሳውቁ።",
      duration: "የደንበኝነት ምዝገባ ጊዜ",
    },
    charge: {
      title: "ክስ",
      message:
        "ለዚህ ንጥል ነገር ክፍያ ገልጸዋል በደንበኛው ለተገዛው ዕቃ የክፍያውን መጠን መለወጥ ይችላሉ።",
      charge: "ክስ",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "መዳረሻን ለማየት በመጠበቅ ላይ...",
    no_access_message:
      "የአጋጣሚ ነገር ሆኖ የኛ መደብር መዳረሻ የለዎትም።<br/> እባክዎ ያግኙን.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "ትዕዛዝ አጋራ",
    title: "ይህንን ትዕዛዝ ለሌሎች ያካፍሉ።",
    message:
      "ደህንነቱ የተጠበቀ ማገናኛ ነው፣ ለሚያውቋቸው ብቻ ያካፍሉ። ይህ አገናኝ ያለው ማንኛውም ሰው የእርስዎን ትዕዛዝ ማባዛት እና የተመረጠውን አድራሻ ማየት ይችላል። ስለአሁኑ ጋሪዎ መረጃ ይይዛል።",
    valid_period: "ይህ አገናኝ ከ48 ሰዓታት በኋላ ጊዜው ያልፍበታል።",
    import_order_action: "ትእዛዝ አስመጣ",
    retrieve_dialog_title: "ውጫዊ ትዕዛዝ ሰርስሮ ውሰድ",
    address_included: "የቅርጫት እቃዎችን + አድራሻ ያጋሩ",
    address_excluded: "የቅርጫት እቃዎችን ብቻ ያጋሩ",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "ዋጋዎች",
    inventory: "ቆጠራ",
    discount: "ቅናሽ",
  },

  rating: {
    product_rating_message:
      "ይህ ምርት ከ5 ኮከቦች {rate} ደረጃ አግኝቷል እና በ{rate_count} ሰዎች ደረጃ ተሰጥቶታል።",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "አስስ!",
      same_tags_subtitle: "ተዛማጅ የሆኑ ተጨማሪ ነገሮችን ያግኙ።",
      same_category_subtitle: "በዚህ ምድብ ውስጥ ተጨማሪ አስደናቂ ነገሮችን ያግኙ።",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "ከ {product} ጋር ይዘዙ",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "የ{vendor} መደብርን ይመልከቱ",
  },

  login: {
    welcome: "እንኳን ደህና መጡ",
  },


};
