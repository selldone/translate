<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Wannan sakon yana maraba da sabon mai siye zuwa shagon.
Saukewa:',
        ShopMailTemplateCodes::OrderCheckout => 'Ana aika wannan sanarwar lokacin da mai siye ya tabbatar da oda.
Saukewa:',
        ShopMailTemplateCodes::OrderPayment => 'Wannan sanarwar tana tabbatar da nasarar biyan kuɗin da abokin ciniki ya yi.
Saukewa:',
        ShopMailTemplateCodes::OrderUpdate => 'Ana aika wannan sakon don sabunta mai siye kan matsayin odarsu.
Saukewa:',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ana aika wannan sakon zuwa ga mai siyarwa don sanar da su wani tabbataccen oda.
Saukewa:',
        ShopMailTemplateCodes::PosCheckout => 'Ana aika wannan sanarwar don tabbatar da odar siyarwa ga mai siye.
Saukewa:',
        ShopMailTemplateCodes::PosPayment => 'Wannan sanarwar tana tabbatar da wurin biyan siyar da mai siye ya yi.
Saukewa:',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Wannan sakon yana sanar da mai siyar da siyan da aka yi a wurin siyar da su.
Saukewa:',
        ShopMailTemplateCodes::ShopContact => 'Ana aika wannan sanarwar lokacin da aka ƙaddamar da fam ɗin lamba.
Saukewa:',
        ShopMailTemplateCodes::ShopGiftCard => 'Wannan sanarwar tana sanar da mai amfani cewa sun karɓi katin kyauta.
Saukewa:',

        ShopMailTemplateCodes::ShopVendorJoin => 'Wannan sakon yana maraba da sabon mai siyarwa zuwa shagon.
Saukewa:',
        ShopMailTemplateCodes::ShopVendorInvite => "An aika wannan saƙon don gayyatar mai siyarwa don shiga kasuwan ku.\nSaukewa:",
        ShopMailTemplateCodes::ShopVendorOrder => "Ana aika wannan saƙon zuwa ga mai siyarwa lokacin da aka karɓi oda a ko dai Biya ko Kuɗi akan Matsayin Bayarwa (COD).\nSaukewa:",
        ShopMailTemplateCodes::ShopVendorProducts => "Ana aika kullun don sabunta masu siyar da matsayin samfuran su.\nSaukewa:",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "An aika wannan saƙon don gayyatar mai siyarwa don shiga cikin kasuwar ku.\nSaukewa:",

        ShopMailTemplateCodes::UserLogin => "Sanar da mai amfani tare da bayanan shiga, gami da adireshin IP, kwanan wata, da na'ura, don dalilai na tsaro.\nSaukewa:",
        ShopMailTemplateCodes::LoginCode => "Aika lambar kalmar sirri ta lokaci ɗaya don masu amfani don shiga cikin shagon.\nSaukewa:",

        ShopMailTemplateCodes::EmailVerifyLink => "Aika hanyar haɗi don tabbatar da adireshin imel ɗin mai amfani. Ana aika wannan imel ɗin lokacin da mai amfani ya yi rajista ta SMS kuma ya shigar da imel ɗin su. Ba a aika lokacin da mai amfani yayi rijista kai tsaye tare da shiga jama'a ko imel.\nSaukewa:",

        ShopMailTemplateCodes::EmailBulkOrder => "Aika jerin oda da aka karɓa da biyan kuɗi a cikin adadi na takamaiman rana.\nSaukewa:"


    ,

    ],


    'global' => [
        'greetings' => 'Hi, :name!
Saukewa:',
        'end-statement' => 'Taimako tawagar',

        'receiver_name' => 'Barka dai :user_name',
        'footer-help' => "Kuna buƙatar taimako? Tambayi a [support@selldone.com](mailto:support@seldone.com) ko ziyarci [cibiyar taimako](https://selldone.com/community).\nSaukewa:",
        'selldone-team' => 'Ƙungiyar Selldone',
        'footer-shop' => "Idan kuna buƙatar taimako da wani abu don Allah kar a yi shakka a aiko mana da imel:shop_mail",
        'accept' => "Karba",
        'reject' => "Ƙi",
        'verify' => "tabbatar",
        'title' => "Take",
        'value' => "Daraja",
        'description' => "Bayani",
        'shop' => "Shago",
        'shop-info' => "Bayanin Store\nSaukewa:",
        'user' => "mai amfani",
        'user-info' => "Bayanin Asusu\nSaukewa:",
        'license' => "Lasisi",
        'status' => "Matsayi",
        'start' => "Fara",
        'end' => "Ƙarshe",
        'renewal' => "Sabuntawa",
        'view' => "Duba",

        'balance' => "Ma'auni",
        'card_number' => "Lambar kati",
        'cvv' => "CV",
        'expire_date' => "Ranar ƙarewa",

        'Dashboard' => "Dashboard\nSaukewa:",
        'order' => "oda",
        'view_order' => "Duba oda",
        'pay_now' => "Pay now",

        'official_selldone' => "SIYAR DA HUKUNCI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Kuɗi",
        'free-balance' => "Ma'auni kyauta",
        'locked-balance' => "Ma'auni mai kulle",
        'bot' => "Bot",
        'requests' => "Bukatu",
        'baskets' => 'Katuna',
        'physical' => "Na zahiri",
        'virtual' => "Na gani",
        'file' => "Fayil",
        'service' => "Sabis",
        'fulfillment' => "Cika",
        'open' => "Bude",
        'reserved' => "Ajiye",
        'canceled' => "An soke",
        'payed' => "An biya",
        'cod' => "COD",
        'orders-count' => 'Umarni',
        'payments-count' => 'Biyan kuɗi',
        'confirms-count' => 'Ya tabbatar',
        'sends-count' => 'Aika',
        'delivers-count' => 'Bayarwa',
        'count' => 'Ƙidaya',
        'transactions-count' => 'Ma\'amaloli suna ƙidaya',
        'success-transactions' => 'Cin nasara ma\'amaloli',
        'total-amount' => 'Jimla',
        'amount' => 'Adadin',
        'wage' => 'Albashi',
        'debug' => 'Gyara kuskure',
        'pos' => 'POS',
        'live' => 'Rayuwa',
        'CheckQueue' => 'Duba jerin gwano',
        'OrderConfirm' => 'Tabbatar da oda',
        'PreparingOrder' => 'Ana shirya oda',
        'SentOrder' => 'An aika oda',
        'ToCustomer' => 'Bayar da abokin ciniki',
        'Pending' => 'Ana jiran',
        'Accepted' => 'Karba',
        'Rejected' => 'An ƙi',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Waya',
        'total' => 'Jimlar',
        'view-detail' => 'Duba cikakken bayani',
        'empty' => 'Babu komai',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Amsa',
        'reactions' => 'Martani',
        'Comments' => 'Sharhi
Saukewa:',
        'last-comment' => 'Sharhi na ƙarshe',
        'response-to' => 'Martani ga',
        'posts' => 'Posts',
        'post' => 'Buga',

        'name' => 'Suna',
        'email' => 'Imel',
        'type' => 'nau\'in',
        'device' => 'Na\'ura',
        'platform' => 'Dandalin',
        'browser' => 'Browser',
        'time' => 'Lokaci',
        'Wallet' => 'Wallet
Saukewa:',
        'date' => 'Kwanan wata',

        'account' => 'Asusu',
        'transaction' => 'Ma\'amala',
        'fee' => 'Kudin',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Rukuni',
        'password' => 'Kalmar wucewa',
        'verify-login' => "Tabbatar & Shiga",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Saya yanzu",
        'add-domain' => "Add Domain",
        'views' => 'Ra\'ayi',


        'country' => 'Ƙasa',
        'address' => 'adireshin',
        'postal' => 'Lambar gidan waya',
        'building_no' => 'Gina #',
        'building_unit' => 'Naúrar #',
        'message' => 'Sako',


        'customer' => 'Abokin ciniki',
        'cart-items' => 'Kayan kwalliya',
        'payment' => 'Biya',
        'receiver' => 'Mai karɓa',
        'virtual-items' => 'Abubuwa na zahiri',
        'no-payment' => 'Babu biya!',

        'enable' => 'Kunna',
        'access' => 'Shiga',
        'bank' => 'Bayanin banki',

        'vendor' => 'Mai sayarwa',

        'view_content' => "Duba cikakken abun ciki",
        'files' => 'Fayiloli',
        'download' => 'Zazzagewa',
        'file_name' => 'Sunan Fayil',
        'file_size' => 'Girman',

        'subscription' => 'Biyan kuɗi',
        'products' => 'Kayayyaki',
        'vendor_products' => 'Kayayyakin Dillali',

        'pickup' => 'Daukewa
Saukewa:',

        'minutes' => 'Mintuna
Saukewa:',
        'hours' => 'Awanni
Saukewa:',

        'refund' => 'Maida kuɗi
Saukewa:',
        'recipient_address' => 'Adireshin mai karɓa
Saukewa:',
        'signature' => 'Sa hannu
Saukewa:',
        'blockchain' => 'Blockchain
Saukewa:',
        'details' => 'Cikakkun bayanai
Saukewa:',


    

        'Shop' => 'Shago',
        'dashboard' => 'dashboard',
        'comments' => 'sharhi',
        'wallet' => 'walat',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Kasuwancin OS\nSaukewa:",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Rahoton Ayyuka, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Rahoton Yanayi, Selldone'
        ],
        'Onboarding' => [
            'id' => 'sannu',
            'name' => 'Amincewa, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Support :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Tabbatar, Selldone'
        ],
        'Welcome' => [
            'id' => 'sannu',
            'name' => 'Al\'umma, Selldone'
        ],
        'NewShop' => [
            'id' => 'yan kasuwa',
            'name' => 'Amincewa, Selldone'
        ],
        'Approve' => [
            'id' => 'yarda',
            'name' => 'Amincewa, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gudanar da oda :name
Saukewa:'
        ],

        'Recovery' => [
            'id' => 'farfadowa',
            'name' => 'Tawagar farfadowa da Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Mai jiran gado',
        'PAYED' => 'An biya ✅',
        'CANCELED' => 'An soke ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Mai gudanarwa',
            'OFFICER' => 'Jami\'i kuma mai kulawa',
            'AUDITING' => 'Manajan binciken',
            'EMPLOYEE' => 'Ma\'aikaci',
            'PRODUCT' => 'Mai sarrafa kayayyaki',
            'CONTENT' => 'Manajan abun ciki',
            'MARKETING' => 'Manajan tallace-tallace',
            'VIEWER' => 'Mai kallo',

        ],
        'subject' => ":inviter ya gayyace ku azaman :level| :shop",
        'category' => "Gayyatar ma'aikata",
        'title' => "An gayyace ku zuwa <b>:shop_name</b> as <b>:level</b> .",
        'message' => "You've received an invitation to collaborate with the <b>:shop_title</b> team in business. You have the option to accept or decline this offer. Should you choose to accept, please log in to the Selldone service to confirm your decision. Upon confirmation, you will gain access to the store management section.",

    ],

    'welcome-email' => [
        'subject' => "👋 Barka da :name, Mu Fara da Selldone!\nSaukewa:",
        'category' => 'CONGRATULATION',
        'title' => "Barka da zuwa Selldone\nSaukewa:",
        'message' => "Na gode da zabar Selldone! Yanzu kun kasance wani ɓangare na ƙaƙƙarfan al'umma wanda ke haɗa masu siyar da duniya zuwa abokan ciniki, kasuwancin gida zuwa kamfanoni, da daidaikun mutane ga kamfanoni. Duk kayan aikin Jagora da Pro suna samuwa a gare ku ** kyauta ** da ** marasa iyaka ***. Mun zo nan don tallafa muku tare da buɗe kofofin samun nasarar ku.\nSaukewa:",

        'index' => "Mataki :step. \nSaukewa:",

        'step-domain' => [
            'title' => 'Ƙara Domain Ku na Al\'ada
Saukewa:',
            'message' => "Don farawa, ƙara yankinku na al'ada kyauta a cikin Dashboard ɗin Kasuwanci a ƙarƙashin Saituna> Saitunan yanki.\nSaukewa:",
            'action' => 'Sarrafa Domains Nawa
Saukewa:',
        ],
        'step-landing' => [
            'title' => 'Keɓance Shafin Gidanku
Saukewa:',
            'message' => "Keɓance shafin gida ta zuwa Dashboard> Shafuka. Zaɓi shafin saukarwa ko ƙirƙirar sabo. Yana da sauƙi kuma mai fahimta, kuma za ku iya fara aiki da shi nan da nan.\nSaukewa:",
            'action' => 'Keɓance Shafin Saukowa Na
Saukewa:',
        ],
        'step-payment' => [
            'title' => 'Saita Hanyoyin Biyan Kuɗi
Saukewa:',
            'message' => "Fara karɓar biyan kuɗi kai tsaye cikin asusun bankin ku. Don haɗa masu ba da kuɗin ku kamar Stripe, PayPal, da ƙari, je zuwa Dashboard> Accounting> Ƙofar.\nSaukewa:",
            'action' => 'Ƙara Hanyoyin Biyan Kuɗi
Saukewa:',
        ],
        'step-products' => [
            'title' => 'Ƙara samfuran ku
Saukewa:',
            'message' => "A sauƙaƙe ƙara samfura da nau'ikan a cikin Dashboard > Kayayyaki. Yana kama da sarrafa fayiloli da manyan fayiloli akan PC ɗinku - cikakken ja-da-saukar da shirye. Hakanan zaka iya shigo da samfuran da yawa ta amfani da Excel. Akwai samfurin samfuri don taimaka muku farawa.\nSaukewa:",
            'action' => 'Sarrafa Samfurana
Saukewa:',
        ],
        'step-shipping' => [
            'title' => 'Saita Hanyoyin jigilar kaya
Saukewa:',
            'message' => "Don cajin abokan ciniki don jigilar kaya, ayyana hanyoyin jigilar kaya a cikin Dashboard> Logistic> jigilar kaya. Kuna iya saita farashi daban-daban da tallafi don wurare daban-daban. Kar a manta saita asalin rumbun ku a cikin Dashboard> Logistic> Warehouse.\nSaukewa:",
            'action' => 'Sarrafa hanyoyin jigilar kaya',
        ],
    

        'seller' => [
            'title' => 'Kai mai sayarwa ne?',
            'message' => 'Don fara siyarwa, shigar da dashboard ɗinku a cikin Selldone ta hanyar mahaɗin da ke ƙasa kuma ƙirƙirar kantin sayar da ku na farko gabaɗaya kyauta. Wannan zai ɗauki \'yan mintoci kaɗan kuma za ku sami kantin sayar da ku da gidan yanar gizon ku. Sannan za mu jagorance ku zuwa matakai na gaba kuma mu sami ƙofar biyan kuɗi.',
            'action' => 'Shiga dashboard dina',
        ],
        'buyer' => [
            'title' => 'Ni mai saye ne',
            'message' => 'Ina taya ku murna. Da zarar kun kasance memba na Selldone, za ku kawar da duk wahalhalun kasancewa memba da tabbatarwa a cikin shagunan kan layi. Don amfana daga kowane shago da rukunin yanar gizon da ke amfani da dandalin Selldone, zaku iya shiga tare da dannawa ɗaya kuma ku sanya siyan ku mai sauƙi, sauri da aminci.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Account > Caji',
        'title' => "Cajin Nasara",
        'message' => "Your account <b>:account_number</b> has been charged <b>:amount</b> successfully.",
        'account' => 'Asusu',
        'charge' => 'Caji',
        'balance' => 'Ma\'auni',
        'footer' => "Sanya kasuwanci cikin sauƙi, mai yiwuwa, kuma mai isa ga kowa a duniya."
    ],

    'verify-email' => [
        'subject' => "🙌 Cika rajistar ku zuwa Selldone! Tabbatar da hanyar haɗin gwiwa.",
        'category' => "KAINE MATAKI DAYA",
        'title' => "Tabbatar da adireshin imel ɗin ku",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Idan kuna fuskantar matsala ta danna maɓallin Tabbatarwa, kwafi kuma liƙa URL ɗin da ke ƙasa cikin mazuruftan gidan yanar gizon ku: :activation_url",
        'next-step' => "Na gaba, za mu aiko muku da wasu kayan taimako da jagorar mataki-mataki don sauƙaƙe muku ƙara yankinku na al'ada, saita biyan kuɗi, ƙara samfuran, da samun odar ku ta farko.\nSaukewa:",

    ],
    'verify-email-code' => [
        'subject' => "Lambar tabbatarwa don :name",
        'category' => "SECURITY",
        'title' => "Lambar tabbatarwa ta imel",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Shagon Ku Ya Shirya| :name",
        'category' => "KAINE MATAKI DAYA",
        'title' => "An gama saitin",
        'account_title' => "Asusun ku",
        'account_msg' => "Tabbatar da shiga cikin asusunku tare da wannan bayanin.",
        'shop_msg' => "Bayanin asusu akan tsarin kasuwancin Selldone.",

    ],

    'reset2fa' => [
        'category' => "SAKON TSARO",
        'title' => "Neman musaki shiga matakai biyu",
        'message' => "You are receiving this email because we received a request to reset two-factor authentication for **:name** account with **:email** email.<br><br>We found the following details for your account:",
        'footer' => "Idan baku nemi sake saitin kalmar sirri ba, ba a buƙatar ƙarin wani mataki.",
        'action' => 'Kashe shiga ta mataki biyu',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Shagon ku yana shirye yanzu!",
        'category' => "HAIHUWA NEW ONLINE Store A DUNIYA",
        'title' => "Taya murna, :name!\nSaukewa:",
        'message' => "<b> Taya murna, :name! Sabon kasuwancin ku na kan layi yana gudana yanzu!</b> Muna farin cikin maraba da ku zuwa ga jama'ar masu siyarwa. Kun ɗauki mataki na farko zuwa ga nasara, kuma muna nan don taimaka muku kowane mataki na hanya.<br><br>Yanzu da kantin sayar da ku ya shirya, bari mu tabbatar an saita ku don karɓar kuɗi kai tsaye daga abokan cinikin ku kuma fara haɓaka daular ku. Idan kuna buƙatar taimako, muna nesa da saƙo- ƙungiyarmu ta goyan bayanku koyaushe tana nan don ku. Za mu jagorance ku ta kowane mataki don samun kantin ku yana gudana ba tare da matsala ba.\nSaukewa:",
        'pdf-book' => "Kar a rasa littafin hannu da aka makala: Yi Kasuwancin ku Kamar Wasan",

        'account' => [
            'title' => 'Mataki 1: Ƙirƙiri asusu a cikin walat ɗin Selldone',
            'message' => "Don farawa, ƙirƙiri asusu a cikin walat ɗin ku na Selldone. Anan ne za a cire kuɗin ku, kuma a nan ne za ku biya don kiyaye kantin sayar da ku ba tare da matsala ba. Idan ma'aunin ku ya kasance mara kyau, kada ku damu! Shagon ku zai ci gaba da aiki ba tare da katsewa ba.\nSaukewa:",
            'action' => 'Shiga cikin walat',
        ],

        'shop-account' => [
            'title' => 'Mataki 2: haɗa asusun zuwa kantin sayar da',
            'message' => "Na gaba, haɗa asusun walat ɗin ku zuwa kantin sayar da ku. Shugaban zuwa <b>Store> Accounting> Invoice</b>, kuma haɗa walat ɗin ku. Wannan yana tabbatar da cewa duk biyan kuɗin abokin ciniki ana saka shi kai tsaye cikin asusun bankinku-Selldone baya cire wani adadi daga abin da kuka samu.\nSaukewa:",
            'action' => 'Ajiye daftari Panel',
        ],

        'gateway' => [
            'title' => 'Mataki 3: Haɗa Ƙofar Biyan Kan layi',
            'message' => "Yanzu, bari mu saita ƙofar biyan kuɗin kan layi. Je zuwa <b>Store> Accounting> Port</b> kuma danna <b>Add Sabuwar Port</b>. Zaɓi kuɗin kuɗin ku, kuma za ku ga jerin ƙofofin biyan kuɗi. Haɗa ƙofa yana da sauri da sauƙi, amma idan kuna buƙatar kowane taimako, jin daɗin bincika jagororin Selldone ko tuntuɓe mu.\nSaukewa:",
            'action' => 'Ƙara portal zuwa shagon',
        ],

        'domain' => [
            'title' => 'Mataki na ƙarshe: haɗa yanki mai kwazo',
            'message' => "Yanzu, haɗa yankinku na al'ada zuwa kantin sayar da ku. Wannan yana ba abokan ciniki damar siyan samfuran ku ko ayyukanku kuma su biya muku kuɗi kai tsaye.\nSaukewa:",
            'action' => 'Gabatarwa da karɓar katunan kyauta marasa iyaka',
        ],
    ],


    'basket-list' => [
        'item' => "abu",
        'count' => "Ƙidaya",
        'price' => "farashin",
        'discount-code' => "Lambar rangwame",
        'customer-club' => 'Ƙungiyar Abokin Ciniki',
        'shipping' => "Jirgin ruwa",
        'total' => "Jimlar",
        'offer' => "Bayar",
        'coupon' => "Copon",
        'lottery' => "Kyauta",
        'tax' => "Haraji",
        'tax_included' => "Kunshe cikin farashi",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Hanya',
        'amount' => 'Adadin',
        'giftcard' => 'Gift card',
        'payment' => 'Biya',
    ],


    'shop-subscription-email' => [
        'category' => "Sabunta biyan kuɗi",
        'title' => "Lasisin shago: :shop_title",
        'title-reserved' => "Lasin ajiyar kuɗi: :shop_title",
        'title-active' => "Lasisi mai aiki: :shop_title",
        'title-finished' => "Ƙarshen lasisi: :shop_title",
        'title-cancel' => "Soke lasisi: :shop_title",
        'message' => "An sabunta tsarin lasisin kantin ku,",
        'RESERVED' => "⚡ An ajiye tsarin biyan kuɗin ku **.",
        'ACTIVE' => "🟢 An kunna tsarin biyan kuɗin ku ** kunna**.",
        'FINISHED' => "🚧 An gama shirin biyan kuɗin ku **.",
        'CANCEL' => "⛔ An soke tsarin biyan kuɗin ku **.",
    ],

    'support' => [
        'subject' => "Cibiyar Tallafawa|:name ya amsa",
        'category' => "Cibiyar tallafi",
        'title' => "Kun sami amsa",
        'action' => "Bude admin kantin",
    ],

    'shop-customer-join' => [
        'subject' => "Shiga :shop_title",
        'category' => "Sabuwar bikin abokin ciniki",
        'title' => "Muna farin ciki da kasancewar ku",
        'action' => "Ziyarci yanzu",
    ],

    'shop-vendor-join' => [
        'subject' => "Dillali Kan Jirgin Sama| :shop_title",
        'category' => "Bikin sabon mai siyarwa",
        'title' => "Muna farin ciki da kasancewar ku",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Katin Kyauta :shop_title\nSaukewa:",
        'category' => "Ƙara sabon kati",
        'title' => "Taya murna, kun karɓi katin kyauta",
        'action' => "Siyayya yanzu",
        'message' => "Kun karɓi katin kyauta a cikin adadin :balance :currency. Zaku iya siya daga shagonmu da wannan katin kyauta.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Cibiyar Tallafawa| :shop",
        'category' => "goyon baya",
        'title' => "Kun sami amsa",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Tabbatar da oda|oda :order_id",
        'title' => "oda",
        'message' => "Kun yi oda a kantin sayar da mu. Mun karɓi odar ku kuma za mu sake aiko muku da wani imel da zarar an tabbatar da biyan kuɗi.\nSaukewa:"
    ,

        'payments' => 'Biyan kuɗi',
    ],

    'order-payment' => [
        'subject' => "🛍️ Tabbatar da Biyan Kuɗi|oda :order_id",
        'title' => "Odar biyan kuɗi",
        'message' => "An kammala biyan ku,<br> Mun sami odar ku. Za mu sake jefar da ku wani imel lokacin da odar ku ta tashi.",
    

        'payments' => 'Biyan kuɗi',
    ],

    'order-update' => [
        'subject' => "🛍️ Sabunta Matsayin oda|oda :order_id",
        'title' => "Sabunta Matsayin oda\nSaukewa:",
        'message' => "An sabunta odar ku. Kuna iya duba sabon halin wannan odar a cikin asusun ku.\nSaukewa:",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Odar ku yana cikin layi don sarrafawa. Za mu sanar da ku lokacin da ake shirya shi.\nSaukewa:",
                'OrderConfirm' => "An tabbatar da odar ku kuma an fara shiri.\nSaukewa:",
                'PreparingOrder' => "Ana shirya odar ku kuma za a aika nan ba da jimawa ba.\nSaukewa:",
                'SentOrder' => "An aika odar ku Za ku karba ba da jimawa ba.\nSaukewa:",
                'ToCustomer' => "An isar da odar ku. Muna fatan za ku ji daɗi!\nSaukewa:",

                'PreparingOrder-PICKUP' => "Ana shirya odar ku. Za ku karɓi sanarwa lokacin da aka shirya don ɗauka.\nSaukewa:",
                'SentOrder-PICKUP' => "An shirya odar ku don ɗauka. Da fatan za a zo kantin don karba.\nSaukewa:",
                'ToCustomer-PICKUP' => "An karɓi odar ku. Muna fatan za ku ji daɗi!\nSaukewa:"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Odar ku yana cikin layi don sarrafawa. Za mu sanar da ku idan ya shirya.\nSaukewa:",
                'OrderConfirm' => "An tabbatar da odar ku kuma ana kan shirye-shiryen.\nSaukewa:",
                'PreparingOrder' => "Ana shirya odar ku kuma za a aiko muku nan ba da jimawa ba.\nSaukewa:",
                'ToCustomer' => "An isar da odar ku ta zahiri zuwa asusun ku. Na gode!\nSaukewa:"
            ],
            'SERVICE' => [
                'CheckQueue' => "Buƙatun sabis ɗin ku yana cikin jerin gwano. Za mu sanar da ku idan muka fara.\nSaukewa:",
                'OrderConfirm' => "An tabbatar da sabis ɗin ku kuma muna shirin farawa.\nSaukewa:",
                'PreparingOrder' => "Muna shirya sabis ɗin ku, kuma za mu sanar da ku da zarar an gama.\nSaukewa:",
                'ToCustomer' => "Hidimar ku ya cika. Na gode da zabar mu!"
            ],
            'FILE' => [
                'PreparingOrder' => "Ana shirya fayil ɗin ku kuma zai kasance nan ba da jimawa ba.\nSaukewa:",
                'ToCustomer' => "An shirya fayil ɗin ku kuma an isar da shi. Zaku iya sauke shi yanzu.\nSaukewa:"
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Odar biyan kuɗin ku yana cikin jerin gwano. Za mu sanar da ku lokacin da aka fara sarrafawa.\nSaukewa:",
                'OrderConfirm' => "An tabbatar da biyan kuɗin ku kuma ana saitawa.\nSaukewa:",
                'PreparingOrder' => "Muna shirye-shiryen biyan kuɗin ku kuma za a fara nan ba da jimawa ba.\nSaukewa:",
                'SentOrder' => "An kunna biyan kuɗin ku. Za ku sami sabuntawa masu gudana.\nSaukewa:",
                'ToCustomer' => "An kunna sabis ɗin biyan kuɗin ku cikin nasara.\nSaukewa:"
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Taya murna :name | Sabuwar baucan: :title',
        'category' => "TAYA TAYA, SABON BAUCHI",
        'message' => "Hey :name,<br><br>You've received a new voucher as a gift from us! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. This voucher is worth **:price :currency**.<br><br>You've taken the first step, and we’re here to help you unlock new features with your voucher! Please login with **:email** and find your voucher in the Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congratulations!",
        'action' => "Dashboard na",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Taya murna, Dear :name | Kun karɓi kyauta',
        'category' => "Sanarwa na samun kyauta",
        'title' => "Gifts gare ku",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Kyauta",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ An Samu Sabon Umarni| :order_id",
        'title' => "New Order",
        'message' => "Kun karɓi sabon oda. Da fatan za a je shafin sarrafa oda a cikin shagon ku.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Cikakkun Bayananku',
        'output-form-title' => 'Bayanan abu da aka saya',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Rahoton mako-mako :time',
        'title' => 'Rahoton aikin kantin mako-mako',
        'message' => "This is your store's weekly report from <b>:start</b> to <b>:end</b>. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Rahoton ajiyar ku na :amount a cikin watanni uku da suka gabata| :shop_title',
        'title' => 'Rahoton lokaci game da ayyukan kasuwancin ku, lada da ajiyar kuɗi',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Asusun da aka haɗa',
        'sub-title' => 'Menene sabon matsayi na asusun walat ɗin da aka haɗa da kantina?',
        'view-wallet' => 'Duba walat',
        'tip-title' => 'Muhimman shawarwari',
        'tip' => "Ƙirƙiri walat ɗin Selldone kyauta kuma ku haɗa shi zuwa shagon ku. Ko da ma'aunin ku mara kyau ne, abokan cinikin ku har yanzu suna iya siyayya da biya ba tare da wata matsala ba. Kada ku damu, ayyukan kantin ku da bayananku za su ci gaba da tafiya lafiya har zuwa wata 1, ba tare da wani tsangwama ba.\nSaukewa:",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Haɗa zuwa lissafi'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'An shigar da apps',
        'sub-title' => 'Jerin aikace-aikacen da kuka shigar a cikin kantin sayar da ku a wannan makon.',
        'tip' => "Kuna son nemo ƙarin ƙa'idodi don kantin sayar da ku?",
        'view-app-store' => 'Ziyarci Shagon Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bots Store ɗinku',
        'sub-title' => 'Bots tallace-tallace masu aiki a cikin shagona.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone ya samar muku da bots tallace-tallace ta atomatik. Abin da kawai za ku yi shi ne je zuwa Add-ons> Bots panel kuma kunna bots ɗin kantin ku. Lura cewa sabis ɗin da ya dace dole ne ya kasance a cikin ƙasar ku.",
        'view-bots' => 'Sarrafa bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Sadarwa tare da Abokan ciniki',
        'sub-title' => 'Abokan hulɗa nawa na yi da abokan cinikina a wannan makon?',
        'faqs' => 'Tambayoyin da ake yawan yi',
        'tickets' => 'Tikitin abokin ciniki',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Matsayin masu amfani',
        'sub-title' => 'Ayyuka daga :start zuwa :end
Saukewa:',
        'users' => [
            'title' => 'Abokan ciniki',
            'subtitle' => 'Masu Amfani',
        ],
        'views' => [
            'title' => 'Ziyara',
            'subtitle' => 'Sau nawa ka ziyarci kantin',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Masu amfani da aka dawo',

        'shop_views' => 'Kayayyakin Kayayyakin kallo',
        'baskets' => [
            'title' => 'Kasuwancin Siyayya',
            'subtitle' => 'Bayar da rahoton adadin sabbin motocin sayayya',
        ],
        'products' => [
            'title' => 'Bayanin Samfura',
            'subtitle' => 'Matsayin samfurori a cikin shagon ta nau\'in',
            'value_name' => 'Kayayyaki'
        ],
        'products_count' => 'Nau\'in samfur',
        'views_count' => 'Duba ƙidaya',
        'sell_count' => 'Ƙididdiga na siyarwa',
        'send_count' => 'Ƙididdigar jigilar kaya',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Ajiye jigilar kaya',
        'sub-title' => 'Panel don manyan masu siyar da Drop Shipping Selldone.',
        'total_fulfillments' => 'Jimillar oda da aka karɓa',
        'ds_count' => 'An Karɓi Umarni',
        'statistics_title' => 'Rahoton da aka samu oda',
        'ds_cancels' => 'Soke ta mai siyar da kayan masarufi',
        'ds_rejects' => 'Soke ta Kai',
        'tip' => "Shin kai babban mai siyarwa ne tare da sito, masana'anta, ko mai rarraba kayayyaki? Kuna iya faɗaɗa isar ku ta hanyar ba da samfuran ku ga sauran masu siyarwa ta hanyar sabis ɗin Drop na Selldone. Yi mana imel a support@selldone.com don ƙarin koyo.\nSaukewa:",
        'view-drop-shipping-panel' => 'Shiga zuwa babban kwamiti na wholesale',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Darajar musayar kudi',
        'sub-title' => 'Jerin sabbin farashin canjin kuɗi a cikin shagon ku.',
        'from' => 'Tushen Currency',
        'to' => 'Kuɗin makoma',
        'rate' => 'Yawan tuba',
        'view-exchange-panel' => 'Sarrafa farashin musayar
Saukewa:',
    

        'vew-exchange-panel' => 'canjin kudi management panel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Kwangilolin masana',
        'sub-title' => 'Wadanne kwararru ne ke aiki a kantina?',
        'cost' => 'Adadin kwangila',
        'duration' => 'Tsawon lokaci',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Kwanan wata Soke',
        'end_at' => 'Ranar bayarwa',
        'tip' => 'Kuna iya hayar ƙwararrun ƙwararru a cikin Selldone don haɓaka kasuwancin ku.',
        'view-experts' => 'Danna don farawa.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Ƙofar Biyan Kuɗi Mai Aiki akan Shagon ku :shop
Saukewa:',
        'tip-title' => 'Muhimman shawarwari',
        'tip' => "Jeka shafin sarrafa tashar yanar gizo a cikin kantin sayar da ku kuma ƙara aƙalla tashar jiragen ruwa guda ɗaya a cikin 'yan mintuna kaɗan. Abokan cinikin ku suna son biyan kuɗi cikin sauri da aminci ta hanyoyin yanar gizo.",
        'view-shop-gateways' => 'Shiga cikin sarrafa tashar tashar kantina.',
        'view-gateways' => 'Duba ƙarin ƙofofin',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Umarni',
        'sub-title' => 'Jerin umarni da na samu a wannan makon.',
        'total_baskets' => 'Jimlar oda',
        'total_posBaskets' => 'Jimlar odar Kuɗi',
        'pos-title' => 'Akwatin Shagon POS',
        'chart-label' => 'An kammala oda (waɗannan umarni ba lallai ba ne a biya su!)',
        'tip-title' => 'Yakamata ka kara kokari...',
        'tip' => "Babu nasara mai sauƙi.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Cibiyar sarrafawa',
        'sub-title' => 'Nawa muka aiwatar a cikin kantin wannan makon?',
        'tip-title' => 'Ba ku da siyarwa!',
        'tip' => "Abin takaici ba ku da wani tallace-tallace a wannan makon. Kuna buƙatar samun ƙarin zuwa kantin sayar da ku. Kuna iya ƙara ƙarin samfura, zaɓi mafi kyawun hotuna ko rubuta mafi kyawun kwatance don samfuran ku. Yi la'akari da aikin cikakken lokaci don kasuwancin ku. Idan kun yi daidai kuma ba ku yi takaici ba, za ku yi nasara.",
        'view-process-center' => 'Duba cibiyar aiwatarwa',
        'return' => [
            'title' => 'Oda da aka dawo',
            'subtitle' => 'Rahoton da aka dawo da oda.',
            'tip-title' => 'Ko kun san cewa...',
            'tip' => "Kuna iya ƙirƙirar yawan rajistar tsabar kuɗi kamar yadda kuke buƙata tare da Selldone POS! Ko kwamfutar hannu, wayar hannu, ko kwamfutar tafi-da-gidanka, zaku iya juya kowace na'ura zuwa wurin siyar da kantin ku. Yana da sauƙi, mai sauri don saitawa, kuma an shirya cikakke don uwar garken ku. Fara amfani da shi a yau!\nSaukewa:",
            'view-pos' => 'Shiga cikin Kasuwar Kan layi Na'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Zama',
        'sub-title' => 'Sau nawa na ziyarci kantina?',
        'countries-title' => 'Wadanne kasashe ne aka fi ziyarta?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Kuna so ku sami kuɗi ba tare da kashe kuɗi ɗaya ba?',
        'message' => "Dear :name, za ku iya zuwa Dashboard> Demonetization kuma ƙirƙirar hanyar haɗi. Aika hanyar haɗi zuwa abokanka, Kuna karɓar katunan kyauta na Selldone da kashi ɗaya na biyan kuɗin abokin ku. Lura cewa za a aika da katin kyauta ga ku da abokin ku.",
        'action' => 'Duba mahaɗin gabatarwa na',
        'mail-clip' => "<b style='color: #C2185B'>Muhimmi:</b> Idan kuna amfani da sabis na imel kamar Gmail waɗanda ke iyakance tsawon imel ɗin, nemo zaɓi mai zuwa a ƙarshen imel ɗin don nuna cikakken rahoton kuma danna shi:",

        'no-coin-reward' => "<b style='color: #C2185B'>Yi haƙuri:</b> Ayyukanku bai cika buƙatun don samun ladan SEL Coins kyauta ba. Yi ƙoƙari sosai kuma ku sayar da ƙarin akan shagon ku don kakar wasa ta gaba.",
        'yes-coin-reward' => "<b style='color: #4CAF50'> Taya murna:</b> Babban aiki! Dangane da ƙwazon da kuka yi, mun ƙirƙira tsabar kudi na :amount SEL zuwa asusunku a matsayin lada.\nSaukewa:",

        'need-buy-license' => "<b>Level Haɓaka Kasuwancin ku:</b> Yana kama da ba ku yi rajistar kowane tsarin biyan kuɗi don gidan yanar gizon ku ba tukuna! Haɓaka yanzu don buɗe ƙarin fasali don kawai :amount kowane wata idan ana biya kowace shekara.\nSaukewa:",
        'not-afford-message' => "Idan kuna fuskantar wata matsala game da biyan kuɗi ko kuma ba za ku iya biya ba a yanzu, kada ku yi shakka a tuntuɓe mu a support@selldone.com.\nSaukewa:",
        'add-domain' => "<b>Me yasa ba ku da yankin al'ada don kasuwancin ku?</b><br> Ƙara yanki zuwa gidan yanar gizon ku yanzu; kyauta ne!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone shine a<del> samfur</del> <span style = 'color: forestgreen'>al'umma</span> .<br> Kasance ƙwararren Mai siyarwa!",
        'message' => "Bi shafukan hukuma na Selldone akan Twitter, LinkedIn da hanyoyin sadarwar zamantakewa. Aiko mana da duk wani sharhi, buƙatu ko zargi ko shiga cikin tattaunawa game da Selldone. Mu kuma wani bangare ne na al'ummar Selldone da <b>kuke yi</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'New Avocado Orders Received | :shop_title :time',
        'title' => "Rahoton aiki na awa 24 da suka gabata",
        'message' => "Abokan cinikin ku suna jiran a sake duba odar ku da farashi. Amsa ga buƙatun abokan cinikin ku da wuri-wuri don samun ƙarin tallace-tallace.",
        'card_title' => "Oda a cikin jerin gwano",
        'card_subtitle' => "Tun :date\nSaukewa:",

        'card_payed' => "oda da aka biya"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Amsa sakonku a cikin :community_title',
        'title' => ":name, da :count wasu sun yi sharhi akan posts ɗinku.",
        'message' => "Barka dai :name, sakonninku suna samun kulawa! Kun sami tsokaci a cikin al'ummarmu. Shiga cikin asusunku don shiga cikin tattaunawar kuma ku ga abin da kowa ke faɗi.\nSaukewa:",
        'title-simple' => ":name yayi sharhi akan post din ku!\nSaukewa:",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Amsa kan batun ku :topic_title
Saukewa:',
        'title' => ":name, and :count wasu amsa akan batun ku.",
        'message' => "Barka dai :name, batun ku yana samun kulawa! Kun sami amsoshi a cikin al'ummarmu. Shiga cikin asusunku don shiga cikin tattaunawar kuma ku ga abin da kowa ke faɗi.\nSaukewa:",
        'title-simple' => ":name ya amsa akan batun ku.\nSaukewa:",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Sabon Login :name',
        'category' => 'Sanarwa na tsaro',
        'title' => "Shiga Account",
        'message' => "Dear :name, an shiga cikin asusunka na Selldone.",   // Login in selldone (seller)
        'message-shop' => "Dear :name, an shigar da ku zuwa :shop_title.",  // Login in shop (buyer)

        'footer' => "Idan ba a shiga ba, da fatan za a canza kalmar sirrinku.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Janyewa",
        'deposit' => "Deposit",

        'withdraw_subject' => "Janye daga asusun :account\nSaukewa:",
        'deposit_subject' => "Deposit to account :account",

        'message' => "An yi musayar kuɗin tare da cikakkun bayanai masu zuwa.",

        'type' => "Nau'in ciniki",

        'from' => "Asusun tushen",
        'to' => "Destination account",

        'desc' => "Bayanin ciniki",
        'action' => "Duba ciniki",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Muhimmanci! keta dokoki| :shop",
        'category' => "Mahimman bayanai",
        'title' => "An hukunta shagon ku",
        'action' => "Buɗe dashboard ɗin kanti",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter ya gayyace ku don shiga Selldone\nSaukewa:",
        'title' => ":name ya aiko muku :amount don taimakawa ƙaddamar da sabon kantin sayar da kan layi da samun monetize shi!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Karɓi gayyata",
        'owner' => "Mai shi",
        'join-date' => "A kan Selldone tun",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Hanyar farfadowa| :shop",
        'category' => "Tsaro kantin",
        'title' => "Adana hanyar dawo da <b>:shop_name</b> .",
        'message' => "An aiko muku da wannan imel ɗin saboda kuna buƙatar dawo da kantin sayar da ku. Danna mahaɗin da ke ƙasa zai dawo da shagon ku da duk bayanan da ke cikinsa.",
        'action' => "Tabbatar da Maido da Shagon",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Nawa ne Selldone ya ajiye don kasuwancin ku?',
        'sub-title' => 'Daga kwanan wata :start zuwa :end
Saukewa:',
        'infrastructure' => [
            'title' => 'Kayan aiki',
            'subtitle' => 'Sabar, CDN, Adanawa, da sauran sabis na girgije',
        ],
        'experts' => [
            'title' => 'Masana & Ma\'aikata',
            'subtitle' => 'Masu haɓakawa, kulawa, da tallafi',
        ],
        'total_save' => 'Jimlar kuɗin da aka ajiye'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Ayyukanku',
        'sub-title' => 'Bayanin kasuwanci daga :start zuwa :end
Saukewa:',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Masu amfani da aka dawo',

        'shop_views' => 'Kayayyakin Kayayyakin kallo',
        'baskets' => [
            'title' => 'Kasuwancin Siyayya',
            'subtitle' => 'Bayar da rahoton adadin sabbin motocin sayayya',

        ],
        'products' => [
            'title' => 'Bayanin Samfura',
            'subtitle' => 'Matsayin samfurori a cikin shagon ta nau\'in',
            'value_name' => 'Kayayyaki'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Jimlar ra\'ayoyin shafin yanar gizon',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Kun karɓi sabon oda. Da fatan za a je shafin sarrafa oda a cikin kwamitin mai siyar ku.",
        'subject' => "🛍️ An Samu Sabon Umarni| :order_id",
        'your_revenue' => "Harajin Ku",
    ],
    'vendor-invite' => [
        'title' => 'Gayyatar mai siyarwa',
        'message' => "Kun karɓi gayyata don zama mai siyar da :shop_name. Kuna iya karba ko ƙin yarda da shi ta danna maballin masu zuwa.",
        'subject' => ":shop_name |Gayyatar zama mai siyar da mu",
        'accept' => "Karɓa & Zama Mai siyarwa",
        'reject' => "Ƙi",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Gayyatar Shiga Tawagarmu
Saukewa:',
        'message' => "An gayyace ku don shiga :vendor_name a :shop_name. Kuna iya karɓar ko ƙi wannan gayyatar ta amfani da maɓallan da ke ƙasa.\nSaukewa:",
        'subject' => "Gayyatar Haɗa :vendor_name|Kasance Memban Tawaga",
        'accept' => "Karɓa & Shiga Tawagar\nSaukewa:",
        'reject' => "Ƙi\nSaukewa:",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Lambar shiga ku don :shop\nSaukewa:",
        'header-message' => "Muna aika muku wannan imel ɗin saboda kun nemi lambar shiga shagon. Da fatan za a nemo kalmar wucewa ta lokaci ɗaya (OTP) a ƙasa:",
        'footer-message' => "Wannan lambar za ta yi aiki na mintuna 10. Idan baku nemi wannan lambar shiga ba, da fatan za a yi watsi da wannan imel."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Tabbatar da imel ɗin ku| :shop",
        'title' => 'Tabbatar da Imel',
        'header-message' => "Hi :name,<br> Da fatan za a tabbatar da cewa **:email** shine adireshin imel ɗin ku ta danna maballin ko amfani da hanyar haɗin da ke ƙasa cikin awanni 48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Sabunta samfur| :shop",
        'title' => "Sabuntawa akan Matsayin Samfur - Sa'o'i 24 na ƙarshe",
        'message' => "Ina fatan wannan sakon ya same ku lafiya. Wannan taƙaitaccen sabuntawa ne don sanar da ku game da matsayin samfuran ku akan dandalinmu a cikin sa'o'i 24 da suka gabata.\nA wannan lokacin, an sami canje-canje a matsayin wasu samfuran. Waɗannan canje-canjen na iya kasancewa saboda sayayya, sabunta haja, ko wasu abubuwan da suka shafi alaƙa.\nDon ƙarin cikakkun bayanai game da kowane samfur, da fatan za a shiga cikin asusun ku kuma duba sashin 'Yanayin Samfur'.\nSaukewa:",
        'action' => "Buɗe Panel mai siyarwa",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "An Karɓi Babban Umarni| :shop | :date",
        'title' => "Sanarwa na Babban Umarni\nSaukewa:",
        'message' => "Kun karɓi tsari na oda mai yawa. Da fatan za a ziyarci shafin sarrafa oda a cikin rukunin ku don ƙarin cikakkun bayanai. Hakanan zaka iya sauke jerin oda ta hanyar amintacciyar hanyar haɗin da aka bayar, mai aiki na tsawon kwanaki 7.<br><br>\n        <b>M MUHIMMAN:</b> Wannan hanyar sadarwa tana aiki har tsawon kwanaki 7.<br>\n        Wannan hanyar haɗin yanar gizon tana da ƙarfi, don haka duk lokacin da kuka danna shi, zaku karɓi mafi sabunta umarni don wannan takamaiman kwanan wata. <b> yana nufin idan yanayin biyan odar ya canza zuwa ƙi, ba za ku ƙara ganin wannan odar a cikin CSV da aka zazzage ba, ko kuma idan odar ya biya, zai bayyana a cikin jerin.\n        <ul>\n            <li> CSV ya ƙunshi umarni da aka biya tare da tanadin kwanan wata a cikin :date.</li>\n            <li>Kwanan da aka ajiye shine ranar da mai amfani ya danna wurin biya akan shafin oda.</li>\n        </ul>\n        <b>Don hana kwafin umarni, koyaushe duba odar ID kafin aikawa.</b>\n    \nSaukewa:",
        'action' => "Zazzage Jerin oda\nSaukewa:",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Wasu abubuwa a cikin odar ku ba a karɓa ba kuma ba za a iya isar da su ba. Za a mayar da kuɗin waɗannan abubuwan zuwa katin ku ba da jimawa ba.\nSaukewa:"
    ]

];
