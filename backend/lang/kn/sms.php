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
        'title' => 'ಪಾವತಿಯನ್ನು ಸ್ವೀಕರಿಸಿ',
        'sample' => "ನಿಮ್ಮ \$267 ಪಾವತಿಯನ್ನು ಯಶಸ್ವಿಯಾಗಿ ಇತ್ಯರ್ಥಗೊಳಿಸಲಾಗಿದೆ.<br>Order: SM-425<br>ಧನ್ಯವಾದಗಳು, <b>ನಿಮ್ಮ ಅಂಗಡಿಯ ಹೆಸರು</b>.<br>Selldone",
        'body' => "ನಿಮ್ಮ :param2 ಪಾವತಿಯನ್ನು ಯಶಸ್ವಿಯಾಗಿ ಇತ್ಯರ್ಥಗೊಳಿಸಲಾಗಿದೆ.\nಆದೇಶ: :param1\nಧನ್ಯವಾದಗಳು, :param3.\nSelldone",
        'icon' => 'ಪಾವತಿ',
        'description' => 'ಯಶಸ್ವಿ ಪಾವತಿಯ ಬಗ್ಗೆ ತಿಳಿಸಲು ಶಾಪಿಂಗ್ ಗ್ರಾಹಕರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ಪಾವತಿಯನ್ನು ಸ್ವೀಕರಿಸಿ',
        'sample' => "ಹೊಸ \$267 ಪಾವತಿಯನ್ನು ಯಶಸ್ವಿಯಾಗಿ ಇತ್ಯರ್ಥಗೊಳಿಸಲಾಗಿದೆ.<br>Order: SM-425<br>ಧನ್ಯವಾದಗಳು, <b>ನಿಮ್ಮ ಅಂಗಡಿಯ ಹೆಸರು</b>.<br>Selldone",
        'body' => "ಹೊಸ :param2 ಪಾವತಿಯನ್ನು ಯಶಸ್ವಿಯಾಗಿ ಇತ್ಯರ್ಥಗೊಳಿಸಲಾಗಿದೆ.\nಆದೇಶ: :param1\nಧನ್ಯವಾದಗಳು, :param3.\nSelldone",
        'icon' => 'ಪಾವತಿ',
        'description' => 'ಯಶಸ್ವಿ ಪಾವತಿಯ ಬಗ್ಗೆ ತಿಳಿಸಲು ಅಂಗಡಿ ಮಾಲೀಕರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ.',

    ],

    'vendor-new-order' => [
        'title' => 'ಮಾರಾಟಗಾರ ಹೊಸ ಆದೇಶ',
        'sample' => "ನೀವು ಹೊಸ \$200 ಆದೇಶವನ್ನು ಸ್ವೀಕರಿಸಿದ್ದೀರಿ.<br>Order: <b>SM-870</b> <b>Vendor ಹೆಸರು</b>.<br>✅ ಉತ್ಪನ್ನ ಎ| SKU100001 |1x<br>✅ ಉತ್ಪನ್ನ ಬಿ| SKU100002 |1x",
        'body' => "ನೀವು ಹೊಸ :param2 ಆದೇಶವನ್ನು ಸ್ವೀಕರಿಸಿದ್ದೀರಿ.\nಆದೇಶ: :param3 ಗಾಗಿ :param1.\n:param4",
        'icon' => 'ಅಂಗಡಿ ಮುಂಗಟ್ಟು',
        'description' => 'ಹೊಸ ಆದೇಶದ ಬಗ್ಗೆ ತಿಳಿಸಲು ಮಾರಾಟಗಾರರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ.',
    ],








    'shop-login' => [
        'title' => 'ಲಾಗಿನ್ ಪರಿಶೀಲನೆ ಕೋಡ್',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "ನಿಮ್ಮ ಲಾಗಿನ್ ಕೋಡ್: :param1\n:param2\nSelldone",
        'icon' => 'ಲಾಗಿನ್',
        'description' => 'ಅಂಗಡಿಗೆ ಲಾಗ್ ಇನ್ ಮಾಡಲು ಗ್ರಾಹಕರಿಗೆ ಲಾಗಿನ್ ಕೋಡ್ ಅನ್ನು ಕಳುಹಿಸಿ.',

    ],

    'user-login' => [
        'title' => 'ಲಾಗಿನ್ ಯಶಸ್ಸಿನ ಸಂದೇಶ',
        'sample' => "ಆತ್ಮೀಯ <b>Name</b>,<br> ನೀವು <b>5/8/2021 ರಲ್ಲಿ <b>iPhone 165.250.300.1</b> ಮೂಲಕ ನಿಮ್ಮ ಖಾತೆಗೆ ಲಾಗ್ ಇನ್ ಮಾಡಿದ್ದೀರಿ 9:14AM</b>.<br>Selldone",
        'body' => "ಆತ್ಮೀಯ :param1,\n:param3 ನಲ್ಲಿ :param2 ಮೂಲಕ ನಿಮ್ಮ ಖಾತೆಗೆ ನೀವು ಲಾಗ್ ಇನ್ ಮಾಡಿದ್ದೀರಿ.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'ಗ್ರಾಹಕರು ಅಂಗಡಿಗೆ ಲಾಗಿನ್ ಆದ ನಂತರ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ.',

    ],

    'avocado-order-submit' => [
        'title' => 'ಆವಕಾಡೊ ಹೊಸ ಆದೇಶವನ್ನು ಖರೀದಿದಾರರಿಗೆ ಕಳುಹಿಸಲು ಸಲ್ಲಿಸಲಾಗಿದೆ',
        'sample' => "<b>ನಿಮ್ಮ ಅಂಗಡಿಯ ಹೆಸರು</b><br>Dear <b>ನಿಮ್ಮ ಹೆಸರು</b>,<br>ನಿಮ್ಮ ಆರ್ಡರ್ ಅನ್ನು ನಾವು ಸ್ವೀಕರಿಸಿದ್ದೇವೆ ಮತ್ತು ನಾವು ಅದನ್ನು ಪರಿಶೀಲಿಸುತ್ತಿದ್ದೇವೆ.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nಆತ್ಮೀಯ :param1,\nನಿಮ್ಮ ಆದೇಶವನ್ನು ನಾವು ಸ್ವೀಕರಿಸಿದ್ದೇವೆ ಮತ್ತು ನಾವು ಅದನ್ನು ಪರಿಶೀಲಿಸುತ್ತಿದ್ದೇವೆ.\nಆದೇಶ #: :param2\nSelldone",
        'icon' => 'ವಾಸ್ತವ_ಪರಿಶೀಲನೆ',
        'description' => 'ಆವಕಾಡೊ ಆರ್ಡರ್ ಮಾಡಿದ ನಂತರ ಗ್ರಾಹಕರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'ಆವಕಾಡೊ ಮಾರಾಟಗಾರರಿಗೆ ಕಳುಹಿಸುವ ಹೊಸ ಆದೇಶವನ್ನು ಸ್ವೀಕರಿಸುತ್ತದೆ',
        'sample' => "ನೀವು ಆವಕಾಡೊ ಆರ್ಡರ್ ಅನ್ನು ಸ್ವೀಕರಿಸಿದ್ದೀರಿ:<br>Store: <b>ನಿಮ್ಮ ಅಂಗಡಿಯ ಹೆಸರು</b><br>Buyer: <b>Buyer ಹೆಸರು</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "ನೀವು ಆವಕಾಡೊ ಆರ್ಡರ್ ಅನ್ನು ಸ್ವೀಕರಿಸಿದ್ದೀರಿ:\nಅಂಗಡಿ: :param1\nಖರೀದಿದಾರ: :param2\nಆದೇಶ: :param3\nSelldone",
        'icon' => 'ರೆಗ್_ಮಾಡುವುದು_ಹೇಗೆ',
        'description' => 'ಹೊಸ ಆವಕಾಡೊ ಆರ್ಡರ್ ಅನ್ನು ಸ್ವೀಕರಿಸುವ ಬಗ್ಗೆ ತಿಳಿಸಲು ಅಂಗಡಿ ಮಾಲೀಕರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'ಆವಕಾಡೊ ಆರ್ಡರ್ ಪಾವತಿಸಲು ಸಿದ್ಧವಾಗಿದೆ',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nನಿಮ್ಮ ಆದೇಶವನ್ನು ದೃಢೀಕರಿಸಲಾಗಿದೆ ಮತ್ತು ಕೆಳಗಿನ ಲಿಂಕ್ ಮೂಲಕ ಪಾವತಿಸಬಹುದು.\nಆದೇಶ #: :param2\nಲಿಂಕ್: :param1\nSelldone",
        'icon' => 'ರಶೀದಿ',
        'description' => 'ಮಾರಾಟಗಾರನು ವೆಚ್ಚವನ್ನು ನಿಗದಿಪಡಿಸಿದ ನಂತರ ಗ್ರಾಹಕರಿಗೆ ಪಾವತಿ ಲಿಂಕ್‌ನೊಂದಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ ಮತ್ತು ಅವರ ಆವಕಾಡೊ ಆರ್ಡರ್ ಅನ್ನು ದೃಢೀಕರಿಸಿ.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ಆರ್ಡರ್ ಕಳುಹಿಸಲು ಸಿದ್ಧವಾಗಿದೆ',
        'sample' => "ಹಾಯ್ <b>Alex</b>, ಒಳ್ಳೆಯ ಸುದ್ದಿ, ನಿಮ್ಮ ಆರ್ಡರ್ ಈಗ ರವಾನೆಯಾಗಲು ಸಿದ್ಧವಾಗಿದೆ.<br>Order: <b>SM-123</b>",
        'body' => "ಹಾಯ್ :param4, ಒಳ್ಳೆಯ ಸುದ್ದಿ, ನಿಮ್ಮ ಆರ್ಡರ್ ಈಗ ರವಾನೆಗೆ ಸಿದ್ಧವಾಗಿದೆ.\nಆದೇಶ: :param1",
        'icon' => 'ಸ್ಥಳೀಯ_ಶಿಪ್ಪಿಂಗ್',
        'description' => 'ತಮ್ಮ ಆದೇಶವನ್ನು ರವಾನಿಸಲು ಸಿದ್ಧವಾಗಿದೆ ಎಂದು ತಿಳಿಸಲು ಗ್ರಾಹಕರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ಪಿಕಪ್ ಮಾಡಲು ಆರ್ಡರ್ ಸಿದ್ಧವಾಗಿದೆ',
        'sample' => "ಹಾಯ್ ಅಲೆಕ್ಸ್, ಒಳ್ಳೆಯ ಸುದ್ದಿ, ನಿಮ್ಮ ಆರ್ಡರ್ ಈಗ ತೆಗೆದುಕೊಳ್ಳಲು ಸಿದ್ಧವಾಗಿದೆ.<br>Order: <b>SM-123</b>",
        'body' => "ಹಾಯ್ :param4, ಒಳ್ಳೆಯ ಸುದ್ದಿ, ನಿಮ್ಮ ಆರ್ಡರ್ ಈಗ ತೆಗೆದುಕೊಳ್ಳಲು ಸಿದ್ಧವಾಗಿದೆ.\nಆದೇಶ: :param1",
        'icon' => 'ಹಂಚಿಕೆ_ಸ್ಥಳ',
        'description' => 'ಗ್ರಾಹಕರು ತಮ್ಮ ಆದೇಶವನ್ನು ಪಡೆದುಕೊಳ್ಳಲು ಸಿದ್ಧವಾಗಿದೆ ಎಂದು ತಿಳಿಸಲು ಅವರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'ಮಾರಾಟಗಾರರ ಆದೇಶವು ರವಾನಿಸಲು ಸಿದ್ಧವಾಗಿದೆ',
        'sample' => "ಹಾಯ್ <b>Alex</b>, ಒಳ್ಳೆಯ ಸುದ್ದಿ, ನಿಮ್ಮ ಆರ್ಡರ್ ಈಗ ರವಾನೆಯಾಗಲು ಸಿದ್ಧವಾಗಿದೆ.<br>Order: <b>SM-123</b>",
        'body' => "ಹಾಯ್ :param4, ಒಳ್ಳೆಯ ಸುದ್ದಿ, ನಿಮ್ಮ ಆರ್ಡರ್ ಈಗ ರವಾನೆಗೆ ಸಿದ್ಧವಾಗಿದೆ.\nಆದೇಶ: :param1",
        'icon' => 'ಸ್ಥಳೀಯ_ಶಿಪ್ಪಿಂಗ್',
        'description' => 'ತಮ್ಮ ಆದೇಶವನ್ನು ರವಾನಿಸಲು ಸಿದ್ಧವಾಗಿದೆ ಎಂದು ತಿಳಿಸಲು ಗ್ರಾಹಕರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ. ನೇರ ಶಿಪ್ಪಿಂಗ್ ಮೋಡ್ ಮತ್ತು ಡೆಲಿವರಿ ಪ್ರಕಾರದೊಂದಿಗೆ ಮಾರುಕಟ್ಟೆಯಲ್ಲಿ ಪಿಕಪ್ ಆಗುವುದಿಲ್ಲ.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'ಮಾರಾಟಗಾರರ ಆರ್ಡರ್ ಪಿಕಪ್ ಮಾಡಲು ಸಿದ್ಧವಾಗಿದೆ',
        'sample' => "ಹಾಯ್ ಅಲೆಕ್ಸ್, ಒಳ್ಳೆಯ ಸುದ್ದಿ, ನಿಮ್ಮ ಆರ್ಡರ್ ಈಗ ತೆಗೆದುಕೊಳ್ಳಲು ಸಿದ್ಧವಾಗಿದೆ.<br>Order: <b>SM-123</b>",
        'body' => "ಹಾಯ್ :param4, ಒಳ್ಳೆಯ ಸುದ್ದಿ, ನಿಮ್ಮ ಆರ್ಡರ್ ಈಗ ತೆಗೆದುಕೊಳ್ಳಲು ಸಿದ್ಧವಾಗಿದೆ.\nಆದೇಶ: :param1",
        'icon' => 'ಹಂಚಿಕೆ_ಸ್ಥಳ',
        'description' => 'ಗ್ರಾಹಕರು ತಮ್ಮ ಆದೇಶವನ್ನು ಪಡೆದುಕೊಳ್ಳಲು ಸಿದ್ಧವಾಗಿದೆ ಎಂದು ತಿಳಿಸಲು ಅವರಿಗೆ ಸಂದೇಶವನ್ನು ಕಳುಹಿಸಿ. ನೇರ ಶಿಪ್ಪಿಂಗ್ ಮೋಡ್ ಮತ್ತು ಡೆಲಿವರಿ ಪ್ರಕಾರದೊಂದಿಗೆ ಮಾರುಕಟ್ಟೆಯಲ್ಲಿ ಪಿಕಪ್ ಆಗಿದೆ.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ಆರ್ಡರ್ ಐಟಂಗಳ ದೃಢೀಕರಣ',
        'sample' => "ಹಲೋ ಅಲೆಕ್ಸ್, ನಿಮ್ಮ ಆದೇಶವನ್ನು ನಾವು ಪರಿಶೀಲಿಸಿದ್ದೇವೆ. ನಿಮ್ಮ ಐಟಂಗಳಿಗೆ ದೃಢೀಕರಣ ಸ್ಥಿತಿ ಇಲ್ಲಿದೆ:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ಹಲೋ :param4, ನಾವು ನಿಮ್ಮ ಆದೇಶವನ್ನು ಪರಿಶೀಲಿಸಿದ್ದೇವೆ. ನಿಮ್ಮ ಐಟಂಗಳಿಗೆ ದೃಢೀಕರಣ ಸ್ಥಿತಿ ಇಲ್ಲಿದೆ:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ಮಾರಾಟಗಾರರಿಂದ ಸ್ವೀಕರಿಸಲ್ಪಟ್ಟ ಅಥವಾ ತಿರಸ್ಕರಿಸಿದ ಅವರ ಆರ್ಡರ್‌ನಲ್ಲಿರುವ ಐಟಂಗಳ ಬಗ್ಗೆ ಗ್ರಾಹಕರಿಗೆ ತಿಳಿಸುತ್ತದೆ.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'ವೆಂಡರ್ ಆರ್ಡರ್ ಐಟಂಗಳ ದೃಢೀಕರಣ',
        'sample' => "ಹಲೋ ಅಲೆಕ್ಸ್, ನಿಮ್ಮ ಆದೇಶವನ್ನು ನಾವು ಪರಿಶೀಲಿಸಿದ್ದೇವೆ. ನಿಮ್ಮ ಐಟಂಗಳಿಗೆ ದೃಢೀಕರಣ ಸ್ಥಿತಿ ಇಲ್ಲಿದೆ:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ಹಲೋ :param4, ನಾವು ನಿಮ್ಮ ಆದೇಶವನ್ನು ಪರಿಶೀಲಿಸಿದ್ದೇವೆ. ನಿಮ್ಮ ಐಟಂಗಳಿಗೆ ದೃಢೀಕರಣ ಸ್ಥಿತಿ ಇಲ್ಲಿದೆ:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ಮಾರಾಟಗಾರರಿಂದ ಸ್ವೀಕರಿಸಲ್ಪಟ್ಟ ಅಥವಾ ತಿರಸ್ಕರಿಸಿದ ಅವರ ಆದೇಶದಲ್ಲಿರುವ ಐಟಂಗಳ ಬಗ್ಗೆ ಗ್ರಾಹಕರಿಗೆ ತಿಳಿಸುತ್ತದೆ.',
    ],



];
