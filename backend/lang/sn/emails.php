<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Iyi meseji inotambira mutengi mutsva kuchitoro.',
        ShopMailTemplateCodes::OrderCheckout => 'Ichi chiziviso chinotumirwa kana mutengi achisimbisa odha.',
        ShopMailTemplateCodes::OrderPayment => 'Ichi chiziviso chinosimbisa kubhadhara kwakabudirira kwakaitwa nemutengi.',
        ShopMailTemplateCodes::OrderUpdate => 'Iyi meseji inotumirwa kugadzirisa mutengi pachimiro cheodha yavo.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Iyi meseji inotumirwa kumutengesi kuti aziviswe nezveodha yakasimbiswa.',
        ShopMailTemplateCodes::PosCheckout => 'Ichi chiziviso chinotumirwa kusimbisa nzvimbo yekutengesa yevatengi.',
        ShopMailTemplateCodes::PosPayment => 'Ichi chiziviso chinosimbisa poindi yekutengesa mubhadharo wakaitwa nemutengi.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Iyi meseji inozivisa mutengesi nezvekutenga kwakaitwa panzvimbo yavo yekutengesa.',
        ShopMailTemplateCodes::ShopContact => 'Ichi chiziviso chinotumirwa kana fomu rekuonana ratumirwa.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ichi chiziviso chinozivisa mushandisi kuti agamuchira chipo kadhi.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Iyi meseji inogamuchira mutengesi mutsva kuchitoro.',
        ShopMailTemplateCodes::ShopVendorInvite => "Iyi meseji inotumirwa kunokoka mutengesi kuti abatane nemusika wako.",
        ShopMailTemplateCodes::ShopVendorOrder => "Iyi meseji inotumirwa kumutengesi kana odha yagamuchirwa mune Yakabhadharwa kana Cash paDelivery (COD) mamiriro.",
        ShopMailTemplateCodes::ShopVendorProducts => "Inotumirwa zuva nezuva kuti igadzirise vatengesi pamamiriro ezvigadzirwa zvavo.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Iyi meseji inotumirwa kunokoka mutengesi kuti abatane nemusika wako.",

        ShopMailTemplateCodes::UserLogin => "Zivisa mushandisi nemashoko ekupinda, kusanganisira IP kero, zuva, uye mudziyo, kuitira kuchengetedza.",
        ShopMailTemplateCodes::LoginCode => "Tumira kodhi yenguva imwe chete password kuti vashandisi vapinde muchitoro.",

        ShopMailTemplateCodes::EmailVerifyLink => "Tumira chinongedzo kuti uone kero yeemail yemushandisi. Iyi email inotumirwa kana mushandisi akanyoresa neSMS uye apinza email yavo. Izvo hazvitumirwe kana mushandisi achinyoresa zvakananga nesocial login kana email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Tumira runyoro rwemaodha akagamuchirwa uye akabhadharwa akawanda kune rimwe zuva."


    ,

    ],


    'global' => [
        'greetings' => 'Mhoro, :name!',
        'end-statement' => 'Support team',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Unoda rubatsiro? Bvunza pa [support@selldone.com](mailto:support@selldone.com) kana shanyira [nzvimbo yedu yekubatsira](https://selldone.com/community).",
        'selldone-team' => 'Iyo Selldone timu',
        'footer-shop' => "Kana iwe uchida rubatsiro nezve chero chinhu ndapota usazeze kutitumira email: :shop_mail",
        'accept' => "Gamuchira",
        'reject' => "Ramba",
        'verify' => "verify",
        'title' => "Title",
        'value' => "Value",
        'description' => "Tsanangudzo",
        'shop' => "Shop",
        'shop-info' => "Store Information",
        'user' => "mushandisi",
        'user-info' => "Mashoko Akaundi",
        'license' => "License",
        'status' => "Status",
        'start' => "Tanga",
        'end' => "End",
        'renewal' => "Renewal",
        'view' => "View",

        'balance' => "Balance",
        'card_number' => "Nhamba yeKadhi",
        'cvv' => "Cvv",
        'expire_date' => "Expire date",

        'Dashboard' => "Dashboard",
        'order' => "order",
        'view_order' => "Ona kurongeka",
        'pay_now' => "Pay now",

        'official_selldone' => "ZVINHU ZVAKAITENGA",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Mari",
        'free-balance' => "Free balance",
        'locked-balance' => "Yakakiyiwa chiyero",
        'bot' => "Bot",
        'requests' => "Zvikumbiro",
        'baskets' => 'Carts',
        'physical' => "Zvenyama",
        'virtual' => "Virtual",
        'file' => "File",
        'service' => "Service",
        'fulfillment' => "Kuzadzikiswa",
        'open' => "Vhura",
        'reserved' => "Reserved",
        'canceled' => "Kanzurwa",
        'payed' => "Yakabhadharwa",
        'cod' => "COD",
        'orders-count' => 'Orders',
        'payments-count' => 'Payments',
        'confirms-count' => 'Inosimbisa',
        'sends-count' => 'Sends',
        'delivers-count' => 'Delivers',
        'count' => 'Count',
        'transactions-count' => 'Transactions count',
        'success-transactions' => 'Kubudirira kutengeserana',
        'total-amount' => 'Mari yese',
        'amount' => 'Mari',
        'wage' => 'Wage',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Rarama',
        'CheckQueue' => 'Tarisa mutsara',
        'OrderConfirm' => 'Order simbisa',
        'PreparingOrder' => 'Kugadzirira kurongeka',
        'SentOrder' => 'Sent order',
        'ToCustomer' => 'Kuendeswa kune mutengi',
        'Pending' => 'Pending',
        'Accepted' => 'Kugamuchirwa',
        'Rejected' => 'Rambwa',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Phone',
        'total' => 'Total',
        'view-detail' => 'Ona zvakadzama',
        'empty' => 'Empty',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Reply',
        'reactions' => 'Reactions',
        'Comments' => 'Comments',
        'last-comment' => 'Mhinduro yekupedzisira',
        'response-to' => 'Mhinduro ku',
        'posts' => 'Zvinyorwa',
        'post' => 'Post',

        'name' => 'Zita',
        'email' => 'Email',
        'type' => 'type',
        'device' => 'Mudziyo',
        'platform' => 'Platform',
        'browser' => 'Browser',
        'time' => 'Nguva',
        'Wallet' => 'Wallet',
        'date' => 'Date',

        'account' => 'Account',
        'transaction' => 'Transaction',
        'fee' => 'Fee',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Category',
        'password' => 'Pasiwedhi',
        'verify-login' => "Verify & Login",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Tenga izvozvi",
        'add-domain' => "Add Domain",
        'views' => 'Views',


        'country' => 'Nyika',
        'address' => 'kero',
        'postal' => 'Kodhi yepositi',
        'building_no' => 'Kuvaka #',
        'building_unit' => 'Chikamu #',
        'message' => 'Mharidzo',


        'customer' => 'Mutengi',
        'cart-items' => 'Zvinhu zvengoro',
        'payment' => 'Payment',
        'receiver' => 'Receiver',
        'virtual-items' => 'Virtual zvinhu',
        'no-payment' => 'Hapana kubhadhara!',

        'enable' => 'Enable',
        'access' => 'Access',
        'bank' => 'Bank info',

        'vendor' => 'Mutengesi',

        'view_content' => "Ona zvizere",
        'files' => 'Files',
        'download' => 'Download',
        'file_name' => 'File Name',
        'file_size' => 'Size',

        'subscription' => 'Kunyoresa',
        'products' => 'Products',
        'vendor_products' => 'Vendor Products',

        'pickup' => 'Nhonga',

        'minutes' => 'Maminitsi',
        'hours' => 'Maawa',

        'refund' => 'Refund',
        'recipient_address' => 'Kero Yemugamuchiri',
        'signature' => 'Siginecha',
        'blockchain' => 'Blockchain',
        'details' => 'Details',


    

        'Shop' => 'Shop',
        'dashboard' => 'dashboard',
        'comments' => 'comments',
        'wallet' => 'chikwama',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Bhizinesi OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Performance Report, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Seasonal Report, Selldone'
        ],
        'Onboarding' => [
            'id' => 'mhoro',
            'name' => 'Bvuma, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Tsigira :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Simbisa, Selldone'
        ],
        'Welcome' => [
            'id' => 'mhoro',
            'name' => 'Nharaunda, Selldone'
        ],
        'NewShop' => [
            'id' => 'vatengesi',
            'name' => 'Bvuma, Selldone'
        ],
        'Approve' => [
            'id' => 'bvumira',
            'name' => 'Bvuma, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Orders Management :name'
        ],

        'Recovery' => [
            'id' => 'kupora',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Yakamirira ⌛',
        'PAYED' => 'Yakabhadharwa ✅',
        'CANCELED' => 'Kanzurwa ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Mukuru uye Mutariri',
            'AUDITING' => 'Auditing maneja',
            'EMPLOYEE' => 'Mushandi',
            'PRODUCT' => 'Zvigadzirwa maneja',
            'CONTENT' => 'Content manager',
            'MARKETING' => 'Marketing manager',
            'VIEWER' => 'Viewer',

        ],
        'subject' => ":inviter yakakukoka iwe se:level| :shop",
        'category' => "Kukokwa kwevashandi",
        'title' => "Wakokwa ku <b>:shop_name</b> se <b>:level</b> .",
        'message' => "Wakagamuchira kokero yekushandira pamwe ne<b>:shop_title</b> timu mubhizinesi. Une sarudzo yekubvuma kana kuramba ichi chinopihwa. Kana ukasarudza kubvuma, ndapota pinda kune iyo Selldone sevhisi kuti usimbise sarudzo yako. Pakusimbiswa, iwe unowana mukana kune chikamu chekuchengetedza chitoro.",

    ],

    'welcome-email' => [
        'subject' => "👋 Kugamuchirwa :name, Ngatitangei neSelldone!",
        'category' => 'CONGRATULATION',
        'title' => "Kugamuchirwa kuSelldone",
        'message' => "Ndatenda nekusarudza Selldone, Wava chikamu cheSelldone nharaunda inobatanidza vatengesi vepasi rese kune vatengi, Bhizinesi remunharaunda kune bhizinesi, Munhu mumwe kune mubatanidzwa! Yese master uye pro maturusi akapihwa ** emahara ** uye ** isina muganho ** yako. Iwe unoedza, tinovhura magonhi, Ingoita Izvo!",

        'index' => "Nhanho :step.",

        'step-domain' => [
            'title' => 'Wedzera Yako Yetsika Domain',
            'message' => "Kuti utange, wedzera yako tsika domain yemahara muShop Dashboard pasi pe Zvirongwa> Domains Settings.",
            'action' => 'Manage My Domains',
        ],
        'step-landing' => [
            'title' => 'Gadzirisa Peji Yako Yemba',
            'message' => "Gadzirisa peji rako repamba nekuenda kuDashboard> Mapeji. Sarudza peji yekumhara kana kugadzira imwe nyowani. Zviri nyore uye intuitive, uye unogona kutanga kushanda pazviri ipapo.",
            'action' => 'Gadzirisa Peji Yangu Yekumhara',
        ],
        'step-payment' => [
            'title' => 'Setup Kubhadhara Nzira',
            'message' => "Tanga kubvuma kubhadhara zvakananga muakaundi yako yebhangi. Kuti ubatanidze vanopa vako vanopa seStripe, PayPal, nezvimwe, enda kuDashboard> Accounting> Gateway.",
            'action' => 'Wedzera Kubhadhara Nzira',
        ],
        'step-products' => [
            'title' => 'Wedzera Zvigadzirwa Zvako',
            'message' => "Wedzera zvigadzirwa uye zvikamu zviri nyore muDashboard > Zvigadzirwa. Zvakangofanana nekutonga mafaera uye maforodha paPC yako - kudhonza-uye-kudonhedza zvakazara wakagadzirira. Iwe unogona zvakare kuwanda kupinza zvigadzirwa uchishandisa Excel. Sample template iripo kuti ikubatsire kutanga.",
            'action' => 'Manage Zvigadzirwa Zvangu',
        ],
        'step-shipping' => [
            'title' => 'Setup Nzira dzekutumira',
            'message' => "Kuchaja vatengi pakutumira, tsanangura nzira dzako dzekutumira muDashboard> Logistic> Shipping. Iwe unogona kuseta akasiyana mitengo uye rutsigiro rwenzvimbo dzakasiyana. Usakanganwa kuseta yako yekuchengetera kwakabva muDashboard> Logistic> Warehouse.",
            'action' => 'Manage Shipping Methods',
        ],
    

        'seller' => [
            'title' => 'Uri mutengesi here?',
            'message' => 'Kuti utange kutengesa, isa dashboard yako muSelldone kuburikidza neiyi link pazasi uye gadzira chitoro chako chekutanga mahara. Izvi zvinotora maminetsi mashoma uye iwe unenge uine yako chitoro uye yepamhepo saiti. Isu tichazokutungamira iwe kune anotevera matanho uye uwane yekubhadhara gedhi.',
            'action' => 'Pinda kune dashboard yangu',
        ],
        'buyer' => [
            'title' => 'Ndiri mutengi',
            'message' => 'Makorokoto. Kana uchinge wave nhengo yeSelldone, iwe unozobvisa zvese zvinonetsa zvekuve nhengo uye huchokwadi muzvitoro zvepamhepo. Kuti ubatsirwe kubva kune chero chitoro uye saiti inoshandisa iyo Selldone chikuva, unogona kupinda nekudzvanya kamwe chete uye ita kuti kutenga kwako kuve nyore, nekukurumidza uye kwakachengeteka.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet> Akaunti> Chaja',
        'title' => "Success Charge",
        'message' => "Akaunti yako <b>:account_number</b> yakachajwa <b>:amount</b> zvakabudirira.",
        'account' => 'Account',
        'charge' => 'Charge',
        'balance' => 'Balance',
        'footer' => "Ita kuti bhizinesi rive nyore, rigoneke, uye riwanikwe kune chero munhu pasi rese."
    ],

    'verify-email' => [
        'subject' => "🙌 Pedzisa kusaina kwako kusvika kuSelldone! Verify link.",
        'category' => "URI ONE nhanho kure",
        'title' => "Simbisa email kero yako",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Kana uchinetseka nekudzvanya bhatani reVerify, kopira uye unamate URL iri pazasi mubrowser yako: :activation_url",
        'next-step' => "Tevere, tichange tichikutumira zvimwe zvinobatsira uye nhanho-ne-nhanho gwara kuti zvive nyore kwauri kuwedzera yako tsika domain, kuseta mabhadharo, wedzera zvigadzirwa, uye uwane yako yekutanga odha.",

    ],
    'verify-email-code' => [
        'subject' => "Kodhi yekusimbisa ye:name",
        'category' => "SECURITY",
        'title' => "Email verification code",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Chitoro Chako Chagadzirira| :name",
        'category' => "URI ONE nhanho kure",
        'title' => "Setup yapera",
        'account_title' => "Akaundi yako",
        'account_msg' => "Simbisa uye pinda kuaccount yako neruzivo urwu.",
        'shop_msg' => "Ruzivo rweakaundi pane Selldone bhizinesi rekushandisa system.",

    ],

    'reset2fa' => [
        'category' => "SECURITY OFFICIAL MESSAGE",
        'title' => "Kumbira kudzima 2-nhanho kupinda",
        'message' => "You are receiving this email because we received a request to reset two-factor authentication for **:name** account with **:email** email.<br><br>We found the following details for your account:",
        'footer' => "Kana usina kukumbira kusetwa patsva, hapana chimwe chiito chinodiwa.",
        'action' => 'Dzima nhanho mbiri kupinda',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Chitoro chako chagadzirira izvozvi!",
        'category' => "AKAZVARWA NEW ONLINE STORE MUNYIKA",
        'title' => "Makorokoto, :name!",
        'message' => "<b> Makorokoto, :name! Bhizinesi rako idzva repamhepo rava live!</b> Tinofara kukugamuchirai kunharaunda yevaSelldoners. Watora danho rekutanga rekubudirira, uye tiripo kuti tikubatsire nhanho dzese dzenzira.<br>Zvino chitoro chako chagadzirwa, ngative nechokwadi chekuti wagadzirira kugamuchira mari kubva kune vatengi vako uye wotanga kukura empire yako. Kana muchida rubatsiro, tinenge tichingotumirwa meseji—chikwata chedu chetsigiro chinogara chiripo nokuda kwenyu.<br><br><b>Dzimwe Matanho Anokosha:</b> Kuti utange, iva nechokwadi chekuti mese wagadzirira kugamuchira mubhadharo uye kushanda zvakanaka. Tinokutungamirira padanho rega rega kuti chitoro chako chishande zvisina mutsetse.",
        'pdf-book' => "Usapotsa bhuku reruoko rakabatanidzwa: Ita Bhizinesi Rako SeMutambo",

        'account' => [
            'title' => 'Nhanho 1: Gadzira Yako Selldone Wallet',
            'message' => "Kutanga, gadzira account muSelldone wallet yako. Apa ndipo paachabvisirwa mari yako, uye ndimozve pauchakwira kuti uchengetedze chitoro chako chichifamba zvakanaka. Kana chiyero chako chikaramba chisina kunaka, usanetseka! Chitoro chako chicharamba chichishanda pasina kukanganisa.",
            'action' => 'Login kuchikwama',
        ],

        'shop-account' => [
            'title' => 'Nhanho yechipiri: batanidza iyo account kuchitoro',
            'message' => "Tevere, batanidza yako wallet account kuchitoro chako. Musoro ku<b>Store> Accounting> Invoice</b>, uye batanidza chikwama chako. Izvi zvinova nechokwadi chekuti mabhadharo ese evatengi anoiswa zvakananga muakaundi yako yebhangi-Selldone haibvise chero mari kubva pamari yaunowana.",
            'action' => 'Chengetedza Invoice Panel',
        ],

        'gateway' => [
            'title' => 'Nhanho 3: Batanidza Online Payment Gateway',
            'message' => "Zvino, ngatimisikidze yako online yekubhadhara gedhi. Enda ku<b>Store> Accounting> Port</b> wobva wadzvanya pa<b>Add New Port</b>. Sarudza mari yako, uye uchaona runyoro rwemagedhi ekubhadhara aripo. Kubatanidza gedhi kunokurumidza uye kuri nyore, asi kana iwe uchida chero rubatsiro, sununguka kutarisa Selldone madhairekitori kana kutisvika kwatiri.",
            'action' => 'Wedzera portal kuchitoro',
        ],

        'domain' => [
            'title' => 'Nhanho yekupedzisira: kubatanidza nzvimbo yakatsaurirwa',
            'message' => "Iwe unozogona kuve nechitoro chako pane akawanda madomasi sezvaunoda. Kuti ubatanidze nzvimbo yakatsaurirwa kuchitoro, unofanirwa kunge uine rezinesi rekutanga. Nekusuma shamwari yega yega kuSelldone, iwe unogashira yemwedzi mumwe yekutanga rezinesi rezinesi kadhi. Chikamu chemari yeshamwari dzako chichaiswawo kumaakaundi evatengi vako.",
            'action' => 'Kusuma uye kugamuchira makadhi ezvipo asina muganho',
        ],
    ],


    'basket-list' => [
        'item' => "chinhu",
        'count' => "Count",
        'price' => "mutengo",
        'discount-code' => "Discount Code",
        'customer-club' => 'Mutengi Club',
        'shipping' => "Shipping",
        'total' => "Total",
        'offer' => "Offer",
        'coupon' => "Coupon",
        'lottery' => "Award",
        'tax' => "Mutero",
        'tax_included' => "Inosanganisirwa mumutengo",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Nzira',
        'amount' => 'Mari',
        'giftcard' => 'Gift card',
        'payment' => 'Payment',
    ],


    'shop-subscription-email' => [
        'category' => "Subscription update",
        'title' => "Rezinesi rechitoro: :shop_title",
        'title-reserved' => "Reserve rezinesi: :shop_title",
        'title-active' => "Rezinesi rinoshanda: :shop_title",
        'title-finished' => "Rezinesi rapera: :shop_title",
        'title-cancel' => "Kanzura rezinesi: :shop_title",
        'message' => "Chirongwa chako cherezinesi rechitoro chakagadziridzwa,",
        'RESERVED' => "⚡ Chirongwa chako chekunyorera chakachengetwa **.",
        'ACTIVE' => "🟢 Chirongwa chako chekunyorera chave ** activated **.",
        'FINISHED' => "🚧 Chirongwa chako chekunyorera chapera ** chapera **.",
        'CANCEL' => "⛔ Chirongwa chako chekunyorera chave ** chakadzimwa **.",
    ],

    'support' => [
        'subject' => "Support Center|:name akapindura",
        'category' => "Support centre",
        'title' => "Wakagamuchira mhinduro",
        'action' => "Vhura shop admin",
    ],

    'shop-customer-join' => [
        'subject' => "Join :shop_title",
        'category' => "Kupemberera kwevatengi kutsva",
        'title' => "Isu tinofara nekuve nhengo yako",
        'action' => "Shanyira izvozvi",
    ],

    'shop-vendor-join' => [
        'subject' => "Vendor Onboarding | :shop_title",
        'category' => "Mhemberero yemutengesi mutsva",
        'title' => "Isu tinofara nekuve nhengo yako",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Wedzera kadhi idzva",
        'title' => "Makorokoto, wagamuchira chipo kadhi",
        'action' => "Tenga izvozvi",
        'message' => "Wagamuchira kadhi rechipo muhuwandu hwe :balance :currency. Iwe uchakwanisa kutenga kubva muchitoro chedu neichi chipo kadhi.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Support centre | :shop",
        'category' => "rutsigiro",
        'title' => "Wakagamuchira mhinduro",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Order Checkout | :order_id",
        'title' => "order",
        'message' => "Makaisa order pachitoro chedu. Takagamuchira odha yako uye tichakutumira imwe email kana kubhadhara kwasimbiswa."
    ,

        'payments' => 'Payments',
    ],

    'order-payment' => [
        'subject' => "🛍 Kusimbisa Kwekubhadhara | :order_id",
        'title' => "Payment order",
        'message' => "Kubhadhara kwako kwapera,<br> Tawana order yenyu. Tichakudonhedzera imwe email kana odha yako yatumirwa.",
    

        'payments' => 'Payments',
    ],

    'order-update' => [
        'subject' => "🛍️ Order Status Update|Order :order_id",
        'title' => "Order Status Update",
        'message' => "Odha yako yakagadziridzwa. Unogona kutarisa mamiriro azvino eodha iyi muakaundi yako.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Odha yako iri mumutsara wekugadzirisa. Tichakuzivisai kana ichinge ichigadzirwa.",
                'OrderConfirm' => "Odha yako yakasimbiswa uye gadziriro yatanga.",
                'PreparingOrder' => "Odha yako iri kugadzirwa uye ichatumirwa munguva pfupi iri kutevera.",
                'SentOrder' => "Odha yako yatumirwa. Iwe uchaigamuchira munguva pfupi.",
                'ToCustomer' => "Odha yako yatumirwa. Tinovimba unonakidzwa nazvo!",

                'PreparingOrder-PICKUP' => "Odha yako iri kugadzirwa. Iwe uchagamuchira chiziviso kana yagadzirira kutorwa.",
                'SentOrder-PICKUP' => "Odha yako yagadzirira kutorwa. Ndapota huya kuchitoro kuzotora.",
                'ToCustomer-PICKUP' => "Odha yako yatorwa. Tinovimba unonakidzwa nazvo!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Odha yako iri mumutsara wekugadzirisa. Tichakuzivisa kana yagadzirwa.",
                'OrderConfirm' => "Odha yako yakasimbiswa uye gadziriro iri kuenderera mberi.",
                'PreparingOrder' => "Odha yako iri kugadzirwa uye ichatumirwa kwauri munguva pfupi.",
                'ToCustomer' => "Virtual odha yako yaunzwa kuaccount yako. Ndatenda!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Chikumbiro chako chesevhisi chiri pamutsetse. Tichakuzivisai kana tatanga.",
                'OrderConfirm' => "Sevhisi yako yakasimbiswa uye tiri kugadzirira kutanga.",
                'PreparingOrder' => "Tiri kugadzirira sevhisi yako, uye tichakuzivisa kana yapera.",
                'ToCustomer' => "Basa renyu rakapera. Tinokutendai nekutisarudza!"
            ],
            'FILE' => [
                'PreparingOrder' => "Faili rako riri kugadzirwa uye richawanikwa munguva pfupi iri kutevera.",
                'ToCustomer' => "Faili rako ragadzirwa uye raunzwa. Iwe unogona ikozvino kudhaunirodha."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Odha yako yekunyorera iri pamutsetse. Tichakuzivisa kana kugadzirisa kwatanga.",
                'OrderConfirm' => "Kunyoresa kwako kwakasimbiswa uye kuri kugadzirwa.",
                'PreparingOrder' => "Tiri kugadzirira kubhadhara kwako uye ichatanga munguva pfupi.",
                'SentOrder' => "Kunyoresa kwako kwave kushandiswa. Iwe uchagamuchira zvigadziriso zvinoenderera.",
                'ToCustomer' => "Sevhisi yako yekunyorera yaitwa zvinobudirira."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Makorokoto :name|Vocha Itsva: :title',
        'category' => "MAKOROKOTO, VOUCHE ITSVA",
        'message' => "Hei :name,<br><br> Wagamuchira vocha itsva sechipo kubva kwatiri! Unogona kuwana mamwe mavhocha nekuunza Selldone kushamwari dzako uye wese waunoziva. Voucha iyi yakakosha **:price :currency**.<br><br>Watora danho rekutanga, uye tauya kuti tikubatsire kuvhura zvinhu zvitsva nevhoti yako! Ndokumbira upinde ne**:email** wotsvaga vocha yako muShop **Dashboard** > **Settings** > **Rezinesi**.<br><br> Makorokoto!",
        'action' => "Dashboard yangu",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Makorokoto, Anodiwa :name|Wakagamuchira Chipo Chinokosha!',
        'category' => "Chiziviso chekugamuchira chipo",
        'title' => "Zvipo zvako",
        'message' => "Mhoro :name, tinofara kukuzivisa iwe kuti wagamuchira chipo chakakosha kubva kuSelldone! 🎉 Unogona kuwana zvimwe zvipo nekugara uchishanda, uchikura chitoro chako, uye nekuvandudza hunyanzvi hwako paSelldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade rezinesi rechitoro chako uye uvhure zvishandiso zvine simba zvekusimudzira bhizinesi rako repamhepo!",
        'action' => "Zvipo",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Order Itsva Yatambirwa | :order_id",
        'title' => "New Order",
        'message' => "Wagamuchira odha itsva. Ndokumbira uende kune peji rekugadzirisa maodha muchitoro chako.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Ruzivo Rwako Rwakazadzwa',
        'output-form-title' => 'Ruzivo rwechinhu chakatengwa',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Chirevo chevhiki nevhiki :time',
        'title' => 'Weekly store performance report',
        'message' => "This is your store's weekly report from <b>:start</b> to <b>:end</b>. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Yako :amount yekuchengeta report mumwedzi mitatu yapfuura| :shop_title',
        'title' => 'Chirevo chemwaka nezve bhizinesi rako chiitiko, mibairo uye mari yekuchengetedza',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Akaunzi akabatana',
        'sub-title' => 'Ndeipi mamiriro ekupedzisira ewallet account akabatana nechitoro changu?',
        'view-wallet' => 'Ona chikwama',
        'tip-title' => 'Mazano akakosha',
        'tip' => "Munhanho inotevera, gadzira account yemahara muwallet yako yeSelldone woibatanidza nechitoro ichi. Kunyangwe kana yako Selldone account account yakashata, vatengi vako vanogona kutenga uye kubhadhara kuchitoro chako pasina matambudziko. Yako data uye sevhisi hazvizokanganiswe kana kurambidzwa kweinenge 1 mwedzi.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Batanidza kuakaunti'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Mapurogiramu akaiswa',
        'sub-title' => 'Rondedzero yemaapps awakaisa muchitoro chako svondo rino.',
        'tip' => "Iwe unoda here kutsvaga mamwe maapplication echitoro chako?",
        'view-app-store' => 'Shanyira Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Your Store Bots',
        'sub-title' => 'Active sales bots muchitoro changu.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone yakakupa iwe otomatiki yekutengesa bots. Zvese iwe zvunofanirwa kuita kuenda kuAdd-ons> Bots pani uye mutsa chitoro chako bots. Ziva kuti sevhisi yakakodzera inofanirwa kuwanikwa munyika yako.",
        'view-bots' => 'Manage bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kukurukurirana neVatengi',
        'sub-title' => 'Vangani vandakasangana navo nevatengi vangu svondo rino?',
        'faqs' => 'Mibvunzo Inowanzo bvunzwa',
        'tickets' => 'Mutengi Matikiti',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Users Status',
        'sub-title' => 'Chiitiko kubva ku:start kusvika ku:end',
        'users' => [
            'title' => 'Vatengi',
            'subtitle' => 'Signup Users',
        ],
        'views' => [
            'title' => 'Visits',
            'subtitle' => 'Kangani pawakashanyira chitoro',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vakadzorerwa Vashandisi',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Ngoro dzekutengera',
            'subtitle' => 'Taura nhamba yengoro itsva dzekutenga',
        ],
        'products' => [
            'title' => 'Products Overview',
            'subtitle' => 'Mamiriro ezvigadzirwa muchitoro nemhando',
            'value_name' => 'Products'
        ],
        'products_count' => 'Zvigadzirwa mhando',
        'views_count' => 'View count',
        'sell_count' => 'Sell count',
        'send_count' => 'Nhamba yekutumira',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel yevatengesi vakuru veDrop Shipping Selldone.',
        'total_fulfillments' => 'Total Orders Yakatambirwa',
        'ds_count' => 'Received Orders',
        'statistics_title' => 'Mhan\'ara maodha akagamuchirwa',
        'ds_cancels' => 'Kanzura nemutengesi we interface',
        'ds_rejects' => 'Cancel by You',
        'tip' => "Iwe uri mutengesi mukuru ane imba yekuchengetera zvinhu, fekitori, kana chigadzirwa chinogovera? Iwe unogona kuwedzera kusvika kwako nekupa zvigadzirwa zvako kune vamwe vatengesi kuburikidza neSelldone's Drop Shipping service. Titumire email pasupport@selldone.com kuti udzidze zvakawanda.",
        'view-drop-shipping-panel' => 'Pinda kune wholesale panel',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Exchange Rates',
        'sub-title' => 'Rondedzero yemitengo ichangoburwa yekushandurwa kwemari muchitoro chako.',
        'from' => 'Source Currency',
        'to' => 'Mari yekuenda',
        'rate' => 'Chiyero chekutendeuka',
        'view-exchange-panel' => 'Manage Exchange Rates',
    

        'vew-exchange-panel' => 'exchange rate management panel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Nyanzvi zvibvumirano',
        'sub-title' => 'Ndedzipi nyanzvi dzinoshanda pachitoro changu?',
        'cost' => 'Mari yechibvumirano',
        'duration' => 'Duration',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Date Cancel',
        'end_at' => 'Delivery date',
        'tip' => 'Hire nyanzvi dzepamusoro kubva kuSelldone kuti ubatsire kukura bhizinesi rako.',
        'view-experts' => 'Dzvanya kuti utange.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Taura anoshanda ekubhadhara magedhi pachitoro :shop.',
        'tip-title' => 'Mazano akakosha',
        'tip' => "Enda kune peji rekutonga peji muchitoro chako uye wedzera kanenge chiteshi chimwe chete mumaminetsi mashoma. Vatengi vako vanofarira kubhadhara nekukurumidza uye zvakachengeteka kuburikidza neinternet portals.",
        'view-shop-gateways' => 'Pinda kuchitoro changu portal management.',
        'view-gateways' => 'Ona mamwe magedhi',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Orders',
        'sub-title' => 'Rondedzero yeodha dzandakagamuchira svondo rino.',
        'total_baskets' => 'Total Orders',
        'total_posBaskets' => 'Total Cash Orders',
        'pos-title' => 'POS Store Bhokisi',
        'chart-label' => 'Maodha akapedzwa (maodha aya haana kubhadharwa!)',
        'tip-title' => 'Iwe unofanirwa kuedza zvakanyanya ...',
        'tip' => "Hapana kubudirira kuri nyore.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Processing centre',
        'sub-title' => 'Takagadzira odha yakawanda sei muchitoro svondo rino?',
        'tip-title' => 'Wanga usina kutengesa!',
        'tip' => "Sezvineiwo hamuna kutengesa svondo rino. Iwe unofanirwa kuwana zvakawanda kuchitoro chako. Iwe unogona kuwedzera zvimwe zvigadzirwa, sarudza mifananidzo iri nani kana kunyora zvirinani tsananguro yezvigadzirwa zvako. Funga nezvebasa renguva yakazara rebhizinesi rako. Kana ukazviita nemazvo uye ukasagumbuka, uchabudirira.",
        'view-process-center' => 'View process center',
        'return' => [
            'title' => 'Yakadzorerwa Order',
            'subtitle' => 'Mhan\'ara zvakadzoserwa maodha.',
            'tip-title' => 'Waizviziva here kuti...',
            'tip' => "Iwe unogona kugadzira akawanda ezvitoro marejista emari sezvaunoda kuburikidza neSelldone POS! Muchokwadi, iwe unogona kushandura piritsi rako, nhare mbozha kana laptop kuita inbox yako. Kana izvo zvichikufadza iwe, Selldone POS Ndicho chinhu chaunofanira kutanga kushandisa ikozvino. Zvinongotora kudzvanya kuri nyore kuvhura, isu tine zvese zvakagadzirirwa server yako pamberi.",
            'view-pos' => 'Pinda kune Yangu Online Store Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Zvirongwa',
        'sub-title' => 'Kangani kandakashanyira chitoro changu?',
        'countries-title' => 'Inyika dzipi dzakashanyirwa zvakanyanya?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Iwe unoda kuita mari pasina kushandisa buck imwe?',
        'message' => "Mhoro :name, yave nguva yekutanga kuwana neSelldone! Enda kuDashboard> Zvimwe> Kuita mari> Tora Yako Referral Link. Govera chinongedzo neshamwari dzako, uye uwane makadhi ezvipo uye chikamu chemubhadharo wavo. Chikamu chakanakisisa? Mese iwe neshamwari yako munowana kadhi rechipo!",
        'action' => 'Ona link yangu yekusuma',
        'mail-clip' => "<b style='color: #C2185B'>Zvakakosha:</b> Kana iwe ukashandisa maemail masevhisi akadai seGmail anodzika hurefu hweemail, tsvaga inotevera sarudzo pakupera kweemail kuratidza yakazara rondedzero uye tinya pairi:",

        'no-coin-reward' => "<b style='color: #C2185B'>Tine urombo: Chiitiko</b> chako hachina kusangana nezvinodiwa kuti uwane mahara SEL Coins mubairo. Edza zvakanyanya uye utengese zvakawanda pachitoro chako chemwaka unotevera.",
        'yes-coin-reward' => "<b style='color: #4CAF50'> Makorokoto:</b> Basa guru! Zvichienderana nekuita kwako kwakanaka, takatenda :amount SEL Coins kuaccount yako semubairo.",

        'need-buy-license' => "<b>Kukwidza Bhizinesi Rako:</b> Zvinoita sekunge hausati wanyoresa chero chirongwa chekunyorera chewebhusaiti yako! Simudzira izvozvi kuti uvhure mamwe maficha e:amount chete pamwedzi kana yakabhadharwa gore negore.",
        'not-afford-message' => "Kana iwe usingakwanise kana uine dambudziko nekubhadhara, inzwa wakasununguka kutiudza kuburikidza support@selldone.com.",
        'add-domain' => "<b>Wadii kuva nenzvimbo yekuda bhizinesi rako?</b><br> Wedzera domain kune yako webhusaiti izvozvi; ndezvemahara!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone is a<del> chigadzirwa</del> <span style = 'color: forestgreen'>community</span> .<br> Iva nyanzvi Selldoner!",
        'message' => "Tevedza mapeji epamutemo eSelldone pa Twitter, LinkedIn uye masocial network. Titumire chero mhinduro, zvikumbiro kana kutsoropodza kana kutora chikamu munhaurirano nezve Selldone. Isu tiri zvakare chikamu chenharaunda yeSelldone iyo <b>Unoita</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'MaOdha Matsva Avocado Atambirwa|:shop_title :time',
        'title' => "Chirevo chekushanda kwemaawa makumi maviri nemana apfuura",
        'message' => "Vatengi vako vakamirira kuti maodha ako aongororwe uye atengwe. Pindura kune vatengi vako zvikumbiro nekukurumidza sezvinobvira kuti uwane zvimwe zvekutengesa.",
        'card_title' => "Mirairo mumutsara",
        'card_subtitle' => "Kubva :date",

        'card_payed' => "Yakabhadharwa mirairo"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Pindura kune chako chinyorwa mu:community_title',
        'title' => ":name uye :count vamwe vapinda muhurukuro pane zvaunotumira!",
        'message' => "Mhoro :name, zvinyorwa zvako zviri kuwana kutariswa! Iwe wakagamuchira mhinduro munharaunda yedu. Pinda muakaundi yako kuti ubatanidze hurukuro uye uone zviri kutaurwa nemunhu wese.",
        'title-simple' => ":name yataura pane yako post!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Pindura kuchinyorwa chako :topic_title',
        'title' => ":name, uye :count vamwe vakapindura pane yako musoro.",
        'message' => "Mhoro :name, nyaya yako iri kutariswa! Wakagamuchira mhinduro munharaunda yedu. Pinda muakaundi yako kuti ubatanidze hurukuro uye uone zviri kutaurwa nemunhu wese.",
        'title-simple' => ":name yakapindura pane yako nyaya.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 New Login :name',
        'category' => 'Chengetedzo zviziviso',
        'title' => "Login kuAccount",
        'message' => "Wadiwa :name, kupinda kuSelldone account yako kwaonekwa.",   // Login in selldone (seller)
        'message-shop' => "Wadiwa :name, kupinda ku:shop_title kwaonekwa.",  // Login in shop (buyer)

        'footer' => "Kana usina kupinda, ndapota shandura password yako.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Withdrawal",
        'deposit' => "Deposit",

        'withdraw_subject' => "Bvisa kubva kuaccount :account",
        'deposit_subject' => "Dhipoziti kuaccount :account",

        'message' => "Kufambiswa kwemari kwaitwa nezvirevo zvinotevera.",

        'type' => "Transaction type",

        'from' => "Source account",
        'to' => "Destination account",

        'desc' => "Tsanangudzo yekutengeserana",
        'action' => "Ona kutengeserana",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Zvakakosha! Kutyorwa kwemitemo | :shop",
        'category' => "Critical information",
        'title' => "Chitoro chako charangwa",
        'action' => "Vhura shopu dashboard",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter yakakukoka iwe kuti ubatane neSelldone",
        'title' => ":name yakakutumira :amount kuti ikubatsire kutangisa chitoro chako chitsva chepamhepo uye kuita mari nayo!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Bvuma kukokwa",
        'owner' => "Muridzi we",
        'join-date' => "Akabatana neSelldone pa",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Recovery link | :shop",
        'category' => "Chengetedzo yechitoro",
        'title' => "Chengetedza chinongedzo chekudzoreredza che <b>:shop_name</b> .",
        'message' => "Iyi email yakatumirwa kwauri nekuti wakumbira kudzoreredza chitoro chako. Kudzvanya pane iyi link iripazasi kuchadzoreredza shopu yako uye data rese rayo.",
        'action' => "Simbisa Shop Recovery",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Imarii yakachengetwa naSelldone kubhizinesi rako?',
        'sub-title' => 'Kubva panguva :start kusvika :end',
        'infrastructure' => [
            'title' => 'Infrastructure',
            'subtitle' => 'Sevha, CDN, Kuchengeta, uye mamwe makore masevhisi',
        ],
        'experts' => [
            'title' => 'Nyanzvi & Vashandi',
            'subtitle' => 'Vagadziri, kuchengetedza, uye rutsigiro',
        ],
        'total_save' => 'Mari yese yakachengetwa'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Kuita kwako',
        'sub-title' => 'Bhizinesi rekutarisa kubva ku:start kusvika ku:end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Vakadzorerwa Vashandisi',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Ngoro dzekutengera',
            'subtitle' => 'Taura nhamba yengoro itsva dzekutenga',

        ],
        'products' => [
            'title' => 'Products Overview',
            'subtitle' => 'Mamiriro ezvigadzirwa muchitoro nemhando',
            'value_name' => 'Products'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Maonero ese ewebhusaiti',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Wagamuchira odha itsva. Ndokumbira uende kune peji rekugadzirisa odha mune yako mutengesi pane.",
        'subject' => "🛍 Order Itsva Yatambirwa | :order_id",
        'your_revenue' => "Mari Yako",
    ],
    'vendor-invite' => [
        'title' => 'Mutengesi Kukoka',
        'message' => "Wagamuchira kukokwa kuti uve mutengesi we:shop_name. Unogona kuzvigamuchira kana kuzviramba nekudzvanya pamabhatani anotevera.",
        'subject' => ":shop_name | Wakagamuchira kukokwa kuti uve mutengesi wedu",
        'accept' => "Gamuchira & Iva Mutengesi",
        'reject' => "Ramba",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Kukokwa Kujoina Chikwata Chedu',
        'message' => "Iwe wakokwa kuti ubatane ne:vendor_name pa:shop_name. Unogona kugamuchira kana kuramba kukoka uku uchishandisa mabhatani ari pasi apa.",
        'subject' => "Kukokwa Kujoina :vendor_name|Iva Nhengo yeChikwata",
        'accept' => "Gamuchira & Join Chikwata",
        'reject' => "Ramba",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Yako Login Code ye:shop",
        'header-message' => "Tiri kukutumira email iyi nekuti wakumbira kodhi yekupinda yechitoro. Ndokumbira utsvage password yako yeNguva-Imwe (OTP) pazasi:",
        'footer-message' => "Kodhi iyi ichashanda kwemaminetsi gumi. Kana usina kukumbira iyi kodhi yekupinda, ndapota siyanei neiyi email."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Simbisa email yako | :shop",
        'title' => 'Email Verification',
        'header-message' => "Mhoro :name,<br> Ndokumbira usimbise kuti **:email** ndiyo email kero yako nekudzvanya bhatani riri pazasi kana kushandisa chinongedzo chiri pazasi mukati memaawa makumi mana nemasere.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Product Updates| :shop",
        'title' => "Kugadziridza paChigadzirwa Mamiriro - Maawa makumi maviri nemana apfuura",
        'message' => "Ndinovimba kuti meseji iyi yakuwana zvakanaka. Iyi ipfupi yekuvandudza kukuzivisa iwe nezve mamiriro ezvigadzirwa zvako papuratifomu yedu mumaawa makumi maviri nemana apfuura.\nMunguva iyi, pane shanduko mune zvimwe zvigadzirwa. Shanduko idzi dzinogona kunge dzakakonzerwa nekutenga, kugadziridzwa kwemasheya, kana zvimwe zviitiko zvine hukama.\nKuti uwane rumwe ruzivo nezve chigadzirwa chega chega, ndapota pinda muakaundi yako uye tarisa chikamu che'Chigadzirwa Chimiro'.",
        'action' => "Vhura Vendor Panel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "MaOdha Akawanda Agamuchirwa| :shop | :date",
        'title' => "Bulk Orders Notification",
        'message' => "Wagamuchira mahodha akawanda. Ndokumbira ushanyire peji rekugadzirisa maodha mupaneru yako kuti uwane rumwe ruzivo. Iwe unogona zvakare kudhawunirodha runyorwa rweodha kuburikidza neyakachengetedzeka link yakapihwa, inoshanda kwemazuva manomwe.<br><br>\n        <b>IMPORTANT:</b> Link iyi inoshanda kwemazuva manomwe.<br>\n        Iyi link ine simba, saka pese paunodzvanya, unogashira maodha akagadziridzwa ezuva iri chairo. <b>Inoreva kuti kana mamiriro ekubhadhara odha achinja kuita kurambwa, hauchaoni odha iyoyo muCSV yakadhawunirodhwa, kana kuti odha ikabhadharwa, inobuda muchirongwa.</b><br><br>\n        <ul>\n            <li>I CSV ine maodha akabhadharwa ane zuva rakachengetwa mu:date.</li>\n            <li>Date rakachengetwa ndiro zuva iro mushandisi anodzvanya kubuda pane peji reodha.</li>\n        </ul>\n        <b>Kudzivirira zvirevo zvakapetwa, gara uchitarisa Order ID usati watumira.</b>",
        'action' => "Dhaunirodha Order List",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Zvimwe zvinhu muodha yako hazvina kugamuchirwa uye hazvigone kuunzwa. Mari yezvinhu izvi ichadzorerwa pakadhi rako munguva pfupi iri kutevera."
    ]

];
