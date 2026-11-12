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
        'title' => 'Terima bayaran',
        'sample' => "Bayaran 267\$ anda berjaya diselesaikan.<br> Pesanan: SM-425<br> Terima kasih, <b>nama kedai anda</b> .<br> Selldone",
        'body' => "Pembayaran :param2 anda telah berjaya diselesaikan.\nPesanan: :param1\nTerima kasih, :param3.\nSelldone",
        'icon' => 'bayaran',
        'description' => 'Hantar mesej kepada pelanggan kedai untuk memaklumkan tentang pembayaran yang berjaya.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Terima bayaran',
        'sample' => "Bayaran 267\$ baharu berjaya diselesaikan.<br> Pesanan: SM-425<br> Terima kasih, <b>nama kedai anda</b> .<br> Selldone",
        'body' => "Pembayaran :param2 baharu telah berjaya diselesaikan.\nPesanan: :param1\nTerima kasih, :param3.\nSelldone",
        'icon' => 'bayaran',
        'description' => 'Hantar mesej kepada pemilik kedai untuk memaklumkan mereka tentang pembayaran yang berjaya.',

    ],

    'vendor-new-order' => [
        'title' => 'Pesanan Baharu Vendor',
        'sample' => "Anda menerima tempahan \$200 baharu.<br>Pesanan: <b>SM-870</b> untuk <b>Nama vendor</b>.<br>✅ Produk A| SKU100001 |1x<br>✅ Produk B| SKU100002 |1x",
        'body' => "Anda menerima pesanan :param2 baharu.\nPesanan: :param1 untuk :param3.\n:param4",
        'icon' => 'etalase',
        'description' => 'Hantar mesej kepada vendor untuk memaklumkan mereka tentang pesanan baharu.',
    ],








    'shop-login' => [
        'title' => 'Log masuk kod pengesahan',
        'sample' => "Kod log masuk anda ialah: <b>123456</b><br> <b>Nama kedai anda</b><br> Selldone",
        'body' => "Kod log masuk anda ialah: :param1\n:param2\nSelldone",
        'icon' => 'log masuk',
        'description' => 'Hantar kod log masuk kepada pelanggan untuk log masuk ke kedai.',

    ],

    'user-login' => [
        'title' => 'Mesej Kejayaan Log Masuk',
        'sample' => "<b>Nama</b> yang dihormati,<br> Anda telah log masuk ke akaun anda melalui <b>iPhone 165.250.300.1</b> pada <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => ":param1 yang dihormati,\nAnda telah log masuk ke akaun anda dengan :param2 di :param3.\nSelldone",
        'icon' => 'kemas kini_sistem_keselamatan_baik',
        'description' => 'Hantar mesej selepas pelanggan log masuk ke kedai.',

    ],

    'avocado-order-submit' => [
        'title' => 'Pesanan baharu alpukat diserahkan hantar kepada pembeli',
        'sample' => "<b>Nama kedai anda</b><br> Sayang <b>nama-Mu</b> ,<br> Kami telah menerima pesanan anda dan kami sedang menyemaknya.<br> # Pesanan: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\n:param1 yang dihormati,\nKami telah menerima pesanan anda dan kami sedang menyemaknya.\n# Pesanan: :param2\nSelldone",
        'icon' => 'semakan_fakta',
        'description' => 'Hantar mesej kepada pelanggan selepas membuat pesanan Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado terima pesanan baru hantar kepada penjual',
        'sample' => "Anda menerima pesanan alpukat:<br> Kedai: <b>Nama kedai anda</b><br> Pembeli: <b>Nama pembeli</b><br> Pesanan: <b>AVO-246</b><br> Selldone",
        'body' => "Anda menerima pesanan Avocado:\nKedai: :param1\nPembeli: :param2\nPesanan: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Hantar mesej kepada pemilik kedai untuk memaklumkan mereka tentang menerima pesanan Avocado baharu.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Tempahan alpukat sedia bayar',
        'sample' => "<b>Nama kedai anda</b><br> Pesanan anda telah disahkan dan boleh dibayar melalui pautan berikut.<br> # Pesanan: <b>AVO-246</b><br> Pautan: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nPesanan anda telah disahkan dan boleh dibayar melalui pautan berikut.\n# Pesanan: :param2\nPautan: :param1\nSelldone",
        'icon' => 'resit',
        'description' => 'Hantar mesej dengan pautan pembayaran kepada pelanggan selepas penjual menetapkan kos dan sahkan pesanan Avocado mereka.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Tempahan sedia untuk dihantar',
        'sample' => "Hai <b>Alex</b>, berita baik, pesanan anda kini sedia untuk dihantar.<br>Pesanan: <b>SM-123</b>",
        'body' => "Hai :param4, berita baik, pesanan anda kini sedia untuk dihantar.\nPesanan: :param1",
        'icon' => 'local_shipping',
        'description' => 'Hantar mesej kepada pelanggan untuk memaklumkan bahawa pesanan mereka sedia untuk dihantar.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Tempahan sedia untuk diambil',
        'sample' => "Hai Alex, berita baik, pesanan anda kini sedia untuk diambil.<br>Pesanan: <b>SM-123</b>",
        'body' => "Hai :param4, berita baik, pesanan anda kini sedia untuk diambil.\nPesanan: :param1",
        'icon' => 'kongsi_lokasi',
        'description' => 'Hantar mesej kepada pelanggan untuk memaklumkan bahawa pesanan mereka sedia untuk diambil.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pesanan vendor sedia untuk dihantar',
        'sample' => "Hai <b>Alex</b>, berita baik, pesanan anda kini sedia untuk dihantar.<br>Pesanan: <b>SM-123</b>",
        'body' => "Hai :param4, berita baik, pesanan anda kini sedia untuk dihantar.\nPesanan: :param1",
        'icon' => 'local_shipping',
        'description' => 'Hantar mesej kepada pelanggan untuk memaklumkan bahawa pesanan mereka sedia untuk dihantar. Hanya di pasaran dengan Mod Penghantaran Terus dan jenis penghantaran bukan Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pesanan vendor sedia untuk diambil',
        'sample' => "Hai Alex, berita baik, pesanan anda kini sedia untuk diambil.<br>Pesanan: <b>SM-123</b>",
        'body' => "Hai :param4, berita baik, pesanan anda kini sedia untuk diambil.\nPesanan: :param1",
        'icon' => 'kongsi_lokasi',
        'description' => 'Hantar mesej kepada pelanggan untuk memaklumkan bahawa pesanan mereka sedia untuk diambil. Hanya di pasaran dengan Mod Penghantaran Terus dan jenis penghantaran ialah Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Pengesahan Item Pesanan',
        'sample' => "Hello Alex, kami telah menyemak pesanan anda. Berikut ialah status pengesahan untuk item anda:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, kami telah menyemak pesanan anda. Berikut ialah status pengesahan untuk item anda:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'tugasan_serah_masuk',
        'description' => 'Memberitahu pelanggan tentang item dalam pesanan mereka yang telah diterima atau ditolak oleh penjual.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Pengesahan Item Pesanan Vendor',
        'sample' => "Hello Alex, kami telah menyemak pesanan anda. Berikut ialah status pengesahan untuk item anda:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, kami telah menyemak pesanan anda. Berikut ialah status pengesahan untuk item anda:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'tugasan_serah_masuk',
        'description' => 'Memberitahu pelanggan tentang item dalam pesanan mereka yang telah diterima atau ditolak oleh vendor.',
    ],



];
