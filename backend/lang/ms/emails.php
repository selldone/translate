<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Mesej ini mengalu-alukan pembeli baharu ke kedai.',
        ShopMailTemplateCodes::OrderCheckout => 'Pemberitahuan ini dihantar apabila pembeli mengesahkan pesanan.',
        ShopMailTemplateCodes::OrderPayment => 'Pemberitahuan ini mengesahkan pembayaran yang berjaya dibuat oleh pelanggan.',
        ShopMailTemplateCodes::OrderUpdate => 'Mesej ini dihantar untuk mengemas kini pembeli tentang status pesanan mereka.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Mesej ini dihantar kepada penjual untuk memberitahu mereka tentang pesanan yang disahkan.',
        ShopMailTemplateCodes::PosCheckout => 'Pemberitahuan ini dihantar untuk mengesahkan pesanan tempat jualan untuk pembeli.',
        ShopMailTemplateCodes::PosPayment => 'Pemberitahuan ini mengesahkan pembayaran tempat jualan yang dibuat oleh pembeli.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Mesej ini memberitahu penjual tentang pembelian yang dibuat di tempat jualan mereka.',
        ShopMailTemplateCodes::ShopContact => 'Pemberitahuan ini dihantar apabila borang hubungan telah diserahkan.',
        ShopMailTemplateCodes::ShopGiftCard => 'Pemberitahuan ini memberitahu pengguna bahawa mereka telah menerima kad hadiah.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Mesej ini mengalu-alukan vendor baharu ke kedai.',
        ShopMailTemplateCodes::ShopVendorInvite => "Mesej ini dihantar untuk menjemput vendor menyertai pasaran anda.",
        ShopMailTemplateCodes::ShopVendorOrder => "Mesej ini dihantar kepada vendor apabila pesanan diterima sama ada dalam status Dibayar atau Tunai Semasa Penghantaran (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Dihantar setiap hari untuk mengemas kini vendor tentang status produk mereka.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Mesej ini dihantar untuk menjemput vendor menyertai pasaran anda.",

        ShopMailTemplateCodes::UserLogin => "Beritahu pengguna dengan butiran log masuk, termasuk alamat IP, tarikh dan peranti, untuk tujuan keselamatan.",
        ShopMailTemplateCodes::LoginCode => "Hantar kod kata laluan sekali untuk pengguna log masuk ke kedai.",

        ShopMailTemplateCodes::EmailVerifyLink => "Hantar pautan untuk mengesahkan alamat e-mel pengguna. E-mel ini dihantar apabila pengguna mendaftar dengan SMS dan memasukkan e-mel mereka. Ia tidak dihantar apabila pengguna mendaftar secara langsung dengan log masuk sosial atau e-mel.",

        ShopMailTemplateCodes::EmailBulkOrder => "Hantar senarai pesanan yang diterima dan dibayar secara pukal untuk hari tertentu."


    ,

    ],


    'global' => [
        'greetings' => 'Hai, :name!',
        'end-statement' => 'Pasukan penyokong',

        'receiver_name' => 'Hai :user_name',
        'footer-help' => "Perlukan bantuan? Tanya di [support@selldone.com](mailto:support@seldone.com) atau lawati [pusat bantuan](https://selldone.com/community) kami.",
        'selldone-team' => 'Pasukan Selldone',
        'footer-shop' => "Jika anda memerlukan bantuan dengan apa-apa sila jangan teragak-agak untuk menghantar e-mel kepada kami: :shop_mail",
        'accept' => "Terima",
        'reject' => "Tolak",
        'verify' => "mengesahkan",
        'title' => "Tajuk",
        'value' => "Nilai",
        'description' => "Penerangan",
        'shop' => "kedai",
        'shop-info' => "Maklumat kedai",
        'user' => "pengguna",
        'user-info' => "Maklumat Akaun",
        'license' => "Lesen",
        'status' => "Status",
        'start' => "Mulakan",
        'end' => "tamat",
        'renewal' => "Pembaharuan",
        'view' => "Lihat",

        'balance' => "Seimbang",
        'card_number' => "Nombor kad",
        'cvv' => "Cvv",
        'expire_date' => "Tarikh luput",

        'Dashboard' => "Papan pemuka",
        'order' => "pesanan",
        'view_order' => "Lihat Pesanan",
        'pay_now' => "Pay now",

        'official_selldone' => "RASMI DIJUAL",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "mata wang",
        'free-balance' => "Baki percuma",
        'locked-balance' => "Baki terkunci",
        'bot' => "Bot",
        'requests' => "Permintaan",
        'baskets' => 'Troli',
        'physical' => "Fizikal",
        'virtual' => "Maya",
        'file' => "Fail",
        'service' => "Perkhidmatan",
        'fulfillment' => "Pemenuhan",
        'open' => "Buka",
        'reserved' => "Terpelihara",
        'canceled' => "Dibatalkan",
        'payed' => "Dibayar",
        'cod' => "COD",
        'orders-count' => 'Pesanan',
        'payments-count' => 'Pembayaran',
        'confirms-count' => 'Mengesahkan',
        'sends-count' => 'Menghantar',
        'delivers-count' => 'Menyampaikan',
        'count' => 'Kira',
        'transactions-count' => 'Kiraan urus niaga',
        'success-transactions' => 'Transaksi yang berjaya',
        'total-amount' => 'Jumlah keseluruhan',
        'amount' => 'Jumlah',
        'wage' => 'Gaji',
        'debug' => 'Nyahpepijat',
        'pos' => 'POS',
        'live' => 'Langsung',
        'CheckQueue' => 'Semak baris gilir',
        'OrderConfirm' => 'Sahkan pesanan',
        'PreparingOrder' => 'Menyediakan pesanan',
        'SentOrder' => 'Hantar pesanan',
        'ToCustomer' => 'Dihantar kepada pelanggan',
        'Pending' => 'Yang belum selesai',
        'Accepted' => 'Diterima',
        'Rejected' => 'Ditolak',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'telefon',
        'total' => 'Jumlah',
        'view-detail' => 'Lihat butiran',
        'empty' => 'kosong',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Balas',
        'reactions' => 'Reaksi',
        'Comments' => 'Komen',
        'last-comment' => 'Komen terakhir',
        'response-to' => 'Tindak balas kepada',
        'posts' => 'Catatan',
        'post' => 'Pos',

        'name' => 'nama',
        'email' => 'E-mel',
        'type' => 'menaip',
        'device' => 'Peranti',
        'platform' => 'Platform',
        'browser' => 'pelayar',
        'time' => 'Masa',
        'Wallet' => 'Dompet',
        'date' => 'Tarikh',

        'account' => 'Akaun',
        'transaction' => 'Transaksi',
        'fee' => 'Bayaran',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bil',
        'category' => 'kategori',
        'password' => 'Kata laluan',
        'verify-login' => "Sahkan & Log Masuk",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'hiper',
        'buy-now' => "Beli sekarang",
        'add-domain' => "Add Domain",
        'views' => 'Pandangan',


        'country' => 'Negara',
        'address' => 'alamat',
        'postal' => 'Poskod',
        'building_no' => 'Bangunan #',
        'building_unit' => 'Unit #',
        'message' => 'Mesej',


        'customer' => 'Pelanggan',
        'cart-items' => 'Barangan troli',
        'payment' => 'Bayaran',
        'receiver' => 'Penerima',
        'virtual-items' => 'Item maya',
        'no-payment' => 'Tiada bayaran!',

        'enable' => 'Dayakan',
        'access' => 'Akses',
        'bank' => 'Maklumat bank',

        'vendor' => 'Penjual',

        'view_content' => "Lihat kandungan penuh",
        'files' => 'Fail',
        'download' => 'Muat turun',
        'file_name' => 'Nama Fail',
        'file_size' => 'Saiz',

        'subscription' => 'Langganan',
        'products' => 'Produk',
        'vendor_products' => 'Produk Penjual',

        'pickup' => 'Pickup',

        'minutes' => 'minit',
        'hours' => 'jam',

        'refund' => 'Bayaran balik',
        'recipient_address' => 'Alamat Penerima',
        'signature' => 'Tandatangan',
        'blockchain' => 'Rantaian sekat',
        'details' => 'Butiran',


    

        'Shop' => 'kedai',
        'dashboard' => 'papan pemuka',
        'comments' => 'komen',
        'wallet' => 'dompet',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "OS Perniagaan Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Laporan Prestasi, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Laporan Bermusim, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hai',
            'name' => 'Luluskan, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Sokong :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Sahkan, Selldone'
        ],
        'Welcome' => [
            'id' => 'hai',
            'name' => 'Komuniti, Selldone'
        ],
        'NewShop' => [
            'id' => 'peniaga',
            'name' => 'Luluskan, Selldone'
        ],
        'Approve' => [
            'id' => 'terima',
            'name' => 'Luluskan, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Pengurusan Pesanan :name'
        ],

        'Recovery' => [
            'id' => 'pemulihan',
            'name' => 'Pasukan Pemulihan Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Menunggu ⌛',
        'PAYED' => 'Berbayar ✅',
        'CANCELED' => 'Dibatalkan ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Pentadbir',
            'OFFICER' => 'Pegawai dan Penyelia',
            'AUDITING' => 'Pengurus pengauditan',
            'EMPLOYEE' => 'Pekerja',
            'PRODUCT' => 'Pengurus produk',
            'CONTENT' => 'Pengurus kandungan',
            'MARKETING' => 'Pengurus pemasaran',
            'VIEWER' => 'Penonton',

        ],
        'subject' => ":inviter menjemput anda sebagai :level| :shop",
        'category' => "Jemputan kakitangan",
        'title' => "Anda telah dijemput ke <b>:shop_name</b> sebagai <b>:level</b> .",
        'message' => "Anda telah menerima jemputan untuk bekerjasama dengan pasukan <b>:shop_title</b> dalam perniagaan. Anda mempunyai pilihan untuk menerima atau menolak tawaran ini. Sekiranya anda memilih untuk menerima, sila log masuk ke perkhidmatan Selldone untuk mengesahkan keputusan anda. Selepas pengesahan, anda akan mendapat akses ke bahagian pengurusan kedai.",

    ],

    'welcome-email' => [
        'subject' => "👋 Selamat datang :name, Mari Bermula dengan Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Selamat datang ke Selldone",
        'message' => "Terima kasih kerana memilih Selldone! Anda kini sebahagian daripada komuniti bertenaga yang menghubungkan penjual global kepada pelanggan, perniagaan tempatan kepada perusahaan dan individu kepada syarikat. Semua alatan Master dan Pro kami tersedia untuk anda **percuma** dan **tanpa had**. Kami di sini untuk menyokong anda dan membuka pintu kepada kejayaan anda.",

        'index' => "Langkah :step.",

        'step-domain' => [
            'title' => 'Tambahkan Domain Tersuai Anda',
            'message' => "Untuk bermula, tambahkan domain tersuai anda secara percuma dalam Papan Pemuka Kedai di bawah Tetapan > Tetapan Domain.",
            'action' => 'Uruskan Domain Saya',
        ],
        'step-landing' => [
            'title' => 'Sesuaikan Halaman Utama Anda',
            'message' => "Peribadikan halaman utama anda dengan pergi ke Papan Pemuka > Halaman. Pilih halaman pendaratan atau buat halaman baharu. Ia mudah dan intuitif, dan anda boleh mula mengerjakannya dengan segera.",
            'action' => 'Sesuaikan Halaman Pendaratan Saya',
        ],
        'step-payment' => [
            'title' => 'Sediakan Kaedah Pembayaran',
            'message' => "Mula menerima pembayaran terus ke akaun bank anda. Untuk menyambungkan penyedia pembayaran anda seperti Stripe, PayPal dan banyak lagi, pergi ke Papan Pemuka > Perakaunan > Gerbang.",
            'action' => 'Tambah Kaedah Pembayaran',
        ],
        'step-products' => [
            'title' => 'Tambah Produk Anda',
            'message' => "Tambah produk dan kategori dengan mudah dalam Papan Pemuka > Produk. Ia sama seperti menguruskan fail dan folder pada PC anda – sedia seret dan lepas sepenuhnya. Anda juga boleh mengimport produk secara pukal menggunakan Excel. Templat sampel tersedia untuk membantu anda bermula.",
            'action' => 'Uruskan Produk Saya',
        ],
        'step-shipping' => [
            'title' => 'Sediakan Kaedah Penghantaran',
            'message' => "Untuk mengenakan bayaran kepada pelanggan bagi penghantaran, tentukan kaedah penghantaran anda dalam Papan Pemuka > Logistik > Penghantaran. Anda boleh menetapkan harga dan sokongan yang berbeza untuk pelbagai lokasi. Jangan lupa tetapkan asal gudang anda dalam Papan Pemuka > Logistik > Gudang.",
            'action' => 'Uruskan Kaedah Penghantaran',
        ],
    

        'seller' => [
            'title' => 'Adakah anda seorang penjual?',
            'message' => 'Untuk mula menjual, masukkan papan pemuka anda di Selldone melalui pautan di bawah dan buat kedai pertama anda secara percuma sepenuhnya. Ini akan mengambil masa beberapa minit dan anda akan mempunyai kedai dan tapak dalam talian anda sendiri. Kami kemudian akan membimbing anda ke langkah seterusnya dan mendapatkan gerbang pembayaran.',
            'action' => 'Log masuk ke papan pemuka saya',
        ],
        'buyer' => [
            'title' => 'Saya seorang pembeli',
            'message' => 'tahniah. Sebaik sahaja anda menjadi ahli Selldone, anda akan menyingkirkan semua kerumitan keahlian dan pengesahan di kedai dalam talian. Untuk mendapat manfaat daripada mana-mana kedai dan tapak yang menggunakan platform Selldone, anda boleh log masuk dengan satu klik dan membuat pembelian anda mudah, cepat dan selamat.',
        ],
    ],


    'charge-account' => [
        'category' => 'Dompet > Akaun > Caj',
        'title' => "Caj Kejayaan",
        'message' => "Akaun anda <b>:account_number</b> telah berjaya dicaj <b>:amount</b>.",
        'account' => 'Akaun',
        'charge' => 'caj',
        'balance' => 'Seimbang',
        'footer' => "Jadikan perniagaan mudah, boleh dicapai dan boleh diakses oleh sesiapa sahaja di seluruh dunia."
    ],

    'verify-email' => [
        'subject' => "🙌 Lengkapkan pendaftaran anda untuk Selldone! Sahkan pautan.",
        'category' => "ANDA SATU LANGKAH JAUH",
        'title' => "Mengesahkan alamat e-mel anda",
        'message' => "Hai :name,<br><br>Terima kasih kerana memilih Selldone!<br><br>Untuk mengesahkan bahawa <b>:email</b> ialah alamat e-mel anda yang betul, sila klik butang di bawah atau gunakan pautan yang disediakan. Anda mempunyai 48 jam untuk melengkapkan pengesahan ini.",
        'footer' => "Jika anda menghadapi masalah mengklik butang Sahkan, salin dan tampal URL di bawah ke dalam pelayar web anda: :activation_url",
        'next-step' => "Seterusnya, kami akan menghantar beberapa bahan berguna kepada anda dan panduan langkah demi langkah untuk memudahkan anda menambah domain tersuai anda, menyediakan pembayaran, menambah produk dan mendapatkan pesanan pertama anda.",

    ],
    'verify-email-code' => [
        'subject' => "Kod pengesahan untuk :name",
        'category' => "SECURITY",
        'title' => "Kod pengesahan e-mel",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Kedai Anda Sedia| :name",
        'category' => "ANDA SATU LANGKAH JAUH",
        'title' => "Persediaan selesai",
        'account_title' => "Akaun anda",
        'account_msg' => "Sahkan dan log masuk ke akaun anda dengan maklumat ini.",
        'shop_msg' => "Maklumat akaun pada sistem pengendalian perniagaan Selldone.",

    ],

    'reset2fa' => [
        'category' => "MESEJ RASMI KESELAMATAN",
        'title' => "Minta lumpuhkan log masuk 2 langkah",
        'message' => "Anda menerima e-mel ini kerana kami menerima permintaan untuk menetapkan semula pengesahan dua faktor untuk akaun **:name** dengan e-mel **:email**.<br><br>Kami menemui butiran berikut untuk akaun anda:",
        'footer' => "Jika anda tidak meminta tetapan semula kata laluan, tiada tindakan lanjut diperlukan.",
        'action' => 'Lumpuhkan log masuk dua langkah',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Kedai anda sudah siap sekarang!",
        'category' => "LAHIR KEDAI DALAM TALIAN BARU DI DUNIA",
        'title' => "Tahniah, :name!",
        'message' => "<b>Tahniah, :name! Perniagaan dalam talian baharu anda kini disiarkan!</b> Kami teruja untuk mengalu-alukan anda ke komuniti Selldoners. Anda telah mengambil langkah pertama ke arah kejayaan dan kami berada di sini untuk membantu anda setiap langkah.<br>Setelah kedai anda sedia, mari pastikan anda bersedia untuk menerima bayaran terus daripada pelanggan anda dan mula mengembangkan empayar anda. Jika anda memerlukan bantuan, kami hanya menyampaikan mesej sahaja—pasukan sokongan kami sentiasa bersedia untuk anda.<br><br><b>Langkah SeterusnyaPenting:</b> Untuk bermula, pastikan anda sudah bersedia untuk menerima pembayaran dan operasi yang lancar. Kami akan membimbing anda melalui setiap peringkat untuk memastikan kedai anda berjalan dengan lancar.",
        'pdf-book' => "Jangan terlepas buku panduan yang dilampirkan: Lakukan Perniagaan Anda Seperti Permainan",

        'account' => [
            'title' => 'Langkah 1: Buat akaun dalam dompet Selldone',
            'message' => "Untuk bermula, buat akaun dalam dompet Selldone anda. Di sinilah yuran anda akan ditolak dan di sini juga tempat anda akan menambah nilai untuk memastikan kedai anda berjalan lancar. Jika baki anda menjadi negatif, jangan risau! Kedai anda akan terus beroperasi tanpa gangguan.",
            'action' => 'Log masuk ke dompet',
        ],

        'shop-account' => [
            'title' => 'Langkah 2: sambungkan akaun ke kedai',
            'message' => "Seterusnya, sambungkan akaun dompet anda ke kedai anda. Pergi ke <b>Store > Accounting > Invoice</b>, dan pautkan dompet anda. Ini memastikan bahawa semua pembayaran pelanggan didepositkan terus ke dalam akaun bank anda—Selldone tidak memotong sebarang amaun daripada pendapatan anda.",
            'action' => 'Panel Invois Simpan',
        ],

        'gateway' => [
            'title' => 'Langkah 3: Sambungkan Gerbang Pembayaran Dalam Talian',
            'message' => "Sekarang, mari sediakan gerbang pembayaran dalam talian anda. Pergi ke <b>Store > Accounting > Port</b> dan klik pada <b>Add New Port</b>. Pilih mata wang anda dan anda akan melihat senarai gerbang pembayaran yang tersedia. Menyambung pintu masuk adalah pantas dan mudah, tetapi jika anda memerlukan sebarang bantuan, sila semak panduan Selldone atau hubungi kami.",
            'action' => 'Tambahkan portal ke kedai',
        ],

        'domain' => [
            'title' => 'Langkah terakhir: menyambungkan domain khusus',
            'message' => "Sekarang, pautkan domain tersuai anda ke kedai anda. Ini membolehkan pelanggan membeli produk atau perkhidmatan anda dan membuat pembayaran terus kepada anda.",
            'action' => 'Memperkenalkan dan menerima kad hadiah tanpa had',
        ],
    ],


    'basket-list' => [
        'item' => "item",
        'count' => "Kira",
        'price' => "harga",
        'discount-code' => "Kod diskaun",
        'customer-club' => 'Kelab Pelanggan',
        'shipping' => "penghantaran",
        'total' => "Jumlah",
        'offer' => "Tawaran",
        'coupon' => "kupon",
        'lottery' => "Anugerah",
        'tax' => "Cukai",
        'tax_included' => "Termasuk dalam harga",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Kaedah',
        'amount' => 'Jumlah',
        'giftcard' => 'Gift card',
        'payment' => 'Bayaran',
    ],


    'shop-subscription-email' => [
        'category' => "Kemas kini langganan",
        'title' => "Lesen Kedai: :shop_title",
        'title-reserved' => "Lesen rizab: :shop_title",
        'title-active' => "Lesen aktif: :shop_title",
        'title-finished' => "Lesen tamat: :shop_title",
        'title-cancel' => "Batalkan lesen: :shop_title",
        'message' => "Pelan lesen kedai anda dikemas kini,",
        'RESERVED' => "⚡ Pelan langganan anda telah **ditempah**.",
        'ACTIVE' => "🟢 Pelan langganan anda telah **diaktifkan**.",
        'FINISHED' => "🚧 Pelan langganan anda telah **selesai**.",
        'CANCEL' => "⛔ Pelan langganan anda telah **dibatalkan**.",
    ],

    'support' => [
        'subject' => "Pusat Sokongan|:name membalas",
        'category' => "Pusat sokongan",
        'title' => "Anda menerima jawapan",
        'action' => "Buka admin kedai",
    ],

    'shop-customer-join' => [
        'subject' => "Sertai :shop_title",
        'category' => "Sambutan pelanggan baru",
        'title' => "Kami gembira untuk keahlian anda",
        'action' => "Lawati sekarang",
    ],

    'shop-vendor-join' => [
        'subject' => "Vendor Onboarding | :shop_title",
        'category' => "Sambutan vendor baru",
        'title' => "Kami gembira untuk keahlian anda",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Tambah kad baharu",
        'title' => "Tahniah, anda telah menerima kad hadiah",
        'action' => "Berbelanjalah sekarang",
        'message' => "Anda telah menerima kad hadiah dalam jumlah :balance :currency. Anda akan dapat membeli dari kedai kami dengan kad hadiah ini.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Pusat Sokongan| :shop",
        'category' => "sokongan",
        'title' => "Anda menerima jawapan",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Pembayaran Pesanan | :order_id",
        'title' => "pesanan",
        'message' => "Anda membuat pesanan di kedai kami. Kami menerima pesanan anda dan akan menghantar e-mel lain kepada anda setelah pembayaran disahkan."
    ,

        'payments' => 'Pembayaran',
    ],

    'order-payment' => [
        'subject' => "🛍 Pengesahan Pembayaran | :order_id",
        'title' => "Pesanan pembayaran",
        'message' => "Pembayaran anda selesai,<br> Kami telah menerima pesanan anda. Kami akan menghantar e-mel lain kepada anda apabila pesanan anda dihantar.",
    

        'payments' => 'Pembayaran',
    ],

    'order-update' => [
        'subject' => "🛍️ Kemas Kini Status Pesanan|Pesanan :order_id",
        'title' => "Kemas Kini Status Pesanan",
        'message' => "Pesanan anda telah dikemas kini. Anda boleh menyemak status terkini pesanan ini dalam akaun anda.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Pesanan anda berada dalam baris gilir untuk diproses. Kami akan memberitahu anda apabila ia sedang disediakan.",
                'OrderConfirm' => "Pesanan anda telah disahkan dan penyediaan telah bermula.",
                'PreparingOrder' => "Pesanan anda sedang disediakan dan akan dihantar tidak lama lagi.",
                'SentOrder' => "Pesanan anda telah dihantar. Anda akan menerimanya sebentar lagi.",
                'ToCustomer' => "Pesanan anda telah dihantar. Kami harap anda menikmatinya!",

                'PreparingOrder-PICKUP' => "Pesanan anda sedang disediakan. Anda akan menerima pemberitahuan apabila ia sedia untuk diambil.",
                'SentOrder-PICKUP' => "Pesanan anda sedia untuk diambil. Sila datang ke kedai untuk mengambilnya.",
                'ToCustomer-PICKUP' => "Pesanan anda telah diambil. Kami harap anda menikmatinya!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Pesanan anda berada dalam baris gilir untuk diproses. Kami akan memberitahu anda apabila sudah sedia.",
                'OrderConfirm' => "Pesanan anda disahkan dan penyediaan sedang dijalankan.",
                'PreparingOrder' => "Pesanan anda sedang disediakan dan akan dihantar kepada anda tidak lama lagi.",
                'ToCustomer' => "Pesanan maya anda telah dihantar ke akaun anda. terima kasih!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Permintaan perkhidmatan anda berada dalam baris gilir. Kami akan memberitahu anda apabila kami mula.",
                'OrderConfirm' => "Perkhidmatan anda telah disahkan dan kami sedang bersedia untuk memulakan.",
                'PreparingOrder' => "Kami sedang menyediakan perkhidmatan anda dan akan memberitahu anda sebaik sahaja ia selesai.",
                'ToCustomer' => "Perkhidmatan anda selesai. Terima kasih kerana memilih kami!"
            ],
            'FILE' => [
                'PreparingOrder' => "Fail anda sedang disediakan dan akan tersedia tidak lama lagi.",
                'ToCustomer' => "Fail anda sudah sedia dan telah dihantar. Anda kini boleh memuat turunnya."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Pesanan langganan anda berada dalam baris gilir. Kami akan memberitahu anda apabila pemprosesan bermula.",
                'OrderConfirm' => "Langganan anda telah disahkan dan sedang disediakan.",
                'PreparingOrder' => "Kami sedang menyediakan langganan anda dan ia akan bermula tidak lama lagi.",
                'SentOrder' => "Langganan anda telah diaktifkan. Anda akan menerima kemas kini berterusan.",
                'ToCustomer' => "Perkhidmatan langganan anda telah berjaya diaktifkan."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Tahniah :name | Baucar baharu: :title',
        'category' => "TAHNIAH, BAUCAR BARU",
        'message' => "Hai :name,<br><br>Anda telah menerima baucar baharu sebagai hadiah daripada kami! Anda boleh memperoleh lebih banyak baucar dengan memperkenalkan Selldone kepada rakan anda dan semua orang yang anda kenali. Baucar ini bernilai **:price :currency**.<br><br>Anda telah mengambil langkah pertama dan kami di sini untuk membantu anda membuka kunci ciri baharu dengan baucar anda! Sila log masuk dengan **:email** dan cari baucar anda di Kedai **Papan Pemuka** > **Tetapan** > **Lesen**.<br><br>Tahniah!",
        'action' => "Papan utama saya",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Tahniah, Dear :name | Anda telah menerima hadiah',
        'category' => "Pengumuman menerima hadiah",
        'title' => "Hadiah untuk anda",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Hadiah",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Pesanan Baru Diterima | :order_id",
        'title' => "New Order",
        'message' => "Anda telah menerima pesanan baharu. Sila pergi ke halaman pemprosesan pesanan di kedai anda.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Maklumat Anda yang Diisi',
        'output-form-title' => 'Maklumat item yang dibeli',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Laporan Mingguan :time',
        'title' => 'Laporan prestasi kedai mingguan',
        'message' => "Ini ialah laporan mingguan kedai anda daripada <b>:start</b> hingga <b>:end</b>. Laporan ini termasuk petua untuk meningkatkan perniagaan anda, anda juga boleh menyemak status kedai dalam talian anda dan pesanan terkini. Saya harap anda mempunyai hari yang baik dan minggu hadapan."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Laporan penjimatan :amount anda dalam tiga bulan terakhir| :shop_title',
        'title' => 'Laporan bermusim tentang aktiviti perniagaan, ganjaran dan penjimatan kewangan anda',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Akaun bersambung',
        'sub-title' => 'Apakah status terkini akaun dompet yang disambungkan ke kedai saya?',
        'view-wallet' => 'Lihat dompet',
        'tip-title' => 'Petua penting',
        'tip' => "Sediakan dompet Selldone percuma dan pautkannya ke kedai anda. Walaupun baki anda negatif, pelanggan anda masih boleh membeli-belah dan membayar tanpa sebarang masalah. Jangan risau, operasi dan data kedai anda akan diteruskan dengan lancar sehingga 1 bulan, tanpa sebarang gangguan.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Sambung ke akaun'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apl dipasang',
        'sub-title' => 'Senarai apl yang telah anda pasang di kedai anda minggu ini.',
        'tip' => "Adakah anda ingin mencari lebih banyak apl untuk kedai anda?",
        'view-app-store' => 'Lawati Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bot Kedai Anda',
        'sub-title' => 'Bot jualan aktif di kedai saya.',
        'tip-title' => 'Jualan Bot',
        'tip' => "Selldone telah memberikan anda bot jualan automatik. Apa yang anda perlu lakukan ialah pergi ke panel Add-ons> Bots dan aktifkan bot kedai anda. Ambil perhatian bahawa perkhidmatan yang berkaitan mesti tersedia di negara anda.",
        'view-bots' => 'Urus bot',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikasi dengan Pelanggan',
        'sub-title' => 'Berapakah bilangan kenalan saya dengan pelanggan saya minggu ini?',
        'faqs' => 'Soalan Lazim',
        'tickets' => 'Tiket Pelanggan',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status Pengguna',
        'sub-title' => 'Aktiviti dari :start hingga :end',
        'users' => [
            'title' => 'Pelanggan',
            'subtitle' => 'Pengguna Daftar',
        ],
        'views' => [
            'title' => 'Lawatan',
            'subtitle' => 'Berapa kali anda melawat kedai',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Pengguna Kembali',

        'shop_views' => 'Pandangan Kedai',
        'baskets' => [
            'title' => 'Troli Beli-belah',
            'subtitle' => 'Laporkan bilangan troli beli-belah baharu',
        ],
        'products' => [
            'title' => 'Gambaran Keseluruhan Produk',
            'subtitle' => 'Status produk di kedai mengikut jenis',
            'value_name' => 'Produk'
        ],
        'products_count' => 'Jenis produk',
        'views_count' => 'Kiraan tontonan',
        'sell_count' => 'Kiraan jualan',
        'send_count' => 'Kiraan penghantaran',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel untuk penjual utama Drop Shipping Selldone.',
        'total_fulfillments' => 'Jumlah Pesanan Diterima',
        'ds_count' => 'Menerima Pesanan',
        'statistics_title' => 'Laporan menerima pesanan',
        'ds_cancels' => 'Batalkan oleh penjual antara muka',
        'ds_rejects' => 'Batalkan oleh Anda',
        'tip' => "Adakah anda seorang penjual besar yang mempunyai gudang, kilang atau pengedar produk? Anda boleh meluaskan jangkauan anda dengan menawarkan produk anda kepada penjual lain melalui perkhidmatan Penghantaran Drop Selldone. E-mel kami di support@selldone.com untuk mengetahui lebih lanjut.",
        'view-drop-shipping-panel' => 'Log masuk ke panel borong',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Kadar pertukaran',
        'sub-title' => 'Senarai kadar penukaran mata wang terkini di kedai anda.',
        'from' => 'Mata Wang Sumber',
        'to' => 'Mata wang destinasi',
        'rate' => 'Kadar penukaran',
        'view-exchange-panel' => 'Uruskan Kadar Pertukaran',
    

        'vew-exchange-panel' => 'panel pengurusan kadar pertukaran',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Kontrak pakar',
        'sub-title' => 'Apakah profesional yang bekerja di kedai saya?',
        'cost' => 'Jumlah kontrak',
        'duration' => 'Tempoh',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Tarikh Batal',
        'end_at' => 'Tarikh penghantaran',
        'tip' => 'Anda boleh mengupah pakar terbaik di Selldone untuk membangunkan perniagaan anda.',
        'view-experts' => 'Klik untuk bermula.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Laporkan gerbang pembayaran aktif di kedai :shop.',
        'tip-title' => 'Petua penting',
        'tip' => "Pergi ke halaman pengurusan portal di kedai anda dan tambahkan sekurang-kurangnya satu port dalam beberapa minit. Pelanggan anda suka membayar dengan cepat dan selamat melalui portal dalam talian.",
        'view-shop-gateways' => 'Log masuk ke pengurusan portal kedai saya.',
        'view-gateways' => 'Lihat lebih banyak pintu masuk',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Pesanan',
        'sub-title' => 'Senarai tempahan yang saya terima minggu ini.',
        'total_baskets' => 'Jumlah Pesanan',
        'total_posBaskets' => 'Jumlah Pesanan Tunai',
        'pos-title' => 'Kotak Kedai POS',
        'chart-label' => 'Pesanan selesai (pesanan ini tidak semestinya dibayar!)',
        'tip-title' => 'Anda harus berusaha lebih keras...',
        'tip' => "Tiada kejayaan mudah.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Pusat pemprosesan',
        'sub-title' => 'Berapa banyak pesanan yang kami proses di kedai minggu ini?',
        'tip-title' => 'Anda tidak mempunyai jualan!',
        'tip' => "Malangnya anda tidak mempunyai sebarang jualan minggu ini. Anda perlu mendapatkan lebih banyak ke kedai anda. Anda boleh menambah lebih banyak produk, memilih imej yang lebih baik atau menulis penerangan yang lebih baik untuk produk anda. Pertimbangkan pekerjaan sepenuh masa untuk perniagaan anda. Jika anda melakukannya dengan betul dan tidak kecewa, anda akan berjaya.",
        'view-process-center' => 'Lihat pusat proses',
        'return' => [
            'title' => 'Pesanan Dikembalikan',
            'subtitle' => 'Laporkan pesanan yang dikembalikan.',
            'tip-title' => 'Adakah anda tahu bahawa ...',
            'tip' => "Anda boleh mencipta seberapa banyak daftar tunai yang anda perlukan dengan Selldone POS! Sama ada tablet, mudah alih atau komputer riba anda, anda boleh menjadikan mana-mana peranti sebagai tempat jualan kedai anda. Ia mudah, cepat disediakan dan disediakan sepenuhnya untuk pelayan anda. Mula menggunakannya hari ini!",
            'view-pos' => 'Log masuk ke Juruwang Kedai Dalam Talian Saya'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesi',
        'sub-title' => 'Berapa kali saya melawat kedai saya?',
        'countries-title' => 'Negara manakah yang paling banyak dikunjungi?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Adakah anda ingin menjana wang tanpa membelanjakan satu wang?',
        'message' => "Dear :name, anda boleh pergi ke Dashboard > Demonetization dan buat pautan rujukan. Hantar pautan kepada rakan anda, Anda menerima kad hadiah Selldone dan peratusan daripada pembayaran rakan anda. Ambil perhatian bahawa kad hadiah akan dihantar kepada anda dan rakan anda.",
        'action' => 'Lihat pautan pengenalan saya',
        'mail-clip' => "<b style='color: #C2185B'>Penting:</b> Jika anda menggunakan perkhidmatan e-mel seperti Gmail yang mengehadkan panjang e-mel, cari pilihan berikut di penghujung e-mel untuk memaparkan laporan penuh dan klik padanya:",

        'no-coin-reward' => "<b style='color: #C2185B'>Maaf:</b> Aktiviti anda tidak memenuhi syarat untuk mendapatkan ganjaran SEL Coins percuma. Cuba lebih gigih dan jual lebih banyak di kedai anda untuk musim depan.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Tahniah:</b> Kerja yang bagus! Berdasarkan prestasi cemerlang anda, kami telah mengkreditkan :amount SEL Syiling ke akaun anda sebagai ganjaran.",

        'need-buy-license' => "<b>Tingkatkan Perniagaan Anda:</b> Nampaknya anda masih belum mendaftar sebarang pelan langganan untuk tapak web anda! Tingkatkan sekarang untuk membuka lebih banyak ciri dengan hanya :amount sebulan jika dibayar setiap tahun.",
        'not-afford-message' => "Jika anda menghadapi sebarang masalah dengan pembayaran atau tidak mampu membelinya sekarang, jangan teragak-agak untuk menghubungi kami di support@selldone.com.",
        'add-domain' => "<b>Mengapa tidak mempunyai domain tersuai untuk perniagaan anda?</b><br> Tambahkan domain ke tapak web anda sekarang; ianya percuma!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone ialah a<del> produk</del> <span style = 'color: forestgreen'>masyarakat</span> .<br> Jadilah Penjual profesional!",
        'message' => "Ikuti halaman rasmi Selldone di Twitter, LinkedIn dan rangkaian sosial. Hantarkan sebarang komen, permintaan atau kritikan kepada kami atau sertai perbincangan tentang Selldone. Kami juga sebahagian daripada komuniti Selldone yang <b>Anda buat</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Tempahan Avokado Baru Diterima|:shop_title :time',
        'title' => "Laporan prestasi untuk 24 jam terakhir",
        'message' => "Pelanggan anda sedang menunggu pesanan anda untuk disemak dan diberi harga. Balas permintaan pelanggan anda secepat mungkin untuk mendapatkan lebih banyak jualan.",
        'card_title' => "Pesanan dalam barisan",
        'card_subtitle' => "Sejak :date",

        'card_payed' => "Pesanan berbayar"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Balas siaran anda dalam :community_title',
        'title' => ":name, dan :count yang lain mengulas pada siaran anda.",
        'message' => "Hai :name, siaran anda mendapat perhatian! Anda telah menerima ulasan dalam komuniti kami. Log masuk ke akaun anda untuk menyertai perbincangan dan lihat apa yang diperkatakan oleh semua orang.",
        'title-simple' => ":name mengulas pada siaran anda.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Balas topik anda :topic_title',
        'title' => ":name, dan :count yang lain membalas pada topik anda.",
        'message' => "Hai :name, topik anda mendapat perhatian! Anda telah menerima balasan dalam komuniti kami. Log masuk ke akaun anda untuk menyertai perbincangan dan lihat apa yang diperkatakan oleh semua orang.",
        'title-simple' => ":name membalas pada topik anda.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Log Masuk Baru :name',
        'category' => 'Pemberitahuan keselamatan',
        'title' => "Log masuk ke Akaun",
        'message' => "Dear :name, anda telah log masuk ke akaun Selldone anda.",   // Login in selldone (seller)
        'message-shop' => "Dear :name, anda telah log masuk ke :shop_title .",  // Login in shop (buyer)

        'footer' => "Jika anda tidak log masuk, sila tukar kata laluan anda.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Mengeluarkan",
        'deposit' => "Deposit",

        'withdraw_subject' => "keluar dari akaun :account",
        'deposit_subject' => "Deposit ke akaun :account",

        'message' => "Pemindahan wang telah dilakukan dengan spesifikasi berikut.",

        'type' => "Jenis transaksi",

        'from' => "Akaun sumber",
        'to' => "Destination account",

        'desc' => "Perihalan urus niaga",
        'action' => "Lihat transaksi",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Penting! Pelanggaran peraturan| :shop",
        'category' => "Makluman kritikal",
        'title' => "Kedai anda telah dihukum",
        'action' => "Buka papan pemuka kedai",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter menjemput anda ke Selldone",
        'title' => ":name menghantar kepada anda :amount untuk membantu anda melancarkan tapak web dalam talian baharu anda dan mengewangkannya!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Menerima jemputan",
        'owner' => "Pemilik",
        'join-date' => "Pada Selldone sejak itu",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Pautan pemulihan| :shop",
        'category' => "Keselamatan kedai",
        'title' => "Pautan pemulihan kedai <b>:shop_name</b> .",
        'message' => "E-mel ini dihantar kepada anda kerana anda meminta untuk memulihkan kedai anda. Mengklik pada pautan di bawah akan memulihkan kedai anda dan semua data kepunyaannya.",
        'action' => "Sahkan Pemulihan Kedai",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Berapakah jumlah wang yang telah disimpan oleh Selldone untuk perniagaan anda?',
        'sub-title' => 'Dari tarikh :start hingga :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Pelayan, CDN, Storan dan perkhidmatan awan lain',
        ],
        'experts' => [
            'title' => 'Pakar & Kakitangan',
            'subtitle' => 'Pembangun, penyelenggaraan dan sokongan',
        ],
        'total_save' => 'Jumlah wang yang disimpan'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Prestasi awak',
        'sub-title' => 'Gambaran keseluruhan perniagaan dari :start hingga :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Pengguna Kembali',

        'shop_views' => 'Pandangan Kedai',
        'baskets' => [
            'title' => 'Troli Beli-belah',
            'subtitle' => 'Laporkan bilangan troli beli-belah baharu',

        ],
        'products' => [
            'title' => 'Gambaran Keseluruhan Produk',
            'subtitle' => 'Status produk di kedai mengikut jenis',
            'value_name' => 'Produk'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Jumlah paparan halaman tapak web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Anda telah menerima pesanan baharu. Sila pergi ke halaman pemprosesan pesanan dalam panel vendor anda.",
        'subject' => "🛍 Pesanan Baru Diterima | :order_id",
        'your_revenue' => "Hasil Anda",
    ],
    'vendor-invite' => [
        'title' => 'Jemputan Penjual',
        'message' => "Anda telah menerima jemputan untuk menjadi vendor :shop_name. Anda boleh menerima atau menolaknya dengan mengklik pada butang berikut.",
        'subject' => ":shop_name |Jemputan untuk menjadi vendor kami",
        'accept' => "Terima & Jadi Vendor",
        'reject' => "Tolak",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Jemputan untuk Sertai Pasukan Kami',
        'message' => "Anda telah dijemput untuk menyertai :vendor_name di :shop_name. Anda boleh menerima atau menolak jemputan ini menggunakan butang di bawah.",
        'subject' => "Jemputan untuk Sertai :vendor_name|Menjadi Ahli Pasukan",
        'accept' => "Terima & Sertai Pasukan",
        'reject' => "Tolak",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Kod Log Masuk anda untuk :shop",
        'header-message' => "Kami menghantar e-mel ini kepada anda kerana anda meminta kod log masuk untuk kedai. Sila dapatkan Kata Laluan Sekali Semula (OTP) anda di bawah:",
        'footer-message' => "Kod ini akan sah selama 10 minit. Jika anda tidak meminta kod log masuk ini, sila abaikan e-mel ini."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Sahkan e-mel anda| :shop",
        'title' => 'Pengesahan E-mel',
        'header-message' => "Hai :name,<br>Sila sahkan bahawa **:email** ialah alamat e-mel anda dengan mengklik butang di bawah atau menggunakan pautan di bawah dalam masa 48 jam.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Kemas Kini Produk| :shop",
        'title' => "Kemas kini tentang Status Produk - 24 Jam Terakhir",
        'message' => "Saya harap mesej ini menemui anda dengan baik. Ini adalah kemas kini ringkas untuk memaklumkan anda tentang status produk anda di platform kami sepanjang 24 jam yang lalu.\nDalam tempoh ini, terdapat perubahan dalam status beberapa produk. Perubahan ini mungkin disebabkan oleh pembelian, kemas kini stok atau acara lain yang berkaitan.\nUntuk maklumat lebih terperinci tentang setiap produk, sila log masuk ke akaun anda dan semak bahagian 'Status Produk'.",
        'action' => "Buka Panel Vendor",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Pesanan Pukal Diterima| :shop | :date",
        'title' => "Pemberitahuan Pesanan Pukal",
        'message' => "Anda telah menerima sekumpulan pesanan pukal. Sila lawati halaman pemprosesan pesanan dalam panel anda untuk butiran lanjut. Anda juga boleh memuat turun senarai pesanan melalui pautan selamat yang disediakan, sah selama 7 hari.<br><br>\n        <b>PENTING:</b> Pautan ini sah selama 7 hari.<br>\n        Pautan ini dinamik, jadi setiap kali anda mengkliknya, anda akan menerima pesanan paling terkini untuk tarikh khusus ini. <b>Ini bermakna jika status pembayaran pesanan berubah kepada ditolak, anda tidak akan melihat pesanan itu lagi dalam CSV yang dimuat turun atau jika pesanan telah dibayar, pesanan itu akan muncul dalam senarai.</b><br><br>\n        <ul>\n            <li>CSV mengandungi pesanan berbayar dengan tarikh rizab dalam :date.</li>\n            <li>Tarikh tersimpan ialah tarikh apabila pengguna mengklik pembayaran pada halaman pesanan.</li>\n        </ul>\n        <b>Untuk mengelakkan pesanan pendua, sentiasa semak Pesanan ID sebelum menghantar.</b>",
        'action' => "Muat turun Senarai Pesanan",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Beberapa item dalam pesanan anda tidak diterima dan tidak boleh dihantar. Amaun untuk item ini akan dikembalikan ke kad anda tidak lama lagi."
    ]

];
