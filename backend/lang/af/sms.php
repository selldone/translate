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
        'title' => 'Aanvaar betaling',
        'sample' => "Jou betaling van 267\$ is suksesvol afgehandel.<br> Bestel: SM-425<br> Dankie, <b>jou winkelnaam</b> .<br> Selldone",
        'body' => "Jou :param2-betaling is suksesvol vereffen. Bestel: :param1 Dankie, :param3. Selldone",
        'icon'=>'payment',
        'description'=>'Stuur \'n boodskap aan winkelkliënt om in te lig oor suksesvolle betaling.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Aanvaar betaling',
        'sample' => "Nuwe betaling van 267\$ suksesvol afgehandel.<br> Bestel: SM-425<br> Dankie, <b>jou winkelnaam</b> .<br> Selldone",
        'body' => "Nuwe :param2-betaling suksesvol vereffen. Bestel: :param1 Dankie, :param3. Selldone",
        'icon'=>'payment',
        'description'=>'Stuur \'n boodskap aan die winkeleienaar om hulle in te lig oor suksesvolle betaling.',

    ],

    'vendor-new-order' => [
        'title' => 'Verkoper nuwe bestelling',
        'sample' => "Jy het 'n nuwe \$200 bestelling ontvang.<br> Bestel: SM-870 vanaf <b>verkoper se naam</b> .",
        'body' => "You received a new :param2 order.\nOrder: :param1 for :param3.\n:param4",
        'icon'=>'storefront',
        'description'=>'Stuur \'n boodskap aan die verkoper om hulle in te lig oor \'n nuwe bestelling.',
    ],








    'shop-login' => [
        'title' => 'Aanmelding verifikasie kode',
        'sample' => "Jou aanmeldkode is: <b>123456</b><br> <b>Jou winkelnaam</b><br> Selldone",
        'body' => "Jou aanmeldkode is: :param1 :param2 Selldone",
        'icon'=>'login',
        'description'=>'Stuur aanmeldkode aan die kliënt om by die winkel aan te meld.',

    ],

    'user-login' => [
        'title' => 'Meld suksesboodskap',
        'sample' => "Liewe <b>Naam</b> ,<br> Jy het by jou rekening aangemeld deur <b>iPhone 165.250.300.1</b> om <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Beste :param1, Jy het by jou rekening aangemeld deur :param2 by :param3. Selldone",
        'icon'=>'system_security_update_good',
        'description'=>'Stuur \'n boodskap nadat die kliënt by die winkel aangemeld het.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokado nuwe bestelling ingedien stuur aan koper',
        'sample' => "<b>Jou winkelnaam</b><br> Liewe <b>jou naam</b> ,<br> Ons het jou bestelling ontvang en ons hersien dit.<br> Bestelnommer: <b>AVO-246</b><br> Selldone",
        'body' => ":param3 Beste :param1, Ons het jou bestelling ontvang en ons hersien dit. Bestel #: :param2 Selldone",
        'icon'=>'fact_check',
        'description'=>'Stuur \'n boodskap aan die kliënt nadat jy \'n avokado-bestelling geplaas het.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado ontvang nuwe bestelling stuur aan verkoper',
        'sample' => "Jy het 'n avokadobestelling ontvang:<br> Winkel: <b>Jou winkelnaam</b><br> Koper: <b>Koper se naam</b><br> Bestelling: <b>AVO-246</b><br> Selldone",
        'body' => "Jy het 'n avokadobestelling ontvang: Winkel: :param1 Koper: :param2 Bestelling: :param3 Verkoop",
        'icon'=>'how_to_reg',
        'description'=>'Stuur \'n boodskap aan die winkeleienaar om hulle in te lig oor die ontvangs van nuwe avokadobestelling.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokado bestelling gereed om te betaal',
        'sample' => "<b>Jou winkelnaam</b><br> Jou bestelling is bevestig en kan deur die volgende skakel betaal word.<br> Bestelnommer: <b>AVO-246</b><br> Skakel: <b>https://jou-domein/avocado</b><br> Selldone",
        'body' => ":param3 Jou bestelling is bevestig en kan deur die volgende skakel betaal word. Bestel #: :param2 Skakel: :param1 Selldone",
        'icon'=>'receipt',
        'description'=>'Stuur \'n boodskap met die betalingskakel na die kliënt nadat die verkoper koste vasgestel het en bevestig hul avokadobestelling.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner set order status to 'SentOrder' , and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Order ready to ship',
        'sample' => "Hi <b>Alex</b>, good news, you order is now ready to be shipped.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, good news, you order is now ready to be shipped.\nOrder: :param1",
        'icon'=>'local_shipping',
        'description'=>'Send a message to the customer to inform them that their order is ready to be shipped.',
    ],
    /**
     * In normal shops when the shop owner set order status to 'SentOrder' , and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Order ready to pickup',
        'sample' => "Hi Alex, good news, you order is now ready to be picked up.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, good news, you order is now ready to be picked up.\nOrder: :param1",
        'icon'=>'share_location',
        'description'=>'Send a message to the customer to inform them that their order is ready to be picked up.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Vendor order ready to ship',
        'sample' => "Hi <b>Alex</b>, good news, you order is now ready to be shipped.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, good news, you order is now ready to be shipped.\nOrder: :param1",
        'icon'=>'local_shipping',
        'description'=>'Send a message to the customer to inform them that their order is ready to be shipped. Just in marketplace with Direct Shipping Mode and delivery type is not Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Vendor order ready to pickup',
        'sample' => "Hi Alex, good news, you order is now ready to be picked up.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, good news, you order is now ready to be picked up.\nOrder: :param1",
        'icon'=>'share_location',
        'description'=>'Send a message to the customer to inform them that their order is ready to be picked up. Just in marketplace with Direct Shipping Mode and delivery type is Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Order Items Confirmation',
        'sample' => "Hello Alex, we have reviewed your order. Here is the confirmation status for your items:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, we have reviewed your order. Here is the confirmation status for your items:\n"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notifies the customer about the items in their order that have been accepted or rejected by the seller.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Vendor Order Items Confirmation',
        'sample' => "Hello Alex, we have reviewed your order. Here is the confirmation status for your items:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, we have reviewed your order. Here is the confirmation status for your items:\n"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notifies the customer about the items in their order that have been accepted or rejected by the vendor.',
    ],



];
