<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Phạm vi quản trị viên Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Hạn chế quyền truy cập của nhà đầu tư.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Đọc chi tiết hồ sơ người dùng.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Đọc số điện thoại.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Đọc và cập nhật địa chỉ đã lưu.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Cập nhật hồ sơ người dùng.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Đặt hàng.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Xem lịch sử đặt hàng.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Truy cập thẻ quà tặng.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Chỉnh sửa bài viết.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Quản lý thông báo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Xem danh sách cửa hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Chỉnh sửa chi tiết cửa hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Thêm cửa hàng mới.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Xóa cửa hàng.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Quản lý phiếu hỗ trợ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Quản lý thẻ quà tặng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Xem thẻ quà tặng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Quản lý câu hỏi thường gặp.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Xem câu hỏi thường gặp.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Quản lý danh mục.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Xem danh mục.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Quản lý sản phẩm.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Xem sản phẩm.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Xem báo cáo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Quản lý các tài khoản tài chính.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Xem tài khoản tài chính.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Chỉnh sửa trang cửa hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Xem các trang cửa hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Quản lý kho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Xem kho.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Quản lý quyền truy cập của nhân viên.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Xem quyền truy cập của nhân viên.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Xem đơn đặt hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Quản lý đơn đặt hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Quản lý hồ sơ doanh nghiệp.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Xem hồ sơ doanh nghiệp.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Quản lý mã giảm giá.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Xem mã giảm giá.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Quản lý phiếu giảm giá.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Xem phiếu giảm giá.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Quản lý ưu đãi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Xem ưu đãi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Quản lý tiền hoàn lại.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Xem hoàn tiền.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Quản lý xổ số.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Xem xổ số.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Quản lý cộng đồng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Xem cộng đồng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Quản lý khách hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Xem khách hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Quản lý đăng ký.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Xem đăng ký.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Xem đơn đặt hàng của nhà cung cấp.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Quản lý đơn đặt hàng và thanh toán của nhà cung cấp.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Quản lý nhà cung cấp kết nối.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Xem các nhà cung cấp kết nối.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Thực hiện các lệnh AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Xem thông tin AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Quản lý thanh toán của nhà cung cấp.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Xem thanh toán của nhà cung cấp.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Xem hồ sơ doanh nghiệp.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Quản lý hồ sơ doanh nghiệp.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Xem thông tin đại lý.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Quản lý thông tin đại lý.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Xem ghi chú cửa hàng.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Quản lý ghi chú cửa hàng.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Xem tài sản của nhà phát triển.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Quản lý tài sản của nhà phát triển.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Truy cập thông tin cá nhân và cài đặt tài khoản.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Quản lý ví và giao dịch.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Xem giao dịch ví.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Xem mã thông báo và khách hàng OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Quản lý mã thông báo và khách hàng OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Quản lý cài đặt bảo mật.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Quản lý các chi nhánh.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Xem các chi nhánh.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Quản lý mẫu in.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Xem mẫu in.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Quản lý đánh giá.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Xem đánh giá.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Xem thông tin kiếm tiền.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Quản lý thông tin kiếm tiền.',



    'profile' => 'Đọc thông tin hồ sơ bao gồm tên, địa chỉ email, hình ảnh và trạng thái xác thực.',
    'phone' => 'Số điện thoại liên hệ',
    'address' => 'Đọc và chỉnh sửa địa chỉ từ sổ địa chỉ đã lưu',
    'buy' => 'Đặt hàng & Mua sắm Đặt hàng.',
    'order-history' => 'Đọc lịch sử đặt hàng.',
    'my-gift-cards' => 'Truy cập vào thẻ quà tặng của tôi.',
    'articles' => 'Chỉnh sửa các bài báo.',
    'notifications' => 'Gửi và nhận thông báo.',
    'read-shops' => 'Đọc Danh sách Cửa hàng.',
    'shop-edit' => 'Truy cập chỉnh sửa cửa hàng.',
    'shop-contacts' => 'Nhận và chỉnh sửa các biểu mẫu liên hệ.',
    'shop-gift-cards' => 'Tạo, chỉnh sửa và quản lý thẻ.',
    'shop-faqs' => 'Tạo, chỉnh sửa và quản lý các câu hỏi thường gặp.',
    'shop-categories' => 'Tạo, chỉnh sửa và quản lý danh mục.',
    'backoffice-write-products' => 'Cho phép tạo, chỉnh sửa và quản lý sản phẩm ở văn phòng.',
    'backoffice-read-products' => 'Cho phép truy cập để xem danh sách sản phẩm và thông tin chi tiết về sản phẩm trong phần quản trị.',
    'shop-read-reports' => 'Đọc thông tin và báo cáo.',
    'shop-socials' => 'Chỉnh sửa mạng xã hội của cửa hàng.',
    'shop-accounts' => 'Chỉnh sửa và xóa các tài khoản tài chính được liên kết với cửa hàng.',
    'shop-menus' => 'Chỉnh sửa menu cửa hàng.',
    'shop-pages' => 'Chỉnh sửa trang cửa hàng.',
    'shop-warehouse' => 'Chỉnh sửa Kho cửa hàng',
    'shop-permissions' => 'Xem và chỉnh sửa quyền truy cập cửa hàng.',
    'shop-process-center' => 'Quản lý các đơn hàng đã nhận.',
    'shop-profile' => 'Quản lý hồ sơ cửa hàng.',
    'shop-discount-code' => 'Quản lý mã giảm giá.',
    'shop-coupon' => 'Quản lý phiếu giảm giá.',
    'shop-offer' => 'Quản lý phiếu mua hàng.',
    'shop-cashback' => 'Quản lý tiền hoàn lại.',
    'shop-lottery' => 'Quản lý xổ số.',
    'shop-community' => 'Quản lý cộng đồng.',
    'shop-customers' => 'Quản lý khách hàng.',
    'shop-ribbon' => 'Quản lý đăng ký Ribbon.',
    'community-read' => 'Đọc cộng đồng Selldone.',
    'community-write' => 'Viết cộng đồng selldone.',
    'profile-write' => 'Viết thông tin hồ sơ người dùng.',
    'vendor-read' => 'Truy cập vào các hành động thực hiện đơn hàng của nhà cung cấp.',
    'vendor-write' => 'Thay đổi đơn hàng, thanh toán và thông tin khác của nhà cung cấp.',
    'connect-providers' => 'Thêm, đọc và ghi kết nối nhà cung cấp.',
    'personal-identification' => 'Đọc thông tin cá nhân, quyền truy cập và cấu hình tài khoản.',
    'accounts' => 'Truy cập vào ví, đọc lịch sử giao dịch và nạp tiền.',
    'shop-add' => 'Thêm cửa hàng mới.',
    'shop-delete' => 'Xóa một cửa hàng.',
    'shop-ai-write' => 'Cho phép người dùng thực hiện các lệnh AI.',
    'shop-ai-read' => 'Cho phép người dùng truy cập thông tin AI mà không cần thực hiện lệnh.',
    'vendor-payment' => 'Cho phép người dùng thêm hồ sơ thanh toán cho nhà cung cấp hoặc chuyển tiền thông qua tài khoản được kết nối của họ như Stripe Connect.',
    'company-read' => 'Cho phép đọc thông tin hồ sơ doanh nghiệp.',
    'company-write' => 'Cho phép đọc và ghi thông tin hồ sơ doanh nghiệp.',
    'agency-read' => 'Cho phép đọc thông tin cơ quan.',
    'agency-write' => 'Cho phép đọc và ghi thông tin cơ quan.',
    'note-read' => 'Cho phép đọc ghi chú cửa hàng.',
    'note-write' => 'Cho phép đọc và ghi chú cửa hàng.',
    'developer-read' => 'Cho phép đọc tài sản của nhà phát triển.',
    'developer-write' => 'Cho phép đọc và ghi tài sản của nhà phát triển.',
    'tokens-read' => 'Đọc mã thông báo và ứng dụng khách Oauth.',
    'tokens-write' => 'Viết mã thông báo và ứng dụng khách Oauth.',
];
