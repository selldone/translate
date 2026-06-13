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
        'title' => 'Prihvatite plaćanje',
        'sample' => "Vaša uplata od 267\$ je uspješno podmirena.<br> Narudžba: SM-425<br> Hvala, <b>naziv vaše prodavnice</b> .<br> Selldone",
        'body' => "Vaša :param2 uplata je uspješno podmirena.\nNarudžba: :param1\nHvala, :param3.\nSelldone",
        'icon' => 'plaćanje',
        'description' => 'Pošaljite poruku kupcu trgovine da ga obavijestite o uspješnoj uplati.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Prihvatite plaćanje',
        'sample' => "Nova uplata od 267\$ uspješno podmirena.<br> Narudžba: SM-425<br> Hvala, <b>naziv vaše prodavnice</b> .<br> Selldone",
        'body' => "Nova :param2 uplata je uspješno izmirena.\nNarudžba: :param1\nHvala, :param3.\nSelldone",
        'icon' => 'plaćanje',
        'description' => 'Pošaljite poruku vlasniku trgovine da ga obavijestite o uspješnoj uplati.',

    ],

    'vendor-new-order' => [
        'title' => 'Vendor New Order',
        'sample' => "Primili ste novu narudžbu od 200 USD.<br>Narudžba: <b>SM-870</b> za <b> Ime dobavljača</b>.<br>✅ Proizvod A| SKU100001 |1x<br>✅ Proizvod B| SKU100002 |1x",
        'body' => "Primili ste novu :param2 narudžbu.\nNarudžba: :param1 za :param3.\n:param4",
        'icon' => 'izlog',
        'description' => 'Pošaljite poruku prodavcu da ga obavijestite o novoj narudžbi.',
    ],








    'shop-login' => [
        'title' => 'Kod za potvrdu prijave',
        'sample' => "Vaš kod za prijavu je: <b>123456</b><br> <b>Ime vaše prodavnice</b><br> Selldone",
        'body' => "Vaš kod za prijavu je: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Pošaljite šifru za prijavu kupcu da se prijavi u prodavnicu.',

    ],

    'user-login' => [
        'title' => 'Poruka o uspješnoj prijavi',
        'sample' => "Poštovani <b>Ime</b> ,<br> Prijavili ste se na svoj nalog putem <b>iPhone-a 165.250.300.1 08.05.2021</b> . u <b>9:14</b> .<br> Selldone",
        'body' => "Poštovani :param1,\nPrijavili ste se na svoj nalog putem :param2 na :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Pošaljite poruku nakon prijave kupca u trgovinu.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokado nova narudžba poslata pošaljite kupcu',
        'sample' => "<b>Ime vaše prodavnice</b><br> drago <b>tvoje ime</b> ,<br> Primili smo vašu narudžbu i pregledavamo je.<br> Broj narudžbe: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nPoštovani :param1,\nPrimili smo vašu narudžbu i pregledavamo je.\nBroj narudžbe: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Pošaljite poruku kupcu nakon narudžbe avokada.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado primi novu narudžbu pošalji prodavcu',
        'sample' => "Dobili ste narudžbu avokada:<br> Prodavnica: <b>Ime vaše trgovine</b><br> Kupac: <b>Ime kupca</b><br> Narudžba: <b>AVO-246</b><br> Selldone",
        'body' => "Dobili ste narudžbu avokada:\nProdavnica: :param1\nKupac: :param2\nNarudžba: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Pošaljite poruku vlasniku trgovine da ga obavijestite o prijemu nove narudžbe Avokada.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Narudžba avokada spremna za plaćanje',
        'sample' => "<b>Ime vaše prodavnice</b><br> Vaša narudžba je potvrđena i može se platiti putem sljedećeg linka.<br> Broj narudžbe: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nVaša narudžba je potvrđena i može se platiti putem sljedećeg linka.\nBroj narudžbe: :param2\nVeza: :param1\nSelldone",
        'icon' => 'priznanica',
        'description' => 'Pošaljite poruku s vezom za plaćanje kupcu nakon što prodavač odredi cijenu i potvrdi njihovu narudžbu avokada.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Narudžba spremna za isporuku',
        'sample' => "Zdravo <b>Alex</b>, dobre vijesti, vaša narudžba je sada spremna za isporuku.<br>Narudžba: <b>SM-123</b>",
        'body' => "Zdravo :param4, dobre vijesti, vaša narudžba je sada spremna za isporuku.\nNarudžba: :param1",
        'icon' => 'local_shipping',
        'description' => 'Pošaljite poruku kupcu da ga obavijestite da je njihova narudžba spremna za isporuku.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Narudžba spremna za preuzimanje',
        'sample' => "Zdravo Alex, dobre vijesti, vaša narudžba je sada spremna za preuzimanje.<br>Narudžba: <b>SM-123</b>",
        'body' => "Zdravo :param4, dobre vijesti, vaša narudžba je sada spremna za preuzimanje.\nNarudžba: :param1",
        'icon' => 'share_location',
        'description' => 'Pošaljite poruku kupcu da ga obavijestite da je njihova narudžba spremna za preuzimanje.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Narudžba dobavljača spremna za isporuku',
        'sample' => "Zdravo <b>Alex</b>, dobre vijesti, vaša narudžba je sada spremna za isporuku.<br>Narudžba: <b>SM-123</b>",
        'body' => "Zdravo :param4, dobre vijesti, vaša narudžba je sada spremna za isporuku.\nNarudžba: :param1",
        'icon' => 'local_shipping',
        'description' => 'Pošaljite poruku kupcu da ga obavijestite da je njihova narudžba spremna za isporuku. Samo na tržištu s načinom direktne isporuke i vrstom isporuke nije preuzimanje.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Narudžba dobavljača spremna za preuzimanje',
        'sample' => "Zdravo Alex, dobre vijesti, vaša narudžba je sada spremna za preuzimanje.<br>Narudžba: <b>SM-123</b>",
        'body' => "Zdravo :param4, dobre vijesti, vaša narudžba je sada spremna za preuzimanje.\nNarudžba: :param1",
        'icon' => 'share_location',
        'description' => 'Pošaljite poruku kupcu da ga obavijestite da je njihova narudžba spremna za preuzimanje. Samo na tržištu s načinom direktne isporuke i vrstom isporuke je preuzimanje.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Potvrda narudžbe',
        'sample' => "Zdravo Alex, pregledali smo vašu narudžbu. Evo statusa potvrde za vaše artikle: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Pozdrav :param4, pregledali smo vašu narudžbu. Evo statusa potvrde za vaše artikle:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Obavještava kupca o artiklima u njihovoj narudžbi koje je prodavac prihvatio ili odbio.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Potvrda stavki narudžbe dobavljača',
        'sample' => "Zdravo Alex, pregledali smo vašu narudžbu. Evo statusa potvrde za vaše artikle: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Pozdrav :param4, pregledali smo vašu narudžbu. Evo statusa potvrde za vaše artikle:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Obavještava kupca o artiklima u njihovoj narudžbi koje je prodavac prihvatio ili odbio.',
    ],



];
