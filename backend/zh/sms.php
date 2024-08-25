<?php 

 return [
     "shop-order-payment" => [
     "title" => "接受付款",
     "sample" => "您的 267 美元付款已成功结算。<br>订购：SM-425<br>谢谢，<b>您的商店名称</b>。<br>卖完",
     "body" => "您的 :param2 付款已成功结算。订单：：param1 谢谢，：param3。卖完",
     "description" => "发送消息给商店顾客告知付款成功。",
],
     "shop-order-payment-admin" => [
     "title" => "接受付款",
     "sample" => "新的 267 美元付款已成功结算。<br>订购：SM-425<br>谢谢，<b>您的商店名称</b>。<br>卖完",
     "body" => "新 :param2 付款成功结算。订单：：param1 谢谢，：param3。卖完",
     "description" => "发送消息给店主，通知他们付款成功。",
],
     "vendor-new-order" => [
     "title" => "供应商新订单",
     "sample" => "您收到了一份新的 200 美元订单。<br>订单：来自<b>供应商名称的</b>SM-870。",
     "body" => "您收到了新的 :param2 订单。订单：:param1，针对 :param3。",
     "description" => "向供应商发送消息，告知他们有关新订单的信息。",
],
     "shop-login" => [
     "title" => "登录验证码",
     "sample" => "您的登录代码是： <b>123456</b><br><b>您的店铺名称</b><br>卖完",
     "body" => "您的登录代码是： :param1 :param2 Selldone",
     "description" => "向客户发送登录代码以登录商店。",
],
     "user-login" => [
     "title" => "登录成功消息",
     "sample" => "亲爱的<b>名字</b>，<br>您已于 2021 年 5 月 8 日<b>上午 9:14</b>通过<b>iPhone 165.250.300.1</b>登录您的帐户。<br>卖完",
     "body" => "亲爱的 :param1， 您已通过 :param2 在 :param3 登录您的帐户。卖完",
     "description" => "顾客登录商店后发送消息。",
],
     "avocado-order-submit" => [
     "title" => "鳄梨新订单提交发送给买家",
     "sample" => "<b>您的店铺名称</b><br>亲爱<b>的你的名字</b>，<br>我们已收到您的订单，正在审核中。<br>订单号： <b>AVO-246</b><br>卖完",
     "body" => ":param3 亲爱的 :param1， 我们已收到您的订单，正在审核中。订单 #: :param2 Selldone",
     "description" => "下单购买牛油果后向顾客发送一条消息。",
],
     "avocado-order-submit-seller" => [
     "title" => "鳄梨收到新订单发送给卖家",
     "sample" => "您收到了一份鳄梨订单：<br>店铺：<b>您的店铺名称</b><br>买家：<b>买家姓名</b><br>订购： <b>AVO-246</b><br>卖完",
     "body" => "您收到了一个鳄梨订单： 商店: :param1 买家: :param2 订单: :param3 Selldone",
     "description" => "向店主发送一条消息，告知他们收到新的鳄梨订单。",
],
     "avocado-ready-to-pay" => [
     "title" => "准备付款的鳄梨订单",
     "sample" => "<b>您的店铺名称</b><br>您的订单已确认，可通过以下链接付款。<br>订单号： <b>AVO-246</b><br>链接： <b>https://your-domain/avocado</b><br>卖完",
     "body" => ":param3 您的订单已经确认，可以通过以下链接支付。订单号：：param2 链接：：param1 Selldone",
     "description" => "卖家设定费用并确认鳄梨订单后，向客户发送带有付款链接的消息。",
],
];