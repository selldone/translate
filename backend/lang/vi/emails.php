<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Tin nhắn này chào mừng một người mua mới đến cửa hàng.',
        ShopMailTemplateCodes::OrderCheckout => 'Thông báo này được gửi khi người mua xác nhận đơn đặt hàng.',
        ShopMailTemplateCodes::OrderPayment => 'Thông báo này xác nhận việc thanh toán thành công của khách hàng.',
        ShopMailTemplateCodes::OrderUpdate => 'Thông báo này được gửi để cập nhật cho người mua về trạng thái đơn đặt hàng của họ.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Tin nhắn này được gửi đến người bán để thông báo cho họ về đơn hàng đã được xác nhận.',
        ShopMailTemplateCodes::PosCheckout => 'Thông báo này được gửi để xác nhận đơn đặt hàng tại điểm bán hàng cho người mua.',
        ShopMailTemplateCodes::PosPayment => 'Thông báo này xác nhận khoản thanh toán tại điểm bán hàng được thực hiện bởi người mua.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Thông báo này thông báo cho người bán về việc mua hàng được thực hiện tại điểm bán hàng của họ.',
        ShopMailTemplateCodes::ShopContact => 'Thông báo này được gửi khi biểu mẫu liên hệ đã được gửi.',
        ShopMailTemplateCodes::ShopGiftCard => 'Thông báo này thông báo cho người dùng rằng họ đã nhận được thẻ quà tặng.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Tin nhắn này chào mừng một nhà cung cấp mới đến cửa hàng.',
        ShopMailTemplateCodes::ShopVendorInvite => "Thông báo này được gửi đi để mời một nhà cung cấp tham gia thị trường của bạn.",
        ShopMailTemplateCodes::ShopVendorOrder => "Thông báo này được gửi đến nhà cung cấp khi nhận được đơn đặt hàng ở trạng thái Đã thanh toán hoặc Trả tiền khi giao hàng (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Được cử đi hàng ngày để cập nhật cho nhà cung cấp về tình trạng sản phẩm của họ.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Tin nhắn này được gửi để mời một nhà cung cấp tham gia thị trường của bạn.",

        ShopMailTemplateCodes::UserLogin => "Thông báo cho người dùng thông tin đăng nhập, bao gồm địa chỉ, ngày và thiết bị IP, vì mục đích bảo mật.",
        ShopMailTemplateCodes::LoginCode => "Gửi mã mật khẩu một lần để người dùng đăng nhập vào cửa hàng.",

        ShopMailTemplateCodes::EmailVerifyLink => "Gửi liên kết để xác minh địa chỉ email của người dùng. Email này được gửi khi người dùng đăng ký bằng SMS và nhập email của họ. Nó không được gửi khi người dùng đăng ký trực tiếp bằng thông tin đăng nhập mạng xã hội hoặc email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Gửi danh sách các đơn hàng đã nhận và thanh toán với số lượng lớn trong một ngày cụ thể."


    ,

    ],


    'global' => [
        'greetings' => 'Xin chào, :name!',
        'end-statement' => 'Nhóm hỗ trợ',

        'receiver_name' => 'Chào :user_name',
        'footer-help' => "Cần giúp đỡ? Hãy hỏi tại [support@selldone.com](mailto:support@selldone.com) hoặc truy cập [trung tâm trợ giúp](https://selldone.com/community) của chúng tôi.",
        'selldone-team' => 'Nhóm Selldone',
        'footer-shop' => "Nếu bạn cần trợ giúp về bất cứ điều gì, xin vui lòng gửi email cho chúng tôi: :shop_mail",
        'accept' => "Chấp nhận",
        'reject' => "Từ chối",
        'verify' => "xác minh",
        'title' => "Tiêu đề",
        'value' => "Giá trị",
        'description' => "Sự miêu tả",
        'shop' => "Cửa hàng",
        'shop-info' => "Thông tin cửa hàng",
        'user' => "Người dùng",
        'user-info' => "Thông tin tài khoản",
        'license' => "Giấy phép",
        'status' => "Tình trạng",
        'start' => "Khởi đầu",
        'end' => "Chấm dứt",
        'renewal' => "Sự đổi mới",
        'view' => "Lượt xem",

        'balance' => "Sự cân bằng",
        'card_number' => "Số thẻ",
        'cvv' => "Cvv",
        'expire_date' => "Hạn sử dụng",

        'Dashboard' => "Trang tổng quan",
        'order' => "đặt hàng",
        'view_order' => "Xem đơn đặt hàng",
        'pay_now' => "Pay now",

        'official_selldone' => "NGƯỜI BÁN CHÍNH THỨC",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Tiền tệ",
        'free-balance' => "Số dư miễn phí",
        'locked-balance' => "Số dư bị khóa",
        'bot' => "Người máy",
        'requests' => "Yêu cầu",
        'baskets' => 'Xe đẩy',
        'physical' => "Vật lý",
        'virtual' => "Ảo",
        'file' => "Tập tin",
        'service' => "Dịch vụ",
        'fulfillment' => "Sự hoàn thành",
        'open' => "Mở",
        'reserved' => "Để dành",
        'canceled' => "Đã hủy",
        'payed' => "Trả",
        'cod' => "COD",
        'orders-count' => 'Đơn hàng',
        'payments-count' => 'Thanh toán',
        'confirms-count' => 'Xác nhận',
        'sends-count' => 'Gửi',
        'delivers-count' => 'Giao hàng',
        'count' => 'Đếm',
        'transactions-count' => 'Số lượng giao dịch',
        'success-transactions' => 'Giao dịch thành công',
        'total-amount' => 'Tổng cộng',
        'amount' => 'Số lượng',
        'wage' => 'Tiền công',
        'debug' => 'Gỡ lỗi',
        'pos' => 'POS',
        'live' => 'Sống',
        'CheckQueue' => 'Kiểm tra hàng đợi',
        'OrderConfirm' => 'Xác nhận đơn hàng',
        'PreparingOrder' => 'Chuẩn bị đơn đặt hàng',
        'SentOrder' => 'Đã gửi đơn đặt hàng',
        'ToCustomer' => 'Đã giao cho khách hàng',
        'Pending' => 'Chưa giải quyết',
        'Accepted' => 'Đã được chấp nhận',
        'Rejected' => 'Từ chối',
        'pc' => 'PC',
        'tablet' => 'Máy tính bảng',
        'phone' => 'Điện thoại',
        'total' => 'Toàn bộ',
        'view-detail' => 'Xem chi tiết',
        'empty' => 'Làm rỗng cái gì',
        'dropshipping' => 'Vận chuyển thả',
        'reply' => 'Đáp lại',
        'reactions' => 'Phản ứng',
        'Comments' => 'Bình luận',
        'last-comment' => 'Bình luận cuối cùng',
        'response-to' => 'Phản hồi với',
        'posts' => 'Bài viết',
        'post' => 'Đăng tải',

        'name' => 'Tên',
        'email' => 'E-mail',
        'type' => 'loại hình',
        'device' => 'Thiết bị',
        'platform' => 'Nền tảng',
        'browser' => 'Trình duyệt',
        'time' => 'Thời gian',
        'Wallet' => 'Ví',
        'date' => 'Ngày tháng',

        'account' => 'Tài khoản',
        'transaction' => 'Giao dịch',
        'fee' => 'Học phí',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Hóa đơn thanh toán',
        'category' => 'Danh mục',
        'password' => 'Mật khẩu',
        'verify-login' => "Xác minh & Đăng nhập",
        'url' => 'URL',
        'avocado' => 'Trái bơ',
        'hyper' => 'Hyper',
        'buy-now' => "Mua ngay",
        'add-domain' => "Add Domain",
        'views' => 'Lượt xem',


        'country' => 'Quốc gia',
        'address' => 'Địa chỉ',
        'postal' => 'Mã bưu điện',
        'building_no' => 'Tòa nhà #',
        'building_unit' => 'Đơn vị #',
        'message' => 'Tin nhắn',


        'customer' => 'Khách hàng',
        'cart-items' => 'Các mặt hàng trong giỏ hàng',
        'payment' => 'Sự chi trả',
        'receiver' => 'Người nhận',
        'virtual-items' => 'Vật phẩm ảo',
        'no-payment' => 'Không thanh toán!',

        'enable' => 'Cho phép',
        'access' => 'Truy cập',
        'bank' => 'Thông tin ngân hàng',

        'vendor' => 'Người bán',

        'view_content' => "Xem nội dung đầy đủ",
        'files' => 'Các tập tin',
        'download' => 'Tải xuống',
        'file_name' => 'Tên tập tin',
        'file_size' => 'Kích thước',

        'subscription' => 'Đăng ký',
        'products' => 'Các sản phẩm',
        'vendor_products' => 'Sản phẩm của nhà cung cấp',

        'pickup' => 'Nhận hàng',

        'minutes' => 'Phút',
        'hours' => 'Giờ',

        'refund' => 'Hoàn tiền',
        'recipient_address' => 'Địa chỉ người nhận',
        'signature' => 'Chữ ký',
        'blockchain' => 'Chuỗi khối',
        'details' => 'Chi tiết',


    

        'Shop' => 'Cửa hàng',
        'dashboard' => 'bảng điều khiển',
        'comments' => 'bình luận',
        'wallet' => 'cái ví',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Hệ điều hành doanh nghiệp Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Báo cáo hiệu suất, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Báo cáo theo mùa, Selldone'
        ],
        'Onboarding' => [
            'id' => 'Chào',
            'name' => 'Chấp thuận, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Hỗ trợ :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Xác minh, Selldone'
        ],
        'Welcome' => [
            'id' => 'Chào',
            'name' => 'Cộng đồng, Selldone'
        ],
        'NewShop' => [
            'id' => 'thương gia',
            'name' => 'Chấp thuận, Selldone'
        ],
        'Approve' => [
            'id' => 'chấp thuận',
            'name' => 'Chấp thuận, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Quản lý đơn hàng :name'
        ],

        'Recovery' => [
            'id' => 'sự hồi phục',
            'name' => 'Nhóm phục hồi Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Đang chờ xử lý ⌛',
        'PAYED' => 'Trả phí ✅',
        'CANCELED' => 'Đã hủy ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Người quản lý',
            'OFFICER' => 'Cán bộ và Giám sát',
            'AUDITING' => 'Giám đốc kiểm toán',
            'EMPLOYEE' => 'Nhân viên',
            'PRODUCT' => 'Quản lý sản phẩm',
            'CONTENT' => 'Nội dung quản lí',
            'MARKETING' => 'Giám đốc tiếp thị',
            'VIEWER' => 'Người xem',

        ],
        'subject' => ":inviter đã mời bạn với tên :level| :shop",
        'category' => "Lời mời nhân viên",
        'title' => "Bạn đã được mời tham gia <b>:shop_name</b> với tên <b>:level</b>.",
        'message' => "Bạn đã nhận được lời mời cộng tác với nhóm <b>:shop_title</b> trong kinh doanh. Bạn có quyền lựa chọn chấp nhận hoặc từ chối lời đề nghị này. Nếu bạn chọn chấp nhận, vui lòng đăng nhập vào dịch vụ Selldone để xác nhận quyết định của bạn. Sau khi xác nhận, bạn sẽ có quyền truy cập vào phần quản lý cửa hàng.",

    ],

    'welcome-email' => [
        'subject' => "👋 Chào mừng :name, hãy bắt đầu với Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Chào mừng đến với Selldone",
        'message' => "Cảm ơn bạn đã lựa chọn Selldone! Giờ đây, bạn là thành viên của một cộng đồng sôi động kết nối người bán hàng toàn cầu với khách hàng, doanh nghiệp địa phương với doanh nghiệp và cá nhân với tập đoàn. Tất cả các công cụ Master và Pro của chúng tôi đều có sẵn cho bạn **miễn phí** và **không giới hạn**. Chúng tôi ở đây để hỗ trợ bạn và mở ra cánh cửa thành công cho bạn.",

        'index' => "Bước :step.",

        'step-domain' => [
            'title' => 'Thêm miền tùy chỉnh của bạn',
            'message' => "Để bắt đầu, hãy thêm miền tùy chỉnh của bạn miễn phí trong Bảng điều khiển cửa hàng trong Cài đặt > Cài đặt miền.",
            'action' => 'Quản lý tên miền của tôi',
        ],
        'step-landing' => [
            'title' => 'Tùy chỉnh trang chủ của bạn',
            'message' => "Cá nhân hóa trang chủ của bạn bằng cách đi tới Bảng điều khiển > Trang. Chọn một trang đích hoặc tạo một trang mới. Thật dễ dàng và trực quan, bạn có thể bắt đầu làm việc với nó ngay lập tức.",
            'action' => 'Tùy chỉnh trang đích của tôi',
        ],
        'step-payment' => [
            'title' => 'Thiết lập phương thức thanh toán',
            'message' => "Bắt đầu chấp nhận thanh toán trực tiếp vào tài khoản ngân hàng của bạn. Để kết nối các nhà cung cấp thanh toán của bạn như Stripe, PayPal, v.v., hãy đi tới Bảng điều khiển > Kế toán > Cổng.",
            'action' => 'Thêm phương thức thanh toán',
        ],
        'step-products' => [
            'title' => 'Thêm sản phẩm của bạn',
            'message' => "Dễ dàng thêm sản phẩm và danh mục trong Bảng điều khiển > Sản phẩm. Nó giống như quản lý các tập tin và thư mục trên PC của bạn – hoàn toàn sẵn sàng kéo và thả. Bạn cũng có thể nhập hàng loạt sản phẩm bằng Excel. Mẫu mẫu có sẵn để giúp bạn bắt đầu.",
            'action' => 'Quản lý sản phẩm của tôi',
        ],
        'step-shipping' => [
            'title' => 'Thiết lập phương thức vận chuyển',
            'message' => "Để tính phí vận chuyển cho khách hàng, hãy xác định phương thức vận chuyển của bạn trong Bảng điều khiển > Hậu cần > Vận chuyển. Bạn có thể đặt mức giá và hỗ trợ khác nhau cho các địa điểm khác nhau. Đừng quên đặt nguồn gốc kho hàng của bạn trong Bảng điều khiển > Hậu cần > Kho hàng.",
            'action' => 'Quản lý phương thức vận chuyển',
        ],
    

        'seller' => [
            'title' => 'Bạn là người bán?',
            'message' => 'Để bắt đầu bán hàng, hãy nhập trang tổng quan của bạn trong Selldone qua liên kết bên dưới và tạo cửa hàng đầu tiên của bạn hoàn toàn miễn phí. Quá trình này sẽ mất vài phút và bạn sẽ có cửa hàng và trang web trực tuyến của riêng mình. Sau đó chúng tôi sẽ hướng dẫn bạn các bước tiếp theo và lấy cổng thanh toán.',
            'action' => 'Đăng nhập vào trang tổng quan của tôi',
        ],
        'buyer' => [
            'title' => 'Tôi là người mua',
            'message' => 'Xin chúc mừng. Một khi bạn là thành viên của Selldone, bạn sẽ thoát khỏi tất cả những phức tạp của tư cách thành viên và xác thực trong các cửa hàng trực tuyến. Để hưởng lợi từ bất kỳ cửa hàng và trang web nào sử dụng nền tảng Selldone, bạn có thể đăng nhập bằng một cú nhấp chuột và thực hiện mua hàng đơn giản, nhanh chóng và an toàn.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet> Tài khoản> Phí',
        'title' => "Phí thành công",
        'message' => "Tài khoản <b>:account_number</b> của bạn đã được tính phí thành công <b>:amount</b>.",
        'account' => 'Tài khoản',
        'charge' => 'Thù lao',
        'balance' => 'Sự cân bằng',
        'footer' => "Giúp cho việc kinh doanh trở nên dễ dàng, có thể đạt được và mọi người trên thế giới đều có thể tiếp cận được."
    ],

    'verify-email' => [
        'subject' => "🙌 Hoàn tất đăng ký Selldone của bạn! Xác minh liên kết.",
        'category' => "BẠN CHỈ CÓ MỘT BƯỚC ĐI",
        'title' => "Xác minh địa chỉ email của bạn",
        'message' => "Xin chào :name,<br><br>Cảm ơn bạn đã chọn Selldone!<br><br>TĐể xác nhận rằng <b>:email</b> là địa chỉ email chính xác của bạn, vui lòng nhấp vào nút bên dưới hoặc sử dụng liên kết được cung cấp. Bạn có 48 giờ để hoàn tất việc xác minh này.",
        'footer' => "Nếu bạn gặp sự cố khi nhấp vào nút Xác minh, hãy sao chép và dán URL bên dưới vào trình duyệt web của bạn: :activation_url",
        'next-step' => "Tiếp theo, chúng tôi sẽ gửi cho bạn một số tài liệu hữu ích và hướng dẫn từng bước để giúp bạn dễ dàng thêm miền tùy chỉnh, thiết lập thanh toán, thêm sản phẩm và nhận đơn đặt hàng đầu tiên.",

    ],
    'verify-email-code' => [
        'subject' => "Mã xác minh cho :name",
        'category' => "SECURITY",
        'title' => "Mã xác minh email",
        'message' => "Xin chào :name,<br><br>TĐể xác nhận rằng <b>:email</b> là địa chỉ email chính xác của bạn, vui lòng nhập mã sau trong <b>10 phút</b> tiếp theo:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Cửa hàng của bạn đã sẵn sàng| :name",
        'category' => "BẠN CHỈ CÓ MỘT BƯỚC ĐI",
        'title' => "Thiết lập hoàn tất",
        'account_title' => "Tài khoản của bạn",
        'account_msg' => "Xác minh và đăng nhập vào tài khoản của bạn bằng thông tin này.",
        'shop_msg' => "Thông tin tài khoản trên hệ điều hành kinh doanh Selldone.",

    ],

    'reset2fa' => [
        'category' => "THÔNG ĐIỆP CHÍNH THỨC CỦA BẢO MẬT",
        'title' => "Yêu cầu tắt đăng nhập 2 bước",
        'message' => "Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại xác thực hai yếu tố cho tài khoản **:name** bằng email **:email**.<br><br>Chúng tôi đã tìm thấy các chi tiết sau cho tài khoản của bạn:",
        'footer' => "Nếu bạn không yêu cầu đặt lại mật khẩu, bạn không cần thực hiện thêm hành động nào.",
        'action' => 'Tắt đăng nhập hai bước',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Cửa hàng của bạn đã sẵn sàng ngay bây giờ!",
        'category' => "SINH RA CỬA HÀNG TRỰC TUYẾN MỚI TRÊN THẾ GIỚI",
        'title' => "Xin chúc mừng, :name!",
        'message' => "<b>Xin chúc mừng, :name! Công việc kinh doanh trực tuyến mới của bạn hiện đã hoạt động!</b> Chúng tôi rất vui mừng được chào đón bạn đến với cộng đồng Selldoners. Bạn đã thực hiện bước đầu tiên hướng tới thành công và chúng tôi sẵn sàng trợ giúp bạn từng bước.<br>Bây giờ, cửa hàng của bạn đã sẵn sàng, hãy đảm bảo rằng bạn đã sẵn sàng nhận thanh toán trực tiếp từ khách hàng và bắt đầu phát triển đế chế của mình. Nếu bạn cần trợ giúp, chỉ cần nhắn tin cho chúng tôi—nhóm hỗ trợ của chúng tôi luôn sẵn sàng hỗ trợ bạn.<br><br><b>Các bước tiếp theo quan trọng:</b> Để bắt đầu, hãy đảm bảo bạn đã sẵn sàng nhận thanh toán và hoạt động suôn sẻ. Chúng tôi sẽ hướng dẫn bạn qua từng giai đoạn để giúp cửa hàng của bạn hoạt động trơn tru.",
        'pdf-book' => "Đừng bỏ lỡ cuốn sách tay đính kèm: Do Your Business Like A Game",

        'account' => [
            'title' => 'Bước 1: Tạo tài khoản trong ví Selldone',
            'message' => "Để bắt đầu, hãy tạo một tài khoản trong ví Selldone của bạn. Đây là nơi các khoản phí của bạn sẽ được khấu trừ và cũng là nơi bạn sẽ nạp tiền để giúp cửa hàng của bạn hoạt động trơn tru. Nếu số dư của bạn bị âm, đừng lo lắng! Cửa hàng của bạn sẽ tiếp tục hoạt động mà không bị gián đoạn.",
            'action' => 'Đăng nhập vào ví',
        ],

        'shop-account' => [
            'title' => 'Bước 2: Kết nối tài khoản với cửa hàng',
            'message' => "Tiếp theo, kết nối tài khoản ví của bạn với cửa hàng. Đi tới <b>Store > Accounting > Invoice</b> và liên kết ví của bạn. Điều này đảm bảo rằng tất cả các khoản thanh toán của khách hàng được gửi trực tiếp vào tài khoản ngân hàng của bạn—Selldone không khấu trừ bất kỳ số tiền nào từ thu nhập của bạn.",
            'action' => 'Bảng điều khiển hóa đơn lưu trữ',
        ],

        'gateway' => [
            'title' => 'Bước 3: Kết nối Cổng thanh toán trực tuyến',
            'message' => "Bây giờ, hãy thiết lập cổng thanh toán trực tuyến của bạn. Đi tới <b>Store > Kế toán > Port</b> và nhấp vào <b>Thêm Port</b> mới. Chọn loại tiền tệ của bạn và bạn sẽ thấy danh sách các cổng thanh toán có sẵn. Việc kết nối một cổng rất nhanh chóng và dễ dàng nhưng nếu bạn cần bất kỳ trợ giúp nào, vui lòng xem hướng dẫn Selldone hoặc liên hệ với chúng tôi.",
            'action' => 'Thêm một cổng vào cửa hàng',
        ],

        'domain' => [
            'title' => 'Bước cuối cùng: kết nối một miền chuyên dụng',
            'message' => "Bây giờ, hãy liên kết miền tùy chỉnh với cửa hàng của bạn. Điều này cho phép khách hàng mua sản phẩm hoặc dịch vụ của bạn và thanh toán trực tiếp cho bạn.",
            'action' => 'Giới thiệu và nhận thẻ quà tặng không giới hạn',
        ],
    ],


    'basket-list' => [
        'item' => "mục",
        'count' => "Đếm",
        'price' => "giá",
        'discount-code' => "Mã giảm giá",
        'customer-club' => 'Câu lạc bộ khách hàng',
        'shipping' => "Đang chuyển hàng",
        'total' => "Toàn bộ",
        'offer' => "Phục vụ",
        'coupon' => "Phiếu mua hàng",
        'lottery' => "Phần thưởng",
        'tax' => "Thuế",
        'tax_included' => "Đã bao gồm trong giá",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Phương pháp',
        'amount' => 'Số lượng',
        'giftcard' => 'Gift card',
        'payment' => 'Sự chi trả',
    ],


    'shop-subscription-email' => [
        'category' => "Cập nhật đăng ký",
        'title' => "Giấy phép cửa hàng: :shop_title",
        'title-reserved' => "Giấy phép dự trữ: :shop_title",
        'title-active' => "Giấy phép hoạt động: :shop_title",
        'title-finished' => "Giấy phép đã hoàn thành: :shop_title",
        'title-cancel' => "Hủy giấy phép: :shop_title",
        'message' => "Gói giấy phép cửa hàng của bạn đã được cập nhật,",
        'RESERVED' => "⚡ Gói đăng ký của bạn đã được ** đặt trước **.",
        'ACTIVE' => "🟢 Gói đăng ký của bạn đã được ** kích hoạt **.",
        'FINISHED' => "🚧 Gói đăng ký của bạn đã ** hoàn tất **.",
        'CANCEL' => "⛔ Gói đăng ký của bạn đã bị ** hủy bỏ **.",
    ],

    'support' => [
        'subject' => "Trung tâm hỗ trợ|:name đã trả lời",
        'category' => "Trung tâm hỗ trợ",
        'title' => "Bạn đã nhận được phản hồi",
        'action' => "Quản trị viên mở cửa hàng",
    ],

    'shop-customer-join' => [
        'subject' => "Tham gia :shop_title",
        'category' => "Lễ kỷ niệm khách hàng mới",
        'title' => "Chúng tôi rất vui vì thành viên của bạn",
        'action' => "Đến thăm bây giờ",
    ],

    'shop-vendor-join' => [
        'subject' => "Nhà cung cấp Onboarding | :shop_title",
        'category' => "Lễ mừng nhà cung cấp mới",
        'title' => "Chúng tôi rất vui vì thành viên của bạn",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Thẻ quà tặng :shop_title",
        'category' => "Thêm thẻ mới",
        'title' => "Xin chúc mừng, bạn đã nhận được một thẻ quà tặng",
        'action' => "Mua sắm ngay bây giờ",
        'message' => "Bạn đã nhận được thẻ quà tặng trị giá :balance :currency. Bạn có thể sử dụng thẻ quà tặng này trong cửa hàng của chúng tôi.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Trung tâm hỗ trợ| :shop",
        'category' => "ủng hộ",
        'title' => "Bạn đã nhận được phản hồi",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Xác nhận đơn hàng|Đặt hàng :order_id",
        'title' => "đặt hàng",
        'message' => "Bạn đã đặt hàng tại cửa hàng của chúng tôi. Chúng tôi đã nhận được đơn đặt hàng của bạn và sẽ gửi cho bạn một email khác sau khi thanh toán được xác nhận."
    ,

        'payments' => 'Thanh toán',
    ],

    'order-payment' => [
        'subject' => "🛍️ Xác nhận thanh toán|Đặt hàng :order_id",
        'title' => "Đề nghị thanh toán",
        'message' => "Thanh toán của bạn đã hoàn tất,<br> Chúng tôi đã nhận được đơn đặt hàng của bạn. Chúng tôi sẽ gửi cho bạn một email khác khi đơn đặt hàng của bạn được giao.",
    

        'payments' => 'Thanh toán',
    ],

    'order-update' => [
        'subject' => "🛍️ Cập nhật trạng thái đơn hàng|Đặt hàng :order_id",
        'title' => "Cập nhật trạng thái đơn hàng",
        'message' => "Đơn đặt hàng của bạn đã được cập nhật. Bạn có thể kiểm tra trạng thái mới nhất của đơn hàng này trong tài khoản của mình.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Đơn hàng của bạn đang trong hàng chờ xử lý. Chúng tôi sẽ thông báo cho bạn khi nó được chuẩn bị.",
                'OrderConfirm' => "Đơn hàng của bạn đã được xác nhận và quá trình chuẩn bị đã bắt đầu.",
                'PreparingOrder' => "Đơn hàng của bạn đang được chuẩn bị và sẽ sớm được chuyển đi.",
                'SentOrder' => "Đơn đặt hàng của bạn đã được chuyển đi. Bạn sẽ nhận được nó ngay.",
                'ToCustomer' => "Đơn đặt hàng của bạn đã được giao. Chúng tôi hy vọng bạn thích nó!",

                'PreparingOrder-PICKUP' => "Đơn hàng của bạn đang được chuẩn bị. Bạn sẽ nhận được thông báo khi hàng đã sẵn sàng để nhận.",
                'SentOrder-PICKUP' => "Đơn đặt hàng của bạn đã sẵn sàng để nhận. Hãy đến cửa hàng để nhận nhé.",
                'ToCustomer-PICKUP' => "Đơn đặt hàng của bạn đã được nhận. Chúng tôi hy vọng bạn thích nó!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Đơn hàng của bạn đang trong hàng chờ xử lý. Chúng tôi sẽ thông báo cho bạn khi nó sẵn sàng.",
                'OrderConfirm' => "Đơn hàng của bạn đã được xác nhận và quá trình chuẩn bị đang được tiến hành.",
                'PreparingOrder' => "Đơn hàng của bạn đang được chuẩn bị và sẽ sớm được gửi đến bạn.",
                'ToCustomer' => "Đơn hàng ảo của bạn đã được gửi đến tài khoản của bạn. Cảm ơn!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Yêu cầu dịch vụ của bạn đang trong hàng đợi. Chúng tôi sẽ thông báo cho bạn khi chúng tôi bắt đầu.",
                'OrderConfirm' => "Dịch vụ của bạn đã được xác nhận và chúng tôi đang chuẩn bị bắt đầu.",
                'PreparingOrder' => "Chúng tôi đang chuẩn bị dịch vụ cho bạn và sẽ thông báo cho bạn sau khi hoàn tất.",
                'ToCustomer' => "Dịch vụ của bạn đã hoàn tất. Cảm ơn bạn đã lựa chọn chúng tôi!"
            ],
            'FILE' => [
                'PreparingOrder' => "Tệp của bạn đang được chuẩn bị và sẽ sớm có sẵn.",
                'ToCustomer' => "Tệp của bạn đã sẵn sàng và đã được gửi. Bây giờ bạn có thể tải nó xuống."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Đơn đặt hàng đăng ký của bạn đang trong hàng đợi. Chúng tôi sẽ thông báo cho bạn khi quá trình xử lý bắt đầu.",
                'OrderConfirm' => "Đăng ký của bạn đã được xác nhận và đang được thiết lập.",
                'PreparingOrder' => "Chúng tôi đang chuẩn bị đăng ký cho bạn và quá trình này sẽ sớm bắt đầu.",
                'SentOrder' => "Đăng ký của bạn đã được kích hoạt. Bạn sẽ nhận được thông tin cập nhật liên tục.",
                'ToCustomer' => "Dịch vụ đăng ký của bạn đã được kích hoạt thành công."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Chúc mừng :name|Voucher mới: :title',
        'category' => "XIN CHÚC MỪNG, VOUCHER MỚI",
        'message' => "Này :name,<br><br>Bạn đã nhận được một phiếu quà tặng mới từ chúng tôi! Bạn có thể kiếm được nhiều phiếu thưởng hơn nữa bằng cách giới thiệu Selldone với bạn bè và mọi người mà bạn biết. Phiếu thưởng này có giá trị **:price :currency**.<br><br>Bạn đã thực hiện bước đầu tiên và chúng tôi sẵn sàng giúp bạn mở khóa các tính năng mới với phiếu thưởng của bạn! Vui lòng đăng nhập bằng **:email** và tìm voucher của bạn trong Cửa hàng **Bảng điều khiển** > **Cài đặt** > **Giấy phép**.<br><br>Xin chúc mừng!",
        'action' => "Bảng điều khiển của tôi",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Xin chúc mừng :name thân mến|Bạn đã nhận được một món quà đặc biệt!',
        'category' => "Thông báo nhận quà",
        'title' => "Quà tặng cho bạn",
        'message' => "Xin chào :name, chúng tôi rất vui mừng thông báo rằng bạn đã nhận được một món quà đặc biệt từ Selldone! 🎉 Bạn có thể kiếm được nhiều quà hơn bằng cách duy trì hoạt động, phát triển cửa hàng và nâng cao kiến ​​thức chuyên môn của mình trên Selldone. Để kiểm tra quà tặng của bạn, chỉ cần đăng nhập bằng :email và tìm nó ở góc trên bên phải bảng điều khiển của bạn.<br><br>Quà tặng này có giá trị **:price :currency** và bạn có thể dễ dàng gửi nó vào ví của mình trong Selldone.<br><br>Sử dụng quà tặng của bạn để nâng cấp giấy phép cửa hàng của bạn và mở khóa các công cụ mạnh mẽ hơn nữa để thúc đẩy hoạt động kinh doanh trực tuyến của bạn!",
        'action' => "Những món quà",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Đã nhận được đơn hàng mới| :order_id",
        'title' => "New Order",
        'message' => "Bạn đã nhận được một đơn đặt hàng mới. Vui lòng truy cập trang xử lý đơn đặt hàng trong cửa hàng của bạn.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Thông tin đã điền của bạn',
        'output-form-title' => 'Thông tin mặt hàng đã mua',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Báo cáo tuần :time',
        'title' => 'Báo cáo hiệu suất hàng tuần của cửa hàng',
        'message' => "Đây là báo cáo hàng tuần của cửa hàng bạn từ <b>:start</b> đến <b>:end</b>. Báo cáo này bao gồm các mẹo để cải thiện hoạt động kinh doanh của bạn, bạn cũng có thể kiểm tra trạng thái của cửa hàng trực tuyến và các đơn đặt hàng gần đây. Tôi hy vọng bạn có một ngày và tuần tốt lành phía trước."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => 'MIN Báo cáo tiết kiệm :amount của bạn trong 3 tháng vừa qua| :shop_title',
        'title' => 'Báo cáo theo mùa về hoạt động kinh doanh, phần thưởng và khoản tiết kiệm tài chính của bạn',
        'message' => "Đây là báo cáo theo mùa <b>:shop_title</b> của bạn từ <b>:start</b> đến <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Các tài khoản được kết nối',
        'sub-title' => 'Trạng thái mới nhất của tài khoản ví được kết nối với cửa hàng của tôi là gì?',
        'view-wallet' => 'Xem ví',
        'tip-title' => 'Những lời khuyên quan trọng',
        'tip' => "Thiết lập ví Selldone miễn phí và liên kết nó với cửa hàng của bạn. Ngay cả khi số dư của bạn âm, khách hàng của bạn vẫn có thể mua sắm và thanh toán mà không gặp vấn đề gì. Đừng lo lắng, hoạt động và dữ liệu của cửa hàng của bạn sẽ tiếp tục suôn sẻ trong tối đa 1 tháng mà không bị gián đoạn.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Kết nối với tài khoản'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Ứng dụng đã cài đặt',
        'sub-title' => 'Danh sách các ứng dụng bạn đã cài đặt trong cửa hàng của mình trong tuần này.',
        'tip' => "Bạn có muốn tìm thêm ứng dụng cho cửa hàng của mình không?",
        'view-app-store' => 'Truy cập Cửa hàng ứng dụng Selldone ..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bots trong cửa hàng của bạn',
        'sub-title' => 'Các bot bán hàng đang hoạt động trong cửa hàng của tôi.',
        'tip-title' => 'Giảm giá Bot',
        'tip' => "Selldone đã cung cấp cho bạn các bot bán hàng tự động. Tất cả những gì bạn phải làm là chuyển đến bảng Tiện ích> Bots và kích hoạt các bot cửa hàng của bạn. Lưu ý rằng dịch vụ liên quan phải có sẵn ở quốc gia của bạn.",
        'view-bots' => 'Quản lý bot',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Giao tiếp với khách hàng',
        'sub-title' => 'Tôi đã có bao nhiêu liên hệ với khách hàng của mình trong tuần này?',
        'faqs' => 'Các câu hỏi thường gặp',
        'tickets' => 'Vé khách hàng',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Trạng thái người dùng',
        'sub-title' => 'Hoạt động từ :start đến :end',
        'users' => [
            'title' => 'Khách hàng',
            'subtitle' => 'Người dùng đăng ký',
        ],
        'views' => [
            'title' => 'Lượt truy cập',
            'subtitle' => 'Bạn đã ghé thăm cửa hàng bao nhiêu lần rồi',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Người dùng đã trả lại',

        'shop_views' => 'Lượt xem cửa hàng',
        'baskets' => [
            'title' => 'Xe đẩy hàng',
            'subtitle' => 'Báo cáo số lượng giỏ hàng mới',
        ],
        'products' => [
            'title' => 'Tổng quan về sản phẩm',
            'subtitle' => 'Tình trạng sản phẩm trong cửa hàng theo loại',
            'value_name' => 'Các sản phẩm'
        ],
        'products_count' => 'Các loại sản phẩm',
        'views_count' => 'Lượng xem',
        'sell_count' => 'Số lượng bán',
        'send_count' => 'Số lượng vận chuyển',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Vận chuyển thả',
        'sub-title' => 'Bảng điều khiển dành cho những người bán lớn của Drop Shipping Selldone.',
        'total_fulfillments' => 'Tổng số đơn đặt hàng đã nhận',
        'ds_count' => 'Đơn hàng đã nhận',
        'statistics_title' => 'Báo cáo đơn đặt hàng đã nhận',
        'ds_cancels' => 'Hủy bởi người bán giao diện',
        'ds_rejects' => 'Hủy bỏ bởi bạn',
        'tip' => "Bạn có phải là người bán hàng lớn không? Bạn có sở hữu một nhà kho, nhà máy hoặc nhà phân phối sản phẩm? Bạn có thể cung cấp sản phẩm của mình cho những người bán khác trong dịch vụ Selldone Drop Shipping để bán sản phẩm của bạn trên quy mô lớn. Gửi email cho chúng tôi theo địa chỉ support@selldone.com để hướng dẫn bạn.",
        'view-drop-shipping-panel' => 'Đăng nhập vào bảng điều khiển bán buôn',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Tỷ giá hối đoái',
        'sub-title' => 'Danh sách tỷ giá quy đổi tiền tệ mới nhất trong cửa hàng của bạn.',
        'from' => 'Tiền tệ nguồn',
        'to' => 'Đơn vị tiền tệ đích',
        'rate' => 'Tỷ lệ chuyển đổi',
        'view-exchange-panel' => 'Quản lý tỷ giá hối đoái',
    

        'vew-exchange-panel' => 'bảng quản lý tỷ giá hối đoái',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Hợp đồng chuyên gia',
        'sub-title' => 'Chuyên gia nào làm việc trên cửa hàng của tôi?',
        'cost' => 'Giá trị hợp đồng',
        'duration' => 'Khoảng thời gian',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Ngày hủy bỏ',
        'end_at' => 'Ngày giao hàng',
        'tip' => 'Bạn có thể thuê các chuyên gia giỏi nhất ở Selldone để phát triển doanh nghiệp của mình.',
        'view-experts' => 'Bấm để bắt đầu.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Cổng thanh toán đang hoạt động trên cửa hàng của bạn :shop',
        'tip-title' => 'Những lời khuyên quan trọng',
        'tip' => "Truy cập trang quản lý cổng trong cửa hàng của bạn và thêm ít nhất một cổng sau vài phút. Khách hàng của bạn thích thanh toán nhanh chóng và an toàn thông qua các cổng trực tuyến.",
        'view-shop-gateways' => 'Đăng nhập vào quản lý cổng thông tin cửa hàng của tôi.',
        'view-gateways' => 'Xem thêm các cổng khác',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Đơn hàng',
        'sub-title' => 'Danh sách các đơn đặt hàng tôi nhận được trong tuần này.',
        'total_baskets' => 'Tổng số đơn hàng',
        'total_posBaskets' => 'Tổng số đơn đặt hàng bằng tiền mặt',
        'pos-title' => 'Hộp cửa hàng POS',
        'chart-label' => 'Các đơn đặt hàng đã hoàn thành (những đơn đặt hàng này không nhất thiết phải được thanh toán!)',
        'tip-title' => 'Bạn nên cố gắng hơn nữa ...',
        'tip' => "Không có thành công đơn giản.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Trung tâm xử lý',
        'sub-title' => 'Chúng tôi đã xử lý bao nhiêu đơn hàng trong cửa hàng trong tuần này?',
        'tip-title' => 'Bạn đã không có một cuộc mua bán!',
        'tip' => "Thật không may, bạn không có bất kỳ doanh số bán hàng nào trong tuần này. Bạn cần đến cửa hàng của mình nhiều hơn. Bạn có thể thêm nhiều sản phẩm hơn, chọn hình ảnh đẹp hơn hoặc viết mô tả tốt hơn cho sản phẩm của mình. Cân nhắc một công việc toàn thời gian cho doanh nghiệp của bạn. Nếu bạn làm đúng và không nản lòng, bạn sẽ thành công.",
        'view-process-center' => 'Xem trung tâm quy trình',
        'return' => [
            'title' => 'Đơn hàng đã trả lại',
            'subtitle' => 'Báo cáo các đơn hàng bị trả lại.',
            'tip-title' => 'Bạn có biết rằng ...',
            'tip' => "Bạn có thể tạo bao nhiêu máy tính tiền tùy thích với Selldone POS! Cho dù đó là máy tính bảng, điện thoại di động hay máy tính xách tay, bạn có thể biến bất kỳ thiết bị nào thành điểm bán hàng của cửa hàng. Thật đơn giản, nhanh chóng để thiết lập và chuẩn bị đầy đủ cho máy chủ của bạn. Bắt đầu sử dụng nó ngay hôm nay!",
            'view-pos' => 'Đăng nhập vào Thu ngân cửa hàng trực tuyến của tôi'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Phiên',
        'sub-title' => 'Tôi đã ghé thăm cửa hàng của mình bao nhiêu lần?',
        'countries-title' => 'Những quốc gia nào đã được ghé thăm nhiều nhất?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Bạn có muốn kiếm tiền mà không tốn một đồng nào không?',
        'message' => "Xin chào :name, đã đến lúc bắt đầu kiếm tiền với Selldone! Đi tới Bảng điều khiển > Khác > Kiếm tiền > Nhận liên kết giới thiệu của bạn. Chia sẻ liên kết với bạn bè của bạn và kiếm thẻ quà tặng và chia sẻ khoản thanh toán của họ. Phần tốt nhất? Cả bạn và bạn của bạn đều nhận được thẻ quà tặng!",
        'action' => 'Xem liên kết giới thiệu của tôi',
        'mail-clip' => "<b style='color: #C2185B'>Quan trọng:</b> Nếu bạn sử dụng các dịch vụ email như Gmail giới hạn độ dài của email, hãy tìm tùy chọn sau ở cuối email để hiển thị báo cáo đầy đủ và nhấp vào nó:",

        'no-coin-reward' => "<b style='color: #C2185B'>Rất tiếc:</b> Hoạt động của bạn không đáp ứng yêu cầu để nhận phần thưởng SEL Xu miễn phí. Cố gắng hơn nữa và bán được nhiều hơn trên cửa hàng của bạn cho mùa giải tới.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Xin chúc mừng:</b> Làm tốt lắm! Dựa trên hiệu suất vượt trội của bạn, chúng tôi đã ghi có Đồng xu :amount SEL vào tài khoản của bạn như một phần thưởng.",

        'need-buy-license' => "<b>LNâng tầm doanh nghiệp của bạn:</b> Có vẻ như bạn chưa đăng ký bất kỳ gói đăng ký nào cho trang web của mình! Nâng cấp ngay bây giờ để mở khóa nhiều tính năng hơn chỉ với :amount mỗi tháng nếu thanh toán hàng năm.",
        'not-afford-message' => "Nếu bạn không đủ khả năng hoặc gặp bất kỳ khó khăn nào với việc thanh toán, vui lòng cho chúng tôi biết qua support@selldone.com.",
        'add-domain' => "<b>Tại sao không có miền tùy chỉnh cho doanh nghiệp của bạn?</b><br> Thêm miền vào trang web của bạn ngay bây giờ; nó miễn phí!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone là một<del> sản phẩm</del> <span style = 'color: forestgreen'>cộng đồng</span> .<br> Hãy là một Selldoner chuyên nghiệp!",
        'message' => "Theo dõi các trang chính thức của Selldone trên Twitter, LinkedIn và các mạng xã hội. Gửi cho chúng tôi bất kỳ nhận xét, yêu cầu hoặc phê bình nào hoặc tham gia vào các cuộc thảo luận về Selldone. Chúng tôi cũng là một phần của cộng đồng Selldone mà <b>Bạn tạo ra</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Đã nhận được đơn hàng bơ mới|:shop_title :time',
        'title' => "Báo cáo hiệu suất trong 24 giờ qua",
        'message' => "Khách hàng của bạn đang đợi đơn đặt hàng của bạn được xem xét và định giá. Đáp ứng yêu cầu của khách hàng càng sớm càng tốt để có được nhiều doanh thu hơn.",
        'card_title' => "Đơn hàng trong hàng đợi",
        'card_subtitle' => "Kể từ :date",

        'card_payed' => "Đơn đặt hàng đã trả tiền"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Câu trả lời mới cho bài đăng của bạn trong :community_title',
        'title' => ":name và :count những người khác đã tham gia cuộc trò chuyện trên bài đăng của bạn!",
        'message' => "Xin chào :name, bài viết của bạn đang được chú ý! Bạn đã nhận được nhận xét trong cộng đồng của chúng tôi. Đăng nhập vào tài khoản của bạn để tham gia thảo luận và xem mọi người đang nói gì.",
        'title-simple' => ":name đã bình luận về bài viết của bạn!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Trả lời chủ đề của bạn :topic_title',
        'title' => ":name và :count những người khác đã trả lời về chủ đề của bạn.",
        'message' => "Xin chào :name, chủ đề của bạn đang được chú ý! Bạn đã nhận được phản hồi trong cộng đồng của chúng tôi. Đăng nhập vào tài khoản của bạn để tham gia thảo luận và xem mọi người đang nói gì.",
        'title-simple' => ":name đã trả lời về chủ đề của bạn.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Đăng nhập mới :name',
        'category' => 'Thông báo bảo mật',
        'title' => "Đăng nhập vào tài khoản",
        'message' => "Kính gửi :name, thông tin đăng nhập vào tài khoản Selldone của bạn đã được phát hiện.",   // Login in selldone (seller)
        'message-shop' => "Thân gửi :name, bạn đã đăng nhập vào :shop_title.",  // Login in shop (buyer)

        'footer' => "Nếu bạn chưa đăng nhập, vui lòng thay đổi mật khẩu của bạn.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Rút tiền",
        'deposit' => "Gửi tiền",

        'withdraw_subject' => "Rút tiền từ tài khoản :account",
        'deposit_subject' => "Gửi tiền vào tài khoản :account",

        'message' => "Việc chuyển tiền đã được thực hiện với các thông số kỹ thuật sau.",

        'type' => "Loại giao dịch",

        'from' => "Nguồn tài khoản",
        'to' => "Destination account",

        'desc' => "Mô tả giao dịch",
        'action' => "Xem giao dịch",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Quan trọng! Vi phạm nội quy| :shop",
        'category' => "Thông tin quan trọng",
        'title' => "Cửa hàng của bạn đã bị phạt",
        'action' => "Mở trang tổng quan cửa hàng",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter đã mời bạn tham gia Selldone",
        'title' => ":name đã gửi cho bạn :amount để giúp bạn ra mắt cửa hàng trực tuyến mới và kiếm tiền từ cửa hàng đó!",
        'message' => "Xin chào **:receiver_name**,<br><br>Chào mừng bạn đến với Selldone! Trên Selldone, bạn có thể dễ dàng tạo trang web thương mại điện tử, blog, cộng đồng trực tuyến và thậm chí thiết lập hệ thống POS trực tuyến để bán hàng trực tiếp—tất cả chỉ trong vài phút. Đó là hệ điều hành kinh doanh trực tuyến hoàn chỉnh được thiết kế để giúp doanh nghiệp của bạn hoạt động tốt hơn, nhanh hơn và dễ dàng hơn.<br><br>Đăng ký bằng <b>:date</b> và nhận phiếu thưởng :amount để bắt đầu!",
        'accept' => "Chấp nhận lời mời",
        'owner' => "Chủ sở hữu của",
        'join-date' => "Trên Selldone kể từ",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Liên kết khôi phục| :shop",
        'category' => "Bảo mật cửa hàng",
        'title' => "Lưu trữ liên kết khôi phục của <b>:shop_name</b>.",
        'message' => "Email này được gửi cho bạn vì bạn đã yêu cầu khôi phục cửa hàng của mình. Nhấp vào liên kết dưới đây sẽ khôi phục cửa hàng của bạn và tất cả dữ liệu thuộc về nó.",
        'action' => "Xác nhận khôi phục cửa hàng",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone đã tiết kiệm được bao nhiêu tiền cho công việc kinh doanh của bạn?',
        'sub-title' => 'Từ ngày :start đến :end',
        'infrastructure' => [
            'title' => 'Cơ sở hạ tầng',
            'subtitle' => 'Máy chủ, CDN, Bộ nhớ và các dịch vụ đám mây khác',
        ],
        'experts' => [
            'title' => 'Chuyên gia & Nhân viên',
            'subtitle' => 'Nhà phát triển, bảo trì và hỗ trợ',
        ],
        'total_save' => 'Tổng số tiền tiết kiệm được'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Hiệu suất của bạn',
        'sub-title' => 'Tổng quan về doanh nghiệp từ :start đến :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Người dùng đã trả lại',

        'shop_views' => 'Lượt xem cửa hàng',
        'baskets' => [
            'title' => 'Xe đẩy hàng',
            'subtitle' => 'Báo cáo số lượng giỏ hàng mới',

        ],
        'products' => [
            'title' => 'Tổng quan về sản phẩm',
            'subtitle' => 'Tình trạng sản phẩm trong cửa hàng theo loại',
            'value_name' => 'Các sản phẩm'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Tổng số lượt xem trang của trang web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Bạn đã nhận được đơn hàng mới. Vui lòng đến trang xử lý đơn hàng trong bảng điều khiển nhà cung cấp của bạn.",
        'subject' => "🛍️ Đã nhận được đơn hàng mới| :order_id",
        'your_revenue' => "Doanh thu của bạn",
    ],
    'vendor-invite' => [
        'title' => 'Lời mời của nhà cung cấp',
        'message' => "Bạn đã nhận được lời mời trở thành nhà cung cấp của :shop_name. Bạn có thể chấp nhận hoặc từ chối bằng cách nhấp vào các nút sau.",
        'subject' => ":shop_name | Bạn đã nhận được lời mời trở thành nhà cung cấp của chúng tôi",
        'accept' => "Chấp nhận & Trở thành Nhà cung cấp",
        'reject' => "Từ chối",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Lời mời tham gia nhóm của chúng tôi',
        'message' => "Bạn đã được mời tham gia :vendor_name tại :shop_name. Bạn có thể chấp nhận hoặc từ chối lời mời này bằng cách sử dụng các nút bên dưới.",
        'subject' => "Lời mời tham gia :vendor_name|Trở thành thành viên nhóm",
        'accept' => "Chấp nhận và tham gia nhóm",
        'reject' => "Từ chối",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Mã đăng nhập của bạn cho :shop",
        'header-message' => "Chúng tôi gửi cho bạn email này vì bạn đã yêu cầu mã đăng nhập cho cửa hàng. Vui lòng tìm Mật khẩu một lần (OTP) của bạn bên dưới:",
        'footer-message' => "Mã này sẽ có hiệu lực trong 10 phút. Nếu bạn không yêu cầu mã đăng nhập này, vui lòng bỏ qua email này."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Xác minh email của bạn | :shop",
        'title' => 'Xác minh Email',
        'header-message' => "Xin chào :name,<br>Vui lòng xác nhận rằng **:email** là địa chỉ email của bạn bằng cách nhấp vào nút bên dưới hoặc sử dụng liên kết bên dưới trong vòng 48 giờ.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Cập nhật sản phẩm| :shop",
        'title' => "Cập nhật về tình trạng sản phẩm - 24 giờ qua",
        'message' => "Tôi hy vọng tin nhắn này đến được với bạn. Đây là bản cập nhật ngắn gọn để thông báo cho bạn về trạng thái sản phẩm của bạn trên nền tảng của chúng tôi trong 24 giờ qua.\nTrong thời gian này, đã có những thay đổi về trạng thái của một số sản phẩm. Những thay đổi này có thể là do mua hàng, cập nhật hàng trong kho hoặc các sự kiện liên quan khác.\nĐể biết thêm thông tin chi tiết về từng sản phẩm, vui lòng đăng nhập vào tài khoản của bạn và kiểm tra phần 'Trạng thái sản phẩm'.",
        'action' => "Mở Bảng điều khiển nhà cung cấp",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Đã nhận được đơn đặt hàng số lượng lớn| :shop | :date",
        'title' => "Thông báo đơn đặt hàng số lượng lớn",
        'message' => "Bạn đã nhận được một loạt đơn đặt hàng số lượng lớn. Vui lòng truy cập trang xử lý đơn hàng trong bảng điều khiển của bạn để biết thêm chi tiết. Bạn cũng có thể tải xuống danh sách đơn hàng thông qua liên kết an toàn được cung cấp, có giá trị trong 7 ngày.<br><br>\n        <b>QUAN TRỌNG:</b> Liên kết này có hiệu lực trong 7 ngày.<br>\n        Liên kết này rất linh hoạt nên mỗi khi bạn nhấp vào nó, bạn sẽ nhận được các đơn hàng cập nhật nhất cho ngày cụ thể này. <b>Điều đó có nghĩa là nếu trạng thái thanh toán đơn hàng thay đổi thành bị từ chối, bạn sẽ không còn thấy đơn hàng đó trong CSV đã tải xuống hoặc nếu đơn hàng đã được thanh toán, đơn hàng đó sẽ xuất hiện trong danh sách.</b><br><br>\n        <ul>\n            <li>CSV chứa các đơn hàng đã thanh toán có ngày đặt trước trong :date.</li>\n            <li>Reserved date là ngày người dùng nhấp vào thanh toán trên trang đặt hàng.</li>\n        </ul>\n        <b>Để tránh trùng lặp đơn hàng, hãy luôn kiểm tra Đơn hàng ID trước khi gửi.</b>",
        'action' => "Tải xuống danh sách đơn hàng",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Một số mặt hàng trong đơn đặt hàng của bạn không được chấp nhận và không thể giao được. Số tiền cho những mặt hàng này sẽ sớm được hoàn lại vào thẻ của bạn."
    ]

];
