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
        ShopMailTemplateCodes::ShopContact => 'Esta notificación se envía cuando se envía un formulario de contacto.',
        ShopMailTemplateCodes::ShopGiftCard => 'Esta notificación informa al usuario que ha recibido una tarjeta de regalo.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Este mensaje da la bienvenida a un nuevo vendedor a la tienda.',
        ShopMailTemplateCodes::ShopVendorInvite => "Este mensaje se envía para invitar a un proveedor a unirse a su mercado.",
        ShopMailTemplateCodes::ShopVendorOrder => "Este mensaje se envía al proveedor cuando se recibe un pedido en estado Pagado o Contra reembolso (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Se envía diariamente para actualizar a los proveedores sobre el estado de sus productos.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Este mensaje se envía para invitar a un proveedor a unirse a su mercado.",

        ShopMailTemplateCodes::UserLogin => "Notificar al usuario los detalles de inicio de sesión, incluida la dirección IP, la fecha y el dispositivo, por motivos de seguridad.",
        ShopMailTemplateCodes::LoginCode => "Envíe un código de contraseña de un solo uso para que los usuarios inicien sesión en la tienda.",

        ShopMailTemplateCodes::EmailVerifyLink => "Envía un enlace para verificar la dirección de correo electrónico del usuario. Este correo se envía cuando un usuario se registra por SMS e ingresa su correo electrónico y no se envía cuando el usuario se registra por redes sociales o correo electrónico directamente.",

        ShopMailTemplateCodes::EmailBulkOrder => "Envíe una lista de pedidos recibidos y pagados de forma masiva para un día específico."


    ],


    'global' => [
        'greetings' => 'Hola, :name!',
        'end-statement' => 'Equipo de apoyo',

        'receiver_name' => 'Hola :user_name',
        'footer-help' => "¿Necesitas ayuda? Pregunte en [support@selldone.com](mailto:support@selldone.com) o visite nuestro [centro de ayuda](https://selldone.com/community).",
        'selldone-team' => 'El equipo de Selldone',
        'footer-shop' => "Si necesita ayuda con algo, no dude en enviarnos un correo electrónico: :shop_mail",
        'accept' => "Aceptar",
        'reject' => "Rechazar",
        'verify' => "verificar",
        'title' => "Título",
        'value' => "Valor",
        'description' => "Descripción",
        'shop' => "Tienda",
        'shop-info' => "Información de la tienda",
        'user' => "Usuario",
        'user-info' => "Información de la cuenta",
        'license' => "Licencia",
        'status' => "Estado",
        'start' => "Comienzo",
        'end' => "Fin",
        'renewal' => "Renovación",
        'view' => "Vista",

        'balance' => "Equilibrio",
        'card_number' => "Número de tarjeta",
        'cvv' => "cvv",
        'expire_date' => "Fecha de caducidad",

        'Dashboard' => "Panel de control",
        'order' => "orden",
        'view_order' => "Ver pedido",
        'pay_now' => "Pay now",

        'official_selldone' => "VENTA OFICIAL HECHA",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Divisa",
        'free-balance' => "Saldo libre",
        'locked-balance' => "Saldo bloqueado",
        'bot' => "Bot",
        'requests' => "Peticiones",
        'baskets' => 'carros',
        'physical' => "Físico",
        'virtual' => "Virtual",
        'file' => "Archivo",
        'service' => "Servicio",
        'fulfillment' => "Cumplimiento",
        'open' => "Abierto",
        'reserved' => "Reservado",
        'canceled' => "Cancelado",
        'payed' => "Pagado",
        'cod' => "COD",
        'orders-count' => 'Pedidos',
        'payments-count' => 'Pagos',
        'confirms-count' => 'Confirma',
        'sends-count' => 'envía',
        'delivers-count' => 'entrega',
        'count' => 'Contar',
        'transactions-count' => 'Cuenta de transacciones',
        'success-transactions' => 'Transacciones exitosas',
        'total-amount' => 'Cantidad total',
        'amount' => 'Monto',
        'wage' => 'Salario',
        'debug' => 'Depurar',
        'pos' => 'POS',
        'live' => 'Vivir',
        'CheckQueue' => 'comprobar la cola',
        'OrderConfirm' => 'Confirmación de pedido',
        'PreparingOrder' => 'Preparando pedido',
        'SentOrder' => 'pedido enviado',
        'ToCustomer' => 'Entregado al cliente',
        'Pending' => 'Pendiente',
        'Accepted' => 'Aceptado',
        'Rejected' => 'Rechazado',
        'pc' => 'PC',
        'tablet' => 'Tableta',
        'phone' => 'Teléfono',
        'total' => 'Total',
        'view-detail' => 'Ver Detalle',
        'empty' => 'Vacío',
        'dropshipping' => 'Envío directo',
        'reply' => 'Respuesta',
        'reactions' => 'reacciones',
        'Comments' => 'Comentarios',
        'last-comment' => 'Último comentario',
        'response-to' => 'Respuesta a',
        'posts' => 'Publicaciones',
        'post' => 'Correo',

        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'type' => 'escribe',
        'device' => 'Dispositivo',
        'platform' => 'Plataforma',
        'browser' => 'Navegador',
        'time' => 'Tiempo',
        'Wallet' => 'Cartera',
        'date' => 'Fecha',

        'account' => 'Cuenta',
        'transaction' => 'Transacción',
        'fee' => 'Tarifa',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Factura',
        'category' => 'Categoría',
        'password' => 'Clave',
        'verify-login' => "Verificar e iniciar sesión",
        'url' => 'URL',
        'avocado' => 'Palta',
        'hyper' => 'Hiper',
        'buy-now' => "Compra ahora",
        'add-domain' => "Add Domain",
        'views' => 'Puntos de vista',


        'country' => 'País',
        'address' => 'dirección',
        'postal' => 'Código postal',
        'building_no' => 'Edificio #',
        'building_unit' => 'Unidad #',
        'message' => 'Mensaje',


        'customer' => 'Cliente',
        'cart-items' => 'Artículos del carrito',
        'payment' => 'Pago',
        'receiver' => 'Receptor',
        'virtual-items' => 'Artículos virtuales',
        'no-payment' => '¡Sin pago!',

        'enable' => 'Permitir',
        'access' => 'Acceso',
        'bank' => 'información bancaria',

        'vendor' => 'Vendedor',

        'view_content' => "Ver contenido completo",
        'files' => 'archivos',
        'download' => 'Descargar',
        'file_name' => 'Nombre del archivo',
        'file_size' => 'Tamaño',

        'subscription' => 'Suscripción',
        'products' => 'productos',
        'vendor_products' => 'Productos del proveedor',

        'pickup' => 'Recogida',

        'minutes' => 'Minutos',
        'hours' => 'Horas',

        'refund' => 'Reembolso',
        'recipient_address' => 'Dirección del destinatario',
        'signature' => 'Firma',
        'blockchain' => 'cadena de bloques',
        'details' => 'Detalles',


    
        'Shop' => 'Tienda',
        'dashboard' => 'tablero',
        'comments' => 'comentarios',
        'wallet' => 'cartera',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Sistema operativo comercial Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Informe de rendimiento, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Informe de temporada, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hola',
            'name' => 'Selldone Comerciantes'
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
            'id' => 'hola',
            'name' => 'Comunidad, Selldone'
        ],
        'NewShop' => [
            'id' => 'comerciantes',
            'name' => 'Selldone Comerciantes'
        ],
        'Approve' => [
            'id' => 'aprobar',
            'name' => 'Selldone Comerciantes'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gestión de Órdenes :name'
        ],

        'Recovery' => [
            'id' => 'recuperación',
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
            'OFFICER' => 'oficial y supervisor',
            'AUDITING' => 'gerente de auditoria',
            'EMPLOYEE' => 'Empleado',
            'PRODUCT' => 'gerente de productos',
            'CONTENT' => 'Gestor de contenidos',
            'MARKETING' => 'gerente de mercadotecnia',
            'VIEWER' => 'Espectador',

        ],
        'subject' => ":inviter te invitó como :level | :shop",
        'category' => "invitación del personal",
        'title' => "Ha sido invitado a <b>:shop_name</b> como <b>:level</b> .",
        'message' => "Recibiste una invitación para colaborar con el equipo de <b>:shop_title</b> en el ámbito empresarial. Tienes la opción de aceptar o rechazar esta oferta. Si decide aceptar, inicie sesión en el servicio Selldone para confirmar su decisión. Tras la confirmación, accederá a la sección de gestión de la tienda.",

    ],

    'welcome-email' => [
        'subject' => "👋 Bienvenido :name, ¡comencemos con Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Bienvenido a Selldone",
        'message' => "¡Gracias por elegir Selldone! Ahora eres parte de una comunidad vibrante que conecta a vendedores globales con clientes, negocios locales con empresas y individuos con corporaciones. Todas nuestras herramientas Master y Pro están disponibles **gratis** e **ilimitadas**. Estamos aquí para apoyarlo y abrirle las puertas a su éxito.",

        'index' => "Paso :step.",

        'step-domain' => [
            'title' => 'Agregue su dominio personalizado',
            'message' => "Para comenzar, agregue su dominio personalizado de forma gratuita en el Panel de la tienda en Configuración > Configuración de dominios.",
            'action' => 'Administrar mis dominios',
        ],
        'step-landing' => [
            'title' => 'Personaliza tu página de inicio',
            'message' => "Personalice su página de inicio yendo a Panel > Páginas. Elija una página de destino o cree una nueva. Es fácil e intuitivo y puedes empezar a trabajar en él de inmediato.",
            'action' => 'Personalizar mi página de destino',
        ],
        'step-payment' => [
            'title' => 'Configurar métodos de pago',
            'message' => "Comience a aceptar pagos directamente en su cuenta bancaria. Para conectar sus proveedores de pago como Stripe, PayPal y más, vaya a Panel > Contabilidad > Puerta de enlace.",
            'action' => 'Agregar métodos de pago',
        ],
        'step-products' => [
            'title' => 'Añade tus productos',
            'message' => "Agregue fácilmente productos y categorías en el Panel > Productos. Es como administrar archivos y carpetas en su PC: completamente listo para arrastrar y soltar. También puede importar productos de forma masiva utilizando Excel. Hay una plantilla de muestra disponible para ayudarle a comenzar.",
            'action' => 'Administrar mis productos',
        ],
        'step-shipping' => [
            'title' => 'Configurar métodos de envío',
            'message' => "Para cobrar a los clientes por el envío, defina sus métodos de envío en Panel > Logística > Envío. Puede establecer diferentes precios y soporte para varias ubicaciones. No olvide configurar el origen de su almacén en Panel > Logística > Almacén.",
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
        'category' => 'Monedero > Cuenta > Cargo',
        'title' => "Cargo de éxito",
        'message' => "Se ha cargado <b>:amount</b> correctamente a su cuenta <b>:account_number</b>.",
        'account' => 'Cuenta',
        'charge' => 'Cargo',
        'balance' => 'Equilibrio',
        'footer' => "Haga que los negocios sean fáciles, alcanzables y accesibles para cualquier persona en todo el mundo."
    ],

    'verify-email' => [
        'subject' => "🙌 ¡Completa tu registro en Selldone! Verificar enlace.",
        'category' => "ESTÁS A UN PASO DE DISTANCIA",
        'title' => "Verifique su dirección de correo electrónico",
        'message' => "Hola :name,<br><br>¡Gracias por elegir Selldone!<br><br>Para confirmar que <b>:email</b> es su dirección de correo electrónico correcta, haga clic en el botón a continuación o utilice el enlace proporcionado. Tienes 48 horas para completar esta verificación.",
        'footer' => "Si tiene problemas para hacer clic en el botón Verificar, copie y pegue la siguiente URL en su navegador web: :activation_url",
        'next-step' => "A continuación, le enviaremos algunos materiales útiles y una guía paso a paso para que le resulte más fácil agregar su dominio personalizado, configurar pagos, agregar productos y obtener su primer pedido.",

    ],
    'verify-email-code' => [
        'subject' => "Código de verificación para :name",
        'category' => "SECURITY",
        'title' => "Código de verificación de correo electrónico",
        'message' => "Hola :name:<br><br>Para confirmar que <b>:email</b> es su dirección de correo electrónico correcta, ingrese el siguiente código dentro de los próximos <b>10 minutos</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Tu tienda está lista | :name",
        'category' => "ESTÁS A UN PASO DE DISTANCIA",
        'title' => "Configuración completada",
        'account_title' => "Su cuenta",
        'account_msg' => "Verifique e inicie sesión en su cuenta con esta información.",
        'shop_msg' => "Información de la cuenta en el sistema operativo comercial de Selldone.",

    ],

    'reset2fa' => [
        'category' => "MENSAJE OFICIAL DE SEGURIDAD",
        'title' => "Solicitar deshabilitar inicio de sesión en 2 pasos",
        'message' => "Estás recibiendo este correo electrónico porque recibimos una solicitud para restablecer la autenticación de dos factores para la cuenta **:name** con el correo electrónico **:email**.<br><br>Encontramos los siguientes detalles para tu cuenta:",
        'footer' => "Si no solicitó un restablecimiento de contraseña, no se requiere ninguna otra acción.",
        'action' => 'Deshabilitar el inicio de sesión en dos pasos',
    ],


    'build-new-shop' => [
        'subject' => "🎊 ¡Tu tienda ya está lista!",
        'category' => "NACE NUEVA TIENDA ONLINE EN EL MUNDO",
        'title' => "¡Felicitaciones, :name!",
        'message' => "<b>¡Felicitaciones, :name! ¡Su nuevo negocio en línea ya está activo!</b> Estamos encantados de darle la bienvenida a la comunidad de Selldoners. Has dado el primer paso hacia el éxito y estamos aquí para ayudarte en cada paso del camino.<br>Ahora que tu tienda está lista, asegurémonos de que estás preparado para recibir pagos directamente de tus clientes y comenzar a hacer crecer tu imperio. Si alguna vez necesita ayuda, estamos a solo un mensaje de distancia: nuestro equipo de soporte siempre está aquí para ayudarlo.<br><br><b>Ipróximos pasos importantes:</b> Para comenzar, asegúrese de que esté todo configurado para recibir pagos y realizar operaciones sin problemas. Lo guiaremos a través de cada etapa para que su tienda funcione sin problemas.",
        'pdf-book' => "No se pierda el manual adjunto: Haga sus negocios como un juego",

        'account' => [
            'title' => 'Paso 1: Crea una cuenta en la billetera Selldone',
            'message' => "Para comenzar, cree una cuenta en su billetera Selldone. Aquí es donde se deducirán tus tarifas y también donde podrás recargar para mantener tu tienda funcionando sin problemas. Si tu saldo alguna vez se vuelve negativo, ¡no te preocupes! Tu tienda seguirá funcionando sin interrupciones.",
            'action' => 'Iniciar sesión en la billetera',
        ],

        'shop-account' => [
            'title' => 'Paso 2: conecta la cuenta a la tienda',
            'message' => "Luego, conecte su cuenta de billetera a su tienda. Dirígete a <b>Store > Contabilidad > Invoice</b> y vincula tu billetera. Esto garantiza que todos los pagos de los clientes se depositen directamente en su cuenta bancaria; Selldone no deduce ningún monto de sus ganancias.",
            'action' => 'Panel Factura de tienda',
        ],

        'gateway' => [
            'title' => 'Paso 3: Conecte la pasarela de pago en línea',
            'message' => "Ahora, configuremos su pasarela de pago en línea. Vaya a <b>Store > Contabilidad > Port</b> y haga clic en <b>Agregar nuevo puerto</b>. Seleccione su moneda y verá una lista de pasarelas de pago disponibles. Conectar una puerta de enlace es rápido y fácil, pero si necesita ayuda, no dude en consultar las guías Selldone o comunicarse con nosotros.",
            'action' => 'Agregar un portal a la tienda',
        ],

        'domain' => [
            'title' => 'Último paso: conectar un dominio dedicado',
            'message' => "Ahora, vincula tu dominio personalizado a tu tienda. Esto permite a los clientes comprar sus productos o servicios y realizarle pagos directamente.",
            'action' => 'Presentar y recibir tarjetas de regalo ilimitadas',
        ],
    ],


    'basket-list' => [
        'item' => "ít",
        'count' => "Contar",
        'price' => "precio",
        'discount-code' => "Código de descuento",
        'customer-club' => 'club de clientes',
        'shipping' => "Envío",
        'total' => "Total",
        'offer' => "Oferta",
        'coupon' => "Cupón",
        'lottery' => "Otorgar",
        'tax' => "Impuesto",
        'tax_included' => "Incluido en el precio",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Método',
        'amount' => 'Monto',
        'giftcard' => 'Gift card',
        'payment' => 'Pago',
    ],


    'shop-subscription-email' => [
        'category' => "actualización de suscripción",
        'title' => "Licencia de tienda: :shop_title",
        'title-reserved' => "Reservar licencia: :shop_title",
        'title-active' => "Licencia activa: :shop_title",
        'title-finished' => "Licencia terminada: :shop_title",
        'title-cancel' => "Cancelar licencia: :shop_title",
        'message' => "Su plan de licencia de tienda actualizado,",
        'RESERVED' => "⚡ Su plan de suscripción ha sido **reservado**.",
        'ACTIVE' => "🟢 Su plan de suscripción ha sido **activado**.",
        'FINISHED' => "🚧 Su plan de suscripción ha sido **terminado**.",
        'CANCEL' => "⛔ Tu plan de suscripción ha sido **cancelado**.",
    ],

    'support' => [
        'subject' => "Centro de soporte | :name respondió",
        'category' => "Centro de Apoyo",
        'title' => "Recibiste una respuesta",
        'action' => "Abrir administrador de tienda",
    ],

    'shop-customer-join' => [
        'subject' => "Únete a :shop_title",
        'category' => "Celebración de nuevos clientes",
        'title' => "Estamos felices por su membresía",
        'action' => "Visitar ahora",
    ],

    'shop-vendor-join' => [
        'subject' => "Incorporación de proveedores | :shop_title",
        'category' => "Celebración de nuevos proveedores",
        'title' => "Estamos felices por su membresía",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Tarjeta de regalo :shop_title",
        'category' => "Agregar nueva tarjeta",
        'title' => "Enhorabuena, has recibido una tarjeta regalo",
        'action' => "Compra ahora",
        'message' => "Ha recibido una tarjeta regalo por valor de :balance :currency. Puedes utilizar esta tarjeta regalo en nuestra tienda.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centro de soporte | :shop",
        'category' => "apoyo",
        'title' => "Recibiste una respuesta",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Confirmación de pedido | Orden :order_id",
        'title' => "orden",
        'message' => "Hiciste un pedido en nuestra tienda. Recibimos su pedido y le enviaremos otro correo electrónico una vez confirmado el pago."
    ,
        'payments' => 'Pagos',
    ],

    'order-payment' => [
        'subject' => "🛍️ Confirmación de Pago | Orden :order_id",
        'title' => "Orden de pago",
        'message' => "Su pago completado,<br> Tenemos tu pedido. Le enviaremos otro correo electrónico cuando se envíe su pedido.",
    
        'payments' => 'Pagos',
    ],

    'order-update' => [
        'subject' => "🛍️ Actualización del estado del pedido | Orden :order_id",
        'title' => "Actualización del estado del pedido",
        'message' => "Su pedido ha sido actualizado. Puede consultar el estado más reciente de este pedido en su cuenta.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Su pedido está en cola para ser procesado. Le avisaremos cuando se esté preparando.",
                'OrderConfirm' => "Su pedido está confirmado y la preparación ha comenzado.",
                'PreparingOrder' => "Su pedido se está preparando y se enviará pronto.",
                'SentOrder' => "Su pedido ha sido enviado. Lo recibirás en breve.",
                'ToCustomer' => "Su pedido ha sido entregado. ¡Esperamos que lo disfrutes!",

                'PreparingOrder-PICKUP' => "Tu pedido se está preparando. Recibirás una notificación cuando esté listo para ser recogido.",
                'SentOrder-PICKUP' => "Su pedido está listo para ser recogido. Por favor ven a la tienda a recogerlo.",
                'ToCustomer-PICKUP' => "Su pedido ha sido recogido. ¡Esperamos que lo disfrutes!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Su pedido está en cola para ser procesado. Te avisaremos cuando esté listo.",
                'OrderConfirm' => "Su pedido está confirmado y la preparación está en progreso.",
                'PreparingOrder' => "Su pedido se está preparando y se le enviará pronto.",
                'ToCustomer' => "Su pedido virtual ha sido entregado a su cuenta. ¡Gracias!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Su solicitud de servicio está en cola. Te avisaremos cuando empecemos.",
                'OrderConfirm' => "Su servicio está confirmado y nos estamos preparando para comenzar.",
                'PreparingOrder' => "Estamos preparando su servicio y le notificaremos una vez que esté completo.",
                'ToCustomer' => "Su servicio está completo. ¡Gracias por elegirnos!"
            ],
            'FILE' => [
                'PreparingOrder' => "Su archivo se está preparando y estará disponible pronto.",
                'ToCustomer' => "Su archivo está listo y ha sido entregado. Ya puedes descargarlo."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Su pedido de suscripción está en cola. Le notificaremos cuando comience el procesamiento.",
                'OrderConfirm' => "Su suscripción ha sido confirmada y se está configurando.",
                'PreparingOrder' => "Estamos preparando tu suscripción y comenzará pronto.",
                'SentOrder' => "Tu suscripción ha sido activada. Recibirás actualizaciones continuas.",
                'ToCustomer' => "Su servicio de suscripción se ha activado correctamente."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Felicitaciones :name | Nuevo cupón: :title',
        'category' => "ENHORABUENA, NUEVO VALE",
        'message' => "Hola :name:<br><br>¡Has recibido un nuevo cupón como regalo de nuestra parte! Puedes ganar aún más vales presentando Selldone a tus amigos y a todos tus conocidos. Este cupón vale **:price :currency**.<br><br>¡Has dado el primer paso y estamos aquí para ayudarte a desbloquear nuevas funciones con tu cupón! Inicie sesión con **:email** y busque su cupón en la Tienda **Panel** > **Configuración** > **Licencia**.<br><br>¡Felicitaciones!",
        'action' => "Mi tablero",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Felicitaciones, querido :name | ¡Has recibido un regalo especial!',
        'category' => "Anuncio de recibir un regalo",
        'title' => "regalos para ti",
        'message' => "Hola :name, ¡nos complace informarle que recibió un regalo especial de Selldone! 🎉 Puede ganar más regalos si se mantiene activo, hace crecer su tienda y mejora su experiencia en Selldone. Para retirar su regalo, simplemente inicie sesión con :email y búsquelo en la esquina superior derecha de su panel de control.<br><br>Este regalo vale **:price :currency** y puede depositarlo fácilmente en su billetera dentro de Selldone.<br><br>Utilice su regalo para actualizar la licencia de su tienda y desbloquear herramientas aún más poderosas para impulsar su negocio en línea.",
        'action' => "Regalos",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Nuevo pedido recibido | :order_id",
        'title' => "New Order",
        'message' => "Has recibido un nuevo pedido. Vaya a la página de procesamiento de pedidos en su tienda.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Su información completa',
        'output-form-title' => 'Información del artículo comprado',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title | Informe Semanal :time',
        'title' => 'Informe semanal de rendimiento de la tienda',
        'message' => "Este es el informe semanal de tu tienda desde <b>:start</b> hasta <b>:end</b>. Este informe incluye consejos para mejorar tu negocio, también podrás consultar el estado de tu tienda online y los pedidos recientes. Espero que tengas un buen día y una buena semana por delante."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Tu informe de ahorro :amount en los últimos tres meses | :shop_title',
        'title' => 'Informe estacional sobre la actividad de su negocio, recompensas y ahorros financieros',
        'message' => "Este es su informe estacional <b>:shop_title</b> de <b>:start</b> a <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Cuentas conectadas',
        'sub-title' => '¿Cuál es el estado más reciente de las cuentas de billetera conectadas a mi tienda?',
        'view-wallet' => 'Ver billetera',
        'tip-title' => 'Consejos importantes',
        'tip' => "Configure una billetera Selldone gratuita y vincúlela a su tienda. Incluso si su saldo es negativo, sus clientes aún pueden comprar y pagar sin ningún problema. No te preocupes, las operaciones y los datos de tu tienda continuarán sin problemas durante hasta 1 mes, sin interrupciones.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Conectar a la cuenta'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplicaciones instaladas',
        'sub-title' => 'Lista de aplicaciones que has instalado en tu tienda esta semana.',
        'tip' => "¿Quieres encontrar más aplicaciones para tu tienda?",
        'view-app-store' => 'Visite la tienda de aplicaciones de Selldone..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Los robots de tu tienda',
        'sub-title' => 'Bots de ventas activos en mi tienda.',
        'tip-title' => 'Venta de bots',
        'tip' => "Selldone le ha proporcionado bots de ventas automáticos. Todo lo que tienes que hacer es ir al panel Complementos > Bots y activar los bots de tu tienda. Tenga en cuenta que el servicio correspondiente debe estar disponible en su país.",
        'view-bots' => 'Administrar bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Comunicación con los Clientes',
        'sub-title' => '¿Cuántos contactos he tenido con mis clientes esta semana?',
        'faqs' => 'Preguntas frecuentes',
        'tickets' => 'Boletos de clientes',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Estado de los usuarios',
        'sub-title' => 'Actividad de :start a :end',
        'users' => [
            'title' => 'Clientes',
            'subtitle' => 'Registrar Usuarios',
        ],
        'views' => [
            'title' => 'Visitas',
            'subtitle' => '¿Cuántas veces has visitado la tienda?',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Usuarios devueltos',

        'shop_views' => 'Vistas de la tienda',
        'baskets' => [
            'title' => 'Carritos de compra',
            'subtitle' => 'Informar el número de carritos de compra nuevos',
        ],
        'products' => [
            'title' => 'Resumen de productos',
            'subtitle' => 'Estado de los productos en la tienda por tipo',
            'value_name' => 'productos'
        ],
        'products_count' => 'Tipos de productos',
        'views_count' => 'Conteo de visitas',
        'sell_count' => 'Vender cuenta',
        'send_count' => 'Recuento de envíos',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Envío de la gota',
        'sub-title' => 'Panel para los principales vendedores de Drop Shipping Selldone.',
        'total_fulfillments' => 'Total de pedidos recibidos',
        'ds_count' => 'Pedidos recibidos',
        'statistics_title' => 'Reportar pedidos recibidos',
        'ds_cancels' => 'Cancelar por vendedor de interfaz',
        'ds_rejects' => 'Cancelar por usted',
        'tip' => "¿Es usted un importante vendedor de mercancías? ¿Es dueño de un almacén, fábrica o distribuidor de productos? Puede ofrecer sus productos a otros vendedores en el servicio Drop Shipping de Selldone para vender su producto a gran escala. Envíenos un correo electrónico a support@selldone.com para guiarlo.",
        'view-drop-shipping-panel' => 'Inicie sesión en el panel de venta al por mayor',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Los tipos de cambio',
        'sub-title' => 'Lista de las últimas tasas de conversión de moneda en su tienda.',
        'from' => 'Moneda de origen',
        'to' => 'Moneda de destino',
        'rate' => 'Tasa de conversión',
        'view-exchange-panel' => 'Administrar tipos de cambio',
    
        'vew-exchange-panel' => 'panel de gestión de tipo de cambio',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contratos de expertos',
        'sub-title' => '¿Qué profesionales trabajan en mi tienda?',
        'cost' => 'Monto del contrato',
        'duration' => 'Duración',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Fecha Cancelar',
        'end_at' => 'Fecha de entrega',
        'tip' => 'Puede contratar a los mejores especialistas en Selldone para desarrollar su negocio.',
        'view-experts' => 'Haga clic para comenzar.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Reportar pasarelas de pago activas en la tienda :shop.',
        'tip-title' => 'Consejos importantes',
        'tip' => "Vaya a la página de administración del portal en su tienda y agregue al menos un puerto en unos minutos. A tus clientes les gusta pagar de forma rápida y segura a través de portales online.",
        'view-shop-gateways' => 'Inicie sesión en la gestión del portal de mi tienda.',
        'view-gateways' => 'Vea más puertas de enlace',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Pedidos',
        'sub-title' => 'Lista de pedidos que he recibido esta semana.',
        'total_baskets' => 'Pedidos totales',
        'total_posBaskets' => 'Total de pedidos en efectivo',
        'pos-title' => 'Caja de tienda POS',
        'chart-label' => 'Pedidos completados (¡estos pedidos no están necesariamente pagados!)',
        'tip-title' => 'Deberías esforzarte más...',
        'tip' => "Ningún éxito sencillo.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centro de procesamiento',
        'sub-title' => '¿Cuánto pedido procesamos en la tienda esta semana?',
        'tip-title' => '¡No tuviste una venta!',
        'tip' => "Desafortunadamente no tuviste ninguna venta esta semana. Necesitas llegar más a tu tienda. Puede agregar más productos, elegir mejores imágenes o escribir mejores descripciones para sus productos. Considere un trabajo de tiempo completo para su negocio. Si lo haces bien y no te frustras, tendrás éxito.",
        'view-process-center' => 'Ver centro de procesos',
        'return' => [
            'title' => 'Pedido devuelto',
            'subtitle' => 'Informe de pedidos devueltos.',
            'tip-title' => 'Sabía usted que ...',
            'tip' => "¡Puedes crear tantas cajas registradoras como necesites con Selldone POS! Ya sea tu tablet, móvil o portátil, podrás convertir cualquier dispositivo en el punto de venta de tu tienda. Es simple, rápido de configurar y completamente preparado para su servidor. ¡Empieza a usarlo hoy!",
            'view-pos' => 'Iniciar sesión en el cajero de mi tienda en línea'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesiones',
        'sub-title' => '¿Cuántas veces visité mi tienda?',
        'countries-title' => '¿Qué países han sido los más visitados?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => '¿Quieres ganar dinero sin gastar un dólar?',
        'message' => "Hola :name, ¡es hora de empezar a ganar con Selldone! Vaya a Panel de control > Más > Monetización > Obtenga su enlace de referencia. Comparte el enlace con tus amigos y gana tarjetas de regalo y una parte de sus pagos. ¿La mejor parte? ¡Tanto tú como tu amigo recibirán una tarjeta de regalo!",
        'action' => 'Ver mi enlace de introducción',
        'mail-clip' => "<b style='color: #C2185B'>Importante:</b> si utiliza servicios de correo electrónico como Gmail que limitan la longitud del correo electrónico, busque la siguiente opción al final del correo electrónico para mostrar el informe completo y haga clic en él:",

        'no-coin-reward' => "<b style='color: #C2185B'>Lo sentimos:</b> su actividad no cumplió con los requisitos para obtener la recompensa de SEL Coins gratis. Esfuérzate más y vende más en tu tienda para la próxima temporada.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Recompensa:</b> Felicitaciones, debido a su fantástico desempeño, le otorgamos una recompensa gratuita de :amount SEL Coin.",

        'need-buy-license' => "<b>Sube de nivel tu negocio:</b> ¡Parece que aún no has registrado ningún plan de suscripción para tu sitio web! Actualice ahora para desbloquear más funciones por solo :amount por mes si paga anualmente.",
        'not-afford-message' => "Si no puede pagar o tiene algún problema con el pago, no dude en comunicárnoslo a través de support@selldone.com.",
        'add-domain' => "<b>¿Por qué no tener un dominio personalizado para su negocio?</b><br> Agregue un dominio a su sitio web ahora; ¡es gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone es un<del> producto</del> <span style = 'color: forestgreen'>comunidad</span><br> ¡Sé un Selldoner profesional!",
        'message' => "Siga las páginas oficiales de Selldone en Twitter, LinkedIn y redes sociales. Envíenos cualquier comentario, solicitud o crítica o participe en debates sobre Selldone. También somos parte de la comunidad de Selldone que <b>Tú haces</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Se reciben nuevos pedidos de aguacates | :shop_title :time',
        'title' => "Informe de rendimiento de las últimas 24 horas",
        'message' => "Sus clientes están esperando que sus pedidos sean revisados y cotizados. Responda a las solicitudes de sus clientes lo antes posible para obtener más ventas.",
        'card_title' => "Pedidos en la cola",
        'card_subtitle' => "Desde :date",

        'card_payed' => "pedidos pagados"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Responde a tu publicación en :community_title',
        'title' => ":name, y :count otros comentaron en tus publicaciones.",
        'message' => "Hola :name, ¡tus publicaciones están llamando la atención! Has recibido comentarios en nuestra comunidad. Inicie sesión en su cuenta para unirse a la discusión y ver lo que todos dicen.",
        'title-simple' => ":name comentó en tus publicaciones.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Responde a tu tema :topic_title',
        'title' => ":name, y :count otros respondieron sobre tu tema.",
        'message' => "Hola :name, ¡tu tema está llamando la atención! Has recibido respuestas en nuestra comunidad. Inicie sesión en su cuenta para unirse a la discusión y ver lo que todos dicen.",
        'title-simple' => ":name respondió sobre tu tema.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nuevo inicio de sesión :name',
        'category' => 'Notificaciones de seguridad',
        'title' => "Iniciar sesión en la cuenta",
        'message' => "Estimado :name, se detectó un inicio de sesión en su cuenta de Selldone.",   // Login in selldone (seller)
        'message-shop' => "Estimado :name, has iniciado sesión en :shop_title .",  // Login in shop (buyer)

        'footer' => "Si no ha iniciado sesión, cambie su contraseña.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Retiro",
        'deposit' => "Depósito",

        'withdraw_subject' => "Retirar de la cuenta :account",
        'deposit_subject' => "Depositar en cuenta :account",

        'message' => "La transferencia de dinero se ha realizado con las siguientes especificaciones.",

        'type' => "Tipo de transacción",

        'from' => "Cuenta de origen",
        'to' => "Destination account",

        'desc' => "Descripción de la transacción",
        'action' => "Ver transacción",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ ¡Importante! Violación de reglas | :shop",
        'category' => "Informe crítico",
        'title' => "Tu tienda ha sido penalizada",
        'action' => "Abrir panel de control de la tienda",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter te invitó a Selldone",
        'title' => ":name le envió :amount para ayudarlo a lanzar su nuevo sitio web en línea y monetizarlo.",
        'message' => "Hola **:receiver_name**,<br><br>¡Bienvenido a Selldone! En Selldone, puede crear fácilmente su sitio de comercio electrónico, blog, comunidad en línea e incluso configurar un sistema POS en línea para ventas en persona, todo en cuestión de minutos. Es el sistema operativo empresarial en línea completo diseñado para hacer que su negocio sea mejor, más rápido y más fácil de administrar.<br><br>Regístrese mediante <b>:date</b> y reciba un cupón :amount para comenzar.",
        'accept' => "Aceptar la invitacion",
        'owner' => "Propietario de",
        'join-date' => "En Selldone desde",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Enlace de recuperación | :shop",
        'category' => "Tienda de seguridad",
        'title' => "Almacene el enlace de recuperación de <b>:shop_name</b> .",
        'message' => "Te enviamos este correo electrónico porque solicitaste restaurar tu tienda. Al hacer clic en el enlace a continuación, recuperará su tienda y todos los datos que le pertenecen.",
        'action' => "Confirmar la recuperación de la tienda",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => '¿Cuánto dinero ahorró Selldone para su negocio?',
        'sub-title' => 'Desde fecha :start a :end',
        'infrastructure' => [
            'title' => 'Infraestructura',
            'subtitle' => 'Servidores, CDN, almacenamiento y otros servicios en la nube',
        ],
        'experts' => [
            'title' => 'Expertos y personal',
            'subtitle' => 'Desarrolladores, mantenimiento y soporte',
        ],
        'total_save' => 'Dinero total ahorrado'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Tu actuación',
        'sub-title' => 'Descripción general del negocio de :start a :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Usuarios devueltos',

        'shop_views' => 'Vistas de la tienda',
        'baskets' => [
            'title' => 'Carritos de compra',
            'subtitle' => 'Informar el número de carritos de compra nuevos',

        ],
        'products' => [
            'title' => 'Resumen de productos',
            'subtitle' => 'Estado de los productos en la tienda por tipo',
            'value_name' => 'productos'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Vistas totales de la página del sitio web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Ha recibido un nuevo pedido. Vaya a la página de procesamiento de pedidos en su panel de proveedor.",
        'subject' => "🛍️ Nuevo pedido recibido | :order_id",
        'your_revenue' => "Sus ingresos",
    ],
    'vendor-invite' => [
        'title' => 'Invitación del vendedor',
        'message' => "Has recibido una invitación para convertirte en vendedor de :shop_name. Puedes aceptarla o rechazarla haciendo clic en los siguientes botones.",
        'subject' => ":shop_name | Recibiste una invitación para convertirte en nuestro proveedor",
        'accept' => "Acepte y conviértase en proveedor",
        'reject' => "Rechazar",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitación a unirse a nuestro equipo',
        'message' => "Ha sido invitado a unirse a :vendor_name en :shop_name. Puede aceptar o rechazar esta invitación utilizando los botones a continuación.",
        'subject' => "Invitación a unirse a :vendor_name | Conviértete en miembro del equipo",
        'accept' => "Acepta y únete al equipo",
        'reject' => "Rechazar",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Su código de acceso para :shop",
        'header-message' => "Le enviamos este correo electrónico porque solicitó un código de inicio de sesión para la tienda. A continuación, encontrará su contraseña de un solo uso (OTP):",
        'footer-message' => "Este código será válido durante 10 minutos. Si no solicitó este código de inicio de sesión, ignore este correo electrónico."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifica tu correo electrónico | :shop",
        'title' => 'Verificación de correo electrónico',
        'header-message' => "Hola :name:<br>Confirme que **:email** es su dirección de correo electrónico haciendo clic en el botón a continuación o utilizando el enlace a continuación dentro de las 48 horas.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Actualizaciones de productos | :shop",
        'title' => "Actualización del estado del producto: últimas 24 horas",
        'message' => "Espero que este mensaje te encuentre bien. Esta es una breve actualización para informarle sobre el estado de sus productos en nuestra plataforma durante las últimas 24 horas.\nDurante este período se han producido cambios en el estado de algunos productos. Estos cambios pueden deberse a compras, actualizaciones de stock u otros eventos relacionados.\nPara obtener información más detallada sobre cada producto, inicie sesión en su cuenta y consulte la sección \"Estado del producto\".",
        'action' => "Abrir panel de proveedores",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Pedidos al por mayor recibidos | :shop | :date",
        'title' => "Notificación de pedidos al por mayor",
        'message' => "Ha recibido un lote de pedidos al por mayor. Visite la página de procesamiento de pedidos en su panel para obtener más detalles. También puede descargar la lista de pedidos a través del enlace seguro proporcionado, válido por 7 días.<br><br>\r\n        <b>IMPORTANTE:</b> Este enlace es válido por 7 días.<br>\r\n        Este enlace es dinámico, por lo que cada vez que hagas clic en él recibirás los pedidos más actualizados para esta fecha específica. <b>Esto significa que si el estado de pago del pedido cambia a rechazado, ya no verá ese pedido en el CSV descargado, o si el pedido se paga, aparecerá en la lista.</b><br><br>\r\n        <ul>\r\n            <li>El CSV contiene pedidos pagados con fecha reservada en :date.</li>\r\n            <li>La fecha reservada es la fecha en la que el usuario hace clic en pagar en la página del pedido.</li>\r\n        </ul>\r\n        <b>Para evitar pedidos duplicados, verifique siempre el ID del pedido antes de enviarlo.</b>",
        'action' => "Descargar lista de pedidos",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Algunos artículos de su pedido no fueron aceptados y no se pueden entregar. El importe de estos artículos se reembolsará en su tarjeta en breve."
    ]

,






];
