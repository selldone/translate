<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Ruang lingkup administrator Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Akses investor terbatas.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Baca detail profil pengguna.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Baca nomor telepon.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Baca dan perbarui alamat yang disimpan.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Perbarui profil pengguna.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Tempatkan pesanan.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Lihat riwayat pesanan.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Akses kartu hadiah.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Mengedit artikel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Kelola notifikasi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Lihat daftar toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Edit detail toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Tambahkan toko baru.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Hapus toko.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Kelola tiket dukungan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Kelola kartu hadiah.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Lihat kartu hadiah.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Kelola FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Lihat FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kelola kategori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Lihat kategori.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Kelola produk.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Lihat produk.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Lihat laporan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Kelola akun keuangan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Lihat akun keuangan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Edit halaman toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Lihat halaman toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Kelola gudang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Lihat gudang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Kelola akses staf.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Lihat akses staf.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Lihat pesanan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Kelola pesanan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Kelola profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Lihat profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Kelola kode diskon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Lihat kode diskon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Kelola kupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Lihat kupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Kelola penawaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Lihat penawaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Kelola cashback.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Lihat cashback.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Kelola lotere.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Lihat lotere.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Kelola komunitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Lihat komunitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Kelola pelanggan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Lihat pelanggan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Kelola langganan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Lihat langganan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Lihat pesanan vendor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Kelola pesanan dan pembayaran vendor.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Kelola penyedia koneksi.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Lihat penyedia koneksi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Jalankan perintah AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Lihat informasi AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Kelola pembayaran vendor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Lihat pembayaran vendor.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Lihat profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Kelola profil bisnis.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Lihat informasi agensi.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Kelola informasi agensi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Lihat catatan toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Kelola catatan toko.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Lihat aset pengembang.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Kelola aset pengembang.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Akses informasi pribadi dan pengaturan akun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Kelola dompet dan transaksi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Lihat transaksi dompet.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Lihat token dan klien OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Kelola token dan klien OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Kelola pengaturan keamanan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Kelola afiliasi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Lihat afiliasi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Kelola templat cetak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Lihat templat cetak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Kelola ulasan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Lihat ulasan.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Lihat informasi monetisasi.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Kelola informasi monetisasi.',



    'profile' => 'Baca informasi profil termasuk nama, alamat email, gambar dan status otentikasi.',
    'phone' => 'Akses nomor kontak',
    'address' => 'Baca dan edit alamat dari buku alamat yang disimpan',
    'buy' => 'Pesan & Pesan Toko.',
    'order-history' => 'Baca riwayat pesanan.',
    'my-gift-cards' => 'Akses ke kartu hadiah saya.',
    'articles' => 'Mengedit Artikel.',
    'notifications' => 'Kirim dan terima pemberitahuan.',
    'read-shops' => 'Baca Daftar Toko.',
    'shop-edit' => 'Simpan akses pengeditan.',
    'shop-contacts' => 'Menerima dan mengedit formulir kontak.',
    'shop-gift-cards' => 'Membuat, Mengedit, dan Mengelola Kartu.',
    'shop-faqs' => 'Buat, edit, dan kelola pertanyaan umum.',
    'shop-categories' => 'Membuat, Mengedit, dan Mengelola Kategori.',
    'backoffice-write-products' => 'Otorisasi pembuatan, pengeditan, dan pengelolaan produk di back office.',
    'backoffice-read-products' => 'Otorisasi akses untuk melihat daftar produk dan informasi produk terperinci di back office.',
    'shop-read-reports' => 'Baca informasi dan laporan.',
    'shop-socials' => 'Edit jejaring sosial toko.',
    'shop-accounts' => 'Edit dan hapus akun keuangan yang ditautkan ke toko.',
    'shop-menus' => 'Mengedit menu toko.',
    'shop-pages' => 'Mengedit halaman toko.',
    'shop-warehouse' => 'Edit Gudang Toko',
    'shop-permissions' => 'Lihat dan edit akses toko.',
    'shop-process-center' => 'Kelola pesanan yang diterima.',
    'shop-profile' => 'Kelola profil toko.',
    'shop-discount-code' => 'Kelola kode diskon.',
    'shop-coupon' => 'Kelola kupon.',
    'shop-offer' => 'Kelola penawaran.',
    'shop-cashback' => 'Kelola pengembalian uang.',
    'shop-lottery' => 'Kelola lotere.',
    'shop-community' => 'Kelola komunitas.',
    'shop-customers' => 'Kelola pelanggan.',
    'shop-ribbon' => 'Kelola langganan Ribbon.',
    'community-read' => 'Baca komunitas Selldone.',
    'community-write' => 'Tulis komunitas selldone.',
    'profile-write' => 'Tulis informasi profil pengguna.',
    'vendor-read' => 'Akses ke tindakan pemenuhan pesanan vendor.',
    'vendor-write' => 'Ubah pesanan, pembayaran, dan informasi lain dari vendor.',
    'connect-providers' => 'Tambahkan, baca, dan tulis penyedia koneksi.',
    'personal-identification' => 'Membaca informasi pribadi, akses, dan konfigurasi akun.',
    'accounts' => 'Akses ke dompet, membaca transaksi dan riwayat isi ulang.',
    'shop-add' => 'Tambahkan toko baru.',
    'shop-delete' => 'Hapus toko.',
    'shop-ai-write' => 'Memungkinkan pengguna untuk menjalankan perintah AI.',
    'shop-ai-read' => 'Memungkinkan pengguna untuk mengakses informasi AI tanpa menjalankan perintah.',
    'vendor-payment' => 'Memungkinkan pengguna untuk menambahkan catatan pembayaran untuk vendor atau mentransfer dana melalui akun terhubung mereka seperti Stripe Connect.',
    'company-read' => 'Memungkinkan untuk membaca informasi profil bisnis.',
    'company-write' => 'Memungkinkan untuk membaca dan menulis informasi profil bisnis.',
    'agency-read' => 'Memungkinkan untuk membaca informasi agensi.',
    'agency-write' => 'Memungkinkan untuk membaca dan menulis informasi agensi.',
    'note-read' => 'Memungkinkan untuk membaca catatan toko.',
    'note-write' => 'Memungkinkan untuk membaca dan menulis catatan toko.',
    'developer-read' => 'Memungkinkan untuk membaca aset pengembang.',
    'developer-write' => 'Memungkinkan untuk membaca dan menulis aset pengembang.',
    'tokens-read' => 'Membaca token dan klien Oauth.',
    'tokens-write' => 'Tulis token Oauth dan klien.',
];
