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
        'title' => 'ଦେୟ ଗ୍ରହଣ କରନ୍ତୁ |',
        'sample' => "ତୁମର \$ 267 ଦେୟ ସଫଳତାର ସହିତ ସମାଧାନ ହେଲା | <br> ଅର୍ଡର: SM-425<br> ଧନ୍ୟବାଦ, <b> ତୁମର ଷ୍ଟୋର୍ ନାମ </b>.<br>Selldone",
        'body' => "ତୁମର :param2 ଦେୟ ସଫଳତାର ସହିତ ସମାଧାନ ହେଲା |\nକ୍ରମ: :param1 |\nଧନ୍ୟବାଦ, :param3 |\nSelldone |",
        'icon' => 'ଦେୟ',
        'description' => 'ସଫଳ ଦେୟ ବିଷୟରେ ସୂଚନା ଦେବା ପାଇଁ ଗ୍ରାହକଙ୍କୁ ଦୋକାନ କରିବାକୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ |',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ଦେୟ ଗ୍ରହଣ କରନ୍ତୁ |',
        'sample' => "ନୂତନ \$ 267 ଦେୟ ସଫଳତାର ସହିତ ସମାଧାନ ହେଲା | <br> ଅର୍ଡର: SM-425<br> ଧନ୍ୟବାଦ, <b> ତୁମର ଷ୍ଟୋର୍‌ର ନାମ </b>",
        'body' => "ନୂତନ :param2 ଦେୟ ସଫଳତାର ସହିତ ସମାଧାନ ହେଲା |\nକ୍ରମ: :param1 |\nଧନ୍ୟବାଦ, :param3 |\nSelldone |",
        'icon' => 'ଦେୟ',
        'description' => 'ସଫଳ ଦେୟ ବିଷୟରେ ସେମାନଙ୍କୁ ଜଣାଇବାକୁ ଦୋକାନ ମାଲିକଙ୍କୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ |',

    ],

    'vendor-new-order' => [
        'title' => 'ବିକ୍ରେତା ନୂତନ ଅର୍ଡର |',
        'sample' => "ତୁମେ ଏକ ନୂତନ \$ 200 ଅର୍ଡର ପାଇଛ || SKU100001 |1x<br>✅ ଉତ୍ପାଦ ବି| SKU100002 |1x",
        'body' => "ଆପଣ ଏକ ନୂତନ :param2 କ୍ରମ ଗ୍ରହଣ କରିଛନ୍ତି |\nକ୍ରମ: :param3 ପାଇଁ :param1 |\n:param4 |",
        'icon' => 'ଷ୍ଟୋରଫ୍ରଣ୍ଟ |',
        'description' => 'ଏକ ନୂତନ କ୍ରମ ବିଷୟରେ ସେମାନଙ୍କୁ ଜଣାଇବାକୁ ବିକ୍ରେତାଙ୍କୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ |',
    ],








    'shop-login' => [
        'title' => 'ଲଗଇନ୍ ଯାଞ୍ଚ କୋଡ୍ |',
        'sample' => "ତୁମର ଲଗଇନ୍ କୋଡ୍ ହେଉଛି: <b>123456</b><br><b> ତୁମର ଷ୍ଟୋର ନାମ </b><br>Selldone",
        'body' => "ଆପଣଙ୍କର ଲଗଇନ୍ କୋଡ୍ ହେଉଛି: :param1 |\n:param2 |\nSelldone |",
        'icon' => 'ଲଗଇନ୍',
        'description' => 'ଦୋକାନକୁ ଲଗ୍ ଇନ୍ କରିବାକୁ ଗ୍ରାହକଙ୍କୁ ଲଗଇନ୍ କୋଡ୍ ପଠାନ୍ତୁ |',

    ],

    'user-login' => [
        'title' => 'ଲଗଇନ୍ ସଫଳତା ବାର୍ତ୍ତା |',
        'sample' => "ପ୍ରିୟ <b>Name</b>, <br> ତୁମେ <b>iPhone 165.250.300.1</b> ଦ୍ୱାରା <b>5 / 8/2021 9:14 AM</b>.<br>Selldone ରେ ତୁମର ଆକାଉଣ୍ଟକୁ ଲଗ୍ ଇନ୍ କରିଛ |",
        'body' => "ପ୍ରିୟ :param1,\n:param3 ରେ :param2 ଦ୍ୱାରା ତୁମେ ତୁମର ଆକାଉଣ୍ଟକୁ ଲଗ୍ ଇନ୍ କରିଛ |\nSelldone |",
        'icon' => 'system_security_update_good',
        'description' => 'ଗ୍ରାହକ ଦୋକାନକୁ ଲଗଇନ୍ କରିବା ପରେ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ |',

    ],

    'avocado-order-submit' => [
        'title' => 'ଆଭୋକାଡୋ ନୂତନ ଅର୍ଡର କ୍ରେତାଙ୍କୁ ପଠାଇଲା |',
        'sample' => "<b> ତୁମର ଷ୍ଟୋର ନାମ </b><br> ପ୍ରିୟ <b> ତୁମର ନାମ </b>, <br> ଆମେ ତୁମର ଅର୍ଡର ଗ୍ରହଣ କରିଛୁ ଏବଂ ଆମେ ଏହାକୁ ସମୀକ୍ଷା କରୁଛୁ | <br>Order #: <b>AVO-246</b><br>QQ",
        'body' => ":param3 |\nପ୍ରିୟ :param1,\nଆମେ ତୁମର ଅର୍ଡର ଗ୍ରହଣ କରିଛୁ ଏବଂ ଆମେ ଏହାକୁ ସମୀକ୍ଷା କରୁଛୁ |\nକ୍ରମ #: :param2 |\nSelldone |",
        'icon' => 'fact_check',
        'description' => 'ଆଭୋକାଡୋ ଅର୍ଡର ଦେବା ପରେ ଗ୍ରାହକଙ୍କୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ |',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'ଆଭୋକାଡୋ ବିକ୍ରେତାଙ୍କୁ ପଠାଇବା ପାଇଁ ନୂତନ ଅର୍ଡର ଗ୍ରହଣ କରେ |',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "ଆପଣ ଏକ ଆଭୋକାଡୋ ଅର୍ଡର ଗ୍ରହଣ କରିଛନ୍ତି:\nଷ୍ଟୋର୍: :param1 |\nକ୍ରେତା: :param2 |\nକ୍ରମ: :param3 |\nSelldone |",
        'icon' => 'how_to_reg',
        'description' => 'ନୂତନ ଆଭୋକାଡୋ ଅର୍ଡର ପାଇବା ବିଷୟରେ ସେମାନଙ୍କୁ ଜଣାଇବାକୁ ଦୋକାନ ମାଲିକଙ୍କୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ |',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'ଆଭୋକାଡୋ ଅର୍ଡର ଦେବାକୁ ପ୍ରସ୍ତୁତ |',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3 |\nଆପଣଙ୍କର ଅର୍ଡର ନିଶ୍ଚିତ ହୋଇଛି ଏବଂ ନିମ୍ନ ଲିଙ୍କ୍ ମାଧ୍ୟମରେ ଦେୟ ପ୍ରଦାନ କରାଯାଇପାରିବ |\nକ୍ରମ #: :param2 |\nଲିଙ୍କ୍: :param1 |\nSelldone |",
        'icon' => 'ରସିଦ',
        'description' => 'ବିକ୍ରେତା ମୂଲ୍ୟ ନିର୍ଦ୍ଧାରଣ କରିବା ପରେ ଗ୍ରାହକଙ୍କୁ ଦେୟ ଲିଙ୍କ ସହିତ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ ଏବଂ ସେମାନଙ୍କର ଆଭୋକାଡୋ କ୍ରମକୁ ନିଶ୍ଚିତ କରନ୍ତୁ |',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ପଠାଇବାକୁ ପ୍ରସ୍ତୁତ ଅର୍ଡର |',
        'sample' => "ହାଏ <b>Alex</b>, ଭଲ ଖବର, ତୁମର ଅର୍ଡର ବର୍ତ୍ତମାନ ପଠାଇବାକୁ ପ୍ରସ୍ତୁତ | <br> ଅର୍ଡର: <b>SM-123</b>",
        'body' => "ହାଏ :param4, ଭଲ ଖବର, ତୁମର ଅର୍ଡର ବର୍ତ୍ତମାନ ପଠାଇବାକୁ ପ୍ରସ୍ତୁତ |\nକ୍ରମ: :param1 |",
        'icon' => 'ଲୋକାଲ୍_ସିପିଙ୍ଗ୍ |',
        'description' => 'ଗ୍ରାହକଙ୍କୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ ଯେ ସେମାନଙ୍କୁ ପଠାଇବାକୁ ପ୍ରସ୍ତୁତ ଅଛି |',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ଉଠାଇବାକୁ ପ୍ରସ୍ତୁତ ଅର୍ଡର |',
        'sample' => "ହାଏ ଆଲେକ୍ସ, ଭଲ ଖବର, ତୁମର ଅର୍ଡର ବର୍ତ୍ତମାନ ଉଠାଇବାକୁ ପ୍ରସ୍ତୁତ | <br>Order: <b>SM-123</b>",
        'body' => "ହାଏ :param4, ଭଲ ଖବର, ତୁମର ଅର୍ଡର ବର୍ତ୍ତମାନ ଉଠାଇବାକୁ ପ୍ରସ୍ତୁତ |\nକ୍ରମ: :param1 |",
        'icon' => 'share_location',
        'description' => 'ଗ୍ରାହକଙ୍କୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ ଯେ ସେମାନଙ୍କ ଅର୍ଡର ଉଠାଇବାକୁ ପ୍ରସ୍ତୁତ |',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'ବିକ୍ରେତା ଅର୍ଡର ପଠାଇବାକୁ ପ୍ରସ୍ତୁତ |',
        'sample' => "ହାଏ <b>Alex</b>, ଭଲ ଖବର, ତୁମର ଅର୍ଡର ବର୍ତ୍ତମାନ ପଠାଇବାକୁ ପ୍ରସ୍ତୁତ | <br> ଅର୍ଡର: <b>SM-123</b>",
        'body' => "ହାଏ :param4, ଭଲ ଖବର, ତୁମର ଅର୍ଡର ବର୍ତ୍ତମାନ ପଠାଇବାକୁ ପ୍ରସ୍ତୁତ |\nକ୍ରମ: :param1 |",
        'icon' => 'ଲୋକାଲ୍_ସିପିଙ୍ଗ୍ |',
        'description' => 'ଗ୍ରାହକଙ୍କୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ ଯେ ସେମାନଙ୍କୁ ପଠାଇବାକୁ ପ୍ରସ୍ତୁତ ଅଛି | ସିଧାସଳଖ ସିପିଂ ମୋଡ୍ ଏବଂ ମାର୍କେଟପ୍ଲେସରେ କେବଳ ପିକଅପ୍ ନୁହେଁ |',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'ବିକ୍ରେତା ଅର୍ଡର ନେବାକୁ ପ୍ରସ୍ତୁତ |',
        'sample' => "ହାଏ ଆଲେକ୍ସ, ଭଲ ଖବର, ତୁମର ଅର୍ଡର ବର୍ତ୍ତମାନ ଉଠାଇବାକୁ ପ୍ରସ୍ତୁତ | <br>Order: <b>SM-123</b>",
        'body' => "ହାଏ :param4, ଭଲ ଖବର, ତୁମର ଅର୍ଡର ବର୍ତ୍ତମାନ ଉଠାଇବାକୁ ପ୍ରସ୍ତୁତ |\nକ୍ରମ: :param1 |",
        'icon' => 'share_location',
        'description' => 'ଗ୍ରାହକଙ୍କୁ ଏକ ବାର୍ତ୍ତା ପଠାନ୍ତୁ ଯେ ସେମାନଙ୍କ ଅର୍ଡର ଉଠାଇବାକୁ ପ୍ରସ୍ତୁତ | ସିଧାସଳଖ ସିପିଂ ମୋଡ୍ ଏବଂ ବିତରଣ ପ୍ରକାର ସହିତ ମାର୍କେଟପ୍ଲେସ୍ ହେଉଛି ପିକଅପ୍ |',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ଆଇଟମ୍ ନିଶ୍ଚିତକରଣ ଅର୍ଡର କରନ୍ତୁ |',
        'sample' => "ନମସ୍କାର ଆଲେକ୍ସ, ଆମେ ତୁମର ଅର୍ଡର ସମୀକ୍ଷା କରିଛୁ | ଆପଣଙ୍କ ଆଇଟମ୍ ପାଇଁ ଏଠାରେ ନିଶ୍ଚିତକରଣ ସ୍ଥିତି: <br> |"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ନମସ୍କାର :param4, ଆମେ ଆପଣଙ୍କର କ୍ରମାଙ୍କ ସମୀକ୍ଷା କରିଛୁ | ଆପଣଙ୍କ ଆଇଟମ୍ ପାଇଁ ନିଶ୍ଚିତକରଣ ସ୍ଥିତି ଏଠାରେ ଅଛି:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ବିକ୍ରେତାଙ୍କ ଦ୍ accepted ାରା ଗ୍ରହଣ କରାଯାଇଥିବା କିମ୍ବା ପ୍ରତ୍ୟାଖ୍ୟାନ ହୋଇଥିବା ଆଇଟମଗୁଡିକ ବିଷୟରେ ଗ୍ରାହକଙ୍କୁ ସୂଚିତ କରେ |',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'ବିକ୍ରେତା ଅର୍ଡର ଆଇଟମ୍ ନିଶ୍ଚିତକରଣ |',
        'sample' => "ନମସ୍କାର ଆଲେକ୍ସ, ଆମେ ତୁମର ଅର୍ଡର ସମୀକ୍ଷା କରିଛୁ | ଆପଣଙ୍କ ଆଇଟମ୍ ପାଇଁ ଏଠାରେ ନିଶ୍ଚିତକରଣ ସ୍ଥିତି: <br> |"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ନମସ୍କାର :param4, ଆମେ ଆପଣଙ୍କର କ୍ରମାଙ୍କ ସମୀକ୍ଷା କରିଛୁ | ଆପଣଙ୍କ ଆଇଟମ୍ ପାଇଁ ନିଶ୍ଚିତକରଣ ସ୍ଥିତି ଏଠାରେ ଅଛି:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ବିକ୍ରେତାଙ୍କ ଦ୍ accepted ାରା ଗ୍ରହଣ କରାଯାଇଥିବା କିମ୍ବା ପ୍ରତ୍ୟାଖ୍ୟାନ ହୋଇଥିବା ଆଇଟମଗୁଡିକ ବିଷୟରେ ଗ୍ରାହକଙ୍କୁ ସୂଚିତ କରେ |',
    ],



];
