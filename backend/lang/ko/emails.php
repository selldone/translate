<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => '이 메시지는 상점에 새로운 구매자를 환영하는 것입니다.',
        ShopMailTemplateCodes::OrderCheckout => '이 알림은 구매자가 주문을 확인할 때 전송됩니다.',
        ShopMailTemplateCodes::OrderPayment => '이 알림은 고객의 성공적인 결제를 확인합니다.',
        ShopMailTemplateCodes::OrderUpdate => '이 메시지는 구매자에게 주문 상태를 업데이트하기 위해 전송됩니다.',

        ShopMailTemplateCodes::OrderPaymentAdmin => '이 메시지는 확인된 주문을 알리기 위해 판매자에게 전송됩니다.',
        ShopMailTemplateCodes::PosCheckout => '이 알림은 구매자의 POS 주문을 확인하기 위해 전송됩니다.',
        ShopMailTemplateCodes::PosPayment => '이 알림은 구매자가 결제한 POS 결제를 확인합니다.',
        ShopMailTemplateCodes::PosPaymentAdmin => '이 메시지는 판매자에게 판매 시점에 구매가 이루어졌음을 알려줍니다.',
        ShopMailTemplateCodes::ShopContact => '이 알림은 문의 양식이 제출되면 전송됩니다.',
        ShopMailTemplateCodes::ShopGiftCard => '이 알림은 사용자에게 기프트 카드를 받았음을 알려줍니다.',

        ShopMailTemplateCodes::ShopVendorJoin => '이 메시지는 상점에 새로운 상인을 환영하는 것입니다.',
        ShopMailTemplateCodes::ShopVendorInvite => "이 메시지는 공급업체를 마켓플레이스에 참여하도록 초대하기 위해 발송됩니다.",
        ShopMailTemplateCodes::ShopVendorOrder => "이 메시지는 지불 완료 또는 대금 상환(COD) 상태로 주문이 수신될 때 공급업체에 전송됩니다.",
        ShopMailTemplateCodes::ShopVendorProducts => "공급업체에 제품 상태를 업데이트하기 위해 매일 발송됩니다.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "이 메시지는 귀하의 마켓플레이스에 참여하도록 공급업체를 초대하기 위해 전송됩니다.",

        ShopMailTemplateCodes::UserLogin => "보안을 위해 IP 주소, 날짜, 기기 등 로그인 정보를 사용자에게 알려주세요.",
        ShopMailTemplateCodes::LoginCode => "사용자가 스토어에 로그인할 수 있도록 일회용 비밀번호 코드를 보냅니다.",

        ShopMailTemplateCodes::EmailVerifyLink => "사용자의 이메일 주소를 확인하기 위한 링크를 보냅니다. 이 이메일은 사용자가 SMS로 등록하고 이메일을 입력하면 전송됩니다. 이용자가 소셜 로그인이나 이메일로 직접 가입하는 경우에는 발송되지 않습니다.",

        ShopMailTemplateCodes::EmailBulkOrder => "특정 날짜에 접수 및 결제된 주문 목록을 대량으로 보냅니다."


    ,

    ],


    'global' => [
        'greetings' => '안녕하세요, :name입니다!',
        'end-statement' => '지원팀',

        'receiver_name' => '안녕하세요 :user_name',
        'footer-help' => "도움이 필요하신가요? [support@selldone.com](mailto:support@selldone.com)로 문의하거나 [도움말 센터](https://selldone.com/community)를 방문하세요.",
        'selldone-team' => 'Selldone 팀',
        'footer-shop' => "도움이 필요하시면 주저하지 마시고 이메일을 보내주세요: :shop_mail",
        'accept' => "수용하다",
        'reject' => "거부하다",
        'verify' => "확인하다",
        'title' => "제목",
        'value' => "값",
        'description' => "설명",
        'shop' => "가게",
        'shop-info' => "매장정보",
        'user' => "사용자",
        'user-info' => "계정 정보",
        'license' => "특허",
        'status' => "상태",
        'start' => "시작",
        'end' => "끝",
        'renewal' => "갱신",
        'view' => "보다",

        'balance' => "균형",
        'card_number' => "카드 번호",
        'cvv' => "이력서",
        'expire_date' => "만료일",

        'Dashboard' => "대시보드",
        'order' => "주문하다",
        'view_order' => "주문보기",
        'pay_now' => "Pay now",

        'official_selldone' => "공식 판매",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "통화",
        'free-balance' => "무료 잔액",
        'locked-balance' => "잠긴 잔액",
        'bot' => "봇",
        'requests' => "요청",
        'baskets' => '카트',
        'physical' => "물리적",
        'virtual' => "가상",
        'file' => "파일",
        'service' => "서비스",
        'fulfillment' => "이행",
        'open' => "열려 있는",
        'reserved' => "예약된",
        'canceled' => "취소 된",
        'payed' => "유급의",
        'cod' => "COD",
        'orders-count' => '명령',
        'payments-count' => '지불',
        'confirms-count' => '확인',
        'sends-count' => '보내다',
        'delivers-count' => '배달하다',
        'count' => '세다',
        'transactions-count' => '거래 수',
        'success-transactions' => '성공적인 거래',
        'total-amount' => '총액',
        'amount' => '양',
        'wage' => '값',
        'debug' => '디버그',
        'pos' => 'POS',
        'live' => '살다',
        'CheckQueue' => '대기열 확인',
        'OrderConfirm' => '주문 확인',
        'PreparingOrder' => '주문 준비 중',
        'SentOrder' => '보낸 주문',
        'ToCustomer' => '고객에게 배송됨',
        'Pending' => '보류 중',
        'Accepted' => '수락됨',
        'Rejected' => '거부됨',
        'pc' => 'PC',
        'tablet' => '태블릿',
        'phone' => '핸드폰',
        'total' => '총',
        'view-detail' => '자세히보기',
        'empty' => '비어 있는',
        'dropshipping' => '하락 선박',
        'reply' => '회신하다',
        'reactions' => '반응',
        'Comments' => '댓글',
        'last-comment' => '마지막 댓글',
        'response-to' => '에 대한 응답',
        'posts' => '게시물',
        'post' => '게시하다',

        'name' => '이름',
        'email' => '이메일',
        'type' => '유형',
        'device' => '장치',
        'platform' => '플랫폼',
        'browser' => '브라우저',
        'time' => '시간',
        'Wallet' => '지갑',
        'date' => '날짜',

        'account' => '계정',
        'transaction' => '거래',
        'fee' => '요금',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => '청구서',
        'category' => '범주',
        'password' => '비밀번호',
        'verify-login' => "확인 및 로그인",
        'url' => 'URL',
        'avocado' => '아보카도',
        'hyper' => '하이퍼',
        'buy-now' => "지금 구매",
        'add-domain' => "Add Domain",
        'views' => '견해',


        'country' => '국가',
        'address' => '주소',
        'postal' => '우편 번호',
        'building_no' => '건물 #',
        'building_unit' => '단위 #',
        'message' => '메시지',


        'customer' => '고객',
        'cart-items' => '장바구니 항목',
        'payment' => '지불',
        'receiver' => '수화기',
        'virtual-items' => '가상 아이템',
        'no-payment' => '무료!',

        'enable' => '할 수 있게 하다',
        'access' => '접속하다',
        'bank' => '은행 정보',

        'vendor' => '공급업체',

        'view_content' => "전체 내용 보기",
        'files' => '파일',
        'download' => '다운로드',
        'file_name' => '파일 이름',
        'file_size' => '크기',

        'subscription' => '신청',
        'products' => '제품',
        'vendor_products' => '공급업체 제품',

        'pickup' => '픽업',

        'minutes' => '분',
        'hours' => '시간',

        'refund' => '환불',
        'recipient_address' => '수취인 주소',
        'signature' => '서명',
        'blockchain' => '블록체인',
        'details' => '세부정보',


    

        'Shop' => '가게',
        'dashboard' => '계기반',
        'comments' => '코멘트',
        'wallet' => '지갑',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone 비즈니스 OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => '실적 보고서, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => '시즌 보고서, Selldone'
        ],
        'Onboarding' => [
            'id' => '안녕',
            'name' => 'Selldone 판매자'
        ],
        'Support' => [
            'id' => 'support',
            'name' => ':name 지원'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => '안녕',
            'name' => '커뮤니티, Selldone'
        ],
        'NewShop' => [
            'id' => '상인',
            'name' => 'Selldone 판매자'
        ],
        'Approve' => [
            'id' => '승인하다',
            'name' => 'Selldone 판매자'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => '주문관리 :name'
        ],

        'Recovery' => [
            'id' => '회복',
            'name' => 'Selldone 복구 팀'
        ],

    ],


    'bill-status' => [
        'PENDING' => '보류 중 ⌛',
        'PAYED' => '유료 ✅',
        'CANCELED' => '취소 ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => '관리자',
            'OFFICER' => '장교 및 감독관',
            'AUDITING' => '감사 관리자',
            'EMPLOYEE' => '직원',
            'PRODUCT' => '제품 관리자',
            'CONTENT' => '콘텐츠 관리자',
            'MARKETING' => '마케팅 매니저',
            'VIEWER' => '뷰어',

        ],
        'subject' => ":inviter가 귀하를 :level로 초대했습니다.| :shop",
        'category' => "직원 초청",
        'title' => "귀하는 <b>:level</b> 로 <b>:shop_name</b> 에 초대되었습니다.",
        'message' => "<b>:shop_title</b> 비즈니스 팀과 협력하라는 초대를 받았습니다. 귀하는 이 제안을 수락하거나 거부할 수 있습니다. 수락하기로 선택한 경우 Selldone 서비스에 로그인하여 결정을 확인하세요. 확인 후 매장 관리 섹션에 액세스할 수 있습니다.",

    ],

    'welcome-email' => [
        'subject' => "👋 :name를 환영합니다. Selldone를 시작해보세요!",
        'category' => 'CONGRATULATION',
        'title' => "Selldone에 오신 것을 환영합니다",
        'message' => "Selldone을 선택해 주셔서 감사합니다. 이제 글로벌 판매자와 고객, 지역 비즈니스와 기업, 개인과 기업을 연결하는 Selldone 커뮤니티의 일원이 되셨습니다! 모든 마스터 및 프로 도구는 **무료** 및 **무제한**으로 제공됩니다. 당신은 시도, 우리는 문을 엽니다, Just Do It!",

        'index' => ":step 단계.",

        'step-domain' => [
            'title' => '사용자 정의 도메인 추가',
            'message' => "시작하려면 Shop Dashboard의 설정 > 도메인 설정에서 무료로 사용자 정의 도메인을 추가하세요.",
            'action' => '내 도메인 관리',
        ],
        'step-landing' => [
            'title' => '홈 페이지를 사용자 정의하세요',
            'message' => "대시보드 > 페이지로 이동하여 홈 페이지를 개인화하세요. 랜딩 페이지를 선택하거나 새 페이지를 만드세요. 쉽고 직관적이어서 바로 작업을 시작할 수 있습니다.",
            'action' => '내 방문 페이지 사용자 정의',
        ],
        'step-payment' => [
            'title' => '결제 방법 설정',
            'message' => "귀하의 은행 계좌로 직접 지불을 수락하십시오. Stripe, PayPal 등과 같은 결제 서비스 제공업체를 연결하려면 대시보드 > 회계 > 게이트웨이로 이동하세요.",
            'action' => '결제 수단 추가',
        ],
        'step-products' => [
            'title' => '제품 추가',
            'message' => "대시보드 > 제품에서 제품과 카테고리를 쉽게 추가하세요. PC에서 파일과 폴더를 관리하는 것과 같습니다. 끌어서 놓기 방식이 완벽하게 준비되어 있습니다. Excel을 사용하여 제품을 대량으로 가져올 수도 있습니다. 시작하는 데 도움이 되는 샘플 템플릿이 제공됩니다.",
            'action' => '내 제품 관리',
        ],
        'step-shipping' => [
            'title' => '배송 방법 설정',
            'message' => "고객에게 배송비를 청구하려면 대시보드 > 물류 > 배송에서 배송 방법을 정의하세요. 다양한 위치에 대해 서로 다른 가격과 지원을 설정할 수 있습니다. 대시보드 > 물류 > 창고에서 창고 출발지를 설정하는 것을 잊지 마세요.",
            'action' => '배송 방법 관리',
        ],
    

        'seller' => [
            'title' => '당신은 판매자입니까?',
            'message' => '판매를 시작하려면 아래 링크를 통해 Selldone에 대시보드를 입력하고 첫 번째 상점을 완전 무료로 만드십시오. 이 작업은 몇 분 정도 소요되며 자신만의 상점과 온라인 사이트를 갖게 됩니다. 그런 다음 다음 단계로 안내하고 지불 게이트웨이를 얻습니다.',
            'action' => '내 대시보드에 로그인',
        ],
        'buyer' => [
            'title' => '나는 구매자입니다',
            'message' => '축하합니다. Selldone의 회원이 되시면 온라인 상점에서 회원가입 및 인증의 번거로움을 모두 없애실 수 있습니다. Selldone 플랫폼을 사용하는 모든 상점과 사이트에서 혜택을 받으려면 클릭 한 번으로 로그인하여 간편하고 빠르고 안전하게 구매할 수 있습니다.',
        ],
    ],


    'charge-account' => [
        'category' => '지갑 > 계정 > 청구',
        'title' => "성공 충전",
        'message' => "귀하의 계정 <b>:account_number</b>에 <b>:amount</b>가 성공적으로 청구되었습니다.",
        'account' => '계정',
        'charge' => '요금',
        'balance' => '균형',
        'footer' => "전 세계 모든 사람이 비즈니스를 쉽고 달성 가능하며 액세스할 수 있도록 합니다."
    ],

    'verify-email' => [
        'subject' => "🙌 Selldone 가입을 완료하세요! 링크를 확인합니다.",
        'category' => "당신은 한 걸음 떨어져 있습니다",
        'title' => "이메일 주소를 확인",
        'message' => "안녕하세요, :name,<br><br>Selldone를 선택해 주셔서 감사합니다!<br><br><b>:email</b>가 올바른 이메일 주소인지 확인하려면 아래 버튼을 클릭하거나 제공된 링크를 사용하세요. 이 확인을 완료하는 데 48시간이 주어집니다.",
        'footer' => "확인 버튼을 클릭하는 데 문제가 있는 경우 아래 URL를 복사하여 웹 브라우저에 붙여넣으세요. :activation_url",
        'next-step' => "다음으로, 맞춤 도메인 추가, 결제 설정, 제품 추가 및 첫 주문을 쉽게 수행할 수 있도록 몇 가지 유용한 자료와 단계별 가이드를 보내드리겠습니다.",

    ],
    'verify-email-code' => [
        'subject' => ":name에 대한 인증 코드",
        'category' => "SECURITY",
        'title' => "이메일 인증 코드",
        'message' => "안녕하세요 :name,<br><br><b>:email</b>가 올바른 이메일 주소인지 확인하려면 다음 <b>10분</b> 내에 다음 코드를 입력하세요.",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 귀하의 매장이 준비되었습니다| :name",
        'category' => "당신은 한 걸음 떨어져 있습니다",
        'title' => "설정 완료",
        'account_title' => "귀하의 계정",
        'account_msg' => "이 정보로 계정을 확인하고 로그인하세요.",
        'shop_msg' => "Selldone 비즈니스 운영 체제에 대한 계정 정보입니다.",

    ],

    'reset2fa' => [
        'category' => "보안 공식 메시지",
        'title' => "2단계 로그인 비활성화 요청",
        'message' => "이 이메일은 **:email** 이메일로 **:name** 계정에 대한 2단계 인증 재설정 요청을 받았기 때문에 발송되었습니다.<br><br>귀하의 계정에 대해 다음 세부정보가 확인되었습니다.",
        'footer' => "비밀번호 재설정을 요청하지 않은 경우 추가 조치가 필요하지 않습니다.",
        'action' => '2단계 로그인 비활성화',
    ],


    'build-new-shop' => [
        'subject' => "🎊 이제 상점이 준비되었습니다!",
        'category' => "세계에서 새로운 온라인 스토어 탄생",
        'title' => ":name 축하드립니다!",
        'message' => "<b>:name님, 축하드립니다! 귀하의 새로운 온라인 비즈니스가 이제 시작되었습니다!</b> Selldoners 커뮤니티에 오신 것을 환영합니다. 귀하는 성공을 향한 첫 걸음을 내디뎠으며, 우리는 그 모든 단계에서 귀하를 도와드릴 것입니다.<br>이제 귀하의 매장이 준비되었으므로 고객으로부터 직접 지불금을 받을 수 있도록 설정하고 귀하의 제국을 성장시키십시오. 도움이 필요하시면 메시지 한 번만 보내주세요. 지원팀이 항상 도와드리겠습니다.<br><br><b>I중요한 다음 단계:</b> 시작하려면 지불금 수령과 원활한 운영을 위한 모든 준비가 완료되었는지 확인하세요. 매장이 원활하게 운영될 수 있도록 각 단계를 안내해 드립니다.",
        'pdf-book' => "첨부된 핸드북을 놓치지 마세요: Do Your Business Like A Game",

        'account' => [
            'title' => '1단계: Selldone 지갑에서 계정 생성',
            'message' => "시작하려면 Selldone 지갑에 계정을 만드세요. 여기에서 수수료가 공제되며 매장을 원활하게 운영하기 위해 충전할 수 있는 곳이기도 합니다. 잔고가 마이너스가 되어도 걱정하지 마세요! 귀하의 매장은 중단 없이 계속 운영됩니다.",
            'action' => '지갑에 로그인',
        ],

        'shop-account' => [
            'title' => '2단계: 계정을 스토어에 연결',
            'message' => "다음으로 지갑 계정을 매장에 연결하세요. <b>Store > Accounting > Invoice</b>로 이동하여 지갑을 연결하세요. 이렇게 하면 모든 고객 지불금이 귀하의 은행 계좌에 직접 입금됩니다. Selldone는 귀하의 수입에서 어떤 금액도 공제하지 않습니다.",
            'action' => '스토어 인보이스 패널',
        ],

        'gateway' => [
            'title' => '3단계: 온라인 결제 게이트웨이 연결',
            'message' => "이제 온라인 결제 게이트웨이를 설정해 보겠습니다. <b>Store > 회계 > Port</b>로 이동하여 <b>새 Port</b> 추가를 클릭하세요. 통화를 선택하면 사용 가능한 결제 대행사 목록이 표시됩니다. 게이트웨이 연결은 빠르고 쉽습니다. 도움이 필요한 경우 언제든지 Selldone 가이드를 확인하거나 당사에 문의하세요.",
            'action' => '상점에 포털 추가',
        ],

        'domain' => [
            'title' => '마지막 단계: 전용 도메인 연결',
            'message' => "원하는 만큼 많은 도메인에 상점을 가질 수 있습니다. 전용 도메인을 상점에 연결하려면 최소한 시작 라이선스가 있어야 합니다. 각 친구를 Selldone에 소개하면 1개월 스타트업 라이선스 기프트 카드를 받게 됩니다. 친구가 지불한 금액의 일정 비율이 고객의 계정에도 적립됩니다.",
            'action' => '무제한 기프트 카드 소개 및 받기',
        ],
    ],


    'basket-list' => [
        'item' => "안건",
        'count' => "세다",
        'price' => "가격",
        'discount-code' => "할인 코드",
        'customer-club' => '고객 클럽',
        'shipping' => "배송",
        'total' => "총",
        'offer' => "권하다",
        'coupon' => "쿠폰",
        'lottery' => "상",
        'tax' => "세",
        'tax_included' => "가격에 포함",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => '방법',
        'amount' => '양',
        'giftcard' => 'Gift card',
        'payment' => '지불',
    ],


    'shop-subscription-email' => [
        'category' => "구독 업데이트",
        'title' => "스토어 라이선스: :shop_title",
        'title-reserved' => "라이선스 예약: :shop_title",
        'title-active' => "활성 라이선스: :shop_title",
        'title-finished' => "라이센스 완료: :shop_title",
        'title-cancel' => "라이선스 취소: :shop_title",
        'message' => "상점 라이센스 계획이 업데이트되었습니다.",
        'RESERVED' => "⚡ 구독 계획이 **예약**되었습니다.",
        'ACTIVE' => "🟢 구독 요금제가 **활성화되었습니다**.",
        'FINISHED' => "🚧 구독 계획이 **종료되었습니다**.",
        'CANCEL' => "⛔ 구독 계획이 **취소**되었습니다.",
    ],

    'support' => [
        'subject' => "지원 센터|:name가 대답했습니다",
        'category' => "지원 센터",
        'title' => "응답을 받았습니다.",
        'action' => "상점 관리자 열기",
    ],

    'shop-customer-join' => [
        'subject' => "가입하기 :shop_title",
        'category' => "신규 고객 축하",
        'title' => "우리는 당신의 회원을 기쁘게 생각합니다",
        'action' => "지금 방문",
    ],

    'shop-vendor-join' => [
        'subject' => "공급업체 온보딩 | :shop_title",
        'category' => "새로운 공급업체 축하",
        'title' => "우리는 당신의 회원을 기쁘게 생각합니다",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "기프트 카드:shop_title",
        'category' => "새 카드 추가",
        'title' => "축하합니다, 당신은 기프트 카드를 받았습니다",
        'action' => "지금 쇼핑하기",
        'message' => ":balance :currency의 기프트 카드를 받았습니다. 이 기프트 카드로 저희 매장에서 구매하실 수 있습니다.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "지원 센터| :shop",
        'category' => "지원하다",
        'title' => "응답을 받았습니다.",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ 주문 확인|:order_id 주문",
        'title' => "주문하다",
        'message' => "저희 매장에서 주문을 하셨습니다. 귀하의 주문이 접수되었으며 결제가 확인되면 다른 이메일을 보내드리겠습니다."
    ,

        'payments' => '지불',
    ],

    'order-payment' => [
        'subject' => "🛍️ 결제 확인|:order_id 주문",
        'title' => "지불 주문",
        'message' => "결제 완료,<br> 주문이 접수되었습니다. 주문 상품이 배송되면 다른 이메일을 보내드리겠습니다.",
    

        'payments' => '지불',
    ],

    'order-update' => [
        'subject' => "🛍️ 주문 상태 업데이트|:order_id 주문",
        'title' => "주문 상태 업데이트",
        'message' => "주문이 업데이트되었습니다. 귀하의 계정에서 이 주문의 최신 상태를 확인할 수 있습니다.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "귀하의 주문이 처리 대기열에 있습니다. 준비가 되면 알려드리겠습니다.",
                'OrderConfirm' => "주문이 확인되었으며 준비가 시작되었습니다.",
                'PreparingOrder' => "귀하의 주문이 준비 중이며 곧 배송될 예정입니다.",
                'SentOrder' => "귀하의 주문이 배송되었습니다. 곧 받으실 수 있습니다.",
                'ToCustomer' => "귀하의 주문이 배송되었습니다. 우리는 당신이 그것을 즐기시기 바랍니다!",

                'PreparingOrder-PICKUP' => "귀하의 주문이 준비 중입니다. 픽업 준비가 되면 알림을 받게 됩니다.",
                'SentOrder-PICKUP' => "주문하신 상품을 픽업할 준비가 되었습니다. 매장에 오셔서 수령하시기 바랍니다.",
                'ToCustomer-PICKUP' => "귀하의 주문이 픽업되었습니다. 우리는 당신이 그것을 즐기시기 바랍니다!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "귀하의 주문이 처리 대기열에 있습니다. 준비가 되면 알려드리겠습니다.",
                'OrderConfirm' => "주문이 확인되었으며 준비가 진행 중입니다.",
                'PreparingOrder' => "귀하의 주문이 준비 중이며 곧 발송될 것입니다.",
                'ToCustomer' => "귀하의 가상 주문이 귀하의 계정으로 전달되었습니다. 감사합니다!"
            ],
            'SERVICE' => [
                'CheckQueue' => "귀하의 서비스 요청이 대기열에 있습니다. 시작하면 알려드리겠습니다.",
                'OrderConfirm' => "귀하의 서비스가 확인되었으며 시작 준비 중입니다.",
                'PreparingOrder' => "서비스를 준비 중이며 완료되면 알려드리겠습니다.",
                'ToCustomer' => "귀하의 서비스가 완료되었습니다. 우리를 선택해 주셔서 감사합니다!"
            ],
            'FILE' => [
                'PreparingOrder' => "파일을 준비 중이며 곧 제공될 예정입니다.",
                'ToCustomer' => "파일이 준비되어 전달되었습니다. 이제 다운로드할 수 있습니다."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "구독 주문이 대기열에 있습니다. 처리가 시작되면 알려드리겠습니다.",
                'OrderConfirm' => "구독이 확인되었으며 설정 중입니다.",
                'PreparingOrder' => "귀하의 구독을 준비 중이며 곧 시작됩니다.",
                'SentOrder' => "귀하의 구독이 활성화되었습니다. 지속적인 업데이트를 받게 됩니다.",
                'ToCustomer' => "구독 서비스가 성공적으로 활성화되었습니다."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => ':name 축하드립니다|신규 바우처: :title',
        'category' => "축하합니다, 새로운 바우처",
        'message' => "안녕하세요 :name,<br><br>저희로부터 새로운 상품권을 선물로 받았습니다! 친구와 아는 모든 사람에게 Selldone를 소개하면 더 많은 상품권을 얻을 수 있습니다. 이 바우처의 가치는 **:price :currency**.<br><br>첫 번째 단계를 완료했으며 바우처로 새로운 기능을 잠금 해제할 수 있도록 도와드리겠습니다! **:email**로 로그인하고 상점 **대시보드** > **설정** > **라이센스**에서 바우처를 찾으세요.<br><br>축하합니다!",
        'action' => "내 대시 보드",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => '축하합니다, 친애하는 :name | 당신은 선물을 받았습니다',
        'category' => "선물 수령 알림",
        'title' => "당신을 위한 선물",
        'message' => ":name님, 안녕하세요. Selldone로부터 특별한 선물을 받았다는 소식을 알려드리게 되어 기쁩니다! 🎉 Selldone에 대한 활동을 유지하고, 매장을 성장시키고, 전문성을 향상시키면 더 많은 선물을 얻을 수 있습니다. 선물을 확인하려면 :email로 로그인하여 대시보드 오른쪽 상단에서 찾아보세요.<br><br>이 선물은 **:price :currency** 가치가 있으며, Selldone 내 지갑에 쉽게 입금할 수 있습니다.<br><br>선물을 사용하여 매장 라이선스를 업그레이드하고 온라인 비즈니스를 강화할 더욱 강력한 도구를 잠금해제하세요!",
        'action' => "선물",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ 새로운 주문 접수됨| :order_id",
        'title' => "New Order",
        'message' => "새로운 주문을 받았습니다. 스토어의 주문 처리 페이지로 이동하십시오.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => '채워진 정보',
        'output-form-title' => '구매한 아이템 정보',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|주간 보고서 :time',
        'title' => '주간 매장 실적 보고서',
        'message' => "<b>:start</b>부터 <b>:end</b>까지의 매장 주간 보고서입니다. 이 보고서에는 비즈니스 개선을 위한 팁이 포함되어 있으며 온라인 상점 및 최근 주문 상태를 확인할 수도 있습니다. 앞으로 좋은 하루와 한 주 보내시기 바랍니다."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ 지난 3개월간 귀하의 :amount 저축 보고서| :shop_title',
        'title' => '비즈니스 활동, 보상 및 재정 절감에 대한 계절별 보고서',
        'message' => "<b>:start</b>부터 <b>:end</b>까지의 <b>:shop_title</b> 계절 보고서입니다."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => '연결된 계정',
        'sub-title' => '내 스토어에 연결된 지갑 계정의 최신 상태는 무엇입니까?',
        'view-wallet' => '지갑 보기',
        'tip-title' => '중요한 팁',
        'tip' => "무료 Selldone 지갑을 설정하고 매장에 연결하세요. 잔액이 마이너스인 경우에도 고객은 문제 없이 쇼핑하고 결제할 수 있습니다. 걱정하지 마세요. 매장 운영과 데이터는 최대 1개월 동안 중단 없이 원활하게 계속됩니다.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => '계정에 연결'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => '설치된 앱',
        'sub-title' => '이번 주에 스토어에 설치한 앱 목록입니다.',
        'tip' => "스토어에 더 많은 앱을 찾고 싶으신가요?",
        'view-app-store' => 'Selldone 앱 스토어를 방문하십시오..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => '스토어 봇',
        'sub-title' => '내 상점의 활성 판매 봇.',
        'tip-title' => '봇 세일',
        'tip' => "Selldone는 자동화된 판매 봇을 제공합니다. 애드온 > 봇 섹션을 방문하여 간단히 활성화하세요. 원활한 운영을 위해 해당 지역에서 필요한 서비스를 사용할 수 있는지 확인하십시오.",
        'view-bots' => '봇 관리',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => '고객과의 커뮤니케이션',
        'sub-title' => '이번 주에 고객과 얼마나 많은 접촉을 했습니까?',
        'faqs' => '자주 묻는 질문',
        'tickets' => '고객 티켓',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => '사용자 상태',
        'sub-title' => ':start에서 :end까지의 활동',
        'users' => [
            'title' => '고객',
            'subtitle' => '가입 사용자',
        ],
        'views' => [
            'title' => '방문',
            'subtitle' => '매장을 몇 번 방문했는지',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => '복귀 사용자',

        'shop_views' => '상점 보기',
        'baskets' => [
            'title' => '쇼핑 카트',
            'subtitle' => '새 장바구니 수 보고',
        ],
        'products' => [
            'title' => '제품 개요',
            'subtitle' => '종류별 매장 내 상품 현황',
            'value_name' => '제품'
        ],
        'products_count' => '제품 유형',
        'views_count' => '조회수',
        'sell_count' => '판매 수',
        'send_count' => '배송 횟수',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => '하락 선박',
        'sub-title' => '최고 Selldone 직송 판매자를 위한 메인 패널',
        'total_fulfillments' => '접수된 총 주문',
        'ds_count' => '접수된 주문',
        'statistics_title' => '접수된 주문 보고',
        'ds_cancels' => '인터페이스 판매자가 취소',
        'ds_rejects' => '귀하에 의해 취소',
        'tip' => "당신은 상품의 주요 판매자입니까? 창고, 공장 또는 제품 유통업체를 소유하고 있습니까? Selldone Drop Shipping 서비스에서 다른 판매자에게 제품을 제공하여 대규모로 제품을 판매할 수 있습니다. support@selldone.com으로 이메일을 보내 안내를 받으십시오.",
        'view-drop-shipping-panel' => '도매 패널에 로그인',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => '환율',
        'sub-title' => '상점의 최신 통화 변환율 목록입니다.',
        'from' => '소스 통화',
        'to' => '대상 통화',
        'rate' => '전환율',
        'view-exchange-panel' => '환율 관리',
    

        'vew-exchange-panel' => '환율 관리 패널',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => '전문가 계약',
        'sub-title' => '어떤 전문가가 내 매장에서 일합니까?',
        'cost' => '계약금액',
        'duration' => '지속',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => '날짜 취소',
        'end_at' => '배송 날짜',
        'tip' => '귀하의 비즈니스 성장을 돕기 위해 Selldone의 최고 전문가를 고용하세요.',
        'view-experts' => '시작하려면 클릭하세요.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => '상점:shop에서 활성 지불 게이트웨이를 보고하십시오.',
        'tip-title' => '중요한 팁',
        'tip' => "상점의 포털 관리 페이지로 이동하여 몇 분 안에 포트를 하나 이상 추가하십시오. 고객은 온라인 포털을 통해 빠르고 안전하게 결제하기를 원합니다.",
        'view-shop-gateways' => '내 스토어 포털 관리에 로그인합니다.',
        'view-gateways' => '더 많은 게이트웨이 보기',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => '명령',
        'sub-title' => '이번 주에 받은 주문 목록입니다.',
        'total_baskets' => '총 주문',
        'total_posBaskets' => '총 현금 주문',
        'pos-title' => 'POS 스토어 박스',
        'chart-label' => '완료된 주문(이 주문이 반드시 지불되는 것은 아닙니다!)',
        'tip-title' => '더 노력해야지...',
        'tip' => "단순한 성공은 없습니다.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => '처리 센터',
        'sub-title' => '이번 주에 매장에서 얼마나 많은 주문을 처리했습니까?',
        'tip-title' => '당신은 판매를하지 않았다!',
        'tip' => "불행히도 이번 주에는 판매가 없었습니다. 당신은 당신의 상점에 더 많은 것을 얻을 필요가 있습니다. 더 많은 제품을 추가하거나 더 나은 이미지를 선택하거나 제품에 대한 더 나은 설명을 작성할 수 있습니다. 귀하의 비즈니스를 위해 정규직을 고려하십시오. 제대로 하고 좌절하지 않으면 성공할 것입니다.",
        'view-process-center' => '프로세스 센터 보기',
        'return' => [
            'title' => '반품된 주문',
            'subtitle' => '반품된 주문을 보고합니다.',
            'tip-title' => '당신은 알고 계십니까 ...',
            'tip' => "Selldone POS로 필요한 만큼 금전등록기를 생성할 수 있습니다! 태블릿, 모바일, 노트북 등 모든 장치를 매장의 POS로 전환할 수 있습니다. 간단하고 빠르게 설정할 수 있으며 서버에 완벽하게 준비되어 있습니다. 오늘 바로 사용해 보세요!",
            'view-pos' => '내 온라인 스토어 캐셔에 로그인'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => '세션',
        'sub-title' => '내 가게를 몇 번이나 방문했습니까?',
        'countries-title' => '가장 많이 방문한 국가는 어디입니까?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => '한 푼도 쓰지 않고 돈을 벌고 싶습니까?',
        'message' => "친애하는 :name 님, 대시보드 > 수익 창출 중단으로 이동하여 추천 링크를 만들 수 있습니다. 친구에게 링크를 보내면 Selldone 기프트 카드와 친구 지불금의 일정 비율을 받게 됩니다. 기프트 카드는 귀하와 귀하의 친구 모두에게 발송됩니다.",
        'action' => '내 소개 링크 보기',
        'mail-clip' => "<b style='color: #C2185B'>중요:</b> 이메일 길이를 제한하는 Gmail과 같은 이메일 서비스를 사용하는 경우 이메일 끝에 다음 옵션을 찾아 전체 보고서를 표시하고 클릭하십시오.",

        'no-coin-reward' => "<b style='color: #C2185B'>죄송합니다:</b> 귀하의 활동은 무료 SEL 코인 보상을 받기 위한 요건을 충족하지 못했습니다. 다음 시즌을 위해 더 열심히 노력하고 상점에서 더 많이 판매하십시오.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>축하합니다:</b> 수고했어요! 귀하의 뛰어난 성과를 바탕으로 우리는 보상으로 :amount SEL 코인을 귀하의 계정에 적립했습니다.",

        'need-buy-license' => "<b>비즈니스 레벨 업:</b> 아직 웹사이트에 대한 구독 계획을 등록하지 않은 것 같습니다! 매년 지불하는 경우 월별 :amount 비용으로 더 많은 기능을 잠금 해제하려면 지금 업그레이드하세요.",
        'not-afford-message' => "지불할 여유가 없거나 결제에 문제가 있는 경우 support@selldone.com을 통해 언제든지 알려주십시오.",
        'add-domain' => "<b>귀하의 비즈니스를 위한 맞춤 도메인이 없는 이유는 무엇입니까?</b><br> 지금 웹사이트에 도메인을 추가하십시오. 그것은 무료입니다!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone는 <del>제품</del> <span style = 'color: forestgreen'> 커뮤니티입니다.</span>.<br>전문 Selldoner가 되세요!",
        'message' => "Twitter, LinkedIn 및 소셜 네트워크에서 Selldone 공식 페이지를 팔로우하세요. Selldone에 대한 의견, 요청 또는 비판을 보내거나 토론에 참여하십시오. 우리는 <b>You가 </b>를 만드는 Selldone 커뮤니티의 일부이기도 합니다."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => '새로운 아보카도 주문 접수|:shop_title :time',
        'title' => "지난 24시간 동안의 실적 보고서",
        'message' => "고객은 주문이 검토되고 가격이 책정되기를 기다리고 있습니다. 더 많은 매출을 얻으려면 가능한 한 빨리 고객의 요청에 응답하십시오.",
        'card_title' => "대기열의 주문",
        'card_subtitle' => ":date 이후",

        'card_payed' => "유료 주문"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => ':community_title의 게시물에 답글',
        'title' => ":name 및 :count 다른 사람들이 귀하의 게시물에 댓글을 달았습니다.",
        'message' => "안녕하세요 :name 님, 귀하의 게시물이 주목을 받고 있습니다! 우리 커뮤니티에서 댓글을 받았습니다. 토론에 참여하고 모든 사람의 의견을 보려면 계정에 로그인하세요.",
        'title-simple' => ":name 님이 게시물에 댓글을 달았습니다.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 주제에 대한 답글 :topic_title',
        'title' => ":name 및 :count 다른 사람들이 귀하의 주제에 응답했습니다.",
        'message' => "안녕하세요 :name님, 귀하의 주제가 주목을 받고 있습니다! 우리 커뮤니티에서 답변을 받았습니다. 토론에 참여하고 모든 사람의 의견을 보려면 계정에 로그인하세요.",
        'title-simple' => ":name이(가) 귀하의 주제에 대해 답변했습니다.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 신규 로그인 :name',
        'category' => '보안 알림',
        'title' => "계정에 로그인",
        'message' => "친애하는 :name, 귀하는 Selldone 계정에 로그인했습니다.",   // Login in selldone (seller)
        'message-shop' => "안녕하세요 :name, :shop_title에 로그인하셨습니다.",  // Login in shop (buyer)

        'footer' => "로그인이 되어 있지 않다면 비밀번호를 변경해주세요.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "철수",
        'deposit' => "보증금",

        'withdraw_subject' => "계정에서 인출:account",
        'deposit_subject' => ":account 계좌에 입금",

        'message' => "송금은 아래와 같은 사양으로 이루어졌습니다.",

        'type' => "거래 유형",

        'from' => "소스 계정",
        'to' => "Destination account",

        'desc' => "거래 설명",
        'action' => "거래 보기",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ 중요! 규칙 위반| :shop",
        'category' => "중요한 정보",
        'title' => "귀하의 상점은 처벌을 받았습니다",
        'action' => "상점 대시보드 열기",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter님이 Selldone에 가입하도록 귀하를 초대했습니다.",
        'title' => ":name가 귀하의 새로운 온라인 상점을 시작하고 수익을 창출하는 데 도움을 주기 위해 :amount를 보냈습니다!",
        'message' => "안녕하세요 **:receiver_name**,<br><br>Selldone에 오신 것을 환영합니다! Selldone에서는 전자상거래 사이트, 블로그, 온라인 커뮤니티를 쉽게 생성하고 직접 판매를 위한 온라인 POS 시스템을 설정할 수도 있습니다. 이 모든 작업이 단 몇 분 만에 가능합니다. 귀하의 비즈니스를 더 좋게, 더 빠르게, 더 쉽게 운영할 수 있도록 설계된 완전한 온라인 비즈니스 운영 체제입니다.<br><br><b>:date</b>로 가입하고 :amount 바우처를 받아 시작하세요!",
        'accept' => "초대를 수락",
        'owner' => "소유자",
        'join-date' => "Selldone에 가입했습니다.",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "복구 링크| :shop",
        'category' => "상점 보안",
        'title' => "<b>:shop_name</b> 의 스토어 복구 링크",
        'message' => "이 이메일은 스토어 복원을 요청하셨기 때문에 발송되었습니다. 아래 링크를 클릭하면 상점과 상점에 속한 모든 데이터가 복구됩니다.",
        'action' => "상점 복구 확인",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone는 귀하의 사업을 위해 얼마나 많은 돈을 절약했습니까?',
        'sub-title' => '날짜 :start부터 :end까지',
        'infrastructure' => [
            'title' => '하부 구조',
            'subtitle' => '서버, CDN, 스토리지 및 기타 클라우드 서비스',
        ],
        'experts' => [
            'title' => '전문가 및 직원',
            'subtitle' => '개발자, 유지 관리 및 지원',
        ],
        'total_save' => '총 절감액'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => '당신의 성과',
        'sub-title' => '사업개요 :start to :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => '복귀 사용자',

        'shop_views' => '상점 보기',
        'baskets' => [
            'title' => '쇼핑 카트',
            'subtitle' => '새 장바구니 수 보고',

        ],
        'products' => [
            'title' => '제품 개요',
            'subtitle' => '종류별 매장 내 상품 현황',
            'value_name' => '제품'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => '총 웹사이트 페이지 조회수',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "새로운 주문을 받았습니다. 공급업체 패널의 주문 처리 페이지로 이동하세요.",
        'subject' => "🛍️ 새로운 주문 접수됨| :order_id",
        'your_revenue' => "귀하의 수익",
    ],
    'vendor-invite' => [
        'title' => '공급업체 초대',
        'message' => ":shop_name의 공급업체가 되라는 초대장을 받았습니다. 다음 버튼을 클릭하여 수락하거나 거부할 수 있습니다.",
        'subject' => ":shop_name | 귀하께서는 당사의 공급업체가 되라는 초대를 받으셨습니다.",
        'accept' => "수락하고 공급업체가 되세요",
        'reject' => "거부하다",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => '우리 팀에 합류하라는 초대',
        'message' => ":shop_name에서 :vendor_name에 가입하도록 초대되셨습니다. 아래 버튼을 사용하여 이 초대를 수락하거나 거절할 수 있습니다.",
        'subject' => ":vendor_name 가입 초대|팀 구성원 되기",
        'accept' => "수락 및 팀에 합류",
        'reject' => "거부",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => ":shop에 대한 로그인 코드",
        'header-message' => "매장 로그인 코드를 요청하셨기 때문에 이 이메일을 보내드립니다. 아래에서 일회용 비밀번호(OTP)를 확인하세요.",
        'footer-message' => "이 코드는 10분 동안 유효합니다. 이 로그인 코드를 요청하지 않으셨다면 이 이메일을 무시하세요."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "이메일 확인 | :shop",
        'title' => '이메일 확인',
        'header-message' => "안녕하세요 :name,<br> 버튼을 클릭하거나 48시간 이내에 아래 링크를 사용하여 **:email**이 귀하의 이메일 주소인지 확인하세요.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "제품 업데이트| :shop",
        'title' => "제품 상태 업데이트 - 최근 24시간",
        'message' => "이 메시지가 당신에게 잘 전달되기를 바랍니다. 이는 지난 24시간 동안 당사 플랫폼에서 귀하의 제품 상태를 알려드리기 위한 간략한 업데이트입니다.\n해당 기간 동안 일부 상품의 상태가 변경되었습니다. 이러한 변경 사항은 구매, 재고 업데이트 또는 기타 관련 이벤트로 인해 발생할 수 있습니다.\n각 제품에 대한 자세한 내용을 보려면 계정에 로그인하여 '제품 상태' 섹션을 확인하세요.",
        'action' => "공급업체 패널 열기",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "대량 주문 접수| :shop | :date",
        'title' => "대량 주문 알림",
        'message' => "대량주문이 접수되었습니다. 자세한 내용은 패널의 주문 처리 페이지를 방문하세요. 제공된 보안 링크를 통해 주문 목록을 다운로드할 수도 있습니다. 이 링크는 7일 동안 유효합니다.<br><br>\n        <b>중요:</b> 이 링크는 7일간 유효합니다.<br>\n        이 링크는 동적이므로 클릭할 때마다 해당 날짜에 대한 최신 업데이트 주문을 받게 됩니다. <b>주문 결제 상태가 거부됨으로 변경되면 다운로드한 CSV에 해당 주문이 더 이상 표시되지 않거나, 주문이 결제되면 목록에 표시된다는 뜻입니다.</b><br><br>\n        <ul>\n            <li>CSV에는 :date.</li>에 예약 날짜가 있는 유료 주문이 포함되어 있습니다.\n            <li>예약일은 사용자가 주문 페이지에서 Checkout을 클릭한 날짜입니다.</li>\n        </ul>\n        <b>중복주문을 방지하기 위해 항상 ID 주문을 확인하신 후 발송해주세요.</b>",
        'action' => "주문 목록 다운로드",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "귀하의 주문 중 일부 품목이 승인되지 않아 배송될 수 없습니다. 해당 상품의 금액이 곧 귀하의 카드로 환불될 예정입니다."
    ]

];
