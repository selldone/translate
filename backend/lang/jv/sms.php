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
        'title' => 'Nampa pembayaran',
        'sample' => "Pembayaran \$267 sampeyan kasil dirampungake.<br> Urutan: SM-425<br> Matur nuwun, <b>jeneng toko sampeyan</b> .<br> Selldone",
        'body' => "Pembayaran :param2 sampeyan kasil dirampungake.\nPesenan: :param1\nMatur nuwun, :param3.\nSelldone",
        'icon' => 'pambayaran',
        'description' => 'Kirim pesen menyang pelanggan toko kanggo ngandhani babagan pembayaran sing sukses.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Nampa pembayaran',
        'sample' => "Pembayaran anyar 267\$ kasil dirampungake.<br> Urutan: SM-425<br> Matur nuwun, <b>jeneng toko sampeyan</b> .<br> Selldone",
        'body' => "Pembayaran :param2 anyar ditindakake kanthi sukses.\nPesenan: :param1\nMatur nuwun, :param3.\nSelldone",
        'icon' => 'pambayaran',
        'description' => 'Kirimi pesen menyang pemilik toko kanggo ngandhani babagan pembayaran sing sukses.',

    ],

    'vendor-new-order' => [
        'title' => 'Vendor Orde Anyar',
        'sample' => "Sampeyan nampa pesenan \$200 anyar.<br>Pesanan: <b>SM-870</b> kanggo <b>Jeneng vendor</b>.<br>✅ Produk A| SKU100001 |1x<br>✅ Produk B| SKU100002 |1x",
        'body' => "Sampeyan nampa pesenan :param2 anyar.\nUrutan: :param1 kanggo :param3.\n:param4",
        'icon' => 'toko',
        'description' => 'Kirimi pesen menyang vendor kanggo ngandhani babagan pesenan anyar.',
    ],








    'shop-login' => [
        'title' => 'Kode verifikasi login',
        'sample' => "Kode login sampeyan: <b>123456</b><br> <b>Jeneng toko sampeyan</b><br> Selldone",
        'body' => "Kode login sampeyan: :param1\n:param2\nSelldone",
        'icon' => 'mlebu',
        'description' => 'Kirim kode login menyang pelanggan kanggo mlebu menyang toko.',

    ],

    'user-login' => [
        'title' => 'Pesen Sukses Login',
        'sample' => "Dear <b>Jeneng</b> ,<br> Sampeyan wis mlebu menyang akun kanthi <b>iPhone 165.250.300.1</b> ing <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Dear :param1,\nSampeyan wis mlebu menyang akun dening :param2 ing :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Kirim pesen sawise pelanggan mlebu menyang toko.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado pesenan anyar dikirim menyang panuku',
        'sample' => "<b>Jeneng toko sampeyan</b><br> Dear <b>jenengmu</b> ,<br> Kita wis nampa pesenan sampeyan lan kita mriksa.<br> Urutan #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nDear :param1,\nKita wis nampa pesenan sampeyan lan kita mriksa.\nUrutan #: :param2\nSelldone",
        'icon' => 'mriksa_fakta',
        'description' => 'Kirim pesen menyang pelanggan sawise nggawe pesenan Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado nampa pesenan anyar dikirim menyang bakul',
        'sample' => "Sampeyan nampa pesenan alpukat:<br> Toko: <b>Jeneng toko sampeyan</b><br> Pembeli: <b>Jeneng panuku</b><br> Pesenan: <b>AVO-246</b><br> Selldone",
        'body' => "Sampeyan nampa pesenan Avocado:\nToko: :param1\nPanuku: :param2\nUrutan: :param3\nSelldone",
        'icon' => 'carane_reg',
        'description' => 'Kirimi pesen menyang pemilik toko kanggo menehi informasi babagan nampa pesenan Avocado anyar.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Pesenan alpukat siap bayar',
        'sample' => "<b>Jeneng toko sampeyan</b><br> Pesenan sampeyan wis dikonfirmasi lan bisa dibayar liwat link ing ngisor iki.<br> Urutan #: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nPesenan sampeyan wis dikonfirmasi lan bisa dibayar liwat link ing ngisor iki.\nUrutan #: :param2\nPranala: :param1\nSelldone",
        'icon' => 'resi',
        'description' => 'Kirimi pesen kanthi link pembayaran menyang pelanggan sawise bakul nyetel biaya lan konfirmasi pesenan Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Order siap dikirim',
        'sample' => "Hai <b>Alex</b>, kabar apik, pesenan sampeyan saiki wis siyap dikirim.<br>Pesenan: <b>SM-123</b>",
        'body' => "Hai :param4, kabar apik, pesenan sampeyan saiki wis siyap dikirim.\nPesenan: :param1",
        'icon' => 'local_shipping',
        'description' => 'Kirim pesen menyang pelanggan kanggo ngandhani yen pesenan wis siyap dikirim.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pesanan siap dijemput',
        'sample' => "Halo Alex, kabar apik, pesenan sampeyan saiki wis siyap dijupuk.<br>Pesanan: <b>SM-123</b>",
        'body' => "Halo :param4, kabar apik, pesenan sampeyan saiki wis siyap dijupuk.\nPesenan: :param1",
        'icon' => 'nuduhake_lokasi',
        'description' => 'Kirimi pesen menyang pelanggan kanggo ngandhani yen pesenan wis siyap dijupuk.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pesenan vendor siap dikirim',
        'sample' => "Hai <b>Alex</b>, kabar apik, pesenan sampeyan saiki wis siyap dikirim.<br>Pesenan: <b>SM-123</b>",
        'body' => "Hai :param4, kabar apik, pesenan sampeyan saiki wis siyap dikirim.\nPesenan: :param1",
        'icon' => 'local_shipping',
        'description' => 'Kirim pesen menyang pelanggan kanggo ngandhani yen pesenan wis siyap dikirim. Mung ing pasar kanthi Mode Pengiriman Langsung lan jinis pangiriman ora Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pesenan vendor siap dijemput',
        'sample' => "Halo Alex, kabar apik, pesenan sampeyan saiki wis siyap dijupuk.<br>Pesanan: <b>SM-123</b>",
        'body' => "Halo :param4, kabar apik, pesenan sampeyan saiki wis siyap dijupuk.\nPesenan: :param1",
        'icon' => 'nuduhake_lokasi',
        'description' => 'Kirimi pesen menyang pelanggan kanggo ngandhani yen pesenan wis siyap dijupuk. Mung ing pasar kanthi Mode Pengiriman Langsung lan jinis pangiriman yaiku Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Konfirmasi Pesanan Barang',
        'sample' => "Halo Alex, kita wis mriksa pesenan sampeyan. Punika status konfirmasi kanggo item sampeyan:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, kita wis mriksa pesenan sampeyan. Punika status konfirmasi kanggo item sampeyan:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Ngabari pelanggan babagan barang ing pesenan sing wis ditampa utawa ditolak dening bakul.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Konfirmasi Barang Pesenan Vendor',
        'sample' => "Halo Alex, kita wis mriksa pesenan sampeyan. Punika status konfirmasi kanggo item sampeyan:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, kita wis mriksa pesenan sampeyan. Punika status konfirmasi kanggo item sampeyan:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Ngabari pelanggan babagan item ing pesenan sing wis ditampa utawa ditolak dening vendor.',
    ],



];
