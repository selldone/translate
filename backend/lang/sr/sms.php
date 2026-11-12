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
        'title' => 'Прихватите плаћање',
        'sample' => "Ваша уплата од 267 УСД је успешно измирена.КК0000ККНаруџба: СМ-425КК0001ККХвала, КК0002ККНазив ваше продавницеКК0003КК.КК0004КККК0005КК",
        'body' => "Your :param2 payment was settled successfully.\nOrder: :param1\nThanks, :param3.\nSelldone",
        'icon' => 'плаћање',
        'description' => 'Пошаљите поруку купцу продавнице да обавестите о успешној уплати.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Прихватите плаћање',
        'sample' => "Нова уплата од 267 УСД је успешно измирена.КК0000ККНаруџба: СМ-425КК0001ККХвала, КК0002ККНазив ваше продавницеКК0003КК.КК0004КККК0005КК",
        'body' => "New :param2 payment was settled successfully.\nOrder: :param1\nThanks, :param3.\nSelldone",
        'icon' => 'плаћање',
        'description' => 'Пошаљите поруку власнику продавнице да га обавестите о успешној уплати.',

    ],

    'vendor-new-order' => [
        'title' => 'Вендор Нев Ордер',
        'sample' => "Добили сте нову поруџбину од 200 УСД.КК0000ККНаруџбина: КК0001ККСМ-870КК0002КК за КК0003КК Име продавцаКК0004КК.КК0005КК✅ Производ А| SKU100001 |1кКК0000КК✅ Производ Б| SKU100002 |1к",
        'body' => "You received a new :param2 order.\nOrder: :param1 for :param3.\n:param4",
        'icon' => 'излог',
        'description' => 'Пошаљите поруку продавцу да га обавестите о новој поруџбини.',
    ],








    'shop-login' => [
        'title' => 'Код за верификацију пријаве',
        'sample' => "Ваш код за пријаву је: КК0000КК123456КК0001КККК0002КККК0003КК Име ваше продавнице КК0004КККК0005КККК0006КК",
        'body' => "Your login code is: :param1\n:param2\nSelldone",
        'icon' => 'логин',
        'description' => 'Пошаљите шифру за пријаву купцу да се пријави у продавницу.',

    ],

    'user-login' => [
        'title' => 'Порука о успешном пријављивању',
        'sample' => "Поштовани КК0000ККНамеКК0001КК,КК0002ККПријавили сте се на свој налог преко КК0003ККиПхоне 165.250.300.1КК0004КК на КК0005КК5/8/2021 9:14АМКК0006КК.КК0007КККК0008КК",
        'body' => "Dear :param1,\nYou have logged in to your account by :param2 at :param3.\nSelldone",
        'icon' => 'систем_сецурити_упдате_гоод',
        'description' => 'Пошаљите поруку након што се купац пријави у продавницу.',

    ],

    'avocado-order-submit' => [
        'title' => 'Авокадо нова поруџбина послата пошаљи купцу',
        'sample' => "КК0000ККНазив ваше продавницеКК0001КККК0002ККПоштовани КК0003ККВаше имеКК0004КК,КК0005ККПримили смо вашу поруџбину и прегледамо је.КК0006ККПоруџбина #: КК0007ККАВО-246КК0008КККК0009КККК0010КК",
        'body' => ":param3\nDear :param1,\nWe have received your order and we are reviewing it.\nOrder #: :param2\nSelldone",
        'icon' => 'фацт_цхецк',
        'description' => 'Пошаљите поруку купцу након што наручите авокадо.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Авокадо прими нову наруџбу пошаљи продавцу',
        'sample' => "Добили сте поруџбину авокада:КК0000ККПродавница: КК0001ККНазив ваше продавницеКК0002КККК0003КККупац: КК0004ККНазив купцаКК0005КККК0006ККНаруџба: КК0007ККАВО-246КК0008КККК0009КККК0010КК",
        'body' => "You received an Avocado order:\nStore: :param1\nBuyer: :param2\nOrder: :param3\nSelldone",
        'icon' => 'хов_то_рег',
        'description' => 'Пошаљите поруку власнику продавнице да га обавестите о пријему нове поруџбине Авокада.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Наруџба авокада спремна за плаћање',
        'sample' => "КК0000ККНазив ваше продавницеКК0001КККК0002ККВаша поруџбина је потврђена и може се платити преко следеће везе.КК0003ККБрој наруџбе: КК0004ККАВО-246КК0005КККК0006ККЛинк: КК0007КККК0008КККК0009КККК0010КККК0011КК",
        'body' => ":param3\nYour order has been confirmed and can be paid through the following link.\nOrder #: :param2\nLink: :param1\nSelldone",
        'icon' => 'признаница',
        'description' => 'Пошаљите поруку са везом за плаћање купцу након што продавац одреди цену и потврди њихову поруџбину авокада.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Наруџба спремна за испоруку',
        'sample' => "Здраво КК0000ККАлекКК0001КК, добре вести, ваша поруџбина је сада спремна за испоруку.КК0002ККПоруџбина: КК0003ККСМ-123КК0004КК",
        'body' => "Hi :param4, good news, your order is now ready to be shipped.\nOrder: :param1",
        'icon' => 'лоцал_схиппинг',
        'description' => 'Пошаљите поруку купцу да га обавестите да је њихова поруџбина спремна за испоруку.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Наруџба спремна за преузимање',
        'sample' => "Здраво Алек, добре вести, ваша поруџбина је сада спремна за преузимање.КК0000ККПоруџбина: КК0001ККСМ-123КК0002КК",
        'body' => "Hi :param4, good news, your order is now ready to be picked up.\nOrder: :param1",
        'icon' => 'схаре_лоцатион',
        'description' => 'Пошаљите поруку купцу да га обавестите да је њихова поруџбина спремна за преузимање.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Наруџбина продавца спремна за испоруку',
        'sample' => "Здраво КК0000ККАлекКК0001КК, добре вести, ваша поруџбина је сада спремна за испоруку.КК0002ККПоруџбина: КК0003ККСМ-123КК0004КК",
        'body' => "Hi :param4, good news, your order is now ready to be shipped.\nOrder: :param1",
        'icon' => 'лоцал_схиппинг',
        'description' => 'Пошаљите поруку купцу да га обавестите да је њихова поруџбина спремна за испоруку. Само на тржишту са режимом директне испоруке и врстом испоруке није преузимање.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Наруџбина продавца спремна за преузимање',
        'sample' => "Здраво Алек, добре вести, ваша поруџбина је сада спремна за преузимање.КК0000ККПоруџбина: КК0001ККСМ-123КК0002КК",
        'body' => "Hi :param4, good news, your order is now ready to be picked up.\nOrder: :param1",
        'icon' => 'схаре_лоцатион',
        'description' => 'Пошаљите поруку купцу да га обавестите да је њихова поруџбина спремна за преузимање. Само на тржишту са режимом директне испоруке и типом испоруке је преузимање.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Потврда поруџбине',
        'sample' => "Здраво Алекс, прегледали смо вашу поруџбину. Ево статуса потврде за ваше артикле: КК0000КК"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, we have reviewed your order. Here is the confirmation status for your items:\n"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'ассигнмент_турнед_ин',
        'description' => 'Обавештава купца о артиклима у њиховој наруџбини које је продавац прихватио или одбио.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Потврда ставки поруџбине добављача',
        'sample' => "Здраво Алекс, прегледали смо вашу поруџбину. Ево статуса потврде за ваше артикле: КК0000КК"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, we have reviewed your order. Here is the confirmation status for your items:\n"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'ассигнмент_турнед_ин',
        'description' => 'Обавештава купца о ставкама у њиховој наруџбини које је продавац прихватио или одбио.',
    ],



];
