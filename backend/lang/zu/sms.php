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
        'title' => 'Yamukela inkokhelo',
        'sample' => "Inkokhelo yakho engu-267\$ ixazululwe ngempumelelo.<br> I-oda: SM-425<br> Siyabonga, <b>Igama lesitolo sakho</b> .<br> Selldone",
        'body' => "Inkokhelo yakho ye-:param2 ixazululwe ngempumelelo.\nI-oda: :param1\nSiyabonga, :param3.\nSelldone",
        'icon' => 'inkokhelo',
        'description' => 'Thumela umlayezo ekhasimendeni lokuthenga ukuze wazise ngenkokhelo eyimpumelelo.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Yamukela inkokhelo',
        'sample' => "Inkokhelo entsha engu-267\$ ixazululwe ngempumelelo.<br> I-oda: SM-425<br> Siyabonga, <b>Igama lesitolo sakho</b> .<br> Selldone",
        'body' => "Inkokhelo entsha ye-:param2 ixazululwe ngempumelelo.\nI-oda: :param1\nSiyabonga, :param3.\nSelldone",
        'icon' => 'inkokhelo',
        'description' => 'Thumela umlayezo kumnikazi wesitolo ukuze umazise mayelana nenkokhelo eyimpumelelo.',

    ],

    'vendor-new-order' => [
        'title' => 'I-oda elisha lomthengisi',
        'sample' => "Uthole i-oda elisha lika-\$200.<br>Qorder: <b>SM-870</b> ye-<b>Igama lomthengisi</b>.<br>✅ Umkhiqizo A| SKU100001 |1x<br>✅ Umkhiqizo B| SKU100002 |1x",
        'body' => "Uthole i-oda elisha le-:param2.\nI-oda: :param1 ye-:param3.\n:param4",
        'icon' => 'ngaphambili kwesitolo',
        'description' => 'Thumela umlayezo kumthengisi ukuze ubazise mayelana ne-oda elisha.',
    ],








    'shop-login' => [
        'title' => 'Ikhodi yokuqinisekisa yokungena',
        'sample' => "Ikhodi yakho yokungena ithi: <b>123456</b><br> <b>Igama lesitolo sakho</b><br> Selldone",
        'body' => "Ikhodi yakho yokungena ithi: :param1\n:param2\nI-Selldone",
        'icon' => 'ngena ngemvume',
        'description' => 'Thumela ikhodi yokungena ekhasimendeni ukuze lingene esitolo.',

    ],

    'user-login' => [
        'title' => 'Ngena ngemvume Umlayezo Wempumelelo',
        'sample' => "<b>Igama</b> elithandekayo,<br> Ungene ku-akhawunti yakho nge- <b>iPhone 165.250.300.1</b> ngo- <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => ":param1 othandekayo,\nUngene ku-akhawunti yakho nge-:param2 ku-:param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Thumela umlayezo ngemva kokungena kwekhasimende esitolo.',

    ],

    'avocado-order-submit' => [
        'title' => 'I-oda elisha likakotapheya lithunyelwe lithunyelwe kumthengi',
        'sample' => "<b>Igama lesitolo sakho</b><br> Sithandwa <b>igama lakho</b> ,<br> Silitholile i-oda lakho futhi siyalibuyekeza.<br> I-oda #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\n:param1 othandekayo,\nSilitholile i-oda lakho futhi siyalibuyekeza.\nInombolo yomthetho: :param2\nSelldone",
        'icon' => 'iqiniso_hlola',
        'description' => 'Thumela umlayezo ekhasimendeni ngemva kokufaka i-oda likakotapheya.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Ukotapheya uthola i-oda elisha elithunyelwa kumdayisi',
        'sample' => "Uthole i-oda likakotapheya:<br> Isitolo: <b>Igama lesitolo sakho</b><br> Umthengi: <b>Igama lomthengi</b><br> I-oda: <b>AVO-246</b><br> Selldone",
        'body' => "Uthole i-oda likakotapheya:\nIsitolo: :param1\nUmthengi: :param2\nI-oda: :param3\nSelldone",
        'icon' => 'kanjani_ukubhalisa',
        'description' => 'Thumela umlayezo kumnikazi wesitolo ukuze umazise ngokuthola i-oda elisha le-Avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'I-oda likakotapheya selilungele ukukhokha',
        'sample' => "<b>Igama lesitolo sakho</b><br> I-oda lakho liqinisekisiwe futhi lingakhokhelwa ngesixhumanisi esilandelayo.<br> I-oda #: <b>AVO-246</b><br> Isixhumanisi: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nI-oda lakho liqinisekisiwe futhi lingakhokhelwa ngesixhumanisi esilandelayo.\nInombolo yomthetho: :param2\nIsixhumanisi: :param1\nSelldone",
        'icon' => 'irisidi',
        'description' => 'Thumela umlayezo onesixhumanisi sokukhokha ekhasimendeni ngemva kokuba umdayisi esethe izindleko futhi aqinisekise i-oda lakhe le-Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'I-oda lilungele ukuthunyelwa',
        'sample' => "Sawubona <b>Alex</b>, izindaba ezinhle, i-oda lakho manje selilungele ukuthunyelwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Sawubona :param4, izindaba ezinhle, i-oda lakho manje selilungele ukuthunyelwa.\nI-oda: :param1\nI-",
        'icon' => 'ukuthunyelwa_kwasendaweni',
        'description' => 'Thumela umlayezo ekhasimendeni ukuze ulazise ukuthi i-oda lalo selilungele ukuthunyelwa.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'I-oda lilungele ukulandwa',
        'sample' => "Sawubona Alex, izindaba ezinhle, i-oda lakho manje selilungele ukuthathwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Sawubona :param4, izindaba ezinhle, i-oda lakho manje selilungele ukuthathwa.\nI-oda: :param1",
        'icon' => 'share_indawo',
        'description' => 'Thumela umlayezo ekhasimendeni ukuze ulazise ukuthi i-oda lalo selilungele ukuthathwa.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'I-oda lomthengisi lilungele ukuthunyelwa',
        'sample' => "Sawubona <b>Alex</b>, izindaba ezinhle, i-oda lakho manje selilungele ukuthunyelwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Sawubona :param4, izindaba ezinhle, i-oda lakho manje selilungele ukuthunyelwa.\nI-oda: :param1\nI-",
        'icon' => 'ukuthunyelwa_kwasendaweni',
        'description' => 'Thumela umlayezo ekhasimendeni ukuze ulazise ukuthi i-oda lalo selilungele ukuthunyelwa. Emakethe eneModi Yokuthumela Okuqondile kanye nohlobo lokulethwa akuyona i-Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'I-oda lomthengisi lilungele ukulandwa',
        'sample' => "Sawubona Alex, izindaba ezinhle, i-oda lakho manje selilungele ukuthathwa.<br>Qorder: <b>SM-123</b>",
        'body' => "Sawubona :param4, izindaba ezinhle, i-oda lakho manje selilungele ukuthathwa.\nI-oda: :param1",
        'icon' => 'share_indawo',
        'description' => 'Thumela umlayezo ekhasimendeni ukuze ulazise ukuthi i-oda lalo selilungele ukuthathwa. Emakethe eneModi Yokuthumela Okuqondile kanye nohlobo lokulethwa i-Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Ukuqinisekisa Izinto',
        'sample' => "Sawubona Alex, silibuyekeze i-oda lakho. Nasi isimo sokuqinisekisa sezinto zakho:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Sawubona :param4, silibuyekeze i-oda lakho. Nasi isimo sokuqinisekisa sezinto zakho:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Yazisa ikhasimende mayelana nezinto eziku-oda lazo ezamukelwe noma ezinqatshwe umthengisi.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Isiqinisekiso Sezinto Ze-oda Lomthengisi',
        'sample' => "Sawubona Alex, silibuyekeze i-oda lakho. Nasi isimo sokuqinisekisa sezinto zakho:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Sawubona :param4, silibuyekeze i-oda lakho. Nasi isimo sokuqinisekisa sezinto zakho:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Yazisa ikhasimende mayelana nezinto eziku-oda lazo ezamukelwe noma ezinqatshwe umthengisi.',
    ],



];
