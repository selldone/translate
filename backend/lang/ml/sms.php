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
        'title' => 'പേയ്മെന്റ് സ്വീകരിക്കുക',
        'sample' => "നിങ്ങളുടെ \$267 പേയ്‌മെൻ്റ് വിജയകരമായി തീർപ്പാക്കി.<br>ഓർഡർ: SM-425<br>നന്ദി, <b>നിങ്ങളുടെ സ്റ്റോറിൻ്റെ പേര്</b>.<br>Selldone",
        'body' => "നിങ്ങളുടെ :param2 പേയ്‌മെൻ്റ് വിജയകരമായി തീർത്തു.\nഓർഡർ: :param1\nനന്ദി, :param3.\nSelldone",
        'icon' => 'പേയ്മെൻ്റ്',
        'description' => 'വിജയകരമായ പേയ്‌മെൻ്റിനെക്കുറിച്ച് അറിയിക്കാൻ ഷോപ്പ് ഉപഭോക്താവിന് ഒരു സന്ദേശം അയയ്‌ക്കുക.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'പേയ്മെന്റ് സ്വീകരിക്കുക',
        'sample' => "പുതിയ \$267 പേയ്‌മെൻ്റ് വിജയകരമായി തീർപ്പാക്കി.<br>ഓർഡർ: SM-425<br>നന്ദി, <b>നിങ്ങളുടെ സ്റ്റോറിൻ്റെ പേര്</b>.<br>Selldone",
        'body' => "പുതിയ :param2 പേയ്‌മെൻ്റ് വിജയകരമായി തീർത്തു.\nഓർഡർ: :param1\nനന്ദി, :param3.\nSelldone",
        'icon' => 'പേയ്മെൻ്റ്',
        'description' => 'വിജയകരമായ പേയ്‌മെൻ്റിനെക്കുറിച്ച് അറിയിക്കാൻ കട ഉടമയ്ക്ക് ഒരു സന്ദേശം അയയ്‌ക്കുക.',

    ],

    'vendor-new-order' => [
        'title' => 'വെണ്ടർ പുതിയ ഓർഡർ',
        'sample' => "നിങ്ങൾക്ക് പുതിയ \$200 ഓർഡർ ലഭിച്ചു.| SKU100001 |1x<br>✅ ഉൽപ്പന്നം ബി| SKU100002 |1x",
        'body' => "നിങ്ങൾക്ക് ഒരു പുതിയ :param2 ഓർഡർ ലഭിച്ചു.\nഓർഡർ: :param3-നുള്ള :param1.\n:param4",
        'icon' => 'കടയുടെ മുൻഭാഗം',
        'description' => 'ഒരു പുതിയ ഓർഡറിനെ കുറിച്ച് അറിയിക്കാൻ വെണ്ടർക്ക് ഒരു സന്ദേശം അയയ്‌ക്കുക.',
    ],








    'shop-login' => [
        'title' => 'ലോഗിൻ വെരിഫിക്കേഷൻ കോഡ്',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "നിങ്ങളുടെ ലോഗിൻ കോഡ്: :param1\n:param2\nSelldone",
        'icon' => 'ലോഗിൻ ചെയ്യുക',
        'description' => 'ഷോപ്പിൽ ലോഗിൻ ചെയ്യാൻ ഉപഭോക്താവിന് ലോഗിൻ കോഡ് അയയ്ക്കുക.',

    ],

    'user-login' => [
        'title' => 'ലോഗിൻ വിജയ സന്ദേശം',
        'sample' => "പ്രിയ <b>Name</b>,<br> <b>5/8/2021-ൽ <b>iPhone 165.250.300.1</b> മുഖേന നിങ്ങൾ നിങ്ങളുടെ അക്കൗണ്ടിലേക്ക് ലോഗിൻ ചെയ്‌തു 9:14AM</b>.<br>Selldone",
        'body' => "പ്രിയ :param1,\n:param3-ൽ :param2 വഴി നിങ്ങൾ നിങ്ങളുടെ അക്കൗണ്ടിലേക്ക് ലോഗിൻ ചെയ്‌തു.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'ഉപഭോക്താവ് കടയിലേക്ക് ലോഗിൻ ചെയ്തതിന് ശേഷം ഒരു സന്ദേശം അയയ്ക്കുക.',

    ],

    'avocado-order-submit' => [
        'title' => 'അവോക്കാഡോ പുതിയ ഓർഡർ വാങ്ങുന്നയാൾക്ക് അയച്ചുകൊടുത്തു',
        'sample' => "<b>നിങ്ങളുടെ സ്റ്റോറിൻ്റെ പേര്</b><br>Dear <b>നിങ്ങളുടെ പേര്</b>,<br> നിങ്ങളുടെ ഓർഡർ ഞങ്ങൾക്ക് ലഭിച്ചു, ഞങ്ങൾ അത് അവലോകനം ചെയ്യുകയാണ്.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nപ്രിയ :param1,\nഞങ്ങൾക്ക് നിങ്ങളുടെ ഓർഡർ ലഭിച്ചു, ഞങ്ങൾ അത് അവലോകനം ചെയ്യുകയാണ്.\nഓർഡർ #: :param2\nSelldone",
        'icon' => 'വസ്തുത_പരിശോധന',
        'description' => 'അവോക്കാഡോ ഓർഡർ നൽകിയതിന് ശേഷം ഉപഭോക്താവിന് ഒരു സന്ദേശം അയയ്‌ക്കുക.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'അവോക്കാഡോ വിൽപ്പനക്കാരന് അയച്ച പുതിയ ഓർഡർ സ്വീകരിക്കുന്നു',
        'sample' => "നിങ്ങൾക്ക് ഒരു അവോക്കാഡോ ഓർഡർ ലഭിച്ചു:<br>Store: <b>നിങ്ങളുടെ സ്റ്റോറിൻ്റെ പേര്</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "നിങ്ങൾക്ക് ഒരു അവോക്കാഡോ ഓർഡർ ലഭിച്ചു:\nസ്റ്റോർ: :param1\nവാങ്ങുന്നയാൾ: :param2\nഓർഡർ: :param3\nSelldone",
        'icon' => 'എങ്ങനെ_റെജി',
        'description' => 'പുതിയ അവോക്കാഡോ ഓർഡർ ലഭിക്കുന്നതിനെക്കുറിച്ച് അറിയിക്കാൻ കട ഉടമയ്ക്ക് ഒരു സന്ദേശം അയയ്‌ക്കുക.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'അവോക്കാഡോ ഓർഡർ പണമടയ്ക്കാൻ തയ്യാറാണ്',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nനിങ്ങളുടെ ഓർഡർ സ്ഥിരീകരിച്ചു, ഇനിപ്പറയുന്ന ലിങ്ക് വഴി പണമടയ്ക്കാം.\nഓർഡർ #: :param2\nലിങ്ക്: :param1\nSelldone",
        'icon' => 'രസീത്',
        'description' => 'വിൽപ്പനക്കാരൻ വില നിശ്ചയിച്ചതിന് ശേഷം ഉപഭോക്താവിന് പേയ്‌മെൻ്റ് ലിങ്ക് സഹിതം ഒരു സന്ദേശം അയയ്‌ക്കുകയും അവരുടെ അവോക്കാഡോ ഓർഡർ സ്ഥിരീകരിക്കുകയും ചെയ്യുക.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ഓർഡർ ഷിപ്പ് ചെയ്യാൻ തയ്യാറാണ്',
        'sample' => "ഹായ് <b>Alex</b>, സന്തോഷവാർത്ത, നിങ്ങളുടെ ഓർഡർ ഇപ്പോൾ ഷിപ്പ് ചെയ്യാൻ തയ്യാറാണ്.<br>Order: <b>SM-123</b>",
        'body' => "ഹായ് :param4, നല്ല വാർത്ത, നിങ്ങളുടെ ഓർഡർ ഇപ്പോൾ ഷിപ്പ് ചെയ്യാൻ തയ്യാറാണ്.\nഓർഡർ: :param1",
        'icon' => 'പ്രാദേശിക_ഷിപ്പിംഗ്',
        'description' => 'അവരുടെ ഓർഡർ ഷിപ്പ് ചെയ്യാൻ തയ്യാറാണെന്ന് അറിയിക്കാൻ ഉപഭോക്താവിന് ഒരു സന്ദേശം അയയ്‌ക്കുക.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ഓർഡർ പിക്കപ്പിന് തയ്യാറാണ്',
        'sample' => "ഹായ് അലക്സ്, നല്ല വാർത്ത, നിങ്ങളുടെ ഓർഡർ ഇപ്പോൾ എടുക്കാൻ തയ്യാറാണ്.<br>Order: <b>SM-123</b>",
        'body' => "ഹായ് :param4, നല്ല വാർത്ത, നിങ്ങളുടെ ഓർഡർ ഇപ്പോൾ എടുക്കാൻ തയ്യാറാണ്.\nഓർഡർ: :param1",
        'icon' => 'പങ്കിടൽ_ലൊക്കേഷൻ',
        'description' => 'അവരുടെ ഓർഡർ എടുക്കാൻ തയ്യാറാണെന്ന് അറിയിക്കാൻ ഉപഭോക്താവിന് ഒരു സന്ദേശം അയയ്‌ക്കുക.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'വെണ്ടർ ഓർഡർ ഷിപ്പ് ചെയ്യാൻ തയ്യാറാണ്',
        'sample' => "ഹായ് <b>Alex</b>, സന്തോഷവാർത്ത, നിങ്ങളുടെ ഓർഡർ ഇപ്പോൾ ഷിപ്പ് ചെയ്യാൻ തയ്യാറാണ്.<br>Order: <b>SM-123</b>",
        'body' => "ഹായ് :param4, നല്ല വാർത്ത, നിങ്ങളുടെ ഓർഡർ ഇപ്പോൾ ഷിപ്പ് ചെയ്യാൻ തയ്യാറാണ്.\nഓർഡർ: :param1",
        'icon' => 'പ്രാദേശിക_ഷിപ്പിംഗ്',
        'description' => 'അവരുടെ ഓർഡർ ഷിപ്പ് ചെയ്യാൻ തയ്യാറാണെന്ന് അറിയിക്കാൻ ഉപഭോക്താവിന് ഒരു സന്ദേശം അയയ്‌ക്കുക. ഡയറക്ട് ഷിപ്പിംഗ് മോഡും ഡെലിവറി തരവും ഉള്ള മാർക്കറ്റിൽ പിക്കപ്പ് അല്ല.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'വെണ്ടർ ഓർഡർ പിക്കപ്പിന് തയ്യാറാണ്',
        'sample' => "ഹായ് അലക്സ്, നല്ല വാർത്ത, നിങ്ങളുടെ ഓർഡർ ഇപ്പോൾ എടുക്കാൻ തയ്യാറാണ്.<br>Order: <b>SM-123</b>",
        'body' => "ഹായ് :param4, നല്ല വാർത്ത, നിങ്ങളുടെ ഓർഡർ ഇപ്പോൾ എടുക്കാൻ തയ്യാറാണ്.\nഓർഡർ: :param1",
        'icon' => 'പങ്കിടൽ_ലൊക്കേഷൻ',
        'description' => 'അവരുടെ ഓർഡർ എടുക്കാൻ തയ്യാറാണെന്ന് അറിയിക്കാൻ ഉപഭോക്താവിന് ഒരു സന്ദേശം അയയ്‌ക്കുക. നേരിട്ടുള്ള ഷിപ്പിംഗ് മോഡും ഡെലിവറി തരവും ഉള്ള മാർക്കറ്റിൽ പിക്കപ്പ് ആണ്.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ഓർഡർ ഇനങ്ങൾ സ്ഥിരീകരണം',
        'sample' => "ഹലോ അലക്സ്, ഞങ്ങൾ നിങ്ങളുടെ ഓർഡർ അവലോകനം ചെയ്തു. നിങ്ങളുടെ ഇനങ്ങളുടെ സ്ഥിരീകരണ നില ഇതാ:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ഹലോ :param4, ഞങ്ങൾ നിങ്ങളുടെ ഓർഡർ അവലോകനം ചെയ്തു. നിങ്ങളുടെ ഇനങ്ങളുടെ സ്ഥിരീകരണ നില ഇതാ:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'വിൽപ്പനക്കാരൻ സ്വീകരിച്ചതോ നിരസിച്ചതോ ആയ ഓർഡറിലെ ഇനങ്ങളെക്കുറിച്ച് ഉപഭോക്താവിനെ അറിയിക്കുന്നു.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'വെണ്ടർ ഓർഡർ ഇനങ്ങളുടെ സ്ഥിരീകരണം',
        'sample' => "ഹലോ അലക്സ്, ഞങ്ങൾ നിങ്ങളുടെ ഓർഡർ അവലോകനം ചെയ്തു. നിങ്ങളുടെ ഇനങ്ങളുടെ സ്ഥിരീകരണ നില ഇതാ:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ഹലോ :param4, ഞങ്ങൾ നിങ്ങളുടെ ഓർഡർ അവലോകനം ചെയ്തു. നിങ്ങളുടെ ഇനങ്ങളുടെ സ്ഥിരീകരണ നില ഇതാ:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'വെണ്ടർ സ്വീകരിച്ചതോ നിരസിച്ചതോ ആയ ഓർഡറിലെ ഇനങ്ങളെക്കുറിച്ച് ഉപഭോക്താവിനെ അറിയിക്കുന്നു.',
    ],



];
