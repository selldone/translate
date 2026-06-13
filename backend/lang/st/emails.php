<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Molaetsa ona o amohela moreki e mocha lebenkeleng.',
        ShopMailTemplateCodes::OrderCheckout => 'Tsebiso ena e romelloa ha moreki a tiisa taelo.',
        ShopMailTemplateCodes::OrderPayment => 'Tsebiso ena e tiisa tefo e atlehileng e entsoeng ke moreki.',
        ShopMailTemplateCodes::OrderUpdate => 'Molaetsa ona o rometsoe ho nchafatsa moreki ka boemo ba odara ea bona.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Molaetsa ona o romelloa ho morekisi ho mo tsebisa ka odara e tiisitsoeng.',
        ShopMailTemplateCodes::PosCheckout => 'Tsebiso ena e romelloa ho netefatsa ntlha ea thekiso bakeng sa moreki.',
        ShopMailTemplateCodes::PosPayment => 'Tsebiso ena e tiisa ntlha ea tefo ea thekiso e entsoeng ke moreki.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Molaetsa ona o tsebisa morekisi ka theko e entsoeng sebakeng sa bona sa thekiso.',
        ShopMailTemplateCodes::ShopContact => 'Tsebiso ena e romelloa ha foromo ea khokahanyo e kentsoe.',
        ShopMailTemplateCodes::ShopGiftCard => 'Tsebiso ena e tsebisa mosebelisi hore o fumane karete ea mpho.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Molaetsa ona o amohela morekisi e mocha lebenkeleng.',
        ShopMailTemplateCodes::ShopVendorInvite => "Molaetsa ona o rometsoe ho mema morekisi hore a kene 'marakeng oa hau.",
        ShopMailTemplateCodes::ShopVendorOrder => "Molaetsa ona o romelloa ho morekisi ha odara e amoheloa ka boemo ba Paid kapa Cash on Delivery (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "E romelloa letsatsi le letsatsi ho nchafatsa barekisi ka boemo ba lihlahisoa tsa bona.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Molaetsa ona o rometsoe ho mema morekisi hore a kene 'marakeng oa hau.",

        ShopMailTemplateCodes::UserLogin => "Tsebisa mosebelisi ka lintlha tsa ho kena, ho kenyeletsoa aterese ea IP, letsatsi, le sesebelisoa, molemong oa ts'ireletso.",
        ShopMailTemplateCodes::LoginCode => "Romela password ea nako e le 'ngoe hore basebelisi ba kene ka lebenkeleng.",

        ShopMailTemplateCodes::EmailVerifyLink => "Romela sehokelo ho netefatsa aterese ea lengolo-tsoibila la mosebelisi. Lengolo-tsoibila lena le romelloa ha mosebelisi a ingolisa ka SMS mme a kenya lengolo-tsoibila la hae. Ha e rometsoe ha mosebelisi a ingolisa ka kotloloho ka ho kena sechabeng kapa lengolo-tsoibila.",

        ShopMailTemplateCodes::EmailBulkOrder => "Romela lenane la liodara tse amohetsoeng le tse lefelloang ka bongata bakeng sa letsatsi le itseng."


    ,

    ],


    'global' => [
        'greetings' => 'Lumela, :name!',
        'end-statement' => 'Sehlopha sa tšehetso',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "U hloka thuso? Botsa ho [support@selldone.com](mailto:support@selldone.com) kapa etela [setsi sa rona sa thuso](https://selldone.com/community).",
        'selldone-team' => 'Sehlopha sa Selldone',
        'footer-shop' => "Haeba u hloka thuso ka eng kapa eng ka kopo, u seke oa tsilatsila ho re romella lengolo-tsoibila: :shop_mail",
        'accept' => "Amohela",
        'reject' => "Hana",
        'verify' => "netefatsa",
        'title' => "Sehlooho",
        'value' => "Boleng",
        'description' => "Tlhaloso",
        'shop' => "Reka",
        'shop-info' => "Boloka Boitsebiso",
        'user' => "Mosebedisi",
        'user-info' => "Lintlha tsa Akhaonto",
        'license' => "Laesense",
        'status' => "Boemo",
        'start' => "Qala",
        'end' => "QETA",
        'renewal' => "Nchafatso",
        'view' => "Sheba",

        'balance' => "Ho leka-lekanya",
        'card_number' => "Nomoro ea karete",
        'cvv' => "Cvv",
        'expire_date' => "Letsatsi la ho felloa ke nako",

        'Dashboard' => "Dashboard",
        'order' => "taelo",
        'view_order' => "Sheba taelo",
        'pay_now' => "Pay now",

        'official_selldone' => "REKISI MOFISI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Chelete",
        'free-balance' => "Ho leka-lekana mahala",
        'locked-balance' => "Tekanyo e notletsoeng",
        'bot' => "Bot",
        'requests' => "Likopo",
        'baskets' => 'Likariki',
        'physical' => "Ea nama",
        'virtual' => "Virtual",
        'file' => "Faele",
        'service' => "Tshebeletso",
        'fulfillment' => "Phethahatso",
        'open' => "Bula",
        'reserved' => "Reserved",
        'canceled' => "E hlakotsoe",
        'payed' => "E lefelletsoe",
        'cod' => "COD",
        'orders-count' => 'Litaelo',
        'payments-count' => 'Litefo',
        'confirms-count' => 'E tiisa',
        'sends-count' => 'E romela',
        'delivers-count' => 'E tsamaisa',
        'count' => 'Bala',
        'transactions-count' => 'Palo ea litšebelisano',
        'success-transactions' => 'Katleho ditransekshene',
        'total-amount' => 'Kakaretso',
        'amount' => 'Chelete',
        'wage' => 'Moputso',
        'debug' => 'Hlakola',
        'pos' => 'POS',
        'live' => 'Phela',
        'CheckQueue' => 'Sheba mokoloko',
        'OrderConfirm' => 'Odara netefatsa',
        'PreparingOrder' => 'Ho lokisa taelo',
        'SentOrder' => 'Odara e rometsoeng',
        'ToCustomer' => 'E fetisetsoa ho moreki',
        'Pending' => 'E emetse',
        'Accepted' => 'E amohetsoe',
        'Rejected' => 'Hanoa',
        'pc' => 'PC',
        'tablet' => 'Letlapa',
        'phone' => 'Mohala',
        'total' => 'Kakaretso',
        'view-detail' => 'Sheba lintlha',
        'empty' => 'Ha ho letho',
        'dropshipping' => 'Dropshipping/',
        'reply' => 'Araba',
        'reactions' => 'Boitšoaro',
        'Comments' => 'Maikutlo',
        'last-comment' => 'Maikutlo a ho qetela',
        'response-to' => 'Karabo ho',
        'posts' => 'Melaetsa',
        'post' => 'Poso',

        'name' => 'Lebitso',
        'email' => 'Email',
        'type' => 'mofuta',
        'device' => 'Sesebelisoa',
        'platform' => 'Sethala',
        'browser' => 'Sebatli',
        'time' => 'Nako',
        'Wallet' => 'Sepache',
        'date' => 'Letsatsi',

        'account' => 'Akhaonto',
        'transaction' => 'Transaction',
        'fee' => 'Tefo',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Sehlopha',
        'password' => 'Password',
        'verify-login' => "Netefatsa & Kena",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Reka hona joale",
        'add-domain' => "Add Domain",
        'views' => 'Maikutlo',


        'country' => 'Naha',
        'address' => 'aterese',
        'postal' => 'Nomoro ea poso',
        'building_no' => 'Mohaho #',
        'building_unit' => 'Yuniti #',
        'message' => 'Molaetsa',


        'customer' => 'Moreki',
        'cart-items' => 'Lintho tsa kariki',
        'payment' => 'Tefo',
        'receiver' => 'Moamoheli',
        'virtual-items' => 'Lintho tse bonahalang',
        'no-payment' => 'Ha ho tefo!',

        'enable' => 'Thusa',
        'access' => 'Phihlello',
        'bank' => 'Lintlha tsa banka',

        'vendor' => 'Morekisi',

        'view_content' => "Sheba litaba tse felletseng",
        'files' => 'Lifaele',
        'download' => 'Khoasolla',
        'file_name' => 'Lebitso la faele',
        'file_size' => 'Boholo',

        'subscription' => 'Ngoliso',
        'products' => 'Lihlahisoa',
        'vendor_products' => 'Lihlahisoa tsa barekisi',

        'pickup' => 'Nka',

        'minutes' => 'Metsotso',
        'hours' => 'Lihora',

        'refund' => 'Puseletso',
        'recipient_address' => 'Aterese ea Moamoheli',
        'signature' => 'Tshaeno',
        'blockchain' => 'Blockchain',
        'details' => 'Lintlha',


    

        'Shop' => 'Reka',
        'dashboard' => 'dashboard',
        'comments' => 'maikutlo',
        'wallet' => 'sepache',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Tlaleho ea Ts\'ebetso, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Tlaleho ea Nako, Selldone'
        ],
        'Onboarding' => [
            'id' => 'dumela',
            'name' => 'Amohela, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Support :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Netefatsa, Selldone'
        ],
        'Welcome' => [
            'id' => 'dumela',
            'name' => 'Sechaba, Selldone'
        ],
        'NewShop' => [
            'id' => 'bahoebi',
            'name' => 'Amohela, Selldone'
        ],
        'Approve' => [
            'id' => 'amohela',
            'name' => 'Amohela, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Tsamaiso ea Litaelo :name'
        ],

        'Recovery' => [
            'id' => 'ho hlaphoheloa',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'E emetse ⌛',
        'PAYED' => 'E lefelletsoe ✅',
        'CANCELED' => 'E hlakotsoe ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Motsamaisi',
            'OFFICER' => 'Ofisiri le Mookameli',
            'AUDITING' => 'Motsamaisi oa libuka',
            'EMPLOYEE' => 'Mosebeletsi',
            'PRODUCT' => 'Motsamaisi oa lihlahisoa',
            'CONTENT' => 'Motsamaisi oa litaba',
            'MARKETING' => 'Motsamaisi oa papatso',
            'VIEWER' => 'Sebohi',

        ],
        'subject' => ":inviter o u memile joalo ka :level| :shop",
        'category' => "Memo ea basebetsi",
        'title' => "U memetsoe ho <b>:shop_name</b> joalo ka <b>:level</b> .",
        'message' => "U fumane memo ea ho sebelisana le sehlopha sa <b>:shop_title</b> khoebong. U na le khetho ea ho amohela kapa ho hana tlhahiso ena. Haeba u khetha ho amohela, ka kopo kena ho ts'ebeletso ea Selldone ho netefatsa qeto ea hau. Ha u netefatsa, u tla fumana monyetla oa ho kena karolong ea tsamaiso ea lebenkele.",

    ],

    'welcome-email' => [
        'subject' => "👋 Rea u amohela :name, Ha re Qalang ka Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Rea u amohela ho Selldone",
        'message' => "Kea leboha ha u khethile Selldone! Hona joale u karolo ea sechaba se mafolofolo se hokahanyang barekisi ba lefats'e le bareki, likhoebo tsa lehae le likhoebo, le batho ka bomong le likhoebo. Lisebelisoa tsohle tsa rona tsa Master le Pro li fumaneha ho uena ** mahala ** le ** se nang moeli **. Re mona ho u tšehetsa le ho bula mamati a katleho ea hau.",

        'index' => "Mohato oa :step.",

        'step-domain' => [
            'title' => 'Kenya Sebaka sa Hau sa Tloaelo',
            'message' => "Ho qala, eketsa sebaka sa hau sa marang-rang mahala ho Dashboard ea Lebenkele tlas'a Litlhophiso> Litlhophiso tsa Domains.",
            'action' => 'Laola Libaka Tsa Ka',
        ],
        'step-landing' => [
            'title' => 'Iketsetse Leqephe la Hau la Lehae',
            'message' => "Iketsetse leqephe la hau la lehae ka ho ea ho Dashboard > Maqephe. Khetha leqephe la ho fihla kapa u thehe le lecha. Ho bonolo ebile ho bonolo, 'me u ka qala ho sebetsa ho eona hang-hang.",
            'action' => 'Customize My Landing Page',
        ],
        'step-payment' => [
            'title' => 'Seta Mekhoa ea Tefo',
            'message' => "Qala ho amohela litefo ka kotloloho akhaonteng ea hau ea banka. Ho hokela bafani ba litefo ba hau joalo ka Stripe, PayPal, le tse ling, e ea ho Dashboard > Accounting > Gateway.",
            'action' => 'Eketsa Mekhoa ea ho Tefo',
        ],
        'step-products' => [
            'title' => 'Kenya Lihlahisoa tsa Hau',
            'message' => "Kenya lihlahisoa le likarolo habonolo ho Dashboard > Lihlahisoa. Ho tšoana le ho laola lifaele le lifoldara ho komporo ea hau - ho hula le ho theola ho lokile. U ka boela ua kenya lihlahisoa ka bongata u sebelisa Excel. Mohlala oa template oa fumaneha ho u thusa ho qala.",
            'action' => 'Laola Lihlahisoa Tsa Ka',
        ],
        'step-shipping' => [
            'title' => 'Seta Mekhoa ea ho Romela',
            'message' => "Ho lefisa bareki bakeng sa ho romella, hlalosa mekhoa ea hau ea ho romella ho Dashboard > Logistic > Shipping. O ka beha litheko tse fapaneng le tšehetso bakeng sa libaka tse fapaneng. Se ke oa lebala ho beha sebaka sa hau sa polokelo ho Dashboard> Logistic> Warehouse.",
            'action' => 'Laola Mekhoa ea ho Romela',
        ],
    

        'seller' => [
            'title' => 'A na u morekisi?',
            'message' => 'Ho qala ho rekisa, kenya dashboard ea hau ho Selldone ka sehokelo se ka tlase \'me u thehe lebenkele la hau la pele mahala. Sena se tla nka metsotso e seng mekae mme o tla ba le lebenkele la hau le sebaka sa marang-rang. Ka mor\'a moo re tla u tataisa ho mehato e latelang \'me u fumane tsela ea ho lefa.',
            'action' => 'Kena ho dashboard eaka',
        ],
        'buyer' => [
            'title' => 'Ke moreki',
            'message' => 'Kea leboha. Hang ha u se u le setho sa Selldone, u tla tlosa mathata ohle a ho ba setho le ho netefatsa mabenkeleng a marang-rang. Ho rua molemo lebenkeleng leha e le lefe le sebaka sa marang-rang se sebelisang sethala sa Selldone, u ka kena ka ho tobetsa ha \'ngoe\' me u etse hore theko ea hau e be bonolo, e potlake ebile e bolokehe.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Akhaonto > Tjha',
        'title' => "Katleho Tefiso",
        'message' => "Ak'haonte ea hau <b>:account_number</b> e lefisitsoe <b>:amount</b> ka katleho.",
        'account' => 'Akhaonto',
        'charge' => 'Tefiso',
        'balance' => 'Ho leka-lekanya',
        'footer' => "Etsa hore khoebo e be bonolo, e ka finyelloa, 'me e fumaneha ho mang kapa mang lefatšeng ka bophara."
    ],

    'verify-email' => [
        'subject' => "🙌 Tlatsa ho ingolisa ho Selldone! Netefatsa sehokelo.",
        'category' => "O MOHATO E MONG",
        'title' => "Netefatsa aterese ea hau ea lengolo-tsoibila",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Haeba u na le bothata ba ho tobetsa konopo ea Netefatsa, kopitsa le ho beha URL e ka tlase ho sebatli sa hau sa Marang-rang: :activation_url",
        'next-step' => "Ka mor'a moo, re tla u romella lisebelisoa tsa bohlokoa le tataiso ea mohato ka mohato ho u nolofalletsa ho kenya sebaka sa hau sa marang-rang, ho etsa litefo, ho kenya lihlahisoa, le ho fumana odara ea hau ea pele.",

    ],
    'verify-email-code' => [
        'subject' => "Khouto ya netefatso ya :name",
        'category' => "SECURITY",
        'title' => "Nomoro ea netefatso ea lengolo-tsoibila",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Lebenkele la Hao le se le Lokisitsoe| :name",
        'category' => "O MOHATO E MONG",
        'title' => "Ho seta ho phethiloe",
        'account_title' => "Akhaonto ea hau",
        'account_msg' => "Netefatsa 'me u kene akhaonteng ea hau ka lintlha tsena.",
        'shop_msg' => "Lintlha tsa ak'haonte mabapi le sistimi e sebetsang ea khoebo ea Selldone.",

    ],

    'reset2fa' => [
        'category' => "TS'IRELETSO MOLAETSA MOLAETSA",
        'title' => "Kopa ho tima ho kena ka mehato e 2",
        'message' => "You are receiving this email because we received a request to reset two-factor authentication for **:name** account with **:email** email.<br><br>We found the following details for your account:",
        'footer' => "Haeba o sa kopa ho hlophisoa bocha phasewete, ha ho hlokahale hore u nke khato hape.",
        'action' => 'Tlosa ho kena ka mehato e \'meli',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Lebenkele la hau le se le lokile hona joale!",
        'category' => "HLAHILE LEBENKELE LE LECHA LA ONLINE LEFATŠENG",
        'title' => "Kea u leboha, :name!",
        'message' => "<b> Kea leboha, :name! Khoebo ea hau e ncha ea Marang-rang e se e sebetsa!</b> Re thabetse ho u amohela ho sechaba sa Barekisi. U nkile mohato oa pele o lebisang katlehong, 'me re mona ho u thusa mohatong o mong le o mong oa tsela.<br>Kaha lebenkele la hau le se le lokile, re etse bonnete ba hore u se u ikemiselitse ho fumana litefo ka kotloloho ho tsoa ho bareki ba hau le ho qala ho holisa mmuso oa hau. Haeba o hloka thuso, re sa le hole feela—sehlopha sa rona sa tshehetso se dula se le teng bakeng sa hao.<br><br><b>Mehato e Latelang ya Bohlokwa:</b> Ho qala, etsa bonnete ba hore o se o loketse ho amohela ditefo le tshebetso e thellang. Re tla u tataisa mohatong o mong le o mong ho etsa hore lebenkele la hau le sebetse hantle.",
        'pdf-book' => "Se ke oa fetoa ke buka ea letsoho e khomaretsoeng: Etsa Khoebo ea Hao Joalo ka Papali",

        'account' => [
            'title' => 'Mohato oa 1: Theha ak\'haonte ka sepacheng sa Selldone',
            'message' => "Ho qala, theha ak'haonte sepacheng sa hau sa Selldone. Mona ke moo litefiso tsa hau li tla tlosoa, hape ke moo u tla tlatselletsa ho boloka lebenkele la hau le sebetsa hantle. Haeba tekanyo ea hau e lula e le mpe, u se ke oa tšoenyeha! Lebenkele la hau le tla tsoela pele ho sebetsa ntle le tšitiso.",
            'action' => 'Kena ho sepache',
        ],

        'shop-account' => [
            'title' => 'Mohato oa 2: hokela ak\'haonte lebenkeleng',
            'message' => "E latelang, hokela ak'haonte ea hau ea sepache lebenkeleng la hau. Head ho <b>Store > Accounting > Invoice</b>, 'me u kopanye sepache sa hau. Sena se tiisa hore litefo tsohle tsa bareki li kenngoa ka kotloloho akhaonteng ea hau ea banka — Selldone ha e hule chelete leha e le efe moputsong oa hau.",
            'action' => 'Phanele ea Invoice ea Boloka',
        ],

        'gateway' => [
            'title' => 'Mohato oa 3: Hokela Tefo ea Inthanete Gateway',
            'message' => "Joale, ha re theheng tsela ea hau ea ho patala inthaneteng. Eya ho <b>Store > Accounting > Port</b> ebe o tobetsa <b>Eketsa Port</b> e Ncha. Khetha chelete ea hau, 'me u tla bona lethathamo la litsela tsa ho lefa tse fumanehang. Ho hokela heke ho potlakile ebile ho bonolo, empa haeba o hloka thuso efe kapa efe, ikutloe u lokolohile ho sheba litataiso tsa Selldone kapa ho ikopanya le rona.",
            'action' => 'Kenya portal lebenkeleng',
        ],

        'domain' => [
            'title' => 'Mohato oa ho qetela: ho hokahanya sebaka se inehetseng',
            'message' => "Hona joale, amahanya sebaka sa hau sa marang-rang le lebenkele la hau. Sena se lumella bareki ho reka lihlahisoa kapa litšebeletso tsa hau le ho lefa ka kotloloho ho uena.",
            'action' => 'Ho hlahisa le ho amohela likarete tsa limpho tse se nang moeli',
        ],
    ],


    'basket-list' => [
        'item' => "ntho",
        'count' => "Bala",
        'price' => "theko",
        'discount-code' => "Khoutu ea theolelo",
        'customer-club' => 'Sehlopha sa bareki',
        'shipping' => "Ho tsamaisa ka sekepe",
        'total' => "Kakaretso",
        'offer' => "Nehelano",
        'coupon' => "Setlankane",
        'lottery' => "Khau",
        'tax' => "Lekhetho",
        'tax_included' => "E kenyelelitsoe ka theko",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Mokhoa',
        'amount' => 'Chelete',
        'giftcard' => 'Gift card',
        'payment' => 'Tefo',
    ],


    'shop-subscription-email' => [
        'category' => "Ntlafatso ea peeletso",
        'title' => "Laesense ea Lebenkele: :shop_title",
        'title-reserved' => "Laesense ea ho boloka: :shop_title",
        'title-active' => "Laesense e sebetsang: :shop_title",
        'title-finished' => "E qetile laesense: :shop_title",
        'title-cancel' => "Hlakola laesense: :shop_title",
        'message' => "Leano la hau la laesense ea lebenkele le ntlafalitsoe,",
        'RESERVED' => "⚡ Leano la hau la peeletso le *behiloe**.",
        'ACTIVE' => "🟢 Morero oa hau oa peeletso o **kentsoe **.",
        'FINISHED' => "🚧 Morero oa hau oa ho ngolisa o ** phethetsoe **.",
        'CANCEL' => "⛔ Morero oa hau oa peeletso o ** hlakotsoe **.",
    ],

    'support' => [
        'subject' => "Setsi sa Tšehetso|:name e arabile",
        'category' => "Setsi sa tšehetso",
        'title' => "U fumane karabo",
        'action' => "Bula tsamaiso ea lebenkele",
    ],

    'shop-customer-join' => [
        'subject' => "Kena :shop_title",
        'category' => "Mokete o mocha oa bareki",
        'title' => "Re thabetse ho ba setho sa hau",
        'action' => "Etela hona joale",
    ],

    'shop-vendor-join' => [
        'subject' => "Morekisi Onboarding| :shop_title",
        'category' => "Mokete o mocha oa barekisi",
        'title' => "Re thabetse ho ba setho sa hau",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Karete ea limpho :shop_title",
        'category' => "Kenya karete e ncha",
        'title' => "Kea u lebohela, u fumane karete ea mpho",
        'action' => "Reka hona joale",
        'message' => "U fumane karete ea mpho ea boleng ba :balance :currency. U ka sebelisa karete ena ea limpho lebenkeleng la rona.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Setsi sa Tšehetso| :shop",
        'category' => "tshehetso",
        'title' => "U fumane karabo",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Netefatso ea Odara|Odara :order_id",
        'title' => "taelo",
        'message' => "O kentse odara lebenkeleng la rona. Re fumane odara ea hau mme re tla u romella lengolo-tsoibila le leng hang ha tefo e netefalitsoe."
    ,

        'payments' => 'Litefo',
    ],

    'order-payment' => [
        'subject' => "🛍️ Tiisetso ea Tefo|Odara :order_id",
        'title' => "Taelo ea tefo",
        'message' => "Tefo ea hau e phethiloe,<br> Re fumane odara ea hau. Re tla u romella lengolo-tsoibila le leng ha odara ea hau e romelloa.",
    

        'payments' => 'Litefo',
    ],

    'order-update' => [
        'subject' => "🛍️ Odara Ntlafatso ea Boemo|Odara :order_id",
        'title' => "Odara Boemo ba Update",
        'message' => "Odara ea hau e ntlafalitsoe. U ka sheba boemo ba morao-rao ba odara ena akhaonteng ea hau.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Odara ea hau e mocheng oa ho sebetsa. Re tla u tsebisa ha e ntse e lokisoa.",
                'OrderConfirm' => "Odara ea hau e netefalitsoe, 'me boitokisetso bo se bo qalile.",
                'PreparingOrder' => "Odara ea hau e ntse e lokisoa, 'me e tla romelloa haufinyane.",
                'SentOrder' => "Odara ea hau e rometsoe. U tla e fumana haufinyane.",
                'ToCustomer' => "Odara ea hau e fihlile. Re tšepa hore u tla e thabela!",

                'PreparingOrder-PICKUP' => "Odara ea hau e ntse e lokisoa. U tla fumana tsebiso ha e se e loketse ho latoa.",
                'SentOrder-PICKUP' => "Odara ea hau e se e loketse ho latoa. Ke kopa o tle lebenkeleng ho tla e lata.",
                'ToCustomer-PICKUP' => "Odara ea hau e nkuoe. Re tšepa hore u tla e thabela!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Odara ea hau e mocheng oa ho sebetsa. Re tla u tsebisa ha e se e lokile.",
                'OrderConfirm' => "Odara ea hau e netefalitsoe 'me boitokisetso bo ntse bo tsoela pele.",
                'PreparingOrder' => "Odara ea hau e ntse e lokisoa 'me e tla romelloa ho uena haufinyane.",
                'ToCustomer' => "Odara ea hau e rometsoe ak'haonteng ea hau. Kea leboha!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Kopo ea hau ea ts'ebeletso e moleng. Re tla u tsebisa ha re qala.",
                'OrderConfirm' => "Tšebeletso ea hau e netefalitsoe 'me re itokisetsa ho qala.",
                'PreparingOrder' => "Re ntse re lokisa tšebeletso ea hau, 'me re tla u tsebisa hang ha e phethetsoe.",
                'ToCustomer' => "Tšebeletso ea hau e felile. Kea leboha ha u re khethile!"
            ],
            'FILE' => [
                'PreparingOrder' => "Faele ea hau e ntse e lokisoa, 'me e tla ba teng haufinyane.",
                'ToCustomer' => "Faele ea hau e teng 'me e fihlile. Joale u ka e khoasolla."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Odara ea peeletso ea hau e moleng. Re tla u tsebisa ha tšebetso e qala.",
                'OrderConfirm' => "Ngoliso ea hau e netefalitsoe, 'me e ntse e etsoa.",
                'PreparingOrder' => "Re ntse re lokisa peeletso ea hau 'me e tla qala haufinyane.",
                'SentOrder' => "Ngoliso ea hau e kentsoe tšebetsong. U tla fumana lintlafatso tse tsoelang pele.",
                'ToCustomer' => "Ts'ebeletso ea hau ea boingoliso e kentsoe tšebetsong ka katleho."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Kea leboha :name|Voucha e Ncha: :title',
        'category' => "BOKANG, VOCHA E NCHA",
        'message' => "Lumela :name,<br><br>U fumane voucha e ncha e le mpho ho tsoa ho rona! U ka fumana livoutjhara le ho feta ka ho tsebisa Selldone ho metsoalle ea hau le ho motho e mong le e mong eo u mo tsebang. Voucher ena e na le boleng ba **:price :currency**.<br><br>U nkile mohato oa pele, 'me re mona ho u thusa ho notlolla likarolo tse ncha ka voucha ea hau! Ka kopo, kena ka **:email** 'me u fumane voucher ea hau ho Shop **Dashboard** > **Settings** > **Licence**.<br><br> Kea leboha!",
        'action' => "Dashboard eaka",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Kea u lebohela, :name e ratehang|U Amohetse Mpho e Khethehileng!',
        'category' => "Phatlalatso ea ho amohela mpho",
        'title' => "Limpho bakeng sa hau",
        'message' => "Hi :name, re thabetse ho u tsebisa hore u fumane mpho e khethehileng ho tsoa ho Selldone! 🎉 U ka fumana limpho tse ngata ka ho lula u le mafolofolo, ho holisa lebenkele la hau, le ho ntlafatsa boiphihlelo ba hau ho Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade laesense ea lebenkele la hau mme u notlolle lisebelisoa tse matla le ho feta ho holisa khoebo ea hau ea inthaneteng!",
        'action' => "Limpho",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Odara e Ncha e Amogetswe| :order_id",
        'title' => "New Order",
        'message' => "O fumane taelo e ncha. Ka kopo, e ea leqepheng la ts'ebetso ea odara lebenkeleng la hau.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Boitsebiso ba Hao bo Tlatsitseng',
        'output-form-title' => 'Lintlha tse rekiloeng tsa lintho',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Tlaleho ea beke le beke :time',
        'title' => 'Tlaleho ea ts\'ebetso ea lebenkele ea beke le beke',
        'message' => "Ena ke tlaleho ea lebenkele la hau la beke le beke ho tloha <b>:start</b> ho <b>:end</b>. Tlaleho ena e kenyelletsa malebela a ho ntlafatsa khoebo ea hau, o ka sheba le boemo ba lebenkele la hau la inthanete le litaelo tsa morao-rao. Ke tšepa hore u na le letsatsi le beke tse ntle tse tlang pele."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Tlaleho ea hau ea polokelo ea :amount likhoeling tse tharo tse fetileng| :shop_title',
        'title' => 'Tlaleho ea nako e mabapi le mosebetsi oa hau oa khoebo, meputso le lipolokelo tsa lichelete',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Liakhaonto tse hokahantsoeng',
        'sub-title' => 'Boemo ba morao-rao ba li-wallet account tse hokahaneng le lebenkele laka ke bofe?',
        'view-wallet' => 'Sheba sepache',
        'tip-title' => 'Malebela a bohlokoa',
        'tip' => "Theha sepache sa mahala sa Selldone 'me u se hokahanye le lebenkele la hau. Leha tekanyo ea hau e le mpe, bareki ba hau ba ntse ba ka reka le ho lefa ntle le mathata. Seke oa tšoenyeha, ts'ebetso ea lebenkele la hau le lintlha li tla tsoelapele hantle ho isa ho khoeli e le 'ngoe, ntle le tšitiso ea letho.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Hokela akhaonteng'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Lisebelisoa tse kentsoeng',
        'sub-title' => 'Lenane la lisebelisoa tseo u li kentseng lebenkeleng la hau bekeng ena.',
        'tip' => "Na u batla ho fumana lisebelisoa tse ling bakeng sa lebenkele la hau?",
        'view-app-store' => 'Etela Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bots ea hau ea Lebenkele',
        'sub-title' => 'Active sales bots lebenkeleng la ka.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone e u file bots ea thekiso ea othomathiki. Sohle seo u lokelang ho se etsa ke ho ea ho li-Add-ons> Bots phanele ebe u kenya tšebetsong bots ea hau ea lebenkele. Hlokomela hore litšebeletso tse amehang li tlameha ho ba teng naheng ea heno.",
        'view-bots' => 'Laola bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Puisano le Bareki',
        'sub-title' => 'Ke likhokahano tse kae tseo ke bileng le tsona le bareki ba ka bekeng ee?',
        'faqs' => 'Lipotso Tse Botsoang Hangata',
        'tickets' => 'Litekete tsa Bareki',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Boemo ba Basebelisi',
        'sub-title' => 'Ketsahalo ho tloha :start ho isa :end',
        'users' => [
            'title' => 'Bareki',
            'subtitle' => 'Basebelisi ba Signup',
        ],
        'views' => [
            'title' => 'Maeto',
            'subtitle' => 'U etetse lebenkeleng makhetlo a makae',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Basebelisi ba Khutsitsoeng',

        'shop_views' => 'Maikutlo a mabenkele',
        'baskets' => [
            'title' => 'Likoloi tsa ho Reka',
            'subtitle' => 'Tlaleha palo ea likariki tse ncha tsa ho reka',
        ],
        'products' => [
            'title' => 'Tlhahisoleseding ea Lihlahisoa',
            'subtitle' => 'Boemo ba lihlahisoa ka lebenkeleng ka mofuta',
            'value_name' => 'Lihlahisoa'
        ],
        'products_count' => 'Mefuta ea lihlahisoa',
        'views_count' => 'Palo ea pono',
        'sell_count' => 'Palo ea thekiso',
        'send_count' => 'Palo ea thomello',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panele bakeng sa barekisi ba ka sehloohong ba Drop Shipping Selldone.',
        'total_fulfillments' => 'Kakaretso ea Litaelo Tse Fumanetsoeng',
        'ds_count' => 'Amohetse Litaelo',
        'statistics_title' => 'Tlaleho e amohetse litaelo',
        'ds_cancels' => 'Hlakola ka morekisi oa li-interface',
        'ds_rejects' => 'Hlakola ka Wena',
        'tip' => "Na u morekisi ea ka sehloohong oa thepa? A na u na le ntlo ea polokelo, feme kapa mofani oa lihlahisoa? O ka fana ka lihlahisoa tsa hau ho barekisi ba bang ho Selldone Drop Shipping service ho rekisa sehlahisoa sa hau ka bongata bo boholo. Re romelle lengolo-tsoibila ho support@selldone.com ho u tataisa.",
        'view-drop-shipping-panel' => 'Kena ho phanele ea mabenkele',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Exchange Rates',
        'sub-title' => 'Lethathamo la litefiso tsa moraorao tsa phetoho ea chelete lebenkeleng la hau.',
        'from' => 'Chelete ea Mohloli',
        'to' => 'Chelete ea sebaka',
        'rate' => 'Sekhahla sa ho sokoloha',
        'view-exchange-panel' => 'Laola Exchange Rates',
    

        'vew-exchange-panel' => 'Phanele ea taolo ea sekhahla sa phapanyetsano',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Likonteraka tsa litsebi',
        'sub-title' => 'Ke litsebi life tse sebetsang lebenkeleng la ka?',
        'cost' => 'Chelete ea konteraka',
        'duration' => 'Nako',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Letsatsi Hlakola',
        'end_at' => 'Letsatsi la thomello',
        'tip' => 'O ka hira litsebi tse hloahloa ho Selldone ho nts\'etsapele khoebo ea hau.',
        'view-experts' => 'Tobetsa ho qala.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Tlaleha mekhoa ea ho lefa e sebetsang lebenkeleng :shop.',
        'tip-title' => 'Malebela a bohlokoa',
        'tip' => "E-ea leqepheng la tsamaiso ea li-portal lebenkeleng la hau 'me u kenye bonyane boema-kepe bo le bong ka mor'a metsotso e seng mekae. Bareki ba hau ba rata ho lefa kapele le ka mokhoa o sireletsehileng ka li-portal tsa marang-rang.",
        'view-shop-gateways' => 'Kena ho taolo ea portal ea lebenkele la ka.',
        'view-gateways' => 'Sheba liheke tse ling',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Litaelo',
        'sub-title' => 'Lethathamo la liodara tseo ke li fumaneng bekeng ena.',
        'total_baskets' => 'Kakaretso ea Litaelo',
        'total_posBaskets' => 'Kakaretso ea Cash Orders',
        'pos-title' => 'Lebokose la Lebenkele la POS',
        'chart-label' => 'Liodara li phethiloe (liodara tsena ha li hlile ha li lefelloe!)',
        'tip-title' => 'O lokela ho leka ka matla ...',
        'tip' => "Ha ho katleho e bonolo.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Setsi sa tšebetso',
        'sub-title' => 'Re sebelitse odara ea bokae ka lebenkeleng bekeng ee?',
        'tip-title' => 'Ha u na thekiso!',
        'tip' => "Ka bomalimabe ha u na thekiso ea letho bekeng ena. U hloka ho fumana tse ling lebenkeleng la hau. U ka eketsa lihlahisoa, khetha litšoantšo tse betere kapa ua ngola litlhaloso tse ntle bakeng sa lihlahisoa tsa hau. Nahana ka mosebetsi oa nako e tletseng oa khoebo ea hau. Haeba u e etsa hantle 'me u sa ferekane, u tla atleha.",
        'view-process-center' => 'Sheba setsi sa tšebetso',
        'return' => [
            'title' => 'Returned Order',
            'subtitle' => 'Tlaleha litaelo tse khutlisitsoeng.',
            'tip-title' => 'Na u ne u tseba hore...',
            'tip' => "U ka etsa lirekoto tsa chelete tse ngata kamoo u li hlokang ka Selldone POS! Ebang ke tablet ea hau, selefouno, kapa laptop, u ka fetola sesebelisoa leha e le sefe sebaka sa thekiso sa lebenkele la hau. E bonolo, e potlakile ho e hlophisa, 'me e lokiselitsoe ka botlalo bakeng sa seva sa hau. Qala ho e sebelisa kajeno!",
            'view-pos' => 'Kena ho Chelete ea Ka ea Lebenkele la Marang-rang'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Likopano',
        'sub-title' => 'Ke etela lebenkele laka ka makhetlo a makae?',
        'countries-title' => 'Ke linaha life tse kileng tsa eteloa haholo?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Na u batla ho etsa chelete ntle le ho sebelisa buck e le \'ngoe?',
        'message' => "Lumela :name, ke nako ea ho qala ho fumana chelete ka Selldone! Eya ho Dashboard> Tse ling> Ho etsa chelete> Fumana Sehokelo sa Hao sa Referral. Arolelana sehokelo le metsoalle ea hau, 'me u fumane likarete tsa limpho le karolo ea litefo tsa bona. Karolo e molemohali? Ka bobeli uena le motsoalle oa hau le fumana karete ea mpho!",
        'action' => 'Sheba sehokelo sa ka sa kenyelletso',
        'mail-clip' => "<b style='color: #C2185B'>Bohlokoa:</b> Haeba u sebelisa lits'ebeletso tsa lengolo-tsoibila tse kang Gmail tse fokotsang bolelele ba lengolo-tsoibila, fumana khetho e latelang qetellong ea lengolo-tsoibila ho hlahisa tlaleho e felletseng ebe o tobetsa ho eona:",

        'no-coin-reward' => "<b style='color: #C2185B'>Tšoarelo: Ketso</b> ea hau ha e ea fihlela tlhoko ea ho fumana moputso oa mahala oa SEL Coins. Leka ka matla 'me u rekise haholoanyane lebenkeleng la hau bakeng sa sehla se tlang.",
        'yes-coin-reward' => "<b style='color: #4CAF50'> Kea leboha:</b> Mosebetsi o motle! Ho ipapisitse le ts'ebetso ea hau e ntle, re kentse Likhoine tsa :amount SEL akhaonteng ea hau e le moputso.",

        'need-buy-license' => "<b>Etsa Khoebo ea Hao:</b> Ho bonahala eka ha u e-so ngolise leano la ho ngolisa bakeng sa sebaka sa hau sa marang-rang! Ntlafatsa hona joale ho notlolla likarolo tse ling bakeng sa :amount feela ka khoeli haeba e lefuoa selemo le selemo.",
        'not-afford-message' => "Haeba o sa khone kapa o na le bothata ba ho lefa, ikutloe u lokolohile ho re bolella ka support@selldone.com.",
        'add-domain' => "<b>Ke hobane'ng ha u sa be le sebaka se ikhethileng bakeng sa khoebo ea hau?</b><br> Kenya domain name sebakeng sa hau sa Marang-rang hona joale; ke mahala!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone ke<del> sehlahisoa</del> <span style = 'color: forestgreen'>sechaba</span> .<br> Eba morekisi ea hloahloa!",
        'message' => "Latela maqephe a semmuso a Selldone ho Twitter, LinkedIn le marang-rang a sechaba. Re romelle maikutlo, likopo kapa linyatso kapa u kenye letsoho lipuisanong mabapi le Selldone. Hape re karolo ea sechaba sa Selldone seo <b>U se etsang</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Ho Fumane Litaelo Tse Ncha tsa Avocado|:shop_title :time',
        'title' => "Tlaleho ea ts'ebetso ea lihora tse 24 tse fetileng",
        'message' => "Bareki ba hau ba emetse hore liodara tsa hau li hlahlojoe le ho rekoa litheko. Arabela likopo tsa bareki ba hau kapele kamoo ho ka khonehang ho fumana thekiso e eketsehileng.",
        'card_title' => "Litaelo tse moleng",
        'card_subtitle' => "Ho tloha :date",

        'card_payed' => "Litaelo tse lefuoang"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Araba poso ea hau ho :community_title',
        'title' => ":name le :count ba bang ba kene moqoqong linthong tsa hau!",
        'message' => "Hi :name, litaba tsa hau li ntse li hlokomeloa! U fumane maikutlo sechabeng sa rona. Kena akhaonteng ea hau ho kenella lipuisanong 'me u bone seo bohle ba se buang.",
        'title-simple' => ":name e fane ka maikutlo mabapi le poso ea hau!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Araba sehlooho sa hau :topic_title',
        'title' => ":name, le :count ba bang ba arabile ka sehlooho sa hau.",
        'message' => "Lumela :name, taba ea hau e ntse e hapa tlhokomelo! U fumane likarabo sebakeng sa rona. Kena akhaonteng ea hau ho kenella lipuisanong 'me u bone seo bohle ba se buang.",
        'title-simple' => ":name e arabile ka sehlooho sa hau.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Keno e Ncha :name',
        'category' => 'Litsebiso tsa tšireletso',
        'title' => "Kena ho Account",
        'message' => ":name e ratehang, ho ile ha fumanoa ho kena akhaonteng ea hau ea Selldone.",   // Login in selldone (seller)
        'message-shop' => ":name e ratehang, ho kenoa ho :shop_title ho fumanoe.",  // Login in shop (buyer)

        'footer' => "Haeba u sa kena, ka kopo fetola phasewete ea hau.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Ho hula chelete",
        'deposit' => "Depositi",

        'withdraw_subject' => "tlosa akhaonteng :account",
        'deposit_subject' => "Deposit ho account :account",

        'message' => "Phetiso ea chelete e entsoe ka lintlha tse latelang.",

        'type' => "Mofuta oa transaction",

        'from' => "Mohloli oa akhaonto",
        'to' => "Destination account",

        'desc' => "Tlhaloso ea transaction",
        'action' => "Sheba transaction",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Bohlokoa! Ho tlōla melao| :shop",
        'category' => "Tsebiso e hlokolosi",
        'title' => "Lebenkele la hau le ahlotsoe",
        'action' => "Bula dashboard ea lebenkele",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter e u memetse ho kenela Selldone",
        'title' => ":name e u romelletse :amount ho u thusa ho qala lebenkele la hau le lecha la Marang-rang le ho etsa chelete ka lona!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Amohela memo",
        'owner' => "Mong'a",
        'join-date' => "Ho Selldone ho tloha ka nako eo",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Sehokelo sa ho hlaphoheloa| :shop",
        'category' => "Tšireletso ea mabenkeleng",
        'title' => "Sehokelo sa ho khutlisa lebenkele la <b>:shop_name</b> .",
        'message' => "U rometsoe lengolo-tsoibila lena hobane u kopile ho khutlisa lebenkele la hau. Ho tobetsa sehokelo se ka tlase ho tla khutlisa lebenkele la hau le lintlha tsohle tsa lona.",
        'action' => "Netefatsa Pholiso ea Lebenkele",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone e bolokile chelete e kae bakeng sa khoebo ea hau?',
        'sub-title' => 'Ho tloha ka letsatsi :start ho :end',
        'infrastructure' => [
            'title' => 'Sebopeho sa motheo',
            'subtitle' => 'Li-server, CDN, Storage, le lits\'ebeletso tse ling tsa leru',
        ],
        'experts' => [
            'title' => 'Litsebi le Basebetsi',
            'subtitle' => 'Bahlahisi, tlhokomelo, le tšehetso',
        ],
        'total_save' => 'Kakaretso ea chelete e bolokiloeng'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Tshebetso ea hau',
        'sub-title' => 'Kakaretso ea khoebo ho tloha :start to :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Basebelisi ba Khutsitsoeng',

        'shop_views' => 'Maikutlo a mabenkele',
        'baskets' => [
            'title' => 'Likoloi tsa ho Reka',
            'subtitle' => 'Tlaleha palo ea likariki tse ncha tsa ho reka',

        ],
        'products' => [
            'title' => 'Tlhahisoleseding ea Lihlahisoa',
            'subtitle' => 'Boemo ba lihlahisoa ka lebenkeleng ka mofuta',
            'value_name' => 'Lihlahisoa'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Kakaretso ea maikutlo a leqephe la sebaka sa Marang-rang',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "O fumane taelo e ncha. Ka kopo, e-ea leqepheng la ts'ebetso ea liodara sebakeng sa hau sa barekisi.",
        'subject' => "🛍️ Odara e Ncha e Amogetswe| :order_id",
        'your_revenue' => "Chelete ea Hao",
    ],
    'vendor-invite' => [
        'title' => 'Memo ea Morekisi',
        'message' => "U fumane memo ea ho ba morekisi oa :shop_name. U ka e amohela kapa ua e hana ka ho tobetsa likonopo tse latelang.",
        'subject' => ":shop_name |Memo ea ho ba morekisi oa rona",
        'accept' => "Amohela 'me U be Morekisi",
        'reject' => "Hana",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Memo ea ho Kenela Sehlopha sa Rona',
        'message' => "U memetsoe ho ikopanya le :vendor_name ho :shop_name. O ka amohela kapa oa hana memo ena o sebelisa likonopo tse ka tlase.",
        'subject' => "Memo ea ho Kenela :vendor_name|Eba Setho sa Sehlopha",
        'accept' => "Amohela 'me u Kenele Sehlopha",
        'reject' => "Hana",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Khoutu ea hau ea ho Kena bakeng sa :shop",
        'header-message' => "Re u romella lengolo-tsoibila lena hobane u kopile khoutu ea ho kena bakeng sa lebenkele. Ka kopo fumana Password ea hau ea Nako e le 'Ngoe (OTP) ka tlase:",
        'footer-message' => "Khouto ena e tla sebetsa metsotso e 10. Haeba u sa kopa khoutu ena ea ho kena, ka kopo hlokomoloha lengolo-tsoibila lena."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Netefatsa lengolo-tsoibila la hau| :shop",
        'title' => 'Netefatso ea Imeile',
        'header-message' => "Hi :name,<br> Ka kopo netefatsa hore **:email** ke aterese ea hau ea lengolo-tsoibila ka ho tobetsa konopo e ka tlase kapa ho sebelisa sehokelo se ka tlase nakong ea lihora tse 48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Lintlafatso tsa Sehlahisoa| :shop",
        'title' => "Ntlafatso ea Boemo ba Sehlahisoa - Lihora tse 24 tse fetileng",
        'message' => "Ke tšepa hore molaetsa ona o tla o fumana hantle. Ena ke tlhaiso-leseling e khutšoane ho u tsebisa ka boemo ba lihlahisoa tsa hau sethaleng sa rona nakong ea lihora tse 24 tse fetileng.\nNakong ena, ho bile le liphetoho boemong ba lihlahisoa tse ling. Liphetoho tsena li ka ba ka lebaka la ho reka, ho ntlafatsa thepa, kapa liketsahalo tse ling tse amanang.\nHo fumana lintlha tse felletseng mabapi le sehlahisoa ka seng, ka kopo kena akhaonteng ea hau 'me u hlahlobe karolo ea' Boemo ba Sehlahisoa.",
        'action' => "Bula Panel ea Barekisi",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Ho Amoheloa Litaelo Tse Ngata| :shop | :date",
        'title' => "Bulk Orders Tsebiso",
        'message' => "U fumane sehlopha sa liodara tse ngata. Ka kopo, etela leqephe la ts'ebetso ea odara phanele ea hau bakeng sa lintlha tse ling. U ka boela ua khoasolla lethathamo la litaelo ka sehokelo se sireletsehileng se fanoeng, se sebetsang ka matsatsi a 7.<br><br>\n        <b>IMPORTANT:</b> Sehokelo sena se sebetsa matsatsi a 7.<br>\n        Sehokelo sena se sebetsa, kahoo nako le nako ha u se tobetsa, u tla fumana liodara tse ntlafalitsoeng haholo tsa letsatsi lena. <b>Ho bolela hore haeba boemo ba tefo ea odara bo fetoha hore bo hanngoe, ha u sa tla hlola u bona taelo eo ho CSV e jarollotsoeng, kapa haeba odara e lefiloe, e tla hlaha lethathamong.</b><br><br>\n        <ul>\n            <li>CSV e na le liodara tse lefuoang tsa letsatsi le behelletsoeng ho :date.</li>\n            <li> Letsatsi le bolokiloeng ke letsatsi leo mosebelisi a tobetsang ho tsoa leqepheng la odara.</li>\n        </ul>\n        <b>Ho thibela ho kopitsoa ha litaelo, kamehla hlahloba Order ID pele u romela.</b>",
        'action' => "Khoasolla Lethathamo la Liodara",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Lintho tse ling odareng ea hau ha lia amoheloa 'me ha li khone ho tlisoa. Chelete ea lintho tsena e tla khutlisetsoa kareteng ea hau haufinyane."
    ]

];
