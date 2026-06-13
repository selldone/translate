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
        'title' => 'ክፍያ ተቀበል',
        'sample' => "የ \$267 ክፍያዎ በተሳካ ሁኔታ ተፈጽሟል።",
        'body' => "የ:param2 ክፍያዎ በተሳካ ሁኔታ ተፈጽሟል።\nትእዛዝ: :param1\nአመሰግናለሁ፣ :param3።\nSelldone",
        'icon' => 'ክፍያ',
        'description' => 'ስለ ስኬታማ ክፍያ ለማሳወቅ ለሱቅ ደንበኛ መልዕክት ይላኩ።',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ክፍያ ተቀበል',
        'sample' => "አዲስ \$267 ክፍያ በተሳካ ሁኔታ ተፈጽሟል።",
        'body' => "አዲስ የ:param2 ክፍያ በተሳካ ሁኔታ ተጠናቀቀ።\nትእዛዝ: :param1\nአመሰግናለሁ፣ :param3።\nSelldone",
        'icon' => 'ክፍያ',
        'description' => 'ስለ ስኬታማ ክፍያ ለማሳወቅ ለሱቁ ባለቤት መልእክት ይላኩ።',

    ],

    'vendor-new-order' => [
        'title' => 'ሻጭ አዲስ ትዕዛዝ',
        'sample' => "አዲስ የ\$200 ትእዛዝ ተቀብለዋል።<br>ትእዛዝ፡<b>SM-870</b> ለ<b>Vendor ስም|SKU100001|1x<br>✅ ምርት ለ|SKU100002|1x",
        'body' => "አዲስ የ:param2 ትዕዛዝ ተቀብለዋል።\nትእዛዝ፡- :param1 ለ :param3።\n:param4",
        'icon' => 'የሱቅ ፊት',
        'description' => 'ስለ አዲስ ትዕዛዝ ለማሳወቅ ለሻጩ መልዕክት ይላኩ።',
    ],








    'shop-login' => [
        'title' => 'የመግቢያ ማረጋገጫ ኮድ',
        'sample' => "የመግቢያ ኮድዎ፡- <b>123456</b><br><b>የእርስዎ የሱቅ ስም</b><br>Selldone",
        'body' => "የመግቢያ ኮድህ፡- :param1 ነው።\n:param2\nSelldone",
        'icon' => 'መግባት',
        'description' => 'ወደ ሱቁ ለመግባት የመግቢያ ኮድ ለደንበኛው ይላኩ።',

    ],

    'user-login' => [
        'title' => 'የመግቢያ የስኬት መልእክት',
        'sample' => "ውድ <b>Name</b>፣<br> ወደ ሂሳብህ በ<b>iPhone 165.250.300.1</b> በ<b>5/8/2020 ገብተሃል። 9:14AM</b>.<br>Selldone",
        'body' => "ውድ :param1፣\nበ:param2 በ:param3 ወደ መለያህ ገብተሃል።\nSelldone",
        'icon' => 'የስርዓት_ደህንነት_ዝማኔ_ጥሩ',
        'description' => 'ደንበኛው ወደ ሱቁ ከገባ በኋላ መልዕክት ይላኩ።',

    ],

    'avocado-order-submit' => [
        'title' => 'አቮካዶ አዲስ ትዕዛዝ ለገዢ ተላከ',
        'sample' => "<b>የእርስዎ የሱቅ ስም</b><br> ውድ <b>የእርስዎ ስም</b>,<br> ትዕዛዝዎን ተቀብለናል እና እየገመገምነው ነው።<br>ትእዛዝ #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nውድ :param1፣\nትእዛዝህን ተቀብለናል እና እየገመገምነው ነው።\nትዕዛዝ #: :param2\nSelldone",
        'icon' => 'እውነታ_ማጣራት።',
        'description' => 'የአቮካዶ ትዕዛዝ ካስገቡ በኋላ ለደንበኛው መልዕክት ይላኩ።',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'አቮካዶ ለሻጭ የተላከ አዲስ ትዕዛዝ ይቀበላል',
        'sample' => "የአቮካዶ ትእዛዝ ተቀብለሃል፡<br>Store፡ <b>የሱቅህ ስም</b><br>ገዢ፡<b>የገዢ ስም</b><br> ትዕዛዝ፡ <b>AVO-246</b><br>Selldone",
        'body' => "የአቮካዶ ትዕዛዝ ተቀብለሃል፡-\nመደብር: :param1\nገዢ: :param2\nትእዛዝ: :param3\nSelldone",
        'icon' => 'እንዴት_እንደሚስተካከል',
        'description' => 'አዲስ የአቮካዶ ትእዛዝ ስለመቀበል ለሱቁ ባለቤት መልዕክት ይላኩ።',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'የአቮካዶ ትዕዛዝ ለመክፈል ዝግጁ ነው።',
        'sample' => "<b>የሱቅ ስም</b><br> ትዕዛዝህ ተረጋግጧል እና በሚከተለው ሊንክ መክፈል ትችላለህ። <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nትዕዛዝህ ተረጋግጧል እና በሚከተለው ሊንክ መክፈል ትችላለህ።\nትዕዛዝ #: :param2\nአገናኝ: :param1\nSelldone",
        'icon' => 'ደረሰኝ',
        'description' => 'ሻጩ ወጪውን ካስቀመጠ በኋላ ከክፍያ ማገናኛ ጋር ለደንበኛው መልእክት ይላኩ እና የአቮካዶ ትዕዛዛቸውን ያረጋግጡ።',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ለመላክ ዝግጁ ያዝዙ',
        'sample' => "ሰላም <b>Alex</b>, መልካም ዜና, ትዕዛዝዎ አሁን ለመላክ ዝግጁ ነው.<br>ትእዛዝ: <b>SM-123</b>",
        'body' => "ሰላም :param4፣ መልካም ዜና፣ ትዕዛዝህ አሁን ለመላክ ዝግጁ ነው።\nትእዛዝ: :param1",
        'icon' => 'የሀገር ውስጥ_መላኪያ',
        'description' => 'ትዕዛዛቸው ለመላክ ዝግጁ መሆኑን ለደንበኛው ለማሳወቅ መልእክት ይላኩ።',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ለመውሰድ ዝግጁ ያዝዙ',
        'sample' => "ጤና ይስጥልኝ አሌክስ ፣ የምስራች ፣ ትዕዛዙ አሁን ለመውሰድ ዝግጁ ነው ።",
        'body' => "ሰላም :param4፣ መልካም ዜና፣ ትዕዛዝህ አሁን ለመውሰድ ዝግጁ ነው።\nትእዛዝ: :param1",
        'icon' => 'አካባቢ_አጋራ',
        'description' => 'ትዕዛዙ ለመውሰድ ዝግጁ መሆኑን ለደንበኛው ለማሳወቅ መልእክት ይላኩ ።',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'የሻጭ ትእዛዝ ለመላክ ዝግጁ ነው።',
        'sample' => "ሰላም <b>Alex</b>, መልካም ዜና, ትዕዛዝዎ አሁን ለመላክ ዝግጁ ነው.<br>ትእዛዝ: <b>SM-123</b>",
        'body' => "ሰላም :param4፣ መልካም ዜና፣ ትዕዛዝህ አሁን ለመላክ ዝግጁ ነው።\nትእዛዝ: :param1",
        'icon' => 'የሀገር ውስጥ_መላኪያ',
        'description' => 'ትዕዛዛቸው ለመላክ ዝግጁ መሆኑን ለደንበኛው ለማሳወቅ መልእክት ይላኩ። ልክ በገበያ ቦታ በቀጥታ የማጓጓዣ ሁነታ እና የመላኪያ አይነት አይወሰድም።',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'ለማንሳት ዝግጁ የሆነ የአቅራቢ ትእዛዝ',
        'sample' => "ጤና ይስጥልኝ አሌክስ ፣ የምስራች ፣ ትዕዛዙ አሁን ለመውሰድ ዝግጁ ነው ።",
        'body' => "ሰላም :param4፣ መልካም ዜና፣ ትዕዛዝህ አሁን ለመውሰድ ዝግጁ ነው።\nትእዛዝ: :param1",
        'icon' => 'አካባቢ_አጋራ',
        'description' => 'ትዕዛዙ ለመውሰድ ዝግጁ መሆኑን ለደንበኛው ለማሳወቅ መልእክት ይላኩ ። ልክ በገበያ ቦታ በቀጥታ የማጓጓዣ ሁነታ እና የመላኪያ አይነት መወሰድ ነው።',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'የዕቃዎች ማረጋገጫን ይዘዙ',
        'sample' => "ጤና ይስጥልኝ አሌክስ ትእዛዝህን ገምግመነዋል። የዕቃዎችዎ የማረጋገጫ ሁኔታ እዚህ አለ፡<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ሰላም :param4፣ ትዕዛዝህን ገምግመነዋል። የዕቃዎችዎ የማረጋገጫ ሁኔታ እነሆ፡-"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'ምደባ_ገብቷል።',
        'description' => 'በሻጩ የተቀበሉትን ወይም ያልተቀበሉትን በትእዛዛቸው ውስጥ ስላሉት እቃዎች ለደንበኛው ያሳውቃል።',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'የሻጭ ትዕዛዝ እቃዎች ማረጋገጫ',
        'sample' => "ጤና ይስጥልኝ አሌክስ ትእዛዝህን ገምግመነዋል። የዕቃዎችዎ የማረጋገጫ ሁኔታ እዚህ አለ፡<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ሰላም :param4፣ ትዕዛዝህን ገምግመነዋል። የዕቃዎችዎ የማረጋገጫ ሁኔታ እነሆ፡-"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'ምደባ_ገብቷል።',
        'description' => 'በሻጩ የተቀበሉትን ወይም ያልተቀበሉትን በትእዛዛቸው ውስጥ ስላሉት እቃዎች ለደንበኛው ያሳውቃል።',
    ],



];
