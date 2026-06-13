<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ifiranṣẹ yii ṣe itẹwọgba olura tuntun si ile itaja naa.',
        ShopMailTemplateCodes::OrderCheckout => 'Ifitonileti yii jẹ fifiranṣẹ nigbati olura kan jẹrisi aṣẹ kan.',
        ShopMailTemplateCodes::OrderPayment => 'Ifitonileti yii jẹrisi isanwo aṣeyọri ti alabara ṣe.',
        ShopMailTemplateCodes::OrderUpdate => 'Ifiranṣẹ yii ni a fi ranṣẹ lati ṣe imudojuiwọn olura kan lori ipo aṣẹ wọn.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ifiranṣẹ yii ni a fi ranṣẹ si olutaja kan lati fi to wọn leti ti aṣẹ ti a fọwọsi.',
        ShopMailTemplateCodes::PosCheckout => 'Ifitonileti yii ni a fi ranṣẹ lati jẹrisi aaye ti aṣẹ tita fun olura kan.',
        ShopMailTemplateCodes::PosPayment => 'Ifitonileti yii jẹrisi aaye ti isanwo tita ti olura kan ṣe.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ifiranṣẹ yii ṣe ifitonileti olutaja ti rira ti a ṣe ni aaye tita wọn.',
        ShopMailTemplateCodes::ShopContact => 'Ifitonileti yii ni a firanṣẹ nigbati fọọmu olubasọrọ ti fi silẹ.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ifitonileti yii sọ fun olumulo kan pe wọn ti gba kaadi ẹbun kan.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ifiranṣẹ yii ṣe itẹwọgba olutaja tuntun si ile itaja naa.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ifiranṣẹ yii ni a fi ranṣẹ lati pe ataja kan lati darapọ mọ ibi ọja rẹ.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ifiranṣẹ yii ni a fi ranṣẹ si ataja nigbati o ba gba aṣẹ ni boya Sanwo tabi Owo lori Ipo Ifijiṣẹ (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Firanṣẹ lojoojumọ lati ṣe imudojuiwọn awọn olutaja lori ipo awọn ọja wọn.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ifiranṣẹ yii ni a fi ranṣẹ lati pe ataja kan lati darapọ mọ ibi ọja rẹ.",

        ShopMailTemplateCodes::UserLogin => "Fi leti olumulo pẹlu awọn alaye wiwọle, pẹlu adirẹsi IP, ọjọ, ati ẹrọ, fun awọn idi aabo.",
        ShopMailTemplateCodes::LoginCode => "Fi koodu igbaniwọle kan ranṣẹ fun awọn olumulo lati wọle si ile itaja naa.",

        ShopMailTemplateCodes::EmailVerifyLink => "Fi ọna asopọ ranṣẹ lati mọ daju adirẹsi imeeli olumulo. Imeeli yii jẹ fifiranṣẹ nigbati olumulo ba forukọsilẹ nipasẹ SMS ti o si tẹ imeeli wọn sii. Ko firanṣẹ nigbati olumulo kan forukọsilẹ taara pẹlu iwọle awujọ tabi imeeli.",

        ShopMailTemplateCodes::EmailBulkOrder => "Firanṣẹ atokọ ti gbigba ati awọn aṣẹ isanwo ni olopobobo fun ọjọ kan pato."


    ,

    ],


    'global' => [
        'greetings' => 'Hi, :name!',
        'end-statement' => 'Ẹgbẹ atilẹyin',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Nilo iranlọwọ? Beere ni [support@selldone.com](mailto:support@seldone.com) tabi ṣabẹwo si [ile-iṣẹ iranlọwọ] (https://selldone.com/community).",
        'selldone-team' => 'Ẹgbẹ Selldone',
        'footer-shop' => "Ti o ba nilo iranlọwọ pẹlu ohunkohun, jọwọ ma ṣe ṣiyemeji lati fi imeeli ranṣẹ si wa: :shop_mail",
        'accept' => "Gba",
        'reject' => "Kọ",
        'verify' => "daju",
        'title' => "Akọle",
        'value' => "Iye",
        'description' => "Apejuwe",
        'shop' => "Itaja",
        'shop-info' => "Itaja Alaye",
        'user' => "olumulo",
        'user-info' => "Alaye Account",
        'license' => "Iwe-aṣẹ",
        'status' => "Ipo",
        'start' => "Bẹrẹ",
        'end' => "Ipari",
        'renewal' => "Isọdọtun",
        'view' => "Wo",

        'balance' => "Iwontunwonsi",
        'card_number' => "Nomba kaadi",
        'cvv' => "Cvv",
        'expire_date' => "Ọjọ ipari",

        'Dashboard' => "Dasibodu",
        'order' => "ibere",
        'view_order' => "Wo ibere",
        'pay_now' => "Pay now",

        'official_selldone' => "Oṣiṣẹ tita",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Owo owo",
        'free-balance' => "Iwọntunwọnsi ọfẹ",
        'locked-balance' => "Iwọntunwọnsi titiipa",
        'bot' => "Bot",
        'requests' => "Awọn ibeere",
        'baskets' => 'Awọn kẹkẹ',
        'physical' => "Ti ara",
        'virtual' => "Foju",
        'file' => "Faili",
        'service' => "Iṣẹ",
        'fulfillment' => "Ìmúṣẹ",
        'open' => "Ṣii",
        'reserved' => "Ni ipamọ",
        'canceled' => "fagilee",
        'payed' => "Sanwo",
        'cod' => "COD",
        'orders-count' => 'Awọn ibere',
        'payments-count' => 'Awọn sisanwo',
        'confirms-count' => 'Jẹrisi',
        'sends-count' => 'Firanṣẹ',
        'delivers-count' => 'Awọn ifijiṣẹ',
        'count' => 'Ka',
        'transactions-count' => 'Awọn iṣowo ka',
        'success-transactions' => 'Awọn iṣowo aṣeyọri',
        'total-amount' => 'Oye gbo e',
        'amount' => 'Iye',
        'wage' => 'Oya',
        'debug' => 'Ṣatunkọ',
        'pos' => 'POS',
        'live' => 'Gbe',
        'CheckQueue' => 'Ṣayẹwo isinyi',
        'OrderConfirm' => 'Paṣẹ jẹrisi',
        'PreparingOrder' => 'Ngbaradi ibere',
        'SentOrder' => 'Ti firanṣẹ ibere',
        'ToCustomer' => 'Jišẹ si onibara',
        'Pending' => 'Ni isunmọtosi',
        'Accepted' => 'Ti gba',
        'Rejected' => 'Kọ silẹ',
        'pc' => 'PC',
        'tablet' => 'Tabulẹti',
        'phone' => 'Foonu',
        'total' => 'Lapapọ',
        'view-detail' => 'Wo alaye',
        'empty' => 'Sofo',
        'dropshipping' => 'Gbigbe silẹ',
        'reply' => 'Fesi',
        'reactions' => 'Awọn aati',
        'Comments' => 'Comments',
        'last-comment' => 'kẹhin ọrọìwòye',
        'response-to' => 'Idahun si',
        'posts' => 'Awọn ifiweranṣẹ',
        'post' => 'Ifiweranṣẹ',

        'name' => 'Oruko',
        'email' => 'Imeeli',
        'type' => 'iru',
        'device' => 'Ẹrọ',
        'platform' => 'Platform',
        'browser' => 'Aṣàwákiri',
        'time' => 'Aago',
        'Wallet' => 'Apamọwọ',
        'date' => 'Ọjọ',

        'account' => 'Iroyin',
        'transaction' => 'Idunadura',
        'fee' => 'Ọya',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Ẹka',
        'password' => 'Ọrọigbaniwọle',
        'verify-login' => "Daju & Buwolu wọle",
        'url' => 'URL',
        'avocado' => 'Piha oyinbo',
        'hyper' => 'Hyper',
        'buy-now' => "Ra Bayibayi",
        'add-domain' => "Add Domain",
        'views' => 'Awọn iwo',


        'country' => 'Orilẹ-ede',
        'address' => 'adirẹsi',
        'postal' => 'koodu ifiweranse',
        'building_no' => 'Ile #',
        'building_unit' => 'Ẹyọ #',
        'message' => 'Ifiranṣẹ',


        'customer' => 'Onibara',
        'cart-items' => 'Awọn nkan fun rira',
        'payment' => 'Isanwo',
        'receiver' => 'Olugba',
        'virtual-items' => 'Awọn nkan foju',
        'no-payment' => 'Ko si sisan!',

        'enable' => 'Mu ṣiṣẹ',
        'access' => 'Wiwọle',
        'bank' => 'Alaye banki',

        'vendor' => 'Olutaja',

        'view_content' => "Wo ni kikun akoonu",
        'files' => 'Awọn faili',
        'download' => 'Gba lati ayelujara',
        'file_name' => 'Orukọ faili',
        'file_size' => 'Iwọn',

        'subscription' => 'Ṣiṣe alabapin',
        'products' => 'Awọn ọja',
        'vendor_products' => 'ataja Products',

        'pickup' => 'Gbigba',

        'minutes' => 'Iṣẹju',
        'hours' => 'Awọn wakati',

        'refund' => 'agbapada',
        'recipient_address' => 'Adirẹsi olugba',
        'signature' => 'Ibuwọlu',
        'blockchain' => 'Blockchain',
        'details' => 'Awọn alaye',


    

        'Shop' => 'Itaja',
        'dashboard' => 'dasibodu',
        'comments' => 'comments',
        'wallet' => 'apamọwọ',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Iṣowo OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Iroyin išẹ, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Iroyin ti igba, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hi',
            'name' => 'fọwọsi, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Atilẹyin :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Ṣayẹwo, Selldone'
        ],
        'Welcome' => [
            'id' => 'hi',
            'name' => 'Agbegbe, Selldone'
        ],
        'NewShop' => [
            'id' => 'oniṣòwo',
            'name' => 'fọwọsi, Selldone'
        ],
        'Approve' => [
            'id' => 'fi ọwọ si',
            'name' => 'fọwọsi, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Awọn aṣẹ Iṣakoso :name'
        ],

        'Recovery' => [
            'id' => 'imularada',
            'name' => 'Selldone Gbigba Egbe'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Ni isunmọtosi',
        'PAYED' => 'Ti san ✅',
        'CANCELED' => 'Fagilee ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Alakoso',
            'OFFICER' => 'Oṣiṣẹ ati Alabojuto',
            'AUDITING' => 'Alakoso iṣatunṣe',
            'EMPLOYEE' => 'Osise',
            'PRODUCT' => 'Oluṣakoso ọja',
            'CONTENT' => 'Oluṣakoso akoonu',
            'MARKETING' => 'Alakoso tita',
            'VIEWER' => 'Oluwo',

        ],
        'subject' => ":inviter pe o bi :level| :shop",
        'category' => "Osise ifiwepe",
        'title' => "You have been invited to <b>:shop_name</b> as <b>:level</b>.",
        'message' => "O ti gba ifiwepe lati ṣe ifowosowopo pẹlu ẹgbẹ <b>:shop_title</b> ni iṣowo. O ni aṣayan lati gba tabi kọ ipese yii. Ti o ba yan lati gba, jọwọ wọle si iṣẹ Selldone lati jẹrisi ipinnu rẹ. Lẹhin ìmúdájú, iwọ yoo ni iraye si apakan iṣakoso itaja.",

    ],

    'welcome-email' => [
        'subject' => "👋 Kaabọ :name, Jẹ ki a Bẹrẹ pẹlu Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Kaabo si Selldone",
        'message' => "O ṣeun fun yiyan Selldone! O ti wa ni bayi apakan ti agbegbe larinrin ti o so awọn olutaja agbaye pọ si awọn alabara, awọn iṣowo agbegbe si awọn ile-iṣẹ, ati awọn eniyan kọọkan si awọn ile-iṣẹ. Gbogbo Titunto si ati awọn irinṣẹ Pro wa fun ọ ** ọfẹ *** ati ** ailopin ***. A wa nibi lati ṣe atilẹyin fun ọ ati ṣi awọn ilẹkun si aṣeyọri rẹ.",

        'index' => "Igbesẹ :step.",

        'step-domain' => [
            'title' => 'Ṣafikun Aṣa Aṣa Rẹ',
            'message' => "Lati bẹrẹ, ṣafikun agbegbe aṣa rẹ fun ọfẹ ni Dashboard itaja labẹ Eto> Awọn eto ibugbe.",
            'action' => 'Ṣakoso Awọn Ibugbe Mi',
        ],
        'step-landing' => [
            'title' => 'Ṣe akanṣe Oju-iwe Ile rẹ',
            'message' => "Ṣe akanṣe oju-iwe ile rẹ nipa lilọ si Dashboard> Awọn oju-iwe. Yan oju-iwe ibalẹ tabi ṣẹda tuntun kan. O rọrun ati ogbon inu, ati pe o le bẹrẹ ṣiṣẹ lori rẹ lẹsẹkẹsẹ.",
            'action' => 'Ṣe akanṣe Oju-iwe Ibalẹ Mi',
        ],
        'step-payment' => [
            'title' => 'Ṣeto Awọn ọna isanwo',
            'message' => "Bẹrẹ gbigba awọn sisanwo taara sinu akọọlẹ banki rẹ. Lati so awọn olupese isanwo rẹ pọ bi Stripe, PayPal, ati diẹ sii, lọ si Dashboard> Iṣiro> Ẹnu-ọna.",
            'action' => 'Ṣafikun Awọn ọna isanwo',
        ],
        'step-products' => [
            'title' => 'Fi Awọn ọja Rẹ kun',
            'message' => "Ni irọrun ṣafikun awọn ọja ati awọn ẹka ninu Dasibodu> Awọn ọja. O kan bii ṣiṣakoso awọn faili ati awọn folda lori PC rẹ – fa-ati-ju silẹ ti ṣetan. O tun le gbe awọn ọja wọle lọpọlọpọ nipa lilo Excel. Awoṣe apẹẹrẹ wa lati ṣe iranlọwọ fun ọ lati bẹrẹ.",
            'action' => 'Ṣakoso Awọn ọja Mi',
        ],
        'step-shipping' => [
            'title' => 'Ṣeto Awọn ọna Gbigbe',
            'message' => "Lati gba agbara si awọn alabara fun gbigbe, ṣalaye awọn ọna gbigbe rẹ ni Dasibodu> Logistic> Gbigbe. O le ṣeto idiyele oriṣiriṣi ati atilẹyin fun awọn ipo oriṣiriṣi. Maṣe gbagbe lati ṣeto ipilẹṣẹ ile itaja rẹ ni Dasibodu> Logistic> Ile-ipamọ.",
            'action' => 'Ṣakoso awọn ọna gbigbe',
        ],
    

        'seller' => [
            'title' => 'Ṣe o jẹ olutaja kan?',
            'message' => 'Lati bẹrẹ tita, tẹ dasibodu rẹ sii ni Selldone nipasẹ ọna asopọ ni isalẹ ki o ṣẹda ile itaja akọkọ rẹ patapata ni ọfẹ. Eyi yoo gba iṣẹju diẹ ati pe iwọ yoo ni ile itaja tirẹ ati aaye ayelujara. A yoo ṣe itọsọna fun ọ si awọn igbesẹ ti nbọ ati gba ẹnu-ọna isanwo naa.',
            'action' => 'Buwolu wọle si dasibodu mi',
        ],
        'buyer' => [
            'title' => 'Olura ni mi',
            'message' => 'Oriire. Ni kete ti o ba jẹ ọmọ ẹgbẹ ti Selldone, iwọ yoo yọ gbogbo awọn wahala ti ẹgbẹ ati ijẹrisi kuro ni awọn ile itaja ori ayelujara. Lati ni anfani lati eyikeyi ile itaja ati aaye ti o nlo Syeed Selldone, o le wọle pẹlu titẹ kan ki o jẹ ki rira rẹ rọrun, yara ati ailewu.',
        ],
    ],


    'charge-account' => [
        'category' => 'Apamọwọ > Account > Gbigba agbara',
        'title' => "Idiyele Aseyori",
        'message' => "Your account <b>:account_number</b> has been charged <b>:amount</b> successfully.",
        'account' => 'Iroyin',
        'charge' => 'Gba agbara',
        'balance' => 'Iwontunwonsi',
        'footer' => "Jẹ ki iṣowo rọrun, ṣiṣe, ati wiwọle si ẹnikẹni ni ayika agbaye."
    ],

    'verify-email' => [
        'subject' => "🙌 Pari iforukọsilẹ rẹ si Selldone! Daju ọna asopọ.",
        'category' => "O NI IGBESE KAN",
        'title' => "Daju adirẹsi imeeli rẹ",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Ti o ba ni iṣoro tite bọtini Ṣayẹwo, daakọ ati lẹẹ URL naa ni isalẹ sinu ẹrọ aṣawakiri wẹẹbu rẹ: :activation_url",
        'next-step' => "Nigbamii ti, a yoo firanṣẹ diẹ ninu awọn ohun elo iranlọwọ ati itọsọna igbese-nipasẹ-igbesẹ lati jẹ ki o rọrun fun ọ lati ṣafikun agbegbe aṣa rẹ, ṣeto awọn sisanwo, ṣafikun awọn ọja, ati gba aṣẹ akọkọ rẹ.",

    ],
    'verify-email-code' => [
        'subject' => "Koodu ijerisi fun :name",
        'category' => "SECURITY",
        'title' => "Imeeli ijerisi koodu",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Ile itaja rẹ Ṣetan| :name",
        'category' => "O NI IGBESE KAN",
        'title' => "Eto ti pari",
        'account_title' => "Àkọọlẹ rẹ",
        'account_msg' => "Ṣayẹwo ati buwolu wọle si akọọlẹ rẹ pẹlu alaye yii.",
        'shop_msg' => "Alaye akọọlẹ lori ẹrọ ṣiṣe iṣowo Selldone.",

    ],

    'reset2fa' => [
        'category' => "Ifiranṣẹ Oṣiṣẹ Aabo",
        'title' => "Beere mu 2-igbese wiwọle",
        'message' => "O n gba imeeli yii nitori a gba ibeere kan lati tunto ijẹrisi ifosiwewe meji fun iroyin **:name** pẹlu imeeli **:email**.<br><br>A wa awọn alaye wọnyi fun akọọlẹ rẹ:",
        'footer' => "Ti o ko ba beere fun atunto ọrọ igbaniwọle, ko nilo igbese siwaju sii.",
        'action' => 'Pa wiwọle-igbesẹ meji kuro',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Ile itaja rẹ ti ṣetan ni bayi!",
        'category' => "Bi NEW ONLINE Itaja IN THE WORLD",
        'title' => "Oriire, :name!",
        'message' => "<b> Oriire, :name! Iṣowo ori ayelujara tuntun rẹ ti wa laaye bayi!</b> A ni itara lati kaabọ si ọ si agbegbe Awọn olutaja. O ti ṣe igbesẹ akọkọ si aṣeyọri, ati pe a wa nibi lati ṣe iranlọwọ fun ọ ni gbogbo igbesẹ ti ọna naa.<br>Ni bayi ti ile itaja rẹ ti ṣetan, jẹ ki a rii daju pe o ṣeto lati gba awọn sisanwo taara lati ọdọ awọn alabara rẹ ki o bẹrẹ dagba ijọba rẹ. Ti o ba nilo iranlọwọ lailai, a kan ifiranṣẹ kuro — ẹgbẹ atilẹyin wa nigbagbogbo wa fun ọ.<br><br><b>Igbese atẹle pataki:</b> Lati bẹrẹ, rii daju pe o ti ṣeto gbogbo rẹ fun gbigba awọn sisanwo ati awọn iṣẹ ti o rọ. A yoo ṣe amọna rẹ nipasẹ ipele kọọkan lati jẹ ki ile itaja rẹ nṣiṣẹ laisiyonu.",
        'pdf-book' => "Maṣe padanu iwe ọwọ ti a so: Ṣe Iṣowo rẹ Bi Ere kan",

        'account' => [
            'title' => 'Igbesẹ 1: Ṣẹda akọọlẹ kan ninu apamọwọ Selldone',
            'message' => "Lati bẹrẹ, ṣẹda akọọlẹ kan ninu apamọwọ Selldone rẹ. Eyi ni ibi ti awọn owo rẹ yoo ti yọkuro, ati pe o tun wa nibiti iwọ yoo gbe soke lati jẹ ki ile itaja rẹ ṣiṣẹ laisiyonu. Ti iwọntunwọnsi rẹ ba lọ ni odi, maṣe yọ ara rẹ lẹnu! Ile-itaja rẹ yoo tẹsiwaju lati ṣiṣẹ laisi idilọwọ.",
            'action' => 'Buwolu wọle si apamọwọ',
        ],

        'shop-account' => [
            'title' => 'Igbesẹ 2: so akọọlẹ pọ mọ ile itaja',
            'message' => "Nigbamii, so akọọlẹ apamọwọ rẹ pọ si ile itaja rẹ. Ori si <b>Store> Iṣiro> Invoice</b>, ki o si so apamọwọ rẹ pọ. Eyi ni idaniloju pe gbogbo awọn sisanwo onibara ti wa ni ifipamọ taara sinu akọọlẹ banki rẹ-Selldone ko yọkuro iye eyikeyi ninu awọn dukia rẹ.",
            'action' => 'Itaja risiti Panel',
        ],

        'gateway' => [
            'title' => 'Igbesẹ 3: So Ẹnu-ọna Isanwo Ayelujara pọ',
            'message' => "Bayi, jẹ ki a ṣeto ẹnu-ọna isanwo ori ayelujara rẹ. Lọ si <b>Store> Iṣiro> Port</b> ki o tẹ <b>Add Port</b> Tuntun. Yan owo rẹ, ati pe iwọ yoo rii atokọ ti awọn ẹnu-ọna isanwo ti o wa. Sisopọ ẹnu-ọna jẹ iyara ati irọrun, ṣugbọn ti o ba nilo iranlọwọ eyikeyi, lero ọfẹ lati ṣayẹwo awọn itọsọna Selldone tabi de ọdọ wa.",
            'action' => 'Ṣafikun ọna abawọle kan si ile itaja',
        ],

        'domain' => [
            'title' => 'Igbesẹ to kẹhin: sisopọ agbegbe igbẹhin kan',
            'message' => "Bayi, ṣe asopọ agbegbe aṣa rẹ si ile itaja rẹ. Eyi n gba awọn alabara laaye lati ra awọn ọja tabi iṣẹ rẹ ati ṣe awọn sisanwo taara si ọ.",
            'action' => 'Ifihan ati gbigba awọn kaadi ẹbun ailopin',
        ],
    ],


    'basket-list' => [
        'item' => "ohun kan",
        'count' => "Ka",
        'price' => "owo",
        'discount-code' => "Eni koodu",
        'customer-club' => 'Onibara Club',
        'shipping' => "Gbigbe",
        'total' => "Lapapọ",
        'offer' => "Ìfilọ",
        'coupon' => "Kupọọnu",
        'lottery' => "Eye",
        'tax' => "Owo-ori",
        'tax_included' => "To wa ninu owo",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Ọna',
        'amount' => 'Iye',
        'giftcard' => 'Gift card',
        'payment' => 'Isanwo',
    ],


    'shop-subscription-email' => [
        'category' => "Imudojuiwọn alabapin",
        'title' => "Iwe-aṣẹ Itaja: :shop_title",
        'title-reserved' => "Iwe-aṣẹ ipamọ: :shop_title",
        'title-active' => "Iwe-aṣẹ ti nṣiṣe lọwọ: :shop_title",
        'title-finished' => "Iwe-aṣẹ ti o pari: :shop_title",
        'title-cancel' => "Fagilee iwe-aṣẹ: :shop_title",
        'message' => "Eto iwe-aṣẹ itaja rẹ ni imudojuiwọn,",
        'RESERVED' => "⚡ Eto ṣiṣe alabapin rẹ ti jẹ ** ipamọ ***.",
        'ACTIVE' => "🟢 Eto ṣiṣe alabapin rẹ ti ṣiṣẹ ** mu ṣiṣẹ ***.",
        'FINISHED' => "🚧 Eto ṣiṣe alabapin rẹ ti pari **.",
        'CANCEL' => "⛔ Eto ṣiṣe alabapin rẹ ti jẹ ** fagile **.",
    ],

    'support' => [
        'subject' => "Ile-iṣẹ atilẹyin|:name dahun",
        'category' => "Ile-iṣẹ atilẹyin",
        'title' => "O gba esi kan",
        'action' => "Ṣii abojuto itaja",
    ],

    'shop-customer-join' => [
        'subject' => "Darapọ mọ :shop_title",
        'category' => "New onibara ajoyo",
        'title' => "A ni idunnu fun ẹgbẹ rẹ",
        'action' => "Ṣabẹwo ni bayi",
    ],

    'shop-vendor-join' => [
        'subject' => "ataja Onboarding| :shop_title",
        'category' => "New ataja ajoyo",
        'title' => "A ni idunnu fun ẹgbẹ rẹ",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Ebun Kaadi :shop_title",
        'category' => "Fi titun kaadi",
        'title' => "Oriire, o ti gba kaadi ẹbun kan",
        'action' => "Raja ni bayi",
        'message' => "O ti gba kaadi ẹbun ti o tọ si :balance :currency. O le lo kaadi ẹbun yii ni ile itaja wa.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Ile-iṣẹ atilẹyin| :shop",
        'category' => "atilẹyin",
        'title' => "O gba esi kan",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Bere fun Ṣayẹwo | :order_id",
        'title' => "ibere",
        'message' => "O ti paṣẹ ni ile itaja wa. A gba aṣẹ rẹ ati pe yoo fi imeeli ranṣẹ si ọ ni kete ti isanwo naa ba ti jẹrisi."
    ,

        'payments' => 'Awọn sisanwo',
    ],

    'order-payment' => [
        'subject' => "🛍 Ijẹrisi Isanwo | :order_id",
        'title' => "Ibere owo sisan",
        'message' => "Owo sisan rẹ ti pari,<br> A ti gba aṣẹ rẹ. A yoo fi imeeli miiran silẹ fun ọ nigbati aṣẹ rẹ ba wa.",
    

        'payments' => 'Awọn sisanwo',
    ],

    'order-update' => [
        'subject' => "🛍️ Imudojuiwọn Ipo Ibere|Bere fun :order_id",
        'title' => "Bere fun Ipo Update",
        'message' => "Ibere re ti ni imudojuiwọn. O le ṣayẹwo ipo tuntun ti aṣẹ yii ninu akọọlẹ rẹ.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Ibere re wa ni isinyi fun sisẹ. A yoo sọ fun ọ nigbati o ba n murasilẹ.",
                'OrderConfirm' => "Ibere re ti wa ni timo ati igbaradi ti bere.",
                'PreparingOrder' => "Ibere re ti wa ni pese sile ati ki o yoo wa ni sowo laipe.",
                'SentOrder' => "A ti fi aṣẹ rẹ ranṣẹ. Iwọ yoo gba laipẹ.",
                'ToCustomer' => "A ti fi aṣẹ rẹ jiṣẹ. A nireti pe o gbadun rẹ!",

                'PreparingOrder-PICKUP' => "Ibere re ti wa ni pese sile. Iwọ yoo gba ifitonileti kan nigbati o ba ṣetan fun gbigba.",
                'SentOrder-PICKUP' => "Ibere ​​re ti šetan fun gbigba. Jọwọ wa si ile itaja lati gba.",
                'ToCustomer-PICKUP' => "Ibere re ti gba. A nireti pe o gbadun rẹ!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Ibere re wa ni isinyi fun sisẹ. A yoo sọ fun ọ nigbati o ba ṣetan.",
                'OrderConfirm' => "Ibere re ti wa ni timo ati igbaradi ti wa ni ilọsiwaju.",
                'PreparingOrder' => "Ibere re ti wa ni pese sile ati ki o yoo wa ni rán si nyin laipe.",
                'ToCustomer' => "Ilana foju rẹ ti jẹ jiṣẹ si akọọlẹ rẹ. E dupe!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Ibere iṣẹ rẹ wa ninu isinyi. A yoo sọ fun ọ nigbati a bẹrẹ.",
                'OrderConfirm' => "Iṣẹ rẹ ti jẹrisi ati pe a n murasilẹ lati bẹrẹ.",
                'PreparingOrder' => "A ngbaradi iṣẹ rẹ, ati pe a yoo sọ fun ọ ni kete ti o ba ti pari.",
                'ToCustomer' => "Iṣẹ rẹ ti pari. O ṣeun fun yiyan wa!"
            ],
            'FILE' => [
                'PreparingOrder' => "Faili rẹ ti wa ni ipese ati pe yoo wa laipẹ.",
                'ToCustomer' => "Faili rẹ ti šetan ati pe o ti fi jiṣẹ. O le ṣe igbasilẹ rẹ bayi."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Ibere ṣiṣe alabapin rẹ wa ninu isinyi. A yoo sọ fun ọ nigbati iṣẹ ba bẹrẹ.",
                'OrderConfirm' => "Ṣiṣe alabapin rẹ ti jẹrisi ati pe o ti ṣeto.",
                'PreparingOrder' => "A ngbaradi ṣiṣe alabapin rẹ ati pe yoo bẹrẹ laipẹ.",
                'SentOrder' => "Ṣiṣe alabapin rẹ ti muu ṣiṣẹ. Iwọ yoo gba awọn imudojuiwọn ti nlọ lọwọ.",
                'ToCustomer' => "Iṣẹ ṣiṣe alabapin rẹ ti muu ṣiṣẹ ni aṣeyọri."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Oriire :name|Iwe-ẹri tuntun: :title',
        'category' => "ORIKI, FOUCHER TITUN",
        'message' => "Hey :name,<br><br>You've received a new voucher as a gift from us! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. This voucher is worth **:price :currency**.<br><br>You've taken the first step, and we’re here to help you unlock new features with your voucher! Please login with **:email** and find your voucher in the Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congratulations!",
        'action' => "Dasibodu mi",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'E ku oriire, Eyin :name | O ti gba ebun kan',
        'category' => "Ikede ti gbigba ẹbun",
        'title' => "Awọn ẹbun fun ọ",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Awọn ẹbun",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Aṣẹ Tuntun Ti gba | :order_id",
        'title' => "New Order",
        'message' => "O ti gba aṣẹ tuntun kan. Jọwọ lọ si oju-iwe ṣiṣe aṣẹ ni ile itaja rẹ.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Rẹ kún Alaye',
        'output-form-title' => 'Ti ra alaye ohun kan',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Iroyin Osẹ :time',
        'title' => 'Osẹ-itaja išẹ Iroyin',
        'message' => "This is your store's weekly report from <b>:start</b> to <b>:end</b>. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Iroyin fifipamọ :amount rẹ ni oṣu mẹta sẹhin| :shop_title',
        'title' => 'Ijabọ akoko nipa iṣẹ iṣowo rẹ, awọn ere ati awọn ifowopamọ inawo',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Awọn iroyin ti a ti sopọ',
        'sub-title' => 'Kini ipo tuntun ti awọn akọọlẹ apamọwọ ti a ti sopọ si ile itaja mi?',
        'view-wallet' => 'Wo apamọwọ',
        'tip-title' => 'Awọn imọran pataki',
        'tip' => "Ṣeto apamọwọ Selldone ọfẹ kan ki o sopọ mọ ile itaja rẹ. Paapa ti iwọntunwọnsi rẹ jẹ odi, awọn alabara rẹ tun le raja ati sanwo laisi awọn ọran eyikeyi. Maṣe yọ ara rẹ lẹnu, awọn iṣẹ ile itaja rẹ ati data yoo tẹsiwaju laisiyonu fun oṣu 1, laisi awọn idilọwọ eyikeyi.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Sopọ si akọọlẹ'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Awọn ohun elo ti fi sori ẹrọ',
        'sub-title' => 'Akojọ awọn ohun elo ti o ti fi sii ninu ile itaja rẹ ni ọsẹ yii.',
        'tip' => "Ṣe o fẹ lati wa awọn ohun elo diẹ sii fun ile itaja rẹ?",
        'view-app-store' => 'Ṣabẹwo si Ile-itaja Ohun elo Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bots itaja rẹ',
        'sub-title' => 'Ti nṣiṣe lọwọ tita bot ninu mi itaja.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone ti pese fun ọ pẹlu awọn bot tita laifọwọyi. Gbogbo ohun ti o ni lati ṣe ni lọ si awọn Fikun-ons> Panel Bots ati mu awọn botilẹti itaja rẹ ṣiṣẹ. Ṣe akiyesi pe iṣẹ ti o yẹ gbọdọ wa ni orilẹ-ede rẹ.",
        'view-bots' => 'Ṣakoso awọn bot',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Ibaraẹnisọrọ pẹlu awọn onibara',
        'sub-title' => 'Awọn olubasọrọ melo ni Mo ti ni pẹlu awọn onibara mi ni ọsẹ yii?',
        'faqs' => 'Awon ibeere ti awon eniyan saaba ma n beere',
        'tickets' => 'Tiketi onibara',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Awọn olumulo Ipo',
        'sub-title' => 'Iṣẹ-ṣiṣe lati :start si :end',
        'users' => [
            'title' => 'Awon onibara',
            'subtitle' => 'Awọn olumulo Iforukọsilẹ',
        ],
        'views' => [
            'title' => 'Awọn abẹwo',
            'subtitle' => 'Igba melo ni o ti ṣabẹwo si ile itaja naa',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Awọn olumulo pada',

        'shop_views' => 'Itaja Wiwo',
        'baskets' => [
            'title' => 'Ohun tio wa fun rira',
            'subtitle' => 'Jabo awọn nọmba ti titun tio kẹkẹ',
        ],
        'products' => [
            'title' => 'Awọn ọja Akopọ',
            'subtitle' => 'Ipo ti awọn ọja ninu itaja nipa iru',
            'value_name' => 'Awọn ọja'
        ],
        'products_count' => 'Awọn iru ọja',
        'views_count' => 'Wiwo kika',
        'sell_count' => 'Iwọn tita',
        'send_count' => 'Iwọn gbigbe',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Gbigbe Gbigbe silẹ',
        'sub-title' => 'Igbimọ fun awọn olutaja pataki ti Sowo Sowo Selldone.',
        'total_fulfillments' => 'Lapapọ Awọn aṣẹ Gba',
        'ds_count' => 'Awọn aṣẹ ti o gba',
        'statistics_title' => 'Iroyin gba bibere',
        'ds_cancels' => 'Fagilee nipasẹ eniti o ni wiwo',
        'ds_rejects' => 'Fagilee nipasẹ Rẹ',
        'tip' => "Ṣe o jẹ olutaja nla kan pẹlu ile itaja, ile-iṣẹ, tabi olupin ọja? O le faagun arọwọto rẹ nipa fifun awọn ọja rẹ si awọn ti o ntaa miiran nipasẹ Selldone's Drop Sopping iṣẹ. Imeeli wa ni support@selldone.com lati ni imọ siwaju sii.",
        'view-drop-shipping-panel' => 'Buwolu wọle si osunwon nronu',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Oṣuwọn paṣipaarọ',
        'sub-title' => 'Akojọ ti awọn oṣuwọn iyipada owo tuntun ninu ile itaja rẹ.',
        'from' => 'Orisun Owo',
        'to' => 'Owo nlo',
        'rate' => 'Oṣuwọn iyipada',
        'view-exchange-panel' => 'Ṣakoso Awọn Oṣuwọn Iyipada owo',
    

        'vew-exchange-panel' => 'nronu iṣakoso oṣuwọn paṣipaarọ',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'iwé siwe',
        'sub-title' => 'Awọn akosemose wo ni o ṣiṣẹ lori ile itaja mi?',
        'cost' => 'Iye adehun',
        'duration' => 'Iye akoko',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Fagilee Ọjọ',
        'end_at' => 'Deeti ifijiṣẹ',
        'tip' => 'O le bẹwẹ awọn alamọja ti o dara julọ ni Selldone lati ṣe idagbasoke iṣowo rẹ.',
        'view-experts' => 'Tẹ lati bẹrẹ.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Ti nṣiṣe lọwọ Isanwo Gateways lori rẹ itaja :shop',
        'tip-title' => 'Awọn imọran pataki',
        'tip' => "Lọ si oju-iwe iṣakoso ọna abawọle ninu ile itaja rẹ ki o ṣafikun o kere ju ibudo kan ni iṣẹju diẹ. Awọn alabara rẹ fẹran lati sanwo ni iyara ati ni aabo nipasẹ awọn ọna abawọle ori ayelujara.",
        'view-shop-gateways' => 'Buwolu wọle si mi itaja portal isakoso.',
        'view-gateways' => 'Wo awọn ẹnu-ọna diẹ sii',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Awọn ibere',
        'sub-title' => 'Akojọ awọn aṣẹ ti Mo gba ni ọsẹ yii.',
        'total_baskets' => 'Lapapọ Awọn aṣẹ',
        'total_posBaskets' => 'Lapapọ Owo Bibere',
        'pos-title' => 'POS itaja Apoti',
        'chart-label' => 'Awọn aṣẹ ti pari (awọn aṣẹ wọnyi ko jẹ dandan san!)',
        'tip-title' => 'O yẹ ki o gbiyanju diẹ sii ...',
        'tip' => "Ko si aṣeyọri ti o rọrun.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Ile-iṣẹ iṣelọpọ',
        'sub-title' => 'Elo ni aṣẹ ti a ṣe ni ile itaja ni ọsẹ yii?',
        'tip-title' => 'O ko ni tita kan!',
        'tip' => "Laanu o ko ni tita kankan ni ọsẹ yii. O nilo lati gba diẹ sii si ile itaja rẹ. O le ṣafikun awọn ọja diẹ sii, yan awọn aworan to dara julọ tabi kọ awọn apejuwe to dara julọ fun awọn ọja rẹ. Ṣe akiyesi iṣẹ ni kikun akoko fun iṣowo rẹ. Ti o ba ṣe daradara ati pe ko ni ibanujẹ, iwọ yoo ṣaṣeyọri.",
        'view-process-center' => 'Wo aarin ilana',
        'return' => [
            'title' => 'Pada Bere fun',
            'subtitle' => 'Iroyin pada bibere.',
            'tip-title' => 'Nje o mo wipe...',
            'tip' => "O le ṣẹda bi ọpọlọpọ awọn iforukọsilẹ owo bi o ṣe nilo pẹlu Selldone POS! Boya tabulẹti rẹ, alagbeka, tabi kọǹpútà alágbèéká, o le yi ẹrọ eyikeyi pada si aaye tita ọja rẹ. O rọrun, yara lati ṣeto, ati murasilẹ ni kikun fun olupin rẹ. Bẹrẹ lilo loni!",
            'view-pos' => 'Buwolu wọle si Mi Online itaja Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Awọn akoko',
        'sub-title' => 'Igba melo ni Mo ṣabẹwo si ile itaja mi?',
        'countries-title' => 'Awọn orilẹ-ede wo ni wọn ti ṣabẹwo julọ?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ṣe o fẹ lati ni owo laisi lilo owo kan?',
        'message' => "Dear :name, o le lọ si Dashboard> Demonetization ki o si ṣẹda ọna asopọ itọkasi kan. Fi ọna asopọ ranṣẹ si awọn ọrẹ rẹ, O gba awọn kaadi ẹbun Selldone ati ipin ogorun awọn sisanwo ọrẹ rẹ. Ṣe akiyesi pe kaadi ẹbun naa yoo firanṣẹ si iwọ ati ọrẹ rẹ.",
        'action' => 'Wo ọna asopọ ifihan mi',
        'mail-clip' => "<b style='color: #C2185B'>Pataki:</b> Ti o ba lo awọn iṣẹ imeeli gẹgẹbi Gmail ti o fi opin si ipari imeeli, wa aṣayan atẹle ni ipari imeeli lati ṣafihan ijabọ kikun ki o tẹ lori rẹ:",

        'no-coin-reward' => "<b style='color: #C2185B'>Ma binu:</b> Iṣẹ rẹ ko pade ibeere lati gba ẹsan SEL Coins ọfẹ. Gbiyanju siwaju sii ki o ta diẹ sii lori ile itaja rẹ fun akoko ti n bọ.",
        'yes-coin-reward' => "<b style='color: #4CAF50'> Oriire:</b> Ise nla! Da lori iṣẹ ṣiṣe to dayato rẹ, a ti ka awọn owó :amount SEL si akọọlẹ rẹ bi ẹsan.",

        'need-buy-license' => "<b>Ipele Iṣowo Rẹ:</b> O dabi pe o ko forukọsilẹ eyikeyi ero ṣiṣe alabapin fun oju opo wẹẹbu rẹ sibẹsibẹ! Ṣe igbesoke ni bayi lati ṣii awọn ẹya diẹ sii fun :amount kan fun oṣu kan ti o ba sanwo ni ọdọọdun.",
        'not-afford-message' => "Ti o ba n dojukọ awọn ọran eyikeyi pẹlu isanwo tabi ko le ni anfani ni bayi, ma ṣe ṣiyemeji lati kan si wa ni support@selldone.com.",
        'add-domain' => "<b>Kilode ti o ko ni aaye aṣa fun iṣowo rẹ?</b><br> Fi ìkápá kan kun oju opo wẹẹbu rẹ ni bayi; ofe ni!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone jẹ a<del> ọja</del> <span style = 'color: forestgreen'>awujo</span> .<br> Jẹ Olutaja ọjọgbọn!",
        'message' => "Tẹle awọn oju-iwe osise ti Selldone lori Twitter, LinkedIn ati awọn nẹtiwọọki awujọ. Firanṣẹ eyikeyi awọn asọye, awọn ibeere tabi awọn atako tabi kopa ninu awọn ijiroro nipa Selldone naa. A tun jẹ apakan ti agbegbe ti Selldone ti <b>o ṣe</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Titun Avokado Bibere Gba|:shop_title :time',
        'title' => "Ijabọ iṣẹ ṣiṣe fun awọn wakati 24 sẹhin",
        'message' => "Awọn alabara rẹ n duro de awọn aṣẹ rẹ lati ṣe atunyẹwo ati idiyele. Dahun si awọn ibeere awọn alabara rẹ ni kete bi o ti ṣee lati gba awọn tita diẹ sii.",
        'card_title' => "Awọn ibere ni isinyi",
        'card_subtitle' => "Niwon :date",

        'card_payed' => "Awọn ibere ti a sanwo"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Fesi si ifiweranṣẹ rẹ ni :community_title',
        'title' => ":name ati :count awọn miiran ti darapọ mọ ibaraẹnisọrọ lori awọn ifiweranṣẹ rẹ!",
        'message' => "Bawo :name, awọn ifiweranṣẹ rẹ n gba akiyesi! O ti gba awọn asọye ni agbegbe wa. Wọle si akọọlẹ rẹ lati darapọ mọ ijiroro naa ki o wo ohun ti gbogbo eniyan n sọ.",
        'title-simple' => ":name ti ṣe asọye lori ifiweranṣẹ rẹ!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Fesi si koko rẹ :topic_title',
        'title' => ":name, ati :count awọn miiran dahun lori koko rẹ.",
        'message' => "Bawo :name, koko-ọrọ rẹ n gba akiyesi! O ti gba awọn idahun ni agbegbe wa. Wọle si akọọlẹ rẹ lati darapọ mọ ijiroro naa ki o wo ohun ti gbogbo eniyan n sọ.",
        'title-simple' => ":name dahun lori koko rẹ.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Wọle Tuntun :name',
        'category' => 'Awọn iwifunni aabo',
        'title' => "Buwolu wọle si Account",
        'message' => "Eyin :name, o ti buwolu wọle si akọọlẹ Selldone rẹ.",   // Login in selldone (seller)
        'message-shop' => "Eyin :name, o ti wọle si :shop_title.",  // Login in shop (buyer)

        'footer' => "Ti o ko ba wọle, jọwọ yi ọrọ igbaniwọle rẹ pada.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Yiyọ kuro",
        'deposit' => "Idogo",

        'withdraw_subject' => "Yiyọ kuro lati akọọlẹ :account",
        'deposit_subject' => "Idogo si iroyin :account",

        'message' => "Awọn gbigbe owo ti a ti ṣe pẹlu awọn wọnyi ni pato.",

        'type' => "Idunadura iru",

        'from' => "Orisun iroyin",
        'to' => "Destination account",

        'desc' => "Idunadura apejuwe",
        'action' => "Wo idunadura",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Pataki! Awọn ofin ti o ṣẹ| :shop",
        'category' => "Lominu ni alaye",
        'title' => "Ile itaja rẹ ti jẹ ijiya",
        'action' => "Ṣii Dasibodu itaja",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter ti pe e lati darapo mo Selldone",
        'title' => ":name ti ran ọ :amount lati ṣe iranlọwọ lati ṣe ifilọlẹ ile itaja ori ayelujara tuntun rẹ ati monetize rẹ!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Gba ìkésíni",
        'owner' => "Eni ti",
        'join-date' => "Lori Selldone niwon",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Ọna asopọ imularada| :shop",
        'category' => "Aabo itaja",
        'title' => "Itaja ọna asopọ imularada ti <b>:shop_name</b> .",
        'message' => "Imeeli yii ni a fi ranṣẹ si ọ nitori pe o beere lati mu ile itaja rẹ pada sipo. Tite lori ọna asopọ ni isalẹ yoo gba ile itaja rẹ pada ati gbogbo data ti o jẹ tirẹ.",
        'action' => "Jẹrisi Ìgbàpadà itaja",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Elo owo ni Selldone fipamọ fun iṣowo rẹ?',
        'sub-title' => 'Lati ọjọ :start si :end',
        'infrastructure' => [
            'title' => 'Amayederun',
            'subtitle' => 'Awọn olupin, CDN, Ibi ipamọ, ati awọn iṣẹ awọsanma miiran',
        ],
        'experts' => [
            'title' => 'amoye & Osise',
            'subtitle' => 'Awọn olupilẹṣẹ, itọju, ati atilẹyin',
        ],
        'total_save' => 'Lapapọ ti o ti fipamọ owo'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Išẹ rẹ',
        'sub-title' => 'Akopọ iṣowo lati :start si :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Awọn olumulo pada',

        'shop_views' => 'Itaja Wiwo',
        'baskets' => [
            'title' => 'Ohun tio wa fun rira',
            'subtitle' => 'Jabo awọn nọmba ti titun tio kẹkẹ',

        ],
        'products' => [
            'title' => 'Awọn ọja Akopọ',
            'subtitle' => 'Ipo ti awọn ọja ninu itaja nipa iru',
            'value_name' => 'Awọn ọja'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Lapapọ awọn iwo oju-iwe wẹẹbu',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "O ti gba aṣẹ tuntun kan. Jọwọ lọ si oju-iwe sisẹ aṣẹ ni nronu ataja rẹ.",
        'subject' => "🛍 Aṣẹ Tuntun Ti gba | :order_id",
        'your_revenue' => "Owo-wiwọle Rẹ",
    ],
    'vendor-invite' => [
        'title' => 'Olutaja ifiwepe',
        'message' => "O ti gba ifiwepe lati di olutaja ti :shop_name. O le gba tabi kọ nipa lilo awọn bọtini ni isalẹ.",
        'subject' => ":shop_name |Pipe si lati di olutaja wa",
        'accept' => "Gba & Di Olutaja",
        'reject' => "Kọ",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Ifiwepe lati Darapọ mọ Egbe Wa',
        'message' => "O ti pe ọ lati darapọ mọ :vendor_name ni :shop_name. O le gba tabi kọ ifiwepe yii nipa lilo awọn bọtini ni isalẹ.",
        'subject' => "Pipe si lati Darapọ mọ :vendor_name|Di omo egbe",
        'accept' => "Gba & Darapọ mọ Ẹgbẹ naa",
        'reject' => "Kọ",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Koodu iwọle rẹ fun :shop",
        'header-message' => "A n fi imeeli ranṣẹ si ọ nitori pe o beere koodu iwọle kan fun ile itaja naa. Jọwọ wa Ọrọigbaniwọle Igba Kan (OTP) ni isalẹ:",
        'footer-message' => "Koodu yii yoo wulo fun iṣẹju mẹwa 10. Ti o ko ba beere koodu iwọle yii, jọwọ foju imeeli yii."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Daju imeeli rẹ| :shop",
        'title' => 'Imeeli Ijerisi',
        'header-message' => "Hi :name,<br>Jọwọ jẹri pe **:email** ni adirẹsi imeeli rẹ nipa titẹ bọtini isalẹ tabi lilo ọna asopọ ni isalẹ laarin awọn wakati 48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Awọn imudojuiwọn ọja| :shop",
        'title' => "Imudojuiwọn lori Ipo Ọja - Awọn wakati 24 kẹhin",
        'message' => "Mo nireti pe ifiranṣẹ yii wa ọ daradara. Eyi jẹ imudojuiwọn kukuru lati sọ fun ọ nipa ipo awọn ọja rẹ lori pẹpẹ wa ni awọn wakati 24 sẹhin.\nLakoko yii, awọn ayipada ti wa ni ipo ti diẹ ninu awọn ọja. Awọn ayipada wọnyi le jẹ nitori awọn rira, awọn imudojuiwọn ọja, tabi awọn iṣẹlẹ miiran ti o jọmọ.\nFun alaye diẹ sii nipa ọja kọọkan, jọwọ wọle si akọọlẹ rẹ ki o ṣayẹwo apakan 'Ipo Ọja'.",
        'action' => "Ṣii Igbimọ Olutaja",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Awọn aṣẹ olopobobo ti gba| :shop | :date",
        'title' => "Olopobobo iwifunni",
        'message' => "O ti gba awọn ibere olopobobo kan. Jọwọ ṣabẹwo si oju-iwe ṣiṣe aṣẹ ni nronu rẹ fun awọn alaye siwaju sii. O tun le ṣe igbasilẹ atokọ aṣẹ nipasẹ ọna asopọ to ni aabo ti a pese, wulo fun awọn ọjọ 7.<br><br>\n        <b>PATAKI:</b> Ọna asopọ yii wulo fun awọn ọjọ 7.<br>\n        Ọna asopọ yii jẹ agbara, nitorinaa ni gbogbo igba ti o ba tẹ, iwọ yoo gba awọn aṣẹ imudojuiwọn julọ fun ọjọ kan pato. <b>O tumọ si ti ipo isanwo aṣẹ ba yipada si kọ, iwọ kii yoo rii aṣẹ yẹn ninu CSV ti a gba lati ayelujara, tabi ti aṣẹ naa ba san, yoo han ninu atokọ naa.</b><br><br>\n        <ul>\n            <li> CSV ni awọn aṣẹ isanwo pẹlu ọjọ ti a fi pamọ sinu :date.</li>\n            <li> Ọjọ ti a fi pamọ jẹ ọjọ ti olumulo tẹ ibi isanwo lori oju-iwe aṣẹ.</li>\n        </ul>\n        <b>Lati ṣe idiwọ awọn aṣẹ ẹda-ẹda, ṣayẹwo nigbagbogbo Bere fun ID ṣaaju fifiranṣẹ.</b>",
        'action' => "Gbigba Akojọ Bere fun",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Diẹ ninu awọn ohun kan ninu aṣẹ rẹ ko gba ati pe a ko le fi jiṣẹ. Iye fun awọn nkan wọnyi yoo san pada si kaadi rẹ laipẹ."
    ]

];
