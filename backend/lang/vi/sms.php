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
        'title' => 'Chấp nhận thanh toán',
        'sample' => "Khoản thanh toán 267 đô la của bạn đã được giải quyết thành công.<br> Đặt hàng: SM-425<br> Cảm ơn, <b>Tên cửa hàng của bạn</b> .<br> Selldone",
        'body' => "Khoản thanh toán :param2 của bạn đã được giải quyết thành công.\nĐặt hàng: :param1\nCảm ơn, :param3.\nSelldone",
        'icon' => 'thanh toán',
        'description' => 'Gửi tin nhắn cho khách hàng để thông báo về việc thanh toán thành công.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Chấp nhận thanh toán',
        'sample' => "Khoản thanh toán 267 đô la mới đã được giải quyết thành công.<br> Đặt hàng: SM-425<br> Cảm ơn, <b>Tên cửa hàng của bạn</b> .<br> Selldone",
        'body' => "Thanh toán :param2 mới đã được giải quyết thành công.\nĐặt hàng: :param1\nCảm ơn, :param3.\nSelldone",
        'icon' => 'thanh toán',
        'description' => 'Gửi tin nhắn cho chủ cửa hàng để thông báo về việc thanh toán thành công.',

    ],

    'vendor-new-order' => [
        'title' => 'Nhà cung cấp đơn hàng mới',
        'sample' => "Bạn đã nhận được một đơn đặt hàng mới trị giá \$200.<br>Đơn hàng: <b>SM-870</b> cho <b>Tên nhà cung cấp</b>.<br> ✅ Sản phẩm A| SKU100001 |1x<br> ✅ Sản phẩm B| SKU100002 |1x",
        'body' => "Bạn đã nhận được một đơn đặt hàng :param2 mới.\nĐặt hàng: :param1 cho :param3.\n:param4",
        'icon' => 'mặt tiền cửa hàng',
        'description' => 'Gửi tin nhắn cho nhà cung cấp để thông báo về đơn hàng mới.',
    ],








    'shop-login' => [
        'title' => 'Đăng nhập mã xác minh',
        'sample' => "Mã đăng nhập của bạn là: <b>123456</b><br> <b>Tên cửa hàng của bạn</b><br> Selldone",
        'body' => "Mã đăng nhập của bạn là: :param1\n:param2\nSelldone",
        'icon' => 'đăng nhập',
        'description' => 'Gửi mã đăng nhập cho khách hàng để đăng nhập vào cửa hàng.',

    ],

    'user-login' => [
        'title' => 'Thông báo Đăng nhập Thành công',
        'sample' => "<b>Tên</b> thân mến,<br> Bạn đã đăng nhập vào tài khoản của mình bằng <b>iPhone 165.250.300.1</b> lúc <b>5/8/2021 9:14 sáng</b> .<br> Selldone",
        'body' => "Kính gửi :param1,\nBạn đã đăng nhập vào tài khoản của mình bằng :param2 tại :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Gửi tin nhắn sau khi khách hàng đăng nhập vào cửa hàng.',

    ],

    'avocado-order-submit' => [
        'title' => 'Đã gửi đơn đặt hàng bơ mới cho người mua',
        'sample' => "<b>Tên cửa hàng của bạn</b><br> Gửi <b>tên của bạn</b> ,<br> Chúng tôi đã nhận được đơn đặt hàng của bạn và chúng tôi đang xem xét nó.<br> Thứ tự #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nKính gửi :param1,\nChúng tôi đã nhận được đơn đặt hàng của bạn và chúng tôi đang xem xét nó.\nSố đơn hàng: :param2\nSelldone",
        'icon' => 'kiểm tra sự thật',
        'description' => 'Gửi tin nhắn cho khách hàng sau khi đặt hàng Bơ.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Bơ nhận được đơn đặt hàng mới gửi cho người bán',
        'sample' => "Bạn đã nhận được một đơn đặt hàng bơ:<br> Cửa hàng: <b>Tên cửa hàng của bạn</b><br> Người mua: <b>Tên người mua</b><br> Đặt hàng: <b>AVO-246</b><br> Selldone",
        'body' => "Bạn đã nhận được một đơn hàng Bơ:\nCửa hàng: :param1\nNgười mua: :param2\nĐặt hàng: :param3\nSelldone",
        'icon' => 'cách_to_reg',
        'description' => 'Gửi tin nhắn cho chủ cửa hàng để thông báo về việc nhận được đơn hàng Bơ mới.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Đơn hàng bơ sẵn sàng thanh toán',
        'sample' => "<b>Tên cửa hàng của bạn</b><br>Đơn đặt hàng của bạn đã được xác nhận và có thể được thanh toán qua liên kết sau.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nĐơn hàng của bạn đã được xác nhận và có thể được thanh toán qua liên kết sau.\nSố đơn hàng: :param2\nLiên kết: :param1\nSelldone",
        'icon' => 'biên nhận',
        'description' => 'Gửi tin nhắn có liên kết thanh toán cho khách hàng sau khi người bán đặt giá và xác nhận đơn hàng Quả bơ của họ.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Đơn hàng đã sẵn sàng để vận chuyển',
        'sample' => "Xin chào <b>Alex</b>, tin vui là đơn hàng của bạn hiện đã sẵn sàng để được chuyển đi.<br>Order: <b>SM-123</b>",
        'body' => "Xin chào :param4, tin vui là đơn hàng của bạn hiện đã sẵn sàng để được chuyển đi.\nĐặt hàng: :param1",
        'icon' => 'vận chuyển địa phương',
        'description' => 'Gửi tin nhắn cho khách hàng để thông báo rằng đơn hàng của họ đã sẵn sàng được vận chuyển.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Đơn hàng đã sẵn sàng để nhận',
        'sample' => "Xin chào Alex, tin tốt, đơn hàng của bạn hiện đã sẵn sàng để nhận.<br>Đơn hàng: <b>SM-123</b>",
        'body' => "Xin chào :param4, tin vui là đơn hàng của bạn hiện đã sẵn sàng để nhận.\nĐặt hàng: :param1",
        'icon' => 'chia sẻ_location',
        'description' => 'Gửi tin nhắn cho khách hàng để thông báo rằng đơn hàng của họ đã sẵn sàng để nhận.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Đơn đặt hàng của nhà cung cấp đã sẵn sàng để vận chuyển',
        'sample' => "Xin chào <b>Alex</b>, tin vui là đơn hàng của bạn hiện đã sẵn sàng để được chuyển đi.<br>Order: <b>SM-123</b>",
        'body' => "Xin chào :param4, tin vui là đơn hàng của bạn hiện đã sẵn sàng để được chuyển đi.\nĐặt hàng: :param1",
        'icon' => 'vận chuyển địa phương',
        'description' => 'Gửi tin nhắn cho khách hàng để thông báo rằng đơn hàng của họ đã sẵn sàng được vận chuyển. Chỉ có trên thị trường với Chế độ vận chuyển trực tiếp và hình thức giao hàng không phải là Nhận hàng.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Đơn hàng của nhà cung cấp đã sẵn sàng để nhận',
        'sample' => "Xin chào Alex, tin tốt, đơn hàng của bạn hiện đã sẵn sàng để nhận.<br>Đơn hàng: <b>SM-123</b>",
        'body' => "Xin chào :param4, tin vui là đơn hàng của bạn hiện đã sẵn sàng để nhận.\nĐặt hàng: :param1",
        'icon' => 'chia sẻ_location',
        'description' => 'Gửi tin nhắn cho khách hàng để thông báo rằng đơn hàng của họ đã sẵn sàng để nhận. Chỉ có trên thị trường với Chế độ vận chuyển trực tiếp và hình thức giao hàng là Nhận hàng.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Xác nhận mặt hàng đặt hàng',
        'sample' => "Xin chào Alex, chúng tôi đã xem xét đơn đặt hàng của bạn. Đây là trạng thái xác nhận cho các mặt hàng của bạn:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Xin chào :param4, chúng tôi đã xem xét đơn hàng của bạn. Đây là trạng thái xác nhận cho các mặt hàng của bạn:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'bài tập_turned_in',
        'description' => 'Thông báo cho khách hàng về các mặt hàng trong đơn đặt hàng của họ đã được người bán chấp nhận hoặc từ chối.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Xác nhận đơn đặt hàng của nhà cung cấp',
        'sample' => "Xin chào Alex, chúng tôi đã xem xét đơn đặt hàng của bạn. Đây là trạng thái xác nhận cho các mặt hàng của bạn:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Xin chào :param4, chúng tôi đã xem xét đơn hàng của bạn. Đây là trạng thái xác nhận cho các mặt hàng của bạn:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'bài tập_turned_in',
        'description' => 'Thông báo cho khách hàng về các mặt hàng trong đơn đặt hàng của họ đã được nhà cung cấp chấp nhận hoặc từ chối.',
    ],



];
