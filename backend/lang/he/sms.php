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
        'title' => 'קבל תשלום',
        'sample' => "התשלום שלך בסך \$267 הוסדר בהצלחה.<br>הזמנה: SM-425<br>תודה, <b>שם החנות שלך</b>.<br>Selldone",
        'body' => "תשלום :param2 שלך הוסדר בהצלחה.\nהזמנה: :param1\nתודה, :param3.\nSelldone",
        'icon' => 'תשלום',
        'description' => 'שלח הודעה ללקוח החנות כדי ליידע על תשלום מוצלח.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'קבל תשלום',
        'sample' => "תשלום חדש של \$267 הוסדר בהצלחה.<br>הזמנה: SM-425<br>תודה, <b>שם החנות שלך</b>.<br>Selldone",
        'body' => "תשלום :param2 חדש הוסדר בהצלחה.\nהזמנה: :param1\nתודה, :param3.\nSelldone",
        'icon' => 'תשלום',
        'description' => 'שלח הודעה לבעל החנות כדי ליידע אותם על התשלום המוצלח.',

    ],

    'vendor-new-order' => [
        'title' => 'הזמנה חדשה של ספק',
        'sample' => "קיבלת הזמנה חדשה של \$200.<br>הזמנה: <b>SM-870</b> עבור <b> שם הספק</b>.<br>✅ מוצר A| SKU100001 |1x<br>✅ מוצר ב| SKU100002 |1x",
        'body' => "קיבלת הזמנה :param2 חדשה.\nהזמנה: :param1 עבור :param3.\n:param4",
        'icon' => 'חזית חנות',
        'description' => 'שלח הודעה לספק כדי ליידע אותם על הזמנה חדשה.',
    ],








    'shop-login' => [
        'title' => 'קוד אימות כניסה',
        'sample' => "קוד הכניסה שלך הוא: <b>123456</b><br><b>שם החנות שלך</b><br>Selldone",
        'body' => "קוד הכניסה שלך הוא: :param1\n:param2\nSelldone",
        'icon' => 'כניסה',
        'description' => 'שלח קוד כניסה ללקוח כדי להיכנס לחנות.',

    ],

    'user-login' => [
        'title' => 'הודעת כניסה להצלחה',
        'sample' => "היקר <b>Name</b>,<br> נכנסת לחשבון שלך באמצעות <b>iPhone 165.250.300.1</b> בשעה <b>5/8/2021 9:14AM0Q7Q0Q0Q0Q0Q0Q0Q",
        'body' => ":param1 היקר,\nהתחברת לחשבון שלך על ידי :param2 ב-:param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'שלח הודעה לאחר כניסת הלקוח לחנות.',

    ],

    'avocado-order-submit' => [
        'title' => 'הזמנה חדשה של אבוקדו נשלחה שלח לקונה',
        'sample' => "<b>שם החנות שלך</b><br>יקיר <b>שם שלך</b>,<br>קיבלנו את ההזמנה שלך ואנחנו בודקים אותה.<br>הזמנה #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\n:param1 היקר,\nקיבלנו את ההזמנה שלך ואנחנו בודקים אותה.\nמספר הזמנה: :param2\nSelldone",
        'icon' => 'בדיקת_עובדה',
        'description' => 'שלחו הודעה ללקוח לאחר ביצוע הזמנת אבוקדו.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'אבוקדו מקבל הזמנה חדשה נשלח למוכר',
        'sample' => "קיבלת הזמנת אבוקדו:<br>חנות: <b>שם החנות שלך</b><br>קונה: <b>שם הקונה</b><br>הזמנה: <b>AVO-246</b><br>Selldone",
        'body' => "קיבלת הזמנת אבוקדו:\nחנות: :param1\nקונה: :param2\nהזמנה: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'שלח הודעה לבעל החנות כדי להודיע לו על קבלת הזמנת אבוקדו חדשה.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'הזמנת אבוקדו מוכנה לתשלום',
        'sample' => "<b>שם החנות שלך</b><br>ההזמנה שלך אושרה וניתן לשלם אותה דרך הקישור הבא.<br>הזמנה #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nהזמנתך אושרה וניתן לשלם באמצעות הקישור הבא.\nמספר הזמנה: :param2\nקישור: :param1\nSelldone",
        'icon' => 'קבלה',
        'description' => 'שלחו הודעה עם קישור התשלום ללקוח לאחר שהמוכר קבע עלות ואשר את הזמנת האבוקדו שלו.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'הזמנה מוכנה למשלוח',
        'sample' => "היי <b>Alex</b>, חדשות טובות, ההזמנה שלך מוכנה כעת למשלוח.<br>הזמנה: <b>SM-123</b>",
        'body' => "היי :param4, חדשות טובות, ההזמנה שלך מוכנה כעת למשלוח.\nהזמנה: :param1",
        'icon' => 'local_shipping',
        'description' => 'שלח הודעה ללקוח כדי להודיע לו שההזמנה שלו מוכנה למשלוח.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'הזמנה מוכנה לאיסוף',
        'sample' => "היי אלכס, חדשות טובות, ההזמנה שלך מוכנה כעת לאיסוף.<br>הזמנה: <b>SM-123</b>",
        'body' => "היי :param4, חדשות טובות, ההזמנה שלך מוכנה כעת לאיסוף.\nהזמנה: :param1",
        'icon' => 'share_location',
        'description' => 'שלח הודעה ללקוח כדי להודיע לו שההזמנה שלו מוכנה לאיסוף.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'הזמנת ספק מוכנה למשלוח',
        'sample' => "היי <b>Alex</b>, חדשות טובות, ההזמנה שלך מוכנה כעת למשלוח.<br>הזמנה: <b>SM-123</b>",
        'body' => "היי :param4, חדשות טובות, ההזמנה שלך מוכנה כעת למשלוח.\nהזמנה: :param1",
        'icon' => 'local_shipping',
        'description' => 'שלח הודעה ללקוח כדי להודיע לו שההזמנה שלו מוכנה למשלוח. רק בשוק עם מצב משלוח ישיר וסוג המשלוח אינו איסוף.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'הזמנת ספק מוכנה לאיסוף',
        'sample' => "היי אלכס, חדשות טובות, ההזמנה שלך מוכנה כעת לאיסוף.<br>הזמנה: <b>SM-123</b>",
        'body' => "היי :param4, חדשות טובות, ההזמנה שלך מוכנה כעת לאיסוף.\nהזמנה: :param1",
        'icon' => 'share_location',
        'description' => 'שלח הודעה ללקוח כדי להודיע לו שההזמנה שלו מוכנה לאיסוף. רק בשוק עם מצב משלוח ישיר וסוג המשלוח הוא איסוף.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'אישור הזמנה של פריטים',
        'sample' => "שלום אלכס, בדקנו את ההזמנה שלך. להלן סטטוס האישור עבור הפריטים שלך: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "שלום :param4, בדקנו את ההזמנה שלך. להלן סטטוס האישור של הפריטים שלך:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'משימה_הוגשה',
        'description' => 'מודיע ללקוח על הפריטים בהזמנתו אשר התקבלו או נדחו על ידי המוכר.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'אישור הזמנת פריטי ספק',
        'sample' => "שלום אלכס, בדקנו את ההזמנה שלך. להלן סטטוס האישור עבור הפריטים שלך: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "שלום :param4, בדקנו את ההזמנה שלך. להלן סטטוס האישור של הפריטים שלך:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'משימה_הוגשה',
        'description' => 'מודיע ללקוח על הפריטים בהזמנתו אשר התקבלו או נדחו על ידי הספק.',
    ],



];
