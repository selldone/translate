<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Denne besked byder en ny køber velkommen til butikken.',
        ShopMailTemplateCodes::OrderCheckout => 'Denne meddelelse sendes, når en køber bekræfter en ordre.',
        ShopMailTemplateCodes::OrderPayment => 'Denne meddelelse bekræfter den vellykkede betaling foretaget af en kunde.',
        ShopMailTemplateCodes::OrderUpdate => 'Denne besked sendes for at opdatere en køber om status for deres ordre.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Denne besked sendes til en sælger for at give dem besked om en bekræftet ordre.',
        ShopMailTemplateCodes::PosCheckout => 'Denne meddelelse sendes for at bekræfte en ordre på et salgssted for en køber.',
        ShopMailTemplateCodes::PosPayment => 'Denne meddelelse bekræfter en betaling på et salgssted foretaget af en køber.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Denne meddelelse giver sælgeren besked om et køb foretaget på deres salgssted.',
        ShopMailTemplateCodes::ShopContact => 'Denne meddelelse sendes, når en kontaktformular er indsendt.',
        ShopMailTemplateCodes::ShopGiftCard => 'Denne meddelelse informerer en bruger om, at de har modtaget et gavekort.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Denne besked byder en ny leverandør velkommen til butikken.',
        ShopMailTemplateCodes::ShopVendorInvite => "Denne meddelelse sendes for at invitere en leverandør til at deltage i din markedsplads.",
        ShopMailTemplateCodes::ShopVendorOrder => "Denne besked sendes til leverandøren, når en ordre modtages i enten Betalt eller efterkrav (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Udsendes dagligt for at opdatere leverandører om status for deres produkter.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Denne besked sendes for at invitere en leverandør til at deltage i din markedsplads.",

        ShopMailTemplateCodes::UserLogin => "Giv brugeren besked med loginoplysninger, herunder IP-adresse, dato og enhed, af sikkerhedsmæssige årsager.",
        ShopMailTemplateCodes::LoginCode => "Send en engangsadgangskode, så brugerne kan logge ind i butikken.",

        ShopMailTemplateCodes::EmailVerifyLink => "Send et link for at bekræfte brugerens e-mailadresse. Denne e-mail sendes, når en bruger registrerer sig af SMS og indtaster sin e-mail. Den sendes ikke, når en bruger tilmelder sig direkte med socialt login eller e-mail.",

        ShopMailTemplateCodes::EmailBulkOrder => "Send en liste over modtagne og betalte ordrer i bulk for en bestemt dag."


    ,

    ],


    'global' => [
        'greetings' => 'Hej, :name!',
        'end-statement' => 'Støttegruppe',

        'receiver_name' => 'Hej :user_name',
        'footer-help' => "Har du brug for hjælp? Spørg på [support@selldone.com](mailto:support@selldone.com) eller besøg vores [hjælpecenter](https://selldone.com/community).",
        'selldone-team' => 'Selldone-teamet',
        'footer-shop' => "Hvis du har brug for hjælp til noget, så tøv ikke med at sende os en e-mail: :shop_mail",
        'accept' => "Acceptere",
        'reject' => "Afvise",
        'verify' => "verificere",
        'title' => "Titel",
        'value' => "Værdi",
        'description' => "Beskrivelse",
        'shop' => "Butik",
        'shop-info' => "Butiksoplysninger",
        'user' => "Bruger",
        'user-info' => "Kontooplysninger",
        'license' => "Licens",
        'status' => "Status",
        'start' => "Start",
        'end' => "Ende",
        'renewal' => "Fornyelse",
        'view' => "Udsigt",

        'balance' => "Balance",
        'card_number' => "Kortnummer",
        'cvv' => "Cvv",
        'expire_date' => "Udløbsdato",

        'Dashboard' => "Dashboard",
        'order' => "bestille",
        'view_order' => "Se ordre",
        'pay_now' => "Pay now",

        'official_selldone' => "OFFICIEL SÆLGES",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "betalingsmiddel",
        'free-balance' => "Fri balance",
        'locked-balance' => "Låst balance",
        'bot' => "Bot",
        'requests' => "Forespørgsler",
        'baskets' => 'Vogne',
        'physical' => "Fysisk",
        'virtual' => "Virtuelt",
        'file' => "Fil",
        'service' => "Service",
        'fulfillment' => "Opfyldelse",
        'open' => "Åben",
        'reserved' => "Reserveret",
        'canceled' => "Aflyst",
        'payed' => "Betalt",
        'cod' => "COD",
        'orders-count' => 'Ordre:% s',
        'payments-count' => 'Betalinger',
        'confirms-count' => 'Bekræfter',
        'sends-count' => 'Sender',
        'delivers-count' => 'Leverer',
        'count' => 'Tælle',
        'transactions-count' => 'Transaktioner tæller',
        'success-transactions' => 'Succestransaktioner',
        'total-amount' => 'Total beløb',
        'amount' => 'Beløb',
        'wage' => 'Løn',
        'debug' => 'Fejlfinde',
        'pos' => 'POS',
        'live' => 'Direkte',
        'CheckQueue' => 'Tjek kø',
        'OrderConfirm' => 'Ordrebekræftelse',
        'PreparingOrder' => 'Forbereder ordre',
        'SentOrder' => 'Sendte ordre',
        'ToCustomer' => 'Leveres til kunde',
        'Pending' => 'Verserende',
        'Accepted' => 'Accepteret',
        'Rejected' => 'Afvist',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'telefon',
        'total' => 'i alt',
        'view-detail' => 'Se detaljer',
        'empty' => 'Tom',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Svar',
        'reactions' => 'Reaktioner',
        'Comments' => 'Kommentarer',
        'last-comment' => 'Sidste kommentar',
        'response-to' => 'Svar til',
        'posts' => 'Indlæg',
        'post' => 'Stolpe',

        'name' => 'Navn',
        'email' => 'E-mail',
        'type' => 'type',
        'device' => 'Enhed',
        'platform' => 'Platform',
        'browser' => 'Browser',
        'time' => 'Tid',
        'Wallet' => 'Tegnebog',
        'date' => 'Dato',

        'account' => 'Konto',
        'transaction' => 'Transaktion',
        'fee' => 'Betaling',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Regning',
        'category' => 'Kategori',
        'password' => 'Adgangskode',
        'verify-login' => "Bekræft og log ind",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Køb nu",
        'add-domain' => "Add Domain",
        'views' => 'Visninger',


        'country' => 'Land',
        'address' => 'adresse',
        'postal' => 'postnummer',
        'building_no' => 'Bygning #',
        'building_unit' => 'Enhed #',
        'message' => 'Besked',


        'customer' => 'Kunde',
        'cart-items' => 'Indkøbskurv varer',
        'payment' => 'Betaling',
        'receiver' => 'Modtager',
        'virtual-items' => 'Virtuelle genstande',
        'no-payment' => 'Ingen betaling!',

        'enable' => 'Aktiver',
        'access' => 'Adgang',
        'bank' => 'Bankoplysninger',

        'vendor' => 'Sælger',

        'view_content' => "Se hele indholdet",
        'files' => 'Filer',
        'download' => 'Hent',
        'file_name' => 'Filnavn',
        'file_size' => 'Størrelse',

        'subscription' => 'Abonnement',
        'products' => 'Produkter',
        'vendor_products' => 'Leverandørprodukter',

        'pickup' => 'Afhentning',

        'minutes' => 'Referater',
        'hours' => 'Timer',

        'refund' => 'Tilbagebetaling',
        'recipient_address' => 'Modtager adresse',
        'signature' => 'Signatur',
        'blockchain' => 'Blockchain',
        'details' => 'Detaljer',


    

        'Shop' => 'Butik',
        'dashboard' => 'dashboard',
        'comments' => 'kommentarer',
        'wallet' => 'tegnebog',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Præstationsrapport, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Sæsonrapport, Selldone'
        ],
        'Onboarding' => [
            'id' => 'Hej',
            'name' => 'Godkend, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Support :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Bekræft, Selldone'
        ],
        'Welcome' => [
            'id' => 'Hej',
            'name' => 'Fællesskab, Selldone'
        ],
        'NewShop' => [
            'id' => 'købmænd',
            'name' => 'Godkend, Selldone'
        ],
        'Approve' => [
            'id' => 'godkende',
            'name' => 'Godkend, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Ordrestyring :name'
        ],

        'Recovery' => [
            'id' => 'genopretning',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Afventer ⌛',
        'PAYED' => 'Betalt ✅',
        'CANCELED' => 'Aflyst ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Officer og Supervisor',
            'AUDITING' => 'Revisionsleder',
            'EMPLOYEE' => 'Medarbejder',
            'PRODUCT' => 'Produktansvarlig',
            'CONTENT' => 'Content manager',
            'MARKETING' => 'Marketingchef',
            'VIEWER' => 'Seer',

        ],
        'subject' => ":inviter inviterede dig som :level| :shop",
        'category' => "Personale invitation",
        'title' => "Du er blevet inviteret til <b>:shop_name</b> som <b>:level</b> .",
        'message' => "Du har modtaget en invitation til at samarbejde med <b>:shop_title</b> teamet i erhvervslivet. Du har mulighed for at acceptere eller afslå dette tilbud. Hvis du vælger at acceptere, skal du logge ind på Selldone-tjenesten for at bekræfte din beslutning. Efter bekræftelse får du adgang til butiksstyringssektionen.",

    ],

    'welcome-email' => [
        'subject' => "👋 Velkommen :name, lad os komme i gang med Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Velkommen til Selldone",
        'message' => "Tak, fordi du valgte Selldone! Du er nu en del af et levende fællesskab, der forbinder globale sælgere til kunder, lokale virksomheder til virksomheder og enkeltpersoner til virksomheder. Alle vores Master- og Pro-værktøjer er tilgængelige for dig **gratis** og **ubegrænset**. Vi er her for at støtte dig og åbne dørene til din succes.",

        'index' => "Trin :step.",

        'step-domain' => [
            'title' => 'Tilføj dit brugerdefinerede domæne',
            'message' => "For at komme i gang skal du tilføje dit tilpassede domæne gratis i Shop Dashboard under Indstillinger > Domæneindstillinger.",
            'action' => 'Administrer mine domæner',
        ],
        'step-landing' => [
            'title' => 'Tilpas din startside',
            'message' => "Tilpas din startside ved at gå til Dashboard > Sider. Vælg en landingsside, eller opret en ny. Det er nemt og intuitivt, og du kan begynde at arbejde på det med det samme.",
            'action' => 'Tilpas min landingsside',
        ],
        'step-payment' => [
            'title' => 'Opsætning af betalingsmetoder',
            'message' => "Begynd at acceptere betalinger direkte til din bankkonto. For at forbinde dine betalingsudbydere som Stripe, PayPal og mere skal du gå til Dashboard > Accounting > Gateway.",
            'action' => 'Tilføj betalingsmetoder',
        ],
        'step-products' => [
            'title' => 'Tilføj dine produkter',
            'message' => "Tilføj nemt produkter og kategorier i Dashboard > Produkter. Det er ligesom at administrere filer og mapper på din pc – helt træk-og-slip klar. Du kan også masseimportere produkter ved hjælp af Excel. En prøveskabelon er tilgængelig for at hjælpe dig i gang.",
            'action' => 'Administrer mine produkter',
        ],
        'step-shipping' => [
            'title' => 'Opsætning af forsendelsesmetoder',
            'message' => "For at opkræve kunder for forsendelse skal du definere dine forsendelsesmetoder i Dashboard > Logistik > Forsendelse. Du kan indstille forskellige priser og support for forskellige lokationer. Glem ikke at angive dit lageroprindelse i Dashboard > Logistik > Lager.",
            'action' => 'Administrer forsendelsesmetoder',
        ],
    

        'seller' => [
            'title' => 'Er du sælger?',
            'message' => 'For at begynde at sælge skal du indtaste dit dashboard i Selldone via linket nedenfor og oprette din første butik helt gratis. Dette vil tage et par minutter, og du vil have din egen butik og online-side. Vi vil derefter guide dig til de næste trin og få betalingsgatewayen.',
            'action' => 'Log ind på mit dashboard',
        ],
        'buyer' => [
            'title' => 'Jeg er køber',
            'message' => 'Tillykke. Når du først er medlem af Selldone, slipper du for alt besværet med medlemskab og autentificering i onlinebutikker. For at drage fordel af enhver butik og hjemmeside, der bruger Selldone-platformen, kan du logge ind med et enkelt klik og gøre dit køb enkelt, hurtigt og sikkert.',
        ],
    ],


    'charge-account' => [
        'category' => 'Tegnebog > Konto > Debitering',
        'title' => "Succes opladning",
        'message' => "Din konto <b>:account_number</b> er blevet debiteret <b>:amount</b>.",
        'account' => 'Konto',
        'charge' => 'Oplade',
        'balance' => 'Balance',
        'footer' => "Gør forretning let, opnåelig og tilgængelig for alle i hele verden."
    ],

    'verify-email' => [
        'subject' => "🙌 Fuldfør din tilmelding til Selldone! Bekræft link.",
        'category' => "DU ER ET TRIN VÆK",
        'title' => "Bekræft din e-mail-adresse",
        'message' => "Hej :name,<br><br>Tak, fordi du valgte Selldone!<br><br>For at bekræfte, at <b>:email</b> er din korrekte e-mailadresse, eller brug venligst linket nedenfor. Du har 48 timer til at fuldføre denne bekræftelse.",
        'footer' => "Hvis du har problemer med at klikke på knappen Bekræft, skal du kopiere og indsætte URL'en nedenfor i din webbrowser: :activation_url",
        'next-step' => "Dernæst sender vi dig nogle nyttige materialer og en trin-for-trin guide, der gør det nemt for dig at tilføje dit tilpassede domæne, konfigurere betalinger, tilføje produkter og få din første ordre.",

    ],
    'verify-email-code' => [
        'subject' => "Bekræftelseskode for :name",
        'category' => "SECURITY",
        'title' => "E-mail bekræftelseskode",
        'message' => "Hej :name,<br><br>For at bekræfte, at <b>:email</b> er din korrekte e-mailadresse, skal du indtaste følgende kode inden for de næste <b>10 minutter</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Din butik er klar| :name",
        'category' => "DU ER ET TRIN VÆK",
        'title' => "Opsætning afsluttet",
        'account_title' => "Din konto",
        'account_msg' => "Bekræft og log ind på din konto med disse oplysninger.",
        'shop_msg' => "Kontooplysninger om Selldone business-operativsystemet.",

    ],

    'reset2fa' => [
        'category' => "OFFICIEL SIKKERHEDSMEDDELELSE",
        'title' => "Anmod om deaktiver 2-trins login",
        'message' => "Du modtager denne e-mail, fordi vi har modtaget en anmodning om at nulstille to-faktor godkendelse for **:name** konto med **:email** e-mail.<br><br>Vi fandt følgende detaljer for din konto:",
        'footer' => "Hvis du ikke har anmodet om en nulstilling af adgangskoden, er der ikke behov for yderligere handling.",
        'action' => 'Deaktiver to-trins login',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Din butik er klar nu!",
        'category' => "FØDT NY NETBUTIK I VERDEN",
        'title' => "Tillykke, :name!",
        'message' => "<b>Tillykke, :name! Din nye online forretning er nu live!</b> Vi er glade for at byde dig velkommen til Selldoners-fællesskabet. Du har taget det første skridt mod succes, og vi er her for at hjælpe dig hvert skridt på vejen.<br>Nu hvor din butik er klar, så lad os sørge for, at du er klar til at modtage betalinger direkte fra dine kunder og begynde at vokse dit imperium. Hvis du nogensinde har brug for hjælp, er vi kun en besked væk – vores supportteam er altid her for dig.<br><br><b>Vigtige næste trin:</b> For at komme i gang skal du sikre dig, at du er klar til at modtage betalinger og gnidningsfri drift. Vi guider dig gennem hver fase for at få din butik til at køre problemfrit.",
        'pdf-book' => "Gå ikke glip af den vedhæftede håndbog: Do Your Business Like A Game",

        'account' => [
            'title' => 'Trin 1: Konfigurer din Selldone tegnebog',
            'message' => "For at starte skal du oprette en konto i din Selldone tegnebog. Det er her, dine gebyrer bliver trukket fra, og det er også her, du fylder op for at holde din butik kørende. Hvis din saldo nogensinde bliver negativ, så fortvivl ikke! Din butik vil fortsætte med at fungere uden afbrydelser.",
            'action' => 'Log ind på tegnebogen',
        ],

        'shop-account' => [
            'title' => 'Trin 2: Tilslut kontoen til butikken',
            'message' => "Tilslut derefter din tegnebogskonto til din butik. Gå til <b>Store > Regnskab > Faktura</b>, og tilknyt din tegnebog. Dette sikrer, at alle kundebetalinger indsættes direkte på din bankkonto – Selldone trækker ingen beløb fra din indtjening.",
            'action' => 'Butiksfakturapanel',
        ],

        'gateway' => [
            'title' => 'Trin 3: Tilslut online betalingsgateway',
            'message' => "Lad os nu konfigurere din online betalingsgateway. Gå til <b>Store > Regnskab > Port</b> og klik på <b>Tilføj ny port</b>. Vælg din valuta, og du vil se en liste over tilgængelige betalingsgateways. Det er hurtigt og nemt at tilslutte en gateway, men hvis du har brug for hjælp, er du velkommen til at tjekke Selldone-vejledningerne eller kontakte os.",
            'action' => 'Tilføj en portal til butikken',
        ],

        'domain' => [
            'title' => 'Sidste trin: tilslutning af et dedikeret domæne',
            'message' => "Link nu dit tilpassede domæne til din butik. Dette giver kunderne mulighed for at købe dine produkter eller tjenester og foretage betalinger direkte til dig.",
            'action' => 'Introduktion og modtagelse af ubegrænsede gavekort',
        ],
    ],


    'basket-list' => [
        'item' => "vare",
        'count' => "Tælle",
        'price' => "pris",
        'discount-code' => "Rabatkode",
        'customer-club' => 'Kundeklub',
        'shipping' => "Forsendelse",
        'total' => "i alt",
        'offer' => "Tilbud",
        'coupon' => "Kupon",
        'lottery' => "Pris",
        'tax' => "Skat",
        'tax_included' => "Inkluderet i prisen",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metode',
        'amount' => 'Beløb',
        'giftcard' => 'Gift card',
        'payment' => 'Betaling',
    ],


    'shop-subscription-email' => [
        'category' => "Opdatering af abonnement",
        'title' => "Butikslicens: :shop_title",
        'title-reserved' => "Reservelicens: :shop_title",
        'title-active' => "Aktiv licens: :shop_title",
        'title-finished' => "Færdig licens: :shop_title",
        'title-cancel' => "Annuller licens: :shop_title",
        'message' => "Din butikslicensplan er opdateret,",
        'RESERVED' => "⚡ Din abonnementsplan er blevet **reserveret**.",
        'ACTIVE' => "🟢 Din abonnementsplan er blevet **aktiveret**.",
        'FINISHED' => "🚧 Din abonnementsplan er blevet **afsluttet**.",
        'CANCEL' => "⛔ Din abonnementsplan er blevet **annulleret**.",
    ],

    'support' => [
        'subject' => "Supportcenter|:name svarede",
        'category' => "Supportcenter",
        'title' => "Du har modtaget et svar",
        'action' => "Åbn butiksadministrator",
    ],

    'shop-customer-join' => [
        'subject' => "Tilmeld dig :shop_title",
        'category' => "Ny kunde fejring",
        'title' => "Vi er glade for dit medlemskab",
        'action' => "Besøg nu",
    ],

    'shop-vendor-join' => [
        'subject' => "Leverandør onboarding | :shop_title",
        'category' => "Ny leverandør fest",
        'title' => "Vi er glade for dit medlemskab",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Gavekort :shop_title",
        'category' => "Tilføj nyt kort",
        'title' => "Tillykke, du har modtaget et gavekort",
        'action' => "Køb nu",
        'message' => "Du har modtaget et gavekort på beløbet :balance :currency. Du vil kunne købe i vores butik med dette gavekort.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Supportcenter| :shop",
        'category' => "støtte",
        'title' => "Du har modtaget et svar",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Ordrebekræftelse|Bestil :order_id",
        'title' => "bestille",
        'message' => "Du har afgivet en ordre i vores butik. Vi har modtaget din ordre og sender dig endnu en e-mail, når betalingen er bekræftet."
    ,

        'payments' => 'Betalinger',
    ],

    'order-payment' => [
        'subject' => "🛍️ Betalingsbekræftelse|Bestil :order_id",
        'title' => "Betalingsordre",
        'message' => "Din betaling gennemført,<br> Vi har din ordre. Vi sender dig endnu en e-mail, når din ordre afsendes.",
    

        'payments' => 'Betalinger',
    ],

    'order-update' => [
        'subject' => "🛍️ Opdatering af ordrestatus|Bestil :order_id",
        'title' => "Opdatering af ordrestatus",
        'message' => "Din ordre er blevet opdateret. Du kan tjekke den seneste status for denne ordre på din konto.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Din ordre står i kø til behandling. Vi giver dig besked, når det er ved at blive forberedt.",
                'OrderConfirm' => "Din ordre er bekræftet og forberedelsen er startet.",
                'PreparingOrder' => "Din ordre er ved at blive klargjort og vil snart blive afsendt.",
                'SentOrder' => "Din ordre er blevet afsendt. Du modtager den inden længe.",
                'ToCustomer' => "Din ordre er blevet leveret. Vi håber du nyder det!",

                'PreparingOrder-PICKUP' => "Din ordre er ved at blive klargjort. Du modtager en notifikation, når den er klar til afhentning.",
                'SentOrder-PICKUP' => "Din ordre er klar til afhentning. Kom gerne i butikken for at hente den.",
                'ToCustomer-PICKUP' => "Din ordre er blevet afhentet. Vi håber du nyder det!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Din ordre står i kø til behandling. Vi giver dig besked, når den er klar.",
                'OrderConfirm' => "Din ordre er bekræftet og forberedelse er i gang.",
                'PreparingOrder' => "Din ordre er ved at blive klargjort og vil snart blive sendt til dig.",
                'ToCustomer' => "Din virtuelle ordre er blevet leveret til din konto. Tak!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Din serviceanmodning er i køen. Vi giver dig besked, når vi starter.",
                'OrderConfirm' => "Din service er bekræftet, og vi gør klar til at begynde.",
                'PreparingOrder' => "Vi er ved at forberede din tjeneste og giver dig besked, når den er fuldført.",
                'ToCustomer' => "Din service er fuldført. Tak fordi du valgte os!"
            ],
            'FILE' => [
                'PreparingOrder' => "Din fil er ved at blive klargjort og vil snart være tilgængelig.",
                'ToCustomer' => "Din fil er klar og er blevet leveret. Du kan nu downloade den."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Din abonnementsordre står i køen. Vi giver dig besked, når behandlingen begynder.",
                'OrderConfirm' => "Dit abonnement er blevet bekræftet og er ved at blive oprettet.",
                'PreparingOrder' => "Vi er ved at forberede dit abonnement, og det starter snart.",
                'SentOrder' => "Dit abonnement er blevet aktiveret. Du modtager løbende opdateringer.",
                'ToCustomer' => "Din abonnementstjeneste er blevet aktiveret."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Tillykke :name | Ny voucher: :title',
        'category' => "TILLYKKE, NYT VOUCHER",
        'message' => "Hej :name,<br><br>Du har modtaget en ny kupon i gave fra os! Du kan tjene endnu flere kuponer ved at introducere Selldone til dine venner og alle du kender. Denne kupon er værd **:price :currency**.<br><br>Du har taget det første skridt, og vi er her for at hjælpe dig med at låse op for nye funktioner med din kupon! Log venligst ind med **:email** og find din kupon i butikken **Dashboard** > **Indstillinger** > **Licens**.<br><br>Tillykke!",
        'action' => "Mit dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Tillykke, kære :name | Du har modtaget en gave',
        'category' => "Meddelelse om modtagelse af en gave",
        'title' => "Gaver til dig",
        'message' => "Hej :name, vi er glade for at kunne fortælle dig, at du har modtaget en særlig gave fra Selldone! 🎉 Du kan tjene flere gaver ved at forblive aktiv, udvide din butik og forbedre din ekspertise på Selldone. For at tjekke din gave ud, skal du blot logge ind med :email og se efter den i øverste højre hjørne af dit dashboard.<br><br>Denne gave er værd **:price :currency**, og du kan nemt indsætte den i din tegnebog inden for QQ0000000Q91QQ, opgradere din gave til din gave. din butiks licens og lås op for endnu mere kraftfulde værktøjer til at booste din online forretning!",
        'action' => "Gaver",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Ny ordre modtaget| :order_id",
        'title' => "New Order",
        'message' => "Du har modtaget en ny ordre. Gå venligst til ordrebehandlingssiden i din butik.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Dine udfyldte oplysninger',
        'output-form-title' => 'Oplysninger om købt vare',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Ugentlig rapport :time',
        'title' => 'Ugentlig butiksresultatrapport',
        'message' => "Dette er din butiks ugentlige rapport fra <b>:start</b> til <b>:end</b>. Denne rapport indeholder tips til at forbedre din virksomhed, du kan også tjekke status for din onlinebutik og seneste ordrer. Jeg håber du får en god dag og uge forude."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Din :amount sparerapport i de sidste tre måneder| :shop_title',
        'title' => 'Sæsonrapport om din forretningsaktivitet, belønninger og økonomiske besparelser',
        'message' => "Dette er din <b>:shop_title</b> sæsonrapport fra <b>:start</b> til <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Tilknyttede konti',
        'sub-title' => 'Hvad er den seneste status for tegnebogskonti, der er forbundet til min butik?',
        'view-wallet' => 'Se tegnebogen',
        'tip-title' => 'Vigtige tips',
        'tip' => "Opret en gratis Selldone tegnebog, og link den til din butik. Selvom din saldo er negativ, kan dine kunder stadig handle og betale uden problemer. Bare rolig, din butiks drift og data vil fortsætte problemfrit i op til 1 måned uden afbrydelser.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Opret forbindelse til konto'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps installeret',
        'sub-title' => 'Liste over apps, du har installeret i din butik i denne uge.',
        'tip' => "Vil du finde flere apps til din butik?",
        'view-app-store' => 'Besøg Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Dine butiksbots',
        'sub-title' => 'Aktive salgsbots i min butik.',
        'tip-title' => 'Bot salg',
        'tip' => "Selldone har givet dig automatiske salgsbots. Alt du skal gøre er at gå til panelet Tilføjelser> Bots og aktivere dine butiksbots. Bemærk, at den relevante tjeneste skal være tilgængelig i dit land.",
        'view-bots' => 'Administrer bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kommunikation med kunder',
        'sub-title' => 'Hvor mange kontakter har jeg haft med mine kunder i denne uge?',
        'faqs' => 'Ofte stillede spørgsmål',
        'tickets' => 'Kundebilletter',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Brugerstatus',
        'sub-title' => 'Aktivitet fra :start til :end',
        'users' => [
            'title' => 'Kunder',
            'subtitle' => 'Tilmeld brugere',
        ],
        'views' => [
            'title' => 'Besøg',
            'subtitle' => 'Hvor mange gange har du besøgt butikken',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Tilbagevendte brugere',

        'shop_views' => 'Butiksvisninger',
        'baskets' => [
            'title' => 'Indkøbsvogne',
            'subtitle' => 'Indberet antallet af nye indkøbskurve',
        ],
        'products' => [
            'title' => 'Produktoversigt',
            'subtitle' => 'Status på produkter i butikken efter type',
            'value_name' => 'Produkter'
        ],
        'products_count' => 'Produkttyper',
        'views_count' => 'Visningstal',
        'sell_count' => 'Salg tæller',
        'send_count' => 'Forsendelsesantal',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel for større sælgere af Drop Shipping Selldone.',
        'total_fulfillments' => 'Samlede ordrer modtaget',
        'ds_count' => 'Modtaget bestillinger',
        'statistics_title' => 'Indberette modtagne ordrer',
        'ds_cancels' => 'Annuller af grænsefladesælger',
        'ds_rejects' => 'Annuller af dig',
        'tip' => "Er du en stor sælger af varer? Ejer du et lager, en fabrik eller en distributør af produkter? Du kan tilbyde dine produkter til andre sælgere i Selldone Drop Shipping-service for at sælge dit produkt i stor skala. Send os en e-mail på support@selldone.com for at vejlede dig.",
        'view-drop-shipping-panel' => 'Log ind på engros panel',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Valutakurser',
        'sub-title' => 'Liste over de seneste valutaomregningskurser i din butik.',
        'from' => 'Kildevaluta',
        'to' => 'Destinationsvaluta',
        'rate' => 'Konverteringshastighed',
        'view-exchange-panel' => 'Administrer valutakurser',
    

        'vew-exchange-panel' => 'valutakursstyringspanel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ekspertkontrakter',
        'sub-title' => 'Hvilke fagfolk arbejder på min butik?',
        'cost' => 'Kontraktbeløb',
        'duration' => 'Varighed',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dato Annuller',
        'end_at' => 'Leveringsdato',
        'tip' => 'Du kan hyre de bedste specialister i Selldone til at udvikle din virksomhed.',
        'view-experts' => 'Klik for at komme i gang.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Rapportér aktive betalingsgateways på shoppen :shop.',
        'tip-title' => 'Vigtige tips',
        'tip' => "Gå til portaladministrationssiden i din butik, og tilføj mindst én port på få minutter. Dine kunder kan lide at betale hurtigt og sikkert gennem online portaler.",
        'view-shop-gateways' => 'Log ind på min butiksportaladministration.',
        'view-gateways' => 'Se flere gateways',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Ordre:% s',
        'sub-title' => 'Liste over ordrer, jeg har modtaget i denne uge.',
        'total_baskets' => 'Samlede ordrer',
        'total_posBaskets' => 'Samlede kontantordrer',
        'pos-title' => 'POS butiksboks',
        'chart-label' => 'Ordrer gennemført (disse ordrer er ikke nødvendigvis betalt!)',
        'tip-title' => 'Du burde prøve hårdere...',
        'tip' => "Ingen simpel succes.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Behandlingscenter',
        'sub-title' => 'Hvor meget ordre behandlede vi i butikken i denne uge?',
        'tip-title' => 'Du havde ikke et udsalg!',
        'tip' => "Desværre har du ikke haft noget salg i denne uge. Du skal have mere til din butik. Du kan tilføje flere produkter, vælge bedre billeder eller skrive bedre beskrivelser til dine produkter. Overvej et fuldtidsjob til din virksomhed. Hvis du gør det rigtigt og ikke bliver frustreret, vil du få succes.",
        'view-process-center' => 'Se procescenter',
        'return' => [
            'title' => 'Returneret ordre',
            'subtitle' => 'Rapporter returnerede ordrer.',
            'tip-title' => 'Vidste du, at ...',
            'tip' => "Du kan oprette så mange kasseapparater, som du har brug for med Selldone POS! Uanset om det er din tablet, mobil eller bærbare computer, kan du forvandle enhver enhed til din butiks salgssted. Det er enkelt, hurtigt at konfigurere og fuldt forberedt til din server. Begynd at bruge det i dag!",
            'view-pos' => 'Log ind på Min Online Butiks Kasserer'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessioner',
        'sub-title' => 'Hvor mange gange besøgte jeg min butik?',
        'countries-title' => 'Hvilke lande har været de mest besøgte?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Vil du tjene penge uden at bruge en krone?',
        'message' => "Kære :name, du kan gå til Dashboard > Demonetisering og oprette et henvisningslink. Send linket til dine venner, Du modtager et Selldone gavekort og en procentdel af din vens betalinger. Bemærk at gavekortet bliver sendt til både dig og din ven.",
        'action' => 'Se mit introduktionslink',
        'mail-clip' => "<b style='color: #C2185B'>Vigtigt:</b> Hvis du bruger e-mail-tjenester såsom Gmail, der begrænser længden af e-mailen, skal du finde følgende mulighed i slutningen af e-mailen for at få vist hele rapporten og klikke på den:",

        'no-coin-reward' => "<b style='color: #C2185B'>Beklager:</b> Din aktivitet opfyldte ikke kravet for at få gratis SEL Coins-belønning. Prøv hårdere og sælg mere i din butik til næste sæson.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Belønning:</b> Tillykke, på grund af din fantastiske præstation, gav vi dig en :amount SEL Coin gratis belønning.",

        'need-buy-license' => "<b>Lever din virksomhed op:</b> Det ser ud til, at du ikke har registreret nogen abonnementsplan for din hjemmeside endnu! Opgrader nu for at låse op for flere funktioner for kun :amount om måneden, hvis det betales årligt.",
        'not-afford-message' => "Hvis du ikke har råd eller har problemer med betalingen, er du velkommen til at fortælle os det via support@selldone.com.",
        'add-domain' => "<b>Hvorfor ikke have et tilpasset domæne til din virksomhed?</b><br> Tilføj et domæne til din hjemmeside nu; det er gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone er en<del> produkt</del> <span style = 'color: forestgreen'>fællesskab</span> .<br> Vær en professionel sælger!",
        'message' => "Følg de officielle sider i Selldone på Twitter, LinkedIn og sociale netværk. Send os eventuelle kommentarer, anmodninger eller kritik, eller deltag i diskussioner om Selldone. Vi er også en del af det fællesskab af Selldone, som <b>Du laver</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nye Avocado Ordrer modtaget|:shop_title :time',
        'title' => "Præstationsrapport for de sidste 24 timer",
        'message' => "Dine kunder venter på, at dine ordrer bliver gennemgået og prissat. Besvar dine kunders anmodninger så hurtigt som muligt for at få mere salg.",
        'card_title' => "Ordrer i køen",
        'card_subtitle' => "Siden :date",

        'card_payed' => "Betalte ordrer"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Svar på dit indlæg i :community_title',
        'title' => ":name og :count andre kommenterede dine indlæg.",
        'message' => "Hej :name, dine indlæg får opmærksomhed! Du har modtaget kommentarer i vores fællesskab. Log ind på din konto for at deltage i diskussionen og se, hvad alle siger.",
        'title-simple' => ":name kommenterede dine indlæg.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Svar på dit emne :topic_title',
        'title' => ":name og :count andre har svaret om dit emne.",
        'message' => "Hej :name, dit emne får opmærksomhed! Du har modtaget svar i vores fællesskab. Log ind på din konto for at deltage i diskussionen og se, hvad alle siger.",
        'title-simple' => ":name svarede på dit emne.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nyt login :name',
        'category' => 'Sikkerhedsmeddelelser',
        'title' => "Log ind på konto",
        'message' => "Kære :name, du har været logget ind på din Selldone-konto.",   // Login in selldone (seller)
        'message-shop' => "Kære :name, du er blevet logget ind på :shop_title .",  // Login in shop (buyer)

        'footer' => "Hvis du ikke er logget ind, bedes du ændre din adgangskode.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Tilbagetrækning",
        'deposit' => "Depositum",

        'withdraw_subject' => "Hæv fra konto :account",
        'deposit_subject' => "Indbetal til konto :account",

        'message' => "Pengeoverførslen er foretaget med følgende specifikationer.",

        'type' => "Transaktionstype",

        'from' => "Kildekonto",
        'to' => "Destination account",

        'desc' => "Transaktionsbeskrivelse",
        'action' => "Se transaktion",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Vigtigt! Overtrædelse af regler| :shop",
        'category' => "Kritisk information",
        'title' => "Din butik er blevet straffet",
        'action' => "Åbn butiksdashboard",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter inviterede dig til Selldone",
        'title' => ":name har sendt dig :amount for at hjælpe med at lancere din nye online butik og tjene penge på den!",
        'message' => "Hej **:receiver_name**,<br><br>Velkommen til Selldone! På Selldone kan du nemt oprette din e-handelsside, blog, onlinefællesskab og endda oprette et online POS-system til personligt salg – alt sammen inden for få minutter. Det er det komplette online virksomhedsoperativsystem designet til at gøre din virksomhed bedre, hurtigere og nemmere at drive.<br><br>Tilmeld dig senest <b>:date</b> og modtag en :amount-voucher for at komme i gang!",
        'accept' => "Accepter invitationen",
        'owner' => "Ejer af",
        'join-date' => "På Selldone siden",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Gendannelseslink| :shop",
        'category' => "Butikssikkerhed",
        'title' => "Butiksgendannelseslink for <b>:shop_name</b> .",
        'message' => "Denne e-mail blev sendt til dig, fordi du har anmodet om at gendanne din butik. Hvis du klikker på linket nedenfor, gendannes din butik og alle data, der hører til den.",
        'action' => "Bekræft butiksgendannelse",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Hvor mange penge sparede Selldone til din virksomhed?',
        'sub-title' => 'Fra dato :start til :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Servere, CDN, Storage og andre cloud-tjenester',
        ],
        'experts' => [
            'title' => 'Eksperter og personale',
            'subtitle' => 'Udviklere, vedligeholdelse og support',
        ],
        'total_save' => 'Samlet sparede penge'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Din præstation',
        'sub-title' => 'Forretningsoversigt fra :start til :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Tilbagevendte brugere',

        'shop_views' => 'Butiksvisninger',
        'baskets' => [
            'title' => 'Indkøbsvogne',
            'subtitle' => 'Indberet antallet af nye indkøbskurve',

        ],
        'products' => [
            'title' => 'Produktoversigt',
            'subtitle' => 'Status på produkter i butikken efter type',
            'value_name' => 'Produkter'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Samlet sidevisninger på hjemmesiden',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Du har modtaget en ny ordre. Gå til ordrebehandlingssiden i dit leverandørpanel.",
        'subject' => "🛍️ Ny ordre modtaget| :order_id",
        'your_revenue' => "Din indtægt",
    ],
    'vendor-invite' => [
        'title' => 'Sælger invitation',
        'message' => "Du har modtaget en invitation til at blive leverandør af :shop_name. Du kan acceptere eller afvise det ved at klikke på følgende knapper.",
        'subject' => ":shop_name |Invitation til at blive vores leverandør",
        'accept' => "Accepter og bliv en leverandør",
        'reject' => "Afvise",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitation til at blive en del af vores team',
        'message' => "Du er blevet inviteret til at deltage i :vendor_name på :shop_name. Du kan acceptere eller afslå denne invitation ved at bruge knapperne nedenfor.",
        'subject' => "Invitation til at deltage i :vendor_name|Bliv teammedlem",
        'accept' => "Accepter og deltag i teamet",
        'reject' => "Afvis",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Din loginkode til :shop",
        'header-message' => "Vi sender dig denne e-mail, fordi du har anmodet om en loginkode til butikken. Find venligst din engangsadgangskode (OTP) nedenfor:",
        'footer-message' => "Denne kode vil være gyldig i 10 minutter. Hvis du ikke har anmodet om denne login-kode, skal du ignorere denne e-mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Bekræft din e-mail| :shop",
        'title' => 'E-mailbekræftelse',
        'header-message' => "Hej :name,<br>Bekræft venligst, at **:email** er din e-mailadresse ved at klikke på knappen nedenfor eller bruge linket nedenfor inden for 48 timer.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produktopdateringer| :shop",
        'title' => "Opdatering om produktstatus - sidste 24 timer",
        'message' => "Jeg håber, at denne besked finder dig godt. Dette er en kort opdatering for at informere dig om status for dine produkter på vores platform i løbet af de seneste 24 timer.\nI denne periode har der været ændringer i status for nogle produkter. Disse ændringer kan skyldes køb, lageropdateringer eller andre relaterede begivenheder.\nFor mere detaljeret information om hvert produkt skal du logge ind på din konto og tjekke afsnittet 'Produktstatus'.",
        'action' => "Åbn leverandørpanelet",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Masseordrer modtaget| :shop | :date",
        'title' => "Meddelelse om masseordrer",
        'message' => "Du har modtaget et parti af masseordrer. Besøg venligst ordrebehandlingssiden i dit panel for yderligere detaljer. Du kan også downloade bestillingslisten via det sikre link, som er gyldigt i 7 dage.<br><br>\n        <b>VIGTIGT:</b> Dette link er gyldigt i 7 dage.<br>\n        Dette link er dynamisk, så hver gang du klikker på det, vil du modtage de mest opdaterede ordrer for denne specifikke dato. <b>Det betyder, at hvis ordrebetalingsstatus ændres til afvist, vil du ikke længere se den ordre i den downloadede CSV, eller hvis ordren er betalt, vil den blive vist på listen.</b><br><br>\n        <ul>\n            <li>CSV'en indeholder betalte ordrer med en reserveret dato i :date.</li>\n            <li>Reserveret dato er den dato, hvor brugeren klikker på kassen på ordresiden.</li>\n        </ul>\n        <b>For at forhindre duplikerede ordrer, skal du altid kontrollere ordren ID før afsendelse.</b>",
        'action' => "Download ordreliste",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Nogle varer i din ordre blev ikke accepteret og kan ikke leveres. Beløbet for disse varer vil snarest blive refunderet til dit kort."
    ]

];
