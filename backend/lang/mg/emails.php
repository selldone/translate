<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ity hafatra ity dia mandray mpividy vaovao amin\'ny fivarotana.
Sary',
        ShopMailTemplateCodes::OrderCheckout => 'Ity fampahafantarana ity dia alefa rehefa misy mpividy manamafy baiko.
Sary',
        ShopMailTemplateCodes::OrderPayment => 'Ity fampandrenesana ity dia manamarina ny fahombiazan\'ny fandoavam-bola nataon\'ny mpanjifa.
Sary',
        ShopMailTemplateCodes::OrderUpdate => 'Ity hafatra ity dia alefa hanavao ny mpividy momba ny satan\'ny kaomandy.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ity hafatra ity dia alefa any amin\'ny mpivarotra iray mba hampahafantarana azy ireo ny kaomandy voamarina.
Sary',
        ShopMailTemplateCodes::PosCheckout => 'Ity fampandrenesana ity dia alefa hanamarina ny baikon\'ny fivarotana ho an\'ny mpividy.',
        ShopMailTemplateCodes::PosPayment => 'Ity fampandrenesana ity dia manamarina ny fandoavam-bola nataon\'ny mpividy iray.
Sary',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ity hafatra ity dia mampahafantatra ny mpivarotra momba ny fividianana natao teo amin\'ny toeram-pivarotana azy.
Sary',
        ShopMailTemplateCodes::ShopContact => 'Ity fampandrenesana ity dia alefa rehefa misy taratasy fifandraisana napetraka.
Sary',
        ShopMailTemplateCodes::ShopGiftCard => 'Ity fampahafantarana ity dia mampahafantatra ny mpampiasa iray fa nahazo karatra fanomezana izy ireo.
Sary',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ity hafatra ity dia miarahaba mpivarotra vaovao amin\'ny fivarotana.
Sary',
        ShopMailTemplateCodes::ShopVendorInvite => "Ity hafatra ity dia alefa hanasana mpivarotra hanatevin-daharana ny tsenanao.\nAmpahany",
        ShopMailTemplateCodes::ShopVendorOrder => "Ity hafatra ity dia alefa any amin'ny mpivarotra rehefa misy baiko voaray amin'ny sata Paid na Cash on Delivery (COD).\nSary",
        ShopMailTemplateCodes::ShopVendorProducts => "Nalefa isan'andro hanavao ny mpivarotra momba ny satan'ny vokatra.\nSary",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ity hafatra ity dia alefa hanasana mpivarotra iray hanatevin-daharana ny tsenanao.\nSary",

        ShopMailTemplateCodes::UserLogin => "Ampahafantaro ny mpampiasa ny antsipirian'ny fidirana, ao anatin'izany ny adiresy IP, ny daty ary ny fitaovana, ho fiarovana.\nSary",
        ShopMailTemplateCodes::LoginCode => "Alefaso kaody tenimiafina indray mandeha ho an'ny mpampiasa hidirana ao amin'ny fivarotana.\nSary",

        ShopMailTemplateCodes::EmailVerifyLink => "Alefaso rohy hanamarina ny adiresy mailaka an'ny mpampiasa. Ity mailaka ity dia alefa rehefa misy mpampiasa misoratra anarana amin'ny SMS ary miditra amin'ny mailaka. Tsy alefa izany rehefa misoratra anarana mivantana amin'ny fidirana sosialy na mailaka ny mpampiasa.\nSary",

        ShopMailTemplateCodes::EmailBulkOrder => "Alefaso ny lisitr'ireo baiko voaray sy voaloa amin'ny andro iray manokana.\nAmpahany"


    ,

    ],


    'global' => [
        'greetings' => 'salut:name',
        'end-statement' => 'Ekipa mpanohana',

        'receiver_name' => 'Salut :user_name
Sary',
        'footer-help' => "Mila fanampiana? Anontanio ao amin'ny [support@selldone.com](mailto:support@seldone.com) na tsidiho ny [foibem-panampiana](https://selldone.com/community).\nSary",
        'selldone-team' => 'Ny ekipan\'ny Selldone',
        'footer-shop' => "Raha mila fanampiana ianao dia aza misalasala mandefa mailaka aminay: :shop_mail",
        'accept' => "MANAIKY",
        'reject' => "mandà",
        'verify' => "manamarina",
        'title' => "lohateny",
        'value' => "sarobidy",
        'description' => "Description",
        'shop' => "Miantsena",
        'shop-info' => "Fivarotana fampahalalana",
        'user' => "mpampiasa",
        'user-info' => "Fampahafantarana kaonty\nSary",
        'license' => "Mombamomba ny mpanoratra",
        'status' => "sata",
        'start' => "fanombohana",
        'end' => "Tapitra",
        'renewal' => "fanavaozana",
        'view' => "View",

        'balance' => "Mila mahay mandanjalanja",
        'card_number' => "Nomeraon-karatra",
        'cvv' => "Cvv",
        'expire_date' => "Daty lany daty",

        'Dashboard' => "Dashboard\nSary",
        'order' => "mba",
        'view_order' => "Jereo ny baiko",
        'pay_now' => "Pay now",

        'official_selldone' => "OLONA OFISIALY",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Sandam-bola",
        'free-balance' => "Fandanjalanjana maimaim-poana",
        'locked-balance' => "Balance mihidy",
        'bot' => "Bot",
        'requests' => "fangatahana",
        'baskets' => 'sarety',
        'physical' => "ara-batana",
        'virtual' => "Virtual",
        'file' => "rakitra",
        'service' => "fanompoana",
        'fulfillment' => "tanteraka",
        'open' => "misokatra",
        'reserved' => "Reserved",
        'canceled' => "nofoanana ny",
        'payed' => "karama",
        'cod' => "COD",
        'orders-count' => 'Filaharana',
        'payments-count' => 'fandoavam-bola',
        'confirms-count' => 'manamarina',
        'sends-count' => 'DIA MANDEFA',
        'delivers-count' => 'mamonjy',
        'count' => 'manisa',
        'transactions-count' => 'Miisa ny fifampiraharahana',
        'success-transactions' => 'Fahombiazana ny fifampiraharahana',
        'total-amount' => 'Fitambarany',
        'amount' => 'vola',
        'wage' => 'karama',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'velona',
        'CheckQueue' => 'Jereo ny filaharana',
        'OrderConfirm' => 'Manamarina ny baiko',
        'PreparingOrder' => 'Manomana ny filaminana',
        'SentOrder' => 'Nandefa baiko',
        'ToCustomer' => 'Aterina amin\'ny mpanjifa',
        'Pending' => 'mbola miandry',
        'Accepted' => 'nanaiky',
        'Rejected' => 'TSY',
        'pc' => 'PC',
        'tablet' => 'Tablety',
        'phone' => 'Phone',
        'total' => 'sokajy',
        'view-detail' => 'Jereo ny antsipiriany',
        'empty' => 'hanaisotra',
        'dropshipping' => 'Dropshipping',
        'reply' => 'navalin\'i',
        'reactions' => 'Fanehoan-kevitra',
        'Comments' => 'Hevitra
Sary',
        'last-comment' => 'Hevitra farany',
        'response-to' => 'Valiny ny',
        'posts' => 'Lahatsoratra',
        'post' => 'Post',

        'name' => 'Anarana',
        'email' => 'mailaka',
        'type' => 'karazana',
        'device' => 'Fitaovana',
        'platform' => 'Platform',
        'browser' => 'mpitety',
        'time' => 'Time',
        'Wallet' => 'Wallet
Sary',
        'date' => 'Daty',

        'account' => 'TANTARA',
        'transaction' => 'raharaham-barotra',
        'fee' => 'saram-',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Sokajy',
        'password' => 'Password',
        'verify-login' => "Hamarino & Midira",
        'url' => 'URL',
        'avocado' => 'Zavoka',
        'hyper' => 'Hyper',
        'buy-now' => "Hividy izao",
        'add-domain' => "Add Domain",
        'views' => 'hevitra',


        'country' => 'Firenena',
        'address' => 'adiresy',
        'postal' => 'Kaody postaly',
        'building_no' => 'Trano #',
        'building_unit' => 'Unity #',
        'message' => 'hAFATRA',


        'customer' => 'mpanjifa',
        'cart-items' => 'entana sarety',
        'payment' => 'FANOMEZANA',
        'receiver' => 'Mpandray',
        'virtual-items' => 'Zavatra virtoaly',
        'no-payment' => 'Tsy misy fandoavam-bola!',

        'enable' => 'Tadiavo',
        'access' => 'Access',
        'bank' => 'Bank info',

        'vendor' => 'Mpivarotra',

        'view_content' => "Jereo ny atiny feno",
        'files' => 'rakitra',
        'download' => 'DOWNLOAD',
        'file_name' => 'Anaran\'ny fisie',
        'file_size' => 'Size',

        'subscription' => 'Famandrihana',
        'products' => 'Products',
        'vendor_products' => 'Vendor Products',

        'pickup' => 'Pickup
Sary',

        'minutes' => 'minitra',
        'hours' => 'Ora',

        'refund' => 'Famerenana',
        'recipient_address' => 'Adiresy mpandray
Sary',
        'signature' => 'sonia
Sary',
        'blockchain' => 'Blockchain
Sary',
        'details' => 'Details
Sary',


    

        'Shop' => 'Miantsena',
        'dashboard' => 'anaty fiara',
        'comments' => 'fanehoan-kevitra',
        'wallet' => 'kitapom-batsy',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Performance Report, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Seasonal Report, Selldone'
        ],
        'Onboarding' => [
            'id' => 'salut',
            'name' => 'Mankasitraka, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Tohano :name
Sary'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verify, Selldone'
        ],
        'Welcome' => [
            'id' => 'salut',
            'name' => 'Community, Selldone'
        ],
        'NewShop' => [
            'id' => 'mpivarotra',
            'name' => 'Mankasitraka, Selldone'
        ],
        'Approve' => [
            'id' => 'hanaiky',
            'name' => 'Mankasitraka, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Ireo singa mifandraika amin\'ny :name
Sary'
        ],

        'Recovery' => [
            'id' => 'famerenana',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Miandry ⌛',
        'PAYED' => 'Voaloa ✅',
        'CANCELED' => 'Nofoanana ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'mpandrindra',
            'OFFICER' => 'Mpiandraikitra sy mpanara-maso',
            'AUDITING' => 'Mpitantana fanaraha-maso',
            'EMPLOYEE' => 'mpiasa',
            'PRODUCT' => 'Mpitantana ny vokatra',
            'CONTENT' => 'Mpitantana votoaty',
            'MARKETING' => 'Mpitantana ara-barotra',
            'VIEWER' => 'Mpijery',

        ],
        'subject' => ":inviter nanasa anao ho :level| :shop",
        'category' => "Fanasana mpiasa",
        'title' => "Nasaina ho any amin'ny <b>:shop_name</b> ho <b>:level</b> .",
        'message' => "Nahazo fanasana hiara-hiasa amin'ny ekipa <b>:shop_title</b> amin'ny orinasa ianao. Manana safidy ianao hanaiky na mandà ity tolotra ity. Raha misafidy ny hanaiky ianao dia midira ao amin'ny serivisy Selldone hanamarina ny fanapahan-kevitrao. Rehefa voamarina dia hahazo fidirana amin'ny fizarana fitantanana fivarotana ianao.\nSary",

    ],

    'welcome-email' => [
        'subject' => "👋 Tongasoa eto :name, andao isika hanomboka amin'ny Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Tongasoa eto amin'ny Selldone\nSary",
        'message' => "Misaotra anao nifidy Selldone! Ao anatin'ny vondrom-piarahamonina mavitrika ianao izao izay mampifandray ireo mpivarotra manerantany amin'ny mpanjifa, ny orinasa eo an-toerana amin'ny orinasa, ary ny olon-tsotra amin'ny orinasa. Ny fitaovana Master sy Pro rehetra dia azo omena anao ** maimaim-poana** sy **tsy voafetra**. Eto izahay hanohana anao sy hanokatra ny varavaran'ny fahombiazanao.",

        'index' => "Dingana :step. \nSary",

        'step-domain' => [
            'title' => 'Ampio ny sehatra manokana anao
Sary',
            'message' => "Hanombohana, ampio maimaim-poana ny sehatra mahazatra anao ao amin'ny Dashboard fivarotana eo ambanin'ny Settings> Settings Domains.\nSary",
            'action' => 'Tantano ny sehatrako
Sary',
        ],
        'step-landing' => [
            'title' => 'Amboary ny pejinao
Sary',
            'message' => "Ataovy manokana ny pejinao amin'ny fandehanana any amin'ny Dashboard > Pejy. Mifidiana pejy fipetrahana na mamorona vaovao. Mora sy intuitive izany, ary afaka manomboka miasa amin'izany avy hatrany ianao.\nAmpahany",
            'action' => 'Amboary ny pejiko fipetrahako
Sary',
        ],
        'step-payment' => [
            'title' => 'Fametrahana fomba fandoavam-bola
Sary',
            'message' => "Manomboka manaiky ny fandoavam-bola mivantana ao amin'ny kaontinao amin'ny banky. Raha te hampifandray ny mpamatsy vola anao toa an'i Stripe, PayPal, sy ny maro hafa, mandehana any amin'ny Dashboard> Accounting> Gateway.\nSary",
            'action' => 'Ampio fomba fandoavam-bola
Sary',
        ],
        'step-products' => [
            'title' => 'Ampio ny vokatrao
Sary',
            'message' => "Ampio mora foana ny vokatra sy ny sokajy ao amin'ny Dashboard > Products. Sahala amin'ny fitantanana ny rakitra sy lahatahiry amin'ny PC-nao izany - vonona ny hisintona sy hidina tanteraka. Azonao atao koa ny manafatra vokatra betsaka amin'ny fampiasana Excel. Misy môdely santionany hanampy anao hanomboka.\nSary",
            'action' => 'Tantano ny vokatrao
Ampahany',
        ],
        'step-shipping' => [
            'title' => 'Fametrahana fomba fandefasana
Sary',
            'message' => "Raha te handoa ny mpanjifa amin'ny fandefasana, farito ny fomba fandefasanao ao amin'ny Dashboard> Logistic> Fandefasana. Azonao atao ny mametraka vidiny sy fanohanana samihafa ho an'ny toerana samihafa. Aza adino ny mametraka ny fiavian'ny trano fanatobianao ao amin'ny Dashboard> Logistic> Warehouse.\nSary",
            'action' => 'Mitantana ny fomba fandefasana',
        ],
    

        'seller' => [
            'title' => 'Mpivarotra ve ianao?',
            'message' => 'Raha vao manomboka mivarotra dia ampidiro ao amin\'ny Selldone ny dashboard anao amin\'ny alàlan\'ny rohy etsy ambany ary mamorona ny fivarotanao voalohany maimaim-poana tanteraka. Haharitra minitra vitsivitsy izany ary hanana ny fivarotanao manokana sy ny tranokala an-tserasera ianao. Avy eo dia hitarika anao amin\'ny dingana manaraka izahay ary hahazo ny vavahadin\'ny fandoavam-bola.',
            'action' => 'Midira ao amin\'ny dashboard-ko',
        ],
        'buyer' => [
            'title' => 'Mpividy aho',
            'message' => 'Arahabaina. Raha vao mpikambana ao amin\'ny Selldone ianao, dia hanala ny fahasahiranana rehetra momba ny maha-mpikambana sy ny fanamarinana amin\'ny fivarotana an-tserasera. Mba hahazoana tombony amin\'ny fivarotana sy tranokala rehetra mampiasa ny sehatra Selldone, azonao atao ny miditra amin\'ny tsindry iray ary manao ny fividiananao tsotra, haingana ary azo antoka.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Account > Charge',
        'title' => "Saram-pahombiazana",
        'message' => "Voaloa soa aman-tsara ny kaontinao <b>:account_number</b> <b>:amount</b>.",
        'account' => 'TANTARA',
        'charge' => 'anjara-raharaha',
        'balance' => 'Mila mahay mandanjalanja',
        'footer' => "Ataovy mora, azo tratrarina ary ho azon'ny rehetra eran-tany ny fandraharahana."
    ],

    'verify-email' => [
        'subject' => "🙌 Fenoy ny fisoratanao amin'ny Selldone! Hamarino ny rohy.",
        'category' => "DIANGA IRAY IANAO",
        'title' => "Hamarino ny adiresy mailakao",
        'message' => "Salama :name,<br><br>Misaotra anao nisafidy Selldone!<br><br>Mba hanamafisana fa <b>:email</b> no adiresy mailakao, azafady tsindrio ny bokotra eto ambany na ampiasao ny rohy. Manana 48 ora ianao hamitana ity fanamarinana ity.\nSary",
        'footer' => "Raha manana olana ianao amin'ny fipihana ny bokotra Hamarino dia adikao ary apetaho amin'ny mpitety tranonkalanao ny URL eto ambany: :activation_url",
        'next-step' => "Manaraka izany dia handefa fitaovana mahasoa sy torolalana misesy izahay mba hanamora ny fampidiranao ny sehatra mahazatra anao, ny fametrahana fandoavam-bola, ny fampidirana vokatra, ary ny fahazoana ny kaomandy voalohany.\nSary",

    ],
    'verify-email-code' => [
        'subject' => "Kaody fanamarinana ho an'ny :name",
        'category' => "SECURITY",
        'title' => "Kaody fanamarinana mailaka",
        'message' => "Salama :name,<br><br>Mba hanamafisana fa <b>:email</b> no adiresy mailaka marina, azafady ampidiro ao anatin'ny <b>10 minitra manaraka </b> ity code manaraka ity:\nSary",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Efa vonona ny fivarotanao| :name",
        'category' => "DIANGA IRAY IANAO",
        'title' => "Vita ny fanamboarana",
        'account_title' => "Ny kaontinao",
        'account_msg' => "Hamarino ary midira amin'ny kaontinao miaraka amin'ity fampahalalana ity.",
        'shop_msg' => "Fampahafantarana momba ny kaonty momba ny rafitra fiasan'ny orinasa Selldone.",

    ],

    'reset2fa' => [
        'category' => "HAFATRA Ofisialin'ny SECURITY",
        'title' => "Mangataka disable 2-dingana fidirana",
        'message' => "Mahazo ity mailaka ity ianao satria nahazo fangatahana hamerenana ny fanamarinana roa lafin-javatra ho an'ny kaonty **:name** miaraka amin'ny mailaka **:email**.",
        'footer' => "Raha tsy nangataka famerenana ny tenimiafina ianao dia tsy mila hetsika fanampiny.",
        'action' => 'Atsaharo ny fidirana amin\'ny dingana roa',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Efa vonona izao ny fivarotanao!",
        'category' => "FIVORIANA ONLINE VAOVAO TERAKA ETO TANY",
        'title' => "Arahabaina, :name!\nSary",
        'message' => "<b>Miarahaba, :name! Velona izao ny orinasanao an-tserasera vaovao!</b> Faly miarahaba anao izahay ao amin'ny vondrom-piarahamonina Selldoners. Efa nanao ny dingana voalohany mankany amin'ny fahombiazana ianao, ary eto izahay hanampy anao amin'ny dingana rehetra. Raha mila fanampiana ianao dia hafatra iray ihany izahay—eto foana ny ekipanay mpanohana anay. Hitarika anao amin'ny dingana tsirairay izahay mba hampandeha tsara ny fivarotanao.",
        'pdf-book' => "Aza adino ny boky tanana mipetaka: Ataovy toy ny lalao ny orinasanao",

        'account' => [
            'title' => 'Dingana 1: Mamorona kaonty ao amin\'ny kitapom-bola Selldone',
            'message' => "Hanombohana, mamorona kaonty ao amin'ny poketra Selldone anao. Eo no hanesorana ny saram-panananao, ary eo ihany koa no handoavanao vola mba hihazonana ny fivarotanao. Raha miharatsy ny fifandanjanao dia aza manahy! Hitohy tsy misy fahatapahana ny fivarotanao.",
            'action' => 'Midira amin\'ny kitapom-bola',
        ],

        'shop-account' => [
            'title' => 'Dingana 2: mampifandray ny kaonty amin\'ny fivarotana',
            'message' => "Manaraka, ampifandraiso amin'ny fivarotanao ny kaontinao poketra. Mankanesa any amin'ny <b>Store> Accounting> Invoice</b>, ary ampifandraiso amin'ny poketrao. Izany dia miantoka fa ny fandoavana ny mpanjifa rehetra dia apetraka mivantana ao amin'ny kaontinao amin'ny banky—Selldone dia tsy manala vola amin'ny vola miditra aminao.",
            'action' => 'Store Invoice Panel',
        ],

        'gateway' => [
            'title' => 'Dingana 3: Ampifandraiso amin\'ny vavahadin-karama an-tserasera',
            'message' => "Ankehitriny, andeha amboary ny vavahadin-tserananao amin'ny fandoavam-bola. Mandehana any amin'ny <b>Store> kaonty> Port</b> ary tsindrio ny <b>Add New Port</b>. Safidio ny volanao, dia hahita lisitry ny vavahadin-tseranana misy ianao. Haingana sy mora ny fampifandraisana vavahady, fa raha mila fanampiana ianao dia aza misalasala manamarina ny torolàlana Selldone na manatona anay.\nSary",
            'action' => 'Manampia vavahadin-tserasera amin\'ny fivarotana',
        ],

        'domain' => [
            'title' => 'Dingana farany: fampifandraisana sehatra voatokana',
            'message' => "Ankehitriny, ampifandraiso amin'ny fivarotanao ny sehatra mahazatra anao. Izany dia ahafahan'ny mpanjifa mividy ny vokatrao na serivisinao ary mandoa vola mivantana aminao.\nSary",
            'action' => 'Fampahafantarana sy fandraisana karatra fanomezana tsy misy fetra',
        ],
    ],


    'basket-list' => [
        'item' => "zavatra",
        'count' => "manisa",
        'price' => "vidiny",
        'discount-code' => "Kaody fihenam-bidy",
        'customer-club' => 'Klioban\'ny mpanjifa',
        'shipping' => "Fandefasana",
        'total' => "sokajy",
        'offer' => "Tolotra",
        'coupon' => "tapakila",
        'lottery' => "mari-pankasitrahana",
        'tax' => "HETRA",
        'tax_included' => "Tafiditra ao anatin'ny vidiny",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'FOMBA',
        'amount' => 'vola',
        'giftcard' => 'Gift card',
        'payment' => 'FANOMEZANA',
    ],


    'shop-subscription-email' => [
        'category' => "Fanavaozana famandrihana",
        'title' => "Licence amin'ny fivarotana: :shop_title",
        'title-reserved' => "Fanomezana fahazoan-dàlana: :shop_title",
        'title-active' => "Lisensi mavitrika: :shop_title",
        'title-finished' => "Fahazoan-dàlana vita: :shop_title",
        'title-cancel' => "Fanafoanana ny lisansa: :shop_title",
        'message' => "Nohavaozina ny drafitry ny fahazoan-dàlana fivarotanao,",
        'RESERVED' => "⚡ Ny drafitra famandrihanao dia **voatokana**.",
        'ACTIVE' => "🟢 Ny drafitry ny famandrihanao dia **navotsotra**.",
        'FINISHED' => "🚧 Efa **vita** ny drafitra famandrihanao.",
        'CANCEL' => "⛔ **Nofoanana** ny drafitra famandrihanao.",
    ],

    'support' => [
        'subject' => "Foibe fanohanana|:name namaly",
        'category' => "Foibe fanohanana",
        'title' => "Nahazo valiny ianao",
        'action' => "Sokafy ny admin fivarotana",
    ],

    'shop-customer-join' => [
        'subject' => "Midira:shop_title",
        'category' => "Fankalazana ny mpanjifa vaovao",
        'title' => "Faly izahay amin'ny maha-mpikambana anao",
        'action' => "Tsidiho izao",
    ],

    'shop-vendor-join' => [
        'subject' => "Vendor Onboarding | :shop_title",
        'category' => "Fankalazana ny mpivarotra vaovao",
        'title' => "Faly izahay amin'ny maha-mpikambana anao",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard:shop_title",
        'category' => "Hanampy karatra vaovao",
        'title' => "Arahabaina, nahazo karatra fanomezana ianao",
        'action' => "Miantsena izao",
        'message' => "Nahazo karatra fanomezana ianao amin'ny sandan'ny :balance :currency. Azonao atao ny mividy amin'ny fivarotanay miaraka amin'ity karatra fanomezana ity.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Foibe fanohanana| :shop",
        'category' => "MANAMPY",
        'title' => "Nahazo valiny ianao",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Fanamafisana ny kaomandy|Vidio ny :order_id",
        'title' => "mba",
        'message' => "Nametraka baiko tao amin'ny fivarotanay ianao. Nahazo ny baiko izahay ary handefa mailaka hafa ho anao rehefa voamarina ny fandoavam-bola.\nSary"
    ,

        'payments' => 'fandoavam-bola',
    ],

    'order-payment' => [
        'subject' => "🛍️ Fanamafisana ny fandoavam-bola|Vidio ny :order_id",
        'title' => "Lamina fandoavana",
        'message' => "Vita ny fandoavanao,<br> Efa azonay ny baikonao. Hametraka mailaka hafa aminao izahay rehefa tonga ny kaomandinao.",
    

        'payments' => 'fandoavam-bola',
    ],

    'order-update' => [
        'subject' => "🛍️ Fanavaozana ny satan'ny kaomandy|Vidio ny :order_id",
        'title' => "Fanavaozana ny satan'ny kaomandy\nSary",
        'message' => "Nohavaozina ny kaomandinao. Azonao jerena ao amin'ny kaontinao ny sata farany momba ity baiko ity.\nSary",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Eo amin'ny filaharana ho an'ny fanodinana ny kaomandinao. Hampandre anao izahay rehefa manomana izany.\nSary",
                'OrderConfirm' => "Voamarina ny kaomanao ary efa nanomboka ny fanomanana.\nSary",
                'PreparingOrder' => "Eo am-panomanana ny kaomandinao ary halefa tsy ho ela.",
                'SentOrder' => "Nalefa ny kaomandinao. Ho azonao izany tsy ho ela.\nSary",
                'ToCustomer' => "Naterina ny kaomandinao. Manantena izahay fa mankafy izany ianao!",

                'PreparingOrder-PICKUP' => "Eo am-panomanana ny baiko. Hahazo fampandrenesana ianao rehefa vonona ny alaina.\nSary",
                'SentOrder-PICKUP' => "Vonona alaina ny kaomandinao. Azafady, tongava any amin'ny fivarotana haka izany.\nSary",
                'ToCustomer-PICKUP' => "Voaray ny kaomandinao. Manantena izahay fa mankafy izany ianao!\nSary"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Eo amin'ny filaharana amin'ny fikarakarana ny kaomandinao. Hampahafantatra anao izahay rehefa vonona izany.\nSary",
                'OrderConfirm' => "Nohamafisina ny kaomandinao ary eo an-dalam-panomanana.\nSary",
                'PreparingOrder' => "Eo am-panomanana ny kaomandinao ary halefa any aminao tsy ho ela.\nAmpahany",
                'ToCustomer' => "Nalefa tany amin'ny kaontinao ny baiko virtoaly. Misaotra anao!\nSary"
            ],
            'SERVICE' => [
                'CheckQueue' => "Eo amin'ny filaharana ny fangatahana serivisy. Hampahafantatra anao izahay rehefa manomboka.\nSary",
                'OrderConfirm' => "Nohamafisina ny serivisinao ary miomana ny hanomboka izahay.\nSary",
                'PreparingOrder' => "Manomana ny serivisinao izahay, ary hampahafantatra anao rehefa vita izany.\nSary",
                'ToCustomer' => "Vita ny fanompoanao. Misaotra anao nifidy anay!"
            ],
            'FILE' => [
                'PreparingOrder' => "Eo am-panomanana ny rakitrao ary ho hita tsy ho ela.",
                'ToCustomer' => "Efa vonona ny rakitrao ary efa naterina. Afaka misintona azy ianao izao.\nSary"
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Eo amin'ny filaharana ny baikonao famandrihana. Hampahafantatra anao izahay rehefa manomboka ny fanodinana.\nSary",
                'OrderConfirm' => "Nohamafisina ny famandrihanao ary amboarina.\nSary",
                'PreparingOrder' => "Manomana ny famandrihanao izahay ary hanomboka tsy ho ela izany.",
                'SentOrder' => "Navitrika ny famandrihanao. Hahazo fanavaozana mitohy ianao.\nSary",
                'ToCustomer' => "Navitrika soa aman-tsara ny serivisy famandrihana anao."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Arahabaina :name|Voucher vaovao: :title',
        'category' => "FARABANA, VOUCHER VAOVAO",
        'message' => "Hey :name,<br><br>Nahazo voucher vaovao ho fanomezana avy aminay ianao! Afaka mahazo voucher bebe kokoa ianao amin'ny fampahafantarana ny Selldone amin'ny namanao sy ny olona rehetra fantatrao. Ity voucher ity dia mendrika **:price :currency**.<br><br>Nanao ny dingana voalohany ianao, ary eto izahay hanampy anao hamaha ireo endri-javatra vaovao miaraka amin'ny taratasinao! Midira miaraka amin'ny **:email** ary tadiavo ao amin'ny Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congrats!",
        'action' => "Ny dashboard-ko",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Arahabaina ry malala :name | Nahazo fanomezana ianao',
        'category' => "Fanambarana ny fandraisana fanomezana",
        'title' => "Fanomezana ho anao",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "fanomezam-pahasoavana",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Voaray ny baiko vaovao| :order_id",
        'title' => "New Order",
        'message' => "Nahazo baiko vaovao ianao. Mankanesa any amin'ny pejy fanodinana kaomandy ao amin'ny fivarotanao azafady.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Ny fampahalalana feno anao',
        'output-form-title' => 'Fampahafantarana entana novidina',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Tatitra isan-kerinandro :time',
        'title' => 'Tatitra momba ny fahombiazan\'ny fivarotana isan-kerinandro',
        'message' => "Ity ny tatitra isan-kerinandro ho an'ny fivarotanao manomboka amin'ny <b>:start</b> ka hatramin'ny <b>:end</b>. Ity tatitra ity dia ahitana toro-hevitra amin'ny fanatsarana ny orinasanao, azonao atao koa ny manamarina ny satan'ny fivarotanao an-tserasera sy ny baiko farany. Manantena aho fa hanana andro sy herinandro tsara ho anao ianao.\nSary"
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Ny tatitra fitahirizanao :amount tao anatin\'ny telo volana farany| :shop_title',
        'title' => 'Tatitra ara-potoana momba ny asa aman-draharahanao, ny valisoa ary ny tahiry ara-bola',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Kaonty mifandray',
        'sub-title' => 'Inona ny sata farany momba ny kaonty kitapom-bola mifandray amin\'ny fivarovako?',
        'view-wallet' => 'Jereo ny poketra',
        'tip-title' => 'Torohevitra manan-danja',
        'tip' => "Manangana poketra Selldone maimaim-poana ary ampifandraiso amin'ny fivarotanao izany. Na dia ratsy aza ny fifandanjanao dia mbola afaka miantsena sy mandoa tsy misy olana ny mpanjifanao. Aza manahy fa hitohy tsara mandritra ny 1 volana ny fiasan'ny fivarotanao sy ny angon-drakitrao, tsy misy fahatapahana.\nSary",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Mifandraisa amin\'ny kaonty'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps napetraka',
        'sub-title' => 'Lisitry ny fampiharana napetrakao tao amin\'ny fivarotanao tamin\'ity herinandro ity.',
        'tip' => "Te hahita fampiharana bebe kokoa ho an'ny fivarotanao ve ianao?",
        'view-app-store' => 'Tsidiho ny Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Ny fivarotanao Bots',
        'sub-title' => 'Botika varotra mavitrika ao amin\'ny fivarovako.',
        'tip-title' => 'Varotra Bot',
        'tip' => "Selldone dia nanome anao bots fivarotana mandeha ho azy. Ny hany tsy maintsy ataonao dia ny mandeha any amin'ny Add-ons> Bots panel ary manetsika ny botika fivarotanao. Mariho fa ny serivisy mifandraika amin'izany dia tsy maintsy misy ao amin'ny firenenao.",
        'view-bots' => 'Mitantana bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Fifandraisana amin\'ny mpanjifa',
        'sub-title' => 'Firy ny fifandraisana nananako tamin\'ny mpanjifako tamin\'ity herinandro ity?',
        'faqs' => 'Fanontaniana matetika',
        'tickets' => 'Ticket mpanjifa',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Satan\'ny mpampiasa',
        'sub-title' => 'Ny hetsika avy amin\'ny :start mankany :end
Sary',
        'users' => [
            'title' => 'mpanjifa',
            'subtitle' => 'Misoratra anarana mpampiasa',
        ],
        'views' => [
            'title' => 'mitsidika',
            'subtitle' => 'Impiry ianao no nitsidika ny fivarotana',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Mpampiasa niverina',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Sarety fiantsenana',
            'subtitle' => 'Tatitra ny isan\'ny sarety fiantsenana vaovao',
        ],
        'products' => [
            'title' => 'Product Overview',
            'subtitle' => 'Toetran\'ny vokatra ao amin\'ny fivarotana araka ny karazana',
            'value_name' => 'Products'
        ],
        'products_count' => 'Karazana vokatra',
        'views_count' => 'Isan\'ny fijerena',
        'sell_count' => 'Mivarotra isa',
        'send_count' => 'Isan\'ny fandefasana',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel ho an\'ny mpivarotra lehibe an\'ny Drop Shipping Selldone.',
        'total_fulfillments' => 'Total kaomandy voaray',
        'ds_count' => 'Nahazo baiko',
        'statistics_title' => 'Tatitra nahazo baiko',
        'ds_cancels' => 'Manafoana amin\'ny mpivarotra interface tsara',
        'ds_rejects' => 'Hofoanao',
        'tip' => "Mpivarotra lehibe manana trano fanatobiana entana, orinasa, na mpaninjara vokatra ve ianao? Azonao atao ny manitatra ny tanjonao amin'ny fanolorana ny vokatrao amin'ny mpivarotra hafa amin'ny alàlan'ny serivisy Drop Shipping Selldone. Alefaso izahay amin'ny support@selldone.com raha te hahalala bebe kokoa.\nSary",
        'view-drop-shipping-panel' => 'Midira ao amin\'ny tontonana ambongadiny',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Taham-panakalozana',
        'sub-title' => 'Lisitry ny tahan\'ny fiovam-bola farany indrindra ao amin\'ny fivarotanao.',
        'from' => 'Source Currency',
        'to' => 'Vola amin\'ny toerana haleha',
        'rate' => 'tahan\'ny fiovam-po',
        'view-exchange-panel' => 'Tantano ny tahan\'ny fifanakalozana
Sary',
    

        'vew-exchange-panel' => 'tontonana fitantanana ny tahan\'ny fifanakalozana',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Fifanarahana manam-pahaizana',
        'sub-title' => 'Matihanina inona no miasa amin\'ny fivarovako?',
        'cost' => 'Vola amin\'ny fifanarahana',
        'duration' => 'Faharetana',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Daty Fanafoanana',
        'end_at' => 'Daty nanomezana',
        'tip' => 'Azonao atao ny manakarama manam-pahaizana manokana ao Selldone hampandroso ny orinasanao.',
        'view-experts' => 'Tsindrio raha hanomboka.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Tatitra ny vavahadin\'ny fandoavam-bola mavitrika amin\'ny fivarotana :shop.',
        'tip-title' => 'Torohevitra manan-danja',
        'tip' => "Mandehana any amin'ny pejin'ny fitantanana vavahadin-tserasera ao amin'ny fivarotanao ary ampio seranan-tsambo iray farafahakeliny ao anatin'ny minitra vitsy. Tian'ny mpanjifanao ny mandoa haingana sy azo antoka amin'ny alàlan'ny vavahadin-tserasera.",
        'view-shop-gateways' => 'Midira ao amin\'ny fitantanana ny vavahadin-tranonkalako.',
        'view-gateways' => 'Hijery vavahady misimisy kokoa',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Filaharana',
        'sub-title' => 'Lisitry ny baiko azoko tamin\'ity herinandro ity.',
        'total_baskets' => 'Total Kaomandy',
        'total_posBaskets' => 'Total kaomandy vola',
        'pos-title' => 'Boaty fivarotana POS',
        'chart-label' => 'Vita ny baiko (tsy voatery aloa ireo baiko ireo!)',
        'tip-title' => 'Tokony hiezaka mafy kokoa ianao...',
        'tip' => "Tsy misy fahombiazana tsotra.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Foibe fanodinana',
        'sub-title' => 'Firy ny kaomandy nokarakarainay tao amin\'ny magazay tamin\'ity herinandro ity?',
        'tip-title' => 'Tsy nisy varotra ianao!',
        'tip' => "Indrisy anefa fa tsy nisy varotra ianao tamin'ity herinandro ity. Mila mahazo bebe kokoa amin'ny fivarotanao ianao. Afaka manampy vokatra bebe kokoa ianao, misafidy sary tsara kokoa na manoratra famaritana tsara kokoa ho an'ny vokatrao. Eritrereto ny asa manontolo andro ho an'ny orinasanao. Raha manao izany tsara ianao ary tsy kivy dia hahomby ianao.",
        'view-process-center' => 'Jereo ny ivon\'ny fizotry',
        'return' => [
            'title' => 'Naverina ny baiko',
            'subtitle' => 'Tatitra ny baiko naverina.',
            'tip-title' => 'Fantatrao ve fa...',
            'tip' => "Afaka mamorona rejisitra vola betsaka araka izay ilainao amin'ny Selldone POS ianao! Na tablette, finday, na solosaina findainao izany, azonao atao ny mamadika ny fitaovana rehetra ho toeram-pivarotanao. Tsotra, haingana amboarina, ary voaomana tanteraka ho an'ny mpizaranao. Manomboha mampiasa azy anio!\nSary",
            'view-pos' => 'Midira ao amin\'ny My Online Store Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessions',
        'sub-title' => 'Impiry aho no nitsidika ny fivarovako?',
        'countries-title' => 'Iza amin\'ireo firenena no be mpitsidika indrindra?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Te hahazo vola ve ianao nefa tsy mandany vola iray?',
        'message' => "Ry:name, afaka mandeha any amin'ny Dashboard> Demonetization ianao ary mamorona rohy referral. Alefaso any amin'ny namanao ny rohy, mahazo karatra fanomezana Selldone ianao ary ny isan-jaton'ny fandoavana ny namanao. Mariho fa halefa ho anao sy ny namanao ny karatra fanomezana.",
        'action' => 'Jereo ny rohy fampidirana ahy',
        'mail-clip' => "<b style='color: #C2185B'>Zava-dehibe:</b> Raha mampiasa serivisy mailaka toy ny Gmail izay mametra ny halavan'ny mailaka ianao dia tadiavo ity safidy manaraka ity any amin'ny faran'ny mailaka hanehoana ny tatitra feno ary tsindrio eo:",

        'no-coin-reward' => "<b style='color: #C2185B'>Miala tsiny:</b> Tsy nahafeno ny fepetra hahazoana valisoa SEL Coins ny hetsika ataonao. Miezaha mafy ary mivarotra bebe kokoa amin'ny fivarotanao amin'ny vanim-potoana manaraka.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Fiarahabana:</b> Asa tsara! Miorina amin'ny zava-bita tsara indrindra nataonao, nomenay ny vola :amount SEL ho an'ny kaontinao ho valisoa.",

        'need-buy-license' => "<b>Manatsara ny orinasanao:</b> Toa mbola tsy nisoratra anarana drafitra famandrihana ho an'ny tranokalanao ianao! Havaozy izao mba hamoha endri-javatra maro kokoa ho an'ny :amount fotsiny isam-bolana raha aloa isan-taona.\nSary",
        'not-afford-message' => "Raha sendra olana amin'ny fandoavam-bola ianao na tsy mahavidy izany amin'izao fotoana izao, dia aza misalasala manatona anay amin'ny support@selldone.com.",
        'add-domain' => "<b>Maninona raha manana sehatra manokana ho an'ny orinasanao?</b><br> Ampio sehatra amin'ny tranokalanao izao; maimaim-poana izany!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone dia a<del> vokatra</del> <span style = 'color: forestgreen'>fiaraha-monina</span> .<br> Aoka ho mpivarotra matihanina!",
        'message' => "Araho ny pejy ofisialin'ny Selldone ao amin'ny Twitter, LinkedIn ary tambajotra sosialy. Alefaso anay ny fanehoan-kevitra, fangatahana na fanakianana na mandray anjara amin'ny fifanakalozan-kevitra momba ny Selldone. Izahay koa dia anisan'ny vondrom-piarahamonina Selldone izay <b>ataonao</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nahazo baiko zavokà vaovao|Ampahany :shop_title :time',
        'title' => "Tatitra momba ny zava-bita nandritra ny 24 ora farany",
        'message' => "Miandry ny hojerena sy ny vidiny ny mpanjifanao. Valio haingana araka izay azo atao ny fangatahan'ny mpanjifanao mba hahazoana varotra bebe kokoa.",
        'card_title' => "Kaomandy amin'ny filaharana",
        'card_subtitle' => "Hatramin'ny :date\nSary",

        'card_payed' => "Kaomandy voaloa"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Valio ny hafatrao ao amin\'ny :community_title',
        'title' => ":name, ary :count hafa naneho hevitra tamin'ny hafatrao.",
        'message' => "Salama :name, misarika ny saina ny hafatrao! Nahazo fanehoan-kevitra tao amin'ny vondrom-piarahamoninay ianao. Midira ao amin'ny kaontinao mba hanatevin-daharana ny fifanakalozan-kevitra ary hijery izay lazain'ny rehetra.\nSary",
        'title-simple' => ":name naneho hevitra tamin'ny hafatrao.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Valio ny lohahevitrao :topic_title',
        'title' => ":name, ary :count hafa namaly ny lohahevitrao.",
        'message' => "Salama :name, misarika ny saina ny lohahevitrao! Nahazo valiny tao amin'ny vondrom-piarahamoninay ianao. Midira ao amin'ny kaontinao mba hanatevin-daharana ny fifanakalozan-kevitra ary hijery izay lazain'ny rehetra.\nSary",
        'title-simple' => ":name namaly ny lohahevitrao.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Login vaovao :name',
        'category' => 'Fampandrenesana fiarovana',
        'title' => "Midira amin'ny kaonty",
        'message' => "Ry :name, niditra tao amin'ny kaontinao Selldone ianao.",   // Login in selldone (seller)
        'message-shop' => "Ry :name, niditra tao amin'ny :shop_title ianao.",  // Login in shop (buyer)

        'footer' => "Raha tsy tafiditra ianao dia ovay ny tenimiafinao.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "fanesorana",
        'deposit' => "petra-bola",

        'withdraw_subject' => "Mialà amin'ny kaonty :account\nSary",
        'deposit_subject' => "Ampidino ny kaonty :account\nSary",

        'message' => "Ny famindrana vola dia natao miaraka amin'ireto fepetra manaraka ireto.",

        'type' => "Karazana fifampiraharahana",

        'from' => "kaonty loharano",
        'to' => "Destination account",

        'desc' => "Famaritana ny fifampiraharahana",
        'action' => "Jereo ny fifampiraharahana",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Zava-dehibe! Fanitsakitsahana ny fitsipika| :shop",
        'category' => "Fampandrenesana mitsikera",
        'title' => "Voasazy ny fivarotanao",
        'action' => "Sokafy ny dashboard fivarotana",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter dia nanasa anao hanatevin-daharana Selldone\nAmpahany",
        'title' => ":name nandefa anao :amount mba hanampy anao amin'ny famoahana ny tranokalanao an-tserasera vaovao sy hahazoana vola!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Ekeo ny fanasana",
        'owner' => "Tompon'ny",
        'join-date' => "Ao amin'ny Selldone hatramin'izay",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Rohy fanarenana| :shop",
        'category' => "Fiarovana ny fivarotana",
        'title' => "Rohy fanarenana fivarotana an'ny <b>:shop_name</b> .",
        'message' => "Nalefa taminao ity mailaka ity satria nangataka ny hamerina ny fivarotanao ianao. Ny fipihana ny rohy eto ambany dia hamerina ny fivarotanao sy ny angona rehetra ao aminy.",
        'action' => "Hamafiso ny fanarenana ny fivarotana",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Ohatrinona ny vola notehirizin\'i Selldone ho an\'ny orinasanao?',
        'sub-title' => 'From date :start to :end',
        'infrastructure' => [
            'title' => 'fotodrafitrasa',
            'subtitle' => 'Servers, CDN, Storage, ary serivisy rahona hafa',
        ],
        'experts' => [
            'title' => 'Experts & Staff',
            'subtitle' => 'Mpamorona, fikojakojana ary fanohanana',
        ],
        'total_save' => 'Total vola voavonjy'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Ny fahombiazanao',
        'sub-title' => 'Fampahalalana momba ny orinasa :start mankany :end
Sary',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Mpampiasa niverina',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Sarety fiantsenana',
            'subtitle' => 'Tatitra ny isan\'ny sarety fiantsenana vaovao',

        ],
        'products' => [
            'title' => 'Product Overview',
            'subtitle' => 'Toetran\'ny vokatra ao amin\'ny fivarotana araka ny karazana',
            'value_name' => 'Products'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Totalin\'ny pejin\'ny tranonkala',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Nahazo baiko vaovao ianao. Mankanesa any amin'ny pejy fanodinana kaomandy azafady, ao amin'ny tontolon'ny mpivarotra anao.",
        'subject' => "🛍️ Voaray ny baiko vaovao| :order_id",
        'your_revenue' => "Ny vola miditra aminao",
    ],
    'vendor-invite' => [
        'title' => 'Fanasana mpivarotra',
        'message' => "Nahazo fanasana ho lasa mpivarotra ny :shop_name ianao. Azonao atao ny manaiky na mandà izany amin'ny fipihana ireto bokotra manaraka ireto.",
        'subject' => ":shop_name | Nahazo fanasana ho lasa mpivarotra anay ianao",
        'accept' => "Ekeo & ho lasa mpivarotra",
        'reject' => "mandà",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Fanasana hanatevin-daharana ny Ekipantsika
Sary',
        'message' => "Nasaina ianao hanatevin-daharana ny :vendor_name ao amin'ny :shop_name. Azonao atao ny manaiky na mandà ity fanasana ity amin'ny fampiasana ireo bokotra etsy ambany.\nSary",
        'subject' => "Fanasana hanatevin-daharana :vendor_name|Aoka ho mpikambana ao amin'ny ekipa",
        'accept' => "Ekeo & Midira ao amin'ny Ekipa",
        'reject' => "Mandà\nSary",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Ny kaody fidiranao ho an'ny :shop",
        'header-message' => "Alefanay aminao ity mailaka ity satria nangataka kaody fidirana ho an'ny fivarotana ianao. Azafady, tadiavo eto ambany ny tenimiafinao tokana (OTP):",
        'footer-message' => "Ity kaody ity dia manan-kery mandritra ny 10 minitra. Raha tsy nangataka ity kaody fidirana ity ianao dia tsidiho azafady ity mailaka ity."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Hamarino ny mailakao| :shop",
        'title' => 'Fanamarinana mailaka',
        'header-message' => "Salama :name,<br>Azafady mba hamafisina fa **:email** ny adiresy mailakao amin'ny fipihana ny bokotra eto ambany na ampiasao ny rohy eto ambany ao anatin'ny 48 ora.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Fanavaozana ny vokatra| :shop",
        'title' => "Fanavaozana momba ny toetry ny vokatra - 24 ora farany",
        'message' => "Manantena aho fa hahita anao tsara ity hafatra ity. Fanavaozana fohy ity hampahafantarana anao momba ny satan'ny vokatrao teo amin'ny lampihazonay nandritra ny 24 ora lasa.\nNandritra io vanim-potoana io dia nisy fiovana teo amin'ny satan'ny vokatra sasany. Mety ho noho ny fividianana, fanavaozana stock, na hetsika hafa mifandraika amin'izany ireo fiovana ireo.\nRaha mila fanazavana fanampiny momba ny vokatra tsirairay dia midira ao amin'ny kaontinao ary jereo ny fizarana 'State vokatra'.",
        'action' => "Sokafy ny Vendor Panel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Kaomandy betsaka voaray| :shop | :date",
        'title' => "Fampandrenesana kaomandy betsaka",
        'message' => "Nahazo kaomandy betsaka ianao. Tsidiho azafady ny pejy fanodinana kaomandy ao amin'ny tontonana raha mila fanazavana fanampiny. Azonao atao koa ny misintona ny lisitry ny baiko amin'ny alàlan'ny rohy azo antoka omena, manan-kery mandritra ny 7 andro.<br><br>\n        <b>ZAVATRA:</b> Ity rohy ity dia manan-kery mandritra ny 7 andro.<br>\n        Ity rohy ity dia mavitrika, ka isaky ny manindry azy ianao dia hahazo ny baiko farany indrindra ho an'ity daty manokana ity. <b> Midika izany fa raha miova ho nolavina ny satan'ny fandoavana ny kaomandy, dia tsy ho hitanao intsony ao amin'ny CSV alaina io baiko io, na raha voaloa ny baiko dia hiseho ao anaty lisitra izany.</b><br><br>\n        <ul>\n            <li> Ny CSV dia misy baiko karama miaraka amin'ny daty voatokana ao amin'ny :date.</li>\n            <li> Daty voatokana dia ny daty manindry ny checkout ny mpampiasa amin'ny pejy fibaikoana.</li>\n        </ul>\n        <b> Mba hisorohana ny dika mitovy, jereo foana ny Order ID alohan'ny handefasana.</b>\n    \nSary",
        'action' => "Ampidino ny lisitry ny baiko\nSary",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Ny entana sasany ao amin'ny kaomandinao dia tsy nekena ary tsy azo aterina. Haverina amin'ny karatrao tsy ho ela ny sandan'ireo entana ireo.\nSary"
    ]

];
