<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'To sporočilo pozdravlja novega kupca v trgovini.',
        ShopMailTemplateCodes::OrderCheckout => 'To obvestilo se pošlje, ko kupec potrdi naročilo.',
        ShopMailTemplateCodes::OrderPayment => 'To obvestilo potrjuje uspešno plačilo stranke.',
        ShopMailTemplateCodes::OrderUpdate => 'To sporočilo je poslano za obveščanje kupca o statusu njegovega naročila.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'To sporočilo je poslano prodajalcu, da ga obvestimo o potrjenem naročilu.',
        ShopMailTemplateCodes::PosCheckout => 'To obvestilo je poslano za potrditev naročila na prodajnem mestu za kupca.',
        ShopMailTemplateCodes::PosPayment => 'To obvestilo potrjuje plačilo na prodajnem mestu s strani kupca.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'To sporočilo obvesti prodajalca o nakupu, opravljenem na njegovem prodajnem mestu.',
        ShopMailTemplateCodes::ShopContact => 'To obvestilo se pošlje, ko je oddan kontaktni obrazec.',
        ShopMailTemplateCodes::ShopGiftCard => 'To obvestilo obvesti uporabnika, da je prejel darilno kartico.',

        ShopMailTemplateCodes::ShopVendorJoin => 'To sporočilo pozdravlja novega prodajalca v trgovini.',
        ShopMailTemplateCodes::ShopVendorInvite => "To sporočilo je poslano, da povabi prodajalca, da se pridruži vaši tržnici.",
        ShopMailTemplateCodes::ShopVendorOrder => "To sporočilo je poslano prodajalcu, ko je naročilo prejeto v statusu Plačano ali Plačano po povzetju (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Pošilja se vsak dan, da prodajalce obvesti o statusu njihovih izdelkov.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "To sporočilo je poslano, da povabi prodajalca, da se pridruži vaši tržnici.",

        ShopMailTemplateCodes::UserLogin => "Obvestite uporabnika s podatki za prijavo, vključno z naslovom IP, datumom in napravo, zaradi varnosti.",
        ShopMailTemplateCodes::LoginCode => "Pošlji kodo enkratnega gesla, da se uporabniki prijavijo v trgovino.",

        ShopMailTemplateCodes::EmailVerifyLink => "Pošljite povezavo za potrditev e-poštnega naslova uporabnika. To e-poštno sporočilo je poslano, ko se uporabnik registrira prek SMS in vnese svoj e-poštni naslov. Ne pošlje se, ko se uporabnik registrira neposredno z družabno prijavo ali e-pošto.",

        ShopMailTemplateCodes::EmailBulkOrder => "Skupno pošiljanje seznama prejetih in plačanih naročil za določen dan."


    ,

    ],


    'global' => [
        'greetings' => 'Živjo, :name!',
        'end-statement' => 'Podporna ekipa',

        'receiver_name' => 'Pozdravljeni :user_name',
        'footer-help' => "Potrebujete pomoč? Vprašajte na [support@selldone.com](mailto:support@selldone.com) ali obiščite naš [center za pomoč](https://selldone.com/community).",
        'selldone-team' => 'Ekipa Selldone',
        'footer-shop' => "Če potrebujete pomoč pri čemer koli, nam ne oklevajte in nam pišite na e-pošto: :shop_mail",
        'accept' => "Sprejmi",
        'reject' => "Zavrni",
        'verify' => "preveriti",
        'title' => "Naslov",
        'value' => "vrednost",
        'description' => "Opis",
        'shop' => "Nakupujte",
        'shop-info' => "Informacije o trgovini",
        'user' => "Uporabnik",
        'user-info' => "Podatki o računu",
        'license' => "Licenca",
        'status' => "Stanje",
        'start' => "Začni",
        'end' => "Konec",
        'renewal' => "Obnova",
        'view' => "Ogled",

        'balance' => "Ravnovesje",
        'card_number' => "Številka kartice",
        'cvv' => "Cvv",
        'expire_date' => "Rok uporabnosti",

        'Dashboard' => "Nadzorna plošča",
        'order' => "naročilo",
        'view_order' => "Oglejte si naročilo",
        'pay_now' => "Pay now",

        'official_selldone' => "URADNO PRODANO",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "valuta",
        'free-balance' => "Prosto stanje",
        'locked-balance' => "Zaklenjeno stanje",
        'bot' => "bot",
        'requests' => "Zahteve",
        'baskets' => 'Vozički',
        'physical' => "fizično",
        'virtual' => "Virtualna",
        'file' => "mapa",
        'service' => "Storitev",
        'fulfillment' => "Izpolnitev",
        'open' => "Odprto",
        'reserved' => "Rezervirano",
        'canceled' => "Prekinjeno",
        'payed' => "Plačano",
        'cod' => "COD",
        'orders-count' => 'Naročila',
        'payments-count' => 'plačila',
        'confirms-count' => 'Potrjuje',
        'sends-count' => 'Pošlje',
        'delivers-count' => 'Dostavlja',
        'count' => 'štetje',
        'transactions-count' => 'Štejejo se transakcije',
        'success-transactions' => 'Uspešne transakcije',
        'total-amount' => 'Skupni znesek',
        'amount' => 'Znesek',
        'wage' => 'Plača',
        'debug' => 'Odpravljanje napak',
        'pos' => 'POS',
        'live' => 'V živo',
        'CheckQueue' => 'Preverite čakalno vrsto',
        'OrderConfirm' => 'Potrditev naročila',
        'PreparingOrder' => 'Priprava naročila',
        'SentOrder' => 'Poslano naročilo',
        'ToCustomer' => 'Dostavljeno stranki',
        'Pending' => 'V teku',
        'Accepted' => 'Sprejeto',
        'Rejected' => 'Zavrnjeno',
        'pc' => 'PC',
        'tablet' => 'tablica',
        'phone' => 'Telefon',
        'total' => 'Skupaj',
        'view-detail' => 'Poglej Podrobnosti',
        'empty' => 'Prazno',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Odgovori',
        'reactions' => 'Reakcije',
        'Comments' => 'Komentarji',
        'last-comment' => 'Zadnji komentar',
        'response-to' => 'Odgovor na',
        'posts' => 'Objave',
        'post' => 'Objava',

        'name' => 'ime',
        'email' => 'E-naslov',
        'type' => 'vrsta',
        'device' => 'Naprava',
        'platform' => 'Platforma',
        'browser' => 'Brskalnik',
        'time' => 'Čas',
        'Wallet' => 'Denarnica',
        'date' => 'Datum',

        'account' => 'račun',
        'transaction' => 'Transakcija',
        'fee' => 'Pristojbina',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategorija',
        'password' => 'Geslo',
        'verify-login' => "Preveri in se prijavi",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hiper',
        'buy-now' => "Kupi zdaj",
        'add-domain' => "Add Domain",
        'views' => 'Pogledi',


        'country' => 'Država',
        'address' => 'naslov',
        'postal' => 'Poštna številka',
        'building_no' => 'Stavba št.',
        'building_unit' => 'Enota št.',
        'message' => 'Sporočilo',


        'customer' => 'Stranka',
        'cart-items' => 'Predmeti v košarici',
        'payment' => 'Plačilo',
        'receiver' => 'Sprejemnik',
        'virtual-items' => 'Virtualni predmeti',
        'no-payment' => 'Brez plačila!',

        'enable' => 'Omogoči',
        'access' => 'Dostop',
        'bank' => 'Podatki o banki',

        'vendor' => 'Prodajalec',

        'view_content' => "Oglejte si celotno vsebino",
        'files' => 'Datoteke',
        'download' => 'Prenesi',
        'file_name' => 'Ime datoteke',
        'file_size' => 'Velikost',

        'subscription' => 'Naročnina',
        'products' => 'Izdelki',
        'vendor_products' => 'Izdelki prodajalca',

        'pickup' => 'Prevzem',

        'minutes' => 'minute',
        'hours' => 'ure',

        'refund' => 'Povračilo',
        'recipient_address' => 'Naslov prejemnika',
        'signature' => 'Podpis',
        'blockchain' => 'Blockchain',
        'details' => 'Podrobnosti',


    

        'Shop' => 'Nakupujte',
        'dashboard' => 'armaturna plošča',
        'comments' => 'komentarji',
        'wallet' => 'denarnica',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Poročilo o uspešnosti, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Sezonsko poročilo, Selldone'
        ],
        'Onboarding' => [
            'id' => 'živjo',
            'name' => 'Odobri, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Podpora :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'živjo',
            'name' => 'Skupnost, Selldone'
        ],
        'NewShop' => [
            'id' => 'trgovci',
            'name' => 'Odobri, Selldone'
        ],
        'Approve' => [
            'id' => 'odobriti',
            'name' => 'Odobri, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Upravljanje naročil :name'
        ],

        'Recovery' => [
            'id' => 'okrevanje',
            'name' => 'Ekipa za obnovitev Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'V teku ⌛',
        'PAYED' => 'Plačano ✅',
        'CANCELED' => 'Preklicano ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Častnik in nadzornik',
            'AUDITING' => 'Vodja revizije',
            'EMPLOYEE' => 'Zaposleni',
            'PRODUCT' => 'Vodja izdelkov',
            'CONTENT' => 'Upravitelj vsebine',
            'MARKETING' => 'Vodja marketinga',
            'VIEWER' => 'Pregledovalec',

        ],
        'subject' => ":inviter vas je povabil kot :level| :shop",
        'category' => "Vabilo osebju",
        'title' => "Povabljeni ste bili v <b>:shop_name</b> kot <b>:level</b> .",
        'message' => "Prejeli ste povabilo za poslovno sodelovanje z ekipo <b>:shop_title</b>. To ponudbo lahko sprejmete ali zavrnete. Če se odločite za sprejem, se prijavite v storitev Selldone, da potrdite svojo odločitev. Po potrditvi boste pridobili dostop do razdelka za upravljanje trgovine.",

    ],

    'welcome-email' => [
        'subject' => "👋 Dobrodošli :name, začnimo s Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Dobrodošli v Selldone",
        'message' => "Hvala, ker ste izbrali Selldone! Zdaj ste del živahne skupnosti, ki povezuje globalne prodajalce s strankami, lokalna podjetja s podjetji in posameznike s korporacijami. Vsa naša orodja Master in Pro so vam na voljo **brezplačno** in **neomejeno**. Tukaj smo, da vas podpiramo in odpremo vrata vašemu uspehu.",

        'index' => "Korak :step.",

        'step-domain' => [
            'title' => 'Dodajte svojo domeno po meri',
            'message' => "Če želite začeti, brezplačno dodajte svojo domeno po meri na nadzorni plošči trgovine pod Nastavitve > Nastavitve domen.",
            'action' => 'Upravljanje mojih domen',
        ],
        'step-landing' => [
            'title' => 'Prilagodite svojo domačo stran',
            'message' => "Prilagodite svojo domačo stran tako, da odprete Nadzorna plošča > Strani. Izberite ciljno stran ali ustvarite novo. Je enostaven in intuitiven in z njim lahko začnete delati takoj.",
            'action' => 'Prilagodite mojo ciljno stran',
        ],
        'step-payment' => [
            'title' => 'Nastavite načine plačila',
            'message' => "Začnite sprejemati plačila neposredno na svoj bančni račun. Če želite povezati svoje ponudnike plačil, kot so Stripe, PayPal in drugi, pojdite na Nadzorna plošča > Računovodstvo > Prehod.",
            'action' => 'Dodaj plačilna sredstva',
        ],
        'step-products' => [
            'title' => 'Dodajte svoje izdelke',
            'message' => "Preprosto dodajte izdelke in kategorije v Nadzorna plošča > Izdelki. To je tako kot upravljanje datotek in map v vašem računalniku – popolnoma pripravljeno za povleci in spusti. Izdelke lahko tudi množično uvozite z uporabo Excela. Za lažji začetek je na voljo vzorčna predloga.",
            'action' => 'Upravljanje mojih izdelkov',
        ],
        'step-shipping' => [
            'title' => 'Nastavite načine pošiljanja',
            'message' => "Če želite strankam zaračunati pošiljanje, določite svoje načine pošiljanja na nadzorni plošči > Logistika > Pošiljanje. Nastavite lahko različne cene in podporo za različne lokacije. Ne pozabite nastaviti izvora svojega skladišča v Nadzorna plošča > Logistika > Skladišče.",
            'action' => 'Upravljajte načine pošiljanja',
        ],
    

        'seller' => [
            'title' => 'Ali ste prodajalec?',
            'message' => 'Če želite začeti prodajati, vnesite svojo nadzorno ploščo v Selldone prek spodnje povezave in ustvarite svojo prvo trgovino popolnoma brezplačno. To bo trajalo nekaj minut in imeli boste svojo trgovino in spletno stran. Nato vas bomo vodili do naslednjih korakov in pridobili plačilni prehod.',
            'action' => 'Prijavite se na mojo nadzorno ploščo',
        ],
        'buyer' => [
            'title' => 'Jaz sem kupec',
            'message' => 'čestitke Ko postanete član Selldone, se boste znebili vseh težav s članstvom in preverjanjem pristnosti v spletnih trgovinah. Če želite izkoristiti vse trgovine in spletne strani, ki uporabljajo platformo Selldone, se lahko prijavite z enim klikom in naredite svoj nakup preprost, hiter in varen.',
        ],
    ],


    'charge-account' => [
        'category' => 'Denarnica > Račun > Bremenitev',
        'title' => "Naboj za uspeh",
        'message' => "Vaš račun <b>:account_number</b> je bil uspešno bremenjen <b>:amount</b>.",
        'account' => 'račun',
        'charge' => 'Napolniti',
        'balance' => 'Ravnovesje',
        'footer' => "Naredite poslovanje enostavno, dosegljivo in dostopno vsem po svetu."
    ],

    'verify-email' => [
        'subject' => "🙌 Dokončajte svojo prijavo v Selldone! Preveri povezavo.",
        'category' => "SI EN KORAK DALJE",
        'title' => "Preverite svoj e-poštni naslov",
        'message' => "Pozdravljeni :name, <br><br> Hvala, ker ste izbrali Selldone! <br><br> Če želite potrditi, da je <b>:email</b> vaš pravilen e-poštni naslov, kliknite spodnji gumb ali uporabite navedeno povezavo. Za dokončanje tega preverjanja imate 48 ur.",
        'footer' => "Če imate težave s klikom na gumb Preveri, kopirajte in prilepite spodnji URL v spletni brskalnik: :activation_url",
        'next-step' => "Nato vam bomo poslali nekaj koristnih gradiv in vodnik po korakih, ki vam bodo olajšali dodajanje domene po meri, nastavitev plačil, dodajanje izdelkov in pridobitev prvega naročila.",

    ],
    'verify-email-code' => [
        'subject' => "Koda za preverjanje za :name",
        'category' => "SECURITY",
        'title' => "E-poštna koda za preverjanje",
        'message' => "Živjo :name, <br><br> Če želite potrditi, da je <b>:email</b> vaš pravilen e-poštni naslov, vnesite to kodo v naslednjih <b>10 minutah</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Vaša trgovina je pripravljena| :name",
        'category' => "SI EN KORAK DALJE",
        'title' => "Namestitev končana",
        'account_title' => "Vaš račun",
        'account_msg' => "Preverite in se prijavite v svoj račun s temi podatki.",
        'shop_msg' => "Podatki o računu v poslovnem operacijskem sistemu Selldone.",

    ],

    'reset2fa' => [
        'category' => "URADNO VARNOSTNO SPOROČILO",
        'title' => "Zahtevajte onemogočanje prijave v dveh korakih",
        'message' => "To e-pošto ste prejeli, ker smo prejeli zahtevo za ponastavitev dvostopenjske avtentikacije za račun **:name** z e-pošto **:email**. <br><br> Za vaš račun smo našli naslednje podrobnosti:",
        'footer' => "Če niste zahtevali ponastavitve gesla, ni potrebno nobeno nadaljnje dejanje.",
        'action' => 'Onemogoči prijavo v dveh korakih',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Vaša trgovina je zdaj pripravljena!",
        'category' => "RODJENA NOVA SPLETNA TRGOVINA NA SVETU",
        'title' => "Čestitke, :name!",
        'message' => "<b> Čestitamo, :name! Vaše novo spletno podjetje je zdaj v živo!</b> Z veseljem vas pozdravljamo v skupnosti Selldoners. Naredili ste prvi korak k uspehu, mi pa smo tukaj, da vam pomagamo na vsakem koraku. <br>Zdaj, ko je vaša trgovina pripravljena, poskrbimo, da boste nastavljeni na prejemanje plačil neposredno od svojih strank in začnimo graditi svoj imperij. Če boste kdaj potrebovali pomoč, smo oddaljeni le eno sporočilo – naša ekipa za podporo je vedno tu za vas. <br><br><b>Pomembni naslednji koraki: </b> Za začetek se prepričajte, da ste pripravljeni za prejemanje plačil in nemoteno delovanje. Vodili vas bomo skozi vsako fazo, da bo vaša trgovina delovala nemoteno.",
        'pdf-book' => "Ne zamudite priložene priročnike: Poslujte kot igra",

        'account' => [
            'title' => '1. korak: ustvarite račun v denarnici Selldone',
            'message' => "Za začetek ustvarite račun v svoji denarnici Selldone. Tukaj bodo odšteti vaši stroški in tam boste tudi dopolnili denar, da bo vaša trgovina delovala nemoteno. Če je vaše stanje kdaj negativno, ne skrbite! Vaša trgovina bo delovala nemoteno.",
            'action' => 'Prijava v denarnico',
        ],

        'shop-account' => [
            'title' => '2. korak: povežite račun s trgovino',
            'message' => "Nato povežite svoj račun denarnice s svojo trgovino. Pojdite na <b>Store > Računovodstvo > Račun</b> in povežite svojo denarnico. To zagotavlja, da so vsa plačila strank nakazana neposredno na vaš bančni račun—Selldone ne odšteje nobenih zneskov od vašega zaslužka.",
            'action' => 'Plošča za račune trgovine',
        ],

        'gateway' => [
            'title' => '3. korak: Povežite spletni plačilni prehod',
            'message' => "Zdaj pa nastavimo vaš spletni plačilni prehod. Pojdite na <b>Store > Accounting > Port</b> in kliknite <b>Add New Port</b>. Izberite svojo valuto in videli boste seznam razpoložljivih plačilnih prehodov. Priključitev prehoda je hitra in enostavna, če pa potrebujete kakršno koli pomoč, preverite vodnike Selldone ali se obrnite na nas.",
            'action' => 'Dodajte portal v trgovino',
        ],

        'domain' => [
            'title' => 'Zadnji korak: povezava namenske domene',
            'message' => "Zdaj pa povežite svojo domeno po meri s svojo trgovino. To strankam omogoča nakup vaših izdelkov ali storitev in plačilo neposredno vam.",
            'action' => 'Predstavitev in prejemanje neomejenih darilnih kartic',
        ],
    ],


    'basket-list' => [
        'item' => "predmet",
        'count' => "štetje",
        'price' => "cena",
        'discount-code' => "Koda za popust",
        'customer-club' => 'Klub strank',
        'shipping' => "Dostava",
        'total' => "Skupaj",
        'offer' => "Ponudba",
        'coupon' => "kupon",
        'lottery' => "Nagrada",
        'tax' => "davek",
        'tax_included' => "Vključeno v ceno",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metoda',
        'amount' => 'Znesek',
        'giftcard' => 'Gift card',
        'payment' => 'Plačilo',
    ],


    'shop-subscription-email' => [
        'category' => "Posodobitev naročnine",
        'title' => "Licenca trgovine: :shop_title",
        'title-reserved' => "Rezervna licenca: :shop_title",
        'title-active' => "Aktivna licenca: :shop_title",
        'title-finished' => "Dokončana licenca: :shop_title",
        'title-cancel' => "Prekliči licenco: :shop_title",
        'message' => "Vaš licenčni načrt trgovine posodobljen,",
        'RESERVED' => "⚡ Vaša naročnina je bila **rezervirana**.",
        'ACTIVE' => "🟢 Vaša naročnina je bila **aktivirana**.",
        'FINISHED' => "🚧 Vaš naročniški načrt je **dokončan**.",
        'CANCEL' => "⛔ Vaša naročnina je bila **preklicana**.",
    ],

    'support' => [
        'subject' => "Center za podporo | :name je odgovoril",
        'category' => "Center za podporo",
        'title' => "Prejeli ste odgovor",
        'action' => "Odpri skrbnika trgovine",
    ],

    'shop-customer-join' => [
        'subject' => "Pridružite se :shop_title",
        'category' => "Praznovanje nove stranke",
        'title' => "Veseli smo vašega članstva",
        'action' => "Obiščite zdaj",
    ],

    'shop-vendor-join' => [
        'subject' => "Uvajanje prodajalca| :shop_title",
        'category' => "Praznovanje novega prodajalca",
        'title' => "Veseli smo vašega članstva",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Darilna kartica :shop_title",
        'category' => "Dodaj novo kartico",
        'title' => "Čestitamo, prejeli ste darilno kartico",
        'action' => "Nakupujte zdaj",
        'message' => "Prejeli ste darilno kartico v vrednosti :balance :currency. S to darilno kartico boste lahko kupovali v naši trgovini.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Center za podporo| :shop",
        'category' => "podporo",
        'title' => "Prejeli ste odgovor",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Potrditev naročila|Naročite :order_id",
        'title' => "naročilo",
        'message' => "V naši trgovini ste oddali naročilo. Prejeli smo vaše naročilo in vam bomo poslali novo e-pošto, ko bo plačilo potrjeno."
    ,

        'payments' => 'plačila',
    ],

    'order-payment' => [
        'subject' => "🛍️ Potrditev plačila|Naročite :order_id",
        'title' => "Plačilni nalog",
        'message' => "Vaše plačilo je zaključeno,<br> Dobili smo vaše naročilo. Ko bo vaše naročilo poslano, vam bomo poslali še eno e-poštno sporočilo.",
    

        'payments' => 'plačila',
    ],

    'order-update' => [
        'subject' => "🛍️ Posodobitev statusa naročila|Naročite :order_id",
        'title' => "Posodobitev statusa naročila",
        'message' => "Vaše naročilo je posodobljeno. Zadnje stanje tega naročila lahko preverite v svojem računu.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Vaše naročilo je v čakalni vrsti za obdelavo. Ko bo v pripravi, vas bomo obvestili.",
                'OrderConfirm' => "Vaše naročilo je potrjeno in priprava se je začela.",
                'PreparingOrder' => "Vaše naročilo je v pripravi in bo kmalu poslano.",
                'SentOrder' => "Vaše naročilo je bilo poslano. Prejeli ga boste kmalu.",
                'ToCustomer' => "Vaše naročilo je bilo dostavljeno. Upamo, da boste uživali!",

                'PreparingOrder-PICKUP' => "Vaše naročilo je v pripravi. Ko bo pripravljen za prevzem, boste prejeli obvestilo.",
                'SentOrder-PICKUP' => "Vaše naročilo je pripravljeno za prevzem. Pridite v trgovino, da ga prevzamete.",
                'ToCustomer-PICKUP' => "Vaše naročilo je bilo prevzeto. Upamo, da boste uživali!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Vaše naročilo je v čakalni vrsti za obdelavo. Ko bo pripravljen, vas bomo obvestili.",
                'OrderConfirm' => "Vaše naročilo je potrjeno in priprava je v teku.",
                'PreparingOrder' => "Vaše naročilo je v pripravi in vam bo kmalu poslano.",
                'ToCustomer' => "Vaše virtualno naročilo je bilo dostavljeno na vaš račun. Hvala!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Vaša zahteva za storitev je v čakalni vrsti. Ko začnemo, vas bomo obvestili.",
                'OrderConfirm' => "Vaša storitev je potrjena in pripravljamo se na začetek.",
                'PreparingOrder' => "Vašo storitev pripravljamo in vas bomo obvestili, ko bo končana.",
                'ToCustomer' => "Vaša storitev je končana. Hvala, ker ste izbrali nas!"
            ],
            'FILE' => [
                'PreparingOrder' => "Vaša datoteka je v pripravi in ​​bo kmalu na voljo.",
                'ToCustomer' => "Vaša datoteka je pripravljena in dostavljena. Zdaj ga lahko prenesete."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Vaše naročniško naročilo je v čakalni vrsti. Ko se obdelava začne, vas bomo obvestili.",
                'OrderConfirm' => "Vaša naročnina je potrjena in se vzpostavlja.",
                'PreparingOrder' => "Pripravljamo vašo naročnino in bo kmalu stekla.",
                'SentOrder' => "Vaša naročnina je bila aktivirana. Prejemali boste tekoče posodobitve.",
                'ToCustomer' => "Vaša naročniška storitev je bila uspešno aktivirana."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Čestitke :name | Nov kupon: :title',
        'category' => "ČESTITKE, NOV BON",
        'message' => "Hej :name,<br><br> Od nas ste v dar prejeli nov bon! Prislužite si lahko še več kuponov tako, da Selldone predstavite svojim prijateljem in vsem, ki jih poznate. Ta kupon je vreden **:price :currency**.<br><br>Naredili ste prvi korak in tukaj smo, da vam pomagamo odkleniti nove funkcije z vašim kuponom! Prijavite se z **:email** in poiščite svoj kupon v trgovini **Nadzorna plošča** > **Nastavitve** > **Licenca**.<br><br>Čestitamo!",
        'action' => "Moja nadzorna plošča",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Čestitke, draga :name | Prejeli ste darilo',
        'category' => "Obvestilo o prejemu darila",
        'title' => "Darila za vas",
        'message' => "Pozdravljeni :name, z veseljem vam sporočamo, da ste od Selldone prejeli posebno darilo! 🎉 Več daril si lahko prislužite tako, da ostanete aktivni, povečate svojo trgovino in izboljšate svoje strokovno znanje o Selldone. Če želite preveriti svoje darilo, se preprosto prijavite s :email in ga poiščite v zgornjem desnem kotu nadzorne plošče. <br><br>To darilo je vredno **:price :currency** in ga lahko preprosto položite v svojo denarnico v Selldone.<br><br>Uporabite svoje darilo za nadgradnjo licenco vaše trgovine in odklenite še zmogljivejša orodja za pospešitev vašega spletnega poslovanja!",
        'action' => "darila",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Novo naročilo prejeto| :order_id",
        'title' => "New Order",
        'message' => "Prejeli ste novo naročilo. Pojdite na stran za obdelavo naročil v vaši trgovini.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Vaše izpolnjene informacije',
        'output-form-title' => 'Informacije o kupljenem artiklu',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Tedensko poročilo :time',
        'title' => 'Tedensko poročilo o uspešnosti trgovine',
        'message' => "To je tedensko poročilo vaše trgovine od <b>:start</b> do <b>:end</b>. To poročilo vsebuje nasvete za izboljšanje vašega poslovanja, preverite lahko tudi stanje vaše spletne trgovine in zadnja naročila. Upam, da imate dober dan in teden."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Vaše :amount poročilo o varčevanju v zadnjih treh mesecih| :shop_title',
        'title' => 'Sezonsko poročilo o vaši poslovni dejavnosti, nagradah in finančnih prihrankih',
        'message' => "To je vaše <b>:shop_title</b> sezonsko poročilo od <b>:start</b> do <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Povezani računi',
        'sub-title' => 'Kakšno je zadnje stanje računov denarnice, povezanih z mojo trgovino?',
        'view-wallet' => 'Ogled denarnice',
        'tip-title' => 'Pomembni nasveti',
        'tip' => "Nastavite brezplačno denarnico Selldone in jo povežite s svojo trgovino. Tudi če je vaše stanje negativno, lahko vaše stranke še vedno nakupujejo in plačujejo brez težav. Ne skrbite, delovanje vaše trgovine in podatki bodo nemoteno delovali do 1 meseca, brez prekinitev.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Povežite se z računom'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Nameščene aplikacije',
        'sub-title' => 'Seznam aplikacij, ki ste jih ta teden namestili v svojo trgovino.',
        'tip' => "Ali želite najti več aplikacij za svojo trgovino?",
        'view-app-store' => 'Obiščite trgovino z aplikacijami Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Vaši Store Boti',
        'sub-title' => 'Aktivni prodajni roboti v moji trgovini.',
        'tip-title' => 'Razprodaja botov',
        'tip' => "Selldone vam je zagotovil samodejne prodajne robote. Vse, kar morate storiti, je, da odprete ploščo Dodatki> Boti in aktivirate bote svoje trgovine. Upoštevajte, da mora biti ustrezna storitev na voljo v vaši državi.",
        'view-bots' => 'Upravljanje botov',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikacija s strankami',
        'sub-title' => 'Koliko stikov sem imel s svojimi strankami ta teden?',
        'faqs' => 'Pogosto zastavljena vprašanja',
        'tickets' => 'Vstopnice za stranke',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Stanje uporabnikov',
        'sub-title' => 'Dejavnost od :start do :end',
        'users' => [
            'title' => 'Stranke',
            'subtitle' => 'Prijava uporabnikov',
        ],
        'views' => [
            'title' => 'Obiski',
            'subtitle' => 'Kolikokrat ste že obiskali trgovino',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vrnjeni uporabniki',

        'shop_views' => 'Trgovina Pogledi',
        'baskets' => [
            'title' => 'Nakupovalni vozički',
            'subtitle' => 'Sporočite število novih nakupovalnih vozičkov',
        ],
        'products' => [
            'title' => 'Pregled izdelkov',
            'subtitle' => 'Status izdelkov v trgovini po vrstah',
            'value_name' => 'Izdelki'
        ],
        'products_count' => 'Vrste izdelkov',
        'views_count' => 'Število ogledov',
        'sell_count' => 'Število prodaj',
        'send_count' => 'Število pošiljk',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Pametna dostava',
        'sub-title' => 'Panel za glavne prodajalce Drop Shipping Selldone.',
        'total_fulfillments' => 'Skupno število prejetih naročil',
        'ds_count' => 'Prejeta naročila',
        'statistics_title' => 'Poročilo o prejetih naročilih',
        'ds_cancels' => 'Prekliči prodajalec vmesnika',
        'ds_rejects' => 'Preklic z vaše strani',
        'tip' => "Ste glavni prodajalec blaga? Ste lastnik skladišča, tovarne ali distributerja izdelkov? Svoje izdelke lahko ponudite drugim prodajalcem v storitvi Selldone Drop Shipping, da svoj izdelek prodate v velikem obsegu. Pišite nam na support@selldone.com, da vas vodimo.",
        'view-drop-shipping-panel' => 'Prijavite se v veleprodajno ploščo',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Menjalni tečaji',
        'sub-title' => 'Seznam najnovejših menjalnih tečajev valut v vaši trgovini.',
        'from' => 'Izvorna valuta',
        'to' => 'Ciljna valuta',
        'rate' => 'Stopnja konverzije',
        'view-exchange-panel' => 'Upravljajte menjalne tečaje',
    

        'vew-exchange-panel' => 'plošča za upravljanje menjalnih tečajev',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Strokovne pogodbe',
        'sub-title' => 'Kateri strokovnjaki delajo v moji trgovini?',
        'cost' => 'Znesek pogodbe',
        'duration' => 'Trajanje',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum Prekliči',
        'end_at' => 'Datum dostave',
        'tip' => 'Za razvoj vašega podjetja lahko najamete najboljše strokovnjake v Selldone.',
        'view-experts' => 'Kliknite za začetek.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Prijavite aktivne plačilne prehode v trgovini :shop.',
        'tip-title' => 'Pomembni nasveti',
        'tip' => "Pojdite na stran za upravljanje portala v svoji trgovini in v nekaj minutah dodajte vsaj ena vrata. Vaše stranke rade plačujejo hitro in varno prek spletnih portalov.",
        'view-shop-gateways' => 'Prijavite se v upravljanje portala moje trgovine.',
        'view-gateways' => 'Oglejte si več prehodov',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Naročila',
        'sub-title' => 'Seznam naročil, ki sem jih prejel ta teden.',
        'total_baskets' => 'Skupna naročila',
        'total_posBaskets' => 'Skupni gotovinski nalogi',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Naročila zaključena (ta naročila niso nujno plačana!)',
        'tip-title' => 'Moral bi se bolj potruditi ...',
        'tip' => "Ni preprostega uspeha.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Obdelovalni center',
        'sub-title' => 'Koliko naročil smo ta teden obdelali v trgovini?',
        'tip-title' => 'Niste imeli razprodaje!',
        'tip' => "Na žalost ta teden niste imeli nobene prodaje. V svojo trgovino morate prinesti več. Dodate lahko več izdelkov, izberete boljše slike ali napišete boljše opise za svoje izdelke. Razmislite o zaposlitvi za polni delovni čas za svoje podjetje. Če boste to storili pravilno in ne boste razočarani, vam bo uspelo.",
        'view-process-center' => 'Ogled procesnega centra',
        'return' => [
            'title' => 'Vrnjeno naročilo',
            'subtitle' => 'Prijavi vrnjena naročila.',
            'tip-title' => 'Ali ste vedeli, da ...',
            'tip' => "S Selldone POS lahko ustvarite poljubno število blagajn! Ne glede na to, ali gre za vaš tablični računalnik, mobilni telefon ali prenosni računalnik, lahko katero koli napravo spremenite v prodajno mesto svoje trgovine. Je preprost, hiter za nastavitev in popolnoma pripravljen za vaš strežnik. Začnite ga uporabljati še danes!",
            'view-pos' => 'Prijavite se v Blagajno moje spletne trgovine'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Seje',
        'sub-title' => 'Kolikokrat sem obiskal svojo trgovino?',
        'countries-title' => 'Katere države so bile najbolj obiskane?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ali želite zaslužiti denar, ne da bi porabili en dolar?',
        'message' => "Spoštovani :name, lahko greš na nadzorno ploščo > Demonetizacija in ustvariš napotitveno povezavo. Pošljite povezavo svojim prijateljem, prejeli boste darilne kartice Selldone in odstotek plačil vašega prijatelja. Upoštevajte, da bo darilna kartica poslana vam in vašemu prijatelju.",
        'action' => 'Oglejte si mojo uvodno povezavo',
        'mail-clip' => "<b style='color: #C2185B'>Pomembno:</b> če uporabljate e-poštne storitve, kot je Gmail, ki omejujejo dolžino e-pošte, poiščite naslednjo možnost na koncu e-pošte, da prikažete celotno poročilo, in jo kliknite:",

        'no-coin-reward' => "<b style='color: #C2185B'>Oprostite:</b> vaša dejavnost ni izpolnjevala pogojev za pridobitev brezplačne nagrade SEL Coins. Potrudite se bolj in prodajte več v svoji trgovini za naslednjo sezono.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Nagrada:</b> Čestitamo, zaradi vaše fantastične uspešnosti smo vam podelili nagrado :amount SEL Coin.",

        'need-buy-license' => "<b> Izboljšajte svoje podjetje: </b> Videti je, da še niste registrirali nobenega naročniškega načrta za svoje spletno mesto! Nadgradite zdaj, da odklenete več funkcij za samo :amount na mesec, če se plača letno.",
        'not-afford-message' => "Če si ne morete privoščiti ali imate težave s plačilom, nam to sporočite na support@selldone.com.",
        'add-domain' => "<b>Zakaj ne bi imeli domene po meri za svoje podjetje?</b><br> Dodajte domeno svojemu spletnemu mestu zdaj; brezplačno je!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone je a<del> izdelek</del> <span style = 'color: forestgreen'>skupnost</span><br> Bodite profesionalni Selldoner!",
        'message' => "Sledite uradnim stranem Selldone na Twitterju, LinkedInu in družbenih omrežjih. Pošljite nam morebitne komentarje, zahteve ali kritike ali sodelujte v razpravah o Selldone. Smo tudi del skupnosti Selldone, ki <b>jo ustvarite vi</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Prejeta nova naročila avokada|:shop_title :time',
        'title' => "Poročilo o uspešnosti za zadnjih 24 ur",
        'message' => "Vaše stranke čakajo na pregled in ceno vaših naročil. Čim prej se odzovite na zahteve svojih strank, da zagotovite večjo prodajo.",
        'card_title' => "Naročila v čakalni vrsti",
        'card_subtitle' => "Od :date",

        'card_payed' => "Plačana naročila"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Odgovorite na svojo objavo v :community_title',
        'title' => ":name in :count drugi so komentirali vaše objave.",
        'message' => "Živjo :name, tvoje objave pritegnejo pozornost! V naši skupnosti ste prejeli komentarje. Prijavite se v svoj račun, da se pridružite razpravi in ​​si ogledate, kaj vsi pravijo.",
        'title-simple' => ":name je komentiral vaše objave.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Odgovorite na svojo temo :topic_title',
        'title' => ":name in :count drugi so odgovorili na vašo temo.",
        'message' => "Živjo :name, tvoja tema pritegne pozornost! V naši skupnosti ste prejeli odgovore. Prijavite se v svoj račun, da se pridružite razpravi in ​​si ogledate, kaj vsi pravijo.",
        'title-simple' => ":name je odgovoril na vašo temo.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nova prijava :name',
        'category' => 'Varnostna obvestila',
        'title' => "Prijavite se v račun",
        'message' => "Dragi :name, prijavljeni ste v svoj račun Selldone.",   // Login in selldone (seller)
        'message-shop' => "Dragi :name, prijavljeni ste v :shop_title.",  // Login in shop (buyer)

        'footer' => "Če niste prijavljeni, prosimo spremenite geslo.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Umik",
        'deposit' => "Polog",

        'withdraw_subject' => "Dvig z računa :account",
        'deposit_subject' => "Polog na račun :account",

        'message' => "Prenos denarja je bil opravljen z naslednjimi specifikacijami.",

        'type' => "Vrsta transakcije",

        'from' => "Izvorni račun",
        'to' => "Destination account",

        'desc' => "Opis transakcije",
        'action' => "Ogled transakcije",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Pomembno! Kršitev pravil| :shop",
        'category' => "Kritične informacije",
        'title' => "Vaša trgovina je bila kaznovana",
        'action' => "Odpri nadzorno ploščo trgovine",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter te je povabil v Selldone",
        'title' => ":name vam je poslal :amount, da vam pomaga zagnati novo spletno spletno stran in jo monetizirati!",
        'message' => "Živjo **:receiver_name**, <br><br> Dobrodošli v Selldone! Na Selldone lahko enostavno ustvarite svoje spletno mesto za e-trgovino, blog, spletno skupnost in celo nastavite spletni POS sistem za osebno prodajo – vse v nekaj minutah. To je celoten operacijski sistem za spletno poslovanje, ki je zasnovan za boljše, hitrejše in lažje vodenje vašega podjetja. <br><br>Prijavite se pri <b>:date</b> in prejmite vavčer :amount za začetek!",
        'accept' => "Sprejmi povabilo",
        'owner' => "Lastnik",
        'join-date' => "Na Selldone od",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Povezava za obnovitev| :shop",
        'category' => "Varnost trgovine",
        'title' => "Povezava za obnovitev trgovine <b>:shop_name</b> .",
        'message' => "To e-poštno sporočilo ste prejeli, ker ste zahtevali obnovitev vaše trgovine. S klikom na spodnjo povezavo boste obnovili svojo trgovino in vse podatke, ki pripadajo njej.",
        'action' => "Potrdite obnovitev trgovine",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Koliko denarja je Selldone prihranil vašemu podjetju?',
        'sub-title' => 'Od datuma :start do :end',
        'infrastructure' => [
            'title' => 'Infrastruktura',
            'subtitle' => 'Strežniki, CDN, Storage in druge storitve v oblaku',
        ],
        'experts' => [
            'title' => 'Strokovnjaki in osebje',
            'subtitle' => 'Razvijalci, vzdrževanje in podpora',
        ],
        'total_save' => 'Skupaj prihranjen denar'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Vaš nastop',
        'sub-title' => 'Pregled poslovanja od :start do :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vrnjeni uporabniki',

        'shop_views' => 'Trgovina Pogledi',
        'baskets' => [
            'title' => 'Nakupovalni vozički',
            'subtitle' => 'Sporočite število novih nakupovalnih vozičkov',

        ],
        'products' => [
            'title' => 'Pregled izdelkov',
            'subtitle' => 'Status izdelkov v trgovini po vrstah',
            'value_name' => 'Izdelki'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Skupno število ogledov strani spletnega mesta',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Prejeli ste novo naročilo. Pojdite na stran za obdelavo naročila na plošči prodajalca.",
        'subject' => "🛍️ Novo naročilo prejeto| :order_id",
        'your_revenue' => "Vaši prihodki",
    ],
    'vendor-invite' => [
        'title' => 'Vabilo prodajalca',
        'message' => "Prejeli ste povabilo, da postanete prodajalec :shop_name. Lahko ga sprejmete ali zavrnete s klikom na naslednje gumbe.",
        'subject' => ":shop_name |Vabilo, da postanete naš prodajalec",
        'accept' => "Sprejmite in postanite prodajalec",
        'reject' => "Zavrni",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Vabilo, da se pridružite naši ekipi',
        'message' => "Povabljeni ste bili, da se pridružite :vendor_name na :shop_name. To povabilo lahko sprejmete ali zavrnete s spodnjimi gumbi.",
        'subject' => "Vabilo za pridružitev :vendor_name|Postanite član ekipe",
        'accept' => "Sprejmi in se pridruži ekipi",
        'reject' => "Zavrni",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Vaša prijavna koda za :shop",
        'header-message' => "To e-pošto vam pošiljamo, ker ste zahtevali kodo za prijavo v trgovino. Spodaj najdete svoje enkratno geslo (OTP):",
        'footer-message' => "Ta koda bo veljavna 10 minut. Če niste zahtevali te kode za prijavo, prezrite to e-pošto."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Potrdite svoj e-poštni naslov| :shop",
        'title' => 'Preverjanje e-pošte',
        'header-message' => "Živjo :name,<br> Prosimo potrdite, da je **:email** vaš e-poštni naslov s klikom na gumb ali uporabite spodnjo povezavo v 48 urah.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Posodobitve izdelkov| :shop",
        'title' => "Posodobitev stanja izdelka - zadnjih 24 ur",
        'message' => "Upam, da vas je to sporočilo dobro našlo. To je kratka posodobitev, ki vas obvešča o statusu vaših izdelkov na naši platformi v zadnjih 24 urah.\nV tem obdobju je prišlo do sprememb statusa nekaterih izdelkov. Te spremembe so lahko posledica nakupov, posodobitev delnic ali drugih povezanih dogodkov.\nZa podrobnejše informacije o posameznem izdelku se prijavite v svoj račun in preverite razdelek »Status izdelka«.",
        'action' => "Odprite ploščo dobavitelja",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Prejeta množična naročila| :shop | :date",
        'title' => "Obvestilo o množičnih naročilih",
        'message' => "Prejeli ste serijo množičnih naročil. Za nadaljnje podrobnosti obiščite stran za obdelavo naročila v vaši plošči. Seznam naročil lahko prenesete tudi prek navedene varne povezave, ki velja 7 dni.<br><br>\n        <b>POMEMBNO:</b> Ta povezava velja 7 dni.<br>\n        Ta povezava je dinamična, zato vsakič, ko jo kliknete, prejmete najbolj posodobljena naročila za ta določen datum. <b>To pomeni, da če se status plačila naročila spremeni v zavrnjeno, tega naročila ne boste več videli v prenesenem CSV-ju ali če je naročilo plačano, se bo pojavilo na seznamu.</b><br><br>\n        <ul>\n            <li>CSV vsebuje plačana naročila z rezerviranim datumom v :date.</li>\n            <li>Rezervirani datum je datum, ko uporabnik klikne na blagajno na strani za naročilo.</li>\n        </ul>\n        <b> Da preprečite podvojena naročila, pred pošiljanjem vedno preverite naročilo ID.</b>",
        'action' => "Prenesite seznam naročil",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Nekateri izdelki v vašem naročilu niso bili sprejeti in jih ni mogoče dostaviti. Znesek za te predmete bo kmalu povrnjen na vašo kartico."
    ]

];
