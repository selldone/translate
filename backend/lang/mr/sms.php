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
        'title' => 'पेमेंट स्वीकारा',
        'sample' => "तुमचे \$267 पेमेंट यशस्वीरित्या सेटल झाले.<br>Order: SM-425<br>Thanks, <b>तुमचे स्टोअरचे नाव</b>.<br>Selldone",
        'body' => "तुमचे :param2 पेमेंट यशस्वीरित्या सेटल झाले.\nऑर्डर: :param1\nधन्यवाद, :param3.\nSelldone",
        'icon' => 'पेमेंट',
        'description' => 'यशस्वी पेमेंटबद्दल माहिती देण्यासाठी दुकानातील ग्राहकांना संदेश पाठवा.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'पेमेंट स्वीकारा',
        'sample' => "नवीन \$267 पेमेंट यशस्वीरित्या सेटल केले गेले.<br>Order: SM-425<br>Thanks, <b>तुमच्या स्टोअरचे नाव</b>.<br>Selldone",
        'body' => "नवीन :param2 पेमेंट यशस्वीरित्या सेटल केले गेले.\nऑर्डर: :param1\nधन्यवाद, :param3.\nSelldone",
        'icon' => 'पेमेंट',
        'description' => 'यशस्वी पेमेंटबद्दल माहिती देण्यासाठी दुकान मालकाला संदेश पाठवा.',

    ],

    'vendor-new-order' => [
        'title' => 'विक्रेता नवीन ऑर्डर',
        'sample' => "तुम्हाला \$200 ची नवीन ऑर्डर मिळाली आहे. <br>Order: <b>Vendor name</b>.<br>✅ उत्पादन A साठी <b>SM-870</b>| SKU100001 |1x<br>✅ उत्पादन B| SKU100002 |1x",
        'body' => "तुम्हाला नवीन :param2 ऑर्डर मिळाली आहे.\nऑर्डर: :param3 साठी :param1.\n:param4",
        'icon' => 'स्टोअरफ्रंट',
        'description' => 'नवीन ऑर्डरबद्दल माहिती देण्यासाठी विक्रेत्याला संदेश पाठवा.',
    ],








    'shop-login' => [
        'title' => 'लॉगिन सत्यापन कोड',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "तुमचा लॉगिन कोड आहे: :param1\n:param2\nSelldone",
        'icon' => 'लॉगिन',
        'description' => 'दुकानात लॉग इन करण्यासाठी ग्राहकाला लॉगिन कोड पाठवा.',

    ],

    'user-login' => [
        'title' => 'लॉगिन यशस्वी संदेश',
        'sample' => "प्रिय <b>Name</b>,<br> तुम्ही <b>iPhone 165.250.300.1</b> द्वारे <b>5/8/2021 येथे तुमच्या खात्यात लॉग इन केले आहे 9:14AM</b>.<br>Selldone",
        'body' => "प्रिय :param1,\nतुम्ही तुमच्या खात्यात :param2 द्वारे :param3 वर लॉग इन केले आहे.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'ग्राहकाने दुकानात लॉग इन केल्यानंतर संदेश पाठवा.',

    ],

    'avocado-order-submit' => [
        'title' => 'एवोकॅडो नवीन ऑर्डर खरेदीदारास पाठवा सबमिट केली',
        'sample' => "<b>तुमचे स्टोअरचे नाव</b><br>प्रिय <b> तुमचे नाव</b>,<br> आम्हाला तुमची ऑर्डर प्राप्त झाली आहे आणि आम्ही त्याचे पुनरावलोकन करत आहोत.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nप्रिय :param1,\nआम्हाला तुमची ऑर्डर मिळाली आहे आणि आम्ही त्याचे पुनरावलोकन करत आहोत.\nऑर्डर #: :param2\nSelldone",
        'icon' => 'तथ्य_तपासणी',
        'description' => 'एवोकॅडो ऑर्डर दिल्यानंतर ग्राहकाला संदेश पाठवा.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'एवोकॅडो विक्रेत्याला नवीन ऑर्डर पाठवा',
        'sample' => "तुम्हाला एवोकॅडो ऑर्डर मिळाली आहे:<br>Store: <b>तुमच्या स्टोअरचे नाव</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "तुम्हाला एवोकॅडो ऑर्डर मिळाली आहे:\nस्टोअर: :param1\nखरेदीदार: :param2\nऑर्डर: :param3\nSelldone",
        'icon' => 'कसे_करायचे_रेग',
        'description' => 'नवीन एवोकॅडो ऑर्डर मिळाल्याबद्दल माहिती देण्यासाठी दुकान मालकाला संदेश पाठवा.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'एवोकॅडो ऑर्डर देण्यास तयार आहे',
        'sample' => "<b>तुमच्या स्टोअरचे नाव</b><br>तुमच्या ऑर्डरची पुष्टी झाली आहे आणि खालील लिंकद्वारे पैसे दिले जाऊ शकतात. <br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nतुमच्या ऑर्डरची पुष्टी झाली आहे आणि खालील लिंकद्वारे पैसे दिले जाऊ शकतात.\nऑर्डर #: :param2\nदुवा: :param1\nSelldone",
        'icon' => 'पावती',
        'description' => 'विक्रेत्याने किंमत निश्चित केल्यानंतर ग्राहकाला पेमेंट लिंकसह संदेश पाठवा आणि त्यांच्या ॲव्होकॅडो ऑर्डरची पुष्टी करा.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ऑर्डर पाठवण्यासाठी तयार आहे',
        'sample' => "हाय <b>Alex</b>, चांगली बातमी, तुमची ऑर्डर आता पाठवण्यासाठी तयार आहे.<br>Order: <b>SM-123</b>",
        'body' => "हाय :param4, चांगली बातमी, तुमची ऑर्डर आता पाठवण्यासाठी तयार आहे.\nऑर्डर: :param1",
        'icon' => 'स्थानिक_शिपिंग',
        'description' => 'त्यांची ऑर्डर पाठवण्यासाठी तयार आहे हे सांगण्यासाठी ग्राहकांना संदेश पाठवा.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'पिकअपसाठी तयार ऑर्डर',
        'sample' => "हाय ॲलेक्स, चांगली बातमी, तुमची ऑर्डर आता पिकअप करण्यासाठी तयार आहे.<br>Order: <b>SM-123</b>",
        'body' => "हाय :param4, चांगली बातमी, तुमची ऑर्डर आता पिकअप करण्यासाठी तयार आहे.\nऑर्डर: :param1",
        'icon' => 'शेअर_स्थान',
        'description' => 'ग्राहकांना एक संदेश पाठवा की त्यांची ऑर्डर घेण्यास तयार आहे.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'विक्रेता ऑर्डर शिप करण्यासाठी तयार आहे',
        'sample' => "हाय <b>Alex</b>, चांगली बातमी, तुमची ऑर्डर आता पाठवण्यासाठी तयार आहे.<br>Order: <b>SM-123</b>",
        'body' => "हाय :param4, चांगली बातमी, तुमची ऑर्डर आता पाठवण्यासाठी तयार आहे.\nऑर्डर: :param1",
        'icon' => 'स्थानिक_शिपिंग',
        'description' => 'त्यांची ऑर्डर पाठवण्यासाठी तयार आहे हे सांगण्यासाठी ग्राहकांना संदेश पाठवा. फक्त मार्केटप्लेसमध्ये थेट शिपिंग मोड आणि वितरण प्रकार पिकअप नाही.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'विक्रेता ऑर्डर पिकअपसाठी तयार आहे',
        'sample' => "हाय ॲलेक्स, चांगली बातमी, तुमची ऑर्डर आता पिकअप करण्यासाठी तयार आहे.<br>Order: <b>SM-123</b>",
        'body' => "हाय :param4, चांगली बातमी, तुमची ऑर्डर आता पिकअप करण्यासाठी तयार आहे.\nऑर्डर: :param1",
        'icon' => 'शेअर_स्थान',
        'description' => 'ग्राहकांना एक संदेश पाठवा की त्यांची ऑर्डर घेण्यास तयार आहे. मार्केटप्लेसमध्ये थेट शिपिंग मोड आणि वितरण प्रकार म्हणजे पिकअप.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ऑर्डर आयटम पुष्टीकरण',
        'sample' => "हॅलो ॲलेक्स, आम्ही तुमच्या ऑर्डरचे पुनरावलोकन केले आहे. तुमच्या आयटमची पुष्टीकरण स्थिती येथे आहे:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "नमस्कार :param4, आम्ही तुमच्या ऑर्डरचे पुनरावलोकन केले आहे. तुमच्या आयटमची पुष्टीकरण स्थिती येथे आहे:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'विक्रेत्याने स्वीकारलेल्या किंवा नाकारलेल्या त्यांच्या ऑर्डरमधील आयटमबद्दल ग्राहकांना सूचित करते.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'विक्रेता ऑर्डर आयटम पुष्टीकरण',
        'sample' => "हॅलो ॲलेक्स, आम्ही तुमच्या ऑर्डरचे पुनरावलोकन केले आहे. तुमच्या आयटमची पुष्टीकरण स्थिती येथे आहे:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "नमस्कार :param4, आम्ही तुमच्या ऑर्डरचे पुनरावलोकन केले आहे. तुमच्या आयटमची पुष्टीकरण स्थिती येथे आहे:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'विक्रेत्याने स्वीकारलेल्या किंवा नाकारलेल्या त्यांच्या ऑर्डरमधील आयटमबद्दल ग्राहकांना सूचित करते.',
    ],



];
