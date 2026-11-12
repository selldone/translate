<?php

/*
|--------------------------------------------------------------------------
| Shop SMS list
|--------------------------------------------------------------------------
| This array return to shop admin to see SMS preview!
|
*/

return [

    'shop-order-payment' => [
        'title' => 'Terima pembayaran',
        'sample' => "Pembayaran \$267 Anda berhasil diselesaikan.<br>Pesanan: SM-425<br>Terima kasih, <b>Nama toko Anda</b>.<br>Selldone",
        'body' => "Pembayaran :param2 Anda berhasil diselesaikan.\nPesanan: :param1\nTerima kasih, :param3.\nSelldone",
        'icon' => 'pembayaran',
        'description' => 'Kirim pesan ke pelanggan toko untuk menginformasikan tentang pembayaran yang berhasil.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Terima pembayaran',
        'sample' => "Pembayaran baru sebesar \$267 berhasil diselesaikan.<br>Pesanan: SM-425<br>Terima kasih, <b>Nama toko Anda</b>.<br>Selldone",
        'body' => "Pembayaran :param2 baru berhasil diselesaikan.\nPesanan: :param1\nTerima kasih, :param3.\nSelldone",
        'icon' => 'pembayaran',
        'description' => 'Kirim pesan ke pemilik toko untuk memberi tahu mereka tentang pembayaran yang berhasil.',

    ],

    'vendor-new-order' => [
        'title' => 'Vendor Pesanan Baru',
        'sample' => "Anda menerima pesanan baru senilai \$200.<br>Pesanan: <b>SM-870</b> untuk <b>Nama vendor</b>.<br>✅ Produk A| SKU100001 |1x<br>✅ Produk B| SKU100002 |1x",
        'body' => "Anda menerima pesanan :param2 baru.\nPesanan: :param1 untuk :param3.\n:param4",
        'icon' => 'etalase',
        'description' => 'Kirim pesan ke vendor untuk memberi tahu mereka tentang pesanan baru.',
    ],








    'shop-login' => [
        'title' => 'Kode verifikasi masuk',
        'sample' => "Kode login Anda adalah: <b>123456</b><br><b>Nama toko Anda</b><br>Selldone",
        'body' => "Kode login Anda adalah: :param1\n:param2\nSelldone",
        'icon' => 'masuk',
        'description' => 'Kirim kode login ke pelanggan untuk masuk ke toko.',

    ],

    'user-login' => [
        'title' => 'Pesan Sukses Masuk',
        'sample' => "<b>Nama</b>,<br>Anda telah masuk ke akun Anda dengan <b>iPhone 165.250.300.1</b> di <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => ":param1 yang terhormat,\nAnda telah masuk ke akun Anda dengan :param2 di :param3.\nSelldone",
        'icon' => 'sistem_keamanan_pembaruan_baik',
        'description' => 'Kirim pesan setelah pelanggan masuk ke toko.',

    ],

    'avocado-order-submit' => [
        'title' => 'Alpukat pesanan baru dikirim kirim ke pembeli',
        'sample' => "<b>Nama toko Anda</b><br>Dear <b>Nama Anda</b>,<br>Kami telah menerima pesanan Anda dan kami sedang meninjaunya.<br>Pesanan #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\n:param1 yang terhormat,\nKami telah menerima pesanan Anda dan sedang meninjaunya.\nPesanan #: :param2\nSelldone",
        'icon' => 'fakta_periksa',
        'description' => 'Kirim pesan kepada pelanggan setelah memesan Alpukat.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Alpukat menerima pesanan baru kirim ke penjual',
        'sample' => "Anda menerima pesanan Alpukat:<br>Toko: <b>Nama toko Anda</b><br>Pembeli: <b>Nama pembeli</b><br>Pesanan: <b>AVO-246</b><br>Selldone",
        'body' => "Anda menerima pesanan Alpukat:\nToko: :param1\nPembeli: :param2\nPesanan: :param3\nSelldone",
        'icon' => 'bagaimana_untuk_reg',
        'description' => 'Kirim pesan ke pemilik toko untuk memberi tahu mereka tentang penerimaan pesanan Alpukat baru.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Pesan alpukat siap bayar',
        'sample' => "<b>Nama toko Anda</b><br>Pesanan Anda telah dikonfirmasi dan dapat dibayar melalui link berikut.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nPesanan Anda telah dikonfirmasi dan dapat dibayar melalui link berikut.\nPesanan #: :param2\nTautan: :param1\nSelldone",
        'icon' => 'tanda terima',
        'description' => 'Kirim pesan berisi tautan pembayaran kepada pelanggan setelah penjual menetapkan biaya dan mengonfirmasi pesanan Alpukat mereka.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Pesanan siap dikirim',
        'sample' => "Hai <b>Alex</b>, kabar baik, pesanan Anda sekarang siap dikirim.<br>Pesanan: <b>SM-123</b>",
        'body' => "Hai :param4, kabar baik, pesanan Anda sekarang siap dikirim.\nPesanan: :param1",
        'icon' => 'pengiriman_lokal',
        'description' => 'Kirim pesan ke pelanggan untuk memberi tahu mereka bahwa pesanan mereka siap dikirim.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pesanan siap diambil',
        'sample' => "Hai Alex, kabar baik, pesanan Anda sekarang siap diambil.<br>Pesanan: <b>SM-123</b>",
        'body' => "Hai :param4, kabar baik, pesanan Anda sekarang siap diambil.\nPesanan: :param1",
        'icon' => 'bagikan_lokasi',
        'description' => 'Kirim pesan ke pelanggan untuk memberitahukan bahwa pesanannya siap diambil.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pesanan vendor siap dikirim',
        'sample' => "Hai <b>Alex</b>, kabar baik, pesanan Anda sekarang siap dikirim.<br>Pesanan: <b>SM-123</b>",
        'body' => "Hai :param4, kabar baik, pesanan Anda sekarang siap dikirim.\nPesanan: :param1",
        'icon' => 'pengiriman_lokal',
        'description' => 'Kirim pesan ke pelanggan untuk memberi tahu mereka bahwa pesanan mereka siap dikirim. Hanya di marketplace dengan Mode Pengiriman Langsung dan jenis pengiriman bukan Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pesanan vendor siap diambil',
        'sample' => "Hai Alex, kabar baik, pesanan Anda sekarang siap diambil.<br>Pesanan: <b>SM-123</b>",
        'body' => "Hai :param4, kabar baik, pesanan Anda sekarang siap diambil.\nPesanan: :param1",
        'icon' => 'bagikan_lokasi',
        'description' => 'Kirim pesan ke pelanggan untuk memberitahukan bahwa pesanannya siap diambil. Hanya di marketplace dengan Mode Pengiriman Langsung dan jenis pengirimannya adalah Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Konfirmasi Barang Pesanan',
        'sample' => "Halo Alex, kami telah meninjau pesanan Anda. Berikut status konfirmasi item Anda:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Halo :param4, kami telah meninjau pesanan Anda. Berikut status konfirmasi item Anda:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'tugas_dimasukkan_masuk',
        'description' => 'Memberi tahu pelanggan tentang barang dalam pesanannya yang telah diterima atau ditolak oleh penjual.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Konfirmasi Barang Pesanan Vendor',
        'sample' => "Halo Alex, kami telah meninjau pesanan Anda. Berikut status konfirmasi item Anda:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Halo :param4, kami telah meninjau pesanan Anda. Berikut status konfirmasi item Anda:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'tugas_dimasukkan_masuk',
        'description' => 'Memberi tahu pelanggan tentang barang pesanan mereka yang telah diterima atau ditolak oleh vendor.',
    ],



];
