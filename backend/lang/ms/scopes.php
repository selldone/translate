<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Skop pentadbir Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Akses pelabur terhad.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Baca butiran profil pengguna.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Baca nombor telefon.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Baca dan kemas kini alamat yang disimpan.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Kemas kini profil pengguna.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Buat pesanan.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Lihat sejarah pesanan.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Akses kad hadiah.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Edit artikel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Urus pemberitahuan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Lihat senarai kedai.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Edit butiran kedai.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Tambah kedai baharu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Padam kedai.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Urus tiket sokongan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Urus kad hadiah.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Lihat kad hadiah.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Urus Soalan Lazim.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Lihat Soalan Lazim.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Uruskan kategori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Lihat kategori.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Uruskan produk.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Lihat produk.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Lihat laporan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Mengurus akaun kewangan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Lihat akaun kewangan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Edit halaman kedai.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Lihat halaman kedai.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Menguruskan gudang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Lihat gudang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Urus akses kakitangan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Lihat akses kakitangan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Lihat pesanan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Uruskan pesanan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Urus profil perniagaan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Lihat profil perniagaan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Urus kod diskaun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Lihat kod diskaun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Uruskan kupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Lihat kupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Urus tawaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Lihat tawaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Uruskan pulangan tunai.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Lihat pulangan tunai.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Uruskan loteri.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Lihat loteri.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Mengurus komuniti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Lihat komuniti.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Urus pelanggan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Lihat pelanggan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Urus langganan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Lihat langganan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Lihat pesanan vendor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Urus pesanan dan pembayaran vendor.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Urus penyedia sambungan.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Lihat pembekal sambungan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Laksanakan arahan AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Lihat maklumat AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Uruskan pembayaran vendor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Lihat pembayaran vendor.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Lihat profil perniagaan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Urus profil perniagaan.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Lihat maklumat agensi.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Urus maklumat agensi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Lihat nota kedai.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Mengurus nota kedai.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Lihat aset pembangun.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Urus aset pembangun.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Akses maklumat peribadi dan tetapan akaun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Urus dompet dan transaksi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Lihat transaksi dompet.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Lihat token dan pelanggan OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Uruskan token dan pelanggan OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Urus tetapan keselamatan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Uruskan ahli gabungan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Lihat ahli gabungan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Urus templat cetakan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Lihat templat cetakan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Urus ulasan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Lihat ulasan.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Lihat maklumat pengewangan.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Urus maklumat pengewangan.',



    'profile' => 'Baca maklumat profil termasuk nama, alamat e-mel, imej dan status pengesahan.',
    'phone' => 'Akses nombor hubungan',
    'address' => 'Baca dan edit alamat daripada buku alamat yang disimpan',
    'buy' => 'Pesanan & Pesanan Kedai.',
    'order-history' => 'Baca sejarah pesanan.',
    'my-gift-cards' => 'Akses kepada kad hadiah saya.',
    'articles' => 'Edit Artikel.',
    'notifications' => 'Hantar dan terima pemberitahuan.',
    'read-shops' => 'Baca Senarai Kedai.',
    'shop-edit' => 'Simpan akses pengeditan.',
    'shop-contacts' => 'Terima dan edit borang hubungan.',
    'shop-gift-cards' => 'Mencipta, Mengedit dan Mengurus Kad.',
    'shop-faqs' => 'Buat, edit dan urus soalan lazim.',
    'shop-categories' => 'Mencipta, Mengedit dan Menguruskan Kategori.',
    'backoffice-write-products' => 'Benarkan penciptaan, pengeditan dan pengurusan produk di pejabat belakang.',
    'backoffice-read-products' => 'Benarkan akses untuk melihat senarai produk dan maklumat produk terperinci di pejabat belakang.',
    'shop-read-reports' => 'Baca maklumat dan laporan.',
    'shop-socials' => 'Edit rangkaian sosial kedai.',
    'shop-accounts' => 'Edit dan padamkan akaun kewangan berkaitan kedai.',
    'shop-menus' => 'Edit menu kedai.',
    'shop-pages' => 'Edit halaman kedai.',
    'shop-warehouse' => 'Edit Gudang Stor',
    'shop-permissions' => 'Lihat dan edit akses kedai.',
    'shop-process-center' => 'Menguruskan pesanan yang diterima.',
    'shop-profile' => 'Urus profil kedai.',
    'shop-discount-code' => 'Urus kod diskaun.',
    'shop-coupon' => 'Uruskan kupon.',
    'shop-offer' => 'Urus tawaran.',
    'shop-cashback' => 'Uruskan pulangan tunai.',
    'shop-lottery' => 'Uruskan loteri.',
    'shop-community' => 'Mengurus komuniti.',
    'shop-customers' => 'Urus pelanggan.',
    'shop-ribbon' => 'Urus langganan Reben.',
    'community-read' => 'Baca komuniti Selldone.',
    'community-write' => 'Tulis komuniti seldone.',
    'profile-write' => 'Tulis maklumat profil pengguna.',
    'vendor-read' => 'Akses kepada tindakan pemenuhan pesanan vendor.',
    'vendor-write' => 'Tukar pesanan, pembayaran dan maklumat lain vendor.',
    'connect-providers' => 'Tambah, baca dan tulis pembekal sambungan.',
    'personal-identification' => 'Baca maklumat peribadi, akses dan konfigurasi akaun.',
    'accounts' => 'Akses kepada dompet, membaca transaksi dan sejarah tambah nilai.',
    'shop-add' => 'Tambah kedai baharu.',
    'shop-delete' => 'Alih keluar kedai.',
    'shop-ai-write' => 'Membenarkan pengguna melaksanakan arahan AI.',
    'shop-ai-read' => 'Membenarkan pengguna mengakses maklumat AI tanpa melaksanakan arahan.',
    'vendor-payment' => 'Membenarkan pengguna menambah rekod pembayaran untuk vendor atau memindahkan dana melalui akaun bersambung mereka seperti Stripe Connect.',
    'company-read' => 'Membenarkan untuk membaca maklumat profil perniagaan.',
    'company-write' => 'Membenarkan untuk membaca dan menulis maklumat profil perniagaan.',
    'agency-read' => 'Membolehkan membaca maklumat agensi.',
    'agency-write' => 'Membolehkan membaca dan menulis maklumat agensi.',
    'note-read' => 'Membolehkan membaca nota kedai.',
    'note-write' => 'Membolehkan membaca dan menulis nota kedai.',
    'developer-read' => 'Membenarkan membaca aset pembangun.',
    'developer-write' => 'Membenarkan membaca dan menulis aset pembangun.',
    'tokens-read' => 'Baca token dan pelanggan Oauth.',
    'tokens-write' => 'Tulis token dan pelanggan Oauth.',
];
