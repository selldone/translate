<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Táto správa víta nového kupujúceho v obchode.',
        ShopMailTemplateCodes::OrderCheckout => 'Toto oznámenie sa odošle, keď kupujúci potvrdí objednávku.',
        ShopMailTemplateCodes::OrderPayment => 'Toto oznámenie potvrdzuje úspešnú platbu vykonanú zákazníkom.',
        ShopMailTemplateCodes::OrderUpdate => 'Táto správa je odoslaná s cieľom informovať kupujúceho o stave jeho objednávky.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Táto správa je odoslaná predajcovi, aby mu oznámila potvrdenú objednávku.',
        ShopMailTemplateCodes::PosCheckout => 'Toto oznámenie sa odošle na potvrdenie objednávky miesta predaja pre kupujúceho.',
        ShopMailTemplateCodes::PosPayment => 'Toto oznámenie potvrdzuje platbu na mieste predaja uskutočnenú kupujúcim.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Táto správa informuje predajcu o nákupe uskutočnenom na jeho predajnom mieste.',
        ShopMailTemplateCodes::ShopContact => 'Toto oznámenie sa odošle po odoslaní kontaktného formulára.',
        ShopMailTemplateCodes::ShopGiftCard => 'Toto upozornenie informuje používateľa, že dostal darčekovú kartu.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Táto správa víta nového predajcu v obchode.',
        ShopMailTemplateCodes::ShopVendorInvite => "Táto správa je odoslaná s cieľom pozvať dodávateľa, aby sa pripojil k vášmu trhu.",
        ShopMailTemplateCodes::ShopVendorOrder => "Táto správa sa odosiela predajcovi, keď je objednávka prijatá v stave zaplatená alebo na dobierku (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Odosielané denne, aby predajcovia informovali o stave ich produktov.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Táto správa je odoslaná s cieľom pozvať dodávateľa, aby sa pripojil k vášmu trhu.",

        ShopMailTemplateCodes::UserLogin => "Upozornite používateľa s prihlasovacími údajmi vrátane adresy IP, dátumu a zariadenia z bezpečnostných dôvodov.",
        ShopMailTemplateCodes::LoginCode => "Pošlite používateľom jednorazový kód hesla na prihlásenie do obchodu.",

        ShopMailTemplateCodes::EmailVerifyLink => "Pošlite odkaz na overenie e-mailovej adresy používateľa. Tento e-mail sa odošle, keď sa používateľ zaregistruje prostredníctvom SMS a zadá svoj e-mail. Neposiela sa, keď sa používateľ zaregistruje priamo pomocou sociálneho prihlásenia alebo e-mailu.",

        ShopMailTemplateCodes::EmailBulkOrder => "Hromadne odošlite zoznam prijatých a zaplatených objednávok na konkrétny deň."


    ,

    ],


    'global' => [
        'greetings' => 'Ahoj, :name!',
        'end-statement' => 'Podporný tím',

        'receiver_name' => 'Ahoj :user_name',
        'footer-help' => "Potrebujete pomoc? Opýtajte sa na [support@selldone.com](mailto:support@selldone.com) alebo navštívte naše [centrum pomoci](https://selldone.com/community).",
        'selldone-team' => 'Tím Selldone',
        'footer-shop' => "Ak potrebujete s niečím pomôcť, neváhajte nám napísať e-mail: :shop_mail",
        'accept' => "súhlasiť",
        'reject' => "Odmietnuť",
        'verify' => "overiť",
        'title' => "Názov",
        'value' => "Hodnota",
        'description' => "Popis",
        'shop' => "Obchod",
        'shop-info' => "Informácie o obchode",
        'user' => "Používateľ",
        'user-info' => "Informácie o účte",
        'license' => "Licencia",
        'status' => "Postavenie",
        'start' => "Štart",
        'end' => "Koniec",
        'renewal' => "Obnova",
        'view' => "vyhliadka",

        'balance' => "Zostatok",
        'card_number' => "Číslo karty",
        'cvv' => "CVV",
        'expire_date' => "Dátum expirácie",

        'Dashboard' => "Dashboard",
        'order' => "poriadku",
        'view_order' => "Prehľad objednávky",
        'pay_now' => "Pay now",

        'official_selldone' => "OFICIÁLNE PREDANÉ",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "mena",
        'free-balance' => "Voľný zostatok",
        'locked-balance' => "Uzamknutá rovnováha",
        'bot' => "Bot",
        'requests' => "Žiadosti",
        'baskets' => 'Vozíky',
        'physical' => "Fyzické",
        'virtual' => "Virtuálne",
        'file' => "Súbor",
        'service' => "servis",
        'fulfillment' => "Plnenie",
        'open' => "OTVORENÉ",
        'reserved' => "Rezervované",
        'canceled' => "Zrušené",
        'payed' => "Zaplatené",
        'cod' => "COD",
        'orders-count' => 'objednávky',
        'payments-count' => 'Platby',
        'confirms-count' => 'Potvrdzuje',
        'sends-count' => 'odosiela',
        'delivers-count' => 'Doručuje',
        'count' => 'počítať',
        'transactions-count' => 'Počítajú sa transakcie',
        'success-transactions' => 'Úspešné transakcie',
        'total-amount' => 'Celková suma',
        'amount' => 'Suma',
        'wage' => 'mzda',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'naživo',
        'CheckQueue' => 'Kontrolný rad',
        'OrderConfirm' => 'Objednávku potvrdiť',
        'PreparingOrder' => 'Príprava objednávky',
        'SentOrder' => 'Odoslaná objednávka',
        'ToCustomer' => 'Doručené zákazníkovi',
        'Pending' => 'Čaká na spracovanie',
        'Accepted' => 'Prijatý',
        'Rejected' => 'Odmietnuté',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefón',
        'total' => 'Celkom',
        'view-detail' => 'Zobraziť detail',
        'empty' => 'Prázdny',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Odpovedzte',
        'reactions' => 'Reakcie',
        'Comments' => 'Komentáre',
        'last-comment' => 'Posledný komentár',
        'response-to' => 'Odpovedať na',
        'posts' => 'Príspevky',
        'post' => 'Príspevok',

        'name' => 'názov',
        'email' => 'Email',
        'type' => 'typu',
        'device' => 'Zariadenie',
        'platform' => 'Plošina',
        'browser' => 'Prehliadač',
        'time' => 'čas',
        'Wallet' => 'Peňaženka',
        'date' => 'Dátum',

        'account' => 'účtu',
        'transaction' => 'Transakcia',
        'fee' => 'Poplatok',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategória',
        'password' => 'heslo',
        'verify-login' => "Overiť a prihlásiť sa",
        'url' => 'URL',
        'avocado' => 'Avokádo',
        'hyper' => 'Hyper',
        'buy-now' => "Kúpte teraz",
        'add-domain' => "Add Domain",
        'views' => 'Názory',


        'country' => 'Krajina',
        'address' => 'adresu',
        'postal' => 'poštové smerovacie číslo',
        'building_no' => 'budova č.',
        'building_unit' => 'jednotka č.',
        'message' => 'Správa',


        'customer' => 'Zákazník',
        'cart-items' => 'Položky košíka',
        'payment' => 'Platba',
        'receiver' => 'Prijímač',
        'virtual-items' => 'Virtuálne položky',
        'no-payment' => 'Žiadna platba!',

        'enable' => 'Povoliť',
        'access' => 'Prístup',
        'bank' => 'Bankové informácie',

        'vendor' => 'Predajca',

        'view_content' => "Zobraziť celý obsah",
        'files' => 'Súbory',
        'download' => 'Stiahnuť ▼',
        'file_name' => 'Názov súboru',
        'file_size' => 'Veľkosť',

        'subscription' => 'Predplatné',
        'products' => 'Produkty',
        'vendor_products' => 'Predajca produktov',

        'pickup' => 'Vyzdvihnutie',

        'minutes' => 'Minúty',
        'hours' => 'Hodiny',

        'refund' => 'Vrátenie peňazí',
        'recipient_address' => 'Adresa príjemcu',
        'signature' => 'Podpis',
        'blockchain' => 'Blockchain',
        'details' => 'Podrobnosti',


    

        'Shop' => 'Obchod',
        'dashboard' => 'prístrojová doska',
        'comments' => 'komentáre',
        'wallet' => 'peňaženku',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Podnikový operačný systém Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Správa o výkonnosti Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone sezónna správa'
        ],
        'Onboarding' => [
            'id' => 'Ahoj',
            'name' => 'Selldone obchodníci'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Podpora :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Overte, Selldone'
        ],
        'Welcome' => [
            'id' => 'Ahoj',
            'name' => 'Komunita Selldone'
        ],
        'NewShop' => [
            'id' => 'obchodníkov',
            'name' => 'Selldone obchodníci'
        ],
        'Approve' => [
            'id' => 'schváliť',
            'name' => 'Selldone obchodníci'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Správa objednávok :name'
        ],

        'Recovery' => [
            'id' => 'zotavenie',
            'name' => 'Tím obnovy Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Čaká sa na ⌛',
        'PAYED' => 'Zaplatené ✅',
        'CANCELED' => 'Zrušené❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'správca',
            'OFFICER' => 'Dôstojník a dozorca',
            'AUDITING' => 'Manažér auditu',
            'EMPLOYEE' => 'zamestnanec',
            'PRODUCT' => 'Produktový manažér',
            'CONTENT' => 'Správca obsahu',
            'MARKETING' => 'Marketingový manažér',
            'VIEWER' => 'Divák',

        ],
        'subject' => ":inviter vás pozval ako :level| :shop",
        'category' => "Pozvanie zamestnancov",
        'title' => "Boli ste pozvaní do <b>:shop_name</b> ako <b>:level</b> .",
        'message' => "Dostali ste pozvánku na spoluprácu s obchodným tímom <b>:shop_title</b>. Túto ponuku máte možnosť prijať alebo odmietnuť. Ak sa rozhodnete prijať, prihláste sa do služby Selldone a potvrďte svoje rozhodnutie. Po potvrdení získate prístup do sekcie správy obchodu.",

    ],

    'welcome-email' => [
        'subject' => "👋 Vitajte :name, začnime s Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Vitajte v Selldone",
        'message' => "Ďakujeme, že ste si vybrali Selldone! Teraz ste súčasťou živej komunity, ktorá spája globálnych predajcov so zákazníkmi, miestne podniky s podnikmi a jednotlivcov s korporáciami. Všetky naše nástroje Master a Pro sú vám k dispozícii **zadarmo** a **neobmedzene**. Sme tu, aby sme vás podporili a otvorili dvere vášmu úspechu.",

        'index' => "Krok :step.",

        'step-domain' => [
            'title' => 'Pridajte svoju vlastnú doménu',
            'message' => "Ak chcete začať, pridajte si svoju vlastnú doménu zadarmo na hlavnom paneli obchodu v časti Nastavenia > Nastavenia domén.",
            'action' => 'Spravovať moje domény',
        ],
        'step-landing' => [
            'title' => 'Prispôsobte si svoju domovskú stránku',
            'message' => "Prispôsobte si svoju domovskú stránku tak, že prejdete na Dashboard > Stránky. Vyberte vstupnú stránku alebo vytvorte novú. Je to jednoduché a intuitívne a môžete na ňom okamžite začať pracovať.",
            'action' => 'Prispôsobiť moju vstupnú stránku',
        ],
        'step-payment' => [
            'title' => 'Nastavte spôsoby platby',
            'message' => "Začnite prijímať platby priamo na svoj bankový účet. Ak chcete pripojiť svojich poskytovateľov platieb, ako sú Stripe, PayPal a ďalšie, prejdite na Dashboard > Accounting > Gateway.",
            'action' => 'Pridajte spôsoby platby',
        ],
        'step-products' => [
            'title' => 'Pridajte svoje produkty',
            'message' => "Jednoducho pridajte produkty a kategórie v hlavnom paneli > Produkty. Je to ako spravovanie súborov a priečinkov na vašom PC – plne pripravené na presúvanie myšou. Môžete tiež hromadne importovať produkty pomocou Excelu. K dispozícii je vzorová šablóna, ktorá vám pomôže začať.",
            'action' => 'Spravovať moje produkty',
        ],
        'step-shipping' => [
            'title' => 'Nastavenie spôsobov dopravy',
            'message' => "Ak chcete zákazníkom účtovať dopravu, definujte spôsoby dopravy v časti Dashboard > Logistic > Shipping. Môžete nastaviť rôzne ceny a podporu pre rôzne miesta. Nezabudnite si nastaviť pôvod skladu v Dashboard > Logistic > Warehouse.",
            'action' => 'Spravujte spôsoby dopravy',
        ],
    

        'seller' => [
            'title' => 'Ste predajca?',
            'message' => 'Ak chcete začať predávať, zadajte svoj informačný panel v Selldone cez odkaz nižšie a vytvorte si svoj prvý obchod úplne zadarmo. Zaberie to niekoľko minút a budete mať svoj vlastný obchod a online stránku. Potom vás prevedieme ďalšími krokmi a získame platobnú bránu.',
            'action' => 'Prihláste sa na môj informačný panel',
        ],
        'buyer' => [
            'title' => 'Som kupujúci',
            'message' => 'gratulujem. Akonáhle sa stanete členom Selldon, zbavíte sa všetkých problémov s členstvom a autentifikáciou v internetových obchodoch. Ak chcete využiť výhody akéhokoľvek obchodu a stránky, ktoré používajú platformu Selldon, môžete sa prihlásiť jediným kliknutím a urobiť svoj nákup jednoduchým, rýchlym a bezpečným.',
        ],
    ],


    'charge-account' => [
        'category' => 'Peňaženka > Účet > Poplatok',
        'title' => "Úspešný poplatok",
        'message' => "Váš účet <b>:account_number</b> bol úspešne zaúčtovaný <b>:amount</b>.",
        'account' => 'účtu',
        'charge' => 'Nabite',
        'balance' => 'Zostatok',
        'footer' => "Urobte podnikanie jednoduchým, dosiahnuteľným a prístupným komukoľvek na svete."
    ],

    'verify-email' => [
        'subject' => "🙌 Dokončite svoju registráciu na Selldone! Overiť odkaz.",
        'category' => "STE JEDEN KROK PREDĆALO",
        'title' => "Overte svoju e-mailovú adresu",
        'message' => "Ahoj :name,<br><br>Ďakujeme, že ste si vybrali Selldone!<br><br>Ak chcete potvrdiť, že <b>Q:email</b> je vaša správna e-mailová adresa, kliknite na uvedený odkaz alebo použite nižšie uvedené tlačidlo. Na dokončenie tohto overenia máte 48 hodín.",
        'footer' => "Ak máte problémy s kliknutím na tlačidlo Overiť, skopírujte a prilepte adresu URL nižšie do svojho webového prehliadača: :activation_url",
        'next-step' => "Ďalej vám pošleme niekoľko užitočných materiálov a podrobného sprievodcu, ktorý vám uľahčí pridanie vlastnej domény, nastavenie platieb, pridávanie produktov a získanie prvej objednávky.",

    ],
    'verify-email-code' => [
        'subject' => "Overovací kód pre :name",
        'category' => "SECURITY",
        'title' => "E-mailový overovací kód",
        'message' => "Ahoj :name,<br><br>Ak chcete potvrdiť, že <b>:email</b> je vaša správna e-mailová adresa, zadajte nasledujúci kód do nasledujúcich <b>10 minút</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Váš obchod je pripravený| :name",
        'category' => "STE JEDEN KROK PREDĆALO",
        'title' => "Nastavenie dokončené",
        'account_title' => "Váš účet",
        'account_msg' => "Overte a prihláste sa do svojho účtu pomocou týchto informácií.",
        'shop_msg' => "Informácie o účte v obchodnom operačnom systéme Selldone.",

    ],

    'reset2fa' => [
        'category' => "OFICIÁLNA BEZPEČNOSTNÁ SPRÁVA",
        'title' => "Požiadajte o zakázanie 2-krokového prihlásenia",
        'message' => "Tento e-mail ste dostali, pretože sme dostali žiadosť o obnovenie dvojfaktorovej autentifikácie pre účet **:name** pomocou e-mailu **:email**.<br><br>Pre váš účet sme našli nasledujúce podrobnosti:",
        'footer' => "Ak ste nepožiadali o obnovenie hesla, nie je potrebná žiadna ďalšia akcia.",
        'action' => 'Zakázať prihlásenie v dvoch krokoch',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Váš obchod je pripravený!",
        'category' => "BORN NOVÝ INTERNETOVÝ OBCHOD NA SVETE",
        'title' => "Gratulujeme, :name!",
        'message' => "<b>Gratulujeme, :name! Váš nový online obchod je teraz aktívny! </b> Sme radi, že vás môžeme privítať v komunite predajcov. Urobili ste prvý krok k úspechu a my sme tu, aby sme vám pomohli na každom kroku.<br>Teraz, keď je váš obchod pripravený, presvedčte sa, že ste pripravení prijímať platby priamo od vašich zákazníkov a začať rozvíjať svoje impérium. Ak by ste niekedy potrebovali pomoc, stačí nám poslať správu – náš tím podpory je tu vždy pre vás.<br><br><b>Dôležité ďalšie kroky:</b> Ak chcete začať, uistite sa, že ste všetko pripravení na prijímanie platieb a hladké operácie. Prevedieme vás každou fázou, aby váš obchod fungoval bez problémov.",
        'pdf-book' => "Nenechajte si ujsť priloženú príručku: Robte svoj biznis ako hra",

        'account' => [
            'title' => 'Krok 1: Nastavte si peňaženku Selldone',
            'message' => "Ak nemáte účet v peňaženke, vytvorte si ho. Soldone odpočíta poplatok z tohto účtu. Tento účet môžete dobiť a spoločnosť Selldone vám tiež naúčtuje sumu kreditu, takže ak bude tento účet záporný, vaša stránka a obchod budú naďalej fungovať.",
            'action' => 'Prihláste sa do peňaženky',
        ],

        'shop-account' => [
            'title' => 'Krok 2: Pripojte účet k obchodu',
            'message' => "Potom pripojte svoj účet peňaženky k svojmu obchodu. Prejdite do <b>Store > Účtovníctvo > Faktúra</b> a prepojte svoju peňaženku. To zaisťuje, že všetky platby zákazníkov sa ukladajú priamo na váš bankový účet – Selldone neodpočítava žiadne sumy z vašich zárobkov.",
            'action' => 'Panel Obchodná faktúra',
        ],

        'gateway' => [
            'title' => 'Krok 3: Pripojte online platobnú bránu',
            'message' => "Teraz poďme nastaviť vašu online platobnú bránu. Prejdite do <b>Store > Účtovníctvo > Port</b> a kliknite na <b>Pridať nový Port</b>. Vyberte svoju menu a zobrazí sa zoznam dostupných platobných brán. Pripojenie brány je rýchle a jednoduché, ale ak potrebujete pomoc, pozrite si príručky Selldone alebo nás kontaktujte.",
            'action' => 'Pridajte portál do obchodu',
        ],

        'domain' => [
            'title' => 'Posledný krok: pripojenie vyhradenej domény',
            'message' => "Svoj obchod budete môcť mať na ľubovoľnom počte domén. Ak chcete pripojiť vyhradenú doménu k obchodu, musíte mať aspoň licenciu na spustenie. Keď každého priateľa predstavíte Selldonovi, získate mesačnú darčekovú licenčnú kartu. Percento platieb vašich priateľov sa tiež pripíše na účty vašich zákazníkov.",
            'action' => 'Predstavenie a prijímanie neobmedzených darčekových kariet',
        ],
    ],


    'basket-list' => [
        'item' => "položka",
        'count' => "počítať",
        'price' => "cena",
        'discount-code' => "Zľavový kód",
        'customer-club' => 'Zákaznícky klub',
        'shipping' => "Doprava",
        'total' => "Celkom",
        'offer' => "Ponuka",
        'coupon' => "kupón",
        'lottery' => "Cena",
        'tax' => "daň",
        'tax_included' => "V cene",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metóda',
        'amount' => 'Suma',
        'giftcard' => 'Gift card',
        'payment' => 'Platba',
    ],


    'shop-subscription-email' => [
        'category' => "Aktualizácia predplatného",
        'title' => "Licencia obchodu: :shop_title",
        'title-reserved' => "Rezervná licencia: :shop_title",
        'title-active' => "Aktívna licencia: :shop_title",
        'title-finished' => "Dokončená licencia: :shop_title",
        'title-cancel' => "Zrušiť licenciu: :shop_title",
        'message' => "Váš licenčný plán obchodu bol aktualizovaný,",
        'RESERVED' => "⚡ Váš plán predplatného bol **rezervovaný**.",
        'ACTIVE' => "🢢 Váš plán predplatného bol **aktivovaný**.",
        'FINISHED' => "🚧 Váš plán predplatného bol **dokončený**.",
        'CANCEL' => "⛔ Váš plán predplatného bol **zrušený**.",
    ],

    'support' => [
        'subject' => "Centrum podpory | :name odpovedal",
        'category' => "Centrum podpory",
        'title' => "Dostali ste odpoveď",
        'action' => "Otvorte správcu obchodu",
    ],

    'shop-customer-join' => [
        'subject' => "Pripojte sa k :shop_title",
        'category' => "Oslava nového zákazníka",
        'title' => "Sme radi za vaše členstvo",
        'action' => "Navštívte teraz",
    ],

    'shop-vendor-join' => [
        'subject' => "Registrácia predajcu| :shop_title",
        'category' => "Oslava nového predajcu",
        'title' => "Sme radi za vaše členstvo",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Darčeková karta :shop_title",
        'category' => "Pridať novú kartu",
        'title' => "Gratulujeme, dostali ste darčekovú kartu",
        'action' => "Nakupuj teraz",
        'message' => "Dostali ste darčekovú kartu v hodnote :balance :currency. S touto darčekovou kartou budete môcť nakupovať v našom obchode.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centrum podpory| :shop",
        'category' => "podporu",
        'title' => "Dostali ste odpoveď",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Potvrdenie objednávky|Objednávka :order_id",
        'title' => "poriadku",
        'message' => "Zadali ste objednávku v našom obchode. Vašu objednávku sme prijali a po potvrdení platby vám pošleme ďalší e-mail."
    ,

        'payments' => 'Platby',
    ],

    'order-payment' => [
        'subject' => "🛍️Potvrdenie platby|Objednávka :order_id",
        'title' => "Platobný príkaz",
        'message' => "Vaša platba bola dokončená,<br> Máme vašu objednávku. Po odoslaní objednávky vám pošleme ďalší e-mail.",
    

        'payments' => 'Platby',
    ],

    'order-update' => [
        'subject' => "🛍️ Aktualizácia stavu objednávky|Objednávka :order_id",
        'title' => "Aktualizácia stavu objednávky",
        'message' => "Vaša objednávka bola aktualizovaná. Najnovší stav tejto objednávky si môžete skontrolovať vo svojom účte.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Vaša objednávka je v rade na spracovanie. Keď sa bude pripravovať, budeme vás informovať.",
                'OrderConfirm' => "Vaša objednávka je potvrdená a príprava začala.",
                'PreparingOrder' => "Vaša objednávka sa pripravuje a čoskoro bude odoslaná.",
                'SentOrder' => "Vaša objednávka bola odoslaná. Čoskoro ho dostanete.",
                'ToCustomer' => "Vaša objednávka bola doručená. Dúfame, že sa vám bude páčiť!",

                'PreparingOrder-PICKUP' => "Vaša objednávka sa pripravuje. Keď bude pripravený na vyzdvihnutie, dostanete upozornenie.",
                'SentOrder-PICKUP' => "Vaša objednávka je pripravená na vyzdvihnutie. Príďte si ho vyzdvihnúť do predajne.",
                'ToCustomer-PICKUP' => "Vaša objednávka bola vyzdvihnutá. Dúfame, že sa vám bude páčiť!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Vaša objednávka je v rade na spracovanie. Keď bude pripravený, upozorníme vás.",
                'OrderConfirm' => "Vaša objednávka je potvrdená a príprava prebieha.",
                'PreparingOrder' => "Vaša objednávka sa pripravuje a čoskoro vám bude odoslaná.",
                'ToCustomer' => "Vaša virtuálna objednávka bola doručená na váš účet. dakujem!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Vaša požiadavka na službu je vo fronte. Keď začneme, budeme vás informovať.",
                'OrderConfirm' => "Vaša služba je potvrdená a pripravujeme sa na spustenie.",
                'PreparingOrder' => "Pripravujeme vašu službu a po jej dokončení vás budeme informovať.",
                'ToCustomer' => "Vaša služba je dokončená. Ďakujeme, že ste si vybrali nás!"
            ],
            'FILE' => [
                'PreparingOrder' => "Váš súbor sa pripravuje a čoskoro bude k dispozícii.",
                'ToCustomer' => "Váš súbor je pripravený a doručený. Teraz si ho môžete stiahnuť."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Vaša objednávka predplatného je vo fronte. O začatí spracovania vás budeme informovať.",
                'OrderConfirm' => "Vaše predplatné bolo potvrdené a prebieha jeho nastavovanie.",
                'PreparingOrder' => "Pripravujeme vaše predplatné a čoskoro sa spustí.",
                'SentOrder' => "Vaše predplatné bolo aktivované. Budete dostávať priebežné aktualizácie.",
                'ToCustomer' => "Vaša predplatiteľská služba bola úspešne aktivovaná."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Gratulujeme :name|Nový poukaz: :title',
        'category' => "GRATULUJEME, NOVÝ POUKAZ",
        'message' => "Ahoj :name,<br><br>Dostali ste od nás nový poukaz ako darček! Môžete zarobiť ešte viac poukážok predstavením Selldone svojim priateľom a všetkým, ktorých poznáte. Tento kupón má hodnotu **:price :currency**.<br><br>Urobili ste prvý krok a my sme tu, aby sme vám pomohli odomknúť nové funkcie pomocou vášho kupónu! Prihláste sa prosím pomocou **:email** a nájdite svoj kupón v Obchode **Hlavný panel** > **Nastavenia** > **Licencia**.<br><br>Blahoželáme!",
        'action' => "Môj informačný panel",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Gratulujem, drahý :name | Dostali ste darček',
        'category' => "Oznámenie o prijatí darčeka",
        'title' => "Darčeky pre vás",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Darčeky",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nová objednávka prijatá| :order_id",
        'title' => "New Order",
        'message' => "Dostali ste novú objednávku. Prejdite na stránku spracovania objednávky vo svojom obchode.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Vaše vyplnené informácie',
        'output-form-title' => 'Informácie o zakúpenom tovare',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Týždenná správa :time',
        'title' => 'Týždenný prehľad výkonnosti obchodu',
        'message' => "Toto je týždenný prehľad vášho obchodu od <b>:start</b> do <b>:end</b>. Tento prehľad obsahuje tipy na zlepšenie vášho podnikania, môžete tiež skontrolovať stav vášho internetového obchodu a posledné objednávky. Dúfam, že máte pred sebou pekný deň a týždeň."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Vaša správa o úsporách :amount za posledné tri mesiace| :shop_title',
        'title' => 'Sezónna správa o vašej podnikateľskej činnosti, odmenách a finančných úsporách',
        'message' => "Toto je váš sezónny prehľad <b>:shop_title</b> od <b>:start</b> do <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Prepojené účty',
        'sub-title' => 'Aký je najnovší stav účtov peňaženky pripojených k môjmu obchodu?',
        'view-wallet' => 'Zobraziť peňaženku',
        'tip-title' => 'Dôležité rady',
        'tip' => "Založte si bezplatnú peňaženku Selldone a prepojte ju so svojím obchodom. Aj keď je váš zostatok záporný, vaši zákazníci môžu stále nakupovať a platiť bez problémov. Nebojte sa, operácie a dáta vášho obchodu budú plynule pokračovať až 1 mesiac, bez akýchkoľvek prerušení.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Pripojte sa k účtu'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Nainštalované aplikácie',
        'sub-title' => 'Zoznam aplikácií, ktoré ste si tento týždeň nainštalovali vo svojom obchode.',
        'tip' => "Chcete nájsť viac aplikácií pre váš obchod?",
        'view-app-store' => 'Preskúmajte obchod s aplikáciami Selldone',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Roboti z vášho obchodu',
        'sub-title' => 'Aktívne predajné roboty v mojom obchode.',
        'tip-title' => 'Predaj topánok',
        'tip' => "Selldone vám poskytol automatické predajné roboty. Jediné, čo musíte urobiť, je prejsť na panel Add-ons> Bots a aktivovať roboty obchodu. Upozorňujeme, že príslušná služba musí byť dostupná vo vašej krajine.",
        'view-bots' => 'Spravovať roboty',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikácia so zákazníkmi',
        'sub-title' => 'Koľko kontaktov som mal tento týždeň so svojimi klientmi?',
        'faqs' => 'často kladené otázky',
        'tickets' => 'Vstupenky pre zákazníkov',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Stav používateľov',
        'sub-title' => 'Činnosť od :start do :end',
        'users' => [
            'title' => 'zákazníkov',
            'subtitle' => 'Registrovať používateľov',
        ],
        'views' => [
            'title' => 'Návštevy',
            'subtitle' => 'Koľkokrát ste navštívili predajňu',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vrátení používatelia',

        'shop_views' => 'Zobrazenia obchodu',
        'baskets' => [
            'title' => 'Nákupné košíky',
            'subtitle' => 'Nahláste počet nových nákupných košíkov',
        ],
        'products' => [
            'title' => 'Prehľad produktov',
            'subtitle' => 'Stav produktov v obchode podľa druhu',
            'value_name' => 'Produkty'
        ],
        'products_count' => 'Typy produktov',
        'views_count' => 'Počet zhliadnutí',
        'sell_count' => 'Počet predajov',
        'send_count' => 'Počet prepravy',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Hlavný panel pre top predajcov Selldone dropshipping',
        'total_fulfillments' => 'Celkový počet prijatých objednávok',
        'ds_count' => 'Prijaté objednávky',
        'statistics_title' => 'Hlásiť prijaté objednávky',
        'ds_cancels' => 'Zrušenie predajcom rozhrania',
        'ds_rejects' => 'Zrušenie vami',
        'tip' => "Ste veľký predajca so skladom, továrňou alebo distribútorom produktov? Svoj dosah môžete rozšíriť ponúkaním svojich produktov iným predajcom prostredníctvom služby Drop Shipping spoločnosti Selldone. Ak sa chcete dozvedieť viac, pošlite nám e-mail na adresu support@selldone.com.",
        'view-drop-shipping-panel' => 'Prihláste sa do veľkoobchodného panelu',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Výmenné kurzy',
        'sub-title' => 'Zoznam najnovších výmenných kurzov vo vašom obchode.',
        'from' => 'Zdrojová mena',
        'to' => 'Cieľová mena',
        'rate' => 'Miera konverzie',
        'view-exchange-panel' => 'Správa výmenných kurzov',
    

        'vew-exchange-panel' => 'panel riadenia výmenných kurzov',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Odborné zmluvy',
        'sub-title' => 'Akí odborníci pracujú v mojom obchode?',
        'cost' => 'Zmluvná suma',
        'duration' => 'Trvanie',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dátum zrušenia',
        'end_at' => 'Dátum doručenia',
        'tip' => 'Na rozvoj svojho podnikania si môžete najať najlepších špecialistov v Selldone.',
        'view-experts' => 'Začnite kliknutím.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Nahlásiť aktívne platobné brány na shop :shop.',
        'tip-title' => 'Dôležité rady',
        'tip' => "Prejdite na stránku správy portálu vo svojom obchode a za pár minút pridajte aspoň jeden port. Vaši zákazníci radi platia rýchlo a bezpečne prostredníctvom online portálov.",
        'view-shop-gateways' => 'Prihláste sa do správy portálu môjho obchodu.',
        'view-gateways' => 'Zobraziť viac brán',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'objednávky',
        'sub-title' => 'Zoznam objednávok, ktoré som dostal tento týždeň.',
        'total_baskets' => 'Celkový počet objednávok',
        'total_posBaskets' => 'Celkový počet hotovostných príkazov',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Objednávky dokončené (tieto objednávky nemusia byť nevyhnutne zaplatené!)',
        'tip-title' => 'Mal by si sa viac snažiť...',
        'tip' => "Žiadny jednoduchý úspech.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Spracovateľské centrum',
        'sub-title' => 'Koľko objednávok sme spracovali v predajni tento týždeň?',
        'tip-title' => 'Nemali ste výpredaj!',
        'tip' => "Tento týždeň ste bohužiaľ nemali žiadne predaje. Do svojho obchodu musíte dostať viac. Môžete pridať viac produktov, vybrať lepšie obrázky alebo napísať lepšie popisy svojich produktov. Zvážte prácu na plný úväzok pre svoje podnikanie. Ak to urobíte správne a nebudete frustrovaní, uspejete.",
        'view-process-center' => 'Zobraziť procesné centrum',
        'return' => [
            'title' => 'Vrátená objednávka',
            'subtitle' => 'Hlásiť vrátené objednávky.',
            'tip-title' => 'Vedeli ste, že ...',
            'tip' => "Pomocou Selldone POS môžete vytvoriť toľko registračných pokladníc, koľko potrebujete! Či už je to váš tablet, mobil alebo notebook, z akéhokoľvek zariadenia môžete urobiť miesto predaja vášho obchodu. Je to jednoduché, rýchle nastavenie a plne pripravené pre váš server. Začnite ho používať ešte dnes!",
            'view-pos' => 'Prihláste sa do My Online Store Pokladňa'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Relácie',
        'sub-title' => 'Koľkokrát som navštívil svoj obchod?',
        'countries-title' => 'Ktoré krajiny boli najnavštevovanejšie?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Chcete zarobiť peniaze bez toho, aby ste minuli jeden dolár?',
        'message' => "Ahoj :name, je čas začať zarábať s Selldone! Prejdite na Informačný panel > Viac > Speňaženie > Získajte svoj odkaz na sprostredkovanie. Zdieľajte odkaz so svojimi priateľmi a získajte darčekové karty a podiel z ich platieb. Najlepšia časť? Darčekovú kartu získate vy aj váš priateľ!",
        'action' => 'Pozrite si môj úvodný odkaz',
        'mail-clip' => "<b style='color: #C2185B'>Dôležité:</b> Ak používate e-mailové služby, ako je Gmail, ktoré obmedzujú dĺžku e-mailu, nájdite na konci e-mailu nasledujúcu možnosť, aby ste zobrazili celý prehľad a kliknite naň:",

        'no-coin-reward' => "<b style='color: #C2185B'>Prepáčte:</b> Vaša aktivita nespĺňala požiadavku na získanie bezplatnej odmeny SEL Coins. Snažte sa viac a predajte viac vo svojom obchode na budúcu sezónu.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Odmena:</b> Gratulujeme, za váš fantastický výkon sme vám dali bezplatnú odmenu :amount SEL Coin.",

        'need-buy-license' => "<b>Zlepšite úroveň svojho podnikania:</b> Zdá sa, že ste ešte nezaregistrovali žiadny plán predplatného pre svoj web! Inovujte teraz a odomknite ďalšie funkcie len za :amount mesačne, ak sa platí ročne.",
        'not-afford-message' => "Ak si nemôžete dovoliť platbu alebo máte problémy s platbou, neváhajte nám to povedať na adrese support@selldone.com.",
        'add-domain' => "<b>Prečo nemať vlastnú doménu pre svoju firmu?</b><br> Pridajte doménu na svoj web hneď teraz; je to zadarmo!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone je a<del> produktu</del> <span style = 'color: forestgreen'>komunita</span> .<br> Staňte sa profesionálnym predajcom!",
        'message' => "Sledujte oficiálne stránky Selldone na Twitteri, LinkedIn a sociálnych sieťach. Pošlite nám akékoľvek pripomienky, požiadavky alebo kritiku alebo sa zapojte do diskusií o Selldone. Sme tiež súčasťou komunity Selldone, ktorú <b>Vy robíte</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Prijaté nové objednávky na avokádo|:shop_title :time',
        'title' => "Prehľad výkonnosti za posledných 24 hodín",
        'message' => "Vaši zákazníci čakajú na kontrolu a stanovenie ceny vašich objednávok. Odpovedzte na požiadavky svojich zákazníkov čo najskôr, aby ste dosiahli vyšší predaj.",
        'card_title' => "Objednávky v rade",
        'card_subtitle' => "Od :date",

        'card_payed' => "Platené objednávky"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Odpovedzte na svoj príspevok v :community_title',
        'title' => ":name a :count ďalších komentovali vaše príspevky.",
        'message' => "Ahoj :name, vaše príspevky získavajú pozornosť! V našej komunite ste dostali komentáre. Prihláste sa do svojho účtu, aby ste sa zapojili do diskusie a videli, čo všetci hovoria.",
        'title-simple' => ":name komentoval vaše príspevky.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Odpovedzte na svoju tému :topic_title',
        'title' => ":name a :count ostatní odpovedali na vašu tému.",
        'message' => "Ahoj :name, vaša téma priťahuje pozornosť! V našej komunite ste dostali odpovede. Prihláste sa do svojho účtu, aby ste sa zapojili do diskusie a videli, čo všetci hovoria.",
        'title-simple' => ":name odpovedal na vašu tému.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nové prihlásenie :name',
        'category' => 'Bezpečnostné upozornenia',
        'title' => "Prihláste sa do účtu",
        'message' => "Vážený :name, bolo zistené prihlásenie do vášho účtu Selldone.",   // Login in selldone (seller)
        'message-shop' => "Vážený :name, ste prihlásený/-á do :shop_title .",  // Login in shop (buyer)

        'footer' => "Ak nie ste prihlásený, zmeňte si heslo.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Odstúpenie",
        'deposit' => "Záloha",

        'withdraw_subject' => "Výber z účtu :account",
        'deposit_subject' => "Vklad na účet :account",

        'message' => "Prevod peňazí sa uskutočnil s nasledujúcimi špecifikáciami.",

        'type' => "Typ transakcie",

        'from' => "Zdrojový účet",
        'to' => "Destination account",

        'desc' => "Popis transakcie",
        'action' => "Zobraziť transakciu",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Dôležité! Porušenie pravidiel| :shop",
        'category' => "Kritická informácia",
        'title' => "Váš obchod bol penalizovaný",
        'action' => "Otvorte informačný panel obchodu",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter vás pozval, aby ste sa pripojili k Selldone",
        'title' => ":name vám poslal :amount, aby vám pomohol spustiť váš nový internetový obchod a speňažiť ho!",
        'message' => "Ahoj **:receiver_name**,<br><br>Vitajte v Selldone! Na Selldone si môžete jednoducho vytvoriť svoju stránku elektronického obchodu, blog, online komunitu a dokonca nastaviť online POS systém pre osobný predaj – to všetko v priebehu niekoľkých minút. Je to kompletný online obchodný operačný systém navrhnutý tak, aby bol váš podnik lepší, rýchlejší a jednoduchší. <br><br>Zaregistrujte sa do <b>:date</b> a získajte poukážku :amount, aby ste mohli začať!",
        'accept' => "Prijať pozvanie",
        'owner' => "Vlastník",
        'join-date' => "Na Selldone od r",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Odkaz na obnovenie| :shop",
        'category' => "Bezpečnosť obchodu",
        'title' => "Odkaz na obnovenie obchodu <b>:shop_name</b>.",
        'message' => "Tento e-mail vám bol odoslaný, pretože ste požiadali o obnovenie obchodu. Kliknutím na odkaz nižšie obnovíte svoj obchod a všetky údaje, ktoré k nemu patria.",
        'action' => "Potvrďte obnovenie obchodu",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Koľko peňazí ušetril Selldone pre vaše podnikanie?',
        'sub-title' => 'Od dátumu :start do :end',
        'infrastructure' => [
            'title' => 'Infraštruktúra',
            'subtitle' => 'Servery, CDN, úložisko a ďalšie cloudové služby',
        ],
        'experts' => [
            'title' => 'Odborníci a zamestnanci',
            'subtitle' => 'Vývojári, údržba a podpora',
        ],
        'total_save' => 'Celkovo ušetrené peniaze'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Váš výkon',
        'sub-title' => 'Prehľad podnikania od :start do :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vrátení používatelia',

        'shop_views' => 'Zobrazenia obchodu',
        'baskets' => [
            'title' => 'Nákupné košíky',
            'subtitle' => 'Nahláste počet nových nákupných košíkov',

        ],
        'products' => [
            'title' => 'Prehľad produktov',
            'subtitle' => 'Stav produktov v obchode podľa druhu',
            'value_name' => 'Produkty'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Celkový počet zobrazení stránky webu',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Dostali ste novú objednávku. Prejdite na stránku spracovania objednávky na paneli dodávateľa.",
        'subject' => "🛍️ Nová objednávka prijatá| :order_id",
        'your_revenue' => "Vaše príjmy",
    ],
    'vendor-invite' => [
        'title' => 'Pozvánka predajcu',
        'message' => "Dostali ste pozvánku stať sa dodávateľom :shop_name. Môžete ho prijať alebo odmietnuť kliknutím na nasledujúce tlačidlá.",
        'subject' => ":shop_name |Pozvánka stať sa našim predajcom",
        'accept' => "Prijať a stať sa predajcom",
        'reject' => "Odmietnuť",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Pozvánka do nášho tímu',
        'message' => "Boli ste pozvaní, aby ste sa pripojili k :vendor_name na :shop_name. Toto pozvanie môžete prijať alebo odmietnuť pomocou tlačidiel nižšie.",
        'subject' => "Pozvánka na pripojenie k :vendor_name|Staňte sa členom tímu",
        'accept' => "Prijať a pripojiť sa k tímu",
        'reject' => "Odmietnuť",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Váš prihlasovací kód pre :shop",
        'header-message' => "Tento e-mail vám posielame, pretože ste požadovali prihlasovací kód do obchodu. Nižšie nájdete svoje jednorazové heslo (OTP):",
        'footer-message' => "Tento kód bude platný 10 minút. Ak ste si tento prihlasovací kód nevyžiadali, ignorujte tento e-mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Overte svoj e-mail| :shop",
        'title' => 'Overenie e-mailom',
        'header-message' => "Ahoj :name,<br>Potvrďte, že **:email** je vaša e-mailová adresa, kliknutím na tlačidlo nižšie alebo pomocou odkazu nižšie do 48 hodín.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Aktualizácie produktov| :shop",
        'title' => "Aktualizácia stavu produktu – posledných 24 hodín",
        'message' => "Dúfam, že vás táto správa nájde dobre. Toto je krátka aktualizácia, ktorá vás informuje o stave vašich produktov na našej platforme za posledných 24 hodín.\nPočas tohto obdobia došlo k zmenám v stave niektorých produktov. Tieto zmeny môžu byť spôsobené nákupmi, aktualizáciami zásob alebo inými súvisiacimi udalosťami.\nAk chcete získať podrobnejšie informácie o každom produkte, prihláste sa do svojho účtu a skontrolujte časť „Stav produktu“.",
        'action' => "Otvorte panel dodávateľa",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Prijaté hromadné objednávky| :shop | :date",
        'title' => "Oznámenie o hromadných objednávkach",
        'message' => "Dostali ste dávku hromadných objednávok. Ďalšie podrobnosti nájdete na stránke spracovania objednávky vo vašom paneli. Zoznam objednávok si môžete stiahnuť aj prostredníctvom poskytnutého zabezpečeného odkazu s platnosťou 7 dní.<br><br>\n        <b>DÔLEŽITÉ:</b> Tento odkaz je platný 7 dní.<br>\n        Tento odkaz je dynamický, takže zakaždým, keď naň kliknete, dostanete najaktuálnejšie objednávky pre tento konkrétny dátum. <b>Znamená to, že ak sa stav platby objednávky zmení na odmietnutý, objednávku už v stiahnutom CSV neuvidíte, alebo ak je objednávka zaplatená, zobrazí sa v zozname.</b><br><br>\n        <ul>\n            <li>CSV obsahuje platené objednávky s rezervovaným dátumom v :date.</li>\n            <li>Rezervovaný dátum je dátum, keď používateľ klikne na pokladňu na stránke objednávky.</li>\n        </ul>\n        <b>Aby ste predišli duplicitným objednávkam, pred odoslaním vždy skontrolujte objednávku ID.</b>",
        'action' => "Stiahnite si zoznam objednávok",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Niektoré položky vo vašej objednávke neboli prijaté a nemôžu byť doručené. Suma za tieto položky bude čoskoro vrátená na vašu kartu."
    ]

];
