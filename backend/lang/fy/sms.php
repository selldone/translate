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
        'title' => 'Akseptearje betelling',
        'sample' => "Jo betelling fan 267 \$ is mei súkses regele.<br> Oarder: SM-425<br> Tankewol, <b>jo winkelnamme</b> .<br> Selldone",
        'body' => "Jo :param2 betelling is mei súkses ôfrekke.\nOarder: :param1\nTankewol, :param3.\nSelldone",
        'icon' => 'betelling',
        'description' => 'Stjoer in berjocht nei winkel klant te ynformearjen oer suksesfolle betelling.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Akseptearje betelling',
        'sample' => "Nije 267 \$ betelling mei súkses regele.<br> Oarder: SM-425<br> Tankewol, <b>jo winkelnamme</b> .<br> Selldone",
        'body' => "Nije :param2 betelling waard mei súkses regele.\nOarder: :param1\nTankewol, :param3.\nSelldone",
        'icon' => 'betelling',
        'description' => 'Stjoer in berjocht nei de winkeleigner om har te ynformearjen oer suksesfolle betelling.',

    ],

    'vendor-new-order' => [
        'title' => 'Ferkeaper Nije oarder',
        'sample' => "Jo hawwe in nije bestelling fan \$200 krigen.<br>Oarder: <b>SM-870</b> foar <b> Ferkeapernamme</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x",
        'body' => "Jo hawwe in nije :param2 oarder krigen.\nOarder: :param1 foar :param3.\n:param4",
        'icon' => 'winkelfront',
        'description' => 'Stjoer in berjocht nei de ferkeaper om har te ynformearjen oer in nije bestelling.',
    ],








    'shop-login' => [
        'title' => 'Login ferifikaasje koade',
        'sample' => "Jo oanmeldekoade is: <b>123456</b><br> <b>Jo winkelnamme</b><br> Selldone",
        'body' => "Jo oanmeldkoade is: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Stjoer oanmeldkoade nei de klant om oan te melden by de winkel.',

    ],

    'user-login' => [
        'title' => 'Oanmelde Sukses Berjocht',
        'sample' => "Beste <b>namme</b> ,<br> Jo hawwe oanmeld by jo akkount by <b>iPhone 165.250.300.1</b> op <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Beste :param1,\nJo hawwe oanmeld by jo akkount troch :param2 by :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Stjoer in berjocht nei de klant oanmeld by de winkel.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado nije bestelling yntsjinne ferstjoere nei keaper',
        'sample' => "<b>Jo winkelnamme</b><br> Beste <b>dyn namme</b> ,<br> Wy hawwe jo bestelling ûntfongen en wy beoardielje it.<br> Oarder #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nBeste :param1,\nWy hawwe jo bestelling ûntfongen en wy beoardielje it.\nBestelling #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Stjoer in berjocht nei de klant nei it pleatsen fan in Avocado bestelling.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado ûntfange nije bestelling ferstjoere nei ferkeaper',
        'sample' => "Jo hawwe in avokadobestelling krigen:<br> Winkel: <b>Jo winkelnamme</b><br> Keaper: <b>Keaper namme</b><br> Oarder: <b>AVO-246</b><br> Selldone",
        'body' => "Jo hawwe in Avocado-bestelling krigen:\nWinkel: :param1\nKeaper: :param2\nOarder: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Stjoer in berjocht nei de winkeleigner om har te ynformearjen oer it ûntfangen fan nije Avocado-bestelling.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado bestelling klear om te beteljen',
        'sample' => "<b>Jo winkelnamme</b><br> Jo bestelling is befêstige en kin wurde betelle fia de folgjende keppeling.<br> Oarder #: <b>AVO-246</b><br> Keppeling: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nJo bestelling is befêstige en kin wurde betelle fia de folgjende keppeling.\nBestelling #: :param2\nKeppeling: :param1\nSelldone",
        'icon' => 'ûntfangst',
        'description' => 'Stjoer in berjocht mei de betelling keppeling nei de klant neidat de ferkeaper set kosten en befêstigje harren Avocado oarder.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Bestelling klear om te ferstjoeren',
        'sample' => "Hoi <b>Alex</b>, goed nijs, jo bestelling is no klear om ferstjoerd te wurden.<br>Order: <b>SM-123</b>",
        'body' => "Hoi :param4, goed nijs, jo bestelling is no klear om te ferstjoeren.\nOarder: :param1",
        'icon' => 'local_shipping',
        'description' => 'Stjoer in berjocht nei de klant om har te ynformearjen dat har bestelling klear is om te ferstjoeren.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Bestelling klear om op te heljen',
        'sample' => "Hoi Alex, goed nijs, jo bestelling is no klear om ophelle te wurden.<br>Order: <b>SM-123</b>",
        'body' => "Hoi :param4, goed nijs, jo bestelling is no klear om op te heljen.\nOarder: :param1",
        'icon' => 'share_lokaasje',
        'description' => 'Stjoer in berjocht nei de klant om har te ynformearjen dat har bestelling klear is om op te heljen.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Ferkeaper bestelling klear om te ferstjoeren',
        'sample' => "Hoi <b>Alex</b>, goed nijs, jo bestelling is no klear om ferstjoerd te wurden.<br>Order: <b>SM-123</b>",
        'body' => "Hoi :param4, goed nijs, jo bestelling is no klear om te ferstjoeren.\nOarder: :param1",
        'icon' => 'local_shipping',
        'description' => 'Stjoer in berjocht nei de klant om har te ynformearjen dat har bestelling klear is om te ferstjoeren. Krekt yn \'e merk mei Direct Shipping Mode en levering type is net Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Ferkeaper bestelling klear om op te heljen',
        'sample' => "Hoi Alex, goed nijs, jo bestelling is no klear om ophelle te wurden.<br>Order: <b>SM-123</b>",
        'body' => "Hoi :param4, goed nijs, jo bestelling is no klear om op te heljen.\nOarder: :param1",
        'icon' => 'share_lokaasje',
        'description' => 'Stjoer in berjocht nei de klant om har te ynformearjen dat har bestelling klear is om op te heljen. Krekt yn \'e merk mei Direct Shipping Mode en levering type is Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Order Items Befêstiging',
        'sample' => "Hallo Alex, wy hawwe jo bestelling hifke. Hjir is de befêstigingsstatus foar jo items: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hallo :param4, wy hawwe jo bestelling hifke. Hjir is de befêstigingsstatus foar jo items:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Meldt de klant oer de items yn har bestelling dy\'t binne akseptearre of ôfwiisd troch de ferkeaper.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Vendor Order Items Befêstiging',
        'sample' => "Hallo Alex, wy hawwe jo bestelling hifke. Hjir is de befêstigingsstatus foar jo items: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hallo :param4, wy hawwe jo bestelling hifke. Hjir is de befêstigingsstatus foar jo items:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Meldt de klant oer de items yn har bestelling dy\'t binne akseptearre of ôfwiisd troch de ferkeaper.',
    ],



];
