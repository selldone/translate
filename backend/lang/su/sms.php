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
        'title' => 'Narima pamayaran',
        'sample' => "Pamayaran \$ 267 anjeun parantos réngsé.<br> Urutan: SM-425<br> Hatur nuhun, <b>nami toko anjeun</b> .<br> Selldone",
        'body' => "Pangmayaran :param2 anjeun parantos suksés.\nUrutan: :param1\nHatur nuhun, :param3.\nSelldone",
        'icon' => 'pamayaran',
        'description' => 'Kirim pesen ka palanggan toko pikeun nginpokeun ngeunaan pamayaran anu suksés.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Narima pamayaran',
        'sample' => "pamayaran 267\$ anyar hasil dilunasan.<br> Urutan: SM-425<br> Hatur nuhun, <b>nami toko anjeun</b> .<br> Selldone",
        'body' => "pamayaran :param2 anyar ieu netep junun.\nUrutan: :param1\nHatur nuhun, :param3.\nSelldone",
        'icon' => 'pamayaran',
        'description' => 'Kirim pesen ka anu gaduh toko pikeun nginpokeun aranjeunna ngeunaan pamayaran anu suksés.',

    ],

    'vendor-new-order' => [
        'title' => 'Vendor Orde Baru',
        'sample' => "Anjeun nampi pesenan \$200 anyar.<br>Order: <b>SM-870</b> pikeun <b>Ngaran vendor</b>.<br>✅ Produk A| SKU100001 |1x<br>✅ Produk B| SKU100002 |1x",
        'body' => "Anjeun nampi pesenan :param2 anyar.\nUrutan: :param1 pikeun :param3.\n:param4",
        'icon' => 'etalase',
        'description' => 'Kirim pesen ka anu ngajual pikeun nginpokeun aranjeunna ngeunaan pesenan énggal.',
    ],








    'shop-login' => [
        'title' => 'Kodeu verifikasi login',
        'sample' => "Kode login anjeun nyaéta: <b>123456</b><br> <b>Ngaran toko Anjeun</b><br> Selldone",
        'body' => "Kode login anjeun: :param1\n:param2\nSelldone",
        'icon' => 'asup',
        'description' => 'Kirim kode login ka nasabah pikeun asup ka toko.',

    ],

    'user-login' => [
        'title' => 'Pesen Kasuksesan Login',
        'sample' => "<b>Ngaran</b> Dear,<br> Anjeun parantos lebet kana akun anjeun ku <b>iPhone 165.250.300.1</b> di <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Dear :param1,\nAnjeun parantos lebet kana akun anjeun ku :param2 di :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Kirim pesen saatos palanggan login ka toko.',

    ],

    'avocado-order-submit' => [
        'title' => 'Alpukat pesenan anyar dikintunkeun kirimkeun ka nu meuli',
        'sample' => "<b>Ngaran toko Anjeun</b><br> Dear <b>ngaran anjeun</b> ,<br> Kami parantos nampi pesenan anjeun sareng kami pariksa deui.<br> Urutan #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nDear :param1,\nKami parantos nampi pesenan anjeun sareng kami pariksa deui.\nUrutan #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Kirim pesen ka palanggan saatos nempatkeun pesenan Alpukat.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Alpukat nampi pesenan énggal kirimkeun ka anu ngajual',
        'sample' => "Anjeun nampi pesenan alpukat:<br> Toko: <b>Ngaran toko anjeun</b><br> Nu meuli: <b>Ngaran pembeli</b><br> Urutan: <b>AVO-246</b><br> Selldone",
        'body' => "Anjeun nampi pesenan Alpukat:\nToko: :param1\nmeuli: :param2\nUrutan: :param3\nSelldone",
        'icon' => 'kumaha_cara_reg',
        'description' => 'Kirim pesen ka anu gaduh toko pikeun nginpokeun aranjeunna ngeunaan nampi pesenan Alpukat énggal.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'pesenan alpuket siap mayar',
        'sample' => "<b>Ngaran toko anjeun</b><br>Pesanan anjeun parantos dikonfirmasi sareng tiasa dibayar ngalangkungan tautan di handap ieu.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nPesenan anjeun parantos dikonfirmasi sareng tiasa dibayar ngalangkungan tautan ieu.\nUrutan #: :param2\nTumbu: :param1\nSelldone",
        'icon' => 'resi',
        'description' => 'Kirim pesen sareng tautan pamayaran ka nasabah saatos seller nyetél biaya sareng mastikeun pesenan Alpukatna.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Pesanan siap dikirimkeun',
        'sample' => "Hai <b>Alex</b>, warta alus, pesenan anjeun ayeuna siap dikirimkeun.<br>Order: <b>SM-123</b>",
        'body' => "Hai :param4, warta alus, pesenan anjeun ayeuna siap dikirim.\nUrutan: :param1",
        'icon' => 'local_shipping',
        'description' => 'Kirim pesen ka palanggan pikeun nginpokeun yén pesenanna siap dikirimkeun.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pesanan siap dijemput',
        'sample' => "Hai Alex, warta alus, pesenan anjeun ayeuna siap dijemput.<br>Order: <b>SM-123</b>",
        'body' => "Hai :param4, warta alus, pesenan anjeun ayeuna siap dijemput.\nUrutan: :param1",
        'icon' => 'share_location',
        'description' => 'Kirim pesen ka palanggan pikeun nginpokeun yén pesenanna siap dijemput.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pesenan vendor siap dikirimkeun',
        'sample' => "Hai <b>Alex</b>, warta alus, pesenan anjeun ayeuna siap dikirimkeun.<br>Order: <b>SM-123</b>",
        'body' => "Hai :param4, warta alus, pesenan anjeun ayeuna siap dikirim.\nUrutan: :param1",
        'icon' => 'local_shipping',
        'description' => 'Kirim pesen ka palanggan pikeun nginpokeun yén pesenanna siap dikirimkeun. Ngan di pasar sareng Mode Pengiriman Langsung sareng jinis pangiriman sanés Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pesenan vendor siap dijemput',
        'sample' => "Hai Alex, warta alus, pesenan anjeun ayeuna siap dijemput.<br>Order: <b>SM-123</b>",
        'body' => "Hai :param4, warta alus, pesenan anjeun ayeuna siap dijemput.\nUrutan: :param1",
        'icon' => 'share_location',
        'description' => 'Kirim pesen ka palanggan pikeun nginpokeun yén pesenanna siap dijemput. Ngan di pasar sareng Mode Pengiriman Langsung sareng jinis pangiriman nyaéta Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Konfirmasi Item Order',
        'sample' => "Halo Alex, kami parantos marios pesenan anjeun. Ieu mangrupikeun status konfirmasi pikeun barang anjeun: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, kami geus reviewed urutan Anjeun. Ieu status konfirmasi pikeun barang anjeun:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Ngabéjaan palanggan ngeunaan barang-barang dina pesenan anu parantos ditampi atanapi ditolak ku anu ngajual.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Konfirmasi Item Pesenan Vendor',
        'sample' => "Halo Alex, kami parantos marios pesenan anjeun. Ieu mangrupikeun status konfirmasi pikeun barang anjeun: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, kami geus reviewed urutan Anjeun. Ieu status konfirmasi pikeun barang anjeun:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Ngabéjaan palanggan ngeunaan barang-barang dina pesenan anu parantos ditampi atanapi ditolak ku anu ngajual.',
    ],



];
