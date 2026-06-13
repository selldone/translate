<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Tämä viesti toivottaa uuden ostajan tervetulleeksi myymälään.',
        ShopMailTemplateCodes::OrderCheckout => 'Tämä ilmoitus lähetetään, kun ostaja vahvistaa tilauksen.',
        ShopMailTemplateCodes::OrderPayment => 'Tämä ilmoitus vahvistaa asiakkaan maksun onnistuneen.',
        ShopMailTemplateCodes::OrderUpdate => 'Tämä viesti lähetetään ostajalle päivitettäväksi tilauksensa tilasta.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Tämä viesti lähetetään myyjälle ilmoittamaan heille vahvistetusta tilauksesta.',
        ShopMailTemplateCodes::PosCheckout => 'Tämä ilmoitus lähetetään ostajan myyntipistetilauksen vahvistamiseksi.',
        ShopMailTemplateCodes::PosPayment => 'Tämä ilmoitus vahvistaa ostajan suorittaman myyntipistemaksun.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Tämä viesti ilmoittaa myyjälle heidän myyntipisteessään tehdystä ostoksesta.',
        ShopMailTemplateCodes::ShopContact => 'Tämä ilmoitus lähetetään, kun yhteydenottolomake on lähetetty.',
        ShopMailTemplateCodes::ShopGiftCard => 'Tämä ilmoitus ilmoittaa käyttäjälle lahjakortin vastaanottamisesta.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Tämä viesti toivottaa uuden myyjän tervetulleeksi myymälään.',
        ShopMailTemplateCodes::ShopVendorInvite => "Tämä viesti lähetetään toimittajan kutsumiseksi liittymään kauppapaikallesi.",
        ShopMailTemplateCodes::ShopVendorOrder => "Tämä viesti lähetetään toimittajalle, kun tilaus vastaanotetaan joko maksettuina tai postiennakolla (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Toimitetaan päivittäin päivittämään myyjiä tuotteidensa tilasta.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Tämä viesti lähetetään kutsumaan myyjä liittymään kauppapaikkaasi.",

        ShopMailTemplateCodes::UserLogin => "Ilmoita käyttäjälle kirjautumistiedoilla, mukaan lukien IP-osoite, päivämäärä ja laite, turvallisuussyistä.",
        ShopMailTemplateCodes::LoginCode => "Lähetä kertaluonteinen salasanakoodi, jotta käyttäjät voivat kirjautua kauppaan.",

        ShopMailTemplateCodes::EmailVerifyLink => "Lähetä linkki käyttäjän sähköpostiosoitteen vahvistamiseksi. Tämä sähköposti lähetetään, kun käyttäjä rekisteröityy SMSlla ja kirjoittaa sähköpostiosoitteensa. Sitä ei lähetetä, kun käyttäjä rekisteröityy suoraan sosiaalisen sisäänkirjautumisen tai sähköpostin avulla.",

        ShopMailTemplateCodes::EmailBulkOrder => "Lähetä luettelo vastaanotetuista ja maksetuista tilauksista joukkona tietyltä päivältä."


    ,

    ],


    'global' => [
        'greetings' => 'Hei :name',
        'end-statement' => 'Tukitiimi',

        'receiver_name' => 'Hei :user_name',
        'footer-help' => "Tarvitsetko apua? Kysy osoitteesta [support@selldone.com](mailto:support@selldone.com) tai käy [ohjekeskuksessamme](https://selldone.com/community).",
        'selldone-team' => 'Selldone-tiimi',
        'footer-shop' => "Jos tarvitset apua jossain, älä epäröi lähettää meille sähköpostia: :shop_mail",
        'accept' => "Hyväksyä",
        'reject' => "Hylätä",
        'verify' => "vahvistaa",
        'title' => "Otsikko",
        'value' => "Arvo",
        'description' => "Kuvaus",
        'shop' => "Myymälä",
        'shop-info' => "Kaupan tiedot",
        'user' => "Käyttäjä",
        'user-info' => "Tilitiedot",
        'license' => "Lisenssi",
        'status' => "Tila",
        'start' => "alkaa",
        'end' => "Loppu",
        'renewal' => "Uusiminen",
        'view' => "Näytä",

        'balance' => "Saldo",
        'card_number' => "Kortin numero",
        'cvv' => "Cvv",
        'expire_date' => "Viimeinen käyttöpäivä",

        'Dashboard' => "Kojelauta",
        'order' => "tilata",
        'view_order' => "Katso tilaus",
        'pay_now' => "Pay now",

        'official_selldone' => "VIRALLINEN MYYTY",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valuutta",
        'free-balance' => "Vapaa saldo",
        'locked-balance' => "Lukittu tasapaino",
        'bot' => "Bot",
        'requests' => "Pyynnöt",
        'baskets' => 'Kärryt',
        'physical' => "Fyysinen",
        'virtual' => "Virtuaalinen",
        'file' => "Tiedosto",
        'service' => "Palvelu",
        'fulfillment' => "Täyttäminen",
        'open' => "Avata",
        'reserved' => "Varattu",
        'canceled' => "Peruutettu",
        'payed' => "Maksettu",
        'cod' => "COD",
        'orders-count' => 'Tilaukset',
        'payments-count' => 'Maksut',
        'confirms-count' => 'Vahvistaa',
        'sends-count' => 'Lähettää',
        'delivers-count' => 'Toimittaa',
        'count' => 'Kreivi',
        'transactions-count' => 'Tapahtumat lasketaan',
        'success-transactions' => 'Onnistuneet kaupat',
        'total-amount' => 'Kokonaismäärä',
        'amount' => 'Määrä',
        'wage' => 'Palkka',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Elää',
        'CheckQueue' => 'Tarkista jono',
        'OrderConfirm' => 'Vahvista tilaus',
        'PreparingOrder' => 'Tilauksen valmistelu',
        'SentOrder' => 'Lähetetty tilaus',
        'ToCustomer' => 'Toimitettu asiakkaalle',
        'Pending' => 'Odottaa',
        'Accepted' => 'Hyväksytty',
        'Rejected' => 'Hylätty',
        'pc' => 'PC',
        'tablet' => 'Tabletti',
        'phone' => 'Puhelin',
        'total' => 'Kaikki yhteensä',
        'view-detail' => 'Näytä Yksityiskohdat',
        'empty' => 'Tyhjä',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Vastaa',
        'reactions' => 'Reaktiot',
        'Comments' => 'Kommentit',
        'last-comment' => 'Viimeinen kommentti',
        'response-to' => 'Vastata',
        'posts' => 'Viestit',
        'post' => 'Lähettää',

        'name' => 'Nimi',
        'email' => 'Sähköposti',
        'type' => 'tyyppi',
        'device' => 'Laite',
        'platform' => 'Alusta',
        'browser' => 'Selain',
        'time' => 'Aika',
        'Wallet' => 'Lompakko',
        'date' => 'Päivämäärä',

        'account' => 'Tili',
        'transaction' => 'Tapahtuma',
        'fee' => 'Maksu',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Laskuttaa',
        'category' => 'Kategoria',
        'password' => 'Salasana',
        'verify-login' => "Vahvista ja kirjaudu sisään",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hyper',
        'buy-now' => "Osta nyt",
        'add-domain' => "Add Domain",
        'views' => 'Näkymät',


        'country' => 'Maa',
        'address' => 'osoite',
        'postal' => 'postinumero',
        'building_no' => 'Rakennus #',
        'building_unit' => 'Yksikkö #',
        'message' => 'Viesti',


        'customer' => 'Asiakas',
        'cart-items' => 'Ostoskori tuotteet',
        'payment' => 'Maksu',
        'receiver' => 'Vastaanotin',
        'virtual-items' => 'Virtuaaliset kohteet',
        'no-payment' => 'Ei maksua!',

        'enable' => 'ota käyttöön',
        'access' => 'Pääsy',
        'bank' => 'Pankin tiedot',

        'vendor' => 'Myyjä',

        'view_content' => "Näytä koko sisältö",
        'files' => 'Tiedostot',
        'download' => 'ladata',
        'file_name' => 'Tiedoston nimi',
        'file_size' => 'Koko',

        'subscription' => 'Tilaus',
        'products' => 'Tuotteet',
        'vendor_products' => 'Myyjän tuotteet',

        'pickup' => 'Nouto',

        'minutes' => 'Minuutit',
        'hours' => 'Tuntia',

        'refund' => 'Hyvitys',
        'recipient_address' => 'Vastaanottajan osoite',
        'signature' => 'Allekirjoitus',
        'blockchain' => 'Blockchain',
        'details' => 'Yksityiskohdat',


    

        'Shop' => 'Myymälä',
        'dashboard' => 'kojelauta',
        'comments' => 'kommentteja',
        'wallet' => 'lompakko',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone suorituskykyraportti'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Kausiraportti, Selldone'
        ],
        'Onboarding' => [
            'id' => 'Hei',
            'name' => 'Selldone-kauppiaat'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Tuki :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'Hei',
            'name' => 'Selldone-yhteisö'
        ],
        'NewShop' => [
            'id' => 'kauppiaita',
            'name' => 'Selldone-kauppiaat'
        ],
        'Approve' => [
            'id' => 'hyväksyä',
            'name' => 'Selldone-kauppiaat'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Tilausten hallinta :name'
        ],

        'Recovery' => [
            'id' => 'elpyminen',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Odottaa ⌛',
        'PAYED' => 'Maksettu ✅',
        'CANCELED' => 'Peruutettu ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Järjestelmänvalvoja',
            'OFFICER' => 'Upseeri ja valvoja',
            'AUDITING' => 'Tilintarkastuspäällikkö',
            'EMPLOYEE' => 'Työntekijä',
            'PRODUCT' => 'Tuotepäällikkö',
            'CONTENT' => 'Sisältöpäällikkö',
            'MARKETING' => 'Markkinointipäällikkö',
            'VIEWER' => 'Katsoja',

        ],
        'subject' => ":inviter kutsui sinut nimellä :level| :shop",
        'category' => "Henkilökunnan kutsu",
        'title' => "Sinut on kutsuttu <b>kauppaan :shop_name</b> as <b>:level</b> .",
        'message' => "Olet saanut kutsun tehdä yhteistyötä <b>:shop_title</b>-tiimin kanssa. Sinulla on mahdollisuus hyväksyä tai hylätä tämä tarjous. Jos päätät hyväksyä, kirjaudu sisään Selldone-palveluun vahvistaaksesi päätöksesi. Vahvistettuasi pääset kaupan hallintaosioon.",

    ],

    'welcome-email' => [
        'subject' => "👋 Tervetuloa :name, aloitetaan Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Tervetuloa Selldone: hen",
        'message' => "Kiitos, että valitsit Selldonen. Olet nyt osa Selldone-yhteisöä, joka yhdistää maailmanlaajuiset myyjät asiakkaisiin, paikalliset yritykset yrityksiin, yksityishenkilöt yrityksiin! Kaikki master- ja pro-työkalut on toimitettu sinulle **ilmaiseksi** ja **rajattomasti**. Sinä yrität, me avaamme ovet, Just Do It!",

        'index' => "Vaihe :step.",

        'step-domain' => [
            'title' => 'Lisää mukautettu verkkotunnus',
            'message' => "Aloita lisäämällä mukautettu verkkotunnuksesi ilmaiseksi Shop Dashboardissa kohdassa Asetukset > Verkkotunnusasetukset.",
            'action' => 'Hallitse verkkotunnuksiani',
        ],
        'step-landing' => [
            'title' => 'Mukauta kotisivuasi',
            'message' => "Mukauta kotisivuasi siirtymällä kohtaan Hallintapaneeli > Sivut. Valitse aloitussivu tai luo uusi. It's easy and intuitive, and you can start working on it right away.",
            'action' => 'Mukauta aloitussivuani',
        ],
        'step-payment' => [
            'title' => 'Määritä maksutavat',
            'message' => "Aloita maksujen vastaanottaminen suoraan pankkitilillesi. Jos haluat yhdistää maksupalveluntarjoajiisi, kuten Stripe, PayPal ja muut, siirry kohtaan Dashboard > Accounting > Gateway.",
            'action' => 'Lisää maksutavat',
        ],
        'step-products' => [
            'title' => 'Lisää tuotteesi',
            'message' => "Lisää tuotteita ja luokkia helposti kohdassa Kojelauta > Tuotteet. Se on aivan kuin tiedostojen ja kansioiden hallinta tietokoneellasi – täysin vedä ja pudota -valmis. Voit myös tuoda tuotteita joukkotuontia Excelin avulla. Saatavilla on mallipohja, joka auttaa sinua pääsemään alkuun.",
            'action' => 'Hallinnoi tuotteitani',
        ],
        'step-shipping' => [
            'title' => 'Määritä toimitustavat',
            'message' => "To charge customers for shipping, define your shipping methods in the Dashboard > Logistic > Shipping. You can set different pricing and support for various locations. Don’t forget to set your warehouse origin in Dashboard > Logistic > Warehouse.",
            'action' => 'Hallinnoi toimitustapoja',
        ],
    

        'seller' => [
            'title' => 'Oletko myyjä?',
            'message' => 'Aloita myynti syöttämällä hallintapaneeli Selldoneen alla olevan linkin kautta ja luomalla ensimmäinen kauppasi täysin ilmaiseksi. Tämä kestää muutaman minuutin ja sinulla on oma kauppa ja verkkosivusto. Ohjaamme sinut seuraaviin vaiheisiin ja hankimme maksuyhdyskäytävän.',
            'action' => 'Kirjaudu sisään kojelautaani',
        ],
        'buyer' => [
            'title' => 'Olen ostaja',
            'message' => 'Onnittelut. Kun olet Selldonen jäsen, pääset eroon kaikista jäsenyyteen ja todentamiseen liittyvistä vaivoista verkkokaupoissa. Hyötyäksesi mistä tahansa myymälästä ja sivustosta, joka käyttää Selldone-alustaa, voit kirjautua sisään yhdellä napsautuksella ja tehdä ostoksestasi yksinkertaista, nopeaa ja turvallista.',
        ],
    ],


    'charge-account' => [
        'category' => 'Lompakko > Tili > Veloitus',
        'title' => "Menestysveloitus",
        'message' => "Your account <b>:account_number</b> has been charged <b>:amount</b> successfully.",
        'account' => 'Tili',
        'charge' => 'Lataa',
        'balance' => 'Saldo',
        'footer' => "Tee liiketoiminnasta helppoa, saavutettavissa olevaa ja kaikkien saatavilla kaikkialla maailmassa."
    ],

    'verify-email' => [
        'subject' => "🙌 Suorita rekisteröitymisesi Selldonehen! Vahvista linkki.",
        'category' => "OLET YHDEN ASKELMAN etäisyydellä",
        'title' => "Vahvista sähköpostiosoitteesi",
        'message' => "Hei :name,<br><br> Kiitos, että valitsit Selldone!<br><br> Vahvistaaksesi, että <b>Q:email</b> on oikea sähköpostiosoitteesi, napsauta alla olevaa linkkiä tai käytä alla olevaa painiketta. Sinulla on 48 tuntia aikaa suorittaa tämä vahvistus.",
        'footer' => "Jos sinulla on vaikeuksia napsauttaa Vahvista-painiketta, kopioi ja liitä alla oleva URL-osoite selaimeesi: :activation_url",
        'next-step' => "Seuraavaksi lähetämme sinulle hyödyllisiä materiaaleja ja vaiheittaisen oppaan, jonka avulla voit helposti lisätä mukautetun verkkotunnuksen, määrittää maksut, lisätä tuotteita ja saada ensimmäisen tilauksesi.",

    ],
    'verify-email-code' => [
        'subject' => "Vahvistuskoodi kohteelle :name",
        'category' => "SECURITY",
        'title' => "Sähköpostin vahvistuskoodi",
        'message' => "Hei :name,<br><br> Vahvistaaksesi, että <b>:email</b> on oikea sähköpostiosoitteesi, anna seuraava koodi seuraavan <b>10 minuutin aikana</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Kauppasi on valmis| :name",
        'category' => "OLET YHDEN ASKELMAN etäisyydellä",
        'title' => "Asennus valmis",
        'account_title' => "Tilisi",
        'account_msg' => "Vahvista ja kirjaudu sisään tilillesi näillä tiedoilla.",
        'shop_msg' => "Tilitiedot Selldone-yrityskäyttöjärjestelmästä.",

    ],

    'reset2fa' => [
        'category' => "TURVALLISUUSVIESTI",
        'title' => "Pyydä 2-vaiheisen kirjautumisen poistamista käytöstä",
        'message' => "Sait tämän sähköpostin, koska saimme pyynnön nollata **:name**-tilin kaksivaiheinen todennus **:email**-sähköpostilla.<br><br>Tiliäsi koskevat seuraavat tiedot:",
        'footer' => "Jos et pyytänyt salasanan vaihtoa, muita toimia ei tarvita.",
        'action' => 'Poista kaksivaiheinen kirjautuminen käytöstä',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Kauppasi on nyt valmis!",
        'category' => "BORN UUSI VERKKOKAUPA MAAILMASSA",
        'title' => "Onnittelut, :name!",
        'message' => "<b>Onnittelut, :name! Your new online business is now live!</b> We are excited to welcome you to the Selldoners community. Olet ottanut ensimmäisen askeleen kohti menestystä, ja olemme täällä auttamassa sinua kaikissa vaiheissa.<br>Nyt kun myymäläsi on valmis, varmista, että olet valmis vastaanottamaan maksuja suoraan asiakkailtasi ja aloitat valtakuntasi kasvattamisen. Jos tarvitset apua, olemme vain viestin päässä – tukitiimimme on aina käytettävissäsi.<br>Q<br><b>QQ<br><br><b>QQ</b> Aluksi varmista, että olet valmis vastaanottamaan maksuja ja toimimaan sujuvasti. We'll guide you through each stage to get your store running seamlessly.",
        'pdf-book' => "Älä missaa liitteenä olevaa käsikirjaa: Tee liiketoimintasi kuin peli",

        'account' => [
            'title' => 'Vaihe 1: Luo tili Selldone-lompakkoon',
            'message' => "To start, create an account in your Selldone wallet. This is where your fees will be deducted, and it’s also where you'll top up to keep your store running smoothly. If your balance ever goes negative, don’t worry! Your store will continue to operate without interruption.",
            'action' => 'Kirjaudu lompakkoon',
        ],

        'shop-account' => [
            'title' => 'Vaihe 2: yhdistä tili kauppaan',
            'message' => "Yhdistä seuraavaksi lompakkotilisi kauppaasi. Head to <b>Store > Accounting > Invoice</b>, and link your wallet. This ensures that all customer payments are deposited directly into your bank account—Selldone does not deduct any amounts from your earnings.",
            'action' => 'Myymälälaskupaneeli',
        ],

        'gateway' => [
            'title' => 'Vaihe 3: Yhdistä Online Payment Gateway',
            'message' => "Asetetaan nyt verkkomaksuyhdyskäytäväsi. Go to <b>Store > Accounting > Port</b> and click on <b>Add New Port</b>. Select your currency, and you'll see a list of available payment gateways. Connecting a gateway is quick and easy, but if you need any help, feel free to check the Selldone guides or reach out to us.",
            'action' => 'Lisää myymälään portaali',
        ],

        'domain' => [
            'title' => 'Viimeinen vaihe: erillisen verkkotunnuksen yhdistäminen',
            'message' => "Voit pitää myymälääsi niin monella verkkotunnuksella kuin haluat. Jotta voit yhdistää verkkotunnuksen kauppaan, sinulla on oltava vähintään käynnistyslisenssi. Esittelemällä jokaiselle ystävällesi Selldonen, saat yhden kuukauden startup-lisenssilahjakortin. Osa ystävien maksuista hyvitetään myös asiakkaidesi tileille.",
            'action' => 'Esittelyssä ja rajattomien lahjakorttien vastaanottaminen',
        ],
    ],


    'basket-list' => [
        'item' => "kohde",
        'count' => "Kreivi",
        'price' => "hinta",
        'discount-code' => "Alennuskoodi",
        'customer-club' => 'Asiakasklubi',
        'shipping' => "laivaus",
        'total' => "Kaikki yhteensä",
        'offer' => "Tarjous",
        'coupon' => "Kuponki",
        'lottery' => "Myöntää",
        'tax' => "Verottaa",
        'tax_included' => "Sisältyy hintaan",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Menetelmä',
        'amount' => 'Määrä',
        'giftcard' => 'Gift card',
        'payment' => 'Maksu',
    ],


    'shop-subscription-email' => [
        'category' => "Tilauksen päivitys",
        'title' => "Kaupan lisenssi: :shop_title",
        'title-reserved' => "Lisenssivaraus: :shop_title",
        'title-active' => "Aktiivinen lisenssi: :shop_title",
        'title-finished' => "Valmis lisenssi: :shop_title",
        'title-cancel' => "Peruuta lisenssi: :shop_title",
        'message' => "Kauppasi lisenssisuunnitelmasi päivitetty,",
        'RESERVED' => "⚡ Tilauspakettisi on **varattu**.",
        'ACTIVE' => "🟢 Tilaussuunnitelmasi on **aktivoitu**.",
        'FINISHED' => "🚧 Tilaussuunnitelmasi on **valmis**.",
        'CANCEL' => "⛔ Tilauksesi on **peruttu**.",
    ],

    'support' => [
        'subject' => "Tukikeskus | :name vastasi",
        'category' => "Tukipalvelu",
        'title' => "Sait vastauksen",
        'action' => "Avaa kaupan ylläpitäjä",
    ],

    'shop-customer-join' => [
        'subject' => "Liity :shop_title",
        'category' => "Uuden asiakkaan juhla",
        'title' => "Olemme iloisia jäsenyydestäsi",
        'action' => "Vieraile nyt",
    ],

    'shop-vendor-join' => [
        'subject' => "Toimittajan perehdytys | :shop_title",
        'category' => "Uuden myyjän juhla",
        'title' => "Olemme iloisia jäsenyydestäsi",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Lahjakortti :shop_title",
        'category' => "Lisää uusi kortti",
        'title' => "Onnittelut, olet saanut lahjakortin",
        'action' => "Osta nyt",
        'message' => "You have received a gift card worth :balance :currency. Voit käyttää tämän lahjakortin myymälässämme.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Tukikeskus| :shop",
        'category' => "tukea",
        'title' => "Sait vastauksen",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Tilausvahvistus|Tilaa :order_id",
        'title' => "tilata",
        'message' => "Teit tilauksen myymälästämme. We received your order and will send you another email once the payment is confirmed."
    ,

        'payments' => 'Maksut',
    ],

    'order-payment' => [
        'subject' => "🛍️ Maksun vahvistus|Tilaa :order_id",
        'title' => "Maksumääräys",
        'message' => "Maksusi suoritettu,<br> Meillä on tilauksesi. Lähetämme sinulle toisen sähköpostin, kun tilauksesi lähetetään.",
    

        'payments' => 'Maksut',
    ],

    'order-update' => [
        'subject' => "🛍️ Tilauksen tilan päivitys|Tilaa :order_id",
        'title' => "Tilauksen tilan päivitys",
        'message' => "Tilauksesi on päivitetty. You can check the latest status of this order in your account.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Tilauksesi on käsittelyjonossa. Ilmoitamme sinulle, kun sitä valmistellaan.",
                'OrderConfirm' => "Your order is confirmed and preparation has started.",
                'PreparingOrder' => "Your order is being prepared and will be shipped soon.",
                'SentOrder' => "Tilauksesi on lähetetty. Saat sen pian.",
                'ToCustomer' => "Tilauksesi on toimitettu. Toivomme, että nautit siitä!",

                'PreparingOrder-PICKUP' => "Tilaustasi valmistellaan. You’ll receive a notification when it's ready for pickup.",
                'SentOrder-PICKUP' => "Tilauksesi on valmis noudettavaksi. Tule myymälään hakemaan se.",
                'ToCustomer-PICKUP' => "Tilauksesi on noudettu. Toivomme, että nautit siitä!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Tilauksesi on käsittelyjonossa. Ilmoitamme sinulle, kun se on valmis.",
                'OrderConfirm' => "Your order is confirmed and preparation is in progress.",
                'PreparingOrder' => "Your order is being prepared and will be sent to you soon.",
                'ToCustomer' => "Your virtual order has been delivered to your account. Kiitos!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Palvelupyyntösi on jonossa. Ilmoitamme, kun aloitamme.",
                'OrderConfirm' => "Palvelusi on vahvistettu ja valmistaudumme aloittamaan.",
                'PreparingOrder' => "Valmistelemme palveluasi ja ilmoitamme sinulle, kun se on valmis.",
                'ToCustomer' => "Palvelusi on valmis. Kiitos, että valitsit meidät!"
            ],
            'FILE' => [
                'PreparingOrder' => "Tiedostoasi valmistellaan ja se on pian saatavilla.",
                'ToCustomer' => "Tiedostosi on valmis ja toimitettu. Voit nyt ladata sen."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Tilauksesi on jonossa. Ilmoitamme sinulle, kun käsittely alkaa.",
                'OrderConfirm' => "Tilauksesi on vahvistettu ja sitä määritetään.",
                'PreparingOrder' => "We are preparing your subscription and it will start soon.",
                'SentOrder' => "Tilauksesi on aktivoitu. Saat jatkuvia päivityksiä.",
                'ToCustomer' => "Tilauspalvelusi on aktivoitu onnistuneesti."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Onnittelut :name | Uusi kuponki: :title',
        'category' => "ONNEA, UUSI SETELLI",
        'message' => "Hei :name,<br><br>Olet saanut meiltä uuden lahjakortin! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. Tämän kupongin arvo on **:price :currency**.<br><br>Olet ottanut ensimmäisen askeleen, ja autamme sinua avaamaan uusia ominaisuuksia kupongillasi! Kirjaudu sisään koodilla **:email** ja etsi kuponki Shopista **Käyttöpaneeli** > **Asetukset** > **Lisenssi**.<br><br>Onnittelut!",
        'action' => "Kojelautani",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Onnittelut, rakas :name | Olet saanut lahjan',
        'category' => "Ilmoitus lahjan vastaanottamisesta",
        'title' => "Lahjoja sinulle",
        'message' => "Hei :name, olemme iloisia voidessamme kertoa sinulle, että olet saanut erityisen lahjan Selldonelta! 🎉 Voit ansaita lisää lahjoja pysymällä aktiivisena, kasvattamalla kauppaasi ja parantamalla osaamistasi Selldonessa. Tarkista lahjasi kirjautumalla sisään tunnuksella :email ja etsimällä se hallintapaneelisi oikeasta yläkulmasta.<br><br>Tämän lahjan arvo on **:price :currency**, ja voit helposti tallettaa sen lompakkoosi Selldonessa.<br><br>Käytä lahjasi kauppasi lisenssin päivittämiseen ja avaa entistä tehokkaampia työkaluja verkkoliiketoimintasi kasvattamiseen!",
        'action' => "Lahjat",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Uusi tilaus vastaanotettu| :order_id",
        'title' => "New Order",
        'message' => "Olet saanut uuden tilauksen. Mene myymäläsi tilausten käsittelysivulle.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Täytetyt tietosi',
        'output-form-title' => 'Ostetun tuotteen tiedot',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Viikkoraportti :time',
        'title' => 'Viikoittainen myymälän tehokkuusraportti',
        'message' => "Tämä on myymäläsi viikoittainen raportti <b>:start</b> - <b>:end</b>. Tämä raportti sisältää vinkkejä liiketoimintasi parantamiseen, voit myös tarkistaa verkkokauppasi tilan ja viimeisimmät tilaukset. Toivottavasti sinulla on hyvä päivä ja viikko edessä."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ :amount-säästöraporttisi viimeisen kolmen kuukauden aikana| :shop_title',
        'title' => 'Kausiraportti liiketoiminnastasi, palkkioistasi ja taloudellisista säästöistäsi',
        'message' => "Tämä on <b>:shop_title</b> kausiraporttisi <b>:start</b> - <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Yhdistetyt tilit',
        'sub-title' => 'Mikä on kauppaani yhdistettyjen lompakkotilien viimeisin tila?',
        'view-wallet' => 'Katso lompakko',
        'tip-title' => 'Tärkeitä vinkkejä',
        'tip' => "Luo ilmainen Selldone-lompakko ja linkitä se kauppaasi. Even if your balance is negative, your customers can still shop and pay without any issues. Don't worry, your store's operations and data will continue smoothly for up to 1 month, without any interruptions.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Yhdistä tiliin'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Sovellukset asennettu',
        'sub-title' => 'Luettelo sovelluksista, jotka olet asentanut kauppaasi tällä viikolla.',
        'tip' => "Haluatko löytää lisää sovelluksia kauppaasi?",
        'view-app-store' => 'Vieraile Selldone App Storessa..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Kauppabotit',
        'sub-title' => 'Aktiiviset myyntibotit kaupassani.',
        'tip-title' => 'Botin myynti',
        'tip' => "Selldone on toimittanut sinulle automaattiset myyntibotit. Sinun tarvitsee vain siirtyä Lisäosat> Botit-paneeliin ja aktivoida kaupan botisi. Huomaa, että asianomaisen palvelun on oltava saatavilla maassasi.",
        'view-bots' => 'Hallitse botteja',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Viestintä asiakkaiden kanssa',
        'sub-title' => 'Kuinka monta yhteyttä olen ollut asiakkaideni kanssa tällä viikolla?',
        'faqs' => 'Usein Kysytyt Kysymykset',
        'tickets' => 'Asiakasliput',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Käyttäjien tila',
        'sub-title' => 'Toiminta :start - :end',
        'users' => [
            'title' => 'Asiakkaat',
            'subtitle' => 'Rekisteröidy käyttäjät',
        ],
        'views' => [
            'title' => 'Vierailut',
            'subtitle' => 'Kuinka monta kertaa olet käynyt kaupassa',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Palautuneet käyttäjät',

        'shop_views' => 'Kauppanäkymät',
        'baskets' => [
            'title' => 'Ostoskärryt',
            'subtitle' => 'Ilmoita uusien ostoskorien määrä',
        ],
        'products' => [
            'title' => 'Tuotteiden yleiskatsaus',
            'subtitle' => 'Kaupan tuotteiden tila tyypin mukaan',
            'value_name' => 'Tuotteet'
        ],
        'products_count' => 'Tuotetyypit',
        'views_count' => 'Katselukertojen määrä',
        'sell_count' => 'Myyntimäärä',
        'send_count' => 'Toimitusmäärä',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Pudota toimitus',
        'sub-title' => 'Main Panel for Top Selldone Drop Shipping Sellers',
        'total_fulfillments' => 'Saadut tilaukset yhteensä',
        'ds_count' => 'Vastaanotetut tilaukset',
        'statistics_title' => 'Ilmoita vastaanotetuista tilauksista',
        'ds_cancels' => 'Peruuta käyttöliittymämyyjä',
        'ds_rejects' => 'Peruuta sinä',
        'tip' => "Oletko suuri tavaroiden myyjä? Omistatko varaston, tehtaan tai tuotteiden jälleenmyyjän? Voit tarjota tuotteitasi muille myyjille Selldone Drop Shipping -palvelussa myydäksesi tuotteesi suuressa mittakaavassa. Lähetä meille sähköpostia osoitteeseen support@selldone.com opastamaan sinua.",
        'view-drop-shipping-panel' => 'Kirjaudu sisään tukkumyyntipaneeliin',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Valuuttakurssit',
        'sub-title' => 'Luettelo myymäläsi uusimmista valuuttakursseista.',
        'from' => 'Lähdevaluutta',
        'to' => 'Kohdevaluutta',
        'rate' => 'Muuntonopeus',
        'view-exchange-panel' => 'Hallitse valuuttakursseja',
    

        'vew-exchange-panel' => 'valuuttakurssien hallintapaneeli',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Asiantuntijasopimukset',
        'sub-title' => 'Mitkä ammattilaiset työskentelevät kaupassani?',
        'cost' => 'Sopimusmäärä',
        'duration' => 'Kesto',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Päivämäärä Peruuta',
        'end_at' => 'Toimituspäivä',
        'tip' => 'Hire top experts from Selldone to help grow your business.',
        'view-experts' => 'Aloita napsauttamalla.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Ilmoita aktiiviset maksuyhdyskäytävät kaupassa :shop.',
        'tip-title' => 'Tärkeitä vinkkejä',
        'tip' => "Siirry myymäläsi portaalin hallintasivulle ja lisää vähintään yksi portti muutamassa minuutissa. Asiakkaasi haluavat maksaa nopeasti ja turvallisesti verkkoportaalien kautta.",
        'view-shop-gateways' => 'Kirjaudu kauppaportaalini hallintaan.',
        'view-gateways' => 'Katso lisää yhdyskäytäviä',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Tilaukset',
        'sub-title' => 'Lista tällä viikolla saamistani tilauksista.',
        'total_baskets' => 'Tilaukset yhteensä',
        'total_posBaskets' => 'Käteismääräyksiä yhteensä',
        'pos-title' => 'POS-myymälälaatikko',
        'chart-label' => 'Tilaukset suoritettu (näitä tilauksia ei välttämättä makseta!)',
        'tip-title' => 'Pitäisi yrittää kovemmin...',
        'tip' => "Ei yksinkertaista menestystä.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Käsittelykeskus',
        'sub-title' => 'Kuinka paljon tilauksia käsittelimme kaupassa tällä viikolla?',
        'tip-title' => 'Sinulla ei ollut myyntiä!',
        'tip' => "Valitettavasti sinulla ei ollut myyntiä tällä viikolla. Sinun täytyy saada lisää kauppaasi. Voit lisätä tuotteita, valita parempia kuvia tai kirjoittaa parempia kuvauksia tuotteistasi. Harkitse kokopäivätyötä yrityksellesi. Jos teet sen oikein etkä turhaudu, onnistut.",
        'view-process-center' => 'Näytä prosessikeskus',
        'return' => [
            'title' => 'Palautettu tilaus',
            'subtitle' => 'Ilmoita palautetuista tilauksista.',
            'tip-title' => 'Tiesitkö että ...',
            'tip' => "You can create as many cash registers as you need with Selldone POS! Whether it's your tablet, mobile, or laptop, you can turn any device into your store's point of sale. It's simple, quick to set up, and fully prepared for your server. Aloita sen käyttö jo tänään!",
            'view-pos' => 'Kirjaudu verkkokaupan kassalle'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Istunnot',
        'sub-title' => 'Kuinka monta kertaa kävin kaupassani?',
        'countries-title' => 'Missä maissa on vierailtu eniten?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Haluatko ansaita rahaa kuluttamatta yhtä taalaa?',
        'message' => "Hyvä :name, voit siirtyä kohtaan Dashboard > Demonetization ja luoda viittauslinkin. Lähetä linkki ystävillesi, saat Selldone-lahjakortit ja prosenttiosuuden ystäväsi maksuista. Huomaa, että lahjakortti lähetetään sekä sinulle että ystävällesi.",
        'action' => 'Katso esittelylinkkini',
        'mail-clip' => "<b style='color: #C2185B'>Tärkeää:</b> Jos käytät sähköpostipalveluita, kuten Gmailia, jotka rajoittavat sähköpostin pituutta, etsi sähköpostin lopusta seuraava vaihtoehto näyttääksesi koko raportin ja napsauta sitä:",

        'no-coin-reward' => "<b style='color: #C2185B'>Anteeksi:</b> Toimintasi ei täyttänyt ilmaisen SEL Coins -palkinnon saamisen vaatimusta. Yritä kovemmin ja myy enemmän kaupassasi ensi kaudella.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Onnittelut:</b> Hienoa työtä! Based on your outstanding performance, we've credited :amount SEL Coins to your account as a reward.",

        'need-buy-license' => "<b>Level Up Your Business:</b> It looks like you haven’t registered any subscription plan for your website yet! Upgrade now to unlock more features for just :amount per month if paid annually.",
        'not-afford-message' => "Jos sinulla ei ole varaa tai sinulla on ongelmia maksun kanssa, kerro siitä meille osoitteeseen support@selldone.com.",
        'add-domain' => "<b>Miksi et omista yrityksellesi mukautettua verkkotunnusta?</b><br> Lisää verkkotunnus verkkosivustollesi nyt; se on ilmainen!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone on a<del> tuote</del> <span style = 'color: forestgreen'>yhteisö</span> .<br> Ole ammattimainen myyjä!",
        'message' => "Seuraa Selldonen virallisia sivuja Twitterissä, LinkedInissä ja sosiaalisessa mediassa. Send us any comments, requests or criticisms or participate in discussions about the Selldone. We are also part of the community of Selldone that <b>You make</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Sai uusia avokadotilauksia | :shop_title :time',
        'title' => "Suorituskykyraportti viimeisen 24 tunnin ajalta",
        'message' => "Asiakkaasi odottavat, että tilauksesi tarkistetaan ja hinnoitellaan. Vastaa asiakkaidesi pyyntöihin mahdollisimman pian saadaksesi lisää myyntiä.",
        'card_title' => "Tilaukset jonossa",
        'card_subtitle' => ":date lähtien",

        'card_payed' => "Maksetut tilaukset"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Vastaa viestiisi yhteisössä :community_title',
        'title' => ":name ja :count muut kommentoivat viestejäsi.",
        'message' => "Hei :name, viestisi saavat huomiota! Olet saanut kommentteja yhteisössämme. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name kommentoi viestejäsi.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Vastaa aiheeseen :topic_title',
        'title' => ":name ja :count muut vastasivat aiheestasi.",
        'message' => "Hei :name, aiheesi saa huomiota! Olet saanut vastauksia yhteisössämme. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name vastasi aiheestasi.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Uusi kirjautumistunnus :name',
        'category' => 'Turvallisuusilmoitukset',
        'title' => "Kirjaudu tilille",
        'message' => "Hyvä :name, olet kirjautunut Selldone-tilillesi.",   // Login in selldone (seller)
        'message-shop' => "Hyvä :name, olet kirjautunut sisään :shop_title -palveluun.",  // Login in shop (buyer)

        'footer' => "Jos et ole kirjautunut sisään, vaihda salasanasi.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Nosto",
        'deposit' => "Tallettaa",

        'withdraw_subject' => "Nosto tililtä :account",
        'deposit_subject' => "Talletus tilille :account",

        'message' => "Rahansiirto on suoritettu seuraavilla eritelmillä.",

        'type' => "Maksutavan tyyppi",

        'from' => "Lähdetili",
        'to' => "Destination account",

        'desc' => "Tapahtuman kuvaus",
        'action' => "Näytä tapahtuma",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Tärkeää! Sääntörikkomus| :shop",
        'category' => "Kriittinen tieto",
        'title' => "Kauppasi on saanut rangaistuksen",
        'action' => "Avaa kaupan kojelauta",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter on kutsunut sinut liittymään Selldone: hen",
        'title' => ":name on lähettänyt sinulle :amount auttamaan uuden verkkokaupan avaamisessa ja kaupallistamisessa!",
        'message' => "Hei **:receiver_name**, <br><br>Tervetuloa Selldoneeen! Selldonella voit helposti luoda verkkokauppasivustosi, blogisi, verkkoyhteisösi ja jopa perustaa online-POS-järjestelmän henkilökohtaista myyntiä varten – kaikki muutamassa minuutissa. Se on täydellinen online-yrityskäyttöjärjestelmä, joka on suunniteltu tekemään yrityksesi paremmaksi, nopeammaksi ja helpompi hoitaa.<br><br> Rekisteröidy <b>:date</b> ja saat :amount-kupongin aloittaaksesi!",
        'accept' => "Hyväksy kutsu",
        'owner' => "Omistaja",
        'join-date' => "Liittyi Selldonehen",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Palautuslinkki| :shop",
        'category' => "Kaupan turvallisuus",
        'title' => "Kaupan palautuslinkki <b>:shop_name</b> .",
        'message' => "Tämä sähköposti lähetettiin sinulle, koska pyysit myymäläsi palauttamista. Napsauta alla olevaa linkkiä palauttaa kauppasi ja kaikki siihen liittyvät tiedot.",
        'action' => "Vahvista kaupan palautus",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Kuinka paljon rahaa Selldone säästi yrityksellesi?',
        'sub-title' => 'Päivämäärästä :start - :end',
        'infrastructure' => [
            'title' => 'Infrastruktuuri',
            'subtitle' => 'Palvelimet, CDN, tallennustila ja muut pilvipalvelut',
        ],
        'experts' => [
            'title' => 'Asiantuntijat & Henkilökunta',
            'subtitle' => 'Kehittäjät, ylläpito ja tuki',
        ],
        'total_save' => 'Säästetty raha yhteensä'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Sinun suorituksesi',
        'sub-title' => 'Liiketoiminnan yleiskatsaus :start - :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Palautuneet käyttäjät',

        'shop_views' => 'Kauppanäkymät',
        'baskets' => [
            'title' => 'Ostoskärryt',
            'subtitle' => 'Ilmoita uusien ostoskorien määrä',

        ],
        'products' => [
            'title' => 'Tuotteiden yleiskatsaus',
            'subtitle' => 'Kaupan tuotteiden tila tyypin mukaan',
            'value_name' => 'Tuotteet'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Sivuston näyttökerrat yhteensä',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Olet saanut uuden tilauksen. Siirry toimittajapaneelin tilauksen käsittelysivulle.",
        'subject' => "🛍️ Uusi tilaus vastaanotettu| :order_id",
        'your_revenue' => "Sinun tulosi",
    ],
    'vendor-invite' => [
        'title' => 'Myyjän kutsu',
        'message' => "Olet saanut kutsun tulla :shop_name -toimittajaksi. Voit hyväksyä tai hylätä sen napsauttamalla seuraavia painikkeita.",
        'subject' => ":shop_name | Sait kutsun toimittajaksemme",
        'accept' => "Hyväksy ja Ryhdy myyjäksi",
        'reject' => "Hylätä",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Kutsu liittymään tiimiimme',
        'message' => "Sinut on kutsuttu liittymään :vendor_name osoitteessa :shop_name. Voit hyväksyä tai hylätä tämän kutsun käyttämällä alla olevia painikkeita.",
        'subject' => "Kutsu liittymään :vendor_name: hen|Ryhdy tiimin jäseneksi",
        'accept' => "Hyväksy ja liity tiimiin",
        'reject' => "Hylkää",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Kirjautumiskoodisi :shop",
        'header-message' => "Lähetämme sinulle tämän sähköpostin, koska pyysit kirjautumiskoodia myymälään. Löydät kertakäyttöisen salasanasi (OTP) alta:",
        'footer-message' => "Tämä koodi on voimassa 10 minuuttia. Jos et pyytänyt tätä kirjautumiskoodia, jätä tämä sähköposti huomiotta."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Vahvista sähköpostiosoitteesi| :shop",
        'title' => 'Sähköpostin vahvistus',
        'header-message' => "Hei :name,<br> Vahvista, että **:email** on sähköpostiosoitteesi napsauttamalla painiketta tai käytä alla olevaa linkkiä 48 tunnin sisällä.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Tuotepäivitykset| :shop",
        'title' => "Päivitys tuotteen tilasta - viimeiset 24 tuntia",
        'message' => "Toivottavasti tämä viesti löytää sinut hyvin. Tämä on lyhyt päivitys, joka kertoo tuotteidesi tilasta alustallamme viimeisen 24 tunnin aikana.\nTänä aikana joidenkin tuotteiden tilassa on tapahtunut muutoksia. Nämä muutokset voivat johtua ostoista, varastopäivityksistä tai muista asiaan liittyvistä tapahtumista.\nTarkempia tietoja kustakin tuotteesta saat kirjautumalla tilillesi ja tarkistamalla Tuotteen tila -osiossa.",
        'action' => "Avaa Toimittajapaneeli",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Joukkotilaukset vastaanotettu| :shop | :date",
        'title' => "Ilmoitus joukkotilauksista",
        'message' => "Olet vastaanottanut erän joukkotilauksia. Vieraile paneelisi tilauksen käsittelysivulla saadaksesi lisätietoja. Voit myös ladata tilausluettelon suojatun linkin kautta, voimassa 7 päivää.<br><br>\n        <b>TÄRKEÄÄ:</b> Tämä linkki on voimassa 7 päivää.<br>\n        Tämä linkki on dynaaminen, joten joka kerta kun napsautat sitä, saat viimeisimmät tilaukset tälle päivämäärälle. <b>Se tarkoittaa, että jos tilauksen maksutila muuttuu hylätyksi, et enää näe tilausta ladatussa CSV-tiedostossa tai jos tilaus on maksettu, se näkyy luettelossa.</b><br><br>\n        <ul>\n            <li>CSV sisältää maksettuja tilauksia, joille on varattu päivämäärä :date.</li>\n            <li>Varattu päivämäärä on päivämäärä, jolloin käyttäjä napsauttaa kassalle tilaussivulla.</li>\n        </ul>\n        <b>Välistääksesi päällekkäiset tilaukset tarkista aina tilaus ID ennen lähettämistä.</b>",
        'action' => "Lataa tilausluettelo",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Joitakin tilauksesi tuotteita ei hyväksytty eikä niitä voida toimittaa. Näiden tuotteiden summa palautetaan kortillesi pian."
    ]

];
