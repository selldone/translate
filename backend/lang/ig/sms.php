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
        'title' => 'Nabata ịkwụ ụgwọ',
        'sample' => "Your \$267 payment was settled successfully.<br>Order: SM-425<br>Thanks, <b>Your store name</b>.<br>Selldone",
        'body' => "E doziri ugwo :param2 gị nke ọma.\nOrder: :param1\nDaalụ, :param3.\nSelldone",
        'icon' => 'ịkwụ ụgwọ',
        'description' => 'Ziga ozi ka onye ahịa zụọ ahịa ka ị gwa gbasara ịkwụ ụgwọ nke ọma.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Nabata ịkwụ ụgwọ',
        'sample' => "New \$267 payment was settled successfully.<br>Order: SM-425<br>Thanks, <b>Your store name</b>.<br>Selldone",
        'body' => "E doziri ugwo :param2 ọhụrụ nke ọma.\nOrder: :param1\nDaalụ, :param3.\nSelldone",
        'icon' => 'ịkwụ ụgwọ',
        'description' => 'Ziga onye nwe ụlọ ahịa ozi ka ọ gwa ha maka ịkwụ ụgwọ na-aga nke ọma.',

    ],

    'vendor-new-order' => [
        'title' => 'Onye na-ere ahịa ọhụrụ',
        'sample' => "Ị nwetara usoro \$200 ọhụrụ.<br>Order: <b>SM-870</b> maka <b>Vendor aha</b>.<br>✅ Ngwaahịa A| SKU100001 |1x<br>✅ Ngwaahịa B| SKU100002 |1x",
        'body' => "Ị nwetara usoro :param2 ọhụrụ.\nOrder: :param1 maka :param3.\n:param4",
        'icon' => 'ụlọ ahịa',
        'description' => 'Ziga onye na-ere ahịa ozi ka ọ gwa ha maka usoro ọhụrụ.',
    ],








    'shop-login' => [
        'title' => 'Koodu nbanye',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "Koodu nbanye gị bụ: :param1\n:param2\nSelldone",
        'icon' => 'nbanye',
        'description' => 'Ziga onye ahịa koodu nbanye ka ọ banye n\'ụlọ ahịa ahụ.',

    ],

    'user-login' => [
        'title' => 'Ozi ịga nke ọma nbanye',
        'sample' => "Ezigbo <b>Aha</b>,<br>Ibanye na akaụntụ gị site na <b>iPhone 165.250.300.1</b> na <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Ezigbo :param1,\nỊ banyere na akaụntụ gị site :param2 na :param3.\nSelldone",
        'icon' => 'sistemu_security_update_dị mma',
        'description' => 'Zipụ ozi mgbe onye ahịa banyechara n\'ụlọ ahịa ahụ.',

    ],

    'avocado-order-submit' => [
        'title' => 'Ube oyibo ọhụrụ iwu ezigara onye zụrụ',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nEzigbo :param1,\nAnyị enwetala iwu gị ma anyị na-enyocha ya.\nOrder #: :param2\nSelldone",
        'icon' => 'eziokwu_leba anya',
        'description' => 'Ziga onye ahịa ozi mgbe ị tinyechara usoro Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Ube oyibo na-enweta usoro ọhụrụ ezigara onye na-ere ere',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "Ị nwetara iwu Avocado:\nỤlọ ahịa: :param1\nOnye zụrụ: :param2\nOrder: :param3\nSelldone",
        'icon' => 'ka_esi_reg',
        'description' => 'Ziga onye nwe ụlọ ahịa ozi ka ọ gwa ha maka ịnata usoro Avocado ọhụrụ.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Ube oyibo iji dị njikere ịkwụ ụgwọ',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nEkwuputala iwu gị ma nwee ike ịkwụ ụgwọ site na njikọ ndị a.\nOrder #: :param2\nNjikọ: :param1\nSelldone",
        'icon' => 'nnata',
        'description' => 'Ziga ozi na njikọ ịkwụ ụgwọ na onye ahịa mgbe onye na-ere ere setịpụrụ ọnụ ahịa wee kwado usoro Avocado ha.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Nye iwu njikere ibupu',
        'sample' => "Ndewo <b>Alex</b>, ozi ọma, ihe gị dị njikere ugbu a ibupu.<br>Order: <b>SM-123</b>",
        'body' => "Ndewo :param4, ozi ọma, ngwa gị adịla njikere ibupu.\nOrder: :param1",
        'icon' => 'mbupu obodo',
        'description' => 'Ziga onye ahịa ozi ka ọ gwa ha na ọ dịla njikere ibupu ngwa ha.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Nye iwu ka ọ dị njikere iburu',
        'sample' => "Ndewo Alex, ozi ọma, iwu gị adịla njikere ịnara.<br>Order: <b>SM-123</b>",
        'body' => "Ndewo :param4, ozi ọma, ihe ị chọrọ ugbu a adịla njikere iburu.\nOrder: :param1",
        'icon' => 'òkè_ebe',
        'description' => 'Ziga onye ahịa ozi ka ọ gwa ha na ọ dịla njikere iburu ihe ha nyere.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Onye na-ere ahịa dị njikere ibupu',
        'sample' => "Ndewo <b>Alex</b>, ozi ọma, ihe gị dị njikere ugbu a ibupu.<br>Order: <b>SM-123</b>",
        'body' => "Ndewo :param4, ozi ọma, ngwa gị adịla njikere ibupu.\nOrder: :param1",
        'icon' => 'mbupu obodo',
        'description' => 'Ziga onye ahịa ozi ka ọ gwa ha na ọ dịla njikere ibupu ngwa ha. Naanị n\'ọma ahịa na Ụdị Mbupu Direct na ụdị nnyefe abụghị Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Onye na-ere ahịa dị njikere iburu',
        'sample' => "Ndewo Alex, ozi ọma, iwu gị adịla njikere ịnara.<br>Order: <b>SM-123</b>",
        'body' => "Ndewo :param4, ozi ọma, ihe ị chọrọ ugbu a adịla njikere iburu.\nOrder: :param1",
        'icon' => 'òkè_ebe',
        'description' => 'Ziga onye ahịa ozi ka ọ gwa ha na ọ dịla njikere iburu ihe ha nyere. Dị nnọọ n\'ọma ahịa na Direct mbupu Mode na nnyefe ụdị bụ Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Nye iwu nkwenye ihe',
        'sample' => "Ndewo Alex, anyị enyochala usoro gị. Nke a bụ ọkwa nkwenye maka ihe gị:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Ndewo :param4, anyị enyochala usoro gị. Nke a bụ ọkwa nkwenye maka ihe gị:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'ọrụ_atụgharị_na',
        'description' => 'Na-eme ka onye ahịa mara maka ihe dị n\'usoro ha nke onye na-ere ere nabatara ma ọ bụ jụrụ.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Nkwenye ihe ndị na-ere ahịa',
        'sample' => "Ndewo Alex, anyị enyochala usoro gị. Nke a bụ ọkwa nkwenye maka ihe gị:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Ndewo :param4, anyị enyochala usoro gị. Nke a bụ ọkwa nkwenye maka ihe gị:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'ọrụ_atụgharị_na',
        'description' => 'Na-eme ka onye ahịa mara maka ihe dị n\'usoro ha nke onye na-ere ahịa nabatara ma ọ bụ jụrụ.',
    ],



];
