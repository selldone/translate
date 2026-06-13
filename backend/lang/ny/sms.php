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
        'title' => 'Landirani malipiro',
        'sample' => "Malipiro anu a \$267 adathetsedwa bwino.<br>Order: SM-425<br>Thanks, <b>Dzina lanu la sitolo</b>.<br>Selldone",
        'body' => "Malipiro anu a :param2 adathetsedwa bwino.\nPulogalamu: :param1\nZikomo, :param3.\nSelldone",
        'icon' => 'malipiro',
        'description' => 'Tumizani uthenga kwa kasitomala wogula kuti mudziwe za kulipira bwino.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Landirani malipiro',
        'sample' => "Malipiro atsopano a \$267 adathetsedwa bwino.<br>Order: SM-425<br>Thanks, <b>Dzina lanu la sitolo</b>.<br>Selldone",
        'body' => "Kulipira kwatsopano kwa :param2 kunathetsedwa bwino.\nPulogalamu: :param1\nZikomo, :param3.\nSelldone",
        'icon' => 'malipiro',
        'description' => 'Tumizani uthenga kwa eni sitolo kuti muwadziwitse za kulipira bwino.',

    ],

    'vendor-new-order' => [
        'title' => 'Wogulitsa Watsopano Order',
        'sample' => "Mwalandira oda yatsopano ya \$200.<br>Qorder: <b>SM-870</b> ya <b>Vendor dzina</b>.<br>✅ Product A| SKU100001 |1x<br>✅ Chogulitsa B| SKU100002 |1x",
        'body' => "Mwalandira oda yatsopano ya :param2.\nOrder: :param1 ya :param3.\n:param4",
        'icon' => 'sitolo',
        'description' => 'Tumizani uthenga kwa wogulitsa kuti muwadziwitse za dongosolo latsopano.',
    ],








    'shop-login' => [
        'title' => 'Lowani nambala yotsimikizira',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "Khodi yanu yolowera ndi: :param1\n:param2\nSelldone",
        'icon' => 'Lowani muakaunti',
        'description' => 'Tumizani nambala yolowera kwa kasitomala kuti mulowe mu shopu.',

    ],

    'user-login' => [
        'title' => 'Login Bwino Uthenga',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Wokondedwa :param1,\nMwalowa muakaunti yanu ndi :param2 pa :param3.\nSelldone",
        'icon' => 'system_security_update_zabwino',
        'description' => 'Tumizani uthenga kasitomala akalowa mu shopu.',

    ],

    'avocado-order-submit' => [
        'title' => 'Mapeyala atsopano atumizidwa kutumiza kwa wogula',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nWokondedwa :param1,\nTalandira oda yanu ndipo tikuwunikanso.\nNambala #: :param2\nSelldone",
        'icon' => 'zoona_fufuzani',
        'description' => 'Tumizani uthenga kwa kasitomala mutayitanitsa Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Mapeyala alandira uthenga watsopano wotumizidwa kwa ogulitsa',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "Mwalandira oda ya Avocado:\nMalo: :param1\nWogula: :param2\nPulogalamu: :param3\nSelldone",
        'icon' => 'momwe_to_reg',
        'description' => 'Tumizani uthenga kwa eni sitolo kuti muwadziwitse za kulandira oda ya Avocado yatsopano.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado yakonzeka kulipira',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nOda yanu yatsimikizika ndipo mutha kulipiridwa kudzera pa ulalo wotsatirawu.\nNambala #: :param2\nZogwirizana ndi :param1\nSelldone",
        'icon' => 'chiphaso',
        'description' => 'Tumizani uthenga ndi ulalo wolipira kwa kasitomala wogulitsa atakhazikitsa mtengo ndikutsimikizira kuyitanitsa kwawo kwa Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Konzani mwakonzeka kutumiza',
        'sample' => "Moni <b>Alex</b>, nkhani yabwino, oda yanu tsopano yakonzeka kutumizidwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Hi :param4, nkhani yabwino, oda yanu tsopano yakonzeka kutumizidwa.\nPulogalamu: :param1",
        'icon' => 'local_shipping',
        'description' => 'Tumizani uthenga kwa kasitomala kuti muwadziwitse kuti oda yawo yakonzeka kutumizidwa.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Onjezani mwakonzeka kunyamula',
        'sample' => "Wawa Alex, nkhani yabwino, oda yanu tsopano yakonzeka kutengedwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Moni :param4, nkhani yabwino, oda yanu tsopano yakonzeka kutengedwa.\nPulogalamu: :param1",
        'icon' => 'share_location',
        'description' => 'Tumizani uthenga kwa kasitomala kuti muwadziwitse kuti dongosolo lawo lakonzeka kutengedwa.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Malonda okonzeka kutumiza',
        'sample' => "Moni <b>Alex</b>, nkhani yabwino, oda yanu tsopano yakonzeka kutumizidwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Hi :param4, nkhani yabwino, oda yanu tsopano yakonzeka kutumizidwa.\nPulogalamu: :param1",
        'icon' => 'local_shipping',
        'description' => 'Tumizani uthenga kwa kasitomala kuti muwadziwitse kuti oda yawo yakonzeka kutumizidwa. Kungopezeka pamsika ndi Direct Shipping Mode komanso mtundu wobweretsera si Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Malonda akonzeka kutengedwa',
        'sample' => "Wawa Alex, nkhani yabwino, oda yanu tsopano yakonzeka kutengedwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Moni :param4, nkhani yabwino, oda yanu tsopano yakonzeka kutengedwa.\nPulogalamu: :param1",
        'icon' => 'share_location',
        'description' => 'Tumizani uthenga kwa kasitomala kuti muwadziwitse kuti dongosolo lawo lakonzeka kutengedwa. Mumsika womwe uli ndi Direct Shipping Mode ndipo mtundu wobweretsera ndi Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Kutsimikizira Zinthu',
        'sample' => "Moni Alex, tawunikanso dongosolo lanu. Nayi malo otsimikizira zinthu zanu: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Moni :param4, tawunikanso dongosolo lanu. Nayi malo otsimikizira zinthu zanu:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Imadziwitsa kasitomala za zinthu zomwe zili mu dongosolo lawo zomwe zalandiridwa kapena kukanidwa ndi wogulitsa.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Chitsimikizo Chaogulitsa Zinthu',
        'sample' => "Moni Alex, tawunikanso dongosolo lanu. Nayi malo otsimikizira zinthu zanu: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Moni :param4, tawunikanso dongosolo lanu. Nayi malo otsimikizira zinthu zanu:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Imadziwitsa kasitomala za zinthu zomwe zili mu dongosolo lawo zomwe zalandiridwa kapena kukanidwa ndi wogulitsa.',
    ],



];
