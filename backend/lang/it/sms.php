<?php

/*
|--------------------------------------------------------------------------
| Shop SMS list
|--------------------------------------------------------------------------
| This array return to shop admin to see SMS preview!
|
*/

return [

    'shop-order-payment' => [
        'title' => 'Accetta il pagamento',
        'sample' => "Il tuo pagamento di 267\$ è andato a buon fine.<br> Ordine: SM-425<br> Grazie, <b>il nome del tuo negozio</b> .<br> Selldone",
        'body' => "Il tuo pagamento :param2 è stato saldato correttamente.\nOrdine: :param1\nGrazie, :param3.\nSelldone",
        'icon' => 'pagamento',
        'description' => 'Invia un messaggio al cliente del negozio per informarlo dell\'avvenuto pagamento.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Accetta il pagamento',
        'sample' => "Nuovo pagamento 267\$ regolato con successo.<br> Ordine: SM-425<br> Grazie, <b>il nome del tuo negozio</b> .<br> Selldone",
        'body' => "Il nuovo pagamento :param2 è stato saldato correttamente.\nOrdine: :param1\nGrazie, :param3.\nSelldone",
        'icon' => 'pagamento',
        'description' => 'Invia un messaggio al proprietario del negozio per informarlo dell\'avvenuto pagamento.',

    ],

    'vendor-new-order' => [
        'title' => 'Nuovo ordine del fornitore',
        'sample' => "Hai ricevuto un nuovo ordine da \$ 200.<br>Ordine: <b>SM-870</b> per <b>Nome fornitore</b>.<br>✅ Prodotto A| SKU100001 |1x<br>✅ Prodotto B| SKU100002 |1x",
        'body' => "Hai ricevuto un nuovo ordine :param2.\nOrdine: :param1 per :param3.\n:param4",
        'icon' => 'vetrina',
        'description' => 'Invia un messaggio al fornitore per informarlo di un nuovo ordine.',
    ],








    'shop-login' => [
        'title' => 'Codice di verifica dell\'accesso',
        'sample' => "Il tuo codice di accesso è: <b>123456</b><br> <b>Il nome del tuo negozio</b><br> Selldone",
        'body' => "Il tuo codice di accesso è: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Invia il codice di accesso al cliente per accedere al negozio.',

    ],

    'user-login' => [
        'title' => 'Messaggio di accesso riuscito',
        'sample' => "Caro <b>nome</b> ,<br> Hai effettuato l'accesso al tuo account tramite <b>iPhone 165.250.300.1</b> il <b>5/8/2021 9:14</b> .<br> Selldone",
        'body' => "Caro :param1,\nHai effettuato l'accesso al tuo account da :param2 a :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Invia un messaggio dopo che il cliente ha effettuato l\'accesso al negozio.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado nuovo ordine inviato invia all\'acquirente',
        'sample' => "<b>Il nome del tuo negozio</b><br> Caro <b>il tuo nome</b> ,<br> Abbiamo ricevuto il tuo ordine e lo stiamo esaminando.<br> Ordine n.: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nGentile :param1,\nAbbiamo ricevuto il tuo ordine e lo stiamo esaminando.\nN. ordine: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Invia un messaggio al cliente dopo aver effettuato un ordine di avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado ricevere un nuovo ordine inviato al venditore',
        'sample' => "Hai ricevuto un ordine di avocado:<br> Negozio: <b>il nome del tuo negozio</b><br> Acquirente: <b>nome dell'acquirente</b><br> Ordine: <b>AVO-246</b><br> Selldone",
        'body' => "Hai ricevuto un ordine di avocado:\nNegozio: :param1\nAcquirente: :param2\nOrdine: :param3\nSelldone",
        'icon' => 'come_registrare_',
        'description' => 'Invia un messaggio al proprietario del negozio per informarlo che è arrivato un nuovo ordine di avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Ordine di avocado pronto per il pagamento',
        'sample' => "<b>Nome del tuo negozio</b><br>Il tuo ordine è stato confermato e può essere pagato tramite il seguente link.<br>Ordine n.: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nIl tuo ordine è stato confermato e può essere pagato tramite il seguente link.\nN. ordine: :param2\nCollegamento: :param1\nSelldone",
        'icon' => 'ricevuta',
        'description' => 'Dopo che il venditore ha impostato il costo e confermato l\'ordine di avocado, invia al cliente un messaggio con il link per il pagamento.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Ordine pronto per la spedizione',
        'sample' => "Ciao <b>Alex</b>, buone notizie, il tuo ordine è ora pronto per essere spedito.<br>Ordine: <b>SM-123</b>",
        'body' => "Ciao :param4, buone notizie, il tuo ordine è ora pronto per essere spedito.\nOrdine: :param1",
        'icon' => 'local_shipping',
        'description' => 'Invia un messaggio al cliente per informarlo che il suo ordine è pronto per essere spedito.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Ordine pronto per il ritiro',
        'sample' => "Ciao Alex, buone notizie, il tuo ordine è ora pronto per essere ritirato.<br>Ordine: <b>SM-123</b>",
        'body' => "Ciao :param4, buone notizie, il tuo ordine è ora pronto per essere ritirato.\nOrdine: :param1",
        'icon' => 'condividi_posizione',
        'description' => 'Invia un messaggio al cliente per informarlo che il suo ordine è pronto per essere ritirato.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Ordine fornitore pronto per la spedizione',
        'sample' => "Ciao <b>Alex</b>, buone notizie, il tuo ordine è ora pronto per essere spedito.<br>Ordine: <b>SM-123</b>",
        'body' => "Ciao :param4, buone notizie, il tuo ordine è ora pronto per essere spedito.\nOrdine: :param1",
        'icon' => 'local_shipping',
        'description' => 'Invia un messaggio al cliente per informarlo che il suo ordine è pronto per essere spedito. Solo nel marketplace con modalità di spedizione diretta e il tipo di consegna non è Ritiro.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Ordine del venditore pronto per il ritiro',
        'sample' => "Ciao Alex, buone notizie, il tuo ordine è ora pronto per essere ritirato.<br>Ordine: <b>SM-123</b>",
        'body' => "Ciao :param4, buone notizie, il tuo ordine è ora pronto per essere ritirato.\nOrdine: :param1",
        'icon' => 'condividi_posizione',
        'description' => 'Invia un messaggio al cliente per informarlo che il suo ordine è pronto per essere ritirato. Solo nel marketplace con modalità di spedizione diretta e il tipo di consegna è Ritiro.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Conferma degli articoli dell\'ordine',
        'sample' => "Ciao Alex, abbiamo esaminato il tuo ordine. Ecco lo stato di conferma per i tuoi articoli: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Ciao :param4, abbiamo esaminato il tuo ordine. Ecco lo stato di conferma dei tuoi articoli:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'incarico_consegnato_in',
        'description' => 'Informa il cliente sugli articoli del suo ordine che sono stati accettati o rifiutati dal venditore.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Conferma degli articoli dell\'ordine del fornitore',
        'sample' => "Ciao Alex, abbiamo esaminato il tuo ordine. Ecco lo stato di conferma per i tuoi articoli: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Ciao :param4, abbiamo esaminato il tuo ordine. Ecco lo stato di conferma dei tuoi articoli:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'incarico_consegnato_in',
        'description' => 'Informa il cliente sugli articoli del suo ordine che sono stati accettati o rifiutati dal fornitore.',
    ],



];
