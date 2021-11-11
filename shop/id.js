export default {
  /** @see ProductRatingView **/
  surveys: ["Sangat buruk", "Buruk", "Normal", "Baik", "Luar Biasa"],


  /** @see ShopFooter **/
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

  /** @see ProductCard **/
  product_card: {
    sold_out: "Habis terjual",
    review_unit: "tinjauan",
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
    nothing: "Tidak",
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
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Palsu",
    action: "Lelang",
    compare_limit: "batas 10 item",
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
    original_guarantee: "Jaminan Asli",
    cod_payment: "Dukungan tunai saat pengiriman",

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
    get_off: "DAPATKAN DISKON {persen}%",
  },

  /** @see BuyButton **/

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
    notifications: {
      inform_add_success: "Kami akan memberi tahu Anda jika sudah tersedia.",
      inform_remove_success: "Anda telah dikeluarkan dari daftar tunggu.",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Tinjauan",
    spec: "spesifikasi",
    comments: "Komentar",
    related_products_title: "Produk-produk terkait",
    price: "Harga",
    rate: "Kecepatan",
    comment: "komentar",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "Riwayat Pemesanan",
      profile: "Profil",
      favorites: "Kesukaanku",
      gift_cards: "Kartu hadiah",
      return_requests: "Permintaan pengembalian",
      basket: "Kereta Belanja",
    },
    user_menu: {
      my_shops: "Toko Saya",
      go_to_admin: "Kelola {shop_name}",
      exit_from: "Keluar {shop_name}",
      chips: "{keripik} Keripik",
    },
    login_to_shop: "Masuk ke Toko",
    login_to_shop_short: "Gabung",
    item_in_basket_message: "{count} Item ini ada di keranjang Anda.",
    search_title: "Cari di toko {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Keranjang",
    basket_is_empty: "Keranjang Anda kosong.",
    total_price: "Total",
    view_basket: "Lihat Keranjang",
    more: "Lagi ...",
    accept_and_pay: "Periksa",
    items: "barang",
  },



  /** {@see HistoryOrdersPhysical} **/
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
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "Kode pemesanan",
      items: "Item",
      reserved: "Tanggal",
      delivery_state: "Status terakhir",
      price: "Total harga",
      status: "Status pembayaran",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Kartu ucapan",
      comments: "Komentar",
      favorites: "Favorit",
      return_requests: "Kembali",
      addresses: "Alamat",
      profile: "Profil",
      orders: "Pesanan",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "Memesan",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Pembayaran",
      payment_waiting: "Menunggu pembayaran",
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
      total_items_discount: "diskon barang",
      total_price_after_offers: "Total Harga setelah menerapkan penawaran",

      buyer_payment: "Jumlah Pembayaran Pembeli",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Pengiriman",
      subtitle: "Informasi pembeli",
      confirm_received_action: "Konfirmasi Penerimaan Produk",
      confirm_received_info:
        "Klik tombol konfirmasi jika Anda menerima pesanan. Jika diperlukan, Anda akan dapat mengirimkan rujukan jika Anda menerima konfirmasi. ",
      receiver: "Penerima",
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
      order_delivered: "Pesanan sudah terkirim.",
      delivery_time: "Waktu Pengiriman",
      tracking_code: "Kode lacak",
      tracking_url: "Url Pelacakan",

      notifications: {
        confirm_delivery: "Pesanan Anda telah disetujui.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Jaminan keaslian barang",
      return: "Kembali",
      table: {
        product: "Nama Produk",
        count: "Menghitung",
        unit_price: "Harga satuan",
        total_price: "Total harga",
        discount: "Diskon",
        final_price: "Harga Akhir",
        returned: "Dikembalikan",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Kembali",
    count_input: "Jumlah barang yang dikembalikan",
    count_input_message: "Berapa banyak yang kamu kembalikan?",
    reason_input: "Alasan untuk kembali",
    reason_input_message: "Pilih alasan untuk mengembalikan item ini.",
    note_input: "Keterangan",
    note_input_hint: "Jelaskan alasan referensi ..",
    note_input_message:
      "Jelaskan alasan untuk merujuk item ini jika diperlukan.",
    media_message:
      "Anda dapat mengunggah gambar, audio, atau video produk di sini untuk mendapatkan dukungan yang lebih baik untuk informasi status produk. Memilih file akan secara otomatis mengirim dan mengkonfirmasi. ",
    video: "Video",
    voice: "Suara",
    add_action: "Kirim permintaan pengembalian",
    notifications: "Permintaan referral Anda telah berhasil didaftarkan.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "Memesan",
    info: {
      title: "Membeli Produk Virtual",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Informasi Pribadi Saya",
    name: "Nama",
    email: "Surel",
    tel: "Telp",
    identity: "Autentikasi",
    success_kyc: "KYC yang disetujui",
    club: "Tingkat Pengguna",
    subscription: "Langganan berita",
    leave_shop: "Tinggalkan toko ini dan hapus semua level pelanggan",
    leave_shop_action: "Tinggalkan toko",
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
  },
  /** {@see BasketPage} **/
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
    lead_time_unit: "jam",
    receive_time: "Saatnya menerima",
    select_time: "Pilih Waktu Pengiriman",
    no_select_time: "Kirim kapan pun siap.",
    transportation_type: "tipe kendaraan",
    days_input: "hari pengiriman",
    days_input_label: "Hari",
    days_input_no_data: "Pilih setidaknya satu hari",
    time_input: "Waktu pengiriman",
    time_input_label: "Pengiriman di",
    time_input_label_no_data: "Pilih setidaknya satu interval waktu",
    support_cod: "Bayar di tempat",
    not_support_cod: "Tidak dapat membayar secara lokal!",
    final_confirm_action: "Konfirmasi pesanan terakhir",
    pay_and_complete_action: "Bayar sekarang",
    pre_confirm_service: "Kirim permintaan",

    errors: {
      no_address: "Pilih alamat tujuan pengiriman pesanan Anda.",
      no_phone: "Masukkan nomor kontak untuk mengkoordinasikan penerimaan barang.",
      select_billing_country: "Pilih negara penagihan Anda",
      select_billing_state: "Pilih wilayah pajak Anda",
    },
    same_billing_address: "Info tagihan sama dengan info penerima",
    custom_billing_info: "Info tagihan berbeda",
    basket_empty: "Keranjang kosong",
    extra_shipping_count: "Anda akan menerima {count} paket.",
    select_location_error:
      "Temukan tempat penerimaan kiriman di peta dan klik indikator di tengah peta untuk menentukan alamat penerima yang tepat.",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "jam",
    count_input: "Menghitung",

    price_changed: "Harga telah berubah. harga baru:",
    offer: "Dapatkan {count}x item dengan diskon {percent}%",
    offer_free: "Dapatkan {count}x gratis",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "Alamat Saya",
    new_action: "Alamat baru",
    receiver: "Penerima",
    address: "Alamat",
    building_no: "pelat",
    building_unit: "satuan",
    postcode: "Kode Pos",
    tel: "Telp",
    description: "Catatan",

    map: {
      title: "Alamat Saya",
      confirm: "Pendaftaran alamat",
      address_type: "Alamat",
      receptor_type: "Penerima",
    },
    add_dialog: {
      title: "Nama Alamat Baru",
      message: "Masukkan judul untuk alamat baru.",
      address_name_input: "Alamat (wajib)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "Permintaan pengembalian",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "Daftar Keinginan",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Komentar Saya",
    first_post: "Pos pertama",
    last_edit: "Suntingan terakhir",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Kartu Hadiah Saya",
    add_action: "Tambahkan kartu",
    add_card_dialog: {
      title: "Tambahkan Kartu Hadiah",
      message:
        "Masukkan nomor kartu dan kode keamanan. Kartu hadiah akan ditambahkan ke akun Anda.",
      card_number_input: "nomor kartu",
      info: "Catatan: Saat membeli dari toko, Anda akan diperlihatkan pilihan untuk membayar dengan kartu hadiah. Dengan memilih opsi ini, jumlah saldo isi ulang Anda akan dipotong dari jumlah pesanan. ",
      add_action: "Pendaftaran Kartu",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Perbandingan Produk",
    action_button: "membandingkan",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "Tidak ada produk yang ditambahkan ke daftar perbandingan.",
      price: "Harga",
      type: "Jenis",
      brand: "Merek",
      warranty: "Jaminan",
      variants_comparison: "Bandingkan keragaman produk",
      spec: "Spesifikasi teknis",
      pros: "kelebihan",
      cons: "Kontra",
      user_review: "Komentar pengguna",
      rating: "Peringkat",
      rating_count: "Jumlah ulasan",
      info: "Anda dapat membagikan tabel perbandingan produk ini dengan teman-teman Anda dengan mengirimkan tautan berikut, atau mengaksesnya nanti dengan menyimpan tautan ini.",
      copy_action: "Salin Tautan Perbandingan",
      check_list: ["Ya", "Memiliki"],
      cross_list: ["Tidak", "Belum"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Hanya yang asli",
    only_has_discount: "Hanya diskon",
    price_range: "Kisaran harga",
    brands: "Merek",
    main_shop_page: "Simpan halaman utama",
    home: "Rumah",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Yang terhormat {pengguna}, Anda telah membeli produk ini. Apa pendapat Anda tentang produk ini?",
    notification: {
      title: "Selamat",
      message: "Komentar Anda telah direkam.",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Blog",
    add_new_blog: "Blog Baru",
    popular: "Populer",
    topics: "Topik",
    suggestions: "Saran",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "Tentang kami",
    terms: "Syarat Penggunaan",
    privacy: "Kebijakan pribadi",
    contact_us: "Hubungi kami",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Hubungi kami formulir",
    name: "Nama",
    email: "Surel",
    phone: "Telepon",
    message: "Pesan",
    notifications: {
      success: "Pesan Anda telah dikirim.",
    },
  },

  /** @see MasterPaymentDialog **/
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
    title_between_start_end: "Tersisa sampai akhir",
    title_after_end: "Selesai",
    title_no_start_end: "Tanpa jangka waktu!",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Anda dapat menerima satu hadiah per pesanan.",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Kode Kupon",
    add_coupon: "Tambahkan kupon",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "Formulir alpukat tidak diaktifkan!",
    last_update: "Pembaharuan Terakhir:",
    step1:
      "1. Masukkan nama dan detail produk yang ingin Anda pesan dan klik tombol Tambah.",
    title_plc: "Masukkan nama produk.",
    description_plc: "Apakah Anda memiliki lebih banyak deskripsi produk?",
    link_plc: "Apakah Anda memiliki tautan ke produk?",
    image: "Gambar produk",
    image_msg: "Anda dapat mengirim gambar produk jika diperlukan.",
    add_item: "Tambahkan Barang",
    items_list: "Daftar produk yang diminta",
    currency_msg: "Anda harus membayar jumlah pesanan ini dengan mata uang ini.",
    step2:
      "2. Setelah menambahkan semua item yang diinginkan, klik tombol permintaan peninjauan pesanan. Pada tahap ini, kami akan meninjau pesanan dan memberi tahu Anda tentang harganya. Dengan mengklik tautan ini, Anda akan dapat melihat tautan harga dan pembayaran.",
    order_action: "Pendaftaran pesanan",
    show_all: "Tunjukkan semua",
    show_accepted: "Tampilkan Item Terverifikasi",
    last_orders: "Daftar pesanan terbaru Anda",
    pending_status: "sedang ditinjau",
    check_now: "Cek pesanan",
    add_new_order: "Daftar Orde Baru",
    pay_online: "bayar online",
    pricing_not_completed_message:
      "Pesanan Anda sedang ditinjau. Pesanan Anda akan segera ditinjau dan diberi harga dan Anda akan dapat membayar pesanan.",

    delete_item_dialog: {
      title: "Hapus item dari keranjang belanja",
      message: "Apakah Anda ingin menghapus item ini dari keranjang?",
      action: "Ya, hapus",
    },

    notifications: {
      order_success: "Pesanan Anda berhasil dilakukan.",
      delete_success: "Item dihapus.",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Pembuatan pesanan",
    message:
      "Buat daftar produk yang ingin Anda beli dengan memindai kode produk.",

    currency_msg: "Mata uang yang ingin Anda bayarkan.",
    order_action: "Pembayaran",
    add_new_order: "Pesanan baru",
    continue_order: "Lanjutkan pesanan",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Unggah gambar tanda terima pembayaran.",
    upload_payment_receipt_done:
      "Anda sudah mengupload gambar resi, tunggu persetujuan kami. Jika Anda perlu mengubah, Anda dapat mengganti gambar sebelumnya dengan yang baru.",
    public_form_title:"Informasi rekening untuk pengiriman uang",
  },
};
