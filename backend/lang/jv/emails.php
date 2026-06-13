<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Pesen iki nampani panuku anyar menyang toko.',
        ShopMailTemplateCodes::OrderCheckout => 'Kabar iki dikirim nalika panuku konfirmasi pesenan.',
        ShopMailTemplateCodes::OrderPayment => 'Kabar iki nandheske pembayaran sukses sing digawe dening pelanggan.',
        ShopMailTemplateCodes::OrderUpdate => 'Pesen iki dikirim kanggo nganyari panuku babagan status pesenan.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Pesen iki dikirim menyang bakul kanggo ngabari pesenan dikonfirmasi.',
        ShopMailTemplateCodes::PosCheckout => 'Kabar iki dikirim kanggo konfirmasi pesenan titik jual kanggo panuku.',
        ShopMailTemplateCodes::PosPayment => 'Kabar iki negesake pambayaran titik jual sing ditindakake dening panuku.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Pesen iki ngandhani bakul babagan tuku sing ditindakake ing titik adol.',
        ShopMailTemplateCodes::ShopContact => 'Kabar iki dikirim nalika formulir kontak wis dikirim.',
        ShopMailTemplateCodes::ShopGiftCard => 'Kabar iki ngandhani pangguna sing wis nampa kertu bingkisan.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Pesen iki nampani vendor anyar menyang toko.',
        ShopMailTemplateCodes::ShopVendorInvite => "Pesen iki dikirim kanggo ngundang vendor supaya gabung karo pasar sampeyan.",
        ShopMailTemplateCodes::ShopVendorOrder => "Pesen iki dikirim menyang vendor nalika pesenan ditampa ing status Paid utawa Cash on Delivery (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Dikirim saben dina kanggo nganyari vendor babagan status produke.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Pesen iki dikirim kanggo ngundang vendor supaya gabung karo pasar sampeyan.",

        ShopMailTemplateCodes::UserLogin => "Ngabari pangguna kanthi rincian login, kalebu alamat IP, tanggal, lan piranti, kanggo tujuan keamanan.",
        ShopMailTemplateCodes::LoginCode => "Kirimi kode sandi siji-wektu kanggo pangguna kanggo mlebu menyang toko.",

        ShopMailTemplateCodes::EmailVerifyLink => "Kirim link kanggo verifikasi alamat email pangguna. Email iki dikirim nalika pangguna ndhaptar SMS lan mlebu email. Ora dikirim nalika pangguna ndhaptar langsung nganggo login sosial utawa email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Kirimi dhaptar pesenan sing ditampa lan dibayar kanthi akeh kanggo dina tartamtu."


    ,

    ],


    'global' => [
        'greetings' => 'Sugeng rawuh, :name!',
        'end-statement' => 'Tim dhukungan',

        'receiver_name' => 'Halo :user_name',
        'footer-help' => "Perlu bantuan? Takon ing [support@selldone.com](mailto:support@selldone.com) utawa bukak [pusat bantuan] (https://selldone.com/community).",
        'selldone-team' => 'Tim Selldone',
        'footer-shop' => "Yen sampeyan butuh bantuan babagan apa wae, aja ragu-ragu ngirim email marang kita: :shop_mail",
        'accept' => "Nampa",
        'reject' => "nolak",
        'verify' => "verifikasi",
        'title' => "judhul",
        'value' => "Nilai",
        'description' => "Katrangan",
        'shop' => "Toko",
        'shop-info' => "Informasi toko",
        'user' => "panganggo",
        'user-info' => "Informasi akun",
        'license' => "Lisensi",
        'status' => "Status",
        'start' => "Miwiti",
        'end' => "Pungkasan",
        'renewal' => "nganyari maneh",
        'view' => "Ndeleng",

        'balance' => "imbangan",
        'card_number' => "Nomer Kartu",
        'cvv' => "Cvv",
        'expire_date' => "Tanggal kadaluwarsa",

        'Dashboard' => "Dashboard",
        'order' => "dhawuh",
        'view_order' => "Ndeleng pesenan",
        'pay_now' => "Pay now",

        'official_selldone' => "DIJUAL RESMI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "mata uang",
        'free-balance' => "Saldo gratis",
        'locked-balance' => "imbangan dikunci",
        'bot' => "Bot",
        'requests' => "Njaluk",
        'baskets' => 'Gerobak',
        'physical' => "fisik",
        'virtual' => "Virtual",
        'file' => "File",
        'service' => "Layanan",
        'fulfillment' => "Kasembadan",
        'open' => "Mbukak",
        'reserved' => "dilindhungi",
        'canceled' => "dibatalake",
        'payed' => "Dibayar",
        'cod' => "COD",
        'orders-count' => 'Pesenan',
        'payments-count' => 'Pembayaran',
        'confirms-count' => 'Konfirmasi',
        'sends-count' => 'Ngirim',
        'delivers-count' => 'Ngirim',
        'count' => 'Count',
        'transactions-count' => 'Jumlah transaksi',
        'success-transactions' => 'Transaksi sukses',
        'total-amount' => 'Jumlah total',
        'amount' => 'Jumlah',
        'wage' => 'Wage',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Urip',
        'CheckQueue' => 'Priksa antrian',
        'OrderConfirm' => 'Konfirmasi pesenan',
        'PreparingOrder' => 'Nyiapake pesenan',
        'SentOrder' => 'Dikirim pesenan',
        'ToCustomer' => 'Dikirim menyang pelanggan',
        'Pending' => 'Ditunggu',
        'Accepted' => 'Ketompo',
        'Rejected' => 'Ditolak',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telpon',
        'total' => 'Total',
        'view-detail' => 'Deleng rincian',
        'empty' => 'kosong',
        'dropshipping' => 'Dropshipping',
        'reply' => 'wangsulan',
        'reactions' => 'Reaksi',
        'Comments' => 'Komentar',
        'last-comment' => 'Komentar pungkasan',
        'response-to' => 'Respon kanggo',
        'posts' => 'kiriman',
        'post' => 'Posting',

        'name' => 'jeneng',
        'email' => 'Email',
        'type' => 'jinis',
        'device' => 'piranti',
        'platform' => 'Platform',
        'browser' => 'Browser',
        'time' => 'Wektu',
        'Wallet' => 'Dompet',
        'date' => 'Tanggal',

        'account' => 'Akun',
        'transaction' => 'Transaksi',
        'fee' => 'ragad',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Babagan',
        'password' => 'Sandi',
        'verify-login' => "Verifikasi & Login",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Tuku saiki",
        'add-domain' => "Add Domain",
        'views' => 'Ndeleng',


        'country' => 'negara',
        'address' => 'alamat',
        'postal' => 'Kode Pos',
        'building_no' => 'Gedung #',
        'building_unit' => 'Unit #',
        'message' => 'Pesen',


        'customer' => 'Pelanggan',
        'cart-items' => 'Barang kréta',
        'payment' => 'pambayaran',
        'receiver' => 'panrima',
        'virtual-items' => 'Item virtual',
        'no-payment' => 'Ora mbayar!',

        'enable' => 'Aktifake',
        'access' => 'akses',
        'bank' => 'Informasi bank',

        'vendor' => 'Vendor',

        'view_content' => "Ndeleng isi lengkap",
        'files' => 'File',
        'download' => 'Ngundhuh',
        'file_name' => 'Jeneng berkas',
        'file_size' => 'Ukuran',

        'subscription' => 'Langganan',
        'products' => 'Produk',
        'vendor_products' => 'Produk Vendor',

        'pickup' => 'Pickup',

        'minutes' => 'menit',
        'hours' => 'jam',

        'refund' => 'mbalekaken',
        'recipient_address' => 'Alamat panampa',
        'signature' => 'teken',
        'blockchain' => 'Blockchain',
        'details' => 'Rincian',


    

        'Shop' => 'Toko',
        'dashboard' => 'dashboard',
        'comments' => 'komentar',
        'wallet' => 'dhompet',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

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
            'id' => 'hi',
            'name' => 'Setuju, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Dhukungan :name'
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
            'id' => 'sudagar',
            'name' => 'Setuju, Selldone'
        ],
        'Approve' => [
            'id' => 'nyetujoni',
            'name' => 'Setuju, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Manajemen Pesenan :name'
        ],

        'Recovery' => [
            'id' => 'mbalekake',
            'name' => 'Tim Recovery Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Menunggu ⌛',
        'PAYED' => 'Bayar ✅',
        'CANCELED' => 'Batal ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Petugas lan Pengawas',
            'AUDITING' => 'Manajer audit',
            'EMPLOYEE' => 'pegawe',
            'PRODUCT' => 'Manajer produk',
            'CONTENT' => 'Manajer konten',
            'MARKETING' => 'Pimpinan Pemasaran',
            'VIEWER' => 'Panyawang',

        ],
        'subject' => ":inviter ngundang sampeyan minangka :level| :shop",
        'category' => "Undangan Staff",
        'title' => "Sampeyan wis diundang menyang <b>:shop_name</b> minangka <b>:level</b> .",
        'message' => "Sampeyan wis nampa undhangan kanggo kolaborasi karo tim <b>:shop_title</b> ing bisnis. Sampeyan duwe pilihan kanggo nampa utawa nolak tawaran iki. Apa sampeyan milih nampa, mangga mlebu menyang layanan Selldone kanggo konfirmasi kaputusan. Sawise konfirmasi, sampeyan bakal entuk akses menyang bagean manajemen toko.",

    ],

    'welcome-email' => [
        'subject' => "👋 Sugeng rawuh :name, Ayo Miwiti Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Sugeng rawuh ing Selldone",
        'message' => "Matur nuwun kanggo milih Selldone! Sampeyan saiki dadi bagian saka komunitas sing sregep sing nyambungake penjual global menyang pelanggan, bisnis lokal menyang perusahaan, lan individu menyang perusahaan. Kabeh alat Master lan Pro kasedhiya kanggo sampeyan ** gratis ** lan ** tanpa watesan **. Kita kene kanggo ndhukung sampeyan lan mbukak lawang kanggo sukses.",

        'index' => "Langkah :step.",

        'step-domain' => [
            'title' => 'Tambah Domain Kustom Panjenengan',
            'message' => "Kanggo miwiti, tambahake domain khusus sampeyan kanthi gratis ing Dashboard Toko ing Setelan > Setelan Domain.",
            'action' => 'Ngatur Domainku',
        ],
        'step-landing' => [
            'title' => 'Kustomisasi Kaca Ngarep',
            'message' => "Pribadhi kaca ngarep kanthi pindhah menyang Dashboard > Pages. Pilih kaca kebangkrutan utawa gawe kaca anyar. Gampang lan intuisi, lan sampeyan bisa langsung nggarap.",
            'action' => 'Kustomisasi Landing Page Kula',
        ],
        'step-payment' => [
            'title' => 'Tata Cara Pembayaran',
            'message' => "Mulai nampa pembayaran langsung menyang akun bank. Kanggo nyambungake panyedhiya pembayaran kaya Stripe, PayPal, lan liya-liyane, bukak Dashboard> Akuntansi> Gateway.",
            'action' => 'Tambah Cara Pembayaran',
        ],
        'step-products' => [
            'title' => 'Tambah Produk Panjenengan',
            'message' => "Tambah produk lan kategori kanthi gampang ing Dashboard > Produk. Kayane ngatur file lan folder ing PC - siap seret lan selehake. Sampeyan uga bisa ngimpor akeh produk nggunakake Excel. Sampel template kasedhiya kanggo mbantu sampeyan miwiti.",
            'action' => 'Atur Produk Kula',
        ],
        'step-shipping' => [
            'title' => 'Setup Metode Pengiriman',
            'message' => "Kanggo ngisi daya pelanggan kanggo ngirim, nemtokake cara pengiriman sampeyan ing Dashboard> Logistik> Pengiriman. Sampeyan bisa nyetel rega lan dhukungan kanggo macem-macem lokasi. Aja lali nyetel asal gudang ing Dashboard> Logistik> Warehouse.",
            'action' => 'Ngatur Metode Pengiriman',
        ],
    

        'seller' => [
            'title' => 'Apa sampeyan bakul?',
            'message' => 'Kanggo miwiti adol, ketik dashboard ing Selldone liwat link ing ngisor iki lan nggawe toko pisanan sampeyan kanthi gratis. Iki bakal njupuk sawetara menit lan sampeyan bakal duwe toko lan situs online dhewe. Banjur kita bakal nuntun sampeyan menyang langkah sabanjure lan entuk gateway pambayaran.',
            'action' => 'Mlebet ing dashboard kula',
        ],
        'buyer' => [
            'title' => 'Aku dadi panuku',
            'message' => 'Sugeng. Sawise sampeyan dadi anggota Selldone, sampeyan bakal nyingkirake kabeh masalah keanggotaan lan otentikasi ing toko online. Kanggo entuk manfaat saka sembarang toko lan situs sing nggunakake platform Selldone, sampeyan bisa mlebu karo siji klik lan nggawe tuku prasaja, cepet lan aman.',
        ],
    ],


    'charge-account' => [
        'category' => 'Dompet > Akun > Ngisi daya',
        'title' => "Biaya Sukses",
        'message' => "Akun sampeyan <b>:account_number</b> wis dikenani biaya <b>:amount</b> kanthi sukses.",
        'account' => 'Akun',
        'charge' => 'Ngisi daya',
        'balance' => 'imbangan',
        'footer' => "Nggawe bisnis gampang, bisa digayuh, lan bisa diakses sapa wae ing saindenging jagad."
    ],

    'verify-email' => [
        'subject' => "🙌 Rampungake pendaftaran menyang Selldone! Verifikasi link.",
        'category' => "KOWE SING LANGKAH",
        'title' => "Verifikasi alamat email sampeyan",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Yen sampeyan ngalami masalah ngeklik tombol Verifikasi, salin lan tempel URL ing ngisor iki menyang browser web sampeyan: :activation_url",
        'next-step' => "Sabanjure, kita bakal ngirim sawetara materi sing migunani lan pandhuan langkah-langkah kanggo nggampangake sampeyan nambah domain khusus, nyiyapake pembayaran, nambah produk, lan entuk pesenan pisanan.",

    ],
    'verify-email-code' => [
        'subject' => "Kode verifikasi kanggo :name",
        'category' => "SECURITY",
        'title' => "Kode verifikasi email",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Toko Sampeyan Siap| :name",
        'category' => "KOWE SING LANGKAH",
        'title' => "Persiyapan rampung",
        'account_title' => "Akun sampeyan",
        'account_msg' => "Verifikasi lan mlebu menyang akun kanthi informasi iki.",
        'shop_msg' => "Info akun babagan sistem operasi bisnis Selldone.",

    ],

    'reset2fa' => [
        'category' => "PESAN RESMI KEAMANAN",
        'title' => "Njaluk mateni login 2-langkah",
        'message' => "Sampeyan nampa email iki amarga kita nampa panjalukan kanggo ngreset otentikasi rong faktor kanggo **:name** akun karo **:email** email.<br><br>Kita nemokake rincian ing ngisor iki kanggo akun sampeyan:",
        'footer' => "Yen sampeyan ora njaluk reset sandhi, ora ana tumindak maneh sing dibutuhake.",
        'action' => 'Pateni login rong langkah',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Toko sampeyan wis siyap saiki!",
        'category' => "LAHIR NEW STORE ONLINE ING WORLD",
        'title' => "Sugeng, :name!",
        'message' => "<b>Sugeng, :name! Bisnis online anyar sampeyan saiki urip!</b> Kita bungah kanggo nampani sampeyan ing komunitas Selldoners. Sampeyan wis njupuk langkah pisanan menyang sukses, lan kita ing kene kanggo mbantu saben langkah saka dalan.<br>Saiki toko sampeyan siyap, ayo priksa manawa sampeyan wis disetel kanggo nampa pembayaran langsung saka pelanggan lan miwiti ngembangaken kekaisaran. Yen sampeyan butuh bantuan, kita mung pesen-tim dhukungan kita mesthi ana kanggo sampeyan.<br><br><b>Penting Langkah Sabanjure:</b> Kanggo miwiti, priksa manawa sampeyan wis siap kanggo nampa pembayaran lan operasi sing lancar. Kita bakal nuntun sampeyan ing saben tahapan supaya toko sampeyan bisa mlaku kanthi lancar.",
        'pdf-book' => "Aja kantun buku tangan sing dilampirake: Apa Bisnis Sampeyan Kaya Game",

        'account' => [
            'title' => 'Langkah 1: Nggawe akun ing dompet Selldone',
            'message' => "Kanggo miwiti, nggawe akun ing dompet Selldone. Iki ngendi biaya sampeyan bakal dikurangi, lan uga ing ngendi sampeyan bakal nambah supaya toko sampeyan bisa mlaku kanthi lancar. Yen imbangan sampeyan dadi negatif, aja kuwatir! Toko sampeyan bakal terus beroperasi tanpa gangguan.",
            'action' => 'Mlebet ing dompet',
        ],

        'shop-account' => [
            'title' => 'Langkah 2: sambungake akun menyang toko',
            'message' => "Sabanjure, sambungake akun dompet menyang toko sampeyan. Pindhah menyang <b>Store> Akuntansi> Invoice</b>, lan sambungake dompet sampeyan. Iki mesthekake yen kabeh pembayaran pelanggan disimpen langsung menyang akun bank-Selldone ora nyuda jumlah saka penghasilan sampeyan.",
            'action' => 'Panel Invoice Toko',
        ],

        'gateway' => [
            'title' => 'Langkah 3: Sambungake Gateway Pembayaran Online',
            'message' => "Saiki, ayo nyiyapake gateway pembayaran online sampeyan. Menyang <b>Store > Accounting > Port</b> banjur klik <b>Add New Port</b>. Pilih mata uang sampeyan, lan sampeyan bakal weruh dhaptar gateway pembayaran sing kasedhiya. Nyambungake gateway cepet lan gampang, nanging yen sampeyan butuh bantuan, aja ragu-ragu mriksa pandhuan Selldone utawa hubungi kita.",
            'action' => 'Tambah portal menyang toko',
        ],

        'domain' => [
            'title' => 'Langkah pungkasan: nyambungake domain khusus',
            'message' => "Saiki, sambungake domain khusus menyang toko sampeyan. Iki ngidini pelanggan tuku produk utawa layanan sampeyan lan nggawe pembayaran langsung menyang sampeyan.",
            'action' => 'Ngenalke lan nampa kertu hadiah tanpa wates',
        ],
    ],


    'basket-list' => [
        'item' => "item",
        'count' => "Count",
        'price' => "regane",
        'discount-code' => "Kode diskon",
        'customer-club' => 'Klub pelanggan',
        'shipping' => "Pengiriman",
        'total' => "Total",
        'offer' => "nawarake",
        'coupon' => "kupon",
        'lottery' => "Penghargaan",
        'tax' => "Pajak",
        'tax_included' => "Klebu ing rega",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metode',
        'amount' => 'Jumlah',
        'giftcard' => 'Gift card',
        'payment' => 'pambayaran',
    ],


    'shop-subscription-email' => [
        'category' => "Nganyari langganan",
        'title' => "Lisensi Toko::shop_title",
        'title-reserved' => "Lisensi cadangan::shop_title",
        'title-active' => "Lisensi aktif::shop_title",
        'title-finished' => "Lisensi rampung::shop_title",
        'title-cancel' => "Batal lisensi::shop_title",
        'message' => "Rencana lisensi toko sampeyan dianyari,",
        'RESERVED' => "⚡ Rencana langganan sampeyan wis ** dilindhungi **.",
        'ACTIVE' => "🟢 Rencana langganan sampeyan wis **diaktifake**.",
        'FINISHED' => "🚧 Rencana langganan sampeyan wis **rampung**.",
        'CANCEL' => "⛔ Rencana langganan sampeyan wis **dibatalake**.",
    ],

    'support' => [
        'subject' => "Pusat Dhukungan|:name mangsuli",
        'category' => "Pusat dhukungan",
        'title' => "Sampeyan nampa respon",
        'action' => "Bukak admin toko",
    ],

    'shop-customer-join' => [
        'subject' => "Gabung:shop_title",
        'category' => "perayaan pelanggan anyar",
        'title' => "Kita seneng kanggo anggota",
        'action' => "Dolan maring saiki",
    ],

    'shop-vendor-join' => [
        'subject' => "Vendor Onboarding | :shop_title",
        'category' => "Perayaan vendor anyar",
        'title' => "Kita seneng kanggo anggota",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard:shop_title",
        'category' => "Tambah kertu anyar",
        'title' => "Sugeng, sampeyan wis nampa kertu hadiah",
        'action' => "Tuku saiki",
        'message' => "Sampeyan wis nampa kertu hadiah worth :balance :currency. Sampeyan bisa nggunakake kertu hadiah iki ing toko kita.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Pusat Dhukungan| :shop",
        'category' => "ndhukung",
        'title' => "Sampeyan nampa respon",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Konfirmasi Order|Pesanan :order_id",
        'title' => "dhawuh",
        'message' => "Sampeyan wis pesen ing toko kita. Kita nampa pesenan lan bakal ngirim email liyane yen pembayaran wis dikonfirmasi."
    ,

        'payments' => 'Pembayaran',
    ],

    'order-payment' => [
        'subject' => "🛍️ Konfirmasi Pembayaran|Pesanan :order_id",
        'title' => "pesenan pembayaran",
        'message' => "Pembayaran sampeyan wis rampung,<br> Kita wis entuk pesenan sampeyan. Kita bakal ngirim email liyane nalika pesenan dikirim.",
    

        'payments' => 'Pembayaran',
    ],

    'order-update' => [
        'subject' => "🛍️ Update Status Order|Pesanan :order_id",
        'title' => "Update Status Order",
        'message' => "Pesenan sampeyan wis dianyari. Sampeyan bisa mriksa status paling anyar saka pesenan iki ing akun.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Pesenan sampeyan ana ing antrian kanggo diproses. Kita bakal menehi kabar nalika lagi disiapake.",
                'OrderConfirm' => "Pesenan sampeyan wis dikonfirmasi lan persiapan wis diwiwiti.",
                'PreparingOrder' => "Pesenan sampeyan lagi disiapake lan bakal dikirim kanthi cepet.",
                'SentOrder' => "Pesenan sampeyan wis dikirim. Sampeyan bakal nampa iku sakcepete.",
                'ToCustomer' => "Pesenan sampeyan wis dikirim. Muga-muga sampeyan seneng!",

                'PreparingOrder-PICKUP' => "Pesenan sampeyan lagi disiapake. Sampeyan bakal nampa kabar yen wis siyap kanggo njupuk.",
                'SentOrder-PICKUP' => "Pesenan sampeyan siap dijemput. Mangga teka menyang toko kanggo ngumpulake.",
                'ToCustomer-PICKUP' => "Pesenan sampeyan wis dijupuk. Muga-muga sampeyan seneng!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Pesenan sampeyan ana ing antrian kanggo diproses. Kita bakal ngandhani yen wis siyap.",
                'OrderConfirm' => "Pesenan sampeyan wis dikonfirmasi lan persiapan lagi ditindakake.",
                'PreparingOrder' => "Pesenan sampeyan lagi disiapake lan bakal dikirim menyang sampeyan.",
                'ToCustomer' => "Pesenan virtual sampeyan wis dikirim menyang akun sampeyan. Matur nuwun!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Panjaluk layanan sampeyan ana ing antrian. Kita bakal menehi kabar nalika kita miwiti.",
                'OrderConfirm' => "Layanan sampeyan wis dikonfirmasi lan kita lagi siyap kanggo miwiti.",
                'PreparingOrder' => "Kita lagi nyiapake layanan sampeyan, lan bakal menehi kabar yen wis rampung.",
                'ToCustomer' => "Layanan sampeyan wis rampung. Matur nuwun kanggo milih kita!"
            ],
            'FILE' => [
                'PreparingOrder' => "File sampeyan lagi disiapake lan bakal kasedhiya enggal.",
                'ToCustomer' => "File sampeyan wis siyap lan wis dikirim. Sampeyan saiki bisa ngundhuh."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Urutan langganan sampeyan ana ing antrian. Kita bakal menehi kabar nalika pangolahan diwiwiti.",
                'OrderConfirm' => "Langganan sampeyan wis dikonfirmasi lan lagi disiyapake.",
                'PreparingOrder' => "Kita lagi nyiapake langganan sampeyan lan bakal diwiwiti kanthi cepet.",
                'SentOrder' => "Langganan sampeyan wis diaktifake. Sampeyan bakal nampa nganyari terus-terusan.",
                'ToCustomer' => "Layanan langganan sampeyan wis diaktifake kanthi sukses."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Sugeng :name|Voucher anyar: :title',
        'category' => "SELAMAT, VOUCHER ANYAR",
        'message' => "Hei :name,<br><br>Sampeyan wis nampa voucer anyar minangka hadiah saka kita! Sampeyan bisa entuk luwih akeh voucer kanthi ngenalake Selldone menyang kanca lan kabeh wong sing sampeyan kenal. Voucer iki worth **:price :currency**.<br><br>Sampeyan wis njupuk langkah pisanan, lan kita kene kanggo mbantu mbukak kunci fitur anyar karo voucer! Mangga mlebet karo **:email** lan golek voucer ing Toko **Dashboard** > **Setelan** > **Lisensi**.<br><br>Sugeng!",
        'action' => "dashboard kula",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Sugeng, Dear :name | Sampeyan wis nampa hadiah',
        'category' => "Pengumuman nampa hadiah",
        'title' => "Hadiah kanggo sampeyan",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "peparingé",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Pesenan Anyar Ditampa| :order_id",
        'title' => "New Order",
        'message' => "Sampeyan wis nampa pesenan anyar. Mangga menyang kaca pangolahan pesenan ing toko sampeyan.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Informasi Sampeyan Isi',
        'output-form-title' => 'Informasi item sing dituku',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Laporan Mingguan :time',
        'title' => 'Laporan kinerja toko mingguan',
        'message' => "Iki laporan mingguan toko sampeyan saka <b>:start</b> nganti <b>:end</b>. Laporan iki kalebu tips kanggo nambah bisnis, sampeyan uga bisa mriksa status toko online lan pesenan anyar. Muga-muga sampeyan duwe dina lan minggu sing apik."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Laporan tabungan :amount ing telung sasi pungkasan| :shop_title',
        'title' => 'Laporan musiman babagan kegiatan bisnis, ganjaran lan tabungan finansial',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Akun sing disambungake',
        'sub-title' => 'Apa status paling anyar saka akun dompet sing disambungake menyang tokoku?',
        'view-wallet' => 'Ndeleng dompet',
        'tip-title' => 'Tips penting',
        'tip' => "Nggawe dompet Selldone gratis lan sambungake menyang toko sampeyan. Sanajan imbangan sampeyan negatif, pelanggan sampeyan isih bisa tuku lan mbayar tanpa masalah. Aja kuwatir, operasi lan data toko sampeyan bakal terus lancar nganti 1 wulan, tanpa gangguan.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Nyambung menyang akun'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplikasi diinstal',
        'sub-title' => 'Dhaptar aplikasi sing wis diinstal ing toko minggu iki.',
        'tip' => "Apa sampeyan pengin golek aplikasi liyane kanggo toko sampeyan?",
        'view-app-store' => 'Dolan maring Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bot Toko Panjenengan',
        'sub-title' => 'Bot dodolan aktif ing tokoku.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone wis nyedhiyakake bot penjualan otomatis. Sampeyan mung kudu pindhah menyang panel Add-ons> Bots lan aktifake bot toko sampeyan. Elinga yen layanan sing cocog kudu kasedhiya ing negara sampeyan.",
        'view-bots' => 'Ngatur bot',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikasi karo Pelanggan',
        'sub-title' => 'Pira pirang-pirang kontak karo klienku minggu iki?',
        'faqs' => 'Pitakonan Paling Sering',
        'tickets' => 'Tiket Pelanggan',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status pangguna',
        'sub-title' => 'Aktivitas saka :start nganti :end',
        'users' => [
            'title' => 'Pelanggan',
            'subtitle' => 'Pangguna Ndhaptar',
        ],
        'views' => [
            'title' => 'Kunjungan',
            'subtitle' => 'Kaping pirang-pirang sampeyan ngunjungi toko',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Pangguna sing bali',

        'shop_views' => 'Tampilan Toko',
        'baskets' => [
            'title' => 'Kréta Blanja',
            'subtitle' => 'Laporaké nomer kréta blanja anyar',
        ],
        'products' => [
            'title' => 'Gambaran Umum Produk',
            'subtitle' => 'Status produk ing toko miturut jinis',
            'value_name' => 'Produk'
        ],
        'products_count' => 'jinis produk',
        'views_count' => 'Ndeleng count',
        'sell_count' => 'Sell count',
        'send_count' => 'Jumlah pengiriman',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel kanggo bakul utama Drop Shipping Selldone.',
        'total_fulfillments' => 'Total Pesenan Ditampa',
        'ds_count' => 'Ditampa Pesenan',
        'statistics_title' => 'Laporan nampa pesenan',
        'ds_cancels' => 'Batal dening bakul antarmuka',
        'ds_rejects' => 'Batal dening Sampeyan',
        'tip' => "Apa sampeyan bakul gedhe sing duwe gudang, pabrik, utawa distributor produk? Sampeyan bisa nggedhekake jangkauan kanthi nawakake produk menyang adol liyane liwat layanan Drop Shipping Selldone. Email kita ing support@selldone.com kanggo mangerteni sing luwih lengkap.",
        'view-drop-shipping-panel' => 'Mlebet menyang panel Grosir',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Exchange Rates',
        'sub-title' => 'Dhaptar tarif konversi mata uang paling anyar ing toko sampeyan.',
        'from' => 'Sumber Mata Uang',
        'to' => 'Mata uang tujuan',
        'rate' => 'Tingkat konversi',
        'view-exchange-panel' => 'Ngatur Kurs',
    

        'vew-exchange-panel' => 'panel manajemen nilai tukar',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Kontrak pakar',
        'sub-title' => 'Apa profesional sing kerja ing tokoku?',
        'cost' => 'Jumlah kontrak',
        'duration' => 'Duration',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Tanggal Batal',
        'end_at' => 'Tanggal pangiriman',
        'tip' => 'Sampeyan bisa nyewa spesialis paling apik ing Selldone kanggo ngembangake bisnis sampeyan.',
        'view-experts' => 'Klik kanggo miwiti.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Lapor gateway pembayaran aktif ing toko:shop.',
        'tip-title' => 'Tips penting',
        'tip' => "Bukak kaca manajemen portal ing toko sampeyan lan tambahake paling ora siji port ing sawetara menit. Pelanggan sampeyan seneng mbayar kanthi cepet lan aman liwat portal online.",
        'view-shop-gateways' => 'Mlebet menyang manajemen portal tokoku.',
        'view-gateways' => 'Ndeleng gateway liyane',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Pesenan',
        'sub-title' => 'Dhaftar pesenan aku ditampa minggu iki.',
        'total_baskets' => 'Total Pesenan',
        'total_posBaskets' => 'Total Pesanan Kas',
        'pos-title' => 'Kotak Toko POS',
        'chart-label' => 'Pesenan rampung (pesenan iki ora kudu dibayar!)',
        'tip-title' => 'Sampeyan kudu nyoba luwih ...',
        'tip' => "Ora ana sukses sing prasaja.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Pusat pangolahan',
        'sub-title' => 'Pira pesenan sing diproses ing toko minggu iki?',
        'tip-title' => 'Sampeyan ora duwe dodolan!',
        'tip' => "Sayange sampeyan ora duwe dodolan minggu iki. Sampeyan kudu entuk luwih akeh menyang toko sampeyan. Sampeyan bisa nambah luwih akeh produk, milih gambar sing luwih apik utawa nulis deskripsi sing luwih apik kanggo produk sampeyan. Coba proyek full-time kanggo bisnis sampeyan. Yen sampeyan nindakake kanthi bener lan ora frustasi, sampeyan bakal sukses.",
        'view-process-center' => 'Deleng pusat proses',
        'return' => [
            'title' => 'Wangsul pesenan',
            'subtitle' => 'Laporan pesenan bali.',
            'tip-title' => 'Apa sampeyan ngerti yen ...',
            'tip' => "Sampeyan bisa nggawe minangka akeh awis sing perlu karo Selldone POS! Apa tablet, seluler, utawa laptop, sampeyan bisa ngowahi piranti apa wae dadi titik dodolan toko. Iku prasaja, cepet nyiyapake, lan disiapake kanthi lengkap kanggo server sampeyan. Mulai nggunakake dina iki!",
            'view-pos' => 'Mlebu menyang Kasir Toko Onlineku'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesi',
        'sub-title' => 'Kaping pirang-pirang aku ngunjungi tokoku?',
        'countries-title' => 'Negara endi sing paling kerep dibukak?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Apa sampeyan pengin entuk dhuwit tanpa mbuwang dhuwit?',
        'message' => "Dear :name, sampeyan bisa pindhah menyang Dashboard > Demonetization lan nggawe link referral. Kirimi link kanggo kanca-kanca, Sampeyan nampa kertu hadiah Selldone lan persentasi saka pembayaran kanca. Elinga yen kertu hadiah bakal dikirim menyang sampeyan lan kanca sampeyan.",
        'action' => 'Deleng link introduksiku',
        'mail-clip' => "<b style='color: #C2185B'>Penting:</b> Yen sampeyan nggunakake layanan email kayata Gmail sing mbatesi dawa email, goleki pilihan ing mburi email kanggo nampilake laporan lengkap banjur klik:",

        'no-coin-reward' => "<b style='color: #C2185B'>Nuwun sewu:</b> Aktivitas sampeyan ora nyukupi syarat kanggo entuk hadiah SEL Coin gratis. Coba luwih lan adol luwih akeh ing toko kanggo musim ngarep.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Sugeng:</b> Kerja sing apik! Adhedhasar kinerja pinunjul, kita wis aken :amount SEL dhuwit recehan kanggo akun minangka ganjaran.",

        'need-buy-license' => "<b>Tingkatkan Bisnis Sampeyan:</b> Kayane sampeyan durung ndhaptar rencana langganan kanggo situs web sampeyan! Nganyarke saiki kanggo mbukak kunci luwih akeh fitur mung :amount saben wulan yen dibayar saben taun.",
        'not-afford-message' => "Yen sampeyan ora bisa mbayar utawa duwe masalah karo pembayaran, aja ragu marang kita liwat support@selldone.com.",
        'add-domain' => "<b>Napa ora duwe domain khusus kanggo bisnis sampeyan?</b><br> Tambah domain menyang situs web sampeyan saiki; iku gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone yaiku a<del> produk</del> <span style = 'color: forestgreen'>masyarakat</span> .<br> Dadi Selldoner profesional!",
        'message' => "Tindakake kaca resmi Selldone ing Twitter, LinkedIn lan jaringan sosial. Kirimi kita komentar, panjalukan utawa kritik utawa melu diskusi babagan Selldone. Kita uga bagean saka komunitas Selldone sing <b>Sampeyan nggawe</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Pesenan Avocado Anyar Ditampa|:shop_title :time',
        'title' => "Laporan kinerja sajrone 24 jam pungkasan",
        'message' => "Pelanggan sampeyan nunggu pesenan sampeyan dideleng lan regane. Tanggapi panjaluk pelanggan kanthi cepet supaya bisa entuk dodolan luwih akeh.",
        'card_title' => "Pesenan ing antrian",
        'card_subtitle' => "Wiwit :date",

        'card_payed' => "pesenan mbayar"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Mbales kiriman sampeyan ing :community_title',
        'title' => ":name lan :count liyane wis melu obrolan ing kiriman sampeyan!",
        'message' => "Halo :name, kiriman sampeyan entuk perhatian! Sampeyan wis nampa komentar ing komunitas kita. Mlebu menyang akun sampeyan kanggo melu diskusi lan ndeleng apa sing diomongake saben wong.",
        'title-simple' => ":name wis komentar ing kirim!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Mbales topik sampeyan :topic_title',
        'title' => ":name, lan :count liyane mangsuli topik sampeyan.",
        'message' => "Hai :name, topik sampeyan entuk perhatian! Sampeyan wis nampa balesan ing komunitas kita. Mlebu menyang akun sampeyan kanggo melu diskusi lan ndeleng apa sing diomongake saben wong.",
        'title-simple' => ":name mangsuli topik sampeyan.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Login anyar :name',
        'category' => 'Kabar keamanan',
        'title' => "Mlebu menyang Akun",
        'message' => "Dear :name, sampeyan wis mlebu menyang akun Selldone sampeyan.",   // Login in selldone (seller)
        'message-shop' => "Dear :name, sampeyan wis mlebu menyang :shop_title .",  // Login in shop (buyer)

        'footer' => "Yen sampeyan durung mlebu, ganti tembung sandhi.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Penarikan",
        'deposit' => "Simpenan",

        'withdraw_subject' => "Mbatalake saka akun :account",
        'deposit_subject' => "Simpenan menyang akun :account",

        'message' => "Transfer dhuwit wis rampung kanthi spesifikasi ing ngisor iki.",

        'type' => "Jinis transaksi",

        'from' => "Akun sumber",
        'to' => "Destination account",

        'desc' => "Katrangan transaksi",
        'action' => "Ndeleng transaksi",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Penting! Pelanggaran aturan| :shop",
        'category' => "Informasi kritis",
        'title' => "Toko sampeyan wis dihukum",
        'action' => "Bukak dashboard toko",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter wis ngajak sampeyan gabung karo Selldone",
        'title' => ":name wis ngirim :amount kanggo mbantu mbukak toko online anyar lan monetisasi!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Nampa uleman",
        'owner' => "Pemilik saka",
        'join-date' => "On Selldone wiwit",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Link Recovery| :shop",
        'category' => "Keamanan toko",
        'title' => "Link pemulihan toko saka <b>:shop_name</b> .",
        'message' => "Email iki dikirim menyang sampeyan amarga sampeyan njaluk mulihake toko sampeyan. Ngeklik link ing ngisor iki bakal mbalekake toko lan kabeh data sing ana.",
        'action' => "Konfirmasi Recovery Toko",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Pira dhuwit sing disimpen Selldone kanggo bisnis sampeyan?',
        'sub-title' => 'Saka tanggal :start nganti :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Server, CDN, Panyimpenan, lan layanan awan liyane',
        ],
        'experts' => [
            'title' => 'Pakar & Staff',
            'subtitle' => 'Pangembang, pangopènan, lan dhukungan',
        ],
        'total_save' => 'Total dhuwit disimpen'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Kinerja sampeyan',
        'sub-title' => 'Ringkesan bisnis saka :start nganti :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Pangguna sing bali',

        'shop_views' => 'Tampilan Toko',
        'baskets' => [
            'title' => 'Kréta Blanja',
            'subtitle' => 'Laporaké nomer kréta blanja anyar',

        ],
        'products' => [
            'title' => 'Gambaran Umum Produk',
            'subtitle' => 'Status produk ing toko miturut jinis',
            'value_name' => 'Produk'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total tampilan kaca situs web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Sampeyan wis nampa pesenan anyar. Mangga menyang kaca pangolahan pesenan ing panel vendor sampeyan.",
        'subject' => "🛍️ Pesenan Anyar Ditampa| :order_id",
        'your_revenue' => "Revenue Panjenengan",
    ],
    'vendor-invite' => [
        'title' => 'Undangan Vendor',
        'message' => "Sampeyan wis nampa undhangan dadi vendor saka :shop_name. Sampeyan bisa nampa utawa nolak kanthi ngeklik tombol ing ngisor iki.",
        'subject' => ":shop_name |Undangan dadi vendor kita",
        'accept' => "Nampa & Dadi Vendor",
        'reject' => "nolak",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Undangan Gabung Tim Kita',
        'message' => "Sampeyan wis diundang kanggo nggabungake :vendor_name ing :shop_name. Sampeyan bisa nampa utawa nolak undhangan iki nggunakake tombol ing ngisor iki.",
        'subject' => "Undangan kanggo Join :vendor_name|Dadi Anggota Tim",
        'accept' => "Nampa & Gabung Tim",
        'reject' => "nolak",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Kode Login Panjenengan kanggo :shop",
        'header-message' => "Kita ngirim email iki amarga sampeyan njaluk kode login kanggo toko. Temokake Sandi Siji Wektu (OTP) ing ngisor iki:",
        'footer-message' => "Kode iki bakal bener kanggo 10 menit. Yen sampeyan ora njaluk kode login iki, please nglirwakake email iki."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifikasi email sampeyan| :shop",
        'title' => 'Verifikasi Email',
        'header-message' => "Woy :name,<br>Mangga konfirmasi manawa **:email** minangka alamat email sampeyan kanthi ngeklik tombol ing ngisor iki utawa nggunakake link ing ngisor iki sajrone 48 jam.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Update produk| :shop",
        'title' => "Nganyari Status Produk - 24 Jam Terakhir",
        'message' => "Mugi pesen iki ketemu sampeyan uga. Iki minangka nganyari ringkes kanggo menehi informasi babagan status produk sampeyan ing platform kita sajrone 24 jam kepungkur.\nSajrone periode iki, ana owah-owahan ing status sawetara produk. Owah-owahan kasebut bisa uga amarga tuku, nganyari saham, utawa acara liyane sing gegandhengan.\nKanggo informasi sing luwih rinci babagan saben produk, mangga mlebu menyang akun lan mriksa bagean 'Status Produk'.",
        'action' => "Bukak Panel Vendor",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Pesenan akeh sing ditampa| :shop | :date",
        'title' => "Notifikasi Pesenan Massal",
        'message' => "Sampeyan wis nampa batch pesenan akeh. Mangga bukak kaca pangolahan pesenan ing panel sampeyan kanggo rincian liyane. Sampeyan uga bisa ngundhuh dhaptar pesenan liwat link aman sing kasedhiya, valid kanggo 7 dina.<br><br>\n        <b>PENTING:</b> Link iki valid kanggo 7 dina.<br>\n        Link iki dinamis, supaya saben sampeyan ngeklik, sampeyan bakal nampa pesenan paling dianyari kanggo tanggal tartamtu iki. <b>Tegese yen status pembayaran pesenan diganti ditolak, sampeyan ora bakal weruh pesenan kasebut ing CSV sing diundhuh, utawa yen pesenan wis dibayar, bakal katon ing dhaptar.</b><br><br>\n        <ul>\n            <li>CSV ngemot pesenan mbayar kanthi tanggal sing dilindhungi ing :date.</li>\n            <li>Reserved date yaiku tanggal nalika pangguna ngeklik checkout ing kaca pesenan.</li>\n        </ul>\n        <b>Kanggo nyegah pesenan duplikat, tansah mriksa Order ID sadurunge ngirim.</b>",
        'action' => "Unduh Daftar Pesanan",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Sawetara item ing pesenan sampeyan ora ditampa lan ora bisa dikirim. Jumlah item kasebut bakal dibalekake maneh menyang kertu sampeyan."
    ]

];
