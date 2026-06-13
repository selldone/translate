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
        'title' => 'Prihvati plaćanje',
        'sample' => "Vaša uplata od 267 USD uspješno je podmirena.<br>Narudžba: SM-425<br>Hvala, <b>Naziv vaše trgovine</b>.<br>Selldone",
        'body' => "Vaše :param2 plaćanje je uspješno izvršeno.\nNarudžba: :param1\nHvala, :param3.\nSelldone",
        'icon' => 'plaćanje',
        'description' => 'Pošaljite poruku kupcu trgovine kako biste ga obavijestili o uspješnom plaćanju.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Prihvati plaćanje',
        'sample' => "Nova uplata od 267 USD uspješno je podmirena.<br>Narudžba: SM-425<br>Hvala, <b>Naziv vaše trgovine</b>.<br>Selldone",
        'body' => "Novo :param2 plaćanje je uspješno podmireno.\nNarudžba: :param1\nHvala, :param3.\nSelldone",
        'icon' => 'plaćanje',
        'description' => 'Pošaljite poruku vlasniku trgovine i obavijestite ga o uspješnoj uplati.',

    ],

    'vendor-new-order' => [
        'title' => 'Nova narudžba dobavljača',
        'sample' => "Primili ste novu narudžbu od 200 USD. <br>Narudžba: <b>SM-870</b> za <b> Naziv dobavljača</b>.<br>✅ Proizvod A| SKU100001 |1x<br>✅ Proizvod B| SKU100002 |1x",
        'body' => "Primili ste novu :param2 narudžbu.\nRedoslijed: :param1 za :param3.\n:param4",
        'icon' => 'izlog trgovine',
        'description' => 'Pošaljite poruku dobavljaču da ga obavijestite o novoj narudžbi.',
    ],








    'shop-login' => [
        'title' => 'Kod za provjeru prijave',
        'sample' => "Vaš kod za prijavu je: <b>123456</b><br><b> Naziv vaše trgovine</b><br>Selldone",
        'body' => "Vaš kod za prijavu je: :param1\n:param2\nSelldone",
        'icon' => 'prijava',
        'description' => 'Pošaljite kod za prijavu kupcu da se prijavi u trgovinu.',

    ],

    'user-login' => [
        'title' => 'Poruka o uspješnoj prijavi',
        'sample' => "Poštovani <b>Name</b>, <br> Prijavili ste se na svoj račun putem <b>iPhone 165.250.300.1</b> na <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Poštovani :param1,\nPrijavili ste se na svoj račun putem :param2 na :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Pošaljite poruku nakon prijave kupca u trgovinu.',

    ],

    'avocado-order-submit' => [
        'title' => 'Nova narudžba za avokado je poslana i pošaljite kupcu',
        'sample' => "<b>Ime vaše trgovine</b><br>Dragi <b>Vaše ime</b>,<br>Primili smo vašu narudžbu i pregledavamo je.<br>Broj narudžbe: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nPoštovani :param1,\nZaprimili smo vašu narudžbu i pregledavamo je.\nNarudžba #: :param2\nSelldone",
        'icon' => 'provjera_činjenica',
        'description' => 'Pošaljite poruku kupcu nakon što naručite avokado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado primi novu narudžbu i pošalje prodavaču',
        'sample' => "Primili ste narudžbu avokada:<br>Trgovina: <b>Ime vaše trgovine</b><br>Kupac: <b>Ime kupca</b><br>Narudžba: <b>AVO-246</b><br>Selldone",
        'body' => "Dobili ste narudžbu avokada:\nTrgovina: :param1\nKupac: :param2\nNarudžba: :param3\nSelldone",
        'icon' => 'kako_registrirati',
        'description' => 'Pošaljite poruku vlasniku trgovine kako biste ga obavijestili o primanju nove narudžbe avokada.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Narudžba avokada spremna za plaćanje',
        'sample' => "<b>Naziv vaše trgovine</b><br>Vaša je narudžba potvrđena i može se platiti putem sljedeće veze.<br>Broj narudžbe: <b>AVO-246</b><br>Veza: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nVaša narudžba je potvrđena i možete je platiti putem sljedeće poveznice.\nNarudžba #: :param2\nVeza: :param1\nSelldone",
        'icon' => 'primitak',
        'description' => 'Pošaljite poruku s vezom za plaćanje kupcu nakon što prodavatelj postavi cijenu i potvrdi svoju narudžbu avokada.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Narudžba spremna za slanje',
        'sample' => "Bok <b>Alex</b>, dobre vijesti, vaša je narudžba sada spremna za slanje. <br>Narudžba: <b>SM-123</b>",
        'body' => "Bok :param4, dobre vijesti, vaša je narudžba sada spremna za slanje.\nNarudžba: :param1",
        'icon' => 'lokalna_dostava',
        'description' => 'Pošaljite poruku kupcu da ga obavijestite da je njegova narudžba spremna za slanje.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Narudžba spremna za preuzimanje',
        'sample' => "Bok Alex, dobre vijesti, vaša je narudžba sada spremna za preuzimanje. <br>Narudžba: <b>SM-123</b>",
        'body' => "Bok :param4, dobre vijesti, vaša je narudžba sada spremna za preuzimanje.\nNarudžba: :param1",
        'icon' => 'dijeljenje_lokacije',
        'description' => 'Pošaljite poruku kupcu da ga obavijestite da je njegova narudžba spremna za preuzimanje.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Narudžba dobavljača spremna za slanje',
        'sample' => "Bok <b>Alex</b>, dobre vijesti, vaša je narudžba sada spremna za slanje. <br>Narudžba: <b>SM-123</b>",
        'body' => "Bok :param4, dobre vijesti, vaša je narudžba sada spremna za slanje.\nNarudžba: :param1",
        'icon' => 'lokalna_dostava',
        'description' => 'Pošaljite poruku kupcu da ga obavijestite da je njegova narudžba spremna za slanje. Samo na tržištu s načinom izravne dostave i vrstom isporuke nije preuzimanje.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Narudžba dobavljača spremna za preuzimanje',
        'sample' => "Bok Alex, dobre vijesti, vaša je narudžba sada spremna za preuzimanje. <br>Narudžba: <b>SM-123</b>",
        'body' => "Bok :param4, dobre vijesti, vaša je narudžba sada spremna za preuzimanje.\nNarudžba: :param1",
        'icon' => 'dijeljenje_lokacije',
        'description' => 'Pošaljite poruku kupcu da ga obavijestite da je njegova narudžba spremna za preuzimanje. Samo na tržištu s načinom izravne dostave i vrstom dostave preuzimanje.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Potvrda narudžbe',
        'sample' => "Zdravo Alex, pregledali smo vašu narudžbu. Ovo je status potvrde za vaše stavke: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Pozdrav :param4, pregledali smo vašu narudžbu. Ovo je status potvrde za vaše stavke:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'zadatak_predan',
        'description' => 'Obavještava kupca o stavkama u njihovoj narudžbi koje je prodavatelj prihvatio ili odbio.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Potvrda narudžbe dobavljača',
        'sample' => "Zdravo Alex, pregledali smo vašu narudžbu. Ovo je status potvrde za vaše stavke: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Pozdrav :param4, pregledali smo vašu narudžbu. Ovo je status potvrde za vaše stavke:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'zadatak_predan',
        'description' => 'Obavještava kupca o stavkama u njihovoj narudžbi koje je prodavač prihvatio ili odbio.',
    ],



];
