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
        'title' => 'Whakaaetia te utu',
        'sample' => "I tutuki pai to utu 267\$.<br> Raupapa: SM-425<br> Mihi, <b>To ingoa toa</b> .<br> Selldone",
        'body' => "I tutuki pai to utu :param2.\nRaupapa: :param1\nNga mihi, :param3.\nSelldone",
        'icon' => 'utu',
        'description' => 'Tukuna he karere ki te kaihoko hokohoko ki te korero mo te utu angitu.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Whakaaetia te utu',
        'sample' => "Ko te utu hou 267\$ kua tutuki pai.<br> Raupapa: SM-425<br> Mihi, <b>To ingoa toa</b> .<br> Selldone",
        'body' => "I tutuki pai te utu :param2 hou.\nRaupapa: :param1\nNga mihi, :param3.\nSelldone",
        'icon' => 'utu',
        'description' => 'Tukuna he karere ki te rangatira o te toa ki te whakamohio ki a raatau mo te utu angitu.',

    ],

    'vendor-new-order' => [
        'title' => 'Kaihoko Ota Hou',
        'sample' => "I whiwhi koe i tetahi ota \$200 hou.<br>Order: <b>SM-870</b> mo <b>Iingoa kaihoko</b>.<br>✅ Hua A| SKU100001 |1x<br>✅ Hua B| SKU100002 |1x",
        'body' => "I whiwhi koe i tetahi ota :param2 hou.\nOta: :param1 mo :param3.\n:param4",
        'icon' => 'toa toa',
        'description' => 'Tukuna he karere ki te kaihoko ki te whakamohio ia ratou mo tetahi ota hou.',
    ],








    'shop-login' => [
        'title' => 'Waehere manatoko takiuru',
        'sample' => "Ko to waehere takiuru: <b>123456</b><br> <b>To ingoa toa</b><br> Selldone",
        'body' => "Ko to waehere takiuru: :param1\n:param2\nSelldone",
        'icon' => 'takiuru',
        'description' => 'Tukuna te waehere takiuru ki te kaihoko ki te takiuru ki te toa.',

    ],

    'user-login' => [
        'title' => 'Karere Angitu Takiuru',
        'sample' => "Te <b>ingoa</b> aroha,<br> Kua takiuru koe ki to putea na <b>iPhone 165.250.300.1</b> i te <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Arohanui :param1,\nKua takiuru koe ki to putea na :param2 i :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Tukuna he karere i muri i te takiurunga o te kaihoko ki te toa.',

    ],

    'avocado-order-submit' => [
        'title' => 'Ko te ota hou o te avocado ka tukuna ki te kaihoko',
        'sample' => "<b>To ingoa toa</b><br> Arohanui <b>to ingoa</b> ,<br> Kua tae mai to ota, kei te arotakehia e matou.<br> Raupapa #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nArohanui :param1,\nKua tae mai to ota, kei te arotakehia e matou.\nRaupapa #: :param2\nSelldone",
        'icon' => 'taki_meka',
        'description' => 'Tukuna he karere ki te kaihoko i muri i te whakatakoto ota Avokado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Ka whiwhi ota hou ki te Avokado ki te kaihoko',
        'sample' => "I whiwhi koe i te ota avocado:<br> Toa: <b>To ingoa toa</b><br> Kaihoko: <b>Ingoa kaihoko</b><br> Raupapa: <b>AVO-246</b><br> Selldone",
        'body' => "I whiwhi koe i te ota Avocado:\nToa: :param1\nKaihoko: :param2\nRaupapa: :param3\nSelldone",
        'icon' => 'pehea_to_reg',
        'description' => 'Tukuna he karere ki te rangatira o te toa ki te whakamohio ki a ia mo te whiwhi ota Avokado hou.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Kua reri te ota avocado ki te utu',
        'sample' => "<b>To ingoa toa</b><br> Kua whakamanahia to ota ka taea te utu ma te hononga e whai ake nei.<br> Raupapa #: <b>AVO-246</b><br> Hononga: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nKua whakamanahia to ota ka taea te utu ma te hononga e whai ake nei.\nRaupapa #: :param2\nHononga: :param1\nSelldone",
        'icon' => 'rihīti',
        'description' => 'Tukuna he karere me te hono utu ki te kaihoko i muri i te whakatau a te kaihoko i te utu me te whakapumau i tana ota Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Kua reri te ota ki te tuku',
        'sample' => "Kia ora <b>Alex</b>, he rongo pai, kua rite to ota kia tukuna.<br>Order: <b>SM-123</b>",
        'body' => "Kia ora :param4, he korero pai, kua rite to ota kia tukuna.\nRaupapa: :param1",
        'icon' => 'local_shipping',
        'description' => 'Tukuna he karere ki te kaihoko ki te whakamohio atu kua reri to ota ki te tuku.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Kua reri te ota ki te tiki',
        'sample' => "Kia ora Alex, he rongo pai, kua reri to ota ki te tiki.<br>Order: <b>SM-123</b>",
        'body' => "Kia ora :param4, he korero pai, kua rite to ota ki te tiki.\nRaupapa: :param1",
        'icon' => 'hea_wahi',
        'description' => 'Tukuna he karere ki te kaihoko ki te whakamohio atu kua reri ta ratou ota ki te tiki.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Kua reri te ota kaihoko ki te tuku',
        'sample' => "Kia ora <b>Alex</b>, he rongo pai, kua rite to ota kia tukuna.<br>Order: <b>SM-123</b>",
        'body' => "Kia ora :param4, he korero pai, kua rite to ota kia tukuna.\nRaupapa: :param1",
        'icon' => 'local_shipping',
        'description' => 'Tukuna he karere ki te kaihoko ki te whakamohio atu kua reri to ota ki te tuku. I te maakete noa me te Aratau Tuku Tika me te momo tuku ehara i te Tiki.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Kua reri te ota kaihoko ki te tiki',
        'sample' => "Kia ora Alex, he rongo pai, kua reri to ota ki te tiki.<br>Order: <b>SM-123</b>",
        'body' => "Kia ora :param4, he korero pai, kua rite to ota ki te tiki.\nRaupapa: :param1",
        'icon' => 'hea_wahi',
        'description' => 'Tukuna he karere ki te kaihoko ki te whakamohio atu kua reri ta ratou ota ki te tiki. Kei te maakete noa me te Aratau Tuku Tika me te momo tuku ko te Tiki.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Whakapumautanga o nga taonga',
        'sample' => "Kia ora Alex, kua arotakehia e matou to ota. Anei te mana whakau mo o taonga:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Kia ora :param4, kua arotakehia e matou to ota. Anei te mana whakaū mo o taonga:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'taumahi_huri_i roto',
        'description' => 'Ka whakamohio ki te kaihoko mo nga taonga i roto i a raatau ota kua whakaaetia, kua whakakorehia ranei e te kaihoko.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Te Whakapumautanga o nga Taonga Kaihoko',
        'sample' => "Kia ora Alex, kua arotakehia e matou to ota. Anei te mana whakau mo o taonga:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Kia ora :param4, kua arotakehia e matou to ota. Anei te mana whakaū mo o taonga:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'taumahi_huri_i roto',
        'description' => 'Ka whakamohio ki te kaihoko mo nga mea kei roto i a raatau ota kua whakaaetia, kua whakakorehia ranei e te kaihoko.',
    ],



];
