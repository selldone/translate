<?php 

 return [
     "shop-order-payment" => [
     "title" => "接受付款",
     "sample" => "您的 267 美元付款已成功結算。<br>訂購：SM-425<br>謝謝，<b>您的商店名稱</b>。<br>賣完",
     "body" => "您的 :param2 付款已成功結算。訂單：：param1 謝謝，：param3。賣完",
],
     "shop-order-payment-admin" => [
     "title" => "接受付款",
     "sample" => "新的 267 美元付款已成功結算。<br>訂購：SM-425<br>謝謝，<b>您的商店名稱</b>。<br>賣完",
     "body" => "新 :param2 付款成功結算。訂單：：param1 謝謝，：param3。賣完",
],
     "shop-login" => [
     "title" => "登錄驗證碼",
     "sample" => "您的登錄代碼是： <b>123456</b><br><b>您的店鋪名稱</b><br>賣完",
     "body" => "您的登錄代碼是： :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "登錄成功消息",
     "sample" => "親愛的<b>名字</b>，<br>您已於 2021 年 5 月 8 日<b>上午 9:14</b>通過<b>iPhone 165.250.300.1</b>登錄您的帳戶。<br>賣完",
     "body" => "親愛的 :param1， 您已通過 :param2 在 :param3 登錄到您的帳戶。賣完",
],
     "avocado-order-submit" => [
     "title" => "鱷梨新訂單提交發送給買家",
     "sample" => "<b>您的店鋪名稱</b><br>親愛<b>的你的名字</b>，<br>我們已收到您的訂單，正在審核中。<br>訂單號： <b>AVO-246</b><br>賣完",
     "body" => ":param3 親愛的 :param1， 我們已收到您的訂單，正在審核中。訂單 #: :param2 Selldone",
],
     "avocado-order-submit-seller" => [
     "title" => "鱷梨收到新訂單發送給賣家",
     "sample" => "您收到了一份鱷梨訂單：<br>店鋪：<b>您的店鋪名稱</b><br>買家：<b>買家姓名</b><br>訂購： <b>AVO-246</b><br>賣完",
     "body" => "您收到了一個鱷梨訂單： 商店：：param1 買家：：param2 訂單：：param3 Selldone",
],
     "avocado-ready-to-pay" => [
     "title" => "準備付款的鱷梨訂單",
     "sample" => "<b>您的店鋪名稱</b><br>您的訂單已確認，可通過以下鏈接付款。<br>訂單號： <b>AVO-246</b><br>鏈接： <b>https://your-domain/avocado</b><br>賣完",
     "body" => ":param3 您的訂單已確認，可通過以下鏈接付款。訂單號：：param2 鏈接：：param1 Selldone",
],
];