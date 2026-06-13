<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Dit bericht verwelkomt een nieuwe koper in de winkel.',
        ShopMailTemplateCodes::OrderCheckout => 'Deze melding wordt verzonden wanneer een koper een bestelling bevestigt.',
        ShopMailTemplateCodes::OrderPayment => 'Deze melding bevestigt de succesvolle betaling door een klant.',
        ShopMailTemplateCodes::OrderUpdate => 'Dit bericht wordt verzonden om een koper op de hoogte te houden van de status van zijn bestelling.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Dit bericht wordt naar een verkoper gestuurd om hem op de hoogte te stellen van een bevestigde bestelling.',
        ShopMailTemplateCodes::PosCheckout => 'Deze melding wordt verzonden om een verkooppuntbestelling voor een koper te bevestigen.',
        ShopMailTemplateCodes::PosPayment => 'Met deze melding wordt een door een koper verrichte verkooppuntbetaling bevestigd.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Met dit bericht wordt de verkoper op de hoogte gebracht van een aankoop die op zijn verkooppunt is gedaan.',
        ShopMailTemplateCodes::ShopContact => 'Deze melding wordt verzonden wanneer een contactformulier is verzonden.',
        ShopMailTemplateCodes::ShopGiftCard => 'Met deze melding wordt een gebruiker geïnformeerd dat hij een cadeaubon heeft ontvangen.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Dit bericht verwelkomt een nieuwe leverancier in de winkel.',
        ShopMailTemplateCodes::ShopVendorInvite => "Dit bericht wordt verzonden om een leverancier uit te nodigen om zich bij uw marktplaats aan te sluiten.",
        ShopMailTemplateCodes::ShopVendorOrder => "Dit bericht wordt naar de leverancier verzonden wanneer een bestelling wordt ontvangen met de status Betaald of Onder rembours (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Wordt dagelijks verzonden om leveranciers op de hoogte te houden van de status van hun producten.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Dit bericht wordt verzonden om een leverancier uit te nodigen om lid te worden van uw marktplaats.",

        ShopMailTemplateCodes::UserLogin => "Informeer de gebruiker om veiligheidsredenen met inloggegevens, inclusief IP-adres, datum en apparaat.",
        ShopMailTemplateCodes::LoginCode => "Stuur een eenmalige wachtwoordcode waarmee gebruikers zich kunnen aanmelden bij de winkel.",

        ShopMailTemplateCodes::EmailVerifyLink => "Stuur een link om het e-mailadres van de gebruiker te verifiëren. Deze e-mail wordt verzonden wanneer een gebruiker zich registreert bij SMS en zijn e-mailadres invoert. Het wordt niet verzonden wanneer een gebruiker zich rechtstreeks registreert met sociale login of e-mail.",

        ShopMailTemplateCodes::EmailBulkOrder => "Verzend een lijst met ontvangen en betaalde bestellingen in bulk voor een specifieke dag."


    ,

    ],


    'global' => [
        'greetings' => 'Hallo, :name!',
        'end-statement' => 'Ondersteuningsteam',

        'receiver_name' => 'Hallo :user_name',
        'footer-help' => "Hulp nodig? Vraag ernaar op [support@selldone.com](mailto:support@selldone.com) of bezoek ons ​​[helpcentrum](https://selldone.com/community).",
        'selldone-team' => 'Het Selldone-team',
        'footer-shop' => "Als je ergens hulp bij nodig hebt, aarzel dan niet om ons een e-mail te sturen: :shop_mail",
        'accept' => "Aanvaarden",
        'reject' => "Afwijzen",
        'verify' => "verifiëren",
        'title' => "Titel",
        'value' => "Waarde",
        'description' => "Beschrijving",
        'shop' => "Winkel",
        'shop-info' => "Winkelinformatie",
        'user' => "Gebruiker",
        'user-info' => "Accountinformatie",
        'license' => "Vergunning",
        'status' => "Toestand",
        'start' => "Begin",
        'end' => "Einde",
        'renewal' => "Vernieuwing",
        'view' => "Weergave",

        'balance' => "Balans",
        'card_number' => "Kaartnummer",
        'cvv' => "Cvv",
        'expire_date' => "Vervaldatum",

        'Dashboard' => "Dashboard",
        'order' => "volgorde",
        'view_order' => "Bestelling bekijken",
        'pay_now' => "Pay now",

        'official_selldone' => "OFFICILE VERKOCHT",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Munteenheid",
        'free-balance' => "Gratis saldo",
        'locked-balance' => "Geblokkeerd saldo",
        'bot' => "Bot",
        'requests' => "Verzoeken",
        'baskets' => 'Karren',
        'physical' => "Fysiek",
        'virtual' => "virtueel",
        'file' => "Bestand",
        'service' => "Onderhoud",
        'fulfillment' => "Vervulling",
        'open' => "Open",
        'reserved' => "Gereserveerd",
        'canceled' => "Geannuleerd",
        'payed' => "Betaald",
        'cod' => "COD",
        'orders-count' => 'Bestellingen',
        'payments-count' => 'betalingen',
        'confirms-count' => 'Bevestigt',
        'sends-count' => 'Verstuurt',
        'delivers-count' => 'levert',
        'count' => 'Graaf',
        'transactions-count' => 'Transacties tellen mee',
        'success-transactions' => 'Succesvolle transacties',
        'total-amount' => 'Totaalbedrag',
        'amount' => 'Hoeveelheid',
        'wage' => 'Salaris',
        'debug' => 'debuggen',
        'pos' => 'POS',
        'live' => 'Live',
        'CheckQueue' => 'Wachtrij controleren',
        'OrderConfirm' => 'Bestelling bevestigen',
        'PreparingOrder' => 'Bestelling voorbereiden',
        'SentOrder' => 'Verzonden bestelling',
        'ToCustomer' => 'Geleverd aan klant',
        'Pending' => 'In afwachting',
        'Accepted' => 'Geaccepteerd',
        'Rejected' => 'Afgekeurd',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefoon',
        'total' => 'Totaal',
        'view-detail' => 'Details bekijken',
        'empty' => 'Leeg',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Antwoord',
        'reactions' => 'reacties',
        'Comments' => 'Opmerkingen',
        'last-comment' => 'Laatste opmerking',
        'response-to' => 'Antwoord op',
        'posts' => 'Berichten',
        'post' => 'Na',

        'name' => 'Naam',
        'email' => 'E-mail',
        'type' => 'type',
        'device' => 'Apparaat',
        'platform' => 'Platform',
        'browser' => 'Browser',
        'time' => 'Tijd',
        'Wallet' => 'Portemonnee',
        'date' => 'Datum',

        'account' => 'Rekening',
        'transaction' => 'Transactie',
        'fee' => 'Vergoeding',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Rekening',
        'category' => 'Categorie',
        'password' => 'Wachtwoord',
        'verify-login' => "Verifiëren en inloggen",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Koop nu",
        'add-domain' => "Add Domain",
        'views' => 'Keer bekeken',


        'country' => 'Land',
        'address' => 'adres',
        'postal' => 'Postcode',
        'building_no' => 'Gebouw #',
        'building_unit' => 'Eenheid #',
        'message' => 'Bericht',


        'customer' => 'Klant',
        'cart-items' => 'Winkelwagen items',
        'payment' => 'Betaling',
        'receiver' => 'Ontvanger',
        'virtual-items' => 'Virtuele items',
        'no-payment' => 'Geen betaling!',

        'enable' => 'Inschakelen',
        'access' => 'Toegang',
        'bank' => 'Bankgegevens',

        'vendor' => 'Leverancier',

        'view_content' => "Bekijk de volledige inhoud",
        'files' => 'Bestanden',
        'download' => 'Downloaden',
        'file_name' => 'Bestandsnaam',
        'file_size' => 'Maat',

        'subscription' => 'Abonnement',
        'products' => 'Producten',
        'vendor_products' => 'Leveranciersproducten',

        'pickup' => 'Ophalen',

        'minutes' => 'Minuten',
        'hours' => 'Uur',

        'refund' => 'Terugbetaling',
        'recipient_address' => 'Adres van ontvanger',
        'signature' => 'Handtekening',
        'blockchain' => 'Blockchain',
        'details' => 'Details',


    

        'Shop' => 'Winkel',
        'dashboard' => 'dashboard',
        'comments' => 'opmerkingen',
        'wallet' => 'portemonnee',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business-besturingssysteem",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Prestatierapport, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Seizoensrapport, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hoi',
            'name' => 'Goedkeuren, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Ondersteuning :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verifiëren, Selldone'
        ],
        'Welcome' => [
            'id' => 'hoi',
            'name' => 'Gemeenschap, Selldone'
        ],
        'NewShop' => [
            'id' => 'kooplieden',
            'name' => 'Goedkeuren, Selldone'
        ],
        'Approve' => [
            'id' => 'goedkeuren',
            'name' => 'Goedkeuren, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Orderbeheer :name'
        ],

        'Recovery' => [
            'id' => 'herstel',
            'name' => 'Selldone herstelteam'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'In behandeling',
        'PAYED' => 'Betaald',
        'CANCELED' => 'Geannuleerd',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Beheerder',
            'OFFICER' => 'Officier en Supervisor',
            'AUDITING' => 'Auditmanager',
            'EMPLOYEE' => 'Medewerker',
            'PRODUCT' => 'Productmanager',
            'CONTENT' => 'Inhoudsbeheerder',
            'MARKETING' => 'Marketingmanager',
            'VIEWER' => 'kijker',

        ],
        'subject' => ":inviter heeft u uitgenodigd als :level| :shop",
        'category' => "Personeelsuitnodiging",
        'title' => "Je bent uitgenodigd voor <b>:shop_name</b> als <b>:level</b> .",
        'message' => "U heeft een uitnodiging ontvangen om samen te werken met het <b>:shop_title</b>-team in het bedrijfsleven. U heeft de mogelijkheid om dit aanbod te accepteren of af te wijzen. Als u ervoor kiest om te accepteren, log dan in op de Selldone-service om uw beslissing te bevestigen. Na bevestiging krijgt u toegang tot het winkelbeheergedeelte.",

    ],

    'welcome-email' => [
        'subject' => "👋 Welkom :name, laten we aan de slag gaan met Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Welkom bij Selldone",
        'message' => "Bedankt dat u voor Selldone hebt gekozen! U maakt nu deel uit van een levendige gemeenschap die wereldwijde verkopers met klanten, lokale bedrijven met ondernemingen en individuen met bedrijven verbindt. Al onze Master- en Pro-tools zijn **gratis** en **onbeperkt** voor u beschikbaar. Wij zijn hier om u te ondersteunen en de deuren naar uw succes te openen.",

        'index' => "Stap :step.",

        'step-domain' => [
            'title' => 'Voeg uw aangepaste domein toe',
            'message' => "Voeg om te beginnen gratis uw aangepaste domein toe in het Shop Dashboard onder Instellingen > Domeininstellingen.",
            'action' => 'Beheer mijn domeinen',
        ],
        'step-landing' => [
            'title' => 'Pas uw startpagina aan',
            'message' => "Personaliseer uw startpagina door naar Dashboard > Pagina's te gaan. Kies een landingspagina of maak een nieuwe. Het is eenvoudig en intuïtief en u kunt er meteen mee aan de slag.",
            'action' => 'Pas mijn landingspagina aan',
        ],
        'step-payment' => [
            'title' => 'Betaalmethoden instellen',
            'message' => "Accepteer betalingen rechtstreeks op uw bankrekening. Om uw betalingsproviders zoals Stripe, PayPal en meer te verbinden, gaat u naar Dashboard > Boekhouding > Gateway.",
            'action' => 'Betaalmethoden toevoegen',
        ],
        'step-products' => [
            'title' => 'Voeg uw producten toe',
            'message' => "Voeg eenvoudig producten en categorieën toe via Dashboard > Producten. Het is net als het beheren van bestanden en mappen op uw pc: volledig klaar voor slepen en neerzetten. U kunt producten ook in bulk importeren met Excel. Er is een voorbeeldsjabloon beschikbaar om u op weg te helpen.",
            'action' => 'Beheer mijn producten',
        ],
        'step-shipping' => [
            'title' => 'Verzendmethoden instellen',
            'message' => "Om klanten verzendkosten in rekening te brengen, definieert u uw verzendmethoden in Dashboard > Logistiek > Verzending. U kunt voor verschillende locaties verschillende prijzen en ondersteuning instellen. Vergeet niet de herkomst van uw magazijn in te stellen in Dashboard > Logistiek > Magazijn.",
            'action' => 'Beheer verzendmethoden',
        ],
    

        'seller' => [
            'title' => 'Bent u een verkoper?',
            'message' => 'Om te beginnen met verkopen, voer je via onderstaande link je dashboard in Selldone in en creëer je volledig gratis je eerste winkel. Dit duurt een paar minuten en je hebt je eigen winkel en online site. We zullen u dan begeleiden naar de volgende stappen en de betalingsgateway krijgen.',
            'action' => 'Log in op mijn dashboard',
        ],
        'buyer' => [
            'title' => 'Ik ben een koper',
            'message' => 'Gefeliciteerd. Als je eenmaal lid bent van Selldone, ben je van alle rompslomp van lidmaatschap en authenticatie in online winkels af. Om te profiteren van elke winkel en site die het Selldone-platform gebruikt, kunt u met één klik inloggen en uw aankoop eenvoudig, snel en veilig doen.',
        ],
    ],


    'charge-account' => [
        'category' => 'Portemonnee > Account > Op rekening',
        'title' => "Succes Charge",
        'message' => "Uw account <b>:account_number</b> is met succes afgeschreven van <b>:amount</b>.",
        'account' => 'Rekening',
        'charge' => 'Aanval',
        'balance' => 'Balans',
        'footer' => "Maak zakendoen gemakkelijk, haalbaar en toegankelijk voor iedereen over de hele wereld."
    ],

    'verify-email' => [
        'subject' => "🙌 Voltooi je aanmelding bij Selldone! Verifieer koppeling.",
        'category' => "JE BENT EEN STAP WEG",
        'title' => "Verifieer je e-mailadres",
        'message' => "Hallo :name,<br><br>Bedankt dat u voor Selldone hebt gekozen!<br><br>Om te bevestigen dat <b>:email</b> uw juiste e-mailadres is, klikt u op de onderstaande knop of gebruikt u de meegeleverde link. U heeft 48 uur de tijd om deze verificatie te voltooien.",
        'footer' => "Als u problemen ondervindt bij het klikken op de knop Verifiëren, kopieert en plakt u de onderstaande URL in uw webbrowser: :activation_url",
        'next-step' => "Vervolgens sturen we u wat nuttig materiaal en een stapsgewijze handleiding waarmee u eenvoudig uw aangepaste domein kunt toevoegen, betalingen kunt instellen, producten kunt toevoegen en uw eerste bestelling kunt ontvangen.",

    ],
    'verify-email-code' => [
        'subject' => "Verificatiecode voor :name",
        'category' => "SECURITY",
        'title' => "E-mail verificatiecode",
        'message' => "Hallo :name,<br><br>Om te bevestigen dat <b>:email</b> uw juiste e-mailadres is, voert u binnen de volgende <b>10 minuten</b> de volgende code in:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Uw winkel is klaar| :name",
        'category' => "JE BENT EEN STAP WEG",
        'title' => "Installatie voltooid",
        'account_title' => "Jouw rekening",
        'account_msg' => "Verifieer en log in op uw account met deze informatie.",
        'shop_msg' => "Accountinformatie over het zakelijke besturingssysteem van Selldone.",

    ],

    'reset2fa' => [
        'category' => "OFFICILE VEILIGHEIDSBERICHT",
        'title' => "Verzoek om inloggen in 2 stappen uit te schakelen",
        'message' => "U ontvangt deze e-mail omdat we een verzoek hebben ontvangen om de tweefactorauthenticatie voor het **:name**-account opnieuw in te stellen met het **:email**-e-mailadres.<br><br>We hebben de volgende gegevens voor uw account gevonden:",
        'footer' => "Als u geen wachtwoordreset heeft aangevraagd, hoeft u verder niets te doen.",
        'action' => 'Inloggen in twee stappen uitschakelen',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Je winkel is nu klaar!",
        'category' => "GEBOREN NIEUWE ONLINE WINKEL IN DE WERELD",
        'title' => "Gefeliciteerd, :name!",
        'message' => "<b>Gefeliciteerd, :name! Uw nieuwe online bedrijf is nu live!</b> Wij heten u van harte welkom in de Selldoners-gemeenschap. U heeft de eerste stap richting succes gezet en wij staan ​​klaar om u bij elke stap te helpen.<br>Nu uw winkel klaar is, zorgen we ervoor dat u klaar bent om rechtstreeks betalingen van uw klanten te ontvangen en uw imperium te laten groeien. Als u ooit hulp nodig heeft, zijn we slechts één bericht verwijderd: ons ondersteuningsteam staat altijd voor u klaar.<br><br><b>Belangrijke volgende stappen:</b> Zorg er om te beginnen voor dat u helemaal klaar bent voor het ontvangen van betalingen en een soepele werking. We begeleiden u door elke fase om uw winkel naadloos te laten werken.",
        'pdf-book' => "Mis het bijgevoegde handboek niet: Do Your Business Like A Game",

        'account' => [
            'title' => 'Stap 1: Maak een account aan in de Selldone-portemonnee',
            'message' => "Maak om te beginnen een account aan in uw Selldone-portemonnee. Hier worden uw kosten afgetrokken, en hier kunt u ook opwaarderen om uw winkel soepel te laten werken. Als uw saldo ooit negatief wordt, hoeft u zich geen zorgen te maken! Uw winkel blijft zonder onderbreking functioneren.",
            'action' => 'Inloggen op portemonnee',
        ],

        'shop-account' => [
            'title' => 'Stap 2: verbind het account met de winkel',
            'message' => "Verbind vervolgens uw portemonnee-account met uw winkel. Ga naar <b>Store > Boekhouding > Factuur</b> en koppel uw portemonnee. Dit zorgt ervoor dat alle klantbetalingen rechtstreeks op uw bankrekening worden gestort. Selldone trekt geen bedragen van uw inkomsten af.",
            'action' => 'Winkel factuurpaneel',
        ],

        'gateway' => [
            'title' => 'Stap 3: Verbind de online betalingsgateway',
            'message' => "Laten we nu uw online betalingsgateway instellen. Ga naar <b>Store > Boekhouding > Port</b> en klik op <b>Nieuwe poort toevoegen</b>. Selecteer uw valuta en u ziet een lijst met beschikbare betalingsgateways. Een gateway aansluiten is snel en eenvoudig, maar als u hulp nodig heeft, raadpleeg dan gerust de Selldone-handleidingen of neem contact met ons op.",
            'action' => 'Voeg een portaal toe aan de winkel',
        ],

        'domain' => [
            'title' => 'Laatste stap: een dedicated domein koppelen',
            'message' => "Koppel nu uw aangepaste domein aan uw winkel. Hierdoor kunnen klanten uw producten of diensten kopen en rechtstreeks aan u betalen.",
            'action' => 'Introductie en ontvangst van onbeperkt cadeaubonnen',
        ],
    ],


    'basket-list' => [
        'item' => "item",
        'count' => "Graaf",
        'price' => "prijs",
        'discount-code' => "Kortingscode",
        'customer-club' => 'Klantenclub',
        'shipping' => "Verzending",
        'total' => "Totaal",
        'offer' => "Bieden",
        'coupon' => "Coupon",
        'lottery' => "Prijs",
        'tax' => "Belasting",
        'tax_included' => "Inbegrepen in prijs",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Methode',
        'amount' => 'Hoeveelheid',
        'giftcard' => 'Gift card',
        'payment' => 'Betaling',
    ],


    'shop-subscription-email' => [
        'category' => "Abonnement update",
        'title' => "Winkellicentie: :shop_title",
        'title-reserved' => "Licentie reserveren: :shop_title",
        'title-active' => "Actieve licentie: :shop_title",
        'title-finished' => "Voltooide licentie: :shop_title",
        'title-cancel' => "Licentie annuleren: :shop_title",
        'message' => "Uw winkellicentieplan geüpdatet,",
        'RESERVED' => "⚡ Uw abonnement is **gereserveerd**.",
        'ACTIVE' => "🟢 Uw abonnement is **geactiveerd**.",
        'FINISHED' => "🚧 Uw abonnement is **voltooid**.",
        'CANCEL' => "⛔ Uw abonnement is **geannuleerd**.",
    ],

    'support' => [
        'subject' => "Ondersteuningscentrum|:name heeft geantwoord",
        'category' => "Ondersteuning's centrum",
        'title' => "Je hebt een reactie ontvangen",
        'action' => "Winkelbeheer openen",
    ],

    'shop-customer-join' => [
        'subject' => "Word lid van :shop_title",
        'category' => "Nieuwe klant viering",
        'title' => "We zijn blij met je lidmaatschap",
        'action' => "Bezoek nu",
    ],

    'shop-vendor-join' => [
        'subject' => "Leveranciers onboarding | :shop_title",
        'category' => "Nieuwe verkopersviering",
        'title' => "We zijn blij met je lidmaatschap",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Cadeaubon :shop_title",
        'category' => "Nieuwe kaart toevoegen",
        'title' => "Gefeliciteerd, je hebt een cadeaubon ontvangen",
        'action' => "Winkel nu",
        'message' => "U heeft een cadeaubon ter waarde van :balance :currency ontvangen. U kunt deze cadeaukaart in onze winkel gebruiken.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Ondersteuningscentrum| :shop",
        'category' => "steun",
        'title' => "Je hebt een reactie ontvangen",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️Bestellingsbevestiging|Bestel :order_id",
        'title' => "volgorde",
        'message' => "U heeft een bestelling geplaatst in onze winkel. Wij hebben uw bestelling ontvangen en sturen u nog een e-mail zodra de betaling is bevestigd."
    ,

        'payments' => 'betalingen',
    ],

    'order-payment' => [
        'subject' => "🛍️ Betalingsbevestiging|Bestel :order_id",
        'title' => "Betalingsopdracht",
        'message' => "Uw betaling voltooid,<br> We hebben je bestelling. We sturen je nog een e-mail wanneer je bestelling wordt verzonden.",
    

        'payments' => 'betalingen',
    ],

    'order-update' => [
        'subject' => "🛍️ Bestelstatusupdate|Bestel :order_id",
        'title' => "Bestelstatusupdate",
        'message' => "Uw bestelling is bijgewerkt. In uw account kunt u de laatste status van deze bestelling bekijken.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Uw bestelling staat in de wachtrij voor verwerking. We laten het u weten wanneer het wordt voorbereid.",
                'OrderConfirm' => "Uw bestelling is bevestigd en de voorbereiding is gestart.",
                'PreparingOrder' => "Uw bestelling wordt voorbereid en zal binnenkort worden verzonden.",
                'SentOrder' => "Uw bestelling is verzonden. U ontvangt deze binnenkort.",
                'ToCustomer' => "Uw bestelling is afgeleverd. Wij hopen dat je ervan geniet!",

                'PreparingOrder-PICKUP' => "Uw bestelling wordt voorbereid. Je ontvangt een melding wanneer het klaar is om opgehaald te worden.",
                'SentOrder-PICKUP' => "Uw bestelling staat klaar om afgehaald te worden. Kom gerust naar de winkel om het op te halen.",
                'ToCustomer-PICKUP' => "Uw bestelling is opgehaald. Wij hopen dat je ervan geniet!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Uw bestelling staat in de wachtrij voor verwerking. We laten het u weten als het klaar is.",
                'OrderConfirm' => "Uw bestelling is bevestigd en de voorbereiding is bezig.",
                'PreparingOrder' => "Uw bestelling wordt voorbereid en wordt binnenkort naar u verzonden.",
                'ToCustomer' => "Uw virtuele bestelling is op uw account afgeleverd. Bedankt!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Uw serviceaanvraag staat in de wachtrij. We laten het je weten als we beginnen.",
                'OrderConfirm' => "Uw service is bevestigd en we bereiden ons voor om te beginnen.",
                'PreparingOrder' => "We zijn uw service aan het voorbereiden en zullen u op de hoogte stellen zodra deze is voltooid.",
                'ToCustomer' => "Uw dienstverlening is compleet. Bedankt dat u voor ons heeft gekozen!"
            ],
            'FILE' => [
                'PreparingOrder' => "Uw dossier wordt voorbereid en zal binnenkort beschikbaar zijn.",
                'ToCustomer' => "Uw bestand is klaar en is afgeleverd. Je kunt het nu downloaden."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Uw abonnementsbestelling staat in de wachtrij. We laten het u weten wanneer de verwerking begint.",
                'OrderConfirm' => "Uw abonnement is bevestigd en wordt ingesteld.",
                'PreparingOrder' => "We zijn uw abonnement aan het voorbereiden en het gaat binnenkort van start.",
                'SentOrder' => "Uw abonnement is geactiveerd. Je ontvangt voortdurend updates.",
                'ToCustomer' => "Uw abonnementsservice is succesvol geactiveerd."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Gefeliciteerd :name|Nieuwe voucher: :title',
        'category' => "GEFELICITEERD, NIEUWE VOUCHER",
        'message' => "Hey :name,<br><br>Je hebt van ons een nieuwe voucher ontvangen! Je kunt nog meer vouchers verdienen door Selldone voor te stellen aan je vrienden en iedereen die je kent. Deze voucher is **:price :currency** waard.<br><br>Je hebt de eerste stap gezet en we zijn er om je te helpen nieuwe functies te ontgrendelen met je voucher! Log in met **:email** en vind uw voucher in de winkel **Dashboard** > **Instellingen** > **Licentie**.<br><br>Gefeliciteerd!",
        'action' => "Mijn dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Gefeliciteerd, beste :name|Je hebt een speciaal cadeau ontvangen!',
        'category' => "Aankondiging van het ontvangen van een geschenk",
        'title' => "Cadeaus voor jou",
        'message' => "Hallo :name, we zijn blij u te kunnen laten weten dat u een speciaal cadeau van Selldone heeft ontvangen! 🎉 U kunt meer cadeaus verdienen door actief te blijven, uw winkel te laten groeien en uw expertise op Selldone te verbeteren. Om uw cadeau te bekijken, logt u eenvoudig in met :email en zoekt u het in de rechterbovenhoek van uw dashboard.<br><br>Dit cadeau is **:price :currency** waard en u kunt het eenvoudig in uw portemonnee storten binnen Selldone.<br><br>Gebruik uw cadeau om de licentie van uw winkel te upgraden en ontgrendel nog krachtigere tools om uw online bedrijf een boost te geven!",
        'action' => "Geschenken",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nieuwe bestelling ontvangen| :order_id",
        'title' => "New Order",
        'message' => "U heeft een nieuwe bestelling ontvangen. Ga naar de orderverwerkingspagina in uw winkel.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Uw ingevulde informatie',
        'output-form-title' => 'Informatie over gekochte artikelen',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬:shop_title|Wekelijks rapport :time',
        'title' => 'Wekelijks winkelprestatierapport',
        'message' => "Dit is het wekelijkse rapport van uw winkel, van <b>:start</b> tot <b>:end</b>. Dit rapport bevat tips om uw bedrijf te verbeteren. Ook kunt u de status van uw webwinkel en recente bestellingen bekijken. Ik hoop dat je een fijne dag en week hebt."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Uw :amount-spaarrapport van de afgelopen drie maanden| :shop_title',
        'title' => 'Seizoensrapport over uw bedrijfsactiviteiten, beloningen en financiële besparingen',
        'message' => "Dit is uw <b>:shop_title</b> seizoensrapport van <b>:start</b> tot <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Verbonden accounts',
        'sub-title' => 'Wat is de laatste status van portemonnee-accounts die aan mijn winkel zijn gekoppeld?',
        'view-wallet' => 'Portemonnee bekijken',
        'tip-title' => 'Belangrijke tips',
        'tip' => "Maak een gratis Selldone-portemonnee aan en koppel deze aan uw winkel. Zelfs als uw saldo negatief is, kunnen uw klanten nog steeds zonder problemen winkelen en betalen. Maakt u zich geen zorgen, de activiteiten en gegevens van uw winkel blijven maximaal 1 maand soepel doorgaan, zonder enige onderbrekingen.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Maak verbinding met account'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps geïnstalleerd',
        'sub-title' => 'Lijst met apps die je deze week in je winkel hebt geïnstalleerd.',
        'tip' => "Wilt u meer apps voor uw winkel vinden?",
        'view-app-store' => 'Bezoek de Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Uw winkelbots',
        'sub-title' => 'Actieve verkoopbots in mijn winkel.',
        'tip-title' => 'Botverkoop',
        'tip' => "Selldone heeft u voorzien van automatische verkoopbots. Het enige dat u hoeft te doen, is naar het paneel Add-ons> Bots gaan en uw winkelbots activeren. Houd er rekening mee dat de relevante service beschikbaar moet zijn in uw land.",
        'view-bots' => 'Bots beheren',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Communicatie met klanten',
        'sub-title' => 'Hoeveel contacten heb ik deze week met mijn klanten gehad?',
        'faqs' => 'Veel Gestelde Vragen',
        'tickets' => 'Klantenkaarten',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Gebruikersstatus',
        'sub-title' => 'Activiteit van :start tot :end',
        'users' => [
            'title' => 'Klanten',
            'subtitle' => 'Gebruikers aanmelden',
        ],
        'views' => [
            'title' => 'bezoeken',
            'subtitle' => 'Hoe vaak heb je de winkel bezocht',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Teruggekeerde gebruikers',

        'shop_views' => 'Winkelweergaven',
        'baskets' => [
            'title' => 'Winkelwagentjes',
            'subtitle' => 'Meld het aantal nieuwe winkelwagentjes',
        ],
        'products' => [
            'title' => 'Productenoverzicht',
            'subtitle' => 'Status van producten in de winkel per type',
            'value_name' => 'Producten'
        ],
        'products_count' => 'Producttypes',
        'views_count' => 'Kijkcijfers',
        'sell_count' => 'Tellen verkopen',
        'send_count' => 'Verzendtelling:',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Dropshipping',
        'sub-title' => 'Panel voor grote verkopers van Drop Shipping Selldone.',
        'total_fulfillments' => 'Totaal aantal ontvangen bestellingen',
        'ds_count' => 'Ontvangen bestellingen',
        'statistics_title' => 'Ontvangen bestellingen melden',
        'ds_cancels' => 'Annuleren door interface-verkoper',
        'ds_rejects' => 'Annuleren door jou',
        'tip' => "Bent u een grote verkoper van goederen? Heeft u een magazijn, fabriek of distributeur van producten? U kunt uw producten aanbieden aan andere verkopers in de Selldone Drop Shipping-service om uw product op grote schaal te verkopen. E-mail ons op support@selldone.com om u te begeleiden.",
        'view-drop-shipping-panel' => 'Log in op groothandelspaneel',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Wisselkoersen',
        'sub-title' => 'Lijst met de laatste valutawisselkoersen in uw winkel.',
        'from' => 'Bronvaluta',
        'to' => 'Bestemmingsvaluta',
        'rate' => 'Omrekeningskoers',
        'view-exchange-panel' => 'Beheer wisselkoersen',
    

        'vew-exchange-panel' => 'paneel voor wisselkoersbeheer',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Expertcontracten',
        'sub-title' => 'Welke professionals werken aan mijn winkel?',
        'cost' => 'Contractbedrag',
        'duration' => 'Duur',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum Annuleren',
        'end_at' => 'Bezorgdatum',
        'tip' => 'U kunt de beste specialisten in Selldone inhuren om uw bedrijf te ontwikkelen.',
        'view-experts' => 'Klik om te beginnen.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Rapporteer actieve betalingsgateways op de shop :shop.',
        'tip-title' => 'Belangrijke tips',
        'tip' => "Ga naar de portalbeheerpagina in uw winkel en voeg binnen enkele minuten ten minste één poort toe. Uw klanten betalen graag snel en veilig via online portals.",
        'view-shop-gateways' => 'Log in op mijn winkelportaalbeheer.',
        'view-gateways' => 'Bekijk meer gateways',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Bestellingen',
        'sub-title' => 'Lijst met bestellingen die ik deze week heb ontvangen.',
        'total_baskets' => 'Totaal aantal bestellingen',
        'total_posBaskets' => 'Totaal contante bestellingen',
        'pos-title' => 'POS-winkeldoos',
        'chart-label' => 'Bestellingen afgerond (deze bestellingen zijn niet per se betaald!)',
        'tip-title' => 'Je zou harder moeten proberen...',
        'tip' => "Geen simpel succes.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Verwerkingscentrum',
        'sub-title' => 'Hoeveel bestelling hebben we deze week in de winkel verwerkt?',
        'tip-title' => 'Je hebt geen uitverkoop gehad!',
        'tip' => "Helaas heb je deze week geen verkopen gehad. Je moet meer naar je winkel halen. U kunt meer producten toevoegen, betere afbeeldingen kiezen of betere beschrijvingen voor uw producten schrijven. Overweeg een fulltime baan voor uw bedrijf. Als je het goed doet en niet gefrustreerd raakt, zul je slagen.",
        'view-process-center' => 'Bekijk procescentrum',
        'return' => [
            'title' => 'Geretourneerde bestelling',
            'subtitle' => 'Meld geretourneerde bestellingen.',
            'tip-title' => 'Wist je dat ...',
            'tip' => "Met Selldone POS kunt u zoveel kassa's maken als u nodig heeft! Of het nu uw tablet, mobiel of laptop is, u kunt van elk apparaat het verkooppunt van uw winkel maken. Het is eenvoudig, snel in te stellen en volledig voorbereid op uw server. Begin het vandaag nog te gebruiken!",
            'view-pos' => 'Inloggen op mijn online winkel Kassier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessies',
        'sub-title' => 'Hoe vaak heb ik mijn winkel bezocht?',
        'countries-title' => 'Welke landen zijn het meest bezocht?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Wil je geld verdienen zonder een cent uit te geven?',
        'message' => "Beste :name, je kunt naar Dashboard > Demonetization gaan en een verwijzingslink maken. Stuur de link naar je vrienden. Je ontvangt een Selldone-cadeaubon en een percentage van de betalingen van je vriend. Houd er rekening mee dat de cadeaubon zowel naar jou als naar je vriend wordt verzonden.",
        'action' => 'Bekijk mijn introductie link',
        'mail-clip' => "<b style='color: #C2185B'>Belangrijk:</b> Als u e-mailservices zoals Gmail gebruikt die de lengte van de e-mail beperken, zoek dan de volgende optie aan het einde van de e-mail om het volledige rapport weer te geven en klik erop:",

        'no-coin-reward' => "<b style='color: #C2185B'>Sorry:</b> je activiteit voldeed niet aan de vereiste om een gratis SEL Coins-beloning te ontvangen. Doe je best en verkoop volgend seizoen meer in je winkel.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Gefeliciteerd:</b> Goed gedaan! Op basis van uw uitstekende prestaties hebben we :amount SEL-munten als beloning op uw account bijgeschreven.",

        'need-buy-license' => "<b> Verbeter uw bedrijf: </b> Het lijkt erop dat u nog geen abonnement voor uw website heeft geregistreerd! Upgrade nu om meer functies te ontgrendelen voor slechts :amount per maand bij jaarlijkse betaling.",
        'not-afford-message' => "Als je de betaling niet kunt betalen of problemen hebt met betalen, laat het ons dan weten via support@selldone.com.",
        'add-domain' => "<b>Waarom geen aangepast domein voor uw bedrijf?</b><br> Voeg nu een domein toe aan uw website; het is gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone is een<del> Product</del> <span style = 'color: forestgreen'>gemeenschap</span> .<br> Wees een professionele Selldoner!",
        'message' => "Volg de officiële pagina's van de Selldone op Twitter, LinkedIn en sociale netwerken. Stuur ons opmerkingen, verzoeken of kritiek of neem deel aan discussies over de Selldone. We maken ook deel uit van de gemeenschap van Selldone die <b>u maakt</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nieuwe avocado-bestellingen ontvangen|:shop_title :time',
        'title' => "Prestatierapport voor de afgelopen 24 uur",
        'message' => "Uw klanten wachten tot uw bestellingen worden beoordeeld en geprijsd. Reageer zo snel mogelijk op de verzoeken van uw klanten om meer verkopen te krijgen.",
        'card_title' => "Bestellingen in de wachtrij",
        'card_subtitle' => "Sinds :date",

        'card_payed' => "Betaalde bestellingen"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Reageer op je bericht in :community_title',
        'title' => ":name, en :count anderen hebben gereageerd op uw berichten.",
        'message' => "Hallo :name, uw berichten krijgen aandacht! Je hebt reacties ontvangen in onze community. Log in op uw account om deel te nemen aan de discussie en te zien wat iedereen zegt.",
        'title-simple' => ":name heeft op je bericht gereageerd!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Reageer op uw onderwerp :topic_title',
        'title' => ":name, en :count anderen reageerden op uw onderwerp.",
        'message' => "Hallo :name, uw onderwerp krijgt aandacht! Je hebt antwoorden ontvangen in onze community. Log in op uw account om deel te nemen aan de discussie en te zien wat iedereen zegt.",
        'title-simple' => ":name heeft gereageerd op uw onderwerp.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nieuwe login :name',
        'category' => 'Beveiligingsmeldingen',
        'title' => "Inloggen op account",
        'message' => "Beste :name, u bent ingelogd op uw Selldone-account.",   // Login in selldone (seller)
        'message-shop' => "Beste :name, u bent ingelogd op :shop_title.",  // Login in shop (buyer)

        'footer' => "Als u niet bent ingelogd, wijzigt u uw wachtwoord.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Opname",
        'deposit' => "Borg",

        'withdraw_subject' => "terugtrekken van account :account",
        'deposit_subject' => "Stort op rekening :account",

        'message' => "De geldoverdracht is gedaan met de volgende specificaties.",

        'type' => "Transactie Type",

        'from' => "Bronaccount",
        'to' => "Destination account",

        'desc' => "Transactiebeschrijving",
        'action' => "Bekijk transactie",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Belangrijk! Overtreding van de regels| :shop",
        'category' => "Kritische informatie",
        'title' => "Uw winkel is bestraft",
        'action' => "Winkeldashboard openen",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter nodigde je uit voor Selldone",
        'title' => ":name heeft u :amount gestuurd om u te helpen uw nieuwe online winkel te lanceren en er inkomsten mee te genereren!",
        'message' => "Hallo **:receiver_name**,<br><br>Welkom bij Selldone! Op Selldone kunt u eenvoudig binnen enkele minuten uw e-commercesite, blog, online community creëren en zelfs een online kassasysteem opzetten voor persoonlijke verkoop. Het is het complete online zakelijke besturingssysteem dat is ontworpen om uw bedrijf beter, sneller en gemakkelijker te runnen.<br><br>Meld u aan bij <b>:date</b> en ontvang een :amount-voucher om aan de slag te gaan!",
        'accept' => "Uitnodiging accepteren",
        'owner' => "Eigenaar van",
        'join-date' => "Op Selldone sinds",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Herstellink| :shop",
        'category' => "Winkelbeveiliging",
        'title' => "Winkelherstellink van <b>:shop_name</b> .",
        'message' => "Deze e-mail is naar u verzonden omdat u heeft verzocht om uw winkel te herstellen. Als u op de onderstaande link klikt, wordt uw winkel en alle bijbehorende gegevens hersteld.",
        'action' => "Bevestig winkelherstel",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Hoeveel geld heeft Selldone voor uw bedrijf gespaard?',
        'sub-title' => 'Van datum :start tot :end',
        'infrastructure' => [
            'title' => 'Infrastructuur',
            'subtitle' => 'Servers, CDN, opslag en andere cloudservices',
        ],
        'experts' => [
            'title' => 'Experts & Personeel',
            'subtitle' => 'Ontwikkelaars, onderhoud en ondersteuning',
        ],
        'total_save' => 'Totaal bespaard geld'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Jouw optreden',
        'sub-title' => 'Bedrijfsoverzicht van :start tot :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Teruggekeerde gebruikers',

        'shop_views' => 'Winkelweergaven',
        'baskets' => [
            'title' => 'Winkelwagentjes',
            'subtitle' => 'Meld het aantal nieuwe winkelwagentjes',

        ],
        'products' => [
            'title' => 'Productenoverzicht',
            'subtitle' => 'Status van producten in de winkel per type',
            'value_name' => 'Producten'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Totaal aantal bekeken webpagina\'s',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "U hebt een nieuwe bestelling ontvangen. Ga naar de orderverwerkingspagina in uw leverancierspaneel.",
        'subject' => "🛍️ Nieuwe bestelling ontvangen| :order_id",
        'your_revenue' => "Uw inkomsten",
    ],
    'vendor-invite' => [
        'title' => 'Leveranciersuitnodiging',
        'message' => "U hebt een uitnodiging ontvangen om verkoper te worden van :shop_name. U kunt deze accepteren of weigeren door op de volgende knoppen te klikken.",
        'subject' => ":shop_name | U heeft een uitnodiging ontvangen om onze verkoper te worden",
        'accept' => "Accepteren en verkoper worden",
        'reject' => "Afwijzen",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Uitnodiging om ons team te versterken',
        'message' => "U bent uitgenodigd om deel te nemen aan :vendor_name op :shop_name. Via onderstaande knoppen kunt u deze uitnodiging accepteren of weigeren.",
        'subject' => "Uitnodiging om lid te worden van :vendor_name|Word een teamlid",
        'accept' => "Accepteer en sluit je aan bij het team",
        'reject' => "Afwijzen",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Uw inlogcode voor :shop",
        'header-message' => "We sturen u deze e-mail omdat u een inlogcode voor de shop hebt aangevraagd. Hieronder vindt u uw eenmalige wachtwoord (OTP):",
        'footer-message' => "Deze code is 10 minuten geldig. Als u deze inlogcode niet hebt aangevraagd, negeer dan deze e-mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifieer uw e-mail | :shop",
        'title' => 'E-mailverificatie',
        'header-message' => "Hallo :name,<br>Bevestig dat **:email** uw e-mailadres is door op de onderstaande knop te klikken of binnen 48 uur de onderstaande link te gebruiken.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Productupdates| :shop",
        'title' => "Update over productstatus - laatste 24 uur",
        'message' => "Ik hoop dat dit bericht je goed vindt. Dit is een korte update om u te informeren over de status van uw producten op ons platform gedurende de afgelopen 24 uur.\nGedurende deze periode zijn er wijzigingen geweest in de status van sommige producten. Deze wijzigingen kunnen het gevolg zijn van aankopen, voorraadupdates of andere gerelateerde gebeurtenissen.\nVoor meer gedetailleerde informatie over elk product kunt u inloggen op uw account en het gedeelte 'Productstatus' bekijken.",
        'action' => "Open leverancierspaneel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Bulkbestellingen ontvangen| :shop | :date",
        'title' => "Melding bulkbestellingen",
        'message' => "U heeft een batch bulkbestellingen ontvangen. Bezoek de pagina voor orderverwerking in uw paneel voor meer informatie. U kunt de bestellijst ook downloaden via de meegeleverde beveiligde link, die 7 dagen geldig is.<br><br>\n        <b>BELANGRIJK:</b> Deze link is 7 dagen geldig.<br>\n        Deze link is dynamisch, dus elke keer dat u erop klikt, ontvangt u de meest actuele bestellingen voor deze specifieke datum. <b>Dit betekent dat als de betalingsstatus van de bestelling verandert in afgewezen, u de bestelling niet langer zult zien in het gedownloade CSV-bestand, of als de bestelling is betaald, deze in de lijst verschijnt.</b><br><br>\n        <ul>\n            <li>De CSV bevat betaalde bestellingen met een gereserveerde datum in de :date.</li>\n            <li>Gereserveerde datum is de datum waarop de gebruiker op afrekenen klikt op de bestelpagina.</li>\n        </ul>\n        <b>Om dubbele bestellingen te voorkomen, controleer altijd de bestelling ID voordat u deze verzendt.</b>",
        'action' => "Bestellijst downloaden",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Sommige artikelen in uw bestelling zijn niet geaccepteerd en kunnen niet worden geleverd. Het bedrag voor deze artikelen wordt binnenkort op uw kaart teruggestort."
    ]

];
