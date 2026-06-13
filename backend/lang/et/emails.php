<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'See teade tervitab uut ostjat poes.',
        ShopMailTemplateCodes::OrderCheckout => 'See teade saadetakse siis, kui ostja kinnitab tellimuse.',
        ShopMailTemplateCodes::OrderPayment => 'See teatis kinnitab kliendi sooritatud makse õnnestumist.',
        ShopMailTemplateCodes::OrderUpdate => 'See sõnum saadetakse ostja teavitamiseks tema tellimuse oleku kohta.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'See teade saadetakse müüjale, et teavitada teda kinnitatud tellimusest.',
        ShopMailTemplateCodes::PosCheckout => 'See teade saadetakse ostja müügikoha tellimuse kinnitamiseks.',
        ShopMailTemplateCodes::PosPayment => 'See teatis kinnitab ostja tehtud müügikoha makse.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'See teade teavitab müüjat tema müügikohas tehtud ostust.',
        ShopMailTemplateCodes::ShopContact => 'See teade saadetakse pärast kontaktivormi esitamist.',
        ShopMailTemplateCodes::ShopGiftCard => 'See teatis teavitab kasutajat kinkekaardi saamisest.',

        ShopMailTemplateCodes::ShopVendorJoin => 'See sõnum tervitab poodi uut müüjat.',
        ShopMailTemplateCodes::ShopVendorInvite => "See sõnum saadetakse selleks, et kutsuda müüjat teie turuplatsiga liituma.",
        ShopMailTemplateCodes::ShopVendorOrder => "See teade saadetakse hankijale, kui tellimus on vastu võetud kas tasutud või sularahas (COD) olekus.",
        ShopMailTemplateCodes::ShopVendorProducts => "Saadetakse iga päev, et teavitada tarnijaid oma toodete olekust.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "See sõnum saadetakse selleks, et kutsuda müüjat teie turuplatsiga liituma.",

        ShopMailTemplateCodes::UserLogin => "Turvalisuse huvides teavitage kasutajat sisselogimisandmetega, sealhulgas IP aadressi, kuupäeva ja seadmega.",
        ShopMailTemplateCodes::LoginCode => "Saatke kasutajatele poodi sisselogimiseks ühekordne paroolikood.",

        ShopMailTemplateCodes::EmailVerifyLink => "Saatke link kasutaja e-posti aadressi kinnitamiseks. See meil saadetakse, kui kasutaja registreerub SMS kaudu ja sisestab oma e-posti aadressi. Seda ei saadeta, kui kasutaja registreerub otse sotsiaalse sisselogimise või e-posti teel.",

        ShopMailTemplateCodes::EmailBulkOrder => "Saatke konkreetse päeva vastuvõetud ja tasutud tellimuste loend hulgi."


    ,

    ],


    'global' => [
        'greetings' => 'Tere, :name!',
        'end-statement' => 'Tugimeeskond',

        'receiver_name' => 'Tere :user_name',
        'footer-help' => "Vajad abi? Küsige aadressil [support@selldone.com](mailto:support@selldone.com) või külastage meie [abikeskust](https://selldone.com/community).",
        'selldone-team' => 'Selldone meeskond',
        'footer-shop' => "Kui vajate milleski abi, palun saatke meile e-kiri: :shop_mail",
        'accept' => "Nõustu",
        'reject' => "Keeldu",
        'verify' => "kontrollida",
        'title' => "Pealkiri",
        'value' => "Väärtus",
        'description' => "Kirjeldus",
        'shop' => "Pood",
        'shop-info' => "Kaupluse teave",
        'user' => "Kasutaja",
        'user-info' => "Konto teave",
        'license' => "Litsents",
        'status' => "Olek",
        'start' => "Alusta",
        'end' => "Lõpp",
        'renewal' => "Uuendamine",
        'view' => "Vaade",

        'balance' => "Tasakaal",
        'card_number' => "Kaardi number",
        'cvv' => "Cvv",
        'expire_date' => "Aegumiskuupäev",

        'Dashboard' => "Armatuurlaud",
        'order' => "tellida",
        'view_order' => "Vaata tellimust",
        'pay_now' => "Pay now",

        'official_selldone' => "AMETLIK MÜÜD",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valuuta",
        'free-balance' => "Tasuta saldo",
        'locked-balance' => "Lukustatud tasakaal",
        'bot' => "Bot",
        'requests' => "Taotlused",
        'baskets' => 'Kärud',
        'physical' => "Füüsiline",
        'virtual' => "Virtuaalne",
        'file' => "Fail",
        'service' => "Teenindus",
        'fulfillment' => "Täitmine",
        'open' => "Avatud",
        'reserved' => "Reserveeritud",
        'canceled' => "Tühistatud",
        'payed' => "Tasuline",
        'cod' => "COD",
        'orders-count' => 'Tellimused',
        'payments-count' => 'Maksed',
        'confirms-count' => 'Kinnitab',
        'sends-count' => 'Saadab',
        'delivers-count' => 'Toidab',
        'count' => 'Count',
        'transactions-count' => 'Tehingud loevad',
        'success-transactions' => 'Edukad tehingud',
        'total-amount' => 'Kogu summa',
        'amount' => 'Summa',
        'wage' => 'Palk',
        'debug' => 'Silumine',
        'pos' => 'POS',
        'live' => 'Otse',
        'CheckQueue' => 'Kontrolli järjekorda',
        'OrderConfirm' => 'Tellimuse kinnitamine',
        'PreparingOrder' => 'Tellimuse ettevalmistamine',
        'SentOrder' => 'Tellimus saadetud',
        'ToCustomer' => 'Tarnitakse kliendile',
        'Pending' => 'Ootel',
        'Accepted' => 'Vastu võetud',
        'Rejected' => 'Tagasi lükatud',
        'pc' => 'PC',
        'tablet' => 'Tahvelarvuti',
        'phone' => 'Telefon',
        'total' => 'Kokku',
        'view-detail' => 'Vaata Üksikasju',
        'empty' => 'Tühi',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Vasta',
        'reactions' => 'Reaktsioonid',
        'Comments' => 'Kommentaarid',
        'last-comment' => 'Viimane kommentaar',
        'response-to' => 'Vastus',
        'posts' => 'Postitused',
        'post' => 'Postita',

        'name' => 'Nimi',
        'email' => 'Meil',
        'type' => 'tüüp',
        'device' => 'Seade',
        'platform' => 'Platvorm',
        'browser' => 'Brauser',
        'time' => 'Aeg',
        'Wallet' => 'Rahakott',
        'date' => 'Kuupäev',

        'account' => 'Konto',
        'transaction' => 'Tehing',
        'fee' => 'Tasu',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategooria',
        'password' => 'Parool',
        'verify-login' => "Kinnitage ja logige sisse",
        'url' => 'URL',
        'avocado' => 'Avokaado',
        'hyper' => 'Hüper',
        'buy-now' => "Osta kohe",
        'add-domain' => "Add Domain",
        'views' => 'Vaated',


        'country' => 'Riik',
        'address' => 'aadress',
        'postal' => 'Postiindeks',
        'building_no' => 'Hoone #',
        'building_unit' => 'Üksus #',
        'message' => 'Sõnum',


        'customer' => 'Klient',
        'cart-items' => 'Ostukorvi kaubad',
        'payment' => 'Makse',
        'receiver' => 'Vastuvõtja',
        'virtual-items' => 'Virtuaalsed üksused',
        'no-payment' => 'Ei mingit makset!',

        'enable' => 'Luba',
        'access' => 'Juurdepääs',
        'bank' => 'Pangainfo',

        'vendor' => 'Müüja',

        'view_content' => "Vaadake täielikku sisu",
        'files' => 'Failid',
        'download' => 'Lae alla',
        'file_name' => 'Faili nimi',
        'file_size' => 'Suurus',

        'subscription' => 'Tellimus',
        'products' => 'Tooted',
        'vendor_products' => 'Müüja tooted',

        'pickup' => 'Korjamine',

        'minutes' => 'Minutid',
        'hours' => 'Tundi',

        'refund' => 'Tagasimakse',
        'recipient_address' => 'Saaja aadress',
        'signature' => 'Allkiri',
        'blockchain' => 'Plokiahel',
        'details' => 'Üksikasjad',


    

        'Shop' => 'Pood',
        'dashboard' => 'armatuurlaud',
        'comments' => 'kommentaarid',
        'wallet' => 'rahakott',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone jõudlusaruanne'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone hooajaaruanne'
        ],
        'Onboarding' => [
            'id' => 'Tere',
            'name' => 'Selldone kaupmehed'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Tugi :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'Tere',
            'name' => 'Selldone kogukond'
        ],
        'NewShop' => [
            'id' => 'kaupmehed',
            'name' => 'Selldone kaupmehed'
        ],
        'Approve' => [
            'id' => 'heaks kiitma',
            'name' => 'Selldone kaupmehed'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Tellimuste haldamine :name'
        ],

        'Recovery' => [
            'id' => 'taastumine',
            'name' => 'Selldone taastamise meeskond'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Ootel ⌛',
        'PAYED' => 'Makstud ✅',
        'CANCELED' => 'Tühistatud ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administraator',
            'OFFICER' => 'Ohvitser ja juhendaja',
            'AUDITING' => 'Auditijuht',
            'EMPLOYEE' => 'Töötaja',
            'PRODUCT' => 'Tootejuht',
            'CONTENT' => 'Sisuhaldur',
            'MARKETING' => 'Turundusjuht',
            'VIEWER' => 'Vaataja',

        ],
        'subject' => ":inviter kutsus teid kui :level| :shop",
        'category' => "Töötajate kutse",
        'title' => "Teid on kutsutud <b>:shop_name</b> kui <b>:level</b>.",
        'message' => "Olete saanud kutse teha koostööd <b>:shop_title</b> meeskonnaga. Teil on võimalus selle pakkumisega nõustuda või sellest keelduda. Kui otsustate nõustuda, logige oma otsuse kinnitamiseks sisse teenusesse Selldone. Kinnitamisel pääsete ligi poehalduse jaotisele.",

    ],

    'welcome-email' => [
        'subject' => "👋 Tere tulemast :name, alustame Selldone-ga!",
        'category' => 'CONGRATULATION',
        'title' => "Tere tulemast Selldone-sse",
        'message' => "Täname, et valisite Selldone! Olete nüüd osa elavast kogukonnast, mis ühendab ülemaailmseid müüjaid klientidega, kohalikke ettevõtteid ettevõtetega ja üksikisikuid ettevõtetega. Kõik meie Master ja Pro tööriistad on teile saadaval **tasuta** ja **piiramatult**. Oleme siin, et teid toetada ja avada uksed teie edule.",

        'index' => "Samm :step.",

        'step-domain' => [
            'title' => 'Lisage oma kohandatud domeen',
            'message' => "Alustamiseks lisage oma kohandatud domeen tasuta poe armatuurlaual jaotises Seaded > Domeenide sätted.",
            'action' => 'Minu domeenide haldamine',
        ],
        'step-landing' => [
            'title' => 'Kohandage oma kodulehte',
            'message' => "Isikupärastage oma kodulehte, avades Armatuurlaud > Lehed. Valige sihtleht või looge uus. See on lihtne ja intuitiivne ning selle kallal saate kohe tööd alustada.",
            'action' => 'Kohandage minu sihtlehte',
        ],
        'step-payment' => [
            'title' => 'Makseviiside seadistamine',
            'message' => "Alustage maksete vastuvõtmist otse oma pangakontole. Makseteenuse pakkujate (nt Stripe, PayPal ja teised) ühendamiseks avage Dashboard > Accounting > Gateway.",
            'action' => 'Lisage makseviisid',
        ],
        'step-products' => [
            'title' => 'Lisage oma tooted',
            'message' => "Lisage lihtsalt tooteid ja kategooriaid menüüs Juhtpaneel > Tooted. See on täpselt nagu arvutis failide ja kaustade haldamine – täielik pukseerimisvalmidus. Samuti saate Exceli abil tooteid hulgi importida. Alustamiseks on saadaval näidismall.",
            'action' => 'Minu toodete haldamine',
        ],
        'step-shipping' => [
            'title' => 'Kohaletoimetamise viiside seadistamine',
            'message' => "Klientidelt saatmise eest tasu võtmiseks määrake oma tarneviisid jaotises Armatuurlaud > Logistika > Saatmine. Saate määrata erinevatele asukohtadele erineva hinna ja toe. Ärge unustage määrata oma lao päritolu jaotises Armatuurlaud > Logistika > Ladu.",
            'action' => 'Tarneviiside haldamine',
        ],
    

        'seller' => [
            'title' => 'Kas olete müüja?',
            'message' => 'Müügi alustamiseks sisestage alloleva lingi kaudu oma Selldone\'i armatuurlaud ja looge oma esimene pood täiesti tasuta. See võtab paar minutit ja teil on oma pood ja veebisait. Seejärel juhendame teid järgmiste sammudeni ja hankime maksevärava.',
            'action' => 'Logige sisse minu armatuurlauale',
        ],
        'buyer' => [
            'title' => 'Olen ostja',
            'message' => 'Palju õnne. Kui olete Selldone\'i liige, vabanete kõigist veebipoodide liikmelisuse ja autentimisega seotud probleemidest. Selldone\'i platvormi kasutavatest kauplustest ja saitidest kasu saamiseks logige sisse ühe klõpsuga ja tehke ostmine lihtsaks, kiireks ja turvaliseks.',
        ],
    ],


    'charge-account' => [
        'category' => 'Rahakott > Konto > Tasu',
        'title' => "Edu tasu",
        'message' => "Teie kontolt <b>:account_number</b> on edukalt laetud <b>:amount</b>.",
        'account' => 'Konto',
        'charge' => 'Lae',
        'balance' => 'Tasakaal',
        'footer' => "Muutke äritegevus lihtsaks, saavutatavaks ja kättesaadavaks kõigile üle maailma."
    ],

    'verify-email' => [
        'subject' => "🙌 Registreeruge Selldone'ile! Kinnitage link.",
        'category' => "OLETE ÜHE SAMMU EEMAL",
        'title' => "Kinnita oma e-posti aadress",
        'message' => "Tere, :name,<br><br> Täname, et valisite Selldone!<br><br> Kinnitamaks, et <b>Q:email</b> on teie õige e-posti aadress, klõpsake allpool olevat linki või kasutage allolevat nuppu. Teil on selle kinnitamise lõpuleviimiseks aega 48 tundi.",
        'footer' => "Kui teil on probleeme nupul Kinnita klõpsamisega, kopeerige ja kleepige allolev URL oma veebibrauserisse: :activation_url",
        'next-step' => "Järgmisena saadame teile kasulikke materjale ja samm-sammulise juhendi, mis hõlbustab kohandatud domeeni lisamist, maksete seadistamist, toodete lisamist ja esimese tellimuse saamist.",

    ],
    'verify-email-code' => [
        'subject' => "Kinnituskood :name jaoks",
        'category' => "SECURITY",
        'title' => "Meili kinnituskood",
        'message' => "Tere, :name, <br><br> Kinnitamaks, et <b>:email</b> on teie õige e-posti aadress, sisestage järgmise <b>Q10 minuti jooksul </b> järgmine kood:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Teie pood on valmis| :name",
        'category' => "OLETE ÜHE SAMMU EEMAL",
        'title' => "Seadistamine lõpetatud",
        'account_title' => "Sinu konto",
        'account_msg' => "Kinnitage ja logige selle teabega oma kontole sisse.",
        'shop_msg' => "Kontoteave Selldone'i ettevõtte operatsioonisüsteemi kohta.",

    ],

    'reset2fa' => [
        'category' => "TURVALISUSE AMETLIK SÕNUM",
        'title' => "Taotlege kaheastmelise sisselogimise keelamist",
        'message' => "Saite selle meili, kuna saime taotluse lähtestada **:name** konto kahefaktoriline autentimine e-postiga **:email**.<br><br>Leidsime teie konto kohta järgmised üksikasjad:",
        'footer' => "Kui te parooli lähtestamist ei taotlenud, pole vaja täiendavaid toiminguid teha.",
        'action' => 'Keela kaheastmeline sisselogimine',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Sinu pood on nüüd valmis!",
        'category' => "BORN UUS VEEBIPOOD MAAILMAS",
        'title' => "Palju õnne, :name!",
        'message' => "<b>Õnnitleme, :name! Teie uus veebiäri on nüüd aktiivne!</b> Meil ​​on hea meel tervitada teid Selldonersi kogukonnas. Olete astunud esimese sammu edu suunas ja me oleme siin, et aidata teid igal sammul.<br>Nüüd, kui teie pood on valmis, veenduge, et olete valmis saama makseid otse oma klientidelt ja alustage oma impeeriumi kasvatamist. Kui vajate kunagi abi, oleme vaid sõnumi kaugusel – meie tugitiim on alati teie jaoks olemas.<br>Q<br><b>Q</b> Olulised järgmised sammud:</b> Alustuseks veenduge, et olete maksete vastuvõtmiseks ja sujuvaks toimimiseks valmis. Juhendame teid läbi iga etapi, et teie pood saaks sujuvalt töötada.",
        'pdf-book' => "Ärge jätke tähelepanuta lisatud käsiraamatut: Tee oma äri nagu mäng",

        'account' => [
            'title' => '1. samm: looge Selldone\'i rahakotis konto',
            'message' => "Alustuseks looge oma Selldone rahakotis konto. See on koht, kus teie tasud maha arvatakse ja see on koht, kus saate oma poe tõrgeteta toimimise tagamiseks ka lisatasusid teha. Kui teie saldo läheb kunagi negatiivseks, ärge muretsege! Teie pood jätkab tööd katkestusteta.",
            'action' => 'Logi sisse rahakotti',
        ],

        'shop-account' => [
            'title' => '2. samm: ühendage konto poega',
            'message' => "Järgmisena ühendage oma rahakoti konto oma poega. Avage <b>Store > Raamatupidamine > Arve</b> ja ühendage oma rahakott. See tagab, et kõik klientide maksed kantakse otse teie pangakontole – Selldone ei võta teie tuludest maha ühtegi summat.",
            'action' => 'Poe arvete paneel',
        ],

        'gateway' => [
            'title' => '3. samm: ühendage veebimaksete lüüsi',
            'message' => "Nüüd seadistame teie veebimaksete lüüsi. Avage <b>Store > Raamatupidamine > Port</b> ja klõpsake nuppu <b>Lisa uus port</b>. Valige oma valuuta ja näete saadaolevate makselüüside loendit. Lüüsi ühendamine on kiire ja lihtne, kuid kui vajate abi, vaadake Selldone juhendeid või võtke meiega ühendust.",
            'action' => 'Lisage poodi portaal',
        ],

        'domain' => [
            'title' => 'Viimane samm: spetsiaalse domeeni ühendamine',
            'message' => "Nüüd linkige oma kohandatud domeen oma poega. See võimaldab klientidel osta teie tooteid või teenuseid ja teha makseid otse teile.",
            'action' => 'Tutvustame ja saate piiramatult kinkekaarte',
        ],
    ],


    'basket-list' => [
        'item' => "üksus",
        'count' => "Count",
        'price' => "hind",
        'discount-code' => "Sooduskood",
        'customer-club' => 'Kliendiklubi',
        'shipping' => "Saatmine",
        'total' => "Kokku",
        'offer' => "Pakkumine",
        'coupon' => "Kupong",
        'lottery' => "Auhind",
        'tax' => "Maksud",
        'tax_included' => "Hinna sees",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'meetod',
        'amount' => 'Summa',
        'giftcard' => 'Gift card',
        'payment' => 'Makse',
    ],


    'shop-subscription-email' => [
        'category' => "Tellimuse värskendus",
        'title' => "Kaupluse litsents: :shop_title",
        'title-reserved' => "Litsentsi reserv: :shop_title",
        'title-active' => "Aktiivne litsents: :shop_title",
        'title-finished' => "Lõpetatud litsents: :shop_title",
        'title-cancel' => "Tühista litsents: :shop_title",
        'message' => "Teie kaupluse litsentsiplaani värskendati,",
        'RESERVED' => "⚡ Teie liitumispakett on **reserveeritud**.",
        'ACTIVE' => "🟢 Teie liitumispakett on **aktiveeritud**.",
        'FINISHED' => "🚧 Teie liitumisplaan on **valmis**.",
        'CANCEL' => "⛔ Teie liitumispakett on **tühistatud**.",
    ],

    'support' => [
        'subject' => "Tugikeskus | :name vastas",
        'category' => "Tugikeskus",
        'title' => "Saite vastuse",
        'action' => "Ava poe administraator",
    ],

    'shop-customer-join' => [
        'subject' => "Liitu :shop_title",
        'category' => "Uue kliendi tähistamine",
        'title' => "Meil on hea meel teie liikmelisuse üle",
        'action' => "Külastage kohe",
    ],

    'shop-vendor-join' => [
        'subject' => "Müüja liitumine| :shop_title",
        'category' => "Uue müüja tähistamine",
        'title' => "Meil on hea meel teie liikmelisuse üle",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kinkekaart :shop_title",
        'category' => "Lisa uus kaart",
        'title' => "Palju õnne, olete saanud kinkekaardi",
        'action' => "Osta nüüd",
        'message' => "Olete saanud kinkekaardi väärtusega :balance :currency. Seda kinkekaarti saad kasutada meie poes.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Tugikeskus| :shop",
        'category' => "toetust",
        'title' => "Saite vastuse",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Tellimuse kinnitus|Tellige :order_id",
        'title' => "tellida",
        'message' => "Esitasite meie poes tellimuse. Saime teie tellimuse kätte ja pärast makse kinnitamist saadame teile uue meili."
    ,

        'payments' => 'Maksed',
    ],

    'order-payment' => [
        'subject' => "🛍️ Makse kinnitus|Tellige :order_id",
        'title' => "Maksekorraldus",
        'message' => "Teie makse sooritatud,<br> Meil on teie tellimus. Kui tellimus on kohale toimetatud, saadame teile uue meili.",
    

        'payments' => 'Maksed',
    ],

    'order-update' => [
        'subject' => "🛍️ Tellimuse oleku värskendus|Tellige :order_id",
        'title' => "Tellimuse oleku värskendus",
        'message' => "Teie tellimust on värskendatud. Saate vaadata selle tellimuse viimast olekut oma kontol.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Teie tellimus on töötlemise järjekorras. Anname teile teada, kui see on ette valmistatud.",
                'OrderConfirm' => "Teie tellimus on kinnitatud ja ettevalmistus on alanud.",
                'PreparingOrder' => "Teie tellimust valmistatakse ette ja saadetakse peagi teele.",
                'SentOrder' => "Teie tellimus on teele saadetud. Saate selle peagi kätte.",
                'ToCustomer' => "Teie tellimus on kohale toimetatud. Loodame, et naudite seda!",

                'PreparingOrder-PICKUP' => "Teie tellimust valmistatakse ette. Saate märguande, kui see on järeletulemiseks valmis.",
                'SentOrder-PICKUP' => "Teie tellimus on järeletulemiseks valmis. Palun tulge sellele poodi järele.",
                'ToCustomer-PICKUP' => "Teie tellimus on järgi võetud. Loodame, et naudite seda!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Teie tellimus on töötlemise järjekorras. Anname teile teada, kui see on valmis.",
                'OrderConfirm' => "Teie tellimus on kinnitatud ja ettevalmistus käib.",
                'PreparingOrder' => "Teie tellimust valmistatakse ette ja saadetakse teile peagi.",
                'ToCustomer' => "Teie virtuaalne tellimus on teie kontole toimetatud. Aitäh!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Teie teenusetaotlus on järjekorras. Anname teile teada, kui alustame.",
                'OrderConfirm' => "Teie teenus on kinnitatud ja me valmistume alustama.",
                'PreparingOrder' => "Valmistame teie teenust ette ja teavitame teid, kui see on lõpetatud.",
                'ToCustomer' => "Teie teenus on valmis. Täname, et valisite meid!"
            ],
            'FILE' => [
                'PreparingOrder' => "Teie faili valmistatakse ette ja see on peagi saadaval.",
                'ToCustomer' => "Teie fail on valmis ja kohale toimetatud. Nüüd saate selle alla laadida."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Teie tellimuse tellimus on järjekorras. Anname teile teada, kui töötlemine algab.",
                'OrderConfirm' => "Teie tellimus on kinnitatud ja seda seadistatakse.",
                'PreparingOrder' => "Valmistame teie tellimust ette ja see algab peagi.",
                'SentOrder' => "Teie tellimus on aktiveeritud. Saate jooksvaid uuendusi.",
                'ToCustomer' => "Teie tellimusteenus on edukalt aktiveeritud."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Õnnitlused :name | Uus vautšer: :title',
        'category' => "PALJU ÕNNE, UUS VOUCHER",
        'message' => "Hei :name,<br><br>Saite meilt kingituseks uue vautšeri! Saate teenida veelgi rohkem vautšereid, kui tutvustate Selldone-d oma sõpradele ja kõigile tuttavatele. See vautšer on väärt **:price :currency**.<br><br>Olete astunud esimese sammu ja me aitame teil vautšeriga uusi funktsioone avada! Logige sisse numbriga **:email** ja leidke oma vautšer poest **Armatuurlaud** > **Seaded** > **Litsents**.<br><br>Õnnitleme!",
        'action' => "Minu armatuurlaud",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Palju õnne, kallis :name | Sa said kingituse',
        'category' => "Teade kingituse saamisest",
        'title' => "Kingitused teile",
        'message' => "Tere :name! Meil on hea meel teile teatada, et olete saanud Selldone erilise kingituse! 🎉 Saate teenida rohkem kingitusi, kui olete aktiivne, laiendate oma poodi ja täiendate oma teadmisi Selldone kohta. Kingituse vaatamiseks logige lihtsalt sisse :email ja otsige seda oma armatuurlaua paremast ülanurgast.<br><br>Selle kingituse väärtus on **:price :currency** ja saate selle hõlpsalt oma rahakotti hoiustada Selldone'is.<br><br>Kasutage oma kingitust oma poe litsentsi uuendamiseks ja avage veelgi võimsamad tööriistad oma veebiäri edendamiseks!",
        'action' => "Kingitused",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Uus tellimus vastu võetud| :order_id",
        'title' => "New Order",
        'message' => "Saite uue tellimuse. Palun minge oma poe tellimuste töötlemise lehele.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Teie täidetud teave',
        'output-form-title' => 'Ostetud kauba teave',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Iganädalane aruanne :time',
        'title' => 'Iganädalane poe toimivusaruanne',
        'message' => "See on teie poe iganädalane aruanne <b>:start</b> kuni <b>:end</b>. See aruanne sisaldab näpunäiteid oma ettevõtte parandamiseks, samuti saate kontrollida oma veebipoe olekut ja hiljutisi tellimusi. Loodan, et teil on ees hea päev ja nädal."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Teie :amount säästmisaruanne viimase kolme kuu jooksul| :shop_title',
        'title' => 'Hooajaline aruanne teie äritegevuse, preemiate ja rahaliste säästude kohta',
        'message' => "See on teie <b>:shop_title</b> hooajaaruanne alates <b>:start</b> kuni <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Ühendatud kontod',
        'sub-title' => 'Mis on minu poega ühendatud rahakotikontode viimane olek?',
        'view-wallet' => 'Vaata rahakotti',
        'tip-title' => 'Olulised näpunäited',
        'tip' => "Seadistage tasuta Selldone rahakott ja linkige see oma poega. Isegi kui teie saldo on negatiivne, saavad teie kliendid endiselt probleemideta sisseoste teha ja maksta. Ärge muretsege, teie poe toimingud ja andmed jätkuvad sujuvalt ja katkestusteta kuni 1 kuu.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Ühendage kontoga'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Rakendused installitud',
        'sub-title' => 'Sellel nädalal oma poodi installitud rakenduste loend.',
        'tip' => "Kas soovite leida oma poe jaoks rohkem rakendusi?",
        'view-app-store' => 'Külastage Selldone\'i rakenduste poodi..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Teie poe robotid',
        'sub-title' => 'Aktiivsed müügirobotid minu poes.',
        'tip-title' => 'Boti müük',
        'tip' => "Selldone on varustanud teid automaatsete müügirobotidega. Kõik, mida pead tegema, on avada paneeli Lisandmoodulid> Botid ja aktiveerida oma poe robotid. Pange tähele, et vastav teenus peab teie riigis saadaval olema.",
        'view-bots' => 'Hallake roboteid',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Suhtlemine Klientidega',
        'sub-title' => 'Kui palju on mul sel nädalal oma klientidega kontakte olnud?',
        'faqs' => 'Korduma kippuvad küsimused',
        'tickets' => 'Kliendi piletid',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Kasutajate olek',
        'sub-title' => 'Tegevus alates :start kuni :end',
        'users' => [
            'title' => 'Kliendid',
            'subtitle' => 'Registreeruvad kasutajad',
        ],
        'views' => [
            'title' => 'Külastused',
            'subtitle' => 'Mitu korda olete poodi külastanud',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Tagasi pöördunud kasutajad',

        'shop_views' => 'Poe vaated',
        'baskets' => [
            'title' => 'Ostukärud',
            'subtitle' => 'Teatage uute ostukorvide arvust',
        ],
        'products' => [
            'title' => 'Toodete ülevaade',
            'subtitle' => 'Toodete olek poes tüübi järgi',
            'value_name' => 'Tooted'
        ],
        'products_count' => 'Tootetüübid',
        'views_count' => 'Vaatamiste arv',
        'sell_count' => 'Müük arv',
        'send_count' => 'Saatmise arv',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Drop Shipping Selldone suuremate müüjate paneel.',
        'total_fulfillments' => 'Saabunud tellimusi kokku',
        'ds_count' => 'Vastu võetud tellimusi',
        'statistics_title' => 'Teatage saadud tellimustest',
        'ds_cancels' => 'Tühista liidese müüja',
        'ds_rejects' => 'Tühista teie poolt',
        'tip' => "Kas olete suur kaupade müüja? Kas teil on ladu, tehas või toodete turustaja? Saate pakkuda oma tooteid teistele müüjatele Selldone Drop Shipping teenuses, et oma toodet suures mahus müüa. Saatke meile e-kiri aadressil support@selldone.com, et teid juhendada.",
        'view-drop-shipping-panel' => 'Logi sisse hulgimüügipaneeli',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Vahetus kurss',
        'sub-title' => 'Teie poe uusimate valuutavahetuskursside loend.',
        'from' => 'Lähtevaluuta',
        'to' => 'Sihtkoha valuuta',
        'rate' => 'Konversioonimäär',
        'view-exchange-panel' => 'Hallake vahetuskursse',
    

        'vew-exchange-panel' => 'vahetuskursi juhtimispaneel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ekspertlepingud',
        'sub-title' => 'Millised spetsialistid minu poes töötavad?',
        'cost' => 'Lepingu summa',
        'duration' => 'Kestus',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Kuupäev Tühista',
        'end_at' => 'Tarnetähtaeg',
        'tip' => 'Oma äri arendamiseks saate palgata Selldone parimaid spetsialiste.',
        'view-experts' => 'Alustamiseks klõpsake.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Teatage poes :shop aktiivsetest makseväravatest.',
        'tip-title' => 'Olulised näpunäited',
        'tip' => "Minge oma poes portaalihalduse lehele ja lisage mõne minuti pärast vähemalt üks port. Teie klientidele meeldib veebiportaalide kaudu kiiresti ja turvaliselt maksta.",
        'view-shop-gateways' => 'Logige sisse minu poe portaali haldusse.',
        'view-gateways' => 'Vaadake rohkem lüüsi',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Tellimused',
        'sub-title' => 'Sellel nädalal saadud tellimuste nimekiri.',
        'total_baskets' => 'Tellimusi kokku',
        'total_posBaskets' => 'Sularahakorraldused kokku',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Tellimused täidetud (neid tellimusi ei pea tingimata maksma!)',
        'tip-title' => 'Peaksid rohkem pingutama...',
        'tip' => "Ei mingit lihtsat edu.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Töötlemiskeskus',
        'sub-title' => 'Kui palju tellimusi me sel nädalal poes töötlesime?',
        'tip-title' => 'Teil ei olnud müüki!',
        'tip' => "Kahjuks ei olnud teil sel nädalal ühtegi müüki. Peate oma poodi rohkem jõudma. Saate lisada rohkem tooteid, valida paremaid pilte või kirjutada oma toodetele paremaid kirjeldusi. Kaaluge oma ettevõtte jaoks täiskohaga tööd. Kui teete seda õigesti ja ei pettu, siis õnnestub.",
        'view-process-center' => 'Vaata protsessikeskust',
        'return' => [
            'title' => 'Tagastatud tellimus',
            'subtitle' => 'Teatage tagastatud tellimustest.',
            'tip-title' => 'Kas teadsite, et ...',
            'tip' => "Selldone POS-iga saate luua nii palju kassaaparaate kui vaja! Olgu selleks tahvelarvuti, mobiiltelefon või sülearvuti, saate muuta mis tahes seadme oma poe müügikohaks. See on lihtne, kiiresti seadistatav ja teie serveri jaoks täielikult ette valmistatud. Alustage selle kasutamist juba täna!",
            'view-pos' => 'Logige sisse Minu veebipoe kassasse'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Seansid',
        'sub-title' => 'Mitu korda ma oma poodi külastasin?',
        'countries-title' => 'Milliseid riike on enim külastatud?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Kas soovite teenida raha ilma ühte dollarit kulutamata?',
        'message' => "Kallis :name, võite minna valikusse Armatuurlaud > Demonetiseerimine ja luua viitelingi. Saatke link oma sõpradele, saate Selldone kinkekaardid ja protsendi oma sõbra maksetest. Pange tähele, et kinkekaart saadetakse nii teile kui teie sõbrale.",
        'action' => 'Vaata minu tutvustuse linki',
        'mail-clip' => "<b style='color: #C2185B'>Tähtis.</b> Kui kasutate meiliteenuseid (nt Gmail), mis piiravad meili pikkust, leidke meili lõpust järgmine valik, et kuvada kogu aruanne, ja klõpsake sellel.",

        'no-coin-reward' => "<b style='color: #C2185B'>Vabandust:</b> teie tegevus ei vastanud tasuta SEL Coinsi preemia saamise nõudele. Proovige rohkem ja müüge järgmisel hooajal oma poes rohkem.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Õnnitleme:</b> Suurepärane töö! Teie silmapaistva toimivuse põhjal oleme teie kontole preemiaks kandnud :amount SEL münte.",

        'need-buy-license' => "<b> Tõstke oma ettevõtet: </b> Näib, et te pole veel oma veebisaidi jaoks ühtegi tellimusplaani registreerinud! Täiendage kohe, et avada rohkem funktsioone vaid :amount eest kuus, kui tasute aastas.",
        'not-afford-message' => "Kui te ei saa endale lubada või teil on maksega probleeme, andke meile julgelt teada aadressil support@selldone.com.",
        'add-domain' => "<b>Miks mitte omada oma ettevõtte jaoks kohandatud domeeni?</b><br> Lisage kohe oma veebisaidile domeen; see on tasuta!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone on <del>toode</del> <span style = 'color: forestgreen'> kogukond</span>.<br>Olge professionaalne müüja!",
        'message' => "Jälgige Selldone'i ametlikke lehti Twitteris, LinkedInis ja sotsiaalvõrgustikes. Saatke meile kommentaare, taotlusi või kriitikat või osalege Selldone'i teemalistes aruteludes. Oleme ka osa teie loodud <b>Selldone</b> kogukonnast."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Sai uued avokaado tellimused | :shop_title :time',
        'title' => "Toimivusaruanne viimase 24 tunni kohta",
        'message' => "Teie kliendid ootavad teie tellimuste ülevaatamist ja hinna määramist. Müügi suurendamiseks vastake oma klientide päringutele niipea kui võimalik.",
        'card_title' => "Tellimused järjekorras",
        'card_subtitle' => "Alates :date",

        'card_payed' => "Tasulised tellimused"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Vastake oma postitusele kogukonnas :community_title',
        'title' => ":name ja :count teised kommenteerisid teie postitusi.",
        'message' => "Tere :name, teie postitused tõmbavad tähelepanu! Olete saanud meie kogukonnas kommentaare. Logige sisse oma kontole, et liituda aruteluga ja näha, mida kõik räägivad.",
        'title-simple' => ":name kommenteeris sinu postitusi.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Vasta oma teemale :topic_title',
        'title' => ":name ja :count teised vastasid sinu teemal.",
        'message' => "Tere :name, teie teema tõmbab tähelepanu! Olete saanud meie kogukonnas vastuseid. Logige sisse oma kontole, et liituda aruteluga ja näha, mida kõik räägivad.",
        'title-simple' => ":name vastas sinu teemal.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Uus sisselogimine :name',
        'category' => 'Turvateated',
        'title' => "Logige sisse kontole",
        'message' => "Kallis :name, olete oma Selldone'i kontole sisse loginud.",   // Login in selldone (seller)
        'message-shop' => "Kallis :name, sa oled sisse logitud saidile :shop_title.",  // Login in shop (buyer)

        'footer' => "Kui te pole sisse logitud, muutke oma parool.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Väljavõtmine",
        'deposit' => "Deposiit",

        'withdraw_subject' => "Võtke kontolt :account välja",
        'deposit_subject' => "Sissemakse kontole :account",

        'message' => "Rahaülekanne on tehtud järgmiste spetsifikatsioonidega.",

        'type' => "Tehingu tüüp",

        'from' => "Lähtekonto",
        'to' => "Destination account",

        'desc' => "Tehingu kirjeldus",
        'action' => "Vaata tehingut",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Tähtis! Reeglite rikkumine| :shop",
        'category' => "Kriitiline teave",
        'title' => "Teie kauplust karistati",
        'action' => "Ava poe armatuurlaud",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter kutsus teid Selldone'i",
        'title' => ":name saatis teile :amount, et aidata teil käivitada oma uus veebileht ja seda raha teenida!",
        'message' => "Tere **:receiver_name**, <br><br> Tere tulemast Selldone-sse! Selldone abil saate hõlpsasti luua oma e-kaubanduse saidi, ajaveebi, võrgukogukonna ja isegi seadistada isiklikuks müügiks veebipõhise POS-süsteemi – seda kõike vaid mõne minutiga. See on täielik veebipõhise ettevõtte operatsioonisüsteem, mis on loodud teie ettevõtte paremaks, kiiremaks ja hõlpsamaks käitamiseks.<br><br> Registreeruge <b>:date</b> ja saate alustamiseks :amount vautšeri!",
        'accept' => "Võta kutse vastu",
        'owner' => "Omanik",
        'join-date' => "Liitus Selldone-ga",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Taastamise link| :shop",
        'category' => "Poe turvalisus",
        'title' => "Poe taastamise link <b>:shop_name</b>.",
        'message' => "See meil saadeti teile, kuna taotlesite oma poe taastamist. Alloleval lingil klõpsamine taastab teie poe ja kõik selle juurde kuuluvad andmed.",
        'action' => "Kinnitage poe taastamine",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Kui palju raha Selldone teie ettevõtte jaoks säästis?',
        'sub-title' => 'Alates kuupäevast :start kuni :end',
        'infrastructure' => [
            'title' => 'Infrastruktuur',
            'subtitle' => 'Serverid, CDN, salvestusruum ja muud pilveteenused',
        ],
        'experts' => [
            'title' => 'Eksperdid ja töötajad',
            'subtitle' => 'Arendajad, hooldus ja tugi',
        ],
        'total_save' => 'Kokku säästetud raha'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Teie esitus',
        'sub-title' => 'Äriülevaade alates :start kuni :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Tagasi pöördunud kasutajad',

        'shop_views' => 'Poe vaated',
        'baskets' => [
            'title' => 'Ostukärud',
            'subtitle' => 'Teatage uute ostukorvide arvust',

        ],
        'products' => [
            'title' => 'Toodete ülevaade',
            'subtitle' => 'Toodete olek poes tüübi järgi',
            'value_name' => 'Tooted'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Veebisaidi lehtede vaatamiste koguarv',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Saite uue tellimuse. Minge oma tarnija paneeli tellimuste töötlemise lehele.",
        'subject' => "🛍️ Uus tellimus vastu võetud| :order_id",
        'your_revenue' => "Teie tulu",
    ],
    'vendor-invite' => [
        'title' => 'Müüja kutse',
        'message' => "Olete saanud kutse hakata :shop_name müüjaks. Saate selle vastu võtta või tagasi lükata, kasutades allolevaid nuppe.",
        'subject' => ":shop_name |Kutse hakata meie müüjaks",
        'accept' => "Nõustuge ja hakake müüjaks",
        'reject' => "Keeldu",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Kutse meie meeskonnaga liituma',
        'message' => "Teid on kutsutud :vendor_name-ga liituma saidil :shop_name. Saate selle kutse vastu võtta või tagasi lükata, kasutades allolevaid nuppe.",
        'subject' => "Kutse liituda :vendor_name-ga|Hakka meeskonnaliikmeks",
        'accept' => "Nõustuge ja liituge meeskonnaga",
        'reject' => "Keeldu",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Teie :shop sisselogimiskood",
        'header-message' => "Saadame teile selle meili, kuna taotlesite poe sisselogimiskoodi. Leidke allpool oma ühekordne parool (OTP):",
        'footer-message' => "See kood kehtib 10 minutit. Kui te seda sisselogimiskoodi ei taotlenud, ignoreerige seda meili."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Kinnitage oma e-posti aadress| :shop",
        'title' => 'E-posti kinnitamine',
        'header-message' => "Tere, :name, <br>Palun kinnitage, et **:email** on teie e-posti aadress, klõpsates alloleval nupul või kasutades allolevat linki 48 tunni jooksul.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Tootevärskendused| :shop",
        'title' => "Toote oleku värskendus – viimased 24 tundi",
        'message' => "Loodan, et see sõnum leiab teid hästi üles. See on lühike värskendus, et teavitada teid teie toodete olekust meie platvormil viimase 24 tunni jooksul.\nSelle perioodi jooksul on mõne toote staatuses toimunud muudatusi. Need muudatused võivad olla tingitud ostudest, varude värskendustest või muudest seotud sündmustest.\nIga toote kohta täpsema teabe saamiseks logige sisse oma kontole ja vaadake jaotist Toote olek.",
        'action' => "Avage tarnija paneel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Vastu võetud hulgitellimused| :shop | :date",
        'title' => "Hulgitellimuste teatis",
        'message' => "Olete saanud hulga hulgitellimusi. Lisateabe saamiseks külastage oma paneeli tellimuste töötlemise lehte. Tellimuste loendi saate alla laadida ka turvalise lingi kaudu, mis kehtib 7 päeva.<br><br>\n        <b>TÄHTIS:</b> See link kehtib 7 päeva.<br>\n        See link on dünaamiline, nii et iga kord, kui sellel klõpsate, saate selle konkreetse kuupäeva kõige värskemad tellimused. <b>See tähendab, et kui tellimuse makse olekuks muutub tagasilükatud, ei näe te enam seda tellimust allalaaditud CSV-s või kui tellimus on tasutud, kuvatakse see loendis.</b><br><br>\n        <ul>\n            <li>CSV sisaldab tasulisi tellimusi, mille kuupäev on reserveeritud jaotises :date.</li>\n            <li>Reserveeritud kuupäev on kuupäev, mil kasutaja klikib tellimuse lehel kassasse.</li>\n        </ul>\n        <b>Duplikaattellimuste vältimiseks kontrollige alati enne saatmist tellimust ID.</b>",
        'action' => "Laadige alla tellimuste loend",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Mõnda teie tellimuses olevat toodet ei aktsepteeritud ja neid ei saa tarnida. Nende kaupade eest makstud summa kantakse teie kaardile peagi tagasi."
    ]

];
