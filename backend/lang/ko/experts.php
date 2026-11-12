<?php


use App\Backoffice\Expert\enums\JobCategory;
use App\Backoffice\Expert\enums\JobTopic;

return [

    JobTopic::STORE_DESIGN => [
        'title' => '전자상거래 구축',
        'image' => '/images/experts/topics-sub/store-design.jpg',
        'desc' => '귀하의 아이디어를 구현할 수 있도록 온라인 상점의 디자인과 구성을 전문가에게 맡기십시오.',
    ],
    JobTopic::MARKETPLACE_SETUP => [
        'title' => '마켓플레이스 설정',
        'image' => '/images/experts/topics-sub/marketplace-setup.jpg',
        'desc' => '귀하의 제품과 서비스를 더 많은 청중에게 판매할 수 있는 마켓플레이스를 구축하세요.',
    ],


    JobTopic::STORE_CONFIGURATION => [
        'title' => '매장 구성',
        'image' => '/images/experts/topics-sub/store-configuration.jpg',
        'desc' => '검색 엔진에 대한 자세한 업체 정보 입력, 배송 및 보관 방법 설정 등 매장 설정에 대해 전문가의 도움을 받을 수 있습니다.',
    ],


    JobTopic::STORE_OPTIMIZATION => [
        'title' => '성능과 속도 및 개선',
        'image' => '/images/experts/topics-sub/store-optimization.jpg',
        'desc' => '전문가들이 귀하의 사이트에서 속도와 성능을 높이기 위해 노력할 것입니다.',
    ],

    JobTopic::DOMAIN => [
        'title' => '도메인 연결',
        'image' => '/images/experts/topics-sub/domain.jpg',
        'desc' => '매장과 웹사이트에 맞춤 도메인을 추가하세요.',
    ],
    JobTopic::POD_SETUP => [
        'title' => 'POD 스토어 설정',
        'image' => '/images/experts/topics-sub/pod-setup.jpg',
        'desc' => '전문가의 도움을 받아 주문형 인쇄 매장을 만들어보세요.',
    ],


    JobTopic::PAGE_DESIGN => [
        'title' => '랜딩 및 내부 페이지 디자인',
        'image' => '/images/experts/topics-sub/page-design.jpg',
        'desc' => '사이트 랜딩 페이지, 홈 페이지, 내부 페이지를 디자인하세요.',
    ],


    JobTopic::ADD_PRODUCT => [
        'title' => '제품 및 카테고리 추가',
        'image' => '/images/experts/topics-sub/add-product.jpg',
        'desc' => '고객이 제품을 더 쉽게 찾을 수 있도록 제품의 사진, 설명 및 사양을 강의 카테고리에 추가하세요.',
    ],





    JobTopic::PAYMENT => [
        'title' => '지불 게이트웨이',
        'image' => '/images/experts/topics-sub/payment.jpg',
        'desc' => '매장에 온라인 결제 게이트웨이를 추가하세요.',
    ],


    JobTopic::TAX => [
        'title' => '세금 관련 조언',
        'image' => '/images/experts/topics-sub/tax.jpg',
        'desc' => '재정 및 세금 문제에 대한 조언을 얻으십시오.',
    ],


    JobTopic::EMAIL_MARKETING => [
        'title' => '이메일 마케팅',
        'image' => '/images/experts/topics-sub/email-marketing.jpg',
        'desc' => '이메일 마케팅 도구를 사용하여 사용자를 고객으로 전환하고 구매를 유도하세요.',
    ],


    JobTopic::SEO => [
        'title' => 'SEO',
        'image' => '/images/experts/topics-sub/seo.jpg',
        'desc' => '더 많은 사람들이 검색에서 귀하의 제품을 찾을 수 있도록 Google 검색 결과의 순위를 높이세요.',
    ],


    JobTopic::SEARCH_ADS => [
        'title' => '검색광고',
        'image' => '/images/experts/topics-sub/search-adds.jpg',
        'desc' => 'Google과 같은 검색 엔진에 제품을 광고하세요.',
    ],


    JobTopic::SOCIAL_MARKETING => [
        'title' => '소셜 미디어 마케팅',
        'image' => '/images/experts/topics-sub/social-marketing.jpg',
        'desc' => '더 많은 사람들이 귀하의 제품과 서비스를 볼 수 있도록 소셜 미디어 광고 캠페인을 시작하십시오.',
    ],


    JobTopic::CONTENT_MARKETING => [
        'title' => '콘텐츠 마케팅',
        'image' => '/images/experts/topics-sub/content-marketing.jpg',
        'desc' => '귀하의 비즈니스와 관련된 유용하고 관련성 높은 콘텐츠를 제작하고 게시하세요.',
    ],


    JobTopic::SALE_CHANNELS => [
        'title' => '판매 채널 구축',
        'image' => '/images/experts/topics-sub/sale-channels.jpg',
        'desc' => 'Selldone의 온라인 스토어에 연결하여 Instagram, Telegram, Facebook과 같은 새로운 판매 채널을 시작하세요.',
    ],


    JobTopic::CONVERSION => [
        'title' => '전환율 최적화',
        'image' => '/images/experts/topics-sub/conversion.jpg',
        'desc' => '전환율을 높이고, 더 많은 방문자를 고객으로 전환하고, 캠페인의 효율성을 높이십시오. 이게 무슨 일이야?',
    ],


    JobTopic::ANALYZE => [
        'title' => '사용자 행동 분석',
        'image' => '/images/experts/topics-sub/analyze.jpg',
        'desc' => '온라인 스토어는 물론 매장의 실제 지점에서도 사용자의 행동을 확인하여 더 나은 사용자 경험을 제공하세요.',
    ],


    JobTopic::BRAND_STRATEGY => [
        'title' => '브랜드 전략',
        'image' => '/images/experts/topics-sub/brand-strategy.jpg',
        'desc' => '비즈니스 브랜드 구축 및 확장에 힘쓰세요.',
    ],


    JobTopic::MIGRATION => [
        'title' => '매장 이전',
        'image' => '/images/experts/topics-sub/advise.jpg',
        'desc' => '현재 매장을 Selldone로 이전하세요.',
    ],


    JobTopic::APP_PROGRAMMER => [
        'title' => '애플리케이션 구축',
        'image' => '/images/experts/topics-sub/app-programmer.jpg',
        'desc' => '자신만의 애플리케이션 설계 및 프로그래밍',
    ],


    JobTopic::APP_INSTALL => [
        'title' => '애플리케이션 설치',
        'image' => '/images/experts/topics-sub/app-install.jpg',
        'desc' => '스토어에 필요한 애플리케이션을 설치하고 구성하세요.',
    ],


    JobTopic::UX_DESIGN => [
        'title' => '전용 UX 디자인',
        'image' => '/images/experts/topics-sub/ux-designer.jpg',
        'desc' => '매장이나 애플리케이션에서 사용자를 위한 독특한 사용자 경험을 디자인하세요.',
    ],


    JobTopic::DEBUG => [
        'title' => '문제 해결',
        'image' => '/images/experts/topics-sub/debug.jpg',
        'desc' => '매장의 오류와 문제를 수정하세요.',
    ],


    JobTopic::STRATEGY => [
        'title' => '사업전략 컨설팅',
        'image' => '/images/experts/topics-sub/strategy.jpg',
        'desc' => '귀하의 비즈니스를 발전시키고 개선하기 위해 경험이 풍부하고 경험이 풍부한 사람들로부터 전문가의 조언을 구하십시오.',
    ],


    JobTopic::PRODUCT_GUIDE => [
        'title' => '제품 리소스 가이드',
        'image' => '/images/experts/topics-sub/products-guide.jpg',
        'desc' => '제품 준비, 준비 및 제품 공급주기 설계에 대한 조언을 얻으십시오.',
    ],


    JobTopic::SETUP_GUIDE => [
        'title' => '매장 설치 및 디자인 컨설팅',
        'image' => '/images/experts/topics-sub/setup-guide.jpg',
        'desc' => '사업을 시작하거나 온라인으로 사업을 시작하려면 해당 분야 전문가로부터 조언을 받으세요.',
    ],


    JobTopic::MARKETING_GUIDE => [
        'title' => '마케팅 및 영업 컨설팅',
        'image' => '/images/experts/topics-sub/marketing-guide.jpg',
        'desc' => '이 분야의 전문가 및 전문가로부터 조언을 받아 제품을 출시하고 매출을 늘리십시오.',
    ],


    JobTopic::PRODUCT_DESCRIPTION => [
        'title' => '상품 설명',
        'image' => '/images/experts/topics-sub/product-description.jpg',
        'desc' => '고객이 귀하의 제품을 더 쉽게 알 수 있도록 제품에 대한 매력적인 설명을 작성하십시오.',
    ],


    JobTopic::CONTENT_WRITE => [
        'title' => '마케팅 및 광고 콘텐츠',
        'image' => '/images/experts/topics-sub/marketing-content.jpg',
        'desc' => '다른 사람들이 귀하의 사이트를 친구들과 공유하거나 보다 효과적인 광고를 할 수 있도록 브랜드 스토리, 고객 및 귀하의 비즈니스 요구 사항에 대해 작성하십시오.',
    ],


    JobTopic::LOGO_DESIGN => [
        'title' => '로고 및 브랜드 디자인',
        'image' => '/images/experts/topics-sub/logo-design.jpg',
        'desc' => '귀하의 브랜드에 맞는 이미지와 로고 콘텐츠를 디자인하세요.',
    ],


    JobTopic::BRAND_DESIGN => [
        'title' => '배너 디자인',
        'image' => '/images/experts/topics-sub/banner-designer.jpg',
        'desc' => '매력적인 브랜드를 디자인하면 더 많은 사용자를 사이트로 끌어들이는 데 도움이 됩니다.',
    ],


    JobTopic::VIDEO => [
        'title' => '촬영 및 애니메이션',
        'image' => '/images/experts/topics-sub/video.jpg',
        'desc' => '광고영화, 2D, 3D 애니메이션 제작은 해당 분야 최고의 전문가에게 맡겨주세요.',
    ],


    JobTopic::PHOTOGRAPHY => [
        'title' => '제품 사진',
        'image' => '/images/experts/topics-sub/photography.jpg',
        'desc' => '귀하의 제품과 서비스에 대한 산업 및 전문 사진을 찍어 매장을 더욱 돋보이게 만드세요.',
    ],


    JobTopic::PHOTO_EDITOR => [
        'title' => '사진 편집',
        'image' => '/images/experts/topics-sub/photo-editor.jpg',
        'desc' => '매력적인 이미지를 디자인하세요. 여기에는 효과 추가, 배경 제거, 사진에 텍스트 추가 등이 포함될 수 있습니다.',
    ],


    JobTopic::MODELING_3D => [
        'title' => '3D 모델링과 AR',
        'image' => '/images/experts/topics-sub/3d.jpg',
        'desc' => '제품의 3D 증강 현실 모델을 디자인하여 매출을 대폭 늘리십시오.',
    ],


    JobTopic::DROPSHIPPING => [
        'title' => '직송 설정',
        'image' => '/images/experts/topics-sub/dropshipping.jpg',
        'desc' => '제조업체나 창고가 있는 경우 직송 전문가가 수천 개의 온라인 상점을 통해 제품을 쉽게 판매할 수 있도록 도와드립니다.',
    ],


    JobTopic::RESELLING => [
        'title' => '리셀러를 위한 설정',
        'image' => '/images/experts/topics-sub/reseller.jpg',
        'desc' => '물건을 사거나 창고에 보관하거나 택배를 보내지 않고도 큰 수입을 얻을 수 있는 훌륭한 상점을 가질 수 있습니다.',
    ],


    JobTopic::POS_SETUP => [
        'title' => '온라인 금전 등록기 설정',
        'image' => '/images/experts/topics-sub/pos-setup.jpg',
        'desc' => "귀하의 매장 지점에 Selldone 금전 등록기를 설치하고 가장 전문적인 매장 도구를 사용하여 귀하의 비즈니스 및 실제 지점을 발전시키십시오.",
    ],




    'CATEGORIES' => [
        JobCategory::SETUP => [
            'title' => '온라인 상점 설정',
            'image' => '/images/experts/categories/SETUP.jpg',
            'desc' => '이 분야의 전문가가 온라인 상점을 더 쉽고 빠르게 구축하고 설정할 수 있도록 도와드립니다.',
        ],
        JobCategory::PAYMENT => [
            'title' => '결제 수단 추가',
            'image' => '/images/experts/categories/PAYMENT.jpg',
            'desc' => '게이트웨이 수신 및 업데이트 프로세스를 수행하기 위해 지불 게이트웨이 전문가를 고용하십시오.',
        ],
        JobCategory::MANAGEMENT => [
            'title' => '매장관리',
            'image' => '/images/experts/categories/MANAGEMENT.jpg',
            'desc' => '매장 관리의 일부를 매장 관리 전문가에게 아웃소싱할 수 있습니다. 또한 비즈니스 운영의 모든 측면에 대한 전문적인 조언을 제공합니다.',
        ],
        JobCategory::CONTENT => [
            'title' => '콘텐츠 작성',
            'image' => '/images/experts/categories/CONTENT.jpg',
            'desc' => '귀하의 제품, 브랜드 또는 매장에 대한 콘텐츠를 콘텐츠 작성 전문가에게 작성하세요.',
        ],
        JobCategory::PHOTOGRAPHY => [
            'title' => '사진 촬영 및 편집',
            'image' => '/images/experts/categories/PHOTOGRAPHY.jpg',
            'desc' => '제품과 서비스의 사진을 찍어야 합니까? 이 섹션의 전문가는 귀하에게 필요한 이미지, 애니메이션 및 3D 모델을 준비합니다.',
        ],
        JobCategory::MARKETING => [
            'title' => '마케팅',
            'image' => '/images/experts/categories/MARKETING.jpg',
            'desc' => '마케팅 전문가는 귀하의 캠페인과 인센티브를 가장 잘 조정하거나 효과적인 광고 캠페인을 시작할 수 있도록 도와드립니다.',
        ],
        JobCategory::ADD_PRODUCT => [
            'title' => '제품 및 카테고리 추가',
            'image' => '/images/experts/categories/ADD_PRODUCT.jpg',
            'desc' => '상점에 제품을 추가하기 위해 이를 수행할 사람을 고용할 수 있습니다.',
        ],
        JobCategory::ADD_PAGE => [
            'title' => '페이지 추가(상륙, 회사 소개, ...)',
            'image' => '/images/experts/categories/ADD_PAGE.jpg',
            'desc' => '귀하는 방문 페이지, 당사 및 귀하 사이트의 다른 페이지에 대한 생성을 전문가에게 맡길 수 있습니다.',
        ],
        JobCategory::MIGRATION => [
            'title' => '다른 전자상거래 플랫폼에서 내 매장을 이전하세요',
            'image' => '/images/experts/categories/MIGRATION.jpg',
            'desc' => '전에도 매장이 있었나요? 전문적인 서비스가 귀하의 매장을 영원히 지원할 수 있도록 매장 이전 작업을 전문가에게 맡길 수 있습니다.',
        ],
        JobCategory::APP_SETUP => [
            'title' => '설치 응용 프로그램',
            'image' => '/images/experts/categories/APP_SETUP.jpg',
            'desc' => '스토어에서 앱을 설정하고 설치하는 데 도움이 필요하십니까? 전용 애플리케이션을 구축해야 합니까? 해당 분야의 전문가들이 여러분과 함께하겠습니다.',
        ],
        JobCategory::DROP_SHIPPING => [
            'title' => '직송 설정',
            'image' => '/images/experts/categories/DROP_SHIPPING.jpg',
            'desc' => '도매업자 또는 소매업자라면 Selldone Draping 플랫폼이 항상 찾고 있던 것입니다. Dropshipping 전문가는 귀하의 비즈니스를 판매하는 새로운 방법을 찾는 데 도움을 드릴 수 있습니다.',
        ],
        JobCategory::POS_SETUP => [
            'title' => 'Selldone POS 설정',
            'image' => '/images/experts/categories/POS_SETUP.jpg',
            'desc' => "매장의 온라인 POS를 설정하려면 전문가를 고용하세요.",
        ],

    ]

];
