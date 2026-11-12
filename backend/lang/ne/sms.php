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
        'title' => 'भुक्तानी स्वीकार गर्नुहोस्',
        'sample' => "तपाईंको \$267 को भुक्तानी सफलतापूर्वक तय भयो।<br>Order: SM-425<br>Thanks, <b>तपाईंको स्टोरको नाम</b>.<br>Selldone",
        'body' => "तपाईंको :param2 भुक्तानी सफलतापूर्वक तय भयो।\nअर्डर: :param1\nधन्यवाद, :param3।\nSelldone",
        'icon' => 'भुक्तानी',
        'description' => 'सफल भुक्तानीको बारेमा जानकारी दिन पसल ग्राहकलाई सन्देश पठाउनुहोस्।',

    ],
    'shop-order-payment-admin' => [
        'title' => 'भुक्तानी स्वीकार गर्नुहोस्',
        'sample' => "नयाँ \$267 भुक्तानी सफलतापूर्वक तय भयो।<br>Order: SM-425<br>Thanks, <b>तपाईंको स्टोरको नाम</b>.<br>Selldone",
        'body' => "नयाँ :param2 भुक्तानी सफलतापूर्वक व्यवस्थित गरियो।\nअर्डर: :param1\nधन्यवाद, :param3।\nSelldone",
        'icon' => 'भुक्तानी',
        'description' => 'सफल भुक्तानीको बारेमा जानकारी दिन पसल मालिकलाई सन्देश पठाउनुहोस्।',

    ],

    'vendor-new-order' => [
        'title' => 'विक्रेता नयाँ अर्डर',
        'sample' => "तपाईंले \$200 को नयाँ अर्डर प्राप्त गर्नुभयो।<br>Order: <b>SM-870</b> <b>Vendor name</b>.<br>✅ उत्पादन A को लागि| SKU100001 |1x<br>✅ उत्पादन B| SKU100002 |1x",
        'body' => "तपाईंले नयाँ :param2 अर्डर प्राप्त गर्नुभयो।\nअर्डर: :param3 को लागि :param1।\n:param4",
        'icon' => 'स्टोरफ्रन्ट',
        'description' => 'नयाँ अर्डरको बारेमा जानकारी दिन विक्रेतालाई सन्देश पठाउनुहोस्।',
    ],








    'shop-login' => [
        'title' => 'लगइन प्रमाणिकरण कोड',
        'sample' => "तपाईको लगइन कोड हो: <b>123456</b><br><b> तपाईको स्टोरको नाम</b><br>Selldone",
        'body' => "तपाईको लगइन कोड हो: :param1\n:param2\nSelldone",
        'icon' => 'लगइन',
        'description' => 'पसलमा लग इन गर्न ग्राहकलाई लगइन कोड पठाउनुहोस्।',

    ],

    'user-login' => [
        'title' => 'लगइन सफलता सन्देश',
        'sample' => "प्रिय <b>Name</b>, <br> तपाईंले <b>iPhone 165.250.300.1</b> <b>5/8/2021 मा आफ्नो खातामा लग इन गर्नुभएको छ। ९:१४AM</b>.<br>Selldone",
        'body' => "प्रिय :param1,\nतपाईंले :param2 द्वारा :param3 मा आफ्नो खातामा लग इन गर्नुभएको छ।\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'ग्राहकले पसलमा लगइन गरेपछि सन्देश पठाउनुहोस्।',

    ],

    'avocado-order-submit' => [
        'title' => 'एभोकाडो नयाँ अर्डर पेश गरियो खरिदकर्तालाई पठाउनुहोस्',
        'sample' => "<b>तपाईंको स्टोरको नाम</b><br>प्रिय <b>तपाईंको नाम</b>, <br> हामीले तपाईंको अर्डर प्राप्त गरेका छौं र हामी यसलाई समीक्षा गर्दैछौं।<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nप्रिय :param1,\nहामीले तपाईंको अर्डर प्राप्त गरेका छौं र हामी यसलाई समीक्षा गर्दैछौं।\nअर्डर #: :param2\nSelldone",
        'icon' => 'तथ्य_जाँच',
        'description' => 'एभोकाडो अर्डर गरेपछि ग्राहकलाई सन्देश पठाउनुहोस्।',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'एभोकाडो विक्रेतालाई नयाँ अर्डर पठाउनुहोस्',
        'sample' => "तपाईंले एभोकाडो अर्डर प्राप्त गर्नुभयो: <br>Store: <b>तपाईंको स्टोरको नाम</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "तपाईंले एभोकाडो अर्डर प्राप्त गर्नुभयो:\nस्टोर: :param1\nक्रेता: :param2\nअर्डर: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'नयाँ एभोकाडो अर्डर प्राप्त गर्ने बारे जानकारी दिन पसल मालिकलाई सन्देश पठाउनुहोस्।',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'एभोकाडो अर्डर भुक्तान गर्न तयार छ',
        'sample' => "<b> तपाइँको स्टोरको नाम</b><br> तपाइँको अर्डर पुष्टि भएको छ र निम्न लिङ्क मार्फत भुक्तान गर्न सकिन्छ। <br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nतपाईंको अर्डर पुष्टि भएको छ र निम्न लिङ्क मार्फत भुक्तान गर्न सकिन्छ।\nअर्डर #: :param2\nलिङ्क: :param1\nSelldone",
        'icon' => 'रसिद',
        'description' => 'विक्रेताले लागत सेट गरेपछि ग्राहकलाई भुक्तानी लिङ्कको साथ सन्देश पठाउनुहोस् र तिनीहरूको एभोकाडो अर्डर पुष्टि गर्नुहोस्।',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'अर्डर पठाउन तयार छ',
        'sample' => "नमस्ते <b>Alex</b>, राम्रो खबर, तपाईको अर्डर अब पठाउनको लागि तयार छ। <br>Order: <b>SM-123</b>",
        'body' => "नमस्ते :param4, राम्रो खबर, तपाईंको अर्डर अब पठाउनको लागि तयार छ।\nअर्डर: :param1",
        'icon' => 'local_shipping',
        'description' => 'ग्राहकलाई सन्देश पठाउनुहोस् कि तिनीहरूको अर्डर पठाउनको लागि तयार छ।',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'पिकअप गर्न तयार अर्डर',
        'sample' => "नमस्ते एलेक्स, शुभ समाचार, तपाईंको अर्डर अब उठाउनको लागि तयार छ।<br>Order: <b>SM-123</b>",
        'body' => "नमस्ते :param4, राम्रो खबर, तपाईंको अर्डर अब उठाउनको लागि तयार छ।\nअर्डर: :param1",
        'icon' => 'share_location',
        'description' => 'ग्राहकलाई सन्देश पठाउनुहोस् कि तिनीहरूको अर्डर उठाउन तयार छ।',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'विक्रेता आदेश पठाउन तयार छ',
        'sample' => "नमस्ते <b>Alex</b>, राम्रो खबर, तपाईको अर्डर अब पठाउनको लागि तयार छ। <br>Order: <b>SM-123</b>",
        'body' => "नमस्ते :param4, राम्रो खबर, तपाईंको अर्डर अब पठाउनको लागि तयार छ।\nअर्डर: :param1",
        'icon' => 'local_shipping',
        'description' => 'ग्राहकलाई सन्देश पठाउनुहोस् कि तिनीहरूको अर्डर पठाउनको लागि तयार छ। प्रत्यक्ष ढुवानी मोड र डेलिभरी प्रकारको साथ बजारमा मात्र पिकअप होइन।',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'विक्रेता अर्डर पिकअप गर्न तयार छ',
        'sample' => "नमस्ते एलेक्स, शुभ समाचार, तपाईंको अर्डर अब उठाउनको लागि तयार छ।<br>Order: <b>SM-123</b>",
        'body' => "नमस्ते :param4, राम्रो खबर, तपाईंको अर्डर अब उठाउनको लागि तयार छ।\nअर्डर: :param1",
        'icon' => 'share_location',
        'description' => 'ग्राहकलाई सन्देश पठाउनुहोस् कि तिनीहरूको अर्डर उठाउन तयार छ। प्रत्यक्ष ढुवानी मोड र डेलिभरी प्रकारको साथ बजारमा मात्र पिकअप हो।',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'अर्डर वस्तुहरू पुष्टिकरण',
        'sample' => "नमस्ते एलेक्स, हामीले तपाईंको अर्डर समीक्षा गरेका छौं। यहाँ तपाईंको वस्तुहरूको पुष्टिकरण स्थिति छ: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "नमस्ते :param4, हामीले तपाईंको अर्डरको समीक्षा गरेका छौं। यहाँ तपाईंका वस्तुहरूको पुष्टिकरण स्थिति छ:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ग्राहकलाई उनीहरूको अर्डरमा भएका वस्तुहरू बारे सूचित गर्दछ जुन विक्रेताद्वारा स्वीकृत वा अस्वीकार गरिएको छ।',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'विक्रेता अर्डर वस्तुहरू पुष्टिकरण',
        'sample' => "नमस्ते एलेक्स, हामीले तपाईंको अर्डर समीक्षा गरेका छौं। यहाँ तपाईंको वस्तुहरूको पुष्टिकरण स्थिति छ: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "नमस्ते :param4, हामीले तपाईंको अर्डरको समीक्षा गरेका छौं। यहाँ तपाईंका वस्तुहरूको पुष्टिकरण स्थिति छ:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'विक्रेताद्वारा स्वीकृत वा अस्वीकार गरिएका वस्तुहरूको अर्डरको बारेमा ग्राहकलाई सूचित गर्दछ।',
    ],



];
