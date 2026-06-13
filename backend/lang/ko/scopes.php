<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone 관리자 범위.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => '투자자 접근이 제한됩니다.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => '사용자 프로필 세부정보를 읽어보세요.',
    AuthServiceProvider::SCOPE_USER_PHONE => '전화번호를 읽어보세요.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => '저장된 주소를 읽고 업데이트하세요.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => '사용자 프로필을 업데이트하세요.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => '주문하세요.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => '주문 내역을 봅니다.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => '기프트 카드에 액세스하세요.',

    AuthServiceProvider::SCOPE_ARTICLES => '기사를 편집하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => '알림을 관리합니다.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => '상점 목록을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => '상점 세부정보를 편집합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => '새로운 상점을 추가하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => '매장을 삭제하세요.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => '지원 티켓을 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => '기프트 카드를 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => '기프트 카드를 확인하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQ를 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQ를 확인하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => '카테고리를 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => '카테고리를 봅니다.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => '제품을 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => '제품보기',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => '보고서를 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => '금융 계좌를 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => '금융 계정을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => '상점 페이지를 편집합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => '매장 페이지를 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => '창고를 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => '창고를 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => '직원 액세스를 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => '직원 액세스를 확인하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => '주문을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => '주문을 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => '비즈니스 프로필을 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => '비즈니스 프로필을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => '할인 코드를 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => '할인 코드를 확인하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => '쿠폰을 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => '쿠폰을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => '제안을 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => '제안을 확인하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => '캐시백을 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => '캐시백을 확인하세요.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => '복권을 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => '복권을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => '커뮤니티를 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => '커뮤니티 보기',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => '고객을 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => '고객을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => '구독을 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => '구독을 봅니다.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => '공급업체 주문을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => '공급업체 주문 및 결제를 관리합니다.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => '연결 공급자를 관리합니다.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => '연결 공급자를 확인하세요.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI 명령을 실행합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI 정보를 확인하세요.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => '공급업체 결제를 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => '공급업체 지불을 확인하세요.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => '비즈니스 프로필을 봅니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => '비즈니스 프로필을 관리합니다.',

    AuthServiceProvider::SCOPE_AGENCY_READ => '대리점 정보를 확인하세요.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => '대리점 정보를 관리합니다.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => '매장 노트를 확인하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => '상점 메모를 관리합니다.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => '개발자 자산을 봅니다.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => '개발자 자산을 관리합니다.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => '개인 정보 및 계정 설정에 액세스합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => '지갑과 거래를 관리하세요.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => '지갑 거래를 확인하세요.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth 토큰 및 클라이언트를 확인하세요.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth 토큰 및 클라이언트를 관리합니다.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => '보안 설정을 관리합니다.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => '계열사를 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => '계열사를 확인하세요.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => '인쇄 템플릿을 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => '인쇄 템플릿을 봅니다.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => '리뷰를 관리합니다.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => '리뷰를 봅니다.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => '수익 창출 정보를 확인하세요.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => '수익화 정보를 관리합니다.',



    'profile' => '이름, 이메일 주소, 이미지 및 인증 상태를 포함한 프로필 정보를 읽습니다.',
    'phone' => '연락처 액세스',
    'address' => '저장된 주소록에서 주소 읽기 및 편집',
    'buy' => '주문 및 쇼핑 주문.',
    'order-history' => '주문 내역을 읽습니다.',
    'my-gift-cards' => '내 기프트 카드에 대한 접근 권한.',
    'articles' => '기사를 편집합니다.',
    'notifications' => '알림을 보내고 받습니다.',
    'read-shops' => '스토어 목록을 읽으십시오.',
    'shop-edit' => '편집 액세스 권한을 저장합니다.',
    'shop-contacts' => '연락처 양식을 수신하고 편집합니다.',
    'shop-gift-cards' => '카드 생성, 편집 및 관리.',
    'shop-faqs' => '자주 묻는 질문을 생성, 편집 및 관리합니다.',
    'shop-categories' => '카테고리 생성, 편집 및 관리.',
    'backoffice-write-products' => '백오피스에서 제품 생성, 편집 및 관리를 승인합니다.',
    'backoffice-read-products' => '백오피스에서 제품 목록과 자세한 제품 정보를 볼 수 있도록 액세스를 승인합니다.',
    'shop-read-reports' => '정보 및 보고서를 읽으십시오.',
    'shop-socials' => '상점 소셜 네트워크를 편집하십시오.',
    'shop-accounts' => '상점에 연결된 금융 계정을 편집하고 삭제합니다.',
    'shop-menus' => '상점 메뉴를 편집합니다.',
    'shop-pages' => '상점 페이지를 편집하십시오.',
    'shop-warehouse' => '상점 창고 편집',
    'shop-permissions' => '스토어 액세스를 보고 편집합니다.',
    'shop-process-center' => '접수된 주문을 관리합니다.',
    'shop-profile' => '매장 프로필을 관리합니다.',
    'shop-discount-code' => '할인 코드를 관리합니다.',
    'shop-coupon' => '쿠폰을 관리합니다.',
    'shop-offer' => '제안을 관리합니다.',
    'shop-cashback' => '캐시백을 관리하세요.',
    'shop-lottery' => '복권을 관리합니다.',
    'shop-community' => '커뮤니티를 관리합니다.',
    'shop-customers' => '고객을 관리합니다.',
    'shop-ribbon' => '리본 구독을 관리합니다.',
    'community-read' => 'Selldone 커뮤니티를 읽어보세요.',
    'community-write' => '판매된 커뮤니티에 글을 쓰세요.',
    'profile-write' => '사용자 프로필 정보를 작성하세요.',
    'vendor-read' => '공급업체 주문 이행 작업에 대한 액세스.',
    'vendor-write' => '공급업체의 주문, 지불 및 기타 정보를 변경합니다.',
    'connect-providers' => '연결 공급자를 추가, 읽고 쓰기합니다.',
    'personal-identification' => '개인 정보, 액세스 및 계정 구성을 읽습니다.',
    'accounts' => '지갑에 접근하고 거래 내역과 충전 내역을 확인합니다.',
    'shop-add' => '새로운 상점을 추가하세요.',
    'shop-delete' => '상점을 제거합니다.',
    'shop-ai-write' => '사용자가 AI 명령을 실행할 수 있습니다.',
    'shop-ai-read' => '사용자가 명령을 실행하지 않고도 AI 정보에 액세스할 수 있도록 합니다.',
    'vendor-payment' => '사용자가 공급업체에 대한 지불 기록을 추가하거나 Stripe Connect와 같은 연결된 계정을 통해 자금을 이체할 수 있습니다.',
    'company-read' => '사업체 프로필 정보를 읽을 수 있습니다.',
    'company-write' => '비즈니스 프로필 정보를 읽고 쓸 수 있습니다.',
    'agency-read' => '기관 정보를 읽을 수 있습니다.',
    'agency-write' => '기관 정보를 읽고 쓸 수 있습니다.',
    'note-read' => '매장 메모를 읽을 수 있습니다.',
    'note-write' => '매장 메모를 읽고 쓸 수 있습니다.',
    'developer-read' => '개발자 자산을 읽을 수 있도록 허용합니다.',
    'developer-write' => '개발자 자산을 읽고 쓸 수 있습니다.',
    'tokens-read' => 'Oauth 토큰과 클라이언트를 읽어보세요.',
    'tokens-write' => 'Oauth 토큰과 클라이언트를 작성합니다.',
];
