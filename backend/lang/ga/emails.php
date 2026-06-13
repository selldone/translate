<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Fáiltíonn an teachtaireacht seo roimh cheannaitheoir nua chuig an siopa.',
        ShopMailTemplateCodes::OrderCheckout => 'Seoltar an fógra seo nuair a dheimhníonn ceannaitheoir ordú.',
        ShopMailTemplateCodes::OrderPayment => 'Deimhníonn an fógra seo an íocaíocht rathúil a rinne custaiméir.',
        ShopMailTemplateCodes::OrderUpdate => 'Seoltar an teachtaireacht seo chun stádas a n-ordaithe a nuashonrú do cheannaitheoir.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Seoltar an teachtaireacht seo chuig díoltóir chun ordú deimhnithe a chur in iúl dó.',
        ShopMailTemplateCodes::PosCheckout => 'Seoltar an fógra seo chun ordú díolphointe a dheimhniú do cheannaitheoir.',
        ShopMailTemplateCodes::PosPayment => 'Deimhníonn an fógra seo íocaíocht pointe díola a rinne ceannaitheoir.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Cuireann an teachtaireacht seo an díoltóir ar an eolas faoi cheannachán a rinneadh ag an díolphointe.',
        ShopMailTemplateCodes::ShopContact => 'Seoltar an fógra seo nuair a chuirtear foirm teagmhála isteach.',
        ShopMailTemplateCodes::ShopGiftCard => 'Cuireann an fógra seo in iúl d\'úsáideoir go bhfuil cárta bronntanais faighte aige.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Fáiltíonn an teachtaireacht seo roimh dhíoltóir nua chuig an siopa.',
        ShopMailTemplateCodes::ShopVendorInvite => "Seoltar an teachtaireacht seo chun cuireadh a thabhairt do dhíoltóir dul isteach i do mhargadh.",
        ShopMailTemplateCodes::ShopVendorOrder => "Seoltar an teachtaireacht seo chuig an díoltóir nuair a fhaightear ordú i stádas Íoctha nó Airgead Tirim ar Sheachadadh (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Seolta go laethúil chun díoltóirí a nuashonrú ar stádas a gcuid táirgí.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Seoltar an teachtaireacht seo chun cuireadh a thabhairt do dhíoltóir dul isteach i do mhargadh.",

        ShopMailTemplateCodes::UserLogin => "Cuir in iúl don úsáideoir sonraí logáil isteach, lena n-áirítear seoladh IP, dáta, agus gléas, chun críocha slándála.",
        ShopMailTemplateCodes::LoginCode => "Seol cód pasfhocal aonuaire le go bhféadfaidh úsáideoirí logáil isteach sa siopa.",

        ShopMailTemplateCodes::EmailVerifyLink => "Seol nasc chun seoladh ríomhphoist an úsáideora a fhíorú. Seoltar an ríomhphost seo nuair a chláraíonn úsáideoir trí SMS agus nuair a chuireann siad a ríomhphost isteach. Ní sheoltar é nuair a chláraíonn úsáideoir go díreach le logáil isteach sóisialta nó ríomhphost.",

        ShopMailTemplateCodes::EmailBulkOrder => "Seol liosta d’orduithe faighte agus íoctha ar an mórchóir le haghaidh lá ar leith."


    ,

    ],


    'global' => [
        'greetings' => 'Dia duit, :name!',
        'end-statement' => 'Foireann tacaíochta',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Cabhair uait? Fiafraigh ag [support@selldone.com](mailto:support@selldone.com) nó tabhair cuairt ar ár [ionad cabhrach](https://selldone.com/community).",
        'selldone-team' => 'An fhoireann Selldone',
        'footer-shop' => "Má tá cabhair uait le rud ar bith ná bíodh drogall ort ríomhphost a chur chugainn: :shop_mail",
        'accept' => "Glac",
        'reject' => "Diúltaigh",
        'verify' => "fhíorú",
        'title' => "Teideal",
        'value' => "Luach",
        'description' => "Cur síos",
        'shop' => "Siopa",
        'shop-info' => "Stóráil Faisnéise",
        'user' => "úsáideoir",
        'user-info' => "Eolas Cuntais",
        'license' => "Ceadúnas",
        'status' => "Stádas",
        'start' => "Tosaigh",
        'end' => "Deireadh",
        'renewal' => "Athnuachan",
        'view' => "Amharc",

        'balance' => "Iarmhéid",
        'card_number' => "Uimhir chárta",
        'cvv' => "cvv",
        'expire_date' => "Dáta éaga",

        'Dashboard' => "Deais",
        'order' => "ordú",
        'view_order' => "Féach ar ordú",
        'pay_now' => "Pay now",

        'official_selldone' => "DÍOLTA OIFIGIÚIL",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Airgeadra",
        'free-balance' => "Iarmhéid saor in aisce,",
        'locked-balance' => "Iarmhéid faoi ghlas",
        'bot' => "Bot",
        'requests' => "Iarratais",
        'baskets' => 'cairteacha',
        'physical' => "Fisiciúil",
        'virtual' => "Fíorúil",
        'file' => "Comhad",
        'service' => "Seirbhís",
        'fulfillment' => "Comhlíonadh",
        'open' => "Oscail",
        'reserved' => "Curtha in áirithe",
        'canceled' => "Ar ceal",
        'payed' => "Íoctha",
        'cod' => "COD",
        'orders-count' => 'Orduithe',
        'payments-count' => 'Íocaíochtaí',
        'confirms-count' => 'Deimhníonn',
        'sends-count' => 'Seolann',
        'delivers-count' => 'Seachadann',
        'count' => 'Áireamh',
        'transactions-count' => 'Idirbhearta chomhaireamh',
        'success-transactions' => 'Idirbhearta ratha',
        'total-amount' => 'Iomlán',
        'amount' => 'Méid',
        'wage' => 'Pá',
        'debug' => 'Dífhabhtaithe',
        'pos' => 'POS',
        'live' => 'Beo',
        'CheckQueue' => 'Seiceáil scuaine',
        'OrderConfirm' => 'Ordú a dheimhniú',
        'PreparingOrder' => 'Ordú a ullmhú',
        'SentOrder' => 'Ordú seolta',
        'ToCustomer' => 'Seachadadh chuig an gcustaiméir',
        'Pending' => 'Ar feitheamh',
        'Accepted' => 'Glactar leis',
        'Rejected' => 'Diúltaithe',
        'pc' => 'PC',
        'tablet' => 'Táibléad',
        'phone' => 'Fón',
        'total' => 'Iomlán',
        'view-detail' => 'Féach ar Sonraigh',
        'empty' => 'Folamh',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Freagra',
        'reactions' => 'Imoibrithe',
        'Comments' => 'Tuairimí',
        'last-comment' => 'Trácht deiridh',
        'response-to' => 'Freagra ar',
        'posts' => 'Poist',
        'post' => 'Post',

        'name' => 'Ainm',
        'email' => 'Ríomhphost',
        'type' => 'cineál',
        'device' => 'Gléas',
        'platform' => 'Ardán',
        'browser' => 'Brabhsálaí',
        'time' => 'Am',
        'Wallet' => 'Sparán',
        'date' => 'Dáta',

        'account' => 'Cuntas',
        'transaction' => 'Idirbheart',
        'fee' => 'Táille',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bille',
        'category' => 'Catagóir',
        'password' => 'Pasfhocal',
        'verify-login' => "Fíoraigh & Logáil Isteach",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Ceannaigh Anois",
        'add-domain' => "Add Domain",
        'views' => 'Radhairc',


        'country' => 'Tír',
        'address' => 'seoladh',
        'postal' => 'Cód Poist',
        'building_no' => 'Foirgneamh #',
        'building_unit' => 'Aonad #',
        'message' => 'Teachtaireacht',


        'customer' => 'Custaiméir',
        'cart-items' => 'Míreanna cart',
        'payment' => 'Íocaíocht',
        'receiver' => 'Glacadóir',
        'virtual-items' => 'Míreanna fíorúil',
        'no-payment' => 'Gan íocaíocht!',

        'enable' => 'Cumasaigh',
        'access' => 'Rochtain',
        'bank' => 'Eolas bainc',

        'vendor' => 'Díoltóir',

        'view_content' => "Féach ar an ábhar iomlán",
        'files' => 'Comhaid',
        'download' => 'Íosluchtaigh',
        'file_name' => 'Ainm an Chomhaid',
        'file_size' => 'Méid',

        'subscription' => 'Sintiús',
        'products' => 'Táirgí',
        'vendor_products' => 'Táirgí Díoltóra',

        'pickup' => 'Piocadh',

        'minutes' => 'Nóiméad',
        'hours' => 'Uaireanta',

        'refund' => 'Aisíocaíocht',
        'recipient_address' => 'Seoladh Faighteoir',
        'signature' => 'Síniú',
        'blockchain' => 'Blockchain',
        'details' => 'Sonraí',


    

        'Shop' => 'Siopa',
        'dashboard' => 'deais',
        'comments' => 'tuairimí',
        'wallet' => 'sparán',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Gnó OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Tuarascáil Feidhmíochta Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Tuarascáil Séasúrach Selldone'
        ],
        'Onboarding' => [
            'id' => 'Haigh',
            'name' => 'Ceadaigh, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Tacaíocht :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'Haigh',
            'name' => 'Pobal, Selldone'
        ],
        'NewShop' => [
            'id' => 'ceannaithe',
            'name' => 'Ceadaigh, Selldone'
        ],
        'Approve' => [
            'id' => 'cheadú',
            'name' => 'Ceadaigh, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Bainistíocht Orduithe :name'
        ],

        'Recovery' => [
            'id' => 'téarnamh',
            'name' => 'Foireann Aisghabhála Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Ar feitheamh ⌛',
        'PAYED' => 'Íoctha ✅',
        'CANCELED' => 'Ar ceal ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Riarthóir',
            'OFFICER' => 'Oifigeach agus Maoirseoir',
            'AUDITING' => 'Bainisteoir iniúchta',
            'EMPLOYEE' => 'Fostaí',
            'PRODUCT' => 'Bainisteoir táirgí',
            'CONTENT' => 'Bainisteoir ábhar',
            'MARKETING' => 'Bainisteoir Margaíochta',
            'VIEWER' => 'Amharcóir',

        ],
        'subject' => "Thug :inviter cuireadh duit mar :level| :shop",
        'category' => "Cuireadh foirne",
        'title' => "Tá cuireadh tugtha duit <b>:shop_name</b> mar <b>:level</b>.",
        'message' => "Tá cuireadh faighte agat chun comhoibriú leis an bhfoireann <b>:shop_title</b> i gcúrsaí gnó. Tá an rogha agat glacadh leis an tairiscint seo nó diúltú di. Má roghnaíonn tú glacadh leis, logáil isteach ar an tseirbhís Selldone chun do chinneadh a dhearbhú. Nuair a dheimhnítear é, gheobhaidh tú rochtain ar an rannóg bainistíochta stórais.",

    ],

    'welcome-email' => [
        'subject' => "👋 Fáilte :name, Cuirfimid tús le Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Fáilte go dtí Selldone",
        'message' => "Go raibh maith agat as Selldone a roghnú, Tá tú anois mar chuid de phobal Soldone a nascann díoltóirí domhanda le custaiméirí, Gnó áitiúil le fiontar, Duine aonair don chorparáid! Tá gach uirlis máistir agus pro curtha ar fáil **saor in aisce** agus **gan teorainn** duit. Déanann tú iarracht, osclaíonn muid na doirse, Just Déan é!",

        'index' => "Céim :step.",

        'step-domain' => [
            'title' => 'Cuir D\'Fhearainn Chustaim leis',
            'message' => "Chun tús a chur leis, cuir d’fhearann saincheaptha leis saor in aisce sa Phainéal Siopa faoi Socruithe > Socruithe Fearainn.",
            'action' => 'Bainistigh Mo Fearainn',
        ],
        'step-landing' => [
            'title' => 'Saincheap Do Leathanach Baile',
            'message' => "Déan do leathanach baile a phearsantú ach dul chuig Painéal > Leathanaigh. Roghnaigh leathanach tuirlingthe nó cruthaigh ceann nua. Tá sé éasca agus iomasach, agus is féidir leat tosú ag obair air láithreach.",
            'action' => 'Saincheap Mo Leathanach Tuirlingthe',
        ],
        'step-payment' => [
            'title' => 'Socrú Modhanna Íocaíochta',
            'message' => "Tosaigh ag glacadh le híocaíochtaí go díreach isteach i do chuntas bainc. Chun do sholáthraithe íocaíochta a nascadh ar nós Stripe, PayPal, agus níos mó, téigh chuig Painéal na nIonstraimí > Cuntasaíocht > Geata.",
            'action' => 'Cuir Modhanna Íocaíochta leis',
        ],
        'step-products' => [
            'title' => 'Cuir Do Tháirgí leis',
            'message' => "Cuir táirgí agus catagóirí go héasca ar an Deais > Táirgí. Tá sé díreach cosúil le comhaid agus fillteáin a bhainistiú ar do ríomhaire - réidh le tarraingt agus scaoil. Is féidir leat freisin táirgí a allmhairiú mórchóir ag baint úsáide as Excel. Tá teimpléad samplach ar fáil chun cabhrú leat tosú.",
            'action' => 'Bainistigh Mo Tháirgí',
        ],
        'step-shipping' => [
            'title' => 'Socrú Modhanna Loingseoireachta',
            'message' => "Chun táille a ghearradh ar chustaiméirí le haghaidh loingseoireachta, sainigh do mhodhanna loingseoireachta sa Phainéal > Loighistic > Loingseoireacht. Is féidir leat praghsáil agus tacaíocht éagsúla a shocrú le haghaidh áiteanna éagsúla. Ná déan dearmad do bhunús stórais a shocrú sa Phainéal > Loighistic > Stóras.",
            'action' => 'Bainistigh Modhanna Loingseoireachta',
        ],
    

        'seller' => [
            'title' => 'An díoltóir tú?',
            'message' => 'Chun tosú ag díol, cuir isteach do dheais i Soldone tríd an nasc thíos agus cruthaigh do chéad siopa go hiomlán saor in aisce. Tógfaidh sé seo cúpla nóiméad agus beidh do stór féin agus do shuíomh ar líne agat. Déanfaimid tú a threorú ansin chuig na chéad chéimeanna eile agus gheobhaidh tú an geata íocaíochta.',
            'action' => 'Logáil isteach ar mo dheais',
        ],
        'buyer' => [
            'title' => 'Is ceannaitheoir mé',
            'message' => 'Comhghairdeachas. Nuair a bheidh tú i do bhall de Soldone, gheobhaidh tú réidh leis na hassles ballraíochta agus fíordheimhnithe i siopaí ar líne. Chun leas a bhaint as aon siopa agus láithreán a úsáideann an t-ardán Selldone, is féidir leat logáil isteach le cliceáil amháin agus do cheannach a dhéanamh simplí, tapa agus sábháilte.',
        ],
    ],


    'charge-account' => [
        'category' => 'Sparán > Cuntas > Muirear',
        'title' => "Muirear Ratha",
        'message' => "Tá do chuntas <b>:account_number</b> muirearaithe go rathúil <b>:amount</b>.",
        'account' => 'Cuntas',
        'charge' => 'Muirear',
        'balance' => 'Iarmhéid',
        'footer' => "Déan gnó éasca, indéanta, agus inrochtana do dhuine ar bith ar fud an domhain."
    ],

    'verify-email' => [
        'subject' => "🙌 Críochnaigh do chlárú le Selldone! Fíoraigh nasc.",
        'category' => "TÁ TÚ CÉIM AMHÁIN ACH",
        'title' => "Fíoraigh do sheoladh ríomhphoist",
        'message' => "Dia duit :name,<br><br>Go raibh maith agat as Selldone a roghnú!<br><br>Chun a dhearbhú gurb é <b>:email</b> do sheoladh ríomhphoist ceart, cliceáil le do thoil ar an nasc thíos nó bain úsáid as an nasc thíos. Tá 48 uair an chloig agat chun an fíorú seo a chur i gcrích.",
        'footer' => "Má tá deacracht agat an cnaipe Fíoraigh a chliceáil, cóipeáil agus greamaigh an URL thíos isteach i do bhrabhsálaí gréasáin: :activation_url",
        'next-step' => "Ansin, beidh roinnt ábhar cabhrach agus treoir céim ar chéim á sheoladh againn chugat chun é a dhéanamh éasca duit d’fhearann saincheaptha a chur leis, íocaíochtaí a shocrú, táirgí a chur leis agus do chéad ordú a fháil.",

    ],
    'verify-email-code' => [
        'subject' => "Cód fíoraithe le haghaidh :name",
        'category' => "SECURITY",
        'title' => "Cód fíoraithe ríomhphoist",
        'message' => "Dia duit :name, <br><br>Le deimhniú gurb é <b>:email</b> do sheoladh ríomhphoist ceart, cuir an cód seo a leanas isteach laistigh den chéad <b>10 nóiméad</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Tá do Shiopa Réidh| :name",
        'category' => "TÁ TÚ CÉIM AMHÁIN ACH",
        'title' => "Socrú críochnaithe",
        'account_title' => "Do chuntas",
        'account_msg' => "Fíoraigh agus logáil isteach ar do chuntas leis an bhfaisnéis seo.",
        'shop_msg' => "Eolas cuntais ar chóras oibriúcháin gnó Selldone.",

    ],

    'reset2fa' => [
        'category' => "TEACHTAIREACHT OIFIGIÚIL SLÁNDÁLA",
        'title' => "Iarratas a dhíchumasú logáil isteach 2-chéim",
        'message' => "Tá an ríomhphost seo á fháil agat toisc go bhfuaireamar iarratas chun fíordheimhniú dhá fhachtóir a athshocrú do chuntas **:name** le **:email** email.<br><br>QFuaireamar na sonraí seo a leanas do do chuntas:",
        'footer' => "Murar iarr tú athshocrú pasfhocail, níl aon ghníomh eile ag teastáil.",
        'action' => 'Díchumasaigh logáil isteach dhá chéim',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Tá do shiopa réidh anois!",
        'category' => "SIOPA AR LÍNE NUA RINNEADH SA DOMHAN",
        'title' => "Comhghairdeas, :name!",
        'message' => "<b>Congratulations, :name! Tá do ghnó nua ar líne beo anois! </b> Tá muid ar bís fáilte a chur romhat chuig an bpobal Selldoners. Tá an chéad chéim glactha agat i dtreo rathúlachta, agus táimid anseo chun cabhrú leat gach céim den bhealach.<br>Anois go bhfuil do stór réidh, déanaimis cinnte go bhfuil tú réidh le híocaíochtaí a fháil go díreach ó do chustaiméirí agus tús a chur le do Impireacht a fhás. Má bhíonn cabhair uait riamh, níl le déanamh againn ach teachtaireacht a fháil - tá ár bhfoireann tacaíochta anseo duit i gcónaí. Déanfaimid tú a threorú trí gach céim chun do stór a chur ar siúl gan uaim.",
        'pdf-book' => "Ná caill an lámhleabhar ceangailte: Déan Do Ghnó Mar Chluiche",

        'account' => [
            'title' => 'Céim 1: Cruthaigh cuntas sa sparán Selldone',
            'message' => "Chun tús a chur leis, cruthaigh cuntas i do sparán Selldone. Seo an áit a n-asbhainfear do tháillí, agus seo an áit a ndéanfaidh tú breisiú chun do stór a choinneáil ag rith go réidh. Má théann d’iarmhéid diúltach riamh, ná bíodh imní ort! Leanfaidh do shiopa ag oibriú gan bhriseadh.",
            'action' => 'Logáil isteach sa sparán',
        ],

        'shop-account' => [
            'title' => 'Céim 2: ceangal an cuntas chuig an siopa',
            'message' => "Ansin, ceangail do chuntas sparán le do stór. Téigh go <b>Store > Cuntasaíocht > Sonrasc</b>, agus nasc do sparán. Cinntíonn sé seo go ndéantar gach íocaíocht do chustaiméirí a thaisceadh go díreach isteach i do chuntas bainc - ní asbhaineann Selldone aon suimeanna ó do thuilleamh.",
            'action' => 'Painéal Sonrasc Store',
        ],

        'gateway' => [
            'title' => 'Céim 3: Ceangail Geata Íocaíochta Ar Líne',
            'message' => "Anois, socróimid do gheata íocaíochta ar líne. Téigh go <b>Store > Cuntasaíocht > Port</b> agus cliceáil ar <b>Add New Port</b>. Roghnaigh do airgeadra, agus feicfidh tú liosta de na geataí íocaíochta atá ar fáil. Tá sé tapa agus éasca geata a nascadh, ach má tá aon chabhair uait, fáilte romhat seiceáil ar na treoracha Selldone nó déan teagmháil linn.",
            'action' => 'Cuir tairseach leis an siopa',
        ],

        'domain' => [
            'title' => 'An chéim dheireanach: fearann tiomnaithe a nascadh',
            'message' => "Beidh tú in ann do stór a bheith agat ar an oiread fearainn agus is mian leat. Chun fearann tiomnaithe a nascadh le siopa, ní mór ceadúnas tosaithe ar a laghad a bheith agat. Trí gach cara a thabhairt isteach chuig Soldone, gheobhaidh tú cárta bronntanais ceadúnais tosaithe aon mhí amháin. Cuirfear céatadán d’íocaíochtaí do chairde chun sochair do chuntais do chustaiméirí freisin.",
            'action' => 'Cártaí bronntanais gan teorainn a thabhairt isteach agus a fháil',
        ],
    ],


    'basket-list' => [
        'item' => "mír",
        'count' => "Áireamh",
        'price' => "praghas",
        'discount-code' => "Cód Lascaine",
        'customer-club' => 'Club Custaiméirí',
        'shipping' => "Á sheoladh",
        'total' => "Iomlán",
        'offer' => "Tairiscint",
        'coupon' => "Cúpón",
        'lottery' => "Gradam",
        'tax' => "Cáin",
        'tax_included' => "San áireamh sa phraghas",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Modh',
        'amount' => 'Méid',
        'giftcard' => 'Gift card',
        'payment' => 'Íocaíocht',
    ],


    'shop-subscription-email' => [
        'category' => "Nuashonrú síntiús",
        'title' => "Ceadúnas Stórais: :shop_title",
        'title-reserved' => "Ceadúnas áirithinte: :shop_title",
        'title-active' => "Ceadúnas gníomhach: :shop_title",
        'title-finished' => "Ceadúnas críochnaithe: :shop_title",
        'title-cancel' => "Cealaigh ceadúnas: :shop_title",
        'message' => "Nuashonraíodh do phlean ceadúnais siopa,",
        'RESERVED' => "⚡ Tá do phlean síntiús ** curtha in áirithe**.",
        'ACTIVE' => "🟢 Tá do phlean síntiús curtha i ngníomh ****.",
        'FINISHED' => "🚧 Tá do phlean síntiús **críochnaithe**.",
        'CANCEL' => "⛔ Tá do phlean síntiús ** ar ceal**.",
    ],

    'support' => [
        'subject' => "Ionad Tacaíochta|D'fhreagair :name",
        'category' => "Ionad tacaíochta",
        'title' => "Fuair tú freagra",
        'action' => "Oscail riarachán siopa",
    ],

    'shop-customer-join' => [
        'subject' => "Cláraigh le :shop_title",
        'category' => "Ceiliúradh custaiméara nua",
        'title' => "Tá áthas orainn as do bhallraíocht",
        'action' => "Tabhair cuairt anois",
    ],

    'shop-vendor-join' => [
        'subject' => "Bordáil Díoltóra| :shop_title",
        'category' => "Ceiliúradh díoltóir nua",
        'title' => "Tá áthas orainn as do bhallraíocht",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Cárta Bronntanas :shop_title",
        'category' => "Cuir cárta nua leis",
        'title' => "Comhghairdeas, tá cárta bronntanais faighte agat",
        'action' => "Siopa anois",
        'message' => "Tá cárta bronntanais fiú :balance :currency faighte agat. Is féidir leat an cárta bronntanais seo a úsáid inár siopa.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Ionad Tacaíochta| :shop",
        'category' => "tacaíocht",
        'title' => "Fuair tú freagra",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Deimhniú Ordaithe|Ordú :order_id",
        'title' => "ordú",
        'message' => "Chuir tú ordú ag ár siopa. Fuaireamar d’ordú agus seolfaimid ríomhphost eile chugat nuair a dheimhnítear an íocaíocht."
    ,

        'payments' => 'Íocaíochtaí',
    ],

    'order-payment' => [
        'subject' => "🛍️ Deimhniú Íocaíochta|Ordú :order_id",
        'title' => "Ordú íocaíochta",
        'message' => "D'íocaíocht críochnaithe,<br> Tá d'ordú faighte againn. Seolfaimid ríomhphost eile chugat nuair a sheolfar d'ordú.",
    

        'payments' => 'Íocaíochtaí',
    ],

    'order-update' => [
        'subject' => "🛍️ Nuashonrú Stádas Ordaithe|Ordú :order_id",
        'title' => "Nuashonrú Stádas Ordaithe",
        'message' => "Nuashonraíodh d'ordú. Is féidir leat stádas is déanaí an ordaithe seo a sheiceáil i do chuntas.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Tá d'ordú sa scuaine le haghaidh próiseála. Cuirfimid in iúl duit nuair a bheidh sé á ullmhú.",
                'OrderConfirm' => "Deimhnítear d’ordú agus tá tús curtha leis an ullmhúchán.",
                'PreparingOrder' => "Tá d’ordú á ullmhú agus seolfar é go luath.",
                'SentOrder' => "Tá d'ordú seolta. Gheobhaidh tú go luath é.",
                'ToCustomer' => "Tá d'ordú seachadta. Tá súil againn go mbainfidh tú taitneamh as!",

                'PreparingOrder-PICKUP' => "Tá d'ordú á ullmhú. Gheobhaidh tú fógra nuair a bheidh sé réidh le bailiú.",
                'SentOrder-PICKUP' => "Tá d'ordú réidh le bailiú. Tar go dtí an siopa le do thoil chun é a bhailiú.",
                'ToCustomer-PICKUP' => "Tá d'ordú roghnaithe. Tá súil againn go mbainfidh tú taitneamh as!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Tá d'ordú sa scuaine le haghaidh próiseála. Cuirfimid in iúl duit nuair a bheidh sé réidh.",
                'OrderConfirm' => "Deimhnítear d’ordú agus tá an t-ullmhúchán ar siúl.",
                'PreparingOrder' => "Tá d’ordú á ullmhú agus seolfar chugat go luath é.",
                'ToCustomer' => "Seachadadh d'ordú fíorúil chuig do chuntas. Go raibh maith agat!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Tá d'iarratas seirbhíse sa scuaine. Cuirfimid tú ar an eolas nuair a thosaímid.",
                'OrderConfirm' => "Tá do sheirbhís deimhnithe agus táimid ag ullmhú le tosú.",
                'PreparingOrder' => "Táimid ag ullmhú do sheirbhíse, agus tabharfaimid fógra duit nuair a bheidh sé críochnaithe.",
                'ToCustomer' => "Tá do sheirbhís críochnaithe. Go raibh maith agat as sinn a roghnú!"
            ],
            'FILE' => [
                'PreparingOrder' => "Tá do chomhad á ullmhú agus beidh sé ar fáil go luath.",
                'ToCustomer' => "Tá do chomhad réidh agus seachadta. Is féidir leat é a íoslódáil anois."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Tá d'ordú síntiúis sa scuaine. Cuirfimid tú ar an eolas nuair a thosaíonn an phróiseáil.",
                'OrderConfirm' => "Deimhníodh do shíntiús agus tá sé á shocrú.",
                'PreparingOrder' => "Táimid ag ullmhú do shíntiús agus cuirfear tús leis go luath.",
                'SentOrder' => "Cuireadh do shíntiús i ngníomh. Gheobhaidh tú nuashonruithe leanúnacha.",
                'ToCustomer' => "Cuireadh do sheirbhís síntiúis i ngníomh go rathúil."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Comhghairdeachas :name | Dearbhán nua: :title',
        'category' => "COMHGHAIRDEAS, Dearbhán NUA",
        'message' => "Hey :name, <br><br>Tá dearbhán nua faighte agat mar bhronntanas uainn! Is féidir leat níos mó dearbhán a thuilleamh trí Selldone a thabhairt isteach do do chairde agus do gach duine a bhfuil aithne agat air. Is fiú an dearbhán seo **:price :currency**.<br><br>Tá an chéad chéim glactha agat, agus táimid anseo chun cabhrú leat gnéithe nua a dhíghlasáil le do dhearbhán! Logáil isteach le do thoil le **:email** agus aimsigh do dhearbhán sa Siopa **Deais** > **Socruithe** > **Ceadúnas**.<br><br>Congratulations!",
        'action' => "Mo phainéal",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Comhghairdeachas leat, a chara :name | Tá bronntanas faighte agat',
        'category' => "Fógra go bhfuarthas bronntanas",
        'title' => "Bronntanais ar do shon",
        'message' => "Dia duit :name, tá áthas orainn a chur in iúl duit go bhfuil bronntanas speisialta faighte agat ó Selldone! 🎉 Is féidir leat níos mó bronntanais a thuilleamh trí bheith gníomhach, do stór a fhás agus do shaineolas ar Selldone a fheabhsú. Chun do bhronntanas a sheiceáil, níl le déanamh ach logáil isteach le :email agus breathnaigh air sa chúinne uachtarach ar dheis de do dheais.<br><br>QQ Is fiú **:price :currency** an bronntanas seo, agus is féidir leat é a thaisceadh go héasca isteach i do sparán laistigh de Selldone.QQ0Q009 do gift a uasghrádú go dtí do bhronntanas QQ0Q009 ceadúnas siopa agus díghlasáil uirlisí níos cumhachtaí fós chun do ghnó ar líne a threisiú!",
        'action' => "Bronntanais",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Ordú Nua Faighte| :order_id",
        'title' => "New Order",
        'message' => "Tá ordú nua faighte agat. Téigh go dtí an leathanach próiseála orduithe i do stór.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Do Fhaisnéis Líonta',
        'output-form-title' => 'Ceannaíodh faisnéis faoi mhíreanna',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Tuarascáil Seachtainiúil :time',
        'title' => 'Tuarascáil sheachtainiúil ar fheidhmíocht an tsiopa',
        'message' => "Seo é tuarascáil sheachtainiúil do stór ó <b>:start</b> go <b>:end</b>. Áirítear sa tuarascáil seo leideanna chun do ghnó a fheabhsú, is féidir leat stádas do shiopa ar líne agus orduithe le déanaí a sheiceáil freisin. Tá súil agam go mbeidh lá agus seachtain mhaith agaibh amach romhainn."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Do thuairisc shábháil :amount le trí mhí anuas| :shop_title',
        'title' => 'Tuairisc shéasúrach faoi do ghníomhaíocht gnó, luaíochtaí agus coigilteas airgeadais',
        'message' => "Seo do thuarascáil séasúrach <b>:shop_title</b> ó <b>:start</b> go <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Cuntais nasctha',
        'sub-title' => 'Cad é an stádas is déanaí de na cuntais sparán a bhaineann le mo stór?',
        'view-wallet' => 'Féach ar an sparán',
        'tip-title' => 'Leideanna tábhachtacha',
        'tip' => "Sa chéad chéim eile, cruthaigh cuntas saor in aisce i do sparán Selldone agus ceangail leis an siopa seo é. Fiú má tá iarmhéid do chuntais Soldone diúltach, is féidir le do chustaiméirí ceannacháin agus íocaíochtaí a dhéanamh ar do stór gan aon fhadhbanna. Ní chuirfear isteach ar do shonraí agus seirbhís ná ní chuirfear srian orthu ar feadh 1 mhí ar a laghad.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Ceangail leis an gcuntas'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps suiteáilte',
        'sub-title' => 'Liosta de na haipeanna atá suiteáilte agat i do shiopa an tseachtain seo.',
        'tip' => "Ar mhaith leat níos mó aipeanna a aimsiú do do shiopa?",
        'view-app-store' => 'Déan iniúchadh ar an App Store Selldone',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Do Store Róbónna',
        'sub-title' => 'Róbónna díolacháin gníomhacha i mo stór.',
        'tip-title' => 'Díolachán Bot',
        'tip' => "Cuireann Selldone róbónna díolacháin uathoibrithe ar fáil duit. Níl ort ach iad a ghníomhachtú ach cuairt a thabhairt ar an rannán Breiseáin > Róbónna. Cinntigh go bhfuil na seirbhísí riachtanacha ar fáil i do réigiún le haghaidh oibriú rianúil.",
        'view-bots' => 'Bainistigh róbónna',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Cumarsáid le Custaiméirí',
        'sub-title' => 'Cé mhéad teagmháil a bhí agam le mo chliaint an tseachtain seo?',
        'faqs' => 'Ceisteanna Coitianta',
        'tickets' => 'Ticéid do Chustaiméirí',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Stádas Úsáideora',
        'sub-title' => 'Gníomhaíocht ó :start go :end',
        'users' => [
            'title' => 'Custaiméirí',
            'subtitle' => 'Úsáideoirí Cláraigh',
        ],
        'views' => [
            'title' => 'Cuairteanna',
            'subtitle' => 'Cé mhéad uair a thug tú cuairt ar an siopa',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Úsáideoirí Ar Ais',

        'shop_views' => 'Radhairc Siopa',
        'baskets' => [
            'title' => 'Cairteacha Siopadóireachta',
            'subtitle' => 'Tuairiscigh líon na gcairteanna siopadóireachta nua',
        ],
        'products' => [
            'title' => 'Forbhreathnú ar Tháirgí',
            'subtitle' => 'Stádas na dtáirgí sa siopa de réir cineáil',
            'value_name' => 'Táirgí'
        ],
        'products_count' => 'Cineálacha táirgí',
        'views_count' => 'Féach ar chomhaireamh',
        'sell_count' => 'Comhaireamh a dhíol',
        'send_count' => 'Comhaireamh loingseoireachta',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Buail Loingseoireacht',
        'sub-title' => 'Painéal do mhórdhíoltóirí Drop Shipping Selldone.',
        'total_fulfillments' => 'Iomlán na nOrduithe a Fuarthas',
        'ds_count' => 'Orduithe Faighte',
        'statistics_title' => 'Fuair an tuarascáil orduithe',
        'ds_cancels' => 'Cealaigh ag díoltóir comhéadan',
        'ds_rejects' => 'Cealaigh Tú',
        'tip' => "An díoltóir mór tú le stóras, monarcha, nó dáileoir táirgí? Is féidir leat do bhaint amach a leathnú trí do tháirgí a thairiscint do dhíoltóirí eile trí sheirbhís Drop Shipping Selldone. Seol ríomhphost chugainn ag support@selldone.com chun tuilleadh a fhoghlaim.",
        'view-drop-shipping-panel' => 'Logáil isteach ar an bpainéal mórdhíola',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Rátaí malairte',
        'sub-title' => 'Liosta de na rátaí comhshó airgeadra is déanaí i do stór.',
        'from' => 'Airgeadra Foinse',
        'to' => 'Airgeadra ceann scríbe',
        'rate' => 'Ráta comhshó',
        'view-exchange-panel' => 'Bainistigh Rátaí Malairte',
    

        'vew-exchange-panel' => 'painéal bainistíochta ráta malairte',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Conarthaí saineolaithe',
        'sub-title' => 'Cad iad na gairmithe a oibríonn ar mo stór?',
        'cost' => 'Méid an chonartha',
        'duration' => 'Fad',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dáta Cealaigh',
        'end_at' => 'Dáta Seachadta',
        'tip' => 'Is féidir leat na speisialtóirí is fearr a fhostú i Selldone chun do ghnó a fhorbairt.',
        'view-experts' => 'Cliceáil chun tús a chur leis.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Geataí Íocaíochta Gníomhacha ar Do Shiopa :shop',
        'tip-title' => 'Leideanna tábhachtacha',
        'tip' => "Téigh go dtí an leathanach bainistíochta tairseach i do stór agus cuir calafort amháin ar a laghad i gceann cúpla nóiméad. Is maith le do chustaiméirí íoc go tapa agus go slán trí thairseacha ar líne.",
        'view-shop-gateways' => 'Logáil isteach i mo stór bainistíochta tairseach.',
        'view-gateways' => 'Féach ar níos mó geataí',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Orduithe',
        'sub-title' => 'Liosta na n-orduithe a fuair mé an tseachtain seo.',
        'total_baskets' => 'Orduithe Iomlána',
        'total_posBaskets' => 'Orduithe Airgid Iomlána',
        'pos-title' => 'Bosca Stórais POS',
        'chart-label' => 'Orduithe críochnaithe (ní gá go n-íoctar na horduithe seo!)',
        'tip-title' => 'Ba chóir duit iarracht a dhéanamh níos deacra ...',
        'tip' => "Gan rath simplí.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Ionad próiseála',
        'sub-title' => 'Cé mhéad ordú a phróiseáil muid sa siopa an tseachtain seo?',
        'tip-title' => 'Ní raibh díol agat!',
        'tip' => "Ar an drochuair ní raibh aon díolachán agat an tseachtain seo. Ní mór duit níos mó a fháil chuig do stór. Is féidir leat níos mó táirgí a chur leis, íomhánna níos fearr a roghnú nó tuairiscí níos fearr a scríobh ar do tháirgí. Smaoinigh ar phost lánaimseartha do do ghnó. Má dhéanann tú é i gceart agus mura bhfaigheann tú frustrachas, éireoidh leat.",
        'view-process-center' => 'Féach ar lárionad próisis',
        'return' => [
            'title' => 'Ordú ar Ais',
            'subtitle' => 'Tuairiscigh orduithe ar ais.',
            'tip-title' => 'An raibh a fhios agat go bhfuil ...',
            'tip' => "Is féidir leat an oiread scipéid airgid stórais agus is mian leat a chruthú trí Soldone POS! Déanta na fírinne, is féidir leat do táibléad, fón póca nó ríomhaire glúine a chur isteach i do bhosca isteach. Más rud é go spreagfaidh tú, Selldone POS Tá sé rud éigin ba chóir duit tosú a úsáid anois. Ní thógann sé ach cliceáil simplí le seoladh, tá gach rud ullmhaithe againn do do fhreastalaí roimh ré.",
            'view-pos' => 'Logáil isteach ar Mo Airgeadóir Store Ar Líne'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Seisiúin',
        'sub-title' => 'Cé mhéad uair a thug mé cuairt ar mo stór?',
        'countries-title' => 'Cad iad na tíortha is mó ar tugadh cuairt orthu?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ar mhaith leat airgead a dhéanamh gan buicéad amháin a chaitheamh?',
        'message' => "Dia duit :name, tá sé in am tosú ag tuilleamh le Selldone! Téigh go Painéal > Tuilleadh > Airgeadú > Faigh Do Nasc Atreoraithe. Roinn an nasc le do chairde, agus tuilleamh cártaí bronntanais agus sciar dá n-íocaíochtaí. An chuid is fearr? Faigheann tú féin agus do chara cárta bronntanais!",
        'action' => 'Féach ar mo nasc réamhrá',
        'mail-clip' => "<b style='color: #C2185B'>Tábhachtach:</b> Má úsáideann tú seirbhísí ríomhphoist ar nós Gmail a chuireann teorainn le fad an ríomhphoist, faigh an rogha seo a leanas ag deireadh an ríomhphoist chun an tuairisc iomlán a thaispeáint agus cliceáil air:",

        'no-coin-reward' => "<b style='color: #C2185B'>Ár leithscéal:</b> Níor chomhlíon do ghníomhaíocht an riachtanas chun luach saothair Boinn SEL saor in aisce a fháil. Déan iarracht níos deacra agus díol níos mó ar do shiopa don séasúr seo chugainn.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Comhghairdeas:</b> Jab iontach! Bunaithe ar do fheidhmíocht den scoth, tá Boinn :amount SEL curtha chun sochair againn do do chuntas mar luach saothair.",

        'need-buy-license' => "<b>Level Up Your Business:</b> Tá an chuma ar an scéal nach bhfuil aon phlean síntiús cláraithe agat do do shuíomh Gréasáin go fóill! Uasghrádaigh anois chun níos mó gnéithe a dhíghlasáil le haghaidh :amount amháin in aghaidh na míosa má íoctar go bliantúil é.",
        'not-afford-message' => "Mura bhfuil tú in acmhainn nó má tá deacracht ar bith agat le híocaíocht, ná bíodh drogall ort é sin a chur in iúl dúinn trí support@selldone.com.",
        'add-domain' => "<b>Cén fáth nach mbeadh fearann saincheaptha agat do do ghnó?</b><br> Cuir fearann le do shuíomh Gréasáin anois; tá sé saor!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Tá Selldone a<del> táirge</del> <span style = 'color: forestgreen'>pobail</span> .<br> Bí i do Dhíoltóir gairmiúil!",
        'message' => "Lean leathanaigh oifigiúla an Selldone ar Twitter, LinkedIn agus líonraí sóisialta. Seol aon tuairimí, iarratais nó cáineadh chugainn nó páirt a ghlacadh i bplé faoin Selldone. Táimid mar chuid den phobal Selldone a dhéanann <b>You </b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Fuarthas Orduithe Nua Avocado|:shop_title :time',
        'title' => "Tuairisc feidhmíochta le 24 uair an chloig anuas",
        'message' => "Tá do chustaiméirí ag fanacht go ndéanfar athbhreithniú agus praghas ar d'orduithe. Freagair iarratais do chustaiméirí a luaithe is féidir chun níos mó díolacháin a fháil.",
        'card_title' => "Orduithe sa scuaine",
        'card_subtitle' => "Ós rud é :date",

        'card_payed' => "Orduithe íoctha"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Freagair do phostáil i :community_title',
        'title' => ":name, agus :count daoine eile a rinne trácht ar do phostálacha.",
        'message' => "Dia duit :name, tá aird á tabhairt ar do phoist! Tá tuairimí faighte agat inár bpobal. Logáil isteach ar do chuntas chun páirt a ghlacadh sa phlé agus féach cad atá á rá ag gach duine.",
        'title-simple' => "Tá tráchtaireacht déanta ag :name ar do phost!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Freagair do thopaic :topic_title',
        'title' => "D'fhreagair :name, agus daoine eile :count ar do ábhar.",
        'message' => "Dia duit :name, tá do ábhar ag fáil aird! Tá freagraí faighte agat inár bpobal. Logáil isteach ar do chuntas chun páirt a ghlacadh sa phlé agus féach cad atá á rá ag gach duine.",
        'title-simple' => "D'fhreagair :name ar do ábhar.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Logáil Isteach Nua :name',
        'category' => 'Fógraí slándála',
        'title' => "Logáil isteach sa Chuntas",
        'message' => "A chara :name, tá tú logáilte isteach i do chuntas Selldone.",   // Login in selldone (seller)
        'message-shop' => "A chara :name, aimsíodh logáil isteach chuig :shop_title.",  // Login in shop (buyer)

        'footer' => "Mura bhfuil tú logáilte isteach, athraigh do phasfhocal.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "A tharraingt siar",
        'deposit' => "Taisce",

        'withdraw_subject' => "Tarraingt siar ón gcuntas :account",
        'deposit_subject' => "Taisce sa chuntas :account",

        'message' => "Tá an t-aistriú airgid déanta leis na sonraíochtaí seo a leanas.",

        'type' => "Cineál idirbhirt",

        'from' => "Cuntas foinse",
        'to' => "Destination account",

        'desc' => "Cur síos ar an idirbhirt",
        'action' => "Féach ar idirbheart",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Tábhachtach! Sárú rialacha| :shop",
        'category' => "Eolas criticiúil",
        'title' => "Gearradh pionós ar do shiopa",
        'action' => "Oscail painéal siopa",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => "Thug :inviter cuireadh duit a bheith páirteach i Selldone",
        'title' => "Chuir :name :amount chugat chun cabhrú le do shiopa nua ar líne a sheoladh agus airgead a dhéanamh air!",
        'message' => "Dia duit **:receiver_name**,<br><br>Fáilte go Selldone! Ar Selldone, is féidir leat do shuíomh ríomhthráchtála, blag, pobal ar líne a chruthú go héasca, agus fiú córas POS ar líne a bhunú le haghaidh díolacháin phearsanta - go léir laistigh de nóiméad. Is é an córas oibriúcháin gnó iomlán ar líne atá deartha chun do ghnó a dhéanamh níos fearr, níos tapúla agus níos éasca a rith.<br><br>Cláraigh le <b>:date</b> agus faigh dearbhán :amount chun tús a chur leis!",
        'accept' => "Glac le cuireadh",
        'owner' => "Úinéir na",
        'join-date' => "Ar Selldone ó shin",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Nasc athshlánaithe| :shop",
        'category' => "Slándáil siopa",
        'title' => "Nasc aisghabhála stórais de <b>:shop_name</b>.",
        'message' => "Seoladh an ríomhphost seo chugat toisc gur iarr tú do stór a chur ar ais. Má chliceálann tú ar an nasc thíos gheobhaidh tú do shiopa agus na sonraí go léir a bhaineann leis.",
        'action' => "Deimhnigh Aisghabháil Siopa",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Cé mhéad airgid a shábháil Selldone do do ghnó?',
        'sub-title' => 'Ón dáta :start go :end',
        'infrastructure' => [
            'title' => 'Bonneagar',
            'subtitle' => 'Freastalaithe, CDN, Stóráil, agus seirbhísí scamall eile',
        ],
        'experts' => [
            'title' => 'Saineolaithe & Foireann',
            'subtitle' => 'Forbróirí, cothabháil, agus tacaíocht',
        ],
        'total_save' => 'Iomlán airgead a shábháil'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Do fheidhmíocht',
        'sub-title' => 'Forbhreathnú gnó ó :start go :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Úsáideoirí Ar Ais',

        'shop_views' => 'Radhairc Siopa',
        'baskets' => [
            'title' => 'Cairteacha Siopadóireachta',
            'subtitle' => 'Tuairiscigh líon na gcairteanna siopadóireachta nua',

        ],
        'products' => [
            'title' => 'Forbhreathnú ar Tháirgí',
            'subtitle' => 'Stádas na dtáirgí sa siopa de réir cineáil',
            'value_name' => 'Táirgí'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Radhairc iomlán leathanaigh an tsuímh Ghréasáin',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Tá ordú nua faighte agat. Téigh go dtí an leathanach próiseála orduithe i do phainéal díoltóirí.",
        'subject' => "🛍️ Ordú Nua Faighte| :order_id",
        'your_revenue' => "Do na Coimisinéirí Ioncaim",
    ],
    'vendor-invite' => [
        'title' => 'Cuireadh Díoltóra',
        'message' => "Tá cuireadh faighte agat a bheith mar dhíoltóir :shop_name. Is féidir leat glacadh leis nó diúltú dó trí chliceáil ar na cnaipí seo a leanas.",
        'subject' => ":shop_name |Cuireadh chun bheith ar ár díoltóir",
        'accept' => "Glac & Bí i do Dhíoltóir",
        'reject' => "Diúltaigh",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Cuireadh chun Ballraíochta lenár bhFoireann',
        'message' => "Tugadh cuireadh duit a bheith páirteach i :vendor_name ag :shop_name. Is féidir leat glacadh leis an gcuireadh seo nó é a dhiúltú ach úsáid a bhaint as na cnaipí thíos.",
        'subject' => "Cuireadh chun Member :vendor_name|Bí i d'Fhoireann",
        'accept' => "Glac & Bí ar an bhFoireann",
        'reject' => "Diúltaigh",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Do Chód Logáil Isteach le haghaidh :shop",
        'header-message' => "Táimid ag seoladh an ríomhphost seo chugat toisc gur iarr tú cód logáil isteach don siopa. Faigh do Phasfhocal Aonuaire (OTP) thíos:",
        'footer-message' => "Beidh an cód seo bailí ar feadh 10 nóiméad. Murar iarr tú an cód logála isteach seo, déan neamhaird den ríomhphost seo le do thoil."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Fíoraigh do ríomhphost| :shop",
        'title' => 'Fíorú Ríomhphoist',
        'header-message' => "Dia duit :name, <br>Please deimhnigh gurb é **:email** do sheoladh ríomhphoist trí chliceáil ar an gcnaipe thíos nó ag baint úsáide as an nasc thíos laistigh de 48 uair an chloig.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Nuashonruithe Táirge| :shop",
        'title' => "Nuashonrú ar Stádas Táirge - 24 uair an chloig is déanaí",
        'message' => "Tá súil agam go bhfaighidh an teachtaireacht seo go maith thú. Is nuashonrú gairid é seo chun tú a chur ar an eolas faoi stádas do tháirgí ar ár n-ardán le 24 uair an chloig anuas.\nLe linn na tréimhse seo, tá athruithe tagtha ar stádas roinnt táirgí. D'fhéadfadh na hathruithe seo a bheith mar gheall ar cheannacháin, nuashonruithe stoic nó imeachtaí gaolmhara eile.\nChun faisnéis níos mionsonraithe a fháil faoi gach táirge, logáil isteach i do chuntas agus seiceáil an rannán 'Stádas Táirge'.",
        'action' => "Oscail Painéal Díoltóra",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "BulcOrduithe a Fuarthas| :shop | :date",
        'title' => "Fógra Orduithe Bulc",
        'message' => "Tá baisc orduithe bulc faighte agat. Tabhair cuairt ar an leathanach próiseála orduithe i do phainéal le haghaidh tuilleadh sonraí. Is féidir leat an liosta orduithe a íoslódáil freisin tríd an nasc slán a sholáthraítear, bailí ar feadh 7 lá.<br><br>\n        <b>IMPORTANT:</b> Tá an nasc seo bailí ar feadh 7 lá.<br>\n        Tá an nasc seo dinimiciúil, mar sin gach uair a chliceálann tú é, gheobhaidh tú na horduithe is nuashonraithe don dáta sonrach seo. Ciallaíonn <b>It má athraíonn an stádas íocaíochta ordú go diúltaithe, ní fheicfidh tú an t-ordú sin a thuilleadh sa CSV íoslódáilte, nó má íoctar an t-ordú, beidh sé le feiceáil sa liosta.</b><br><br>\n        <ul>\n            <li>Tá orduithe íoctha le dáta forchoimeádta sa CSV sa :date.</li>\n            Is é <li>Reserved dáta an dáta a chliceálann an t-úsáideoir seiceáil amach ar an leathanach ordaithe.</li>\n        </ul>\n        <b>To cosc orduithe dúblach, seiceáil i gcónaí ar an Ordú ID roimh sending.</b>",
        'action' => "Íoslódáil liosta orduithe",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Níor glacadh le roinnt míreanna i d'ordú agus ní féidir iad a sheachadadh. Aisíocfar an méid do na míreanna seo le do chárta go luath."
    ]

];

