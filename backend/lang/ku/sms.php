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
        'title' => 'Tezmînatê qebûl bikin',
        'sample' => "Tezmînata weya 267\$ bi serfirazî hate bicîh kirin.<br> Siparîş bike: SM-425<br> Spas, <b>navê firotgeha we</b> .<br> Selldone",
        'body' => "Tezmînata weya :param2 bi serfirazî hate çareser kirin.\nSiparîş bike: :param1\nSpas, :param3.\nSelldone",
        'icon' => 'peredana',
        'description' => 'Ji xerîdarê dikanê re peyamek bişînin da ku di derbarê dravdana serketî de agahdar bikin.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Tezmînatê qebûl bikin',
        'sample' => "Tezmînata nû ya 267 \$ bi serfirazî hate bicîh kirin.<br> Siparîş bike: SM-425<br> Spas, <b>navê firotgeha we</b> .<br> Selldone",
        'body' => "Dravdana nû ya :param2 bi serfirazî hate bicîh kirin.\nSiparîş bike: :param1\nSpas, :param3.\nSelldone",
        'icon' => 'peredana',
        'description' => 'Ji xwediyê dikanê re peyamek bişînin da ku wan li ser dravê serketî agahdar bike.',

    ],

    'vendor-new-order' => [
        'title' => 'Firoşkar New Order',
        'sample' => "Te siparîşeke nû ya 200\$ stand.<br>Sipar: <b>SM-870</b> bo <b>Vendor name</b>.<br>✅ Hilber A| SKU100001 |1x<br>✅ Hilbera B| SKU100002 |1x",
        'body' => "We fermanek nû :param2 wergirt.\nSiparîş bike: :param1 ji bo :param3.\n:param4",
        'icon' => 'firoşgeh',
        'description' => 'Ji firoşker re peyamek bişînin da ku wan li ser fermanek nû agahdar bike.',
    ],








    'shop-login' => [
        'title' => 'Koda verastkirinê ya têketinê',
        'sample' => "Koda têketina we ev e: <b>123456</b><br> <b>Navê dikana te</b><br> Selldone",
        'body' => "Koda têketina we ev e: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Koda têketinê ji xerîdar re bişîne da ku têkeve dikanê.',

    ],

    'user-login' => [
        'title' => 'Peyama Serkeftina Têketinê',
        'sample' => "<b>Navê</b> hêja,<br> We bi <b>iPhone 165.250.300.1</b> di <b>5/8/2021 9:14 AM</b> de têketî hesabê xwe.<br> Selldone",
        'body' => "Birêz :param1,\nTe bi :param2 li :param3 têkevî hesabê xwe.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Piştî têketina xerîdar ji dikanê re peyamek bişînin.',

    ],

    'avocado-order-submit' => [
        'title' => 'Fermana nû ya Avocado ku ji kiriyar re hatî şandin',
        'sample' => "<b>Navê dikana te</b><br> <b>Navê te yê</b> hêja,<br> Me fermana we wergirt û em lê dinirxînin.<br> Siparîşa #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nBirêz :param1,\nMe fermana we wergirt û em lê dinirxînin.\nSiparîş #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Piştî ku fermanek Avocado danî, ji xerîdar re peyamek bişînin.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado fermana nû dişîne ji firoşkar re',
        'sample' => "We fermanek avokado wergirt:<br> Dikan: <b>Navê dikana te</b><br> Kiryar: <b>Navê kiriyar</b><br> Siparîş: <b>AVO-246</b><br> Selldone",
        'body' => "We fermanek Avocado wergirt:\nFiroşgeh: :param1\nKiryar: :param2\nSiparîş bike: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Ji xwediyê dikanê re peyamek bişînin da ku wan di derbarê wergirtina fermana nû ya Avocado de agahdar bike.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Siparîşa avokadoyê amade ye ku bide',
        'sample' => "<b>Navê dikana te</b><br> Fermana we hate pejirandin û dikare bi riya lînka jêrîn were dayîn.<br> Siparîşa #: <b>AVO-246</b><br> Girêdan: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nFermana we hate pejirandin û dikare bi riya lînka jêrîn were dayîn.\nSiparîş #: :param2\nGirêdan: :param1\nSelldone",
        'icon' => 'wergirtin',
        'description' => 'Piştî ku firoşkar lêçûn destnîşan kir, bi girêdana dravdanê re peyamek ji xerîdar re bişînin û fermana Avokadoyê piştrast bikin.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Siparîşa ji bo şandinê amade ye',
        'sample' => "Silav <b>Alex</b>, nûçeyên baş, emrê te niha ji bo şandinê amade ye.<br>Sipar: <b>SM-123</b>",
        'body' => "Silav :param4, nûçeyên baş, emrê we nuha ji bo şandinê amade ye.\nSiparîş bike: :param1",
        'icon' => 'herêmî_shipping',
        'description' => 'Ji xerîdar re peyamek bişînin da ku wan agahdar bikin ku fermana wan ji bo şandinê amade ye.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Siparîş amade ye ji bo hilgirtinê',
        'sample' => "Silav Alex, nûçeyên baş, emrê te nuha amade ye ku were hilgirtin.<br>Order: <b>SM-123</b>",
        'body' => "Silav :param4, nûçeyên baş, emrê we nuha amade ye ku were hilgirtin.\nSiparîş bike: :param1",
        'icon' => 'share_location',
        'description' => 'Ji xerîdar re peyamek bişînin da ku wan agahdar bikin ku fermana wan ji bo hilgirtinê amade ye.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Fermana vendor ji bo şandinê amade ye',
        'sample' => "Silav <b>Alex</b>, nûçeyên baş, emrê te niha ji bo şandinê amade ye.<br>Sipar: <b>SM-123</b>",
        'body' => "Silav :param4, nûçeyên baş, emrê we nuha ji bo şandinê amade ye.\nSiparîş bike: :param1",
        'icon' => 'herêmî_shipping',
        'description' => 'Ji xerîdar re peyamek bişînin da ku wan agahdar bikin ku fermana wan ji bo şandinê amade ye. Tenê li sûkê bi Moda Barkirina Rasterê û celebê radestkirinê ne Pickup e.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Fermana firoşkar ji bo hilgirtinê amade ye',
        'sample' => "Silav Alex, nûçeyên baş, emrê te nuha amade ye ku were hilgirtin.<br>Order: <b>SM-123</b>",
        'body' => "Silav :param4, nûçeyên baş, emrê we nuha amade ye ku were hilgirtin.\nSiparîş bike: :param1",
        'icon' => 'share_location',
        'description' => 'Ji xerîdar re peyamek bişînin da ku wan agahdar bikin ku fermana wan ji bo hilgirtinê amade ye. Tenê li sûkê bi Moda Barkirina Rasterê û celebê radestkirinê Pickup e.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Order Items Confirmation',
        'sample' => "Silav Alex, me fermana we nirxand. Li vir statûya pejirandinê ji bo tiştên we ye:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Silav :param4, me fermana we nirxand. Li vir statûya pejirandinê ji bo tiştên we ye:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Xerîdar li ser tiştên di fermana wan de ku ji hêla firoşkar ve hatine pejirandin an red kirin agahdar dike.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Firoşkar Order Items Confirmation',
        'sample' => "Silav Alex, me fermana we nirxand. Li vir statûya pejirandinê ji bo tiştên we ye:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Silav :param4, me fermana we nirxand. Li vir statûya pejirandinê ji bo tiştên we ye:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Xerîdar li ser tiştên di fermana wan de ku ji hêla firoşker ve hatine pejirandin an red kirin agahdar dike.',
    ],



];
