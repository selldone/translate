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
        'title' => 'చెల్లింపును అంగీకరించండి',
        'sample' => "మీ \$267 చెల్లింపు విజయవంతంగా పరిష్కరించబడింది.<br>ఆర్డర్: SM-425<br>ధన్యవాదాలు, <b>మీ స్టోర్ పేరు</b>.<br>Selldone",
        'body' => "మీ :param2 చెల్లింపు విజయవంతంగా పరిష్కరించబడింది.\nఆర్డర్: :param1\nధన్యవాదాలు, :param3.\nSelldone",
        'icon' => 'చెల్లింపు',
        'description' => 'విజయవంతమైన చెల్లింపు గురించి తెలియజేయడానికి షాపింగ్ కస్టమర్‌కు సందేశం పంపండి.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'చెల్లింపును అంగీకరించండి',
        'sample' => "కొత్త \$267 చెల్లింపు విజయవంతంగా పరిష్కరించబడింది.<br>ఆర్డర్: SM-425<br>ధన్యవాదాలు, <b>మీ స్టోర్ పేరు</b>.<br>Selldone",
        'body' => "కొత్త :param2 చెల్లింపు విజయవంతంగా పరిష్కరించబడింది.\nఆర్డర్: :param1\nధన్యవాదాలు, :param3.\nSelldone",
        'icon' => 'చెల్లింపు',
        'description' => 'విజయవంతమైన చెల్లింపు గురించి తెలియజేయడానికి దుకాణ యజమానికి సందేశం పంపండి.',

    ],

    'vendor-new-order' => [
        'title' => 'విక్రేత కొత్త ఆర్డర్',
        'sample' => "మీరు కొత్త \$200 ఆర్డర్‌ని అందుకున్నారు.<br>Order: <b>SM-870</b> <b>Vendor పేరు</b>.<br>✅ ఉత్పత్తి A| SKU100001 |1x<br>✅ ఉత్పత్తి B| SKU100002 |1x",
        'body' => "మీరు కొత్త :param2 ఆర్డర్‌ని అందుకున్నారు.\nఆర్డర్: :param3 కోసం :param1.\n:param4",
        'icon' => 'దుకాణం ముందరి',
        'description' => 'కొత్త ఆర్డర్ గురించి తెలియజేయడానికి విక్రేతకు సందేశాన్ని పంపండి.',
    ],








    'shop-login' => [
        'title' => 'లాగిన్ ధృవీకరణ కోడ్',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "మీ లాగిన్ కోడ్: :param1\n:param2\nSelldone",
        'icon' => 'లాగిన్',
        'description' => 'దుకాణానికి లాగిన్ చేయడానికి వినియోగదారునికి లాగిన్ కోడ్‌ను పంపండి.',

    ],

    'user-login' => [
        'title' => 'లాగిన్ విజయ సందేశం',
        'sample' => "ప్రియమైన <b>Name</b>,<br> మీరు <b>5/8/2021 వద్ద <b>iPhone 165.250.300.1</b> ద్వారా మీ ఖాతాకు లాగిన్ చేసారు 9:14AM</b>.<br>Selldone",
        'body' => "ప్రియమైన :param1,\nమీరు :param3 వద్ద :param2 ద్వారా మీ ఖాతాకు లాగిన్ చేసారు.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'కస్టమర్ దుకాణానికి లాగిన్ అయిన తర్వాత సందేశాన్ని పంపండి.',

    ],

    'avocado-order-submit' => [
        'title' => 'అవోకాడో కొత్త ఆర్డర్ కొనుగోలుదారుకు పంపబడింది',
        'sample' => "<b>మీ స్టోర్ పేరు</b><br>Dear <b>మీ పేరు</b>,<br>మేము మీ ఆర్డర్‌ని స్వీకరించాము మరియు మేము దానిని సమీక్షిస్తున్నాము.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nప్రియమైన :param1,\nమేము మీ ఆర్డర్‌ని స్వీకరించాము మరియు మేము దానిని సమీక్షిస్తున్నాము.\nఆర్డర్ #: :param2\nSelldone",
        'icon' => 'వాస్తవం_తనిఖీ',
        'description' => 'అవోకాడో ఆర్డర్ చేసిన తర్వాత కస్టమర్‌కు సందేశం పంపండి.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'అవోకాడో అమ్మకందారునికి పంపిన కొత్త ఆర్డర్‌ను అందుకుంటుంది',
        'sample' => "మీరు అవోకాడో ఆర్డర్‌ని అందుకున్నారు:<br>Store: <b>మీ స్టోర్ పేరు</b><br>Buyer: <b>Buyer పేరు</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "మీరు అవోకాడో ఆర్డర్‌ని అందుకున్నారు:\nస్టోర్: :param1\nకొనుగోలుదారు: :param2\nఆర్డర్: :param3\nSelldone",
        'icon' => 'ఎలా_రెగ్ చేయాలి',
        'description' => 'కొత్త అవకాడో ఆర్డర్‌ను స్వీకరించడం గురించి షాప్ యజమానికి తెలియజేయడానికి వారికి సందేశం పంపండి.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'అవోకాడో ఆర్డర్ చెల్లించడానికి సిద్ధంగా ఉంది',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nమీ ఆర్డర్ నిర్ధారించబడింది మరియు క్రింది లింక్ ద్వారా చెల్లించవచ్చు.\nఆర్డర్ #: :param2\nలింక్: :param1\nSelldone",
        'icon' => 'రసీదు',
        'description' => 'విక్రేత ధరను నిర్ణయించిన తర్వాత కస్టమర్‌కు చెల్లింపు లింక్‌తో సందేశాన్ని పంపండి మరియు వారి అవోకాడో ఆర్డర్‌ను నిర్ధారించండి.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'షిప్ చేయడానికి ఆర్డర్ సిద్ధంగా ఉంది',
        'sample' => "హాయ్ <b>Alex</b>, శుభవార్త, మీ ఆర్డర్ ఇప్పుడు రవాణా చేయడానికి సిద్ధంగా ఉంది.<br>ఆర్డర్: <b>SM-123</b>",
        'body' => "హాయ్ :param4, శుభవార్త, మీ ఆర్డర్ ఇప్పుడు రవాణా చేయడానికి సిద్ధంగా ఉంది.\nఆర్డర్: :param1",
        'icon' => 'స్థానిక_షిప్పింగ్',
        'description' => 'వారి ఆర్డర్ షిప్పింగ్‌కు సిద్ధంగా ఉందని తెలియజేయడానికి కస్టమర్‌కు సందేశం పంపండి.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ఆర్డర్ పికప్ చేయడానికి సిద్ధంగా ఉంది',
        'sample' => "హాయ్ అలెక్స్, శుభవార్త, మీ ఆర్డర్ ఇప్పుడు తీయటానికి సిద్ధంగా ఉంది.<br>Order: <b>SM-123</b>",
        'body' => "హాయ్ :param4, శుభవార్త, మీ ఆర్డర్ ఇప్పుడు తీయడానికి సిద్ధంగా ఉంది.\nఆర్డర్: :param1",
        'icon' => 'భాగస్వామ్యం_స్థానం',
        'description' => 'వారి ఆర్డర్ పికప్ చేయడానికి సిద్ధంగా ఉందని తెలియజేయడానికి కస్టమర్‌కు సందేశం పంపండి.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'విక్రేత ఆర్డర్ రవాణా చేయడానికి సిద్ధంగా ఉంది',
        'sample' => "హాయ్ <b>Alex</b>, శుభవార్త, మీ ఆర్డర్ ఇప్పుడు రవాణా చేయడానికి సిద్ధంగా ఉంది.<br>ఆర్డర్: <b>SM-123</b>",
        'body' => "హాయ్ :param4, శుభవార్త, మీ ఆర్డర్ ఇప్పుడు రవాణా చేయడానికి సిద్ధంగా ఉంది.\nఆర్డర్: :param1",
        'icon' => 'స్థానిక_షిప్పింగ్',
        'description' => 'వారి ఆర్డర్ షిప్పింగ్‌కు సిద్ధంగా ఉందని తెలియజేయడానికి కస్టమర్‌కు సందేశం పంపండి. మార్కెట్‌లో డైరెక్ట్ షిప్పింగ్ మోడ్ మరియు డెలివరీ రకం పికప్ కాదు.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'విక్రేత ఆర్డర్ పికప్ చేయడానికి సిద్ధంగా ఉంది',
        'sample' => "హాయ్ అలెక్స్, శుభవార్త, మీ ఆర్డర్ ఇప్పుడు తీయటానికి సిద్ధంగా ఉంది.<br>Order: <b>SM-123</b>",
        'body' => "హాయ్ :param4, శుభవార్త, మీ ఆర్డర్ ఇప్పుడు తీయడానికి సిద్ధంగా ఉంది.\nఆర్డర్: :param1",
        'icon' => 'భాగస్వామ్యం_స్థానం',
        'description' => 'వారి ఆర్డర్ పికప్ చేయడానికి సిద్ధంగా ఉందని తెలియజేయడానికి కస్టమర్‌కు సందేశం పంపండి. మార్కెట్‌లో డైరెక్ట్ షిప్పింగ్ మోడ్ మరియు డెలివరీ రకం పికప్.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ఆర్డర్ ఐటెమ్‌ల నిర్ధారణ',
        'sample' => "హలో అలెక్స్, మేము మీ ఆర్డర్‌ని సమీక్షించాము. మీ అంశాల నిర్ధారణ స్థితి ఇక్కడ ఉంది:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "హలో :param4, మేము మీ ఆర్డర్‌ని సమీక్షించాము. మీ అంశాల నిర్ధారణ స్థితి ఇక్కడ ఉంది:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'విక్రేత ఆమోదించిన లేదా తిరస్కరించబడిన వారి ఆర్డర్‌లోని వస్తువుల గురించి కస్టమర్‌కు తెలియజేస్తుంది.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'విక్రేత ఆర్డర్ ఐటెమ్‌ల నిర్ధారణ',
        'sample' => "హలో అలెక్స్, మేము మీ ఆర్డర్‌ని సమీక్షించాము. మీ అంశాల నిర్ధారణ స్థితి ఇక్కడ ఉంది:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "హలో :param4, మేము మీ ఆర్డర్‌ని సమీక్షించాము. మీ అంశాల నిర్ధారణ స్థితి ఇక్కడ ఉంది:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'కస్టమర్ వారి ఆర్డర్‌లో విక్రేత ఆమోదించిన లేదా తిరస్కరించబడిన వస్తువుల గురించి తెలియజేస్తుంది.',
    ],



];
