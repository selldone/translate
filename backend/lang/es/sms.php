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
        'title' => 'Aceptar pago',
        'sample' => "Su pago de \$267 se liquidó exitosamente.<br>Orden: SM-425<br>Gracias, <b>El nombre de su tienda</b>.<br>Selldone",
        'body' => "Su pago :param2 se liquidó exitosamente.\nOrden: :param1\nGracias, :param3.\nSelldone",
        'icon' => 'payment',
        'description' => 'Envíe un mensaje al cliente de la tienda para informarle sobre el pago exitoso.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Aceptar pago',
        'sample' => "El nuevo pago de \$267 se liquidó exitosamente.<br>Orden: SM-425<br>Gracias, <b>El nombre de tu tienda</b>.<br>Selldone",
        'body' => "El nuevo pago :param2 se liquidó exitosamente.\nOrden: :param1\nGracias, :param3.\nSelldone",
        'icon' => 'payment',
        'description' => 'Envíe un mensaje al propietario de la tienda para informarle sobre el pago exitoso.',

    ],

    'vendor-new-order' => [
        'title' => 'Nuevo pedido del proveedor',
        'sample' => "Recibiste un nuevo pedido de \$200.<br>Orden: <b>SM-870</b> para <b>Nombre del proveedor</b>.<br>✅ Producto A| SKU100001 |1x<br> ✅ Producto B| SKU100002 |1x",
        'body' => "Recibiste un nuevo pedido :param2.\nOrden: :param1 para :param3.\n:param4",
        'icon' => 'storefront',
        'description' => 'Envía un mensaje al proveedor para informarle sobre un nuevo pedido.',
    ],








    'shop-login' => [
        'title' => 'Código de verificación de inicio de sesión',
        'sample' => "Su código de inicio de sesión es: <b>123456</b><br><b>El nombre de su tienda</b><br>Selldone",
        'body' => "Su código de inicio de sesión es: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Envía el código de inicio de sesión al cliente para iniciar sesión en la tienda.',

    ],

    'user-login' => [
        'title' => 'Mensaje de inicio de sesión exitoso',
        'sample' => "Estimado <b>Nombre</b>,<br>Ha iniciado sesión en su cuenta mediante <b>iPhone 165.250.300.1</b> a las <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Estimado :param1,\nHa iniciado sesión en su cuenta mediante :param2 en :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Envía un mensaje después de que el cliente inicie sesión en la tienda.',

    ],

    'avocado-order-submit' => [
        'title' => 'Nuevo pedido de aguacate enviado al comprador',
        'sample' => "<b>El nombre de tu tienda</b><br>Estimado <b>Tu nombre</b>,<br>Hemos recibido tu pedido y lo estamos revisando.<br>N.º de pedido: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nEstimado :param1,\nHemos recibido tu pedido y lo estamos revisando.\nN.º de pedido: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Envía un mensaje al cliente después de realizar un pedido de aguacate.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Aguacate recibe nuevo pedido enviado al vendedor',
        'sample' => "Recibiste un pedido de aguacate:<br>Tienda: <b>Nombre de tu tienda</b><br>Comprador: <b>Nombre del comprador</b><br>Orden: <b>AVO-246</b><br>Selldone",
        'body' => "Recibiste un pedido de aguacate:\nTienda: :param1\nComprador: :param2\nOrden: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'Envíe un mensaje al propietario de la tienda para informarle sobre la recepción de un nuevo pedido de aguacate.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Pedido de aguacate listo para pagar',
        'sample' => "<b>El nombre de tu tienda</b><br>Tu pedido ha sido confirmado y se puede pagar a través del siguiente enlace.<br>N.º de pedido: <b>AVO-246</b><br>Enlace: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nSu pedido ha sido confirmado y puede pagarse a través del siguiente enlace.\nN.º de pedido: :param2\nEnlace: :param1\nSelldone",
        'icon' => 'receipt',
        'description' => 'Envíe un mensaje con el enlace de pago al cliente después de que el vendedor establezca el costo y confirme su pedido de Aguacate.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Pedido listo para enviar',
        'sample' => "Hola <b>Alex</b>, buenas noticias, tu pedido ya está listo para ser enviado.<br>Pedido: <b>SM-123</b>",
        'body' => "Hola :param4, buenas noticias, tu pedido ya está listo para ser enviado.\nOrden: :param1",
        'icon' => 'local_shipping',
        'description' => 'Enviar un mensaje al cliente para informarle que su pedido está listo para ser enviado.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pedido listo para recoger',
        'sample' => "Hola Alex, buenas noticias, tu pedido ya está listo para ser recogido.<br>Pedido: <b>SM-123</b>",
        'body' => "Hola :param4, buenas noticias, tu pedido ya está listo para ser recogido.\nOrden: :param1",
        'icon' => 'share_location',
        'description' => 'Enviar un mensaje al cliente para informarle que su pedido está listo para ser recogido.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pedido del proveedor listo para enviar',
        'sample' => "Hola <b>Alex</b>, buenas noticias, tu pedido ya está listo para ser enviado.<br>Pedido: <b>SM-123</b>",
        'body' => "Hola :param4, buenas noticias, tu pedido ya está listo para ser enviado.\nOrden: :param1",
        'icon' => 'local_shipping',
        'description' => 'Enviar un mensaje al cliente para informarle que su pedido está listo para ser enviado. Solo en el mercado con modo de envío directo y el tipo de entrega no es Retiro.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pedido del proveedor listo para ser recogido',
        'sample' => "Hola Alex, buenas noticias, tu pedido ya está listo para ser recogido.<br>Pedido: <b>SM-123</b>",
        'body' => "Hola :param4, buenas noticias, tu pedido ya está listo para ser recogido.\nOrden: :param1",
        'icon' => 'share_location',
        'description' => 'Enviar un mensaje al cliente para informarle que su pedido está listo para ser recogido. Solo en el mercado con modo de envío directo y el tipo de entrega es Retiro.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Confirmación de artículos de pedido',
        'sample' => "Hola Alex, hemos revisado tu pedido. Aquí está el estado de confirmación de sus artículos:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hola :param4, hemos revisado tu pedido. Aquí está el estado de confirmación de sus artículos:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notifica al cliente sobre los artículos de su pedido que han sido aceptados o rechazados por el vendedor.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Confirmación de artículos de pedido del proveedor',
        'sample' => "Hola Alex, hemos revisado tu pedido. Aquí está el estado de confirmación de sus artículos:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hola :param4, hemos revisado tu pedido. Aquí está el estado de confirmación de sus artículos:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Notifica al cliente sobre los artículos de su pedido que han sido aceptados o rechazados por el proveedor.',
    ],



];
