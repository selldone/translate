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
        'title' => '接受付款',
        'sample' => "您的267美元付款已成功结算。<br>订单：SM-425<br>谢谢，<b>您的店铺名称</b>.<br>Selldone",
        'body' => "您的:param2付款已成功结算。\n订单：:param1\n谢谢，:param3。\nSelldone",
        'icon' => '付款',
        'description' => '发送消息给商店顾客告知付款成功。',

    ],
    'shop-order-payment-admin' => [
        'title' => '接受付款',
        'sample' => "新267美元付款已成功结算。<br>订单：SM-425<br>谢谢，<b>您的店铺名称</b>.<br>Selldone",
        'body' => "新:param2付款已结算成功。\n订单：:param1\n谢谢，:param3。\nSelldone",
        'icon' => '付款',
        'description' => '发送消息给店主，通知他们付款成功。',

    ],

    'vendor-new-order' => [
        'title' => '供应商新订单',
        'sample' => "您收到了新的 200 美元订单。<br>订单：<b>SM-870</b> for <b>供应商名称</b>.<br>✅ 产品 A| SKU100001 |1x<br>✅ 产品B| SKU100002 |1x",
        'body' => "您收到了新的 :param2 订单。\n订单：:param1 为 :param3。\n:param4",
        'icon' => '店面',
        'description' => '向供应商发送消息，告知他们有关新订单的信息。',
    ],








    'shop-login' => [
        'title' => '登录验证码',
        'sample' => "您的登录码是：<b>123456</b><br><b>您的店铺名称</b><br>Selldone",
        'body' => "您的登录密码是：:param1\n:param2\nSelldone",
        'icon' => '登录',
        'description' => '向客户发送登录代码以登录商店。',

    ],

    'user-login' => [
        'title' => '登录成功消息',
        'sample' => "尊敬的<b>姓名</b>,<br>您已通过<b>iPhone 165.250.300.1</b>登录您的帐户，<b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "尊敬的:param1：\n您已通过:param2、:param3登录您的账户。\nSelldone",
        'icon' => '系统安全更新好',
        'description' => '顾客登录商店后发送消息。',

    ],

    'avocado-order-submit' => [
        'title' => '鳄梨新订单提交发送给买家',
        'sample' => "<b>您的店铺名称</b><br>亲爱的<b>您的名字</b>,<br>我们已收到您的订单，我们正在审核。<br>订单号：<b>AVO-246</b><br>Selldone",
        'body' => ":param3\n尊敬的:param1：\n我们已收到您的订单，正在审核。\n订单号：:param2\nSelldone",
        'icon' => '事实检查',
        'description' => '下单购买牛油果后向顾客发送一条消息。',

    ],


    'avocado-order-submit-seller' => [
        'title' => '鳄梨收到新订单发送给卖家',
        'sample' => "您收到牛油果订单：<br>店铺：<b>您的店铺名称</b><br>买家：<b>买家姓名</b><br>订单：<b>AVO-246</b><br>Selldone",
        'body' => "您收到了鳄梨订单：\n店铺：:param1\n买家：:param2\n订单：:param3\nSelldone",
        'icon' => '如何注册',
        'description' => '向店主发送一条消息，告知他们收到新的鳄梨订单。',

    ],



    'avocado-ready-to-pay' => [
        'title' => '准备付款的鳄梨订单',
        'sample' => "<b>您的店铺名称</b><br>您的订单已确认，可以通过以下链接支付。<br>订单号：<b>AVO-246</b><br>链接：<b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\n您的订单已确认，可以通过以下链接付款。\n订单号：:param2\n链接：:param1\nSelldone",
        'icon' => '收据',
        'description' => '卖家设定费用并确认鳄梨订单后，向客户发送带有付款链接的消息。',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => '订单准备发货',
        'sample' => "您好 <b>Alex</b>，好消息，您的订单现已准备发货。<br>订单：<b>SM-123</b>",
        'body' => "您好 :param4，好消息，您的订单现已准备好发货。\n订单：:param1",
        'icon' => '本地运输',
        'description' => '向客户发送消息，通知他们订单已准备好发货。',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => '订单已准备好取货',
        'sample' => "您好，Alex，好消息，您的订单现已可以提货了。<br>订单：<b>SM-123</b>",
        'body' => "您好 :param4，好消息，您的订单现已可以提货了。\n订单：:param1",
        'icon' => '共享位置',
        'description' => '向客户发送消息，通知他们订单已准备好提货。',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => '供应商订单准备发货',
        'sample' => "您好 <b>Alex</b>，好消息，您的订单现已准备发货。<br>订单：<b>SM-123</b>",
        'body' => "您好 :param4，好消息，您的订单现已准备好发货。\n订单：:param1",
        'icon' => '本地运输',
        'description' => '向客户发送消息，通知他们订单已准备好发货。就在市场上，直接运输模式和交付类型不是取货。',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => '供应商订单已准备好提货',
        'sample' => "您好，Alex，好消息，您的订单现已可以提货了。<br>订单：<b>SM-123</b>",
        'body' => "您好 :param4，好消息，您的订单现已可以提货了。\n订单：:param1",
        'icon' => '共享位置',
        'description' => '向客户发送消息，通知他们订单已准备好提货。就在市场上，直接运输模式和交付类型是取货。',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => '订单项目确认',
        'sample' => "您好亚历克斯，我们已审核您的订单。这是您的物品的确认状态：<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "您好:param4，我们已审核您的订单。以下是您的商品的确认状态："
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => '作业转入',
        'description' => '通知客户订单中已被卖家接受或拒绝的商品。',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => '供应商订单项目确认',
        'sample' => "您好亚历克斯，我们已审核您的订单。这是您的物品的确认状态：<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "您好:param4，我们已审核您的订单。以下是您的商品的确认状态："
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => '作业转入',
        'description' => '通知客户订单中已被供应商接受或拒绝的商品。',
    ],



];
