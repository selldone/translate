<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Este mensaje da la bienvenida a un nuevo comprador a la tienda.',
        ShopMailTemplateCodes::OrderCheckout => 'Esta notificación se envía cuando un comprador confirma un pedido.',
        ShopMailTemplateCodes::OrderPayment => 'Esta notificación confirma el pago exitoso realizado por un cliente.',
        ShopMailTemplateCodes::OrderUpdate => 'Este mensaje se envía para actualizar a un comprador sobre el estado de su pedido.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Este mensaje se envía a un vendedor para notificarle sobre un pedido confirmado.',
        ShopMailTemplateCodes::PosCheckout => 'Esta notificación se envía para confirmar un pedido de punto de venta para un comprador.',
        ShopMailTemplateCodes::PosPayment => 'Esta notificación confirma un pago en el punto de venta realizado por un comprador.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Este mensaje notifica al vendedor de una compra realizada en su punto de venta.',
        ShopMailTemplateCodes::ShopContact => 'Esta notificación se envía cuando alguien completa el formulario de contacto.',
        ShopMailTemplateCodes::ShopGiftCard => 'Esta notificación informa al usuario de que ha recibido una tarjeta de regalo.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Este mensaje da la bienvenida a un nuevo vendedor a la tienda.',
        ShopMailTemplateCodes::ShopVendorInvite => "Este mensaje se envía para invitar a un vendedor a unirse a tu marketplace.",
        ShopMailTemplateCodes::ShopVendorOrder => "Este mensaje se envía al vendedor cuando se recibe un pedido en estado Pagado o Contra reembolso (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Se envía a diario para informar a los vendedores sobre el estado de sus productos.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Este mensaje se envía para invitar a un vendedor a unirse a tu marketplace.",

        ShopMailTemplateCodes::UserLogin => "Notifica al usuario los detalles del inicio de sesión (dirección IP, fecha y dispositivo) por motivos de seguridad.",
        ShopMailTemplateCodes::LoginCode => "Envía un código de un solo uso para que los usuarios inicien sesión en la tienda.",

        ShopMailTemplateCodes::EmailVerifyLink => "Envía un enlace para verificar la dirección de correo electrónico del usuario. Este correo se envía cuando un usuario se registra por SMS e introduce su correo electrónico. No se envía cuando el usuario se registra directamente con inicio de sesión social o con su correo electrónico.",

        ShopMailTemplateCodes::EmailBulkOrder => "Envía una lista de los pedidos recibidos y pagados de forma masiva en un día concreto."


    ],


    'global' => [
        'greetings' => '¡Hola, :name!',
        'end-statement' => 'Equipo de soporte',

        'receiver_name' => 'Hola :user_name',
        'footer-help' => "¿Necesitas ayuda? Escríbenos a [support@selldone.com](mailto:support@selldone.com) o visita nuestro [centro de ayuda](https://selldone.com/community).",
        'selldone-team' => 'El equipo de Selldone',
        'footer-shop' => "Si necesitas ayuda con cualquier cosa, no dudes en escribirnos a: :shop_mail",
        'accept' => "Aceptar",
        'reject' => "Rechazar",
        'verify' => "Verificar",
        'title' => "Título",
        'value' => "Valor",
        'description' => "Descripción",
        'shop' => "Tienda",
        'shop-info' => "Información de la tienda",
        'user' => "Usuario",
        'user-info' => "Información de la cuenta",
        'license' => "Licencia",
        'status' => "Estado",
        'start' => "Inicio",
        'end' => "Fin",
        'renewal' => "Renovación",
        'view' => "Ver",

        'balance' => "Saldo",
        'card_number' => "Número de tarjeta",
        'cvv' => "CVV",
        'expire_date' => "Fecha de vencimiento",

        'Dashboard' => "Panel",
        'order' => "Pedido",
        'view_order' => "Ver pedido",
        'pay_now' => "Pagar ahora",

        'official_selldone' => "SELLDONE OFICIAL",

        'account-number' => "Número de cuenta",
        'account-name' => "Nombre de la cuenta",
        'currency' => "Moneda",
        'free-balance' => "Saldo disponible",
        'locked-balance' => "Saldo bloqueado",
        'bot' => "Bot",
        'requests' => "Solicitudes",
        'baskets' => 'Carritos',
        'physical' => "Físico",
        'virtual' => "Virtual",
        'file' => "Archivo",
        'service' => "Servicio",
        'fulfillment' => "Procesamiento",
        'open' => "Abierto",
        'reserved' => "Reservado",
        'canceled' => "Cancelado",
        'payed' => "Pagado",
        'cod' => "COD",
        'orders-count' => 'Pedidos',
        'payments-count' => 'Pagos',
        'confirms-count' => 'Confirmaciones',
        'sends-count' => 'Envíos',
        'delivers-count' => 'Entregas',
        'count' => 'Cantidad',
        'transactions-count' => 'Número de transacciones',
        'success-transactions' => 'Transacciones exitosas',
        'total-amount' => 'Monto total',
        'amount' => 'Monto',
        'wage' => 'Comisión',
        'debug' => 'Depurar',
        'pos' => 'POS',
        'live' => 'En vivo',
        'CheckQueue' => 'En cola de revisión',
        'OrderConfirm' => 'Confirmación de pedido',
        'PreparingOrder' => 'Preparando pedido',
        'SentOrder' => 'Pedido enviado',
        'ToCustomer' => 'Entregado al cliente',
        'Pending' => 'Pendiente',
        'Accepted' => 'Aceptado',
        'Rejected' => 'Rechazado',
        'pc' => 'PC',
        'tablet' => 'Tableta',
        'phone' => 'Teléfono',
        'total' => 'Total',
        'view-detail' => 'Ver detalles',
        'empty' => 'Vacío',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Respuesta',
        'reactions' => 'Reacciones',
        'Comments' => 'Comentarios',
        'last-comment' => 'Último comentario',
        'response-to' => 'Respuesta a',
        'posts' => 'Publicaciones',
        'post' => 'Publicación',

        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'type' => 'Tipo',
        'device' => 'Dispositivo',
        'platform' => 'Plataforma',
        'browser' => 'Navegador',
        'time' => 'Hora',
        'Wallet' => 'Billetera',
        'date' => 'Fecha',

        'account' => 'Cuenta',
        'transaction' => 'Transacción',
        'fee' => 'Tarifa',

        'location' => 'Ubicación',
        'ip' => 'IP',

        'bill' => 'Factura',
        'category' => 'Categoría',
        'password' => 'Contraseña',
        'verify-login' => "Verificar e iniciar sesión",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Comprar ahora",
        'add-domain' => "Añadir dominio",
        'views' => 'Visitas',


        'country' => 'País',
        'address' => 'Dirección',
        'postal' => 'Código postal',
        'building_no' => 'N.º de edificio',
        'building_unit' => 'N.º de unidad',
        'message' => 'Mensaje',


        'customer' => 'Cliente',
        'cart-items' => 'Artículos del carrito',
        'payment' => 'Pago',
        'receiver' => 'Destinatario',
        'virtual-items' => 'Artículos virtuales',
        'no-payment' => '¡Sin pago!',

        'enable' => 'Activar',
        'access' => 'Acceso',
        'bank' => 'Información bancaria',

        'vendor' => 'Vendedor',

        'view_content' => "Ver contenido completo",
        'files' => 'Archivos',
        'download' => 'Descargar',
        'file_name' => 'Nombre del archivo',
        'file_size' => 'Tamaño',

        'subscription' => 'Suscripción',
        'products' => 'Productos',
        'vendor_products' => 'Productos del vendedor',

        'pickup' => 'Recogida',

        'minutes' => 'Minutos',
        'hours' => 'Horas',

        'refund' => 'Reembolso',
        'recipient_address' => 'Dirección del destinatario',
        'signature' => 'Firma',
        'blockchain' => 'Blockchain',
        'details' => 'Detalles',


    
        'Shop' => 'Tienda',
        'dashboard' => 'tablero',
        'comments' => 'comentarios',
        'wallet' => 'cartera',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Informe de rendimiento de Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Informe de temporada de Selldone'
        ],
        'Onboarding' => [
            'id' => 'hi',
            'name' => 'Comerciantes de Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Soporte :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'hi',
            'name' => 'Comunidad de Selldone'
        ],
        'NewShop' => [
            'id' => 'merchants',
            'name' => 'Comerciantes de Selldone'
        ],
        'Approve' => [
            'id' => 'approve',
            'name' => 'Comerciantes de Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gestión de pedidos :name'
        ],

        'Recovery' => [
            'id' => 'recovery',
            'name' => 'Equipo de recuperación de Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Pendiente ⌛',
        'PAYED' => 'Pagado ✅',
        'CANCELED' => 'Cancelado ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrador',
            'OFFICER' => 'Responsable y supervisor',
            'AUDITING' => 'Gestor de auditoría',
            'EMPLOYEE' => 'Empleado',
            'PRODUCT' => 'Gestor de productos',
            'CONTENT' => 'Gestor de contenidos',
            'MARKETING' => 'Gestor de marketing',
            'VIEWER' => 'Observador',

        ],
        'subject' => ":inviter te invitó como :level | :shop",
        'category' => "Invitación de personal",
        'title' => "Has sido invitado a <b>:shop_name</b> como <b>:level</b>.",
        'message' => "Has recibido una invitación para colaborar con el equipo de <b>:shop_title</b>. Puedes aceptar o rechazar esta oferta. Si decides aceptar, inicia sesión en Selldone para confirmar tu decisión. Una vez confirmada, tendrás acceso a la sección de gestión de la tienda.",

    ],

    'welcome-email' => [
        'subject' => "👋 Bienvenido :name, ¡comencemos con Selldone!",
        'category' => 'FELICIDADES',
        'title' => "Bienvenido a Selldone",
        'message' => "¡Gracias por elegir Selldone! Ahora formas parte de una comunidad vibrante que conecta a vendedores de todo el mundo con clientes, a negocios locales con grandes empresas y a particulares con corporaciones. Todas nuestras herramientas Master y Pro están disponibles para ti de forma **gratuita** e **ilimitada**. Estamos aquí para apoyarte y abrirte las puertas al éxito.",

        'index' => "Paso :step. ",

        'step-domain' => [
            'title' => 'Añade tu dominio personalizado',
            'message' => "Para empezar, añade tu dominio personalizado de forma gratuita en el panel de la tienda, en Ajustes > Ajustes de dominios.",
            'action' => 'Administrar mis dominios',
        ],
        'step-landing' => [
            'title' => 'Personaliza tu página de inicio',
            'message' => "Personaliza tu página de inicio desde Panel > Páginas. Elige una página de destino o crea una nueva. Es fácil e intuitivo, y puedes empezar a trabajar en ella de inmediato.",
            'action' => 'Personalizar mi página de destino',
        ],
        'step-payment' => [
            'title' => 'Configurar métodos de pago',
            'message' => "Empieza a aceptar pagos directamente en tu cuenta bancaria. Para conectar tus proveedores de pago como Stripe, PayPal y más, ve a Panel > Contabilidad > Pasarela de pago.",
            'action' => 'Añadir métodos de pago',
        ],
        'step-products' => [
            'title' => 'Añade tus productos',
            'message' => "Añade productos y categorías fácilmente en Panel > Productos. Es como gestionar archivos y carpetas en tu PC: todo funciona con arrastrar y soltar. También puedes importar productos de forma masiva con Excel. Hay una plantilla de ejemplo disponible para ayudarte a empezar.",
            'action' => 'Administrar mis productos',
        ],
        'step-shipping' => [
            'title' => 'Configurar métodos de envío',
            'message' => "Para cobrar a los clientes por el envío, define tus métodos de envío en Panel > Logística > Envío. Puedes establecer precios y cobertura diferentes para distintas ubicaciones. No olvides configurar el origen de tu almacén en Panel > Logística > Almacén.",
            'action' => 'Administrar métodos de envío',
        ],
    
        'seller' => [
            'title' => '¿Eres un vendedor?',
            'message' => 'Para comenzar a vender, ingrese a su tablero en Selldone a través del enlace a continuación y cree su primera tienda completamente gratis. Esto le llevará unos minutos y tendrá su propia tienda y sitio en línea. Luego lo guiaremos a los siguientes pasos y obtendremos la pasarela de pago.',
            'action' => 'Iniciar sesión en mi tablero',
        ],
        'buyer' => [
            'title' => 'soy un comprador',
            'message' => 'Felicidades. Una vez que sea miembro de Selldone, se librará de todas las molestias de la membresía y la autenticación en las tiendas en línea. Para beneficiarse de cualquier tienda y sitio que utilice la plataforma Selldone, puede iniciar sesión con un clic y hacer su compra simple, rápida y segura.',
        ],
    ],


    'charge-account' => [
        'category' => 'Billetera > Cuenta > Recarga',
        'title' => "Recarga exitosa",
        'message' => "Tu cuenta <b>:account_number</b> se ha recargado con <b>:amount</b> correctamente.",
        'account' => 'Cuenta',
        'charge' => 'Recarga',
        'balance' => 'Saldo',
        'footer' => "Hacemos que los negocios sean fáciles, alcanzables y accesibles para cualquier persona en todo el mundo."
    ],

    'verify-email' => [
        'subject' => "🙌 ¡Completa tu registro en Selldone! Enlace de verificación.",
        'category' => "ESTÁS A UN PASO",
        'title' => "Verifica tu dirección de correo electrónico",
        'message' => "Hola :name,<br><br>¡Gracias por elegir Selldone!<br><br>Para confirmar que <b>:email</b> es tu dirección de correo electrónico correcta, haz clic en el botón de abajo o usa el enlace proporcionado. Tienes 48 horas para completar esta verificación.",
        'footer' => "Si tienes problemas para hacer clic en el botón Verificar, copia y pega la siguiente URL en tu navegador web: :activation_url",
        'next-step' => "A continuación, te enviaremos materiales útiles y una guía paso a paso para que te resulte fácil añadir tu dominio personalizado, configurar los pagos, añadir productos y conseguir tu primer pedido.",

    ],
    'verify-email-code' => [
        'subject' => "Código de verificación para :name",
        'category' => "SEGURIDAD",
        'title' => "Código de verificación de correo electrónico",
        'message' => "Hola :name,<br><br>Para confirmar que <b>:email</b> es tu dirección de correo electrónico correcta, introduce el siguiente código en los próximos <b>10 minutos</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Tu tienda está lista | :name",
        'category' => "ESTÁS A UN PASO",
        'title' => "Configuración completada",
        'account_title' => "Tu cuenta",
        'account_msg' => "Verifica e inicia sesión en tu cuenta con esta información.",
        'shop_msg' => "Información de tu cuenta en Selldone Business OS.",

    ],

    'reset2fa' => [
        'category' => "MENSAJE OFICIAL DE SEGURIDAD",
        'title' => "Solicitud para desactivar la verificación en dos pasos",
        'message' => "Estás recibiendo este correo porque hemos recibido una solicitud para restablecer la autenticación de dos factores de la cuenta **:name** con el correo electrónico **:email**.<br><br>Hemos encontrado los siguientes datos de tu cuenta:",
        'footer' => "Si no solicitaste restablecer la contraseña, no es necesario que hagas nada más.",
        'action' => 'Desactivar la verificación en dos pasos',
    ],


    'build-new-shop' => [
        'subject' => "🎊 ¡Tu tienda ya está en línea y lista para crecer!",
        'category' => "Nace una nueva tienda online",
        'title' => "¡Felicitaciones, :name!",
        'message' => "<b>¡Felicidades, :name! ¡Tu nuevo negocio en línea ya está activo!</b> Estamos encantados de darte la bienvenida a la comunidad de Selldoners. Has dado el primer paso hacia el éxito y estamos aquí para ayudarte en cada etapa del camino.<br>Ahora que tu tienda está lista, asegurémonos de que puedas recibir pagos directamente de tus clientes y empezar a hacer crecer tu imperio. Si alguna vez necesitas ayuda, estamos a solo un mensaje de distancia: nuestro equipo de soporte siempre está aquí para ti.<br><br><b>Próximos pasos importantes:</b> Para empezar, asegúrate de tener todo configurado para recibir pagos y operar sin problemas. Te guiaremos en cada etapa para que tu tienda funcione a la perfección.",
        'pdf-book' => "📘 No te pierdas el manual adjunto: 'Do Your Business Like A Game', tu guía esencial hacia el éxito.",

        'account' => [
            'title' => 'Paso 1: Configura tu billetera de Selldone',
            'message' => "Para empezar, crea una cuenta en tu billetera de Selldone. Aquí es donde se deducirán tus comisiones y también donde podrás recargar saldo para que tu tienda siga funcionando sin problemas. Si tu saldo llega a ser negativo, ¡no te preocupes! Tu tienda seguirá funcionando sin interrupciones.",
            'action' => 'Iniciar sesión en la billetera',
        ],

        'shop-account' => [
            'title' => 'Paso 2: Conecta tu billetera a tu tienda',
            'message' => "Después, conecta tu cuenta de billetera a tu tienda. Ve a <b>Tienda > Contabilidad > Factura</b> y vincula tu billetera. Así te aseguras de que todos los pagos de los clientes se depositen directamente en tu cuenta bancaria: Selldone no deduce ningún importe de tus ganancias.",
            'action' => 'Ir al panel de facturas de la tienda',
        ],

        'gateway' => [
            'title' => 'Paso 3: Configura tu pasarela de pago en línea',
            'message' => "Ahora, configuremos tu pasarela de pago en línea. Ve a <b>Tienda > Contabilidad > Pasarelas</b> y haz clic en <b>Añadir nueva pasarela</b>. Selecciona tu moneda y verás una lista de pasarelas de pago disponibles. Conectar una pasarela es rápido y sencillo, pero si necesitas ayuda, consulta las guías de Selldone o contáctanos.",
            'action' => 'Añadir pasarela de pago a la tienda',
        ],

        'domain' => [
            'title' => 'Último paso: Conecta tu dominio personalizado',
            'message' => "Ahora, vincula tu dominio personalizado a tu tienda. Así tus clientes podrán comprar tus productos o servicios y pagarte directamente.",
            'action' => 'Conectar dominio personalizado',
        ],
    ],


    'basket-list' => [
        'item' => "Artículo",
        'count' => "Cantidad",
        'price' => "Precio",
        'discount-code' => "Código de descuento",
        'customer-club' => 'Club de clientes',
        'shipping' => "Envío",
        'total' => "Total",
        'offer' => "Oferta",
        'coupon' => "Cupón",
        'lottery' => "Premio",
        'tax' => "Impuesto",
        'tax_included' => "Incluido en el precio",
        'tax_shipping' => "Impuesto de envío",
    ],

    'buyable-payments' => [
        'method' => 'Método',
        'amount' => 'Monto',
        'giftcard' => 'Tarjeta de regalo',
        'payment' => 'Pago',
    ],


    'shop-subscription-email' => [
        'category' => "Actualización de suscripción",
        'title' => "Licencia de tienda: :shop_title",
        'title-reserved' => "Licencia reservada: :shop_title",
        'title-active' => "Licencia activa: :shop_title",
        'title-finished' => "Licencia finalizada: :shop_title",
        'title-cancel' => "Licencia cancelada: :shop_title",
        'message' => "Se ha actualizado el plan de licencia de tu tienda,",
        'RESERVED' => "⚡ Tu plan de suscripción ha sido **reservado**.",
        'ACTIVE' => "🟢 Tu plan de suscripción ha sido **activado**.",
        'FINISHED' => "🚧 Tu plan de suscripción ha **finalizado**.",
        'CANCEL' => "⛔ Tu plan de suscripción ha sido **cancelado**.",
    ],

    'support' => [
        'subject' => "Centro de soporte | :name respondió",
        'category' => "Centro de soporte",
        'title' => "Recibiste una respuesta",
        'action' => "Abrir la administración de la tienda",
    ],

    'shop-customer-join' => [
        'subject' => "Únete a :shop_title",
        'category' => "Celebración de nuevos clientes",
        'title' => "Nos alegra tenerte como miembro",
        'action' => "Ver lista de compras",
    ],

    'shop-vendor-join' => [
        'subject' => "Incorporación de vendedores | :shop_title",
        'category' => "Celebración de nuevos vendedores",
        'title' => "Nos alegra tenerte como miembro",
        'action' => "Panel del vendedor",
    ],


    'shop-giftcard' => [
        'subject' => "Tarjeta de regalo :shop_title",
        'category' => "Añadir nueva tarjeta",
        'title' => "¡Felicidades! Has recibido una tarjeta de regalo",
        'action' => "Comprar ahora",
        'message' => "Has recibido una tarjeta de regalo por valor de :balance :currency. Puedes usarla en nuestra tienda.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centro de soporte | :shop",
        'category' => "Soporte",
        'title' => "Recibiste una respuesta",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Confirmación de pedido | Pedido :order_id",
        'title' => "Confirmación de pedido",
        'message' => "Has realizado un pedido en nuestra tienda. Ya lo hemos recibido y te enviaremos otro correo electrónico en cuanto se confirme el pago."
    ,
        'payments' => 'Pagos',
    ],

    'order-payment' => [
        'subject' => "🛍️ Confirmación de pago | Pedido :order_id",
        'title' => "Confirmación de pago",
        'message' => "¡Tu pago se ha realizado correctamente!<br>Hemos recibido tu pedido y te avisaremos cuando esté en camino.",
    
        'payments' => 'Pagos',
    ],

    'order-update' => [
        'subject' => "🛍️ Actualización del estado del pedido | Pedido :order_id",
        'title' => "Actualización del estado del pedido",
        'message' => "Tu pedido se ha actualizado. Puedes consultar el estado más reciente de este pedido en tu cuenta.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Tu pedido está en cola para ser procesado. Te avisaremos cuando empecemos a prepararlo.",
                'OrderConfirm' => "Tu pedido está confirmado y ya hemos empezado a prepararlo.",
                'PreparingOrder' => "Tu pedido se está preparando y se enviará pronto.",
                'SentOrder' => "Tu pedido ha sido enviado. Lo recibirás en breve.",
                'ToCustomer' => "Tu pedido ha sido entregado. ¡Esperamos que lo disfrutes!",

                'PreparingOrder-PICKUP' => "Tu pedido se está preparando. Recibirás una notificación cuando esté listo para ser recogido.",
                'SentOrder-PICKUP' => "Tu pedido está listo para recoger. Pásate por la tienda para recogerlo.",
                'ToCustomer-PICKUP' => "Has recogido tu pedido. ¡Esperamos que lo disfrutes!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Tu pedido está en cola para ser procesado. Te avisaremos cuando esté listo.",
                'OrderConfirm' => "Tu pedido está confirmado y lo estamos preparando.",
                'PreparingOrder' => "Tu pedido se está preparando y te lo enviaremos pronto.",
                'ToCustomer' => "Tu pedido virtual se ha entregado en tu cuenta. ¡Gracias!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Tu solicitud de servicio está en cola. Te avisaremos cuando empecemos.",
                'OrderConfirm' => "Tu servicio está confirmado y nos estamos preparando para comenzar.",
                'PreparingOrder' => "Estamos preparando tu servicio y te avisaremos en cuanto esté completado.",
                'ToCustomer' => "Tu servicio está completado. ¡Gracias por elegirnos!"
            ],
            'FILE' => [
                'PreparingOrder' => "Tu archivo se está preparando y estará disponible pronto.",
                'ToCustomer' => "Tu archivo está listo y ya se ha entregado. Ya puedes descargarlo."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Tu pedido de suscripción está en cola. Te avisaremos cuando comience el procesamiento.",
                'OrderConfirm' => "Tu suscripción se ha confirmado y la estamos configurando.",
                'PreparingOrder' => "Estamos preparando tu suscripción y comenzará pronto.",
                'SentOrder' => "Tu suscripción ha sido activada. Recibirás actualizaciones continuas.",
                'ToCustomer' => "Tu servicio de suscripción se ha activado correctamente."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => '¡Felicidades, :name! | Nuevo vale: :title',
        'category' => "FELICIDADES, NUEVO VALE",
        'message' => "Hola :name,<br><br>¡Has recibido un nuevo vale de regalo! Puedes conseguir más vales presentando Selldone a tus amigos y a todas las personas que conozcas. Este vale tiene un valor de **:price :currency**.<br><br>Ya has dado el primer paso y estamos aquí para ayudarte a desbloquear nuevas funciones con tu vale. Inicia sesión con **:email** y encuentra tu vale en el **Panel** de la tienda > **Ajustes** > **Licencia**.<br><br>¡Felicidades!",
        'action' => "Ir a mi panel",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Felicidades, :name | ¡Has recibido un regalo especial!',
        'category' => "Notificación de regalo",
        'title' => "¡Tu regalo te está esperando!",
        'message' => "Hola :name, ¡nos alegra decirte que has recibido un regalo especial de Selldone! 🎉 Puedes conseguir más regalos manteniéndote activo, haciendo crecer tu tienda y mejorando tus conocimientos en Selldone. Para ver tu regalo, inicia sesión con :email y búscalo en la esquina superior derecha de tu panel.<br><br>Este regalo tiene un valor de **:price :currency** y puedes depositarlo fácilmente en tu billetera dentro de Selldone.<br><br>¡Usa tu regalo para mejorar la licencia de tu tienda y desbloquear herramientas aún más potentes para impulsar tu negocio en línea!",
        'action' => "Ver mis regalos",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nuevo pedido recibido | :order_id",
        'title' => "Nuevo pedido",
        'message' => "Has recibido un nuevo pedido. Ve a la página de procesamiento de pedidos de tu tienda.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'La información que has introducido',
        'output-form-title' => 'Información del artículo comprado',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title | Informe semanal :time',
        'title' => 'Informe semanal de rendimiento de la tienda',
        'message' => "Este es el informe semanal de tu tienda desde <b>:start</b> hasta <b>:end</b>. Este informe incluye consejos para mejorar tu negocio, también podrás consultar el estado de tu tienda online y los pedidos recientes. Espero que tengas un buen día y una buena semana por delante."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Tu informe de ahorro de :amount en los últimos tres meses | :shop_title',
        'title' => 'Informe de temporada sobre la actividad de tu negocio, tus recompensas y tu ahorro',
        'message' => "Este es el informe de temporada de <b>:shop_title</b>, del <b>:start</b> al <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Tus billeteras conectadas',
        'sub-title' => 'Consulta el estado de las cuentas de billetera vinculadas a esta tienda.',
        'view-wallet' => 'Ver detalles de la billetera',
        'tip-title' => 'Consejos rápidos',
        'tip' => "Crea una billetera de Selldone gratis y vincúlala a tu tienda. Aunque tu saldo sea negativo, tus clientes podrán seguir comprando y pagando sin problemas. No te preocupes: las operaciones y los datos de tu tienda continuarán con normalidad hasta 1 mes, sin interrupciones.",
        'view-my-wallet' => 'Ir a mi billetera',
        'connect-account' => 'Conectar tu billetera'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplicaciones instaladas',
        'sub-title' => 'Consulta las aplicaciones instaladas en tu tienda esta semana.',
        'tip' => "¿Buscas más aplicaciones para mejorar tu tienda?",
        'view-app-store' => 'Explorar la tienda de aplicaciones de Selldone',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Tus bots de ventas',
        'sub-title' => 'Descubre los bots de ventas activos en tu tienda.',
        'tip-title' => 'Impulsa tus ventas con bots',
        'tip' => "Selldone pone a tu disposición bots de ventas automáticos. Solo tienes que activarlos en la sección Complementos > Bots. Asegúrate de que los servicios necesarios estén disponibles en tu región para que funcionen correctamente.",
        'view-bots' => 'Administrar bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Comunicación con los clientes',
        'sub-title' => 'Consulta el número de interacciones con tus clientes esta semana.',
        'faqs' => 'Preguntas frecuentes',
        'tickets' => 'Tickets de soporte de clientes',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Resumen de la actividad de los usuarios',
        'sub-title' => 'Actividad del :start al :end',
        'users' => [
            'title' => 'Análisis de clientes',
            'subtitle' => 'Nuevos registros',
        ],
        'views' => [
            'title' => 'Tráfico de la tienda',
            'subtitle' => 'Cuántas veces se ha visitado tu tienda',
        ],
        'new_visitors' => 'Visitantes nuevos',
        'returning_visitors' => 'Clientes recurrentes',

        'shop_views' => 'Vistas totales de la tienda',
        'baskets' => [
            'title' => 'Carritos de compra',
            'subtitle' => 'Número de carritos de compra nuevos creados',
        ],
        'products' => [
            'title' => 'Resumen de productos',
            'subtitle' => 'Estado actual de los productos por categoría',
            'value_name' => 'Productos en la tienda'
        ],
        'products_count' => 'Número de categorías de productos',
        'views_count' => 'Número de vistas',
        'sell_count' => 'Ventas totales',
        'send_count' => 'Envíos procesados',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Resumen de dropshipping',
        'sub-title' => 'Panel principal para los grandes vendedores de dropshipping de Selldone.',
        'total_fulfillments' => 'Total de pedidos procesados',
        'ds_count' => 'Pedidos completados',
        'statistics_title' => 'Informe de procesamiento de pedidos',
        'ds_cancels' => 'Cancelados por el vendedor',
        'ds_rejects' => 'Cancelados por ti',
        'tip' => "¿Eres un gran vendedor con almacén, fábrica o distribución de productos? Puedes ampliar tu alcance ofreciendo tus productos a otros vendedores a través del servicio de dropshipping de Selldone. Escríbenos a support@selldone.com para conocer más detalles.",
        'view-drop-shipping-panel' => 'Acceder al panel de venta al por mayor',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Tipos de cambio',
        'sub-title' => 'Tipos de cambio actualizados de las monedas de tu tienda.',
        'from' => 'Moneda de origen',
        'to' => 'Moneda de destino',
        'rate' => 'Tipo de cambio',
        'view-exchange-panel' => 'Administrar tipos de cambio',
    
        'vew-exchange-panel' => 'panel de gestión de tipo de cambio',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contratos de expertos',
        'sub-title' => '¿Qué expertos están trabajando en tu tienda?',
        'cost' => 'Monto del contrato',
        'duration' => 'Duración del contrato',
        'start_at' => 'Fecha de inicio',
        'complete_at' => 'Fecha de finalización',
        'cancel_at' => 'Fecha de cancelación',
        'end_at' => 'Fecha de entrega',
        'tip' => 'Contrata a los mejores expertos de Selldone para hacer crecer tu negocio.',
        'view-experts' => 'Empezar con los expertos',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Pasarelas de pago',
        'sub-title' => 'Pasarelas de pago activas en tu tienda :shop.',
        'tip-title' => 'Consejos rápidos',
        'tip' => "Ve a la página de gestión de pasarelas de tu tienda y añade una pasarela de pago en solo unos minutos. Tus clientes prefieren opciones de pago rápidas y seguras.",
        'view-shop-gateways' => 'Acceder a la gestión de pasarelas de la tienda',
        'view-gateways' => 'Ver más pasarelas de pago',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Resumen de pedidos',
        'sub-title' => 'Todos los pedidos recibidos esta semana.',
        'total_baskets' => 'Pedidos totales',
        'total_posBaskets' => 'Total de pagos en efectivo',
        'pos-title' => 'Caja registradora POS',
        'chart-label' => 'Pedidos completados (nota: no todos los pedidos completados están pagados)',
        'tip-title' => 'Sigue esforzándote...',
        'tip' => "El éxito requiere esfuerzo constante. ¡No pierdas la motivación!",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centro de procesamiento',
        'sub-title' => '¿Cuántos pedidos se han procesado en tu tienda esta semana?',
        'tip-title' => '¿Sin ventas esta semana?',
        'tip' => "Parece que esta semana no has tenido ventas. No te preocupes: todos los negocios pasan por periodos lentos. Mejora el rendimiento de tu tienda añadiendo más productos, cuidando las imágenes y perfeccionando las descripciones. Plantéate dedicar a tu negocio el mismo compromiso que a un trabajo a tiempo completo. Sigue adelante, mantén una actitud positiva y el éxito llegará.",
        'view-process-center' => 'Ver el centro de procesamiento',
        'return' => [
            'title' => 'Pedidos devueltos',
            'subtitle' => 'Haz seguimiento de tus pedidos devueltos.',
            'tip-title' => '¿Sabías que...?',
            'tip' => "¡Puedes crear tantas cajas registradoras como necesites con Selldone POS! Ya sea tu tablet, tu móvil o tu portátil, puedes convertir cualquier dispositivo en el punto de venta de tu tienda. Es sencillo, rápido de configurar y está totalmente listo para tu servidor. ¡Empieza a usarlo hoy mismo!",
            'view-pos' => 'Acceder a la caja de mi tienda'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesiones de la tienda',
        'sub-title' => '¿Con qué frecuencia visitan tu tienda los clientes?',
        'countries-title' => '¿De qué países llegan más visitantes?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => '¿Quieres ganar dinero sin gastar un dólar?',
        'message' => "Hola :name, ¡es hora de empezar a ganar dinero con Selldone! Ve a Panel > Más > Monetización > Obtén tu enlace de referido. Comparte el enlace con tus amigos y consigue tarjetas de regalo y una parte de sus pagos. ¿Lo mejor de todo? ¡Una tarjeta de regalo para ti y otra para tu amigo!",
        'action' => 'Obtener mi enlace de referido',
        'mail-clip' => "<b style='color: #C2185B'>Importante:</b> Si usas servicios de correo como Gmail, que limitan la longitud de los mensajes, desplázate hasta el final de este correo para ver el informe completo. Haz clic para leer más:",

        'no-coin-reward' => "<b style='color: #C2185B'>Vaya:</b> Tu actividad de este periodo no ha alcanzado el mínimo para recibir SEL Coins gratis. Sigue esforzándote y vende más la próxima temporada para conseguirlos.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Felicidades:</b> ¡Buen trabajo! Por tu excelente rendimiento, hemos abonado :amount SEL Coins en tu cuenta como recompensa.",

        'need-buy-license' => "<b>Lleva tu negocio al siguiente nivel:</b> ¡Parece que aún no has contratado ningún plan de suscripción para tu sitio web! Mejóralo ahora y desbloquea más funciones por solo :amount al mes con pago anual.",
        'not-afford-message' => "Si tienes algún problema con el pago o ahora mismo no puedes permitírtelo, no dudes en escribirnos a support@selldone.com.",
        'add-domain' => "<b>¡Refuerza tu marca con un dominio personalizado!</b><br>Consigue hoy mismo un dominio personalizado para tu sitio web: es gratis y aporta un toque profesional."
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone <del>es un producto</del> <span style = 'color: forestgreen'> es una comunidad</span>.<br>¡Sé un Selldoner profesional!",
        'message' => "Sigue las páginas oficiales de Selldone en Twitter, LinkedIn y otras redes sociales. Envíanos tus comentarios, solicitudes o críticas, o participa en los debates sobre Selldone. Nosotros también formamos parte de la comunidad de Selldone que <b>tú creas</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Nuevos pedidos de Avocado recibidos | :shop_title :time',
        'title' => "Informe de ventas de Avocado de las últimas 24 horas",
        'message' => "Tienes nuevos pedidos pendientes de revisar y presupuestar. Responde rápido a las solicitudes de tus clientes para aumentar tus ventas.",
        'card_title' => "Pedidos pendientes",
        'card_subtitle' => "Desde :date",

        'card_payed' => "Pedidos pagados"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Nuevas respuestas a tu publicación en :community_title',
        'title' => "¡:name y otras :count personas se han unido a la conversación en tus publicaciones!",
        'message' => "Hola :name, ¡tus publicaciones están llamando la atención! Has recibido comentarios en nuestra comunidad. Inicia sesión en tu cuenta para unirte a la conversación y ver lo que dicen todos.",
        'title-simple' => "¡:name ha comentado en tu publicación!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Respuesta a tu tema :topic_title',
        'title' => ":name y otras :count personas han respondido a tu tema.",
        'message' => "Hola :name, ¡tu tema está llamando la atención! Has recibido respuestas en nuestra comunidad. Inicia sesión en tu cuenta para unirte a la conversación y ver lo que dicen todos.",
        'title-simple' => ":name ha respondido a tu tema.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nuevo inicio de sesión :name',
        'category' => 'Notificaciones de seguridad',
        'title' => "Inicio de sesión en tu cuenta",
        'message' => "Hola :name, hemos detectado un inicio de sesión en tu cuenta de Selldone.",   // Login in selldone (seller)
        'message-shop' => "Hola :name, hemos detectado un inicio de sesión en :shop_title.",  // Login in shop (buyer)

        'footer' => "Si no has sido tú quien ha iniciado sesión, cambia tu contraseña.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Retiro",
        'deposit' => "Depósito",

        'withdraw_subject' => "Retiro de la cuenta :account",
        'deposit_subject' => "Depósito en la cuenta :account",

        'message' => "La transferencia se ha realizado con los siguientes datos.",

        'type' => "Tipo de transacción",

        'from' => "Cuenta de origen",
        'to' => "Cuenta de destino",

        'desc' => "Descripción de la transacción",
        'action' => "Ver transacción",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ ¡Importante! Incumplimiento de las normas | :shop",
        'category' => "Aviso importante",
        'title' => "Tu tienda ha sido penalizada",
        'action' => "Abrir el panel de la tienda",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter te ha invitado a unirte a Selldone",
        'title' => "¡:name te ha enviado :amount para ayudarte a lanzar tu nueva tienda online y monetizarla!",
        'message' => "Hola **:receiver_name**,<br><br>¡Te damos la bienvenida a Selldone! Con Selldone puedes crear fácilmente tu sitio de comercio electrónico, tu blog y tu comunidad en línea, e incluso configurar un sistema POS en línea para tus ventas presenciales, todo en cuestión de minutos. Es el sistema operativo completo para negocios en línea, diseñado para que gestiones tu negocio mejor, más rápido y con menos esfuerzo.<br><br>Regístrate antes del <b>:date</b> y recibe un vale de :amount para empezar.",
        'accept' => "Aceptar la invitación",
        'owner' => "Propietario de",
        'join-date' => "En Selldone desde",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Enlace de recuperación | :shop",
        'category' => "Seguridad de la tienda",
        'title' => "Enlace de recuperación de la tienda <b>:shop_name</b>.",
        'message' => "Te enviamos este correo electrónico porque has solicitado restaurar tu tienda. Al hacer clic en el enlace de abajo, recuperarás tu tienda y todos los datos que le pertenecen.",
        'action' => "Confirmar la recuperación de la tienda",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => '¿Cuánto dinero le ha ahorrado Selldone a tu negocio?',
        'sub-title' => 'Del :start al :end',
        'infrastructure' => [
            'title' => 'Infraestructura',
            'subtitle' => 'Servidores, CDN, almacenamiento y otros servicios en la nube',
        ],
        'experts' => [
            'title' => 'Expertos y personal',
            'subtitle' => 'Desarrolladores, mantenimiento y soporte',
        ],
        'total_save' => 'Ahorro total'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Tu rendimiento',
        'sub-title' => 'Resumen de tu negocio del :start al :end',

        'new_visitors' => 'Usuarios nuevos',
        'returning_visitors' => 'Usuarios recurrentes',

        'shop_views' => 'Vistas de la tienda',
        'baskets' => [
            'title' => 'Carritos de compra',
            'subtitle' => 'Número de carritos de compra nuevos',

        ],
        'products' => [
            'title' => 'Resumen de productos',
            'subtitle' => 'Estado de los productos en la tienda por tipo',
            'value_name' => 'Productos'
        ],
        'views' => [
            'title' => 'Vistas de página',
            'subtitle' => 'Vistas totales de las páginas del sitio web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'Nuevo pedido',
        'message' => "Has recibido un nuevo pedido. Ve a la página de procesamiento de pedidos en tu panel de vendedor.",
        'subject' => "🛍️ Nuevo pedido recibido | :order_id",
        'your_revenue' => "Tus ingresos",
    ],
    'vendor-invite' => [
        'title' => 'Invitación para ser vendedor',
        'message' => "Has recibido una invitación para convertirte en vendedor de :shop_name. Puedes aceptarla o rechazarla haciendo clic en los siguientes botones.",
        'subject' => ":shop_name | Invitación para convertirte en nuestro vendedor",
        'accept' => "Acepta y conviértete en vendedor",
        'reject' => "Rechazar",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitación para unirte a nuestro equipo',
        'message' => "Te han invitado a unirte a :vendor_name en :shop_name. Puedes aceptar o rechazar esta invitación con los botones de abajo.",
        'subject' => "Invitación para unirte a :vendor_name | Conviértete en miembro del equipo",
        'accept' => "Acepta y únete al equipo",
        'reject' => "Rechazar",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Tu código de acceso para :shop",
        'header-message' => "Te enviamos este correo electrónico porque has solicitado un código de acceso para la tienda. A continuación encontrarás tu contraseña de un solo uso (OTP):",
        'footer-message' => "Este código será válido durante 10 minutos. Si no has solicitado este código de acceso, ignora este correo electrónico."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifica tu correo electrónico | :shop",
        'title' => 'Verificación de correo electrónico',
        'header-message' => "Hola :name,<br>Confirma que **:email** es tu dirección de correo electrónico haciendo clic en el botón de abajo o usando el enlace, en un plazo de 48 horas.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Actualizaciones de productos | :shop",
        'title' => "Actualización del estado de tus productos: últimas 24 horas",
        'message' => "Espero que estés bien. Esta es una breve actualización para informarte del estado de tus productos en nuestra plataforma durante las últimas 24 horas.\nDurante este periodo se han producido cambios en el estado de algunos productos. Estos cambios pueden deberse a compras, actualizaciones de existencias u otros eventos relacionados.\nPara obtener información más detallada sobre cada producto, inicia sesión en tu cuenta y consulta la sección \"Estado del producto\".",
        'action' => "Abrir el panel de vendedor",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Pedidos masivos recibidos | :shop | :date",
        'title' => "Notificación de pedidos masivos",
        'message' => "Has recibido un lote de pedidos masivos. Visita la página de procesamiento de pedidos en tu panel para ver más detalles. También puedes descargar la lista de pedidos mediante el enlace seguro proporcionado, válido durante 7 días.<br><br>\n        <b>IMPORTANTE:</b> Este enlace es válido durante 7 días.<br>\n        Este enlace es dinámico, por lo que cada vez que hagas clic en él recibirás los pedidos más actualizados de esa fecha concreta. <b>Esto significa que, si el estado de pago de un pedido cambia a rechazado, ese pedido ya no aparecerá en el CSV descargado, y que si el pedido se paga, sí aparecerá en la lista.</b><br><br>\n        <ul>\n            <li>El CSV contiene los pedidos pagados con fecha de reserva en :date.</li>\n            <li>La fecha de reserva es la fecha en la que el usuario hace clic en finalizar compra en la página del pedido.</li>\n        </ul>\n        <b>Para evitar pedidos duplicados, comprueba siempre el ID del pedido antes de enviarlo.</b>\n    ",
        'action' => "Descargar lista de pedidos",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Algunos artículos de tu pedido no se han aceptado y no se pueden entregar. El importe de esos artículos se reembolsará en tu tarjeta en breve."
    ]

,






];
