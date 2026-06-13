<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Esta mensaxe dá a benvida a un novo comprador á tenda.',
        ShopMailTemplateCodes::OrderCheckout => 'Esta notificación envíase cando un comprador confirma un pedido.',
        ShopMailTemplateCodes::OrderPayment => 'Esta notificación confirma o pago exitoso realizado por un cliente.',
        ShopMailTemplateCodes::OrderUpdate => 'Esta mensaxe envíase para actualizar un comprador sobre o estado do seu pedido.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Esta mensaxe envíase a un vendedor para notificarlle un pedido confirmado.',
        ShopMailTemplateCodes::PosCheckout => 'Esta notificación envíase para confirmar un pedido de punto de venda para un comprador.',
        ShopMailTemplateCodes::PosPayment => 'Esta notificación confirma un pago no punto de venda realizado por un comprador.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Esta mensaxe notifica ao vendedor unha compra realizada no seu punto de venda.',
        ShopMailTemplateCodes::ShopContact => 'Esta notificación envíase cando se enviou un formulario de contacto.',
        ShopMailTemplateCodes::ShopGiftCard => 'Esta notificación informa a un usuario de que recibiu unha tarxeta regalo.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Esta mensaxe dá a benvida a un novo vendedor na tenda.',
        ShopMailTemplateCodes::ShopVendorInvite => "Esta mensaxe envíase para invitar a un provedor a unirse ao teu mercado.",
        ShopMailTemplateCodes::ShopVendorOrder => "Esta mensaxe envíase ao provedor cando se recibe un pedido no estado Pagado ou contra reembolso (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Envíase diariamente para actualizar os provedores sobre o estado dos seus produtos.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Esta mensaxe envíase para invitar a un provedor a unirse ao teu mercado.",

        ShopMailTemplateCodes::UserLogin => "Notifique ao usuario os detalles de inicio de sesión, incluído o enderezo IP, a data e o dispositivo, por motivos de seguridade.",
        ShopMailTemplateCodes::LoginCode => "Envía un código de contrasinal único para que os usuarios inicien sesión na tenda.",

        ShopMailTemplateCodes::EmailVerifyLink => "Envía unha ligazón para verificar o enderezo de correo electrónico do usuario. Este correo electrónico envíase cando un usuario se rexistra mediante SMS e introduce o seu correo electrónico. Non se envía cando un usuario se rexistra directamente co inicio de sesión social ou correo electrónico.",

        ShopMailTemplateCodes::EmailBulkOrder => "Envía unha lista de pedidos recibidos e pagados en masa para un día específico."


    ,

    ],


    'global' => [
        'greetings' => 'Ola, :name!',
        'end-statement' => 'Equipo de apoio',

        'receiver_name' => 'Ola :user_name',
        'footer-help' => "Necesitas axuda? Pregunta en [support@selldone.com](mailto:support@selldone.com) ou visita o noso [centro de axuda](https://selldone.com/community).",
        'selldone-team' => 'O equipo Selldone',
        'footer-shop' => "Se precisas axuda con calquera cousa, non dubides en enviarnos un correo electrónico: :shop_mail",
        'accept' => "Aceptar",
        'reject' => "Rexeitar",
        'verify' => "verificar",
        'title' => "Título",
        'value' => "Valor",
        'description' => "Descrición",
        'shop' => "Tenda",
        'shop-info' => "Información da tenda",
        'user' => "usuario",
        'user-info' => "Información da conta",
        'license' => "Licenza",
        'status' => "Estado",
        'start' => "Comeza",
        'end' => "Fin",
        'renewal' => "Renovación",
        'view' => "Ver",

        'balance' => "Equilibrio",
        'card_number' => "Número de tarxeta",
        'cvv' => "Cvv",
        'expire_date' => "Data de caducidade",

        'Dashboard' => "Panel de control",
        'order' => "orde",
        'view_order' => "Ver orde",
        'pay_now' => "Pay now",

        'official_selldone' => "VENTA OFICIAL",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Moeda",
        'free-balance' => "Saldo libre",
        'locked-balance' => "Saldo bloqueado",
        'bot' => "Bot",
        'requests' => "Solicitudes",
        'baskets' => 'Carros',
        'physical' => "Físico",
        'virtual' => "Virtual",
        'file' => "Arquivo",
        'service' => "Servizo",
        'fulfillment' => "Cumprimento",
        'open' => "Aberto",
        'reserved' => "Reservado",
        'canceled' => "Cancelado",
        'payed' => "Pagado",
        'cod' => "COD",
        'orders-count' => 'Ordes',
        'payments-count' => 'Pagamentos',
        'confirms-count' => 'Confirma',
        'sends-count' => 'Envía',
        'delivers-count' => 'Entrega',
        'count' => 'Conta',
        'transactions-count' => 'As transaccións contan',
        'success-transactions' => 'Transaccións exitosas',
        'total-amount' => 'Cantidade total',
        'amount' => 'Cantidade',
        'wage' => 'Salario',
        'debug' => 'Depurar',
        'pos' => 'POS',
        'live' => 'En directo',
        'CheckQueue' => 'Comprobar a cola',
        'OrderConfirm' => 'Confirmar pedido',
        'PreparingOrder' => 'Preparando orde',
        'SentOrder' => 'Orde enviada',
        'ToCustomer' => 'Entregado ao cliente',
        'Pending' => 'Pendente',
        'Accepted' => 'Aceptado',
        'Rejected' => 'Rexeitado',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Teléfono',
        'total' => 'Total',
        'view-detail' => 'Ver detalle',
        'empty' => 'Baleiro',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Responder',
        'reactions' => 'Reaccións',
        'Comments' => 'Comentarios',
        'last-comment' => 'Último comentario',
        'response-to' => 'Resposta a',
        'posts' => 'Publicacións',
        'post' => 'Publicación',

        'name' => 'Nome',
        'email' => 'Correo electrónico',
        'type' => 'tipo',
        'device' => 'Dispositivo',
        'platform' => 'Plataforma',
        'browser' => 'Navegador',
        'time' => 'Tempo',
        'Wallet' => 'Carteira',
        'date' => 'Data',

        'account' => 'Conta',
        'transaction' => 'Transacción',
        'fee' => 'Taxa',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Categoría',
        'password' => 'Contrasinal',
        'verify-login' => "Verificar e iniciar sesión",
        'url' => 'URL',
        'avocado' => 'aguacate',
        'hyper' => 'Hiper',
        'buy-now' => "Compre agora",
        'add-domain' => "Add Domain",
        'views' => 'Vistas',


        'country' => 'País',
        'address' => 'enderezo',
        'postal' => 'Código Postal',
        'building_no' => 'Edificio #',
        'building_unit' => 'Unidade #',
        'message' => 'Mensaxe',


        'customer' => 'Cliente',
        'cart-items' => 'Artigos do carro',
        'payment' => 'Pago',
        'receiver' => 'Receptor',
        'virtual-items' => 'Elementos virtuais',
        'no-payment' => 'Sen pago!',

        'enable' => 'Activar',
        'access' => 'Acceso',
        'bank' => 'Información bancaria',

        'vendor' => 'Vendedor',

        'view_content' => "Ver contido completo",
        'files' => 'Arquivos',
        'download' => 'Descargar',
        'file_name' => 'Nome do ficheiro',
        'file_size' => 'Tamaño',

        'subscription' => 'Subscrición',
        'products' => 'Produtos',
        'vendor_products' => 'Produtos Vendedores',

        'pickup' => 'Recollida',

        'minutes' => 'Minutos',
        'hours' => 'Horario',

        'refund' => 'Reembolso',
        'recipient_address' => 'Enderezo do destinatario',
        'signature' => 'Sinatura',
        'blockchain' => 'Blockchain',
        'details' => 'Detalles',


    

        'Shop' => 'Tenda',
        'dashboard' => 'panel de control',
        'comments' => 'comentarios',
        'wallet' => 'carteira',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Informe de rendemento, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Informe estacional, Selldone'
        ],
        'Onboarding' => [
            'id' => 'ola',
            'name' => 'Aproba, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Soporte :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verifica, Selldone'
        ],
        'Welcome' => [
            'id' => 'ola',
            'name' => 'Comunidade, Selldone'
        ],
        'NewShop' => [
            'id' => 'comerciantes',
            'name' => 'Aproba, Selldone'
        ],
        'Approve' => [
            'id' => 'aprobar',
            'name' => 'Aproba, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Xestión de pedidos :name'
        ],

        'Recovery' => [
            'id' => 'recuperación',
            'name' => 'Equipo de recuperación de Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Pendente ⌛',
        'PAYED' => 'Pagado ✅',
        'CANCELED' => 'Cancelado ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrador',
            'OFFICER' => 'Oficial e Supervisor',
            'AUDITING' => 'Gerente de auditoría',
            'EMPLOYEE' => 'Empregado',
            'PRODUCT' => 'Xestor de produtos',
            'CONTENT' => 'Xestor de contidos',
            'MARKETING' => 'Xefe de Marketing',
            'VIEWER' => 'Visor',

        ],
        'subject' => ":inviter invitoute como :level| :shop",
        'category' => "Convocatoria do persoal",
        'title' => "Invitáronte a <b>:shop_name</b> como <b>:level</b> .",
        'message' => "Recibiches unha invitación para colaborar co equipo <b>:shop_title</b> na empresa. Tes a opción de aceptar ou rexeitar esta oferta. Se decide aceptar, inicie sesión no servizo Selldone para confirmar a súa decisión. Tras a confirmación, terás acceso á sección de xestión da tenda.",

    ],

    'welcome-email' => [
        'subject' => "👋 Benvido :name, imos comezar con Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Benvido ao Selldone",
        'message' => "Grazas por escoller Selldone! Agora formas parte dunha comunidade vibrante que conecta vendedores globais con clientes, empresas locais con empresas e individuos con corporacións. Todas as nosas ferramentas Master e Pro están dispoñibles para ti **gratis** e **ilimitada**. Estamos aquí para apoiarte e abrir as portas do teu éxito.",

        'index' => "Paso :step.",

        'step-domain' => [
            'title' => 'Engade o teu dominio personalizado',
            'message' => "Para comezar, engade gratis o teu dominio personalizado no Panel de control da tenda en Configuración > Configuración de dominios.",
            'action' => 'Xestionar os meus dominios',
        ],
        'step-landing' => [
            'title' => 'Personaliza a túa páxina de inicio',
            'message' => "Personaliza a túa páxina de inicio indo a Panel > Páxinas. Escolle unha páxina de destino ou crea unha nova. É sinxelo e intuitivo e podes comezar a traballar nel de inmediato.",
            'action' => 'Personaliza a miña páxina de destino',
        ],
        'step-payment' => [
            'title' => 'Configurar métodos de pago',
            'message' => "Comeza a aceptar pagos directamente na túa conta bancaria. Para conectar os teus provedores de pagos como Stripe, PayPal e outros, vai a Panel > Contabilidade > Pasarela.",
            'action' => 'Engadir métodos de pago',
        ],
        'step-products' => [
            'title' => 'Engade os teus produtos',
            'message' => "Engade facilmente produtos e categorías no Panel > Produtos. É como xestionar ficheiros e cartafoles no teu PC: listo para arrastrar e soltar. Tamén pode importar produtos a granel mediante Excel. Hai un modelo de mostra dispoñible para axudarche a comezar.",
            'action' => 'Xestionar os meus produtos',
        ],
        'step-shipping' => [
            'title' => 'Configurar métodos de envío',
            'message' => "Para cobrar aos clientes polo envío, define os teus métodos de envío no Panel de control > Loxística > Envío. Podes establecer prezos e soporte diferentes para varias localizacións. Non esquezas definir a orixe do teu almacén en Panel > Loxística > Almacén.",
            'action' => 'Xestionar os métodos de envío',
        ],
    

        'seller' => [
            'title' => 'Vostede é un vendedor?',
            'message' => 'Para comezar a vender, introduce o teu panel de control en Selldone a través da seguinte ligazón e crea a túa primeira tenda totalmente gratuíta. Isto levará uns minutos e terás a túa propia tenda e sitio en liña. A continuación, guiarémosche nos seguintes pasos e obteremos a pasarela de pago.',
            'action' => 'Inicia sesión no meu panel',
        ],
        'buyer' => [
            'title' => 'Eu son un comprador',
            'message' => 'Parabéns. Unha vez que sexas membro de Selldone, librarás de todas as molestias da adhesión e da autenticación nas tendas en liña. Para beneficiarse de calquera tenda e sitio que utilice a plataforma Selldone, pode iniciar sesión cun clic e facer a súa compra sinxela, rápida e segura.',
        ],
    ],


    'charge-account' => [
        'category' => 'Carteira > Conta > Cargo',
        'title' => "Cargo de éxito",
        'message' => "A súa conta <b>:account_number</b> foi con éxito <b>:amount</b> charged.",
        'account' => 'Conta',
        'charge' => 'Cargar',
        'balance' => 'Equilibrio',
        'footer' => "Fai que o negocio sexa fácil, alcanzable e accesible para calquera persoa en todo o mundo."
    ],

    'verify-email' => [
        'subject' => "🙌 Completa o teu rexistro en Selldone! Verifica a ligazón.",
        'category' => "ESTÁS A UN PASO",
        'title' => "Verifica o teu enderezo de correo electrónico",
        'message' => "Ola :name,<br><br>Grazas por escoller Selldone!<br><br>Para confirmar que <b>:email</b> é o teu enderezo de correo electrónico correcto, fai clic no botón que se indica a continuación ou fai clic na ligazón que se indica a continuación. Tes 48 horas para completar esta verificación.",
        'footer' => "Se tes problemas para facer clic no botón Verificar, copia e pega o URL a continuación no teu navegador web: :activation_url",
        'next-step' => "A continuación, enviarémosche algúns materiais útiles e unha guía paso a paso para que che sexa máis sinxelo engadir o teu dominio personalizado, configurar pagos, engadir produtos e obter o teu primeiro pedido.",

    ],
    'verify-email-code' => [
        'subject' => "Código de verificación para :name",
        'category' => "SECURITY",
        'title' => "Código de verificación de correo electrónico",
        'message' => "Ola :name,<br><br>Para confirmar que <b>:email</b> é o teu enderezo de correo electrónico correcto, introduce o seguinte código nos próximos <b>10 minutos</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 A túa tenda está lista| :name",
        'category' => "ESTÁS A UN PASO",
        'title' => "Configuración completada",
        'account_title' => "A túa conta",
        'account_msg' => "Verifica e inicia sesión na túa conta con esta información.",
        'shop_msg' => "Información da conta no sistema operativo empresarial Selldone.",

    ],

    'reset2fa' => [
        'category' => "MENSAXE OFICIAL DE SEGURIDADE",
        'title' => "Solicitar desactivar o inicio de sesión en 2 pasos",
        'message' => "Recibiches este correo electrónico porque recibimos unha solicitude para restablecer a autenticación de dous factores para a conta **:name** co correo electrónico **:email**.<br><br>Atopamos os seguintes detalles da túa conta:",
        'footer' => "Se non solicitou o restablecemento do contrasinal, non se precisa ningunha acción adicional.",
        'action' => 'Desactivar o inicio de sesión en dous pasos',
    ],


    'build-new-shop' => [
        'subject' => "🎊 A túa tenda xa está lista!",
        'category' => "NACEN NOVA TENDA ONLINE NO MUNDO",
        'title' => "Parabéns, :name!",
        'message' => "<b>Parabéns, :name! O teu novo negocio en liña xa está activo!</b> Estamos encantados de darte a benvida á comunidade de Selldoners. Deches o primeiro paso cara ao éxito e estamos aquí para axudarche en cada paso.<br>Agora que a túa tenda está lista, asegurámonos de que estás preparado para recibir pagos directamente dos teus clientes e comezar a facer crecer o teu imperio. Se algunha vez necesitas axuda, estamos a unha mensaxe de distancia: o noso equipo de asistencia sempre está aquí para ti.<br><br><b>Próximos pasos importantes:</b> Para comezar, asegúrate de que esteas todo preparado para recibir pagos e realizar operacións sen problemas. Guiarémoste en cada etapa para que a túa tenda funcione sen problemas.",
        'pdf-book' => "Non te perdas o libro de man adxunto: Fai o teu negocio como un xogo",

        'account' => [
            'title' => 'Paso 1: crea unha conta na carteira Selldone',
            'message' => "Para comezar, crea unha conta na túa carteira Selldone. Aquí é onde se deducirán as túas taxas e tamén é onde recargas para que a túa tenda funcione sen problemas. Se o teu saldo é negativo, non te preocupes! A túa tenda seguirá funcionando sen interrupcións.",
            'action' => 'Inicia sesión na carteira',
        ],

        'shop-account' => [
            'title' => 'Paso 2: conecta a conta á tenda',
            'message' => "A continuación, conecta a túa conta de carteira á túa tenda. Diríxete a <b>Store > Contabilidade > Factura</b> e vincula a túa carteira. Isto garante que todos os pagos dos clientes se depositen directamente na túa conta bancaria; Selldone non deduce ningún importe das túas ganancias.",
            'action' => 'Panel de facturas da tenda',
        ],

        'gateway' => [
            'title' => 'Paso 3: Conecte a pasarela de pago en liña',
            'message' => "Agora, imos configurar a súa pasarela de pago en liña. Vaia a <b>Store > Contabilidade > Port</b> e prema en <b>Add New Port</b>. Seleccione a súa moeda e verá unha lista de pasarelas de pago dispoñibles. Conectar unha pasarela é rápida e sinxela, pero se precisas axuda, consulta as guías Selldone ou ponte en contacto connosco.",
            'action' => 'Engade un portal á tenda',
        ],

        'domain' => [
            'title' => 'Último paso: conectar un dominio dedicado',
            'message' => "Agora, vincula o teu dominio personalizado á túa tenda. Isto permítelles aos clientes mercar os teus produtos ou servizos e facerche pagos directamente.",
            'action' => 'Presentando e recibindo tarxetas regalo ilimitadas',
        ],
    ],


    'basket-list' => [
        'item' => "elemento",
        'count' => "Conta",
        'price' => "prezo",
        'discount-code' => "Código de desconto",
        'customer-club' => 'Club de clientes',
        'shipping' => "Envío",
        'total' => "Total",
        'offer' => "Oferta",
        'coupon' => "Cupón",
        'lottery' => "Premio",
        'tax' => "Imposto",
        'tax_included' => "Incluído no prezo",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Método',
        'amount' => 'Cantidade',
        'giftcard' => 'Gift card',
        'payment' => 'Pago',
    ],


    'shop-subscription-email' => [
        'category' => "Actualización da subscrición",
        'title' => "Licenza de tenda: :shop_title",
        'title-reserved' => "Reserva de licenza: :shop_title",
        'title-active' => "Licenza activa: :shop_title",
        'title-finished' => "Licenza rematada: :shop_title",
        'title-cancel' => "Cancelar licenza: :shop_title",
        'message' => "Actualizouse o plan de licenza da túa tenda,",
        'RESERVED' => "⚡ O teu plan de subscrición foi **reservado**.",
        'ACTIVE' => "🟢 O teu plan de subscrición foi **activado**.",
        'FINISHED' => "🚧 O teu plan de subscrición foi **finalizado**.",
        'CANCEL' => "⛔ O teu plan de subscrición foi **cancelado**.",
    ],

    'support' => [
        'subject' => "Centro de Apoio|:name respondeu",
        'category' => "Centro de apoio",
        'title' => "Recibiches unha resposta",
        'action' => "Abrir administrador da tenda",
    ],

    'shop-customer-join' => [
        'subject' => "Únete a :shop_title",
        'category' => "Celebración de novos clientes",
        'title' => "Estamos felices pola túa adhesión",
        'action' => "Visita agora",
    ],

    'shop-vendor-join' => [
        'subject' => "Incorporación de vendedores| :shop_title",
        'category' => "Festa do novo vendedor",
        'title' => "Estamos felices pola túa adhesión",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Tarxeta de agasallo :shop_title",
        'category' => "Engadir tarxeta nova",
        'title' => "Parabéns, recibiches unha tarxeta regalo",
        'action' => "Compre agora",
        'message' => "Recibiches unha tarxeta de agasallo por importe de :balance :currency. Poderás mercar na nosa tenda con esta tarxeta regalo.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centro de Apoio| :shop",
        'category' => "apoio",
        'title' => "Recibiches unha resposta",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️Confirmación de pedido|Orde :order_id",
        'title' => "orde",
        'message' => "Fixeches un pedido na nosa tenda. Recibimos o teu pedido e enviarémosche outro correo electrónico unha vez que se confirme o pago."
    ,

        'payments' => 'Pagamentos',
    ],

    'order-payment' => [
        'subject' => "🛍️Confirmación de pago|Orde :order_id",
        'title' => "Orde de pago",
        'message' => "O teu pago completouse,<br> Temos o teu pedido. Enviarémosche outro correo electrónico cando se envíe o teu pedido.",
    

        'payments' => 'Pagamentos',
    ],

    'order-update' => [
        'subject' => "🛍️ Actualización do estado do pedido|Orde :order_id",
        'title' => "Actualización do estado do pedido",
        'message' => "Actualizouse o teu pedido. Podes consultar o estado máis recente deste pedido na túa conta.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "O teu pedido está na cola de procesamento. Avisarémosche cando estea a preparar.",
                'OrderConfirm' => "O teu pedido está confirmado e a preparación comezou.",
                'PreparingOrder' => "O teu pedido estase a preparar e enviarase en breve.",
                'SentOrder' => "O teu pedido foi enviado. En breve o recibirás.",
                'ToCustomer' => "O teu pedido foi entregado. Esperamos que o disfrutedes!",

                'PreparingOrder-PICKUP' => "O teu pedido estase a preparar. Recibirás unha notificación cando estea listo para a recollida.",
                'SentOrder-PICKUP' => "O seu pedido está listo para a súa recollida. Por favor, veña á tenda para recollelo.",
                'ToCustomer-PICKUP' => "O teu pedido foi recollido. Esperamos que o disfrutedes!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "O teu pedido está na cola de procesamento. Avisarémosche cando estea listo.",
                'OrderConfirm' => "O teu pedido está confirmado e a preparación está en curso.",
                'PreparingOrder' => "O teu pedido estase a preparar e en breve será enviado.",
                'ToCustomer' => "O teu pedido virtual foi entregado á túa conta. Grazas!"
            ],
            'SERVICE' => [
                'CheckQueue' => "A túa solicitude de servizo está na cola. Avisarémosche cando comecemos.",
                'OrderConfirm' => "O teu servizo está confirmado e preparámonos para comezar.",
                'PreparingOrder' => "Estamos preparando o teu servizo e notificarémosche cando estea completado.",
                'ToCustomer' => "O teu servizo está completo. Grazas por elixirnos!"
            ],
            'FILE' => [
                'PreparingOrder' => "O teu ficheiro estase a preparar e estará dispoñible en breve.",
                'ToCustomer' => "O teu ficheiro está listo e entregouse. Agora podes descargalo."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "O teu pedido de subscrición está na cola. Notificarémosche cando comece o procesamento.",
                'OrderConfirm' => "A túa subscrición foi confirmada e estase configurando.",
                'PreparingOrder' => "Estamos preparando a túa subscrición e comezará en breve.",
                'SentOrder' => "Activouse a túa subscrición. Recibirás actualizacións continuas.",
                'ToCustomer' => "O teu servizo de subscrición activouse correctamente."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Parabéns :name|Novo cupón: :title',
        'category' => "PARABÉNS, NOVO VALO",
        'message' => "Ola :name,<br><br>Recibiches un novo vale como agasallo de nós! Podes gañar aínda máis vales presentando Selldone aos teus amigos e a todos os que coñeces. Este vale vale **:price :currency**.<br><br>Deches o primeiro paso e estamos aquí para axudarche a desbloquear novas funcións co teu vale. Inicia sesión con **:email** e busca o teu cupón na Tenda **Panel de control** > **Configuración** > **Licenza**.<br><br>Parabéns!",
        'action' => "O meu panel de control",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Parabéns, querido :name | Recibiches un agasallo',
        'category' => "Anuncio de recepción dun agasallo",
        'title' => "Regalos para ti",
        'message' => "Ola :name, estamos encantados de informarche de que recibiches un agasallo especial de Selldone. 🎉 Podes gañar máis agasallos mantendo activo, facendo crecer a túa tenda e mellorando a túa experiencia en Selldone. Para comprobar o teu agasallo, só tes que iniciar sesión con :email e búscao na esquina superior dereita do teu panel de control.<br><br>Este agasallo vale **:price :currency** e podes depositalo facilmente na túa carteira dentro do teu agasallo QQ00006QQ009QQQQ009QQQQ. para actualizar a licenza da túa tenda e desbloquear ferramentas aínda máis poderosas para impulsar o teu negocio en liña.",
        'action' => "Agasallos",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Novo pedido recibido| :order_id",
        'title' => "New Order",
        'message' => "Recibiches un novo pedido. Vaia á páxina de procesamento de pedidos na súa tenda.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'A súa información completa',
        'output-form-title' => 'Información do artigo comprado',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Informe semanal :time',
        'title' => 'Informe semanal do rendemento da tenda',
        'message' => "Este é o informe semanal da túa tenda desde <b>:start</b> ata <b>:end</b>. Este informe inclúe consellos para mellorar o teu negocio, tamén podes consultar o estado da túa tenda en liña e os pedidos recentes. Espero que teñades un bo día e semana por diante."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ O teu informe de aforro :amount nos últimos tres meses| :shop_title',
        'title' => 'Informe estacional sobre a súa actividade empresarial, recompensas e aforro financeiro',
        'message' => "Este é o seu informe estacional <b>:shop_title</b> de <b>:start</b> a <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Contas conectadas',
        'sub-title' => 'Cal é o estado máis recente das contas de carteira conectadas á miña tenda?',
        'view-wallet' => 'Ver carteira',
        'tip-title' => 'Consellos importantes',
        'tip' => "Configura unha carteira Selldone gratuíta e vincúlaa á túa tenda. Aínda que o teu saldo sexa negativo, os teus clientes poden mercar e pagar sen ningún problema. Non te preocupes, as operacións e os datos da túa tenda continuarán sen problemas durante ata 1 mes, sen interrupcións.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Conectar á conta'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplicacións instaladas',
        'sub-title' => 'Lista de aplicacións que instalaches na túa tenda esta semana.',
        'tip' => "Queres atopar máis aplicacións para a túa tenda?",
        'view-app-store' => 'Visita a tenda de aplicacións Selldone.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Os teus bots da tenda',
        'sub-title' => 'Bots de vendas activos na miña tenda.',
        'tip-title' => 'Venta de bot',
        'tip' => "Selldone proporcionouche bots de vendas automáticas. Todo o que tes que facer é ir ao panel Complementos> Bots e activar os bots da túa tenda. Ten en conta que o servizo correspondente debe estar dispoñible no teu país.",
        'view-bots' => 'Xestionar bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Comunicación cos Clientes',
        'sub-title' => 'Cantos contactos tiven cos meus clientes esta semana?',
        'faqs' => 'Preguntas máis frecuentes',
        'tickets' => 'Tickets de clientes',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Estado dos usuarios',
        'sub-title' => 'Actividade de :start a :end',
        'users' => [
            'title' => 'Clientes',
            'subtitle' => 'Usuarios de rexistro',
        ],
        'views' => [
            'title' => 'Visitas',
            'subtitle' => 'Cantas veces visitaches a tenda',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Usuarios retornados',

        'shop_views' => 'Vistas da tenda',
        'baskets' => [
            'title' => 'Carros da compra',
            'subtitle' => 'Informar do número de carros da compra novos',
        ],
        'products' => [
            'title' => 'Visión xeral dos produtos',
            'subtitle' => 'Estado dos produtos na tenda por tipo',
            'value_name' => 'Produtos'
        ],
        'products_count' => 'Tipos de produtos',
        'views_count' => 'Conta de vistas',
        'sell_count' => 'Conta de vendas',
        'send_count' => 'Conta de envíos',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Envío directo',
        'sub-title' => 'Panel para os principais vendedores de Drop Shipping Selldone.',
        'total_fulfillments' => 'Total de pedidos recibidos',
        'ds_count' => 'Pedidos recibidos',
        'statistics_title' => 'Informar de pedidos recibidos',
        'ds_cancels' => 'Cancelar polo vendedor da interface',
        'ds_rejects' => 'Cancela por ti',
        'tip' => "Vostede é un gran vendedor de mercadorías? Tes un almacén, fábrica ou distribuidor de produtos? Podes ofrecer os teus produtos a outros vendedores no servizo de envío directo de Selldone para vender o teu produto a gran escala. Envíanos un correo electrónico a support@selldone.com para guiarte.",
        'view-drop-shipping-panel' => 'Inicie sesión no panel por xunto',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Tipos de cambio',
        'sub-title' => 'Lista dos últimos tipos de conversión de moeda da túa tenda.',
        'from' => 'Moeda fonte',
        'to' => 'Moeda de destino',
        'rate' => 'Taxa de conversión',
        'view-exchange-panel' => 'Xestionar tipos de cambio',
    

        'vew-exchange-panel' => 'panel de xestión de tipos de cambio',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contratos de expertos',
        'sub-title' => 'Que profesionais traballan na miña tenda?',
        'cost' => 'Importe do contrato',
        'duration' => 'Duración',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data de cancelación',
        'end_at' => 'Data de entrega',
        'tip' => 'Podes contratar aos mellores especialistas en Selldone para desenvolver o teu negocio.',
        'view-experts' => 'Fai clic para comezar.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Informar das pasarelas de pago activas na tenda :shop.',
        'tip-title' => 'Consellos importantes',
        'tip' => "Vai á páxina de xestión do portal na túa tenda e engade polo menos un porto nuns minutos. Aos seus clientes gústalles pagar de forma rápida e segura a través de portais en liña.",
        'view-shop-gateways' => 'Inicia sesión na xestión do portal da miña tenda.',
        'view-gateways' => 'Ver máis pasarelas',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Ordes',
        'sub-title' => 'Lista de pedidos que recibín esta semana.',
        'total_baskets' => 'Total de pedidos',
        'total_posBaskets' => 'Total de pedidos en efectivo',
        'pos-title' => 'Caixa da tenda POS',
        'chart-label' => 'Pedidos completados (estes pedidos non son necesariamente pagados!)',
        'tip-title' => 'Deberías esforzarte máis...',
        'tip' => "Sen éxito simple.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centro de procesamento',
        'sub-title' => 'Canto pedido procesamos na tenda esta semana?',
        'tip-title' => 'Non tiñas venda!',
        'tip' => "Desafortunadamente, non tiveches ningunha venda esta semana. Necesitas chegar máis á túa tenda. Podes engadir máis produtos, escoller mellores imaxes ou escribir mellores descricións para os teus produtos. Considere un traballo a tempo completo para a súa empresa. Se o fas ben e non te frustras, terás éxito.",
        'view-process-center' => 'Ver centro de procesos',
        'return' => [
            'title' => 'Pedido devolto',
            'subtitle' => 'Informar de pedidos devoltos.',
            'tip-title' => 'Sabías que...',
            'tip' => "Podes crear tantas caixas rexistradoras como necesites con Selldone POS! Xa sexa a túa tableta, móbil ou portátil, podes converter calquera dispositivo no punto de venda da túa tenda. É sinxelo, rápido de configurar e está totalmente preparado para o teu servidor. Comeza a usalo hoxe!",
            'view-pos' => 'Inicia sesión no caixeiro da miña tenda en liña'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesións',
        'sub-title' => 'Cantas veces visitei a miña tenda?',
        'countries-title' => 'Que países foron os máis visitados?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Queres gañar cartos sen gastar un dólar?',
        'message' => "Estimado :name, podes ir a Panel de control > Demonetización e crear unha ligazón de referencia. Envía a ligazón aos teus amigos, Recibes tarxetas de agasallo de Selldone e unha porcentaxe dos pagos do teu amigo. Teña en conta que a tarxeta de agasallo enviarase tanto a vostede como ao seu amigo.",
        'action' => 'Ver a miña ligazón de presentación',
        'mail-clip' => "<b style='color: #C2185B'>Importante:</b> se usa servizos de correo electrónico como Gmail que limitan a lonxitude do correo electrónico, busque a seguinte opción ao final do correo electrónico para mostrar o informe completo e prema nel:",

        'no-coin-reward' => "<b style='color: #C2185B'>Sentímolo:</b> a túa actividade non cumpriu o requisito para obter a recompensa gratuíta de moedas SEL. Proba máis e vende máis na túa tenda para a próxima tempada.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Recompensa:</b> Parabéns, polo teu fantástico rendemento, démosche unha recompensa gratuíta de :amount SEL Coin.",

        'need-buy-license' => "<b>Sube de nivel a túa empresa:</b> Parece que aínda non rexistraches ningún plan de subscrición para o teu sitio web. Actualiza agora para desbloquear máis funcións por só :amount ao mes se se paga anualmente.",
        'not-afford-message' => "Se non podes pagar ou tes algún problema co pago, non dubides en informarnos a través de support@selldone.com.",
        'add-domain' => "<b>Por que non tes un dominio personalizado para a túa empresa?</b><br> Engade agora un dominio ao teu sitio web; é gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone é un<del> produto</del> <span style = 'color: forestgreen'>comunidade</span> .<br> Sexa un vendedor profesional!",
        'message' => "Siga as páxinas oficiais do Selldone en Twitter, LinkedIn e redes sociais. Envíanos calquera comentario, solicitude ou crítica ou participa en discusións sobre Selldone. Tamén formamos parte da comunidade de Selldone que <b>fas</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Recibiuse novos pedidos de Avocado | :shop_title :time',
        'title' => "Informe de rendemento das últimas 24 horas",
        'message' => "Os teus clientes están agardando a que se revisen os teus pedidos e coñezan o prezo. Responde ás solicitudes dos teus clientes canto antes para conseguir máis vendas.",
        'card_title' => "Pedidos na cola",
        'card_subtitle' => "Desde :date",

        'card_payed' => "Pedidos pagos"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Responde á túa publicación en :community_title',
        'title' => ":name e :count outros comentaron nas túas publicacións.",
        'message' => "Ola :name, as túas publicacións chaman a atención. Recibiches comentarios na nosa comunidade. Inicia sesión na túa conta para unirte á discusión e ver o que di todos.",
        'title-simple' => ":name comentou nas túas publicacións.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Responde ao teu tema :topic_title',
        'title' => ":name e outros :count responderon sobre o teu tema.",
        'message' => "Ola :name, o teu tema está a chamar a atención! Recibiches respostas na nosa comunidade. Inicia sesión na túa conta para unirte á discusión e ver o que di todos.",
        'title-simple' => ":name respondeu sobre o teu tema.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Novo inicio de sesión :name',
        'category' => 'Notificacións de seguridade',
        'title' => "Inicie sesión na conta",
        'message' => "Estimado :name, detectouse un inicio de sesión na túa conta Selldone.",   // Login in selldone (seller)
        'message-shop' => "Estimado :name, iniciaches sesión en :shop_title .",  // Login in shop (buyer)

        'footer' => "Se non iniciaches sesión, cambia o teu contrasinal.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Retirada",
        'deposit' => "Depósito",

        'withdraw_subject' => "Retirar da conta :account",
        'deposit_subject' => "Depósito na conta :account",

        'message' => "A transferencia de diñeiro fíxose coas seguintes especificacións.",

        'type' => "Tipo de transacción",

        'from' => "Conta fonte",
        'to' => "Destination account",

        'desc' => "Descrición da transacción",
        'action' => "Ver transacción",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Importante! Violación das normas| :shop",
        'category' => "Información crítica",
        'title' => "A túa tenda foi penalizada",
        'action' => "Abrir o panel da tenda",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter invitoute a Selldone",
        'title' => ":name enviouche :amount para axudarche a lanzar a túa nova tenda en liña e monetizara.",
        'message' => "Ola **:receiver_name**,<br><br>Benvido a Selldone! En Selldone, pode crear facilmente o seu sitio de comercio electrónico, blog, comunidade en liña e mesmo configurar un sistema de punto de venda en liña para vendas presenciais, todo en poucos minutos. É o sistema operativo completo para empresas en liña deseñado para mellorar, acelerar e facer que a túa empresa sexa mellor, máis rápida e máis fácil de executar.<br><br>Rexístrate mediante <b>:date</b> e recibe un vale :amount para comezar.",
        'accept' => "Aceptar a invitación",
        'owner' => "Propietario de",
        'join-date' => "En Selldone dende",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Ligazón de recuperación| :shop",
        'category' => "Seguridade da tenda",
        'title' => "Ligazón de recuperación da tenda de <b>:shop_name</b> .",
        'message' => "Enviámosche este correo electrónico porque solicitaches restaurar a túa tenda. Facendo clic na seguinte ligazón recuperarase a túa tenda e todos os datos que lle pertencen.",
        'action' => "Confirme a recuperación da tenda",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Canto diñeiro aforrou Selldone para a súa empresa?',
        'sub-title' => 'Desde a data :start ata :end',
        'infrastructure' => [
            'title' => 'Infraestrutura',
            'subtitle' => 'Servidores, CDN, almacenamento e outros servizos na nube',
        ],
        'experts' => [
            'title' => 'Expertos e Persoal',
            'subtitle' => 'Desenvolvedores, mantemento e soporte',
        ],
        'total_save' => 'Total de cartos aforrados'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'A túa actuación',
        'sub-title' => 'Visión xeral do negocio de :start to :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Usuarios retornados',

        'shop_views' => 'Vistas da tenda',
        'baskets' => [
            'title' => 'Carros da compra',
            'subtitle' => 'Informar do número de carros da compra novos',

        ],
        'products' => [
            'title' => 'Visión xeral dos produtos',
            'subtitle' => 'Estado dos produtos na tenda por tipo',
            'value_name' => 'Produtos'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total de visitas á páxina do sitio web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Recibiches un novo pedido. Vaia á páxina de procesamento de pedidos no seu panel de provedores.",
        'subject' => "🛍️ Novo pedido recibido| :order_id",
        'your_revenue' => "Os teus ingresos",
    ],
    'vendor-invite' => [
        'title' => 'Invitación do vendedor',
        'message' => "Recibiches unha invitación para converterte en vendedor de :shop_name. Pode aceptalo ou rexeitalo premendo nos seguintes botóns.",
        'subject' => ":shop_name |Invitación a ser o noso vendedor",
        'accept' => "Acepta e convértete nun vendedor",
        'reject' => "Rexeitar",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitación para unirse ao noso equipo',
        'message' => "Invitáronte a unirte a :vendor_name en :shop_name. Podes aceptar ou rexeitar esta invitación usando os botóns seguintes.",
        'subject' => "Invitación para unirse a :vendor_name|Convértete nun membro do equipo",
        'accept' => "Acepta e únete ao equipo",
        'reject' => "Rexeitar",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "O teu código de inicio de sesión para :shop",
        'header-message' => "Enviámosche este correo electrónico porque solicitaches un código de inicio de sesión para a tenda. Busca o teu contrasinal único (OTP) a continuación:",
        'footer-message' => "Este código será válido durante 10 minutos. Se non solicitou este código de inicio de sesión, ignore este correo electrónico."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifica o teu correo electrónico| :shop",
        'title' => 'Verificación de correo electrónico',
        'header-message' => "Ola, :name,<br>Confirma que **:email** é o teu enderezo de correo electrónico facendo clic no botón de abaixo ou usando a seguinte ligazón nun prazo de 48 horas.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Actualizacións de produtos| :shop",
        'title' => "Actualización sobre o estado do produto: últimas 24 horas",
        'message' => "Espero que esta mensaxe che atope ben. Esta é unha breve actualización para informarte sobre o estado dos teus produtos na nosa plataforma durante as últimas 24 horas.\nDurante este período, producíronse cambios no estado dalgúns produtos. Estes cambios poden deberse a compras, actualizacións de stock ou outros eventos relacionados.\nPara obter información máis detallada sobre cada produto, inicie sesión na súa conta e consulte a sección \"Estado do produto\".",
        'action' => "Abre o panel de provedores",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Pedidos masivos recibidos| :shop | :date",
        'title' => "Notificación de pedidos a granel",
        'message' => "Recibiches un lote de pedidos masivos. Visita a páxina de procesamento de pedidos do teu panel para obter máis detalles. Tamén podes descargar a lista de pedidos a través da ligazón segura proporcionada, válida durante 7 días.<br><br>\n        <b>IMPORTANTE:</b> Esta ligazón é válida durante 7 días.<br>\n        Esta ligazón é dinámica, polo que cada vez que faga clic nela, recibirá os pedidos máis actualizados para esta data concreta. <b>Significa que se o estado de pago da orde cambia a rexeitado, xa non verá ese pedido no CSV descargado ou, se o pedido se paga, aparecerá na lista.</b><br><br>\n        <ul>\n            <li>O CSV contén pedidos de pago cunha data reservada no :date.</li>\n            <li>A data reservada é a data na que o usuario fai clic en pagar na páxina do pedido.</li>\n        </ul>\n        <b>Para evitar pedidos duplicados, comprobe sempre o pedido ID antes de enviar.</b>",
        'action' => "Descargar lista de pedidos",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Non se aceptaron algúns artigos do teu pedido e non se poden entregar. O importe destes artigos será reembolsado na túa tarxeta en breve."
    ]

];
