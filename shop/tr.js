export default {
  /** @see ProductRatingView **/
  surveys: ["Çok zayıf", "Kötü", "Normal", "İyi", "Mükemmel"],


  /** @see ShopFooter **/
  footer: {
    map: "Harita",
    email: "E-posta",
    phone: "Telefon",
    address: "Adres",

    copyright:
      "İçeriğin yalnızca ticari olmayan amaçlarla ve kaynağa atıfta bulunularak kullanılması ({shop_title} ile bağlantı). Tüm hakları {shop_title}'a aittir.",
    powered_by: "Tarafından desteklenmektedir",
    privacy: "Gizlilik Politikası",
    term_of_use: "Kullanım Şartları",
    shop_app_setting: "Mağaza ayarı ve GDPR",

    dialog_setting: {
      title: "Mağaza Uygulamaları Ayarı",
      app_list: "Uygulamaların listesi",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Satıldı",
    review_unit: "gözden geçirmek",
    not_original: "Orjinal değil",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtre",
    native: {
      title: "Uygulama Girişi",
      message:
        "Bu uygulama, mağaza hesabı bilgilerinize erişim gerektirir. Buna ad, iletişim numarası, adres, e-posta, sipariş geçmişi, sipariş verme ve bu mağazada yorum gönderme erişimi dahildir.",
      message_bold:
        "Bu mağazaya girmek için resmi mağaza uygulamasını kullandığınızdan emin olun.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Göre sırala",
    title_small: "Göre sırala..",
    nothing: "Hiçbir şey değil",
    most_views: "Çoğu görüntüleme",
    most_likes: "En popüler",
    most_recent: "en yeni",
    most_sell: "En iyi satış",
    cheapest: "En ucuz",
    most_expensive: "En pahalı",
    only_available: "Mevcut",
    view_mode: {
      normal: "Normal",
      grid: "Kafes",
      list: "Liste",
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Numara yapmak",
    action: "Açık arttırma",
    compare_limit: "10 ürün sınırı",
    compare_add: "Karşılaştırmaya Ekle",
    compare_be_in_list: "Karşılaştırma listesinde",

    type: "Tip",
    brand: "Marka",
    category: "Kategori",
    discount: "İndirim",
    track_price: "Fiyatı takip et",
    waiting_for_auction: "Açık artırma mı bekliyorsunuz?",
    inform_auction: "Bana açık artırmadan bahset",
    return_in_days: "{days} Gün Garanti İadesi",
    support24h7: "7 gün 24 saat destek",
    support_normal: "Çalışma saatleri desteği",
    original_guarantee: "Orijinal garanti",
    cod_payment: "Kapıda ödeme desteği",

    pros: "Artıları",
    cons: "Eksileri",

    external_link: "Devamını oku",
    notifications: {
      congratulation: "Tebrikler",
      waiting_list_add_success:
        "Bu ürün açık artırmaya çıktığında sizi bilgilendireceğiz.",
      waiting_list_delete_success: "Açık artırma bekleme listesinden çıktınız.",
    },

    offer_message: "{min_quantity} satın alın Bu öğeler için %{percent} indirim kazanın",
    up_to: "Sipariş başına {per_order}x'e kadar",
    get_free: "BEDAVA AL",
    get_off: "%{percent} İNDİRİM ALIN",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "Müsaitlik bekleniyor",
    inform_me_when_available: "Bunun için bekliyor?",
    pay_buy: "Öde ve Satın Al",
    quantity: "Saymak",
    quantity_in_basket: "Sepetteki ürünler",
    count_unit: "x",
    remove: "Kaldırmak",
    add_to_basket: "Sepete ekle",
    buy: "Satın almak",
    notifications: {
      inform_add_success: "Müsait olduğunda size haber vereceğiz.",
      inform_remove_success: "Bekleme listesinden çıkarıldınız.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Gözden geçirmek",
    spec: "Özellik",
    comments: "Yorumlar",
    related_products_title: "İlgili ürünler",
    price: "Fiyat",
    rate: "Oran",
    comment: "Yorum",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "Sipariş Geçmişi",
      profile: "Profil",
      favorites: "Favorilerim",
      gift_cards: "Hediye Kartları",
      return_requests: "İade talepleri",
      basket: "Alışveriş Sepeti",
    },
    user_menu: {
      my_shops: "Mağazalarım",
      go_to_admin: "{shop_name}'yi yönetin",
      exit_from: "Çıkış {shop_name}",
      chips: "{cips} Cips",
    },
    login_to_shop: "Mağazaya Giriş Yap",
    login_to_shop_short: "giriş yapmak",
    item_in_basket_message: "{count} Bu ürün sepetinizde.",
    search_title: "{shop_name} mağazasında ara",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Araba",
    basket_is_empty: "Sepetiniz boş.",
    total_price: "Toplam",
    view_basket: "Sepeti Görüntüle",
    more: "Daha ...",
    accept_and_pay: "Ödeme",
    items: "öğeler)",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Reddedildi",
    table: {
      code: "Sipariş Kodu",
      reserved: "Tarih",
      delivery_state: "Teslim durumu",
      price: "Toplam fiyat",
      status: "Ödeme Durumu",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "Sipariş Kodu",
      items: "Öğeler",
      reserved: "Tarih",
      delivery_state: "Son durum",
      price: "Toplam fiyat",
      status: "Ödeme Durumu",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Hediye kartı",
      comments: "Yorumlar",
      favorites: "Favoriler",
      return_requests: "İadeler",
      addresses: "adresler",
      profile: "profile",
      orders: "Emirler",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "Emir",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Ödeme",
      payment_waiting: "Ödeme için bekleniyor",
      payment_completed: "Paralı",
      table: {
        title: "Başlık",
        amount: "Miktar",
        description: "Açıklama",
      },
      total_payment: "Ödenen miktar",
      discount: "İndirim",
      discount_code: "İndirim kodu",
      delivery_fee: "Nakliye maliyeti",
      delivery_fee_after: "Teslimat ödenmedi",

      total_price: "Ürünlerin Toplam Fiyatı",
      total_items_discount: "Ürün indirimi",
      total_price_after_offers: "Uygulama teklifleri sonrası Toplam Fiyat",

      buyer_payment: "Alıcı Ödeme Tutarı",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Teslimat",
      subtitle: "Alıcı bilgileri",
      confirm_received_action: "Ürün Fişini Onayla",
      confirm_received_info:
        "Siparişi aldıysanız onay düğmesine tıklayın. Gerekirse, onay alırsanız bir tavsiye gönderebileceksiniz. ",
      receiver: "Alıcı",
      bill: "Fatura",
      name: "İsim",
      tel: "Telefon",
      email: "E-posta",
      country: "Ülke",
      state: "Durum",
      city: "Şehir",
      address: "Adres",
      building_no: "Bina numarası",
      unit_no: "Birim numarası",
      postal_code: "Posta kodu",
      description: "Açıklama",
      order_delivered: "Sipariş teslim edildi.",
      delivery_time: "Teslimat süresi",
      tracking_code: "İzleme kodu",
      tracking_url: "İzleme URL'si",

      notifications: {
        confirm_delivery: "Siparişiniz onaylandı.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Malların orijinallik garantisi",
      return: "Dönüş",
      table: {
        product: "Ürün adı",
        count: "Saymak",
        unit_price: "Birim fiyat",
        total_price: "Toplam fiyat",
        discount: "İndirim",
        final_price: "Son fiyat",
        returned: "İade",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Dönüş",
    count_input: "İade edilen ürün sayısı",
    count_input_message: "Kaç tane dönüyorsun?",
    reason_input: "dönüş nedeni",
    reason_input_message: "Bu öğeyi iade etme nedenini seçin.",
    note_input: "Açıklama",
    note_input_hint: "Referans nedenini açıklayın ..",
    note_input_message:
      "Gerekirse bu öğeye başvurma nedenini açıklayın.",
    media_message:
      "Ürün durumu bilgileri için daha iyi destek almak için ürünün görselini, sesini veya videosunu buraya yükleyebilirsiniz. Dosyayı seçmek otomatik olarak gönderecek ve onaylayacaktır. ",
    video: "Video",
    voice: "Ses",
    add_action: "İade talebi gönder",
    notifications: "Tavsiye talebiniz başarıyla kaydedildi.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "Emir",
    info: {
      title: "Satın Alınan Sanal Ürün",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Kişisel bilgilerim",
    name: "İsim",
    email: "E-posta",
    tel: "telefon",
    identity: "kimlik doğrulama",
    success_kyc: "Onaylanmış KYC",
    club: "Kullanıcı seviyesi",
    subscription: "Haber aboneliği",
    leave_shop: "Bu mağazadan ayrıl ve tüm müşteri seviyesini kaldır",
    leave_shop_action: "dükkandan ayrıl",
    leave_dialog: {
      title: "dükkandan ayrıl",
      message:
        "Bu mağazaya abone olmak sipariş bilgilerinizi ve kayıtlarınızı silmez.",
      action: "Terk etmek",
    },
    notifications: {
      leave_success: "dükkandan ayrıl",
    },
    club_table: {
      discount: "İndirim",
      limit: "sınır",
      currency: "Para birimi",
      free_shipping: "Ücretsiz kargo",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "Alışveriş Sepeti",
    total_price: "Toplam tutar",
    shipping: "Nakliye maliyeti",
    free_shipping: "Ücretsiz kargo",
    shipping_not_pay: "İçermez",
    total_discount: "Toplam indirim",
    customer_club: "Müşteri Kulübü Üyesi",
    customer_club_discount: "Üye İndirimi",
    final_price: "Son ödeme",
    lead_time: "Hazırlanma zamanı",
    lead_time_unit: "saat",
    receive_time: "Alma zamanı",
    select_time: "Teslimat Süresini Seçin",
    no_select_time: "Hazır olduğunda gönder.",
    transportation_type: "araç cinsi",
    days_input: "Teslimat günleri",
    days_input_label: "Günler",
    days_input_no_data: "En az bir gün seçin",
    time_input: "Teslimat süresi",
    time_input_label: "Teslimat",
    time_input_label_no_data: "En az bir zaman aralığı seçin",
    support_cod: "Kapıda ödeme",
    not_support_cod: "Yerel olarak ödeme yapılamıyor!",
    final_confirm_action: "Son sipariş onayı",
    pay_and_complete_action: "Şimdi öde",
    pre_confirm_service: "İstek gönderin",

    errors: {
      no_address: "Siparişinizin gönderilmesini istediğiniz adresi seçin.",
      no_phone: "Malların alınmasını koordine etmek için bir irtibat numarası girin.",
      select_billing_country: "Fatura adresinizin bulunduğu ülkeyi seçin",
      select_billing_state: "Vergi bölgenizi seçin",
    },
    same_billing_address: "Fatura bilgileri, alıcı bilgileriyle aynı",
    custom_billing_info: "Farklı fatura bilgileri",
    basket_empty: "Sepet boş",
    extra_shipping_count: "{count} paket alacaksınız.",
    select_location_error:
      "Gönderinin alındığı yeri harita üzerinde bulun ve alıcının tam adresini belirlemek için haritanın ortasındaki göstergeye tıklayın.",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "saat",
    count_input: "Saymak",

    price_changed: "Fiyat değişti. yeni fiyat:",
    offer: "{count}x öğeyi %{percent} indirimle alın",
    offer_free: "{count}x ücretsiz kazanın",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "Adresim",
    new_action: "Yeni adres",
    receiver: "Alıcı",
    address: "Adres",
    building_no: "plaka",
    building_unit: "birim",
    postcode: "Posta kodu",
    tel: "telefon",
    description: "Not",

    map: {
      title: "Adresim",
      confirm: "Adresim",
      address_type: "Adres",
      receptor_type: "Alıcı",
    },
    add_dialog: {
      title: "Yeni Adres Adı",
      message: "Yeni bir adres için bir başlık girin.",
      address_name_input: "Adres (gerekli)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "İade talepleri",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "istek listesi",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Yorumlarım",
    first_post: "İlk gönderi",
    last_edit: "Son düzenleme",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Hediye Kartlarım",
    add_action: "Kart ekle",
    add_card_dialog: {
      title: "Hediye Kartı Ekle",
      message:
        "Kart numarasını ve güvenlik kodunu girin. Hesabınıza bir hediye çeki eklenecektir.",
      card_number_input: "kart numarası",
      info: "Not: Mağazadan satın alırken size hediye çeki ile ödeme seçeneği gösterilecektir. Bu seçeneği seçtiğinizde, yükleme bakiyenizin tutarı sipariş tutarından düşülecektir. ",
      add_action: "Kart Kaydı",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Ürün Karşılaştır",
    action_button: "karşılaştırmak",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "Karşılaştırma listesine ürün eklenmedi.",
      price: "Fiyat",
      type: "Tip",
      brand: "Marka",
      warranty: "Garanti",
      variants_comparison: "Ürün çeşitliliğini karşılaştırın",
      spec: "Teknik özellikler",
      pros: "Artıları",
      cons: "Eksileri",
      user_review: "Kullanıcı yorumları",
      rating: "Değerlendirme",
      rating_count: "İnceleme sayısı",
      info: "Bu ürün karşılaştırma tablosunu aşağıdaki linki göndererek arkadaşlarınızla paylaşabilir veya daha sonra bu linki kaydederek ulaşabilirsiniz.",
      copy_action: "Karşılaştırma Bağlantısını Kopyala",
      check_list: ["Evet", "Var"],
      cross_list: ["Hayır", "Yapmadı"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Sadece orijinaller",
    only_has_discount: "Sadece indirimli",
    price_range: "Fiyat aralığı",
    brands: "Marka",
    main_shop_page: "Mağaza ana sayfası",
    home: "Ev",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Sayın {user}, Bu ürünü satın aldınız. Bu ürün hakkında ne düşünüyorsunuz?",
    notification: {
      title: "Tebrikler",
      message: "Yorumunuz kaydedildi.",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Blog",
    add_new_blog: "Yeni Blog",
    popular: "Popüler",
    topics: "Konular",
    suggestions: "Öneriler",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "Hakkımızda",
    terms: "Kullanım Şartları",
    privacy: "Gizlilik Politikası",
    contact_us: "Bize Ulaşın",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Bize ulaşın formu",
    name: "İsim",
    email: "E-posta",
    phone: "Telefon",
    message: "İleti",
    notifications: {
      success: "Mesajınız gönderildi.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Ödeme onaylama",
      payment_success: "Ödeme tamamlandı.",
      buy_title: "Satın almak",
      pay_by_giftcards: "Siparişiniz bir hediye kartı ile ödendi.",
      free_order: "Siparişiniz ücretsizdir.",
      pay_by_cod: "Siparişiniz kapıda ödeme olarak eklenmiştir.",
      pay_by_dir:
        "Siparişiniz başarıyla eklendi. Artık doğrudan havale ile ödeme yapabilir ve ardından ödeme dekontunu sipariş sayfasına yükleyebilirsiniz.",
      pay_title: "Ödeme",
      qr_code_payment: "Ödeme QR kodu adresi oluşturuldu.",
      connecting_to_online_gateway: "Çevrimiçi ödeme ağ geçidine bağlanılıyor.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Başlamak için kalan",
    title_between_start_end: "Sona kaldı",
    title_after_end: "bitmiş",
    title_no_start_end: "Süre olmadan!",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Sipariş başına bir hediye alabilirsiniz.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Kupon Kodu",
    add_coupon: "Kupon ekle",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "Avokado formu etkin değil!",
    last_update: "Son Güncelleme:",
    step1:
      "1. Sipariş vermek istediğiniz ürünün adını ve detaylarını girip Ekle butonuna tıklayınız.",
    title_plc: "Ürünün adını girin.",
    description_plc: "Daha fazla ürün açıklamanız var mı?",
    link_plc: "Ürüne bir bağlantınız var mı?",
    image: "Ürün resmi",
    image_msg: "Gerekirse ürün görselini gönderebilirsiniz.",
    add_item: "Öğe eklemek",
    items_list: "Talep edilen ürünlerin listesi",
    currency_msg: "Bu siparişin tutarını bu para birimiyle ödemeniz gerekir.",
    step2:
      "2. İstenen tüm öğeleri ekledikten sonra, sipariş inceleme isteği düğmesine tıklayın. Bu aşamada siparişi inceleyip size fiyat hakkında bilgi vereceğiz. Bu linke tıklayarak fiyat ve ödeme linkini görebileceksiniz.",
    order_action: "Sipariş kaydı",
    show_all: "Hepsini Göster ↓",
    show_accepted: "Doğrulanmış Öğeleri Göster",
    last_orders: "En son siparişlerinizin listesi",
    pending_status: "inceleme altında",
    check_now: "Sipariş kontrolü",
    add_new_order: "Yeni Siparişi Kaydet",
    pay_online: "çevrimiçi öde",
    pricing_not_completed_message:
      "Siparişiniz inceleniyor. Siparişiniz en kısa sürede incelenip fiyatlandırılacak ve siparişi ödeyebileceksiniz.",

    delete_item_dialog: {
      title: "Ürünü alışveriş sepetinden çıkarın",
      message: "Bu ürünü sepetten silmek istiyor musunuz?",
      action: "Evet, sil",
    },

    notifications: {
      order_success: "Siparişiniz başarıyla verildi.",
      delete_success: "Öğe silindi.",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Sipariş oluşturma",
    message:
      "Ürün kodunu okutarak satın almak istediğiniz ürünlerin listesini oluşturun.",

    currency_msg: "Ödemek istediğiniz para birimi.",
    order_action: "Ödeme",
    add_new_order: "Yeni sipariş",
    continue_order: "Siparişe devam et",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Ödeme makbuzunun resmini yükleyin.",
    upload_payment_receipt_done:
      "✔ Fiş resmini zaten yüklediniz, onayımızı bekleyin. Değiştirmeniz gerekiyorsa, önceki resmi yenisiyle değiştirebilirsiniz.",
    public_form_title: "Para transferi için hesap bilgileri",
  },
};
