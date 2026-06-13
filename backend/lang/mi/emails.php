<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ka mihi tenei karere ki tetahi kaihoko hou ki te toa.',
        ShopMailTemplateCodes::OrderCheckout => 'Ka tukuna tenei panui ina whakamanahia e te kaihoko tetahi ota.',
        ShopMailTemplateCodes::OrderPayment => 'Ko tenei whakamohiotanga e whakapumau ana i te utu angitu i mahia e tetahi kaihoko.',
        ShopMailTemplateCodes::OrderUpdate => 'Ka tukuna tenei karere ki te whakahou i tetahi kaihoko mo te ahuatanga o ta raatau ota.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ka tukuna tenei karere ki tetahi kaihoko ki te whakamohio ki a raatau mo te ota kua whakapumautia.',
        ShopMailTemplateCodes::PosCheckout => 'Ka tukuna tenei panui ki te whakaū i tetahi ota hoko mo tetahi kaihoko.',
        ShopMailTemplateCodes::PosPayment => 'Ko tenei whakamohiotanga e whakapumau ana i te utu hoko i mahia e tetahi kaihoko.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ko tenei karere ka whakamohio ki te kaihoko mo tetahi hokonga i mahia i tana waahi hoko.',
        ShopMailTemplateCodes::ShopContact => 'Ka tukuna tenei panui ina tukuna he puka whakapā.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ko tenei whakamohiotanga ka whakamohio ki tetahi kaiwhakamahi kua whiwhi ia i tetahi kaari koha.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ka mihi tenei karere ki tetahi kaihoko hou ki te toa.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ka tukuna tenei karere ki te tono i tetahi kaihoko kia uru mai ki to maakete.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ka tukuna tenei karere ki te kaihoko ina tae mai he ota i roto i te mana Utu, Moni ranei mo te Tukunga (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Ka tukuna ia ra ki te whakahou i nga kaihoko mo te ahuatanga o a raatau hua.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ka tukuna tenei karere ki te tono i tetahi kaihoko kia uru mai ki to maakete.",

        ShopMailTemplateCodes::UserLogin => "Whakamōhiohia te kaiwhakamahi me nga taipitopito takiuru, tae atu ki te wahitau IP, te ra, me te taputapu, mo nga kaupapa haumaru.",
        ShopMailTemplateCodes::LoginCode => "Tukuna he waehere kupuhipa kotahi wa mo nga kaiwhakamahi ki te takiuru ki te toa.",

        ShopMailTemplateCodes::EmailVerifyLink => "Tukuna he hononga ki te manatoko i te wahitau imeera o te kaiwhakamahi. Ka tukuna tenei imeera ina rehita tetahi kaiwhakamahi na SMS ka uru ki tana imeera. Karekau e tukuna ina rehita tika te kaiwhakamahi me te takiuru hapori, imeera ranei.",

        ShopMailTemplateCodes::EmailBulkOrder => "Tukuna he rarangi o nga ota kua riro me te utu i te nuinga mo te ra motuhake."


    ,

    ],


    'global' => [
        'greetings' => 'Kia ora :name',
        'end-statement' => 'Rōpū tautoko',

        'receiver_name' => 'Kia ora :user_name',
        'footer-help' => "Me awhina? Uia mai ki [support@selldone.com](mailto:support@seldone.com) toro mai ranei ki ta maatau [pokapū awhina](https://selldone.com/community).",
        'selldone-team' => 'Ko te roopu Selldone',
        'footer-shop' => "Mena kei te hiahia awhina koe mo tetahi mea, kaua koe e mangere ki te tuku imeera ki a matou: :shop_mail",
        'accept' => "Whakaae",
        'reject' => "Whakakahore",
        'verify' => "manatoko",
        'title' => "Taitara",
        'value' => "Uara",
        'description' => "Whakaahuatanga",
        'shop' => "Toa",
        'shop-info' => "Nga korero toa",
        'user' => "kaiwhakamahi",
        'user-info' => "Nga korero kaute",
        'license' => "Raihana",
        'status' => "Tūnga",
        'start' => "Tīmata",
        'end' => "Whakamutunga",
        'renewal' => "Whakahoutanga",
        'view' => "Tirohanga",

        'balance' => "Taurite",
        'card_number' => "Tau Kaari",
        'cvv' => "Cvv",
        'expire_date' => "Te ra paunga",

        'Dashboard' => "Papatohu",
        'order' => "ota",
        'view_order' => "Tirohia te raupapa",
        'pay_now' => "Pay now",

        'official_selldone' => "HEI HOKO ATU",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Moni",
        'free-balance' => "Taurite kore utu",
        'locked-balance' => "Taurite maukati",
        'bot' => "Bot",
        'requests' => "Nga tono",
        'baskets' => 'Kaata',
        'physical' => "Tinana",
        'virtual' => "Mariko",
        'file' => "Kōnae",
        'service' => "Ratonga",
        'fulfillment' => "Te whakatutuki",
        'open' => "Tuwhera",
        'reserved' => "Kua rahuitia",
        'canceled' => "Kua whakakorehia",
        'payed' => "Ka utua",
        'cod' => "COD",
        'orders-count' => 'Nga ota',
        'payments-count' => 'Nga utu',
        'confirms-count' => 'Whakaū',
        'sends-count' => 'Ka tuku',
        'delivers-count' => 'Ka tuku',
        'count' => 'Tatau',
        'transactions-count' => 'Ka tatau nga tauwhitinga',
        'success-transactions' => 'Nga tauwhitinga angitu',
        'total-amount' => 'Tapeke moni',
        'amount' => 'Te nui',
        'wage' => 'Utu',
        'debug' => 'Patuiro',
        'pos' => 'POS',
        'live' => 'Ora',
        'CheckQueue' => 'Taki tūtira',
        'OrderConfirm' => 'Whakapumau ota',
        'PreparingOrder' => 'Te whakarite ota',
        'SentOrder' => 'Tonoa tuku',
        'ToCustomer' => 'Ka tukuna ki te kaihoko',
        'Pending' => 'Tarewa ana',
        'Accepted' => 'Whakaaetia',
        'Rejected' => 'Kua whakakorehia',
        'pc' => 'PC',
        'tablet' => 'Papa',
        'phone' => 'Waea',
        'total' => 'Tapeke',
        'view-detail' => 'Tirohia nga taipitopito',
        'empty' => 'Putua',
        'dropshipping' => 'Te tuku tuku',
        'reply' => 'Whakautu',
        'reactions' => 'Tauhohenga',
        'Comments' => 'Nga korero',
        'last-comment' => 'Te korero whakamutunga',
        'response-to' => 'Whakautu ki',
        'posts' => 'Panui',
        'post' => 'Whakairi',

        'name' => 'Ingoa',
        'email' => 'Īmēra',
        'type' => 'momo',
        'device' => 'Pūrere',
        'platform' => 'Paerewa',
        'browser' => 'Pūtirotiro',
        'time' => 'Te wa',
        'Wallet' => 'Pukoro',
        'date' => 'Rā',

        'account' => 'Pūkete',
        'transaction' => 'Tauwhitinga',
        'fee' => 'Utu',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Pire',
        'category' => 'Kāwai',
        'password' => 'Kupuhipa',
        'verify-login' => "Manatoko & Takiuru",
        'url' => 'URL',
        'avocado' => 'Awhekātō',
        'hyper' => 'Hiper',
        'buy-now' => "Hokona inaianei",
        'add-domain' => "Add Domain",
        'views' => 'Tirohanga',


        'country' => 'Whenua',
        'address' => 'wāhi noho',
        'postal' => 'Waehere Poutāpeta',
        'building_no' => 'Whare #',
        'building_unit' => 'Wae #',
        'message' => 'Karere',


        'customer' => 'Kiritaki',
        'cart-items' => 'Nga taonga kaata',
        'payment' => 'Utu',
        'receiver' => 'Kaiwhiwhi',
        'virtual-items' => 'Tuemi mariko',
        'no-payment' => 'Kaore he utu!',

        'enable' => 'Whakahohe',
        'access' => 'Urunga',
        'bank' => 'Nga korero putea',

        'vendor' => 'Kaihoko',

        'view_content' => "Tirohia nga korero katoa",
        'files' => 'Kōnae',
        'download' => 'Tikiake',
        'file_name' => 'Ingoa Kōnae',
        'file_size' => 'Rahi',

        'subscription' => 'Ohaurunga',
        'products' => 'Hua',
        'vendor_products' => 'Nga Hua Kaihoko',

        'pickup' => 'Te tiki',

        'minutes' => 'Nga meneti',
        'hours' => 'Nga haora',

        'refund' => 'Whakahoki',
        'recipient_address' => 'Wāhitau Kaiwhiwhi',
        'signature' => 'Waitohu',
        'blockchain' => 'Poraka',
        'details' => 'Nga korero',


    

        'Shop' => 'Toa',
        'dashboard' => 'papatohu',
        'comments' => 'kōrero',
        'wallet' => 'putea',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Pakihi OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Ripoata Mahi, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Pūrongo Kaupeka, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hi',
            'name' => 'Whakaae, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Tautoko :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Manatoko, Selldone'
        ],
        'Welcome' => [
            'id' => 'hi',
            'name' => 'Hapori, Selldone'
        ],
        'NewShop' => [
            'id' => 'nga kaihokohoko',
            'name' => 'Whakaae, Selldone'
        ],
        'Approve' => [
            'id' => 'whakaae',
            'name' => 'Whakaae, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Whakahaere Ota :name'
        ],

        'Recovery' => [
            'id' => 'whakaora',
            'name' => 'Te Roopu Whakaora a Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Tārewa ⌛',
        'PAYED' => 'Utu ✅',
        'CANCELED' => 'Kua whakakorehia ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Kaiwhakahaere',
            'OFFICER' => 'Apiha me te Kaitirotiro',
            'AUDITING' => 'Kaiwhakahaere kaute',
            'EMPLOYEE' => 'Kaimahi',
            'PRODUCT' => 'Kaiwhakahaere hua',
            'CONTENT' => 'Kaiwhakahaere ihirangi',
            'MARKETING' => 'Kaiwhakahaere hokohoko',
            'VIEWER' => 'Kaitirotiro',

        ],
        'subject' => "I tono a :inviter ki a koe hei :level| :shop",
        'category' => "Te tono a nga kaimahi",
        'title' => "Kua powhiritia koe ki <b>:shop_name</b> hei <b>:level</b> .",
        'message' => "Kua whiwhi koe i te powhiri ki te mahi tahi me te roopu <b>:shop_title</b> i te pakihi. Kei a koe te whiringa ki te whakaae, ki te whakakore ranei i tenei tuku. Mena ka whiriwhiri koe ki te whakaae, tena koa takiuru ki te ratonga Selldone hei whakau i to whakatau. Ina whakamanahia, ka uru koe ki te waahanga whakahaere toa.",

    ],

    'welcome-email' => [
        'subject' => "👋 Nau mai :name, Kia timata tatou ki te Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Nau mai ki Selldone",
        'message' => "Mauruuru koe mo te whiriwhiri Selldone! Kua uru koe inaianei ki tetahi hapori hihiri e hono ana i nga kaihoko o te ao ki nga kaihoko, nga pakihi o te rohe ki nga umanga, me nga tangata takitahi ki nga umanga. Ko o maatau Kaiwhakaako me nga taputapu Pro katoa e waatea ana ki a koe ** kore utu ** me te ** kore mutunga **. Kei konei matou ki te tautoko i a koe me te whakatuwhera i nga kuaha o to angitu.",

        'index' => "Hipanga :step.",

        'step-domain' => [
            'title' => 'Tāpirihia to Rohe Ritenga',
            'message' => "Hei tiimata, taapirihia to rohe ritenga mo te kore utu ki te Papatohu Toa i raro i nga Tautuhinga> Tautuhinga Rohe.",
            'action' => 'Whakahaerehia aku puni',
        ],
        'step-landing' => [
            'title' => 'Whakaritea To Whārangi Kāinga',
            'message' => "Whakawhaiarohia to wharangi kaainga ma te haere ki te Papatohu > Nga Wharangi. Kōwhiria he whārangi taunga, waihangahia rānei he whārangi hōu. He ngawari, he maamaa hoki, a ka taea e koe te timata ki te mahi tonu.",
            'action' => 'Whakaritea Taku Wharangi Taunga',
        ],
        'step-payment' => [
            'title' => 'Whakaritea Nga Tikanga Utu',
            'message' => "Tīmatahia te tango utu ki roto i to putea putea. Hei hono i o kaiwhakarato utu penei i a Stripe, PayPal, me etahi atu, haere ki te Papatohu> Kaute> Te Waahi.",
            'action' => 'Tāpirihia nga tikanga utu',
        ],
        'step-products' => [
            'title' => 'Tāpirihia o Hua',
            'message' => "Maamaa te taapiri i nga hua me nga waahanga ki te Papatohu> Hua. He rite tonu ki te whakahaere i nga konae me nga kōpaki i runga i to PC – kua reri katoa te to-me-taka. Ka taea hoki e koe te kawemai i nga hua ma te whakamahi i te Excel. Kei te waatea he tauira tauira hei awhina i a koe ki te timata.",
            'action' => 'Whakahaerehia Aku Hua',
        ],
        'step-shipping' => [
            'title' => 'Whakaritea Nga Tikanga Tuku',
            'message' => "Hei utu i nga kaihoko mo te tuku, tautuhia o tikanga tuku ki te Papatohu> Logistic> Tuku. Ka taea e koe te whakarite utu rereke me te tautoko mo nga waahi rereke. Kaua e wareware ki te tautuhi i to takenga whare putunga ki te Papatohu> Logistic> Warehouse.",
            'action' => 'Whakahaerehia nga tikanga tuku',
        ],
    

        'seller' => [
            'title' => 'He kaihoko koe?',
            'message' => 'Hei tiimata ki te hoko, uru atu ki to papatohu i Selldone ma te hono i raro nei ka hanga i to toa tuatahi kia kore utu. He meneti torutoru tenei ka whai koe i to ake toa me to pae ipurangi. Ma matou koe e arahi ki nga mahi e whai ake nei ka whiwhi i te huarahi utu.',
            'action' => 'Takiuru ki taku papatohu',
        ],
        'buyer' => [
            'title' => 'He kaihoko ahau',
            'message' => 'Tena koe. Ina he mema koe mo Selldone, ka whakakorehia e koe nga raruraru katoa o te mema me te motuhēhēnga i roto i nga toa ipurangi. Ki te whai hua mai i tetahi toa me tetahi papaanga e whakamahi ana i te turanga Selldone, ka taea e koe te takiuru me te paato kotahi kia ngawari to hoko, tere me te haumaru.',
        ],
    ],


    'charge-account' => [
        'category' => 'Pukoro > Pūkete > Utu',
        'title' => "Utu Angitu",
        'message' => "Kua pai te utu o to putea <b>:account_number</b> <b>:amount</b>.",
        'account' => 'Pūkete',
        'charge' => 'Te utu',
        'balance' => 'Taurite',
        'footer' => "Hangaia nga pakihi kia ngawari, kia tutuki, kia uru ki nga tangata katoa o te ao."
    ],

    'verify-email' => [
        'subject' => "🙌 Whakaotia to rehitatanga ki a Selldone! Manatokohia te hono.",
        'category' => "KOE KOE KOE KI TE MAHARA",
        'title' => "Manatokohia to wahitau imeera",
        'message' => "Kia ora :name,<br><br>Te mihi ki a koe mo te whiriwhiri i te Selldone!<br><br>Hei whakaū ko <b>:email</b> to wahitau imeera tika, paatohia te paatene kei raro, whakamahia te hono ranei. E 48 haora koe ki te whakaoti i tenei manatoko.",
        'footer' => "Mena kei te raru koe ki te panui i te paatene Manatokohia, kape me te whakapiri i te URL kei raro nei ki to kaitirotiro paetukutuku: :activation_url",
        'next-step' => "I muri mai, ka tukuna atu e matou etahi rauemi awhina me tetahi aratohu taahiraa-i-te-taahiraa kia ngawari ki a koe te taapiri i to rohe ritenga, te whakarite utu, te taapiri hua, me te tiki i to ota tuatahi.",

    ],
    'verify-email-code' => [
        'subject' => "Waehere manatoko mo :name",
        'category' => "SECURITY",
        'title' => "Waehere whakamana imeera",
        'message' => "Kia ora :name,<br><br>Hei whakaū ko <b>:email</b> to wahitau imeera tika, whakauruhia te waehere e whai ake nei i roto i te <b>10 meneti</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Kua Reri To Toa| :name",
        'category' => "KOE KOE KOE KI TE MAHARA",
        'title' => "Kua oti te tatūnga",
        'account_title' => "Tō pūkete",
        'account_msg' => "Manatokohia ka takiuru ki to putea me enei korero.",
        'shop_msg' => "Nga korero putea mo te punaha whakahaere pakihi a Selldone.",

    ],

    'reset2fa' => [
        'category' => "TE KARERE WHAKAMAHI",
        'title' => "Tonoa kia whakakorehia te takiuru 2-taahiraa",
        'message' => "Kei te whiwhi koe i tenei imeera na te mea i tae mai he tono kia tautuhia ano te motuhēhēnga-rua mo te **:name** pūkete me **:email** email.<br><br>I kitea e matou nga korero e whai ake nei mo to putea:",
        'footer' => "Mena kaore koe i tono mo te tautuhi kupuhipa, kaore he mahi atu.",
        'action' => 'Monokia te takiuru-rua-taahiraa',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Kua reri to toa inaianei!",
        'category' => "I WHANAU HOU TE TOA IPURANGA I TE AO",
        'title' => "Kia ora, :name!",
        'message' => "<b>Te mihi, :name! Kei te ora to pakihi ipurangi hou!</b> Kei te harikoa matou ki te manaaki i a koe ki te hapori Selldoners. Kua eke koe i te huarahi tuatahi ki te angitu, kei konei matou ki te awhina i a koe i nga huarahi katoa.<br>Na kua reri to toa, kia mohio kua rite koe ki te whiwhi utu tika mai i o kaihoko ka tiimata ki te whakatipu i to rangatiratanga. Mena ka hiahia awhina koe, he karere noa atu matou—kei konei tonu ta matou roopu tautoko mo koe.<br><br><b>Imporant Next Steps:</b> Hei timata, whakarite kia rite katoa koe mo te whiwhi utu me nga mahi maeneene. Ma matou koe e arahi i ia wahanga kia pai ai te rere o to toa.",
        'pdf-book' => "Kaua e ngaro te pukapuka a-ringa e apitihia ana: Mahia to Pakihi Kia rite ki te Keemu",

        'account' => [
            'title' => 'Hipanga 1: Waihangahia he putea i roto i te putea Selldone',
            'message' => "Hei tiimata, hanga he kaute ki to putea Selldone. Koinei te waahi ka tangohia o utu, a ko reira hoki koe ka piki ake kia pai ai te rere o to toa. Mena ka kino to pauna, kaua e manukanuka! Ka mahi tonu to toa me te kore e aukati.",
            'action' => 'Takiuru ki te putea',
        ],

        'shop-account' => [
            'title' => 'Hipanga 2: hono te pūkete ki te toa',
            'message' => "Whai muri, hono atu to putea putea ki to toa. Pane ki <b>Store > Kaute > Invoice</b>, ka hono i to putea. Ma tenei ka whakapumau nga utu katoa a nga kaihoko ka tukuna tika ki to putea putea—kaore a Selldone e tango i nga moni mai i o moni whiwhi.",
            'action' => 'Roopu Puka nama',
        ],

        'gateway' => [
            'title' => 'Hipanga 3: Honoa te Waahi Utu Ipurangi',
            'message' => "Na, me whakarite to keeti utu ipurangi. Haere ki <b>Store> Kaute Kaute> Port</b> ka paato i te <b>Add New Port</b>. Tīpakohia to moni, ka kite koe i te rarangi o nga huarahi utu e waatea ana. He tere, he ngawari hoki te hono i te kuaha, engari ki te hiahia awhina koe, tena koa tirohia nga kaiarahi Selldone, waea mai ranei ki a matou.",
            'action' => 'Tāpirihia he tomokanga ki te toa',
        ],

        'domain' => [
            'title' => 'Te taahiraa whakamutunga: te hono i tetahi rohe motuhake',
            'message' => "Inaianei, honoa to rohe ritenga ki to toa. Ma tenei ka taea e nga kaihoko te hoko i o hua, ratonga ranei me te utu tika ki a koe.",
            'action' => 'Te whakauru me te whiwhi kaari koha mutunga kore',
        ],
    ],


    'basket-list' => [
        'item' => "tūemi",
        'count' => "Tatau",
        'price' => "utu",
        'discount-code' => "Waehere hekenga",
        'customer-club' => 'Karapu Kiritaki',
        'shipping' => "Te tuku",
        'total' => "Tapeke",
        'offer' => "tuku",
        'coupon' => "tīkitipati",
        'lottery' => "Tohu",
        'tax' => "Taake",
        'tax_included' => "Kei roto i te utu",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Tikanga',
        'amount' => 'Te nui',
        'giftcard' => 'Gift card',
        'payment' => 'Utu',
    ],


    'shop-subscription-email' => [
        'category' => "Whakahoutanga ohaurunga",
        'title' => "Raihana Toa: :shop_title",
        'title-reserved' => "Raihana rahui: :shop_title",
        'title-active' => "Raihana kaha: :shop_title",
        'title-finished' => "Kua oti te raihana: :shop_title",
        'title-cancel' => "Whakakore raihana: :shop_title",
        'message' => "Kua whakahoutia to mahere raihana toa,",
        'RESERVED' => "⚡ Kua **rahuihia to mahere ohaurunga**.",
        'ACTIVE' => "🟢 Kua **whakahohehia to mahere ohaurunga**.",
        'FINISHED' => "🚧 Kua **kua oti to mahere ohaurunga**.",
        'CANCEL' => "⛔ Kua **kua whakakorehia to mahere ohaurunga**.",
    ],

    'support' => [
        'subject' => "Pokapū Tautoko|:name whakahoki",
        'category' => "Pokapū tautoko",
        'title' => "I whiwhi whakautu koe",
        'action' => "Tuwhera te kaiwhakahaere toa",
    ],

    'shop-customer-join' => [
        'subject' => "Hono:shop_title",
        'category' => "Te whakanui i nga kaihoko hou",
        'title' => "Kei te koa matou mo to mema",
        'action' => "Tirohia inaianei",
    ],

    'shop-vendor-join' => [
        'subject' => "Kaihoko Whakauru | :shop_title",
        'category' => "Te whakanui kaihoko hou",
        'title' => "Kei te koa matou mo to mema",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kaari koha :shop_title",
        'category' => "Tāpiri kāri hōu",
        'title' => "Tena koe, kua whiwhi koe i tetahi kaari koha",
        'action' => "Hokona inaianei",
        'message' => "Kua whiwhi koe i tetahi kaari koha utu :balance :currency. Ka taea e koe te whakamahi i tenei kaari koha i roto i ta maatau toa.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Pokapū Tautoko| :shop",
        'category' => "tautoko",
        'title' => "I whiwhi whakautu koe",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Whakapumautanga ota|Whakaritea :order_id",
        'title' => "ota",
        'message' => "I tukuna e koe he ota ki to maatau toa. I tae mai to ota ka tukuna atu he imeera ki a koe ina whakamanahia te utu."
    ,

        'payments' => 'Nga utu',
    ],

    'order-payment' => [
        'subject' => "🛍️ Whakamana Utu|Whakaritea :order_id",
        'title' => "Utu utu",
        'message' => "Kua oti to utu,<br> Kei a matou to ota. Ka tukuna atu e matou he imeera ki a koe ina tukuna mai to ota.",
    

        'payments' => 'Nga utu',
    ],

    'order-update' => [
        'subject' => "🛍️ Whakahōu Tūnga Tono|Whakaritea :order_id",
        'title' => "Whakahōu Tūnga Tono",
        'message' => "Kua whakahoutia to ota. Ka taea e koe te tirotiro i te mana hou o tenei ota i roto i to putea.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Ko to ota kei te rarangi mo te tukatuka. Ka whakamohio atu matou ki a koe ina rite ana.",
                'OrderConfirm' => "Kua whakamanahia to ota kua timata te whakarite.",
                'PreparingOrder' => "Kei te whakaritea to ota, ka tukuna wawetia.",
                'SentOrder' => "Kua tukuna to ota. Ka whiwhi koe i te wa poto.",
                'ToCustomer' => "Kua tukuna to ota. Ko te tumanako ka pai ki a koe!",

                'PreparingOrder-PICKUP' => "Kei te whakaritea to ota. Ka whiwhi panui koe ina reri ana mo te tiki.",
                'SentOrder-PICKUP' => "Kua reri to ota mo te tiki. Haere mai ki te toa ki te kohi.",
                'ToCustomer-PICKUP' => "Kua tangohia to ota. Ko te tumanako ka pai ki a koe!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Ko to ota kei te rarangi mo te tukatuka. Ka whakamohio atu matou ki a koe ina rite.",
                'OrderConfirm' => "Kua whakamanahia to ota, kei te haere tonu te whakarite.",
                'PreparingOrder' => "Kei te whakareri to ota, ka tukuna atu ki a koe.",
                'ToCustomer' => "Kua tukuna to ota mariko ki to putea. Mauruuru koe!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Ko to tono ratonga kei te rarangi. Ka whakamohio atu matou ki a koe ina timata matou.",
                'OrderConfirm' => "Kua whakamanahia to ratonga, kei te whakarite matou ki te timata.",
                'PreparingOrder' => "Kei te whakareri matou i to ratonga, ka whakamohio atu ki a koe ina oti ana.",
                'ToCustomer' => "Kua oti to mahi. Mauruuru koe mo te whiriwhiri i a matou!"
            ],
            'FILE' => [
                'PreparingOrder' => "Kei te whakarerihia to konae, ka waatea mai.",
                'ToCustomer' => "Kua reri to kōnae, kua tukuna. Ka taea e koe te tiki ake inaianei."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Ko to ota ohaurunga kei te rarangi. Ka whakamohio atu matou ki a koe ina timata te tukatuka.",
                'OrderConfirm' => "Kua whakamanahia to ohaurunga, kei te whakarite.",
                'PreparingOrder' => "Kei te whakareri matou i to ohaurunga a ka timata wawe.",
                'SentOrder' => "Kua whakahohehia to ohaurunga. Ka whiwhi koe i nga whakahoutanga tonu.",
                'ToCustomer' => "Kua whakahohea to ratonga ohaurunga."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Kia ora :name|Tohu Hou: :title',
        'category' => "MIHI, HE PUKAPUKA HOU",
        'message' => "Kia ora :name,<br><br>Kua whiwhi koe i tetahi putea hou hei koha na matou! Ka taea e koe te whiwhi moni nui ake ma te whakauru i te Selldone ki o hoa me nga tangata katoa e mohio ana koe. He utu tenei putea **:price :currency**.<br><br>Kua mahia e koe te mahi tuatahi, kei konei matou ki te awhina i a koe ki te iriti i nga ahuatanga hou me to putea! Tena koa takiuru me **:email** ka kitea to putea i roto i te Toa **Dashboard** > **Tautuhinga** > **Raihana**.<br><br>Te mihi!",
        'action' => "Taku papatohu",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Kia ora, e :name | Kua whiwhi koe i tetahi koha',
        'category' => "Panuitanga mo te whiwhi taonga",
        'title' => "Nga taonga mo koe",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Nga taonga",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Kua whiwhi Ota Hou| :order_id",
        'title' => "New Order",
        'message' => "Kua whiwhi koe i tetahi ota hou. Tena koa haere ki te wharangi tukatuka ota i to toa.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Ko o korero kua whakakiia',
        'output-form-title' => 'Nga korero mo nga taonga kua hokona',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Ripoata ia wiki :time',
        'title' => 'Te purongo mahi toa ia wiki',
        'message' => "Koinei te purongo a to toa ia wiki mai i <b>:start</b> ki <b>:end</b>. Kei roto i tenei ripoata nga tohutohu mo te whakapai ake i to pakihi, ka taea hoki e koe te tirotiro i te mana o to toa ipurangi me nga ota tata. Ko te tumanako ka pai to ra me te wiki kei mua."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Ko to ripoata penapena :amount i nga marama e toru kua hipa| :shop_title',
        'title' => 'He purongo o te tau mo to mahi pakihi, utu me to penapena putea',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Nga kaute hono',
        'sub-title' => 'He aha te mana hou o nga putea putea e hono ana ki taku toa?',
        'view-wallet' => 'Tirohia te putea',
        'tip-title' => 'Nga tohutohu nui',
        'tip' => "Whakaritehia he putea Selldone kore utu ka hono atu ki to toa. Ahakoa he kino to pauna, ka taea tonu e o kaihoko te hoko me te utu kaore he take. Kaua e manukanuka, ka haere tonu nga mahi me nga raraunga o to toa mo te 1 marama, karekau he aukati.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Hono ki te kaute'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Kua whakauruhia nga taupānga',
        'sub-title' => 'Te rarangi o nga taupānga kua whakauruhia e koe ki to toa i tenei wiki.',
        'tip' => "Kei te pirangi koe ki te rapu atu taupānga mo to toa?",
        'view-app-store' => 'Tirohia te Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'To Poti Toa',
        'sub-title' => 'Nga potae hoko kaha i roto i taku toa.',
        'tip-title' => 'Hoko Bot',
        'tip' => "Kua whakaratohia e Selldone nga karetao hoko aunoa. Ko nga mea katoa ka mahia e koe ko te haere ki te Tāpiri-ake> Paewhiri Bots me te whakahohe i o potae toa. Kia mahara ko te ratonga e tika ana me waatea i to whenua.",
        'view-bots' => 'Whakahaere bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Whakawhitiwhiti me nga Kaihokohoko',
        'sub-title' => 'E hia aku hoapaki ki aku kaihoko i tenei wiki?',
        'faqs' => 'Pātai Auau',
        'tickets' => 'Tikiti Kiritaki',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Tūnga Kaiwhakamahi',
        'sub-title' => 'Mahi mai i :start ki :end',
        'users' => [
            'title' => 'Kaihoko',
            'subtitle' => 'Kaiwhakamahi Waitohu',
        ],
        'views' => [
            'title' => 'Nga toronga',
            'subtitle' => 'E hia nga wa kua toro koe ki te toa',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Nga Kaiwhakamahi kua hoki mai',

        'shop_views' => 'Nga Tirohanga Toa',
        'baskets' => [
            'title' => 'Kaata Hoko',
            'subtitle' => 'Whakaatuhia te maha o nga kaata hokohoko hou',
        ],
        'products' => [
            'title' => 'Hua Tirohanga',
            'subtitle' => 'Te mana o nga hua i roto i te toa ma te momo',
            'value_name' => 'Hua'
        ],
        'products_count' => 'Momo hua',
        'views_count' => 'Tatau tirohanga',
        'sell_count' => 'Tatau hoko',
        'send_count' => 'Tatau tuku',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Whakataka Tukunga',
        'sub-title' => 'Paewhiri mo nga kaihoko nui o Drop Shipping Selldone.',
        'total_fulfillments' => 'Tapeke ota kua riro',
        'ds_count' => 'Kua whiwhi ota',
        'statistics_title' => 'Ripoata i whiwhi ota',
        'ds_cancels' => 'Whakakorehia e te kaihoko atanga',
        'ds_rejects' => 'Whakakorea e koe',
        'tip' => "He kaihoko nui koe me te whare putunga, wheketere, kaiwhakarato hua ranei? Ka taea e koe te whakawhānui ake i to toronga ma te tuku i o hua ki etahi atu kaihoko na roto i te ratonga Tuku Tukunga a Selldone. Īmēra mai ki a support@selldone.com ki te ako atu.",
        'view-drop-shipping-panel' => 'Takiuru ki te panui rarawe',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Reiti Whakawhiti',
        'sub-title' => 'Rarangi o nga reiti whakawhiti moni hou i to toa.',
        'from' => 'Pūtake Moni',
        'to' => 'Moni ūnga',
        'rate' => 'Te tere o te hurihanga',
        'view-exchange-panel' => 'Whakahaere Reiti Whakawhiti',
    

        'vew-exchange-panel' => 'röpü whakahaere utu utu',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Nga kirimana tohunga',
        'sub-title' => 'He aha nga tohunga e mahi ana i taku toa?',
        'cost' => 'Te moni kirimana',
        'duration' => 'Roanga',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Te Ra Whakakore',
        'end_at' => 'Te ra tuku',
        'tip' => 'Ka taea e koe te utu i nga tohunga tino pai i Selldone hei whakawhanake i to pakihi.',
        'view-experts' => 'Paatohia kia timata.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Panuitia nga kuaha utu kaha i runga i te toa :shop.',
        'tip-title' => 'Nga tohutohu nui',
        'tip' => "Haere ki te wharangi whakahaere tomokanga i roto i to toa me te taapiri kia kotahi tauranga i roto i etahi meneti. He pai ki o kaihoko ki te utu tere me te haumaru ma nga tomokanga ipurangi.",
        'view-shop-gateways' => 'Takiuru ki taku whakahaere tomokanga toa.',
        'view-gateways' => 'Tirohia etahi atu kuaha',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Nga ota',
        'sub-title' => 'Rarangi ota i riro mai i ahau i tenei wiki.',
        'total_baskets' => 'Tapeke ota',
        'total_posBaskets' => 'Tapeke ota Moni',
        'pos-title' => 'Pouaka Toa POS',
        'chart-label' => 'Kua oti nga ota (kaore enei ota e utu!)',
        'tip-title' => 'Me whakapau kaha koe ...',
        'tip' => "Kaore he angitu ngawari.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Pokapū tukatuka',
        'sub-title' => 'E hia nga ota i mahia e matou i roto i te toa i tenei wiki?',
        'tip-title' => 'Karekau he hoko!',
        'tip' => "Kia aroha mai karekau he hoko i tenei wiki. Me nui ake koe ki to toa. Ka taea e koe te taapiri atu i etahi atu hua, whiriwhiri whakaahua pai ake, tuhi whakaahuatanga pai ake ranei mo o hua. Whakaarohia he mahi wa-katoa mo to pakihi. Ki te mahi tika koe me te kore e pouri, ka angitu koe.",
        'view-process-center' => 'Tirohia te pokapū tukanga',
        'return' => [
            'title' => 'Whakahoki Whakahoki',
            'subtitle' => 'Pūrongo ota whakahoki.',
            'tip-title' => 'I mohio koe e...',
            'tip' => "Ka taea e koe te hanga i te maha o nga rehita moni e hiahia ana koe me te Selldone POS! Ahakoa ko to papa, waea pūkoro, pona ranei, ka taea e koe te huri i tetahi taputapu ki te waahi hoko o to toa. He maamaa, he tere ki te whakarite, kua tino rite mo to tūmau. Tīmatahia te whakamahi i tenei ra!",
            'view-pos' => 'Takiuru ki taku Kaitiaki Toa Ipurangi'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Wātū',
        'sub-title' => 'E hia nga wa i toro atu ahau ki taku toa?',
        'countries-title' => 'Ko ēhea whenua kua tino torohia?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Kei te hiahia koe ki te mahi moni me te kore e whakapau moni kotahi?',
        'message' => "E te:name, ka taea e koe te haere ki te Papatohu > Demonetization me te hanga hononga tuku. Tukuna te hono ki o hoa, Ka whiwhi koe i nga kaari koha a Selldone me te paheketanga o nga utu a to hoa. Kia mahara ka tukuna te kaari koha ki a koe me to hoa.",
        'action' => 'Tirohia taku hono whakataki',
        'mail-clip' => "<b style='color: #C2185B'>He mea nui:</b> Ki te whakamahi koe i nga ratonga imeera penei i a Gmail e whakawhāiti ana i te roa o te imeera, kimihia te whiringa e whai ake nei i te mutunga o te imeera hei whakaatu i te katoa o te ripoata ka paato ki runga:",

        'no-coin-reward' => "<b style='color: #C2185B'>Aroha mai:</b> Kaore to mahi i tutuki i te whakaritenga kia whiwhi utu SEL Moni kore utu. Kia kaha ake te hoko atu i to toa mo te wa e whai ake nei.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Te Mihi:</b> He mahi pai! I runga i o mahi tino pai, kua whakawhiwhia e matou nga Moni :amount SEL ki to putea hei utu.",

        'need-buy-license' => "<b>Whakaekea To Pakihi:</b> Te ahua nei kaore ano koe kia rehitatia tetahi mahere ohaurunga mo to paetukutuku! Whakapai ake inaianei ki te whakatuwhera i etahi atu waahanga mo te :amount noa ia marama mena ka utua ia tau.",
        'not-afford-message' => "Mena kei te raru koe mo te utu, kaore ranei e taea e koe te utu inaianei, kaua koe e mangere ki te toro atu ki a maatau support@selldone.com.",
        'add-domain' => "<b>He aha te take kaore he rohe ritenga mo to pakihi?</b><br> Tāpirihia he rohe ki to paetukutuku inaianei; he kore utu!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Ko Selldone he<del> hua</del> <span style = 'color: forestgreen'>hapori</span> .<br> Kia tino Kaihokohoko ngaio!",
        'message' => "Whaia nga wharangi whai mana o te Selldone i runga i Twitter, LinkedIn me nga whatunga hapori. Tukuna mai he korero, he tono, he whakahe ranei, ka uru atu ranei ki nga korerorero mo te Selldone. He wahanga ano matou no te hapori o Selldone ka mahia e <b>koe</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nga Ota Avokado Hou kua riro mai|:shop_title :time',
        'title' => "Te ripoata mahi mo nga haora 24 kua hipa",
        'message' => "Kei te tatari o kaihoko kia arotakehia o ota me te utu. Whakautu wawe ki nga tono a o kaihoko kia nui ake nga hoko.",
        'card_title' => "Nga ota i te rarangi",
        'card_subtitle' => "Mai i te :date",

        'card_payed' => "Nga ota utu"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Whakautu ki to panui i roto i te :community_title',
        'title' => ":name me :count kua uru etahi atu ki te korerorero i runga i o panui!",
        'message' => "Kia ora :name, kei te aro mai o panui! Kua whiwhi koe i nga korero i roto i to maatau hapori. Takiuru ki to putea kia uru atu ki te korerorero ka kite i nga korero a te katoa.",
        'title-simple' => ":name kua korero mo to panui!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Whakautu ki to kaupapa :topic_title',
        'title' => ":name, me :count etahi atu i whakautu mo to kaupapa.",
        'message' => "Kia ora :name, kei te aro mai to kaupapa! Kua whiwhi whakautu koe i to maatau hapori. Takiuru ki to putea kia uru atu ki te korerorero ka kite i nga korero a te katoa.",
        'title-simple' => ":name i whakahoki i runga i to kaupapa.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Takiuru Hou :name',
        'category' => 'Nga whakamohiotanga haumarutanga',
        'title' => "Takiuru ki te Pūkete",
        'message' => "E :name, kua takiuru koe ki to putea Selldone.",   // Login in selldone (seller)
        'message-shop' => "E :name, kua takiuru koe ki :shop_title .",  // Login in shop (buyer)

        'footer' => "Mena kaore koe i te takiuru, hurihia to kupuhipa.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Tangohanga",
        'deposit' => "Putunga",

        'withdraw_subject' => "tango mai i te kaute :account",
        'deposit_subject' => "Putunga ki te kaute :account",

        'message' => "Kua oti te whakawhiti moni me nga whakaritenga e whai ake nei.",

        'type' => "Momo tauwhitinga",

        'from' => "Pūkete puna",
        'to' => "Destination account",

        'desc' => "Whakaahuatanga tauwhitinga",
        'action' => "Tirohia te tauwhitinga",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ He mea nui! Te takahi ture| :shop",
        'category' => "Whakamōhiotanga arohaehae",
        'title' => "Kua whiua to toa",
        'action' => "Tuwhera te papatohu toa",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => "Kua tono a :inviter kia uru atu koe ki te Selldone",
        'title' => "Kua tukuna e :name koe :amount hei awhina i te whakarewatanga o to toa ipurangi hou me te moni moni!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Whakaaetia te powhiri",
        'owner' => "Rangatira o",
        'join-date' => "Mai i a Selldone",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Hononga whakaora| :shop",
        'category' => "Haumarutanga toa",
        'title' => "Hononga whakaora toa o <b>:shop_name</b> .",
        'message' => "I tukuna tenei imeera ki a koe na te mea i tono koe kia whakahokia mai to toa. Ma te panui i te hono i raro nei ka ora to toa me nga raraunga katoa o taua toa.",
        'action' => "Whakaaetia te Whakaora Toa",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'E hia nga moni i penapenahia e Selldone mo to pakihi?',
        'sub-title' => 'Mai i te ra :start ki :end',
        'infrastructure' => [
            'title' => 'Hangahanga',
            'subtitle' => 'Tūmau, CDN, Rokiroki, me etahi atu ratonga kapua',
        ],
        'experts' => [
            'title' => 'Tohunga & Kaimahi',
            'subtitle' => 'Kaihanga, tiaki, me te tautoko',
        ],
        'total_save' => 'Katoa moni penapena'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'To mahi',
        'sub-title' => 'Te tirohanga pakihi mai i :start ki :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Nga Kaiwhakamahi kua hoki mai',

        'shop_views' => 'Nga Tirohanga Toa',
        'baskets' => [
            'title' => 'Kaata Hoko',
            'subtitle' => 'Whakaatuhia te maha o nga kaata hokohoko hou',

        ],
        'products' => [
            'title' => 'Hua Tirohanga',
            'subtitle' => 'Te mana o nga hua i roto i te toa ma te momo',
            'value_name' => 'Hua'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Katoa nga tirohanga wharangi paetukutuku',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Kua whiwhi koe i tetahi ota hou. Tena koa haere ki te wharangi tukatuka ota i to roopu kaihoko.",
        'subject' => "🛍️ Kua whiwhi Ota Hou| :order_id",
        'your_revenue' => "To Utu",
    ],
    'vendor-invite' => [
        'title' => 'Powhiri Kaihoko',
        'message' => "Kua whiwhi koe i te powhiri kia noho hei kaihoko mo :shop_name. Ka taea e koe te whakaae, te whakakore ranei ma te panui i nga paatene e whai ake nei.",
        'subject' => ":shop_name | I whiwhi koe i te tono kia noho hei kaihoko",
        'accept' => "Whakaae & Hoko Kaihoko",
        'reject' => "Whakakahore",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Powhiri kia uru mai ki ta maatau roopu',
        'message' => "Kua tonohia koe kia uru atu ki te :vendor_name i :shop_name. Ka taea e koe te whakaae, te whakakore ranei i tenei powhiri ma te whakamahi i nga paatene kei raro nei.",
        'subject' => "Powhiri ki te Whakauru :vendor_name|Me noho hei Mema Kapa",
        'accept' => "Whakaae & Whakauru ki te Kapa",
        'reject' => "Whakakahore",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "To Waehere Takiuru mo :shop",
        'header-message' => "Ka tukuna atu e matou tenei imeera na te mea i tono koe i tetahi waehere takiuru mo te toa. Kimihia to Kupuhipa Kotahi-Wa (OTP) i raro nei:",
        'footer-message' => "Ka whai mana tenei waehere mo te 10 meneti. Mena kaore koe i tono i tenei waehere takiuru, kaua e wareware ki tenei imeera."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Manatokohia to imeera| :shop",
        'title' => 'Īmēra Manatoko',
        'header-message' => "Kia ora:name,<br> Tena koa whakaū ko **:email** to wahitau imeera ma te panui i te paatene ka whakamahi ranei i te hono i raro nei i roto i nga haora 48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Whakahoutanga Hua| :shop",
        'title' => "Whakahou mo te Turanga Hua - Nga haora 24 kua hipa",
        'message' => "Ko taku tumanako ka kitea pai koe e tenei karere. He korero poto tenei hei whakamohio ki a koe mo te ahuatanga o o hua i runga i to maatau papaahi i nga haora 24 kua hipa.\nI roto i tenei waa, kua rereke te ahua o etahi hua. Ko enei huringa na nga hokonga, nga whakahoutanga o nga kararehe, me etahi atu huihuinga e pa ana.\nMo etahi atu korero mo ia hua, tena koa takiuru ki to putea me te tirotiro i te waahanga 'Tunga Hua'.",
        'action' => "Whakatuwherahia te Paewhiri Kaihoko",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Kua riro mai nga ota maha| :shop | :date",
        'title' => "Whakamōhiotanga ota Nui",
        'message' => "Kua whiwhi koe i te puranga o nga ota nuinga. Tena koa tirohia te wharangi tukatuka ota i to panui mo etahi atu korero. Ka taea hoki e koe te tango i te rarangi ota ma te hononga haumaru kua whakaratohia, e tika ana mo nga ra 7.<br><br>\n        <b>IMPORTANT:</b> Kei te mana tenei hononga mo nga ra 7.<br>\n        He hihiri tenei hononga, no reira i nga wa katoa ka paatohia e koe, ka whiwhi koe i nga ota hou mo tenei ra motuhake. <b>Ko te tikanga mena ka huri te mana utu ota ki te whakakorehia, kare koe e kite i taua ota i roto i te CSV kua tangohia, mena ka utua te ota, ka puta ki te rarangi.</b><br><br>\n        <ul>\n            <li>Kei roto i te CSV nga ota utu me te ra rahui i roto i te :date.</li>\n            <li>I rahuitia ko te ra ka pao te kaiwhakamahi ki te tirotiro i te wharangi ota.</li>\n        </ul>\n        <b>Ki te aukati i nga ota taarua, tirohia tonu te Ota ID i mua i te tuku.</b>",
        'action' => "Tikiake Rarangi Whakatau",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Ko etahi o nga mea kei roto i to ota kaore i whakaaehia kaore e taea te tuku. Ko te moni mo enei mea ka whakahokia ki to kaari kare ake nei."
    ]

];
