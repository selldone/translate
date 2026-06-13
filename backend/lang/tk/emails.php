<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Bu habar dükana täze alyjyny garşylaýar.',
        ShopMailTemplateCodes::OrderCheckout => 'Bu bildiriş alyjy buýrugy tassyklanda iberilýär.',
        ShopMailTemplateCodes::OrderPayment => 'Bu bildiriş, müşderiniň üstünlikli tölegini tassyklaýar.',
        ShopMailTemplateCodes::OrderUpdate => 'Bu habar alyjynyň sargytlarynyň ýagdaýy barada täzelenmek üçin iberilýär.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Bu habar satyja tassyklanan sargyt barada habar bermek üçin iberilýär.',
        ShopMailTemplateCodes::PosCheckout => 'Bu bildiriş alyjy üçin satuw nokadyny tassyklamak üçin iberilýär.',
        ShopMailTemplateCodes::PosPayment => 'Bu bildiriş, alyjy tarapyndan satylan töleg nokadyny tassyklaýar.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Bu habar satyjylara satuw nokadynda edilen satyn alyş barada habar berýär.',
        ShopMailTemplateCodes::ShopContact => 'Bu bildiriş aragatnaşyk formasy tabşyrylanda iberilýär.',
        ShopMailTemplateCodes::ShopGiftCard => 'Bu bildiriş ulanyja sowgat kartyny alandyklaryny habar berýär.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Bu habar dükana täze satyjyny garşylaýar.',
        ShopMailTemplateCodes::ShopVendorInvite => "Bu habar satyjyny bazaryňyza goşulmaga çagyrmak üçin iberilýär.",
        ShopMailTemplateCodes::ShopVendorOrder => "Bu habar tölenen ýa-da nagt pul gowşuryş (COD) ýagdaýynda sargyt alnanda satyja iberilýär.",
        ShopMailTemplateCodes::ShopVendorProducts => "Satyjylary önümleriniň ýagdaýy barada täzelemek üçin her gün iberilýär.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Bu habar satyjyny bazaryňyza goşulmaga çagyrmak üçin iberilýär.",

        ShopMailTemplateCodes::UserLogin => "Howpsuzlyk maksady bilen giriş maglumatlary, şol sanda IP salgysy, senesi we enjamy bilen ulanyja habar beriň.",
        ShopMailTemplateCodes::LoginCode => "Ulanyjylaryň dükana girmegi üçin bir gezeklik parol kody iberiň.",

        ShopMailTemplateCodes::EmailVerifyLink => "Ulanyjynyň e-poçta salgysyny barlamak üçin baglanyşyk iberiň. Bu e-poçta, ulanyjy SMS tarapyndan hasaba alnanda we e-poçta gireninde iberilýär. Ulanyjy sosial giriş ýa-da e-poçta bilen gönüden-göni hasaba alnanda iberilmeýär.",

        ShopMailTemplateCodes::EmailBulkOrder => "Belli bir gün üçin köp mukdarda alnan we tölenen sargytlaryň sanawyny iberiň."


    ,

    ],


    'global' => [
        'greetings' => 'Salam, :name!',
        'end-statement' => 'Goldaw topary',

        'receiver_name' => 'Salam :user_name',
        'footer-help' => "Kömek gerekmi? [support@selldone.com] (mailto:support@selldone.com) -da soraň ýa-da [kömek merkezimize] (https://selldone.com/community) baryp görüň.",
        'selldone-team' => 'Selldone topary',
        'footer-shop' => "Haýsydyr bir meselede kömek gerek bolsa, bize e-poçta ibermekden çekinmäň: :shop_mail",
        'accept' => "Kabul et",
        'reject' => "Ret et",
        'verify' => "barlamak",
        'title' => "Ady",
        'value' => "Gymmatlyk",
        'description' => "Düşündiriş",
        'shop' => "Dükan",
        'shop-info' => "Dükan maglumatlary",
        'user' => "ulanyjy",
        'user-info' => "Hasap maglumatlary",
        'license' => "Ygtyýarnama",
        'status' => ".Agdaýy",
        'start' => "Başla",
        'end' => "Ahyrzaman",
        'renewal' => "Täzelenmek",
        'view' => "Gör",

        'balance' => "Balans",
        'card_number' => "Kart nomeri",
        'cvv' => "Cvv",
        'expire_date' => "Möhleti gutarýan senesi",

        'Dashboard' => "Dolandyryş paneli",
        'order' => "sargyt",
        'view_order' => "Tertibi görmek",
        'pay_now' => "Pay now",

        'official_selldone' => "Resmi satuw",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Walýuta",
        'free-balance' => "Mugt deňagramlylyk",
        'locked-balance' => "Gulplanan balans",
        'bot' => "Bot",
        'requests' => "Islegler",
        'baskets' => 'Araba',
        'physical' => "Fiziki",
        'virtual' => "Wirtual",
        'file' => "Faýl",
        'service' => "Hyzmat",
        'fulfillment' => "Erine ýetirmek",
        'open' => "Açyň",
        'reserved' => "Goragly",
        'canceled' => "Atyryldy",
        'payed' => "Tölegli",
        'cod' => "COD",
        'orders-count' => 'Sargytlar',
        'payments-count' => 'Tölegler',
        'confirms-count' => 'Tassyklaýar',
        'sends-count' => 'Iberýär',
        'delivers-count' => 'Eltýär',
        'count' => 'Hasapla',
        'transactions-count' => 'Geleşikler hasaplanýar',
        'success-transactions' => 'Üstünlik amallary',
        'total-amount' => 'Jemi mukdar',
        'amount' => 'Mukdary',
        'wage' => 'Aýlyk',
        'debug' => 'Düzediş',
        'pos' => 'POS',
        'live' => 'Göni',
        'CheckQueue' => 'Nobaty barlaň',
        'OrderConfirm' => 'Sargyt tassyklaň',
        'PreparingOrder' => 'Sargyt taýýarlamak',
        'SentOrder' => 'Iberilen sargyt',
        'ToCustomer' => 'Müşderä gowşuryldy',
        'Pending' => 'Garaşylýar',
        'Accepted' => 'Kabul edildi',
        'Rejected' => 'Ret edildi',
        'pc' => 'PC',
        'tablet' => 'Planşet',
        'phone' => 'Telefon',
        'total' => 'Jemi',
        'view-detail' => 'Jikme-jiklikleri görüň',
        'empty' => 'Boş',
        'dropshipping' => 'Taşlamak',
        'reply' => 'Jogap ber',
        'reactions' => 'Reaksiýalar',
        'Comments' => 'Teswirler',
        'last-comment' => 'Soňky teswir',
        'response-to' => 'Jogap',
        'posts' => 'Azgylar',
        'post' => 'Iber',

        'name' => 'Ady',
        'email' => 'E-poçta iberiň',
        'type' => 'görnüşi',
        'device' => 'Enjam',
        'platform' => 'Platforma',
        'browser' => 'Brauzer',
        'time' => 'Wagt',
        'Wallet' => 'Gapjyk',
        'date' => 'Sene',

        'account' => 'Hasap',
        'transaction' => 'Geleşik',
        'fee' => 'Töleg',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategoriýa',
        'password' => 'Parol',
        'verify-login' => "Barlaň we giriň",
        'url' => 'URL',
        'avocado' => 'Awakado',
        'hyper' => 'Hyper',
        'buy-now' => "Häzir satyn al",
        'add-domain' => "Add Domain",
        'views' => 'Görüşler',


        'country' => 'Countryurt',
        'address' => 'salgysy',
        'postal' => 'Poçta kody',
        'building_no' => 'Bina #',
        'building_unit' => 'Bölüm #',
        'message' => 'Habar',


        'customer' => 'Müşderi',
        'cart-items' => 'Sebet önümleri',
        'payment' => 'Töleg',
        'receiver' => 'Alyjy',
        'virtual-items' => 'Wirtual elementler',
        'no-payment' => 'Töleg ýok!',

        'enable' => 'Işletmek',
        'access' => 'Giriş',
        'bank' => 'Bank maglumatlary',

        'vendor' => 'Satyjy',

        'view_content' => "Doly mazmuny görüň",
        'files' => 'Faýllar',
        'download' => 'Göçürip al',
        'file_name' => 'Faýlyň ady',
        'file_size' => 'Ölçegi',

        'subscription' => 'Abuna ýazylmak',
        'products' => 'Önümler',
        'vendor_products' => 'Satyjy önümleri',

        'pickup' => 'Pikap',

        'minutes' => 'Minutlar',
        'hours' => 'Sagatlar',

        'refund' => 'Yzyna gaýtaryp bermek',
        'recipient_address' => 'Alyjynyň salgysy',
        'signature' => 'Gol',
        'blockchain' => 'Blokain',
        'details' => 'Jikme-jiklikler',


    

        'Shop' => 'Dükan',
        'dashboard' => 'dolandyryş paneli',
        'comments' => 'teswirler',
        'wallet' => 'gapjyk',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Öndürijilik hasabaty, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Möwsümleýin hasabat, Selldone'
        ],
        'Onboarding' => [
            'id' => 'salam',
            'name' => 'Tassykla, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => ':name goldaw'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Barla, Selldone'
        ],
        'Welcome' => [
            'id' => 'salam',
            'name' => 'Jemgyýet, Selldone'
        ],
        'NewShop' => [
            'id' => 'söwdagärler',
            'name' => 'Tassykla, Selldone'
        ],
        'Approve' => [
            'id' => 'tassyklamaly',
            'name' => 'Tassykla, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Sargytlary dolandyrmak :name'
        ],

        'Recovery' => [
            'id' => 'dikeldiş',
            'name' => 'Selldone dikeldiş topary'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Garaşylýan ⌛',
        'PAYED' => 'Tölegli ✅',
        'CANCELED' => 'Atyryldy ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Ofiser we gözegçi',
            'AUDITING' => 'Gözegçilik dolandyryjysy',
            'EMPLOYEE' => 'Işgär',
            'PRODUCT' => 'Önümleriň dolandyryjysy',
            'CONTENT' => 'Mazmun dolandyryjysy',
            'MARKETING' => 'Marketing dolandyryjysy',
            'VIEWER' => 'Tomaşaçy',

        ],
        'subject' => ":inviter sizi :level hökmünde çagyrdy| :shop",
        'category' => "Işgärleriň çakylygy",
        'title' => "<b>:shop_name</b> hökmünde <b>:level</b> hökmünde çagyryldy.",
        'message' => "You've received an invitation to collaborate with the <b>:shop_title</b> team in business. You have the option to accept or decline this offer. Should you choose to accept, please log in to the Selldone service to confirm your decision. Upon confirmation, you will gain access to the store management section.",

    ],

    'welcome-email' => [
        'subject' => "Q :name hoş geldiňiz, Selldone bilen başlalyň!",
        'category' => 'CONGRATULATION',
        'title' => "Selldone-a hoş geldiňiz",
        'message' => "Selldone saýlanyňyz üçin sag boluň! Indi global satyjylary müşderiler, ýerli kärhanalar kärhanalar we şahsyýetler bilen birleşýän janly jemgyýetiň bir bölegi. Masterhli Master we Pro gurallarymyz size ** mugt ** we ** çäksiz ** elýeterlidir. Biz sizi goldamak we üstünlikleriňize gapylary açmak üçin geldik.",

        'index' => ":step ädim.",

        'step-domain' => [
            'title' => 'Hususy domeniňizi goşuň',
            'message' => "Başlamak üçin, Sazlamalar> Domen sazlamalary astyndaky Dükanlar panelinde mugt domeniňizi mugt goşuň.",
            'action' => 'Domenlerimi dolandyryň',
        ],
        'step-landing' => [
            'title' => 'Baş sahypaňyzy düzüň',
            'message' => "Baş sahypa> Sahypalara girip baş sahypaňyzy şahsylaşdyryň. Giriş sahypasyny saýlaň ýa-da täzesini dörediň. Bu aňsat we içgin, derrew üstünde işläp bilersiňiz.",
            'action' => 'Oturyş sahypamy düzüň',
        ],
        'step-payment' => [
            'title' => 'Töleg usullaryny gurmak',
            'message' => "Tölegleri göni bank hasabyňyza kabul edip başlaň. Stripe, PayPal we başgalar ýaly töleg üpjün edijileriňizi birikdirmek üçin Dolandyryş paneli> Hasapçylyk> şlýuza giriň.",
            'action' => 'Töleg usullaryny goşuň',
        ],
        'step-products' => [
            'title' => 'Önümleriňizi goşuň',
            'message' => "Dolandyryş paneli> Önümlere önümleri we kategoriýalary aňsatlyk bilen goşuň. Edil kompýuteriňizdäki faýllary we bukjalary dolandyrmak ýaly - doly süýräp-taýyn. Şeýle hem Excel ulanyp, köp sanly import önümlerini alyp bilersiňiz. Başlamaga kömek etmek üçin nusga şablony bar.",
            'action' => 'Önümlerimi dolandyryň',
        ],
        'step-shipping' => [
            'title' => 'Ibermegiň usullary',
            'message' => "Müşderilere ýük daşamak üçin zarýad bermek üçin, Dolandyryş paneli> Logistik> ippingükleme usullaryny kesgitläň. Dürli ýerler üçin dürli bahalary we goldawy belläp bilersiňiz. Ammaryň gelip çykyşyny Dolandyryş paneli> Logistik> Ammarda goýmagy ýatdan çykarmaň.",
            'action' => 'Ippingükleme usullaryny dolandyryň',
        ],
    

        'seller' => [
            'title' => 'Satyjymy?',
            'message' => 'Satmaga başlamak üçin aşakdaky baglanyşyk arkaly Selldone-da dolandyryş paneli giriziň we ilkinji dükanyňyzy mugt dörediň. Bu birnäçe minut alar we öz dükanyňyz we onlaýn sahypaňyz bolar. Soňra indiki ädimlere ugrukdyrarys we töleg derwezesini alarys.',
            'action' => 'Dolandyryş paneline giriň',
        ],
        'buyer' => [
            'title' => 'Men alyjy',
            'message' => 'Gutlaýarys. “Selldone” -nyň agzasy bolanyňyzdan soň, onlaýn dükanlarda agzalyk we tassyklamakdaky ähli kynçylyklardan dynarsyňyz. Selldone platformasyny ulanýan islendik dükandan we sahypadan peýdalanmak üçin bir gezek basyp girip, satyn alşyňyzy ýönekeý, çalt we ygtybarly edip bilersiňiz.',
        ],
    ],


    'charge-account' => [
        'category' => 'Gapjyk> Hasap> zarýad',
        'title' => "Üstünlik tölegi",
        'message' => "Hasabyňyz <b>:account_number</b> hasabyna <b>:amount</b> üstünlikli zarýad berildi.",
        'account' => 'Hasap',
        'charge' => 'Zarýad',
        'balance' => 'Balans',
        'footer' => "Işewürligi aňsat, ýetip bolýan we dünýädäki islendik adam üçin elýeterli ediň."
    ],

    'verify-email' => [
        'subject' => "Sel Selldone-a ýazylmagyňyzy tamamlaň! Baglanyşygy barlaň.",
        'category' => "SIZ BIR BOLAN BOLANOK",
        'title' => "E-poçta salgyňyzy barlaň",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Barlamak düwmesine basmakda kynçylyk çekýän bolsaňyz, aşakdaky URL-ny web brauzeriňize göçüriň: :activation_url",
        'next-step' => "Indiki, adaty domeniňizi goşmak, tölegleri gurmak, önüm goşmak we ilkinji sargydyňyzy aňsatlaşdyrmak üçin size peýdaly materiallary we ädimme-ädim gollanma ibereris.",

    ],
    'verify-email-code' => [
        'subject' => ":name üçin tassyklama kody",
        'category' => "SECURITY",
        'title' => "E-poçta tassyklama kody",
        'message' => "Salam :name, <br><br> <b>:email</b> dogry e-poçta salgyňyzdygyny tassyklamak üçin indiki <b>10 minut</b>: aşakdaky kody giriziň:",
    ],
    'onboarding-verify-email' => [
        'subject' => "Shop Dükanyňyz taýýar| :name",
        'category' => "SIZ BIR BOLAN BOLANOK",
        'title' => "Gurmak tamamlandy",
        'account_title' => "Hasabyňyz",
        'account_msg' => "Bu maglumatlar bilen hasabyňyzy barlaň we giriň.",
        'shop_msg' => "Selldone biznes operasiýa ulgamy barada hasap maglumatlary.",

    ],

    'reset2fa' => [
        'category' => "HOWPSUZLYK RESMI HABAR",
        'title' => "2 basgançakly girişi öçürmegi haýyş ediň",
        'message' => "Bu e-poçta alýarsyňyz, sebäbi ** :name ** hasaby üçin ** :email ** e-poçta bilen iki faktorly tassyklamany täzeden düzmek haýyşyny aldyk. Hasabyňyz üçin aşakdaky maglumatlary tapdyk: Hasabyňyz üçin aşakdaky maglumatlary tapdyk:",
        'footer' => "Paroly täzeden dikeltmegi talap etmedik bolsaňyz, mundan başga çäre görülmeli däl.",
        'action' => 'Iki basgançakly girişi öçüriň',
    ],


    'build-new-shop' => [
        'subject' => "Shop Dükanyňyz indi taýýar!",
        'category' => "Dünýäde täze onlaýn dükan dünýä indi",
        'title' => "Gutlaýarys, :name!",
        'message' => "<b>Congratulations, :name! Your new online business is now live!</b> We are excited to welcome you to the Selldoners community. You've taken the first step toward success, and we are here to help you every step of the way.<br>Now that your store is ready, let’s make sure you're set to receive payments directly from your customers and start growing your empire. If you ever need help, we're just a message away—our support team is always here for you.<br><br><b>Important Next Steps:</b> To start, ensure you're all set up for receiving payments and smooth operations. We'll guide you through each stage to get your store running seamlessly.",
        'pdf-book' => "Goşulan el kitabyny sypdyrmaň: Işiňizi oýun ýaly ediň",

        'account' => [
            'title' => '1-nji ädim: Selldone gapjygynda hasap dörediň',
            'message' => "Başlamak üçin, Selldone gapjygyňyzda hasap dörediň. Ynha, tölegleriňiz aýrylar we dükanyňyzyň kadaly işlemegi üçin goşmaça töleg tölärsiňiz. Balansyňyz hiç wagt negatiw bolsa, alada etme! Dükanyňyz päsgelçiliksiz işlemegini dowam etdirer.",
            'action' => 'Gapjyga giriň',
        ],

        'shop-account' => [
            'title' => '2-nji ädim: hasaby dükana birikdiriň',
            'message' => "Ondan soň, gapjyk hasabyňyzy dükanyňyza birikdiriň. <b>Store> Hasapçylyk> Hasap-faktura</b>-a gidiň we gapjygyňyzy baglanyşdyryň. Bu, ähli müşderi tölegleriniň göni bank hasabyňyza goýulmagyny üpjün edýär - Selldone girdejiňizden hiç hili pul aýyrmaýar.",
            'action' => 'Hasap-faktura paneli',
        ],

        'gateway' => [
            'title' => '3-nji ädim: Onlaýn töleg şlýuzasyny birikdiriň',
            'message' => "Indi, onlaýn töleg derwezäňizi guralyň. <b>Store> Hasapçylyk> Port</b>-a gidiň we <b>Add New Port</b> basyň. Puluňyzy saýlaň we elýeterli töleg şlýuzalarynyň sanawyny görersiňiz. Derwezäni birikdirmek çalt we aňsat, ýöne size kömek gerek bolsa, Selldone gollanmalaryny barlap görüň ýa-da bize ýüz tutuň.",
            'action' => 'Dükana portal goşuň',
        ],

        'domain' => [
            'title' => 'Iň soňky ädim: bagyşlanan domeni birikdirmek',
            'message' => "Indi, öz domeniňizi dükanyňyz bilen baglanyşdyryň. Bu, müşderilere önümleriňizi ýa-da hyzmatlaryňyzy satyn almaga we göni töleg tölemäge mümkinçilik berýär.",
            'action' => 'Çäklendirilmedik sowgat kartlary bilen tanyşdyrmak we almak',
        ],
    ],


    'basket-list' => [
        'item' => "element",
        'count' => "Hasapla",
        'price' => "bahasy",
        'discount-code' => "Arzanladyş kody",
        'customer-club' => 'Müşderi kluby',
        'shipping' => "Eltip bermek",
        'total' => "Jemi",
        'offer' => "Teklip",
        'coupon' => "Talon",
        'lottery' => "Baýrak",
        'tax' => "Salgyt",
        'tax_included' => "Bahasyna goşulýar",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Usul',
        'amount' => 'Mukdary',
        'giftcard' => 'Gift card',
        'payment' => 'Töleg',
    ],


    'shop-subscription-email' => [
        'category' => "Abuna täzelenmesi",
        'title' => "Dükan ygtyýarnamasy: :shop_title",
        'title-reserved' => "Ervetiýaçlyk ygtyýarnamasy: :shop_title",
        'title-active' => "Işjeň ygtyýarnama: :shop_title",
        'title-finished' => "Tamamlanan ygtyýarnama: :shop_title",
        'title-cancel' => "Ygtyýarnamany ýatyryň: :shop_title",
        'message' => "Dükanyňyzyň ygtyýarnama meýilnamasy täzelendi,",
        'RESERVED' => "⚡ Abunalyk meýilnamaňyz ** ätiýaçlandyryldy **.",
        'ACTIVE' => "Abuna ýazylmak meýilnamaňyz ** işjeňleşdirildi **.",
        'FINISHED' => "Abuna ýazylmak meýilnamaňyz ** gutardy **.",
        'CANCEL' => "Subs Abunalyk meýilnamaňyz ** ýatyryldy **.",
    ],

    'support' => [
        'subject' => "Goldaw merkezi|:name jogap berdi",
        'category' => "Goldaw merkezi",
        'title' => "Siz jogap aldyňyz",
        'action' => "Dükan administratoryny açyň",
    ],

    'shop-customer-join' => [
        'subject' => ":shop_title goşulyň",
        'category' => "Täze müşderi baýramçylygy",
        'title' => "Siziň agzalygyňyz üçin begenýäris",
        'action' => "Häzir baryp görüň",
    ],

    'shop-vendor-join' => [
        'subject' => "Satyjy münmek| :shop_title",
        'category' => "Täze satyjy baýramçylygy",
        'title' => "Siziň agzalygyňyz üçin begenýäris",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Sowgat karty :shop_title",
        'category' => "Täze kartoçka goşuň",
        'title' => "Gutlaýarys, sowgat kartyny aldyňyz",
        'action' => "Häzir dükan",
        'message' => ":balance :currency bahasy bolan sowgat kartyny aldyňyz. Bu sowgat kartyny dükanymyzda ulanyp bilersiňiz.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Goldaw merkezi| :shop",
        'category' => "goldaw",
        'title' => "Siz jogap aldyňyz",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Sargyt tassyklamasy|:order_id zakaz ediň",
        'title' => "sargyt",
        'message' => "Dükanymyzda sargyt goýduň. Sargydyňyzy aldyk we töleg tassyklanandan soň size başga bir e-poçta ibereris."
    ,

        'payments' => 'Tölegler',
    ],

    'order-payment' => [
        'subject' => "Ment Töleg tassyklamasy|:order_id zakaz ediň",
        'title' => "Töleg tertibi",
        'message' => "Tölegiňiz tamamlandy,<br> Sargydyňyzy aldyk Sargyt iberilende size başga bir e-poçta ibereris.",
    

        'payments' => 'Tölegler',
    ],

    'order-update' => [
        'subject' => "Stat Sargyt täzelenmesi|:order_id zakaz ediň",
        'title' => "Sargyt ýagdaýyny täzelemek",
        'message' => "Sargydyňyz täzelendi Bu buýrugyň iň soňky ýagdaýyny hasabyňyzda barlap bilersiňiz.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Sargytyňyz gaýtadan işlemek üçin nobatda. Taýýarlanylanda size habar bereris.",
                'OrderConfirm' => "Sargydyňyz tassyklandy we taýýarlyk başlandy.",
                'PreparingOrder' => "Sargydyňyz taýýarlanýar we ýakyn wagtda iberiler.",
                'SentOrder' => "Sargydyňyz iberildi Siz gysga wagtda alarsyňyz.",
                'ToCustomer' => "Sargydyňyz gowşuryldy Göwnüňizden turar diýip umyt edýäris!",

                'PreparingOrder-PICKUP' => "Sargydyňyz taýýarlanýar Upygnamaga taýyn bolanda habar alarsyňyz.",
                'SentOrder-PICKUP' => "Sargydyňyz almaga taýyn. Dükana ýygnamak üçin gelmegiňizi haýyş edýäris.",
                'ToCustomer-PICKUP' => "Sargydyňyz alyndy Göwnüňizden turar diýip umyt edýäris!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Sargytyňyz gaýtadan işlemek üçin nobatda. Taýýar bolanda size habar bereris.",
                'OrderConfirm' => "Sargydyňyz tassyklandy we taýýarlyk işleri dowam edýär.",
                'PreparingOrder' => "Sargydyňyz taýýarlanýar we ýakyn wagtda size iberiler.",
                'ToCustomer' => "Wirtual sargydyňyz hasabyňyza gowşuryldy. Sag boluň!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Hyzmat islegiňiz nobatda. Başlanymyzda size habar bereris.",
                'OrderConfirm' => "Hyzmatyňyz tassyklandy we başlamaga taýýarlyk görýäris.",
                'PreparingOrder' => "Hyzmatyňyzy taýýarlaýarys we gutarandan soň size habar bereris.",
                'ToCustomer' => "Siziň hyzmatyňyz gutardy Bizi saýlanyňyz üçin sag boluň!"
            ],
            'FILE' => [
                'PreparingOrder' => "Faýlyňyz taýýarlanýar we ýakyn wagtda elýeterli bolar.",
                'ToCustomer' => "Faýlyňyz taýýar we gowşuryldy Indi göçürip alyp bilersiňiz."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Abuna ýazylyşyňyz nobatda. Gaýtadan işlemek başlanda size habar bereris.",
                'OrderConfirm' => "Abunalygyňyz tassyklandy we gurulýar.",
                'PreparingOrder' => "Abunalygyňyzy taýýarlaýarys we ýakyn wagtda başlar.",
                'SentOrder' => "Abunalygyňyz işjeňleşdirildi. Dowam edýän täzelenmeleri alarsyňyz.",
                'ToCustomer' => "Abunalyk hyzmatyňyz üstünlikli işjeňleşdirildi."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => ':name gutlaýarys|Täze talon: :title',
        'category' => "GATNAŞYK, T NEWZE SÖ .GI",
        'message' => "Heý :name, <br><br>Siz bize sowgat hökmünde täze talon aldyňyz! Dostlaryňyza we tanaýanlaryňyza Selldone hödürläp, has köp talon gazanyp bilersiňiz. Bu talonyň bahasy ** :price :currency **. <br><br> Siz ilkinji ädim ätdiňiz we talonyňyz bilen täze aýratynlyklary açmaga kömek etmek üçin geldik! ** :email ** bilen giriň we dükanda talonyňyzy tapyň ** Dolandyryş paneli **> ** Sazlamalar **> ** Ygtyýarnama **. <br>Q<br>Congratulations!",
        'action' => "Dolandyryş paneli",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Gutlaýarys, Hormatly :name|Specialörite sowgat aldyňyz!',
        'category' => "Sowgat alandygy barada bildiriş",
        'title' => "Size sowgatlar",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Sowgatlar",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Täze sargyt alyndy| :order_id",
        'title' => "New Order",
        'message' => "Täze sargyt aldyňyz Dükanyňyzdaky sargytlary gaýtadan işlemek sahypasyna girmegiňizi haýyş edýäris.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Doldurylan maglumatlaryňyz',
        'output-form-title' => 'Satyn alnan element maglumatlary',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => ':shop_title|Hepdelik hasabat :time',
        'title' => 'Hepdelik dükanyň öndürijilik hasabaty',
        'message' => "Bu, dükanyňyzyň <b>:start</b>-den <b>:end</b>-a çenli hepdelik hasabaty. Bu hasabat işiňizi gowulandyrmak üçin maslahatlary öz içine alýar, onlaýn dükanyňyzyň ýagdaýyny we soňky sargytlary hem barlap bilersiňiz. Öňüňizde gün we hepde gowy geçer diýip umyt edýärin."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => 'Q Soňky üç aýda :amount tygşytlaýyş hasabatyňyz| :shop_title',
        'title' => 'Işewürligiňiz, sylaglaryňyz we maliýe tygşytlamalaryňyz barada möwsümleýin hasabat',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Birikdirilen hasaplar',
        'sub-title' => 'Dükanyma birikdirilen gapjyk hasaplarynyň iň soňky ýagdaýy nähili?',
        'view-wallet' => 'Gapjyk gör',
        'tip-title' => 'Möhüm maslahatlar',
        'tip' => "Mugt Selldone gapjygyny guruň we dükanyňyza baglaň. Balansyňyz negatiw bolsa-da, müşderileriňiz hiç hili kynçylyksyz söwda edip we töläp bilerler. Alada etme, dükanyňyzyň işi we maglumatlary 1 aýa çenli hiç hili päsgelçiliksiz dowam eder.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Hasaba birikdiriň'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Programmalar guruldy',
        'sub-title' => 'Bu hepde dükanyňyzda gurnan programmalaryň sanawy.',
        'tip' => "Dükanyňyz üçin has köp programma tapmak isleýärsiňizmi?",
        'view-app-store' => 'Selldone programma dükanyna baryp görüň ..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Dükanyňyzdaky botlar',
        'sub-title' => 'Dükanymda işjeň satuw botlary.',
        'tip-title' => 'Bot satuwy',
        'tip' => "Selldone size awtomatiki satuw botlary bilen üpjün etdi. Bar etmeli zadyňyz, Goşmaçalar> Botlar paneline girip, dükan botlaryňyzy işjeňleşdirmek. Degişli hyzmatyň ýurduňyzda elýeterli bolmalydygyny unutmaň.",
        'view-bots' => 'Botlary dolandyryň',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Müşderiler bilen aragatnaşyk',
        'sub-title' => 'Bu hepde müşderilerim bilen näçe aragatnaşykda boldum?',
        'faqs' => 'Freygy-ýygydan berilýän soraglar',
        'tickets' => 'Müşderi biletleri',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Ulanyjylaryň ýagdaýy',
        'sub-title' => ':start-den :end çenli işjeňlik',
        'users' => [
            'title' => 'Müşderiler',
            'subtitle' => 'Ulanyjylar',
        ],
        'views' => [
            'title' => 'Saparlar',
            'subtitle' => 'Dükana näçe gezek baryp gördüňiz',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Yzyna gaýdyp gelen ulanyjylar',

        'shop_views' => 'Dükan görnüşleri',
        'baskets' => [
            'title' => 'Söwda arabalary',
            'subtitle' => 'Täze söwda arabalarynyň sanyny habar beriň',
        ],
        'products' => [
            'title' => 'Önümlere syn',
            'subtitle' => 'Dükandaky önümleriň görnüşi',
            'value_name' => 'Önümler'
        ],
        'products_count' => 'Haryt görnüşleri',
        'views_count' => 'Sanamagy gör',
        'sell_count' => 'Satuw sany',
        'send_count' => 'Iberiş sany',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Ippingük daşamak',
        'sub-title' => '“Drop Shipping Selldone” -nyň esasy satyjylary üçin panel.',
        'total_fulfillments' => 'Jemi sargytlar',
        'ds_count' => 'Sargytlar',
        'statistics_title' => 'Hasabat alnan sargytlar',
        'ds_cancels' => 'Interfeýs satyjysy tarapyndan ýatyryň',
        'ds_rejects' => 'Siz tarapyndan ýatyryň',
        'tip' => "Harytlaryň esasy satyjysymy? Ammar, zawod ýa-da önüm paýlaýjy barmy? Önümiňizi uly göwrümde satmak üçin önümleriňizi “Selldone Drop Shipping” hyzmatyndaky beýleki satyjylara hödürläp bilersiňiz. Size ýol görkezmek üçin bize support@selldone.com e-poçta iberiň.",
        'view-drop-shipping-panel' => 'Lomaý panele giriň',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Walýuta kurslary',
        'sub-title' => 'Dükanyňyzdaky iň soňky walýuta öwrüliş nyrhlarynyň sanawy.',
        'from' => 'Çeşme walýutasy',
        'to' => 'Niýetlenen walýuta',
        'rate' => 'Öwrüliş tizligi',
        'view-exchange-panel' => 'Walýuta kurslaryny dolandyryň',
    

        'vew-exchange-panel' => 'walýuta hümmetini dolandyrmak paneli',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ekspert şertnamalary',
        'sub-title' => 'Dükanymda haýsy hünärmenler işleýär?',
        'cost' => 'Şertnamanyň mukdary',
        'duration' => 'Dowamlylygy',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Sene ýatyr',
        'end_at' => 'Eltip beriş senesi',
        'tip' => 'Işiňizi ösdürmek üçin Selldone-da iň oňat hünärmenleri hakyna tutup bilersiňiz.',
        'view-experts' => 'Başlamak üçin basyň.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Dükanyňyzdaky işjeň töleg şlýuzlary :shop',
        'tip-title' => 'Möhüm maslahatlar',
        'tip' => "Dükanyňyzdaky portal dolandyryş sahypasyna giriň we birnäçe minutda azyndan bir port goşuň. Müşderileriňiz onlaýn portallaryň üsti bilen çalt we ygtybarly tölemegi halaýarlar.",
        'view-shop-gateways' => 'Dükanymyň portal dolandyryşyna giriň.',
        'view-gateways' => 'Has köp şlýuzalary görüň',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Sargytlar',
        'sub-title' => 'Bu hepde alan sargytlarymyň sanawy.',
        'total_baskets' => 'Jemi sargytlar',
        'total_posBaskets' => 'Jemi pul sargytlary',
        'pos-title' => 'POS dükan gutusy',
        'chart-label' => 'Sargytlar tamamlandy (bu sargytlar hökman tölenmeýär!)',
        'tip-title' => 'Has köp synanyşmaly ...',
        'tip' => "Simpleönekeý üstünlik ýok.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Gaýtadan işlemek merkezi',
        'sub-title' => 'Bu hepde dükanda näçe sargyt etdik?',
        'tip-title' => 'Satyşyňyz ýokdy!',
        'tip' => "Gynansagam, bu hepde satuwyňyz bolmady. Dükanyňyza has köp zat almaly. Has köp önüm goşup, has gowy suratlary saýlap ýa-da önümleriňiz üçin has gowy düşündiriş ýazyp bilersiňiz. Işiňiz üçin doly iş gününe serediň. Dogry etseňiz we göwnüňize degmeseňiz, üstünlik gazanarsyňyz.",
        'view-process-center' => 'Amal merkezini görüň',
        'return' => [
            'title' => 'Yzyna gaýtaryldy',
            'subtitle' => 'Yza gaýtarylan sargytlary hasabat beriň.',
            'tip-title' => 'Muny bilýärdiňmi ...',
            'tip' => "Selldone POS bilen näçe köp kassa registrini döredip bilersiňiz! Planşetiňiz, ykjam ýa-da noutbukyňyz bolsun, islendik enjamy dükanyňyzyň satuw nokadyna öwrüp bilersiňiz. Simpleönekeý, çalt gurulýar we serweriňiz üçin doly taýýar. Şu gün ulanyp başlaň!",
            'view-pos' => 'Onlaýn dükany kassirime giriň'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessiýalar',
        'sub-title' => 'Dükanyma näçe gezek baryp gördüm?',
        'countries-title' => 'Haýsy ýurtlara iň köp syýahat edildi?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Bir bedre sarp etmän pul gazanmak isleýärsiňizmi?',
        'message' => "Salam :name, Selldone bilen gazanç etmegiň wagty geldi! Dolandyryş paneli> Has giňişleýin> Monetizasiýa> ferollama baglanyşygyňyzy alyň. Baglanyşygy dostlaryňyz bilen paýlaşyň we sowgat kartlaryny we tölegleriniň paýyny alyň. Iň gowy bölegi? Siz we dostuňyz sowgat kartyny alyň!",
        'action' => 'Giriş baglanyşygymy görüň',
        'mail-clip' => "<b style='color: #C2185B'>Üns beriň:</b> E-poçta uzynlygyny çäklendirýän Gmail ýaly e-poçta hyzmatlaryny ulanýan bolsaňyz, hasabaty doly görkezmek üçin e-poçtaň ahyrynda aşakdaky opsiýany tapyň we basyň:",

        'no-coin-reward' => "<b style='color: #C2185B'>Bagyşlaň:</b> Siziň işiňiz mugt SEL teňňe baýragyny almak talaplaryna laýyk gelmedi. Has köp synanyşyň we indiki möwsüm dükanyňyzda has köp satyň.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Tagşylyklar: </b> Gowy iş! Ajaýyp öndürijiligiňize esaslanyp, sylag hökmünde hasabyňyza :amount SEL teňňelerini berdik.",

        'need-buy-license' => "<b>L Işiňizi ýokarlandyryň: </b> Web sahypaňyza abuna ýazylmak meýilnamasyny entek hasaba almadyk ýaly! Her ýyl tölenýän bolsa, aýda diňe :amount üçin has köp aýratynlygy açmak üçin täzeläň.",
        'not-afford-message' => "Töleg bilen üpjün edip bilmeýän bolsaňyz ýa-da kynçylyk çekip bilmeseňiz, support@selldone.com arkaly bize habar beriň.",
        'add-domain' => "<b>Näme üçin işiňiz üçin ýörite domen ýok?</b><br> Indi web sahypaňyza domen goşuň; bu mugt!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone a<del> önüm</del> <span style = 'color: forestgreen'>jemgyýeti</span> .<br> Hünärmen Selldoner boluň!",
        'message' => "Selldone-nyň resmi sahypalaryny Twitter, LinkedIn we sosial ulgamlarda yzarlaň. Bize islendik teswir, haýyş ýa-da tankyt iberiň ýa-da Selldone hakda çekişmelere gatnaşyň. Şeýle hem, <b>Selldone</b> jemgyýetiniň bir bölegi."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Täze Awakado sargytlary alyndy|:shop_title :time',
        'title' => "Soňky 24 sagadyň dowamynda öndürijilik hasabaty",
        'message' => "Müşderileriňiz sargytlaryňyzyň gözden geçirilmegine we bahasyna garaşýarlar. Has köp satuw almak üçin müşderileriň isleglerine gysga wagtda jogap beriň.",
        'card_title' => "Nobatda sargytlar",
        'card_subtitle' => ":date bäri",

        'card_payed' => "Tölegli sargytlar"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => ':community_title-da ýazgyňyza täze jogaplar',
        'title' => ":name we :count beýlekiler ýazgylaryňyzdaky söhbetdeşlige goşuldy!",
        'message' => "Salam :name, ýazgylaryňyz ünsi çekýär! Jemgyýetimizde teswir aldyňyz. Ara alyp maslahatlaşmak we her kimiň näme diýýänini görmek üçin hasabyňyza giriň.",
        'title-simple' => ":name ýazgyňyza teswir berdi!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => 'Your Mowzugyňyza :topic_title jogap beriň',
        'title' => ":name we :count beýlekiler mowzugyňyza jogap berdiler.",
        'message' => "Salam :name, mowzugyňyz ünsi özüne çekýär! Jemgyýetimizde jogap aldyňyz. Ara alyp maslahatlaşmak we her kimiň näme diýýänini görmek üçin hasabyňyza giriň.",
        'title-simple' => ":name mowzugyňyza jogap berdi.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Täze giriş :name',
        'category' => 'Howpsuzlyk habarnamalary',
        'title' => "Hasaba giriň",
        'message' => "Gadyrly :name, Selldone hasabyňyza giriş tapyldy.",   // Login in selldone (seller)
        'message-shop' => "Gadyrly :name, :shop_title-a giriş tapyldy.",  // Login in shop (buyer)

        'footer' => "Hasabyňyza girmedik bolsaňyz, parolyňyzy üýtgediň.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Yza çekmek",
        'deposit' => "Goýum",

        'withdraw_subject' => ":account hasabyndan çykaryň",
        'deposit_subject' => ":account hasabyna goýuň",

        'message' => "Pul geçirmek aşakdaky aýratynlyklar bilen geçirildi.",

        'type' => "Geleşik görnüşi",

        'from' => "Çeşme hasaby",
        'to' => "Destination account",

        'desc' => "Geleşigiň beýany",
        'action' => "Geleşigi gör",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Möhüm! Düzgünleriň bozulmagy| :shop",
        'category' => "Tankytly maglumat",
        'title' => "Dükanyňyz jezalandyryldy",
        'action' => "Dükan paneli açyň",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter sizi Selldone-a goşulmaga çagyrdy",
        'title' => ":name täze onlaýn dükanyňyzy açmak we pul gazanmak üçin size :amount iberdi!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Çakylygy kabul ediň",
        'owner' => "Eýesi",
        'join-date' => "Şondan bäri Selldone",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Dikeldiş baglanyşygy| :shop",
        'category' => "Dükanyň howpsuzlygy",
        'title' => "<b>:shop_name</b> dikeldiş baglanyşygy.",
        'message' => "Dükanyňyzy dikeltmegi haýyş edeniňiz üçin bu e-poçta size iberildi. Aşakdaky baglanyşyga bassaňyz, dükanyňyz we oňa degişli ähli maglumatlar dikeldiler.",
        'action' => "Dükanyň dikeldilmegini tassyklaň",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone işiňiz üçin näçe pul tygşytlady?',
        'sub-title' => ':start senesinden :end çenli',
        'infrastructure' => [
            'title' => 'Infrastruktura',
            'subtitle' => 'Serwerler, CDN, Saklama we beýleki bulut hyzmatlary',
        ],
        'experts' => [
            'title' => 'Hünärmenler we işgärler',
            'subtitle' => 'Işläp düzüjiler, hyzmat we goldaw',
        ],
        'total_save' => 'Jemi tygşytlanan pul'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Siziň çykyşyňyz',
        'sub-title' => ':start-den :end-a çenli iş syn',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Yzyna gaýdyp gelen ulanyjylar',

        'shop_views' => 'Dükan görnüşleri',
        'baskets' => [
            'title' => 'Söwda arabalary',
            'subtitle' => 'Täze söwda arabalarynyň sanyny habar beriň',

        ],
        'products' => [
            'title' => 'Önümlere syn',
            'subtitle' => 'Dükandaky önümleriň görnüşi',
            'value_name' => 'Önümler'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Jemi web sahypasynyň görnüşleri',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Täze sargyt aldyňyz Satyjy paneliňizdäki sargytlary gaýtadan işlemek sahypasyna girmegiňizi haýyş edýäris.",
        'subject' => "🛍️ Täze sargyt alyndy| :order_id",
        'your_revenue' => "Girdejiňiz",
    ],
    'vendor-invite' => [
        'title' => 'Satyjy çakylygy',
        'message' => ":shop_name satyjysy bolmak üçin çakylyk aldyňyz. Aşakdaky düwmeleri ulanyp kabul edip ýa-da ret edip bilersiňiz.",
        'subject' => ":shop_name |Satyjymyz bolmaga çakylyk",
        'accept' => "Satyjy boluň we kabul ediň",
        'reject' => "Ret et",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Toparymyza goşulmaga çakylyk',
        'message' => ":shop_name-de :vendor_name-a goşulmaga çagyryldyňyz. Aşakdaky düwmeleri ulanyp, bu çakylygy kabul edip ýa-da ret edip bilersiňiz.",
        'subject' => ":vendor_name-a goşulmaga çakylyk|Toparyň agzasy boluň",
        'accept' => "Topara kabul ediň we goşulyň",
        'reject' => "Ret et",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => ":shop üçin giriş koduňyz",
        'header-message' => "Dükana giriş koduny talap edeniňiz üçin size bu e-poçta iberýäris. Aşakda bir gezeklik parolyňyzy (OTP) tapmagyňyzy haýyş edýäris:",
        'footer-message' => "Bu kod 10 minut dowam eder. Bu giriş koduny soramadyk bolsaňyz, bu e-poçta üns bermäň."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "E-poçtaňyzy barlaň| :shop",
        'title' => 'E-poçta tassyklamasy',
        'header-message' => "Salam :name, <br>Please, aşakdaky düwmä basmak ýa-da 48 sagadyň dowamynda aşakdaky baglanyşygy ulanmak arkaly ** :email ** e-poçta salgyňyzdygyny tassyklaň.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Önüm täzelenmeleri| :shop",
        'title' => "Önümiň ýagdaýy barada täzelenme - Soňky 24 sagat",
        'message' => "Bu habar sizi gowy tapar diýip umyt edýärin. Bu, soňky 24 sagadyň dowamynda platformamyzdaky önümleriňiziň ýagdaýy barada size maglumat bermek üçin gysga täzelenme.\nBu döwürde käbir önümleriň ýagdaýynda üýtgeşmeler boldy. Bu üýtgeşmeler satyn alyşlar, aksiýa täzelenmeleri ýa-da beýleki baglanyşykly wakalar sebäpli bolup biler.\nHer önüm barada has giňişleýin maglumat üçin hasabyňyza giriň we 'Haryt ýagdaýy' bölümini barlaň.",
        'action' => "Satyjy paneli açyň",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Köp sargytlar| :shop | :date",
        'title' => "Köp sargyt habarnamasy",
        'message' => "Köp sanly sargyt aldyňyz. Has giňişleýin maglumat üçin paneliňizdäki sargytlary gaýtadan işlemek sahypasyna girmegiňizi haýyş edýäris. Şeýle hem sargyt sanawyny 7 günüň dowamynda ulanylýan ygtybarly baglanyşyk arkaly göçürip alyp bilersiňiz. <br><br>\n        <b>IMPORTANT: </b> Bu baglanyşyk 7 gün işleýär. <br>\n        Bu baglanyşyk dinamiki, şonuň üçin her gezek basanyňyzda bu anyk senä iň täzelenen sargytlary alarsyňyz. <b>I diýmek, sargyt töleginiň ýagdaýy ret edilse, göçürilen CSV-de indi buýrugy görmersiňiz ýa-da sargyt tölenen bolsa sanawda peýda bolar. </b><br><br>\n        <ul>\n            <li> CSV-de :date.</li> ätiýaçlyk senesi bilen tölegli sargytlar bar\n            <li>Raýlanan senesi, ulanyjynyň sargyt sahypasyndaky tölegiň basylan senesi. </li>\n        </ul>\n        <b> Gaýtalanýan sargytlaryň öňüni almak üçin, elmydama ID sargyt iberiň. </b>",
        'action' => "Sargyt sanawyny göçürip alyň",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Sargydyňyzdaky käbir zatlar kabul edilmedi we eltip bolmaýar. Bu zatlaryň mukdary gysga wagtda kartaňyza gaýtarylar."
    ]

];
