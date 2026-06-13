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
        'title' => 'Acceptar el pagament',
        'sample' => "El vostre pagament de 267 \$ s'ha liquidat correctament.<br> Comanda: SM-425<br> Gràcies, <b>el nom de la teva botiga</b> .<br> Selldone",
        'body' => "El vostre pagament :param2 s'ha liquidat correctament.\nComanda: :param1\nGràcies, :param3.\nSelldone",
        'icon' => 'pagament',
        'description' => 'Envieu un missatge al client de la botiga per informar-vos del pagament correcte.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Acceptar el pagament',
        'sample' => "El nou pagament de 267 \$ s'ha liquidat correctament.<br> Comanda: SM-425<br> Gràcies, <b>el nom de la teva botiga</b> .<br> Selldone",
        'body' => "El nou pagament :param2 s'ha liquidat correctament.\nComanda: :param1\nGràcies, :param3.\nSelldone",
        'icon' => 'pagament',
        'description' => 'Envieu un missatge al propietari de la botiga per informar-lo del pagament correcte.',

    ],

    'vendor-new-order' => [
        'title' => 'Nova comanda del venedor',
        'sample' => "Heu rebut una comanda nova de 200 \$.<br>Ordre: <b>SM-870</b> per a <b>Nom del proveïdor</b>.<br>✅ Producte A| SKU100001 |1x<br>✅ Producte B| SKU100002 |1x",
        'body' => "Heu rebut una comanda :param2 nova.\nComanda: :param1 per a :param3.\n:param4",
        'icon' => 'aparador',
        'description' => 'Envieu un missatge al venedor per informar-lo sobre una nova comanda.',
    ],








    'shop-login' => [
        'title' => 'Codi de verificació d\'inici de sessió',
        'sample' => "El vostre codi d'inici de sessió és: <b>123456</b><br> <b>Nom de la teva botiga</b><br> Selldone",
        'body' => "El vostre codi d'inici de sessió és: :param1\n:param2\nSelldone",
        'icon' => 'inici de sessió',
        'description' => 'Envieu el codi d\'inici de sessió al client per iniciar sessió a la botiga.',

    ],

    'user-login' => [
        'title' => 'Missatge d\'èxit d\'inici de sessió',
        'sample' => "Benvolgut <b>Nom</b> ,<br> Heu iniciat sessió al vostre compte mitjançant l' <b>iPhone 165.250.300.1</b> <b>el</b> 08/05/2021 a les 09:14.<br> Selldone",
        'body' => "Benvolgut :param1,\nHeu iniciat sessió al vostre compte per :param2 a :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Envieu un missatge després de l\'inici de sessió del client a la botiga.',

    ],

    'avocado-order-submit' => [
        'title' => 'Nova comanda d\'alvocat enviada enviar al comprador',
        'sample' => "<b>Nom de la teva botiga</b><br> Benvolgut <b>el teu nom</b> ,<br> Hem rebut la teva comanda i l'estem revisant.<br> Núm. de comanda: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nBenvolgut :param1,\nHem rebut la teva comanda i l'estem revisant.\nNúm. de comanda: :param2\nSelldone",
        'icon' => 'verificació de fets',
        'description' => 'Envieu un missatge al client després de fer una comanda d\'alvocat.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'L\'alvocat rep una nova comanda enviada al venedor',
        'sample' => "Has rebut una comanda d'alvocat:<br> Botiga: <b>el nom de la vostra botiga</b><br> Comprador: <b>nom del comprador</b><br> Comanda: <b>AVO-246</b><br> Selldone",
        'body' => "Has rebut una comanda d'alvocat:\nBotiga: :param1\nComprador: :param2\nComanda: :param3\nSelldone",
        'icon' => 'com_reg',
        'description' => 'Envieu un missatge al propietari de la botiga per informar-los sobre la recepció d\'una nova comanda d\'alvocat.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Comanda d\'alvocat a punt per pagar',
        'sample' => "<b>Nom de la teva botiga</b><br> La teva comanda ha estat confirmada i es pot pagar a través del següent enllaç.<br> Núm. de comanda: <b>AVO-246</b><br> Enllaç: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nLa teva comanda ha estat confirmada i es pot pagar a través del següent enllaç.\nNúm. de comanda: :param2\nEnllaç: :param1\nSelldone",
        'icon' => 'rebut',
        'description' => 'Envieu un missatge amb l\'enllaç de pagament al client després que el venedor hagi establert el cost i confirmeu la seva comanda d\'alvocat.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Comanda a punt per enviar',
        'sample' => "Hola, <b>Alex</b>, bones notícies, la teva comanda ja està a punt per ser enviada.<br>Ordre: <b>SM-123</b>",
        'body' => "Hola :param4, bones notícies, la teva comanda ja està a punt per ser enviada.\nComanda: :param1",
        'icon' => 'enviament_local',
        'description' => 'Envieu un missatge al client per informar-li que la seva comanda està a punt per ser enviada.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Comanda a punt per recollir',
        'sample' => "Hola Alex, bones notícies, la teva comanda ja està a punt per ser recollida.<br>Ordre: <b>SM-123</b>",
        'body' => "Hola :param4, bones notícies, la teva comanda ja està a punt per ser recollida.\nComanda: :param1",
        'icon' => 'compartir_ubicació',
        'description' => 'Envieu un missatge al client per informar-li que la seva comanda està a punt per ser recollida.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Comanda del venedor a punt per enviar',
        'sample' => "Hola, <b>Alex</b>, bones notícies, la teva comanda ja està a punt per ser enviada.<br>Ordre: <b>SM-123</b>",
        'body' => "Hola :param4, bones notícies, la teva comanda ja està a punt per ser enviada.\nComanda: :param1",
        'icon' => 'enviament_local',
        'description' => 'Envieu un missatge al client per informar-li que la seva comanda està a punt per ser enviada. Només al mercat amb el mode d\'enviament directe i el tipus de lliurament no és Recollida.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Comanda del venedor a punt per recollir',
        'sample' => "Hola Alex, bones notícies, la teva comanda ja està a punt per ser recollida.<br>Ordre: <b>SM-123</b>",
        'body' => "Hola :param4, bones notícies, la teva comanda ja està a punt per ser recollida.\nComanda: :param1",
        'icon' => 'compartir_ubicació',
        'description' => 'Envieu un missatge al client per informar-li que la seva comanda està a punt per ser recollida. Només al mercat amb el mode d\'enviament directe i el tipus de lliurament és Recollida.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Confirmació d\'articles de comanda',
        'sample' => "Hola Alex, hem revisat la teva comanda. Aquí teniu l'estat de confirmació dels vostres articles: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hola :param4, hem revisat la teva comanda. Aquí teniu l'estat de confirmació dels vostres articles:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignació_entregada',
        'description' => 'Notifica al client els articles de la seva comanda que han estat acceptats o rebutjats pel venedor.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Confirmació d\'articles de comanda del proveïdor',
        'sample' => "Hola Alex, hem revisat la teva comanda. Aquí teniu l'estat de confirmació dels vostres articles: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hola :param4, hem revisat la teva comanda. Aquí teniu l'estat de confirmació dels vostres articles:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignació_entregada',
        'description' => 'Notifica al client els articles de la seva comanda que han estat acceptats o rebutjats pel venedor.',
    ],



];
