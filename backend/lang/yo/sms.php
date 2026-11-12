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
        'title' => 'Gba owo sisan',
        'sample' => "Ti san owo \$267 rẹ yanju ni aṣeyọri.<br>Bere fun: SM-425<br>Thanks, <b>Orukọ itaja rẹ</b>.<br>Selldone",
        'body' => "Owo sisan :param2 rẹ ti yanju ni aṣeyọri.\nBere fun: :param1\nO ṣeun, :param3.\nSelldone",
        'icon' => 'owo sisan',
        'description' => 'Fi ifiranṣẹ ranṣẹ si alabara lati ra ọja lati sọfun nipa isanwo aṣeyọri.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Gba owo sisan',
        'sample' => "Titun isanwo \$267 ti yanju ni aṣeyọri.<br>Beṣẹ: SM-425<br>Thanks, <b>Orukọ itaja rẹ</b>.<br>Selldone",
        'body' => "Titun isanwo :param2 ti yanju ni aṣeyọri.\nBere fun: :param1\nO ṣeun, :param3.\nSelldone",
        'icon' => 'owo sisan',
        'description' => 'Fi ifiranṣẹ ranṣẹ si oniwun ile itaja lati sọ fun wọn nipa isanwo aṣeyọri.',

    ],

    'vendor-new-order' => [
        'title' => 'Olutaja New Bere fun',
        'sample' => "O gba aṣẹ \$200 tuntun kan.<br> Bere fun: <b>SM-870</b> fun <b>Vendor orukọ</b>.<br>✅ Ọja A| SKU100001 |1x<br>✅ Ọja B| SKU100002 |1x",
        'body' => "O gba aṣẹ :param2 tuntun kan.\nBere fun: :param1 fun :param3.\n:param4",
        'icon' => 'ile itaja',
        'description' => 'Fi ifiranṣẹ ranṣẹ si ataja lati sọ fun wọn nipa aṣẹ tuntun kan.',
    ],








    'shop-login' => [
        'title' => 'Wiwọle ijerisi koodu',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "Koodu iwọle rẹ jẹ: :param1\n:param2\nSelldone",
        'icon' => 'buwolu wọle',
        'description' => 'Fi koodu iwọle ranṣẹ si alabara lati wọle si ile itaja naa.',

    ],

    'user-login' => [
        'title' => 'Buwolu Aseyori Ifiranṣẹ',
        'sample' => "Eyin <b>Name</b>,<br>O ti buwolu wọle si akọọlẹ rẹ nipasẹ <b>iPhone 165.250.300.1</b> ni <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Eyin :param1,\nO ti wọle si akọọlẹ rẹ nipasẹ :param2 ni :param3.\nSelldone",
        'icon' => 'system_security_update_dara',
        'description' => 'Firanṣẹ ifiranṣẹ lẹhin iwọle alabara si ile itaja naa.',

    ],

    'avocado-order-submit' => [
        'title' => 'Piha titun ibere silẹ fi si eniti o',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nEyin :param1,\nA ti gba aṣẹ rẹ ati pe a nṣe atunyẹwo rẹ.\nBere fun #: :param2\nSelldone",
        'icon' => 'otitọ_ṣayẹwo',
        'description' => 'Fi ifiranṣẹ ranṣẹ si alabara lẹhin gbigbe aṣẹ piha oyinbo kan.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Piha gba titun ibere fi si eniti o',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "O gba aṣẹ Avocado kan:\nItaja: :param1\nOlura: :param2\nBere fun: :param3\nSelldone",
        'icon' => 'bi_to_reg',
        'description' => 'Fi ifiranṣẹ ranṣẹ si oluwa ile itaja lati sọ fun wọn nipa gbigba aṣẹ Avocado tuntun.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Piha ibere setan lati san',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nA ti fi idi aṣẹ rẹ mulẹ ati pe o le san nipasẹ ọna asopọ atẹle.\nBere fun #: :param2\nỌna asopọ: :param1\nSelldone",
        'icon' => 'gbigba',
        'description' => 'Fi ifiranṣẹ ranṣẹ pẹlu ọna asopọ isanwo si alabara lẹhin ti olutaja ṣeto iye owo ati jẹrisi aṣẹ Piha wọn.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Bere fun setan lati sowo',
        'sample' => "Hi <b>Alex</b>, iroyin ayo, ibere re ti setan lati wa ni bayi.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, iroyin ti o dara, aṣẹ rẹ ti ṣetan lati firanṣẹ.\nBere fun: :param1",
        'icon' => 'local_shipping',
        'description' => 'Fi ifiranṣẹ ranṣẹ si alabara lati sọ fun wọn pe aṣẹ wọn ti ṣetan lati firanṣẹ.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Paṣẹ setan lati gbe',
        'sample' => "Bawo Alex, iroyin to dara, aṣẹ rẹ ti ṣetan lati gbe.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, iroyin ti o dara, aṣẹ rẹ ti ṣetan lati gbe soke.\nBere fun: :param1",
        'icon' => 'pin_ipo',
        'description' => 'Fi ifiranṣẹ ranṣẹ si alabara lati sọ fun wọn pe aṣẹ wọn ti ṣetan lati gbe.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Ibere ataja setan lati sowo',
        'sample' => "Hi <b>Alex</b>, iroyin ayo, ibere re ti setan lati wa ni bayi.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, iroyin ti o dara, aṣẹ rẹ ti ṣetan lati firanṣẹ.\nBere fun: :param1",
        'icon' => 'local_shipping',
        'description' => 'Fi ifiranṣẹ ranṣẹ si alabara lati sọ fun wọn pe aṣẹ wọn ti ṣetan lati firanṣẹ. Nikan ni ibi ọja pẹlu Ipo Gbigbe Taara ati iru ifijiṣẹ kii ṣe Gbigba.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Ibere ataja setan lati gbe',
        'sample' => "Bawo Alex, iroyin to dara, aṣẹ rẹ ti ṣetan lati gbe.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, iroyin ti o dara, aṣẹ rẹ ti ṣetan lati gbe soke.\nBere fun: :param1",
        'icon' => 'pin_ipo',
        'description' => 'Fi ifiranṣẹ ranṣẹ si alabara lati sọ fun wọn pe aṣẹ wọn ti ṣetan lati gbe. O kan ni ibi ọja pẹlu Ipo Gbigbe Taara ati iru ifijiṣẹ jẹ Gbigba.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Bere fun Imudaniloju Awọn nkan',
        'sample' => "Kaabo Alex, a ti ṣe atunyẹwo aṣẹ rẹ. Eyi ni ipo idaniloju fun awọn nkan rẹ:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, a ti àyẹwò ibere re. Eyi ni ipo ijẹrisi fun awọn nkan rẹ:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'ojúṣe_turned_in',
        'description' => 'Ṣe ifitonileti alabara nipa awọn ohun kan ninu aṣẹ wọn ti o ti gba tabi kọ nipasẹ olutaja.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Imudaniloju Awọn ohun elo Olutaja',
        'sample' => "Kaabo Alex, a ti ṣe atunyẹwo aṣẹ rẹ. Eyi ni ipo idaniloju fun awọn nkan rẹ:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, a ti àyẹwò ibere re. Eyi ni ipo ijẹrisi fun awọn nkan rẹ:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'ojúṣe_turned_in',
        'description' => 'Ṣe ifitonileti alabara nipa awọn ohun kan ninu aṣẹ wọn ti o ti gba tabi kọ nipasẹ olutaja.',
    ],



];
