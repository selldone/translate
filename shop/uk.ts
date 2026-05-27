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
  surveys: ["Дуже погано", "Погано", "Нормально", "Добре", "Відмінно"],

  /** @see SFooterSection **/
  footer: {
    map: "карта",
    email: "Електронна пошта",
    phone: "Телефон",
    address: "Адреса",

    copyright:
      "Використання вмісту лише в некомерційних цілях і з посиланням на джерело (посилання з {shop_title}). Усі права захищено для {shop_title}.",
    powered_by: "Працює на",
    privacy: "Політика конфіденційності",
    term_of_use: "Умови використання",
    shop_app_setting: "Налаштування магазину та GDPR",

    dialog_setting: {
      title: "Налаштування програм магазину",
      app_list: "Список додатків",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Продано",
    review_unit: "Огляд",
    not_original: "Не оригінальний",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Фільтр",
    native: {
      title: "Вхід до програми",
      message:
        "Для цієї програми потрібен доступ до інформації вашого облікового запису магазину. Це включає в себе доступ до імені, контактного номера, адреси, електронної пошти, історії замовлень, замовлення та розміщення коментарів у цьому магазині.",
      message_bold:
        "Обов’язково використовуйте офіційний додаток магазину, щоб увійти в цей магазин.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Сортувати за",
    title_small: "Сортувати за..",
    nothing: "Нічого",
    most_views: "Більшість переглядів",
    most_likes: "Найбільш популярний",
    most_recent: "Найновіший",
    most_sell: "Бестселер",
    cheapest: "Найдешевший",
    most_expensive: "Найдорожчий",
    only_available: "Доступний",
    view_mode: {
      normal: "Нормальний",
      grid: "Сітка",
      list: "Список",
      insta: "Вигляд Instagram",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Підробка",
    action: "Аукціон",
    compare_limit: "Ліміт 10 предметів",
    compare_add: "Додати до порівняння",
    compare_be_in_list: "У списку порівняння",

    type: "Тип",
    brand: "Бренд",
    category: "Категорія",
    discount: "Знижка",
    track_price: "Відстежуйте ціну",
    waiting_for_auction: "Чекаєте на аукціон?",
    inform_auction: "Розкажіть про аукціон",
    return_in_days: "Повернення гарантії на {days} днів",
    support24h7: "Підтримка 24 години 7 днів",
    support_normal: "Підтримка робочого часу",
    original_guarantee: "Оригінальна гарантія",
    cod_payment: "Підтримка при доставці",

    pros: "Плюси",
    cons: "Мінуси",

    external_link: "Детальніше",
    notifications: {
      congratulation: "Вітаю",
      waiting_list_add_success:
        "Ми повідомимо вас, коли цей продукт буде виставлено на аукціон.",
      waiting_list_delete_success: "Ви вийшли зі списку очікування аукціону.",
    },

    offer_message: "Купіть {min_quantity} Отримайте знижку {percent}% на ці товари",
    up_to: "До {per_order} одиниць на замовлення",
    get_free: "ЗВІЛЬНЯТИСЯ",
    get_off: "Отримайте знижку {percent}%.",
    select_a_vendor_message: "Виберіть постачальника.",
    product_description_header: "Представляємо {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Чекаємо наявності",
    inform_me_when_available: "Чекаєте цього?",
    pay_buy: "Платіть і купуйте",
    quantity: "Рахувати",
    quantity_in_basket: "Товари в кошику",
    count_unit: "шт.",
    remove: "Видалити",
    add_to_basket: "Додати в кошик",
    buy: "Купуйте",
    subscribe_now: "Підпишись зараз",
    unsubscribe: "Відписатися",
    select_a_subscription_plan: "Спочатку виберіть тарифний план!",
    manage_subscriptions: "Керуйте підписками",
    notifications: {
      inform_add_success: "Ми повідомимо вас, коли він буде доступний.",
      inform_remove_success: "Вас вилучили зі списку очікування.",
    },
    zip_pin_input: "Поштовий індекс / PIN",
    zip_pin_not_available_msg: "Недоступно в цьому місці!",
    zip_pin_placeholder: "Виберіть поштовий індекс/PIN-код...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Огляд",
    spec: "Специфікація",
    comments: "Коментарі",
    price: "Ціна",
    rate: "Оцінити",
    comment: "Коментар",
    warranty: "Гарантія",
    return_policy: "Політика повернення",
    guide: "Гід",
    shipping: "Доставка",
    related_products_title: "Супутні товари",
    related_categories_title: "Відкрийте для себе в колекціях",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Історія замовлень",
      profile: "Мій профіль",
      favorites: "Улюблені предмети",
      gift_cards: "Подарункові карти",
      return_requests: "Повернені замовлення",
      basket: "Магазинний візок",
    },
    user_menu: {
      my_shops: "Мої магазини",
      go_to_admin: "Керувати {shop_name}",
      exit_from: "Вийти з {shop_name}",
      chips: "{chips} Фішки",
    },
    login_to_shop: "Увійдіть у магазин",
    login_to_shop_short: "увійти",
    item_in_basket_message: "{count} Цей товар у вашому кошику.",
    search_title: "Шукати в магазині {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Кошик",
    basket_is_empty: "Ваш кошик порожній.",
    total_price: "Всього",
    view_basket: "Ваш кошик",
    more: "Більше...",
    accept_and_pay: "Перевіряти",
    items: "Елемент(и)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Відхилено",
    table: {
      code: "Код замовлення",
      reserved: "Дата",
      delivery_state: "Статус доставки",
      price: "Загальна сума",
      status: "Статус платежу",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Код замовлення",
      items: "Предмети",
      reserved: "Дата",
      delivery_state: "Останній статус",
      price: "Загальна сума",
      status: "Статус платежу",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Подарункова картка",
      comments: "Коментарі",
      favorites: "Вибране",
      return_requests: "Повертає",
      addresses: "Адреси",
      profile: "профіль",
      orders: "Замовлення",
      wallets: "Гаманці",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Мої гаманці",
    subtitle: "Якщо ви відповідаєте умовам і програма кешбеку активна, частину суми замовлення буде зараховано до вашого гаманця. Ви можете використати ці кошти під час наступної покупки."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Баланс мого гаманця",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Замовити",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "оплата",
      payment_waiting: "Очікування оплати",
      payment_completed: "Оплачено",
      table: {
        title: "Назва",
        amount: "Сума",
        description: "Опис",
      },
      total_payment: "Виплачувана сума",
      discount: "Знижка",
      discount_code: "Код на знижку",
      delivery_fee: "Вартість доставки",
      delivery_fee_after: "Доставка не оплачена",

      total_price: "Загальна ціна предметів",
      total_items_discount: "Знижка на товари",
      total_price_after_offers: "Всього після застосування пропозицій",
      total_order_price_before_tax: "Загальна ціна без урахування податків",

      buyer_payment: "Сума платежу покупця",

      payment_is_in_require_capture_message:
        "Ми отримали ваш платіж, але його ще не списано.",
      settle_the_earlier_bill_first: "Спочатку сплатіть попередній рахунок!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Доставка",
      subtitle: "Інформація про покупця",
      confirm_received_action: "Підтвердьте отримання продукту",
      confirm_received_info:
        "Натисніть кнопку підтвердження, якщо ви отримали замовлення. Якщо потрібно, ви зможете подати рекомендацію, якщо отримаєте підтвердження.",
      Recipient: "одержувач",
      bill: "Рахунок-фактура",
      name: "Ім'я",
      tel: "Телефон",
      email: "Електронна пошта",
      country: "Країна",
      state: "держава",
      city: "Місто",
      address: "Адреса",
      building_no: "Номер будівлі",
      unit_no: "Номер одиниці",
      postal_code: "Поштовий індекс",
      description: "Опис",
      order_delivered: "Замовлення доставлено.",
      delivery_time: "Час доставки",
      tracking_code: "Код відстеження",
      tracking_url: "URL для відстеження",

      notifications: {
        confirm_delivery: "Ваше замовлення підтверджено.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Гарантія оригінальності товару",
      return: "Повернення",
      table: {
        product: "Назва продукту",
        count: "Рахувати",
        unit_price: "Ціна за одиницю",
        total_price: "Загальна сума",
        discount: "Знижка",
        final_price: "Остаточна ціна",
        returned: "Повернувся",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Повернення",
    count_input: "Кількість повернених товарів",
    count_input_message: "Скільки предметів ви повертаєте?",
    reason_input: "Причина повернення",
    reason_input_message: "Виберіть причину повернення цього товару.",
    note_input: "Опис",
    note_input_hint: "Опишіть причину повернення..",
    note_input_message:
      "Опишіть причину повернення цього товару, якщо це необхідно.",
    media_message:
      "Сюди можна завантажити зображення, аудіо чи відео продукту, щоб отримати кращу підтримку інформації про статус продукту. Вибір файлу буде автоматично надіслано та підтверджено.",
    video: "Відео",
    voice: "Голос",
    add_action: "Відправити запит на повернення",
    notifications: "Ваш запит на повернення успішно зареєстровано.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Замовити",
    info: {
      title: "Придбаний віртуальний продукт",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Моя особиста інформація",
    name: "Ім'я",
    email: "Електронна пошта",
    tel: "тел",
    identity: "Аутентифікація",
    success_kyc: "Перевірений KYC",
    no_kyc: "Без KYC",
    club: "Рівень користувача",
    subscription: "Підписка на новини",
    leave_shop: "Залиште цей магазин і видаліть усіх клієнтів рівня",
    leave_shop_action: "Залишити магазин",
    edit_personal_info: "Редагувати особисту інформацію",
    leave_dialog: {
      title: "Залишити магазин",
      message:
        "Скасування підписки на цей магазин не призведе до видалення інформації про замовлення та записів.",
      action: "Залишати",
    },
    notifications: {
      leave_success: "Залишити магазин",
    },
    club_table: {
      discount: "Знижка",
      limit: "Ліміт",
      currency: "Валюта",
      free_shipping: "Безкоштовна доставка",
    },

    my_profile: {
      title: "Мій профіль",
      subtitle: "Це інформація мого клієнтського профілю для магазину.",
      edit_action: "Редагувати профіль"
    },
    subscribe_status: {
      subscribed: "Я підписаний(-а) на отримання останніх новин і акцій електронною поштою.",
      unsubscribed: "Я не підписаний(-а) на отримання новин або акцій електронною поштою."
    },
    my_club: {
      subtitle: "Мій рівень клубу та його переваги."
    },
    kyc: {
      subtitle: "Це моя глобальна ідентифікаційна інформація."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Магазинний візок",
    total_price: "Загальна кількість",
    shipping: "Вартість доставки",
    free_shipping: "Безкоштовна доставка",
    shipping_not_pay: "Не входить",
    total_discount: "Загальна знижка",
    customer_club: "Член клубу клієнтів",
    customer_club_discount: "Членська знижка",
    final_price: "Остаточна оплата",
    lead_time: "Час підготовки",
    lead_time_unit: "годину",
    receive_time: "Бажаний час доставки",
    select_time: "Виберіть Час доставки",
    no_select_time: "Якнайшвидше",
    transportation_type: "Тип доставки",
    days_input: "Дні доставки",
    days_input_label: "днів",
    days_input_no_data: "Виберіть принаймні один день",
    time_input: "Час доставки",
    time_input_label: "Доставка о",
    time_input_label_no_data: "Виберіть принаймні один інтервал часу",
    support_cod: "Наложеним платежем",
    not_support_cod: "Неможливо оплатити місцево!",
    final_confirm_action: "Остаточне підтвердження замовлення",
    pay_and_complete_action: "Платити зараз",
    pre_confirm_service: "Подати запит",
    cross_selling_discount: "Колекція знижка",

    errors: {
      no_address: "Виберіть адресу, на яку потрібно відправити ваше замовлення.",
      no_phone: "Введіть контактний номер для узгодження отримання товару.",
      select_billing_country: "Виберіть країну для виставлення рахунку",
      select_billing_state: "Виберіть податковий регіон",
    },
    same_billing_address: "Платіжна інформація така ж, як інформація одержувача",
    same_billing_address_desc:
      "Платіжна адреса збігається з адресою доставки.",
    custom_billing_info: "Різна платіжна інформація",
    custom_billing_info_desc:
      "Ви можете ввести свій податковий номер і встановити іншу адресу для виставлення рахунку.",
    basket_empty: "Кошик порожній",
    extra_shipping_count: "Ви отримаєте {count} пакетів.",
    select_location_error:
      "Знайдіть на карті місце отримання відправлення та натисніть на індикатор в середині карти, щоб визначити точну адресу одержувача.",

    billing_business_desc: "Це бізнес-акаунт із податковим номером.",
    billing_personal_desc: "Це особистий рахунок.",

    no_billing_title: "Без виставлення рахунків",
    no_billing_desc: "Залиште платіжну адресу пустою.",

    can_pay_cod_message:"Ви можете оплатити це замовлення готівкою під час доставки.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "шт.",
    lead_unit: "годину",
    count_input: "Рахувати",

    price_changed: "Ціна змінилася. нова ціна:",
    offer: "Отримайте {count} товар(и) зі знижкою {percent}%.",
    offer_free: "Отримайте {count} безкоштовно",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Мої адреси",
    subtitle:"Переглядайте збережені адреси тут і легко додавайте нову.",
    new_action: "Нова адреса",
    receiver: "Отримувач",
    address: "Адреса",
    building_no: "номерний знак",
    building_unit: "одиниця",
    postcode: "Поштовий індекс",
    tel: "тел",
    description: "Примітка",

    map: {
      title: "Мої адреси",
      confirm: "Адресна реєстрація",
      address_type: "Адреса",
      receptor_type: "одержувач",
    },
    add_dialog: {
      title: "Нова назва адреси",
      message: "Введіть назву для нової адреси.",
      address_name_input: "Адреса (обов'язково)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Запити на повернення",
    subtitle:"Переглядайте свої запити на повернення тут. Для товарів із політикою повернення можна подати запит на сторінці замовлення.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Список бажань",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Мої коментарі",
    first_post: "Перший пост",
    last_edit: "Останнє редагування",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Мої подарункові карти",
    add_action: "Додати картку",
    add_card_dialog: {
      title: "Додати подарункову картку",
      message:
        "Введіть номер картки та код безпеки. Подарункова карта буде додана до вашого облікового запису.",
      card_number_input: "Номер картки",
      info: "Примітка: при покупці в магазині вам буде показано можливість оплати подарунковими картками. Якщо вибрати цю опцію, сума вашого балансу поповнення буде вирахована із суми замовлення.",
      add_action: "Реєстрація картки",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Порівняти продукт",
    action_button: "Порівняйте",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Жодного продукту не було додано до списку порівняння.",
      price: "Ціна",
      type: "Тип",
      brand: "Бренд",
      warranty: "Гарантія",
      variants_comparison: "Порівняйте варіанти товару",
      spec: "Технічні характеристики",
      pros: "Плюси",
      cons: "Мінуси",
      user_review: "Коментарі користувачів",
      rating: "Рейтинг",
      rating_count: "Кількість оглядів",
      info: "Ви можете поділитися цією таблицею порівняння продуктів зі своїми друзями, надіславши наступне посилання, або отримати доступ до неї пізніше, зберігши це посилання.",
      copy_action: "Копіювати посилання на порівняння",
      check_list: ["Так", "Має"],
      cross_list: ["Ні", "Не має"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Тільки оригінали",
    only_has_discount: "Тільки зі знижкою",
    price_range: "Діапазон цін",
    brands: "Бренд",
    main_shop_page: "Головна сторінка магазину",
    home: "Додому",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Шановний {user}, Ви придбали цей продукт. Що ви думаєте про цей продукт?",
    notification: {
      title: "Вітаю",
      message: "Ваш коментар записано.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Блог",
    add_new_blog: "Новий блог",
    popular: "Популярний",
    topics: "Теми",
    suggestions: "Пропозиції",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Про нас",
    terms: "Умови використання",
    privacy: "Політика конфіденційності",
    contact_us: "Зв'яжіться з нами",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Форма зв'язку з нами",
    name: "Ім'я",
    email: "Електронна пошта",
    phone: "Телефон",
    message: "повідомлення",
    notifications: {
      success: "Ваше повідомлення було відправлене.",
    },
    submitted_title: "Дякуємо, що звернулися до нас!",
    submitted_message:
      "Ми цінуємо час, який ви приділили нам. Ваше повідомлення отримано, наша команда зараз розглядає його. Ми відповімо якомога швидше та дякуємо за ваше терпіння протягом цього часу. Ваш інтерес і відгуки важливі для нас, і ми прагнемо надати вам найкращу підтримку.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Підтвердження платежу",
      payment_success: "Оплата завершена.",
      buy_title: "Купуйте",
      pay_by_giftcards: "Ваше замовлення було оплачено подарунковою карткою.",
      free_order: "Ваше замовлення безкоштовне.",
      pay_by_cod: "Ваше замовлення додано як накладений платіж.",
      pay_by_dir:
        "Ваше замовлення успішно додано. Тепер ви можете оплатити прямим грошовим переказом, а потім завантажити квитанцію про оплату на сторінці замовлення.",
      pay_title: "оплата",
      qr_code_payment: "Створено адресу платіжного QR коду.",
      connecting_to_online_gateway: "Підключення до шлюзу онлайн-платежів.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Залишилося до початку",
    title_between_start_end: "Залишився до кінця",
    title_after_end: "Готово",
    title_no_start_end: "Без періоду часу!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "За одне замовлення ви можете отримати один подарунок.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Код купона",
    add_coupon: "Додати купон",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Форма авокадо не ввімкнена!",
    last_update: "Останнє оновлення:",
    step1:
      "1. Введіть назву та деталі товару, який хочете замовити, і натисніть кнопку Додати.",
    title_plc: "Введіть назву товару.",
    description_plc: "У вас є більше описів продуктів?",
    link_plc: "У вас є посилання на продукт?",
    image: "Зображення продукту",
    image_msg: "При необхідності ви можете надіслати зображення товару.",
    add_item: "Додати елемент",
    items_list: "Список запитуваних продуктів",
    currency_msg: "Ви повинні оплатити суму цього замовлення в цій валюті.",
    step2:
      "2. Після додавання всіх бажаних елементів натисніть кнопку запиту на перегляд замовлення. На цьому етапі ми розглянемо замовлення та повідомимо вам ціну. Натиснувши на це посилання, ви зможете побачити ціну та посилання на оплату.",
    order_action: "Реєстрація замовлення",
    show_all: "Показати все",
    show_accepted: "Показати підтверджені товари",
    last_orders: "Список ваших останніх замовлень",
    pending_status: "розглядається",
    check_now: "Перевірити замовлення",
    add_new_order: "Зробити нове замовлення",
    pay_online: "Оплата онлайн",
    pricing_not_completed_message:
      "Ваше замовлення розглядається. Незабаром ваше замовлення буде розглянуто та вказана вартість, і ви зможете оплатити замовлення.",

    select_address_message:
      "Будь ласка, введіть свою адресу, після чого ви зможете відправити замовлення.",

    delete_item_dialog: {
      title: "Видалити товар з кошика",
      message: "Ви хочете видалити цей товар з кошика?",
      action: "Так, видалити",
    },

    notifications: {
      order_success: "Ваше замовлення успішно розміщено.",
      delete_success: "Елемент видалено.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Створення замовлення",
    message:
      "Створіть список продуктів, які ви хочете купити, відсканувавши код товару.",

    currency_msg: "Валюта, якою ви хочете оплатити.",
    order_action: "оплата",
    add_new_order: "Нове замовлення",
    continue_order: "Продовжити замовлення",

    delete_item_dialog: {
      title: "Видалити товар з кошика",
      message: "Ви хочете видалити цей товар з кошика?",
      action: "Так, видалити",
    },
    notifications: {
      order_success: "Ваше замовлення успішно розміщено.",
      delete_success: "Елемент видалено.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Завантажте зображення квитанції про оплату.",
    upload_payment_receipt_done:
      "✔ Ви вже завантажили зображення квитанції, дочекайтеся нашого затвердження. Якщо вам потрібно змінити, ви можете замінити попереднє зображення на нове.",
    public_form_title: "Інформація про рахунок для переказу грошей",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Список справ",
      message: "Укажіть назви роботи, яку ви хочете виконати, і повідомте покупцеві, як далеко вона просунулася.",
    },
    booking: {
      title: "Бронювання / Бронювання",
      message: "Це замовлення буде оброблено в зазначений час, клієнт вибрав потрібний період, якщо ви хочете внести будь-які зміни у вибраний період, повідомте про це клієнта.",

      selected_checkin: "Вибрана реєстрація клієнтом",
      selected_checkout: "Вибір клієнта",
      change_days_question:
        "Чи потрібно змінити протягом днів, вибраних клієнтом?",
      show_calendar: "Показати календар замовлень",
    },
    pricing: {
      title: "Ціноутворення",
      message: "Скільки ви стягуєте за цю послугу?",
    },
    subscription: {
      title: "Підписка",
      message:
        "Ви можете вибрати період підписки, купуючи цю послугу щодня. Повідомте покупця, якщо ви хочете змінити значення за замовчуванням, які ви вже ввели.",
      duration: "Період підписки",
    },
    charge: {
      title: "Зарядити",
      message:
        "Ви вказали плату за цей товар. Ви можете змінити суму плати за товар, придбаний клієнтом.",
      charge: "Зарядити",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Очікування перевірки доступу...",
    no_access_message:
      "На жаль, ви не маєте доступу до нашого магазину.<br/> Будь ласка, зв'яжіться з нами.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Порядок поділу",
    title: "Поділіться цим замовленням з іншими.",
    message:
      "Це безпечне посилання, діліться ним лише з тими, кого ви знаєте. Кожен, хто має це посилання, може дублювати ваше замовлення та бачити вибрану адресу. Він міститиме інформацію про ваш поточний кошик.",
    valid_period: "Це посилання втратить чинність через 48 годин.",
    import_order_action: "Імпорт замовлення",
    retrieve_dialog_title: "Отримати зовнішнє замовлення",
    address_included: "Поділитися товарами в кошику + Адреса",
    address_excluded: "Поділіться лише елементами кошика",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Ціни",
    inventory: "Інвентаризація",
    discount: "Знижка",
  },

  rating: {
    product_rating_message:
      "Цей продукт отримав оцінку {rate} із 5 зірок і оцінили {rate_count} людей.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Досліджуйте!",
      same_tags_subtitle: "Знайдіть більше цікавих пов’язаних предметів.",
      same_category_subtitle: "Знайдіть більше чудових предметів у цій категорії.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Замовте {product} разом із",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Переглянути магазин {vendor}",
  },

  login: {
    welcome: "Ласкаво просимо",
  },


};
