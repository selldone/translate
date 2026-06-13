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
        'title' => 'Принять оплату',
        'sample' => "Ваш платеж в размере 267 долларов США был успешно оплачен.<br>Заказ: SM-425<br>Спасибо, <b>Название вашего магазина</b>.<br>Selldone",
        'body' => "Ваш платеж :param2 был успешно оплачен.\nЗаказ: :param1\nСпасибо, :param3.\nSelldone",
        'icon' => 'оплата',
        'description' => 'Отправьте сообщение покупателю магазина, чтобы сообщить об успешной оплате.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Принять оплату',
        'sample' => "Новый платеж в размере 267 долларов США был успешно осуществлен.<br>Заказ: SM-425<br>Спасибо, <b>Название вашего магазина</b>.<br>Selldone",
        'body' => "Новый платеж :param2 был успешно урегулирован.\nЗаказ: :param1\nСпасибо, :param3.\nSelldone",
        'icon' => 'оплата',
        'description' => 'Отправьте сообщение владельцу магазина, чтобы сообщить ему об успешной оплате.',

    ],

    'vendor-new-order' => [
        'title' => 'Поставщик Новый заказ',
        'sample' => "Вы получили новый заказ на 200 долларов США. <br>Заказ: <b>SM-870</b> для <b>Название поставщика</b>.<br>вещество A| SKU100001 |1x<br> ✅ Продукт Б| SKU100002 |1x",
        'body' => "Вы получили новый заказ :param2.\nЗаказ: :param1 для :param3.\n:param4",
        'icon' => 'витрина',
        'description' => 'Отправьте сообщение продавцу, чтобы сообщить ему о новом заказе.',
    ],








    'shop-login' => [
        'title' => 'Код подтверждения входа',
        'sample' => "Ваш код входа: <b>123456</b><br><b>Название вашего магазина</b><br>Selldone",
        'body' => "Ваш код входа: :param1.\n:param2\nSelldone",
        'icon' => 'войти',
        'description' => 'Отправьте клиенту код входа для входа в магазин.',

    ],

    'user-login' => [
        'title' => 'Сообщение об успешном входе',
        'sample' => "Уважаемый <b>Name</b>,<br>Вы вошли в свою учетную запись с помощью <b>iPhone 165.250.300.1</b> в <b>5/8/2021 9:14</b>.<br>Selldone",
        'body' => "Дорогой :param1,\nВы вошли в свою учетную запись с помощью :param2 по адресу :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Отправьте сообщение после входа клиента в магазин.',

    ],

    'avocado-order-submit' => [
        'title' => 'Новый заказ авокадо отправлен покупателю',
        'sample' => "<b>Название вашего магазина</b><br>Уважаемый <b>Ваше имя</b>,<br>Мы получили ваш заказ и проверяем его.<br>Номер заказа: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nДорогой :param1,\nМы получили ваш заказ и проверяем его.\nНомер заказа: :param2\nSelldone",
        'icon' => 'факт_проверка',
        'description' => 'Отправьте сообщение клиенту после оформления заказа на авокадо.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Авокадо получить новый заказ отправить продавцу',
        'sample' => "Вы получили заказ авокадо: <br>Магазин: <b>Название вашего магазина</b><br>Покупатель: <b>Имя покупателя</b><br>Заказ: <b>AVO-246</b><br>Selldone",
        'body' => "Вы получили заказ Авокадо:\nМагазин: :param1\nПокупатель: :param2\nЗаказ: :param3\nSelldone",
        'icon' => 'How_to_reg',
        'description' => 'Отправьте сообщение владельцу магазина, чтобы сообщить ему о получении нового заказа на авокадо.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Заказ авокадо готов к оплате',
        'sample' => "<b>Название вашего магазина</b><br>Ваш заказ подтвержден и может быть оплачен по следующей ссылке.<br>Номер заказа: <b>AVO-246</b><br>Ссылка: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nВаш заказ подтвержден и может быть оплачен по следующей ссылке.\nНомер заказа: :param2\nСсылка: :param1\nSelldone",
        'icon' => 'квитанция',
        'description' => 'После того, как продавец установит стоимость и подтвердит заказ на авокадо, отправьте покупателю сообщение со ссылкой на оплату.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Заказ готов к отправке',
        'sample' => "Привет <b>Alex</b>, хорошие новости, ваш заказ готов к отправке.<br>Заказ: <b>SM-123</b>",
        'body' => "Привет :param4, хорошие новости, ваш заказ готов к отправке.\nЗаказ: :param1",
        'icon' => 'local_shipping',
        'description' => 'Отправьте клиенту сообщение, чтобы сообщить ему, что его заказ готов к отправке.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Заказ готов к самовывозу',
        'sample' => "Привет, Алекс, хорошие новости, ваш заказ готов к получению.<br>Заказ: <b>SM-123</b>",
        'body' => "Привет :param4, хорошие новости, ваш заказ теперь готов к получению.\nЗаказ: :param1",
        'icon' => 'Share_location',
        'description' => 'Отправьте клиенту сообщение о том, что его заказ готов к выдаче.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Заказ поставщика готов к отправке',
        'sample' => "Привет <b>Alex</b>, хорошие новости, ваш заказ готов к отправке.<br>Заказ: <b>SM-123</b>",
        'body' => "Привет :param4, хорошие новости, ваш заказ готов к отправке.\nЗаказ: :param1",
        'icon' => 'local_shipping',
        'description' => 'Отправьте клиенту сообщение, чтобы сообщить ему, что его заказ готов к отправке. Только на торговой площадке с режимом прямой доставки и типом доставки не Самовывоз.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Заказ поставщика готов к самовывозу',
        'sample' => "Привет, Алекс, хорошие новости, ваш заказ готов к получению.<br>Заказ: <b>SM-123</b>",
        'body' => "Привет :param4, хорошие новости, ваш заказ теперь готов к получению.\nЗаказ: :param1",
        'icon' => 'Share_location',
        'description' => 'Отправьте клиенту сообщение о том, что его заказ готов к выдаче. Только на торговой площадке с режимом прямой доставки и типом доставки — Самовывоз.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Подтверждение заказа товаров',
        'sample' => "Здравствуйте, Алексей, мы рассмотрели ваш заказ. Вот статус подтверждения ваших товаров: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Здравствуйте, :param4, мы рассмотрели ваш заказ. Вот статус подтверждения ваших товаров:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'назначение_повернуто_в',
        'description' => 'Уведомляет покупателя о товарах в его заказе, которые были приняты или отклонены продавцом.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Подтверждение позиций заказа поставщика',
        'sample' => "Здравствуйте, Алексей, мы рассмотрели ваш заказ. Вот статус подтверждения ваших товаров: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Здравствуйте, :param4, мы рассмотрели ваш заказ. Вот статус подтверждения ваших товаров:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'назначение_повернуто_в',
        'description' => 'Уведомляет клиента о товарах в его заказе, которые были приняты или отклонены поставщиком.',
    ],



];
