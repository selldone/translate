export default {
  /** @see ProductRatingView **/
  surveys: ["Очень плохо", "Плохо", "Нормально", "Хорошо", "Отлично"],


  /** @see ShopFooter **/
  footer: {
    map: "карта",
    email: "Эл. адрес",
    phone: "Телефон",
    address: "Адрес",

    copyright:
      "Использование контента только в некоммерческих целях и со ссылкой на источник (ссылка с {shop_title}). Все права защищены на {shop_title}. ",
    powered_by: "Питаться от",
    privacy: "Политика конфиденциальности",
    term_of_use: "Условия эксплуатации",
    shop_app_setting: "Настройки магазина и GDPR ",

    dialog_setting: {
      title: "Настройка приложений магазина",
      app_list: "Список приложений",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Распроданный",
    review_unit: "рассмотрение",
    not_original: "Не оригинальная",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Фильтр",
    native: {
      title: "Вход в приложение",
      message:
        "Это приложение требует доступа к информации вашей учетной записи в магазине. Это включает в себя доступ к имени, контактному номеру, адресу, электронной почте, истории заказов, оформлению заказов и размещению комментариев в этом магазине.",
      message_bold:
        "Обязательно используйте официальное приложение магазина, чтобы войти в этот магазин.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Сортировать по",
    title_small: "Сортировать по..",
    nothing: "Ничего такого",
    most_views: "Большинство просмотров",
    most_likes: "Самый популярный",
    most_recent: "Новейшие",
    most_sell: "Бестселлер",
    cheapest: "Самый дешевый",
    most_expensive: "Самый дорогой",
    only_available: "Доступный",
    view_mode: {
      normal: "Обычный",
      grid: "Сетка",
      list: "Список",
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Не настоящие",
    action: "Аукцион",
    compare_limit: "Не более 10 предметов",
    compare_add: "Добавить к сравнению",
    compare_be_in_list: "В списке сравнения",

    type: "Тип",
    brand: "Марка",
    category: "Категория",
    discount: "Скидка",
    track_price: "Следить за ценой",
    waiting_for_auction: "Ждете аукциона?",
    inform_auction: "Расскажи мне об аукционе",
    return_in_days: "{days} дней гарантийного возврата",
    support24h7: "Поддержка 24 часа 7 дней",
    support_normal: "Поддержка в рабочее время",
    original_guarantee: "Оригинальная гарантия",
    cod_payment: "Поддержка наложенным платежом",

    pros: "Плюсы",
    cons: "Минусы",

    external_link: "Подробнее",
    notifications: {
      congratulation: "Поздравления",
      waiting_list_add_success:
        "Мы сообщим вам, когда этот товар будет продан на аукционе.",
      waiting_list_delete_success: "Вы вышли из списка ожидания аукциона.",
    },

    offer_message: "Купите {min_quantity} и получите скидку {percent}% на эти товары",
    up_to: "До {per_order} x на заказ",
    get_free: "ПОЛУЧИТЬ БЕСПЛАТНО",
    get_off: "ПОЛУЧИТЕ СКИДКУ {%}",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "В ожидании доступности",
    inform_me_when_available: "Ждете этого?",
    pay_buy: "Оплатить и купить",
    quantity: "Считать",
    quantity_in_basket: "Товары в корзине",
    count_unit: "Икс",
    remove: "Удалять",
    add_to_basket: "Добавить в корзину",
    buy: "Купить",
    notifications: {
      inform_add_success: "Мы сообщим вам, когда он станет доступен.",
      inform_remove_success: "Вас исключили из списка ожидания.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Рассмотрение",
    spec: "Спецификация",
    comments: "Комментарии",
    related_products_title: "Сопутствующие товары",
    price: "Цена",
    rate: "Темп",
    comment: "комментарий",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "История заказов",
      profile: "Профиль",
      favorites: "Мои любимые",
      gift_cards: "Подарочные карты",
      return_requests: "Запросы на возврат",
      basket: "Корзина покупателя",
    },
    user_menu: {
      my_shops: "Мои магазины",
      go_to_admin: "Управлять {shop_name}",
      exit_from: "Выйти из аккаунта {shop_name}",
      chips: "{фишки} чипсы",
    },
    login_to_shop: "Войти в магазин",
    login_to_shop_short: "авторизоваться",
    item_in_basket_message: "{count} Этот товар находится в вашей корзине.",
    search_title: "Искать в магазине {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Корзина",
    basket_is_empty: "Ваша корзина пуста.",
    total_price: "Общий",
    view_basket: "Просмотр корзины",
    more: "Более ...",
    accept_and_pay: "Проверить",
    items: "Предметы)",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Отклоненный",
    table: {
      code: "Код заказа",
      reserved: "Дата",
      delivery_state: "О состоянии доставки",
      price: "Итоговая цена",
      status: "Статус платежа",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "Код заказа",
      items: "Предметы",
      reserved: "Дата",
      delivery_state: "Последний статус",
      price: "Итоговая цена",
      status: "Статус платежа",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Подарочная карта",
      comments: "Комментарии",
      favorites: "Избранное",
      return_requests: "Возврат",
      addresses: "Адреса",
      profile: "профиль",
      orders: "Заказы",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "порядок",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Оплата",
      payment_waiting: "ожидается платеж",
      payment_completed: "Оплаченный",
      table: {
        title: "Заголовок",
        amount: "Количество",
        description: "Описание",
      },
      total_payment: "Оплаченная сумма",
      discount: "Скидка",
      discount_code: "Код скидки",
      delivery_fee: "Стоимость доставки",
      delivery_fee_after: "Доставка не оплачена",

      total_price: "Общая стоимость товаров",
      total_items_discount: "Скидка на товары",
      total_price_after_offers: "Общая цена после применения предложений",

      buyer_payment: "Сумма платежа покупателя",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Доставка",
      subtitle: "Информация о покупателе",
      confirm_received_action: "Подтвердите получение продукта",
      confirm_received_info:
        "Нажмите кнопку подтверждения, если вы получили заказ. При необходимости вы сможете отправить направление, если получите подтверждение.",
      receiver: "Получатель",
      bill: "Счет",
      name: "Имя",
      tel: "Телефон",
      email: "Эл. адрес",
      country: "Страна",
      state: "Состояние",
      city: "Город",
      address: "Адрес",
      building_no: "Номер здания",
      unit_no: "Номер установки",
      postal_code: "Почтовый индекс",
      description: "Описание",
      order_delivered: "Заказ доставлен.",
      delivery_time: "Срок поставки",
      tracking_code: "Код отслеживания",
      tracking_url: "URL отслеживания",

      notifications: {
        confirm_delivery: "Ваш заказ был одобрен.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Гарантия оригинальности товара",
      return: "Возвращение",
      table: {
        product: "наименование товара",
        count: "Считать",
        unit_price: "Цена за единицу",
        total_price: "Итоговая цена",
        discount: "Скидка",
        final_price: "Окончательная цена",
        returned: "Вернулся",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Возвращение",
    count_input: "Количество возвращенных товаров",
    count_input_message: "Сколько вы вернетесь?",
    reason_input: "Причина возврата",
    reason_input_message: "Выберите причину возврата этого товара.",
    note_input: "Описание",
    note_input_hint: "Опишите причину обращения ..",
    note_input_message:
      "При необходимости опишите причину обращения к этому элементу.",
    media_message:
      "Вы можете загрузить сюда изображение, аудио или видео продукта, чтобы получить более качественную поддержку информации о статусе продукта. Выбор файла будет автоматически отправлен и подтвержден.",
    video: "видео",
    voice: "Голос",
    add_action: "Отправить запрос на возврат",
    notifications: "Ваш реферальный запрос был успешно зарегистрирован.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "порядок",
    info: {
      title: "Приобретенный виртуальный продукт",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Моя личная информация",
    name: "Имя",
    email: "Эл. адрес",
    tel: "Тел.",
    identity: "Аутентификация",
    success_kyc: "Утвержденный KYC",
    club: "Уровень пользователя",
    subscription: "Подписка на новости",
    leave_shop: "Покиньте этот магазин и удалите всех клиентов уровня",
    leave_shop_action: "Покинуть магазин",
    leave_dialog: {
      title: "Покинуть магазин",
      message:
        "Отказ от подписки на этот магазин не приведет к удалению информации и записей о вашем заказе.",
      action: "Оставлять",
    },
    notifications: {
      leave_success: "Покинуть магазин",
    },
    club_table: {
      discount: "Скидка",
      limit: "Предел",
      currency: "Валюта",
      free_shipping: "Бесплатная доставка",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "Корзина покупателя",
    total_price: "Итого",
    shipping: "Стоимость доставки",
    free_shipping: "Бесплатная доставка",
    shipping_not_pay: "Не включено",
    total_discount: "Общая скидка",
    customer_club: "Член Клуба клиентов",
    customer_club_discount: "Скидка для участников",
    final_price: "Последний платеж",
    lead_time: "Время подготовки",
    lead_time_unit: "час",
    receive_time: "Время получать",
    select_time: "Выберите время доставки",
    no_select_time: "Отправьте, когда будете готовы.",
    transportation_type: "тип транспортного средства",
    days_input: "Дней доставки",
    days_input_label: "Дни",
    days_input_no_data: "Выберите хотя бы один день",
    time_input: "Срок поставки",
    time_input_label: "Доставка в",
    time_input_label_no_data: "Выберите хотя бы один временной интервал",
    support_cod: "Оплата при доставке",
    not_support_cod: "Невозможно оплатить на месте!",
    final_confirm_action: "Окончательное подтверждение заказа",
    pay_and_complete_action: "Заплатить сейчас",
    pre_confirm_service: "Отправить запрос",

    errors: {
      no_address: "Выберите адрес, на который хотите отправить заказ.",
      no_phone: "Введите контактный телефон для согласования получения товара.",
      select_billing_country: "Выберите страну вашего платежного адреса",
      select_billing_state: "Выберите свой налоговый регион",
    },
    same_billing_address: "Платежная информация такая же, как и информация о получателе",
    custom_billing_info: "Другая информация для выставления счетов",
    basket_empty: "Корзина пуста",
    extra_shipping_count: "Вы получите {count} пакетов.",
    select_location_error:
      "Найдите на карте место получения отправления и нажмите на индикатор посередине карты, чтобы определить точный адрес получателя.",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "Икс",
    lead_unit: "час",
    count_input: "Считать",

    price_changed: "Цена изменилась. новая цена:",
    offer: "Получите {count} x товар со скидкой {percent}%",
    offer_free: "Получите {count} x бесплатно",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "Мои Адреса",
    new_action: "Новый адрес",
    receiver: "Получатель",
    address: "Адрес",
    building_no: "Номерной знак",
    building_unit: "Ед. изм",
    postcode: "Почтовый индекс",
    tel: "Тел.",
    description: "Примечание",

    map: {
      title: "Мои Адреса",
      confirm: "Регистрация адреса",
      address_type: "Адрес",
      receptor_type: "Получатель",
    },
    add_dialog: {
      title: "Имя нового адреса",
      message: "Введите заголовок для нового адреса.",
      address_name_input: "Адрес (обязательно)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "Запросы на возврат",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "Список желаний",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Мои комментарии",
    first_post: "Первый пост",
    last_edit: "Последнее редактирование",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Мои подарочные карты",
    add_action: "Добавить карту",
    add_card_dialog: {
      title: "Добавить подарочную карту",
      message:
        "Введите номер карты и защитный код. Подарочная карта будет добавлена к вашему счету.",
      card_number_input: "номер карты",
      info: "Примечание. При покупке в магазине вам будет предложена возможность оплаты подарочными картами. При выборе этой опции сумма вашего пополнения баланса будет вычтена из суммы заказа.",
      add_action: "Регистрация карты",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Сравнение продуктов",
    action_button: "сравнивать",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "В список сравнения не было добавлено ни одного товара.",
      price: "Цена",
      type: "Тип",
      brand: "Марка",
      warranty: "Гарантия",
      variants_comparison: "Сравните разнообразие продуктов",
      spec: "Технические характеристики",
      pros: "Плюсы",
      cons: "Минусы",
      user_review: "Комментарии пользователей",
      rating: "Рейтинг",
      rating_count: "Количество отзывов",
      info: "Вы можете поделиться этой таблицей сравнения продуктов с друзьями, отправив следующую ссылку, или получить к ней доступ позже, сохранив эту ссылку.",
      copy_action: "Копировать ссылку для сравнения",
      check_list: ["да", "Имеет"],
      cross_list: ["Нет", "Не имеет"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Только оригиналы",
    only_has_discount: "Только со скидкой",
    price_range: "Ценовой диапазон",
    brands: "Марка",
    main_shop_page: "Главная страница магазина",
    home: "Дом",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Уважаемый {user}, Вы приобрели этот товар. Что вы думаете об этом продукте?",
    notification: {
      title: "Поздравление",
      message: "Ваш комментарий был записан.",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Блог",
    add_new_blog: "Новый блог",
    popular: "Популярный",
    topics: "Темы",
    suggestions: "Предложения",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "О нас",
    terms: "Условия эксплуатации",
    privacy: "Политика конфиденциальности",
    contact_us: "Связаться с нами",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Свяжитесь с нами форма",
    name: "Имя",
    email: "Эл. адрес",
    phone: "Телефон",
    message: "Сообщение",
    notifications: {
      success: "Ваше сообщение отправлено.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Подтверждение об оплате",
      payment_success: "Оплата завершена.",
      buy_title: "Купить",
      pay_by_giftcards: "Ваш заказ был оплачен подарочной картой.",
      free_order: "Ваш заказ бесплатный.",
      pay_by_cod: "Ваш заказ добавлен наложенным платежом.",
      pay_by_dir:
        "Ваш заказ был успешно добавлен. Теперь вы можете произвести оплату прямым денежным переводом, а затем загрузить квитанцию об оплате на странице заказа.",
      pay_title: "Оплата",
      qr_code_payment: "Создан адрес платежного QR-кода.",
      connecting_to_online_gateway: "Подключение к шлюзу онлайн-платежей.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Осталось до начала",
    title_between_start_end: "Остаться до конца",
    title_after_end: "Законченный",
    title_no_start_end: "Без срока!",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Вы можете получить один подарок за один заказ.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Код купона",
    add_coupon: "Добавить купон",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "Форма авокадо не включена!",
    last_update: "Последнее обновление:",
    step1:
      "1. Введите название и сведения о продукте, который вы хотите заказать, и нажмите кнопку «Добавить».",
    title_plc: "Введите название продукта.",
    description_plc: "У вас есть еще описания продуктов?",
    link_plc: "У вас есть ссылка на товар?",
    image: "Изображение продукта",
    image_msg: "При необходимости вы можете отправить изображение товара.",
    add_item: "Добавьте предмет",
    items_list: "Список запрашиваемых продуктов",
    currency_msg: "Вы должны оплатить сумму этого заказа в этой валюте.",
    step2:
      "2. После добавления всех желаемых товаров нажмите кнопку запроса на просмотр заказа. На этом этапе мы рассмотрим заказ и сообщим вам цену. Нажав на эту ссылку, вы увидите ссылку на цену и оплату.",
    order_action: "Оформление заказа",
    show_all: "Показать все",
    show_accepted: "Показать проверенные товары",
    last_orders: "Список ваших последних заказов",
    pending_status: "на рассмотрении",
    check_now: "Проверить заказ",
    add_new_order: "Зарегистрировать новый заказ",
    pay_online: "платить онлайн",
    pricing_not_completed_message:
      "Ваш заказ находится на рассмотрении. Ваш заказ будет вскоре рассмотрен и оценен по цене, и вы сможете оплатить заказ.",

    delete_item_dialog: {
      title: "Удалить товар из корзины покупок",
      message: "Вы хотите удалить этот товар из корзины?",
      action: "Да удалить",
    },

    notifications: {
      order_success: "Ваш заказ был успешно размещен.",
      delete_success: "Товар удален.",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Создание заказа",
    message:
      "Создайте список продуктов, которые вы хотите купить, отсканировав код продукта.",

    currency_msg: "Валюта, в которой вы хотите произвести оплату.",
    order_action: "Оплата",
    add_new_order: "Новый заказ",
    continue_order: "Продолжить заказ",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Загрузите изображение квитанции об оплате.",
    upload_payment_receipt_done:
      "✔ Вы уже загрузили изображение квитанции, ждите нашего одобрения. Если вам нужно изменить, вы можете заменить предыдущее изображение новым.",
    public_form_title: "Информация о счете для перевода денег",
  },
};
