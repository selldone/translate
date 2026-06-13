<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ez az üzenet új vásárlót köszönt az üzletben.',
        ShopMailTemplateCodes::OrderCheckout => 'Ezt az értesítést akkor küldjük el, amikor a vásárló visszaigazolja a megrendelését.',
        ShopMailTemplateCodes::OrderPayment => 'Ez az értesítés megerősíti az ügyfél sikeres fizetését.',
        ShopMailTemplateCodes::OrderUpdate => 'Ezt az üzenetet azért küldjük, hogy tájékoztassuk a vásárlót a rendelés állapotáról.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ezt az üzenetet az eladónak küldjük, hogy értesítse őket a visszaigazolt megrendelésről.',
        ShopMailTemplateCodes::PosCheckout => 'Ezt az értesítést azért küldjük, hogy megerősítsük a vevő értékesítési pontján leadott megrendelését.',
        ShopMailTemplateCodes::PosPayment => 'Ez az értesítés megerősíti a vevő által az értékesítés helyén végrehajtott fizetést.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ez az üzenet értesíti az eladót az értékesítési helyén történt vásárlásról.',
        ShopMailTemplateCodes::ShopContact => 'Ezt az értesítést a kapcsolatfelvételi űrlap elküldésekor küldjük el.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ez az értesítés értesíti a felhasználót, hogy ajándékutalványt kapott.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ez az üzenet új eladót köszönt az üzletben.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ezt az üzenetet azért küldtük, hogy meghívjunk egy szállítót, hogy csatlakozzon a piacteréhez.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ezt az üzenetet a rendszer akkor küldi el a szállítónak, amikor egy megrendelés Fizetett vagy Utánvétes (COD) státuszban érkezik.",
        ShopMailTemplateCodes::ShopVendorProducts => "Naponta küldjük, hogy tájékoztassuk a szállítókat termékeik állapotáról.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ezt az üzenetet azért küldtük, hogy meghívjunk egy szállítót, hogy csatlakozzon a piacteréhez.",

        ShopMailTemplateCodes::UserLogin => "Biztonsági okokból értesítse a felhasználót a bejelentkezési adatokkal, beleértve a IP címet, dátumot és eszközt.",
        ShopMailTemplateCodes::LoginCode => "Egyszeri jelszókód küldése a felhasználóknak az áruházba való bejelentkezéshez.",

        ShopMailTemplateCodes::EmailVerifyLink => "Link küldése a felhasználó e-mail címének ellenőrzéséhez. Ezt az e-mailt a rendszer akkor küldi el, amikor a felhasználó regisztrál a SMS által, és megadja az e-mail címét. Nem küldik el, ha a felhasználó közvetlenül regisztrál közösségi bejelentkezési adatokkal vagy e-mail címmel.",

        ShopMailTemplateCodes::EmailBulkOrder => "Küldje el tömegesen a beérkezett és kifizetett rendelések listáját egy adott napon."


    ,

    ],


    'global' => [
        'greetings' => 'Szia :name',
        'end-statement' => 'Támogatói csoport',

        'receiver_name' => 'Szia :user_name',
        'footer-help' => "Segítségre van szüksége? Kérdezzen a [support@selldone.com](mailto:support@selldone.com) címen, vagy keresse fel [súgónkat] (https://selldone.com/community).",
        'selldone-team' => 'A Selldone csapat',
        'footer-shop' => "Ha bármiben segítségre van szüksége, ne habozzon, írjon nekünk egy e-mailt: :shop_mail",
        'accept' => "Elfogad",
        'reject' => "Elutasít",
        'verify' => "ellenőrizni",
        'title' => "Cím",
        'value' => "Érték",
        'description' => "Leírás",
        'shop' => "Üzlet",
        'shop-info' => "Store információ",
        'user' => "Felhasználó",
        'user-info' => "Fiókinformációk",
        'license' => "Engedély",
        'status' => "Állapot",
        'start' => "Rajt",
        'end' => "Vége",
        'renewal' => "Megújítás",
        'view' => "Kilátás",

        'balance' => "Egyensúly",
        'card_number' => "Kártyaszám",
        'cvv' => "Cvv",
        'expire_date' => "Lejárati dátum",

        'Dashboard' => "Irányítópult",
        'order' => "rendelés",
        'view_order' => "Megtekintési sorrend",
        'pay_now' => "Pay now",

        'official_selldone' => "HIVATALOS ELADVA",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valuta",
        'free-balance' => "Szabad egyenleg",
        'locked-balance' => "Zárt egyensúly",
        'bot' => "Bot",
        'requests' => "Kérések",
        'baskets' => 'szekerek',
        'physical' => "Fizikai",
        'virtual' => "Virtuális",
        'file' => "Fájl",
        'service' => "Szolgáltatás",
        'fulfillment' => "Teljesítés",
        'open' => "Nyisd ki",
        'reserved' => "Fenntartott",
        'canceled' => "Törölve",
        'payed' => "Fizetett",
        'cod' => "COD",
        'orders-count' => 'Megrendelések',
        'payments-count' => 'Kifizetések',
        'confirms-count' => 'Megerősíti',
        'sends-count' => 'Küld',
        'delivers-count' => 'Szállít',
        'count' => 'Számol',
        'transactions-count' => 'A tranzakciók számítanak',
        'success-transactions' => 'Sikeres tranzakciók',
        'total-amount' => 'Teljes összeg',
        'amount' => 'Összeg',
        'wage' => 'Bér',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Élő',
        'CheckQueue' => 'Ellenőrizze a sort',
        'OrderConfirm' => 'Megrendelés megerősítése',
        'PreparingOrder' => 'Rendelés előkészítése',
        'SentOrder' => 'Megrendelés elküldve',
        'ToCustomer' => 'Vevőnek kézbesítve',
        'Pending' => 'Függőben levő',
        'Accepted' => 'Elfogadott',
        'Rejected' => 'Elutasítva',
        'pc' => 'PC',
        'tablet' => 'Tabletta',
        'phone' => 'Telefon',
        'total' => 'Teljes',
        'view-detail' => 'Részletek',
        'empty' => 'Üres',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Válasz',
        'reactions' => 'Reakciók',
        'Comments' => 'Megjegyzések',
        'last-comment' => 'Utolsó komment',
        'response-to' => 'Válasz',
        'posts' => 'Hozzászólások',
        'post' => 'Hozzászólás',

        'name' => 'Név',
        'email' => 'Email',
        'type' => 'típus',
        'device' => 'Eszköz',
        'platform' => 'Felület',
        'browser' => 'Böngésző',
        'time' => 'Idő',
        'Wallet' => 'Pénztárca',
        'date' => 'Dátum',

        'account' => 'fiók',
        'transaction' => 'Tranzakció',
        'fee' => 'Díj',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Számla',
        'category' => 'Kategória',
        'password' => 'Jelszó',
        'verify-login' => "Ellenőrzés és bejelentkezés",
        'url' => 'URL',
        'avocado' => 'Avokádó',
        'hyper' => 'Hiper',
        'buy-now' => "Vásárolj most",
        'add-domain' => "Add Domain",
        'views' => 'Nézetek',


        'country' => 'Ország',
        'address' => 'cím',
        'postal' => 'Irányítószám',
        'building_no' => 'számú épület',
        'building_unit' => 'Mértékegység #',
        'message' => 'Üzenet',


        'customer' => 'Vevő',
        'cart-items' => 'Kosár tételek',
        'payment' => 'Fizetés',
        'receiver' => 'Vevő',
        'virtual-items' => 'Virtuális elemek',
        'no-payment' => 'Nincs fizetés!',

        'enable' => 'Engedélyezze',
        'access' => 'Hozzáférés',
        'bank' => 'Bank info',

        'vendor' => 'Eladó',

        'view_content' => "Teljes tartalom megtekintése",
        'files' => 'Fájlok',
        'download' => 'Letöltés',
        'file_name' => 'Fájlnév',
        'file_size' => 'Méret',

        'subscription' => 'Feliratkozás',
        'products' => 'Termékek',
        'vendor_products' => 'Eladói termékek',

        'pickup' => 'Pickup',

        'minutes' => 'Jegyzőkönyv',
        'hours' => 'Órák',

        'refund' => 'Visszatérítés',
        'recipient_address' => 'Címzett címe',
        'signature' => 'Aláírás',
        'blockchain' => 'Blockchain',
        'details' => 'Részletek',


    

        'Shop' => 'Üzlet',
        'dashboard' => 'Irányítópult',
        'comments' => 'Hozzászólások',
        'wallet' => 'pénztárca',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone teljesítményjelentés'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone Szezonális jelentés'
        ],
        'Onboarding' => [
            'id' => 'Szia',
            'name' => 'Selldone kereskedők'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Támogatás :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'Szia',
            'name' => 'Selldone közösség'
        ],
        'NewShop' => [
            'id' => 'kereskedők',
            'name' => 'Selldone kereskedők'
        ],
        'Approve' => [
            'id' => 'jóváhagy',
            'name' => 'Selldone kereskedők'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Rendeléskezelés :name'
        ],

        'Recovery' => [
            'id' => 'felépülés',
            'name' => 'Selldone helyreállítási csapat'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Függőben ⌛',
        'PAYED' => 'Fizetve ✅',
        'CANCELED' => 'Törölve ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Adminisztrátor',
            'OFFICER' => 'Tiszt és felügyelő',
            'AUDITING' => 'Audit vezető',
            'EMPLOYEE' => 'Munkavállaló',
            'PRODUCT' => 'Termékmenedzser',
            'CONTENT' => 'Tartalom kezelő',
            'MARKETING' => 'Marketing menedzser',
            'VIEWER' => 'Néző',

        ],
        'subject' => ":inviter meghívta Önt :level néven| :shop",
        'category' => "Személyzeti meghívó",
        'title' => "Meghívást kapott a <b>:shop_name</b> <b>:level</b> néven.",
        'message' => "You've received an invitation to collaborate with the <b>:shop_title</b> team in business. You have the option to accept or decline this offer. Should you choose to accept, please log in to the Selldone service to confirm your decision. Upon confirmation, you will gain access to the store management section.",

    ],

    'welcome-email' => [
        'subject' => "👋 Üdvözlünk :name, kezdjük a Selldone-val!",
        'category' => 'CONGRATULATION',
        'title' => "Üdvözöljük a Selldone-ban",
        'message' => "Köszönjük, hogy a Selldone-t választotta! Most egy élénk közösség tagja vagy, amely összeköti a globális eladókat az ügyfelekkel, a helyi vállalkozásokat a vállalkozásokkal, valamint az egyéneket a vállalatokkal. Minden Master és Pro eszközünk **ingyenes** és **korlátlanul** elérhető az Ön számára. Azért vagyunk itt, hogy támogassuk Önt, és megnyissa a kaput a sikere előtt.",

        'index' => "Lépés :step.",

        'step-domain' => [
            'title' => 'Adja hozzá egyéni domainjét',
            'message' => "A kezdéshez ingyenesen adja hozzá egyéni domainjét a Shop Dashboard Beállítások > Domainbeállítások pontjában.",
            'action' => 'Saját domainek kezelése',
        ],
        'step-landing' => [
            'title' => 'Szabja személyre kezdőlapját',
            'message' => "Tegye személyre kezdőlapját az Irányítópult > Oldalak menüpontban. Válasszon céloldalt, vagy hozzon létre egy újat. Egyszerű és intuitív, és azonnal elkezdhet dolgozni rajta.",
            'action' => 'A céloldalam személyre szabása',
        ],
        'step-payment' => [
            'title' => 'Fizetési módok beállítása',
            'message' => "Kezdje el fogadni a kifizetéseket közvetlenül a bankszámlájára. Fizetési szolgáltatók, például a Stripe, PayPal és egyebek összekapcsolásához lépjen a Dashboard > Accounting > Gateway menüpontra.",
            'action' => 'Fizetési módok hozzáadása',
        ],
        'step-products' => [
            'title' => 'Adja hozzá termékeit',
            'message' => "Könnyen hozzáadhat termékeket és kategóriákat az Irányítópult > Termékek menüpontban. Ez olyan, mint a fájlok és mappák kezelése a számítógépen – teljes mértékben készen áll a húzásra. Az Excel segítségével tömegesen is importálhat termékeket. A kezdéshez egy mintasablon áll rendelkezésre.",
            'action' => 'Termékeim kezelése',
        ],
        'step-shipping' => [
            'title' => 'Szállítási módok beállítása',
            'message' => "Az ügyfelek szállítási díjának felszámításához adja meg a szállítási módokat az Irányítópult > Logisztika > Szállítás menüpontban. Különböző helyeken különböző árakat és támogatást állíthat be. Ne felejtse el beállítani a raktár eredetét az Irányítópult > Logisztika > Raktár menüpontban.",
            'action' => 'Szállítási módok kezelése',
        ],
    

        'seller' => [
            'title' => 'Ön eladó?',
            'message' => 'Az értékesítés megkezdéséhez adja meg irányítópultját a Selldone-ban az alábbi linken keresztül, és hozza létre első üzletét teljesen ingyenesen. Ez néhány percet vesz igénybe, és saját üzlete és online webhelye lesz. Ezután elvezetjük a következő lépésekhez, és megkapjuk a fizetési átjárót.',
            'action' => 'Jelentkezzen be az irányítópultomra',
        ],
        'buyer' => [
            'title' => 'vevő vagyok',
            'message' => 'Gratulálunk. Ha már tagja a Selldone-nak, megszabadul a tagsággal és a hitelesítéssel kapcsolatos gondoktól az online áruházakban. A Selldone platformot használó bármely üzlet és webhely előnyeinek kihasználásához egyetlen kattintással bejelentkezhet, és egyszerűvé, gyorssá és biztonságossá teheti a vásárlást.',
        ],
    ],


    'charge-account' => [
        'category' => 'Pénztárca > Fiók > Díj',
        'title' => "Sikerdíj",
        'message' => "Fiókját <b>:account_number</b> sikeresen <b>:amount</b> terheltük.",
        'account' => 'fiók',
        'charge' => 'Díj',
        'balance' => 'Egyensúly',
        'footer' => "Tegye egyszerűvé, elérhetővé és bárki számára elérhetővé az üzletet szerte a világon."
    ],

    'verify-email' => [
        'subject' => "🙌 Fejezd be a Selldone regisztrációdat! Hivatkozás ellenőrzése.",
        'category' => "EGY LÉPÉSRE VAGY",
        'title' => "Erősítsd meg az e-mail címed",
        'message' => "Szia :name,<br><br> Köszönjük, hogy a Selldone!<br><br> lehetőséget választotta. Annak megerősítéséhez, hogy a <b>Q:email</b> az Ön helyes e-mail címe, kattintson az alábbi linkre, vagy használja az alábbi gombot. 48 órája van az ellenőrzés elvégzésére.",
        'footer' => "Ha problémába ütközik az Ellenőrzés gombra kattintva, másolja ki és illessze be az alábbi URL-t a böngészőbe: :activation_url",
        'next-step' => "Ezután küldünk néhány hasznos anyagot és egy lépésről lépésre szóló útmutatót, amelyek megkönnyítik az egyéni domain hozzáadását, a fizetések beállítását, a termékek hozzáadását és az első rendelés megszerzését.",

    ],
    'verify-email-code' => [
        'subject' => "Ellenőrző kód a következőhöz: :name",
        'category' => "SECURITY",
        'title' => "E-mail ellenőrző kód",
        'message' => "Szia, :name,<br><br> Annak megerősítésére, hogy a <b>:email</b> az Ön helyes e-mail címe, kérjük, írja be a következő kódot a következő <b>10 percen belül</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Az üzleted készen áll| :name",
        'category' => "EGY LÉPÉSRE VAGY",
        'title' => "A beállítás befejeződött",
        'account_title' => "Fiókja",
        'account_msg' => "Erősítse meg fiókját, és jelentkezzen be ezzel az információval.",
        'shop_msg' => "Fiókinformációk a Selldone üzleti operációs rendszerről.",

    ],

    'reset2fa' => [
        'category' => "BIZTONSÁGI HIVATALOS ÜZENET",
        'title' => "A kétlépcsős bejelentkezés letiltásának kérése",
        'message' => "Azért kapta ezt az e-mailt, mert a **:name** fiók kétfaktoros hitelesítésének visszaállítására vonatkozó kérést kaptunk a **:email** e-mail címmel.<br><br>A következő adatokat találtuk fiókjával kapcsolatban:",
        'footer' => "Ha nem kérte a jelszó visszaállítását, nincs szükség további teendőkre.",
        'action' => 'A kétlépcsős bejelentkezés letiltása',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Az üzleted már készen áll!",
        'category' => "SZÜLETETT ÚJ ONLINE ÁRUHÁZ A VILÁGBAN",
        'title' => "Gratulálunk, :name!",
        'message' => "<b>Gratulálunk, :name! Új online vállalkozása már él!</b> Örömmel üdvözöljük Önt a Selldoners közösségben. You've taken the first step toward success, and we are here to help you every step of the way.<br>Now that your store is ready, let’s make sure you're set to receive payments directly from your customers and start growing your empire. Ha valaha segítségre van szüksége, csak egy üzenetre vagyunk – ügyfélszolgálati csapatunk mindig készen áll az Ön rendelkezésére.<br>Q<br><b>QQ</b> Fontos következő lépések:</b> Kezdésként győződjön meg arról, hogy minden készen áll a kifizetések fogadására és a zökkenőmentes működésre. Minden egyes szakaszon végigvezetjük, hogy üzlete zökkenőmentesen működjön.",
        'pdf-book' => "Ne hagyja ki a mellékelt kézikönyvet: Do Your Business Like A Game",

        'account' => [
            'title' => '1. lépés: Hozzon létre egy fiókot a Selldone pénztárcában',
            'message' => "Kezdésként hozzon létre egy fiókot a Selldone pénztárcájában. Itt vonják le a díjait, és itt kell feltöltenie, hogy üzlete zökkenőmentesen működjön. Ha az egyenlege negatív lesz, ne aggódjon! Az Ön üzlete továbbra is megszakítás nélkül működik.",
            'action' => 'Jelentkezzen be a pénztárcába',
        ],

        'shop-account' => [
            'title' => '2. lépés: csatlakoztassa a fiókot az áruházhoz',
            'message' => "Ezután csatlakoztassa Wallet-fiókját az üzletéhez. Menjen a <b>Store > Könyvelés > Invoice</b> oldalra, és kapcsolja össze pénztárcáját. Ez biztosítja, hogy az ügyfelek minden befizetése közvetlenül az Ön bankszámlájára kerüljön utalásra – a Selldone semmilyen összeget nem von le a bevételeiből.",
            'action' => 'Áruházi számla panel',
        ],

        'gateway' => [
            'title' => '3. lépés: Csatlakoztassa az online fizetési átjárót',
            'message' => "Most állítsuk be az online fizetési átjárót. Lépjen a <b>Store > Számvitel > Port</b> oldalra, és kattintson a <b>Új portQ</b> hozzáadása lehetőségre. Válassza ki a pénznemet, és megjelenik az elérhető fizetési átjárók listája. Az átjáró csatlakoztatása gyors és egyszerű, de ha segítségre van szüksége, tekintse meg a Selldone útmutatókat, vagy forduljon hozzánk.",
            'action' => 'Portál hozzáadása az áruházhoz',
        ],

        'domain' => [
            'title' => 'Utolsó lépés: dedikált tartomány csatlakoztatása',
            'message' => "Most kapcsolja össze egyéni domainjét az üzletével. Ez lehetővé teszi az ügyfelek számára, hogy megvásárolják az Ön termékeit vagy szolgáltatásait, és közvetlenül Önnek fizethessenek.",
            'action' => 'Korlátlan számú ajándékutalvány bemutatása és átvétele',
        ],
    ],


    'basket-list' => [
        'item' => "tétel",
        'count' => "Számol",
        'price' => "ár",
        'discount-code' => "Akciós kód",
        'customer-club' => 'Ügyfélklub',
        'shipping' => "Szállítás",
        'total' => "Teljes",
        'offer' => "Ajánlat",
        'coupon' => "Kupon",
        'lottery' => "Díj",
        'tax' => "Adó",
        'tax_included' => "Az ár tartalmazza",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Módszer',
        'amount' => 'Összeg',
        'giftcard' => 'Gift card',
        'payment' => 'Fizetés',
    ],


    'shop-subscription-email' => [
        'category' => "Előfizetés frissítése",
        'title' => "Üzleti licenc: :shop_title",
        'title-reserved' => "Licenctartalék: :shop_title",
        'title-active' => "Aktív licenc: :shop_title",
        'title-finished' => "Kész licenc: :shop_title",
        'title-cancel' => "Licenc törlése: :shop_title",
        'message' => "Az üzlet licenccsomagja frissítve,",
        'RESERVED' => "⚡ Előfizetésed **lefoglalva**.",
        'ACTIVE' => "🟢 Előfizetését **aktiváltuk**.",
        'FINISHED' => "🚧 Előfizetésed **elkészült**.",
        'CANCEL' => "⛔ Előfizetését **törölték**.",
    ],

    'support' => [
        'subject' => "Támogatási központ | :name válaszolt",
        'category' => "Támogatóközpont",
        'title' => "Választ kapott",
        'action' => "Nyissa meg az üzlet adminisztrátorát",
    ],

    'shop-customer-join' => [
        'subject' => "Csatlakozz:shop_title",
        'category' => "Új vásárló ünnepe",
        'title' => "Örülünk tagságodnak",
        'action' => "Látogassa meg most",
    ],

    'shop-vendor-join' => [
        'subject' => "Szállítói beépítés | :shop_title",
        'category' => "Új eladó ünnepe",
        'title' => "Örülünk tagságodnak",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Ajándékkártya :shop_title",
        'category' => "Új kártya hozzáadása",
        'title' => "Gratulálunk, ajándékutalványt kapott",
        'action' => "Vásárolj most",
        'message' => ":balance :currency értékű ajándékutalványt kapott. Ezt az ajándékutalványt üzletünkben használhatja fel.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Támogatási Központ| :shop",
        'category' => "támogatás",
        'title' => "Választ kapott",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Megrendelés visszaigazolása|Rendeljen :order_id",
        'title' => "rendelés",
        'message' => "Megrendelést adott le üzletünkben. Megkaptuk megrendelését, és a fizetés megerősítése után újabb e-mailt küldünk."
    ,

        'payments' => 'Kifizetések',
    ],

    'order-payment' => [
        'subject' => "🛍️ Fizetés visszaigazolása|Rendeljen :order_id",
        'title' => "Fizetési felszólítás",
        'message' => "Befizetése befejeződött,<br> Megkaptuk a rendelésedet. Egy másik e-mailt küldünk Önnek, amikor rendelése kiszállításra kerül.",
    

        'payments' => 'Kifizetések',
    ],

    'order-update' => [
        'subject' => "🛍️ Megrendelés állapotának frissítése|Rendeljen :order_id",
        'title' => "Megrendelés állapotának frissítése",
        'message' => "Megrendelése frissítve lett. A rendelés legfrissebb állapotát fiókjában ellenőrizheti.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Megrendelése feldolgozási sorban áll. Értesítjük, ha készül.",
                'OrderConfirm' => "Megrendelését visszaigazoltuk, és megkezdődött az előkészítés.",
                'PreparingOrder' => "Megrendelése előkészítés alatt áll, hamarosan kiszállításra kerül.",
                'SentOrder' => "Megrendelését kiszállították. Hamarosan megkapja.",
                'ToCustomer' => "Megrendelését kézbesítettük. Reméljük, élvezni fogja!",

                'PreparingOrder-PICKUP' => "Megrendelése előkészítés alatt áll. Értesítést kap, ha készen áll az átvételre.",
                'SentOrder-PICKUP' => "Rendelése készen áll az átvételre. Kérjük, jöjjön el az üzletbe, hogy átvegye.",
                'ToCustomer-PICKUP' => "Megrendelését felvették. Reméljük, élvezni fogja!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Megrendelése feldolgozási sorban áll. Értesítjük, ha készen áll.",
                'OrderConfirm' => "Megrendelését visszaigazoltuk, és az előkészítés folyamatban van.",
                'PreparingOrder' => "Megrendelése előkészítés alatt áll, hamarosan elküldjük Önnek.",
                'ToCustomer' => "Virtuális rendelése megérkezett a fiókjába. Köszönöm!"
            ],
            'SERVICE' => [
                'CheckQueue' => "A szolgáltatási kérelme sorban áll. Értesítjük, ha elkezdjük.",
                'OrderConfirm' => "Szolgáltatását megerősítettük, és készülünk a kezdésre.",
                'PreparingOrder' => "Előkészítjük szolgáltatását, és értesítjük, amint befejeződött.",
                'ToCustomer' => "Szolgáltatása teljes. Köszönjük, hogy minket választott!"
            ],
            'FILE' => [
                'PreparingOrder' => "Fájlja előkészítés alatt áll, és hamarosan elérhető lesz.",
                'ToCustomer' => "A fájl készen áll, és kézbesítettük. Most már letöltheti."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Az előfizetési rendelésed sorban áll. Értesítjük, ha a feldolgozás megkezdődik.",
                'OrderConfirm' => "Előfizetését megerősítették, és a beállítás folyamatban van.",
                'PreparingOrder' => "Előfizetését előkészítjük, és hamarosan indul.",
                'SentOrder' => "Előfizetése aktiválva lett. Folyamatos frissítéseket fog kapni.",
                'ToCustomer' => "Előfizetése sikeresen aktiválva lett."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Gratulálunk :name | Új utalvány: :title',
        'category' => "GRATULÁLUNK, ÚJ Utalvány",
        'message' => "Szia :name,<br><br> Új utalványt kapott ajándékba tőlünk! Még több utalványt szerezhet, ha bemutatja a Selldone-t barátainak és mindenkinek, akit ismer. Ez az utalvány **:price :currency**.<br><br>Megtette az első lépést, mi pedig azért vagyunk itt, hogy segítsünk Önnek új funkciókat nyitni kuponjával! Kérjük, jelentkezzen be a **:email** használatával, és keresse meg az utalványt a Shopban **Irányítópult** > **Beállítások** > **Licenc**.<br><br>Gratulálunk!",
        'action' => "A műszerfalam",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Gratulálunk, Kedves :name | Ajándékot kapott',
        'category' => "Az ajándék átvételének bejelentése",
        'title' => "Ajándékok neked",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Ajándékok",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Új rendelés érkezett| :order_id",
        'title' => "New Order",
        'message' => "Új rendelés érkezett. Kérjük, látogasson el üzlete rendelésfeldolgozási oldalára.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Az Ön kitöltött adatai',
        'output-form-title' => 'A vásárolt cikk adatai',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Heti jelentés :time',
        'title' => 'Heti bolti teljesítményjelentés',
        'message' => "Ez az üzleted heti jelentése <b>:start</b> és <b>:end</b> között. Ez a jelentés tippeket tartalmaz a vállalkozás fejlesztéséhez, valamint ellenőrizheti online áruházának állapotát és a legutóbbi rendeléseket. Remélem jó napotok és hétvégétek lesz."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Az Ön :amount megtakarítási jelentése az elmúlt három hónapban| :shop_title',
        'title' => 'Szezonális jelentés az üzleti tevékenységéről, a jutalmakról és a pénzügyi megtakarításokról',
        'message' => "Ez az Ön <b>:shop_title</b> szezonális jelentése <b>:start</b>-tól <b>:end</b>-ig."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Kapcsolt fiókok',
        'sub-title' => 'Mi a legutóbbi állapota az üzletemhez kapcsolódó Wallet-fiókoknak?',
        'view-wallet' => 'Pénztárca megtekintése',
        'tip-title' => 'Fontos tippek',
        'tip' => "Hozzon létre egy ingyenes Selldone pénztárcát, és kapcsolja össze az üzletével. Még ha egyenlege negatív is, ügyfelei továbbra is gond nélkül vásárolhatnak és fizethetnek. Ne aggódjon, üzlete működése és adatai zökkenőmentesen, megszakítások nélkül, akár 1 hónapig is folytatódnak.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Csatlakozás a fiókhoz'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Alkalmazások telepítve',
        'sub-title' => 'Azon alkalmazások listája, amelyeket ezen a héten telepített az üzletébe.',
        'tip' => "További alkalmazásokat szeretne találni az üzletéhez?",
        'view-app-store' => 'Látogassa meg a Selldone App Store-t.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Az Ön Store Botjai',
        'sub-title' => 'Aktív értékesítési robotok az üzletemben.',
        'tip-title' => 'Bot eladó',
        'tip' => "A Selldone automatikus értékesítési robotokat biztosított Önnek. Csak annyit kell tennie, hogy lépjen a Kiegészítők> Botok panelre, és aktiválja az áruházi robotokat. Vegye figyelembe, hogy a megfelelő szolgáltatásnak elérhetőnek kell lennie az Ön országában.",
        'view-bots' => 'Botok kezelése',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kommunikáció az ügyfelekkel',
        'sub-title' => 'Hány kapcsolatom volt az ügyfeleimmel ezen a héten?',
        'faqs' => 'Gyakran Ismételt Kérdések',
        'tickets' => 'Ügyféljegyek',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Felhasználók állapota',
        'sub-title' => 'Tevékenység :start és :end között',
        'users' => [
            'title' => 'Ügyfelek',
            'subtitle' => 'Felhasználók regisztrációja',
        ],
        'views' => [
            'title' => 'Látogatások',
            'subtitle' => 'Hányszor járt már az üzletben',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Visszatért felhasználók',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Bevásárlókocsik',
            'subtitle' => 'Jelentse az új bevásárlókosarak számát',
        ],
        'products' => [
            'title' => 'Termékek áttekintése',
            'subtitle' => 'Az üzletben található termékek állapota típus szerint',
            'value_name' => 'Termékek'
        ],
        'products_count' => 'Terméktípusok',
        'views_count' => 'Megtekintések száma',
        'sell_count' => 'Eladási szám',
        'send_count' => 'Szállítási szám',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel a Drop Shipping Selldone fő eladói számára.',
        'total_fulfillments' => 'Összes beérkezett rendelés',
        'ds_count' => 'Beérkezett rendelések',
        'statistics_title' => 'Beérkezett rendelések jelentése',
        'ds_cancels' => 'Lemondás interfész eladó által',
        'ds_rejects' => 'Ön által lemondható',
        'tip' => "Ön jelentős árueladó? Raktárral, gyárral vagy termékek forgalmazójával rendelkezik? Felajánlhatja termékeit más eladóknak a Selldone Drop Shipping szolgáltatásban, hogy termékét nagy mennyiségben értékesítse. Írjon nekünk a support@selldone.com címre, hogy útmutatást adjunk.",
        'view-drop-shipping-panel' => 'Jelentkezzen be a nagykereskedelmi panelbe',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Árfolyamok',
        'sub-title' => 'Az üzleted legfrissebb valutaátváltási árfolyamainak listája.',
        'from' => 'Forrás pénzneme',
        'to' => 'A cél pénzneme',
        'rate' => 'Átváltási arány',
        'view-exchange-panel' => 'Az árfolyamok kezelése',
    

        'vew-exchange-panel' => 'árfolyam-kezelő panel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Szakértői szerződések',
        'sub-title' => 'Milyen szakemberek dolgoznak az üzletemben?',
        'cost' => 'Szerződéses összeg',
        'duration' => 'Időtartam',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dátum Mégse',
        'end_at' => 'Kiszállítási dátum',
        'tip' => 'Vállalkozása fejlesztése érdekében felbérelheti Selldone legjobb szakembereit.',
        'view-experts' => 'Kattintson a kezdéshez.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Jelentse az aktív fizetési átjárókat a shop :shop oldalon.',
        'tip-title' => 'Fontos tippek',
        'tip' => "Nyissa meg üzletének portálkezelési oldalát, és néhány percen belül adjon hozzá legalább egy portot. Ügyfelei szeretnek gyorsan és biztonságosan fizetni az online portálokon keresztül.",
        'view-shop-gateways' => 'Jelentkezzen be az üzletportál kezelésébe.',
        'view-gateways' => 'További átjárók megtekintése',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Megrendelések',
        'sub-title' => 'A héten kapott rendelések listája.',
        'total_baskets' => 'Összes rendelés',
        'total_posBaskets' => 'Összes készpénzes megbízás',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Megrendelések teljesítve (ezek a rendelések nem feltétlenül fizetendők!)',
        'tip-title' => 'Erősebben kellene próbálkoznod...',
        'tip' => "Nincs egyszerű siker.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Feldolgozó központ',
        'sub-title' => 'Mennyi rendelést dolgoztunk fel az üzletben ezen a héten?',
        'tip-title' => 'Nem volt kiárusításod!',
        'tip' => "Sajnos ezen a héten nem volt értékesítés. Többet kell vinnie a boltjába. Több terméket is hozzáadhat, jobb képeket választhat, vagy jobb leírásokat írhat termékeihez. Fontolja meg a teljes munkaidős állást vállalkozása számára. Ha jól csinálod, és nem csalódsz, sikerülni fog.",
        'view-process-center' => 'Tekintse meg a folyamatközpontot',
        'return' => [
            'title' => 'Visszaküldött rendelés',
            'subtitle' => 'Jelentse a visszaküldött rendeléseket.',
            'tip-title' => 'Tudtad, hogy ...',
            'tip' => "A Selldone POS segítségével annyi pénztárgépet készíthet, amennyire szüksége van! Legyen szó táblagépéről, mobiltelefonjáról vagy laptopjáról, bármilyen eszközt üzlete értékesítési pontjává alakíthat. Egyszerű, gyorsan beállítható, és teljesen felkészült a szerverére. Kezdje el használni még ma!",
            'view-pos' => 'Jelentkezzen be a My Online Store Pénztárba'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Munkamenetek',
        'sub-title' => 'Hányszor látogattam meg az üzletemet?',
        'countries-title' => 'Mely országokat látogatták a legtöbbször?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Szeretnél pénzt keresni anélkül, hogy egyetlen dollárt költenél?',
        'message' => "Kedves :name! Nyissa meg az Irányítópult > Demonetizálás menüpontot, és hozzon létre hivatkozási hivatkozást. Küldd el a linket barátaidnak, kapsz egy Selldone ajándékkártyát és egy százalékot a barátod befizetéseiből. Vegye figyelembe, hogy az ajándékutalványt Önnek és barátjának is elküldjük.",
        'action' => 'Tekintse meg bemutatkozó linkemet',
        'mail-clip' => "<b style='color: #C2185B'>Fontos:</b> Ha olyan e-mail szolgáltatásokat használ, mint például a Gmail, amelyek korlátozzák az e-mail hosszát, keresse meg az alábbi lehetőséget az e-mail végén a teljes jelentés megjelenítéséhez, és kattintson rá:",

        'no-coin-reward' => "<b style='color: #C2185B'>Sajnáljuk</b> , tevékenysége nem felelt meg az ingyenes SEL Coins jutalom követelményének. Próbáljon többet, és adjon el többet üzletében a következő szezonban.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Jutalom:</b> Gratulálunk, fantasztikus teljesítménye miatt :amount SEL Coin ingyenes jutalmat adtunk.",

        'need-buy-license' => "<b>Vállalkozásának szintje:</b> Úgy tűnik, hogy még nem regisztrált előfizetési csomagot webhelyére! Frissítsen most, hogy további funkciókat érhessen el mindössze havi :amount-ért, ha évente fizetik.",
        'not-afford-message' => "Ha nem engedheti meg magának, vagy problémái vannak a fizetéssel, nyugodtan jelezze nekünk a support@selldone.com címen.",
        'add-domain' => "<b>Miért ne lehetne egyéni domain a vállalkozása számára?</b><br> Adjon hozzá domaint webhelyéhez most; ez ingyenes!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone egy<del> termék</del> <span style = 'color: forestgreen'>közösség</span> .<br> Legyen profi eladó!",
        'message' => "Kövesse a Selldone hivatalos oldalait a Twitteren, a LinkedIn-en és a közösségi hálózatokon. Küldjön el nekünk bármilyen megjegyzést, kérést vagy kritikát, vagy vegyen részt a Selldone-ról szóló vitákban. Mi is részei vagyunk az <b>Ön</b> által létrehozott Selldone közösségnek."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Új avokádó rendelések érkeztek | :shop_title :time',
        'title' => "Teljesítményjelentés az elmúlt 24 óráról",
        'message' => "Ügyfelei várják rendeléseinek áttekintését és árképzését. A lehető leghamarabb válaszoljon ügyfelei kérésére, hogy több értékesítést érjen el.",
        'card_title' => "Rendelések a sorban",
        'card_subtitle' => ":date óta",

        'card_payed' => "Fizetett megrendelések"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Válaszolj a bejegyzésedre itt: :community_title',
        'title' => ":name és :count mások is hozzászóltak a bejegyzéseidhez.",
        'message' => "Szia :name, hozzászólásaid felkeltik a figyelmet! Megjegyzéseket kapott a közösségünkben. Jelentkezzen be fiókjába, hogy részt vegyen a vitában, és megtudja, mit mond mindenki.",
        'title-simple' => ":name kommentálta a bejegyzéseidet.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Válasz a témára :topic_title',
        'title' => ":name, és :count mások válaszoltak a témádban.",
        'message' => "Szia :name, a témája felkelti a figyelmet! Válaszokat kapott közösségünkben. Jelentkezzen be fiókjába, hogy részt vegyen a vitában, és megtudja, mit mond mindenki.",
        'title-simple' => ":name válaszolt a témádban.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Új bejelentkezés :name',
        'category' => 'Biztonsági értesítések',
        'title' => "Jelentkezzen be a fiókba",
        'message' => "Kedves :name, Ön bejelentkezett Selldone fiókjába.",   // Login in selldone (seller)
        'message-shop' => "Kedves :name, Ön bejelentkezett a :shop_title oldalra.",  // Login in shop (buyer)

        'footer' => "Ha nincs bejelentkezve, kérjük, változtassa meg jelszavát.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Visszavonás",
        'deposit' => "Letét",

        'withdraw_subject' => "Kivonás a :account számláról",
        'deposit_subject' => "Befizetés a :account számlára",

        'message' => "A pénzátutalás az alábbi előírások szerint történt.",

        'type' => "Tranzakció Típusa",

        'from' => "Forrás fiók",
        'to' => "Destination account",

        'desc' => "Tranzakció leírása",
        'action' => "Tranzakció megtekintése",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Fontos! Szabályszegés| :shop",
        'category' => "Kritikus tájékoztatás",
        'title' => "Az üzletét megbüntették",
        'action' => "Nyissa meg az üzlet irányítópultját",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter meghívott a Selldone-ba",
        'title' => "A :name elküldte Önnek az :amount-ot, hogy segítsen elindítani új online webhelyét és bevételt szerezni belőle!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Meghívás elfogadása",
        'owner' => "Tulajdonosa",
        'join-date' => "Csatlakozott a Selldone-hoz",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Helyreállítási link| :shop",
        'category' => "Boltbiztonság",
        'title' => "A <b>:shop_name üzlethelyreállítási</b> hivatkozása.",
        'message' => "Ezt az e-mailt azért küldtük Önnek, mert kérte az üzlet visszaállítását. Az alábbi linkre kattintva visszaállíthatja az üzletét és a hozzá tartozó összes adatot.",
        'action' => "Erősítse meg az üzlet helyreállítását",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Mennyi pénzt takarított meg a Selldone a vállalkozása számára?',
        'sub-title' => ':start dátumtól :end-ig',
        'infrastructure' => [
            'title' => 'Infrastruktúra',
            'subtitle' => 'Szerverek, CDN, Storage és egyéb felhőszolgáltatások',
        ],
        'experts' => [
            'title' => 'Szakértők és személyzet',
            'subtitle' => 'Fejlesztők, karbantartás és támogatás',
        ],
        'total_save' => 'Összesen megtakarított pénz'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'A teljesítményed',
        'sub-title' => 'Üzleti áttekintés a :start-tól a :end-ig',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Visszatért felhasználók',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Bevásárlókocsik',
            'subtitle' => 'Jelentse az új bevásárlókosarak számát',

        ],
        'products' => [
            'title' => 'Termékek áttekintése',
            'subtitle' => 'Az üzletben található termékek állapota típus szerint',
            'value_name' => 'Termékek'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'A webhely összes oldalmegtekintése',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Új rendelés érkezett. Kérjük, lépjen a szállítói panel rendelésfeldolgozási oldalára.",
        'subject' => "🛍️ Új rendelés érkezett| :order_id",
        'your_revenue' => "Az Ön bevétele",
    ],
    'vendor-invite' => [
        'title' => 'Eladói Meghívás',
        'message' => "Meghívást kapott, hogy legyen a :shop_name szállítója. Elfogadhatja vagy elutasíthatja az alábbi gombokra kattintva.",
        'subject' => ":shop_name | Meghívást kapott, hogy legyen eladónk",
        'accept' => "Elfogadás és eladóvá válás",
        'reject' => "Elutasít",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Meghívó, hogy csatlakozzon csapatunkhoz',
        'message' => "Meghívást kapott, hogy csatlakozzon a :vendor_name-hoz a :shop_name címen. Elfogadhatja vagy elutasíthatja ezt a meghívást az alábbi gombok segítségével.",
        'subject' => "Meghívás a :vendor_name-hoz|Legyél Csapattag",
        'accept' => "Fogadd el és csatlakozz a csapathoz",
        'reject' => "Elutasítás",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Az Ön :shop bejelentkezési kódja",
        'header-message' => "Azért küldjük Önnek ezt az e-mailt, mert bejelentkezési kódot kért az üzlethez. Az alábbiakban keresse meg egyszeri jelszavát (OTP):",
        'footer-message' => "Ez a kód 10 percig lesz érvényes. Ha nem Ön kérte ezt a bejelentkezési kódot, kérjük, hagyja figyelmen kívül ezt az e-mailt."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Igazolja e-mail-címét| :shop",
        'title' => 'E-mail ellenőrzés',
        'header-message' => "Szia :name,<br> Kérjük, erősítse meg, hogy **:email** az Ön e-mail címe a gombra kattintva, vagy használja az alábbi linket 48 órán belül.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Termékfrissítések| :shop",
        'title' => "Frissítés a termék állapotáról – az elmúlt 24 órában",
        'message' => "Remélem, ez az üzenet jól talál. Ez egy rövid frissítés, amely tájékoztatja Önt termékeinek állapotáról a platformunkon az elmúlt 24 órában.\nEbben az időszakban néhány termék állapota megváltozott. Ezeket a változásokat vásárlások, készletfrissítések vagy egyéb kapcsolódó események okozhatják.\nAz egyes termékekre vonatkozó részletesebb információkért kérjük, jelentkezzen be fiókjába, és ellenőrizze a „Termék állapota” részt.",
        'action' => "Nyissa meg a szállítói panelt",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Tömeges megrendelések érkeztek| :shop | :date",
        'title' => "Tömeges rendelések értesítése",
        'message' => "Tömeges megrendeléseket kapott. Kérjük, további részletekért látogasson el a rendelésfeldolgozási oldalra a panelen. A rendelési listát a megadott biztonságos linken keresztül is letöltheti, 7 napig érvényes.<br><br>\n        <b>FONTOS:</b> Ez a link 7 napig érvényes.<br>\n        Ez a link dinamikus, így minden alkalommal, amikor rákattint, a legfrissebb rendeléseket kapja az adott dátumra. <b>Ez azt jelenti, hogy ha a megrendelés fizetési státusza elutasítottra változik, akkor többé nem fogja látni a rendelést a letöltött CSV-fájlban, vagy ha a rendelést kifizették, akkor megjelenik a listában.</b><br><br>\n        <ul>\n            <li>A CSV olyan fizetett rendeléseket tartalmaz, amelyek lefoglalt dátuma a :date.</li>\n            <li>A lefoglalt dátum az a dátum, amikor a felhasználó a rendelési oldalon a fizetésre kattint.</li>\n        </ul>\n        <b>Az ismétlődő rendelések elkerülése érdekében mindig ellenőrizze a ID rendelést a küldés előtt.</b>",
        'action' => "Megrendelési lista letöltése",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "A megrendelésében szereplő egyes tételeket nem fogadták el, és nem szállíthatók ki. Az ezekre a tételekre vonatkozó összeget hamarosan visszatérítjük a kártyájára."
    ]

];
