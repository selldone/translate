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
        'title' => 'Accept payment for customer',
        'sample' => "Your $267 payment was settled successfully.<br>Order: SM-425<br>Thanks, <b>Your store name</b>.<br>Selldone",
        'body' => "Your :param2 payment was settled successfully.\nOrder: :param1\nThanks, :param3.\nSelldone",
        'icon' => 'payment',
        'description' => 'Send a message to shop customer to inform about successful payment.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Accept payment for seller',
        'sample' => "New $267 payment was settled successfully.<br>Order: SM-425<br>Thanks, <b>Your store name</b>.<br>Selldone",
        'body' => "New :param2 payment was settled successfully.\nOrder: :param1\nThanks, :param3.\nSelldone",
        'icon' => 'payment',
        'description' => 'Send a message to the shop owner to inform them about successful payment.',

    ],

    'vendor-new-order' => [
        'title' => 'Vendor new order',
        'sample' => "You received a new $200 order.<br>Order: <b>SM-870</b> for <b>Vendor name</b>.<br>✅ Product A | SKU100001 | 1x<br>✅ Product B | SKU100002 | 1x",
        'body' => "You received a new :param2 order.\nOrder: :param1 for :param3.\n:param4",
        'icon' => 'storefront',
        'description' => 'Send a message to the vendor to inform them about a new order.',
    ],








    'shop-login' => [
        'title' => 'Login verification code',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "Your login code is: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Send login code to the customer to log in to the shop.',

    ],

    'user-login' => [
        'title' => 'Login Success Message',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Dear :param1,\nYou have logged in to your account by :param2 at :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Send a message after the customer login to the shop.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado new order submitted send to buyer',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nDear :param1,\nWe have received your order and we are reviewing it.\nOrder #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Send a message to the customer after an Avocado order is placed.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado receive new order send to seller',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "You received an Avocado order:\nStore: :param1\nBuyer: :param2\nOrder: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Send a message to the shop owner to inform them about receiving new Avocado order.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado order ready to pay',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nYour order has been confirmed and can be paid through the following link.\nOrder #: :param2\nLink: :param1\nSelldone",
        'icon' => 'receipt',
        'description' => 'Send a message with the payment link to the customer after the seller set cost and confirm their Avocado order.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Order ready to ship',
        'sample' => "Hi <b>Alex</b>, good news, your order is now ready to be shipped.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, good news, your order is now ready to be shipped.\nOrder: :param1",
        'icon' => 'local_shipping',
        'description' => 'Send a message to the customer to inform them that their order is ready to be shipped.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Order ready to pickup',
        'sample' => "Hi Alex, good news, your order is now ready to be picked up.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, good news, your order is now ready to be picked up.\nOrder: :param1",
        'icon' => 'share_location',
        'description' => 'Send a message to the customer to inform them that their order is ready to be picked up.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Vendor order ready to ship',
        'sample' => "Hi <b>Alex</b>, good news, your order is now ready to be shipped.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, good news, your order is now ready to be shipped.\nOrder: :param1",
        'icon' => 'local_shipping',
        'description' => 'Send a message to the customer to inform them that their order is ready to be shipped. Just in marketplace with Direct Shipping Mode and delivery type is not Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Vendor order ready to pickup',
        'sample' => "Hi Alex, good news, your order is now ready to be picked up.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, good news, your order is now ready to be picked up.\nOrder: :param1",
        'icon' => 'share_location',
        'description' => 'Send a message to the customer to inform them that their order is ready to be picked up. Just in marketplace with Direct Shipping Mode and delivery type is Pickup.',
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
