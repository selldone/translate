<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ky mesazh mirëpret një blerës të ri në dyqan.',
        ShopMailTemplateCodes::OrderCheckout => 'Ky njoftim dërgohet kur një blerës konfirmon një porosi.',
        ShopMailTemplateCodes::OrderPayment => 'Ky njoftim konfirmon pagesën e suksesshme të bërë nga një klient.',
        ShopMailTemplateCodes::OrderUpdate => 'Ky mesazh dërgohet për të përditësuar një blerës për statusin e porosisë së tij.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ky mesazh i dërgohet një shitësi për t\'i njoftuar ata për një porosi të konfirmuar.',
        ShopMailTemplateCodes::PosCheckout => 'Ky njoftim dërgohet për të konfirmuar një porosi në pikën e shitjes për një blerës.',
        ShopMailTemplateCodes::PosPayment => 'Ky njoftim konfirmon një pagesë në pikën e shitjes të bërë nga një blerës.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ky mesazh njofton shitësin për një blerje të bërë në pikën e tyre të shitjes.',
        ShopMailTemplateCodes::ShopContact => 'Ky njoftim dërgohet kur të jetë dorëzuar një formular kontakti.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ky njoftim informon një përdorues që ka marrë një kartë dhuratë.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ky mesazh mirëpret një shitës të ri në dyqan.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ky mesazh dërgohet për të ftuar një shitës që të bashkohet me tregun tuaj.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ky mesazh i dërgohet shitësit kur një porosi merret në statusin e paguar ose me para në dorëzim (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Dërguar çdo ditë për të përditësuar shitësit mbi statusin e produkteve të tyre.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ky mesazh dërgohet për të ftuar një shitës që të bashkohet me tregun tuaj.",

        ShopMailTemplateCodes::UserLogin => "Njoftoni përdoruesin me detajet e hyrjes, duke përfshirë adresën, datën dhe pajisjen IP, për qëllime sigurie.",
        ShopMailTemplateCodes::LoginCode => "Dërgoni një kod fjalëkalimi një herë për përdoruesit që të hyjnë në dyqan.",

        ShopMailTemplateCodes::EmailVerifyLink => "Dërgoni një lidhje për të verifikuar adresën e emailit të përdoruesit. Ky email dërgohet kur një përdorues regjistrohet nga SMS dhe fut emailin e tij. Nuk dërgohet kur një përdorues regjistrohet drejtpërdrejt me login social ose email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Dërgoni një listë të porosive të marra dhe të paguara me shumicë për një ditë të caktuar."


    ,

    ],


    'global' => [
        'greetings' => 'Përshëndetje :name',
        'end-statement' => 'Ekipi mbështetës',

        'receiver_name' => 'Përshëndetje :user_name',
        'footer-help' => "Keni nevojë për ndihmë? Pyetni në [support@selldone.com](mailto:support@selldone.com) ose vizitoni [qendrën tonë të ndihmës] (https://selldone.com/community).",
        'selldone-team' => 'Ekipi Selldone',
        'footer-shop' => "Nëse keni nevojë për ndihmë për ndonjë gjë, ju lutemi mos hezitoni të na dërgoni një email: :shop_mail",
        'accept' => "Pranoje",
        'reject' => "Refuzo",
        'verify' => "verifikoni",
        'title' => "Titulli",
        'value' => "Vlera",
        'description' => "Përshkrim",
        'shop' => "Dyqan",
        'shop-info' => "Informacioni i dyqanit",
        'user' => "Përdoruesi",
        'user-info' => "Informacioni i Llogarisë",
        'license' => "Liçensë",
        'status' => "Statusi",
        'start' => "Filloni",
        'end' => "fund",
        'renewal' => "Rinovimi",
        'view' => "Pamje",

        'balance' => "Bilanci",
        'card_number' => "Numri i kartes",
        'cvv' => "Cvv",
        'expire_date' => "Data e skadimit",

        'Dashboard' => "Paneli",
        'order' => "urdhëroj",
        'view_order' => "Shikoni porosinë",
        'pay_now' => "Pay now",

        'official_selldone' => "SHITET ZYRTARE",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Monedha",
        'free-balance' => "Bilanc falas",
        'locked-balance' => "Bilanci i mbyllur",
        'bot' => "Bot",
        'requests' => "Kërkesat",
        'baskets' => 'Karroca',
        'physical' => "Fizike",
        'virtual' => "Virtual",
        'file' => "Skedari",
        'service' => "Shërbimi",
        'fulfillment' => "Përmbushja",
        'open' => "Hapur",
        'reserved' => "Rezervuar",
        'canceled' => "Anuluar",
        'payed' => "I paguar",
        'cod' => "COD",
        'orders-count' => 'Porositë',
        'payments-count' => 'Pagesat',
        'confirms-count' => 'Konfirmon',
        'sends-count' => 'dërgon',
        'delivers-count' => 'Ofron',
        'count' => 'Numëroni',
        'transactions-count' => 'Transaksionet numërohen',
        'success-transactions' => 'Transaksionet e suksesshme',
        'total-amount' => 'Shuma totale',
        'amount' => 'Shuma',
        'wage' => 'Pagë',
        'debug' => 'Korrigjimi',
        'pos' => 'POS',
        'live' => 'Jetoni',
        'CheckQueue' => 'Kontrollo radhën',
        'OrderConfirm' => 'Konfirmo porosinë',
        'PreparingOrder' => 'Përgatitja e porosisë',
        'SentOrder' => 'Porosia e dërguar',
        'ToCustomer' => 'Dorëzuar te klienti',
        'Pending' => 'Në pritje',
        'Accepted' => 'Pranuar',
        'Rejected' => 'Refuzuar',
        'pc' => 'PC',
        'tablet' => 'Tabletë',
        'phone' => 'Telefoni',
        'total' => 'Total',
        'view-detail' => 'Shiko Detail',
        'empty' => 'Bosh',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Përgjigju',
        'reactions' => 'Reagimet',
        'Comments' => 'Komentet',
        'last-comment' => 'Komenti i fundit',
        'response-to' => 'Përgjigje ndaj',
        'posts' => 'Postimet',
        'post' => 'Posto',

        'name' => 'Emri',
        'email' => 'Email',
        'type' => 'lloji',
        'device' => 'Pajisja',
        'platform' => 'Platforma',
        'browser' => 'Shfletuesi',
        'time' => 'Koha',
        'Wallet' => 'Portofoli',
        'date' => 'Data',

        'account' => 'Llogaria',
        'transaction' => 'Transaksioni',
        'fee' => 'Tarifa',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Fature',
        'category' => 'Kategoria',
        'password' => 'Fjalëkalimi',
        'verify-login' => "Verifiko & Identifikohu",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hiper',
        'buy-now' => "Bli tani",
        'add-domain' => "Add Domain",
        'views' => 'Pamje',


        'country' => 'Vendi',
        'address' => 'adresë',
        'postal' => 'Kodi Postar',
        'building_no' => 'Ndërtesa #',
        'building_unit' => 'Njësia #',
        'message' => 'Mesazh',


        'customer' => 'Klienti',
        'cart-items' => 'Artikujt e karrocave',
        'payment' => 'Pagesa',
        'receiver' => 'Marrësi',
        'virtual-items' => 'Artikuj virtualë',
        'no-payment' => 'Asnjë pagesë!',

        'enable' => 'Aktivizo',
        'access' => 'Qasja',
        'bank' => 'Informacioni i bankës',

        'vendor' => 'Shitësi',

        'view_content' => "Shikoni përmbajtjen e plotë",
        'files' => 'Skedarët',
        'download' => 'Shkarko',
        'file_name' => 'Emri i skedarit',
        'file_size' => 'Madhësia',

        'subscription' => 'Abonimi',
        'products' => 'Produktet',
        'vendor_products' => 'Produktet e shitësit',

        'pickup' => 'Marrje',

        'minutes' => 'Minutat',
        'hours' => 'orët',

        'refund' => 'Rimbursimi',
        'recipient_address' => 'Adresa e Marrësit',
        'signature' => 'Nënshkrimi',
        'blockchain' => 'Blockchain',
        'details' => 'Detajet',


    

        'Shop' => 'Dyqan',
        'dashboard' => 'pult',
        'comments' => 'komentet',
        'wallet' => 'portofolin',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone OS Biznesi",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Raporti i Performancës Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone Raport sezonal'
        ],
        'Onboarding' => [
            'id' => 'përshëndetje',
            'name' => 'Selldone Tregtarët'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Mbështetje :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'përshëndetje',
            'name' => 'Komuniteti Selldone'
        ],
        'NewShop' => [
            'id' => 'tregtarët',
            'name' => 'Selldone Tregtarët'
        ],
        'Approve' => [
            'id' => 'miratojnë',
            'name' => 'Selldone Tregtarët'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Menaxhimi i porosive :name'
        ],

        'Recovery' => [
            'id' => 'rikuperimi',
            'name' => 'Ekipi i Rimëkëmbjes Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Në pritje ⌛',
        'PAYED' => 'Me pagesë ✅',
        'CANCELED' => 'Anuluar ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administratori',
            'OFFICER' => 'Zyrtar dhe Mbikëqyrës',
            'AUDITING' => 'Menaxher auditimi',
            'EMPLOYEE' => 'Punonjës',
            'PRODUCT' => 'Menaxher i produkteve',
            'CONTENT' => 'menaxher i përmbajtjes',
            'MARKETING' => 'Menaxher MARKETINGU',
            'VIEWER' => 'Shikuesi',

        ],
        'subject' => ":inviter ju ftoi si :level| :shop",
        'category' => "Ftesa e stafit",
        'title' => "Ju jeni ftuar në <b>:shop_name</b> si <b>:level</b> .",
        'message' => "Ju keni marrë një ftesë për të bashkëpunuar me ekipin <b>:shop_title</b> në biznes. Ju keni mundësinë ta pranoni ose refuzoni këtë ofertë. Nëse vendosni të pranoni, ju lutemi identifikohuni në shërbimin Selldone për të konfirmuar vendimin tuaj. Pas konfirmimit, do të keni akses në seksionin e menaxhimit të dyqanit.",

    ],

    'welcome-email' => [
        'subject' => "👋 Mirë se vini :name, Le të Fillojmë me Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Mirë se vini në Selldone",
        'message' => "Faleminderit që zgjodhët Selldone! Tani jeni pjesë e një komuniteti të gjallë që lidh shitësit globalë me klientët, bizneset lokale me ndërmarrjet dhe individët me korporatat. Të gjitha mjetet tona Master dhe Pro janë në dispozicion për ju **falas** dhe **pafund**. Ne jemi këtu për t'ju mbështetur dhe për të hapur dyert për suksesin tuaj.",

        'index' => "Hapi :step.",

        'step-domain' => [
            'title' => 'Shtoni domenin tuaj të personalizuar',
            'message' => "Për të filluar, shtoni domenin tuaj të personalizuar falas në Panelin e Dyqanit nën Cilësimet > Cilësimet e Domaineve.",
            'action' => 'Menaxho domenet e mia',
        ],
        'step-landing' => [
            'title' => 'Personalizojeni faqen tuaj fillestare',
            'message' => "Personalizoni faqen tuaj kryesore duke shkuar te Paneli i kontrollit > Faqet. Zgjidhni një faqe uljeje ose krijoni një të re. Është e lehtë dhe intuitive, dhe ju mund të filloni të punoni me të menjëherë.",
            'action' => 'Personalizo faqen time të uljes',
        ],
        'step-payment' => [
            'title' => 'Vendosja e metodave të pagesës',
            'message' => "Filloni të pranoni pagesa direkt në llogarinë tuaj bankare. Për të lidhur ofruesit tuaj të pagesave si Stripe, PayPal dhe më shumë, shkoni te Paneli i kontrollit > Kontabiliteti > Gateway.",
            'action' => 'Shtoni metodat e pagesës',
        ],
        'step-products' => [
            'title' => 'Shtoni produktet tuaja',
            'message' => "Shtoni me lehtësi produkte dhe kategori në Panelin > Produktet. Është njësoj si menaxhimi i skedarëve dhe dosjeve në kompjuterin tuaj – gati tërhiq dhe lësho plotësisht. Ju gjithashtu mund të importoni me shumicë produkte duke përdorur Excel. Një model mostër është i disponueshëm për t'ju ndihmuar të filloni.",
            'action' => 'Menaxho Produktet e Mia',
        ],
        'step-shipping' => [
            'title' => 'Konfigurimi i metodave të transportit',
            'message' => "Për të tarifuar klientët për transportin, përcaktoni metodat tuaja të transportit në Panel > Logjistika > Transporti. Ju mund të vendosni çmime dhe mbështetje të ndryshme për vendndodhje të ndryshme. Mos harroni të vendosni origjinën e magazinës tuaj në Panel > Logistic > Magazina.",
            'action' => 'Menaxhoni metodat e transportit',
        ],
    

        'seller' => [
            'title' => 'Jeni shitës?',
            'message' => 'Për të filluar shitjen, futni pultin tuaj në Selldone nëpërmjet lidhjes më poshtë dhe krijoni dyqanin tuaj të parë plotësisht falas. Kjo do të zgjasë disa minuta dhe ju do të keni dyqanin tuaj dhe faqen tuaj online. Më pas do t\'ju udhëzojmë në hapat e ardhshëm dhe do të marrim portën e pagesës.',
            'action' => 'Hyni në panelin tim',
        ],
        'buyer' => [
            'title' => 'Unë jam një blerës',
            'message' => 'urime. Pasi të jeni anëtar i Selldone, do të shpëtoni nga të gjitha telashet e anëtarësimit dhe vërtetimit në dyqanet online. Për të përfituar nga çdo dyqan dhe sajt që përdor platformën Selldone, mund të identifikoheni me një klikim dhe ta bëni blerjen tuaj të thjeshtë, të shpejtë dhe të sigurt.',
        ],
    ],


    'charge-account' => [
        'category' => 'Portofoli > Llogaria > Ngarkesë',
        'title' => "Tarifa e suksesit",
        'message' => "Llogaria juaj <b>:account_number</b> është tarifuar me sukses <b>:amount</b> .",
        'account' => 'Llogaria',
        'charge' => 'Ngarkimi',
        'balance' => 'Bilanci',
        'footer' => "Bëjeni biznesin të lehtë, të arritshëm dhe të arritshëm për këdo në mbarë botën."
    ],

    'verify-email' => [
        'subject' => "🙌 Plotësoni regjistrimin tuaj në Selldone! Verifiko lidhjen.",
        'category' => "JU JENI NJË HAPA LARG",
        'title' => "Verifikoni adresën tuaj të emailit",
        'message' => "Përshëndetje :name,<br><br>Faleminderit që zgjodhët Selldone!<br><br>Për të konfirmuar që <b>:email</b> është adresa juaj e saktë e emailit, ju lutemi përdorni lidhjen e mëposhtme ose përdorni Keni 48 orë për të përfunduar këtë verifikim.",
        'footer' => "Nëse keni probleme të klikoni butonin Verifiko, kopjoni dhe ngjisni URL-në më poshtë në shfletuesin tuaj të internetit: :activation_url",
        'next-step' => "Më pas, ne do t'ju dërgojmë disa materiale të dobishme dhe një udhëzues hap pas hapi për t'ju lehtësuar shtimin e domenit të personalizuar, konfigurimin e pagesave, shtimin e produkteve dhe marrjen e porosisë tuaj të parë.",

    ],
    'verify-email-code' => [
        'subject' => "Kodi i verifikimit për :name",
        'category' => "SECURITY",
        'title' => "Kodi i verifikimit të emailit",
        'message' => "Përshëndetje :name,<br><br>Për të konfirmuar që <b>:email</b> është adresa juaj e saktë e emailit, ju lutemi shkruani kodin e mëposhtëm brenda <b>10 minutave të ardhshme</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Dyqani juaj është gati| :name",
        'category' => "JU JENI NJË HAPA LARG",
        'title' => "Konfigurimi përfundoi",
        'account_title' => "Llogaria juaj",
        'account_msg' => "Verifikoni dhe identifikohuni në llogarinë tuaj me këtë informacion.",
        'shop_msg' => "Informacioni i llogarisë në sistemin operativ të biznesit Selldone.",

    ],

    'reset2fa' => [
        'category' => "MESAZH ZYRTAR I SIGURISË",
        'title' => "Kërkoni të çaktivizoni hyrjen me 2 hapa",
        'message' => "Ju po e merrni këtë email sepse kemi marrë një kërkesë për të rivendosur vërtetimin me dy faktorë për llogarinë **:name** me email **:email**.<br><br>Kemi gjetur detajet e mëposhtme për llogarinë tuaj:",
        'footer' => "Nëse nuk keni kërkuar një rivendosje të fjalëkalimit, nuk kërkohet asnjë veprim i mëtejshëm.",
        'action' => 'Çaktivizo identifikimin me dy hapa',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Dyqani juaj është gati tani!",
        'category' => "BORN DYQAN I RI ONLINE NË BOTË",
        'title' => "Urime, :name!",
        'message' => "<b>Urime, :name! Biznesi juaj i ri online tani është i hapur!</b> Ne jemi të ngazëllyer t'ju mirëpresim në komunitetin e Shitësve. Ju keni bërë hapin e parë drejt suksesit dhe ne jemi këtu për t'ju ndihmuar në çdo hap.<br>Tani që dyqani juaj është gati, le të sigurohemi që jeni gati të merrni pagesa direkt nga klientët tuaj dhe të filloni të rritni perandorinë tuaj. Nëse keni nevojë ndonjëherë për ndihmë, ne jemi vetëm një mesazh larg—skuadra jonë e mbështetjes është gjithmonë këtu për ju.<br><br><b>Hapat e ardhshëm të rëndësishëm:</b> Për të filluar, sigurohuni që të jeni gati për marrjen e pagesave dhe funksionimin e qetë. Ne do t'ju udhëzojmë në çdo fazë që dyqani juaj të funksionojë pa probleme.",
        'pdf-book' => "Mos e humbni librin e bashkangjitur: Bëjeni biznesin tuaj si lojë",

        'account' => [
            'title' => 'Hapi 1: Vendosni portofolin tuaj Selldone',
            'message' => "Nëse nuk keni një llogari në portofolin tuaj, krijoni një të tillë. Shitja e zbret tarifën nga kjo llogari. Ju mund ta rimbushni këtë llogari dhe Selldone do t'ju tarifojë gjithashtu një shumë krediti në mënyrë që nëse kjo llogari është negative, faqja juaj dhe Dyqani do të vazhdojnë të funksionojnë.",
            'action' => 'Hyni në portofolin',
        ],

        'shop-account' => [
            'title' => 'Hapi 2: lidhni llogarinë me dyqanin',
            'message' => "Më pas, lidhni llogarinë tuaj të portofolit me dyqanin tuaj. Shkoni te <b>Store > Kontabiliteti > Invoice</b> dhe lidhni portofolin tuaj. Kjo siguron që të gjitha pagesat e klientëve të depozitohen drejtpërdrejt në llogarinë tuaj bankare—Selldone nuk zbret asnjë shumë nga fitimet tuaja.",
            'action' => 'Paneli i faturës së dyqanit',
        ],

        'gateway' => [
            'title' => 'Hapi 3: Lidhni portën e pagesës në internet',
            'message' => "Tani, le të konfigurojmë portën tuaj të pagesës në internet. Shkoni te <b>Store > Kontabiliteti > Port</b> dhe klikoni në <b>Shto Port</b> të re. Zgjidhni monedhën tuaj dhe do të shihni një listë të portave të disponueshme të pagesave. Lidhja e një porte është e shpejtë dhe e lehtë, por nëse keni nevojë për ndihmë, mos ngurroni të kontrolloni udhëzuesit Selldone ose na kontaktoni.",
            'action' => 'Shtoni një portal në dyqan',
        ],

        'domain' => [
            'title' => 'Hapi i fundit: lidhja e një domeni të dedikuar',
            'message' => "Tani, lidhni domenin tuaj të personalizuar me dyqanin tuaj. Kjo i lejon klientët të blejnë produktet ose shërbimet tuaja dhe të bëjnë pagesa direkt tek ju.",
            'action' => 'Prezantimi dhe marrja e kartave të dhuratave të pakufizuara',
        ],
    ],


    'basket-list' => [
        'item' => "artikull",
        'count' => "Numëroni",
        'price' => "çmimi",
        'discount-code' => "Kodi i zbritjes",
        'customer-club' => 'Klubi i klientëve',
        'shipping' => "Transporti",
        'total' => "Total",
        'offer' => "Oferta",
        'coupon' => "Kupon",
        'lottery' => "Çmimi",
        'tax' => "Taksa",
        'tax_included' => "Të përfshira në çmim",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metoda',
        'amount' => 'Shuma',
        'giftcard' => 'Gift card',
        'payment' => 'Pagesa',
    ],


    'shop-subscription-email' => [
        'category' => "Përditësimi i abonimit",
        'title' => "Licenca e dyqanit: :shop_title",
        'title-reserved' => "Rezervoni licencën: :shop_title",
        'title-active' => "Licenca aktive: :shop_title",
        'title-finished' => "Licenca e përfunduar: :shop_title",
        'title-cancel' => "Anulo licencën: :shop_title",
        'message' => "Plani juaj i licencës së dyqanit u përditësua,",
        'RESERVED' => "⚡ Plani juaj i abonimit është **rezervuar**.",
        'ACTIVE' => "🟢 Plani juaj i abonimit është **aktivizuar**.",
        'FINISHED' => "🚧 Plani juaj i abonimit është **përfunduar**.",
        'CANCEL' => "⛔ Plani juaj i abonimit është **anuluar**.",
    ],

    'support' => [
        'subject' => "Qendra mbështetëse | :name u pergjigj",
        'category' => "Qendra mbështetëse",
        'title' => "Ju morët një përgjigje",
        'action' => "Hap administratorin e dyqanit",
    ],

    'shop-customer-join' => [
        'subject' => "Bashkohu në :shop_title",
        'category' => "Festa e klientëve të rinj",
        'title' => "Jemi të lumtur për anëtarësimin tuaj",
        'action' => "Vizitoni tani",
    ],

    'shop-vendor-join' => [
        'subject' => "Futja e shitësit | :shop_title",
        'category' => "Festimi i shitësve të rinj",
        'title' => "Jemi të lumtur për anëtarësimin tuaj",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kartë dhuratë :shop_title",
        'category' => "Shto kartë të re",
        'title' => "Urime, ju keni marrë një kartë dhuratë",
        'action' => "Bli Tani",
        'message' => "Ju keni marrë një kartë dhuratë në shumën :balance :currency. Ju do të mund të blini nga dyqani ynë me këtë kartë dhuratë.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Qendra e Mbështetjes| :shop",
        'category' => "mbështetje",
        'title' => "Ju morët një përgjigje",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Porosit arkë | :order_id",
        'title' => "urdhëroj",
        'message' => "Ju keni bërë një porosi në dyqanin tonë. Ne e morëm porosinë tuaj dhe do t'ju dërgojmë një email tjetër pasi të konfirmohet pagesa."
    ,

        'payments' => 'Pagesat',
    ],

    'order-payment' => [
        'subject' => "🛍 Konfirmimi i pagesës | :order_id",
        'title' => "Urdhër pagese",
        'message' => "Pagesa juaj e përfunduar,<br> Ne kemi porosinë tuaj. Ne do t'ju dërgojmë një email tjetër kur porosia juaj të dërgohet.",
    

        'payments' => 'Pagesat',
    ],

    'order-update' => [
        'subject' => "🛍️ Përditësimi i statusit të porosisë|Porosit :order_id",
        'title' => "Përditësimi i statusit të porosisë",
        'message' => "Porosia juaj është përditësuar. Ju mund të kontrolloni statusin më të fundit të kësaj porosie në llogarinë tuaj.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Porosia juaj është në radhë për përpunim. Ne do t'ju njoftojmë kur të përgatitet.",
                'OrderConfirm' => "Porosia juaj është konfirmuar dhe përgatitja ka filluar.",
                'PreparingOrder' => "Porosia juaj është duke u përgatitur dhe do të dërgohet së shpejti.",
                'SentOrder' => "Porosia juaj është dërguar. Do ta merrni së shpejti.",
                'ToCustomer' => "Porosia juaj është dorëzuar. Shpresojmë t'ju pëlqejë!",

                'PreparingOrder-PICKUP' => "Porosia juaj është duke u përgatitur. Do të marrësh një njoftim kur të jetë gati për marrje.",
                'SentOrder-PICKUP' => "Porosia juaj është gati për marrje. Ju lutemi ejani në dyqan për ta mbledhur atë.",
                'ToCustomer-PICKUP' => "Porosia juaj është marrë. Shpresojmë t'ju pëlqejë!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Porosia juaj është në radhë për përpunim. Ne do t'ju njoftojmë kur të jetë gati.",
                'OrderConfirm' => "Porosia juaj është konfirmuar dhe përgatitja është në progres.",
                'PreparingOrder' => "Porosia juaj është duke u përgatitur dhe do t'ju dërgohet së shpejti.",
                'ToCustomer' => "Porosia juaj virtuale është dorëzuar në llogarinë tuaj. faleminderit!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Kërkesa juaj e shërbimit është në radhë. Ne do t'ju njoftojmë kur të fillojmë.",
                'OrderConfirm' => "Shërbimi juaj është konfirmuar dhe ne po përgatitemi të fillojmë.",
                'PreparingOrder' => "Ne jemi duke përgatitur shërbimin tuaj dhe do t'ju njoftojmë sapo të përfundojë.",
                'ToCustomer' => "Shërbimi juaj është i plotë. Faleminderit që na zgjodhët!"
            ],
            'FILE' => [
                'PreparingOrder' => "Skedari juaj është duke u përgatitur dhe do të jetë i disponueshëm së shpejti.",
                'ToCustomer' => "Dosja juaj është gati dhe është dorëzuar. Tani mund ta shkarkoni."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Porosia juaj e abonimit është në radhë. Ne do t'ju njoftojmë kur të fillojë përpunimi.",
                'OrderConfirm' => "Abonimi juaj është konfirmuar dhe po konfigurohet.",
                'PreparingOrder' => "Ne jemi duke përgatitur abonimin tuaj dhe ai do të fillojë së shpejti.",
                'SentOrder' => "Abonimi juaj është aktivizuar. Do të merrni përditësime të vazhdueshme.",
                'ToCustomer' => "Shërbimi juaj i abonimit është aktivizuar me sukses."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Urime :name | Kupon i ri: :title',
        'category' => "URIME, VOUCHER I RI",
        'message' => "Hej :name,<br><br>Ke marrë një kupon të ri si dhuratë nga ne! Ju mund të fitoni edhe më shumë kupona duke prezantuar Selldone me miqtë tuaj dhe të gjithë ata që njihni. Ky kupon vlen **:price :currency**.<br><br>Ju keni bërë hapin e parë dhe ne jemi këtu për t'ju ndihmuar të zhbllokoni veçoritë e reja me kupon tuaj! Ju lutemi identifikohuni me **:email** dhe gjeni kuponin tuaj në Dyqani **Pulti ** > **Cilësimet** > **Licenca**.<br><br>Urime!",
        'action' => "Paneli im",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Urime, i dashur :name | Ju keni marrë një dhuratë',
        'category' => "Njoftimi për marrjen e një dhurate",
        'title' => "Dhurata për ju",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Dhurata",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 U mor porosi e re | :order_id",
        'title' => "New Order",
        'message' => "Ju keni marrë një porosi të re. Ju lutemi shkoni te faqja e përpunimit të porosive në dyqanin tuaj.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Informacioni juaj i Plotësuar',
        'output-form-title' => 'Informacioni i artikullit të blerë',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title | Raporti javor :time',
        'title' => 'Raporti javor i performancës së dyqanit',
        'message' => "Ky është raporti javor i dyqanit tuaj nga <b>:start</b> deri në <b>:end</b>. Ky raport përfshin këshilla për përmirësimin e biznesit tuaj, gjithashtu mund të kontrolloni statusin e dyqanit tuaj online dhe porositë e fundit. Shpresoj te keni nje dite dhe jave te mbare ne vazhdim."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Raporti juaj i :amount kursimit në tre muajt e fundit | :shop_title',
        'title' => 'Raport sezonal për aktivitetin tuaj të biznesit, shpërblimet dhe kursimet financiare',
        'message' => "Ky është raporti juaj sezonal <b>:shop_title</b> nga <b>:start</b> në <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Llogaritë e lidhura',
        'sub-title' => 'Cili është statusi i fundit i llogarive të portofolit të lidhura me dyqanin tim?',
        'view-wallet' => 'Shiko portofolin',
        'tip-title' => 'Këshilla të rëndësishme',
        'tip' => "Vendosni një portofol falas Selldone dhe lidheni atë me dyqanin tuaj. Edhe nëse bilanci juaj është negativ, klientët tuaj ende mund të blejnë dhe të paguajnë pa asnjë problem. Mos u shqetësoni, operacionet dhe të dhënat e dyqanit tuaj do të vazhdojnë pa probleme deri në 1 muaj, pa asnjë ndërprerje.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Lidhu me llogarinë'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplikacionet e instaluara',
        'sub-title' => 'Lista e aplikacioneve që keni instaluar në dyqanin tuaj këtë javë.',
        'tip' => "Dëshiron të gjesh më shumë aplikacione për dyqanin tënd?",
        'view-app-store' => 'Vizitoni Dyqanin e Aplikacioneve Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Botët e dyqanit tuaj',
        'sub-title' => 'Bots aktive të shitjeve në dyqanin tim.',
        'tip-title' => 'Shitje bot',
        'tip' => "Selldone ju ka ofruar robotë automatikë të shitjeve. Gjithçka që duhet të bëni është të shkoni te paneli Shtesa> Bots dhe të aktivizoni botet e dyqanit tuaj. Vini re se shërbimi përkatës duhet të jetë i disponueshëm në vendin tuaj.",
        'view-bots' => 'Menaxhoni robotët',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikimi me klientët',
        'sub-title' => 'Sa kontakte kam pasur me klientët e mi këtë javë?',
        'faqs' => 'Pyetjet e bëra më shpesh',
        'tickets' => 'Biletat e klientit',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Statusi i përdoruesve',
        'sub-title' => 'Aktiviteti nga :start në :end',
        'users' => [
            'title' => 'Klientët',
            'subtitle' => 'Përdoruesit e Regjistrimit',
        ],
        'views' => [
            'title' => 'Vizitat',
            'subtitle' => 'Sa herë e keni vizituar dyqanin',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Përdoruesit e Kthyer',

        'shop_views' => 'Shikimet e Dyqanit',
        'baskets' => [
            'title' => 'Karrocat e blerjeve',
            'subtitle' => 'Raportoni numrin e karrocave të reja të blerjeve',
        ],
        'products' => [
            'title' => 'Përmbledhje e produkteve',
            'subtitle' => 'Statusi i produkteve në dyqan sipas llojit',
            'value_name' => 'Produktet'
        ],
        'products_count' => 'Llojet e produkteve',
        'views_count' => 'Numri i shikimeve',
        'sell_count' => 'Numri i shitjeve',
        'send_count' => 'Numri i transportit',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Transporti',
        'sub-title' => 'Paneli për shitësit kryesorë të Drop Shipping Selldone.',
        'total_fulfillments' => 'Totali i porosive të marra',
        'ds_count' => 'Porositë e pranuara',
        'statistics_title' => 'Raportoni porositë e marra',
        'ds_cancels' => 'Anulo nga shitësi i ndërfaqes',
        'ds_rejects' => 'Anuloni nga ju',
        'tip' => "A jeni një shitës kryesor i mallrave? A keni një depo, fabrikë apo distributor të produkteve? Ju mund t'u ofroni produktet tuaja shitësve të tjerë në shërbimin Selldone Drop Shipping për të shitur produktin tuaj në një shkallë të gjerë. Na dërgoni email në support@selldone.com për t'ju udhëhequr.",
        'view-drop-shipping-panel' => 'Hyni në panelin e shitjes me shumicë',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Kurset e këmbimit',
        'sub-title' => 'Lista e normave më të fundit të konvertimit të monedhës në dyqanin tuaj.',
        'from' => 'Monedha burimore',
        'to' => 'Monedha e destinacionit',
        'rate' => 'Shkalla e konvertimit',
        'view-exchange-panel' => 'Menaxhoni kurset e këmbimit',
    

        'vew-exchange-panel' => 'paneli i menaxhimit të kursit të këmbimit',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Kontratat e ekspertëve',
        'sub-title' => 'Cilët profesionistë punojnë në dyqanin tim?',
        'cost' => 'Shuma e kontratës',
        'duration' => 'Kohëzgjatja',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Anulo',
        'end_at' => 'Data e dorëzimit',
        'tip' => 'Ju mund të punësoni specialistët më të mirë në Selldone për të zhvilluar biznesin tuaj.',
        'view-experts' => 'Klikoni për të filluar.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Raportoni portat aktive të pagesave në dyqanin :shop.',
        'tip-title' => 'Këshilla të rëndësishme',
        'tip' => "Shkoni në faqen e menaxhimit të portalit në dyqanin tuaj dhe shtoni të paktën një port në pak minuta. Klientëve tuaj u pëlqen të paguajnë shpejt dhe me siguri përmes portaleve në internet.",
        'view-shop-gateways' => 'Hyni në menaxhimin e portalit tim të dyqanit.',
        'view-gateways' => 'Shikoni më shumë porta',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Porositë',
        'sub-title' => 'Lista e porosive që kam marrë këtë javë.',
        'total_baskets' => 'Totali i porosive',
        'total_posBaskets' => 'Totali i Urdhrave Cash',
        'pos-title' => 'Kutia e dyqanit POS',
        'chart-label' => 'Porositë e përfunduara (këto porosi nuk paguhen domosdoshmërisht!)',
        'tip-title' => 'Ju duhet të përpiqeni më shumë ...',
        'tip' => "Asnjë sukses i thjeshtë.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Qendra e përpunimit',
        'sub-title' => 'Sa porosi përpunuam në dyqan këtë javë?',
        'tip-title' => 'Nuk kishit shitje!',
        'tip' => "Fatkeqësisht nuk keni pasur shitje këtë javë. Ju duhet të merrni më shumë në dyqanin tuaj. Mund të shtoni më shumë produkte, të zgjidhni imazhe më të mira ose të shkruani përshkrime më të mira për produktet tuaja. Konsideroni një punë me kohë të plotë për biznesin tuaj. Nëse e bëni siç duhet dhe nuk zhgënjeheni, do të keni sukses.",
        'view-process-center' => 'Shikoni qendrën e procesit',
        'return' => [
            'title' => 'Porosia e kthyer',
            'subtitle' => 'Raportoni porositë e kthyera.',
            'tip-title' => 'A ke ditur atë ...',
            'tip' => "Me Selldone POS mund të krijoni sa më shumë kasa të nevojshme! Pavarësisht nëse është tableti, celulari ose laptopi juaj, mund ta ktheni çdo pajisje në pikën e shitjes së dyqanit tuaj. Është e thjeshtë, e shpejtë për t'u konfiguruar dhe plotësisht e përgatitur për serverin tuaj. Filloni ta përdorni sot!",
            'view-pos' => 'Hyni në arkëtarin e dyqanit tim online'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Seancat',
        'sub-title' => 'Sa herë e kam vizituar dyqanin tim?',
        'countries-title' => 'Cilat vende kanë qenë më të vizituara?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Dëshironi të fitoni para pa shpenzuar asnjë para?',
        'message' => "Përshëndetje :name, është koha të filloni të fitoni me Selldone! Shkoni te Paneli i kontrollit > Më shumë > Fitimi i parave > Merr lidhjen e referimit. Ndani lidhjen me miqtë tuaj dhe fitoni karta dhuratash dhe një pjesë të pagesave të tyre. Pjesa më e mirë? Ju dhe shoku juaj merrni një kartë dhuratë!",
        'action' => 'Shiko lidhjen time të prezantimit',
        'mail-clip' => "<b style='color: #C2185B'>E rëndësishme:</b> Nëse përdorni shërbime emaili si Gmail që kufizojnë gjatësinë e emailit, gjeni opsionin e mëposhtëm në fund të emailit për të shfaqur raportin e plotë dhe klikoni mbi të:",

        'no-coin-reward' => "<b style='color: #C2185B'>Na vjen keq:</b> Aktiviteti juaj nuk e plotësoi kërkesën për të marrë shpërblimin falas të monedhave SEL. Përpiquni më shumë dhe shisni më shumë në dyqanin tuaj për sezonin e ardhshëm.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Urime:</b> Punë e shkëlqyer! Bazuar në performancën tuaj të jashtëzakonshme, ne kemi kredituar monedha :amount SEL në llogarinë tuaj si shpërblim.",

        'need-buy-license' => "<b> Nivelizojeni biznesin tuaj:</b> Duket sikur nuk keni regjistruar ende asnjë plan abonimi për faqen tuaj të internetit! Përmirësoje tani për të zhbllokuar më shumë veçori për vetëm :amount në muaj nëse paguhet çdo vit.",
        'not-afford-message' => "Nëse nuk mund të përballoni ose keni ndonjë problem me pagesën, mos ngurroni të na tregoni përmes support@selldone.com.",
        'add-domain' => "<b>Pse të mos keni një domen të personalizuar për biznesin tuaj?</b><br> Shtoni një domen në faqen tuaj të internetit tani; është falas!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone është një<del> produkt</del> <span style = 'color: forestgreen'>komuniteti</span> .<br> Bëhuni një shitës profesionist!",
        'message' => "Ndiqni faqet zyrtare të Selldone në Twitter, LinkedIn dhe rrjetet sociale. Na dërgoni çdo koment, kërkesë ose kritikë ose merrni pjesë në diskutime rreth Selldone. Ne jemi gjithashtu pjesë e komunitetit të Selldone që <b>Ju bëni</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Marrë porosi të reja Avokado | :shop_title :time',
        'title' => "Raporti i performancës për 24 orët e fundit",
        'message' => "Klientët tuaj presin që porositë tuaja të rishikohen dhe të vlerësohen. Përgjigjuni kërkesave të klientëve tuaj sa më shpejt të jetë e mundur për të marrë më shumë shitje.",
        'card_title' => "Porositë në radhë",
        'card_subtitle' => "Që nga :date",

        'card_payed' => "Porositë e paguara"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Përgjigjuni postimit tuaj në :community_title',
        'title' => ":name dhe :count të tjerët komentuan në postimet tuaja.",
        'message' => "Përshëndetje :name, postimet tuaja po tërheqin vëmendjen! Ju keni marrë komente në komunitetin tonë. Hyni në llogarinë tuaj për t'u bashkuar me diskutimin dhe për të parë se çfarë thonë të gjithë.",
        'title-simple' => ":name komentoi në postimet tuaja.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Përgjigju temës suaj :topic_title',
        'title' => ":name, dhe :count u përgjigjën të tjerët në temën tuaj.",
        'message' => "Përshëndetje :name, tema juaj po tërheq vëmendjen! Ju keni marrë përgjigje në komunitetin tonë. Hyni në llogarinë tuaj për t'u bashkuar me diskutimin dhe për të parë se çfarë thonë të gjithë.",
        'title-simple' => ":name u përgjigj në temën tuaj.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Identifikimi i ri :name',
        'category' => 'Njoftimet e sigurisë',
        'title' => "Hyni në Llogari",
        'message' => "I dashur :name, ju keni hyrë në llogarinë tuaj të Selldone.",   // Login in selldone (seller)
        'message-shop' => "I dashur :name, ju keni hyrë në :shop_title.",  // Login in shop (buyer)

        'footer' => "Nëse nuk jeni të identifikuar, ju lutemi ndryshoni fjalëkalimin tuaj.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Tërheqja",
        'deposit' => "Depozitë",

        'withdraw_subject' => "tërheq nga llogaria :account",
        'deposit_subject' => "Depozitoni në llogarinë :account",

        'message' => "Transferta e parave është bërë me specifikimet e mëposhtme.",

        'type' => "Lloji i transaksionit",

        'from' => "Llogaria burimore",
        'to' => "Destination account",

        'desc' => "Përshkrimi i transaksionit",
        'action' => "Shiko transaksionin",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ E rëndësishme! Shkelje e rregullave| :shop",
        'category' => "Informim kritik",
        'title' => "Dyqani juaj është penalizuar",
        'action' => "Hap pultin e dyqanit",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter ju ftoi ne Selldone",
        'title' => ":name ju dërgoi :amount për t'ju ndihmuar të hapni faqen tuaj të re në internet dhe të fitoni para nga ajo!",
        'message' => "Përshëndetje **:receiver_name**,<br><br>Mirë se erdhët në Selldone! Në Selldone, ju mund të krijoni lehtësisht faqen tuaj të tregtisë elektronike, blogun, komunitetin në internet dhe madje të konfiguroni një sistem POS në internet për shitje personalisht - të gjitha brenda pak minutash. Është sistemi i plotë operativ i biznesit në internet i krijuar për ta bërë biznesin tuaj më të mirë, më të shpejtë dhe më të lehtë për t'u drejtuar.<br><br>Regjistrohuni nga <b>:date</b> dhe merrni një kupon :amount për të filluar!",
        'accept' => "Pranoje ftesën",
        'owner' => "Pronari i",
        'join-date' => "Në Selldone që nga",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Lidhja e rikuperimit| :shop",
        'category' => "Siguria e dyqanit",
        'title' => "Lidhja e rikuperimit të dyqanit të <b>:shop_name</b> .",
        'message' => "Ky email ju është dërguar sepse keni kërkuar të rivendosni dyqanin tuaj. Duke klikuar në lidhjen më poshtë do të rikuperoni dyqanin tuaj dhe të gjitha të dhënat që i përkasin.",
        'action' => "Konfirmo Rimëkëmbjen e Dyqanit",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Sa para ka kursyer Selldone për biznesin tuaj?',
        'sub-title' => 'Nga data :start deri në :end',
        'infrastructure' => [
            'title' => 'Infrastruktura',
            'subtitle' => 'Serverë, CDN, hapësirë ruajtëse dhe shërbime të tjera cloud',
        ],
        'experts' => [
            'title' => 'Ekspertët dhe Stafi',
            'subtitle' => 'Zhvilluesit, mirëmbajtja dhe mbështetja',
        ],
        'total_save' => 'Totali i parave të kursyera'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Performanca juaj',
        'sub-title' => 'Pasqyrë e biznesit nga :start në :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Përdoruesit e Kthyer',

        'shop_views' => 'Shikimet e Dyqanit',
        'baskets' => [
            'title' => 'Karrocat e blerjeve',
            'subtitle' => 'Raportoni numrin e karrocave të reja të blerjeve',

        ],
        'products' => [
            'title' => 'Përmbledhje e produkteve',
            'subtitle' => 'Statusi i produkteve në dyqan sipas llojit',
            'value_name' => 'Produktet'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Shikimet totale të faqeve të internetit',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Ju keni marrë një porosi të re. Ju lutemi shkoni te faqja e përpunimit të porosive në panelin tuaj të shitësit.",
        'subject' => "🛍 U mor porosi e re | :order_id",
        'your_revenue' => "Të ardhurat tuaja",
    ],
    'vendor-invite' => [
        'title' => 'Ftesa e shitësit',
        'message' => "Ju keni marrë një ftesë për t'u bërë shitës i :shop_name. Mund ta pranoni ose refuzoni duke klikuar në butonat e mëposhtëm.",
        'subject' => ":shop_name | Ju morët një ftesë për t'u bërë shitësi ynë",
        'accept' => "Prano dhe Bëhu Shitës",
        'reject' => "Refuzo",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Ftesë për t\'u bashkuar me ekipin tonë',
        'message' => "Jeni ftuar të bashkoheni në :vendor_name në :shop_name. Ju mund ta pranoni ose refuzoni këtë ftesë duke përdorur butonat më poshtë.",
        'subject' => "Ftesë për t'u bashkuar me :vendor_name|Bëhuni anëtar i ekipit",
        'accept' => "Pranoni dhe bashkohuni me ekipin",
        'reject' => "Refuzo",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Kodi juaj i hyrjes për :shop",
        'header-message' => "Ne po ju dërgojmë këtë email sepse keni kërkuar një kod identifikimi për dyqanin. Ju lutemi gjeni fjalëkalimin tuaj një herë (OTP) më poshtë:",
        'footer-message' => "Ky kod do të jetë i vlefshëm për 10 minuta. Nëse nuk e keni kërkuar këtë kod identifikimi, ju lutemi shpërfilleni këtë email."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifikoni emailin tuaj| :shop",
        'title' => 'Verifikimi me email',
        'header-message' => "Përshëndetje :name,<br> Ju lutemi konfirmoni që **:email** është adresa juaj e emailit duke klikuar në butonin ose përdorni lidhjen e mëposhtme brenda 48 orëve.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Përditësimet e produktit| :shop",
        'title' => "Përditësim mbi statusin e produktit - 24 orët e fundit",
        'message' => "Shpresoj që ky mesazh t'ju gjejë mirë. Ky është një përditësim i shkurtër për t'ju informuar për statusin e produkteve tuaja në platformën tonë gjatë 24 orëve të fundit.\nGjatë kësaj periudhe ka pasur ndryshime në statusin e disa produkteve. Këto ndryshime mund të jenë për shkak të blerjeve, përditësimeve të aksioneve ose ngjarjeve të tjera të lidhura.\nPër informacion më të detajuar rreth secilit produkt, ju lutemi identifikohuni në llogarinë tuaj dhe kontrolloni seksionin \"Statusi i produktit\".",
        'action' => "Hapni panelin e shitësit",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Porositë me shumicë të pranuara| :shop | :date",
        'title' => "Njoftimi i porosive me shumicë",
        'message' => "Ju keni marrë një grup porosish me shumicë. Ju lutemi vizitoni faqen e përpunimit të porosive në panelin tuaj për detaje të mëtejshme. Ju gjithashtu mund të shkarkoni listën e porosive përmes lidhjes së sigurt të ofruar, e vlefshme për 7 ditë.<br><br>\n        <b> E RËNDËSISHME:</b> Kjo lidhje është e vlefshme për 7 ditë.<br>\n        Kjo lidhje është dinamike, kështu që sa herë që e klikoni, do të merrni porositë më të përditësuara për këtë datë specifike. <b>Do të thotë nëse statusi i pagesës së porosisë ndryshon në i refuzuar, nuk do ta shihni më atë porosi në CSV-në e shkarkuar, ose nëse porosia është paguar, ajo do të shfaqet në listë.</b><br><br>\n        <ul>\n            <li> CSV përmban porosi të paguara me një datë të rezervuar në :date.</li>\n            <li> Data e rezervuar është data kur përdoruesi klikon arkë në faqen e porosisë.</li>\n        </ul>\n        <b>Për të parandaluar porositë e dyfishta, kontrolloni gjithmonë porosinë ID përpara se ta dërgoni.</b>",
        'action' => "Shkarkoni listën e porosive",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Disa artikuj në porosinë tuaj nuk u pranuan dhe nuk mund të dorëzohen. Shuma për këto artikuj do të kthehet në kartën tuaj së shpejti."
    ]

];
