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
        'title' => 'ਭੁਗਤਾਨ ਸਵੀਕਾਰ ਕਰੋ',
        'sample' => "ਤੁਹਾਡਾ \$267 ਦਾ ਭੁਗਤਾਨ ਸਫਲਤਾਪੂਰਵਕ ਨਿਪਟਾਇਆ ਗਿਆ।<br>Order: SM-425<br>Thanks, <b>ਤੁਹਾਡੇ ਸਟੋਰ ਦਾ ਨਾਮ</b>.<br>Selldone",
        'body' => "ਤੁਹਾਡੇ :param2 ਭੁਗਤਾਨ ਦਾ ਸਫਲਤਾਪੂਰਵਕ ਨਿਪਟਾਰਾ ਕੀਤਾ ਗਿਆ ਸੀ।\nਆਰਡਰ: :param1\nਧੰਨਵਾਦ, :param3।\nSelldone",
        'icon' => 'ਭੁਗਤਾਨ',
        'description' => 'ਸਫਲ ਭੁਗਤਾਨ ਬਾਰੇ ਸੂਚਿਤ ਕਰਨ ਲਈ ਖਰੀਦਦਾਰ ਗਾਹਕ ਨੂੰ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ।',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ਭੁਗਤਾਨ ਸਵੀਕਾਰ ਕਰੋ',
        'sample' => "ਨਵੇਂ \$267 ਭੁਗਤਾਨ ਦਾ ਸਫਲਤਾਪੂਰਵਕ ਨਿਪਟਾਰਾ ਕੀਤਾ ਗਿਆ।<br>Order: SM-425<br>Thanks, <b>ਤੁਹਾਡੇ ਸਟੋਰ ਦਾ ਨਾਮ</b>.<br>Selldone",
        'body' => "ਨਵੇਂ :param2 ਭੁਗਤਾਨ ਦਾ ਸਫਲਤਾਪੂਰਵਕ ਨਿਪਟਾਰਾ ਕੀਤਾ ਗਿਆ ਸੀ।\nਆਰਡਰ: :param1\nਧੰਨਵਾਦ, :param3।\nSelldone",
        'icon' => 'ਭੁਗਤਾਨ',
        'description' => 'ਦੁਕਾਨ ਦੇ ਮਾਲਕ ਨੂੰ ਸਫਲ ਭੁਗਤਾਨ ਬਾਰੇ ਸੂਚਿਤ ਕਰਨ ਲਈ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ।',

    ],

    'vendor-new-order' => [
        'title' => 'ਵਿਕਰੇਤਾ ਨਵਾਂ ਆਰਡਰ',
        'sample' => "ਤੁਹਾਨੂੰ \$200 ਦਾ ਨਵਾਂ ਆਰਡਰ ਪ੍ਰਾਪਤ ਹੋਇਆ ਹੈ। <br>Order: <b>Vendor name</b>.<br>✅ ਉਤਪਾਦ A ਲਈ <b>SM-870</b>| SKU100001 |1x<br>✅ ਉਤਪਾਦ B| SKU100002 |1x",
        'body' => "ਤੁਹਾਨੂੰ ਇੱਕ ਨਵਾਂ :param2 ਆਰਡਰ ਪ੍ਰਾਪਤ ਹੋਇਆ ਹੈ।\nਆਰਡਰ: :param3 ਲਈ :param1।\n:param4",
        'icon' => 'ਸਟੋਰਫਰੰਟ',
        'description' => 'ਵਿਕਰੇਤਾ ਨੂੰ ਇੱਕ ਨਵੇਂ ਆਰਡਰ ਬਾਰੇ ਸੂਚਿਤ ਕਰਨ ਲਈ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ।',
    ],








    'shop-login' => [
        'title' => 'ਲੌਗਇਨ ਪੁਸ਼ਟੀਕਰਨ ਕੋਡ',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "ਤੁਹਾਡਾ ਲੌਗਇਨ ਕੋਡ ਹੈ: :param1\n:param2\nSelldone",
        'icon' => 'ਲਾਗਇਨ',
        'description' => 'ਦੁਕਾਨ ਵਿੱਚ ਲੌਗਇਨ ਕਰਨ ਲਈ ਗਾਹਕ ਨੂੰ ਲੌਗਇਨ ਕੋਡ ਭੇਜੋ।',

    ],

    'user-login' => [
        'title' => 'ਲੌਗਇਨ ਸਫਲਤਾ ਸੁਨੇਹਾ',
        'sample' => "ਪਿਆਰੇ <b>Name</b>,<br> ਤੁਸੀਂ <b>iPhone 165.250.300.1</b> ਦੁਆਰਾ <b>5/8/2021 'ਤੇ ਆਪਣੇ ਖਾਤੇ ਵਿੱਚ ਲੌਗਇਨ ਕੀਤਾ ਹੈ। 9:14AM</b>.<br>Selldone",
        'body' => "ਪਿਆਰੇ :param1,\nਤੁਸੀਂ :param3 'ਤੇ :param2 ਦੁਆਰਾ ਆਪਣੇ ਖਾਤੇ ਵਿੱਚ ਲੌਗਇਨ ਕੀਤਾ ਹੈ।\nSelldone",
        'icon' => 'ਸਿਸਟਮ_ਸੁਰੱਖਿਆ_ਅੱਪਡੇਟ_ਵਧੀਆ',
        'description' => 'ਗਾਹਕ ਦੁਆਰਾ ਦੁਕਾਨ \'ਤੇ ਲੌਗਇਨ ਕਰਨ ਤੋਂ ਬਾਅਦ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ।',

    ],

    'avocado-order-submit' => [
        'title' => 'ਐਵੋਕਾਡੋ ਨਵਾਂ ਆਰਡਰ ਖਰੀਦਦਾਰ ਨੂੰ ਭੇਜ ਦਿੱਤਾ ਗਿਆ ਹੈ',
        'sample' => "<b>ਤੁਹਾਡੇ ਸਟੋਰ ਦਾ ਨਾਮ</b><br>ਪਿਆਰੇ <b>ਤੁਹਾਡਾ ਨਾਮ</b>,<br> ਸਾਨੂੰ ਤੁਹਾਡਾ ਆਰਡਰ ਪ੍ਰਾਪਤ ਹੋਇਆ ਹੈ ਅਤੇ ਅਸੀਂ ਇਸਦੀ ਸਮੀਖਿਆ ਕਰ ਰਹੇ ਹਾਂ।<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nਪਿਆਰੇ :param1,\nਸਾਨੂੰ ਤੁਹਾਡਾ ਆਰਡਰ ਮਿਲ ਗਿਆ ਹੈ ਅਤੇ ਅਸੀਂ ਇਸਦੀ ਸਮੀਖਿਆ ਕਰ ਰਹੇ ਹਾਂ।\nਆਰਡਰ #: :param2\nSelldone",
        'icon' => 'ਤੱਥ_ਜਾਂਚ',
        'description' => 'ਐਵੋਕਾਡੋ ਆਰਡਰ ਦੇਣ ਤੋਂ ਬਾਅਦ ਗਾਹਕ ਨੂੰ ਸੁਨੇਹਾ ਭੇਜੋ।',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'ਐਵੋਕਾਡੋ ਵੇਚਣ ਵਾਲੇ ਨੂੰ ਨਵਾਂ ਆਰਡਰ ਪ੍ਰਾਪਤ ਕਰਦਾ ਹੈ',
        'sample' => "ਤੁਹਾਨੂੰ ਇੱਕ ਐਵੋਕਾਡੋ ਆਰਡਰ ਪ੍ਰਾਪਤ ਹੋਇਆ ਹੈ:<br>Store: <b>ਤੁਹਾਡੇ ਸਟੋਰ ਦਾ ਨਾਮ</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "ਤੁਹਾਨੂੰ ਇੱਕ ਐਵੋਕਾਡੋ ਆਰਡਰ ਪ੍ਰਾਪਤ ਹੋਇਆ ਹੈ:\nਸਟੋਰ: :param1\nਖਰੀਦਦਾਰ: :param2\nਆਰਡਰ: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'ਦੁਕਾਨ ਦੇ ਮਾਲਕ ਨੂੰ ਨਵਾਂ ਐਵੋਕਾਡੋ ਆਰਡਰ ਪ੍ਰਾਪਤ ਕਰਨ ਬਾਰੇ ਸੂਚਿਤ ਕਰਨ ਲਈ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ।',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'ਐਵੋਕਾਡੋ ਆਰਡਰ ਭੁਗਤਾਨ ਕਰਨ ਲਈ ਤਿਆਰ ਹੈ',
        'sample' => "<b>ਤੁਹਾਡੇ ਸਟੋਰ ਦਾ ਨਾਮ</b><br>ਤੁਹਾਡੇ ਆਰਡਰ ਦੀ ਪੁਸ਼ਟੀ ਕੀਤੀ ਗਈ ਹੈ ਅਤੇ ਹੇਠਾਂ ਦਿੱਤੇ ਲਿੰਕ ਰਾਹੀਂ ਭੁਗਤਾਨ ਕੀਤਾ ਜਾ ਸਕਦਾ ਹੈ। <br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nਤੁਹਾਡੇ ਆਰਡਰ ਦੀ ਪੁਸ਼ਟੀ ਹੋ ਗਈ ਹੈ ਅਤੇ ਹੇਠਾਂ ਦਿੱਤੇ ਲਿੰਕ ਰਾਹੀਂ ਭੁਗਤਾਨ ਕੀਤਾ ਜਾ ਸਕਦਾ ਹੈ।\nਆਰਡਰ #: :param2\nਲਿੰਕ: :param1\nSelldone",
        'icon' => 'ਰਸੀਦ',
        'description' => 'ਵਿਕਰੇਤਾ ਦੁਆਰਾ ਨਿਰਧਾਰਤ ਲਾਗਤ ਤੋਂ ਬਾਅਦ ਗਾਹਕ ਨੂੰ ਭੁਗਤਾਨ ਲਿੰਕ ਦੇ ਨਾਲ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ ਅਤੇ ਉਹਨਾਂ ਦੇ ਐਵੋਕਾਡੋ ਆਰਡਰ ਦੀ ਪੁਸ਼ਟੀ ਕਰੋ।',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ਸ਼ਿਪ ਕਰਨ ਲਈ ਤਿਆਰ ਆਰਡਰ',
        'sample' => "ਹੈਲੋ <b>Alex</b>, ਖੁਸ਼ਖਬਰੀ, ਤੁਹਾਡਾ ਆਰਡਰ ਹੁਣ ਭੇਜਣ ਲਈ ਤਿਆਰ ਹੈ। <br>Order: <b>SM-123</b>",
        'body' => "ਹਾਇ :param4, ਚੰਗੀ ਖ਼ਬਰ, ਤੁਹਾਡਾ ਆਰਡਰ ਹੁਣ ਭੇਜਣ ਲਈ ਤਿਆਰ ਹੈ।\nਆਰਡਰ: :param1",
        'icon' => 'local_shipping',
        'description' => 'ਗਾਹਕ ਨੂੰ ਇਹ ਸੂਚਿਤ ਕਰਨ ਲਈ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ ਕਿ ਉਹਨਾਂ ਦਾ ਆਰਡਰ ਭੇਜਣ ਲਈ ਤਿਆਰ ਹੈ।',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ਪਿਕਅੱਪ ਲਈ ਤਿਆਰ ਆਰਡਰ',
        'sample' => "ਹੈਲੋ ਐਲੇਕਸ, ਖੁਸ਼ਖਬਰੀ, ਤੁਹਾਡਾ ਆਰਡਰ ਹੁਣ ਚੁੱਕਣ ਲਈ ਤਿਆਰ ਹੈ।<br>Order: <b>SM-123</b>",
        'body' => "ਹੈਲੋ :param4, ਚੰਗੀ ਖ਼ਬਰ, ਤੁਹਾਡਾ ਆਰਡਰ ਹੁਣ ਚੁੱਕਣ ਲਈ ਤਿਆਰ ਹੈ।\nਆਰਡਰ: :param1",
        'icon' => 'ਸ਼ੇਅਰ_ਟਿਕਾਣਾ',
        'description' => 'ਗਾਹਕ ਨੂੰ ਇਹ ਸੂਚਿਤ ਕਰਨ ਲਈ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ ਕਿ ਉਹਨਾਂ ਦਾ ਆਰਡਰ ਚੁੱਕਣ ਲਈ ਤਿਆਰ ਹੈ।',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'ਵਿਕਰੇਤਾ ਆਰਡਰ ਭੇਜਣ ਲਈ ਤਿਆਰ ਹੈ',
        'sample' => "ਹੈਲੋ <b>Alex</b>, ਖੁਸ਼ਖਬਰੀ, ਤੁਹਾਡਾ ਆਰਡਰ ਹੁਣ ਭੇਜਣ ਲਈ ਤਿਆਰ ਹੈ। <br>Order: <b>SM-123</b>",
        'body' => "ਹਾਇ :param4, ਚੰਗੀ ਖ਼ਬਰ, ਤੁਹਾਡਾ ਆਰਡਰ ਹੁਣ ਭੇਜਣ ਲਈ ਤਿਆਰ ਹੈ।\nਆਰਡਰ: :param1",
        'icon' => 'local_shipping',
        'description' => 'ਗਾਹਕ ਨੂੰ ਇਹ ਸੂਚਿਤ ਕਰਨ ਲਈ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ ਕਿ ਉਹਨਾਂ ਦਾ ਆਰਡਰ ਭੇਜਣ ਲਈ ਤਿਆਰ ਹੈ। ਸਿਰਫ਼ ਡਾਇਰੈਕਟ ਸ਼ਿਪਿੰਗ ਮੋਡ ਅਤੇ ਡਿਲੀਵਰੀ ਕਿਸਮ ਦੇ ਨਾਲ ਬਾਜ਼ਾਰ ਵਿੱਚ ਪਿਕਅੱਪ ਨਹੀਂ ਹੈ।',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'ਵਿਕਰੇਤਾ ਆਰਡਰ ਚੁੱਕਣ ਲਈ ਤਿਆਰ ਹੈ',
        'sample' => "ਹੈਲੋ ਐਲੇਕਸ, ਖੁਸ਼ਖਬਰੀ, ਤੁਹਾਡਾ ਆਰਡਰ ਹੁਣ ਚੁੱਕਣ ਲਈ ਤਿਆਰ ਹੈ।<br>Order: <b>SM-123</b>",
        'body' => "ਹੈਲੋ :param4, ਚੰਗੀ ਖ਼ਬਰ, ਤੁਹਾਡਾ ਆਰਡਰ ਹੁਣ ਚੁੱਕਣ ਲਈ ਤਿਆਰ ਹੈ।\nਆਰਡਰ: :param1",
        'icon' => 'ਸ਼ੇਅਰ_ਟਿਕਾਣਾ',
        'description' => 'ਗਾਹਕ ਨੂੰ ਇਹ ਸੂਚਿਤ ਕਰਨ ਲਈ ਇੱਕ ਸੁਨੇਹਾ ਭੇਜੋ ਕਿ ਉਹਨਾਂ ਦਾ ਆਰਡਰ ਚੁੱਕਣ ਲਈ ਤਿਆਰ ਹੈ। ਸਿੱਧੇ ਸ਼ਿਪਿੰਗ ਮੋਡ ਅਤੇ ਡਿਲੀਵਰੀ ਦੀ ਕਿਸਮ ਦੇ ਨਾਲ ਸਿਰਫ ਮਾਰਕੀਟਪਲੇਸ ਵਿੱਚ ਪਿਕਅੱਪ ਹੈ।',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ਆਰਡਰ ਆਈਟਮਾਂ ਦੀ ਪੁਸ਼ਟੀ',
        'sample' => "ਹੈਲੋ ਅਲੈਕਸ, ਅਸੀਂ ਤੁਹਾਡੇ ਆਰਡਰ ਦੀ ਸਮੀਖਿਆ ਕੀਤੀ ਹੈ। ਤੁਹਾਡੀਆਂ ਆਈਟਮਾਂ ਲਈ ਪੁਸ਼ਟੀਕਰਨ ਸਥਿਤੀ ਇਹ ਹੈ:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ਹੈਲੋ :param4, ਅਸੀਂ ਤੁਹਾਡੇ ਆਰਡਰ ਦੀ ਸਮੀਖਿਆ ਕੀਤੀ ਹੈ। ਤੁਹਾਡੀਆਂ ਆਈਟਮਾਂ ਲਈ ਪੁਸ਼ਟੀਕਰਨ ਸਥਿਤੀ ਇਹ ਹੈ:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ਗਾਹਕ ਨੂੰ ਉਹਨਾਂ ਦੇ ਆਰਡਰ ਵਿੱਚ ਆਈਟਮਾਂ ਬਾਰੇ ਸੂਚਿਤ ਕਰਦਾ ਹੈ ਜਿਹਨਾਂ ਨੂੰ ਵਿਕਰੇਤਾ ਦੁਆਰਾ ਸਵੀਕਾਰ ਜਾਂ ਅਸਵੀਕਾਰ ਕੀਤਾ ਗਿਆ ਹੈ।',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'ਵਿਕਰੇਤਾ ਆਰਡਰ ਆਈਟਮਾਂ ਦੀ ਪੁਸ਼ਟੀ',
        'sample' => "ਹੈਲੋ ਅਲੈਕਸ, ਅਸੀਂ ਤੁਹਾਡੇ ਆਰਡਰ ਦੀ ਸਮੀਖਿਆ ਕੀਤੀ ਹੈ। ਤੁਹਾਡੀਆਂ ਆਈਟਮਾਂ ਲਈ ਪੁਸ਼ਟੀਕਰਨ ਸਥਿਤੀ ਇਹ ਹੈ:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ਹੈਲੋ :param4, ਅਸੀਂ ਤੁਹਾਡੇ ਆਰਡਰ ਦੀ ਸਮੀਖਿਆ ਕੀਤੀ ਹੈ। ਤੁਹਾਡੀਆਂ ਆਈਟਮਾਂ ਲਈ ਪੁਸ਼ਟੀਕਰਨ ਸਥਿਤੀ ਇਹ ਹੈ:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ਗਾਹਕ ਨੂੰ ਉਹਨਾਂ ਦੇ ਆਰਡਰ ਵਿੱਚ ਆਈਟਮਾਂ ਬਾਰੇ ਸੂਚਿਤ ਕਰਦਾ ਹੈ ਜਿਹਨਾਂ ਨੂੰ ਵਿਕਰੇਤਾ ਦੁਆਰਾ ਸਵੀਕਾਰ ਜਾਂ ਅਸਵੀਕਾਰ ਕੀਤਾ ਗਿਆ ਹੈ।',
    ],



];
