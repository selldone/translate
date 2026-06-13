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
        'title' => 'পেমেন্ট গ্রহণ করুন',
        'sample' => "আপনার \$267 পেমেন্ট সফলভাবে নিষ্পত্তি হয়েছে।<br>Order: SM-425<br>ধন্যবাদ, <b>আপনার দোকানের নাম</b>.<br>Selldone",
        'body' => "আপনার :param2 পেমেন্ট সফলভাবে নিষ্পত্তি করা হয়েছে।\nঅর্ডার: :param1\nধন্যবাদ, :param3।\nSelldone",
        'icon' => 'পেমেন্ট',
        'description' => 'সফল পেমেন্ট সম্পর্কে জানাতে শপ গ্রাহককে একটি বার্তা পাঠান।',

    ],
    'shop-order-payment-admin' => [
        'title' => 'পেমেন্ট গ্রহণ করুন',
        'sample' => "নতুন \$267 পেমেন্ট সফলভাবে নিষ্পত্তি হয়েছে।<br>Order: SM-425<br>Thanks, <b>আপনার দোকানের নাম</b>.<br>Selldone",
        'body' => "নতুন :param2 পেমেন্ট সফলভাবে নিষ্পত্তি হয়েছে৷\nঅর্ডার: :param1\nধন্যবাদ, :param3।\nSelldone",
        'icon' => 'পেমেন্ট',
        'description' => 'সফল পেমেন্ট সম্পর্কে তাদের জানাতে দোকানের মালিককে একটি বার্তা পাঠান।',

    ],

    'vendor-new-order' => [
        'title' => 'বিক্রেতা নতুন আদেশ',
        'sample' => "আপনি একটি নতুন \$200 অর্ডার পেয়েছেন। <br>Order: <b>Vendor name</b>.<br>✅ পণ্য A-এর জন্য <b>SM-870</b>| SKU100001 |1x<br>✅ পণ্য বি| SKU100002 |1x",
        'body' => "আপনি একটি নতুন :param2 অর্ডার পেয়েছেন৷\nঅর্ডার: :param3 এর জন্য :param1।\n:param4",
        'icon' => 'দোকানের সামনে',
        'description' => 'একটি নতুন অর্ডার সম্পর্কে তাদের জানাতে বিক্রেতাকে একটি বার্তা পাঠান।',
    ],








    'shop-login' => [
        'title' => 'লগইন যাচাইকরণ কোড',
        'sample' => "আপনার লগইন কোড হল: <b>123456</b><br><b>আপনার দোকানের নাম</b><br>Selldone",
        'body' => "আপনার লগইন কোড হল: :param1\n:param2\nSelldone",
        'icon' => 'লগইন',
        'description' => 'দোকানে লগ ইন করতে গ্রাহককে লগইন কোড পাঠান।',

    ],

    'user-login' => [
        'title' => 'লগইন সফল বার্তা',
        'sample' => "প্রিয় <b>Name</b>,<br>আপনি <b>iPhone 165.250.300.1</b> <b>5/8/2021 এ আপনার অ্যাকাউন্টে লগ ইন করেছেন 9:14AM</b>.<br>Selldone",
        'body' => "প্রিয় :param1,\nআপনি :param3 এ :param2 দ্বারা আপনার অ্যাকাউন্টে লগ ইন করেছেন৷\nSelldone",
        'icon' => 'সিস্টেম_নিরাপত্তা_আপডেট_ভাল',
        'description' => 'গ্রাহক দোকানে লগইন করার পরে একটি বার্তা পাঠান।',

    ],

    'avocado-order-submit' => [
        'title' => 'অ্যাভোকাডো নতুন অর্ডার জমা ক্রেতার কাছে পাঠান',
        'sample' => "<b>আপনার দোকানের নাম</b><br>প্রিয় <b>আপনার নাম</b>,<br> আমরা আপনার অর্ডার পেয়েছি এবং আমরা এটি পর্যালোচনা করছি।<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nপ্রিয় :param1,\nআমরা আপনার অর্ডার পেয়েছি এবং আমরা এটি পর্যালোচনা করছি।\nঅর্ডার #: :param2\nSelldone",
        'icon' => 'ফ্যাক্ট_চেক',
        'description' => 'অ্যাভোকাডো অর্ডার দেওয়ার পরে গ্রাহককে একটি বার্তা পাঠান।',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'অ্যাভোকাডো বিক্রেতার কাছে নতুন অর্ডার পাঠান',
        'sample' => "আপনি একটি অ্যাভোকাডো অর্ডার পেয়েছেন:<br>Store: <b>আপনার দোকানের নাম</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "আপনি একটি অ্যাভোকাডো অর্ডার পেয়েছেন:\nদোকান: :param1\nক্রেতা: :param2\nঅর্ডার: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'নতুন অ্যাভোকাডো অর্ডার পাওয়ার বিষয়ে তাদের জানাতে দোকানের মালিককে একটি বার্তা পাঠান।',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'অ্যাভোকাডো অর্ডার দিতে প্রস্তুত',
        'sample' => "<b>আপনার স্টোরের নাম</b><br>আপনার অর্ডার নিশ্চিত করা হয়েছে এবং নিম্নলিখিত লিঙ্কের মাধ্যমে অর্থ প্রদান করা যেতে পারে। <br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nআপনার অর্ডার নিশ্চিত করা হয়েছে এবং নিম্নলিখিত লিঙ্কের মাধ্যমে অর্থ প্রদান করা যেতে পারে।\nঅর্ডার #: :param2\nলিঙ্ক: :param1\nSelldone",
        'icon' => 'রসিদ',
        'description' => 'বিক্রেতা মূল্য নির্ধারণ করার পরে গ্রাহককে অর্থপ্রদানের লিঙ্ক সহ একটি বার্তা পাঠান এবং তাদের অ্যাভোকাডো অর্ডার নিশ্চিত করুন৷',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'জাহাজের জন্য প্রস্তুত অর্ডার',
        'sample' => "হাই <b>Alex</b>, ভালো খবর, আপনার অর্ডার এখন পাঠানোর জন্য প্রস্তুত। <br>Order: <b>SM-123</b>",
        'body' => "হাই :param4, সুসংবাদ, আপনার অর্ডার এখন পাঠানোর জন্য প্রস্তুত।\nঅর্ডার: :param1",
        'icon' => 'স্থানীয়_শিপিং',
        'description' => 'গ্রাহকদের একটি বার্তা পাঠান তাদের জানানোর জন্য যে তাদের অর্ডার পাঠানোর জন্য প্রস্তুত।',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'অর্ডার পিক আপ প্রস্তুত',
        'sample' => "হাই অ্যালেক্স, ভাল খবর, আপনার অর্ডার এখন তোলার জন্য প্রস্তুত। <br>Order: <b>SM-123</b>",
        'body' => "হাই :param4, ভাল খবর, আপনার অর্ডার এখন তোলার জন্য প্রস্তুত।\nঅর্ডার: :param1",
        'icon' => 'শেয়ার_অবস্থান',
        'description' => 'গ্রাহকদের একটি বার্তা পাঠান যাতে তাদের জানানো হয় যে তাদের অর্ডার নেওয়ার জন্য প্রস্তুত।',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'বিক্রেতা অর্ডার জাহাজের জন্য প্রস্তুত',
        'sample' => "হাই <b>Alex</b>, ভালো খবর, আপনার অর্ডার এখন পাঠানোর জন্য প্রস্তুত। <br>Order: <b>SM-123</b>",
        'body' => "হাই :param4, সুসংবাদ, আপনার অর্ডার এখন পাঠানোর জন্য প্রস্তুত।\nঅর্ডার: :param1",
        'icon' => 'স্থানীয়_শিপিং',
        'description' => 'গ্রাহকদের একটি বার্তা পাঠান তাদের জানানোর জন্য যে তাদের অর্ডার পাঠানোর জন্য প্রস্তুত। সরাসরি শিপিং মোড এবং ডেলিভারি টাইপ সহ মার্কেটপ্লেসে পিকআপ নয়।',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'বিক্রেতা অর্ডার পিক আপ প্রস্তুত',
        'sample' => "হাই অ্যালেক্স, ভাল খবর, আপনার অর্ডার এখন তোলার জন্য প্রস্তুত। <br>Order: <b>SM-123</b>",
        'body' => "হাই :param4, ভাল খবর, আপনার অর্ডার এখন তোলার জন্য প্রস্তুত।\nঅর্ডার: :param1",
        'icon' => 'শেয়ার_অবস্থান',
        'description' => 'গ্রাহকদের একটি বার্তা পাঠান যাতে তাদের জানানো হয় যে তাদের অর্ডার নেওয়ার জন্য প্রস্তুত। সরাসরি শিপিং মোড এবং ডেলিভারি টাইপ সহ মার্কেটপ্লেসে পিকআপ।',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'অর্ডার আইটেম নিশ্চিতকরণ',
        'sample' => "হ্যালো অ্যালেক্স, আমরা আপনার অর্ডার পর্যালোচনা করেছি। এখানে আপনার আইটেমগুলির জন্য নিশ্চিতকরণের অবস্থা: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "হ্যালো :param4, আমরা আপনার অর্ডার পর্যালোচনা করেছি। এখানে আপনার আইটেমগুলির জন্য নিশ্চিতকরণ স্থিতি রয়েছে:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'গ্রাহককে তাদের অর্ডারের আইটেমগুলি সম্পর্কে অবহিত করে যা বিক্রেতার দ্বারা গৃহীত বা প্রত্যাখ্যান করা হয়েছে।',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'বিক্রেতা অর্ডার আইটেম নিশ্চিতকরণ',
        'sample' => "হ্যালো অ্যালেক্স, আমরা আপনার অর্ডার পর্যালোচনা করেছি। এখানে আপনার আইটেমগুলির জন্য নিশ্চিতকরণের অবস্থা: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "হ্যালো :param4, আমরা আপনার অর্ডার পর্যালোচনা করেছি। এখানে আপনার আইটেমগুলির জন্য নিশ্চিতকরণ স্থিতি রয়েছে:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'গ্রাহককে তাদের অর্ডারের আইটেমগুলি সম্পর্কে অবহিত করে যা বিক্রেতা দ্বারা গৃহীত বা প্রত্যাখ্যান করা হয়েছে।',
    ],



];
