<?php 

 return [
     "shop-order-payment" => [
     "title" => "পেমেন্ট গ্রহণ করুন",
     "sample" => "আপনার 267$ পেমেন্ট সফলভাবে নিষ্পত্তি হয়েছে।<br> অর্ডার করুন: SM-425<br> ধন্যবাদ, <b>আপনার দোকানের নাম</b> .<br> সেলডন",
     "body" => "আপনার :param2 পেমেন্ট সফলভাবে নিষ্পত্তি হয়েছে। অর্ডার: :param1 ধন্যবাদ, :param3. সেলডন",
     "description" => "সফল পেমেন্ট সম্পর্কে জানাতে শপ গ্রাহককে একটি বার্তা পাঠান।",
],
     "shop-order-payment-admin" => [
     "title" => "পেমেন্ট গ্রহণ করুন",
     "sample" => "নতুন 267$ পেমেন্ট সফলভাবে নিষ্পত্তি হয়েছে৷<br> অর্ডার করুন: SM-425<br> ধন্যবাদ, <b>আপনার দোকানের নাম</b> .<br> সেলডন",
     "body" => "নতুন :param2 পেমেন্ট সফলভাবে নিষ্পত্তি হয়েছে৷ অর্ডার: :param1 ধন্যবাদ, :param3. সেলডন",
     "description" => "সফল পেমেন্ট সম্পর্কে তাদের জানাতে দোকানের মালিককে একটি বার্তা পাঠান।",
],
     "vendor-new-order" => [
     "title" => "বিক্রেতা নতুন আদেশ",
     "sample" => "আপনি একটি নতুন $200 অর্ডার পেয়েছেন।<br> অর্ডার: SM-870 <b>বিক্রেতার নাম</b> থেকে।",
     "body" => "আপনি একটি নতুন :param2 অর্ডার পেয়েছেন। অর্ডার: :param1 এর জন্য :param3।",
     "description" => "একটি নতুন অর্ডার সম্পর্কে তাদের জানাতে বিক্রেতাকে একটি বার্তা পাঠান।",
],
     "shop-login" => [
     "title" => "লগইন যাচাইকরণ কোড",
     "sample" => "আপনার লগইন কোড হল: <b>123456</b><br> <b>আপনার দোকানের নাম</b><br> সেলডন",
     "body" => "আপনার লগইন কোড হল: :param1 :param2 Selldone",
     "description" => "দোকানে লগ ইন করতে গ্রাহককে লগইন কোড পাঠান।",
],
     "user-login" => [
     "title" => "লগইন সফল বার্তা",
     "sample" => "প্রিয় <b>নাম</b> ,<br> আপনি <b>5/8/2021 9:14AM</b> এ <b>iPhone 165.250.300.1</b> এর মাধ্যমে আপনার অ্যাকাউন্টে লগ ইন করেছেন।<br> সেলডন",
     "body" => "প্রিয় :param1, আপনি :param3 এ :param2 দ্বারা আপনার অ্যাকাউন্টে লগ ইন করেছেন। সেলডন",
     "description" => "গ্রাহক দোকানে লগইন করার পরে একটি বার্তা পাঠান।",
],
     "avocado-order-submit" => [
     "title" => "অ্যাভোকাডো নতুন অর্ডার জমা ক্রেতার কাছে পাঠান",
     "sample" => "<b>আপনার দোকানের নাম</b><br> প্রিয় <b>তোমার নাম</b> ,<br> আমরা আপনার অর্ডার পেয়েছি এবং আমরা এটি পর্যালোচনা করছি।<br> অর্ডার #: <b>AVO-246</b><br> সেলডন",
     "body" => ":param3 প্রিয় :param1, আমরা আপনার অর্ডার পেয়েছি এবং আমরা এটি পর্যালোচনা করছি। অর্ডার #: :param2 Selldone",
     "description" => "অ্যাভোকাডো অর্ডার দেওয়ার পরে গ্রাহককে একটি বার্তা পাঠান।",
],
     "avocado-order-submit-seller" => [
     "title" => "অ্যাভোকাডো বিক্রেতার কাছে নতুন অর্ডার পাঠান",
     "sample" => "আপনি একটি অ্যাভোকাডো অর্ডার পেয়েছেন:<br> দোকান: <b>আপনার দোকানের নাম</b><br> ক্রেতাঃ <b>ক্রেতার নাম</b><br> অর্ডার: <b>AVO-246</b><br> সেলডন",
     "body" => "আপনি একটি অ্যাভোকাডো অর্ডার পেয়েছেন: দোকান: :param1 ক্রেতা: :param2 অর্ডার: :param3 Selldone",
     "description" => "নতুন অ্যাভোকাডো অর্ডার পাওয়ার বিষয়ে তাদের জানাতে দোকানের মালিককে একটি বার্তা পাঠান।",
],
     "avocado-ready-to-pay" => [
     "title" => "অ্যাভোকাডো অর্ডার দিতে প্রস্তুত",
     "sample" => "<b>আপনার দোকানের নাম</b><br> আপনার অর্ডার নিশ্চিত করা হয়েছে এবং নিম্নলিখিত লিঙ্কের মাধ্যমে অর্থ প্রদান করা যেতে পারে।<br> অর্ডার #: <b>AVO-246</b><br> লিঙ্ক: <b>https://your-domain/avocado</b><br> সেলডন",
     "body" => ":param3 আপনার অর্ডার নিশ্চিত করা হয়েছে এবং নিম্নলিখিত লিঙ্কের মাধ্যমে অর্থ প্রদান করা যেতে পারে। অর্ডার #: :param2 লিঙ্ক: :param1 Selldone",
     "description" => "বিক্রেতা মূল্য নির্ধারণ করার পরে গ্রাহককে অর্থপ্রদানের লিঙ্ক সহ একটি বার্তা পাঠান এবং তাদের অ্যাভোকাডো অর্ডার নিশ্চিত করুন৷",
],
];