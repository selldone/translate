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
  surveys: ["Çok fakir", "Fakir", "Orta", "İyi", "Harika"],

  /** @see SFooterSection **/
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

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Hepsi satıldı",
    review_unit: "Gözden geçirmek",
    not_original: "Orjinal değil",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "filtre",
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
    nothing: "Hiç bir şey",
    most_views: "Çoğu görüntüleme",
    most_likes: "En popüler",
    most_recent: "en yeni",
    most_sell: "En iyi satış",
    cheapest: "En ucuz",
    most_expensive: "En pahalı",
    only_available: "Mevcut",
    view_mode: {
      normal: "Orta",
      grid: "Kafes",
      list: "Liste",
      insta: "Insta görünümü",
    },
  },

  /** @see SProductOverview **/
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
    waiting_for_auction: "Açık artırmayı mı bekliyorsun?",
    inform_auction: "Bana açık artırmadan bahset",
    return_in_days: "{days} Gün Garanti İade",
    support24h7: "7 gün 24 saat destek",
    support_normal: "Çalışma saatleri desteği",
    original_guarantee: "Orijinal garanti",
    cod_payment: "Kapıda ödeme desteği",

    pros: "Artıları",
    cons: "Eksileri",

    external_link: "Daha fazla oku",
    notifications: {
      congratulation: "Tebrikler",
      waiting_list_add_success:
        "Bu ürün açık artırmaya çıktığında sizi bilgilendireceğiz.",
      waiting_list_delete_success: "Açık artırma bekleme listesinden çıktınız.",
    },

    offer_message: "{min_quantity} satın alın Bu öğeler için %{percent} indirim kazanın",
    up_to: "Sipariş başına en fazla {per_order}x",
    get_free: "ÜCRETSİZ EDİN",
    get_off: "%{percent} İNDİRİM ALIN",
    select_a_vendor_message: "Lütfen bir satıcı seçin.",
    product_description_header: "{product} tanıtılıyor",
  },

  /** @see SShopBuyButton **/

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
    subscribe_now: "Şimdi Abone Ol",
    unsubscribe: "abonelikten çık",
    select_a_subscription_plan: "Önce bir plan seçin!",
    manage_subscriptions: "Abonelikleri Yönet",
    notifications: {
      inform_add_success: "Kullanılabilir olduğunda size haber vereceğiz.",
      inform_remove_success: "Bekleme listesinden çıkarıldınız.",
    },
    zip_pin_input: "Posta kodu / PIN",
    zip_pin_not_available_msg: "Bu lokasyonda mevcut değil!",
    zip_pin_placeholder: "Posta Kodu/PIN Kodunu Seçin...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Gözden geçirmek",
    spec: "Özellik",
    comments: "Yorumlar",
    price: "Fiyat",
    rate: "Oran",
    comment: "Yorum",
    warranty: "Garanti",
    return_policy: "İade politikasi",
    guide: "Kılavuz",
    shipping: "Nakliye",
    related_products_title: "İlgili ürünler",
    related_categories_title: "Koleksiyonlarda keşfedin",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Sipariş Geçmişi",
      profile: "Benim profilim",
      favorites: "Favori Öğeler",
      gift_cards: "Hediye Kartları",
      return_requests: "İade Edilen Siparişler",
      basket: "Alışveriş Sepeti",
    },
    user_menu: {
      my_shops: "Mağazalarım",
      go_to_admin: "{shop_name}'yi yönetin",
      exit_from: "{shop_name} oturumunu kapat",
      chips: "{chips} çip",
    },
    login_to_shop: "Mağazaya Giriş Yap",
    login_to_shop_short: "Giriş yapmak",
    item_in_basket_message: "{count} Bu ürün sepetinizde.",
    search_title: "{shop_name} mağazasında ara",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Araba",
    basket_is_empty: "Sepetiniz boş.",
    total_price: "Toplam",
    view_basket: "Sepetiniz",
    more: "Daha ...",
    accept_and_pay: "Çıkış yapmak",
    items: "Öğeler)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Reddedilmiş",
    table: {
      code: "Sipariş Kodu",
      reserved: "Tarih",
      delivery_state: "Teslim durumu",
      price: "Toplam fiyat",
      status: "Ödeme Durumu",
    },
  },
  /** {@see SOrdersList} **/
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

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Hediye kartı",
      comments: "Yorumlar",
      favorites: "Favoriler",
      return_requests: "İadeler",
      addresses: "adresler",
      profile: "Profil",
      orders: "Emirler",
      wallets: "Cüzdanlar",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Cüzdanlarım",
    subtitle: "Uygunsanız ve bir geri ödeme programı etkinse, siparişinizin bir kısmı cüzdanınıza aktarılır. Bu tutarı bir sonraki alışverişinizde kullanabilirsiniz."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:"Cüzdan bakiyem",
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Sipariş",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Ödeme",
      payment_waiting: "Ödeme için bekleniyor",
      payment_completed: "Paralı",
      table: {
        title: "Başlık",
        amount: "Miktar",
        description: "Tanım",
      },
      total_payment: "Ödenen miktar",
      discount: "İndirim",
      discount_code: "İndirim kodu",
      delivery_fee: "Nakliye maliyeti",
      delivery_fee_after: "Teslimat ödenmedi",

      total_price: "Toplam Ürün Fiyatı",
      total_items_discount: "Ürün İndirimi",
      total_price_after_offers: "Teklifleri uyguladıktan sonra toplam",
      total_order_price_before_tax: "Vergi Öncesi Toplam Fiyat",

      buyer_payment: "Alıcı ödeme tutarı",

      payment_is_in_require_capture_message:
        "Ödemenizi aldık ancak henüz hesaba geçmedi.",
      settle_the_earlier_bill_first: "Önce önceki hesabı öde!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Teslimat",
      subtitle: "alıcı bilgileri",
      confirm_received_action: "Ürün Fişini Onayla",
      confirm_received_info:
        "Siparişi aldıysanız onay düğmesine tıklayın. Gerekirse, onay alırsanız bir tavsiye gönderebileceksiniz.",
      Recipient: "alıcı",
      bill: "Fatura",
      name: "İsim",
      tel: "Telefon",
      email: "E-posta",
      country: "Ülke",
      state: "Belirtmek, bildirmek",
      city: "Şehir",
      address: "Adres",
      building_no: "Bina numarası",
      unit_no: "Birim numarası",
      postal_code: "Posta kodu",
      description: "Tanım",
      order_delivered: "Sipariş teslim edildi.",
      delivery_time: "Teslimat süresi",
      tracking_code: "İzleme kodu",
      tracking_url: "İzleme URL'si",

      notifications: {
        confirm_delivery: "Siparişiniz onaylandı.",
      },
    },
    /** {@see SShopBasketItemsList} **/
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

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Dönüş",
    count_input: "İade edilen ürün sayısı",
    count_input_message: "Kaç ürün iade ediyorsunuz?",
    reason_input: "iade nedeni",
    reason_input_message: "Bu öğeyi iade etme nedenini seçin.",
    note_input: "Tanım",
    note_input_hint: "İade sebebini açıklayın..",
    note_input_message:
      "Gerekirse bu öğeyi iade etme nedenini açıklayın.",
    media_message:
      "Ürün durumu bilgileri için daha iyi destek almak için ürünün görselini, sesini veya videosunu buraya yükleyebilirsiniz. Dosyayı seçmek otomatik olarak gönderecek ve onaylayacaktır.",
    video: "Video klip",
    voice: "Ses",
    add_action: "iade talebi gönder",
    notifications: "İade talebiniz başarıyla kaydedildi.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Sipariş",
    info: {
      title: "Satın Alınan Sanal Ürün",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Kişisel bilgilerim",
    name: "İsim",
    email: "E-posta",
    tel: "telefon",
    identity: "kimlik doğrulama",
    success_kyc: "Doğrulanmış KYC",
    no_kyc: "KYC yok",
    club: "Kullanıcı seviyesi",
    subscription: "Haber aboneliği",
    leave_shop: "Bu mağazadan ayrıl ve tüm müşteri seviyesini kaldır",
    leave_shop_action: "dükkandan ayrıl",
    edit_personal_info: "Kişisel bilgileri düzenle",
    leave_dialog: {
      title: "dükkandan ayrıl",
      message:
        "Bu mağazaya abone olmak, sipariş bilgilerinizi ve kayıtlarınızı silmez.",
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

    my_profile: {
      title: "Profilim",
      subtitle: "Bu, mağaza için müşteri profil bilgilerimdir.",
      edit_action: "Profili düzenle"
    },
    subscribe_status: {
      subscribed: "En son haberleri ve kampanyaları e-posta ile almak için aboneliğim var.",
      unsubscribed: "E-posta ile herhangi bir haber veya kampanya almak için aboneliğim yok."
    },
    my_club: {
      subtitle: "Kulüp seviyem ve avantajları."
    },
    kyc: {
      subtitle: "Bu, küresel kimlik bilgilerimdir."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
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
    lead_time_unit: "Saat",
    receive_time: "Tercih edilen teslimat süresi",
    select_time: "Teslimat Süresini Seçin",
    no_select_time: "Mümkün olan en kısa sürede",
    transportation_type: "Nakliye türü",
    days_input: "Teslimat günleri",
    days_input_label: "günler",
    days_input_no_data: "En az bir gün seçin",
    time_input: "Teslimat süresi",
    time_input_label: "Teslimat",
    time_input_label_no_data: "En az bir zaman aralığı seçin",
    support_cod: "Kapıda ödeme",
    not_support_cod: "Yerel olarak ödeme yapılamıyor!",
    final_confirm_action: "Son sipariş onayı",
    pay_and_complete_action: "Şimdi öde",
    pre_confirm_service: "İstek gönderin",
    cross_selling_discount: "Koleksiyon indirimi",

    errors: {
      no_address: "Siparişinizin gönderilmesini istediğiniz adresi seçin.",
      no_phone: "Malların alınmasını koordine etmek için bir irtibat numarası girin.",
      select_billing_country: "Fatura adresinizin bulunduğu ülkeyi seçin",
      select_billing_state: "Vergi bölgenizi seçin",
    },
    same_billing_address: "Fatura bilgileri, Alıcı bilgileriyle aynı",
    same_billing_address_desc:
      "Fatura adresi kargo adresi ile aynıdır.",
    custom_billing_info: "Farklı fatura bilgileri",
    custom_billing_info_desc:
      "VERGİ numaranızı girebilir ve faturalandırma için farklı bir adres belirleyebilirsiniz.",
    basket_empty: "sepet boş",
    extra_shipping_count: "{count} paket alacaksınız.",
    select_location_error:
      "Gönderinin alındığı yeri harita üzerinde bulun ve alıcının tam adresini belirlemek için haritanın ortasındaki göstergeye tıklayın.",

    billing_business_desc: "Bu, VERGİ numarasına sahip bir işletme hesabıdır.",
    billing_personal_desc: "Kişisel bir hesaptır.",

    no_billing_title: "faturalandırma yok",
    no_billing_desc: "Fatura adresini boş bırakın.",

    can_pay_cod_message:"Bu sipariş için teslimatta nakit ödeme yapabilirsiniz.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Saat",
    count_input: "Saymak",

    price_changed: "Fiyat değişti. yeni fiyat:",
    offer: "%{percent} indirimle {count}x öğe alın",
    offer_free: "{count}x ücretsiz kazanın",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Adresim",
    subtitle:"Kayıtlı adreslerinizi burada görüntüleyin ve kolayca yeni bir adres ekleyin.",
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
      confirm: "Adres kaydı",
      address_type: "Adres",
      receptor_type: "alıcı",
    },
    add_dialog: {
      title: "Yeni Adres Adı",
      message: "Yeni bir adres için bir başlık girin.",
      address_name_input: "Adres (gerekli)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "İade talepleri",
    subtitle:"İade taleplerinizi burada görüntüleyin. İade politikası olan ürünler için sipariş sayfasından iade talebi gönderebilirsiniz.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "istek listesi",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Yorumlarım",
    first_post: "İlk gönderi",
    last_edit: "Son düzenleme",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Hediye Kartlarım",
    add_action: "Kart ekle",
    add_card_dialog: {
      title: "Hediye Kartı Ekle",
      message:
        "Kart numarasını ve güvenlik kodunu girin. Hesabınıza bir hediye kartı eklenecektir.",
      card_number_input: "Kart numarası",
      info: "Not: Mağazadan satın alırken size hediye çeki ile ödeme seçeneği gösterilecektir. Bu seçeneği seçtiğinizde, yükleme bakiyenizin tutarı sipariş tutarından düşülecektir.",
      add_action: "Kart Kaydı",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Ürünü Karşılaştır",
    action_button: "Karşılaştırmak",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Karşılaştırma listesine ürün eklenmedi.",
      price: "Fiyat",
      type: "Tip",
      brand: "Marka",
      warranty: "Garanti",
      variants_comparison: "Ürün çeşitlerini karşılaştırın",
      spec: "Teknik özellikler",
      pros: "Artıları",
      cons: "Eksileri",
      user_review: "Kullanıcı yorumları",
      rating: "Değerlendirme",
      rating_count: "İnceleme sayısı",
      info: "Bu ürün karşılaştırma tablosunu aşağıdaki bağlantıyı göndererek arkadaşlarınızla paylaşabilir veya daha sonra bu bağlantıyı kaydederek erişebilirsiniz.",
      copy_action: "Karşılaştırma Bağlantısını Kopyala",
      check_list: ["Evet", "Vardır"],
      cross_list: ["Numara", "yok"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Sadece orijinaller",
    only_has_discount: "sadece indirimli",
    price_range: "Fiyat aralığı",
    brands: "Marka",
    main_shop_page: "Mağaza ana sayfası",
    home: "Ev",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Sayın {user}, Bu ürünü satın aldınız. Bu ürün hakkında ne düşünüyorsunuz?",
    notification: {
      title: "tebrikler",
      message: "Yorumunuz kaydedildi.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Yazılar",
    add_new_blog: "Yeni yazı",
    popular: "Popüler",
    topics: "Konular",
    suggestions: "Öneriler",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Hakkımızda",
    terms: "Kullanım Şartları",
    privacy: "Gizlilik Politikası",
    contact_us: "Bize Ulaşın",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Bize ulaşın formu",
    name: "İsim",
    email: "E-posta",
    phone: "Telefon",
    message: "İleti",
    notifications: {
      success: "Mesajınız gönderildi.",
    },
    submitted_title: "Bize Ulaştığınız İçin Teşekkür Ederiz!",
    submitted_message:
      "Bizimle iletişime geçmek için zaman ayırdığınız için teşekkür ederiz. Mesajınız alındı ve ekibimiz şu anda onu inceliyor. En kısa sürede yanıt vereceğiz. Bu süre zarfında gösterdiğiniz sabır için teşekkür ederiz. İlginiz ve geri bildirimleriniz bizim için önemlidir ve size mümkün olan en iyi desteği sağlamaya kararlıyız.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Ödeme onaylama",
      payment_success: "Ödeme tamamlandı.",
      buy_title: "Satın almak",
      pay_by_giftcards: "Siparişiniz bir hediye kartı ile ödenmiştir.",
      free_order: "Siparişiniz ücretsizdir.",
      pay_by_cod: "Siparişiniz kapıda ödeme olarak eklenmiştir.",
      pay_by_dir:
        "Siparişiniz başarıyla eklendi. Artık doğrudan para transferi ile ödeme yapabilir ve ardından ödeme makbuzunu sipariş sayfasına yükleyebilirsiniz.",
      pay_title: "Ödeme",
      qr_code_payment: "Ödeme QR kodu adresi oluşturuldu.",
      connecting_to_online_gateway: "Çevrimiçi ödeme ağ geçidine bağlanma.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Başa kaldı",
    title_between_start_end: "Sonuna kadar kaldı",
    title_after_end: "bitmiş",
    title_no_start_end: "Süre olmadan!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Sipariş başına bir hediye alabilirsiniz.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kupon Kodu",
    add_coupon: "Kupon ekle",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Avokado formu etkin değil!",
    last_update: "Son Güncelleme:",
    step1:
      "1. Sipariş etmek istediğiniz ürünün adını ve detaylarını girin ve Ekle düğmesine tıklayın.",
    title_plc: "Ürünün adını girin.",
    description_plc: "Daha fazla ürün açıklaması var mı?",
    link_plc: "Ürünün linki var mı?",
    image: "Ürün resmi",
    image_msg: "Gerekirse ürün resmini gönderebilirsiniz.",
    add_item: "Öğe eklemek",
    items_list: "Talep edilen ürünlerin listesi",
    currency_msg: "Bu siparişin tutarını bu para birimiyle ödemeniz gerekir.",
    step2:
      "2. İstenen tüm öğeleri ekledikten sonra, sipariş inceleme isteği düğmesine tıklayın. Bu aşamada siparişi inceleyip size fiyat hakkında bilgi vereceğiz. Bu linke tıklayarak fiyat ve ödeme linkini görebileceksiniz.",
    order_action: "Sipariş kaydı",
    show_all: "Hepsini Göster ↓",
    show_accepted: "Onaylanmış Öğeleri Göster",
    last_orders: "Son siparişlerinizin listesi",
    pending_status: "inceleme altında",
    check_now: "Sipariş kontrolü",
    add_new_order: "Yeni Sipariş Ver",
    pay_online: "çevrimiçi ödeme",
    pricing_not_completed_message:
      "Siparişiniz inceleniyor. Siparişiniz yakında incelenip fiyatlandırılacak ve siparişi ödeyebileceksiniz.",

    select_address_message:
      "Lütfen adresinizi girin ve ardından siparişi gönderebilirsiniz.",

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

  /** {@see SHyperCart} **/
  hyper: {
    title: "Sipariş oluşturma",
    message:
      "Ürün kodunu okutarak satın almak istediğiniz ürünlerin listesini oluşturun.",

    currency_msg: "Ödeme yapmak istediğiniz para birimi.",
    order_action: "Ödeme",
    add_new_order: "Yeni sipariş",
    continue_order: "Siparişe devam et",

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

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Ödeme makbuzunun resmini yükleyin.",
    upload_payment_receipt_done:
      "✔ Fiş resmini zaten yüklediniz, onayımızı bekleyin. Değiştirmeniz gerekiyorsa, önceki resmi yenisiyle değiştirebilirsiniz.",
    public_form_title: "Para transferi için hesap bilgileri",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Yapılacaklar listesi",
      message: "Yapmak istediğiniz işin başlıklarını belirtin ve ne kadar ilerlediğini alıcıya bildirin.",
    },
    booking: {
      title: "Rezervasyon / Rezervasyon",
      message: "Bu sipariş belirli bir zamanda işlenecektir, müşteri istediği süreyi seçmiştir, seçilen dönemde herhangi bir değişiklik yapmak istiyorsanız müşteriye bildiriniz.",

      selected_checkin: "Müşteri tarafından seçilen giriş",
      selected_checkout: "Müşteri tarafından seçilen çıkış",
      change_days_question:
        "Müşterinin seçtiği günlerde değiştirmeniz gerekiyor mu?",
      show_calendar: "Sipariş Takvimini Göster",
    },
    pricing: {
      title: "fiyatlandırma",
      message: "Bu hizmet için ne kadar ücret alıyorsunuz?",
    },
    subscription: {
      title: "abonelik",
      message:
        "Bu hizmeti günlük olarak satın alarak abonelik süresini seçebilirsiniz. Halihazırda girmiş olduğunuz varsayılan değerleri değiştirmek isteyip istemediğinizi alıcıya bildirin.",
      duration: "Abonelik Süresi",
    },
    charge: {
      title: "Şarj etmek",
      message:
        "Bu öğe için bir ücret belirlediniz. Müşteri tarafından satın alınan ürün için ücretlendirme tutarını değiştirebilirsiniz.",
      charge: "Şarj etmek",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Erişimin kontrol edilmesi bekleniyor...",
    no_access_message:
      "Maalesef mağazamıza erişiminiz yok.<br/> Lütfen bizimle iletişime geçin.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Siparişi paylaş",
    title: "Bu siparişi başkalarıyla paylaşın.",
    message:
      "Güvenli bir bağlantıdır, yalnızca tanıdıklarınızla paylaşın. Bu bağlantıya sahip olan herkes siparişinizi çoğaltabilir ve seçilen adresi görebilir. Mevcut sepetiniz hakkında bilgi içerecektir.",
    valid_period: "Bu bağlantı 48 saat sonra sona erecek.",
    import_order_action: "İthalat siparişi",
    retrieve_dialog_title: "Harici siparişi al",
    address_included: "Sepet öğelerini paylaş + Adres",
    address_excluded: "Sadece sepet ürünlerini paylaş",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Fiyat:% s",
    inventory: "Envanter",
    discount: "İndirim",
  },

  rating: {
    product_rating_message:
      "Bu ürün, 5 üzerinden {rate} puan aldı ve {rate_count} kişi tarafından derecelendirildi.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Keşfetmek!",
      same_tags_subtitle: "Daha dikkat çekici ilgili öğeler bulun.",
      same_category_subtitle: "Bu kategoride daha dikkat çekici öğeler bulun.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "{product} ile birlikte sipariş edin",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "{vendor} mağazasını görüntüle",
  },

  login: {
    welcome: "Hoş geldin",
  },


};
