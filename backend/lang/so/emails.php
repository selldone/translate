<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Fariintani waxay soo dhawaynaysaa iibsadaha cusub ee dukaanka.',
        ShopMailTemplateCodes::OrderCheckout => 'Ogeysiiskan waxa la diraa marka iibsaduhu xaqiijiyo dalab.',
        ShopMailTemplateCodes::OrderPayment => 'Ogeysiintani waxay xaqiijinaysaa lacag bixinta guusha leh ee uu bixiyay macaamilka.',
        ShopMailTemplateCodes::OrderUpdate => 'Fariintan waxaa loo diraa si loogu cusboonaysiiyo iibsadaha xaaladda dalabkooda.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Fariintan waxaa loo diraa iibiyaha si loogu ogeysiiyo amar la xaqiijiyay.',
        ShopMailTemplateCodes::PosCheckout => 'Ogeysiintan waxaa loo soo diray si loo xaqiijiyo dalabka iibka ee iibsadaha.',
        ShopMailTemplateCodes::PosPayment => 'Ogeysiintani waxay xaqiijinaysaa barta iibka ee uu bixiyo iibsadaha.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Fariintani waxay ogeysiinaysaa iibiyaha iibka lagu sameeyay goobta ay wax ka iibinayaan.',
        ShopMailTemplateCodes::ShopContact => 'Ogeysiintan waxa la soo diraa marka foomka xidhiidhka la gudbiyo.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ogeysiintani waxay ku wargelinaysaa isticmaale inay heleen kaadhka hadyada.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Fariintani waxay soo dhawaynaysaa iibiyaha cusub ee dukaanka.',
        ShopMailTemplateCodes::ShopVendorInvite => "Fariintan waxa loo soo diray si loogu martiqaado iibiye inuu ku soo biiro suuqaaga.",
        ShopMailTemplateCodes::ShopVendorOrder => "Fariintan waxaa loo diraa iibiyaha marka dalabka lagu helo mid la bixiyay ama lacag caddaan ah oo la bixinayo (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Loo diro maalin kasta si loogu cusboonaysiiyo iibiyeyaasha heerka badeecadooda.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Fariintan waxa loo soo diray in lagu martiqaado iibiye inuu ku soo biiro suuqaaga.",

        ShopMailTemplateCodes::UserLogin => "Ku ogeysii isticmaalaha tafaasiisha soo galitaanka, oo ay ku jiraan IP ciwaanka, taariikhda, iyo aaladaha, ujeedooyinka amniga.",
        ShopMailTemplateCodes::LoginCode => "U dir furaha sirta ah ee hal mar isticmaalayaasha si ay u soo galaan dukaanka.",

        ShopMailTemplateCodes::EmailVerifyLink => "Dir xiriir si aad u xaqiijiso ciwaanka iimaylka isticmaalaha Iimaylkan waxa la soo diraa marka isticmaaluhu isku diiwangeliyo SMS oo uu galo iimaylka. Laguma soo diro marka isticmaaluhu si toos ah isku diiwaan geliyo galitaanka bulshada ama iimaylka.",

        ShopMailTemplateCodes::EmailBulkOrder => "U dir liiska dalabaadka la helay iyo kuwa la bixiyay si guud maalin gaar ah."


    ,

    ],


    'global' => [
        'greetings' => 'Hi :name',
        'end-statement' => 'Kooxda taageerada',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Ma u baahan tahay caawimo? Weydii [support@selldone.com](mailto:support@seldone.com) ama booqo [xarunta caawinta](https://selldone.com/community).",
        'selldone-team' => 'Kooxda Selldone',
        'footer-shop' => "Haddii aad u baahan tahay wax lagaa caawiyo fadlan ha ka waaban inaad noo soo dirto iimaylka:shop_mail",
        'accept' => "Aqbal",
        'reject' => "Diid",
        'verify' => "xaqiijin",
        'title' => "Ciwaanka",
        'value' => "Qiimaha",
        'description' => "Sharaxaada",
        'shop' => "Dukaan",
        'shop-info' => "Macluumaadka Kaydka",
        'user' => "isticmaale",
        'user-info' => "Macluumaadka Xisaabaadka",
        'license' => "Shatiga",
        'status' => "Xaalada",
        'start' => "Bilow",
        'end' => "Dhammaad",
        'renewal' => "Cusboonaysiinta",
        'view' => "Daawo",

        'balance' => "Dheelitiran",
        'card_number' => "Lambarka Kaadhka",
        'cvv' => "Cvv",
        'expire_date' => "Taariikhda dhacaysa",

        'Dashboard' => "Dashboard-ka",
        'order' => "dalbo",
        'view_order' => "Eeg amarka",
        'pay_now' => "Pay now",

        'official_selldone' => "Iibinta rasmiga ah",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Lacagta",
        'free-balance' => "Isku dheelitirka bilaashka ah",
        'locked-balance' => "dheelitirka quful",
        'bot' => "Bot",
        'requests' => "Codsiyada",
        'baskets' => 'Gawaadhida',
        'physical' => "Jireed",
        'virtual' => "Virtual",
        'file' => "Faylka",
        'service' => "Adeegga",
        'fulfillment' => "Oofinta",
        'open' => "Furan",
        'reserved' => "La xafiday",
        'canceled' => "La joojiyay",
        'payed' => "La bixiyay",
        'cod' => "COD",
        'orders-count' => 'Dalabka',
        'payments-count' => 'Lacagaha',
        'confirms-count' => 'Xaqiijiyay',
        'sends-count' => 'Diraa',
        'delivers-count' => 'Bixiya',
        'count' => 'Tiri',
        'transactions-count' => 'Wax kala iibsiga ayaa tirinaya',
        'success-transactions' => 'Wax kala iibsiga guusha',
        'total-amount' => 'Tirada guud',
        'amount' => 'Qadarka',
        'wage' => 'Mushahar',
        'debug' => 'Ciribtirka',
        'pos' => 'POS',
        'live' => 'noolow',
        'CheckQueue' => 'Hubi safka',
        'OrderConfirm' => 'Dalabka xaqiijin',
        'PreparingOrder' => 'Diyaarinta amarka',
        'SentOrder' => 'Dalabka la diray',
        'ToCustomer' => 'Loo geeyey macmiilka',
        'Pending' => 'La sugayo',
        'Accepted' => 'Waa la aqbalay',
        'Rejected' => 'Waa la diiday',
        'pc' => 'PC',
        'tablet' => 'Kiniinka',
        'phone' => 'Taleefanka',
        'total' => 'Wadarta',
        'view-detail' => 'Faahfaahinta eeg',
        'empty' => 'Madhan',
        'dropshipping' => 'Dhisidda',
        'reply' => 'jawaab',
        'reactions' => 'Falcelinta',
        'Comments' => 'Faallo',
        'last-comment' => 'Faallo u dambaysay',
        'response-to' => 'Jawaabta',
        'posts' => 'Qoraalada',
        'post' => 'Ku dhaji',

        'name' => 'Magaca',
        'email' => 'iimaylka',
        'type' => 'nooca',
        'device' => 'Qalabka',
        'platform' => 'Platform',
        'browser' => 'Browser',
        'time' => 'Waqtiga',
        'Wallet' => 'Wallet',
        'date' => 'Taariikhda',

        'account' => 'Xisaab',
        'transaction' => 'Wax kala iibsiga',
        'fee' => 'khidmad',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Qaybta',
        'password' => 'Password-ka',
        'verify-login' => "Xaqiiji & Soo gal",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hyper',
        'buy-now' => "Hadda iibso",
        'add-domain' => "Add Domain",
        'views' => 'Muuqaalo',


        'country' => 'Dalka',
        'address' => 'ciwaanka',
        'postal' => 'Koodhka Boostada',
        'building_no' => 'Dhismaha #',
        'building_unit' => 'Unug #',
        'message' => 'Fariinta',


        'customer' => 'Macmiil',
        'cart-items' => 'Alaabta gaadhiga',
        'payment' => 'Lacag bixinta',
        'receiver' => 'qaataha',
        'virtual-items' => 'Walxaha dhabta ah',
        'no-payment' => 'Lacag la\'aan!',

        'enable' => 'Daar',
        'access' => 'Helitaanka',
        'bank' => 'Macluumaadka bangiga',

        'vendor' => 'Iibiyaha',

        'view_content' => "Daawo nuxurka buuxa",
        'files' => 'Faylasha',
        'download' => 'Download',
        'file_name' => 'Magaca faylka',
        'file_size' => 'Cabbirka',

        'subscription' => 'Isdiiwaangelinta',
        'products' => 'Alaabta',
        'vendor_products' => 'Alaabta iibiya',

        'pickup' => 'Qaadista',

        'minutes' => 'Daqiiqado',
        'hours' => 'Saacadaha',

        'refund' => 'Lacag soo celin',
        'recipient_address' => 'Cinwaanka qaataha',
        'signature' => 'Saxeexa',
        'blockchain' => 'Blockchain',
        'details' => 'Faahfaahin',


    

        'Shop' => 'Dukaan',
        'dashboard' => 'dashboard',
        'comments' => 'faallooyin',
        'wallet' => 'jeebka',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Warbixinta Waxqabadka Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone Warbixinta Xiliyeed'
        ],
        'Onboarding' => [
            'id' => 'hi',
            'name' => 'Selldone Ganacsatada'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Taageero :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Xaqiiji, Selldone'
        ],
        'Welcome' => [
            'id' => 'hi',
            'name' => 'Bulshada, Selldone'
        ],
        'NewShop' => [
            'id' => 'baayacmushtar',
            'name' => 'Selldone Ganacsatada'
        ],
        'Approve' => [
            'id' => 'ansixiyo',
            'name' => 'Selldone Ganacsatada'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Maamulka Dalabka :name'
        ],

        'Recovery' => [
            'id' => 'soo kabasho',
            'name' => 'Kooxda Soo kabashada Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'La sugayo ⌛',
        'PAYED' => 'La bixiyay ✅',
        'CANCELED' => 'La joojiyay ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Maamule',
            'OFFICER' => 'Sarkaal iyo Kormeere',
            'AUDITING' => 'Maamulaha hanti dhawrka',
            'EMPLOYEE' => 'Shaqaale',
            'PRODUCT' => 'Maareeyaha alaabta',
            'CONTENT' => 'Maareeyaha nuxurka',
            'MARKETING' => 'Maareeyaha suuqgeynta',
            'VIEWER' => 'Daawade',

        ],
        'subject' => ":inviter ayaa kugu martiqaaday :level ahaan| :shop",
        'category' => "Martiqaadka shaqaalaha",
        'title' => "Waxaa lagugu martiqaaday <b>:shop_name</b> sida <b>:level</b> .",
        'message' => "Waxa aad heshay casuumad aad ula shaqaynayso kooxda <b>:shop_title</b> Waxaad haysataa ikhtiyaarka ah inaad aqbasho ama diido dalabkan. Haddii aad doorato inaad aqbasho, fadlan gal adeega Selldone si aad u xaqiijiso go'aankaaga. Marka la xaqiijiyo, waxaad heli doontaa qaybta maamulka dukaanka.",

    ],

    'welcome-email' => [
        'subject' => "👋 Ku Soo Dhawoow :name, Aynu Ku Bilowno Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Ku soo dhawoow Selldone",
        'message' => "Waad ku mahadsan tahay doorashada Selldone! Hadda waxaad tahay qayb ka mid ah bulsho firfircoon oo isku xidha iibiyeyaasha caalamiga ah macaamiisha, ganacsiyada maxaliga ah iyo ganacsiyada, iyo shakhsiyaadka shirkadaha. Dhammaan aaladahayada Master-ka iyo Pro waa kuu diyaar ** lacag la'aan ** iyo ** aan xadidnayn ***. Waxaan halkaan u joognaa inaan ku taageerno oo aan u furno albaabada guushaada.",

        'index' => "Tallaabada :step.",

        'step-domain' => [
            'title' => 'Kudar Domainkaaga Gaarka ah',
            'message' => "Si aad u bilowdo, ku dar boggaaga gaarka ah si bilaash ah gudaha Dukaanka Dashboardka ee hoos yimaada Settings> Domains Settings.",
            'action' => 'Maamul Domainskayga',
        ],
        'step-landing' => [
            'title' => 'Habbee boggaga guriga',
            'message' => "Habbee boggaga guriga adiga oo aadaya Dashboard> Bogagga. Dooro bogga degitaanka ama samee mid cusub. Way fududahay oo dareen leh, oo waxaad bilaabi kartaa inaad isla markiiba ka shaqeyso.",
            'action' => 'Habbee boggaga soo degista',
        ],
        'step-payment' => [
            'title' => 'Dejinta Hababka Lacag-bixinta',
            'message' => "Bilow inaad si toos ah u aqbasho lacagaha akoonkaaga bangiga. Si aad ugu xidho bixiyayaasha lacag bixinta sida Stripe, PayPal, iyo in ka badan, aad Dashboard> Accounting> Gateway.",
            'action' => 'Ku dar hababka lacag bixinta',
        ],
        'step-products' => [
            'title' => 'Kudar Alaabtaada',
            'message' => "Si fudud ugu dar badeecooyinka iyo qaybaha gudaha Dashboard-ka> Alaabta. Waa sida maamulida faylalka iyo faylalka kombuyutarkaaga – si buuxda u jiid iyo-jiid oo diyaar ah. Waxa kale oo aad soo dejin kartaa badeecado badan adiga oo isticmaalaya Excel. Nashqad muunad ah ayaa diyaar ah oo kaa caawinaysa inaad bilowdo.",
            'action' => 'Maamul Alaabtayda',
        ],
        'step-shipping' => [
            'title' => 'Dejinta hababka rarka',
            'message' => "Si aad macaamiisha ugu dallaciso dhoofinta, ku qeex hababka dhoofintaada Dashboard-ka> Logistic> Rarida. Waxaad dejin kartaa qiime kala duwan iyo taageero meelo kala duwan. Ha iloobin inaad dejiso asalka bakhaarkaaga Dashboard> Logistic> Bakhaarka.",
            'action' => 'Maamul hababka rarida',
        ],
    

        'seller' => [
            'title' => 'Ma tahay iibiye?',
            'message' => 'Si aad u bilowdo iibinta, geli dashboardkaaga Selldone adiga oo isticmaalaya isku xirka hoose oo samee dukaankaagii ugu horeeyay oo bilaash ah. Tani waxay qaadan doontaa dhowr daqiiqo oo waxaad yeelan doontaa dukaan adiga kuu gaar ah iyo goobta internetka. Waxaan markaas kugu hagi doonaa tillaabooyinka xiga oo waxaan heli doonaa albaabka lacag bixinta.',
            'action' => 'Soo gal dashboardkayga',
        ],
        'buyer' => [
            'title' => 'Waxaan ahay iibsade',
            'message' => 'Hambalyo. Markaad xubin ka noqoto Selldone, waxaad ka takhalusi doontaa dhammaan dhibaatooyinka xubinnimada iyo xaqiijinta dukaamada onlineka ah. Si aad uga faa\'iidaysato bakhaar kasta iyo goob kasta oo adeegsata madal Selldone, waxaad ku geli kartaa hal gujin oo waxaad ka dhigi kartaa iibsashadaada mid fudud, degdeg ah oo badbaado leh.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Account > Lacag',
        'title' => "Dacwada Guusha",
        'message' => "Your account <b>:account_number</b> has been charged <b>:amount</b> successfully.",
        'account' => 'Xisaab',
        'charge' => 'Lacag',
        'balance' => 'Dheelitiran',
        'footer' => "Ka dhig ganacsiga mid sahlan, la gaari karo, oo la heli karo qof kasta oo adduunka ah."
    ],

    'verify-email' => [
        'subject' => "🙌 Buuxi isdiiwaangelintaada ilaa Selldone! Xaqiiji xidhiidhka",
        'category' => "HAL TALLAABAD AYAAD U SOCOTAA",
        'title' => "Xaqiiji ciwaanka emailkaaga",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Haddii ay dhibaato kaa haysato dhagsiga badhanka Xaqiijinta, koobiy oo ku dheji URL hoose ee biraawsarkaaga: :activation_url",
        'next-step' => "Marka xigta, waxaanu kuu soo diri doonaa qaar ka mid ah agab waxtar leh iyo hage tallaabo-tallaabo ah si ay kuugu fududaato inaad ku darto domainkaaga gaarka ah, dejiso lacag bixinta, ku darto alaabada, oo aad hesho dalabkaaga koowaad.",

    ],
    'verify-email-code' => [
        'subject' => "Koodhka xaqiijinta ee:name",
        'category' => "SECURITY",
        'title' => "Koodhka xaqiijinta iimaylka",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Dukaankaagu Waa Diyaar| :name",
        'category' => "HAL TALLAABAD AYAAD U SOCOTAA",
        'title' => "Dejinta waa dhammaatay",
        'account_title' => "Koontadaada",
        'account_msg' => "Xaqiiji oo gal akoonkaaga macluumaadkan",
        'shop_msg' => "Macluumaadka koontada ee nidaamka hawlgalka ganacsiga Selldone.",

    ],

    'reset2fa' => [
        'category' => "FARIINTA RASMI AH EE AMNIGA",
        'title' => "Codso in aad joojiso gelida 2-tallaabo",
        'message' => "Waxaad helaysaa iimaylkan sababtoo ah waxaanu helnay codsi ah in aan dib u dajinno xaqiijinta laba arrimood ah ee **:name** akoon leh **:email** iimaylka.<br><br>Waxaanu ka helnay faahfaahinta soo socota akoonkaaga:",
        'footer' => "Haddii aadan codsan dib u dejin sirta ah, tallaabo dheeraad ah looma baahna.",
        'action' => 'Jooji gelida laba-tallaabo',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Dukaankaagu hadda waa diyaar!",
        'category' => "DHASHAY DUKAANKA INTERNETKA CUSUB EE ADUUNKA",
        'title' => "Hambalyo, :name!",
        'message' => "<b> Hambalyo, :name! Ganacsigaagii khadka tooska ahaa ee onlineka ahaa hadda waa toos! Waxaad qaaday tillaabadii ugu horeysay ee dhanka guusha, waxaana halkaan u joognaa inaan ku caawino tallaabo kasta oo jidka ah. Haddi aad waligaa u baahato caawimo, fariin kaliya ayaanu kuu haynaa—kooxdayada taageerada ayaa had iyo jeer kuu joogta. Waxaan kugu hagi doonaa marxalad kasta si aad u hesho dukaankaagu u shaqeeyo si aan kala go 'lahayn.",
        'pdf-book' => "Ha moogaanin buug-gacmeedka ku lifaaqan: Ganacsigaaga u samee sida ciyaarta oo kale",

        'account' => [
            'title' => 'Talaabada 1: Deji jeebkaada Selldone',
            'message' => "Si aad u bilowdo, ku samee akoon boorsadaada Selldone Tani waa halka lagaa jari doono khidmadahaaga, sidoo kale waa meesha aad wax ku shuban karto si aad u ilaaliso in dukaankaagu si habsami leh u socdo. Haddii dheelitirkaagu waligiis xumaado, ha welwelin! Dukaankaagu wuu sii shaqayn doonaa iyada oo aan kala go' lahayn.",
            'action' => 'Gal boorsada',
        ],

        'shop-account' => [
            'title' => 'Tallaabada 2: ku xidh akoonka dukaanka',
            'message' => "Marka xigta, ku xidh akoonkaaga jeebka dukaankaaga. Madaxa <b>Store> Accounting> Invoice</b>, oo ku xidh boorsadaada. Tani waxay hubinaysaa in dhammaan lacagaha macaamiishu ay si toos ah ugu shubaan akoonkaaga bangiga-Selldone wax cadad ah kama jarayso dakhligaaga.",
            'action' => 'Kaydka qaansheegta',
        ],

        'gateway' => [
            'title' => 'Tallaabada 3: Ku xidh Kadinka Lacag-bixinta onlaynka ah',
            'message' => "Now, let’s set up your online payment gateway. Go to <b>Store > Accounting > Port</b> and click on <b>Add New Port</b>. Select your currency, and you'll see a list of available payment gateways. Connecting a gateway is quick and easy, but if you need any help, feel free to check the Selldone guides or reach out to us.",
            'action' => 'Ku dar portal dukaanka',
        ],

        'domain' => [
            'title' => 'Talaabada u dambaysa: isku xidhka goob go\'an',
            'message' => "Hadda, ku xidh boggaaga gaarka ah dukaankaaga. Tani waxay u oggolaanaysaa macaamiisha inay iibsadaan alaabtaada ama adeegyadaada oo ay si toos ah lacag kuugu bixiyaan.",
            'action' => 'Soo bandhigida iyo helitaanka kaadhadhka hadyada aan xadidnayn',
        ],
    ],


    'basket-list' => [
        'item' => "shayga",
        'count' => "Tiri",
        'price' => "qiimo",
        'discount-code' => "Koodhka dhimista",
        'customer-club' => 'Naadiga macaamiisha',
        'shipping' => "Raridda",
        'total' => "Wadarta",
        'offer' => "Bixin",
        'coupon' => "Kuuban",
        'lottery' => "Abaalmarinta",
        'tax' => "Canshuur",
        'tax_included' => "Waxaa ku jira qiimaha",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Habka',
        'amount' => 'Qadarka',
        'giftcard' => 'Gift card',
        'payment' => 'Lacag bixinta',
    ],


    'shop-subscription-email' => [
        'category' => "Cusboonaysiinta isdiiwaangelinta",
        'title' => "Shatiga Dukaanka: :shop_title",
        'title-reserved' => "Shatiga kaydka ah: :shop_title",
        'title-active' => "Shatiga firfircoon: :shop_title",
        'title-finished' => "Shatiga la dhammeeyay: :shop_title",
        'title-cancel' => "Jooji shatiga: :shop_title",
        'message' => "Qorshahaaga shatiga dukaanka waa la cusboonaysiiyay,",
        'RESERVED' => "⚡ Qorshahaaga isdiiwaangelinta waa la xafiday **.",
        'ACTIVE' => "Qorshahaaga isdiiwaangelinta waa la hawlgeliyay**.",
        'FINISHED' => "🚧 Qorshahaaga isdiiwaangelinta waa la dhameeyay**.",
        'CANCEL' => "⛔ Qorshahaagi isdiiwaangelinta waa la joojiyay**.",
    ],

    'support' => [
        'subject' => "Xarunta Taageerada|:name ayaa ku jawaabay",
        'category' => "Xarunta taageerada",
        'title' => "Waxaad heshay jawaab",
        'action' => "Furo maamulka dukaanka",
    ],

    'shop-customer-join' => [
        'subject' => "Ku biir :shop_title",
        'category' => "Dabaaldegga macaamiisha cusub",
        'title' => "Waan ku faraxsanahay xubinnimadaada",
        'action' => "Booqo hadda",
    ],

    'shop-vendor-join' => [
        'subject' => "Iibiyaha Dusha| :shop_title",
        'category' => "Dabaaldegga iibiyaha cusub",
        'title' => "Waan ku faraxsanahay xubinnimadaada",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kaarka Hadiyada :shop_title",
        'category' => "Ku dar kaar cusub",
        'title' => "Hambalyo, waxaad heshay kaarka hadiyadda",
        'action' => "Hadda wax ka iibso",
        'message' => "Waxa aad heshay kaadhka hadyada oo dhan :balance :currency Kaarka hadiyadda waxaad ka iibsan kartaa dukaankayaga.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Xarunta Taageerada| :shop",
        'category' => "taageero",
        'title' => "Waxaad heshay jawaab",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Xaqiijinta Dalabka|Dalbo :order_id",
        'title' => "dalbo",
        'message' => "Waxaad ka dalbatay dukaankayaga. Waanu helnay dalabkaaga waxaana kuu soo diri doona iimayl kale marka lacagta la xaqiijiyo."
    ,

        'payments' => 'Lacagaha',
    ],

    'order-payment' => [
        'subject' => "🛍️ Xaqiijinta Lacag-bixinta|Dalbo :order_id",
        'title' => "Dalabka lacag bixinta",
        'message' => "Lacag bixintaadii way dhammaatay,<br> Dalabkaagii waanu helnay Waxaan kuu soo diri doonaa iimayl kale marka dalabkaagu soo diro.",
    

        'payments' => 'Lacagaha',
    ],

    'order-update' => [
        'subject' => "🛍️ Cusboonaysiinta Xaaladda Dalbashada|Dalbo :order_id",
        'title' => "Cusboonaysiinta Xaaladda Dalbashada",
        'message' => "Dalabkaagii waa la cusboonaysiiyay Waxaad ka hubin kartaa xaaladii u dambaysay ee dalabkan akoonkaaga",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Dalabkaagu waxa uu ku jiraa safka habaynta Waanu ku ogaysiin doonaa marka la diyaarinayo.",
                'OrderConfirm' => "Dalabkaagii waa la xaqiijiyay oo diyaargarowgu wuu bilaabmay.",
                'PreparingOrder' => "Dalabkaaga waa la diyaarinayaa waxaana la soo diri doonaa dhawaan.",
                'SentOrder' => "Dalabkaagii waa la raray Waxaad heli doontaa waqti yar.",
                'ToCustomer' => "Dalabkaagii waa la keenay Waxaan rajeyneynaa inaad ku raaxaysato!",

                'PreparingOrder-PICKUP' => "Dalabkaaga waa la diyaarinayaa. Waxaad heli doontaa ogeysiin marka ay diyaar u tahay qaadista",
                'SentOrder-PICKUP' => "Dalabkaagu waxa uu diyaar u yahay soo qaadis Fadlan u imow dukaanka si aad u soo qaado.",
                'ToCustomer-PICKUP' => "Dalabkaagii waa la qaaday Waxaan rajeyneynaa inaad ku raaxaysato!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Dalabkaagu waxa uu ku jiraa safka habaynta Waan ku ogeysiin doonaa marka ay diyaar noqoto.",
                'OrderConfirm' => "Dalabkaagii waa la xaqiijiyay diyaar garowna wuu socdaa.",
                'PreparingOrder' => "Dalabkaaga waa la diyaarinayaa waxaana laguu soo diri doonaa dhawaan.",
                'ToCustomer' => "Dalabkaagii casriga ahaa waxa lagu soo shubay akoonkaaga Mahadsanid!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Codsiga adeeggaagu wuxuu ku jiraa safka Waanu ku ogaysiin doonaa marka aanu bilowno",
                'OrderConfirm' => "Adeeggaagu waa la xaqiijiyay waxaanan isu diyaarinaynaa inaan bilowno.",
                'PreparingOrder' => "Waxaan diyaarineynaa adeegaaga, waxaana ku ogeysiin doonaa marka la dhammeeyo.",
                'ToCustomer' => "Adeeggaagu waa dhammaystiran yahay. Waad ku mahadsan tahay inaad na dooratay!"
            ],
            'FILE' => [
                'PreparingOrder' => "Faylkaaga waa la diyaarinayaa waxaana la heli doonaa goor dhow.",
                'ToCustomer' => "Faylkaagu waa diyaar oo waa la keenay Hadda waad soo dejisan kartaa"
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Dalabkaaga isdiiwaangelinta ayaa ku jira safka Waanu ku ogaysiin doonaa marka habayntu bilaabanto",
                'OrderConfirm' => "Ku biiristaada waa la xaqiijiyay oo waa la diyaarinayaa",
                'PreparingOrder' => "Waxaan diyaarineynaa isdiiwaangelintaada oo dhawaan ayey bilaaban doontaa.",
                'SentOrder' => "Diiwaangelintaada waa la hawlgeliyay Waxaad heli doontaa wararka socda",
                'ToCustomer' => "Adeegga is-diiwaangelinta ayaa loo hawlgeliyay si guul leh."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Hambalyo :name|Foojar cusub: :title',
        'category' => "HAMBALYO, VOUCHER CUSUB",
        'message' => "Hey :name,<br><br>You've received a new voucher as a gift from us! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. This voucher is worth **:price :currency**.<br><br>You've taken the first step, and we’re here to help you unlock new features with your voucher! Please login with **:email** and find your voucher in the Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congratulations!",
        'action' => "Dashboardkayga",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Hambalyo, Gacaliye :name | Waxaad heshay hadiyad',
        'category' => "Ogaysiis qaadashada hadiyad",
        'title' => "Hadiyadaha adiga",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Hadiyadaha",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Dalab Cusub Oo La Helay| :order_id",
        'title' => "New Order",
        'message' => "Waxaad heshay amar cusub Fadlan tag bogga habaynta dalabka ee dukaankaaga.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Macluumaadkaaga Buuxa',
        'output-form-title' => 'Macluumaadka shayga la iibsaday',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Warbixin todobaadle ah :time',
        'title' => 'Warbixinta waxqabadka dukaanka toddobaadlaha ah',
        'message' => "This is your store's weekly report from <b>:start</b> to <b>:end</b>. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Warbixinta kaydintaada :amount ee sadexdii bilood ee la soo dhaafay| :shop_title',
        'title' => 'Warbixinta xilliyeedka ee ku saabsan dhaqdhaqaaqaaga ganacsi, abaal-marinaha iyo kaydinta maaliyadeed',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Xisaabaadka ku xidhan',
        'sub-title' => 'Waa maxay xaaladii u dambaysay ee akoonnada jeebka ee ku xidhan dukaankayga?',
        'view-wallet' => 'Eeg boorsada',
        'tip-title' => 'Talooyin muhiim ah',
        'tip' => "Talaabada xigta, ku samee akoon bilaasha boorsadaada iibka ah oo ku xidh dukaankan. Xitaa haddii hadhaaga akoonkaaga Selldone uu yahay mid taban, macaamiishaadu waxay wali wax ku iibsan karaan waxna ka iibsan karaan dukaankaaga dhibaato la'aan. Xogtaada iyo adeeggaaga lama joojin doono ama lama xaddidi doono ugu yaraan 1 bil.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Ku xidh akoon'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps la rakibay',
        'sub-title' => 'Liiska abka aad ku rakibtay dukaankaaga usbuucan.',
        'tip' => "Ma rabtaa inaad u hesho apps ka badan dukaankaaga?",
        'view-app-store' => 'Booqo Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bots Dukaankaaga',
        'sub-title' => 'Bots iibka firfircoon ee dukaankayga.',
        'tip-title' => 'Iibka Bot',
        'tip' => "Selldone waxa ay ku siisay bots iib oo toos ah. Waxa kaliya oo ay tahay inaad sameyso waa inaad tagtaa Add-ons> Bots panel oo aad dhaqaajiso bots-yada dukaanka. Ogsoonow in adeega khuseeya ay tahay in laga helo dalkaaga.",
        'view-bots' => 'Maamul bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Xiriirinta Macaamiisha',
        'sub-title' => 'Immisa xidhiidh ayaan la yeeshay macaamiishayda toddobaadkan?',
        'faqs' => 'Su\'aalaha Inta Badan La Isweydiiyo',
        'tickets' => 'Tigidhada macaamiisha',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Heerka Isticmaalayaasha',
        'sub-title' => 'Dhaqdhaqaaqa laga bilaabo :start ilaa :end',
        'users' => [
            'title' => 'Macaamiisha',
            'subtitle' => 'Isticmaalayaasha Is-diiwaangelinta',
        ],
        'views' => [
            'title' => 'Booqashooyinka',
            'subtitle' => 'Immisa jeer ayaad booqatay dukaanka',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Isticmaalayaasha soo noqday',

        'shop_views' => 'Muuqaalo Dukaan',
        'baskets' => [
            'title' => 'Gawaarida wax iibsiga',
            'subtitle' => 'Ka warbixi tirada gawaarida cusub ee wax iibsiga',
        ],
        'products' => [
            'title' => 'Guudmarka Alaabooyinka',
            'subtitle' => 'Heerka badeecadaha dukaanka ku jira nooc ahaan',
            'value_name' => 'Alaabta'
        ],
        'products_count' => 'Noocyada alaabta',
        'views_count' => 'Aragtida tirinta',
        'sell_count' => 'Tirinta iibka',
        'send_count' => 'Tirada rarida',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Dejinta dhoofinta',
        'sub-title' => 'Guddiga iibiyeyaasha waaweyn ee dhoofinta dhoofinta Selldone.',
        'total_fulfillments' => 'Wadarta amarada la helay',
        'ds_count' => 'Dalabka la helay',
        'statistics_title' => 'Warbixinta la helay amarada',
        'ds_cancels' => 'Jooji by interface iibiye',
        'ds_rejects' => 'Ka jooji adiga',
        'tip' => "Ma tahay iibiye weyn oo leh bakhaar, warshad, ama qaybiye alaab? Waxaad ku balaadhin kartaa gaadhistaada adoo siinaya alaabtaada iibiyeyaasha kale adoo sii maraya adeega Selldone ee Drop Shipping. Noogu soo dir emailka support@selldone.com si aad wax badan uga barato.",
        'view-drop-shipping-panel' => 'Soo gal guddiga jumlada',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Qiimaha Sarrifka',
        'sub-title' => 'Liiska qiimaha beddelka lacagta u dambeeyay ee dukaankaaga.',
        'from' => 'Source Lacagta',
        'to' => 'Lacagta meesha lagu socdo',
        'rate' => 'Heerka beddelka',
        'view-exchange-panel' => 'Maamul Heerarka Sarrifka',
    

        'vew-exchange-panel' => 'guddiga maareynta sarifka lacagaha',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Qandaraasyada khabiirada',
        'sub-title' => 'Waa maxay xirfadlayaasha ka shaqeeya dukaankayga?',
        'cost' => 'Qadarka heshiiska',
        'duration' => 'Muddada',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Taariikhda burin',
        'end_at' => 'Taariikhda keenista',
        'tip' => 'Waxaad ka kiraysan kartaa khabiirada ugu fiican Selldone si ay u horumariyaan ganacsigaaga.',
        'view-experts' => 'Guji si aad u bilowdo',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Albaabka Lacag-bixinta Firfircoon ee Dukaankaaga :shop',
        'tip-title' => 'Talooyin muhiim ah',
        'tip' => "Tag bogga maamulka portal ee dukaankaaga oo ku dar ugu yaraan hal deked dhowr daqiiqo gudahood. Macaamiishaadu waxay jecel yihiin inay si degdeg ah oo ammaan ah wax uga bixiyaan marinnada onlaynka ah.",
        'view-shop-gateways' => 'Soo gal maamulka marinka dukaankayga',
        'view-gateways' => 'Eeg albaabo badan',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Dalabka',
        'sub-title' => 'Liiska dalabaadka aan helay todobaadkan.',
        'total_baskets' => 'Wadarta dalabaadka',
        'total_posBaskets' => 'Wadarta dalabaadka lacagta caddaanka ah',
        'pos-title' => 'Sanduuqa Dukaanka POS',
        'chart-label' => 'Dalabka la dhammeeyay (amaradan lama bixiyo!)',
        'tip-title' => 'Waa in aad isku daydaa...',
        'tip' => "Ma jiro guul fudud.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Xarunta farsamaynta',
        'sub-title' => 'Intee in le\'eg ayaanu ka shaqaynay bakhaarka toddobaadkan?',
        'tip-title' => 'Iib ma aadan haysan!',
        'tip' => "Nasiib darro ma aadan haysan wax iib ah usbuucan. Waxaad u baahan tahay inaad wax badan u hesho dukaankaaga. Waxaad ku dari kartaa badeecooyin badan, dooro sawirro wanaagsan ama waxaad u qori kartaa sharraxaad ka wanaagsan alaabtaada. Tixgeli shaqo waqti-buuxa ah ganacsigaaga. Haddii aad si sax ah u sameyso oo aadan ka niyad jabin, waad guuleysan doontaa.",
        'view-process-center' => 'Eeg xarunta nidaamka',
        'return' => [
            'title' => 'Dalabka la soo celiyay',
            'subtitle' => 'Ka warbixi dalabaadka la soo celiyay.',
            'tip-title' => 'Ma ogtahay in...',
            'tip' => "Waxaad samayn kartaa inta ugu badan ee kaydka kaydka lacagta caddaanka ah ee aad rabto iyada oo loo marayo Selldone POS! Dhab ahaantii, waxaad u rogi kartaa tablet-kaaga, moobilka ama laptop-kaaga sanduuqaaga. Haddii taasi ay ku farxad geliso, Iibinta POS waa wax ay tahay inaad hadda bilowdo isticmaalka. Kaliya waxay qaadataa gujis fudud si loo bilaabo, waxaan haysanaa wax walba oo horey loogu sii diyaariyay serverkaaga.",
            'view-pos' => 'Soo gal Khasnajiga Bakhaarkayga Online'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Fadhiyo',
        'sub-title' => 'Immisa jeer ayaan booqday dukaankayga?',
        'countries-title' => 'Wadamadee ayaa inta badan loo booqday?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ma doonaysaa in aad lacag samayso adiga oo aan ku bixin hal doolar?',
        'message' => "Hi :name, waa waqtigii lagu bilaabi lahaa kasbashada Selldone! Tag Dashboard-ka> Wax ka badan> Lacag-ururinta> Hel isku-xidhka gudbintaada. La wadaag xidhiidhka saaxiibbadaa, oo hel kaadhadhka hadiyadda iyo qayb lacag bixintooda ah. Qaybta ugu fiican? Adiga iyo saaxiibkaaba waxaad heshaan kaadhka hadyada!",
        'action' => 'Eeg xiriiriyaha hordhaca ah',
        'mail-clip' => "<b style='color: #C2185B'>Muhiim:</b> Haddii aad isticmaasho adeegyada iimaylka sida Gmail oo xaddidaya dhererka iimaylka, hel ikhtiyaarka soo socda dhammaadka iimaylka si aad u muujiso warbixinta oo dhan oo guji",

        'no-coin-reward' => "Waan ka <b style='color: #C2185B'>xunahay:</b> Hawshaadu ma ay buuxin shuruudihii lagu doonayay in lagu helo abaal-marin qadaadiic ah oo SEL ah. Isku day si adag oo wax badan uga iibi dukaankaaga xilli ciyaareedka soo socda.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Hambalyo:</b> Shaqo fiican! Iyada oo ku saleysan wax qabadkaaga aadka u wanaagsan, waxaan akoonkaaga ugu soo shubnay :amount SEL qadaadiic abaal marin ahaan.",

        'need-buy-license' => "<b> Heerka Ganacsigaaga:</b> Waxay u egtahay inaadan weli iska diiwaan gelin wax qorshe ah oo isdiiwaangelin ah shabakadaada! cusboonaysii hadda si aad u furto astaamo badan oo kaliya :amount bishii haddii la bixiyo sanad walba.",
        'not-afford-message' => "Haddii aad la kulanto wax arrimo ah oo ku saabsan lacag-bixinta ama aadan awoodin hadda, ha ka waaban inaad nagula soo xiriirto support@selldone.com.",
        'add-domain' => "<b>Waa maxay sababta aan meheraddaada u yeelanayn goob gaar ah?</b><br> Hadda ku dar domain website kaaga; waa bilaash!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone waa a<del> alaabta</del> <span style = 'color: forestgreen'>bulshada</span> .<br> Noqo iibiye xirfadle ah!",
        'message' => "Raac boggaga rasmiga ah ee Selldone ee Twitter, LinkedIn iyo shabakadaha bulshada. Noo soo dir wixii faallooyin ah, codsiyo ama dhaleecayn ah ama ka qaybqaado doodaha ku saabsan Selldone. Waxaan sidoo kale ka mid nahay bulshada Selldone ee <b>aad sameyso</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Avocado cusub ayaa la helay|:shop_title :time',
        'title' => "Warbixinta waxqabadka 24-kii saac ee la soo dhaafay",
        'message' => "Macaamiishaadu waxay sugayaan amaradaada in dib loo eego oo la qiimeeyo. Ka jawaab codsiyada macaamiishaada sida ugu dhakhsaha badan si aad u hesho iibyo badan.",
        'card_title' => "Dalabka safka ku jira",
        'card_subtitle' => "Tan iyo :date",

        'card_payed' => "Dalabka la bixiyay"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Ka jawaab qoraalkaaga gudaha :community_title',
        'title' => ":name iyo :count kuwa kale ayaa ku biiray wada hadalka qoraalladaada!",
        'message' => "Hi :name, fariimahaagu waa la fiirsaday! Waxaad ka heshay faallooyin bulshadayada. Gal akoonkaaga si aad ugu biirto dooda oo arag waxa qof kastaa leeyahay.",
        'title-simple' => ":name ayaa ka faallooday boostadaada!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Ka jawaab mawduucaaga :topic_title',
        'title' => ":name, iyo :count kuwa kale ayaa uga jawaabay mawduucaaga.",
        'message' => "Hi :name, mawduucaagu waa soo jiitay! Waxaad ka heshay jawaabo bulshadayada dhexdeeda. Gal akoonkaaga si aad ugu biirto dooda oo arag waxa qof kastaa leeyahay.",
        'title-simple' => ":name ayaa kaga jawaabay mawduucaaga.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Login cusub :name',
        'category' => 'Ogeysiinta amniga',
        'title' => "Gal Account",
        'message' => "Gacaliye :name, waxaa lagugu soo galay akoonkaaga Selldone.",   // Login in selldone (seller)
        'message-shop' => "Gacaliye :name, waxaad soo gashay :shop_title.",  // Login in shop (buyer)

        'footer' => "Haddii aanad gudaha u gelin, fadlan beddel eraygaaga sirta ah.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Ka bixida",
        'deposit' => "Deposit",

        'withdraw_subject' => "ka bixi account :account",
        'deposit_subject' => "Deposit to account :account",

        'message' => "Xawilaadda lacagta waxaa lagu sameeyay qodobbada soo socda.",

        'type' => "Nooca wax kala iibsiga",

        'from' => "Koontada isha",
        'to' => "Destination account",

        'desc' => "Sharaxaada macaamilka",
        'action' => "Eeg wax kala iibsiga",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Muhiim! Xeerarka jebinta| :shop",
        'category' => "Warbixin xasaasi ah",
        'title' => "Dukaankaagii waa la ganaaxay",
        'action' => "Fur dashboardka dukaanka",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter ayaa kugu martiqaaday inaad ku biirto Selldone",
        'title' => ":name ayaa kuu soo diray :amount si ay kaaga caawiso bilaabida dukaankaaga onlineka ah oo aad ka shaqeysiiso!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Aqbal martiqaadka",
        'owner' => "Mulkiilaha",
        'join-date' => "On Selldone tan iyo",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Xiriirinta soo kabashada| :shop",
        'category' => "Ammaanka dukaanka",
        'title' => "Ku kaydi isku xirka soo kabashada ee <b>:shop_name</b> .",
        'message' => "iimaylkan waxa laguu soo diray sababtoo ah waxaad codsatay inaad soo celiso bakhaarkaaga. Riixitaanka xiriirka hoose wuxuu soo ceshan doonaa dukaankaaga iyo dhammaan xogta uu leeyahay.",
        'action' => "Xaqiiji soo kabashada dukaanka",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Immisa lacag ah ayuu Selldone u kaydiyay ganacsigaaga?',
        'sub-title' => 'Laga bilaabo taariikhda :start ilaa :end',
        'infrastructure' => [
            'title' => 'Kaabayaasha dhaqaalaha',
            'subtitle' => 'Adeegayaasha, CDN, Kaydinta, iyo adeegyada kale ee daruuraha',
        ],
        'experts' => [
            'title' => 'Khubarada & Shaqaalaha',
            'subtitle' => 'Horumarinta, dayactirka, iyo taageerada',
        ],
        'total_save' => 'Wadarta lacagta la keydiyay'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Waxqabadkaaga',
        'sub-title' => 'Dulmar ganacsi laga bilaabo :start ilaa :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Isticmaalayaasha soo noqday',

        'shop_views' => 'Muuqaalo Dukaan',
        'baskets' => [
            'title' => 'Gawaarida wax iibsiga',
            'subtitle' => 'Ka warbixi tirada gawaarida cusub ee wax iibsiga',

        ],
        'products' => [
            'title' => 'Guudmarka Alaabooyinka',
            'subtitle' => 'Heerka badeecadaha dukaanka ku jira nooc ahaan',
            'value_name' => 'Alaabta'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Isku geynta boggaga shabakada',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Waxaad heshay amar cusub Fadlan tag bogga habaynta dalabka ee guddiga iibiyahaaga.",
        'subject' => "🛍️ Dalab Cusub Oo La Helay| :order_id",
        'your_revenue' => "Dakhligaaga",
    ],
    'vendor-invite' => [
        'title' => 'Martiqaadka iibiyaha',
        'message' => "Waxaad heshay martiqaad si aad u noqoto iibiyaha :shop_name. Waad aqbali kartaa ama diidi kartaa adigoo gujinaya badhamada soo socda.",
        'subject' => ":shop_name |Casuumad si aad u noqoto iibiyeheena",
        'accept' => "Aqbal oo noqo iibiye",
        'reject' => "Diid",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Martiqaadka Ku Biiritaanka Kooxdayada',
        'message' => "Waxaa lagugu martiqaaday inaad ku biirto :vendor_name at :shop_name. Waxaad aqbali kartaa ama diidi kartaa martiqaadkan addoo isticmaalaya badhanka hoose.",
        'subject' => "Martiqaad ku biirista :vendor_name|Noqo Xubin Kooxeed",
        'accept' => "Aqbal oo ku biir Kooxda",
        'reject' => "Diid",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Koodhkaaga galitaanka ee :shop",
        'header-message' => "Waxaan kuugu soo dirnay iimaylkan sababtoo ah waxaad codsatay summada soo gelida dukaanka. Fadlan hoos ka hel eraygaaga sirta ah ee Hal-Mar (OTP)",
        'footer-message' => "Koodhkani waxa uu shaqayn doona 10 daqiiqo Haddii aadan codsan summada galitaanka, fadlan iska dhaaf iimaylkan."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Xaqiiji iimaylkaga| :shop",
        'title' => 'Xaqiijinta iimaylka',
        'header-message' => "Hi :name,<br> Fadlan xaqiiji in **:email** yahay e-mailkaaga adigoo gujinaya badhanka ama isticmaal xidhiidhka hoose 48 saacadood gudahood.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Cusboonaysiinta Alaabta| :shop",
        'title' => "Cusboonaysiinta Xaaladda Alaabta - 24 saac ee u dambeeyay",
        'message' => "Waxaan rajeynayaa in fariintan ay si fiican kuu heli doonto. Kani waa casriyeyn kooban oo lagugu wargelinayo heerka ay marayso alaabtaada goobtayada 24-kii saacadood ee la soo dhaafay.\nInta lagu jiro muddadan, waxaa jiray isbeddelo ku yimid heerka badeecadaha qaarkood. Isbeddeladan waxa laga yaabaa inay sabab u tahay iibsiyada, cusboonaysiinta saamiyada, ama dhacdooyinka kale ee la xidhiidha.\nSi aad u hesho macluumaad faahfaahsan oo ku saabsan badeecad kasta, fadlan gal akoonkaaga oo hubi qaybta 'Xaalka Alaabta'.",
        'action' => "Fur guddiga iibiyaha",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Dalabka waaweyn waa la helay| :shop | :date",
        'title' => "Ogeysiinta Dalabka Badan",
        'message' => "Waxaad heshay qayb dalabaad ah oo badan Fadlan booqo bogga habaynta dalabka ee guddidaada wixii faahfaahin dheeraad ah. Waxa kale oo aad kala soo bixi kartaa liiska dalabka adiga oo isticmaalaya isku xirka sugan ee la bixiyay, oo shaqaynaya 7 maalmood.<br><br>\n        <b> MUHIIM:</b> Xidhiidhkani wuxuu shaqaynayaa 7 maalmood.<br>\n        Xidhiidhkani waa mid firfircoon, marka mar kasta oo aad gujiso, waxaad heli doontaa dalabaadka ugu casriyeysan ee taariikhdan gaarka ah. <b>Waxaa loola jeedaa haddii heerka lacag bixinta dalabka uu isku beddelo diidmo, kuma arki doontid amarkaas CSV-ga la soo dejiyay, ama haddii dalabka la bixiyo, wuxuu ka soo muuqan doonaa liiska.\n        <ul>\n            <li> CSV waxay ka kooban tahay amaro lacag bixin ah oo leh taariikh cayiman oo ku taal :date.</li>\n            <li>Taariikhda la xafiday waa taariikhda marka isticmaaluhu uu gujiyo hubinta bogga dalabka.</li>\n        </ul>\n        <b> si looga hortago dalabaadka nuqulka ah, had iyo jeer hubi Amarka ID ka hor inta aanad dirin.</b>",
        'action' => "Soo deji Liiska Dalabka",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Alaabta qaar ee dalabkaaga lama aqbalin lamana keeni karo Qadarka alaabtan waxa lagu soo celin doonaa kaadhkaga wakhti yar."
    ]

];
