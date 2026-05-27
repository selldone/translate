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
  surveys: ["Sangat miskin", "Miskin", "Normal", "Bagus", "Bagus sekali"],

  /** @see SFooterSection **/
  footer: {
    map: "Peta",
    email: "Surel",
    phone: "Telepon",
    address: "Alamat",

    copyright:
      "Penggunaan konten hanya untuk tujuan non-komersial dan dengan mengacu pada sumbernya (tautan dengan {shop_title}). Semua hak dilindungi undang-undang untuk {shop_title}.",
    powered_by: "Dipersembahkan oleh",
    privacy: "Kebijakan pribadi",
    term_of_use: "Syarat Penggunaan",
    shop_app_setting: "Pengaturan toko & GDPR",

    dialog_setting: {
      title: "Pengaturan Aplikasi Toko",
      app_list: "Daftar aplikasi",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Terjual habis",
    review_unit: "Tinjauan",
    not_original: "Tidak asli",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Saring",
    native: {
      title: "Masuk Aplikasi",
      message:
        "Aplikasi ini membutuhkan akses ke informasi akun toko Anda. Ini termasuk akses ke nama, nomor kontak, alamat, email, riwayat pesanan, pemesanan dan posting komentar di toko ini.",
      message_bold:
        "Pastikan untuk menggunakan aplikasi toko resmi untuk memasuki toko ini.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Sortir dengan",
    title_small: "Sortir dengan..",
    nothing: "Tidak ada apa-apa",
    most_views: "Tampilan terbanyak",
    most_likes: "Paling Populer",
    most_recent: "Terbaru",
    most_sell: "Penjualan terbaik",
    cheapest: "Termurah",
    most_expensive: "Paling mahal",
    only_available: "Tersedia",
    view_mode: {
      normal: "Normal",
      grid: "kisi-kisi",
      list: "Daftar",
      insta: "Gaya Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Palsu",
    action: "Lelang",
    compare_limit: "Batas 10 item",
    compare_add: "Tambahkan untuk membandingkan",
    compare_be_in_list: "Dalam daftar perbandingan",

    type: "Jenis",
    brand: "Merek",
    category: "Kategori",
    discount: "Diskon",
    track_price: "Lacak harga",
    waiting_for_auction: "Menunggu lelang?",
    inform_auction: "Ceritakan tentang lelang",
    return_in_days: "{days} Hari Garansi Pengembalian",
    support24h7: "Dukungan 24 jam 7 hari",
    support_normal: "Dukungan jam kerja",
    original_guarantee: "Garansi asli",
    cod_payment: "Dukungan uang tunai pada pengiriman",

    pros: "kelebihan",
    cons: "Kontra",

    external_link: "Baca selengkapnya",
    notifications: {
      congratulation: "Selamat",
      waiting_list_add_success:
        "Kami akan memberi tahu Anda saat produk ini dilelang.",
      waiting_list_delete_success: "Anda keluar dari daftar tunggu lelang.",
    },

    offer_message: "Beli {min_quantity} Dapatkan diskon {percent}% untuk item ini",
    up_to: "Hingga {per_order}x per pesanan",
    get_free: "MENDAPATKAN GRATIS",
    get_off: "DAPATKAN DISKON {percent}%",
    select_a_vendor_message: "Pilih vendor.",
    product_description_header: "Memperkenalkan {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Menunggu ketersediaan",
    inform_me_when_available: "Menunggu ini?",
    pay_buy: "Bayar & Beli",
    quantity: "Menghitung",
    quantity_in_basket: "Barang di keranjang",
    count_unit: "x",
    remove: "Menghapus",
    add_to_basket: "Masukkan ke keranjang",
    buy: "Membeli",
    subscribe_now: "Berlangganan sekarang",
    unsubscribe: "Berhenti berlangganan",
    select_a_subscription_plan: "Pilih paket terlebih dahulu!",
    manage_subscriptions: "Kelola langganan",
    notifications: {
      inform_add_success: "Kami akan memberi tahu Anda jika sudah tersedia.",
      inform_remove_success: "Anda telah dikeluarkan dari daftar tunggu.",
    },
    zip_pin_input: "Kode Pos / PIN",
    zip_pin_not_available_msg: "Tidak tersedia di lokasi ini!",
    zip_pin_placeholder: "Pilih Kode Pos/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Tinjauan",
    spec: "spesifikasi",
    comments: "Komentar",
    price: "Harga",
    rate: "Kecepatan",
    comment: "Komentar",
    warranty: "Jaminan",
    return_policy: "Kebijakan pengembalian",
    guide: "Memandu",
    shipping: "Pengiriman",
    related_products_title: "Produk-produk terkait",
    related_categories_title: "Temukan dalam koleksi",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Riwayat Pesanan",
      profile: "Profil saya",
      favorites: "Barang Favorit",
      gift_cards: "Kartu hadiah",
      return_requests: "Pesanan yang Dikembalikan",
      basket: "Kereta Belanja",
    },
    user_menu: {
      my_shops: "Toko Saya",
      go_to_admin: "Kelola {shop_name}",
      exit_from: "Keluar {shop_name}",
      chips: "{chips} token",
    },
    login_to_shop: "Masuk ke Toko",
    login_to_shop_short: "Gabung",
    item_in_basket_message: "{count} barang ini ada di keranjang Anda.",
    search_title: "Telusuri di toko {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Keranjang",
    basket_is_empty: "Keranjang Anda kosong.",
    total_price: "Total",
    view_basket: "Keranjang Anda",
    more: "Lagi ...",
    accept_and_pay: "Periksa",
    items: "Barang",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Ditolak",
    table: {
      code: "Kode pemesanan",
      reserved: "Tanggal",
      delivery_state: "Status pengiriman",
      price: "Total harga",
      status: "Status pembayaran",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Kode pemesanan",
      items: "item",
      reserved: "Tanggal",
      delivery_state: "Status terakhir",
      price: "Total harga",
      status: "Status pembayaran",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Kartu ucapan",
      comments: "Komentar",
      favorites: "Favorit",
      return_requests: "Kembali",
      addresses: "Alamat",
      profile: "Profil",
      orders: "Pesanan",
      wallets: "Dompet",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Dompet saya",
    subtitle: "Jika memenuhi syarat dan program cashback aktif, sebagian dari pesanan Anda akan dikreditkan ke dompet Anda. Dana ini dapat Anda gunakan pada pembelian berikutnya."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Saldo dompet saya',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Memesan",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Pembayaran",
      payment_waiting: "menunggu pembayaran",
      payment_completed: "Dibayar",
      table: {
        title: "Judul",
        amount: "Jumlah",
        description: "Keterangan",
      },
      total_payment: "Jumlah yang dibayarkan",
      discount: "Diskon",
      discount_code: "Kode diskon",
      delivery_fee: "Biaya pengiriman",
      delivery_fee_after: "Tidak ada pengiriman yang dibayar",

      total_price: "Total Harga Barang",
      total_items_discount: "Diskon barang",
      total_price_after_offers: "Total setelah menerapkan penawaran",
      total_order_price_before_tax: "Harga Total sebelum pajak",

      buyer_payment: "Jumlah pembayaran pembeli",

      payment_is_in_require_capture_message:
        "Kami telah menerima pembayaran Anda, tetapi belum diambil.",
      settle_the_earlier_bill_first: "Lunasi dulu tagihan sebelumnya!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Pengiriman",
      subtitle: "informasi pembeli",
      confirm_received_action: "Konfirmasi Penerimaan Produk",
      confirm_received_info:
        "Klik tombol konfirmasi jika Anda menerima pesanan. Jika diperlukan, Anda akan dapat mengirimkan rujukan jika Anda menerima konfirmasi.",
      Recipient: "Penerima",
      bill: "Faktur",
      name: "Nama",
      tel: "Telepon",
      email: "Surel",
      country: "Negara",
      state: "Negara",
      city: "Kota",
      address: "Alamat",
      building_no: "Nomor gedung",
      unit_no: "Nomor unit",
      postal_code: "Kode Pos",
      description: "Keterangan",
      order_delivered: "Pesanan sudah diantar.",
      delivery_time: "Waktu pengiriman",
      tracking_code: "Kode lacak",
      tracking_url: "Url Pelacakan",

      notifications: {
        confirm_delivery: "Pesanan Anda telah dikonfirmasi.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Jaminan keaslian barang",
      return: "Kembali",
      table: {
        product: "Nama Produk",
        count: "Menghitung",
        unit_price: "Patokan harga",
        total_price: "Total harga",
        discount: "Diskon",
        final_price: "harga akhir",
        returned: "Kembali",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Kembali",
    count_input: "Jumlah item yang dikembalikan",
    count_input_message: "Berapa banyak barang yang Anda kembalikan?",
    reason_input: "alasan untuk kembali",
    reason_input_message: "Pilih alasan pengembalian item ini.",
    note_input: "Keterangan",
    note_input_hint: "Jelaskan alasan pengembalian..",
    note_input_message:
      "Jelaskan alasan pengembalian barang ini jika diperlukan.",
    media_message:
      "Anda dapat mengunggah gambar, audio atau video produk di sini untuk mendapatkan dukungan yang lebih baik untuk informasi status produk. Memilih file akan secara otomatis mengirim dan mengkonfirmasi.",
    video: "Video",
    voice: "Suara",
    add_action: "Kirim permintaan pengembalian",
    notifications: "Permintaan pengembalian Anda telah berhasil didaftarkan.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Memesan",
    info: {
      title: "Produk Virtual yang Dibeli",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Informasi Pribadi Saya",
    name: "Nama",
    email: "Surel",
    tel: "Telp",
    identity: "Autentikasi",
    success_kyc: "KYC terverifikasi",
    no_kyc: "Tidak ada KYC",
    club: "Tingkat Pengguna",
    subscription: "Langganan berita",
    leave_shop: "Tinggalkan toko ini dan hapus semua level pelanggan",
    leave_shop_action: "Tinggalkan toko",
    edit_personal_info: "Edit info pribadi",
    leave_dialog: {
      title: "Tinggalkan toko",
      message:
        "Berhenti berlangganan ke toko ini tidak akan menghapus informasi dan catatan pesanan Anda.",
      action: "Meninggalkan",
    },
    notifications: {
      leave_success: "Tinggalkan toko",
    },
    club_table: {
      discount: "Diskon",
      limit: "Membatasi",
      currency: "Mata uang",
      free_shipping: "Bebas biaya kirim",
    },

    my_profile: {
      title: "Profil saya",
      subtitle: "Ini adalah informasi profil pelanggan saya untuk toko.",
      edit_action: "Edit profil"
    },
    subscribe_status: {
      subscribed: "Saya berlangganan untuk menerima berita dan promosi terbaru melalui email.",
      unsubscribed: "Saya tidak berlangganan untuk menerima berita atau promosi melalui email."
    },
    my_club: {
      subtitle: "Level klub saya dan manfaatnya."
    },
    kyc: {
      subtitle: "Ini adalah informasi identifikasi global saya."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Kereta Belanja",
    total_price: "Jumlah total",
    shipping: "Biaya pengiriman",
    free_shipping: "Bebas biaya kirim",
    shipping_not_pay: "Tidak termasuk",
    total_discount: "Total diskon",
    customer_club: "Anggota Klub Klien",
    customer_club_discount: "Diskon Anggota",
    final_price: "Pembayaran terakhir",
    lead_time: "Waktu persiapan",
    lead_time_unit: "Jam",
    receive_time: "Waktu pengiriman yang diinginkan",
    select_time: "Pilih Waktu Pengiriman",
    no_select_time: "Secepat mungkin",
    transportation_type: "Jenis pengiriman",
    days_input: "hari pengiriman",
    days_input_label: "hari",
    days_input_no_data: "Pilih setidaknya satu hari",
    time_input: "Waktu pengiriman",
    time_input_label: "Pengiriman di",
    time_input_label_no_data: "Pilih setidaknya satu interval waktu",
    support_cod: "Bayar di tempat",
    not_support_cod: "Tidak dapat membayar secara lokal!",
    final_confirm_action: "Konfirmasi pesanan akhir",
    pay_and_complete_action: "Bayar sekarang",
    pre_confirm_service: "Kirim permintaan",
    cross_selling_discount: "Diskon koleksi",

    errors: {
      no_address: "Pilih alamat tujuan pengiriman pesanan Anda.",
      no_phone: "Masukkan nomor kontak untuk mengkoordinasikan penerimaan barang.",
      select_billing_country: "Pilih negara penagihan Anda",
      select_billing_state: "Pilih wilayah pajak Anda",
    },
    same_billing_address: "Info penagihan sama dengan info Penerima",
    same_billing_address_desc:
      "Alamat penagihan sama dengan alamat pengiriman.",
    custom_billing_info: "Info penagihan berbeda",
    custom_billing_info_desc:
      "Anda dapat memasukkan nomor PAJAK Anda dan menetapkan alamat yang berbeda untuk penagihan.",
    basket_empty: "Keranjang kosong",
    extra_shipping_count: "Anda akan menerima {count} paket.",
    select_location_error:
      "Temukan tempat penerimaan kiriman di peta dan klik indikator di tengah peta untuk menentukan alamat penerima yang tepat.",

    billing_business_desc: "Ini adalah akun bisnis dengan nomor PAJAK.",
    billing_personal_desc: "Itu akun pribadi.",

    no_billing_title: "Tidak ada penagihan",
    no_billing_desc: "Kosongkan alamat penagihan.",

    can_pay_cod_message:"Anda dapat membayar pesanan ini secara tunai saat pengiriman.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Jam",
    count_input: "Menghitung",

    price_changed: "Harga telah berubah. harga baru:",
    offer: "Dapatkan {count}x item dengan diskon {percent}%",
    offer_free: "Dapatkan {count}x gratis",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Alamat saya",
    subtitle:"Lihat alamat tersimpan Anda di sini dan tambahkan alamat baru dengan mudah.",
    new_action: "Alamat baru",
    receiver: "Penerima",
    address: "Alamat",
    building_no: "pelat",
    building_unit: "satuan",
    postcode: "Kode Pos",
    tel: "Telp",
    description: "Catatan",

    map: {
      title: "Alamat saya",
      confirm: "Alamat pendaftaran",
      address_type: "Alamat",
      receptor_type: "Penerima",
    },
    add_dialog: {
      title: "Nama Alamat Baru",
      message: "Masukkan judul untuk alamat baru.",
      address_name_input: "Alamat (wajib)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Permintaan pengembalian",
    subtitle:"Lihat permintaan pengembalian Anda di sini. Untuk item dengan kebijakan pengembalian, Anda dapat mengirim permintaan pengembalian di halaman pesanan.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Daftar Keinginan",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Komentar Saya",
    first_post: "Pos pertama",
    last_edit: "editan terakhir",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Kartu Hadiah Saya",
    add_action: "Tambahkan kartu",
    add_card_dialog: {
      title: "Tambahkan Kartu Hadiah",
      message:
        "Masukkan nomor kartu dan kode keamanan. Kartu hadiah akan ditambahkan ke akun Anda.",
      card_number_input: "Nomor kartu",
      info: "Catatan: Saat membeli dari toko, Anda akan diperlihatkan pilihan untuk membayar dengan kartu hadiah. Dengan memilih opsi ini, jumlah saldo isi ulang Anda akan dipotong dari jumlah pesanan.",
      add_action: "Pendaftaran Kartu",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Bandingkan Produk",
    action_button: "Membandingkan",

    /** {@see SComparisonList} **/
    list: {
      no_data: "Tidak ada produk yang ditambahkan ke daftar perbandingan.",
      price: "Harga",
      type: "Jenis",
      brand: "Merek",
      warranty: "Jaminan",
      variants_comparison: "Bandingkan varian produk",
      spec: "Spesifikasi teknis",
      pros: "kelebihan",
      cons: "Kontra",
      user_review: "Komentar pengguna",
      rating: "Peringkat",
      rating_count: "Jumlah ulasan",
      info: "Anda dapat membagikan tabel perbandingan produk ini kepada teman-teman Anda dengan mengirimkan tautan berikut, atau mengaksesnya nanti dengan menyimpan tautan ini.",
      copy_action: "Salin Tautan Perbandingan",
      check_list: ["Ya", "Memiliki"],
      cross_list: ["Tidak", "belum"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Hanya yang asli",
    only_has_discount: "Hanya diskon",
    price_range: "Kisaran harga",
    brands: "Merek",
    main_shop_page: "Halaman utama toko",
    home: "Rumah",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Yth. {user}, Anda telah membeli produk ini. Apa pendapat Anda tentang produk ini?",
    notification: {
      title: "Selamat",
      message: "Komentar Anda telah direkam.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Blog Baru",
    popular: "Populer",
    topics: "Topik",
    suggestions: "Saran",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Tentang kami",
    terms: "Syarat Penggunaan",
    privacy: "Kebijakan pribadi",
    contact_us: "Hubungi kami",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Hubungi kami formulir",
    name: "Nama",
    email: "Surel",
    phone: "Telepon",
    message: "Pesan",
    notifications: {
      success: "Pesan Anda telah dikirim.",
    },
    submitted_title: "Terima Kasih Telah Menghubungi Kami!",
    submitted_message:
      "Kami menghargai waktu Anda menghubungi kami. Pesan Anda telah diterima dan tim kami sedang meninjaunya. Kami akan merespons sesegera mungkin, dan kami berterima kasih atas kesabaran Anda selama ini. Minat dan masukan Anda penting bagi kami, dan kami berkomitmen untuk memberikan dukungan terbaik kepada Anda.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Konfirmasi pembayaran",
      payment_success: "Pembayaran selesai.",
      buy_title: "Membeli",
      pay_by_giftcards: "Pesanan Anda telah dibayar dengan kartu hadiah.",
      free_order: "Pesanan Anda gratis.",
      pay_by_cod: "Pesanan Anda telah ditambahkan sebagai cash on delivery.",
      pay_by_dir:
        "Pesanan Anda telah berhasil ditambahkan. Sekarang Anda dapat membayar dengan transfer uang langsung dan kemudian mengunggah tanda terima pembayaran di halaman pesanan.",
      pay_title: "Pembayaran",
      qr_code_payment: "Alamat kode QR pembayaran dibuat.",
      connecting_to_online_gateway: "Menghubungkan ke gateway pembayaran online.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Tetap ke awal",
    title_between_start_end: "Tetap sampai akhir",
    title_after_end: "Selesai",
    title_no_start_end: "Tanpa jangka waktu!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Anda dapat menerima satu hadiah per pesanan.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Kode Kupon",
    add_coupon: "Tambahkan kupon",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "Formulir alpukat tidak diaktifkan!",
    last_update: "Pembaharuan Terakhir:",
    step1:
      "1. Masukkan nama dan detail produk yang ingin Anda pesan dan klik tombol Tambah.",
    title_plc: "Masukkan nama produk.",
    description_plc: "Apakah Anda memiliki lebih banyak deskripsi produk?",
    link_plc: "Apakah Anda memiliki tautan ke produk?",
    image: "gambar produk",
    image_msg: "Anda dapat mengirim gambar produk jika diperlukan.",
    add_item: "Tambahkan Barang",
    items_list: "Daftar produk yang diminta",
    currency_msg: "Anda harus membayar jumlah pesanan ini dengan mata uang ini.",
    step2:
      "2. Setelah menambahkan semua item yang diinginkan, klik tombol permintaan peninjauan pesanan. Pada tahap ini, kami akan meninjau pesanan dan memberi tahu Anda tentang harganya. Dengan mengklik tautan ini, Anda akan dapat melihat tautan harga dan pembayaran.",
    order_action: "Pendaftaran pesanan",
    show_all: "Tunjukkan semua",
    show_accepted: "Tampilkan barang yang dikonfirmasi",
    last_orders: "Daftar pesanan terbaru Anda",
    pending_status: "sedang ditinjau",
    check_now: "Periksa pesanan",
    add_new_order: "Buat Pesanan Baru",
    pay_online: "Bayar online",
    pricing_not_completed_message:
      "Pesanan Anda sedang ditinjau. Pesanan Anda akan segera ditinjau dan diberi harga dan Anda akan dapat membayar pesanan.",

    select_address_message:
      "Silakan masukkan alamat Anda, dan kemudian Anda dapat mengirimkan pesanan.",

    delete_item_dialog: {
      title: "Hapus item dari keranjang belanja",
      message: "Apakah Anda ingin menghapus item ini dari keranjang?",
      action: "Ya, hapus",
    },

    notifications: {
      order_success: "Pesanan Anda berhasil dilakukan.",
      delete_success: "Barang dihapus.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Pembuatan pesanan",
    message:
      "Buat daftar produk yang ingin Anda beli dengan memindai kode produk.",

    currency_msg: "Mata uang yang ingin Anda gunakan untuk membayar.",
    order_action: "Pembayaran",
    add_new_order: "Pesanan baru",
    continue_order: "Lanjutkan pesanan",

    delete_item_dialog: {
      title: "Hapus item dari keranjang belanja",
      message: "Apakah Anda ingin menghapus item ini dari keranjang?",
      action: "Ya, hapus",
    },
    notifications: {
      order_success: "Pesanan Anda berhasil dilakukan.",
      delete_success: "Barang dihapus.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Unggah gambar tanda terima pembayaran.",
    upload_payment_receipt_done:
      "Anda sudah mengupload gambar resi, tunggu persetujuan kami. Jika Anda perlu mengubah, Anda dapat mengganti gambar sebelumnya dengan yang baru.",
    public_form_title: "Informasi rekening untuk transfer uang",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Daftar yang harus dilakukan",
      message: "Tentukan judul pekerjaan yang ingin Anda lakukan dan beri tahu pembeli seberapa jauh kemajuannya.",
    },
    booking: {
      title: "Pemesanan / Reservasi",
      message: "Pesanan ini akan diproses pada waktu yang ditentukan, pelanggan telah memilih periode yang diinginkan, jika Anda ingin melakukan perubahan pada periode yang dipilih, beri tahu pelanggan.",

      selected_checkin: "Check-in yang dipilih oleh pelanggan",
      selected_checkout: "Check-out yang dipilih oleh pelanggan",
      change_days_question:
        "Apakah Anda perlu mengubah selama hari yang dipilih pelanggan?",
      show_calendar: "Tampilkan Kalender Pesanan",
    },
    pricing: {
      title: "harga",
      message: "Berapa biaya yang Anda kenakan untuk layanan ini?",
    },
    subscription: {
      title: "Berlangganan",
      message:
        "Anda dapat memilih periode berlangganan dengan membeli layanan ini setiap hari. Beri tahu pembeli jika Anda ingin mengubah nilai default yang telah Anda masukkan.",
      duration: "Periode berlangganan",
    },
    charge: {
      title: "Mengenakan biaya",
      message:
        "Anda telah menetapkan biaya untuk item ini. Anda dapat mengubah jumlah tagihan untuk barang yang dibeli oleh pelanggan.",
      charge: "Mengenakan biaya",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Menunggu untuk memeriksa akses...",
    no_access_message:
      "Sayangnya, Anda tidak memiliki akses ke toko kami.<br/> Silahkan hubungi kami.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Bagikan pesanan",
    title: "Bagikan pesanan ini dengan orang lain.",
    message:
      "Ini adalah tautan yang aman, hanya bagikan dengan orang yang Anda kenal. Semua orang yang memiliki tautan ini dapat menduplikasi pesanan Anda dan melihat alamat yang dipilih. Ini akan berisi informasi tentang keranjang Anda saat ini.",
    valid_period: "Tautan ini akan kedaluwarsa setelah 48 jam.",
    import_order_action: "Impor pesanan",
    retrieve_dialog_title: "Ambil pesanan eksternal",
    address_included: "Bagikan item keranjang + Alamat",
    address_excluded: "Bagikan hanya item keranjang",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Harga",
    inventory: "Inventaris",
    discount: "Diskon",
  },

  rating: {
    product_rating_message:
      "Produk ini telah menerima peringkat {rate} dari 5 bintang dan dinilai oleh {rate_count} orang.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "Mengeksplorasi!",
      same_tags_subtitle: "Temukan item terkait yang lebih luar biasa.",
      same_category_subtitle: "Temukan item yang lebih luar biasa dalam kategori ini.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Pesan {product} dengan",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Lihat toko {vendor}",
  },

  login: {
    welcome: "Selamat datang",
  },


};
