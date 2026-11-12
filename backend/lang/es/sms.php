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
        'title' => 'Aceptar pago para el cliente',
        'sample' => "Tu pago de \$267 se liquidó correctamente.<br>Pedido: SM-425<br>Gracias, <b>El nombre de tu tienda</b>.<br>Selldone",
        'body' => "Tu pago de :param2 se liquidó correctamente.\nPedido: :param1\nGracias, :param3.\nSelldone",
        'icon' => 'payment',
        'description' => 'Envía un mensaje al cliente de la tienda para informarle del pago realizado con éxito.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Aceptar pago para el vendedor',
        'sample' => "Se ha liquidado correctamente un nuevo pago de \$267.<br>Pedido: SM-425<br>Gracias, <b>El nombre de tu tienda</b>.<br>Selldone",
        'body' => "Se ha liquidado correctamente un nuevo pago de :param2.\nPedido: :param1\nGracias, :param3.\nSelldone",
        'icon' => 'payment',
        'description' => 'Envía un mensaje al propietario de la tienda para informarle del pago realizado con éxito.',

    ],

    'vendor-new-order' => [
        'title' => 'Nuevo pedido del vendedor',
        'sample' => "Recibiste un nuevo pedido de \$200.<br>Pedido: <b>SM-870</b> para <b>Nombre del vendedor</b>.<br>✅ Producto A | SKU100001 | 1x<br>✅ Producto B | SKU100002 | 1x",
        'body' => "Recibiste un nuevo pedido de :param2.\nPedido: :param1 para :param3.\n:param4",
        'icon' => 'storefront',
        'description' => 'Envía un mensaje al vendedor para informarle de un nuevo pedido.',
    ],








    'shop-login' => [
        'title' => 'Código de verificación de inicio de sesión',
        'sample' => "Tu código de inicio de sesión es: <b>123456</b><br><b>El nombre de tu tienda</b><br>Selldone",
        'body' => "Tu código de inicio de sesión es: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Envía el código de inicio de sesión al cliente para iniciar sesión en la tienda.',

    ],

    'user-login' => [
        'title' => 'Mensaje de inicio de sesión exitoso',
        'sample' => "Hola <b>Nombre</b>,<br>Has iniciado sesión en tu cuenta desde <b>iPhone 165.250.300.1</b> el <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Hola :param1,\nHas iniciado sesión en tu cuenta desde :param2 el :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Envía un mensaje después de que el cliente inicie sesión en la tienda.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado: nuevo pedido enviado al comprador',
        'sample' => "<b>El nombre de tu tienda</b><br>Hola <b>Tu nombre</b>,<br>Hemos recibido tu pedido y lo estamos revisando.<br>N.º de pedido: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nHola :param1,\nHemos recibido tu pedido y lo estamos revisando.\nN.º de pedido: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Envía un mensaje al cliente después de que se realice un pedido de Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado: nuevo pedido recibido, enviado al vendedor',
        'sample' => "Recibiste un pedido de Avocado:<br>Tienda: <b>El nombre de tu tienda</b><br>Comprador: <b>Nombre del comprador</b><br>Pedido: <b>AVO-246</b><br>Selldone",
        'body' => "Recibiste un pedido de Avocado:\nTienda: :param1\nComprador: :param2\nPedido: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Envía un mensaje al propietario de la tienda para informarle de que ha recibido un nuevo pedido de Avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Pedido de Avocado listo para pagar',
        'sample' => "<b>El nombre de tu tienda</b><br>Tu pedido ha sido confirmado y se puede pagar a través del siguiente enlace.<br>N.º de pedido: <b>AVO-246</b><br>Enlace: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nTu pedido ha sido confirmado y se puede pagar a través del siguiente enlace.\nN.º de pedido: :param2\nEnlace: :param1\nSelldone",
        'icon' => 'receipt',
        'description' => 'Envía un mensaje con el enlace de pago al cliente después de que el vendedor fije el costo y confirme su pedido de Avocado.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Pedido listo para enviar',
        'sample' => "Hola <b>Alex</b>, buenas noticias, tu pedido ya está listo para ser enviado.<br>Pedido: <b>SM-123</b>",
        'body' => "Hola :param4, buenas noticias, tu pedido ya está listo para ser enviado.\nPedido: :param1",
        'icon' => 'local_shipping',
        'description' => 'Envía un mensaje al cliente para informarle de que su pedido está listo para ser enviado.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pedido listo para recoger',
        'sample' => "Hola Alex, buenas noticias, tu pedido ya está listo para ser recogido.<br>Pedido: <b>SM-123</b>",
        'body' => "Hola :param4, buenas noticias, tu pedido ya está listo para ser recogido.\nPedido: :param1",
        'icon' => 'share_location',
        'description' => 'Envía un mensaje al cliente para informarle de que su pedido está listo para ser recogido.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pedido del vendedor listo para enviar',
        'sample' => "Hola <b>Alex</b>, buenas noticias, tu pedido ya está listo para ser enviado.<br>Pedido: <b>SM-123</b>",
        'body' => "Hola :param4, buenas noticias, tu pedido ya está listo para ser enviado.\nPedido: :param1",
        'icon' => 'local_shipping',
        'description' => 'Envía un mensaje al cliente para informarle de que su pedido está listo para ser enviado. Solo en el marketplace con modo de envío directo y cuando el tipo de entrega no es Recogida.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pedido del vendedor listo para recoger',
        'sample' => "Hola Alex, buenas noticias, tu pedido ya está listo para ser recogido.<br>Pedido: <b>SM-123</b>",
        'body' => "Hola :param4, buenas noticias, tu pedido ya está listo para ser recogido.\nPedido: :param1",
        'icon' => 'share_location',
        'description' => 'Envía un mensaje al cliente para informarle de que su pedido está listo para ser recogido. Solo en el marketplace con modo de envío directo y cuando el tipo de entrega es Recogida.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Confirmación de artículos de pedido',
        'sample' => "Hola Alex, hemos revisado tu pedido. Este es el estado de confirmación de tus artículos:<br>Tienda: <b>Nombre de la tienda</b><br>N.º de pedido: <b>SM-123</b><br>✅ Producto A | SKU100001 | 1x<br>❌ Producto B | SKU100002 | 1x",
        'body' => "Hola :param4, hemos revisado tu pedido. Este es el estado de confirmación de tus artículos:\nTienda: :param3\nN.º de pedido: :param1\n:param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notifica al cliente sobre los artículos de su pedido que han sido aceptados o rechazados por el vendedor.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Confirmación de artículos del pedido del vendedor',
        'sample' => "Hola Alex, hemos revisado tu pedido. Este es el estado de confirmación de tus artículos:<br>Vendedor: <b>Nombre del vendedor</b><br>N.º de pedido: <b>SM-123</b><br>✅ Producto A | SKU100001 | 1x<br>❌ Producto B | SKU100002 | 1x",
        'body' => "Hola :param4, hemos revisado tu pedido. Este es el estado de confirmación de tus artículos:\nVendedor: :param3\nN.º de pedido: :param1\n:param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notifica al cliente sobre los artículos de su pedido que han sido aceptados o rechazados por el vendedor.',
    ],



];
