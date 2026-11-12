<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone wengkuan administrator.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'aksés investor diwatesan.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Baca rinci profil pamaké.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Baca nomer telepon.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Maca sareng ngapdet alamat anu disimpen.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ngamutahirkeun profil pamaké.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Nempatkeun pesenan.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Témbongkeun sajarah pesenan.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Aksés kartu kado.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Edit artikel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Atur bewara.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Tingali daptar toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Édit rinci toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Tambahkeun toko anyar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Hapus toko.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Atur tiket rojongan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Ngatur kartu kado.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Témbongkeun kartu kado.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Ngatur FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Tempo FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Ngatur kategori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Témbongkeun kategori.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Ngatur produk.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Témbongkeun produk.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Nempo laporan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Ngatur akun kauangan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Nempo rekening finansial.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Édit halaman toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Témbongkeun kaca toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Ngatur gudang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Témbongkeun gudang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Ngatur aksés staf.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Témbongkeun aksés staf.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Témbongkeun pesenan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Ngatur pesenan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Ngatur profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Nempo profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Ngatur kodeu diskon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Témbongkeun kode diskon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Ngatur kupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Témbongkeun kupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Atur nawaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Témbongkeun nawaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Ngatur cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Témbongkeun cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Ngatur lotre.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Témbongkeun lotre.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Ngatur komunitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Témbongkeun komunitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Ngatur konsumén.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Nempo konsumén.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Ngatur langganan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Tingali langganan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Nempo pesenan vendor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Atur pesenan vendor sarta pangmayaran.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Atur panyadia sambungan.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Nempo panyadia nyambung.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Laksanakeun paréntah AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Tingali inpormasi AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Atur pangmayaran vendor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Témbongkeun pamayaran vendor.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Nempo profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Ngatur profil bisnis.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Ningali inpormasi agénsi.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Atur informasi agénsi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Tingali catetan toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Ngatur catetan toko.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Témbongkeun aset pamekar.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Ngatur aset pamekar.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Aksés inpormasi pribadi sareng setélan akun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Ngatur dompét sareng transaksi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Nempo transaksi dompét.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Témbongkeun OAuth tokens sarta klien.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Ngatur OAuth tokens sarta klien.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Atur setélan kaamanan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Ngatur affiliates.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Témbongkeun affiliates.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Atur témplat citak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Témbongkeun citak citakan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Ngatur ulasan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Témbongkeun ulasan.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Ningali inpormasi monetisasi.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Atur inpormasi monetisasi.',



    'profile' => 'Baca inpormasi profil kalebet nami, alamat email, gambar sareng status auténtikasi.',
    'phone' => 'Aksés nomer kontak',
    'address' => 'Maca sareng édit alamat tina buku alamat anu disimpen',
    'buy' => 'Pesenan & Pesenan Toko.',
    'order-history' => 'Baca sajarah pesenan.',
    'my-gift-cards' => 'Aksés ka giftcards kuring.',
    'articles' => 'Edit Artikel.',
    'notifications' => 'Ngirim sareng nampi béwara.',
    'read-shops' => 'Baca Daptar Toko.',
    'shop-edit' => 'Aksés éditan toko.',
    'shop-contacts' => 'Nampi sareng ngédit bentuk kontak.',
    'shop-gift-cards' => 'Nyiptakeun, Ngédit, sareng Ngatur Kartu.',
    'shop-faqs' => 'Jieun, edit, sareng atur patarosan anu sering ditaroskeun.',
    'shop-categories' => 'Nyiptakeun, Ngédit, sareng Ngatur Kategori.',
    'backoffice-write-products' => 'Otorisasi nyiptakeun, ngédit, sareng ngokolakeun produk di kantor tukang.',
    'backoffice-read-products' => 'Otorisasi aksés pikeun ningali daptar produk sareng inpormasi produk lengkep di kantor tukang.',
    'shop-read-reports' => 'Maca inpormasi sareng laporan.',
    'shop-socials' => 'Édit toko jaringan sosial.',
    'shop-accounts' => 'Édit sareng mupus akun kauangan numbu toko.',
    'shop-menus' => 'Édit ménu toko.',
    'shop-pages' => 'Édit halaman toko.',
    'shop-warehouse' => 'Édit Gudang Toko',
    'shop-permissions' => 'Ningali sareng édit aksés toko.',
    'shop-process-center' => 'Ngatur pesenan narima.',
    'shop-profile' => 'Ngatur propil toko.',
    'shop-discount-code' => 'Ngatur kodeu diskon.',
    'shop-coupon' => 'Ngatur kupon.',
    'shop-offer' => 'Atur nawaran.',
    'shop-cashback' => 'Ngatur cashbacks.',
    'shop-lottery' => 'Ngatur lotre.',
    'shop-community' => 'Ngatur komunitas.',
    'shop-customers' => 'Ngatur konsumén.',
    'shop-ribbon' => 'Atur langganan Pita.',
    'community-read' => 'Baca komunitas Selldone.',
    'community-write' => 'Tulis komunitas seldone.',
    'profile-write' => 'Tulis inpormasi profil pangguna.',
    'vendor-read' => 'Aksés ka lampah minuhan pesenan vendor.',
    'vendor-write' => 'Robah pesenan, pamayaran sareng inpormasi anu sanés tina padagang.',
    'connect-providers' => 'Tambahkeun, maca jeung nulis nyambungkeun panyadia.',
    'personal-identification' => 'Baca inpormasi pribadi, aksés, sareng konfigurasi akun.',
    'accounts' => 'Aksés ka dompét, maca transaksi sareng sajarah top-up.',
    'shop-add' => 'Tambahkeun toko anyar.',
    'shop-delete' => 'Cabut toko.',
    'shop-ai-write' => 'Ngidinan pamaké pikeun ngaéksekusi paréntah AI.',
    'shop-ai-read' => 'Ngidinan pangguna pikeun ngaksés inpormasi AI tanpa ngalaksanakeun paréntah.',
    'vendor-payment' => 'Ngidinan pangguna pikeun nambihan rékaman pamayaran pikeun ngical paralatan atanapi nransfer dana ngalangkungan akun anu nyambung sapertos Stripe Connect.',
    'company-read' => 'Ngidinan maca inpormasi profil bisnis.',
    'company-write' => 'Ngidinan maca sareng nyerat inpormasi profil bisnis.',
    'agency-read' => 'Ngidinan maca inpormasi agénsi.',
    'agency-write' => 'Ngidinan maca sareng nyerat inpormasi agénsi.',
    'note-read' => 'Ngidinan maca catetan toko.',
    'note-write' => 'Ngidinan maca sareng nyerat catetan toko.',
    'developer-read' => 'Ngidinan maca aset pamekar.',
    'developer-write' => 'Ngidinan maca sareng nyerat aset pamekar.',
    'tokens-read' => 'Baca token Oauth sareng klien.',
    'tokens-write' => 'Tulis token Oauth sareng klien.',
];
