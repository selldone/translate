<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ova poruka pozdravlja novog kupca u trgovini.',
        ShopMailTemplateCodes::OrderCheckout => 'Ova se obavijest šalje kada kupac potvrdi narudžbu.',
        ShopMailTemplateCodes::OrderPayment => 'Ova obavijest potvrđuje uspješno plaćanje kupca.',
        ShopMailTemplateCodes::OrderUpdate => 'Ova se poruka šalje kako bi se kupac obavijestio o statusu njegove narudžbe.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ova se poruka šalje prodavatelju kako bi ga se obavijestilo o potvrđenoj narudžbi.',
        ShopMailTemplateCodes::PosCheckout => 'Ova se obavijest šalje za potvrdu narudžbe na prodajnom mjestu za kupca.',
        ShopMailTemplateCodes::PosPayment => 'Ova obavijest potvrđuje plaćanje na prodajnom mjestu od strane kupca.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ova poruka obavještava prodavatelja o kupnji obavljenoj na njegovom prodajnom mjestu.',
        ShopMailTemplateCodes::ShopContact => 'Ova se obavijest šalje kada se pošalje obrazac za kontakt.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ova obavijest obavještava korisnika da je primio darovnu karticu.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ova poruka pozdravlja novog dobavljača u trgovini.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ova se poruka šalje kako bi se dobavljaču pozvalo da se pridruži vašem tržištu.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ova se poruka šalje dobavljaču kada je narudžba primljena u statusu Plaćeno ili Gotovina pri isporuci (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Šalje se svakodnevno radi ažuriranja dobavljača o statusu njihovih proizvoda.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ova se poruka šalje kao poziv dobavljaču da se pridruži vašem tržištu.",

        ShopMailTemplateCodes::UserLogin => "Obavijestite korisnika s detaljima za prijavu, uključujući IP adresu, datum i uređaj, iz sigurnosnih razloga.",
        ShopMailTemplateCodes::LoginCode => "Pošaljite jednokratnu lozinku za korisnike da se prijave u trgovinu.",

        ShopMailTemplateCodes::EmailVerifyLink => "Pošaljite poveznicu za potvrdu adrese e-pošte korisnika. Ova e-pošta se šalje kada se korisnik registrira putem SMS i unese svoju e-poštu. Ne šalje se kada se korisnik registrira izravno putem društvene mreže ili e-pošte.",

        ShopMailTemplateCodes::EmailBulkOrder => "Skupno slanje popisa primljenih i plaćenih narudžbi za određeni dan."


    ,

    ],


    'global' => [
        'greetings' => 'Bok :name',
        'end-statement' => 'Tim podrške',

        'receiver_name' => 'Pozdrav :user_name',
        'footer-help' => "Trebate pomoć? Pitajte na [support@selldone.com](mailto:support@selldone.com) ili posjetite naš [centar za pomoć](https://selldone.com/community).",
        'selldone-team' => 'Tim Selldone',
        'footer-shop' => "Ako trebate pomoć oko bilo čega, nemojte se ustručavati poslati nam e-poštu: :shop_mail",
        'accept' => "Prihvatiti",
        'reject' => "Odbiti",
        'verify' => "potvrditi",
        'title' => "Titula",
        'value' => "Vrijednost",
        'description' => "Opis",
        'shop' => "Dućan",
        'shop-info' => "Informacije o trgovini",
        'user' => "Korisnik",
        'user-info' => "Podaci o računu",
        'license' => "Licenca",
        'status' => "Status",
        'start' => "Početak",
        'end' => "Kraj",
        'renewal' => "Obnova",
        'view' => "Pogled",

        'balance' => "Ravnoteža",
        'card_number' => "Broj kartice",
        'cvv' => "Cvv",
        'expire_date' => "Rok trajanja",

        'Dashboard' => "Nadzorna ploča",
        'order' => "redoslijed",
        'view_order' => "Pogledajte narudžbu",
        'pay_now' => "Pay now",

        'official_selldone' => "SLUŽBENO PRODANO",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valuta",
        'free-balance' => "Slobodno stanje",
        'locked-balance' => "Zaključana ravnoteža",
        'bot' => "bot",
        'requests' => "Zahtjevi",
        'baskets' => 'Kolica',
        'physical' => "Fizički",
        'virtual' => "Virtualan",
        'file' => "Datoteka",
        'service' => "Servis",
        'fulfillment' => "Ispunjenje",
        'open' => "Otvoren",
        'reserved' => "Rezervirano",
        'canceled' => "Otkazano",
        'payed' => "Plaćeno",
        'cod' => "COD",
        'orders-count' => 'Narudžbe',
        'payments-count' => 'plaćanja',
        'confirms-count' => 'Potvrđuje',
        'sends-count' => 'Šalje',
        'delivers-count' => 'Isporučuje',
        'count' => 'Računati',
        'transactions-count' => 'Transakcije se broje',
        'success-transactions' => 'Uspješne transakcije',
        'total-amount' => 'Ukupni iznos',
        'amount' => 'Iznos',
        'wage' => 'Plaća',
        'debug' => 'Otklanjanje pogrešaka',
        'pos' => 'POS',
        'live' => 'Uživo',
        'CheckQueue' => 'Provjerite red čekanja',
        'OrderConfirm' => 'Potvrda narudžbe',
        'PreparingOrder' => 'Priprema narudžbe',
        'SentOrder' => 'Poslana narudžba',
        'ToCustomer' => 'Isporučeno kupcu',
        'Pending' => 'U tijeku',
        'Accepted' => 'Prihvaćeno',
        'Rejected' => 'Odbijeno',
        'pc' => 'PC',
        'tablet' => 'Tableta',
        'phone' => 'Telefon',
        'total' => 'Ukupno',
        'view-detail' => 'Vidi detalje',
        'empty' => 'Prazan',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Odgovor',
        'reactions' => 'Reakcije',
        'Comments' => 'Komentari',
        'last-comment' => 'Zadnji komentar',
        'response-to' => 'Odgovor na',
        'posts' => 'Objave',
        'post' => 'Post',

        'name' => 'Ime',
        'email' => 'E-mail',
        'type' => 'tip',
        'device' => 'Uređaj',
        'platform' => 'Platforma',
        'browser' => 'Preglednik',
        'time' => 'Vrijeme',
        'Wallet' => 'Novčanik',
        'date' => 'Datum',

        'account' => 'Račun',
        'transaction' => 'Transakcija',
        'fee' => 'Pristojba',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Račun',
        'category' => 'Kategorija',
        'password' => 'Lozinka',
        'verify-login' => "Potvrdi i prijavi se",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hiper',
        'buy-now' => "Kupi sada",
        'add-domain' => "Add Domain",
        'views' => 'Pogledi',


        'country' => 'Zemlja',
        'address' => 'adresa',
        'postal' => 'Poštanski broj',
        'building_no' => 'Zgrada br.',
        'building_unit' => 'Jedinica #',
        'message' => 'Poruka',


        'customer' => 'kupac',
        'cart-items' => 'Stavke u košarici',
        'payment' => 'Plaćanje',
        'receiver' => 'Prijamnik',
        'virtual-items' => 'Virtualni predmeti',
        'no-payment' => 'Nema plaćanja!',

        'enable' => 'Omogućiti',
        'access' => 'Pristup',
        'bank' => 'Podaci o banci',

        'vendor' => 'Dobavljač',

        'view_content' => "Pogledajte cijeli sadržaj",
        'files' => 'Datoteke',
        'download' => 'preuzimanje datoteka',
        'file_name' => 'Naziv datoteke',
        'file_size' => 'Veličina',

        'subscription' => 'Pretplata',
        'products' => 'Proizvodi',
        'vendor_products' => 'Proizvodi dobavljača',

        'pickup' => 'Preuzimanje',

        'minutes' => 'minuta',
        'hours' => 'sati',

        'refund' => 'Povrat novca',
        'recipient_address' => 'Adresa primatelja',
        'signature' => 'Potpis',
        'blockchain' => 'Blockchain',
        'details' => 'pojedinosti',


    

        'Shop' => 'Dućan',
        'dashboard' => 'nadzorna ploča',
        'comments' => 'komentari',
        'wallet' => 'novčanik',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Izvješće o izvedbi, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Sezonsko izvješće, Selldone'
        ],
        'Onboarding' => [
            'id' => 'bok',
            'name' => 'Odobri, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Podrška :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'bok',
            'name' => 'Zajednica, Selldone'
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
            'name' => 'Upravljanje narudžbama :name'
        ],

        'Recovery' => [
            'id' => 'oporavak',
            'name' => 'Selldone tim za oporavak'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Na čekanju ⌛',
        'PAYED' => 'Plaćeno ✅',
        'CANCELED' => 'Otkazano ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Službenik i nadzornik',
            'AUDITING' => 'Voditelj revizije',
            'EMPLOYEE' => 'Zaposlenik',
            'PRODUCT' => 'Voditelj proizvoda',
            'CONTENT' => 'Upravitelj sadrzaja',
            'MARKETING' => 'Voditelj marketinga',
            'VIEWER' => 'Gledatelj',

        ],
        'subject' => ":inviter vas je pozvao kao :level| :shop",
        'category' => "Poziv za osoblje",
        'title' => "Pozvani ste u <b>:shop_name</b> kao <b>:level</b> .",
        'message' => "Dobili ste poziv za poslovnu suradnju s <b>:shop_title</b> timom. Imate mogućnost prihvatiti ili odbiti ovu ponudu. Ako odlučite prihvatiti, prijavite se na uslugu Selldone kako biste potvrdili svoju odluku. Nakon potvrde, dobit ćete pristup odjeljku za upravljanje trgovinom.",

    ],

    'welcome-email' => [
        'subject' => "👋 Dobro došli :name, počnimo s Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Dobrodošli u Selldone",
        'message' => "Hvala što ste odabrali Selldone! Sada ste dio živahne zajednice koja povezuje globalne prodavače s kupcima, lokalne tvrtke s poduzećima i pojedince s korporacijama. Svi naši Master i Pro alati dostupni su vam **besplatno** i **neograničeno**. Ovdje smo da vas podržimo i otvorimo vrata vašem uspjehu.",

        'index' => "Korak :step.",

        'step-domain' => [
            'title' => 'Dodajte svoju prilagođenu domenu',
            'message' => "Za početak besplatno dodajte svoju prilagođenu domenu na Nadzornoj ploči trgovine pod Postavke > Postavke domena.",
            'action' => 'Upravljanje mojim domenama',
        ],
        'step-landing' => [
            'title' => 'Prilagodite svoju početnu stranicu',
            'message' => "Prilagodite svoju početnu stranicu tako da odete na Nadzorna ploča > Stranice. Odaberite odredišnu stranicu ili izradite novu. Jednostavan je i intuitivan i možete odmah početi raditi na njemu.",
            'action' => 'Prilagodite moju odredišnu stranicu',
        ],
        'step-payment' => [
            'title' => 'Postavite metode plaćanja',
            'message' => "Počnite prihvaćati uplate izravno na svoj bankovni račun. Da biste povezali svoje pružatelje usluga plaćanja kao što su Stripe, PayPal i drugi, idite na Nadzorna ploča > Računovodstvo > Pristupnik.",
            'action' => 'Dodajte načine plaćanja',
        ],
        'step-products' => [
            'title' => 'Dodajte svoje proizvode',
            'message' => "Jednostavno dodajte proizvode i kategorije u Nadzorna ploča > Proizvodi. To je kao upravljanje datotekama i mapama na računalu – potpuno spremno za povuci i ispusti. Također možete skupno uvesti proizvode pomoću programa Excel. Dostupan je ogledni predložak koji će vam pomoći da započnete.",
            'action' => 'Upravljanje mojim proizvodima',
        ],
        'step-shipping' => [
            'title' => 'Postavite metode dostave',
            'message' => "Da biste kupcima naplatili dostavu, definirajte načine dostave na Nadzornoj ploči > Logistika > Dostava. Možete postaviti različite cijene i podršku za različite lokacije. Ne zaboravite postaviti podrijetlo svog skladišta u Nadzorna ploča > Logistika > Skladište.",
            'action' => 'Upravljajte načinima dostave',
        ],
    

        'seller' => [
            'title' => 'Jeste li prodavač?',
            'message' => 'Da biste započeli s prodajom, unesite svoju kontrolnu ploču u Selldone putem donje veze i kreirajte svoju prvu trgovinu potpuno besplatno. To će trajati nekoliko minuta i imat ćete vlastitu trgovinu i internetsku stranicu. Zatim ćemo vas voditi do sljedećih koraka i dobiti pristupnik za plaćanje.',
            'action' => 'Prijavite se na moju nadzornu ploču',
        ],
        'buyer' => [
            'title' => 'Ja sam kupac',
            'message' => 'Čestitamo. Jednom kada postanete član Selldonea, riješit ćete se svih gnjavaža vezanih uz članstvo i provjeru autentičnosti u internetskim trgovinama. Kako biste imali koristi od bilo koje trgovine i stranice koja koristi platformu Selldone, možete se prijaviti jednim klikom i kupnju učiniti jednostavnom, brzom i sigurnom.',
        ],
    ],


    'charge-account' => [
        'category' => 'Novčanik > Račun > Naplata',
        'title' => "Naknada za uspjeh",
        'message' => "Vaš račun <b>:account_number</b> je uspješno terećen <b>:amount</b>.",
        'account' => 'Račun',
        'charge' => 'Naplatiti',
        'balance' => 'Ravnoteža',
        'footer' => "Učinite poslovanje lakim, ostvarivim i dostupnim svima u cijelom svijetu."
    ],

    'verify-email' => [
        'subject' => "🙌 Dovršite prijavu na Selldone! Potvrdi vezu.",
        'category' => "NA KORAK STE",
        'title' => "Potvrdite svoju email adresu",
        'message' => "Bok :name, <br><br>Hvala vam što ste odabrali Selldone!<br><br>Da biste potvrdili da je <b>:email</b> vaša ispravna adresa e-pošte, kliknite na gumb ispod ili upotrijebite priloženu vezu. Imate 48 sati da dovršite ovu provjeru.",
        'footer' => "Ako imate problema s klikom na gumb Potvrdi, kopirajte i zalijepite donji URL u svoj web preglednik: :activation_url",
        'next-step' => "Zatim ćemo vam poslati neke korisne materijale i vodič korak po korak kako bismo vam olakšali dodavanje prilagođene domene, postavljanje plaćanja, dodavanje proizvoda i dobivanje vaše prve narudžbe.",

    ],
    'verify-email-code' => [
        'subject' => "Kontrolni kod za :name",
        'category' => "SECURITY",
        'title' => "Kod za provjeru e-pošte",
        'message' => "Pozdrav :name, <br><br> Kako biste potvrdili da je <b>:email</b> vaša ispravna adresa e-pošte, unesite sljedeći kod u roku od sljedećih <b>10 minuta</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Vaša trgovina je spremna| :name",
        'category' => "NA KORAK STE",
        'title' => "Postavljanje dovršeno",
        'account_title' => "Vaš korisnički račun",
        'account_msg' => "Potvrdite i prijavite se na svoj račun s ovim podacima.",
        'shop_msg' => "Informacije o računu na poslovnom operativnom sustavu Selldone.",

    ],

    'reset2fa' => [
        'category' => "SLUŽBENA SIGURNOSNA PORUKA",
        'title' => "Zahtjev za onemogućavanje prijave u 2 koraka",
        'message' => "Primili ste ovu e-poruku jer smo primili zahtjev za poništavanje dvofaktorske autentifikacije za **:name** račun s **:email** e-poštom. <br><br>Pronašli smo sljedeće podatke za vaš račun:",
        'footer' => "Ako niste zatražili poništavanje lozinke, nisu potrebne daljnje radnje.",
        'action' => 'Onemogući prijavu u dva koraka',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Vaša trgovina je sada spremna!",
        'category' => "ROĐENA NOVA ONLINE TRGOVINA U SVIJETU",
        'title' => "Čestitamo, :name!",
        'message' => "<b> Čestitamo, :name! Vaš novi online posao sada je aktivan!</b> Uzbuđeni smo što vam možemo poželjeti dobrodošlicu u zajednicu Selldoners. Poduzeli ste prvi korak prema uspjehu, a mi smo tu da vam pomognemo na svakom koraku na tom putu. <br>Sada kada je vaša trgovina spremna, provjerimo jeste li spremni primati uplate izravno od svojih kupaca i počnimo razvijati svoje carstvo. Ako vam ikada zatreba pomoć, udaljeni smo samo jednu poruku—naš tim za podršku uvijek je tu za vas.<br><br><b>Važni sljedeći koraci:</b> Za početak, provjerite jeste li spremni za primanje uplata i nesmetan rad. Vodit ćemo vas kroz svaku fazu kako bi vaša trgovina radila besprijekorno.",
        'pdf-book' => "Ne propustite priloženu knjigu priručnika: Posao kao igra",

        'account' => [
            'title' => 'Korak 1: Kreirajte račun u novčaniku Selldone',
            'message' => "Za početak kreirajte račun u svom Selldone novčaniku. Ovdje će vam se odbijati naknada, a tu ćete također nadopuniti kako bi vaša trgovina nesmetano radila. Ako vam saldo ikada postane negativan, ne brinite! Vaša trgovina će nastaviti s radom bez prekida.",
            'action' => 'Prijavite se u novčanik',
        ],

        'shop-account' => [
            'title' => 'Korak 2: povežite račun s trgovinom',
            'message' => "Zatim povežite svoj račun novčanika sa svojom trgovinom. Idite na <b>Store > Računovodstvo > Faktura</b> i povežite svoj novčanik. Ovo osigurava da se sve uplate kupaca polažu izravno na vaš bankovni račun—Selldone ne oduzima nikakve iznose od vaše zarade.",
            'action' => 'Panel za račune trgovine',
        ],

        'gateway' => [
            'title' => 'Korak 3: Povežite mrežni pristupnik plaćanja',
            'message' => "Postavimo sada vaš mrežni pristupnik za plaćanje. Idite na <b>Store > Računovodstvo > Port</b> i kliknite na <b>Dodaj novi port</b>. Odaberite svoju valutu i vidjet ćete popis dostupnih pristupnika plaćanja. Povezivanje gatewaya je brzo i jednostavno, ali ako trebate bilo kakvu pomoć, slobodno provjerite Selldone vodiče ili nam se obratite.",
            'action' => 'Dodajte portal trgovini',
        ],

        'domain' => [
            'title' => 'Zadnji korak: povezivanje namjenske domene',
            'message' => "Moći ćete imati svoju trgovinu na onoliko domena koliko želite. Za povezivanje namjenske domene s trgovinom morate imati barem licencu za pokretanje. Predstavljanjem svakog prijatelja Selldoneu, dobit ćete jednomjesečnu darovnu karticu za startup licencu. Postotak uplata vaših prijatelja također će biti pripisan na račune vaših kupaca.",
            'action' => 'Predstavljamo i primamo neograničene poklon kartice',
        ],
    ],


    'basket-list' => [
        'item' => "artikal",
        'count' => "Računati",
        'price' => "cijena",
        'discount-code' => "Kod za popust",
        'customer-club' => 'Klub kupaca',
        'shipping' => "dostava",
        'total' => "Ukupno",
        'offer' => "Ponuda",
        'coupon' => "Kupon",
        'lottery' => "Dodijeliti",
        'tax' => "Porez",
        'tax_included' => "Uključeno u cijenu",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'metoda',
        'amount' => 'Iznos',
        'giftcard' => 'Gift card',
        'payment' => 'Plaćanje',
    ],


    'shop-subscription-email' => [
        'category' => "Ažuriranje pretplate",
        'title' => "Licenca trgovine: :shop_title",
        'title-reserved' => "Rezervna licenca: :shop_title",
        'title-active' => "Aktivna licenca: :shop_title",
        'title-finished' => "Završena licenca: :shop_title",
        'title-cancel' => "Otkaži licencu: :shop_title",
        'message' => "Vaš licencni plan trgovine ažuriran,",
        'RESERVED' => "⚡ Vaša pretplata je **rezervirana**.",
        'ACTIVE' => "🟢 Vaš plan pretplate je **aktiviran**.",
        'FINISHED' => "🚧 Vaš plan pretplate je **završen**.",
        'CANCEL' => "⛔ Vaš plan pretplate je **otkazan**.",
    ],

    'support' => [
        'subject' => "Centar za podršku | :name odgovorio",
        'category' => "Centar za podršku",
        'title' => "Dobili ste odgovor",
        'action' => "Otvorite administratora trgovine",
    ],

    'shop-customer-join' => [
        'subject' => "Pridružite se :shop_title",
        'category' => "Proslava novih kupaca",
        'title' => "Sretni smo zbog vašeg članstva",
        'action' => "Posjetite odmah",
    ],

    'shop-vendor-join' => [
        'subject' => "Uključivanje dobavljača| :shop_title",
        'category' => "Proslava novog dobavljača",
        'title' => "Sretni smo zbog vašeg članstva",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Poklon kartica :shop_title",
        'category' => "Dodaj novu karticu",
        'title' => "Čestitamo, dobili ste poklon karticu",
        'action' => "Kupite sada",
        'message' => "Dobili ste poklon karticu u iznosu od :balance :currency. S ovom darovnom karticom moći ćete kupovati u našoj trgovini.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centar za podršku| :shop",
        'category' => "podrška",
        'title' => "Dobili ste odgovor",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Potvrda narudžbe|Naručite :order_id",
        'title' => "redoslijed",
        'message' => "Naručili ste u našoj trgovini. Primili smo vašu narudžbu i poslat ćemo vam još jedan e-mail nakon potvrde plaćanja."
    ,

        'payments' => 'plaćanja',
    ],

    'order-payment' => [
        'subject' => "🛍️ Potvrda plaćanja|Naručite :order_id",
        'title' => "Nalog za plaćanje",
        'message' => "Vaše plaćanje izvršeno,<br> Imamo vašu narudžbu. Poslat ćemo vam još jednu e-poruku kada vaša narudžba bude otpremljena.",
    

        'payments' => 'plaćanja',
    ],

    'order-update' => [
        'subject' => "🛍️ Ažuriranje statusa narudžbe|Naručite :order_id",
        'title' => "Ažuriranje statusa narudžbe",
        'message' => "Vaša narudžba je ažurirana. Najnoviji status ove narudžbe možete provjeriti na svom računu.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Vaša je narudžba u redu za obradu. Obavijestit ćemo vas kada bude u pripremi.",
                'OrderConfirm' => "Vaša narudžba je potvrđena i priprema je započela.",
                'PreparingOrder' => "Vaša se narudžba priprema i uskoro će biti otpremljena.",
                'SentOrder' => "Vaša narudžba je poslana. Primit ćete ga uskoro.",
                'ToCustomer' => "Vaša narudžba je isporučena. Nadamo se da ćete uživati!",

                'PreparingOrder-PICKUP' => "Vaša narudžba je u pripremi. Primit ćete obavijest kada bude spremno za preuzimanje.",
                'SentOrder-PICKUP' => "Vaša je narudžba spremna za preuzimanje. Molimo vas da ga preuzmete u trgovinu.",
                'ToCustomer-PICKUP' => "Vaša narudžba je preuzeta. Nadamo se da ćete uživati!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Vaša je narudžba u redu za obradu. Obavijestit ćemo vas kada bude spremno.",
                'OrderConfirm' => "Vaša narudžba je potvrđena i priprema je u tijeku.",
                'PreparingOrder' => "Vaša narudžba je u pripremi i uskoro će vam biti poslana.",
                'ToCustomer' => "Vaša virtualna narudžba je isporučena na vaš račun. Hvala!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Vaš zahtjev za uslugu je u redu. Obavijestit ćemo vas kada počnemo.",
                'OrderConfirm' => "Vaša usluga je potvrđena i mi se pripremamo za početak.",
                'PreparingOrder' => "Pripremamo vašu uslugu i obavijestit ćemo vas kada bude gotova.",
                'ToCustomer' => "Vaša usluga je završena. Hvala što ste nas odabrali!"
            ],
            'FILE' => [
                'PreparingOrder' => "Vaša je datoteka u pripremi i uskoro će biti dostupna.",
                'ToCustomer' => "Vaša je datoteka spremna i isporučena. Sada ga možete preuzeti."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Vaša narudžba pretplate je u redu čekanja. Obavijestit ćemo vas kada obrada počne.",
                'OrderConfirm' => "Vaša pretplata je potvrđena i postavlja se.",
                'PreparingOrder' => "Pripremamo vašu pretplatu i uskoro će početi.",
                'SentOrder' => "Vaša pretplata je aktivirana. Primat ćete stalna ažuriranja.",
                'ToCustomer' => "Vaša pretplatnička usluga je uspješno aktivirana."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Čestitke :name | Novi vaučer: :title',
        'category' => "ČESTITAMO, NOVI BON",
        'message' => "Hej :name,<br><br> Dobili ste novi vaučer na poklon od nas! Možete zaraditi još više vaučera tako što ćete Selldone predstaviti svojim prijateljima i svima koje poznajete. Ovaj vaučer vrijedi **:price :currency**.<br><br>Poduzeli ste prvi korak, a mi smo tu da vam pomognemo otključati nove značajke sa svojim vaučerom! Prijavite se s **:email** i pronađite svoj vaučer u trgovini **Nadzorna ploča** > **Postavke** > **Licenca**.<br><br>Čestitamo!",
        'action' => "Moja Nadzorna ploča",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Čestitamo, draga :name | Dobili ste dar',
        'category' => "Najava primanja poklona",
        'title' => "Pokloni za vas",
        'message' => "Bok :name, s uzbuđenjem te obavještavamo da si dobio poseban dar od Selldone! 🎉 Možete zaraditi više darova ako ostanete aktivni, razvijate svoju trgovinu i poboljšavate svoju stručnost na Selldone. Da provjerite svoj dar, jednostavno se prijavite s :email i potražite ga u gornjem desnom kutu nadzorne ploče. <br><br>Ovaj dar vrijedi **:price :currency** i možete ga jednostavno položiti u svoj novčanik unutar Selldone.<br><br>Upotrijebite svoj dar za nadogradnju licencu svoje trgovine i otključajte još moćnije alate za poticanje vašeg online poslovanja!",
        'action' => "Pokloni",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nova narudžba primljena| :order_id",
        'title' => "New Order",
        'message' => "Dobili ste novu narudžbu. Idite na stranicu za obradu narudžbi u svojoj trgovini.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Vaše ispunjene informacije',
        'output-form-title' => 'Informacije o kupljenom artiklu',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Tjedno izvješće :time',
        'title' => 'Tjedno izvješće o uspješnosti trgovine',
        'message' => "Ovo je tjedno izvješće vaše trgovine od <b>:start</b> do <b>:end</b>. Ovo izvješće uključuje savjete za poboljšanje vašeg poslovanja, također možete provjeriti status vaše online trgovine i nedavne narudžbe. Nadam se da je pred vama dobar dan i tjedan."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Vaše :amount izvješće o uštedi u zadnja tri mjeseca| :shop_title',
        'title' => 'Sezonsko izvješće o vašem poslovanju, nagradama i financijskim uštedama',
        'message' => "Ovo je vaše <b>:shop_title</b> sezonsko izvješće od <b>:start</b> do <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Povezani računi',
        'sub-title' => 'Koji je najnoviji status novčanika povezanih s mojom trgovinom?',
        'view-wallet' => 'Pogledaj novčanik',
        'tip-title' => 'Važni savjeti',
        'tip' => "Postavite besplatni Selldone novčanik i povežite ga sa svojom trgovinom. Čak i ako je vaš saldo negativan, vaši kupci i dalje mogu kupovati i plaćati bez ikakvih problema. Ne brinite, rad i podaci vaše trgovine nastavit će se glatko do 1 mjeseca, bez ikakvih prekida.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Povežite se s računom'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Instalirane aplikacije',
        'sub-title' => 'Popis aplikacija koje ste ovaj tjedan instalirali u svojoj trgovini.',
        'tip' => "Želite li pronaći više aplikacija za svoju trgovinu?",
        'view-app-store' => 'Posjetite Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Vaši roboti za trgovinu',
        'sub-title' => 'Aktivni prodajni botovi u mojoj trgovini.',
        'tip-title' => 'Prodaja botova',
        'tip' => "Selldone vam je omogućio automatske prodajne botove. Sve što trebate učiniti je otići na ploču Dodaci> Botovi i aktivirati svoje robote trgovine. Imajte na umu da odgovarajuća usluga mora biti dostupna u vašoj zemlji.",
        'view-bots' => 'Upravljanje botovima',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikacija s kupcima',
        'sub-title' => 'Koliko sam kontakata imao sa svojim klijentima ovaj tjedan?',
        'faqs' => 'Često postavljana pitanja',
        'tickets' => 'Ulaznice za kupce',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status korisnika',
        'sub-title' => 'Aktivnost od :start do :end',
        'users' => [
            'title' => 'Kupci',
            'subtitle' => 'Korisnici prijave',
        ],
        'views' => [
            'title' => 'Posjeti',
            'subtitle' => 'Koliko ste puta posjetili trgovinu',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vraćeni korisnici',

        'shop_views' => 'Pregledi trgovine',
        'baskets' => [
            'title' => 'Kolica za kupnju',
            'subtitle' => 'Prijavite broj novih košarica',
        ],
        'products' => [
            'title' => 'Pregled proizvoda',
            'subtitle' => 'Status proizvoda u trgovini prema vrsti',
            'value_name' => 'Proizvodi'
        ],
        'products_count' => 'Vrste proizvoda',
        'views_count' => 'Brojac pregleda',
        'sell_count' => 'Broj prodaje',
        'send_count' => 'Broj pošiljaka',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Ploča za glavne prodavače Drop Shipping Selldone.',
        'total_fulfillments' => 'Ukupni broj primljenih narudžbi',
        'ds_count' => 'Primljene narudžbe',
        'statistics_title' => 'Prijavi primljene narudžbe',
        'ds_cancels' => 'Otkaži prodavač sučelja',
        'ds_rejects' => 'Otkažite vi',
        'tip' => "Jeste li veliki prodavač robe? Posjedujete li skladište, tvornicu ili distributera proizvoda? Možete ponuditi svoje proizvode drugim prodavačima u usluzi Selldone Drop Shipping kako biste prodali svoj proizvod u velikoj mjeri. Pošaljite nam e-poruku na support@selldone.com kako bismo vas uputili.",
        'view-drop-shipping-panel' => 'Prijavite se na panel veleprodaje',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Tečajevi',
        'sub-title' => 'Popis najnovijih tečajeva konverzije valuta u vašoj trgovini.',
        'from' => 'Izvorna valuta',
        'to' => 'Odredišna valuta',
        'rate' => 'Stopa pretvorbe',
        'view-exchange-panel' => 'Upravljajte deviznim tečajevima',
    

        'vew-exchange-panel' => 'ploča za upravljanje tečajem',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Stručni ugovori',
        'sub-title' => 'Koji profesionalci rade u mojoj trgovini?',
        'cost' => 'Iznos ugovora',
        'duration' => 'Trajanje',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum Odustani',
        'end_at' => 'Datum dostave',
        'tip' => 'Angažirajte vrhunske stručnjake iz Selldone da vam pomognu u razvoju poslovanja.',
        'view-experts' => 'Kliknite za početak.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Prijavite aktivne pristupnike plaćanja na shop :shop.',
        'tip-title' => 'Važni savjeti',
        'tip' => "Idite na stranicu za upravljanje portalom u svojoj trgovini i dodajte barem jedan priključak u nekoliko minuta. Vaši kupci vole plaćati brzo i sigurno putem online portala.",
        'view-shop-gateways' => 'Prijavite se na upravljanje portalom moje trgovine.',
        'view-gateways' => 'Pogledajte više pristupnika',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Narudžbe',
        'sub-title' => 'Popis narudžbi koje sam primio ovaj tjedan.',
        'total_baskets' => 'Ukupno narudžbi',
        'total_posBaskets' => 'Ukupni gotovinski nalozi',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Narudžbe su izvršene (ove narudžbe nisu nužno plaćene!)',
        'tip-title' => 'Trebao bi se više potruditi...',
        'tip' => "Nema jednostavnog uspjeha.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centar za obradu',
        'sub-title' => 'Koliko smo narudžbi ovaj tjedan obradili u trgovini?',
        'tip-title' => 'Niste imali rasprodaju!',
        'tip' => "Nažalost, ovaj tjedan niste imali rasprodaje. Morate donijeti više u svoju trgovinu. Možete dodati više proizvoda, odabrati bolje slike ili napisati bolje opise za svoje proizvode. Razmislite o poslu s punim radnim vremenom za svoju tvrtku. Ako to učinite kako treba i ne budete frustrirani, uspjet ćete.",
        'view-process-center' => 'Pregledajte procesni centar',
        'return' => [
            'title' => 'Vraćena narudžba',
            'subtitle' => 'Prijavite vraćene narudžbe.',
            'tip-title' => 'Jeste li znali da ...',
            'tip' => "Uz Selldone POS možete kreirati onoliko blagajni koliko vam je potrebno! Bilo da se radi o vašem tabletu, mobilnom telefonu ili prijenosnom računalu, bilo koji uređaj možete pretvoriti u prodajno mjesto svoje trgovine. Jednostavan je, brz za postavljanje i potpuno spreman za vaš poslužitelj. Počnite ga koristiti danas!",
            'view-pos' => 'Prijavite se na blagajnu moje internetske trgovine'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'sjednice',
        'sub-title' => 'Koliko sam puta posjetio svoju trgovinu?',
        'countries-title' => 'Koje su zemlje bile najposjećenije?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Želite li zaraditi bez da potrošite i jedan dolar?',
        'message' => "Poštovani :name, možete otići na Nadzorna ploča > Demonetizacija i stvoriti vezu za preporuku. Pošaljite vezu svojim prijateljima, dobit ćete Selldone darovne kartice i postotak uplata vašeg prijatelja. Imajte na umu da će poklon kartica biti poslana i vama i vašem prijatelju.",
        'action' => 'Pogledajte moj uvodni link',
        'mail-clip' => "<b style='color: #C2185B'>Važno:</b> ako koristite usluge e-pošte kao što je Gmail koji ograničavaju duljinu e-pošte, pronađite sljedeću opciju na kraju e-pošte za prikaz cijelog izvješća i kliknite na nju:",

        'no-coin-reward' => "<b style='color: #C2185B'>Žao nam je:</b> vaša aktivnost nije ispunila zahtjev za dobivanje besplatne nagrade SEL Coins. Potrudite se više i prodajte više u svojoj trgovini za sljedeću sezonu.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Nagrada:</b> Čestitamo, zbog vaše fantastične izvedbe dali smo vam :amount SEL Coin besplatnu nagradu.",

        'need-buy-license' => "<b> Podignite posao na višu razinu: </b> Čini se da još niste registrirali nijedan plan pretplate za svoju web stranicu! Nadogradite sada kako biste otključali više značajki za samo :amount mjesečno ako se plaća godišnje.",
        'not-afford-message' => "Ako si ne možete priuštiti ili imate problema s plaćanjem, slobodno nam to javite putem support@selldone.com.",
        'add-domain' => "<b>Zašto ne biste imali prilagođenu domenu za svoju tvrtku?</b><br> Dodajte domenu svojoj web stranici sada; slobodno je!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone je a<del> proizvod</del> <span style = 'color: forestgreen'>zajednica</span> .<br> Budite profesionalni Selldoner!",
        'message' => "Pratite službene stranice Selldone na Twitteru, LinkedInu i društvenim mrežama. Pošaljite nam komentare, zahtjeve ili kritike ili sudjelujte u raspravama o Selldone. Također smo dio zajednice Selldone koju <b>Vi činite</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Primljene nove narudžbe avokada|:shop_title :time',
        'title' => "Izvješće o učinku za zadnja 24 sata",
        'message' => "Vaši kupci čekaju da se vaše narudžbe pregledaju i odredi cijena. Odgovorite na zahtjeve svojih kupaca što je prije moguće kako biste ostvarili veću prodaju.",
        'card_title' => "Narudžbe u redu",
        'card_subtitle' => "Od :date",

        'card_payed' => "Plaćene narudžbe"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Odgovorite na svoju objavu u :community_title',
        'title' => ":name i :count drugi komentirali su vaše objave.",
        'message' => "Bok :name, tvoje objave privlače pozornost! Dobili ste komentare u našoj zajednici. Prijavite se na svoj račun kako biste se pridružili raspravi i vidjeli što svi govore.",
        'title-simple' => ":name je komentirao vaše postove.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Odgovorite na svoju temu :topic_title',
        'title' => ":name i :count drugi su odgovorili na vašu temu.",
        'message' => "Bok :name, tvoja tema privlači pozornost! Dobili ste odgovore u našoj zajednici. Prijavite se na svoj račun kako biste se pridružili raspravi i vidjeli što svi govore.",
        'title-simple' => ":name je odgovorio na tvoju temu.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nova prijava :name',
        'category' => 'Sigurnosne obavijesti',
        'title' => "Prijavite se na račun",
        'message' => "Dragi :name, prijavili ste se na svoj račun Selldone.",   // Login in selldone (seller)
        'message-shop' => "Poštovani :name, prijavljeni ste na :shop_title.",  // Login in shop (buyer)

        'footer' => "Ako niste prijavljeni, promijenite lozinku.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Povlačenje",
        'deposit' => "Polog",

        'withdraw_subject' => "Podignite s računa :account",
        'deposit_subject' => "Uplata na račun :account",

        'message' => "Prijenos novca obavljen je prema sljedećim specifikacijama.",

        'type' => "Vrsta transakcije",

        'from' => "Izvorni račun",
        'to' => "Destination account",

        'desc' => "Opis transakcije",
        'action' => "Pogledajte transakciju",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Važno! Kršenje pravila| :shop",
        'category' => "Kritične informacije",
        'title' => "Vaša trgovina je kažnjena",
        'action' => "Otvori nadzornu ploču trgovine",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter te pozvao na Selldone",
        'title' => ":name vam je poslao :amount kako bi vam pomogao da pokrenete svoju novu online web stranicu i unovčite je!",
        'message' => "Bok **:receiver_name**, <br><br> Dobro došli u Selldone! Na Selldone možete jednostavno stvoriti svoju stranicu za e-trgovinu, blog, internetsku zajednicu, pa čak i postaviti online POS sustav za osobnu prodaju—sve u roku od nekoliko minuta. To je kompletan mrežni poslovni operativni sustav osmišljen kako bi vaše poslovanje učinio boljim, bržim i lakšim za vođenje. <br><br>Prijavite se putem <b>:date</b> i primite :amount vaučer za početak!",
        'accept' => "Prihvatite poziv",
        'owner' => "Vlasnik",
        'join-date' => "Pridružio se Selldone dana",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Veza za oporavak| :shop",
        'category' => "Sigurnost trgovine",
        'title' => "Veza za oporavak trgovine <b>:shop_name</b> .",
        'message' => "Ova e-poruka vam je poslana jer ste zatražili vraćanje svoje trgovine. Klikom na donju poveznicu obnovit ćete svoju trgovinu i sve podatke koji joj pripadaju.",
        'action' => "Potvrdite oporavak trgovine",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Koliko je novca Selldone uštedio vašem poslovanju?',
        'sub-title' => 'Od datuma :start do :end',
        'infrastructure' => [
            'title' => 'Infrastruktura',
            'subtitle' => 'Poslužitelji, CDN, Storage i druge usluge u oblaku',
        ],
        'experts' => [
            'title' => 'Stručnjaci i osoblje',
            'subtitle' => 'Programeri, održavanje i podrška',
        ],
        'total_save' => 'Ukupna ušteda novca'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Vaš nastup',
        'sub-title' => 'Pregled poslovanja od :start do :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vraćeni korisnici',

        'shop_views' => 'Pregledi trgovine',
        'baskets' => [
            'title' => 'Kolica za kupnju',
            'subtitle' => 'Prijavite broj novih košarica',

        ],
        'products' => [
            'title' => 'Pregled proizvoda',
            'subtitle' => 'Status proizvoda u trgovini prema vrsti',
            'value_name' => 'Proizvodi'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Ukupan broj pregleda stranica web stranice',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Dobili ste novu narudžbu. Idite na stranicu za obradu narudžbe na ploči dobavljača.",
        'subject' => "🛍️ Nova narudžba primljena| :order_id",
        'your_revenue' => "Vaši prihodi",
    ],
    'vendor-invite' => [
        'title' => 'Poziv dobavljaču',
        'message' => "Primili ste poziv da postanete prodavač :shop_name. Možete ga prihvatiti ili odbiti klikom na sljedeće gumbe.",
        'subject' => ":shop_name |Poziv da postanete naš dobavljač",
        'accept' => "Prihvatite i postanite dobavljač",
        'reject' => "Odbiti",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Poziv da se pridružite našem timu',
        'message' => "Pozvani ste da se pridružite :vendor_name na :shop_name. Ovu pozivnicu možete prihvatiti ili odbiti pomoću gumba u nastavku.",
        'subject' => "Poziv za pridruživanje :vendor_name|Postanite član tima",
        'accept' => "Prihvatite i pridružite se timu",
        'reject' => "Odbiti",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Vaš kod za prijavu na :shop",
        'header-message' => "Šaljemo vam ovu e-poruku jer ste zatražili šifru za prijavu u trgovinu. U nastavku pronađite svoju jednokratnu lozinku (OTP):",
        'footer-message' => "Ovaj kod će vrijediti 10 minuta. Ako niste zatražili ovaj kod za prijavu, zanemarite ovu e-poštu."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Potvrdite svoju e-poštu| :shop",
        'title' => 'Potvrda e-pošte',
        'header-message' => "Bok :name,<br> Potvrdite da je **:email** vaša adresa e-pošte klikom na gumb ili koristite poveznicu u nastavku u roku od 48 sati.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Ažuriranja proizvoda| :shop",
        'title' => "Ažuriranje statusa proizvoda - zadnja 24 sata",
        'message' => "Nadam se da vam je ova poruka dobro došla. Ovo je kratko ažuriranje koje vas obavještava o statusu vaših proizvoda na našoj platformi u posljednja 24 sata.\nU tom razdoblju došlo je do promjena u statusu nekih proizvoda. Te promjene mogu biti posljedica kupnji, ažuriranja dionica ili drugih povezanih događaja.\nZa detaljnije informacije o svakom proizvodu, prijavite se na svoj račun i provjerite odjeljak 'Status proizvoda'.",
        'action' => "Otvorite ploču dobavljača",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Primljene skupne narudžbe| :shop | :date",
        'title' => "Obavijest o skupnim narudžbama",
        'message' => "Primili ste seriju skupnih narudžbi. Posjetite stranicu za obradu narudžbe u svojoj ploči za dodatne pojedinosti. Također možete preuzeti popis narudžbi putem priložene sigurne veze, vrijedi 7 dana.<br><br>\n        <b>VAŽNO:</b> Ova veza vrijedi 7 dana.<br>\n        Ova poveznica je dinamična, tako da svaki put kada kliknete na nju, dobit ćete najnovije narudžbe za ovaj određeni datum. <b>To znači da ako se status plaćanja narudžbe promijeni u odbijena, više nećete vidjeti tu narudžbu u preuzetom CSV-u ili ako je narudžba plaćena, pojavit će se na popisu.</b><br><br>\n        <ul>\n            <li>CSV sadrži plaćene naloge s rezerviranim datumom u :date.</li>\n            <li>Rezervirani datum je datum kada korisnik klikne Checkout na stranici narudžbe.</li>\n        </ul>\n        <b> Kako biste spriječili duple narudžbe, uvijek provjerite narudžbu ID prije slanja.</b>",
        'action' => "Preuzmite popis narudžbi",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Neki artikli u vašoj narudžbi nisu prihvaćeni i ne mogu se isporučiti. Iznos za ove stavke bit će uskoro vraćen na vašu karticu."
    ]

];
