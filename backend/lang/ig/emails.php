<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ozi a na-anabata onye zụrụ ahịa ọhụrụ n\'ụlọ ahịa ahụ.',
        ShopMailTemplateCodes::OrderCheckout => 'A na-eziga ọkwa a mgbe onye zụrụ ahịa kwadoro iwu.',
        ShopMailTemplateCodes::OrderPayment => 'Ọkwa a na-akwado ịkwụ ụgwọ nke ọma nke onye ahịa kwụrụ.',
        ShopMailTemplateCodes::OrderUpdate => 'A na-ezigara ozi a iji kwalite onye na-azụ ahịa na ọkwa nke iwu ha.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'A na-ezigara onye na-ere ahịa ozi a ka ọ gwa ha maka iwu akwadoro.',
        ShopMailTemplateCodes::PosCheckout => 'A na-eziga ọkwa a iji kwado ebe ịre ahịa maka onye zụrụ ya.',
        ShopMailTemplateCodes::PosPayment => 'Ọkwa a na-akwado ebe ịkwụ ụgwọ ire nke onye zụrụ ya mere.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ozi a na-eme ka onye na-ere ahịa mara ihe azụrụ n\'ebe erere ha.',
        ShopMailTemplateCodes::ShopContact => 'A na-eziga ọkwa a mgbe etinyere fọm kọntaktị.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ozi a na-agwa onye ọrụ na ha enwetala kaadị onyinye.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ozi a na-anabata onye na-ere ahịa ọhụrụ na ụlọ ahịa ahụ.',
        ShopMailTemplateCodes::ShopVendorInvite => "E zigara ozi a ịkpọ onye na-ere ahịa òkù isonye n'ahịa gị.",
        ShopMailTemplateCodes::ShopVendorOrder => "A na-ezigara onye na-ere ahịa ozi a mgbe enwetara iwu na ọkwa akwụ ụgwọ ma ọ bụ ego ego na nnyefe (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "A na-ezigara ya kwa ụbọchị iji kwalite ndị na-ere ahịa na ọkwa ngwaahịa ha.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "E zigara ozi a ịkpọ onye na-ere ahịa ka ọ sonyere n'ahịa gị.",

        ShopMailTemplateCodes::UserLogin => "Mee ka onye ọrụ mara nkọwa nbanye, gụnyere adreesị IP, ụbọchị na ngwaọrụ, maka ebumnuche nchekwa.",
        ShopMailTemplateCodes::LoginCode => "Zipu koodu paswọọdụ otu oge maka ndị ọrụ ịbanye na ụlọ ahịa ahụ.",

        ShopMailTemplateCodes::EmailVerifyLink => "Zipụ njikọ iji nyochaa adreesị ozi-e onye ọrụ. A na-eziga email a mgbe onye ọrụ debanyere aha site na SMS wee banye email ha. Anaghị ezipụ ya mgbe onye ọrụ debanyere aha ozugbo na nbanye mmadụ ma ọ bụ email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Zipu ndepụta nke iwu natara na akwụ ụgwọ n'ụka maka otu ụbọchị."


    ,

    ],


    'global' => [
        'greetings' => 'Ndewo, :name!',
        'end-statement' => 'Otu nkwado',

        'receiver_name' => 'Ndewo :user_name',
        'footer-help' => "Achọrọ enyemaka? Jụọ na [support@selldone.com](mailto:support@seldone.com) ma ọ bụ gaa na [ebe enyemaka] (https://selldone.com/community).",
        'selldone-team' => 'Otu Selldone',
        'footer-shop' => "Ọ bụrụ na ịchọrọ enyemaka na ihe ọ bụla, biko egbula oge izitere anyị email: :shop_mail",
        'accept' => "Nabata",
        'reject' => "Jụ",
        'verify' => "nyochaa",
        'title' => "Aha",
        'value' => "Uru",
        'description' => "Nkọwa",
        'shop' => "Ụlọ ahịa",
        'shop-info' => "Ozi ụlọ ahịa",
        'user' => "onye ọrụ",
        'user-info' => "Ozi Akaụntụ",
        'license' => "Ikikere",
        'status' => "Ọnọdụ",
        'start' => "Malite",
        'end' => "Ọgwụgwụ",
        'renewal' => "Mmeghari ohuru",
        'view' => "Lelee",

        'balance' => "Nhazi",
        'card_number' => "Nọmba kaadị",
        'cvv' => "CV",
        'expire_date' => "Ụbọchị kubie ume",

        'Dashboard' => "Dashboard",
        'order' => "ịtụ",
        'view_order' => "Lelee usoro",
        'pay_now' => "Pay now",

        'official_selldone' => "OZI ERE",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Ego",
        'free-balance' => "Ntụle efu",
        'locked-balance' => "Ntuzi ekpochi",
        'bot' => "Bot",
        'requests' => "Arịrịọ",
        'baskets' => 'Ụgbọ ala',
        'physical' => "Anụ ahụ",
        'virtual' => "Mebere",
        'file' => "Faịlụ",
        'service' => "Ọrụ",
        'fulfillment' => "Mmezu",
        'open' => "Mepee",
        'reserved' => "Echekwara",
        'canceled' => "Kagbuo",
        'payed' => "Akwụ ụgwọ",
        'cod' => "COD",
        'orders-count' => 'Iwu',
        'payments-count' => 'Ịkwụ ụgwọ',
        'confirms-count' => 'Na-akwado',
        'sends-count' => 'Na-eziga',
        'delivers-count' => 'Na-ebuga',
        'count' => 'Gụọ',
        'transactions-count' => 'Ọnụ ahịa azụmahịa',
        'success-transactions' => 'Azụmahịa ịga nke ọma',
        'total-amount' => 'Mkpokọta ọnụego',
        'amount' => 'Ọnụ ego',
        'wage' => 'Ụgwọ ọrụ',
        'debug' => 'Mebie',
        'pos' => 'POS',
        'live' => 'Dị ndụ',
        'CheckQueue' => 'Lelee kwụ n\'ahịrị',
        'OrderConfirm' => 'Nye iwu nkwenye',
        'PreparingOrder' => 'Na-akwado usoro',
        'SentOrder' => 'Ezitere iwu',
        'ToCustomer' => 'Enyere ndị ahịa',
        'Pending' => 'Na-echere',
        'Accepted' => 'anabatara',
        'Rejected' => 'Ajụjụ',
        'pc' => 'PC',
        'tablet' => 'Mbadamba ụrọ',
        'phone' => 'Ekwentị',
        'total' => 'Mkpokọta',
        'view-detail' => 'Lelee nkọwa',
        'empty' => 'Ihe efu',
        'dropshipping' => 'Mbupu',
        'reply' => 'Zaghachi',
        'reactions' => 'Mmeghachi omume',
        'Comments' => 'Okwu',
        'last-comment' => 'Okwu ikpeazụ',
        'response-to' => 'Azịza ya',
        'posts' => 'Ederede',
        'post' => 'Biputere',

        'name' => 'Aha',
        'email' => 'Email',
        'type' => 'ụdị',
        'device' => 'Ngwaọrụ',
        'platform' => 'Platform',
        'browser' => 'Ihe nchọgharị',
        'time' => 'Oge',
        'Wallet' => 'obere akpa',
        'date' => 'Ụbọchị',

        'account' => 'Akaụntụ',
        'transaction' => 'Azụmahịa',
        'fee' => 'Ụgwọ',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Otu',
        'password' => 'Okwuntughe',
        'verify-login' => "Nyochaa & Banye",
        'url' => 'URL',
        'avocado' => 'Ube oyibo',
        'hyper' => 'Hyper',
        'buy-now' => "Zụta ugbu a",
        'add-domain' => "Add Domain",
        'views' => 'Echiche',


        'country' => 'Obodo',
        'address' => 'adreesị',
        'postal' => 'Koodu Nzipu ozi',
        'building_no' => 'Ụlọ #',
        'building_unit' => 'Nkeji #',
        'message' => 'Ozi',


        'customer' => 'Onye ahịa',
        'cart-items' => 'Ihe ụgbọ ala',
        'payment' => 'Ịkwụ ụgwọ',
        'receiver' => 'onye nnata',
        'virtual-items' => 'Ihe mebere',
        'no-payment' => 'Enweghị ụgwọ!',

        'enable' => 'Kwado',
        'access' => 'Nweta',
        'bank' => 'Ozi ụlọ akụ',

        'vendor' => 'Onye na-ere ahịa',

        'view_content' => "Lelee ọdịnaya zuru oke",
        'files' => 'Faịlụ',
        'download' => 'Budata',
        'file_name' => 'Aha faịlụ',
        'file_size' => 'Nha',

        'subscription' => 'Ndebanye aha',
        'products' => 'Ngwaahịa',
        'vendor_products' => 'Ngwaahịa ndị na-ere ahịa',

        'pickup' => 'Bulite',

        'minutes' => 'Nkeji',
        'hours' => 'Oge awa',

        'refund' => 'Nkwụghachi',
        'recipient_address' => 'Adreesị nnata',
        'signature' => 'mbinye aka',
        'blockchain' => 'Blockchain',
        'details' => 'Nkọwa',


    

        'Shop' => 'Ụlọ ahịa',
        'dashboard' => 'dashboard',
        'comments' => 'kwuru',
        'wallet' => 'obere akpa',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Azụmahịa OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Akụkọ arụmọrụ Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone akụkọ oge'
        ],
        'Onboarding' => [
            'id' => 'ndewo',
            'name' => 'Ndị ahịa Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Nkwado :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Nyochaa, Selldone'
        ],
        'Welcome' => [
            'id' => 'ndewo',
            'name' => 'Ogbe, Selldone'
        ],
        'NewShop' => [
            'id' => 'ndị ahịa',
            'name' => 'Ndị ahịa Selldone'
        ],
        'Approve' => [
            'id' => 'kwadoro',
            'name' => 'Ndị ahịa Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Njikwa iwu :name'
        ],

        'Recovery' => [
            'id' => 'mgbake',
            'name' => 'Otu mgbake Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Na-echere ⌛',
        'PAYED' => 'Akwụ ụgwọ ✅',
        'CANCELED' => 'Kagbuo ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Onye nchịkwa',
            'OFFICER' => 'Onye isi na onye nlekọta',
            'AUDITING' => 'Onye njikwa nyocha',
            'EMPLOYEE' => 'Onye ọrụ',
            'PRODUCT' => 'Onye njikwa ngwaahịa',
            'CONTENT' => 'Njikwa ọdịnaya',
            'MARKETING' => 'Onye njikwa ahịa',
            'VIEWER' => 'Onye na-ekiri',

        ],
        'subject' => ":inviter kpọrọ gị òkù dị ka :level| :shop",
        'category' => "Ndị ọrụ òkù",
        'title' => "Akpọrọ gị òkù ka ị bịa <b>:shop_name</b> ka <b>:level</b> .",
        'message' => "Ị nwetala akwụkwọ ịkpọ òkù ka gị na ndị otu <b>:shop_title</b> imekọ ihe ọnụ na azụmahịa. Ị nwere nhọrọ ịnakwere ma ọ bụ jụ onyinye a. Ọ bụrụ na ịhọrọ ịnakwere, biko banye na ọrụ Selldone iji kwado mkpebi gị. Na nkwenye, ị ga-enweta ohere na ngalaba njikwa ụlọ ahịa.",

    ],

    'welcome-email' => [
        'subject' => "👋 Nabata :name, Ka anyị were Selldone bido!",
        'category' => 'CONGRATULATION',
        'title' => "Nnọọ na Selldone",
        'message' => "Daalụ maka ịhọrọ Selldone! Ugbu a, ị bụ akụkụ nke obodo mara mma nke na-ejikọ ndị na-ere ahịa zuru ụwa ọnụ na ndị ahịa, azụmahịa mpaghara na ụlọ ọrụ, yana ndị mmadụ n'otu n'otu na ụlọ ọrụ. Ngwa Master na Pro niile dị gị ** n'efu na ** enweghị oke ***. Anyị bịara ebe a ịkwado gị ma mepee ụzọ maka ịga nke ọma gị.",

        'index' => "Nzọụkwụ :step.",

        'step-domain' => [
            'title' => 'Tinye ngalaba omenala gị',
            'message' => "Iji malite, tinye ngalaba omenala gị n'efu na ụlọ ahịa ụlọ ahịa n'okpuru Ntọala> Ntọala ngalaba.",
            'action' => 'Jikwaa ngalaba m',
        ],
        'step-landing' => [
            'title' => 'Hazie ibe ụlọ gị',
            'message' => "Hazie ibe ụlọ gị site na ịga na Dashboard> Ibe. Họrọ ibe ọdịda ma ọ bụ mepụta nke ọhụrụ. Ọ dị mfe na nghọta, ma ị nwere ike ịmalite ịrụ ọrụ na ya ozugbo.",
            'action' => 'Hazie ibe ọdịda m',
        ],
        'step-payment' => [
            'title' => 'Hazie ụzọ ịkwụ ụgwọ',
            'message' => "Malite ịnakwere ịkwụ ụgwọ ozugbo na akaụntụ ụlọ akụ gị. Iji jikọọ ndị na-enye gị ịkwụ ụgwọ dị ka Stripe, PayPal, na ndị ọzọ, gaa na Dashboard> Accounting> Gateway.",
            'action' => 'Tinye ụzọ ịkwụ ụgwọ',
        ],
        'step-products' => [
            'title' => 'Tinye ngwaahịa gị',
            'message' => "Tinye ngwa ngwa na otu na Dashboard> Ngwaahịa. Ọ dị ka ijikwa faịlụ na nchekwa na PC gị – ịdọrọ na dobe dị njikere. Ị nwekwara ike ibubata ngwaahịa dị ukwuu site na iji Excel. Nlereanya ụdịdị dị iji nyere gị aka ibido.",
            'action' => 'Jikwaa ngwaahịa m',
        ],
        'step-shipping' => [
            'title' => 'Hazie ụzọ mbupu',
            'message' => "Iji kwụọ ndị ahịa ụgwọ maka mbupu, kọwaa ụzọ mbupu gị na Dashboard> Logistic> Mbupu. Ị nwere ike ịtọ ọnụahịa na nkwado dị iche iche maka ebe dị iche iche. Echefula ịtọ ntọala ụlọ nkwakọba ihe gị na Dashboard> Logistic> Ụlọ nkwakọba ihe.",
            'action' => 'Jikwaa ụzọ mbupu',
        ],
    

        'seller' => [
            'title' => 'Ị bụ onye na-ere ahịa?',
            'message' => 'Iji malite ire, tinye dashboard gị na Selldone site na njikọ dị n\'okpuru wee mepụta ụlọ ahịa mbụ gị kpamkpam n\'efu. Nke a ga-ewe nkeji ole na ole ma ị ga-enwe ụlọ ahịa nke gị na saịtị ịntanetị. Anyị ga-eduzi gị gaa na usoro ọzọ wee nweta ọnụ ụzọ ịkwụ ụgwọ.',
            'action' => 'Banye na dashboard m',
        ],
        'buyer' => [
            'title' => 'Abụ m onye na-azụ ihe',
            'message' => 'Ekele. Ozugbo ị bụ onye otu Selldone, ị ga-ewepụ nsogbu niile nke ịbụ otu na nyocha na ụlọ ahịa dị n\'ịntanetị. Iji rite uru na ụlọ ahịa na saịtị ọ bụla na-eji ikpo okwu Selldone, ị nwere ike ịbanye na otu pịa wee mee ka ịzụrụ ihe dị mfe, ngwa ngwa na nchekwa.',
        ],
    ],


    'charge-account' => [
        'category' => 'Obere akpa > Akaụntụ > Chajị',
        'title' => "Ụgwọ ịga nke ọma",
        'message' => "Your account <b>:account_number</b> has been charged <b>:amount</b> successfully.",
        'account' => 'Akaụntụ',
        'charge' => 'ebubo',
        'balance' => 'Nhazi',
        'footer' => "Mee ka azụmahịa dị mfe, nweta ya, yana nweta onye ọ bụla gburugburu ụwa."
    ],

    'verify-email' => [
        'subject' => "🙌 Mezue aha gị na Selldone! Nyochaa njikọ.",
        'category' => "Ị bụ otu nzọụkwụ pụọ",
        'title' => "Nyochaa adreesị ozi-e gị",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Ọ bụrụ na ị na-enwe nsogbu na ịpị bọtịnụ Nyochaa, detuo ma mado URL dị n'okpuru n'ime ihe nchọgharị weebụ gị: :activation_url",
        'next-step' => "Na-esote, anyị ga-ezitere gị ụfọdụ ihe na-enye aka yana ntuziaka nzọụkwụ iji mee ka ọ dịrị gị mfe ịgbakwunye ngalaba omenala gị, guzobe ịkwụ ụgwọ, tinye ngwaahịa, wee nweta usoro mbụ gị.",

    ],
    'verify-email-code' => [
        'subject' => "Koodu nkwenye maka :name",
        'category' => "SECURITY",
        'title' => "Koodu nkwenye email",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Ụlọ ahịa gị adịla njikere| :name",
        'category' => "Ị bụ otu nzọụkwụ pụọ",
        'title' => "Nhazi emechara",
        'account_title' => "Akaụntụ gị",
        'account_msg' => "Jiri ozi a nyochaa ma banye na akaụntụ gị.",
        'shop_msg' => "Ozi akaụntụ na sistemụ azụmahịa Selldone.",

    ],

    'reset2fa' => [
        'category' => "Ozi ọrụ nchekwa",
        'title' => "Rịọ gbanyụọ nbanye nzọụkwụ 2",
        'message' => "Ị na-enweta ozi-e a n'ihi na anyị natara arịrịọ ka ịtọgharịa nyocha ihe abụọ maka akaụntụ **:name** email **:email**.<br><br>Anyị chọtara nkọwa ndị a maka akaụntụ gị:",
        'footer' => "Ọ bụrụ na ị rịọghị nrụpụta paswọọdụ, ọ nweghị ihe ọzọ achọrọ.",
        'action' => 'Gbanyụọ nbanye nzọụkwụ abụọ',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Ụlọ ahịa gị adịla njikere ugbu a!",
        'category' => "MỤRỤ NEW ONLINE ụlọ ahịa na ụwa",
        'title' => "Ekele, :name!",
        'message' => "<b>Ekele, :name! Azụmahịa ọhụrụ gị dị n'ịntanetị dị ugbu a!</b> Anyị nwere obi ụtọ ịnabata gị na obodo ndị na-ere ere. Ị meela nzọụkwụ mbụ iji nweta ihe ịga nke ọma, ma anyị nọ ebe a iji nyere gị aka n'ụzọ ọ bụla. Ọ bụrụ na ị chọrọ enyemaka, anyị na-na nnọọ ozi pụọ — anyị na-akwado anyị na-ebe a mgbe niile maka gị.<br><br><b>Ikpa na-esote nzọụkwụ:</b> Iji malite, hụ na ị na-niile ahaziri maka ịnata ugwo na ezigbo arụmọrụ. Anyị ga-eduzi gị n'usoro ọ bụla ka ụlọ ahịa gị na-aga n'enweghị nsogbu.",
        'pdf-book' => "Agbagharala akwụkwọ aka agbakwunyere: Mee azụmahịa gị dị ka egwuregwu",

        'account' => [
            'title' => 'Kwụpụ 1: Mepụta akaụntụ na obere akpa Selldone',
            'message' => "Iji malite, mepụta akaụntụ n'ime obere akpa Selldone gị. Nke a bụ ebe a ga-ewepụ ụgwọ gị, ọ bụkwa ebe ị ga-akwụ ụgwọ ka ụlọ ahịa gị na-aga nke ọma. Ọ bụrụ na nguzozi gị na-aga nke ọma, echegbula! Ụlọ ahịa gị ga-aga n'ihu na-arụ ọrụ na-enweghị nkwụsị.",
            'action' => 'Banye na obere akpa',
        ],

        'shop-account' => [
            'title' => 'Nzọụkwụ 2: jikọọ akaụntụ na ụlọ ahịa',
            'message' => "Na-esote, jikọọ akaụntụ obere akpa gị na ụlọ ahịa gị. Gaa na <b>Store> Accounting> akwụkwọ ọnụahịa</b>, wee jikọta obere akpa gị. Nke a na-achọpụta na a na-edobe ego ndị ahịa niile na akaụntụ akụ gị-Selldone anaghị ewepụ ego ọ bụla na ego ị nwetara.",
            'action' => 'Ụlọ ahịa akwụkwọ ọnụahịa',
        ],

        'gateway' => [
            'title' => 'Kwụpụ 3: Jikọọ ọnụ ụzọ ịkwụ ụgwọ n\'ịntanetị',
            'message' => "Ugbu a, ka anyị guzobe ọnụ ụzọ ịkwụ ụgwọ ịntanetị gị. Gaa na <b>Store> Accounting> Port</b> wee pịa <b>Add New Port</b>. Họrọ ego gị, ị ga-ahụ ndepụta nke ụzọ ịkwụ ụgwọ dị. Ijikọ ọnụ ụzọ ámá dị ngwa ma dị mfe, mana ọ bụrụ na ịchọrọ enyemaka ọ bụla, nweere onwe gị ịlele ntuziaka Selldone ma ọ bụ kpọtụrụ anyị.",
            'action' => 'Tinye portal na ụlọ ahịa ahụ',
        ],

        'domain' => [
            'title' => 'Nzọụkwụ ikpeazụ: ijikọ ngalaba raara onwe ya nye',
            'message' => "Ugbu a, jikọta ngalaba omenala gị na ụlọ ahịa gị. Nke a na-enye ndị ahịa ohere ịzụta ngwaahịa ma ọ bụ ọrụ gị wee kwụọ gị ụgwọ ozugbo.",
            'action' => 'Ewebata na ịnata kaadị onyinye na-akparaghị ókè',
        ],
    ],


    'basket-list' => [
        'item' => "ihe",
        'count' => "Gụọ",
        'price' => "ọnụ ahịa",
        'discount-code' => "Koodu nkwụnye ego",
        'customer-club' => 'Ụlọ ahịa ndị ahịa',
        'shipping' => "Mbupu",
        'total' => "Mkpokọta",
        'offer' => "Nye",
        'coupon' => "Ụgwọ akwụkwọ",
        'lottery' => "Ihe nrite",
        'tax' => "Ụtụ isi",
        'tax_included' => "Gụnyere na ọnụahịa",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Usoro',
        'amount' => 'Ọnụ ego',
        'giftcard' => 'Gift card',
        'payment' => 'Ịkwụ ụgwọ',
    ],


    'shop-subscription-email' => [
        'category' => "Mmelite ndenye aha",
        'title' => "Akwụkwọ ikike ụlọ ahịa: :shop_title",
        'title-reserved' => "Akwụkwọ ikike nchekwa: :shop_title",
        'title-active' => "Akwụkwọ ikike arụ ọrụ: :shop_title",
        'title-finished' => "Akwụkwọ ikike emechara: :shop_title",
        'title-cancel' => "Kagbuo ikike: :shop_title",
        'message' => "Atụmatụ ikike ụlọ ahịa gị emelitere,",
        'RESERVED' => "⚡ Atụmatụ ndenye aha gị ka edobere**.",
        'ACTIVE' => "🟢 Atụmatụ ndenye aha gị ka agbanyerela**.",
        'FINISHED' => "🚧 Atụmatụ ndenye aha gị agwụla ** .",
        'CANCEL' => "⛔ Atụmatụ ndenye aha gị ** akagbuola**.",
    ],

    'support' => [
        'subject' => "Ebe nkwado|:name zara ya",
        'category' => "Ebe nkwado",
        'title' => "Ị nwetara nzaghachi",
        'action' => "Mepee onye nchịkwa ụlọ ahịa",
    ],

    'shop-customer-join' => [
        'subject' => "Jikọọ :shop_title",
        'category' => "Ememme ndị ahịa ọhụrụ",
        'title' => "Obi dị anyị ụtọ maka ịbụ otu gị",
        'action' => "Gaa leta ugbu a",
    ],

    'shop-vendor-join' => [
        'subject' => "Onye na-ere ihe n'ụgbọ mmiri| :shop_title",
        'category' => "Ememme onye na-ere ahịa ọhụrụ",
        'title' => "Obi dị anyị ụtọ maka ịbụ otu gị",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kaadị onyinye :shop_title",
        'category' => "Tinye kaadị ọhụrụ",
        'title' => "Ekele, ị nwetala kaadị onyinye",
        'action' => "Zụrụ ahịa ugbu a",
        'message' => "Ị nwetala kaadị onyinye n'ego :balance :currency. Ị ga-eji kaadị onyinye a zụta n'ụlọ ahịa anyị.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Ebe nkwado| :shop",
        'category' => "nkwado",
        'title' => "Ị nwetara nzaghachi",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 ịtụ ụtụ | :order_id",
        'title' => "ịtụ",
        'message' => "Ị nyere iwu n'ụlọ ahịa anyị. Anyị nwetara iwu gị, anyị ga-ezitere gị ozi-e ọzọ ozugbo egosiri ịkwụ ụgwọ ahụ."
    ,

        'payments' => 'Ịkwụ ụgwọ',
    ],

    'order-payment' => [
        'subject' => "🛍 nkwenye ịkwụ ụgwọ | :order_id",
        'title' => "Usoro ịkwụ ụgwọ",
        'message' => "Emechara ịkwụ ụgwọ gị,<br> Anyị enwetala iwu gị. Anyị ga-edobe gị email ọzọ mgbe ị na-ebugharị ụgbọ mmiri.",
    

        'payments' => 'Ịkwụ ụgwọ',
    ],

    'order-update' => [
        'subject' => "🛍️ Mmelite ọnọdụ ịtụ|Nye iwu :order_id",
        'title' => "Mmelite ọnọdụ ịtụ",
        'message' => "Emelitela iwu gị. Ị nwere ike ịlele ọkwa kachasị ọhụrụ nke usoro a na akaụntụ gị.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Usoro gị dị n'ahịrị maka nhazi. Anyị ga-agwa gị mgbe a na-akwado ya.",
                'OrderConfirm' => "Ekwenyere iwu gị wee malite nkwadobe.",
                'PreparingOrder' => "A na-akwado iwu gị, a ga-ebupu ya n'oge adịghị anya.",
                'SentOrder' => "Ebupula iwu gị. Ị ga-enweta ya obere oge.",
                'ToCustomer' => "Ebunyela iwu gị. Anyị na-atụ na ị ga-anụ ụtọ ya!",

                'PreparingOrder-PICKUP' => "A na-akwado iwu gị. Ị ga-enweta ọkwa mgbe ọ dị njikere maka mbuli.",
                'SentOrder-PICKUP' => "Usoro gị adịla njikere maka mbuli. Biko bịa n'ụlọ ahịa ka ị nakọta ya.",
                'ToCustomer-PICKUP' => "Ewebarala iwu gị. Anyị na-atụ na ị ga-anụ ụtọ ya!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Usoro gị dị n'ahịrị maka nhazi. Anyị ga-agwa gị mgbe ọ dị njikere.",
                'OrderConfirm' => "Ekwenyere iwu gị na nkwadebe na-aga n'ihu.",
                'PreparingOrder' => "A na-akwado iwu gị, a ga-ezigara gị gị n'oge adịghị anya.",
                'ToCustomer' => "Ebufela usoro mebere gị na akaụntụ gị. Daalụ!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Arịrịọ ọrụ gị dị na kwụ n'ahịrị. Anyị ga-agwa gị mgbe anyị malitere.",
                'OrderConfirm' => "Ekwenyere ọrụ gị ma anyị na-akwado ibido.",
                'PreparingOrder' => "Anyị na-akwado ọrụ gị, anyị ga-agwakwa gị ozugbo ọ mechara ya.",
                'ToCustomer' => "Ọrụ gị ezuola. Daalụ maka ịhọrọ anyị!"
            ],
            'FILE' => [
                'PreparingOrder' => "A na-akwado faịlụ gị ma ọ ga-adị n'oge adịghị anya.",
                'ToCustomer' => "Faịlụ gị adịla njikere ma ebupụtala ya. Ị nwere ike ibudata ya ugbu a."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Usoro ndenye aha gị dị na kwụ n'ahịrị. Anyị ga-agwa gị mgbe nhazi malitere.",
                'OrderConfirm' => "Ekwenyela ndenye aha gị ma na-ahazi ya.",
                'PreparingOrder' => "Anyị na-akwado ndenye aha gị, ọ ga-amalite n'oge adịghị anya.",
                'SentOrder' => "Agbanyela ndenye aha gị. Ị ga-enweta mmelite na-aga n'ihu.",
                'ToCustomer' => "Agbanyela ọrụ ndenye aha gị nke ọma."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Ekele :name|Mpempe akwụkwọ ọhụrụ: :title',
        'category' => "Ekele, akwụkwọ ikike ọhụrụ",
        'message' => "Hey :name,<br><br>You've received a new voucher as a gift from us! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. This voucher is worth **:price :currency**.<br><br>You've taken the first step, and we’re here to help you unlock new features with your voucher! Please login with **:email** and find your voucher in the Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congratulations!",
        'action' => "dashboard m",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Ekele, Dear :name | Ị nwetala onyinye',
        'category' => "Nkwupụta nke ịnata onyinye",
        'title' => "Onyinye maka gị",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Onyinye",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Ọhụrụ anabatara | :order_id",
        'title' => "New Order",
        'message' => "Ị nwetala usoro ọhụrụ. Biko gaa na ibe nhazi usoro n'ụlọ ahịa gị.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Ozi gị juputara',
        'output-form-title' => 'Ozi ihe zụrụ',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Akụkọ kwa izu :time',
        'title' => 'Akụkọ arụmọrụ ụlọ ahịa kwa izu',
        'message' => "This is your store's weekly report from <b>:start</b> to <b>:end</b>. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Akuko nchekwa :amount gi n\'ime onwa ato gara aga| :shop_title',
        'title' => 'Akụkọ nke oge gbasara ọrụ azụmahịa gị, ụgwọ ọrụ na nchekwa ego gị',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Akaụntụ ejikọrọ',
        'sub-title' => 'Kedu ọkwa kacha ọhụrụ nke akaụntụ akpa ego ejikọrọ na ụlọ ahịa m?',
        'view-wallet' => 'Lelee obere akpa',
        'tip-title' => 'Ndụmọdụ ndị dị mkpa',
        'tip' => "Hazie obere akpa Selldone efu wee jikọta ya na ụlọ ahịa gị. Ọbụna ma ọ bụrụ na nguzozi gị adịghị mma, ndị ahịa gị ka nwere ike ịzụ ahịa ma kwụọ ụgwọ n'enweghị nsogbu ọ bụla. Echegbula onwe gị, arụmọrụ na data nke ụlọ ahịa gị ga-aga n'ihu nke ọma ruo ọnwa 1, na-enweghị nkwụsị ọ bụla.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Jikọọ na akaụntụ'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Ngwa arụnyere',
        'sub-title' => 'Ndepụta ngwa ndị ị tinyegoro na ụlọ ahịa gị n\'izu a.',
        'tip' => "Ị chọrọ ịchọta ngwa ndị ọzọ maka ụlọ ahịa gị?",
        'view-app-store' => 'Gaa na ụlọ ahịa ahịa Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bots ụlọ ahịa gị',
        'sub-title' => 'Bots ahịa na-arụsi ọrụ ike na ụlọ ahịa m.',
        'tip-title' => 'Ọrịre Bot',
        'tip' => "Selldone enyela gị bots ire ere akpaka. Ihe niile ị ga - eme bụ ịga na Tinye-ons> Bots panel wee rụọ ọrụ bots ụlọ ahịa gị. Mara na ọrụ dị mkpa ga-adịrịrị na obodo gị.",
        'view-bots' => 'Jikwaa bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Mmekọrịta na ndị ahịa',
        'sub-title' => 'Kọntaktị ole ka mụ na ndị ahịa m nwere n\'izu a?',
        'faqs' => 'Ajụjụ a na-ajụkarị',
        'tickets' => 'Tiketi ndị ahịa',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Ọnọdụ ndị ọrụ',
        'sub-title' => 'Ọrụ sitere na :start ruo :end',
        'users' => [
            'title' => 'Ndị ahịa',
            'subtitle' => 'Ndị ọrụ debanyere aha',
        ],
        'views' => [
            'title' => 'Nleta',
            'subtitle' => 'Ugboro ole ka ị gara ụlọ ahịa ahụ',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Ndị ọrụ lọghachiri',

        'shop_views' => 'Echiche ụlọ ahịa',
        'baskets' => [
            'title' => 'Ụgbọ ala ịzụ ahịa',
            'subtitle' => 'Kpesa ọnụ ọgụgụ ụgbọ ahịa ịzụ ahịa ọhụrụ',
        ],
        'products' => [
            'title' => 'Nchịkọta ngwaahịa',
            'subtitle' => 'Ọnọdụ ngwaahịa dị na ụlọ ahịa n\'ụdị',
            'value_name' => 'Ngwaahịa'
        ],
        'products_count' => 'Ụdị ngwaahịa',
        'views_count' => 'Lelee ọnụ ọgụgụ',
        'sell_count' => 'Ọnụ ahịa ire',
        'send_count' => 'Ọnụọgụ mbupu',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Wepu Mbupu',
        'sub-title' => 'Ogwe maka ndị na-ere ahịa nke Drop Shipping Selldone.',
        'total_fulfillments' => 'Ngụkọta iwu natara',
        'ds_count' => 'Nweta iwu',
        'statistics_title' => 'Kpesa ozi natara',
        'ds_cancels' => 'Kagbuo site na onye na-ere interface',
        'ds_rejects' => 'Ị kagbuo',
        'tip' => "Ị bụ onye na-ere ahịa buru ibu nwere ụlọ nkwakọba ihe, ụlọ ọrụ mmepụta ihe, ma ọ bụ nkesa ngwaahịa? Ị nwere ike ịgbasa iru gị site n'inye ngwaahịa gị ndị ọzọ na-ere ahịa site na Selldone's Drop Shipping service. Email anyị na support@selldone.com ka ịmatakwu ihe.",
        'view-drop-shipping-panel' => 'Banye na panel n\'ogbe ahia',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Ọnụego mgbanwe',
        'sub-title' => 'Ndepụta nke mgbanwe mgbanwe ego kacha ọhụrụ na ụlọ ahịa gị.',
        'from' => 'Ego isi mmalite',
        'to' => 'Ego ebe aga',
        'rate' => 'Ọnụego mgbanwe',
        'view-exchange-panel' => 'Jikwaa ọnụego mgbanwe',
    

        'vew-exchange-panel' => 'panel njikwa ọnụego mgbanwe',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ndị ọkachamara nkwekọrịta',
        'sub-title' => 'Kedu ndị ọkachamara na-arụ ọrụ na ụlọ ahịa m?',
        'cost' => 'Ọnụ ego nkwekọrịta',
        'duration' => 'Ogologo oge',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Kagbuo ụbọchị',
        'end_at' => 'Ụbọchị nnyefe',
        'tip' => 'Ị nwere ike ịkpọ ndị ọkachamara kachasị mma na Selldone iji zụlite azụmahịa gị.',
        'view-experts' => 'Pịa ka ịmalite.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Ọnụ ụzọ ịkwụ ụgwọ na-arụ ọrụ na ụlọ ahịa gị :shop',
        'tip-title' => 'Ndụmọdụ ndị dị mkpa',
        'tip' => "Gaa na ibe njikwa portal na ụlọ ahịa gị ma tinye opekata mpe otu ọdụ ụgbọ mmiri n'ime nkeji ole na ole. Ndị ahịa gị na-enwe mmasị ịkwụ ụgwọ ngwa ngwa na enweghị ntụkwasị obi site na ọnụ ụzọ ịntanetị.",
        'view-shop-gateways' => 'Banye na njikwa ọnụ ụzọ ụlọ ahịa m.',
        'view-gateways' => 'Lelee ọnụ ụzọ ámá ndị ọzọ',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Iwu',
        'sub-title' => 'Ndepụta iwu m nwetara n\'izu a.',
        'total_baskets' => 'Ngụkọta iwu',
        'total_posBaskets' => 'Mkpokọta iwu ego ego',
        'pos-title' => 'Igbe ụlọ ahịa POS',
        'chart-label' => 'Emechara iwu (a naghị akwụrịrị iwu ndị a!)',
        'tip-title' => 'Ị kwesịrị ịgbalịsi ike ...',
        'tip' => "Ọ dịghị mfe ịga nke ọma.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Ebe nhazi',
        'sub-title' => 'Ego ole ka anyị mere n\'ụlọ ahịa n\'izu a?',
        'tip-title' => 'Ị nweghị ire ere!',
        'tip' => "Ọ dị nwute na ị nweghị ahịa ọ bụla n'izu a. Ịkwesịrị ịnweta karịa na ụlọ ahịa gị. Ị nwere ike ịgbakwunye ngwaahịa ndị ọzọ, họrọ ihe oyiyi ka mma ma ọ bụ dee nkọwa kacha mma maka ngwaahịa gị. Tụlee ịrụ ọrụ oge niile maka azụmahịa gị. Ọ bụrụ na i mee ya nke ọma ma ghara inwe nkụda mmụọ, ị ga-eme nke ọma.",
        'view-process-center' => 'Lelee etiti usoro',
        'return' => [
            'title' => 'Iwu eweghachiri',
            'subtitle' => 'Kpọọ iwu weghachiri eweghachi.',
            'tip-title' => 'Ị maara na...',
            'tip' => "Ị nwere ike ịmepụta ọtụtụ akwụkwọ ndekọ ego dịka ịchọrọ na Selldone POS! Ma ọ bụ mbadamba nkume gị, mkpanaka, ma ọ bụ laptọọpụ, ị nwere ike ịtụgharị ngwaọrụ ọ bụla ka ọ bụrụ ebe a na-ere ahịa nke ụlọ ahịa gị. Ọ dị mfe, ngwa ngwa ịtọlite ​​​​ma kwadokwara nke ọma maka sava gị. Malite iji ya taa!",
            'view-pos' => 'Banye na ego nkwụnye ego nke ụlọ ahịa ọnlaịnụ m'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Oge',
        'sub-title' => 'Ugboro ole ka m gara ụlọ ahịa m?',
        'countries-title' => 'Kedu obodo ndị a kacha leta?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ị chọrọ ịkpata ego na-emefughị otu ego?',
        'message' => "Ndewo :name, ọ bụ oge ịmalite ịkpata ego na Selldone! Gaa na Dashboard> Ndị ọzọ> Nweta ego> Nweta njikọ ntụnye aka gị. Kekọrịta ndị enyi gị njikọ ahụ, wee nweta kaadị onyinye na òkè nke ịkwụ ụgwọ ha. Nke kacha mma? Ma gị na enyi gị na-enweta kaadị onyinye!",
        'action' => 'Lelee njikọ mmeghe m',
        'mail-clip' => "<b style='color: #C2185B'>Ihe dị mkpa:</b> Ọ bụrụ na ị na-eji ọrụ email dị ka Gmail na-amachi ogologo ozi-e, chọta nhọrọ na-esonụ na njedebe nke email iji gosipụta akụkọ zuru ezu wee pịa ya:",

        'no-coin-reward' => "<b style='color: #C2185B'>Ndo:</b> Ọrụ gị emezughị ihe achọrọ iji nweta ụgwọ ọrụ mkpụrụ ego SEL efu. Gbalịa gbasie ike wee ree karịa na ụlọ ahịa gị maka oge ọzọ.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Ekele:</b> Nnukwu ọrụ! Dabere na arụmọrụ gị pụtara ìhè, anyị etinyela mkpụrụ ego :amount SEL na akaụntụ gị dị ka ụgwọ ọrụ.",

        'need-buy-license' => "<b>Nkwalite Azụmahịa Gị:</b> Ọ dị ka idebebeghị atụmatụ ndenye aha maka weebụsaịtị gị! Kwalite ugbu a ka imepe atụmatụ ndị ọzọ maka naanị :amount kwa ọnwa ma ọ bụrụ na a na-akwụ ụgwọ kwa afọ.",
        'not-afford-message' => "Ọ bụrụ na ị na-eche nsogbu ọ bụla ihu na ịkwụ ụgwọ ma ọ bụ enweghị ike imeli ya ugbu a, egbula oge ịkpọtụrụ anyị na support@selldone.com.",
        'add-domain' => "<b>Kedu ihe kpatara na ị nweghị ngalaba omenala maka azụmahịa gị?</b><br> Tinye ngalaba na webụsaịtị gị ugbu a; ọ bụ n'efu!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone bụ a<del> ngwaahịa</del> <span style = 'color: forestgreen'>obodo</span> .<br> Bụrụ onye na-ere ahịa ọkachamara!",
        'message' => "Soro ibe gọọmentị nke Selldone na Twitter, LinkedIn na netwọkụ mmekọrịta. Zitere anyị nkwupụta ọ bụla, arịrịọ ma ọ bụ nkatọ ma ọ bụ sonye na mkparịta ụka gbasara Selldone. Anyị bụkwa akụkụ nke obodo Selldone nke <b>ị na-eme</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Anatara iwu ube oyibo ọhụrụ|:shop_title :time',
        'title' => "Nkwupụta arụmọrụ maka awa 24 gara aga",
        'message' => "Ndị ahịa gị na-eche ka enyocha ma tụọ ọnụ ahịa gị. Zaa arịrịọ ndị ahịa gị ozugbo enwere ike iji nweta ọtụtụ ahịa.",
        'card_title' => "Iwu na kwụ n'ahịrị",
        'card_subtitle' => "Ebe ọ bụ na :date",

        'card_payed' => "Iwu akwụgoro"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Zaghachi ozi gị na :community_title',
        'title' => ":name na :count ndị ọzọ abanyela na mkparịta ụka na posts gị!",
        'message' => "Ndewo :name, ozi gị na-elebara anya! Ị nwetala nkwupụta n'ime obodo anyị. Banye na akaụntụ gị iji sonye na mkparịta ụka ahụ wee hụ ihe onye ọ bụla na-ekwu.",
        'title-simple' => ":name ekwula okwu na post gị!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 zaghachi isiokwu gị :topic_title',
        'title' => ":name, na :count ndị ọzọ zara ya na isiokwu gị.",
        'message' => "Ndewo :name, isiokwu gị na-elebara anya! Ị nwetala azịza n'ime obodo anyị. Banye na akaụntụ gị iji sonye na mkparịta ụka ahụ wee hụ ihe onye ọ bụla na-ekwu.",
        'title-simple' => ":name zara ya na isiokwu gị.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nbanye ọhụrụ :name',
        'category' => 'Ozi nche',
        'title' => "Nbanye na Akaụntụ",
        'message' => "Ezigbo :name, ahụrụ nbanye na akaụntụ Selldone gị.",   // Login in selldone (seller)
        'message-shop' => "Ezigbo :name, abanyela na :shop_title.",  // Login in shop (buyer)

        'footer' => "Ọ bụrụ na ịbanyeghị, biko gbanwee paswọọdụ gị.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Mwepụ",
        'deposit' => "Nkwụnye ego",

        'withdraw_subject' => "Wepụ na akaụntụ :account",
        'deposit_subject' => "Nkwụnye ego na akaụntụ :account",

        'message' => "Emere nnyefe ego site na nkọwa ndị a.",

        'type' => "Ụdị azụmahịa",

        'from' => "Isi mmalite akaụntụ",
        'to' => "Destination account",

        'desc' => "Nkọwa azụmahịa",
        'action' => "Lelee azụmahịa",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ dị mkpa! Mmebi iwu| :shop",
        'category' => "Ozi dị mkpa",
        'title' => "A tara ụlọ ahịa gị ntaramahụhụ",
        'action' => "Mepee dashboard ụlọ ahịa",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter akpọla gị ka ị sonyere Selldone",
        'title' => ":name ezipụla gị :amount iji nyere aka ịmalite ụlọ ahịa ịntanetị ọhụrụ gị wee nweta ego!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Nabata òkù",
        'owner' => "Onye nwe",
        'join-date' => "Na Selldone kemgbe",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Njikọ mgbake| :shop",
        'category' => "Nchekwa ụlọ ahịa",
        'title' => "Chekwaa njikọ mgbake nke <b>:shop_name</b> .",
        'message' => "E zigara gị email a n'ihi na ị rịọrọ ka iweghachi ụlọ ahịa gị. Ịpị na njikọ dị n'okpuru ga-eweghachi ụlọ ahịa gị na data niile dị na ya.",
        'action' => "Kwenye mgbake ụlọ ahịa",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Ego ole ka Selldone chekwaa maka azụmahịa gị?',
        'sub-title' => 'Site na ụbọchị :start ruo :end',
        'infrastructure' => [
            'title' => 'Akụrụngwa',
            'subtitle' => 'Sava, CDN, Nchekwa, na ọrụ igwe ojii ndị ọzọ',
        ],
        'experts' => [
            'title' => 'Ndị ọkachamara & Ndị ọrụ',
            'subtitle' => 'Ndị nrụpụta, ndozi na nkwado',
        ],
        'total_save' => 'Mkpokọta ego echekwara'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Ọrụ gị',
        'sub-title' => 'Nyochaa azụmaahịa sitere na :start ruo :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Ndị ọrụ lọghachiri',

        'shop_views' => 'Echiche ụlọ ahịa',
        'baskets' => [
            'title' => 'Ụgbọ ala ịzụ ahịa',
            'subtitle' => 'Kpesa ọnụ ọgụgụ ụgbọ ahịa ịzụ ahịa ọhụrụ',

        ],
        'products' => [
            'title' => 'Nchịkọta ngwaahịa',
            'subtitle' => 'Ọnọdụ ngwaahịa dị na ụlọ ahịa n\'ụdị',
            'value_name' => 'Ngwaahịa'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Ngụkọta nlele ibe weebụ',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Ị nwetala usoro ọhụrụ. Biko gaa na ibe nhazi usoro na panel nke ndị na-ere gị.",
        'subject' => "🛍 Ọhụrụ anabatara | :order_id",
        'your_revenue' => "Ego ị nweta",
    ],
    'vendor-invite' => [
        'title' => 'Nkuku onye na-ere ere',
        'message' => "Ị nwetala akwụkwọ ịkpọ òkù ka ị bụrụ onye na-ere :shop_name. Ị nwere ike ịnakwere ma ọ bụ jụ ya site na ịpị bọtịnụ ndị a.",
        'subject' => ":shop_name |Akpọku ịbụ onye na-ere anyị",
        'accept' => "Nabata & bụrụ onye na-ere ahịa",
        'reject' => "Jụ",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Okuku isonyere Otu anyi',
        'message' => "Akpọrọla gị òkù isonye na :vendor_name na :shop_name. Ị nwere ike nabata ma ọ bụ jụ òkù a site na iji bọtịnụ dị n'okpuru.",
        'subject' => "Akpọku iji sonyere :vendor_name|Bụrụ onye otu otu",
        'accept' => "Nabata & Sonye Otu",
        'reject' => "Jụ",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Koodu nbanye gị maka :shop",
        'header-message' => "Anyị na-ezitere gị email a n'ihi na ị rịọrọ koodu nbanye maka ụlọ ahịa ahụ. Biko chọta paswọọdụ otu oge gị (OTP) n'okpuru:",
        'footer-message' => "Koodu a ga-adị irè maka nkeji iri. Ọ bụrụ na ị rịọghị koodu nbanye a, biko leghara email a anya."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Nyochaa email gị| :shop",
        'title' => 'nkwenye email',
        'header-message' => "Ndewo :name,<br>Biko gosi na **:email** bụ adreesị ozi-e gị site na ịpị bọtịnụ dị n'okpuru ma ọ bụ jiri njikọ dị n'okpuru n'ime awa 48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Mmelite ngwaahịa| :shop",
        'title' => "Mmelite na Ọnọdụ ngwaahịa - Awa 24 ikpeazụ",
        'message' => "Enwere m olileanya na ozi a ga-ahụ gị nke ọma. Nke a bụ mmelite dị nkenke iji mee ka ị mata ọkwa nke ngwaahịa gị n'elu ikpo okwu anyị n'ime awa 24 gara aga.\nN'ime oge a, enweela mgbanwe na ọnọdụ nke ụfọdụ ngwaahịa. Mgbanwe ndị a nwere ike ịbụ n'ihi ịzụrụ ihe, mmelite ngwaahịa ma ọ bụ mmemme ndị ọzọ metụtara ya.\nMaka ozi zuru ezu gbasara ngwaahịa ọ bụla, biko banye na akaụntụ gị wee lelee ngalaba 'Ọnọdụ Ngwaahịa'.",
        'action' => "Mepee ogwe ndị na-ere ere",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Anatara nnukwu iwu| :shop | :date",
        'title' => "Ịma ọkwa nnukwu iwu",
        'message' => "Ị nwetala nnukwu iwu iwu. Biko gaa na ibe nhazi usoro dị na panel gị maka nkọwa ndị ọzọ. Ị nwekwara ike budata ndepụta ịtụ ahịa site na njikọ echekwara, bara uru maka ụbọchị 7.<br><br>\n        <b>I dị mkpa:</b> Njikọ a bara uru maka ụbọchị 7.<br>\n        Njikọ a dị ike, yabụ oge ọ bụla ị pịrị ya, ị ga-enweta iwu kachasị emelitere maka ụbọchị a kapịrị ọnụ. <b>Ọ pụtara na ọ bụrụ na ọkwa ịkwụ ụgwọ gbanwere ka ọ bụrụ jụrụ, ị gaghị ahụkwa usoro ahụ na CSV ebudatara, ma ọ bụ ọ bụrụ na akwụgoro ya, ọ ga-apụta na listi ahụ.\n        <ul>\n            <li> CSV nwere iwu akwụ ụgwọ nwere ụbọchị edobere na :date.</li>\n            <li>Ụbọchị echekwabara bụ ụbọchị mgbe onye ọrụ pịa ndenye ọpụpụ na ibe iwu.</li>\n        </ul>\n        <b>Iji gbochie iwu oyiri, lelee Order ID tupu izipu.</b>",
        'action' => "Budata Ndepụta Order",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Anabataghị ụfọdụ ihe n'usoro gị, enweghịkwa ike ibunye ya. A ga-akwụghachi ego maka ihe ndị a na kaadị gị n'oge na-adịghị anya."
    ]

];
