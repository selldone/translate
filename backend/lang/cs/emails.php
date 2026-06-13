<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Tato zpráva vítá nového kupujícího v obchodě.',
        ShopMailTemplateCodes::OrderCheckout => 'Toto oznámení je odesláno, když kupující potvrdí objednávku.',
        ShopMailTemplateCodes::OrderPayment => 'Toto oznámení potvrzuje úspěšnou platbu provedenou zákazníkem.',
        ShopMailTemplateCodes::OrderUpdate => 'Tato zpráva je odeslána za účelem aktualizace kupujícího o stavu jeho objednávky.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Tato zpráva je zaslána prodejci, aby jej informoval o potvrzené objednávce.',
        ShopMailTemplateCodes::PosCheckout => 'Toto oznámení je odesláno za účelem potvrzení objednávky místa prodeje pro kupujícího.',
        ShopMailTemplateCodes::PosPayment => 'Toto oznámení potvrzuje platbu v místě prodeje provedenou kupujícím.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Tato zpráva informuje prodejce o nákupu uskutečněném v jeho prodejním místě.',
        ShopMailTemplateCodes::ShopContact => 'Toto oznámení je odesláno po odeslání kontaktního formuláře.',
        ShopMailTemplateCodes::ShopGiftCard => 'Toto oznámení informuje uživatele, že obdržel dárkovou kartu.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Tato zpráva vítá nového prodejce v obchodě.',
        ShopMailTemplateCodes::ShopVendorInvite => "Tato zpráva je odeslána, abychom pozvali dodavatele, aby se připojil k vašemu trhu.",
        ShopMailTemplateCodes::ShopVendorOrder => "Tato zpráva je odeslána dodavateli, když je objednávka přijata ve stavu Zaplaceno nebo Na dobírku (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Odesílá se denně, aby dodavatelé informovali o stavu jejich produktů.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Tato zpráva je odeslána s cílem pozvat dodavatele, aby se připojil k vašemu trhu.",

        ShopMailTemplateCodes::UserLogin => "Z bezpečnostních důvodů informujte uživatele s přihlašovacími údaji, včetně adresy IP, data a zařízení.",
        ShopMailTemplateCodes::LoginCode => "Odešlete uživatelům jednorázový kód hesla pro přihlášení do obchodu.",

        ShopMailTemplateCodes::EmailVerifyLink => "Pošlete odkaz pro ověření e-mailové adresy uživatele. Tento e-mail je odeslán, když se uživatel zaregistruje pomocí SMS a zadá svůj e-mail. Neposílá se, když se uživatel zaregistruje přímo pomocí sociálního přihlášení nebo e-mailu.",

        ShopMailTemplateCodes::EmailBulkOrder => "Odešlete hromadně seznam přijatých a zaplacených objednávek na konkrétní den."


    ,

    ],


    'global' => [
        'greetings' => 'Ahoj, :name!',
        'end-statement' => 'Tým podpory',

        'receiver_name' => 'Ahoj :user_name',
        'footer-help' => "Potřebujete pomoc? Zeptejte se na [support@selldone.com](mailto:support@selldone.com) nebo navštivte naše [centrum nápovědy](https://selldone.com/community).",
        'selldone-team' => 'Tým Selldone',
        'footer-shop' => "Pokud potřebujete s čímkoli pomoci, neváhejte nám napsat e-mail: :shop_mail",
        'accept' => "Přijmout",
        'reject' => "Odmítnout",
        'verify' => "ověřit",
        'title' => "Titul",
        'value' => "Hodnota",
        'description' => "Popis",
        'shop' => "Prodejna",
        'shop-info' => "Informace o obchodu",
        'user' => "Uživatel",
        'user-info' => "Informace o účtu",
        'license' => "Licence",
        'status' => "Postavení",
        'start' => "Start",
        'end' => "Konec",
        'renewal' => "Obnova",
        'view' => "Pohled",

        'balance' => "Zůstatek",
        'card_number' => "Číslo karty",
        'cvv' => "CVV",
        'expire_date' => "Datum spotřeby",

        'Dashboard' => "Dashboard",
        'order' => "objednávka",
        'view_order' => "Zobrazit objednávku",
        'pay_now' => "Pay now",

        'official_selldone' => "OFICIÁLNĚ PRODÁNO",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Měna",
        'free-balance' => "Volný zůstatek",
        'locked-balance' => "Uzamčená rovnováha",
        'bot' => "Bot",
        'requests' => "Žádosti",
        'baskets' => 'Vozíky',
        'physical' => "Fyzický",
        'virtual' => "Virtuální",
        'file' => "Soubor",
        'service' => "Servis",
        'fulfillment' => "Splnění",
        'open' => "OTEVŘENO",
        'reserved' => "Rezervováno",
        'canceled' => "Zrušeno",
        'payed' => "Zaplaceno",
        'cod' => "COD",
        'orders-count' => 'Objednávky',
        'payments-count' => 'Platby',
        'confirms-count' => 'Potvrzuje',
        'sends-count' => 'Odešle',
        'delivers-count' => 'Doručuje',
        'count' => 'Počet',
        'transactions-count' => 'Počítají se transakce',
        'success-transactions' => 'Úspěšné transakce',
        'total-amount' => 'Celková částka',
        'amount' => 'Množství',
        'wage' => 'Mzda',
        'debug' => 'Ladit',
        'pos' => 'POS',
        'live' => 'Žít',
        'CheckQueue' => 'Zkontrolujte frontu',
        'OrderConfirm' => 'Potvrdit objednávku',
        'PreparingOrder' => 'Příprava objednávky',
        'SentOrder' => 'Odeslaná objednávka',
        'ToCustomer' => 'Dodáno zákazníkovi',
        'Pending' => 'čekající',
        'Accepted' => 'Přijato',
        'Rejected' => 'Odmítnuto',
        'pc' => 'PC',
        'tablet' => 'Tableta',
        'phone' => 'Telefon',
        'total' => 'Celkový',
        'view-detail' => 'Zobrazit detail',
        'empty' => 'Prázdný',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Odpověď',
        'reactions' => 'Reakce',
        'Comments' => 'Komentáře',
        'last-comment' => 'Poslední komentář',
        'response-to' => 'Odpověď na',
        'posts' => 'Příspěvky',
        'post' => 'Pošta',

        'name' => 'název',
        'email' => 'E-mailem',
        'type' => 'typ',
        'device' => 'přístroj',
        'platform' => 'Plošina',
        'browser' => 'Prohlížeč',
        'time' => 'Čas',
        'Wallet' => 'Peněženka',
        'date' => 'datum',

        'account' => 'Účet',
        'transaction' => 'Transakce',
        'fee' => 'Poplatek',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Účtovat',
        'category' => 'Kategorie',
        'password' => 'Heslo',
        'verify-login' => "Ověřit a přihlásit se",
        'url' => 'URL',
        'avocado' => 'Avokádo',
        'hyper' => 'Hyper',
        'buy-now' => "Kup nyní",
        'add-domain' => "Add Domain",
        'views' => 'Pohledy',


        'country' => 'Země',
        'address' => 'adresa',
        'postal' => 'poštovní směrovací číslo',
        'building_no' => 'budova č.',
        'building_unit' => 'jednotka #',
        'message' => 'Zpráva',


        'customer' => 'Zákazník',
        'cart-items' => 'Položky košíku',
        'payment' => 'Způsob platby',
        'receiver' => 'Přijímač',
        'virtual-items' => 'Virtuální předměty',
        'no-payment' => 'Žádná platba!',

        'enable' => 'Umožnit',
        'access' => 'Přístup',
        'bank' => 'Bankovní informace',

        'vendor' => 'Prodejce',

        'view_content' => "Zobrazit celý obsah",
        'files' => 'Soubory',
        'download' => 'Stažení',
        'file_name' => 'Název souboru',
        'file_size' => 'Velikost',

        'subscription' => 'Předplatné',
        'products' => 'produkty',
        'vendor_products' => 'Prodejce produktů',

        'pickup' => 'Vyzvednutí',

        'minutes' => 'minut',
        'hours' => 'hodiny',

        'refund' => 'Vrácení peněz',
        'recipient_address' => 'Adresa příjemce',
        'signature' => 'Podpis',
        'blockchain' => 'Blockchain',
        'details' => 'Podrobnosti',


    

        'Shop' => 'Prodejna',
        'dashboard' => 'přístrojová deska',
        'comments' => 'komentáře',
        'wallet' => 'peněženka',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Obchodní operační systém Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Zpráva o výkonu Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone sezónní zpráva'
        ],
        'Onboarding' => [
            'id' => 'Ahoj',
            'name' => 'Schvalujte, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Podpora :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Ověřte, Selldone'
        ],
        'Welcome' => [
            'id' => 'Ahoj',
            'name' => 'Komunita Selldone'
        ],
        'NewShop' => [
            'id' => 'obchodníků',
            'name' => 'Schvalujte, Selldone'
        ],
        'Approve' => [
            'id' => 'Schválit',
            'name' => 'Schvalujte, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Správa objednávek :name'
        ],

        'Recovery' => [
            'id' => 'zotavení',
            'name' => 'Tým obnovy Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Nevyřízeno ⌛',
        'PAYED' => 'Zaplaceno ✅',
        'CANCELED' => 'Zrušeno❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Správce',
            'OFFICER' => 'Důstojník a dozorce',
            'AUDITING' => 'Vedoucí auditu',
            'EMPLOYEE' => 'Zaměstnanec',
            'PRODUCT' => 'Produktový manažer',
            'CONTENT' => 'Manažer obsahu',
            'MARKETING' => 'Marketingový manažer',
            'VIEWER' => 'Divák',

        ],
        'subject' => ":inviter vás pozval jako :level| :shop",
        'category' => "Pozvánka zaměstnanců",
        'title' => "Byli jste pozváni do <b>:shop_name</b> jako <b>:level</b> .",
        'message' => "Obdrželi jste pozvání ke spolupráci s týmem <b>:shop_title</b> v podnikání. Máte možnost tuto nabídku přijmout nebo odmítnout. Pokud se rozhodnete přijmout, přihlaste se prosím ke službě Selldone a potvrďte své rozhodnutí. Po potvrzení získáte přístup do sekce správy obchodu.",

    ],

    'welcome-email' => [
        'subject' => "👋 Vítejte :name, pojďme začít s Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Vítejte v Selldone",
        'message' => "Děkujeme, že jste si vybrali Selldone! Nyní jste součástí živé komunity, která propojuje globální prodejce se zákazníky, místní podniky s podniky a jednotlivce s korporacemi. Všechny naše nástroje Master a Pro jsou vám k dispozici **zdarma** a **neomezené**. Jsme tu, abychom vás podpořili a otevřeli dveře vašemu úspěchu.",

        'index' => "Krok :step.",

        'step-domain' => [
            'title' => 'Přidejte svou vlastní doménu',
            'message' => "Chcete-li začít, přidejte si svou vlastní doménu zdarma na hlavním panelu obchodu v části Nastavení > Nastavení domén.",
            'action' => 'Správa mých domén',
        ],
        'step-landing' => [
            'title' => 'Přizpůsobte si domovskou stránku',
            'message' => "Přizpůsobte si svou domovskou stránku tím, že přejdete na Hlavní panel > Stránky. Vyberte vstupní stránku nebo vytvořte novou. Je to snadné a intuitivní a můžete na něm okamžitě začít pracovat.",
            'action' => 'Přizpůsobit mou vstupní stránku',
        ],
        'step-payment' => [
            'title' => 'Nastavení platebních metod',
            'message' => "Začněte přijímat platby přímo na svůj bankovní účet. Chcete-li propojit své poskytovatele plateb, jako je Stripe, PayPal a další, přejděte na Dashboard > Accounting > Gateway.",
            'action' => 'Přidat platební metody',
        ],
        'step-products' => [
            'title' => 'Přidejte své produkty',
            'message' => "Produkty a kategorie můžete snadno přidávat na Panelu > Produkty. Je to stejné jako při správě souborů a složek na vašem PC – plně připraveno k přetažení. Produkty můžete také hromadně importovat pomocí Excelu. K dispozici je vzorová šablona, ​​která vám pomůže začít.",
            'action' => 'Správa mých produktů',
        ],
        'step-shipping' => [
            'title' => 'Nastavení způsobů dopravy',
            'message' => "Chcete-li zákazníkům účtovat dopravu, definujte své způsoby dopravy v Panelu > Logistika > Doprava. Pro různá umístění můžete nastavit různé ceny a podporu. Nezapomeňte si nastavit původ skladu v Dashboard > Logistic > Warehouse.",
            'action' => 'Spravujte způsoby dopravy',
        ],
    

        'seller' => [
            'title' => 'Jste prodejce?',
            'message' => 'Chcete-li začít prodávat, zadejte svůj řídicí panel do Selldone prostřednictvím odkazu níže a vytvořte si svůj první obchod zcela zdarma. Zabere to několik minut a budete mít svůj vlastní obchod a online stránky. Následně vás provedeme dalšími kroky a získáte platební bránu.',
            'action' => 'Přihlaste se na můj panel',
        ],
        'buyer' => [
            'title' => 'Jsem kupující',
            'message' => 'Gratulujeme. Jakmile se stanete členem Selldone, zbavíte se všech potíží s členstvím a autentizací v internetových obchodech. Chcete-li těžit z jakéhokoli obchodu a webu, který používá platformu Selldone, můžete se přihlásit jediným kliknutím a nákup je jednoduchý, rychlý a bezpečný.',
        ],
    ],


    'charge-account' => [
        'category' => 'Peněženka > Účet > Poplatek',
        'title' => "Úspěšný poplatek",
        'message' => "Váš účet <b>:account_number</b> byl úspěšně naúčtován <b>:amount</b>.",
        'account' => 'Účet',
        'charge' => 'Nabít',
        'balance' => 'Zůstatek',
        'footer' => "Udělejte podnikání snadným, dosažitelným a přístupným komukoli na světě."
    ],

    'verify-email' => [
        'subject' => "🙌 Dokončete své přihlášení k Selldone! Ověřte odkaz.",
        'category' => "JSTE O KROK DÁLE",
        'title' => "Ověřte svou e-mailovou adresu",
        'message' => "Ahoj :name,<br><br>Děkujeme, že jste si vybrali Selldone! <br><br>Chcete-li potvrdit, že <b>Q:email</b> je vaše správná e-mailová adresa, klikněte prosím na níže uvedený odkaz nebo použijte níže uvedené tlačítko. Na dokončení tohoto ověření máte 48 hodin.",
        'footer' => "Pokud máte potíže s kliknutím na tlačítko Ověřit, zkopírujte a vložte níže uvedenou adresu URL do svého webového prohlížeče: :activation_url",
        'next-step' => "Dále vám zašleme užitečné materiály a podrobného průvodce, který vám usnadní přidání vlastní domény, nastavení plateb, přidání produktů a získání první objednávky.",

    ],
    'verify-email-code' => [
        'subject' => "Ověřovací kód pro :name",
        'category' => "SECURITY",
        'title' => "E-mailový ověřovací kód",
        'message' => "Ahoj :name,<br><br>Chcete-li potvrdit, že <b>:email</b> je vaše správná e-mailová adresa, zadejte prosím následující kód během následujících <b>10 minut</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Váš obchod je připraven| :name",
        'category' => "JSTE O KROK DÁLE",
        'title' => "Nastavení dokončeno",
        'account_title' => "Váš účet",
        'account_msg' => "Ověřte a přihlaste se ke svému účtu pomocí těchto údajů.",
        'shop_msg' => "Informace o účtu v obchodním operačním systému Selldone.",

    ],

    'reset2fa' => [
        'category' => "BEZPEČNOSTNÍ OFICIÁLNÍ ZPRÁVA",
        'title' => "Požádejte o zakázání dvoufázového přihlášení",
        'message' => "Tento e-mail jste obdrželi, protože jsme obdrželi požadavek na resetování dvoufaktorového ověření pro účet **:name** pomocí e-mailu **:email**.<br><br>O vašem účtu jsme našli následující podrobnosti:",
        'footer' => "Pokud jste o reset hesla nepožádali, není vyžadována žádná další akce.",
        'action' => 'Zakázat dvoufázové přihlášení',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Váš obchod je připraven!",
        'category' => "BORN NOVÝ INTERNETOVÝ OBCHOD NA SVĚTĚ",
        'title' => "Gratulujeme, :name!",
        'message' => "<b>Gratulujeme, :name! Váš nový online obchod je nyní aktivní! </b> Jsme rádi, že vás můžeme přivítat v komunitě Selldoners. Udělali jste první krok k úspěchu a my jsme tu, abychom vám pomohli na každém kroku. <br>Nyní, když je váš obchod připraven, pojďme se ujistit, že jste připraveni přijímat platby přímo od svých zákazníků a začít rozvíjet své impérium. Pokud budete někdy potřebovat pomoc, stačí nám jen jedna zpráva – náš tým podpory je tu vždy pro vás.<br><br><b>Důležité další kroky:</b> Nejprve se ujistěte, že jste vše připraveni pro příjem plateb a hladký provoz. Provedeme vás každou fází, aby váš obchod fungoval bez problémů.",
        'pdf-book' => "Nenechte si ujít přiloženou příručku: Dělejte své podnikání jako hra",

        'account' => [
            'title' => 'Krok 1: Nastavte si peněženku Selldone',
            'message' => "Chcete-li začít, vytvořte si účet ve své peněžence Selldone. Zde budou vaše poplatky odečteny a také zde budete dobíjet, aby váš obchod fungoval hladce. Pokud bude váš zůstatek záporný, nezoufejte! Váš obchod bude nadále fungovat bez přerušení.",
            'action' => 'Přihlaste se do peněženky',
        ],

        'shop-account' => [
            'title' => 'Krok 2: Připojte účet k obchodu',
            'message' => "Dále připojte svůj účet peněženky k vašemu obchodu. Přejděte do <b>Store > Účetnictví > Faktura</b> a připojte svou peněženku. Tím je zajištěno, že všechny platby od zákazníků budou uloženy přímo na váš bankovní účet – Selldone neodečítá žádné částky z vašich příjmů.",
            'action' => 'Panel Store Invoice',
        ],

        'gateway' => [
            'title' => 'Krok 3: Připojte online platební bránu',
            'message' => "Nyní nastavíme vaši online platební bránu. Přejděte na <b>Store > Účetnictví > Port</b> a klikněte na <b>Přidat nový Port</b>. Vyberte svou měnu a zobrazí se seznam dostupných platebních bran. Připojení brány je rychlé a snadné, ale pokud potřebujete pomoc, neváhejte se podívat do příruček Selldone nebo se na nás obraťte.",
            'action' => 'Přidejte portál do obchodu',
        ],

        'domain' => [
            'title' => 'Poslední krok: připojení vyhrazené domény',
            'message' => "Svůj obchod budete moci mít na tolika doménách, kolik budete chtít. Chcete-li připojit vyhrazenou doménu k obchodu, musíte mít alespoň spouštěcí licenci. Když každého přítele seznámíte s Selldonem, získáte dárkovou kartu s licenční licencí na jeden měsíc. Procento plateb vašich přátel bude také připsáno na účty vašich zákazníků.",
            'action' => 'Představení a příjem neomezených dárkových karet',
        ],
    ],


    'basket-list' => [
        'item' => "položka",
        'count' => "Počet",
        'price' => "cena",
        'discount-code' => "Slevový kód",
        'customer-club' => 'Zákaznický klub',
        'shipping' => "Lodní doprava",
        'total' => "Celkový",
        'offer' => "Nabídka",
        'coupon' => "Kupón",
        'lottery' => "Cena",
        'tax' => "Daň",
        'tax_included' => "V ceně",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metoda',
        'amount' => 'Množství',
        'giftcard' => 'Gift card',
        'payment' => 'Způsob platby',
    ],


    'shop-subscription-email' => [
        'category' => "Aktualizace předplatného",
        'title' => "Licence obchodu: :shop_title",
        'title-reserved' => "Rezervovat licenci: :shop_title",
        'title-active' => "Aktivní licence: :shop_title",
        'title-finished' => "Dokončená licence: :shop_title",
        'title-cancel' => "Zrušit licenci: :shop_title",
        'message' => "Váš licenční plán obchodu byl aktualizován,",
        'RESERVED' => "⚡ Váš plán předplatného byl **rezervován**.",
        'ACTIVE' => "🢢 Váš plán předplatného byl **aktivován**.",
        'FINISHED' => "🚧 Váš plán předplatného byl **dokončen**.",
        'CANCEL' => "⛔ Váš plán předplatného byl **zrušen**.",
    ],

    'support' => [
        'subject' => "Centrum podpory | :name odpověděl",
        'category' => "Centrum podpory",
        'title' => "Obdrželi jste odpověď",
        'action' => "Otevřít správce obchodu",
    ],

    'shop-customer-join' => [
        'subject' => "Připojte se k :shop_title",
        'category' => "Oslava nového zákazníka",
        'title' => "Jsme rádi za vaše členství",
        'action' => "Navštivte nyní",
    ],

    'shop-vendor-join' => [
        'subject' => "Registrace dodavatele| :shop_title",
        'category' => "Oslava nového prodejce",
        'title' => "Jsme rádi za vaše členství",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Dárkový poukaz :shop_title",
        'category' => "Přidat novou kartu",
        'title' => "Gratulujeme, obdrželi jste dárkovou kartu",
        'action' => "Nakupuj teď",
        'message' => "Obdrželi jste dárkovou kartu v hodnotě :balance :currency. S touto dárkovou kartou budete moci nakupovat v našem obchodě.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centrum podpory| :shop",
        'category' => "podpora",
        'title' => "Obdrželi jste odpověď",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Potvrzení objednávky|Objednejte :order_id",
        'title' => "objednávka",
        'message' => "Zadali jste objednávku v našem obchodě. Vaši objednávku jsme obdrželi a po potvrzení platby vám zašleme další e-mail."
    ,

        'payments' => 'Platby',
    ],

    'order-payment' => [
        'subject' => "🛍️ Potvrzení platby|Objednejte :order_id",
        'title' => "Platební příkaz",
        'message' => "Vaše platba dokončena,<br> Máme vaši objednávku. Po odeslání objednávky vám pošleme další e-mail.",
    

        'payments' => 'Platby',
    ],

    'order-update' => [
        'subject' => "🛍️ Aktualizace stavu objednávky|Objednejte :order_id",
        'title' => "Aktualizace stavu objednávky",
        'message' => "Vaše objednávka byla aktualizována. Nejnovější stav této objednávky můžete zkontrolovat ve svém účtu.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Vaše objednávka je ve frontě na zpracování. Až se bude připravovat, budeme vás informovat.",
                'OrderConfirm' => "Vaše objednávka je potvrzena a příprava začala.",
                'PreparingOrder' => "Vaše objednávka se připravuje a bude brzy odeslána.",
                'SentOrder' => "Vaše objednávka byla odeslána. Brzy jej obdržíte.",
                'ToCustomer' => "Vaše objednávka byla doručena. Doufáme, že se vám bude líbit!",

                'PreparingOrder-PICKUP' => "Vaše objednávka se připravuje. Až bude připraven k vyzvednutí, obdržíte upozornění.",
                'SentOrder-PICKUP' => "Vaše objednávka je připravena k vyzvednutí. Přijďte si ho vyzvednout do prodejny.",
                'ToCustomer-PICKUP' => "Vaše objednávka byla vyzvednuta. Doufáme, že se vám bude líbit!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Vaše objednávka je ve frontě na zpracování. Až bude připraven, dáme vám vědět.",
                'OrderConfirm' => "Vaše objednávka je potvrzena a příprava probíhá.",
                'PreparingOrder' => "Vaše objednávka se připravuje a brzy vám bude odeslána.",
                'ToCustomer' => "Vaše virtuální objednávka byla doručena na váš účet. Děkuju!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Váš požadavek na službu je ve frontě. Až začneme, budeme vás informovat.",
                'OrderConfirm' => "Vaše služba je potvrzena a připravujeme se na zahájení.",
                'PreparingOrder' => "Vaši službu připravujeme a po jejím dokončení vás budeme informovat.",
                'ToCustomer' => "Vaše služba je kompletní. Děkujeme, že jste si vybrali nás!"
            ],
            'FILE' => [
                'PreparingOrder' => "Váš soubor se připravuje a bude brzy k dispozici.",
                'ToCustomer' => "Váš soubor je připraven a byl doručen. Nyní si jej můžete stáhnout."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Vaše objednávka předplatného je ve frontě. O zahájení zpracování vás budeme informovat.",
                'OrderConfirm' => "Vaše předplatné bylo potvrzeno a právě se nastavuje.",
                'PreparingOrder' => "Připravujeme vaše předplatné a brzy začne.",
                'SentOrder' => "Vaše předplatné bylo aktivováno. Budete dostávat průběžné aktualizace.",
                'ToCustomer' => "Vaše předplatitelská služba byla úspěšně aktivována."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Gratulujeme :name|Nový voucher: :title',
        'category' => "GRATULUJEME, NOVÝ POUKAZ",
        'message' => "Ahoj :name,<br><br>Dostali jste od nás nový voucher jako dárek! Můžete získat ještě více voucherů tím, že představíte Selldone svým přátelům a všem, které znáte. Tento poukaz má hodnotu **:price :currency**.<br><br>Udělali jste první krok a my jsme tu, abychom vám pomohli odemknout nové funkce pomocí vašeho poukazu! Přihlaste se prosím pomocí **:email** a najděte svůj voucher v obchodě **Dashboard** > **Nastavení** > **Licence**.<br><br>Blahopřejeme!",
        'action' => "Moje palubní deska",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Gratuluji, drahý :name | Dostali jste dárek',
        'category' => "Oznámení o přijetí dárku",
        'title' => "Dárky pro vás",
        'message' => "Ahoj :name, s potěšením vám oznamujeme, že jste obdrželi speciální dárek od Selldone! 🎉 Můžete získat více dárků tím, že zůstanete aktivní, rozšíříte svůj obchod a zlepšíte své znalosti o Selldone. Chcete-li si dárek prohlédnout, jednoduše se přihlaste pomocí :email a vyhledejte jej v pravém horním rohu ovládacího panelu. <br><br>Tento dárek má hodnotu **:price :currency** a svůj dárek si můžete snadno uložit do peněženky v rámci svého upgradu QQ00Q09se do QQ00008QQ0Q1Q.Q0 licence obchodu a odemkněte ještě výkonnější nástroje pro podporu vašeho online podnikání!",
        'action' => "Dárkové předměty",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nová objednávka přijata| :order_id",
        'title' => "New Order",
        'message' => "Obdrželi jste novou objednávku. Přejděte prosím na stránku zpracování objednávky ve vašem obchodě.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Vaše vyplněné informace',
        'output-form-title' => 'Informace o zakoupeném zboží',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Týdenní zpráva :time',
        'title' => 'Týdenní přehled výkonu obchodu',
        'message' => "Toto je týdenní přehled vašeho obchodu od <b>:start</b> do <b>:end</b>. Tato zpráva obsahuje tipy pro zlepšení vašeho podnikání, můžete také zkontrolovat stav svého internetového obchodu a nedávné objednávky. Doufám, že máte před sebou dobrý den a týden."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Vaše zpráva o úsporách :amount za poslední tři měsíce| :shop_title',
        'title' => 'Sezónní zpráva o vaší podnikatelské aktivitě, odměnách a finančních úsporách',
        'message' => "Toto je vaše sezónní zpráva <b>:shop_title</b> od <b>:start</b> do <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Propojené účty',
        'sub-title' => 'Jaký je nejnovější stav účtů peněženky připojených k mému obchodu?',
        'view-wallet' => 'Zobrazit peněženku',
        'tip-title' => 'Důležité tipy',
        'tip' => "V dalším kroku si vytvořte bezplatný účet ve své peněžence Soldone a připojte jej k tomuto obchodu. I když je zůstatek na vašem účtu Selldone záporný, vaši zákazníci mohou stále bez problémů nakupovat a platit za váš obchod. Vaše data a služby nebudou přerušeny nebo omezeny po dobu alespoň 1 měsíce.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Připojte se k účtu'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Nainstalované aplikace',
        'sub-title' => 'Seznam aplikací, které jste tento týden nainstalovali ve svém obchodě.',
        'tip' => "Chcete najít další aplikace pro váš obchod?",
        'view-app-store' => 'Prozkoumejte Selldone App Store',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Roboti z vašeho obchodu',
        'sub-title' => 'Aktivní prodejní roboti v mém obchodě.',
        'tip-title' => 'Prodej bot',
        'tip' => "Selldone vám poskytl automatické prodejní roboty. Jediné, co musíte udělat, je přejít na panel Doplňky> Boti a aktivovat roboty obchodu. Upozorňujeme, že příslušná služba musí být dostupná ve vaší zemi.",
        'view-bots' => 'Spravovat roboty',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikace se zákazníky',
        'sub-title' => 'Kolik kontaktů jsem měl tento týden se svými klienty?',
        'faqs' => 'Často kladené otázky',
        'tickets' => 'Zákaznické vstupenky',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Stav uživatelů',
        'sub-title' => 'Od data :start do :end',
        'users' => [
            'title' => 'Zákazníci',
            'subtitle' => 'Registrovat uživatele',
        ],
        'views' => [
            'title' => 'Návštěvy',
            'subtitle' => 'Kolikrát jste obchod navštívili',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vrácení uživatelé',

        'shop_views' => 'Zobrazení obchodu',
        'baskets' => [
            'title' => 'Nákupní vozíky',
            'subtitle' => 'Nahlaste počet nových nákupních košíků',
        ],
        'products' => [
            'title' => 'Přehled produktů',
            'subtitle' => 'Stav produktů v obchodě podle typu',
            'value_name' => 'produkty'
        ],
        'products_count' => 'Typy produktů',
        'views_count' => 'Počet zhlédnutí',
        'sell_count' => 'Počet prodejů',
        'send_count' => 'Počítání zásilky',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Hlavní panel pro nejlepší prodejce Selldone Drop Shipping',
        'total_fulfillments' => 'Celkový počet přijatých objednávek',
        'ds_count' => 'Přijaté objednávky',
        'statistics_title' => 'Hlásit přijaté objednávky',
        'ds_cancels' => 'Storno prodejcem rozhraní',
        'ds_rejects' => 'Zrušit vámi',
        'tip' => "Jste významným prodejcem zboží? Vlastníte sklad, továrnu nebo distributora produktů? Své produkty můžete nabízet jiným prodejcům ve službě Selldone Drop Shipping a prodávat svůj produkt ve velkém. Napište nám na adresu support@selldone.com, abychom vás provedli.",
        'view-drop-shipping-panel' => 'Přihlaste se do velkoobchodního panelu',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Směnné kurzy',
        'sub-title' => 'Seznam nejnovějších směnných kurzů měn ve vašem obchodě.',
        'from' => 'Zdrojová měna',
        'to' => 'Cílová měna',
        'rate' => 'Míra konverze',
        'view-exchange-panel' => 'Správa směnných kurzů',
    

        'vew-exchange-panel' => 'panel pro správu směnných kurzů',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Odborné smlouvy',
        'sub-title' => 'Jací profesionálové pracují na mém obchodě?',
        'cost' => 'Smluvní částka',
        'duration' => 'Doba trvání',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum zrušení',
        'end_at' => 'Datum doručení',
        'tip' => 'Najměte si špičkové odborníky z Selldone, kteří vám pomohou s růstem vašeho podnikání.',
        'view-experts' => 'Začněte kliknutím.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Aktivní platební brány nahlaste na shop :shop.',
        'tip-title' => 'Důležité tipy',
        'tip' => "Přejděte na stránku správy portálu ve svém obchodě a během několika minut přidejte alespoň jeden port. Vaši zákazníci rádi platí rychle a bezpečně prostřednictvím online portálů.",
        'view-shop-gateways' => 'Přihlaste se do správy portálu mého obchodu.',
        'view-gateways' => 'Zobrazit další brány',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Objednávky',
        'sub-title' => 'Seznam objednávek, které jsem tento týden obdržel.',
        'total_baskets' => 'Celkový počet objednávek',
        'total_posBaskets' => 'Celkový počet hotovostních příkazů',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Dokončené objednávky (tyto objednávky nemusí být nutně zaplaceny!)',
        'tip-title' => 'Měl by ses víc snažit...',
        'tip' => "Žádný jednoduchý úspěch.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Zpracovatelské centrum',
        'sub-title' => 'Kolik objednávek jsme tento týden na prodejně zpracovali?',
        'tip-title' => 'Neměli jste výprodej!',
        'tip' => "Tento týden jste bohužel neměli žádné prodeje. Do svého obchodu musíte dostat více. Můžete přidat více produktů, vybrat lepší obrázky nebo napsat lepší popisy vašich produktů. Zvažte práci na plný úvazek pro vaše podnikání. Pokud to uděláte správně a nebudete frustrovaní, uspějete.",
        'view-process-center' => 'Zobrazit procesní centrum',
        'return' => [
            'title' => 'Vrácená objednávka',
            'subtitle' => 'Hlásit vrácené objednávky.',
            'tip-title' => 'Věděli jste, že ...',
            'tip' => "Prostřednictvím Selldone POS můžete vytvořit tolik pokladen, kolik chcete! Ve skutečnosti můžete tablet, mobilní telefon nebo notebook proměnit ve svou doručenou poštu. Pokud vás to vzrušuje, Soldone POS Je to něco, co byste měli začít používat hned. Ke spuštění stačí jen kliknout, vše máme pro váš server předem připraveno.",
            'view-pos' => 'Přihlaste se do Pokladny mého online obchodu'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Relace',
        'sub-title' => 'Kolikrát jsem navštívil svůj obchod?',
        'countries-title' => 'Které země byly nejnavštěvovanější?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Chcete vydělávat peníze, aniž byste utratili jeden dolar?',
        'message' => "Ahoj :name, je čas začít vydělávat s Selldone! Přejděte na Hlavní panel > Další > Zpeněžení > Získejte odkaz na doporučení. Sdílejte odkaz se svými přáteli a získejte dárkové karty a podíl z jejich plateb. Nejlepší část? Vy i váš přítel získáte dárkovou kartu!",
        'action' => 'Podívejte se na můj úvodní odkaz',
        'mail-clip' => "<b style='color: #C2185B'>Důležité:</b> Pokud používáte e-mailové služby, jako je Gmail, které omezují délku e-mailu, vyhledejte na konci e-mailu následující možnost pro zobrazení úplného přehledu a klikněte na ni:",

        'no-coin-reward' => "<b style='color: #C2185B'>Omlouváme se:</b> Vaše aktivita nesplňovala požadavek na získání odměny SEL Coins zdarma. Snažte se více a prodávejte více ve svém obchodě pro příští sezónu.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Odměna:</b> Gratulujeme, díky vašemu fantastickému výkonu jsme vám dali odměnu :amount SEL Coin zdarma.",

        'need-buy-license' => "<b> Zvyšte úroveň svého podnikání: </b> Zdá se, že jste ještě nezaregistrovali žádný plán předplatného pro svůj web! Upgradujte nyní a odemkněte další funkce pouze za :amount měsíčně, pokud budete platit ročně.",
        'not-afford-message' => "Pokud si nemůžete dovolit platbu nebo máte nějaké potíže s platbou, neváhejte nám to říct na support@selldone.com.",
        'add-domain' => "<b>Proč nemít vlastní doménu pro vaši firmu?</b><br> Přidejte doménu na svůj web hned teď; je to zdarma!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone je a<del> produkt</del> <span style = 'color: forestgreen'>komunita</span> .<br> Staňte se profesionálním prodejcem!",
        'message' => "Sledujte oficiální stránky Selldone na Twitteru, LinkedIn a sociálních sítích. Pošlete nám jakékoli komentáře, požadavky nebo kritiku nebo se zapojte do diskusí o Selldone. Jsme také součástí komunity Selldone, kterou <b>Vy tvoříte</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nové objednávky na avokádo přijaty|:shop_title :time',
        'title' => "Přehled výkonu za posledních 24 hodin",
        'message' => "Vaši zákazníci čekají na kontrolu a nacenění vašich objednávek. Odpovězte na požadavky svých zákazníků co nejdříve, abyste získali více prodejů.",
        'card_title' => "Objednávky ve frontě",
        'card_subtitle' => "Od :date",

        'card_payed' => "Placené objednávky"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Odpovězte na svůj příspěvek v :community_title',
        'title' => ":name a :count dalších komentovali vaše příspěvky.",
        'message' => "Ahoj :name, vaše příspěvky přitahují pozornost! Obdrželi jste komentáře v naší komunitě. Přihlaste se ke svému účtu, zapojte se do diskuze a uvidíte, co všichni říkají.",
        'title-simple' => ":name okomentoval vaše příspěvky.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Odpovězte na své téma :topic_title',
        'title' => ":name a :count ostatní odpověděli na vaše téma.",
        'message' => "Ahoj :name, vaše téma získává pozornost! V naší komunitě jste obdrželi odpovědi. Přihlaste se ke svému účtu, zapojte se do diskuze a uvidíte, co všichni říkají.",
        'title-simple' => ":name odpověděl na vaše téma.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nové přihlášení :name',
        'category' => 'Bezpečnostní upozornění',
        'title' => "Přihlaste se k účtu",
        'message' => "Vážený :name, bylo zjištěno přihlášení k vašemu účtu Selldone.",   // Login in selldone (seller)
        'message-shop' => "Vážený :name, jste přihlášeni do :shop_title .",  // Login in shop (buyer)

        'footer' => "Pokud nejste přihlášeni, změňte si prosím heslo.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Vybrání",
        'deposit' => "Vklad",

        'withdraw_subject' => "Výběr z účtu :account",
        'deposit_subject' => "Vklad na účet :account",

        'message' => "Převod peněz byl proveden s následujícími specifikacemi.",

        'type' => "Typ transakce",

        'from' => "Zdrojový účet",
        'to' => "Destination account",

        'desc' => "Popis transakce",
        'action' => "Zobrazit transakci",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Důležité! Porušení pravidel| :shop",
        'category' => "Kritická informace",
        'title' => "Váš obchod byl penalizován",
        'action' => "Otevřete řídicí panel obchodu",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter vás pozval, abyste se připojili ke Selldone",
        'title' => ":name vám poslal :amount, abyste pomohli spustit váš nový internetový obchod a zpeněžit jej!",
        'message' => "Ahoj **:receiver_name**,<br><br>Vítejte v Selldone! Na Selldone můžete snadno vytvořit svůj e-commerce web, blog, online komunitu a dokonce nastavit online POS systém pro osobní prodej – to vše během několika minut. Je to kompletní online obchodní operační systém navržený tak, aby vaše podnikání bylo lepší, rychlejší a snazší. <br><br>Přihlaste se do <b>:date</b> a získejte poukaz :amount, abyste mohli začít!",
        'accept' => "Přijmout pozvání",
        'owner' => "Vlastník",
        'join-date' => "Připojil se k Selldone dne",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Odkaz na obnovení| :shop",
        'category' => "Bezpečnost obchodu",
        'title' => "Odkaz pro obnovení úložiště <b>:shop_name</b>.",
        'message' => "Tento e-mail vám byl zaslán, protože jste požádali o obnovení svého obchodu. Kliknutím na níže uvedený odkaz obnovíte svůj obchod a všechna data, která k němu patří.",
        'action' => "Potvrďte obnovení obchodu",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Kolik peněz ušetřil Selldone pro vaše podnikání?',
        'sub-title' => 'Od data :start do :end',
        'infrastructure' => [
            'title' => 'Infrastruktura',
            'subtitle' => 'Servery, CDN, úložiště a další cloudové služby',
        ],
        'experts' => [
            'title' => 'Odborníci a zaměstnanci',
            'subtitle' => 'Vývojáři, údržba a podpora',
        ],
        'total_save' => 'Celkem ušetřené peníze'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Váš výkon',
        'sub-title' => 'Přehled podnikání od :start do :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vrácení uživatelé',

        'shop_views' => 'Zobrazení obchodu',
        'baskets' => [
            'title' => 'Nákupní vozíky',
            'subtitle' => 'Nahlaste počet nových nákupních košíků',

        ],
        'products' => [
            'title' => 'Přehled produktů',
            'subtitle' => 'Stav produktů v obchodě podle typu',
            'value_name' => 'produkty'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Celkový počet zobrazení stránky webu',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Obdrželi jste novou objednávku. Přejděte prosím na stránku zpracování objednávky na panelu dodavatele.",
        'subject' => "🛍️ Nová objednávka přijata| :order_id",
        'your_revenue' => "Váš příjem",
    ],
    'vendor-invite' => [
        'title' => 'Pozvánka dodavatele',
        'message' => "Obdrželi jste pozvánku, abyste se stali dodavatelem :shop_name. Můžete jej přijmout nebo odmítnout kliknutím na následující tlačítka.",
        'subject' => ":shop_name |Pozvánka stát se naším prodejcem",
        'accept' => "Přijměte a staňte se dodavatelem",
        'reject' => "Odmítnout",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Pozvánka do našeho týmu',
        'message' => "Byli jste pozváni, abyste se připojili ke :vendor_name na :shop_name. Toto pozvání můžete přijmout nebo odmítnout pomocí tlačítek níže.",
        'subject' => "Pozvánka do :vendor_name|Staňte se členem týmu",
        'accept' => "Přijměte a připojte se k týmu",
        'reject' => "Odmítnout",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Váš přihlašovací kód pro :shop",
        'header-message' => "Tento e-mail vám posíláme, protože jste požadovali přihlašovací kód do obchodu. Níže naleznete své jednorázové heslo (OTP):",
        'footer-message' => "Tento kód bude platný 10 minut. Pokud jste si tento přihlašovací kód nevyžádali, ignorujte prosím tento e-mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Ověřte svůj e-mail| :shop",
        'title' => 'Ověření e-mailem',
        'header-message' => "Ahoj :name,<br>Do 48 hodin potvrďte, že **:email** je vaše e-mailová adresa, kliknutím na tlačítko níže nebo pomocí odkazu níže.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Aktualizace produktu| :shop",
        'title' => "Aktualizace stavu produktu – posledních 24 hodin",
        'message' => "Doufám, že vás tato zpráva najde dobře. Toto je krátká aktualizace, která vás informuje o stavu vašich produktů na naší platformě za posledních 24 hodin.\nV tomto období došlo ke změnám ve stavu některých produktů. Tyto změny mohou být způsobeny nákupy, aktualizacemi zásob nebo jinými souvisejícími událostmi.\nPro podrobnější informace o každém produktu se prosím přihlaste ke svému účtu a zkontrolujte sekci 'Stav produktu'.",
        'action' => "Otevřete panel dodavatele",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Přijaté hromadné objednávky| :shop | :date",
        'title' => "Oznámení o hromadných objednávkách",
        'message' => "Obdrželi jste dávku hromadných objednávek. Další podrobnosti naleznete na stránce zpracování objednávky ve vašem panelu. Můžete si také stáhnout seznam objednávek prostřednictvím poskytnutého zabezpečeného odkazu s platností 7 dní.<br><br>\n        <b>DŮLEŽITÉ:</b> Tento odkaz je platný 7 dní.<br>\n        Tento odkaz je dynamický, takže pokaždé, když na něj kliknete, obdržíte nejaktuálnější objednávky pro toto konkrétní datum. <b>To znamená, že pokud se stav platby objednávky změní na odmítnutou, objednávku již ve staženém CSV neuvidíte, nebo pokud je objednávka zaplacena, objeví se v seznamu.</b><br><br>\n        <ul>\n            <li> CSV obsahuje placené objednávky s rezervovaným datem v :date.</li>\n            <li>Rezervované datum je datum, kdy uživatel klikne na pokladnu na stránce objednávky.</li>\n        </ul>\n        <b>Abyste předešli duplicitním objednávkám, vždy před odesláním zkontrolujte objednávku ID.</b>",
        'action' => "Stáhněte si seznam objednávek",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Některé položky ve vaší objednávce nebyly přijaty a nelze je dodat. Částka za tyto položky bude brzy vrácena na vaši kartu."
    ]

];
