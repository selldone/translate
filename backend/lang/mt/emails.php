<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Dan il-messaġġ jilqa\' xerrej ġdid fil-ħanut.',
        ShopMailTemplateCodes::OrderCheckout => 'Din in-notifika tintbagħat meta xerrej jikkonferma ordni.',
        ShopMailTemplateCodes::OrderPayment => 'Din in-notifika tikkonferma l-ħlas b\'suċċess magħmul minn klijent.',
        ShopMailTemplateCodes::OrderUpdate => 'Dan il-messaġġ jintbagħat biex taġġorna xerrej dwar l-istatus tal-ordni tiegħu.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Dan il-messaġġ jintbagħat lil bejjiegħ biex jinnotifikah b\'ordni kkonfermata.',
        ShopMailTemplateCodes::PosCheckout => 'Din in-notifika tintbagħat biex tikkonferma ordni ta\' punt ta\' bejgħ għal xerrej.',
        ShopMailTemplateCodes::PosPayment => 'Din in-notifika tikkonferma ħlas tal-punt tal-bejgħ magħmul minn xerrej.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Dan il-messaġġ jinnotifika lill-bejjiegħ dwar xirja magħmula fil-punt tal-bejgħ tagħhom.',
        ShopMailTemplateCodes::ShopContact => 'Din in-notifika tintbagħat meta tkun ġiet sottomessa formola ta\' kuntatt.',
        ShopMailTemplateCodes::ShopGiftCard => 'Din in-notifika tinforma lil utent li rċieva karta rigal.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Dan il-messaġġ jilqa\' bejjiegħ ġdid fil-ħanut.',
        ShopMailTemplateCodes::ShopVendorInvite => "Dan il-messaġġ jintbagħat biex jistieden bejjiegħ biex jissieħeb fis-suq tiegħek.",
        ShopMailTemplateCodes::ShopVendorOrder => "Dan il-messaġġ jintbagħat lill-bejjiegħ meta ordni tiġi riċevuta jew fi stat ta' Mħallsa jew ta' Flus mal-Konsenja (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Mibgħuta kuljum biex taġġorna lill-bejjiegħa dwar l-istatus tal-prodotti tagħhom.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Dan il-messaġġ jintbagħat biex jistieden bejjiegħ biex jissieħeb fis-suq tiegħek.",

        ShopMailTemplateCodes::UserLogin => "Avża lill-utent bid-dettalji tal-login, inkluż l-indirizz IP, id-data u l-apparat, għal skopijiet ta’ sigurtà.",
        ShopMailTemplateCodes::LoginCode => "Ibgħat kodiċi ta' password ta' darba għall-utenti biex jidħlu fil-maħżen.",

        ShopMailTemplateCodes::EmailVerifyLink => "Ibgħat link biex tivverifika l-indirizz elettroniku tal-utent. Din l-email tintbagħat meta utent jirreġistra minn SMS u jdaħħal l-email tiegħu. Ma jintbagħatx meta utent jirreġistra direttament b'login soċjali jew email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Ibgħat lista ta' ordnijiet riċevuti u mħallsa bl-ingrossa għal ġurnata speċifika."


    ,

    ],


    'global' => [
        'greetings' => 'Hi, :name!',
        'end-statement' => 'Tim ta\' appoġġ',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Għandek bżonn għajnuna? Staqsi fi [support@selldone.com](mailto:support@selldone.com) jew żur [iċ-ċentru ta' għajnuna] tagħna (https://selldone.com/community).",
        'selldone-team' => 'It-tim Selldone',
        'footer-shop' => "Jekk għandek bżonn għajnuna f'xi ħaġa jekk jogħġbok, toqgħodx lura milli tibgħatilna email: :shop_mail",
        'accept' => "Aċċetta",
        'reject' => "Tiċħad",
        'verify' => "jivverifika",
        'title' => "Titolu",
        'value' => "Valur",
        'description' => "Deskrizzjoni",
        'shop' => "Ħanut",
        'shop-info' => "Taħżen Informazzjoni",
        'user' => "utent",
        'user-info' => "Informazzjoni dwar il-Kont",
        'license' => "Liċenzja",
        'status' => "Status",
        'start' => "Ibda",
        'end' => "Tmiem",
        'renewal' => "Tiġdid",
        'view' => "Ara",

        'balance' => "Bilanċ",
        'card_number' => "Numru tal-kard",
        'cvv' => "Cvv",
        'expire_date' => "Data ta' skadenza",

        'Dashboard' => "Daxxbord",
        'order' => "ordni",
        'view_order' => "Ara l-ordni",
        'pay_now' => "Pay now",

        'official_selldone' => "BIEGĦ UFFIĊJALI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Munita",
        'free-balance' => "Bilanċ ħieles",
        'locked-balance' => "Bilanċ imsakkar",
        'bot' => "Bot",
        'requests' => "Talbiet",
        'baskets' => 'Karrettuni',
        'physical' => "Fiżiku",
        'virtual' => "Virtwali",
        'file' => "Fajl",
        'service' => "Servizz",
        'fulfillment' => "Sodisfar",
        'open' => "Miftuħa",
        'reserved' => "Riżervat",
        'canceled' => "Ikkanċellat",
        'payed' => "Imħallas",
        'cod' => "COD",
        'orders-count' => 'Ordnijiet',
        'payments-count' => 'Ħlasijiet',
        'confirms-count' => 'Jikkonferma',
        'sends-count' => 'Tibgħat',
        'delivers-count' => 'Twassil',
        'count' => 'Għadd',
        'transactions-count' => 'It-tranżazzjonijiet jgħoddu',
        'success-transactions' => 'Tranżazzjonijiet ta \'suċċess',
        'total-amount' => 'Ammont totali',
        'amount' => 'Ammont',
        'wage' => 'Paga',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Jgħix',
        'CheckQueue' => 'Iċċekkja kju',
        'OrderConfirm' => 'Ordni tikkonferma',
        'PreparingOrder' => 'Tħejjija tal-ordni',
        'SentOrder' => 'Ordni mibgħuta',
        'ToCustomer' => 'Konsenjat lill-klijent',
        'Pending' => 'Pendenti',
        'Accepted' => 'Aċċettata',
        'Rejected' => 'Miċħuda',
        'pc' => 'PC',
        'tablet' => 'Pillola',
        'phone' => 'Telefon',
        'total' => 'Total',
        'view-detail' => 'Ara d-dettall',
        'empty' => 'Vojta',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Irrispondi',
        'reactions' => 'Reazzjonijiet',
        'Comments' => 'Kummenti',
        'last-comment' => 'L-aħħar kumment',
        'response-to' => 'Rispons għal',
        'posts' => 'Postijiet',
        'post' => 'Post',

        'name' => 'Isem',
        'email' => 'Email',
        'type' => 'tip',
        'device' => 'Apparat',
        'platform' => 'Pjattaforma',
        'browser' => 'Browser',
        'time' => 'Ħin',
        'Wallet' => 'Kartiera',
        'date' => 'Data',

        'account' => 'Kont',
        'transaction' => 'Transazzjoni',
        'fee' => 'Ħlas',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategorija',
        'password' => 'Password',
        'verify-login' => "Ivverifika & Login",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Iper',
        'buy-now' => "Ixtri issa",
        'add-domain' => "Add Domain",
        'views' => 'Fehmiet',


        'country' => 'Pajjiż',
        'address' => 'indirizz',
        'postal' => 'Kodiċi postali',
        'building_no' => 'Bini #',
        'building_unit' => 'Unità #',
        'message' => 'Messaġġ',


        'customer' => 'Klijent',
        'cart-items' => 'Oġġetti tal-karrettun',
        'payment' => 'Ħlas',
        'receiver' => 'Riċevitur',
        'virtual-items' => 'Oġġetti virtwali',
        'no-payment' => 'Ebda ħlas!',

        'enable' => 'Attiva',
        'access' => 'Aċċess',
        'bank' => 'Informazzjoni bankarja',

        'vendor' => 'Bejjiegh',

        'view_content' => "Ara l-kontenut sħiħ",
        'files' => 'Fajls',
        'download' => 'Niżżel',
        'file_name' => 'Isem tal-Fajl',
        'file_size' => 'Daqs',

        'subscription' => 'Abbonament',
        'products' => 'Prodotti',
        'vendor_products' => 'Prodotti tal-Bejjiegħa',

        'pickup' => 'Pickup',

        'minutes' => 'Minuti',
        'hours' => 'Sigħat',

        'refund' => 'Rifużjoni',
        'recipient_address' => 'Indirizz tar-Riċevitur',
        'signature' => 'Firma',
        'blockchain' => 'Blockchain',
        'details' => 'Dettalji',


    

        'Shop' => 'Ħanut',
        'dashboard' => 'dashboard',
        'comments' => 'kummenti',
        'wallet' => 'kartiera',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Rapport dwar il-Prestazzjoni, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Rapport Staġjonali, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hi',
            'name' => 'Approva, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Appoġġ :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Ivverifika, Selldone'
        ],
        'Welcome' => [
            'id' => 'hi',
            'name' => 'Komunità, Selldone'
        ],
        'NewShop' => [
            'id' => 'negozjanti',
            'name' => 'Approva, Selldone'
        ],
        'Approve' => [
            'id' => 'japprova',
            'name' => 'Approva, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Ġestjoni tal-Ordnijiet :name'
        ],

        'Recovery' => [
            'id' => 'irkupru',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Pendenti ⌛',
        'PAYED' => 'Imħallas ✅',
        'CANCELED' => 'Ikkanċellat ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Amministratur',
            'OFFICER' => 'Uffiċjal u Superviżur',
            'AUDITING' => 'Maniġer tal-verifika',
            'EMPLOYEE' => 'Impjegat',
            'PRODUCT' => 'Maniġer tal-prodotti',
            'CONTENT' => 'Maniġer tal-kontenut',
            'MARKETING' => 'Manager tal-marketing',
            'VIEWER' => 'Telespettatur',

        ],
        'subject' => ":inviter stiednek bħala :level| :shop",
        'category' => "Stedina tal-persunal",
        'title' => "Ġejt mistieden għal <b>:shop_name</b> bħala <b>:level</b> .",
        'message' => "Irċevejt stedina biex tikkollabora mat-tim <b>:shop_title</b> fin-negozju. Għandek l-għażla li taċċetta jew tirrifjuta din l-offerta. Jekk tagħżel li taċċetta, jekk jogħġbok idħol fis-servizz Selldone biex tikkonferma d-deċiżjoni tiegħek. Mal-konferma, ikollok aċċess għat-taqsima tal-ġestjoni tal-maħżen.",

    ],

    'welcome-email' => [
        'subject' => "👋 Merħba :name, Ejja Nibdew b'Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Merħba għal Selldone",
        'message' => "Grazzi talli għażilt Selldone! Issa inti parti minn komunità vibranti li tgħaqqad bejjiegħa globali mal-klijenti, negozji lokali ma 'intrapriżi, u individwi ma' korporazzjonijiet. L-għodod Master u Pro kollha tagħna huma disponibbli għalik **b'xejn** u **bla limitu**. Aħna qegħdin hawn biex nappoġġjawk u niftħu l-bibien għas-suċċess tiegħek.",

        'index' => "Pass :step.",

        'step-domain' => [
            'title' => 'Żid id-Dominju tad-Dwana Tiegħek',
            'message' => "Biex tibda, żid id-dominju personalizzat tiegħek b'xejn fid-Dashboard tal-Ħanut taħt Settings > Settings tad-Dominji.",
            'action' => 'Immaniġġja d-Dominji Tiegħi',
        ],
        'step-landing' => [
            'title' => 'Ippersonalizza l-Home Page Tiegħek',
            'message' => "Ippersonalizza l-home page tiegħek billi tmur fuq Dashboard > Paġni. Agħżel landing page jew oħloq waħda ġdida. Huwa faċli u intuwittiv, u tista 'tibda taħdem fuqha minnufih.",
            'action' => 'Ippersonalizza l-Landing Page Tiegħi',
        ],
        'step-payment' => [
            'title' => 'Setup Metodi ta \'Ħlas',
            'message' => "Ibda taċċetta ħlasijiet direttament fil-kont bankarju tiegħek. Biex tgħaqqad il-fornituri tal-ħlas tiegħek bħal Stripe, PayPal, u aktar, mur Dashboard > Kontabilità > Gateway.",
            'action' => 'Żid Metodi ta \'Ħlas',
        ],
        'step-products' => [
            'title' => 'Żid il-Prodotti Tiegħek',
            'message' => "Żid faċilment prodotti u kategoriji fid-Dashboard > Prodotti. Huwa bħall-ġestjoni ta 'fajls u folders fuq il-PC tiegħek - kompletament drag-and-drop lest. Tista 'wkoll timporta prodotti bl-ingrossa bl-użu ta' Excel. Mudell kampjun huwa disponibbli biex jgħinek tibda.",
            'action' => 'Immaniġġja l-Prodotti Tiegħi',
        ],
        'step-shipping' => [
            'title' => 'Setup Metodi ta \'Tbaħħir',
            'message' => "Biex titlob lill-klijenti għat-tbaħħir, iddefinixxi l-metodi tat-tbaħħir tiegħek fid-Dashboard > Loġistika > Shipping. Tista 'tissettja prezzijiet u appoġġ differenti għal diversi postijiet. Tinsiex issettja l-oriġini tal-maħżen tiegħek f'Dashboard > Loġistika > Maħżen.",
            'action' => 'Immaniġġja l-Metodi tat-Tbaħħir',
        ],
    

        'seller' => [
            'title' => 'Int bejjiegħ?',
            'message' => 'Biex tibda tbigħ, daħħal id-dashboard tiegħek f\'Selldone permezz tal-link hawn taħt u oħloq l-ewwel maħżen tiegħek kompletament b\'xejn. Dan se jieħu ftit minuti u jkollok il-ħanut tiegħek u s-sit online. Imbagħad niggwidawk għall-passi li jmiss u nikseb il-portal tal-ħlas.',
            'action' => 'Idħol fid-dashboard tiegħi',
        ],
        'buyer' => [
            'title' => 'Jiena xerrej',
            'message' => 'Prosit. Ladarba inti membru ta \'Selldone, inti se teħles mill-hassles kollha tas-sħubija u l-awtentikazzjoni fil-ħwienet online. Biex tibbenefika minn kwalunkwe maħżen u sit li juża l-pjattaforma Selldone, tista’ tidħol b’klikk waħda u tagħmel ix-xiri tiegħek sempliċi, veloċi u sigur.',
        ],
    ],


    'charge-account' => [
        'category' => 'Kartiera > Kont > Ħlas',
        'title' => "Ħlas ta' Suċċess",
        'message' => "Il-kont tiegħek <b>:account_number</b> ġie ċċarġjat b'suċċess <b>:amount</b> .",
        'account' => 'Kont',
        'charge' => 'Ħlas',
        'balance' => 'Bilanċ',
        'footer' => "Agħmel in-negozju faċli, li jista' jintlaħaq, u aċċessibbli għal kulħadd madwar id-dinja."
    ],

    'verify-email' => [
        'subject' => "🙌 Imla l-iskrizzjoni tiegħek għal Selldone! Ivverifika l-link.",
        'category' => "INTI PAS WAĦDA L-BOGĦDA",
        'title' => "Ivverifika l-indirizz elettroniku tiegħek",
        'message' => "Hi :name,<br><br>Grazzi talli għażilt Selldone!<br><br>Biex tikkonferma li <b>:email</b> huwa l-indirizz elettroniku korrett tiegħek, jekk jogħġbok ikklikkja l-buttuna pprovduta hawn taħt. Għandek 48 siegħa biex tlesti din il-verifika.",
        'footer' => "Jekk qed ikollok problemi biex tikklikkja l-buttuna Ivverifika, ikkopja u waħħal il-URL hawn taħt fil-web browser tiegħek: :activation_url",
        'next-step' => "Sussegwentement, aħna ser nibagħtulek xi materjali utli u gwida pass pass biex tagħmilha faċli għalik li żżid id-dominju tad-dwana tiegħek, twaqqaf ħlasijiet, iżżid prodotti, u tikseb l-ewwel ordni tiegħek.",

    ],
    'verify-email-code' => [
        'subject' => "Kodiċi ta' verifika għal :name",
        'category' => "SECURITY",
        'title' => "Kodiċi tal-verifika tal-email",
        'message' => "Hi :name,<br><br>Biex tikkonferma li <b>:email</b> huwa l-indirizz elettroniku korrett tiegħek, jekk jogħġbok daħħal il-kodiċi li ġej fil-<b>10 minuti </b> li jmiss:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Il-Ħanut Tiegħek Huwa Lest| :name",
        'category' => "INTI PAS WAĦDA L-BOGĦDA",
        'title' => "Setup komplut",
        'account_title' => "Il-kont tiegħek",
        'account_msg' => "Ivverifika u idħol fil-kont tiegħek b'din l-informazzjoni.",
        'shop_msg' => "Informazzjoni dwar il-kont fuq is-sistema operattiva tan-negozju Selldone.",

    ],

    'reset2fa' => [
        'category' => "MESSAĠĠ UFFIĊJALI TAS-SIGURTÀ",
        'title' => "Itlob id-diżattivazzjoni tal-login f'2 passi",
        'message' => "Qed tirċievi din l-email għaliex irċevejna talba biex reset awtentikazzjoni b'żewġ fatturi għall-kont **:name** b'**:email** email.<br><br>Sibna d-dettalji li ġejjin għall-kont tiegħek:",
        'footer' => "Jekk ma tlabtx reset tal-password, mhi meħtieġa l-ebda azzjoni oħra.",
        'action' => 'Iddiżattiva l-login f\'żewġ passi',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Il-ħanut tiegħek lest issa!",
        'category' => "MWIELDA ĠDID TAĦŻEN ONLINE FID-DINJA",
        'title' => "Prosit, :name!",
        'message' => "<b>Prosit, :name! In-negozju online il-ġdid tiegħek issa jinsab ħaj!</b> Aħna eċċitati li nilqgħuk fil-komunità Selldoners. Int ħadt l-ewwel pass lejn is-suċċess, u aħna qegħdin hawn biex ngħinuk f'kull pass tat-triq.<br>Issa li l-maħżen tiegħek huwa lest, ejja niżguraw li tkun lest li tirċievi ħlasijiet direttament mill-klijenti tiegħek u tibda tkabbar l-imperu tiegħek. Jekk qatt għandek bżonn għajnuna, aħna biss messaġġ bogħod—tim ta 'appoġġ tagħna huwa dejjem hawn għalik.<br><br><b>Important Passi Li jmiss:</b> Biex tibda, aċċerta ruħek li int kollha stabbilit biex tirċievi pagamenti u operazzjonijiet bla xkiel. Aħna ser niggwidawk f'kull stadju biex il-maħżen tiegħek jaħdem bla xkiel.",
        'pdf-book' => "Titlifx il-ktieb tal-idejn mehmuż: Agħmel in-Negozju Tiegħek Bħal Logħba",

        'account' => [
            'title' => 'Pass 1: Oħloq kont fil-kartiera Selldone',
            'message' => "Biex tibda, oħloq kont fil-kartiera Selldone tiegħek. Dan huwa fejn il-miżati tiegħek se jitnaqqsu, u huwa wkoll fejn inti ser ittella 'biex iżżomm il-maħżen tiegħek jaħdem bla xkiel. Jekk il-bilanċ tiegħek qatt imur negattiv, tinkwetax! Il-ħanut tiegħek se jkompli jopera mingħajr interruzzjoni.",
            'action' => 'Idħol fil-kartiera',
        ],

        'shop-account' => [
            'title' => 'Pass 2: qabbad il-kont mal-maħżen',
            'message' => "Sussegwentement, qabbad il-kont tal-kartiera tiegħek mal-maħżen tiegħek. Mur għal <b>Store > Kontabilità > Fattura</b>, u għaqqad il-kartiera tiegħek. Dan jiżgura li l-pagamenti kollha tal-klijenti jiġu depożitati direttament fil-kont bankarju tiegħek—Selldone ma jnaqqas l-ebda ammont mill-qligħ tiegħek.",
            'action' => 'Aħżen Fattura Panel',
        ],

        'gateway' => [
            'title' => 'Pass 3: Qabbad Online Payment Gateway',
            'message' => "Issa, ejja nwaqqfu l-gateway tal-ħlas online tiegħek. Mur <b>Store > Kontabilità > Port</b> u kklikkja fuq <b>Add New Port</b>. Agħżel il-munita tiegħek, u tara lista ta' bibien ta' ħlas disponibbli. Il-konnessjoni ta 'portal hija rapida u faċli, imma jekk għandek bżonn xi għajnuna, tħossok liberu li tiċċekkja l-gwidi Selldone jew ikkuntattjana.",
            'action' => 'Żid portal mal-maħżen',
        ],

        'domain' => [
            'title' => 'L-aħħar pass: konnessjoni ta \'dominju dedikat',
            'message' => "Issa, għaqqad id-dominju tad-dwana tiegħek mal-maħżen tiegħek. Dan jippermetti lill-klijenti jixtru l-prodotti jew is-servizzi tiegħek u jagħmlu ħlasijiet direttament lilek.",
            'action' => 'L-introduzzjoni u r-riċeviment ta\' karti ta\' rigal illimitati',
        ],
    ],


    'basket-list' => [
        'item' => "oġġett",
        'count' => "Għadd",
        'price' => "prezz",
        'discount-code' => "Kodiċi ta' Skont",
        'customer-club' => 'Klijent Klabb',
        'shipping' => "Tbaħħir",
        'total' => "Total",
        'offer' => "Offerta",
        'coupon' => "Kupun",
        'lottery' => "Premju",
        'tax' => "Taxxa",
        'tax_included' => "Inkluż fil-prezz",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metodu',
        'amount' => 'Ammont',
        'giftcard' => 'Gift card',
        'payment' => 'Ħlas',
    ],


    'shop-subscription-email' => [
        'category' => "Aġġornament tal-abbonament",
        'title' => "Liċenzja tal-Aħżen: :shop_title",
        'title-reserved' => "Riżerva liċenzja: :shop_title",
        'title-active' => "Liċenzja attiva: :shop_title",
        'title-finished' => "Liċenzja lesta: :shop_title",
        'title-cancel' => "Ikkanċella l-liċenzja: :shop_title",
        'message' => "Il-pjan tal-liċenzja tal-ħanut tiegħek aġġornat,",
        'RESERVED' => "⚡ Il-pjan ta' abbonament tiegħek ġie **riżervat**.",
        'ACTIVE' => "🟢 Il-pjan ta' abbonament tiegħek ġie **attivat**.",
        'FINISHED' => "🚧 Il-pjan ta' abbonament tiegħek ġie **lest**.",
        'CANCEL' => "⛔ Il-pjan ta' abbonament tiegħek ġie **ikkanċellat**.",
    ],

    'support' => [
        'subject' => "Ċentru ta' Appoġġ|:name wieġeb",
        'category' => "Ċentru ta' appoġġ",
        'title' => "Irċevejt risposta",
        'action' => "Iftaħ l-amministratur tal-ħanut",
    ],

    'shop-customer-join' => [
        'subject' => "Ingħaqad :shop_title",
        'category' => "Ċelebrazzjoni ġdida tal-klijenti",
        'title' => "Aħna kuntenti għas-sħubija tiegħek",
        'action' => "Żur issa",
    ],

    'shop-vendor-join' => [
        'subject' => "Abbord tal-bejjiegħ | :shop_title",
        'category' => "Ċelebrazzjoni tal-bejjiegħ ġdid",
        'title' => "Aħna kuntenti għas-sħubija tiegħek",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Żid karta ġdida",
        'title' => "Prosit, irċevejt karta rigal",
        'action' => "Ixtri issa",
        'message' => "Irċevejt karta rigal fl-ammont ta' :balance :currency. Inti tkun tista 'tixtri mill-maħżen tagħna b'din il-karta rigal.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Ċentru ta' Appoġġ| :shop",
        'category' => "appoġġ",
        'title' => "Irċevejt risposta",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Ordni Iċċekkja | :order_id",
        'title' => "ordni",
        'message' => "Inti għamilt ordni fil-maħżen tagħna. Irċevejna l-ordni tiegħek u nibagħtulek email oħra ladarba l-ħlas jiġi kkonfermat."
    ,

        'payments' => 'Ħlasijiet',
    ],

    'order-payment' => [
        'subject' => "🛍 Konferma tal-Ħlas | :order_id",
        'title' => "Ordni ta' ħlas",
        'message' => "Il-ħlas tiegħek tlesta,<br> Aħna ltqajna l-ordni tiegħek. Aħna ser nibagħtulek email oħra meta l-ordni tiegħek tintbagħat.",
    

        'payments' => 'Ħlasijiet',
    ],

    'order-update' => [
        'subject' => "🛍️ Aġġornament tal-Istatus tal-Ordni|Ordni :order_id",
        'title' => "Aġġornament tal-Istatus tal-Ordni",
        'message' => "L-ordni tiegħek ġiet aġġornata. Tista' tiċċekkja l-aħħar status ta' din l-ordni fil-kont tiegħek.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "L-ordni tiegħek tinsab fil-kju għall-ipproċessar. Aħna ninnotifikawk meta tkun qed titħejja.",
                'OrderConfirm' => "L-ordni tiegħek hija kkonfermata u l-preparazzjoni bdiet.",
                'PreparingOrder' => "L-ordni tiegħek qed tiġi ppreparata u ser tintbagħat dalwaqt.",
                'SentOrder' => "L-ordni tiegħek ġiet mibgħuta. Inti ser tirċieviha dalwaqt.",
                'ToCustomer' => "L-ordni tiegħek ġiet ikkunsinnata. Nittamaw li tgawdiha!",

                'PreparingOrder-PICKUP' => "L-ordni tiegħek qed tiġi ppreparata. Int ser tirċievi notifika meta tkun lesta għall-ġbir.",
                'SentOrder-PICKUP' => "L-ordni tiegħek hija lesta għall-ġbir. Jekk jogħġbok ejja fil-maħżen biex tiġborha.",
                'ToCustomer-PICKUP' => "L-ordni tiegħek inġabret. Nittamaw li tgawdiha!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "L-ordni tiegħek tinsab fil-kju għall-ipproċessar. Aħna ninnotifikawk meta tkun lesta.",
                'OrderConfirm' => "L-ordni tiegħek hija kkonfermata u l-preparazzjoni għadha għaddejja.",
                'PreparingOrder' => "L-ordni tiegħek qed tiġi ppreparata u ser tintbagħat lilek dalwaqt.",
                'ToCustomer' => "L-ordni virtwali tiegħek ġiet ikkunsinnata fil-kont tiegħek. Grazzi!"
            ],
            'SERVICE' => [
                'CheckQueue' => "It-talba għas-servizz tiegħek tinsab fil-kju. Aħna ninnotifikawk meta nibdew.",
                'OrderConfirm' => "Is-servizz tiegħek huwa kkonfermat u qed nippreparaw biex nibdew.",
                'PreparingOrder' => "Qed nippreparaw is-servizz tiegħek, u ninnotifikawk ladarba jitlesta.",
                'ToCustomer' => "Is-servizz tiegħek huwa komplut. Grazzi talli għażiltna!"
            ],
            'FILE' => [
                'PreparingOrder' => "Il-fajl tiegħek qed jitħejja u se jkun disponibbli dalwaqt.",
                'ToCustomer' => "Il-fajl tiegħek huwa lest u ġie kkunsinnat. Issa tista 'tniżżlu."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "L-ordni ta' abbonament tiegħek tinsab fil-kju. Aħna ninnotifikawk meta jibda l-ipproċessar.",
                'OrderConfirm' => "L-abbonament tiegħek ġie kkonfermat u qed jiġi stabbilit.",
                'PreparingOrder' => "Qed nippreparaw l-abbonament tiegħek u dalwaqt jibda.",
                'SentOrder' => "L-abbonament tiegħek ġie attivat. Int ser tirċievi aġġornamenti kontinwi.",
                'ToCustomer' => "Is-servizz ta' abbonament tiegħek ġie attivat b'suċċess."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Prosit :name|Vawċer Ġdid: :title',
        'category' => "PROSIT, VOUCHER ĠDID",
        'message' => "Ħej :name,<br><br>Int irċevejt vawċer ġdid bħala rigal mingħandna! Tista' taqla' saħansitra aktar vawċers billi tintroduċi Selldone lill-ħbieb tiegħek u lil kull min taf. Dan il-vawċer jiswa **:price :currency**.<br><br>Int ħadt l-ewwel pass, u aħna qegħdin hawn biex ngħinuk nisfruttaw karatteristiċi ġodda bil-vawċer tiegħek! Jekk jogħġbok idħol ma' **:email** u sib il-vawċer tiegħek fil-Ħanut **Dashboard** > **Settings** > **Liċenzja**.<br><br>Prosit!",
        'action' => "Dashboard tiegħi",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Prosit, Għeżież :name | Irċevejt rigal',
        'category' => "Tħabbira li tirċievi rigal",
        'title' => "Rigali għalik",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Rigali",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Ordni Ġdida Riċevuta | :order_id",
        'title' => "New Order",
        'message' => "Irċevejt ordni ġdida. Jekk jogħġbok mur fil-paġna tal-ipproċessar tal-ordnijiet fil-maħżen tiegħek.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'L-Informazzjoni Mimli Tiegħek',
        'output-form-title' => 'Informazzjoni dwar l-oġġett mixtri',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Rapport ta \'kull ġimgħa :time',
        'title' => 'Rapport tal-prestazzjoni tal-maħżen ta\' kull ġimgħa',
        'message' => "Dan huwa r-rapport ta 'kull ġimgħa tal-maħżen tiegħek minn <b>:start</b> sa <b>:end</b>. Dan ir-rapport jinkludi pariri biex ittejjeb in-negozju tiegħek, tista 'wkoll tiċċekkja l-istatus tal-ħanut online tiegħek u ordnijiet riċenti. Nispera li jkollok ġurnata u ġimgħa tajba quddiemhom."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Ir-rapport tal-iffrankar tal-:amount tiegħek fl-aħħar tliet xhur| :shop_title',
        'title' => 'Rapport staġjonali dwar l-attività tan-negozju tiegħek, premjijiet u tfaddil finanzjarju',
        'message' => "Dan huwa r-rapport staġjonali tiegħek <b>:shop_title</b> minn <b>:start</b> għal <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Kontijiet konnessi',
        'sub-title' => 'X\'inhu l-aħħar status tal-kontijiet tal-kartiera konnessi mal-maħżen tiegħi?',
        'view-wallet' => 'Ara l-kartiera',
        'tip-title' => 'Suġġerimenti importanti',
        'tip' => "Stabbilixxi kartiera Selldone b'xejn u għaqqadha mal-maħżen tiegħek. Anke jekk il-bilanċ tiegħek huwa negattiv, il-klijenti tiegħek xorta jistgħu jixtru u jħallsu mingħajr ebda kwistjoni. Tinkwetax, l-operazzjonijiet u d-dejta tal-maħżen tiegħek se jkomplu bla xkiel sa xahar, mingħajr interruzzjonijiet.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Qabbad mal-kont'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps installati',
        'sub-title' => 'Lista ta\' apps li installajt fil-ħanut tiegħek din il-ġimgħa.',
        'tip' => "Trid issib aktar apps għall-maħżen tiegħek?",
        'view-app-store' => 'Żur is-Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Il-Bots tal-Aħżen tiegħek',
        'sub-title' => 'Bots tal-bejgħ attivi fil-maħżen tiegħi.',
        'tip-title' => 'Bejgħ tal-bot',
        'tip' => "Selldone ipprovdietlek bots tal-bejgħ awtomatiku. Kull ma trid tagħmel hu li tmur fil-pannell tal-Ad-ons> Bots u tattiva l-bots tal-maħżen tiegħek. Innota li s-servizz rilevanti għandu jkun disponibbli f'pajjiżek.",
        'view-bots' => 'Immaniġġja bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikazzjoni mal-Klijenti',
        'sub-title' => 'Kemm kelli kuntatti mal-klijenti tiegħi din il-ġimgħa?',
        'faqs' => 'Mistoqsijiet Frekwenti',
        'tickets' => 'Biljetti tal-Klijent',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status tal-Utenti',
        'sub-title' => 'Attività minn :start sa :end',
        'users' => [
            'title' => 'Klijenti',
            'subtitle' => 'Signup Utenti',
        ],
        'views' => [
            'title' => 'Żjarat',
            'subtitle' => 'Kemm-il darba żort il-maħżen',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utenti ritornati',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Karretti tax-Xiri',
            'subtitle' => 'Irrapporta n-numru ta \'karretti tax-xiri ġodda',
        ],
        'products' => [
            'title' => 'Ħarsa ġenerali tal-prodotti',
            'subtitle' => 'Status tal-prodotti fil-maħżen skond it-tip',
            'value_name' => 'Prodotti'
        ],
        'products_count' => 'Tipi ta\' prodotti',
        'views_count' => 'View għadd',
        'sell_count' => 'Biegħ għadd',
        'send_count' => 'Għadd tat-tbaħħir',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel għall-bejjiegħa ewlenin ta\' Drop Shipping Selldone.',
        'total_fulfillments' => 'Ordnijiet Totali Riċevuti',
        'ds_count' => 'Ordnijiet Riċevuti',
        'statistics_title' => 'Rapport ordnijiet riċevuti',
        'ds_cancels' => 'Ikkanċella mill-bejjiegħ tal-interface',
        'ds_rejects' => 'Ikkanċella minnek',
        'tip' => "Inti bejjiegħ ewlieni tal-merkanzija? Għandek maħżen, fabbrika jew distributur ta 'prodotti? Tista 'toffri l-prodotti tiegħek lil bejjiegħa oħra fis-servizz ta' Selldone Drop Shipping biex tbigħ il-prodott tiegħek fuq skala kbira. Ibgħatilna email fuq support@selldone.com biex niggwidawk.",
        'view-drop-shipping-panel' => 'Idħol fil-panel bl-ingrossa',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Rati tal-Kambju',
        'sub-title' => 'Lista ta \'l-aħħar rati ta\' konverżjoni tal-munita fil-maħżen tiegħek.',
        'from' => 'Sors Munita',
        'to' => 'Munita tad-destinazzjoni',
        'rate' => 'Rata ta\' konverżjoni',
        'view-exchange-panel' => 'Immaniġġja Rati tal-Kambju',
    

        'vew-exchange-panel' => 'pannell tal-ġestjoni tar-rata tal-kambju',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Kuntratti esperti',
        'sub-title' => 'Liema professjonisti jaħdmu fuq il-maħżen tiegħi?',
        'cost' => 'Ammont tal-kuntratt',
        'duration' => 'Tul ta\' żmien',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Ikkanċella',
        'end_at' => 'Data tat-tqassim',
        'tip' => 'Tista\' tikri l-aqwa speċjalisti f\'Selldone biex tiżviluppa n-negozju tiegħek.',
        'view-experts' => 'Ikklikkja biex tibda.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Gateways ta\' Ħlas Attivi fuq il-Ħanut Tiegħek :shop',
        'tip-title' => 'Suġġerimenti importanti',
        'tip' => "Mur fil-paġna tal-ġestjoni tal-portal fil-maħżen tiegħek u żid mill-inqas port wieħed fi ftit minuti. Il-klijenti tiegħek jixtiequ jħallsu malajr u b'mod sigur permezz ta' portali onlajn.",
        'view-shop-gateways' => 'Idħol fil-ġestjoni tal-portal tal-maħżen tiegħi.',
        'view-gateways' => 'Ara aktar gateways',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Ordnijiet',
        'sub-title' => 'Lista ta\' ordnijiet li rċevejt din il-ġimgħa.',
        'total_baskets' => 'Ordnijiet Totali',
        'total_posBaskets' => 'Ordnijiet ta\' Flus Totali',
        'pos-title' => 'Kaxxa tal-Aħżen POS',
        'chart-label' => 'Ordnijiet kompluti (dawn l-ordnijiet mhux bilfors jitħallsu!)',
        'tip-title' => 'Għandek tipprova aktar...',
        'tip' => "Ebda suċċess sempliċi.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Iċ-ċentru tal-ipproċessar',
        'sub-title' => 'Kemm ipproċessajna ordni fil-maħżen din il-ġimgħa?',
        'tip-title' => 'Ma kellekx bejgħ!',
        'tip' => "Sfortunatament ma kellek l-ebda bejgħ din il-ġimgħa. Għandek bżonn tikseb aktar fil-maħżen tiegħek. Tista 'żżid aktar prodotti, tagħżel stampi aħjar jew tikteb deskrizzjonijiet aħjar għall-prodotti tiegħek. Ikkunsidra impjieg full-time għan-negozju tiegħek. Jekk tagħmel dan sewwa u ma tiġix frustrat, tirnexxi.",
        'view-process-center' => 'Ara ċ-ċentru tal-proċess',
        'return' => [
            'title' => 'Ordni mibgħuta lura',
            'subtitle' => 'Irrapporta ordnijiet ritornati.',
            'tip-title' => 'Kont taf li...',
            'tip' => "Tista 'toħloq cash registers kemm għandek bżonn b'Selldone POS! Kemm jekk tkun it-tablet, il-mowbajl jew il-laptop tiegħek, tista' tibdel kwalunkwe apparat fil-punt tal-bejgħ tal-maħżen tiegħek. Huwa sempliċi, malajr biex jitwaqqaf, u ppreparat bis-sħiħ għas-server tiegħek. Ibda tużah illum!",
            'view-pos' => 'Idħol fil-Kaxxier tal-Aħżen Online Tiegħi'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessjonijiet',
        'sub-title' => 'Kemm-il darba żort il-maħżen tiegħi?',
        'countries-title' => 'Liema pajjiżi kienu l-aktar miżjura?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Trid tagħmel il-flus mingħajr ma tonfoq dollar wieħed?',
        'message' => "Hi :name, wasal iż-żmien li tibda taqla' b'Selldone! Mur Dashboard > Aktar > Monetizzazzjoni > Ikseb il-Link tar-Riferiment Tiegħek. Aqsam il-link mal-ħbieb tiegħek, u aqla' karti rigal u sehem mill-ħlasijiet tagħhom. L-aħjar parti? Kemm int kif ukoll ħabib tiegħek iġibu karta rigal!",
        'action' => 'Ara l-link tal-introduzzjoni tiegħi',
        'mail-clip' => "<b style='color: #C2185B'>Importanti:</b> Jekk tuża servizzi tal-email bħal Gmail li jillimitaw it-tul tal-email, sib l-għażla li ġejja fl-aħħar tal-email biex turi r-rapport sħiħ u kklikkja fuqha:",

        'no-coin-reward' => "<b style='color: #C2185B'>Jiddispjacini:</b> L-attività tiegħek ma ssodisfatx ir-rekwiżit biex tikseb premju SEL Coins b'xejn. Ipprova aktar u biegħ aktar fuq il-ħanut tiegħek għall-istaġun li jmiss.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Prosit:</b> Xogħol mill-aqwa! Ibbażat fuq il-prestazzjoni eċċellenti tiegħek, aħna kkreditajna :amount SEL Coins fil-kont tiegħek bħala premju.",

        'need-buy-license' => "<b>Level Up in-Negozju Tiegħek:</b> Jidher li għadek ma rreġistrajt l-ebda pjan ta' abbonament għall-websajt tiegħek! Aġġorna issa biex nisfruttaw aktar karatteristiċi għal :amount biss fix-xahar jekk jitħallas kull sena.",
        'not-afford-message' => "Jekk ma tistax taffordja jew għandek xi problemi bil-ħlas, tħossok liberu li tgħidilna permezz ta' support@selldone.com.",
        'add-domain' => "<b>Għaliex ma jkollokx dominju personalizzat għan-negozju tiegħek?</b><br> Żid dominju mal-websajt tiegħek issa; b'xejn!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone huwa a<del> prodott</del> <span style = 'color: forestgreen'>komunità</span> .<br> Kun Selldoner professjonali!",
        'message' => "Segwi l-paġni uffiċjali tas-Selldone fuq Twitter, LinkedIn u netwerks soċjali. Ibgħatilna kwalunkwe kumment, talba jew kritika jew ipparteċipa f'diskussjonijiet dwar is-Selldone. Aħna wkoll parti mill-komunità ta 'Selldone li <b>inti tagħmel</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Irċieva ordnijiet ġodda ta\' Avocado | :shop_title :time',
        'title' => "Rapport tal-prestazzjoni għall-aħħar 24 siegħa",
        'message' => "Il-klijenti tiegħek qed jistennew li l-ordnijiet tiegħek jiġu riveduti u pprezzati. Irrispondi għat-talbiet tal-klijenti tiegħek kemm jista 'jkun malajr biex tikseb aktar bejgħ.",
        'card_title' => "Ordnijiet fil-kju",
        'card_subtitle' => "Peress :date",

        'card_payed' => "Ordnijiet imħallsa"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Irrispondi għall-post tiegħek fi :community_title',
        'title' => ":name u :count oħrajn ingħaqdu mal-konversazzjoni fuq il-postijiet tiegħek!",
        'message' => "Hi :name, il-postijiet tiegħek qed jieħdu l-attenzjoni! Irċevejt kummenti fil-komunità tagħna. Idħol fil-kont tiegħek biex tingħaqad mad-diskussjoni u ara x'qed jgħid kulħadd.",
        'title-simple' => ":name ikkummenta fuq il-kariga tiegħek!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Irrispondi għas-suġġett tiegħek :topic_title',
        'title' => ":name, u :count oħrajn wieġbu dwar is-suġġett tiegħek.",
        'message' => "Hi :name, is-suġġett tiegħek qed jiġbed l-attenzjoni! Irċevejt tweġibiet fil-komunità tagħna. Idħol fil-kont tiegħek biex tingħaqad mad-diskussjoni u ara x'qed jgħid kulħadd.",
        'title-simple' => ":name wieġeb dwar is-suġġett tiegħek.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Login Ġdid :name',
        'category' => 'Notifiki ta\' sigurtà',
        'title' => "Idħol fil-Kont",
        'message' => "Għeżież :name, instab login fil-kont Selldone tiegħek.",   // Login in selldone (seller)
        'message-shop' => "Għażiż :name, ġejt illoggjat f' :shop_title .",  // Login in shop (buyer)

        'footer' => "Jekk m'intix illoggjat, jekk jogħġbok ibdel il-password tiegħek.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Irtirar",
        'deposit' => "Depożitu",

        'withdraw_subject' => "Iġbed mill-kont :account",
        'deposit_subject' => "Depożitu fil-kont :account",

        'message' => "It-trasferiment tal-flus sar bl-ispeċifikazzjonijiet li ġejjin.",

        'type' => "Tip ta' tranżazzjoni",

        'from' => "Kont tas-sors",
        'to' => "Destination account",

        'desc' => "Deskrizzjoni tat-tranżazzjoni",
        'action' => "Ara t-tranżazzjoni",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Importanti! Ksur tar-regoli| :shop",
        'category' => "Tinforma kritika",
        'title' => "Il-ħanut tiegħek ġie penalizzat",
        'action' => "Iftaħ dashboard tal-ħanut",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter stedinkom għal Selldone",
        'title' => ":name bagħtek :amount biex tgħin fit-tnedija tal-ħanut online il-ġdid tiegħek u monetizeh!",
        'message' => "Hi **:receiver_name**,<br><br>Merħba għal Selldone! Fuq Selldone, tista 'faċilment toħloq is-sit tal-kummerċ elettroniku, il-blog, il-komunità online tiegħek, u anke twaqqaf sistema POS onlajn għal bejgħ personalment—kollha fi ftit minuti. Hija s-sistema operattiva kompluta tan-negozju onlajn iddisinjata biex tagħmel in-negozju tiegħek aħjar, aktar mgħaġġel u eħfef biex titmexxa.<br><br>Irreġistra sa <b>:date</b> u tirċievi vawċer :amount biex tibda!",
        'accept' => "Aċċetta l-istedina",
        'owner' => "Sid ta'",
        'join-date' => "Fuq Selldone peress",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Link ta' rkupru| :shop",
        'category' => "Sigurtà tal-ħanut",
        'title' => "Aħżen il-link għall-irkupru ta' <b>:shop_name</b> .",
        'message' => "Din l-email intbagħtet lilek għaliex tlabt li tirrestawra l-maħżen tiegħek. Meta tikklikkja fuq il-link hawn taħt, tirkupra l-ħanut tiegħek u d-dejta kollha li tappartjeni għalih.",
        'action' => "Ikkonferma l-Irkupru tal-Ħanut",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Kemm iffranka Selldone flus għan-negozju tiegħek?',
        'sub-title' => 'Mid-data :start sa :end',
        'infrastructure' => [
            'title' => 'Infrastruttura',
            'subtitle' => 'Servers, CDN, Ħażna, u servizzi oħra tal-cloud',
        ],
        'experts' => [
            'title' => 'Esperti u Persunal',
            'subtitle' => 'Iżviluppaturi, manutenzjoni, u appoġġ',
        ],
        'total_save' => 'Total ffrankati flus'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Il-prestazzjoni tiegħek',
        'sub-title' => 'Ħarsa ġenerali tan-negozju minn :start għal :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utenti ritornati',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Karretti tax-Xiri',
            'subtitle' => 'Irrapporta n-numru ta \'karretti tax-xiri ġodda',

        ],
        'products' => [
            'title' => 'Ħarsa ġenerali tal-prodotti',
            'subtitle' => 'Status tal-prodotti fil-maħżen skond it-tip',
            'value_name' => 'Prodotti'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total ta\' opinjonijiet tal-paġna tal-websajt',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Irċevejt ordni ġdida. Jekk jogħġbok mur fil-paġna tal-ipproċessar tal-ordnijiet fil-panel tal-bejjiegħ tiegħek.",
        'subject' => "🛍 Ordni Ġdida Riċevuta | :order_id",
        'your_revenue' => "Id-Dħul Tiegħek",
    ],
    'vendor-invite' => [
        'title' => 'Stedina tal-Bejjiegh',
        'message' => "Irċevejt stedina biex issir bejjiegħ ta' :shop_name. Tista' taċċettaha jew tirrifjuta billi tikklikkja fuq il-buttuni li ġejjin.",
        'subject' => ":shop_name |Stedina biex issir il-bejjiegħ tagħna",
        'accept' => "Aċċetta & Issir Bejjiegħa",
        'reject' => "Tiċħad",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Stedina biex tingħaqad mat-tim tagħna',
        'message' => "Ġejt mistieden tingħaqad ma' :vendor_name f':shop_name. Tista' taċċetta jew tirrifjuta din l-istedina billi tuża l-buttuni hawn taħt.",
        'subject' => "Stedina biex Tissieħeb :vendor_name|Issir Membru tat-Tim",
        'accept' => "Aċċetta u Ingħaqad mat-Tim",
        'reject' => "Tiċħad",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Il-Kodiċi tal-Login tiegħek għal :shop",
        'header-message' => "Qed nibagħtulek din l-email għax tlabt kodiċi ta' login għall-ħanut. Jekk jogħġbok sib il-Password ta' One-Time (OTP) tiegħek hawn taħt:",
        'footer-message' => "Dan il-kodiċi se jkun validu għal 10 minuti. Jekk ma tlabtx dan il-kodiċi tal-login, jekk jogħġbok injora din l-email."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Ivverifika l-email tiegħek| :shop",
        'title' => 'Verifika tal-Email',
        'header-message' => "Hi :name,<br>Jekk jogħġbok ikkonferma li **:email** huwa l-indirizz elettroniku tiegħek billi tikklikkja l-buttuna hawn taħt jew tuża l-link hawn taħt fi żmien 48 siegħa.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Aġġornamenti tal-Prodott| :shop",
        'title' => "Aġġornament dwar l-Istatus tal-Prodott - L-aħħar 24 Siegħa",
        'message' => "Nispera li dan il-messaġġ isibkom tajjeb. Dan huwa aġġornament qasir biex ninfurmak dwar l-istatus tal-prodotti tiegħek fuq il-pjattaforma tagħna matul l-aħħar 24 siegħa.\nMatul dan il-perjodu, kien hemm bidliet fl-istatus ta 'xi prodotti. Dawn il-bidliet jistgħu jkunu dovuti għal xiri, aġġornamenti tal-istokk, jew avvenimenti oħra relatati.\nGħal aktar informazzjoni dettaljata dwar kull prodott, jekk jogħġbok idħol fil-kont tiegħek u iċċekkja t-taqsima 'Status tal-Prodott'.",
        'action' => "Iftaħ il-Panel tal-Bejjiegħa",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Ordnijiet bl-ingrossa Riċevuti| :shop | :date",
        'title' => "Notifika ta' Ordnijiet Bulk",
        'message' => "Irċevejt lott ta' ordnijiet bl-ingrossa. Jekk jogħġbok żur il-paġna tal-ipproċessar tal-ordnijiet fil-panel tiegħek għal aktar dettalji. Tista' wkoll tniżżel il-lista tal-ordnijiet permezz tal-link sigur ipprovdut, validu għal 7 ijiem.<br><br>\n        <b>IMPORTANTI:</b> Din il-link hija valida għal 7 ijiem.<br>\n        Din il-link hija dinamika, għalhekk kull darba li tikklikkjaha, tirċievi l-aktar ordnijiet aġġornati għal din id-data speċifika. <b>Ifisser li jekk l-istatus tal-ħlas tal-ordni jinbidel għal miċħud, ma tibqax tara dik l-ordni fis-CSV imniżżel, jew jekk l-ordni titħallas, tidher fil-lista.</b><br><br>\n        <ul>\n            <li>Is-CSV fih ordnijiet imħallsa b'data riservata fil-:date.</li>\n            <li>Data riżervata hija d-data meta l-utent jikklikkja checkout fuq il-paġna tal-ordni.</li>\n        </ul>\n        <b>Biex tevita ordnijiet duplikati, dejjem iċċekkja l-Ordni ID qabel ma tibgħat.</b>",
        'action' => "Niżżel il-Lista tal-Ordni",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Xi oġġetti fl-ordni tiegħek ma ġewx aċċettati u ma jistgħux jitwasslu. L-ammont għal dawn l-oġġetti ser jingħata lura lill-karta tiegħek dalwaqt."
    ]

];
