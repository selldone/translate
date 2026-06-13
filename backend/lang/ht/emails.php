<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Mesaj sa a akeyi yon nouvo achtè nan boutik la.',
        ShopMailTemplateCodes::OrderCheckout => 'Yo voye notifikasyon sa a lè yon achtè konfime yon lòd.',
        ShopMailTemplateCodes::OrderPayment => 'Notifikasyon sa a konfime peman yon kliyan fè siksè.',
        ShopMailTemplateCodes::OrderUpdate => 'Se mesaj sa a voye mete ajou yon achtè sou estati a nan lòd yo.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Yo voye mesaj sa a bay yon vandè pou fè yo konnen yon lòd konfime.',
        ShopMailTemplateCodes::PosCheckout => 'Yo voye notifikasyon sa a pou konfime yon pwen nan lòd vann pou yon achtè.',
        ShopMailTemplateCodes::PosPayment => 'Notifikasyon sa a konfime yon peman pwen nan lavant fè pa yon achtè.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Mesaj sa a fè vandè a konnen yon acha ki fèt nan pwen lavant yo.',
        ShopMailTemplateCodes::ShopContact => 'Yo voye notifikasyon sa a lè yo soumèt yon fòm kontak.',
        ShopMailTemplateCodes::ShopGiftCard => 'Notifikasyon sa a enfòme yon itilizatè ke yo te resevwa yon kat kado.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Mesaj sa a akeyi yon nouvo machann nan boutik la.',
        ShopMailTemplateCodes::ShopVendorInvite => "Yo voye mesaj sa a pou envite yon machann rantre nan mache ou a.",
        ShopMailTemplateCodes::ShopVendorOrder => "Yo voye mesaj sa a bay vandè a lè yo resevwa yon lòd nan swa Peye oswa Lajan Kach sou Livrezon (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Voye chak jou pou mete ajou fournisseurs sou estati pwodwi yo.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Yo voye mesaj sa a pou envite yon machann rantre nan mache ou a.",

        ShopMailTemplateCodes::UserLogin => "Notifye itilizatè a ak detay login, ki gen ladan adrès IP, dat, ak aparèy, pou rezon sekirite.",
        ShopMailTemplateCodes::LoginCode => "Voye yon kòd modpas yon sèl fwa pou itilizatè yo konekte nan magazen an.",

        ShopMailTemplateCodes::EmailVerifyLink => "Voye yon lyen pou verifye adrès imel itilizatè a. Imèl sa a voye lè yon itilizatè anrejistre pa SMS epi antre imel yo. Li pa voye lè yon itilizatè anrejistre dirèkteman ak koneksyon sosyal oswa imel.",

        ShopMailTemplateCodes::EmailBulkOrder => "Voye yon lis lòd resevwa ak peye an gwo pou yon jou espesifik."


    ,

    ],


    'global' => [
        'greetings' => 'Bonjou, :name!',
        'end-statement' => 'Ekip sipò',

        'receiver_name' => 'Bonjou :user_name',
        'footer-help' => "Bezwen èd? Mande nan [support@selldone.com](mailto:support@selldone.com) oswa vizite [sant èd] nou an (https://selldone.com/community).",
        'selldone-team' => 'Ekip Selldone la',
        'footer-shop' => "Si w bezwen èd ak nenpòt bagay tanpri pa ezite voye nou yon imèl: :shop_mail",
        'accept' => "Aksepte",
        'reject' => "Rejte",
        'verify' => "verifye",
        'title' => "Tit",
        'value' => "Valè",
        'description' => "Deskripsyon",
        'shop' => "Boutik",
        'shop-info' => "Enfòmasyon magazen",
        'user' => "itilizatè",
        'user-info' => "Enfòmasyon sou Kont",
        'license' => "Lisans",
        'status' => "Estati",
        'start' => "Kòmanse",
        'end' => "Fen",
        'renewal' => "Renouvèlman",
        'view' => "View",

        'balance' => "Balans",
        'card_number' => "Nimewo kat",
        'cvv' => "Cvv",
        'expire_date' => "Dat ekspire",

        'Dashboard' => "Dach",
        'order' => "lòd",
        'view_order' => "Gade lòd",
        'pay_now' => "Pay now",

        'official_selldone' => "VANN OFISYE",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Lajan",
        'free-balance' => "Balans gratis",
        'locked-balance' => "Balans fèmen",
        'bot' => "bot",
        'requests' => "Demann",
        'baskets' => 'Charyo',
        'physical' => "Fizik",
        'virtual' => "Virtuel",
        'file' => "File",
        'service' => "Sèvis",
        'fulfillment' => "Akonplisman",
        'open' => "Louvri",
        'reserved' => "Rezève",
        'canceled' => "Anile",
        'payed' => "Peye",
        'cod' => "COD",
        'orders-count' => 'Lòd',
        'payments-count' => 'Peman yo',
        'confirms-count' => 'Konfime',
        'sends-count' => 'Voye',
        'delivers-count' => 'Delivre',
        'count' => 'Konte',
        'transactions-count' => 'Tranzaksyon yo konte',
        'success-transactions' => 'Siksè tranzaksyon yo',
        'total-amount' => 'Kantite total',
        'amount' => 'Kantite lajan',
        'wage' => 'Salè',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Viv',
        'CheckQueue' => 'Tcheke keu',
        'OrderConfirm' => 'Lòd konfime',
        'PreparingOrder' => 'Preparasyon lòd',
        'SentOrder' => 'Voye lòd',
        'ToCustomer' => 'Livre bay kliyan',
        'Pending' => 'annatant',
        'Accepted' => 'Aksepte',
        'Rejected' => 'Rejte',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefòn',
        'total' => 'Total',
        'view-detail' => 'Gade detay',
        'empty' => 'Vide',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Reply',
        'reactions' => 'Reyaksyon',
        'Comments' => 'Kòmantè',
        'last-comment' => 'Dènye kòmantè',
        'response-to' => 'Repons pou',
        'posts' => 'Posts',
        'post' => 'Post',

        'name' => 'Non',
        'email' => 'Imèl',
        'type' => 'kalite',
        'device' => 'Aparèy',
        'platform' => 'Platfòm',
        'browser' => 'Navigatè',
        'time' => 'Tan',
        'Wallet' => 'Bous',
        'date' => 'Dat',

        'account' => 'Kont',
        'transaction' => 'Tranzaksyon',
        'fee' => 'Frè',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategori',
        'password' => 'Modpas',
        'verify-login' => "Verifye & Konekte",
        'url' => 'URL',
        'avocado' => 'Zaboka',
        'hyper' => 'Hyper',
        'buy-now' => "Achte kounya",
        'add-domain' => "Add Domain",
        'views' => 'Pwen de vi',


        'country' => 'Peyi',
        'address' => 'adrès',
        'postal' => 'Kòd postal',
        'building_no' => 'Bilding #',
        'building_unit' => 'inite #',
        'message' => 'Mesaj',


        'customer' => 'Kliyan',
        'cart-items' => 'Atik kabwa',
        'payment' => 'Peman',
        'receiver' => 'Reseptè',
        'virtual-items' => 'Atik vityèl',
        'no-payment' => 'Pa gen peman!',

        'enable' => 'Pèmèt',
        'access' => 'Aksè',
        'bank' => 'Enfòmasyon labank',

        'vendor' => 'Vandè',

        'view_content' => "Gade kontni konplè",
        'files' => 'Dosye',
        'download' => 'Telechaje',
        'file_name' => 'Non dosye',
        'file_size' => 'Gwosè',

        'subscription' => 'Abònman',
        'products' => 'Pwodwi yo',
        'vendor_products' => 'Pwodwi vandè',

        'pickup' => 'Ranmase',

        'minutes' => 'Minit',
        'hours' => 'Orè',

        'refund' => 'Ranbousman',
        'recipient_address' => 'Adrès Destinatè',
        'signature' => 'Siyati',
        'blockchain' => 'Blockchain',
        'details' => 'Detay yo',


    

        'Shop' => 'Boutik',
        'dashboard' => 'tablodbò',
        'comments' => 'kòmantè',
        'wallet' => 'bous',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone biznis OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Rapò pèfòmans, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Rapò sezon, Selldone'
        ],
        'Onboarding' => [
            'id' => 'alo',
            'name' => 'Apwouve, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Sipòte :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verifye, Selldone'
        ],
        'Welcome' => [
            'id' => 'alo',
            'name' => 'Kominote, Selldone'
        ],
        'NewShop' => [
            'id' => 'machann yo',
            'name' => 'Apwouve, Selldone'
        ],
        'Approve' => [
            'id' => 'apwouve',
            'name' => 'Apwouve, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Jesyon Lòd :name'
        ],

        'Recovery' => [
            'id' => 'rekiperasyon',
            'name' => 'Ekip Rekiperasyon Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'annatant ⌛',
        'PAYED' => 'Peye ✅',
        'CANCELED' => 'Anile ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administratè',
            'OFFICER' => 'Ofisye ak Sipèvizè',
            'AUDITING' => 'Manadjè odit',
            'EMPLOYEE' => 'Anplwaye',
            'PRODUCT' => 'Manadjè pwodwi yo',
            'CONTENT' => 'Manadjè kontni',
            'MARKETING' => 'Manadjè maketing',
            'VIEWER' => 'Viewer',

        ],
        'subject' => ":inviter envite ou kòm :level| :shop",
        'category' => "Envitasyon anplwaye yo",
        'title' => "Yo te envite w nan <b>:shop_name</b> kòm <b>:level</b> .",
        'message' => "Ou te resevwa yon envitasyon pou kolabore ak ekip <b>:shop_title</b> nan biznis. Ou gen opsyon pou aksepte oswa refize òf sa a. Si w ta chwazi aksepte, tanpri konekte nan sèvis Selldone pou konfime desizyon w la. Lè w fin konfime, w ap jwenn aksè nan seksyon jesyon magazen an.",

    ],

    'welcome-email' => [
        'subject' => "👋 Byenvini :name, Ann kòmanse ak Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Byenveni nan Selldone",
        'message' => "Mèsi paske w chwazi Selldone! Kounye a ou fè pati yon kominote vibran ki konekte vandè mondyal ak kliyan, biznis lokal yo ak antrepriz, ak moun ak kòporasyon yo. Tout zouti Master ak Pro nou yo disponib pou ou **gratis** ak **san limit**. Nou la pou sipòte ou epi ouvri pòt pou siksè ou.",

        'index' => "Etap :step.",

        'step-domain' => [
            'title' => 'Ajoute domèn Custom ou',
            'message' => "Pou kòmanse, ajoute domèn koutim ou a gratis nan Boutik Dach anba Anviwònman> Anviwònman Domèn.",
            'action' => 'Jere domèn mwen yo',
        ],
        'step-landing' => [
            'title' => 'Customize paj lakay ou',
            'message' => "Pèsonalize paj lakay ou lè w ale nan Dashboard > Paj. Chwazi yon paj aterisaj oswa kreye yon nouvo. Li fasil ak entwisyon, epi ou ka kòmanse travay sou li touswit.",
            'action' => 'Customize Landing Page mwen an',
        ],
        'step-payment' => [
            'title' => 'Enstalasyon Metòd Peman',
            'message' => "Kòmanse aksepte peman dirèkteman nan kont labank ou. Pou konekte founisè peman ou yo tankou Stripe, PayPal, ak plis ankò, ale nan Dashboard > Kontablite > Gateway.",
            'action' => 'Ajoute Metòd Peman',
        ],
        'step-products' => [
            'title' => 'Ajoute pwodwi ou yo',
            'message' => "Fasil ajoute pwodwi ak kategori nan Dashboard > Pwodwi. Se jis tankou jere dosye ak dosye sou PC ou - konplètman trennen-e-depoze pare. Ou kapab tou enpòte pwodwi yo lè l sèvi avèk Excel. Gen yon modèl echantiyon ki disponib pou ede w kòmanse.",
            'action' => 'Jere pwodwi mwen yo',
        ],
        'step-shipping' => [
            'title' => 'Enstalasyon Metòd Shipping',
            'message' => "Pou fè w peye kliyan yo pou anbake, defini metòd anbake ou nan Dashboard > Lojistik > Shipping. Ou ka mete diferan pri ak sipò pou divès kote. Pa bliye mete orijin depo ou nan Dashboard > Lojistik > Depo.",
            'action' => 'Jere Metòd Shipping',
        ],
    

        'seller' => [
            'title' => 'Èske w se yon vandè?',
            'message' => 'Pou kòmanse vann, antre nan tablodbò ou a nan Selldone atravè lyen ki anba a epi kreye premye magazen ou a konplètman gratis. Sa a pral pran kèk minit epi w ap gen pwòp magazen ou ak sit sou entènèt. Lè sa a, nou pral gide ou nan pwochen etap yo epi jwenn pòtay peman an.',
            'action' => 'Konekte sou tablodbò mwen an',
        ],
        'buyer' => [
            'title' => 'Mwen se yon achtè',
            'message' => 'Felisitasyon. Yon fwa ou se yon manm nan Selldone, ou pral debarase m de tout traka yo nan manm ak otantifikasyon nan magazen sou entènèt. Pou benefisye nenpòt magazen ak sit ki sèvi ak platfòm Selldone, ou ka konekte ak yon sèl klike sou epi fè acha ou senp, rapid ak an sekirite.',
        ],
    ],


    'charge-account' => [
        'category' => 'Bous > Kont > Chaje',
        'title' => "Chaj Siksè",
        'message' => "Yo te chaje kont ou <b>:account_number</b> <b>:amount</b> avèk siksè.",
        'account' => 'Kont',
        'charge' => 'Chaje',
        'balance' => 'Balans',
        'footer' => "Fè biznis fasil, reyalize, ak aksesib pou nenpòt moun atravè mond lan."
    ],

    'verify-email' => [
        'subject' => "🙌 Ranpli enskripsyon ou nan Selldone! Verifye lyen.",
        'category' => "OU A YON PA LOU",
        'title' => "Verify adrès imel ou",
        'message' => "Alo :name,<br><br>Mèsi paske w chwazi Selldone!<br><br>Pou konfime ke <b>:email</b> se adrès imel ki kòrèk ou, tanpri klike sou bouton ki anba a. Ou gen 48 èdtan pou konplete verifikasyon sa a.",
        'footer' => "Si w gen pwoblèm pou klike sou bouton Verify la, kopye epi kole URL ki anba a nan navigatè entènèt ou a: :activation_url",
        'next-step' => "Apre sa, nou pral voye kèk materyèl itil ak yon gid etap-pa-etap pou fè li fasil pou ou ajoute domèn koutim ou, mete peman, ajoute pwodwi, epi jwenn premye lòd ou.",

    ],
    'verify-email-code' => [
        'subject' => "Kòd verifikasyon pou :name",
        'category' => "SECURITY",
        'title' => "Imèl kòd verifikasyon",
        'message' => "Bonjou :name,<br><br>Pou konfime ke <b>:email</b> se adrès imel ou kòrèk, tanpri antre kòd sa a nan pwochen <b>10 minit </b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Boutik ou a pare| :name",
        'category' => "OU A YON PA LOU",
        'title' => "Enstalasyon fini",
        'account_title' => "Kont ou",
        'account_msg' => "Verifye epi konekte sou kont ou ak enfòmasyon sa a.",
        'shop_msg' => "Enfòmasyon sou kont sou sistèm operasyon biznis Selldone.",

    ],

    'reset2fa' => [
        'category' => "MESAJ OFISYE SEKIRITE",
        'title' => "Mande enfim login 2-etap",
        'message' => "W ap resevwa imel sa a paske nou te resevwa yon demann pou reset otantifikasyon de faktè pou kont **:name** ak **:email** imel.<br><br>Nou jwenn detay sa yo pou kont ou:",
        'footer' => "Si ou pa t mande yon reset modpas, pa gen okenn lòt aksyon ki nesesè.",
        'action' => 'Enfim login de etap',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Boutik ou pare kounye a!",
        'category' => "BORN NEW STOCK ONLINE NAN MOND LA",
        'title' => "Felisitasyon, :name!",
        'message' => "<b>Felisitasyon, :name! Nouvo biznis sou entènèt ou an ap viv kounye a!</b> Nou kontan akeyi w nan kominote Selldoners la. Ou te fè premye etap la nan siksè, epi nou la pou ede w chak etap nan chemen an.<br>Kounye a ke magazen ou a pare, ann asire w ke ou ap fikse pou resevwa peman dirèkteman nan men kliyan ou yo epi kòmanse grandi anpi ou. Si ou janm bezwen èd, nou se jis yon mesaj lwen—ekip sipò nou an toujou la pou ou.<br><br><b>Enpòtan Pwochen etap:</b> Pou kòmanse, asire ou tout mete kanpe pou resevwa peman ak operasyon lis. Nou pral gide ou atravè chak etap pou jwenn magazen ou a fonksyone san pwoblèm.",
        'pdf-book' => "Pa rate liv men ki tache: Fè biznis ou tankou yon jwèt",

        'account' => [
            'title' => 'Etap 1: Kreye yon kont nan bous Selldone la',
            'message' => "Pou kòmanse, kreye yon kont nan bous Selldone ou. Sa a se kote yo pral dedwi frè ou yo, epi li la tou kote ou pral ranpli pou kenbe magazen ou a mache byen. Si balans ou janm ale negatif, pa enkyete! Magazen ou a ap kontinye fonksyone san entèripsyon.",
            'action' => 'Konekte nan bous',
        ],

        'shop-account' => [
            'title' => 'Etap 2: konekte kont lan nan magazen an',
            'message' => "Apre sa, konekte kont bous ou a nan magazen ou a. Ale nan <b>Store > Kontablite > Invoice</b>, epi konekte bous ou a. Sa asire ke tout peman kliyan yo depoze dirèkteman nan kont labank ou—Selldone pa dedwi okenn montan nan salè ou.",
            'action' => 'Magazen Fakti Panel',
        ],

        'gateway' => [
            'title' => 'Etap 3: Konekte Gateway Peman sou Entènèt',
            'message' => "Koulye a, ann mete kanpe pòtay peman sou entènèt ou an. Ale nan <b>Store > Kontablite > Port</b> epi klike sou <b>Add New Port</b>. Chwazi lajan ou, epi w ap wè yon lis pòtay peman ki disponib. Konekte yon pòtay se rapid ak fasil, men si w bezwen nenpòt èd, ou lib pou tcheke gid Selldone yo oswa kontakte nou.",
            'action' => 'Ajoute yon pòtal nan magazen an',
        ],

        'domain' => [
            'title' => 'Dènye etap: konekte yon domèn dedye',
            'message' => "Koulye a, konekte domèn koutim ou a nan magazen ou a. Sa a pèmèt kliyan yo achte pwodwi oswa sèvis ou yo epi fè peman dirèkteman ba ou.",
            'action' => 'Entwodwi ak resevwa kat kado san limit',
        ],
    ],


    'basket-list' => [
        'item' => "atik",
        'count' => "Konte",
        'price' => "pri",
        'discount-code' => "Kòd rabè",
        'customer-club' => 'Kliyan Kliyan',
        'shipping' => "Shipping",
        'total' => "Total",
        'offer' => "Ofri",
        'coupon' => "Koupon",
        'lottery' => "Prim",
        'tax' => "Taks",
        'tax_included' => "Enkli nan pri",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metòd',
        'amount' => 'Kantite lajan',
        'giftcard' => 'Gift card',
        'payment' => 'Peman',
    ],


    'shop-subscription-email' => [
        'category' => "Mizajou abònman",
        'title' => "Lisans magazen: :shop_title",
        'title-reserved' => "Lisans rezève: :shop_title",
        'title-active' => "Lisans aktif: :shop_title",
        'title-finished' => "Lisans fini: :shop_title",
        'title-cancel' => "Anile lisans: :shop_title",
        'message' => "Plan lisans boutik ou mete ajou,",
        'RESERVED' => "⚡ Plan abònman ou a **rezève**.",
        'ACTIVE' => "🟢 Plan abònman ou a **aktive**.",
        'FINISHED' => "🚧 Plan abònman ou a **fini**.",
        'CANCEL' => "⛔ Plan abònman ou an **anile**.",
    ],

    'support' => [
        'subject' => "Sant sipò|:name reponn",
        'category' => "Sant sipò",
        'title' => "Ou te resevwa yon repons",
        'action' => "Louvri admin boutik",
    ],

    'shop-customer-join' => [
        'subject' => "Antre nan :shop_title",
        'category' => "Nouvo selebrasyon kliyan",
        'title' => "Nou kontan pou manm ou",
        'action' => "Vizite kounye a",
    ],

    'shop-vendor-join' => [
        'subject' => "Abònman vandè | :shop_title",
        'category' => "Nouvo selebrasyon vandè",
        'title' => "Nou kontan pou manm ou",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kat kado :shop_title",
        'category' => "Ajoute nouvo kat",
        'title' => "Felisitasyon, ou te resevwa yon kat kado",
        'action' => "Achte kounye a",
        'message' => "Ou te resevwa yon kat kado nan kantite lajan :balance :currency. Ou pral kapab achte nan magazen nou an ak kat kado sa a.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Sant sipò| :shop",
        'category' => "sipò",
        'title' => "Ou te resevwa yon repons",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Kòmande kesye | :order_id",
        'title' => "lòd",
        'message' => "Ou te pase yon lòd nan magazen nou an. Nou te resevwa lòd ou a epi nou pral voye yon lòt imèl ba ou yon fwa peman an konfime."
    ,

        'payments' => 'Peman yo',
    ],

    'order-payment' => [
        'subject' => "🛍 Konfimasyon Peman | :order_id",
        'title' => "Lòd peman",
        'message' => "Peman ou fini,<br> Nou gen lòd ou a. Nou pral voye yon lòt imèl ba ou lè lòd ou an ap voye.",
    

        'payments' => 'Peman yo',
    ],

    'order-update' => [
        'subject' => "🛍️ Mizajou sou sitiyasyon lòd la|Lòd :order_id",
        'title' => "Mizajou Estati Lòd",
        'message' => "Lòd ou a te mete ajou. Ou ka tcheke dènye estati lòd sa a nan kont ou.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Lòd ou a nan keu pou pwosesis la. N ap fè w konnen lè w ap prepare l.",
                'OrderConfirm' => "Kòmand ou konfime epi preparasyon an kòmanse.",
                'PreparingOrder' => "Kòmand ou a ap prepare epi yo pral anbake byento.",
                'SentOrder' => "Kòmand ou an te anbake. Ou pral resevwa li yon ti tan.",
                'ToCustomer' => "Kòmand ou a te delivre. Nou espere ou jwi li!",

                'PreparingOrder-PICKUP' => "Lòd ou a ap prepare. Ou pral resevwa yon notifikasyon lè li pare pou ranmase.",
                'SentOrder-PICKUP' => "Kòmand ou a pare pou ranmase. Tanpri vini nan magazen an pou w kolekte li.",
                'ToCustomer-PICKUP' => "Yo te pran lòd ou a. Nou espere ou jwi li!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Lòd ou a nan keu pou pwosesis la. Nou pral fè w konnen lè li pare.",
                'OrderConfirm' => "Kòmand ou konfime epi preparasyon an ap fèt.",
                'PreparingOrder' => "Lòd ou a ap prepare epi yo pral voye ba ou byento.",
                'ToCustomer' => "Kòmand vityèl ou a te delivre sou kont ou. Mèsi!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Demann sèvis ou a nan keu a. Nou pral fè w konnen lè nou kòmanse.",
                'OrderConfirm' => "Sèvis ou konfime epi n ap prepare pou kòmanse.",
                'PreparingOrder' => "Nou ap prepare sèvis ou a, epi n ap fè w konnen yon fwa li fini.",
                'ToCustomer' => "Sèvis ou konplè. Mèsi paske w chwazi nou!"
            ],
            'FILE' => [
                'PreparingOrder' => "Dosye w la ap prepare epi yo pral disponib byento.",
                'ToCustomer' => "Fichye ou a pare epi li te delivre. Ou ka telechaje li kounye a."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Lòd abònman ou a nan keu a. Nou pral fè w konnen lè pwosesis la kòmanse.",
                'OrderConfirm' => "Yo konfime abònman ou a epi y ap mete kanpe.",
                'PreparingOrder' => "Nou ap prepare abònman ou epi li pral kòmanse byento.",
                'SentOrder' => "Abònman ou te aktive. Ou pral resevwa mizajou kontinyèl.",
                'ToCustomer' => "Sèvis abònman ou aktive avèk siksè."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Felisitasyon :name|Nouvo bon: :title',
        'category' => "FELICITASYON, NOUVO KÒN",
        'message' => "Hey :name,<br><br>Ou te resevwa yon nouvo bon kòm yon kado nan men nou! Ou ka touche menm plis bon lè w prezante Selldone bay zanmi w ak tout moun ou konnen. Bon sa a vo **:price :currency**.<br><br>Ou te fè premye etap la, epi nou la pou ede w debloke nouvo karakteristik ak bon ou! Tanpri konekte ak **:email** epi jwenn bon ou a nan Shop **Dashboard** > **Anviwònman** > **Lisans**.<br><br>Felisitasyon!",
        'action' => "Dashboard mwen an",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Felisitasyon, mezanmi :name | Ou te resevwa yon kado',
        'category' => "Anons ou resevwa yon kado",
        'title' => "Kado pou ou",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Kado",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Nouvo Lòd Resevwa | :order_id",
        'title' => "New Order",
        'message' => "Ou te resevwa yon nouvo lòd. Tanpri ale nan paj pwosesis lòd nan magazen ou a.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Enfòmasyon ou ranpli',
        'output-form-title' => 'Enfòmasyon atik achte',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Rapò chak semèn :time',
        'title' => 'Rapò pèfòmans magazen chak semèn',
        'message' => "Sa a se rapò chak semèn magazen ou a soti nan <b>:start</b> rive <b>:end</b>. Rapò sa a gen ladann konsèy pou amelyore biznis ou, ou ka tcheke tou estati magazen sou entènèt ou ak dènye lòd. Mwen espere ke ou gen yon bon jounen ak semèn nan devan."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Rapò sou ekonomi :amount ou a nan twa dènye mwa yo| :shop_title',
        'title' => 'Rapò sezonye sou aktivite biznis ou, rekonpans ak ekonomi finansye',
        'message' => "Sa a se rapò sezon <b>:shop_title</b> ou soti nan <b>:start</b> rive <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Kont konekte',
        'sub-title' => 'Ki dènye estati kont bous ki konekte nan magazen mwen an?',
        'view-wallet' => 'Gade bous',
        'tip-title' => 'Konsèy enpòtan',
        'tip' => "Mete yon bous Selldone gratis epi konekte li ak magazen ou a. Menm si balans ou negatif, kliyan ou yo ka toujou achte ak peye san okenn pwoblèm. Pa enkyete w, operasyon magazen ou a ak done yo ap kontinye san pwoblèm pou jiska 1 mwa, san okenn entèripsyon.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Konekte ak kont'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplikasyon enstale',
        'sub-title' => 'Lis aplikasyon ou te enstale nan magazen ou semèn sa a.',
        'tip' => "Èske ou vle jwenn plis aplikasyon pou magazen ou a?",
        'view-app-store' => 'Vizite magazen App Selldone la..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bots magazen ou yo',
        'sub-title' => 'Bot lavant aktif nan magazen mwen an.',
        'tip-title' => 'Vann bot',
        'tip' => "Selldone te ba ou otomatik lavant bots. Tout sa ou dwe fè se ale nan Add-ons> panèl Bots ak aktive bots magazen ou yo. Remake byen ke sèvis ki enpòtan an dwe disponib nan peyi ou.",
        'view-bots' => 'Jere bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kominikasyon ak Kliyan yo',
        'sub-title' => 'Konbyen kontak mwen te genyen ak kliyan mwen semèn sa a?',
        'faqs' => 'Kesyon yo poze souvan',
        'tickets' => 'Tikè Kliyan',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Estati Itilizatè yo',
        'sub-title' => 'Aktivite soti nan :start rive nan :end',
        'users' => [
            'title' => 'Kliyan yo',
            'subtitle' => 'Enskri Itilizatè yo',
        ],
        'views' => [
            'title' => 'Vizit',
            'subtitle' => 'Konbyen fwa ou te vizite magazen an',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Itilizatè retounen yo',

        'shop_views' => 'Boutik Views',
        'baskets' => [
            'title' => 'Charyo fè makèt',
            'subtitle' => 'Rapòte kantite nouvo charyo fè makèt',
        ],
        'products' => [
            'title' => 'Apèsi sou pwodwi yo',
            'subtitle' => 'Estati pwodwi nan magazen an pa kalite',
            'value_name' => 'Pwodwi yo'
        ],
        'products_count' => 'Kalite pwodwi yo',
        'views_count' => 'Gade konte',
        'sell_count' => 'Vann konte',
        'send_count' => 'Konte anbake',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel pou gwo vandè Drop Shipping Selldone.',
        'total_fulfillments' => 'Total Lòd Resevwa',
        'ds_count' => 'Resevwa Lòd',
        'statistics_title' => 'Rapòte lòd resevwa yo',
        'ds_cancels' => 'Anile pa vandè koòdone',
        'ds_rejects' => 'Anile pa ou',
        'tip' => "Èske w se yon gwo vandè machandiz? Èske w posede yon depo, faktori oswa distribitè pwodwi yo? Ou ka ofri pwodwi ou yo bay lòt vandè nan sèvis Selldone Drop Shipping pou vann pwodwi ou sou yon gwo echèl. Imèl nou nan support@selldone.com pou gide ou.",
        'view-drop-shipping-panel' => 'Konekte nan panèl wholesale',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Pousantaj echanj',
        'sub-title' => 'Lis dènye pousantaj konvèsyon lajan nan magazen ou a.',
        'from' => 'Sous Lajan',
        'to' => 'Destinasyon lajan',
        'rate' => 'Pousantaj konvèsyon',
        'view-exchange-panel' => 'Jere to echanj',
    

        'vew-exchange-panel' => 'panèl jesyon to echanj',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Kontra ekspè',
        'sub-title' => 'Ki pwofesyonèl ki travay sou magazen mwen an?',
        'cost' => 'Montan kontra a',
        'duration' => 'Dire',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dat Anile',
        'end_at' => 'Dat livrezon',
        'tip' => 'Ou ka anboche pi bon espesyalis nan Selldone pou devlope biznis ou.',
        'view-experts' => 'Klike pou kòmanse.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Rapòte pòtay peman aktif sou boutik la:shop.',
        'tip-title' => 'Konsèy enpòtan',
        'tip' => "Ale nan paj jesyon pòtal la nan magazen ou a epi ajoute omwen yon pò nan kèk minit. Kliyan ou yo renmen peye rapid epi an sekirite atravè portail sou entènèt.",
        'view-shop-gateways' => 'Konekte nan jesyon pòtal magazen mwen an.',
        'view-gateways' => 'Gade plis passerelles',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Lòd',
        'sub-title' => 'Lis lòd mwen te resevwa semèn sa a.',
        'total_baskets' => 'Total Lòd',
        'total_posBaskets' => 'Total Lòd Lajan Kach',
        'pos-title' => 'Bwat magazen POS',
        'chart-label' => 'Lòd ranpli (lòd sa yo pa nesesèman peye!)',
        'tip-title' => 'Ou ta dwe eseye pi di...',
        'tip' => "Pa gen siksè senp.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Sant pwosesis',
        'sub-title' => 'Konbyen lòd nou te trete nan magazen an semèn sa a?',
        'tip-title' => 'Ou pa t \'gen yon vann!',
        'tip' => "Malerezman ou pa t gen okenn lavant semèn sa a. Ou bezwen jwenn plis nan magazen ou. Ou ka ajoute plis pwodwi, chwazi pi bon imaj oswa ekri pi bon deskripsyon pou pwodwi ou yo. Konsidere yon travay aplentan pou biznis ou. Si ou fè li byen epi ou pa jwenn fristre, ou pral reyisi.",
        'view-process-center' => 'Gade sant pwosesis la',
        'return' => [
            'title' => 'Retounen Lòd',
            'subtitle' => 'Rapòte lòd retounen yo.',
            'tip-title' => 'Èske w te konnen sa...',
            'tip' => "Ou ka kreye otan kach anrejistre jan ou bezwen ak Selldone POS! Kit se tablèt ou, mobil, oswa laptop, ou ka vire nenpòt aparèy nan pwen vann magazen ou a. Li senp, rapid pou mete kanpe, ak konplètman prepare pou sèvè ou a. Kòmanse sèvi ak li jodi a!",
            'view-pos' => 'Konekte sou kesye magazen mwen an'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesyon yo',
        'sub-title' => 'Konbyen fwa mwen te vizite magazen mwen an?',
        'countries-title' => 'Ki peyi yo te pi vizite?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Èske ou vle fè lajan san yo pa depanse yon sèl dolar?',
        'message' => "Chè :name, ou ka ale nan Dashboard > Demonetization epi kreye yon lyen referans. Voye lyen an bay zanmi ou yo, Ou resevwa yon kat kado Selldone ak yon pousantaj nan peman zanmi ou yo. Remake byen ke yo pral voye kat kado a ba ou menm ak zanmi ou.",
        'action' => 'Gade lyen entwodiksyon mwen an',
        'mail-clip' => "<b style='color: #C2185B'>Enpòtan:</b> Si w itilize sèvis imel tankou Gmail ki limite longè imèl la, jwenn opsyon sa a nan fen imèl la pou w montre rapò konplè a epi klike sou li:",

        'no-coin-reward' => "<b style='color: #C2185B'>Padon:</b> Aktivite w la pa satisfè egzijans pou jwenn rekonpans SEL Coins gratis. Eseye pi di epi vann plis sou boutik ou a pou pwochen sezon.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Rekonpans:</b> Felisitasyon, akoz pèfòmans kokenn ou, nou te ba ou yon rekonpans:amount SEL Coin gratis.",

        'need-buy-license' => "<b>Ogmante biznis ou a:</b> Sanble ou poko anrejistre okenn plan abònman pou sit entènèt ou a! Upgrade kounye a pou déblotché plis karakteristik pou jis :amount pa mwa si yo peye chak ane.",
        'not-afford-message' => "Si ou pa gen mwayen oswa ou gen nenpòt pwoblèm ak peman, santi yo lib pou di nou via support@selldone.com.",
        'add-domain' => "<b>Poukisa ou pa gen yon domèn koutim pou biznis ou a?</b><br> Ajoute yon domèn sou sit entènèt ou an kounye a; li gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone se yon<del> pwodwi</del> <span style = 'color: forestgreen'>kominote</span> .<br> Fè yon Selldoner pwofesyonèl!",
        'message' => "Swiv paj ofisyèl Selldone la sou Twitter, LinkedIn ak rezo sosyal yo. Voye nou nenpòt kòmantè, demann oswa kritik oswa patisipe nan diskisyon sou Selldone la. Nou fè pati kominote Selldone <b>ou fè</b> tou."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Resevwa nouvo lòd zaboka | :shop_title :time',
        'title' => "Rapò pèfòmans pou dènye 24 èdtan yo",
        'message' => "Kliyan ou yo ap tann pou yo revize lòd ou yo ak pri. Reponn demann kliyan ou yo pi vit ke posib pou jwenn plis lavant.",
        'card_title' => "Lòd nan keu la",
        'card_subtitle' => "Depi :date",

        'card_payed' => "Peye lòd"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Reponn pòs ou nan :community_title',
        'title' => ":name, ak :count lòt moun fè kòmantè sou post ou yo.",
        'message' => "Hi :name, pòs ou yo ap resevwa atansyon! Ou te resevwa kòmantè nan kominote nou an. Konekte sou kont ou pou rantre nan diskisyon an epi wè sa tout moun ap di.",
        'title-simple' => ":name fè kòmantè sou post ou yo.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Reponn sijè ou a :topic_title',
        'title' => ":name, ak :count lòt moun te reponn sou sijè ou a.",
        'message' => "Hi :name, sijè ou a ap resevwa atansyon! Ou te resevwa repons nan kominote nou an. Konekte sou kont ou pou rantre nan diskisyon an epi wè sa tout moun ap di.",
        'title-simple' => ":name reponn sou sijè ou a.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nouvo konekte :name',
        'category' => 'Notifikasyon sekirite',
        'title' => "Konekte nan kont",
        'message' => "Chè :name, yo te detekte yon koneksyon sou kont Selldone ou.",   // Login in selldone (seller)
        'message-shop' => "Chè :name, ou te konekte nan :shop_title .",  // Login in shop (buyer)

        'footer' => "Si ou pa konekte, tanpri chanje modpas ou.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Retrè",
        'deposit' => "Depo",

        'withdraw_subject' => "Retire nan kont :account",
        'deposit_subject' => "Depo sou kont :account",

        'message' => "Transfè lajan an te fèt ak espesifikasyon sa yo.",

        'type' => "Kalite tranzaksyon",

        'from' => "Sous kont",
        'to' => "Destination account",

        'desc' => "Deskripsyon tranzaksyon",
        'action' => "Gade tranzaksyon",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Enpòtan! Vyolasyon règ yo| :shop",
        'category' => "Enfòme kritik",
        'title' => "Boutik ou a te penalize",
        'action' => "Louvri tablodbò boutik",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter envite w nan Selldone",
        'title' => ":name te voye :amount ou pou ede lanse nouvo magazen sou entènèt ou a epi monetize li!",
        'message' => "Bonjou **:receiver_name**,<br><br>Byenveni nan Selldone! Sou Selldone, ou ka fasilman kreye sit e-commerce ou, blog, kominote sou entènèt, e menm mete kanpe yon sistèm POS sou entènèt pou lavant an pèsòn-tout nan kèk minit. Li se sistèm operasyon konplè biznis sou entènèt ki fèt pou fè biznis ou pi byen, pi vit ak pi fasil pou kouri.<br><br>Enskri pa <b>:date</b> epi resevwa yon bon :amount pou kòmanse!",
        'accept' => "Aksepte envitasyon",
        'owner' => "Pwopriyetè a",
        'join-date' => "Sou Selldone depi",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Lyen rekiperasyon| :shop",
        'category' => "Boutik sekirite",
        'title' => "Lyen rekiperasyon magazen nan <b>:shop_name</b> .",
        'message' => "Yo te voye imèl sa a ba ou paske ou te mande pou retabli magazen ou a. Klike sou lyen ki anba a pral refè boutik ou a ak tout done ki fè pati li.",
        'action' => "Konfime Shop Recovery",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Konbyen kòb Selldone te ekonomize pou biznis ou a?',
        'sub-title' => 'Soti nan dat :start rive nan :end',
        'infrastructure' => [
            'title' => 'Enfrastrikti',
            'subtitle' => 'Sèvè, CDN, Depo, ak lòt sèvis nwaj',
        ],
        'experts' => [
            'title' => 'Ekspè ak Anplwaye',
            'subtitle' => 'Devlopè, antretyen, ak sipò',
        ],
        'total_save' => 'Total ekonomize lajan'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Pèfòmans ou',
        'sub-title' => 'Apèsi biznis soti nan :start rive :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Itilizatè retounen yo',

        'shop_views' => 'Boutik Views',
        'baskets' => [
            'title' => 'Charyo fè makèt',
            'subtitle' => 'Rapòte kantite nouvo charyo fè makèt',

        ],
        'products' => [
            'title' => 'Apèsi sou pwodwi yo',
            'subtitle' => 'Estati pwodwi nan magazen an pa kalite',
            'value_name' => 'Pwodwi yo'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total de vi paj sit entènèt',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Ou te resevwa yon nouvo lòd. Tanpri ale nan paj pwosesis lòd la nan panèl machann ou a.",
        'subject' => "🛍 Nouvo Lòd Resevwa | :order_id",
        'your_revenue' => "Revni ou",
    ],
    'vendor-invite' => [
        'title' => 'Envitasyon vandè',
        'message' => "Ou te resevwa yon envitasyon pou vin machann :shop_name. Ou ka aksepte oswa rejte li lè w klike sou bouton sa yo.",
        'subject' => ":shop_name |Envitasyon pou vin machann nou an",
        'accept' => "Aksepte & Vin yon machann",
        'reject' => "Rejte",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Envitasyon pou rantre nan ekip nou an',
        'message' => "Yo te envite w rantre nan :vendor_name nan :shop_name. Ou ka aksepte oswa refize envitasyon sa a lè l sèvi avèk bouton ki anba yo.",
        'subject' => "Envitasyon pou rantre nan :vendor_name|Vin yon manm ekip",
        'accept' => "Aksepte & Antre nan Ekip la",
        'reject' => "Rejte",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Kòd Login ou pou :shop",
        'header-message' => "Nou ap voye imèl sa a ba ou paske ou te mande yon kòd login pou boutik la. Tanpri jwenn yon sèl modpas ou (OTP) anba a:",
        'footer-message' => "Kòd sa a pral valab pou 10 minit. Si ou pa t mande kòd login sa a, tanpri inyore imel sa a."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifye imel ou| :shop",
        'title' => 'Verifikasyon Imèl',
        'header-message' => "Bonjou :name,<br>Tanpri konfime ke **:email** se adrès imel ou lè w klike sou bouton ki anba a oswa lè w itilize lyen ki anba a nan 48 èdtan.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Mizajou pwodwi| :shop",
        'title' => "Mizajou sou estati pwodwi - dènye 24 èdtan",
        'message' => "Mwen espere mesaj sa a jwenn ou byen. Sa a se yon aktyalizasyon tou kout pou enfòme w sou estati pwodwi ou yo sou platfòm nou an pandan 24 èdtan ki sot pase yo.\nPandan peryòd sa a, te gen chanjman nan estati a nan kèk pwodwi. Chanjman sa yo ka akòz acha, mizajou aksyon, oswa lòt evènman ki gen rapò.\nPou plis enfòmasyon detaye sou chak pwodwi, tanpri konekte sou kont ou epi tcheke seksyon 'Sitiyasyon Pwodui' la.",
        'action' => "Louvri Vandè Panel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Lòd En Resevwa| :shop | :date",
        'title' => "Notifikasyon sou lòd an gwo",
        'message' => "Ou te resevwa yon pakèt lòd an gwo. Tanpri vizite paj pwosesis lòd la nan panèl ou a pou plis detay. Ou ka telechaje lis lòd la tou atravè lyen an sekirite yo bay la, ki valab pou 7 jou.<br><br>\n        <b>ENPÒTAN:</b> Lyen sa a valab pou 7 jou.<br>\n        Lyen sa a dinamik, kidonk chak fwa ou klike sou li, w ap resevwa lòd ki pi ajou pou dat espesifik sa a. <b>Sa vle di si estati peman lòd la chanje an rejte, ou p ap wè lòd sa a nan CSV telechaje a, oswa si lòd la peye, li pral parèt nan lis la.</b><br><br>\n        <ul>\n            <li>CSV la gen lòd peye ak yon dat rezève nan :date.</li>.\n            <li>Dat rezève se dat lè itilizatè a klike sou kesye sou paj lòd la.</li>\n        </ul>\n        <b>Pou anpeche lòd kopi, toujou tcheke Lòd ID anvan ou voye.</b>",
        'action' => "Telechaje lis lòd",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Gen kèk atik nan lòd ou yo pa aksepte epi yo pa ka delivre. Yo pral ranbouse kantite lajan pou atik sa yo sou kat ou yon ti tan."
    ]

];
