<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Þessi skilaboð bjóða nýjan kaupanda velkominn í búðina.',
        ShopMailTemplateCodes::OrderCheckout => 'Þessi tilkynning er send þegar kaupandi staðfestir pöntun.',
        ShopMailTemplateCodes::OrderPayment => 'Þessi tilkynning staðfestir árangursríka greiðslu sem viðskiptavinur hefur gert.',
        ShopMailTemplateCodes::OrderUpdate => 'Þessi skilaboð eru send til að uppfæra kaupanda um stöðu pöntunar hans.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Þessi skilaboð eru send til seljanda til að tilkynna þeim um staðfesta pöntun.',
        ShopMailTemplateCodes::PosCheckout => 'Þessi tilkynning er send til að staðfesta pöntun á sölustað fyrir kaupanda.',
        ShopMailTemplateCodes::PosPayment => 'Þessi tilkynning staðfestir greiðslu á sölustað sem kaupandi hefur gert.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Þessi skilaboð tilkynna seljanda um kaup sem gerðar eru á sölustað þeirra.',
        ShopMailTemplateCodes::ShopContact => 'Þessi tilkynning er send þegar snertingareyðublað hefur verið sent.',
        ShopMailTemplateCodes::ShopGiftCard => 'Þessi tilkynning lætur notanda vita að hann hafi fengið gjafakort.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Þessi skilaboð bjóða nýjan söluaðila velkominn í búðina.',
        ShopMailTemplateCodes::ShopVendorInvite => "Þessi skilaboð eru send til að bjóða söluaðila að taka þátt í markaðstorginu þínu.",
        ShopMailTemplateCodes::ShopVendorOrder => "Þessi skilaboð eru send til lánardrottins þegar pöntun er móttekin í annað hvort Greitt eða staðgreiðslu (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Sendt daglega til að uppfæra söluaðila um stöðu vara þeirra.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Þessi skilaboð eru send til að bjóða söluaðila að taka þátt í markaðstorginu þínu.",

        ShopMailTemplateCodes::UserLogin => "Láttu notandann vita með innskráningarupplýsingum, þar á meðal IP heimilisfangi, dagsetningu og tæki, í öryggisskyni.",
        ShopMailTemplateCodes::LoginCode => "Sendu einu sinni lykilorðskóða fyrir notendur til að skrá sig inn í verslunina.",

        ShopMailTemplateCodes::EmailVerifyLink => "Sendu tengil til að staðfesta netfang notandans. Þessi tölvupóstur er sendur þegar notandi skráir sig með SMS og slær inn tölvupóstinn sinn. Það er ekki sent þegar notandi skráir sig beint með félagslegri innskráningu eða tölvupósti.",

        ShopMailTemplateCodes::EmailBulkOrder => "Sendu lista yfir mótteknar og greiddar pantanir í lausu fyrir tiltekinn dag."


    ,

    ],


    'global' => [
        'greetings' => 'Hæ, :name!',
        'end-statement' => 'Stuðningsteymi',

        'receiver_name' => 'Hæ :user_name',
        'footer-help' => "Þarftu aðstoð? Spyrðu á [support@selldone.com](mailto:support@selldone.com) eða heimsóttu [hjálparmiðstöðina](https://selldone.com/community).",
        'selldone-team' => 'Selldone teymið',
        'footer-shop' => "Ef þig vantar aðstoð við eitthvað skaltu ekki hika við að senda okkur tölvupóst: :shop_mail",
        'accept' => "Samþykkja",
        'reject' => "Hafna",
        'verify' => "sannreyna",
        'title' => "Titill",
        'value' => "Gildi",
        'description' => "Lýsing",
        'shop' => "Verslun",
        'shop-info' => "Upplýsingar um verslun",
        'user' => "notandi",
        'user-info' => "Reikningsupplýsingar",
        'license' => "Leyfi",
        'status' => "Staða",
        'start' => "Byrjaðu",
        'end' => "Enda",
        'renewal' => "Endurnýjun",
        'view' => "Útsýni",

        'balance' => "Jafnvægi",
        'card_number' => "Kortanúmer",
        'cvv' => "Cvv",
        'expire_date' => "Gildistími",

        'Dashboard' => "Mælaborð",
        'order' => "pöntun",
        'view_order' => "Skoða pöntun",
        'pay_now' => "Pay now",

        'official_selldone' => "OPINBER SELT",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Gjaldmiðill",
        'free-balance' => "Ókeypis jafnvægi",
        'locked-balance' => "Læst jafnvægi",
        'bot' => "Bot",
        'requests' => "Beiðnir",
        'baskets' => 'Kerrur',
        'physical' => "Líkamlegt",
        'virtual' => "Sýndarmynd",
        'file' => "Skrá",
        'service' => "Þjónusta",
        'fulfillment' => "Uppfylling",
        'open' => "Opið",
        'reserved' => "Frátekið",
        'canceled' => "Hætt við",
        'payed' => "Greitt",
        'cod' => "COD",
        'orders-count' => 'Pantanir',
        'payments-count' => 'Greiðslur',
        'confirms-count' => 'Staðfestir',
        'sends-count' => 'Sendir',
        'delivers-count' => 'Afhendir',
        'count' => 'Telja',
        'transactions-count' => 'Viðskipti telja',
        'success-transactions' => 'Árangursrík viðskipti',
        'total-amount' => 'Heildarupphæð',
        'amount' => 'Magn',
        'wage' => 'Laun',
        'debug' => 'Villuleit',
        'pos' => 'POS',
        'live' => 'Lifa',
        'CheckQueue' => 'Athugaðu biðröð',
        'OrderConfirm' => 'Pöntun staðfest',
        'PreparingOrder' => 'Undirbúa pöntun',
        'SentOrder' => 'Send pöntun',
        'ToCustomer' => 'Afhent viðskiptavinum',
        'Pending' => 'Í bið',
        'Accepted' => 'Samþykkt',
        'Rejected' => 'Hafnað',
        'pc' => 'PC',
        'tablet' => 'Spjaldtölva',
        'phone' => 'Sími',
        'total' => 'Samtals',
        'view-detail' => 'Skoða smáatriði',
        'empty' => 'Tómt',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Svaraðu',
        'reactions' => 'Viðbrögð',
        'Comments' => 'Athugasemdir',
        'last-comment' => 'Síðasta athugasemd',
        'response-to' => 'Viðbrögð við',
        'posts' => 'Færslur',
        'post' => 'Post',

        'name' => 'Nafn',
        'email' => 'Tölvupóstur',
        'type' => 'tegund',
        'device' => 'Tæki',
        'platform' => 'Pallur',
        'browser' => 'Vafri',
        'time' => 'Tími',
        'Wallet' => 'Veski',
        'date' => 'Dagsetning',

        'account' => 'Reikningur',
        'transaction' => 'Viðskipti',
        'fee' => 'Gjald',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Flokkur',
        'password' => 'Lykilorð',
        'verify-login' => "Staðfestu og skráðu þig inn",
        'url' => 'URL',
        'avocado' => 'Avókadó',
        'hyper' => 'Hár',
        'buy-now' => "Kaupa núna",
        'add-domain' => "Add Domain",
        'views' => 'Útsýni',


        'country' => 'Land',
        'address' => 'heimilisfang',
        'postal' => 'póstnúmer',
        'building_no' => 'Bygging #',
        'building_unit' => 'Eining #',
        'message' => 'Skilaboð',


        'customer' => 'Viðskiptavinur',
        'cart-items' => 'Körfuvörur',
        'payment' => 'Greiðsla',
        'receiver' => 'Viðtakandi',
        'virtual-items' => 'Sýndarhlutir',
        'no-payment' => 'Engin greiðsla!',

        'enable' => 'Virkja',
        'access' => 'Aðgangur',
        'bank' => 'Bankaupplýsingar',

        'vendor' => 'Seljandi',

        'view_content' => "Skoða allt efnið",
        'files' => 'Skrár',
        'download' => 'Sækja',
        'file_name' => 'Skráarheiti',
        'file_size' => 'Stærð',

        'subscription' => 'Áskrift',
        'products' => 'Vörur',
        'vendor_products' => 'Vörur söluaðila',

        'pickup' => 'Afhending',

        'minutes' => 'Fundargerð',
        'hours' => 'Klukkutímar',

        'refund' => 'Endurgreiðsla',
        'recipient_address' => 'Heimilisfang viðtakanda',
        'signature' => 'Undirskrift',
        'blockchain' => 'Blockchain',
        'details' => 'Upplýsingar',


    

        'Shop' => 'Verslun',
        'dashboard' => 'mælaborð',
        'comments' => 'athugasemdir',
        'wallet' => 'veski',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone árangursskýrsla'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone árstíðabundin skýrsla'
        ],
        'Onboarding' => [
            'id' => 'hæ',
            'name' => 'Selldone kaupmenn'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Stuðningur við :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'hæ',
            'name' => 'Samfélag, Selldone'
        ],
        'NewShop' => [
            'id' => 'kaupmenn',
            'name' => 'Selldone kaupmenn'
        ],
        'Approve' => [
            'id' => 'samþykkja',
            'name' => 'Selldone kaupmenn'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Pantanastjórnun :name'
        ],

        'Recovery' => [
            'id' => 'bata',
            'name' => 'Endurheimtateymi Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Í bið ⌛',
        'PAYED' => 'Greitt ✅',
        'CANCELED' => 'Hætt við ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Stjórnandi',
            'OFFICER' => 'Yfirmaður og yfirmaður',
            'AUDITING' => 'Endurskoðunarstjóri',
            'EMPLOYEE' => 'Starfsmaður',
            'PRODUCT' => 'Vörustjóri',
            'CONTENT' => 'Efnisstjóri',
            'MARKETING' => 'Markaðsstjóri',
            'VIEWER' => 'Áhorfandi',

        ],
        'subject' => ":inviter bauð þér sem :level| :shop",
        'category' => "Boð starfsfólks",
        'title' => "Þér hefur verið boðið að <b>:shop_name</b> sem <b>:level</b> .",
        'message' => "Þú hefur fengið boð um að vinna með <b>:shop_title</b> teyminu í viðskiptum. Þú hefur möguleika á að samþykkja eða hafna þessu tilboði. Ef þú velur að samþykkja, vinsamlegast skráðu þig inn á Selldone þjónustuna til að staðfesta ákvörðun þína. Við staðfestingu færðu aðgang að verslunarstjórnunarhlutanum.",

    ],

    'welcome-email' => [
        'subject' => "👋 Velkomin :name, við skulum byrja með Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Velkomin á Selldone",
        'message' => "Þakka þér fyrir að velja Selldone! Þú ert nú hluti af öflugu samfélagi sem tengir alþjóðlega seljendur við viðskiptavini, staðbundin fyrirtæki við fyrirtæki og einstaklinga við fyrirtæki. Öll Master og Pro verkfærin okkar eru í boði fyrir þig **ókeypis** og **ótakmarkað**. Við erum hér til að styðja þig og opna dyrnar að velgengni þinni.",

        'index' => "Skref :step.",

        'step-domain' => [
            'title' => 'Bættu við sérsniðnu léni þínu',
            'message' => "Til að byrja skaltu bæta við sérsniðnu léninu þínu ókeypis í verslunarstjórnborðinu undir Stillingar > Lénsstillingar.",
            'action' => 'Stjórna lénunum mínum',
        ],
        'step-landing' => [
            'title' => 'Sérsníddu heimasíðuna þína',
            'message' => "Sérsníddu heimasíðuna þína með því að fara í Mælaborð > Síður. Veldu áfangasíðu eða búðu til nýja. Það er auðvelt og leiðandi og þú getur byrjað að vinna í því strax.",
            'action' => 'Sérsníddu áfangasíðuna mína',
        ],
        'step-payment' => [
            'title' => 'Uppsetning greiðslumáta',
            'message' => "Byrjaðu að samþykkja greiðslur beint inn á bankareikninginn þinn. Til að tengja greiðslumiðlana þína eins og Stripe, PayPal og fleira, farðu í Mælaborð > Bókhald > Gátt.",
            'action' => 'Bæta við greiðslumáta',
        ],
        'step-products' => [
            'title' => 'Bættu við vörum þínum',
            'message' => "Bættu auðveldlega við vörum og flokkum í mælaborðinu > Vörur. Þetta er alveg eins og að hafa umsjón með skrám og möppum á tölvunni þinni - tilbúið til að draga og sleppa. Þú getur líka flutt inn vörur í magni með Excel. Dæmi um sniðmát er fáanlegt til að hjálpa þér að byrja.",
            'action' => 'Stjórna vörum mínum',
        ],
        'step-shipping' => [
            'title' => 'Setja upp sendingaraðferðir',
            'message' => "Til að rukka viðskiptavini fyrir sendingu skaltu skilgreina sendingaraðferðir þínar í Mælaborðinu > Skipulag > Sendingar. Þú getur stillt mismunandi verð og stuðning fyrir ýmsa staði. Ekki gleyma að stilla uppruna vöruhússins í Mælaborð > Logistic > Vöruhús.",
            'action' => 'Stjórna sendingaraðferðum',
        ],
    

        'seller' => [
            'title' => 'Ertu seljandi?',
            'message' => 'Til að byrja að selja skaltu slá inn mælaborðið þitt í Selldone með hlekknum hér að neðan og búa til fyrstu verslunina þína alveg ókeypis. Þetta mun taka nokkrar mínútur og þú munt hafa þína eigin verslun og netsíðu. Við munum síðan leiðbeina þér í næstu skref og fá greiðslugáttina.',
            'action' => 'Skráðu þig inn á mælaborðið mitt',
        ],
        'buyer' => [
            'title' => 'Ég er kaupandi',
            'message' => 'Til hamingju. Þegar þú ert meðlimur í Selldone muntu losna við öll vandræðin við aðild og auðkenningu í netverslunum. Til að njóta góðs af hvaða verslun og síðu sem er sem notar Selldon vettvang geturðu skráð þig inn með einum smelli og gert kaupin þín einföld, hröð og örugg.',
        ],
    ],


    'charge-account' => [
        'category' => 'Veski > Reikningur > Gjaldfærsla',
        'title' => "Árangursgjald",
        'message' => "Reikningurinn þinn <b>:account_number</b> hefur verið gjaldfærður <b>:amount</b>.",
        'account' => 'Reikningur',
        'charge' => 'Hleðsla',
        'balance' => 'Jafnvægi',
        'footer' => "Gerðu viðskipti auðveld, framkvæmanleg og aðgengileg öllum um allan heim."
    ],

    'verify-email' => [
        'subject' => "🙌 Ljúktu við skráningu þína á Selldone! Staðfestu tengil.",
        'category' => "ÞÚ ERT EINNSKREF FYRIR",
        'title' => "Staðfestu netfangið þitt",
        'message' => "Hæ :name,<br><br>Takk fyrir að velja Selldone!<br><br>Til að staðfesta að <b>:email</b> sé rétt netfang þitt, vinsamlegast smelltu á hlekkinn hér að neðan. Þú hefur 48 klukkustundir til að ljúka þessari staðfestingu.",
        'footer' => "Ef þú átt í vandræðum með að smella á Staðfesta hnappinn, afritaðu og límdu URL hér að neðan í vafrann þinn: :activation_url",
        'next-step' => "Næst munum við senda þér gagnlegt efni og skref-fyrir-skref leiðbeiningar til að auðvelda þér að bæta við sérsniðnu léninu þínu, setja upp greiðslur, bæta við vörum og fá fyrstu pöntunina þína.",

    ],
    'verify-email-code' => [
        'subject' => "Staðfestingarkóði fyrir :name",
        'category' => "SECURITY",
        'title' => "Staðfestingarkóði tölvupósts",
        'message' => "Hæ :name,<br><br>Til að staðfesta að <b>:email</b> sé rétt netfang þitt skaltu slá inn eftirfarandi kóða innan næstu <b>10 mínútur</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Verslunin þín er tilbúin| :name",
        'category' => "ÞÚ ERT EINNSKREF FYRIR",
        'title' => "Uppsetningu lokið",
        'account_title' => "Notandinn þinn",
        'account_msg' => "Staðfestu og skráðu þig inn á reikninginn þinn með þessum upplýsingum.",
        'shop_msg' => "Reikningsupplýsingar um Selldone viðskiptastýrikerfið.",

    ],

    'reset2fa' => [
        'category' => "OPINBER ÖRYGGISKEYTI",
        'title' => "Biðja um að slökkva á 2-þrepa innskráningu",
        'message' => "Þú færð þennan tölvupóst vegna þess að við fengum beiðni um að endurstilla tvíþætta auðkenningu fyrir **:name** reikning með **:email** tölvupósti.<br><br>Við fundum eftirfarandi upplýsingar um reikninginn þinn:",
        'footer' => "Ef þú baðst ekki um endurstillingu lykilorðs er ekki þörf á frekari aðgerðum.",
        'action' => 'Slökktu á tveggja þrepa innskráningu',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Verslunin þín er tilbúin núna!",
        'category' => "FÆDDUR NÝ VEFVERSLUN Í HEIMINUM",
        'title' => "Til hamingju, :name!",
        'message' => "<b>Til hamingju, :name! Nýja netfyrirtækið þitt er nú í gangi!</b> Við erum spennt að bjóða þig velkominn í Selldoners samfélagið. Þú hefur tekið fyrsta skrefið í átt að árangri og við erum hér til að hjálpa þér hvert skref á leiðinni.<br>Nú þegar verslunin þín er tilbúin, skulum við ganga úr skugga um að þú sért tilbúinn til að taka á móti greiðslum beint frá viðskiptavinum þínum og byrja að stækka heimsveldið þitt. Ef þú þarft einhvern tíma hjálp, þá erum við bara skilaboð í burtu - þjónustudeild okkar er alltaf til staðar fyrir þig.<br><br><b>Mikilvæg næstu skref:</b> Til að byrja skaltu ganga úr skugga um að þú sért tilbúinn til að taka á móti greiðslum og ganga vel. Við munum leiðbeina þér í gegnum hvert stig til að koma versluninni þinni í gang óaðfinnanlega.",
        'pdf-book' => "Ekki missa af meðfylgjandi handbók: Do Your Business Like A Game",

        'account' => [
            'title' => 'Skref 1: Settu upp Selldone veskið þitt',
            'message' => "Til að byrja skaltu búa til reikning í Selldone veskinu þínu. Þetta er þar sem gjöldin þín verða dregin frá og það er líka þar sem þú fyllir á til að halda versluninni þinni gangandi. Ef staða þín verður neikvæð, ekki hafa áhyggjur! Verslunin þín mun halda áfram að starfa án truflana.",
            'action' => 'Skráðu þig inn í veskið',
        ],

        'shop-account' => [
            'title' => 'Skref 2: tengdu reikninginn við verslunina',
            'message' => "Næst skaltu tengja veskisreikninginn þinn við verslunina þína. Farðu í <b>Store > Bókhald > Invoice</b> og tengdu veskið þitt. Þetta tryggir að allar greiðslur viðskiptavina séu lagðar beint inn á bankareikninginn þinn – Selldone dregur engar upphæðir frá tekjum þínum.",
            'action' => 'Reikningspjaldið í verslun',
        ],

        'gateway' => [
            'title' => 'Skref 3: Tengdu netgreiðslugátt',
            'message' => "Nú skulum við setja upp greiðslugáttina þína á netinu. Farðu í <b>Store > Bókhald > Port</b> og smelltu á <b>Add New Port</b>. Veldu gjaldmiðilinn þinn og þú munt sjá lista yfir tiltækar greiðslugáttir. Það er fljótlegt og auðvelt að tengja gátt, en ef þú þarft einhverja hjálp skaltu ekki hika við að skoða Selldone leiðbeiningarnar eða hafa samband við okkur.",
            'action' => 'Bættu gátt við verslunina',
        ],

        'domain' => [
            'title' => 'Síðasta skrefið: að tengja sérstakt lén',
            'message' => "Þú munt geta haft verslunina þína á eins mörgum lénum og þú vilt. Til að tengja sérstakt lén við verslun þarftu að minnsta kosti að hafa ræsingarleyfi. Með því að kynna hvern vin fyrir Sellone færðu eins mánaðar gjafakort fyrir upphafsleyfi. Hlutfall af greiðslum vina þinna verður einnig lagt inn á reikninga viðskiptavina þinna.",
            'action' => 'Að kynna og taka á móti ótakmörkuðum gjafakortum',
        ],
    ],


    'basket-list' => [
        'item' => "atriði",
        'count' => "Telja",
        'price' => "verð",
        'discount-code' => "Afsláttarkóði",
        'customer-club' => 'Viðskiptavinaklúbbur',
        'shipping' => "Sending",
        'total' => "Samtals",
        'offer' => "Tilboð",
        'coupon' => "Afsláttarmiði",
        'lottery' => "Verðlaun",
        'tax' => "Skattur",
        'tax_included' => "Innifalið í verði",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Aðferð',
        'amount' => 'Magn',
        'giftcard' => 'Gift card',
        'payment' => 'Greiðsla',
    ],


    'shop-subscription-email' => [
        'category' => "Uppfærsla áskriftar",
        'title' => "Verslunarleyfi: :shop_title",
        'title-reserved' => "Varaleyfi: :shop_title",
        'title-active' => "Virkt leyfi: :shop_title",
        'title-finished' => "Lokið leyfi: :shop_title",
        'title-cancel' => "Hætta við leyfi: :shop_title",
        'message' => "verslunarleyfisáætlun þín uppfærð,",
        'RESERVED' => "⚡ Áskriftaráætlunin þín hefur verið **frátekið**.",
        'ACTIVE' => "🟢 Áskriftaráætlunin þín hefur verið **virkjuð**.",
        'FINISHED' => "🚧 Áskriftaráætlunin þín hefur verið **kláruð**.",
        'CANCEL' => "⛔ Áskriftaráætlunin þín hefur verið **hætt**.",
    ],

    'support' => [
        'subject' => "Stuðningsmiðstöð | :name svaraði",
        'category' => "Stuðningsmiðstöð",
        'title' => "Þú fékkst svar",
        'action' => "Opinn verslunarstjóri",
    ],

    'shop-customer-join' => [
        'subject' => "Skráðu þig í :shop_title",
        'category' => "Nýr viðskiptavinur hátíð",
        'title' => "Við erum ánægð með aðild þína",
        'action' => "Heimsókn núna",
    ],

    'shop-vendor-join' => [
        'subject' => "Inngangur söluaðila| :shop_title",
        'category' => "Nýr söluaðila hátíð",
        'title' => "Við erum ánægð með aðild þína",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Gjafakort :shop_title",
        'category' => "Bæta við nýju korti",
        'title' => "Til hamingju, þú hefur fengið gjafakort",
        'action' => "Verslaðu núna",
        'message' => "Þú hefur fengið gjafakort að upphæð :balance :currency. Þú munt geta keypt í verslun okkar með þessu gjafakorti.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Stuðningsmiðstöð| :shop",
        'category' => "stuðning",
        'title' => "Þú fékkst svar",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Staðfesting pöntunar|Pantaðu :order_id",
        'title' => "pöntun",
        'message' => "Þú pantaðir í verslun okkar. Við fengum pöntunina þína og munum senda þér annan tölvupóst þegar greiðslan hefur verið staðfest."
    ,

        'payments' => 'Greiðslur',
    ],

    'order-payment' => [
        'subject' => "🛍️ Greiðslustaðfesting|Pantaðu :order_id",
        'title' => "Greiðslufyrirmæli",
        'message' => "Greiðslu þinni lokið,<br> Við höfum fengið pöntunina þína. Við sendum þér annan tölvupóst þegar pöntunin þín er send.",
    

        'payments' => 'Greiðslur',
    ],

    'order-update' => [
        'subject' => "🛍️ Uppfærsla á pöntunarstöðu|Pantaðu :order_id",
        'title' => "Uppfærsla pöntunarstöðu",
        'message' => "Pöntun þín hefur verið uppfærð. Þú getur athugað nýjustu stöðu þessarar pöntunar á reikningnum þínum.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Pöntun þín er í biðröð fyrir vinnslu. Við látum þig vita þegar verið er að undirbúa það.",
                'OrderConfirm' => "Pöntun þín er staðfest og undirbúningur er hafinn.",
                'PreparingOrder' => "Verið er að undirbúa pöntunina þína og verður send fljótlega.",
                'SentOrder' => "Pöntunin þín hefur verið send. Þú færð það fljótlega.",
                'ToCustomer' => "Pöntun þín hefur verið afhent. Við vonum að þú njótir þess!",

                'PreparingOrder-PICKUP' => "Verið er að undirbúa pöntunina þína. Þú færð tilkynningu þegar það er tilbúið til afhendingar.",
                'SentOrder-PICKUP' => "Pöntun þín er tilbúin til afhendingar. Endilega komið í búðina til að sækja.",
                'ToCustomer-PICKUP' => "Pöntun þín hefur verið sótt. Við vonum að þú njótir þess!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Pöntun þín er í biðröð fyrir vinnslu. Við látum þig vita þegar það er tilbúið.",
                'OrderConfirm' => "Pöntun þín er staðfest og undirbúningur er í gangi.",
                'PreparingOrder' => "Verið er að undirbúa pöntunina þína og verður send til þín fljótlega.",
                'ToCustomer' => "Sýndarpöntunin þín hefur verið afhent á reikninginn þinn. Þakka þér fyrir!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Þjónustubeiðnin þín er í biðröðinni. Við látum þig vita þegar við byrjum.",
                'OrderConfirm' => "Þjónustan þín er staðfest og við erum að undirbúa að hefjast handa.",
                'PreparingOrder' => "Við erum að undirbúa þjónustuna þína og munum láta þig vita þegar henni er lokið.",
                'ToCustomer' => "Þjónustan þín er lokið. Þakka þér fyrir að velja okkur!"
            ],
            'FILE' => [
                'PreparingOrder' => "Verið er að útbúa skrána þína og verður aðgengileg fljótlega.",
                'ToCustomer' => "Skráin þín er tilbúin og hefur verið afhent. Þú getur nú halað því niður."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Áskriftarpöntunin þín er í biðröðinni. Við látum þig vita þegar vinnsla hefst.",
                'OrderConfirm' => "Áskriftin þín hefur verið staðfest og verið er að setja upp.",
                'PreparingOrder' => "Við erum að undirbúa áskriftina þína og hún mun hefjast fljótlega.",
                'SentOrder' => "Áskriftin þín hefur verið virkjuð. Þú munt fá stöðugar uppfærslur.",
                'ToCustomer' => "Áskriftarþjónustan þín hefur verið virkjuð."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Til hamingju :name|Nýtt skírteini: :title',
        'category' => "TIL HAMINGJU, NÝTT SKIPTI",
        'message' => "Hey :name,<br><br>Þú hefur fengið nýjan inneignarmiða að gjöf frá okkur! Þú getur unnið þér inn enn fleiri fylgiskjöl með því að kynna Selldone fyrir vinum þínum og öllum sem þú þekkir. Þessi skírteini er þess virði **:price :currency**.<br><br>Þú hefur tekið fyrsta skrefið og við erum hér til að hjálpa þér að opna nýja eiginleika með skírteininu þínu! Vinsamlegast skráðu þig inn með **:email** og finndu skírteinið þitt í búðinni **Mælaborð** > **Stillingar** > **Leyfi**.<br><br>Til hamingju!",
        'action' => "Mælaborðið mitt",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Til hamingju, kæra :name|Þú hefur fengið sérstaka gjöf!',
        'category' => "Tilkynning um móttöku gjafa",
        'title' => "Gjafir fyrir þig",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Gjafir",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Ný pöntun móttekin| :order_id",
        'title' => "New Order",
        'message' => "Þú hefur fengið nýja pöntun. Vinsamlegast farðu á pöntunarvinnslusíðuna í versluninni þinni.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Útfylltar upplýsingar þínar',
        'output-form-title' => 'Upplýsingar um keyptan hlut',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Vikuskýrsla :time',
        'title' => 'Vikuleg frammistöðuskýrsla verslunar',
        'message' => "Þetta er vikuskýrsla verslunarinnar þinnar frá <b>:start</b> til <b>:end</b>. Þessi skýrsla inniheldur ráð til að bæta viðskipti þín, þú getur líka athugað stöðu netverslunarinnar þinnar og nýlegar pantanir. Ég vona að þú eigir góðan dag og viku framundan."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ :amount sparnaðarskýrslan þín á síðustu þremur mánuðum| :shop_title',
        'title' => 'Árstíðabundin skýrsla um starfsemi þína, umbun og fjárhagslegan sparnað',
        'message' => "Þetta er <b>:shop_title</b> árstíðabundin skýrsla þín frá <b>:start</b> til <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Tengdir reikningar',
        'sub-title' => 'Hver er nýjasta staða veskisreikninga sem tengjast versluninni minni?',
        'view-wallet' => 'Skoða veski',
        'tip-title' => 'Mikilvæg ráð',
        'tip' => "Settu upp ókeypis Selldone veski og tengdu það við verslunina þína. Jafnvel þótt staðan þín sé neikvæð geta viðskiptavinir þínir samt verslað og borgað án vandræða. Ekki hafa áhyggjur, rekstur verslunarinnar þinnar og gögn munu halda áfram snurðulaust í allt að 1 mánuð, án truflana.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Tengstu við reikning'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Forrit uppsett',
        'sub-title' => 'Listi yfir forrit sem þú hefur sett upp í versluninni þinni í þessari viku.',
        'tip' => "Viltu finna fleiri forrit fyrir verslunina þína?",
        'view-app-store' => 'Skoðaðu Selldone App Store',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Verslunarbotsarnir þínir',
        'sub-title' => 'Virkir sölubottar í versluninni minni.',
        'tip-title' => 'Botasala',
        'tip' => "Selldone hefur útvegað þér sjálfvirka sölubots. Allt sem þú þarft að gera er að fara í Add-ons> Bots spjaldið og virkja verslunarbots. Athugaðu að viðkomandi þjónusta verður að vera tiltæk í þínu landi.",
        'view-bots' => 'Stjórna vélmennum',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Samskipti við viðskiptavini',
        'sub-title' => 'Hversu mörg samskipti hef ég átt við viðskiptavini mína í þessari viku?',
        'faqs' => 'Algengar spurningar',
        'tickets' => 'Miðar viðskiptavina',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Staða notenda',
        'sub-title' => 'Virkni frá :start til :end',
        'users' => [
            'title' => 'Viðskiptavinir',
            'subtitle' => 'Skráðu notendur',
        ],
        'views' => [
            'title' => 'Heimsóknir',
            'subtitle' => 'Hversu oft hefur þú heimsótt verslunina',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Skilaðir notendur',

        'shop_views' => 'Útsýni verslana',
        'baskets' => [
            'title' => 'Innkaupakörfur',
            'subtitle' => 'Tilkynntu fjölda nýrra innkaupakerra',
        ],
        'products' => [
            'title' => 'Vöruyfirlit',
            'subtitle' => 'Staða vöru í verslun eftir tegundum',
            'value_name' => 'Vörur'
        ],
        'products_count' => 'Vörutegundir',
        'views_count' => 'Skoðafjöldi',
        'sell_count' => 'Selja telja',
        'send_count' => 'Sendingarfjöldi',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Sendu sendingu',
        'sub-title' => 'Spjaldið fyrir helstu seljendur Drop Shipping Selldone.',
        'total_fulfillments' => 'Heildar pantanir mótteknar',
        'ds_count' => 'Tekið á móti pöntunum',
        'statistics_title' => 'Tilkynna mótteknar pantanir',
        'ds_cancels' => 'Hætta við af viðmótssala',
        'ds_rejects' => 'Hætta við hjá þér',
        'tip' => "Ertu stór seljandi vöru? Áttu vöruhús, verksmiðju eða dreifingaraðila á vörum? Þú getur boðið vörur þínar til annarra seljenda í Selldone sendingarþjónustu til að selja vöruna þína í stórum stíl. Sendu okkur tölvupóst á support@selldone.com til að leiðbeina þér.",
        'view-drop-shipping-panel' => 'Skráðu þig inn á heildsöluspjaldið',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Gengi',
        'sub-title' => 'Listi yfir nýjustu gengi gjaldmiðla í versluninni þinni.',
        'from' => 'Upprunagjaldmiðill',
        'to' => 'Gjaldmiðill áfangastaðar',
        'rate' => 'Hlutfall viðskipta',
        'view-exchange-panel' => 'Stjórna gengi',
    

        'vew-exchange-panel' => 'gengisstjórnunarnefnd',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Sérfræðingasamningar',
        'sub-title' => 'Hvaða fagmenn vinna við verslunina mína?',
        'cost' => 'Samningsupphæð',
        'duration' => 'Lengd',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Dagsetning Hætta við',
        'end_at' => 'Afhendingardagur',
        'tip' => 'Ráðu toppsérfræðinga frá Selldone til að hjálpa til við að auka viðskipti þín.',
        'view-experts' => 'Smelltu til að byrja.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Tilkynntu virkar greiðslugáttir í búðinni :shop.',
        'tip-title' => 'Mikilvæg ráð',
        'tip' => "Farðu á gáttastjórnunarsíðuna í versluninni þinni og bættu við að minnsta kosti einni höfn á nokkrum mínútum. Viðskiptavinir þínir vilja greiða hratt og örugglega í gegnum netgáttir.",
        'view-shop-gateways' => 'Skráðu þig inn á stjórnun verslunargáttar minnar.',
        'view-gateways' => 'Skoðaðu fleiri gáttir',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Pantanir',
        'sub-title' => 'Listi yfir pantanir sem ég fékk í vikunni.',
        'total_baskets' => 'Samtals pantanir',
        'total_posBaskets' => 'Samtals reiðufé pantanir',
        'pos-title' => 'POS verslunarbox',
        'chart-label' => 'Pantanir lokið (þessar pantanir eru ekki endilega greiddar!)',
        'tip-title' => 'Þú ættir að reyna betur...',
        'tip' => "Enginn einfaldur árangur.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Vinnslustöð',
        'sub-title' => 'Hversu mikla pöntun afgreiddum við í versluninni í vikunni?',
        'tip-title' => 'Þú varst ekki með útsölu!',
        'tip' => "Því miður var engin útsala hjá þér í vikunni. Þú þarft að fá meira í verslunina þína. Þú getur bætt við fleiri vörum, valið betri myndir eða skrifað betri lýsingar fyrir vörurnar þínar. Íhugaðu fullt starf fyrir fyrirtækið þitt. Ef þú gerir það rétt og verður ekki svekktur, muntu ná árangri.",
        'view-process-center' => 'Skoða ferli miðstöð',
        'return' => [
            'title' => 'Skilaði pöntun',
            'subtitle' => 'Tilkynna skilað pantanir.',
            'tip-title' => 'Vissir þú að ...',
            'tip' => "Þú getur búið til eins marga peningakassa og þú þarft með Selldone POS! Hvort sem það er spjaldtölvan þín, farsíminn eða fartölvan geturðu breytt hvaða tæki sem er í sölustað verslunarinnar þinnar. Það er einfalt, fljótlegt að setja upp og fullbúið fyrir netþjóninn þinn. Byrjaðu að nota það í dag!",
            'view-pos' => 'Skráðu þig inn í gjaldkera netverslunar minnar'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Fundir',
        'sub-title' => 'Hversu oft heimsótti ég verslunina mína?',
        'countries-title' => 'Hvaða lönd hafa verið mest heimsótt?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Viltu græða peninga án þess að eyða einum pening?',
        'message' => "Hæ :name, það er kominn tími til að byrja að vinna sér inn með Selldone! Farðu í Mælaborð > Meira > Tekjuöflun > Fáðu tilvísunartengilinn þinn. Deildu hlekknum með vinum þínum og fáðu gjafakort og hlutdeild í greiðslum þeirra. Besti hlutinn? Bæði þú og vinur þinn fáið gjafakort!",
        'action' => 'Skoðaðu kynningartengilinn minn',
        'mail-clip' => "<b style='color: #C2185B'>Mikilvægt:</b> Ef þú notar tölvupóstþjónustu eins og Gmail sem takmarkar lengd tölvupóstsins, finndu eftirfarandi valmöguleika í lok tölvupóstsins til að birta skýrsluna í heild sinni og smelltu á hana:",

        'no-coin-reward' => "<b style='color: #C2185B'>Því miður:</b> Virkni þín uppfyllti ekki kröfuna um að fá ókeypis SEL Coins verðlaun. Reyndu betur og seldu meira í búðinni þinni fyrir næsta tímabil.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Verðlaun:</b> Til hamingju, vegna frábærrar frammistöðu þinnar gáfum við þér :amount SEL Coin ókeypis verðlaun.",

        'need-buy-license' => "<b>Fléttu fyrirtækinu þínu upp:</b> Það lítur út fyrir að þú hafir ekki skráð neina áskriftaráætlun fyrir vefsíðuna þína ennþá! Uppfærðu núna til að opna fleiri eiginleika fyrir aðeins :amount á mánuði ef greitt er árlega.",
        'not-afford-message' => "Ef þú hefur ekki efni á eða átt í vandræðum með greiðslu, ekki hika við að láta okkur vita í gegnum support@selldone.com.",
        'add-domain' => "<b>Af hverju ekki að hafa sérsniðið lén fyrir fyrirtækið þitt?</b><br> Bættu léni við vefsíðuna þína núna; Það er ókeypis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone er <del>product</del> <span style = 'color: forestgreen'> samfélag</span>.<br>Vertu faglegur söluaðili!",
        'message' => "Fylgdu opinberum síðum Selldone á Twitter, LinkedIn og samfélagsnetum. Sendu okkur allar athugasemdir, beiðnir eða gagnrýni eða taktu þátt í umræðum um Selldone. Við erum líka hluti af samfélagi Selldone sem <b>Þú gerir</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nýjar avókadó pantanir mótteknar|:shop_title :time',
        'title' => "Frammistöðuskýrsla fyrir síðasta sólarhring",
        'message' => "Viðskiptavinir þínir bíða eftir því að pantanir þínar verði skoðaðar og verðlagðar. Svaraðu beiðnum viðskiptavina þinna eins fljótt og auðið er til að fá meiri sölu.",
        'card_title' => "Pantanir í biðröð",
        'card_subtitle' => "Frá :date",

        'card_payed' => "Greiddar pantanir"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Svaraðu færslunni þinni í :community_title',
        'title' => ":name og :count aðrir skrifuðu ummæli við færslurnar þínar.",
        'message' => "Hæ :name, færslurnar þínar vekja athygli! Þú hefur fengið athugasemdir í samfélaginu okkar. Skráðu þig inn á reikninginn þinn til að taka þátt í umræðunni og sjá hvað allir eru að segja.",
        'title-simple' => ":name skrifaði ummæli við færslurnar þínar.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Svaraðu efninu þínu :topic_title',
        'title' => ":name, og :count aðrir svöruðu um efnið þitt.",
        'message' => "Hæ :name, umræðuefnið þitt er að vekja athygli! Þú hefur fengið svör í samfélaginu okkar. Skráðu þig inn á reikninginn þinn til að taka þátt í umræðunni og sjá hvað allir eru að segja.",
        'title-simple' => ":name svaraði um efnið þitt.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Ný innskráning :name',
        'category' => 'Öryggistilkynningar',
        'title' => "Skráðu þig inn á reikning",
        'message' => "Kæri :name, þú hefur verið skráður inn á Selldone reikninginn þinn.",   // Login in selldone (seller)
        'message-shop' => "Kæri :name, þú hefur verið skráður inn á :shop_title .",  // Login in shop (buyer)

        'footer' => "Ef þú ert ekki skráður inn skaltu breyta lykilorðinu þínu.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Afturköllun",
        'deposit' => "Innborgun",

        'withdraw_subject' => "Taktu út af reikningi :account",
        'deposit_subject' => "Leggja inn á reikning :account",

        'message' => "Peningaflutningurinn hefur verið gerður með eftirfarandi forskriftum.",

        'type' => "Gerð viðskipta",

        'from' => "Upprunareikningur",
        'to' => "Destination account",

        'desc' => "Viðskiptalýsing",
        'action' => "Skoða viðskipti",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Mikilvægt! Reglubrot| :shop",
        'category' => "Gagnrýnin upplýsa",
        'title' => "Versluninni þinni hefur verið refsað",
        'action' => "Opna mælaborð verslunar",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter bauð þér til Selldone",
        'title' => ":name sendi þér :amount til að hjálpa þér að opna nýju vefsvæðið þitt á netinu og afla tekna!",
        'message' => "Hæ **:receiver_name**,<br><br>Velkomin í Selldone! Á Selldone geturðu auðveldlega búið til e-verslunarsíðuna þína, bloggið, netsamfélagið og jafnvel sett upp POS-kerfi á netinu fyrir persónulega sölu - allt innan nokkurra mínútna. Þetta er heildarstýrikerfið fyrir fyrirtæki á netinu sem er hannað til að gera fyrirtæki þitt betra, hraðvirkara og auðveldara í rekstri.<br><br>Skráðu þig fyrir <b>:date</b> og fáðu :amount skírteini til að byrja!",
        'accept' => "Samþykkja boð",
        'owner' => "Eigandi að",
        'join-date' => "Tók þátt í Selldone á",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Endurheimtartengill| :shop",
        'category' => "Öryggi verslana",
        'title' => "Endurheimtartengill á verslun <b>:shop_name</b> .",
        'message' => "Þessi tölvupóstur var sendur til þín vegna þess að þú baðst um að endurheimta verslunina þína. Með því að smella á hlekkinn hér að neðan endurheimtirðu verslunina þína og öll gögn sem tilheyra henni.",
        'action' => "Staðfestu endurheimt verslunar",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Hversu mikið fé sparaði Selldone fyrir fyrirtækið þitt?',
        'sub-title' => 'Frá dagsetningu :start til :end',
        'infrastructure' => [
            'title' => 'Innviðir',
            'subtitle' => 'Netþjónar, CDN, Geymsla og önnur skýjaþjónusta',
        ],
        'experts' => [
            'title' => 'Sérfræðingar og starfsfólk',
            'subtitle' => 'Hönnuðir, viðhald og stuðningur',
        ],
        'total_save' => 'Samtals sparnaður peningar'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Frammistaða þín',
        'sub-title' => 'Viðskiptayfirlit frá :start til :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Skilaðir notendur',

        'shop_views' => 'Útsýni verslana',
        'baskets' => [
            'title' => 'Innkaupakörfur',
            'subtitle' => 'Tilkynntu fjölda nýrra innkaupakerra',

        ],
        'products' => [
            'title' => 'Vöruyfirlit',
            'subtitle' => 'Staða vöru í verslun eftir tegundum',
            'value_name' => 'Vörur'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Heildarsíðuflettingar á vefsíðu',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Þú hefur fengið nýja pöntun. Vinsamlegast farðu á pöntunarvinnslusíðuna í spjaldið söluaðila.",
        'subject' => "🛍️ Ný pöntun móttekin| :order_id",
        'your_revenue' => "Tekjur þínar",
    ],
    'vendor-invite' => [
        'title' => 'Boð söluaðila',
        'message' => "Þú hefur fengið boð um að gerast söluaðili :shop_name. Þú getur samþykkt eða hafnað því með því að smella á eftirfarandi hnappa.",
        'subject' => ":shop_name |Boð um að verða söluaðili okkar",
        'accept' => "Samþykkja og gerast söluaðili",
        'reject' => "Hafna",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Boð um að slást í hópinn okkar',
        'message' => "Þér hefur verið boðið að taka þátt í :vendor_name á :shop_name. Þú getur samþykkt eða hafnað þessu boði með því að nota hnappana hér að neðan.",
        'subject' => "Boð um að taka þátt í :vendor_name|Gerast liðsmaður",
        'accept' => "Samþykktu og taktu þátt í teyminu",
        'reject' => "Hafna",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Innskráningarkóði þinn fyrir :shop",
        'header-message' => "Við erum að senda þér þennan tölvupóst vegna þess að þú baðst um innskráningarkóða fyrir verslunina. Vinsamlega finndu Eingangs lykilorðið þitt (OTP) hér að neðan:",
        'footer-message' => "Þessi kóði mun gilda í 10 mínútur. Ef þú baðst ekki um þennan innskráningarkóða skaltu hunsa þennan tölvupóst."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Staðfestu netfangið þitt| :shop",
        'title' => 'Staðfesting tölvupósts',
        'header-message' => "Hæ :name,<br>Vinsamlegast staðfestu að **:email** sé netfangið þitt með því að smella á hnappinn hér að neðan eða nota hlekkinn hér að neðan innan 48 klukkustunda.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Vöruuppfærslur| :shop",
        'title' => "Uppfærsla á vörustöðu - Síðasti 24 klst",
        'message' => "Ég vona að þessi skilaboð finnist þér vel. Þetta er stutt uppfærsla til að upplýsa þig um stöðu vara þinna á vettvangi okkar síðastliðinn 24 klukkustundir.\nÁ þessu tímabili hafa orðið breytingar á stöðu sumra vara. Þessar breytingar gætu verið vegna kaupa, hlutabréfauppfærslu eða annarra tengdra atburða.\nFyrir frekari upplýsingar um hverja vöru, vinsamlegast skráðu þig inn á reikninginn þinn og athugaðu hlutann 'Vörustaða'.",
        'action' => "Opnaðu lánardrottinsspjaldið",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Magnpantanir mótteknar| :shop | :date",
        'title' => "Tilkynning um magnpantanir",
        'message' => "Þú hefur fengið slatta af magnpöntunum. Vinsamlegast farðu á pöntunarvinnslusíðuna á spjaldinu þínu til að fá frekari upplýsingar. Þú getur líka halað niður pöntunarlistanum í gegnum örugga hlekkinn sem fylgir með, sem gildir í 7 daga.<br><br>\n        <b> MIKILVÆGT:</b> Þessi hlekkur gildir í 7 daga.<br>\n        Þessi hlekkur er kraftmikill, þannig að í hvert skipti sem þú smellir á hann færðu nýjustu pantanir fyrir þessa tilteknu dagsetningu. <b> Það þýðir að ef greiðslustaða pöntunar breytist í hafnað muntu ekki lengur sjá þá pöntun í niðurhalaða CSV, eða ef pöntunin er greidd mun hún birtast á listanum.</b><br><br>\n        <ul>\n            <li>CSV inniheldur greiddar pantanir með frátekinni dagsetningu í :date.</li>\n            <li> Frátekin dagsetning er dagsetningin þegar notandinn smellir á kassa á pöntunarsíðunni.</li>\n        </ul>\n        <b>Til að koma í veg fyrir tvíteknar pantanir skaltu alltaf athuga pöntunina ID áður en þú sendir.</b>",
        'action' => "Sækja pöntunarlista",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Sumar vörur í pöntuninni voru ekki samþykktar og ekki er hægt að afhenda þær. Upphæðin fyrir þessa hluti verður endurgreidd á kortið þitt innan skamms."
    ]

];
