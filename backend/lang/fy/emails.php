<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Dit berjocht wolkom in nije keaper wolkom yn \'e winkel.',
        ShopMailTemplateCodes::OrderCheckout => 'Dizze notifikaasje wurdt stjoerd as in keaper in bestelling befêstiget.',
        ShopMailTemplateCodes::OrderPayment => 'Dizze notifikaasje befêstiget de suksesfolle betelling makke troch in klant.',
        ShopMailTemplateCodes::OrderUpdate => 'Dit berjocht wurdt stjoerd om in keaper te aktualisearjen oer de status fan har bestelling.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Dit berjocht wurdt stjoerd nei in ferkeaper om har te melden fan in befêstige bestelling.',
        ShopMailTemplateCodes::PosCheckout => 'Dizze notifikaasje wurdt stjoerd om in bestelling fan ferkeappunt foar in keaper te befêstigjen.',
        ShopMailTemplateCodes::PosPayment => 'Dizze notifikaasje befêstiget in betelling fan in ferkeappunt makke troch in keaper.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Dit berjocht meldt de ferkeaper fan in oankeap makke op har ferkeappunt.',
        ShopMailTemplateCodes::ShopContact => 'Dizze notifikaasje wurdt ferstjoerd as in kontaktformulier yntsjinne is.',
        ShopMailTemplateCodes::ShopGiftCard => 'Dizze notifikaasje ynformearret in brûker dat se in kadokaart krigen hawwe.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Dit berjocht wolkom in nije ferkeaper wolkom yn \'e winkel.',
        ShopMailTemplateCodes::ShopVendorInvite => "Dit berjocht is ferstjoerd om in ferkeaper út te noegjen om mei te dwaan oan jo merk.",
        ShopMailTemplateCodes::ShopVendorOrder => "Dit berjocht wurdt stjoerd nei de ferkeaper as in bestelling wurdt ûntfongen yn beide betelle of Cash by Delivery (COD) status.",
        ShopMailTemplateCodes::ShopVendorProducts => "Deistich ferstjoerd om leveransiers te aktualisearjen oer de status fan har produkten.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Dit berjocht wurdt stjoerd om in ferkeaper út te noegjen om mei te dwaan oan jo merk.",

        ShopMailTemplateCodes::UserLogin => "Notify de brûker mei ynloggegevens, ynklusyf IP adres, datum, en apparaat, foar feiligens doelen.",
        ShopMailTemplateCodes::LoginCode => "Stjoer in ienmalige wachtwurdkoade foar brûkers om oan te melden by de winkel.",

        ShopMailTemplateCodes::EmailVerifyLink => "Stjoer in keppeling om it e-postadres fan de brûker te ferifiearjen. Dizze e-post wurdt ferstjoerd as in brûker registrearret troch SMS en har e-post ynfiert. It wurdt net ferstjoerd as in brûker direkt registrearret mei sosjale oanmelding of e-post.",

        ShopMailTemplateCodes::EmailBulkOrder => "Stjoer in list mei ûntfongen en betelle oarders yn bulk foar in spesifike dei."


    ,

    ],


    'global' => [
        'greetings' => 'Hoi, :name!',
        'end-statement' => 'Support team',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Help nedich? Freegje by [support@selldone.com](mailto:support@selldone.com) of besykje ús [helpsintrum](https://selldone.com/community).",
        'selldone-team' => 'It Selldone team',
        'footer-shop' => "As jo help nedich hawwe mei wat dan ek, aarzel dan net om ús in e-post te stjoeren: :shop_mail",
        'accept' => "Oannimme",
        'reject' => "Reject",
        'verify' => "ferifiearje",
        'title' => "Titel",
        'value' => "Wearde",
        'description' => "Beskriuwing",
        'shop' => "Winkel",
        'shop-info' => "Winkel ynformaasje",
        'user' => "brûker",
        'user-info' => "Account ynformaasje",
        'license' => "Fergunning ferliene",
        'status' => "Status",
        'start' => "Start",
        'end' => "Ein",
        'renewal' => "Fernijing",
        'view' => "Fisy",

        'balance' => "Lykwicht",
        'card_number' => "Card Number",
        'cvv' => "Cvv",
        'expire_date' => "Ferfaldatum",

        'Dashboard' => "Dashboard",
        'order' => "oarder",
        'view_order' => "Besjoch oarder",
        'pay_now' => "Pay now",

        'official_selldone' => "OFFISJEL FERKOCHT",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Muntsoarte",
        'free-balance' => "Fergees lykwicht",
        'locked-balance' => "Beskoattele lykwicht",
        'bot' => "Bot",
        'requests' => "Fersiken",
        'baskets' => 'Karren',
        'physical' => "Lichaamlik",
        'virtual' => "Firtuele",
        'file' => "Map",
        'service' => "Tsjinst",
        'fulfillment' => "Ferfolling",
        'open' => "Iepen",
        'reserved' => "Reservearre",
        'canceled' => "Annulearre",
        'payed' => "Betelle",
        'cod' => "COD",
        'orders-count' => 'Oarders',
        'payments-count' => 'Betellingen',
        'confirms-count' => 'Befêstiget',
        'sends-count' => 'Stjoert',
        'delivers-count' => 'Levert',
        'count' => 'Telle',
        'transactions-count' => 'Transaksjes telle',
        'success-transactions' => 'Sukses transaksjes',
        'total-amount' => 'Totaalbedrach',
        'amount' => 'Tal',
        'wage' => 'Wage',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Libje',
        'CheckQueue' => 'Kontrolearje wachtrige',
        'OrderConfirm' => 'Order befêstigje',
        'PreparingOrder' => 'Tariede oarder',
        'SentOrder' => 'Bestelling ferstjoerd',
        'ToCustomer' => 'Levere oan klant',
        'Pending' => 'Yn ôfwachting',
        'Accepted' => 'Akseptearre',
        'Rejected' => 'Ofwiisd',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Tillefoan',
        'total' => 'Totaal',
        'view-detail' => 'Lit detail sjen',
        'empty' => 'Leech',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Antwurdzje',
        'reactions' => 'Reaksjes',
        'Comments' => 'Comments',
        'last-comment' => 'Lêste opmerking',
        'response-to' => 'Reaksje op',
        'posts' => 'Posts',
        'post' => 'Peal',

        'name' => 'Namme',
        'email' => 'Email',
        'type' => 'type',
        'device' => 'Apparaat',
        'platform' => 'Perron',
        'browser' => 'Browser',
        'time' => 'Tiid',
        'Wallet' => 'Wallet',
        'date' => 'Datum',

        'account' => 'Rekken',
        'transaction' => 'Transaksje',
        'fee' => 'Honorarium',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategory',
        'password' => 'Wachtwurd',
        'verify-login' => "Ferifiearje & Oanmelde",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "No keapje",
        'add-domain' => "Add Domain",
        'views' => 'Views',


        'country' => 'Lân',
        'address' => 'adres',
        'postal' => 'postkoade',
        'building_no' => 'Gebou #',
        'building_unit' => 'Ienheid #',
        'message' => 'Berjocht',


        'customer' => 'Klant',
        'cart-items' => 'Cart items',
        'payment' => 'Betelling',
        'receiver' => 'Untfanger',
        'virtual-items' => 'Firtuele items',
        'no-payment' => 'Gjin betelling!',

        'enable' => 'Ynskeakelje',
        'access' => 'Tagong',
        'bank' => 'Bank ynformaasje',

        'vendor' => 'Ferkeaper',

        'view_content' => "Besjoch folsleine ynhâld",
        'files' => 'Bestannen',
        'download' => 'Download',
        'file_name' => 'Triemnamme',
        'file_size' => 'Grutte',

        'subscription' => 'Ynskriuwing',
        'products' => 'Products',
        'vendor_products' => 'Ferkeaper Products',

        'pickup' => 'Pickup',

        'minutes' => 'Minuten',
        'hours' => 'Oeren',

        'refund' => 'Refund',
        'recipient_address' => 'Untfanger Adres',
        'signature' => 'Hantekening',
        'blockchain' => 'Blockchain',
        'details' => 'Details',


    

        'Shop' => 'Winkel',
        'dashboard' => 'dashboard',
        'comments' => 'opmerkings',
        'wallet' => 'portemonnee',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Prestaasjerapport, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Seizoenrapport, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hoi',
            'name' => 'Goedkarre, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Stypje :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Ferifiearje, Selldone'
        ],
        'Welcome' => [
            'id' => 'hoi',
            'name' => 'Mienskip, Selldone'
        ],
        'NewShop' => [
            'id' => 'keaplju',
            'name' => 'Goedkarre, Selldone'
        ],
        'Approve' => [
            'id' => 'goedkarre',
            'name' => 'Goedkarre, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Oarders Management :name'
        ],

        'Recovery' => [
            'id' => 'herstel',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Yn ôfwachting ⌛',
        'PAYED' => 'Betelle ✅',
        'CANCELED' => 'Annulearre ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Behearder',
            'OFFICER' => 'Offisier en tafersjochhâlder',
            'AUDITING' => 'Auditing manager',
            'EMPLOYEE' => 'Meiwurker',
            'PRODUCT' => 'Produkt manager',
            'CONTENT' => 'Ynhâld behearder',
            'MARKETING' => 'Marketing manager',
            'VIEWER' => 'Viewer',

        ],
        'subject' => ":inviter útnoege jo as :level| :shop",
        'category' => "Personiel útnoeging",
        'title' => "Jo binne útnoege foar <b>:shop_name</b> as <b>:level</b> .",
        'message' => "Jo hawwe in útnoeging krigen om gear te wurkjen mei it <b>:shop_title</b> team yn bedriuw. Jo hawwe de opsje om te akseptearjen of wegerje dit oanbod. As jo ​​​​kieze om te akseptearjen, meld jo dan oan by de Selldone-tsjinst om jo beslút te befêstigjen. Nei befêstiging krije jo tagong ta de seksje foar winkelbehear.",

    ],

    'welcome-email' => [
        'subject' => "👋 Wolkom :name, lit ús begjinne mei Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Wolkom by Selldone",
        'message' => "Tankewol foar it kiezen fan Selldone! Jo binne no diel fan in libbene mienskip dy't wrâldwide ferkeapers ferbynt mei klanten, pleatslike bedriuwen oan bedriuwen, en partikulieren mei korporaasjes. Al ús Master- en Pro-ark binne foar jo beskikber **fergees** en **ûnbeheind**. Wy binne hjir om jo te stypjen en de doarren te iepenjen nei jo sukses.",

        'index' => "Stap :step.",

        'step-domain' => [
            'title' => 'Foegje jo oanpaste domein ta',
            'message' => "Om te begjinnen, foegje jo oanpaste domein fergees ta yn it Winkel Dashboard ûnder Ynstellings> Domeinynstellingen.",
            'action' => 'Behear My Domains',
        ],
        'step-landing' => [
            'title' => 'Oanpasse jo thússide',
            'message' => "Personalisearje jo thússide troch te gean nei Dashboard> Siden. Kies in lâningsside of meitsje in nije. It is maklik en yntuïtyf, en jo kinne der direkt oan begjinne te wurkjen.",
            'action' => 'Myn lâningsside oanpasse',
        ],
        'step-payment' => [
            'title' => 'Setup Payment Methods',
            'message' => "Begjin betellingen direkt te akseptearjen op jo bankrekken. Om jo betellingproviders lykas Stripe, PayPal, en mear te ferbinen, gean nei Dashboard> Accounting> Gateway.",
            'action' => 'Add Payment Methods',
        ],
        'step-products' => [
            'title' => 'Foegje jo produkten ta',
            'message' => "Foegje maklik produkten en kategoryen ta yn it Dashboard> Produkten. It is krekt as it behearen fan bestannen en mappen op jo PC - folslein slepe-en-drop klear. Jo kinne ek bulk ymportearje produkten mei Excel. In foarbyldsjabloan is beskikber om jo te helpen te begjinnen.",
            'action' => 'Behear myn produkten',
        ],
        'step-shipping' => [
            'title' => 'Setup Shipping Methods',
            'message' => "Om klanten op te rekkenjen foar ferstjoering, definiearje jo ferstjoermetoaden yn it Dashboard> Logistyk> Ferstjoering. Jo kinne ferskate prizen en stipe ynstelle foar ferskate lokaasjes. Ferjit net om jo oarsprong fan jo pakhús yn te stellen yn Dashboard> Logistyk> Warehouse.",
            'action' => 'Beheare Shipping Metoaden',
        ],
    

        'seller' => [
            'title' => 'Binne jo in ferkeaper?',
            'message' => 'Om te begjinnen mei ferkeapjen, fier jo dashboard yn yn Selldone fia de link hjirûnder en meitsje jo earste winkel folslein fergees. Dit sil in pear minuten duorje en jo sille jo eigen winkel en online side hawwe. Wy sille jo dan liede nei de folgjende stappen en krije de betellingspoarte.',
            'action' => 'Oanmelde by myn dashboard',
        ],
        'buyer' => [
            'title' => 'Ik bin in keaper',
            'message' => 'Lokwinske. As jo ienris lid binne fan Selldone, sille jo alle problemen fan lidmaatskip en autentikaasje yn online winkels kwytreitsje. Om te profitearjen fan elke winkel en side dy\'t it Selldone-platfoarm brûkt, kinne jo ynlogge mei ien klik en meitsje jo oankeap ienfâldich, fluch en feilich.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet> Account> Charge',
        'title' => "Sukses Charge",
        'message' => "Jo akkount <b>:account_number</b> is <b>:amount</b> mei súkses belêste.",
        'account' => 'Rekken',
        'charge' => 'Kosten',
        'balance' => 'Lykwicht',
        'footer' => "Meitsje bedriuw maklik, berikber en tagonklik foar elkenien oer de hiele wrâld."
    ],

    'verify-email' => [
        'subject' => "🙌 Folje jo oanmelding by Selldone yn! Ferifiearje keppeling.",
        'category' => "JO BINNE IEN STAP FER",
        'title' => "Kontrolearje jo email adres",
        'message' => "Hoi :name,<br><br>Tankewol foar it kiezen fan Selldone!<br><br>Om te befêstigjen dat <b>:email</b> jo juste e-postadres is, of brûk de keppeling hjirûnder. Jo hawwe 48 oeren om dizze ferifikaasje te foltôgjen.",
        'footer' => "As jo problemen hawwe mei it klikken op de knop Ferifiearje, kopiearje en plakke de URL hjirûnder yn jo webblêder: :activation_url",
        'next-step' => "Folgjende sille wy jo wat nuttich materiaal en in stap-foar-stap hantlieding stjoere om it maklik foar jo te meitsjen om jo oanpaste domein ta te foegjen, betellingen yn te stellen, produkten ta te foegjen en jo earste bestelling te krijen.",

    ],
    'verify-email-code' => [
        'subject' => "Ferifikaasjekoade foar :name",
        'category' => "SECURITY",
        'title' => "E-post ferifikaasjekoade",
        'message' => "Hoi :name,<br><br>Om te befêstigjen dat <b>:email</b> jo juste e-mailadres is, fier dan de folgjende koade yn binnen de folgjende <b>10 minuten</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Jo winkel is klear| :name",
        'category' => "JO BINNE IEN STAP FER",
        'title' => "Setup klear",
        'account_title' => "Dyn rekken",
        'account_msg' => "Ferifiearje en oanmelde by jo akkount mei dizze ynformaasje.",
        'shop_msg' => "Akkountynformaasje oer it bedriuwsbestjoeringssysteem fan Selldone.",

    ],

    'reset2fa' => [
        'category' => "SECURITY OFFICIAL BOODSKAP",
        'title' => "Fersykje útskeakelje 2-stappen login",
        'message' => "Jo ûntfange dizze e-post om't wy in fersyk krigen hawwe om twa-faktor-autentikaasje werom te setten foar **:name**-akkount mei **:email**-e-post.<br><br>Wy hawwe de folgjende details fûn foar jo akkount:",
        'footer' => "As jo gjin wachtwurd weromsette hawwe oanfrege, is gjin fierdere aksje nedich.",
        'action' => 'Skeakelje twa-stap oanmelding',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Jo winkel is no klear!",
        'category' => "BORN NEW ONLINE WINKEL YN DE WORLD",
        'title' => "Lokwinske, :name!",
        'message' => "<b> Lokwinsken, :name! Jo nije online bedriuw is no live!</b> Wy binne optein om jo wolkom te hjitten by de Selldoners-mienskip. Jo hawwe de earste stap nommen nei sukses, en wy binne hjir om jo te helpen by elke stap. As jo ​​oait help nedich binne, binne wy ​​mar in berjocht fuort - ús stipeteam is altyd hjir foar jo.<br><br><b>Wichtich folgjende stappen:</b> Om te begjinnen, soargje derfoar dat jo allegear ynsteld binne foar it ûntfangen fan betellingen en soepele operaasjes. Wy sille jo troch elke etappe liede om jo winkel naadloos te draaien.",
        'pdf-book' => "Mis taheakke hânboek net: Doch jo bedriuw as in spultsje",

        'account' => [
            'title' => 'Stap 1: Meitsje in akkount yn \'e Selldone wallet',
            'message' => "Om te begjinnen, meitsje in akkount yn jo Selldone wallet. Dit is wêr't jo fergoedingen sille wurde ôfrekkene, en it is ek wêr't jo sille oanfolje om jo winkel soepel te hâlden. As jo ​​saldo ea negatyf giet, meitsje jo gjin soargen! Jo winkel sil sûnder ûnderbrekking wurkje.",
            'action' => 'Oanmelde by wallet',
        ],

        'shop-account' => [
            'title' => 'Stap 2: ferbine it akkount mei de winkel',
            'message' => "Ferbine dêrnei jo wallet-akkount mei jo winkel. Gean nei <b>Store> Accounting> Invoice</b>, en keppelje jo beurs. Dit soarget derfoar dat alle klantbetellingen direkt op jo bankrekken wurde dellein - Selldone lûkt gjin bedraggen fan jo ynkomsten ôf.",
            'action' => 'Winkel Invoice Panel',
        ],

        'gateway' => [
            'title' => 'Stap 3: Ferbine Online Payment Gateway',
            'message' => "Litte wy no jo online betellingspoarte ynstelle. Gean nei <b>Store > Boekhâlding > Port</b> en klikje op <b> Nije poarte taheakje</b>. Selektearje jo faluta, en jo sille in list mei beskikbere betellingspoarten sjen. It ferbinen fan in poarte is fluch en maklik, mar as jo help nedich binne, kontrolearje dan de Selldone-gidsen of berikke ús.",
            'action' => 'Foegje in portal ta oan \'e winkel',
        ],

        'domain' => [
            'title' => 'Lêste stap: it ferbinen fan in tawijd domein',
            'message' => "No, keppelje jo oanpaste domein oan jo winkel. Hjirmei kinne klanten jo produkten of tsjinsten keapje en direkte betellingen oan jo meitsje.",
            'action' => 'Unbeheinde kadokaarten yntrodusearje en ûntfange',
        ],
    ],


    'basket-list' => [
        'item' => "ûnderdiel",
        'count' => "Telle",
        'price' => "priis",
        'discount-code' => "Koartingskoade",
        'customer-club' => 'Klant Club',
        'shipping' => "Skipfeart",
        'total' => "Totaal",
        'offer' => "Oanbod",
        'coupon' => "Coupon",
        'lottery' => "Award",
        'tax' => "Belesting",
        'tax_included' => "Opnaam yn priis",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metoade',
        'amount' => 'Tal',
        'giftcard' => 'Gift card',
        'payment' => 'Betelling',
    ],


    'shop-subscription-email' => [
        'category' => "Abonnemint update",
        'title' => "Store Lisinsje: :shop_title",
        'title-reserved' => "Reservearje lisinsje::shop_title",
        'title-active' => "Aktive lisinsje::shop_title",
        'title-finished' => "Finished lisinsje: :shop_title",
        'title-cancel' => "Ofbrekke lisinsje: :shop_title",
        'message' => "Jo winkellisinsjeplan is bywurke,",
        'RESERVED' => "⚡ Jo abonnemintsplan is **reserveard**.",
        'ACTIVE' => "🟢 Jo abonnemintsplan is **aktivearre**.",
        'FINISHED' => "🚧 Jo abonnemintsplan is **klear**.",
        'CANCEL' => "⛔ Jo abonnemintsplan is **annulearre**.",
    ],

    'support' => [
        'subject' => "Support Center|:name antwurde",
        'category' => "Stipe sintrum",
        'title' => "Jo hawwe in reaksje krigen",
        'action' => "Iepen winkel admin",
    ],

    'shop-customer-join' => [
        'subject' => "Doch mei oan :shop_title",
        'category' => "Nije klant fiering",
        'title' => "Wy binne bliid foar jo lidmaatskip",
        'action' => "Besykje no",
    ],

    'shop-vendor-join' => [
        'subject' => "Ferkeaper Onboarding | :shop_title",
        'category' => "Nije ferkeaper fiering",
        'title' => "Wy binne bliid foar jo lidmaatskip",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Add nije kaart",
        'title' => "Lokwinske, jo hawwe in kadokaart krigen",
        'action' => "Winkelje no",
        'message' => "Jo hawwe in kadokaart krigen yn it bedrach fan :balance :currency. Jo kinne keapje fan ús winkel mei dizze gift card.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Support Center| :shop",
        'category' => "stypje",
        'title' => "Jo hawwe in reaksje krigen",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Orderbefêstiging|Bestel :order_id",
        'title' => "oarder",
        'message' => "Jo hawwe in bestelling pleatst by ús winkel. Wy hawwe jo bestelling ûntfongen en sille jo in oare e-post stjoere as de betelling is befêstige."
    ,

        'payments' => 'Betellingen',
    ],

    'order-payment' => [
        'subject' => "🛍️ Befêstiging fan betelling|Bestel :order_id",
        'title' => "Betelling oarder",
        'message' => "Jo betelling foltôge,<br> Wy hawwe jo bestelling. Wy stjoere jo in oare e-post as jo bestelling ferstjoerd wurdt.",
    

        'payments' => 'Betellingen',
    ],

    'order-update' => [
        'subject' => "🛍️ Bestellestatus Update|Bestel :order_id",
        'title' => "Order Status Update",
        'message' => "Jo bestelling is bywurke. Jo kinne de lêste status fan dizze bestelling kontrolearje yn jo akkount.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Jo bestelling stiet yn 'e wachtrige foar ferwurking. Wy sille jo ynformearje as it wurdt taret.",
                'OrderConfirm' => "Jo bestelling is befêstige en de tarieding is begûn.",
                'PreparingOrder' => "Jo bestelling wurdt taret en sil gau ferstjoerd wurde.",
                'SentOrder' => "Jo bestelling is ferstjoerd. Jo krije it ynkoarten.",
                'ToCustomer' => "Jo bestelling is levere. Wy hoopje dat jo genietsje!",

                'PreparingOrder-PICKUP' => "Jo bestelling wurdt taret. Jo krije in notifikaasje as it klear is foar opheljen.",
                'SentOrder-PICKUP' => "Jo bestelling is klear foar opheljen. Kom asjebleaft nei de winkel om it te sammeljen.",
                'ToCustomer-PICKUP' => "Jo bestelling is ophelle. Wy hoopje dat jo genietsje!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Jo bestelling stiet yn 'e wachtrige foar ferwurking. Wy sille jo ynformearje as it klear is.",
                'OrderConfirm' => "Jo bestelling is befêstige en tarieding is oan 'e gong.",
                'PreparingOrder' => "Jo bestelling wurdt taret en sil gau nei jo stjoerd wurde.",
                'ToCustomer' => "Jo firtuele bestelling is levere oan jo akkount. Dankewol!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Jo tsjinstfersyk stiet yn 'e wachtrige. Wy sille jo ynformearje as wy begjinne.",
                'OrderConfirm' => "Jo tsjinst is befêstige en wy meitsje ús klear om te begjinnen.",
                'PreparingOrder' => "Wy riede jo tsjinst op en sille jo ynformearje as it foltôge is.",
                'ToCustomer' => "Jo tsjinst is kompleet. Tankewol foar it kiezen foar ús!"
            ],
            'FILE' => [
                'PreparingOrder' => "Jo bestân wurdt taret en sil gau beskikber wêze.",
                'ToCustomer' => "Jo bestân is klear en is levere. Jo kinne it no downloade."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Jo abonnemintsopdracht stiet yn 'e wachtrige. Wy sille jo ynformearje as de ferwurking begjint.",
                'OrderConfirm' => "Jo abonnemint is befêstige en wurdt ynsteld.",
                'PreparingOrder' => "Wy meitsje jo abonnemint op en it sil gau begjinne.",
                'SentOrder' => "Jo abonnemint is aktivearre. Jo krije trochgeande updates.",
                'ToCustomer' => "Jo abonnemintstsjinst is mei súkses aktivearre."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Lokwinsken :name|Nije bon: :title',
        'category' => "GRUTIS, NIJE VOUCHER",
        'message' => "Hey :name,<br><br>Jo hawwe fan ús in nije bon kado krigen! Jo kinne noch mear bonnen fertsjinje troch Selldone yn te fieren oan jo freonen en elkenien dy't jo kenne. Dizze bon is wurdich **:price :currency**.<br><br>Jo hawwe de earste stap nommen, en wy binne hjir om jo te helpen nije funksjes te ûntsluten mei jo bon! Meld jo asjebleaft oan mei **:email** en fyn jo bon yn 'e Winkel **Dashboard** > **Ynstellings** > **Lisinsje**.<br><br> Lokwinsken!",
        'action' => "Myn dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Lokwinske, Beste :name | Jo hawwe in kado krigen',
        'category' => "Oankundiging fan it ûntfangen fan in kado",
        'title' => "Gifts foar dy",
        'message' => "Hoi :name, wy binne optein om jo te litten witte dat jo in spesjaal kado krigen hawwe fan Selldone! 🎉 Jo kinne mear kado's fertsjinje troch aktyf te bliuwen, jo winkel te groeien en jo ekspertize op Selldone te ferbetterjen. Om jo kado te kontrolearjen, meld jo gewoan oan by :email en sykje it yn 'e rjochter boppeste hoeke fan jo dashboard.<br><br>Dit kado is wurdich **:price :currency**, en jo kinne it maklik yn jo portemonnee deponearje binnen QQ000000Q91Q0Q jo kado opwurdearje. de lisinsje fan jo winkel en ûntsluten noch machtiger ark om jo online bedriuw te stimulearjen!",
        'action' => "Gifts",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nije bestelling ûntfongen| :order_id",
        'title' => "New Order",
        'message' => "Jo hawwe in nije bestelling krigen. Gean asjebleaft nei de side foar ferwurking fan bestelling yn jo winkel.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Jo ynfolle ynformaasje',
        'output-form-title' => 'Oankocht item ynformaasje',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Wyklikse rapport :time',
        'title' => 'Wyklikse winkel prestaasjes rapport',
        'message' => "Dit is it wyklikse rapport fan jo winkel fan <b>:start</b> oant <b>:end</b>. Dit rapport befettet tips foar it ferbetterjen fan jo bedriuw, jo kinne ek de status fan jo online winkel en resinte oarders kontrolearje. Ik hoopje dat jo in goede dei en wike foarút hawwe."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Jo :amount besparringsrapport yn \'e lêste trije moannen| :shop_title',
        'title' => 'Seizoenrapport oer jo bedriuwsaktiviteit, beleannings en finansjele besparring',
        'message' => "Dit is jo <b>:shop_title</b> seizoensrapport fan <b>:start</b> oant <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Ferbûne akkounts',
        'sub-title' => 'Wat is de lêste status fan wallet-akkounts ferbûn oan myn winkel?',
        'view-wallet' => 'Sjoch portemonnee',
        'tip-title' => 'Wichtige tips',
        'tip' => "Stel in fergese Selldone-portemonnee op en keppelje it oan jo winkel. Sels as jo saldo negatyf is, kinne jo klanten noch sûnder problemen winkelje en betelje. Sit gjin soargen, de operaasjes en gegevens fan jo winkel sille oant 1 moanne soepel trochgean, sûnder ûnderbrekkingen.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Ferbine mei akkount'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps ynstallearre',
        'sub-title' => 'List mei apps dy\'t jo dizze wike yn jo winkel ynstalleare hawwe.',
        'tip' => "Wolle jo mear apps fine foar jo winkel?",
        'view-app-store' => 'Besykje de Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Jo winkelbots',
        'sub-title' => 'Aktive ferkeapbots yn myn winkel.',
        'tip-title' => 'Bot ferkeap',
        'tip' => "Selldone hat jo automatyske ferkeapbots foarsjoen. Alles wat jo hoege te dwaan is nei it Add-ons> Bots-paniel te gean en jo winkelbots te aktivearjen. Tink derom dat de oanbelangjende tsjinst beskikber wêze moat yn jo lân.",
        'view-bots' => 'Behear bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kommunikaasje mei klanten',
        'sub-title' => 'Hoefolle kontakten haw ik dizze wike mei myn kliïnten hân?',
        'faqs' => 'Faak Stelde Fragen',
        'tickets' => 'Klant Tickets',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Brûkers Status',
        'sub-title' => 'Aktiviteit fan :start oant :end',
        'users' => [
            'title' => 'Klanten',
            'subtitle' => 'Oanmelde brûkers',
        ],
        'views' => [
            'title' => 'Besiken',
            'subtitle' => 'Hoefolle kearen hawwe jo besocht de winkel',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Weromjûn brûkers',

        'shop_views' => 'Winkel Views',
        'baskets' => [
            'title' => 'Shopping Carts',
            'subtitle' => 'Meld it oantal nije winkelkarren',
        ],
        'products' => [
            'title' => 'Products Oersjoch',
            'subtitle' => 'Status fan produkten yn \'e winkel per type',
            'value_name' => 'Products'
        ],
        'products_count' => 'Produkt types',
        'views_count' => 'View count',
        'sell_count' => 'Ferkeapje telle',
        'send_count' => 'Shipping count',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel foar grutte ferkeapers fan Drop Shipping Selldone.',
        'total_fulfillments' => 'Totaal oarders ûntfongen',
        'ds_count' => 'Oarders krigen',
        'statistics_title' => 'Meld krigen oarders',
        'ds_cancels' => 'Ofbrekke troch ynterfaceferkeaper',
        'ds_rejects' => 'Ofbrekke troch Jo',
        'tip' => "Binne jo in grutte ferkeaper fan guod? Hawwe jo in pakhús, fabryk of distributeur fan produkten? Jo kinne jo produkten oanbiede oan oare ferkeapers yn Selldone Drop Shipping-tsjinst om jo produkt op grutte skaal te ferkeapjen. E-post ús op support@selldone.com om jo te lieden.",
        'view-drop-shipping-panel' => 'Oanmelde by gruthannel paniel',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Wikselkoersen',
        'sub-title' => 'List mei de lêste tariven foar konverzje fan faluta yn jo winkel.',
        'from' => 'Boarne Faluta',
        'to' => 'Destination faluta',
        'rate' => 'Taryf fan konverzje',
        'view-exchange-panel' => 'Behear Exchange Rates',
    

        'vew-exchange-panel' => 'wikselkoers behear paniel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Expert kontrakten',
        'sub-title' => 'Hokker professionals wurkje oan myn winkel?',
        'cost' => 'Kontrakt bedrach',
        'duration' => 'Doer',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum Ofbrekke',
        'end_at' => 'Besoarch datum',
        'tip' => 'Jo kinne de bêste spesjalisten yn Selldone hiere om jo bedriuw te ûntwikkeljen.',
        'view-experts' => 'Klikje om te begjinnen.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Aktive betellingspoarten op jo winkel :shop',
        'tip-title' => 'Wichtige tips',
        'tip' => "Gean nei de portalbehearside yn jo winkel en foegje yn in pear minuten op syn minst ien poarte ta. Jo klanten wolle graach fluch en feilich betelje fia online portalen.",
        'view-shop-gateways' => 'Oanmelde by myn winkelportaalbehear.',
        'view-gateways' => 'Besjoch mear poarten',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Oarders',
        'sub-title' => 'List fan oarders ik krige dizze wike.',
        'total_baskets' => 'Totaal oarders',
        'total_posBaskets' => 'Totaal Cash Orders',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Oarders foltôge (dizze oarders binne net needsaaklik betelle!)',
        'tip-title' => 'Jo moatte harder besykje ...',
        'tip' => "Gjin ienfâldich súkses.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Ferwurkjen sintrum',
        'sub-title' => 'Hoefolle bestelling hawwe wy dizze wike yn \'e winkel ferwurke?',
        'tip-title' => 'Jo hawwe gjin ferkeap!',
        'tip' => "Spitigernôch hawwe jo dizze wike gjin ferkeap hân. Jo moatte mear nei jo winkel krije. Jo kinne mear produkten tafoegje, bettere ôfbyldings kieze of bettere beskriuwingen skriuwe foar jo produkten. Tink oan in folsleine baan foar jo bedriuw. As jo it goed dogge en net frustreare wurde, sille jo slagje.",
        'view-process-center' => 'Besjoch proses sintrum',
        'return' => [
            'title' => 'Oarder weromjûn',
            'subtitle' => 'Meld werom oarders.',
            'tip-title' => 'Wistesto dat ...',
            'tip' => "Jo kinne safolle kassa's meitsje as jo nedich binne mei Selldone POS! Oft it jo tablet, mobyl of laptop is, jo kinne elk apparaat omsette yn it ferkeappunt fan jo winkel. It is ienfâldich, rap yn te stellen, en folslein taret op jo server. Begjin it hjoed te brûken!",
            'view-pos' => 'Oanmelde by My Online Store Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesjes',
        'sub-title' => 'Hoefolle kearen haw ik myn winkel besocht?',
        'countries-title' => 'Hokker lannen binne it meast besocht?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Wolle jo jild fertsjinje sûnder ien jild út te jaan?',
        'message' => "Dear :name, jo kinne nei Dashboard> Demonetisaasje gean en in ferwizingskeppeling oanmeitsje. Stjoer de keppeling nei dyn freonen, Jo ûntfange in Selldone gift cards en in persintaazje fan dyn freon syn betellingen. Tink derom dat de kadokaart nei jo en jo freon stjoerd wurdt.",
        'action' => 'Besjoch myn ynlieding keppeling',
        'mail-clip' => "<b style='color: #C2185B'>Wichtich:</b> As jo e-posttsjinsten brûke lykas Gmail dy't de lingte fan 'e e-post beheine, fyn dan de folgjende opsje oan 'e ein fan 'e e-post om it folsleine rapport wer te jaan en klikje derop:",

        'no-coin-reward' => "<b style='color: #C2185B'>Sorry:</b> Jo aktiviteit foldie net oan 'e eask om fergees SEL Coins-beleanning te krijen. Besykje hurder en ferkeapje mear yn jo winkel foar takom seizoen.",
        'yes-coin-reward' => "<b style='color: #4CAF50'> Lokwinsken: </b> Geweldich wurk! Op grûn fan jo treflike prestaasjes hawwe wy :amount SEL munten byskreaun oan jo akkount as beleanning.",

        'need-buy-license' => "<b>Level Up Your Business:</b> It liket derop dat jo noch gjin abonnemintsplan foar jo webside hawwe registrearre! Upgrade no om mear funksjes te ûntsluten foar gewoan :amount per moanne as jierliks ​​​​betelle.",
        'not-afford-message' => "As jo net kinne betelje of problemen hawwe mei betelling, fertel it ús dan frij fia support@selldone.com.",
        'add-domain' => "<b>Wêrom net in oanpast domein hawwe foar jo bedriuw?</b><br> Foegje no in domein ta oan jo webside; it is fergees!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone is a<del> produkt</del> <span style = 'color: forestgreen'>mienskip</span> .<br> Wês in profesjonele ferkeaper!",
        'message' => "Folgje de offisjele siden fan 'e Selldone op Twitter, LinkedIn en sosjale netwurken. Stjoer ús alle opmerkingen, oanfragen of krityk of meidwaan oan diskusjes oer de Selldone. Wy binne ek diel fan 'e mienskip fan Selldone dat <b>You makket</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nije Avocado-oarders ûntfongen|:shop_title :time',
        'title' => "Prestaasjerapport foar de lêste 24 oeren",
        'message' => "Jo klanten wachtsje op jo bestellingen wurde hifke en priis. Reagearje sa gau mooglik op oanfragen fan jo klanten om mear ferkeap te krijen.",
        'card_title' => "Bestellingen yn 'e wachtrige",
        'card_subtitle' => "Sûnt :date",

        'card_payed' => "Betelde oarders"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Nije antwurden op jo berjocht yn :community_title',
        'title' => ":name, en :count oaren hawwe kommentearre op jo berjochten.",
        'message' => "Hoi :name, jo berjochten krije oandacht! Jo hawwe opmerkings krigen yn ús mienskip. Meld jo oan by jo akkount om mei te dwaan oan 'e diskusje en sjoch wat elkenien seit.",
        'title-simple' => ":name hat reagearre op jo post!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Antwurdzje op jo ûnderwerp :topic_title',
        'title' => ":name, en :count oaren antwurden op jo ûnderwerp.",
        'message' => "Hoi :name, jo ûnderwerp krijt oandacht! Jo hawwe antwurden krigen yn ús mienskip. Meld jo oan by jo akkount om mei te dwaan oan 'e diskusje en sjoch wat elkenien seit.",
        'title-simple' => ":name antwurde op jo ûnderwerp.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nije oanmelding :name',
        'category' => 'Feiligens notifikaasjes',
        'title' => "Oanmelde by Account",
        'message' => "Beste :name, jo binne oanmeld by jo Selldone-akkount.",   // Login in selldone (seller)
        'message-shop' => "Beste :name, jo binne oanmeld by :shop_title .",  // Login in shop (buyer)

        'footer' => "As jo net oanmeld binne, feroarje jo wachtwurd.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Weromlûken",
        'deposit' => "Boarchsom",

        'withdraw_subject' => "Weromlûke út account :account",
        'deposit_subject' => "Boarchsom oan account :account",

        'message' => "De jildoerdracht is dien mei de folgjende spesifikaasjes.",

        'type' => "Transaksje type",

        'from' => "Boarne akkount",
        'to' => "Destination account",

        'desc' => "Transaksje beskriuwing",
        'action' => "Besjoch transaksje",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Wichtich! Regels oertreding| :shop",
        'category' => "Kritysk ynformearje",
        'title' => "Jo winkel is bestraft",
        'action' => "Iepenje winkeldashboard",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter útnoege jo nei Selldone",
        'title' => ":name hat jo :amount stjoerd om jo nije online winkel te lansearjen en it te monetearjen!",
        'message' => "Hoi **:receiver_name**,<br><br>Wolkom by Selldone! Op Selldone kinne jo maklik jo e-commerce-side, blog, online mienskip oanmeitsje, en sels in online POS-systeem ynstelle foar persoanlike ferkeap - allegear binnen minuten. It is it folsleine online bedriuwsbestjoeringssysteem ûntworpen om jo bedriuw better, rapper en makliker te meitsjen te meitsjen.<br><br> Meld jo oan by <b>:date</b> en ûntfange in :amount-voucher om te begjinnen!",
        'accept' => "Akseptearje útnoeging",
        'owner' => "Eigner fan",
        'join-date' => "Op Selldone sûnt",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Herstel keppeling| :shop",
        'category' => "Winkelfeiligens",
        'title' => "Herstelkeppeling opslaan fan <b>:shop_name</b> .",
        'message' => "Dizze e-post is nei jo stjoerd om't jo frege hawwe om jo winkel te herstellen. Klikje op de ûndersteande keppeling sil jo winkel weromhelje en alle gegevens dy't derby hearre.",
        'action' => "Befêstigje winkelherstel",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Hoefolle jild hat Selldone foar jo bedriuw besparre?',
        'sub-title' => 'Fan datum :start oant :end',
        'infrastructure' => [
            'title' => 'Ynfrastruktuer',
            'subtitle' => 'Servers, CDN, Storage en oare wolktsjinsten',
        ],
        'experts' => [
            'title' => 'Eksperts & Personiel',
            'subtitle' => 'Untwikkelders, ûnderhâld en stipe',
        ],
        'total_save' => 'Totaal bewarre jild'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Jo prestaasje',
        'sub-title' => 'Saaklike oersjoch fan :start oant :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Weromjûn brûkers',

        'shop_views' => 'Winkel Views',
        'baskets' => [
            'title' => 'Shopping Carts',
            'subtitle' => 'Meld it oantal nije winkelkarren',

        ],
        'products' => [
            'title' => 'Products Oersjoch',
            'subtitle' => 'Status fan produkten yn \'e winkel per type',
            'value_name' => 'Products'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Totaal webside views',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Jo hawwe in nije bestelling krigen. Gean asjebleaft nei de side foar it ferwurkjen fan bestelling yn jo leveransierspaniel.",
        'subject' => "🛍️ Nije bestelling ûntfongen| :order_id",
        'your_revenue' => "Jo ynkomsten",
    ],
    'vendor-invite' => [
        'title' => 'Vendor útnoeging',
        'message' => "Jo hawwe in útnoeging krigen om ferkeaper te wurden fan :shop_name. Jo kinne it akseptearje of ôfwize troch op de folgjende knoppen te klikken.",
        'subject' => ":shop_name |Utnoeging om ús ferkeaper te wurden",
        'accept' => "Akseptearje en wurde in ferkeaper",
        'reject' => "Reject",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Utnoeging om mei te dwaan ús team',
        'message' => "Jo binne útnoege om mei te dwaan oan :vendor_name by :shop_name. Jo kinne dizze útnoeging akseptearje of ôfwize mei de knoppen hjirûnder.",
        'subject' => "Utnoeging om mei te dwaan :vendor_name|Wurd in teamlid",
        'accept' => "Akseptearje & Doch mei oan it team",
        'reject' => "Reject",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Jo oanmeldkoade foar :shop",
        'header-message' => "Wy stjoere jo dizze e-post om't jo in oanmeldkoade foar de winkel hawwe oanfrege. Fyn jo ienmalige wachtwurd (OTP) hjirûnder:",
        'footer-message' => "Dizze koade sil 10 minuten jildich wêze. As jo dizze oanmeldingskoade net oanfrege hawwe, negearje dan dizze e-post."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Ferifiearje jo e-mail| :shop",
        'title' => 'E-post ferifikaasje',
        'header-message' => "Hoi :name, <br> Befêstigje asjebleaft dat **:email** jo e-postadres is troch op de knop hjirûnder te klikken of binnen 48 oeren de link hjirûnder te brûken.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produkt Updates| :shop",
        'title' => "Update op produktstatus - lêste 24 oeren",
        'message' => "Ik hoopje dat dit berjocht jo goed fynt. Dit is in koarte update om jo te ynformearjen oer de status fan jo produkten op ús platfoarm yn 'e ôfrûne 24 oeren.\nYn dizze perioade hawwe d'r feroaringen west yn 'e status fan guon produkten. Dizze wizigingen kinne wêze fanwege oankeapen, stock updates, of oare relatearre barrens.\nFoar mear detaillearre ynformaasje oer elk produkt, meld jo asjebleaft oan by jo akkount en kontrolearje de seksje 'Produktstatus'.",
        'action' => "Iepenje Vendor Panel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Bulk oarders ûntfongen| :shop | :date",
        'title' => "Notifikaasje fan bulkbestellingen",
        'message' => "Jo hawwe in partij bulkbestellingen krigen. Besykje asjebleaft de side foar ferwurking fan bestelling yn jo paniel foar fierdere details. Jo kinne de bestellist ek downloade fia de levere befeilige keppeling, jildich foar 7 dagen.<br><br>\n        <b>IMPORTANT:</b> Dizze keppeling is jildich foar 7 dagen.<br>\n        Dizze keppeling is dynamysk, dus elke kear as jo derop klikke, krije jo de meast bywurke oarders foar dizze spesifike datum. <b>It betsjut as de bestelling betellingsstatus feroaret nei ôfwiisd, jo sille net mear sjen dy bestelling yn de ynladen CSV, of as de bestelling wurdt betelle, sil ferskine yn de list.</b><br><br>\n        <ul>\n            <li>De CSV befettet betelle oarders mei in reservearre datum yn 'e :date.</li>\n            <li>Reserved datum is de datum as de brûker klikt op kassa op de bestelling side.</li>\n        </ul>\n        <b>Om dûbele oarders te foarkommen, kontrolearje altyd de Order ID foardat jo ferstjoere.</b>",
        'action' => "Download Order List",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Guon items yn jo bestelling waarden net akseptearre en kinne net wurde levere. It bedrach foar dizze items sil ynkoarten werombetelle wurde op jo kaart."
    ]

];
