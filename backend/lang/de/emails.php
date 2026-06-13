<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Diese Nachricht heißt einen neuen Käufer im Shop willkommen.',
        ShopMailTemplateCodes::OrderCheckout => 'Diese Benachrichtigung wird gesendet, wenn ein Käufer eine Bestellung bestätigt.',
        ShopMailTemplateCodes::OrderPayment => 'Diese Benachrichtigung bestätigt die erfolgreiche Zahlung eines Kunden.',
        ShopMailTemplateCodes::OrderUpdate => 'Diese Nachricht wird gesendet, um einen Käufer über den Status seiner Bestellung zu informieren.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Diese Nachricht wird an einen Verkäufer gesendet, um ihn über eine bestätigte Bestellung zu informieren.',
        ShopMailTemplateCodes::PosCheckout => 'Diese Benachrichtigung wird gesendet, um eine Point-of-Sale-Bestellung für einen Käufer zu bestätigen.',
        ShopMailTemplateCodes::PosPayment => 'Diese Benachrichtigung bestätigt eine von einem Käufer getätigte Point-of-Sale-Zahlung.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Diese Nachricht benachrichtigt den Verkäufer über einen an seiner Verkaufsstelle getätigten Kauf.',
        ShopMailTemplateCodes::ShopContact => 'Diese Benachrichtigung wird gesendet, wenn ein Kontaktformular gesendet wurde.',
        ShopMailTemplateCodes::ShopGiftCard => 'Diese Benachrichtigung informiert einen Benutzer darüber, dass er eine Geschenkkarte erhalten hat.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Diese Nachricht heißt einen neuen Anbieter im Shop willkommen.',
        ShopMailTemplateCodes::ShopVendorInvite => "Diese Nachricht wird gesendet, um einen Anbieter einzuladen, Ihrem Marktplatz beizutreten.",
        ShopMailTemplateCodes::ShopVendorOrder => "Diese Nachricht wird an den Lieferanten gesendet, wenn eine Bestellung im Status „Bezahlt“ oder „Nachnahme bei Lieferung“ (COD) eingeht.",
        ShopMailTemplateCodes::ShopVendorProducts => "Wird täglich versendet, um Anbieter über den Status ihrer Produkte zu informieren.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Diese Nachricht wird gesendet, um einen Anbieter einzuladen, Ihrem Marktplatz beizutreten.",

        ShopMailTemplateCodes::UserLogin => "Benachrichtigen Sie den Benutzer aus Sicherheitsgründen mit Anmeldedaten, einschließlich IP-Adresse, Datum und Gerät.",
        ShopMailTemplateCodes::LoginCode => "Senden Sie einen Einmalpasswortcode, damit sich Benutzer beim Shop anmelden können.",

        ShopMailTemplateCodes::EmailVerifyLink => "Senden Sie einen Link, um die E-Mail-Adresse des Benutzers zu bestätigen. Diese E-Mail wird gesendet, wenn sich ein Benutzer bei SMS registriert und seine E-Mail-Adresse eingibt. Es wird nicht gesendet, wenn sich ein Benutzer direkt mit Social Login oder E-Mail registriert.",

        ShopMailTemplateCodes::EmailBulkOrder => "Senden Sie eine Liste der eingegangenen und bezahlten Bestellungen in großen Mengen für einen bestimmten Tag."


    ,

    ],


    'global' => [
        'greetings' => 'Hallo :name',
        'end-statement' => 'Support-Team',

        'receiver_name' => 'Hallo :user_name',
        'footer-help' => "Brauchen Sie Hilfe? Fragen Sie unter [support@selldone.com](mailto:support@selldone.com) oder besuchen Sie unser [Hilfezentrum](https://selldone.com/community).",
        'selldone-team' => 'Das Selldone-Team',
        'footer-shop' => "Wenn Sie bei irgendetwas Hilfe benötigen, zögern Sie bitte nicht, uns eine E-Mail zu schreiben: :shop_mail",
        'accept' => "Annehmen",
        'reject' => "Ablehnen",
        'verify' => "Bestätigen",
        'title' => "Titel",
        'value' => "Wert",
        'description' => "Beschreibung",
        'shop' => "Shop",
        'shop-info' => "Shop-Informationen",
        'user' => "Benutzer",
        'user-info' => "Kontoinformationen",
        'license' => "Lizenz",
        'status' => "Status",
        'start' => "Start",
        'end' => "Ende",
        'renewal' => "Erneuerung",
        'view' => "Ansicht",

        'balance' => "Kontostand",
        'card_number' => "Kartennummer",
        'cvv' => "Sicherheitscode",
        'expire_date' => "Ablaufdatum",

        'Dashboard' => "Armaturenbrett",
        'order' => "Bestellung",
        'view_order' => "Bestellung ansehen",
        'pay_now' => "Jetzt bezahlen",

        'official_selldone' => "OFFIZIELLER SELLDONE",

        'account-number' => "Kontonummer",
        'account-name' => "Kontoname",
        'currency' => "Währung",
        'free-balance' => "Freies Guthaben",
        'locked-balance' => "Gesperrtes Guthaben",
        'bot' => "Bot",
        'requests' => "Anfragen",
        'baskets' => 'Warenkörbe',
        'physical' => "Physisch",
        'virtual' => "Virtuell",
        'file' => "Datei",
        'service' => "Service",
        'fulfillment' => "Erfüllung",
        'open' => "Offen",
        'reserved' => "Reserviert",
        'canceled' => "Storniert",
        'payed' => "Bezahlt",
        'cod' => "COD",
        'orders-count' => 'Bestellungen',
        'payments-count' => 'Zahlungen',
        'confirms-count' => 'Bestätigt',
        'sends-count' => 'Versendet',
        'delivers-count' => 'Geliefert',
        'count' => 'Anzahl',
        'transactions-count' => 'Transaktionen',
        'success-transactions' => 'Erfolgreiche Transaktionen',
        'total-amount' => 'Gesamtbetrag',
        'amount' => 'Betrag',
        'wage' => 'Lohn',
        'debug' => 'Debuggen',
        'pos' => 'POS',
        'live' => 'Live',
        'CheckQueue' => 'Warteschlange prüfen',
        'OrderConfirm' => 'Bestellung bestätigen',
        'PreparingOrder' => 'Bestellung vorbereiten',
        'SentOrder' => 'Bestellung versendet',
        'ToCustomer' => 'An den Kunden geliefert',
        'Pending' => 'Ausstehend',
        'Accepted' => 'Akzeptiert',
        'Rejected' => 'Abgelehnt',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefon',
        'total' => 'Gesamt',
        'view-detail' => 'Details anzeigen',
        'empty' => 'Leer',
        'dropshipping' => 'Direktversand',
        'reply' => 'Antwort',
        'reactions' => 'Reaktionen',
        'Comments' => 'Kommentare',
        'last-comment' => 'Letzter Kommentar',
        'response-to' => 'Antwort an',
        'posts' => 'Beiträge',
        'post' => 'Beitrag',

        'name' => 'Name',
        'email' => 'E-Mail',
        'type' => 'Typ',
        'device' => 'Gerät',
        'platform' => 'Plattform',
        'browser' => 'Browser',
        'time' => 'Zeit',
        'Wallet' => 'Geldbörse',
        'date' => 'Datum',

        'account' => 'Konto',
        'transaction' => 'Transaktion',
        'fee' => 'Gebühr',

        'location' => 'Standort',
        'ip' => 'IP',

        'bill' => 'Rechnung',
        'category' => 'Kategorie',
        'password' => 'Passwort',
        'verify-login' => "Bestätigen und anmelden",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Jetzt kaufen",
        'add-domain' => "Domain hinzufügen",
        'views' => 'Aufrufe',


        'country' => 'Land',
        'address' => 'Adresse',
        'postal' => 'Postleitzahl',
        'building_no' => 'Gebäude Nr.',
        'building_unit' => 'Einheit Nr.',
        'message' => 'Nachricht',


        'customer' => 'Kunde',
        'cart-items' => 'Artikel im Warenkorb',
        'payment' => 'Zahlung',
        'receiver' => 'Empfänger',
        'virtual-items' => 'Virtuelle Artikel',
        'no-payment' => 'Keine Zahlung!',

        'enable' => 'Aktivieren',
        'access' => 'Zugriff',
        'bank' => 'Bank',

        'vendor' => 'Lieferant',

        'view_content' => "Vollständigen Inhalt anzeigen",
        'files' => 'Dateien',
        'download' => 'Herunterladen',
        'file_name' => 'Dateiname',
        'file_size' => 'Dateigröße',

        'subscription' => 'Abonnement',
        'products' => 'Produkte',
        'vendor_products' => 'Lieferantenprodukte',

        'pickup' => 'Abholung',

        'minutes' => 'Minuten',
        'hours' => 'Stunden',

        'refund' => 'Rückerstattung',
        'recipient_address' => 'Empfängeradresse',
        'signature' => 'Unterschrift',
        'blockchain' => 'Blockchain',
        'details' => 'Einzelheiten',


    

        'Shop' => 'Shop',
        'dashboard' => 'Dashboard',
        'comments' => 'Kommentare',
        'wallet' => 'Wallet',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business-Betriebssystem",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Leistungsbericht, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Saisonbericht, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hallo',
            'name' => 'Genehmigung, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Unterstützen Sie :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Überprüfen, Selldone'
        ],
        'Welcome' => [
            'id' => 'hallo',
            'name' => 'Community, Selldone'
        ],
        'NewShop' => [
            'id' => 'Kaufleute',
            'name' => 'Genehmigung, Selldone'
        ],
        'Approve' => [
            'id' => 'genehmigen',
            'name' => 'Genehmigung, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Auftragsverwaltung :name'
        ],

        'Recovery' => [
            'id' => 'Wiederherstellung',
            'name' => 'Selldone-Wiederherstellungsteam'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Ausstehend ⌛',
        'PAYED' => 'Bezahlt ✅',
        'CANCELED' => 'Storniert ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Beauftragter',
            'AUDITING' => 'Revisionsleiter',
            'EMPLOYEE' => 'Mitarbeiter',
            'PRODUCT' => 'Produktmanager',
            'CONTENT' => 'Content-Manager',
            'MARKETING' => 'Marketing-Manager',
            'VIEWER' => 'Betrachter',

        ],
        'subject' => ":inviter hat Sie als :level eingeladen| :shop",
        'category' => "Mitarbeitereinladung",
        'title' => "Sie wurden als <b>:level</b> zu <b>:shop_name</b> eingeladen.",
        'message' => "Sie haben eine Einladung zur Zusammenarbeit mit dem <b>:shop_title</b>-Geschäftsteam erhalten. Sie haben die Möglichkeit, dieses Angebot anzunehmen oder abzulehnen. Sollten Sie sich für die Annahme entscheiden, melden Sie sich bitte beim Selldone-Dienst an, um Ihre Entscheidung zu bestätigen. Nach der Bestätigung erhalten Sie Zugriff auf den Bereich zur Filialverwaltung.",

    ],

    'welcome-email' => [
        'subject' => "👋 Willkommen :name, fangen wir mit Selldone an!",
        'category' => 'HERZLICHEN GLÜCKWUNSCH',
        'title' => "Willkommen bei Selldone",
        'message' => "Vielen Dank, dass Sie sich für Selldone entschieden haben! Sie sind jetzt Teil einer lebendigen Community, die globale Verkäufer mit Kunden, lokale Unternehmen mit Unternehmen und Einzelpersonen mit Konzernen verbindet. Alle unsere Master- und Pro-Tools stehen Ihnen **kostenlos** und **unbegrenzt** zur Verfügung. Wir sind hier, um Sie zu unterstützen und Ihnen die Türen zu Ihrem Erfolg zu öffnen.",

        'index' => "Schritt :step.",

        'step-domain' => [
            'title' => 'Fügen Sie Ihre benutzerdefinierte Domain hinzu',
            'message' => "Fügen Sie zunächst Ihre benutzerdefinierte Domain kostenlos im Shop-Dashboard unter Einstellungen > Domain-Einstellungen hinzu.",
            'action' => 'Meine Domains verwalten',
        ],
        'step-landing' => [
            'title' => 'Passen Sie Ihre Homepage an',
            'message' => "Personalisieren Sie Ihre Homepage, indem Sie zu Dashboard > Seiten gehen. Wählen Sie eine Landingpage oder erstellen Sie eine neue. Es ist einfach und intuitiv und Sie können sofort mit der Arbeit beginnen.",
            'action' => 'Passen Sie meine Landingpage an',
        ],
        'step-payment' => [
            'title' => 'Zahlungsmethoden einrichten',
            'message' => "Beginnen Sie mit der Annahme von Zahlungen direkt auf Ihr Bankkonto. Um Ihre Zahlungsanbieter wie Stripe, PayPal und mehr zu verbinden, gehen Sie zu Dashboard > Buchhaltung > Gateway.",
            'action' => 'Zahlungsmethoden hinzufügen',
        ],
        'step-products' => [
            'title' => 'Fügen Sie Ihre Produkte hinzu',
            'message' => "Fügen Sie ganz einfach Produkte und Kategorien im Dashboard > Produkte hinzu. Es ist so, als würden Sie Dateien und Ordner auf Ihrem PC verwalten – vollständig per Drag-and-Drop möglich. Sie können Produkte auch in großen Mengen mit Excel importieren. Um Ihnen den Einstieg zu erleichtern, steht eine Beispielvorlage zur Verfügung.",
            'action' => 'Meine Produkte verwalten',
        ],
        'step-shipping' => [
            'title' => 'Versandmethoden einrichten',
            'message' => "Um Kunden den Versand in Rechnung zu stellen, definieren Sie Ihre Versandmethoden unter Dashboard > Logistik > Versand. Sie können für verschiedene Standorte unterschiedliche Preise und Support festlegen. Vergessen Sie nicht, Ihren Lagerursprung unter Dashboard > Logistik > Lager festzulegen.",
            'action' => 'Versandarten verwalten',
        ],
    

        'seller' => [
            'title' => 'Sind Sie ein Verkäufer?',
            'message' => 'Um mit dem Verkauf zu beginnen, geben Sie Ihr Dashboard in Selldone über den unten stehenden Link ein und erstellen Sie Ihren ersten Shop völlig kostenlos. Dies dauert ein paar Minuten und Sie haben Ihren eigenen Shop und Ihre eigene Online-Website. Wir führen Sie dann durch die nächsten Schritte und richten das Zahlungsgateway ein.',
            'action' => 'Mein Dashboard aufrufen',
        ],
        'buyer' => [
            'title' => 'Ich bin ein Käufer',
            'message' => 'Herzlichen Glückwunsch. Sobald Sie Mitglied bei Selldone sind, werden Sie alle Probleme mit der Mitgliedschaft und Authentifizierung in Online-Shops los. Um von jedem Geschäft und jeder Website zu profitieren, die die Selldone-Plattform verwenden, können Sie sich mit einem Klick anmelden und Ihren Einkauf einfach, schnell und sicher tätigen.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Konto > Aufladen',
        'title' => "Erfolgreich aufgeladen",
        'message' => "Ihr Konto <b>:account_number</b> wurde erfolgreich mit <b>:amount</b> belastet.",
        'account' => 'Konto',
        'charge' => 'Aufladen',
        'balance' => 'Kontostand',
        'footer' => "Machen Sie Geschäfte einfach, erreichbar und für jeden auf der ganzen Welt zugänglich."
    ],

    'verify-email' => [
        'subject' => "🙌 Schließe deine Anmeldung bei Selldone ab! Link bestätigen.",
        'category' => "SIE SIND NUR EINEN SCHRITT ENTFERNT",
        'title' => "Bestätige deine E-Mail-Adresse",
        'message' => "Hallo :name,<br><br>Vielen Dank, dass Sie sich für Selldone entschieden haben!<br><br>Um zu bestätigen, dass <b>:email</b> Ihre korrekte E-Mail-Adresse ist, klicken Sie bitte auf die Schaltfläche unten oder verwenden Sie den bereitgestellten Link. Sie haben 48 Stunden Zeit, um diese Verifizierung abzuschließen.",
        'footer' => "Wenn Sie beim Klicken auf die Schaltfläche „Bestätigen“ Probleme haben, kopieren Sie den folgenden Code URL und fügen Sie ihn in Ihren Webbrowser ein: :activation_url",
        'next-step' => "Als Nächstes senden wir Ihnen einige hilfreiche Materialien und eine Schritt-für-Schritt-Anleitung, damit Sie ganz einfach Ihre benutzerdefinierte Domain hinzufügen, Zahlungen einrichten, Produkte hinzufügen und Ihre erste Bestellung erhalten können.",

    ],
    'verify-email-code' => [
        'subject' => "Bestätigungscode für :name",
        'category' => "SICHERHEIT",
        'title' => "E-Mail-Bestätigungscode",
        'message' => "Hallo :name,<br><br>Um zu bestätigen, dass <b>:email</b> Ihre korrekte E-Mail-Adresse ist, geben Sie bitte innerhalb der nächsten <b>10 Minuten</b> den folgenden Code ein:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Ihr Shop ist fertig| :name",
        'category' => "SIE SIND NUR EINEN SCHRITT ENTFERNT",
        'title' => "Einrichtung abgeschlossen",
        'account_title' => "Ihr Konto",
        'account_msg' => "Bestätigen Sie Ihr Konto und melden Sie sich mit diesen Informationen an.",
        'shop_msg' => "Kontoinformationen im Selldone Business-Betriebssystem.",

    ],

    'reset2fa' => [
        'category' => "OFFIZIELLE SICHERHEITSMELDUNG",
        'title' => "Deaktivierung der Zwei-Faktor-Anmeldung beantragen",
        'message' => "Sie erhalten diese E-Mail, weil wir mit der E-Mail-Adresse **:email** eine Anfrage zum Zurücksetzen der Zwei-Faktor-Authentifizierung für das Konto **:name** erhalten haben.<br><br>Wir haben die folgenden Details für Ihr Konto gefunden:",
        'footer' => "Wenn Sie kein Zurücksetzen angefordert haben, sind keine weiteren Maßnahmen erforderlich.",
        'action' => 'Zweistufige Anmeldung deaktivieren',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Dein Shop ist jetzt fertig!",
        'category' => "NEUER ONLINE-SHOP IN DER WELT GEBOREN",
        'title' => "Herzlichen Glückwunsch, :name!",
        'message' => "<b>Herzlichen Glückwunsch, :name! Ihr neues Online-Geschäft ist jetzt online!</b> Wir freuen uns, Sie in der Selldoners-Community begrüßen zu dürfen. Sie haben den ersten Schritt zum Erfolg getan und wir sind hier, um Ihnen bei jedem Schritt auf dem Weg zu helfen.<br>Jetzt, da Ihr Shop fertig ist, stellen wir sicher, dass Sie Zahlungen direkt von Ihren Kunden erhalten und mit dem Ausbau Ihres Imperiums beginnen können. Wenn Sie jemals Hilfe benötigen, sind wir nur eine Nachricht entfernt – unser Support-Team ist immer für Sie da.<br><br><b>Wichtige nächste Schritte:</b> Stellen Sie zunächst sicher, dass Sie für den Empfang von Zahlungen und einen reibungslosen Betrieb bereit sind. Wir begleiten Sie durch jede Phase, damit Ihr Geschäft reibungslos läuft.",
        'pdf-book' => "Verpassen Sie nicht das beigefügte Handbuch: Machen Sie Ihr Geschäft wie ein Spiel",

        'account' => [
            'title' => 'Schritt 1: Erstellen Sie ein Konto im Selldone-Wallet',
            'message' => "Erstellen Sie zunächst ein Konto in Ihrem Selldone-Wallet. Hier werden Ihre Gebühren abgezogen und Sie können dort auch Guthaben aufladen, um den reibungslosen Betrieb Ihres Shops zu gewährleisten. Machen Sie sich keine Sorgen, wenn Ihr Kontostand jemals negativ wird! Ihr Geschäft läuft ohne Unterbrechung weiter.",
            'action' => 'Zum Wallet anmelden',
        ],

        'shop-account' => [
            'title' => 'Schritt 2: Konto mit dem Shop verbinden',
            'message' => "Als nächstes verbinden Sie Ihr Wallet-Konto mit Ihrem Shop. Gehen Sie zu <b>Store > Buchhaltung > Invoice</b> und verknüpfen Sie Ihr Wallet. Dadurch wird sichergestellt, dass alle Kundenzahlungen direkt auf Ihr Bankkonto eingezahlt werden – Selldone zieht keine Beträge von Ihren Einnahmen ab.",
            'action' => 'Shop-Rechnungsfenster öffnen',
        ],

        'gateway' => [
            'title' => 'Schritt 3: Online-Zahlungsgateway verbinden',
            'message' => "Jetzt richten wir Ihr Online-Zahlungsgateway ein. Gehen Sie zu <b>Store > Buchhaltung > Port</b> und klicken Sie auf <b>Neuen Port hinzufügen</b>. Wählen Sie Ihre Währung aus und Sie sehen eine Liste der verfügbaren Zahlungsgateways. Das Anschließen eines Gateways ist schnell und einfach. Wenn Sie jedoch Hilfe benötigen, schauen Sie sich gerne die Selldone-Anleitungen an oder wenden Sie sich an uns.",
            'action' => 'Gateway zum Shop hinzufügen',
        ],

        'domain' => [
            'title' => 'Letzter Schritt: Eigene Domain verbinden',
            'message' => "Verknüpfen Sie nun Ihre benutzerdefinierte Domain mit Ihrem Shop. Dadurch können Kunden Ihre Produkte oder Dienstleistungen kaufen und Zahlungen direkt an Sie leisten.",
            'action' => 'Freunde einladen und unbegrenzte Geschenkkarten erhalten',
        ],
    ],


    'basket-list' => [
        'item' => "Artikel",
        'count' => "Anzahl",
        'price' => "Preis",
        'discount-code' => "Rabattcode",
        'customer-club' => 'Kundenclub',
        'shipping' => "Versand",
        'total' => "Gesamt",
        'offer' => "Angebot",
        'coupon' => "Coupon",
        'lottery' => "Gewinnspiel",
        'tax' => "Steuer",
        'tax_included' => "Im Preis inbegriffen",
        'tax_shipping' => "Versandsteuer",
    ],

    'buyable-payments' => [
        'method' => 'Methode',
        'amount' => 'Betrag',
        'giftcard' => 'Geschenkkarte',
        'payment' => 'Zahlung',
    ],


    'shop-subscription-email' => [
        'category' => "Abonnement-Update",
        'title' => "Shop-Lizenz: :shop_title",
        'title-reserved' => "Lizenz reserviert: :shop_title",
        'title-active' => "Lizenz aktiviert: :shop_title",
        'title-finished' => "Lizenz abgelaufen: :shop_title",
        'title-cancel' => "Lizenz gekündigt: :shop_title",
        'message' => "Ihr Shop-Lizenzplan wurde aktualisiert.",
        'RESERVED' => "⚡ Ihr Abonnement wurde **reserviert**.",
        'ACTIVE' => "🟢 Ihr Abonnementplan wurde **aktiviert**.",
        'FINISHED' => "🚧 Ihr Abonnement wurde **abgeschlossen**.",
        'CANCEL' => "⛔ Ihr Abonnementplan wurde **storniert**.",
    ],

    'support' => [
        'subject' => "Support-Center | :name hat geantwortet",
        'category' => "Hilfecenter",
        'title' => "Sie haben eine Antwort erhalten",
        'action' => "Shop-Admin öffnen",
    ],

    'shop-customer-join' => [
        'subject' => "Willkommen bei :shop_title",
        'category' => "Neukundenfeier",
        'title' => "Wir freuen uns über Ihre Mitgliedschaft",
        'action' => "Jetzt besuchen",
    ],

    'shop-vendor-join' => [
        'subject' => "Lieferanten-Onboarding | :shop_title",
        'category' => "Feier zum neuen Lieferanten",
        'title' => "Wir freuen uns über Ihre Mitgliedschaft",
        'action' => "Lieferanten-Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Geschenkkarte :shop_title",
        'category' => "Neue Karte erhalten",
        'title' => "Herzlichen Glückwunsch, Sie haben einen Geschenkgutschein erhalten",
        'action' => "Jetzt einkaufen",
        'message' => "Sie haben einen Geschenkgutschein im Wert von :balance :currency erhalten. Mit diesem Geschenkgutschein können Sie in unserem Shop einkaufen.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Support-Center| :shop",
        'category' => "Support",
        'title' => "Sie haben eine Antwort erhalten",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Bestellbestätigung|Bestellen Sie :order_id",
        'title' => "Bestellung",
        'message' => "Sie haben eine Bestellung in unserem Shop aufgegeben. Wir haben Ihre Bestellung erhalten und senden Ihnen eine weitere E-Mail, sobald die Zahlung bestätigt ist."
    ,

        'payments' => 'Zahlungen',
    ],

    'order-payment' => [
        'subject' => "🛍️ Zahlungsbestätigung|Bestellen Sie :order_id",
        'title' => "Zahlungsbestätigung",
        'message' => "Ihre Zahlung wurde abgeschlossen.<br> Wir haben Ihre Bestellung erhalten. Wir senden Ihnen eine weitere E-Mail, wenn Ihre Bestellung versandt wird.",
    

        'payments' => 'Zahlungen',
    ],

    'order-update' => [
        'subject' => "🛍️ Aktualisierung des Bestellstatus|Bestellen Sie :order_id",
        'title' => "Aktualisierung des Bestellstatus",
        'message' => "Ihre Bestellung wurde aktualisiert. Sie können den aktuellen Status dieser Bestellung in Ihrem Konto überprüfen.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Ihre Bestellung befindet sich in der Warteschlange zur Bearbeitung. Wir benachrichtigen Sie, wenn es vorbereitet wird.",
                'OrderConfirm' => "Ihre Bestellung ist bestätigt und die Vorbereitung hat begonnen.",
                'PreparingOrder' => "Ihre Bestellung wird vorbereitet und in Kürze versendet.",
                'SentOrder' => "Ihre Bestellung wurde versendet. Sie erhalten es in Kürze.",
                'ToCustomer' => "Ihre Bestellung wurde geliefert. Wir hoffen, dass es Ihnen gefällt!",

                'PreparingOrder-PICKUP' => "Ihre Bestellung wird vorbereitet. Sie erhalten eine Benachrichtigung, wenn der Artikel abholbereit ist.",
                'SentOrder-PICKUP' => "Ihre Bestellung ist zur Abholung bereit. Bitte kommen Sie zur Abholung in den Laden.",
                'ToCustomer-PICKUP' => "Ihre Bestellung wurde abgeholt. Wir hoffen, dass es Ihnen gefällt!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Ihre Bestellung befindet sich in der Warteschlange zur Bearbeitung. Wir benachrichtigen Sie, wenn es fertig ist.",
                'OrderConfirm' => "Ihre Bestellung ist bestätigt und die Vorbereitung läuft.",
                'PreparingOrder' => "Ihre Bestellung wird gerade vorbereitet und Ihnen in Kürze zugesandt.",
                'ToCustomer' => "Ihre virtuelle Bestellung wurde Ihrem Konto gutgeschrieben. Danke schön!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Ihre Serviceanfrage befindet sich in der Warteschlange. Wir benachrichtigen Sie, wenn wir beginnen.",
                'OrderConfirm' => "Ihr Service ist bestätigt und wir bereiten uns auf den Beginn vor.",
                'PreparingOrder' => "Wir bereiten Ihren Service vor und benachrichtigen Sie, sobald er abgeschlossen ist.",
                'ToCustomer' => "Ihr Service ist abgeschlossen. Vielen Dank, dass Sie sich für uns entschieden haben!"
            ],
            'FILE' => [
                'PreparingOrder' => "Ihre Datei wird vorbereitet und ist bald verfügbar.",
                'ToCustomer' => "Ihre Datei ist fertig und wurde zugestellt. Sie können es jetzt herunterladen."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Ihre Abonnementbestellung befindet sich in der Warteschlange. Wir benachrichtigen Sie, sobald die Bearbeitung beginnt.",
                'OrderConfirm' => "Ihr Abonnement wurde bestätigt und wird eingerichtet.",
                'PreparingOrder' => "Wir bereiten Ihr Abonnement vor und es startet bald.",
                'SentOrder' => "Ihr Abonnement wurde aktiviert. Sie erhalten fortlaufend Updates.",
                'ToCustomer' => "Ihr Abonnementdienst wurde erfolgreich aktiviert."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Glückwunsch :name | Neuer Gutschein: :title',
        'category' => "HERZLICHEN GLÜCKWUNSCH, NEUER GUTSCHEIN",
        'message' => "Hallo :name,<br><br>Sie haben von uns einen neuen Gutschein geschenkt bekommen! Sie können noch mehr Gutscheine verdienen, indem Sie Selldone Ihren Freunden und allen, die Sie kennen, vorstellen. Dieser Gutschein hat einen Wert von **:price :currency**.<br><br>Sie haben den ersten Schritt gemacht und wir sind hier, um Ihnen dabei zu helfen, mit Ihrem Gutschein neue Funktionen freizuschalten! Bitte melden Sie sich mit **:email** an und finden Sie Ihren Gutschein im Shop **Dashboard** > **Einstellungen** > **Lizenz**.<br><br>Herzlichen Glückwunsch!",
        'action' => "Mein Dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Herzlichen Glückwunsch, lieber :name | Sie haben ein Geschenk erhalten',
        'category' => "Ankündigung eines erhaltenen Geschenks",
        'title' => "Geschenke für dich",
        'message' => "Hallo :name, wir freuen uns, Ihnen mitteilen zu können, dass Sie ein besonderes Geschenk von Selldone erhalten haben! 🎉 Sie können mehr Geschenke verdienen, indem Sie aktiv bleiben, Ihren Shop erweitern und Ihr Fachwissen zu Selldone verbessern. Um Ihr Geschenk anzusehen, melden Sie sich einfach mit :email an und suchen Sie in der oberen rechten Ecke Ihres Dashboards danach.<br><br>Dieses Geschenk hat einen Wert von **:price :currency**, und Sie können es ganz einfach innerhalb von Selldone in Ihr Wallet einzahlen.<br><br>Nutzen Sie Ihr Geschenk, um die Lizenz Ihres Shops zu aktualisieren und noch leistungsfähigere Tools freizuschalten, die Ihr Online-Geschäft voranbringen!",
        'action' => "Geschenke",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Neue Bestellung erhalten| :order_id",
        'title' => "Neue Bestellung",
        'message' => "Sie haben eine neue Bestellung erhalten. Bitte gehen Sie zur Bestellabwicklungsseite in Ihrem Shop.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Ihre eingegebenen Informationen',
        'output-form-title' => 'Informationen zum gekauften Artikel',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Wöchentlicher Bericht :time',
        'title' => 'Wöchentlicher Leistungsbericht Ihres Shops',
        'message' => "Dies ist der wöchentliche Bericht Ihres Shops von <b>:start</b> bis <b>:end</b>. Dieser Bericht enthält Tipps zur Verbesserung Ihres Geschäfts. Sie können außerdem den Status Ihres Online-Shops und die letzten Bestellungen überprüfen. Ich hoffe, Sie haben einen guten Tag und eine gute Woche vor sich."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Ihr :amount-Einsparungsbericht in den letzten drei Monaten| :shop_title',
        'title' => 'Saisonbericht über Ihre Geschäftstätigkeit, Prämien und finanzielle Einsparungen',
        'message' => "Dies ist Ihr <b>:shop_title</b> Saisonbericht von <b>:start</b> bis <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Verbundene Konten',
        'sub-title' => 'Aktueller Status der mit meinem Shop verbundenen Wallet-Konten',
        'view-wallet' => 'Wallet ansehen',
        'tip-title' => 'Wichtige Hinweise',
        'tip' => "Richten Sie ein kostenloses Selldone-Wallet ein und verknüpfen Sie es mit Ihrem Shop. Auch wenn Ihr Kontostand negativ ist, können Ihre Kunden problemlos einkaufen und bezahlen. Machen Sie sich keine Sorgen, der Betrieb und die Daten Ihres Shops laufen bis zu einem Monat lang reibungslos und ohne Unterbrechungen weiter.",
        'view-my-wallet' => 'Mein Wallet',
        'connect-account' => 'Mit Konto verbinden'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Installierte Anwendungen',
        'sub-title' => 'Liste der Apps, die Sie diese Woche in Ihrem Shop installiert haben.',
        'tip' => "Möchten Sie weitere Apps für Ihren Shop finden?",
        'view-app-store' => 'Besuchen Sie den Selldone App Store.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Ihre Shop-Bots',
        'sub-title' => 'Aktive Verkaufsbots in meinem Shop.',
        'tip-title' => 'Bot-Verkauf',
        'tip' => "Selldone hat Ihnen automatische Verkaufsbots zur Verfügung gestellt. Gehen Sie zu Add-ons > Bots und aktivieren Sie Ihre Shop-Bots. Beachten Sie, dass der entsprechende Dienst in Ihrem Land verfügbar sein muss.",
        'view-bots' => 'Bots verwalten',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kommunikation mit Kunden',
        'sub-title' => 'Wie viele Kontakte hatte ich diese Woche mit meinen Kunden?',
        'faqs' => 'Häufig gestellte Fragen',
        'tickets' => 'Support-Tickets',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Benutzerstatus',
        'sub-title' => 'Von :start bis :end',
        'users' => [
            'title' => 'Kunden',
            'subtitle' => 'Registrierte Benutzer',
        ],
        'views' => [
            'title' => 'Besuche',
            'subtitle' => 'Wie oft wurde der Shop besucht',
        ],
        'new_visitors' => 'Neue Benutzer',
        'returning_visitors' => 'Wiederkehrende Benutzer',

        'shop_views' => 'Shop-Aufrufe',
        'baskets' => [
            'title' => 'Warenkörbe',
            'subtitle' => 'Anzahl der neuen Warenkörbe',
        ],
        'products' => [
            'title' => 'Produktübersicht',
            'subtitle' => 'Status der Produkte im Shop nach Typ',
            'value_name' => 'Produkte'
        ],
        'products_count' => 'Produktarten',
        'views_count' => 'Anzahl der Aufrufe',
        'sell_count' => 'Verkaufsanzahl',
        'send_count' => 'Versandanzahl',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Dropshipping',
        'sub-title' => 'Panel für Großverkäufer im Selldone Dropshipping.',
        'total_fulfillments' => 'Gesamtzahl der erhaltenen Bestellungen',
        'ds_count' => 'Erhaltene Bestellungen',
        'statistics_title' => 'Bericht über erhaltene Bestellungen',
        'ds_cancels' => 'Stornierungen durch Schnittstellenverkäufer',
        'ds_rejects' => 'Von Ihnen abgelehnt',
        'tip' => "Sind Sie ein Großverkäufer? Besitzen Sie ein Lager, eine Fabrik oder sind Sie Händler von Produkten? Sie können Ihre Produkte anderen Verkäufern im Selldone Dropshipping-Service anbieten. Senden Sie uns eine E-Mail an support@selldone.com für weitere Informationen.",
        'view-drop-shipping-panel' => 'Zum Großhandelspanel anmelden',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Wechselkurse',
        'sub-title' => 'Liste der neuesten Währungsumrechnungskurse in Ihrem Shop.',
        'from' => 'Ausgangswährung',
        'to' => 'Zielwährung',
        'rate' => 'Umrechnungskurs',
        'view-exchange-panel' => 'Wechselkurse verwalten',
    

        'vew-exchange-panel' => 'Wechselkursverwaltung',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Expertenverträge',
        'sub-title' => 'Welche Fachleute arbeiten in meinem Shop?',
        'cost' => 'Vertragssumme',
        'duration' => 'Laufzeit',
        'start_at' => 'Startdatum',
        'complete_at' => 'Abschlussdatum',
        'cancel_at' => 'Stornierungsdatum',
        'end_at' => 'Lieferdatum',
        'tip' => 'Sie können die besten Spezialisten bei Selldone beauftragen, um Ihr Geschäft auszubauen.',
        'view-experts' => 'Klicken Sie hier, um zu starten.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Zahlungsgateways',
        'sub-title' => 'Aktive Zahlungsgateways im Shop :shop.',
        'tip-title' => 'Wichtige Hinweise',
        'tip' => "Gehen Sie zur Gateway-Verwaltungsseite in Ihrem Shop und fügen Sie in wenigen Minuten mindestens ein Gateway hinzu. Ihre Kunden bezahlen gerne schnell und sicher über Online-Gateways.",
        'view-shop-gateways' => 'Gateway-Verwaltung meines Shops aufrufen',
        'view-gateways' => 'Weitere Gateways anzeigen',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Bestellungen',
        'sub-title' => 'Liste der Bestellungen, die ich diese Woche erhalten habe.',
        'total_baskets' => 'Bestellungen insgesamt',
        'total_posBaskets' => 'Gesamte Barbestellungen',
        'pos-title' => 'POS-Kasse',
        'chart-label' => 'Abgeschlossene Bestellungen (diese Bestellungen sind nicht zwingend bezahlt!)',
        'tip-title' => 'Sie sollten mehr Einsatz zeigen...',
        'tip' => "Kein Erfolg ohne Mühe.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Bearbeitungszentrum',
        'sub-title' => 'Wie viele Bestellungen haben wir diese Woche im Shop bearbeitet?',
        'tip-title' => 'Sie hatten keine Verkäufe!',
        'tip' => "Leider hatten Sie diese Woche keine Verkäufe. Sie müssen mehr in Ihren Shop investieren. Sie können weitere Produkte hinzufügen, bessere Bilder auswählen oder bessere Beschreibungen für Ihre Produkte schreiben. Behandeln Sie Ihr Unternehmen als Vollzeitaufgabe. Wenn Sie es richtig angehen und nicht aufgeben, werden Sie Erfolg haben.",
        'view-process-center' => 'Bearbeitungszentrum anzeigen',
        'return' => [
            'title' => 'Zurückgesendete Bestellungen',
            'subtitle' => 'Rücksendungen melden.',
            'tip-title' => 'Wussten Sie, dass ...',
            'tip' => "Mit Selldone POS können Sie so viele Kassen erstellen, wie Sie benötigen! Ganz gleich, ob es sich um Ihr Tablet, Ihr Mobiltelefon oder Ihren Laptop handelt, Sie können jedes Gerät in die Verkaufsstelle Ihres Geschäfts verwandeln. Es ist einfach, schnell einzurichten und vollständig auf Ihren Server vorbereitet. Beginnen Sie noch heute damit!",
            'view-pos' => 'Zur Kasse meines Online-Shops'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sitzungen',
        'sub-title' => 'Wie oft wurde mein Shop besucht?',
        'countries-title' => 'Aus welchen Ländern kamen die meisten Besuche?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Möchten Sie Geld verdienen, ohne einen Euro auszugeben?',
        'message' => "Sehr geehrter :name, Sie können zu Dashboard > Monetarisierung gehen und einen Empfehlungslink erstellen. Senden Sie den Link an Ihre Freunde. Sie erhalten eine Selldone-Geschenkkarte und einen Prozentsatz der Zahlungen Ihrer Freunde. Beachten Sie, dass die Geschenkkarte sowohl an Sie als auch an Ihren Freund gesendet wird.",
        'action' => 'Meinen Empfehlungslink anzeigen',
        'mail-clip' => "<b style='color: #C2185B'>Wichtig:</b> Wenn Sie E-Mail-Dienste wie Gmail verwenden, die die E-Mail-Länge begrenzen, finden Sie am Ende der E-Mail eine Option, um den vollständigen Bericht anzuzeigen. Bitte klicken Sie darauf:",

        'no-coin-reward' => "<b style='color: #C2185B'>Hinweis:</b> Ihre Aktivität erfüllt nicht die Voraussetzungen für eine kostenlose SEL-Coins-Belohnung. Geben Sie sich mehr Mühe und verkaufen Sie in der nächsten Saison mehr in Ihrem Shop.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Belohnung:</b> Herzlichen Glückwunsch, aufgrund Ihrer hervorragenden Leistung haben wir Ihnen eine kostenlose Belohnung von :amount SEL Coins gegeben.",

        'need-buy-license' => "<b>Erhöhen Sie Ihr Geschäftsniveau:</b> Offenbar haben Sie noch kein Abonnement für Ihre Website registriert! Führen Sie jetzt ein Upgrade durch, um bei jährlicher Zahlung für nur :amount pro Monat weitere Funktionen freizuschalten.",
        'not-afford-message' => "Wenn Sie sich das nicht leisten können oder Probleme mit der Zahlung haben, teilen Sie uns dies bitte über support@selldone.com mit.",
        'add-domain' => "<b>Warum nicht eine eigene Domain für Ihr Unternehmen?</b><br> Fügen Sie jetzt eine Domain zu Ihrer Website hinzu – kostenlos!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone ist ein <del>Produkt</del> <span style = 'color: forestgreen'> Community</span>.<br>Seien Sie ein professioneller Selldoner!",
        'message' => "Folgen Sie den offiziellen Seiten von Selldone auf Twitter, LinkedIn und in sozialen Netzwerken. Senden Sie uns Kommentare, Anfragen oder Kritik oder beteiligen Sie sich an Diskussionen über Selldone. Wir sind auch Teil der Selldone-Community, die <b>Sie</b> mitgestalten."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Neue Avocado-Bestellungen eingegangen|:shop_title :time',
        'title' => "Leistungsbericht der letzten 24 Stunden",
        'message' => "Ihre Kunden warten darauf, dass ihre Bestellungen überprüft und mit Preisen versehen werden. Reagieren Sie so schnell wie möglich auf die Anfragen Ihrer Kunden, um mehr Umsatz zu erzielen.",
        'card_title' => "Bestellungen in der Warteschlange",
        'card_subtitle' => "Seit :date",

        'card_payed' => "Bezahlte Bestellungen"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Antwort auf Ihren Beitrag in :community_title',
        'title' => ":name und :count weitere haben Ihre Beiträge kommentiert.",
        'message' => "Hallo :name, deine Beiträge erregen Aufmerksamkeit! Sie haben Kommentare in unserer Community erhalten. Melden Sie sich bei Ihrem Konto an, um an der Diskussion teilzunehmen und zu sehen, was alle sagen.",
        'title-simple' => ":name hat Ihre Beiträge kommentiert.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Antwort auf Ihr Thema :topic_title',
        'title' => ":name und :count weitere haben auf Ihr Thema geantwortet.",
        'message' => "Hallo :name, Ihr Thema erregt Aufmerksamkeit! Sie haben Antworten in unserer Community erhalten. Melden Sie sich bei Ihrem Konto an, um an der Diskussion teilzunehmen und zu sehen, was alle sagen.",
        'title-simple' => ":name hat auf Ihr Thema geantwortet.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Neues Login :name',
        'category' => 'Sicherheitsbenachrichtigungen',
        'title' => "Anmeldung am Konto",
        'message' => "Sehr geehrter :name, Sie haben sich bei Ihrem Selldone-Konto angemeldet.",   // Login in selldone (seller)
        'message-shop' => "Sehr geehrter :name, Sie wurden bei :shop_title angemeldet.",  // Login in shop (buyer)

        'footer' => "Wenn Sie sich nicht angemeldet haben, ändern Sie bitte Ihr Passwort.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Auszahlung",
        'deposit' => "Einzahlung",

        'withdraw_subject' => "Vom Konto :account abheben",
        'deposit_subject' => "Einzahlung auf das Konto :account",

        'message' => "Die Geldüberweisung wurde mit folgenden Angaben durchgeführt.",

        'type' => "Art der Transaktion",

        'from' => "Quellkonto",
        'to' => "Zielkonto",

        'desc' => "Transaktionsbeschreibung",
        'action' => "Transaktion anzeigen",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Wichtig! Regelverstoß| :shop",
        'category' => "Kritische Benachrichtigung",
        'title' => "Ihr Shop wurde bestraft",
        'action' => "Shop-Dashboard öffnen",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter hat Sie zu Selldone eingeladen",
        'title' => ":name hat Ihnen :amount geschickt, um Ihnen zu helfen, Ihre neue Online-Website zu starten und zu monetarisieren!",
        'message' => "Hallo **:receiver_name**,<br><br>Willkommen bei Selldone! Auf Selldone können Sie ganz einfach Ihre E-Commerce-Website, Ihren Blog, Ihre Online-Community erstellen und sogar ein Online-POS-System für den persönlichen Verkauf einrichten – alles innerhalb von Minuten. Es handelt sich um das komplette Online-Geschäftsbetriebssystem, das Ihr Unternehmen besser, schneller und benutzerfreundlicher macht.<br><br>Melden Sie sich bei <b>:date</b> an und erhalten Sie einen :amount-Gutschein, um loszulegen!",
        'accept' => "Einladung annehmen",
        'owner' => "Inhaber von",
        'join-date' => "Mitglied bei Selldone seit",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Wiederherstellungslink| :shop",
        'category' => "Shop-Sicherheit",
        'title' => "Shop-Wiederherstellungslink von <b>:shop_name</b>.",
        'message' => "Diese E-Mail wurde Ihnen gesendet, weil Sie die Wiederherstellung Ihres Shops angefordert haben. Wenn Sie auf den unten stehenden Link klicken, werden Ihr Shop und alle dazugehörigen Daten wiederhergestellt.",
        'action' => "Shop-Wiederherstellung bestätigen",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Wie viel Geld hat Selldone für Ihr Unternehmen gespart?',
        'sub-title' => 'Von :start bis :end',
        'infrastructure' => [
            'title' => 'Infrastruktur',
            'subtitle' => 'Server, CDN, Speicher und andere Cloud-Dienste',
        ],
        'experts' => [
            'title' => 'Experten & Mitarbeiter',
            'subtitle' => 'Entwickler, Wartung und Support',
        ],
        'total_save' => 'Insgesamt gespartes Geld'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Ihre Leistung',
        'sub-title' => 'Geschäftsübersicht von :start bis :end',

        'new_visitors' => 'Neue Benutzer',
        'returning_visitors' => 'Wiederkehrende Benutzer',

        'shop_views' => 'Shop-Aufrufe',
        'baskets' => [
            'title' => 'Warenkörbe',
            'subtitle' => 'Anzahl der neuen Warenkörbe',

        ],
        'products' => [
            'title' => 'Produktübersicht',
            'subtitle' => 'Status der Produkte im Shop nach Typ',
            'value_name' => 'Produkte'
        ],
        'views' => [
            'title' => 'Seitenaufrufe',
            'subtitle' => 'Seitenaufrufe insgesamt',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'Neue Bestellung',
        'message' => "Sie haben eine neue Bestellung erhalten. Bitte gehen Sie in Ihrem Lieferantenbereich auf die Seite zur Bestellabwicklung.",
        'subject' => "🛍️ Neue Bestellung erhalten| :order_id",
        'your_revenue' => "Ihr Umsatz",
    ],
    'vendor-invite' => [
        'title' => 'Lieferanteneinladung',
        'message' => "Sie haben eine Einladung erhalten, Lieferant von :shop_name zu werden. Sie können die Einladung annehmen oder ablehnen, indem Sie auf die folgenden Schaltflächen klicken.",
        'subject' => ":shop_name | Sie haben eine Einladung erhalten, unser Lieferant zu werden",
        'accept' => "Annehmen und Lieferant werden",
        'reject' => "Ablehnen",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Einladung, unserem Team beizutreten',
        'message' => "Sie wurden eingeladen, :vendor_name bei :shop_name beizutreten. Sie können diese Einladung über die Schaltflächen unten annehmen oder ablehnen.",
        'subject' => "Einladung zur Teilnahme an :vendor_name|Werden Sie Teammitglied",
        'accept' => "Akzeptieren Sie und treten Sie dem Team bei",
        'reject' => "Ablehnen",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Ihr Login-Code für :shop",
        'header-message' => "Wir senden Ihnen diese E-Mail, weil Sie einen Login-Code für den Shop angefordert haben. Ihr Einmalpasswort (OTP) finden Sie unten:",
        'footer-message' => "Dieser Code ist 10 Minuten lang gültig. Wenn Sie diesen Anmeldecode nicht angefordert haben, ignorieren Sie diese E-Mail bitte."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Bestätigen Sie Ihre E-Mail | :shop",
        'title' => 'E-Mail-Verifizierung',
        'header-message' => "Hallo :name,<br> Bitte bestätigen Sie, dass **:email** Ihre E-Mail-Adresse ist, indem Sie innerhalb von 48 Stunden auf die Schaltfläche klicken oder den untenstehenden Link verwenden.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Produktaktualisierungen| :shop",
        'title' => "Produktstatus-Update – Letzte 24 Stunden",
        'message' => "Ich hoffe, diese Nachricht findet Dich gut. Dies ist ein kurzes Update, um Sie über den Status Ihrer Produkte auf unserer Plattform in den letzten 24 Stunden zu informieren.\nIn diesem Zeitraum kam es zu Statusänderungen einiger Produkte. Diese Änderungen können auf Käufe, Bestandsaktualisierungen oder andere damit zusammenhängende Ereignisse zurückzuführen sein.\nFür detailliertere Informationen zu den einzelnen Produkten melden Sie sich bitte bei Ihrem Konto an und überprüfen Sie den Abschnitt „Produktstatus“.",
        'action' => "Lieferanten-Panel öffnen",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Großbestellungen eingegangen| :shop | :date",
        'title' => "Benachrichtigung über Großbestellungen",
        'message' => "Sie haben eine Reihe von Großbestellungen erhalten. Weitere Informationen finden Sie auf der Seite „Bestellabwicklung“ in Ihrem Panel. Sie können die Bestellliste auch über den bereitgestellten sicheren Link herunterladen, gültig für 7 Tage.<br><br>\n        <b>WICHTIG:</b> Dieser Link ist 7 Tage lang gültig.<br>\n        Dieser Link ist dynamisch, sodass Sie jedes Mal, wenn Sie darauf klicken, die aktuellsten Bestellungen für dieses bestimmte Datum erhalten. <b>Das bedeutet, dass Sie die Bestellung nicht mehr in der heruntergeladenen CSV-Datei sehen, wenn sich der Zahlungsstatus der Bestellung in „Abgelehnt“ ändert. Wenn die Bestellung bezahlt ist, erscheint sie in der Liste.</b><br><br>\n        <ul>\n            <li>Die CSV enthält bezahlte Bestellungen mit einem reservierten Datum im :date.</li>\n            <li>Reserviertes Datum ist das Datum, an dem der Benutzer auf der Bestellseite auf „Zur Kasse gehen“ klickt.</li>\n        </ul>\n        <b>Um doppelte Bestellungen zu vermeiden, überprüfen Sie immer die Bestellung ID, bevor Sie sie senden.</b>",
        'action' => "Bestellliste herunterladen",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Einige Artikel Ihrer Bestellung wurden nicht angenommen und können nicht geliefert werden. Der Betrag für diese Artikel wird Ihnen in Kürze auf Ihre Karte zurückerstattet."
    ]

];

