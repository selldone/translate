<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Šia žinute sveikiname naują pirkėją parduotuvėje.',
        ShopMailTemplateCodes::OrderCheckout => 'Šis pranešimas išsiunčiamas, kai pirkėjas patvirtina užsakymą.',
        ShopMailTemplateCodes::OrderPayment => 'Šis pranešimas patvirtina sėkmingą kliento mokėjimą.',
        ShopMailTemplateCodes::OrderUpdate => 'Šis pranešimas siunčiamas siekiant informuoti pirkėją apie užsakymo būseną.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Šis pranešimas siunčiamas pardavėjui, kad praneštų apie patvirtintą užsakymą.',
        ShopMailTemplateCodes::PosCheckout => 'Šis pranešimas siunčiamas siekiant patvirtinti pirkėjo pardavimo taško užsakymą.',
        ShopMailTemplateCodes::PosPayment => 'Šis pranešimas patvirtina pirkėjo atliktą mokėjimą pardavimo vietoje.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Šiuo pranešimu pardavėjas pranešamas apie pirkinį, įsigytą jo pardavimo vietoje.',
        ShopMailTemplateCodes::ShopContact => 'Šis pranešimas išsiunčiamas, kai pateikiama kontaktinė forma.',
        ShopMailTemplateCodes::ShopGiftCard => 'Šis pranešimas informuoja vartotoją, kad jis gavo dovanų kortelę.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Šis pranešimas sveikina naują pardavėją parduotuvėje.',
        ShopMailTemplateCodes::ShopVendorInvite => "Šis pranešimas išsiųstas pakviesti pardavėją prisijungti prie jūsų prekyvietės.",
        ShopMailTemplateCodes::ShopVendorOrder => "Šis pranešimas siunčiamas tiekėjui, kai gaunamas užsakymas, kurio būsena yra apmokėta arba grynaisiais pristatymo metu (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Siunčiamas kasdien, kad pardavėjai būtų informuoti apie savo produktų būseną.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Šis pranešimas išsiųstas siekiant pakviesti pardavėją prisijungti prie jūsų prekyvietės.",

        ShopMailTemplateCodes::UserLogin => "Saugumo sumetimais praneškite vartotojui pateikdami prisijungimo duomenis, įskaitant IP adresą, datą ir įrenginį.",
        ShopMailTemplateCodes::LoginCode => "Išsiųskite vienkartinį slaptažodžio kodą, kad vartotojai galėtų prisijungti prie parduotuvės.",

        ShopMailTemplateCodes::EmailVerifyLink => "Siųskite nuorodą, kad patvirtintumėte vartotojo el. pašto adresą. Šis el. laiškas siunčiamas, kai vartotojas užsiregistruoja SMS ir įveda savo el. Jis nesiunčiamas, kai vartotojas tiesiogiai registruojasi naudodamas socialinį prisijungimą arba el.",

        ShopMailTemplateCodes::EmailBulkOrder => "Siųsti masiškai gautų ir apmokėtų užsakymų sąrašą konkrečiai dienai."


    ,

    ],


    'global' => [
        'greetings' => 'Sveiki, :name!',
        'end-statement' => 'Palaikymo komanda',

        'receiver_name' => 'Sveiki :user_name',
        'footer-help' => "Reikia pagalbos? Klauskite [support@selldone.com](mailto:support@selldone.com) arba apsilankykite mūsų [pagalbos centre] (https://selldone.com/community).",
        'selldone-team' => 'Selldone komanda',
        'footer-shop' => "Jei jums reikia pagalbos dėl ko nors, nedvejodami rašykite mums el. paštu: :shop_mail",
        'accept' => "Priimti",
        'reject' => "Atmesti",
        'verify' => "patikrinti",
        'title' => "Pavadinimas",
        'value' => "Vertė",
        'description' => "apibūdinimas",
        'shop' => "Parduotuvė",
        'shop-info' => "Parduotuvės informacija",
        'user' => "Vartotojas",
        'user-info' => "Sąskaitos informacija",
        'license' => "Licencija",
        'status' => "Būsena",
        'start' => "Pradėti",
        'end' => "Pabaiga",
        'renewal' => "Atnaujinimas",
        'view' => "Žiūrėti",

        'balance' => "Balansas",
        'card_number' => "Kortelės numeris",
        'cvv' => "Cvv",
        'expire_date' => "Galiojimo pabaigos data",

        'Dashboard' => "Prietaisų skydelis",
        'order' => "tvarka",
        'view_order' => "Peržiūrėti užsakymą",
        'pay_now' => "Pay now",

        'official_selldone' => "OFICIALIAI PARDUOTA",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valiuta",
        'free-balance' => "Laisvas balansas",
        'locked-balance' => "Užrakintas balansas",
        'bot' => "Botas",
        'requests' => "Prašymai",
        'baskets' => 'Vežimėliai',
        'physical' => "Fizinis",
        'virtual' => "Virtualus",
        'file' => "Failas",
        'service' => "Aptarnavimas",
        'fulfillment' => "Išsipildymas",
        'open' => "Atviras",
        'reserved' => "Rezervuota",
        'canceled' => "Atšauktas",
        'payed' => "Mokama",
        'cod' => "COD",
        'orders-count' => 'Užsakymai',
        'payments-count' => 'Mokėjimai',
        'confirms-count' => 'Patvirtina',
        'sends-count' => 'Siunčia',
        'delivers-count' => 'Pristato',
        'count' => 'Suskaičiuoti',
        'transactions-count' => 'Sandoriai skaičiuojami',
        'success-transactions' => 'Sėkmingi sandoriai',
        'total-amount' => 'Visas kiekis',
        'amount' => 'Suma',
        'wage' => 'Darbo užmokestis',
        'debug' => 'Derinimas',
        'pos' => 'POS',
        'live' => 'Tiesiogiai',
        'CheckQueue' => 'Patikrinkite eilę',
        'OrderConfirm' => 'Užsakymo patvirtinimas',
        'PreparingOrder' => 'Ruošiame užsakymą',
        'SentOrder' => 'Išsiųstas užsakymas',
        'ToCustomer' => 'Pristato klientui',
        'Pending' => 'Kol',
        'Accepted' => 'Priimta',
        'Rejected' => 'Atstumtas',
        'pc' => 'PC',
        'tablet' => 'Tablėtė',
        'phone' => 'Telefonas',
        'total' => 'Iš viso',
        'view-detail' => 'Parodyti detales',
        'empty' => 'Tuščia',
        'dropshipping' => 'Dropshippingas',
        'reply' => 'Atsakyti',
        'reactions' => 'Reakcijos',
        'Comments' => 'Komentarai',
        'last-comment' => 'Paskutinis komentaras',
        'response-to' => 'Atsakymas į',
        'posts' => 'Įrašai',
        'post' => 'Įrašas',

        'name' => 'vardas',
        'email' => 'El. paštas',
        'type' => 'tipo',
        'device' => 'Įrenginys',
        'platform' => 'Platforma',
        'browser' => 'Naršyklė',
        'time' => 'Laikas',
        'Wallet' => 'Piniginė',
        'date' => 'Data',

        'account' => 'sąskaita',
        'transaction' => 'Sandoris',
        'fee' => 'Rinkliava',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategorija',
        'password' => 'Slaptažodis',
        'verify-login' => "Patvirtinkite ir prisijunkite",
        'url' => 'URL',
        'avocado' => 'Avokadas',
        'hyper' => 'Hiper',
        'buy-now' => "Pirkti dabar",
        'add-domain' => "Add Domain",
        'views' => 'Peržiūrėjo',


        'country' => 'Šalis',
        'address' => 'adresu',
        'postal' => 'Pašto kodas',
        'building_no' => 'Pastatas Nr.',
        'building_unit' => 'Vienetas Nr.',
        'message' => 'Pranešimas',


        'customer' => 'Klientas',
        'cart-items' => 'Krepšelio prekės',
        'payment' => 'Mokėjimas',
        'receiver' => 'Imtuvas',
        'virtual-items' => 'Virtualūs daiktai',
        'no-payment' => 'Jokio mokėjimo!',

        'enable' => 'Įgalinti',
        'access' => 'Prieiga',
        'bank' => 'Banko informacija',

        'vendor' => 'Pardavėjas',

        'view_content' => "Žiūrėti visą turinį",
        'files' => 'Failai',
        'download' => 'parsisiųsti',
        'file_name' => 'Failo pavadinimas',
        'file_size' => 'Dydis',

        'subscription' => 'Prenumerata',
        'products' => 'Produktai',
        'vendor_products' => 'Pardavėjo produktai',

        'pickup' => 'Paėmimas',

        'minutes' => 'Minutės',
        'hours' => 'Valandos',

        'refund' => 'Grąžinti pinigus',
        'recipient_address' => 'Gavėjo adresas',
        'signature' => 'Parašas',
        'blockchain' => 'Blockchain',
        'details' => 'Detalės',


    

        'Shop' => 'Parduotuvė',
        'dashboard' => 'prietaisų skydelis',
        'comments' => 'komentarus',
        'wallet' => 'piniginė',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone verslo OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone veiklos ataskaita'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone sezoninė ataskaita'
        ],
        'Onboarding' => [
            'id' => 'labas',
            'name' => 'Selldone prekybininkai'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Palaikymas :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'labas',
            'name' => 'Selldone bendruomenė'
        ],
        'NewShop' => [
            'id' => 'pirkliai',
            'name' => 'Selldone prekybininkai'
        ],
        'Approve' => [
            'id' => 'patvirtinti',
            'name' => 'Selldone prekybininkai'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Užsakymų valdymas :name'
        ],

        'Recovery' => [
            'id' => 'atsigavimas',
            'name' => 'Selldone atkūrimo komanda'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Laukiama ⌛',
        'PAYED' => 'Mokama ✅',
        'CANCELED' => 'Atšauktas ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administratorius',
            'OFFICER' => 'Pareigūnas ir prižiūrėtojas',
            'AUDITING' => 'Audito vadovas',
            'EMPLOYEE' => 'Darbuotojas',
            'PRODUCT' => 'Produktų vadovas',
            'CONTENT' => 'Turinio tvarkyklė',
            'MARKETING' => 'Marketingo vadybininkas',
            'VIEWER' => 'Žiūrovas',

        ],
        'subject' => ":inviter pakvietė jus kaip :level| :shop",
        'category' => "Darbuotojų kvietimas",
        'title' => "Jūs buvote pakviesti į <b>:shop_name</b> kaip <b>:level</b> .",
        'message' => "Gavote kvietimą bendradarbiauti su <b>:shop_title</b> komanda versle. Turite galimybę priimti arba atmesti šį pasiūlymą. Jei nuspręsite sutikti, prisijunkite prie Selldone paslaugos, kad patvirtintumėte savo sprendimą. Patvirtinę gausite prieigą prie parduotuvės valdymo skyriaus.",

    ],

    'welcome-email' => [
        'subject' => "👋 Sveiki atvykę į :name, pradėkime nuo Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Sveiki atvykę į Selldone",
        'message' => "Dėkojame, kad pasirinkote Selldone! Dabar esate gyvybingos bendruomenės, jungiančios pasaulinius pardavėjus su klientais, vietines įmones su įmonėmis ir asmenis su korporacijomis, dalis. Visi mūsų „Master“ ir „Pro“ įrankiai yra prieinami **nemokamai** ir **neribotai**. Esame čia, kad palaikytume jus ir atvertume duris jūsų sėkmei.",

        'index' => "Žingsnis :step.",

        'step-domain' => [
            'title' => 'Pridėkite tinkintą domeną',
            'message' => "Norėdami pradėti, nemokamai pridėkite tinkintą domeną parduotuvės prietaisų skydelyje, skiltyje Nustatymai > Domenų nustatymai.",
            'action' => 'Tvarkyti mano domenus',
        ],
        'step-landing' => [
            'title' => 'Tinkinkite savo pagrindinį puslapį',
            'message' => "Suasmeninkite savo pagrindinį puslapį apsilankę Prietaisų skydelis > Puslapiai. Pasirinkite nukreipimo puslapį arba sukurkite naują. Tai paprasta ir intuityvu, todėl galite iškart pradėti dirbti.",
            'action' => 'Tinkinkite mano nukreipimo puslapį',
        ],
        'step-payment' => [
            'title' => 'Nustatykite mokėjimo būdus',
            'message' => "Pradėkite priimti mokėjimus tiesiai į savo banko sąskaitą. Jei norite prisijungti prie mokėjimo paslaugų teikėjų, pvz., „Stripe“, „PayPal“ ir kt., eikite į Dashboard > Accounting > Gateway.",
            'action' => 'Pridėti mokėjimo būdus',
        ],
        'step-products' => [
            'title' => 'Pridėkite savo produktus',
            'message' => "Lengvai pridėkite produktų ir kategorijų informacijos suvestinėje > Produktai. Tai lygiai taip pat, kaip tvarkyti failus ir aplankus kompiuteryje – visiškai paruošta nuvilkti. Taip pat galite masiškai importuoti produktus naudodami „Excel“. Yra pavyzdinis šablonas, kuris padės jums pradėti.",
            'action' => 'Tvarkykite mano produktus',
        ],
        'step-shipping' => [
            'title' => 'Nustatykite pristatymo būdus',
            'message' => "Norėdami apmokestinti klientus už pristatymą, apibrėžkite pristatymo būdus informacijos suvestinėje > Logistika > Siuntimas. Įvairiose vietose galite nustatyti skirtingas kainas ir palaikymą. Nepamirškite nustatyti savo sandėlio kilmės Prietaisų skydelyje > Logistika > Sandėlis.",
            'action' => 'Tvarkyti pristatymo būdus',
        ],
    

        'seller' => [
            'title' => 'Ar esate pardavėjas?',
            'message' => 'Norėdami pradėti prekiauti, įveskite savo prietaisų skydelį Selldone naudodami toliau pateiktą nuorodą ir sukurkite savo pirmąją parduotuvę visiškai nemokamai. Tai užtruks kelias minutes ir turėsite savo parduotuvę bei internetinę svetainę. Tada nukreipsime jus į kitus veiksmus ir gausime mokėjimo šliuzą.',
            'action' => 'Prisijunkite prie mano prietaisų skydelio',
        ],
        'buyer' => [
            'title' => 'Aš esu pirkėjas',
            'message' => 'Sveikinu. Kai būsite Selldone narys, atsikratysite visų narystės ir autentifikavimo problemų internetinėse parduotuvėse. Norėdami gauti naudos iš bet kurios parduotuvės ir svetainės, kurioje naudojama Selldone platforma, galite prisijungti vienu paspaudimu ir apsipirkti paprastai, greitai ir saugiai.',
        ],
    ],


    'charge-account' => [
        'category' => 'Piniginė > Paskyra > Mokestis',
        'title' => "Sėkmės mokestis",
        'message' => "Jūsų sąskaita <b>:account_number</b> sėkmingai apmokestinta <b>:amount</b>.",
        'account' => 'sąskaita',
        'charge' => 'Apmokestinti',
        'balance' => 'Balansas',
        'footer' => "Padarykite verslą lengvą, pasiekiamą ir prieinamą visiems visame pasaulyje."
    ],

    'verify-email' => [
        'subject' => "🙌 Užbaikite savo registraciją į Selldone! Patvirtinti nuorodą.",
        'category' => "JŪS LIKO VIENAS ŽINGSNIS",
        'title' => "Patvirtinkite savo elektroninį paštą",
        'message' => "Sveiki, :name,<br><br> Dėkojame, kad pasirinkote Selldone!<br><br> Norėdami patvirtinti, kad <b>Q:email</b> yra teisingas el. pašto adresas, spustelėkite toliau pateiktą nuorodą arba naudokite toliau pateiktą nuorodą. Turite 48 valandas užbaigti šį patvirtinimą.",
        'footer' => "Jei kyla problemų spustelėjus mygtuką Patvirtinti, nukopijuokite ir įklijuokite toliau pateiktą URL į savo žiniatinklio naršyklę: :activation_url",
        'next-step' => "Tada atsiųsime jums naudingos medžiagos ir nuoseklų vadovą, kad galėtumėte lengvai pridėti tinkintą domeną, nustatyti mokėjimus, pridėti produktų ir gauti pirmąjį užsakymą.",

    ],
    'verify-email-code' => [
        'subject' => "Patvirtinimo kodas, skirtas :name",
        'category' => "SECURITY",
        'title' => "Pašto patvirtinimo kodas",
        'message' => "Sveiki, :name, <br><br> Norėdami patvirtinti, kad <b>:email</b> yra jūsų teisingas el. pašto adresas, per kitą <b>Q10 minučių </b> įveskite šį kodą:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Jūsų parduotuvė paruošta| :name",
        'category' => "JŪS LIKO VIENAS ŽINGSNIS",
        'title' => "Sąranka baigta",
        'account_title' => "Jūsų sąskaita",
        'account_msg' => "Patvirtinkite ir prisijunkite prie savo paskyros naudodami šią informaciją.",
        'shop_msg' => "Paskyros informacija apie Selldone verslo operacinę sistemą.",

    ],

    'reset2fa' => [
        'category' => "OFICIALUS SAUGUMO PRANEŠIMAS",
        'title' => "Prašyti išjungti prisijungimą dviem veiksmais",
        'message' => "Gavote šį el. laišką, nes gavome užklausą iš naujo nustatyti dviejų veiksnių autentifikavimą **:name** paskyroje su **:email** el. paštu.<br><br>Radome šią paskyros informaciją:",
        'footer' => "Jei neprašėte iš naujo nustatyti slaptažodžio, nereikia atlikti jokių veiksmų.",
        'action' => 'Išjungti dviejų žingsnių prisijungimą',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Jūsų parduotuvė jau paruošta!",
        'category' => "GIMI NAUJA INTERNETINĖ PARDUOTUVĖ PASAULYJE",
        'title' => "Sveikiname, :name!",
        'message' => "<b>Sveikiname, :name! Jūsų naujas internetinis verslas dabar veikia!</b> Džiaugiamės galėdami pasveikinti jus pardavėjų bendruomenėje. Žengėte pirmąjį žingsnį sėkmės link, o mes esame čia, kad padėtume jums kiekviename žingsnyje.<br>Dabar, kai jūsų parduotuvė paruošta, įsitikinkime, kad esate pasiruošę gauti mokėjimus tiesiai iš savo klientų ir pradėti plėsti savo imperiją. Jei kada nors prireiks pagalbos, mes tik žinutės – mūsų palaikymo komanda visada jums padės.<br>Q<br><b>Svarbūs tolesni veiksmai:</b> Norėdami pradėti, įsitikinkite, kad esate pasiruošę gauti mokėjimus ir sklandžiai atlikti operacijas. Mes padėsime jums atlikti kiekvieną etapą, kad jūsų parduotuvė veiktų sklandžiai.",
        'pdf-book' => "Nepraleiskite pridedamos vadovėlio: „Daryk savo verslą kaip žaidimą“.",

        'account' => [
            'title' => '1 veiksmas: sukurkite paskyrą „Selldone“ piniginėje',
            'message' => "Norėdami pradėti, susikurkite paskyrą savo Selldone piniginėje. Čia bus išskaityti jūsų mokesčiai, taip pat čia turėsite papildyti, kad parduotuvė veiktų sklandžiai. Jei jūsų balansas kada nors taps neigiamas, nesijaudinkite! Jūsų parduotuvė toliau veiks be pertraukų.",
            'action' => 'Prisijunkite prie piniginės',
        ],

        'shop-account' => [
            'title' => '2 veiksmas: prijunkite paskyrą prie parduotuvės',
            'message' => "Tada prijunkite piniginės paskyrą prie parduotuvės. Eikite į <b>Store > Apskaita > Invoice</b> ir susiekite savo piniginę. Taip užtikrinama, kad visi klientų mokėjimai būtų pervesti tiesiai į jūsų banko sąskaitą – Selldone neatskaito jokių sumų iš jūsų pajamų.",
            'action' => 'Parduotuvės sąskaitų faktūrų skydelis',
        ],

        'gateway' => [
            'title' => '3 veiksmas: prijunkite internetinių mokėjimų šliuzą',
            'message' => "Dabar nustatykime jūsų internetinių mokėjimo šliuzą. Eikite į <b>Store > Apskaita > Port</b> ir spustelėkite <b>Pridėti naują portą</b>. Pasirinkite valiutą ir pamatysite galimų mokėjimo šliuzų sąrašą. Šliuzo prijungimas yra greitas ir paprastas, bet jei jums reikia pagalbos, nedvejodami peržiūrėkite Selldone vadovus arba susisiekite su mumis.",
            'action' => 'Pridėkite portalą prie parduotuvės',
        ],

        'domain' => [
            'title' => 'Paskutinis veiksmas: priskirto domeno prijungimas',
            'message' => "Dabar susiekite tinkintą domeną su parduotuve. Tai leidžia klientams įsigyti jūsų produktų ar paslaugų ir atlikti mokėjimus tiesiogiai jums.",
            'action' => 'Pristatome ir gauname neribotą kiekį dovanų kortelių',
        ],
    ],


    'basket-list' => [
        'item' => "daiktas",
        'count' => "Suskaičiuoti",
        'price' => "kaina",
        'discount-code' => "Nuolaidos kodas",
        'customer-club' => 'Klientų klubas',
        'shipping' => "Siuntimas",
        'total' => "Iš viso",
        'offer' => "Pasiūlyti",
        'coupon' => "Kuponas",
        'lottery' => "Apdovanojimas",
        'tax' => "Mokesčiai",
        'tax_included' => "Į kainą įskaičiuota",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metodas',
        'amount' => 'Suma',
        'giftcard' => 'Gift card',
        'payment' => 'Mokėjimas',
    ],


    'shop-subscription-email' => [
        'category' => "Prenumeratos atnaujinimas",
        'title' => "Parduotuvės licencija: :shop_title",
        'title-reserved' => "Rezervinė licencija: :shop_title",
        'title-active' => "Aktyvi licencija: :shop_title",
        'title-finished' => "Baigta licencija: :shop_title",
        'title-cancel' => "Atšaukti licenciją: :shop_title",
        'message' => "Jūsų parduotuvės licencijos planas atnaujintas,",
        'RESERVED' => "⚡ Jūsų prenumeratos planas buvo **rezervuotas**.",
        'ACTIVE' => "🟢 Jūsų prenumeratos planas buvo **aktyvintas**.",
        'FINISHED' => "🚧 Jūsų prenumeratos planas **baigtas**.",
        'CANCEL' => "⛔ Jūsų prenumeratos planas buvo **atšauktas**.",
    ],

    'support' => [
        'subject' => "Pagalbos centras | :name atsakė",
        'category' => "Pagalbos centras",
        'title' => "Gavote atsakymą",
        'action' => "Atidaryti parduotuvės administratorių",
    ],

    'shop-customer-join' => [
        'subject' => "Prisijunk :shop_title",
        'category' => "Naujų klientų šventė",
        'title' => "Džiaugiamės jūsų naryste",
        'action' => "Apsilankykite dabar",
    ],

    'shop-vendor-join' => [
        'subject' => "Pardavėjo įtraukimas | :shop_title",
        'category' => "Naujų pardavėjų šventė",
        'title' => "Džiaugiamės jūsų naryste",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Dovanų kortelė :shop_title",
        'category' => "Pridėti naują kortelę",
        'title' => "Sveikiname, gavote dovanų kuponą",
        'action' => "Apsipirk dabar",
        'message' => "Gavote :balance :currency dovanų kortelę. Šią dovanų kortelę galite panaudoti mūsų parduotuvėje.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Pagalbos centras| :shop",
        'category' => "parama",
        'title' => "Gavote atsakymą",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Užsakymo patvirtinimas|Užsisakykite :order_id",
        'title' => "tvarka",
        'message' => "Pateikėte užsakymą mūsų parduotuvėje. Gavome jūsų užsakymą ir atsiųsime kitą el. laišką, kai tik bus patvirtintas mokėjimas."
    ,

        'payments' => 'Mokėjimai',
    ],

    'order-payment' => [
        'subject' => "🛍️ Mokėjimo patvirtinimas|Užsisakykite :order_id",
        'title' => "Pirkimo užsakymas",
        'message' => "Jūsų mokėjimas atliktas,<br> Gavome jūsų užsakymą. Kai užsakymas bus išsiųstas, atsiųsime jums kitą el. laišką.",
    

        'payments' => 'Mokėjimai',
    ],

    'order-update' => [
        'subject' => "🛍️ Užsakymo būsenos atnaujinimas|Užsisakykite :order_id",
        'title' => "Užsakymo būsenos atnaujinimas",
        'message' => "Jūsų užsakymas buvo atnaujintas. Naujausią šio užsakymo būseną galite patikrinti savo paskyroje.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Jūsų užsakymas yra apdorojimo eilėje. Pranešime, kai jis bus paruoštas.",
                'OrderConfirm' => "Jūsų užsakymas patvirtintas ir paruošimas prasidėjo.",
                'PreparingOrder' => "Jūsų užsakymas ruošiamas ir netrukus bus išsiųstas.",
                'SentOrder' => "Jūsų užsakymas išsiųstas. Netrukus gausite.",
                'ToCustomer' => "Jūsų užsakymas pristatytas. Tikimės, kad jums patiks!",

                'PreparingOrder-PICKUP' => "Jūsų užsakymas ruošiamas. Kai jis bus paruoštas atsiimti, gausite pranešimą.",
                'SentOrder-PICKUP' => "Jūsų užsakymas paruoštas atsiimti. Prašome atvykti į parduotuvę atsiimti.",
                'ToCustomer-PICKUP' => "Jūsų užsakymas buvo paimtas. Tikimės, kad jums patiks!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Jūsų užsakymas yra apdorojimo eilėje. Mes jums pranešime, kai jis bus paruoštas.",
                'OrderConfirm' => "Jūsų užsakymas patvirtintas ir ruošiamasi.",
                'PreparingOrder' => "Jūsų užsakymas ruošiamas ir netrukus bus jums išsiųstas.",
                'ToCustomer' => "Jūsų virtualus užsakymas buvo pristatytas į jūsų paskyrą. Ačiū!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Jūsų paslaugų užklausa yra eilėje. Kai pradėsime, pranešime.",
                'OrderConfirm' => "Jūsų paslauga patvirtinta ir ruošiamės pradėti.",
                'PreparingOrder' => "Mes ruošiame jūsų paslaugą ir informuosime, kai ji bus baigta.",
                'ToCustomer' => "Jūsų paslauga baigta. Dėkojame, kad pasirinkote mus!"
            ],
            'FILE' => [
                'PreparingOrder' => "Jūsų failas ruošiamas ir netrukus bus pasiekiamas.",
                'ToCustomer' => "Jūsų failas paruoštas ir pristatytas. Dabar galite jį atsisiųsti."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Jūsų prenumeratos užsakymas yra eilėje. Pranešime, kai prasidės apdorojimas.",
                'OrderConfirm' => "Jūsų prenumerata patvirtinta ir rengiama.",
                'PreparingOrder' => "Ruošiame jūsų prenumeratą ir ji netrukus prasidės.",
                'SentOrder' => "Jūsų prenumerata suaktyvinta. Gausite nuolatinius atnaujinimus.",
                'ToCustomer' => "Jūsų prenumeratos paslauga sėkmingai suaktyvinta."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Sveikiname :name | Naujas kuponas: :title',
        'category' => "SVEIKINAME, NAUJAS KUPONAS",
        'message' => "Sveiki, :name,<br><br>Gavote naują kuponą dovanų! Galite uždirbti dar daugiau kuponų, pristatę Selldone savo draugams ir visiems pažįstamiems. Šis kuponas vertas **:price :currency**.<br><br>Jūs žengėte pirmąjį žingsnį, o mes esame pasiruošę padėti jums su kuponu atrakinti naujų funkcijų! Prisijunkite naudodami **:email** ir raskite kuponą parduotuvėje **Prietaisų skydelis** > **Nustatymai** > **Licencija**.<br><br>Sveikiname!",
        'action' => "Mano prietaisų skydelis",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Sveikiname, brangioji :name | Jūs gavote dovaną',
        'category' => "Pranešimas apie dovanos gavimą",
        'title' => "Dovanos tau",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Dovanos",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Gautas naujas užsakymas| :order_id",
        'title' => "New Order",
        'message' => "Gavote naują užsakymą. Eikite į savo parduotuvės užsakymų apdorojimo puslapį.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Jūsų užpildyta informacija',
        'output-form-title' => 'Informacija apie įsigytą prekę',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Savaitės ataskaita :time',
        'title' => 'Savaitinė parduotuvės našumo ataskaita',
        'message' => "Tai yra jūsų parduotuvės savaitinė ataskaita nuo <b>:start</b> iki <b>:end</b>. Šioje ataskaitoje pateikiami patarimai, kaip pagerinti savo verslą, taip pat galite patikrinti savo internetinės parduotuvės būseną ir naujausius užsakymus. Tikiuosi, kad jūsų laukia gera diena ir savaitė."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Jūsų :amount taupymo ataskaita per pastaruosius tris mėnesius| :shop_title',
        'title' => 'Sezoninė ataskaita apie jūsų verslo veiklą, atlygį ir finansines santaupas',
        'message' => "Tai jūsų <b>:shop_title</b> sezoninė ataskaita nuo <b>:start</b> iki <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Susietos paskyros',
        'sub-title' => 'Kokia naujausia prie mano parduotuvės prijungtų piniginės paskyrų būsena?',
        'view-wallet' => 'Žiūrėti piniginę',
        'tip-title' => 'Svarbūs patarimai',
        'tip' => "Sukurkite nemokamą Selldone piniginę ir susiekite ją su savo parduotuve. Net jei jūsų balansas yra neigiamas, jūsų klientai vis tiek gali apsipirkti ir mokėti be jokių problemų. Nesijaudinkite, jūsų parduotuvės veikla ir duomenys sklandžiai tęsis iki 1 mėnesio be jokių trikdžių.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Prisijunkite prie paskyros'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Įdiegtos programos',
        'sub-title' => 'Programų, kurias šią savaitę įdiegėte parduotuvėje, sąrašas.',
        'tip' => "Ar norite rasti daugiau programų savo parduotuvei?",
        'view-app-store' => 'Apsilankykite „Selldone App Store“ parduotuvėje.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Jūsų parduotuvės robotai',
        'sub-title' => 'Aktyvūs pardavimo robotai mano parduotuvėje.',
        'tip-title' => 'Botų pardavimas',
        'tip' => "Selldone suteikė jums automatinius pardavimo robotus. Viskas, ką jums reikia padaryti, tai eiti į „Add-ons“> „Bots“ skydelį ir suaktyvinti savo parduotuvės robotus. Atminkite, kad atitinkama paslauga turi būti prieinama jūsų šalyje.",
        'view-bots' => 'Valdykite robotus',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Bendravimas su Klientais',
        'sub-title' => 'Kiek šią savaitę turėjau kontaktų su savo klientais?',
        'faqs' => 'Dažnai užduodami klausimai',
        'tickets' => 'Klientų bilietai',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Vartotojų būsena',
        'sub-title' => 'Veikla nuo :start iki :end',
        'users' => [
            'title' => 'Klientai',
            'subtitle' => 'Prisiregistravę vartotojai',
        ],
        'views' => [
            'title' => 'Apsilankymai',
            'subtitle' => 'Kiek kartų lankėtės parduotuvėje',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Sugrįžę vartotojai',

        'shop_views' => 'Parduotuvės vaizdai',
        'baskets' => [
            'title' => 'Pirkinių krepšeliai',
            'subtitle' => 'Pranešti apie naujų pirkinių krepšelių skaičių',
        ],
        'products' => [
            'title' => 'Produktų apžvalga',
            'subtitle' => 'Prekių būsena parduotuvėje pagal tipą',
            'value_name' => 'Produktai'
        ],
        'products_count' => 'Produktų tipai',
        'views_count' => 'Peržiūrų skaičius',
        'sell_count' => 'Pardavimo skaičius',
        'send_count' => 'Siuntimo skaičius',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop siuntimas',
        'sub-title' => 'Pagrindinių „Drop Shipping Selldone“ pardavėjų skydelis.',
        'total_fulfillments' => 'Iš viso gautų užsakymų',
        'ds_count' => 'Gauti užsakymai',
        'statistics_title' => 'Pranešti apie gautus užsakymus',
        'ds_cancels' => 'Atšaukti sąsajos pardavėjas',
        'ds_rejects' => 'Atšaukti jūs',
        'tip' => "Ar esate pagrindinis prekių pardavėjas? Ar jums priklauso sandėlis, gamykla ar produktų platintojas? Galite pasiūlyti savo produktus kitiems pardavėjams naudodamiesi „Selldone Drop Shipping“ paslauga, kad galėtumėte parduoti savo produktą dideliu mastu. Parašykite mums el. laišką adresu support@selldone.com, kad padėtume jums.",
        'view-drop-shipping-panel' => 'Prisijunkite prie didmeninės prekybos skydelio',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Valiutų kursai',
        'sub-title' => 'Naujausių valiutos konvertavimo kursų jūsų parduotuvėje sąrašas.',
        'from' => 'Šaltinio valiuta',
        'to' => 'Paskirties valiuta',
        'rate' => 'Konversijos greitis',
        'view-exchange-panel' => 'Valdykite valiutų kursus',
    

        'vew-exchange-panel' => 'valiutos kurso valdymo skydelis',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ekspertų sutartys',
        'sub-title' => 'Kokie specialistai dirba mano parduotuvėje?',
        'cost' => 'Sutarties suma',
        'duration' => 'Trukmė',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Atšaukti',
        'end_at' => 'Pristatymo data',
        'tip' => 'Savo verslui plėtoti galite samdyti geriausius Selldone specialistus.',
        'view-experts' => 'Spustelėkite norėdami pradėti.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Praneškite apie aktyvius mokėjimo šliuzus parduotuvėje :shop.',
        'tip-title' => 'Svarbūs patarimai',
        'tip' => "Eikite į savo parduotuvės portalo valdymo puslapį ir per kelias minutes pridėkite bent vieną prievadą. Jūsų klientai mėgsta greitai ir saugiai mokėti per internetinius portalus.",
        'view-shop-gateways' => 'Prisijunkite prie mano parduotuvės portalo valdymo.',
        'view-gateways' => 'Peržiūrėkite daugiau šliuzų',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Užsakymai',
        'sub-title' => 'Šią savaitę gautų užsakymų sąrašas.',
        'total_baskets' => 'Iš viso užsakymų',
        'total_posBaskets' => 'Iš viso grynųjų pinigų pavedimų',
        'pos-title' => 'POS parduotuvės dėžutė',
        'chart-label' => 'Užsakymai įvykdyti (šie užsakymai nebūtinai apmokami!)',
        'tip-title' => 'Reiks labiau pasistengti...',
        'tip' => "Nėra paprastos sėkmės.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Apdorojimo centras',
        'sub-title' => 'Kiek užsakymų apdorojome parduotuvėje šią savaitę?',
        'tip-title' => 'Jūs neturėjote išpardavimo!',
        'tip' => "Deja, šią savaitę neturėjote jokių pardavimų. Jūs turite gauti daugiau į savo parduotuvę. Galite pridėti daugiau produktų, pasirinkti geresnius vaizdus arba parašyti geresnius savo produktų aprašymus. Apsvarstykite galimybę dirbti visą darbo dieną savo verslui. Jei darysite tai teisingai ir nenusivilsite, jums pasiseks.",
        'view-process-center' => 'Peržiūrėkite proceso centrą',
        'return' => [
            'title' => 'Grąžintas užsakymas',
            'subtitle' => 'Pranešti apie grąžintus užsakymus.',
            'tip-title' => 'Ar žinote, kad ...',
            'tip' => "Su Selldone POS galite sukurti tiek kasos aparatų, kiek jums reikia! Nesvarbu, ar tai planšetinis kompiuteris, mobilusis telefonas ar nešiojamas kompiuteris, bet kurį įrenginį galite paversti savo parduotuvės pardavimo vieta. Tai paprasta, greitai nustatoma ir visiškai paruošta jūsų serveriui. Pradėkite jį naudoti šiandien!",
            'view-pos' => 'Prisijunkite prie Mano internetinės parduotuvės kasos'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Seansai',
        'sub-title' => 'Kiek kartų lankiausi savo parduotuvėje?',
        'countries-title' => 'Kurios šalys buvo daugiausiai aplankytos?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Ar norite užsidirbti pinigų neišleisdami nė vieno dolerio?',
        'message' => "Gerb. :name, galite eiti į Dashboard > Demonetization ir sukurti nukreipimo nuorodą. Išsiųskite nuorodą savo draugams, gausite „Selldone“ dovanų korteles ir procentą nuo draugo mokėjimų. Atminkite, kad dovanų kuponas bus išsiųstas ir jums, ir jūsų draugui.",
        'action' => 'Peržiūrėkite mano prisistatymo nuorodą',
        'mail-clip' => "<b style='color: #C2185B'>Svarbu:</b> jei naudojatės el. pašto paslaugomis, pvz., „Gmail“, kurios riboja el. laiško trukmę, el. laiško pabaigoje raskite šią parinktį, kad būtų rodoma visa ataskaita, ir spustelėkite ją:",

        'no-coin-reward' => "<b style='color: #C2185B'>Atsiprašome:</b> jūsų veikla neatitiko reikalavimo gauti nemokamą SEL monetų atlygį. Stenkitės labiau ir kitą sezoną parduokite daugiau savo parduotuvėje.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Sveikiname:</b> Puikus darbas! Atsižvelgdami į jūsų išskirtinius rezultatus, į jūsų sąskaitą įskaitėme :amount SEL monetų kaip atlygį.",

        'need-buy-license' => "<b>Pakelkite savo verslą: </b> Panašu, kad dar neužregistravote jokio savo svetainės prenumeratos plano! Naujovinkite dabar, kad atrakintumėte daugiau funkcijų tik už :amount per mėnesį, jei mokama kasmet.",
        'not-afford-message' => "Jei negalite sau leisti arba turite problemų dėl mokėjimo, nedvejodami pasakykite mums adresu support@selldone.com.",
        'add-domain' => "<b>Kodėl savo verslui neturėjus tinkinto domeno?</b><br> Pridėkite domeną prie savo svetainės dabar; tai nemokama!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone yra <del>produktas</del> <span style = 'color: forestgreen'> bendruomenė</span>.<br>Būkite profesionalus pardavėjas!",
        'message' => "Sekite oficialius „Selldone“ puslapius „Twitter“, „LinkedIn“ ir socialiniuose tinkluose. Siųskite mums pastabas, prašymus ar kritiką arba dalyvaukite diskusijose apie „Selldone“. Mes taip pat esame <b>jūsų sukurtos</b> Selldone bendruomenės dalis."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Gauti nauji avokadų užsakymai | :shop_title :time',
        'title' => "Veiklos ataskaita už pastarąsias 24 valandas",
        'message' => "Jūsų klientai laukia, kol jūsų užsakymai bus peržiūrėti ir įkainoti. Kuo greičiau atsakykite į klientų užklausas, kad gautumėte daugiau pardavimų.",
        'card_title' => "Užsakymai eilėje",
        'card_subtitle' => "Nuo :date",

        'card_payed' => "Apmokėti užsakymai"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Atsakykite į savo įrašą :community_title',
        'title' => ":name ir :count kiti pakomentavo jūsų įrašus.",
        'message' => "Sveiki, :name, jūsų įrašai sulaukia dėmesio! Gavote komentarų mūsų bendruomenėje. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name pakomentavo jūsų įrašus.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Atsakykite į savo temą :topic_title',
        'title' => ":name ir :count kiti atsakė tavo tema.",
        'message' => "Sveiki, :name, jūsų tema sulaukia dėmesio! Gavote atsakymus mūsų bendruomenėje. Prisijunkite prie savo paskyros, kad galėtumėte dalyvauti diskusijoje ir pamatyti, ką visi sako.",
        'title-simple' => ":name atsakė jūsų temoje.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Naujas prisijungimas :name',
        'category' => 'Saugumo pranešimai',
        'title' => "Prisijunkite prie paskyros",
        'message' => "Gerb. :name, jūs prisijungėte prie savo Selldone paskyros.",   // Login in selldone (seller)
        'message-shop' => "Gerb. :name, buvote prisijungę prie :shop_title .",  // Login in shop (buyer)

        'footer' => "Jei nesate prisijungę, pakeiskite slaptažodį.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Pasitraukimas",
        'deposit' => "Užstatas",

        'withdraw_subject' => "Išsiimti iš sąskaitos :account",
        'deposit_subject' => "Indėlis į sąskaitą :account",

        'message' => "Pinigų pervedimas atliktas laikantis šių specifikacijų.",

        'type' => "Sandorio tipas",

        'from' => "Šaltinio sąskaita",
        'to' => "Destination account",

        'desc' => "Sandorio aprašymas",
        'action' => "Peržiūrėti operaciją",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Svarbu! Taisyklių pažeidimas| :shop",
        'category' => "Kritinė informacija",
        'title' => "Jūsų parduotuvė buvo nubausta",
        'action' => "Atidarykite parduotuvės prietaisų skydelį",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter pakvietė jus į Selldone",
        'title' => ":name atsiuntė jums :amount, kad padėtumėte paleisti naują internetinę svetainę ir iš jos gauti pajamų!",
        'message' => "Sveiki, **:receiver_name**, <br><br> Sveiki atvykę į Selldone! Naudodami Selldone galite lengvai susikurti savo el. prekybos svetainę, tinklaraštį, internetinę bendruomenę ir net sukurti internetinę POS sistemą, skirtą asmeniniam pardavimui – visa tai per kelias minutes. Tai visa internetinio verslo operacinė sistema, sukurta tam, kad jūsų verslas būtų geresnis, greitesnis ir lengviau valdomas.<br><br> Užsiregistruokite <b>:date</b> ir gaukite :amount kuponą, kad galėtumėte pradėti!",
        'accept' => "Priimti pakvietimą",
        'owner' => "Savininkas",
        'join-date' => "Prisijungė prie Selldone",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Atkūrimo nuoroda| :shop",
        'category' => "Parduotuvės apsauga",
        'title' => "Parduotuvės atkūrimo nuoroda iš <b>:shop_name</b> .",
        'message' => "Šis el. laiškas buvo išsiųstas jums, nes pateikėte užklausą atkurti savo parduotuvę. Spustelėjus žemiau esančią nuorodą, atkursite savo parduotuvę ir visus jai priklausančius duomenis.",
        'action' => "Patvirtinkite parduotuvės atkūrimą",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Kiek pinigų Selldone sutaupė jūsų verslui?',
        'sub-title' => 'Nuo datos :start iki :end',
        'infrastructure' => [
            'title' => 'Infrastruktūra',
            'subtitle' => 'Serveriai, CDN, saugykla ir kitos debesies paslaugos',
        ],
        'experts' => [
            'title' => 'Ekspertai ir darbuotojai',
            'subtitle' => 'Kūrėjai, priežiūra ir palaikymas',
        ],
        'total_save' => 'Iš viso sutaupyti pinigai'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Jūsų pasirodymas',
        'sub-title' => 'Verslo apžvalga nuo :start iki :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Sugrįžę vartotojai',

        'shop_views' => 'Parduotuvės vaizdai',
        'baskets' => [
            'title' => 'Pirkinių krepšeliai',
            'subtitle' => 'Pranešti apie naujų pirkinių krepšelių skaičių',

        ],
        'products' => [
            'title' => 'Produktų apžvalga',
            'subtitle' => 'Prekių būsena parduotuvėje pagal tipą',
            'value_name' => 'Produktai'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Bendras svetainės puslapių peržiūrų skaičius',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Gavote naują užsakymą. Eikite į užsakymo apdorojimo puslapį pardavėjo skydelyje.",
        'subject' => "🛍️ Gautas naujas užsakymas| :order_id",
        'your_revenue' => "Jūsų pajamos",
    ],
    'vendor-invite' => [
        'title' => 'Pardavėjo kvietimas',
        'message' => "Gavote kvietimą tapti :shop_name pardavėju. Galite jį priimti arba atmesti spustelėdami šiuos mygtukus.",
        'subject' => ":shop_name |Kvietimas tapti mūsų pardavėju",
        'accept' => "Priimkite ir tapkite pardavėju",
        'reject' => "Atmesti",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Kvietimas prisijungti prie mūsų komandos',
        'message' => "Jus pakvietė prisijungti prie :vendor_name :shop_name. Galite priimti arba atmesti šį kvietimą naudodami toliau esančius mygtukus.",
        'subject' => "Kvietimas prisijungti prie :vendor_name|Tapk komandos nariu",
        'accept' => "Priimk ir prisijunk prie komandos",
        'reject' => "Atmesti",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Jūsų prisijungimo kodas prie :shop",
        'header-message' => "Siunčiame jums šį el. laišką, nes paprašėte prisijungimo prie parduotuvės kodo. Žemiau rasite savo vienkartinį slaptažodį (OTP):",
        'footer-message' => "Šis kodas galios 10 minučių. Jei neprašėte šio prisijungimo kodo, nekreipkite dėmesio į šį el. laišką."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Patvirtinkite el. pašto adresą| :shop",
        'title' => 'El. pašto patvirtinimas',
        'header-message' => "Sveiki, :name, <br> Patvirtinkite, kad **:email** yra jūsų el. pašto adresas, spustelėdami toliau esantį mygtuką arba naudodami toliau pateiktą nuorodą per 48 valandas.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produkto atnaujinimai| :shop",
        'title' => "Produkto būsenos atnaujinimas – paskutinės 24 valandos",
        'message' => "Tikiuosi, kad ši žinutė jus gerai suras. Tai trumpas atnaujinimas, skirtas informuoti jus apie jūsų produktų būseną mūsų platformoje per pastarąsias 24 valandas.\nPer šį laikotarpį kai kurių produktų statusas pasikeitė. Šie pakeitimai gali atsirasti dėl pirkinių, atsargų atnaujinimų ar kitų susijusių įvykių.\nNorėdami gauti daugiau informacijos apie kiekvieną produktą, prisijunkite prie savo paskyros ir patikrinkite skyrių „Produkto būsena“.",
        'action' => "Atidarykite Pardavėjo skydelį",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Gauti masiniai užsakymai| :shop | :date",
        'title' => "Pranešimas apie masinius užsakymus",
        'message' => "Gavote masinių užsakymų paketą. Norėdami gauti daugiau informacijos, apsilankykite užsakymo apdorojimo puslapyje savo skydelyje. Taip pat galite atsisiųsti užsakymų sąrašą naudodami pateiktą saugią nuorodą, galiojantį 7 dienas.<br><br>\n        <b>SVARBU:</b> Ši nuoroda galioja 7 dienas.<br>\n        Ši nuoroda yra dinamiška, todėl kiekvieną kartą ją paspaudę gausite naujausius šios konkrečios datos užsakymus. <b>Tai reiškia, kad jei užsakymo mokėjimo būsena pasikeis į atmestas, atsiųstame CSV nebematysite to užsakymo arba, jei užsakymas bus apmokėtas, jis bus rodomas sąraše.</b><br><br>\n        <ul>\n            <li>CSV yra apmokėtų užsakymų su rezervuota data :date.</li>\n            <li>Rezervuota data yra data, kai vartotojas užsakymo puslapyje spustelėja atsiskaitymą.</li>\n        </ul>\n        <b>Kad išvengtumėte pasikartojančių užsakymų, prieš siųsdami visada patikrinkite užsakymą ID.</b>",
        'action' => "Atsisiųskite užsakymų sąrašą",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Kai kurios jūsų užsakymo prekės nebuvo priimtos ir negali būti pristatytos. Šių prekių suma netrukus bus grąžinta į jūsų kortelę."
    ]

];
