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
        'title' => 'கட்டணத்தை ஏற்கவும்',
        'sample' => "உங்கள் \$267 பணம் வெற்றிகரமாக செலுத்தப்பட்டது.<br>Order: SM-425<br>நன்றி, <b>உங்கள் கடையின் பெயர்</b>.<br>Selldone",
        'body' => "உங்கள் :param2 கட்டணம் வெற்றிகரமாக செலுத்தப்பட்டது.\nஆர்டர்: :param1\nநன்றி, :param3.\nSelldone",
        'icon' => 'கட்டணம்',
        'description' => 'வெற்றிகரமான கட்டணத்தைப் பற்றி தெரிவிக்க ஷாப்பிங் வாடிக்கையாளருக்கு ஒரு செய்தியை அனுப்பவும்.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'கட்டணத்தை ஏற்கவும்',
        'sample' => "புதிய \$267 பணம் செலுத்தப்பட்டது",
        'body' => "புதிய :param2 கட்டணம் வெற்றிகரமாக செலுத்தப்பட்டது.\nஆர்டர்: :param1\nநன்றி, :param3.\nSelldone",
        'icon' => 'கட்டணம்',
        'description' => 'வெற்றிகரமான கட்டணத்தைப் பற்றி தெரிவிக்க கடை உரிமையாளருக்கு ஒரு செய்தியை அனுப்பவும்.',

    ],

    'vendor-new-order' => [
        'title' => 'விற்பனையாளர் புதிய ஆர்டர்',
        'sample' => "புதிய \$200 ஆர்டரைப் பெற்றுள்ளீர்கள். <br>Order: <b>SM-870</b> <b>Vendor பெயர்</b>.<br>✅ தயாரிப்பு A| SKU100001 |1x<br>✅ தயாரிப்பு பி| SKU100002 |1x",
        'body' => "புதிய :param2 ஆர்டரைப் பெற்றுள்ளீர்கள்.\nஆர்டர்: :param3க்கான :param1.\n:param4",
        'icon' => 'கடை முகப்பு',
        'description' => 'விற்பனையாளருக்கு ஒரு புதிய ஆர்டரைப் பற்றித் தெரிவிக்க அவர்களுக்கு ஒரு செய்தியை அனுப்பவும்.',
    ],








    'shop-login' => [
        'title' => 'உள்நுழைவு சரிபார்ப்பு குறியீடு',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "உங்கள் உள்நுழைவு குறியீடு: :param1\n:param2\nSelldone",
        'icon' => 'புகுபதிகை',
        'description' => 'கடையில் உள்நுழைய வாடிக்கையாளருக்கு உள்நுழைவு குறியீட்டை அனுப்பவும்.',

    ],

    'user-login' => [
        'title' => 'உள்நுழைவு வெற்றிச் செய்தி',
        'sample' => "Dear <b>Name</b>,<br>You have logged in to your account by <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "அன்புள்ள :param1,\n:param3 இல் :param2 மூலம் உங்கள் கணக்கில் உள்நுழைந்துள்ளீர்கள்.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'வாடிக்கையாளர் கடையில் உள்நுழைந்த பிறகு ஒரு செய்தியை அனுப்பவும்.',

    ],

    'avocado-order-submit' => [
        'title' => 'அவகேடோ புதிய ஆர்டர் வாங்குபவருக்கு அனுப்பப்பட்டது',
        'sample' => "<b>உங்கள் கடையின் பெயர்</b><br>Dear <b>உங்கள் பெயர்</b>,<br>உங்கள் ஆர்டரைப் பெற்றுள்ளோம், அதை மதிப்பாய்வு செய்கிறோம்.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nஅன்புள்ள :param1,\nஉங்கள் ஆர்டரைப் பெற்றுள்ளோம், அதை மதிப்பாய்வு செய்கிறோம்.\nஆர்டர் #: :param2\nSelldone",
        'icon' => 'உண்மை_சரிபார்ப்பு',
        'description' => 'அவகாடோ ஆர்டர் செய்த பிறகு வாடிக்கையாளருக்கு ஒரு செய்தியை அனுப்பவும்.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'வெண்ணெய் பழம் விற்பனையாளருக்கு புதிய ஆர்டரைப் பெறுகிறது',
        'sample' => "நீங்கள் ஒரு அவகாடோ ஆர்டரைப் பெற்றுள்ளீர்கள்:<br>Store: <b>உங்கள் கடையின் பெயர்</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "நீங்கள் அவகேடோ ஆர்டரைப் பெற்றுள்ளீர்கள்:\nகடை: :param1\nவாங்குபவர்: :param2\nஆர்டர்: :param3\nSelldone",
        'icon' => 'எப்படி_ரெஜி',
        'description' => 'புதிய அவகேடோ ஆர்டரைப் பெறுவது குறித்து கடை உரிமையாளருக்குத் தெரிவிக்க, அவருக்குச் செய்தி அனுப்பவும்.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'அவகேடோ ஆர்டர் செலுத்த தயாராக உள்ளது',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nஉங்கள் ஆர்டர் உறுதிசெய்யப்பட்டது மற்றும் பின்வரும் இணைப்பின் மூலம் பணம் செலுத்தலாம்.\nஆர்டர் #: :param2\nஇணைப்பு: :param1\nSelldone",
        'icon' => 'ரசீது',
        'description' => 'விற்பனையாளர் விலையை நிர்ணயித்த பிறகு வாடிக்கையாளருக்கு கட்டண இணைப்புடன் ஒரு செய்தியை அனுப்பவும் மற்றும் அவர்களின் அவகேடோ ஆர்டரை உறுதிப்படுத்தவும்.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ஆர்டர் அனுப்ப தயாராக உள்ளது',
        'sample' => "ஹாய் <b>Alex</b>, நல்ல செய்தி, உங்கள் ஆர்டர் இப்போது அனுப்பப்படுவதற்கு தயாராக உள்ளது.<br>Order: <b>SM-123</b>",
        'body' => "ஹாய் :param4, நல்ல செய்தி, உங்கள் ஆர்டர் இப்போது அனுப்பப்படுவதற்கு தயாராக உள்ளது.\nஆர்டர்: :param1",
        'icon' => 'உள்ளூர்_ஷிப்பிங்',
        'description' => 'வாடிக்கையாளருக்கு அவர்களின் ஆர்டர் அனுப்பத் தயாராக உள்ளது என்பதைத் தெரிவிக்க அவர்களுக்கு ஒரு செய்தியை அனுப்பவும்.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ஆர்டர் எடுக்க தயாராக உள்ளது',
        'sample' => "ஹாய் அலெக்ஸ், நல்ல செய்தி, உங்கள் ஆர்டர் எடுக்க தயாராக உள்ளது.<br>Order: <b>SM-123</b>",
        'body' => "ஹாய் :param4, நல்ல செய்தி, உங்கள் ஆர்டர் இப்போது எடுக்க தயாராக உள்ளது.\nஆர்டர்: :param1",
        'icon' => 'பங்கு_இருப்பிடம்',
        'description' => 'வாடிக்கையாளருக்கு ஒரு செய்தியை அனுப்பவும், அவர்களின் ஆர்டர் எடுக்கத் தயாராக உள்ளது என்பதை அவர்களுக்குத் தெரிவிக்கவும்.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'விற்பனையாளர் ஆர்டர் அனுப்ப தயாராக உள்ளது',
        'sample' => "ஹாய் <b>Alex</b>, நல்ல செய்தி, உங்கள் ஆர்டர் இப்போது அனுப்பப்படுவதற்கு தயாராக உள்ளது.<br>Order: <b>SM-123</b>",
        'body' => "ஹாய் :param4, நல்ல செய்தி, உங்கள் ஆர்டர் இப்போது அனுப்பப்படுவதற்கு தயாராக உள்ளது.\nஆர்டர்: :param1",
        'icon' => 'உள்ளூர்_ஷிப்பிங்',
        'description' => 'வாடிக்கையாளருக்கு அவர்களின் ஆர்டர் அனுப்பத் தயாராக உள்ளது என்பதைத் தெரிவிக்க அவர்களுக்கு ஒரு செய்தியை அனுப்பவும். நேரடி ஷிப்பிங் பயன்முறை மற்றும் டெலிவரி வகையுடன் சந்தையில் பிக்கப் ஆகாது.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'விற்பனையாளர் ஆர்டர் எடுக்க தயாராக உள்ளது',
        'sample' => "ஹாய் அலெக்ஸ், நல்ல செய்தி, உங்கள் ஆர்டர் எடுக்க தயாராக உள்ளது.<br>Order: <b>SM-123</b>",
        'body' => "ஹாய் :param4, நல்ல செய்தி, உங்கள் ஆர்டர் இப்போது எடுக்க தயாராக உள்ளது.\nஆர்டர்: :param1",
        'icon' => 'பங்கு_இருப்பிடம்',
        'description' => 'வாடிக்கையாளருக்கு ஒரு செய்தியை அனுப்பவும், அவர்களின் ஆர்டர் எடுக்கத் தயாராக உள்ளது என்பதை அவர்களுக்குத் தெரிவிக்கவும். நேரடி ஷிப்பிங் பயன்முறை மற்றும் டெலிவரி வகையுடன் சந்தையில் பிக்கப் உள்ளது.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ஆர்டர் உருப்படிகள் உறுதிப்படுத்தல்',
        'sample' => "வணக்கம் அலெக்ஸ், உங்கள் ஆர்டரை மதிப்பாய்வு செய்துள்ளோம். உங்கள் உருப்படிகளுக்கான உறுதிப்படுத்தல் நிலை இதோ:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "வணக்கம் :param4, உங்கள் ஆர்டரை மதிப்பாய்வு செய்துள்ளோம். உங்கள் உருப்படிகளுக்கான உறுதிப்படுத்தல் நிலை இதோ:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'விற்பனையாளரால் ஏற்றுக்கொள்ளப்பட்ட அல்லது நிராகரிக்கப்பட்ட ஆர்டரில் உள்ள பொருட்களைப் பற்றி வாடிக்கையாளருக்கு அறிவிக்கிறது.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'விற்பனையாளர் ஆர்டர் உருப்படிகளை உறுதிப்படுத்துதல்',
        'sample' => "வணக்கம் அலெக்ஸ், உங்கள் ஆர்டரை மதிப்பாய்வு செய்துள்ளோம். உங்கள் உருப்படிகளுக்கான உறுதிப்படுத்தல் நிலை இதோ:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "வணக்கம் :param4, உங்கள் ஆர்டரை மதிப்பாய்வு செய்துள்ளோம். உங்கள் உருப்படிகளுக்கான உறுதிப்படுத்தல் நிலை இதோ:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'விற்பனையாளரால் ஏற்றுக்கொள்ளப்பட்ட அல்லது நிராகரிக்கப்பட்ட ஆர்டரில் உள்ள பொருட்களைப் பற்றி வாடிக்கையாளருக்கு அறிவிக்கிறது.',
    ],



];
