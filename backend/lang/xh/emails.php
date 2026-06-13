<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Lo myalezo wamkela umthengi omtsha evenkileni.',
        ShopMailTemplateCodes::OrderCheckout => 'Esi saziso sithunyelwa xa umthengi eqinisekisa umyalelo.',
        ShopMailTemplateCodes::OrderPayment => 'Esi saziso siqinisekisa intlawulo eyimpumelelo eyenziwe ngumthengi.',
        ShopMailTemplateCodes::OrderUpdate => 'Lo myalezo uthunyelwe ukuhlaziya umthengi ngobume beodolo yabo.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Lo myalezo uthunyelwa kumthengisi ukuze amazise ngeodolo eqinisekisiweyo.',
        ShopMailTemplateCodes::PosCheckout => 'Esi saziso sithunyelwa ukuqinisekisa indawo yokuthengiswa komthengi.',
        ShopMailTemplateCodes::PosPayment => 'Esi saziso siqinisekisa inqaku lentlawulo yokuthengisa eyenziwe ngumthengi.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Lo myalezo wazisa umthengisi ngokuthenga okwenziwe kwindawo yabo yokuthengisa.',
        ShopMailTemplateCodes::ShopContact => 'Esi saziso sithunyelwa xa ifom yoqhagamshelwano ingenisiwe.',
        ShopMailTemplateCodes::ShopGiftCard => 'Esi saziso sazisa umsebenzisi ukuba ufumene ikhadi lesipho.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Lo myalezo wamkela umthengisi omtsha evenkileni.',
        ShopMailTemplateCodes::ShopVendorInvite => "Lo myalezo uthunyelwe ukumema umthengisi ukuba ajoyine indawo yakho yentengiso.",
        ShopMailTemplateCodes::ShopVendorOrder => "Lo myalezo uthunyelwa kumthengisi xa iodolo ifunyenwe ikwimo ehlawulwayo okanye kwiCash on Delivery (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Ithunyelwa yonke imihla ukuhlaziya abathengisi kwisimo seemveliso zabo.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Lo myalezo uthunyelwe ukumema umthengisi ukuba ajoyine indawo yakho yentengiso.",

        ShopMailTemplateCodes::UserLogin => "Yazisa umsebenzisi ngeenkcukacha zokungena, kuquka idilesi ye-IP, umhla, kunye nesixhobo, ngeenjongo zokhuseleko.",
        ShopMailTemplateCodes::LoginCode => "Thumela ikhowudi yokugqitha yexesha elinye ukuze abasebenzisi bangene evenkileni.",

        ShopMailTemplateCodes::EmailVerifyLink => "Thumela ikhonkco ukuqinisekisa idilesi ye-imeyile yomsebenzisi. Le imeyile ithunyelwa xa umsebenzisi ebhalisa nge-SMS kwaye afake i-imeyile yakhe. Ayithunyelwa xa umsebenzisi ebhalisa ngokuthe ngqo nge-social login okanye i-imeyile.",

        ShopMailTemplateCodes::EmailBulkOrder => "Thumela uludwe lweeodolo ezifunyenweyo nezihlawulweyo ngobuninzi bosuku oluthile."


    ,

    ],


    'global' => [
        'greetings' => 'Molo, :name!',
        'end-statement' => 'Iqela lenkxaso',

        'receiver_name' => 'Molo :user_name',
        'footer-help' => "Ngaba ufuna uncedo? Buza ku [support@selldone.com] (mailto:support@selldone.com) okanye undwendwele [iziko loncedo] (https://selldone.com/community).",
        'selldone-team' => 'Iqela le-Selldone',
        'footer-shop' => "Ukuba ufuna uncedo ngayo nantoni na nceda ungalibazisi usithumelele i-imeyile: :shop_mail",
        'accept' => "Yamkela",
        'reject' => "Yala",
        'verify' => "qinisekisa",
        'title' => "Isihloko",
        'value' => "Ixabiso",
        'description' => "Inkcazo",
        'shop' => "Thenga",
        'shop-info' => "Gcina Ulwazi",
        'user' => "umsebenzisi",
        'user-info' => "Ulwazi lweakhawunti",
        'license' => "Ilayisensi",
        'status' => "Ubume",
        'start' => "Qala",
        'end' => "Isiphelo",
        'renewal' => "Uhlaziyo",
        'view' => "Jonga",

        'balance' => "Ibhalansi",
        'card_number' => "Inombolo yekhadi",
        'cvv' => "Cvv",
        'expire_date' => "Umhla wokuphelelwa",

        'Dashboard' => "Dashboard",
        'order' => "umyalelo",
        'view_order' => "Jonga iodolo",
        'pay_now' => "Pay now",

        'official_selldone' => "KUTHENGISWA NGOKUSEMTHETHWENI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Imali",
        'free-balance' => "Ibhalansi yasimahla",
        'locked-balance' => "Ibhalansi etshixiweyo",
        'bot' => "Bot",
        'requests' => "Izicelo",
        'baskets' => 'Iinqwelo',
        'physical' => "Enyameni",
        'virtual' => "Inyani",
        'file' => "Ifayile",
        'service' => "Inkonzo",
        'fulfillment' => "Ukuzaliseka",
        'open' => "Vula",
        'reserved' => "Igciniwe",
        'canceled' => "Irhoxisiwe",
        'payed' => "Ihlawulwe",
        'cod' => "COD",
        'orders-count' => 'Iiodolo',
        'payments-count' => 'Iintlawulo',
        'confirms-count' => 'Iyaqinisekisa',
        'sends-count' => 'Iyathumela',
        'delivers-count' => 'Ihambisa',
        'count' => 'Bala',
        'transactions-count' => 'Ubalo lwentengiselwano',
        'success-transactions' => 'Iintengiselwano eziyimpumelelo',
        'total-amount' => 'Imali iyonke',
        'amount' => 'Isixa',
        'wage' => 'Umvuzo',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Phila',
        'CheckQueue' => 'Jonga umgca',
        'OrderConfirm' => 'Iodolo iqinisekisa',
        'PreparingOrder' => 'Ukulungiselela iodolo',
        'SentOrder' => 'Thumela iodolo',
        'ToCustomer' => 'Inikezelwe kumthengi',
        'Pending' => 'Ilindile',
        'Accepted' => 'Yamkelwe',
        'Rejected' => 'Yaliwe',
        'pc' => 'PC',
        'tablet' => 'Icwecwe',
        'phone' => 'Ifowuni',
        'total' => 'Iyonke',
        'view-detail' => 'Jonga iinkcukacha',
        'empty' => 'Akunanto',
        'dropshipping' => 'Ukulahla',
        'reply' => 'Phendula',
        'reactions' => 'Iimpendulo',
        'Comments' => 'Amagqabantshintshi',
        'last-comment' => 'Izimvo zokugqibela',
        'response-to' => 'Impendulo ku',
        'posts' => 'Izithuba',
        'post' => 'Thumela',

        'name' => 'Igama',
        'email' => 'I-imeyile',
        'type' => 'uhlobo',
        'device' => 'Isixhobo',
        'platform' => 'Iqonga',
        'browser' => 'Isikhangeli',
        'time' => 'Ixesha',
        'Wallet' => 'Isipaji',
        'date' => 'Umhla',

        'account' => 'Iakhawunti',
        'transaction' => 'Intengiselwano',
        'fee' => 'Umrhumo',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Ibhili',
        'category' => 'Udidi',
        'password' => 'Inombolo yokuvula',
        'verify-login' => "Qinisekisa & Ngena",
        'url' => 'URL',
        'avocado' => 'Iponyoponyo',
        'hyper' => 'Hyper',
        'buy-now' => "Thenga ngoku",
        'add-domain' => "Add Domain",
        'views' => 'Iimbono',


        'country' => 'Ilizwe',
        'address' => 'idilesi',
        'postal' => 'Ikhowudi yePosi',
        'building_no' => 'Isakhiwo #',
        'building_unit' => 'Iyunithi #',
        'message' => 'Umyalezo',


        'customer' => 'Umthengi',
        'cart-items' => 'Izinto zenqwelo',
        'payment' => 'Intlawulo',
        'receiver' => 'Umamkeli',
        'virtual-items' => 'Izinto ezibonakalayo',
        'no-payment' => 'Akukho ntlawulo!',

        'enable' => 'Vulela',
        'access' => 'Ukufikelela',
        'bank' => 'Ulwazi lwebhanki',

        'vendor' => 'Umthengisi',

        'view_content' => "Jonga umxholo opheleleyo",
        'files' => 'Iifayile',
        'download' => 'Khuphela',
        'file_name' => 'Igama lefayile',
        'file_size' => 'Ubungakanani',

        'subscription' => 'Umrhumo',
        'products' => 'Iimveliso',
        'vendor_products' => 'Iimveliso zomthengisi',

        'pickup' => 'Ukuthatha',

        'minutes' => 'Imizuzu',
        'hours' => 'Iiyure',

        'refund' => 'Imbuyekezo',
        'recipient_address' => 'Idilesi yomamkeli',
        'signature' => 'Umsayino',
        'blockchain' => 'I-Blockchain',
        'details' => 'Iinkcukacha',


    

        'Shop' => 'Thenga',
        'dashboard' => 'kwideshibhodi',
        'comments' => 'izimvo',
        'wallet' => 'isipaji',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone Ingxelo yokuSebenza'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone Ingxelo yoNyaka'
        ],
        'Onboarding' => [
            'id' => 'mholweni',
            'name' => 'Vuma, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Inkxaso :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Qinisekisa, Selldone'
        ],
        'Welcome' => [
            'id' => 'mholweni',
            'name' => 'Uluntu, Selldone'
        ],
        'NewShop' => [
            'id' => 'abarhwebi',
            'name' => 'Vuma, Selldone'
        ],
        'Approve' => [
            'id' => 'vuma',
            'name' => 'Vuma, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Ulawulo lweeodolo :name'
        ],

        'Recovery' => [
            'id' => 'ukuchacha',
            'name' => 'Selldone Iqela lokubuyisela'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Isalindile ⌛',
        'PAYED' => 'Ihlawulwe ✅',
        'CANCELED' => 'Irhoxisiwe ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Umlawuli',
            'OFFICER' => 'Igosa kunye noMlawuli',
            'AUDITING' => 'Umphathi wophicotho',
            'EMPLOYEE' => 'Umqeshwa',
            'PRODUCT' => 'Umphathi weeMveliso',
            'CONTENT' => 'Umphathi womxholo',
            'MARKETING' => 'Umalwuli wezentengiso',
            'VIEWER' => 'Umjongi',

        ],
        'subject' => "I-:inviter ikumeme njenge-:level| :shop",
        'category' => "Isimemo sabasebenzi",
        'title' => "<b>Umenyiwe :shop_name</b> njenge <b>:level</b> .",
        'message' => "Ufumene isimemo sokusebenzisana ne<b>:shop_title</b> iqela kushishino. Unokukhetha ukwamkela okanye ukwala olunikezelo. Ukuba ukhetha ukwamkela, nceda ungene kwinkonzo ye-Selldone ukuze uqinisekise isigqibo sakho. Emva kokuqinisekiswa, uya kufumana ukufikelela kwicandelo lolawulo lwevenkile.",

    ],

    'welcome-email' => [
        'subject' => "👋 Wamkelekile :name, Masiqalise ngeSelldone!",
        'category' => 'CONGRATULATION',
        'title' => "Wamkelekile kwi-Selldone",
        'message' => "Enkosi ngokukhetha i-Selldone, Ngoku uyinxalenye yoluntu lwaseSelldone oludibanisa abathengisi behlabathi kubathengi, ishishini lasekhaya ukuya kushishino, Umntu ngamnye kwiqumrhu! Zonke izixhobo ze-master kunye ne-pro zinikezelwe ** simahla ** kwaye ** ezingenasiphelo ** kuwe. Uyazama, sivula iingcango, Yenza nje!",

        'index' => "Inyathelo :step.",

        'step-domain' => [
            'title' => 'Yongeza i-Domain yakho yeSiko',
            'message' => "Ukuze uqalise, yongeza i-domain yakho yesiko simahla kwiDashbhodi yeeThengi phantsi kweeSetingi> iisetingi zeeDomains.",
            'action' => 'Lawula iDomains yam',
        ],
        'step-landing' => [
            'title' => 'Lungiselela Iphepha Lakho Lasekhaya',
            'message' => "Yenza ngokwezifiso iphepha lakho lasekhaya ngokuya kwiDashboard> Amaphepha. Khetha iphepha lokumisa okanye wenze elitsha. Ilula kwaye iyaqondakala, kwaye ungaqala ukusebenza kuyo kwangoko.",
            'action' => 'Lungiselela iPhepha lam lokufika',
        ],
        'step-payment' => [
            'title' => 'Cwangcisa iindlela zeNtlawulo',
            'message' => "Qala ukwamkela iintlawulo ngqo kwi-akhawunti yakho yebhanki. Ukuqhagamshela ababoneleli bakho bentlawulo abanje ngeStripe, PayPal, kunye nokunye, yiya kwiDashboard> Accounting> Gateway.",
            'action' => 'Yongeza iindlela zokuhlawula',
        ],
        'step-products' => [
            'title' => 'Yongeza iiMveliso zakho',
            'message' => "Yongeza ngokulula iimveliso kunye neendidi kwiDashboard > Iimveliso. Kufana nje nokulawula iifayile kunye neefolda kwi-PC yakho - ukutsala-kunye nokulahla ngokupheleleyo kulungile. Unako kwakhona iimveliso ezininzi ngaphandle usebenzisa Excel. Isampula yethemplethi iyafumaneka ukukunceda uqalise.",
            'action' => 'Lawula iMveliso Zam',
        ],
        'step-shipping' => [
            'title' => 'Seta iindlela zokuThumela',
            'message' => "Ukuhlawula abathengi ngokuthumela, chaza iindlela zakho zokuthumela kwiDashboard> Logistic> Ukuthumela. Unokuseta amaxabiso ahlukeneyo kunye nenkxaso yeendawo ezahlukeneyo. Ungalibali ukuseta imvelaphi yakho yokugcina kwiDashboard> Logistic> Warehouse.",
            'action' => 'Lawula iiNdlela zokuThumela',
        ],
    

        'seller' => [
            'title' => 'Ngaba ungumthengisi?',
            'message' => 'Ukuqala ukuthengisa, faka ideshibhodi yakho eSelldone ngekhonkco elingezantsi kwaye wenze ivenkile yakho yokuqala simahla. Oku kuyakuthatha imizuzu embalwa kwaye uya kuba nevenkile yakho kunye nendawo ye-intanethi. Emva koko siya kukukhokela kumanyathelo alandelayo kwaye ufumane isango lokuhlawula.',
            'action' => 'Ngena kwideshibhodi yam',
        ],
        'buyer' => [
            'title' => 'Ndingumthengi',
            'message' => 'Sivuyisana nawe. Nje ukuba ulilungu le-Selldone, uya kususa zonke iingxaki zobulungu kunye nokuqinisekiswa kwiivenkile ze-intanethi. Ukuzuza kuyo nayiphi na ivenkile kunye nesiza esisebenzisa iqonga leSelldone, ungangena ngokucofa okukodwa kwaye wenze ukuthenga kwakho kube lula, ngokukhawuleza kwaye kukhuselekile.',
        ],
    ],


    'charge-account' => [
        'category' => 'Isipaji > Iakhawunti > Tjaja',
        'title' => "Intlawulo yempumelelo",
        'message' => "Iakhawunti yakho <b>:account_number</b> ihlawuliswe <b>:amount</b> ngempumelelo.",
        'account' => 'Iakhawunti',
        'charge' => 'Ukuhlawulisa',
        'balance' => 'Ibhalansi',
        'footer' => "Yenza ishishini libe lula, lifikeleleke, kwaye lifikeleleke kuye nabani na kwihlabathi liphela."
    ],

    'verify-email' => [
        'subject' => "🙌 Gqibezela ukubhalisa kwakho kwi-Selldone! Qinisekisa ikhonkco.",
        'category' => "ULINYATHELO ELINYE",
        'title' => "Qinisekisa idilesi yemeyile yakho",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Ukuba unengxaki yokucofa iqhosha lokuQinisekisa, khuphela kwaye uncamathisele i-URL engezantsi kwisikhangeli sakho sewebhu: :activation_url",
        'next-step' => "Okulandelayo, siza kukuthumela izixhobo eziluncedo kunye nesikhokelo senyathelo ngenyathelo ukwenza kube lula kuwe ukongeza isizinda sakho esingokwezifiso, ukuseta iintlawulo, ukongeza iimveliso, kwaye ufumane iodolo yakho yokuqala.",

    ],
    'verify-email-code' => [
        'subject' => "Ikhowudi yokuqinisekisa ye:name",
        'category' => "SECURITY",
        'title' => "Ikhowudi yokuqinisekisa nge-imeyile",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Ivenkile yakho ilungile| :name",
        'category' => "ULINYATHELO ELINYE",
        'title' => "Ukuseta kugqityiwe",
        'account_title' => "Iakhawunti yakho",
        'account_msg' => "Qinisekisa kwaye ungene kwi-akhawunti yakho ngolu lwazi.",
        'shop_msg' => "Ulwazi lweakhawunti kwiSelldone inkqubo yokusebenza yeshishini.",

    ],

    'reset2fa' => [
        'category' => "UKHUSELEKO UMYALEZO WASEBURHULUMENTENI",
        'title' => "Cela ukuvala ukungena kwamanyathelo ama-2",
        'message' => "Ufumana le imeyile kuba sifumene isicelo sokuseta ngokutsha ungqinisiso lwezinto ezimbini kwi-akhawunti ye-*:name** ene-imeyile ethi **:email**.<br><br>Sifumene ezi nkcukacha zilandelayo kwi-akhawunti yakho:",
        'footer' => "Ukuba awukhange ucele ukusetwa kwakhona kwegama lokugqitha, akukho nyathelo lingaphaya liyafuneka.",
        'action' => 'Khubaza ukungena ngamanyathelo amabini',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Ivenkile yakho ilungile ngoku!",
        'category' => "UZALWE INTSHA ENTSHA YE-Intanethi EMHLABENI",
        'title' => "Sivuyisana nawe, :name!",
        'message' => "<b>Congratulations, :name! Your new online business is now live!</b> We are excited to welcome you to the Selldoners community. You've taken the first step toward success, and we are here to help you every step of the way.<br>Now that your store is ready, let’s make sure you're set to receive payments directly from your customers and start growing your empire. If you ever need help, we're just a message away—our support team is always here for you.<br><br><b>Important Next Steps:</b> To start, ensure you're all set up for receiving payments and smooth operations. We'll guide you through each stage to get your store running seamlessly.",
        'pdf-book' => "Ungaphoswa yincwadi yesandla eqhotyoshelweyo: Yenza ishishini Lakho Njengomdlalo",

        'account' => [
            'title' => 'Inyathelo loku-1: Misela i-Selldone Wallet yakho',
            'message' => "Ukuqala, yenza i-akhawunti kwi-wallet yakho ye-Selldone. Apha kulapho umrhumo wakho uya kutsalwa khona, kwaye kulapho uya phezulu khona ukuze ugcine ivenkile yakho isebenza kakuhle. Ukuba ibhalansi yakho ihlala ingalunganga, ungakhathazeki! Ivenkile yakho iya kuqhubeka isebenza ngaphandle kokuphazamiseka.",
            'action' => 'Ngena kwi-wallet',
        ],

        'shop-account' => [
            'title' => 'Inyathelo 2: qhagamshela iakhawunti kwivenkile',
            'message' => "Okulandelayo, qhagamshela i-akhawunti yakho ye-wallet kwivenkile yakho. Intloko kwi<b>Store> Accounting> Invoice</b>, kwaye udibanise i-wallet yakho. Oku kuqinisekisa ukuba zonke iintlawulo zabathengi zifakwa ngqo kwi-akhawunti yakho yebhanki—I-Selldone ayitsali naziphi na iimali kwimivuzo yakho.",
            'action' => 'Iphaneli ye-invoyisi yokugcina',
        ],

        'gateway' => [
            'title' => 'Inyathelo lesi-3: Qhagamshela iSango seNtlawulo ye-Intanethi',
            'message' => "Ngoku, makhe usete isango lakho lokuhlawula kwi-intanethi. Yiya ku<b>Store> Accounting> Port</b> kwaye ucofe ku<b>Qongeza iPort</b>. Khetha imali yakho, kwaye uya kubona uluhlu lwamasango entlawulo akhoyo. Ukuqhagamshela isango kukhawuleza kwaye kulula, kodwa ukuba ufuna naluphi na uncedo, zikhululeke ukujonga izikhokelo zeSelldone okanye ufikelele kuthi.",
            'action' => 'Yongeza i-portal kwivenkile',
        ],

        'domain' => [
            'title' => 'Inyathelo lokugqibela: ukudibanisa indawo ezinikeleyo',
            'message' => "Ngoku, qhagamshela indawo yakho yesiko kwivenkile yakho. Oku kuvumela abathengi ukuba bathenge iimveliso okanye iinkonzo zakho kwaye benze iintlawulo ngqo kuwe.",
            'action' => 'Ukwazisa kunye nokufumana amakhadi esipho angenamkhawulo',
        ],
    ],


    'basket-list' => [
        'item' => "into",
        'count' => "Bala",
        'price' => "ixabiso",
        'discount-code' => "Ikhowudi yesaphulelo",
        'customer-club' => 'Iklabhu yabaThengi',
        'shipping' => "Ukuhambisa ngenqanawe",
        'total' => "Iyonke",
        'offer' => "Unikezelo",
        'coupon' => "Ikhuphoni",
        'lottery' => "Imbasa",
        'tax' => "Irhafu",
        'tax_included' => "Ibandakanyiwe kwixabiso",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Indlela',
        'amount' => 'Isixa',
        'giftcard' => 'Gift card',
        'payment' => 'Intlawulo',
    ],


    'shop-subscription-email' => [
        'category' => "Uhlaziyo lomrhumo",
        'title' => "Iphepha-mvume levenkile: :shop_title",
        'title-reserved' => "Ilayisenisi yokuGcina: :shop_title",
        'title-active' => "Iphepha-mvume elisebenzayo: :shop_title",
        'title-finished' => "Ilayisensi egqityiweyo: :shop_title",
        'title-cancel' => "Rhoxisa iphepha-mvume: :shop_title",
        'message' => "Isicwangciso sakho selayisensi yevenkile sihlaziyiwe,",
        'RESERVED' => "⚡ Isicwangciso sakho somrhumo sele **sibekelwe**.",
        'ACTIVE' => "Isicwangciso sakho sokurhuma senziwe ** siyasebenza **.",
        'FINISHED' => "🚧 Isicwangciso sakho sokurhuma sele sigqityiwe ** sigqityiwe.",
        'CANCEL' => "⛔ Isicwangciso sakho sorhumo sirhoxisiwe**.",
    ],

    'support' => [
        'subject' => "Iziko leNkxaso|:name yaphendula",
        'category' => "Iziko lenkxaso",
        'title' => "Ufumene impendulo",
        'action' => "Vula ivenkile admin",
    ],

    'shop-customer-join' => [
        'subject' => "Joyina i-:shop_title",
        'category' => "Umbhiyozo omtsha wabathengi",
        'title' => "Siyavuya ngobulungu bakho",
        'action' => "Ndwendwela ngoku",
    ],

    'shop-vendor-join' => [
        'subject' => "Ukukhwela komthengisi| :shop_title",
        'category' => "Umbhiyozo omtsha womthengisi",
        'title' => "Siyavuya ngobulungu bakho",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Ikhadi lesipho :shop_title",
        'category' => "Yongeza ikhadi elitsha",
        'title' => "Sivuyisana nawe, ufumene ikhadi lesipho",
        'action' => "Thenga ngoku",
        'message' => "Ufumene ikhadi lesipho elixabisa :balance :currency. Ungasebenzisa eli khadi lesipho kwivenkile yethu.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Iziko leNkxaso| :shop",
        'category' => "inkxaso",
        'title' => "Ufumene impendulo",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ uQinisekiso lweodolo|Iodolo ye-:order_id",
        'title' => "umyalelo",
        'message' => "Ufake iodolo kwivenkile yethu. Siyifumene iodolo yakho kwaye siya kukuthumelela enye i-imeyile emva kokuba intlawulo iqinisekisiwe."
    ,

        'payments' => 'Iintlawulo',
    ],

    'order-payment' => [
        'subject' => "🛍️ Ukuqinisekiswa kweNtlawulo|Iodolo ye-:order_id",
        'title' => "Umyalelo wentlawulo",
        'message' => "Intlawulo yakho igqityiwe,<br> Siyifumene iodolo yakho. Siza kukuthumelela enye i-imeyile xa iodolo yakho ithunyelwa ngenqanawe.",
    

        'payments' => 'Iintlawulo',
    ],

    'order-update' => [
        'subject' => "🛍️ Uhlaziyo lwesimo se-odolo|Iodolo ye-:order_id",
        'title' => "Uhlaziyo lwesimo soMyalelo",
        'message' => "Iodolo yakho ihlaziyiwe. Ungajonga ubume bamva nje balo myalelo kwiakhawunti yakho.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "I-odolo yakho ikumgca wokuqhubekeka. Siza kukwazisa xa ilungiswa.",
                'OrderConfirm' => "Iodolo yakho iqinisekisiwe kwaye nolungiselelo sele luqalisile.",
                'PreparingOrder' => "Iodolo yakho iyalungiswa kwaye iza kuthunyelwa kungekudala.",
                'SentOrder' => "Iodolo yakho ithunyelwe ngenqanawa. Uza kuyifumana kungekudala.",
                'ToCustomer' => "Iodolo yakho ihanjisiwe. Siyathemba ukuba uyonwabele!",

                'PreparingOrder-PICKUP' => "Iodolo yakho iyalungiswa. Uya kufumana isaziso xa silungele ukuthatyathwa.",
                'SentOrder-PICKUP' => "Iodolo yakho ilungele ukulandwa. Ndicela uze evenkileni uzoyithatha.",
                'ToCustomer-PICKUP' => "I-odolo yakho ithathiwe. Siyathemba ukuba uyonwabele!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "I-odolo yakho ikumgca wokuqhubekeka. Siza kukwazisa xa sele ilungile.",
                'OrderConfirm' => "Iodolo yakho iqinisekisiwe kwaye amalungiselelo ayaqhubeka.",
                'PreparingOrder' => "Iodolo yakho iyalungiswa kwaye iza kuthunyelwa kuwe kungekudala.",
                'ToCustomer' => "Iodolo yakho yenyani ithunyelwe kwiakhawunti yakho. Enkosi!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Isicelo sakho senkonzo sisemgceni. Siza kukwazisa xa siqala.",
                'OrderConfirm' => "Inkonzo yakho iqinisekisiwe kwaye silungiselela ukuqalisa.",
                'PreparingOrder' => "Silungiselela inkonzo yakho, kwaye siya kukwazisa xa igqityiwe.",
                'ToCustomer' => "Inkonzo yakho igqityiwe. Enkosi ngokusikhetha!"
            ],
            'FILE' => [
                'PreparingOrder' => "Ifayile yakho iyalungiswa kwaye iza kufumaneka kungekudala.",
                'ToCustomer' => "Ifayile yakho ilungile kwaye ihanjisiwe. Ungayikhuphela ngoku."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Umrhumo wakho weodolo usemgceni. Siza kukwazisa xa inkqubo iqalisa.",
                'OrderConfirm' => "Umrhumo wakho uqinisekisiwe kwaye uyasetwa.",
                'PreparingOrder' => "Silungiselela umrhumo wakho kwaye izakuqala kungekudala.",
                'SentOrder' => "Umrhumo wakho sele uvuliwe. Uya kufumana uhlaziyo oluqhubekayo.",
                'ToCustomer' => "Inkonzo yorhumo lwakho yenziwe yasebenza ngempumelelo."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Sivuyisana nawe :name|Ivawutsha eNtsha: :title',
        'category' => "SIYAvuyisana nawe, IVAWUTSHA ENTSHA",
        'message' => "Heyi :name,<br><br>Ufumene ivawutsha entsha njengesipho esivela kuthi! Unokufumana iivawutsha ezingakumbi ngokwazisa i-Selldone kubahlobo bakho kunye naye wonke umntu omaziyo. Le vawutsha ixabisa **:price :currency**.<br><br>Uthathe inyathelo lokuqala, kwaye silapha ukukunceda uvule iifitsha ezintsha ngevawutsha yakho! Nceda ungene nge **:email** kwaye ufumane ivawutsha yakho kwiVenkile **Dashboard** > **Settings** > **Layisensi**.<br><br>Halala!",
        'action' => "Ideshibhodi yam",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Sivuyisana nawe, :name ethandekayo|Ufumene Isipho Esikhethekileyo!',
        'category' => "Isibhengezo sokufumana isipho",
        'title' => "Izipho zakho",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Izipho",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Umyalelo omtsha ofunyenweyo| :order_id",
        'title' => "New Order",
        'message' => "Ufumene iodolo entsha. Nceda uye kwiphepha lokucwangcisa iodolo kwivenkile yakho.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Ulwazi lwakho olugcwalisiweyo',
        'output-form-title' => 'Ulwazi lwezinto ezithengiweyo',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Ingxelo yeveki :time',
        'title' => 'Ingxelo yokusebenza kwevenkile yeveki',
        'message' => "Le yingxelo yeveki yevenkile yakho ukusuka <b>:start</b> ukuya <b>:end</b>. Le ngxelo ibandakanya iingcebiso zokuphucula ishishini lakho, unokujonga kwakhona imeko yevenkile yakho ye-intanethi kunye nemiyalelo yamva nje. Ndiyathemba ukuba ninemini entle neveki ezayo."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Ingxelo yakho yokugcina ye-:amount kwiinyanga ezintathu ezidlulileyo| :shop_title',
        'title' => 'Ingxelo yonyaka malunga nomsebenzi weshishini lakho, imivuzo kunye nokugcinwa kwemali',
        'message' => "Le yingxelo yakho ye<b>:shop_title</b> ngexesha lonyaka ukusuka ku<b>:start</b> ukuya ku<b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Iiakhawunti eziqhagamshelweyo',
        'sub-title' => 'Ithini imeko yamva nje yeeakhawunti zewalethi eziqhagamshelwe kwivenkile yam?',
        'view-wallet' => 'Jonga isipaji',
        'tip-title' => 'Iingcebiso ezibalulekileyo',
        'tip' => "Seta i-wallet ye-Selldone yasimahla kwaye uyidibanise nevenkile yakho. Nokuba ibhalansi yakho ingalunganga, abathengi bakho basenokuthenga kwaye bahlawule ngaphandle kwemiba. Sukuba nexhala, ukusebenza kwevenkile yakho kunye neenkcukacha ziya kuqhubeka kakuhle ukuya kuthi ga kwinyanga enye, ngaphandle kweziphazamiso.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Qhagamshela kwiakhawunti'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Usetyenziso olufakiweyo',
        'sub-title' => 'Uluhlu lweeapps ozifakile kwivenkile yakho kule veki.',
        'tip' => "Ngaba uyafuna ukufumana usetyenziso oluninzi lwevenkile yakho?",
        'view-app-store' => 'Jonga iSelldone App Store',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Iibhothi zakho zeVenkile',
        'sub-title' => 'Iibhothi zokuthengisa ezisebenzayo kwivenkile yam.',
        'tip-title' => 'Intengiso yeBot',
        'tip' => "I-Selldone ikubonelele nge-bots yokuthengisa ngokuzenzekelayo. Ekuphela kwento ekufuneka uyenzile kukuya kwizongezo> Iphaneli yeBots kwaye uvule ibhoti yakho yevenkile. Qaphela ukuba inkonzo efanelekileyo kufuneka ifumaneke kwilizwe lakho.",
        'view-bots' => 'Lawula iibhothi',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Unxibelelwano nabathengi',
        'sub-title' => 'Bangaphi abafowunelwa endinabo nabaxhasi bam kule veki?',
        'faqs' => 'Imibuzo ebuzwa qho',
        'tickets' => 'amatikiti Customer',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Ubume babasebenzisi',
        'sub-title' => 'Umsebenzi ukusuka kwi-:start ukuya kwi-:end',
        'users' => [
            'title' => 'Abathengi',
            'subtitle' => 'Bhalisa Abasebenzisi',
        ],
        'views' => [
            'title' => 'Utyelelo',
            'subtitle' => 'Zingaphi izihlandlo undwendwele ivenkile',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Abasebenzisi ababuyiselweyo',

        'shop_views' => 'Iimboniselo zevenkile',
        'baskets' => [
            'title' => 'Iinqwelo zokuthengela',
            'subtitle' => 'Xela inani leenqwelo zokuthenga ezintsha',
        ],
        'products' => [
            'title' => 'Products Overview',
            'subtitle' => 'Ubume beemveliso evenkileni ngohlobo',
            'value_name' => 'Iimveliso'
        ],
        'products_count' => 'Iintlobo zeemveliso',
        'views_count' => 'Ubalo lokujonga',
        'sell_count' => 'Inani lentengiso',
        'send_count' => 'Inani lokuthumela ngenqanawa',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Ukuthumela ngeNqanaba',
        'sub-title' => 'Iphaneli yabathengisi abakhulu be-Drop Shipping Selldone.',
        'total_fulfillments' => 'Zizonke iiodolo ezifunyenweyo',
        'ds_count' => 'Ufumene iiodolo',
        'statistics_title' => 'Ingxelo efunyenweyo imiyalelo',
        'ds_cancels' => 'Rhoxisa ngomthengisi we-interface',
        'ds_rejects' => 'Rhoxisa Ngawe',
        'tip' => "Ngaba ungumthengisi omkhulu onendlu yokugcina impahla, umzi-mveliso, okanye umsasazi wemveliso? Unokwandisa ukufikelela kwakho ngokunikezela ngeemveliso zakho kwabanye abathengisi ngenkonzo ye-Selldone ye-Drop Shipping. Sithumelele i-imeyile ku-support@selldone.com ukuze ufunde ngakumbi.",
        'view-drop-shipping-panel' => 'Ngena kwiphaneli yehoseyile',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Amaxabiso oTshintsho',
        'sub-title' => 'Uluhlu lwemilinganiselo yamva nje yokuguqulwa kwemali kwivenkile yakho.',
        'from' => 'Umthombo wemali',
        'to' => 'Indawo ekuyiwa kuyo imali',
        'rate' => 'Izinga loguqulo',
        'view-exchange-panel' => 'Lawula iiReyithi zoTshintsho',
    

        'vew-exchange-panel' => 'iphaneli yolawulo lwezinga lotshintshiselwano',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Izivumelwano zeengcali',
        'sub-title' => 'Zeziphi iingcali ezisebenza kwivenkile yam?',
        'cost' => 'Imali yekhontrakthi',
        'duration' => 'Ubude bexesha',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Umhla Rhoxisa',
        'end_at' => 'Umhla wokuzisa',
        'tip' => 'Qasha iingcali eziphezulu kwi-Selldone ukunceda ukukhulisa ishishini lakho.',
        'view-experts' => 'Cofa ukuze uqalise.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Xela amasango entlawulo asebenzayo kwivenkile :shop.',
        'tip-title' => 'Iingcebiso ezibalulekileyo',
        'tip' => "Yiya kwiphepha lolawulo lwe-portal kwivenkile yakho kwaye wongeze ubuncinci izibuko kwimizuzu embalwa. Abathengi bakho bathanda ukuhlawula ngokukhawuleza nangokukhuselekileyo ngeephothali ze-intanethi.",
        'view-shop-gateways' => 'Ngena kulawulo lweportal yevenkile.',
        'view-gateways' => 'Jonga amasango amaninzi',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Iiodolo',
        'sub-title' => 'Uluhlu lweeodolo endizifumene kule veki.',
        'total_baskets' => 'Iiodolo zizonke',
        'total_posBaskets' => 'Iiodolo zeMali zizonke',
        'pos-title' => 'Ibhokisi yokugcina ye-POS',
        'chart-label' => 'Iiodolo zigqityiwe (ezi odolo azihlawulwa ngokuyimfuneko!)',
        'tip-title' => 'Kufuneka uzame ngamandla...',
        'tip' => "Akukho mpumelelo ilula.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Iziko Lokuqhuba',
        'sub-title' => 'Ingakanani iodolo esiyenze evenkileni kule veki?',
        'tip-title' => 'Awuzange uthengise!',
        'tip' => "Ngelishwa awukhange uthengise kule veki. Kufuneka ufumane okungakumbi kwivenkile yakho. Unokongeza iimveliso ezininzi, ukhethe imifanekiso engcono okanye ubhale iinkcazo ezingcono kwiimveliso zakho. Cinga ngomsebenzi osisigxina kwishishini lakho. Ukuba uyenza ngokufanelekileyo kwaye ungaphoxeki, uya kuphumelela.",
        'view-process-center' => 'Jonga iziko lenkqubo',
        'return' => [
            'title' => 'Ubuyiselwe Umyalelo',
            'subtitle' => 'Ingxelo ebuyisiweyo yeodolo.',
            'tip-title' => 'Ubusazi ukuba...',
            'tip' => "Unokwenza iirejista zemali ezininzi zevenkile njengoko ufuna ngeSelldone POS! Ngapha koko, unokuguqula ithebhulethi yakho, ifowuni ephathwayo okanye ilaptop kwi-inbox yakho. Ukuba oko kuyakonwabisa, Selldone POS Yinto ekufuneka uqale ukuyisebenzisa ngoku. Kuthatha nje ukucofa ngokulula ukuyindulula, sinayo yonke into elungiselelwe umncedisi wakho kwangaphambili.",
            'view-pos' => 'Ngena kwiCashier yam yeVenkile ekwi-Intanethi'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Iiseshoni',
        'sub-title' => 'Ndindwendwele kangaphi ivenkile yam?',
        'countries-title' => 'Ngawaphi amazwe ebesoloko etyelelwa kakhulu?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ngaba uyafuna ukwenza imali ngaphandle kokuchitha ibhakethi enye?',
        'message' => "Molo :name, lixesha lokuba uqale ukufumana umvuzo ngeSelldone! Yiya kwi-Dashboard> Okuninzi> Ukwenza imali> Fumana ikhonkco lakho loKwandisa. Yabelana ngekhonkco nabahlobo bakho, kwaye ufumane amakhadi esipho kunye nesabelo seentlawulo zabo. Inxalenye engcono? Nobabini wena nomhlobo wakho nifumana ikhadi lesipho!",
        'action' => 'Jonga ikhonkco lam lentshayelelo',
        'mail-clip' => "<b style='color: #C2185B'>Kubalulekile:</b> Ukuba usebenzisa iinkonzo ze-imeyile ezinje ngeGmail enciphisa ubude be-imeyile, fumana olu khetho lulandelayo ekupheleni kwe-imeyile ukubonisa ingxelo epheleleyo kwaye ucofe kuyo:",

        'no-coin-reward' => "<b style='color: #C2185B'>Uxolo:</b> Umsebenzi wakho awukhange ufezekise imfuneko yokufumana umvuzo wasimahla we-SEL Coins. Zama ngamandla kwaye uthengise ngakumbi kwivenkile yakho kwisizini ezayo.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Halala:</b> Umsebenzi omhle kakhulu! Ngokusekwe kwintsebenzo yakho ebalaseleyo, sifake i-:amount SEL iiNkozo kwi-akhawunti yakho njengomvuzo.",

        'need-buy-license' => "<b>Nyusa ishishini lakho:</b> Kubonakala ngathi awukabhalisi nasiphi na isicwangciso sobhaliso kwiwebhusayithi yakho! Phucula ngoku ukuze uvule ezinye iimpawu nge-:amount nje ngenyanga ukuba ihlawulwe ngonyaka.",
        'not-afford-message' => "Ukuba awukwazi ukufikelela okanye unayo nayiphi na ingxaki ngentlawulo, zive ukhululekile ukusitshela nge support@selldone.com.",
        'add-domain' => "<b>Kutheni ungabinayo idomeyini elungiselelwe ishishini lakho?</b><br> Yongeza isizinda kwiwebhusayithi yakho ngoku; yeyazimahla!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone yi<del> imveliso</del> <span style = 'color: forestgreen'>uluntu</span> .<br> Yiba ngumthengisi oqeqeshiweyo!",
        'message' => "Landela amaphepha asemthethweni e-Selldone kwi-Twitter, i-LinkedIn kunye ne-social networks. Sithumele naziphi na izimvo, izicelo okanye izigxeko okanye uthathe inxaxheba kwiingxoxo malunga ne-Selldone. Sikwayinxalenye yoluntu lwe-Selldone ukuba <b>You make</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Kufunyenwe iiodolo ezitsha zeeavokhado|:shop_title :time',
        'title' => "Ingxelo yokwenziwa komsebenzi kwiiyure ezingama-24 zokugqibela",
        'message' => "Abathengi bakho balindele ukuba iiodolo zakho ziqwalaselwe kwaye zibekwe amaxabiso. Phendula izicelo zabathengi bakho ngokukhawuleza ukuze ufumane iintengiso ezininzi.",
        'card_title' => "Iiodolo emgceni",
        'card_subtitle' => "Ukusukela kwi-:date",

        'card_payed' => "Iiodolo ezihlawulweyo"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Phendula kwiposi yakho kwi-:community_title',
        'title' => "I-:name kunye ne-:count abanye bajoyine incoko kwizithuba zakho!",
        'message' => "Molo :name, izithuba zakho zifumana ingqalelo! Ufumene izimvo kwindawo yethu. Ngena kwi-akhawunti yakho ukujoyina ingxoxo kwaye ubone ukuba wonke umntu uthini.",
        'title-simple' => "I-:name inike izimvo ngeposi yakho!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Phendula isihloko sakho :topic_title',
        'title' => ":name, kunye ne-:count abanye baphendule ngesihloko sakho.",
        'message' => "Molo :name, isihloko sakho sifumana ingqalelo! Ufumene iimpendulo kwindawo yethu. Ngena kwi-akhawunti yakho ukujoyina ingxoxo kwaye ubone ukuba wonke umntu uthini.",
        'title-simple' => "I-:name iphendule kwisihloko sakho.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Ngena eNtsha :name',
        'category' => 'Izaziso zokhuseleko',
        'title' => "Ngena kwiAkhawunti",
        'message' => "Othandekayo :name, ukungena kwi-akhawunti yakho ye-Selldone kuchongiwe.",   // Login in selldone (seller)
        'message-shop' => ":name othandekayo, ukungena ngemvume kwi-:shop_title kufunyenwe.",  // Login in shop (buyer)

        'footer' => "Ukuba awungenanga, nceda utshintshe igama lokugqithisa lakho.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Ukurhoxiswa",
        'deposit' => "Idiphozithi",

        'withdraw_subject' => "Ukurhoxa kwiakhawunti :account",
        'deposit_subject' => "Idiphozithi kwi-akhawunti ye-:account",

        'message' => "Ugqithiso lwemali lwenziwe ngezi nkcukacha zilandelayo.",

        'type' => "Uhlobo lwentengiselwano",

        'from' => "Iakhawunti yomthombo",
        'to' => "Destination account",

        'desc' => "Inkcazo yentengiselwano",
        'action' => "Jonga intengiselwano",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Kubalulekile! Ukwaphulwa kwemithetho| :shop",
        'category' => "Ulwazi olubalulekileyo",
        'title' => "Ivenkile yakho yohlwaywa",
        'action' => "Vula ideshibhodi yeevenkile",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => "I-:inviter ikumemile ukuba ujoyine i-Selldone",
        'title' => "I-:name ikuthumele i-:amount ukuze uncede uqalise ivenkile yakho entsha ye-intanethi kwaye wenze imali ngayo!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Yamkela isimemo",
        'owner' => "Umnini we",
        'join-date' => "Ujoyine i-Selldone kwi",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Ikhonkco lokubuyisela| :shop",
        'category' => "Ukhuseleko lwevenkile",
        'title' => "Gcina ilinki yokubuyisela ye <b>:shop_name</b> .",
        'message' => "Le imeyile ithunyelwe kuwe kuba ucele ukubuyisela ivenkile yakho. Ukucofa kwikhonkco elingezantsi kuya kubuyisela ivenkile yakho kunye nayo yonke idatha ekuyo.",
        'action' => "Qinisekisa ukuBuyiselwa kwakhona kwevenkile",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Ingakanani imali egcinwe yi-Selldone kwishishini lakho?',
        'sub-title' => 'Ukususela kumhla :start ukuya kwi:end',
        'infrastructure' => [
            'title' => 'Iziseko zophuhliso',
            'subtitle' => 'Iiseva, iCDN, uGcino, kunye nezinye iinkonzo zelifu',
        ],
        'experts' => [
            'title' => 'Iingcali kunye nabasebenzi',
            'subtitle' => 'Abaphuhlisi, ukugcinwa, kunye nenkxaso',
        ],
        'total_save' => 'Imali egciniweyo iyonke'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Ukusebenza kwakho',
        'sub-title' => 'Isishwankathelo seshishini ukusuka kwi:start ukuya kwi:end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Abasebenzisi ababuyiselweyo',

        'shop_views' => 'Iimboniselo zevenkile',
        'baskets' => [
            'title' => 'Iinqwelo zokuthengela',
            'subtitle' => 'Xela inani leenqwelo zokuthenga ezintsha',

        ],
        'products' => [
            'title' => 'Products Overview',
            'subtitle' => 'Ubume beemveliso evenkileni ngohlobo',
            'value_name' => 'Iimveliso'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Itotali yokujonga iphepha lewebhusayithi',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Ufumene iodolo entsha. Nceda uye kwiphepha lokucwangcisa iodolo kwiphaneli yakho yomthengisi.",
        'subject' => "🛍️ Umyalelo omtsha ofunyenweyo| :order_id",
        'your_revenue' => "Ingeniso yakho",
    ],
    'vendor-invite' => [
        'title' => 'Isimemo somthengisi',
        'message' => "Ufumene isimemo sokuba ngumthengisi we :shop_name. Ungayamkela okanye uyikhabe ngokunqakraza kula maqhosha alandelayo.",
        'subject' => ":shop_name |Isimemo sokuba ngumthengisi wethu",
        'accept' => "Yamkela kwaye ube nguMthengisi",
        'reject' => "Yala",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Isimemo sokujoyina iQela lethu',
        'message' => "Umenyiwe ukuba ujoyine i-:vendor_name kwi-:shop_name. Ungasamkela okanye usale esi simemo usebenzisa la maqhosha angezantsi.",
        'subject' => "Isimemo sokujoyina i-:vendor_name|Yiba liLungu leQela",
        'accept' => "Yamkela kwaye ujoyine iQela",
        'reject' => "Yala",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Ikhowudi yakho yokuNgena ye-:shop",
        'header-message' => "Sikuthumelela le imeyile kuba ucele ikhowudi yokungena evenkileni. Nceda ufumane igama lokugqithisa leXesha elinye (OTP) ngezantsi:",
        'footer-message' => "Le khowudi iya kusebenza imizuzu eyi-10. Ukuba awuyicelanga le khowudi yokungena, nceda ungayihoyi le imeyile."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Qinisekisa i-imeyile yakho| :shop",
        'title' => 'Ukuqinisekiswa kwe-imeyile',
        'header-message' => "Molo :name,<br>Nceda uqinisekise ukuba **:email** yidilesi yakho ye-imeyile ngokucofa iqhosha elingezantsi okanye usebenzisa ikhonkco elingezantsi kwiiyure ezingama-48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Uhlaziyo lweMveliso| :shop",
        'title' => "Uhlaziyo kwiMeko yeMveliso-iiyure ezingama-24 zokugqibela",
        'message' => "Ndiyathemba ukuba lo myalezo ukufumene kakuhle. Olu luhlaziyo olufutshane lokukwazisa malunga nobume beemveliso zakho kwiqonga lethu kwiiyure ezingama-24 ezidlulileyo.\nNgeli xesha, kukho utshintsho kwisimo sezinye iimveliso. Olu tshintsho lusenokuba ngenxa yokuthenga, uhlaziyo lwesitokhwe, okanye ezinye iziganeko ezinxulumeneyo.\nNgolwazi oluthe vetshe malunga nemveliso nganye, nceda ungene kwi-akhawunti yakho kwaye ujonge icandelo 'leSimo seMveliso'.",
        'action' => "Vula iPhaneli yomthengisi",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Iiodolo ezininzi zifunyenwe| :shop | :date",
        'title' => "Isaziso seMida yeSininzi",
        'message' => "Ufumene ibhetshi yee-odolo ezininzi. Nceda undwendwele iphepha lokucwangcisa iodolo kwiqela lakho ukuze ufumane iinkcukacha ezithe vetshe. Unokukhuphela kwakhona uluhlu lwe-odolo ngekhonkco elikhuselekileyo elinikiweyo, elisebenzayo kwiintsuku ezisi-7.<br><br>\n        <b>IMPORTANT:</b> Eli khonkco lisebenza kangangeentsuku ezisi-7.<br>\n        Eli khonkco liyaguquguquka, ngoko ngalo lonke ixesha ucofa kulo, uya kufumana ezona odolo zihlaziyiweyo ngalo mhla uthile. <b>Kuthetha ukuba ukuba imeko yentlawulo ye-odolo iyatshintsha ukuba yaliwe, awusayi kuphinda uwubone loo myalelo kwi-CSV ekhutshelweyo, okanye ukuba iodolo ihlawulwe, iya kuvela kuluhlu.</b><br><br>\n        <ul>\n            <li>I-CSV iqulethe ii-odolo ezihlawulweyo ezinomhla ogciniweyo kwi-:date.</li>\n            <li>Umhla ogciniweyo ngumhla apho umsebenzisi ecofa ukuphuma kwiphepha le-odolo.</li>\n        </ul>\n        <b>Ukuthintela ii-odolo eziphindwe kabini, soloko ujonga i-Order ID ngaphambi kokuba uyithumele.</b>",
        'action' => "Khuphela Uludwe Lweodolo",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Ezinye izinto kwi-odolo yakho azamkelwa kwaye azikwazi ukuziswa. Imali yezi zinto iya kubuyiselwa kwikhadi lakho kungekudala."
    ]

];
