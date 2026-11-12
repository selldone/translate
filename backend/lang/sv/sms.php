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
        'title' => 'Acceptera betalning',
        'sample' => "Din betalning på 267 \$ har lösts.<br> Beställning: SM-425<br> Tack, <b>ditt butiksnamn</b> .<br> Selldone",
        'body' => "Din :param2-betalning löstes.\nBeställning: :param1\nTack, :param3.\nSelldone",
        'icon' => 'betalning',
        'description' => 'Skicka ett meddelande till butikskund för att informera om lyckad betalning.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Acceptera betalning',
        'sample' => "Ny betalning på 267 \$ löstes.<br> Beställning: SM-425<br> Tack, <b>ditt butiksnamn</b> .<br> Selldone",
        'body' => "Ny :param2-betalning löstes framgångsrikt.\nBeställning: :param1\nTack, :param3.\nSelldone",
        'icon' => 'betalning',
        'description' => 'Skicka ett meddelande till butiksägaren för att informera dem om framgångsrik betalning.',

    ],

    'vendor-new-order' => [
        'title' => 'Säljarens ny beställning',
        'sample' => "Du har fått en ny beställning på \$200.<br>Beställning: <b>SM-870</b> för <b>Leverantörsnamn</b>.<br>✅ Produkt A| SKU100001 |1x<br>✅ Produkt B| SKU100002 |1x",
        'body' => "Du har fått en ny :param2-beställning.\nBeställning: :param1 för :param3.\n:param4",
        'icon' => 'skyltfönster',
        'description' => 'Skicka ett meddelande till leverantören för att informera dem om en ny beställning.',
    ],








    'shop-login' => [
        'title' => 'Verifieringskod för inloggning',
        'sample' => "Din inloggningskod är: <b>123456</b><br> <b>Ditt butiksnamn</b><br> Selldone",
        'body' => "Din inloggningskod är: :param1\n:param2\nSelldone",
        'icon' => 'logga in',
        'description' => 'Skicka inloggningskod till kunden för att logga in i butiken.',

    ],

    'user-login' => [
        'title' => 'Meddelande om inloggning',
        'sample' => "Kära <b>namn</b> ,<br> Du har loggat in på ditt konto med <b>iPhone 165.250.300.1</b> <b>den 5/8/2021 9:14</b> .<br> Selldone",
        'body' => "Bästa :param1,\nDu har loggat in på ditt konto av :param2 på :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Skicka ett meddelande efter att kunden loggat in i butiken.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avokado ny beställning skickas till köparen',
        'sample' => "<b>Ditt butiksnamn</b><br> Kära <b>ditt namn</b> ,<br> Vi har tagit emot din beställning och vi granskar den.<br> Beställningsnummer: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nBästa :param1,\nVi har tagit emot din beställning och vi granskar den.\nBeställningsnummer: :param2\nSelldone",
        'icon' => 'faktakoll',
        'description' => 'Skicka ett meddelande till kunden efter att ha lagt en avokadobeställning.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado får ny beställning skickas till säljaren',
        'sample' => "Du har fått en avokadobeställning:<br> Butik: <b>Ditt butiksnamn</b><br> Köpare: <b>Köparens namn</b><br> Beställning: <b>AVO-246</b><br> Selldone",
        'body' => "Du fick en avokadobeställning:\nButik: :param1\nKöpare: :param2\nBeställning: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Skicka ett meddelande till butiksägaren för att informera dem om att få en ny avokadobeställning.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avokadobeställning redo att betala',
        'sample' => "<b>Ditt butiksnamn</b><br>Din beställning har bekräftats och kan betalas via följande länk.<br>Beställningsnummer: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nDin beställning har bekräftats och kan betalas via följande länk.\nBeställningsnummer: :param2\nLänk: :param1\nSelldone",
        'icon' => 'kvitto',
        'description' => 'Skicka ett meddelande med betalningslänken till kunden efter att säljaren ställt in kostnaden och bekräfta sin Avocado-beställning.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Beställning redo att skickas',
        'sample' => "Hej <b>Alex</b>, goda nyheter, din beställning är nu redo att skickas.<br>Beställning: <b>SM-123</b>",
        'body' => "Hej :param4, goda nyheter, din beställning är nu redo att skickas.\nBeställning: :param1",
        'icon' => 'local_shipping',
        'description' => 'Skicka ett meddelande till kunden för att informera dem om att deras beställning är redo att skickas.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Beställning redo att hämtas',
        'sample' => "Hej Alex, goda nyheter, din beställning är nu redo att hämtas.<br>Beställning: <b>SM-123</b>",
        'body' => "Hej :param4, goda nyheter, din beställning är nu redo att hämtas.\nBeställning: :param1",
        'icon' => 'dela_plats',
        'description' => 'Skicka ett meddelande till kunden för att informera dem om att deras beställning är redo att hämtas.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Leverantörsorder redo att skickas',
        'sample' => "Hej <b>Alex</b>, goda nyheter, din beställning är nu redo att skickas.<br>Beställning: <b>SM-123</b>",
        'body' => "Hej :param4, goda nyheter, din beställning är nu redo att skickas.\nBeställning: :param1",
        'icon' => 'local_shipping',
        'description' => 'Skicka ett meddelande till kunden för att informera dem om att deras beställning är redo att skickas. Bara på marknaden med direktleveransläge och leveranstyp är inte upphämtning.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Leverantörsbeställning redo att hämtas',
        'sample' => "Hej Alex, goda nyheter, din beställning är nu redo att hämtas.<br>Beställning: <b>SM-123</b>",
        'body' => "Hej :param4, goda nyheter, din beställning är nu redo att hämtas.\nBeställning: :param1",
        'icon' => 'dela_plats',
        'description' => 'Skicka ett meddelande till kunden för att informera dem om att deras beställning är redo att hämtas. Bara på marknaden med direktleveransläge och leveranstyp är Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Beställningsbekräftelse',
        'sample' => "Hej Alex, vi har granskat din beställning. Here is the confirmation status for your items:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hej :param4, vi har granskat din beställning. Här är bekräftelsestatusen för dina varor:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'uppdrag_inlämnat',
        'description' => 'Meddelar kunden om de varor i deras beställning som har accepterats eller avvisats av säljaren.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Bekräftelse av leverantörsbeställningsartiklar',
        'sample' => "Hej Alex, vi har granskat din beställning. Here is the confirmation status for your items:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hej :param4, vi har granskat din beställning. Här är bekräftelsestatusen för dina varor:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'uppdrag_inlämnat',
        'description' => 'Notifies the customer about the items in their order that have been accepted or rejected by the vendor.',
    ],



];
