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
  surveys: ["Абдан кедей", "Байкуш", "Кадимки", "Жакшы", "Мыкты"],

  /** @see SFooterSection **/
  footer: {
    map: "Карта",
    email: "Эл. почта",
    phone: "Телефон",
    address: "Дарек",

    copyright:
      "Мазмунду коммерциялык эмес максаттарда жана булакка шилтеме менен колдонуу ({shop_title} менен шилтеме). Бардык укуктар {shop_title} үчүн корголгон.",
    powered_by: "Камсыздаган",
    privacy: "Купуялык саясаты",
    term_of_use: "Пайдалануу шарттары",
    shop_app_setting: "Дүкөндү жөндөө жана GDPR",

    dialog_setting: {
      title: "Дүкөн колдонмолорунун жөндөөлөрү",
      app_list: "Тиркемелердин тизмеси",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Сатылган",
    review_unit: "карап чыгуу",
    not_original: "Оригиналдуу эмес",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Фильтр",
    native: {
      title: "Колдонмо кирүү",
      message:
        "Бул колдонмо дүкөнүңүздүн каттоо эсебинин маалыматына кирүү мүмкүнчүлүгүн талап кылат. Бул дүкөндө аты-жөнү, байланыш номери, дареги, электрондук почтасы, заказ тарыхы, буйрутма берүү жана комментарийлерге кирүү мүмкүнчүлүгүн камтыйт.",
      message_bold:
        "Бул дүкөнгө кирүү үчүн расмий дүкөн колдонмосун колдонууну унутпаңыз.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Иреттөө",
    title_small: "Иреттөө..",
    nothing: "Эч нерсе",
    most_views: "Эң көп көрүүлөр",
    most_likes: "Эң Популярдуу",
    most_recent: "Эң жаңы",
    most_sell: "Эң көп сатылган",
    cheapest: "Эң арзан",
    most_expensive: "Эң кымбат",
    only_available: "жеткиликтүү",
    view_mode: {
      normal: "Кадимки",
      grid: "Тор",
      list: "Тизме",
      insta: "Insta стили",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Жасалма",
    action: "Аукцион",
    compare_limit: "10 нерсе чеги",
    compare_add: "Салыштырууга кошуу",
    compare_be_in_list: "Салыштыруу тизмесинде",

    type: "Түр",
    brand: "Бренд",
    category: "Категория",
    discount: "Арзандатуу",
    track_price: "Бааны көзөмөлдөө",
    waiting_for_auction: "Аукционду күтүп жатасызбы?",
    inform_auction: "Аукцион тууралуу айтып бериңизчи",
    return_in_days: "{days} күн Кепилдик кайтаруу",
    support24h7: "24 саат 7 күн колдоо",
    support_normal: "Жумуш убактысын колдоо",
    original_guarantee: "Оригиналдуу кепилдик",
    cod_payment: "Жеткирүү боюнча накталай акча",

    pros: "Артыкчылыктар",
    cons: "Кемчиликтери",

    external_link: "Кененирээк окуу",
    notifications: {
      congratulation: "Куттуктайбыз",
      waiting_list_add_success:
        "Бул продукт аукционго коюлганда сизге кабарлайбыз.",
      waiting_list_delete_success: "Сиз аукциондун күтүү тизмесинен чыктыңыз.",
    },

    offer_message: "{min_quantity} сатып алыңыз, бул нерселерге {percent}% арзандатуу алыңыз",
    up_to: "Ар бир буйрутма үчүн {per_order}x чейин",
    get_free: "АКЫСЫЗ АЛУУ",
    get_off: "{percent}% АЛУУ",
    select_a_vendor_message: "Сатуучуну тандаңыз.",
    product_description_header: "{product} менен тааныштыруу",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Жеткиликтүүлүк күтүүдө",
    inform_me_when_available: "Муну күтүп жатасызбы?",
    pay_buy: "Төлө & Сатып алуу",
    quantity: "Сан",
    quantity_in_basket: "Себеттеги буюмдар",
    count_unit: "x",
    remove: "Алып салуу",
    add_to_basket: "Себетке кошуу",
    buy: "Сатып алуу",
    subscribe_now: "Азыр жазылыңыз",
    unsubscribe: "Жазылууну токтотуу",
    select_a_subscription_plan: "Биринчи планды тандаңыз!",
    manage_subscriptions: "Жазылууну башкаруу",
    notifications: {
      inform_add_success: "Ал жеткиликтүү болгондо сизге кабарлайбыз.",
      inform_remove_success: "Сиз күтүү тизмесинен чыгарылдыңыз.",
    },
    zip_pin_input: "Почта индекси / PIN",
    zip_pin_not_available_msg: "Бул жерде жеткиликтүү эмес!",
    zip_pin_placeholder: "Почта индекси/PIN кодун тандаңыз...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "карап чыгуу",
    spec: "Мүнөздөмө",
    comments: "Комментарийлер",
    price: "Баасы",
    rate: "Баа",
    comment: "Комментарий",
    warranty: "Кепилдик",
    return_policy: "Кайтаруу саясаты",
    guide: "Гид",
    shipping: "Жеткирүү",
    related_products_title: "Тектеш продуктылар",
    related_categories_title: "Коллекциялардан табуу",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Заказдардын тарыхы",
      profile: "Менин профилим",
      favorites: "Сүйүктүү товарлар",
      gift_cards: "Белек карталары",
      return_requests: "Кайтарылган Заказдар",
      basket: "Соода корзинасы",
    },
    user_menu: {
      my_shops: "Менин дүкөндөрүм",
      go_to_admin: "{shop_name} башкаруу",
      exit_from: "Чыгуу {shop_name}",
      chips: "{chips} Чипсы",
    },
    login_to_shop: "Дүкөнгө кириңиз",
    login_to_shop_short: "кирүү",
    item_in_basket_message: "{count} Бул нерсе арабаңда.",
    search_title: "{shop_name} дүкөнүнөн издөө",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Араба",
    basket_is_empty: "Арабаңыз бош.",
    total_price: "Бардыгы",
    view_basket: "Сиздин Араба",
    more: "Дагы ...",
    accept_and_pay: "Текшерүү",
    items: "Нерсе(лер)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Четке кагылды",
    table: {
      code: "Заказ коду",
      reserved: "Дата",
      delivery_state: "Жеткирүү абалы",
      price: "Жалпы баасы",
      status: "Төлөм абалы",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Заказ коду",
      items: "Товарлар",
      reserved: "Дата",
      delivery_state: "Акыркы абалы",
      price: "Жалпы баасы",
      status: "Төлөм абалы",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Белек картасы",
      comments: "Комментарийлер",
      favorites: "Сүйүктүүлөр",
      return_requests: "Кайра берет",
      addresses: "Даректер",
      profile: "профиль",
      orders: "Заказдар",
      wallets: "Капчыктар",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Менин капчыктарым",
    subtitle: "Эгер сиз талаптарга жооп берсеңиз жана кэшбэк программасы активдүү болсо, буйрутмаңыздын бир бөлүгү капчыгыңызга түшөт. Бул каражатты кийинки сатып алууда колдоно аласыз."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Менин капчыгымдын балансы',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Заказ",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Төлөм",
      payment_waiting: "Төлөмдү күтүүдө",
      payment_completed: "Төлөндү",
      table: {
        title: "Аталышы",
        amount: "Суммасы",
        description: "Сүрөттөмө",
      },
      total_payment: "Төлөнгөн сумма",
      discount: "Арзандатуу",
      discount_code: "Арзандатуу коду",
      delivery_fee: "Жеткирүү баасы",
      delivery_fee_after: "Жеткирүү төлөнбөйт",

      total_price: "Жалпы буюмдардын баасы",
      total_items_discount: "буюмдар арзандатуу",
      total_price_after_offers: "Сунуштарды колдонгондон кийин бардыгы",
      total_order_price_before_tax: "Салык салынганга чейинки жалпы баа",

      buyer_payment: "Сатып алуучунун төлөм суммасы",

      payment_is_in_require_capture_message:
        "Төлөмүңүздү алдык, бирок ал азырынча акыркы түрдө кармала элек.",
      settle_the_earlier_bill_first: "Адегенде мурунку эсепти төлөңүз!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Жеткирүү",
      subtitle: "Сатып алуучу маалымат",
      confirm_received_action: "Продукттун кабыл алынышын ырастаңыз",
      confirm_received_info:
        "Эгер сиз заказ алган болсоңуз, ырастоо баскычын басыңыз. Зарыл болсо, ырастоо алсаңыз, жолдомо бере аласыз.",
      Recipient: "Алуучу",
      bill: "Эсеп-фактура",
      name: "аты",
      tel: "Телефон",
      email: "Эл. почта",
      country: "Өлкө",
      state: "Мамлекет",
      city: "Шаар",
      address: "Дарек",
      building_no: "Имарат номери",
      unit_no: "Бирдиктин номери",
      postal_code: "Почта индекси",
      description: "Сүрөттөмө",
      order_delivered: "Заказ жеткирилди.",
      delivery_time: "Жеткирүү убактысы",
      tracking_code: "Көз салуу коду",
      tracking_url: "Көзөмөлдөө шилтемеси",

      notifications: {
        confirm_delivery: "Буйрутмаңыз ырасталды.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Товардын оригиналдуулугуна кепилдик",
      return: "Кайтуу",
      table: {
        product: "Продукт аты",
        count: "Сан",
        unit_price: "Бирдик баасы",
        total_price: "Жалпы баасы",
        discount: "Арзандатуу",
        final_price: "Акыркы баа",
        returned: "Кайтып келди",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Кайтуу",
    count_input: "Кайтарылган буюмдардын саны",
    count_input_message: "Канча буюмду кайтарып бересиз?",
    reason_input: "Кайтаруунун себеби",
    reason_input_message: "Бул нерсени кайтаруунун себебин тандаңыз.",
    note_input: "Сүрөттөмө",
    note_input_hint: "Кайтаруунун себебин айтып бер..",
    note_input_message:
      "Зарыл болсо, бул нерсени кайтаруунун себебин сүрөттөп бериңиз.",
    media_message:
      "Продукттун статусу тууралуу маалыматты жакшыраак колдоо үчүн бул жерге буюмдун сүрөтүн, аудиосун же видеосун жүктөй аласыз. Файлды тандоо автоматтык түрдө жөнөтүлүп, ырасталат.",
    video: "Видео",
    voice: "Үн",
    add_action: "Кайтаруу өтүнүчүн жөнөтүү",
    notifications: "Кайтаруу өтүнүчүңүз ийгиликтүү катталды.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Заказ",
    info: {
      title: "Сатып алынган виртуалдык продукт",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Менин жеке маалыматым",
    name: "аты",
    email: "Эл. почта",
    tel: "Тел",
    identity: "Аутентификация",
    success_kyc: "Текшерилген KYC",
    no_kyc: "KYC жок",
    club: "Колдонуучу деңгээли",
    subscription: "Жаңылыктарга жазылуу",
    leave_shop: "Бул дүкөндөн чыгып, бардык кардарлардын деңгээлин алып салыңыз",
    leave_shop_action: "Дүкөндөн чык",
    edit_personal_info: "Жеке маалыматты түзөтүү",
    leave_dialog: {
      title: "Дүкөндөн чык",
      message:
        "Бул дүкөнгө жазылууну токтотуу буйрутмаңыздын маалыматын жана жазууларын жок кылбайт.",
      action: "кет",
    },
    notifications: {
      leave_success: "Дүкөндөн чык",
    },
    club_table: {
      discount: "Арзандатуу",
      limit: "Чек",
      currency: "Валюта",
      free_shipping: "Эркин жеткирүү",
    },

    my_profile: {
      title: "Менин профилим",
      subtitle: "Бул дүкөн үчүн менин кардар профилимдин маалыматы.",
      edit_action: "Профилди түзөтүү"
    },
    subscribe_status: {
      subscribed: "Мен акыркы жаңылыктарды жана акцияларды эл. почта аркылуу алууга жазылганмын.",
      unsubscribed: "Мен жаңылыктарды же акцияларды эл. почта аркылуу алууга жазылган эмесмин."
    },
    my_club: {
      subtitle: "Менин клуб деңгээлим жана анын артыкчылыктары."
    },
    kyc: {
      subtitle: "Бул менин глобалдык идентификация маалыматым."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Соода корзинасы",
    total_price: "Жалпы суммасы",
    shipping: "Жеткирүү баасы",
    free_shipping: "Эркин жеткирүү",
    shipping_not_pay: "Кирбейт",
    total_discount: "Жалпы арзандатуу",
    customer_club: "Кардар клубунун мүчөсү",
    customer_club_discount: "Мүчө арзандатуу",
    final_price: "Акыркы төлөм",
    lead_time: "Даярдоо убактысы",
    lead_time_unit: "Саат",
    receive_time: "Артыкчылыктуу жеткирүү убактысы",
    select_time: "Жеткирүү убактысын тандаңыз",
    no_select_time: "Эң кыска мөөнөттө",
    transportation_type: "Жеткирүү түрү",
    days_input: "Жеткирүү күндөрү",
    days_input_label: "күндөр",
    days_input_no_data: "Жок дегенде бир күндү тандаңыз",
    time_input: "Жеткирүү убактысы",
    time_input_label: "Жеткирүү сааты",
    time_input_label_no_data: "Жок дегенде бир убакыт аралыгын тандаңыз",
    support_cod: "Жеткирүү боюнча накталай акча",
    not_support_cod: "Жергиликтүү төлөм мүмкүн эмес!",
    final_confirm_action: "Акыркы буйрук ырастоо",
    pay_and_complete_action: "Азыр төлөө",
    pre_confirm_service: "Өтүнүч тапшыруу",
    cross_selling_discount: "Коллекция арзандатуу",

    errors: {
      no_address: "Буйрутмаңызды жөнөтүүнү каалаган даректи тандаңыз.",
      no_phone: "Товарларды кабыл алууну координациялоо үчүн байланыш номерин киргизиңиз.",
      select_billing_country: "Эсептөө өлкөңүздү тандаңыз",
      select_billing_state: "Салык аймагыңызды тандаңыз",
    },
    same_billing_address: "Эсеп коюу маалыматы Алуучунун маалыматына окшош",
    same_billing_address_desc:
      "Биллинг дареги жеткирүү дареги менен бирдей.",
    custom_billing_info: "Башка эсеп-кысап маалыматы",
    custom_billing_info_desc:
      "Сиз САЛЫК номериңизди киргизип, эсеп коюу үчүн башка даректи коё аласыз.",
    basket_empty: "Себет бош",
    extra_shipping_count: "Сиз {count} топтом аласыз.",
    select_location_error:
      "Картадан жүктү алган жерди табыңыз жана алуучунун так дарегин аныктоо үчүн картанын ортосундагы индикаторду басыңыз.",

    billing_business_desc: "Бул салык номери бар бизнес эсеби.",
    billing_personal_desc: "Бул жеке эсеп.",

    no_billing_title: "Эсеп коюу жок",
    no_billing_desc: "Эсеп коюу дарегин бош калтырыңыз.",

    can_pay_cod_message:"Бул буйрутма үчүн жеткирүүдө накталай төлөй аласыз.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Саат",
    count_input: "Сан",

    price_changed: "Баасы өзгөрдү. жаңы баасы:",
    offer: "{count}x нерсеге {percent}% арзандатуу алыңыз",
    offer_free: "{count}x акысыз алыңыз",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Менин даректерим",
    subtitle:"Сакталган даректериңизди бул жерден көрүп, жаңысын оңой кошуңуз.",
    new_action: "Жаңы дарек",
    receiver: "Алуучу",
    address: "Дарек",
    building_no: "номер",
    building_unit: "бирдиги",
    postcode: "Почта индекси",
    tel: "Тел",
    description: "Эскертүү",

    map: {
      title: "Менин даректерим",
      confirm: "Дарек каттоо",
      address_type: "Дарек",
      receptor_type: "Алуучу",
    },
    add_dialog: {
      title: "Жаңы дарек аты",
      message: "Жаңы даректин аталышын киргизиңиз.",
      address_name_input: "Дарек (талап кылынат)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Сурамдарды кайтаруу",
    subtitle:"Кайтаруу өтүнүчтөрүңүздү бул жерден көрүңүз. Кайтаруу саясаты бар товарлар үчүн өтүнүчтү буйрутма барагында жөнөтө аласыз.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Каалоо тизмеси",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Менин комментарийлерим",
    first_post: "Биринчи пост",
    last_edit: "Акыркы түзөтүү",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Менин Белек карталарым",
    add_action: "Карта кошуу",
    add_card_dialog: {
      title: "Белек картасын кошуу",
      message:
        "Картанын номерин жана коопсуздук кодун киргизиңиз. Белек картасы аккаунтуңузга кошулат.",
      card_number_input: "Картанын номери",
      info: "Эскертүү: Дүкөндөн сатып алууда сизге белек карталары менен төлөө мүмкүнчүлүгү көрсөтүлөт. Бул опцияны тандоо менен, толуктоо балансыңыздын суммасы заказдын суммасынан алынып салынат.",
      add_action: "Картаны каттоо",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Продукт салыштыруу",
    action_button: "Салыштыруу",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Салыштыруу тизмесине эч кандай продукт кошулган жок.",
      price: "Баасы",
      type: "Түр",
      brand: "Бренд",
      warranty: "Кепилдик",
      variants_comparison: "Продукциянын варианттарын салыштырыңыз",
      spec: "Техникалык мүнөздөмө",
      pros: "Артыкчылыктар",
      cons: "Кемчиликтери",
      user_review: "Колдонуучунун комментарийлери",
      rating: "Рейтинг",
      rating_count: "Сын-пикирлердин саны",
      info: "Төмөнкү шилтемени жөнөтүү менен бул продуктту салыштыруу таблицасын досторуңуз менен бөлүшө аласыз, же бул шилтемени сактоо менен кийинчерээк кире аласыз.",
      copy_action: "Салыштыруу шилтемесин көчүрүү",
      check_list: ["Ооба", "бар"],
      cross_list: ["Жок", "жок"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Оригиналдар гана",
    only_has_discount: "Жөн гана арзандатуу",
    price_range: "Баа диапазону",
    brands: "Бренд",
    main_shop_page: "Дүкөндүн башкы бети",
    home: "Үй",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Урматтуу {user}, сиз бул өнүмдү сатып алдыңыз. Бул продукт жөнүндө эмне деп ойлойсуз?",
    notification: {
      title: "куттуктоо",
      message: "Сиздин комментарий жазылды.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Блог",
    add_new_blog: "Жаңы блог",
    popular: "Популярдуу",
    topics: "Темалар",
    suggestions: "Сунуштар",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Биз жөнүндө",
    terms: "Пайдалануу шарттары",
    privacy: "Купуялык саясаты",
    contact_us: "Биз менен байланыш",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Биз менен байланыш формасы",
    name: "аты",
    email: "Эл. почта",
    phone: "Телефон",
    message: "Кабар",
    notifications: {
      success: "Сиздин билдирүүңүз жөнөтүлдү.",
    },
    submitted_title: "Бизге кайрылганыңыз үчүн рахмат!",
    submitted_message:
      "Биз менен байланышканыңызга ыраазыбыз. Сиздин билдирүү кабыл алынды жана биздин команда учурда аны карап жатат. Биз мүмкүн болушунча тезирээк жооп беребиз жана ушул убакыттын ичинде чыдамкайлыгыңар үчүн рахмат. Сиздин кызыгууңуз жана пикириңиз биз үчүн маанилүү жана биз сизге эң жакшы колдоо көрсөтүүгө милдеттүүбүз.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Төлөмдү ырастоо",
      payment_success: "Төлөм бүттү.",
      buy_title: "Сатып алуу",
      pay_by_giftcards: "Буйрутмаңыз белек картасы менен төлөндү.",
      free_order: "Буйрутмаңыз бекер.",
      pay_by_cod: "Буйрутмаңыз жеткирүү боюнча накталай акча катары кошулду.",
      pay_by_dir:
        "Буйрутмаңыз ийгиликтүү кошулду. Эми сиз түз акча которуу жолу менен төлөп, андан кийин төлөм дүмүрчөгүн буйрутма бетине жүктөй аласыз.",
      pay_title: "Төлөм",
      qr_code_payment: "Төлөм QR кодунун дареги түзүлдү.",
      connecting_to_online_gateway: "Онлайн төлөм шлюзуна туташуу.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Башына чейин калды",
    title_between_start_end: "Аягына чейин калды",
    title_after_end: "Бүттү",
    title_no_start_end: "Убакытсыз!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Ар бир заказга бир белек ала аласыз.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Арзандатуу коду",
    add_coupon: "Купон кошуу",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Авокадо формасы иштетилген эмес!",
    last_update: "Акыркы жаңыртуу:",
    step1:
      "1. Заказ кылгыңыз келген буюмдун атын жана чоо-жайын киргизип, Кошуу баскычын басыңыз.",
    title_plc: "Продукттун атын киргизиңиз.",
    description_plc: "Сизде көбүрөөк продукт сүрөттөмөлөрү барбы?",
    link_plc: "Сизде продуктка шилтеме барбы?",
    image: "Продукт сүрөтү",
    image_msg: "Керек болсо продуктунун сүрөтүн жөнөтө аласыз.",
    add_item: "Элемент кошуу",
    items_list: "Суралган буюмдардын тизмеси",
    currency_msg: "Бул буйруктун суммасын ушул валюта менен төлөшүңүз керек.",
    step2:
      "2. Керектүү нерселердин бардыгын кошкондон кийин, буйрутманы карап чыгуу өтүнүчүн чыкылдатыңыз. Бул этапта биз буйрутманы карап чыгып, сизге бааны билдиребиз. Бул шилтемени басуу менен сиз бааны жана төлөм шилтемесин көрө аласыз.",
    order_action: "Заказ регистрация",
    show_all: "Баарын көрсөтүү",
    show_accepted: "Ырасталган нерселерди көрсөтүү",
    last_orders: "Акыркы буйрутмаларыңыздын тизмеси",
    pending_status: "каралып жатат",
    check_now: "Тартипти текшерүү",
    add_new_order: "Жаңы заказ кылуу",
    pay_online: "Онлайн төлө",
    pricing_not_completed_message:
      "Буйрутмаңыз каралууда. Буйрутмаңыз жакында каралып, баасы коюлуп, буйрутманы төлөй аласыз.",

    select_address_message:
      "Сураныч, дарегиңизди киргизиңиз, андан кийин заказды тапшырсаңыз болот.",

    delete_item_dialog: {
      title: "Корзинага нерсени алып салыңыз",
      message: "Бул нерсени арабага жок кылгыңыз келеби?",
      action: "Ооба, жок кылуу",
    },

    notifications: {
      order_success: "Буйрутмаңыз ийгиликтүү жайгаштырылды.",
      delete_success: "Элемент жок кылынды.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Заказ түзүү",
    message:
      "Продукт кодун сканерлөө менен сатып алууну каалаган өнүмдөрдүн тизмесин түзүңүз.",

    currency_msg: "Сиз төлөгүңүз келген валюта.",
    order_action: "Төлөм",
    add_new_order: "Жаңы тартип",
    continue_order: "Заказды улантыңыз",

    delete_item_dialog: {
      title: "Корзинага нерсени алып салыңыз",
      message: "Бул нерсени арабага жок кылгыңыз келеби?",
      action: "Ооба, жок кылуу",
    },
    notifications: {
      order_success: "Буйрутмаңыз ийгиликтүү жайгаштырылды.",
      delete_success: "Элемент жок кылынды.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Төлөм дүмүрчөгүнүн сүрөтүн жүктөө.",
    upload_payment_receipt_done:
      "✔ Сиз квитанциянын сүрөтүн жүктөдүңүз, биздин жактырууну күтүңүз. Эгер өзгөртүү керек болсо, мурунку сүрөттү жаңысына алмаштыра аласыз.",
    public_form_title: "Акча которуу үчүн эсеп маалыматы",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Эмне кылуу тизмеси",
      message: "Жасагыңыз келген иштин аталыштарын тактаңыз жана ал канчалык деңгээлде алга жылгандыгын сатып алуучуга билдириңиз.",
    },
    booking: {
      title: "Брондоо / Брондоо",
      message: "Бул буйрутма белгиленген убакытта иштетилет, кардар каалаган мөөнөттү тандап алды, эгер сиз тандалган мөөнөттө кандайдыр бир өзгөртүүлөрдү киргизгиңиз келсе, кардарга кабарлаңыз.",

      selected_checkin: "Кардар тарабынан тандалган текшерүү",
      selected_checkout: "Кардар тарабынан тандалган текшерүү",
      change_days_question:
        "Сиз кардар тандаган күндөрү өзгөртүү керекпи?",
      show_calendar: "Заказдардын календарын көрсөтүү",
    },
    pricing: {
      title: "Баа коюу",
      message: "Бул кызмат үчүн сиз канча төлөйсүз?",
    },
    subscription: {
      title: "Жазылуу",
      message:
        "Бул кызматты күн сайын сатып алуу менен жазылуу мөөнөтүн тандай аласыз. Сиз буга чейин киргизген демейки маанилерди өзгөртүүнү кааласаңыз, сатып алуучуга кабарлаңыз.",
      duration: "Жазылуу мөөнөтү",
    },
    charge: {
      title: "Заряддоо",
      message:
        "Сиз бул нерсе үчүн төлөмдү белгиледиңиз. Сиз кардар сатып алган буюм үчүн төлөмдүн суммасын өзгөртө аласыз.",
      charge: "Заряддоо",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Кирүү мүмкүнчүлүгүн текшерүү күтүлүүдө...",
    no_access_message:
      "Тилекке каршы, биздин дүкөнгө кире албайсыз.<br/> Сураныч, биз менен байланышыңыз.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Тартип бөлүшүү",
    title: "Бул буйрукту башкалар менен бөлүшүңүз.",
    message:
      "Бул коопсуз шилтеме, аны билгендериңиз менен гана бөлүшүңүз. Бул шилтемеси бар ар бир адам буйрутмаңыздын көчүрмөсүн жасап, тандалган даректи көрө алат. Ал учурдагы арабаң тууралуу маалыматты камтыйт.",
    valid_period: "Бул шилтеме 48 сааттан кийин бүтөт.",
    import_order_action: "Импорттук заказ",
    retrieve_dialog_title: "Тышкы тартипти алуу",
    address_included: "Себет буюмдарын бөлүшүү + Дарек",
    address_excluded: "Себет буюмдарын гана бөлүшүңүз",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Баалар",
    inventory: "Инвентаризация",
    discount: "Арзандатуу",
  },

  rating: {
    product_rating_message:
      "Бул продукт 5 жылдыздын ичинен {rate} рейтингине ээ жана {rate_count} адам тарабынан бааланган.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Изилдөө!",
      same_tags_subtitle: "Көбүрөөк окшош нерселерди табыңыз.",
      same_category_subtitle: "Бул категориядагы эң сонун нерселерди табыңыз.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "{product} менен бирге буйрутма бериңиз",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "{vendor} дүкөнүн көрүү",
  },

  login: {
    welcome: "Кош келиңиз",
  },


};
