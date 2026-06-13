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
        'title' => 'ပေးချေမှုကို လက်ခံပါ။',
        'sample' => "သင်၏ \$267 ပေးချေမှုကို အောင်မြင်စွာဖြေရှင်းပြီးဖြစ်သည်။ <br>Order- SM-425<br> Thanks၊ <b> သင်၏စတိုးဆိုင်အမည်</b>.<br>Selldone",
        'body' => "သင်၏ :param2 ငွေပေးချေမှုကို အောင်မြင်စွာ ဖြေရှင်းပြီးပါပြီ။\nမှာယူမှု- :param1\nကျေးဇူးတင်ပါတယ် :param3။\nSelldone",
        'icon' => 'ငွေပေးချေမှု',
        'description' => 'အောင်မြင်သော ငွေပေးချေမှုအကြောင်း အသိပေးရန် ဆိုင်ဖောက်သည်ထံ စာတိုပေးပို့ပါ။',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ပေးချေမှုကို လက်ခံပါ။',
        'sample' => "\$267 ငွေပေးချေမှုအသစ်ကို အောင်မြင်စွာဖြေရှင်းပြီးပါပြီ။<br>Order- SM-425<br> Thanks၊ <b> မင်းရဲ့စတိုးဆိုင်နာမည်</b>.<br>Selldone",
        'body' => ":param2 ငွေပေးချေမှုအသစ်ကို အောင်မြင်စွာ ဖြေရှင်းပြီးပါပြီ။\nမှာယူမှု- :param1\nကျေးဇူးတင်ပါတယ် :param3။\nSelldone",
        'icon' => 'ငွေပေးချေမှု',
        'description' => 'အောင်မြင်သောငွေပေးချေမှုနှင့်ပတ်သက်၍ ဆိုင်ပိုင်ရှင်ထံ မက်ဆေ့ချ်ပို့ပါ။',

    ],

    'vendor-new-order' => [
        'title' => 'ရောင်းချသူအသစ်အမှာစာ',
        'sample' => "\$200 အမှာစာအသစ်တစ်ခုကို သင်လက်ခံရရှိခဲ့ပါသည်။<br>Order- <b>SM-870</b> အတွက် <b>Vendor name</b>.<br>✅ ကုန်ပစ္စည်း A| SKU100001 |1x<br>✅ ကုန်ပစ္စည်း B| SKU100002 |1x",
        'body' => "သင်သည် :param2 မှာယူမှုအသစ်တစ်ခုကို လက်ခံရရှိခဲ့သည်။\nမှာယူမှု- :param3 အတွက် :param1\n:param4",
        'icon' => 'စတိုးဆိုင်',
        'description' => 'မှာယူမှုအသစ်တစ်ခုအကြောင်း အသိပေးရန် ရောင်းချသူထံ စာတိုပေးပို့ပါ။',
    ],








    'shop-login' => [
        'title' => 'အကောင့်ဝင်ရန် အတည်ပြုကုဒ်',
        'sample' => "သင့်အကောင့်ဝင်ကုဒ်မှာ <b>123456</b><br><b> သင့်စတိုးဆိုင်အမည်</b><br>Selldone",
        'body' => "သင့်အကောင့်ဝင်ကုဒ်မှာ :param1 ဖြစ်သည်။\n:param2\nSelldone",
        'icon' => 'အကောင့်ဝင်ပါ။',
        'description' => 'ဆိုင်သို့ဝင်ရောက်ရန် ဖောက်သည်ထံ လော့ဂ်အင်ကုဒ် ပေးပို့ပါ။',

    ],

    'user-login' => [
        'title' => 'အောင်မြင်မှုစာတိုကို ဝင်ရောက်ပါ။',
        'sample' => "လေးစားအပ်ပါသော <b>Name</b>၊<br> သင်သည် <b>iPhone 165.250.300.1</b> <b>5/8/2021 တွင် <b>5/8/2021 ဖြင့် သင့်အကောင့်သို့ လော့ဂ်အင်ဝင်ပါပြီ 9:14AM</b>.<br>Selldone",
        'body' => "လေးစားအပ်ပါသော :param1\n:param3 တွင် :param2 ဖြင့် သင့်အကောင့်သို့ အကောင့်ဝင်ထားသည်။\nSelldone",
        'icon' => 'system_security_update_ကောင်းသည်။',
        'description' => 'ဖောက်သည်သည် ဆိုင်သို့ဝင်ရောက်ပြီးနောက် မက်ဆေ့ခ်ျပို့ပါ။',

    ],

    'avocado-order-submit' => [
        'title' => 'ထောပတ်သီးအသစ်များ အော်ဒါတင်ပြီး ဝယ်သူထံ ပို့ပေးပါသည်။',
        'sample' => "<b> မင်းရဲ့စတိုးဆိုင်နာမည်</b><br>Dear <b> မင်းနာမည်</b>၊<br> ငါတို့က မင်းရဲ့အမှာစာလက်ခံရရှိပြီး အဲဒါကို ငါတို့စစ်ဆေးနေတယ်။<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nလေးစားအပ်ပါသော :param1\nသင့်မှာယူမှုကို ကျွန်ုပ်တို့ လက်ခံရရှိထားပြီး ၎င်းကို ကျွန်ုပ်တို့ စစ်ဆေးနေပါသည်။\nမှာယူမှု #: :param2\nSelldone",
        'icon' => 'အချက်အလက်_စစ်ဆေးမှု',
        'description' => 'ထောပတ်သီး အော်ဒါမှာယူပြီးနောက် ဝယ်ယူသူထံ စာတိုပေးပို့ပါ။',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'ထောပတ်သီးအသစ်များ လက်ခံရရှိပြီး ရောင်းချသူထံ ပေးပို့ပါ။',
        'sample' => "ထောပတ်သီးအမှာစာတစ်ခု သင်လက်ခံရရှိထားသည်- <br>Store- <b> သင့်စတိုးဆိုင်အမည်</b><br>Buyer: <b> ဝယ်သူအမည်</b><br>Order- <b>AVO-246</b><br>Selldone",
        'body' => "သင်သည် ထောပတ်သီးအမှာစာကို လက်ခံရရှိသည်-\nစတိုး- :param1\nဝယ်သူ- :param2\nမှာယူမှု- :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'ထောပတ်သီးအမှာစာအသစ်လက်ခံရရှိကြောင်း ဆိုင်ပိုင်ရှင်ထံ စာတိုပေးပို့ပါ။',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'ထောပတ်သီး အော်ဒါမှာပြီး အဆင်သင့်ဖြစ်နေပါပြီ။',
        'sample' => "<b> သင့်စတိုးဆိုင်အမည်</b><br> သင့်မှာယူမှုကို အတည်ပြုပြီး အောက်ပါလင့်ခ်မှတစ်ဆင့် ပေးချေနိုင်ပါသည်။<br>Order #: <b>AVO-246</b><br>Link- <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nသင့်မှာယူမှုကို အတည်ပြုပြီးပါက အောက်ပါလင့်ခ်မှတစ်ဆင့် ငွေပေးချေနိုင်ပါသည်။\nမှာယူမှု #: :param2\nလင့်ခ်- :param1\nSelldone",
        'icon' => 'ပြေစာ',
        'description' => 'ရောင်းချသူမှ ကုန်ကျစရိတ်သတ်မှတ်ပြီး ၎င်းတို့၏ ထောပတ်သီးအမှာစာကို အတည်ပြုပြီးနောက် ဝယ်ယူသူထံ ငွေပေးချေမှုလင့်ခ်ဖြင့် မက်ဆေ့ချ်ပို့ပါ။',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ပို့ဆောင်ရန် အဆင်သင့်ဖြစ်နေပါပြီ။',
        'sample' => "မင်္ဂလာပါ <b>Alex</b> သတင်းကောင်း၊ သင်၏မှာယူမှုကို ယခုတင်ပို့ရန် အဆင်သင့်ဖြစ်ပါပြီ။<br>Order- <b>SM-123</b>",
        'body' => "မင်္ဂလာပါ :param4 သတင်းကောင်း၊ သင့်မှာယူမှုကို ပို့ဆောင်ရန် အဆင်သင့်ဖြစ်နေပါပြီ။\nမှာယူမှု- :param1",
        'icon' => 'local_shipping',
        'description' => '၎င်းတို့၏ မှာယူမှု အဆင်သင့်ဖြစ်ပြီ ဖြစ်ကြောင်း ဖောက်သည်ထံသို့ မက်ဆေ့ချ် ပေးပို့ပါ။',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'မှာယူရန် အသင့်ဖြစ်နေပါပြီ။',
        'sample' => "မင်္ဂလာပါ အဲလက်စ်၊ သတင်းကောင်း၊ သင်၏ မှာယူမှုကို ယခု ကောက်ယူရန် အသင့်ဖြစ်နေပါပြီ။<br>Order: <b>SM-123</b>",
        'body' => "မင်္ဂလာပါ :param4 သတင်းကောင်း၊ သင့်မှာယူမှုကို ယခု ကောက်ယူရန် အသင့်ဖြစ်နေပါပြီ။\nမှာယူမှု- :param1",
        'icon' => 'share_တည်နေရာ',
        'description' => '၎င်းတို့၏ မှာယူမှုကို ကောက်ယူရန် အသင့်ဖြစ်ပြီ ဖြစ်ကြောင်း ဖောက်သည်ထံသို့ မက်ဆေ့ချ် ပေးပို့ပါ။',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'ရောင်းချသူ အော်ဒါများ ပေးပို့ရန် အသင့်ဖြစ်နေပါပြီ။',
        'sample' => "မင်္ဂလာပါ <b>Alex</b> သတင်းကောင်း၊ သင်၏မှာယူမှုကို ယခုတင်ပို့ရန် အဆင်သင့်ဖြစ်ပါပြီ။<br>Order- <b>SM-123</b>",
        'body' => "မင်္ဂလာပါ :param4 သတင်းကောင်း၊ သင့်မှာယူမှုကို ပို့ဆောင်ရန် အဆင်သင့်ဖြစ်နေပါပြီ။\nမှာယူမှု- :param1",
        'icon' => 'local_shipping',
        'description' => '၎င်းတို့၏ မှာယူမှု အဆင်သင့်ဖြစ်ပြီ ဖြစ်ကြောင်း ဖောက်သည်ထံသို့ မက်ဆေ့ချ် ပေးပို့ပါ။ Direct Shipping Mode ဖြင့် စျေးကွက်တွင်သာရှိပြီး ပို့ဆောင်မှုအမျိုးအစားသည် Pickup မဟုတ်ပါ။',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'ရောင်းချသူ အော်ဒါမှာယူရန် အသင့်ဖြစ်နေပါပြီ။',
        'sample' => "မင်္ဂလာပါ အဲလက်စ်၊ သတင်းကောင်း၊ သင်၏ မှာယူမှုကို ယခု ကောက်ယူရန် အသင့်ဖြစ်နေပါပြီ။<br>Order: <b>SM-123</b>",
        'body' => "မင်္ဂလာပါ :param4 သတင်းကောင်း၊ သင့်မှာယူမှုကို ယခု ကောက်ယူရန် အသင့်ဖြစ်နေပါပြီ။\nမှာယူမှု- :param1",
        'icon' => 'share_တည်နေရာ',
        'description' => '၎င်းတို့၏ မှာယူမှုကို ကောက်ယူရန် အသင့်ဖြစ်ပြီ ဖြစ်ကြောင်း ဖောက်သည်ထံသို့ မက်ဆေ့ချ် ပေးပို့ပါ။ Direct Shipping Mode ဖြင့် စျေးကွက်တွင်သာရှိပြီး ပေးပို့မှုအမျိုးအစားမှာ Pickup ဖြစ်သည်။',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Order Items Confirmation',
        'sample' => "မင်္ဂလာပါ Alex၊ သင့်မှာယူမှုကို ကျွန်ုပ်တို့ စစ်ဆေးပြီးပါပြီ။ ဤသည်မှာ သင့်ပစ္စည်းများအတွက် အတည်ပြုချက်အခြေအနေဖြစ်သည်- <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "မင်္ဂလာပါ :param4၊ သင့်မှာယူမှုကို ကျွန်ုပ်တို့ စစ်ဆေးပြီးပါပြီ။ ဤသည်မှာ သင့်ပစ္စည်းများအတွက် အတည်ပြုချက်အခြေအနေဖြစ်သည်-"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ရောင်းချသူမှ လက်ခံခြင်း သို့မဟုတ် ငြင်းပယ်ခြင်းခံရသော ၎င်းတို့၏ မှာယူမှုဆိုင်ရာ ပစ္စည်းများအကြောင်း ဖောက်သည်အား အသိပေးပါ။',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'ရောင်းချသူ အော်ဒါများ အတည်ပြုခြင်း။',
        'sample' => "မင်္ဂလာပါ Alex၊ သင့်မှာယူမှုကို ကျွန်ုပ်တို့ စစ်ဆေးပြီးပါပြီ။ ဤသည်မှာ သင့်ပစ္စည်းများအတွက် အတည်ပြုချက်အခြေအနေဖြစ်သည်- <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "မင်္ဂလာပါ :param4၊ သင့်မှာယူမှုကို ကျွန်ုပ်တို့ စစ်ဆေးပြီးပါပြီ။ ဤသည်မှာ သင့်ပစ္စည်းများအတွက် အတည်ပြုချက်အခြေအနေဖြစ်သည်-"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ရောင်းချသူမှ လက်ခံခြင်း သို့မဟုတ် ငြင်းပယ်ခြင်းခံရသော ၎င်းတို့၏ အမှာစာရှိပစ္စည်းများအကြောင်း သုံးစွဲသူအား အသိပေးပါ။',
    ],



];
