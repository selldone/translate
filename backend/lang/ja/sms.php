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
        'title' => '支払いを受け入れる',
        'sample' => "267 ドルのお支払いは正常に完了しました。<br>注文: SM-425<br>ありがとうございます。<b>ストア名</b>.<br>Selldone",
        'body' => ":param2 のお支払いは正常に決済されました。\n注文: :param1\nありがとう、:param3。\nSelldone",
        'icon' => '支払い',
        'description' => '支払いが成功したことをショップの顧客に通知するメッセージを送信します。',

    ],
    'shop-order-payment-admin' => [
        'title' => '支払いを受け入れる',
        'sample' => "新規 \$267 の支払いが正常に完了しました。<br>注文: SM-425<br>ありがとうございます、<b>あなたのストア名</b>.<br>Selldone",
        'body' => "新しい :param2 の支払いが正常に決済されました。\n注文: :param1\nありがとう、:param3。\nSelldone",
        'icon' => '支払い',
        'description' => '支払いが成功したことをショップのオーナーに通知するメッセージを送信します。',

    ],

    'vendor-new-order' => [
        'title' => 'ベンダー新規注文',
        'sample' => "新しい \$200 の注文を受け取りました。<br>注文: <b> の <b>SM-870</b> ベンダー名</b>.<br>✅ 製品 A| SKU100001 |1x<br>✅ 製品B| SKU100002 |1x",
        'body' => "新しい :param2 注文を受け取りました。\n注文: :param3 の場合は :param1。\n:param4",
        'icon' => '店頭',
        'description' => '新しい注文について通知するメッセージをベンダーに送信します。',
    ],








    'shop-login' => [
        'title' => 'ログイン認証コード',
        'sample' => "ログイン コードは次のとおりです: <b>123456</b><br><b>ストア名</b><br>Selldone",
        'body' => "あなたのログインコードは次のとおりです: :param1\n:param2\nSelldone",
        'icon' => 'ログイン',
        'description' => 'ショップにログインするためのログインコードを顧客に送信します。',

    ],

    'user-login' => [
        'title' => 'ログイン成功メッセージ',
        'sample' => "<b>Name</b>、<br> 様 <b>iPhone 165.250.300.1</b>、<b>5/8/2021 9:14AM</b>.<br>Selldone によりアカウントにログインしました。",
        'body' => ":param1 様\n:param2、:param3 によってアカウントにログインしました。\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => '顧客がショップにログインした後にメッセージを送信します。',

    ],

    'avocado-order-submit' => [
        'title' => 'アボカドの新しい注文が送信され、購入者に送信されます',
        'sample' => "<b>あなたのストア名</b><br>親愛なる<b>あなたの名前</b>、<br>ご注文を受け取り、検討中です。<br>注文番号: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\n:param1 様\nご注文を受領し、検討中です。\n注文番号: :param2\nSelldone",
        'icon' => 'ファクトチェック',
        'description' => 'アボカドを注文した後、顧客にメッセージを送信します。',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'アボカドは新しい注文を受け取り、販売者に送信します',
        'sample' => "アボカドの注文を受け取りました:<br>ストア: <b>ストア名</b><br>購入者: <b>購入者名</b><br>注文: <b>AVO-246</b><br>Selldone",
        'body' => "アボカドの注文を受け取りました:\nストア: :param1\n購入者: :param2\n注文: :param3\nSelldone",
        'icon' => '登録方法',
        'description' => 'ショップオーナーにメッセージを送信して、新しいアボカドの注文を受け取ったことを通知します。',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'アボカドの注文の支払い準備完了',
        'sample' => "<b>あなたのストア名</b><br>ご注文は確認されており、次のリンクからお支払いいただけます。<br>注文番号: <b>AVO-246</b><br>リンク: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nご注文は確認されましたので、次のリンクからお支払いいただけます。\n注文番号: :param2\nリンク: :param1\nSelldone",
        'icon' => '領収書',
        'description' => '販売者が費用を設定し、アボカドの注文を確認した後、支払いリンクを含むメッセージを顧客に送信します。',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => '注文品の発送準備完了',
        'sample' => "こんにちは、<b>Alex</b>、良いニュースです。ご注文は発送の準備が整いました。<br>注文: <b>SM-123</b>",
        'body' => "こんにちは、:param4 さん、朗報です。ご注文は発送の準備が整いました。\n注文: :param1",
        'icon' => '地元発送',
        'description' => '顧客にメッセージを送信して、注文の発送準備ができたことを知らせます。',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => '注文品の受け取り準備完了',
        'sample' => "こんにちはアレックス、良いニュースです。ご注文の商品を受け取る準備が整いました。<br>注文: <b>SM-123</b>",
        'body' => "こんにちは、:param4 さん、良いニュースです。ご注文の商品を受け取る準備が整いました。\n注文: :param1",
        'icon' => '共有場所',
        'description' => '顧客にメッセージを送信して、注文品の受け取りの準備ができたことを知らせます。',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'ベンダーの注文は出荷準備完了',
        'sample' => "こんにちは、<b>Alex</b>、良いニュースです。ご注文は発送の準備が整いました。<br>注文: <b>SM-123</b>",
        'body' => "こんにちは、:param4 さん、朗報です。ご注文は発送の準備が整いました。\n注文: :param1",
        'icon' => '地元発送',
        'description' => '顧客にメッセージを送信して、注文の発送準備ができたことを知らせます。直接配送モードを備えたマーケットプレイス内にあり、配送タイプはピックアップではありません。',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'ベンダーの注文は受け取り準備完了',
        'sample' => "こんにちはアレックス、良いニュースです。ご注文の商品を受け取る準備が整いました。<br>注文: <b>SM-123</b>",
        'body' => "こんにちは、:param4 さん、良いニュースです。ご注文の商品を受け取る準備が整いました。\n注文: :param1",
        'icon' => '共有場所',
        'description' => '顧客にメッセージを送信して、注文品の受け取りの準備ができたことを知らせます。マーケットプレイスでは直接配送モードがあり、配送タイプはピックアップです。',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => '注文商品の確認',
        'sample' => "こんにちはアレックス、あなたの注文を確認しました。あなたの商品の確認ステータスは次のとおりです:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "こんにちは、:param4 様、ご注文を確認させていただきました。アイテムの確認ステータスは次のとおりです。"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => '割り当て_ターンドイン',
        'description' => '販売者によって承認または拒否された注文の商品について顧客に通知します。',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'ベンダー注文品の確認',
        'sample' => "こんにちはアレックス、あなたの注文を確認しました。あなたの商品の確認ステータスは次のとおりです:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "こんにちは、:param4 様、ご注文を確認させていただきました。アイテムの確認ステータスは次のとおりです。"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => '割り当て_ターンドイン',
        'description' => '注文内の商品がベンダーによって承認または拒否されたことについて顧客に通知します。',
    ],



];
