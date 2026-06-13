<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ev peyam xêrhatina kirrûbirek nû li dikanê dike.',
        ShopMailTemplateCodes::OrderCheckout => 'Dema ku kiryar fermanek piştrast dike ev agahdarî tê şandin.',
        ShopMailTemplateCodes::OrderPayment => 'Ev agahdarî dravdana serketî ya ku ji hêla xerîdar ve hatî çêkirin piştrast dike.',
        ShopMailTemplateCodes::OrderUpdate => 'Ev peyam ji bo nûvekirina kirrûbirek li ser rewşa fermana wan tê şandin.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ev peyam ji firoşkarek re tê şandin da ku wan ji fermanek pejirandî agahdar bike.',
        ShopMailTemplateCodes::PosCheckout => 'Ev agahdarî ji bo piştrastkirina fermanek firotanê ji bo kirrûbirek tê şandin.',
        ShopMailTemplateCodes::PosPayment => 'Ev agahdarî dravdana xala firotanê ya ku ji hêla kirrûbirek ve hatî çêkirin piştrast dike.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ev peyam firoşkarê kirîna ku li cîhê firotanê hatî çêkirin agahdar dike.',
        ShopMailTemplateCodes::ShopContact => 'Dema ku forma pêwendiyê hate şandin ev agahdarî tê şandin.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ev agahdarî bikarhênerek agahdar dike ku wan qertek diyariyê wergirtiye.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ev peyam pêşwaziya firoşkarek nû li dikanê dike.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ev peyam tê şandin da ku firoşkarek vexwîne ku beşdarî bazara we bibe.",
        ShopMailTemplateCodes::ShopVendorOrder => "Dema ku fermanek di statûya Pad an Dirav Li Ser Delivery (COD) de tê wergirtin ev peyam ji firoşker re tê şandin.",
        ShopMailTemplateCodes::ShopVendorProducts => "Her roj têne şandin da ku firoşkaran li ser rewşa hilberên xwe nûve bikin.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ev peyam tê şandin da ku firoşkarek vexwendibe ku beşdarî bazara we bibe.",

        ShopMailTemplateCodes::UserLogin => "Ji bo armancên ewlehiyê, bi hûrguliyên têketinê, tevî navnîşan, dîrok û cîhaza IP, bikarhêner agahdar bikin.",
        ShopMailTemplateCodes::LoginCode => "Ji bo bikarhêneran kodek şîfreyek yek carî bişînin da ku têkevin firotgehê.",

        ShopMailTemplateCodes::EmailVerifyLink => "Zencîreyek bişînin da ku navnîşana e-nameya bikarhêner piştrast bikin. Dema ku bikarhênerek ji hêla SMS ve qeyd dike û e-nameya xwe dike ev e-name tê şandin. Dema ku bikarhêner rasterast bi têketina civakî an e-nameyê re qeyd dike, nayê şandin.",

        ShopMailTemplateCodes::EmailBulkOrder => "Ji bo rojek taybetî navnîşek fermanên wergirtin û drav bi girseyî bişînin."


    ,

    ],


    'global' => [
        'greetings' => 'Silav :name',
        'end-statement' => 'Tîma Piştgiriyê',

        'receiver_name' => 'Silav :user_name',
        'footer-help' => "Pêdivî bi alîkariyê heye? Li [support@selldone.com] (mailto:support@selldone.com) bipirsin an biçin [navenda alîkariyê] (https://selldone.com/community).",
        'selldone-team' => 'Tîma Selldone',
        'footer-shop' => "Ger ji bo tiştekî hewceyê alîkariyê be, ji kerema xwe dudilî nebin e-nameyek ji me re bişînin: :shop_mail",
        'accept' => "Baweranîn",
        'reject' => "Refzkirin",
        'verify' => "lidûsekirin",
        'title' => "Nav",
        'value' => "Giranî",
        'description' => "Terîf",
        'shop' => "Dikan",
        'shop-info' => "Agahiya Store",
        'user' => "bikaranîvan",
        'user-info' => "Agahiyên Hesabê",
        'license' => "Îcaze",
        'status' => "Cî",
        'start' => "Destpêkirin",
        'end' => "Dawî",
        'renewal' => "Nikirî",
        'view' => "Dîtinî",

        'balance' => "Bîlanço",
        'card_number' => "Hejmara Kartê",
        'cvv' => "Cvv",
        'expire_date' => "Dîroka qedandinê",

        'Dashboard' => "Dashboard",
        'order' => "emir",
        'view_order' => "Emrê bibînin",
        'pay_now' => "Pay now",

        'official_selldone' => "FERMÎ SELLDONE",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Diravcins",
        'free-balance' => "Balansa belaş",
        'locked-balance' => "Balansa kilîtkirî",
        'bot' => "Bot",
        'requests' => "Daxwazên",
        'baskets' => 'Carts',
        'physical' => "Cûsseyî",
        'virtual' => "Virtual",
        'file' => "Dosî",
        'service' => "Xizmetkar",
        'fulfillment' => "Bicihanînî",
        'open' => "Vekirî",
        'reserved' => "Reserved",
        'canceled' => "Betal kirin",
        'payed' => "Pere kirin",
        'cod' => "COD",
        'orders-count' => 'Orders',
        'payments-count' => 'Payments',
        'confirms-count' => 'Piştrast dike',
        'sends-count' => 'Dişîne',
        'delivers-count' => 'Pêşkêş dike',
        'count' => 'Jimartin',
        'transactions-count' => 'Danûstendinan dihejmêrin',
        'success-transactions' => 'danûstandinên Serkeftinê',
        'total-amount' => 'Hejmara tevahî',
        'amount' => 'Biha',
        'wage' => 'Wage',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Jîyan',
        'CheckQueue' => 'Dorê kontrol bikin',
        'OrderConfirm' => 'Ferman piştrast bikin',
        'PreparingOrder' => 'Amadekirina fermanê',
        'SentOrder' => 'Ferman şandin',
        'ToCustomer' => 'Ji xerîdar re tê şandin',
        'Pending' => 'Nexelas',
        'Accepted' => 'Qebûl kirin',
        'Rejected' => 'Redkirin',
        'pc' => 'PC',
        'tablet' => 'Heb',
        'phone' => 'Telefon',
        'total' => 'Hemî',
        'view-detail' => 'Detail bibînin',
        'empty' => 'Vala',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Bersiv',
        'reactions' => 'Reactions',
        'Comments' => 'Comments',
        'last-comment' => 'Rayi dawî',
        'response-to' => 'Bersiva ji bo',
        'posts' => 'Posts',
        'post' => 'Koz',

        'name' => 'Nav',
        'email' => 'Email',
        'type' => 'awa',
        'device' => 'Sazî',
        'platform' => 'Rawesta axaftevan',
        'browser' => 'Browser',
        'time' => 'Dem',
        'Wallet' => 'Wallet',
        'date' => 'Rojek',

        'account' => 'Konto',
        'transaction' => 'Şandindayinî',
        'fee' => 'Xerc',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Hesab',
        'category' => 'Liq',
        'password' => 'Şîfre',
        'verify-login' => "Verastkirin & Têkeve",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Dibe ez çi bikim",
        'add-domain' => "Add Domain",
        'views' => 'Dîtin',


        'country' => 'Welat',
        'address' => 'navnîşan',
        'postal' => 'Kodeya postê',
        'building_no' => 'Avahî #',
        'building_unit' => 'Yekîneya #',
        'message' => 'Agah',


        'customer' => 'Miştirî',
        'cart-items' => 'Tiştên selikê',
        'payment' => 'Diravdanî',
        'receiver' => 'Receiver',
        'virtual-items' => 'Tiştên virtual',
        'no-payment' => 'Ne pere!',

        'enable' => 'Bikêrkirin',
        'access' => 'Navketin',
        'bank' => 'Agahdariya bankê',

        'vendor' => 'Firotkar',

        'view_content' => "Naveroka tevahî bibînin",
        'files' => 'Pelên',
        'download' => 'Download',
        'file_name' => 'Navê Pelê',
        'file_size' => 'Mezinayî',

        'subscription' => 'Abonetî',
        'products' => 'Products',
        'vendor_products' => 'Berhemên Vendor',

        'pickup' => 'Pickup',

        'minutes' => 'Minutes',
        'hours' => 'Hours',

        'refund' => 'Vegerandin',
        'recipient_address' => 'Navnîşana wergir',
        'signature' => 'Îmzekirin',
        'blockchain' => 'Blockchain',
        'details' => 'Details',


    

        'Shop' => 'Dikan',
        'dashboard' => 'dashboard',
        'comments' => 'comments',
        'wallet' => 'tûrikê diravan',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Rapora Performansê, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Rapora Demsalî, Selldone'
        ],
        'Onboarding' => [
            'id' => 'merheba',
            'name' => 'Pejirandin, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Piştgiriya :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'merheba',
            'name' => 'Civat, Selldone'
        ],
        'NewShop' => [
            'id' => 'bazirganan',
            'name' => 'Pejirandin, Selldone'
        ],
        'Approve' => [
            'id' => 'destûrdan',
            'name' => 'Pejirandin, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Orders Management :name'
        ],

        'Recovery' => [
            'id' => 'rawesta',
            'name' => 'Tîma Recovery Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Li benda ⌛',
        'PAYED' => 'Bi pere ✅',
        'CANCELED' => 'Betal kirin ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Birêvebir',
            'OFFICER' => 'Karmend û Serpereştyar',
            'AUDITING' => 'Rêveberê Kontrolkirinê',
            'EMPLOYEE' => 'Karker',
            'PRODUCT' => 'Rêveberê Berheman',
            'CONTENT' => 'rêveberê naverokê',
            'MARKETING' => 'rêveberê kirrûbirrê',
            'VIEWER' => 'Temaşeker',

        ],
        'subject' => ":inviter we vexwend :level| :shop",
        'category' => "vexwendina Staff",
        'title' => "Tu hatî vexwendin bo <b>:shop_name</b> wekî <b>:level</b> .",
        'message' => "We vexwendinek wergirtiye ku hûn di karsaziyê de bi tîmê <b>:shop_title</b> re hevkariyê bikin. Vebijarka we heye ku hûn vê pêşniyarê qebûl bikin an red bikin. Ger hûn qebûl bikin, ji kerema xwe têkevin karûbarê Selldone da ku biryara xwe piştrast bikin. Piştî pejirandinê, hûn ê bigihîjin beşa rêveberiya firotgehê.",

    ],

    'welcome-email' => [
        'subject' => "👋 Bi xêr hatî :name, Werin em bi Selldone Dest pê bikin!",
        'category' => 'CONGRATULATION',
        'title' => "Hûn bi xêr hatin Selldone",
        'message' => "Spas ji bo hilbijartina Selldone! Naha hûn beşek civatek jîndar in ku firoşkarên gerdûnî bi xerîdaran, karsaziyên herêmî bi pargîdaniyan û kesan re bi pargîdaniyan re girêdide. Hemî amûrên me yên Master û Pro ji we re hene ** belaş ** û ** bêsînor **. Em li vir in ku piştgiriyê bidin we û deriyên serkeftina we vekin.",

        'index' => "Gav :step.",

        'step-domain' => [
            'title' => 'Domaina Xweseriya Xwe Zêde Bikin',
            'message' => "Ji bo ku dest pê bikin, domaina xweya xwerû belaş li Pîşesaziya Firotanê li binê Settings> Mîhengên Domanan zêde bikin.",
            'action' => 'Domênên Min Birêvebirin',
        ],
        'step-landing' => [
            'title' => 'Rûpelê Mala Xwe Xweser Bikin',
            'message' => "Bi çûna Dashboard > Rûpelên rûpela xweya malê kesane bikin. Rûpelek zevî hilbijêrin an yek nû biafirînin. Ew hêsan û têgihîştî ye, û hûn dikarin di cih de dest bi xebatê bikin.",
            'action' => 'Rûpelê Zeviya Min Xweser bike',
        ],
        'step-payment' => [
            'title' => 'Setup Rêbaz Payment',
            'message' => "Dest bi pejirandina dravê rasterast li hesabê banka xwe bikin. Ji bo girêdana pêşkêşkerên dravê xwe yên mîna Stripe, PayPal, û hêj bêtir, biçin Dashboard> Hesab> Gateway.",
            'action' => 'Rêbazên Paymentê zêde bikin',
        ],
        'step-products' => [
            'title' => 'Berhemên xwe zêde bikin',
            'message' => "Bi hêsanî hilber û kategoriyan li Dashboard> Hilber zêde bikin. Ew mîna birêvebirina pel û peldankên li ser PC-ya xwe ye - bi tevahî amade ye kaş-û-davêje. Her weha hûn dikarin bi karanîna Excel-ê hilberan bi girseyî import bikin. Şablonek nimûne heye ku ji we re bibe alîkar ku hûn dest pê bikin.",
            'action' => 'Berhemên Min Birêvebirin',
        ],
        'step-shipping' => [
            'title' => 'Setup Rêbaz Shipping',
            'message' => "Ji bo barkirina xerîdaran ji bo barkirinê, di Dashboard> Logistic> Shipping de rêbazên barkirinê diyar bikin. Hûn dikarin bihayên cûda û piştgirî ji bo cîhên cihêreng destnîşan bikin. Ji bîr nekin ku eslê depoya xwe li Dashboard> Logistic> Warehouse bicîh bikin.",
            'action' => 'Rêbazên Shipping Manage',
        ],
    

        'seller' => [
            'title' => 'Tu firoşkar î?',
            'message' => 'Ji bo ku hûn dest bi firotanê bikin, bi riya zencîreya jêrîn têkevin dashboarda xwe ya li Selldone û yekem firotgeha xwe bi tevahî belaş biafirînin. Ev ê çend hûrdem bigire û hûn ê xwediyê firotgeha xwe û malpera serhêl bin. Dûv re em ê rêberiya we bikin gavên din û deriyê dravdanê bistînin.',
            'action' => 'Têkeve dashboarda min',
        ],
        'buyer' => [
            'title' => 'Ez buyer im',
            'message' => 'Pîrozbahî. Gava ku hûn endamê Selldone bin, hûn ê di firotgehên serhêl de ji hemî tengasiyên endametî û pejirandinê xilas bibin. Ji bo ku hûn ji her firotgeh û malpera ku platforma Selldone bikar tîne sûd werbigirin, hûn dikarin bi yek klîk têkevin û kirîna xwe hêsan, bilez û ewledar bikin.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet> Hesab> Barkirin',
        'title' => "Serkeftina Serkeftinê",
        'message' => "Hesabê te <b>:account_number</b> bi serketî <b>:amount</b> hat barkirin.",
        'account' => 'Konto',
        'charge' => 'Biha',
        'balance' => 'Bîlanço',
        'footer' => "Karsaziyê ji her kesê li çaraliyê cîhanê re hêsan, gihîştî û gihîştî bikin."
    ],

    'verify-email' => [
        'subject' => "🙌 Qeyda xwe ji bo Selldone temam bikin! Verastkirina girêdanê.",
        'category' => "TU GAVEK DIRÎ YE",
        'title' => "Navnîşana e-nameya xwe piştrast bikin",
        'message' => "Silav :name,<br><br>Spas ji bo hilbijartina Selldone!<br><br>Ji bo piştrast bikin ku <b>:email</b> navnîşana e-nameya weya rast e, ji kerema xwe lînka jêrîn bikirtînin. 48 demjimêrên we hene ku hûn vê verastkirinê temam bikin.",
        'footer' => "Heke hûn di klîkkirina bişkojka Verastkirinê de pirsgirêkek we heye, URL-ya jêrîn li geroka xweya webê kopî bikin û pê bikin: :activation_url",
        'next-step' => "Dûv re, em ê hin materyalên alîkar û rêbernameyek gav-bi-gav ji we re bişînin da ku hûn ji we re hêsan bikin ku hûn domaina xweya xwerû lê zêde bikin, drav saz bikin, hilberan zêde bikin û fermana xweya yekem bistînin.",

    ],
    'verify-email-code' => [
        'subject' => "Koda verastkirinê ji bo :name",
        'category' => "SECURITY",
        'title' => "Koda verastkirinê ya e-nameyê",
        'message' => "Silav :name,<br><br>Ji bo piştrast bikin ku <b>:email</b> navnîşana e-nameya weya rast e, ji kerema xwe koda jêrîn di <b>10 hûrdeman de </b> binivîse:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Dikana We Amade ye| :name",
        'category' => "TU GAVEK DIRÎ YE",
        'title' => "Sazkirin qediya",
        'account_title' => "Hesabê te",
        'account_msg' => "Bi vê agahiyê verast bikin û têkevin hesabê xwe.",
        'shop_msg' => "Agahdariya hesabê li ser pergala xebitandina karsaziya Selldone.",

    ],

    'reset2fa' => [
        'category' => "PEYAMA FERMÎ EWLEHIYÊ",
        'title' => "Daxwaza têketina 2-gavekî neçalak bike",
        'message' => "Hûn vê e-nameyê distînin ji ber ku me daxwaznameyek stend ku ji bo hesabê **:name** verastkirina du-faktorî bi e-nameya **:email** vegere.<br><br>Me hûrguliyên jêrîn ji bo hesabê we dîtin:",
        'footer' => "Heke we ji nûvekirina şîfreyek daxwaz nekir, çu tevgerek din hewce nake.",
        'action' => 'Têketina du-gavekî neçalak bike',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Dikana we niha amade ye!",
        'category' => "LI CÎHANÊ DORÎNA ONLINE NÛ BORN",
        'title' => "Pîroz be, :name!",
        'message' => "<b>Pîroz be, :name! Karsaziya weya serhêl a nû niha zindî ye!</b> Em bi kêfxweşî pêşwaziya we li civata Selldoners dikin. We gava yekem ber bi serkeftinê ve avêt, û em li vir in ku di her gavê de ji we re bibin alîkar.<br>Niha ku dikana we amade ye, werin em piştrast bikin ku hûn amade ne ku rasterast ji xerîdarên xwe drav bistînin û dest bi mezinkirina împaratoriya xwe bikin. Ger hewcedariya we hebe, em tenê peyamek dûr in — tîmê me yê piştgiriyê her dem ji bo we li vir e.<br><br><b>Gavên Pêşerojê Girîng:</b> Ji bo destpêkirinê, pê ewle bin ku hûn hemî ji bo wergirtina drav û xebata hêsan amade ne. Em ê di her qonaxê de rêberiya we bikin da ku firotgeha we bêkêmasî bixebite.",
        'pdf-book' => "Pirtûka desta ya pêvekirî ji bîr nekin: Karsaziya xwe Mîna Lîstikek bikin",

        'account' => [
            'title' => 'Gav 1: Di berîka Selldone de hesabek biafirînin',
            'message' => "Ji bo ku dest pê bikin, di berîka xwe ya Selldone de hesabek biafirînin. Li vir dê xercên we werin jêbirin, û her weha ew e ku hûn ê lê zêde bikin da ku dikana xwe bi rêkûpêk bixebite. Ger balansa we her dem neyînî bibe, xem neke! Dikana we dê bê navber xebata xwe bidomîne.",
            'action' => 'Têkeve berîka',
        ],

        'shop-account' => [
            'title' => 'Gav 2: hesabê bi dikanê ve girêdin',
            'message' => "Piştre, hesabê berîka xwe bi dikana xwe ve girêdin. Biçe <b>Store> Hesab> Invoice</b>, û berîka xwe girêdin. Ev piştrast dike ku hemî dravdanên xerîdar rasterast di hesabê weya bankê de têne razandin - Selldone ji dahata we ti dravê kêm nake.",
            'action' => 'Panela fatûreya firotanê',
        ],

        'gateway' => [
            'title' => 'Gav 3: Deriyê Paymentê Serhêl girêdin',
            'message' => "Naha, werin em deriyê dravdana xweya serhêl saz bikin. Herin <b>Store> Hesab> Port</b> û li ser <b>Add New PortQ</b> bikirtînin. Pereyê xwe hilbijêrin, û hûn ê navnîşek dergehên dravdanê yên berdest bibînin. Girêdana dergehek zû û hêsan e, lê ger hewcedariya we bi alîkariyê hebe, bi dilxwazî ​​hûn rêberên Selldone kontrol bikin an jî xwe bigihînin me.",
            'action' => 'Portalek li dikanê zêde bikin',
        ],

        'domain' => [
            'title' => 'Pêngava paşîn: girêdana domainek diyarkirî',
            'message' => "Naha, domaina xweya xwerû bi dikana xwe ve girêdin. Ev dihêle xerîdar hilber an karûbarên we bikirin û rasterast ji we re drav bidin.",
            'action' => 'Nasandin û wergirtina kartên diyariyê yên bêsînor',
        ],
    ],


    'basket-list' => [
        'item' => "şanî",
        'count' => "Jimartin",
        'price' => "biha",
        'discount-code' => "Code Discount",
        'customer-club' => 'Club Mişterî',
        'shipping' => "Shipping",
        'total' => "Hemî",
        'offer' => "Pêşnîyar",
        'coupon' => "Coupon",
        'lottery' => "Xelatkirin",
        'tax' => "Bac",
        'tax_included' => "Di nav bihayê de",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Awa',
        'amount' => 'Biha',
        'giftcard' => 'Gift card',
        'payment' => 'Diravdanî',
    ],


    'shop-subscription-email' => [
        'category' => "Nûvekirina abonetiyê",
        'title' => "Lîsansa dikanê: :shop_title",
        'title-reserved' => "Lîsansa rezervê: :shop_title",
        'title-active' => "Lîsansa çalak: :shop_title",
        'title-finished' => "Lîsansa qedandî: :shop_title",
        'title-cancel' => "Betalkirina lîsansê: :shop_title",
        'message' => "Plana lîsansa dikana we hate nûve kirin,",
        'RESERVED' => "⚡ Plana abonetiya we ** hatiye tomarkirin**.",
        'ACTIVE' => "🟢 Plana abonetiya we hat **çalak kirin**.",
        'FINISHED' => "🚧 Plana abonetiya we ** qediya**.",
        'CANCEL' => "⛔ Plana abonetiya we ** hat betalkirin**.",
    ],

    'support' => [
        'subject' => "Navenda Piştgiriyê | :name bersiv da",
        'category' => "Navenda Piştgiriyê",
        'title' => "We bersivek wergirt",
        'action' => "Rêvebirê dikanê veke",
    ],

    'shop-customer-join' => [
        'subject' => "Tevlî :shop_title bibin",
        'category' => "pîrozbahiya xerîdarên nû",
        'title' => "Em ji bo endamtiya we kêfxweş in",
        'action' => "Serdana niha",
    ],

    'shop-vendor-join' => [
        'subject' => "Firoşkar Onboarding | :shop_title",
        'category' => "Pîrozbahiya firoşkarê nû",
        'title' => "Em ji bo endamtiya we kêfxweş in",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Karta diyariyê :shop_title",
        'category' => "Karta nû lê zêde bike",
        'title' => "Pîroz be, te qertek diyarî standiye",
        'action' => "Niha bikirin",
        'message' => "We qertek diyariyê ya hêja :balance :currency wergirtiye. Hûn dikarin vê karta diyariyê li dikana me bikar bînin.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Navenda Piştgiriyê| :shop",
        'category' => "alîkarî",
        'title' => "We bersivek wergirt",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Siparîş Bike | :order_id",
        'title' => "emir",
        'message' => "We li dikana me fermanek da. Me fermana we wergirt û piştî ku drav hate pejirandin dê e-nameyek din ji we re bişînin."
    ,

        'payments' => 'Payments',
    ],

    'order-payment' => [
        'subject' => "🛍 Pejirandina Tezmînatê | :order_id",
        'title' => "Fermana peredanê",
        'message' => "Tezmînata we qediya,<br> Em emrê te girtine. Dema ku emrê we bişîne em ê e-nameyek din ji we re bişînin.",
    

        'payments' => 'Payments',
    ],

    'order-update' => [
        'subject' => "🛍️ Nûvekirina Rewşa Siparîş bike|Siparîş :order_id",
        'title' => "Order Status Update",
        'message' => "Fermana we hate nûve kirin. Hûn dikarin di hesabê xwe de rewşa dawî ya vê fermanê kontrol bikin.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Siparîşa we ji bo pêvajoyê di dorê de ye. Dema ku were amadekirin em ê we agahdar bikin.",
                'OrderConfirm' => "Fermana we hat pejirandin û amadekarî dest pê kir.",
                'PreparingOrder' => "Fermana we tê amadekirin û dê di demek nêzîk de were şandin.",
                'SentOrder' => "Fermana we hat şandin. Hûn ê di demek nêzîk de bistînin.",
                'ToCustomer' => "Siparîşa we hat radest kirin. Em hêvî dikin ku hûn jê kêfxweş bibin!",

                'PreparingOrder-PICKUP' => "Fermana we tê amadekirin. Dema ku ew ji bo hilgirtinê amade be, hûn ê agahdariyek bistînin.",
                'SentOrder-PICKUP' => "Fermana we ji bo hilgirtinê amade ye. Ji kerema xwe werin dikanê da ku wê berhev bikin.",
                'ToCustomer-PICKUP' => "Fermana we hat girtin. Em hêvî dikin ku hûn jê kêfxweş bibin!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Siparîşa we ji bo pêvajoyê di dorê de ye. Dema ku amade be em ê we agahdar bikin.",
                'OrderConfirm' => "Fermana we hate pejirandin û amadekarî di pêş de ye.",
                'PreparingOrder' => "Fermana we tê amadekirin û dê di demek nêzîk de ji we re bê şandin.",
                'ToCustomer' => "Siparîşa weya virtual ji hesabê we re hat şandin. Sipas ji were!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Daxwaza karûbarê we di dorê de ye. Dema ku em dest pê bikin em ê we agahdar bikin.",
                'OrderConfirm' => "Karûbarê we hate pejirandin û em amade dikin ku dest pê bikin.",
                'PreparingOrder' => "Em karûbarê we amade dikin, û gava ku ew qediya dê we agahdar bikin.",
                'ToCustomer' => "Xizmeta we temam e. Spas ji bo hilbijartina me!"
            ],
            'FILE' => [
                'PreparingOrder' => "Dosyaya we tê amadekirin û dê di demek nêzîk de peyda bibe.",
                'ToCustomer' => "Dosyaya we amade ye û hat radest kirin. Niha hûn dikarin wê dakêşin."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Fermana abonetiya we di dorê de ye. Dema ku pêvajoyê dest pê dike em ê we agahdar bikin.",
                'OrderConfirm' => "Abonetiya we hatiye pejirandin û tê sazkirin.",
                'PreparingOrder' => "Em abonetiya we amade dikin û ew ê di demek nêzîk de dest pê bike.",
                'SentOrder' => "Abonetiya we hat aktîfkirin. Hûn ê nûvekirinên domdar bistînin.",
                'ToCustomer' => "Xizmeta abonetiya we bi serketî hate çalak kirin."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Pîrozbahî :name|Pişka Nû: :title',
        'category' => "PÎROZIKIN, VOUCHER NÛ",
        'message' => "Hey :name,<br><br>Te ji me fîşeke nû wek diyarî wergirt! Hûn dikarin bi danasîna Selldone ji hevalên xwe û her kesê ku hûn nas dikin re hêj bêtir dek û dolaban qezenc bikin. Ev voucher hêja ye **:price :currency**.<br><br>We gava yekem avêt, û em li vir in ku ji we re bibin alîkar ku hûn taybetmendiyên nû bi qursa xwe vekin! Ji kerema xwe bi **:email** têkevinê û di Firoşgeha **Dashboard** > **Settings** > **Lîsans** de vouchera xwe bibînin.<br><br>Pîroz be!",
        'action' => "Tabloya min",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Pîroz be, Birêz :name | Te diyariyek standiye',
        'category' => "Daxuyaniya wergirtina diyariyek",
        'title' => "Diyarî ji bo we",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Gifts",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Siparîşa Nû Hatiye Wergirtin | :order_id",
        'title' => "New Order",
        'message' => "We fermanek nû wergirt. Ji kerema xwe biçin rûpela hilanîna fermanê ya li dikana xwe.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Agahdariya we ya dagirtî',
        'output-form-title' => 'Agahdariya tiştên kirîn',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Rapora heftane :time',
        'title' => 'Rapora performansa dikana heftane',
        'message' => "Ev rapora heftane ya dikana we ye ji <b>:start</b> heya <b>:end</b>. Di vê raporê de serişteyên ji bo başkirina karsaziya we vedihewîne, hûn dikarin rewşa dikana xweya serhêl û fermanên dawîn jî kontrol bikin. Hêvîdar im roj û hefteyek xweş li pêşiya we be."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Rapora weya :amount saving di sê mehên dawî de | :shop_title',
        'title' => 'Rapora demsalî ya li ser çalakiya karsaziya we, xelat û teserûfa darayî',
        'message' => "Ev rapora weya demsalî ya <b>:shop_title</b> ji <b>:start</b> heya <b>:end</b> ye."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Hesabên girêdayî',
        'sub-title' => 'Rewşa herî dawî ya hesabên berîka ku bi dikana min ve girêdayî ne çi ye?',
        'view-wallet' => 'Dîtina walletê',
        'tip-title' => 'Serişteyên girîng',
        'tip' => "Selldone berîka belaş saz bikin û wê bi dikana xwe ve girêdin. Her çend balansa we neyînî be jî, xerîdarên we hîn jî dikarin bêyî pirsgirêk bikirin û bidin. Xem neke, kar û daneyên dikana we dê heta 1 mehê bi aramî, bê navber berdewam bikin.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Bi hesabê ve girêdayî ye'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps saz kirin',
        'sub-title' => 'Lîsteya sepanên ku we vê hefteyê li dikana xwe saz kirine.',
        'tip' => "Ma hûn dixwazin ji bo dikana xwe bêtir sepanan bibînin?",
        'view-app-store' => 'Serdana Selldone App Store bikin..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Botên Firotana we',
        'sub-title' => 'Botên firotanê yên çalak li dikana min.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone botên firotana otomatîkî ji we re peyda kiriye. Ya ku divê hûn bikin ev e ku biçin panela Add-ons> Bots û botên dikana xwe çalak bikin. Têbînî ku karûbarê têkildar divê li welatê we hebe.",
        'view-bots' => 'Botan birêve bibin',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Têkiliya bi Mişteriyan',
        'sub-title' => 'Vê hefteyê çend têkiliyên min bi xerîdarên xwe re hebûn?',
        'faqs' => 'Pirsên Pir Pir Pirs',
        'tickets' => 'Bilêtên Mişterî',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Rewşa Bikarhêneran',
        'sub-title' => 'Çalakî ji :start heta :end',
        'users' => [
            'title' => 'Mişterî',
            'subtitle' => 'Bikarhênerên Signup',
        ],
        'views' => [
            'title' => 'Serdan',
            'subtitle' => 'Te çend caran serdana dikanê kiriye',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Bikarhênerên Vegerandin',

        'shop_views' => 'Dikan Views',
        'baskets' => [
            'title' => 'Shopping Carts',
            'subtitle' => 'Hejmara selikên kirrûbirra nû rapor bikin',
        ],
        'products' => [
            'title' => 'Products Overview',
            'subtitle' => 'Rewşa hilberên li firotgehê li gorî celebê',
            'value_name' => 'Products'
        ],
        'products_count' => 'cureyên berhemên',
        'views_count' => 'Hejmara dîtinê',
        'sell_count' => 'Hejmara firotanê',
        'send_count' => 'Shipping count',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel ji bo firoşkarên sereke yên Drop Shipping Selldone.',
        'total_fulfillments' => 'Tevahiya Orders Received',
        'ds_count' => 'Ferman wergirtin',
        'statistics_title' => 'Rapor ferman wergirt',
        'ds_cancels' => 'Ji hêla firoşkarê navbeynê ve betal bike',
        'ds_rejects' => 'Ji hêla te ve betal bike',
        'tip' => "Ma hûn firoşkarek mezin a tiştan in? Ma hûn xwediyê depoyek, kargehek an belavkerek hilberan in? Hûn dikarin di karûbarê Selldone Drop Shipping de hilberên xwe pêşkêşî firoşkarên din bikin da ku hilbera xwe li ser astek mezin bifroşin. Ji me re bi e-nameyê re bişînin support@selldone.com ku hûn rêberiyê bikin.",
        'view-drop-shipping-panel' => 'Têkeve panela wholesale',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Rêjeyên danûstandinê',
        'sub-title' => 'Navnîşa rêjeyên guheztina diravê ya herî dawî ya li dikana we.',
        'from' => 'Çavkanî Pereyê',
        'to' => 'Diravê Destination',
        'rate' => 'Rêjeya veguherînê',
        'view-exchange-panel' => 'Rêjeyên Danûstendinê Birêve Bikin',
    

        'vew-exchange-panel' => 'panelê rêveberiya rêjeya danûstendinê',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Peymanên pispor',
        'sub-title' => 'Kîjan pispor li ser dikana min dixebitin?',
        'cost' => 'Meblexa peymanê',
        'duration' => 'Demajok',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dîrok Betal bike',
        'end_at' => 'Dîroka teslîmkirinê',
        'tip' => 'Hûn dikarin li Selldone pisporên çêtirîn kar bikin da ku karsaziya xwe pêşve bibin.',
        'view-experts' => 'Bikirtînin da ku dest pê bikin.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Dergehên dravdanê yên çalak li ser dikana we :shop',
        'tip-title' => 'Serişteyên girîng',
        'tip' => "Di dikana xwe de biçin rûpela rêveberiya portalê û di nav çend hûrdeman de bi kêmanî yek portê lê zêde bikin. Xerîdarên we hez dikin ku bi portalên serhêl zû û bi ewle bidin.",
        'view-shop-gateways' => 'Têkeve rêveberiya portalê dikana min.',
        'view-gateways' => 'Zêdetir deriyên xwe bibînin',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Orders',
        'sub-title' => 'Lîsteya fermanên ku min vê hefteyê wergirt.',
        'total_baskets' => 'Tevahiya Orders',
        'total_posBaskets' => 'Tevahiya Orders Cash',
        'pos-title' => 'POS Store Box',
        'chart-label' => 'Ferman qediyan (ev ferman ne hewce ne têne dayîn!)',
        'tip-title' => 'Divê hûn bêtir hewl bidin ...',
        'tip' => "Serkeftinek hêsan tune.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'navenda Processing',
        'sub-title' => 'Me vê hefteyê çiqas ferman li dikanê kir?',
        'tip-title' => 'Firotana we tune bû!',
        'tip' => "Mixabin vê hefteyê tu firotan tune. Pêdivî ye ku hûn bêtir li dikana xwe bigirin. Hûn dikarin bêtir hilberan zêde bikin, wêneyên çêtir hilbijêrin an ji bo hilberên xwe şiroveyên çêtir binivîsin. Ji bo karsaziya xwe karekî tam-time bifikirin. Ger hûn wiya rast bikin û xemgîn nebin, hûn ê biserkevin.",
        'view-process-center' => 'Navenda pêvajoyê bibînin',
        'return' => [
            'title' => 'Fermana Vegerandin',
            'subtitle' => 'Rapor fermanên vegerand.',
            'tip-title' => 'We dizanibû ku...',
            'tip' => "Hûn dikarin bi Selldone POS-ê bi qasî ku hûn hewce ne drav biafirînin! Çi ew tablet, mobîl, an laptopê we be, hûn dikarin her amûrekê veguherînin cîhê firotanê ya dikana xwe. Ew sade, zû sazkirinê ye, û bi tevahî ji bo servera we amade ye. Îro dest bi karanîna wê bikin!",
            'view-pos' => 'Têkeve My Online Store Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessions',
        'sub-title' => 'Min çend caran serdana dikana xwe kir?',
        'countries-title' => 'Kîjan welatên herî zêde hatine ziyaret kirin?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ma hûn dixwazin bêyî xerckirina yek dravê drav bikin?',
        'message' => "Birêz :name, hûn dikarin biçin Dashboard > Demonetization û girêdanek referansê biafirînin. Girêdanê ji hevalên xwe re bişînin, Hûn qertên diyariyê yên Selldone û ji sedî dravdana hevalê xwe digirin. Bala xwe bidinê ku karta diyariyê dê hem ji we re û hem jî ji hevalê we re were şandin.",
        'action' => 'Girêdana danasîna min bibînin',
        'mail-clip' => "<b style='color: #C2185B'>Girîng:</b> Heke hûn karûbarên e-nameyê wekî Gmail-ê bikar tînin ku dirêjahiya e-nameyê sînordar dikin, vebijarka jêrîn li dawiya e-nameyê bibînin da ku raporek tevahî nîşan bidin û li ser bikirtînin:",

        'no-coin-reward' => "<b style='color: #C2185B'>Bibore:</b> Çalakiya we hewcedariya wergirtina xelata SEL Coins belaş pêk neanî. Zêdetir biceribînin û ji bo demsala pêş de bêtir li dikana xwe bifroşin.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Pîrozbahî:</b> Karekî hêja! Li ser bingeha performansa weya berbiçav, me Qozeyên :amount SEL wekî xelat dane hesabê we.",

        'need-buy-license' => "<b> Karsaziya Xwe Zêde Bikin:</b> Wusa dixuye ku we hîn plansaziyek abonetiyê ji bo malpera xwe tomar nekiriye! Naha nûve bikin ku heke salane were dayîn, ji bo mehane tenê :amount taybetmendiyên bêtir vekin.",
        'not-afford-message' => "Ger hûn nikaribin bikirin an jî di dravdanê de pirsgirêkek we hebe, ji me re vebêjin support@selldone.com.",
        'add-domain' => "<b>Çima ji bo karsaziya we domainek xwerû tune?</b><br> Niha domainek li malpera xwe zêde bikin; belaş e!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone a<del> mal</del> <span style = 'color: forestgreen'>civat</span> .<br> Bibe Selldoner profesyonel!",
        'message' => "Rûpelên fermî yên Selldone li ser Twitter, LinkedIn û torên civakî bişopînin. Her şîrove, daxwaz an rexne ji me re bişînin an beşdarî nîqaşên li ser Selldone bibin. Em jî beşek ji civata Selldone ya ku <b>hûn</b> çêdikin in."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Fermanên nû yên avokadoyê hatin wergirtin|:shop_title :time',
        'title' => "Rapora performansê ya 24 demjimêrên paşîn",
        'message' => "Xerîdarên we li bendê ne ku emrên we werin vekolandin û biha kirin. Di zûtirîn dem de bersiv bidin daxwazên xerîdarên xwe da ku bêtir firotanê bistînin.",
        'card_title' => "Ferman di dorê de",
        'card_subtitle' => "Ji ber ku :date",

        'card_payed' => "Fermanên dayîn"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Di :community_title de bersiva posta xwe bidin',
        'title' => ":name, û :count yên din li ser mesajên we şîrove kirin.",
        'message' => "Silav :name, postên we balê dikişînin! We şîroveyên di civata me de wergirtine. Têkeve hesabê xwe da ku beşdarî nîqaşê bibin û bibînin ku her kes çi dibêje.",
        'title-simple' => ":name li ser nivîsên te şîrove kir.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Bersiva mijara xwe bide :topic_title',
        'title' => ":name, û :count yên din li ser mijara we bersiv dane.",
        'message' => "Silav :name, mijara we balê dikişîne! We di civata me de bersiv stand. Têkeve hesabê xwe da ku beşdarî nîqaşê bibin û bibînin ku her kes çi dibêje.",
        'title-simple' => ":name li ser mijara te bersiv da.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Têketina Nû :name',
        'category' => 'Agahiyên ewlehiyê',
        'title' => "Têkeve Hesabê",
        'message' => "Birêz :name, tu têkevî hesabê xwe yê Selldone.",   // Login in selldone (seller)
        'message-shop' => "Birêz :name, tu têkevî :shop_title .",  // Login in shop (buyer)

        'footer' => "Heke hûn ne têketinê, ji kerema xwe şîfreya xwe biguherînin.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Vekişîn",
        'deposit' => "Diravdanî",

        'withdraw_subject' => "Ji hesabê :account vekişînin",
        'deposit_subject' => "Depokirina hesabê :account",

        'message' => "Veguheztina drav bi taybetmendiyên jêrîn hatine kirin.",

        'type' => "Cureyê danûstandinê",

        'from' => "Hesabê çavkaniyê",
        'to' => "Destination account",

        'desc' => "Danasîna danûstandinê",
        'action' => "Danûstendinê bibînin",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Girîng! binpêkirina rêbazan| :shop",
        'category' => "Agahdariya krîtîk",
        'title' => "Dikana we hat cezakirin",
        'action' => "Tabloya dikanê veke",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter we vexwendiye ku hûn beşdarî Selldone bibin",
        'title' => ":name ji we re :amount şand da ku ji we re bibe alîkar ku hûn malpera xweya nû ya serhêl dakêşin û wê drav bikin!",
        'message' => "Silav **:receiver_name**,<br><br>Bi xêr hatî Selldone! Li ser Selldone, hûn dikarin bi hêsanî malpera e-bazirganiya xwe, blog, civata serhêl biafirînin, û tewra pergalek POS-a serhêl ji bo firotana kesane-hemû di nav çend hûrdeman de saz bikin. Ew pergala xebitandina karsaziya serhêl a bêkêmasî ye ku ji bo ku karsaziya we çêtir, bileztir û hêsantir bixebite hatiye çêkirin.<br><br><b>:date</b> veqetînin û ji bo ku dest pê bikin qursek :amount bistînin!",
        'accept' => "Vexwendname qebûl bike",
        'owner' => "Xwediyê",
        'join-date' => "Li ser Selldone ji ber",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Girêdana Recovery| :shop",
        'category' => "Ewlekariya dikanê",
        'title' => "Zencîreya hilanînê ya <b>:shop_name</b> .",
        'message' => "Ev e-name ji we re hat şandin ji ber ku we xwest ku hûn dikana xwe vegerînin. Bi tikandina li ser zencîreya jêrîn dê dikana we û hemî daneyên ku jê re ne vegere.",
        'action' => "Piştrastkirina Shop Recovery",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone ji bo karsaziya we çiqas drav xilas kir?',
        'sub-title' => 'Ji dîroka :start heya :end',
        'infrastructure' => [
            'title' => 'Binesaziyê',
            'subtitle' => 'Server, CDN, Storage, û karûbarên din ên ewr',
        ],
        'experts' => [
            'title' => 'Pispor & Staff',
            'subtitle' => 'Pêşdebir, parastin û piştgirî',
        ],
        'total_save' => 'Bi tevahî pereyê xilas kirin'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Performansa we',
        'sub-title' => 'Pêşniyara karsaziyê ji :start heya :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Bikarhênerên Vegerandin',

        'shop_views' => 'Dikan Views',
        'baskets' => [
            'title' => 'Shopping Carts',
            'subtitle' => 'Hejmara selikên kirrûbirra nû rapor bikin',

        ],
        'products' => [
            'title' => 'Products Overview',
            'subtitle' => 'Rewşa hilberên li firotgehê li gorî celebê',
            'value_name' => 'Products'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Tevahiya dîtinên rûpela malperê',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "We fermanek nû wergirt. Ji kerema xwe di panelê firoşkarê xwe de biçin rûpela pêvajoya fermanê.",
        'subject' => "🛍 Siparîşa Nû Hatiye Wergirtin | :order_id",
        'your_revenue' => "Dahata we",
    ],
    'vendor-invite' => [
        'title' => 'Vexwendina Vendor',
        'message' => "Te dawetname standiye ku bibe firoşkarê :shop_name. Hûn dikarin wê bi tikandina bişkokên jêrîn qebûl bikin an red bikin.",
        'subject' => ":shop_name | We vexwendinek wergirt ku hûn bibin firoşkarê me",
        'accept' => "Bipejirînin û Bibin Firoşyar",
        'reject' => "Refzkirin",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Vexwendname ji bo Tevlêbûna Tîma Me',
        'message' => "Hûn hatine vexwendin ku hûn beşdarî :vendor_name li :shop_name bibin. Hûn dikarin vê vexwendinê bi bişkokên jêrîn qebûl bikin an red bikin.",
        'subject' => "Vexwendname ji bo Tevlêbûna :vendor_name|Bibin Endamê Tîmê",
        'accept' => "Bipejirînin û Tevlî Tîmê bibin",
        'reject' => "Redkirin",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Koda Têketina we ji bo :shop",
        'header-message' => "Em vê e-nameyê ji we re dişînin ji ber ku we kodek têketinê ji bo dikanê xwestiye. Ji kerema xwe şîfreya xweya yek-car (OTP) li jêr bibînin:",
        'footer-message' => "Ev kod dê 10 hûrdem derbasdar be. Ger we ev koda têketinê daxwaz nekir, ji kerema xwe vê e-nameyê paşguh nekin."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "E-nameya xwe verast bikin| :shop",
        'title' => 'Verification Email',
        'header-message' => "Silav :name,<br> Ji kerema xwe piştrast bikin ku **:email** navnîşana e-nameya we ye bi tikandina bişkojê an jî lînka jêrîn di nav 48 demjimêran de bikar bînin.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Updates Product| :shop",
        'title' => "Nûvekirina li ser Rewşa Hilberê - 24 Saetên Dawî",
        'message' => "Ez hêvî dikim ku ev peyam we baş dibîne. Ev nûvekirinek kurt e ku hûn di 24 demjimêrên borî de li ser rewşa hilberên we li ser platforma me agahdar bikin.\nDi vê heyamê de di rewşa hin berheman de guhertin çêbûne. Dibe ku ev guhertin ji ber kirîn, nûvekirinên pargîdanî, an bûyerên din ên têkildar bin.\nJi bo agahdariya berfirehtir li ser her hilberê, ji kerema xwe têkevin hesabê xwe û beşa 'Rewşa Hilberê' kontrol bikin.",
        'action' => "Panela Firoşkar vekin",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Orders Bulk Received| :shop | :date",
        'title' => "Daxuyaniya Orders Bulk",
        'message' => "We komek fermanên mezin wergirtiye. Ji kerema xwe ji bo hûrguliyên bêtir serdana rûpela pêvajoya fermanê ya di panela xwe de bikin. Her weha hûn dikarin bi lînka ewledar a ku 7 rojan derbasdar e, navnîşa fermanê dakêşin.<br><br>\n        <b>GIRING:</b> Ev girêdan 7 rojan derbasdar e.<br>\n        Ev girêdan dînamîk e, ji ber vê yekê her gava ku hûn lê bikirtînin, hûn ê ji bo vê tarîxa taybetî fermanên herî nûve bistînin. <b>Ew tê wê wateyê ku heke rewşa dravdana fermanê biguhere û bibe redkirî, hûn ê êdî wê fermanê di CSV-ya dakêşandî de nebînin, an ger ferman were dayîn, ew ê di navnîşê de xuya bibe.</b><br><br>\n        <ul>\n            <li> CSV di :date.</li> de fermanên drav bi tarîxek veqetandî vedihewîne\n            <li>Dîroka veqetandî ew tarîxa ye ku bikarhêner li ser rûpela siparîşê bitikîne.</li>\n        </ul>\n        <b>Ji bo pêşîgirtina fermanên dubare, her dem berî şandinê emrê ID kontrol bikin.</b>",
        'action' => "Lîsteya Order Daxistin",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Hin tiştên di fermana we de nehatin pejirandin û nayên radest kirin. Dê di demek kurt de dravê van tiştan ji karta we re were vegerandin."
    ]

];
