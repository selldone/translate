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
        'title' => 'ચુકવણી સ્વીકારો',
        'sample' => "તમારી \$267 ચુકવણી સફળતાપૂર્વક પતાવટ કરવામાં આવી હતી.<br>Order: SM-425<br>Thanks, <b>તમારા સ્ટોરનું નામ</b>.<br>Selldone",
        'body' => "તમારી :param2 ચુકવણી સફળતાપૂર્વક પતાવટ કરવામાં આવી હતી.\nઓર્ડર: :param1\nઆભાર, :param3.\nSelldone",
        'icon' => 'ચુકવણી',
        'description' => 'સફળ ચુકવણી વિશે જાણ કરવા માટે દુકાનના ગ્રાહકને સંદેશ મોકલો.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ચુકવણી સ્વીકારો',
        'sample' => "નવી \$267 ચુકવણી સફળતાપૂર્વક પતાવટ કરવામાં આવી હતી.<br>Order: SM-425<br>Thanks, <b>તમારા સ્ટોરનું નામ</b>.<br>Selldone",
        'body' => "નવી :param2 ચુકવણી સફળતાપૂર્વક પતાવટ કરવામાં આવી હતી.\nઓર્ડર: :param1\nઆભાર, :param3.\nSelldone",
        'icon' => 'ચુકવણી',
        'description' => 'સફળ ચુકવણી વિશે જાણ કરવા માટે દુકાન માલિકને સંદેશ મોકલો.',

    ],

    'vendor-new-order' => [
        'title' => 'વિક્રેતા નવો ઓર્ડર',
        'sample' => "તમને \$200 નો નવો ઓર્ડર મળ્યો છે. <br>Order: <b>SM-870</b> <b>Vendor name</b>.<br>✅ ઉત્પાદન A માટે| SKU100001 |1x<br>✅ ઉત્પાદન B| SKU100002 |1x",
        'body' => "તમને નવો :param2 ઓર્ડર મળ્યો છે.\nઓર્ડર: :param3 માટે :param1.\n:param4",
        'icon' => 'સ્ટોરફ્રન્ટ',
        'description' => 'નવા ઓર્ડર વિશે જાણ કરવા માટે વિક્રેતાને સંદેશ મોકલો.',
    ],








    'shop-login' => [
        'title' => 'લૉગિન ચકાસણી કોડ',
        'sample' => "તમારો લોગિન કોડ છે: <b>123456</b><br><b>તમારા સ્ટોરનું નામ</b><br>Selldone",
        'body' => "તમારો લોગિન કોડ છે: :param1\n:param2\nSelldone",
        'icon' => 'પ્રવેશ',
        'description' => 'દુકાનમાં લૉગ ઇન કરવા માટે ગ્રાહકને લૉગિન કોડ મોકલો.',

    ],

    'user-login' => [
        'title' => 'લૉગિન સક્સેસ મેસેજ',
        'sample' => "પ્રિય <b>Name</b>,<br> તમે <b>iPhone 165.250.300.1</b> દ્વારા <b>5/8/2021 પર તમારા એકાઉન્ટમાં લૉગ ઇન કર્યું છે 9:14AM</b>.<br>Selldone",
        'body' => "પ્રિય :param1,\nતમે તમારા એકાઉન્ટમાં :param2 દ્વારા :param3 પર લૉગ ઇન કર્યું છે.\nSelldone",
        'icon' => 'સિસ્ટમ_સુરક્ષા_અપડેટ_સારું',
        'description' => 'ગ્રાહક દુકાનમાં લોગીન થયા પછી સંદેશ મોકલો.',

    ],

    'avocado-order-submit' => [
        'title' => 'એવોકાડો નવો ઓર્ડર સબમિટ ખરીદનારને મોકલો',
        'sample' => "<b>તમારા સ્ટોરનું નામ</b><br>પ્રિય <b>તમારું નામ</b>,<br>અમને તમારો ઓર્ડર મળ્યો છે અને અમે તેની સમીક્ષા કરી રહ્યા છીએ.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nપ્રિય :param1,\nઅમને તમારો ઓર્ડર મળ્યો છે અને અમે તેની સમીક્ષા કરી રહ્યા છીએ.\nઓર્ડર #: :param2\nSelldone",
        'icon' => 'હકીકત_તપાસ',
        'description' => 'એવોકાડો ઓર્ડર આપ્યા પછી ગ્રાહકને સંદેશ મોકલો.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'એવોકાડો નવો ઓર્ડર મેળવે છે જે વેચનારને મોકલે છે',
        'sample' => "તમને એવોકાડો ઓર્ડર મળ્યો છે:<br>Store: <b>તમારા સ્ટોરનું નામ</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "તમને એવોકાડો ઓર્ડર મળ્યો છે:\nસ્ટોર: :param1\nખરીદનાર: :param2\nઓર્ડર: :param3\nSelldone",
        'icon' => 'કેવી રીતે_કરવું_રેગ',
        'description' => 'નવો એવોકાડો ઓર્ડર મેળવવા વિશે જાણ કરવા માટે દુકાન માલિકને સંદેશ મોકલો.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'એવોકાડો ઓર્ડર ચૂકવવા માટે તૈયાર છે',
        'sample' => "<b>તમારા સ્ટોરનું નામ</b><br>તમારા ઓર્ડરની પુષ્ટિ કરવામાં આવી છે અને નીચેની લિંક દ્વારા ચૂકવણી કરી શકાય છે. <br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nતમારા ઓર્ડરની પુષ્ટિ કરવામાં આવી છે અને નીચેની લિંક દ્વારા ચૂકવણી કરી શકાય છે.\nઓર્ડર #: :param2\nલિંક: :param1\nSelldone",
        'icon' => 'રસીદ',
        'description' => 'વિક્રેતાએ કિંમત નક્કી કર્યા પછી ગ્રાહકને ચુકવણી લિંક સાથે સંદેશ મોકલો અને તેમના એવોકાડો ઓર્ડરની પુષ્ટિ કરો.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'મોકલવા માટે તૈયાર ઓર્ડર',
        'sample' => "હાય <b>Alex</b>, સારા સમાચાર, તમારો ઓર્ડર હવે મોકલવા માટે તૈયાર છે. <br>Order: <b>SM-123</b>",
        'body' => "હાય :param4, સારા સમાચાર, તમારો ઓર્ડર હવે મોકલવા માટે તૈયાર છે.\nઓર્ડર: :param1",
        'icon' => 'સ્થાનિક_શિપિંગ',
        'description' => 'ગ્રાહકને સંદેશ મોકલો કે તેઓને જાણ કરો કે તેમનો ઓર્ડર મોકલવા માટે તૈયાર છે.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'પિકઅપ માટે તૈયાર ઓર્ડર',
        'sample' => "હાય એલેક્સ, સારા સમાચાર, તમારો ઓર્ડર હવે લેવા માટે તૈયાર છે.<br>Order: <b>SM-123</b>",
        'body' => "હાય :param4, સારા સમાચાર, તમારો ઓર્ડર હવે લેવા માટે તૈયાર છે.\nઓર્ડર: :param1",
        'icon' => 'શેર_સ્થાન',
        'description' => 'ગ્રાહકને એક સંદેશ મોકલો અને તેમને જણાવો કે તેમનો ઓર્ડર લેવા માટે તૈયાર છે.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'વિક્રેતા ઓર્ડર મોકલવા માટે તૈયાર છે',
        'sample' => "હાય <b>Alex</b>, સારા સમાચાર, તમારો ઓર્ડર હવે મોકલવા માટે તૈયાર છે. <br>Order: <b>SM-123</b>",
        'body' => "હાય :param4, સારા સમાચાર, તમારો ઓર્ડર હવે મોકલવા માટે તૈયાર છે.\nઓર્ડર: :param1",
        'icon' => 'સ્થાનિક_શિપિંગ',
        'description' => 'ગ્રાહકને સંદેશ મોકલો કે તેઓને જાણ કરો કે તેમનો ઓર્ડર મોકલવા માટે તૈયાર છે. ડાયરેક્ટ શિપિંગ મોડ અને ડિલિવરી પ્રકાર સાથે માત્ર માર્કેટપ્લેસમાં પીકઅપ નથી.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'વિક્રેતા ઓર્ડર પિકઅપ માટે તૈયાર છે',
        'sample' => "હાય એલેક્સ, સારા સમાચાર, તમારો ઓર્ડર હવે લેવા માટે તૈયાર છે.<br>Order: <b>SM-123</b>",
        'body' => "હાય :param4, સારા સમાચાર, તમારો ઓર્ડર હવે લેવા માટે તૈયાર છે.\nઓર્ડર: :param1",
        'icon' => 'શેર_સ્થાન',
        'description' => 'ગ્રાહકને એક સંદેશ મોકલો અને તેમને જણાવો કે તેમનો ઓર્ડર લેવા માટે તૈયાર છે. ડાયરેક્ટ શિપિંગ મોડ અને ડિલિવરી પ્રકાર સાથે માર્કેટપ્લેસમાં જ પીકઅપ છે.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ઓર્ડર આઇટમ્સ પુષ્ટિ',
        'sample' => "હેલો એલેક્સ, અમે તમારા ઓર્ડરની સમીક્ષા કરી છે. તમારી આઇટમ્સ માટે અહીં કન્ફર્મેશન સ્ટેટસ છે:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "હેલો :param4, અમે તમારા ઓર્ડરની સમીક્ષા કરી છે. અહીં તમારી આઇટમ માટે પુષ્ટિકરણ સ્થિતિ છે:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ગ્રાહકને તેમના ઓર્ડરમાંની વસ્તુઓ વિશે સૂચિત કરે છે જે વેચનાર દ્વારા સ્વીકારવામાં આવી છે અથવા નકારવામાં આવી છે.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'વિક્રેતા ઓર્ડર વસ્તુઓ પુષ્ટિ',
        'sample' => "હેલો એલેક્સ, અમે તમારા ઓર્ડરની સમીક્ષા કરી છે. તમારી આઇટમ્સ માટે અહીં કન્ફર્મેશન સ્ટેટસ છે:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "હેલો :param4, અમે તમારા ઓર્ડરની સમીક્ષા કરી છે. અહીં તમારી આઇટમ માટે પુષ્ટિકરણ સ્થિતિ છે:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ગ્રાહકને તેમના ઓર્ડરમાંની વસ્તુઓ વિશે સૂચિત કરે છે જે વિક્રેતા દ્વારા સ્વીકારવામાં આવી છે અથવા નકારી કાઢવામાં આવી છે.',
    ],



];
