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
  surveys: ["miskin banget", "mlarat", "Lumrah", "apik", "Banget"],

  /** @see SFooterSection **/
  footer: {
    map: "peta",
    email: "Imèl",
    phone: "Telpon",
    address: "alamat",

    copyright:
      "Panggunaan isi mung kanggo tujuan non-komersial lan kanthi nyebutake sumber (tautan karo {shop_title}). Kabeh hak dilindhungi kanggo {shop_title}.",
    powered_by: "Didukung karo",
    privacy: "Kabijakan privasi",
    term_of_use: "Katentuan Pangginaan supados langkung",
    shop_app_setting: "Setelan toko & GDPR",

    dialog_setting: {
      title: "Setelan Aplikasi Toko",
      app_list: "Dhaptar aplikasi",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Entèk",
    review_unit: "ulasan",
    not_original: "Ora asli",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Nyaring",
    native: {
      title: "Mlebu aplikasi",
      message:
        "Aplikasi iki mbutuhake akses menyang informasi akun toko sampeyan. Iki kalebu akses menyang jeneng, nomer kontak, alamat, surel, riwayat pesenan, nggawe pesenan, lan ngirim komentar ing toko iki.",
      message_bold:
        "Priksa manawa sampeyan nggunakake aplikasi toko resmi kanggo mlebu ing toko iki.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Urut miturut",
    title_small: "Urut miturut..",
    nothing: "ora ana apa-apa",
    most_views: "Paling views",
    most_likes: "Paling populer",
    most_recent: "Paling anyar",
    most_sell: "Paling laris",
    cheapest: "paling murah",
    most_expensive: "Paling larang",
    only_available: "kasedhiya",
    view_mode: {
      normal: "Standar",
      grid: "Kothak",
      list: "Dhaptar",
      insta: "Gaya Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "palsu",
    action: "Lelang",
    compare_limit: "Wates 10 barang",
    compare_add: "Tambah kanggo Mbandhingake",
    compare_be_in_list: "Ing dhaftar mbandhingaké",

    type: "Jinis",
    brand: "Merk",
    category: "Babagan",
    discount: "Diskon",
    track_price: "rega trek",
    waiting_for_auction: "Nunggu lelang?",
    inform_auction: "Ngomong babagan lelang",
    return_in_days: "Garansi bali {days} dina",
    support24h7: "Dhukungan 24 jam 7 dina",
    support_normal: "Dhukungan jam kerja",
    original_guarantee: "Garansi asli",
    cod_payment: "Dhukungan awis ing pangiriman",

    pros: "Kaluwihan",
    cons: "Kakurangan",

    external_link: "Waca liyane",
    notifications: {
      congratulation: "sugeng rawuh",
      waiting_list_add_success:
        "Kita bakal menehi kabar nalika produk iki dilelang.",
      waiting_list_delete_success: "Sampeyan metu saka daftar tunggu lelang.",
    },

    offer_message: "Tuku {min_quantity} entuk potongan {percent}% kanggo barang iki",
    up_to: "Nganti {per_order}x saben pesenan",
    get_free: "GRATIS",
    get_off: "Entuk potongan {percent}%",
    select_a_vendor_message: "Mangga pilih vendor.",
    product_description_header: "Ngenalake {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Nunggu kasedhiyan",
    inform_me_when_available: "Ngenteni iki?",
    pay_buy: "Mbayar & Tuku",
    quantity: "Jumlah",
    quantity_in_basket: "Barang ing kranjang",
    count_unit: "x",
    remove: "Mbusak",
    add_to_basket: "Tambah menyang kranjang",
    buy: "tuku",
    subscribe_now: "Langganan Saiki",
    unsubscribe: "Batal langganan",
    select_a_subscription_plan: "Pilih rencana dhisik!",
    manage_subscriptions: "Ngatur langganan",
    notifications: {
      inform_add_success: "Kita bakal ngandhani yen wis kasedhiya.",
      inform_remove_success: "Sampeyan wis dibusak saka dhaptar tunggu.",
    },
    zip_pin_input: "Kode pos / PIN",
    zip_pin_not_available_msg: "Ora kasedhiya ing lokasi iki!",
    zip_pin_placeholder: "Pilih kode pos/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Katrangan",
    spec: "Spesifikasi",
    comments: "Komentar",
    price: "Rega",
    rate: "Nilai",
    comment: "Komentar",
    warranty: "Garansi",
    return_policy: "Kawicaksanan bali",
    guide: "Panuntun",
    shipping: "Pengiriman",
    related_products_title: "produk sing gegandhengan",
    related_categories_title: "Temokake ing koleksi",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Riwayat Pesenan",
      profile: "Profil Kula",
      favorites: "Barang favorit",
      gift_cards: "Kertu hadiah",
      return_requests: "Wangsul pesenan",
      basket: "Kréta Blanja",
    },
    user_menu: {
      my_shops: "Toko Kula",
      go_to_admin: "Atur {shop_name}",
      exit_from: "Metu saka {shop_name}",
      chips: "{chips} Kripik",
    },
    login_to_shop: "Mlebu menyang Toko",
    login_to_shop_short: "mlebu",
    item_in_basket_message: "{count} Barang iki ana ing kranjang sampeyan.",
    search_title: "Telusuri ing toko {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "grobag",
    basket_is_empty: "Krétamu kosong.",
    total_price: "Gunggung rega",
    view_basket: "Kréta Panjenengan",
    more: "Luwih akeh...",
    accept_and_pay: "Deloken",
    items: "Barang",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Ditolak",
    table: {
      code: "Kode pesenan",
      reserved: "Tanggal",
      delivery_state: "Status pangiriman",
      price: "Rega total",
      status: "Status Pembayaran",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Kode pesenan",
      items: "barang",
      reserved: "Tanggal",
      delivery_state: "Status paling anyar",
      price: "Rega total",
      status: "Status Pembayaran",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Kertu hadiah",
      comments: "Komentar",
      favorites: "Favorit",
      return_requests: "wangsul",
      addresses: "Alamat",
      profile: "profil",
      orders: "Pesenan",
      wallets: "Dompet",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Dompetku",
    subtitle: "Yen sampeyan layak lan program cashback aktif, sapérangan saka pesenan sampeyan bakal dikreditaké menyang dompet sampeyan. Dana iki bisa digunakaké kanggo tuku sabanjuré."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Saldo dompetku',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "dhawuh",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "pambayaran",
      payment_waiting: "Ngenteni bayaran",
      payment_completed: "Dibayar",
      table: {
        title: "judhul",
        amount: "Jumlah",
        description: "Katrangan",
      },
      total_payment: "Jumlah sing dibayar",
      discount: "Diskon",
      discount_code: "Kode diskon",
      delivery_fee: "ongkos kirim",
      delivery_fee_after: "Ora ana kiriman sing dibayar",

      total_price: "Rega total barang",
      total_items_discount: "Potongan barang",
      total_price_after_offers: "Gunggung sawisé penawaran ditrapake",
      total_order_price_before_tax: "Rega total sadurunge pajak",

      buyer_payment: "Jumlah pembayaran panuku",

      payment_is_in_require_capture_message:
        "Kita wis nampa pembayaran sampeyan, nanging durung diproses final.",
      settle_the_earlier_bill_first: "Bayar dhisik tagihan sadurungé!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Pangiriman",
      subtitle: "Informasi panuku",
      confirm_received_action: "Konfirmasi Penerimaan Produk",
      confirm_received_info:
        "Klik tombol konfirmasi yen sampeyan nampa pesenan. Yen perlu, sampeyan bakal bisa ngirim referral yen sampeyan nampa konfirmasi.",
      Recipient: "panampa",
      bill: "Faktur",
      name: "jeneng",
      tel: "Telpon",
      email: "Imèl",
      country: "negara",
      state: "negara",
      city: "kutha",
      address: "alamat",
      building_no: "Nomer bangunan",
      unit_no: "Nomer unit",
      postal_code: "kode pos",
      description: "Katrangan",
      order_delivered: "Pesen wis dikirim.",
      delivery_time: "wektu pangiriman",
      tracking_code: "Kode nelusuri",
      tracking_url: "Url nelusuri",

      notifications: {
        confirm_delivery: "Pesenan sampeyan wis dikonfirmasi.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Jaminan orisinalitas barang",
      return: "wangsul",
      table: {
        product: "Jeneng produk",
        count: "Jumlah",
        unit_price: "rega unit",
        total_price: "Rega total",
        discount: "Diskon",
        final_price: "Rega pungkasan",
        returned: "wangsul",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "wangsul",
    count_input: "Jumlah barang sing dibalekake",
    count_input_message: "Pira barang sing sampeyan bali?",
    reason_input: "Alasan kanggo bali",
    reason_input_message: "Pilih alesan kanggo mbalekake barang iki.",
    note_input: "Katrangan",
    note_input_hint: "Sebutno alasane mulih..",
    note_input_message:
      "Jlentrehake alesan mbalekake barang iki yen perlu.",
    media_message:
      "Sampeyan bisa ngunggah gambar, swara, utawa video produk ing kene supaya informasi status produk bisa didhukung luwih apik. Milih file bakal otomatis ngirim lan ngonfirmasi.",
    video: "Vidhio",
    voice: "Swara",
    add_action: "Kirimi panjalukan bali",
    notifications: "Panjaluk bali sampeyan wis kasil didaftar.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "dhawuh",
    info: {
      title: "Dituku Produk Virtual",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Informasi Pribadi Kula",
    name: "jeneng",
    email: "Imèl",
    tel: "Telp",
    identity: "Authentication",
    success_kyc: "KYC sing diverifikasi",
    no_kyc: "Ora ana KYC",
    club: "Tingkat pangguna",
    subscription: "Langganan warta",
    leave_shop: "Ninggalake toko iki lan mbusak kabeh level pelanggan",
    leave_shop_action: "Ninggalake toko",
    edit_personal_info: "Sunting informasi pribadhi",
    leave_dialog: {
      title: "Ninggalake toko",
      message:
        "Mbusak lengganan ing toko iki ora bakal mbusak informasi pesenan lan cathetan.",
      action: "ninggalake",
    },
    notifications: {
      leave_success: "Ninggalake toko",
    },
    club_table: {
      discount: "Diskon",
      limit: "watesan",
      currency: "mata uang",
      free_shipping: "Gratis ongkir",
    },

    my_profile: {
      title: "Profilku",
      subtitle: "Iki informasi profil pelanggan kanggo toko iki.",
      edit_action: "Sunting profil"
    },
    subscribe_status: {
      subscribed: "Aku langganan kanggo nampa kabar paling anyar lan promosi liwat imèl.",
      unsubscribed: "Aku ora langganan kanggo nampa kabar utawa promosi liwat imèl."
    },
    my_club: {
      subtitle: "Tingkat klubku lan manfaaté."
    },
    kyc: {
      subtitle: "Iki informasi identifikasi globalku."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Kréta Blanja",
    total_price: "Jumlah total",
    shipping: "ongkos kirim",
    free_shipping: "Gratis ongkir",
    shipping_not_pay: "Ora klebu",
    total_discount: "Diskon total",
    customer_club: "Anggota Klub Klien",
    customer_club_discount: "Diskon Anggota",
    final_price: "Pembayaran pungkasan",
    lead_time: "Wektu persiapan",
    lead_time_unit: "jam",
    receive_time: "Wektu pangiriman sing disenengi",
    select_time: "Pilih Wektu Pangiriman",
    no_select_time: "Sanalika bisa",
    transportation_type: "Jinis pengiriman",
    days_input: "Dina pangiriman",
    days_input_label: "dina",
    days_input_no_data: "Pilih paling sethithik sedina",
    time_input: "wektu pangiriman",
    time_input_label: "Pangiriman ing",
    time_input_label_no_data: "Pilih paling sethithik sak interval wektu",
    support_cod: "Bayar awis nalika dikirim",
    not_support_cod: "Ora bisa mbayar lokal!",
    final_confirm_action: "Konfirmasi pesenan pungkasan",
    pay_and_complete_action: "Mbayar saiki",
    pre_confirm_service: "Kirim panjalukan",
    cross_selling_discount: "Diskon koleksi",

    errors: {
      no_address: "Pilih alamat sing pengin dikirim pesenan sampeyan.",
      no_phone: "Ketik nomer kontak kanggo koordinasi panriman barang.",
      select_billing_country: "Pilih negara tagihan sampeyan",
      select_billing_state: "Pilih wilayah pajak sampeyan",
    },
    same_billing_address: "Info tagihan padha karo info panampa",
    same_billing_address_desc:
      "Alamat tagihan padha karo alamat pengiriman.",
    custom_billing_info: "Informasi tagihan sing beda",
    custom_billing_info_desc:
      "Sampeyan bisa ngetik nomer TAX lan nyetel alamat liyane kanggo tagihan.",
    basket_empty: "Kranjang kosong",
    extra_shipping_count: "Sampeyan bakal nampa {count} paket.",
    select_location_error:
      "Temokake papan panrimo kiriman ing peta lan klik ing indikator ing tengah peta kanggo nemtokake alamat sing tepat saka panampa.",

    billing_business_desc: "Iku akun bisnis karo nomer TAX.",
    billing_personal_desc: "Iku akun pribadi.",

    no_billing_title: "Ora ana tagihan",
    no_billing_desc: "Ninggalake alamat tagihan kosong.",

    can_pay_cod_message:"Sampeyan bisa mbayar pesenan iki kanthi awis nalika dikirim.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "jam",
    count_input: "Jumlah",

    price_changed: "Rega wis owah. Rega anyar:",
    offer: "Entuk {count}x barang kanthi potongan {percent}%",
    offer_free: "Entuk {count}x gratis",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Alamat Kula",
    subtitle:"Delengen alamat sing wis disimpen ing kéné lan tambahaké alamat anyar kanthi gampang.",
    new_action: "Alamat anyar",
    receiver: "Penerima",
    address: "alamat",
    building_no: "plat nomer",
    building_unit: "Satuan",
    postcode: "kode pos",
    tel: "Telp",
    description: "Cathetan",

    map: {
      title: "Alamat Kula",
      confirm: "Alamat registrasi",
      address_type: "alamat",
      receptor_type: "panampa",
    },
    add_dialog: {
      title: "Jeneng Alamat Anyar",
      message: "Ketik judhul kanggo alamat anyar.",
      address_name_input: "Alamat (dibutuhake)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Panjaluk bali",
    subtitle:"Delengen panyuwunan retur sampeyan ing kéné. Kanggo barang sing nduwèni kabijakan retur, sampeyan bisa ngirim panyuwunan retur ing kaca pesenan.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Dhaptar karep",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Komentar Kula",
    first_post: "kirim pisanan",
    last_edit: "Suntingan pungkasan",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Kartu Hadiah Kula",
    add_action: "Tambah kertu",
    add_card_dialog: {
      title: "Tambah Kartu Hadiah",
      message:
        "Ketik nomer kertu lan kode keamanan. Kertu hadiah bakal ditambahake menyang akun sampeyan.",
      card_number_input: "Nomer kertu",
      info: "Cathetan: Nalika tuku saka toko, sampeyan bakal ditampilake pilihan kanggo mbayar nganggo kertu hadiah. Kanthi milih pilihan iki, jumlah imbangan mbayar ulang bakal dikurangi saka jumlah pesenan.",
      add_action: "Registrasi kertu",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Bandingake Produk",
    action_button: "Mbandhingake",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Ora ana produk sing ditambahake ing dhaptar perbandingan.",
      price: "Rega",
      type: "Jinis",
      brand: "Merk",
      warranty: "Garansi",
      variants_comparison: "Bandingake varian produk",
      spec: "Spesifikasi Teknis",
      pros: "Kaluwihan",
      cons: "Kakurangan",
      user_review: "Komentar pangguna",
      rating: "Pambiji",
      rating_count: "Jumlah ulasan",
      info: "Sampeyan bisa nuduhake tabel perbandingan produk iki karo kanca-kanca kanthi ngirim tautan iki. Kajaba iku, sampeyan bisa ngakses maneh mengko kanthi nyimpen tautan kasebut.",
      copy_action: "Salin tautan perbandingan",
      check_list: ["ya wis", "Wis"],
      cross_list: ["Ora", "durung"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Mung asli",
    only_has_discount: "Mung diskon",
    price_range: "Range rega",
    brands: "Merk",
    main_shop_page: "Kaca utama toko",
    home: "Ngarep",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Dear {user}, Sampeyan wis tuku produk iki. Apa sampeyan mikir babagan produk iki?",
    notification: {
      title: "Sugeng",
      message: "Komentar sampeyan wis direkam.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Tulisan",
    add_new_blog: "Tulisan anyar",
    popular: "Kondhang",
    topics: "Topik",
    suggestions: "Saran",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Babagan awake dhewe",
    terms: "Katentuan Pangginaan supados langkung",
    privacy: "Kabijakan privasi",
    contact_us: "Hubungi kita",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Hubungi kita formulir",
    name: "jeneng",
    email: "Surel",
    phone: "Telpon",
    message: "Pesen",
    notifications: {
      success: "Pesenmu wis dikirim.",
    },
    submitted_title: "Matur nuwun kanggo nggayuh Kita!",
    submitted_message:
      "We appreciate wektu ing kontak kita. Pesen sampeyan wis ditampa lan tim kita lagi mriksa. Kita bakal nanggapi sanalika bisa, lan matur nuwun kanggo sabar ing wektu iki. Kapentingan lan saran sampeyan penting kanggo kita, lan kita setya nyedhiyakake dhukungan sing paling apik kanggo sampeyan.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Konfirmasi Pembayaran",
      payment_success: "Pembayaran rampung.",
      buy_title: "tuku",
      pay_by_giftcards: "Pesenan sampeyan dibayar nganggo kertu hadiah.",
      free_order: "Pesenan sampeyan gratis.",
      pay_by_cod: "Pesenan sampeyan wis ditambahake minangka pembayaran awis nalika dikirim.",
      pay_by_dir:
        "Pesenan sampeyan kasil ditambahake. Saiki sampeyan bisa mbayar kanthi transfer dhuwit langsung banjur ngunggah bukti pambayaran ing kaca pesenan.",
      pay_title: "pambayaran",
      qr_code_payment: "Alamat kode QR pambayaran digawe.",
      connecting_to_online_gateway: "Nyambung menyang gateway pembayaran online.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Tetep nganti wiwitan",
    title_between_start_end: "Tetep nganti pungkasan",
    title_after_end: "Rampung",
    title_no_start_end: "Tanpa periode wektu!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Sampeyan bisa nampa siji hadiah saben pesenan.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kode kupon",
    add_coupon: "Tambah kupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Bentuk avocado ora diaktifake!",
    last_update: "Nganyari pungkasan:",
    step1:
      "1. Ketik jeneng lan rincian produk sing pengin dipesen banjur klik tombol Tambah.",
    title_plc: "Ketik jeneng produk.",
    description_plc: "Apa sampeyan duwe deskripsi produk liyane?",
    link_plc: "Apa sampeyan duwe tautan menyang produk?",
    image: "Gambar produk",
    image_msg: "Sampeyan bisa ngirim gambar produk yen perlu.",
    add_item: "Tambah barang",
    items_list: "Dhaptar produk sing dijaluk",
    currency_msg: "Sampeyan kudu mbayar jumlah pesenan iki nganggo mata uang iki.",
    step2:
      "2. Sawise nambah kabeh barang sing dikarepake, klik tombol panyuwunan mriksa pesenan. Ing tahap iki, kita bakal mriksa pesenan lan menehi kabar babagan rega. Kanthi ngeklik pranala iki, sampeyan bisa ndeleng rega lan pranala pambayaran.",
    order_action: "Registrasi pesenan",
    show_all: "Tampilake Kabeh",
    show_accepted: "Tampilaké barang sing wis dikonfirmasi",
    last_orders: "Dhaptar pesenan pungkasan",
    pending_status: "lagi ditinjau",
    check_now: "Priksa pesenan",
    add_new_order: "Nggawe Orde Anyar",
    pay_online: "Mbayar online",
    pricing_not_completed_message:
      "Pesenan sampeyan lagi dideleng. Pesenan sampeyan bakal dideleng lan diregani kanthi cepet lan sampeyan bakal bisa mbayar pesenan.",

    select_address_message:
      "Mangga ketik alamat sampeyan, banjur sampeyan bisa ngirim pesenan.",

    delete_item_dialog: {
      title: "Copot barang saka kranjang blanja",
      message: "Apa sampeyan pengin mbusak barang iki saka kranjang?",
      action: "Ya, mbusak",
    },

    notifications: {
      order_success: "Pesenan sampeyan wis sukses.",
      delete_success: "Barang dibusak.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Nggawe pesenan",
    message:
      "Gawe dhaptar produk sing pengin dituku kanthi mindhai kode produk.",

    currency_msg: "Mata uang sing sampeyan pengin mbayar.",
    order_action: "pambayaran",
    add_new_order: "pesenan anyar",
    continue_order: "Terusake pesenan",

    delete_item_dialog: {
      title: "Copot barang saka kranjang blanja",
      message: "Apa sampeyan pengin mbusak barang iki saka kranjang?",
      action: "Ya, mbusak",
    },
    notifications: {
      order_success: "Pesenan sampeyan wis sukses.",
      delete_success: "Barang dibusak.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Unggah gambar bukti pambayaran.",
    upload_payment_receipt_done:
      "✔ Sampeyan wis ngunggah gambar bukti pambayaran, enteni persetujuan saka kita. Yen perlu ngganti, sampeyan bisa ngganti gambar sadurunge nganggo sing anyar.",
    public_form_title: "Informasi akun kanggo transfer dhuwit",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Gawean sing kudu dilakoke",
      message: "Nemtokake judhul karya sing pengin ditindakake lan supaya panuku ngerti sepira kemajuane.",
    },
    booking: {
      title: "Pemesanan / Reservasi",
      message: "Pesenan iki bakal diproses ing wektu sing ditemtokake, pelanggan wis milih periode sing dikarepake, yen sampeyan pengin nggawe owah-owahan ing periode sing dipilih, supaya pelanggan ngerti.",

      selected_checkin: "Priksa-in sing dipilih dening pelanggan",
      selected_checkout: "Check-out sing dipilih pelanggan",
      change_days_question:
        "Apa sampeyan kudu ngganti sajrone dina sing dipilih pelanggan?",
      show_calendar: "Tampilake Tanggalan Pesenan",
    },
    pricing: {
      title: "Regane",
      message: "Pira regane kanggo layanan iki?",
    },
    subscription: {
      title: "Langganan",
      message:
        "Sampeyan bisa milih wektu langganan kanthi tuku layanan iki saben dina. Ayo panuku ngerti yen sampeyan pengin ngganti nilai standar sing wis sampeyan lebokake.",
      duration: "Periode langganan",
    },
    charge: {
      title: "Ngisi daya",
      message:
        "Sampeyan wis nemtokake biaya kanggo barang iki. Sampeyan bisa ngganti jumlah biaya kanggo barang sing dituku pelanggan.",
      charge: "Ngisi daya",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Nunggu kanggo mriksa akses...",
    no_access_message:
      "Sayange, sampeyan ora duwe akses menyang toko kita.<br/> Mangga hubungi kita.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Nuduhake pesenan",
    title: "Nuduhake pesenan iki karo wong liya.",
    message:
      "Iki pranala sing aman; bagikna mung marang wong sing sampeyan kenal. Sapa wae sing duwe pranala iki bisa nyalin pesenan sampeyan lan ndeleng alamat sing dipilih. Pranala iki ngemot informasi babagan kranjang sampeyan saiki.",
    valid_period: "Tautan iki bakal kadaluwarsa sawise 48 jam.",
    import_order_action: "pesenan impor",
    retrieve_dialog_title: "Njupuk urutan njaba",
    address_included: "Bagikake barang kranjang + Alamat",
    address_excluded: "Bagikake mung barang kranjang",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Rega",
    inventory: "Persediaan",
    discount: "Diskon",
  },

  rating: {
    product_rating_message:
      "Produk iki entuk biji {rate} saka 5 lintang lan wis dibiji dening {rate_count} wong.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Jelajahi!",
      same_tags_subtitle: "Temokake barang gegandhengan liyane sing luwih apik.",
      same_category_subtitle: "Temokake barang liyane sing luwih apik ing kategori iki.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Pesen {product} bareng",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Deleng toko {vendor}",
  },

  login: {
    welcome: "Sugeng rawuh",
  },


};
