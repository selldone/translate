<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ubu butumwa bwakira umuguzi mushya kumaduka.',
        ShopMailTemplateCodes::OrderCheckout => 'Iri menyesha ryoherejwe iyo umuguzi yemeje itegeko.',
        ShopMailTemplateCodes::OrderPayment => 'Iri menyesha ryemeza ko wishyuye neza wakozwe n\'umukiriya.',
        ShopMailTemplateCodes::OrderUpdate => 'Ubu butumwa bwoherejwe kuvugurura umuguzi kumiterere yabyo batumije.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ubu butumwa bwoherejwe kubagurisha kugirango babamenyeshe ibyemezo byemejwe.',
        ShopMailTemplateCodes::PosCheckout => 'Iri menyesha ryoherejwe kwemeza ingingo yo kugurisha kubaguzi.',
        ShopMailTemplateCodes::PosPayment => 'Iri menyesha ryemeza ingingo yo kugurisha yakozwe numuguzi.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ubu butumwa buramenyesha ugurisha kugura byakozwe aho bagurishije.',
        ShopMailTemplateCodes::ShopContact => 'Iri menyesha ryoherejwe iyo urupapuro rwabigenewe rwatanzwe.',
        ShopMailTemplateCodes::ShopGiftCard => 'Iri menyesha rimenyesha umukoresha ko bakiriye ikarita yimpano.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ubu butumwa bwakira umucuruzi mushya kumaduka.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ubu butumwa bwoherejwe gutumira umucuruzi kwinjira mumasoko yawe.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ubu butumwa bwoherejwe ku mucuruzi iyo itegeko ryakiriwe haba muhembwa cyangwa amafaranga ku itangwa (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Yoherejwe buri munsi kugirango ivugurure abacuruzi kumiterere yibicuruzwa byabo.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ubu butumwa bwoherejwe gutumira umucuruzi kwinjira mumasoko yawe.",

        ShopMailTemplateCodes::UserLogin => "Menyesha umukoresha ufite ibisobanuro birambuye byinjira, harimo aderesi ya IP, itariki, nigikoresho, kubwimpamvu z'umutekano.",
        ShopMailTemplateCodes::LoginCode => "Kohereza ijambo ryibanga rimwe kubakoresha kugirango binjire mububiko.",

        ShopMailTemplateCodes::EmailVerifyLink => "Ohereza umurongo kugirango umenye aderesi imeri ukoresha. Iyi imeri yoherejwe mugihe umukoresha yiyandikishije na SMS akinjira imeri yabo. Ntabwo yoherejwe mugihe umukoresha yiyandikishije muburyo bwinjira cyangwa imeri.",

        ShopMailTemplateCodes::EmailBulkOrder => "Ohereza urutonde rwakiriwe kandi rwishyuwe kubwinshi kumunsi runaka."


    ,

    ],


    'global' => [
        'greetings' => 'Muraho, :name!',
        'end-statement' => 'Itsinda ryunganira',

        'receiver_name' => 'Muraho :user_name',
        'footer-help' => "Ukeneye ubufasha? Baza kuri [support@selldone.com] (mailto:support@selldone.com) cyangwa usure [ikigo cyadufasha] (https://selldone.com/community).",
        'selldone-team' => 'Ikipe ya Selldone',
        'footer-shop' => "Niba ukeneye ubufasha kubintu byose, nyamuneka ntutindiganye kutwandikira: :shop_mail",
        'accept' => "Emera",
        'reject' => "Wange",
        'verify' => "kugenzura",
        'title' => "Umutwe",
        'value' => "Agaciro",
        'description' => "Ibisobanuro",
        'shop' => "Amaduka",
        'shop-info' => "Ububiko Amakuru",
        'user' => "umukoresha",
        'user-info' => "Amakuru ya Konti",
        'license' => "Uruhushya",
        'status' => "Imiterere",
        'start' => "Tangira",
        'end' => "Iherezo",
        'renewal' => "Kuvugurura",
        'view' => "Reba",

        'balance' => "Kuringaniza",
        'card_number' => "Inomero y'Ikarita",
        'cvv' => "Cvv",
        'expire_date' => "Itariki izarangiriraho",

        'Dashboard' => "Ikibaho",
        'order' => "gahunda",
        'view_order' => "Reba gahunda",
        'pay_now' => "Pay now",

        'official_selldone' => "UMUGURISHA W'UMURYANGO",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Ifaranga",
        'free-balance' => "Impirimbanyi yubusa",
        'locked-balance' => "Impirimbanyi zifunze",
        'bot' => "Bot",
        'requests' => "Gusaba",
        'baskets' => 'Amagare',
        'physical' => "Umubiri",
        'virtual' => "Virtual",
        'file' => "Idosiye",
        'service' => "Serivisi",
        'fulfillment' => "Kurangiza",
        'open' => "Fungura",
        'reserved' => "Yabitswe",
        'canceled' => "Yahagaritswe",
        'payed' => "Yishyuwe",
        'cod' => "COD",
        'orders-count' => 'Amabwiriza',
        'payments-count' => 'Kwishura',
        'confirms-count' => 'Yemeza',
        'sends-count' => 'Kohereza',
        'delivers-count' => 'Gutanga',
        'count' => 'Kubara',
        'transactions-count' => 'Ibicuruzwa bibarwa',
        'success-transactions' => 'Intsinzi',
        'total-amount' => 'Umubare wose',
        'amount' => 'Umubare',
        'wage' => 'Umushahara',
        'debug' => 'Gukemura',
        'pos' => 'POS',
        'live' => 'Baho',
        'CheckQueue' => 'Reba umurongo',
        'OrderConfirm' => 'Tegeka kwemeza',
        'PreparingOrder' => 'Gutegura gahunda',
        'SentOrder' => 'Kohereza itegeko',
        'ToCustomer' => 'Yashyikirijwe abakiriya',
        'Pending' => 'Bitegereje',
        'Accepted' => 'Byemewe',
        'Rejected' => 'Yanze',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Terefone',
        'total' => 'Igiteranyo',
        'view-detail' => 'Reba ibisobanuro birambuye',
        'empty' => 'Ubusa',
        'dropshipping' => 'Kureka',
        'reply' => 'Subiza',
        'reactions' => 'Ibisubizo',
        'Comments' => 'Ibitekerezo',
        'last-comment' => 'Igitekerezo cya nyuma',
        'response-to' => 'Igisubizo kuri',
        'posts' => 'Inyandiko',
        'post' => 'Kohereza',

        'name' => 'Izina',
        'email' => 'Imeri',
        'type' => 'Ubwoko',
        'device' => 'Igikoresho',
        'platform' => 'Ihuriro',
        'browser' => 'Mucukumbuzi',
        'time' => 'Igihe',
        'Wallet' => 'Umufuka',
        'date' => 'Itariki',

        'account' => 'Konti',
        'transaction' => 'Gucuruza',
        'fee' => 'Amafaranga',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Icyiciro',
        'password' => 'Ijambobanga',
        'verify-login' => "Kugenzura & Kwinjira",
        'url' => 'URL',
        'avocado' => 'Avoka',
        'hyper' => 'Hyper',
        'buy-now' => "Gura nonaha",
        'add-domain' => "Add Domain",
        'views' => 'Reba',


        'country' => 'Igihugu',
        'address' => 'aderesi',
        'postal' => 'Kode y\'iposita',
        'building_no' => 'Inyubako #',
        'building_unit' => 'Igice #',
        'message' => 'Ubutumwa',


        'customer' => 'Umukiriya',
        'cart-items' => 'Ibikoresho by\'ikarita',
        'payment' => 'Kwishura',
        'receiver' => 'Kwakira',
        'virtual-items' => 'Ibintu bifatika',
        'no-payment' => 'Nta bwishyu!',

        'enable' => 'Gushoboza',
        'access' => 'Kwinjira',
        'bank' => 'Amakuru ya banki',

        'vendor' => 'Umucuruzi',

        'view_content' => "Reba ibirimo byose",
        'files' => 'Amadosiye',
        'download' => 'Kuramo',
        'file_name' => 'Izina rya dosiye',
        'file_size' => 'Ingano',

        'subscription' => 'Kwiyandikisha',
        'products' => 'Ibicuruzwa',
        'vendor_products' => 'Ibicuruzwa',

        'pickup' => 'Pickup',

        'minutes' => 'Iminota',
        'hours' => 'Amasaha',

        'refund' => 'Gusubizwa',
        'recipient_address' => 'Aderesi',
        'signature' => 'Umukono',
        'blockchain' => 'Guhagarika',
        'details' => 'Ibisobanuro',


    

        'Shop' => 'Amaduka',
        'dashboard' => 'Ikibaho',
        'comments' => 'ibitekerezo',
        'wallet' => 'ikofi',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Ubucuruzi bwa Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Raporo y\'ibikorwa, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Raporo y\'ibihe, Selldone'
        ],
        'Onboarding' => [
            'id' => 'muraho',
            'name' => 'Emeza, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Shyigikira :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Kugenzura, Selldone'
        ],
        'Welcome' => [
            'id' => 'muraho',
            'name' => 'Umuryango, Selldone'
        ],
        'NewShop' => [
            'id' => 'abacuruzi',
            'name' => 'Emeza, Selldone'
        ],
        'Approve' => [
            'id' => 'kwemeza',
            'name' => 'Emeza, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gutegeka Gucunga :name'
        ],

        'Recovery' => [
            'id' => 'gukira',
            'name' => 'Itsinda rya Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Gutegereza ⌛',
        'PAYED' => 'Yishyuwe ✅',
        'CANCELED' => 'Yahagaritswe ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Umuyobozi',
            'OFFICER' => 'Umukozi n\'Umugenzuzi',
            'AUDITING' => 'Umuyobozi ushinzwe ubugenzuzi',
            'EMPLOYEE' => 'Umukozi',
            'PRODUCT' => 'Umuyobozi wibicuruzwa',
            'CONTENT' => 'Umuyobozi wibirimo',
            'MARKETING' => 'Umuyobozi ushinzwe kwamamaza',
            'VIEWER' => 'Abareba',

        ],
        'subject' => ":inviter yagutumiye nka :level| :shop",
        'category' => "Ubutumire bw'abakozi",
        'title' => "Watumiwe kuri <b>:shop_name</b> nka <b>:level</b>.",
        'message' => "Wakiriye ubutumire bwo gufatanya na <b>:shop_title</b> mubucuruzi. Ufite amahitamo yo kwakira cyangwa kwanga iki cyifuzo. Niba uhisemo kubyemera, nyamuneka injira muri serivisi ya Selldone kugirango wemeze icyemezo cyawe. Bimaze kwemezwa, uzabona uburyo bwo gucunga ububiko.",

    ],

    'welcome-email' => [
        'subject' => "Come Ikaze :name, Reka Dutangire na Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Murakaza neza kuri Selldone",
        'message' => "Urakoze guhitamo Selldone! Ubu uri mubice byumuryango uhuza abagurisha kwisi kubakiriya, ubucuruzi bwaho mubigo, nabantu kugiti cyabo. Ibikoresho byacu byose bya Master na Pro birahari kuriwe ** kubuntu ** na ** bitagira umupaka **. Turi hano kugirango tugushyigikire kandi dukingure amarembo yo gutsinda.",

        'index' => "Intambwe :step.",

        'step-domain' => [
            'title' => 'Ongeraho Indangarubuga yawe',
            'message' => "Kugirango utangire, ongeramo indangarubuga yawe kubuntu muri Dashboard yububiko munsi ya Igenamiterere> Igenamiterere rya domeni.",
            'action' => 'Gucunga Imiterere yanjye',
        ],
        'step-landing' => [
            'title' => 'Hindura Urupapuro Rwawe',
            'message' => "Hindura urupapuro rwawe murugo ujya kuri Dashboard> Urupapuro. Hitamo urupapuro rwamanuka cyangwa ukore urundi rushya. Nibyoroshye kandi bitangiza, kandi urashobora gutangira kubikora ako kanya.",
            'action' => 'Hindura Urupapuro rwanjye',
        ],
        'step-payment' => [
            'title' => 'Gushiraho Uburyo bwo Kwishura',
            'message' => "Tangira kwakira ubwishyu kuri konte yawe ya banki. Guhuza abatanga ubwishyu nka Stripe, PayPal, nibindi byinshi, jya kuri Dashboard> Ibaruramari> Irembo.",
            'action' => 'Ongeraho Uburyo bwo Kwishura',
        ],
        'step-products' => [
            'title' => 'Ongeraho ibicuruzwa byawe',
            'message' => "Byoroshye kongeramo ibicuruzwa nibyiciro muri Dashboard> Ibicuruzwa. Ninkaho gucunga amadosiye nububiko kuri PC yawe - gukurura-no-guta byuzuye. Urashobora kandi kugwiza ibicuruzwa biva hanze ukoresheje Excel. Icyitegererezo cyicyitegererezo kirahari kugirango kigufashe gutangira.",
            'action' => 'Gucunga ibicuruzwa byanjye',
        ],
        'step-shipping' => [
            'title' => 'Gushiraho uburyo bwo kohereza',
            'message' => "Kwishura abakiriya kubyohereza, sobanura uburyo bwawe bwo kohereza muri Dashboard> Logistic> Kohereza. Urashobora gushiraho ibiciro bitandukanye hamwe ninkunga ahantu hatandukanye. Ntiwibagirwe gushiraho inkomoko yububiko bwawe muri Dashboard> Logistic> Ububiko.",
            'action' => 'Gucunga uburyo bwo kohereza',
        ],
    

        'seller' => [
            'title' => 'Uri umugurisha?',
            'message' => 'Gutangira kugurisha, andika ahabigenewe muri Selldone ukoresheje umurongo uri munsi hanyuma ukore ububiko bwawe bwa mbere kubuntu. Ibi bizatwara iminota mike kandi uzagira ububiko bwawe nurubuga rwa interineti. Hanyuma tuzakuyobora munzira zikurikira hanyuma tubone amarembo yo kwishura.',
            'action' => 'Injira kumwanya wanjye',
        ],
        'buyer' => [
            'title' => 'Ndi umuguzi',
            'message' => 'Twishimiye. Umaze kuba umunyamuryango wa Selldone, uzakuraho ibibazo byose byo kuba umunyamuryango no kwemeza mububiko bwa interineti. Kugirango wungukire mububiko ubwo aribwo bwose bukoresha urubuga rwa Selldone, urashobora kwinjira ukanze rimwe hanyuma bigatuma ibyo ugura byoroshye, byihuse kandi bifite umutekano.',
        ],
    ],


    'charge-account' => [
        'category' => 'Umufuka> Konti> Kwishyuza',
        'title' => "Amafaranga yo gutsinda",
        'message' => "Konti yawe <b>:account_number</b> yishyuwe <b>:amount</b> neza.",
        'account' => 'Konti',
        'charge' => 'Kwishyuza',
        'balance' => 'Kuringaniza',
        'footer' => "Kora ubucuruzi bworoshye, bugerwaho, kandi bugera kubantu bose kwisi."
    ],

    'verify-email' => [
        'subject' => "Uzuza inyandiko yawe kugeza kuri Selldone! Kugenzura ihuza.",
        'category' => "URI INTAMBWE imwe",
        'title' => "Kugenzura aderesi imeri yawe",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Niba ufite ikibazo cyo gukanda buto yo Kugenzura, kora hanyuma wandike URL hepfo muri mushakisha yawe y'urubuga: :activation_url",
        'next-step' => "Ibikurikira, tuzakoherereza ibikoresho byingirakamaro hamwe nintambwe ku ntambwe kugirango bikworohereze kongeramo indangarubuga yawe bwite, gushiraho ubwishyu, kongeramo ibicuruzwa, no kubona ibicuruzwa byawe byambere.",

    ],
    'verify-email-code' => [
        'subject' => "Kode yo kugenzura :name",
        'category' => "SECURITY",
        'title' => "Kode yo kugenzura imeri",
        'message' => "Muraho :name, <br><br>Kwemeza ko <b>:email</b> ari adresse imeri yawe, nyamuneka andika kode ikurikira muminota ikurikira <b>10</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "Shop Amaduka yawe ariteguye| :name",
        'category' => "URI INTAMBWE imwe",
        'title' => "Igenamiterere ryarangiye",
        'account_title' => "Konti yawe",
        'account_msg' => "Kugenzura no kwinjira kuri konte yawe hamwe naya makuru.",
        'shop_msg' => "Ibisobanuro bya konti kuri sisitemu yubucuruzi ya Selldone.",

    ],

    'reset2fa' => [
        'category' => "UBUTUMWA BW'UMUTEKANO",
        'title' => "Saba guhagarika kwinjira-intambwe 2",
        'message' => "Urimo kwakira iyi imeri kuko twakiriye icyifuzo cyo gusubiramo ibyemezo bibiri kuri konti ya ** :name ** hamwe na ** :email ** imeri.<br><br> Twabonye ibisobanuro bikurikira kuri konte yawe:",
        'footer' => "Niba udasabye gusubiramo ijambo ryibanga, ntakindi gikorwa gisabwa.",
        'action' => 'Hagarika kwinjira mu ntambwe ebyiri',
    ],


    'build-new-shop' => [
        'subject' => "Shop Amaduka yawe ariteguye!",
        'category' => "YAVUKIYE AMAFARANGA MASHYA MASI MU ISI",
        'title' => "Twishimiye, :name!",
        'message' => "<b>Murakoze, :name! Ubucuruzi bwawe bushya kumurongo ubu burahari! </b> Twishimiye kubaha ikaze mumuryango wa Selldoners. Wateye intambwe yambere igana ku ntsinzi, kandi turi hano kugirango tugufashe intambwe zose.<br>None ko ububiko bwawe bwiteguye, reka tumenye neza ko ugiye kwakira ubwishyu kubakiriya bawe hanyuma utangire gukura ubwami bwawe. Niba hari igihe ukeneye ubufasha, turi ubutumwa kure-itsinda ryacu ridufasha rihora hano kubwawe.<br><br><b>Intambwe Zikurikira: </b> Gutangira, menya ko mwese mwashyizweho kugirango mukire ubwishyu nibikorwa byiza. Tuzakuyobora muri buri cyiciro kugirango ububiko bwawe bukore neza.",
        'pdf-book' => "Ntucikwe nigitabo cyamaboko: Kora ubucuruzi bwawe nkumukino",

        'account' => [
            'title' => 'Intambwe ya 1: Kora konti mumufuka wa Selldone',
            'message' => "Gutangira, kora konti mumufuka wawe Selldone. Aha niho amafaranga yawe azagabanywa, kandi niho uzajya hejuru kugirango ububiko bwawe bukore neza. Niba impirimbanyi zawe zigenda nabi, ntugahangayike! Ububiko bwawe buzakomeza gukora nta nkomyi.",
            'action' => 'Injira mu gikapo',
        ],

        'shop-account' => [
            'title' => 'Intambwe ya 2: ihuza konte kububiko',
            'message' => "Ibikurikira, huza konte yawe yububiko bwawe. Kujya kuri <b>Store> Ibaruramari> Inyemezabuguzi</b>, hanyuma uhuze ikotomoni yawe. Ibi byemeza ko abakiriya bose bishyuye bishyirwa kuri konte yawe ya banki - Selldone ntabwo ikuramo amafaranga yose mubyo winjije.",
            'action' => 'Ububiko bw\'inyemezabuguzi',
        ],

        'gateway' => [
            'title' => 'Intambwe ya 3: Huza inzira yo Kwishura Kumurongo',
            'message' => "Noneho, reka dushyireho amarembo yo kwishura kumurongo. Jya kuri <b>Store> Ibaruramari> Port</b> hanyuma ukande kuri <b>Add Port Port</b>. Hitamo ifaranga ryawe, uzabona urutonde rwamarembo yo kwishyura aboneka. Guhuza amarembo birihuta kandi byoroshye, ariko niba ukeneye ubufasha ubwo aribwo bwose, wumve neza kugenzura ubuyobozi bwa Selldone cyangwa kutugeraho.",
            'action' => 'Ongeraho portal kububiko',
        ],

        'domain' => [
            'title' => 'Intambwe yanyuma: guhuza indangarubuga yihariye',
            'message' => "Noneho, ihuza indangarubuga yawe kububiko bwawe. Ibi bituma abakiriya bagura ibicuruzwa byawe cyangwa serivise no kwishyura kuri wewe.",
            'action' => 'Kumenyekanisha no kwakira amakarita yimpano zitagira imipaka',
        ],
    ],


    'basket-list' => [
        'item' => "ikintu",
        'count' => "Kubara",
        'price' => "igiciro",
        'discount-code' => "Kode yo Kugabanuka",
        'customer-club' => 'Club y\'abakiriya',
        'shipping' => "Kohereza",
        'total' => "Igiteranyo",
        'offer' => "Tanga",
        'coupon' => "Coupon",
        'lottery' => "Igihembo",
        'tax' => "Umusoro",
        'tax_included' => "Harimo ibiciro",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Uburyo',
        'amount' => 'Umubare',
        'giftcard' => 'Gift card',
        'payment' => 'Kwishura',
    ],


    'shop-subscription-email' => [
        'category' => "Kuvugurura abiyandikisha",
        'title' => "Uruhushya rwo kubika: :shop_title",
        'title-reserved' => "Uruhushya rwo kubika: :shop_title",
        'title-active' => "Uruhushya rukora: :shop_title",
        'title-finished' => "Uruhushya rwarangiye: :shop_title",
        'title-cancel' => "Kuraho uruhushya: :shop_title",
        'message' => "Gahunda yimpushya zo mumaduka yawe ivuguruye,",
        'RESERVED' => "Plan Gahunda yawe yo kwiyandikisha yabitswe ** yabitswe **.",
        'ACTIVE' => "Plan Gahunda yawe yo kwiyandikisha yakoreshejwe ** ikora **.",
        'FINISHED' => "Plan Gahunda yawe yo kwiyandikisha yarangije ** yarangiye **.",
        'CANCEL' => "Plan Gahunda yawe yo kwiyandikisha yahagaritswe **.",
    ],

    'support' => [
        'subject' => "Ikigo Gufasha|:name yarashubije",
        'category' => "Ikigo cyunganira",
        'title' => "Wabonye igisubizo",
        'action' => "Fungura admin admin",
    ],

    'shop-customer-join' => [
        'subject' => "Injira :shop_title",
        'category' => "Ibirori bishya byabakiriya",
        'title' => "Twishimiye kuba umunyamuryango",
        'action' => "Sura nonaha",
    ],

    'shop-vendor-join' => [
        'subject' => "Abacuruzi| :shop_title",
        'category' => "Ibirori bishya byabacuruzi",
        'title' => "Twishimiye kuba umunyamuryango",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Ikarita y'Impano :shop_title",
        'category' => "Ongeraho ikarita nshya",
        'title' => "Twishimiye, wakiriye ikarita yimpano",
        'action' => "Gura ubungubu",
        'message' => "Wakiriye ikarita yimpano ifite :balance :currency. Urashobora gukoresha ikarita yimpano mububiko bwacu.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Ikigo Gufasha| :shop",
        'category' => "inkunga",
        'title' => "Wabonye igisubizo",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Tegeka Kwemeza|Tegeka :order_id",
        'title' => "gahunda",
        'message' => "Washyize itegeko kububiko bwacu. Twakiriye ibyo wategetse kandi tuzakohereza indi imeri iyo ubwishyu bwemejwe."
    ,

        'payments' => 'Kwishura',
    ],

    'order-payment' => [
        'subject' => "Conf Kwemeza kwishyura|Tegeka :order_id",
        'title' => "Icyemezo cyo kwishyura",
        'message' => "Ubwishyu bwawe bwarangiye,<br> Dufite ibyo wategetse. Tuzaguterera indi imeri mugihe ibicuruzwa byawe byoherejwe.",
    

        'payments' => 'Kwishura',
    ],

    'order-update' => [
        'subject' => "🛍️ Tegeka ivugurura ryimiterere|Tegeka :order_id",
        'title' => "Tegeka ivugurura ryimiterere",
        'message' => "Ibicuruzwa byawe byavuguruwe. Urashobora kugenzura imiterere iheruka yiri teka muri konte yawe.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Ibicuruzwa byawe biri kumurongo wo gutunganya. Tuzakumenyesha mugihe kiri gutegurwa.",
                'OrderConfirm' => "Ibicuruzwa byawe byemejwe kandi imyiteguro iratangiye.",
                'PreparingOrder' => "Ibicuruzwa byawe birategurwa kandi bizoherezwa vuba.",
                'SentOrder' => "Ibicuruzwa byawe byoherejwe. Uzakira vuba.",
                'ToCustomer' => "Ibicuruzwa byawe byatanzwe. Turizera ko uzabyishimira!",

                'PreparingOrder-PICKUP' => "Urutonde rwawe rurimo gutegurwa. Uzakira integuza mugihe yiteguye gutwara.",
                'SentOrder-PICKUP' => "Ibicuruzwa byawe byiteguye gutwara. Nyamuneka uze mububiko kugirango ubikusanyirize.",
                'ToCustomer-PICKUP' => "Ibicuruzwa byawe byatoranijwe. Turizera ko uzabyishimira!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Ibicuruzwa byawe biri kumurongo wo gutunganya. Tuzakumenyesha mugihe byiteguye.",
                'OrderConfirm' => "Ibicuruzwa byawe byemejwe kandi imyiteguro irakomeje.",
                'PreparingOrder' => "Ibicuruzwa byawe birategurwa kandi bizoherezwa vuba.",
                'ToCustomer' => "Ibicuruzwa byawe byagejejwe kuri konte yawe. Murakoze!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Icyifuzo cya serivisi yawe kiri kumurongo. Tuzakumenyesha mugihe dutangiye.",
                'OrderConfirm' => "Serivise yawe iremejwe kandi turimo kwitegura gutangira.",
                'PreparingOrder' => "Turimo gutegura serivisi yawe, kandi tuzakumenyesha nibirangira.",
                'ToCustomer' => "Serivise yawe iruzuye. Urakoze kuduhitamo!"
            ],
            'FILE' => [
                'PreparingOrder' => "Dosiye yawe irategurwa kandi izaboneka vuba.",
                'ToCustomer' => "Dosiye yawe iriteguye kandi yatanzwe. Urashobora noneho gukuramo."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Urutonde rwawe rwo kwiyandikisha ruri kumurongo. Tuzakumenyesha mugihe gutunganya bitangiye.",
                'OrderConfirm' => "Kwiyandikisha kwawe byemejwe kandi birashyirwaho.",
                'PreparingOrder' => "Turimo gutegura abiyandikisha kandi bizatangira vuba.",
                'SentOrder' => "Kwiyandikisha kwawe kwarakozwe. Uzakira ibishya.",
                'ToCustomer' => "Serivisi yo kwiyandikisha yatangijwe neza."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Twishimiye :name|Voucher nshya: :title',
        'category' => "DUSHIMIRE, IJWI RISHYA",
        'message' => "Hey :name, <br><br>Yakiriye voucher nshya nkimpano yaturutse! Urashobora kubona inyemezabuguzi nyinshi mugutangiza Selldone kubagenzi bawe nabantu bose uzi. Iyi voucher ifite agaciro ** :price :currency **. <br><br>Yateye intambwe yambere, kandi turi hano kugirango tugufashe gufungura ibintu bishya hamwe na voucher yawe! Nyamuneka injira hamwe na ** :email ** hanyuma ushakishe voucher yawe mu iduka ** Dashboard **> ** Igenamiterere **> ** Uruhushya **. <br><br>Murakoze!",
        'action' => "Ikibaho cyanjye",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Twishimiye, Nshuti :name|Wakiriye Impano idasanzwe!',
        'category' => "Itangazo ryo kwakira impano",
        'title' => "Impano kuri wewe",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Impano",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "Order Iteka Rishya ryakiriwe| :order_id",
        'title' => "New Order",
        'message' => "Wakiriye itegeko rishya. Nyamuneka jya kuri page itunganya ibicuruzwa mububiko bwawe.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Amakuru yawe Yuzuye',
        'output-form-title' => 'Kugura amakuru yamakuru',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => 'Q:shop_title|Raporo ya buri cyumweru :time',
        'title' => 'Raporo yimikorere ya buri cyumweru',
        'message' => "Iyi ni raporo yububiko bwawe buri cyumweru kuva <b>:start</b> kugeza <b>:end</b>. Iyi raporo ikubiyemo inama zogutezimbere ubucuruzi bwawe, urashobora kandi kugenzura imiterere yububiko bwawe bwo kumurongo hamwe nibisabwa vuba. Nizere ko mugira umunsi mwiza nicyumweru kiri imbere."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => 'Report Raporo yawe yo kuzigama :amount mumezi atatu ashize| :shop_title',
        'title' => 'Raporo y\'ibihe bijyanye nibikorwa byawe byubucuruzi, ibihembo no kuzigama amafaranga',
        'message' => "Ngiyo <b>:shop_title</b> raporo yigihembwe kuva <b>:start</b> kugeza <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Konti ihujwe',
        'sub-title' => 'Ni ubuhe buryo buheruka bwa konti ya konte ihujwe nububiko bwanjye?',
        'view-wallet' => 'Reba igikapu',
        'tip-title' => 'Inama zingenzi',
        'tip' => "Shiraho igikapu cyubusa Selldone hanyuma uyihuze nububiko bwawe. Nubwo amafaranga yawe asigaye ari mabi, abakiriya bawe barashobora kugura no kwishyura nta kibazo. Ntugire impungenge, ibikorwa byububiko bwawe hamwe namakuru bizakomeza neza kugeza kumezi 1, nta nkomyi.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Ihuze kuri konti'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Porogaramu zashyizweho',
        'sub-title' => 'Urutonde rwa porogaramu washyize mububiko bwawe muri iki cyumweru.',
        'tip' => "Urashaka kubona izindi porogaramu kububiko bwawe?",
        'view-app-store' => 'Sura Ububiko bwa Selldone ..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Ububiko bwawe',
        'sub-title' => 'Ibicuruzwa bigurishwa mububiko bwanjye.',
        'tip-title' => 'Kugurisha Bot',
        'tip' => "Selldone yaguhaye ibicuruzwa byo kugurisha byikora. Icyo ugomba gukora nukujya kuri Add-ons> Bots hanyuma ugakora bots ububiko bwawe. Menya ko serivisi ijyanye nayo igomba kuboneka mugihugu cyawe.",
        'view-bots' => 'Gucunga bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Itumanaho hamwe nabakiriya',
        'sub-title' => 'Ni kangahe nigeze kugirana nabakiriya bange muri iki cyumweru?',
        'faqs' => 'Ibibazo Bikunze Kubazwa',
        'tickets' => 'Amatike y\'abakiriya',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Abakoresha Imiterere',
        'sub-title' => 'Igikorwa kuva :start kugeza :end',
        'users' => [
            'title' => 'Abakiriya',
            'subtitle' => 'Abakoresha Kwiyandikisha',
        ],
        'views' => [
            'title' => 'Gusura',
            'subtitle' => 'Ni kangahe wasuye iduka',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Abakoresha bagarutse',

        'shop_views' => 'Amaduka',
        'baskets' => [
            'title' => 'Amagare',
            'subtitle' => 'Menyesha umubare w\'amagare mashya yo guhaha',
        ],
        'products' => [
            'title' => 'Incamake y\'ibicuruzwa',
            'subtitle' => 'Imiterere yibicuruzwa mububiko kubwoko',
            'value_name' => 'Ibicuruzwa'
        ],
        'products_count' => 'Ubwoko bwibicuruzwa',
        'views_count' => 'Reba kubara',
        'sell_count' => 'Kugurisha',
        'send_count' => 'Kubara ibicuruzwa',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Kureka Kohereza',
        'sub-title' => 'Akanama kubagurisha bakomeye ba Drop Shipping Selldone.',
        'total_fulfillments' => 'Ibicuruzwa byose byakiriwe',
        'ds_count' => 'Yakiriye Amabwiriza',
        'statistics_title' => 'Raporo yakiriye amabwiriza',
        'ds_cancels' => 'Hagarika kubagurisha interineti',
        'ds_rejects' => 'Kureka nawe',
        'tip' => "Wowe ugurisha ibicuruzwa bikomeye? Ufite ububiko, uruganda cyangwa ugabura ibicuruzwa? Urashobora gutanga ibicuruzwa byawe kubandi bagurisha muri serivise ya Selldone yohereza ibicuruzwa byawe murwego runini. Ohereza ubutumwa kuri support@selldone.com kugirango tuyobore.",
        'view-drop-shipping-panel' => 'Injira kumwanya wo kugurisha',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Ibiciro byo kuvunja',
        'sub-title' => 'Urutonde rwibiciro biheruka guhinduranya mububiko bwawe.',
        'from' => 'Ifaranga ry\'isoko',
        'to' => 'Ifaranga',
        'rate' => 'Igipimo cyo guhinduka',
        'view-exchange-panel' => 'Gucunga ibiciro',
    

        'vew-exchange-panel' => 'akanama gashinzwe gucunga ivunjisha',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Amasezerano yinzobere',
        'sub-title' => 'Ni abahe banyamwuga bakora ku iduka ryanjye?',
        'cost' => 'Umubare w\'amasezerano',
        'duration' => 'Ikiringo',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Itariki yo guhagarika',
        'end_at' => 'Itariki yo gutanga',
        'tip' => 'Urashobora gukoresha inzobere nziza muri Selldone kugirango uteze imbere ubucuruzi bwawe.',
        'view-experts' => 'Kanda kugirango utangire.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Inzira yo Kwishura Ifatika Kumaduka yawe :shop',
        'tip-title' => 'Inama zingenzi',
        'tip' => "Jya kuri page yo gucunga portal mububiko bwawe hanyuma wongere byibuze icyambu kimwe muminota mike. Abakiriya bawe bakunda kwishyura vuba kandi neza binyuze kumurongo wa interineti.",
        'view-shop-gateways' => 'Injira mububiko bwibicuruzwa byanjye.',
        'view-gateways' => 'Reba andi marembo',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Amabwiriza',
        'sub-title' => 'Urutonde rwibicuruzwa nakiriye muri iki cyumweru.',
        'total_baskets' => 'Ibicuruzwa byose',
        'total_posBaskets' => 'Amafaranga yatanzwe yose',
        'pos-title' => 'Agasanduku k\'ububiko',
        'chart-label' => 'Amabwiriza yarangiye (aya mabwiriza ntabwo yishyurwa byanze bikunze!)',
        'tip-title' => 'Ugomba kugerageza cyane ...',
        'tip' => "Nta ntsinzi yoroshye.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Ikigo gitunganya',
        'sub-title' => 'Ni bangahe twatunganije mu iduka muri iki cyumweru?',
        'tip-title' => 'Ntabwo wagurishije!',
        'tip' => "Kubwamahirwe ntabwo wagurishije muri iki cyumweru. Ugomba kubona byinshi mububiko bwawe. Urashobora kongeramo ibicuruzwa byinshi, hitamo amashusho meza cyangwa kwandika ibisobanuro byiza kubicuruzwa byawe. Reba akazi k'igihe cyose kubucuruzi bwawe. Niba ubikora neza kandi ntucike intege, uzabigeraho.",
        'view-process-center' => 'Reba inzira yimikorere',
        'return' => [
            'title' => 'Urutonde rwagarutse',
            'subtitle' => 'Raporo yatanzwe.',
            'tip-title' => 'Wari uzi ko ...',
            'tip' => "Urashobora gukora rejisitiri nyinshi nkuko ukeneye hamwe na Selldone POS! Yaba tablet yawe, mobile, cyangwa mudasobwa igendanwa, urashobora guhindura igikoresho icyo aricyo cyose mububiko bwawe. Nibyoroshye, byihuse gushiraho, kandi byateguwe byuzuye kuri seriveri yawe. Tangira kuyikoresha uyumunsi!",
            'view-pos' => 'Injira mububiko bwanjye bwo kumurongo Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Amasomo',
        'sub-title' => 'Ni kangahe nasuye ububiko bwanjye?',
        'countries-title' => 'Nibihe bihugu byasuwe cyane?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Urashaka gushaka amafaranga udakoresheje amafaranga imwe?',
        'message' => "Muraho :name, igihe kirageze cyo gutangira kwinjiza hamwe na Selldone! Jya kuri Dashboard> Ibindi> Monetisation> Fata Ihuza Ryohereza. Sangira ihuza n'inshuti zawe, hanyuma ubone amakarita yimpano numugabane wubwishyu bwabo. Igice cyiza? Mwembi ninshuti yawe mubona ikarita yimpano!",
        'action' => 'Reba intangiriro yanjye',
        'mail-clip' => "<b style='color: #C2185B'>Icyangombwa:</b> Niba ukoresha serivise za imeri nka Gmail igabanya uburebure bwa imeri, shakisha uburyo bukurikira kumpera ya imeri kugirango werekane raporo yuzuye hanyuma ukande kuri:",

        'no-coin-reward' => "<b style='color: #C2185B'>Ihangane:</b> Igikorwa cyawe nticyujuje ibisabwa kugirango ubone ibihembo bya SEL ibiceri. Gerageza cyane kandi ugurishe byinshi kumaduka yawe mugihembwe gitaha.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Ishimwe: </b> Akazi gakomeye! Dushingiye ku bikorwa byawe by'indashyikirwa, twahaye :amount SEL ibiceri kuri konti yawe nk'igihembo.",

        'need-buy-license' => "<b>Level Up Business yawe: </b> Birasa nkaho utigeze wandikisha gahunda yo kwiyandikisha kurubuga rwawe! Kuzamura nonaha kugirango ufungure ibintu byinshi kuri :amount buri kwezi niba yishyuwe buri mwaka.",
        'not-afford-message' => "Niba udashobora kwigurira cyangwa kugira ikibazo icyo ari cyo cyose cyo kwishyura, wumve neza utubwire ukoresheje support@selldone.com.",
        'add-domain' => "<b>Kuberiki utagira domaine yihariye kubucuruzi bwawe?</b><br> Ongeraho indangarubuga kurubuga rwawe ubungubu; ni ubuntu!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone ni a<del> ibicuruzwa</del> <span style = 'color: forestgreen'>umuryango</span> .<br> Ba Selldoner wabigize umwuga!",
        'message' => "Kurikiza urupapuro rwemewe rwa Selldone kurubuga rwa Twitter, LinkedIn hamwe nimbuga rusange. Twohereze ibitekerezo, ibyifuzo cyangwa kunegura cyangwa kwitabira ibiganiro bijyanye na Selldone. Natwe turi mumuryango wa Selldone <b>Ukora</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Amabwiriza mashya ya Avoka yakiriwe|:shop_title :time',
        'title' => "Raporo yimikorere mumasaha 24 ashize",
        'message' => "Abakiriya bawe bategereje ko amabwiriza yawe asubirwamo kandi agiciro. Subiza ibyifuzo byabakiriya bawe vuba bishoboka kugirango ubone ibicuruzwa byinshi.",
        'card_title' => "Gutegeka kumurongo",
        'card_subtitle' => "Kuva :date",

        'card_payed' => "Ibicuruzwa byishyuwe"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Ibisubizo bishya kuri post yawe muri :community_title',
        'title' => ":name na :count abandi binjiye mukiganiro ku nyandiko zawe!",
        'message' => "Muraho :name, inyandiko zawe zirimo kwitabwaho! Wakiriye ibitekerezo iwacu. Injira kuri konte yawe kugirango winjire mubiganiro urebe icyo buri wese avuga.",
        'title-simple' => ":name yatanze ibisobanuro kubyo wanditse!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => 'Subiza ku ngingo yawe :topic_title',
        'title' => ":name, na :count abandi basubije kumutwe wawe.",
        'message' => "Muraho :name, ingingo yawe iragenda yitabwaho! Wakiriye ibisubizo iwacu. Injira kuri konte yawe kugirango winjire mubiganiro urebe icyo buri wese avuga.",
        'title-simple' => ":name yashubije kumutwe wawe.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => 'Log Kwinjira gushya :name',
        'category' => 'Kumenyesha umutekano',
        'title' => "Injira kuri Konti",
        'message' => "Nshuti :name, winjiye kuri konte yawe ya Selldone.",   // Login in selldone (seller)
        'message-shop' => "Nshuti :name, hamenyekanye kwinjira muri :shop_title.",  // Login in shop (buyer)

        'footer' => "Niba utinjiye, nyamuneka hindura ijambo ryibanga.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Gukuramo",
        'deposit' => "Kubitsa",

        'withdraw_subject' => "Kuramo konti :account",
        'deposit_subject' => "Kubitsa kuri konte :account",

        'message' => "Kohereza amafaranga byakozwe hamwe nibisobanuro bikurikira.",

        'type' => "Ubwoko bw'igicuruzwa",

        'from' => "Konti y'inkomoko",
        'to' => "Destination account",

        'desc' => "Ibisobanuro byubucuruzi",
        'action' => "Reba ibikorwa",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "Ingenzi! Kurenga ku mategeko| :shop",
        'category' => "Amakuru yingenzi",
        'title' => "Amaduka yawe yarahanwe",
        'action' => "Fungura ahabigenewe",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter yagutumiye kwinjira muri Selldone",
        'title' => ":name yohereje :amount kugirango ifashe gutangiza ububiko bwawe bushya kumurongo no kubikoresha!",
        'message' => "Muraho ** :receiver_name **, <br><br> Murakaza neza kuri Selldone! Kuri Selldone, urashobora gukora byoroshye urubuga rwa e-ubucuruzi, blog, umuryango wa interineti, ndetse ugashyiraho sisitemu ya POS kumurongo wo kugurisha umuntu-byose muminota mike. Nibikorwa byuzuye byubucuruzi kumurongo byateguwe kugirango ubucuruzi bwawe burusheho kuba bwiza, byihuse, kandi byoroshye gukora.<br><br>Sign up by <b>:date</b> hanyuma wakire voucher ya :amount kugirango utangire!",
        'accept' => "Emera ubutumire",
        'owner' => "Nyiri",
        'join-date' => "Kuri Selldone kuva",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Ihuza| :shop",
        'category' => "Umutekano mu iduka",
        'title' => "Guhuza ububiko bwububiko bwa <b>:shop_name</b>.",
        'message' => "Iyi imeri yoherejwe kuko wasabye kugarura ububiko bwawe. Kanda kumurongo uri munsi bizagarura iduka ryawe hamwe namakuru yose arimo.",
        'action' => "Emeza kugarura ibicuruzwa",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Ni amafaranga angahe Selldone yazigamye kubucuruzi bwawe?',
        'sub-title' => 'Kuva kumunsi :start kugeza :end',
        'infrastructure' => [
            'title' => 'Ibikorwa Remezo',
            'subtitle' => 'Seriveri, CDN, Ububiko, nizindi serivisi zicu',
        ],
        'experts' => [
            'title' => 'Impuguke & Abakozi',
            'subtitle' => 'Abashinzwe iterambere, kubungabunga, no gushyigikirwa',
        ],
        'total_save' => 'Amafaranga yose yazigamye'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Imikorere yawe',
        'sub-title' => 'Incamake yubucuruzi kuva :start kugeza :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Abakoresha bagarutse',

        'shop_views' => 'Amaduka',
        'baskets' => [
            'title' => 'Amagare',
            'subtitle' => 'Menyesha umubare w\'amagare mashya yo guhaha',

        ],
        'products' => [
            'title' => 'Incamake y\'ibicuruzwa',
            'subtitle' => 'Imiterere yibicuruzwa mububiko kubwoko',
            'value_name' => 'Ibicuruzwa'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Urubuga rwose',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Wakiriye itegeko rishya. Nyamuneka jya kurupapuro rutunganya ibicuruzwa mubucuruzi bwawe.",
        'subject' => "Order Iteka Rishya ryakiriwe| :order_id",
        'your_revenue' => "Amafaranga yinjira",
    ],
    'vendor-invite' => [
        'title' => 'Ubutumire bw\'abacuruzi',
        'message' => "Wakiriye ubutumire bwo kuba umucuruzi wa :shop_name. Urashobora kubyemera cyangwa kubyanga ukoresheje buto hepfo.",
        'subject' => ":shop_name |Ubutumire bwo kutugurisha",
        'accept' => "Emera & Ba Umucuruzi",
        'reject' => "Wange",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Ubutumire bwo Kwinjira mu Ikipe Yacu',
        'message' => "Watumiwe kwinjira muri :vendor_name kuri :shop_name. Urashobora kwakira cyangwa kwanga ubu butumire ukoresheje buto hepfo.",
        'subject' => "Ubutumire bwo Kwinjira :vendor_name|Ba Umunyamuryango w'itsinda",
        'accept' => "Emera & Injira mu itsinda",
        'reject' => "Wange",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Kode yawe yo kwinjira kuri :shop",
        'header-message' => "Turaboherereje iyi imeri kuko wasabye kode yinjira kububiko. Nyamuneka shakisha ijambo ryibanga rimwe (OTP) hepfo:",
        'footer-message' => "Iyi kode izamara iminota 10. Niba utasabye iyi code yinjira, nyamuneka wirengagize iyi imeri."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Kugenzura imeri yawe| :shop",
        'title' => 'Kugenzura imeri',
        'header-message' => "Muraho :name, <br> Nyamuneka wemeze ko ** :email ** ari aderesi imeri yawe ukanze buto hepfo cyangwa ukoresheje umurongo uri munsi yamasaha 48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Kuvugurura ibicuruzwa| :shop",
        'title' => "Kuvugurura kumiterere yibicuruzwa - Amasaha 24 yanyuma",
        'message' => "Nizere ko ubu butumwa bubona neza. Nibintu bigezweho kugirango nkumenyeshe uko ibicuruzwa byawe bihagaze kurubuga rwacu mumasaha 24 ashize.\nMuri iki gihe, habaye impinduka muburyo bwibicuruzwa bimwe. Izi mpinduka zishobora guterwa no kugura, kuvugurura imigabane, cyangwa ibindi bintu bifitanye isano.\nKubindi bisobanuro birambuye kuri buri gicuruzwa, nyamuneka injira kuri konte yawe hanyuma urebe igice cyibicuruzwa.",
        'action' => "Fungura akanama gacuruza",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Amabwiriza menshi yakiriwe| :shop | :date",
        'title' => "Amatangazo menshi",
        'message' => "Wakiriye icyiciro cyibicuruzwa byinshi. Nyamuneka sura urupapuro rutunganya urutonde rwawe kugirango ubone ibisobanuro birambuye. Urashobora kandi gukuramo urutonde rwibicuruzwa ukoresheje umurongo wizewe watanzwe, ufite agaciro kuminsi 7.<br><br>\n        <b>IMPORTANT: </b> Iyi link ifite agaciro muminsi 7.<br>\n        Ihuza rifite imbaraga, burigihe rero iyo ukanze, uzakira amabwiriza agezweho kuriyi tariki yihariye. <b>Ibisobanura niba imiterere yuburyo bwo kwishyura byahinduwe byanze, ntuzongera kubona iryo tegeko muri CSV yakuweho, cyangwa niba itegeko ryishyuwe, bizagaragara kurutonde.</b><br><br>\n        <ul>\n            <li> CSV ikubiyemo ibicuruzwa byishyuwe hamwe nitariki yabigenewe muri :date.</li>\n            <li> Itariki yabugenewe ni itariki umukoresha akanze kugenzura kurupapuro rwabigenewe.</li>\n        </ul>\n        <b>Kwirinda ibicuruzwa byigana, burigihe reba Iteka ID mbere yo kohereza.</b>",
        'action' => "Kuramo Urutonde",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Ibintu bimwe murutonde rwawe ntibyakiriwe kandi ntibishobora gutangwa. Amafaranga yibi bintu azasubizwa ikarita yawe vuba."
    ]

];
