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
        'title' => 'Aksepte peman',
        'sample' => "Peman 267\$ ou a byen regle.<br> Lòd: SM-425<br> Mèsi, <b>non magazen ou</b> .<br> Selldone",
        'body' => "Peman :param2 ou te regle avèk siksè.\nLòd: :param1\nMèsi, :param3.\nSelldone",
        'icon' => 'peman',
        'description' => 'Voye yon mesaj bay kliyan boutik pou enfòme sou peman siksè.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Aksepte peman',
        'sample' => "Nouvo peman 267\$ rezoud avèk siksè.<br> Lòd: SM-425<br> Mèsi, <b>non magazen ou</b> .<br> Selldone",
        'body' => "Nouvo peman :param2 te rezoud avèk siksè.\nLòd: :param1\nMèsi, :param3.\nSelldone",
        'icon' => 'peman',
        'description' => 'Voye yon mesaj bay pwopriyetè boutik la pou enfòme yo sou peman ki gen siksè.',

    ],

    'vendor-new-order' => [
        'title' => 'Vandè nouvo lòd',
        'sample' => "Ou te resevwa yon nouvo lòd \$200.<br>Lòd: <b>SM-870</b> pou <b>Non vandè</b>.<br>✅ Pwodwi A| SKU100001 |1x<br>✅ Pwodwi B| SKU100002 |1x",
        'body' => "Ou te resevwa yon nouvo lòd :param2.\nLòd: :param1 pou :param3.\n:param4",
        'icon' => 'devan magazen',
        'description' => 'Voye yon mesaj bay vandè a pou enfòme yo sou yon nouvo lòd.',
    ],








    'shop-login' => [
        'title' => 'Kòd verifikasyon konekte',
        'sample' => "Kòd konekte ou a se: <b>123456</b><br> <b>Non magazen ou</b><br> Selldone",
        'body' => "Kòd konekte ou a se: :param1\n:param2\nSelldone",
        'icon' => 'konekte',
        'description' => 'Voye kòd login bay kliyan an pou konekte nan boutik la.',

    ],

    'user-login' => [
        'title' => 'Konekte mesaj siksè',
        'sample' => "Chè <b>non</b> ,<br> Ou te konekte sou kont ou pa <b>iPhone 165.250.300.1</b> nan <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Chè :param1,\nOu te konekte nan kont ou pa :param2 nan :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Voye yon mesaj apre kliyan an konekte nan boutik la.',

    ],

    'avocado-order-submit' => [
        'title' => 'Zaboka nouvo lòd soumèt voye bay achtè',
        'sample' => "<b>Non magazen ou</b><br> Chè <b>non ou</b> ,<br> Nou te resevwa lòd ou a epi n ap revize li.<br> Lòd #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nChè :param1,\nNou te resevwa lòd ou a epi n ap revize li.\nLòd #: :param2\nSelldone",
        'icon' => 'reyalite_tcheke',
        'description' => 'Voye yon mesaj bay kliyan an apre yo fin mete yon lòd zaboka.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Zaboka resevwa nouvo lòd voye bay vandè',
        'sample' => "Ou te resevwa yon lòd zaboka:<br> Magazen: <b>Non magazen ou</b><br> Achtè: <b>Non achtè</b><br> Lòd: <b>AVO-246</b><br> Selldone",
        'body' => "Ou te resevwa yon lòd zaboka:\nMagazen: :param1\nAchtè: :param2\nLòd: :param3\nSelldone",
        'icon' => 'kijan_pou_reg',
        'description' => 'Voye yon mesaj bay pwopriyetè magazen an pou enfòme yo sou resevwa nouvo lòd zaboka.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Lòd zaboka pare pou peye',
        'sample' => "<b>Non magazen ou</b><br> Kòmand ou a te konfime epi yo ka peye nan lyen sa a.<br> Lòd #: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nKòmand ou a te konfime epi yo ka peye nan lyen sa a.\nLòd #: :param2\nLink: :param1\nSelldone",
        'icon' => 'resi',
        'description' => 'Voye yon mesaj ak lyen peman an bay kliyan an apre vandè a fikse pri epi konfime lòd zaboka yo.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Lòd pare pou bato',
        'sample' => "Bonjou <b>Alex</b>, bon nouvèl, lòd ou a se kounye a pare yo dwe anbake.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, bon nouvèl, lòd ou a se kounye a pare yo dwe anbake.\nLòd: :param1",
        'icon' => 'local_shipping',
        'description' => 'Voye yon mesaj bay kliyan an pou enfòme yo ke lòd yo pare yo dwe anbake.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Kòmand pare pou ranmase',
        'sample' => "Bonjou Alex, bon nouvèl, lòd ou a pare kounye a pou yo pran.<br>Lòd: <b>SM-123</b>",
        'body' => "Bonjou :param4, bon nouvèl, lòd ou a pare kounye a pou yo pran.\nLòd: :param1",
        'icon' => 'share_location',
        'description' => 'Voye yon mesaj bay kliyan an pou enfòme yo ke lòd yo pare pou yo pran.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Lòd vandè pare pou bato',
        'sample' => "Bonjou <b>Alex</b>, bon nouvèl, lòd ou a se kounye a pare yo dwe anbake.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, bon nouvèl, lòd ou a se kounye a pare yo dwe anbake.\nLòd: :param1",
        'icon' => 'local_shipping',
        'description' => 'Voye yon mesaj bay kliyan an pou enfòme yo ke lòd yo pare yo dwe anbake. Jis nan mache a ak mòd transpò dirèk ak kalite livrezon se pa pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Lòd vandè pare pou ranmase',
        'sample' => "Bonjou Alex, bon nouvèl, lòd ou a pare kounye a pou yo pran.<br>Lòd: <b>SM-123</b>",
        'body' => "Bonjou :param4, bon nouvèl, lòd ou a pare kounye a pou yo pran.\nLòd: :param1",
        'icon' => 'share_location',
        'description' => 'Voye yon mesaj bay kliyan an pou enfòme yo ke lòd yo pare pou yo pran. Jis nan mache a ak Mode Shipping Dirèk ak kalite livrezon se Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Konfimasyon Atik Lòd',
        'sample' => "Bonjou Alex, nou revize lòd ou a. Isit la se estati konfimasyon pou atik ou yo: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Bonjou :param4, nou revize lòd ou a. Men estati konfimasyon atik ou yo:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'devwa_tounen_nan',
        'description' => 'Notifye kliyan an sou atik yo nan lòd yo ki te aksepte oswa rejte pa vandè a.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Konfimasyon Atik Lòd Vandè',
        'sample' => "Bonjou Alex, nou revize lòd ou a. Isit la se estati konfimasyon pou atik ou yo: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Bonjou :param4, nou revize lòd ou a. Men estati konfimasyon atik ou yo:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'devwa_tounen_nan',
        'description' => 'Notifye kliyan an sou atik yo nan lòd yo ki te aksepte oswa rejte pa vandè a.',
    ],



];
