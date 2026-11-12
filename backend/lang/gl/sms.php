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
        'title' => 'Aceptar o pago',
        'sample' => "O teu pago de 267 \$ saldouse correctamente.<br>Pedido: SM-425<br>Grazas, <b>O nome da túa tenda</b>.<br>Selldone",
        'body' => "O teu pago :param2 saldouse correctamente.\nPedido: :param1\nGrazas, :param3.\nSelldone",
        'icon' => 'pago',
        'description' => 'Envía unha mensaxe ao cliente da tenda para informarlle sobre o pago exitoso.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Aceptar o pago',
        'sample' => "O novo pago de 267 USD saldouse correctamente.<br>Pedido: SM-425<br>Grazas, <b>O nome da túa tenda</b>.<br>Selldone",
        'body' => "O novo pago :param2 saldouse correctamente.\nPedido: :param1\nGrazas, :param3.\nSelldone",
        'icon' => 'pago',
        'description' => 'Envía unha mensaxe ao propietario da tenda para informarlle sobre o pago exitoso.',

    ],

    'vendor-new-order' => [
        'title' => 'Vendedor Novo Orde',
        'sample' => "Recibiches un novo pedido de 200 \$.<br>Pedido: <b>SM-870</b> para <b>Nome do vendedor</b>.<br>✅ Produto A| SKU100001 |1x<br>✅ Produto B| SKU100002 |1x",
        'body' => "Recibiches un novo pedido :param2.\nOrde: :param1 para :param3.\n:param4",
        'icon' => 'escaparate',
        'description' => 'Envía unha mensaxe ao vendedor para informarlle sobre un novo pedido.',
    ],








    'shop-login' => [
        'title' => 'Código de verificación de inicio de sesión',
        'sample' => "O teu código de inicio de sesión é: <b>123456</b><br><b>O nome da túa tenda</b><br>Selldone",
        'body' => "O teu código de inicio de sesión é: :param1\n:param2\nSelldone",
        'icon' => 'iniciar sesión',
        'description' => 'Envía o código de inicio de sesión ao cliente para iniciar sesión na tenda.',

    ],

    'user-login' => [
        'title' => 'Mensaxe de éxito de inicio de sesión',
        'sample' => "Estimado <b>Name</b>,<br>Inicioches sesión na túa conta mediante <b>iPhone 165.250.300.1</b> en <b>5/8/2021 9:14AMQQQQQ007QQQQ006QQQQ006",
        'body' => "Estimado :param1,\nIniciaches sesión na túa conta por :param2 en :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Envía unha mensaxe despois de que o cliente inicie sesión na tenda.',

    ],

    'avocado-order-submit' => [
        'title' => 'Novo pedido de aguacate enviado enviar ao comprador',
        'sample' => "<b>Nome da túa tenda</b><br>Estimado <b>O teu nome</b>,<br>Recibimos o teu pedido e estamos revisándoo.<br>N.º de pedido: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nEstimado :param1,\nRecibimos o teu pedido e estamos revisándoo.\nNúmero de pedido: :param2\nSelldone",
        'icon' => 'comprobación_de_factos',
        'description' => 'Envía unha mensaxe ao cliente despois de facer un pedido de aguacate.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'O aguacate recibe un novo pedido enviado ao vendedor',
        'sample' => "Recibiches un pedido de aguacate: <br>Tenda: <b>Nome da túa tenda</b><br>Comprador: <b>Nome do comprador</b><br>Pedido: <b>AVO-246</b><br>Selldone",
        'body' => "Recibiches un pedido de aguacate:\nTenda: :param1\nComprador: :param2\nPedido: :param3\nSelldone",
        'icon' => 'como_reg',
        'description' => 'Envía unha mensaxe ao propietario da tenda para informarlle sobre a recepción dun novo pedido de Avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Pedido de aguacate listo para pagar',
        'sample' => "<b>Nome da túa tenda</b><br>O teu pedido foi confirmado e pódese pagar a través da seguinte ligazón.<br>N.º de pedido: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nO seu pedido foi confirmado e pódese pagar a través da seguinte ligazón.\nNúmero de pedido: :param2\nLigazón: :param1\nSelldone",
        'icon' => 'recibo',
        'description' => 'Envía unha mensaxe coa ligazón de pago ao cliente despois de que o vendedor estableza o custo e confirme o seu pedido de aguacate.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Pedido listo para enviar',
        'sample' => "Ola, <b>Alex</b>, boas noticias, o teu pedido xa está listo para ser enviado.<br>Pedido: <b>SM-123</b>",
        'body' => "Ola :param4, boas novas, o teu pedido xa está listo para ser enviado.\nPedido: :param1",
        'icon' => 'envío_local',
        'description' => 'Envía unha mensaxe ao cliente para informarlle de que o seu pedido está listo para ser enviado.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pedido listo para recoller',
        'sample' => "Ola Alex, boas noticias: o teu pedido xa está listo para ser retirado.<br>Pedido: <b>SM-123</b>",
        'body' => "Ola :param4, boas noticias, o teu pedido xa está listo para ser retirado.\nPedido: :param1",
        'icon' => 'compartir_localización',
        'description' => 'Envía unha mensaxe ao cliente para informarlle de que o seu pedido está listo para ser retirado.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pedido do vendedor listo para enviar',
        'sample' => "Ola, <b>Alex</b>, boas noticias, o teu pedido xa está listo para ser enviado.<br>Pedido: <b>SM-123</b>",
        'body' => "Ola :param4, boas novas, o teu pedido xa está listo para ser enviado.\nPedido: :param1",
        'icon' => 'envío_local',
        'description' => 'Envía unha mensaxe ao cliente para informarlle de que o seu pedido está listo para ser enviado. Só no mercado co modo de envío directo e o tipo de entrega non é a recollida.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pedido do vendedor listo para recoller',
        'sample' => "Ola Alex, boas noticias: o teu pedido xa está listo para ser retirado.<br>Pedido: <b>SM-123</b>",
        'body' => "Ola :param4, boas noticias, o teu pedido xa está listo para ser retirado.\nPedido: :param1",
        'icon' => 'compartir_localización',
        'description' => 'Envía unha mensaxe ao cliente para informarlle de que o seu pedido está listo para ser retirado. Só no mercado co modo de envío directo e o tipo de entrega é a recollida.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Confirmación de pedidos de artigos',
        'sample' => "Ola Alex, revisamos o teu pedido. Este é o estado de confirmación dos teus artigos: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Ola :param4, revisamos o teu pedido. Este é o estado de confirmación dos teus artigos:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'asignación_entregada',
        'description' => 'Notifica ao cliente sobre os artigos do seu pedido que foron aceptados ou rexeitados polo vendedor.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Confirmación de artigos do pedido do provedor',
        'sample' => "Ola Alex, revisamos o teu pedido. Este é o estado de confirmación dos teus artigos: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Ola :param4, revisamos o teu pedido. Este é o estado de confirmación dos teus artigos:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'asignación_entregada',
        'description' => 'Notifica ao cliente sobre os artigos do seu pedido que foron aceptados ou rexeitados polo vendedor.',
    ],



];
