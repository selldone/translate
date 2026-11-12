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
        'title' => 'Түләүне кабул итегез',
        'sample' => "Сезнең 267 \$ түләү уңышлы хәл ителде.",
        'body' => "Сезнең :param2 түләү уңышлы хәл ителде.\nЗаказ: :param1\nРәхмәт, :param3.\nSelldone",
        'icon' => 'түләү',
        'description' => 'Уңышлы түләү турында мәгълүмат бирү өчен кибет клиентына хәбәр җибәрегез.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Түләүне кабул итегез',
        'sample' => "Яңа \$ 267 түләү уңышлы хәл ителде.",
        'body' => "Яңа :param2 түләү уңышлы хәл ителде.\nЗаказ: :param1\nРәхмәт, :param3.\nSelldone",
        'icon' => 'түләү',
        'description' => 'Кибет хуҗасына уңышлы түләү турында хәбәр итү өчен хәбәр җибәрегез.',

    ],

    'vendor-new-order' => [
        'title' => 'Сатучы яңа заказ',
        'sample' => "Сез яңа 200 \$ заказ алдыгыз.| SKU100001 |1x<br>✅ В продукт| SKU100002 |1х",
        'body' => "Сез яңа :param2 заказ алдыгыз.\nЗаказ: :param3 өчен :param1.\n:param4",
        'icon' => 'кибет кыры',
        'description' => 'Сатучыга яңа заказ турында хәбәр итү өчен хәбәр җибәрегез.',
    ],








    'shop-login' => [
        'title' => 'Керү тикшерү коды',
        'sample' => "Сезнең логин кодыгыз: <b>123456</b><br><b> Сезнең кибет исеме</b><br>Selldone",
        'body' => "Сезнең логин кодыгыз: :param1\n:param2\nSelldone",
        'icon' => 'логин',
        'description' => 'Кибеткә керү өчен клиентка логин код җибәрегез.',

    ],

    'user-login' => [
        'title' => 'Уңыш турында хәбәр',
        'sample' => "Хөрмәтле <b>Name</b>, <br> Сез үз хисап язмагызга <b>iPhone 165.250.300.1</b> <b>5 / 8/2021 9:14 AM</b>.<br>Selldone",
        'body' => "Хөрмәтле :param1,\nСез үз хисабыгызга :param2 :param3 аша кердегез.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Клиент кибеткә кергәннән соң хәбәр җибәрегез.',

    ],

    'avocado-order-submit' => [
        'title' => 'Авокадо яңа заказ сатып алучыга җибәрелде',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nХөрмәтле :param1,\nБез сезнең заказны алдык һәм без аны карыйбыз.\nЗаказ #: :param2\nSelldone",
        'icon' => 'факт',
        'description' => 'Авокадо заказын урнаштырганнан соң, клиентка хәбәр җибәрегез.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Авокадо сатучыга җибәрү өчен яңа заказ ала',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "Сез Авокадо заказын алдыгыз:\nКибет: :param1\nСатып алучы: :param2\nЗаказ: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Кибет хуҗасына яңа Авокадо заказы алу турында хәбәр җибәрү.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Авокадо заказы түләргә әзер',
        'sample' => "<b>Y Сезнең кибет исеме</b><br> Сезнең заказ расланды һәм түбәндәге сылтама аша түләнергә мөмкин.",
        'body' => ":param3\nСезнең заказ расланды һәм түбәндәге сылтама аша түләргә мөмкин.\nЗаказ #: :param2\nСсылка: :param1\nSelldone",
        'icon' => 'квитанция',
        'description' => 'Сатучы бәясен билгеләгәннән соң, клиентка түләү сылтамасы белән хәбәр җибәрегез һәм аларның Авокадо заказын раслагыз.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Тапшырырга әзер',
        'sample' => "Сәлам <b>Alex</b>, яхшы хәбәр, сезнең заказ хәзер җибәрелергә әзер. <br>Order: <b>SM-123</b>",
        'body' => "Сәлам :param4, яхшы хәбәр, сезнең заказ хәзер җибәрелергә әзер.\nЗаказ: :param1",
        'icon' => 'локаль',
        'description' => 'Клиентка хәбәр җибәрегез, аларның заказы җибәрелергә әзер.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Алып барырга әзер заказ',
        'sample' => "Сәлам Алекс, яхшы хәбәр, сезнең заказ хәзер алырга әзер. <br>Order: <b>SM-123</b>",
        'body' => "Сәлам :param4, яхшы хәбәр, сезнең заказ хәзер алырга әзер.\nЗаказ: :param1",
        'icon' => 'share_location',
        'description' => 'Клиентка аларның заказын алырга әзер булулары турында хәбәр җибәрегез.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Сатучы заказ җибәрергә әзер',
        'sample' => "Сәлам <b>Alex</b>, яхшы хәбәр, сезнең заказ хәзер җибәрелергә әзер. <br>Order: <b>SM-123</b>",
        'body' => "Сәлам :param4, яхшы хәбәр, сезнең заказ хәзер җибәрелергә әзер.\nЗаказ: :param1",
        'icon' => 'локаль',
        'description' => 'Клиентка хәбәр җибәрегез, аларның заказы җибәрелергә әзер. Базарда туры җибәрү режимы һәм җибәрү төре белән Пикап түгел.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Сатучы заказ алырга әзер',
        'sample' => "Сәлам Алекс, яхшы хәбәр, сезнең заказ хәзер алырга әзер. <br>Order: <b>SM-123</b>",
        'body' => "Сәлам :param4, яхшы хәбәр, сезнең заказ хәзер алырга әзер.\nЗаказ: :param1",
        'icon' => 'share_location',
        'description' => 'Клиентка аларның заказын алырга әзер булулары турында хәбәр җибәрегез. Базарда туры җибәрү режимы һәм җибәрү төре белән Пикуп.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Заказларны раслау',
        'sample' => "Исәнмесез Алекс, без сезнең заказны карадык. Менә сезнең әйберләр өчен раслау статусы: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Исәнмесез :param4, без сезнең заказны карадык. Менә сезнең әйберләр өчен раслау статусы:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Сатучы тарафыннан кабул ителгән яки кире кагылган әйберләр турында клиентка хәбәр итә.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Сатучы заказ әйберләрен раслау',
        'sample' => "Исәнмесез Алекс, без сезнең заказны карадык. Менә сезнең әйберләр өчен раслау статусы: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Исәнмесез :param4, без сезнең заказны карадык. Менә сезнең әйберләр өчен раслау статусы:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Сатучы тарафыннан кабул ителгән яки кире кагылган әйберләр турында клиентка хәбәр итә.',
    ],



];
