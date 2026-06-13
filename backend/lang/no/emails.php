<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Denne meldingen ønsker en ny kjøper velkommen til butikken.',
        ShopMailTemplateCodes::OrderCheckout => 'Dette varselet sendes når en kjøper bekrefter en bestilling.',
        ShopMailTemplateCodes::OrderPayment => 'Dette varselet bekrefter vellykket betaling utført av en kunde.',
        ShopMailTemplateCodes::OrderUpdate => 'Denne meldingen sendes for å oppdatere en kjøper om statusen til bestillingen deres.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Denne meldingen sendes til en selger for å varsle dem om en bekreftet bestilling.',
        ShopMailTemplateCodes::PosCheckout => 'Dette varselet sendes for å bekrefte en salgsstedsordre for en kjøper.',
        ShopMailTemplateCodes::PosPayment => 'Denne varslingen bekrefter en utsalgsbetaling utført av en kjøper.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Denne meldingen varsler selgeren om et kjøp gjort på deres salgssted.',
        ShopMailTemplateCodes::ShopContact => 'Dette varselet sendes når et kontaktskjema er sendt inn.',
        ShopMailTemplateCodes::ShopGiftCard => 'Denne varslingen informerer en bruker om at de har mottatt et gavekort.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Denne meldingen ønsker en ny leverandør velkommen til butikken.',
        ShopMailTemplateCodes::ShopVendorInvite => "Denne meldingen sendes for å invitere en leverandør til å bli med på markedsplassen din.",
        ShopMailTemplateCodes::ShopVendorOrder => "Denne meldingen sendes til leverandøren når en ordre mottas i enten Betalt eller etterkravsstatus (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Sendes daglig for å oppdatere leverandører om statusen til produktene deres.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Denne meldingen sendes for å invitere en leverandør til å bli med på markedsplassen din.",

        ShopMailTemplateCodes::UserLogin => "Varsle brukeren med påloggingsdetaljer, inkludert IP-adresse, dato og enhet, for sikkerhetsformål.",
        ShopMailTemplateCodes::LoginCode => "Send en engangspassordkode for at brukerne skal logge inn i butikken.",

        ShopMailTemplateCodes::EmailVerifyLink => "Send en lenke for å bekrefte brukerens e-postadresse. Denne e-posten sendes når en bruker registrerer seg av SMS og skriver inn sin e-post. Den sendes ikke når en bruker registrerer seg direkte med sosial innlogging eller e-post.",

        ShopMailTemplateCodes::EmailBulkOrder => "Send en liste over mottatte og betalte bestillinger i bulk for en bestemt dag."


    ,

    ],


    'global' => [
        'greetings' => 'Hei, :name!',
        'end-statement' => 'Støtteteam',

        'receiver_name' => 'Hei :user_name',
        'footer-help' => "Trenger du hjelp? Spør på [support@selldone.com](mailto:support@selldone.com) eller besøk vårt [hjelpesenter](https://selldone.com/community).",
        'selldone-team' => 'Selldone-teamet',
        'footer-shop' => "Hvis du trenger hjelp med noe, ikke nøl med å sende oss en e-post: :shop_mail",
        'accept' => "Aksepterer",
        'reject' => "Avvis",
        'verify' => "verifisere",
        'title' => "Tittel",
        'value' => "Verdi",
        'description' => "Beskrivelse",
        'shop' => "Butikk",
        'shop-info' => "Butikkinformasjon",
        'user' => "Bruker",
        'user-info' => "Kontoinformasjon",
        'license' => "Tillatelse",
        'status' => "Status",
        'start' => "Start",
        'end' => "Slutt",
        'renewal' => "Fornyelse",
        'view' => "Utsikt",

        'balance' => "Balansere",
        'card_number' => "Kortnummer",
        'cvv' => "Cvv",
        'expire_date' => "Utløpsdato",

        'Dashboard' => "Dashbord",
        'order' => "bestille",
        'view_order' => "Se bestilling",
        'pay_now' => "Pay now",

        'official_selldone' => "OFFISIELL SELGT",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valuta",
        'free-balance' => "Fri balanse",
        'locked-balance' => "Låst balanse",
        'bot' => "Bot",
        'requests' => "Forespørsler",
        'baskets' => 'Vogner',
        'physical' => "Fysisk",
        'virtual' => "Virtuell",
        'file' => "Fil",
        'service' => "Service",
        'fulfillment' => "Oppfyllelse",
        'open' => "Åpen",
        'reserved' => "Reservert",
        'canceled' => "Kansellert",
        'payed' => "Betalt",
        'cod' => "COD",
        'orders-count' => 'Ordrene',
        'payments-count' => 'Betalinger',
        'confirms-count' => 'Bekrefter',
        'sends-count' => 'Sender',
        'delivers-count' => 'Leverer',
        'count' => 'Telle',
        'transactions-count' => 'Transaksjoner teller',
        'success-transactions' => 'Suksesstransaksjoner',
        'total-amount' => 'Totale mengden',
        'amount' => 'Beløp',
        'wage' => 'Lønn',
        'debug' => 'Feilsøk',
        'pos' => 'POS',
        'live' => 'Bo',
        'CheckQueue' => 'Sjekk kø',
        'OrderConfirm' => 'Bestillingsbekreftelse',
        'PreparingOrder' => 'Forbereder ordre',
        'SentOrder' => 'Sendt ordre',
        'ToCustomer' => 'Levert til kunde',
        'Pending' => 'Avventer',
        'Accepted' => 'Akseptert',
        'Rejected' => 'Avvist',
        'pc' => 'PC',
        'tablet' => 'Tablett',
        'phone' => 'Telefon',
        'total' => 'Total',
        'view-detail' => 'Vis Detalj',
        'empty' => 'Tømme',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Svare',
        'reactions' => 'Reaksjoner',
        'Comments' => 'Kommentarer',
        'last-comment' => 'Siste kommentar',
        'response-to' => 'Respons til',
        'posts' => 'Innlegg',
        'post' => 'Post',

        'name' => 'Navn',
        'email' => 'E-post',
        'type' => 'type',
        'device' => 'Enhet',
        'platform' => 'Plattform',
        'browser' => 'Nettleser',
        'time' => 'Tid',
        'Wallet' => 'Lommebok',
        'date' => 'Dato',

        'account' => 'Regnskap',
        'transaction' => 'Transaksjon',
        'fee' => 'Avgift',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Regning',
        'category' => 'Kategori',
        'password' => 'Passord',
        'verify-login' => "Bekreft og logg på",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hyper',
        'buy-now' => "Kjøp nå",
        'add-domain' => "Add Domain",
        'views' => 'Visninger',


        'country' => 'Land',
        'address' => 'adresse',
        'postal' => 'postnummer',
        'building_no' => 'Bygning #',
        'building_unit' => 'Enhet #',
        'message' => 'Beskjed',


        'customer' => 'Kunde',
        'cart-items' => 'Handlevogn varer',
        'payment' => 'innbetaling',
        'receiver' => 'Mottaker',
        'virtual-items' => 'Virtuelle gjenstander',
        'no-payment' => 'Ingen betaling!',

        'enable' => 'Muliggjøre',
        'access' => 'Adgang',
        'bank' => 'Bankinformasjon',

        'vendor' => 'Leverandør',

        'view_content' => "Se hele innholdet",
        'files' => 'Filer',
        'download' => 'nedlasting',
        'file_name' => 'Filnavn',
        'file_size' => 'Størrelse',

        'subscription' => 'Abonnement',
        'products' => 'Produkter',
        'vendor_products' => 'Leverandørprodukter',

        'pickup' => 'Henting',

        'minutes' => 'Minutter',
        'hours' => 'Timer',

        'refund' => 'Refusjon',
        'recipient_address' => 'Mottakers adresse',
        'signature' => 'Signatur',
        'blockchain' => 'Blockchain',
        'details' => 'Detaljer',


    

        'Shop' => 'Butikk',
        'dashboard' => 'dashbord',
        'comments' => 'kommentarer',
        'wallet' => 'lommebok',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Resultatrapport, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Sesongrapport, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hei',
            'name' => 'Godkjenne, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Støtte :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'hei',
            'name' => 'Fellesskap, Selldone'
        ],
        'NewShop' => [
            'id' => 'kjøpmenn',
            'name' => 'Godkjenne, Selldone'
        ],
        'Approve' => [
            'id' => 'vedta',
            'name' => 'Godkjenne, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Ordreadministrasjon :name'
        ],

        'Recovery' => [
            'id' => 'gjenoppretting',
            'name' => 'Selldone gjenopprettingsteam'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Venter ⌛',
        'PAYED' => 'Betalt ✅',
        'CANCELED' => 'Kansellert ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Offiser og veileder',
            'AUDITING' => 'Revisjonsleder',
            'EMPLOYEE' => 'Ansatt',
            'PRODUCT' => 'Produktsjef',
            'CONTENT' => 'Innholdsbehandler',
            'MARKETING' => 'Markedssjef',
            'VIEWER' => 'Seer',

        ],
        'subject' => ":inviter inviterte deg som :level| :shop",
        'category' => "Personalinvitasjon",
        'title' => "Du har blitt invitert til <b>:shop_name</b> som <b>:level</b> .",
        'message' => "Du har mottatt en invitasjon til å samarbeide med <b>:shop_title</b>-teamet i virksomheten. Du har muligheten til å akseptere eller avslå dette tilbudet. Hvis du velger å godta, vennligst logg inn på Selldone-tjenesten for å bekrefte avgjørelsen. Ved bekreftelse får du tilgang til butikkadministrasjonsdelen.",

    ],

    'welcome-email' => [
        'subject' => "👋 Velkommen :name, la oss komme i gang med Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Velkommen til Selldone",
        'message' => "Takk for at du valgte Selldone! Du er nå en del av et levende fellesskap som kobler globale selgere til kunder, lokale bedrifter til bedrifter og enkeltpersoner til bedrifter. Alle våre Master- og Pro-verktøy er tilgjengelige for deg **gratis** og **ubegrenset**. Vi er her for å støtte deg og åpne dørene til din suksess.",

        'index' => "Trinn :step.",

        'step-domain' => [
            'title' => 'Legg til ditt egendefinerte domene',
            'message' => "For å komme i gang, legg til det egendefinerte domenet ditt gratis i Shop Dashboard under Innstillinger > Domeneinnstillinger.",
            'action' => 'Administrer mine domener',
        ],
        'step-landing' => [
            'title' => 'Tilpass startsiden din',
            'message' => "Tilpass startsiden din ved å gå til Dashboard > Sider. Velg en landingsside eller lag en ny. Det er enkelt og intuitivt, og du kan begynne å jobbe med det med en gang.",
            'action' => 'Tilpass min landingsside',
        ],
        'step-payment' => [
            'title' => 'Konfigurer betalingsmåter',
            'message' => "Begynn å godta betalinger direkte til bankkontoen din. For å koble til betalingsleverandørene dine som Stripe, PayPal og mer, gå til Dashboard > Accounting > Gateway.",
            'action' => 'Legg til betalingsmåter',
        ],
        'step-products' => [
            'title' => 'Legg til produktene dine',
            'message' => "Legg enkelt til produkter og kategorier i Dashboard > Produkter. Det er akkurat som å administrere filer og mapper på PC-en – fullstendig dra-og-slipp-klar. Du kan også masseimportere produkter ved hjelp av Excel. En eksempelmal er tilgjengelig for å hjelpe deg i gang.",
            'action' => 'Administrer produktene mine',
        ],
        'step-shipping' => [
            'title' => 'Konfigurer forsendelsesmetoder',
            'message' => "For å belaste kunder for frakt, definer fraktmetodene dine i Dashboard > Logistikk > Frakt. Du kan angi forskjellige priser og støtte for forskjellige steder. Ikke glem å angi lageropprinnelsen din i Dashboard > Logistikk > Lager.",
            'action' => 'Administrer forsendelsesmetoder',
        ],
    

        'seller' => [
            'title' => 'Er du selger?',
            'message' => 'For å begynne å selge, gå inn på dashbordet ditt i Selldone via lenken nedenfor og lag din første butikk helt gratis. Dette vil ta noen minutter, og du vil ha din egen butikk og nettside. Vi vil deretter veilede deg til de neste trinnene og få betalingsgatewayen.',
            'action' => 'Logg inn på dashbordet mitt',
        ],
        'buyer' => [
            'title' => 'Jeg er en kjøper',
            'message' => 'Gratulerer. Når du først er medlem av Selldone, blir du kvitt alle bryet med medlemskap og autentisering i nettbutikker. For å dra nytte av enhver butikk og side som bruker Selldone-plattformen, kan du logge på med ett klikk og gjøre kjøpet enkelt, raskt og trygt.',
        ],
    ],


    'charge-account' => [
        'category' => 'Lommebok > Konto > Belastning',
        'title' => "Suksesslading",
        'message' => "Din konto <b>:account_number</b> har blitt belastet <b>:amount</b>.",
        'account' => 'Regnskap',
        'charge' => 'Lade',
        'balance' => 'Balansere',
        'footer' => "Gjør virksomheten enkel, oppnåelig og tilgjengelig for alle rundt om i verden."
    ],

    'verify-email' => [
        'subject' => "🙌 Fullfør registreringen til Selldone! Bekreft lenken.",
        'category' => "DU ER ETT SKRITT UNNA",
        'title' => "Bekreft e-postadressen din",
        'message' => "Hei :name,<br><br>Takk for at du valgte Selldone!<br><br>For å bekrefte at <b>:email</b> er den riktige e-postadressen din, eller bruk lenken nedenfor. Du har 48 timer på deg til å fullføre denne bekreftelsen.",
        'footer' => "Hvis du har problemer med å klikke på Bekreft-knappen, kopier og lim inn URL-en nedenfor i nettleseren din: :activation_url",
        'next-step' => "Deretter sender vi deg noe nyttig materiale og en trinn-for-trinn-veiledning for å gjøre det enkelt for deg å legge til ditt egendefinerte domene, konfigurere betalinger, legge til produkter og få din første bestilling.",

    ],
    'verify-email-code' => [
        'subject' => "Bekreftelseskode for :name",
        'category' => "SECURITY",
        'title' => "E-postbekreftelseskode",
        'message' => "Hei :name,<br><br>For å bekrefte at <b>:email</b> er riktig e-postadresse, skriv inn følgende kode innen de neste <b>10 minuttene</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Butikken din er klar| :name",
        'category' => "DU ER ETT SKRITT UNNA",
        'title' => "Oppsett fullført",
        'account_title' => "Kontoen din",
        'account_msg' => "Bekreft og logg på kontoen din med denne informasjonen.",
        'shop_msg' => "Kontoinformasjon om Selldone forretningsoperativsystem.",

    ],

    'reset2fa' => [
        'category' => "SIKKERHETSOFFISIELL MELDING",
        'title' => "Be om å deaktivere 2-trinns pålogging",
        'message' => "Du mottar denne e-posten fordi vi mottok en forespørsel om å tilbakestille tofaktorautentisering for **:name**-kontoen med **:email** e-post.<br><br>Vi fant følgende detaljer for kontoen din:",
        'footer' => "Hvis du ikke ba om tilbakestilling av passord, er det ikke nødvendig å gjøre noe.",
        'action' => 'Deaktiver to-trinns pålogging',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Butikken din er klar nå!",
        'category' => "FØDT NY NETTBUTIKK I VERDEN",
        'title' => "Gratulerer, :name!",
        'message' => "<b>Gratulerer, :name! Din nye nettvirksomhet er nå live!</b> Vi er glade for å ønske deg velkommen til Selldoners-fellesskapet. Du har tatt det første skrittet mot suksess, og vi er her for å hjelpe deg hvert steg på veien.<br>Nå som butikken din er klar, la oss sørge for at du er klar til å motta betalinger direkte fra kundene dine og begynne å utvide imperiet ditt. Hvis du noen gang trenger hjelp, er vi bare en melding unna – supportteamet vårt er alltid her for deg.<br><br><b>Viktige neste trinn:</b> For å komme i gang, sørg for at du er klar for mottak av betalinger og problemfri drift. Vi veileder deg gjennom hvert trinn for å få butikken din til å gå sømløst.",
        'pdf-book' => "Ikke gå glipp av den vedlagte håndboken: Do Your Business Like A Game",

        'account' => [
            'title' => 'Trinn 1: Sett opp din Selldone-lommebok',
            'message' => "For å starte, opprett en konto i Selldone-lommeboken din. Det er her gebyrene dine blir trukket fra, og det er også her du fyller på for å holde butikken i gang. Hvis saldoen din noen gang blir negativ, ikke bekymre deg! Butikken din vil fortsette å fungere uten avbrudd.",
            'action' => 'Logg på lommebok',
        ],

        'shop-account' => [
            'title' => 'Trinn 2: koble kontoen til butikken',
            'message' => "Deretter kobler du lommebokkontoen din til butikken din. Gå til <b>Store > Regnskap > Faktura</b>, og koble til lommeboken din. Dette sikrer at alle kundebetalinger settes inn direkte på bankkontoen din – Selldone trekker ikke noen beløp fra inntektene dine.",
            'action' => 'Butikkfakturapanel',
        ],

        'gateway' => [
            'title' => 'Trinn 3: Koble til Online Payment Gateway',
            'message' => "La oss nå sette opp din nettbaserte betalingsgateway. Gå til <b>Store > Regnskap > Port</b> og klikk på <b>Legg til ny port</b>. Velg valutaen din, og du vil se en liste over tilgjengelige betalingsgatewayer. Det er raskt og enkelt å koble til en gateway, men hvis du trenger hjelp, kan du sjekke Selldone-veiledningene eller ta kontakt med oss.",
            'action' => 'Legg til en portal til butikken',
        ],

        'domain' => [
            'title' => 'Siste trinn: koble til et dedikert domene',
            'message' => "Koble nå ditt egendefinerte domene til butikken din. Dette lar kunder kjøpe produktene eller tjenestene dine og foreta betalinger direkte til deg.",
            'action' => 'Introdusere og motta ubegrensede gavekort',
        ],
    ],


    'basket-list' => [
        'item' => "punkt",
        'count' => "Telle",
        'price' => "pris",
        'discount-code' => "Rabattkode",
        'customer-club' => 'Kundeklubb',
        'shipping' => "Shipping",
        'total' => "Total",
        'offer' => "By på",
        'coupon' => "Kupong",
        'lottery' => "Tildele",
        'tax' => "Avgift",
        'tax_included' => "Inkludert i prisen",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metode',
        'amount' => 'Beløp',
        'giftcard' => 'Gift card',
        'payment' => 'innbetaling',
    ],


    'shop-subscription-email' => [
        'category' => "Abonnementsoppdatering",
        'title' => "Butikklisens: :shop_title",
        'title-reserved' => "Reservelisens: :shop_title",
        'title-active' => "Aktiv lisens: :shop_title",
        'title-finished' => "Ferdig lisens: :shop_title",
        'title-cancel' => "Kanseller lisens: :shop_title",
        'message' => "Butikklisensplanen din er oppdatert,",
        'RESERVED' => "⚡ Abonnementsplanen din er **reservert**.",
        'ACTIVE' => "🟢 Abonnementsplanen din er **aktivert**.",
        'FINISHED' => "🚧 Abonnementsplanen din er **ferdig**.",
        'CANCEL' => "⛔ Abonnementsplanen din er **kansellert**.",
    ],

    'support' => [
        'subject' => "Støttesenter|:name svarte",
        'category' => "Støttesenter",
        'title' => "Du har fått svar",
        'action' => "Åpne butikkadmin",
    ],

    'shop-customer-join' => [
        'subject' => "Bli med :shop_title",
        'category' => "Ny kunde feiring",
        'title' => "Vi er glade for ditt medlemskap",
        'action' => "Besøk nå",
    ],

    'shop-vendor-join' => [
        'subject' => "Leverandør onboarding | :shop_title",
        'category' => "Ny leverandør feiring",
        'title' => "Vi er glade for ditt medlemskap",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Gavekort :shop_title",
        'category' => "Legg til nytt kort",
        'title' => "Gratulerer, du har mottatt et gavekort",
        'action' => "Handle nå",
        'message' => "Du har mottatt et gavekort verdt :balance :currency. Du kan bruke dette gavekortet i vår butikk.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Støttesenter| :shop",
        'category' => "støtte",
        'title' => "Du har fått svar",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Ordrebekreftelse|Bestill :order_id",
        'title' => "bestille",
        'message' => "Du har lagt inn en bestilling i butikken vår. Vi har mottatt bestillingen din og vil sende deg en ny e-post når betalingen er bekreftet."
    ,

        'payments' => 'Betalinger',
    ],

    'order-payment' => [
        'subject' => "🛍️ Betalingsbekreftelse|Bestill :order_id",
        'title' => "Betalingsordre",
        'message' => "Betalingen er fullført,<br> Vi har bestillingen din. Vi sender deg en ny e-post når bestillingen din sendes.",
    

        'payments' => 'Betalinger',
    ],

    'order-update' => [
        'subject' => "🛍️ Bestillingsstatusoppdatering|Bestill :order_id",
        'title' => "Oppdatering av ordrestatus",
        'message' => "Bestillingen din er oppdatert. Du kan sjekke den siste statusen for denne bestillingen på kontoen din.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Bestillingen din står i kø for behandling. Vi varsler deg når den blir klargjort.",
                'OrderConfirm' => "Bestillingen din er bekreftet og forberedelsen har startet.",
                'PreparingOrder' => "Bestillingen din forberedes og vil bli sendt snart.",
                'SentOrder' => "Bestillingen din er sendt. Du mottar den snart.",
                'ToCustomer' => "Bestillingen din er levert. Vi håper du liker det!",

                'PreparingOrder-PICKUP' => "Bestillingen din forberedes. Du mottar et varsel når den er klar for henting.",
                'SentOrder-PICKUP' => "Bestillingen din er klar for henting. Kom gjerne til butikken for å hente den.",
                'ToCustomer-PICKUP' => "Bestillingen din er hentet. Vi håper du liker det!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Bestillingen din står i kø for behandling. Vi gir deg beskjed når den er klar.",
                'OrderConfirm' => "Bestillingen din er bekreftet og klargjøring pågår.",
                'PreparingOrder' => "Bestillingen din er under forberedelse og vil bli sendt til deg snart.",
                'ToCustomer' => "Din virtuelle bestilling har blitt levert til kontoen din. Takk!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Din tjenesteforespørsel er i køen. Vi gir deg beskjed når vi starter.",
                'OrderConfirm' => "Tjenesten din er bekreftet og vi forbereder oss til å begynne.",
                'PreparingOrder' => "Vi forbereder tjenesten din, og vil varsle deg når den er fullført.",
                'ToCustomer' => "Tjenesten din er fullført. Takk for at du valgte oss!"
            ],
            'FILE' => [
                'PreparingOrder' => "Filen din blir klargjort og vil snart være tilgjengelig.",
                'ToCustomer' => "Filen din er klar og har blitt levert. Du kan nå laste den ned."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Abonnementsordren din står i køen. Vi varsler deg når behandlingen starter.",
                'OrderConfirm' => "Abonnementet ditt er bekreftet og er under oppsett.",
                'PreparingOrder' => "Vi forbereder abonnementet ditt og det starter snart.",
                'SentOrder' => "Abonnementet ditt er aktivert. Du vil motta løpende oppdateringer.",
                'ToCustomer' => "Abonnementstjenesten din har blitt aktivert."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Gratulerer :name | Ny kupong: :title',
        'category' => "GRATULERER, NY KUNG",
        'message' => "Hei :name,<br><br>Du har mottatt en ny kupong i gave fra oss! Du kan tjene enda flere kuponger ved å introdusere Selldone til vennene dine og alle du kjenner. Denne kupongen er verdt **:price :currency**.<br><br>Du har tatt det første steget, og vi er her for å hjelpe deg med å låse opp nye funksjoner med kupongen din! Logg på med **:email** og finn kupongen din i butikken **Dashboard** > **Innstillinger** > **Lisens**.<br><br>Gratulerer!",
        'action' => "Mitt skrivebord",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Gratulerer, kjære :name | Du har fått en gave',
        'category' => "Kunngjøring om mottak av gave",
        'title' => "Gaver til deg",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Gaver",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Ny bestilling mottatt| :order_id",
        'title' => "New Order",
        'message' => "Du har mottatt en ny bestilling. Vennligst gå til bestillingsbehandlingssiden i butikken din.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Din utfylte informasjon',
        'output-form-title' => 'Informasjon om kjøpt vare',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Ukentlig rapport :time',
        'title' => 'Ukentlig butikkresultatrapport',
        'message' => "Dette er butikkens ukentlige rapport fra <b>:start</b> til <b>:end</b>. Denne rapporten inneholder tips for å forbedre virksomheten din, du kan også sjekke statusen til nettbutikken din og nylige bestillinger. Jeg håper du får en fin dag og uke videre."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Din :amount-sparingsrapport de siste tre månedene| :shop_title',
        'title' => 'Sesongrapport om virksomheten din, belønninger og økonomiske besparelser',
        'message' => "Dette er din <b>:shop_title</b> sesongrapport fra <b>:start</b> til <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Tilknyttede kontoer',
        'sub-title' => 'Hva er den siste statusen for lommebokkontoer som er koblet til butikken min?',
        'view-wallet' => 'Se lommebok',
        'tip-title' => 'Viktige tips',
        'tip' => "I neste trinn oppretter du en gratis konto i Selldone-lommeboken din og kobler den til denne butikken. Selv om saldoen på Sellone-kontoen din er negativ, kan kundene dine fortsatt foreta kjøp og betalinger for butikken din uten problemer. Dine data og tjenester vil ikke bli avbrutt eller begrenset i minst 1 måned.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Koble til kontoen'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apper installert',
        'sub-title' => 'Liste over apper du har installert i butikken din denne uken.',
        'tip' => "Vil du finne flere apper for butikken din?",
        'view-app-store' => 'Besøk Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Butikkrobotene dine',
        'sub-title' => 'Aktive salgsroboter i butikken min.',
        'tip-title' => 'Bot salg',
        'tip' => "Selldone har gitt deg automatiske salgsroboter. Alt du trenger å gjøre er å gå til panelet Tillegg> Bots og aktivere butikkrobotene dine. Merk at den relevante tjenesten må være tilgjengelig i ditt land.",
        'view-bots' => 'Administrer roboter',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kommunikasjon med kunder',
        'sub-title' => 'Hvor mange kontakter har jeg hatt med kundene mine denne uken?',
        'faqs' => 'ofte stilte spørsmål',
        'tickets' => 'Kundebilletter',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Brukerstatus',
        'sub-title' => 'Aktivitet fra :start til :end',
        'users' => [
            'title' => 'Kunder',
            'subtitle' => 'Registrer brukere',
        ],
        'views' => [
            'title' => 'Besøk',
            'subtitle' => 'Hvor mange ganger har du besøkt butikken',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Returnerte brukere',

        'shop_views' => 'Butikkvisninger',
        'baskets' => [
            'title' => 'Handlevogner',
            'subtitle' => 'Rapporter antall nye handlekurver',
        ],
        'products' => [
            'title' => 'Produktoversikt',
            'subtitle' => 'Status på produkter i butikken etter type',
            'value_name' => 'Produkter'
        ],
        'products_count' => 'Produkttyper',
        'views_count' => 'Seertall',
        'sell_count' => 'Antall salg',
        'send_count' => 'Fraktantall',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel for store selgere av Drop Shipping Selldone.',
        'total_fulfillments' => 'Totale bestillinger mottatt',
        'ds_count' => 'Mottatt bestillinger',
        'statistics_title' => 'Rapporter mottatte bestillinger',
        'ds_cancels' => 'Avbryt av grensesnittselger',
        'ds_rejects' => 'Avbryt av deg',
        'tip' => "Er du en stor selger av varer? Eier du et lager, fabrikk eller distributør av produkter? Du kan tilby produktene dine til andre selgere i Selldone Drop Shipping-tjenesten for å selge produktet ditt i stor skala. Send oss en e-post på support@selldone.com for å veilede deg.",
        'view-drop-shipping-panel' => 'Logg inn på engrospanelet',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Valutakurser',
        'sub-title' => 'Liste over de siste valutakursene i butikken din.',
        'from' => 'Kildevaluta',
        'to' => 'Destinasjonsvaluta',
        'rate' => 'Konverteringshastighet',
        'view-exchange-panel' => 'Administrer valutakurser',
    

        'vew-exchange-panel' => 'valutakursstyringspanel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ekspertkontrakter',
        'sub-title' => 'Hvilke fagfolk jobber på butikken min?',
        'cost' => 'Kontraktsbeløp',
        'duration' => 'Varighet',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dato Avbryt',
        'end_at' => 'Leveringsdato',
        'tip' => 'Du kan ansette de beste spesialistene i Selldone for å utvikle virksomheten din.',
        'view-experts' => 'Klikk for å komme i gang.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Rapporter aktive betalingsgatewayer på shop :shop.',
        'tip-title' => 'Viktige tips',
        'tip' => "Gå til portaladministrasjonssiden i butikken din og legg til minst én port i løpet av noen få minutter. Kundene dine liker å betale raskt og sikkert gjennom nettportaler.",
        'view-shop-gateways' => 'Logg inn på min butikkportaladministrasjon.',
        'view-gateways' => 'Se flere gatewayer',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Ordrene',
        'sub-title' => 'Liste over bestillinger jeg mottok denne uken.',
        'total_baskets' => 'Totale bestillinger',
        'total_posBaskets' => 'Totale kontantbestillinger',
        'pos-title' => 'POS butikkboks',
        'chart-label' => 'Bestillinger fullført (disse bestillingene er ikke nødvendigvis betalt!)',
        'tip-title' => 'Du burde prøve hardere...',
        'tip' => "Ingen enkel suksess.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Behandlingssenter',
        'sub-title' => 'Hvor mye bestilling behandlet vi i butikken denne uken?',
        'tip-title' => 'Du hadde ikke salg!',
        'tip' => "Dessverre har du ikke hatt noe salg denne uken. Du må få mer til butikken din. Du kan legge til flere produkter, velge bedre bilder eller skrive bedre beskrivelser for produktene dine. Vurder en heltidsjobb for din bedrift. Hvis du gjør det riktig og ikke blir frustrert, vil du lykkes.",
        'view-process-center' => 'Se prosesssenter',
        'return' => [
            'title' => 'Returnert ordre',
            'subtitle' => 'Rapporter returnerte bestillinger.',
            'tip-title' => 'Visste du at ...',
            'tip' => "Du kan opprette så mange kasseapparater du trenger med Selldone POS! Enten det er nettbrettet, mobilen eller den bærbare datamaskinen, kan du gjøre enhver enhet om til butikkens salgssted. Det er enkelt, raskt å sette opp og fullt forberedt for serveren din. Begynn å bruke den i dag!",
            'view-pos' => 'Logg inn på Min nettbutikkkasse'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Økter',
        'sub-title' => 'Hvor mange ganger besøkte jeg butikken min?',
        'countries-title' => 'Hvilke land har vært mest besøkt?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Vil du tjene penger uten å bruke en krone?',
        'message' => "Kjære :name, du kan gå til Dashboard > Demonetisering og opprette en henvisningslenke. Send lenken til vennene dine. Du mottar et Selldone-gavekort og en prosentandel av vennens betalinger. Merk at gavekortet blir sendt til både deg og vennen din.",
        'action' => 'Se introduksjonslenken min',
        'mail-clip' => "<b style='color: #C2185B'>Viktig:</b> Hvis du bruker e-posttjenester som Gmail som begrenser lengden på e-posten, finner du følgende alternativ på slutten av e-posten for å vise hele rapporten og klikk på den:",

        'no-coin-reward' => "<b style='color: #C2185B'>Beklager:</b> Aktiviteten din oppfylte ikke kravet for å få gratis SEL Coins-belønning. Prøv hardere og selg mer i butikken din til neste sesong.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Belønning:</b> Gratulerer, på grunn av den fantastiske prestasjonen din, ga vi deg en :amount SEL Coin gratis belønning.",

        'need-buy-license' => "<b>Lever opp virksomheten din:</b> Det ser ut til at du ikke har registrert noen abonnementsplan for nettstedet ditt ennå! Oppgrader nå for å låse opp flere funksjoner for bare :amount per måned hvis det betales årlig.",
        'not-afford-message' => "Hvis du ikke har råd til eller har problemer med betalingen, kan du gjerne fortelle oss det via support@selldone.com.",
        'add-domain' => "<b>Hvorfor ikke ha et tilpasset domene for bedriften din?</b><br> Legg til et domene på nettstedet ditt nå; det er gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone er en<del> produkt</del> <span style = 'color: forestgreen'>fellesskap</span> .<br> Vær en profesjonell selger!",
        'message' => "Følg de offisielle sidene til Selldone på Twitter, LinkedIn og sosiale nettverk. Send oss ​​eventuelle kommentarer, forespørsler eller kritikk eller delta i diskusjoner om Selldone. Vi er også en del av fellesskapet til Selldone som <b>Du lager</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nye avokadobestillinger mottatt|:shop_title :time',
        'title' => "Resultatrapport for de siste 24 timene",
        'message' => "Kundene dine venter på at bestillingene dine skal vurderes og prises. Svar på kundenes forespørsler så snart som mulig for å få mer salg.",
        'card_title' => "Bestillinger i køen",
        'card_subtitle' => "Siden :date",

        'card_payed' => "Betalte bestillinger"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Svar på innlegget ditt i :community_title',
        'title' => ":name og :count andre har kommentert innleggene dine.",
        'message' => "Hei :name, innleggene dine får oppmerksomhet! Du har mottatt kommentarer i fellesskapet vårt. Logg på kontoen din for å delta i diskusjonen og se hva alle sier.",
        'title-simple' => ":name kommenterte innleggene dine.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Svar på emnet ditt :topic_title',
        'title' => ":name, og :count andre svarte om emnet ditt.",
        'message' => "Hei :name, emnet ditt får oppmerksomhet! Du har mottatt svar i fellesskapet vårt. Logg på kontoen din for å delta i diskusjonen og se hva alle sier.",
        'title-simple' => ":name svarte på emnet ditt.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Ny pålogging :name',
        'category' => 'Sikkerhetsvarsler',
        'title' => "Logg inn på konto",
        'message' => "Kjære :name, du har logget på Selldone-kontoen din.",   // Login in selldone (seller)
        'message-shop' => "Kjære :name, du er logget inn på :shop_title .",  // Login in shop (buyer)

        'footer' => "Hvis du ikke er logget inn, vennligst endre passordet ditt.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Uttak",
        'deposit' => "Innskudd",

        'withdraw_subject' => "Ta ut fra kontoen :account",
        'deposit_subject' => "Sett inn på konto :account",

        'message' => "Pengeoverføringen er utført med følgende spesifikasjoner.",

        'type' => "Transaksjonstype",

        'from' => "Kildekonto",
        'to' => "Destination account",

        'desc' => "Transaksjonsbeskrivelse",
        'action' => "Se transaksjonen",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Viktig! Regelbrudd| :shop",
        'category' => "Kritisk informasjon",
        'title' => "Butikken din har blitt straffet",
        'action' => "Åpne butikkdashbordet",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter inviterte deg til Selldone",
        'title' => ":name sendte deg :amount for å hjelpe deg med å lansere det nye nettstedet ditt og tjene penger på det!",
        'message' => "Hei **:receiver_name**,<br><br>Velkommen til Selldone! På Selldone kan du enkelt opprette din e-handelsside, blogg, nettsamfunn og til og med sette opp et online POS-system for personlig salg – alt i løpet av få minutter. Det er det komplette nettbaserte forretningsoperativsystemet designet for å gjøre bedriften din bedre, raskere og enklere å drive.<br><br>Registrer deg innen <b>:date</b> og motta en :amount-kupong for å komme i gang!",
        'accept' => "Godta invitasjon",
        'owner' => "Eier av",
        'join-date' => "På Selldone siden",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Gjenopprettingslenke| :shop",
        'category' => "Butikksikkerhet",
        'title' => "Lagregjenopprettingslink for <b>:shop_name</b> .",
        'message' => "Denne e-posten ble sendt til deg fordi du ba om å gjenopprette butikken din. Ved å klikke på lenken nedenfor vil du gjenopprette butikken din og alle data som tilhører den.",
        'action' => "Bekreft butikkgjenoppretting",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Hvor mye penger sparte Selldone for bedriften din?',
        'sub-title' => 'Fra dato :start til :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Servere, CDN, lagring og andre skytjenester',
        ],
        'experts' => [
            'title' => 'Eksperter og ansatte',
            'subtitle' => 'Utviklere, vedlikehold og support',
        ],
        'total_save' => 'Totalt sparte penger'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Din ytelse',
        'sub-title' => 'Forretningsoversikt fra :start til :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Returnerte brukere',

        'shop_views' => 'Butikkvisninger',
        'baskets' => [
            'title' => 'Handlevogner',
            'subtitle' => 'Rapporter antall nye handlekurver',

        ],
        'products' => [
            'title' => 'Produktoversikt',
            'subtitle' => 'Status på produkter i butikken etter type',
            'value_name' => 'Produkter'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Totalt antall sidevisninger på nettstedet',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Du har mottatt en ny bestilling. Vennligst gå til ordrebehandlingssiden i leverandørpanelet.",
        'subject' => "🛍️ Ny bestilling mottatt| :order_id",
        'your_revenue' => "Dine inntekter",
    ],
    'vendor-invite' => [
        'title' => 'Leverandørinvitasjon',
        'message' => "Du har mottatt en invitasjon til å bli leverandør av :shop_name. Du kan godta eller avvise den ved å klikke på følgende knapper.",
        'subject' => ":shop_name |Invitasjon til å bli vår leverandør",
        'accept' => "Godta og bli en leverandør",
        'reject' => "Avvis",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitasjon til å bli med i teamet vårt',
        'message' => "Du har blitt invitert til å bli med i :vendor_name på :shop_name. Du kan godta eller avslå denne invitasjonen ved å bruke knappene nedenfor.",
        'subject' => "Invitasjon til å bli med i :vendor_name|Bli et teammedlem",
        'accept' => "Godta og bli med i teamet",
        'reject' => "Avvis",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Din påloggingskode for :shop",
        'header-message' => "Vi sender deg denne e-posten fordi du ba om en påloggingskode for butikken. Vennligst finn ditt engangspassord (OTP) nedenfor:",
        'footer-message' => "Denne koden vil være gyldig i 10 minutter. Hvis du ikke ba om denne påloggingskoden, vennligst ignorer denne e-posten."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Bekreft e-posten din| :shop",
        'title' => 'E-postbekreftelse',
        'header-message' => "Hei :name,<br>Bekreft at **:email** er e-postadressen din ved å klikke på knappen nedenfor eller bruke lenken nedenfor innen 48 timer.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produktoppdateringer| :shop",
        'title' => "Oppdatering om produktstatus – siste 24 timer",
        'message' => "Jeg håper denne meldingen finner deg godt. Dette er en kort oppdatering for å informere deg om statusen til produktene dine på plattformen vår de siste 24 timene.\nI løpet av denne perioden har det vært endringer i statusen til enkelte produkter. Disse endringene kan skyldes kjøp, lageroppdateringer eller andre relaterte hendelser.\nFor mer detaljert informasjon om hvert produkt, logg inn på kontoen din og sjekk delen \"Produktstatus\".",
        'action' => "Åpne Leverandørpanelet",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Massebestillinger mottatt| :shop | :date",
        'title' => "Varsling om massebestillinger",
        'message' => "Du har mottatt et parti med massebestillinger. Vennligst besøk bestillingsbehandlingssiden i panelet ditt for mer informasjon. Du kan også laste ned bestillingslisten via den sikre lenken som er gitt, gyldig i 7 dager.<br><br>\n        <b>VIKTIG:</b> Denne lenken er gyldig i 7 dager.<br>\n        Denne lenken er dynamisk, så hver gang du klikker på den, vil du motta de mest oppdaterte bestillingene for denne spesifikke datoen. <b>Det betyr at hvis betalingsstatusen for ordren endres til avvist, vil du ikke lenger se den bestillingen i den nedlastede CSV-en, eller hvis bestillingen er betalt, vil den vises i listen.</b><br><br>\n        <ul>\n            <li>CSV-en inneholder betalte bestillinger med en reservert dato i :date.</li>\n            <li>Reservert dato er datoen når brukeren klikker ut på bestillingssiden.</li>\n        </ul>\n        <b>For å forhindre dupliserte bestillinger, sjekk alltid bestillingen ID før du sender.</b>",
        'action' => "Last ned bestillingsliste",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Noen varer i bestillingen din ble ikke akseptert og kan ikke leveres. Beløpet for disse varene vil bli refundert til kortet ditt innen kort tid."
    ]

];
