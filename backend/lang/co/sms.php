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
        'title' => 'Accetta pagamentu',
        'sample' => "U vostru pagamentu di 267 \$ hè stallatu bè.<br> Ordine: SM-425<br> Grazie, u <b>vostru nome di a tenda</b> .<br> Selldone",
        'body' => "U vostru pagamentu :param2 hè statu risoltu bè.\nOrdine: :param1\nGrazie, :param3.\nSelldone",
        'icon' => 'pagamentu',
        'description' => 'Mandate un missaghju à u cliente di a tenda per informà di u pagamentu successu.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Accetta pagamentu',
        'sample' => "U novu pagamentu di 267 \$ hè stallatu bè.<br> Ordine: SM-425<br> Grazie, u <b>vostru nome di a tenda</b> .<br> Selldone",
        'body' => "U novu pagamentu :param2 hè statu risoltu cù successu.\nOrdine: :param1\nGrazie, :param3.\nSelldone",
        'icon' => 'pagamentu',
        'description' => 'Mandate un missaghju à u pruprietariu di a tenda per avè infurmatu nantu à u pagamentu successu.',

    ],

    'vendor-new-order' => [
        'title' => 'Venditore New Order',
        'sample' => "Avete ricevutu un novu ordine di \$ 200.<br>Ordine: <b>SM-870</b> per <b>Nome di u venditore</b>.<br>✅ Produttu A| SKU100001 |1x<br>✅ Produttu B| SKU100002 |1x",
        'body' => "Avete ricevutu un novu ordine :param2.\nOrdine: :param1 per :param3.\n:param4",
        'icon' => 'vetrina',
        'description' => 'Mandate un missaghju à u vinditore per avè infurmatu nantu à un novu ordine.',
    ],








    'shop-login' => [
        'title' => 'Codice di verificazione di login',
        'sample' => "U vostru codice di login hè: <b>123456</b><br> <b>U vostru nome di a tenda</b><br> Selldone",
        'body' => "U vostru codice di login hè: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Mandate u codice di login à u cliente per accede à a tenda.',

    ],

    'user-login' => [
        'title' => 'Missaghju di successu di login',
        'sample' => "Caru <b>nome</b> ,<br> Avete cunnessu à u vostru contu da <b>iPhone 165.250.300.1</b> à <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Caru :param1,\nAvete loged in u vostru contu da :param2 à :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Mandate un missaghju dopu à u login di u cliente à a buttrega.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado novu ordine sottumessu mandatu à u cumpratore',
        'sample' => "<b>U vostru nome di a tenda</b><br> Caru <b>u vostru nome</b> ,<br> Avemu ricevutu u vostru ordine è l'avemu esaminatu.<br> Ordine #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nCaru :param1,\nAvemu ricevutu u vostru ordine è l'avemu esaminatu.\nN° d'ordine: :param2\nSelldone",
        'icon' => 'verificate_fatti',
        'description' => 'Mandate un missaghju à u cliente dopu avè fattu un ordine di Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado riceve un novu ordine mandatu à u venditore',
        'sample' => "Avete ricevutu un ordine d'avocado:<br> Store: <b>u vostru nome di a tenda</b><br> Cumpratore: <b>nome di u cumpratore</b><br> Ordine: <b>AVO-246</b><br> Selldone",
        'body' => "Avete ricevutu un ordine di Avocado:\nMagasin: :param1\nCumpratore: :param2\nOrdine: :param3\nSelldone",
        'icon' => 'cumu_reg',
        'description' => 'Mandate un missaghju à u pruprietariu di a buttrega per avè infurmatu di riceve un novu ordine di Avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Ordine d\'avocado prontu à pagà',
        'sample' => "<b>U vostru nome di a tenda</b><br> U vostru ordine hè statu cunfirmatu è pò esse pagatu attraversu u ligame seguente.<br> Ordine #: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nU vostru ordine hè statu cunfirmatu è pò esse pagatu attraversu u ligame seguente.\nN° d'ordine: :param2\nLink: :param1\nSelldone",
        'icon' => 'ricevuta',
        'description' => 'Mandate un missaghju cù u ligame di pagamentu à u cliente dopu chì u venditore hà stabilitu u costu è cunfirmà u so ordine di Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Ordine prontu à spedinu',
        'sample' => "Salute <b>Alex</b>, bona nutizia, u vostru ordine hè avà prontu per esse speditu.<br>Ordine: <b>SM-123</b>",
        'body' => "Salute :param4, bona nutizia, u vostru ordine hè avà prontu per esse speditu.\nOrdine: :param1",
        'icon' => 'spedizione_locale',
        'description' => 'Mandate un missaghju à u cliente per informà chì u so ordine hè prontu per esse speditu.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Ordine prontu à piglià',
        'sample' => "Ciao Alex, bona nutizia, u vostru ordine hè avà prontu per esse pigliatu.<br>Ordine: <b>SM-123</b>",
        'body' => "Ciao :param4, bona nutizia, u vostru ordine hè avà prontu per esse pigliatu.\nOrdine: :param1",
        'icon' => 'share_location',
        'description' => 'Mandate un missaghju à u cliente per avè infurmatu chì u so ordine hè prontu per esse pigliatu.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Ordine di u venditore prontu à spedinu',
        'sample' => "Salute <b>Alex</b>, bona nutizia, u vostru ordine hè avà prontu per esse speditu.<br>Ordine: <b>SM-123</b>",
        'body' => "Salute :param4, bona nutizia, u vostru ordine hè avà prontu per esse speditu.\nOrdine: :param1",
        'icon' => 'spedizione_locale',
        'description' => 'Mandate un missaghju à u cliente per informà chì u so ordine hè prontu per esse speditu. Solu in u mercatu cù u Modu di Spedizione Diretta è u tipu di consegna ùn hè micca Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Ordine di u venditore pronta à piglià',
        'sample' => "Ciao Alex, bona nutizia, u vostru ordine hè avà prontu per esse pigliatu.<br>Ordine: <b>SM-123</b>",
        'body' => "Ciao :param4, bona nutizia, u vostru ordine hè avà prontu per esse pigliatu.\nOrdine: :param1",
        'icon' => 'share_location',
        'description' => 'Mandate un missaghju à u cliente per avè infurmatu chì u so ordine hè prontu per esse pigliatu. Solu in u mercatu cù u Modu di Spedizione Diretta è u tipu di consegna hè Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Cunfirmazione di l\'articuli d\'ordine',
        'sample' => "Hola Alex, avemu rivisatu u vostru ordine. Eccu u statu di cunferma per i vostri articuli: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hola :param4, avemu rivisatu u vostru ordine. Eccu u statutu di cunferma per i vostri articuli:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notifica à u cliente nantu à l\'articuli in u so ordine chì sò stati accettati o rifiutati da u venditore.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Cunfirmazione di l\'articuli di l\'ordine di u venditore',
        'sample' => "Hola Alex, avemu rivisatu u vostru ordine. Eccu u statu di cunferma per i vostri articuli: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hola :param4, avemu rivisatu u vostru ordine. Eccu u statutu di cunferma per i vostri articuli:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notifica à u cliente nantu à l\'articuli in u so ordine chì sò stati accettati o rifiutati da u venditore.',
    ],



];
