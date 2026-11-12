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
        'title' => 'Samþykkja greiðslu',
        'sample' => "267\$ greiðslan þín var gerð upp.<br> Pöntun: SM-425<br> Takk, <b>nafn verslunarinnar þitt</b> .<br> Selldone",
        'body' => ":param2 greiðslan þín var gerð upp með góðum árangri.\nPöntun: :param1\nTakk, :param3.\nSelldone",
        'icon' => 'greiðslu',
        'description' => 'Sendu skilaboð til viðskiptavina verslunar til að upplýsa um árangursríka greiðslu.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Samþykkja greiðslu',
        'sample' => "Ný 267\$ greiðsla tókst upp.<br> Pöntun: SM-425<br> Takk, <b>nafn verslunarinnar þitt</b> .<br> Selldone",
        'body' => "Ný :param2 greiðsla var gerð upp með góðum árangri.\nPöntun: :param1\nTakk, :param3.\nSelldone",
        'icon' => 'greiðslu',
        'description' => 'Sendu verslunareiganda skilaboð til að upplýsa hann um vel heppnaða greiðslu.',

    ],

    'vendor-new-order' => [
        'title' => 'Ný pöntun söluaðila',
        'sample' => "Þú fékkst nýja \$200 pöntun.<br>Pöntun: <b>SM-870</b> fyrir <b> Nafn söluaðila</b>.<br>✅ Vara A| SKU100001 |1x<br>✅ Vara B| SKU100002 |1x",
        'body' => "Þú fékkst nýja :param2 pöntun.\nPöntun: :param1 fyrir :param3.\n:param4",
        'icon' => 'verslunarhús',
        'description' => 'Sendu skilaboð til seljanda til að upplýsa hann um nýja pöntun.',
    ],








    'shop-login' => [
        'title' => 'Staðfestingarkóði innskráningar',
        'sample' => "Innskráningarkóði þinn er: <b>123456</b><br> <b>Nafn verslunarinnar þíns</b><br> Selldone",
        'body' => "Innskráningarkóði þinn er: :param1\n:param2\nSelldone",
        'icon' => 'innskrá',
        'description' => 'Sendu innskráningarkóða til viðskiptavinarins til að skrá þig inn í búðina.',

    ],

    'user-login' => [
        'title' => 'Skilaboð um árangur innskráningar',
        'sample' => "Kæri <b>nafni</b> ,<br> Þú hefur skráð þig inn á reikninginn þinn með <b>iPhone 165.250.300.1</b> á <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Kæra :param1,\nÞú hefur skráð þig inn á reikninginn þinn með :param2 á :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Sendu skilaboð eftir að viðskiptavinurinn hefur skráð sig inn í búðina.',

    ],

    'avocado-order-submit' => [
        'title' => 'Ný pöntun avókadó send send til kaupanda',
        'sample' => "<b>Nafn verslunarinnar þíns</b><br> Kæri <b>nafn þitt</b> ,<br> Við höfum móttekið pöntunina þína og erum að skoða hana.<br> Pöntunarnúmer: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nKæra :param1,\nVið höfum móttekið pöntunina þína og erum að skoða hana.\nPöntunarnúmer: :param2\nSelldone",
        'icon' => 'staðreynd_check',
        'description' => 'Sendu skilaboð til viðskiptavinarins eftir að hafa lagt inn avókadó pöntun.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avókadó fá nýja pöntun send til seljanda',
        'sample' => "Þú fékkst avókadópöntun:<br> Verslun: <b>Nafn verslunarinnar þíns</b><br> Kaupandi: <b>Nafn kaupanda</b><br> Pöntun: <b>AVO-246</b><br> Selldone",
        'body' => "Þú fékkst avókadó pöntun:\nVerslun: :param1\nKaupandi: :param2\nPöntun: :param3\nSelldone",
        'icon' => 'hvernig_á_á_regla',
        'description' => 'Sendu skilaboð til eiganda verslunarinnar til að upplýsa hann um að fá nýja avókadó pöntun.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avókadópöntun tilbúin til greiðslu',
        'sample' => "<b>Nafn verslunarinnar þíns</b><br> Pöntun þín hefur verið staðfest og hægt er að greiða hana í gegnum eftirfarandi hlekk.<br> Pöntunarnúmer: <b>AVO-246</b><br> Tengill: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nPöntun þín hefur verið staðfest og hægt er að greiða hana í gegnum eftirfarandi hlekk.\nPöntunarnúmer: :param2\nTengill: :param1\nSelldone",
        'icon' => 'kvittun',
        'description' => 'Sendu skilaboð með greiðslutenglinum til viðskiptavinarins eftir að seljandi setti kostnað og staðfestu avókadópöntun sína.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Pöntun tilbúin til sendingar',
        'sample' => "Hæ <b>Alex</b>, góðar fréttir, pöntunin þín er nú tilbúin til sendingar.<br>Pöntun: <b>SM-123</b>",
        'body' => "Hæ :param4, góðar fréttir, pöntunin þín er nú tilbúin til sendingar.\nPöntun: :param1",
        'icon' => 'staðbundin_sending',
        'description' => 'Sendu skilaboð til viðskiptavinarins til að láta hann vita að pöntun þeirra sé tilbúin til sendingar.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pöntun tilbúin til afhendingar',
        'sample' => "Hæ Alex, góðar fréttir, pöntunin þín er nú tilbúin til að verða sótt.<br>Pöntun: <b>SM-123</b>",
        'body' => "Hæ :param4, góðar fréttir, pöntunin þín er nú tilbúin til að verða sótt.\nPöntun: :param1",
        'icon' => 'deila_staðsetningu',
        'description' => 'Sendu skilaboð til viðskiptavinarins til að láta hann vita að pöntun þeirra sé tilbúin til afhendingar.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pöntun söluaðila tilbúin til sendingar',
        'sample' => "Hæ <b>Alex</b>, góðar fréttir, pöntunin þín er nú tilbúin til sendingar.<br>Pöntun: <b>SM-123</b>",
        'body' => "Hæ :param4, góðar fréttir, pöntunin þín er nú tilbúin til sendingar.\nPöntun: :param1",
        'icon' => 'staðbundin_sending',
        'description' => 'Sendu skilaboð til viðskiptavinarins til að láta hann vita að pöntun þeirra sé tilbúin til sendingar. Bara á markaði með beinan sendingarham og sendingartegund er ekki afhending.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pöntun söluaðila tilbúin til afhendingar',
        'sample' => "Hæ Alex, góðar fréttir, pöntunin þín er nú tilbúin til að verða sótt.<br>Pöntun: <b>SM-123</b>",
        'body' => "Hæ :param4, góðar fréttir, pöntunin þín er nú tilbúin til að verða sótt.\nPöntun: :param1",
        'icon' => 'deila_staðsetningu',
        'description' => 'Sendu skilaboð til viðskiptavinarins til að láta hann vita að pöntun þeirra sé tilbúin til afhendingar. Bara á markaði með beinan sendingarham og sendingartegund er Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Staðfesting pöntunarvara',
        'sample' => "Halló Alex, við höfum farið yfir pöntunina þína. Hér er staðfestingarstaðan fyrir hlutina þína: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Halló :param4, við höfum farið yfir pöntunina þína. Hér er staðfestingarstaðan fyrir hlutina þína:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'verkefni_skilað',
        'description' => 'Tilkynnir viðskiptavinum um hluti í pöntun þeirra sem hafa verið samþykktir eða hafnað af seljanda.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Staðfesting á pöntunarvörum söluaðila',
        'sample' => "Halló Alex, við höfum farið yfir pöntunina þína. Hér er staðfestingarstaðan fyrir hlutina þína: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Halló :param4, við höfum farið yfir pöntunina þína. Hér er staðfestingarstaðan fyrir hlutina þína:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'verkefni_skilað',
        'description' => 'Lætur viðskiptavininn vita um hlutina í pöntuninni sem seljandi hefur samþykkt eða hafnað.',
    ],



];
