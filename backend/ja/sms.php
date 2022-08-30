<?php 

 return [
     "shop-order-payment" => [
     "title" => "支払いを受け入れる",
     "sample" => "267 ドルのお支払いは正常に決済されました。<br>注文：SM-425<br>ありがとう、<b>あなたの店名</b>。<br>セルダン",
     "body" => ":param2 の支払いは正常に決済されました。注文: :param1 ありがとう、:param3。セルダン",
],
     "shop-order-payment-admin" => [
     "title" => "支払いを受け入れる",
     "sample" => "新しい 267 ドルの支払いが正常に決済されました。<br>注文：SM-425<br>ありがとう、<b>あなたの店名</b>。<br>セルダン",
     "body" => "新しい :param2 支払いが正常に決済されました。注文: :param1 ありがとう、:param3。セルダン",
],
     "shop-login" => [
     "title" => "ログイン認証コード",
     "sample" => "あなたのログインコードは: <b>123456</b><br><b>あなたの店名</b><br>セルダン",
     "body" => "あなたのログインコードは: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "ログイン成功メッセージ",
     "sample" => "親愛なる<b>名前</b>、<br> 2021 年<b>5 月 8 日午前 9 時 14 分</b>に<b>iPhone 165.250.300.1</b>でアカウントにログインしました。<br>セルダン",
     "body" => ":param1 様 :param2 の :param3 でアカウントにログインしました。セルダン",
],
     "avocado-order-submit" => [
     "title" => "アボカドの新しい注文が送信され、購入者に送信されます",
     "sample" => "<b>あなたの店名</b><br>親愛なる<b>あなたの名前</b>、<br>ご注文を承り、確認中です。<br>注文番号: <b>AVO-246</b><br>セルダン",
     "body" => ":param3 :param1 様、ご注文を承り、確認中です。注文番号: :param2 売り切れ",
],
     "avocado-order-submit-seller" => [
     "title" => "アボカドは新しい注文を受け取り、販売者に送信します",
     "sample" => "アボカドの注文を受け取りました:<br>店名：<b>店名</b><br>購入者：<b>購入者名</b><br>注文: <b>AVO-246</b><br>セルダン",
     "body" => "アボカドの注文を受け取りました: 店舗: :param1 買い手: :param2 注文: :param3 販売完了",
],
     "avocado-ready-to-pay" => [
     "title" => "アボカドの注文の支払い準備完了",
     "sample" => "<b>あなたの店名</b><br>ご注文は確認されました。次のリンクからお支払いいただけます。<br>注文番号: <b>AVO-246</b><br>リンク: <b>https://your-domain/avocado</b><br>セルダン",
     "body" => ":param3 ご注文が確認されました。次のリンクからお支払いいただけます。注文番号: :param2 リンク: :param1 売り切れ",
],
];