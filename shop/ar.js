export default {
  /** @see ProductRatingView **/
  surveys: ["فقير جدا", "فقير", "طبيعي", "حسن", "ممتاز"],


  /** @see ShopFooter **/
  footer: {
    map: "خريطة",
    email: "بريد الالكتروني",
    phone: "هاتف",
    address: "تبوك",

    copyright:
      "استخدام المحتوى فقط للأغراض غير التجارية والإشارة إلى المصدر (رابط بـ {shop_title}). جميع الحقوق محفوظة لـ {shop_title}.",
    powered_by: "مشغل بواسطة",
    privacy: "سياسة خاصة",
    term_of_use: "تعليمات الاستخدام",
    shop_app_setting: "إعداد المتجر واللائحة العامة لحماية البيانات",

    dialog_setting: {
      title: "متجر إعداد التطبيقات",
      app_list: "قائمة التطبيقات",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "نفذ",
    review_unit: "إعادة النظر",
    not_original: "غير اصلية",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "منقي",
    native: {
      title: "تسجيل الدخول للتطبيق",
      message:
        "يتطلب هذا التطبيق الوصول إلى معلومات حساب متجرك. يتضمن ذلك الوصول إلى الاسم ورقم الاتصال والعنوان والبريد الإلكتروني وسجل الطلبات وطلب التعليقات ونشرها على هذا المتجر.",
      message_bold:
        "تأكد من استخدام تطبيق المتجر الرسمي للدخول إلى هذا المتجر.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "صنف حسب",
    title_small: "صنف حسب..",
    nothing: "لا شئ",
    most_views: "معظم وجهات النظر",
    most_likes: "الأكثر شهرة",
    most_recent: "الأحدث",
    most_sell: "أفضل مبيعات",
    cheapest: "أرخص",
    most_expensive: "الأغلى",
    only_available: "متوفرة",
    view_mode: {
      normal: "طبيعي",
      grid: "شبكة",
      list: "قائمة",
      insta: "إنستا",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "مزيف",
    action: "مزاد علني",
    compare_limit: "10 عناصر كحد أقصى",
    compare_add: "أضف للمقارنة",
    compare_be_in_list: "في قائمة المقارنة",

    type: "نوع",
    brand: "ماركة",
    category: "فئة",
    discount: "خصم",
    track_price: "تتبع السعر",
    waiting_for_auction: "تنتظر المزاد؟",
    inform_auction: "أخبرني عن المزاد",
    return_in_days: "{days} يوم عودة الضمان",
    support24h7: "دعم 24 ساعة 7 أيام",
    support_normal: "دعم ساعات العمل",
    original_guarantee: "الضمان الأصلي",
    cod_payment: "نقدا عند التسليم الدعم",

    pros: "الايجابيات",
    cons: "سلبيات",

    external_link: "اقرأ أكثر",
    notifications: {
      congratulation: "تهانينا",
      waiting_list_add_success:
        "سوف نخطرك عندما يتم بيع هذا المنتج بالمزاد.",
      waiting_list_delete_success: "لقد خرجت من قائمة انتظار المزاد.",
    },

    offer_message: "اشترِ {min_quantity} واحصل على خصم {٪}٪ على هذه العناصر",
    up_to: "ما يصل إلى {per_order} x لكل طلب",
    get_free: "تحرر",
    get_off: "احصل على خصم بنسبة {percent}٪",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "في انتظار التوافر",
    inform_me_when_available: "انتظر هذا؟",
    pay_buy: "الدفع والشراء",
    quantity: "عدد",
    quantity_in_basket: "العناصر الموجودة في عربة التسوق",
    count_unit: "x",
    remove: "إزالة",
    add_to_basket: "أضف إلى السلة",
    buy: "يشتري",
    notifications: {
      inform_add_success: "سنخبرك عندما يكون متاحًا.",
      inform_remove_success: "لقد تمت إزالتك من قائمة الانتظار.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "إعادة النظر",
    spec: "المواصفات",
    comments: "تعليقات",
    related_products_title: "منتجات ذات صله",
    price: "السعر",
    rate: "معدل",
    comment: "تعليق",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "تاريخ الطلب",
      profile: "الملف الشخصي",
      favorites: "مفضلتي",
      gift_cards: "بطاقات الهدايا",
      return_requests: "طلبات الإرجاع",
      basket: "عربة التسوق",
    },
    user_menu: {
      my_shops: "متاجري",
      go_to_admin: "إدارة {shop_name}",
      exit_from: "تسجيل الخروج {shop_name}",
      chips: "{رقائق} شيبس",
    },
    login_to_shop: "تسجيل الدخول إلى المتجر",
    login_to_shop_short: "تسجيل الدخول",
    item_in_basket_message: "{عدد} هذا العنصر في سلة التسوق الخاصة بك.",
    search_title: "بحث في المتجر {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "عربة التسوق",
    basket_is_empty: "عربة التسوق فارغة.",
    total_price: "مجموع",
    view_basket: "عرض عربة التسوق",
    more: "أكثر ...",
    accept_and_pay: "الدفع",
    items: "item(s)",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "مرفوض",
    table: {
      code: "رمز الطلب",
      reserved: "تاريخ",
      delivery_state: "حالة التوصيل",
      price: "السعر الكلي",
      status: "حالة السداد",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "رمز الطلب",
      items: "أغراض",
      reserved: "تاريخ",
      delivery_state: "أحدث حالة",
      price: "السعر الكلي",
      status: "حالة السداد",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "كرت هدية",
      comments: "تعليقات",
      favorites: "المفضلة",
      return_requests: "عائدات",
      addresses: "عناوين",
      profile: "الملف الشخصي",
      orders: "الطلب #٪ s",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "طلب",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "دفع",
      payment_waiting: "في انتظار السداد",
      payment_completed: "دفع",
      table: {
        title: "عنوان",
        amount: "مقدار",
        description: "وصف",
      },
      total_payment: "المبلغ المدفوع",
      discount: "خصم",
      discount_code: "الرقم التسلسلي للخصم",
      delivery_fee: "تكلفة الشحن",
      delivery_fee_after: "دفع أي تسليم",

      total_price: "السعر الإجمالي للعناصر ",
      total_items_discount: "خصم الأصناف",
      total_price_after_offers: "السعر الإجمالي بعد تطبيق العروض",

      buyer_payment: "مبلغ الدفع للمشتري",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "توصيل",
      subtitle: "معلومات المشتري",
      confirm_received_action: "تأكيد استلام المنتج",
      confirm_received_info:
        "انقر فوق زر التأكيد إذا تلقيت الطلب. إذا لزم الأمر ، ستتمكن من إرسال إحالة إذا تلقيت تأكيدًا. ",
      receiver: "المتلقي",
      bill: "المتلقي",
      name: "اسم",
      tel: "هاتف",
      email: "بريد الالكتروني",
      country: "دولة",
      state: "ولاية",
      city: "مدينة",
      address: "تبوك",
      building_no: "رقم المبنى",
      unit_no: "رقم الوحدة",
      postal_code: "الرمز البريدي",
      description: "وصف",
      order_delivered: "تم تسليم الطلب.",
      delivery_time: "موعد التسليم",
      tracking_code: "شفرة التتبع",
      tracking_url: "تتبع Url",

      notifications: {
        confirm_delivery: "تمت الموافقة على طلبك.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "ضمان أصالة البضاعة",
      return: "يعود",
      table: {
        product: "اسم المنتج",
        count: "عدد",
        unit_price: "سعر الوحدة",
        total_price: "السعر الكلي",
        discount: "خصم",
        final_price: "السعر النهائي",
        returned: "عاد",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "يعود",
    count_input: "عدد العناصر التي تم إرجاعها",
    count_input_message: "كم عدت؟",
    reason_input: "سبب العودة",
    reason_input_message: "حدد سبب إعادة هذا العنصر.",
    note_input: "وصف",
    note_input_hint: "صف سبب المرجع ..",
    note_input_message:
      "صف سبب إحالة هذا العنصر إذا لزم الأمر.",
    media_message:
      "يمكنك تحميل صورة أو صوت أو فيديو للمنتج هنا للحصول على دعم أفضل لمعلومات حالة المنتج. سيؤدي تحديد الملف إلى الإرسال والتأكيد تلقائيًا. ",
    video: "فيديو",
    voice: "صوت",
    add_action: "إرسال طلب العودة",
    notifications: "تم تسجيل طلب الإحالة الخاص بك بنجاح.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "طلب",
    info: {
      title: "منتج افتراضي تم شراؤه",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "معلوماتي الشخصية",
    name: "اسم",
    email: "بريد الالكتروني",
    tel: "هاتف",
    identity: "المصادقة",
    success_kyc: "KYC المعتمد",
    club: "مستوى المستخدم",
    subscription: "الاشتراك في الأخبار",
    leave_shop: "اترك هذا المتجر وقم بإزالة مستوى جميع العملاء",
    leave_shop_action: "اترك المحل",
    leave_dialog: {
      title: "اترك المحل",
      message:
        "لن يؤدي إلغاء الاشتراك في هذا المتجر إلى حذف معلومات الطلب والسجلات.",
      action: "يترك",
    },
    notifications: {
      leave_success: "اترك المحل",
    },
    club_table: {
      discount: "خصم",
      limit: "حد",
      currency: "عملة",
      free_shipping: "الشحن مجانا",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "عربة التسوق",
    total_price: "المبلغ الإجمالي",
    shipping: "تكلفة الشحن",
    free_shipping: "الشحن مجانا",
    shipping_not_pay: "غير مشمول",
    total_discount: "إجمالي الخصم",
    customer_club: "عضو نادي العميل",
    customer_club_discount: "خصم الأعضاء",
    final_price: "الدفعة الأخيرة",
    lead_time: "وقت التحضير",
    lead_time_unit: "ساعة",
    receive_time: "حان وقت الاستلام",
    select_time: "حدد وقت التسليم",
    no_select_time: "أرسل متى كنت جاهزًا.",
    transportation_type: "نوع السيارة",
    days_input: "أيام التسليم",
    days_input_label: "أيام",
    days_input_no_data: "حدد يوم واحد على الأقل",
    time_input: "موعد التسليم",
    time_input_label: "التسليم في",
    time_input_label_no_data: "حدد فترة زمنية واحدة على الأقل",
    support_cod: "الدفع عند الاستلام",
    not_support_cod: "غير قادر على الدفع محليًا!",
    final_confirm_action: "تأكيد الطلب النهائي",
    pay_and_complete_action: "ادفع الآن",
    pre_confirm_service: "تقديم الطلب",

    errors: {
      no_address: "حدد العنوان الذي تريد شحن طلبك إليه.",
      no_phone: "أدخل رقم جهة اتصال لتنسيق استلام البضائع.",
      select_billing_country: "حدد بلد الفوترة",
      select_billing_state: "حدد منطقتك الضريبية",
    },
    same_billing_address: "معلومات الفواتير هي نفسها معلومات المستلم",
    custom_billing_info: "معلومات الفواتير المختلفة",
    basket_empty: "السلة فارغة",
    extra_shipping_count: "سوف تتلقى {عدد} حزم.",
    select_location_error:
      "ابحث عن مكان استلام الشحنة على الخريطة وانقر على المؤشر في منتصف الخريطة لتحديد العنوان الدقيق للمستلم.",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "ساعة",
    count_input: "عدد",

    price_changed: "تغير السعر. سعر جديد:",
    offer: "احصل على {count}x عنصر من قبل {percent}% إيقاف",
    offer_free: "Get {count}x free",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "عناويني",
    new_action: "عناويني",
    receiver: "عنوان جديد",
    address: "تبوك",
    building_no: "لوحة ترخيص",
    building_unit: "وحدة",
    postcode: "الرمز البريدي",
    tel: "هاتف",
    description: "ملحوظة",

    map: {
      title: "عناويني",
      confirm: "تسجيل العنوان",
      address_type: "تبوك",
      receptor_type: "المتلقي",
    },
    add_dialog: {
      title: "اسم العنوان الجديد",
      message: "أدخل عنوانًا لعنوان جديد.",
      address_name_input: "تبوك (required)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "طلبات الإرجاع",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "قائمة الرغبات",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "تعليقاتي",
    first_post: "أول منشور",
    last_edit: "آخر تعديل",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "بطاقات الهدايا الخاصة بي",
    add_action: "إضافة بطاقة",
    add_card_dialog: {
      title: "أضف بطاقة هدية",
      message:
        "أدخل رقم البطاقة ورمز الحماية. ستتم إضافة بطاقة هدية إلى حسابك.",
      card_number_input: "رقم البطاقة",
      info: "ملاحظة: عند الشراء من المتجر ، سيظهر لك خيار الدفع ببطاقات الهدايا. بتحديد هذا الخيار ، سيتم خصم مبلغ رصيد إعادة الشحن من مبلغ الطلب. ",
      add_action: "تسجيل البطاقة",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "مقارنة المنتج",
    action_button: "يقارن",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "لم يتم إضافة أي منتجات إلى قائمة المقارنة.",
      price: "السعر",
      type: "نوع",
      brand: "ماركة",
      warranty: "ضمان",
      variants_comparison: "قارن تنوع المنتج",
      spec: "المواصفات الفنية",
      pros: "الايجابيات",
      cons: "سلبيات",
      user_review: "تعليقات المستخدم",
      rating: "تقييم",
      rating_count: "عدد المراجعات",
      info: "يمكنك مشاركة جدول مقارنة المنتج هذا مع أصدقائك عن طريق إرسال الرابط التالي ، أو الوصول إليه لاحقًا عن طريق حفظ هذا الارتباط.",
      copy_action: "انسخ ارتباط المقارنة",
      check_list: ["نعم", "لديه"],
      cross_list: ["رقم", "لم يفعل"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "أصول فقط",
    only_has_discount: "فقط مخفضة",
    price_range: "نطاق السعر",
    brands: "ماركة",
    main_shop_page: "صفحة المتجر الرئيسية",
    home: "مسكن",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "عزيزي {user} ، لقد اشتريت هذا المنتج. ما رأيك في هذا المنتج؟",
    notification: {
      title: "تهنئة",
      message: "تم تسجيل تعليقك.",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "مدونة",
    add_new_blog: "مدونة جديدة",
    popular: "شائع",
    topics: "المواضيع",
    suggestions: "اقتراحات",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "معلومات عنا",
    terms: "تعليمات الاستخدام",
    privacy: "سياسة خاصة",
    contact_us: "اتصل بنا",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "نموذج الاتصال بنا",
    name: "اسم",
    email: "بريد الالكتروني",
    phone: "هاتف",
    message: "رسالة",
    notifications: {
      success: "تم ارسال رسالتك.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "تأكيد الدفعة",
      payment_success: "تم التسديد.",
      buy_title: "يشتري",
      pay_by_giftcards: "تم دفع طلبك ببطاقة هدايا.",
      free_order: "طلبك مجاني.",
      pay_by_cod: "تمت إضافة طلبك نقدًا عند التسليم.",
      pay_by_dir:
        "تمت إضافة طلبك بنجاح. يمكنك الآن الدفع عن طريق التحويل المباشر للأموال ثم تحميل إيصال الدفع في صفحة الطلب.",
      pay_title: "دفع",
      qr_code_payment: "تم إنشاء عنوان رمز الاستجابة السريعة للدفع.",
      connecting_to_online_gateway: "الاتصال ببوابة الدفع عبر الإنترنت.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "المتبقي حتى البداية",
    title_between_start_end: "المتبقي حتى النهاية",
    title_after_end: "تم الانتهاء من",
    title_no_start_end: "بدون فترة!",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "يمكنك الحصول على هدية واحدة لكل طلب.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "رمز الكوبون",
    add_coupon: "أضف عرض",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "لم يتم تمكين شكل الأفوكادو!",
    last_update: "اخر تحديث:",
    step1:
      "1. أدخل اسم وتفاصيل المنتج الذي تريد طلبه وانقر فوق الزر إضافة.",
    title_plc: "أدخل اسم المنتج.",
    description_plc: "هل لديك المزيد من أوصاف المنتجات؟",
    link_plc: "هل لديك رابط للمنتج؟",
    image: "صورة المنتج",
    image_msg: "يمكنك إرسال صورة المنتج إذا لزم الأمر.",
    add_item: "اضافة عنصر",
    items_list: "قائمة المنتجات المطلوبة",
    currency_msg: "يجب عليك دفع مبلغ هذا الطلب بهذه العملة.",
    step2:
      "2. بعد إضافة جميع العناصر المطلوبة ، انقر فوق زر طلب مراجعة الطلب. في هذه المرحلة ، سنراجع الطلب ونعلمك بالسعر. من خلال النقر على هذا الرابط ، ستتمكن من رؤية السعر ورابط الدفع.",
    order_action: "طلب التسجيل",
    show_all: "عرض الكل",
    show_accepted: "إظهار العناصر التي تم التحقق منها",
    last_orders: "قائمة بأحدث طلباتك",
    pending_status: "قيد المراجعة",
    check_now: "تحقق من الطلب",
    add_new_order: "تسجيل طلب جديد",
    pay_online: "ادفع عبر الإنترنت",
    pricing_not_completed_message:
      "طلبك قيد المراجعة. ستتم مراجعة طلبك وتسعيره قريبًا وستتمكن من دفع الطلب.",

    delete_item_dialog: {
      title: "إزالة العنصر من عربة التسوق",
      message: "هل تريد حذف هذا العنصر من سلة التسوق؟",
      action: "نعم ، احذف",
    },

    notifications: {
      order_success: "تم وضع طلبك بنجاح.",
      delete_success: "تم حذف العنصر.",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "طلب إنشاء",
    message:
      "قم بإنشاء قائمة المنتجات التي ترغب في شرائها عن طريق مسح رمز المنتج ضوئيًا.",

    currency_msg: "العملة التي تريد الدفع بها.",
    order_action: "دفع",
    add_new_order: "طلب جديد",
    continue_order: "متابعة الطلب",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "قم بتحميل صورة إيصال الدفع.",
    upload_payment_receipt_done:
      "✔ لقد قمت بالفعل بتحميل صورة الإيصال ، انتظر موافقتنا. إذا كنت بحاجة إلى التغيير ، يمكنك استبدال الصورة السابقة بصورة جديدة.",
    public_form_title: "معلومات الحساب لتحويل الأموال",
  },
};
