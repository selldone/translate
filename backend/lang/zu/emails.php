<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Lo mlayezo wamukela umthengi omusha esitolo.',
        ShopMailTemplateCodes::OrderCheckout => 'Lesi saziso sithunyelwa uma umthengi eqinisekisa i-oda.',
        ShopMailTemplateCodes::OrderPayment => 'Lesi saziso siqinisekisa inkokhelo eyimpumelelo eyenziwe yikhasimende.',
        ShopMailTemplateCodes::OrderUpdate => 'Lo mlayezo uthunyelwe ukubuyekeza umthengi ngesimo se-oda lakhe.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Lo mlayezo uthunyelwa kumthengisi ukuze amazise nge-oda eliqinisekisiwe.',
        ShopMailTemplateCodes::PosCheckout => 'Lesi saziso sithunyelwa ukuze kuqinisekiswe iphuzu lokuthengisa lomthengi.
I-',
        ShopMailTemplateCodes::PosPayment => 'Lesi saziso siqinisekisa iphuzu lenkokhelo yokuthengisa eyenziwe umthengi.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Lo mlayezo wazisa umthengisi ngokuthenga okwenziwa endaweni yakhe yokuthengisa.',
        ShopMailTemplateCodes::ShopContact => 'Lesi saziso sithunyelwa uma ifomu lokuxhumana selithunyelwe.',
        ShopMailTemplateCodes::ShopGiftCard => 'Lesi saziso sazisa umsebenzisi ukuthi uthole ikhadi lesipho.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Lo mlayezo wamukela umdayisi omusha esitolo.',
        ShopMailTemplateCodes::ShopVendorInvite => "Lo mlayezo uthunyelwe ukuze umeme umdayisi ukuthi ajoyine imakethe yakho.",
        ShopMailTemplateCodes::ShopVendorOrder => "Lo mlayezo uthunyelwa kumthengisi uma i-oda litholwa ngezimo ezikhokhelwayo noma ze-Cash on Delivery (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Kuthunyelwa nsuku zonke ukuze kubuyekezwe abathengisi ngesimo semikhiqizo yabo.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Lo mlayezo uthunyelwe ukumema umdayisi ukuthi ajoyine indawo yakho yemakethe.",

        ShopMailTemplateCodes::UserLogin => "Yazisa umsebenzisi ngemininingwane yokungena, okuhlanganisa ikheli le-IP, idethi, nedivayisi, ngezinjongo zokuphepha.",
        ShopMailTemplateCodes::LoginCode => "Thumela ikhodi yephasiwedi yesikhathi esisodwa ukuze abasebenzisi bangene esitolo.",

        ShopMailTemplateCodes::EmailVerifyLink => "Thumela isixhumanisi ukuze uqinisekise ikheli le-imeyili lomsebenzisi. Le imeyili ithunyelwa uma umsebenzisi ebhalisa nge-SMS futhi efaka i-imeyili yakhe. Ayithunyelwa lapho umsebenzisi ebhalisa ngokuqondile ngokungena komphakathi noma i-imeyili.",

        ShopMailTemplateCodes::EmailBulkOrder => "Thumela uhlu lwama-oda atholiwe nakhokhelwayo ngobuningi bosuku oluthile."


    ,

    ],


    'global' => [
        'greetings' => 'Sawubona, :name!',
        'end-statement' => 'Ithimba labasekeli',

        'receiver_name' => 'Sawubona :user_name',
        'footer-help' => "Udinga usizo? Buza kokuthi [support@selldone.com](mailto:support@selldone.com) noma uvakashele [isikhungo sethu sosizo](https://selldone.com/community).",
        'selldone-team' => 'Iqembu le-Selldone',
        'footer-shop' => "Uma udinga usizo nganoma yini sicela ungangabazi ukusithumelela i-imeyili: :shop_mail",
        'accept' => "Yamukela",
        'reject' => "Yenqaba",
        'verify' => "qinisekisa",
        'title' => "Isihloko",
        'value' => "Inani",
        'description' => "Incazelo",
        'shop' => "Thenga",
        'shop-info' => "Gcina Ulwazi",
        'user' => "Umsebenzisi",
        'user-info' => "Ulwazi lwe-akhawunti",
        'license' => "Ilayisensi",
        'status' => "Isimo",
        'start' => "Qala",
        'end' => "Qeda",
        'renewal' => "Ukuvuselela",
        'view' => "Buka",

        'balance' => "Ibhalansi",
        'card_number' => "Inombolo yekhadi",
        'cvv' => "Cvv",
        'expire_date' => "Idethi yokuphelelwa yisikhathi",

        'Dashboard' => "Ideshibhodi",
        'order' => "ukuhleleka",
        'view_order' => "Buka i-oda",
        'pay_now' => "Pay now",

        'official_selldone' => "KUDAYISWA NGOKUSEMTHETHWENI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Imali",
        'free-balance' => "Ibhalansi yamahhala",
        'locked-balance' => "Ibhalansi ekhiyiwe",
        'bot' => "I-Bot",
        'requests' => "Izicelo",
        'baskets' => 'Izinqola',
        'physical' => "Okomzimba",
        'virtual' => "Okubonakalayo",
        'file' => "Ifayela",
        'service' => "Isevisi",
        'fulfillment' => "Ukugcwaliseka",
        'open' => "Vula",
        'reserved' => "Kugciniwe",
        'canceled' => "Kukhanseliwe",
        'payed' => "Ikhokhiwe",
        'cod' => "COD",
        'orders-count' => 'Ama-oda',
        'payments-count' => 'Izinkokhelo',
        'confirms-count' => 'Iyaqinisekisa',
        'sends-count' => 'Iyathumela',
        'delivers-count' => 'Idiliva',
        'count' => 'Bala',
        'transactions-count' => 'Isibalo sokwenziwe',
        'success-transactions' => 'Ukuphumelela kokwenziwe',
        'total-amount' => 'Ingqikithi yemali',
        'amount' => 'Inani',
        'wage' => 'Umholo',
        'debug' => 'Susa iphutha',
        'pos' => 'POS',
        'live' => 'Phila',
        'CheckQueue' => 'Hlola ulayini',
        'OrderConfirm' => 'Qinisekisa i-oda',
        'PreparingOrder' => 'Ilungiselela i-oda',
        'SentOrder' => 'I-oda elithunyelwe',
        'ToCustomer' => 'Kulethwe kukhasimende',
        'Pending' => 'Kusalindile',
        'Accepted' => 'Kwamukelwe',
        'Rejected' => 'Kwaliwe',
        'pc' => 'PC',
        'tablet' => 'Ithebhulethi',
        'phone' => 'Ucingo',
        'total' => 'Isamba',
        'view-detail' => 'Buka imininingwane',
        'empty' => 'Akunalutho',
        'dropshipping' => 'I-Dropshipping',
        'reply' => 'Phendula',
        'reactions' => 'Ukusabela',
        'Comments' => 'Amazwana',
        'last-comment' => 'Amazwana okugcina',
        'response-to' => 'Impendulo ku',
        'posts' => 'Okuthunyelwe',
        'post' => 'Thumela',

        'name' => 'Igama',
        'email' => 'I-imeyili',
        'type' => 'uhlobo',
        'device' => 'Idivayisi',
        'platform' => 'Inkundla',
        'browser' => 'Isiphequluli',
        'time' => 'Isikhathi',
        'Wallet' => 'Isikhwama semali',
        'date' => 'Usuku',

        'account' => 'I-akhawunti',
        'transaction' => 'Okwenziwayo',
        'fee' => 'Imali',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Umthethosivivinywa',
        'category' => 'Isigaba',
        'password' => 'Iphasiwedi',
        'verify-login' => "Qinisekisa & Ngena ngemvume",
        'url' => 'URL',
        'avocado' => 'Ukwatapheya',
        'hyper' => 'I-Hyper',
        'buy-now' => "Thenga Manje",
        'add-domain' => "Add Domain",
        'views' => 'Ukubuka',


        'country' => 'Izwe',
        'address' => 'ikheli',
        'postal' => 'I-Postal Code',
        'building_no' => 'Isakhiwo #',
        'building_unit' => 'Iyunithi #',
        'message' => 'Umlayezo',


        'customer' => 'Ikhasimende',
        'cart-items' => 'Izinto zenqola',
        'payment' => 'Inkokhelo',
        'receiver' => 'Umamukeli',
        'virtual-items' => 'Izinto ezibonakalayo',
        'no-payment' => 'Ayikho inkokhelo!',

        'enable' => 'Vumela',
        'access' => 'Ukufinyelela',
        'bank' => 'Ulwazi lwebhange',

        'vendor' => 'Umthengisi',

        'view_content' => "Buka okuqukethwe okugcwele",
        'files' => 'Amafayela',
        'download' => 'Landa',
        'file_name' => 'Igama lefayela',
        'file_size' => 'Usayizi',

        'subscription' => 'Ukubhalisa',
        'products' => 'Imikhiqizo',
        'vendor_products' => 'Imikhiqizo yomthengisi',

        'pickup' => 'Ukulandwa',

        'minutes' => 'Amaminithi',
        'hours' => 'Amahora
I-',

        'refund' => 'Imbuyiselo',
        'recipient_address' => 'Ikheli Lomamukeli',
        'signature' => 'Isiginesha',
        'blockchain' => 'I-Blockchain',
        'details' => 'Imininingwane',


    

        'Shop' => 'Thenga',
        'dashboard' => 'ideshibhodi',
        'comments' => 'imibono',
        'wallet' => 'isikhwama semali',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Umbiko Wokusebenza, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Umbiko Wesizini, Selldone'
        ],
        'Onboarding' => [
            'id' => 'sawubona',
            'name' => 'Vuma, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Sekela i-:name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Qinisekisa, Selldone'
        ],
        'Welcome' => [
            'id' => 'sawubona',
            'name' => 'Umphakathi, Selldone'
        ],
        'NewShop' => [
            'id' => 'abathengisi',
            'name' => 'Vuma, Selldone'
        ],
        'Approve' => [
            'id' => 'vuma',
            'name' => 'Vuma, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Ukuphathwa kwama-oda :name'
        ],

        'Recovery' => [
            'id' => 'ukululama',
            'name' => 'Ithimba Lokubuyisela I-Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Kusalindile ⌛',
        'PAYED' => 'Ikhokhiwe ✅',
        'CANCELED' => 'Kukhanseliwe ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Umlawuli',
            'OFFICER' => 'Isikhulu kanye noSupervisor',
            'AUDITING' => 'Umphathi wokucwaningwa kwamabhuku',
            'EMPLOYEE' => 'Isisebenzi',
            'PRODUCT' => 'Umphathi wemikhiqizo',
            'CONTENT' => 'Umphathi wokuqukethwe',
            'MARKETING' => 'Umphathi wezokumaketha',
            'VIEWER' => 'Isibukeli',

        ],
        'subject' => "U-:inviter ukumeme njengo-:level| :shop",
        'category' => "Isimemo sabasebenzi",
        'title' => "Umenywe <b>:shop_name</b> njenge <b>:level</b> .",
        'message' => "Uthole isimemo sokusebenzisana neqembu le-<b>:shop_title</b> ebhizinisini. Unenketho yokwamukela noma ukwenqaba lesi sipho. Uma ukhetha ukwamukela, sicela ungene ngemvume kusevisi ye-Selldone ukuze uqinisekise isinqumo sakho. Ngemva kokuqinisekisa, uzothola ukufinyelela esigabeni sokuphatha isitolo.",

    ],

    'welcome-email' => [
        'subject' => "👋 Siyakwamukela :name, Masiqale nge-Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Siyakwamukela ku-Selldone\nI-",
        'message' => "Siyabonga ngokukhetha i-Selldone! Manje usuyingxenye yomphakathi onohlonze oxhumanisa abathengisi bomhlaba kumakhasimende, amabhizinisi endawo namabhizinisi, kanye nabantu ngabanye nezinkampani. Wonke amathuluzi wethu we-Master and Pro ayatholakala kuwe ** mahhala ** futhi ** angenamkhawulo **. Sikhona ukuzokweseka futhi sikuvulele iminyango yempumelelo yakho.",

        'index' => "Isinyathelo :step.",

        'step-domain' => [
            'title' => 'Engeza Isizinda Sakho Ngokwezifiso',
            'message' => "Ukuze uqalise, engeza isizinda sakho ngokwezifiso mahhala Kudeshibhodi Yesitolo ngaphansi kokuthi Izilungiselelo > Izilungiselelo Zezizinda.",
            'action' => 'Phatha Izizinda Zami',
        ],
        'step-landing' => [
            'title' => 'Yenza ngokwezifiso Ikhasi Lakho Lasekhaya',
            'message' => "Yenza ngokwezifiso ikhasi lakho lasekhaya ngokuya kokuthi Ideshibhodi > Amakhasi. Khetha ikhasi lokufika noma dala elisha. Kulula futhi kunembile, futhi ungaqala ukusebenza kukho ngaso leso sikhathi.",
            'action' => 'Enza ngendlela oyifisayo Ikhasi lami lokufika',
        ],
        'step-payment' => [
            'title' => 'Setha Izindlela Zokukhokha',
            'message' => "Qala ukwamukela izinkokhelo ngokuqondile ku-akhawunti yakho yasebhange. Ukuze uxhume abahlinzeki bakho bezinkokhelo abanjengo-Stripe, PayPal, nokuningi, vakashela kokuthi Ideshibhodi > Accounting > Gateway.",
            'action' => 'Engeza Izindlela Zokukhokha',
        ],
        'step-products' => [
            'title' => 'Engeza Imikhiqizo Yakho',
            'message' => "Engeza kalula imikhiqizo nezigaba kokuthi Ideshibhodi > Imikhiqizo. Kufana nokuphatha amafayela namafolda ku-PC yakho – ukuhudula nokuwisa sekumi ngomumo. Ungaphinda ungenise imikhiqizo ngobuningi usebenzisa i-Excel. Isifanekiso esiyisampula siyatholakala ukukusiza ukuthi uqalise.",
            'action' => 'Phatha Imikhiqizo Yami',
        ],
        'step-shipping' => [
            'title' => 'Setha Izindlela Zokuthumela',
            'message' => "Ukuze ukhokhise amakhasimende ngokuthumela, chaza izindlela zakho zokuthumela kokuthi Ideshibhodi > Logistic > Ukuthumela. Ungasetha amanani ahlukene nosekelo lwezindawo ezahlukahlukene. Ungakhohlwa ukusetha imvelaphi yakho ye-warehouse kokuthi Ideshibhodi > Logistic > I-Warehouse.",
            'action' => 'Phatha Izindlela Zokuthumela',
        ],
    

        'seller' => [
            'title' => 'Ingabe ungumthengisi?',
            'message' => 'Ukuze uqale ukuthengisa, faka ideshibhodi yakho ku-Selldone usebenzisa isixhumanisi esingezansi bese udala isitolo sakho sokuqala mahhala ngokuphelele. Lokhu kuzothatha imizuzu embalwa futhi uzoba nesitolo sakho kanye nesizinda se-inthanethi. Sizobe sesikuqondisa ezinyathelweni ezilandelayo futhi uthole isango lokukhokha.',
            'action' => 'Ngena kudeshibhodi yami',
        ],
        'buyer' => [
            'title' => 'Ngingumthengi',
            'message' => 'Siyakuhalalisela. Uma usuyilungu le-Selldone, uzosusa zonke izinkinga zobulungu kanye nokuqinisekisa ezitolo eziku-inthanethi. Ukuze uzuze kunoma yisiphi isitolo nesayithi elisebenzisa inkundla ye-Selldone, ungangena ngokuchofoza okukodwa futhi wenze ukuthenga kwakho kube lula, kusheshe futhi kuphephe.',
        ],
    ],


    'charge-account' => [
        'category' => 'I-Wallet > I-akhawunti > Shaja',
        'title' => "Inkokhelo Yempumelelo",
        'message' => "I-akhawunti yakho ethi <b>:account_number</b> isikhokhiswe ngempumelelo <b>:amount</b> ngempumelelo.",
        'account' => 'I-akhawunti',
        'charge' => 'Shaja',
        'balance' => 'Ibhalansi',
        'footer' => "Yenza ibhizinisi libe lula, lifinyeleleke, futhi lifinyeleleke kunoma ubani emhlabeni jikelele."
    ],

    'verify-email' => [
        'subject' => "🙌 Qedela ukubhalisa kwakho ku-Selldone! Qinisekisa isixhumanisi.",
        'category' => "USEKUDE ISINYATHELO ESISODWA",
        'title' => "Qinisekisa ikheli lakho le-imeyili",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Uma unenkinga ngokuchofoza inkinobho ethi Qinisekisa, kopisha bese unamathisele i-URL ngezansi esipheqululini sakho sewebhu: :activation_url",
        'next-step' => "Okulandelayo, sizobe sikuthumelela izinto eziwusizo kanye nomhlahlandlela wesinyathelo ngesinyathelo ukwenza kube lula kuwe ukuthi ungeze isizinda sakho ngokwezifiso, umise izinkokhelo, ungeze imikhiqizo, futhi uthole i-oda lakho lokuqala.",

    ],
    'verify-email-code' => [
        'subject' => "Ikhodi yokuqinisekisa ye-:name",
        'category' => "SECURITY",
        'title' => "Ikhodi yokuqinisekisa nge-imeyili",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Isitolo Sakho Silungile| :name",
        'category' => "USEKUDE ISINYATHELO ESISODWA",
        'title' => "Ukusetha kuqediwe",
        'account_title' => "I-akhawunti yakho",
        'account_msg' => "Qinisekisa futhi ungene ngemvume ku-akhawunti yakho ngalolu lwazi.",
        'shop_msg' => "Ulwazi lwe-akhawunti ohlelweni lokusebenza lwebhizinisi le-Selldone.",

    ],

    'reset2fa' => [
        'category' => "UKUPHEPHA UMYALEZO OSEMTHETHWENI",
        'title' => "Cela ukuvala ukungena kwezinyathelo ezi-2",
        'message' => "You are receiving this email because we received a request to reset two-factor authentication for **:name** account with **:email** email.<br><br>We found the following details for your account:",
        'footer' => "Uma ungazange ucele ukusethwa kabusha kwephasiwedi, asikho esinye isenzo esidingekayo.",
        'action' => 'Khubaza ukungena kwezinyathelo ezimbili',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Isitolo sakho sesilungile manje!",
        'category' => "UZALWE ISITOLO ESISHA SE-ONLINE EMHLABENI",
        'title' => "Halala, :name!",
        'message' => "<b>Halala, :name! Ibhizinisi lakho elisha le-inthanethi manje selibukhoma!</b> Sijabule ukukwamukela emphakathini wabadayisi. Uthathe isinyathelo sokuqala esiholela empumelelweni, futhi silapha ukuze sikusize ngaso sonke isikhathi.<br>Manje njengoba isitolo sakho sesilungile, masiqinisekise ukuthi usukulungele ukuthola izinkokhelo ngokuqondile kumakhasimende akho futhi uqale ukukhulisa umbuso wakho. Uma kwenzeka udinga usizo, asikutholi umlayezo—ithimba lethu labasekeli lihlala likhona kuwe.<br><br><b>Izinyathelo Ezilandelayo Ezibalulekile:</b> Ukuze uqale, qiniseka ukuthi usulungele ukuthola izinkokhelo nokusebenza kahle. Sizokuqondisa esigabeni ngasinye ukuze wenze isitolo sakho sisebenze kalula.",
        'pdf-book' => "Ungaphuthelwa incwadi yesandla enamathiselwe: Yenza Ibhizinisi Lakho Njengomdlalo",

        'account' => [
            'title' => 'Isinyathelo 1: Dala i-akhawunti ku-wallet ye-Selldone',
            'message' => "Ukuze uqale, dala i-akhawunti esikhwameni sakho se-Selldone. Lapha yilapho imali yakho izodonswa khona, futhi yilapho uzogcwalisa khona ukuze ugcine isitolo sakho sisebenza kahle. Uma ibhalansi yakho ike yaba yimbi, ungakhathazeki! Isitolo sakho sizoqhubeka nokusebenza ngaphandle kokuphazamiseka.\nI-",
            'action' => 'Ngena ku-wallet',
        ],

        'shop-account' => [
            'title' => 'Isinyathelo sesi-2: xhuma i-akhawunti esitolo',
            'message' => "Okulandelayo, xhuma i-akhawunti yakho ye-wallet esitolo sakho. Hamba ku-<b>Store > Accounting > Invoice</b>, bese uxhuma isikhwama sakho semali. Lokhu kuqinisekisa ukuthi zonke izinkokhelo zamakhasimende zifakwa ngokuqondile ku-akhawunti yakho yasebhange—I-Selldone ayidonsi noma yimaphi amanani enzuzweni yakho.",
            'action' => 'Iphaneli ye-invoyisi yokugcina',
        ],

        'gateway' => [
            'title' => 'Isinyathelo sesi-3: Xhuma Isango Lokukhokha Ku-inthanethi',
            'message' => "Manje, asisethe isango lakho lokukhokha ku-inthanethi. Iya ku-<b>Store > Accounting > Port</b> bese uchofoza ku-<b>Engeza Imbobo Entsha</b>. Khetha uhlobo lwemali yakho, futhi uzobona uhlu lwamasango okukhokha atholakalayo. Ukuxhuma isango kuyashesha futhi kulula, kodwa uma udinga noma yiluphi usizo, zizwe ukhululekile ukuhlola imihlahlandlela ye-Selldone noma uxhumane nathi.",
            'action' => 'Engeza iphothali esitolo',
        ],

        'domain' => [
            'title' => 'Isinyathelo sokugcina: ukuxhuma isizinda esizinikele',
            'message' => "Manje, xhuma isizinda sakho ngokwezifiso esitolo sakho. Lokhu kuvumela amakhasimende ukuthi athenge imikhiqizo noma amasevisi akho futhi enze izinkokhelo kuwe ngqo.",
            'action' => 'Sethula nokwamukela amakhadi esipho angenamkhawulo',
        ],
    ],


    'basket-list' => [
        'item' => "into",
        'count' => "Bala",
        'price' => "intengo",
        'discount-code' => "Ikhodi yesaphulelo",
        'customer-club' => 'Iklabhu yamakhasimende',
        'shipping' => "Ukuthumela ngomkhumbi",
        'total' => "Isamba",
        'offer' => "Nikeza",
        'coupon' => "Ikhuphoni",
        'lottery' => "Umklomelo",
        'tax' => "Intela",
        'tax_included' => "Kufakwe enanini",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Indlela',
        'amount' => 'Inani',
        'giftcard' => 'Gift card',
        'payment' => 'Inkokhelo',
    ],


    'shop-subscription-email' => [
        'category' => "Isibuyekezo sokubhaliselwe",
        'title' => "Ilayisensi Yesitolo: :shop_title",
        'title-reserved' => "Ilayisensi yokugodla: :shop_title",
        'title-active' => "Ilayisensi esebenzayo: :shop_title",
        'title-finished' => "Ilayisensi eqediwe: :shop_title",
        'title-cancel' => "Khansela ilayisense: :shop_title",
        'message' => "Uhlelo lwakho lwelayisensi yesitolo lubuyekeziwe,",
        'RESERVED' => "⚡ Uhlelo lwakho lokubhalisa lugciniwe**.",
        'ACTIVE' => "Uhlelo lwakho lokubhalisa **lwenziwe lwasebenza**.",
        'FINISHED' => "🚧 Uhlelo lwakho lokubhalisa seluqediwe**.",
        'CANCEL' => "⛔ Uhlelo lwakho lokubhalisa lukhanseliwe**.",
    ],

    'support' => [
        'subject' => "Isikhungo Sokusekela|:name waphendula",
        'category' => "Isikhungo sokusekela",
        'title' => "Uthole impendulo",
        'action' => "Vula isitolo admin",
    ],

    'shop-customer-join' => [
        'subject' => "Joyina :shop_title",
        'category' => "Umgubho wamakhasimende amasha",
        'title' => "Siyajabula ngobulungu bakho",
        'action' => "Vakashela manje",
    ],

    'shop-vendor-join' => [
        'subject' => "Ukugibela umthengisi| :shop_title",
        'category' => "Umgubho womthengisi omusha",
        'title' => "Siyajabula ngobulungu bakho",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Ikhadi lesipho :shop_title",
        'category' => "Engeza ikhadi elisha",
        'title' => "Halala, uthole ikhadi lesipho",
        'action' => "Thenga manje",
        'message' => "Uthole ikhadi lesipho elibiza u-:balance :currency. Ungasebenzisa leli khadi lesipho esitolo sethu.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Isikhungo Sokusekela| :shop",
        'category' => "ukusekela",
        'title' => "Uthole impendulo",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Ukuqinisekiswa Kwe-oda|Oda i-:order_id",
        'title' => "ukuhleleka",
        'message' => "Ufake i-oda esitolo sethu. Silitholile i-oda lakho futhi sizokuthumelela enye i-imeyili uma inkokhelo isiqinisekisiwe."
    ,

        'payments' => 'Izinkokhelo',
    ],

    'order-payment' => [
        'subject' => "🛍️ Ukuqinisekisa Inkokhelo|Oda i-:order_id",
        'title' => "I-oda lokukhokha",
        'message' => "Inkokhelo yakho iqediwe,<br> Silitholile i-oda lakho. Sizokuthumelela enye i-imeyili uma i-oda lakho lithunyelwa.",
    

        'payments' => 'Izinkokhelo',
    ],

    'order-update' => [
        'subject' => "🛍️ Isibuyekezo Sesimo Se-oda|Oda i-:order_id",
        'title' => "Isibuyekezo Sesimo Se-oda",
        'message' => "I-oda lakho libuyekeziwe. Ungahlola isimo sakamuva saleli oda ku-akhawunti yakho.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "I-oda lakho lisemgqeni wokucutshungulwa. Sizokwazisa uma ilungiswa.",
                'OrderConfirm' => "I-oda lakho liqinisekisiwe futhi ukulungiswa sekuqalile.",
                'PreparingOrder' => "I-oda lakho liyalungiswa futhi lizothunyelwa maduze.\nI-",
                'SentOrder' => "I-oda lakho lithunyelwe. Uzoyithola maduze.",
                'ToCustomer' => "I-oda lakho lilethiwe. Sithemba ukuthi uzokujabulela!",

                'PreparingOrder-PICKUP' => "I-oda lakho liyalungiswa. Uzothola isaziso uma isilungele ukulandwa.",
                'SentOrder-PICKUP' => "I-oda lakho lilungele ukulandwa. Ngicela uze esitolo uzowulanda.",
                'ToCustomer-PICKUP' => "I-oda lakho lilandiwe. Sithemba ukuthi uzokujabulela!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "I-oda lakho lisemgqeni wokucutshungulwa. Sizokwazisa uma isilungile.",
                'OrderConfirm' => "I-oda lakho liqinisekisiwe futhi ukulungiswa kuyaqhubeka.",
                'PreparingOrder' => "I-oda lakho liyalungiswa futhi lizothunyelwa kuwe maduze.",
                'ToCustomer' => "I-oda lakho le-virtual lilethiwe ku-akhawunti yakho. Ngiyabonga!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Isicelo sakho sesevisi sisemgqeni. Sizokwazisa uma siqala.",
                'OrderConfirm' => "Isevisi yakho iqinisekisiwe futhi silungiselela ukuqala.",
                'PreparingOrder' => "Silungiselela isevisi yakho, futhi sizokwazisa uma isiqediwe.",
                'ToCustomer' => "Isevisi yakho iphelile. Siyabonga ngokusikhetha!"
            ],
            'FILE' => [
                'PreparingOrder' => "Ifayela lakho liyalungiswa futhi lizotholakala maduzane.",
                'ToCustomer' => "Ifayela lakho selilungile futhi lilethiwe. Manje usungayilanda."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "I-oda lakho lokubhalisa lisemugqeni. Sizokwazisa uma ukucubungula kuqala.",
                'OrderConfirm' => "Ukubhalisa kwakho kuqinisekisiwe futhi kuyasethwa.",
                'PreparingOrder' => "Silungiselela ukubhalisa kwakho futhi kuzoqala maduze.\nI-",
                'SentOrder' => "Ukubhalisa kwakho kwenziwe kwasebenza. Uzothola izibuyekezo eziqhubekayo.",
                'ToCustomer' => "Isevisi yakho yokubhalisa yenziwe yasebenza ngempumelelo."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Siyakuhalalisela :name|Ivawusha Entsha: :title',
        'category' => "HAlala, IVAWUSHA ENTSHA",
        'message' => "Sawubona :name,<br><br>Uthole ivawusha entsha njengesipho esivela kithi! Ungazuza amavawusha engeziwe ngokwethula i-Selldone kubangani bakho kanye nawo wonke umuntu omaziyo. Le vawusha ikufanele **:price :currency**.<br><br>Uthathe isinyathelo sokuqala, futhi silapha ukuze sikusize uvule izici ezintsha ngevawusha yakho! Sicela ungene ngemvume nge-**:email** futhi uthole ivawusha yakho Esitolo **Ideshibhodi** > **Izilungiselelo** > **Ilayisensi**.<br><br>Halala!",
        'action' => "Ideshibhodi yami",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Siyakuhalalisela, :name othandekayo|Uthole Isipho Esikhethekile!',
        'category' => "Isimemezelo sokuthola isipho",
        'title' => "Izipho zakho",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Izipho",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ I-oda Elisha Yamukelwe| :order_id",
        'title' => "New Order",
        'message' => "Uthole i-oda elisha. Sicela uye ekhasini lokucubungula i-oda esitolo sakho.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Ulwazi Lwakho Olugcwele',
        'output-form-title' => 'Ulwazi lwento ethengiwe',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Umbiko Wamasonto onke :time',
        'title' => 'Umbiko wokusebenza kwesitolo wamaviki onke',
        'message' => "Lona umbiko wamasonto onke wesitolo sakho osuka ku-<b>:start</b> kuya ku-<b>:end</b>. Lo mbiko uhlanganisa amathiphu okuthuthukisa ibhizinisi lakho, ungaphinda uhlole isimo sesitolo sakho esiku-inthanethi nama-oda akamuva. Ngiyethemba nibe nosuku oluhle nesonto elizayo."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Umbiko wakho wokulondoloza we-:amount ezinyangeni ezintathu ezedlule| :shop_title',
        'title' => 'Umbiko wesizini mayelana nomsebenzi webhizinisi lakho, imiklomelo nokonga kwezezimali',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Ama-akhawunti axhunyiwe',
        'sub-title' => 'Siyini isimo sakamuva sama-akhawunti wewalethi axhunywe esitolo sami?',
        'view-wallet' => 'Buka isikhwama semali',
        'tip-title' => 'Amathiphu abalulekile',
        'tip' => "Setha isikhwama semali se-Selldone samahhala bese usixhumanisa nesitolo sakho. Ngisho noma ibhalansi yakho inegethivu, amakhasimende akho asengathenga futhi akhokhe ngaphandle kwezinkinga. Ungakhathazeki, ukusebenza kwesitolo sakho nedatha kuzoqhubeka kahle kuze kube yinyanga engu-1, ngaphandle kokuphazamiseka.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Xhuma ku-akhawunti'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Izinhlelo zokusebenza ezifakiwe',
        'sub-title' => 'Uhlu lwezinhlelo zokusebenza ozifakile esitolo sakho kuleli sonto.',
        'tip' => "Uyafuna ukuthola izinhlelo zokusebenza ezengeziwe zesitolo sakho?",
        'view-app-store' => 'Vakashela i-Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Amabhothi akho esitolo',
        'sub-title' => 'Amabhothi okuthengisa asebenzayo esitolo sami.',
        'tip-title' => 'I-Bot Sale',
        'tip' => "I-Selldone ikunikeze ama-bots okuthengisa azenzakalelayo. Okufanele ukwenze ukuya ku-Add-ons> Iphaneli ye-Bots futhi wenze kusebenze ama-bot esitolo sakho. Qaphela ukuthi isevisi efanele kufanele ibe khona ezweni lakini.",
        'view-bots' => 'Phatha ama-bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Ukuxhumana Namakhasimende',
        'sub-title' => 'Bangaki abathintwayo engibe nabo namakhasimende ami kuleli sonto?',
        'faqs' => 'imibuzo ejwayelekile ukubuzwa',
        'tickets' => 'Amathikithi Ekhasimende',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Isimo Sabasebenzisi',
        'sub-title' => 'Umsebenzi kusuka ku-:start kuya ku-:end',
        'users' => [
            'title' => 'Amakhasimende',
            'subtitle' => 'Bhalisa Abasebenzisi',
        ],
        'views' => [
            'title' => 'Ukuvakasha',
            'subtitle' => 'Uvakashele kangaki isitolo',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Abasebenzisi Ababuyisiwe',

        'shop_views' => 'Ukubuka kwezitolo',
        'baskets' => [
            'title' => 'Izinqola Zokuthenga',
            'subtitle' => 'Bika inombolo yezinqola zokuthenga ezintsha',
        ],
        'products' => [
            'title' => 'Uhlolojikelele lwemikhiqizo',
            'subtitle' => 'Isimo semikhiqizo esitolo ngohlobo',
            'value_name' => 'Imikhiqizo'
        ],
        'products_count' => 'Izinhlobo zomkhiqizo',
        'views_count' => 'Isibalo sokubuka',
        'sell_count' => 'Inani lokuthengisa',
        'send_count' => 'Isibalo sokuthunyelwa',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Iphaneli yabathengisi abakhulu be-Drop Shipping Selldone.',
        'total_fulfillments' => 'Ama-oda Amukelwe',
        'ds_count' => 'Wamukelwe Ama-oda',
        'statistics_title' => 'Bika ama-oda atholiwe',
        'ds_cancels' => 'Khansela ngomdayisi wesixhumi esibonakalayo',
        'ds_rejects' => 'Khansela ngawe',
        'tip' => "Ingabe ungumthengisi omkhulu onendlu yokugcina impahla, imboni, noma umsabalalisi womkhiqizo? Ungakwazi ukwandisa ukufinyelela kwakho ngokunikeza imikhiqizo yakho kwabanye abathengisi ngesevisi ye-Drop Shipping ye-Selldone. Sithumele i-imeyili ku-support@selldone.com ukuze ufunde kabanzi.",
        'view-drop-shipping-panel' => 'Ngena ngemvume kuphaneli ye-wholesale',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Izilinganiso Zokushintshanisa',
        'sub-title' => 'Uhlu lwakamuva lwezilinganiso zokuguqulwa kwemali esitolo sakho.',
        'from' => 'Imali Yomthombo',
        'to' => 'Imali yendawo',
        'rate' => 'Izinga lokuguqulwa',
        'view-exchange-panel' => 'Phatha Izilinganiso Zokushintshanisa
I-',
    

        'vew-exchange-panel' => 'iphaneli yokuphatha izinga lokushintshanisa',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Izinkontileka zochwepheshe',
        'sub-title' => 'Yiziphi izingcweti ezisebenza esitolo sami?',
        'cost' => 'Inani lenkontileka',
        'duration' => 'Ubude besikhathi',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Idethi Khansela',
        'end_at' => 'Usuku lokuthumela',
        'tip' => 'Qasha ochwepheshe abaphezulu abavela ku-Selldone ukusiza ukukhulisa ibhizinisi lakho.',
        'view-experts' => 'Chofoza ukuze uqalise.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Bika izindlela zokukhokha ezisebenzayo esitolo :shop.',
        'tip-title' => 'Amathiphu abalulekile',
        'tip' => "Iya ekhasini lokuphatha iphothali esitolo sakho bese wengeza okungenani imbobo eyodwa emizuzwini embalwa. Amakhasimende akho athanda ukukhokha ngokushesha nangokuvikelekile ngamaphothali aku-inthanethi.",
        'view-shop-gateways' => 'Ngena ngemvume ekuphathweni kwephothali yesitolo sami.',
        'view-gateways' => 'Buka amanye amasango',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Ama-oda',
        'sub-title' => 'Uhlu lwama-oda engiwathole kuleli sonto.',
        'total_baskets' => 'Ama-oda Aphelele',
        'total_posBaskets' => 'Ama-oda Esamba Semali',
        'pos-title' => 'Ibhokisi lesitolo se-POS',
        'chart-label' => 'Ama-oda aqediwe (lawa ma-oda awakhokhwa ngempela!)',
        'tip-title' => 'Kufanele uzame kakhudlwana...',
        'tip' => "Ayikho impumelelo elula.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Isikhungo Sokucubungula',
        'sub-title' => 'Lingakanani i-oda esilicubungule esitolo kuleli sonto?',
        'tip-title' => 'Awuzange ube nendali!',
        'tip' => "Ngeshwa awuzange ube nezindali kuleli sonto. Udinga ukuthola okwengeziwe esitolo sakho. Ungangeza imikhiqizo eminingi, ukhethe izithombe ezingcono noma ubhale izincazelo ezingcono zemikhiqizo yakho. Cabangela umsebenzi wesikhathi esigcwele webhizinisi lakho. Uma wenza kahle futhi ungakhungatheki, uzophumelela.",
        'view-process-center' => 'Buka isikhungo senqubo',
        'return' => [
            'title' => 'Kubuyisiwe I-oda',
            'subtitle' => 'Ama-oda abuyiselwe umbiko.',
            'tip-title' => 'Ubuwazi ukuthi...',
            'tip' => "Ungakha amarejista emali amaningi njengoba uwadinga nge-Selldone POS! Kungakhathaliseki ukuthi ithebhulethi yakho, iselula, noma ikhompuyutha ephathekayo, ungakwazi ukushintsha noma iyiphi idivayisi ibe indawo yokuthengisa yesitolo sakho. Kulula, kuyashesha ukusethwa, futhi kulungiselelwe ngokugcwele iseva yakho. Qala ukuyisebenzisa namuhla!",
            'view-pos' => 'Ngena ngemvume ku-Cashier Yami Yesitolo Se-inthanethi'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Amaseshini',
        'sub-title' => 'Ngivakashele kangaki isitolo sami?',
        'countries-title' => 'Imaphi amazwe avakashelwe kakhulu?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ingabe ufuna ukwenza imali ngaphandle kokusebenzisa irandi eyodwa?',
        'message' => "Sawubona :name, sekuyisikhathi sokuqala ukuzuza nge-Selldone! Iya kokuthi Ideshibhodi > Okwengeziwe > Ukwenza Imali > Thola Isixhumanisi Sakho Sokudluliswa. Yabelana ngesixhumanisi nabangani bakho, futhi uzuze amakhadi esipho kanye nesabelo sezinkokhelo zabo. Ingxenye engcono kakhulu? Nobabili wena nomngane wakho nithola ikhadi lesipho!",
        'action' => 'Buka isixhumanisi sami sesethulo',
        'mail-clip' => "<b style='color: #C2185B'>Okubalulekile:</b> Uma usebenzisa izinsiza ze-imeyili njenge-Gmail ezikhawulela ubude be-imeyili, thola inketho elandelayo ekupheleni kwe-imeyili ukuze ubonise umbiko ogcwele bese uchofoza kuwo:",

        'no-coin-reward' => "<b style='color: #C2185B'>Uxolo:</b> Umsebenzi wakho awufinyelelanga imfuneko yokuthola umvuzo wamahhala we-SEL Coins. Zama kakhudlwana futhi uthengise okwengeziwe esitolo sakho ngesizini ezayo.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Halala:</b> Umsebenzi omuhle kakhulu! Ngokusekelwe ekusebenzeni kwakho okuhle, sifake Izinhlamvu zemali ze-:amount SEL ku-akhawunti yakho njengomklomelo.",

        'need-buy-license' => "I-<b>Khulisa Ibhizinisi Lakho:</b> Kubonakala sengathi awukabhalisi noma yiluphi uhlelo lokubhalisa lewebhusayithi yakho! Thuthukisa manje ukuze uvule izici eziningi nge-:amount nje ngenyanga uma ikhokhwa njalo ngonyaka.",
        'not-afford-message' => "Uma ubhekene nanoma yiziphi izinkinga ngenkokhelo noma ungakwazi ukukukhokhela njengamanje, ungangabazi ukuxhumana nathi ku-support@selldone.com.",
        'add-domain' => "<b>Kungani ungenaso isizinda ngokwezifiso sebhizinisi lakho?</b><br> Engeza isizinda kuwebhusayithi yakho manje; kumahhala!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "I-Selldone yi-a<del> umkhiqizo</del> <span style = 'color: forestgreen'>umphakathi</span> .<br> Yiba Umthengisi ochwepheshe!",
        'message' => "Landela amakhasi asemthethweni e-Selldone ku-Twitter, i-LinkedIn kanye nezinkundla zokuxhumana. Sithumele noma yikuphi ukuphawula, izicelo noma ukugxeka noma ubambe iqhaza ezingxoxweni ezimayelana ne-Selldone. Futhi siyingxenye yomphakathi we-Selldone leyo <b>You make</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Kutholwe Ama-oda Amasha Kakotapheya|:shop_title :time',
        'title' => "Umbiko wokusebenza wamahora angu-24 wokugcina",
        'message' => "Amakhasimende akho alinde ukuthi ama-oda akho abuyekezwe futhi afakwe amanani. Phendula izicelo zamakhasimende akho ngokushesha ngangokunokwenzeka ukuze uthole ukuthengisa okwengeziwe.",
        'card_title' => "Ama-oda kulayini",
        'card_subtitle' => "Kusukela ku-:date",

        'card_payed' => "Ama-oda akhokhelwe"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Phendula kokuthunyelwe kwakho kokuthi :community_title',
        'title' => "I-:name kanye ne-:count abanye bajoyine ingxoxo kokuthunyelwe kwakho!",
        'message' => "Sawubona :name, okuthunyelwe kwakho kuyanakwa! Uthole amazwana emphakathini wethu. Ngena ngemvume ku-akhawunti yakho ukuze ujoyine ingxoxo futhi ubone ukuthi wonke umuntu uthini.",
        'title-simple' => "U-:name ubeke amazwana kokuthunyelwe kwakho!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Phendula esihlokweni sakho :topic_title',
        'title' => "I-:name, kanye ne-:count abanye baphendule esihlokweni sakho.",
        'message' => "Sawubona :name, isihloko sakho siyanakwa! Uthole izimpendulo emphakathini wethu. Ngena ngemvume ku-akhawunti yakho ukuze ujoyine ingxoxo futhi ubone ukuthi wonke umuntu uthini.",
        'title-simple' => "I-:name iphendule esihlokweni sakho.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Ukungena Ngemvume Okusha :name',
        'category' => 'Izaziso zokuphepha',
        'title' => "Ngena ngemvume ku-Akhawunti",
        'message' => ":name othandekayo, ukungena ngemvume ku-akhawunti yakho ye-Selldone kutholiwe.\nI-",   // Login in selldone (seller)
        'message-shop' => ":name othandekayo, ukungena ngemvume ku-:shop_title kutholiwe.",  // Login in shop (buyer)

        'footer' => "Uma ungangenile, sicela ushintshe iphasiwedi yakho.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Ukuhoxiswa",
        'deposit' => "Idiphozithi",

        'withdraw_subject' => "Hoxisa ku-akhawunti :account",
        'deposit_subject' => "Idiphozithi ku-akhawunti :account",

        'message' => "Ukudluliswa kwemali kwenziwe ngokucaciswa okulandelayo.",

        'type' => "Uhlobo lokwenziwe",

        'from' => "I-akhawunti yomthombo",
        'to' => "Destination account",

        'desc' => "Incazelo yokwenziwe",
        'action' => "Buka okwenziwayo",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Okubalulekile! Ukwephulwa kwemithetho| :shop",
        'category' => "Ulwazi olubalulekile",
        'title' => "Isitolo sakho sijezisiwe",
        'action' => "Vula ideshibhodi yesitolo",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => "I-:inviter ikumeme ukuthi ujoyine i-Selldone",
        'title' => "I-:name ikuthumelele i-:amount ukuze usize ukwethula isitolo sakho esisha se-inthanethi futhi wenze imali ngaso!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Yamukela isimemo",
        'owner' => "Umnikazi we",
        'join-date' => "Ku-Selldone kusukela",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Isixhumanisi sokutakula| :shop",
        'category' => "Ukuphepha kwesitolo",
        'title' => "Isixhumanisi sokutakula sesitolo se- <b>:shop_name</b> .",
        'message' => "Le imeyili ithunyelwe kuwe ngoba ucele ukubuyisela isitolo sakho. Ukuchofoza isixhumanisi esingezansi kuzobuyisela isitolo sakho nayo yonke idatha ekuso.",
        'action' => "Qinisekisa Ukutholwa Kwesitolo",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Ingakanani imali eyonge i-Selldone yebhizinisi lakho?',
        'sub-title' => 'Kusukela manje ku-:start kuya ku-:end',
        'infrastructure' => [
            'title' => 'Ingqalasizinda',
            'subtitle' => 'Amaseva, i-CDN, Isitoreji, nezinye izinsiza zamafu',
        ],
        'experts' => [
            'title' => 'Ochwepheshe Nabasebenzi',
            'subtitle' => 'Onjiniyela, ukunakekela, nokusekelwa',
        ],
        'total_save' => 'Isamba semali elondoloziwe'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Ukusebenza kwakho',
        'sub-title' => 'Ukubuka konke kwebhizinisi kusuka ku-:start kuya ku-:end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Abasebenzisi Ababuyisiwe',

        'shop_views' => 'Ukubuka kwezitolo',
        'baskets' => [
            'title' => 'Izinqola Zokuthenga',
            'subtitle' => 'Bika inombolo yezinqola zokuthenga ezintsha',

        ],
        'products' => [
            'title' => 'Uhlolojikelele lwemikhiqizo',
            'subtitle' => 'Isimo semikhiqizo esitolo ngohlobo',
            'value_name' => 'Imikhiqizo'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Isamba sokubukwa kwekhasi lewebhusayithi',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Uthole i-oda elisha. Sicela uye ekhasini lokucubungula i-oda kuphaneli yakho yomthengisi.",
        'subject' => "🛍️ I-oda Elisha Yamukelwe| :order_id",
        'your_revenue' => "Imali Engenayo Yakho",
    ],
    'vendor-invite' => [
        'title' => 'Isimemo somthengisi',
        'message' => "Uthole isimemo sokuba umthengisi we-:shop_name. Ungakwamukela noma ukwenqabe ngokuchofoza izinkinobho ezilandelayo.",
        'subject' => ":shop_name |Isimemo sokuba umthengisi wethu",
        'accept' => "Yamukela Futhi Ube Umthengisi",
        'reject' => "Yenqaba",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Isimemo Sokujoyina Ithimba Lethu
I-',
        'message' => "Umenywe ukujoyina i-:vendor_name ku-:shop_name. Ungamukela noma usenqabe lesi simemo usebenzisa izinkinobho ezingezansi.",
        'subject' => "Isimemo sokujoyina i-:vendor_name|Yiba Ilungu Lethimba",
        'accept' => "Yamukela futhi Ujoyine Ithimba",
        'reject' => "Yenqaba",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Ikhodi yakho yokungena ye-:shop",
        'header-message' => "Sikuthumelela le imeyili ngoba ucele ikhodi yokungena esitolo. Sicela uthole iphasiwedi yakho yesikhathi esisodwa (OTP) ngezansi:",
        'footer-message' => "Le khodi izosebenza imizuzu eyi-10. Uma ungazange ucele le khodi yokungena, sicela uzibe le imeyili."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Qinisekisa i-imeyili yakho| :shop",
        'title' => 'Ukuqinisekiswa Kwe-imeyili',
        'header-message' => "Sawubona :name,<br>Sicela uqinisekise ukuthi i-*:email** ikheli lakho le-imeyili ngokuchofoza inkinobho engezansi noma usebenzisa isixhumanisi esingezansi phakathi namahora angu-48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Izibuyekezo Zomkhiqizo| :shop",
        'title' => "Buyekeza Ngesimo Somkhiqizo - Amahora angu-24 edlule",
        'message' => "Ngethemba ukuthi lo mlayezo ukuthole kahle. Lesi isibuyekezo esifushane sokukwazisa ngesimo semikhiqizo yakho kungxenyekazi yethu emahoreni angama-24 edlule.\nNgalesi sikhathi, kube nezinguquko esimweni seminye imikhiqizo. Lezi zinguquko zingaba ngenxa yokuthenga, izibuyekezo zesitoko, noma eminye imicimbi ehlobene.\nUkuze uthole ukwaziswa okwengeziwe mayelana nomkhiqizo ngamunye, sicela ungene ku-akhawunti yakho bese uhlola isigaba 'sesimo somkhiqizo'.",
        'action' => "Vula Iphaneli yomthengisi",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Ama-oda Enqwaba Atholiwe| :shop | :date",
        'title' => "Isaziso sama-oda amaningi",
        'message' => "Uthole inqwaba yama-oda ayinqwaba. Sicela uvakashele ikhasi lokucubungula i-oda kuphaneli yakho ukuze uthole imininingwane eyengeziwe. Ungakwazi futhi ukulanda uhlu lwama-oda ngesixhumanisi esivikelekile esinikeziwe, esisebenza izinsuku ezingu-7.<br><br>\n        <b>IMPORTANT:</b> Lesi sixhumanisi sisebenza izinsuku eziyi-7.<br>\n        Lesi sixhumanisi sinamandla, ngakho ngaso sonke isikhathi uma usichofoza, uzothola ama-oda abuyekeziwe kakhulu ale dethi ethile. <b>Kusho ukuthi uma isimo senkokhelo ye-oda sishintsha sibe senqatshiwe, ngeke usalibona lelo oda ku-CSV elandiwe, noma uma i-oda likhokhiwe, lizovela ohlwini.</b><br><br>\n        <ul>\n            <li>I-CSV iqukethe ama-oda akhokhelwayo anedethi egodliwe ku-:date.</li>\n            <li>Idethi egciniwe idethi umsebenzisi achofoza ngayo ukuphuma ekhasini le-oda.</li>\n        I-</ul>\n        <b>Ukuze uvimbele ama-oda ayimpinda, hlola njalo i-oda ID ngaphambi kokuthumela.</b>",
        'action' => "Landa Uhlu Lwe-oda",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Ezinye izinto ku-oda lakho azamukelwanga futhi azikwazi ukulethwa. Inani lalezi zinto lizobuyiselwa ekhadini lakho maduzane."
    ]

];
