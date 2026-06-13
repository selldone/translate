<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ova poruka želi dobrodošlicu novom kupcu u radnju.',
        ShopMailTemplateCodes::OrderCheckout => 'Ova obavijest se šalje kada kupac potvrdi narudžbu.',
        ShopMailTemplateCodes::OrderPayment => 'Ovo obavještenje potvrđuje uspješno plaćanje od strane kupca.',
        ShopMailTemplateCodes::OrderUpdate => 'Ova poruka se šalje kako bi se kupac obavijestio o statusu njegove narudžbe.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ova poruka se šalje prodavcu da ga obavijesti o potvrđenoj narudžbi.',
        ShopMailTemplateCodes::PosCheckout => 'Ova obavijest se šalje za potvrdu narudžbe na prodajnom mjestu za kupca.',
        ShopMailTemplateCodes::PosPayment => 'Ovo obavještenje potvrđuje plaćanje na prodajnom mjestu koje je izvršio kupac.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ova poruka obavještava prodavca o kupovini obavljenoj na njegovom prodajnom mjestu.',
        ShopMailTemplateCodes::ShopContact => 'Ovo obavještenje se šalje kada se pošalje obrazac za kontakt.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ovo obavještenje obavještava korisnika da je primio poklon karticu.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ova poruka želi dobrodošlicu novom prodavcu u radnju.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ova poruka se šalje da pozovete prodavca da se pridruži vašem tržištu.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ova poruka se šalje prodavcu kada se narudžba primi u statusu Plaćeno ili Pouzećem (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Šalje se svakodnevno radi ažuriranja dobavljača o statusu njihovih proizvoda.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ova poruka se šalje da pozovete prodavca da se pridruži vašem tržištu.",

        ShopMailTemplateCodes::UserLogin => "Obavijestite korisnika s detaljima za prijavu, uključujući IP adresu, datum i uređaj, iz sigurnosnih razloga.",
        ShopMailTemplateCodes::LoginCode => "Pošaljite kod za jednokratnu lozinku za korisnike da se prijave u prodavnicu.",

        ShopMailTemplateCodes::EmailVerifyLink => "Pošaljite link da potvrdite adresu e-pošte korisnika. Ovaj email se šalje kada se korisnik registruje od strane SMS i unese svoju e-poštu. Ne šalje se kada se korisnik registruje direktno putem društvene prijave ili e-pošte.",

        ShopMailTemplateCodes::EmailBulkOrder => "Pošaljite listu primljenih i plaćenih narudžbi na veliko za određeni dan."


    ,

    ],


    'global' => [
        'greetings' => 'Zdravo :name',
        'end-statement' => 'Tim za podršku',

        'receiver_name' => 'Zdravo :user_name',
        'footer-help' => "Trebate pomoć? Pitajte na [support@selldone.com](mailto:support@selldone.com) ili posjetite naš [centar za pomoć](https://selldone.com/community).",
        'selldone-team' => 'Selldone tim',
        'footer-shop' => "Ako vam treba pomoć oko bilo čega, ne ustručavajte se da nam pošaljete e-mail: :shop_mail",
        'accept' => "Prihvati",
        'reject' => "Odbiti",
        'verify' => "verify",
        'title' => "Naslov",
        'value' => "Vrijednost",
        'description' => "Opis",
        'shop' => "Prodavnica",
        'shop-info' => "Informacije o prodavnici",
        'user' => "Korisnik",
        'user-info' => "Informacije o računu",
        'license' => "Licenca",
        'status' => "Status",
        'start' => "Počni",
        'end' => "Kraj",
        'renewal' => "Obnova",
        'view' => "Pogled",

        'balance' => "Balans",
        'card_number' => "Broj kartice",
        'cvv' => "Cvv",
        'expire_date' => "Datum isteka",

        'Dashboard' => "Dashboard",
        'order' => "red",
        'view_order' => "Pogledaj narudžbu",
        'pay_now' => "Pay now",

        'official_selldone' => "ZVANIČNO PRODANO",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valuta",
        'free-balance' => "Slobodno stanje",
        'locked-balance' => "Zaključan balans",
        'bot' => "Bot",
        'requests' => "Zahtjevi",
        'baskets' => 'Kolica',
        'physical' => "Fizički",
        'virtual' => "Virtuelno",
        'file' => "File",
        'service' => "Servis",
        'fulfillment' => "Ispunjenje",
        'open' => "Otvori",
        'reserved' => "Rezervirano",
        'canceled' => "Otkazano",
        'payed' => "Plaćeno",
        'cod' => "COD",
        'orders-count' => 'Naredbe',
        'payments-count' => 'Plaćanja',
        'confirms-count' => 'Potvrđuje',
        'sends-count' => 'Šalje',
        'delivers-count' => 'Isporučuje',
        'count' => 'Count',
        'transactions-count' => 'Transakcije se računaju',
        'success-transactions' => 'Uspješne transakcije',
        'total-amount' => 'Ukupan iznos',
        'amount' => 'Iznos',
        'wage' => 'Plaća',
        'debug' => 'Otklanjanje grešaka',
        'pos' => 'POS',
        'live' => 'Uživo',
        'CheckQueue' => 'Provjerite red',
        'OrderConfirm' => 'Potvrda narudžbe',
        'PreparingOrder' => 'Priprema narudžbe',
        'SentOrder' => 'Poslana narudžba',
        'ToCustomer' => 'Isporučeno kupcu',
        'Pending' => 'Na čekanju',
        'Accepted' => 'Prihvaćeno',
        'Rejected' => 'Odbijeno',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefon',
        'total' => 'Ukupno',
        'view-detail' => 'Pogledajte detalje',
        'empty' => 'Prazan',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Odgovori',
        'reactions' => 'Reakcije',
        'Comments' => 'Komentari',
        'last-comment' => 'Poslednji komentar',
        'response-to' => 'Odgovoriti na',
        'posts' => 'Postovi',
        'post' => 'Pošta',

        'name' => 'Ime',
        'email' => 'Email',
        'type' => 'tip',
        'device' => 'Uređaj',
        'platform' => 'Platforma',
        'browser' => 'Pretraživač',
        'time' => 'Vrijeme',
        'Wallet' => 'Novčanik',
        'date' => 'Datum',

        'account' => 'Račun',
        'transaction' => 'Transakcija',
        'fee' => 'Naknada',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategorija',
        'password' => 'Lozinka',
        'verify-login' => "Potvrdite i prijavite se",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hyper',
        'buy-now' => "Kupi sada",
        'add-domain' => "Add Domain",
        'views' => 'Pregledi',


        'country' => 'Država',
        'address' => 'adresa',
        'postal' => 'poštanski broj',
        'building_no' => 'zgrada br.',
        'building_unit' => 'Jedinica #',
        'message' => 'Poruka',


        'customer' => 'Kupac',
        'cart-items' => 'Artikli u košarici',
        'payment' => 'Plaćanje',
        'receiver' => 'Prijemnik',
        'virtual-items' => 'Virtuelne stavke',
        'no-payment' => 'Nema plaćanja!',

        'enable' => 'Omogući',
        'access' => 'Pristup',
        'bank' => 'Podaci o banci',

        'vendor' => 'Vendor',

        'view_content' => "Pogledajte cijeli sadržaj",
        'files' => 'Fajlovi',
        'download' => 'Skinuti',
        'file_name' => 'Ime datoteke',
        'file_size' => 'Veličina',

        'subscription' => 'Pretplata',
        'products' => 'Proizvodi',
        'vendor_products' => 'Vendor Products',

        'pickup' => 'Preuzimanje',

        'minutes' => 'Minute',
        'hours' => 'Sati',

        'refund' => 'Povrat novca',
        'recipient_address' => 'Adresa primaoca',
        'signature' => 'Potpis',
        'blockchain' => 'Blockchain',
        'details' => 'Detalji',


    

        'Shop' => 'Prodavnica',
        'dashboard' => 'komandna tabla',
        'comments' => 'komentari',
        'wallet' => 'novčanik',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Izvještaj o učinku, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Sezonski izvještaj, Selldone'
        ],
        'Onboarding' => [
            'id' => 'zdravo',
            'name' => 'Odobri, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Podrška :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Potvrdi, Selldone'
        ],
        'Welcome' => [
            'id' => 'zdravo',
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
            'name' => 'Selldone Recovery Team'
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
            'AUDITING' => 'Menadžer revizije',
            'EMPLOYEE' => 'Zaposleni',
            'PRODUCT' => 'Menadžer proizvoda',
            'CONTENT' => 'Menadžer sadržaja',
            'MARKETING' => 'Marketing menadžer',
            'VIEWER' => 'Viewer',

        ],
        'subject' => ":inviter vas je pozvao kao :level| :shop",
        'category' => "Poziv za osoblje",
        'title' => "Pozvani ste u <b>:shop_name</b> kao <b>:level</b> .",
        'message' => "Primili ste poziv za saradnju sa <b>:shop_title</b> timom u poslovanju. Imate mogućnost da prihvatite ili odbijete ovu ponudu. Ako odlučite da prihvatite, prijavite se na uslugu Selldone da potvrdite svoju odluku. Nakon potvrde, dobićete pristup odjeljku za upravljanje trgovinom.",

    ],

    'welcome-email' => [
        'subject' => "👋 Dobro došli :name, počnimo s Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Dobrodošli u Selldone",
        'message' => "Hvala vam što ste odabrali Selldone! Sada ste dio živahne zajednice koja povezuje globalne prodavce s kupcima, lokalna preduzeća s poduzećima i pojedince s korporacijama. Svi naši Master i Pro alati dostupni su vam **besplatno** i **neograničeno**. Tu smo da vas podržimo i otvorimo vrata vašem uspjehu.",

        'index' => "Korak :step.",

        'step-domain' => [
            'title' => 'Dodajte svoju prilagođenu domenu',
            'message' => "Da biste započeli, besplatno dodajte svoju prilagođenu domenu u Shop Dashboard pod Postavke > Postavke domena.",
            'action' => 'Upravljajte mojim domenima',
        ],
        'step-landing' => [
            'title' => 'Prilagodite svoju početnu stranicu',
            'message' => "Personalizujte svoju početnu stranicu tako što ćete otići na Kontrolnu tablu > Stranice. Odaberite odredišnu stranicu ili kreirajte novu. Lako je i intuitivno i možete odmah početi raditi na tome.",
            'action' => 'Prilagodite moju odredišnu stranicu',
        ],
        'step-payment' => [
            'title' => 'Podešavanje načina plaćanja',
            'message' => "Počnite primati uplate direktno na svoj bankovni račun. Da povežete svoje dobavljače plaćanja kao što su Stripe, PayPal i drugi, idite na Nadzorna ploča > Računovodstvo > Gateway.",
            'action' => 'Dodajte načine plaćanja',
        ],
        'step-products' => [
            'title' => 'Dodajte svoje proizvode',
            'message' => "Jednostavno dodajte proizvode i kategorije na Nadzornoj tabli > Proizvodi. To je isto kao i upravljanje datotekama i fasciklama na računaru – potpuno spreman za prevlačenje i ispuštanje. Također možete masovno uvoziti proizvode koristeći Excel. Dostupan je uzorak predloška koji će vam pomoći da započnete.",
            'action' => 'Upravljajte mojim proizvodima',
        ],
        'step-shipping' => [
            'title' => 'Postavite metode isporuke',
            'message' => "Da biste kupcima naplatili dostavu, definirajte svoje metode dostave u Nadzornoj tabli > Logistika > Dostava. Možete postaviti različite cijene i podršku za različite lokacije. Ne zaboravite postaviti porijeklo skladišta u Kontrolna tabla > Logistika > Skladište.",
            'action' => 'Upravljajte načinima isporuke',
        ],
    

        'seller' => [
            'title' => 'Jeste li prodavac?',
            'message' => 'Da započnete prodaju, unesite svoju kontrolnu ploču u Selldone putem donje veze i kreirajte svoju prvu trgovinu potpuno besplatno. Ovo će potrajati nekoliko minuta i imat ćete svoju prodavnicu i internetsku stranicu. Zatim ćemo vas uputiti na sljedeće korake i dobiti pristupnicu za plaćanje.',
            'action' => 'Prijavite se na moju kontrolnu tablu',
        ],
        'buyer' => [
            'title' => 'Ja sam kupac',
            'message' => 'Čestitam. Jednom kada postanete član Selldonea, riješit ćete se svih muka oko članstva i autentifikacije u online trgovinama. Da biste imali koristi od bilo koje trgovine i stranice koja koristi Selldone platformu, možete se prijaviti jednim klikom i učiniti vašu kupovinu jednostavnom, brzom i sigurnom.',
        ],
    ],


    'charge-account' => [
        'category' => 'Novčanik > Račun > Naplata',
        'title' => "Success Charge",
        'message' => "Vaš račun <b>:account_number</b> je uspješno naplaćen <b>:amount</b>.",
        'account' => 'Račun',
        'charge' => 'Napunite',
        'balance' => 'Balans',
        'footer' => "Učinite poslovanje lakim, ostvarivim i dostupnim svima širom svijeta."
    ],

    'verify-email' => [
        'subject' => "🙌 Završite prijavu na Selldone! Potvrdite vezu.",
        'category' => "UDALJENI STE SE NA KORAK",
        'title' => "Potvrdite svoju email adresu",
        'message' => "Zdravo :name,<br><br>Hvala vam što ste odabrali Selldone!<br><br>Da biste potvrdili da je <b>:email</b> vaša ispravna adresa e-pošte ili kliknite na link ispod. Imate 48 sati da završite ovu verifikaciju.",
        'footer' => "Ako imate problema s klikom na dugme Potvrdi, kopirajte i zalijepite URL ispod u svoj web preglednik: :activation_url",
        'next-step' => "Zatim ćemo vam poslati neke korisne materijale i vodič korak po korak kako bismo vam olakšali dodavanje prilagođene domene, postavljanje plaćanja, dodavanje proizvoda i primanje prve narudžbe.",

    ],
    'verify-email-code' => [
        'subject' => "Verifikacioni kod za :name",
        'category' => "SECURITY",
        'title' => "E-mail kod za potvrdu",
        'message' => "Zdravo :name,<br><br>Da biste potvrdili da je <b>:email</b> vaša ispravna adresa e-pošte, unesite sljedeći kod u narednih <b>10 minuta</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Vaša radnja je spremna | :name",
        'category' => "UDALJENI STE SE NA KORAK",
        'title' => "Postavljanje je završeno",
        'account_title' => "Vaš račun",
        'account_msg' => "Potvrdite i prijavite se na svoj račun s ovim informacijama.",
        'shop_msg' => "Podaci o računu na poslovnom sistemu Selldone.",

    ],

    'reset2fa' => [
        'category' => "BEZBEDNOSNA SLUŽBENA PORUKA",
        'title' => "Zahtjev za onemogućavanje prijave u 2 koraka",
        'message' => "Primili ste ovu e-poruku jer smo primili zahtjev za resetiranje dvofaktorske autentifikacije za **:name** račun sa **:email** e-poštom.<br><br>Pronašli smo sljedeće detalje za vaš račun:",
        'footer' => "Ako niste zatražili poništavanje lozinke, nisu potrebne daljnje radnje.",
        'action' => 'Onemogućite prijavu u dva koraka',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Vaša radnja je sada spremna!",
        'category' => "ROĐENA NOVA ONLINE PRODAVNICA U SVIJETU",
        'title' => "Čestitamo, :name!",
        'message' => "<b> Čestitamo, :name! Vaš novi online posao je sada aktivan!</b> Uzbuđeni smo što vam možemo poželeti dobrodošlicu u zajednicu Selldoners. Napravili ste prvi korak ka uspjehu, a mi smo tu da vam pomognemo na svakom koraku.<br>Sada kada je vaša trgovina spremna, hajde da se uvjerimo da ste spremni da primate uplate direktno od svojih kupaca i počnete rasti svoje carstvo. Ako vam ikada zatreba pomoć, tu smo samo na jednoj poruci—naš tim za podršku je uvijek tu za vas.<br><br><b>Važni sljedeći koraci:</b> Za početak, uvjerite se da ste spremni za primanje uplata i nesmetane operacije. Vodit ćemo vas kroz svaku fazu kako bi vaša trgovina radila bez problema.",
        'pdf-book' => "Ne propustite priloženi priručnik: Radite svoj posao kao igra",

        'account' => [
            'title' => 'Korak 1: Kreirajte nalog u Selldone novčaniku',
            'message' => "Za početak kreirajte račun u svom Selldone novčaniku. Ovo je mjesto gdje će vam se odbijati naknade, a tu ćete i dopuniti da bi vaša trgovina nesmetano radila. Ako vam stanje bude negativno, ne brinite! Vaša prodavnica će nastaviti da radi bez prekida.",
            'action' => 'Prijavite se na novčanik',
        ],

        'shop-account' => [
            'title' => 'Korak 2: povežite račun sa trgovinom',
            'message' => "Zatim povežite svoj račun novčanika sa trgovinom. Idite na <b>Store > Računovodstvo > Invoice</b> i povežite svoj novčanik. Ovo osigurava da se sva plaćanja klijenata polažu direktno na vaš bankovni račun—Selldone ne oduzima nikakve iznose od vaše zarade.",
            'action' => 'Panel faktura prodavnice',
        ],

        'gateway' => [
            'title' => 'Korak 3: Povežite mrežni prolaz za plaćanje',
            'message' => "Sada, postavimo vaš pristupnik za online plaćanje. Idite na <b>Store > Računovodstvo > Port</b> i kliknite na <b>Dodaj novi port</b>. Odaberite svoju valutu i vidjet ćete listu dostupnih prolaza za plaćanje. Povezivanje gatewaya je brzo i jednostavno, ali ako vam je potrebna bilo kakva pomoć, slobodno provjerite Selldone vodiče ili nam se obratite.",
            'action' => 'Dodajte portal u prodavnicu',
        ],

        'domain' => [
            'title' => 'Poslednji korak: povezivanje namenske domene',
            'message' => "Sada povežite svoju prilagođenu domenu sa svojom trgovinom. Ovo omogućava kupcima da kupe vaše proizvode ili usluge i uplate direktno vama.",
            'action' => 'Predstavljanje i primanje neograničenih poklon kartica',
        ],
    ],


    'basket-list' => [
        'item' => "predmet",
        'count' => "Count",
        'price' => "Cijena",
        'discount-code' => "Kod za popust",
        'customer-club' => 'Klub kupaca',
        'shipping' => "Dostava",
        'total' => "Ukupno",
        'offer' => "Ponuda",
        'coupon' => "Kupon",
        'lottery' => "Nagrada",
        'tax' => "Porez",
        'tax_included' => "Uključeno u cijenu",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metoda',
        'amount' => 'Iznos',
        'giftcard' => 'Gift card',
        'payment' => 'Plaćanje',
    ],


    'shop-subscription-email' => [
        'category' => "Ažuriranje pretplate",
        'title' => "Licenca prodavnice: :shop_title",
        'title-reserved' => "Rezervna licenca: :shop_title",
        'title-active' => "Aktivna licenca: :shop_title",
        'title-finished' => "Završena licenca: :shop_title",
        'title-cancel' => "Otkažite licencu: :shop_title",
        'message' => "Vaš licencni plan prodavnice je ažuriran,",
        'RESERVED' => "⚡ Vaš pretplatnički plan je **rezervisan**.",
        'ACTIVE' => "🟢 Vaš pretplatnički plan je **aktiviran**.",
        'FINISHED' => "🚧 Vaš plan pretplate je **završen**.",
        'CANCEL' => "⛔ Vaš plan pretplate je **otkazan**.",
    ],

    'support' => [
        'subject' => "Centar za podršku | :name je odgovorilo",
        'category' => "Centar za podršku",
        'title' => "Dobili ste odgovor",
        'action' => "Otvorite shop admin",
    ],

    'shop-customer-join' => [
        'subject' => "Pridružite se :shop_title",
        'category' => "Proslava novih kupaca",
        'title' => "Sretni smo zbog vašeg članstva",
        'action' => "Posjetite sada",
    ],

    'shop-vendor-join' => [
        'subject' => "Uključivanje dobavljača | :shop_title",
        'category' => "Proslava novog prodavca",
        'title' => "Sretni smo zbog vašeg članstva",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Poklon kartica :shop_title",
        'category' => "Dodaj novu karticu",
        'title' => "Čestitamo, dobili ste poklon karticu",
        'action' => "Kupi sada",
        'message' => "Primili ste poklon karticu u vrijednosti :balance :currency. Ovu poklon karticu možete koristiti u našoj trgovini.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centar za podršku| :shop",
        'category' => "podrška",
        'title' => "Dobili ste odgovor",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Naručite narudžbe | :order_id",
        'title' => "red",
        'message' => "Naručili ste u našoj radnji. Primili smo vašu narudžbu i poslat ćemo vam još jedan e-mail kada uplata bude potvrđena."
    ,

        'payments' => 'Plaćanja',
    ],

    'order-payment' => [
        'subject' => "🛍 Potvrda plaćanja | :order_id",
        'title' => "Nalog za plaćanje",
        'message' => "Vaša uplata je završena,<br> Imamo vašu narudžbu. Poslat ćemo vam još jedan e-mail kada se vaša narudžba pošalje.",
    

        'payments' => 'Plaćanja',
    ],

    'order-update' => [
        'subject' => "🛍️ Ažuriranje statusa narudžbe|Naručite :order_id",
        'title' => "Ažuriranje statusa narudžbe",
        'message' => "Vaša narudžba je ažurirana. Najnoviji status ove narudžbe možete provjeriti na svom računu.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Vaša narudžba je u redu za obradu. Obavijestit ćemo vas kada bude u pripremi.",
                'OrderConfirm' => "Vaša narudžba je potvrđena i priprema je počela.",
                'PreparingOrder' => "Vaša narudžba je u pripremi i uskoro će biti poslana.",
                'SentOrder' => "Vaša narudžba je poslana. Primit ćete ga uskoro.",
                'ToCustomer' => "Vaša narudžba je isporučena. Nadamo se da ćete uživati!",

                'PreparingOrder-PICKUP' => "Vaša narudžba je u pripremi. Primit ćete obavještenje kada bude spreman za preuzimanje.",
                'SentOrder-PICKUP' => "Vaša narudžba je spremna za preuzimanje. Molimo dođite u trgovinu da ga preuzmete.",
                'ToCustomer-PICKUP' => "Vaša narudžba je preuzeta. Nadamo se da ćete uživati!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Vaša narudžba je u redu za obradu. Obavijestit ćemo vas kada bude spremno.",
                'OrderConfirm' => "Vaša narudžba je potvrđena i priprema je u toku.",
                'PreparingOrder' => "Vaša narudžba je u pripremi i uskoro će vam biti poslana.",
                'ToCustomer' => "Vaša virtuelna narudžba je isporučena na vaš račun. Hvala vam!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Vaš zahtjev za uslugu je u redu čekanja. Obavijestit ćemo vas kada počnemo.",
                'OrderConfirm' => "Vaša usluga je potvrđena i pripremamo se za početak.",
                'PreparingOrder' => "Pripremamo vašu uslugu i obavijestit ćemo vas kada bude završena.",
                'ToCustomer' => "Vaša usluga je završena. Hvala vam što ste nas odabrali!"
            ],
            'FILE' => [
                'PreparingOrder' => "Vaš fajl se priprema i uskoro će biti dostupan.",
                'ToCustomer' => "Vaš fajl je spreman i isporučen. Sada ga možete preuzeti."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Vaš nalog za pretplatu je u redu čekanja. Obavijestit ćemo vas kada obrada počne.",
                'OrderConfirm' => "Vaša pretplata je potvrđena i postavlja se.",
                'PreparingOrder' => "Pripremamo vašu pretplatu i uskoro će početi.",
                'SentOrder' => "Vaša pretplata je aktivirana. Primaćete stalna ažuriranja.",
                'ToCustomer' => "Vaša pretplatnička usluga je uspješno aktivirana."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Čestitamo :name | Novi vaučer: :title',
        'category' => "ČESTITKE, NOVI VAUČER",
        'message' => "Hej :name,<br><br> Dobili ste novi vaučer na poklon od nas! Možete zaraditi još više vaučera tako što ćete predstaviti Selldone svojim prijateljima i svima koje poznajete. Ovaj vaučer vrijedi **:price :currency**.<br><br> Napravili ste prvi korak, a mi smo tu da vam pomognemo da otključate nove funkcije s vašim vaučerom! Molimo prijavite se sa **:email** i pronađite svoj vaučer u Shop-u **Nadzorna tabla** > **Postavke** > **Licenca**.<br><br> Čestitamo!",
        'action' => "Moja kontrolna tabla",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Čestitamo, draga :name | Dobili ste poklon',
        'category' => "Najava prijema poklona",
        'title' => "Pokloni za vas",
        'message' => "Zdravo :name, sa zadovoljstvom vas obavještavamo da ste dobili poseban poklon od Selldone! 🎉 Možete zaraditi više poklona ako ostanete aktivni, proširite svoju trgovinu i poboljšate svoju stručnost na Selldone. Da biste provjerili svoj poklon, jednostavno se prijavite sa :email i potražite ga u gornjem desnom kutu svoje kontrolne table.<br><br>Ovaj poklon vrijedi **:price :currency**, i možete ga lako uplatiti u svoj novčanik unutar Selldone.<br><br>Iskoristite svoj poklon za nadogradnju licence svoje trgovine i otključajte još moćnije alate za unapređenje vašeg poslovanja na mreži!",
        'action' => "Pokloni",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Nova narudžba primljena | :order_id",
        'title' => "New Order",
        'message' => "Primili ste novu narudžbu. Molimo idite na stranicu za obradu narudžbi u vašoj trgovini.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Vaše popunjene informacije',
        'output-form-title' => 'Informacije o kupljenom artiklu',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title | Sedmični izvještaj :time',
        'title' => 'Sedmični izvještaj o radu trgovine',
        'message' => "Ovo je sedmični izvještaj vaše trgovine od <b>:start</b> do <b>:end</b>. Ovaj izvještaj uključuje savjete za poboljšanje vašeg poslovanja, također možete provjeriti status vaše online trgovine i nedavne narudžbe. Nadam se da imate dobar dan i sedmicu pred nama."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Vaš :amount izvještaj o štednji u posljednja tri mjeseca| :shop_title',
        'title' => 'Sezonski izvještaj o Vašoj poslovnoj aktivnosti, nagradama i finansijskim uštedama',
        'message' => "Ovo je vaš <b>:shop_title</b> sezonski izvještaj od <b>:start</b> do <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Povezani računi',
        'sub-title' => 'Koji je najnoviji status naloga novčanika povezanih s mojom trgovinom?',
        'view-wallet' => 'Pogledaj novčanik',
        'tip-title' => 'Važni savjeti',
        'tip' => "Postavite besplatni Selldone novčanik i povežite ga sa svojom trgovinom. Čak i ako je vaš saldo negativan, vaši kupci i dalje mogu kupovati i plaćati bez ikakvih problema. Ne brinite, rad i podaci vaše trgovine će se nastaviti nesmetano do 1 mjesec, bez ikakvih prekida.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Povežite se na račun'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Instalirane aplikacije',
        'sub-title' => 'Lista aplikacija koje ste instalirali u svojoj trgovini ove sedmice.',
        'tip' => "Želite li pronaći više aplikacija za svoju trgovinu?",
        'view-app-store' => 'Posjetite Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Vaši botovi prodavnice',
        'sub-title' => 'Aktivni prodajni botovi u mojoj radnji.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone vam je omogućio automatske prodajne botove. Sve što trebate učiniti je otići na panel Add-ons> Bots i aktivirati svoje botove u trgovini. Imajte na umu da relevantna usluga mora biti dostupna u vašoj zemlji.",
        'view-bots' => 'Upravljajte botovima',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikacija sa kupcima',
        'sub-title' => 'Koliko sam kontakata imao sa svojim klijentima ove sedmice?',
        'faqs' => 'Često Postavljena Pitanja',
        'tickets' => 'Customer Tickets',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status korisnika',
        'sub-title' => 'Aktivnost od :start do :end',
        'users' => [
            'title' => 'Kupci',
            'subtitle' => 'Registracija korisnika',
        ],
        'views' => [
            'title' => 'Posjete',
            'subtitle' => 'Koliko puta ste posjetili trgovinu',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vraćeni korisnici',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Kolica za kupovinu',
            'subtitle' => 'Prijavite broj novih korpi za kupovinu',
        ],
        'products' => [
            'title' => 'Pregled proizvoda',
            'subtitle' => 'Status proizvoda u trgovini prema vrsti',
            'value_name' => 'Proizvodi'
        ],
        'products_count' => 'Vrste proizvoda',
        'views_count' => 'Broj pregleda',
        'sell_count' => 'Sell count',
        'send_count' => 'Broj dostave',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel za glavne prodavce Drop Shipping Selldone.',
        'total_fulfillments' => 'Ukupno primljenih narudžbi',
        'ds_count' => 'Primljene narudžbe',
        'statistics_title' => 'Izvještavati o primljenim nalozima',
        'ds_cancels' => 'Otkazivanje od strane prodavca interfejsa',
        'ds_rejects' => 'Otkažite od strane vas',
        'tip' => "Da li ste glavni prodavac robe? Da li posjedujete skladište, tvornicu ili distributera proizvoda? Svoje proizvode možete ponuditi drugim prodavačima u usluzi Selldone Drop Shipping kako biste prodali svoj proizvod u velikim razmjerima. Pošaljite nam e-poštu na support@selldone.com da vas uputimo.",
        'view-drop-shipping-panel' => 'Prijavite se na veleprodajni panel',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'devizni kurs',
        'sub-title' => 'Lista najnovijih kurseva konverzije valuta u vašoj prodavnici.',
        'from' => 'Izvorna valuta',
        'to' => 'Odredišna valuta',
        'rate' => 'Stopa konverzije',
        'view-exchange-panel' => 'Upravljajte deviznim kursevima',
    

        'vew-exchange-panel' => 'panel za upravljanje deviznim kursom',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Stručni ugovori',
        'sub-title' => 'Koji profesionalci rade u mojoj radnji?',
        'cost' => 'Iznos ugovora',
        'duration' => 'Trajanje',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum Otkazivanje',
        'end_at' => 'Datum dostave',
        'tip' => 'Unajmite vrhunske stručnjake iz Selldone da vam pomognu u razvoju vašeg poslovanja.',
        'view-experts' => 'Kliknite za početak.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Prijavite aktivni pristupnici plaćanja na shopu :shop.',
        'tip-title' => 'Važni savjeti',
        'tip' => "Idite na stranicu za upravljanje portalom u svojoj trgovini i dodajte barem jedan port za nekoliko minuta. Vaši klijenti vole da plaćaju brzo i sigurno putem internetskih portala.",
        'view-shop-gateways' => 'Prijavite se na upravljanje portalom moje trgovine.',
        'view-gateways' => 'Pogledajte više pristupnika',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Naredbe',
        'sub-title' => 'Lista narudžbi koje sam primio ove sedmice.',
        'total_baskets' => 'Total Orders',
        'total_posBaskets' => 'Ukupni gotovinski nalozi',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Narudžbe izvršene (ove narudžbe nisu nužno plaćene!)',
        'tip-title' => 'Trebalo bi da se potrudiš više...',
        'tip' => "Nema jednostavnog uspjeha.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Procesni centar',
        'sub-title' => 'Koliko smo porudžbina obrađivali u trgovini ove sedmice?',
        'tip-title' => 'Niste imali rasprodaju!',
        'tip' => "Nažalost niste imali nikakvu prodaju ove sedmice. Morate stići više do svoje trgovine. Možete dodati više proizvoda, odabrati bolje slike ili napisati bolje opise za svoje proizvode. Razmislite o poslu s punim radnim vremenom za svoj posao. Ako to uradite kako treba i ne budete frustrirani, uspjet ćete.",
        'view-process-center' => 'Pogledajte procesni centar',
        'return' => [
            'title' => 'Vraćena narudžba',
            'subtitle' => 'Prijavite vraćene narudžbe.',
            'tip-title' => 'da li ste znali da...',
            'tip' => "Sa Selldone POS POS-om možete kreirati onoliko kasa koliko vam je potrebno! Bilo da se radi o vašem tabletu, mobilnom telefonu ili laptopu, bilo koji uređaj možete pretvoriti u prodajno mjesto svoje trgovine. Jednostavan je, brz za postavljanje i potpuno pripremljen za vaš server. Počnite ga koristiti već danas!",
            'view-pos' => 'Prijavite se na My Online Store Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesije',
        'sub-title' => 'Koliko puta sam posjetio svoju radnju?',
        'countries-title' => 'Koje zemlje su bile najposjećenije?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Da li želite da zaradite novac bez trošenja ni jednog dolara?',
        'message' => "Poštovani :name, možete otići na Dashboard > Demonetizacija i kreirati link za preporuke. Pošaljite link svojim prijateljima, dobićete Selldone poklon kartice i procenat uplata vašeg prijatelja. Imajte na umu da će poklon kartica biti poslana i vama i vašem prijatelju.",
        'action' => 'Pogledajte moj uvodni link',
        'mail-clip' => "<b style='color: #C2185B'>Važno:</b> Ako koristite usluge e-pošte kao što je Gmail koji ograničavaju dužinu e-pošte, pronađite sljedeću opciju na kraju e-pošte za prikaz cijelog izvještaja i kliknite na nju:",

        'no-coin-reward' => "<b style='color: #C2185B'>Žao nam je:</b> Vaša aktivnost nije ispunila uslov za dobijanje besplatne SEL Coins nagrade. Potrudite se više i prodajte više u svojoj radnji za sljedeću sezonu.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Nagrada:</b> Čestitamo, zbog vašeg fantastičnog učinka, dali smo vam besplatnu nagradu od :amount SEL Coin.",

        'need-buy-license' => "<b>Unapredite svoje poslovanje:</b> Izgleda da još niste registrovali nijedan plan pretplate za svoju web stranicu! Nadogradite sada da biste otključali više funkcija za samo :amount mjesečno ako se plaća godišnje.",
        'not-afford-message' => "Ako si ne možete priuštiti ili imate problema s plaćanjem, slobodno nam to javite putem support@selldone.com.",
        'add-domain' => "<b>Zašto ne biste imali prilagođenu domenu za svoje poslovanje?</b><br> Dodajte domenu na svoju web stranicu odmah; slobodno je!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone je a<del> proizvod</del> <span style = 'color: forestgreen'>zajednica</span> .<br> Budite profesionalni prodavac!",
        'message' => "Pratite zvanične stranice Selldone na Twitteru, LinkedInu i društvenim mrežama. Pošaljite nam bilo kakve komentare, zahtjeve ili kritike ili sudjelujte u raspravama o Selldone. Također smo dio zajednice Selldone koju <b> pravite </b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Primljene nove narudžbe avokada|:shop_title :time',
        'title' => "Izvještaj o učinku za posljednja 24 sata",
        'message' => "Vaši kupci čekaju da se vaše narudžbe pregledaju i procijene. Odgovorite na zahtjeve svojih kupaca što je prije moguće kako biste ostvarili veću prodaju.",
        'card_title' => "Narudžbe u redu",
        'card_subtitle' => "Od :date",

        'card_payed' => "Plaćene narudžbe"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Odgovorite na vašu objavu u :community_title',
        'title' => ":name i :count drugi su komentirali vaše objave.",
        'message' => "Zdravo :name, vaše objave privlače pažnju! Dobili ste komentare u našoj zajednici. Prijavite se na svoj nalog da se pridružite diskusiji i vidite šta svi govore.",
        'title-simple' => ":name je komentirao vaše objave.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Odgovorite na svoju temu :topic_title',
        'title' => ":name i :count drugi su odgovorili na vašu temu.",
        'message' => "Zdravo :name, vaša tema privlači pažnju! Dobili ste odgovore u našoj zajednici. Prijavite se na svoj nalog da se pridružite diskusiji i vidite šta svi govore.",
        'title-simple' => ":name je odgovorio na tvoju temu.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Novo prijavljivanje :name',
        'category' => 'Sigurnosna obavještenja',
        'title' => "Prijavite se na račun",
        'message' => "Poštovani :name, bili ste prijavljeni na svoj Selldone nalog.",   // Login in selldone (seller)
        'message-shop' => "Poštovani :name, prijavljeni ste na :shop_title .",  // Login in shop (buyer)

        'footer' => "Ako niste prijavljeni, promijenite lozinku.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Povlačenje",
        'deposit' => "Depozit",

        'withdraw_subject' => "povući sa računa :account",
        'deposit_subject' => "Uplata na račun :account",

        'message' => "Transfer novca je obavljen sa sljedećim specifikacijama.",

        'type' => "Vrsta transakcije",

        'from' => "Izvorni račun",
        'to' => "Destination account",

        'desc' => "Opis transakcije",
        'action' => "Pogledajte transakciju",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Važno! Kršenje pravila| :shop",
        'category' => "Critical inform",
        'title' => "Vaša radnja je kažnjena",
        'action' => "Otvorite kontrolnu tablu prodavnice",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter vas je pozvao u Selldone",
        'title' => ":name vam je poslao :amount da vam pomogne da pokrenete svoju novu online web stranicu i unovčite je!",
        'message' => "Zdravo **:receiver_name**,<br><br>Dobrodošli u Selldone! Na Selldone možete lako kreirati svoju web lokaciju za e-trgovinu, blog, online zajednicu, pa čak i postaviti online POS sistem za ličnu prodaju—sve u roku od nekoliko minuta. To je kompletan operativni sistem za online poslovanje dizajniran da učini vaše poslovanje boljim, bržim i lakšim za pokretanje.<br><br> Prijavite se do <b>:date</b> i primite :amount vaučer za početak!",
        'accept' => "Prihvatite poziv",
        'owner' => "Vlasnik",
        'join-date' => "Pridružio se Selldone na",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Link za oporavak| :shop",
        'category' => "Sigurnost prodavnice",
        'title' => "Spremi vezu za oporavak od <b>:shop_name</b> .",
        'message' => "Ova e-poruka vam je poslana jer ste zatražili vraćanje vaše trgovine. Klikom na donju vezu vratit ćete svoju trgovinu i sve podatke koji joj pripadaju.",
        'action' => "Potvrdite oporavak prodavnice",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Koliko je novca Selldone uštedio za vaše poslovanje?',
        'sub-title' => 'Od datuma :start do :end',
        'infrastructure' => [
            'title' => 'Infrastruktura',
            'subtitle' => 'Serveri, CDN, Storage i druge usluge u oblaku',
        ],
        'experts' => [
            'title' => 'Stručnjaci i osoblje',
            'subtitle' => 'Programeri, održavanje i podrška',
        ],
        'total_save' => 'Ukupno ušteđeni novac'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Vaš nastup',
        'sub-title' => 'Pregled poslovanja od :start do :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vraćeni korisnici',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Kolica za kupovinu',
            'subtitle' => 'Prijavite broj novih korpi za kupovinu',

        ],
        'products' => [
            'title' => 'Pregled proizvoda',
            'subtitle' => 'Status proizvoda u trgovini prema vrsti',
            'value_name' => 'Proizvodi'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Ukupan broj pregleda web stranice',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Primili ste novu narudžbu. Idite na stranicu za obradu narudžbi u panelu vašeg dobavljača.",
        'subject' => "🛍 Nova narudžba primljena | :order_id",
        'your_revenue' => "Vaš prihod",
    ],
    'vendor-invite' => [
        'title' => 'Vendor Invitation',
        'message' => "Primili ste poziv da postanete prodavac :shop_name. Možete ga prihvatiti ili odbiti klikom na sljedeća dugmad.",
        'subject' => ":shop_name | Dobili ste poziv da postanete naš prodavac",
        'accept' => "Prihvatite i postanite prodavac",
        'reject' => "Odbiti",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Poziv da se pridružite našem timu',
        'message' => "Pozvani ste da se pridružite :vendor_name na :shop_name. Možete prihvatiti ili odbiti ovu pozivnicu koristeći dugmad ispod.",
        'subject' => "Poziv za pridruživanje :vendor_name|Postanite član tima",
        'accept' => "Prihvatite i pridružite se timu",
        'reject' => "Odbiti",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Vaš kod za prijavu za :shop",
        'header-message' => "Šaljemo vam ovu e-poštu jer ste zatražili kod za prijavu u trgovinu. Molimo pronađite svoju jednokratnu lozinku (OTP) ispod:",
        'footer-message' => "Ovaj kod će važiti 10 minuta. Ako niste zatražili ovaj kod za prijavu, zanemarite ovu e-poštu."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Potvrdite svoju e-poštu | :shop",
        'title' => 'Potvrda e-pošte',
        'header-message' => "Zdravo :name,<br>Potvrdite da je **:email** vaša adresa e-pošte klikom na dugme ispod ili korišćenjem linka ispod u roku od 48 sati.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Ažuriranja proizvoda| :shop",
        'title' => "Ažuriranje statusa proizvoda - zadnja 24 sata",
        'message' => "Nadam se da će vas ova poruka dobro naći. Ovo je kratko ažuriranje kako bismo vas obavijestili o statusu vaših proizvoda na našoj platformi u protekla 24 sata.\nTokom ovog perioda došlo je do promjena u statusu nekih proizvoda. Ove promjene mogu biti posljedica kupovina, ažuriranja zaliha ili drugih povezanih događaja.\nZa detaljnije informacije o svakom proizvodu, prijavite se na svoj račun i provjerite odjeljak 'Status proizvoda'.",
        'action' => "Otvorite Panel dobavljača",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Primljene masovne narudžbe| :shop | :date",
        'title' => "Obavijest o masovnim narudžbama",
        'message' => "Primili ste seriju masovnih narudžbi. Za više detalja posjetite stranicu za obradu narudžbi u vašem panelu. Listu narudžbi možete preuzeti i putem sigurnosne veze koja vrijedi 7 dana.<br><br>\n        <b>VAŽNO:</b> Ova veza vrijedi 7 dana.<br>\n        Ova veza je dinamična, tako da svaki put kada kliknete na nju, dobit ćete najnovije narudžbe za ovaj određeni datum. <b>To znači da ako se status plaćanja narudžbe promijeni u odbijeno, više nećete vidjeti tu narudžbu u preuzetom CSV-u, ili ako je narudžba plaćena, pojavit će se na listi.</b><br><br>\n        <ul>\n            <li> CSV sadrži plaćene narudžbe sa rezerviranim datumom u :date.</li>\n            <li>Rezervirani datum je datum kada korisnik klikne na plaćanje na stranici narudžbe.</li>\n        </ul>\n        <b>Da biste spriječili dupliranje narudžbi, uvijek provjerite narudžbu ID prije slanja.</b>",
        'action' => "Preuzmite listu narudžbi",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Neki artikli iz vaše narudžbe nisu prihvaćeni i ne mogu se isporučiti. Iznos za ove artikle će uskoro biti vraćen na vašu karticu."
    ]

];

