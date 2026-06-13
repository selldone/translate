<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Questo messaggio dà il benvenuto a un nuovo acquirente nel negozio.',
        ShopMailTemplateCodes::OrderCheckout => 'Questa notifica viene inviata quando un acquirente conferma un ordine.',
        ShopMailTemplateCodes::OrderPayment => 'Questa notifica conferma l\'avvenuto pagamento effettuato da un cliente.',
        ShopMailTemplateCodes::OrderUpdate => 'Questo messaggio viene inviato per aggiornare l\'acquirente sullo stato del suo ordine.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Questo messaggio viene inviato a un venditore per informarlo di un ordine confermato.',
        ShopMailTemplateCodes::PosCheckout => 'Questa notifica viene inviata per confermare un ordine punto vendita per un acquirente.',
        ShopMailTemplateCodes::PosPayment => 'Questa notifica conferma un pagamento presso il punto vendita effettuato da un acquirente.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Questo messaggio avvisa il venditore di un acquisto effettuato presso il suo punto vendita.',
        ShopMailTemplateCodes::ShopContact => 'Questa notifica viene inviata quando è stato inviato un modulo di contatto.',
        ShopMailTemplateCodes::ShopGiftCard => 'Questa notifica informa un utente che ha ricevuto una carta regalo.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Questo messaggio dà il benvenuto a un nuovo venditore nel negozio.',
        ShopMailTemplateCodes::ShopVendorInvite => "Questo messaggio viene inviato per invitare un venditore a unirsi al tuo marketplace.",
        ShopMailTemplateCodes::ShopVendorOrder => "Questo messaggio viene inviato al fornitore quando un ordine viene ricevuto nello stato Pagato o Contrassegno (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Inviato quotidianamente per aggiornare i fornitori sullo stato dei loro prodotti.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Questo messaggio viene inviato per invitare un venditore a unirsi al tuo marketplace.",

        ShopMailTemplateCodes::UserLogin => "Notificare all'utente i dettagli di accesso, inclusi indirizzo IP, data e dispositivo, per motivi di sicurezza.",
        ShopMailTemplateCodes::LoginCode => "Invia un codice password monouso per consentire agli utenti di accedere al negozio.",

        ShopMailTemplateCodes::EmailVerifyLink => "Invia un collegamento per verificare l'indirizzo email dell'utente. Questa email viene inviata quando un utente si registra tramite SMS e inserisce la propria email. Non viene inviato quando un utente si registra direttamente con login social o email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Invia un elenco degli ordini ricevuti e pagati in blocco per un giorno specifico."


    ],


    'global' => [
        'greetings' => 'Ciao, :name!',
        'end-statement' => 'Team di supporto',

        'receiver_name' => 'Ciao :user_name',
        'footer-help' => "Hai bisogno di aiuto? Chiedi a [support@selldone.com](mailto:support@selldone.com) o visita il nostro [centro assistenza](https://selldone.com/community).",
        'selldone-team' => 'La squadra Selldone',
        'footer-shop' => "Se hai bisogno di aiuto per qualsiasi cosa, non esitare a inviarci un'e-mail: :shop_mail",
        'accept' => "Accettare",
        'reject' => "Rifiutare",
        'verify' => "verificare",
        'title' => "Titolo",
        'value' => "Valore",
        'description' => "Descrizione",
        'shop' => "Negozio",
        'shop-info' => "Memorizza informazioni",
        'user' => "utente",
        'user-info' => "Informazioni sull'account",
        'license' => "Licenza",
        'status' => "Stato",
        'start' => "Inizio",
        'end' => "Fine",
        'renewal' => "Rinnovo",
        'view' => "Visualizzazione",

        'balance' => "Bilancia",
        'card_number' => "Numero di carta",
        'cvv' => "cv",
        'expire_date' => "Data di scadenza",

        'Dashboard' => "Pannello di controllo",
        'order' => "ordine",
        'view_order' => "Visualizza ordine",
        'pay_now' => "Pay now",

        'official_selldone' => "VENDITA UFFICIALE",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Moneta",
        'free-balance' => "Saldo libero",
        'locked-balance' => "Equilibrio bloccato",
        'bot' => "Bot",
        'requests' => "Richieste",
        'baskets' => 'Carrelli',
        'physical' => "Fisico",
        'virtual' => "Virtuale",
        'file' => "File",
        'service' => "Servizio",
        'fulfillment' => "Compimento",
        'open' => "Aprire",
        'reserved' => "Riservato",
        'canceled' => "Annullato",
        'payed' => "Pagato",
        'cod' => "COD",
        'orders-count' => 'Ordini',
        'payments-count' => 'Pagamenti',
        'confirms-count' => 'Conferma',
        'sends-count' => 'Invia',
        'delivers-count' => 'Consegna',
        'count' => 'Contare',
        'transactions-count' => 'Le transazioni contano',
        'success-transactions' => 'Transazioni di successo',
        'total-amount' => 'Importo totale',
        'amount' => 'Importo',
        'wage' => 'Salario',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Abitare',
        'CheckQueue' => 'Controlla la coda',
        'OrderConfirm' => 'Conferma dell\'ordine',
        'PreparingOrder' => 'Preparazione dell\'ordine',
        'SentOrder' => 'Ordine inviato',
        'ToCustomer' => 'Consegnato al cliente',
        'Pending' => 'In attesa di',
        'Accepted' => 'Accettato',
        'Rejected' => 'Respinto',
        'pc' => 'PC',
        'tablet' => 'Tavoletta',
        'phone' => 'Telefono',
        'total' => 'Totale',
        'view-detail' => 'Vedi dettagli',
        'empty' => 'Vuoto',
        'dropshipping' => 'Scaricare la consegna',
        'reply' => 'rispondere',
        'reactions' => 'Reazioni',
        'Comments' => 'Commenti',
        'last-comment' => 'Ultimo commento',
        'response-to' => 'Risposta a',
        'posts' => 'Messaggi',
        'post' => 'Inviare',

        'name' => 'Nome',
        'email' => 'E-mail',
        'type' => 'genere',
        'device' => 'Dispositivo',
        'platform' => 'piattaforma',
        'browser' => 'Browser',
        'time' => 'Tempo',
        'Wallet' => 'Portafoglio',
        'date' => 'Data',

        'account' => 'Account',
        'transaction' => 'Transazione',
        'fee' => 'Tassa',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Fattura',
        'category' => 'Categoria',
        'password' => 'Parola d\'ordine',
        'verify-login' => "Verifica e accedi",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Iper',
        'buy-now' => "Acquista ora",
        'add-domain' => "Add Domain",
        'views' => 'Visualizzazioni',


        'country' => 'Paese',
        'address' => 'indirizzo',
        'postal' => 'codice postale',
        'building_no' => 'Costruzione #',
        'building_unit' => 'Unità #',
        'message' => 'Messaggio',


        'customer' => 'Cliente',
        'cart-items' => 'Articoli del carrello',
        'payment' => 'Pagamento',
        'receiver' => 'Ricevitore',
        'virtual-items' => 'Oggetti virtuali',
        'no-payment' => 'Nessun pagamento!',

        'enable' => 'Abilitare',
        'access' => 'Accesso',
        'bank' => 'Informazioni bancarie',

        'vendor' => 'Venditore',

        'view_content' => "Visualizza il contenuto completo",
        'files' => 'File',
        'download' => 'Scarica',
        'file_name' => 'Nome del file',
        'file_size' => 'Misurare',

        'subscription' => 'Sottoscrizione',
        'products' => 'Prodotti',
        'vendor_products' => 'Prodotti del fornitore',

        'pickup' => 'Raccolta',

        'minutes' => 'Minuti',
        'hours' => 'Ore',

        'refund' => 'Rimborso',
        'recipient_address' => 'Indirizzo del destinatario',
        'signature' => 'Firma',
        'blockchain' => 'Blockchain',
        'details' => 'Dettagli',


    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Sistema operativo Selldone Business",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Rapporto sulla performance, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Resoconto Stagionale, Selldone'
        ],
        'Onboarding' => [
            'id' => 'Ciao',
            'name' => 'Approva, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Supporto :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verifica, Selldone'
        ],
        'Welcome' => [
            'id' => 'Ciao',
            'name' => 'Comunità, Selldone'
        ],
        'NewShop' => [
            'id' => 'mercanti',
            'name' => 'Approva, Selldone'
        ],
        'Approve' => [
            'id' => 'approvare',
            'name' => 'Approva, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gestione Ordini :name'
        ],

        'Recovery' => [
            'id' => 'recupero',
            'name' => 'Squadra di recupero Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'In attesa ⌛',
        'PAYED' => 'Pagato ✅',
        'CANCELED' => 'Annullato ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Amministratore',
            'OFFICER' => 'Ufficiale e Supervisore',
            'AUDITING' => 'Responsabile revisione',
            'EMPLOYEE' => 'Dipendente',
            'PRODUCT' => 'Responsabile prodotti',
            'CONTENT' => 'Gestore di contenuti',
            'MARKETING' => 'Marketing Manager',
            'VIEWER' => 'Spettatore',

        ],
        'subject' => ":inviter ti ha invitato come :level| :shop",
        'category' => "Invito del personale",
        'title' => "Sei stato invitato a <b>:shop_name</b> come <b>:level</b> .",
        'message' => "Hai ricevuto un invito a collaborare con il team <b>:shop_title</b> nel mondo degli affari. Hai la possibilità di accettare o rifiutare questa offerta. Se scegli di accettare, accedi al servizio Selldone per confermare la tua decisione. Alla conferma avrai accesso alla sezione di gestione del negozio.",

    ],

    'welcome-email' => [
        'subject' => "👋 Benvenuto :name, iniziamo con Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Benvenuti in Selldone",
        'message' => "Grazie per aver scelto Selldone! Ora fai parte di una vivace comunità che mette in contatto venditori globali con clienti, aziende locali con imprese e individui con aziende. Tutti i nostri strumenti Master e Pro sono disponibili **gratuitamente** e **illimitati**. Siamo qui per supportarti e aprire le porte al tuo successo.",

        'index' => "Passo :step.",

        'step-domain' => [
            'title' => 'Aggiungi il tuo dominio personalizzato',
            'message' => "Per iniziare, aggiungi gratuitamente il tuo dominio personalizzato nella dashboard del negozio in Impostazioni > Impostazioni domini.",
            'action' => 'Gestisci i miei domini',
        ],
        'step-landing' => [
            'title' => 'Personalizza la tua home page',
            'message' => "Personalizza la tua home page andando su Dashboard > Pagine. Scegli una pagina di destinazione o creane una nuova. È facile e intuitivo e puoi iniziare a lavorarci subito.",
            'action' => 'Personalizza la mia pagina di destinazione',
        ],
        'step-payment' => [
            'title' => 'Imposta metodi di pagamento',
            'message' => "Inizia ad accettare pagamenti direttamente sul tuo conto bancario. Per connettere i tuoi fornitori di servizi di pagamento come Stripe, PayPal e altri, vai su Dashboard > Contabilità > Gateway.",
            'action' => 'Aggiungi metodi di pagamento',
        ],
        'step-products' => [
            'title' => 'Aggiungi i tuoi prodotti',
            'message' => "Aggiungi facilmente prodotti e categorie nella Dashboard > Prodotti. È proprio come gestire file e cartelle sul tuo PC: completamente pronto per il trascinamento della selezione. Puoi anche importare prodotti in blocco utilizzando Excel. È disponibile un modello di esempio per aiutarti a iniziare.",
            'action' => 'Gestisci i miei prodotti',
        ],
        'step-shipping' => [
            'title' => 'Imposta i metodi di spedizione',
            'message' => "Per addebitare ai clienti la spedizione, definisci i metodi di spedizione nella Dashboard > Logistica > Spedizione. Puoi impostare prezzi e supporto diversi per varie località. Non dimenticare di impostare l'origine del magazzino in Dashboard > Logistica > Magazzino.",
            'action' => 'Gestisci i metodi di spedizione',
        ],
    ],


    'charge-account' => [
        'category' => 'Portafoglio > Conto > Addebito',
        'title' => "Carica di successo",
        'message' => "Sul tuo conto <b>:account_number</b> è stato addebitato correttamente <b>:amount</b>.",
        'account' => 'Account',
        'charge' => 'Caricare',
        'balance' => 'Bilancia',
        'footer' => "Rendi il business facile, realizzabile e accessibile a chiunque in tutto il mondo."
    ],

    'verify-email' => [
        'subject' => "🙌 Completa la tua iscrizione a Selldone! Verifica collegamento.",
        'category' => "SEI A UN PASSO LONTANO",
        'title' => "Verifica il tuo indirizzo email",
        'message' => "Ciao :name,<br><br>Grazie per aver scelto Selldone!<br><br>Per confermare che <b>:email</b> è il tuo indirizzo email corretto, fai clic sul pulsante sottostante o utilizza il collegamento fornito. Hai 48 ore per completare questa verifica.",
        'footer' => "Se hai problemi a fare clic sul pulsante Verifica, copia e incolla l'URL riportato di seguito nel tuo browser web: :activation_url",
        'next-step' => "Successivamente, ti invieremo alcuni materiali utili e una guida passo passo per semplificarti l'aggiunta del tuo dominio personalizzato, l'impostazione dei pagamenti, l'aggiunta di prodotti e l'ottenimento del tuo primo ordine.",

    ],
    'verify-email-code' => [
        'subject' => "Codice di verifica per :name",
        'category' => "SECURITY",
        'title' => "Codice di verifica e-mail",
        'message' => "Ciao :name,<br><br>Per confermare che <b>:email</b> è il tuo indirizzo email corretto, inserisci il seguente codice entro i prossimi <b>10 minuti</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Il tuo negozio è pronto| :name",
        'category' => "SEI A UN PASSO LONTANO",
        'title' => "Installazione completata",
        'account_title' => "Il tuo account",
        'account_msg' => "Verifica e accedi al tuo account con queste informazioni.",
        'shop_msg' => "Informazioni sull'account sul sistema operativo aziendale Selldone.",

    ],

    'reset2fa' => [
        'category' => "MESSAGGIO UFFICIALE DELLA SICUREZZA",
        'title' => "Richiedi disabilita l'accesso in 2 passaggi",
        'message' => "Hai ricevuto questa email perché abbiamo ricevuto una richiesta di reimpostazione dell'autenticazione a due fattori per l'account **:name** con l'email **:email**.<br><br>Abbiamo trovato i seguenti dettagli per il tuo account:",
        'footer' => "Se non hai richiesto la reimpostazione della password, non sono necessarie ulteriori azioni.",
        'action' => 'Disabilita l\'accesso in due passaggi',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Il tuo negozio è pronto ora!",
        'category' => "NASCE NUOVO NEGOZIO ONLINE NEL MONDO",
        'title' => "Congratulazioni, :name!",
        'message' => "<b>Congratulazioni, :name! Il tuo nuovo business online è ora attivo!</b> Siamo entusiasti di darti il ​​benvenuto nella community di Selldoners. Hai fatto il primo passo verso il successo e noi siamo qui per aiutarti in ogni fase del percorso.<br>Ora che il tuo negozio è pronto, assicuriamoci che tu sia pronto per ricevere pagamenti direttamente dai tuoi clienti e iniziare a far crescere il tuo impero. Se mai avessi bisogno di aiuto, siamo solo a un messaggio di distanza: il nostro team di supporto è sempre qui per te.<br><br><b>Passaggi successivi importanti:</b> Per iniziare, assicurati di essere pronto per ricevere pagamenti e operazioni senza intoppi. Ti guideremo attraverso ogni fase per far funzionare il tuo negozio senza problemi.",
        'pdf-book' => "Da non perdere il manuale allegato: Fai il tuo business come un gioco",

        'account' => [
            'title' => 'Passaggio 1: crea un account nel portafoglio Selldone',
            'message' => "Per iniziare, crea un account nel tuo portafoglio Selldone. Qui è dove verranno detratte le tue commissioni ed è anche il luogo in cui ricaricherai per mantenere il tuo negozio senza intoppi. Se il tuo saldo dovesse mai diventare negativo, non preoccuparti! Il tuo negozio continuerà a funzionare senza interruzioni.",
            'action' => 'Accedi al portafoglio',
        ],

        'shop-account' => [
            'title' => 'Passaggio 2: collega l\'account al negozio',
            'message' => "Successivamente, collega il tuo account portafoglio al tuo negozio. Vai su <b>Store > Contabilità > Fattura</b> e collega il tuo portafoglio. Ciò garantisce che tutti i pagamenti dei clienti vengano depositati direttamente sul tuo conto bancario: Selldone non detrae alcun importo dai tuoi guadagni.",
            'action' => 'Pannello Fattura Negozio',
        ],

        'gateway' => [
            'title' => 'Passaggio 3: collegare il gateway di pagamento online',
            'message' => "Ora configuriamo il tuo gateway di pagamento online. Andare su <b>Store > Contabilità > Porta</b> e fare clic su <b>Aggiungi nuova porta</b>. Seleziona la tua valuta e vedrai un elenco di gateway di pagamento disponibili. Connettere un gateway è semplice e veloce, ma se hai bisogno di aiuto, non esitare a consultare le guide Selldone o contattarci.",
            'action' => 'Aggiungi un portale al negozio',
        ],

        'domain' => [
            'title' => 'Ultimo passaggio: collegare un dominio dedicato',
            'message' => "Ora collega il tuo dominio personalizzato al tuo negozio. Ciò consente ai clienti di acquistare i tuoi prodotti o servizi ed effettuare pagamenti direttamente a te.",
            'action' => 'Presentazione e ricezione di carte regalo illimitate',
        ],
    ],


    'basket-list' => [
        'item' => "elemento",
        'count' => "Contare",
        'price' => "prezzo",
        'discount-code' => "Codice di sconto",
        'customer-club' => 'Club dei clienti',
        'shipping' => "Spedizione",
        'total' => "Totale",
        'offer' => "Offerta",
        'coupon' => "Buono",
        'lottery' => "Premio",
        'tax' => "Imposta",
        'tax_included' => "Incluso nel prezzo",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metodo',
        'amount' => 'Importo',
        'giftcard' => 'Gift card',
        'payment' => 'Pagamento',
    ],


    'shop-subscription-email' => [
        'category' => "Aggiornamento dell'abbonamento",
        'title' => "Licenza negozio: :shop_title",
        'title-reserved' => "licenza di riserva: :shop_title",
        'title-active' => "Licenza attiva: :shop_title",
        'title-finished' => "Licenza finita: :shop_title",
        'title-cancel' => "Annulla licenza: :shop_title",
        'message' => "Il tuo piano di licenza del negozio aggiornato,",
        'RESERVED' => "⚡ Il tuo piano di abbonamento è stato **riservato**.",
        'ACTIVE' => "🟢 Il tuo piano di abbonamento è stato **attivato**.",
        'FINISHED' => "🚧 Il tuo piano di abbonamento è stato **finito**.",
        'CANCEL' => "⛔ Il tuo piano di abbonamento è stato **annullato**.",
    ],

    'support' => [
        'subject' => "Centro di supporto|:name ha risposto",
        'category' => "Centro di supporto",
        'title' => "Hai ricevuto una risposta",
        'action' => "Apri l'amministratore del negozio",
    ],

    'shop-customer-join' => [
        'subject' => "Unisciti a :shop_title",
        'category' => "Festa del nuovo cliente",
        'title' => "Siamo felici per la tua iscrizione",
        'action' => "Visita ora",
    ],

    'shop-vendor-join' => [
        'subject' => "Inserimento del fornitore | :shop_title",
        'category' => "Celebrazione del nuovo fornitore",
        'title' => "Siamo felici per la tua iscrizione",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Buono regalo :shop_title",
        'category' => "Aggiungi nuova carta",
        'title' => "Congratulazioni, hai ricevuto una carta regalo",
        'action' => "Acquistare ora",
        'message' => "Hai ricevuto una carta regalo dell'importo di :balance :currency. Potrai acquistare dal nostro negozio con questa carta regalo.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centro di supporto| :shop",
        'category' => "supporto",
        'title' => "Hai ricevuto una risposta",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Conferma d'ordine|Ordina :order_id",
        'title' => "ordine",
        'message' => "Hai effettuato un ordine presso il nostro negozio. Abbiamo ricevuto il tuo ordine e ti invieremo un'altra email una volta confermato il pagamento."
    ],

    'order-payment' => [
        'subject' => "🛍️ Conferma del pagamento|Ordina :order_id",
        'title' => "Ordine di pagamento",
        'message' => "Il tuo pagamento è completato,<br> Abbiamo ricevuto il tuo ordine. A breve riceverai aggiornamenti sul suo stato.",
    ],

    'order-update' => [
        'subject' => "🛍️ Aggiornamento sullo stato dell'ordine|Ordina :order_id",
        'title' => "Aggiornamento sullo stato dell'ordine",
        'message' => "Il tuo ordine è stato aggiornato. Puoi controllare lo stato più recente di questo ordine nel tuo account.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Il tuo ordine è in coda per l'elaborazione. Ti avviseremo quando sarà in preparazione.",
                'OrderConfirm' => "Il tuo ordine è confermato e la preparazione è iniziata.",
                'PreparingOrder' => "Il tuo ordine è in preparazione e verrà spedito a breve.",
                'SentOrder' => "Il tuo ordine è stato spedito. Lo riceverai a breve.",
                'ToCustomer' => "Il tuo ordine è stato consegnato Ci auguriamo che vi piaccia!",

                'PreparingOrder-PICKUP' => "Il tuo ordine è in preparazione. Riceverai una notifica quando sarà pronto per il ritiro.",
                'SentOrder-PICKUP' => "Il tuo ordine è pronto per il ritiro. Ti invitiamo a venire in negozio a ritirarlo.",
                'ToCustomer-PICKUP' => "Il tuo ordine è stato ritirato. Ci auguriamo che vi piaccia!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Il tuo ordine è in coda per l'elaborazione. Ti avviseremo quando sarà pronto.",
                'OrderConfirm' => "Il tuo ordine è confermato e la preparazione è in corso.",
                'PreparingOrder' => "Il tuo ordine è in preparazione e ti verrà inviato a breve.",
                'ToCustomer' => "Il tuo ordine virtuale è stato consegnato al tuo account. Grazie!"
            ],
            'SERVICE' => [
                'CheckQueue' => "La tua richiesta di servizio è in coda. Ti avviseremo quando inizieremo.",
                'OrderConfirm' => "Il tuo servizio è confermato e ci stiamo preparando a iniziare.",
                'PreparingOrder' => "Stiamo preparando il tuo servizio e ti avviseremo una volta completato.",
                'ToCustomer' => "Il tuo servizio è completo. Grazie per averci scelto!"
            ],
            'FILE' => [
                'PreparingOrder' => "Il tuo file è in preparazione e sarà presto disponibile.",
                'ToCustomer' => "Il tuo file è pronto ed è stato consegnato. Ora puoi scaricarlo."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Il tuo ordine di abbonamento è in coda. Ti avviseremo quando avrà inizio l'elaborazione.",
                'OrderConfirm' => "Il tuo abbonamento è stato confermato ed è in fase di configurazione.",
                'PreparingOrder' => "Stiamo preparando il tuo abbonamento e inizierà presto.",
                'SentOrder' => "Il tuo abbonamento è stato attivato. Riceverai aggiornamenti continui.",
                'ToCustomer' => "Il tuo servizio in abbonamento è stato attivato con successo."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Congratulazioni :name|Nuovo buono: :title',
        'category' => "CONGRATULAZIONI, HAI NUOVO VOUCHER",
        'message' => "Ciao :name,<br><br>Hai ricevuto un nuovo buono in regalo da noi! Puoi guadagnare ancora più buoni presentando Selldone ai tuoi amici e a tutti quelli che conosci. Questo voucher vale **:price :currency**.<br><br>Hai fatto il primo passo e siamo qui per aiutarti a sbloccare nuove funzionalità con il tuo voucher! Accedi con **:email** e trova il tuo buono nel Negozio **Dashboard** > **Impostazioni** > **Licenza**.<br><br>Congratulazioni!",
        'action' => "La mia scrivania",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Congratulazioni, caro :name|Hai ricevuto un regalo speciale!',
        'category' => "Annuncio di ricezione di un regalo",
        'title' => "Regali per te",
        'message' => "Ciao :name, siamo entusiasti di farti sapere che hai ricevuto un regalo speciale da Selldone! 🎉 Puoi guadagnare più regali rimanendo attivo, facendo crescere il tuo negozio e migliorando la tua esperienza su Selldone. Per controllare il tuo regalo, accedi semplicemente con :email e cercalo nell'angolo in alto a destra della dashboard.<br><br>Questo regalo vale **:price :currency** e puoi facilmente depositarlo nel tuo portafoglio all'interno di Selldone.<br><br>Utilizza il tuo regalo per aggiornare la licenza del tuo negozio e sblocca strumenti ancora più potenti per potenziare il tuo business online!",
        'action' => "I regali",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nuovo ordine ricevuto| :order_id",
        'title' => "New Order",
        'message' => "Hai ricevuto un nuovo ordine. Vai alla pagina di elaborazione dell'ordine nel tuo negozio.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Le tue informazioni complete',
        'output-form-title' => 'Informazioni sull\'oggetto acquistato',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬:shop_title|Rapporto settimanale :time',
        'title' => 'Rapporto settimanale sulle prestazioni del negozio',
        'message' => "Questo è il report settimanale del tuo negozio da <b>:start</b> a <b>:end</b>. Questo rapporto include suggerimenti per migliorare la tua attività, puoi anche controllare lo stato del tuo negozio online e gli ordini recenti. Spero che tu abbia una buona giornata e una buona settimana."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Il tuo report di risparmio :amount negli ultimi tre mesi| :shop_title',
        'title' => 'Rapporto stagionale sulla tua attività commerciale, premi e risparmi finanziari',
        'message' => "Questo è il tuo report stagionale <b>:shop_title</b> da <b>:start</b> a <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Conti collegati',
        'sub-title' => 'Qual è lo stato più recente degli account wallet collegati al mio negozio?',
        'view-wallet' => 'Visualizza portafoglio',
        'tip-title' => 'Suggerimenti importanti',
        'tip' => "Configura un portafoglio Selldone gratuito e collegalo al tuo negozio. Anche se il tuo saldo è negativo, i tuoi clienti possono comunque fare acquisti e pagare senza problemi. Non preoccuparti, le operazioni e i dati del tuo negozio continueranno senza problemi fino a 1 mese, senza alcuna interruzione.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Collegati all\'account'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'App installate',
        'sub-title' => 'Elenco delle app che hai installato nel tuo negozio questa settimana.',
        'tip' => "Vuoi trovare più app per il tuo negozio?",
        'view-app-store' => 'Visita l\'App Store di Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'I bot del tuo negozio',
        'sub-title' => 'Robot di vendita attivi nel mio negozio.',
        'tip-title' => 'Vendita di bot',
        'tip' => "Selldone ti ha fornito dei robot di vendita automatici. Tutto quello che devi fare è andare nel pannello Componenti aggiuntivi> Bot e attivare i robot del tuo negozio. Tieni presente che il servizio pertinente deve essere disponibile nel tuo paese.",
        'view-bots' => 'Gestisci i bot',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Comunicazione con i clienti',
        'sub-title' => 'Quanti contatti ho avuto con i miei clienti questa settimana?',
        'faqs' => 'Domande frequenti',
        'tickets' => 'Biglietti per i clienti',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Stato utenti',
        'sub-title' => 'Attività da :start a :end',
        'users' => [
            'title' => 'Clienti',
            'subtitle' => 'Registrati utenti',
        ],
        'views' => [
            'title' => 'Visite',
            'subtitle' => 'Quante volte hai visitato il negozio',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utenti ritornati',

        'shop_views' => 'Viste del negozio',
        'baskets' => [
            'title' => 'Carrelli della spesa',
            'subtitle' => 'Segnala il numero di nuovi carrelli della spesa',
        ],
        'products' => [
            'title' => 'Panoramica dei prodotti',
            'subtitle' => 'Stato dei prodotti nel negozio per tipo',
            'value_name' => 'Prodotti'
        ],
        'products_count' => 'Tipi di prodotto',
        'views_count' => 'Visualizza conteggio',
        'sell_count' => 'Vendi conteggio',
        'send_count' => 'Conteggio spedizioni',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Scaricare la consegna',
        'sub-title' => 'Pannello per i principali venditori di Drop Shipping Selldone.',
        'total_fulfillments' => 'Totale ordini ricevuti',
        'ds_count' => 'Ordini ricevuti',
        'statistics_title' => 'Segnala gli ordini ricevuti',
        'ds_cancels' => 'Annulla dal venditore dell\'interfaccia',
        'ds_rejects' => 'Annulla da te',
        'tip' => "Sei un grande venditore di beni? Possiedi un magazzino, una fabbrica o un distributore di prodotti? Puoi offrire i tuoi prodotti ad altri venditori nel servizio di Drop Shipping di Selldone per vendere il tuo prodotto su larga scala. Scrivici a support@selldone.com per guidarti.",
        'view-drop-shipping-panel' => 'Accedi al pannello all\'ingrosso',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Tassi di cambio',
        'sub-title' => 'Elenco degli ultimi tassi di conversione valuta nel tuo negozio.',
        'from' => 'Valuta di origine',
        'to' => 'Valuta di destinazione',
        'rate' => 'Tasso di conversione',
        'view-exchange-panel' => 'Gestisci i tassi di cambio',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contratti di esperti',
        'sub-title' => 'Quali professionisti lavorano nel mio negozio?',
        'cost' => 'Ammontare del contratto',
        'duration' => 'Durata',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Annulla',
        'end_at' => 'Data di consegna',
        'tip' => 'Puoi assumere i migliori specialisti a Selldone per sviluppare la tua attività.',
        'view-experts' => 'Fare clic per iniziare.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Segnala i gateway di pagamento attivi sul negozio :shop.',
        'tip-title' => 'Suggerimenti importanti',
        'tip' => "Vai alla pagina di gestione del portale nel tuo negozio e aggiungi almeno una porta in pochi minuti. Ai tuoi clienti piace pagare in modo rapido e sicuro tramite portali online.",
        'view-shop-gateways' => 'Accedi alla gestione del portale del mio negozio.',
        'view-gateways' => 'Visualizza più gateway',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Ordini',
        'sub-title' => 'Elenco degli ordini che ho ricevuto questa settimana.',
        'total_baskets' => 'Ordini totali',
        'total_posBaskets' => 'Totale ordini in contanti',
        'pos-title' => 'Scatola del negozio POS',
        'chart-label' => 'Ordini completati (questi ordini non sono necessariamente pagati!)',
        'tip-title' => 'Dovresti sforzarti di più...',
        'tip' => "Nessun semplice successo.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centro di elaborazione',
        'sub-title' => 'Quanto ordine abbiamo elaborato nel negozio questa settimana?',
        'tip-title' => 'Non avevi una vendita!',
        'tip' => "Sfortunatamente non hai avuto vendite questa settimana. Devi ottenere di più nel tuo negozio. Puoi aggiungere più prodotti, scegliere immagini migliori o scrivere descrizioni migliori per i tuoi prodotti. Considera un lavoro a tempo pieno per la tua attività. Se lo fai bene e non ti senti frustrato, avrai successo.",
        'view-process-center' => 'Visualizza centro processi',
        'return' => [
            'title' => 'Ordine restituito',
            'subtitle' => 'Segnala gli ordini restituiti.',
            'tip-title' => 'Lo sapevi ...',
            'tip' => "Puoi creare tutti i registratori di cassa di cui hai bisogno con il POS Selldone! Che si tratti del tuo tablet, cellulare o laptop, puoi trasformare qualsiasi dispositivo nel punto vendita del tuo negozio. È semplice, veloce da configurare e completamente predisposto per il tuo server. Inizia a usarlo oggi!",
            'view-pos' => 'Accedi alla Cassa del mio negozio online'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessioni',
        'sub-title' => 'Quante volte ho visitato il mio negozio?',
        'countries-title' => 'Quali paesi sono stati i più visitati?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Vuoi guadagnare senza spendere un dollaro?',
        'message' => "Caro :name, puoi andare su Dashboard > Demonetizzazione e creare un link di riferimento. Invia il link ai tuoi amici, riceverai una carta regalo Selldone e una percentuale sui pagamenti del tuo amico. Tieni presente che la carta regalo verrà inviata sia a te che al tuo amico.",
        'action' => 'Visualizza il mio link di introduzione',
        'mail-clip' => "<b style='color: #C2185B'>Importante:</b> se utilizzi servizi di posta elettronica come Gmail che limitano la lunghezza dell'e-mail, trova la seguente opzione alla fine dell'e-mail per visualizzare il rapporto completo e fai clic su di esso:",

        'no-coin-reward' => "<b style='color: #C2185B'>Spiacenti:</b> la tua attività non ha soddisfatto i requisiti per ottenere il premio SEL Coins gratuito. Sforzati di più e vendi di più nel tuo negozio per la prossima stagione.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Ricompensa:</b> Congratulazioni, grazie alla tua fantastica performance, ti abbiamo dato un premio gratuito :amount SEL Coin.",

        'need-buy-license' => "<b>Fai salire di livello il tuo business:</b> Sembra che tu non abbia ancora registrato alcun piano di abbonamento per il tuo sito web! Esegui ora l'upgrade per sbloccare più funzionalità a soli :amount al mese se pagato annualmente.",
        'not-afford-message' => "Se non puoi permetterti o hai problemi con il pagamento, sentiti libero di comunicarcelo tramite support@selldone.com.",
        'add-domain' => "<b>Perché non avere un dominio personalizzato per la tua attività?</b><br> Aggiungi subito un dominio al tuo sito web; è gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone è un<del> Prodotto</del> <span style = 'color: forestgreen'>comunità</span> .<br> Diventa un venditore professionista!",
        'message' => "Segui le pagine ufficiali del Selldone su Twitter, LinkedIn e social. Inviaci qualsiasi commento, richiesta o critica o partecipa a discussioni sul Selldone. Facciamo anche parte della community di Selldone che <b>fai</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nuovi ordini di avocado ricevuti|:shop_title:time',
        'title' => "Rapporto sul rendimento delle ultime 24 ore",
        'message' => "I tuoi clienti stanno aspettando che i tuoi ordini vengano esaminati e prezzati. Rispondi alle richieste dei tuoi clienti il prima possibile per ottenere più vendite.",
        'card_title' => "Ordini in coda",
        'card_subtitle' => "Dal :date",

        'card_payed' => "Ordini pagati"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Rispondi al tuo post in :community_title',
        'title' => ":name e :count altri hanno commentato i tuoi post.",
        'message' => "Ciao :name, i tuoi post stanno attirando l'attenzione! Hai ricevuto commenti nella nostra community. Accedi al tuo account per partecipare alla discussione e vedere cosa dicono tutti.",
        'title-simple' => ":name ha commentato il tuo post!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Rispondi al tuo argomento :topic_title',
        'title' => ":name, e :count altri hanno risposto sul tuo argomento.",
        'message' => "Ciao :name, il tuo argomento sta attirando l'attenzione! Hai ricevuto risposte nella nostra community. Accedi al tuo account per partecipare alla discussione e vedere cosa dicono tutti.",
        'title-simple' => ":name ha risposto al tuo argomento.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nuovo accesso :name',
        'category' => 'Notifiche di sicurezza',
        'title' => "Accedi all'account",
        'message' => "Gentile :name, hai effettuato l'accesso al tuo account Selldone.",   // Login in selldone (seller)
        'message-shop' => "Caro :name, hai effettuato l'accesso a :shop_title .",  // Login in shop (buyer)

        'footer' => "Se non sei loggato, cambia la tua password.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Ritiro",
        'deposit' => "Depositare",

        'withdraw_subject' => "Prelievo dal conto :account",
        'deposit_subject' => "Deposito sul conto :account",

        'message' => "Il trasferimento di denaro è stato effettuato con le seguenti specifiche.",

        'type' => "Tipo di transazione",

        'from' => "Conto di origine",
        'to' => "Destination account",

        'desc' => "Descrizione della transazione",
        'action' => "Visualizza transazione",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Importante! Violazione delle regole| :shop",
        'category' => "Informazione critica",
        'title' => "Il tuo negozio è stato penalizzato",
        'action' => "Apri la dashboard del negozio",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter ti ha invitato a Selldone",
        'title' => ":name ti ha inviato :amount per aiutarti a lanciare il tuo nuovo negozio online e monetizzarlo!",
        'message' => "Ciao **:receiver_name**,<br><br>Benvenuti in Selldone! Su Selldone puoi creare facilmente il tuo sito di e-commerce, blog, comunità online e persino configurare un sistema POS online per le vendite di persona, il tutto in pochi minuti. È il sistema operativo aziendale online completo progettato per rendere la tua attività migliore, più veloce e più facile da gestire.<br><br>Iscriviti entro <b>:date</b> e ricevi un voucher :amount per iniziare!",
        'accept' => "Accetta l'invito",
        'owner' => "Proprietario di",
        'join-date' => "Su Selldone da allora",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Collegamento di ripristino| :shop",
        'category' => "Sicurezza del negozio",
        'title' => "Memorizzare il collegamento di ripristino di <b>:shop_name</b>.",
        'message' => "Questa email ti è stata inviata perché hai richiesto di ripristinare il tuo negozio. Cliccando sul link sottostante recupererai il tuo negozio e tutti i dati ad esso appartenenti.",
        'action' => "Conferma il ripristino del negozio",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Quanti soldi ha risparmiato Selldone per la tua attività?',
        'sub-title' => 'Dalla data :start a :end',
        'infrastructure' => [
            'title' => 'Infrastruttura',
            'subtitle' => 'Server, CDN, Archiviazione e altri servizi cloud',
        ],
        'experts' => [
            'title' => 'Esperti e personale',
            'subtitle' => 'Sviluppatori, manutenzione e supporto',
        ],
        'total_save' => 'Soldi risparmiati totali'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'La tua prestazione',
        'sub-title' => 'Panoramica aziendale da :start a :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Utenti ritornati',

        'shop_views' => 'Viste del negozio',
        'baskets' => [
            'title' => 'Carrelli della spesa',
            'subtitle' => 'Segnala il numero di nuovi carrelli della spesa',

        ],
        'products' => [
            'title' => 'Panoramica dei prodotti',
            'subtitle' => 'Stato dei prodotti nel negozio per tipo',
            'value_name' => 'Prodotti'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Visualizzazioni totali della pagina del sito web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Hai ricevuto un nuovo ordine. Vai alla pagina di elaborazione degli ordini nel pannello del fornitore.",
        'subject' => "🛍️ Nuovo ordine ricevuto| :order_id",
        'your_revenue' => "Il tuo fatturato",
    ],
    'vendor-invite' => [
        'title' => 'Invito del venditore',
        'message' => "Hai ricevuto un invito a diventare venditore di :shop_name. Puoi accettarlo o rifiutarlo cliccando sui seguenti pulsanti.",
        'subject' => ":shop_name | Hai ricevuto un invito per diventare nostro fornitore",
        'accept' => "Accetta e diventa un fornitore",
        'reject' => "Rifiutare",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invito a far parte del nostro team',
        'message' => "Sei stato invitato a iscriverti a :vendor_name su :shop_name. Puoi accettare o rifiutare questo invito utilizzando i pulsanti sottostanti.",
        'subject' => "Invito a partecipare :vendor_name|Diventa un membro del team",
        'accept' => "Accetta e unisciti al team",
        'reject' => "Rifiutare",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Il tuo codice di accesso per :shop",
        'header-message' => "Ti stiamo inviando questa e-mail perché hai richiesto un codice di accesso per il negozio. Di seguito trovi la tua One-Time Password (OTP):",
        'footer-message' => "Questo codice sarà valido per 10 minuti. Se non hai richiesto questo codice di accesso, ignora questa email."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifica la tua email | :shop",
        'title' => 'Verifica e-mail',
        'header-message' => "Ciao :name,<br>Conferma che **:email** è il tuo indirizzo email facendo clic sul pulsante in basso o utilizzando il collegamento in basso entro 48 ore.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Aggiornamenti del prodotto| :shop",
        'title' => "Aggiornamento sullo stato del prodotto - Ultime 24 ore",
        'message' => "Spero che questo messaggio ti trovi bene. Questo è un breve aggiornamento per informarti sullo stato dei tuoi prodotti sulla nostra piattaforma nelle ultime 24 ore.\nDurante questo periodo ci sono stati cambiamenti nello stato di alcuni prodotti. Tali modifiche potrebbero essere dovute ad acquisti, aggiornamenti delle scorte o altri eventi correlati.\nPer informazioni più dettagliate su ciascun prodotto, accedi al tuo account e controlla la sezione \"Stato prodotto\".",
        'action' => "Apri pannello fornitore",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Ordini all'ingrosso ricevuti| :shop | :date",
        'title' => "Notifica degli ordini all'ingrosso",
        'message' => "Hai ricevuto un lotto di ordini all'ingrosso. Per ulteriori dettagli, visita la pagina di elaborazione degli ordini nel tuo pannello. Puoi anche scaricare l'elenco degli ordini tramite il link sicuro fornito, valido per 7 giorni.<br><br>\n        <b>IMPORTANTE:</b> Questo link è valido per 7 giorni.<br>\n        Questo collegamento è dinamico, quindi ogni volta che lo clicchi riceverai gli ordini più aggiornati per questa data specifica. <b>Significa che se lo stato del pagamento dell'ordine cambia in rifiutato, non vedrai più l'ordine nel CSV scaricato o, se l'ordine è stato pagato, apparirà nell'elenco.</b><br><br>\n        <ul>\n            <li>Il CSV contiene ordini pagati con una data riservata nel :date.</li>\n            <li>La data riservata è la data in cui l'utente fa clic su Checkout nella pagina dell'ordine.</li>\n        </ul>\n        <b>Per evitare ordini duplicati, controllare sempre l'Ordine ID prima di inviare.</b>",
        'action' => "Scarica l'elenco degli ordini",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Alcuni articoli del tuo ordine non sono stati accettati e non possono essere consegnati. L'importo di questi articoli verrà rimborsato sulla tua carta a breve."
    ]

,

    'email-types-description' => [
    ],
    'global' => [
        'Shop' => 'Negozio',
        'dashboard' => 'Pannello',
        'comments' => 'Commenti',
        'wallet' => 'portafoglio',
    ],
    'welcome-email' => [
        'seller' => [
            'title' => 'Sei un venditore?',
            'message' => 'Per iniziare a vendere, accedi alla tua dashboard in Selldone tramite il link sottostante e crea il tuo primo negozio completamente gratuito. Ci vorranno alcuni minuti e avrai il tuo negozio e il tuo sito online. Ti guideremo quindi ai passaggi successivi e otterremo il gateway di pagamento.',
            'action' => 'Accedi alla mia dashboard',
        ],
        'buyer' => [
            'title' => 'Sono un acquirente',
            'message' => 'Congratulazioni. Una volta che sei un membro di Selldone, ti libererai di tutti i problemi di iscrizione e autenticazione nei negozi online. Per beneficiare di qualsiasi negozio e sito che utilizzi la piattaforma Selldone, puoi accedere con un clic e rendere il tuo acquisto semplice, veloce e sicuro.',
        ],
    ],
    'order-checkout' => [
        'payments' => 'Pagamenti',
    ],
    'order-payment' => [
        'payments' => 'Pagamenti',
    ],
    'EC-ShopExchangeRates' => [
        'vew-exchange-panel' => 'pannello di gestione del tasso di cambio',
    ],
];
