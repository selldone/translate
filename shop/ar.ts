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
  surveys: ["سيء جدا", "سيء", "طبيعي", "جيد", "ممتاز"],

  /** @see SFooterSection **/
  footer: {
    map: "الخريطة",
    email: "البريد الالكتروني",
    phone: "هاتف",
    address: "عنوان",

    copyright:
      "استخدام المحتوى فقط للأغراض غير التجارية والإشارة إلى المصدر (رابط بـ {shop_title}). جميع الحقوق محفوظة لـ {shop_title}.",
    powered_by: "تم بواسطة",
    privacy: "سياسة الخصوصية",
    term_of_use: "ِشروط الاستخدام",
    shop_app_setting: "إعداد المتجر واللائحة العامة لحماية البيانات",

    dialog_setting: {
      title: "متجر إعداد التطبيقات",
      app_list: "قائمة التطبيقات",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "نفذت الكمية",
    review_unit: "مراجعة القطعة",
    not_original: "غير اصلية",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "فلترة",
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
    title: "ترتيب حسب",
    title_small: "ترتيب حسب..",
    nothing: "لا شيئ",
    most_views: "الأكثر مشاهدة",
    most_likes: "الأكثر اعجابات",
    most_recent: "الأحدث",
    most_sell: "الأفضل مبيعا",
    cheapest: "أرخص",
    most_expensive: "الأغلى",
    only_available: "المتوفر فقط",
    view_mode: {
      normal: "طبيعي",
      grid: "جريد",
      list: "قائمة",
      insta: "إنستا",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "مزيف",
    action: "فعل",
    compare_limit: "10 عناصر كحدأقصى",
    compare_add: "أضف للمقارنة",
    compare_be_in_list: "في قائمة المقارنة",

    type: "نوع",
    brand: "ماركة",
    category: "قسم",
    discount: "خصم",
    track_price: "تتبع السعر",
    waiting_for_auction: "تنتظر المزاد؟",
    inform_auction: "أخبرني عن المزاد",
    return_in_days: "{days} يمكن إسترجاعه خلال",
    support24h7: "دعم 24 ساعة 7 أيام",
    support_normal: "دعم خلال ساعات العمل",
    original_guarantee: "الضمان الأصلي",
    cod_payment: "الدفع نقدا عند التسليم ",

    pros: "المميزات",
    cons: "السلبيات",

    external_link: "روابط خارجية",
    notifications: {
      congratulation: "تهانينا",
      waiting_list_add_success:
        "سوف نخطرك عندما يتم بيع هذا المنتج بالمزاد.",
      waiting_list_delete_success: "لقد خرجت من قائمة انتظار المزاد.",
    },

    offer_message: "اشترِ {min_quantity} واحصل على خصم {percent}٪ على هذه العناصر",
    up_to: "ما يصل إلى {per_order} x لكل طلب",
    get_free: "احصل مجانا",
    get_off: "احصل على خصم بنسبة {percent}٪",
    select_a_vendor_message: "الرجاء تحديد بائع.",
    product_description_header: "تقديم {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "في انتظار توفر المنتج",
    inform_me_when_available: "اخبرني عندما يتوفر",
    pay_buy: "الدفع والشراء",
    quantity: "الكمية",
    quantity_in_basket: "العناصر الموجودة في عربة التسوق",
    count_unit: "x",
    remove: "إزالة",
    add_to_basket: "أضف إلى السلة",
    buy: "اشتري",
    subscribe_now: "إشترك الآن",
    unsubscribe: "إلغاء الاشتراك",
    select_a_subscription_plan: "حدد خطة أولا!",
    manage_subscriptions: "إدارة الاشتراكات",
    notifications: {
      inform_add_success: "سنخبرك عندما يكون متاحًا.",
      inform_remove_success: "لقد تم حذفك من قائمة الانتظار.",
    },
    zip_pin_input: "الرمز البريدي / PIN",
    zip_pin_not_available_msg: "غير متوفر في هذا الموقع!",
    zip_pin_placeholder: "حدد الرمز البريدي/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "الوصف",
    spec: "المواصفات",
    comments: "المراجعات",
    price: "السعر",
    rate: "التقييم",
    comment: "تعليق",
    warranty: "ضمان",
    return_policy: "سياسة العائدات",
    guide: "مرشد",
    shipping: "الشحن",
    related_products_title: "قد يعجبك أيضًا",
    related_categories_title: "اكتشف في المجموعات",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "تاريخ الطلبات",
      profile: "الملف الشخصي",
      favorites: "العناصر المفضلة",
      gift_cards: "بطاقات الهدايا",
      return_requests: "الطلبات المرتجعة",
      basket: "عربة التسوق",
    },
    user_menu: {
      my_shops: "متاجري",
      go_to_admin: "إدارة {shop_name}",
      exit_from: "تسجيل الخروج {shop_name}",
      chips: "{chips} شريحة",
    },
    login_to_shop: "تسجيل الدخول إلى المتجر",
    login_to_shop_short: "تسجيل الدخول",
    item_in_basket_message: "{count} هذا العنصر في سلة التسوق الخاصة بك.",
    search_title: "بحث في المتجر {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "عربة التسوق",
    basket_is_empty: "عربة التسوق فارغة.",
    total_price: "السعر الإجمالي",
    view_basket: "سلة التسوق",
    more: " المزيد ...",
    accept_and_pay: "الدفع",
    items: "أغراض)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "مرفوض",
    table: {
      code: "رمز الطلب",
      reserved: "تاريخ",
      delivery_state: "حالة الشحن",
      price: "السعر الكلي",
      status: "حالة السداد",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "رمز الطلب",
      items: "أغراض",
      reserved: "تاريخ",
      delivery_state: "حالة الشحن",
      price: "السعر الكلي",
      status: "حالة السداد",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "بطاقة هدية",
      comments: "تعليقات",
      favorites: "المفضلة",
      return_requests: "مرتجعات",
      addresses: "عناوين",
      profile: "الحساب الشخصي",
      orders: "الطلب",
      wallets: "المحافظ",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "محافظي",
    subtitle: "إذا كنت مؤهلاً وكان برنامج الاسترداد النقدي نشطًا، فسيتم إيداع جزء من طلبك في محفظتك. يمكنك استخدام هذه الأموال في عملية الشراء التالية."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"رصيد محفظتي",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "طلب",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "نقدا",
      payment_waiting: "في انتظار السداد",
      payment_completed: "تم الدفع",
      table: {
        title: "عنوان",
        amount: "الكمية",
        description: "وصف",
      },
      total_payment: "المبلغ الكلي المدفوع",
      discount: "خصم",
      discount_code: "كود الخصم",
      delivery_fee: "تكلفة الشحن",
      delivery_fee_after: "تكلفة الشحن عند الاستلام",

      total_price: "إجمالي سعر العناصر",
      total_items_discount: "قيمة الخصم الكلية",
      total_price_after_offers: "السعر الإجمالي بعد تطبيق الخصومات",
      total_order_price_before_tax: "السعر الإجمالي قبل الضريبة",

      buyer_payment: "مبلغ الشراء",

      payment_is_in_require_capture_message:
        "لقد تلقينا دفعتك، لكنها لم تُحصّل بعد.",
      settle_the_earlier_bill_first: "قم بتسوية الفاتورة السابقة أولاً!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "توصيل",
      subtitle: "بيانات المشتري",
      confirm_received_action: "تأكيد استلام المنتج",
      confirm_received_info:
        "انقر فوق زر التأكيد إذا تلقيت الطلب. إذا لزم الأمر ، ستتمكن من إرسال إحالة إذا تلقيت تأكيدًا.",
      Recipient: "متلقي",
      bill: "فاتورة",
      name: "اسم",
      tel: "هاتف",
      email: "بريد الالكتروني",
      country: "دولة",
      state: "محافظة",
      city: "مدينة",
      address: "عنوان",
      building_no: "رقم المبنى",
      unit_no: "رقم العقار",
      postal_code: "الرمز البريدي",
      description: "وصف",
      order_delivered: "تم تسليم الطلب.",
      delivery_time: "موعد التسليم",
      tracking_code: "كود التتبع",
      tracking_url: "رابط التتبع",

      notifications: {
        confirm_delivery: "تم تأكيد طلبك.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "ضمان المنتج الأصلي",
      return: "استرجاع",
      table: {
        product: "اسم المنتج",
        count: "عدد",
        unit_price: "سعر القطعة",
        total_price: "السعر الكلي",
        discount: "خصم",
        final_price: "السعر النهائي",
        returned: "تم استرجاعه",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "استرجاع",
    count_input: "عدد العناصر التي تم إرجاعها",
    count_input_message: "كم عدد العناصر التي تسترجعها؟",
    reason_input: "سبب الاسترجاع",
    reason_input_message: "حدد سبب استرجاع هذا العنصر.",
    note_input: "وصف",
    note_input_hint: "صف سبب الاسترجاع ..",
    note_input_message:
      "صف سبب إسترجاع هذا العنصر إذا لزم الأمر.",
    media_message:
      "يمكنك تحميل صورة أو صوت أو فيديو للمنتج هنا للحصول على دعم أفضل لمعلومات حالة المنتج. سيؤدي تحديد الملف إلى الإرسال والتأكيد تلقائيًا.",
    video: "فيديو",
    voice: "صوت",
    add_action: "إرسال طلب الاسترجاع",
    notifications: "تم تسجيل طلب الاسترجاع بنجاح.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "طلب",
    info: {
      title: "منتج افتراضي تم شراؤه",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "معلوماتي الشخصية",
    name: "اسم",
    email: "بريد الالكتروني",
    tel: "هاتف",
    identity: "الهوية",
    success_kyc: "تم التحقق من الهوية",
    no_kyc: "لا يوجد KYC",
    club: "مستوى المستخدم",
    subscription: "الاشتراك في النشرة",
    leave_shop: "اترك هذا المتجر وقم بإزالة مستوى جميع العملاء",
    leave_shop_action: "اترك المتجر",
    edit_personal_info: "تحرير المعلومات الشخصية",
    leave_dialog: {
      title: "اترك المتجر",
      message:
        "لن يؤدي إلغاء الاشتراك في هذا المتجر إلى حذف معلومات الطلب والسجلات.",
      action: "مغادرة",
    },
    notifications: {
      leave_success: "لقد تركت المتجر",
    },
    club_table: {
      discount: "خصم",
      limit: "حد",
      currency: "عملة",
      free_shipping: "الشحن مجانا",
    },

    my_profile: {
      title: "ملفي الشخصي",
      subtitle: "هذه معلومات ملفي كعميل في المتجر.",
      edit_action: "تعديل الملف الشخصي"
    },
    subscribe_status: {
      subscribed: "أنا مشترك لتلقي أحدث الأخبار والعروض الترويجية عبر البريد الإلكتروني.",
      unsubscribed: "أنا غير مشترك لتلقي أي أخبار أو عروض ترويجية عبر البريد الإلكتروني."
    },
    my_club: {
      subtitle: "مستوى النادي الخاص بي ومزاياه."
    },
    kyc: {
      subtitle: "هذه معلومات هويتي العالمية."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "عربة التسوق",
    total_price: "المبلغ الإجمالي",
    shipping: "تكلفة الشحن",
    free_shipping: "الشحن مجانا",
    shipping_not_pay: "الشحن غير مشمول",
    total_discount: "إجمالي الخصم",
    customer_club: " عضوية العميل ",
    customer_club_discount: "خصم الأعضاء",
    final_price: "السعر النهائي",
    lead_time: "وقت التحضير",
    lead_time_unit: "ساعة",
    receive_time: "وقت التسليم المفضل",
    select_time: "حدد وقت التسليم",
    no_select_time: "في أقرب وقت ممكن",
    transportation_type: "نوع الشحن",
    days_input: "أيام التسليم",
    days_input_label: "أيام",
    days_input_no_data: "حدد يوم واحد على الأقل",
    time_input: "موعد التسليم",
    time_input_label: "التسليم في",
    time_input_label_no_data: "حدد فترة زمنية واحدة على الأقل",
    support_cod: "الدفع عند الاستلام",
    not_support_cod: "لا يمكن الدفع عند الاستلام!",
    final_confirm_action: "تأكيد الطلب النهائي",
    pay_and_complete_action: "ادفع الآن",
    pre_confirm_service: "تقديم الطلب",
    cross_selling_discount: "خصم التجميع",

    errors: {
      no_address: "حدد العنوان الذي تريد شحن طلبك إليه.",
      no_phone: "أدخل رقم جهة اتصال لتنسيق استلام المنتجات.",
      select_billing_country: "حدد بلد الفوترة",
      select_billing_state: "حدد منطقتك ",
    },
    same_billing_address: "معلومات الفواتير هي نفسها معلومات المستلم",
    same_billing_address_desc:
      "عنوان الفواتير هو نفسه عنوان الشحن.",
    custom_billing_info: "معلومات الفواتير المختلفة",
    custom_billing_info_desc:
      "يمكنك إدخال الرقم الضريبي الخاص بك وتعيين عنوان مختلف للفواتير.",
    basket_empty: "السلة فارغة",
    extra_shipping_count: "ستتلقى {count} حزم.",
    select_location_error:
      "ابحث عن مكان استلام الشحنة على الخريطة وانقر على المؤشر في منتصف الخريطة لتحديد العنوان الدقيق للمستلم.",

    billing_business_desc: "إنه حساب تجاري برقم ضريبي.",
    billing_personal_desc: "إنه حساب شخصي.",

    no_billing_title: "لا يوجد فواتير",
    no_billing_desc: "اترك عنوان الفاتورة فارغًا.",

    can_pay_cod_message:"يمكنك دفع قيمة هذا الطلب نقدًا عند الاستلام.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "ساعة",
    count_input: "عدد",

    price_changed: "تغير السعر. سعر جديد:",
    offer: "احصل على {count} من العناصر بخصم {percent}%",
    offer_free: "احصل على {count} x مجانًا",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "عناويني",
    subtitle:"اعرض عناوينك المحفوظة هنا وأضف عنوانًا جديدًا بسهولة.",
    new_action: "عنوان جديد",
    receiver: "المستلم",
    address: "عنوان",
    building_no: "رقم المبنى",
    building_unit: "الوحدة",
    postcode: "الرمز البريدي",
    tel: "هاتف",
    description: "الوصف",

    map: {
      title: "عناويني",
      confirm: "تسجيل العنوان",
      address_type: "عنوان",
      receptor_type: "المستلم",
    },
    add_dialog: {
      title: " العنوان الجديد",
      message: "أدخل مسمى لعنوان جديد.",
      address_name_input: "العنوان (مطلوب)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "طلبات الإسترجاع",
    subtitle:"اعرض طلبات الإرجاع الخاصة بك هنا. بالنسبة للعناصر التي لديها سياسة إرجاع، يمكنك إرسال طلب إرجاع من صفحة الطلب.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "قائمة الرغبات",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "تعليقاتي",
    first_post: "أول منشور",
    last_edit: "آخر تعديل",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "قسيمة الهدايا الخاصة بي",
    add_action: "إضافة قسيمة",
    add_card_dialog: {
      title: "أضف قسيمة هدية",
      message:
        "أدخل رقم البطاقة وكود الحماية. ستتم إضافة بطاقة هدية إلى حسابك.",
      card_number_input: "رقم القسيمة",
      info: "ملاحظة: عند الشراء من المتجر ، سيظهر لك خيار الدفع ببطاقات الهدايا. بتحديد هذا الخيار ، سيتم خصم رصيد قسيمة الهدية من مبلغ الطلب.",
      add_action: "تسجيل القسيمة",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "قارن المنتج",
    action_button: "يقارن",

    /** {@see SComparisonList} **/
    list: {
      no_data: "لم يتم إضافة أي منتجات إلى قائمة المقارنة.",
      price: "السعر",
      type: "النوع",
      brand: "الماركة",
      warranty: "الضمان",
      variants_comparison: "قارن بين متغيرات المنتج",
      spec: "المواصفات الفنية",
      pros: "المميزات",
      cons: "السلبيات",
      user_review: "تعليقات المستخدم",
      rating: "تقييم",
      rating_count: "عدد المراجعات",
      info: "يمكنك مشاركة جدول مقارنة المنتج هذا مع أصدقائك عن طريق إرسال الرابط التالي ، أو الوصول إليه لاحقًا عن طريق حفظ هذا الرابط.",
      copy_action: "انسخ رابط المقارنة",
      check_list: ["نعم", "لديها"],
      cross_list: ["لا", "لم يفعل"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "المنتجات الأصلية فقط",
    only_has_discount: "الخصومات فقط",
    price_range: "نطاق السعر",
    brands: "ماركة",
    main_shop_page: "صفحة المتجر الرئيسية",
    home: "الرئيسية",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "عزيزي {user} ، لقد اشتريت هذا المنتج. ما رأيك في هذا المنتج؟",
    notification: {
      title: "تهنئة",
      message: "تم تسجيل تعليقك.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "مدونة او مذكرة",
    add_new_blog: "مدونة جديدة",
    popular: "مشهور",
    topics: "المواضيع",
    suggestions: "اقتراحات",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "عن الشركة ",
    terms: "شروط الاستخدام",
    privacy: "سياسة الخصوصية",
    contact_us: "اتصل بنا",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "نموذج الاتصال بنا",
    name: "اسم",
    email: "البريد الالكتروني",
    phone: "هاتف",
    message: "رسالة",
    notifications: {
      success: "تم ارسال رسالتك.",
    },
    submitted_title: "شكر لتواصلك معنا!",
    submitted_message:
      "نحن نقدر وقتك في الاتصال بنا. لقد تم استلام رسالتك ويقوم فريقنا بمراجعتها حاليًا. سوف نقوم بالرد في أقرب وقت ممكن، ونشكرك على سعة صدرك خلال هذا الوقت. اهتمامك وتعليقاتك مهمة بالنسبة لنا، ونحن ملتزمون بتزويدك بأفضل دعم ممكن.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "تأكيد الدفعة",
      payment_success: "تم الدفع.",
      buy_title: "شراء",
      pay_by_giftcards: " ادفع بقسيمة هدية.",
      free_order: "طلب مجاني.",
      pay_by_cod: "تمت إضافة طلبك والدفع نقدًا عند التسليم.",
      pay_by_dir:
        "تمت إضافة طلبك بنجاح. يمكنك الآن الدفع عن طريق التحويل المباشر للأموال ثم تحميل إيصال الدفع في صفحة الطلب.",
      pay_title: "نقدا",
      qr_code_payment: "تم إنشاء عنوان الكيو ار كود للدفع.",
      connecting_to_online_gateway: "الاتصال ببوابة الدفع عبر الإنترنت.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "قبل البداية",
    title_between_start_end: "بقيت حتى النهاية",
    title_after_end: "تم الانتهاء من",
    title_no_start_end: "بدون فترة!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "يمكنك الحصول على هدية واحدة لكل طلب.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "رمز الكوبون",
    add_coupon: "أضف كوبون",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "لم يتم تمكين شكل الأفوكادو!",
    last_update: "اخر تحديث:",
    step1:
      "1. أدخل اسم وتفاصيل المنتج الذي تريد طلبه وانقر فوق الزر \"إضافة\".",
    title_plc: "أدخل اسم المنتج.",
    description_plc: "هل لديك المزيد من أوصاف المنتجات؟",
    link_plc: "هل لديك رابط للمنتج؟",
    image: "صورة المنتج",
    image_msg: "يمكنك إرسال صورة المنتج إذا لزم الأمر.",
    add_item: "اضافة عنصر",
    items_list: "قائمة المنتجات المطلوبة",
    currency_msg: "يجب عليك دفع ثمن هذا الطلب بهذه العملة.",
    step2:
      "2. بعد إضافة جميع العناصر المطلوبة ، انقر فوق زر طلب مراجعة الطلب. في هذه المرحلة ، سنراجع الطلب ونعلمك بالسعر. من خلال النقر على هذا الرابط ، ستتمكن من رؤية السعر ورابط الدفع.",
    order_action: "طلب التسجيل",
    show_all: "عرض الكل",
    show_accepted: "إظهار العناصر التي تم تأكيدها",
    last_orders: "قائمة طلباتك الأخيرة",
    pending_status: "قيد المراجعة",
    check_now: "تحقق من الطلب",
    add_new_order: "اضافة طلب جديد",
    pay_online: "ادفع عبر الإنترنت",
    pricing_not_completed_message:
      "طلبك قيد المراجعة. ستتم مراجعة طلبك وتسعيره قريبًا وستتمكن من دفع الطلب.",

    select_address_message:
      "الرجاء إدخال عنوانك ، وبعد ذلك يمكنك تقديم الطلب.",

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

  /** {@see SHyperCart} **/
  hyper: {
    title: "طلب إنشاء",
    message:
      "قم بإنشاء قائمة المنتجات التي ترغب في شرائها عن طريق مسح الضوئي (سكان) لكود المنتج.",

    currency_msg: "العملة التي تريد الدفع بها.",
    order_action: "نقدا",
    add_new_order: "طلب جديد",
    continue_order: "متابعة الطلب",

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

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "قم بتحميل صورة إيصال الدفع.",
    upload_payment_receipt_done:
      "✔ لقد قمت بالفعل بتحميل صورة الإيصال ، انتظر موافقتنا. إذا كنت بحاجة إلى التغيير ، يمكنك استبدال الصورة السابقة بصورة جديدة.",
    public_form_title: "معلومات الحساب لتحويل الأموال",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "عمل قائمة",
      message: "حدد عناوين العمل الذي تريد القيام به ودع المشتري يعرف مدى تقدمه.",
    },
    booking: {
      title: "الحجز / الحجز",
      message: "ستتم معالجة هذا الطلب في وقت محدد ، وقد حدد العميل الفترة المطلوبة ، إذا كنت تريد إجراء أي تغييرات في الفترة المحددة ، فأخبر العميل بذلك.",

      selected_checkin: "تسجيل الوصول المحدد من قبل العميل",
      selected_checkout: "تسجيل المغادرة المحدد من قبل العميل",
      change_days_question:
        "هل تحتاج إلى التغيير خلال الأيام المحددة للعميل؟",
      show_calendar: "عرض التقويم الخاص بالطلبات",
    },
    pricing: {
      title: "التسعير",
      message: "كم تدفع مقابل هذه الخدمة؟",
    },
    subscription: {
      title: "الاشتراك",
      message:
        "يمكنك اختيار فترة الاشتراك عن طريق شراء هذه الخدمة على أساس يومي. دع المشتري يعرف ما إذا كنت تريد تغيير القيم الافتراضية التي أدخلتها بالفعل.",
      duration: "المدة ",
    },
    charge: {
      title: "الشحنة",
      message:
        "لقد حددت تكلفة لهذا العنصر. يمكنك تغيير مبلغ الرسوم للعنصر الذي اشتراه العميل.",
      charge: "التكلفة",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "في انتظار التحقق من الوصول ...",
    no_access_message:
      "لسوء الحظ ، لا يمكنك الوصول إلى متجرنا.<br/> الرجاء التواصل معنا.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "ترتيب المشاركة",
    title: "شارك هذا الطلب مع الاخرين",
    message:
      "إنه رابط آمن ، شاركه فقط مع من تعرفهم. يمكن لأي شخص لديه هذا الرابط تكرار طلبك ورؤية العنوان المحدد. سوف تحتوي على معلومات حول عربة التسوق الحالية الخاصة بك.",
    valid_period: "ستنتهي صلاحية هذا الرابط بعد 48 ساعة.",
    import_order_action: "أمر استيراد",
    retrieve_dialog_title: "استرجاع الأمر الخارجي",
    address_included: "مشاركة عناصر السلة + العنوان",
    address_excluded: "مشاركة عناصر السلة فقط",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "الأسعار",
    inventory: "المخزون",
    discount: "خصم",
  },

  rating: {
    product_rating_message:
      "لقد حصل هذا المنتج على تقييم {rate} من أصل 5 نجوم وتم تقييمه بواسطة {rate_count} من الأشخاص.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "يستكشف!",
      same_tags_subtitle: "ابحث عن المزيد من العناصر ذات الصلة الرائعة.",
      same_category_subtitle: "ابحث عن المزيد من العناصر الرائعة في هذه الفئة.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "اطلب {product} مع",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "عرض متجر {vendor}",
  },

  login: {
    welcome: "مرحبًا",
  },


};
