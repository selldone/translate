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
        'title' => '지불 수락',
        'sample' => "\$267 결제가 성공적으로 완료되었습니다.<br>주문: SM-425<br>감사합니다. <b>가게 이름</b>.<br>Selldone",
        'body' => ":param2 결제가 성공적으로 완료되었습니다.\n주문: :param1\n:param3님, 감사합니다.\nSelldone",
        'icon' => '결제',
        'description' => '결제가 성공적으로 완료되었음을 알리는 메시지를 매장 고객에게 보내세요.',

    ],
    'shop-order-payment-admin' => [
        'title' => '지불 수락',
        'sample' => "새로운 267달러 결제가 성공적으로 완료되었습니다.<br>주문: SM-425<br>감사합니다. <b>가게 이름</b>.<br>Selldone",
        'body' => "새로운 :param2 결제가 성공적으로 결제되었습니다.\n주문: :param1\n:param3님, 감사합니다.\nSelldone",
        'icon' => '결제',
        'description' => '매장 주인에게 결제가 성공적으로 완료되었음을 알리는 메시지를 보내세요.',

    ],

    'vendor-new-order' => [
        'title' => '공급업체 신규 주문',
        'sample' => "새로운 \$200 주문을 받았습니다.<br>주문: <b>SM-870</b> for <b>공급업체 이름</b>.<br>✅ 제품 A| SKU100001 |1x<br>✅ 제품 B| SKU100002 |1x",
        'body' => "새로운 :param2 주문을 받았습니다.\n주문: :param3의 경우 :param1.\n:param4",
        'icon' => '점포',
        'description' => '판매자에게 새로운 주문에 대한 메시지를 보내세요.',
    ],








    'shop-login' => [
        'title' => '로그인 인증 코드',
        'sample' => "귀하의 로그인 코드는 다음과 같습니다: <b>123456</b><br><b>가게 이름</b><br>Selldone",
        'body' => "귀하의 로그인 코드는 :param1입니다.\n:param2\nSelldone",
        'icon' => '로그인',
        'description' => '고객에게 로그인 코드를 보내 매장에 로그인하세요.',

    ],

    'user-login' => [
        'title' => '로그인 성공 메시지',
        'sample' => "친애하는 <b>Name</b>,<br><b>iPhone 165.250.300.1</b>에 의해 <b>5/8/2021 9:14AM</b>.<br>Selldone에 의해 귀하의 계정에 로그인되었습니다.",
        'body' => "친애하는 :param1님,\n:param3에서 :param2로 귀하의 계정에 로그인했습니다.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => '고객이 매장에 로그인한 후 메시지를 보냅니다.',

    ],

    'avocado-order-submit' => [
        'title' => '아보카도 새 주문 제출됨 구매자에게 보내기',
        'sample' => "<b>귀하의 매장 이름</b><br>귀하의 <b>귀하의 이름</b>,<br>귀하의 주문이 접수되었으며 검토 중입니다.<br>주문 번호: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\n친애하는 :param1님,\n귀하의 주문이 접수되었으며 검토 중입니다.\n주문 번호: :param2\nSelldone",
        'icon' => '사실_확인',
        'description' => '아보카도 주문 후 고객에게 메시지를 보내세요.',

    ],


    'avocado-order-submit-seller' => [
        'title' => '아보카도 새 주문 받기 판매자에게 보내기',
        'sample' => "아보카도 주문을 받았습니다:<br>스토어: <b>스토어 이름</b><br>구매자: <b>구매자 이름</b><br>주문: <b>AVO-246</b><br>Selldone",
        'body' => "아보카도 주문을 받았습니다:\n상점: :param1\n구매자: :param2\n주문: :param3\nSelldone",
        'icon' => '방법_등록',
        'description' => '매장 주인에게 새로운 아보카도 주문을 받았다는 메시지를 보내세요.',

    ],



    'avocado-ready-to-pay' => [
        'title' => '아보카도 주문 결제 준비 완료',
        'sample' => "<b>귀하의 매장 이름</b><br>주문이 확인되었으며 다음 링크를 통해 결제하실 수 있습니다.<br>주문 번호: <b>AVO-246</b><br>링크: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\n귀하의 주문이 확인되었으며 다음 링크를 통해 결제하실 수 있습니다.\n주문 번호: :param2\n링크: :param1\nSelldone",
        'icon' => '영수증',
        'description' => '판매자가 가격을 설정하고 아보카도 주문을 확인한 후, 고객에게 결제 링크가 포함된 메시지를 보냅니다.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => '주문 배송 준비 완료',
        'sample' => "안녕하세요, <b>Alex</b>님, 좋은 소식입니다. 이제 주문하신 상품이 배송될 준비가 되었습니다.<br>주문: <b>SM-123</b>",
        'body' => ":param4님, 안녕하세요. 좋은 소식입니다. 이제 주문하신 상품이 배송될 준비가 되었습니다.\n주문: :param1",
        'icon' => 'local_shipping',
        'description' => '고객에게 메시지를 보내 주문이 배송될 준비가 되었음을 알립니다.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => '주문 픽업 준비 완료',
        'sample' => "안녕하세요 Alex, 좋은 소식입니다. 이제 귀하의 주문을 픽업할 준비가 되었습니다.<br>주문: <b>SM-123</b>",
        'body' => ":param4님, 안녕하세요. 좋은 소식입니다. 이제 주문하신 상품을 픽업할 준비가 되었습니다.\n주문: :param1",
        'icon' => '공유_위치',
        'description' => '고객에게 메시지를 보내 주문 상품을 픽업할 준비가 되었음을 알립니다.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => '공급업체 주문 배송 준비 완료',
        'sample' => "안녕하세요, <b>Alex</b>님, 좋은 소식입니다. 이제 주문하신 상품이 배송될 준비가 되었습니다.<br>주문: <b>SM-123</b>",
        'body' => ":param4님, 안녕하세요. 좋은 소식입니다. 이제 주문하신 상품이 배송될 준비가 되었습니다.\n주문: :param1",
        'icon' => 'local_shipping',
        'description' => '고객에게 메시지를 보내 주문이 배송될 준비가 되었음을 알립니다. 직접 배송 모드를 사용하는 마켓플레이스에서는 배송 유형이 픽업이 아닙니다.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => '공급업체 주문 픽업 준비 완료',
        'sample' => "안녕하세요 Alex, 좋은 소식입니다. 이제 귀하의 주문을 픽업할 준비가 되었습니다.<br>주문: <b>SM-123</b>",
        'body' => ":param4님, 안녕하세요. 좋은 소식입니다. 이제 주문하신 상품을 픽업할 준비가 되었습니다.\n주문: :param1",
        'icon' => '공유_위치',
        'description' => '고객에게 메시지를 보내 주문 상품을 픽업할 준비가 되었음을 알립니다. 직접 배송 모드를 사용하는 마켓플레이스에서는 배송 유형이 픽업입니다.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => '주문 항목 확인',
        'sample' => "Alex 님, 안녕하세요. 귀하의 주문을 검토했습니다. 귀하의 품목에 대한 확인 상태는 다음과 같습니다:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => ":param4님, 안녕하세요. 주문을 검토했습니다. 귀하의 상품에 대한 확인 상태는 다음과 같습니다."
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => '할당_전환_인',
        'description' => '판매자가 수락하거나 거부한 주문 항목에 대해 고객에게 알립니다.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => '판매자 주문 품목 확인',
        'sample' => "Alex 님, 안녕하세요. 귀하의 주문을 검토했습니다. 귀하의 품목에 대한 확인 상태는 다음과 같습니다:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => ":param4님, 안녕하세요. 주문을 검토했습니다. 귀하의 상품에 대한 확인 상태는 다음과 같습니다."
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => '할당_전환_인',
        'description' => '공급업체가 수락하거나 거부한 주문 항목에 대해 고객에게 알립니다.',
    ],



];
