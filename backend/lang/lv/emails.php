<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Šī ziņa sveic jaunu pircēju veikalā.',
        ShopMailTemplateCodes::OrderCheckout => 'Šis paziņojums tiek nosūtīts, kad pircējs apstiprina pasūtījumu.',
        ShopMailTemplateCodes::OrderPayment => 'Šis paziņojums apstiprina veiksmīgu klienta veikto maksājumu.',
        ShopMailTemplateCodes::OrderUpdate => 'Šis ziņojums tiek nosūtīts, lai informētu pircēju par pasūtījuma statusu.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Šis ziņojums tiek nosūtīts pārdevējam, lai informētu viņu par apstiprinātu pasūtījumu.',
        ShopMailTemplateCodes::PosCheckout => 'Šis paziņojums tiek nosūtīts, lai apstiprinātu pircēja pasūtījumu tirdzniecības vietā.',
        ShopMailTemplateCodes::PosPayment => 'Šis paziņojums apstiprina pircēja veikto maksājumu tirdzniecības vietā.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Šis ziņojums informē pārdevēju par pirkumu, kas veikts viņa tirdzniecības vietā.',
        ShopMailTemplateCodes::ShopContact => 'Šis paziņojums tiek nosūtīts, kad ir iesniegta saziņas veidlapa.',
        ShopMailTemplateCodes::ShopGiftCard => 'Šis paziņojums informē lietotāju, ka viņš ir saņēmis dāvanu karti.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Šis ziņojums sveic jaunu pārdevēju veikalā.',
        ShopMailTemplateCodes::ShopVendorInvite => "Šis ziņojums ir nosūtīts, lai uzaicinātu pārdevēju pievienoties jūsu tirgum.",
        ShopMailTemplateCodes::ShopVendorOrder => "Šis ziņojums tiek nosūtīts pārdevējam, kad pasūtījums tiek saņemts vai nu apmaksātā, vai skaidrā naudā pēc piegādes (COD) statusā.",
        ShopMailTemplateCodes::ShopVendorProducts => "Sūta katru dienu, lai informētu pārdevējus par savu produktu statusu.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Šis ziņojums ir nosūtīts, lai uzaicinātu pārdevēju pievienoties jūsu tirgum.",

        ShopMailTemplateCodes::UserLogin => "Drošības nolūkos paziņojiet lietotājam pieteikšanās informāciju, tostarp IP adresi, datumu un ierīci.",
        ShopMailTemplateCodes::LoginCode => "Nosūtiet vienreizēju paroles kodu, lai lietotāji varētu pieteikties veikalā.",

        ShopMailTemplateCodes::EmailVerifyLink => "Nosūtiet saiti, lai verificētu lietotāja e-pasta adresi. Šis e-pasts tiek nosūtīts, kad lietotājs reģistrējas SMS un ievada savu e-pastu. Tas netiek nosūtīts, kad lietotājs reģistrējas tieši ar sociālo pieteikšanos vai e-pastu.",

        ShopMailTemplateCodes::EmailBulkOrder => "Nosūtiet vairumā saņemto un apmaksāto pasūtījumu sarakstu konkrētai dienai."


    ,

    ],


    'global' => [
        'greetings' => 'Sveiki :name',
        'end-statement' => 'Atbalsta komanda',

        'receiver_name' => 'Sveiki :user_name',
        'footer-help' => "Nepieciešama palīdzība? Jautājiet uz [support@selldone.com](mailto:support@selldone.com) vai apmeklējiet mūsu [palīdzības centru](https://selldone.com/community).",
        'selldone-team' => 'Selldone komanda',
        'footer-shop' => "Ja jums ir nepieciešama palīdzība, lūdzu, nevilcinieties un rakstiet mums: :shop_mail",
        'accept' => "Pieņemt",
        'reject' => "Noraidīt",
        'verify' => "pārbaudīt",
        'title' => "Nosaukums",
        'value' => "Vērtība",
        'description' => "Apraksts",
        'shop' => "Veikals",
        'shop-info' => "Veikala informācija",
        'user' => "Lietotājs",
        'user-info' => "Konta informācija",
        'license' => "Licence",
        'status' => "Statuss",
        'start' => "Sākt",
        'end' => "Beigas",
        'renewal' => "Atjaunošana",
        'view' => "Skatīt",

        'balance' => "Līdzsvars",
        'card_number' => "Kartes numurs",
        'cvv' => "Cvv",
        'expire_date' => "Derīguma termiņš",

        'Dashboard' => "Informācijas panelis",
        'order' => "pasūtījums",
        'view_order' => "Skatīt pasūtījumu",
        'pay_now' => "Pay now",

        'official_selldone' => "OFICIĀLI PĀRDOTS",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valūta",
        'free-balance' => "Bezmaksas atlikums",
        'locked-balance' => "Bloķēts līdzsvars",
        'bot' => "Bot",
        'requests' => "Pieprasījumi",
        'baskets' => 'Rati',
        'physical' => "Fiziskā",
        'virtual' => "Virtuāls",
        'file' => "Fails",
        'service' => "apkalpošana",
        'fulfillment' => "Piepildīšana",
        'open' => "Atvērt",
        'reserved' => "Rezervēts",
        'canceled' => "Atcelts",
        'payed' => "Apmaksāts",
        'cod' => "COD",
        'orders-count' => 'Pasūtījumi',
        'payments-count' => 'Maksājumi',
        'confirms-count' => 'Apstiprina',
        'sends-count' => 'Nosūta',
        'delivers-count' => 'Piegādā',
        'count' => 'Skaitīt',
        'transactions-count' => 'Darījumi tiek skaitīti',
        'success-transactions' => 'Veiksmīgi darījumi',
        'total-amount' => 'Kopējā summa',
        'amount' => 'Summa',
        'wage' => 'Alga',
        'debug' => 'Atkļūdošana',
        'pos' => 'POS',
        'live' => 'Tiešraide',
        'CheckQueue' => 'Pārbaudīt rindu',
        'OrderConfirm' => 'Pasūtījuma apstiprināšana',
        'PreparingOrder' => 'Pasūtījuma sagatavošana',
        'SentOrder' => 'Pasūtījums nosūtīts',
        'ToCustomer' => 'Piegādāts klientam',
        'Pending' => 'Gaida',
        'Accepted' => 'Pieņemts',
        'Rejected' => 'Noraidīts',
        'pc' => 'PC',
        'tablet' => 'Planšetdators',
        'phone' => 'Tālrunis',
        'total' => 'Kopā',
        'view-detail' => 'Skatīt detaļās',
        'empty' => 'Tukšs',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Atbildēt',
        'reactions' => 'Reakcijas',
        'Comments' => 'komentāri',
        'last-comment' => 'Pēdējais komentārs',
        'response-to' => 'Atbildet uz',
        'posts' => 'Ziņas',
        'post' => 'Post',

        'name' => 'Vārds',
        'email' => 'E-pasts',
        'type' => 'veids',
        'device' => 'Ierīce',
        'platform' => 'Platforma',
        'browser' => 'Pārlūkprogramma',
        'time' => 'Laiks',
        'Wallet' => 'Maks',
        'date' => 'Datums',

        'account' => 'Konts',
        'transaction' => 'Darījums',
        'fee' => 'Maksa',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bils',
        'category' => 'Kategorija',
        'password' => 'Parole',
        'verify-login' => "Apstipriniet un piesakieties",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hiper',
        'buy-now' => "Pērc tagad",
        'add-domain' => "Add Domain",
        'views' => 'Skati',


        'country' => 'Valsts',
        'address' => 'adrese',
        'postal' => 'Pasta indekss',
        'building_no' => 'Ēka #',
        'building_unit' => 'Vienība Nr.',
        'message' => 'Ziņa',


        'customer' => 'Klients',
        'cart-items' => 'Groza preces',
        'payment' => 'Maksājums',
        'receiver' => 'Uztvērējs',
        'virtual-items' => 'Virtuālie priekšmeti',
        'no-payment' => 'Bez maksas!',

        'enable' => 'Iespējot',
        'access' => 'Piekļuve',
        'bank' => 'Bankas informācija',

        'vendor' => 'Pārdevējs',

        'view_content' => "Skatīt pilnu saturu",
        'files' => 'Faili',
        'download' => 'Lejupielādēt',
        'file_name' => 'Faila nosaukums',
        'file_size' => 'Izmērs',

        'subscription' => 'Abonēšana',
        'products' => 'Produkti',
        'vendor_products' => 'Pārdevēju produkti',

        'pickup' => 'Pikaps',

        'minutes' => 'Minūtes',
        'hours' => 'Stundas',

        'refund' => 'Atmaksa',
        'recipient_address' => 'Saņēmēja adrese',
        'signature' => 'Paraksts',
        'blockchain' => 'Blockchain',
        'details' => 'Sīkāka informācija',


    

        'Shop' => 'Veikals',
        'dashboard' => 'mērinstrumentu panelis',
        'comments' => 'komentāri',
        'wallet' => 'maku',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone biznesa operētājsistēma",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone darbības pārskats'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone sezonas pārskats'
        ],
        'Onboarding' => [
            'id' => 'Sveiki',
            'name' => 'Selldone tirgotāji'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Atbalsts :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'Sveiki',
            'name' => 'Selldone kopiena'
        ],
        'NewShop' => [
            'id' => 'tirgotāji',
            'name' => 'Selldone tirgotāji'
        ],
        'Approve' => [
            'id' => 'apstiprināt',
            'name' => 'Selldone tirgotāji'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Pasūtījumu pārvaldība :name'
        ],

        'Recovery' => [
            'id' => 'atveseļošanās',
            'name' => 'Selldone atkopšanas komanda'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Gaida ⌛',
        'PAYED' => 'Apmaksāts ✅',
        'CANCELED' => 'Atcelts ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrators',
            'OFFICER' => 'Virsnieks un uzraugs',
            'AUDITING' => 'Audita vadītājs',
            'EMPLOYEE' => 'Darbinieks',
            'PRODUCT' => 'Produktu menedžeris',
            'CONTENT' => 'Satura pārvaldnieks',
            'MARKETING' => 'Mārketinga menedžeris',
            'VIEWER' => 'Skatītājs',

        ],
        'subject' => ":inviter uzaicināja jūs kā :level| :shop",
        'category' => "Darbinieku ielūgums",
        'title' => "Jūs esat uzaicināts uz <b>:shop_name</b> kā <b>:level</b> .",
        'message' => "Jūs esat saņēmis uzaicinājumu sadarboties ar <b>:shop_title</b> komandu uzņēmējdarbībā. Jums ir iespēja pieņemt vai noraidīt šo piedāvājumu. Ja izvēlaties pieņemt, lūdzu, piesakieties Selldone pakalpojumā, lai apstiprinātu savu lēmumu. Pēc apstiprināšanas jūs iegūsit piekļuvi veikala pārvaldības sadaļai.",

    ],

    'welcome-email' => [
        'subject' => "👋 Laipni lūdzam :name, sāksim darbu ar Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Laipni lūdzam Selldone",
        'message' => "Paldies, ka izvēlējāties Selldone! Tagad jūs esat daļa no dinamiskas kopienas, kas savieno globālos pārdevējus ar klientiem, vietējos uzņēmumus ar uzņēmumiem un privātpersonas ar korporācijām. Visi mūsu Master un Pro rīki ir pieejami **bezmaksas** un **neierobežoti**. Mēs esam šeit, lai jūs atbalstītu un atvērtu durvis jūsu panākumiem.",

        'index' => "Solis :step.",

        'step-domain' => [
            'title' => 'Pievienojiet savu pielāgoto domēnu',
            'message' => "Lai sāktu, bez maksas pievienojiet savu pielāgoto domēnu veikala informācijas panelī sadaļā Iestatījumi > Domēnu iestatījumi.",
            'action' => 'Pārvaldīt manus domēnus',
        ],
        'step-landing' => [
            'title' => 'Pielāgojiet savu sākumlapu',
            'message' => "Personalizējiet savu sākumlapu, atverot Informācijas panelis > Lapas. Izvēlieties galveno lapu vai izveidojiet jaunu. Tas ir vienkārši un intuitīvi, un jūs varat sākt strādāt pie tā uzreiz.",
            'action' => 'Pielāgojiet manu galveno lapu',
        ],
        'step-payment' => [
            'title' => 'Iestatiet maksājuma veidus',
            'message' => "Sāciet pieņemt maksājumus tieši savā bankas kontā. Lai izveidotu savienojumu ar maksājumu pakalpojumu sniedzējiem, piemēram, Stripe, PayPal un citiem, dodieties uz Dashboard > Accounting > Gateway.",
            'action' => 'Pievienojiet maksājuma veidus',
        ],
        'step-products' => [
            'title' => 'Pievienojiet savus produktus',
            'message' => "Ērti pievienojiet produktus un kategorijas sadaļā Informācijas panelis > Produkti. Tas ir tāpat kā failu un mapju pārvaldība datorā — pilnībā gatavs vilkšanai un nomešanai. Varat arī importēt produktus lielapjomā, izmantojot programmu Excel. Ir pieejams veidnes paraugs, kas palīdzēs sākt darbu.",
            'action' => 'Pārvaldīt manus produktus',
        ],
        'step-shipping' => [
            'title' => 'Iestatiet piegādes metodes',
            'message' => "Lai no klientiem iekasētu maksu par piegādi, definējiet piegādes metodes sadaļā Informācijas panelis > Loģistika > Piegāde. Varat iestatīt dažādas cenas un atbalstu dažādām vietām. Neaizmirstiet iestatīt savas noliktavas izcelsmi sadaļā Dashboard > Logistic > Warehouse.",
            'action' => 'Pārvaldiet piegādes metodes',
        ],
    

        'seller' => [
            'title' => 'Vai jūs esat pārdevējs?',
            'message' => 'Lai sāktu pārdošanu, ievadiet savu informācijas paneli Selldone, izmantojot tālāk norādīto saiti, un izveidojiet savu pirmo veikalu pilnīgi bez maksas. Tas prasīs dažas minūtes, un jums būs savs veikals un tiešsaistes vietne. Pēc tam mēs vadīsim jūs uz nākamajām darbībām un iegūsim maksājumu vārteju.',
            'action' => 'Piesakieties manā informācijas panelī',
        ],
        'buyer' => [
            'title' => 'Esmu pircējs',
            'message' => 'Apsveicu. Kad esat Selldone dalībnieks, jūs atbrīvosities no visām problēmām, kas saistītas ar dalību un autentifikāciju tiešsaistes veikalos. Lai gūtu labumu no jebkura veikala un vietnes, kas izmanto Selldone platformu, varat pieteikties ar vienu klikšķi un padarīt pirkumu vienkāršu, ātru un drošu.',
        ],
    ],


    'charge-account' => [
        'category' => 'Maks > Konts > Maksa',
        'title' => "Veiksmes maksa",
        'message' => "No jūsu konta <b>:account_number</b> ir veiksmīgi iekasēta maksa <b>:amount</b>.",
        'account' => 'Konts',
        'charge' => 'Uzlādē',
        'balance' => 'Līdzsvars',
        'footer' => "Padariet uzņēmējdarbību vienkāršu, sasniedzamu un pieejamu ikvienam visā pasaulē."
    ],

    'verify-email' => [
        'subject' => "🙌 Pabeidziet reģistrāciju Selldone! Apstipriniet saiti.",
        'category' => "JŪS ESAT VIENA SOĻA ATTĀLĀ",
        'title' => "Pārbaudiet savu e-pasta adresi",
        'message' => "Sveiki, :name,<br><br>Paldies, ka izvēlējāties Selldone!<br><br>Lai apstiprinātu, ka <b>Q:email</b> ir jūsu pareizā e-pasta adrese, lūdzu, noklikšķiniet uz tālāk esošās saites vai izmantojiet tālāk norādīto pogu. Jums ir 48 stundas, lai pabeigtu šo verifikāciju.",
        'footer' => "Ja nevarat noklikšķināt uz pogas Verificēt, kopējiet un ielīmējiet tālāk norādīto URL savā tīmekļa pārlūkprogrammā: :activation_url",
        'next-step' => "Pēc tam mēs nosūtīsim jums dažus noderīgus materiālus un detalizētu ceļvedi, lai atvieglotu pielāgotā domēna pievienošanu, maksājumu iestatīšanu, produktu pievienošanu un pirmā pasūtījuma saņemšanu.",

    ],
    'verify-email-code' => [
        'subject' => "Verifikācijas kods :name",
        'category' => "SECURITY",
        'title' => "E-pasta verifikācijas kods",
        'message' => "Sveiki, :name, <br><br> Lai apstiprinātu, ka <b>:email</b> ir jūsu pareizā e-pasta adrese, lūdzu, nākamajā <b>Q10 minūtēs </b> ievadiet šo kodu:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Jūsu veikals ir gatavs| :name",
        'category' => "JŪS ESAT VIENA SOĻA ATTĀLĀ",
        'title' => "Iestatīšana pabeigta",
        'account_title' => "Jūsu konts",
        'account_msg' => "Pārbaudiet un piesakieties savā kontā, izmantojot šo informāciju.",
        'shop_msg' => "Konta informācija par Selldone biznesa operētājsistēmu.",

    ],

    'reset2fa' => [
        'category' => "DROŠĪBAS OFICIĀLAIS ZIŅOJUMS",
        'title' => "Pieprasīt atspējot divpakāpju pieteikšanos",
        'message' => "Jūs saņēmāt šo e-pasta ziņojumu, jo mēs saņēmām pieprasījumu atiestatīt divu faktoru autentifikāciju kontam **:name** ar e-pastu **:email**.<br><br>Mēs atradām šādu informāciju par jūsu kontu:",
        'footer' => "Ja nepieprasījāt paroles atiestatīšanu, nekādas papildu darbības nav jāveic.",
        'action' => 'Atspējot divpakāpju pieteikšanos',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Jūsu veikals tagad ir gatavs!",
        'category' => "dzimusi JAUNA TIEŠSAISTES VEIKALS PASAULĒ",
        'title' => "Apsveicam, :name!",
        'message' => "<b>Apsveicam, :name! Jūsu jaunais tiešsaistes bizness tagad ir pieejams!</b> Ar prieku sveicam jūs Selldoners kopienā. Jūs esat spēris pirmo soli ceļā uz panākumiem, un mēs esam šeit, lai palīdzētu jums ik uz soļa.<br>QTagad, kad jūsu veikals ir gatavs, pārliecināsimies, ka esat gatavs saņemt maksājumus tieši no saviem klientiem un sākt attīstīt savu impēriju. Ja jums kādreiz ir nepieciešama palīdzība, mēs esam tikai īsziņas attālumā — mūsu atbalsta komanda vienmēr ir jūsu rīcībā.<br>Q<br><b>Svarīgas nākamās darbības:</b> Lai sāktu, pārliecinieties, ka esat gatavs maksājumu saņemšanai un nevainojamai darbībai. Mēs palīdzēsim jums veikt katru posmu, lai jūsu veikals darbotos nevainojami.",
        'pdf-book' => "Nepalaidiet garām pievienoto rokasgrāmatu: Do Your Business Like A Game",

        'account' => [
            'title' => '1. darbība. Izveidojiet kontu Selldone makā',
            'message' => "Lai sāktu, izveidojiet kontu savā Selldone makā. Šeit tiks atskaitīta jūsu maksa, kā arī jūs papildināsiet, lai jūsu veikals darbotos nevainojami. Ja jūsu bilance kādreiz kļūst negatīva, neuztraucieties! Jūsu veikals turpinās darboties bez pārtraukuma.",
            'action' => 'Piesakieties makā',
        ],

        'shop-account' => [
            'title' => '2. darbība: savienojiet kontu ar veikalu',
            'message' => "Pēc tam savienojiet savu maka kontu ar veikalu. Dodieties uz <b>Store > Grāmatvedība > Invoice</b> un piesaistiet savu maku. Tas nodrošina, ka visi klientu maksājumi tiek ieskaitīti tieši jūsu bankas kontā — Selldone neietur nekādas summas no jūsu ieņēmumiem.",
            'action' => 'Veikala rēķinu panelis',
        ],

        'gateway' => [
            'title' => '3. darbība. Pievienojiet tiešsaistes maksājumu vārteju',
            'message' => "Tagad iestatīsim jūsu tiešsaistes maksājumu vārteju. Dodieties uz <b>Store > Grāmatvedība > Port</b> un noklikšķiniet uz <b>Pievienot jaunu portu</b>. Atlasiet savu valūtu, un tiks parādīts pieejamo maksājumu vārtejas saraksts. Vārtejas pievienošana ir ātra un vienkārša, taču, ja jums nepieciešama palīdzība, lūdzu, pārbaudiet Selldone ceļvežus vai sazinieties ar mums.",
            'action' => 'Pievienojiet veikalam portālu',
        ],

        'domain' => [
            'title' => 'Pēdējais solis: speciāla domēna savienošana',
            'message' => "Tagad saistiet savu pielāgoto domēnu ar savu veikalu. Tas ļauj klientiem iegādāties jūsu produktus vai pakalpojumus un veikt maksājumus tieši jums.",
            'action' => 'Iepazīstinām un saņemam neierobežotu dāvanu karšu skaitu',
        ],
    ],


    'basket-list' => [
        'item' => "lieta",
        'count' => "Skaitīt",
        'price' => "cena",
        'discount-code' => "Atlaides kods",
        'customer-club' => 'Klientu klubs',
        'shipping' => "Piegāde",
        'total' => "Kopā",
        'offer' => "Piedāvājums",
        'coupon' => "Kupons",
        'lottery' => "Balva",
        'tax' => "Nodoklis",
        'tax_included' => "Iekļauts cenā",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metode',
        'amount' => 'Summa',
        'giftcard' => 'Gift card',
        'payment' => 'Maksājums',
    ],


    'shop-subscription-email' => [
        'category' => "Abonementa atjauninājums",
        'title' => "Veikala licence: :shop_title",
        'title-reserved' => "Rezerves licence: :shop_title",
        'title-active' => "Aktīvā licence: :shop_title",
        'title-finished' => "Pabeigtā licence: :shop_title",
        'title-cancel' => "Atcelt licenci: :shop_title",
        'message' => "Jūsu veikala licences plāns ir atjaunināts,",
        'RESERVED' => "⚡ Jūsu abonēšanas plāns ir **rezervēts**.",
        'ACTIVE' => "🟢 Jūsu abonēšanas plāns ir **aktivizēts**.",
        'FINISHED' => "🚧 Jūsu abonēšanas plāns ir **pabeigts**.",
        'CANCEL' => "⛔ Jūsu abonēšanas plāns ir **atcelts**.",
    ],

    'support' => [
        'subject' => "Atbalsta centrs | :name atbildēja",
        'category' => "Atbalsta centrs",
        'title' => "Jūs saņēmāt atbildi",
        'action' => "Atvērt veikala administratoru",
    ],

    'shop-customer-join' => [
        'subject' => "Pievienojieties :shop_title",
        'category' => "Jauno klientu svinības",
        'title' => "Mēs priecājamies par jūsu dalību",
        'action' => "Apmeklējiet tagad",
    ],

    'shop-vendor-join' => [
        'subject' => "Pārdevēja uzņemšana | :shop_title",
        'category' => "Jaunā pārdevēja svētki",
        'title' => "Mēs priecājamies par jūsu dalību",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Dāvanu karte :shop_title",
        'category' => "Pievienojiet jaunu karti",
        'title' => "Apsveicam, jūs esat saņēmis dāvanu karti",
        'action' => "Iepērcieties tagad",
        'message' => "Jūs esat saņēmis dāvanu karti :balance :currency vērtībā. Šo dāvanu karti vari izmantot mūsu veikalā.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Atbalsta centrs| :shop",
        'category' => "atbalsts",
        'title' => "Jūs saņēmāt atbildi",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Pasūtījuma apstiprinājums|Pasūtiet :order_id",
        'title' => "pasūtījums",
        'message' => "Jūs veicāt pasūtījumu mūsu veikalā. Mēs saņēmām jūsu pasūtījumu un nosūtīsim jums citu e-pastu, tiklīdz maksājums būs apstiprināts."
    ,

        'payments' => 'Maksājumi',
    ],

    'order-payment' => [
        'subject' => "🛍️ Maksājuma apstiprinājums|Pasūtiet :order_id",
        'title' => "Maksājuma uzdevums",
        'message' => "Jūsu maksājums ir pabeigts,<br> Mums ir jūsu pasūtījums. Kad pasūtījums tiks nosūtīts, mēs nosūtīsim jums citu e-pasta ziņojumu.",
    

        'payments' => 'Maksājumi',
    ],

    'order-update' => [
        'subject' => "🛍️ Pasūtījuma statusa atjauninājums|Pasūtiet :order_id",
        'title' => "Pasūtījuma statusa atjaunināšana",
        'message' => "Jūsu pasūtījums ir atjaunināts. Jūs varat pārbaudīt šī pasūtījuma jaunāko statusu savā kontā.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Jūsu pasūtījums ir apstrādes rindā. Mēs jums paziņosim, kad tas tiks sagatavots.",
                'OrderConfirm' => "Jūsu pasūtījums ir apstiprināts un sagatavošana ir sākusies.",
                'PreparingOrder' => "Jūsu pasūtījums tiek gatavots un drīz tiks nosūtīts.",
                'SentOrder' => "Jūsu pasūtījums ir nosūtīts. Jūs to saņemsit drīz.",
                'ToCustomer' => "Jūsu pasūtījums ir piegādāts. Mēs ceram, ka jums patiks!",

                'PreparingOrder-PICKUP' => "Jūsu pasūtījums tiek gatavots. Jūs saņemsiet paziņojumu, kad tas būs gatavs saņemšanai.",
                'SentOrder-PICKUP' => "Jūsu pasūtījums ir gatavs saņemšanai. Lūdzu, nāciet uz veikalu, lai to savāktu.",
                'ToCustomer-PICKUP' => "Jūsu pasūtījums ir paņemts. Mēs ceram, ka jums patiks!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Jūsu pasūtījums ir apstrādes rindā. Mēs jums paziņosim, kad tas būs gatavs.",
                'OrderConfirm' => "Jūsu pasūtījums ir apstiprināts un notiek sagatavošana.",
                'PreparingOrder' => "Jūsu pasūtījums tiek gatavots un drīzumā tiks nosūtīts.",
                'ToCustomer' => "Jūsu virtuālais pasūtījums ir piegādāts jūsu kontā. Paldies!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Jūsu pakalpojuma pieprasījums ir rindā. Mēs jums paziņosim, kad sāksim.",
                'OrderConfirm' => "Jūsu pakalpojums ir apstiprināts, un mēs gatavojamies sākt.",
                'PreparingOrder' => "Mēs gatavojam jūsu pakalpojumu un informēsim jūs, kad tas būs pabeigts.",
                'ToCustomer' => "Jūsu pakalpojums ir pabeigts. Paldies, ka izvēlējāties mūs!"
            ],
            'FILE' => [
                'PreparingOrder' => "Jūsu fails tiek sagatavots, un tas drīz būs pieejams.",
                'ToCustomer' => "Jūsu fails ir gatavs un ir piegādāts. Tagad varat to lejupielādēt."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Jūsu abonementa pasūtījums ir rindā. Mēs jūs informēsim, kad apstrāde sāksies.",
                'OrderConfirm' => "Jūsu abonements ir apstiprināts un tiek iestatīts.",
                'PreparingOrder' => "Mēs gatavojam jūsu abonementu, un tas drīz sāksies.",
                'SentOrder' => "Jūsu abonements ir aktivizēts. Jūs saņemsiet pastāvīgus atjauninājumus.",
                'ToCustomer' => "Jūsu abonēšanas pakalpojums ir veiksmīgi aktivizēts."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Apsveicam :name | Jauns kupons: :title',
        'category' => "APSVEICAM, JAUNS KUPONS",
        'message' => "Sveiki, :name,<br><br> Jūs esat saņēmis no mums jaunu kuponu kā dāvanu! Jūs varat nopelnīt vēl vairāk kuponu, iepazīstinot ar Selldone savus draugus un visus, ko pazīstat. Šī kupona vērtība ir **:price :currency**.<br><br>Jūs esat spēris pirmo soli, un mēs esam šeit, lai palīdzētu jums ar kuponu atbloķēt jaunas funkcijas! Lūdzu, piesakieties ar **:email** un atrodiet savu kuponu veikalā **Informācijas panelis** > **Iestatījumi** > **Licence**.<br><br>Apsveicam!",
        'action' => "Mans informācijas panelis",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Apsveicam, dārgais :name | Jūs esat saņēmis dāvanu',
        'category' => "Paziņojums par dāvanas saņemšanu",
        'title' => "Dāvanas jums",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Dāvanas",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Saņemts jauns pasūtījums| :order_id",
        'title' => "New Order",
        'message' => "Jūs esat saņēmis jaunu pasūtījumu. Lūdzu, dodieties uz pasūtījumu apstrādes lapu savā veikalā.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Jūsu aizpildītā informācija',
        'output-form-title' => 'Informācija par iegādāto preci',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Iknedēļas pārskats :time',
        'title' => 'Iknedēļas veikala darbības pārskats',
        'message' => "Šis ir jūsu veikala iknedēļas pārskats no <b>:start</b> līdz <b>:end</b>. Šajā pārskatā ir iekļauti padomi uzņēmējdarbības uzlabošanai, kā arī varat pārbaudīt sava tiešsaistes veikala statusu un jaunākos pasūtījumus. Es ceru, ka jums ir laba diena un nedēļa uz priekšu."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Jūsu :amount taupīšanas ziņojums pēdējo trīs mēnešu laikā| :shop_title',
        'title' => 'Sezonas pārskats par jūsu uzņēmējdarbību, atlīdzību un finanšu ietaupījumiem',
        'message' => "Šis ir jūsu <b>:shop_title</b> sezonas ziņojums no <b>:start</b> līdz <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Saistītie konti',
        'sub-title' => 'Kāds ir jaunākais ar manu veikalu saistīto maka kontu statuss?',
        'view-wallet' => 'Skatīt maku',
        'tip-title' => 'Svarīgi padomi',
        'tip' => "Iestatiet bezmaksas Selldone maku un saistiet to ar savu veikalu. Pat ja jūsu bilance ir negatīva, klienti joprojām var iepirkties un maksāt bez problēmām. Neuztraucieties, jūsu veikala darbība un dati turpināsies bez traucējumiem līdz pat 1 mēnesim.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Izveidojiet savienojumu ar kontu'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Instalētas lietotnes',
        'sub-title' => 'To lietotņu saraksts, kuras esat instalējis savā veikalā šonedēļ.',
        'tip' => "Vai vēlaties savam veikalam atrast vairāk lietotņu?",
        'view-app-store' => 'Apmeklējiet Selldone App Store.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Jūsu veikala robotprogrammatūra',
        'sub-title' => 'Aktīvie pārdošanas roboti manā veikalā.',
        'tip-title' => 'Botu izpārdošana',
        'tip' => "Selldone ir nodrošinājis jūs ar automātiskajiem pārdošanas robotiem. Viss, kas jums jādara, ir jādodas uz Papildinājumi> Boti paneli un jāaktivizē sava veikala robotprogrammatūra. Ņemiet vērā, ka attiecīgajam pakalpojumam ir jābūt pieejamam jūsu valstī.",
        'view-bots' => 'Pārvaldiet robotprogrammatūras',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikācija ar Klientiem',
        'sub-title' => 'Cik daudz man šonedēļ ir bijis kontaktu ar saviem klientiem?',
        'faqs' => 'bieži uzdotie jautājumi',
        'tickets' => 'Klientu biļetes',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Lietotāju statuss',
        'sub-title' => 'Darbība no :start līdz :end',
        'users' => [
            'title' => 'Klienti',
            'subtitle' => 'Reģistrēties lietotājiem',
        ],
        'views' => [
            'title' => 'Apmeklējumi',
            'subtitle' => 'Cik reizes esat apmeklējis veikalu',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Atgrieztie lietotāji',

        'shop_views' => 'Veikalu skati',
        'baskets' => [
            'title' => 'Iepirkumu ratiņi',
            'subtitle' => 'Ziņojiet par jauno iepirkumu grozu skaitu',
        ],
        'products' => [
            'title' => 'Produktu pārskats',
            'subtitle' => 'Preču statuss veikalā pēc veida',
            'value_name' => 'Produkti'
        ],
        'products_count' => 'Produktu veidi',
        'views_count' => 'Skatījumu skaits',
        'sell_count' => 'Pārdodu skaits',
        'send_count' => 'Piegādes skaits',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panelis lielākajiem Drop Shipping Selldone pārdevējiem.',
        'total_fulfillments' => 'Kopējais saņemto pasūtījumu skaits',
        'ds_count' => 'Saņemti pasūtījumi',
        'statistics_title' => 'Ziņot par saņemtajiem pasūtījumiem',
        'ds_cancels' => 'Atceļ interfeisa pārdevējs',
        'ds_rejects' => 'Jūs atceļat',
        'tip' => "Vai esat galvenais preču pārdevējs? Vai jums pieder noliktava, rūpnīca vai produktu izplatītājs? Jūs varat piedāvāt savus produktus citiem pārdevējiem pakalpojumā Selldone Drop Shipping, lai pārdotu savu produktu plašā mērogā. Nosūtiet mums e-pastu uz support@selldone.com, lai sniegtu norādījumus.",
        'view-drop-shipping-panel' => 'Piesakieties vairumtirdzniecības panelī',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Valūtu kursi',
        'sub-title' => 'Jaunāko valūtas maiņas kursu saraksts jūsu veikalā.',
        'from' => 'Avota valūta',
        'to' => 'Galamērķa valūta',
        'rate' => 'Konversijas ātrums',
        'view-exchange-panel' => 'Pārvaldīt valūtas maiņas kursus',
    

        'vew-exchange-panel' => 'valūtas kursa pārvaldības panelis',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ekspertu līgumi',
        'sub-title' => 'Kādi speciālisti strādā manā veikalā?',
        'cost' => 'Līguma summa',
        'duration' => 'Ilgums',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datums Atcelt',
        'end_at' => 'Piegādes datums',
        'tip' => 'Jūs varat nolīgt labākos speciālistus Selldone, lai attīstītu savu biznesu.',
        'view-experts' => 'Noklikšķiniet, lai sāktu.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Ziņojiet par aktīvajiem maksājumu vārtiem veikalā :shop.',
        'tip-title' => 'Svarīgi padomi',
        'tip' => "Pārejiet uz portāla pārvaldības lapu savā veikalā un pēc dažām minūtēm pievienojiet vismaz vienu portu. Jūsu klientiem patīk maksāt ātri un droši, izmantojot tiešsaistes portālus.",
        'view-shop-gateways' => 'Piesakieties mana veikala portāla pārvaldībā.',
        'view-gateways' => 'Skatīt vairāk vārteju',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Pasūtījumi',
        'sub-title' => 'Šonedēļ saņemto pasūtījumu saraksts.',
        'total_baskets' => 'Pasūtījumu kopskaits',
        'total_posBaskets' => 'Skaidras naudas pasūtījumu kopskaits',
        'pos-title' => 'POS veikala kaste',
        'chart-label' => 'Pasūtījumi izpildīti (šie pasūtījumi nav obligāti apmaksāti!)',
        'tip-title' => 'Jācenšas vairāk...',
        'tip' => "Nav vienkāršu panākumu.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Apstrādes centrs',
        'sub-title' => 'Cik lielu pasūtījumu mēs šonedēļ apstrādājām veikalā?',
        'tip-title' => 'Jums nebija izpārdošanas!',
        'tip' => "Diemžēl šonedēļ jums nebija izpārdošanas. Jums ir jāiegūst vairāk jūsu veikalā. Varat pievienot vairāk produktu, izvēlēties labākus attēlus vai rakstīt labākus aprakstus saviem produktiem. Apsveriet sava uzņēmuma pilnas slodzes darbu. Ja darīsi to pareizi un nesaņemsi vilšanos, tev izdosies.",
        'view-process-center' => 'Skatīt procesa centru',
        'return' => [
            'title' => 'Atgriezts pasūtījums',
            'subtitle' => 'Ziņot par atgrieztajiem pasūtījumiem.',
            'tip-title' => 'Vai jūs zinājāt, ka ...',
            'tip' => "Izmantojot Selldone POS, varat izveidot tik daudz kases aparātu, cik nepieciešams! Neatkarīgi no tā, vai tas ir planšetdators, mobilais tālrunis vai klēpjdators, jebkuru ierīci varat pārvērst par sava veikala tirdzniecības vietu. Tas ir vienkārši, ātri iestatāms un pilnībā sagatavots jūsu serverim. Sāciet to lietot jau šodien!",
            'view-pos' => 'Piesakieties Mana tiešsaistes veikala kasē'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesijas',
        'sub-title' => 'Cik reizes es apmeklēju savu veikalu?',
        'countries-title' => 'Kuras valstis ir bijušas visvairāk apmeklētas?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Vai vēlaties nopelnīt naudu, neiztērējot vienu dolāru?',
        'message' => "Cien. :name, varat doties uz Dashboard > Demonetization un izveidot novirzīšanas saiti. Nosūtiet saiti saviem draugiem, Jūs saņemat Selldone dāvanu kartes un procentus no drauga maksājumiem. Ņemiet vērā, ka dāvanu karte tiks nosūtīta gan jums, gan jūsu draugam.",
        'action' => 'Skatiet manu ievada saiti',
        'mail-clip' => "<b style='color: #C2185B'>Svarīgi!</b> Ja izmantojat e-pasta pakalpojumus, piemēram, Gmail, kas ierobežo e-pasta garumu, e-pasta ziņojuma beigās atrodiet šo opciju, lai parādītu pilnu pārskatu, un noklikšķiniet uz tā:",

        'no-coin-reward' => "<b style='color: #C2185B'>Atvainojiet:</b> jūsu darbība neatbilda prasībai, lai saņemtu bezmaksas SEL Coins atlīdzību. Centieties vairāk un pārdodiet vairāk savā veikalā nākamajai sezonai.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Apsveicam:</b> Lielisks darbs! Pamatojoties uz jūsu izcilo sniegumu, mēs esam ieskaitījuši :amount SEL monētas jūsu kontā kā atlīdzību.",

        'need-buy-license' => "<b> Paaugstiniet savu biznesu: </b> Šķiet, ka jūs vēl neesat reģistrējis abonēšanas plānu savai vietnei! Jauniniet tūlīt, lai atbloķētu vairāk funkciju tikai par :amount mēnesī, ja maksājat katru gadu.",
        'not-afford-message' => "Ja nevarat atļauties vai jums ir problēmas ar maksājumu, sazinieties ar mums pa e-pastu support@selldone.com.",
        'add-domain' => "<b>Kāpēc gan savam uzņēmumam neizveidot pielāgotu domēnu?</b><br> Pievienojiet domēnu savai vietnei tūlīt; tas ir par brīvu!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone ir <del>produkts</del> <span style = 'color: forestgreen'> kopiena</span>.<br>Esiet profesionāls pārdevējs!",
        'message' => "Sekojiet oficiālajām Selldone lapām Twitter, LinkedIn un sociālajos tīklos. Nosūtiet mums jebkādus komentārus, pieprasījumus vai kritiku vai piedalieties diskusijās par Selldone. Mēs esam arī daļa no jūsu <b>izveidotās</b> Selldone kopienas."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Saņemti jauni avokado pasūtījumi | :shop_title :time',
        'title' => "Darbības pārskats par pēdējām 24 stundām",
        'message' => "Jūsu klienti gaida, kad jūsu pasūtījumi tiks pārskatīti un tiks noteiktas cenas. Pēc iespējas ātrāk atbildiet uz klientu pieprasījumiem, lai iegūtu vairāk pārdošanas apjomu.",
        'card_title' => "Pasūtījumi rindā",
        'card_subtitle' => "No :date",

        'card_payed' => "Apmaksāti pasūtījumi"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Atbildiet uz savu ziņu :community_title',
        'title' => ":name un :count citi komentēja jūsu ziņas.",
        'message' => "Sveiki, :name, jūsu ziņām tiek pievērsta uzmanība! Jūs esat saņēmis komentārus mūsu kopienā. Piesakieties savā kontā, lai pievienotos diskusijai un redzētu, ko visi saka.",
        'title-simple' => ":name komentēja jūsu ziņas.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Atbildēt uz savu tēmu :topic_title',
        'title' => ":name un :count citi atbildēja par jūsu tēmu.",
        'message' => "Sveiki, :name, jūsu tēma pievērš uzmanību! Jūs esat saņēmis atbildes mūsu kopienā. Piesakieties savā kontā, lai pievienotos diskusijai un redzētu, ko visi saka.",
        'title-simple' => ":name atbildēja par jūsu tēmu.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Jauna pieteikšanās :name',
        'category' => 'Drošības paziņojumi',
        'title' => "Piesakieties kontā",
        'message' => "Dārgais :name, jūs esat pieteicies savā Selldone kontā.",   // Login in selldone (seller)
        'message-shop' => "Dārgais :name, jūs esat pieteicies vietnē :shop_title .",  // Login in shop (buyer)

        'footer' => "Ja neesat pieteicies, lūdzu, nomainiet savu paroli.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Izņemšana",
        'deposit' => "Depozīts",

        'withdraw_subject' => "Izņemt no konta :account",
        'deposit_subject' => "Depozīts kontā :account",

        'message' => "Naudas pārskaitījums ir veikts ar šādām specifikācijām.",

        'type' => "Darījuma veids",

        'from' => "Avota konts",
        'to' => "Destination account",

        'desc' => "Darījuma apraksts",
        'action' => "Skatīt darījumu",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Svarīgi! Noteikumu pārkāpums| :shop",
        'category' => "Kritiskā informācija",
        'title' => "Jūsu veikals ir sodīts",
        'action' => "Atveriet veikala informācijas paneli",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter uzaicināja jūs uz Selldone",
        'title' => ":name nosūtīja jums :amount, lai palīdzētu jums atvērt savu jauno tiešsaistes vietni un gūt peļņu no tās!",
        'message' => "Sveiki, **:receiver_name**, <br><br> Laipni lūdzam Selldone! Izmantojot Selldone, varat viegli izveidot savu e-komercijas vietni, emuāru, tiešsaistes kopienu un pat izveidot tiešsaistes POS sistēmu pārdošanai klātienē — tas viss notiek dažu minūšu laikā. Tā ir pilnīga tiešsaistes biznesa operētājsistēma, kas izstrādāta, lai padarītu jūsu uzņēmumu labāku, ātrāku un vieglāk vadāmu.<br><br> Reģistrējieties līdz <b>:date</b> un saņemiet :amount kuponu, lai sāktu darbu!",
        'accept' => "Pieņemt ielūgumu",
        'owner' => "Īpašnieks",
        'join-date' => "Par Selldone kopš",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Atkopšanas saite| :shop",
        'category' => "Veikalu apsardze",
        'title' => "Veikala atkopšanas saite <b>:shop_name</b> .",
        'message' => "Šis e-pasta ziņojums jums tika nosūtīts, jo pieprasījāt sava veikala atjaunošanu. Noklikšķinot uz tālāk esošās saites, tiks atkopts jūsu veikals un visi tam piederošie dati.",
        'action' => "Apstipriniet veikala atkopšanu",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Cik naudas Selldone ietaupīja jūsu uzņēmumam?',
        'sub-title' => 'No datuma :start līdz :end',
        'infrastructure' => [
            'title' => 'Infrastruktūra',
            'subtitle' => 'Serveri, CDN, krātuve un citi mākoņpakalpojumi',
        ],
        'experts' => [
            'title' => 'Eksperti un personāls',
            'subtitle' => 'Izstrādātāji, uzturēšana un atbalsts',
        ],
        'total_save' => 'Kopā ietaupītā nauda'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Jūsu sniegums',
        'sub-title' => 'Biznesa pārskats no :start līdz :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Atgrieztie lietotāji',

        'shop_views' => 'Veikalu skati',
        'baskets' => [
            'title' => 'Iepirkumu ratiņi',
            'subtitle' => 'Ziņojiet par jauno iepirkumu grozu skaitu',

        ],
        'products' => [
            'title' => 'Produktu pārskats',
            'subtitle' => 'Preču statuss veikalā pēc veida',
            'value_name' => 'Produkti'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Kopējais vietnes lapu skatījumu skaits',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Jūs esat saņēmis jaunu pasūtījumu. Lūdzu, pārejiet uz pasūtījumu apstrādes lapu savā piegādātāja panelī.",
        'subject' => "🛍️ Saņemts jauns pasūtījums| :order_id",
        'your_revenue' => "Jūsu ieņēmumi",
    ],
    'vendor-invite' => [
        'title' => 'Pārdevēja ielūgums',
        'message' => "Jūs esat saņēmis uzaicinājumu kļūt par :shop_name piegādātāju. Varat to pieņemt vai noraidīt, noklikšķinot uz tālāk norādītajām pogām.",
        'subject' => ":shop_name |Aicinājums kļūt par mūsu pārdevēju",
        'accept' => "Pieņemiet un kļūstiet par pārdevēju",
        'reject' => "Noraidīt",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Aicinājums pievienoties mūsu komandai',
        'message' => "Jūs esat uzaicināts pievienoties :vendor_name vietnē :shop_name. Varat pieņemt vai noraidīt šo ielūgumu, izmantojot tālāk esošās pogas.",
        'subject' => "Aicinājums pievienoties :vendor_name|Kļūsti par komandas biedru",
        'accept' => "Pieņemiet un pievienojieties komandai",
        'reject' => "Noraidīt",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Jūsu pieteikšanās kods :shop",
        'header-message' => "Mēs nosūtām jums šo e-pasta ziņojumu, jo pieprasījāt veikala pieteikšanās kodu. Lūdzu, tālāk atrodiet savu vienreizējo paroli (OTP):",
        'footer-message' => "Šis kods būs derīgs 10 minūtes. Ja nepieprasījāt šo pieteikšanās kodu, lūdzu, ignorējiet šo e-pasta ziņojumu."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Apstipriniet savu e-pastu| :shop",
        'title' => 'E-pasta verifikācija',
        'header-message' => "Sveiki :name,<br> Lūdzu, apstipriniet, ka **:email** ir jūsu e-pasta adrese, noklikšķinot uz pogas vai izmantojiet zemāk esošo saiti 48 stundu laikā.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produktu atjauninājumi| :shop",
        'title' => "Produkta statusa atjauninājums — pēdējās 24 stundas",
        'message' => "Es ceru, ka šī ziņa jūs atradīs. Šis ir īss atjauninājums, lai informētu jūs par jūsu produktu statusu mūsu platformā pēdējo 24 stundu laikā.\nŠajā periodā ir notikušas izmaiņas dažu produktu statusā. Šīs izmaiņas var būt saistītas ar pirkumiem, krājumu atjauninājumiem vai citiem saistītiem notikumiem.\nLai iegūtu sīkāku informāciju par katru produktu, lūdzu, piesakieties savā kontā un pārbaudiet sadaļu \"Produkta statuss\".",
        'action' => "Atveriet piegādātāju paneli",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Saņemti lielapjoma pasūtījumi| :shop | :date",
        'title' => "Paziņojums par lielapjoma pasūtījumiem",
        'message' => "Jūs esat saņēmis lielapjoma pasūtījumu partiju. Lai iegūtu sīkāku informāciju, lūdzu, apmeklējiet pasūtījuma apstrādes lapu savā panelī. Varat arī lejupielādēt pasūtījumu sarakstu, izmantojot nodrošināto drošo saiti, kas ir derīga 7 dienas.<br><br>\n        <b>SVARĪGI:</b> Šī saite ir derīga 7 dienas.<br>\n        Šī saite ir dinamiska, tāpēc katru reizi, noklikšķinot uz tās, jūs saņemsiet jaunākos pasūtījumus par šo konkrēto datumu. <b>Tas nozīmē, ja pasūtījuma maksājuma statuss mainās uz noraidīts, jūs vairs neredzēsit šo pasūtījumu lejupielādētajā CSV failā vai, ja pasūtījums ir apmaksāts, tas tiks parādīts sarakstā.</b><br><br>\n        <ul>\n            <li>CSV satur apmaksātus pasūtījumus ar rezervētu datumu :date.</li>\n            <li>Rezervētais datums ir datums, kad lietotājs pasūtījuma lapā noklikšķina uz izrakstīšanās.</li>\n        </ul>\n        <b>Lai novērstu pasūtījumu dublikātus, pirms nosūtīšanas vienmēr pārbaudiet pasūtījumu ID.</b>",
        'action' => "Lejupielādēt pasūtījumu sarakstu",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Dažas preces jūsu pasūtījumā netika pieņemtas un nevar tikt piegādātas. Summa par šīm precēm drīzumā tiks atmaksāta jūsu kartē."
    ]

];
