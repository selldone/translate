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
        'title' => 'Karɓi biya',
        'sample' => "Your \$267 payment was settled successfully.<br>Order: SM-425<br>Thanks, <b>Your store name</b>.<br>Selldone",
        'body' => "An daidaita biyan kuɗin ku na :param2 cikin nasara.\nSaukewa: :param1\nGodiya, :param3.\nSelldone\nSaukewa:",
        'icon' => 'biya
Saukewa:',
        'description' => 'Aika sako zuwa siyayya abokin ciniki don sanarwa game da nasarar biyan kuɗi.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Karɓi biya',
        'sample' => "New \$267 payment was settled successfully.<br>Order: SM-425<br>Thanks, <b>Your store name</b>.<br>Selldone",
        'body' => "An daidaita sabon biyan :param2 cikin nasara.\nSaukewa: :param1\nGodiya, :param3.\nSelldone\nSaukewa:",
        'icon' => 'biya
Saukewa:',
        'description' => 'Aika sako ga mai shagon don sanar da su game da nasarar biyan kuɗi.',

    ],

    'vendor-new-order' => [
        'title' => 'Sabon oda',
        'sample' => "Kun karɓi sabon odar \$200.<br>Oda: <b>SM-870</b> don <b>Vendor name</b>.<br>✅ Samfur A| SKU100001 |1x<br>✅ samfur B| SKU100002 |1 x",
        'body' => "Kun sami sabon odar :param2.\noda: :param1 don :param3.\n:param4\nSaukewa:",
        'icon' => 'gaban kantuna
Saukewa:',
        'description' => 'Aika sako zuwa ga mai siyarwa don sanar da su game da sabon tsari.',
    ],








    'shop-login' => [
        'title' => 'Lambar tabbatarwa ta shiga',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "Lambar shiga ku ita ce: :param1\n:param2\nSelldone\nSaukewa:",
        'icon' => 'shiga
Saukewa:',
        'description' => 'Aika lambar shiga ga abokin ciniki don shiga cikin shagon.',

    ],

    'user-login' => [
        'title' => 'Sakon Nasara Shiga',
        'sample' => "Masoyi <b>Q</b>,<br> kun shiga cikin asusunku ta <b>iPhone 165.250.300.1</b> a <b>5/8/2021 9:14AM</b>.<br>Selldone\nSaukewa:",
        'body' => "Masoyi :param1,\nKun shiga cikin asusunku ta :param2 a :param3.\nSelldone\nSaukewa:",
        'icon' => 'system_security_update_mai kyau
Saukewa:',
        'description' => 'Aika sako bayan abokin ciniki ya shiga shagon.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado sabon odar aika aika zuwa mai siye',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nMasoyi :param1,\nMun karɓi odar ku kuma muna sake duba shi.\noda #: :param2\nSelldone\nSaukewa:",
        'icon' => 'gaskiya_duba
Saukewa:',
        'description' => 'Aika sako ga abokin ciniki bayan sanya odar Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado yana karɓar sabon odar aika wa mai siyarwa',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "Kun karɓi odar Avocado:\nStore: :param1\nSaukewa: :param2\nSaukewa: :param3\nSelldone\nSaukewa:",
        'icon' => 'yadda_domin_reg
Saukewa:',
        'description' => 'Aika sako ga mai shagon don sanar da su game da karɓar sabon odar Avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Odar avocado yana shirye don biya',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nAn tabbatar da odar ku kuma za'a iya biya ta hanyar haɗin yanar gizon.\noda #: :param2\nSaukewa: :param1\nSelldone\nSaukewa:",
        'icon' => 'samu
Saukewa:',
        'description' => 'Aika sako tare da hanyar biyan kuɗi zuwa abokin ciniki bayan mai siyarwa ya saita farashi kuma tabbatar da odar Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Oda shirye don jigilar kaya
Saukewa:',
        'sample' => "Sannu <b>Alex</b>, albishir, odar ku yanzu an shirya don aikawa.\nSaukewa:",
        'body' => "Barka dai :param4, albishir, odar ku yanzu an shirya don aikawa.\nSaukewa: :param1\nSaukewa:",
        'icon' => 'local_shipping
Saukewa:',
        'description' => 'Aika sako ga abokin ciniki don sanar da su cewa odarsu ta shirya don aikawa.
Saukewa:',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Oda a shirye don ɗauka
Saukewa:',
        'sample' => "Barka dai Alex, albishir, yanzu an shirya ɗaukar odar ku.<br>Order: <b>SM-123</b>\nSaukewa:",
        'body' => "Barka dai :param4, albishir, odar ku yanzu an shirya don ɗauka.\nSaukewa: :param1\nSaukewa:",
        'icon' => 'raba_wuri
Saukewa:',
        'description' => 'Aika sako ga abokin ciniki don sanar da su cewa odarsu ta shirya don karba.
Saukewa:',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Odar mai siyarwa yana shirye don jigilar kaya
Saukewa:',
        'sample' => "Sannu <b>Alex</b>, albishir, odar ku yanzu an shirya don aikawa.\nSaukewa:",
        'body' => "Barka dai :param4, albishir, odar ku yanzu an shirya don aikawa.\nSaukewa: :param1\nSaukewa:",
        'icon' => 'local_shipping
Saukewa:',
        'description' => 'Aika sako ga abokin ciniki don sanar da su cewa odarsu ta shirya don aikawa. Kawai a kasuwa tare da Yanayin jigilar kai tsaye kuma nau\'in isarwa ba karba ba ne.
Saukewa:',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Odar mai siyarwa yana shirye don ɗauka
Saukewa:',
        'sample' => "Barka dai Alex, albishir, yanzu an shirya ɗaukar odar ku.<br>Order: <b>SM-123</b>\nSaukewa:",
        'body' => "Barka dai :param4, albishir, odar ku yanzu an shirya don ɗauka.\nSaukewa: :param1\nSaukewa:",
        'icon' => 'raba_wuri
Saukewa:',
        'description' => 'Aika sako ga abokin ciniki don sanar da su cewa odarsu ta shirya don karba. Kawai a kasuwa tare da Yanayin jigilar kai tsaye kuma nau\'in isarwa shine karba.
Saukewa:',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Oda Tabbatar da Abubuwan
Saukewa:',
        'sample' => "Sannu Alex, mun duba odar ku. Ga matsayin tabbaci na abubuwanku:<br>\nSaukewa:"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Sannu :param4, mun duba odar ku. Ga matsayin tabbaci na abubuwanku:\n\nSaukewa:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'aiki_ya shiga
Saukewa:',
        'description' => 'Yana sanar da abokin ciniki game da abubuwan da ke cikin odarsu waɗanda mai siyar suka karɓa ko ƙi.
Saukewa:',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Tabbatar da Abubuwan Oda mai siyarwa
Saukewa:',
        'sample' => "Sannu Alex, mun duba odar ku. Ga matsayin tabbaci na abubuwanku:<br>\nSaukewa:"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Sannu :param4, mun duba odar ku. Ga matsayin tabbaci na abubuwanku:\n\nSaukewa:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'aiki_ya shiga
Saukewa:',
        'description' => 'Yana sanar da abokin ciniki game da abubuwan da ke cikin odarsu waɗanda mai siyar suka karɓa ko ƙi.',
    ],



];
