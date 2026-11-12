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
        'title' => 'Accept plata',
        'sample' => "Plata dvs. de 267 USD a fost plătită cu succes.<br>Comandă: SM-425<br>Multumesc, <b>Numele magazinului dvs.</b>.<br>Selldone",
        'body' => "Plata dvs. :param2 a fost plătită cu succes.\nComanda: :param1\nMulțumesc, :param3.\nSelldone",
        'icon' => 'plata',
        'description' => 'Trimiteți un mesaj clientului magazinului pentru a vă informa despre plata reușită.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Accept plata',
        'sample' => "Noua plată de 267 USD a fost efectuată cu succes.<br>Comandă: SM-425<br>Multumesc, <b>Numele magazinului dvs.</b>.<br>Selldone",
        'body' => "Noua plată :param2 a fost efectuată cu succes.\nComanda: :param1\nMulțumesc, :param3.\nSelldone",
        'icon' => 'plata',
        'description' => 'Trimiteți un mesaj proprietarului magazinului pentru a-l informa despre plata reușită.',

    ],

    'vendor-new-order' => [
        'title' => 'Comanda noua furnizorului',
        'sample' => "Ați primit o nouă comandă de 200 USD.<br>Comandă: <b>SM-870</b> pentru <b>Nume furnizor</b>.<br>✅ Produs A| SKU100001 |1x<br>✅ Produs B| SKU100002 |1x",
        'body' => "Ați primit o nouă comandă :param2.\nComanda: :param1 pentru :param3.\n:param4",
        'icon' => 'vitrina',
        'description' => 'Trimiteți un mesaj vânzătorului pentru a-l informa despre o nouă comandă.',
    ],








    'shop-login' => [
        'title' => 'Cod de verificare a autentificarii',
        'sample' => "Codul dvs. de conectare este: <b>123456</b><br> <b>Numele magazinului dvs</b><br> Selldone",
        'body' => "Codul dvs. de conectare este: :param1\n:param2\nSelldone",
        'icon' => 'autentificare',
        'description' => 'Trimiteți codul de autentificare clientului pentru a se conecta la magazin.',

    ],

    'user-login' => [
        'title' => 'Mesaj de succes de conectare',
        'sample' => "Stimate <b>nume</b> ,<br> V-ați conectat la contul dvs. prin <b>iPhone 165.250.300.1</b> la <b>08.05.2021 9:14</b> .<br> Selldone",
        'body' => "Stimate :param1,\nV-ați conectat la contul dvs. de către :param2 la :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Trimiteți un mesaj după autentificarea clientului la magazin.',

    ],

    'avocado-order-submit' => [
        'title' => 'Comanda noua de avocado trimisa trimite cumparatorului',
        'sample' => "<b>Numele magazinului dvs</b><br> Dragă <b>numele tău</b> ,<br> Am primit comanda dvs. și o examinăm.<br> Comanda #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nStimate :param1,\nAm primit comanda dvs. și o examinăm.\nComanda #: :param2\nSelldone",
        'icon' => 'verificare_fapt',
        'description' => 'Trimiteți un mesaj clientului după plasarea unei comenzi de avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado primește o nouă comandă trimisă vânzătorului',
        'sample' => "Ai primit o comandă de avocado:<br> Magazin: <b>numele magazinului dvs</b><br> Cumpărător: <b>numele cumpărătorului</b><br> Comanda: <b>AVO-246</b><br> Selldone",
        'body' => "Ai primit o comandă de avocado:\nMagazin: :param1\nCumpărător: :param2\nComanda: :param3\nSelldone",
        'icon' => 'cum_se_reg',
        'description' => 'Trimiteți un mesaj proprietarului magazinului pentru a-l informa despre primirea unei noi comenzi de Avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Comanda de avocado gata de plată',
        'sample' => "<b>Numele magazinului dvs.</b><br>Comanda dvs. a fost confirmată și poate fi plătită prin următorul link.<br>Comanda #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nComanda dvs. a fost confirmată și poate fi plătită prin următorul link.\nComanda #: :param2\nLink: :param1\nSelldone",
        'icon' => 'chitanta',
        'description' => 'Trimiteți un mesaj cu linkul de plată către client după ce vânzătorul a stabilit costul și confirmați comanda Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Comanda gata de expediere',
        'sample' => "Bună, <b>Alex</b>, vești bune, comanda dvs. este acum gata de expediere.<br>Comanda: <b>SM-123</b>",
        'body' => "Bună :param4, vești bune, comanda dvs. este acum gata de expediere.\nComanda: :param1",
        'icon' => 'expediere_locală',
        'description' => 'Trimiteți un mesaj clientului pentru a-l informa că comanda lui este gata pentru a fi expediată.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Comanda gata de ridicare',
        'sample' => "Bună Alex, vești bune, comanda ta este acum gata pentru a fi ridicată.<br>Comanda: <b>SM-123</b>",
        'body' => "Bună :param4, vești bune, comanda dvs. este acum gata pentru a fi ridicată.\nComanda: :param1",
        'icon' => 'share_location',
        'description' => 'Trimiteți un mesaj clientului pentru a-l informa că comanda este gata pentru a fi ridicată.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Comanda furnizorului este gata de expediere',
        'sample' => "Bună, <b>Alex</b>, vești bune, comanda dvs. este acum gata de expediere.<br>Comanda: <b>SM-123</b>",
        'body' => "Bună :param4, vești bune, comanda dvs. este acum gata de expediere.\nComanda: :param1",
        'icon' => 'expediere_locală',
        'description' => 'Trimiteți un mesaj clientului pentru a-l informa că comanda lui este gata pentru a fi expediată. Doar pe piață cu Modul de livrare directă și tipul de livrare nu este Ridicare.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Comanda furnizorului este gata de ridicare',
        'sample' => "Bună Alex, vești bune, comanda ta este acum gata pentru a fi ridicată.<br>Comanda: <b>SM-123</b>",
        'body' => "Bună :param4, vești bune, comanda dvs. este acum gata pentru a fi ridicată.\nComanda: :param1",
        'icon' => 'share_location',
        'description' => 'Trimiteți un mesaj clientului pentru a-l informa că comanda este gata pentru a fi ridicată. Doar pe piață, cu Modul de livrare directă, iar tipul de livrare este Ridicare.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Confirmarea comenzii articolelor',
        'sample' => "Bună Alex, ți-am revizuit comanda. Iată starea de confirmare pentru articolele dvs.: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Bună ziua :param4, am analizat comanda dvs. Iată starea de confirmare a articolelor dvs.:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'misiunea_prevenită',
        'description' => 'Notifică clientul despre articolele din comandă care au fost acceptate sau respinse de vânzător.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Confirmarea articolelor comenzii furnizorului',
        'sample' => "Bună Alex, ți-am revizuit comanda. Iată starea de confirmare pentru articolele dvs.: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Bună ziua :param4, am analizat comanda dvs. Iată starea de confirmare a articolelor dvs.:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'misiunea_prevenită',
        'description' => 'Notifică clientul despre articolele din comandă care au fost acceptate sau respinse de vânzător.',
    ],



];
