<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Mezu honek erosle berri bati ongietorria ematen dio dendara.',
        ShopMailTemplateCodes::OrderCheckout => 'Jakinarazpen hau erosle batek eskaera bat berresten duenean bidaltzen da.',
        ShopMailTemplateCodes::OrderPayment => 'Jakinarazpen honek bezero batek egindako ordainketa arrakastatsua berresten du.',
        ShopMailTemplateCodes::OrderUpdate => 'Mezu hau erosle bat bere eskaeraren egoera eguneratzeko bidaltzen da.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Mezu hau saltzaile bati bidaltzen zaio berretsitako eskaeraren berri emateko.',
        ShopMailTemplateCodes::PosCheckout => 'Jakinarazpen hau erosle baten salmenta puntuko eskaera berresteko bidaltzen da.',
        ShopMailTemplateCodes::PosPayment => 'Jakinarazpen honek erosle batek egindako salmenta puntuko ordainketa berresten du.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Mezu honek bere salmenta puntuan egindako erosketa baten berri ematen dio saltzaileari.',
        ShopMailTemplateCodes::ShopContact => 'Jakinarazpen hau harremanetarako formularioa bidaltzen denean bidaltzen da.',
        ShopMailTemplateCodes::ShopGiftCard => 'Jakinarazpen honek erabiltzaile bati opari-txartel bat jaso duela jakinarazten dio.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Mezu honek saltzaile berri bati ongi etorria ematen dio dendara.',
        ShopMailTemplateCodes::ShopVendorInvite => "Mezu hau saltzaile bat zure merkatuan sartzera gonbidatzeko bidaltzen da.",
        ShopMailTemplateCodes::ShopVendorOrder => "Mezu hau saltzaileari bidaltzen zaio eskaera bat Ordaindu edo Eskudirutan (COD) egoeran jasotzen denean.",
        ShopMailTemplateCodes::ShopVendorProducts => "Egunero bidaltzen dira saltzaileek beren produktuen egoerari buruz eguneratzeko.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Mezu hau saltzaile bat zure merkatuan sartzera gonbidatzeko bidaltzen da.",

        ShopMailTemplateCodes::UserLogin => "Jakinarazi erabiltzaileari saioa hasteko xehetasunak, IP helbidea, data eta gailua barne, segurtasun-helburuetarako.",
        ShopMailTemplateCodes::LoginCode => "Bidali behin-behineko pasahitz kodea erabiltzaileei dendan saioa hasteko.",

        ShopMailTemplateCodes::EmailVerifyLink => "Bidali esteka bat erabiltzailearen helbide elektronikoa egiaztatzeko. Erabiltzaile bat SMS-k erregistratzen eta bere e-posta sartzen duenean bidaltzen da mezu elektroniko hau. Ez da bidaltzen erabiltzaile bat zuzenean saioa hasteko edo posta elektroniko bidez erregistratzen denean.",

        ShopMailTemplateCodes::EmailBulkOrder => "Bidali egun zehatz baterako jasotako eta ordaindutako eskaeren zerrenda multzoan."


    ,

    ],


    'global' => [
        'greetings' => 'Kaixo, :name!',
        'end-statement' => 'Laguntza taldea',

        'receiver_name' => 'Kaixo :user_name',
        'footer-help' => "Laguntza behar duzu? Galdetu [support@selldone.com](mailto:support@selldone.com) edo bisitatu gure [laguntza zentroa](https://selldone.com/community).",
        'selldone-team' => 'Selldone taldea',
        'footer-shop' => "Edozertarako laguntza behar baduzu, mesedez, ez izan zalantzarik igorri mezu elektroniko bat: :shop_mail",
        'accept' => "Onartu",
        'reject' => "Baztertu",
        'verify' => "egiaztatu",
        'title' => "Izenburua",
        'value' => "Balioa",
        'description' => "Deskribapena",
        'shop' => "Denda",
        'shop-info' => "Dendako informazioa",
        'user' => "Erabiltzailea",
        'user-info' => "Kontuaren informazioa",
        'license' => "Lizentzia",
        'status' => "Egoera",
        'start' => "Hasi",
        'end' => "Amaiera",
        'renewal' => "Berritzea",
        'view' => "Ikusi",

        'balance' => "Balantzea",
        'card_number' => "Txartel zenbakia",
        'cvv' => "Cvv",
        'expire_date' => "Iraungitze data",

        'Dashboard' => "Aginte-panela",
        'order' => "ordena",
        'view_order' => "Ikusi ordena",
        'pay_now' => "Pay now",

        'official_selldone' => "SALDU OFIZIALA",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Moneta",
        'free-balance' => "Saldo librea",
        'locked-balance' => "Oreka blokeatua",
        'bot' => "Bot",
        'requests' => "Eskaerak",
        'baskets' => 'Gurdiak',
        'physical' => "Fisikoa",
        'virtual' => "Birtuala",
        'file' => "Fitxategia",
        'service' => "Zerbitzua",
        'fulfillment' => "Betetzea",
        'open' => "Ireki",
        'reserved' => "Erreserbatuta",
        'canceled' => "Bertan behera utzita",
        'payed' => "Ordaindua",
        'cod' => "COD",
        'orders-count' => 'Aginduak',
        'payments-count' => 'Ordainketak',
        'confirms-count' => 'Berresten du',
        'sends-count' => 'Bidaltzen du',
        'delivers-count' => 'Entregatzen',
        'count' => 'zenbaketa',
        'transactions-count' => 'Transakzioak zenbatzen dira',
        'success-transactions' => 'Transakzio arrakastatsuak',
        'total-amount' => 'Kopuru osoa',
        'amount' => 'Zenbatekoa',
        'wage' => 'Soldata',
        'debug' => 'Araztu',
        'pos' => 'POS',
        'live' => 'Zuzenean',
        'CheckQueue' => 'Egiaztatu ilara',
        'OrderConfirm' => 'Eskaera berretsi',
        'PreparingOrder' => 'Eskaera prestatzen',
        'SentOrder' => 'Bidalitako eskaera',
        'ToCustomer' => 'Bezeroari entregatu',
        'Pending' => 'Zain',
        'Accepted' => 'Onartua',
        'Rejected' => 'Baztertua',
        'pc' => 'PC',
        'tablet' => 'Tableta',
        'phone' => 'Mugikorra',
        'total' => 'Guztira',
        'view-detail' => 'Ikusi xehetasuna',
        'empty' => 'Hutsik',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Erantzun',
        'reactions' => 'Erreakzioak',
        'Comments' => 'Iruzkinak',
        'last-comment' => 'Azken iruzkina',
        'response-to' => 'Erantzuna',
        'posts' => 'Mezuak',
        'post' => 'Argitalpena',

        'name' => 'Izena',
        'email' => 'Posta elektronikoa',
        'type' => 'mota',
        'device' => 'Gailua',
        'platform' => 'Plataforma',
        'browser' => 'Arakatzailea',
        'time' => 'Denbora',
        'Wallet' => 'Diru-zorroa',
        'date' => 'Data',

        'account' => 'Kontua',
        'transaction' => 'Transakzioa',
        'fee' => 'Kuota',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategoria',
        'password' => 'Pasahitza',
        'verify-login' => "Egiaztatu eta saioa hasi",
        'url' => 'URL',
        'avocado' => 'Ahuakatea',
        'hyper' => 'Hipera',
        'buy-now' => "Erosi orain",
        'add-domain' => "Add Domain",
        'views' => 'Ikuspegiak',


        'country' => 'Herrialdea',
        'address' => 'helbidea',
        'postal' => 'posta kodea',
        'building_no' => 'Eraikin #',
        'building_unit' => 'Unitatea #',
        'message' => 'Mezua',


        'customer' => 'Bezeroa',
        'cart-items' => 'Saskia elementuak',
        'payment' => 'Ordainketa',
        'receiver' => 'Hartzailea',
        'virtual-items' => 'Elementu birtualak',
        'no-payment' => 'Ordainketarik ez!',

        'enable' => 'Gaitu',
        'access' => 'Sarbidea',
        'bank' => 'Bankuaren informazioa',

        'vendor' => 'Saltzailea',

        'view_content' => "Ikusi eduki osoa",
        'files' => 'Fitxategiak',
        'download' => 'Deskargatu',
        'file_name' => 'Fitxategiaren izena',
        'file_size' => 'Tamaina',

        'subscription' => 'Harpidetza',
        'products' => 'Produktuak',
        'vendor_products' => 'Saltzaileen produktuak',

        'pickup' => 'Bilketa',

        'minutes' => 'Minutuak',
        'hours' => 'Orduak',

        'refund' => 'Itzulketa',
        'recipient_address' => 'Hartzailearen helbidea',
        'signature' => 'Sinadura',
        'blockchain' => 'Blockchain',
        'details' => 'Xehetasunak',


    

        'Shop' => 'Denda',
        'dashboard' => 'aginte-panela',
        'comments' => 'iruzkinak',
        'wallet' => 'zorroa',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Errendimenduaren txostena, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Sasoiko txostena, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hi',
            'name' => 'Onartu, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Laguntza :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Egiaztatu, Selldone'
        ],
        'Welcome' => [
            'id' => 'hi',
            'name' => 'Komunitatea, Selldone'
        ],
        'NewShop' => [
            'id' => 'merkatariak',
            'name' => 'Onartu, Selldone'
        ],
        'Approve' => [
            'id' => 'onartzea',
            'name' => 'Onartu, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Eskaeren kudeaketa :name'
        ],

        'Recovery' => [
            'id' => 'berreskuratzea',
            'name' => 'Selldone berreskuratzeko taldea'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Zain ⌛',
        'PAYED' => 'Ordaindu ✅',
        'CANCELED' => 'Bertan behera ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administratzailea',
            'OFFICER' => 'Ofiziala eta Begiralea',
            'AUDITING' => 'Auditoretzako arduraduna',
            'EMPLOYEE' => 'Langilea',
            'PRODUCT' => 'Produktuen arduraduna',
            'CONTENT' => 'Eduki-kudeatzailea',
            'MARKETING' => 'Marketin arduraduna',
            'VIEWER' => 'Ikusle',

        ],
        'subject' => ":inviter-k :level gisa gonbidatu zaitu| :shop",
        'category' => "Langileen gonbidapena",
        'title' => "<b>:shop_name</b> -ra gonbidatu zaituzte <b>:level</b> gisa.",
        'message' => "Enpresan <b>:shop_title</b> taldearekin elkarlanean aritzeko gonbidapena jaso duzu. Eskaintza hau onartzeko edo ukatzeko aukera duzu. Onartzea erabakitzen baduzu, hasi saioa Selldone zerbitzuan zure erabakia berresteko. Berrespena egin ondoren, denda kudeatzeko atalera sarbidea izango duzu.",

    ],

    'welcome-email' => [
        'subject' => "👋 Ongi etorri :name, Has gaitezen Selldone-rekin!",
        'category' => 'CONGRATULATION',
        'title' => "Ongi etorri Selldonera",
        'message' => "Eskerrik asko Selldone aukeratzeagatik! Saltzaileak bezeroekin, tokiko negozioak enpresekin eta partikularrak korporazioekin lotzen dituen komunitate bizi baten parte zara orain. Gure Master eta Pro tresna guztiak eskuragarri dituzu **doan** eta **mugagabea**. Hemen gaude zu laguntzeko eta zure arrakastarako ateak zabaltzeko.",

        'index' => ":step urratsa.",

        'step-domain' => [
            'title' => 'Gehitu zure domeinu pertsonalizatua',
            'message' => "Hasteko, gehitu zure domeinu pertsonalizatua doan Dendaren panelean Ezarpenak > Domeinuen ezarpenak atalean.",
            'action' => 'Kudeatu Nire Domeinuak',
        ],
        'step-landing' => [
            'title' => 'Pertsonalizatu zure hasierako orria',
            'message' => "Pertsonalizatu zure hasierako orria Panela > Orriak atalera joanez. Aukeratu helmuga orri bat edo sortu berri bat. Erraza eta intuitiboa da, eta berehala has zaitezke lanean.",
            'action' => 'Pertsonalizatu Nire helmuga orria',
        ],
        'step-payment' => [
            'title' => 'Konfiguratu Ordainketa-metodoak',
            'message' => "Hasi ordainketak zuzenean zure banku-kontuan onartzen. Stripe, PayPal eta abar bezalako ordainketa-hornitzaileak konektatzeko, joan Arbela > Kontabilitatea > Pasabidea atalera.",
            'action' => 'Gehitu Ordainketa-metodoak',
        ],
        'step-products' => [
            'title' => 'Gehitu zure produktuak',
            'message' => "Gehitu erraz produktuak eta kategoriak Arbel > Produktuak atalean. Fitxategiak eta karpetak zure ordenagailuan kudeatzea bezalakoa da, arrastatu eta jaregiteko prest. Excel erabiliz produktuak masiboki inporta ditzakezu. Lagin-txantiloi bat eskuragarri dago hasten laguntzeko.",
            'action' => 'Kudeatu Nire produktuak',
        ],
        'step-shipping' => [
            'title' => 'Konfiguratu bidalketa-metodoak',
            'message' => "Bezeroei bidalketak kobratzeko, zehaztu zure bidalketa-metodoak Arbel > Logistika > Bidalketa atalean. Kokapen ezberdinetarako prezio eta laguntza desberdinak ezar ditzakezu. Ez ahaztu zure biltegiaren jatorria Arbel > Logistika > Biltegian ezartzea.",
            'action' => 'Kudeatu bidalketa-metodoak',
        ],
    

        'seller' => [
            'title' => 'Saltzailea al zara?',
            'message' => 'Saltzen hasteko, sartu zure panela Selldone-n beheko estekaren bidez eta sortu zure lehen denda guztiz doan. Honek minutu batzuk beharko ditu eta zure denda eta lineako gunea izango dituzu. Ondoren, hurrengo urratsetara gidatuko zaitugu eta ordainketa-pasabidea lortuko dugu.',
            'action' => 'Hasi saioa nire panelean',
        ],
        'buyer' => [
            'title' => 'Eroslea naiz',
            'message' => 'Zorionak. Selldoneko kide zarenean, lineako dendetan kidetzearen eta autentifikazioaren traba guztiak kenduko dituzu. Selldone plataforma erabiltzen duen edozein denda eta guneri etekina ateratzeko, klik bakarrarekin saioa hasi eta zure erosketa erraza, azkarra eta segurua egin dezakezu.',
        ],
    ],


    'charge-account' => [
        'category' => 'Diru-zorroa > Kontua > Kargatu',
        'title' => "Arrakasta-karga",
        'message' => "Zure kontua <b>:account_number</b> behar bezala kobratu da <b>:amount</b>.",
        'account' => 'Kontua',
        'charge' => 'Kargatu',
        'balance' => 'Balantzea',
        'footer' => "Egin negozioa erraza, lorgarria eta eskuragarria mundu osoko edonorentzat."
    ],

    'verify-email' => [
        'subject' => "🙌 Osatu zure izena Selldone-n! Egiaztatu esteka.",
        'category' => "PAUS BATERA ZAUDE",
        'title' => "Egiaztatu zure helbide elektronikoa",
        'message' => "Kaixo :name,<br><br>Eskerrik asko Selldone aukeratzeagatik!<br><br><b>:email</b> zure helbide elektroniko zuzena dela berresteko, egin klik beheko botoian esteka edo egin klik. 48 ordu dituzu egiaztapen hau burutzeko.",
        'footer' => "Egiaztatu botoian sakatzean arazoak badituzu, kopiatu eta itsatsi beheko URL zure web arakatzailean: :activation_url",
        'next-step' => "Jarraian, material lagungarri batzuk eta urratsez urratseko gida bat bidaliko dizkizugu zure domeinu pertsonalizatua gehitzeko, ordainketak konfiguratzeko, produktuak gehitzeko eta zure lehen eskaera lortzeko.",

    ],
    'verify-email-code' => [
        'subject' => ":name egiaztatzeko kodea",
        'category' => "SECURITY",
        'title' => "Posta elektronikoa egiaztatzeko kodea",
        'message' => "Kaixo :name,<br><br><b>:email</b> zure helbide elektroniko zuzena dela berresteko, idatzi hurrengo <b>10 minutuko </b> hurrengo kodea:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Zure denda prest dago| :name",
        'category' => "PAUS BATERA ZAUDE",
        'title' => "Konfigurazioa osatu da",
        'account_title' => "Zure kontua",
        'account_msg' => "Egiaztatu eta hasi saioa zure kontuan informazio honekin.",
        'shop_msg' => "Selldone enpresa-sistema eragilearen kontuaren informazioa.",

    ],

    'reset2fa' => [
        'category' => "SEGURTASUNAREN MEZU OFIZIALA",
        'title' => "Eskatu 2 urratseko saioa desgaitzeko",
        'message' => "Mezu elektroniko hau jasotzen ari zara **:name** konturako bi faktoreko autentifikazioa berrezartzeko eskaera jaso dugulako **:email** posta elektronikoarekin.<br><br>Zure konturako xehetasun hauek aurkitu ditugu:",
        'footer' => "Pasahitza berrezartzeko eskatu ez baduzu, ez da ekintza gehiago behar.",
        'action' => 'Desgaitu bi urratseko saioa',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Zure denda prest dago!",
        'category' => "MUNDUKO ONLINE DENDA BERRIA JAIO",
        'title' => "Zorionak, :name!",
        'message' => "<b>Zorionak, :name! Zure lineako negozio berria martxan dago orain!</b> Selldoners komunitatera ongi etorria emateko ilusioz gaude. Arrakasta lortzeko lehen urratsa eman duzu, eta hemen gaude bide guztietan laguntzeko.<br>Orain zure denda prest dagoela, ziurtatu zure bezeroen ordainketak zuzenean jasotzeko eta zure inperioa hazten has zaitezen. Inoiz laguntza behar baduzu, mezu bat besterik ez dugu faltako: gure laguntza-taldea beti dago zuretzako.<br><br><b>Hurrengo urrats garrantzitsuak:</b> Hasteko, ziurtatu ordainketak eta eragiketa errazak jasotzeko prestatuta zaudela. Fase bakoitzean gidatuko zaitugu zure denda ondo funtziona dezan.",
        'pdf-book' => "Ez galdu erantsitako esku-liburua: Egin zure negozioa joko bat bezala",

        'account' => [
            'title' => '1. urratsa: Sortu kontu bat Selldone zorroan',
            'message' => "Zure zorroan konturik ez baduzu, sortu bat. Selldone-k kuota kentzen du kontu honetatik. Kontu hau kargatu dezakezu, eta Selldonek kreditu kopuru bat ere kobratuko dizu, kontu hori negatiboa bada, zure webguneak eta dendak funtzionatzen jarraituko dute.",
            'action' => 'Hasi saioa zorroan',
        ],

        'shop-account' => [
            'title' => '2. urratsa: konektatu kontua dendara',
            'message' => "Ondoren, konektatu zorroaren kontua zure dendara. Joan <b>Store > Kontabilitatea > Faktura</b>ra eta lotu zure diru-zorroa. Horrek bermatzen du bezeroen ordainketa guztiak zuzenean zure banku-kontuan gordailatzen direla; Selldone-k ez du diru-sarrerarik kentzen.",
            'action' => 'Dendako fakturen panela',
        ],

        'gateway' => [
            'title' => '3. urratsa: Konektatu lineako ordainketa-pasabidea',
            'message' => "Orain, konfigura dezagun lineako ordainketa-pasabidea. Joan <b>Store > Kontabilitatea > Port</b> eta egin klik <b>Gehitu Port berria</b> aukeran. Hautatu zure moneta eta eskuragarri dauden ordainketa-pasabideen zerrenda ikusiko duzu. Atebide bat konektatzea azkarra eta erraza da, baina laguntza behar baduzu, begiratu lasai Selldone gidak edo jarri gurekin harremanetan.",
            'action' => 'Gehitu atari bat dendan',
        ],

        'domain' => [
            'title' => 'Azken urratsa: domeinu dedikatu bat konektatzea',
            'message' => "Orain, lotu zure domeinu pertsonalizatua zure dendara. Horri esker, bezeroek zure produktuak edo zerbitzuak erosteko eta zuri zuzenean ordainketak egin ditzakete.",
            'action' => 'Opari-txartel mugagabeak aurkeztu eta jasotzea',
        ],
    ],


    'basket-list' => [
        'item' => "elementua",
        'count' => "zenbaketa",
        'price' => "prezioa",
        'discount-code' => "Deskontu kodea",
        'customer-club' => 'Bezeroen Kluba',
        'shipping' => "Bidalketa",
        'total' => "Guztira",
        'offer' => "Eskaintza",
        'coupon' => "Kupoia",
        'lottery' => "Saria",
        'tax' => "Zerga",
        'tax_included' => "Prezioan sartuta",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metodoa',
        'amount' => 'Zenbatekoa',
        'giftcard' => 'Gift card',
        'payment' => 'Ordainketa',
    ],


    'shop-subscription-email' => [
        'category' => "Harpidetza eguneratzea",
        'title' => "Denda-lizentzia: :shop_title",
        'title-reserved' => "Erreserbatu lizentzia: :shop_title",
        'title-active' => "Lizentzia aktiboa: :shop_title",
        'title-finished' => "Amaitutako lizentzia: :shop_title",
        'title-cancel' => "Utzi lizentzia: :shop_title",
        'message' => "Zure dendako lizentzia plana eguneratu da,",
        'RESERVED' => "⚡ Zure harpidetza plana **erreserbatua** izan da.",
        'ACTIVE' => "🟢 Zure harpidetza plana **aktibatu da**.",
        'FINISHED' => "🚧 Zure harpidetza plana **bukatuta** dago.",
        'CANCEL' => "⛔ Zure harpidetza plana **bertan behera utzi da**.",
    ],

    'support' => [
        'subject' => "Laguntza Zentroa|:name erantzun zuen",
        'category' => "Laguntza zentroa",
        'title' => "Erantzun bat jaso duzu",
        'action' => "Ireki dendako administratzailea",
    ],

    'shop-customer-join' => [
        'subject' => "Sartu :shop_title",
        'category' => "Bezero berrien ospakizuna",
        'title' => "Pozik gaude zure kide izateagatik",
        'action' => "Bisitatu orain",
    ],

    'shop-vendor-join' => [
        'subject' => "Saltzaileak sartzea| :shop_title",
        'category' => "Saltzaile berrien ospakizuna",
        'title' => "Pozik gaude zure kide izateagatik",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Opari txartela:shop_title",
        'category' => "Gehitu txartel berria",
        'title' => "Zorionak, opari txartela jaso duzu",
        'action' => "Erosi orain",
        'message' => "Opari-txartel bat jaso duzu :balance :currency. Opari-txartel honekin gure dendan erosi ahal izango duzu.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Laguntza Zentroa| :shop",
        'category' => "euskarria",
        'title' => "Erantzun bat jaso duzu",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Eskaera Ordaindu | :order_id",
        'title' => "ordena",
        'message' => "Eskaera bat egin duzu gure dendan. Zure eskaera jaso dugu eta ordainketa berresten denean beste mezu elektroniko bat bidaliko dizugu."
    ,

        'payments' => 'Ordainketak',
    ],

    'order-payment' => [
        'subject' => "🛍 Ordainketa berrespena | :order_id",
        'title' => "Ordainketa-agindua",
        'message' => "Zure ordainketa amaitu da,<br> Zure eskaera jaso dugu. Eskaera bidaltzen duzunean beste mezu elektroniko bat bidaliko dizugu.",
    

        'payments' => 'Ordainketak',
    ],

    'order-update' => [
        'subject' => "🛍️ Eskaeraren egoera eguneratzea|:order_id eskaera",
        'title' => "Eskaeraren egoera eguneratzea",
        'message' => "Zure eskaera eguneratu da. Eskaera honen azken egoera egiazta dezakezu zure kontuan.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Zure eskaera prozesatzeko ilaran dago. Prestatzen ari direnean jakinaraziko dizugu.",
                'OrderConfirm' => "Zure eskaera berretsi da eta prestaketa hasi da.",
                'PreparingOrder' => "Zure eskaera prestatzen ari da eta laster bidaliko da.",
                'SentOrder' => "Zure eskaera bidali da. Laster jasoko duzu.",
                'ToCustomer' => "Zure eskaera entregatu da. Espero dugu disfrutatzea!",

                'PreparingOrder-PICKUP' => "Zure eskaera prestatzen ari da. Jakinarazpen bat jasoko duzu jasotzeko prest dagoenean.",
                'SentOrder-PICKUP' => "Zure eskaera prest dago jasotzeko. Mesedez, etorri dendara biltzera.",
                'ToCustomer-PICKUP' => "Zure eskaera jaso da. Espero dugu disfrutatzea!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Zure eskaera prozesatzeko ilaran dago. Prest dagoenean jakinaraziko dizugu.",
                'OrderConfirm' => "Zure eskaera berretsi da eta prestatzen ari da.",
                'PreparingOrder' => "Zure eskaera prestatzen ari da eta laster bidaliko dizugu.",
                'ToCustomer' => "Zure eskaera birtuala zure kontuan entregatu da. Eskerrik asko!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Zure zerbitzu eskaera ilaran dago. Hasten garenean jakinaraziko dizugu.",
                'OrderConfirm' => "Zure zerbitzua berretsi da eta hasteko prestatzen ari gara.",
                'PreparingOrder' => "Zure zerbitzua prestatzen ari gara eta amaitutakoan jakinaraziko dizugu.",
                'ToCustomer' => "Zure zerbitzua osatu da. Eskerrik asko gu aukeratzeagatik!"
            ],
            'FILE' => [
                'PreparingOrder' => "Zure fitxategia prestatzen ari da eta laster egongo da eskuragarri.",
                'ToCustomer' => "Zure fitxategia prest dago eta entregatu da. Orain deskargatu dezakezu."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Zure harpidetza eskaera ilaran dago. Prozesatzen hasten denean jakinaraziko dizugu.",
                'OrderConfirm' => "Zure harpidetza berretsi da eta konfiguratzen ari da.",
                'PreparingOrder' => "Zure harpidetza prestatzen ari gara eta laster hasiko da.",
                'SentOrder' => "Zure harpidetza aktibatu da. Etengabeko eguneraketak jasoko dituzu.",
                'ToCustomer' => "Zure harpidetza zerbitzua behar bezala aktibatu da."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Zorionak :name|Bono berria: :title',
        'category' => "ZORIONAK, BONO BERRIA",
        'message' => "Kaixo :name,<br><br>Bou berri bat jaso duzu opari gisa! Are bonu gehiago irabaz ditzakezu Selldone zure lagunei eta ezagutzen dituzun guztiei aurkeztuz. Bono honek balio du **:price :currency**.<br><br>Lehen urratsa eman duzu eta hemen gaude zure bonoarekin eginbide berriak desblokeatzen laguntzeko! Mesedez, hasi saioa **:email**-rekin eta aurkitu zure bonua Denda **Arbela** > **Ezarpenak** > **Lizentzia**.<br><br>Zorionak!",
        'action' => "Nire aginte-panela",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Zorionak, :name maitea|Opari berezi bat jaso duzu!',
        'category' => "Opari bat jasotzearen iragarpena",
        'title' => "Zuretzako opariak",
        'message' => "Kaixo :name, Selldone-ren opari berezi bat jaso duzula jakinarazteko ilusioz gaude! 🎉 Opari gehiago irabaz ditzakezu aktibo mantenduz, denda haziz eta Selldone-n zure esperientzia hobetuz. Zure oparia ikusteko, besterik gabe, hasi saioa :email-rekin eta bilatu zure aginte-panelaren goiko eskuineko izkinan.<br><br>Opari honek balio du **:price :currency**, eta erraz sartu dezakezu zure zorroan zure QQ00008Q<br>Q009QQQQ009QQ009QQ. zure dendaren lizentzia berritzeko eta are tresna indartsuagoak desblokeatzeko zure lineako negozioa sustatzeko!",
        'action' => "Opariak",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Eskaera berria jaso da | :order_id",
        'title' => "New Order",
        'message' => "Eskaera berri bat jaso duzu. Mesedez, joan zure dendako eskaerak prozesatzeko orrira.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Zure betetako informazioa',
        'output-form-title' => 'Erositako elementuaren informazioa',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|:time asteko txostena',
        'title' => 'Asteko dendaren errendimenduaren txostena',
        'message' => "Hau da zure dendaren asteko txostena <b>:start</b>-ra <b>:end</b>-ra. Txosten honek zure negozioa hobetzeko aholkuak biltzen ditu, zure lineako dendaren egoera eta azken eskaerak ere egiaztatu ditzakezu. Espero dut egun eta aste ona izatea aurretik."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Zure :amount aurrezte-txostena azken hiru hilabeteetan| :shop_title',
        'title' => 'Zure negozio-jarduerari, sariei eta aurrezki finantzarioei buruzko sasoiko txostena',
        'message' => "Hau da zure <b>:shop_title</b> sasoiko txostena <b>:start</b> <b>:end</b>ra."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Konektatutako kontuak',
        'sub-title' => 'Zein da nire dendara konektatuta dauden zorro-kontuen azken egoera?',
        'view-wallet' => 'Ikusi zorroa',
        'tip-title' => 'Aholku garrantzitsuak',
        'tip' => "Konfiguratu doako Selldone zorro bat eta lotu zure dendara. Zure saldoa negatiboa bada ere, bezeroek erosketak egin eta ordaindu ditzakete arazorik gabe. Ez kezkatu, zure dendaren eragiketak eta datuek ondo jarraituko dute hilabetez gehienez, etenik gabe.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Konektatu kontura'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplikazioak instalatuta',
        'sub-title' => 'Aste honetan zure dendan instalatu dituzun aplikazioen zerrenda.',
        'tip' => "Zure dendarako aplikazio gehiago aurkitu nahi dituzu?",
        'view-app-store' => 'Bisitatu Selldone App Store-ra..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Zure dendako bot-ak',
        'sub-title' => 'Salmenta bot aktiboak nire dendan.',
        'tip-title' => 'Bot salmenta',
        'tip' => "Selldone-k salmenta-bot automatikoak eskaini dizkizu. Egin behar duzun guztia Gehigarriak> Bots panelera joan eta zure dendako bot-ak aktibatzea da. Kontuan izan dagokion zerbitzua zure herrialdean egon behar dela.",
        'view-bots' => 'Kudeatu bot-ak',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Bezeroekiko komunikazioa',
        'sub-title' => 'Zenbat kontaktu izan ditut nire bezeroekin aste honetan?',
        'faqs' => 'Galdera arruntak',
        'tickets' => 'Bezeroentzako Tiketak',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Erabiltzaileen egoera',
        'sub-title' => ':start-tik :end-rako jarduera',
        'users' => [
            'title' => 'Bezeroak',
            'subtitle' => 'Erregistratu Erabiltzaileak',
        ],
        'views' => [
            'title' => 'Bisitak',
            'subtitle' => 'Zenbat aldiz bisitatu duzu denda',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Itzulitako Erabiltzaileak',

        'shop_views' => 'Denda Ikuspegiak',
        'baskets' => [
            'title' => 'Erosketa Saskia',
            'subtitle' => 'Erosketa saski berrien kopuruaren berri eman',
        ],
        'products' => [
            'title' => 'Produktuen ikuspegi orokorra',
            'subtitle' => 'Dendako produktuen egoera motaren arabera',
            'value_name' => 'Produktuak'
        ],
        'products_count' => 'Produktu motak',
        'views_count' => 'Ikusi kopurua',
        'sell_count' => 'Salmenta kopurua',
        'send_count' => 'Bidalketa kopurua',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Drop Shipping Selldone saltzaile nagusientzako panela.',
        'total_fulfillments' => 'Jasotako eskaerak guztira',
        'ds_count' => 'Jasotako Aginduak',
        'statistics_title' => 'Jasotako aginduen berri eman',
        'ds_cancels' => 'Utzi interfazearen saltzaileak',
        'ds_rejects' => 'Zuk bertan behera utzi',
        'tip' => "Salgaien saltzaile nagusia al zara? Biltegi, fabrika edo produktuen banatzaile baten jabea al zara? Zure produktuak beste saltzaile batzuei eskain diezaiekezu Selldone Drop Shipping zerbitzuan zure produktua eskala handian saltzeko. Bidali mezu elektroniko bat support@selldone.com helbidera gidatzeko.",
        'view-drop-shipping-panel' => 'Hasi saioa handizkako panelean',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Truke-tasak',
        'sub-title' => 'Zure dendako azken moneta bihurketa-tasen zerrenda.',
        'from' => 'Iturburu-moneta',
        'to' => 'Helmugako moneta',
        'rate' => 'Bihurtze-tasa',
        'view-exchange-panel' => 'Kudeatu truke-tasak',
    

        'vew-exchange-panel' => 'truke-tasak kudeatzeko panela',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Adituen kontratuak',
        'sub-title' => 'Zein profesionalek lan egiten dute nire dendan?',
        'cost' => 'Kontratuaren zenbatekoa',
        'duration' => 'Iraupena',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Utzi',
        'end_at' => 'Entrega data',
        'tip' => 'Kontratatu Selldone-ko aditu nagusiak zure negozioa hazten laguntzeko.',
        'view-experts' => 'Egin klik hasteko.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Salatu ordainketa-pasabide aktiboen berri dendan :shop.',
        'tip-title' => 'Aholku garrantzitsuak',
        'tip' => "Joan zure dendako atariaren kudeaketa orrira eta gehitu gutxienez ataka bat minutu gutxitan. Zure bezeroei azkar eta segurtasunez ordaintzea gustatzen zaie lineako atarien bidez.",
        'view-shop-gateways' => 'Hasi saioa nire dendaren atariaren kudeaketan.',
        'view-gateways' => 'Ikusi atebide gehiago',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Aginduak',
        'sub-title' => 'Aste honetan jaso ditudan eskaeren zerrenda.',
        'total_baskets' => 'Eskaerak guztira',
        'total_posBaskets' => 'Diru-eskaerak guztira',
        'pos-title' => 'POS Denda Kutxa',
        'chart-label' => 'Eskaerak beteta (eskaera hauek ez dira zertan ordaindu behar!)',
        'tip-title' => 'Gehiago saiatu beharko zenuke...',
        'tip' => "Arrakasta sinplerik ez.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Prozesatzeko zentroa',
        'sub-title' => 'Zenbat eskaera prozesatu dugu dendan aste honetan?',
        'tip-title' => 'Ez zenuen salmentarik!',
        'tip' => "Zoritxarrez, aste honetan ez duzu salmentarik izan. Zure dendara gehiago lortu behar duzu. Produktu gehiago gehi ditzakezu, irudi hobeak aukeratu edo zure produktuen deskribapen hobeak idatzi. Demagun lanaldi osoko lana zure negoziorako. Ongi egiten baduzu eta ez baduzu etsitzen, arrakasta izango duzu.",
        'view-process-center' => 'Ikusi prozesu-zentroa',
        'return' => [
            'title' => 'Itzulitako eskaera',
            'subtitle' => 'Itzulitako eskaeren berri eman.',
            'tip-title' => 'Ba al zenekien hori...',
            'tip' => "Selldone POS-rekin behar adina kutxa erregistra ditzakezu! Zure tableta, mugikorra edo ordenagailu eramangarria izan, edozein gailu bihur dezakezu zure dendako salmenta-puntu. Erraza, azkar konfiguratzen da eta zure zerbitzarirako guztiz prestatuta dago. Hasi gaur erabiltzen!",
            'view-pos' => 'Hasi saioa Nire lineako denda kutxategian'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Saioak',
        'sub-title' => 'Zenbat aldiz bisitatu nuen nire denda?',
        'countries-title' => 'Zein herrialde izan dira bisitatuenak?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Dirua irabazi nahi al duzu dolar bat gastatu gabe?',
        'message' => "Kaixo :name, Selldone-rekin irabazten hasteko garaia da! Joan Arbela > Gehiago > Dirua irabaztea > Lortu zure erreferentzia-esteka. Partekatu esteka zure lagunekin eta irabazi opari-txartelak eta haien ordainketen zati bat. Zatirik onena? Zuk eta zure lagunak opari-txartel bat jasoko duzu!",
        'action' => 'Ikusi nire aurkezpen esteka',
        'mail-clip' => "<b style='color: #C2185B'>Garrantzitsua:</b> mezu elektronikoaren iraupena mugatzen duten Gmail bezalako posta-zerbitzuak erabiltzen badituzu, bilatu mezuaren amaieran aukera hau txosten osoa ikusteko eta egin klik gainean:",

        'no-coin-reward' => "<b style='color: #C2185B'>Barkatu:</b> Zure jarduerak ez du betetzen SEL Coins doako saria lortzeko eskakizuna. Saiatu gehiago eta saldu gehiago zure dendan hurrengo denboraldirako.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Zorionak:</b> Lan bikaina! Zure errendimendu bikainean oinarrituta, :amount SEL Txanponak zure kontuan sartu ditugu sari gisa.",

        'need-buy-license' => "<b>Mailatu zure negozioa:</b> Badirudi oraindik ez duzula zure webgunerako harpidetza-planik erregistratu! Bertsio-berritu orain eginbide gehiago desblokeatzeko :amount bakarrik hilean urtero ordainduz gero.",
        'not-afford-message' => "Ordainketarekin ordaindu ezin baduzu edo arazorik baduzu, esan lasai support@selldone.com bidez.",
        'add-domain' => "<b>Zergatik ez duzu domeinu pertsonalizatu bat zure negoziorako?</b><br> Gehitu domeinu bat zure webgunera orain; doakoa da!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone bat da<del> produktua</del> <span style = 'color: forestgreen'>komunitatea</span> .<br> Izan zaitez Selldoner profesionala!",
        'message' => "Jarraitu Selldone-ren orrialde ofizialak Twitter, LinkedIn eta sare sozialetan. Bidal iezaguzu iruzkin, eskaera edo kritika edo parte hartu Selldone-ri buruzko eztabaidetan. <b>Zuk egiten duzun</b> Selldone komunitatearen parte gara ere."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Aguakatearen eskaera berriak jaso ditu | :shop_title :time',
        'title' => "Azken 24 orduetako errendimendu-txostena",
        'message' => "Zure bezeroak zure eskaerak berrikusi eta tasatuko zain daude. Erantzun zure bezeroen eskaerei ahalik eta azkarren salmenta gehiago lortzeko.",
        'card_title' => "Eskaerak ilaran",
        'card_subtitle' => ":date geroztik",

        'card_payed' => "Ordaindutako eskaerak"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Erantzun zure mezuari :community_title',
        'title' => ":name, eta :count besteek zure mezuetan iruzkindu duten.",
        'message' => "Kaixo :name, zure argitalpenak arreta pizten ari dira! Iruzkinak jaso dituzu gure komunitatean. Hasi saioa zure kontuan eztabaidan sartzeko eta denek esaten dutena ikusteko.",
        'title-simple' => ":name-k zure mezua iruzkindu du!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Erantzun zure gaiari :topic_title',
        'title' => ":name eta :count beste batzuek erantzun dute zure gaiari buruz.",
        'message' => "Kaixo :name, zure gaia arreta pizten ari da! Erantzunak jaso dituzu gure komunitatean. Hasi saioa zure kontuan eztabaidan sartzeko eta denek esaten dutena ikusteko.",
        'title-simple' => ":name-k erantzun du zure gaiari buruz.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Saio-hasiera berria :name',
        'category' => 'Segurtasun jakinarazpenak',
        'title' => "Hasi saioa Kontuan",
        'message' => ":name agurgarria, zure Selldone kontuan saioa hasteko detektatu da.",   // Login in selldone (seller)
        'message-shop' => "Maitea :name, saioa hasi zara :shop_title .",  // Login in shop (buyer)

        'footer' => "Hasi saioa ez bazaude, mesedez aldatu pasahitza.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Erretiratzea",
        'deposit' => "Gordailua",

        'withdraw_subject' => "Atera :account kontutik",
        'deposit_subject' => "Gordailua :account kontuan",

        'message' => "Diru transferentzia ondorengo zehaztapenekin egin da.",

        'type' => "Transakzio mota",

        'from' => "Iturburu kontua",
        'to' => "Destination account",

        'desc' => "Transakzioaren deskribapena",
        'action' => "Ikusi transakzioa",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Garrantzitsua! Arauen urraketa| :shop",
        'category' => "Informazio kritikoa",
        'title' => "Zure denda zigortua izan da",
        'action' => "Ireki dendaren panela",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter-k Selldone sartzera gonbidatu zaitu",
        'title' => ":name-k :amount bidali dizu zure lineako denda berria abiarazten laguntzeko eta dirua irabazteko!",
        'message' => "Kaixo **:receiver_name**,<br><br>Ongi etorri Selldonera! Selldone-n, zure merkataritza elektronikoko gunea, bloga, lineako komunitatea erraz sor ditzakezu eta baita lineako POS sistema bat ere konfigura dezakezu pertsonalki saltzeko, hori guztia minutu gutxitan. Zure negozioa hobea, azkarragoa eta exekutatzeko errazagoa izan dadin diseinatutako lineako negozio-sistema osoa da.<br><br>Eman izena <b>:date</b> eta jaso :amount bonoa hasteko!",
        'accept' => "Onartu gonbidapena",
        'owner' => "-ren jabea",
        'join-date' => "Selldone-n geroztik",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Berreskuratzeko esteka| :shop",
        'category' => "Dendaren segurtasuna",
        'title' => "Denda berreskuratzeko esteka <b>:shop_name</b> .",
        'message' => "Mezu elektroniko hau zure denda leheneratzeko eskatu duzulako bidali dizugu. Beheko estekan klik eginez gero, zure denda eta hari dagozkion datu guztiak berreskuratuko dira.",
        'action' => "Berretsi denda berreskuratzea",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Zenbat diru aurreztu zuen Selldone-k zure negoziorako?',
        'sub-title' => ':start datatik :end',
        'infrastructure' => [
            'title' => 'Azpiegiturak',
            'subtitle' => 'Zerbitzariak, CDN, biltegiratzea eta hodeiko beste zerbitzu batzuk',
        ],
        'experts' => [
            'title' => 'Aditu eta Langileak',
            'subtitle' => 'Garatzaileak, mantentzea eta laguntza',
        ],
        'total_save' => 'Guztira aurreztutako dirua'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Zure errendimendua',
        'sub-title' => 'Negozioen ikuspegi orokorra :start :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Itzulitako Erabiltzaileak',

        'shop_views' => 'Denda Ikuspegiak',
        'baskets' => [
            'title' => 'Erosketa Saskia',
            'subtitle' => 'Erosketa saski berrien kopuruaren berri eman',

        ],
        'products' => [
            'title' => 'Produktuen ikuspegi orokorra',
            'subtitle' => 'Dendako produktuen egoera motaren arabera',
            'value_name' => 'Produktuak'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Webguneko orrialdeen bistak guztira',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Eskaera berri bat jaso duzu. Mesedez, joan zure saltzaileen paneleko eskaerak prozesatzeko orrira.",
        'subject' => "🛍 Eskaera berria jaso da | :order_id",
        'your_revenue' => "Zure diru-sarrerak",
    ],
    'vendor-invite' => [
        'title' => 'Saltzaileen gonbidapena',
        'message' => ":shop_name-ren saltzaile izateko gonbidapena jaso duzu. Onartu edo baztertu dezakezu hurrengo botoietan klik eginez.",
        'subject' => ":shop_name |Gure saltzaile izateko gonbidapena",
        'accept' => "Onartu eta bihurtu saltzaile",
        'reject' => "Baztertu",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Gure taldean sartzeko gonbidapena',
        'message' => ":vendor_name-n sartzera gonbidatu zaituzte :shop_name-n. Gonbidapen hau onartu edo ukatu dezakezu beheko botoiak erabiliz.",
        'subject' => ":vendor_name sartzeko gonbidapena|Egin zaitez Taldekide",
        'accept' => "Onartu eta sartu taldean",
        'reject' => "Baztertu",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Zure saioa hasteko kodea :shop",
        'header-message' => "Mezu elektroniko hau bidaltzen dizugu dendarako saioa hasteko kodea eskatu duzulako. Mesedez, aurkitu behean zure behin-behineko pasahitza (OTP):",
        'footer-message' => "Kode honek 10 minutuko balioa izango du. Saio-hasierako kode hau eskatu ez baduzu, mesedez, ez ikusi mezu elektroniko honi."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Egiaztatu posta elektronikoa| :shop",
        'title' => 'Posta elektronikoaren egiaztapena',
        'header-message' => "Kaixo :name,<br>Mesedez, berretsi **:email** zure helbide elektronikoa dela, beheko botoian klik eginez edo beheko esteka erabiliz 48 orduko epean.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produktuen eguneraketak| :shop",
        'title' => "Produktuen egoerari buruzko eguneratzea - Azken 24 orduak",
        'message' => "Espero dut mezu honek ondo aurkitzea. Eguneratze labur bat da gure plataforman azken 24 orduetan zure produktuen egoeraren berri emateko.\nTarte horretan, produktu batzuen egoeran aldaketak egon dira. Aldaketa hauek erosketak, akzioen eguneraketak edo erlazionatutako beste gertakari batzuk izan daitezke.\nProduktu bakoitzari buruzko informazio zehatzagoa lortzeko, hasi saioa zure kontuan eta egiaztatu 'Produktuen egoera' atala.",
        'action' => "Ireki Saltzaileen panela",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Jasotako eskaerak| :shop | :date",
        'title' => "Multzoko eskaeren jakinarazpena",
        'message' => "Eskaera handien sorta bat jaso duzu. Mesedez, bisitatu zure paneleko eskaerak prozesatzeko orria xehetasun gehiago lortzeko. Eskaera-zerrenda ere deskarga dezakezu emandako esteka seguruaren bidez, 7 egunetarako balio duena.<br><br>\n        <b>GARRANTZITSUA:</b> Esteka honek 7 egunetarako balio du.<br>\n        Esteka hau dinamikoa da, beraz, bertan klik egiten duzun bakoitzean, data zehatz honetarako eskaera eguneratuenak jasoko dituzu. <b>Esan nahi du eskaeraren ordainketa-egoera ukatu izatera aldatzen bada, ez duzula eskaera hori deskargatutako CSVan ikusiko, edo eskaera ordaintzen bada, zerrendan agertuko dela.</b><br><br>\n        <ul>\n            <li>CSV-k :date.</li>-n data erreserbatua duten ordaindutako eskaerak ditu\n            <li>Erreserbatutako data erabiltzaileak eskaera orrian ordaintzea sakatzen duen data da.</li>\n        </ul>\n        <b>Eskaera bikoiztuak saihesteko, egiaztatu beti Eskaera ID bidali aurretik.</b>",
        'action' => "Deskargatu Eskaera Zerrenda",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Zure eskaerako elementu batzuk ez dira onartu eta ezin dira entregatu. Elementu horien zenbatekoa laster itzuliko da zure txartelari."
    ]

];
