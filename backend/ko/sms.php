<?php 

 return [
     "shop-order-payment" => [
     "title" => "지불 수락",
     "sample" => "267$ 결제가 성공적으로 완료되었습니다.<br> 주문: SM-425<br> 감사합니다. <b>상점 이름</b> .<br> 판매완료",
     "body" => ":param2 결제가 성공적으로 완료되었습니다. 주문: :param1 감사합니다, :param3. 판매완료",
     "description" => "결제가 성공적으로 완료되었음을 알리는 메시지를 매장 고객에게 보내세요.",
],
     "shop-order-payment-admin" => [
     "title" => "지불 수락",
     "sample" => "새로운 267$ 결제가 성공적으로 완료되었습니다.<br> 주문: SM-425<br> 감사합니다. <b>상점 이름</b> .<br> 판매완료",
     "body" => "신규 :param2 결제가 성공적으로 완료되었습니다. 주문: :param1 감사합니다, :param3. 판매완료",
     "description" => "매장 주인에게 결제가 성공적으로 완료되었음을 알리는 메시지를 보내세요.",
],
     "vendor-new-order" => [
     "title" => "공급업체 신규 주문",
     "sample" => "200달러의 새로운 주문을 받았습니다.<br> 주문: <b>공급업체 이름</b> 에서 SM-870을 주문하세요.",
     "body" => "새로운 :param2 주문을 받았습니다. 주문: :param3에 대한 :param1.",
     "description" => "판매자에게 새로운 주문에 대한 메시지를 보내세요.",
],
     "shop-login" => [
     "title" => "로그인 인증 코드",
     "sample" => "로그인 코드: <b>123456</b><br> <b>상점 이름</b><br> 판매완료",
     "body" => "로그인 코드: :param1 :param2 Selldone",
     "description" => "고객에게 로그인 코드를 보내 매장에 로그인하세요.",
],
     "user-login" => [
     "title" => "로그인 성공 메시지",
     "sample" => "친애하는 <b>이름</b> ,<br> 2021년 5월 8일 <b>오전 9시 14분</b> 에 <b>iPhone 165.250.300.1</b> 로 계정에 로그인했습니다.<br> 판매완료",
     "body" => "친애하는 :param1님, :param2에서 :param3으로 계정에 로그인하셨습니다. 판매완료",
     "description" => "고객이 매장에 로그인한 후 메시지를 보냅니다.",
],
     "avocado-order-submit" => [
     "title" => "아보카도 새 주문 제출됨 구매자에게 보내기",
     "sample" => "<b>상점 이름</b><br> 친애하는 <b>당신의 이름</b> ,<br> 주문이 접수되어 검토 중입니다.<br> 주문 번호: <b>AVO-246</b><br> 판매완료",
     "body" => ":param3 친애하는 :param1, 귀하의 주문을 접수했으며 검토 중입니다. 주문 번호: :param2 판매 완료",
     "description" => "아보카도 주문 후 고객에게 메시지를 보내세요.",
],
     "avocado-order-submit-seller" => [
     "title" => "아보카도 새 주문 받기 판매자에게 보내기",
     "sample" => "아보카도 주문을 받았습니다.<br> 상점: <b>상점 이름</b><br> 구매자: <b>구매자 이름</b><br> 주문: <b>AVO-246</b><br> 판매완료",
     "body" => "아보카도 주문을 받았습니다: 상점: :param1 구매자: :param2 주문: :param3 Selldone",
     "description" => "매장 주인에게 새로운 아보카도 주문을 받았다는 메시지를 보내세요.",
],
     "avocado-ready-to-pay" => [
     "title" => "아보카도 주문 결제 준비 완료",
     "sample" => "<b>상점 이름</b><br> 주문이 확인되었으며 다음 링크를 통해 결제할 수 있습니다.<br> 주문 번호: <b>AVO-246</b><br> 링크: <b>https://your-domain/avocado</b><br> 판매완료",
     "body" => ":param3 주문이 확인되었으며 다음 링크를 통해 결제하실 수 있습니다. 주문 번호: :param2 링크: :param1 Selldone",
     "description" => "판매자가 가격을 설정하고 아보카도 주문을 확인한 후, 고객에게 결제 링크가 포함된 메시지를 보냅니다.",
],
];