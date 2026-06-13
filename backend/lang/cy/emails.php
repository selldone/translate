<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Mae\'r neges hon yn croesawu prynwr newydd i\'r siop.',
        ShopMailTemplateCodes::OrderCheckout => 'Anfonir yr hysbysiad hwn pan fydd prynwr yn cadarnhau archeb.',
        ShopMailTemplateCodes::OrderPayment => 'Mae\'r hysbysiad hwn yn cadarnhau\'r taliad llwyddiannus a wnaed gan gwsmer.',
        ShopMailTemplateCodes::OrderUpdate => 'Anfonir y neges hon i roi\'r wybodaeth ddiweddaraf i brynwr am statws eu harcheb.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Anfonir y neges hon at werthwr i\'w hysbysu o archeb wedi\'i chadarnhau.',
        ShopMailTemplateCodes::PosCheckout => 'Anfonir yr hysbysiad hwn i gadarnhau archeb pwynt gwerthu ar gyfer prynwr.',
        ShopMailTemplateCodes::PosPayment => 'Mae\'r hysbysiad hwn yn cadarnhau taliad pwynt gwerthu a wnaed gan brynwr.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Mae\'r neges hon yn hysbysu\'r gwerthwr am bryniant a wnaed yn ei bwynt gwerthu.',
        ShopMailTemplateCodes::ShopContact => 'Anfonir yr hysbysiad hwn pan fydd ffurflen gyswllt wedi\'i chyflwyno.',
        ShopMailTemplateCodes::ShopGiftCard => 'Mae\'r hysbysiad hwn yn hysbysu defnyddiwr ei fod wedi derbyn cerdyn rhodd.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Mae\'r neges hon yn croesawu gwerthwr newydd i\'r siop.',
        ShopMailTemplateCodes::ShopVendorInvite => "Mae'r neges hon yn cael ei hanfon i wahodd gwerthwr i ymuno â'ch marchnad.",
        ShopMailTemplateCodes::ShopVendorOrder => "Anfonir y neges hon at y gwerthwr pan dderbynnir archeb naill ai mewn statws Taledig neu Arian Parod Wrth Gyflenwi (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Yn cael ei anfon yn ddyddiol i ddiweddaru gwerthwyr ar statws eu cynhyrchion.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Anfonir y neges hon i wahodd gwerthwr i ymuno â'ch marchnad.",

        ShopMailTemplateCodes::UserLogin => "Hysbyswch y defnyddiwr gyda manylion mewngofnodi, gan gynnwys cyfeiriad IP, dyddiad, a dyfais, at ddibenion diogelwch.",
        ShopMailTemplateCodes::LoginCode => "Anfonwch god cyfrinair un-amser i ddefnyddwyr fewngofnodi i'r siop.",

        ShopMailTemplateCodes::EmailVerifyLink => "Anfonwch ddolen i wirio cyfeiriad e-bost y defnyddiwr. Anfonir yr e-bost hwn pan fydd defnyddiwr yn cofrestru erbyn SMS ac yn nodi ei e-bost. Nid yw'n cael ei anfon pan fydd defnyddiwr yn cofrestru'n uniongyrchol gyda mewngofnodi cymdeithasol neu e-bost.",

        ShopMailTemplateCodes::EmailBulkOrder => "Anfonwch restr o archebion a dderbyniwyd ac a dalwyd mewn swmp ar gyfer diwrnod penodol."


    ,

    ],


    'global' => [
        'greetings' => 'Helo, :name!',
        'end-statement' => 'Tîm cefnogi',

        'receiver_name' => 'Helo :user_name',
        'footer-help' => "Angen help? Gofynnwch yn [support@selldone.com](mailto:support@selldone.com) neu ewch i'n [canolfan gymorth](https://selldone.com/community).",
        'selldone-team' => 'Mae\'r tîm Selldone',
        'footer-shop' => "Os oes angen help arnoch gydag unrhyw beth mae croeso i chi anfon e-bost atom: :shop_mail",
        'accept' => "Derbyn",
        'reject' => "Gwrthod",
        'verify' => "gwirio",
        'title' => "Teitl",
        'value' => "Gwerth",
        'description' => "Disgrifiad",
        'shop' => "Siop",
        'shop-info' => "Gwybodaeth Storfa",
        'user' => "defnyddiwr",
        'user-info' => "Gwybodaeth Cyfrif",
        'license' => "Trwydded",
        'status' => "Statws",
        'start' => "Dechrau",
        'end' => "Diwedd",
        'renewal' => "Adnewyddu",
        'view' => "Golwg",

        'balance' => "Cydbwysedd",
        'card_number' => "Rhif cerdyn",
        'cvv' => "Cvv",
        'expire_date' => "Dyddiad Dod i ben",

        'Dashboard' => "Dangosfwrdd",
        'order' => "trefn",
        'view_order' => "Gweld trefn",
        'pay_now' => "Pay now",

        'official_selldone' => "GWERTHU SWYDDOGOL",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Arian cyfred",
        'free-balance' => "Cydbwysedd am ddim",
        'locked-balance' => "Cydbwysedd wedi'i gloi",
        'bot' => "Bot",
        'requests' => "Ceisiadau",
        'baskets' => 'Cartiau',
        'physical' => "Corfforol",
        'virtual' => "Rhith",
        'file' => "Ffeil",
        'service' => "Gwasanaeth",
        'fulfillment' => "Cyflawniad",
        'open' => "Agored",
        'reserved' => "Wedi'i gadw",
        'canceled' => "Wedi'i ganslo",
        'payed' => "Talwyd",
        'cod' => "COD",
        'orders-count' => 'Archebion',
        'payments-count' => 'Taliadau',
        'confirms-count' => 'Yn cadarnhau',
        'sends-count' => 'Yn anfon',
        'delivers-count' => 'Yn cyflawni',
        'count' => 'Cyfri',
        'transactions-count' => 'Mae trafodion yn cyfrif',
        'success-transactions' => 'Trafodion llwyddiant',
        'total-amount' => 'Cyfanswm',
        'amount' => 'Swm',
        'wage' => 'Cyflog',
        'debug' => 'Dadfygio',
        'pos' => 'POS',
        'live' => 'Byw',
        'CheckQueue' => 'Gwiriwch y ciw',
        'OrderConfirm' => 'Gorchymyn cadarnhau',
        'PreparingOrder' => 'Paratoi archeb',
        'SentOrder' => 'Wedi anfon archeb',
        'ToCustomer' => 'Wedi\'i ddosbarthu i\'r cwsmer',
        'Pending' => 'Arfaeth',
        'Accepted' => 'Derbyniwyd',
        'Rejected' => 'Gwrthodwyd',
        'pc' => 'PC',
        'tablet' => 'Tabled',
        'phone' => 'Ffon',
        'total' => 'Cyfanswm',
        'view-detail' => 'Gweld manylion',
        'empty' => 'Gwag',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Ateb',
        'reactions' => 'Adweithiau',
        'Comments' => 'Sylwadau',
        'last-comment' => 'Sylw olaf',
        'response-to' => 'Ymateb i',
        'posts' => 'Pyst',
        'post' => 'Post',

        'name' => 'Enw',
        'email' => 'Ebost',
        'type' => 'math',
        'device' => 'Dyfais',
        'platform' => 'Platfform',
        'browser' => 'Porwr',
        'time' => 'Amser',
        'Wallet' => 'Waled',
        'date' => 'Dyddiad',

        'account' => 'Cyfrif',
        'transaction' => 'Trafodyn',
        'fee' => 'Ffi',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bil',
        'category' => 'Categori',
        'password' => 'Cyfrinair',
        'verify-login' => "Dilysu a Mewngofnodi",
        'url' => 'URL',
        'avocado' => 'Afocado',
        'hyper' => 'Hyper',
        'buy-now' => "Prynwch nawr",
        'add-domain' => "Add Domain",
        'views' => 'Golygfeydd',


        'country' => 'Gwlad',
        'address' => 'cyfeiriad',
        'postal' => 'Côd Post',
        'building_no' => 'Adeilad #',
        'building_unit' => 'Uned #',
        'message' => 'Neges',


        'customer' => 'Cwsmer',
        'cart-items' => 'Eitemau cert',
        'payment' => 'Taliad',
        'receiver' => 'Derbynnydd',
        'virtual-items' => 'Eitemau rhithwir',
        'no-payment' => 'Dim taliad!',

        'enable' => 'Galluogi',
        'access' => 'Mynediad',
        'bank' => 'Gwybodaeth banc',

        'vendor' => 'Gwerthwr',

        'view_content' => "Gweld cynnwys llawn",
        'files' => 'Ffeiliau',
        'download' => 'Lawrlwythwch',
        'file_name' => 'Enw Ffeil',
        'file_size' => 'Maint',

        'subscription' => 'Tanysgrifiad',
        'products' => 'Cynhyrchion',
        'vendor_products' => 'Cynhyrchion Gwerthwr',

        'pickup' => 'Pickup',

        'minutes' => 'Munudau',
        'hours' => 'Oriau',

        'refund' => 'Ad-daliad',
        'recipient_address' => 'Cyfeiriad y Derbynnydd',
        'signature' => 'Llofnod',
        'blockchain' => 'Blockchain',
        'details' => 'Manylion',


    

        'Shop' => 'Siop',
        'dashboard' => 'dangosfwrdd',
        'comments' => 'sylwadau',
        'wallet' => 'waled',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Adroddiad Perfformiad Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Adroddiad Tymhorol Selldone'
        ],
        'Onboarding' => [
            'id' => 'helo',
            'name' => 'Cymeradwyo, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Cefnogi :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'helo',
            'name' => 'Cymuned, Selldone'
        ],
        'NewShop' => [
            'id' => 'masnachwyr',
            'name' => 'Cymeradwyo, Selldone'
        ],
        'Approve' => [
            'id' => 'cymeradwyo',
            'name' => 'Cymeradwyo, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Rheoli Gorchmynion :name'
        ],

        'Recovery' => [
            'id' => 'adferiad',
            'name' => 'Tîm Adfer Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Yn aros ⌛',
        'PAYED' => 'Talwyd ✅',
        'CANCELED' => 'Wedi\'i ganslo ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Gweinyddwr',
            'OFFICER' => 'Swyddog a Goruchwyliwr',
            'AUDITING' => 'Rheolwr archwilio',
            'EMPLOYEE' => 'Gweithiwr',
            'PRODUCT' => 'Rheolwr cynhyrchion',
            'CONTENT' => 'Rheolwr cynnwys',
            'MARKETING' => 'Rheolwr marchnata',
            'VIEWER' => 'Gwyliwr',

        ],
        'subject' => "Gwahoddodd :inviter chi fel :level| :shop",
        'category' => "Gwahoddiad staff",
        'title' => "Rydych chi wedi'ch gwahodd i <b>:shop_name</b> fel <b>:level</b>.",
        'message' => "Rydych chi wedi derbyn gwahoddiad i gydweithio â thîm <b>:shop_title</b> mewn busnes. Mae gennych yr opsiwn i dderbyn neu wrthod y cynnig hwn. Os byddwch yn dewis derbyn, mewngofnodwch i'r gwasanaeth Selldone i gadarnhau eich penderfyniad. Ar ôl cadarnhau, byddwch yn cael mynediad i'r adran rheoli siop.",

    ],

    'welcome-email' => [
        'subject' => "👋 Croeso i :name, Gadewch i ni Dechrau Arni gyda Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Croeso i Selldone",
        'message' => "Diolch am ddewis Selldone, Rydych chi bellach yn rhan o gymuned Soldone sy'n cysylltu gwerthwyr byd-eang â chwsmeriaid, Busnes lleol i fenter, Unigolyn i gorfforaeth! Mae'r holl offer meistr a pro wedi'u darparu **am ddim** a **diderfyn** i chi. Rydych chi'n ceisio, rydyn ni'n agor y drysau, Just Do It!",

        'index' => "Cam :step.",

        'step-domain' => [
            'title' => 'Ychwanegu Eich Parth Personol',
            'message' => "I ddechrau, ychwanegwch eich parth personol am ddim yn y Dangosfwrdd Siop o dan Gosodiadau> Gosodiadau Parthau.",
            'action' => 'Rheoli Fy Mharthau',
        ],
        'step-landing' => [
            'title' => 'Addasu Eich Tudalen Gartref',
            'message' => "Personoli'ch tudalen gartref trwy fynd i Dangosfwrdd > Tudalennau. Dewiswch dudalen lanio neu crëwch un newydd. Mae'n hawdd ac yn reddfol, a gallwch chi ddechrau gweithio arno ar unwaith.",
            'action' => 'Addasu Fy Nhudalen Glanio',
        ],
        'step-payment' => [
            'title' => 'Sefydlu Dulliau Talu',
            'message' => "Dechreuwch dderbyn taliadau yn uniongyrchol i'ch cyfrif banc. I gysylltu eich darparwyr taliadau fel Stripe, PayPal, a mwy, ewch i Dashboard> Accounting> Gateway.",
            'action' => 'Ychwanegu Dulliau Talu',
        ],
        'step-products' => [
            'title' => 'Ychwanegu Eich Cynhyrchion',
            'message' => "Ychwanegwch gynhyrchion a chategorïau yn hawdd yn y Dangosfwrdd > Cynhyrchion. Mae'n union fel rheoli ffeiliau a ffolderi ar eich cyfrifiadur - yn barod llusgo a gollwng. Gallwch hefyd fewnforio cynhyrchion swmp gan ddefnyddio Excel. Mae templed enghreifftiol ar gael i'ch helpu i ddechrau arni.",
            'action' => 'Rheoli Fy Nghynhyrchion',
        ],
        'step-shipping' => [
            'title' => 'Dulliau Llongau Gosod',
            'message' => "I godi tâl ar gwsmeriaid am gludo, diffiniwch eich dulliau cludo yn y Dangosfwrdd> Logisteg> Llongau. Gallwch osod prisiau a chefnogaeth wahanol ar gyfer gwahanol leoliadau. Peidiwch ag anghofio gosod tarddiad eich warws yn Dangosfwrdd> Logisteg> Warws.",
            'action' => 'Rheoli Dulliau Llongau',
        ],
    

        'seller' => [
            'title' => 'Ydych chi\'n werthwr?',
            'message' => 'I ddechrau gwerthu, nodwch eich dangosfwrdd yn Soldone trwy\'r ddolen isod a chreu eich siop gyntaf yn hollol rhad ac am ddim. Bydd hyn yn cymryd ychydig funudau a bydd gennych eich siop eich hun a gwefan ar-lein. Yna byddwn yn eich arwain at y camau nesaf a chael y porth talu.',
            'action' => 'Mewngofnodi i fy dangosfwrdd',
        ],
        'buyer' => [
            'title' => 'Rwy\'n brynwr',
            'message' => 'Llongyfarchiadau. Unwaith y byddwch yn aelod o Soldone, byddwch yn cael gwared ar yr holl drafferthion o aelodaeth a dilysu mewn siopau ar-lein. Er mwyn elwa o unrhyw siop a gwefan sy\'n defnyddio platfform Selldone, gallwch fewngofnodi gydag un clic a gwneud eich pryniant yn syml, yn gyflym ac yn ddiogel.',
        ],
    ],


    'charge-account' => [
        'category' => 'Waled > Cyfrif > Tâl',
        'title' => "Tâl Llwyddiant",
        'message' => "Mae eich cyfrif <b>:account_number</b> wedi'i godi ar <b>:amount</b> yn llwyddiannus.",
        'account' => 'Cyfrif',
        'charge' => 'Tâl',
        'balance' => 'Cydbwysedd',
        'footer' => "Gwneud busnes yn hawdd, yn gyraeddadwy, ac yn hygyrch i unrhyw un ledled y byd."
    ],

    'verify-email' => [
        'subject' => "🙌 Cwblhewch eich cofrestriad i Selldone! Gwirio dolen.",
        'category' => "RYDYCH CHI UN CAM I Ffwrdd",
        'title' => "Gwiriwch eich cyfeiriad e-bost",
        'message' => "Helo :name,<br><br>Diolch am ddewis Selldone!<br><br>I gadarnhau mai <b>:email</b> yw eich cyfeiriad e-bost cywir, cliciwch ar y botwm isod neu defnyddiwch y ddolen a ddarperir. Mae gennych 48 awr i gwblhau'r dilysiad hwn.",
        'footer' => "Os ydych chi'n cael trafferth clicio ar y botwm Gwirio, copïwch a gludwch yr URL isod i'ch porwr gwe: :activation_url",
        'next-step' => "Nesaf, byddwn yn anfon rhai deunyddiau defnyddiol atoch a chanllaw cam wrth gam i'w gwneud hi'n hawdd i chi ychwanegu eich parth arferol, sefydlu taliadau, ychwanegu cynhyrchion, a chael eich archeb gyntaf.",

    ],
    'verify-email-code' => [
        'subject' => "Cod dilysu ar gyfer :name",
        'category' => "SECURITY",
        'title' => "Cod dilysu e-bost",
        'message' => "Helo :name, <br><br>I gadarnhau mai <b>:email</b> yw eich cyfeiriad e-bost cywir, rhowch y cod canlynol o fewn y <b>10 minutes</b> nesaf:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Mae Eich Siop Yn Barod| :name",
        'category' => "RYDYCH CHI UN CAM I Ffwrdd",
        'title' => "Cwblhawyd y gosodiad",
        'account_title' => "Eich cyfrif",
        'account_msg' => "Dilyswch a mewngofnodwch i'ch cyfrif gyda'r wybodaeth hon.",
        'shop_msg' => "Gwybodaeth cyfrif ar system weithredu busnes Selldone.",

    ],

    'reset2fa' => [
        'category' => "NEGES SWYDDOGOL DIOGELWCH",
        'title' => "Cais analluogi mewngofnodi 2-gam",
        'message' => "Rydych yn derbyn yr e-bost hwn oherwydd i ni dderbyn cais i ailosod dilysiad dau-ffactor ar gyfer cyfrif **:name** gyda **:email** email.<br><br>QDdarganfuwyd y manylion canlynol ar gyfer eich cyfrif:",
        'footer' => "Os na wnaethoch ofyn am ailosod cyfrinair, nid oes angen unrhyw gamau pellach.",
        'action' => 'Analluogi mewngofnodi dau gam',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Mae eich siop yn barod nawr!",
        'category' => "GENI STORFA AR-LEIN NEWYDD YN Y BYD",
        'title' => "Llongyfarchiadau, :name!",
        'message' => "<b>Congratulations, :name! Mae eich busnes ar-lein newydd bellach yn fyw!</b> Rydym yn gyffrous i'ch croesawu i gymuned Selldoners. Rydych chi wedi cymryd y cam cyntaf tuag at lwyddiant, ac rydyn ni yma i'ch helpu chi bob cam o'r ffordd.<br>Nawr bod eich siop yn barod, gadewch i ni wneud yn siŵr eich bod yn barod i dderbyn taliadau yn uniongyrchol gan eich cwsmeriaid a dechrau tyfu eich ymerodraeth. Os oes angen help arnoch chi, dim ond neges i ffwrdd ydyn ni - mae ein tîm cymorth bob amser yma i chi. Byddwn yn eich arwain trwy bob cam i gael eich siop i redeg yn ddi-dor.",
        'pdf-book' => "Peidiwch â cholli'r llawlyfr atodedig: Gwnewch Eich Busnes Fel Gêm",

        'account' => [
            'title' => 'Cam 1: Creu cyfrif yn y waled Selldone',
            'message' => "I ddechrau, crëwch gyfrif yn eich waled Selldone. Dyma lle bydd eich ffioedd yn cael eu tynnu, a dyma hefyd lle byddwch chi'n ychwanegu at eich siop i redeg yn esmwyth. Os bydd eich cydbwysedd byth yn mynd yn negyddol, peidiwch â phoeni! Bydd eich siop yn parhau i weithredu heb ymyrraeth.",
            'action' => 'Mewngofnodi i\'r waled',
        ],

        'shop-account' => [
            'title' => 'Cam 2: cysylltu y cyfrif i\'r siop',
            'message' => "Nesaf, cysylltwch eich cyfrif waled â'ch siop. Ewch i <b>Store > Cyfrifyddu > Anfoneb</b>, a chysylltwch eich waled. Mae hyn yn sicrhau bod holl daliadau cwsmeriaid yn cael eu hadneuo'n uniongyrchol i'ch cyfrif banc - nid yw Selldone yn tynnu unrhyw symiau o'ch enillion.",
            'action' => 'Panel Anfoneb Store',
        ],

        'gateway' => [
            'title' => 'Cam 3: Cysylltu Porth Talu Ar-lein',
            'message' => "Nawr, gadewch i ni sefydlu'ch porth talu ar-lein. Ewch i <b>Store > Accounting > Port</b> a chliciwch ar <b>Add New Port</b>. Dewiswch eich arian cyfred, a byddwch yn gweld rhestr o byrth talu sydd ar gael. Mae cysylltu porth yn gyflym ac yn hawdd, ond os oes angen unrhyw help arnoch, mae croeso i chi wirio'r canllawiau Selldone neu estyn allan atom.",
            'action' => 'Ychwanegu porth i\'r siop',
        ],

        'domain' => [
            'title' => 'Cam olaf: cysylltu parth pwrpasol',
            'message' => "Byddwch yn gallu cael eich storfa ar gynifer o barthau ag y dymunwch. I gysylltu parth pwrpasol â siop, mae angen i chi gael trwydded cychwyn o leiaf. Trwy gyflwyno pob ffrind i Soldone, byddwch yn derbyn cerdyn rhodd trwydded cychwyn un mis. Bydd canran o daliadau eich ffrindiau hefyd yn cael ei gredydu i gyfrifon eich cwsmeriaid.",
            'action' => 'Cyflwyno a derbyn cardiau rhodd diderfyn',
        ],
    ],


    'basket-list' => [
        'item' => "eitem",
        'count' => "Cyfri",
        'price' => "pris",
        'discount-code' => "Cod Disgownt",
        'customer-club' => 'Clwb Cwsmer',
        'shipping' => "Llongau",
        'total' => "Cyfanswm",
        'offer' => "Cynnig",
        'coupon' => "Cwpon",
        'lottery' => "Gwobr",
        'tax' => "Treth",
        'tax_included' => "Yn gynwysedig yn y pris",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Dull',
        'amount' => 'Swm',
        'giftcard' => 'Gift card',
        'payment' => 'Taliad',
    ],


    'shop-subscription-email' => [
        'category' => "Diweddariad tanysgrifiad",
        'title' => "Trwydded Siop: :shop_title",
        'title-reserved' => "Trwydded cadw: :shop_title",
        'title-active' => "Trwydded weithredol: :shop_title",
        'title-finished' => "Trwydded orffenedig: :shop_title",
        'title-cancel' => "Canslo trwydded: :shop_title",
        'message' => "Diweddarwyd eich cynllun trwydded siop,",
        'RESERVED' => "⚡ Mae eich cynllun tanysgrifio wedi'i **gadw**.",
        'ACTIVE' => "🟢 Mae eich cynllun tanysgrifio wedi'i **actifadu**.",
        'FINISHED' => "🚧 Mae eich cynllun tanysgrifio **wedi'i orffen**.",
        'CANCEL' => "⛔ Mae eich cynllun tanysgrifio wedi'i **ganslo**.",
    ],

    'support' => [
        'subject' => "Canolfan Gymorth|Atebodd :name",
        'category' => "Canolfan cymorth",
        'title' => "Cawsoch ymateb",
        'action' => "Agor gweinydd siop",
    ],

    'shop-customer-join' => [
        'subject' => "Ymunwch â :shop_title",
        'category' => "Dathliad cwsmer newydd",
        'title' => "Rydym yn falch o'ch aelodaeth",
        'action' => "Ymwelwch nawr",
    ],

    'shop-vendor-join' => [
        'subject' => "Arfyrddio Gwerthwr| :shop_title",
        'category' => "Dathliad gwerthwr newydd",
        'title' => "Rydym yn falch o'ch aelodaeth",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Cerdyn Rhodd :shop_title",
        'category' => "Ychwanegu cerdyn newydd",
        'title' => "Llongyfarchiadau, rydych chi wedi derbyn cerdyn anrheg",
        'action' => "Siop nawr",
        'message' => "Rydych wedi derbyn cerdyn rhodd yn y swm o :balance :currency. Byddwch yn gallu prynu o'n siop gyda'r cerdyn rhodd hwn.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Canolfan Gymorth| :shop",
        'category' => "cefnogaeth",
        'title' => "Cawsoch ymateb",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Cadarnhad Archeb|Gorchymyn :order_id",
        'title' => "trefn",
        'message' => "Rydych chi wedi gosod archeb yn ein siop. Cawsom eich archeb a byddwn yn anfon e-bost arall atoch unwaith y bydd y taliad wedi'i gadarnhau."
    ,

        'payments' => 'Taliadau',
    ],

    'order-payment' => [
        'subject' => "🛍️ Cadarnhad Taliad|Gorchymyn :order_id",
        'title' => "Gorchymyn talu",
        'message' => "Eich taliad wedi'i gwblhau,<br> Mae gennym eich archeb. Byddwn yn anfon e-bost arall atoch pan fydd eich archeb yn mynd.",
    

        'payments' => 'Taliadau',
    ],

    'order-update' => [
        'subject' => "🛍️ Diweddariad Statws Archeb|Gorchymyn :order_id",
        'title' => "Diweddariad Statws Archeb",
        'message' => "Mae eich archeb wedi'i diweddaru. Gallwch wirio statws diweddaraf yr archeb hon yn eich cyfrif.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Mae eich archeb yn y ciw ar gyfer prosesu. Byddwn yn eich hysbysu pan fydd yn cael ei baratoi.",
                'OrderConfirm' => "Cadarnheir eich archeb ac mae'r paratoi wedi dechrau.",
                'PreparingOrder' => "Mae eich archeb yn cael ei baratoi a bydd yn cael ei anfon yn fuan.",
                'SentOrder' => "Mae eich archeb wedi'i gludo. Byddwch yn ei dderbyn yn fuan.",
                'ToCustomer' => "Mae eich archeb wedi'i danfon. Gobeithio y gwnewch chi fwynhau!",

                'PreparingOrder-PICKUP' => "Mae eich archeb yn cael ei pharatoi. Byddwch yn derbyn hysbysiad pan fydd yn barod i'w gasglu.",
                'SentOrder-PICKUP' => "Mae eich archeb yn barod i'w gasglu. Dewch i'r siop i'w gasglu.",
                'ToCustomer-PICKUP' => "Mae'ch archeb wedi'i chasglu. Gobeithio y gwnewch chi fwynhau!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Mae eich archeb yn y ciw ar gyfer prosesu. Byddwn yn eich hysbysu pan fydd yn barod.",
                'OrderConfirm' => "Mae eich archeb wedi'i chadarnhau ac mae'r gwaith paratoi ar y gweill.",
                'PreparingOrder' => "Mae eich archeb yn cael ei baratoi a bydd yn cael ei anfon atoch yn fuan.",
                'ToCustomer' => "Mae eich archeb rithwir wedi'i hanfon i'ch cyfrif. Diolch!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Mae eich cais am wasanaeth yn y ciw. Byddwn yn eich hysbysu pan fyddwn yn dechrau.",
                'OrderConfirm' => "Mae eich gwasanaeth wedi'i gadarnhau ac rydym yn paratoi i ddechrau.",
                'PreparingOrder' => "Rydym yn paratoi eich gwasanaeth, a byddwn yn eich hysbysu unwaith y bydd wedi'i gwblhau.",
                'ToCustomer' => "Mae eich gwasanaeth yn gyflawn. Diolch am ein dewis ni!"
            ],
            'FILE' => [
                'PreparingOrder' => "Mae eich ffeil yn cael ei pharatoi a bydd ar gael yn fuan.",
                'ToCustomer' => "Mae'ch ffeil yn barod ac wedi'i danfon. Gallwch nawr ei lawrlwytho."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Mae eich archeb tanysgrifio yn y ciw. Byddwn yn eich hysbysu pan fydd y prosesu'n dechrau.",
                'OrderConfirm' => "Mae'ch tanysgrifiad wedi'i gadarnhau ac yn cael ei osod.",
                'PreparingOrder' => "Rydym yn paratoi eich tanysgrifiad a bydd yn cychwyn yn fuan.",
                'SentOrder' => "Mae eich tanysgrifiad wedi'i actifadu. Byddwch yn derbyn diweddariadau parhaus.",
                'ToCustomer' => "Mae eich gwasanaeth tanysgrifio wedi'i actifadu'n llwyddiannus."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Llongyfarchiadau :name | Taleb newydd: :title',
        'category' => "LLONGYFARCHIAD, TALEB NEWYDD",
        'message' => "Hei :name, <br><br>Rydych chi wedi derbyn taleb newydd fel anrheg gennym ni! Gallwch ennill hyd yn oed mwy o dalebau trwy gyflwyno Selldone i'ch ffrindiau a phawb rydych chi'n eu hadnabod. Mae'r daleb hon yn werth **:price :currency**.<br><br>Rydych chi wedi cymryd y cam cyntaf, ac rydym yma i'ch helpu i ddatgloi nodweddion newydd gyda'ch taleb! Mewngofnodwch gyda **:email** a dewch o hyd i'ch taleb yn y Siop **Dashboard** > **Gosodiadau** > **Trwydded**.<br><br>Congratulations!",
        'action' => "Fy dangosfwrdd",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Llongyfarchiadau, Annwyl :name | Rydych chi wedi derbyn anrheg',
        'category' => "Cyhoeddiad o dderbyn anrheg",
        'title' => "Anrhegion i chi",
        'message' => "Helo :name, rydym yn gyffrous i roi gwybod ichi eich bod wedi derbyn anrheg arbennig gan Selldone! 🎉 Gallwch chi ennill mwy o anrhegion trwy aros yn egnïol, tyfu'ch siop, a gwella'ch arbenigedd ar Selldone. I wirio'ch anrheg, mewngofnodwch gyda :email a chwiliwch amdano yng nghornel dde uchaf eich dangosfwrdd.<br><br>Mae'r anrheg yn werth **:price :currency**, a gallwch ei adneuo'n hawdd yn eich waled o fewn Selldone.QQ0Q009 uwchraddio eich anrheg trwydded siop a datgloi offer hyd yn oed yn fwy pwerus i roi hwb i'ch busnes ar-lein!",
        'action' => "Anrhegion",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Archeb Newydd wedi ei Dderbyn| :order_id",
        'title' => "New Order",
        'message' => "Rydych chi wedi derbyn archeb newydd. Ewch i'r dudalen prosesu archeb yn eich siop.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Eich Gwybodaeth Wedi\'i Llenwi',
        'output-form-title' => 'Gwybodaeth eitem a brynwyd',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Adroddiad Wythnosol :time',
        'title' => 'Adroddiad perfformiad siop wythnosol',
        'message' => "Dyma adroddiad wythnosol eich siop o <b>:start</b> i <b>:end</b>. Mae'r adroddiad hwn yn cynnwys awgrymiadau ar gyfer gwella'ch busnes, gallwch hefyd wirio statws eich siop ar-lein ac archebion diweddar. Gobeithio bod gennych ddiwrnod ac wythnos dda o'ch blaen."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Eich adroddiad arbed :amount yn ystod y tri mis diwethaf| :shop_title',
        'title' => 'Adroddiad tymhorol am eich gweithgaredd busnes, gwobrau ac arbedion ariannol',
        'message' => "Dyma'ch adroddiad tymhorol <b>:shop_title</b> o <b>:start</b> i <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Cyfrifon cysylltiedig',
        'sub-title' => 'Beth yw statws diweddaraf cyfrifon waled sy\'n gysylltiedig â\'m siop?',
        'view-wallet' => 'Gweld waled',
        'tip-title' => 'Awgrymiadau pwysig',
        'tip' => "Sefydlu waled Selldone am ddim a'i gysylltu â'ch siop. Hyd yn oed os yw'ch balans yn negyddol, gall eich cwsmeriaid barhau i siopa a thalu heb unrhyw broblemau. Peidiwch â phoeni, bydd gweithrediadau a data eich siop yn parhau'n esmwyth am hyd at 1 mis, heb unrhyw ymyrraeth.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Cysylltwch â\'r cyfrif'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apiau wedi\'u gosod',
        'sub-title' => 'Rhestr o apiau rydych chi wedi\'u gosod yn eich siop yr wythnos hon.',
        'tip' => "Ydych chi eisiau dod o hyd i fwy o apiau ar gyfer eich siop?",
        'view-app-store' => 'Ewch i App Store Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Eich Store Bots',
        'sub-title' => 'Bots gwerthu gweithredol yn fy siop.',
        'tip-title' => 'Arwerthiant Bot',
        'tip' => "Mae Selldone yn cynnig bots gwerthu awtomataidd i chi. Yn syml, gweithredwch nhw trwy ymweld â'r adran Ychwanegion> Bots. Sicrhewch fod y gwasanaethau gofynnol ar gael yn eich ardal er mwyn iddynt weithredu'n ddidrafferth.",
        'view-bots' => 'Rheoli bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Cyfathrebu â Chwsmeriaid',
        'sub-title' => 'Faint o gysylltiadau rydw i wedi\'u cael gyda\'m cleientiaid yr wythnos hon?',
        'faqs' => 'Cwestiynau Cyffredin',
        'tickets' => 'Tocynnau Cwsmer',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Statws Defnyddiwr',
        'sub-title' => 'Gweithgaredd o :start i :end',
        'users' => [
            'title' => 'Cwsmeriaid',
            'subtitle' => 'Defnyddwyr Cofrestru',
        ],
        'views' => [
            'title' => 'Ymweliadau',
            'subtitle' => 'Sawl gwaith ydych chi wedi ymweld â\'r siop',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Defnyddwyr a Ddychwelwyd',

        'shop_views' => 'Golygfeydd Siop',
        'baskets' => [
            'title' => 'Certi Siopa',
            'subtitle' => 'Rhoi gwybod am nifer y troliau siopa newydd',
        ],
        'products' => [
            'title' => 'Cynnyrch Trosolwg',
            'subtitle' => 'Statws cynhyrchion yn y siop yn ôl math',
            'value_name' => 'Cynhyrchion'
        ],
        'products_count' => 'Mathau o gynnyrch',
        'views_count' => 'Gweld cyfrif',
        'sell_count' => 'Gwerthu cyfrif',
        'send_count' => 'Cyfrif cludo',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Galw Heibio Llongau',
        'sub-title' => 'Panel ar gyfer prif werthwyr Drop Shipping Selldone.',
        'total_fulfillments' => 'Cyfanswm yr Archebion a Dderbyniwyd',
        'ds_count' => 'Gorchmynion a Dderbyniwyd',
        'statistics_title' => 'Adroddiad wedi derbyn archebion',
        'ds_cancels' => 'Canslo gan werthwr rhyngwyneb',
        'ds_rejects' => 'Canslo gennych chi',
        'tip' => "Ydych chi'n brif werthwr nwyddau? Ydych chi'n berchen ar warws, ffatri neu ddosbarthwr cynhyrchion? Gallwch gynnig eich cynhyrchion i werthwyr eraill yng ngwasanaeth Selldone Drop Shipping i werthu'ch cynnyrch ar raddfa fawr. Anfonwch e-bost atom yn support@selldone.com i'ch arwain.",
        'view-drop-shipping-panel' => 'Mewngofnodi i\'r panel cyfanwerthu',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Cyfraddau Cyfnewid',
        'sub-title' => 'Rhestr o\'r cyfraddau trosi arian cyfred diweddaraf yn eich siop.',
        'from' => 'Arian Ffynhonnell',
        'to' => 'Arian cyfred cyrchfan',
        'rate' => 'Cyfradd trosi',
        'view-exchange-panel' => 'Rheoli Cyfraddau Cyfnewid',
    

        'vew-exchange-panel' => 'panel rheoli cyfradd gyfnewid',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contractau arbenigol',
        'sub-title' => 'Pa weithwyr proffesiynol sy\'n gweithio yn fy siop?',
        'cost' => 'Swm y contract',
        'duration' => 'Hyd',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dyddiad Canslo',
        'end_at' => 'Dyddiad dosbarthu',
        'tip' => 'Gallwch logi\'r arbenigwyr gorau yn Selldone i ddatblygu\'ch busnes.',
        'view-experts' => 'Cliciwch i gychwyn arni.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Pyrth Talu Gweithredol ar Eich Siop :shop',
        'tip-title' => 'Awgrymiadau pwysig',
        'tip' => "Ewch i'r dudalen rheoli porth yn eich siop ac ychwanegwch o leiaf un porthladd mewn ychydig funudau. Mae eich cwsmeriaid yn hoffi talu'n gyflym ac yn ddiogel trwy byrth ar-lein.",
        'view-shop-gateways' => 'Mewngofnodi i\'m rheolaeth porth siop.',
        'view-gateways' => 'Gweld mwy o byrth',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Archebion',
        'sub-title' => 'Rhestr o archebion a gefais yr wythnos hon.',
        'total_baskets' => 'Cyfanswm Archebion',
        'total_posBaskets' => 'Cyfanswm Archebion Arian Parod',
        'pos-title' => 'Blwch Siop POS',
        'chart-label' => 'Archebion wedi\'u cwblhau (nid yw\'r archebion hyn o reidrwydd yn cael eu talu!)',
        'tip-title' => 'Dylech ymdrechu\'n galetach ...',
        'tip' => "Dim llwyddiant syml.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Canolfan Brosesu',
        'sub-title' => 'Faint o archeb wnaethon ni ei brosesu yn y siop yr wythnos hon?',
        'tip-title' => 'Nid oedd gennych arwerthiant!',
        'tip' => "Yn anffodus nid oedd gennych unrhyw werthiant yr wythnos hon. Mae angen i chi gael mwy i'ch siop. Gallwch ychwanegu mwy o gynhyrchion, dewis delweddau gwell neu ysgrifennu disgrifiadau gwell ar gyfer eich cynhyrchion. Ystyriwch swydd amser llawn ar gyfer eich busnes. Os gwnewch bethau'n iawn a pheidiwch â mynd yn rhwystredig, byddwch yn llwyddo.",
        'view-process-center' => 'Gweld canolfan broses',
        'return' => [
            'title' => 'Archeb Dychweledig',
            'subtitle' => 'Rhoi gwybod am orchmynion a ddychwelwyd.',
            'tip-title' => 'Oeddech chi\'n gwybod bod...',
            'tip' => "Gallwch greu cymaint o gofrestrau arian parod ag sydd eu hangen arnoch gyda Selldone POS! P'un a yw'n tabled, ffôn symudol, neu liniadur, gallwch droi unrhyw ddyfais yn bwynt gwerthu eich siop. Mae'n syml, yn gyflym i'w sefydlu, ac wedi'i baratoi'n llawn ar gyfer eich gweinydd. Dechreuwch ei ddefnyddio heddiw!",
            'view-pos' => 'Mewngofnodi i Fy Ariannwr Siop Ar-lein'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesiynau',
        'sub-title' => 'Sawl gwaith wnes i ymweld â fy siop?',
        'countries-title' => 'Pa wledydd yr ymwelwyd â hwy fwyaf?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ydych chi eisiau gwneud arian heb wario un byc?',
        'message' => "Helo :name, mae'n bryd dechrau ennill gyda Selldone! Ewch i'r Dangosfwrdd > Mwy > Ariannu > Cael Eich Dolen Atgyfeirio. Rhannwch y ddolen gyda'ch ffrindiau, ac ennill cardiau rhodd a chyfran o'u taliadau. Y rhan orau? Rydych chi a'ch ffrind yn cael cerdyn anrheg!",
        'action' => 'Gweld fy nghysylltiad cyflwyniad',
        'mail-clip' => "<b style='color: #C2185B'>Pwysig:</b> Os ydych chi'n defnyddio gwasanaethau e-bost fel Gmail sy'n cyfyngu ar hyd yr e-bost, dewch o hyd i'r opsiwn canlynol ar ddiwedd yr e-bost i arddangos yr adroddiad llawn a chliciwch arno:",

        'no-coin-reward' => "<b style='color: #C2185B'>Mae'n ddrwg gennym:</b> Nid oedd eich gweithgaredd yn bodloni'r gofyniad i gael gwobr Darnau Arian SEL am ddim. Ceisiwch yn galetach a gwerthwch fwy yn eich siop ar gyfer y tymor nesaf.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Llongyfarchiadau:</b> Gwaith gwych! Based on your outstanding performance, we've credited :amount SEL Coins to your account as a reward.",

        'need-buy-license' => "<b>Level Up Your Business: </b> Mae'n edrych fel nad ydych wedi cofrestru unrhyw gynllun tanysgrifio ar gyfer eich gwefan eto! Uwchraddio nawr i ddatgloi mwy o nodweddion ar gyfer :amount y mis yn unig os telir yn flynyddol.",
        'not-afford-message' => "Os na allwch fforddio neu os cewch unrhyw drafferth gyda thaliad, mae croeso i chi ddweud wrthym trwy support@selldone.com.",
        'add-domain' => "<b>Beth am gael parth wedi'i deilwra ar gyfer eich busnes?</b><br> Ychwanegwch barth i'ch gwefan nawr; mae'n rhad ac am ddim!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone yn a<del> cynnyrch</del> <span style = 'color: forestgreen'>cymuned</span> .<br> Byddwch yn Gwerthwr proffesiynol!",
        'message' => "Dilynwch dudalennau swyddogol y Selldone ar Twitter, LinkedIn a rhwydweithiau cymdeithasol. Anfonwch unrhyw sylwadau, ceisiadau neu feirniadaeth atom neu cymerwch ran mewn trafodaethau am y Selldone. Rydym hefyd yn rhan o gymuned Selldone a <b>wnewch</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Gorchmynion Afocado Newydd wedi\'u Derbyn|:shop_title :time',
        'title' => "Adroddiad perfformiad am y 24 awr ddiwethaf",
        'message' => "Mae eich cwsmeriaid yn aros i'ch archebion gael eu hadolygu a'u prisio. Ymatebwch i geisiadau eich cwsmeriaid cyn gynted â phosibl i gael mwy o werthiannau.",
        'card_title' => "Archebion yn y ciw",
        'card_subtitle' => "Ers :date",

        'card_payed' => "Archebion taledig"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Ymateb i\'ch post yn :community_title',
        'title' => "Mae :name a :count eraill wedi ymuno â'r sgwrs ar eich postiadau!",
        'message' => "Helo :name, mae eich swyddi yn cael sylw! Rydych chi wedi derbyn sylwadau yn ein cymuned. Mewngofnodwch i'ch cyfrif i ymuno â'r drafodaeth a gweld beth mae pawb yn ei ddweud.",
        'title-simple' => "Mae :name wedi gwneud sylwadau ar eich post!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Ymateb i\'ch pwnc :topic_title',
        'title' => "Atebodd :name, a :count eraill ar eich pwnc.",
        'message' => "Helo :name, mae eich pwnc yn cael sylw! Rydych chi wedi derbyn atebion yn ein cymuned. Mewngofnodwch i'ch cyfrif i ymuno â'r drafodaeth a gweld beth mae pawb yn ei ddweud.",
        'title-simple' => "Atebodd :name ar eich pwnc.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Mewngofnodi Newydd :name',
        'category' => 'Hysbysiadau diogelwch',
        'title' => "Mewngofnodi i'r Cyfrif",
        'message' => "Annwyl :name, canfuwyd mewngofnodi i'ch cyfrif Selldone.",   // Login in selldone (seller)
        'message-shop' => "Annwyl :name, canfuwyd mewngofnodi i :shop_title.",  // Login in shop (buyer)

        'footer' => "Os nad ydych wedi mewngofnodi, newidiwch eich cyfrinair.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Tynnu'n ôl",
        'deposit' => "Blaendal",

        'withdraw_subject' => "Tynnu'n ôl o gyfrif :account",
        'deposit_subject' => "Blaendal i gyfrif :account",

        'message' => "Mae'r trosglwyddiad arian wedi'i wneud gyda'r manylebau canlynol.",

        'type' => "Math o drafodiad",

        'from' => "Cyfrif ffynhonnell",
        'to' => "Destination account",

        'desc' => "Disgrifiad o'r trafodiad",
        'action' => "Gweld trafodiad",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Pwysig! Torri rheolau| :shop",
        'category' => "Hysbysu critigol",
        'title' => "Mae eich siop wedi cael ei chosbi",
        'action' => "Dangosfwrdd siop agored",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => "Mae :inviter wedi eich gwahodd i ymuno â Selldone",
        'title' => "Mae :name wedi anfon :amount atoch i helpu i lansio'ch siop ar-lein newydd a'i hariannu!",
        'message' => "Helo **:receiver_name**,<br><br>Croeso i Selldone! Ar Selldone, gallwch chi greu eich gwefan e-fasnach, blog, cymuned ar-lein yn hawdd, a hyd yn oed sefydlu system POS ar-lein ar gyfer gwerthiannau personol - i gyd o fewn munudau. Dyma'r system weithredu busnes ar-lein gyflawn sydd wedi'i chynllunio i wneud eich busnes yn well, yn gyflymach ac yn haws i'w redeg.<br><br>Sign up by <b>:date</b> a derbyn taleb :amount i ddechrau!",
        'accept' => "Derbyn gwahoddiad",
        'owner' => "Perchennog",
        'join-date' => "Ymunodd Selldone ymlaen",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Dolen adfer| :shop",
        'category' => "Diogelwch siop",
        'title' => "Dolen adfer storfa o <b>:shop_name</b>.",
        'message' => "Anfonwyd yr e-bost hwn atoch oherwydd eich bod wedi gofyn am adfer eich storfa. Bydd clicio ar y ddolen isod yn adennill eich siop a'r holl ddata sy'n perthyn iddo.",
        'action' => "Cadarnhau Adfer Siop",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Faint o arian wnaeth Selldone ei arbed i\'ch busnes?',
        'sub-title' => 'O\'r dyddiad :start i :end',
        'infrastructure' => [
            'title' => 'Isadeiledd',
            'subtitle' => 'Gweinyddwyr, CDN, Storio, a gwasanaethau cwmwl eraill',
        ],
        'experts' => [
            'title' => 'Arbenigwyr a Staff',
            'subtitle' => 'Datblygwyr, cynnal a chadw, a chefnogaeth',
        ],
        'total_save' => 'Cyfanswm yr arian a arbedwyd'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Eich perfformiad',
        'sub-title' => 'Trosolwg busnes o :start i :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Defnyddwyr a Ddychwelwyd',

        'shop_views' => 'Golygfeydd Siop',
        'baskets' => [
            'title' => 'Certi Siopa',
            'subtitle' => 'Rhoi gwybod am nifer y troliau siopa newydd',

        ],
        'products' => [
            'title' => 'Cynnyrch Trosolwg',
            'subtitle' => 'Statws cynhyrchion yn y siop yn ôl math',
            'value_name' => 'Cynhyrchion'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Cyfanswm yr ymweliadau â thudalennau gwefan',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Rydych chi wedi derbyn archeb newydd. Ewch i'r dudalen prosesu archeb yn eich panel gwerthwr.",
        'subject' => "🛍️ Archeb Newydd wedi ei Dderbyn| :order_id",
        'your_revenue' => "Eich Refeniw",
    ],
    'vendor-invite' => [
        'title' => 'Gwahoddiad Gwerthwr',
        'message' => "Rydych wedi derbyn gwahoddiad i ddod yn werthwr :shop_name. Gallwch ei dderbyn neu ei wrthod trwy glicio ar y botymau canlynol.",
        'subject' => ":shop_name |Gwahoddiad i ddod yn werthwr i ni",
        'accept' => "Derbyn a Dod yn Werthwr",
        'reject' => "Gwrthod",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Gwahoddiad i Ymuno â\'n Tîm',
        'message' => "Rydych chi wedi cael eich gwahodd i ymuno â :vendor_name yn :shop_name. Gallwch dderbyn neu wrthod y gwahoddiad hwn gan ddefnyddio'r botymau isod.",
        'subject' => "Gwahoddiad i Ymuno â :vendor_name|Dod yn Aelod Tîm",
        'accept' => "Derbyn ac Ymuno â'r Tîm",
        'reject' => "Gwrthod",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Eich Cod Mewngofnodi ar gyfer :shop",
        'header-message' => "Rydym yn anfon yr e-bost hwn atoch oherwydd eich bod wedi gofyn am god mewngofnodi ar gyfer y siop. Dewch o hyd i'ch Cyfrinair Un Amser (OTP) isod:",
        'footer-message' => "Bydd y cod hwn yn ddilys am 10 munud. Os na wnaethoch ofyn am y cod mewngofnodi hwn, anwybyddwch yr e-bost hwn."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Dilyswch eich e-bost| :shop",
        'title' => 'Dilysu E-bost',
        'header-message' => "Helo :name, <br>Please cadarnhewch mai **:email** yw eich cyfeiriad e-bost trwy glicio ar y botwm isod neu ddefnyddio'r ddolen isod o fewn 48 awr.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Diweddariadau Cynnyrch| :shop",
        'title' => "Diweddariad ar Statws Cynnyrch - 24 Awr Diwethaf",
        'message' => "Rwy'n gobeithio y bydd y neges hon yn dod o hyd i chi'n dda. Mae hwn yn ddiweddariad byr i roi gwybod i chi am statws eich cynhyrchion ar ein platfform dros y 24 awr ddiwethaf.\nYn ystod y cyfnod hwn, bu newidiadau yn statws rhai cynhyrchion. Gall y newidiadau hyn fod oherwydd pryniannau, diweddariadau stoc, neu ddigwyddiadau cysylltiedig eraill.\nI gael gwybodaeth fanylach am bob cynnyrch, mewngofnodwch i'ch cyfrif a gwiriwch yr adran 'Statws Cynnyrch'.",
        'action' => "Panel Gwerthwr Agored",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Swmp Archebion a Dderbyniwyd| :shop | :date",
        'title' => "Hysbysiad Gorchmynion Swmp",
        'message' => "Rydych wedi derbyn swp o archebion swmp. Ewch i'r dudalen prosesu archeb yn eich panel am ragor o fanylion. Gallwch hefyd lawrlwytho'r rhestr archebion trwy'r ddolen ddiogel a ddarperir, yn ddilys am 7 diwrnod.<br><br>\n        <b>IMPORTANT:</b> Mae'r ddolen hon yn ddilys am 7 diwrnod.<br>\n        Mae'r ddolen hon yn ddeinamig, felly bob tro y byddwch chi'n ei glicio, byddwch chi'n derbyn yr archebion mwyaf diweddar ar gyfer y dyddiad penodol hwn. Mae <b>It yn golygu os yw statws taliad archeb yn newid i'w wrthod, ni fyddwch bellach yn gweld y gorchymyn hwnnw yn y CSV wedi'i lawrlwytho, neu os yw'r archeb yn cael ei dalu, bydd yn ymddangos yn y rhestr.</b><br><br>\n        <ul>\n            <li>Mae'r CSV yn cynnwys archebion taledig gyda dyddiad cadw yn y :date.</li>\n            Dyddiad <li>Reserved yw'r dyddiad pan mae'r defnyddiwr yn clicio til ar y dudalen archebu.</li>\n        </ul>\n        <b>To atal gorchmynion dyblyg, bob amser yn gwirio y Gorchymyn ID cyn sending.</b>",
        'action' => "Lawrlwythwch Rhestr Archebion",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Ni dderbyniwyd rhai eitemau yn eich archeb ac ni ellir eu danfon. Bydd y swm ar gyfer yr eitemau hyn yn cael ei ad-dalu i'ch cerdyn yn fuan."
    ]

];
