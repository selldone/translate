<?php 

 return [
     "shop-order-payment" => [
     "title" => "Nampa pembayaran",
     "sample" => "Pembayaran $267 sampeyan kasil dirampungake.<br> Urutan: SM-425<br> Matur nuwun, <b>jeneng toko sampeyan</b> .<br> Seldone",
     "body" => "Pembayaran sampeyan :param2 kasil dilunasi. Order: :param1 Matur nuwun, :param3. Seldone",
     "description" => "Kirim pesen menyang pelanggan toko kanggo ngandhani babagan pembayaran sing sukses.",
],
     "shop-order-payment-admin" => [
     "title" => "Nampa pembayaran",
     "sample" => "Pembayaran anyar 267$ kasil dirampungake.<br> Urutan: SM-425<br> Matur nuwun, <b>jeneng toko sampeyan</b> .<br> Seldone",
     "body" => "Anyar :pembayaran param2 kasil dilunasi. Order: :param1 Matur nuwun, :param3. Seldone",
     "description" => "Kirimi pesen menyang pemilik toko kanggo ngandhani babagan pembayaran sing sukses.",
],
     "vendor-new-order" => [
     "title" => "Vendor Orde Anyar",
     "sample" => "Sampeyan nampa pesenan $200 anyar.<br> Pesenan: SM-870 saka <b>jeneng Vendor</b> .",
     "body" => "Sampeyan nampa pesenan anyar :param2. Urutan::param1 kanggo:param3.",
     "description" => "Kirimi pesen menyang vendor kanggo ngandhani babagan pesenan anyar.",
],
     "shop-login" => [
     "title" => "Kode verifikasi login",
     "sample" => "Kode login sampeyan: <b>123456</b><br> <b>Jeneng toko sampeyan</b><br> Seldone",
     "body" => "Kode mlebu sampeyan yaiku:: param1: param2 Selldone",
     "description" => "Kirim kode login menyang pelanggan kanggo mlebu menyang toko.",
],
     "user-login" => [
     "title" => "Pesen Sukses Login",
     "sample" => "Dear <b>Jeneng</b> ,<br> Sampeyan wis mlebu menyang akun kanthi <b>iPhone 165.250.300.1</b> ing <b>5/8/2021 9:14AM</b> .<br> Seldone",
     "body" => "Dear :param1, Sampeyan wis mlebu menyang akun dening:param2 ing:param3. Seldone",
     "description" => "Kirim pesen sawise pelanggan mlebu menyang toko.",
],
     "avocado-order-submit" => [
     "title" => "Avocado pesenan anyar dikirim menyang panuku",
     "sample" => "<b>Jeneng toko sampeyan</b><br> Dear <b>jenengmu</b> ,<br> Kita wis nampa pesenan sampeyan lan kita mriksa.<br> Urutan #: <b>AVO-246</b><br> Seldone",
     "body" => ":param3 Dear :param1, Wes tampa pesenan lan lagi dideleng. Urutan #: :param2 Selldone",
     "description" => "Kirim pesen menyang pelanggan sawise nggawe pesenan Avocado.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado nampa pesenan anyar dikirim menyang bakul",
     "sample" => "Sampeyan nampa pesenan alpukat:<br> Toko: <b>Jeneng toko sampeyan</b><br> Pembeli: <b>Jeneng panuku</b><br> Pesenan: <b>AVO-246</b><br> Seldone",
     "body" => "Sampeyan nampa pesenan alpukat: Toko: :param1 Pembeli: :param2 Pesenan: :param3 Seldone",
     "description" => "Kirimi pesen menyang pemilik toko kanggo menehi informasi babagan nampa pesenan Avocado anyar.",
],
     "avocado-ready-to-pay" => [
     "title" => "Pesenan alpukat siap bayar",
     "sample" => "<b>Jeneng toko sampeyan</b><br> Pesenan sampeyan wis dikonfirmasi lan bisa dibayar liwat link ing ngisor iki.<br> Urutan #: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Seldone",
     "body" => ":param3 Pesenan sampeyan wis dikonfirmasi lan bisa dibayar liwat link ing ngisor iki. Order #: :param2 Link: :param1 Selldone",
     "description" => "Kirimi pesen kanthi link pembayaran menyang pelanggan sawise bakul nyetel biaya lan konfirmasi pesenan Avocado.",
],
];