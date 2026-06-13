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
        'title' => 'Derbyn taliad',
        'sample' => "Setlwyd eich taliad \$267 yn llwyddiannus.<br>Order: SM-425<br>Thanks, <b>QYour store name</b>.<br>Selldone",
        'body' => "Setlwyd eich taliad :param2 yn llwyddiannus.\nGorchymyn: :param1\nDiolch, :param3.\nSelldone",
        'icon' => 'taliad',
        'description' => 'Anfonwch neges i gwsmer siop i roi gwybod am daliad llwyddiannus.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Derbyn taliad',
        'sample' => "Setlwyd taliad \$267 newydd yn llwyddiannus.<br>Order: SM-425<br>Thanks, <b>QYour siop enw</b>.<br>Selldone",
        'body' => "Setlwyd taliad :param2 newydd yn llwyddiannus.\nGorchymyn: :param1\nDiolch, :param3.\nSelldone",
        'icon' => 'taliad',
        'description' => 'Anfonwch neges at berchennog y siop i\'w hysbysu am daliad llwyddiannus.',

    ],

    'vendor-new-order' => [
        'title' => 'Archeb Newydd Gwerthwr',
        'sample' => "Cawsoch archeb \$200 newydd.<br>Order: <b>SM-870</b> ar gyfer <b>Vendor name</b>.<br>✅ Cynnyrch A| SKU100001 |1x<br>✅ Cynnyrch B| SKU100002 |1x",
        'body' => "Rydych chi wedi derbyn archeb :param2 newydd.\nGorchymyn: :param1 ar gyfer :param3.\n:param4",
        'icon' => 'blaen siop',
        'description' => 'Anfonwch neges at y gwerthwr i roi gwybod iddynt am archeb newydd.',
    ],








    'shop-login' => [
        'title' => 'Cod dilysu mewngofnodi',
        'sample' => "Eich cod mewngofnodi yw: <b>123456</b><br><b>Enw eich siop </b><br>Selldone",
        'body' => "Eich cod mewngofnodi yw: :param1\n:param2\nSelldone",
        'icon' => 'mewngofnodi',
        'description' => 'Anfonwch y cod mewngofnodi at y cwsmer i fewngofnodi i\'r siop.',

    ],

    'user-login' => [
        'title' => 'Neges Llwyddiant Mewngofnodi',
        'sample' => "Annwyl <b>Name</b>,<br>Rydych wedi mewngofnodi i'ch cyfrif erbyn <b>iPhone 165.250.300.1</b> yn <b>5/8/2021 9:14AMQQQ0Q0Q0Q0Q0Q0Q0",
        'body' => "Annwyl :param1,\nRydych wedi mewngofnodi i'ch cyfrif erbyn :param2 yn :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Anfonwch neges ar ôl i\'r cwsmer fewngofnodi i\'r siop.',

    ],

    'avocado-order-submit' => [
        'title' => 'Archeb newydd afocado wedi\'i gyflwyno anfon at y prynwr',
        'sample' => "<b>Enw eich siop</b><br>Annwyl <b>Eich enw</b>,<br>Rydym wedi derbyn eich archeb ac rydym yn ei hadolygu.<br>Archeb #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nAnnwyl :param1,\nRydym wedi derbyn eich archeb ac rydym yn ei adolygu.\nGorchymyn #: :param2\nSelldone",
        'icon' => 'gwiriad_ffaith',
        'description' => 'Anfonwch neges at y cwsmer ar ôl gosod archeb Afocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Afocado yn derbyn archeb newydd yn cael ei anfon at y gwerthwr',
        'sample' => "Cawsoch archeb Afocado:<br>Siop: <b>Enw eich siop</b><br>Prynwr: <b>Enw prynwr</b><br>Archeb: <b>AVO-246</b><br>Selldone",
        'body' => "Rydych wedi derbyn archeb Afocado:\nSiop: :param1\nPrynwr: :param2\nGorchymyn: :param3\nSelldone",
        'icon' => 'sut_i_reg',
        'description' => 'Anfonwch neges at berchennog y siop i roi gwybod iddynt am dderbyn archeb newydd am Afocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Archeb afocado yn barod i dalu',
        'sample' => "<b>Enw eich siop</b><br>Mae eich archeb wedi'i chadarnhau a gellir talu amdani trwy'r ddolen ganlynol.<br>Archeb #: <b>AVO-246</b><br>Dolen: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nMae'ch archeb wedi'i chadarnhau a gellir ei thalu trwy'r ddolen ganlynol.\nGorchymyn #: :param2\nDolen: :param1\nSelldone",
        'icon' => 'derbynneb',
        'description' => 'Anfonwch neges gyda\'r ddolen talu i\'r cwsmer ar ôl i\'r gwerthwr osod y gost a chadarnhau eu harcheb Afocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Archeb yn barod i\'w llongio',
        'sample' => "Helo <b>Alex</b>, newyddion da, mae eich archeb bellach yn barod i'w gludo.<br>Order: <b>SM-123</b>",
        'body' => "Helo :param4, newyddion da, mae eich archeb bellach yn barod i'w gludo.\nGorchymyn: :param1",
        'icon' => 'lleol_llongau',
        'description' => 'Anfonwch neges at y cwsmer i\'w hysbysu bod eu harcheb yn barod i\'w gludo.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Archeb yn barod i\'w gasglu',
        'sample' => "Helo Alex, newyddion da, mae eich archeb nawr yn barod i'w godi.<br>Order: <b>SM-123</b>",
        'body' => "Helo :param4, newyddion da, mae eich archeb bellach yn barod i'w godi.\nGorchymyn: :param1",
        'icon' => 'rhannu_lleoliad',
        'description' => 'Anfonwch neges at y cwsmer i roi gwybod iddynt fod eu harcheb yn barod i gael ei godi.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Archeb gwerthwr yn barod i\'w anfon',
        'sample' => "Helo <b>Alex</b>, newyddion da, mae eich archeb bellach yn barod i'w gludo.<br>Order: <b>SM-123</b>",
        'body' => "Helo :param4, newyddion da, mae eich archeb bellach yn barod i'w gludo.\nGorchymyn: :param1",
        'icon' => 'lleol_llongau',
        'description' => 'Anfonwch neges at y cwsmer i\'w hysbysu bod eu harcheb yn barod i\'w gludo. Nid yw dim ond yn y farchnad gyda Modd Cludo Uniongyrchol a math dosbarthu yn Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Archeb y gwerthwr yn barod i\'w gasglu',
        'sample' => "Helo Alex, newyddion da, mae eich archeb nawr yn barod i'w godi.<br>Order: <b>SM-123</b>",
        'body' => "Helo :param4, newyddion da, mae eich archeb bellach yn barod i'w godi.\nGorchymyn: :param1",
        'icon' => 'rhannu_lleoliad',
        'description' => 'Anfonwch neges at y cwsmer i roi gwybod iddynt fod eu harcheb yn barod i gael ei godi. Dim ond yn y farchnad gyda Modd Cludo Uniongyrchol a math dosbarthu yw Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Cadarnhad Eitemau Archeb',
        'sample' => "Helo Alex, rydym wedi adolygu'ch archeb. Dyma'r statws cadarnhau ar gyfer eich eitemau: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Helo :param4, rydym wedi adolygu eich archeb. Dyma'r statws cadarnhau ar gyfer eich eitemau:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'aseiniad_troi i mewn',
        'description' => 'Yn hysbysu\'r cwsmer am yr eitemau yn ei archeb sydd wedi\'u derbyn neu eu gwrthod gan y gwerthwr.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Cadarnhad Eitemau Archeb Gwerthwr',
        'sample' => "Helo Alex, rydym wedi adolygu'ch archeb. Dyma'r statws cadarnhau ar gyfer eich eitemau: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Helo :param4, rydym wedi adolygu eich archeb. Dyma'r statws cadarnhau ar gyfer eich eitemau:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'aseiniad_troi i mewn',
        'description' => 'Yn hysbysu\'r cwsmer am yr eitemau yn ei archeb sydd wedi\'u derbyn neu eu gwrthod gan y gwerthwr.',
    ],



];
