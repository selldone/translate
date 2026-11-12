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
        'title' => 'Прыняць аплату',
        'sample' => "Ваш плацеж у памеры 267 долараў быў паспяхова выкананы.<br>Заказ: SM-425<br>Дзякуй, <b>Назва вашай крамы</b>.<br>Selldone",
        'body' => "Ваш плацеж :param2 быў паспяхова выкананы.\nЗаказ: :param1\nДзякуй, :param3.\nSelldone",
        'icon' => 'аплата',
        'description' => 'Адпраўце паведамленне кліенту крамы, каб паведаміць аб паспяховай аплаце.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Прыняць аплату',
        'sample' => "Новы плацёж у памеры 267 долараў быў паспяхова выкананы.<br>Заказ: SM-425<br>Дзякуй, <b>Назва вашай крамы</b>.<br>Selldone",
        'body' => "Новы плацеж :param2 быў паспяхова ажыццёўлены.\nЗаказ: :param1\nДзякуй, :param3.\nSelldone",
        'icon' => 'аплата',
        'description' => 'Адпраўце паведамленне ўладальніку крамы, каб паведаміць аб паспяховай аплаце.',

    ],

    'vendor-new-order' => [
        'title' => 'Новы заказ пастаўшчыка',
        'sample' => "Вы атрымалі новы заказ на 200 долараў.<br>Заказ: <b>SM-870</b> для <b>Назва пастаўшчыка</b>.<br>✅ Прадукт A| SKU100001 |1x<br>✅ Прадукт B| SKU100002 |1x",
        'body' => "Вы атрымалі новы заказ :param2.\nЗаказ: :param1 для :param3.\n:param4",
        'icon' => 'вітрына',
        'description' => 'Адпраўце паведамленне прадаўцу, каб паведаміць яму аб новым заказе.',
    ],








    'shop-login' => [
        'title' => 'Код праверкі ўваходу',
        'sample' => "Ваш код для ўваходу: <b>123456</b><br><b>Назва вашай крамы</b><br>Selldone",
        'body' => "Ваш код для ўваходу: :param1\n:param2\nSelldone",
        'icon' => 'лагін',
        'description' => 'Адпраўце кліенту код для ўваходу ў краму.',

    ],

    'user-login' => [
        'title' => 'Паведамленне аб паспяховым уваходзе',
        'sample' => "Паважаны <b>Name</b>,<br>Вы ўвайшлі ў свой уліковы запіс праз <b>iPhone 165.250.300.1</b> у <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Паважаны :param1,\nВы ўвайшлі ў свой уліковы запіс праз :param2 па адрасе :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Адправіць паведамленне пасля ўваходу кліента ў краму.',

    ],

    'avocado-order-submit' => [
        'title' => 'Новы заказ на авакада адпраўлены пакупніку',
        'sample' => "<b>Назва вашай крамы</b><br>Паважаны <b>Ваша імя</b>,<br>Мы атрымалі ваш заказ і разглядаем яго.<br>Номер заказу: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nПаважаны :param1,\nМы атрымалі ваш заказ і разглядаем яго.\nЗаказ №: :param2\nSelldone",
        'icon' => 'факт_чэк',
        'description' => 'Адпраўце паведамленне кліенту пасля размяшчэння замовы з авакада.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Авакада атрымаў новы заказ, адпраўлены прадаўцу',
        'sample' => "Вы атрымалі заказ Avocado: <br>Крама: <b>Назва вашай крамы</b><br>Пакупнік: <b>Імя пакупніка</b><br>Заказ: <b>AVO-246</b><br>Selldone",
        'body' => "Вы атрымалі заказ на авакада:\nКрама: :param1\nПакупнік: :param2\nЗаказ: :param3\nSelldone",
        'icon' => 'як_рэгіраваць',
        'description' => 'Адпраўце паведамленне ўладальніку крамы, каб паведаміць яму аб атрыманні новага заказу на авакада.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Заказ авакада гатовы да аплаты',
        'sample' => "<b>Назва вашай крамы</b><br>Ваш заказ пацверджаны і можа быць аплачаны па наступнай спасылцы.<br>Номер заказу: <b>AVO-246</b><br>Спасылка: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nВаш заказ быў пацверджаны і можа быць аплачаны па наступнай спасылцы.\nЗаказ №: :param2\nСпасылка: :param1\nSelldone",
        'icon' => 'распіска',
        'description' => 'Адпраўце кліенту паведамленне са спасылкай для аплаты пасля таго, як прадавец усталюе кошт і пацвердзіць свой заказ Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Заказ гатовы да адпраўкі',
        'sample' => "Прывітанне, <b>Alex</b>, добрыя навіны, ваш заказ гатовы да адпраўкі.<br>Заказ: <b>SM-123</b>",
        'body' => "Прывітанне, :param4, добрыя навіны, ваш заказ гатовы да адпраўкі.\nЗаказ: :param1",
        'icon' => 'мясцовая_дастаўка',
        'description' => 'Адпраўце паведамленне кліенту, каб паведаміць яму, што яго заказ гатовы да адпраўкі.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Заказ гатовы да самавывазу',
        'sample' => "Прывітанне, Алекс, добрыя навіны, ваш заказ гатовы да атрымання.<br>Заказ: <b>SM-123</b>",
        'body' => "Прывітанне, :param4, добрыя навіны, ваш заказ гатовы да атрымання.\nЗаказ: :param1",
        'icon' => 'падзяліцца месцазнаходжаннем',
        'description' => 'Адпраўце паведамленне кліенту, каб паведаміць яму, што яго заказ гатовы да атрымання.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Заказ пастаўшчыка гатовы да адпраўкі',
        'sample' => "Прывітанне, <b>Alex</b>, добрыя навіны, ваш заказ гатовы да адпраўкі.<br>Заказ: <b>SM-123</b>",
        'body' => "Прывітанне, :param4, добрыя навіны, ваш заказ гатовы да адпраўкі.\nЗаказ: :param1",
        'icon' => 'мясцовая_дастаўка',
        'description' => 'Адпраўце паведамленне кліенту, каб паведаміць яму, што яго заказ гатовы да адпраўкі. Проста на рынку з рэжымам прамой дастаўкі і тыпам дастаўкі не "Вываз".',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Заказ пастаўшчыка гатовы да самавывазу',
        'sample' => "Прывітанне, Алекс, добрыя навіны, ваш заказ гатовы да атрымання.<br>Заказ: <b>SM-123</b>",
        'body' => "Прывітанне, :param4, добрыя навіны, ваш заказ гатовы да атрымання.\nЗаказ: :param1",
        'icon' => 'падзяліцца месцазнаходжаннем',
        'description' => 'Адпраўце паведамленне кліенту, каб паведаміць яму, што яго заказ гатовы да атрымання. Проста на рынку з рэжымам прамой дастаўкі і тыпам дастаўкі - самавываз.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Пацверджанне заказа',
        'sample' => "Прывітанне Алекс, мы разгледзелі ваш заказ. Вось статус пацверджання вашых тавараў: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Прывітанне, :param4, мы разгледзелі ваш заказ. Вось статус пацверджання вашых тавараў:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'заданне_здадзена',
        'description' => 'Апавяшчае кліента аб таварах у яго замове, якія былі прыняты або адхілены прадаўцом.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Пацверджанне замовы тавараў пастаўшчыка',
        'sample' => "Прывітанне Алекс, мы разгледзелі ваш заказ. Вось статус пацверджання вашых тавараў: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Прывітанне, :param4, мы разгледзелі ваш заказ. Вось статус пацверджання вашых тавараў:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'заданне_здадзена',
        'description' => 'Апавяшчае кліента аб элементах у яго замове, якія былі прынятыя або адхіленыя пастаўшчыком.',
    ],



];
