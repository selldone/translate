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
        'title' => 'Ընդունեք վճարումը',
        'sample' => "Ձեր \$267 վճարումը հաջողությամբ մարվել է:<br>Պատվեր՝ SM-425<br>Շնորհակալություն, <b>Ձեր խանութի անունը</b>.<br>Selldone",
        'body' => "Ձեր :param2 վճարումը հաջողությամբ մարվել է:\nՊատվիրել՝ :param1\nՇնորհակալություն, :param3:\nSelldone",
        'icon' => 'վճարում',
        'description' => 'Հաղորդագրություն ուղարկեք խանութի հաճախորդին, որպեսզի տեղեկացնեք հաջող վճարման մասին:',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Ընդունեք վճարումը',
        'sample' => "Նոր \$267 վճարումը հաջողությամբ մարվեց:<br>Պատվեր՝ SM-425<br>Շնորհակալություն, <b>Ձեր խանութի անունը</b>.<br>Selldone",
        'body' => "Նոր :param2 վճարումը հաջողությամբ մարվեց:\nՊատվիրել՝ :param1\nՇնորհակալություն, :param3:\nSelldone",
        'icon' => 'վճարում',
        'description' => 'Ուղարկեք հաղորդագրություն խանութի սեփականատիրոջը, որպեսզի տեղեկացնեք հաջող վճարման մասին:',

    ],

    'vendor-new-order' => [
        'title' => 'Վաճառող Նոր պատվեր',
        'sample' => "Դուք ստացել եք նոր \$200 պատվեր:<br>Պատվեր՝ <b>SM-870</b> <b>Վաճառողի անունը</b>.<br>✅ Ապրանք Ա| SKU100001 |1x<br>✅ Ապրանք Բ| SKU100002 |1x",
        'body' => "Դուք ստացել եք :param2 նոր պատվեր:\nՊատվիրեք :param1 :param3-ի համար:\n:param4",
        'icon' => 'խանութի ցուցափեղկ',
        'description' => 'Ուղարկեք հաղորդագրություն վաճառողին նոր պատվերի մասին տեղեկացնելու համար:',
    ],








    'shop-login' => [
        'title' => 'Մուտքի հաստատման կոդը',
        'sample' => "Ձեր մուտքի կոդը՝ <b>123456</b><br><b>Ձեր խանութի անունը</b><br>Selldone",
        'body' => "Ձեր մուտքի կոդը՝ :param1\n:param2\nSelldone",
        'icon' => 'մուտք',
        'description' => 'Խանութ մուտք գործելու համար հաճախորդին ուղարկեք մուտքի կոդը:',

    ],

    'user-login' => [
        'title' => 'Մուտք գործելու հաջողության հաղորդագրություն',
        'sample' => "Հարգելի <b>Name</b>,<br>Դուք մուտք եք գործել ձեր հաշիվ <b>iPhone 165.250.300.1</b> <b>5/8/2021-ով 9:14AM</b>.<br>Selldone",
        'body' => "Հարգելի :param1,\nԴուք մուտք եք գործել ձեր հաշիվ :param2 :param3-ով:\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Հաճախորդի խանութ մուտք գործելուց հետո հաղորդագրություն ուղարկեք:',

    ],

    'avocado-order-submit' => [
        'title' => 'Ավոկադոյի նոր պատվերը ուղարկվել է գնորդին',
        'sample' => "<b>Ձեր խանութի անունը</b><br>Հարգելի <b>Ձեր անունը</b>,<br>Մենք ստացել ենք ձեր պատվերը և վերանայում ենք այն:<br>Պատվեր #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nՀարգելի :param1,\nՄենք ստացել ենք ձեր պատվերը և մենք այն վերանայում ենք:\nՊատվերի թիվ՝ :param2\nSelldone",
        'icon' => 'փաստ_ստուգում',
        'description' => 'Ավոկադոյի պատվերը կատարելուց հետո հաղորդագրություն ուղարկեք հաճախորդին:',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Ավոկադոն ստանում է նոր պատվեր, ուղարկվում է վաճառողին',
        'sample' => "Դուք ստացել եք Ավոկադոյի պատվեր՝<br>Խանութ՝ <b>Ձեր խանութի անունը</b><br>Գնորդ՝ <b>Գնորդի անունը</b><br>Պատվեր. <b>AVO-246</b><br>Selldone",
        'body' => "Դուք ստացել եք ավոկադոյի պատվեր.\nԽանութ՝ :param1\nԳնորդ՝ :param2\nՊատվիրել՝ :param3\nSelldone",
        'icon' => 'ինչպես_գրել',
        'description' => 'Ուղարկեք հաղորդագրություն խանութի սեփականատիրոջը, որպեսզի տեղեկացնեք Ավոկադոյի նոր պատվեր ստանալու մասին:',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Ավոկադոյի պատվերը պատրաստ է վճարման',
        'sample' => "<b>Ձեր խանութի անունը</b><br>Ձեր պատվերը հաստատվել է և կարող եք վճարել հետևյալ հղման միջոցով:<br>Պատվերի #՝ <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nՁեր պատվերը հաստատվել է և կարող եք վճարել հետևյալ հղման միջոցով։\nՊատվերի թիվ՝ :param2\nՀղում՝ :param1\nSelldone",
        'icon' => 'անդորրագիր',
        'description' => 'Վճարման հղումով հաղորդագրություն ուղարկեք հաճախորդին այն բանից հետո, երբ վաճառողը սահմանեց արժեքը և հաստատեք Ավոկադոյի պատվերը:',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Պատվերը պատրաստ է առաքման',
        'sample' => "Բարև <b>Alex</b>, լավ նորություն, ձեր պատվերն այժմ պատրաստ է առաքման:<br>Պատվեր՝ <b>SM-123</b>",
        'body' => "Բարև :param4, լավ նորություն, ձեր պատվերն այժմ պատրաստ է առաքման:\nՊատվիրել՝ :param1",
        'icon' => 'տեղական_առաքում',
        'description' => 'Հաճախորդին հաղորդագրություն ուղարկեք՝ տեղեկացնելով, որ իրենց պատվերը պատրաստ է առաքման:',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Պատվերը պատրաստ է վերցնելու',
        'sample' => "Բարև Ալեքս, լավ նորություն, ձեր պատվերն այժմ պատրաստ է վերցնելու:<br>Պատվեր՝ <b>SM-123</b>",
        'body' => "Ողջույն :param4, լավ նորություն, ձեր պատվերն այժմ պատրաստ է վերցնելու:\nՊատվիրել՝ :param1",
        'icon' => 'share_location',
        'description' => 'Հաճախորդին հաղորդագրություն ուղարկեք՝ տեղեկացնելու, որ իրենց պատվերը պատրաստ է վերցնելու:',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Վաճառողի պատվերը պատրաստ է առաքման',
        'sample' => "Բարև <b>Alex</b>, լավ նորություն, ձեր պատվերն այժմ պատրաստ է առաքման:<br>Պատվեր՝ <b>SM-123</b>",
        'body' => "Բարև :param4, լավ նորություն, ձեր պատվերն այժմ պատրաստ է առաքման:\nՊատվիրել՝ :param1",
        'icon' => 'տեղական_առաքում',
        'description' => 'Հաճախորդին հաղորդագրություն ուղարկեք՝ տեղեկացնելով, որ իրենց պատվերը պատրաստ է առաքման: Պարզապես շուկայում ուղղակի առաքման ռեժիմով և առաքման տեսակը Պիկապ չէ:',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Վաճառողի պատվերը պատրաստ է վերցնելու',
        'sample' => "Բարև Ալեքս, լավ նորություն, ձեր պատվերն այժմ պատրաստ է վերցնելու:<br>Պատվեր՝ <b>SM-123</b>",
        'body' => "Ողջույն :param4, լավ նորություն, ձեր պատվերն այժմ պատրաստ է վերցնելու:\nՊատվիրել՝ :param1",
        'icon' => 'share_location',
        'description' => 'Հաճախորդին հաղորդագրություն ուղարկեք՝ տեղեկացնելու, որ իրենց պատվերը պատրաստ է վերցնելու: Պարզապես շուկայում ուղղակի առաքման ռեժիմով և առաքման տեսակը Pickup է:',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Պատվերի ապրանքների հաստատում',
        'sample' => "Բարև Ալեքս, մենք վերանայել ենք ձեր պատվերը: Ահա ձեր ապրանքների հաստատման կարգավիճակը՝ <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Բարև :param4, մենք վերանայել ենք ձեր պատվերը: Ահա ձեր ապրանքների հաստատման կարգավիճակը."
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'հանձնարարություն_վերադարձված',
        'description' => 'Հաճախորդին ծանուցում է իր պատվերի ապրանքների մասին, որոնք ընդունվել կամ մերժվել են վաճառողի կողմից:',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Վաճառողի պատվերի կետերի հաստատում',
        'sample' => "Բարև Ալեքս, մենք վերանայել ենք ձեր պատվերը: Ահա ձեր ապրանքների հաստատման կարգավիճակը՝ <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Բարև :param4, մենք վերանայել ենք ձեր պատվերը: Ահա ձեր ապրանքների հաստատման կարգավիճակը."
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'հանձնարարություն_վերադարձված',
        'description' => 'Ծանուցում է հաճախորդին իրենց պատվերի ապրանքների մասին, որոնք ընդունվել կամ մերժվել են վաճառողի կողմից:',
    ],



];
