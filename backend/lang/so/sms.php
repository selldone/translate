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
        'title' => 'Aqbal lacag bixinta',
        'sample' => "Lacag bixintaadii \$267 ayaa lagu dhameeyay si guul leh",
        'body' => "Lacag bixintaada :param2 ayaa lagu dhameeyay si guul leh.\nDalabka: :param1\nMahadsanid, :param3.\nSelldone",
        'icon' => 'lacag bixin',
        'description' => 'Fariin u dir macmiilka dukaanka si aad ugu wargeliso lacag bixinta guulaysata.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Aqbal lacag bixinta',
        'sample' => "Lacag bixin cusub oo \$267 ah ayaa lagu dhameeyay si guul leh",
        'body' => "Lacag bixinta cusub ee :param2 ayaa lagu dhameeyay si guul leh.\nDalabka: :param1\nMahadsanid, :param3.\nSelldone",
        'icon' => 'lacag bixin',
        'description' => 'Fariin u dir mulkiilaha dukaanka si uu ugu wargaliyo lacag bixinta guulaysata.',

    ],

    'vendor-new-order' => [
        'title' => 'Iibiyaha Dalabka Cusub',
        'sample' => "Waxaad heshay dalab cusub \$200| SKU100001 |1x<br>✅ Badeecada B| SKU100002 |1x",
        'body' => "Waxaad heshay dalab cusub oo :param2 ah.\nDalabka: :param1 ee :param3.\n:param4",
        'icon' => 'dukaanka hortiisa',
        'description' => 'U dir fariin iibiyaha si aad ugu wargeliso dalabka cusub.',
    ],








    'shop-login' => [
        'title' => 'Koodhka xaqiijinta gal',
        'sample' => "Your login code is: <b>123456</b><br><b>Your store name</b><br>Selldone",
        'body' => "Summada galitaankaagu waa: :param1\n:param2\nSelldone",
        'icon' => 'gelid',
        'description' => 'U dir lambarka gelitaanka macmiilka si uu u galo dukaanka.',

    ],

    'user-login' => [
        'title' => 'Soo gal fariinta guusha',
        'sample' => "Gacaliye <b>Name</b>,<br>Waxaad akoonkaaga ku soo gashay <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Gacaliye :param1,\nWaxaad akoonkaaga ku gashay :param2 ee :param3.\nSelldone",
        'icon' => 'nidaamka_amniga_cusbooneysiinta_wanaagsan',
        'description' => 'Fariin dir ka dib marka macmiilku soo galo dukaanka.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado cusub oo la gudbiyay u dir iibsadaha',
        'sample' => "<b>Your store name</b><br>Dear <b>Your name</b>,<br>We have received your order and we are reviewing it.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nGacaliye :param1,\nDalabkaagii waanu helnay waanan dib u eegis ku samaynaynaa\nDalabka #: :param2\nSelldone",
        'icon' => 'xaqiiqada_hubi',
        'description' => 'Fariin u dir macmiilka ka dib markaad dalbato avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado waxay heshaa amar cusub oo loo soo diro iibiyaha',
        'sample' => "You received an Avocado order:<br>Store: <b>Your store name</b><br>Buyer: <b>Buyer name</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "Waxaad heshay dalabka avocado:\nDukaanka: :param1\nIibsadaha: :param2\nDalabka: :param3\nSelldone",
        'icon' => 'sida_loo_xuso',
        'description' => 'Fariin u dir mulkiilaha dukaanka si uu ugu wargaliyo helida dalabka Avocado ee cusub.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Dalabka avocado diyaar u ah inuu bixiyo',
        'sample' => "<b>Your store name</b><br>Your order has been confirmed and can be paid through the following link.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nDalabkaaga waa la xaqiijiyay waxaana lagu bixin karaa xiriirka soo socda.\nDalabka #: :param2\nXiriirinta: :param1\nSelldone",
        'icon' => 'rasiidka',
        'description' => 'U dir fariin leh isku xirka lacag bixinta macaamilka ka dib iibiyuhu wuxuu go\'aamiyay qiimaha oo xaqiiji dalabkooda Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Dalbo diyaar u ah in la raro',
        'sample' => "Hi <b>Alex</b>, war wanaagsan, dalabkaagu hadda waa diyaar in la soo raro.",
        'body' => "Hi :param4, war wanaagsan, dalabkaagu hadda waa diyaar in la raro.\nDalabka: :param1",
        'icon' => 'maxali ah_rabin',
        'description' => 'Fariin u dir macmiilka si aad ugu wargeliso in dalabkoodu diyaar u yahay in la raro.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Dalbo diyaar ah in la qaado',
        'sample' => "Hi Alex, war wanaagsan, dalabkaga hadda waa diyaar in la qaado.",
        'body' => "Hi :param4, war wanaagsan, dalabkaaga hadda waa diyaar in la soo qaado.\nDalabka: :param1",
        'icon' => 'wadaag_goob',
        'description' => 'Fariin u dir macmiilka si aad ugu wargeliso in dalabkoodu diyaar u yahay in la qaado.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Dalabka iibiyaha oo diyaar u ah in la raro',
        'sample' => "Hi <b>Alex</b>, war wanaagsan, dalabkaagu hadda waa diyaar in la soo raro.",
        'body' => "Hi :param4, war wanaagsan, dalabkaagu hadda waa diyaar in la raro.\nDalabka: :param1",
        'icon' => 'maxali ah_rabin',
        'description' => 'Fariin u dir macmiilka si aad ugu wargeliso in dalabkoodu diyaar u yahay in la raro. Kaliya goobta suuqa leh Habka Rarista Tooska ah iyo nooca gaarsiintu maaha Soo qaadis.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Dalabka iibiyaha oo diyaar u ah in la qaado',
        'sample' => "Hi Alex, war wanaagsan, dalabkaga hadda waa diyaar in la qaado.",
        'body' => "Hi :param4, war wanaagsan, dalabkaaga hadda waa diyaar in la soo qaado.\nDalabka: :param1",
        'icon' => 'wadaag_goob',
        'description' => 'Fariin u dir macmiilka si aad ugu wargeliso in dalabkoodu diyaar u yahay in la qaado. Kaliya goobta suuqa leh Habka Rarista Tooska ah iyo nooca gaarsiintu waa Qaadis.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Dalbo Xaqiijinta Walxaha',
        'sample' => "Salaan Alex, waanu dib u eegnay dalabkaaga. Waa kan heerka xaqiijinta alaabtaada:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, waanu dib u eegnay dalabkaaga. Waa kan heerka xaqiijinta alaabtaada:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'shaqada_soo gashay',
        'description' => 'Ogeysii macmiilka alaabta siday u kala horreeyaan ee uu iibiyuhu aqbalay ama diiday.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Xaqiijinta Alaabta Dalabka iibiyaha',
        'sample' => "Salaan Alex, waanu dib u eegnay dalabkaaga. Waa kan heerka xaqiijinta alaabtaada:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, waanu dib u eegnay dalabkaaga. Waa kan heerka xaqiijinta alaabtaada:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'shaqada_soo gashay',
        'description' => 'Ogaysiisa macmiilka alaabta siday u kala horeeyaan ee uu aqbalay ama diiday iibiyuhu.',
    ],



];
