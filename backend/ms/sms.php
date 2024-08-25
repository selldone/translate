<?php 

 return [
     "shop-order-payment" => [
     "title" => "Terima bayaran",
     "sample" => "Bayaran 267$ anda berjaya diselesaikan.<br> Pesanan: SM-425<br> Terima kasih, <b>nama kedai anda</b> .<br> Seldone",
     "body" => "Bayaran :param2 anda berjaya dijelaskan. Pesanan: :param1 Terima kasih, :param3. Seldone",
     "description" => "Hantar mesej kepada pelanggan kedai untuk memaklumkan tentang pembayaran yang berjaya.",
],
     "shop-order-payment-admin" => [
     "title" => "Terima bayaran",
     "sample" => "Bayaran 267$ baharu berjaya diselesaikan.<br> Pesanan: SM-425<br> Terima kasih, <b>nama kedai anda</b> .<br> Seldone",
     "body" => "Bayaran baru :param2 berjaya diselesaikan. Pesanan: :param1 Terima kasih, :param3. Seldone",
     "description" => "Hantar mesej kepada pemilik kedai untuk memaklumkan mereka tentang pembayaran yang berjaya.",
],
     "vendor-new-order" => [
     "title" => "Pesanan Baharu Vendor",
     "sample" => "Anda menerima pesanan $200 baharu.<br> Pesanan: SM-870 dari <b>nama Vendor</b> .",
     "body" => "Anda menerima pesanan :param2 baharu. Pesanan: :param1 untuk :param3.",
     "description" => "Hantar mesej kepada vendor untuk memaklumkan mereka tentang pesanan baharu.",
],
     "shop-login" => [
     "title" => "Log masuk kod pengesahan",
     "sample" => "Kod log masuk anda ialah: <b>123456</b><br> <b>Nama kedai anda</b><br> Seldone",
     "body" => "Kod log masuk anda ialah: :param1 :param2 Selldone",
     "description" => "Hantar kod log masuk kepada pelanggan untuk log masuk ke kedai.",
],
     "user-login" => [
     "title" => "Mesej Kejayaan Log Masuk",
     "sample" => "<b>Nama</b> yang dihormati,<br> Anda telah log masuk ke akaun anda melalui <b>iPhone 165.250.300.1</b> pada <b>5/8/2021 9:14AM</b> .<br> Seldone",
     "body" => "Yang dihormati :param1, Anda telah log masuk ke akaun anda oleh :param2 di :param3. Seldone",
     "description" => "Hantar mesej selepas pelanggan log masuk ke kedai.",
],
     "avocado-order-submit" => [
     "title" => "Pesanan baharu alpukat diserahkan hantar kepada pembeli",
     "sample" => "<b>Nama kedai anda</b><br> Sayang <b>nama-Mu</b> ,<br> Kami telah menerima pesanan anda dan kami sedang menyemaknya.<br> # Pesanan: <b>AVO-246</b><br> Seldone",
     "body" => ":param3 Dear :param1, Kami telah menerima pesanan anda dan kami sedang menyemaknya. Pesanan #: :param2 Selldone",
     "description" => "Hantar mesej kepada pelanggan selepas membuat pesanan Avocado.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado terima pesanan baru hantar kepada penjual",
     "sample" => "Anda menerima pesanan alpukat:<br> Kedai: <b>Nama kedai anda</b><br> Pembeli: <b>Nama pembeli</b><br> Pesanan: <b>AVO-246</b><br> Seldone",
     "body" => "Anda menerima pesanan alpukat: Kedai: :param1 Pembeli: :param2 Pesanan: :param3 Selldone",
     "description" => "Hantar mesej kepada pemilik kedai untuk memaklumkan mereka tentang menerima pesanan Avocado baharu.",
],
     "avocado-ready-to-pay" => [
     "title" => "Tempahan alpukat sedia bayar",
     "sample" => "<b>Nama kedai anda</b><br> Pesanan anda telah disahkan dan boleh dibayar melalui pautan berikut.<br> # Pesanan: <b>AVO-246</b><br> Pautan: <b>https://your-domain/avocado</b><br> Seldone",
     "body" => ":param3 Pesanan anda telah disahkan dan boleh dibayar melalui pautan berikut. Pesanan #: :param2 Pautan: :param1 Selldone",
     "description" => "Hantar mesej dengan pautan pembayaran kepada pelanggan selepas penjual menetapkan kos dan sahkan pesanan Avocado mereka.",
],
];