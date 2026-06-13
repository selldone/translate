<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Detta meddelande välkomnar en ny köpare till butiken.',
        ShopMailTemplateCodes::OrderCheckout => 'Detta meddelande skickas när en köpare bekräftar en beställning.',
        ShopMailTemplateCodes::OrderPayment => 'Detta meddelande bekräftar den framgångsrika betalningen som gjorts av en kund.',
        ShopMailTemplateCodes::OrderUpdate => 'Detta meddelande skickas för att uppdatera en köpare om statusen för deras beställning.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Detta meddelande skickas till en säljare för att meddela dem om en bekräftad beställning.',
        ShopMailTemplateCodes::PosCheckout => 'Detta meddelande skickas för att bekräfta en beställning på ett försäljningsställe för en köpare.',
        ShopMailTemplateCodes::PosPayment => 'Detta meddelande bekräftar en betalning på försäljningsstället som gjorts av en köpare.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Detta meddelande meddelar säljaren om ett köp som gjorts vid deras försäljningsställe.',
        ShopMailTemplateCodes::ShopContact => 'Detta meddelande skickas när ett kontaktformulär har skickats in.',
        ShopMailTemplateCodes::ShopGiftCard => 'Detta meddelande informerar en användare om att de har fått ett presentkort.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Detta meddelande välkomnar en ny leverantör till butiken.',
        ShopMailTemplateCodes::ShopVendorInvite => "Det här meddelandet skickas för att bjuda in en leverantör att gå med på din marknadsplats.",
        ShopMailTemplateCodes::ShopVendorOrder => "Detta meddelande skickas till leverantören när en beställning tas emot i antingen betald eller postförskottsstatus (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Skickas dagligen för att uppdatera leverantörer om status för deras produkter.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Detta meddelande skickas för att bjuda in en leverantör att gå med på din marknadsplats.",

        ShopMailTemplateCodes::UserLogin => "Meddela användaren med inloggningsuppgifter, inklusive IP adress, datum och enhet, av säkerhetsskäl.",
        ShopMailTemplateCodes::LoginCode => "Skicka en engångslösenordskod så att användare kan logga in i butiken.",

        ShopMailTemplateCodes::EmailVerifyLink => "Skicka en länk för att verifiera användarens e-postadress. Detta e-postmeddelande skickas när en användare registrerar sig av SMS och anger sin e-postadress. Den skickas inte när en användare registrerar sig direkt med social inloggning eller e-post.",

        ShopMailTemplateCodes::EmailBulkOrder => "Skicka en lista över mottagna och betalda beställningar i bulk för en viss dag."


    ,

    ],


    'global' => [
        'greetings' => 'Hej, :name!',
        'end-statement' => 'Supportteam',

        'receiver_name' => 'Hej :user_name',
        'footer-help' => "Behöver du hjälp? Fråga på [support@selldone.com](mailto:support@selldone.com) eller besök vårt [hjälpcenter](https://selldone.com/community).",
        'selldone-team' => 'Selldone-teamet',
        'footer-shop' => "Om du behöver hjälp med något, tveka inte att skicka ett mejl till oss: :shop_mail",
        'accept' => "Acceptera",
        'reject' => "Avvisa",
        'verify' => "kontrollera",
        'title' => "Titel",
        'value' => "Värde",
        'description' => "Beskrivning",
        'shop' => "affär",
        'shop-info' => "Butiksinformation",
        'user' => "Användare",
        'user-info' => "Kontoinformation",
        'license' => "Licens",
        'status' => "Status",
        'start' => "Start",
        'end' => "Slutet",
        'renewal' => "Förnyelse",
        'view' => "Se",

        'balance' => "Balans",
        'card_number' => "Kortnummer",
        'cvv' => "Cvv",
        'expire_date' => "Utgångsdatum",

        'Dashboard' => "Instrumentbräda",
        'order' => "beställa",
        'view_order' => "Se beställning",
        'pay_now' => "Pay now",

        'official_selldone' => "OFFICIELL SÅLDA",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valuta",
        'free-balance' => "Fri balans",
        'locked-balance' => "Låst balans",
        'bot' => "Bot",
        'requests' => "Förfrågningar",
        'baskets' => 'Vagn',
        'physical' => "Fysisk",
        'virtual' => "Virtuell",
        'file' => "Fil",
        'service' => "Service",
        'fulfillment' => "Uppfyllelse",
        'open' => "Öppen",
        'reserved' => "Reserverad",
        'canceled' => "Inställt",
        'payed' => "Betalt",
        'cod' => "COD",
        'orders-count' => 'Order',
        'payments-count' => 'Betalningar',
        'confirms-count' => 'Bekräftar',
        'sends-count' => 'Skickar',
        'delivers-count' => 'Levererar',
        'count' => 'Räkna',
        'transactions-count' => 'Transaktioner räknas',
        'success-transactions' => 'Framgångstransaktioner',
        'total-amount' => 'Totala summan',
        'amount' => 'Belopp',
        'wage' => 'Lön',
        'debug' => 'Felsökning',
        'pos' => 'POS',
        'live' => 'leva',
        'CheckQueue' => 'Kontrollera kö',
        'OrderConfirm' => 'Beställningsbekräftelse',
        'PreparingOrder' => 'Förbereder beställning',
        'SentOrder' => 'Skickade beställning',
        'ToCustomer' => 'Levereras till kund',
        'Pending' => 'I väntan på',
        'Accepted' => 'Accepterad',
        'Rejected' => 'avvisade',
        'pc' => 'PC',
        'tablet' => 'Läsplatta',
        'phone' => 'Telefon',
        'total' => 'Total',
        'view-detail' => 'Visa detaljer',
        'empty' => 'Tömma',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Svar',
        'reactions' => 'Reaktioner',
        'Comments' => 'Kommentarer',
        'last-comment' => 'Sista kommentaren',
        'response-to' => 'Svar till',
        'posts' => 'Inlägg',
        'post' => 'Posta',

        'name' => 'namn',
        'email' => 'E-post',
        'type' => 'typ',
        'device' => 'Enhet',
        'platform' => 'Plattform',
        'browser' => 'Webbläsare',
        'time' => 'Tid',
        'Wallet' => 'Plånbok',
        'date' => 'Datum',

        'account' => 'konto',
        'transaction' => 'Transaktion',
        'fee' => 'Avgift',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Räkningen',
        'category' => 'Kategori',
        'password' => 'Lösenord',
        'verify-login' => "Verifiera och logga in",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hyper',
        'buy-now' => "Köp nu",
        'add-domain' => "Add Domain",
        'views' => 'Visningar',


        'country' => 'Land',
        'address' => 'adress',
        'postal' => 'postnummer',
        'building_no' => 'Byggnad #',
        'building_unit' => 'Enhet #',
        'message' => 'Meddelande',


        'customer' => 'Kund',
        'cart-items' => 'Varukorgsartiklar',
        'payment' => 'Betalning',
        'receiver' => 'Mottagare',
        'virtual-items' => 'Virtuella föremål',
        'no-payment' => 'Ingen betalning!',

        'enable' => 'Gör det möjligt',
        'access' => 'Tillgång',
        'bank' => 'Bankinformation',

        'vendor' => 'Säljare',

        'view_content' => "Se hela innehållet",
        'files' => 'Filer',
        'download' => 'Ladda ner',
        'file_name' => 'Filnamn',
        'file_size' => 'Storlek',

        'subscription' => 'Prenumeration',
        'products' => 'Produkter',
        'vendor_products' => 'Leverantörsprodukter',

        'pickup' => 'Upphämtning',

        'minutes' => 'Protokoll',
        'hours' => 'Timmar',

        'refund' => 'Återbetalning',
        'recipient_address' => 'Mottagarens adress',
        'signature' => 'Signatur',
        'blockchain' => 'Blockchain',
        'details' => 'Detaljer',


    

        'Shop' => 'affär',
        'dashboard' => 'instrumentbräda',
        'comments' => 'kommentarer',
        'wallet' => 'plånbok',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Resultatrapport, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Säsongsrapport, Selldone'
        ],
        'Onboarding' => [
            'id' => 'Hej',
            'name' => 'Godkänn, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Support :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verifiera, Selldone'
        ],
        'Welcome' => [
            'id' => 'Hej',
            'name' => 'Gemenskap, Selldone'
        ],
        'NewShop' => [
            'id' => 'köpmän',
            'name' => 'Godkänn, Selldone'
        ],
        'Approve' => [
            'id' => 'godkänna',
            'name' => 'Godkänn, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Orderhantering :name'
        ],

        'Recovery' => [
            'id' => 'återhämtning',
            'name' => 'Selldone återställningsteam'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Väntar ⌛',
        'PAYED' => 'Betalt ✅',
        'CANCELED' => 'Inställd ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administratör',
            'OFFICER' => 'Officer och arbetsledare',
            'AUDITING' => 'Revisionschef',
            'EMPLOYEE' => 'Anställd',
            'PRODUCT' => 'Produktchef',
            'CONTENT' => 'Innehållshanterare',
            'MARKETING' => 'Marknadschef',
            'VIEWER' => 'Visare',

        ],
        'subject' => ":inviter bjöd in dig som :level| :shop",
        'category' => "Personalinbjudan",
        'title' => "Du har blivit inbjuden till <b>:shop_name</b> som <b>:level</b> .",
        'message' => "Du har fått en inbjudan att samarbeta med <b>:shop_title</b>-teamet. Du har möjlighet att acceptera eller tacka nej till detta erbjudande. Om du väljer att acceptera, vänligen logga in på Selldone-tjänsten för att bekräfta ditt beslut. Efter bekräftelse får du tillgång till butikshanteringssektionen.",

    ],

    'welcome-email' => [
        'subject' => "👋 Välkommen :name, låt oss komma igång med Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Välkommen till Selldone",
        'message' => "Tack för att du valde Selldone! Du är nu en del av en levande gemenskap som kopplar globala säljare till kunder, lokala företag till företag och individer till företag. Alla våra Master- och Pro-verktyg är tillgängliga för dig **gratis** och **obegränsat**. Vi är här för att stötta dig och öppna dörrarna till din framgång.",

        'index' => "Steg :step.",

        'step-domain' => [
            'title' => 'Lägg till din anpassade domän',
            'message' => "För att komma igång, lägg till din anpassade domän gratis i Shop Dashboard under Inställningar > Domäninställningar.",
            'action' => 'Hantera mina domäner',
        ],
        'step-landing' => [
            'title' => 'Anpassa din startsida',
            'message' => "Anpassa din startsida genom att gå till Dashboard > Sidor. Välj en målsida eller skapa en ny. Det är enkelt och intuitivt och du kan börja arbeta med det direkt.",
            'action' => 'Anpassa min målsida',
        ],
        'step-payment' => [
            'title' => 'Ställ in betalningsmetoder',
            'message' => "Börja acceptera betalningar direkt till ditt bankkonto. För att ansluta dina betalningsleverantörer som Stripe, PayPal och mer, gå till Dashboard > Accounting > Gateway.",
            'action' => 'Lägg till betalningsmetoder',
        ],
        'step-products' => [
            'title' => 'Lägg till dina produkter',
            'message' => "Lägg enkelt till produkter och kategorier i instrumentpanelen > Produkter. Det är precis som att hantera filer och mappar på din dator – helt redo att dra och släppa. Du kan också massimportera produkter med Excel. En exempelmall finns tillgänglig för att hjälpa dig komma igång.",
            'action' => 'Hantera mina produkter',
        ],
        'step-shipping' => [
            'title' => 'Ställ in leveransmetoder',
            'message' => "För att debitera kunder för frakt, definiera dina fraktmetoder i instrumentpanelen > Logistik > Frakt. Du kan ställa in olika priser och support för olika platser. Glöm inte att ställa in ditt lagerursprung i Dashboard > Logistik > Lager.",
            'action' => 'Hantera fraktmetoder',
        ],
    

        'seller' => [
            'title' => 'Är du en säljare?',
            'message' => 'För att börja sälja, gå in i din instrumentpanel i Selldone via länken nedan och skapa din första butik helt gratis. Detta tar några minuter och du kommer att ha din egen butik och webbsida. Vi guidar dig sedan till nästa steg och får betalningsporten.',
            'action' => 'Logga in på min instrumentpanel',
        ],
        'buyer' => [
            'title' => 'Jag är en köpare',
            'message' => 'Grattis. När du väl är medlem i Selldone blir du av med allt krångel med medlemskap och autentisering i onlinebutiker. För att dra nytta av vilken butik och webbplats som helst som använder Selldone-plattformen kan du logga in med ett klick och göra ditt köp enkelt, snabbt och säkert.',
        ],
    ],


    'charge-account' => [
        'category' => 'Plånbok > Konto > Debitering',
        'title' => "Framgångsavgift",
        'message' => "Ditt konto <b>:account_number</b> har debiterats <b>:amount</b> framgångsrikt.",
        'account' => 'konto',
        'charge' => 'Avgift',
        'balance' => 'Balans',
        'footer' => "Gör affärer enkla, genomförbara och tillgängliga för alla runt om i världen."
    ],

    'verify-email' => [
        'subject' => "🙌 Slutför din registrering hos Selldone! Verifiera länken.",
        'category' => "DU ÄR ETT STEG BORT",
        'title' => "Verifiera din e-postadress",
        'message' => "Hej :name,<br><br>Tack för att du valde Selldone!<br><br>För att bekräfta att <b>:email</b> är din korrekta e-postadress eller använd länken nedan. Du har 48 timmar på dig att slutföra denna verifiering.",
        'footer' => "Om du har problem med att klicka på Verifiera-knappen, kopiera och klistra in URL nedan i din webbläsare: :activation_url",
        'next-step' => "Därefter kommer vi att skicka lite användbart material och en steg-för-steg-guide för att göra det enkelt för dig att lägga till din anpassade domän, ställa in betalningar, lägga till produkter och få din första beställning.",

    ],
    'verify-email-code' => [
        'subject' => "Verifieringskod för :name",
        'category' => "SECURITY",
        'title' => "E-postverifieringskod",
        'message' => "Hej :name,<br><br>För att bekräfta att <b>:email</b> är din korrekta e-postadress, vänligen ange följande kod inom de kommande <b>10 minuterna</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Din butik är klar| :name",
        'category' => "DU ÄR ETT STEG BORT",
        'title' => "Installationen slutförd",
        'account_title' => "Ditt konto",
        'account_msg' => "Verifiera och logga in på ditt konto med denna information.",
        'shop_msg' => "Kontoinformation om affärsoperativsystemet Selldone.",

    ],

    'reset2fa' => [
        'category' => "SÄKERHETSOFFICIELLT MEDDELANDE",
        'title' => "Begär inaktivera 2-stegsinloggning",
        'message' => "Du får det här e-postmeddelandet eftersom vi fick en begäran om att återställa tvåfaktorsautentisering för **:name**-kontot med **:email** e-post.<br><br>Vi hittade följande detaljer för ditt konto:",
        'footer' => "Om du inte begärde en lösenordsåterställning krävs ingen ytterligare åtgärd.",
        'action' => 'Inaktivera tvåstegsinloggning',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Din butik är klar nu!",
        'category' => "FÖDD NY NETBUTIK I VÄRLDEN",
        'title' => "Grattis, :name!",
        'message' => "<b>Grattis, :name! Ditt nya onlineföretag är nu live!</b> Vi är glada att välkomna dig till Selldoners community. Du har tagit det första steget mot framgång, och vi är här för att hjälpa dig varje steg på vägen.<br>Nu när din butik är redo, låt oss se till att du är redo att ta emot betalningar direkt från dina kunder och börja växa ditt imperium. Om du någonsin behöver hjälp är vi bara ett meddelande borta – vårt supportteam finns alltid här för dig.<br><br><b>Viktigt nästa steg:</b> För att komma igång, se till att du är redo för att ta emot betalningar och en smidig drift. Vi guidar dig genom varje steg för att få din butik att fungera sömlöst.",
        'pdf-book' => "Missa inte den bifogade handboken: Gör ditt företag som ett spel",

        'account' => [
            'title' => 'Steg 1: Konfigurera din Selldone-plånbok',
            'message' => "För att börja, skapa ett konto i din Selldone plånbok. Det är här dina avgifter kommer att dras, och det är också där du laddar för att hålla din butik igång smidigt. Om ditt saldo någonsin blir negativt, oroa dig inte! Din butik kommer att fortsätta att fungera utan avbrott.",
            'action' => 'Logga in på plånboken',
        ],

        'shop-account' => [
            'title' => 'Steg 2: koppla kontot till butiken',
            'message' => "Anslut sedan ditt plånbokskonto till din butik. Gå till <b>Store > Bokföring > Faktura</b> och länka din plånbok. Detta säkerställer att alla kundbetalningar sätts in direkt på ditt bankkonto – Selldone drar inga belopp från dina intäkter.",
            'action' => 'Butiksfakturapanel',
        ],

        'gateway' => [
            'title' => 'Steg 3: Anslut Online Payment Gateway',
            'message' => "Låt oss nu ställa in din onlinebetalningsgateway. Gå till <b>Store > Redovisning > Port</b> och klicka på <b>Lägg till ny port</b>. Välj din valuta så ser du en lista över tillgängliga betalningsgateways. Det går snabbt och enkelt att ansluta en gateway, men om du behöver hjälp, kolla gärna guiderna för Selldone eller kontakta oss.",
            'action' => 'Lägg till en portal till butiken',
        ],

        'domain' => [
            'title' => 'Sista steget: ansluta en dedikerad domän',
            'message' => "Länka nu din anpassade domän till din butik. Detta tillåter kunder att köpa dina produkter eller tjänster och göra betalningar direkt till dig.",
            'action' => 'Introducera och ta emot obegränsade presentkort',
        ],
    ],


    'basket-list' => [
        'item' => "Artikel",
        'count' => "Räkna",
        'price' => "pris",
        'discount-code' => "Rabattkod",
        'customer-club' => 'Kundklubb',
        'shipping' => "Frakt",
        'total' => "Total",
        'offer' => "Erbjudande",
        'coupon' => "Kupong",
        'lottery' => "Tilldela",
        'tax' => "Beskatta",
        'tax_included' => "Ingår i priset",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metod',
        'amount' => 'Belopp',
        'giftcard' => 'Gift card',
        'payment' => 'Betalning',
    ],


    'shop-subscription-email' => [
        'category' => "Uppdatering av prenumerationen",
        'title' => "Butikslicens: :shop_title",
        'title-reserved' => "Reservlicens: :shop_title",
        'title-active' => "Aktiv licens: :shop_title",
        'title-finished' => "Färdig licens: :shop_title",
        'title-cancel' => "Avbryt licens: :shop_title",
        'message' => "Din butikslicensplan har uppdaterats,",
        'RESERVED' => "⚡ Din prenumerationsplan har **reserverats**.",
        'ACTIVE' => "🟢 Din prenumerationsplan har **aktiverats**.",
        'FINISHED' => "🚧 Din prenumerationsplan har **avslutats**.",
        'CANCEL' => "⛔ Din prenumerationsplan har **uppsagts**.",
    ],

    'support' => [
        'subject' => "Supportcenter|:name svarade",
        'category' => "Supportcenter",
        'title' => "Du fick ett svar",
        'action' => "Öppna butiksadministratören",
    ],

    'shop-customer-join' => [
        'subject' => "Gå med i :shop_title",
        'category' => "Ny kund firande",
        'title' => "Vi är glada för ditt medlemskap",
        'action' => "Besök nu",
    ],

    'shop-vendor-join' => [
        'subject' => "Introduktion av leverantörer| :shop_title",
        'category' => "Ny leverantörsfirande",
        'title' => "Vi är glada för ditt medlemskap",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Presentkort :shop_title",
        'category' => "Lägg till nytt kort",
        'title' => "Grattis, du har fått ett presentkort",
        'action' => "Shoppa nu",
        'message' => "Du har fått ett presentkort på beloppet :balance :currency. Du kommer att kunna köpa från vår butik med detta presentkort.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Supportcenter| :shop",
        'category' => "stöd",
        'title' => "Du fick ett svar",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Beställ Kassa | :order_id",
        'title' => "beställa",
        'message' => "Du har lagt en beställning i vår butik. Vi har tagit emot din beställning och skickar ett nytt e-postmeddelande till dig när betalningen är bekräftad."
    ,

        'payments' => 'Betalningar',
    ],

    'order-payment' => [
        'subject' => "🛍 Betalningsbekräftelse | :order_id",
        'title' => "Betalningsorder",
        'message' => "Din betalning genomförd,<br> Vi har din beställning. Vi skickar ett nytt e-postmeddelande när din beställning skickas.",
    

        'payments' => 'Betalningar',
    ],

    'order-update' => [
        'subject' => "🛍️ Beställningsstatusuppdatering|Beställ :order_id",
        'title' => "Orderstatusuppdatering",
        'message' => "Din beställning har uppdaterats. Du kan kontrollera den senaste statusen för denna beställning på ditt konto.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Din beställning står i kön för behandling. Vi meddelar dig när det förbereds.",
                'OrderConfirm' => "Din beställning är bekräftad och förberedelserna har börjat.",
                'PreparingOrder' => "Din beställning förbereds och kommer att skickas inom kort.",
                'SentOrder' => "Din beställning har skickats. Du kommer att få den inom kort.",
                'ToCustomer' => "Din beställning har levererats. Vi hoppas att du gillar det!",

                'PreparingOrder-PICKUP' => "Din beställning förbereds. Du får ett meddelande när det är klart för hämtning.",
                'SentOrder-PICKUP' => "Din beställning är klar för avhämtning. Vänligen kom till butiken för att hämta den.",
                'ToCustomer-PICKUP' => "Din beställning har hämtats. Vi hoppas att du gillar det!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Din beställning står i kön för behandling. Vi meddelar dig när den är klar.",
                'OrderConfirm' => "Din beställning är bekräftad och förberedelser pågår.",
                'PreparingOrder' => "Din beställning förbereds och kommer att skickas till dig inom kort.",
                'ToCustomer' => "Din virtuella beställning har levererats till ditt konto. Tack!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Din serviceförfrågan står i kön. Vi meddelar dig när vi börjar.",
                'OrderConfirm' => "Din tjänst är bekräftad och vi förbereder oss för att börja.",
                'PreparingOrder' => "Vi förbereder din tjänst och kommer att meddela dig när den är klar.",
                'ToCustomer' => "Din tjänst är klar. Tack för att du valde oss!"
            ],
            'FILE' => [
                'PreparingOrder' => "Din fil förbereds och kommer snart att finnas tillgänglig.",
                'ToCustomer' => "Din fil är klar och har levererats. Du kan nu ladda ner den."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Din prenumerationsorder står i kön. Vi meddelar dig när behandlingen börjar.",
                'OrderConfirm' => "Din prenumeration har bekräftats och håller på att konfigureras.",
                'PreparingOrder' => "Vi förbereder din prenumeration och den börjar snart.",
                'SentOrder' => "Ditt abonnemang har aktiverats. Du kommer att få löpande uppdateringar.",
                'ToCustomer' => "Din prenumerationstjänst har aktiverats."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Grattis :name | Ny kupong: :title',
        'category' => "GRATTIS, NY VOUCHER",
        'message' => "Hej :name,<br><br>Du har fått en ny kupong i present från oss! Du kan tjäna ännu fler kuponger genom att introducera Selldone för dina vänner och alla du känner. Den här kupongen är värd **:price :currency**.<br><br>Du har tagit det första steget, och vi är här för att hjälpa dig att låsa upp nya funktioner med din kupong! Logga in med **:email** och hitta din kupong i butiken **Dashboard** > **Inställningar** > **Licens**.<br><br>Grattis!",
        'action' => "Min instrumentpanel",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Grattis, kära :name | Du har fått en gåva',
        'category' => "Meddelande om att ta emot en gåva",
        'title' => "Presenter till dig",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Gåvor",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Ny beställning mottagen | :order_id",
        'title' => "New Order",
        'message' => "Du har fått en ny beställning. Vänligen gå till orderhanteringssidan i din butik.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Din ifyllda information',
        'output-form-title' => 'Information om köpt vara',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Veckorapport :time',
        'title' => 'Veckovis butiksresultatrapport',
        'message' => "Detta är din butiks veckorapport från <b>:start</b> till <b>:end</b>. Den här rapporten innehåller tips för att förbättra din verksamhet, du kan också kontrollera statusen för din webbutik och senaste beställningar. Jag hoppas att du har en bra dag och vecka framför dig."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Din :amount sparrapport under de senaste tre månaderna| :shop_title',
        'title' => 'Säsongsrapport om din verksamhet, belöningar och ekonomiska besparingar',
        'message' => "Det här är din <b>:shop_title</b> säsongsrapport från <b>:start</b> till <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Anslutna konton',
        'sub-title' => 'Vilken är den senaste statusen för plånbokskonton som är anslutna till min butik?',
        'view-wallet' => 'Se plånbok',
        'tip-title' => 'Viktiga tips',
        'tip' => "I nästa steg skapar du ett gratiskonto i din Selldone-plånbok och ansluter det till den här butiken. Även om ditt saldo på Sellone-kontot är negativt kan dina kunder fortfarande göra köp och betalningar för din butik utan problem. Din data och tjänst kommer inte att avbrytas eller begränsas under minst 1 månad.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Anslut till konto'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Appar installerade',
        'sub-title' => 'Lista över appar du har installerat i din butik den här veckan.',
        'tip' => "Vill du hitta fler appar för din butik?",
        'view-app-store' => 'Utforska Selldone App Store',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Dina butiksbots',
        'sub-title' => 'Aktiva säljrobotar i min butik.',
        'tip-title' => 'Bot försäljning',
        'tip' => "Selldone har försett dig med automatiska försäljningsbotar. Allt du behöver göra är att gå till panelen Tillägg> Bots och aktivera dina butiksbotar. Observera att den relevanta tjänsten måste vara tillgänglig i ditt land.",
        'view-bots' => 'Hantera bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kommunikation med kunder',
        'sub-title' => 'Hur många kontakter har jag haft med mina kunder den här veckan?',
        'faqs' => 'Vanliga frågor',
        'tickets' => 'Kundbiljetter',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Användarstatus',
        'sub-title' => 'Aktivitet från :start till :end',
        'users' => [
            'title' => 'Kunder',
            'subtitle' => 'Registrera användare',
        ],
        'views' => [
            'title' => 'Besök',
            'subtitle' => 'Hur många gånger har du besökt butiken',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Återvända användare',

        'shop_views' => 'Butiksvyer',
        'baskets' => [
            'title' => 'Kundvagnar',
            'subtitle' => 'Rapportera antalet nya kundvagnar',
        ],
        'products' => [
            'title' => 'Produktöversikt',
            'subtitle' => 'Status för produkter i butik efter typ',
            'value_name' => 'Produkter'
        ],
        'products_count' => 'Produkttyper',
        'views_count' => 'Antal visningar',
        'sell_count' => 'Sälj räknas',
        'send_count' => 'Frakträkning',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel för storsäljare av Drop Shipping Selldone.',
        'total_fulfillments' => 'Totalt antal mottagna beställningar',
        'ds_count' => 'Mottagna beställningar',
        'statistics_title' => 'Rapportera mottagna beställningar',
        'ds_cancels' => 'Avbryt av gränssnittssäljaren',
        'ds_rejects' => 'Avbryt av dig',
        'tip' => "Är du en storsäljare av varor? Äger du ett lager, fabrik eller distributör av produkter? Du kan erbjuda dina produkter till andra säljare i Selldone Drop Shipping-tjänst för att sälja din produkt i stor skala. Maila oss på support@selldone.com för att guida dig.",
        'view-drop-shipping-panel' => 'Logga in på grossistpanelen',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Växlingskurs',
        'sub-title' => 'Lista över de senaste valutakurserna i din butik.',
        'from' => 'Källvaluta',
        'to' => 'Destinationsvaluta',
        'rate' => 'Omvandlingshastighet',
        'view-exchange-panel' => 'Hantera växelkurser',
    

        'vew-exchange-panel' => 'växelkurshanteringspanel',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Expertkontrakt',
        'sub-title' => 'Vilka proffs jobbar på min butik?',
        'cost' => 'Kontraktsbelopp',
        'duration' => 'Varaktighet',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum Avbryt',
        'end_at' => 'Leveransdatum',
        'tip' => 'Du kan anlita de bästa specialisterna i Selldone för att utveckla ditt företag.',
        'view-experts' => 'Klicka för att komma igång.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Rapportera aktiva betalningsgateways i butiken :shop.',
        'tip-title' => 'Viktiga tips',
        'tip' => "Gå till portalhanteringssidan i din butik och lägg till minst en port på några minuter. Dina kunder gillar att betala snabbt och säkert via onlineportaler.",
        'view-shop-gateways' => 'Logga in på min butiksportalhantering.',
        'view-gateways' => 'Se fler gateways',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Order',
        'sub-title' => 'Lista över beställningar jag fått denna vecka.',
        'total_baskets' => 'Totalt antal beställningar',
        'total_posBaskets' => 'Totala kontantbeställningar',
        'pos-title' => 'POS butikslåda',
        'chart-label' => 'Beställningar genomförda (dessa beställningar är inte nödvändigtvis betalda!)',
        'tip-title' => 'Du borde försöka hårdare...',
        'tip' => "Ingen enkel framgång.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Bearbetningscenter',
        'sub-title' => 'Hur mycket beställning behandlade vi i butiken den här veckan?',
        'tip-title' => 'Du hade ingen rea!',
        'tip' => "Tyvärr hade du ingen försäljning denna vecka. Du måste få mer till din butik. Du kan lägga till fler produkter, välja bättre bilder eller skriva bättre beskrivningar för dina produkter. Överväg ett heltidsjobb för ditt företag. Om du gör det rätt och inte blir frustrerad kommer du att lyckas.",
        'view-process-center' => 'Visa processcenter',
        'return' => [
            'title' => 'Returnerad beställning',
            'subtitle' => 'Rapportera returnerade beställningar.',
            'tip-title' => 'Visste du att ...',
            'tip' => "Du kan skapa så många kassaregister som du behöver med Selldone POS! Oavsett om det är din surfplatta, mobil eller bärbara dator kan du förvandla vilken enhet som helst till din butiks försäljningsställe. Det är enkelt, snabbt att installera och fullt förberedt för din server. Börja använda den idag!",
            'view-pos' => 'Logga in på Min nätbutikskassa'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessioner',
        'sub-title' => 'Hur många gånger besökte jag min butik?',
        'countries-title' => 'Vilka länder har varit mest besökta?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Vill du tjäna pengar utan att spendera en krona?',
        'message' => "Bästa :name, du kan gå till Dashboard > Demonetization och skapa en hänvisningslänk. Skicka länken till dina vänner, Du får ett Selldone presentkort och en procentandel av din väns betalningar. Observera att presentkortet skickas till både dig och din vän.",
        'action' => 'Se min introduktionslänk',
        'mail-clip' => "<b style='color: #C2185B'>Viktigt:</b> Om du använder e-posttjänster som Gmail som begränsar längden på e-postmeddelandet, hitta följande alternativ i slutet av e-postmeddelandet för att visa hela rapporten och klicka på den:",

        'no-coin-reward' => "<b style='color: #C2185B'>Tyvärr:</b> Din aktivitet uppfyllde inte kravet för att få gratis SEL Coins-belöning. Försök mer och sälj mer i din butik till nästa säsong.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Belöning:</b> Grattis, på grund av din fantastiska prestation gav vi dig en :amount SEL Coin-fri belöning.",

        'need-buy-license' => "<b>Level upp ditt företag:</b> Det verkar som att du inte har registrerat någon prenumerationsplan för din webbplats än! Uppgradera nu för att låsa upp fler funktioner för bara :amount per månad om du betalar årligen.",
        'not-afford-message' => "Om du inte har råd eller har några problem med betalningen, berätta gärna för oss via support@selldone.com.",
        'add-domain' => "<b>Varför inte ha en anpassad domän för ditt företag?</b><br> Lägg till en domän på din webbplats nu; det är gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone är en<del> produkt</del> <span style = 'color: forestgreen'>gemenskap</span> .<br> Var en professionell säljare!",
        'message' => "Följ de officiella sidorna för Selldone på Twitter, LinkedIn och sociala nätverk. Skicka oss eventuella kommentarer, förfrågningar eller kritik eller delta i diskussioner om Selldone. Vi är också en del av den gemenskap av Selldone som <b>Du gör</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nya avokadobeställningar mottagna|:shop_title :time',
        'title' => "Resultatrapport för de senaste 24 timmarna",
        'message' => "Dina kunder väntar på att dina beställningar ska granskas och prissättas. Svara på dina kunders önskemål så snart som möjligt för att få mer försäljning.",
        'card_title' => "Beställningar i kön",
        'card_subtitle' => "Sedan :date",

        'card_payed' => "Betala beställningar"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Svara på ditt inlägg i :community_title',
        'title' => ":name och :count andra kommenterade dina inlägg.",
        'message' => "Hej :name, dina inlägg får uppmärksamhet! Du har fått kommentarer i vår community. Logga in på ditt konto för att gå med i diskussionen och se vad alla säger.",
        'title-simple' => ":name kommenterade dina inlägg.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Svara på ditt ämne :topic_title',
        'title' => ":name och :count andra svarade på ditt ämne.",
        'message' => "Hej :name, ditt ämne får uppmärksamhet! Du har fått svar i vår community. Logga in på ditt konto för att gå med i diskussionen och se vad alla säger.",
        'title-simple' => ":name svarade på ditt ämne.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Ny inloggning :name',
        'category' => 'Säkerhetsmeddelanden',
        'title' => "Logga in på konto",
        'message' => "Bästa :name, du har loggat in på ditt Selldone-konto.",   // Login in selldone (seller)
        'message-shop' => "Bästa :name, du har loggat in på :shop_title .",  // Login in shop (buyer)

        'footer' => "Om du inte är inloggad, vänligen ändra ditt lösenord.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Uttag",
        'deposit' => "Deposition",

        'withdraw_subject' => "Ta ut från kontot :account",
        'deposit_subject' => "Insättning till konto :account",

        'message' => "Penningöverföringen har gjorts med följande specifikationer.",

        'type' => "Överföringstyp",

        'from' => "Källkonto",
        'to' => "Destination account",

        'desc' => "Transaktionsbeskrivning",
        'action' => "Visa transaktion",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Viktigt! Regelbrott| :shop",
        'category' => "Kritisk information",
        'title' => "Din butik har straffats",
        'action' => "Öppna butikens instrumentpanel",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter bjöd in dig till Selldone",
        'title' => ":name skickade dig :amount för att hjälpa dig att lansera din nya webbsida och tjäna pengar på den!",
        'message' => "Hej **:receiver_name**,<br><br>Välkommen till Selldone! På Selldone kan du enkelt skapa din e-handelswebbplats, blogg, onlinegemenskap och till och med ställa in ett online-POS-system för personlig försäljning – allt inom några minuter. Det är det kompletta onlineoperativsystemet för företag som är utformat för att göra ditt företag bättre, snabbare och enklare att driva.<br><br>Registrera dig genom <b>:date</b> och få en :amount-kupong för att komma igång!",
        'accept' => "Acceptera inbjudan",
        'owner' => "Ägare av",
        'join-date' => "På Selldone sedan dess",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Återställningslänk| :shop",
        'category' => "Butikssäkerhet",
        'title' => "Butiksåterställningslänk för <b>:shop_name</b> .",
        'message' => "Det här e-postmeddelandet har skickats till dig eftersom du begärde att återställa din butik. Genom att klicka på länken nedan återställs din butik och all data som hör till den.",
        'action' => "Bekräfta butiksåterställning",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Hur mycket pengar sparade Selldone för ditt företag?',
        'sub-title' => 'Från datum :start till :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Servrar, CDN, lagring och andra molntjänster',
        ],
        'experts' => [
            'title' => 'Experter och personal',
            'subtitle' => 'Utvecklare, underhåll och support',
        ],
        'total_save' => 'Totalt sparade pengar'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Ditt framträdande',
        'sub-title' => 'Verksamhetsöversikt från :start till :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Återvända användare',

        'shop_views' => 'Butiksvyer',
        'baskets' => [
            'title' => 'Kundvagnar',
            'subtitle' => 'Rapportera antalet nya kundvagnar',

        ],
        'products' => [
            'title' => 'Produktöversikt',
            'subtitle' => 'Status för produkter i butik efter typ',
            'value_name' => 'Produkter'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Totalt antal sidvisningar på webbplatsen',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Du har fått en ny beställning. Gå till sidan för orderhantering i din leverantörspanel.",
        'subject' => "🛍 Ny beställning mottagen | :order_id",
        'your_revenue' => "Dina intäkter",
    ],
    'vendor-invite' => [
        'title' => 'Försäljarinbjudan',
        'message' => "Du har fått en inbjudan att bli leverantör av :shop_name. Du kan acceptera eller avvisa det genom att klicka på följande knappar.",
        'subject' => ":shop_name |Inbjudan att bli vår leverantör",
        'accept' => "Acceptera och bli en leverantör",
        'reject' => "Avvisa",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Inbjudan att gå med i vårt team',
        'message' => "Du har blivit inbjuden att gå med i :vendor_name på :shop_name. Du kan acceptera eller tacka nej till denna inbjudan med hjälp av knapparna nedan.",
        'subject' => "Inbjudan att gå med i :vendor_name|Bli en Team Member",
        'accept' => "Acceptera och gå med i teamet",
        'reject' => "Avvisa",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Din inloggningskod för :shop",
        'header-message' => "Vi skickar det här e-postmeddelandet till dig eftersom du har begärt en inloggningskod för butiken. Vänligen hitta ditt engångslösenord (OTP) nedan:",
        'footer-message' => "Denna kod kommer att vara giltig i 10 minuter. Om du inte har begärt denna inloggningskod, vänligen ignorera detta e-postmeddelande."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifiera din e-post| :shop",
        'title' => 'E-postverifiering',
        'header-message' => "Hej :name,<br>Bekräfta att **:email** är din e-postadress genom att klicka på knappen nedan eller använda länken nedan inom 48 timmar.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produktuppdateringar| :shop",
        'title' => "Uppdatering om produktstatus - senaste 24 timmarna",
        'message' => "Jag hoppas att det här meddelandet finner dig bra. Detta är en kort uppdatering för att informera dig om statusen för dina produkter på vår plattform under de senaste 24 timmarna.\nUnder denna period har det skett förändringar i statusen för vissa produkter. Dessa ändringar kan bero på köp, lageruppdateringar eller andra relaterade händelser.\nFör mer detaljerad information om varje produkt, vänligen logga in på ditt konto och kolla avsnittet \"Produktstatus\".",
        'action' => "Öppna leverantörspanelen",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Massor mottagna| :shop | :date",
        'title' => "Meddelande om massbeställningar",
        'message' => "You have received a batch of bulk orders. Please visit the order processing page in your panel for further details. You can also download the order list via the secure link provided, valid for 7 days.<br><br>\n        <b>IMPORTANT:</b> This link is valid for 7 days.<br>\n        This link is dynamic, so every time you click it, you will receive the most updated orders for this specific date. <b>It means if the order payment status changes to rejected, you will no longer see that order in the downloaded CSV, or if the order is paid, it will appear in the list.</b><br><br>\n        <ul>\n            <li>The CSV contains paid orders with a reserved date in the :date.</li>\n            <li>Reserved date is the date when the user clicks checkout on the order page.</li>\n        </ul>\n        <b>To prevent duplicate orders, always check the Order ID before sending.</b>\n    ",
        'action' => "Ladda ner beställningslista",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Vissa varor i din beställning accepterades inte och kan inte levereras. Beloppet för dessa varor kommer att återbetalas till ditt kort inom kort."
    ]

];
