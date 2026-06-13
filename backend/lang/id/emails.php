<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Pesan ini menyambut pembeli baru di toko.',
        ShopMailTemplateCodes::OrderCheckout => 'Pemberitahuan ini dikirim ketika pembeli mengkonfirmasi pesanan.',
        ShopMailTemplateCodes::OrderPayment => 'Pemberitahuan ini mengkonfirmasi pembayaran berhasil yang dilakukan oleh pelanggan.',
        ShopMailTemplateCodes::OrderUpdate => 'Pesan ini dikirim untuk memberi tahu pembeli tentang status pesanannya.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Pesan ini dikirim ke penjual untuk memberi tahu mereka tentang pesanan yang telah dikonfirmasi.',
        ShopMailTemplateCodes::PosCheckout => 'Pemberitahuan ini dikirim untuk mengonfirmasi pesanan tempat penjualan untuk pembeli.',
        ShopMailTemplateCodes::PosPayment => 'Pemberitahuan ini mengonfirmasi pembayaran tempat penjualan yang dilakukan oleh pembeli.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Pesan ini memberi tahu penjual tentang pembelian yang dilakukan di tempat penjualannya.',
        ShopMailTemplateCodes::ShopContact => 'Pemberitahuan ini dikirim ketika formulir kontak telah dikirimkan.',
        ShopMailTemplateCodes::ShopGiftCard => 'Notifikasi ini memberi tahu pengguna bahwa mereka telah menerima kartu hadiah.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Pesan ini menyambut vendor baru ke toko.',
        ShopMailTemplateCodes::ShopVendorInvite => "Pesan ini dikirim untuk mengundang vendor bergabung dengan pasar Anda.",
        ShopMailTemplateCodes::ShopVendorOrder => "Pesan ini dikirim ke vendor ketika pesanan diterima dalam status Paid atau Cash on Delivery (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Dikirim setiap hari untuk memperbarui vendor tentang status produk mereka.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Pesan ini dikirim untuk mengundang vendor bergabung dengan pasar Anda.",

        ShopMailTemplateCodes::UserLogin => "Beri tahu pengguna dengan detail login, termasuk alamat IP, tanggal, dan perangkat, untuk tujuan keamanan.",
        ShopMailTemplateCodes::LoginCode => "Kirimkan kode kata sandi satu kali agar pengguna dapat masuk ke toko.",

        ShopMailTemplateCodes::EmailVerifyLink => "Kirim tautan untuk memverifikasi alamat email pengguna. Email ini dikirim ketika pengguna mendaftar dengan SMS dan memasukkan email mereka. Itu tidak dikirim ketika pengguna mendaftar langsung dengan login sosial atau email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Kirimkan daftar pesanan yang diterima dan dibayar secara massal untuk hari tertentu."


    ,

    ],


    'global' => [
        'greetings' => 'Hai, :name!',
        'end-statement' => 'Tim pendukung',

        'receiver_name' => 'Hai :user_name',
        'footer-help' => "Butuh bantuan? Tanyakan di [support@selldone.com](mailto:support@selldone.com) atau kunjungi [pusat bantuan](https://selldone.com/community) kami.",
        'selldone-team' => 'Tim Selldone',
        'footer-shop' => "Jika Anda memerlukan bantuan dengan apa pun, jangan ragu untuk mengirim email kepada kami: :shop_mail",
        'accept' => "Menerima",
        'reject' => "Menolak",
        'verify' => "memeriksa",
        'title' => "Judul",
        'value' => "Nilai",
        'description' => "Keterangan",
        'shop' => "Toko",
        'shop-info' => "Informasi Toko",
        'user' => "Pengguna",
        'user-info' => "Informasi Akun",
        'license' => "Lisensi",
        'status' => "Status",
        'start' => "Awal",
        'end' => "Akhir",
        'renewal' => "Pembaruan",
        'view' => "Melihat",

        'balance' => "Keseimbangan",
        'card_number' => "Nomor kartu",
        'cvv' => "CV",
        'expire_date' => "Tanggal kadaluarsa",

        'Dashboard' => "Dasbor",
        'order' => "memesan",
        'view_order' => "Tampilan Pemesanan",
        'pay_now' => "Pay now",

        'official_selldone' => "DIJUAL RESMI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Mata uang",
        'free-balance' => "saldo gratis",
        'locked-balance' => "Saldo terkunci",
        'bot' => "Bot",
        'requests' => "Permintaan",
        'baskets' => 'gerobak',
        'physical' => "Fisik",
        'virtual' => "Maya",
        'file' => "Mengajukan",
        'service' => "Melayani",
        'fulfillment' => "Pemenuhan",
        'open' => "Membuka",
        'reserved' => "Disimpan",
        'canceled' => "Dibatalkan",
        'payed' => "Dibayar",
        'cod' => "COD",
        'orders-count' => 'Pesanan',
        'payments-count' => 'Pembayaran',
        'confirms-count' => 'Konfirmasi',
        'sends-count' => 'mengirim',
        'delivers-count' => 'memberikan',
        'count' => 'Menghitung',
        'transactions-count' => 'Jumlah transaksi',
        'success-transactions' => 'Transaksi sukses',
        'total-amount' => 'Jumlah total',
        'amount' => 'Jumlah',
        'wage' => 'Gaji',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Hidup',
        'CheckQueue' => 'Periksa antrian',
        'OrderConfirm' => 'Konfirmasi pesanan',
        'PreparingOrder' => 'Menyiapkan pesanan',
        'SentOrder' => 'Pesanan terkirim',
        'ToCustomer' => 'Dikirim ke pelanggan',
        'Pending' => 'Tertunda',
        'Accepted' => 'Diterima',
        'Rejected' => 'Ditolak',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telepon',
        'total' => 'Total',
        'view-detail' => 'Lihat Detail',
        'empty' => 'Kosong',
        'dropshipping' => 'Pengiriman drop',
        'reply' => 'Membalas',
        'reactions' => 'Reaksi',
        'Comments' => 'Komentar',
        'last-comment' => 'Komentar terakhir',
        'response-to' => 'Menanggapi',
        'posts' => 'Postingan',
        'post' => 'Pos',

        'name' => 'Nama',
        'email' => 'Surel',
        'type' => 'Tipe',
        'device' => 'Perangkat',
        'platform' => 'Platform',
        'browser' => 'Peramban',
        'time' => 'Waktu',
        'Wallet' => 'Dompet',
        'date' => 'Tanggal',

        'account' => 'Akun',
        'transaction' => 'Transaksi',
        'fee' => 'Biaya',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Tagihan',
        'category' => 'Kategori',
        'password' => 'Kata sandi',
        'verify-login' => "Verifikasi & Masuk",
        'url' => 'URL',
        'avocado' => 'Alpukat',
        'hyper' => 'Hiper',
        'buy-now' => "Beli sekarang",
        'add-domain' => "Add Domain",
        'views' => 'Tampilan',


        'country' => 'Negara',
        'address' => 'alamat',
        'postal' => 'Kode Pos',
        'building_no' => 'Bangunan #',
        'building_unit' => 'Satuan #',
        'message' => 'Pesan',


        'customer' => 'Pelanggan',
        'cart-items' => 'item keranjang',
        'payment' => 'Pembayaran',
        'receiver' => 'Penerima',
        'virtual-items' => 'Barang virtual',
        'no-payment' => 'Tidak ada pembayaran!',

        'enable' => 'Memungkinkan',
        'access' => 'Mengakses',
        'bank' => 'informasi bank',

        'vendor' => 'Penjual',

        'view_content' => "Lihat konten lengkapnya",
        'files' => 'File',
        'download' => 'Unduh',
        'file_name' => 'Nama Berkas',
        'file_size' => 'Ukuran',

        'subscription' => 'Berlangganan',
        'products' => 'Produk',
        'vendor_products' => 'Produk Penjual',

        'pickup' => 'Penjemputan',

        'minutes' => 'Menit',
        'hours' => 'Jam',

        'refund' => 'Pengembalian dana',
        'recipient_address' => 'Alamat Penerima',
        'signature' => 'Tanda tangan',
        'blockchain' => 'Blockchain',
        'details' => 'Detail',


    

        'Shop' => 'Toko',
        'dashboard' => 'dasbor',
        'comments' => 'komentar',
        'wallet' => 'dompet',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "OS Bisnis Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Laporan Kinerja, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Laporan Musiman, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hai',
            'name' => 'Setuju, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Mendukung :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'hai',
            'name' => 'Komunitas, Selldone'
        ],
        'NewShop' => [
            'id' => 'pedagang',
            'name' => 'Setuju, Selldone'
        ],
        'Approve' => [
            'id' => 'menyetujui',
            'name' => 'Setuju, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Manajemen Pesanan :name'
        ],

        'Recovery' => [
            'id' => 'pemulihan',
            'name' => 'Tim Pemulihan Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Tertunda',
        'PAYED' => 'Dibayar',
        'CANCELED' => 'Dibatalkan',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Petugas dan Pengawas',
            'AUDITING' => 'Manajer audit',
            'EMPLOYEE' => 'Karyawan',
            'PRODUCT' => 'Manajer produk',
            'CONTENT' => 'Pengelola konten',
            'MARKETING' => 'Manajer Pemasaran',
            'VIEWER' => 'Penonton',

        ],
        'subject' => ":inviter mengundang Anda sebagai :level| :shop",
        'category' => "Undangan staf",
        'title' => "Anda telah diundang ke <b>:shop_name</b> sebagai <b>:level</b> .",
        'message' => "Anda telah menerima undangan untuk berkolaborasi dengan tim <b>:shop_title</b> dalam bisnis. Anda mempunyai pilihan untuk menerima atau menolak tawaran ini. Jika Anda memilih untuk menerima, silakan masuk ke layanan Selldone untuk mengonfirmasi keputusan Anda. Setelah konfirmasi, Anda akan mendapatkan akses ke bagian manajemen toko.",

    ],

    'welcome-email' => [
        'subject' => "👋 Selamat datang :name, Ayo Mulai dengan Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Selamat datang di Selldone",
        'message' => "Terima kasih telah memilih Selldone! Anda kini menjadi bagian dari komunitas dinamis yang menghubungkan penjual global dengan pelanggan, bisnis lokal dengan perusahaan, dan individu dengan perusahaan. Semua alat Master dan Pro kami tersedia untuk Anda **gratis** dan **tidak terbatas**. Kami di sini untuk mendukung Anda dan membuka pintu menuju kesuksesan Anda.",

        'index' => "Langkah :step.",

        'step-domain' => [
            'title' => 'Tambahkan Domain Khusus Anda',
            'message' => "Untuk memulai, tambahkan domain khusus Anda secara gratis di Dasbor Toko pada Pengaturan > Pengaturan Domain.",
            'action' => 'Kelola Domain Saya',
        ],
        'step-landing' => [
            'title' => 'Sesuaikan Halaman Beranda Anda',
            'message' => "Personalisasikan halaman beranda Anda dengan membuka Dasbor > Halaman. Pilih halaman arahan atau buat yang baru. Mudah dan intuitif, dan Anda dapat langsung mulai mengerjakannya.",
            'action' => 'Sesuaikan Halaman Arahan Saya',
        ],
        'step-payment' => [
            'title' => 'Atur Metode Pembayaran',
            'message' => "Mulai menerima pembayaran langsung ke rekening bank Anda. Untuk menghubungkan penyedia pembayaran Anda seperti Stripe, PayPal, dan lainnya, buka Dasbor > Akuntansi > Gateway.",
            'action' => 'Tambahkan Metode Pembayaran',
        ],
        'step-products' => [
            'title' => 'Tambahkan Produk Anda',
            'message' => "Tambahkan produk dan kategori dengan mudah di Dasbor > Produk. Ini seperti mengelola file dan folder di PC Anda – siap seret dan lepas sepenuhnya. Anda juga dapat mengimpor produk secara massal menggunakan Excel. Contoh templat tersedia untuk membantu Anda memulai.",
            'action' => 'Kelola Produk Saya',
        ],
        'step-shipping' => [
            'title' => 'Atur Metode Pengiriman',
            'message' => "Untuk membebankan biaya pengiriman kepada pelanggan, tentukan metode pengiriman Anda di Dasbor > Logistik > Pengiriman. Anda dapat menetapkan harga dan dukungan berbeda untuk berbagai lokasi. Jangan lupa atur asal gudang Anda di Dashboard > Logistic > Warehouse.",
            'action' => 'Kelola Metode Pengiriman',
        ],
    

        'seller' => [
            'title' => 'Apakah Anda seorang penjual?',
            'message' => 'Untuk mulai menjual, masuk ke dasbor Anda di Selldone melalui tautan di bawah ini dan buat toko pertama Anda sepenuhnya gratis. Ini akan memakan waktu beberapa menit dan Anda akan memiliki toko dan situs online Anda sendiri. Kami kemudian akan memandu Anda ke langkah selanjutnya dan mendapatkan gateway pembayaran.',
            'action' => 'Masuk ke dasbor saya',
        ],
        'buyer' => [
            'title' => 'saya pembeli',
            'message' => 'Selamat. Setelah Anda menjadi anggota Selldone, Anda akan terbebas dari semua kerumitan keanggotaan dan otentikasi di toko online. Untuk mendapatkan manfaat dari toko dan situs mana pun yang menggunakan platform Selldone, Anda dapat masuk dengan satu klik dan melakukan pembelian dengan mudah, cepat, dan aman.',
        ],
    ],


    'charge-account' => [
        'category' => 'Dompet > Akun > Tagihan',
        'title' => "Biaya Sukses",
        'message' => "Akun Anda <b>:account_number</b> telah berhasil ditagih <b>:amount</b>.",
        'account' => 'Akun',
        'charge' => 'Mengenakan biaya',
        'balance' => 'Keseimbangan',
        'footer' => "Jadikan bisnis mudah, dapat dicapai, dan dapat diakses oleh siapa saja di seluruh dunia."
    ],

    'verify-email' => [
        'subject' => "Selesaikan pendaftaran Anda ke Selldone! Verifikasi tautan.",
        'category' => "ANDA SATU LANGKAH JAUH",
        'title' => "Verifikasi alamat email Anda",
        'message' => "Hai :name,<br><br>Terima kasih telah memilih Selldone!<br><br>Untuk mengonfirmasi bahwa <b>:email</b> adalah alamat email Anda yang benar, silakan klik tombol di bawah atau gunakan tautan yang tersedia. Anda memiliki waktu 48 jam untuk menyelesaikan verifikasi ini.",
        'footer' => "Jika Anda kesulitan mengklik tombol Verifikasi, salin dan tempel URL di bawah ini ke browser web Anda: :activation_url",
        'next-step' => "Selanjutnya, kami akan mengirimkan beberapa materi bermanfaat dan panduan langkah demi langkah untuk memudahkan Anda menambahkan domain khusus, menyiapkan pembayaran, menambahkan produk, dan mendapatkan pesanan pertama Anda.",

    ],
    'verify-email-code' => [
        'subject' => "Kode verifikasi untuk :name",
        'category' => "SECURITY",
        'title' => "Kode verifikasi email",
        'message' => "Hai :name,<br><br>Untuk memastikan bahwa <b>:email</b> adalah alamat email Anda yang benar, silakan masukkan kode berikut dalam <b>10 menit berikutnya</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Toko Anda Sudah Siap| :name",
        'category' => "ANDA SATU LANGKAH JAUH",
        'title' => "Penyiapan selesai",
        'account_title' => "Akun Anda",
        'account_msg' => "Verifikasi dan login ke akun Anda dengan info ini.",
        'shop_msg' => "Info akun pada sistem operasi bisnis Selldone.",

    ],

    'reset2fa' => [
        'category' => "PESAN RESMI KEAMANAN",
        'title' => "Minta nonaktifkan login 2 langkah",
        'message' => "Anda menerima email ini karena kami menerima permintaan untuk menyetel ulang autentikasi dua faktor untuk akun **:name** dengan email **:email**.<br><br>Kami menemukan detail berikut untuk akun Anda:",
        'footer' => "Jika Anda tidak meminta pengaturan ulang kata sandi, tidak ada tindakan lebih lanjut yang diperlukan.",
        'action' => 'Nonaktifkan login dua langkah',
    ],


    'build-new-shop' => [
        'subject' => "Toko Anda sudah siap sekarang!",
        'category' => "LAHIR TOKO ONLINE BARU DI DUNIA",
        'title' => "Selamat, :name!",
        'message' => "<b>Selamat, :name! Bisnis online baru Anda sekarang telah aktif!</b> Kami sangat senang menyambut Anda di komunitas Selldoners. Anda telah mengambil langkah pertama menuju kesuksesan, dan kami siap membantu Anda di setiap langkah.<br>Sekarang toko Anda sudah siap, pastikan Anda siap menerima pembayaran langsung dari pelanggan dan mulai mengembangkan kerajaan Anda. Jika Anda memerlukan bantuan, kami tinggal mengirimkan pesan—tim dukungan kami selalu siap membantu Anda.<br><br><b>Langkah Penting Berikutnya:</b> Untuk memulai, pastikan Anda siap menerima pembayaran dan kelancaran operasional. Kami akan memandu Anda melalui setiap tahap agar toko Anda berjalan lancar.",
        'pdf-book' => "Jangan lewatkan buku pegangan terlampir: Lakukan Bisnis Anda Seperti Game",

        'account' => [
            'title' => 'Langkah 1: Buat akun di dompet Selldone',
            'message' => "Untuk memulai, buat akun di dompet Selldone Anda. Di sinilah biaya Anda akan dipotong, dan di sinilah Anda juga akan melakukan top up agar toko Anda tetap berjalan lancar. Jika saldo Anda menjadi negatif, jangan khawatir! Toko Anda akan terus beroperasi tanpa gangguan.",
            'action' => 'Masuk ke dompet',
        ],

        'shop-account' => [
            'title' => 'Langkah 2: hubungkan akun ke toko',
            'message' => "Selanjutnya, hubungkan akun dompet Anda ke toko Anda. Kunjungi <b>Store > Accounting > Invoice</b>, dan tautkan dompet Anda. Hal ini memastikan bahwa semua pembayaran pelanggan disetorkan langsung ke rekening bank Anda—Selldone tidak mengurangi jumlah apa pun dari penghasilan Anda.",
            'action' => 'Simpan Panel Faktur',
        ],

        'gateway' => [
            'title' => 'Langkah 3: Hubungkan Gerbang Pembayaran Online',
            'message' => "Sekarang, mari siapkan gateway pembayaran online Anda. Buka <b>Store > Akuntansi > Port</b> dan klik <b>Tambahkan Port Baru</b>. Pilih mata uang Anda, dan Anda akan melihat daftar gateway pembayaran yang tersedia. Menghubungkan gateway cepat dan mudah, tetapi jika Anda memerlukan bantuan, silakan periksa panduan Selldone atau hubungi kami.",
            'action' => 'Tambahkan portal ke toko',
        ],

        'domain' => [
            'title' => 'Langkah terakhir: menghubungkan domain khusus',
            'message' => "Sekarang, tautkan domain khusus Anda ke toko Anda. Hal ini memungkinkan pelanggan membeli produk atau layanan Anda dan melakukan pembayaran langsung kepada Anda.",
            'action' => 'Memperkenalkan dan menerima kartu hadiah tanpa batas',
        ],
    ],


    'basket-list' => [
        'item' => "barang",
        'count' => "Menghitung",
        'price' => "harga",
        'discount-code' => "Kode diskon",
        'customer-club' => 'Klub Pelanggan',
        'shipping' => "Pengiriman",
        'total' => "Total",
        'offer' => "Menawarkan",
        'coupon' => "Kupon",
        'lottery' => "Menghadiahkan",
        'tax' => "Pajak",
        'tax_included' => "Harga sudah termasuk",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'metode',
        'amount' => 'Jumlah',
        'giftcard' => 'Gift card',
        'payment' => 'Pembayaran',
    ],


    'shop-subscription-email' => [
        'category' => "Pembaruan berlangganan",
        'title' => "Lisensi Toko: :shop_title",
        'title-reserved' => "Lisensi cadangan: :shop_title",
        'title-active' => "Lisensi aktif: :shop_title",
        'title-finished' => "Lisensi selesai: :shop_title",
        'title-cancel' => "Batalkan lisensi: :shop_title",
        'message' => "Paket lisensi toko Anda diperbarui,",
        'RESERVED' => "Paket berlangganan Anda telah **dipesan**.",
        'ACTIVE' => "Paket berlangganan Anda telah **diaktifkan**.",
        'FINISHED' => "Paket berlangganan Anda telah **selesai**.",
        'CANCEL' => "Paket langganan Anda telah **dibatalkan**.",
    ],

    'support' => [
        'subject' => "Pusat Dukungan|:name menjawab",
        'category' => "Pusat layanan",
        'title' => "Anda menerima tanggapan",
        'action' => "Buka toko admin",
    ],

    'shop-customer-join' => [
        'subject' => "Gabung :shop_title",
        'category' => "Perayaan pelanggan baru",
        'title' => "Kami senang atas keanggotaan Anda",
        'action' => "Kunjungi sekarang",
    ],

    'shop-vendor-join' => [
        'subject' => "Pendaftaran Vendor | :shop_title",
        'category' => "Perayaan vendor baru",
        'title' => "Kami senang atas keanggotaan Anda",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kartu hadiah :shop_title",
        'category' => "Tambahkan kartu baru",
        'title' => "Selamat, Anda telah menerima kartu hadiah",
        'action' => "Berbelanja sekarang",
        'message' => "Anda telah menerima kartu hadiah sejumlah :balance :currency. Anda akan dapat membeli dari toko kami dengan kartu hadiah ini.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Pusat Dukungan| :shop",
        'category' => "mendukung",
        'title' => "Anda menerima tanggapan",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Konfirmasi Pesanan|Pesan :order_id",
        'title' => "memesan",
        'message' => "Anda memesan di toko kami. Kami telah menerima pesanan Anda dan akan mengirimi Anda email lagi setelah pembayaran dikonfirmasi."
    ,

        'payments' => 'Pembayaran',
    ],

    'order-payment' => [
        'subject' => "🛍️ Konfirmasi Pembayaran|Pesan :order_id",
        'title' => "Perintah pembayaran",
        'message' => "Pembayaran Anda selesai,<br> Kami sudah mendapatkan pesanan Anda. Kami akan mengirimkan email lagi saat pesanan Anda dikirimkan.",
    

        'payments' => 'Pembayaran',
    ],

    'order-update' => [
        'subject' => "🛍️ Pembaruan Status Pesanan|Pesan :order_id",
        'title' => "Pembaruan Status Pesanan",
        'message' => "Pesanan Anda telah diperbarui. Anda dapat memeriksa status terbaru pesanan ini di akun Anda.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Pesanan Anda sedang dalam antrian untuk diproses. Kami akan memberi tahu Anda jika sudah disiapkan.",
                'OrderConfirm' => "Pesanan Anda telah dikonfirmasi dan persiapan telah dimulai.",
                'PreparingOrder' => "Pesanan Anda sedang disiapkan dan akan segera dikirim.",
                'SentOrder' => "Pesanan Anda telah dikirimkan. Anda akan segera menerimanya.",
                'ToCustomer' => "Pesanan Anda telah terkirim. Kami harap Anda menikmatinya!",

                'PreparingOrder-PICKUP' => "Pesanan Anda sedang disiapkan. Anda akan menerima notifikasi jika sudah siap diambil.",
                'SentOrder-PICKUP' => "Pesanan Anda siap diambil. Silakan datang ke toko untuk mengambilnya.",
                'ToCustomer-PICKUP' => "Pesanan Anda telah diambil. Kami harap Anda menikmatinya!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Pesanan Anda sedang dalam antrian untuk diproses. Kami akan memberi tahu Anda jika sudah siap.",
                'OrderConfirm' => "Pesanan Anda telah dikonfirmasi dan persiapan sedang berlangsung.",
                'PreparingOrder' => "Pesanan Anda sedang disiapkan dan akan segera dikirimkan kepada Anda.",
                'ToCustomer' => "Pesanan virtual Anda telah dikirimkan ke akun Anda. Terima kasih!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Permintaan layanan Anda sedang dalam antrian. Kami akan memberi tahu Anda saat kami mulai.",
                'OrderConfirm' => "Layanan Anda telah dikonfirmasi dan kami bersiap untuk memulai.",
                'PreparingOrder' => "Kami sedang mempersiapkan layanan Anda, dan akan memberi tahu Anda setelah layanan selesai.",
                'ToCustomer' => "Layanan Anda selesai. Terima kasih telah memilih kami!"
            ],
            'FILE' => [
                'PreparingOrder' => "File Anda sedang disiapkan dan akan segera tersedia.",
                'ToCustomer' => "File Anda sudah siap dan telah terkirim. Anda sekarang dapat mengunduhnya."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Pesanan langganan Anda sedang dalam antrean. Kami akan memberi tahu Anda saat pemrosesan dimulai.",
                'OrderConfirm' => "Langganan Anda telah dikonfirmasi dan sedang disiapkan.",
                'PreparingOrder' => "Kami sedang mempersiapkan langganan Anda dan itu akan segera dimulai.",
                'SentOrder' => "Langganan Anda telah diaktifkan. Anda akan menerima pembaruan berkelanjutan.",
                'ToCustomer' => "Layanan berlangganan Anda telah berhasil diaktifkan."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Selamat :name|Voucher Baru: :title',
        'category' => "SELAMAT, VOUCHER BARU",
        'message' => "Hai :name,<br><br>Anda telah menerima voucher baru sebagai hadiah dari kami! Anda bisa mendapatkan lebih banyak voucher dengan memperkenalkan Selldone kepada teman dan semua orang yang Anda kenal. Voucher ini bernilai **:price :currency**.<br><br>Anda telah mengambil langkah pertama, dan kami siap membantu Anda membuka fitur baru dengan voucher Anda! Silakan login dengan **:email** dan temukan voucher Anda di Toko **Dasbor** > **Pengaturan** > **Lisensi**.<br><br>Selamat!",
        'action' => "Dasbor saya",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Selamat, :name yang terhormat|Anda Telah Menerima Hadiah Spesial!',
        'category' => "Pengumuman menerima hadiah",
        'title' => "Hadiah untukmu",
        'message' => "Hai :name, dengan senang hati kami memberi tahu Anda bahwa Anda telah menerima hadiah spesial dari Selldone! 🎉 Anda bisa mendapatkan lebih banyak hadiah dengan tetap aktif, mengembangkan toko Anda, dan meningkatkan keahlian Anda di Selldone. Untuk memeriksa hadiah Anda, cukup masuk dengan :email dan cari di sudut kanan atas dasbor Anda.<br><br>Hadiah ini bernilai **:price :currency**, dan Anda dapat dengan mudah menyetorkannya ke dompet Anda dalam Selldone.<br><br>Gunakan hadiah Anda untuk meningkatkan lisensi toko Anda dan buka alat yang lebih canggih untuk meningkatkan bisnis online Anda!",
        'action' => "Hadiah",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Pesanan Baru Diterima| :order_id",
        'title' => "New Order",
        'message' => "Anda telah menerima pesanan baru. Silakan buka halaman pemrosesan pesanan di toko Anda.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Informasi Anda yang Diisi',
        'output-form-title' => 'Informasi barang yang dibeli',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬:shop_title|Laporan Mingguan :time',
        'title' => 'Laporan kinerja toko mingguan',
        'message' => "Ini adalah laporan mingguan toko Anda dari <b>:start</b> hingga <b>:end</b>. Laporan ini berisi tips untuk meningkatkan bisnis Anda, Anda juga dapat memeriksa status toko online Anda dan pesanan terkini. Saya harap Anda memiliki hari dan minggu depan yang baik."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Laporan tabungan :amount Anda dalam tiga bulan terakhir| :shop_title',
        'title' => 'Laporan musiman tentang aktivitas bisnis Anda, penghargaan, dan penghematan finansial',
        'message' => "Ini adalah laporan musiman <b>:shop_title</b> Anda dari <b>:start</b> hingga <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Akun terhubung',
        'sub-title' => 'Apa status terbaru dari akun dompet yang terhubung ke toko saya?',
        'view-wallet' => 'Lihat dompet',
        'tip-title' => 'Tips penting',
        'tip' => "Siapkan dompet Selldone gratis dan tautkan ke toko Anda. Meskipun saldo Anda negatif, pelanggan Anda tetap dapat berbelanja dan membayar tanpa masalah apa pun. Tenang saja, operasional dan data toko Anda tetap lancar hingga 1 bulan, tanpa ada gangguan.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Hubungkan ke akun'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplikasi terpasang',
        'sub-title' => 'Daftar aplikasi yang telah Anda pasang di toko Anda minggu ini.',
        'tip' => "Apakah Anda ingin menemukan lebih banyak aplikasi untuk toko Anda?",
        'view-app-store' => 'Kunjungi App Store Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bot Toko Anda',
        'sub-title' => 'Bot penjualan aktif di toko saya.',
        'tip-title' => 'Penjualan Bot',
        'tip' => "Selldone telah memberi Anda bot penjualan otomatis. Yang harus Anda lakukan adalah pergi ke panel Add-ons> Bots dan aktifkan bot toko Anda. Perhatikan bahwa layanan yang relevan harus tersedia di negara Anda.",
        'view-bots' => 'Kelola bot',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikasi dengan Pelanggan',
        'sub-title' => 'Berapa banyak kontak yang saya miliki dengan klien saya minggu ini?',
        'faqs' => 'Pertanyaan yang Sering Diajukan',
        'tickets' => 'Tiket Pelanggan',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status Pengguna',
        'sub-title' => 'Aktivitas dari :start hingga :end',
        'users' => [
            'title' => 'pelanggan',
            'subtitle' => 'Daftar Pengguna',
        ],
        'views' => [
            'title' => 'Kunjungan',
            'subtitle' => 'Berapa kali Anda mengunjungi toko?',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Pengguna yang Kembali',

        'shop_views' => 'Tampilan Toko',
        'baskets' => [
            'title' => 'Keranjang Belanja',
            'subtitle' => 'Laporkan jumlah keranjang belanja baru',
        ],
        'products' => [
            'title' => 'Ikhtisar Produk',
            'subtitle' => 'Status produk di toko berdasarkan jenis',
            'value_name' => 'Produk'
        ],
        'products_count' => 'Jenis produk',
        'views_count' => 'Lihat jumlah',
        'sell_count' => 'jumlah penjualan',
        'send_count' => 'Jumlah pengiriman',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Pengiriman drop',
        'sub-title' => 'Panel untuk penjual utama Drop Shipping Selldone.',
        'total_fulfillments' => 'Jumlah Pesanan yang Diterima',
        'ds_count' => 'Menerima Pesanan',
        'statistics_title' => 'Laporkan pesanan yang diterima',
        'ds_cancels' => 'Batalkan oleh penjual antarmuka',
        'ds_rejects' => 'Batalkan oleh Anda',
        'tip' => "Apakah Anda seorang penjual barang utama? Apakah Anda memiliki gudang, pabrik atau distributor produk? Anda dapat menawarkan produk Anda ke penjual lain di layanan Selldone Drop Shipping untuk menjual produk Anda dalam skala besar. Email kami di support@selldone.com untuk memandu Anda.",
        'view-drop-shipping-panel' => 'Masuk ke panel grosir',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Nilai tukar',
        'sub-title' => 'Daftar kurs konversi mata uang terbaru di toko Anda.',
        'from' => 'Mata Uang Sumber',
        'to' => 'Mata uang tujuan',
        'rate' => 'Tingkat konversi',
        'view-exchange-panel' => 'Kelola Nilai Tukar',
    

        'vew-exchange-panel' => 'panel manajemen nilai tukar',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Kontrak ahli',
        'sub-title' => 'Profesional apa yang bekerja di toko saya?',
        'cost' => 'Jumlah kontrak',
        'duration' => 'Durasi',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Tanggal Batal',
        'end_at' => 'Tanggal pengiriman',
        'tip' => 'Anda dapat menyewa spesialis terbaik di Selldone untuk mengembangkan bisnis Anda.',
        'view-experts' => 'Klik untuk memulai.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Laporkan gateway pembayaran aktif di toko :shop.',
        'tip-title' => 'Tips penting',
        'tip' => "Buka halaman manajemen portal di toko Anda dan tambahkan setidaknya satu port dalam beberapa menit. Pelanggan Anda suka membayar dengan cepat dan aman melalui portal online.",
        'view-shop-gateways' => 'Masuk ke manajemen portal toko saya.',
        'view-gateways' => 'Lihat lebih banyak gateway',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Pesanan',
        'sub-title' => 'Daftar pesanan yang saya terima minggu ini.',
        'total_baskets' => 'Jumlah Pesanan',
        'total_posBaskets' => 'Jumlah Pesanan Tunai',
        'pos-title' => 'Kotak Toko POS',
        'chart-label' => 'Pesanan selesai (pesanan ini belum tentu dibayar!)',
        'tip-title' => 'Anda harus berusaha lebih keras ...',
        'tip' => "Tidak ada kesuksesan yang sederhana.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Pusat pemrosesan',
        'sub-title' => 'Berapa banyak pesanan yang kami proses di toko minggu ini?',
        'tip-title' => 'Anda tidak memiliki penjualan!',
        'tip' => "Sayangnya Anda tidak memiliki penjualan minggu ini. Anda perlu mendapatkan lebih banyak ke toko Anda. Anda dapat menambahkan lebih banyak produk, memilih gambar yang lebih baik, atau menulis deskripsi yang lebih baik untuk produk Anda. Pertimbangkan pekerjaan penuh waktu untuk bisnis Anda. Jika Anda melakukannya dengan benar dan tidak frustrasi, Anda akan berhasil.",
        'view-process-center' => 'Lihat pusat proses',
        'return' => [
            'title' => 'Pesanan yang Dikembalikan',
            'subtitle' => 'Laporkan pesanan yang dikembalikan.',
            'tip-title' => 'Apakah Anda tahu bahwa ...',
            'tip' => "Anda dapat membuat mesin kasir sebanyak yang Anda perlukan dengan Selldone POS! Baik itu tablet, ponsel, atau laptop, Anda dapat mengubah perangkat apa pun menjadi titik penjualan toko Anda. Sederhana, cepat disiapkan, dan sepenuhnya siap untuk server Anda. Mulailah menggunakannya hari ini!",
            'view-pos' => 'Masuk ke Kasir Toko Online Saya'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesi',
        'sub-title' => 'Berapa kali saya mengunjungi toko saya?',
        'countries-title' => 'Negara mana yang paling banyak dikunjungi?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Apakah Anda ingin menghasilkan uang tanpa mengeluarkan uang?',
        'message' => "Dear :name, Anda dapat pergi ke Dashboard > Demonetization dan membuat link referral. Kirim link ke teman Anda, Anda menerima kartu hadiah Selldone dan persentase pembayaran teman Anda. Perhatikan bahwa kartu hadiah akan dikirimkan kepada Anda dan teman Anda.",
        'action' => 'Lihat tautan perkenalan saya',
        'mail-clip' => "<b style='color: #C2185B'>Penting:</b> Jika Anda menggunakan layanan email seperti Gmail yang membatasi panjang email, temukan opsi berikut di akhir email untuk menampilkan laporan lengkap dan klik di atasnya:",

        'no-coin-reward' => "<b style='color: #C2185B'>Maaf:</b> Aktivitas Anda tidak memenuhi persyaratan untuk mendapatkan hadiah SEL Coins gratis. Berusaha lebih keras dan menjual lebih banyak di toko Anda untuk musim depan.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Hadiah:</b> Selamat, karena kinerja Anda yang luar biasa, kami memberi Anda hadiah gratis sebesar :amount SEL Coin.",

        'need-buy-license' => "<b>Tingkatkan Bisnis Anda:</b> Sepertinya Anda belum mendaftarkan paket berlangganan apa pun untuk situs web Anda! Tingkatkan sekarang untuk membuka lebih banyak fitur hanya dengan :amount per bulan jika dibayar setiap tahun.",
        'not-afford-message' => "Jika Anda tidak mampu atau memiliki masalah dengan pembayaran, jangan ragu untuk memberi tahu kami melalui support@selldone.com.",
        'add-domain' => "<b>Mengapa tidak memiliki domain khusus untuk bisnis Anda?</b><br> Tambahkan domain ke situs web Anda sekarang; gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone adalah<del> produk</del> <span style = 'color: forestgreen'>komunitas</span> .<br> Jadilah Penjual profesional!",
        'message' => "Ikuti halaman resmi Selldone di Twitter, LinkedIn, dan jejaring sosial. Kirimkan komentar, permintaan atau kritik kepada kami atau berpartisipasi dalam diskusi tentang Selldone. Kami juga merupakan bagian dari komunitas Selldone yang <b>Anda buat</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Pesanan Alpukat Baru Diterima|:shop_title :time',
        'title' => "Laporan kinerja selama 24 jam terakhir",
        'message' => "Pelanggan Anda sedang menunggu pesanan Anda ditinjau dan diberi harga. Tanggapi permintaan pelanggan Anda sesegera mungkin untuk mendapatkan lebih banyak penjualan.",
        'card_title' => "Pesanan dalam antrian",
        'card_subtitle' => "Sejak :date",

        'card_payed' => "Pesanan berbayar"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Balas posting Anda di :community_title',
        'title' => ":name, dan :count orang lain mengomentari kiriman Anda.",
        'message' => "Hai :name, postingan Anda mendapat perhatian! Anda telah menerima komentar di komunitas kami. Masuk ke akun Anda untuk bergabung dalam diskusi dan melihat apa yang dikatakan semua orang.",
        'title-simple' => ":name mengomentari posting Anda.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => 'Balas topik Anda :topic_title',
        'title' => ":name, dan :count orang lain menjawab topik Anda.",
        'message' => "Hai :name, topik Anda mendapat perhatian! Anda telah menerima balasan di komunitas kami. Masuk ke akun Anda untuk bergabung dalam diskusi dan melihat apa yang dikatakan semua orang.",
        'title-simple' => ":name membalas topik Anda.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Masuk Baru :name',
        'category' => 'Pemberitahuan keamanan',
        'title' => "Masuk ke Akun",
        'message' => "Dear :name, Anda telah login ke akun Selldone Anda.",   // Login in selldone (seller)
        'message-shop' => "Yang terhormat :name, Anda telah masuk ke :shop_title .",  // Login in shop (buyer)

        'footer' => "Jika Anda belum masuk, silakan ubah kata sandi Anda.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Penarikan",
        'deposit' => "Menyetorkan",

        'withdraw_subject' => "Penarikan dari akun :account",
        'deposit_subject' => "Setor ke akun :account",

        'message' => "Pengiriman uang telah dilakukan dengan spesifikasi sebagai berikut.",

        'type' => "Tipe transaksi",

        'from' => "Akun sumber",
        'to' => "Destination account",

        'desc' => "Deskripsi transaksi",
        'action' => "Lihat transaksi",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Penting! Pelanggaran aturan| :shop",
        'category' => "Informasi penting",
        'title' => "Toko Anda telah dihukum",
        'action' => "Buka dasbor toko",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter telah mengundang Anda untuk bergabung dengan Selldone",
        'title' => ":name telah mengirimi Anda :amount untuk membantu meluncurkan toko online baru Anda dan memonetisasinya!",
        'message' => "Hai **:receiver_name**,<br><br>Selamat datang di Selldone! Di Selldone, Anda dapat dengan mudah membuat situs e-niaga, blog, komunitas online, dan bahkan menyiapkan sistem POS online untuk penjualan langsung—semuanya dalam hitungan menit. Ini adalah sistem operasi bisnis online lengkap yang dirancang untuk menjadikan bisnis Anda lebih baik, lebih cepat, dan lebih mudah dijalankan.<br><br>Daftarlah sebelum <b>:date</b> dan dapatkan voucher :amount untuk memulai!",
        'accept' => "Menerima undangan",
        'owner' => "Pemilik",
        'join-date' => "Di Selldone sejak",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Tautan pemulihan| :shop",
        'category' => "Keamanan toko",
        'title' => "Simpan tautan pemulihan <b>:shop_name</b> .",
        'message' => "Email ini dikirimkan kepada Anda karena Anda meminta untuk memulihkan toko Anda. Mengklik tautan di bawah ini akan memulihkan toko Anda dan semua data miliknya.",
        'action' => "Konfirmasi Pemulihan Toko",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Berapa banyak uang yang Selldone simpan untuk bisnis Anda?',
        'sub-title' => 'Dari tanggal :start hingga :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Server, CDN, Penyimpanan, dan layanan cloud lainnya',
        ],
        'experts' => [
            'title' => 'Pakar & Staf',
            'subtitle' => 'Pengembang, pemeliharaan, dan dukungan',
        ],
        'total_save' => 'Total uang yang disimpan'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Penampilanmu',
        'sub-title' => 'Ikhtisar bisnis dari :start hingga :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Pengguna yang Kembali',

        'shop_views' => 'Tampilan Toko',
        'baskets' => [
            'title' => 'Keranjang Belanja',
            'subtitle' => 'Laporkan jumlah keranjang belanja baru',

        ],
        'products' => [
            'title' => 'Ikhtisar Produk',
            'subtitle' => 'Status produk di toko berdasarkan jenis',
            'value_name' => 'Produk'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total tampilan halaman situs web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Anda telah menerima pesanan baru. Silakan buka halaman pemrosesan pesanan di panel vendor Anda.",
        'subject' => "🛍️ Pesanan Baru Diterima| :order_id",
        'your_revenue' => "Pendapatan Anda",
    ],
    'vendor-invite' => [
        'title' => 'Undangan Vendor',
        'message' => "Anda telah menerima undangan untuk menjadi vendor :shop_name. Anda dapat menerima atau menolaknya dengan mengeklik tombol berikut.",
        'subject' => ":shop_name | Anda menerima undangan untuk menjadi vendor kami",
        'accept' => "Terima & Menjadi Vendor",
        'reject' => "Menolak",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Undangan untuk Bergabung dengan Tim Kami',
        'message' => "Anda telah diundang untuk bergabung dengan :vendor_name di :shop_name. Anda dapat menerima atau menolak undangan ini menggunakan tombol di bawah.",
        'subject' => "Undangan untuk Bergabung dengan :vendor_name|Menjadi Anggota Tim",
        'accept' => "Terima & Bergabunglah dengan Tim",
        'reject' => "Tolak",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Kode Login Anda untuk :shop",
        'header-message' => "Kami mengirimkan email ini karena Anda meminta kode login untuk toko. Temukan Kata Sandi Sekali Pakai (OTP) Anda di bawah ini:",
        'footer-message' => "Kode ini akan berlaku selama 10 menit. Jika Anda tidak meminta kode login ini, abaikan email ini."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifikasi email Anda | :shop",
        'title' => 'Verifikasi Email',
        'header-message' => "Hai :name,<br>Harap konfirmasikan bahwa **:email** adalah alamat email Anda dengan mengklik tombol di bawah atau menggunakan tautan di bawah dalam waktu 48 jam.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Pembaruan Produk| :shop",
        'title' => "Pembaruan Status Produk - 24 Jam Terakhir",
        'message' => "Saya harap pesan ini sampai kepada Anda dengan baik. Ini adalah pembaruan singkat untuk memberi tahu Anda tentang status produk Anda di platform kami selama 24 jam terakhir.\nPada periode ini terjadi perubahan status pada beberapa produk. Perubahan ini mungkin disebabkan oleh pembelian, pembaruan stok, atau peristiwa terkait lainnya.\nUntuk informasi lebih detail tentang setiap produk, silakan masuk ke akun Anda dan periksa bagian 'Status Produk'.",
        'action' => "Panel Vendor Terbuka",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Pesanan Massal Diterima| :shop | :date",
        'title' => "Pemberitahuan Pesanan Massal",
        'message' => "Anda telah menerima sejumlah pesanan massal. Silakan kunjungi halaman pemrosesan pesanan di panel Anda untuk rincian lebih lanjut. Anda juga dapat mendownload daftar pesanan melalui link aman yang tersedia, berlaku selama 7 hari.<br><br>\n        <b>PENTING:</b> Tautan ini berlaku selama 7 hari.<br>\n        Tautan ini bersifat dinamis, jadi setiap kali Anda mengkliknya, Anda akan menerima pesanan terbaru untuk tanggal tertentu. <b>Artinya, jika status pembayaran pesanan berubah menjadi ditolak, Anda tidak akan lagi melihat pesanan tersebut di CSV yang diunduh, atau jika pesanan sudah dibayar, maka akan muncul di daftar.</b><br><br>\n        <ul>\n            <li>CSV berisi pesanan berbayar dengan tanggal yang dipesan di :date.</li>\n            <li>Reserved date adalah tanggal ketika pengguna mengklik checkout pada halaman pesanan.</li>\n        </ul>\n        <b>Untuk mencegah duplikasi pesanan, selalu periksa Pesanan ID sebelum dikirim.</b>",
        'action' => "Unduh Daftar Pesanan",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Beberapa item dalam pesanan Anda tidak diterima dan tidak dapat dikirimkan. Jumlah barang-barang ini akan segera dikembalikan ke kartu Anda."
    ]

];
