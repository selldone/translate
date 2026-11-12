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
        'title' => 'Kubali malipo',
        'sample' => "Malipo yako ya \$267 yalitatuliwa.<br>Order: SM-425<br>Thanks, <b>Jina la duka lako</b>.<br>Selldone",
        'body' => "Malipo yako ya :param2 yalitatuliwa.\nAgizo: :param1\nAsante, :param3.\nSelldone",
        'icon' => 'malipo',
        'description' => 'Tuma ujumbe kwa mteja wa duka ili kufahamisha kuhusu malipo yaliyofanikiwa.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Kubali malipo',
        'sample' => "Malipo mapya ya \$267 yamekamilika.<br>Order: SM-425<br>Thanks, <b>Jina la duka lako</b>.<br>Selldone",
        'body' => "Malipo mapya ya :param2 yalitatuliwa.\nAgizo: :param1\nAsante, :param3.\nSelldone",
        'icon' => 'malipo',
        'description' => 'Tuma ujumbe kwa mwenye duka ili kuwafahamisha kuhusu malipo yaliyofanikiwa.',

    ],

    'vendor-new-order' => [
        'title' => 'Agizo Jipya la Muuzaji',
        'sample' => "Umepokea agizo jipya la \$200.<br>Order: <b>SM-870</b> kwa <b>Jina la muuzaji</b>.<br>✅ Bidhaa A| SKU100001 |1x<br>✅ Bidhaa B| SKU100002 |1x",
        'body' => "Umepokea agizo jipya la :param2.\nAgizo: :param1 kwa :param3.\n:param4",
        'icon' => 'mbele ya duka',
        'description' => 'Tuma ujumbe kwa mchuuzi ili kuwafahamisha kuhusu agizo jipya.',
    ],








    'shop-login' => [
        'title' => 'Msimbo wa uthibitishaji wa kuingia',
        'sample' => "Nambari yako ya kuingia ni: <b>123456</b><br><b> Jina la duka lako</b><br>Selldone",
        'body' => "Nambari yako ya kuingia ni: :param1\n:param2\nSelldone",
        'icon' => 'kuingia',
        'description' => 'Tuma nambari ya kuingia kwa mteja ili kuingia kwenye duka.',

    ],

    'user-login' => [
        'title' => 'Ujumbe wa Mafanikio ya Kuingia',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Mpendwa :param1,\nUmeingia kwenye akaunti yako kwa :param2 kwa :param3.\nSelldone",
        'icon' => 'sasisho_la_usalama_wa_mfumo_nzuri',
        'description' => 'Tuma ujumbe baada ya mteja kuingia kwenye duka.',

    ],

    'avocado-order-submit' => [
        'title' => 'Agizo jipya la parachichi limewasilishwa tuma kwa mnunuzi',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nMpendwa :param1,\nTumepokea agizo lako na tunalikagua.\nNambari ya agizo: :param2\nSelldone",
        'icon' => 'ukweli_angalia',
        'description' => 'Tuma ujumbe kwa mteja baada ya kuweka oda ya Parachichi.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Parachichi pokea agizo jipya tuma kwa muuzaji',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "Umepokea agizo la Parachichi:\nHifadhi: :param1\nMnunuzi: :param2\nAgizo: :param3\nSelldone",
        'icon' => 'jinsi_ya_reg',
        'description' => 'Tuma ujumbe kwa mwenye duka ili kuwafahamisha kuhusu kupokea oda mpya ya Parachichi.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Oda ya parachichi tayari kwa kulipia',
        'sample' => "<b>Jina la duka lako</b><br>Agizo lako limethibitishwa na linaweza kulipwa kupitia kiungo kifuatacho.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nAgizo lako limethibitishwa na linaweza kulipwa kupitia kiungo kifuatacho.\nNambari ya agizo: :param2\nKiungo: :param1\nSelldone",
        'icon' => 'risiti',
        'description' => 'Tuma ujumbe wenye kiungo cha malipo kwa mteja baada ya muuzaji kuweka gharama na uthibitishe agizo lake la Parachichi.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Agiza tayari kusafirishwa',
        'sample' => "Hi <b>Alex</b>, habari njema, agizo lako sasa liko tayari kusafirishwa.<br>Order: <b>SM-123</b>",
        'body' => "Habari :param4, habari njema, agizo lako sasa liko tayari kusafirishwa.\nAgizo: :param1",
        'icon' => 'local_shipping',
        'description' => 'Tuma ujumbe kwa mteja ili kumjulisha kuwa agizo lake liko tayari kusafirishwa.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Agiza tayari kuchukuliwa',
        'sample' => "Jambo Alex, habari njema, agizo lako sasa liko tayari kuchukuliwa.<br>Order: <b>SM-123</b>",
        'body' => "Habari :param4, habari njema, oda yako iko tayari kuchukuliwa.\nAgizo: :param1",
        'icon' => 'shiriki_mahali',
        'description' => 'Tuma ujumbe kwa mteja ili kumjulisha kuwa agizo lake liko tayari kuchukuliwa.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Agizo la muuzaji tayari kusafirishwa',
        'sample' => "Hi <b>Alex</b>, habari njema, agizo lako sasa liko tayari kusafirishwa.<br>Order: <b>SM-123</b>",
        'body' => "Habari :param4, habari njema, agizo lako sasa liko tayari kusafirishwa.\nAgizo: :param1",
        'icon' => 'local_shipping',
        'description' => 'Tuma ujumbe kwa mteja ili kumjulisha kuwa agizo lake liko tayari kusafirishwa. Sokoni tu kwa Njia ya Moja kwa Moja ya Usafirishaji na aina ya uwasilishaji sio Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Agizo la muuzaji tayari kuchukuliwa',
        'sample' => "Jambo Alex, habari njema, agizo lako sasa liko tayari kuchukuliwa.<br>Order: <b>SM-123</b>",
        'body' => "Habari :param4, habari njema, oda yako iko tayari kuchukuliwa.\nAgizo: :param1",
        'icon' => 'shiriki_mahali',
        'description' => 'Tuma ujumbe kwa mteja ili kumjulisha kuwa agizo lake liko tayari kuchukuliwa. Sokoni tu kwa Njia ya Moja kwa Moja ya Usafirishaji na aina ya usafirishaji ni Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Uthibitishaji wa Vipengee vya Agizo',
        'sample' => "Hujambo Alex, tumekagua agizo lako. Hii ndio hali ya uthibitishaji wa bidhaa zako:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hujambo :param4, tumepitia agizo lako. Hii ndio hali ya uthibitishaji wa bidhaa zako:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Humjulisha mteja kuhusu bidhaa katika mpangilio wao ambazo zimekubaliwa au kukataliwa na muuzaji.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Uthibitishaji wa Vipengee vya Agizo la Muuzaji',
        'sample' => "Hujambo Alex, tumekagua agizo lako. Hii ndio hali ya uthibitishaji wa bidhaa zako:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hujambo :param4, tumepitia agizo lako. Hii ndio hali ya uthibitishaji wa bidhaa zako:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Humjulisha mteja kuhusu bidhaa katika mpangilio wao ambazo zimekubaliwa au kukataliwa na muuzaji.',
    ],



];
