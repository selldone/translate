/*
 * Copyright (c) 2023. Selldone® Business OS™
 *
 * Author: M.Pajuhaan
 * Web: https://selldone.com
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 *
 * All rights reserved. In the weave of time, where traditions and innovations intermingle, this content was crafted.
 * From the essence of thought, through the corridors of creativity, each word, and sentiment has been molded.
 * Not just to exist, but to inspire. Like an artist's stroke or a sculptor's chisel, every nuance is deliberate.
 * Our journey is not just about reaching a destination, but about creating a masterpiece.
 * Tread carefully, for you're treading on dreams.
 */

export default {
  categories: {
    Baby: {
      title: "유아·어린이·장난감",
      desc: "유모차, 장난감, 게임, 퍼즐, 액션 피규어",
    },
    Health: {
      title: "건강 및 뷰티",
      desc: "약국, 웰니스, 화장품, 향수",
    },
    Media: {
      title: "미디어 및 게임",
      desc: "비디오 게임, 영화, 음악, 도서",
    },
    Fashion: {
      title: "의류, 주얼리 및 시계",
      desc: "의류, 신발, 목걸이, 반지, 팔찌, 시계",
    },
    Automotive: {
      title: "자동차 용품",
      desc: "자동차 액세서리, 공구, 정비",
    },
    Electronics: {
      title: "전자제품",
      desc: "모바일 기기, TV, 오디오 기기, 카메라",
    },
    Computers: {
      title: "컴퓨터",
      desc: "노트북, 데스크톱, 액세서리, 소프트웨어",
    },
    Household: {
      title: "생활 필수품",
      desc: "청소용품, 욕실용품, 세탁용품",
    },
    Garden: {
      title: "정원 및 공구",
      desc: "야외 가구, 원예 도구, 식물",
    },
    Food: {
      title: "식품 및 식료품",
      desc: "유제품, 과일, 조리식품, 육류, 음료",
    },
    Handmade: {
      title: "핸드메이드",
      desc: "수집품, 페인팅 슈즈, 조각품, 유리 공예",
    },
    PetSupplies: {
      title: "반려동물 용품",
      desc: "반려동물 사료, 장난감, 케어 용품",
    },
    Home: {
      title: "홈 & 리빙",
      desc: "주방가전, 가구, 인테리어",
    },
    Sports: {
      title: "스포츠 및 아웃도어",
      desc: "운동, 캠핑, 자전거, 레크리에이션",
    },
    Stationery: {
      title: "문구 및 사무용품",
      desc: "사무용품, 학용품, 종이 제품",
    },
    Books: {
      title: "도서",
      desc: "소설, 논픽션, 교육, 만화",
    },
    Marketplace: {
      title: "모든 것을 위한 마켓",
      desc: "여러 카테고리의 다양한 제품",
    },
    Other: {
      title: "기타...",
      desc: "기프트 카드, 디지털 상품, 온라인 서비스, 모든 항목",
    },
  },

  partners: {
    title: "{name}은(는) Selldone과 파트너 관계를 맺고 있습니다.",
    subtitle: "차세대 온라인 비즈니스를 실현합니다.",
    subtitle_official: "차세대 온라인 비즈니스를 경험해 보세요.",

    create_new_shop: "새 상점 만들기",
    select_a_shop: "상점 선택",
    apply_deal_to: "{shop}에 거래 적용",
    notifications: {
      success_apply: "거래가 성공적으로 활성화되었습니다!",
    },
  },

  name: "설정",
  overview: {
    title: "개요",
    subtitle:
      "비즈니스 운영 시스템을 이해하고, 이 시스템이 비즈니스에 어떻게 도움이 되는지 확인하세요.",
  },

  shop: {
    title: "제로에서 매출까지",
    subtitle: "이 간단한 단계를 따라 다음 단계로 나아가세요.",
  },

  open_website: "내 웹사이트 열기",

  customize_theme: "웹사이트 맞춤 설정",
  setup_business: "비즈니스 설정",
  add_product: "상품 추가",
  setup_shipping: "배송 설정",
  add_domain: "도메인 추가",
  add_payment: "결제 연결",

  product: {
    step1: {
      title: "옵션 1. 수동으로 추가",
      msg: "실제 제품, 가상 항목, 파일 및 서비스를 상점에 추가하고 판매를 시작할 수 있습니다.",
      action_on: "첫 번째 제품 추가",
      action_off: "더 많은 제품 추가",
      category:
        "카테고리는 다른 온라인 쇼핑 사이트와 비교해 당신의 사이트를 돋보이게 하는 핵심 요소입니다. 카테고리를 추가하고 끌어서 놓기로 관리하여 모든 항목을 분류하고 정리하세요.",
      add_category: "카테고리 추가",
    },
    step2: {
      title: "옵션 2. Excel로 추가",
      msg: "1K, 10K 항목과 같은 많은 제품이 있습니까? 한 번의 작업으로 모두 가져올 수 있으므로 걱정하지 마십시오.",
      import_excel: "Excel로 가져오기",
      download_template: "템플릿 다운로드",
    },
  },
  shipping: {
    step1: {
      title: "1단계. 위치 설정",
      msg: "첫 번째 단계에서 창고(출고지)를 설정합니다. 이 정보는 거리, 배송비를 계산하고 배송 서비스 지역에 있는지 확인하는 데 사용됩니다.",
      edit_warehouse: "창고 수정",
      add_warehouse: "창고 추가",
    },
    step2: {
      title: "2단계. 배송 방법 활성화",
      msg: "스토어에 배송 방법을 하나 이상 추가하세요. 무게, 거리 및 기타 매개변수를 기반으로 가격을 설정할 수 있습니다. 각 배송 서비스에서 지원하는 패키지의 거리, 무게 및 크기에 대한 제한을 설정하는 것을 잊지 마십시오.",
      add_delivery: "배송 방법 추가",
    },
  },

  domain: {
    buy_domain_step: {
      title: "1단계. 도메인 구매",
      msg: "아직 개인 도메인이 없다면 namecheap.com 같은 사이트에서 자신의 도메인을 구매할 때입니다.",
    },

    set_dns_step: {
      title: "2단계. DNS 레코드 설정",
      msg: "축하합니다. 이제 도메인 서비스 제공업체에서 DNS를 구성하고 도메인을 계정에 추가하기만 하면 됩니다.",
    },
  },

  payment: {
    step1: {
      title: "가격 통화",
      msg: "다른 통화로 돈을 받을 수 있으며 상점은 가격 책정에 대해 둘 이상의 통화를 지원할 수 있습니다. 그건 그렇고, 상점 통화를 USD로 설정하면 고객은 USD, EUR, GBP 등과 같은 모든 통화로 지불하여 구매할 수 있습니다.",
      manage_currencies: "가격 통화 관리",
    },
    step2: {
      title: "돈을 수락",
      msg: "대금 상환, 직접 송금 및 상점에서 사용 가능한 기타 지불 방법을 추가하십시오.",
      online_title: "온라인 지불 방법",
      online_msg:
        "카드 결제, 새로운 뱅킹 애플리케이션, 지금 구매 후 결제 및 기타 여러 온라인 결제 방법을 수락합니다.",
      add_online_gateway: "온라인 결제 수단 추가",
      cod_title: "착불 결제 방법",
      cod_msg:
        "주문 배송 후 결제를 수락합니다. 대금 상환 결제를 수동으로 확인할 수 있습니다.",
      cash_title: "현금 결제 방법",
      cash_msg: "이 결제 유형은 Selldone POS에서 사용됩니다.",
      dir_title: "직접 지불 방법",
      dir_msg:
        "직접 송금, 은행 송금 및 기타 전통적인 방법으로 지불을 수락할 수 있습니다.",
    },
    step3: {
      msg: "30초 안에 한 번의 클릭으로 Selldone을 Stripe 계정에 연결하세요. 현재 Stripe를 통한 자동 구성 프로세스를 지원합니다. 결제 게이트웨이 탭으로 이동해 Stripe를 추가하고 “<b>Stripe에 자동 연결</b>” 버튼을 클릭하세요.",
      my_gateways: "내 결제 게이트웨이",
    },
  },


  /**
   * @see SShopOnboardingCustomization
   */
  customize: {
    tour:{
      title:'둘러보기',
      subtitle:"다른 곳에서는 불가능한 기능을 여기에서 확인하세요.",
      /**
       * @see BShopOnboardingTour
       */
      avocado:{
        title:"Avocado - 상품을 추가하지 않고 판매",
        description: "Avocado를 사용하면 사전 지정된 가격이나 세부 정보 없이도 서비스 또는 상품을 제공할 수 있습니다. 고객이 서비스나 상품을 요청할 수 있는 맞춤 양식을 만드세요. 고객이 요청을 제출하면 가격을 설정하고 결제를 처리할 수 있습니다. 양식을 소셜 미디어에 공유해 고객이 항목을 추가하고 이미지를 업로드하며 주문을 쉽게 제출하도록 하세요.",
        action:'Avocado 알아보기',
      },
      marketplace:{
        title: "다중 판매자 마켓과 자동 정산",
        description: "Selldone에서 여러 판매자를 추가해 활발한 마켓을 구축하세요. 판매자는 상품을 등록할 수 있고, 당신은 각 판매에 대한 수수료율을 설정할 수 있습니다. 고객이 구매하면 판매자가 결제를 직접 받고 전용 패널에서 주문을 관리하며, 당신은 자동 정산 기능을 통해 수수료를 받습니다.",
        action:'판매자 자동 정산',
      },
      business_model:{
        title: "복잡한 비즈니스 모델 지원",
        description:
            "Selldone은 단순한 비즈니스 모델과 복잡한 비즈니스 모델을 모두 지원하여 필요에 따라 유연하게 조정할 수 있습니다. 추가 플러그인이나 앱을 설치하지 않고도 내부에서 모든 것을 구성해 원활한 전환과 운영을 보장하세요.",
      },
      gift_shopping:{
        title: "상품 위치 제한과 선물 구매",
        description:
            "여러 국가, ZIP 코드, 도시를 지정해 각 상품의 위치 제한을 설정하세요. 이 기능은 개인화된 선물 구매 경험을 만들거나 레스토랑처럼 특정 지역에서만 상품을 제공해야 할 때 적합합니다.",

      }
    },

    template: {
      title: "템플릿",
      msg: "사전 제작된 템플릿으로 매장을 시작해보세요! 각각 고유한 디자인을 자랑하는 여러 페이지를 추가하여 쉽게 다양화할 수 있습니다.",
      action:'모든 템플릿 보기...'

    },

    colors: {
      title: "색상 및 레이아웃",

      msg: "비전에 더 잘 맞도록 상품 페이지와 매장 레이아웃을 조정하고 싶으신가요? 매장의 테마 맞춤 설정 섹션에서 손쉽게 적용되는 과정을 확인해 보세요.",

      action:'색상과 테마 맞춤 설정'

    },

  },

  /**
   * @see ShopOnboardingSetupBusinessTab
   */
  business: {
    step1: {
      title: "비즈니스 모델",
      msg: "모든 비즈니스는 고유하며 종종 기본적인 온라인 상점 이상의 것이 필요합니다. 수익 모델을 정의하시면 나머지는 저희가 원활하게 처리해 드립니다.",
    },
  },

  migration: {
    title: "이주",
    shopify: {
      msg: "Shopify에서 Selldone으로 원활하게 전환하세요! 온라인 스토어를 위한 간편한 마이그레이션, 향상된 기능, 비용 효율적인 솔루션을 즐겨보세요.",
    },
    woocommerce: {
      msg: "단 몇 번의 클릭만으로 WooCommerce 제품을 Selldone으로 원활하게 마이그레이션할 수 있습니다! 향상된 성능, 직관적인 디자인, 최고 수준의 고객 지원을 즐겨보세요. 지금 전자상거래 경험을 업그레이드하세요.",
    },
  },





};
