<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Uthenga uwu ukulandira wogula watsopano kusitolo.',
        ShopMailTemplateCodes::OrderCheckout => 'Chidziwitsochi chimatumizidwa pamene wogula akutsimikizira kuyitanitsa.',
        ShopMailTemplateCodes::OrderPayment => 'Chidziwitsochi chikutsimikizira kulipira bwino komwe kasitomala amalipira.',
        ShopMailTemplateCodes::OrderUpdate => 'Uthengawu watumizidwa kuti utsimikize wogula momwe alili.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Uthengawu umatumizidwa kwa wogulitsa kuti awadziwitse za dongosolo lotsimikizika.',
        ShopMailTemplateCodes::PosCheckout => 'Chidziwitsochi chimatumizidwa kutsimikizira malo ogulitsa kwa wogula.',
        ShopMailTemplateCodes::PosPayment => 'Chidziwitso ichi chimatsimikizira malo ogulitsa omwe amaperekedwa ndi wogula.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Uthengawu umadziwitsa wogulitsa za kugula komwe amagulitsa.',
        ShopMailTemplateCodes::ShopContact => 'Chidziwitsochi chimatumizidwa pamene fomu yolumikizana nayo yatumizidwa.',
        ShopMailTemplateCodes::ShopGiftCard => 'Chidziwitsochi chimadziwitsa wogwiritsa ntchito kuti walandira khadi lamphatso.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Uthenga uwu ukulandira wogulitsa watsopano kusitolo.',
        ShopMailTemplateCodes::ShopVendorInvite => "Uthengawu watumizidwa kuyitanitsa wogulitsa kuti alowe nawo pamsika wanu.",
        ShopMailTemplateCodes::ShopVendorOrder => "Uthengawu umatumizidwa kwa wogulitsa malonda akalandira ngati Paid kapena Cash on Delivery (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Amatumizidwa tsiku lililonse kuti asinthe mavenda momwe zinthu zawo zilili.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Uthengawu watumizidwa kuyitanitsa wogulitsa kuti alowe nawo pamsika wanu.",

        ShopMailTemplateCodes::UserLogin => "Dziwitsani wogwiritsa ntchito zambiri zolowera, kuphatikiza adilesi ya IP, tsiku, ndi chipangizo, pazifukwa zachitetezo.",
        ShopMailTemplateCodes::LoginCode => "Tumizani nambala yachinsinsi yanthawi imodzi kuti ogwiritsa ntchito alowe musitolo.",

        ShopMailTemplateCodes::EmailVerifyLink => "Tumizani ulalo kuti mutsimikizire adilesi ya imelo ya ogwiritsa ntchito. Imeloyi imatumizidwa pamene wogwiritsa ntchito alembetsa ndi SMS ndikulowetsa imelo yawo. Simatumizidwa pamene wosuta amalembetsa mwachindunji ndi malo ochezera a pa Intaneti kapena imelo.",

        ShopMailTemplateCodes::EmailBulkOrder => "Tumizani mndandanda wamaoda olandilidwa ndi olipidwa mochulukira kwa tsiku linalake."


    ,

    ],


    'global' => [
        'greetings' => 'Moni, :name!',
        'end-statement' => 'Gulu lothandizira',

        'receiver_name' => 'Moni :user_name',
        'footer-help' => "Mukufuna thandizo? Funsani pa [support@selldone.com](mailto:support@selldone.com) kapena pitani ku [malo athu othandizira](https://selldone.com/community).",
        'selldone-team' => 'Gulu la Selldone',
        'footer-shop' => "Ngati mukufuna thandizo ndi chilichonse chonde musazengereze kutitumizira imelo: :shop_mail",
        'accept' => "Landirani",
        'reject' => "Kana",
        'verify' => "tsimikizirani",
        'title' => "Mutu",
        'value' => "Mtengo",
        'description' => "Kufotokozera",
        'shop' => "Gulani",
        'shop-info' => "Sungani Zambiri",
        'user' => "Wogwiritsa",
        'user-info' => "Zambiri za Akaunti",
        'license' => "Chilolezo",
        'status' => "Mkhalidwe",
        'start' => "Yambani",
        'end' => "TSIRIZA",
        'renewal' => "Kukonzanso",
        'view' => "Onani",

        'balance' => "Kusamala",
        'card_number' => "Nambala yakhadi",
        'cvv' => "Cvv",
        'expire_date' => "Tsiku lotha ntchito",

        'Dashboard' => "Dashboard",
        'order' => "dongosolo",
        'view_order' => "Onani dongosolo",
        'pay_now' => "Pay now",

        'official_selldone' => "AKUGULITSIDWA KWABWINO",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Ndalama",
        'free-balance' => "Ndalama zaulere",
        'locked-balance' => "Zokhoma bwino",
        'bot' => "Bot",
        'requests' => "Zopempha",
        'baskets' => 'Ngolo',
        'physical' => "Zakuthupi",
        'virtual' => "Zowona",
        'file' => "Fayilo",
        'service' => "Utumiki",
        'fulfillment' => "Kukwaniritsidwa",
        'open' => "Tsegulani",
        'reserved' => "Zosungidwa",
        'canceled' => "Walephereka",
        'payed' => "Kulipira",
        'cod' => "COD",
        'orders-count' => 'Malamulo',
        'payments-count' => 'Malipiro',
        'confirms-count' => 'Zimatsimikizira',
        'sends-count' => 'Amatumiza',
        'delivers-count' => 'Amatumiza',
        'count' => 'Werengani',
        'transactions-count' => 'Chiwerengero cha zochitika',
        'success-transactions' => 'Kuchita bwino',
        'total-amount' => 'Kuchuluka kwake pamodzi',
        'amount' => 'Ndalama',
        'wage' => 'Malipiro',
        'debug' => 'Chotsani cholakwika',
        'pos' => 'POS',
        'live' => 'Khalani ndi moyo',
        'CheckQueue' => 'Onani pamzere',
        'OrderConfirm' => 'Kuyitanitsa kutsimikizira',
        'PreparingOrder' => 'Kukonzekera dongosolo',
        'SentOrder' => 'Anatumiza oda',
        'ToCustomer' => 'Zaperekedwa kwa kasitomala',
        'Pending' => 'Ikuyembekezera',
        'Accepted' => 'Adalandiridwa',
        'Rejected' => 'Wakanidwa',
        'pc' => 'PC',
        'tablet' => 'Phaleti',
        'phone' => 'Foni',
        'total' => 'Zonse',
        'view-detail' => 'Onani zambiri',
        'empty' => 'Chopanda kanthu',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Yankhani',
        'reactions' => 'Zochita',
        'Comments' => 'Ndemanga',
        'last-comment' => 'Ndemanga yomaliza',
        'response-to' => 'Yankhani ku',
        'posts' => 'Zolemba',
        'post' => 'Tumizani',

        'name' => 'Dzina',
        'email' => 'Imelo',
        'type' => 'mtundu',
        'device' => 'Chipangizo',
        'platform' => 'nsanja',
        'browser' => 'Msakatuli',
        'time' => 'Nthawi',
        'Wallet' => 'Wallet',
        'date' => 'Tsiku',

        'account' => 'Akaunti',
        'transaction' => 'Kugulitsa',
        'fee' => 'Malipiro',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Gulu',
        'password' => 'Mawu achinsinsi',
        'verify-login' => "Tsimikizani & Lowani",
        'url' => 'URL',
        'avocado' => 'Peyala',
        'hyper' => 'Hyper',
        'buy-now' => "Gulani pompano",
        'add-domain' => "Add Domain",
        'views' => 'Mawonedwe',


        'country' => 'Dziko',
        'address' => 'adilesi',
        'postal' => 'Khodi Yapositi',
        'building_no' => 'Kumanga #',
        'building_unit' => 'Chigawo #',
        'message' => 'Uthenga',


        'customer' => 'Makasitomala',
        'cart-items' => 'Zinthu zamangolo',
        'payment' => 'Malipiro',
        'receiver' => 'Wolandira',
        'virtual-items' => 'Zinthu zenizeni',
        'no-payment' => 'Palibe malipiro!',

        'enable' => 'Yambitsani',
        'access' => 'Kufikira',
        'bank' => 'Zambiri za banki',

        'vendor' => 'Wogulitsa',

        'view_content' => "Onani zonse",
        'files' => 'Mafayilo',
        'download' => 'Tsitsani',
        'file_name' => 'Dzina lafayilo',
        'file_size' => 'Kukula',

        'subscription' => 'Kulembetsa',
        'products' => 'Zogulitsa',
        'vendor_products' => 'Zogulitsa Zamalonda',

        'pickup' => 'Nyamula',

        'minutes' => 'Mphindi',
        'hours' => 'Maola',

        'refund' => 'Kubweza ndalama',
        'recipient_address' => 'Adilesi Yolandirira',
        'signature' => 'Siginecha',
        'blockchain' => 'Blockchain',
        'details' => 'Tsatanetsatane',


    

        'Shop' => 'Gulani',
        'dashboard' => 'dashboard',
        'comments' => 'ndemanga',
        'wallet' => 'chikwama',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Performance Report, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Lipoti la Nyengo, Selldone'
        ],
        'Onboarding' => [
            'id' => 'moni',
            'name' => 'Kuvomereza, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Support :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Tsimikizani, Selldone'
        ],
        'Welcome' => [
            'id' => 'moni',
            'name' => 'Community, Selldone'
        ],
        'NewShop' => [
            'id' => 'amalonda',
            'name' => 'Kuvomereza, Selldone'
        ],
        'Approve' => [
            'id' => 'vomereza',
            'name' => 'Kuvomereza, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Orders Management :name'
        ],

        'Recovery' => [
            'id' => 'kuchira',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Ikuyembekezera ⌛',
        'PAYED' => 'Adalipira ✅',
        'CANCELED' => 'Adalepheretsedwa ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Woyang\'anira',
            'OFFICER' => 'Ofesi ndi Woyang\'anira',
            'AUDITING' => 'Woyang\'anira Auditing',
            'EMPLOYEE' => 'Wantchito',
            'PRODUCT' => 'Woyang\'anira katundu',
            'CONTENT' => 'Woyang\'anira zinthu',
            'MARKETING' => 'Woyang\'anira malonda',
            'VIEWER' => 'Wowonera',

        ],
        'subject' => ":inviter anakuitanani ngati :level| :shop",
        'category' => "Kuyitanira kwa ogwira ntchito",
        'title' => "Mwaitanidwa ku <b>:shop_name</b> monga <b>:level</b> .",
        'message' => "Mwalandira kuitanidwa kuti mugwirizane ndi gulu la <b>:shop_title</b> pabizinesi. Muli ndi mwayi wovomereza kapena kukana izi. Ngati mungasankhe kuvomera, chonde lowani muakaunti ya Selldone kuti mutsimikizire zomwe mwasankha. Mukatsimikizira, mupeza mwayi wopita kugawo loyang'anira sitolo.",

    ],

    'welcome-email' => [
        'subject' => "👋 Takulandirani :name, Tiyeni Tiyambe ndi Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Takulandilani ku Selldone",
        'message' => "Zikomo posankha Selldone! Ndinu m'gulu la anthu omwe amalumikizana ndi ogulitsa padziko lonse lapansi ndi makasitomala, mabizinesi am'deralo ndi mabizinesi, komanso anthu kumakampani. Zida zathu zonse za Master ndi Pro zimapezeka kwa inu ** zaulere ** ndi ** zopanda malire **. Tabwera kukuthandizani ndikutsegula zitseko zakuchita bwino kwanu.",

        'index' => "Gawo :step.",

        'step-domain' => [
            'title' => 'Onjezani Domain Yanu Mwamakonda',
            'message' => "Kuti muyambe, onjezani dera lanu laulere mu Shopu Dashboard pansi pa Zikhazikiko> Domains Settings.",
            'action' => 'Sinthani Madomeni Anga',
        ],
        'step-landing' => [
            'title' => 'Sinthani Tsamba Lanu Loyamba',
            'message' => "Sinthani tsamba lanu lofikira popita ku Dashboard > Masamba. Sankhani tsamba lofikira kapena pangani lina. Ndiosavuta komanso mwachilengedwe, ndipo mutha kuyamba kugwira ntchito nthawi yomweyo.",
            'action' => 'Sinthani Mwamakonda Anu Tsamba Lofikira',
        ],
        'step-payment' => [
            'title' => 'Kukhazikitsa Njira Zolipirira',
            'message' => "Yambani kulandira malipiro mwachindunji ku akaunti yanu yakubanki. Kuti mulumikizane ndi omwe amapereka malipiro anu monga Stripe, PayPal, ndi zina zambiri, pitani ku Dashboard> Accounting> Gateway.",
            'action' => 'Onjezani Njira Zolipirira',
        ],
        'step-products' => [
            'title' => 'Onjezani Zogulitsa Zanu',
            'message' => "Onjezani malonda ndi magulu mosavuta mu Dashboard > Zogulitsa. Zili ngati kuyang'anira mafayilo ndi zikwatu pa PC yanu - kukokera ndikugwetsa kokonzeka. Muthanso kulowetsa zinthu zambiri kuchokera ku Excel. Chitsanzo chilipo chokuthandizani kuti muyambe.",
            'action' => 'Sinthani Zinthu Zanga',
        ],
        'step-shipping' => [
            'title' => 'Kukhazikitsa Njira Zotumizira',
            'message' => "Kulipiritsa makasitomala potumiza, fotokozani njira zanu zotumizira mu Dashboard > Logistic > Shipping. Mutha kukhazikitsa mitengo yosiyanasiyana ndi chithandizo chamalo osiyanasiyana. Musaiwale kukhazikitsa komwe mwasungiramo zinthu mu Dashboard> Logistic> Warehouse.",
            'action' => 'Sinthani Njira Zotumizira',
        ],
    

        'seller' => [
            'title' => 'Kodi ndinu wogulitsa?',
            'message' => 'Kuti muyambe kugulitsa, lowetsani dashboard yanu ku Selldone kudzera pa ulalo womwe uli pansipa ndikupanga sitolo yanu yoyamba kwaulere. Izi zitenga mphindi zochepa ndipo mudzakhala ndi sitolo yanu komanso tsamba la intaneti. Kenako tidzakuwongolerani kumasitepe otsatirawa ndikupeza njira yolipira.',
            'action' => 'Lowani ku dashboard yanga',
        ],
        'buyer' => [
            'title' => 'Ndine wogula',
            'message' => 'Zabwino zonse. Mukakhala membala wa Selldone, mudzachotsa zovuta zonse za umembala ndi kutsimikizika m\'masitolo apaintaneti. Kuti mupindule ndi sitolo iliyonse ndi tsamba lomwe limagwiritsa ntchito nsanja ya Selldone, mutha kulowa ndikudina kamodzi ndikupanga kugula kwanu kukhala kosavuta, mwachangu komanso kotetezeka.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet> Akaunti> Limbani',
        'title' => "Malipiro Opambana",
        'message' => "Akaunti yanu <b>:account_number</b> yalipira <b>:amount</b> bwino.",
        'account' => 'Akaunti',
        'charge' => 'Kulipiritsa',
        'balance' => 'Kusamala',
        'footer' => "Pangani bizinesi kukhala yosavuta, yotheka, komanso yopezeka kwa aliyense padziko lonse lapansi."
    ],

    'verify-email' => [
        'subject' => "🙌 Malizitsani kulemba kwanu ku Selldone! Tsimikizirani ulalo.",
        'category' => "MULI POCHITIKA CHIMODZI",
        'title' => "Tsimikizirani imelo yanu",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Ngati mukuvutika kudina batani la Verify, koperani ndi kumata URL pansipa mu msakatuli wanu: :activation_url",
        'next-step' => "Kenako, tikutumizirani zida zothandiza komanso chitsogozo cham'mbali kuti chikuthandizeni kuti musavutike kuwonjezera domeni yanu yomwe mwamakonda, kukhazikitsa zolipirira, kuwonjezera malonda, ndikupeza oda yanu yoyamba.",

    ],
    'verify-email-code' => [
        'subject' => "Khodi yotsimikizira ya :name",
        'category' => "SECURITY",
        'title' => "Nambala yotsimikizira imelo",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Sitolo Yanu Yakonzeka| :name",
        'category' => "MULI POCHITIKA CHIMODZI",
        'title' => "Kukhazikitsa kwatha",
        'account_title' => "Akaunti yanu",
        'account_msg' => "Tsimikizirani ndi kulowa muakaunti yanu ndi izi.",
        'shop_msg' => "Zambiri zamaakaunti pamakina oyendetsera bizinesi a Selldone.",

    ],

    'reset2fa' => [
        'category' => "UTHENGA WA SECURITY OFFICIAL",
        'title' => "Pemphani kuletsa kulowa masitepe awiri",
        'message' => "You are receiving this email because we received a request to reset two-factor authentication for **:name** account with **:email** email.<br><br>We found the following details for your account:",
        'footer' => "Ngati simunapemphe kukonzanso mawu achinsinsi, palibenso china chomwe chikufunika.",
        'action' => 'Letsani kulowa masitepe awiri',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Sitolo yanu yakonzeka tsopano!",
        'category' => "WOBADWA NEW ONLINE STORE PADZIKO LAPANSI",
        'title' => "Zabwino zonse, :name!",
        'message' => "<b>Zabwino, :name! Bizinesi yanu yatsopano yapaintaneti tsopano yayamba!</b> Ndife okondwa kukulandirani kudera la Selldoners. Mwachitapo kanthu kuti muchite bwino, ndipo tili pano kuti tikuthandizeni njira iliyonse.<br>Tsopano popeza sitolo yanu yakonzeka, tiyeni tiwonetsetse kuti mwakonzeka kulandira malipiro mwachindunji kuchokera kwa makasitomala anu ndikuyamba kukulitsa ufumu wanu. Ngati mungafune thandizo, tikukutumizirani uthenga—gulu lathu lothandizira limakhala lokuthandizani. Tikuwongolera gawo lililonse kuti sitolo yanu iziyenda bwino.",
        'pdf-book' => "Musaphonye bukhu lophatikizidwa: Chitani Bizinesi Yanu Monga Masewera",

        'account' => [
            'title' => 'Khwerero 1: Pangani akaunti mu chikwama cha Selldone',
            'message' => "Kuti muyambe, pangani akaunti mu chikwama chanu cha Selldone. Apa ndipamene ndalama zanu zidzachotsedwa, ndipo ndipamene mudzawonjezera kuti sitolo yanu ikhale ikuyenda bwino. Ngati ndalama zanu sizikuyenda bwino, musadandaule! Sitolo yanu ipitiliza kugwira ntchito popanda kusokonezedwa.",
            'action' => 'Lowani ku chikwama',
        ],

        'shop-account' => [
            'title' => 'Khwerero 2: gwirizanitsani akaunti ku sitolo',
            'message' => "Kenako, gwirizanitsani akaunti yanu yachikwama ku sitolo yanu. Mutu ku <b>Store> Accounting> Invoice</b>, ndikulumikiza chikwama chanu. Izi zimawonetsetsa kuti zolipira zonse zamakasitomala zimayikidwa mwachindunji muakaunti yanu yakubanki—Selldone sichotsa ndalama zilizonse pazopeza zanu.",
            'action' => 'Sungani Invoice Panel',
        ],

        'gateway' => [
            'title' => 'Khwerero 3: Lumikizani Njira Yolipira Paintaneti',
            'message' => "Tsopano, tiyeni tiyike njira yanu yolipira pa intaneti. Pitani ku <b>Store> Accounting> Port</b> ndikudina <b>Add New Port</b>. Sankhani ndalama zanu, ndipo muwona mndandanda wa njira zolipirira zomwe zilipo. Kulumikiza pachipata ndikofulumira komanso kosavuta, koma ngati mukufuna thandizo lililonse, omasuka kuyang'ana maupangiri a Selldone kapena kutifikira.",
            'action' => 'Onjezani portal ku sitolo',
        ],

        'domain' => [
            'title' => 'Gawo lomaliza: kulumikiza dera lodzipereka',
            'message' => "Tsopano, gwirizanitsani dera lanu lokonda kusitolo yanu. Izi zimathandiza makasitomala kugula zinthu kapena ntchito zanu ndikulipira mwachindunji kwa inu.",
            'action' => 'Kuyambitsa ndi kulandira makadi amphatso opanda malire',
        ],
    ],


    'basket-list' => [
        'item' => "chinthu",
        'count' => "Werengani",
        'price' => "mtengo",
        'discount-code' => "Kodi kuchotsera",
        'customer-club' => 'Makasitomala Club',
        'shipping' => "Manyamulidwe",
        'total' => "Zonse",
        'offer' => "Kupereka",
        'coupon' => "Kuponi",
        'lottery' => "Mphotho",
        'tax' => "Msonkho",
        'tax_included' => "Kuphatikizidwa mu mtengo",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Njira',
        'amount' => 'Ndalama',
        'giftcard' => 'Gift card',
        'payment' => 'Malipiro',
    ],


    'shop-subscription-email' => [
        'category' => "Kusintha kolembetsa",
        'title' => "Chilolezo cha Store: :shop_title",
        'title-reserved' => "Chilolezo chosungira: :shop_title",
        'title-active' => "Chilolezo chogwira ntchito: :shop_title",
        'title-finished' => "Licensi yomalizidwa: :shop_title",
        'title-cancel' => "Letsani chiphaso: :shop_title",
        'message' => "Dongosolo lanu lalayisensi yogulitsira lasinthidwa,",
        'RESERVED' => "⚡ Dongosolo lanu lolembetsa lasungidwa ** losungidwa **.",
        'ACTIVE' => "Dongosolo lanu lolembetsa lasinthidwa **.",
        'FINISHED' => "🚧 Dongosolo lanu lolembetsa lamalizidwa **.",
        'CANCEL' => "⛔ Dongosolo lanu lolembetsa lathetsedwa **.",
    ],

    'support' => [
        'subject' => "Support Center|:name anayankha",
        'category' => "Support Center",
        'title' => "Munalandira yankho",
        'action' => "Tsegulani shopu admin",
    ],

    'shop-customer-join' => [
        'subject' => "Lowani :shop_title",
        'category' => "Chikondwerero chatsopano chamakasitomala",
        'title' => "Ndife okondwa ndi umembala wanu",
        'action' => "Pitani tsopano",
    ],

    'shop-vendor-join' => [
        'subject' => "Vendor Onboarding| :shop_title",
        'category' => "Chikondwerero chatsopano cha ogulitsa",
        'title' => "Ndife okondwa ndi umembala wanu",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Onjezani khadi yatsopano",
        'title' => "Tikuthokozani, mwalandira khadi lamphatso",
        'action' => "Gulani tsopano",
        'message' => "Mwalandira khadi yamphatso ya :balance :currency. Mutha kugwiritsa ntchito khadi lamphatsoli m'sitolo yathu.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Support Center| :shop",
        'category' => "thandizo",
        'title' => "Munalandira yankho",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Kuitanitsa Malipiro | :order_id",
        'title' => "dongosolo",
        'message' => "Mudaitanitsa pasitolo yathu. Talandira oda yanu ndipo tikutumizirani imelo ina ndalama zikatsimikizika."
    ,

        'payments' => 'Malipiro',
    ],

    'order-payment' => [
        'subject' => "🛍 Chitsimikizo cha Malipiro | :order_id",
        'title' => "Ndondomeko yolipira",
        'message' => "Malipiro anu atha,<br> Talandira oda yanu. Tikutumizirani imelo ina mukaitanitsa.",
    

        'payments' => 'Malipiro',
    ],

    'order-update' => [
        'subject' => "🛍️ Order Status Update|Mtengo :order_id",
        'title' => "Order Status Update",
        'message' => "Oda yanu yasinthidwa. Mutha kuwona momwe zilili posachedwa muakaunti yanu.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Maoda anu ali pamzere wokonzedwa. Tikudziwitsani ikakonzedwa.",
                'OrderConfirm' => "Kuda kwanu kwatsimikiziridwa ndipo kukonzekera kwayamba.",
                'PreparingOrder' => "Oda yanu ikukonzedwa ndipo itumizidwa posachedwa.",
                'SentOrder' => "Oda yanu yatumizidwa. Mulandira posachedwa.",
                'ToCustomer' => "Oda yanu yatumizidwa. Tikukhulupirira kuti mudzasangalala nazo!",

                'PreparingOrder-PICKUP' => "Oda yanu ikukonzedwa. Mudzalandira zidziwitso ikakonzekera kutengedwa.",
                'SentOrder-PICKUP' => "Oda yanu yakonzeka kutengedwa. Chonde bwerani kusitolo kuti mudzatenge.",
                'ToCustomer-PICKUP' => "Oda yanu yalandilidwa. Tikukhulupirira kuti mudzasangalala nazo!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Maoda anu ali pamzere wokonzedwa. Tikudziwitsani ikakonzeka.",
                'OrderConfirm' => "Kuitanitsa kwanu kwatsimikiziridwa ndipo kukonzekera kuli mkati.",
                'PreparingOrder' => "Oda yanu ikukonzedwa ndipo itumizidwa kwa inu posachedwa.",
                'ToCustomer' => "Mauthenga anu apakompyuta atumizidwa ku akaunti yanu. Zikomo!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Pempho lanu lantchito lili pamzere. Tikudziwitsani tikayamba.",
                'OrderConfirm' => "Ntchito yanu yatsimikizika ndipo tikukonzekera kuyamba.",
                'PreparingOrder' => "Tikukonzekera ntchito yanu, ndipo tidzakudziwitsani ikamaliza.",
                'ToCustomer' => "Ntchito yanu yatha. Zikomo posankha ife!"
            ],
            'FILE' => [
                'PreparingOrder' => "Fayilo yanu ikukonzedwa ndipo ipezeka posachedwa.",
                'ToCustomer' => "Fayilo yanu yakonzeka ndipo yatumizidwa. Tsopano mukhoza kukopera izo."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Kulembetsa kwanu kuli pamzere. Tikudziwitsani ntchito ikayamba.",
                'OrderConfirm' => "Kulembetsa kwanu kwatsimikiziridwa ndipo kukhazikitsidwa.",
                'PreparingOrder' => "Tikukonzekera zolembetsa zanu ndipo ziyamba posachedwa.",
                'SentOrder' => "Kulembetsa kwanu kwayatsidwa. Mudzalandira zosintha mosalekeza.",
                'ToCustomer' => "Ntchito yolembetsa yanu yayatsidwa bwino."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Zabwino zonse :name|Voucha Yatsopano: :title',
        'category' => "ZONSE, VOCHA YATSOPANO",
        'message' => "Hei :name,<br><br>Mwalandira voucha yatsopano ngati mphatso kuchokera kwa ife! Mutha kupeza ma voucha ochulukirapo poyambitsa Selldone kwa anzanu ndi aliyense amene mumamudziwa. Voucha iyi ndiyofunika **:price :currency**.<br><br>Mwatengapo kanthu koyamba, ndipo tabwera kukuthandizani kuti mutsegule zatsopano ndi voucha yanu! Chonde lowani ndi **:email** ndikupeza voucha yanu mu Shop **Dashboard** > **Zikhazikiko** > **Licence**.<br><br>Q<br><br>Zabwino!",
        'action' => "Dashboard yanga",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Zabwino zonse, Wokondedwa :name | Mwalandira mphatso',
        'category' => "Chilengezo cholandira mphatso",
        'title' => "Mphatso kwa inu",
        'message' => "Moni :name, ndife okondwa kukudziwitsani kuti mwalandira mphatso yapadera kuchokera ku Selldone! 🎉 Mutha kupeza mphatso zambiri mwakukhalabe wokangalika, kukulitsa sitolo yanu, ndikuwongolera ukadaulo wanu pa Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade chiphaso cha sitolo yanu ndikutsegula zida zamphamvu kwambiri kuti mupititse patsogolo bizinesi yanu yapaintaneti!",
        'action' => "Mphatso",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Dongosolo Latsopano Lalandilidwa | :order_id",
        'title' => "New Order",
        'message' => "Mwalandira dongosolo latsopano. Chonde pitani patsamba lokonzekera maoda musitolo yanu.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Zambiri Zanu Zodzazidwa',
        'output-form-title' => 'Zomwe zagulidwa',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Lipoti la Sabata ndi :time',
        'title' => 'Lipoti la sitolo ya sabata iliyonse',
        'message' => "This is your store's weekly report from <b>:start</b> to <b>:end</b>. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Lipoti lanu la kusunga :amount m\'miyezi itatu yapitayi| :shop_title',
        'title' => 'Lipoti lanyengo la zochita zanu zabizinesi, mphotho ndi ndalama zomwe mwasunga',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Maakaunti olumikizidwa',
        'sub-title' => 'Kodi ma wallet account olumikizidwa ku sitolo yanga ndi ati?',
        'view-wallet' => 'Onani chikwama',
        'tip-title' => 'Malangizo ofunikira',
        'tip' => "Khazikitsani chikwama chaulere cha Selldone ndikuchigwirizanitsa ndi sitolo yanu. Ngakhale ndalama zanu zili zolakwika, makasitomala anu amatha kugula ndikulipira popanda vuto lililonse. Osadandaula, ntchito ndi data ya sitolo yanu zipitilira bwino mpaka mwezi umodzi, popanda kusokoneza.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Lumikizani ku akaunti'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Mapulogalamu oikidwa',
        'sub-title' => 'Mndandanda wamapulogalamu omwe mudayika m\'sitolo yanu sabata ino.',
        'tip' => "Kodi mukufuna kupeza mapulogalamu enanso pasitolo yanu?",
        'view-app-store' => 'Pitani ku Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Mabotolo Anu a Store',
        'sub-title' => 'Mabot ogulitsa okhazikika mu sitolo yanga.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone wakupatsirani ma bots ogulitsa okha. Zomwe muyenera kuchita ndikupita ku Zowonjezera> Gulu la Maboti ndikuyambitsa bots yanu. Dziwani kuti ntchito zoyenera ziyenera kupezeka m'dziko lanu.",
        'view-bots' => 'Sinthani bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kulankhulana ndi Makasitomala',
        'sub-title' => 'Kodi ndimalumikizana angati ndi makasitomala anga sabata ino?',
        'faqs' => 'Mafunso Ofunsidwa Kawirikawiri',
        'tickets' => 'Makasitomala Matikiti',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Ogwiritsa Status',
        'sub-title' => 'Zochitika kuchokera ku :start mpaka :end',
        'users' => [
            'title' => 'Makasitomala',
            'subtitle' => 'Ogwiritsa Ntchito',
        ],
        'views' => [
            'title' => 'Maulendo',
            'subtitle' => 'Kodi mwapitako kangati m\'sitolo',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Obwerera Ogwiritsa',

        'shop_views' => 'Mawonedwe a Shopu',
        'baskets' => [
            'title' => 'Ngolo Zogula',
            'subtitle' => 'Nenani kuchuluka kwa ngolo zatsopano zogulira',
        ],
        'products' => [
            'title' => 'Zogulitsa Mwachidule',
            'subtitle' => 'Mkhalidwe wa zinthu zomwe zili m\'sitolo ndi mtundu',
            'value_name' => 'Zogulitsa'
        ],
        'products_count' => 'Mitundu yazinthu',
        'views_count' => 'Chiwerengero chowonera',
        'sell_count' => 'Sell count',
        'send_count' => 'Chiwerengero cha kutumiza',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Gulu la ogulitsa akuluakulu a Drop Shipping Selldone.',
        'total_fulfillments' => 'Maoda Onse Olandilidwa',
        'ds_count' => 'Analandira Malamulo',
        'statistics_title' => 'Nenani zomwe mwalandira',
        'ds_cancels' => 'Letsani ndi wogulitsa mawonekedwe',
        'ds_rejects' => 'Letsani ndi Inu',
        'tip' => "Kodi ndinu wogulitsa kwambiri katundu? Kodi muli ndi malo osungira, fakitale kapena ogulitsa zinthu? Mutha kupereka zinthu zanu kwa ogulitsa ena mu Selldone Drop Shipping service kuti mugulitse malonda anu pamlingo waukulu. Titumizireni imelo support@selldone.com kuti tikutsogolereni.",
        'view-drop-shipping-panel' => 'Lowani ku gulu lalikulu',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Kusinthana mitengo',
        'sub-title' => 'Mndandanda wamitengo yaposachedwa yosinthira ndalama m\'sitolo yanu.',
        'from' => 'Ndalama Zakunja',
        'to' => 'Ndalama yopita',
        'rate' => 'Mlingo wa kutembenuka',
        'view-exchange-panel' => 'Sinthani Mitengo Yosinthira',
    

        'vew-exchange-panel' => 'kusinthana kasamalidwe gulu',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Makontrakitala a akatswiri',
        'sub-title' => 'Ndi akatswiri ati omwe amagwira ntchito pasitolo yanga?',
        'cost' => 'Ndalama ya contract',
        'duration' => 'Kutalika',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Tsiku Kuletsa',
        'end_at' => 'Tsiku lokatula',
        'tip' => 'Mutha kulemba ganyu akatswiri abwino kwambiri ku Selldone kuti akulitse bizinesi yanu.',
        'view-experts' => 'Dinani kuti muyambe.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Nenani za njira zolipirira zomwe zikugwira pa shopu :shop.',
        'tip-title' => 'Malangizo ofunikira',
        'tip' => "Pitani ku tsamba loyang'anira ma portal mu sitolo yanu ndikuwonjezera doko limodzi mumphindi zochepa. Makasitomala anu amakonda kulipira mwachangu komanso mosatekeseka kudzera pa intaneti.",
        'view-shop-gateways' => 'Lowani ku kasamalidwe ka portal ya sitolo yanga.',
        'view-gateways' => 'Onani zipata zambiri',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Malamulo',
        'sub-title' => 'Mndandanda wamaoda omwe ndalandira sabata ino.',
        'total_baskets' => 'Maoda Onse',
        'total_posBaskets' => 'Maoda Onse a Cash',
        'pos-title' => 'Bokosi la POS Store',
        'chart-label' => 'Maoda amalizidwa (maoda awa samalipidwa kwenikweni!)',
        'tip-title' => 'Muyenera kuyesetsa kwambiri ...',
        'tip' => "Palibe kupambana kosavuta.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Processing Center',
        'sub-title' => 'Kodi tinakonza zotani m\'sitolo sabata ino?',
        'tip-title' => 'Simunagulitse!',
        'tip' => "Tsoka ilo mudalibe zogulitsa sabata ino. Muyenera kupeza zambiri ku sitolo yanu. Mutha kuwonjezera zinthu zina, kusankha zithunzi zabwinoko kapena kulemba mafotokozedwe abwino azinthu zanu. Ganizirani ntchito yanthawi zonse yabizinesi yanu. Ngati muchita bwino ndipo osakhumudwa, mupambana.",
        'view-process-center' => 'View process center',
        'return' => [
            'title' => 'Adabweza Order',
            'subtitle' => 'Lipoti zomwe zabwezedwa.',
            'tip-title' => 'Kodi mumadziwa kuti...',
            'tip' => "Mutha kupanga zolembera ndalama zambiri momwe mukufunira ndi Selldone POS! Kaya ndi piritsi lanu, foni yam'manja, kapena laputopu, mutha kusintha chipangizo chilichonse kukhala malo ogulitsa. Ndiosavuta, kukhazikitsa mwachangu, komanso kukonzekera seva yanu. Yambani kugwiritsa ntchito lero!",
            'view-pos' => 'Lowani ku Cashier Yanga Yapaintaneti'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Magawo',
        'sub-title' => 'Ndi kangati komwe ndidayendera sitolo yanga?',
        'countries-title' => 'Ndi mayiko ati omwe adachezeredwa kwambiri?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Kodi mukufuna kupanga ndalama popanda kuwononga ndalama imodzi?',
        'message' => "Wokondedwa :name, mutha kupita ku Dashboard> Kuchita ziwonetsero ndikupanga ulalo wotumizira. Tumizani ulalo kwa anzanu, Mumalandira makadi amphatso a Selldone ndi gawo lamalipiro a anzanu. Dziwani kuti khadi la mphatso lidzatumizidwa kwa inu ndi mnzanu.",
        'action' => 'Onani ulalo wanga woyambira',
        'mail-clip' => "<b style='color: #C2185B'>Chofunika:</b> Ngati mumagwiritsa ntchito maimelo monga Gmail omwe amachepetsa kutalika kwa imelo, pezani njira iyi kumapeto kwa imelo kuti muwonetse lipoti lonse ndikudina:",

        'no-coin-reward' => "<b style='color: #C2185B'>Pepani:</b> Zochita zanu sizinakwaniritse zofunikira kuti mupeze mphotho yaulere ya SEL Coins. Yesani kwambiri ndikugulitsa zambiri pashopu yanu pa nyengo yotsatira.",
        'yes-coin-reward' => "<b style='color: #4CAF50'> Zabwino:</b> Ntchito yabwino! Kutengera ndi momwe mwagwirira ntchito bwino, tapereka ndalama za :amount SEL ku akaunti yanu ngati mphotho.",

        'need-buy-license' => "<b>Kwezani Bizinesi Yanu:</b> Zikuwoneka ngati simunalembetse dongosolo lililonse lolembetsa patsamba lanu pano! Sinthani tsopano kuti mutsegule zowonjezera za :amount pamwezi ngati mumalipira chaka chilichonse.",
        'not-afford-message' => "Ngati simungakwanitse kapena muli ndi vuto lililonse ndi malipiro, omasuka kutiuza kudzera support@selldone.com.",
        'add-domain' => "<b>Bwanji osakhala ndi makonda abizinesi yanu?</b><br> Onjezani domeni patsamba lanu tsopano; ndi zaulere!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone ndi<del> mankhwala</del> <span style = 'color: forestgreen'>anthu</span> .<br> Khalani katswiri Selldoner!",
        'message' => "Tsatirani masamba ovomerezeka a Selldone pa Twitter, LinkedIn ndi malo ochezera. Titumizireni ndemanga, zopempha kapena zotsutsa kapena kutenga nawo mbali pazokambirana za Selldone. Ndifenso m'gulu la Selldone lomwe <b>Mumapanga</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Ma Avocado Atsopano Alandilidwa|:shop_title :time',
        'title' => "Lipoti la magwiridwe antchito a maola 24 apitawa",
        'message' => "Makasitomala anu akuyembekezera kuti maoda anu awonedwe ndikukugulira mitengo. Yankhani zopempha za makasitomala anu mwachangu momwe mungathere kuti mugulitse zambiri.",
        'card_title' => "Kulamula pamzere",
        'card_subtitle' => "Kuyambira :date",

        'card_payed' => "Analipira malamulo"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Yankhani zomwe mwalemba mu :community_title',
        'title' => ":name, ndi :count ena adapereka ndemanga pazolemba zanu.",
        'message' => "Moni :name, zolemba zanu zikuyang'aniridwa! Mwalandira ndemanga mdera lathu. Lowani muakaunti yanu kuti mulowe nawo pazokambirana ndikuwona zomwe aliyense akunena.",
        'title-simple' => ":name ana comment pama post anu.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Yankhani mutu wanu :topic_title',
        'title' => ":name, ndi :count ena anayankha pa mutu wanu.",
        'message' => "Moni :name, mutu wanu ukukhudzidwa! Mwalandira mayankho mdera lathu. Lowani muakaunti yanu kuti mulowe nawo pazokambirana ndikuwona zomwe aliyense akunena.",
        'title-simple' => ":name anayankha pa mutu wanu.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Kulowa Kwatsopano :name',
        'category' => 'Zidziwitso zachitetezo',
        'title' => "Lowani ku Akaunti",
        'message' => "Wokondedwa :name, kulowa mu akaunti yanu ya Selldone kwapezeka.",   // Login in selldone (seller)
        'message-shop' => "Wokondedwa :name, kulowa kwa :shop_title kwapezeka.",  // Login in shop (buyer)

        'footer' => "Ngati simunalowe, chonde sinthani mawu achinsinsi.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Kuchotsa",
        'deposit' => "Depositi",

        'withdraw_subject' => "Chotsani ku akaunti :account",
        'deposit_subject' => "Depositi ku akaunti :account",

        'message' => "Kutumiza ndalama kwachitika motsatira ndondomeko zotsatirazi.",

        'type' => "Mtundu wamalonda",

        'from' => "Akaunti yochokera",
        'to' => "Destination account",

        'desc' => "Kufotokozera zamalonda",
        'action' => "Onani zochita",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Zofunika! Kuphwanya malamulo| :shop",
        'category' => "Chidziwitso chovuta",
        'title' => "Sitolo yanu yalangidwa",
        'action' => "Tsegulani malo ogulitsa",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter wakukuitanani kuti mujowine Selldone",
        'title' => ":name yakutumizirani :amount kuti ikuthandizireni kukhazikitsa sitolo yanu yatsopano yapaintaneti ndikupangira ndalama!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Landirani kuitanidwa",
        'owner' => "Mwini wa",
        'join-date' => "Pa Selldone kuyambira",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Kubwezeretsa ulalo| :shop",
        'category' => "Chitetezo cha sitolo",
        'title' => "Ulalo wobwezeretsa sungani wa <b>:shop_name</b> .",
        'message' => "Imeloyi idatumizidwa kwa inu chifukwa mudapempha kuti mubwezeretse sitolo yanu. Kudina ulalo womwe uli pansipa kuchira sitolo yanu ndi zonse zomwe zili zake.",
        'action' => "Tsimikizirani Kubwezeretsa kwa Masitolo",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Kodi Selldone adasunga ndalama zingati ku bizinesi yanu?',
        'sub-title' => 'Kuyambira pa :start mpaka :end',
        'infrastructure' => [
            'title' => 'Zomangamanga',
            'subtitle' => 'Ma seva, CDN, Storage, ndi mautumiki ena amtambo',
        ],
        'experts' => [
            'title' => 'Akatswiri & Ogwira ntchito',
            'subtitle' => 'Madivelopa, kukonza, ndi thandizo',
        ],
        'total_save' => 'Ndalama zonse zosungidwa'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Kuchita kwanu',
        'sub-title' => 'Malingaliro abizinesi kuyambira :start mpaka :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Obwerera Ogwiritsa',

        'shop_views' => 'Mawonedwe a Shopu',
        'baskets' => [
            'title' => 'Ngolo Zogula',
            'subtitle' => 'Nenani kuchuluka kwa ngolo zatsopano zogulira',

        ],
        'products' => [
            'title' => 'Zogulitsa Mwachidule',
            'subtitle' => 'Mkhalidwe wa zinthu zomwe zili m\'sitolo ndi mtundu',
            'value_name' => 'Zogulitsa'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Mawonedwe amasamba onse',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Mwalandira dongosolo latsopano. Chonde pitani patsamba lokonzekera maoda mugulu lanu la ogulitsa.",
        'subject' => "🛍 Dongosolo Latsopano Lalandilidwa | :order_id",
        'your_revenue' => "Ndalama Zanu",
    ],
    'vendor-invite' => [
        'title' => 'Kuyitanira kwa ogulitsa',
        'message' => "Mwalandira kuitanidwa kuti mukhale wogulitsa :shop_name. Mutha kuvomereza kapena kukana podina mabatani otsatirawa.",
        'subject' => ":shop_name |Kuitanidwa kukhala wogulitsa wathu",
        'accept' => "Landirani & Khalani Wogulitsa",
        'reject' => "Kana",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Kuyitanira Kujowina Gulu Lathu',
        'message' => "Mwaitanidwa kuti mujowine :vendor_name ku :shop_name. Mutha kuvomera kapena kukana kuyitanidwaku pogwiritsa ntchito mabatani omwe ali pansipa.",
        'subject' => "Kuyitanira Kuti Mulowe nawo :vendor_name|Khalani membala wa Gulu",
        'accept' => "Landirani & Lowani nawo Gulu",
        'reject' => "Kana",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Khodi Yanu Yolowera pa :shop",
        'header-message' => "Tikukutumizirani imelo iyi chifukwa mwapempha khodi yolowera m'sitolo. Chonde pezani Mawu Achinsinsi Anthawi Imodzi (OTP) pansipa:",
        'footer-message' => "Khodi iyi ikhala yovomerezeka kwa mphindi 10. Ngati simunapemphe khodiyi, chonde nyalanyazani imelo iyi."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Tsimikizirani imelo yanu| :shop",
        'title' => 'Kutsimikizira Imelo',
        'header-message' => "Moni :name,<br>Chonde tsimikizirani kuti **:email** ndi imelo yanu podina batani ili pansipa kapena kugwiritsa ntchito ulalo womwe uli pansipa mkati mwa maola 48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Zosintha Zamalonda| :shop",
        'title' => "Kusintha pa Zomwe Zagulitsa - Maola 24 Omaliza",
        'message' => "Ndikukhulupirira kuti uthengawu wakupezani bwino. Izi ndi zosintha zazifupi zakudziwitsani za momwe zinthu ziliri papulatifomu yathu maola 24 apitawa.\nPanthawi imeneyi, pakhala kusintha kwa zinthu zina. Zosinthazi zitha kukhala chifukwa cha kugula, zosintha zamasheya, kapena zochitika zina zokhudzana ndi izi.\nKuti mumve zambiri za chinthu chilichonse, chonde lowani muakaunti yanu ndikuwona gawo la 'Product Status'.",
        'action' => "Tsegulani gulu la ogulitsa",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Maoda Ambiri Alandiridwa| :shop | :date",
        'title' => "Chidziwitso cha Maoda Ambiri",
        'message' => "Mwalandira maoda ambiri. Chonde pitani patsamba lokonzekera madongosolo mugawo lanu kuti mumve zambiri. Mutha kutsitsanso mndandanda wamadongosolo kudzera pa ulalo wotetezedwa womwe waperekedwa, wovomerezeka kwa masiku 7.<br><br>\n        <b>IMPORTANT:</b> Ulalo uwu ndi wovomerezeka kwa masiku 7.<br>\n        Ulalowu ndiwokhazikika, kotero nthawi iliyonse mukadina, mulandila maoda osinthidwa kwambiri atsiku lomweli. <b>Zikutanthauza ngati malipiro a maoda asintha ndi kukanidwa, simudzawonanso dongosololo mu CSV yotsitsa, kapena ngati kulipiridwa kulipiridwa, kuwonekera pamndandanda.</b><br><br>\n        <ul>\n            <li>CSV ili ndi maoda olipidwa ndi deti losungidwa mu :date.</li>\n            <li>Dati losungidwa ndi tsiku lomwe wosuta amadina potuluka patsamba la oda.</li>\n        </ul>\n        <b>Kupewa maoda obwereza, nthawi zonse yang'anani Order ID musanatumize.</b>",
        'action' => "Tsitsani Mndandanda wa Maoda",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Zina mwa oda yanu sizinavomerezedwe ndipo sizingatumizidwe. Ndalama za zinthuzi zibwezeredwa ku khadi lanu posachedwa."
    ]

];
