<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Acest mesaj salută un nou cumpărător în magazin.',
        ShopMailTemplateCodes::OrderCheckout => 'Această notificare este trimisă atunci când un cumpărător confirmă o comandă.',
        ShopMailTemplateCodes::OrderPayment => 'Această notificare confirmă plata cu succes efectuată de un client.',
        ShopMailTemplateCodes::OrderUpdate => 'Acest mesaj este trimis pentru a actualiza un cumpărător cu privire la starea comenzii sale.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Acest mesaj este trimis unui vânzător pentru a-l notifica despre o comandă confirmată.',
        ShopMailTemplateCodes::PosCheckout => 'Această notificare este trimisă pentru a confirma o comandă la punctul de vânzare pentru un cumpărător.',
        ShopMailTemplateCodes::PosPayment => 'Această notificare confirmă o plată la punctul de vânzare efectuată de un cumpărător.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Acest mesaj anunță vânzătorul cu privire la o achiziție făcută la punctul său de vânzare.',
        ShopMailTemplateCodes::ShopContact => 'Această notificare este trimisă atunci când a fost trimis un formular de contact.',
        ShopMailTemplateCodes::ShopGiftCard => 'Această notificare informează un utilizator că a primit un card cadou.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Acest mesaj salută un nou furnizor în magazin.',
        ShopMailTemplateCodes::ShopVendorInvite => "Acest mesaj este trimis pentru a invita un furnizor să se alăture pieței dvs.",
        ShopMailTemplateCodes::ShopVendorOrder => "Acest mesaj este trimis vânzătorului atunci când o comandă este primită fie în stare plătită, fie în ramburs la livrare (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Expediat zilnic pentru a actualiza furnizorii cu privire la starea produselor lor.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Acest mesaj este trimis pentru a invita un furnizor să se alăture pieței dvs.",

        ShopMailTemplateCodes::UserLogin => "Notificați utilizatorul cu detaliile de conectare, inclusiv adresa IP, data și dispozitivul, din motive de securitate.",
        ShopMailTemplateCodes::LoginCode => "Trimiteți un cod de parolă unic pentru ca utilizatorii să se conecteze la magazin.",

        ShopMailTemplateCodes::EmailVerifyLink => "Trimiteți un link pentru a verifica adresa de e-mail a utilizatorului. Acest e-mail este trimis atunci când un utilizator se înregistrează prin SMS și îi introduce e-mailul. Nu este trimis atunci când un utilizator se înregistrează direct cu autentificare socială sau e-mail.",

        ShopMailTemplateCodes::EmailBulkOrder => "Trimiteți o listă de comenzi primite și plătite în vrac pentru o anumită zi."


    ,

    ],


    'global' => [
        'greetings' => 'Bună, :name!',
        'end-statement' => 'Echipa de suport',

        'receiver_name' => 'Bună :user_name',
        'footer-help' => "Ai nevoie de ajutor? Întrebați la [support@selldone.com](mailto:support@selldone.com) sau vizitați [centrul de ajutor](https://selldone.com/community).",
        'selldone-team' => 'Echipa Selldone',
        'footer-shop' => "Dacă aveți nevoie de ajutor cu ceva, vă rugăm să nu ezitați să ne trimiteți un e-mail: :shop_mail",
        'accept' => "Accept",
        'reject' => "Respinge",
        'verify' => "verifica",
        'title' => "Titlu",
        'value' => "Valoare",
        'description' => "Descriere",
        'shop' => "Magazin",
        'shop-info' => "Informații magazin",
        'user' => "utilizator",
        'user-info' => "Informații despre cont",
        'license' => "Licență",
        'status' => "stare",
        'start' => "start",
        'end' => "Sfârşit",
        'renewal' => "Reînnoire",
        'view' => "Vedere",

        'balance' => "Echilibru",
        'card_number' => "Număr de card",
        'cvv' => "Cvv",
        'expire_date' => "Data de expirare",

        'Dashboard' => "Tabloul de bord",
        'order' => "comanda",
        'view_order' => "Vezi comanda",
        'pay_now' => "Pay now",

        'official_selldone' => "VANZAT OFICIAL",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valută",
        'free-balance' => "Sold liber",
        'locked-balance' => "Echilibrul blocat",
        'bot' => "Bot",
        'requests' => "Cereri",
        'baskets' => 'Cărucioare',
        'physical' => "Fizic",
        'virtual' => "Virtual",
        'file' => "Fişier",
        'service' => "Serviciu",
        'fulfillment' => "Împlinire",
        'open' => "Deschis",
        'reserved' => "Rezervat",
        'canceled' => "Anulat",
        'payed' => "Plătit",
        'cod' => "COD",
        'orders-count' => 'Comenzi',
        'payments-count' => 'Plăți',
        'confirms-count' => 'Confirmă',
        'sends-count' => 'Trimite',
        'delivers-count' => 'Livrează',
        'count' => 'Numara',
        'transactions-count' => 'Tranzacțiile contează',
        'success-transactions' => 'Tranzacții de succes',
        'total-amount' => 'Valoare totală',
        'amount' => 'Cantitate',
        'wage' => 'Salariu',
        'debug' => 'Depanați',
        'pos' => 'POS',
        'live' => 'Trăi',
        'CheckQueue' => 'Verificați coada',
        'OrderConfirm' => 'Confirmare comanda',
        'PreparingOrder' => 'Pregatirea comenzii',
        'SentOrder' => 'Comanda trimisă',
        'ToCustomer' => 'Livrat clientului',
        'Pending' => 'In asteptarea',
        'Accepted' => 'Admis',
        'Rejected' => 'Respins',
        'pc' => 'PC',
        'tablet' => 'Comprimat',
        'phone' => 'Telefon',
        'total' => 'Total',
        'view-detail' => 'Vezi detalii',
        'empty' => 'Gol',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Răspuns',
        'reactions' => 'Reacții',
        'Comments' => 'Comentarii',
        'last-comment' => 'Ultimul comentariu',
        'response-to' => 'Raspuns catre',
        'posts' => 'Postări',
        'post' => 'Post',

        'name' => 'Nume',
        'email' => 'E-mail',
        'type' => 'tip',
        'device' => 'Dispozitiv',
        'platform' => 'Platformă',
        'browser' => 'Browser',
        'time' => 'Timp',
        'Wallet' => 'Portofel',
        'date' => 'Data',

        'account' => 'Cont',
        'transaction' => 'Tranzacţie',
        'fee' => 'Taxa',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Factură',
        'category' => 'Categorie',
        'password' => 'Parola',
        'verify-login' => "Verificați și autentificați-vă",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hiper',
        'buy-now' => "Cumpără acum",
        'add-domain' => "Add Domain",
        'views' => 'Vizualizări',


        'country' => 'Țară',
        'address' => 'abordare',
        'postal' => 'Cod poștal',
        'building_no' => 'Clădirea #',
        'building_unit' => 'Unitate #',
        'message' => 'Mesaj',


        'customer' => 'Client',
        'cart-items' => 'Articole din coș',
        'payment' => 'Plată',
        'receiver' => 'Receptor',
        'virtual-items' => 'Articole virtuale',
        'no-payment' => 'Fara plata!',

        'enable' => 'Permite',
        'access' => 'Acces',
        'bank' => 'Informații bancare',

        'vendor' => 'Furnizor',

        'view_content' => "Vizualizați conținutul complet",
        'files' => 'Fișiere',
        'download' => 'Descarca',
        'file_name' => 'Nume de fișier',
        'file_size' => 'mărimea',

        'subscription' => 'Abonament',
        'products' => 'Produse',
        'vendor_products' => 'Produse vânzători',

        'pickup' => 'Ridicare',

        'minutes' => 'Minute',
        'hours' => 'Ore',

        'refund' => 'Rambursare',
        'recipient_address' => 'Adresa Destinatarului',
        'signature' => 'Semnătura',
        'blockchain' => 'Blockchain',
        'details' => 'Detalii',


    

        'Shop' => 'Magazin',
        'dashboard' => 'bord',
        'comments' => 'comentarii',
        'wallet' => 'portofel',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Raport de performanță, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Raport sezonier, Selldone'
        ],
        'Onboarding' => [
            'id' => 'Bună',
            'name' => 'Aprobă, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Suport :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verificați, Selldone'
        ],
        'Welcome' => [
            'id' => 'Bună',
            'name' => 'Comunitate, Selldone'
        ],
        'NewShop' => [
            'id' => 'negustori',
            'name' => 'Aprobă, Selldone'
        ],
        'Approve' => [
            'id' => 'aproba',
            'name' => 'Aprobă, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Managementul comenzilor :name'
        ],

        'Recovery' => [
            'id' => 'recuperare',
            'name' => 'Echipa de recuperare Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'În așteptare ⌛',
        'PAYED' => 'Plătit ✅',
        'CANCELED' => 'Anulat ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Ofițer și supraveghetor',
            'AUDITING' => 'Manager de audit',
            'EMPLOYEE' => 'Angajat',
            'PRODUCT' => 'Manager de produse',
            'CONTENT' => 'Manager de continut',
            'MARKETING' => 'manager de marketing',
            'VIEWER' => 'Vizualizator',

        ],
        'subject' => ":inviter v-a invitat ca :level| :shop",
        'category' => "Invitația personalului",
        'title' => "Ai fost invitat la <b>:shop_name</b> ca <b>:level</b> .",
        'message' => "Ați primit o invitație de a colabora cu echipa <b>:shop_title</b> în afaceri. Aveți opțiunea de a accepta sau de a refuza această ofertă. Dacă alegeți să acceptați, vă rugăm să vă conectați la serviciul Selldone pentru a vă confirma decizia. După confirmare, veți avea acces la secțiunea de gestionare a magazinului.",

    ],

    'welcome-email' => [
        'subject' => "👋 Bun venit :name, să începem cu Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Bine ați venit la Selldone",
        'message' => "Vă mulțumim că ați ales Selldone! Acum faceți parte dintr-o comunitate vibrantă care conectează vânzătorii globali la clienți, companiile locale la întreprinderi și persoanele fizice cu corporații. Toate instrumentele noastre Master și Pro vă sunt disponibile **gratuit** și **nelimitat**. Suntem aici pentru a vă sprijini și pentru a vă deschide porțile succesului.",

        'index' => "Pasul :step.",

        'step-domain' => [
            'title' => 'Adăugați domeniul dvs. personalizat',
            'message' => "Pentru a începe, adăugați gratuit domeniul dvs. personalizat în Tabloul de bord al magazinului, sub Setări > Setări domenii.",
            'action' => 'Gestionați-mi domeniile',
        ],
        'step-landing' => [
            'title' => 'Personalizați-vă pagina de pornire',
            'message' => "Personalizați-vă pagina de pornire accesând Tabloul de bord > Pagini. Alegeți o pagină de destinație sau creați una nouă. Este ușor și intuitiv și puteți începe să lucrați la el imediat.",
            'action' => 'Personalizați pagina mea de destinație',
        ],
        'step-payment' => [
            'title' => 'Configurați metode de plată',
            'message' => "Începeți să acceptați plăți direct în contul dvs. bancar. Pentru a vă conecta furnizorii de plăți, cum ar fi Stripe, PayPal și altele, accesați Tabloul de bord > Contabilitate > Gateway.",
            'action' => 'Adăugați metode de plată',
        ],
        'step-products' => [
            'title' => 'Adăugați produsele dvs',
            'message' => "Adăugați cu ușurință produse și categorii în Tabloul de bord > Produse. Este la fel ca și gestionarea fișierelor și folderelor de pe computerul dvs. - gata de drag și plasare. De asemenea, puteți importa produse în vrac folosind Excel. Este disponibil un model de șablon pentru a vă ajuta să începeți.",
            'action' => 'Gestionați-mi produsele',
        ],
        'step-shipping' => [
            'title' => 'Configurați metode de livrare',
            'message' => "Pentru a taxa clienții pentru expediere, definiți metodele de expediere în Tabloul de bord > Logistică > Livrare. Puteți seta prețuri și asistență diferite pentru diferite locații. Nu uitați să setați originea depozitului în Dashboard > Logistic > Warehouse.",
            'action' => 'Gestionați metodele de livrare',
        ],
    

        'seller' => [
            'title' => 'Ești vânzător?',
            'message' => 'Pentru a începe să vindeți, introduceți tabloul de bord în Selldone prin linkul de mai jos și creați primul magazin complet gratuit. Acest lucru va dura câteva minute și veți avea propriul magazin și site online. Vă vom ghida apoi către următorii pași și vom obține gateway-ul de plată.',
            'action' => 'Conectați-vă la tabloul de bord',
        ],
        'buyer' => [
            'title' => 'Sunt cumpărător',
            'message' => 'Felicitări. Odată ce sunteți membru Selldone, veți scăpa de toate necazurile legate de calitatea de membru și de autentificare în magazinele online. Pentru a beneficia de orice magazin și site care utilizează platforma Selldone, vă puteți conecta cu un singur clic și vă puteți face achiziția simplă, rapidă și sigură.',
        ],
    ],


    'charge-account' => [
        'category' => 'Portofel > Cont > Debitare',
        'title' => "Taxa de succes",
        'message' => "Contul dvs. <b>:account_number</b> a fost debitat cu succes <b>:amount</b> .",
        'account' => 'Cont',
        'charge' => 'Încărca',
        'balance' => 'Echilibru',
        'footer' => "Faceți afacerile ușoare, realizabile și accesibile oricui din întreaga lume."
    ],

    'verify-email' => [
        'subject' => "🙌 Completează-ți înscrierea la Selldone! Verificați linkul.",
        'category' => "ESTI LA UN PAS DEPARTE",
        'title' => "Verifică-ți adresa de email",
        'message' => "Bună :name,<br><br>Vă mulțumim că ați ales Selldone!<br><br>Pentru a confirma că <b>:email</b> este adresa dvs. de e-mail corectă sau vă rugăm să faceți clic pe butonul de mai jos. Aveți la dispoziție 48 de ore pentru a finaliza această verificare.",
        'footer' => "Dacă întâmpinați probleme la a face clic pe butonul Verificați, copiați și inserați adresa URL de mai jos în browserul dvs. web: :activation_url",
        'next-step' => "În continuare, vă vom trimite câteva materiale utile și un ghid pas cu pas pentru a vă facilita adăugarea domeniului personalizat, configurarea plăților, adăugarea produselor și obținerea primei comenzi.",

    ],
    'verify-email-code' => [
        'subject' => "Cod de verificare pentru :name",
        'category' => "SECURITY",
        'title' => "Codul de verificare a e-mailului",
        'message' => "Bună, :name,<br><br>Pentru a confirma că <b>:email</b> este adresa dvs. de e-mail corectă, vă rugăm să introduceți următorul cod în următoarele <b>10 minute</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Magazinul tău este gata| :name",
        'category' => "ESTI LA UN PAS DEPARTE",
        'title' => "Configurare finalizată",
        'account_title' => "Contul tău",
        'account_msg' => "Verificați și conectați-vă la contul dvs. cu aceste informații.",
        'shop_msg' => "Informații despre cont pe sistemul de operare Selldone business.",

    ],

    'reset2fa' => [
        'category' => "MESAJ OFICIAL DE SECURITATE",
        'title' => "Solicitați dezactivarea autentificării în 2 pași",
        'message' => "Primiți acest e-mail deoarece am primit o solicitare de resetare a autentificării în doi factori pentru contul **:name** cu **:email** e-mail.<br><br>Am găsit următoarele detalii pentru contul dvs.:",
        'footer' => "Dacă nu ați solicitat resetarea parolei, nu este necesară nicio acțiune suplimentară.",
        'action' => 'Dezactivați autentificarea în doi pași',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Magazinul tău este gata acum!",
        'category' => "NĂScut NOU MAGAZIN ONLINE ÎN LUME",
        'title' => "Felicitări, :name!",
        'message' => "<b>Felicitari, :name! Noua ta afacere online este acum activă!</b> Suntem încântați să vă urăm bun venit în comunitatea Selldoners. Ați făcut primul pas către succes și suntem aici pentru a vă ajuta la fiecare pas.<br>Acum că magazinul dvs. este gata, să ne asigurăm că sunteți pregătit să primiți plăți direct de la clienți și să începeți să vă dezvoltați imperiul. Dacă aveți vreodată nevoie de ajutor, suntem la doar un mesaj distanță — echipa noastră de asistență este întotdeauna aici pentru dvs. <br><br><b>Pașii următori importanți:</b> Pentru a începe, asigurați-vă că sunteți pregătit pentru a primi plăți și a opera fără probleme. Vă vom ghida prin fiecare etapă pentru ca magazinul dvs. să funcționeze fără probleme.",
        'pdf-book' => "Nu ratați manualul atașat: Faceți-vă afacerea ca un joc",

        'account' => [
            'title' => 'Pasul 1: Creați un cont în portofelul Selldone',
            'message' => "Pentru a începe, creați un cont în portofelul dvs. Selldone. Aici îți vor fi deduse taxele și, de asemenea, vei completa pentru a menține magazinul să funcționeze fără probleme. Dacă soldul tău devine vreodată negativ, nu-ți face griji! Magazinul dvs. va continua să funcționeze fără întrerupere.",
            'action' => 'Conectați-vă la portofel',
        ],

        'shop-account' => [
            'title' => 'Pasul 2: conectați contul la magazin',
            'message' => "Apoi, conectați contul dvs. de portofel la magazinul dvs. Accesați <b>Store > Contabilitate > Factură</b> și conectați-vă portofelul. Acest lucru asigură că toate plățile clienților sunt depuse direct în contul dvs. bancar—Selldone nu deduce nicio sumă din câștigurile dvs.",
            'action' => 'Panoul de facturi din magazin',
        ],

        'gateway' => [
            'title' => 'Pasul 3: Conectați Gateway-ul de plată online',
            'message' => "Acum, haideți să vă configurați poarta de plată online. Accesați <b>Store > Contabilitate > Port</b> și faceți clic pe <b>Add New Port</b>. Selectați moneda dvs. și veți vedea o listă de gateway-uri de plată disponibile. Conectarea unui gateway este rapidă și ușoară, dar dacă aveți nevoie de ajutor, nu ezitați să consultați ghidurile Selldone sau să ne contactați.",
            'action' => 'Adăugați un portal la magazin',
        ],

        'domain' => [
            'title' => 'Ultimul pas: conectarea unui domeniu dedicat',
            'message' => "Acum, conectați domeniul dvs. personalizat la magazinul dvs. Acest lucru permite clienților să vă achiziționeze produsele sau serviciile și să vă efectueze plăți direct.",
            'action' => 'Introducerea și primirea de carduri cadou nelimitate',
        ],
    ],


    'basket-list' => [
        'item' => "articol",
        'count' => "Numara",
        'price' => "Preț",
        'discount-code' => "Cod de reducere",
        'customer-club' => 'Clubul Clienților',
        'shipping' => "livrare",
        'total' => "Total",
        'offer' => "Oferi",
        'coupon' => "Cupon",
        'lottery' => "Adjudecare",
        'tax' => "Impozit",
        'tax_included' => "Inclus in pret",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metodă',
        'amount' => 'Cantitate',
        'giftcard' => 'Gift card',
        'payment' => 'Plată',
    ],


    'shop-subscription-email' => [
        'category' => "Actualizare abonament",
        'title' => "Licență de magazin: :shop_title",
        'title-reserved' => "Licență de rezervă: :shop_title",
        'title-active' => "Licență activă: :shop_title",
        'title-finished' => "Licență terminată: :shop_title",
        'title-cancel' => "Anulați licența: :shop_title",
        'message' => "Planul dvs. de licență pentru magazin a fost actualizat,",
        'RESERVED' => "⚡ Planul tău de abonament a fost **rezervat**.",
        'ACTIVE' => "🟢 Planul tău de abonament a fost **activat**.",
        'FINISHED' => "🚧 Planul tău de abonament a fost **terminat**.",
        'CANCEL' => "⛔ Planul tău de abonament a fost **anulat**.",
    ],

    'support' => [
        'subject' => "Centru de suport|:name a răspuns",
        'category' => "Centru de asistență",
        'title' => "Ai primit un răspuns",
        'action' => "Deschideți administratorul magazinului",
    ],

    'shop-customer-join' => [
        'subject' => "Alăturați-vă :shop_title",
        'category' => "Sărbătoarea noilor clienți",
        'title' => "Ne bucurăm pentru calitatea ta de membru",
        'action' => "Vizitează acum",
    ],

    'shop-vendor-join' => [
        'subject' => "Incorporarea furnizorului | :shop_title",
        'category' => "Sărbătoarea noului furnizor",
        'title' => "Ne bucurăm pentru calitatea ta de membru",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Card cadou :shop_title",
        'category' => "Adăugați un card nou",
        'title' => "Felicitări, ați primit un card cadou",
        'action' => "Cumpără acum",
        'message' => "Ați primit un card cadou în valoare de :balance :currency. Veți putea cumpăra din magazinul nostru cu acest card cadou.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centru de suport| :shop",
        'category' => "sprijin",
        'title' => "Ai primit un răspuns",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️Confirmarea comenzii|Comanda :order_id",
        'title' => "comanda",
        'message' => "Ai plasat o comandă la magazinul nostru. Am primit comanda dvs. și vă vom trimite un alt e-mail odată ce plata este confirmată."
    ,

        'payments' => 'Plăți',
    ],

    'order-payment' => [
        'subject' => "🛍️Confirmare plată|Comanda :order_id",
        'title' => "Ordin de plata",
        'message' => "Plata dvs. a fost finalizată,<br> Avem comanda ta. Vă vom trimite un alt e-mail când comanda dvs. este expediată.",
    

        'payments' => 'Plăți',
    ],

    'order-update' => [
        'subject' => "🛍️ Actualizarea stării comenzii|Comanda :order_id",
        'title' => "Actualizarea stării comenzii",
        'message' => "Comanda dvs. a fost actualizată. Puteți verifica cea mai recentă stare a acestei comenzi în contul dvs.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Comanda dvs. este în coada de procesare. Vă vom anunța când este pregătit.",
                'OrderConfirm' => "Comanda dvs. este confirmată și pregătirea a început.",
                'PreparingOrder' => "Comanda dvs. este în curs de pregătire și va fi expediată în curând.",
                'SentOrder' => "Comanda dvs. a fost expediată. Îl vei primi în scurt timp.",
                'ToCustomer' => "Comanda dvs. a fost livrată. Sperăm să vă placă!",

                'PreparingOrder-PICKUP' => "Comanda dvs. este în curs de pregătire. Veți primi o notificare când este gata pentru ridicare.",
                'SentOrder-PICKUP' => "Comanda dvs. este gata pentru ridicare. Vă rugăm să veniți la magazin să-l ridicați.",
                'ToCustomer-PICKUP' => "Comanda dvs. a fost ridicată. Sperăm să vă placă!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Comanda dvs. este în coada de procesare. Vă vom anunța când este gata.",
                'OrderConfirm' => "Comanda dvs. este confirmată și pregătirea este în curs.",
                'PreparingOrder' => "Comanda dumneavoastră este în curs de pregătire și vă va fi trimisă în curând.",
                'ToCustomer' => "Comanda dvs. virtuală a fost livrată în contul dvs. Multumesc!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Solicitarea dvs. de servicii este în coadă. Vă vom anunța când începem.",
                'OrderConfirm' => "Serviciul dvs. este confirmat și ne pregătim să începem.",
                'PreparingOrder' => "Vă pregătim serviciul și vă vom anunța odată ce este finalizat.",
                'ToCustomer' => "Serviciul dvs. este complet. Vă mulțumim că ne-ați ales!"
            ],
            'FILE' => [
                'PreparingOrder' => "Dosarul dvs. este în curs de pregătire și va fi disponibil în curând.",
                'ToCustomer' => "Fișierul dvs. este gata și a fost livrat. Acum îl puteți descărca."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Comanda dvs. de abonament este în coadă. Vă vom anunța când începe procesarea.",
                'OrderConfirm' => "Abonamentul dvs. a fost confirmat și este în curs de configurare.",
                'PreparingOrder' => "Vă pregătim abonamentul și va începe în curând.",
                'SentOrder' => "Abonamentul dvs. a fost activat. Veți primi actualizări în curs.",
                'ToCustomer' => "Serviciul dvs. de abonament a fost activat cu succes."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Felicitări :name|Voucher nou: :title',
        'category' => "FELICITĂRI, VOUCHER NOU",
        'message' => "Bună, :name,<br><br>Ați primit un nou voucher cadou de la noi! Poți câștiga și mai multe vouchere prezentând Selldone prietenilor tăi și tuturor celor pe care îi cunoști. Acest voucher valorează **:price :currency**.<br><br>Ați făcut primul pas și suntem aici pentru a vă ajuta să deblocați noi funcții cu voucherul dvs.! Conectați-vă cu **:email** și găsiți voucherul dvs. în Magazin **Tabloul de bord** > **Setări** > **Licență**.<br><br>Felicitări!",
        'action' => "Panoul meu de control",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Felicitări, dragă :name | Ai primit un cadou',
        'category' => "Anunțul de primire a unui cadou",
        'title' => "Cadouri pentru tine",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Cadouri",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nouă comandă primită| :order_id",
        'title' => "New Order",
        'message' => "Ați primit o nouă comandă. Vă rugăm să accesați pagina de procesare a comenzii din magazinul dvs.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Informațiile dvs. completate',
        'output-form-title' => 'Informații despre articolul achiziționat',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Raport săptămânal :time',
        'title' => 'Raport săptămânal de performanță a magazinului',
        'message' => "Acesta este raportul săptămânal al magazinului dvs. de la <b>:start</b> la <b>:end</b>. Acest raport include sfaturi pentru îmbunătățirea afacerii dvs., puteți verifica, de asemenea, starea magazinului dvs. online și comenzile recente. Sper să aveți o zi și o săptămână bună înainte."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Raportul dvs. de economisire :amount în ultimele trei luni| :shop_title',
        'title' => 'Raport sezonier despre activitatea dvs. de afaceri, recompense și economii financiare',
        'message' => "Acesta este raportul dvs. sezonier <b>:shop_title</b> de la <b>:start</b> la <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Conturi conectate',
        'sub-title' => 'Care este cea mai recentă stare a conturilor portofel conectate la magazinul meu?',
        'view-wallet' => 'Vizualizați portofelul',
        'tip-title' => 'Sfaturi importante',
        'tip' => "Configurați un portofel Selldone gratuit și conectați-l la magazinul dvs. Chiar dacă soldul dvs. este negativ, clienții pot în continuare să cumpere și să plătească fără probleme. Nu vă faceți griji, operațiunile și datele magazinului dvs. vor continua fără probleme timp de până la 1 lună, fără întreruperi.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Conectați-vă la cont'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplicații instalate',
        'sub-title' => 'Lista de aplicații pe care le-ați instalat în magazin săptămâna aceasta.',
        'tip' => "Doriți să găsiți mai multe aplicații pentru magazinul dvs.?",
        'view-app-store' => 'Vizitați Magazinul de aplicații Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Boții dvs. de magazin',
        'sub-title' => 'Boți de vânzări activi în magazinul meu.',
        'tip-title' => 'Vânzare de bot',
        'tip' => "Selldone v-a furnizat roboți de vânzări automate. Tot ce trebuie să faceți este să accesați panoul Add-ons> Bots și să vă activați roboții din magazin. Rețineți că serviciul relevant trebuie să fie disponibil în țara dvs.",
        'view-bots' => 'Gestionați roboții',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Comunicarea cu Clienții',
        'sub-title' => 'Câte contacte am avut cu clienții mei în această săptămână?',
        'faqs' => 'întrebări frecvente',
        'tickets' => 'Bilete pentru clienți',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Statutul utilizatorilor',
        'sub-title' => 'De la data :start to :end',
        'users' => [
            'title' => 'Clienți',
            'subtitle' => 'Înscrieți-vă utilizatori',
        ],
        'views' => [
            'title' => 'Vizite',
            'subtitle' => 'De câte ori ai vizitat magazinul',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utilizatori returnați',

        'shop_views' => 'Vizualizări ale magazinului',
        'baskets' => [
            'title' => 'Coșurile de cumpărături',
            'subtitle' => 'Raportați numărul de coșuri de cumpărături noi',
        ],
        'products' => [
            'title' => 'Prezentare generală a produselor',
            'subtitle' => 'Starea produselor din magazin după tip',
            'value_name' => 'Produse'
        ],
        'products_count' => 'Tipuri de produse',
        'views_count' => 'Număr de vizualizări',
        'sell_count' => 'Număr de vânzări',
        'send_count' => 'Număr de expedieri',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panou pentru principalii vânzători de Drop Shipping Selldone.',
        'total_fulfillments' => 'Total comenzi primite',
        'ds_count' => 'Comenzi primite',
        'statistics_title' => 'Raportați comenzile primite',
        'ds_cancels' => 'Anulați de către vânzătorul de interfață',
        'ds_rejects' => 'Anulați de către dvs',
        'tip' => "Sunteți un vânzător important de mărfuri? Dețineți un depozit, fabrică sau distribuitor de produse? Puteți oferi produsele dumneavoastră altor vânzători în serviciul Selldone Drop Shipping pentru a vă vinde produsul pe scară largă. Trimiteți-ne un e-mail la support@selldone.com pentru a vă ghida.",
        'view-drop-shipping-panel' => 'Conectați-vă la panoul cu ridicata',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Rate de schimb',
        'sub-title' => 'Lista celor mai recente rate de conversie valutară din magazinul dvs.',
        'from' => 'Moneda sursă',
        'to' => 'Moneda de destinație',
        'rate' => 'Rata de conversie',
        'view-exchange-panel' => 'Gestionați cursurile de schimb',
    

        'vew-exchange-panel' => 'panoul de gestionare a cursului de schimb',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contracte de expertiză',
        'sub-title' => 'Ce profesioniști lucrează la magazinul meu?',
        'cost' => 'Valoarea contractului',
        'duration' => 'Durată',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Anulare',
        'end_at' => 'Data de livrare',
        'tip' => 'Puteți angaja cei mai buni specialiști din Selldone pentru a vă dezvolta afacerea.',
        'view-experts' => 'Faceți clic pentru a începe.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Raportați gateway-uri de plată active pe magazin :shop.',
        'tip-title' => 'Sfaturi importante',
        'tip' => "Accesați pagina de gestionare a portalului din magazinul dvs. și adăugați cel puțin un port în câteva minute. Clienților tăi le place să plătească rapid și în siguranță prin portaluri online.",
        'view-shop-gateways' => 'Conectați-vă la gestionarea portalului magazinului meu.',
        'view-gateways' => 'Vedeți mai multe gateway-uri',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Comenzi',
        'sub-title' => 'Lista comenzilor primite saptamana aceasta.',
        'total_baskets' => 'Total comenzi',
        'total_posBaskets' => 'Total comenzi în numerar',
        'pos-title' => 'Cutia de magazin POS',
        'chart-label' => 'Comenzi finalizate (aceste comenzi nu sunt neapărat plătite!)',
        'tip-title' => 'Ar trebui să încerci mai mult...',
        'tip' => "Nici un simplu succes.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centru de procesare',
        'sub-title' => 'Câtă comandă am procesat în magazin săptămâna aceasta?',
        'tip-title' => 'Nu ai avut vânzare!',
        'tip' => "Din păcate, nu ați avut vânzări în această săptămână. Trebuie să ajungeți mai mult la magazinul dvs. Puteți adăuga mai multe produse, puteți alege imagini mai bune sau puteți scrie descrieri mai bune pentru produsele dvs. Luați în considerare un loc de muncă cu normă întreagă pentru afacerea dvs. Dacă o faci corect și nu te simți frustrat, vei reuși.",
        'view-process-center' => 'Vedeți centrul de proces',
        'return' => [
            'title' => 'Comanda returnata',
            'subtitle' => 'Raportați comenzile returnate.',
            'tip-title' => 'Stiai asta ...',
            'tip' => "Puteți crea câte case de marcat aveți nevoie cu Selldone POS! Fie că este vorba despre tableta, mobilul sau laptopul dvs., puteți transforma orice dispozitiv în punctul de vânzare al magazinului dvs. Este simplu, rapid de configurat și complet pregătit pentru serverul dvs. Începe să-l folosești astăzi!",
            'view-pos' => 'Conectați-vă la Casiera magazinului meu online'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesiuni',
        'sub-title' => 'De câte ori mi-am vizitat magazinul?',
        'countries-title' => 'Care țări au fost cele mai vizitate?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Vrei să faci bani fără a cheltui un dolar?',
        'message' => "Dragă :name, poți accesa Tabloul de bord > Demonetizare și poți crea un link de recomandare. Trimite link-ul prietenilor tăi, primești un card cadou Selldone și un procent din plățile prietenului tău. Rețineți că cardul cadou va fi trimis atât dvs., cât și prietenului dvs.",
        'action' => 'Vezi linkul meu de prezentare',
        'mail-clip' => "<b style='color: #C2185B'>Important:</b> dacă utilizați servicii de e-mail, cum ar fi Gmail, care limitează lungimea e-mailului, găsiți următoarea opțiune la sfârșitul e-mailului pentru a afișa raportul complet și faceți clic pe el:",

        'no-coin-reward' => "<b style='color: #C2185B'>Ne pare rău:</b> Activitatea dvs. nu a îndeplinit cerințele pentru a obține recompensă SEL Coins gratuită. Încercați mai mult și vindeți mai mult în magazinul dvs. pentru sezonul următor.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Recompensă:</b> Felicitări, datorită performanței tale fantastice, ți-am oferit o recompensă gratuită de :amount SEL Coin.",

        'need-buy-license' => "<b>Măriți-vă afacerea: </b> Se pare că încă nu ați înregistrat niciun plan de abonament pentru site-ul dvs. web! Faceți upgrade acum pentru a debloca mai multe funcții pentru doar :amount pe lună, dacă plătiți anual.",
        'not-afford-message' => "Dacă nu vă permiteți sau aveți probleme cu plata, nu ezitați să ne spuneți prin support@selldone.com.",
        'add-domain' => "<b>De ce să nu ai un domeniu personalizat pentru afacerea ta?</b><br> Adăugați un domeniu pe site-ul dvs. acum; este gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone este un<del> produs</del> <span style = 'color: forestgreen'>comunitate</span> .<br> Fii un vânzător profesionist!",
        'message' => "Urmărește paginile oficiale ale Selldone pe Twitter, LinkedIn și rețelele sociale. Trimiteți-ne orice comentarii, solicitări sau critici sau participați la discuții despre Selldone. De asemenea, facem parte din comunitatea Selldone pe care <b>o creați</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Am primit comenzi noi de avocado | :shop_title :time',
        'title' => "Raport de performanță pentru ultimele 24 de ore",
        'message' => "Clienții dvs. așteaptă ca comenzile dvs. să fie revizuite și stabilite prețul. Răspundeți la solicitările clienților dvs. cât mai curând posibil pentru a obține mai multe vânzări.",
        'card_title' => "Comenzi în coadă",
        'card_subtitle' => "De la :date",

        'card_payed' => "Comenzi plătite"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Răspundeți la postarea dvs. din :community_title',
        'title' => ":name și :count alții au comentat postările tale.",
        'message' => "Bună :name, postările tale atrag atenția! Ați primit comentarii în comunitatea noastră. Conectați-vă la contul dvs. pentru a vă alătura discuției și a vedea ce spun toată lumea.",
        'title-simple' => ":name a comentat postările tale.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Răspunde la subiectul tău :topic_title',
        'title' => ":name și :count alții au răspuns la subiectul tău.",
        'message' => "Bună :name, subiectul tău atrage atenția! Ați primit răspunsuri în comunitatea noastră. Conectați-vă la contul dvs. pentru a vă alătura discuției și a vedea ce spun toată lumea.",
        'title-simple' => ":name a răspuns la subiectul tău.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Noua conectare :name',
        'category' => 'Notificări de securitate',
        'title' => "Conectați-vă la Cont",
        'message' => "Dragă :name, v-ați conectat la contul dvs. Selldone.",   // Login in selldone (seller)
        'message-shop' => "Dragă :name, ați fost conectat la :shop_title .",  // Login in shop (buyer)

        'footer' => "Dacă nu sunteți autentificat, vă rugăm să vă schimbați parola.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Retragere",
        'deposit' => "Depozit",

        'withdraw_subject' => "retrage din cont :account",
        'deposit_subject' => "Depuneți în contul :account",

        'message' => "Transferul de bani s-a făcut cu următoarele specificații.",

        'type' => "Tipul tranzacției",

        'from' => "Cont sursă",
        'to' => "Destination account",

        'desc' => "Descrierea tranzacției",
        'action' => "Vedeți tranzacția",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Important! Încălcarea regulilor| :shop",
        'category' => "Informare critică",
        'title' => "Magazinul dvs. a fost penalizat",
        'action' => "Deschideți tabloul de bord al magazinului",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter v-a invitat la Selldone",
        'title' => ":name ți-a trimis :amount pentru a ajuta la lansarea noului tău magazin online și pentru a-l genera bani!",
        'message' => "Bună **:receiver_name**,<br><br>Bine ați venit la Selldone! Pe Selldone, vă puteți crea cu ușurință site-ul dvs. de comerț electronic, blogul, comunitatea online și chiar puteți configura un sistem POS online pentru vânzări în persoană, totul în câteva minute. Este sistemul de operare online complet conceput pentru a vă face afacerea mai bună, mai rapidă și mai ușor de rulat.<br><br>Înscrieți-vă până la <b>:date</b> și primiți un voucher :amount pentru a începe!",
        'accept' => "Accepta invitatia",
        'owner' => "Proprietar al",
        'join-date' => "Pe Selldone de atunci",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Link de recuperare| :shop",
        'category' => "Securitatea magazinului",
        'title' => "Link de recuperare a stocării pentru <b>:shop_name</b> .",
        'message' => "Acest e-mail v-a fost trimis deoarece ați solicitat să vă restabiliți magazinul. Făcând clic pe linkul de mai jos, veți recupera magazinul dvs. și toate datele care îi aparțin.",
        'action' => "Confirmați recuperarea magazinului",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Câți bani a economisit Selldone pentru afacerea ta?',
        'sub-title' => 'De la data :start to :end',
        'infrastructure' => [
            'title' => 'Infrastructură',
            'subtitle' => 'Servere, CDN, stocare și alte servicii cloud',
        ],
        'experts' => [
            'title' => 'Experți și personal',
            'subtitle' => 'Dezvoltatori, întreținere și asistență',
        ],
        'total_save' => 'Bani economisiți în total'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Performanța ta',
        'sub-title' => 'Prezentare generală a afacerii de la :start to :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utilizatori returnați',

        'shop_views' => 'Vizualizări ale magazinului',
        'baskets' => [
            'title' => 'Coșurile de cumpărături',
            'subtitle' => 'Raportați numărul de coșuri de cumpărături noi',

        ],
        'products' => [
            'title' => 'Prezentare generală a produselor',
            'subtitle' => 'Starea produselor din magazin după tip',
            'value_name' => 'Produse'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Numărul total de vizualizări ale paginilor site-ului web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Ați primit o nouă comandă. Vă rugăm să accesați pagina de procesare a comenzii din panoul furnizorului dvs.",
        'subject' => "🛍️ Nouă comandă primită| :order_id",
        'your_revenue' => "Venitul dvs",
    ],
    'vendor-invite' => [
        'title' => 'Invitația vânzătorului',
        'message' => "Ați primit o invitație pentru a deveni furnizor de :shop_name. O puteți accepta sau respinge făcând clic pe următoarele butoane.",
        'subject' => ":shop_name |Invitație de a deveni furnizorul nostru",
        'accept' => "Acceptați și deveniți un furnizor",
        'reject' => "Respinge",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitație să vă alăturați echipei noastre',
        'message' => "Ați fost invitat să vă alăturați :vendor_name la :shop_name. Puteți accepta sau refuza această invitație folosind butoanele de mai jos.",
        'subject' => "Invitație de înscriere la :vendor_name|Deveniți membru al echipei",
        'accept' => "Acceptați și alăturați-vă echipei",
        'reject' => "Respinge",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Codul dvs. de conectare pentru :shop",
        'header-message' => "Vă trimitem acest e-mail deoarece ați solicitat un cod de conectare pentru magazin. Vă rugăm să găsiți mai jos parola dvs. unică (OTP):",
        'footer-message' => "Acest cod va fi valabil timp de 10 minute. Dacă nu ați solicitat acest cod de conectare, vă rugăm să ignorați acest e-mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verificați-vă adresa de e-mail| :shop",
        'title' => 'Verificare e-mail',
        'header-message' => "Bună, :name,<br>Vă rugăm să confirmați că **:email** este adresa dvs. de e-mail făcând clic pe butonul de mai jos sau utilizând linkul de mai jos în termen de 48 de ore.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Actualizări de produse| :shop",
        'title' => "Actualizare privind starea produsului - ultimele 24 de ore",
        'message' => "Sper că acest mesaj te va găsi bine. Aceasta este o scurtă actualizare pentru a vă informa despre starea produselor dvs. pe platforma noastră în ultimele 24 de ore.\nÎn această perioadă s-au produs schimbări în statutul unor produse. Aceste modificări se pot datora achizițiilor, actualizărilor de stoc sau altor evenimente conexe.\nPentru informații mai detaliate despre fiecare produs, vă rugăm să vă conectați la contul dvs. și să verificați secțiunea „Starea produsului”.",
        'action' => "Deschideți Panoul furnizorului",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Comenzi în vrac primite| :shop | :date",
        'title' => "Notificare comenzi în vrac",
        'message' => "Ați primit un lot de comenzi în vrac. Vă rugăm să vizitați pagina de procesare a comenzii din panoul dvs. pentru mai multe detalii. De asemenea, puteți descărca lista de comenzi prin linkul securizat furnizat, valabil 7 zile.<br><br>\n        <b>IMPORTANT:</b> Acest link este valabil 7 zile.<br>\n        Acest link este dinamic, așa că de fiecare dată când faceți clic pe el, veți primi cele mai actualizate comenzi pentru această dată specifică. <b>Înseamnă că dacă starea de plată a comenzii se schimbă în respins, nu veți mai vedea acea comandă în CSV descărcat sau, dacă comanda este plătită, va apărea în listă.</b><br><br>\n        <ul>\n            <li>CSV conține comenzi plătite cu o dată rezervată în :date.</li>\n            <li>Data rezervată este data la care utilizatorul face clic pe finalizarea comenzii pe pagina comenzii.</li>\n        </ul>\n        <b>Pentru a preveni comenzile duplicate, verificați întotdeauna Comanda ID înainte de a trimite.</b>",
        'action' => "Descărcați lista de comenzi",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Unele articole din comanda dumneavoastră nu au fost acceptate și nu pot fi livrate. Suma pentru aceste articole va fi rambursată pe cardul dumneavoastră în curând."
    ]

];
