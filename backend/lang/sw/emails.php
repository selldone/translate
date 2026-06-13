<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ujumbe huu unakaribisha mnunuzi mpya kwenye duka.',
        ShopMailTemplateCodes::OrderCheckout => 'Arifa hii inatumwa wakati mnunuzi anathibitisha agizo.',
        ShopMailTemplateCodes::OrderPayment => 'Arifa hii inathibitisha malipo yaliyofaulu yaliyofanywa na mteja.',
        ShopMailTemplateCodes::OrderUpdate => 'Ujumbe huu unatumwa ili kusasisha mnunuzi kuhusu hali ya agizo lake.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ujumbe huu unatumwa kwa muuzaji ili kuwaarifu kuhusu agizo lililothibitishwa.',
        ShopMailTemplateCodes::PosCheckout => 'Arifa hii inatumwa ili kuthibitisha eneo la mauzo kwa mnunuzi.',
        ShopMailTemplateCodes::PosPayment => 'Arifa hii inathibitisha malipo ya mauzo yaliyofanywa na mnunuzi.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ujumbe huu unamjulisha muuzaji kuhusu ununuzi uliofanywa katika eneo lao la mauzo.',
        ShopMailTemplateCodes::ShopContact => 'Arifa hii inatumwa wakati fomu ya mawasiliano imewasilishwa.',
        ShopMailTemplateCodes::ShopGiftCard => 'Arifa hii hufahamisha mtumiaji kuwa amepokea kadi ya zawadi.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ujumbe huu unakaribisha mchuuzi mpya kwenye duka.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ujumbe huu unatumwa ili kumwalika mchuuzi ajiunge na soko lako.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ujumbe huu hutumwa kwa muuzaji agizo linapopokelewa katika hali ya Kulipiwa au Pesa kwenye Utumaji (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Hutumwa kila siku ili kusasisha wachuuzi kuhusu hali ya bidhaa zao.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ujumbe huu unatumwa ili kumwalika mchuuzi ajiunge na soko lako.",

        ShopMailTemplateCodes::UserLogin => "Mjulishe mtumiaji kwa maelezo ya kuingia, ikiwa ni pamoja na anwani ya IP, tarehe na kifaa, kwa madhumuni ya usalama.",
        ShopMailTemplateCodes::LoginCode => "Tuma msimbo wa nenosiri wa mara moja ili watumiaji waingie kwenye duka.",

        ShopMailTemplateCodes::EmailVerifyLink => "Tuma kiungo ili kuthibitisha anwani ya barua pepe ya mtumiaji. Barua pepe hii hutumwa mtumiaji anapojisajili kwa SMS na kuingiza barua pepe zake. Haitumiwi wakati mtumiaji anajiandikisha moja kwa moja na kuingia kwa kijamii au barua pepe.",

        ShopMailTemplateCodes::EmailBulkOrder => "Tuma orodha ya maagizo yaliyopokelewa na kulipwa kwa wingi kwa siku mahususi."


    ,

    ],


    'global' => [
        'greetings' => 'Habari, :name!',
        'end-statement' => 'Timu ya usaidizi',

        'receiver_name' => 'Karibu na :user_name',
        'footer-help' => "Je, unahitaji usaidizi? Uliza kwa [support@selldone.com](mailto:support@selldone.com) au tembelea [kituo chetu cha usaidizi](https://selldone.com/community).",
        'selldone-team' => 'Timu ya Selldone',
        'footer-shop' => "Ikiwa unahitaji usaidizi wa jambo lolote tafadhali usisite kututumia barua pepe: :shop_mail",
        'accept' => "Kubali",
        'reject' => "Kataa",
        'verify' => "thibitisha",
        'title' => "Kichwa",
        'value' => "Thamani",
        'description' => "Maelezo",
        'shop' => "Duka",
        'shop-info' => "Hifadhi Habari",
        'user' => "Mtumiaji",
        'user-info' => "Taarifa za Akaunti",
        'license' => "Leseni",
        'status' => "Hali",
        'start' => "Anza",
        'end' => "Mwisho",
        'renewal' => "Upya",
        'view' => "Tazama",

        'balance' => "Mizani",
        'card_number' => "Namba ya kadi",
        'cvv' => "Cvv",
        'expire_date' => "Tarehe ya mwisho wa matumizi",

        'Dashboard' => "Dashibodi",
        'order' => "agizo",
        'view_order' => "Tazama agizo",
        'pay_now' => "Pay now",

        'official_selldone' => "IMEUZWA RASMI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Sarafu",
        'free-balance' => "Mizani ya bure",
        'locked-balance' => "Salio lililofungwa",
        'bot' => "Bot",
        'requests' => "Maombi",
        'baskets' => 'Mikokoteni',
        'physical' => "Kimwili",
        'virtual' => "Mtandaoni",
        'file' => "Faili",
        'service' => "Huduma",
        'fulfillment' => "Utimilifu",
        'open' => "Fungua",
        'reserved' => "Imehifadhiwa",
        'canceled' => "Imeghairiwa",
        'payed' => "Imelipwa",
        'cod' => "COD",
        'orders-count' => 'Maagizo',
        'payments-count' => 'Malipo',
        'confirms-count' => 'Inathibitisha',
        'sends-count' => 'Inatuma',
        'delivers-count' => 'Inatoa',
        'count' => 'Hesabu',
        'transactions-count' => 'Idadi ya miamala',
        'success-transactions' => 'Shughuli za mafanikio',
        'total-amount' => 'Jumla',
        'amount' => 'Kiasi',
        'wage' => 'Mshahara',
        'debug' => 'Tatua',
        'pos' => 'POS',
        'live' => 'Ishi',
        'CheckQueue' => 'Angalia foleni',
        'OrderConfirm' => 'Agizo thibitisha',
        'PreparingOrder' => 'Kuandaa utaratibu',
        'SentOrder' => 'Agizo lililotumwa',
        'ToCustomer' => 'Imewasilishwa kwa mteja',
        'Pending' => 'Inasubiri',
        'Accepted' => 'Imekubaliwa',
        'Rejected' => 'Imekataliwa',
        'pc' => 'PC',
        'tablet' => 'Kompyuta kibao',
        'phone' => 'Simu',
        'total' => 'Jumla',
        'view-detail' => 'Tazama maelezo',
        'empty' => 'Tupu',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Jibu',
        'reactions' => 'Miitikio',
        'Comments' => 'Maoni',
        'last-comment' => 'Maoni ya mwisho',
        'response-to' => 'Jibu kwa',
        'posts' => 'Machapisho',
        'post' => 'Chapisha',

        'name' => 'Jina',
        'email' => 'Barua pepe',
        'type' => 'aina',
        'device' => 'Kifaa',
        'platform' => 'Jukwaa',
        'browser' => 'Kivinjari',
        'time' => 'Wakati',
        'Wallet' => 'Mkoba',
        'date' => 'Tarehe',

        'account' => 'Akaunti',
        'transaction' => 'Shughuli',
        'fee' => 'Ada',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategoria',
        'password' => 'Nenosiri',
        'verify-login' => "Thibitisha na Uingie",
        'url' => 'URL',
        'avocado' => 'Parachichi',
        'hyper' => 'Hyper',
        'buy-now' => "Nunua Sasa",
        'add-domain' => "Add Domain",
        'views' => 'Maoni',


        'country' => 'Nchi',
        'address' => 'anwani',
        'postal' => 'Msimbo wa Posta',
        'building_no' => 'Jengo #',
        'building_unit' => 'Kitengo #',
        'message' => 'Ujumbe',


        'customer' => 'Mteja',
        'cart-items' => 'Vitu vya gari',
        'payment' => 'Malipo',
        'receiver' => 'Mpokeaji',
        'virtual-items' => 'Vipengee pepe',
        'no-payment' => 'Hakuna malipo!',

        'enable' => 'Washa',
        'access' => 'Ufikiaji',
        'bank' => 'Taarifa za benki',

        'vendor' => 'Mchuuzi',

        'view_content' => "Tazama maudhui kamili",
        'files' => 'Mafaili',
        'download' => 'Pakua',
        'file_name' => 'Jina la Faili',
        'file_size' => 'Ukubwa',

        'subscription' => 'Usajili',
        'products' => 'Bidhaa',
        'vendor_products' => 'Bidhaa za Wauzaji',

        'pickup' => 'Kuchukua',

        'minutes' => 'Dakika',
        'hours' => 'Saa',

        'refund' => 'Rejesha pesa',
        'recipient_address' => 'Anwani ya Mpokeaji',
        'signature' => 'Sahihi',
        'blockchain' => 'Blockchain',
        'details' => 'Maelezo',


    

        'Shop' => 'Duka',
        'dashboard' => 'dashibodi',
        'comments' => 'maoni',
        'wallet' => 'pochi',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Ripoti ya Utendaji, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Ripoti ya Msimu, Selldone'
        ],
        'Onboarding' => [
            'id' => 'habari',
            'name' => 'Idhinisha, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Msaada :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Thibitisha, Selldone'
        ],
        'Welcome' => [
            'id' => 'habari',
            'name' => 'Jumuiya, Selldone'
        ],
        'NewShop' => [
            'id' => 'wafanyabiashara',
            'name' => 'Idhinisha, Selldone'
        ],
        'Approve' => [
            'id' => 'kuidhinisha',
            'name' => 'Idhinisha, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Usimamizi wa Maagizo :name'
        ],

        'Recovery' => [
            'id' => 'kupona',
            'name' => 'Timu ya Urejeshaji ya Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Inasubiri ⌛',
        'PAYED' => 'Imelipwa ✅',
        'CANCELED' => 'Imeghairiwa ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Msimamizi',
            'OFFICER' => 'Afisa na Msimamizi',
            'AUDITING' => 'Meneja wa ukaguzi',
            'EMPLOYEE' => 'Mfanyakazi',
            'PRODUCT' => 'Meneja wa bidhaa',
            'CONTENT' => 'Kidhibiti maudhui',
            'MARKETING' => 'Meneja masoko',
            'VIEWER' => 'Mtazamaji',

        ],
        'subject' => ":inviter alikualika kama :level| :shop",
        'category' => "Mwaliko wa wafanyakazi",
        'title' => "Umealikwa <b>:shop_name</b> kama <b>:level</b> .",
        'message' => "Umepokea mwaliko wa kushirikiana na timu ya <b>:shop_title</b> katika biashara. Una chaguo la kukubali au kukataa ofa hii. Ukichagua kukubali, tafadhali ingia katika huduma ya Selldone ili kuthibitisha uamuzi wako. Baada ya kuthibitishwa, utapata ufikiaji wa sehemu ya usimamizi wa duka.",

    ],

    'welcome-email' => [
        'subject' => "👋 Karibu :name, Tuanze na Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Karibu Selldone",
        'message' => "Asante kwa kuchagua Selldone! Sasa wewe ni sehemu ya jumuiya iliyochangamka inayounganisha wauzaji wa kimataifa na wateja, biashara za ndani na biashara, na watu binafsi kwa mashirika. Zana zetu zote za Master na Pro zinapatikana kwako **bila malipo** na **bila kikomo**. Tuko hapa kukusaidia na kufungua milango ya mafanikio yako.",

        'index' => "Hatua ya :step.",

        'step-domain' => [
            'title' => 'Ongeza Kikoa Chako Maalum',
            'message' => "Ili kuanza, ongeza kikoa chako maalum bila malipo katika Dashibodi ya Duka chini ya Mipangilio > Mipangilio ya Vikoa.",
            'action' => 'Dhibiti Vikoa Vyangu',
        ],
        'step-landing' => [
            'title' => 'Binafsisha Ukurasa Wako wa Nyumbani',
            'message' => "Binafsisha ukurasa wako wa nyumbani kwa kwenda kwenye Dashibodi > Kurasa. Chagua ukurasa wa kutua au uunde mpya. Ni rahisi na angavu, na unaweza kuanza kuifanyia kazi mara moja.",
            'action' => 'Binafsisha Ukurasa Wangu wa Kutua',
        ],
        'step-payment' => [
            'title' => 'Weka Mbinu za Malipo',
            'message' => "Anza kukubali malipo moja kwa moja kwenye akaunti yako ya benki. Ili kuunganisha watoa huduma wako wa malipo kama vile Stripe, PayPal, na zaidi, nenda kwenye Dashibodi > Uhasibu > Lango.",
            'action' => 'Ongeza Mbinu za Malipo',
        ],
        'step-products' => [
            'title' => 'Ongeza Bidhaa Zako',
            'message' => "Ongeza bidhaa na kategoria kwa urahisi katika Dashibodi > Bidhaa. Ni kama tu kudhibiti faili na folda kwenye Kompyuta yako - buruta na kudondosha tayari kabisa. Unaweza pia kuagiza bidhaa kwa wingi kwa kutumia Excel. Mfano wa kiolezo kinapatikana ili kukusaidia kuanza.",
            'action' => 'Dhibiti Bidhaa Zangu',
        ],
        'step-shipping' => [
            'title' => 'Weka Mbinu za Usafirishaji',
            'message' => "Ili kuwatoza wateja kwa usafirishaji, fafanua njia zako za usafirishaji katika Dashibodi > Logistic > Usafirishaji. Unaweza kuweka bei na usaidizi tofauti kwa maeneo mbalimbali. Usisahau kuweka asili ya ghala lako katika Dashibodi > Logistic > Ghala.",
            'action' => 'Dhibiti Mbinu za Usafirishaji',
        ],
    

        'seller' => [
            'title' => 'Je, wewe ni muuzaji?',
            'message' => 'Ili kuanza kuuza, weka dashibodi yako katika Selldone kupitia kiungo kilicho hapa chini na uunde duka lako la kwanza bila malipo kabisa. Hii itachukua dakika chache na utakuwa na duka lako mwenyewe na tovuti ya mtandaoni. Kisha tutakuongoza kwa hatua zinazofuata na kupata lango la malipo.',
            'action' => 'Ingia kwenye dashibodi yangu',
        ],
        'buyer' => [
            'title' => 'Mimi ni mnunuzi',
            'message' => 'Hongera sana. Ukishakuwa mwanachama wa Selldone, utaondoa kero zote za uanachama na uthibitishaji katika maduka ya mtandaoni. Ili kufaidika na duka na tovuti yoyote inayotumia jukwaa la Selldone, unaweza kuingia kwa mbofyo mmoja na kufanya ununuzi wako kuwa rahisi, haraka na salama.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Akaunti > Chaji',
        'title' => "Malipo ya Mafanikio",
        'message' => "Akaunti yako <b>:account_number</b> imetozwa <b>:amount</b> kwa ufanisi.",
        'account' => 'Akaunti',
        'charge' => 'Malipo',
        'balance' => 'Mizani',
        'footer' => "Fanya biashara iwe rahisi, iweze kufikiwa na kufikiwa na mtu yeyote duniani kote."
    ],

    'verify-email' => [
        'subject' => "🙌 Kamilisha kujisajili kwa Selldone! Thibitisha kiungo.",
        'category' => "UKO HATUA MOJA",
        'title' => "Thibitisha anwani yako ya barua pepe",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "Ikiwa unatatizika kubofya kitufe cha Thibitisha, nakili na ubandike URL hapa chini kwenye kivinjari chako cha wavuti: :activation_url",
        'next-step' => "Kisha, tutakutumia nyenzo muhimu na mwongozo wa hatua kwa hatua ili iwe rahisi kwako kuongeza kikoa chako maalum, kupanga malipo, kuongeza bidhaa na kupata agizo lako la kwanza.",

    ],
    'verify-email-code' => [
        'subject' => "Nambari ya uthibitishaji ya :name",
        'category' => "SECURITY",
        'title' => "Nambari ya uthibitishaji ya barua pepe",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Duka Lako Liko Tayari| :name",
        'category' => "UKO HATUA MOJA",
        'title' => "Usanidi umekamilika",
        'account_title' => "Akaunti yako",
        'account_msg' => "Thibitisha na uingie kwenye akaunti yako kwa maelezo haya.",
        'shop_msg' => "Maelezo ya akaunti kwenye mfumo wa uendeshaji wa biashara wa Selldone.",

    ],

    'reset2fa' => [
        'category' => "UJUMBE RASMI WA USALAMA",
        'title' => "Omba lemaza kuingia kwa hatua 2",
        'message' => "Unapokea barua pepe hii kwa sababu tulipokea ombi la kuweka upya uthibitishaji wa vipengele viwili vya akaunti ya **:name** yenye barua pepe ya **:email**.<br><br>Tumepata maelezo yafuatayo kwa akaunti yako:",
        'footer' => "Ikiwa hukuomba kuweka upya nenosiri, hakuna hatua zaidi inayohitajika.",
        'action' => 'Zima kuingia kwa hatua mbili',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Duka lako liko tayari sasa!",
        'category' => "KUZALIWA DUKA MPYA MTANDAONI DUNIANI",
        'title' => "Hongera, :name!",
        'message' => "<b>Hongera, :name! Biashara yako mpya mtandaoni sasa inapatikana!</b> Tunayofuraha kukukaribisha kwa jumuiya ya Wauzaji. Umechukua hatua ya kwanza kuelekea mafanikio, na tuko hapa kukusaidia kila hatua unayofanya.<br>Sasa duka lako liko tayari, hebu tuhakikishe kuwa uko tayari kupokea malipo moja kwa moja kutoka kwa wateja wako na kuanza kukuza himaya yako. Ukiwahi kuhitaji usaidizi, tunakutumia ujumbe tu—timu yetu ya usaidizi iko hapa kwa ajili yako kila wakati.<br><br><b>Hatua Zinazofuata Muhimu:</b> Ili kuanza, hakikisha kuwa uko tayari kupokea malipo na utendakazi laini. Tutakuongoza katika kila hatua ili kufanya duka lako lifanye kazi kwa urahisi.",
        'pdf-book' => "Usikose kitabu kilichoambatishwa cha mkono: Fanya Biashara Yako Kama Mchezo",

        'account' => [
            'title' => 'Hatua ya 1: Fungua akaunti katika pochi ya Selldone',
            'message' => "Ili kuanza, fungua akaunti katika mkoba wako wa Selldone. Hapa ndipo ada zako zitakatwa, na pia ndipo utakapoongeza ili kuhifadhi duka lako likiendelea vizuri. Ikiwa usawa wako utawahi kuwa mbaya, usijali! Hifadhi yako itaendelea kufanya kazi bila kukatizwa.",
            'action' => 'Ingia kwenye mkoba',
        ],

        'shop-account' => [
            'title' => 'Hatua ya 2: unganisha akaunti kwenye duka',
            'message' => "Ifuatayo, unganisha akaunti yako ya mkoba kwenye duka lako. Nenda kwa <b>Store > Uhasibu > Ankara</b>, na uunganishe pochi yako. Hii inahakikisha kwamba malipo yote ya wateja yanawekwa moja kwa moja kwenye akaunti yako ya benki—Selldone haitoi kiasi chochote kutoka kwa mapato yako.",
            'action' => 'Hifadhi Paneli ya ankara',
        ],

        'gateway' => [
            'title' => 'Hatua ya 3: Unganisha Lango la Kulipa Mtandaoni',
            'message' => "Sasa, hebu tuweke lango lako la malipo mtandaoni. Nenda kwa <b>Store > Uhasibu > Port</b> na ubofye <b>Ongeza Mlango Mpya</b>. Chagua sarafu yako, na utaona orodha ya lango la malipo linalopatikana. Kuunganisha lango ni haraka na rahisi, lakini ikiwa unahitaji usaidizi wowote, jisikie huru kuangalia miongozo ya Selldone au uwasiliane nasi.",
            'action' => 'Ongeza lango kwenye duka',
        ],

        'domain' => [
            'title' => 'Hatua ya mwisho: kuunganisha kikoa maalum',
            'message' => "Sasa, unganisha kikoa chako maalum kwenye duka lako. Hii inaruhusu wateja kununua bidhaa au huduma zako na kukulipa moja kwa moja.",
            'action' => 'Kuanzisha na kupokea kadi za zawadi bila kikomo',
        ],
    ],


    'basket-list' => [
        'item' => "kipengee",
        'count' => "Hesabu",
        'price' => "bei",
        'discount-code' => "Msimbo wa Punguzo",
        'customer-club' => 'Klabu ya Wateja',
        'shipping' => "Usafirishaji",
        'total' => "Jumla",
        'offer' => "Toa",
        'coupon' => "Kuponi",
        'lottery' => "Tuzo",
        'tax' => "Kodi",
        'tax_included' => "Imejumuishwa katika bei",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Njia',
        'amount' => 'Kiasi',
        'giftcard' => 'Gift card',
        'payment' => 'Malipo',
    ],


    'shop-subscription-email' => [
        'category' => "Sasisho la usajili",
        'title' => "Leseni ya Hifadhi: :shop_title",
        'title-reserved' => "Leseni ya hifadhi: :shop_title",
        'title-active' => "Leseni inayotumika: :shop_title",
        'title-finished' => "Leseni iliyokamilika: :shop_title",
        'title-cancel' => "Ghairi leseni: :shop_title",
        'message' => "Mpango wako wa leseni ya duka umesasishwa,",
        'RESERVED' => "⚡ Mpango wako wa usajili **umehifadhiwa**.",
        'ACTIVE' => "🟢 Mpango wako wa usajili **umewezeshwa**.",
        'FINISHED' => "🚧 Mpango wako wa usajili **umekamilika**.",
        'CANCEL' => "⛔ Mpango wako wa usajili **umeghairiwa**.",
    ],

    'support' => [
        'subject' => "Kituo cha Usaidizi|:name alijibu",
        'category' => "Kituo cha usaidizi",
        'title' => "Umepokea jibu",
        'action' => "Fungua msimamizi wa duka",
    ],

    'shop-customer-join' => [
        'subject' => "Jiunge na :shop_title",
        'category' => "Sherehe ya mteja mpya",
        'title' => "Tuna furaha kwa uanachama wako",
        'action' => "Tembelea sasa",
    ],

    'shop-vendor-join' => [
        'subject' => "Upandaji wa Wauzaji| :shop_title",
        'category' => "Sherehe ya muuzaji mpya",
        'title' => "Tuna furaha kwa uanachama wako",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Kadi ya zawadi :shop_title",
        'category' => "Ongeza kadi mpya",
        'title' => "Hongera, umepokea kadi ya zawadi",
        'action' => "Nunua sasa",
        'message' => "Umepokea kadi ya zawadi yenye thamani ya :balance :currency. Unaweza kutumia kadi hii ya zawadi katika duka yetu.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Kituo cha Usaidizi| :shop",
        'category' => "msaada",
        'title' => "Umepokea jibu",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Uthibitishaji wa Agizo|Agiza :order_id",
        'title' => "agizo",
        'message' => "Umeagiza kwenye duka letu. Tumepokea agizo lako na tutakutumia barua pepe nyingine mara tu malipo yatakapothibitishwa."
    ,

        'payments' => 'Malipo',
    ],

    'order-payment' => [
        'subject' => "🛍️ Uthibitishaji wa Malipo|Agiza :order_id",
        'title' => "Agizo la malipo",
        'message' => "Malipo yako yamekamilika,<br> Tumepokea agizo lako. Tutakutumia barua pepe nyingine agizo lako litakaposafirishwa.",
    

        'payments' => 'Malipo',
    ],

    'order-update' => [
        'subject' => "🛍️ Usasishaji wa Hali ya Agizo|Agiza :order_id",
        'title' => "Sasisho la Hali ya Agizo",
        'message' => "Agizo lako limesasishwa. Unaweza kuangalia hali ya hivi punde ya agizo hili katika akaunti yako.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Agizo lako liko kwenye foleni ya kuchakatwa. Tutakuarifu itakapotayarishwa.",
                'OrderConfirm' => "Agizo lako limethibitishwa na maandalizi yameanza.",
                'PreparingOrder' => "Agizo lako linatayarishwa na litasafirishwa hivi karibuni.",
                'SentOrder' => "Agizo lako limesafirishwa. Utaipokea hivi karibuni.",
                'ToCustomer' => "Agizo lako limewasilishwa. Tunatumahi utaifurahia!",

                'PreparingOrder-PICKUP' => "Agizo lako linatayarishwa. Utapokea arifa ikiwa tayari kuchukuliwa.",
                'SentOrder-PICKUP' => "Agizo lako liko tayari kuchukuliwa. Tafadhali njoo dukani kuichukua.",
                'ToCustomer-PICKUP' => "Agizo lako limechukuliwa. Tunatumahi utaifurahia!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Agizo lako liko kwenye foleni ya kuchakatwa. Tutakuarifu ikiwa tayari.",
                'OrderConfirm' => "Agizo lako limethibitishwa na maandalizi yanaendelea.",
                'PreparingOrder' => "Agizo lako linatayarishwa na litatumwa kwako hivi karibuni.",
                'ToCustomer' => "Agizo lako la mtandaoni limewasilishwa kwa akaunti yako. Asante!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Ombi lako la huduma liko kwenye foleni. Tutakuarifu tukianza.",
                'OrderConfirm' => "Huduma yako imethibitishwa na tunajitayarisha kuanza.",
                'PreparingOrder' => "Tunatayarisha huduma yako, na tutakujulisha pindi tu itakapokamilika.",
                'ToCustomer' => "Huduma yako imekamilika. Asante kwa kutuchagua!"
            ],
            'FILE' => [
                'PreparingOrder' => "Faili yako inatayarishwa na itapatikana hivi karibuni.",
                'ToCustomer' => "Faili yako iko tayari na imewasilishwa. Sasa unaweza kuipakua."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Agizo lako la usajili liko kwenye foleni. Tutakuarifu uchakataji utakapoanza.",
                'OrderConfirm' => "Usajili wako umethibitishwa na unasanidiwa.",
                'PreparingOrder' => "Tunatayarisha usajili wako na utaanza hivi karibuni.",
                'SentOrder' => "Usajili wako umewezeshwa. Utapokea masasisho yanayoendelea.",
                'ToCustomer' => "Huduma ya usajili wako imeamilishwa."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Hongera :name|Vocha Mpya: :title',
        'category' => "HONGERA, VOCHA MPYA",
        'message' => "Hujambo :name,<br><br>Umepokea vocha mpya kama zawadi kutoka kwetu! Unaweza kupata vocha nyingi zaidi kwa kutambulisha Selldone kwa marafiki zako na kila mtu unayemjua. Vocha hii ina thamani ya **:price :currency**.<br><br>Umechukua hatua ya kwanza, na tuko hapa kukusaidia kufungua vipengele vipya kwa vocha yako! Tafadhali ingia kwa **:email** na utafute vocha yako kwenye Duka **Dashibodi** > **Mipangilio** > **Leseni**.<br><br>Hongera!",
        'action' => "Dashibodi yangu",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Hongera, Mpendwa :name|Umepokea Zawadi Maalum!',
        'category' => "Tangazo la kupokea zawadi",
        'title' => "Zawadi kwa ajili yako",
        'message' => "Hujambo :name, tumefurahi kukufahamisha kuwa umepokea zawadi maalum kutoka kwa Selldone! 🎉 Unaweza kupata zawadi zaidi kwa kukaa hai, kukuza duka lako, na kuboresha utaalam wako kwenye Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade leseni ya duka lako na ufungue zana zenye nguvu zaidi ili kukuza biashara yako ya mtandaoni!",
        'action' => "Zawadi",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Agizo Jipya Limepokelewa| :order_id",
        'title' => "New Order",
        'message' => "Umepokea agizo jipya. Tafadhali nenda kwenye ukurasa wa kuchakata agizo kwenye duka lako.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Taarifa Yako Iliyojazwa',
        'output-form-title' => 'Taarifa ya bidhaa iliyonunuliwa',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Ripoti ya Kila Wiki :time',
        'title' => 'Ripoti ya utendaji wa duka ya kila wiki',
        'message' => "Hii ni ripoti ya kila wiki ya duka lako kutoka <b>:start</b> hadi <b>:end</b>. Ripoti hii inajumuisha vidokezo vya kuboresha biashara yako, unaweza pia kuangalia hali ya duka lako la mtandaoni na maagizo ya hivi majuzi. Natumai una siku na wiki njema mbeleni."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Ripoti yako ya kuokoa :amount katika miezi mitatu iliyopita| :shop_title',
        'title' => 'Ripoti ya msimu kuhusu shughuli zako za biashara, zawadi na akiba ya kifedha',
        'message' => "Hii ni ripoti yako ya msimu ya <b>:shop_title</b> kutoka <b>:start</b> hadi <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Akaunti zilizounganishwa',
        'sub-title' => 'Je, hali ya hivi punde ya akaunti za pochi iliyounganishwa kwenye duka langu ni ipi?',
        'view-wallet' => 'Tazama mkoba',
        'tip-title' => 'Vidokezo muhimu',
        'tip' => "Sanidi mkoba wa bure wa Selldone na uuunganishe na duka lako. Hata kama salio lako ni hasi, wateja wako bado wanaweza kununua na kulipa bila matatizo yoyote. Usijali, shughuli na data ya duka lako itaendelea bila matatizo kwa hadi mwezi 1, bila kukatizwa.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Unganisha kwenye akaunti'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Programu zilizosakinishwa',
        'sub-title' => 'Orodha ya programu ambazo umesakinisha kwenye duka lako wiki hii.',
        'tip' => "Je, ungependa kupata programu zaidi za duka lako?",
        'view-app-store' => 'Tembelea Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Vijibu vyako vya Hifadhi',
        'sub-title' => 'Boti za mauzo zinazotumika kwenye duka langu.',
        'tip-title' => 'Uuzaji wa Bot',
        'tip' => "Selldone imekupa roboti za mauzo otomatiki. Unachohitajika kufanya ni kwenda kwenye kidirisha cha Viongezi> Boti na uamilishe roboti zako za duka. Kumbuka kwamba huduma husika lazima ipatikane katika nchi yako.",
        'view-bots' => 'Dhibiti roboti',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Mawasiliano na Wateja',
        'sub-title' => 'Je, ni watu wangapi ambao nimekuwa nao na wateja wangu wiki hii?',
        'faqs' => 'maswali yanayoulizwa mara kwa mara',
        'tickets' => 'Tiketi za Wateja',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Hali ya Watumiaji',
        'sub-title' => 'Shughuli kutoka :start hadi :end',
        'users' => [
            'title' => 'Wateja',
            'subtitle' => 'Watumiaji wa Kujiandikisha',
        ],
        'views' => [
            'title' => 'Ziara',
            'subtitle' => 'Umetembelea duka mara ngapi',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Watumiaji Waliorudishwa',

        'shop_views' => 'Maoni ya Duka',
        'baskets' => [
            'title' => 'Mikokoteni ya Ununuzi',
            'subtitle' => 'Ripoti idadi ya mikokoteni mpya ya ununuzi',
        ],
        'products' => [
            'title' => 'Muhtasari wa Bidhaa',
            'subtitle' => 'Hali ya bidhaa katika duka kwa aina',
            'value_name' => 'Bidhaa'
        ],
        'products_count' => 'Aina za bidhaa',
        'views_count' => 'Idadi ya maoni',
        'sell_count' => 'Idadi ya mauzo',
        'send_count' => 'Idadi ya usafirishaji',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Usafirishaji wa Kuacha',
        'sub-title' => 'Jopo kwa wauzaji wakuu wa Drop Shipping Selldone.',
        'total_fulfillments' => 'Jumla ya Maagizo Yaliyopokelewa',
        'ds_count' => 'Maagizo Yaliyopokelewa',
        'statistics_title' => 'Ripoti kupokea maagizo',
        'ds_cancels' => 'Ghairi kwa muuzaji wa kiolesura',
        'ds_rejects' => 'Ghairi na Wewe',
        'tip' => "Je, wewe ni muuzaji mkuu wa bidhaa? Je, unamiliki ghala, kiwanda au msambazaji wa bidhaa? Unaweza kutoa bidhaa zako kwa wauzaji wengine katika huduma ya Selldone Drop Shipping ili kuuza bidhaa yako kwa kiwango kikubwa. Tutumie barua pepe kwa support@selldone.com ili kukuongoza.",
        'view-drop-shipping-panel' => 'Ingia kwenye paneli ya jumla',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Viwango vya ubadilishaji',
        'sub-title' => 'Orodha ya viwango vya hivi punde vya ubadilishaji wa sarafu katika duka lako.',
        'from' => 'Sarafu Chanzo',
        'to' => 'Sarafu ya lengwa',
        'rate' => 'Kiwango cha ubadilishaji',
        'view-exchange-panel' => 'Dhibiti Viwango vya ubadilishaji',
    

        'vew-exchange-panel' => 'jopo la usimamizi wa viwango vya ubadilishaji',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Mikataba ya wataalam',
        'sub-title' => 'Ni wataalamu gani hufanya kazi kwenye duka langu?',
        'cost' => 'Kiasi cha mkataba',
        'duration' => 'Muda',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Tarehe ya Kughairi',
        'end_at' => 'Tarehe ya utoaji',
        'tip' => 'Unaweza kuajiri wataalamu bora katika Selldone ili kukuza biashara yako.',
        'view-experts' => 'Bofya ili kuanza.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Njia Zinazotumika za Malipo kwenye Duka Lako :shop',
        'tip-title' => 'Vidokezo muhimu',
        'tip' => "Nenda kwenye ukurasa wa usimamizi wa tovuti katika duka lako na uongeze angalau mlango mmoja baada ya dakika chache. Wateja wako wanapenda kulipa haraka na kwa usalama kupitia lango za mtandaoni.",
        'view-shop-gateways' => 'Ingia kwenye usimamizi wa tovuti ya duka langu.',
        'view-gateways' => 'Tazama malango zaidi',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Maagizo',
        'sub-title' => 'Orodha ya maagizo niliyopokea wiki hii.',
        'total_baskets' => 'Jumla ya Maagizo',
        'total_posBaskets' => 'Jumla ya Maagizo ya Fedha',
        'pos-title' => 'Sanduku la Duka la POS',
        'chart-label' => 'Maagizo yamekamilika (maagizo haya si lazima yalipwe!)',
        'tip-title' => 'Unapaswa kujaribu zaidi ...',
        'tip' => "Hakuna mafanikio rahisi.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Kituo cha usindikaji',
        'sub-title' => 'Je, ni kiasi gani cha agizo tulilochakata dukani wiki hii?',
        'tip-title' => 'Hukuwa na mauzo!',
        'tip' => "Kwa bahati mbaya hukuwa na mauzo yoyote wiki hii. Unahitaji kupata zaidi kwenye duka lako. Unaweza kuongeza bidhaa zaidi, kuchagua picha bora au kuandika maelezo bora ya bidhaa zako. Fikiria kazi ya wakati wote kwa biashara yako. Ukifanya vizuri na usikatishwe tamaa, utafanikiwa.",
        'view-process-center' => 'Angalia kituo cha mchakato',
        'return' => [
            'title' => 'Agizo Limerejeshwa',
            'subtitle' => 'Ripoti zilizorudishwa amri.',
            'tip-title' => 'Je, wajua kuwa...',
            'tip' => "Unaweza kuunda rejista nyingi za pesa unavyohitaji na Selldone POS! Iwe ni kompyuta yako kibao, simu ya mkononi, au kompyuta ya mkononi, unaweza kubadilisha kifaa chochote kuwa sehemu ya mauzo ya duka lako. Ni rahisi, haraka kusanidi, na imeandaliwa kikamilifu kwa seva yako. Anza kuitumia leo!",
            'view-pos' => 'Ingia kwa Keshia Yangu ya Duka la Mtandaoni'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Vikao',
        'sub-title' => 'Je, nilitembelea duka langu mara ngapi?',
        'countries-title' => 'Ni nchi gani zimetembelewa zaidi?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Je! Unataka kupata pesa bila kutumia pesa moja?',
        'message' => "Mpendwa :name, unaweza kwenda kwenye Dashibodi > Uchumaji wa mapato na uunde kiungo cha rufaa. Tuma kiungo kwa marafiki zako, Unapokea kadi za zawadi za Selldone na asilimia ya malipo ya rafiki yako. Kumbuka kwamba kadi ya zawadi itatumwa kwa wewe na rafiki yako.",
        'action' => 'Tazama kiunga changu cha utangulizi',
        'mail-clip' => "<b style='color: #C2185B'>Muhimu:</b> Ikiwa unatumia huduma za barua pepe kama vile Gmail zinazoweka kikomo cha urefu wa barua pepe, tafuta chaguo lifuatalo mwishoni mwa barua pepe ili kuonyesha ripoti kamili na ubofye juu yake:",

        'no-coin-reward' => "<b style='color: #C2185B'>Samahani:</b> Shughuli yako haikukidhi mahitaji ya kupata zawadi ya Sarafu za SEL bila malipo. Jaribu zaidi na uuze zaidi kwenye duka lako kwa msimu ujao.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Hongera:</b> Kazi nzuri! Kulingana na utendakazi wako bora, tumeweka sarafu za :amount SEL kwenye akaunti yako kama zawadi.",

        'need-buy-license' => "<b>Ngazisha Biashara Yako:</b> Inaonekana bado hujasajili mpango wowote wa usajili wa tovuti yako! Boresha sasa ili ufungue vipengele zaidi kwa :amount pekee kwa mwezi ikiwa italipwa kila mwaka.",
        'not-afford-message' => "Ikiwa huwezi kumudu au una shida yoyote na malipo, jisikie huru kutuambia kupitia support@selldone.com.",
        'add-domain' => "<b>Kwa nini usiwe na kikoa maalum cha biashara yako?</b><br> Ongeza kikoa kwenye tovuti yako sasa; ni bure!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone ni<del> bidhaa</del> <span style = 'color: forestgreen'>jamii</span> .<br> Kuwa Selldoner kitaaluma!",
        'message' => "Fuata kurasa rasmi za Selldone kwenye Twitter, LinkedIn na mitandao ya kijamii. Tutumie maoni, maombi au ukosoaji wowote au ushiriki katika majadiliano kuhusu Selldone. Sisi pia ni sehemu ya jumuiya ya Selldone ambayo <b>Wewe hufanya</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Maagizo Mapya ya Parachichi Yamepokelewa|:shop_title :time',
        'title' => "Ripoti ya utendaji kwa saa 24 zilizopita",
        'message' => "Wateja wako wanasubiri maagizo yako yakaguliwe na kuwekewa bei. Jibu maombi ya wateja wako haraka iwezekanavyo ili kupata mauzo zaidi.",
        'card_title' => "Maagizo kwenye foleni",
        'card_subtitle' => "Tangu :date",

        'card_payed' => "Amri zilizolipwa"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Jibu chapisho lako katika :community_title',
        'title' => ":name, na :count wengine walitoa maoni kwenye machapisho yako.",
        'message' => "Hujambo :name, machapisho yako yanazingatiwa! Umepokea maoni katika jumuiya yetu. Ingia kwenye akaunti yako ili ujiunge na mjadala na uone kila mtu anasema nini.",
        'title-simple' => ":name alitoa maoni kwenye machapisho yako.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Jibu mada yako :topic_title',
        'title' => ":name, na :count wengine walijibu juu ya mada yako.",
        'message' => "Hi :name, mada yako inazingatiwa! Umepokea majibu katika jumuiya yetu. Ingia kwenye akaunti yako ili ujiunge na mjadala na uone kila mtu anasema nini.",
        'title-simple' => ":name ilijibu juu ya mada yako.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Ingia Mpya :name',
        'category' => 'Arifa za usalama',
        'title' => "Ingia kwa Akaunti",
        'message' => "Mpendwa :name, kuingia kwa akaunti yako ya Selldone kulitambuliwa.",   // Login in selldone (seller)
        'message-shop' => "Mpendwa :name, umeingia kwenye :shop_title .",  // Login in shop (buyer)

        'footer' => "Ikiwa hujaingia, tafadhali badilisha nenosiri lako.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Uondoaji",
        'deposit' => "Amana",

        'withdraw_subject' => "Ondoka kwenye akaunti :account",
        'deposit_subject' => "Amana kwa akaunti :account",

        'message' => "Uhamisho wa pesa umefanywa kwa vigezo vifuatavyo.",

        'type' => "Aina ya muamala",

        'from' => "Akaunti ya chanzo",
        'to' => "Destination account",

        'desc' => "Maelezo ya muamala",
        'action' => "Tazama muamala",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Muhimu! Ukiukaji wa sheria| :shop",
        'category' => "Taarifa muhimu",
        'title' => "Duka lako limeadhibiwa",
        'action' => "Fungua dashibodi ya duka",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter imekualika ujiunge na Selldone",
        'title' => ":name imekutumia :amount ili kukusaidia kuzindua duka lako jipya la mtandaoni na kulichuma mapato!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Kubali mwaliko",
        'owner' => "Mmiliki wa",
        'join-date' => "Kwenye Selldone tangu",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Kiungo cha kurejesha| :shop",
        'category' => "Usalama wa duka",
        'title' => "Kiungo cha uokoaji cha <b>:shop_name</b> .",
        'message' => "Barua pepe hii ilitumwa kwako kwa sababu uliomba kurejesha duka lako. Kubofya kiungo kilicho hapa chini kutaokoa duka lako na data yote inayomilikiwa nayo.",
        'action' => "Thibitisha Urejeshaji wa Duka",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Je, Selldone alihifadhi pesa ngapi kwa biashara yako?',
        'sub-title' => 'Kuanzia tarehe :start hadi :end',
        'infrastructure' => [
            'title' => 'Miundombinu',
            'subtitle' => 'Seva, CDN, Hifadhi, na huduma zingine za wingu',
        ],
        'experts' => [
            'title' => 'Wataalam na Wafanyakazi',
            'subtitle' => 'Watengenezaji, matengenezo na usaidizi',
        ],
        'total_save' => 'Jumla ya pesa zilizohifadhiwa'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Utendaji wako',
        'sub-title' => 'Muhtasari wa biashara kutoka :start hadi :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Watumiaji Waliorudishwa',

        'shop_views' => 'Maoni ya Duka',
        'baskets' => [
            'title' => 'Mikokoteni ya Ununuzi',
            'subtitle' => 'Ripoti idadi ya mikokoteni mpya ya ununuzi',

        ],
        'products' => [
            'title' => 'Muhtasari wa Bidhaa',
            'subtitle' => 'Hali ya bidhaa katika duka kwa aina',
            'value_name' => 'Bidhaa'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Jumla ya mionekano ya ukurasa wa tovuti',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Umepokea agizo jipya. Tafadhali nenda kwenye ukurasa wa kuchakata agizo katika paneli yako ya muuzaji.",
        'subject' => "🛍️ Agizo Jipya Limepokelewa| :order_id",
        'your_revenue' => "Mapato Yako",
    ],
    'vendor-invite' => [
        'title' => 'Mwaliko wa Muuzaji',
        'message' => "Umepokea mwaliko wa kuwa mchuuzi wa :shop_name. Unaweza kuikubali au kuikataa kwa kubofya vitufe vifuatavyo.",
        'subject' => ":shop_name |Mwaliko wa kuwa mchuuzi wetu",
        'accept' => "Kubali na Uwe Muuzaji",
        'reject' => "Kataa",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Mwaliko wa Kujiunga na Timu Yetu',
        'message' => "Umealikwa kujiunga na :vendor_name katika :shop_name. Unaweza kukubali au kukataa mwaliko huu kwa kutumia vitufe vilivyo hapa chini.",
        'subject' => "Mwaliko wa Kujiunga na :vendor_name|Kuwa Mwanachama wa Timu",
        'accept' => "Kubali na Ujiunge na Timu",
        'reject' => "Kataa",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Nambari yako ya Kuingia ya :shop",
        'header-message' => "Tunakutumia barua pepe hii kwa sababu uliomba msimbo wa kuingia katika duka. Tafadhali tafuta Nenosiri lako la Wakati Mmoja (OTP) hapa chini:",
        'footer-message' => "Nambari hii itatumika kwa dakika 10. Ikiwa hukuomba msimbo huu wa kuingia, tafadhali puuza barua pepe hii."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Thibitisha barua pepe yako| :shop",
        'title' => 'Uthibitishaji wa Barua Pepe',
        'header-message' => "Hi :name,<br>Tafadhali thibitisha kwamba **:email** ni anwani yako ya barua pepe kwa kubofya kitufe kilicho hapa chini au kutumia kiungo kilicho hapa chini ndani ya saa 48.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Sasisho za Bidhaa| :shop",
        'title' => "Sasisha kuhusu Hali ya Bidhaa - Saa 24 Zilizopita",
        'message' => "Natumai ujumbe huu utakupata vyema. Hili ni sasisho fupi la kukuarifu kuhusu hali ya bidhaa zako kwenye jukwaa letu katika muda wa saa 24 zilizopita.\nKatika kipindi hiki, kumekuwa na mabadiliko katika hali ya baadhi ya bidhaa. Mabadiliko haya yanaweza kutokana na ununuzi, masasisho ya hisa au matukio mengine yanayohusiana.\nKwa maelezo zaidi kuhusu kila bidhaa, tafadhali ingia katika akaunti yako na uangalie sehemu ya 'Hali ya Bidhaa'.",
        'action' => "Fungua Paneli ya Wauzaji",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Maagizo ya Wingi Yamepokelewa| :shop | :date",
        'title' => "Arifa ya Maagizo mengi",
        'message' => "Umepokea kundi la maagizo mengi. Tafadhali tembelea ukurasa wa kuchakata agizo kwenye paneli yako kwa maelezo zaidi. Unaweza pia kupakua orodha ya agizo kupitia kiungo salama kilichotolewa, halali kwa siku 7. <br><br>\n        <b>MUHIMU:</b> Kiungo hiki ni halali kwa siku 7.<br>\n        Kiungo hiki kinabadilika, kwa hivyo kila unapokibofya, utapokea maagizo yaliyosasishwa zaidi kwa tarehe hii mahususi. <b>Inamaanisha ikiwa hali ya malipo ya agizo itabadilika na kuwa kukataliwa, hutaona tena agizo hilo katika CSV iliyopakuliwa, au agizo likilipwa, litaonekana kwenye orodha.</b><br><br>\n        <ul>\n            <li> CSV ina maagizo yaliyolipishwa na tarehe iliyohifadhiwa katika :date.</li>\n            <li>Tarehe iliyohifadhiwa ni tarehe ambayo mtumiaji anabofya kulipa kwenye ukurasa wa kuagiza.</li>\n        </ul>\n        <b>Ili kuzuia maagizo yanayorudiwa, angalia Agizo la ID kila wakati kabla ya kutuma.</b>",
        'action' => "Pakua Orodha ya Agizo",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Baadhi ya bidhaa katika agizo lako hazikukubaliwa na haziwezi kuwasilishwa. Kiasi cha bidhaa hizi kitarejeshwa kwenye kadi yako hivi karibuni."
    ]

];
