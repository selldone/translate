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
        'title' => 'भुगतान स्वीकार करें',
        'sample' => "आपका \$267 का भुगतान सफलतापूर्वक निपटा दिया गया।",
        'body' => "आपका :param2 भुगतान सफलतापूर्वक निपट गया।\nआदेश: :param1\nधन्यवाद, :param3।\nSelldone",
        'icon' => 'भुगतान',
        'description' => 'सफल भुगतान के बारे में सूचित करने के लिए दुकान के ग्राहक को संदेश भेजें।',

    ],
    'shop-order-payment-admin' => [
        'title' => 'भुगतान स्वीकार करें',
        'sample' => "नया \$267 भुगतान सफलतापूर्वक निपटाया गया।",
        'body' => "नया :param2 भुगतान सफलतापूर्वक निपटाया गया।\nआदेश: :param1\nधन्यवाद, :param3।\nSelldone",
        'icon' => 'भुगतान',
        'description' => 'दुकान मालिक को सफल भुगतान की सूचना देने के लिए उन्हें संदेश भेजें।',

    ],

    'vendor-new-order' => [
        'title' => 'विक्रेता नया ऑर्डर',
        'sample' => "आपको \$2000 का नया ऑर्डर प्राप्त हुआ।| SKU100001 |1x<br>✅ उत्पाद बी| SKU100002 |1x",
        'body' => "आपको एक नया :param2 ऑर्डर प्राप्त हुआ।\nआदेश: :param3 के लिए :param1।\n:param4",
        'icon' => 'स्टोरफ्रंट',
        'description' => 'नए ऑर्डर के बारे में सूचित करने के लिए विक्रेता को संदेश भेजें।',
    ],








    'shop-login' => [
        'title' => 'लॉगिन सत्यापन कोड',
        'sample' => "आपका लॉगिन कोड है: <b>123456</b><br><b>आपके स्टोर का नाम</b><br>Selldone",
        'body' => "आपका लॉगिन कोड है: :param1\n:param2\nSelldone",
        'icon' => 'लॉगिन करें',
        'description' => 'दुकान में लॉग इन करने के लिए ग्राहक को लॉगिन कोड भेजें।',

    ],

    'user-login' => [
        'title' => 'लॉगिन सफलता संदेश',
        'sample' => "प्रिय <b>Name</b>,<br>आपने <b>iPhone 165.250.300.1</b> द्वारा <b>5/8/2021 पर अपने खाते में लॉग इन किया है 9:14AM</b>.<br>Selldone",
        'body' => "प्रिय :param1,\nआपने :param3 पर :param2 द्वारा अपने खाते में लॉग इन किया है।\nSelldone",
        'icon' => 'सिस्टम_सुरक्षा_अद्यतन_अच्छा',
        'description' => 'ग्राहक के दुकान में लॉगइन करने के बाद एक संदेश भेजें।',

    ],

    'avocado-order-submit' => [
        'title' => 'एवोकैडो नया ऑर्डर सबमिट किया गया खरीदार को भेजें',
        'sample' => "<b>आपके स्टोर का नाम</b><br>प्रिय <b>आपका नाम</b>,<br>हमें आपका ऑर्डर प्राप्त हुआ है और हम इसकी समीक्षा कर रहे हैं।<br>ऑर्डर #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nप्रिय :param1,\nहमें आपका आदेश प्राप्त हो गया है और हम इसकी समीक्षा कर रहे हैं।\nआदेश #: :param2\nSelldone",
        'icon' => 'तथ्य_जांच',
        'description' => 'एवोकाडो का ऑर्डर देने के बाद ग्राहक को संदेश भेजें।',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'एवोकैडो विक्रेता को नया ऑर्डर भेजें',
        'sample' => "आपको एक एवोकैडो ऑर्डर प्राप्त हुआ: <br>स्टोर: <b>आपके स्टोर का नाम</b><br>खरीदार: <b>खरीदार का नाम</b><br>ऑर्डर: <b>AVO-246</b><br>Selldone",
        'body' => "आपको एवोकैडो ऑर्डर प्राप्त हुआ:\nस्टोर: :param1\nक्रेता: :param2\nआदेश: :param3\nSelldone",
        'icon' => 'कैसे_करें_reg',
        'description' => 'दुकान के मालिक को नया एवोकैडो ऑर्डर प्राप्त होने की सूचना देने के लिए संदेश भेजें।',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'एवोकैडो ऑर्डर भुगतान के लिए तैयार',
        'sample' => "<b>आपके स्टोर का नाम</b><br>आपके ऑर्डर की पुष्टि हो गई है और निम्नलिखित लिंक के माध्यम से भुगतान किया जा सकता है।<br>ऑर्डर #: <b>AVO-246</b><br>लिंक: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nआपके ऑर्डर की पुष्टि हो गई है और निम्नलिखित लिंक के माध्यम से भुगतान किया जा सकता है।\nआदेश #: :param2\nलिंक: :param1\nSelldone",
        'icon' => 'रसीद',
        'description' => 'विक्रेता द्वारा लागत निर्धारित करने और उनके एवोकैडो ऑर्डर की पुष्टि करने के बाद ग्राहक को भुगतान लिंक के साथ एक संदेश भेजें।',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ऑर्डर भेजने के लिए तैयार है',
        'sample' => "नमस्ते <b>Alex</b>, अच्छी खबर है, आपका ऑर्डर अब शिप करने के लिए तैयार है।<br>ऑर्डर: <b>SM-123</b>",
        'body' => "नमस्ते :param4, अच्छी खबर, आपका ऑर्डर अब शिपमेंट के लिए तैयार है।\nआदेश: :param1",
        'icon' => 'स्थानीय_शिपिंग',
        'description' => 'ग्राहक को एक संदेश भेजकर सूचित करें कि उनका ऑर्डर शिपमेंट के लिए तैयार है।',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ऑर्डर लेने के लिए तैयार है',
        'sample' => "हाय एलेक्स, अच्छी खबर, आपका ऑर्डर अब उठाए जाने के लिए तैयार है।<br>ऑर्डर: <b>SM-123</b>",
        'body' => "नमस्ते :param4, अच्छी खबर, आपका ऑर्डर अब उठाए जाने के लिए तैयार है।\nआदेश: :param1",
        'icon' => 'share_location',
        'description' => 'ग्राहक को एक संदेश भेजकर सूचित करें कि उनका ऑर्डर लेने के लिए तैयार है।',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'विक्रेता का ऑर्डर शिपमेंट के लिए तैयार है',
        'sample' => "नमस्ते <b>Alex</b>, अच्छी खबर है, आपका ऑर्डर अब शिप करने के लिए तैयार है।<br>ऑर्डर: <b>SM-123</b>",
        'body' => "नमस्ते :param4, अच्छी खबर, आपका ऑर्डर अब शिपमेंट के लिए तैयार है।\nआदेश: :param1",
        'icon' => 'स्थानीय_शिपिंग',
        'description' => 'ग्राहक को एक संदेश भेजकर सूचित करें कि उनका ऑर्डर शिपमेंट के लिए तैयार है। सीधे शिपिंग मोड के साथ बाज़ार में और डिलीवरी का प्रकार पिकअप नहीं है।',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'विक्रेता का ऑर्डर लेने के लिए तैयार है',
        'sample' => "हाय एलेक्स, अच्छी खबर, आपका ऑर्डर अब उठाए जाने के लिए तैयार है।<br>ऑर्डर: <b>SM-123</b>",
        'body' => "नमस्ते :param4, अच्छी खबर, आपका ऑर्डर अब उठाए जाने के लिए तैयार है।\nआदेश: :param1",
        'icon' => 'share_location',
        'description' => 'ग्राहक को एक संदेश भेजकर सूचित करें कि उनका ऑर्डर लेने के लिए तैयार है। डायरेक्ट शिपिंग मोड के साथ बाज़ार में और डिलीवरी का प्रकार पिकअप है।',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ऑर्डर आइटम की पुष्टि',
        'sample' => "नमस्ते एलेक्स, हमने आपके ऑर्डर की समीक्षा की है। यहां आपके आइटम के लिए पुष्टिकरण स्थिति है:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "नमस्ते :param4, हमने आपके ऑर्डर की समीक्षा की है। यहां आपके आइटम की पुष्टि स्थिति है:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'असाइनमेंट_टर्न_इन',
        'description' => 'ग्राहक को उनके ऑर्डर में उन वस्तुओं के बारे में सूचित करता है जिन्हें विक्रेता द्वारा स्वीकार या अस्वीकार कर दिया गया है।',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'विक्रेता ऑर्डर आइटम की पुष्टि',
        'sample' => "नमस्ते एलेक्स, हमने आपके ऑर्डर की समीक्षा की है। यहां आपके आइटम के लिए पुष्टिकरण स्थिति है:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "नमस्ते :param4, हमने आपके ऑर्डर की समीक्षा की है। यहां आपके आइटम की पुष्टि स्थिति है:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'असाइनमेंट_टर्न_इन',
        'description' => 'ग्राहक को उनके ऑर्डर में उन वस्तुओं के बारे में सूचित करता है जिन्हें विक्रेता द्वारा स्वीकार या अस्वीकार कर दिया गया है।',
    ],



];
