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
        'title' => 'Төлөмдү кабыл алыңыз',
        'sample' => "267\$ төлөмүңүз ийгиликтүү чечилди.<br> Заказ: SM-425<br> Рахмат, <b>сиздин дүкөндүн аты</b> .<br> Selldone",
        'body' => ":param2 төлөмүңүз ийгиликтүү чечилди.\nЗаказ: :param1\nРахмат, :param3.\nSelldone",
        'icon' => 'төлөм',
        'description' => 'Ийгиликтүү төлөм жөнүндө кабарлоо үчүн дүкөндүн кардарына билдирүү жөнөтүңүз.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Төлөмдү кабыл алыңыз',
        'sample' => "Жаңы 267\$ төлөм ийгиликтүү чечилди.<br> Заказ: SM-425<br> Рахмат, <b>сиздин дүкөндүн аты</b> .<br> Selldone",
        'body' => "Жаңы :param2 төлөмү ийгиликтүү чечилди.\nЗаказ: :param1\nРахмат, :param3.\nSelldone",
        'icon' => 'төлөм',
        'description' => 'Ийгиликтүү төлөм жөнүндө кабарлоо үчүн дүкөндүн ээсине билдирүү жөнөтүңүз.',

    ],

    'vendor-new-order' => [
        'title' => 'Сатуучу Жаңы Заказ',
        'sample' => "Сиз жаңы \$200 буйрутманы алдыңыз. <br>Order: <b> үчүн <b>SM-870</b> Жетүүчүнүн аты</b>.<br>✅ Продукт А| SKU100001 |1x<br>✅ Продукт B| SKU100002 |1x",
        'body' => "Сиз жаңы :param2 буйрутмасын алдыңыз.\nЗаказ: :param3 үчүн :param1.\n:param4",
        'icon' => 'дүкөндүн маңдайкы бети',
        'description' => 'Сатуучуга жаңы заказ жөнүндө кабарлоо үчүн билдирүү жөнөтүңүз.',
    ],








    'shop-login' => [
        'title' => 'Кирүү текшерүү коду',
        'sample' => "Сиздин логин кодуңуз: <b>123456</b><br> <b>Сиздин дүкөндүн аты</b><br> Selldone",
        'body' => "Сиздин логин кодуңуз: :param1\n:param2\nSelldone",
        'icon' => 'кирүү',
        'description' => 'Дүкөнгө кирүү үчүн кардарга логин кодун жөнөтүңүз.',

    ],

    'user-login' => [
        'title' => 'Кирүү Ийгилик билдирүүсү',
        'sample' => "Урматтуу <b>ысым</b> ,<br> Сиз өз аккаунтуңузга <b>iPhone 165.250.300.1</b> аркылуу 08.05.2021 саат <b>9:14тө кирдиңиз</b> .<br> Selldone",
        'body' => "Урматтуу :param1,\nСиз каттоо эсебиңизге :param2 боюнча :param3 аркылуу кирдиңиз.\nSelldone",
        'icon' => 'системанын_коопсуздугу_жаңыртылышы_жакшы',
        'description' => 'Кардар дүкөнгө киргенден кийин билдирүү жөнөтүңүз.',

    ],

    'avocado-order-submit' => [
        'title' => 'Авокадо жаңы заказы сатып алуучуга жөнөтүлөт',
        'sample' => "<b>Сиздин дүкөндүн аты</b><br> Урматтуу <b>сиздин атыңыз</b> ,<br> Буйрутмаңызды алдык жана биз аны карап жатабыз.<br> Заказ №: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nУрматтуу :param1,\nБуйрутмаңызды алдык жана биз аны карап жатабыз.\nЗаказ №: :param2\nSelldone",
        'icon' => 'факт_текшерүү',
        'description' => 'Авокадо буйрутма бергенден кийин кардарга билдирүү жөнөтүңүз.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Авокадо жаңы буйрутманы сатуучуга жөнөтөт',
        'sample' => "Сиз авокадо буйрутмасын алдыңыз:<br> Дүкөн: <b>Сиздин дүкөндүн аталышы</b><br> Сатып алуучу: <b>Сатып алуучунун аты</b><br> Заказ: <b>AVO-246</b><br> Selldone",
        'body' => "Авокадо буйрутмасын алдыңыз:\nДүкөн: :param1\nСатып алуучу: :param2\nЗаказ: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Дүкөндүн ээсине жаңы авокадо буйрутмасын алуу жөнүндө билдирүү жөнөтүңүз.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Авокадо заказы төлөөгө даяр',
        'sample' => "<b>Сиздин дүкөндүн аты</b><br> Буйрутмаңыз ырасталды жана аны төмөнкү шилтеме аркылуу төлөсө болот.<br> Заказ №: <b>AVO-246</b><br> Шилтеме: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nБуйрутмаңыз ырасталды жана аны төмөнкү шилтеме аркылуу төлөсө болот.\nЗаказ №: :param2\nШилтеме: :param1\nSelldone",
        'icon' => 'квитанция',
        'description' => 'Сатуучу баасын койгондон кийин кардарга төлөм шилтемеси менен билдирүү жөнөтүңүз жана алардын авокадо буйрутмасын ырастаңыз.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Заказ жөнөтүүгө даяр',
        'sample' => "Салам <b>Alex</b>, жакшы жаңылык, буйрутмаңыз жөнөтүлүүгө даяр.<br>Заказ: <b>SM-123</b>",
        'body' => "Салам :param4, жакшы жаңылык, буйрутмаңыз жөнөтүлүүгө даяр.\nЗаказ: :param1",
        'icon' => 'жергиликтүү_жеткирүү',
        'description' => 'Кардарга заказ жөнөтүүгө даяр экендигин билдирүү үчүн билдирүү жөнөтүңүз.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Заказ алууга даяр',
        'sample' => "Салам Алекс, жакшы жаңылык, буйрутмаңызды алууга даяр.<br>Заказ: <b>SM-123</b>",
        'body' => "Салам :param4, жакшы жаңылык, буйрутмаңызды алууга даяр.\nЗаказ: :param1",
        'icon' => 'бөлүшүү_жай',
        'description' => 'Кардарга алардын заказы кабыл алууга даяр экендигин билдирүү үчүн билдирүү жөнөтүңүз.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Сатуучунун буйрутмасы жөнөтүүгө даяр',
        'sample' => "Салам <b>Alex</b>, жакшы жаңылык, буйрутмаңыз жөнөтүлүүгө даяр.<br>Заказ: <b>SM-123</b>",
        'body' => "Салам :param4, жакшы жаңылык, буйрутмаңыз жөнөтүлүүгө даяр.\nЗаказ: :param1",
        'icon' => 'жергиликтүү_жеткирүү',
        'description' => 'Кардарга заказ жөнөтүүгө даяр экендигин билдирүү үчүн билдирүү жөнөтүңүз. Жөн эле базарда Түз жеткирүү режими жана жеткирүү түрү алып кетүү эмес.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Сатуучунун буйрутмасы алууга даяр',
        'sample' => "Салам Алекс, жакшы жаңылык, буйрутмаңызды алууга даяр.<br>Заказ: <b>SM-123</b>",
        'body' => "Салам :param4, жакшы жаңылык, буйрутмаңызды алууга даяр.\nЗаказ: :param1",
        'icon' => 'бөлүшүү_жай',
        'description' => 'Кардарга алардын заказы кабыл алууга даяр экендигин билдирүү үчүн билдирүү жөнөтүңүз. Жөн эле базарда Түз жеткирүү режими жана жеткирүү түрү - пикап.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Заказ буюмдарын тастыктоо',
        'sample' => "Салам Алекс, буйрутмаңызды карап чыктык. Бул жерде сиздин нерселериңиздин ырастоо статусу: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Салам :param4, буйрутмаңызды карап чыктык. Бул жерде сиздин нерселериңиздин ырастоо абалы:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'тапшырма_берилди',
        'description' => 'Сатуучу тарабынан кабыл алынган же четке кагылган буйрутмасындагы буюмдар жөнүндө кардарга кабарлайт.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Сатуучуга буйрутма буюмдарын тастыктоо',
        'sample' => "Салам Алекс, буйрутмаңызды карап чыктык. Бул жерде сиздин нерселериңиздин ырастоо статусу: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Салам :param4, буйрутмаңызды карап чыктык. Бул жерде сиздин нерселериңиздин ырастоо абалы:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'тапшырма_берилди',
        'description' => 'Сатуучу тарабынан кабыл алынган же четке кагылган буйрутмасындагы буюмдар жөнүндө кардарга кабарлайт.',
    ],



];
