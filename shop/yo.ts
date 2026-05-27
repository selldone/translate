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
  surveys: ["Kò dára rárá", "Kò dára", "Déédé", "Dára", "Dára púpọ̀"],

  /** @see SFooterSection **/
  footer: {
    map: "Maapu",
    email: "Imeeli",
    phone: "Foonu",
    address: "Adirẹsi",

    copyright:
      "Lilo akoonu nikan fun awọn idi ti kii ṣe ti owo ati pẹlu itọkasi orisun (ọna asopọ pẹlu {shop_title}). Gbogbo ẹtọ wa ni ipamọ si {shop_title}.",
    powered_by: "Agbara lati owo",
    privacy: "Ilana ikọkọ",
    term_of_use: "Awọn ofin lilo",
    shop_app_setting: "Eto itaja & GDPR",

    dialog_setting: {
      title: "Itaja Eto Awọn ohun elo",
      app_list: "Akojọ ti awọn ohun elo",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Atita tan",
    review_unit: "Atunwo",
    not_original: "Ko atilẹba",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Àlẹmọ",
    native: {
      title: "Wiwọle ohun elo",
      message:
        "Ìfilọlẹ yii nilo iraye si alaye akọọlẹ ile itaja rẹ. Eyi pẹlu iraye si orukọ, nọmba olubasọrọ, adirẹsi, imeeli, itan ibere, pipaṣẹ ati fifiranṣẹ awọn asọye lori ile itaja yii.",
      message_bold:
        "Rii daju lati lo ohun elo itaja itaja lati tẹ ile itaja yii sii.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sa pelu",
    title_small: "Sa pelu..",
    nothing: "Ko si nkankan",
    most_views: "Pupọ awọn iwo",
    most_likes: "Gbajumo julọ",
    most_recent: "Titun julọ",
    most_sell: "Titaja julọ",
    cheapest: "Ti o din owo julọ",
    most_expensive: "Julọ gbowolori",
    only_available: "Wa",
    view_mode: {
      normal: "Deede",
      grid: "Akoj",
      list: "Akojọ",
      insta: "Ìwòye Instagram",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Iro",
    action: "Titaja",
    compare_limit: "10 awọn ohun kan ifilelẹ",
    compare_add: "Fi si Afiwera",
    compare_be_in_list: "Ni afiwe akojọ",

    type: "Iru",
    brand: "Aami-ọja",
    category: "Ẹka",
    discount: "Eni owo",
    track_price: "Owo orin",
    waiting_for_auction: "Nduro fun titaja naa?",
    inform_auction: "Sọ fun mi nipa titaja",
    return_in_days: "{days} ọjọ atilẹyin ọja ipadabọ",
    support24h7: "Ṣe atilẹyin awọn wakati 24 7 ọjọ",
    support_normal: "Atilẹyin awọn wakati iṣẹ",
    original_guarantee: "Atilẹba ẹri",
    cod_payment: "Owo lori atilẹyin ifijiṣẹ",

    pros: "Aleebu",
    cons: "Konsi",

    external_link: "Ka siwaju",
    notifications: {
      congratulation: "Oriire",
      waiting_list_add_success:
        "A yoo sọ fun ọ nigbati ọja yi ba jẹ titaja.",
      waiting_list_delete_success: "O jade kuro ni atokọ idaduro titaja.",
    },

    offer_message: "Ra {min_quantity} Gba {percent}% pipa fun awọn nkan wọnyi",
    up_to: "Titi di {per_order}x fun ibere",
    get_free: "GBA ỌFẸ",
    get_off: "Gba {percent}% PA",
    select_a_vendor_message: "Jọwọ yan olutaja kan.",
    product_description_header: "Ṣafihan {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Nduro fun wiwa",
    inform_me_when_available: "Nduro fun eyi?",
    pay_buy: "Sanwo & Ra",
    quantity: "Ka",
    quantity_in_basket: "Awọn nkan ti o wa ninu rira",
    count_unit: "nkan",
    remove: "Yọ kuro",
    add_to_basket: "Fi kun Awon nkan ti o nra",
    buy: "Ra",
    subscribe_now: "Alabapin Bayi",
    unsubscribe: "Yọọ alabapin",
    select_a_subscription_plan: "Yan eto akọkọ!",
    manage_subscriptions: "Ṣakoso awọn ṣiṣe alabapin",
    notifications: {
      inform_add_success: "A yoo jẹ ki o mọ nigbati o ba wa.",
      inform_remove_success: "O ti yọkuro kuro ninu atokọ idaduro.",
    },
    zip_pin_input: "Kóòdù ìfìwéránṣẹ́ / PIN",
    zip_pin_not_available_msg: "Ko sí ní agbègbè yìí!",
    zip_pin_placeholder: "Yan kóòdù ìfìwéránṣẹ́/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Atunwo",
    spec: "Àlàyé",
    comments: "Àwọn asọye",
    price: "Iye owo",
    rate: "Oṣuwọn",
    comment: "Ọrọìwòye",
    warranty: "Atilẹyin ọja",
    return_policy: "Pada Afihan",
    guide: "Itọsọna",
    shipping: "Gbigbe",
    related_products_title: "Awọn ọja ti o jọmọ",
    related_categories_title: "Iwari ninu awọn akojọpọ",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Itan bibere",
      profile: "Profaili Mi",
      favorites: "Awọn ohun elo ayanfẹ",
      gift_cards: "Awọn kaadi ẹbun",
      return_requests: "Awọn ibere pada",
      basket: "Ohun tio wa fun rira",
    },
    user_menu: {
      my_shops: "Awọn ile itaja Mi",
      go_to_admin: "Ṣakoso {shop_name}",
      exit_from: "Jade {shop_name}",
      chips: "{chips} àmi",
    },
    login_to_shop: "Buwolu wọle lati Itaja",
    login_to_shop_short: "wo ile",
    item_in_basket_message: "{count} Nkan yii wa ninu kẹkẹ rẹ.",
    search_title: "Wa ninu itaja {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Kẹkẹ",
    basket_is_empty: "Kẹkẹ rẹ ti ṣofo.",
    total_price: "Lapapọ",
    view_basket: "Ọkọ rẹ",
    more: "Die e sii...",
    accept_and_pay: "Ṣayẹwo",
    items: "Nkan (awọn)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Kọ silẹ",
    table: {
      code: "koodu ibere",
      reserved: "Ọjọ",
      delivery_state: "Ipo ifijiṣẹ",
      price: "Lapapọ Iye",
      status: "Ipo sisan",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "koodu ibere",
      items: "Awọn nkan",
      reserved: "Ọjọ",
      delivery_state: "Titun ipo",
      price: "Lapapọ Iye",
      status: "Ipo sisan",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Kaadi ebun",
      comments: "Àwọn asọye",
      favorites: "Awọn ayanfẹ",
      return_requests: "Pada",
      addresses: "Awọn adirẹsi",
      profile: "profaili",
      orders: "Awọn ibere",
      wallets: "Àwọn apamọwọ",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Àwọn apamọwọ mi",
    subtitle: "Tí o bá yẹ, tí ètò ìpadà-owó sì n ṣiṣẹ, apá kan ninu aṣẹ rẹ yóò wọ apamọwọ rẹ. O lè lo owó yìí fún rira rẹ tó kàn."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Ìwọ̀ntúnwọ̀nsì apamọwọ mi",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Bere fun",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Isanwo",
      payment_waiting: "Nduro fun sisanwo",
      payment_completed: "Sanwo",
      table: {
        title: "Akọle",
        amount: "Iye",
        description: "Apejuwe",
      },
      total_payment: "Iye owo ti a san",
      discount: "Eni owo",
      discount_code: "Eni koodu",
      delivery_fee: "Iye owo gbigbe",
      delivery_fee_after: "Ko si ifijiṣẹ san",

      total_price: "Lapapọ Iye Awọn nkan",
      total_items_discount: "Eni nkan",
      total_price_after_offers: "Lapapọ lẹhin lilo awọn ipese",
      total_order_price_before_tax: "Iye lapapọ ṣáájú owó-ori",

      buyer_payment: "Olura owo sisan iye",

      payment_is_in_require_capture_message:
        "A ti gba isanwo rẹ, ṣugbọn a ko tii mu u ṣiṣẹ.",
      settle_the_earlier_bill_first: "San owo ìwé gbèsè iṣaaju naa kọ́kọ́!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Ifijiṣẹ",
      subtitle: "eniti o alaye",
      confirm_received_action: "Jẹrisi gbigba ọja",
      confirm_received_info:
        "Tẹ bọtini idaniloju ti o ba gba aṣẹ naa. Ti o ba nilo, iwọ yoo ni anfani lati fi ifọrọranṣẹ silẹ ti o ba gba ijẹrisi.",
      Recipient: "olugba",
      bill: "risiti",
      name: "Oruko",
      tel: "Foonu",
      email: "Imeeli",
      country: "Orilẹ-ede",
      state: "Ìpínlẹ̀",
      city: "Ilu",
      address: "Adirẹsi",
      building_no: "Nọmba ile",
      unit_no: "Nọ́mbà ẹyọ",
      postal_code: "koodu ifiweranṣẹ",
      description: "Apejuwe",
      order_delivered: "A ti firanṣẹ aṣẹ naa.",
      delivery_time: "Akoko Ifijiṣẹ",
      tracking_code: "Koodu ipasẹ",
      tracking_url: "URL ìtọpinpin",

      notifications: {
        confirm_delivery: "Ibere re ti wa ni timo.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Ẹri atilẹba ti awọn ọja",
      return: "Pada",
      table: {
        product: "Orukọ ọja",
        count: "Ka",
        unit_price: "Oye eyo kan",
        total_price: "Lapapọ Iye",
        discount: "Eni owo",
        final_price: "Iye owo ipari",
        returned: "Pada",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Pada",
    count_input: "Nọmba awọn nkan ti o da pada",
    count_input_message: "Awọn nkan melo ni o da pada?",
    reason_input: "Idi fun ipadabọ",
    reason_input_message: "Yan idi fun ipadabọ nkan yii.",
    note_input: "Apejuwe",
    note_input_hint: "Ṣe apejuwe idi fun ipadabọ ..",
    note_input_message:
      "Ṣe apejuwe idi fun ipadabọ nkan yii ti o ba nilo.",
    media_message:
      "O le gbe aworan, ohun afetigbọ tabi fidio ọja si ibi lati gba atilẹyin to dara julọ fun alaye ipo ọja. Yiyan faili yoo firanṣẹ laifọwọyi ati jẹrisi.",
    video: "Fidio",
    voice: "Ohùn",
    add_action: "Firanṣẹ pada ìbéèrè",
    notifications: "Ibeere ipadabọ rẹ ti forukọsilẹ ni aṣeyọri.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Bere fun",
    info: {
      title: "Ti ra foju ọja",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Alaye ti ara ẹni mi",
    name: "Oruko",
    email: "Imeeli",
    tel: "Tẹli",
    identity: "Ijeri",
    success_kyc: "Ẹri KYC",
    no_kyc: "Ko si KYC",
    club: "Olumulo Ipele",
    subscription: "Ṣiṣe alabapin iroyin",
    leave_shop: "Fi ile itaja yii silẹ ki o yọ gbogbo ipele awọn alabara kuro",
    leave_shop_action: "Fi ile itaja silẹ",
    edit_personal_info: "Ṣatunkọ alaye ti ara ẹni",
    leave_dialog: {
      title: "Fi ile itaja silẹ",
      message:
        "Yiyọkuro si ile itaja yii kii yoo pa alaye aṣẹ rẹ ati awọn igbasilẹ rẹ rẹ.",
      action: "Fi silẹ",
    },
    notifications: {
      leave_success: "Fi ile itaja silẹ",
    },
    club_table: {
      discount: "Eni owo",
      limit: "Idiwọn",
      currency: "Owo owo",
      free_shipping: "Gbe lo dele",
    },

    my_profile: {
      title: "Profaili mi",
      subtitle: "Eyi ni alaye profaili oníbàárà mi fun ṣọọbu naa.",
      edit_action: "Ṣàtúnṣe profaili"
    },
    subscribe_status: {
      subscribed: "Mo ti ṣe alabapin lati gba awọn iroyin tuntun ati awọn igbega nipasẹ imeeli.",
      unsubscribed: "Emi ko ṣe alabapin lati gba iroyin tabi igbega kankan nipasẹ imeeli."
    },
    my_club: {
      subtitle: "Ìpele ẹgbẹ́ mi ati awọn anfaani rẹ."
    },
    kyc: {
      subtitle: "Eyi ni alaye ìdánimọ̀ agbaye mi."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Ohun tio wa fun rira",
    total_price: "Oye gbo e",
    shipping: "Iye owo gbigbe",
    free_shipping: "Gbe lo dele",
    shipping_not_pay: "Ko si",
    total_discount: "Lapapọ eni",
    customer_club: "Ẹgbẹ́ oníbàárà",
    customer_club_discount: "Eni omo egbe",
    final_price: "Isanwo Ipari",
    lead_time: "Akoko igbaradi",
    lead_time_unit: "Wakati",
    receive_time: "Akoko ifijiṣẹ ti o fẹ",
    select_time: "Yan Akoko Ifijiṣẹ",
    no_select_time: "Ni kete bi o ti ṣee",
    transportation_type: "Iru sowo",
    days_input: "Awọn ọjọ ifijiṣẹ",
    days_input_label: "Awọn ọjọ",
    days_input_no_data: "Yan o kere ju ọjọ kan",
    time_input: "Akoko Ifijiṣẹ",
    time_input_label: "Ifijiṣẹ ni",
    time_input_label_no_data: "Yan o kere ju aarin akoko kan",
    support_cod: "Owo lori Ifijiṣẹ",
    not_support_cod: "Ko le sanwo ni agbegbe!",
    final_confirm_action: "Ik ibere ìmúdájú",
    pay_and_complete_action: "Sanwo Bayi",
    pre_confirm_service: "Fi ìbéèrè",
    cross_selling_discount: "ẹdinwo gbigba",

    errors: {
      no_address: "Yan awọn adirẹsi ti o fẹ ibere re lati wa ni bawa si.",
      no_phone: "Tẹ nọmba olubasọrọ sii lati ipoidojuko gbigba awọn ọja.",
      select_billing_country: "Yan orilẹ-ede ìdíyelé rẹ",
      select_billing_state: "Yan agbegbe owo-ori rẹ",
    },
    same_billing_address: "Alaye idiyele kanna gẹgẹbi alaye olugba",
    same_billing_address_desc:
      "Adirẹsi ìdíyelé jẹ kanna bi adirẹsi sowo.",
    custom_billing_info: "Awọn alaye ìdíyelé oriṣiriṣi",
    custom_billing_info_desc:
      "O le tẹ nọmba owo-ori rẹ sii ki o ṣeto adirẹsi ìdíyelé mìíràn.",
    basket_empty: "Agbọn ti ṣofo",
    extra_shipping_count: "Iwọ yoo gba awọn akojọpọ {count}.",
    select_location_error:
      "Wa ibi ti o ti gba gbigbe lori maapu naa ki o tẹ atọka ni aarin maapu lati pinnu adirẹsi gangan ti olugba naa.",

    billing_business_desc: "Ó jẹ́ àkáwọ́n iṣowo pẹlu nọmba owo-ori.",
    billing_personal_desc: "O jẹ akọọlẹ ti ara ẹni.",

    no_billing_title: "Ko si ìdíyelé",
    no_billing_desc: "Fi adirẹsi ìdíyelé silẹ ofo.",

    can_pay_cod_message:"O le sanwo fun aṣẹ yii ni owo gidi nigba ifijiṣẹ.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "nkan",
    lead_unit: "Wakati",
    count_input: "Ka",

    price_changed: "Iye owo ti yipada. titun owo:",
    offer: "Gba {count}x ohun kan nipasẹ {percent}% pipa",
    offer_free: "Gba {count}x ni ọfẹ",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Awọn adirẹsi Mi",
    subtitle:"Wo awọn adirẹsi ti o fipamọ si ibi, ki o si fi tuntun kun ni irọrun.",
    new_action: "Adirẹsi Tuntun",
    receiver: "Olùgbà",
    address: "Adirẹsi",
    building_no: "iwe-ašẹ awo",
    building_unit: "ẹyọkan",
    postcode: "koodu ifiweranṣẹ",
    tel: "Tẹli",
    description: "Akiyesi",

    map: {
      title: "Awọn adirẹsi Mi",
      confirm: "Iforukọsilẹ adirẹsi",
      address_type: "Adirẹsi",
      receptor_type: "olugba",
    },
    add_dialog: {
      title: "Orukọ Adirẹsi Tuntun",
      message: "Tẹ akọle sii fun adirẹsi titun kan.",
      address_name_input: "Adirẹsi (beere)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Pada awọn ibeere",
    subtitle:"Wo awọn ibeere ipadabọ rẹ nibi. Fun awọn nkan ti o ni ilana ipadabọ, o le fi ibeere ipadabọ silẹ lori oju-iwe aṣẹ.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Akojọ ifẹ",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Àwọn asọye mi",
    first_post: "Ifiweranṣẹ akọkọ",
    last_edit: "kẹhin àtúnṣe",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Awọn kaadi ẹbun Mi",
    add_action: "Fi kaadi sii",
    add_card_dialog: {
      title: "Fi ebun Kaadi",
      message:
        "Tẹ nọmba kaadi sii ati koodu aabo. Kaadi ebun kan yoo wa ni afikun si akọọlẹ rẹ.",
      card_number_input: "Nomba kaadi",
      info: "Akiyesi: Nigbati o ba n ra lati ile itaja, iwọ yoo ṣe afihan aṣayan ti sisanwo pẹlu awọn kaadi ẹbun. Nipa yiyan aṣayan yii, iye iwọntunwọnsi gbigba agbara rẹ yoo yọkuro lati iye aṣẹ naa.",
      add_action: "Iforukọ Kaadi",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Ṣe afiwe Ọja",
    action_button: "Fiwera",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Ko si ọja ti a ṣafikun si atokọ lafiwe.",
      price: "Iye owo",
      type: "Iru",
      brand: "Aami-ọja",
      warranty: "Atilẹyin ọja",
      variants_comparison: "Ṣe afiwe awọn iyatọ ọja",
      spec: "Imọ ni pato",
      pros: "Aleebu",
      cons: "Konsi",
      user_review: "Àwọn asọye olumulo",
      rating: "Idiwon",
      rating_count: "Nọmba ti agbeyewo",
      info: "O le pin tabili lafiwe ọja yii pẹlu awọn ọrẹ rẹ nipa fifiranṣẹ ọna asopọ atẹle, tabi wọle si nigbamii nipa fifipamọ ọna asopọ yii.",
      copy_action: "Daakọ Link Comparison",
      check_list: ["Bẹẹni", "O ni"],
      cross_list: ["Rara", "Ko ni"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Awọn atilẹba nikan",
    only_has_discount: "Idinku nikan",
    price_range: "Iwọn idiyele",
    brands: "Aami-ọja",
    main_shop_page: "Itaja akọkọ iwe",
    home: "Ile",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Eyin {user}, o ti ra ọja yi. Kini o ro nipa ọja yii?",
    notification: {
      title: "Oriire",
      message: "Ọrọ asọye rẹ ti gba silẹ.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Bulọọgi",
    add_new_blog: "Bulọọgi Tuntun",
    popular: "Gbajumo",
    topics: "Awọn koko-ọrọ",
    suggestions: "Awọn imọran",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Nipa re",
    terms: "Awọn ofin lilo",
    privacy: "Ilana ikọkọ",
    contact_us: "Pe wa",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Kan si wa fọọmu",
    name: "Oruko",
    email: "Imeeli",
    phone: "Foonu",
    message: "Ifiranṣẹ",
    notifications: {
      success: "A ti fi ifiranṣẹ rẹ ranṣẹ.",
    },
    submitted_title: "O ṣeun fun wiwa si Wa!",
    submitted_message:
      "A dupẹ lọwọ akoko rẹ lati kan si wa. Ifiranṣẹ rẹ ti gba ati pe ẹgbẹ wa n ṣe atunyẹwo lọwọlọwọ. A yoo dahun ni kete bi o ti ṣee, ati pe a dupẹ lọwọ rẹ fun sũru rẹ ni akoko yii. Ifẹ rẹ ati esi ṣe pataki si wa, ati pe a pinnu lati pese atilẹyin ti o dara julọ ti o ṣeeṣe.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Imudaniloju sisanwo",
      payment_success: "Isanwo ti pari.",
      buy_title: "Ra",
      pay_by_giftcards: "A ti san ibere rẹ pẹlu kaadi ẹbun kan.",
      free_order: "Ofe ni ibere re.",
      pay_by_cod: "A ti fi aṣẹ rẹ kun bi owo lori ifijiṣẹ.",
      pay_by_dir:
        "A ti fi aṣẹ rẹ kun ni aṣeyọri. Bayi o le sanwo nipasẹ gbigbe owo taara ati lẹhinna gbe iwe-ẹri isanwo sori oju-iwe aṣẹ.",
      pay_title: "Isanwo",
      qr_code_payment: "Adirẹsi koodu QR sisan ti a ṣẹda.",
      connecting_to_online_gateway: "Nsopọ si ẹnu-ọna isanwo ori ayelujara.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Wà lati ibere",
    title_between_start_end: "O wa titi de opin",
    title_after_end: "Ti pari",
    title_no_start_end: "Laisi akoko akoko!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "O le gba ọkan ebun fun ibere.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "koodu kupọọnu",
    add_coupon: "Fi kupọọnu kun",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Fọọmu piha oyinbo ko ṣiṣẹ!",
    last_update: "Imudojuiwọn to kẹhin:",
    step1:
      "1. Tẹ orukọ sii ati awọn alaye ọja ti o fẹ paṣẹ ki o tẹ bọtini Fikun-un.",
    title_plc: "Tẹ orukọ ọja sii.",
    description_plc: "Ṣe o ni awọn apejuwe ọja diẹ sii?",
    link_plc: "Ṣe o ni ọna asopọ si ọja naa?",
    image: "Aworan ọja",
    image_msg: "O le fi aworan ọja ranṣẹ ti o ba nilo.",
    add_item: "Fi nkan kun",
    items_list: "Akojọ ti awọn ọja ti a beere",
    currency_msg: "O gbọdọ san iye ti aṣẹ yii pẹlu owo yii.",
    step2:
      "2. Lẹhin fifi gbogbo awọn ti o fẹ awọn ohun kan, tẹ lori awọn ibere awotẹlẹ ìbéèrè bọtini. Ni ipele yii, a yoo ṣe atunyẹwo aṣẹ naa ki o jẹ ki o mọ nipa idiyele naa. Nipa tite lori ọna asopọ yii, iwọ yoo ni anfani lati wo idiyele ati ọna asopọ isanwo.",
    order_action: "Iforukọsilẹ ibere",
    show_all: "Ṣe afihan Gbogbo",
    show_accepted: "Ṣafihan Awọn nkan ti o jẹrisi",
    last_orders: "Akojọ ti awọn ibere rẹ laipe",
    pending_status: "labẹ awotẹlẹ",
    check_now: "Ṣayẹwo ibere",
    add_new_order: "Ṣe New Bere fun",
    pay_online: "Sanwo lórí ìnítánẹ́ẹ̀tì",
    pricing_not_completed_message:
      "Ibere re ti wa ni atunwo. Ilana rẹ yoo jẹ atunyẹwo ati idiyele laipẹ ati pe iwọ yoo ni anfani lati san aṣẹ naa.",

    select_address_message:
      "Jọwọ tẹ adirẹsi rẹ sii, lẹhinna o le fi aṣẹ naa silẹ.",

    delete_item_dialog: {
      title: "Yọ ohun kan kuro ninu rira rira",
      message: "Ṣe o fẹ lati pa nkan yii rẹ kuro ninu rira?",
      action: "Bẹẹni, paarẹ",
    },

    notifications: {
      order_success: "Ibere re ti wa ni ifijišẹ.",
      delete_success: "Nkan ti parẹ.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Bere fun ẹda",
    message:
      "Ṣẹda atokọ ti awọn ọja ti o fẹ ra nipa yiwo koodu ọja naa.",

    currency_msg: "Awọn owo ti o fẹ lati san pẹlu.",
    order_action: "Isanwo",
    add_new_order: "Ibere tuntun",
    continue_order: "Tesiwaju ibere",

    delete_item_dialog: {
      title: "Yọ ohun kan kuro ninu rira rira",
      message: "Ṣe o fẹ lati pa nkan yii rẹ kuro ninu rira?",
      action: "Bẹẹni, paarẹ",
    },
    notifications: {
      order_success: "Ibere re ti wa ni ifijišẹ.",
      delete_success: "Nkan ti parẹ.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Po si aworan ti owo sisan.",
    upload_payment_receipt_done:
      "✔ O ti gbe aworan gbigba silẹ tẹlẹ, duro fun ifọwọsi wa. Ti o ba nilo lati yipada, o le rọpo aworan ti tẹlẹ pẹlu ọkan tuntun.",
    public_form_title: "Account alaye fun owo gbigbe",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Akojọ iṣẹ-ṣiṣe",
      message: "Pato awọn akọle iṣẹ ti o fẹ ṣe ki o jẹ ki ẹniti o ra ra mọ bii o ti ni ilọsiwaju.",
    },
    booking: {
      title: "fowo si / ifiṣura",
      message: "Ilana yii yoo ṣe ilana ni akoko kan pato, onibara ti yan akoko ti o fẹ, ti o ba fẹ ṣe awọn ayipada ninu akoko ti o yan, jẹ ki onibara mọ.",

      selected_checkin: "Ti a ti yan ayẹwo-ni nipa onibara",
      selected_checkout: "Ti yan ayẹwo-jade nipasẹ alabara",
      change_days_question:
        "Ṣe o nilo lati yipada lakoko awọn ọjọ ti o yan alabara?",
      show_calendar: "Ṣe afihan Kalẹnda ti Awọn aṣẹ",
    },
    pricing: {
      title: "Ifowoleri",
      message: "Elo ni o gba fun iṣẹ yii?",
    },
    subscription: {
      title: "Ṣiṣe alabapin",
      message:
        "O le yan akoko ṣiṣe alabapin nipa rira iṣẹ yii lojoojumọ. Jẹ ki oluraja mọ ti o ba fẹ yi awọn iye aiyipada ti o ti tẹ tẹlẹ pada.",
      duration: "Akoko ṣiṣe alabapin",
    },
    charge: {
      title: "Gba agbara",
      message:
        "O ti pato idiyele fun nkan yii. O le yi iye idiyele pada fun ohun ti o ra nipasẹ alabara.",
      charge: "Gba agbara",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Nduro lati ṣayẹwo wiwọle...",
    no_access_message:
      "Laanu, o ko ni iwọle si ile itaja wa.<br/> Jọwọ kan si wa.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Pipin ibere",
    title: "Pin aṣẹ yii pẹlu awọn miiran.",
    message:
      "O jẹ ọna asopọ to ni aabo, pin nikan pẹlu awọn ti o mọ. Gbogbo eniyan ti o ni ọna asopọ yii le ṣe ẹda aṣẹ rẹ ki o wo adirẹsi ti o yan. Yoo ni alaye nipa rira lọwọlọwọ rẹ.",
    valid_period: "Ọna asopọ yii yoo pari lẹhin awọn wakati 48.",
    import_order_action: "Gbe wọle ibere",
    retrieve_dialog_title: "Gba aṣẹ ita pada",
    address_included: "Pin awọn ohun agbọn + Adirẹsi",
    address_excluded: "Pin awọn nkan agbọn nikan",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Awọn idiyele",
    inventory: "Oja",
    discount: "Eni owo",
  },

  rating: {
    product_rating_message:
      "Ọja yii ti gba idiyele ti {rate} ninu awọn irawọ 5 ati pe awọn eniyan {rate_count} ti wọn wọn.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Ye!",
      same_tags_subtitle: "Wa awọn nkan ti o jọmọ iyalẹnu diẹ sii.",
      same_category_subtitle: "Wa awọn nkan iyalẹnu diẹ sii ni ẹka yii.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Paṣẹ {product} pẹlu",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Wo ṣọọbu ti {vendor}",
  },

  login: {
    welcome: "Káàbọ̀",
  },


};
