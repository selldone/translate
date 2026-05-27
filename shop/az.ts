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
  surveys: ["Çox kasıb", "Yazıq", "Normal", "Yaxşı", "Əla"],

  /** @see SFooterSection **/
  footer: {
    map: "Xəritə",
    email: "E-poçt",
    phone: "Telefon",
    address: "Ünvan",

    copyright:
      "Məzmundan yalnız qeyri-kommersiya məqsədləri üçün və mənbəyə istinadla istifadə ({shop_title} ilə keçid). Bütün hüquqlar {shop_title} üçün qorunur.",
    powered_by: "Təqdim edir",
    privacy: "Gizlilik Siyasəti",
    term_of_use: "İstifadə qaydaları",
    shop_app_setting: "Mağaza ayarı və GDPR",

    dialog_setting: {
      title: "Mağaza Tətbiqləri Parametrləri",
      app_list: "Tətbiqlərin siyahısı",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Satıldı",
    review_unit: "Baxış-icmal",
    not_original: "Orijinal deyil",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtr",
    native: {
      title: "Proqrama Giriş",
      message:
        "Bu proqram mağaza hesabı məlumatlarınıza giriş tələb edir. Buraya ad, əlaqə nömrəsi, ünvan, e-poçt, sifariş tarixçəsi, sifariş və bu mağazada şərhlərin yerləşdirilməsi daxildir.",
      message_bold:
        "Bu mağazaya daxil olmaq üçün rəsmi mağaza proqramından istifadə etdiyinizə əmin olun.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sırala",
    title_small: "Sırala..",
    nothing: "heç nə",
    most_views: "Ən çox baxış",
    most_likes: "Ən məşhur",
    most_recent: "Ən yeni",
    most_sell: "Ən çox satılan",
    cheapest: "Ən ucuz",
    most_expensive: "Ən bahalı",
    only_available: "Mövcuddur",
    view_mode: {
      normal: "Normal",
      grid: "Tor",
      list: "Siyahı",
      insta: "İnsta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Saxta",
    action: "Hərrac",
    compare_limit: "10 maddə limiti",
    compare_add: "Müqayisə et",
    compare_be_in_list: "Müqayisə siyahısında",

    type: "Növ",
    brand: "Brend",
    category: "Kateqoriya",
    discount: "Güzəşt",
    track_price: "Qiyməti izləyin",
    waiting_for_auction: "Hərracı gözləyirsiniz?",
    inform_auction: "Mənə hərrac haqqında məlumat verin",
    return_in_days: "{days} Gün Zəmanət Qaytarması",
    support24h7: "7 gün 24 saat dəstək",
    support_normal: "İş saatları dəstəyi",
    original_guarantee: "Orijinal zəmanət",
    cod_payment: "Çatdırılmada nağd pul dəstəyi",

    pros: "Üstünlüklər",
    cons: "Eksiler",

    external_link: "Daha çox oxu",
    notifications: {
      congratulation: "Təbrik edirik",
      waiting_list_add_success:
        "Bu məhsul hərraca çıxarıldıqda sizi xəbərdar edəcəyik.",
      waiting_list_delete_success: "Siz auksion gözləmə siyahısından çıxdınız.",
    },

    offer_message: "{min_quantity} alın Bu məhsullara {percent}% endirim qazanın",
    up_to: "Hər sifariş üçün {per_order}x-ə qədər",
    get_free: "PULSUZ OLUN",
    get_off: "{percent}% ENDİRİM ALIN",
    select_a_vendor_message: "Zəhmət olmasa satıcı seçin.",
    product_description_header: "{product} təqdim olunur",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Mövcudluq gözlənilir",
    inform_me_when_available: "Bunu gözləyirsiniz?",
    pay_buy: "Ödə və Al",
    quantity: "saymaq",
    quantity_in_basket: "Səbətdəki əşyalar",
    count_unit: "x",
    remove: "Sil",
    add_to_basket: "Səbətə əlavə et",
    buy: "al",
    subscribe_now: "İndi abunə olun",
    unsubscribe: "Abunəni dayandırın",
    select_a_subscription_plan: "Əvvəlcə plan seçin!",
    manage_subscriptions: "Abunəlikləri idarə edin",
    notifications: {
      inform_add_success: "Əlçatan olduqda sizə xəbər verəcəyik.",
      inform_remove_success: "Siz gözləmə siyahısından çıxarıldınız.",
    },
    zip_pin_input: "Poçt kodu / PIN",
    zip_pin_not_available_msg: "Bu məkanda mövcud deyil!",
    zip_pin_placeholder: "Poçt/PIN kodunu seçin...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Təsvir",
    spec: "Xüsusiyyətlər",
    comments: "Rəylər",
    price: "Qiymət",
    rate: "Reytinq",
    comment: "Şərh",
    warranty: "Zəmanət",
    return_policy: "Qaytarma Siyasəti",
    guide: "Bələdçi",
    shipping: "Çatdırılma",
    related_products_title: "Bunlar da xoşunuza gələ bilər",
    related_categories_title: "Kolleksiyalarda kəşf edin",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Sifariş Tarixi",
      profile: "Mənim Hesabım",
      favorites: "Sevimli Əşyalar",
      gift_cards: "Hədiyyə Kartları",
      return_requests: "Qaytarılmış Sifarişlər",
      basket: "Alış-veriş kartı",
    },
    user_menu: {
      my_shops: "Mağazalarım",
      go_to_admin: "{shop_name} idarə edin",
      exit_from: "{shop_name} çıxışı",
      chips: "{chips} Çiplər",
    },
    login_to_shop: "Mağazaya daxil olun",
    login_to_shop_short: "daxil ol",
    item_in_basket_message: "{count} Bu element səbətinizdədir.",
    search_title: "{shop_name} mağazasında axtarın",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Səbət",
    basket_is_empty: "Sizin kartınız boşdur.",
    total_price: "Ümumi",
    view_basket: "Səbətiniz",
    more: "Ətraflı...",
    accept_and_pay: "Yoxla",
    items: "Element(lər)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Rədd edildi",
    table: {
      code: "Sifariş kodu",
      reserved: "Tarix",
      delivery_state: "Çatdırılma vəziyyəti",
      price: "Ümumi qiymət",
      status: "Ödəniş Status",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Sifariş kodu",
      items: "Əşyalar",
      reserved: "Tarix",
      delivery_state: "Ən son status",
      price: "Ümumi qiymət",
      status: "Ödəniş Status",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Hədiyyə Kartı",
      comments: "Şərhlər",
      favorites: "Sevimlilər",
      return_requests: "Qaytarır",
      addresses: "Ünvanlar",
      profile: "profil",
      orders: "Sifarişlər",
      wallets: "Cüzdanlar",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Cüzdanlarım",
    subtitle: "Uyğun olduğunuz və keşbek proqramı aktiv olduğu halda, sifarişinizin bir hissəsi cüzdanınıza köçürüləcək. Bu vəsaiti növbəti alışınızda istifadə edə bilərsiniz."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Cüzdan balansım",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Sifariş verin",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Ödəniş",
      payment_waiting: "Ödəniş gözləyir",
      payment_completed: "Ödənişli",
      table: {
        title: "Başlıq",
        amount: "Məbləğ",
        description: "Təsvir",
      },
      total_payment: "Ödənilmiş məbləğ",
      discount: "Güzəşt",
      discount_code: "Endirim kodu",
      delivery_fee: "Çatdırılma qiyməti",
      delivery_fee_after: "Çatdırılma ödənişi yoxdur",

      total_price: "Ümumi maddələrin qiyməti",
      total_items_discount: "Əşyalara Endirim",
      total_price_after_offers: "Təklifləri tətbiq etdikdən sonra cəmi",
      total_order_price_before_tax: "Vergidən əvvəlki Ümumi Qiymət",

      buyer_payment: "Alıcı ödəniş məbləği",

      payment_is_in_require_capture_message:
        "Ödənişinizi qəbul etdik, lakin hələ tutulmayıb.",
      settle_the_earlier_bill_first: "Əvvəlcə əvvəlki hesabı ödəyin!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Çatdırılma",
      subtitle: "Alıcı məlumatı",
      confirm_received_action: "Məhsulun qəbulunu təsdiqləyin",
      confirm_received_info:
        "Sifariş almısınızsa, təsdiq düyməsini basın. Lazım gələrsə, təsdiq alsanız, müraciət göndərə biləcəksiniz.",
      Recipient: "alıcı",
      bill: "Faktura",
      name: "ad",
      tel: "Telefon",
      email: "E-poçt",
      country: "ölkə",
      state: "dövlət",
      city: "Şəhər",
      address: "Ünvan",
      building_no: "Bina nömrəsi",
      unit_no: "Vahid nömrəsi",
      postal_code: "Poçt indeksi",
      description: "Təsvir",
      order_delivered: "Sifariş çatdırıldı.",
      delivery_time: "Çatdırılma vaxtı",
      tracking_code: "İzləmə kodu",
      tracking_url: "İzləmə URL",

      notifications: {
        confirm_delivery: "Sifarişiniz təsdiqləndi.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Malların orijinallığına zəmanət",
      return: "Qayıt",
      table: {
        product: "Məhsulun adı",
        count: "saymaq",
        unit_price: "Vahid qiymət",
        total_price: "Ümumi qiymət",
        discount: "Güzəşt",
        final_price: "Son Qiymət",
        returned: "Qayıtdı",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Qayıt",
    count_input: "Qaytarılan əşyaların sayı",
    count_input_message: "Neçə məhsulu qaytarırsınız?",
    reason_input: "Geri qayıtma səbəbi",
    reason_input_message: "Bu elementi geri qaytarmağın səbəbini seçin.",
    note_input: "Təsvir",
    note_input_hint: "Geri qayıtma səbəbini izah edin..",
    note_input_message:
      "Lazım gələrsə, bu elementi geri qaytarmağın səbəbini təsvir edin.",
    media_message:
      "Məhsulun vəziyyəti haqqında məlumat üçün daha yaxşı dəstək almaq üçün məhsulun şəklini, audio və ya videosunu buraya yükləyə bilərsiniz. Faylın seçilməsi avtomatik olaraq göndəriləcək və təsdiqlənəcək.",
    video: "Video",
    voice: "Səs",
    add_action: "Qaytarma sorğusu göndərin",
    notifications: "Qaytarma sorğunuz uğurla qeydə alınıb.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Sifariş verin",
    info: {
      title: "Alınan Virtual Məhsul",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Şəxsi Məlumatlarım",
    name: "ad",
    email: "E-poçt",
    tel: "Tel",
    identity: "İdentifikasiyası",
    success_kyc: "Doğrulanmış KYC",
    no_kyc: "KYC yoxdur",
    club: "İstifadəçi Səviyyəsi",
    subscription: "Xəbərlərə abunə",
    leave_shop: "Bu mağazanı tərk edin və bütün müştərilər səviyyəsini silin",
    leave_shop_action: "Mağazanı tərk edin",
    edit_personal_info: "Şəxsi məlumatları redaktə edin",
    leave_dialog: {
      title: "Mağazanı tərk edin",
      message:
        "Bu mağazaya abunəlikdən çıxmaq sifariş məlumatlarınızı və qeydlərinizi silməyəcək.",
      action: "tərk et",
    },
    notifications: {
      leave_success: "Mağazanı tərk edin",
    },
    club_table: {
      discount: "Güzəşt",
      limit: "Məhdudiyyət",
      currency: "Valyuta",
      free_shipping: "Pulsuz çatdırılma",
    },

    my_profile: {
      title: "Profilim",
      subtitle: "Bu, mağaza üçün müştəri profil məlumatımdır.",
      edit_action: "Profili redaktə et"
    },
    subscribe_status: {
      subscribed: "Ən son xəbərləri və promosiyaları e-poçtla almağa abunə olmuşam.",
      unsubscribed: "Heç bir xəbər və ya promosiyanı e-poçtla almağa abunə olmamışam."
    },
    my_club: {
      subtitle: "Klub səviyyəm və onun üstünlükləri."
    },
    kyc: {
      subtitle: "Bu, mənim qlobal identifikasiya məlumatımdır."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Alış-veriş kartı",
    total_price: "Ümumi miqdar",
    shipping: "Çatdırılma qiyməti",
    free_shipping: "Pulsuz çatdırılma",
    shipping_not_pay: "Daxil deyil",
    total_discount: "Ümumi endirim",
    customer_club: "Müştəri Klubunun üzvü",
    customer_club_discount: "Üzv endirimi",
    final_price: "Son ödəniş",
    lead_time: "Hazırlıq vaxtı",
    lead_time_unit: "Saat",
    receive_time: "Üstünlük verilən çatdırılma vaxtı",
    select_time: "Çatdırılma vaxtı seçin",
    no_select_time: "Mümkün qədər tez",
    transportation_type: "Göndərmə növü",
    days_input: "Çatdırılma günləri",
    days_input_label: "Günlər",
    days_input_no_data: "Ən azı bir gün seçin",
    time_input: "Çatdırılma vaxtı",
    time_input_label: "Çatdırılma",
    time_input_label_no_data: "Ən azı bir vaxt intervalı seçin",
    support_cod: "Çatdırılmada Nəğd",
    not_support_cod: "Yerli ödəniş etmək mümkün deyil!",
    final_confirm_action: "Son sifariş təsdiqi",
    pay_and_complete_action: "İndi ödə",
    pre_confirm_service: "Sorğu göndərin",
    cross_selling_discount: "Kolleksiya endirimi",

    errors: {
      no_address: "Sifarişinizin göndərilməsini istədiyiniz ünvanı seçin.",
      no_phone: "Malların qəbulunu əlaqələndirmək üçün əlaqə nömrəsini daxil edin.",
      select_billing_country: "Ödəniş ölkənizi seçin",
      select_billing_state: "Vergi bölgənizi seçin",
    },
    same_billing_address: "Faktura məlumatı Alıcı məlumatı ilə eynidir",
    same_billing_address_desc:
      "Faktura ünvanı göndərmə ünvanı ilə eynidir.",
    custom_billing_info: "Fərqli faktura məlumatları",
    custom_billing_info_desc:
      "Siz VERGİ nömrənizi daxil edə və faktura üçün başqa ünvan təyin edə bilərsiniz.",
    basket_empty: "Səbət boşdur",
    extra_shipping_count: "Siz {count} paket alacaqsınız.",
    select_location_error:
      "Xəritədə yükün alındığı yeri tapın və alıcının dəqiq ünvanını müəyyən etmək üçün xəritənin ortasındakı göstəriciyə klikləyin.",

    billing_business_desc: "Bu, VERGİ nömrəsi olan biznes hesabıdır.",
    billing_personal_desc: "Şəxsi hesabdır.",

    no_billing_title: "Faktura yoxdur",
    no_billing_desc: "Faktura ünvanını boş buraxın.",

    can_pay_cod_message:"Bu sifariş üçün çatdırılma zamanı nağd ödəyə bilərsiniz.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Saat",
    count_input: "saymaq",

    price_changed: "Qiymət dəyişdi. yeni qiymət:",
    offer: "{count}x məhsulu {percent}% endirimlə əldə edin",
    offer_free: "{count}x pulsuz əldə edin",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Ünvanlarım",
    subtitle:"Saxlanmış ünvanlarınıza burada baxın və asanlıqla yenisini əlavə edin.",
    new_action: "Yeni Ünvan",
    receiver: "Qəbul edən",
    address: "Ünvan",
    building_no: "bina nömrəsi",
    building_unit: "vahid",
    postcode: "Poçt indeksi",
    tel: "Telefon",
    description: "Qeyd",

    map: {
      title: "Ünvanlarım",
      confirm: "Ünvan qeydiyyatı",
      address_type: "Ünvan",
      receptor_type: "alıcı",
    },
    add_dialog: {
      title: "Yeni Ünvan Adı",
      message: "Yeni ünvan üçün başlıq daxil edin.",
      address_name_input: "Ünvan (lazımdır)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Qaytarma sorğuları",
    subtitle:"Geri qaytarma sorğularınıza burada baxın. Geri qaytarma siyasəti olan məhsullar üçün sifariş səhifəsində geri qaytarma sorğusu göndərə bilərsiniz.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "İstək siyahısı",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Şərhlərim",
    first_post: "İlk yazı",
    last_edit: "Son redaktə",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Hədiyyə Kartlarım",
    add_action: "Kart əlavə edin",
    add_card_dialog: {
      title: "Hədiyyə Kartı əlavə edin",
      message:
        "Kart nömrəsini və təhlükəsizlik kodunu daxil edin. Hədiyyə kartı hesabınıza əlavə olunacaq.",
      card_number_input: "Kartı nömrəsi",
      info: "Qeyd: Mağazadan alış-veriş edərkən sizə hədiyyə kartları ilə ödəmə imkanı göstəriləcək. Bu seçimi seçməklə, doldurma balansınızın məbləği sifariş məbləğindən çıxılacaq.",
      add_action: "Kartın Qeydiyyatı",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Məhsulu müqayisə edin",
    action_button: "Müqayisə et",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Müqayisə siyahısına heç bir məhsul əlavə edilmədi.",
      price: "Qiymət",
      type: "Növ",
      brand: "Brend",
      warranty: "Zəmanət",
      variants_comparison: "Məhsul variantlarını müqayisə edin",
      spec: "Texniki Spesifikasiyalar",
      pros: "Üstünlüklər",
      cons: "Eksiler",
      user_review: "İstifadəçi şərhləri",
      rating: "Reytinq",
      rating_count: "Rəylərin sayı",
      info: "Bu məhsulun müqayisə cədvəlini aşağıdakı linki göndərməklə dostlarınızla paylaşa və ya daha sonra bu linki yadda saxlayaraq ona daxil ola bilərsiniz.",
      copy_action: "Müqayisə Linkini Kopyalayın",
      check_list: ["Bəli", "var"],
      cross_list: ["Yox", "Olmayıb"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Yalnız orijinallar",
    only_has_discount: "Yalnız endirimdə",
    price_range: "Qiymət aralığı",
    brands: "Brend",
    main_shop_page: "Mağazanın əsas səhifəsi",
    home: "Ev",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Hörmətli {user}, Siz bu məhsulu almısınız. Bu məhsul haqqında nə düşünürsünüz?",
    notification: {
      title: "Təbriklər",
      message: "Şərhiniz qeydə alınıb.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Bloq",
    add_new_blog: "Yeni Bloq",
    popular: "Məşhur",
    topics: "Mövzular",
    suggestions: "Təkliflər",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Bizim haqqımızda",
    terms: "İstifadə qaydaları",
    privacy: "Gizlilik Siyasəti",
    contact_us: "Bizimlə əlaqə saxlayın",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Bizimlə əlaqə forması",
    name: "ad",
    email: "E-poçt",
    phone: "Telefon",
    message: "Mesaj",
    notifications: {
      success: "Mesajınız göndərildi.",
    },
    submitted_title: "Bizimlə əlaqə saxladığınız üçün təşəkkür edirik!",
    submitted_message:
      "Bizimlə əlaqə saxlamaq üçün vaxt ayırdığınız üçün təşəkkür edirik. Mesajınız qəbul edildi və komandamız hazırda onu nəzərdən keçirir. Mümkün qədər tez cavab verəcəyik və bu müddət ərzində səbr etdiyiniz üçün sizə təşəkkür edirik. Sizin marağınız və rəyiniz bizim üçün vacibdir və biz sizə mümkün olan ən yaxşı dəstəyi göstərməyə sadiqik.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Ödənişin təsdiqi",
      payment_success: "Ödəniş tamamlandı.",
      buy_title: "al",
      pay_by_giftcards: "Sifarişiniz hədiyyə kartı ilə ödənilib.",
      free_order: "Sifarişiniz pulsuzdur.",
      pay_by_cod: "Sifarişiniz çatdırılma zamanı nağd olaraq əlavə edildi.",
      pay_by_dir:
        "Sifarişiniz uğurla əlavə edildi. İndi siz birbaşa pul köçürməsi ilə ödəyə və sonra ödəniş qəbzini sifariş səhifəsində yükləyə bilərsiniz.",
      pay_title: "Ödəniş",
      qr_code_payment: "Ödəniş QR kodu ünvanı yaradıldı.",
      connecting_to_online_gateway: "Onlayn ödəniş şlüzinə qoşulma.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Başlanğıcda qaldı",
    title_between_start_end: "Sona qədər qaldı",
    title_after_end: "Bitdi",
    title_no_start_end: "Müddət olmadan!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Hər sifariş üçün bir hədiyyə ala bilərsiniz.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kupon Kodu",
    add_coupon: "Kupon əlavə edin",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Avokado forması aktiv deyil!",
    last_update: "Son yeniləmə:",
    step1:
      "1. Sifariş etmək istədiyiniz məhsulun adını və təfərrüatlarını daxil edin və Əlavə et düyməsini sıxın.",
    title_plc: "Məhsulun adını daxil edin.",
    description_plc: "Daha çox məhsul təsviriniz varmı?",
    link_plc: "Məhsula keçidiniz varmı?",
    image: "Məhsul şəkli",
    image_msg: "Lazım gələrsə məhsulun şəklini göndərə bilərsiniz.",
    add_item: "Element əlavə edin",
    items_list: "Tələb olunan məhsulların siyahısı",
    currency_msg: "Bu valyuta ilə bu sifarişin məbləğini ödəməlisiniz.",
    step2:
      "2. İstədiyiniz bütün elementləri əlavə etdikdən sonra sifarişin nəzərdən keçirilməsi sorğusu düyməsini klikləyin. Bu mərhələdə sifarişi nəzərdən keçirəcəyik və qiymət barədə sizə məlumat verəcəyik. Bu linkə klikləməklə qiymət və ödəniş linkinə baxa biləcəksiniz.",
    order_action: "Sifariş qeydiyyatı",
    show_all: "Hamısını göstər",
    show_accepted: "Təsdiqlənmiş elementləri göstərin",
    last_orders: "Son sifarişlərinizin siyahısı",
    pending_status: "nəzərdən keçirilir",
    check_now: "Sifarişi yoxlayın",
    add_new_order: "Yeni Sifariş Edin",
    pay_online: "Onlayn ödəyin",
    pricing_not_completed_message:
      "Sifarişiniz nəzərdən keçirilir. Sifarişiniz tezliklə nəzərdən keçiriləcək və qiymət veriləcək və siz sifarişi ödəyə biləcəksiniz.",

    select_address_message:
      "Zəhmət olmasa ünvanınızı daxil edin, sonra sifarişi təqdim edə bilərsiniz.",

    delete_item_dialog: {
      title: "Elementi alış-veriş səbətindən çıxarın",
      message: "Bu elementi səbətdən silmək istəyirsiniz?",
      action: "Bəli, silin",
    },

    notifications: {
      order_success: "Sifarişiniz uğurla yerləşdirildi.",
      delete_success: "Element silindi.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Sifarişin yaradılması",
    message:
      "Məhsul kodunu skan edərək almaq istədiyiniz məhsulların siyahısını yaradın.",

    currency_msg: "Ödəmək istədiyiniz valyuta.",
    order_action: "Ödəniş",
    add_new_order: "Yeni sifariş",
    continue_order: "Sifarişə davam edin",

    delete_item_dialog: {
      title: "Elementi alış-veriş səbətindən çıxarın",
      message: "Bu elementi səbətdən silmək istəyirsiniz?",
      action: "Bəli, silin",
    },
    notifications: {
      order_success: "Sifarişiniz uğurla yerləşdirildi.",
      delete_success: "Element silindi.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Ödəniş qəbzinin şəklini yükləyin.",
    upload_payment_receipt_done:
      "✔ Siz artıq qəbz şəklini yükləmisiniz, təsdiqimizi gözləyin. Dəyişmək lazımdırsa, əvvəlki şəkli yenisi ilə əvəz edə bilərsiniz.",
    public_form_title: "Pul köçürmələri üçün hesab məlumatları",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Görüləcək işlər siyahısı",
      message: "Etmək istədiyiniz işin adlarını qeyd edin və alıcıya onun nə qədər irəlilədiyini bildirin.",
    },
    booking: {
      title: "Rezervasyon / Rezervasyon",
      message: "Bu sifariş müəyyən edilmiş vaxtda işlənəcək, müştəri istədiyi müddəti seçib, əgər seçilmiş müddətdə hər hansı dəyişiklik etmək istəyirsinizsə, müştəriyə bildirin.",

      selected_checkin: "Müştəri tərəfindən seçilmiş qeydiyyat",
      selected_checkout: "Müştəri tərəfindən seçilmiş check-out",
      change_days_question:
        "Müştərinin seçdiyi günlərdə dəyişməyə ehtiyacınız varmı?",
      show_calendar: "Sifarişlər Təqvimini göstərin",
    },
    pricing: {
      title: "Qiymətləndirmə",
      message: "Bu xidmət üçün nə qədər pul ödəyirsiniz?",
    },
    subscription: {
      title: "Abunəlik",
      message:
        "Bu xidməti gündəlik olaraq almaqla abunəlik müddətini seçə bilərsiniz. Artıq daxil etdiyiniz standart dəyərləri dəyişdirmək istədiyinizi alıcıya bildirin.",
      duration: "Abunəlik müddəti",
    },
    charge: {
      title: "Şarj edin",
      message:
        "Bu element üçün ödəniş təyin etmisiniz. Müştərinin aldığı məhsul üçün ödəniş məbləğini dəyişə bilərsiniz.",
      charge: "Şarj edin",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Girişi yoxlamaq gözlənilir...",
    no_access_message:
      "Təəssüf ki, mağazamıza daxil olmaq imkanınız yoxdur.<br/> Zəhmət olmasa bizimlə əlaqə saxlayın.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Sifarişi paylaşın",
    title: "Bu sifarişi başqaları ilə paylaşın.",
    message:
      "Bu təhlükəsiz linkdir, onu yalnız tanıdığınız insanlarla paylaşın. Bu linkə malik olan hər kəs sifarişinizin dublikatını çıxara və seçilmiş ünvanı görə bilər. Bu, cari səbətiniz haqqında məlumat ehtiva edəcəkdir.",
    valid_period: "Bu keçid 48 saatdan sonra qüvvədən düşəcək.",
    import_order_action: "İdxal sifarişi",
    retrieve_dialog_title: "Xarici sifarişi əldə edin",
    address_included: "Səbət elementlərini paylaşın + Ünvan",
    address_excluded: "Yalnız səbət əşyalarını paylaşın",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Qiymətlər",
    inventory: "İnventar",
    discount: "Güzəşt",
  },

  rating: {
    product_rating_message:
      "Bu məhsul 5 ulduzdan {rate} qiymətləndirilib və {rate_count} nəfər tərəfindən qiymətləndirilib.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Kəşf edin!",
      same_tags_subtitle: "Daha diqqətəlayiq əlaqəli maddələr tapın.",
      same_category_subtitle: "Bu kateqoriyada daha çox diqqət çəkən əşyalar tapın.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "{product} ilə birlikdə sifariş verin",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "{vendor} mağazasına baxın",
  },

  login: {
    welcome: "Xoş gəlmisiniz",
  },


};
