<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Stu messagiu accoglie un novu cumpratore in a tenda.',
        ShopMailTemplateCodes::OrderCheckout => 'Questa notificazione hè mandata quandu un cumpratore cunfirma un ordine.',
        ShopMailTemplateCodes::OrderPayment => 'Questa notificazione cunfirma u pagamentu successu fattu da un cliente.',
        ShopMailTemplateCodes::OrderUpdate => 'Stu missaghju hè mandatu per aghjurnà un cumpratore nantu à u statu di u so ordine.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Stu messagiu hè mandatu à un venditore per avvisà li di un ordine cunfirmatu.',
        ShopMailTemplateCodes::PosCheckout => 'Questa notificazione hè mandata per cunfirmà un ordine di puntu di vendita per un cumpratore.',
        ShopMailTemplateCodes::PosPayment => 'Questa notificazione cunfirma un pagamentu puntu di vendita fattu da un cumpratore.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Stu missaghju informa u vinditore di una compra fatta in u so puntu di vendita.',
        ShopMailTemplateCodes::ShopContact => 'Questa notificazione hè mandata quandu un furmulariu di cuntattu hè statu sottumessu.',
        ShopMailTemplateCodes::ShopGiftCard => 'Questa notificazione informa un utilizatore chì hà ricevutu una carta rigalu.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Stu messagiu accoglie un novu venditore in a buttrega.',
        ShopMailTemplateCodes::ShopVendorInvite => "Stu missaghju hè speditu per invità un venditore à unisce à u vostru mercatu.",
        ShopMailTemplateCodes::ShopVendorOrder => "Stu missaghju hè mandatu à u venditore quandu un ordine hè ricevutu in u statu Pagatu o Cash on Delivery (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Speditu ogni ghjornu per aghjurnà i venditori nantu à u statutu di i so prudutti.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Stu missaghju hè mandatu per invità un venditore à unisce à u vostru mercatu.",

        ShopMailTemplateCodes::UserLogin => "Notificà l'utilizatore cù i dati di login, cumpresu l'indirizzu IP, a data è u dispositivu, per scopi di sicurità.",
        ShopMailTemplateCodes::LoginCode => "Mandate un codice di password una volta per l'utilizatori per accede à a tenda.",

        ShopMailTemplateCodes::EmailVerifyLink => "Mandate un ligame per verificà l'indirizzu email di l'utilizatore. Questu email hè mandatu quandu un utilizatore si registra da SMS è entra in u so email. Ùn hè micca mandatu quandu un utilizatore si registra direttamente cù login suciale o email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Mandate una lista di ordini ricevuti è pagati in massa per un ghjornu specificu."


    ,

    ],


    'global' => [
        'greetings' => 'Salute, :name!',
        'end-statement' => 'Squadra di sustegnu',

        'receiver_name' => 'Saluti :user_name',
        'footer-help' => "Avete bisognu di aiutu? Fate à [support@selldone.com](mailto:support@selldone.com) o visitate u nostru [help center] (https://selldone.com/community).",
        'selldone-team' => 'A squadra Selldone',
        'footer-shop' => "Sè avete bisognu di aiutu cù qualcosa per piacè ùn esitate à abbandunà un email: :shop_mail",
        'accept' => "Accetta",
        'reject' => "Rifiuta",
        'verify' => "verificate",
        'title' => "Titulu",
        'value' => "Valore",
        'description' => "Descrizzione",
        'shop' => "Shop",
        'shop-info' => "Information Store",
        'user' => "User",
        'user-info' => "Informazioni di u contu",
        'license' => "Licenza",
        'status' => "Status",
        'start' => "Principià",
        'end' => "fine",
        'renewal' => "Rinuvamentu",
        'view' => "Vede",

        'balance' => "Balance",
        'card_number' => "Numero di carta",
        'cvv' => "Cvv",
        'expire_date' => "Data di scadenza",

        'Dashboard' => "Dashboard",
        'order' => "ordine",
        'view_order' => "Vede l'ordine",
        'pay_now' => "Pay now",

        'official_selldone' => "VENDUTA UFFICIALE",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "valuta",
        'free-balance' => "Bilanciu liberu",
        'locked-balance' => "Equilibre chjusu",
        'bot' => "Bot",
        'requests' => "E dumande",
        'baskets' => 'carretti',
        'physical' => "Fisica",
        'virtual' => "Virtuale",
        'file' => "File",
        'service' => "serviziu",
        'fulfillment' => "Cumplimentu",
        'open' => "Apertu",
        'reserved' => "Riservatu",
        'canceled' => "Annulatu",
        'payed' => "Pagatu",
        'cod' => "COD",
        'orders-count' => 'Ordini',
        'payments-count' => 'Pagamenti',
        'confirms-count' => 'Cunfirma',
        'sends-count' => 'Mandate',
        'delivers-count' => 'Consegna',
        'count' => 'Conti',
        'transactions-count' => 'E transacciones contanu',
        'success-transactions' => 'Transazzione di successu',
        'total-amount' => 'A quantità tutale',
        'amount' => 'A quantità',
        'wage' => 'Salariu',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Live',
        'CheckQueue' => 'Verificate a fila',
        'OrderConfirm' => 'Ordine cunfirmatu',
        'PreparingOrder' => 'Preparazione di l\'ordine',
        'SentOrder' => 'Mandatu ordine',
        'ToCustomer' => 'Cunsegna à u cliente',
        'Pending' => 'In attesa',
        'Accepted' => 'Acceptatu',
        'Rejected' => 'Rifiutata',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'telefonu',
        'total' => 'Totale',
        'view-detail' => 'Vede i dettagli',
        'empty' => 'Viotu',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Rispondimi',
        'reactions' => 'Reazzione',
        'Comments' => 'Cumenti',
        'last-comment' => 'Ultimu cumentu',
        'response-to' => 'Risposta à',
        'posts' => 'Posti',
        'post' => 'Post',

        'name' => 'Nome',
        'email' => 'E-mail',
        'type' => 'tipu',
        'device' => 'Dispositivu',
        'platform' => 'Piattaforma',
        'browser' => 'Browser',
        'time' => 'U tempu',
        'Wallet' => 'Wallet',
        'date' => 'Data',

        'account' => 'contu',
        'transaction' => 'Transazzione',
        'fee' => 'Tariffa',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'categuria',
        'password' => 'Codice',
        'verify-login' => "Verificate è accede",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Cumprà avà",
        'add-domain' => "Add Domain",
        'views' => 'Viste',


        'country' => 'Paese',
        'address' => 'indirizzu',
        'postal' => 'Codice pustale',
        'building_no' => 'Edificiu #',
        'building_unit' => 'Unità #',
        'message' => 'Missaghju',


        'customer' => 'Cliente',
        'cart-items' => 'Articuli di u carrettu',
        'payment' => 'Pagamentu',
        'receiver' => 'Ricevitore',
        'virtual-items' => 'Articuli virtuali',
        'no-payment' => 'Nisun pagamentu !',

        'enable' => 'Attivà',
        'access' => 'Accessu',
        'bank' => 'infurmazione bancaria',

        'vendor' => 'Venditore',

        'view_content' => "Vede u cuntenutu sanu",
        'files' => 'I schedari',
        'download' => 'Scaricate',
        'file_name' => 'File Name',
        'file_size' => 'Taglia',

        'subscription' => 'Abbonamentu',
        'products' => 'I prudutti',
        'vendor_products' => 'I prudutti di u venditore',

        'pickup' => 'Pickup',

        'minutes' => 'Minuti',
        'hours' => 'Ore',

        'refund' => 'Rimborsu',
        'recipient_address' => 'Indirizzu di u destinatariu',
        'signature' => 'Firma',
        'blockchain' => 'Blockchain',
        'details' => 'Dettagli',


    

        'Shop' => 'Shop',
        'dashboard' => 'dashboard',
        'comments' => 'cumenti',
        'wallet' => 'portafoglio',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Rapportu di performance, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Rapportu di stagione, Selldone'
        ],
        'Onboarding' => [
            'id' => 'salute',
            'name' => 'Approva, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Supportu :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verificate, Selldone'
        ],
        'Welcome' => [
            'id' => 'salute',
            'name' => 'Cumunità, Selldone'
        ],
        'NewShop' => [
            'id' => 'i cummercianti',
            'name' => 'Approva, Selldone'
        ],
        'Approve' => [
            'id' => 'appruvà',
            'name' => 'Approva, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gestione di ordini :name'
        ],

        'Recovery' => [
            'id' => 'ricuperazione',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'In attesa ⌛',
        'PAYED' => 'Pagatu ✅',
        'CANCELED' => 'Annulatu ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Amministratore',
            'OFFICER' => 'Ufficiale è Supervisore',
            'AUDITING' => 'Responsabile di auditing',
            'EMPLOYEE' => 'Impiegatu',
            'PRODUCT' => 'Manager di i prudutti',
            'CONTENT' => 'Manager di cuntenutu',
            'MARKETING' => 'Manager di marketing',
            'VIEWER' => 'Viewer',

        ],
        'subject' => ":inviter vi hà invitatu cum'è :level| :shop",
        'category' => "Invitu di u persunale",
        'title' => "Avete statu invitatu à <b>:shop_name</b> cum'è <b>:level</b> .",
        'message' => "Avete ricevutu un invitu à collaborà cù a squadra <b>:shop_title</b> in l'affari. Avete l'opzione di accettà o ricusà sta offerta. Se sceglite di accettà, accede à u serviziu Selldone per cunfirmà a vostra decisione. Dopu a cunferma, uttene accessu à a sezione di gestione di a tenda.",

    ],

    'welcome-email' => [
        'subject' => "👋 Benvenuti :name, Cuminciamu cù Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Benvenuti à Selldone",
        'message' => "Grazie per avè sceltu Selldone! Fate avà parte di una cumunità vibrante chì cunnetta i venditori globali à i clienti, l'imprese lucali à l'imprese, è l'individui à e corporazioni. Tutti i nostri strumenti Master è Pro sò dispunibuli per voi **gratu** è **illimitatu**. Semu quì per sustenevi è apre e porte à u vostru successu.",

        'index' => "Passu :step.",

        'step-domain' => [
            'title' => 'Aghjunghjite u vostru Dominiu Personalizatu',
            'message' => "Per cumincià, aghjunghje u vostru duminiu persunalizatu gratuitamente in u Shop Dashboard in Settings> Domains Settings.",
            'action' => 'Gestisce i mo domini',
        ],
        'step-landing' => [
            'title' => 'Personalizà a vostra Home Page',
            'message' => "Personalizà a vostra pagina di casa andendu à Dashboard> Pagine. Sceglite una pagina di destinazione o creanu una nova. Hè faciule è intuitive, è pudete cumincià à travaglià immediatamente.",
            'action' => 'Personalizà a mo pagina di destinazione',
        ],
        'step-payment' => [
            'title' => 'Configurate i metudi di pagamentu',
            'message' => "Cumincià à accettà pagamenti direttamente in u vostru contu bancariu. Per cunnette i vostri fornituri di pagamentu cum'è Stripe, PayPal, è più, andate à Dashboard> Accounting> Gateway.",
            'action' => 'Aghjunghjite i metudi di pagamentu',
        ],
        'step-products' => [
            'title' => 'Aghjunghjite i vostri prudutti',
            'message' => "Aghjunghjite facilmente prudutti è categurie in u Dashboard> Products. Hè cum'è a gestione di i fugliali è di e cartelle in u vostru PC - prontu per drag-and-drop. Pudete ancu impurtà prudutti in massa cù Excel. Un mudellu di mostra hè dispunibule per aiutà à inizià.",
            'action' => 'Gestisce i mo prudutti',
        ],
        'step-shipping' => [
            'title' => 'Configurate i metudi di spedizione',
            'message' => "Per carricà i clienti per u trasportu, definisce i vostri metudi di spedizione in Dashboard> Logistic> Shipping. Pudete stabilisce prezzi differenti è supportu per diverse locu. Ùn vi scurdate di stabilisce a vostra origine di magazzinu in Dashboard> Logistic> Warehouse.",
            'action' => 'Gestisce i metudi di spedizione',
        ],
    

        'seller' => [
            'title' => 'Sò un venditore?',
            'message' => 'Per inizià a vendita, entre in u vostru dashboard in Selldone via u ligame sottu è crea a vostra prima tenda completamente gratis. Questu hà da piglià uni pochi di minuti è avete a vostra propria tenda è u situ in linea. Allora vi guideremu à i prossimi passi è uttene u gateway di pagamentu.',
            'action' => 'Accedi à u mo dashboard',
        ],
        'buyer' => [
            'title' => 'Sò un cumpratore',
            'message' => 'Felicitazioni. Una volta site un membru di Selldone, sbararete di tutti i fastidi di l\'appartenenza è l\'autentificazione in i buttreghi in linea. Per prufittà di qualsiasi tenda è situ chì usa a piattaforma Selldone, pudete login cun un clic è fà a vostra compra simplice, veloce è sicura.',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet> Account> Charge',
        'title' => "Carica di successu",
        'message' => "U vostru contu <b>:account_number</b> hè stata caricata <b>:amount</b> cun successu.",
        'account' => 'contu',
        'charge' => 'Carica',
        'balance' => 'Balance',
        'footer' => "Fate l'affari faciuli, rializabili è accessibili à tutti in u mondu."
    ],

    'verify-email' => [
        'subject' => "🙌 Completa a vostra iscrizzione à Selldone! Verificate u ligame.",
        'category' => "TU SIETE A UN PASSU",
        'title' => "Verificate u vostru indirizzu email",
        'message' => "Ciao :name,<br><br>Grazie per avè sceltu Selldone!<br><br>Per cunfirmà chì <b>:email</b> hè u vostru indirizzu email currettu, o fate cliccà u ligame furnitu sottu. Avete 48 ore per compie sta verificazione.",
        'footer' => "Sè avete prublemi à cliccà u buttone Verificate, copia è incollà l'URL sottu in u vostru navigatore web: :activation_url",
        'next-step' => "In seguitu, vi manderemu qualchi materiali utili è una guida passo-passu per fà più faciule per voi per aghjunghje u vostru duminiu persunalizatu, stabilisce pagamenti, aghjunghje prudutti è uttene u vostru primu ordine.",

    ],
    'verify-email-code' => [
        'subject' => "Codice di verificazione per :name",
        'category' => "SECURITY",
        'title' => "Codice di verificazione email",
        'message' => "Salute :name,<br><br>Per cunfirmà chì <b>:email</b> hè u vostru indirizzu email currettu, per piacè inserite u codice seguente in i prossimi <b>10 minuti</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 A vostra buttrega hè pronta| :name",
        'category' => "TU SIETE A UN PASSU",
        'title' => "L'installazione hè finita",
        'account_title' => "U vostru contu",
        'account_msg' => "Verificate è accede à u vostru contu cù questa infurmazione.",
        'shop_msg' => "Info di u contu nantu à u sistema operatore cummerciale Selldone.",

    ],

    'reset2fa' => [
        'category' => "MESSAGGIU UFFICIALE DI SECURITY",
        'title' => "Richiesta disattivà u login in 2 passi",
        'message' => "Ricevete stu email perchè avemu ricevutu una dumanda di resettà l'autentificazione à dui fattori per u contu **:name** cù **:email** email.<br><br>Avemu trovu i seguenti dettagli per u vostru contu:",
        'footer' => "Se ùn avete micca dumandatu un resettore di password, ùn hè micca necessariu più azione.",
        'action' => 'Disattivà u login in dui passi',
    ],


    'build-new-shop' => [
        'subject' => "🎊 A vostra buttrega hè pronta avà!",
        'category' => "NATA NOVA STORE ONLINE IN U MONDU",
        'title' => "Felicitazioni, :name!",
        'message' => "<b>Felicitazioni, :name! A vostra nova attività in linea hè avà in diretta!</b> Semu felici di ricevevi in ​​a cumunità di Selldoners. Avete fattu u primu passu versu u successu, è simu quì per aiutà à ogni passu di a strada.<br>Avà chì a vostra tenda hè pronta, assicuremu chì site per riceve pagamenti direttamente da i vostri clienti è cumincià à cresce u vostru imperu. Sè mai avete bisognu di aiutu, simu solu un missaghju di distanza - u nostru squadra di supportu hè sempre quì per voi.<br><br><b>Important Next Steps:</b> Per principià, assicuratevi chì site tuttu stallatu per riceve pagamenti è operazioni fluide. Vi guideremu in ogni tappa per fà chì a vostra tenda funziona perfettamente.",
        'pdf-book' => "Ùn mancate micca u libru di manu attaccatu: Fate a vostra attività cum'è un ghjocu",

        'account' => [
            'title' => 'Passu 1: Crea un contu in a billetera Selldone',
            'message' => "Per principià, crea un contu in a vostra billetera Selldone. Questu hè induve i vostri tariffi seranu deduti, è hè ancu induve vi arricchiscerà per mantene a vostra tenda chì funziona bè. Se u vostru equilibriu hè sempre negativu, ùn vi preoccupate micca! A vostra tenda cuntinuerà à operare senza interruzzione.",
            'action' => 'Accedi à u wallet',
        ],

        'shop-account' => [
            'title' => 'Passu 2: cunnette u contu à a tenda',
            'message' => "Dopu, cunnette u vostru contu wallet à a vostra tenda. Vai à <b>Store> Accounting> Invoice</b>, è ligà a vostra billetera. Questu assicura chì tutti i pagamenti di i clienti sò dipositati direttamente in u vostru contu bancariu - Selldone ùn deduce micca quantità da i vostri guadagni.",
            'action' => 'Pannello di fattura di a tenda',
        ],

        'gateway' => [
            'title' => 'Passu 3: Connect Gateway di Pagamentu Online',
            'message' => "Avà, cunfigurà a vostra porta di pagamentu in linea. Andà à <b>Store> Accounting> Port</b> è cliccate nant'à <b>Add New Port</b>. Selezziunate a vostra valuta, è vi vede una lista di e porte di pagamentu dispunibili. A cunnessione di una porta hè rapida è faciule, ma se avete bisognu di aiutu, sentite liberu di verificà e guide Selldone o cuntattateci.",
            'action' => 'Aghjunghjite un portale à a tenda',
        ],

        'domain' => [
            'title' => 'Ultimu passu: cunnette un duminiu dedicatu',
            'message' => "Avà, ligà u vostru duminiu persunalizatu à a vostra tenda. Questu permette à i clienti di cumprà i vostri prudutti o servizii è fà pagamentu direttamente à voi.",
            'action' => 'Introducendu è riceve carte rigalu illimitate',
        ],
    ],


    'basket-list' => [
        'item' => "articulu",
        'count' => "Conti",
        'price' => "prezzu",
        'discount-code' => "Codice di sconto",
        'customer-club' => 'Club di i Clienti',
        'shipping' => "spedizione",
        'total' => "Totale",
        'offer' => "Offerta",
        'coupon' => "Coupon",
        'lottery' => "Premiu",
        'tax' => "Tassa",
        'tax_included' => "Inclusu in u prezzu",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metudu',
        'amount' => 'A quantità',
        'giftcard' => 'Gift card',
        'payment' => 'Pagamentu',
    ],


    'shop-subscription-email' => [
        'category' => "Actualizazione di l'abbonamentu",
        'title' => "Licenza di Store: :shop_title",
        'title-reserved' => "Riserva di licenza: :shop_title",
        'title-active' => "Licenza attiva: :shop_title",
        'title-finished' => "Licenza finita: :shop_title",
        'title-cancel' => "Annulà a licenza: :shop_title",
        'message' => "U vostru pianu di licenza di a tenda hè aghjurnatu,",
        'RESERVED' => "⚡ U vostru pianu di abbonamentu hè statu **riservatu**.",
        'ACTIVE' => "🟢 U vostru pianu di abbonamentu hè statu **attivatu**.",
        'FINISHED' => "🚧 U vostru pianu di abbonamentu hè statu **finitu**.",
        'CANCEL' => "⛔ U vostru pianu di abbonamentu hè statu **annullatu**.",
    ],

    'support' => [
        'subject' => "Centru di sustegnu|:name hà rispostu",
        'category' => "Centru di sustegnu",
        'title' => "Avete ricevutu una risposta",
        'action' => "Apertura amministratore di a tenda",
    ],

    'shop-customer-join' => [
        'subject' => "Unisci à :shop_title",
        'category' => "Festa di u novu cliente",
        'title' => "Semu felici per a vostra adesione",
        'action' => "Visita avà",
    ],

    'shop-vendor-join' => [
        'subject' => "Ingressu di u venditore| :shop_title",
        'category' => "Festa di u novu venditore",
        'title' => "Semu felici per a vostra adesione",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Aghjunghjite una nova carta",
        'title' => "Felicitazioni, avete ricevutu una carta rigalu",
        'action' => "Cumprate avà",
        'message' => "Avete ricevutu una carta rigalu in quantità di :balance :currency. Puderete cumprà da a nostra tenda cù questa carta rigalu.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centru di sustegnu| :shop",
        'category' => "sustegnu",
        'title' => "Avete ricevutu una risposta",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Cunfirmazione di l'ordine|Ordine :order_id",
        'title' => "ordine",
        'message' => "Avete fattu un ordine in a nostra tenda. Avemu ricevutu u vostru ordine è vi manderemu un altru email una volta chì u pagamentu hè cunfirmatu."
    ,

        'payments' => 'Pagamenti',
    ],

    'order-payment' => [
        'subject' => "🛍️ Cunfirmazione di pagamentu|Ordine :order_id",
        'title' => "Ordine di pagamentu",
        'message' => "U vostru pagamentu cumpletu,<br> Avemu u vostru ordine. Vi lasceremu un altru email quandu u vostru ordine spedisce.",
    

        'payments' => 'Pagamenti',
    ],

    'order-update' => [
        'subject' => "🛍️ Actualizazione di u Statu di l'Ordine|Ordine :order_id",
        'title' => "Actualizazione di u Statu di l'Ordine",
        'message' => "U vostru ordine hè statu aghjurnatu. Pudete verificà l'ultimu statutu di questu ordine in u vostru contu.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "U vostru ordine hè in a fila per u prucessu. Vi avvisemu quandu hè preparatu.",
                'OrderConfirm' => "U vostru ordine hè cunfirmatu è a preparazione hà cuminciatu.",
                'PreparingOrder' => "U vostru ordine hè in preparazione è serà speditu prestu.",
                'SentOrder' => "U vostru ordine hè statu speditu. Vi riceverete prestu.",
                'ToCustomer' => "U vostru ordine hè statu mandatu. Speremu chì vi piace!",

                'PreparingOrder-PICKUP' => "U vostru ordine hè in preparazione. Riceverete una notificazione quandu hè pronta per a raccolta.",
                'SentOrder-PICKUP' => "U vostru ordine hè pronta per a cugliera. Per piacè venite à a tenda per cullà.",
                'ToCustomer-PICKUP' => "U vostru ordine hè statu pigliatu. Speremu chì vi piace!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "U vostru ordine hè in a fila per u prucessu. Vi avvisemu quandu hè pronta.",
                'OrderConfirm' => "U vostru ordine hè cunfirmatu è a preparazione hè in corso.",
                'PreparingOrder' => "U vostru ordine hè preparatu è vi sarà mandatu prestu.",
                'ToCustomer' => "U vostru ordine virtuale hè statu mandatu à u vostru contu. Grazie!"
            ],
            'SERVICE' => [
                'CheckQueue' => "A vostra dumanda di serviziu hè in fila. Vi avvisemu quandu avemu principiatu.",
                'OrderConfirm' => "U vostru serviziu hè cunfirmatu è avemu preparatu per cumincià.",
                'PreparingOrder' => "Preparemu u vostru serviziu, è vi avvisemu quandu hè cumpletu.",
                'ToCustomer' => "U vostru serviziu hè cumpletu. Grazie per avè sceltu noi!"
            ],
            'FILE' => [
                'PreparingOrder' => "U vostru schedariu hè in preparazione è sarà prestu prestu.",
                'ToCustomer' => "U vostru schedariu hè prontu è hè statu mandatu. Pudete avà scaricà lu."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "U vostru ordine di abbonamentu hè in fila. Vi avvisemu quandu u prucessu principia.",
                'OrderConfirm' => "U vostru abbunamentu hè statu cunfirmatu è hè stallatu.",
                'PreparingOrder' => "Preparemu u vostru abbonamentu è hà da principià prestu.",
                'SentOrder' => "U vostru abbonamentu hè statu attivatu. Riceverete l'aghjurnamenti in corso.",
                'ToCustomer' => "U vostru serviziu di abbunamentu hè statu attivatu bè."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Felicitazioni :name|Novu Voucher: :title',
        'category' => "FELICITAZIONI, NEW VOUCHER",
        'message' => "Ehi :name,<br><br>Avete ricevutu un novu voucher cum'è un rigalu da noi! Pudete guadagnà ancu più vouchers introducendu Selldone à i vostri amichi è à tutti quelli chì cunnosci. Stu voucher vale **:price :currency**.<br><br>Avete fattu u primu passu, è simu quì per aiutà vi sbloccate novi funziunalità cù u vostru voucher! Per piacè accede cù **:email** è truvate u vostru voucher in u Shop **Dashboard** > **Settings** > **Licence**.<br><br>Felicitazioni!",
        'action' => "U mo dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Felicitazioni, Caru :name | Avete ricevutu un rigalu',
        'category' => "L'annunziu di riceve un rigalu",
        'title' => "Rigali per voi",
        'message' => "Salute :name, simu entusiasti di fà sapè chì avete ricevutu un rigalu speciale da Selldone! 🎉 Pudete guadagnà più rigali restendu attivu, cresce a vostra tenda, è migliurà a vostra cumpetenza nantu à Selldone. Per verificà u vostru rigalu, basta login cù :email è cercate in l'angulu superiore destra di u vostru dashboard.<br><br>Stu rigalu vale a pena **:price :currency**, è pudete facilmente dipositu in a vostra billetera in Selldone.<br><br>Aduprate u vostru rigalu per aghjurnà a licenza di a vostra tenda è sbloccate strumenti ancu più putenti per rinfurzà a vostra attività in linea!",
        'action' => "Rigali",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Novu Ordine Ricevutu| :order_id",
        'title' => "New Order",
        'message' => "Avete ricevutu un novu ordine. Per piacè andate à a pagina di trasfurmazioni di l'ordine in a vostra tenda.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'A vostra infurmazione cumpleta',
        'output-form-title' => 'L\'infurmazione nantu à l\'articulu acquistatu',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Rapportu settimanale :time',
        'title' => 'Rapportu settimanale di u rendiment di u magazinu',
        'message' => "Questu hè u rapportu settimanale di a vostra tenda da <b>:start</b> à <b>:end</b>. Stu rapportu include cunsiglii per migliurà a vostra attività, pudete ancu verificà u statutu di a vostra tenda in linea è ordini recenti. Spergu chì avete un bonu ghjornu è settimana avanti."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ U vostru rapportu di salvezza :amount in l\'ultimi trè mesi| :shop_title',
        'title' => 'Rapportu stagionale nantu à a vostra attività cummerciale, ricumpensa è risparmiu finanziariu',
        'message' => "Questu hè u vostru rapportu di stagione <b>:shop_title</b> da <b>:start</b> à <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Conti cunnessi',
        'sub-title' => 'Chì ghjè l\'ultimu statutu di i cunti di portafogli cunnessi à a mo tenda?',
        'view-wallet' => 'Vede u wallet',
        'tip-title' => 'Cunsiglii impurtanti',
        'tip' => "Configurate un portafoglio Selldone gratuitu è ligate à a vostra tenda. Ancu s'è u vostru equilibriu hè negativu, i vostri clienti ponu sempre cumprà è pagà senza prublemi. Ùn vi ne preoccupate, l'operazioni è e dati di u vostru magazinu cuntinueghjanu bè per un massimu di 1 mese, senza alcuna interruzzione.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Cunnette vi cuntu'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps stallati',
        'sub-title' => 'Lista di l\'applicazioni chì avete installatu in a vostra tenda sta settimana.',
        'tip' => "Vulete truvà più app per a vostra tenda?",
        'view-app-store' => 'Visita l\'App Store di Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'U vostru Store Bots',
        'sub-title' => 'Bots di vendita attivi in a mo tenda.',
        'tip-title' => 'Vendita di bot',
        'tip' => "Selldone vi hà furnitu bots di vendita automatica. Tuttu ciò chì duvete fà hè di andà in u pannellu Add-ons> Bots è attivà i vostri bots di a tenda. Nota chì u serviziu pertinente deve esse dispunibule in u vostru paese.",
        'view-bots' => 'Gestisce i bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Comunicazione cù i Clienti',
        'sub-title' => 'Quanti cuntatti aghju avutu cù i mo clienti sta settimana?',
        'faqs' => 'Domande Frequenti',
        'tickets' => 'Biglietti di i Clienti',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status di l\'utilizatori',
        'sub-title' => 'Attività da :start à :end',
        'users' => [
            'title' => 'Clienti',
            'subtitle' => 'Iscriviti Users',
        ],
        'views' => [
            'title' => 'Visite',
            'subtitle' => 'Quante volte avete visitatu a tenda',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utenti tornati',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Carrelli di shopping',
            'subtitle' => 'Segnala u numeru di novi carri di shopping',
        ],
        'products' => [
            'title' => 'Panoramica di i prudutti',
            'subtitle' => 'Status di i prudutti in a tenda per tipu',
            'value_name' => 'I prudutti'
        ],
        'products_count' => 'Tipi di prudutti',
        'views_count' => 'Vede u conte',
        'sell_count' => 'Conte di vendita',
        'send_count' => 'Conte di spedizione',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel per i principali venditori di Drop Shipping Selldone.',
        'total_fulfillments' => 'Total Ordini Ricevuti',
        'ds_count' => 'Ordini ricevuti',
        'statistics_title' => 'Segnala ordini ricevuti',
        'ds_cancels' => 'Cancella da u venditore di l\'interfaccia',
        'ds_rejects' => 'Cancella da voi',
        'tip' => "Sò un venditore maiò di merchenzie? Avete un magazzinu, una fabbrica o un distributore di prudutti? Pudete offre i vostri prudutti à altri venditori in u serviziu di Selldone Drop Shipping per vende u vostru pruduttu à grande scala. Mandateci un email à support@selldone.com per guidà vi.",
        'view-drop-shipping-panel' => 'Accedi à u pannellu grossista',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Tassi di scambiu',
        'sub-title' => 'Lista di l\'ultimi tassi di cunversione di valuta in a vostra tenda.',
        'from' => 'Valuta fonte',
        'to' => 'Valuta di destinazione',
        'rate' => 'Rate di cunversione',
        'view-exchange-panel' => 'Gestisce i tassi di scambiu',
    

        'vew-exchange-panel' => 'pannellu di gestione di u scambiu',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Cuntratti esperti',
        'sub-title' => 'Chì prufessiunali travaglianu nantu à a mo tenda?',
        'cost' => 'A quantità di u cuntrattu',
        'duration' => 'Durata',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data di annullà',
        'end_at' => 'Data di consegna',
        'tip' => 'Pudete impiegà i migliori specialisti in Selldone per sviluppà a vostra attività.',
        'view-experts' => 'Cliccate per cumincià.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Segnala i gateway di pagamentu attivi nantu à a buttrega :shop.',
        'tip-title' => 'Cunsiglii impurtanti',
        'tip' => "Andate à a pagina di gestione di u portale in a vostra tenda è aghjunghje almenu un portu in pochi minuti. I vostri clienti piace à pagà rapidamente è in modu sicuru attraversu portali in linea.",
        'view-shop-gateways' => 'Accedi à a mo gestione di u portale di a tenda.',
        'view-gateways' => 'Vede più gateway',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Ordini',
        'sub-title' => 'Lista di ordini chì aghju ricevutu sta settimana.',
        'total_baskets' => 'Ordini totali',
        'total_posBaskets' => 'Ordini totali di Cash',
        'pos-title' => 'Box Store POS',
        'chart-label' => 'Ordini cumpletati (questi ordini ùn sò micca necessariamente pagati!)',
        'tip-title' => 'Duvete pruvà di più ...',
        'tip' => "Nisun successu simplice.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centru di trasfurmazioni',
        'sub-title' => 'Quantu ordine avemu processatu in a tenda sta settimana?',
        'tip-title' => 'Ùn avete micca una vendita!',
        'tip' => "Sfurtunatamente ùn avete micca vendita sta settimana. Avete bisognu di più à a vostra tenda. Pudete aghjunghje più prudutti, sceglie l'imaghjini megliu o scrivite descrizzioni megliu per i vostri prudutti. Cunsiderate un travagliu full-time per a vostra attività. Se fate bè è ùn avete micca frustratu, avete successu.",
        'view-process-center' => 'Vede u centru di prucessu',
        'return' => [
            'title' => 'Ordine restituitu',
            'subtitle' => 'Segnala l\'ordini tornati.',
            'tip-title' => 'Sapete chì...',
            'tip' => "Pudete creà tanti cash registers quantu avete bisognu cù Selldone POS! Ch'ella sia a vostra tableta, mobile, o laptop, pudete trasfurmà qualsiasi dispositivu in u puntu di vendita di a vostra tenda. Hè simplice, rapidu à stallà, è cumplettamente preparatu per u vostru servitore. Cumincià à aduprà oghje!",
            'view-pos' => 'Accedi à My Online Store Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessioni',
        'sub-title' => 'Quante volte aghju visitatu a mo tenda?',
        'countries-title' => 'Quali paesi sò stati i più visitati?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Vulete fà soldi senza spende un dolar?',
        'message' => "Salute :name, hè ora di cumincià à guadagnà cù Selldone! Andà à Dashboard> More> Monetization> Get Your Referral Link. Condividi u ligame cù i vostri amichi, è guadagnà carte rigalu è una parte di i so pagamenti. A più bona parte ? Sia voi è u vostru amicu uttene una carta rigalu!",
        'action' => 'Vede u mo ligame di introduzione',
        'mail-clip' => "<b style='color: #C2185B'>Impurtante:</b> Se utilizate servizii di e-mail cum'è Gmail chì limitanu a durata di l'email, truvate l'opzione seguente à a fine di l'email per vede u rapportu cumpletu è cliccate nantu à questu:",

        'no-coin-reward' => "<b style='color: #C2185B'>Scusate:</b> A vostra attività ùn hà micca scuntratu u requisitu per uttene una ricumpensa SEL Coins gratuiti. Pruvate più è vende più nantu à a vostra buttrega per a prossima stagione.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Felicitazioni:</b> Un bellu travagliu! Basatu nantu à a vostra prestazione eccezziunale, avemu creditu :amount SEL Coins à u vostru contu cum'è ricumpensa.",

        'need-buy-license' => "<b>Livellu a vostra attività: </b> Sembra chì ùn avete micca registratu alcun pianu di abbonamentu per u vostru situ web! Aghjurnate avà per sbloccare più funzioni per solu :amount à u mese se pagatu annu.",
        'not-afford-message' => "Se ùn pudete micca pagà o avete qualchì prublema cù u pagamentu, sentite liberu di diteci via support@selldone.com.",
        'add-domain' => "<b>Perchè ùn avete micca un duminiu persunalizatu per a vostra attività?</b><br> Aghjunghjite un duminiu à u vostru situ web avà; hè gratis !"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone hè un<del> pruduttu</del> <span style = 'color: forestgreen'>cumunità</span> .<br> Siate un Selldoner prufessiunale!",
        'message' => "Segui e pagine ufficiali di u Selldone in Twitter, LinkedIn è e rete suciale. Mandateci qualsiasi cumenti, richieste o critiche o participà à discussioni nantu à u Selldone. Facemu ancu parte di a cumunità di Selldone chì <b>fate</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Novi Ordini di Avocado Ricevuti|:shop_title :time',
        'title' => "Rapportu di rendiment per l'ultime 24 ore",
        'message' => "I vostri clienti aspettanu chì i vostri ordini per esse rivisiuti è prezzu. Rispondi à e dumande di i vostri clienti u più prestu pussibule per ottene più vendite.",
        'card_title' => "Ordini in a fila",
        'card_subtitle' => "Dapoi :date",

        'card_payed' => "Ordini pagati"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Rispondi à u vostru postu in :community_title',
        'title' => ":name, è :count altri anu cummentatu nantu à i vostri posti.",
        'message' => "Ciao :name, i vostri posti attiranu l'attenzione! Avete ricevutu cumenti in a nostra cumunità. Entra in u vostru contu per unisce à a discussione è vede ciò chì tutti dicenu.",
        'title-simple' => ":name hà cummentatu nantu à i vostri posti.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Rispondi à u vostru tema :topic_title',
        'title' => ":name, è :count altri risposti nantu à u vostru tema.",
        'message' => "Ciao :name, u vostru tema attira l'attenzione! Avete ricevutu risposte in a nostra cumunità. Entra in u vostru contu per unisce à a discussione è vede ciò chì tutti dicenu.",
        'title-simple' => ":name hà rispostu nantu à u vostru tema.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Novu login :name',
        'category' => 'Notificazioni di sicurità',
        'title' => "Accedi à u contu",
        'message' => "Caru :name, un login à u vostru contu Selldone hè statu rilevatu.",   // Login in selldone (seller)
        'message-shop' => "Caru :name, site cunnessu à :shop_title .",  // Login in shop (buyer)

        'footer' => "Se ùn site micca cunnessu, cambiate a vostra password.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Ritirata",
        'deposit' => "Depositu",

        'withdraw_subject' => "Ritira da u contu :account",
        'deposit_subject' => "Depositu à u contu :account",

        'message' => "U trasferimentu di soldi hè statu fattu cù e seguenti specificazioni.",

        'type' => "Tipu di transazzione",

        'from' => "Contu fonte",
        'to' => "Destination account",

        'desc' => "Descrizzione di a transazzione",
        'action' => "Vede a transazzione",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Impurtante! A violazione di e regule| :shop",
        'category' => "Informazione critica",
        'title' => "A vostra buttrega hè stata penalizzata",
        'action' => "Apertura dashboard di a tenda",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter vi hà invitatu à Selldone",
        'title' => ":name vi hà mandatu :amount per aiutà à lancià a vostra nova tenda in linea è monetizà!",
        'message' => "Salute **:receiver_name**,<br><br>Benvenutu à Selldone! In Selldone, pudete facilmente creà u vostru situ di e-commerce, blog, comunità in linea, è ancu stabilisce un sistema POS in linea per a vendita in persona, tuttu in pochi minuti. Hè u sistema operatore cummerciale in linea cumpletu cuncepitu per fà a vostra attività megliu, più veloce è più faciule da gestisce.<br><br>Iscriviti da <b>:date</b> è riceve un voucher :amount per inizià!",
        'accept' => "Accetta l'invitu",
        'owner' => "Pruprietariu di",
        'join-date' => "Dapoi Selldone",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Link di ricuperazione| :shop",
        'category' => "Sicurezza di a tenda",
        'title' => "Ligame di ricuperazione di u magazinu di <b>:shop_name</b> .",
        'message' => "Questu email hè statu mandatu à voi perchè avete dumandatu à restaurà a vostra tenda. Cliccà nant'à u ligame sottu vi ritruvà a vostra buttrega è tutti i dati chì appartene à ellu.",
        'action' => "Cunfirmà Shop Recovery",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Quantu soldi hà risparmiatu Selldone per a vostra attività?',
        'sub-title' => 'Da data :start à :end',
        'infrastructure' => [
            'title' => 'Infrastruttura',
            'subtitle' => 'Servitori, CDN, Storage, è altri servizii cloud',
        ],
        'experts' => [
            'title' => 'Esperti è Staff',
            'subtitle' => 'Sviluppatori, mantenimentu è supportu',
        ],
        'total_save' => 'Soldi salvati totali'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'A vostra prestazione',
        'sub-title' => 'Panoramica di l\'affari da :start to :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utenti tornati',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Carrelli di shopping',
            'subtitle' => 'Segnala u numeru di novi carri di shopping',

        ],
        'products' => [
            'title' => 'Panoramica di i prudutti',
            'subtitle' => 'Status di i prudutti in a tenda per tipu',
            'value_name' => 'I prudutti'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Totale viste di pagina di u situ web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Avete ricevutu un novu ordine. Per piacè andate à a pagina di trattamentu di l'ordine in u vostru pannellu di venditore.",
        'subject' => "🛍️ Novu Ordine Ricevutu| :order_id",
        'your_revenue' => "U vostru Revenue",
    ],
    'vendor-invite' => [
        'title' => 'Invitu di u venditore',
        'message' => "Avete ricevutu un invitu à diventà venditore di :shop_name. Pudete accettà o ricusà clicchendu nantu à i seguenti buttoni.",
        'subject' => ":shop_name | Avete ricevutu un invitu à diventà u nostru venditore",
        'accept' => "Accetta è diventa un venditore",
        'reject' => "Rifiuta",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitu à unisce à a nostra squadra',
        'message' => "Avete statu invitatu à unisce à :vendor_name à :shop_name. Pudete accettà o ricusà stu invitu cù i buttoni sottu.",
        'subject' => "Invitu à unisce à :vendor_name|Diventate un membru di a squadra",
        'accept' => "Accetta è unisce à a squadra",
        'reject' => "Rifiuta",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "U vostru codice di login per :shop",
        'header-message' => "Vi mandemu stu email perchè avete dumandatu un codice di login per a buttrega. Per piacè truvate a vostra Password One-Time (OTP) quì sottu:",
        'footer-message' => "Stu codice serà validu per 10 minuti. Se ùn avete micca dumandatu stu codice di login, ignurate stu email."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verificate u vostru email| :shop",
        'title' => 'Verificazione di e-mail',
        'header-message' => "Salute :name,<br>Per piacè cunfirmà chì **:email** hè u vostru indirizzu email clicchendu u buttone sottu o usendu u ligame sottu in 48 ore.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Aghjurnamenti di u produttu| :shop",
        'title' => "Actualizazione nantu à u Statu di u Produttu - Ultime 24 Ore",
        'message' => "Spergu chì stu missaghju vi trova bè. Questa hè una breve aghjurnazione per informàvi di u statutu di i vostri prudutti nantu à a nostra piattaforma in l'ultime 24 ore.\nDuranti stu periodu, ci sò stati cambiamenti in u statutu di certi prudutti. Questi cambiamenti pò esse dovutu à compra, aghjurnamenti di stock, o altri avvenimenti rilativi.\nPer infurmazione più dettagliata nantu à ogni pruduttu, accede à u vostru contu è verificate a sezione \"Status di u produttu\".",
        'action' => "Open Vendor Panel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Ordini grossi ricevuti| :shop | :date",
        'title' => "Notificazione di ordini in massa",
        'message' => "Avete ricevutu un batch of bulk orders. Per piacè visitate a pagina di trasfurmazioni di l'ordine in u vostru pannellu per più dettagli. Pudete ancu scaricà a lista di ordini via u ligame sicuru furnitu, validu per 7 ghjorni.<br><br>\n        <b>IMPORTANTE:</b> Stu ligame hè validu per 7 ghjorni.<br>\n        Stu ligame hè dinamicu, cusì ogni volta chì fate un clic, riceverete l'ordine più aghjurnatu per questa data specifica. <b>Significa chì u statutu di pagamentu di l'ordine cambia in rifiutatu, ùn vi vede più quellu ordine in u CSV scaricatu, o se l'ordine hè pagatu, apparirà in a lista.</b><br><br>\n        <ul>\n            <li>U CSV cuntene ordini pagati cù una data riservata in u :date.</li>\n            <li>A data riservata hè a data quandu l'utilizatori clicchendu checkout in a pagina di ordine.</li>\n        </ul>\n        <b>Per prevene ordini duplicati, verificate sempre l'Ordine ID prima di mandà.</b>",
        'action' => "Scaricate a Lista di ordini",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Certi articuli in u vostru ordine ùn sò micca stati accettati è ùn ponu micca esse mandati. A quantità per questi articuli serà rimbursatu à a vostra carta in pocu tempu."
    ]

];

