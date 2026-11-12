<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone orane katrangan administrator.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Akses investor diwatesi.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Waca rincian profil pangguna.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Waca nomer telpon.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Waca lan nganyari alamat sing disimpen.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Nganyari profil pangguna.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Panggonan pesenan.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Deleng riwayat pesenan.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Ngakses kertu hadiah.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Sunting artikel.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Ngatur kabar.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Ndeleng dhaptar toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Sunting rincian toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Tambah toko anyar.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Mbusak toko.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Ngatur tiket dhukungan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Ngatur kertu hadiah.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Ndeleng kertu hadiah.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Ngatur FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Ndeleng FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Ngatur kategori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Deleng kategori.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Ngatur produk.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Ndeleng produk.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ndeleng laporan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Ngatur akun keuangan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Deleng akun finansial.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Sunting kaca toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Deleng kaca toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Ngatur gudhang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ndeleng gudang.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Ngatur akses Staff.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Ndeleng akses Staff.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Ndeleng pesenan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Ngatur pesenan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Ngatur profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Ndeleng profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Ngatur kode diskon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Ndeleng kode diskon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Ngatur kupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Ndeleng kupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Ngatur tawaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Ndeleng tawaran.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Ngatur cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Ndeleng cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Ngatur lotre.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Ndeleng lotre.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Ngatur komunitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Ndeleng komunitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Ngatur pelanggan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Ndeleng pelanggan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Ngatur langganan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Ndeleng langganan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Ndeleng pesenan vendor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Ngatur pesenan vendor lan pembayaran.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Ngatur panyedhiya nyambung.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Ndeleng panyedhiya nyambung.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Nglakokake printah AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Deleng informasi AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Ngatur pembayaran vendor.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Ndeleng pembayaran vendor.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Ndeleng profil bisnis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Ngatur profil bisnis.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Deleng informasi agensi.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Ngatur informasi agensi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Deleng cathetan toko.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Ngatur cathetan toko.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Deleng aset pangembang.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Ngatur aset pangembang.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Ngakses informasi pribadhi lan setelan akun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Ngatur dompet lan transaksi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Deleng transaksi dompet.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Deleng token lan klien OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Ngatur token lan klien OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Ngatur setelan keamanan.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Ngatur afiliasi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Ndeleng afiliasi.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Ngatur cithakan cetak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Deleng cithakan cetak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Ngatur review.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Ndeleng reviews.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Deleng informasi monetisasi.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Ngatur informasi monetisasi.',



    'profile' => 'Waca informasi profil kalebu jeneng, alamat email, gambar lan status otentikasi.',
    'phone' => 'Akses nomer kontak',
    'address' => 'Waca lan owahi alamat saka buku alamat sing disimpen',
    'buy' => 'Order & Order Toko.',
    'order-history' => 'Maca riwayat pesenan.',
    'my-gift-cards' => 'Akses menyang giftcards.',
    'articles' => 'Sunting Artikel.',
    'notifications' => 'Ngirim lan nampa kabar.',
    'read-shops' => 'Waca Daftar Toko.',
    'shop-edit' => 'Akses panyuntingan toko.',
    'shop-contacts' => 'Nampa lan ngowahi formulir kontak.',
    'shop-gift-cards' => 'Nggawe, Ngedit, lan Ngatur Kartu.',
    'shop-faqs' => 'Gawe, sunting, lan atur pitakonan sing kerep ditakoni.',
    'shop-categories' => 'Nggawe, Ngedit, lan Ngatur Kategori.',
    'backoffice-write-products' => 'Wewenang nggawe, nyunting, lan ngatur produk ing kantor mburi.',
    'backoffice-read-products' => 'Akses wewenang kanggo ndeleng dhaptar produk lan informasi produk rinci ing kantor mburi.',
    'shop-read-reports' => 'Maca informasi lan laporan.',
    'shop-socials' => 'Sunting jaringan sosial toko.',
    'shop-accounts' => 'Ngowahi lan mbusak akun finansial sing gegandhengan karo toko.',
    'shop-menus' => 'Sunting menu toko.',
    'shop-pages' => 'Sunting kaca toko.',
    'shop-warehouse' => 'Sunting Gudang Gudang',
    'shop-permissions' => 'Deleng lan sunting akses toko.',
    'shop-process-center' => 'Ngatur pesenan sing ditampa.',
    'shop-profile' => 'Ngatur profil toko.',
    'shop-discount-code' => 'Ngatur kode diskon.',
    'shop-coupon' => 'Ngatur kupon.',
    'shop-offer' => 'Ngatur tawaran.',
    'shop-cashback' => 'Ngatur cashbacks.',
    'shop-lottery' => 'Ngatur lotre.',
    'shop-community' => 'Ngatur komunitas.',
    'shop-customers' => 'Ngatur pelanggan.',
    'shop-ribbon' => 'Ngatur langganan Pita.',
    'community-read' => 'Waca komunitas Selldone.',
    'community-write' => 'Tulis komunitas seldone.',
    'profile-write' => 'Tulis informasi profil pangguna.',
    'vendor-read' => 'Akses menyang tumindak pemenuhan pesenan vendor.',
    'vendor-write' => 'Ngganti pesenan, pembayaran lan informasi liyane saka vendor.',
    'connect-providers' => 'Tambah, maca lan nulis nyambungake panyedhiya.',
    'personal-identification' => 'Waca informasi pribadhi, akses, lan konfigurasi akun.',
    'accounts' => 'Akses menyang dompet, maca transaksi lan riwayat top-up.',
    'shop-add' => 'Tambah toko anyar.',
    'shop-delete' => 'Mbusak toko.',
    'shop-ai-write' => 'Ngidini pangguna nindakake printah AI.',
    'shop-ai-read' => 'Ngidini pangguna ngakses informasi AI tanpa nglakokake perintah.',
    'vendor-payment' => 'Ngidini pangguna nambah cathetan pembayaran kanggo vendor utawa transfer dana liwat akun sing disambungake kaya Stripe Connect.',
    'company-read' => 'Ngidini maca informasi profil bisnis.',
    'company-write' => 'Ngidini maca lan nulis informasi profil bisnis.',
    'agency-read' => 'Ngidini maca informasi agensi.',
    'agency-write' => 'Ngidini maca lan nulis informasi agensi.',
    'note-read' => 'Ngidini maca cathetan toko.',
    'note-write' => 'Ngidini maca lan nulis cathetan toko.',
    'developer-read' => 'Ngidini maca aset pangembang.',
    'developer-write' => 'Ngidini maca lan nulis aset pangembang.',
    'tokens-read' => 'Waca token lan klien Oauth.',
    'tokens-write' => 'Tulis token lan klien Oauth.',
];
