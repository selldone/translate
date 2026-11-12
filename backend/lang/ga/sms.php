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
        'title' => 'Glac le híocaíocht',
        'sample' => "Socraíodh d'íocaíocht \$267 go rathúil.<br>QOrder: SM-425<br>Thanks, <b>QYour ainm stór",
        'body' => "Socraíodh d'íocaíocht :param2 go rathúil.\nOrdú: :param1\nGo raibh maith agat, :param3.\nSelldone",
        'icon' => 'íocaíocht',
        'description' => 'Seol teachtaireacht chuig an gcustaiméir siopa chun é a chur ar an eolas faoi íocaíocht rathúil.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Glac le híocaíocht',
        'sample' => "Socraíodh íocaíocht nua \$267 go rathúil.<br>QOrder: SM-425<br>Thanks, <b>QYour ainm stór",
        'body' => "Socraíodh íocaíocht nua :param2 go rathúil.\nOrdú: :param1\nGo raibh maith agat, :param3.\nSelldone",
        'icon' => 'íocaíocht',
        'description' => 'Seol teachtaireacht chuig úinéir an tsiopa chun iad a chur ar an eolas faoi íocaíocht rathúil.',

    ],

    'vendor-new-order' => [
        'title' => 'Ordú Nua Díoltóra',
        'sample' => "Fuair ​​tú ordú nua \$200.<br>Order: <b>SM-870</b> le haghaidh <b>Vendor ainm</b>.<br>✅ Táirge A| SKU100001 |1x<br>✅ Táirge B| SKU100002 |1x",
        'body' => "Fuair ​​tú ordú :param2 nua.\nOrdú: :param1 le haghaidh :param3.\n:param4",
        'icon' => 'aghaidh siopa',
        'description' => 'Seol teachtaireacht chuig an díoltóir chun iad a chur ar an eolas faoi ordú nua.',
    ],








    'shop-login' => [
        'title' => 'Cód fíoraithe logáil isteach',
        'sample' => "Is é do chód logáil isteach ná: <b>Q123456</b><br><b>Your ainm siopa</b><br>Selldone",
        'body' => "Is é do chód logáil isteach: :param1\n:param2\nSelldone",
        'icon' => 'logáil isteach',
        'description' => 'Seol cód logáil isteach chuig an gcustaiméir chun logáil isteach sa siopa.',

    ],

    'user-login' => [
        'title' => 'Logáil Isteach Teachtaireacht Ratha',
        'sample' => "A chara <b>Name</b>, <br>Tá tú logáilte isteach i do chuntas ag <b>iPhone 165.250.300.1</b> ag <b>5/8/2021 9:14AMQQ0Q0Q0Q0Q0Q0Q0Q0",
        'body' => ":param1 a chara,\nTá tú logáilte isteach i do chuntas faoi :param2 ag :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Seol teachtaireacht tar éis don chustaiméir logáil isteach sa siopa.',

    ],

    'avocado-order-submit' => [
        'title' => 'Ordú nua avocado curtha isteach seol chuig an gceannaitheoir',
        'sample' => "<b>Ainm do shiopa</b><br>A chara <b>D'ainm</b>,<br>Tá d'ordú faighte againn agus táimid á athbhreithniú.<br>Ordú #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\n:param1 a chara,\nTá d'ordú faighte againn agus táimid á athbhreithniú.\nOrdú #: :param2\nSelldone",
        'icon' => 'fíorais_seiceáil',
        'description' => 'Seol teachtaireacht chuig an gcustaiméir tar éis ordú Avocado a dhéanamh.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Faigheann Avocado ordú nua a sheoladh chuig an díoltóir',
        'sample' => "Fuair tú ordú Avocado:<br>Siopa: <b>Ainm do shiopa</b><br>Ceannaitheoir: <b>Ainm an cheannaitheora</b><br>Ordú: <b>AVO-246</b><br>Selldone",
        'body' => "Fuair tú ordú Avocado:\nStóráil: :param1\nCeannaitheora: :param2\nOrdú: :param3\nSelldone",
        'icon' => 'conas_a_reg',
        'description' => 'Seol teachtaireacht chuig úinéir an tsiopa chun iad a chur ar an eolas faoi ordú nua Avocado a fháil.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Ordú avocado réidh le híoc',
        'sample' => "<b>Ainm do shiopa</b><br>Tá d'ordú deimhnithe agus is féidir é a íoc tríd an nasc seo a leanas.<br>Ordú #: <b>AVO-246</b><br>Nasc: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nDeimhníodh d’ordú agus is féidir é a íoc tríd an nasc seo a leanas.\nOrdú #: :param2\nNasc: :param1\nSelldone",
        'icon' => 'admháil',
        'description' => 'Seol teachtaireacht leis an nasc íocaíochta chuig an gcustaiméir tar éis don díoltóir an costas a shocrú agus a ordú Avocado a dhearbhú.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Ordú réidh le seoladh',
        'sample' => "Dia duit <b>Alex</b>, dea-scéal, tá d'ordú réidh le seoladh anois.<br>Order: <b>SM-123</b>",
        'body' => "Dia duit :param4, dea-scéal, tá d'ordú réidh le seoladh anois.\nOrdú: :param1",
        'icon' => 'loingseoireacht_áitiúil',
        'description' => 'Seol teachtaireacht chuig an gcustaiméir chun a chur in iúl dóibh go bhfuil a n-ordú réidh le seoladh.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Ordú réidh le piocadh',
        'sample' => "Dia duit Alex, dea-scéal, tá d'ordú réidh le bheith piocadh anois.<br>Order: <b>SM-123</b>",
        'body' => "Dia duit :param4, dea-scéal, tá d'ordú réidh le piocadh suas anois.\nOrdú: :param1",
        'icon' => 'scair_suíomh',
        'description' => 'Seol teachtaireacht chuig an gcustaiméir chun a chur in iúl dóibh go bhfuil a n-ordú réidh le bheith piocadh suas.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Ordú díoltóra réidh le seoladh',
        'sample' => "Dia duit <b>Alex</b>, dea-scéal, tá d'ordú réidh le seoladh anois.<br>Order: <b>SM-123</b>",
        'body' => "Dia duit :param4, dea-scéal, tá d'ordú réidh le seoladh anois.\nOrdú: :param1",
        'icon' => 'loingseoireacht_áitiúil',
        'description' => 'Seol teachtaireacht chuig an gcustaiméir chun a chur in iúl dóibh go bhfuil a n-ordú réidh le seoladh. Díreach sa mhargadh le Mód Loingseoireachta Díreach agus níl an cineál seachadta Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Ordú díoltóra réidh le bailiú',
        'sample' => "Dia duit Alex, dea-scéal, tá d'ordú réidh le bheith piocadh anois.<br>Order: <b>SM-123</b>",
        'body' => "Dia duit :param4, dea-scéal, tá d'ordú réidh le piocadh suas anois.\nOrdú: :param1",
        'icon' => 'scair_suíomh',
        'description' => 'Seol teachtaireacht chuig an gcustaiméir chun a chur in iúl dóibh go bhfuil a n-ordú réidh le bheith piocadh suas. Díreach sa mhargadh le Mód Loingseoireachta Díreach agus cineál seachadta tá Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Daingniú Míreanna Ordaithe',
        'sample' => "Dia duit Alex, rinneamar athbhreithniú ar d'ordú. Seo é an stádas deimhnithe do do chuid míreanna: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Dia duit :param4, rinneamar athbhreithniú ar d'ordú. Seo é an stádas deimhnithe do do chuid míreanna:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'sannadh_iompaithe_isteach',
        'description' => 'Cuireann sé sin in iúl don chustaiméir faoi na hearraí ina n-ord ar ghlac an díoltóir leo nó ar dhiúltaigh an díoltóir dóibh.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Daingniú Míreanna Ordú Díoltóra',
        'sample' => "Dia duit Alex, rinneamar athbhreithniú ar d'ordú. Seo é an stádas deimhnithe do do chuid míreanna: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Dia duit :param4, rinneamar athbhreithniú ar d'ordú. Seo é an stádas deimhnithe do do chuid míreanna:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'sannadh_iompaithe_isteach',
        'description' => 'Cuireann sé sin in iúl don chustaiméir faoi na hearraí ina n-ord ar ghlac an díoltóir leo nó ar dhiúltaigh an díoltóir dóibh.',
    ],



];
