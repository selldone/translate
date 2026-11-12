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
        'title' => 'ទទួលយកការទូទាត់',
        'sample' => "ការទូទាត់ \$267 របស់អ្នកត្រូវបានទូទាត់ដោយជោគជ័យ។<br>Order៖ SM-425<br>Thanks, <b> ឈ្មោះហាងរបស់អ្នក</b>.<br>Selldone",
        'body' => "ការទូទាត់ :param2 របស់អ្នកត្រូវបានទូទាត់ដោយជោគជ័យ។\nការបញ្ជាទិញ៖ :param1\nសូមអរគុណ :param3 ។\nSelldone",
        'icon' => 'ការទូទាត់',
        'description' => 'ផ្ញើសារទៅកាន់អតិថិជនហាងដើម្បីជូនដំណឹងអំពីការបង់ប្រាក់ជោគជ័យ។',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ទទួលយកការទូទាត់',
        'sample' => "ការទូទាត់ថ្មី \$267 ត្រូវបានទូទាត់ដោយជោគជ័យ។<br>Order៖ SM-425<br>Thanks, <b> ឈ្មោះហាងរបស់អ្នក</b>.<br>Selldone",
        'body' => "ការទូទាត់ :param2 ថ្មីត្រូវបានទូទាត់ដោយជោគជ័យ។\nការបញ្ជាទិញ៖ :param1\nសូមអរគុណ :param3 ។\nSelldone",
        'icon' => 'ការទូទាត់',
        'description' => 'ផ្ញើសារទៅកាន់ម្ចាស់ហាងដើម្បីជូនដំណឹងដល់ពួកគេអំពីការបង់ប្រាក់ជោគជ័យ។',

    ],

    'vendor-new-order' => [
        'title' => 'ការបញ្ជាទិញថ្មីរបស់អ្នកលក់',
        'sample' => "អ្នកបានទទួលការបញ្ជាទិញថ្មី 200 ដុល្លារ។<br>Order: <b>SM-870</b> សម្រាប់ <b> ឈ្មោះអ្នកលក់</b>.<br>✅ ផលិតផល A| SKU100001 |1x<br> ✅ ផលិតផល ខ| SKU100002 |1x",
        'body' => "អ្នកបានទទួលការបញ្ជាទិញ :param2 ថ្មី។\nការបញ្ជាទិញ៖ :param1 សម្រាប់ :param3 ។\n:param4",
        'icon' => 'មុខហាង',
        'description' => 'ផ្ញើសារទៅកាន់អ្នកលក់ ដើម្បីជូនដំណឹងដល់ពួកគេអំពីការបញ្ជាទិញថ្មី។',
    ],








    'shop-login' => [
        'title' => 'ចូល​កូដ​ផ្ទៀងផ្ទាត់',
        'sample' => "លេខកូដចូលរបស់អ្នកគឺ: <b>123456</b><br><b> ឈ្មោះហាងរបស់អ្នក</b><br>Selldone",
        'body' => "លេខកូដចូលរបស់អ្នកគឺ៖ :param1\n:param2\nSelldone",
        'icon' => 'ចូល',
        'description' => 'ផ្ញើលេខកូដចូលទៅអតិថិជនដើម្បីចូលហាង។',

    ],

    'user-login' => [
        'title' => 'ចូលសារជោគជ័យ',
        'sample' => "សូមគោរព <b>Name</b> <br> អ្នកបានចូលទៅក្នុងគណនីរបស់អ្នកដោយ <b>iPhone 165.250.300.1</b> នៅ <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "សូមគោរព :param1\nអ្នកបានចូលទៅក្នុងគណនីរបស់អ្នកដោយ :param2 នៅ :param3 ។\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'ផ្ញើសារបន្ទាប់ពីអតិថិជនចូលហាង។',

    ],

    'avocado-order-submit' => [
        'title' => 'ការបញ្ជាទិញថ្មីរបស់ផ្លែបឺរត្រូវបានបញ្ជូនទៅកាន់អ្នកទិញ',
        'sample' => "<b> ឈ្មោះហាងរបស់អ្នក</b><br>Dear <b> ឈ្មោះរបស់អ្នក</b>, <br> យើងបានទទួលការបញ្ជាទិញរបស់អ្នក ហើយយើងកំពុងពិនិត្យមើលវា។<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nសូមគោរព :param1\nយើងបានទទួលការបញ្ជាទិញរបស់អ្នក ហើយយើងកំពុងពិនិត្យមើលវា។\nការបញ្ជាទិញ #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'ផ្ញើសារទៅកាន់អតិថិជនបន្ទាប់ពីការបញ្ជាទិញផ្លែបឺរ។',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado ទទួលបានការបញ្ជាទិញថ្មីផ្ញើទៅអ្នកលក់',
        'sample' => "អ្នកបានទទួលការបញ្ជាទិញផ្លែបឺរ៖ <br>Store: <b> ឈ្មោះហាងរបស់អ្នក</b><br> អ្នកទិញ: <b> ឈ្មោះអ្នកទិញ</b><br>Order៖ <b>AVO-246</b><br>Selldone",
        'body' => "អ្នកបានទទួលការបញ្ជាទិញផ្លែបឺរ៖\nហាង៖ :param1\nអ្នកទិញ: :param2\nការបញ្ជាទិញ៖ :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'ផ្ញើសារទៅកាន់ម្ចាស់ហាងដើម្បីជូនដំណឹងដល់ពួកគេអំពីការទទួលបានការបញ្ជាទិញផ្លែបឺរថ្មី។',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'ការបញ្ជាទិញផ្លែបឺររួចរាល់ដើម្បីបង់ប្រាក់',
        'sample' => "<b> ឈ្មោះហាងរបស់អ្នក</b><br> ការបញ្ជាទិញរបស់អ្នកត្រូវបានបញ្ជាក់ ហើយអាចត្រូវបានបង់តាមរយៈតំណភ្ជាប់ខាងក្រោម។<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nការបញ្ជាទិញរបស់អ្នកត្រូវបានបញ្ជាក់ ហើយអាចបង់ប្រាក់តាមរយៈតំណខាងក្រោម។\nការបញ្ជាទិញ #: :param2\nតំណភ្ជាប់៖ :param1\nSelldone",
        'icon' => 'បង្កាន់ដៃ',
        'description' => 'ផ្ញើសារដែលមានតំណភ្ជាប់ការទូទាត់ទៅអតិថិជនបន្ទាប់ពីអ្នកលក់កំណត់ថ្លៃដើម និងបញ្ជាក់ការបញ្ជាទិញផ្លែបឺរ។',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'បញ្ជាទិញរួចរាល់ដើម្បីដឹកជញ្ជូន',
        'sample' => "សួស្តី <b>Alex</b> ដំណឹងល្អ ការបញ្ជាទិញរបស់អ្នកឥឡូវនេះរួចរាល់ដើម្បីដឹកជញ្ជូនហើយ។<br>Order: <b>SM-123</b>",
        'body' => "សួស្តី :param4 ដំណឹងល្អ ការបញ្ជាទិញរបស់អ្នកឥឡូវនេះរួចរាល់ដើម្បីដឹកជញ្ជូនហើយ។\nការបញ្ជាទិញ៖ :param1",
        'icon' => 'local_shipping',
        'description' => 'ផ្ញើសារទៅកាន់អតិថិជនដើម្បីជូនដំណឹងដល់ពួកគេថាការបញ្ជាទិញរបស់ពួកគេរួចរាល់ដើម្បីដឹកជញ្ជូន។',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ត្រៀមទទួលកុម្ម៉ង់',
        'sample' => "សួស្តី Alex ដំណឹងល្អ ការបញ្ជាទិញរបស់អ្នកឥឡូវនេះរួចរាល់ហើយ ដើម្បីទទួលបានការកម្មង់។<br>Order: <b>SM-123</b>",
        'body' => "ជំរាបសួរ :param4 ដំណឹងល្អ ការបញ្ជាទិញរបស់អ្នកឥឡូវនេះរួចរាល់ហើយក្នុងការទទួលយក។\nការបញ្ជាទិញ៖ :param1",
        'icon' => 'ទីតាំងចែករំលែក',
        'description' => 'ផ្ញើសារទៅកាន់អតិថិជន ដើម្បីជូនដំណឹងដល់ពួកគេថា ការបញ្ជាទិញរបស់ពួកគេរួចរាល់ ក្នុងការទទួលយក។',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'អាជីវករបញ្ជាទិញរួចរាល់',
        'sample' => "សួស្តី <b>Alex</b> ដំណឹងល្អ ការបញ្ជាទិញរបស់អ្នកឥឡូវនេះរួចរាល់ដើម្បីដឹកជញ្ជូនហើយ។<br>Order: <b>SM-123</b>",
        'body' => "សួស្តី :param4 ដំណឹងល្អ ការបញ្ជាទិញរបស់អ្នកឥឡូវនេះរួចរាល់ដើម្បីដឹកជញ្ជូនហើយ។\nការបញ្ជាទិញ៖ :param1",
        'icon' => 'local_shipping',
        'description' => 'ផ្ញើសារទៅកាន់អតិថិជនដើម្បីជូនដំណឹងដល់ពួកគេថាការបញ្ជាទិញរបស់ពួកគេរួចរាល់ដើម្បីដឹកជញ្ជូន។ គ្រាន់តែនៅក្នុងទីផ្សារជាមួយនឹងរបៀបដឹកជញ្ជូនដោយផ្ទាល់ ហើយប្រភេទការដឹកជញ្ជូនគឺមិនមែនជា Pickup ទេ។',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'អាជីវករបញ្ជាទិញរួចរាល់',
        'sample' => "សួស្តី Alex ដំណឹងល្អ ការបញ្ជាទិញរបស់អ្នកឥឡូវនេះរួចរាល់ហើយ ដើម្បីទទួលបានការកម្មង់។<br>Order: <b>SM-123</b>",
        'body' => "ជំរាបសួរ :param4 ដំណឹងល្អ ការបញ្ជាទិញរបស់អ្នកឥឡូវនេះរួចរាល់ហើយក្នុងការទទួលយក។\nការបញ្ជាទិញ៖ :param1",
        'icon' => 'ទីតាំងចែករំលែក',
        'description' => 'ផ្ញើសារទៅកាន់អតិថិជន ដើម្បីជូនដំណឹងដល់ពួកគេថា ការបញ្ជាទិញរបស់ពួកគេរួចរាល់ ក្នុងការទទួលយក។ គ្រាន់តែនៅក្នុងទីផ្សារជាមួយនឹងរបៀបដឹកជញ្ជូនផ្ទាល់ ហើយប្រភេទការដឹកជញ្ជូនគឺ Pickup ។',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ការបញ្ជាក់ធាតុបញ្ជាទិញ',
        'sample' => "ជំរាបសួរ Alex យើងបានពិនិត្យមើលការបញ្ជាទិញរបស់អ្នក។ នេះគឺជាស្ថានភាពបញ្ជាក់សម្រាប់ទំនិញរបស់អ្នក៖ <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ជំរាបសួរ :param4 យើងបានពិនិត្យមើលការបញ្ជាទិញរបស់អ្នក។ នេះជាស្ថានភាពបញ្ជាក់សម្រាប់ទំនិញរបស់អ្នក៖"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ជូនដំណឹងដល់អតិថិជនអំពីទំនិញនៅក្នុងការបញ្ជាទិញរបស់ពួកគេដែលត្រូវបានទទួលយក ឬបដិសេធដោយអ្នកលក់។',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'ការបញ្ជាក់​ទំនិញ​បញ្ជាទិញ​របស់​អ្នក​លក់',
        'sample' => "ជំរាបសួរ Alex យើងបានពិនិត្យមើលការបញ្ជាទិញរបស់អ្នក។ នេះគឺជាស្ថានភាពបញ្ជាក់សម្រាប់ទំនិញរបស់អ្នក៖ <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ជំរាបសួរ :param4 យើងបានពិនិត្យមើលការបញ្ជាទិញរបស់អ្នក។ នេះជាស្ថានភាពបញ្ជាក់សម្រាប់ទំនិញរបស់អ្នក៖"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ជូនដំណឹងដល់អតិថិជនអំពីទំនិញនៅក្នុងការបញ្ជាទិញរបស់ពួកគេដែលត្រូវបានទទួលយក ឬបដិសេធដោយអ្នកលក់។',
    ],



];
