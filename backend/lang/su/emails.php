<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Pesen ieu ngabagéakeun anu mésér énggal ka toko.',
        ShopMailTemplateCodes::OrderCheckout => 'Bewara ieu dikirim nalika pembeli mastikeun pesenan.',
        ShopMailTemplateCodes::OrderPayment => 'Bewara ieu mastikeun pamayaran anu suksés dilakukeun ku palanggan.',
        ShopMailTemplateCodes::OrderUpdate => 'Pesen ieu dikirim pikeun ngapdet hiji pembeli dina status pesenan maranéhanana.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Pesen ieu dikirim ka seller pikeun ngabéjaan yén pesenan anu dikonfirmasi.',
        ShopMailTemplateCodes::PosCheckout => 'Bewara ieu dikirim pikeun ngonfirmasi pesenan titik jual pikeun anu mésér.',
        ShopMailTemplateCodes::PosPayment => 'Bewara ieu mastikeun pamayaran titik jual anu dilakukeun ku anu mésér.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Pesen ieu ngabéjaan seller ngeunaan pameseran anu dilakukeun di tempat penjualanna.',
        ShopMailTemplateCodes::ShopContact => 'Bewara ieu dikirim nalika formulir kontak parantos dikintunkeun.',
        ShopMailTemplateCodes::ShopGiftCard => 'Bewara ieu ngawartosan pangguna yén aranjeunna nampi kartu kado.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Pesen ieu ngabagéakeun vendor énggal ka toko.',
        ShopMailTemplateCodes::ShopVendorInvite => "Pesen ieu dikirim pikeun ngundang vendor pikeun gabung ka pasar anjeun.",
        ShopMailTemplateCodes::ShopVendorOrder => "Pesen ieu dikirim ka anu ngajual nalika pesenan ditampi dina status Paid atanapi Cash on Delivery (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Dikirimkeun unggal dinten pikeun ngapdet vendor ngeunaan status produkna.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Pesen ieu dikirim pikeun ngundang vendor pikeun gabung ka pasar anjeun.",

        ShopMailTemplateCodes::UserLogin => "Béjakeun ka pangguna kalayan detil login, kalebet alamat IP, tanggal, sareng alat, pikeun tujuan kaamanan.",
        ShopMailTemplateCodes::LoginCode => "Kirim hiji-waktos kodeu sandi pikeun pamaké pikeun log in ka toko.",

        ShopMailTemplateCodes::EmailVerifyLink => "Kirim tautan pikeun pariksa alamat email pangguna. Email ieu dikirim nalika pangguna ngadaptar ku SMS sareng ngalebetkeun emailna. Éta henteu dikirim nalika pangguna ngadaptar langsung nganggo login sosial atanapi email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Kirim daptar pesenan anu ditampi sareng anu mayar sacara ageung pikeun dinten anu khusus."


    ,

    ],


    'global' => [
        'greetings' => 'Hai, :name!',
        'end-statement' => 'Tim rojongan',

        'receiver_name' => 'Hai :user_name',
        'footer-help' => "Peryogi bantosan? Tanya di [support@selldone.com](mailto:support@seldone.com) atanapi buka [pusat pitulung] kami (https://selldone.com/community).",
        'selldone-team' => 'Tim Selldone',
        'footer-shop' => "Lamun perlu pitulung kalayan nanaon, punten ulah ragu pikeun surélék urang: :shop_mail",
        'accept' => "Narima",
        'reject' => "Nolak",
        'verify' => "pariksa",
        'title' => "Judul",
        'value' => "Nilai",
        'description' => "Katerangan",
        'shop' => "Toko",
        'shop-info' => "Émbaran toko",
        'user' => "pamaké",
        'user-info' => "Émbaran Akun",
        'license' => "Lisensi",
        'status' => "Status",
        'start' => "Mimitian",
        'end' => "Tungtung",
        'renewal' => "Pembaharuan",
        'view' => "Témbongkeun",

        'balance' => "Kasaimbangan",
        'card_number' => "Nomer kartu",
        'cvv' => "Cvv",
        'expire_date' => "titimangsa béakna",

        'Dashboard' => "Dasbor",
        'order' => "pesenan",
        'view_order' => "Témbongkeun urutan",
        'pay_now' => "Pay now",

        'official_selldone' => "RESMI DIJUAL",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Mata uang",
        'free-balance' => "Kasaimbangan bébas",
        'locked-balance' => "Kasaimbangan dikonci",
        'bot' => "Bot",
        'requests' => "Paménta",
        'baskets' => 'Gorobag',
        'physical' => "Fisik",
        'virtual' => "Maya",
        'file' => "File",
        'service' => "Palayanan",
        'fulfillment' => "minuhan",
        'open' => "Muka",
        'reserved' => "Ditangtayungan",
        'canceled' => "Dibolaykeun",
        'payed' => "Dibayar",
        'cod' => "COD",
        'orders-count' => 'Paréntah',
        'payments-count' => 'Pangmayaran',
        'confirms-count' => 'Negeskeun',
        'sends-count' => 'Ngirimkeun',
        'delivers-count' => 'Nganteurkeun',
        'count' => 'Ngitung',
        'transactions-count' => 'Transaksi cacah',
        'success-transactions' => 'Transaksi suksés',
        'total-amount' => 'Jumlah total',
        'amount' => 'Jumlah',
        'wage' => 'Gajih',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Hirup',
        'CheckQueue' => 'Pariksa antrian',
        'OrderConfirm' => 'Konfirmasi pesenan',
        'PreparingOrder' => 'Nyiapkeun pesenan',
        'SentOrder' => 'Dikirim pesenan',
        'ToCustomer' => 'Dikirimkeun ka konsumén',
        'Pending' => 'Ditunggu',
        'Accepted' => 'Ditarima',
        'Rejected' => 'Ditampik',
        'pc' => 'PC',
        'tablet' => 'Tablét',
        'phone' => 'Telepon',
        'total' => 'Total',
        'view-detail' => 'Ningali detil',
        'empty' => 'Kosong',
        'dropshipping' => 'Dropshipping',
        'reply' => 'ngawaler',
        'reactions' => 'Réaksi',
        'Comments' => 'Koméntar',
        'last-comment' => 'komentar panungtungan',
        'response-to' => 'Tanggapan kana',
        'posts' => 'Tulisan',
        'post' => 'Pos',

        'name' => 'Ngaran',
        'email' => 'Surélék',
        'type' => 'ngetik',
        'device' => 'Paranti',
        'platform' => 'Platform',
        'browser' => 'Pangotektak',
        'time' => 'Waktos',
        'Wallet' => 'Dompét',
        'date' => 'Kaping',

        'account' => 'Rekening',
        'transaction' => 'Transaksi',
        'fee' => 'waragad',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategori',
        'password' => 'Sandi',
        'verify-login' => "Pariksa & Login",
        'url' => 'URL',
        'avocado' => 'Alpuket',
        'hyper' => 'Hiper',
        'buy-now' => "Mésér ayeuna",
        'add-domain' => "Add Domain",
        'views' => 'Pandangan',


        'country' => 'Nagara',
        'address' => 'alamat',
        'postal' => 'Kodeu Pos',
        'building_no' => 'Gedong #',
        'building_unit' => 'Unit #',
        'message' => 'talatah',


        'customer' => 'Palanggan',
        'cart-items' => 'Barang karanjang',
        'payment' => 'pangmayaran',
        'receiver' => 'panarima',
        'virtual-items' => 'Barang virtual',
        'no-payment' => 'Teu mayar!',

        'enable' => 'Aktipkeun',
        'access' => 'Aksés',
        'bank' => 'Inpo bank',

        'vendor' => 'Ngajual',

        'view_content' => "Nempo eusi pinuh",
        'files' => 'File',
        'download' => 'Ngundeur',
        'file_name' => 'Nami file',
        'file_size' => 'Ukuran',

        'subscription' => 'Langganan',
        'products' => 'Produk',
        'vendor_products' => 'Ngajual Produk',

        'pickup' => 'Angkat',

        'minutes' => 'Menit',
        'hours' => 'Jam-jaman',

        'refund' => 'Ngabalikeun duit',
        'recipient_address' => 'Alamat panarima',
        'signature' => 'Tanda tangan',
        'blockchain' => 'Blockchain',
        'details' => 'Rincian',


    

        'Shop' => 'Toko',
        'dashboard' => 'dasbor',
        'comments' => 'komentar',
        'wallet' => 'dompét',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "OS Usaha Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Laporan kinerja, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Laporan musiman, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hi',
            'name' => 'Nyatujuan, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Rojongan :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verifikasi, Selldone'
        ],
        'Welcome' => [
            'id' => 'hi',
            'name' => 'Komunitas, Selldone'
        ],
        'NewShop' => [
            'id' => 'padagang',
            'name' => 'Nyatujuan, Selldone'
        ],
        'Approve' => [
            'id' => 'nyatujuan',
            'name' => 'Nyatujuan, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Manajemén pesenan :name'
        ],

        'Recovery' => [
            'id' => 'pamulihan',
            'name' => 'Tim Pamulihan Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Ditunggu ⌛',
        'PAYED' => 'Dibayar ✅',
        'CANCELED' => 'Dibolaykeun ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Pangurus',
            'OFFICER' => 'Patugas jeung Pengawas',
            'AUDITING' => 'Manajer auditing',
            'EMPLOYEE' => 'Pagawe',
            'PRODUCT' => 'Manajer produk',
            'CONTENT' => 'Pangatur eusi',
            'MARKETING' => 'Manajer pamasaran',
            'VIEWER' => 'Panempoan',

        ],
        'subject' => ":inviter diondang anjeun salaku :level| :shop",
        'category' => "uleman staf",
        'title' => "Anjeun geus diondang ka <b>:shop_name</b> salaku <b>:level</b> .",
        'message' => "Anjeun parantos nampi uleman pikeun kolaborasi sareng tim <b>:shop_title</b> dina bisnis. Anjeun gaduh pilihan pikeun nampi atanapi nolak panawaran ieu. Upami anjeun milih nampi, mangga lebet kana jasa Selldone pikeun mastikeun kaputusan anjeun. Saatos konfirmasi, anjeun bakal kéngingkeun aksés kana bagian manajemén toko.",

    ],

    'welcome-email' => [
        'subject' => "👋 Wilujeng sumping :name, Hayu urang Mimitian ku Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Wilujeng sumping di Selldone",
        'message' => "Hatur nuhun pikeun milih Selldone! Anjeun ayeuna mangrupikeun bagian tina komunitas anu dinamis anu ngahubungkeun penjual global ka konsumén, usaha lokal ka perusahaan, sareng individu ka korporasi. Sadaya alat Master sareng Pro kami sayogi pikeun anjeun ** gratis ** sareng ** henteu terbatas **. Kami di dieu pikeun ngadukung anjeun sareng muka panto pikeun kasuksésan anjeun.",

        'index' => "Lengkah :step.",

        'step-domain' => [
            'title' => 'Tambahkeun Domain Adat Anjeun',
            'message' => "Pikeun ngamimitian, tambahkeun domain khusus anjeun gratis dina Dashboard Toko di handapeun Setélan> Setélan Domain.",
            'action' => 'Atur Domain Abdi',
        ],
        'step-landing' => [
            'title' => 'Sesuaikeun Halaman Imah anjeun',
            'message' => "Pribados halaman bumi anjeun ku angkat ka Dashboard> Halaman. Pilih halaman badarat atanapi jieun anu énggal. Éta gampang sareng intuitif, sareng anjeun tiasa langsung ngerjakeunana.",
            'action' => 'Sesuaikeun Kaca Landing Abdi',
        ],
        'step-payment' => [
            'title' => 'Setup Métode pamayaran',
            'message' => "Mimitian nampi pangmayaran langsung kana rekening bank anjeun. Pikeun nyambungkeun panyadia pamayaran anjeun sapertos Stripe, PayPal, sareng seueur deui, buka Dashboard> Accounting> Gateway.",
            'action' => 'Tambahkeun Métode pamayaran',
        ],
        'step-products' => [
            'title' => 'Tambahkeun Produk Anjeun',
            'message' => "Easily add products and categories in the Dashboard > Products. Éta sapertos ngatur file sareng polder dina PC anjeun - sered-sareng-leupaskeun siap. Anjeun ogé tiasa ngimpor produk bulk nganggo Excel. Sampel template sayogi pikeun ngabantosan anjeun ngamimitian.",
            'action' => 'Atur Produk abdi',
        ],
        'step-shipping' => [
            'title' => 'Setup Métode Pangiriman',
            'message' => "Pikeun ngecas palanggan pikeun pengiriman barang, tangtukeun metode pengiriman anjeun dina Dashboard> Logistik> Pengiriman. Anjeun tiasa nyetél harga sareng dukungan anu béda pikeun sababaraha lokasi. Tong hilap nyetél asal gudang anjeun dina Dashboard> Logistik> Gudang.",
            'action' => 'Atur Métode Pangiriman',
        ],
    

        'seller' => [
            'title' => 'Dupi anjeun seller?',
            'message' => 'Pikeun ngamimitian ngajual, lebetkeun dasbor anjeun di Selldone ngalangkungan tautan di handap ieu sareng jieun toko munggaran anjeun gratis. Ieu peryogi sababaraha menit sareng anjeun bakal gaduh toko sareng situs online anjeun nyalira. Kami teras bakal nungtun anjeun kana léngkah-léngkah salajengna sareng kéngingkeun gateway pamayaran.',
            'action' => 'Asup ka dasbor kuring',
        ],
        'buyer' => [
            'title' => 'Abdi pembeli',
            'message' => 'ngawilujengkeun. Sakali anjeun jadi anggota Selldone, anjeun bakal meunang leupas tina sagala hassles of kaanggotaan sarta auténtikasi di toko online. Pikeun kauntungan tina toko sareng situs anu nganggo platform Selldone, anjeun tiasa log in sareng hiji klik sareng ngajantenkeun pameseran anjeun saderhana, gancang sareng aman.',
        ],
    ],


    'charge-account' => [
        'category' => 'Dompét> Akun> Muatan',
        'title' => "Tagihan Kasuksesan",
        'message' => "Rekening anjeun <b>:account_number</b> parantos suksés ditagihkeun <b>:amount</b>.",
        'account' => 'Rekening',
        'charge' => 'muatan',
        'balance' => 'Kasaimbangan',
        'footer' => "Jieun bisnis gampang, achievable, sarta diaksés ku saha di sakuliah dunya."
    ],

    'verify-email' => [
        'subject' => "🙌 Lengkepkeun pendaptaran anjeun ka Selldone! Pariksa link.",
        'category' => "MANEH SALAH LENGKAH",
        'title' => "Verifikasi alamat surélék anjeun",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Upami anjeun ngalaman masalah ngaklik tombol Verifikasi, salin sareng témpél URL di handap ieu kana browser wéb anjeun: :activation_url",
        'next-step' => "Salajengna, kami bakal ngintunkeun anjeun sababaraha bahan anu mangpaat sareng pituduh léngkah-léngkah pikeun ngagampangkeun anjeun nambihan domain khusus anjeun, nyetél pamayaran, nambihan produk, sareng nampi pesenan munggaran anjeun.",

    ],
    'verify-email-code' => [
        'subject' => "Kodeu verifikasi pikeun :name",
        'category' => "SECURITY",
        'title' => "Kode verifikasi surélék",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Toko Anjeun Siap| :name",
        'category' => "MANEH SALAH LENGKAH",
        'title' => "Setup réngsé",
        'account_title' => "Akun anjeun",
        'account_msg' => "Pariksa sareng login ka akun anjeun nganggo inpormasi ieu.",
        'shop_msg' => "Inpo akun dina sistem operasi bisnis Selldone.",

    ],

    'reset2fa' => [
        'category' => "PESAN RESMI KAAMANAN",
        'title' => "Nyuhunkeun mareuman login 2 léngkah",
        'message' => "Anjeun nampi email ieu kusabab kami nampi pamundut pikeun ngareset auténtikasi dua faktor pikeun akun **:name** sareng email **:email**.",
        'footer' => "Upami anjeun henteu menta reset sandi, teu aya tindakan salajengna anu diperyogikeun.",
        'action' => 'Nonaktipkeun login dua-hambalan',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Toko anjeun parantos siap ayeuna!",
        'category' => "Lahir toko ONLINE anyar di dunya",
        'title' => "ucapan salamet, :name!",
        'message' => "<b>Wilujeng, :name! Bisnis online anyar anjeun ayeuna hirup!</b> Kami bungah ngabagéakeun anjeun ka komunitas Selldoners. Anjeun parantos nyandak léngkah munggaran pikeun suksés, sareng kami di dieu pikeun ngabantosan anjeun dina unggal léngkah. Upami anjeun peryogi bantosan, kami ngan ukur pesen-tim dukungan kami salawasna aya pikeun anjeun.<br><br><b>Penting Lengkah Salajengna:</b> Pikeun ngamimitian, pastikeun anjeun parantos siap pikeun nampi pamayaran sareng operasi anu lancar. Kami bakal nungtun anjeun dina unggal tahapan pikeun ngajantenkeun toko anjeun lancar.",
        'pdf-book' => "Ulah sono buku leungeun napel: Ngalakukeun Usaha Anjeun Kawas Kaulinan",

        'account' => [
            'title' => 'Lengkah 1: Jieun akun dina dompét Selldone',
            'message' => "Pikeun ngamimitian, jieun akun dina dompét Selldone anjeun. Ieu dimana biaya anjeun bakal dipotong, sareng éta ogé dimana anjeun bakal top up pikeun ngajaga toko anjeun lancar. Upami kasaimbangan anjeun kantos négatip, tong hariwang! Toko anjeun bakal terus beroperasi tanpa gangguan.",
            'action' => 'Asup kana dompét',
        ],

        'shop-account' => [
            'title' => 'Lengkah 2: sambungkeun akun ka toko',
            'message' => "Salajengna, sambungkeun akun dompét anjeun ka toko anjeun. Pindah ka <b>Store> Akunting> Invoice</b>, sareng numbu dompét anjeun. Ieu mastikeun yén sadaya pamayaran palanggan disimpen langsung kana rekening bank anjeun-Selldone henteu ngirangan jumlah tina penghasilan anjeun.",
            'action' => 'Toko Invoice Panel',
        ],

        'gateway' => [
            'title' => 'Lengkah 3: Sambungkeun Gateway Pembayaran Online',
            'message' => "Ayeuna, hayu urang nyetél gateway pamayaran online anjeun. Buka <b>Store> Akunting> Port</b> teras klik dina <b>Tambahkeun New Port</b>. Pilih mata uang Anjeun, tur Anjeun bakal ningali daptar gateways pembayaran sadia. Nyambungkeun gateway a gancang jeung gampang, tapi lamun butuh pitulung naon baé, ngarasa Luncat ka pariksa pituduh Selldone atawa ngahontal kaluar ka kami.",
            'action' => 'Tambahkeun portal ka toko',
        ],

        'domain' => [
            'title' => 'Léngkah terakhir: nyambungkeun domain khusus',
            'message' => "Ayeuna, numbu domain custom anjeun ka toko Anjeun. Hal ieu ngamungkinkeun para nasabah mésér produk atanapi jasa anjeun sareng mayar langsung ka anjeun.",
            'action' => 'Ngawanohkeun jeung narima kartu kado taya',
        ],
    ],


    'basket-list' => [
        'item' => "barang",
        'count' => "Ngitung",
        'price' => "hargaan",
        'discount-code' => "Kode diskon",
        'customer-club' => 'Klub palanggan',
        'shipping' => "Balanja",
        'total' => "Total",
        'offer' => "Panawaran",
        'coupon' => "Kupon",
        'lottery' => "pangajén",
        'tax' => "Pajeg",
        'tax_included' => "Kaasup dina harga",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Métode',
        'amount' => 'Jumlah',
        'giftcard' => 'Gift card',
        'payment' => 'pangmayaran',
    ],


    'shop-subscription-email' => [
        'category' => "Pembaruan langganan",
        'title' => "Lisensi toko::shop_title",
        'title-reserved' => "Lisensi cadangan::shop_title",
        'title-active' => "Lisensi aktip::shop_title",
        'title-finished' => "Lisensi réngsé::shop_title",
        'title-cancel' => "Ngabolaykeun lisénsi: :shop_title",
        'message' => "Rencana lisénsi toko anjeun diropéa,",
        'RESERVED' => "⚡ Rencana langganan anjeun parantos **dicadangkeun**.",
        'ACTIVE' => "🟢 Rencana langganan anjeun parantos **diaktipkeun**.",
        'FINISHED' => "🚧 Rencana langganan anjeun parantos **réngsé**.",
        'CANCEL' => "⛔ Rencana langganan anjeun parantos **dibatalkeun**.",
    ],

    'support' => [
        'subject' => "Puseur Rojongan|:name ngawaler",
        'category' => "Puseur rojongan",
        'title' => "Anjeun nampi réspon",
        'action' => "Buka admin toko",
    ],

    'shop-customer-join' => [
        'subject' => "Gabung:shop_title",
        'category' => "Perayaan konsumén anyar",
        'title' => "Kami senang pikeun kaanggotaan Anjeun",
        'action' => "Nganjang ayeuna",
    ],

    'shop-vendor-join' => [
        'subject' => "Vendor Onboarding| :shop_title",
        'category' => "Perayaan vendor anyar",
        'title' => "Kami senang pikeun kaanggotaan Anjeun",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kartu kado :shop_title",
        'category' => "Tambahkeun kartu anyar",
        'title' => "Gening, anjeun parantos nampi kartu kado",
        'action' => "Balanja ayeuna",
        'message' => "Anjeun geus narima kartu kado patut :balance :currency. Anjeun tiasa nganggo kartu kado ieu di toko kami.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Puseur Rojongan| :shop",
        'category' => "rojongan",
        'title' => "Anjeun nampi réspon",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Konfirmasi Pesanan|Pesenan :order_id",
        'title' => "pesenan",
        'message' => "Anjeun nempatkeun pesenan di toko kami. Kami nampi pesenan anjeun sareng bakal ngirim email anu sanés saatos pamayaran dikonfirmasi."
    ,

        'payments' => 'Pangmayaran',
    ],

    'order-payment' => [
        'subject' => "🛍️ Konfirmasi Pembayaran|Pesenan :order_id",
        'title' => "Urutan pamayaran",
        'message' => "Pembayaran anjeun parantos réngsé,<br> Kami ngagaduhan pesenan anjeun. Kami bakal ngirim email anu sanés nalika pesenan anjeun dikirim.",
    

        'payments' => 'Pangmayaran',
    ],

    'order-update' => [
        'subject' => "🛍️ Update Status Pesenan|Pesenan :order_id",
        'title' => "Update Status pesenan",
        'message' => "pesenan anjeun geus diropéa. Anjeun tiasa pariksa status panganyarna tina urutan ieu dina akun anjeun.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Pesenan anjeun aya dina antrian pikeun ngolah. Kami bakal ngabéjaan anjeun nalika éta disiapkeun.",
                'OrderConfirm' => "Pesenan anjeun dikonfirmasi sareng persiapan parantos dimimitian.",
                'PreparingOrder' => "Pesenan anjeun nuju disiapkeun sareng bakal dikirim pas.",
                'SentOrder' => "pesenan anjeun geus dikirim. Anjeun bakal nampi éta sakedap.",
                'ToCustomer' => "pesenan anjeun geus dikirimkeun. Simkuring miharep anjeun ngarasakeun eta!",

                'PreparingOrder-PICKUP' => "pesenan anjeun keur disiapkeun. Anjeun bakal nampi béwara nalika tos siap dijemput.",
                'SentOrder-PICKUP' => "Pesenan anjeun siap dijemput. Mangga sumping ka toko pikeun ngumpulkeun éta.",
                'ToCustomer-PICKUP' => "pesenan anjeun geus dijemput. Simkuring miharep anjeun ngarasakeun eta!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Your order is in the queue for processing. Kami bakal ngawartosan anjeun nalika parantos siap.",
                'OrderConfirm' => "Pesenan anjeun dikonfirmasi sareng persiapan nuju lumangsung.",
                'PreparingOrder' => "Pesenan anjeun nuju disiapkeun sareng bakal dikirim ka anjeun pas.",
                'ToCustomer' => "Pesenan virtual anjeun parantos dikirimkeun ka akun anjeun. Hatur nuhun!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Paménta jasa anjeun aya dina antrian. Kami bakal ngabéjaan nalika urang ngamimitian.",
                'OrderConfirm' => "Palayanan anjeun dikonfirmasi sareng kami nuju nyiapkeun pikeun ngamimitian.",
                'PreparingOrder' => "Kami nuju nyiapkeun jasa anjeun, sareng bakal ngawartosan anjeun saatos réngsé.",
                'ToCustomer' => "jasa anjeun réngsé. Hatur nuhun pikeun milih kami!"
            ],
            'FILE' => [
                'PreparingOrder' => "Berkas anjeun nuju disiapkeun sareng bakal sayogi pas.",
                'ToCustomer' => "Your file is ready and has been delivered. Anjeun ayeuna bisa ngundeur éta."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Urutan langganan anjeun aya dina antrian. Kami bakal ngabéjaan nalika pamrosésan dimimitian.",
                'OrderConfirm' => "Langganan anjeun parantos dikonfirmasi sareng nuju disetél.",
                'PreparingOrder' => "Kami nyiapkeun langganan anjeun sareng éta bakal ngamimitian pas.",
                'SentOrder' => "Langganan anjeun parantos diaktipkeun. Anjeun bakal nampa apdet lumangsung.",
                'ToCustomer' => "Ladenan langganan anjeun parantos suksés diaktipkeun."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Wilujeng :name|Voucher anyar: :title',
        'category' => "WILUJENG, VOUCHER anyar",
        'message' => "Hei :name,<br><br>Anjeun parantos nampi voucher énggal salaku kado ti kami! Anjeun tiasa kéngingkeun langkung seueur voucher ku ngenalkeun Selldone ka réréncangan sareng saha waé anu anjeun terang. voucher Ieu patut **:price :currency**.<br><br>Anjeun geus nyokot léngkah munggaran, sarta kami di dieu pikeun mantuan Anjeun muka konci fitur anyar kalawan voucher Anjeun! Mangga login kalawan ** :email ** sarta manggihan voucher anjeun dina Toko ** Dashboard ** > ** Setélan ** > ** Lisensi ** .<br><br>Congratulations!",
        'action' => "dasbor kuring",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Wilujeng, Dear :name | Anjeun geus narima hadiah',
        'category' => "Pengumuman nampi kado",
        'title' => "Hadiah pikeun anjeun",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "kado",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Orde Baru Ditampi| :order_id",
        'title' => "New Order",
        'message' => "Anjeun parantos nampi pesenan énggal. Punten angkat ka halaman pangolahan pesenan di toko anjeun.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Émbaran Anjeun dieusian',
        'output-form-title' => 'Inpo item dibeuli',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Laporan mingguan :time',
        'title' => 'Laporan kinerja toko mingguan',
        'message' => "Ieu laporan mingguan toko anjeun ti <b>:start</b> ka <b>:end</b>. laporan ieu ngawengku tips pikeun ngaronjatkeun Anjeun bisnis, anjeun ogé tiasa pariksa status toko online anjeun sarta pesenan panganyarna. Abdi ngarepkeun anjeun gaduh dinten anu saé sareng minggu payun."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Laporan tabungan :amount anjeun dina tilu bulan terakhir| :shop_title',
        'title' => 'Laporan musiman ngeunaan kagiatan bisnis anjeun, ganjaran sareng tabungan kauangan',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Rekening disambungkeun',
        'sub-title' => 'Naon status panganyarna tina akun dompét disambungkeun ka toko kuring?',
        'view-wallet' => 'Témbongkeun dompét',
        'tip-title' => 'tips penting',
        'tip' => "Nyetél dompét Selldone gratis sareng numbu ka toko anjeun. Sanaos kasaimbangan anjeun négatip, palanggan anjeun masih tiasa balanja sareng mayar tanpa masalah. Tong hariwang, operasi sareng data toko anjeun bakal lancar dugi ka 1 sasih, tanpa gangguan.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Nyambung ka akun'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplikasi dipasang',
        'sub-title' => 'Daptar aplikasi anu anjeun pasang di toko minggu ieu.',
        'tip' => "Naha anjeun hoyong milarian langkung seueur aplikasi pikeun toko anjeun?",
        'view-app-store' => 'Kunjungi Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bot Toko Anjeun',
        'sub-title' => 'bot jualan aktip di toko kuring.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone parantos nyayogikeun anjeun bot penjualan otomatis. Sadaya anu anjeun kedah laksanakeun nyaéta angkat kana panel Add-ons> Bots sareng aktipkeun bot toko anjeun. Catet yén ladenan anu relevan kedah sayogi di nagara anjeun.",
        'view-bots' => 'Atur bot',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikasi sareng Konsumén',
        'sub-title' => 'Sabaraha kontak anu kuring gaduh sareng klien kuring minggu ieu?',
        'faqs' => 'Patarosan anu sering ditaroskeun',
        'tickets' => 'Tiket konsumén',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status pamaké',
        'sub-title' => 'Kagiatan ti :start mun :end',
        'users' => [
            'title' => 'Palanggan',
            'subtitle' => 'Pamaké ngadaptar',
        ],
        'views' => [
            'title' => 'Nganjang',
            'subtitle' => 'Sabaraha kali anjeun nganjang ka toko',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Pamaké Dipulangkeun',

        'shop_views' => 'Toko Views',
        'baskets' => [
            'title' => 'Gorobag balanja',
            'subtitle' => 'Ngalaporkeun jumlah carts balanja anyar',
        ],
        'products' => [
            'title' => 'Produk Ihtisar',
            'subtitle' => 'Status produk di toko dumasar jenis',
            'value_name' => 'Produk'
        ],
        'products_count' => 'Jenis produk',
        'views_count' => 'Jumlah pintonan',
        'sell_count' => 'Ngajual cacah',
        'send_count' => 'Jumlah pangiriman',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Pengiriman barang',
        'sub-title' => 'Panel pikeun anu ngajual utama Drop Shipping Selldone.',
        'total_fulfillments' => 'Total pesenan Ditampi',
        'ds_count' => 'Narima pesenan',
        'statistics_title' => 'Laporan narima pesenan',
        'ds_cancels' => 'Ngabolaykeun ku seller panganteur',
        'ds_rejects' => 'Batal ku Anjeun',
        'tip' => "Naha anjeun seller ageung sareng gudang, pabrik, atanapi distributor produk? Anjeun tiasa ngalegaan jangkauan anjeun ku nawiskeun produk anjeun ka penjual sanés ngalangkungan jasa Drop Shipping Selldone. Surélék kami di support@selldone.com pikeun neuleuman leuwih.",
        'view-drop-shipping-panel' => 'Login ka panel borongan',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Nilai tukeur',
        'sub-title' => 'Daptar tingkat konversi mata uang panganyarna dina toko anjeun.',
        'from' => 'Sumber Mata Uang',
        'to' => 'mata uang tujuan',
        'rate' => 'Laju konvérsi',
        'view-exchange-panel' => 'Atur Nilai tukeur',
    

        'vew-exchange-panel' => 'panel manajemén Nilai tukeur',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'kontrak ahli',
        'sub-title' => 'Anu profésional damel di toko kuring?',
        'cost' => 'Jumlah kontrak',
        'duration' => 'Lilana',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Tanggal Ngabolaykeun',
        'end_at' => 'Tanggal pangiriman',
        'tip' => 'Anjeun tiasa nyewa spesialis pangsaéna di Selldone pikeun ngembangkeun bisnis anjeun.',
        'view-experts' => 'Klik pikeun ngamimitian.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Gateways pamayaran aktip dina Toko Anjeun :shop',
        'tip-title' => 'tips penting',
        'tip' => "Buka kaca manajemén portal di toko anjeun sarta tambahkeun sahanteuna hiji port dina sababaraha menit. Palanggan anjeun resep mayar gancang sareng aman ngalangkungan portal online.",
        'view-shop-gateways' => 'Login ka manajemén portal toko kuring.',
        'view-gateways' => 'Tempo deui gateways',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Paréntah',
        'sub-title' => 'Daptar pesenan kuring nampi minggu ieu.',
        'total_baskets' => 'Jumlah Pesenan',
        'total_posBaskets' => 'Jumlah Pesanan Tunai',
        'pos-title' => 'Kotak Toko POS',
        'chart-label' => 'Pesenan réngsé (pesenan ieu henteu kedah dibayar!)',
        'tip-title' => 'Anjeun kedah nyobian langkung keras ...',
        'tip' => "Taya kasuksésan basajan.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Puseur ngolah',
        'sub-title' => 'Sabaraha pesenan kami diolah di toko minggu ieu?',
        'tip-title' => 'Anjeun teu boga jualan!',
        'tip' => "Hanjakal anjeun teu ngagaduhan penjualan minggu ieu. Anjeun kedah langkung seueur ka toko anjeun. Anjeun tiasa nambihan langkung seueur produk, milih gambar anu langkung saé atanapi nyerat déskripsi anu langkung saé pikeun produk anjeun. Pertimbangkeun padamelan sepenuh waktos pikeun bisnis anjeun. Upami anjeun ngalakukeun éta leres sareng henteu frustasi, anjeun bakal suksés.",
        'view-process-center' => 'Témbongkeun puseur prosés',
        'return' => [
            'title' => 'Pesenan Dipulangkeun',
            'subtitle' => 'Ngalaporkeun pesenan dipulangkeun.',
            'tip-title' => 'Naha anjeun terang yén ...',
            'tip' => "Anjeun tiasa nyieun saloba cash registers nu peryogi kalawan Selldone POS! Naha éta tablet, sélulér, atanapi laptop, anjeun tiasa ngaktipkeun alat naon waé janten tempat penjualan toko anjeun. Ieu basajan, gancang nyetél, sarta pinuh disiapkeun pikeun server Anjeun. Mimitian nganggo éta ayeuna!",
            'view-pos' => 'Login ka Kasir Toko Online Abdi'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'sési',
        'sub-title' => 'Sabaraha kali kuring nganjang ka toko kuring?',
        'countries-title' => 'Nagara mana anu paling sering didatangan?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Naha anjeun badé kéngingkeun artos tanpa ngaluarkeun artos?',
        'message' => "Dear :name, anjeun tiasa angkat ka Dashboard> Demonetization sareng ngadamel tautan rujukan. Kirim link ka babaturan anjeun, Anjeun nampa hiji kartu kado Selldone sarta perséntase pangmayaran sobat anjeun. Catet yén kartu kado bakal dikirim ka anjeun sareng sobat anjeun.",
        'action' => 'Tingali tautan perkenalan kuring',
        'mail-clip' => "<b style='color: #C2185B'>Penting:</b> Upami anjeun nganggo jasa email sapertos Gmail anu ngabatesan panjang email, panggihan pilihan di handap ieu di tungtung email pikeun ningalikeun laporan lengkep sareng pencét éta:",

        'no-coin-reward' => "<b style='color: #C2185B'>Hapunten:</b> Aktivitas anjeun henteu nyumponan sarat pikeun kéngingkeun ganjaran SEL Coins gratis. Coba harder jeung ngajual leuwih on toko Anjeun pikeun usum hareup.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Wilujeng:</b> Karya anu saé! Dumasar kana kinerja luar biasa anjeun, kami geus credited :amount SEL koin kana akun anjeun salaku ganjaran.",

        'need-buy-license' => "<b>Level Up Usaha Anjeun:</b> Sigana anjeun teu acan ngadaptarkeun rencana langganan pikeun ramatloka anjeun! Ningkatkeun ayeuna pikeun muka konci langkung seueur fitur ngan ukur :amount per bulan upami dibayar taunan.",
        'not-afford-message' => "Upami anjeun nuju nyanghareupan masalah naon waé ngeunaan pamayaran atanapi henteu mampuh ayeuna, tong ragu pikeun ngahubungi kami di support@selldone.com.",
        'add-domain' => "<b>Naha henteu gaduh domain khusus pikeun bisnis anjeun?</b><br> Tambahkeun domain ka ramatloka anjeun ayeuna; éta bébas!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone nyaéta a<del> produk</del> <span style = 'color: forestgreen'>masarakat</span> .<br> Janten Selldoner profésional!",
        'message' => "Turutan halaman resmi Selldone dina Twitter, LinkedIn sareng jaringan sosial. Kirimkeun kami koméntar, pamundut atanapi kritik atanapi ilubiung dina diskusi ngeunaan Selldone. Kami ogé bagian tina komunitas Selldone nu <b>Anjeun jieun</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Pesenan Alpukat Anyar Ditampi|:shop_title :time',
        'title' => "Laporan kinerja pikeun 24 jam panungtungan",
        'message' => "Palanggan anjeun ngantosan pesenan anjeun diulas sareng hargana. Ngabales pamundut konsumén Anjeun pas mungkin pikeun meunangkeun leuwih jualan.",
        'card_title' => "Pesenan dina antrian",
        'card_subtitle' => "Kusabab :date",

        'card_payed' => "Paréntah mayar"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Bales kana tulisan anjeun dina:community_title',
        'title' => ":name na :count batur geus ngagabung dina paguneman dina tulisan anjeun!",
        'message' => "Hai :name, tulisan anjeun meunang perhatian! Anjeun parantos nampi koméntar di komunitas urang. Asup kana akun anjeun pikeun gabung dina diskusi sareng ningali naon anu diomongkeun ku sadayana.",
        'title-simple' => ":name geus commented on pos Anjeun!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Bales topik anjeun :topic_title',
        'title' => ":name, sarta :count batur ngajawab kana topik Anjeun.",
        'message' => "Hai :name, topik anjeun meunang perhatian! Anjeun nampi balesan di komunitas urang. Asup kana akun anjeun pikeun gabung dina diskusi sareng ningali naon anu diomongkeun ku sadayana.",
        'title-simple' => ":name ngawaler dina topik anjeun.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Lebet Anyar :name',
        'category' => 'Bewara kaamanan',
        'title' => "Login ka Akun",
        'message' => "Dear :name, login ka akun Selldone anjeun dideteksi.",   // Login in selldone (seller)
        'message-shop' => "Dear :name, anjeun geus asup ka :shop_title .",  // Login in shop (buyer)

        'footer' => "Mun anjeun teu asup log, mangga ngarobah sandi anjeun.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Ditarikna",
        'deposit' => "Deposit",

        'withdraw_subject' => "Tarik ti akun :account",
        'deposit_subject' => "Deposit ka akun :account",

        'message' => "Mindahkeun duit geus dipigawé kalawan spésifikasi handap.",

        'type' => "Jinis transaksi",

        'from' => "Akun sumber",
        'to' => "Destination account",

        'desc' => "Katerangan transaksi",
        'action' => "Témbongkeun transaksi",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Kadé! Ngalanggar aturan| :shop",
        'category' => "Inpo kritis",
        'title' => "toko anjeun geus penalized",
        'action' => "Buka dasbor toko",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter geus diondang anjeun ka gabung Selldone",
        'title' => ":name parantos ngintunkeun anjeun :amount pikeun ngabantosan anjeun ngaluncurkeun toko online énggal anjeun sareng monetisasina!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Narima ondangan",
        'owner' => "Pamilik",
        'join-date' => "Dina Selldone saprak",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Pamulihan link| :shop",
        'category' => "Kaamanan toko",
        'title' => "Tumbu recovery toko tina <b>:shop_name</b>.",
        'message' => "Surélék ieu dikirim ka anjeun sabab anjeun dipénta pikeun mulangkeun toko anjeun. Ngaklik dina link di handap bakal cageur toko anjeun sarta sakabeh data milik eta.",
        'action' => "Konfirmasi Pamulihan Toko",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Sabaraha artos anu disimpen ku Selldone pikeun bisnis anjeun?',
        'sub-title' => 'Ti tanggal :start mun :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Server, CDN, Panyimpenan, sareng jasa awan anu sanés',
        ],
        'experts' => [
            'title' => 'Ahli & Staf',
            'subtitle' => 'Pamekar, pangropéa, sareng dukungan',
        ],
        'total_save' => 'Total duit disimpen'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'kinerja anjeun',
        'sub-title' => 'Tinjauan bisnis ti :start ka :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Pamaké Dipulangkeun',

        'shop_views' => 'Toko Views',
        'baskets' => [
            'title' => 'Gorobag balanja',
            'subtitle' => 'Ngalaporkeun jumlah carts balanja anyar',

        ],
        'products' => [
            'title' => 'Produk Ihtisar',
            'subtitle' => 'Status produk di toko dumasar jenis',
            'value_name' => 'Produk'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total pintonan kaca ramatloka',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Anjeun parantos nampi pesenan énggal. Punten angkat ka halaman pangolahan pesenan dina panel vendor anjeun.",
        'subject' => "🛍️ Orde Baru Ditampi| :order_id",
        'your_revenue' => "Panghasilan Anjeun",
    ],
    'vendor-invite' => [
        'title' => 'Ngajual Uleman',
        'message' => "Anjeun geus nampa hiji uleman pikeun jadi ngajual :shop_name. Anjeun tiasa nampi atanapi nampik nganggo tombol di handap.",
        'subject' => ":shop_name |Undangan pikeun janten vendor kami",
        'accept' => "Tampa & Janten Vendor",
        'reject' => "Nolak",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Uleman pikeun Gabung Tim Kami',
        'message' => "Anjeun geus diondang pikeun gabung :vendor_name di :shop_name. Anjeun tiasa nampi atanapi nolak uleman ieu nganggo tombol di handap.",
        'subject' => "Uleman ka Gabung :vendor_name|Janten Anggota Tim",
        'accept' => "Tampa & Gabung Tim",
        'reject' => "Nolak",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Kode Login anjeun pikeun :shop",
        'header-message' => "Kami ngirim anjeun email ieu kusabab anjeun naroskeun kode login pikeun toko. Mangga panggihan Sandi Hiji-waktos (OTP) anjeun di handap:",
        'footer-message' => "Kode ieu bakal valid pikeun 10 menit. Upami anjeun henteu menta kodeu login ieu, mangga malire email ieu."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifikasi surelek Anjeun| :shop",
        'title' => 'Verifikasi surélék',
        'header-message' => "Hai :name,<br>Punten pastikeun yén **:email** mangrupikeun alamat email anjeun ku ngaklik tombol di handap atanapi nganggo tautan di handap dina 48 jam.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Apdet produk| :shop",
        'title' => "Apdet dina Status Produk - 24 Jam Terakhir",
        'message' => "Kuring miharep pesen ieu manggihan anjeun ogé. Ieu mangrupikeun pembaruan ringkes pikeun nginpokeun ka anjeun ngeunaan status produk anjeun dina platform kami salami 24 jam katukang.\nSalila periode ieu, aya parobahan dina status sababaraha produk. Parobihan ieu tiasa disababkeun ku pameseran, apdet saham, atanapi acara anu aya hubunganana.\nKanggo inpo nu langkung lengkep ihwal unggal produk, mangga lebet kana akun anjeun sareng pariksa bagian 'Status Produk'.",
        'action' => "Buka Panel Vendor",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Pesenan Bulk Ditampi| :shop | :date",
        'title' => "Pesenan Bulk Bewara",
        'message' => "Anjeun geus narima bets pesenan bulk. Mangga buka halaman pangolahan pesenan dina panel anjeun pikeun detil salajengna. Anjeun oge bisa ngundeur daptar pesenan via link aman disadiakeun, valid pikeun 7 days.<br><br>\n        <b>PENTING:</b> Link ieu valid pikeun 7 poé.<br>\n        Link ieu dinamis, jadi unggal waktos Anjeun klik eta, anjeun bakal nampa pesenan paling diropéa pikeun titimangsa husus ieu. <b>Ieu hartina lamun status pamayaran pesenan robah jadi ditolak, anjeun moal deui ningali pesenan éta dina CSV diundeur, atawa lamun pesenan dibayar, eta bakal muncul dina list.</b><br><br>\n        <ul>\n            <li>CSV ngandung pesenan anu mayar sareng tanggal anu ditangtayungan dina :date.</li>\n            <li>Tanggal anu dicadangkeun nyaéta tanggal nalika pangguna ngaklik Checkout dina halaman pesenan.</li>\n        </ul>\n        <b>Pikeun nyegah duplikat pesenan, salawasna pariksa Orde ID saméméh ngirim.</b>",
        'action' => "Unduh Daptar Pesenan",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Sababaraha item dina pesenan anjeun teu ditarima tur teu bisa dikirimkeun. Jumlah item ieu bakal refunded kana kartu anjeun teu lila."
    ]

];
