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
  surveys: ["Бик начар", "Начар", "Уртача", "Яхшы", "Бик яхшы"],

  /** @see SFooterSection **/
  footer: {
    map: "Карта",
    email: "Электрон почта",
    phone: "Телефон",
    address: "Адрес",

    copyright:
      "Эчтәлекне коммерция булмаган максатларда гына һәм чыганакка ({shop_title} белән сылтама) күрсәтеп кулланырга мөмкин. Барлык хокуклар {shop_title} өчен сакланган.",
    powered_by: "Туклана",
    privacy: "Шәхсилек сәясәте",
    term_of_use: "Куллану шартлары",
    shop_app_setting: "Кибет көйләнеше & GDPR",

    dialog_setting: {
      title: "Кибет кушымталарын көйләү",
      app_list: "Гаризалар исемлеге",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Сатылып бетте",
    review_unit: "Кабатлау",
    not_original: "Оригиналь түгел",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Фильтр",
    native: {
      title: "Кушымта кертү",
      message:
        "Бу кушымта сезнең кибет счеты мәгълүматына рөхсәт сорый. Бу исемгә, контакт номерына, адреска, электрон почтага, заказ тарихына, заказ бирү һәм бу кибеткә аңлатмалар урнаштыруны үз эченә ала.",
      message_bold:
        "Бу кибеткә керү өчен рәсми кибет кушымтасын кулланыгыз.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Карата төрлә",
    title_small: "Карата төрлә..",
    nothing: "Бернәрсә дә",
    most_views: "Күпчелек күренешләр",
    most_likes: "Иң популяр",
    most_recent: "Яңа",
    most_sell: "Сату",
    cheapest: "Иң арзан",
    most_expensive: "Иң кыйбат",
    only_available: "Мөмкин",
    view_mode: {
      normal: "Нормаль",
      grid: "Челтәр",
      list: "Исемлек",
      insta: "Инста",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Ялган",
    action: "Аукцион",
    compare_limit: "10 пункт чик",
    compare_add: "Чагыштыру өчен өстәргә",
    compare_be_in_list: "Чагыштыру исемлегендә",

    type: "Тип",
    brand: "Бренд",
    category: "Төркем",
    discount: "Ташлама",
    track_price: "Трек бәясе",
    waiting_for_auction: "Аукционны көтәсезме?",
    inform_auction: "Миңа аукцион турында сөйләгез",
    return_in_days: "{days} көн кайтару гарантиясе",
    support24h7: "24 сәгать 7 көн",
    support_normal: "Эш вакыты ярдәме",
    original_guarantee: "Оригиналь гарантия",
    cod_payment: "Тапшыру өчен акча",

    pros: "Тәртип",
    cons: "Уңай яклары",

    external_link: "Күбрәк укы",
    notifications: {
      congratulation: "Котлыйбыз",
      waiting_list_add_success:
        "Бу продукт аукционда булганда сезгә хәбәр итәрбез.",
      waiting_list_delete_success: "Сез аукцион көтү исемлегеннән чыктыгыз.",
    },

    offer_message: "{min_quantity} данә сатып алыгыз һәм бу товарларга {percent}% ташлама алыгыз",
    up_to: "Һәр заказ өчен {per_order} кадәр",
    get_free: "Түләүсез",
    get_off: "{percent}% ташлама алыгыз",
    select_a_vendor_message: "Зинһар, сатучы сайлагыз.",
    product_description_header: "{product} белән таныштыру",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Мөмкинлекне көтү",
    inform_me_when_available: "Моны көтәсезме?",
    pay_buy: "Түләү һәм сатып алу",
    quantity: "Сана",
    quantity_in_basket: "Арбада әйберләр",
    count_unit: "данә",
    remove: "Чыгар",
    add_to_basket: "Кәрзингә өстә",
    buy: "Сатып ал",
    subscribe_now: "Хәзер язылу",
    unsubscribe: "Язылудан баш тарту",
    select_a_subscription_plan: "Башта план сайлагыз!",
    manage_subscriptions: "Подписка белән идарә итү",
    notifications: {
      inform_add_success: "Мөмкин булганда сезгә хәбәр итәрбез.",
      inform_remove_success: "Сез көтү исемлегеннән алындыгыз.",
    },
    zip_pin_input: "Почта индексы / PIN",
    zip_pin_not_available_msg: "Бу урында мөмкин түгел!",
    zip_pin_placeholder: "Почта индексы/PIN кодын сайлагыз...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Кабатлау",
    spec: "Спек",
    comments: "Аңлатмалар",
    price: "Бәя",
    rate: "Ставка",
    comment: "Аңлатма",
    warranty: "Гарантия",
    return_policy: "Кайтару сәясәте",
    guide: "Белешмәлек",
    shipping: "Юллау",
    related_products_title: "Бәйләнешле продуктлар",
    related_categories_title: "Коллекцияләрдә табыгыз",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Заказлар тарихы",
      profile: "Минем профиль",
      favorites: "Яраткан әйберләр",
      gift_cards: "Бүләк карточкалары",
      return_requests: "Кайткан заказлар",
      basket: "Кәрҗин",
    },
    user_menu: {
      my_shops: "Минем кибетләр",
      go_to_admin: "{shop_name} белән идарә итү",
      exit_from: "{shop_name} дан чыгу",
      chips: "{chips} жетон",
    },
    login_to_shop: "Кибеткә керегез",
    login_to_shop_short: "керергә",
    item_in_basket_message: "Бу товардан {count} данә кәрзинегездә бар.",
    search_title: "{shop_name} кибетендә эзләү",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Арба",
    basket_is_empty: "Сезнең арба буш.",
    total_price: "Барлыгы",
    view_basket: "Сезнең арба",
    more: "Тулырак ...",
    accept_and_pay: "Тишерү",
    items: "Предмет (лар)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Кире кагылды",
    table: {
      code: "Заказ коды",
      reserved: "Дата",
      delivery_state: "Тапшыру статусы",
      price: "Гомуми бәя",
      status: "Түләү статусы",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Заказ коды",
      items: "Предметлар",
      reserved: "Дата",
      delivery_state: "Соңгы статус",
      price: "Гомуми бәя",
      status: "Түләү статусы",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Бүләк картасы",
      comments: "Аңлатмалар",
      favorites: "Фаворитлар",
      return_requests: "Кайта",
      addresses: "Адреслар",
      profile: "профиль",
      orders: "Заказлар",
      wallets: "Капчыклар",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Минем капчыкларым",
    subtitle: "Әгәр сез яраклы булсагыз һәм акча кайтару программасы актив булса, заказыгызның бер өлеше капчыгыгызга күчереләчәк. Бу акчаны киләсе сатып алуда куллана аласыз."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Капчыгым балансы",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Заказ",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Түләү",
      payment_waiting: "Түләү көтә",
      payment_completed: "Түләүле",
      table: {
        title: "Титул",
        amount: "Күләм",
        description: "Тасвирлау",
      },
      total_payment: "Түләнгән сумма",
      discount: "Ташлама",
      discount_code: "Ташлама коды",
      delivery_fee: "Китерү бәясе",
      delivery_fee_after: "Тапшыру юк",

      total_price: "Барлык әйберләрнең бәясе",
      total_items_discount: "Ташламалар",
      total_price_after_offers: "Тәкъдимнәрне кулланганнан соң барлыгы",
      total_order_price_before_tax: "Салым алдыннан гомуми бәя",

      buyer_payment: "Сатып алучының түләү күләме",

      payment_is_in_require_capture_message:
        "Түләвегезне кабул иттек, ләкин акча әле тотып алынмаган.",
      settle_the_earlier_bill_first: "Башта алдагы исәп-хисапны түләгез!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Тапшыру",
      subtitle: "Сатып алучы турында мәгълүмат",
      confirm_received_action: "Продукция квитанциясен раслагыз",
      confirm_received_info:
        "Заказны алсагыз, раслау төймәсенә басыгыз. Кирәк булса, раслауны алсагыз, юллама җибәрә аласыз.",
      Recipient: "Алучы",
      bill: "Фактура",
      name: "Исем",
      tel: "Телефон",
      email: "Электрон почта",
      country: "Ил",
      state: "Дәүләт",
      city: "Шәһәр",
      address: "Адрес",
      building_no: "Төзелеш номеры",
      unit_no: "Берәмлек саны",
      postal_code: "Почта индексы",
      description: "Тасвирлау",
      order_delivered: "Заказ тапшырылды.",
      delivery_time: "Тапшыру вакыты",
      tracking_code: "Күзәтү коды",
      tracking_url: "Күзәтү сылтамасы",

      notifications: {
        confirm_delivery: "Сезнең заказ расланды.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Товарның оригинальлегенә гарантия",
      return: "Кайту",
      table: {
        product: "Продукциянең исеме",
        count: "Сана",
        unit_price: "Бер әйбер бәясе",
        total_price: "Гомуми бәя",
        discount: "Ташлама",
        final_price: "Соңгы бәя",
        returned: "Кайтты",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Кайту",
    count_input: "Кире кайтарылган әйберләр саны",
    count_input_message: "Сез ничә әйбер кайтарасыз?",
    reason_input: "Кайту өчен сәбәп",
    reason_input_message: "Бу әйберне кайтаруның сәбәбен сайлагыз.",
    note_input: "Тасвирлау",
    note_input_hint: "Кайту сәбәбен сурәтләгез ..",
    note_input_message:
      "Кирәк булса, бу әйберне кире кайтаруның сәбәбен сурәтләгез.",
    media_message:
      "Продукциянең статусы турында яхшырак ярдәм алыр өчен, продуктның рәсемен, аудио яки видеосын монда урнаштыра аласыз. Файлны сайлау автоматик рәвештә җибәреләчәк һәм расланачак.",
    video: "Видео",
    voice: "Тавыш",
    add_action: "Кайту соравын җибәр",
    notifications: "Кайту соравыгыз уңышлы теркәлде.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Заказ",
    info: {
      title: "Виртуаль продукт сатып алынган",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Минем шәхси мәгълүмат",
    name: "Исем",
    email: "Электрон почта",
    tel: "Тел",
    identity: "Аутентификация",
    success_kyc: "Тикшерелгән KYC",
    no_kyc: "KYC юк",
    club: "Кулланучы дәрәҗәсе",
    subscription: "Яңалыкларга язылу",
    leave_shop: "Бу кибеттән китегез һәм барлык клиентлар дәрәҗәсен бетерегез",
    leave_shop_action: "Кибеттән китү",
    edit_personal_info: "Шәхси мәгълүматны үзгәртү",
    leave_dialog: {
      title: "Кибеттән китү",
      message:
        "Бу кибеткә язылу сезнең заказ мәгълүматларын һәм язмаларны бетермәячәк.",
      action: "Кит",
    },
    notifications: {
      leave_success: "Кибеттән китү",
    },
    club_table: {
      discount: "Ташлама",
      limit: "Чик",
      currency: "Валюта",
      free_shipping: "Бушлай тапшыру",
    },

    my_profile: {
      title: "Минем профилем",
      subtitle: "Бу — кибет өчен минем клиент профиле мәгълүматым.",
      edit_action: "Профильне үзгәртү"
    },
    subscribe_status: {
      subscribed: "Мин соңгы яңалыкларны һәм акцияләрне электрон почта аша алырга язылганмын.",
      unsubscribed: "Мин электрон почта аша яңалыклар яки акцияләр алырга язылмаганмын."
    },
    my_club: {
      subtitle: "Минем клуб дәрәҗәм һәм өстенлекләре."
    },
    kyc: {
      subtitle: "Бу — минем глобаль идентификация мәгълүматым."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Кәрҗин",
    total_price: "Тулы сумма",
    shipping: "Китерү бәясе",
    free_shipping: "Бушлай тапшыру",
    shipping_not_pay: "Кертелмәгән",
    total_discount: "Гомуми ташлама",
    customer_club: "Клиент клубы әгъзасы",
    customer_club_discount: "Әгъза ташламасы",
    final_price: "Соңгы түләү",
    lead_time: "Әзерлек вакыты",
    lead_time_unit: "Сәгать",
    receive_time: "Сайлау вакыты",
    select_time: "Тапшыру вакытын сайлагыз",
    no_select_time: "Иң тиз вакытта",
    transportation_type: "Тапшыру төре",
    days_input: "Тапшыру көннәре",
    days_input_label: "Көннәр",
    days_input_no_data: "Ким дигәндә бер көн сайлагыз",
    time_input: "Тапшыру вакыты",
    time_input_label: "Тапшыру",
    time_input_label_no_data: "Ким дигәндә бер вакыт аралыгын сайлагыз",
    support_cod: "Тапшыруда акча",
    not_support_cod: "Урында түләү мөмкин түгел!",
    final_confirm_action: "Соңгы заказны раслау",
    pay_and_complete_action: "Хәзер түләгез",
    pre_confirm_service: "Сорау җибәрегез",
    cross_selling_discount: "Коллекция ташламасы",

    errors: {
      no_address: "Заказның җибәрелүен теләгән адресны сайлагыз.",
      no_phone: "Товар алуны координацияләү өчен контакт номерын кертегез.",
      select_billing_country: "Хисап илегезне сайлагыз",
      select_billing_state: "Салым өлкәсен сайлагыз",
    },
    same_billing_address: "Хисап мәгълүматы Алучы мәгълүматы белән бер үк",
    same_billing_address_desc:
      "Хисап адресы җибәрү адресы белән бертигез.",
    custom_billing_info: "Төрле исәп-хисап мәгълүматлары",
    custom_billing_info_desc:
      "Сез салым номерыгызны кертә аласыз һәм исәп-хисап өчен бүтән адрес куя аласыз.",
    basket_empty: "Кәрзин буш",
    extra_shipping_count: "Сез {count} пакет алачаксыз.",
    select_location_error:
      "Картаны җибәрү урынын табыгыз һәм алучының төгәл адресын билгеләр өчен карта уртасындагы индикаторга басыгыз.",

    billing_business_desc: "Бу салым номеры булган бизнес-счет.",
    billing_personal_desc: "Бу шәхси хисап.",

    no_billing_title: "Хисап юк",
    no_billing_desc: "Хисап адресын буш калдырыгыз.",

    can_pay_cod_message:"Бу заказ өчен китергәндә акчалата түли аласыз.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "данә",
    lead_unit: "Сәгать",
    count_input: "Сана",

    price_changed: "Бәяләр үзгәрде. яңа бәя:",
    offer: "{count} данәне {percent}% ташлама белән алыгыз",
    offer_free: "{count} данәне бушлай алыгыз",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Минем адресларым",
    subtitle:"Сакланган адресларыгызны монда карагыз һәм яңасын җиңел өстәгез.",
    new_action: "Яңа адрес",
    receiver: "Алучы",
    address: "Адрес",
    building_no: "номеры",
    building_unit: "берәмлек",
    postcode: "Почта индексы",
    tel: "Тел",
    description: "Тамга",

    map: {
      title: "Минем адресларым",
      confirm: "Адресны теркәү",
      address_type: "Адрес",
      receptor_type: "Алучы",
    },
    add_dialog: {
      title: "Яңа адрес исеме",
      message: "Яңа адрес өчен исем кертегез.",
      address_name_input: "Адрес (кирәк)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Запросларны кайтару",
    subtitle:"Кайтару сорауларыгызны монда карагыз. Кайтару сәясәте булган товарлар өчен заказ битендә кайтару соравы җибәрә аласыз.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Теләкләр исемлеге",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Минем аңлатмалар",
    first_post: "Беренче язма",
    last_edit: "Соңгы редакция",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Минем бүләк карточкаларым",
    add_action: "Картаны өстәгез",
    add_card_dialog: {
      title: "Бүләк картасын өстәгез",
      message:
        "Карта номерын һәм куркынычсызлык кодын кертегез. Сезнең хисапка бүләк картасы өстәләчәк.",
      card_number_input: "Карта саны",
      info: "Искәрмә: кибеттән сатып алганда, сезгә бүләк карталары белән түләү мөмкинлеге күрсәтеләчәк. Бу вариантны сайлап, тулыландыру балансы күләме заказ суммасыннан чыгарылачак.",
      add_action: "Картаны теркәү",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Продукцияне чагыштырыгыз",
    action_button: "Чагыштырыгыз",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Чагыштыру исемлегенә бернинди продукт өстәлмәде.",
      price: "Бәя",
      type: "Тип",
      brand: "Бренд",
      warranty: "Гарантия",
      variants_comparison: "Продукция вариантларын чагыштырыгыз",
      spec: "Техник үзенчәлекләр",
      pros: "Тәртип",
      cons: "Уңай яклары",
      user_review: "Кулланучының аңлатмалары",
      rating: "Рейтинг",
      rating_count: "Тикшерүләр саны",
      info: "Сез бу продуктны чагыштыру таблицасын дусларыгыз белән түбәндәге сылтаманы җибәреп бүлешә аласыз, яки соңрак бу сылтаманы саклап аңа керә аласыз.",
      copy_action: "Чагыштыру сылтамасын күчерү",
      check_list: ["Әйе", "Бар"],
      cross_list: [".К", "Юк"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Бары тик оригинал",
    only_has_discount: "Бары тик ташламалы",
    price_range: "Бәяләр диапазоны",
    brands: "Бренд",
    main_shop_page: "Төп битне саклагыз",
    home: "Өй",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Хөрмәтле {user}, сез бу продуктны сатып алдыгыз. Бу продукт турында фикерегез нинди?",
    notification: {
      title: "Котлыйбыз",
      message: "Сезнең комментарий язылды.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Блог",
    add_new_blog: "Яңа блог",
    popular: "Популяр",
    topics: "Темалар",
    suggestions: "Тәкъдимнәр",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Безнең турында",
    terms: "Куллану шартлары",
    privacy: "Шәхсилек сәясәте",
    contact_us: "Безнең белән элемтәгә чыгу",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Безнең белән элемтәгә керегез",
    name: "Исем",
    email: "Электрон почта",
    phone: "Телефон",
    message: "Хәбәр",
    notifications: {
      success: "Сезнең хәбәр җибәрелде.",
    },
    submitted_title: "Безгә ирешкән өчен рәхмәт!",
    submitted_message:
      "Сезнең безнең белән элемтәдә торуыгыз өчен без бик рәхмәтле. Сезнең хәбәр кабул ителде һәм безнең команда аны хәзер тикшерә. Без мөмкин кадәр тизрәк җавап бирербез, һәм бу вакыт эчендә түземлегегез өчен рәхмәт. Сезнең кызыксынуыгыз һәм фикерләрегез безнең өчен мөһим, һәм без сезгә иң яхшы ярдәм күрсәтергә әзер.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Түләү раслау",
      payment_success: "Түләү тәмамланды.",
      buy_title: "Сатып ал",
      pay_by_giftcards: "Сезнең заказ бүләк картасы белән түләнде.",
      free_order: "Сезнең заказ бушлай.",
      pay_by_cod: "Сезнең заказ китерү өчен акча рәвешендә өстәлде.",
      pay_by_dir:
        "Сезнең заказ уңышлы өстәлде. Хәзер сез турыдан-туры акча күчереп түли аласыз, аннары түләү квитанциясен заказ битенә урнаштыра аласыз.",
      pay_title: "Түләү",
      qr_code_payment: "Түләү QR код адресы булдырылган.",
      connecting_to_online_gateway: "Онлайн түләү шлюзына тоташу.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Башта калды",
    title_between_start_end: "Ахырга кадәр калды",
    title_after_end: "Тәмамланды",
    title_no_start_end: "Вакытсыз!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Сез заказ буенча бер бүләк ала аласыз.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Купон коды",
    add_coupon: "Купон өстәргә",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Авокадо формасы кушылмый!",
    last_update: "Соңгы яңарту:",
    step1:
      "1. Сез заказ бирергә теләгән продуктның исемен һәм детальләрен кертегез һәм Кушу төймәсенә басыгыз.",
    title_plc: "Продукциянең исемен кертегез.",
    description_plc: "Сездә продукт тасвирламалары күбрәкме?",
    link_plc: "Сезнең продуктка сылтамагыз бармы?",
    image: "Продукция рәсеме",
    image_msg: "Кирәк булса, продукт рәсемен җибәрә аласыз.",
    add_item: "Предмет өстәү",
    items_list: "Соралган продуктлар исемлеге",
    currency_msg: "Сез бу валюта белән бу заказ күләмен түләргә тиеш.",
    step2:
      "2. Барлык кирәкле әйберләрне өстәгәннән соң, заказны карау соравы төймәсенә басыгыз. Бу этапта без заказны карап чыгарбыз һәм бәясе турында сезгә хәбәр итәрбез. Бу сылтамага басып, сез бәяне һәм түләү сылтамасын күрә аласыз.",
    order_action: "Заказны теркәү",
    show_all: "Барысын да күрсәт",
    show_accepted: "Тастырылган әйберләрне күрсәт",
    last_orders: "Соңгы заказлар исемлеге",
    pending_status: "карала торган",
    check_now: "Заказны тикшерегез",
    add_new_order: "Яңа заказ бирегез",
    pay_online: "Онлайн түләү",
    pricing_not_completed_message:
      "Сезнең заказ карала. Тиздән сезнең заказ каралачак һәм бәяләнәчәк һәм сез заказны түли аласыз.",

    select_address_message:
      "Зинһар, адресыгызны кертегез, аннары сез заказны җибәрә аласыз.",

    delete_item_dialog: {
      title: "Сәүдә арбасыннан әйберне чыгар",
      message: "Сез бу әйберне арбадан бетерергә телисезме?",
      action: "Әйе, бетерегез",
    },

    notifications: {
      order_success: "Сезнең заказ уңышлы урнаштырылды.",
      delete_success: "Предмет бетерелде.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Заказ булдыру",
    message:
      "Продукция кодын сканерлап сатып алырга теләгән продуктлар исемлеген төзегез.",

    currency_msg: "Сез түләргә теләгән валюта.",
    order_action: "Түләү",
    add_new_order: "Яңа тәртип",
    continue_order: "Заказны дәвам итегез",

    delete_item_dialog: {
      title: "Сәүдә арбасыннан әйберне чыгар",
      message: "Сез бу әйберне арбадан бетерергә телисезме?",
      action: "Әйе, бетерегез",
    },
    notifications: {
      order_success: "Сезнең заказ уңышлы урнаштырылды.",
      delete_success: "Предмет бетерелде.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Түләү квитанциясенең рәсемен йөкләү.",
    upload_payment_receipt_done:
      "✔ Сез квитанция рәсемен йөкләдегез, безнең рөхсәтне көтегез. Әгәр дә сез үзгәрергә тиеш булсагыз, алдагы рәсемне яңасына алыштыра аласыз.",
    public_form_title: "Акча күчерү өчен хисап мәгълүматы",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Эшләр исемлеге",
      message: "Эшләргә теләгән эшнең исемнәрен күрсәтегез һәм сатып алучыга аның никадәр алга киткәнен хәбәр итегез.",
    },
    booking: {
      title: "Броньлау / броньлау",
      message: "Бу заказ билгеле бер вакытта эшкәртеләчәк, клиент кирәкле чорны сайлады, сайланган чорда үзгәрешләр кертергә теләсәгез, клиентка хәбәр итегез.",

      selected_checkin: "Клиент тарафыннан сайланган теркәлү",
      selected_checkout: "Клиент тарафыннан сайланган тикшерү",
      change_days_question:
        "Клиент сайланган көннәрдә үзгәрергә кирәкме?",
      show_calendar: "Заказлар календарен күрсәтегез",
    },
    pricing: {
      title: "Бәяләү",
      message: "Бу хезмәт өчен сез күпме түлисез?",
    },
    subscription: {
      title: "Подписка",
      message:
        "Сез бу хезмәтне көн саен сатып алып, язылу вакытын сайлый аласыз. Алдан кертелгән килешү кыйммәтләрен үзгәртергә телисезме, сатып алучыга хәбәр итегез.",
      duration: "Подписка вакыты",
    },
    charge: {
      title: "Түләү",
      message:
        "Сез бу әйбер өчен түләү билгеләдегез. Сез клиент сатып алган әйбер өчен түләү күләмен үзгәртә аласыз.",
      charge: "Түләү",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Рөхсәтне тикшерүне көтәләр ...",
    no_access_message:
      "Кызганычка каршы, безнең кибеткә керү мөмкинлегегез юк. <br/>Зинһар, безнең белән элемтәгә керегез.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Заказны бүлешү",
    title: "Бу заказны башкалар белән бүлешегез.",
    message:
      "Бу куркынычсыз сылтама, аны белгәннәр белән бүлешегез. Бу сылтама булган һәркем сезнең заказны кабатлый һәм сайланган адресны күрә ала. Анда сезнең хәзерге арба турында мәгълүмат булачак.",
    valid_period: "Бу сылтама 48 сәгатьтән соң бетәчәк.",
    import_order_action: "Заказны импортлау",
    retrieve_dialog_title: "Тышкы тәртипне алу",
    address_included: "Кәрзин әйберләрен бүлешү + Адрес",
    address_excluded: "Кәрзин әйберләрен генә бүлешегез",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Бәяләр",
    inventory: "Инвентаризация",
    discount: "Ташлама",
  },

  rating: {
    product_rating_message:
      "Бу продукт 5 йолдыздан {rate} бәя алды һәм {rate_count} кеше тарафыннан бәяләнде.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Тикшерегез!",
      same_tags_subtitle: "Күбрәк искиткеч әйберләр табыгыз.",
      same_category_subtitle: "Бу категориядә тагын да искиткеч әйберләр табыгыз.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "{product} белән бергә заказ бирегез",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "{vendor} кибетен карау",
  },

  login: {
    welcome: "Рәхим итегез",
  },


};
