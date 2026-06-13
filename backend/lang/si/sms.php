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
        'title' => 'ගෙවීම පිළිගන්න',
        'sample' => "ඔබගේ \$267 ගෙවීම සාර්ථකව ගෙවා ඇත.<br>Order: SM-425<br>ස්තුතියි, <b>ඔබේ වෙළඳසැලේ නම</b>.<br>Selldone",
        'body' => "ඔබේ :param2 ගෙවීම සාර්ථකව ගෙවා ඇත.\nඇණවුම: :param1\nස්තූතියි, :param3.\nSelldone",
        'icon' => 'ගෙවීම',
        'description' => 'සාර්ථක ගෙවීමක් ගැන දැනුම් දීමට සාප්පු පාරිභෝගිකයාට පණිවිඩයක් යවන්න.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ගෙවීම පිළිගන්න',
        'sample' => "නව \$267 ගෙවීම සාර්ථකව ගෙවා ඇත.<br>Order: SM-425<br>ස්තුතියි, <b>ඔබගේ වෙළඳසැලේ නම</b>.<br>Selldone",
        'body' => "නව :param2 ගෙවීම සාර්ථකව ගෙවා ඇත.\nඇණවුම: :param1\nස්තූතියි, :param3.\nSelldone",
        'icon' => 'ගෙවීම',
        'description' => 'සාර්ථක ගෙවීමක් ගැන ඔවුන්ව දැනුවත් කිරීමට සාප්පු හිමිකරුට පණිවිඩයක් යවන්න.',

    ],

    'vendor-new-order' => [
        'title' => 'විකුණුම්කරු නව ඇණවුම',
        'sample' => "ඔබට නව \$200ක ඇණවුමක් ලැබී ඇත.<br>Order: <b>SM-870</b> <b>Vendor නම</b>.<br>✅ නිෂ්පාදන A| SKU100001 |1x<br>✅ නිෂ්පාදන B| SKU100002 |1x",
        'body' => "ඔබට නව :param2 ඇණවුමක් ලැබී ඇත.\nඇණවුම: :param3 සඳහා :param1.\n:param4",
        'icon' => 'ගබඩා ඉදිරිපිට',
        'description' => 'නව ඇණවුමක් ගැන දැනුම් දීමට වෙළෙන්දාට පණිවිඩයක් යවන්න.',
    ],








    'shop-login' => [
        'title' => 'ලොගින් සත්‍යාපන කේතය',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "ඔබගේ පිවිසුම් කේතය: :param1\n:param2\nSelldone",
        'icon' => 'ඇතුල් වීම',
        'description' => 'වෙළඳසැලට ලොග් වීමට පාරිභෝගිකයාට පිවිසුම් කේතය යවන්න.',

    ],

    'user-login' => [
        'title' => 'පුරනය වීමේ සාර්ථක පණිවිඩය',
        'sample' => "හිතවත් <b>Name</b>,<br>ඔබ <b>5/8/2021 හිදී <b>iPhone 165.250.300.1</b> මගින් ඔබේ ගිණුමට ඇතුළු වී ඇත. 9:14AM</b>.<br>Selldone",
        'body' => "හිතවත් :param1,\nඔබ :param3 හි :param2 මගින් ඔබේ ගිණුමට ලොග් වී ඇත.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'පාරිභෝගිකයා සාප්පුවට ඇතුළු වූ පසු පණිවිඩයක් යවන්න.',

    ],

    'avocado-order-submit' => [
        'title' => 'අලිගැට පේර නව ඇණවුම ගැනුම්කරු වෙත යැවීමට ඉදිරිපත් කරන ලදී',
        'sample' => "<b>ඔබගේ වෙළඳසැලේ නම</b><br>Dear <b>ඔබගේ නම</b>,<br>අපට ඔබගේ ඇණවුම ලැබී ඇති අතර අපි එය සමාලෝචනය කරමින් සිටිමු.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nහිතවත් :param1,\nඅපට ඔබගේ ඇණවුම ලැබී ඇති අතර අපි එය සමාලෝචනය කරමින් සිටිමු.\nඇණවුම #: :param2\nSelldone",
        'icon' => 'කරුණු_පරීක්ෂා කරන්න',
        'description' => 'අලිගැට පේර ඇණවුමක් කිරීමෙන් පසු පාරිභෝගිකයාට පණිවිඩයක් යවන්න.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'අලිගැට පේර විකුණුම්කරු වෙත නව ඇණවුමක් ලැබේ',
        'sample' => "ඔබට අලිගැටපේර ඇණවුමක් ලැබී ඇත:<br>Store: <b>ඔබේ වෙළඳසැලේ නම</b><br>Buyer: <b>Buyer නම</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "ඔබට අලිගැටපේර ඇණවුමක් ලැබී ඇත:\nගබඩා: :param1\nගැනුම්කරු: :param2\nඇණවුම: :param3\nSelldone",
        'icon' => 'Reg_කරන්නේ_කෙසේද',
        'description' => 'නව අලිගැට පේර ඇණවුමක් ලැබීම ගැන ඔවුන්ව දැනුවත් කිරීමට සාප්පු හිමිකරුට පණිවිඩයක් යවන්න.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'අලිගැට පේර ඇණවුම ගෙවීමට සූදානම්',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nඔබගේ ඇණවුම තහවුරු කර ඇති අතර පහත සබැඳිය හරහා ගෙවිය හැක.\nඇණවුම #: :param2\nසබැඳිය: :param1\nSelldone",
        'icon' => 'රිසිට්පත',
        'description' => 'විකුණුම්කරු පිරිවැය නියම කර ඔවුන්ගේ අලිගැට පේර ඇණවුම තහවුරු කිරීමෙන් පසු පාරිභෝගිකයාට ගෙවීම් සබැඳිය සමඟ පණිවිඩයක් යවන්න.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ඇණවුම නැව්ගත කිරීමට සූදානම්',
        'sample' => "හායි <b>Alex</b>, ශුභාරංචිය, ඔබගේ ඇණවුම දැන් නැව්ගත කිරීමට සූදානම්.<br>Order: <b>SM-123</b>",
        'body' => "හායි :param4, ශුභාරංචිය, ඔබගේ ඇණවුම දැන් නැව්ගත කිරීමට සූදානම්.\nඇණවුම: :param1",
        'icon' => 'දේශීය_නැව්ගත කිරීම',
        'description' => 'තම ඇණවුම යැවීමට සූදානම් බව පාරිභෝගිකයාට දැනුම් දීමට පණිවිඩයක් යවන්න.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ඇණවුම ලබා ගැනීමට සූදානම්',
        'sample' => "හායි ඇලෙක්ස්, ශුභාරංචිය, ඔබගේ ඇණවුම ලබා ගැනීමට දැන් සූදානම්.<br>Order: <b>SM-123</b>",
        'body' => "හායි :param4, ශුභාරංචිය, ඔබගේ ඇණවුම දැන් ලබා ගැනීමට සූදානම්.\nඇණවුම: :param1",
        'icon' => 'share_ස්ථානය',
        'description' => 'ඔවුන්ගේ ඇණවුම ලබා ගැනීමට සූදානම් බව පාරිභෝගිකයාට දැනුම් දීමට පණිවිඩයක් යවන්න.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'විකුණුම්කරු ඇණවුම නැව්ගත කිරීමට සූදානම්',
        'sample' => "හායි <b>Alex</b>, ශුභාරංචිය, ඔබගේ ඇණවුම දැන් නැව්ගත කිරීමට සූදානම්.<br>Order: <b>SM-123</b>",
        'body' => "හායි :param4, ශුභාරංචිය, ඔබගේ ඇණවුම දැන් නැව්ගත කිරීමට සූදානම්.\nඇණවුම: :param1",
        'icon' => 'දේශීය_නැව්ගත කිරීම',
        'description' => 'තම ඇණවුම යැවීමට සූදානම් බව පාරිභෝගිකයාට දැනුම් දීමට පණිවිඩයක් යවන්න. සෘජු නැව්ගත කිරීමේ මාදිලිය සහ බෙදා හැරීමේ වර්ගය සමඟ වෙළඳපොලේ පමණක් පිකප් නොවේ.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'විකුණුම්කරු ඇණවුම ලබා ගැනීමට සූදානම්',
        'sample' => "හායි ඇලෙක්ස්, ශුභාරංචිය, ඔබගේ ඇණවුම ලබා ගැනීමට දැන් සූදානම්.<br>Order: <b>SM-123</b>",
        'body' => "හායි :param4, ශුභාරංචිය, ඔබගේ ඇණවුම දැන් ලබා ගැනීමට සූදානම්.\nඇණවුම: :param1",
        'icon' => 'share_ස්ථානය',
        'description' => 'ඔවුන්ගේ ඇණවුම ලබා ගැනීමට සූදානම් බව පාරිභෝගිකයාට දැනුම් දීමට පණිවිඩයක් යවන්න. සෘජු නැව්ගත කිරීමේ මාදිලිය සහ බෙදා හැරීමේ වර්ගය සමඟ වෙළඳපොලේ ඇත්තේ පිකප් ය.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ඇණවුම් අයිතම තහවුරු කිරීම',
        'sample' => "හෙලෝ ඇලෙක්ස්, අපි ඔබේ ඇණවුම සමාලෝචනය කළෙමු. මෙන්න ඔබේ අයිතම සඳහා තහවුරු කිරීමේ තත්ත්වය:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ආයුබෝවන් :param4, අපි ඔබගේ ඇණවුම සමාලෝචනය කර ඇත. මෙන්න ඔබේ අයිතම සඳහා තහවුරු කිරීමේ තත්ත්වය:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'විකුණුම්කරු විසින් පිළිගෙන ඇති හෝ ප්‍රතික්ෂේප කර ඇති ඔවුන්ගේ ඇණවුමේ ඇති අයිතම පිළිබඳව පාරිභෝගිකයාට දැනුම් දෙයි.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'විකුණුම්කරු ඇණවුම් අයිතම තහවුරු කිරීම',
        'sample' => "හෙලෝ ඇලෙක්ස්, අපි ඔබේ ඇණවුම සමාලෝචනය කළෙමු. මෙන්න ඔබේ අයිතම සඳහා තහවුරු කිරීමේ තත්ත්වය:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ආයුබෝවන් :param4, අපි ඔබගේ ඇණවුම සමාලෝචනය කර ඇත. මෙන්න ඔබේ අයිතම සඳහා තහවුරු කිරීමේ තත්ත්වය:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'වෙළෙන්දා විසින් පිළිගෙන හෝ ප්‍රතික්ෂේප කර ඇති ඔවුන්ගේ ඇණවුමේ අයිතම පිළිබඳව පාරිභෝගිකයාට දැනුම් දෙයි.',
    ],



];
