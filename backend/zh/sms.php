<?php 

 return [
     "shop-order-payment" => [
     "title" => "支付成功通知-客户",
     "sample" => "您支付的 $267 已成功结算。<br>订单号：SM-425<br>感谢您，<b>您的店铺名称</b>。<br>Selldone",
     "body" => "您支付的 :param2 已成功结算。\n订单号：:param1\n感谢您，:param3。\nSelldone",
     "description" => "向店铺客户发送支付成功的通知消息。",
],
     "shop-order-payment-admin" => [
     "title" => "支付成功通知-卖家",
     "sample" => "收到新的 $267 支付已成功结算。<br>订单号：SM-425<br>感谢您，<b>您的店铺名称</b>。<br>Selldone",
     "body" => "收到新的 :param2 支付已成功结算。\n订单号：:param1\n感谢您，:param3。\nSelldone",
     "description" => "向店铺所有者发送支付成功的通知消息。",
],
     "vendor-new-order" => [
     "title" => "供应商新订单通知",
     "sample" => "您收到了一笔新的 $200 订单。<br>订单号：SM-870，来自 <b>供应商名称</b>",
     "body" => "您收到了一笔新的 :param2 订单。\n订单号：:param1，买家：:param3。",
     "description" => "向供应商发送新订单通知。",
],
     "shop-login" => [
     "title" => "登录验证码",
     "sample" => "您的登录验证码是：<b>123456</b><br><b>您的店铺名称</b><br>Selldone",
     "body" => "您的登录验证码是：:param1\n:param2\nSelldone",
     "description" => "向客户发送登录验证码以登录店铺。",
],
     "user-login" => [
     "title" => "登录成功通知",
     "sample" => "尊敬的 <b>姓名</b>，<br>您已通过 <b>iPhone 165.250.300.1</b> 于 <b>2021年5月8日 9:14AM</b> 成功登录账户。<br>Selldone",
     "body" => "尊敬的 :param1，\n您已通过 :param2 于 :param3 成功登录账户。\nSelldone",
     "description" => "客户登录店铺后发送的通知消息。",
],
     "avocado-order-submit" => [
     "title" => "Avocado订单提交成功通知-客户",
     "sample" => "<b>您的店铺名称</b> <br>尊敬的 <b>您的名字</b>，<br>我们已收到您的订单，正在审核中。<br>订单号：<b>AVO-246</b><br>Selldone",
     "body" => ":param3\n尊敬的 :param1，\n我们已收到您的订单，正在审核中。\n订单号：:param2\nSelldone",
     "description" => "客户下单后发送的Avocado订单确认消息。",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado新订单通知-卖家",
     "sample" => "您收到了一笔Avocado订单：<br>店铺：<b>您的店铺名称</b><br>买家：<b>买家名称</b><br>订单号：<b>AVO-246</b><br>Selldone",
     "body" => "您收到了一笔Avocado订单：\n店铺：:param1\n买家：:param2\n订单号：:param3\nSelldone",
     "description" => "向店铺所有者发送新Avocado订单通知。",
],
     "avocado-ready-to-pay" => [
     "title" => "Avocado订单待付款通知",
     "sample" => "<b>您的店铺名称</b> <br>您的订单已确认，可通过以下链接进行付款。<br>订单号：<b>AVO-246</b><br>链接：<b>https://your-domain/avocado</b><br>Selldone",
     "body" => ":param3\n您的订单已确认，可通过以下链接进行付款。\n订单号：:param2\n链接：:param1\nSelldone",
     "description" => "卖家确认订单费用后，向客户发送付款链接。",
],
];
