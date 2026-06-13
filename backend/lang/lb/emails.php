<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Dëse Message begréisst en neie Keefer an de Buttek.',
        ShopMailTemplateCodes::OrderCheckout => 'Dës Notifikatioun gëtt geschéckt wann e Keefer eng Bestellung bestätegt.',
        ShopMailTemplateCodes::OrderPayment => 'Dës Notifikatioun bestätegt déi erfollegräich Bezuelung vun engem Client.',
        ShopMailTemplateCodes::OrderUpdate => 'Dëse Message gëtt geschéckt fir e Keefer iwwer de Status vun hirer Bestellung ze aktualiséieren.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Dëse Message gëtt un e Verkeefer geschéckt fir se vun enger bestätegter Bestellung z\'informéieren.',
        ShopMailTemplateCodes::PosCheckout => 'Dës Notifikatioun gëtt geschéckt fir e Verkafsbestellung fir e Keefer ze bestätegen.',
        ShopMailTemplateCodes::PosPayment => 'Dës Notifikatioun bestätegt e Punkt vum Verkaf vun engem Keefer.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Dëse Message informéiert de Verkeefer vun engem Akaf op hirem Verkafspunkt.',
        ShopMailTemplateCodes::ShopContact => 'Dës Notifikatioun gëtt geschéckt wann e Kontaktformular ofginn ass.',
        ShopMailTemplateCodes::ShopGiftCard => 'Dës Notifikatioun informéiert e Benotzer datt se eng Geschenkkaart kritt hunn.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Dëse Message begréisst en neie Verkeefer an de Buttek.',
        ShopMailTemplateCodes::ShopVendorInvite => "Dëse Message gëtt geschéckt fir e Verkeefer ze invitéieren op Äre Maartplaz matzemaachen.",
        ShopMailTemplateCodes::ShopVendorOrder => "Dëse Message gëtt un de Verkeefer geschéckt wann eng Bestellung an entweder Bezuelt oder Cash op Liwwerung (COD) Status kritt gëtt.",
        ShopMailTemplateCodes::ShopVendorProducts => "All Dag verschéckt fir Ubidder iwwer de Status vun hire Produkter ze aktualiséieren.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Dëse Message gëtt geschéckt fir e Verkeefer ze invitéieren fir Äre Maartplaz matzemaachen.",

        ShopMailTemplateCodes::UserLogin => "Notéiert de Benotzer mat Umeldungsdetailer, dorënner IP Adress, Datum an Apparat, fir Sécherheetszwecker.",
        ShopMailTemplateCodes::LoginCode => "Schéckt eng eemoleg Passwuert Code fir Benotzer an de Buttek aloggen.",

        ShopMailTemplateCodes::EmailVerifyLink => "Schéckt e Link fir d'E-Mailadress vum Benotzer z'iwwerpréiwen. Dës E-Mail gëtt geschéckt wann e Benotzer sech vu SMS registréiert an seng E-Mail aginn. Et gëtt net geschéckt wann e Benotzer sech direkt mam soziale Login oder E-Mail registréiert.",

        ShopMailTemplateCodes::EmailBulkOrder => "Schéckt eng Lëscht vu kritt a bezuelte Bestellungen a bulk fir e spezifeschen Dag."


    ,

    ],


    'global' => [
        'greetings' => 'Moien, :name!',
        'end-statement' => 'Ënnerstëtzung Equipe',

        'receiver_name' => 'Moien :user_name',
        'footer-help' => "Hëllef braucht? Frot bei [support@selldone.com](mailto:support@selldone.com) oder besicht eisen [Hëllefzentrum](https://selldone.com/community).",
        'selldone-team' => 'D\'Selldone Team',
        'footer-shop' => "Wann Dir Hëllef braucht mat eppes, zéckt net eis eng E-Mail ze schécken::shop_mail",
        'accept' => "Akzeptéieren",
        'reject' => "Oflehnen",
        'verify' => "z'iwwerpréiwen",
        'title' => "Titel",
        'value' => "Wäert",
        'description' => "Beschreiwung",
        'shop' => "Shop",
        'shop-info' => "Store Informatiounen",
        'user' => "Benotzer",
        'user-info' => "Kont Informatiounen",
        'license' => "Lizenz",
        'status' => "Status",
        'start' => "Start",
        'end' => "Enn",
        'renewal' => "Erneierung",
        'view' => "Vue",

        'balance' => "Gläichgewiicht",
        'card_number' => "Kaart Zuel",
        'cvv' => "Cvv",
        'expire_date' => "Verfallsdatum",

        'Dashboard' => "Dashboard",
        'order' => "bestellen",
        'view_order' => "Bestellung kucken",
        'pay_now' => "Pay now",

        'official_selldone' => "OFFIZIELL VERKAAFT",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Währung",
        'free-balance' => "Fräi Gläichgewiicht",
        'locked-balance' => "Spär Gläichgewiicht",
        'bot' => "Bot",
        'requests' => "Ufroen",
        'baskets' => 'Weenchen',
        'physical' => "Kierperlech",
        'virtual' => "Virtuell",
        'file' => "Fichier",
        'service' => "Service",
        'fulfillment' => "Erfëllung",
        'open' => "Oppen",
        'reserved' => "Reservéiert",
        'canceled' => "Annuléiert",
        'payed' => "Bezuelt",
        'cod' => "COD",
        'orders-count' => 'Bestellungen',
        'payments-count' => 'Paiementer',
        'confirms-count' => 'Confirméiert',
        'sends-count' => 'Schéckt',
        'delivers-count' => 'Liwwert',
        'count' => 'Grof',
        'transactions-count' => 'Transaktiounen zielen',
        'success-transactions' => 'Erfolleg Transaktiounen',
        'total-amount' => 'Gesamtbetrag',
        'amount' => 'Betrag',
        'wage' => 'Loun',
        'debug' => 'Debuggen',
        'pos' => 'POS',
        'live' => 'Live',
        'CheckQueue' => 'Check Schlaang',
        'OrderConfirm' => 'Bestellung confirméieren',
        'PreparingOrder' => 'Bestellung virbereeden',
        'SentOrder' => 'Bestellung geschéckt',
        'ToCustomer' => 'Dem Client geliwwert',
        'Pending' => 'Erwaardung',
        'Accepted' => 'Akzeptéiert',
        'Rejected' => 'Refuséiert',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefon',
        'total' => 'Ganzen',
        'view-detail' => 'Kuckt Detailer',
        'empty' => 'Eidel',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Äntwert',
        'reactions' => 'Reaktiounen',
        'Comments' => 'Kommentaren',
        'last-comment' => 'Leschten Kommentar',
        'response-to' => 'Äntwert op',
        'posts' => 'Posts',
        'post' => 'Post',

        'name' => 'Numm',
        'email' => 'E-Mail',
        'type' => 'Typ',
        'device' => 'Apparat',
        'platform' => 'Plattform',
        'browser' => 'Browser',
        'time' => 'Zäit',
        'Wallet' => 'Portemonnaie',
        'date' => 'Datum',

        'account' => 'Kont',
        'transaction' => 'Transaktioun',
        'fee' => 'Fee',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategorie',
        'password' => 'Passwuert',
        'verify-login' => "Verifizéieren & Login",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Kaaf elo",
        'add-domain' => "Add Domain",
        'views' => 'Meenung',


        'country' => 'Land',
        'address' => 'Adress',
        'postal' => 'Postleitzuel',
        'building_no' => 'Gebai #',
        'building_unit' => 'Eenheet #',
        'message' => 'Message',


        'customer' => 'Client',
        'cart-items' => 'Wuerekuerf Artikelen',
        'payment' => 'Bezuelen',
        'receiver' => 'Empfänger',
        'virtual-items' => 'Virtuell Artikelen',
        'no-payment' => 'Keng Bezuelung!',

        'enable' => 'Aktivéieren',
        'access' => 'Zougang',
        'bank' => 'Bankinfo',

        'vendor' => 'Verkeefer',

        'view_content' => "Gesinn voll Inhalt",
        'files' => 'Fichieren',
        'download' => 'Download',
        'file_name' => 'Dateinumm',
        'file_size' => 'Gréisst',

        'subscription' => 'Abonnement',
        'products' => 'Produkter',
        'vendor_products' => 'Verkeefer Produkter',

        'pickup' => 'Pickup',

        'minutes' => 'Minutt',
        'hours' => 'Stonnen',

        'refund' => 'Remboursement',
        'recipient_address' => 'Empfänger Adress',
        'signature' => 'Ënnerschrëft',
        'blockchain' => 'Blockchain',
        'details' => 'Detailer',


    

        'Shop' => 'Shop',
        'dashboard' => 'Dashboard',
        'comments' => 'Kommentaren',
        'wallet' => 'Portemonnaie',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Leeschtung Rapport, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Saisonal Bericht, Selldone'
        ],
        'Onboarding' => [
            'id' => 'Salut',
            'name' => 'Genehmegt, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Ënnerstëtzung :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Vergewëssert Iech, Selldone'
        ],
        'Welcome' => [
            'id' => 'Salut',
            'name' => 'Gemeinschaft, Selldone'
        ],
        'NewShop' => [
            'id' => 'Händler',
            'name' => 'Genehmegt, Selldone'
        ],
        'Approve' => [
            'id' => 'stëmmen',
            'name' => 'Genehmegt, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Commanden Management :name'
        ],

        'Recovery' => [
            'id' => 'Erhuelung',
            'name' => 'Selldone Erhuelung Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Erwaardung ⌛',
        'PAYED' => 'Bezuelt ✅',
        'CANCELED' => 'Annuléiert ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrateur',
            'OFFICER' => 'Offizéier an Supervisor',
            'AUDITING' => 'Audit Manager',
            'EMPLOYEE' => 'Employé',
            'PRODUCT' => 'Produit Manager',
            'CONTENT' => 'Inhalt Manager',
            'MARKETING' => 'Marketing Manager',
            'VIEWER' => 'Betrachter',

        ],
        'subject' => ":inviter Invitéiert Iech als :level | :shop",
        'category' => "Personal Invitatioun",
        'title' => "Dir sidd invitéiert op <b>:shop_name</b> als <b>:level</b> .",
        'message' => "Dir hutt eng Invitatioun kritt fir mam <b>:shop_title</b> Team am Geschäft ze kollaboréieren. Dir hutt d'Méiglechkeet dës Offer ze akzeptéieren oder ze refuséieren. Sollt Dir wielen ze akzeptéieren, aloggen w.e.g. op de Selldone Service fir Är Entscheedung ze bestätegen. No der Bestätegung kritt Dir Zougang zum Buttek Management Sektioun.",

    ],

    'welcome-email' => [
        'subject' => "👋 Wëllkomm :name, Loosst eis mat Selldone ufänken!",
        'category' => 'CONGRATULATION',
        'title' => "Wëllkomm op Selldone",
        'message' => "Merci datt Dir Selldone gewielt hutt! Dir sidd elo Deel vun enger lieweger Gemeinschaft déi global Verkeefer mat Clienten verbënnt, lokal Geschäfter mat Entreprisen, an Individuen mat Firmen. All eis Master a Pro Tools sinn fir Iech verfügbar **gratis** an **onlimitéiert**. Mir sinn hei fir Iech z'ënnerstëtzen an d'Dieren op Äre Succès opzemaachen.",

        'index' => "Schrëtt :step.",

        'step-domain' => [
            'title' => 'Füügt Ären Custom Domain dobäi',
            'message' => "Fir unzefänken, füügt Är personaliséiert Domain gratis am Shop Dashboard un ënner Astellungen> Domainen Astellunge.",
            'action' => 'Managen Meng Domains',
        ],
        'step-landing' => [
            'title' => 'Personnaliséiert Är Home Page',
            'message' => "Personaliséiert Är Homepage andeems Dir op Dashboard> Säiten gitt. Wielt eng Landung Säit oder erstellt eng nei. Et ass einfach an intuitiv, an Dir kënnt direkt ufänken drun ze schaffen.",
            'action' => 'Personnaliséiert Meng Landung Säit',
        ],
        'step-payment' => [
            'title' => 'Setup Bezuelmethoden',
            'message' => "Start Bezuelungen direkt op Äre Bankkonto unzehuelen. Fir Är Bezuelungsanbieter wéi Stripe, PayPal, a méi ze verbannen, gitt op Dashboard> Accounting> Gateway.",
            'action' => 'Füügt Bezuelmethoden',
        ],
        'step-products' => [
            'title' => 'Füügt Är Produkter dobäi',
            'message' => "Füügt einfach Produkter a Kategorien am Dashboard> Produkter bäi. Et ass grad wéi d'Gestioun vun Dateien an Ordner op Ärem PC - voll Drag-and-Drop prett. Dir kënnt och Produkter importéieren mat Excel. Eng Probe Schabloun ass verfügbar fir Iech ze hëllefen unzefänken.",
            'action' => 'Managen Meng Produkter',
        ],
        'step-shipping' => [
            'title' => 'Setup Versandmethoden',
            'message' => "Fir Cliente fir d'Verschécken ze bezuelen, definéiert Är Versandmethoden am Dashboard> Logistik> Versand. Dir kënnt verschidde Präisser an Ënnerstëtzung fir verschidde Plazen astellen. Vergiesst net Äre Lagerorigin am Dashboard> Logistik> Warehouse ze setzen.",
            'action' => 'Verwalte Versandmethoden',
        ],
    

        'seller' => [
            'title' => 'Sidd Dir e Verkeefer?',
            'message' => 'Fir unzefänken ze verkafen, gitt Ären Dashboard an Selldone iwwer de Link hei ënnen a erstellt Ären éischte Geschäft komplett gratis. Dëst wäert e puer Minutten huelen an Dir wäert Ären eegene Buttek an online Site hunn. Mir féieren Iech dann op déi nächst Schrëtt a kréien de Bezuelungspaart.',
            'action' => 'Login op meng Dashboard',
        ],
        'buyer' => [
            'title' => 'Ech sinn e Keefer',
            'message' => 'Gratulatioun. Wann Dir e Member vun Selldone sidd, kritt Dir all d\'Schwieregkeete vun der Memberschaft an der Authentifikatioun an Online Geschäfter lass. Fir vun all Geschäft a Site ze profitéieren deen d\'Selldone Plattform benotzt, kënnt Dir Iech mat engem Klick aloggen an Ären Akaf einfach, séier a sécher maachen.',
        ],
    ],


    'charge-account' => [
        'category' => 'Portemonnaie> Kont> Charge',
        'title' => "Erfolleg Charge",
        'message' => "Äre Kont <b>:account_number</b> gouf <b>:amount</b> erfollegräich reprochéiert.",
        'account' => 'Kont',
        'charge' => 'Charge',
        'balance' => 'Gläichgewiicht',
        'footer' => "Maacht d'Geschäft einfach, erreechbar an zougänglech fir jiddereen op der ganzer Welt."
    ],

    'verify-email' => [
        'subject' => "🙌 Fëllt Är Umeldung op Selldone aus! Verifizéiert Link.",
        'category' => "DIR BIS EEN SCHRËTT WEI",
        'title' => "Verifizéiert Är E-Mailadress",
        'message' => "Salut :name,<br><br>Merci datt Dir Selldone gewielt hutt!<br><br>Fir ze bestätegen datt <b>:email</b> Är korrekt E-Mailadress ass, oder benotzt w.e.g. de Link hei ënnen. Dir hutt 48 Stonnen fir dës Verifizéierung ofzeschléissen.",
        'footer' => "Wann Dir Schwieregkeeten hutt op de Verify Knäppchen ze klicken, kopéiert a paste d'URL hei ënnen an Äre Webbrowser: :activation_url",
        'next-step' => "Als nächst wäerte mir Iech e puer hëllefräich Materialien an e Schrëtt-fir-Schrëtt Guide schécken fir et einfach ze maachen fir Är personaliséiert Domain derbäi ze maachen, Bezuelungen opzestellen, Produkter derbäi ze kréien an Är éischt Bestellung ze kréien.",

    ],
    'verify-email-code' => [
        'subject' => "Verifikatiounscode fir :name",
        'category' => "SECURITY",
        'title' => "E-Mail Verifikatiounscode",
        'message' => "Salut :name,<br><br>Fir ze bestätegen datt <b>:email</b> Är korrekt E-Mailadress ass, gitt w.e.g. de folgende Code bannent den nächsten <b>10 Minutten</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Äre Buttek ass prett| :name",
        'category' => "DIR BIS EEN SCHRËTT WEI",
        'title' => "Setup fäerdeg",
        'account_title' => "Äre Kont",
        'account_msg' => "Verifizéiert a loggt Iech op Äre Kont mat dëser Informatioun un.",
        'shop_msg' => "Kontinformatioun iwwer de Selldone Business Betribssystem.",

    ],

    'reset2fa' => [
        'category' => "SECURITY OFFIZIELL MESSAGE",
        'title' => "Ufro auszeschalten 2-Schrëtt Login",
        'message' => "Dir kritt dës E-Mail well mir eng Ufro kruten fir d'Zwee-Faktor Authentifikatioun fir **:name** Kont mat **:email** E-Mail zréckzesetzen.<br><br>Mir hunn déi folgend Detailer fir Äre Kont fonnt:",
        'footer' => "Wann Dir kee Passwuert zréckgesat hutt, ass keng weider Handlung néideg.",
        'action' => 'Zwee-Schrëtt Login auszeschalten',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Äre Buttek ass elo prett!",
        'category' => "GEBUERT NEW ONLINE STORE an der Welt",
        'title' => "Gratulatioun, :name!",
        'message' => "<b> Gratulatioun, :name! Ären neien Online Geschäft ass elo live!</b> Mir si frou Iech an der Selldoners Gemeinschaft begréissen ze kënnen. Dir hutt den éischte Schrëtt a Richtung Erfolleg gemaach, a mir sinn hei fir Iech all Schrëtt vun der Manéier ze hëllefen.<br>Elo datt Äre Buttek prett ass, loosst eis sécher stellen datt Dir bereet sidd fir Bezuelungen direkt vun Äre Clienten ze kréien an Äert Räich ze wuessen. Wann Dir jeemools Hëllef braucht, si mir just e Message ewech - eis Ënnerstëtzungsteam ass ëmmer fir Iech do.<br><br><b>Wichteg nächst Schrëtt:</b> Fir unzefänken, gitt sécher datt Dir alles ageriicht sidd fir Bezuelungen ze kréien a glat Operatiounen. Mir féieren Iech duerch all Etapp fir Äre Geschäft nahtlos ze lafen.",
        'pdf-book' => "Verpasst net befestegt Handbuch: Maacht Äre Betrib wéi e Spill",

        'account' => [
            'title' => 'Schrëtt 1: Erstellt e Kont am Selldone Portemonnaie',
            'message' => "Fir unzefänken, erstellt e Kont an Ärem Selldone Portemonnaie. Dëst ass wou Är Fraisen ofgezunn ginn, an et ass och wou Dir eropgeet fir Äre Geschäft glat ze halen. Wann Äre Gläichgewiicht jeemools negativ geet, maach der keng Suergen! Äre Buttek wäert weider ouni Ënnerbriechung funktionnéieren.",
            'action' => 'Login op Portemonnaie',
        ],

        'shop-account' => [
            'title' => 'Schrëtt 2: Verbindung de Kont op de Buttek',
            'message' => "Als nächst, verbënnt Äre Portemonnaie Kont mat Ärem Geschäft. Gitt op <b>Store> Comptablesmethod> Rechnung</b>, a verbënnt Äre Portemonnaie. Dëst garantéiert datt all Client Bezuelungen direkt op Äre Bankkonto deposéiert ginn - Selldone mécht keng Betrag vun Ärem Akommes of.",
            'action' => 'Store Rechnung Panel',
        ],

        'gateway' => [
            'title' => 'Schrëtt 3: Connect Online Payment Gateway',
            'message' => "Elo, loosst eis Ären Online Bezuelungspaart opsetzen. Gitt op <b>Store > Comptabilitéit > Port</b> a klickt op <b> Neie Port</b> derbäi. Wielt Är Währung, an Dir gesitt eng Lëscht vun verfügbare Bezuelungspaarten. E Paart verbannen ass séier an einfach, awer wann Dir Hëllef braucht, fillt Iech gratis d'Selldone Guiden ze kontrolléieren oder eis z'erreechen.",
            'action' => 'Füügt e Portal an de Buttek',
        ],

        'domain' => [
            'title' => 'Leschte Schrëtt: en dedizéierten Domain verbannen',
            'message' => "Elo verbënnt Är personaliséiert Domain an Äre Geschäft. Dëst erlaabt Clienten Är Produkter oder Servicer ze kafen an direkt Bezuelungen un Iech ze maachen.",
            'action' => 'Aféierung an onlimitéiert Cadeau Kaarte kréien',
        ],
    ],


    'basket-list' => [
        'item' => "item",
        'count' => "Grof",
        'price' => "Präis",
        'discount-code' => "Remise Code",
        'customer-club' => 'Client Club',
        'shipping' => "Liwwerung",
        'total' => "Ganzen",
        'offer' => "Offer",
        'coupon' => "Coupon",
        'lottery' => "Award",
        'tax' => "Steier",
        'tax_included' => "Am Präis abegraff",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Method',
        'amount' => 'Betrag',
        'giftcard' => 'Gift card',
        'payment' => 'Bezuelen',
    ],


    'shop-subscription-email' => [
        'category' => "Abonnement update",
        'title' => "Store Lizenz::shop_title",
        'title-reserved' => "Reservéiert Lizenz: :shop_title",
        'title-active' => "Aktiv Lizenz::shop_title",
        'title-finished' => "Fäerdeg Lizenz::shop_title",
        'title-cancel' => "Ofbriechen Lizenz::shop_title",
        'message' => "Äre Buttek Lizenzplang aktualiséiert,",
        'RESERVED' => "⚡ Ären Abonnementplang gouf **reservéiert**.",
        'ACTIVE' => "🟢 Ären Abonnementplang gouf **aktivéiert**.",
        'FINISHED' => "🚧 Ären Abonnementplang ass **fäerdeg**.",
        'CANCEL' => "⛔ Ären Abonnementplang gouf **annuléiert**.",
    ],

    'support' => [
        'subject' => "Ënnerstëtzung Zentrum|:name geäntwert",
        'category' => "Ënnerstëtzung Zentrum",
        'title' => "Dir krut eng Äntwert",
        'action' => "Open Buttek Admin",
    ],

    'shop-customer-join' => [
        'subject' => "Maacht mat :shop_title",
        'category' => "Neie Client Feier",
        'title' => "Mir si frou fir Är Memberschaft",
        'action' => "Besicht elo",
    ],

    'shop-vendor-join' => [
        'subject' => "Verkeefer Onboarding | :shop_title",
        'category' => "Neie Verkeefer Feier",
        'title' => "Mir si frou fir Är Memberschaft",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Füügt eng nei Kaart",
        'title' => "Gratulatioun, Dir hutt eng Geschenkkaart kritt",
        'action' => "Shop elo",
        'message' => "Dir hutt eng Geschenkkaart am Betrag vun :balance :currency kritt. Dir kënnt aus eisem Geschäft mat dëser Geschenkkaart kafen.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Ënnerstëtzung Zentrum | :shop",
        'category' => "ënnerstëtzen",
        'title' => "Dir krut eng Äntwert",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Bestellen Checkout | :order_id",
        'title' => "bestellen",
        'message' => "Dir hutt eng Bestellung an eisem Geschäft gemaach. Mir hunn Är Bestellung kritt a schécken Iech eng aner E-Mail wann d'Bezuelung bestätegt ass."
    ,

        'payments' => 'Paiementer',
    ],

    'order-payment' => [
        'subject' => "🛍 Bezuelung Bestätegung | :order_id",
        'title' => "Bezuelungsuerdnung",
        'message' => "Är Bezuelung fäerdeg,<br> Mir hunn Är Bestellung. Mir schécken Iech eng aner E-Mail wann Är Bestellung verschéckt gëtt.",
    

        'payments' => 'Paiementer',
    ],

    'order-update' => [
        'subject' => "🛍️ Bestellung Status Update|Uerdnung :order_id",
        'title' => "Uerdnung Status Update",
        'message' => "Är Bestellung gouf aktualiséiert. Dir kënnt de leschte Status vun dëser Bestellung an Ärem Kont kontrolléieren.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Är Bestellung ass an der Schlaang fir d'Veraarbechtung. Mir informéieren Iech wann et virbereet gëtt.",
                'OrderConfirm' => "Är Bestellung ass bestätegt an d'Virbereedung huet ugefaang.",
                'PreparingOrder' => "Är Bestellung gëtt virbereet a gëtt geschwënn geschéckt.",
                'SentOrder' => "Är Bestellung gouf geschéckt. Dir kritt et geschwënn.",
                'ToCustomer' => "Är Bestellung gouf geliwwert. Mir hoffen dir genéisst et!",

                'PreparingOrder-PICKUP' => "Är Bestellung gëtt virbereet. Dir kritt eng Notifikatioun wann et fäerdeg ass fir opzehuelen.",
                'SentOrder-PICKUP' => "Är Bestellung ass prett fir ofzehuelen. Kommt w.e.g. an de Buttek fir se ze sammelen.",
                'ToCustomer-PICKUP' => "Är Bestellung gouf ofgeholl. Mir hoffen dir genéisst et!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Är Bestellung ass an der Schlaang fir d'Veraarbechtung. Mir informéieren Iech wann et fäerdeg ass.",
                'OrderConfirm' => "Är Bestellung ass bestätegt an d'Virbereedung ass amgaang.",
                'PreparingOrder' => "Är Bestellung gëtt virbereet a wäert Iech geschwënn geschéckt ginn.",
                'ToCustomer' => "Är virtuell Bestellung gouf op Äre Kont geliwwert. Merci!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Är Service Ufro ass an der Schlaang. Mir informéieren Iech wa mir ufänken.",
                'OrderConfirm' => "Äre Service ass bestätegt a mir preparéiere fir unzefänken.",
                'PreparingOrder' => "Mir preparéieren Äre Service a wäerten Iech matdeelen wann et fäerdeg ass.",
                'ToCustomer' => "Äre Service ass komplett. Merci datt Dir eis gewielt hutt!"
            ],
            'FILE' => [
                'PreparingOrder' => "Äre Fichier gëtt virbereet a wäert geschwënn verfügbar sinn.",
                'ToCustomer' => "Äre Fichier ass prett a gouf geliwwert. Dir kënnt et elo eroflueden."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Är Abonnementbestellung ass an der Schlaang. Mir informéieren Iech wann d'Veraarbechtung ufänkt.",
                'OrderConfirm' => "Ären Abonnement gouf bestätegt a gëtt ageriicht.",
                'PreparingOrder' => "Mir preparéieren Ären Abonnement an et fänkt geschwënn un.",
                'SentOrder' => "Ären Abonnement gouf aktivéiert. Dir wäert lafend Updates kréien.",
                'ToCustomer' => "Ären Abonnement Service gouf erfollegräich aktivéiert."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Gratulatioun :name|Neie Bong: :title',
        'category' => "GRATULATIOUN, NEW BON",
        'message' => "Hey :name,<br><br>Dir hutt en neie Bong als Kaddo vun eis kritt! Dir kënnt nach méi Bongen verdéngen andeems Dir Selldone fir Är Frënn a jidderee kennt. Dëse Bong ass derwäert **:price :currency**.<br><br>Dir hutt den éischte Schrëtt gemaach, a mir sinn hei fir Iech ze hëllefen nei Features mat Ärem Bong ze spären! Mellt Iech w.e.g. mat **:email** un a fann Äre Bong am Shop **Dashboard** > **Astellungen** > **Lizenz**.<br><br>Gratulatioun!",
        'action' => "Meng Dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Gratulatioun, Léif :name | Dir hutt e Kaddo kritt',
        'category' => "Ukënnegung vun engem Cadeau kréien",
        'title' => "Kaddoen fir Iech",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Geschenker",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Nei Bestellung kritt | :order_id",
        'title' => "New Order",
        'message' => "Dir hutt eng nei Bestellung kritt. Gitt w.e.g. op d'Bestellungsveraarbechtungssäit an Ärem Geschäft.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Är gefëllt Informatiounen',
        'output-form-title' => 'Kaaft Artikel Informatiounen',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Wochemaart Rapport :time',
        'title' => 'Wochemaart Buttek Leeschtung Rapport',
        'message' => "Dëst ass Äre Geschäft wöchentlech Bericht vun <b>:start</b> bis <b>:end</b>. Dëse Bericht enthält Tipps fir Äert Geschäft ze verbesseren, Dir kënnt och de Status vun Ärem Online Store a rezent Bestellungen iwwerpréiwen. Ech hoffen Dir hutt e gudden Dag a Woch virun."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Äre :amount Spuerbericht an de leschten dräi Méint| :shop_title',
        'title' => 'Saisonal Bericht iwwer Är Geschäftsaktivitéit, Belounungen a finanziell Erspuernisser',
        'message' => "Dëst ass Äre <b>:shop_title</b> saisonal Bericht vun <b>:start</b> bis <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Verbonne Konten',
        'sub-title' => 'Wat ass de leschte Status vu Portemonnaiekonten, déi mat mengem Geschäft verbonne sinn?',
        'view-wallet' => 'Portemonnaie kucken',
        'tip-title' => 'Wichteg Tipps',
        'tip' => "Setzt e gratis Selldone Portemonnaie op a verbënnt et mat Ärem Geschäft. Och wann Äre Gläichgewiicht negativ ass, kënnen Är Clienten ëmmer ouni Probleemer shoppen a bezuelen. Maacht Iech keng Suergen, d'Operatiounen an d'Donnéeën vun Ärem Geschäft ginn bis zu 1 Mount glat weider, ouni Ënnerbriechungen.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Connect op Kont'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps installéiert',
        'sub-title' => 'Lëscht vun Apps déi Dir dës Woch an Ärem Geschäft installéiert hutt.',
        'tip' => "Wëllt Dir méi Apps fir Äre Buttek fannen?",
        'view-app-store' => 'Besicht de Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Äre Buttek Bots',
        'sub-title' => 'Aktiv Verkafsbots a mengem Geschäft.',
        'tip-title' => 'Bot Verkaf',
        'tip' => "Selldone huet Iech automatesch Verkafsbots zur Verfügung gestallt. Alles wat Dir maache musst ass op d'Add-ons> Bots Panel ze goen an Är Store Bots aktivéieren. Notéiert datt de relevante Service an Ärem Land verfügbar muss sinn.",
        'view-bots' => 'Bots managen',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kommunikatioun mat Clienten',
        'sub-title' => 'Wéi vill Kontakter hunn ech dës Woch mat menge Clienten?',
        'faqs' => 'Oft gestallten Froen',
        'tickets' => 'Client Ticketen',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Benotzer Status',
        'sub-title' => 'Aktivitéit vun :start zu :end',
        'users' => [
            'title' => 'Clienten',
            'subtitle' => 'Umeldung Benotzer',
        ],
        'views' => [
            'title' => 'Visiten',
            'subtitle' => 'Wéi oft hutt Dir de Buttek besicht',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Retour Benotzer',

        'shop_views' => 'Shop Meenung',
        'baskets' => [
            'title' => 'Shopping Weenchen',
            'subtitle' => 'Rapport d\'Zuel vun neie Shopping Weenchen',
        ],
        'products' => [
            'title' => 'Produkter Iwwersiicht',
            'subtitle' => 'Status vun de Produkter am Geschäft no Typ',
            'value_name' => 'Produkter'
        ],
        'products_count' => 'Produit Zorte',
        'views_count' => 'View Zuel',
        'sell_count' => 'Verkafen zielen',
        'send_count' => 'Versandzuelen',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel fir grouss Verkeefer vun Drop Shipping Selldone.',
        'total_fulfillments' => 'Total Bestellungen Erhalen',
        'ds_count' => 'Bestellungen kritt',
        'statistics_title' => 'Rapport kritt Commanden',
        'ds_cancels' => 'Ofbriechen vum Interface Verkeefer',
        'ds_rejects' => 'Ofbriechen vun Iech',
        'tip' => "Sidd Dir e grousse Verkeefer vu Wueren? Hutt Dir e Lager, Fabréck oder Distributeur vu Produkter? Dir kënnt Är Produkter un aner Verkeefer am Selldone Drop Shipping Service ubidden fir Äert Produkt op enger grousser Skala ze verkafen. E-Mail eis op support@selldone.com fir Iech ze guidéieren.",
        'view-drop-shipping-panel' => 'Login op Grousshandel Panel',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Exchange Taux',
        'sub-title' => 'Lëscht vun de leschten Währung Konversioun Tariffer an Ärem Geschäft.',
        'from' => 'Quell Währung',
        'to' => 'Destinatioun Währung',
        'rate' => 'Taux vun Konversioun',
        'view-exchange-panel' => 'Exchange Tariffer verwalten',
    

        'vew-exchange-panel' => 'Austausch Taux Gestioun Panel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Expert Kontrakter',
        'sub-title' => 'Wat Fachleit schaffen op mengem Buttek?',
        'cost' => 'Kontrakt Betrag',
        'duration' => 'Dauer',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum Ofbriechen',
        'end_at' => 'Liwwerungsdatum',
        'tip' => 'Dir kënnt déi bescht Spezialisten zu Selldone astellen fir Äert Geschäft z\'entwéckelen.',
        'view-experts' => 'Klickt fir unzefänken.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Aktiv Payment Gateways op Ärem Buttek :shop',
        'tip-title' => 'Wichteg Tipps',
        'tip' => "Gitt op d'Portalmanagement Säit an Ärem Geschäft a füügt op d'mannst ee Port an e puer Minutten derbäi. Är Clientë gär séier a sécher duerch Online Portale bezuelen.",
        'view-shop-gateways' => 'Login op meng Buttek Portal Gestioun.',
        'view-gateways' => 'Gesinn méi Paarte',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Bestellungen',
        'sub-title' => 'Lëscht vun Bestellungen déi ech dës Woch krut.',
        'total_baskets' => 'Total Commanden',
        'total_posBaskets' => 'Total Cash Commanden',
        'pos-title' => 'POS Store Këscht',
        'chart-label' => 'Bestellungen ofgeschloss (dës Bestellunge sinn net onbedéngt bezuelt!)',
        'tip-title' => 'Dir sollt méi haart probéieren ...',
        'tip' => "Keen einfachen Erfolleg.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Veraarbechtung Zentrum',
        'sub-title' => 'Wéi vill Bestellung hu mir dës Woch am Geschäft veraarbecht?',
        'tip-title' => 'Dir hutt kee Verkaf!',
        'tip' => "Leider hutt Dir dës Woch kee Verkaf. Dir musst méi an Äre Buttek kréien. Dir kënnt méi Produkter derbäi, besser Biller wielen oder besser Beschreiwunge fir Är Produkter schreiwen. Betruecht eng Vollzäitaarbecht fir Äert Geschäft. Wann Dir et richteg maacht an net frustréiert sidd, wäert Dir Erfolleg hunn.",
        'view-process-center' => 'View Prozess Zentrum',
        'return' => [
            'title' => 'Retour Bestellung',
            'subtitle' => 'Rapport zréck Bestellungen.',
            'tip-title' => 'Wousst Dir datt ...',
            'tip' => "Dir kënnt sou vill Cash Registere erstellen wéi Dir braucht mat Selldone POS! Egal ob et Ären Tablet, Handy oder Laptop ass, Dir kënnt all Apparat an de Verkafspunkt vun Ärem Geschäft ëmsetzen. Et ass einfach, séier opzestellen, a voll virbereet fir Äre Server. Start et haut ze benotzen!",
            'view-pos' => 'Login op Mäi Online Store Keesseberäich'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessiounen',
        'sub-title' => 'Wéi oft hunn ech mäi Geschäft besicht?',
        'countries-title' => 'Wéi eng Länner goufen am meeschte besicht?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Wëllt Dir Sue verdéngen ouni ee Buck auszeginn?',
        'message' => "Léif :name, Dir kënnt op Dashboard > Demonetiséierung goen an e Referrallink erstellen. Schéckt de Link op Är Frënn, Dir kritt e Selldone Kaddokaarten an e Prozentsaz vun Äre Bezuelungen. Notéiert datt d'Geschenkkaart souwuel un Iech an Äre Frënd geschéckt gëtt.",
        'action' => 'Gesinn meng Aféierung Link',
        'mail-clip' => "<b style='color: #C2185B'>Wichteg:</b> Wann Dir E-Mail Servicer wéi Gmail benotzt, déi d'Längt vun der E-Mail limitéieren, fannt Dir déi folgend Optioun um Enn vun der E-Mail fir de komplette Bericht ze weisen a klickt op:",

        'no-coin-reward' => "<b style='color: #C2185B'>Entschëllegt:</b> Är Aktivitéit entsprécht net der Ufuerderung fir gratis SEL Coins Belounung ze kréien. Probéiert méi haart a verkaaft méi an Ärem Geschäft fir d'nächst Saison.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Félicitatiounen:</b> Super Aarbecht! Baséierend op Är aussergewéinlech Leeschtung, hu mir :amount SEL Mënzen op Äre Kont als Belounung kreditéiert.",

        'need-buy-license' => "<b>Level Up Your Business:</b> Et gesäit aus wéi wann Dir nach keen Abonnementplang fir Är Websäit registréiert hutt! Upgrade elo fir méi Features opzemaachen fir just :amount pro Mount wann all Joer bezuelt.",
        'not-afford-message' => "Wann Dir Iech net leeschte kënnt oder Probleemer mat der Bezuelung hutt, mellt Iech gratis iwwer support@selldone.com.",
        'add-domain' => "<b>Firwat net e personaliséierten Domain fir Äert Geschäft hunn?</b><br> Füügt elo en Domain op Är Websäit; et ass gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone ass a<del> Produit</del> <span style = 'color: forestgreen'>Communautéit</span> .<br> Sidd e professionnelle Selldoner!",
        'message' => "Follegt déi offiziell Säiten vun der Selldone op Twitter, LinkedIn a sozialen Netzwierker. Schéckt eis all Kommentaren, Ufroen oder Kritiken oder deelhuelen un Diskussiounen iwwer de Selldone. Mir sinn och Deel vun der Communautéit vun Selldone datt <b>You mécht</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nei Avocado Bestellunge kritt|:shop_title :time',
        'title' => "Leeschtung Rapport fir déi lescht 24 Stonnen",
        'message' => "Är Clienten waarden op Är Bestellunge fir iwwerpréift a geprägt ze ginn. Äntwert op d'Ufroe vun Äre Clienten sou séier wéi méiglech fir méi Verkaf ze kréien.",
        'card_title' => "Bestellungen an der Schlaang",
        'card_subtitle' => "Zënter :date",

        'card_payed' => "Bezuelt Bestellungen"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Nei Äntwerten op Äre Post an :community_title',
        'title' => ":name, an :count anerer kommentéiert op Är Posts.",
        'message' => "Salut :name, Är Posts kréien Opmierksamkeet! Dir hutt Kommentarer an eiser Gemeinschaft kritt. Mellt Iech op Äre Kont un fir an d'Diskussioun matzemaachen a kuckt wat jiddereen seet.",
        'title-simple' => ":name huet op Äre Post kommentéiert!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Äntwert op Äert Thema :topic_title',
        'title' => ":name, an :count anerer hunn op Ärem Thema geäntwert.",
        'message' => "Salut :name, Äert Thema kritt Opmierksamkeet! Dir hutt Äntwerten an eiser Gemeinschaft kritt. Mellt Iech op Äre Kont un fir an d'Diskussioun matzemaachen a kuckt wat jiddereen seet.",
        'title-simple' => ":name huet op Ärem Thema geäntwert.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Neie Login :name',
        'category' => 'Sécherheet Notifikatiounen',
        'title' => "Login op Kont",
        'message' => "Léif :name, Dir sidd op Äre Selldone Kont ageloggt.",   // Login in selldone (seller)
        'message-shop' => "Léif :name, Dir sidd op :shop_title ageloggt.",  // Login in shop (buyer)

        'footer' => "Wann Dir net ageloggt sidd, ännert w.e.g. Äert Passwuert.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Réckzuch",
        'deposit' => "Depot",

        'withdraw_subject' => "Ofgezu vum Kont :account",
        'deposit_subject' => "Depot op de Kont :account",

        'message' => "D'Suen Transfert gouf mat de folgende Spezifikatioune gemaach.",

        'type' => "Transaktioun Typ",

        'from' => "Quell Kont",
        'to' => "Destination account",

        'desc' => "Transaktioun Beschreiwung",
        'action' => "View Transaktioun",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Wichteg! Regele Verletzung | :shop",
        'category' => "Kritesch informéieren",
        'title' => "Äre Buttek gouf bestrooft",
        'action' => "Open Buttek Dashboard",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter huet Iech invitéiert Selldone matzemaachen",
        'title' => ":name huet Iech :amount geschéckt fir ze hëllefen Ären neien Online Store ze lancéieren an et ze monetiséieren!",
        'message' => "Hallo **:receiver_name**,<br><br>Wëllkomm op Selldone! Op Selldone kënnt Dir einfach Ären E-Commerce Site, Blog, Online Gemeinschaft erstellen, a souguer en Online POS System fir perséinlech Verkaf astellen - alles bannent Minutten. Et ass de komplette Online-Geschäftsbetriebssystem entwéckelt fir Äert Geschäft besser, méi séier a méi einfach ze bedreiwen.<br><br>Sign up by <b>:date</b> a kritt e :amount Bong fir unzefänken!",
        'accept' => "Akzeptéieren Invitatioun",
        'owner' => "Besëtzer vun",
        'join-date' => "Ugeschloss Selldone op",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Erhuelung Link | :shop",
        'category' => "Shop Sécherheet",
        'title' => "Store Erhuelung Link vun <b>:shop_name</b>.",
        'message' => "Dës E-Mail gouf Iech geschéckt well Dir gefrot hutt Äre Buttek ze restauréieren. Klickt op de Link hei drënner wäert Äre Buttek an all Donnéeën, déi derzou gehéieren, recuperéieren.",
        'action' => "Confirméieren Shop Erhuelung",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Wéi vill Sue huet Selldone fir Äert Geschäft gespuert?',
        'sub-title' => 'Vum Datum :start bis :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Serveren, CDN, Storage an aner Cloud Servicer',
        ],
        'experts' => [
            'title' => 'Experten & Personal',
            'subtitle' => 'Entwéckler, Ënnerhalt, an Ënnerstëtzung',
        ],
        'total_save' => 'Total gespäichert Suen'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Är Leeschtung',
        'sub-title' => 'Business Iwwersiicht vun :start zu :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Retour Benotzer',

        'shop_views' => 'Shop Meenung',
        'baskets' => [
            'title' => 'Shopping Weenchen',
            'subtitle' => 'Rapport d\'Zuel vun neie Shopping Weenchen',

        ],
        'products' => [
            'title' => 'Produkter Iwwersiicht',
            'subtitle' => 'Status vun de Produkter am Geschäft no Typ',
            'value_name' => 'Produkter'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total Websäit Säit Meenung',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Dir hutt eng nei Bestellung kritt. Gitt w.e.g. op d'Bestellungsveraarbechtungssäit an Ärem Verkeefer Panel.",
        'subject' => "🛍 Nei Bestellung kritt | :order_id",
        'your_revenue' => "Är Recetten",
    ],
    'vendor-invite' => [
        'title' => 'Verkeefer Invitatioun',
        'message' => "Dir hutt eng Invitatioun kritt fir Verkeefer vun :shop_name ze ginn. Dir kënnt et akzeptéieren oder refuséieren andeems Dir op déi folgend Knäppercher klickt.",
        'subject' => ":shop_name |Invitatioun fir eise Verkeefer ze ginn",
        'accept' => "Akzeptéieren & Gitt e Verkeefer",
        'reject' => "Oflehnen",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitatioun fir eis Team matzemaachen',
        'message' => "Dir sidd invitéiert fir matzemaachen :vendor_name bei :shop_name. Dir kënnt dës Invitatioun akzeptéieren oder refuséieren andeems Dir d'Knäppercher hei drënner benotzt.",
        'subject' => "Invitatioun fir matzeman :vendor_name|Ginn Team Member",
        'accept' => "Akzeptéieren & Maacht mat der Equipe",
        'reject' => "Oflehnen",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Äre Login Code fir :shop",
        'header-message' => "Mir schécken Iech dës E-Mail well Dir e Logincode fir de Buttek gefrot hutt. Fannt w.e.g. Äert One-Time Passwuert (OTP) hei ënnen:",
        'footer-message' => "Dëse Code gëlteg fir 10 Minutten. Wann Dir dëse Logincode net gefrot hutt, ignoréiert w.e.g. dës E-Mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifizéiert Är E-Mail | :shop",
        'title' => 'E-Mail Verifikatioun',
        'header-message' => "Salut :name, <br> Confirméiert w.e.g. datt **:email** Är E-Mailadress ass andeems Dir op de Knäppchen hei drënner klickt oder de Link hei drënner benotzt bannent 48 Stonnen.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produit Aktualiséierungen| :shop",
        'title' => "Update op Produktstatus - lescht 24 Stonnen",
        'message' => "Ech hoffen dëse Message fënnt Iech gutt. Dëst ass e kuerzen Update fir Iech iwwer de Status vun Äre Produkter op eiser Plattform an de leschten 24 Stonnen z'informéieren.\nWärend dëser Period goufen et Ännerungen am Status vun e puer Produkter. Dës Ännerungen kënne wéinst Akeef, Aktieupdates oder aner verbonne Eventer sinn.\nFir méi detailléiert Informatiounen iwwer all Produkt, mellt Iech w.e.g. op Äre Kont a kontrolléiert d'Sektioun 'Produktstatus'.",
        'action' => "Open Vendor Panel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Bulk Bestellunge kritt| :shop | :date",
        'title' => "Bulk Bestellung Notifikatioun",
        'message' => "Dir hutt eng Partie Bulkbestellunge kritt. Besicht w.e.g. d'Bestellungsveraarbechtungssäit an Ärem Panel fir weider Detailer. Dir kënnt och d'Bestellungslëscht iwwer de geliwwerte séchere Link eroflueden, valabel fir 7 Deeg.<br><br>\n        <b>WICHTEG:</b> Dëse Link ass valabel fir 7 Deeg.<br>\n        Dëse Link ass dynamesch, also all Kéier wann Dir et klickt, kritt Dir déi meescht aktualiséiert Bestellunge fir dësen spezifeschen Datum. <b>Et heescht wann d'Bezuelungsstatus vun der Bestellung op refuséiert ännert, gesitt Dir dës Bestellung net méi an der erofgelueden CSV, oder wann d'Bestellung bezuelt gëtt, erschéngt se an der Lëscht.</b><br><br>\n        <ul>\n            <li>D'CSV enthält bezuelte Bestellungen mat engem reservéierten Datum an der :date.</li>\n            <li>Reservéierten Datum ass den Datum wou de Benotzer op der Bestellungssäit d'Kasse klickt.</li>\n        </ul>\n        <b>Fir duplizéiert Bestellungen ze vermeiden, kontrolléiert ëmmer d'Bestellung ID ier Dir schéckt.</b>",
        'action' => "Download Bestellung Lëscht",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "E puer Elementer an Ärer Bestellung goufen net ugeholl a kënnen net geliwwert ginn. De Betrag fir dës Saache gëtt geschwënn op Är Kaart rembourséiert."
    ]

];
