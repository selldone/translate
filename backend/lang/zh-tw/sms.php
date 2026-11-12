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
        'sample' => "您的267美元付款已成功結算。 <br>訂購：SM-425<br>謝謝，<b>您的店名</b>.<br>Selldone",
        'body' => "您的:param2付款已成功結算。\n訂購：:param1\n謝謝，:param3。\nSelldone",
        'icon' => '付款',
        'description' => '向店舖客戶發送訊息，告知付款成功。',

    ],
    'shop-order-payment-admin' => [
        'title' => '接受付款',
        'sample' => "新267美元付款已成功結算。 <br>訂購：SM-425<br>謝謝，<b>您的店名</b>.<br>Selldone",
        'body' => "新:param2付款已結算成功。\n訂購：:param1\n謝謝，:param3。\nSelldone",
        'icon' => '付款',
        'description' => '發送訊息給店主，告知他們付款成功。',

    ],

    'vendor-new-order' => [
        'title' => '供應商新訂單',
        'sample' => "您收到了新的 200 美元訂單。 <br>訂單：<b>SM-870</b> for <b>供應商名稱</b>.<br>✅ 產品 A| SKU100001 |1x<br>✅ 產品B| SKU100002 |1x",
        'body' => "您收到了新的 :param2 訂單。\n訂單：:param1 為 :param3。\n:param4",
        'icon' => '店面',
        'description' => '向供應商發送訊息，通知他們有新訂單。',
    ],








    'shop-login' => [
        'title' => '登錄驗證碼',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "您的登入密碼是：:param1\n:param2\nSelldone",
        'icon' => '登入',
        'description' => '向客戶發送登入代碼以登入商店。',

    ],

    'user-login' => [
        'title' => '登錄成功消息',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "尊敬的:param1：\n您已透過:param2、:param3登入您的帳號。\nSelldone",
        'icon' => '系統安全更新好',
        'description' => '顧客登入商店後發送訊息。',

    ],

    'avocado-order-submit' => [
        'title' => '鱷梨新訂單提交發送給買家',
        'sample' => "<b>您的商店名稱</b><br>親愛的<b>您的名字</b>,<br>我們已收到您的訂單，我們正在審核。 <br>訂單號碼：<b>AVO-246</b><br>Selldone",
        'body' => ":param3\n尊敬的:param1：\n我們已收到您的訂單，正在審核。\n訂單號碼：:param2\nSelldone",
        'icon' => '事實檢查',
        'description' => '下達酪梨訂單後向客戶發送訊息。',

    ],


    'avocado-order-submit-seller' => [
        'title' => '鱷梨收到新訂單發送給賣家',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "您收到了酪梨訂單：\n店鋪：:param1\n買家：:param2\n訂單：:param3\nSelldone",
        'icon' => '如何註冊',
        'description' => '向店主發送訊息，通知他們收到新的酪梨訂單。',

    ],



    'avocado-ready-to-pay' => [
        'title' => '準備付款的鱷梨訂單',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\n您的訂單已確認，可以透過以下連結付款。\n訂單號碼：:param2\n連結：:param1\nSelldone",
        'icon' => '收據',
        'description' => '賣家設定成本並確認酪梨訂單後，向客戶發送包含付款連結的訊息。',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => '訂單準備出貨',
        'sample' => "您好 <b>Alex</b>，好消息，您的訂單現已準備好出貨。 <br>訂單：<b>SM-123</b>",
        'body' => "您好 :param4，好消息，您的訂單現已準備好出貨。\n訂購：:param1",
        'icon' => '本地運輸',
        'description' => '向客戶發送訊息，通知他們訂單已準備好發貨。',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => '訂單已準備好取貨',
        'sample' => "您好，Alex，好消息，您的訂單現已可以提貨了。 <br>訂單：<b>SM-123</b>",
        'body' => "您好 :param4，好消息，您的訂單現已可以提貨了。\n訂購：:param1",
        'icon' => '共享位置',
        'description' => '向客戶發送訊息，通知他們訂單已準備好提貨。',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => '供應商訂單準備出貨',
        'sample' => "您好 <b>Alex</b>，好消息，您的訂單現已準備好出貨。 <br>訂單：<b>SM-123</b>",
        'body' => "您好 :param4，好消息，您的訂單現已準備好出貨。\n訂購：:param1",
        'icon' => '本地運輸',
        'description' => '向客戶發送訊息，通知他們訂單已準備好發貨。就在市場上，直接運輸模式和交付類型不是取貨。',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => '供應商訂單已準備好提貨',
        'sample' => "您好，Alex，好消息，您的訂單現已可以提貨了。 <br>訂單：<b>SM-123</b>",
        'body' => "您好 :param4，好消息，您的訂單現已可以提貨了。\n訂購：:param1",
        'icon' => '共享位置',
        'description' => '向客戶發送訊息，通知他們訂單已準備好提貨。就在市場上，直接運輸模式和交付類型是取貨。',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => '訂單項目確認',
        'sample' => "您好亞歷克斯，我們已審核您的訂單。這是您的物品的確認狀態：<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "您好:param4，我們已審核您的訂單。以下是您的商品的確認狀態："
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => '作業轉入',
        'description' => '通知客戶訂單中已被賣家接受或拒絕的商品。',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => '供應商訂單項目確認',
        'sample' => "您好亞歷克斯，我們已審核您的訂單。這是您的物品的確認狀態：<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "您好:param4，我們已審核您的訂單。以下是您的商品的確認狀態："
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => '作業轉入',
        'description' => '通知客戶訂單中已被供應商接受或拒絕的商品。',
    ],



];
