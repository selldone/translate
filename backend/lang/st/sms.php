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
        'title' => 'Amohela tefo',
        'sample' => "Tefo ea hau ea \$267 e rarollotsoe ka katleho.<br>order: SM-425<br>Thanks, <b> Lebitso la lebenkele la hao</b>.<br>Selldone",
        'body' => "Tefo ea hau ea :param2 e rarollotsoe ka katleho.\nTlhaloso: :param1\nKea leboha, :param3.\nSelldone",
        'icon' => 'tefo',
        'description' => 'Romela molaetsa ho moreki oa mabenkele ho tsebisa ka tefo e atlehileng.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Amohela tefo',
        'sample' => "Tefo e ncha ea \$267 e rarollotsoe ka katleho.<br>order: SM-425<br>Thanks, <b> Lebitso la lebenkele la hao</b>.<br>Selldone",
        'body' => "Tefo e ncha ea :param2 e rarollotsoe ka katleho.\nTlhaloso: :param1\nKea leboha, :param3.\nSelldone",
        'icon' => 'tefo',
        'description' => 'Romela molaetsa ho mong\'a lebenkele ho mo tsebisa ka tefo e atlehileng.',

    ],

    'vendor-new-order' => [
        'title' => 'Morekisi New Order',
        'sample' => "U fumane odara e ncha ea \$200.<br>order: <b>SM-870</b> bakeng sa <b>Lebitso la morekisi</b>.<br>✅ Sehlahisoa sa A| SKU100001 |1x<br>✅ Sehlahisoa sa B| SKU100002 |1x",
        'body' => "U fumane taelo e ncha ea :param2.\nTaelo: :param1 bakeng sa :param3.\n:param4",
        'icon' => 'sebaka sa polokelo',
        'description' => 'Romela molaetsa ho morekisi ho ba tsebisa ka odara e ncha.',
    ],








    'shop-login' => [
        'title' => 'Khoutu ea netefatso ea ho kena',
        'sample' => "Khoutu ea hau ea ho kena ke: <b>123456</b><br><b> Lebitso la hau la lebenkele </b><br>Selldone",
        'body' => "Khoutu ea hau ea ho kena ke: :param1\n:param2\nSelldone",
        'icon' => 'kena',
        'description' => 'Romela khoutu ea ho kena ho moreki hore o kene ka lebenkeleng.',

    ],

    'user-login' => [
        'title' => 'Kena Molaetsa oa Katleho',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => ":param1 e ratehang,\nU kene akhaonteng ea hau ka :param2 ho :param3.\nSelldone",
        'icon' => 'system_security_update_molemo',
        'description' => 'Romela molaetsa ka mor\'a hore moreki a kene ka lebenkeleng.',

    ],

    'avocado-order-submit' => [
        'title' => 'Odara e ncha ea avocado e rometsoe ho moreki',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\n:param1 e ratehang,\nRe fumane odara ea hau 'me re ntse re e hlahloba.\nTlhaloso: :param2\nSelldone",
        'icon' => 'nete_hlahloba',
        'description' => 'Romela molaetsa ho moreki ka mora ho etsa odara ya Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado e fumana odara e ncha e romelloang ho morekisi',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "O fumane kopo ya Avocado:\nLebenkele: :param1\nMoreki: :param2\nTlhaloso: :param3\nSelldone",
        'icon' => 'joang_ho_reg',
        'description' => 'Romela molaetsa ho mong\'a lebenkele ho mo tsebisa ka ho fumana odara e ncha ea Avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Odara ea avocado e se e loketse ho lefa',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nOdara ea hau e netefalitsoe 'me e ka lefshoa ka sehokelo se latelang.\nTlhaloso: :param2\nKhokahanyo: :param1\nSelldone",
        'icon' => 'rasiti',
        'description' => 'Romela molaetsa o nang le sehokelo sa tefo ho moreki ka mora hore morekisi a behe ditjeo mme o netefatse odara ya bona ya Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Odara e se e loketse ho romelloa',
        'sample' => "Hi <b>Alex</b>, litaba tse monate, odara ea hau e se e loketse ho romelloa.<br>order: <b>SM-123</b>",
        'body' => "Hi :param4, litaba tse monate, odara ea hau e se e loketse ho romelloa.\nTlhaloso: :param1",
        'icon' => 'local_shipping',
        'description' => 'Romela molaetsa ho moreki ho ba tsebisa hore odara ea bona e se e loketse ho romelloa.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Odara e se e loketse ho latoa',
        'sample' => "Lumela Alex, litaba tse monate, odara ea hau e se e loketse ho nkuoa.<br>order: <b>SM-123</b>",
        'body' => "Hi :param4, litaba tse monate, odara ea hau e se e loketse ho nkuoa.\nTlhaloso: :param1",
        'icon' => 'share_location',
        'description' => 'Romela molaetsa ho moreki ho ba tsebisa hore odara ea bona e se e loketse ho nkuoa.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Odara ea barekisi e se e loketse ho romelloa',
        'sample' => "Hi <b>Alex</b>, litaba tse monate, odara ea hau e se e loketse ho romelloa.<br>order: <b>SM-123</b>",
        'body' => "Hi :param4, litaba tse monate, odara ea hau e se e loketse ho romelloa.\nTlhaloso: :param1",
        'icon' => 'local_shipping',
        'description' => 'Romela molaetsa ho moreki ho ba tsebisa hore odara ea bona e se e loketse ho romelloa. Ha u le \'marakeng ka Direct Shipping Mode le mofuta oa thomello ha se Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Odara ea morekisi e se e loketse ho latoa',
        'sample' => "Lumela Alex, litaba tse monate, odara ea hau e se e loketse ho nkuoa.<br>order: <b>SM-123</b>",
        'body' => "Hi :param4, litaba tse monate, odara ea hau e se e loketse ho nkuoa.\nTlhaloso: :param1",
        'icon' => 'share_location',
        'description' => 'Romela molaetsa ho moreki ho ba tsebisa hore odara ea bona e se e loketse ho nkuoa. Ha u le \'marakeng ka Direct Shipping Mode le mofuta oa ho tsamaisa ke Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Netefatso ea Lintho tsa Odara',
        'sample' => "Lumela Alex, re hlahlobile odara ea hau. Mona ke boemo ba netefatso bakeng sa thepa ea hau:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, re hlahlobile odara ea hau. Maemo a netefatso a thepa ea hau ke ana:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'E tsebisa moreki ka lintho tse ka tatellano ea tsona tse amohetsoeng kapa tse hanoang ke morekisi.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Netefatso ea Lintlha tsa Morekisi',
        'sample' => "Lumela Alex, re hlahlobile odara ea hau. Mona ke boemo ba netefatso bakeng sa thepa ea hau:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, re hlahlobile odara ea hau. Maemo a netefatso a thepa ea hau ke ana:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'E tsebisa moreki ka lintho ka tatellano ea tsona tse amohetsoeng kapa tse hanoang ke morekisi.',
    ],



];
