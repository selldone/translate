<?php 

 return [
     "shop-order-payment" => [
     "title" => "Chấp nhận thanh toán",
     "sample" => "Khoản thanh toán 267 đô la của bạn đã được giải quyết thành công.<br> Đặt hàng: SM-425<br> Cảm ơn, <b>Tên cửa hàng của bạn</b> .<br> Selldone",
     "body" => "Của bạn: khoản thanh toán param2 đã được giải quyết thành công. Thứ tự:: param1 Cảm ơn,: param3. Selldone",
     "description" => "Gửi tin nhắn cho khách hàng để thông báo về việc thanh toán thành công.",
],
     "shop-order-payment-admin" => [
     "title" => "Chấp nhận thanh toán",
     "sample" => "Khoản thanh toán 267 đô la mới đã được giải quyết thành công.<br> Đặt hàng: SM-425<br> Cảm ơn, <b>Tên cửa hàng của bạn</b> .<br> Selldone",
     "body" => "Mới: thanh toán param2 tất toán thành công. Thứ tự:: param1 Cảm ơn,: param3. Selldone",
     "description" => "Gửi tin nhắn cho chủ cửa hàng để thông báo về việc thanh toán thành công.",
],
     "vendor-new-order" => [
     "title" => "Nhà cung cấp đơn hàng mới",
     "sample" => "Bạn đã nhận được đơn hàng mới trị giá 200 đô la.<br> Đặt hàng: SM-870 từ <b>Tên nhà cung cấp</b> .",
     "body" => "Bạn đã nhận được lệnh :param2 mới. Lệnh: :param1 cho :param3.",
     "description" => "Gửi tin nhắn cho nhà cung cấp để thông báo về đơn hàng mới.",
],
     "shop-login" => [
     "title" => "Đăng nhập mã xác minh",
     "sample" => "Mã đăng nhập của bạn là: <b>123456</b><br> <b>Tên cửa hàng của bạn</b><br> Selldone",
     "body" => "Mã đăng nhập của bạn là:: param1: param2 Selldone",
     "description" => "Gửi mã đăng nhập cho khách hàng để đăng nhập vào cửa hàng.",
],
     "user-login" => [
     "title" => "Thông báo Đăng nhập Thành công",
     "sample" => "<b>Tên</b> thân mến,<br> Bạn đã đăng nhập vào tài khoản của mình bằng <b>iPhone 165.250.300.1</b> lúc <b>5/8/2021 9:14 sáng</b> .<br> Selldone",
     "body" => "Kính gửi: param1, Bạn đã đăng nhập vào tài khoản của mình bằng: param2 tại: param3. Selldone",
     "description" => "Gửi tin nhắn sau khi khách hàng đăng nhập vào cửa hàng.",
],
     "avocado-order-submit" => [
     "title" => "Đã gửi đơn đặt hàng bơ mới cho người mua",
     "sample" => "<b>Tên cửa hàng của bạn</b><br> Gửi <b>tên của bạn</b> ,<br> Chúng tôi đã nhận được đơn đặt hàng của bạn và chúng tôi đang xem xét nó.<br> Thứ tự #: <b>AVO-246</b><br> Selldone",
     "body" => ": param3 Kính gửi: param1, Chúng tôi đã nhận được đơn đặt hàng của bạn và chúng tôi đang xem xét. Đặt hàng #:: param2 Selldone",
     "description" => "Gửi tin nhắn cho khách hàng sau khi đặt hàng Bơ.",
],
     "avocado-order-submit-seller" => [
     "title" => "Bơ nhận được đơn đặt hàng mới gửi cho người bán",
     "sample" => "Bạn đã nhận được một đơn đặt hàng bơ:<br> Cửa hàng: <b>Tên cửa hàng của bạn</b><br> Người mua: <b>Tên người mua</b><br> Đặt hàng: <b>AVO-246</b><br> Selldone",
     "body" => "Bạn đã nhận được đơn đặt hàng bơ: Cửa hàng:: param1 Người mua:: param2 Đặt hàng:: param3 Selldone",
     "description" => "Gửi tin nhắn cho chủ cửa hàng để thông báo về việc nhận được đơn hàng Bơ mới.",
],
     "avocado-ready-to-pay" => [
     "title" => "Đơn hàng bơ sẵn sàng thanh toán",
     "sample" => "<b>Tên cửa hàng của bạn</b><br> Đơn hàng của bạn đã được xác nhận và có thể thanh toán qua liên kết sau.<br> Thứ tự #: <b>AVO-246</b><br> Liên kết: <b>https: // your-domain / butter</b><br> Selldone",
     "body" => ": param3 Đơn hàng của bạn đã được xác nhận và có thể thanh toán qua liên kết sau. Đặt hàng #:: param2 Liên kết:: param1 Selldone",
     "description" => "Gửi tin nhắn có liên kết thanh toán cho khách hàng sau khi người bán đặt giá và xác nhận đơn hàng Quả bơ của họ.",
],
];