/*
 * Copyright (c) 2023. Selldone® Business OS™
 *
 * Author: M.Pajuhaan
 * Web: https://selldone.com
 * ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
 *
 * All rights reserved. In the weave of time, where traditions and innovations intermingle, this content was crafted.
 * From the essence of thought, through the corridors of creativity, each word, and sentiment has been molded.
 * Not just to exist, but to inspire. Like an artist's stroke or a sculptor's chisel, every nuance is deliberate.
 * Our journey is not just about reaching a destination, but about creating a masterpiece.
 * Tread carefully, for you're treading on dreams.
 */

export default {
  /** @see SShopProductRatingView **/
  surveys: ["Muy malo", "Malo", "Normal", "Bueno", "Excelente"],

  /** @see SFooterSection **/
  footer: {
    map: "Mapa",
    email: "Correo electrónico",
    phone: "Teléfono",
    address: "Dirección",

    copyright:
      "El contenido solo puede usarse con fines no comerciales y citando la fuente (enlace a {shop_title}). Todos los derechos reservados a {shop_title}.",
    powered_by: "Desarrollado por",
    privacy: "Política de privacidad",
    term_of_use: "Términos de uso",
    shop_app_setting: "Configuración de la tienda y RGPD",

    dialog_setting: {
      title: "Configuración de aplicaciones de la tienda",
      app_list: "Lista de aplicaciones",
    },
  },

  /** @see SShopProductCard **/
  product_card: {
    sold_out: "Agotado",
    review_unit: "reseña",
    not_original: "No es original",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtrar",
    native: {
      title: "Inicio de sesión en la aplicación",
      message:
        "Esta aplicación requiere acceso a la información de tu cuenta de la tienda. Esto incluye acceso a tu nombre, número de contacto, dirección, correo electrónico, historial de pedidos, realizar pedidos y publicar comentarios en esta tienda.",
      message_bold:
        "Asegúrate de usar la aplicación oficial de la tienda para entrar en esta tienda.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Ordenar por",
    title_small: "Ordenar por..",
    nothing: "Ninguno",
    most_views: "Más vistos",
    most_likes: "Más populares",
    most_recent: "Más recientes",
    most_sell: "Más vendidos",
    cheapest: "Más baratos",
    most_expensive: "Más caros",
    only_available: "Disponibles",
    view_mode: {
      normal: "Normal",
      grid: "Cuadrícula",
      list: "Lista",
      insta: "Estilo Insta",
    },
  },

  /** @see SProductOverview **/
  product_info: {
    fake: "Falso",
    action: "Subasta",
    compare_limit: "Límite de 10 artículos",
    compare_add: "Añadir a comparar",
    compare_be_in_list: "En la lista de comparación",

    type: "Tipo",
    brand: "Marca",
    category: "Categoría",
    discount: "Descuento",
    track_price: "Seguir precio",
    waiting_for_auction: "¿Esperando la subasta?",
    inform_auction: "Avísame de la subasta",
    return_in_days: "Garantía de devolución de {days} días",
    support24h7: "Soporte 24/7",
    support_normal: "Soporte en horario laboral",
    original_guarantee: "Garantía de originalidad",
    cod_payment: "Pago contra reembolso disponible",

    pros: "Ventajas",
    cons: "Contras",

    external_link: "Leer más",
    notifications: {
      congratulation: "Felicidades",
      waiting_list_add_success:
        "Te avisaremos cuando este producto sea subastado.",
      waiting_list_delete_success: "Saliste de la lista de espera de la subasta.",
    },

    offer_message: "Compra {min_quantity} y obtén un {percent}% de descuento en estos artículos",
    up_to: "Hasta {per_order}x por pedido",
    get_free: "GRATIS",
    get_off: "{percent}% DE DESCUENTO",
    select_a_vendor_message: "Selecciona un vendedor.",
    product_description_header: "Presentamos {product}",
  },

  /** @see SShopBuyButton **/

  buy_button: {
    waiting_for_availability: "Esperando disponibilidad",
    inform_me_when_available: "¿Lo estás esperando?",
    pay_buy: "Pagar y comprar",
    quantity: "Cantidad",
    quantity_in_basket: "Artículos en el carrito",
    count_unit: "x",
    remove: "Quitar",
    add_to_basket: "Añadir al carrito",
    buy: "Comprar",
    subscribe_now: "Suscríbete ahora",
    unsubscribe: "Cancelar suscripción",
    select_a_subscription_plan: "¡Selecciona un plan primero!",
    manage_subscriptions: "Gestionar suscripciones",
    notifications: {
      inform_add_success: "Te avisaremos cuando esté disponible.",
      inform_remove_success: "Te hemos quitado de la lista de espera.",
    },
    zip_pin_input: "Código postal / PIN",
    zip_pin_not_available_msg: "¡No disponible en esta ubicación!",
    zip_pin_placeholder: "Selecciona el código postal/PIN...",
  },

  /** @see StorefrontPageProduct **/

  product: {
    review: "Descripción",
    spec: "Especificaciones",
    comments: "Reseñas",
    price: "Precio",
    rate: "Valoración",
    comment: "Comentario",
    warranty: "Garantía",
    return_policy: "Política de devoluciones",
    guide: "Guía",
    shipping: "Envío",
    related_products_title: "También te puede gustar",
    related_categories_title: "Descubre en colecciones",
  },

  /** @see StorefrontLayout **/
  layout_shop: {
    shop_menu: {
      orders_history: "Historial de pedidos",
      profile: "Mi perfil",
      favorites: "Artículos favoritos",
      gift_cards: "Tarjetas de regalo",
      return_requests: "Pedidos devueltos",
      basket: "Carrito de compras",
    },
    user_menu: {
      my_shops: "Mis tiendas",
      go_to_admin: "Administrar {shop_name}",
      exit_from: "Salir de {shop_name}",
      chips: "{chips} fichas",
    },
    login_to_shop: "Iniciar sesión en la tienda",
    login_to_shop_short: "Iniciar sesión",
    item_in_basket_message: "Tienes {count} de este artículo en tu carrito.",
    search_title: "Buscar en la tienda {shop_name}",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Carrito",
    basket_is_empty: "Tu carrito está vacío.",
    total_price: "Total",
    view_basket: "Tu carrito",
    more: "Más ...",
    accept_and_pay: "Finalizar compra",
    items: "Artículo(s)",
  },

  /** {@see StorefrontPageUserOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Rechazado",
    table: {
      code: "Código de pedido",
      reserved: "Fecha",
      delivery_state: "Estado de entrega",
      price: "Precio total",
      status: "Estado de pago",
    },
  },
  /** {@see SOrdersList} **/
  history_orders: {
    table: {
      code: "Código de pedido",
      items: "Artículos",
      reserved: "Fecha",
      delivery_state: "Último estado",
      price: "Precio total",
      status: "Estado de pago",
    },
  },

  /** {@see StorefrontPageUser} **/
  user_page: {
    menu: {
      gift_card: "Tarjeta de regalo",
      comments: "Comentarios",
      favorites: "Favoritos",
      return_requests: "Devoluciones",
      addresses: "Direcciones",
      profile: "Perfil",
      orders: "Pedidos",
      wallets: "Billeteras",
    },
  },
  /**
   * @see StorefrontPageUserWallets
   */
  user_wallets: {
    title: "Mis billeteras",
    subtitle: "Si cumples los requisitos y hay un programa de cashback activo, una parte de tu pedido se abonará en tu billetera. Puedes usar esos fondos en tu próxima compra."
  },
  /**
   * @see SWalletInput
   */
  wallet_input:{
    my_wallet_balance:'Saldo de mi billetera',
  },


  /** {@see StorefrontPageBasketOrderPhysicalDashboard} **/
  order_page: {
    title: "Pedido",

    /** {@see SShopCustomerOrderPaymentWidget} **/
    payment: {
      title: "Pago",
      payment_waiting: "Pendiente de pago",
      payment_completed: "Pagado",
      table: {
        title: "Título",
        amount: "Monto",
        description: "Descripción",
      },
      total_payment: "Importe pagado",
      discount: "Descuento",
      discount_code: "Código de descuento",
      delivery_fee: "Costo de envío",
      delivery_fee_after: "Envío no incluido",

      total_price: "Precio total de artículos",
      total_items_discount: "Descuento de artículos",
      total_price_after_offers: "Total después de aplicar ofertas",
      total_order_price_before_tax: "Precio total antes de impuestos",

      buyer_payment: "Importe pagado por el cliente",

      payment_is_in_require_capture_message:
        "Hemos recibido tu pago, pero aún no se ha capturado.",
      settle_the_earlier_bill_first: "¡Liquida primero la factura anterior!",
    },
    /** {@see SShopCustomerDeliveryInfoWidget} **/
    delivery: {
      title: "Entrega",
      subtitle: "Información del comprador",
      confirm_received_action: "Confirmar la recepción del producto",
      confirm_received_info:
        "Haz clic en el botón de confirmación si recibiste el pedido. Si es necesario, podrás enviar una solicitud de devolución una vez confirmada la recepción.",
      Recipient: "Destinatario",
      bill: "Factura",
      name: "Nombre",
      tel: "Teléfono",
      email: "Correo electrónico",
      country: "País",
      state: "Estado/Provincia",
      city: "Ciudad",
      address: "Dirección",
      building_no: "Número de edificio",
      unit_no: "Número de unidad",
      postal_code: "Código postal",
      description: "Descripción",
      order_delivered: "El pedido ha sido entregado.",
      delivery_time: "Hora de entrega",
      tracking_code: "Código de seguimiento",
      tracking_url: "URL de seguimiento",

      notifications: {
        confirm_delivery: "Tu pedido está confirmado.",
      },
    },
    /** {@see SShopBasketItemsList} **/
    basket_items: {
      original_warranty: "Garantía de originalidad del producto",
      return: "Solicitar devolución",
      table: {
        product: "Nombre del producto",
        count: "Cantidad",
        unit_price: "Precio unitario",
        total_price: "Precio total",
        discount: "Descuento",
        final_price: "Precio final",
        returned: "Devuelto",
      },
    },
  },

  /** {@see SShopBasketItemReturnForm} **/
  return_request: {
    title: "Devolución",
    count_input: "Número de artículos devueltos",
    count_input_message: "¿Cuántos artículos devuelves?",
    reason_input: "Motivo de la devolución",
    reason_input_message: "Selecciona el motivo de la devolución de este artículo.",
    note_input: "Descripción",
    note_input_hint: "Describe el motivo de la devolución..",
    note_input_message:
      "Describe el motivo de la devolución de este artículo si es necesario.",
    media_message:
      "Puedes subir aquí una imagen, un audio o un vídeo del producto para que podamos ayudarte mejor con la información sobre su estado. Al seleccionar el archivo, se enviará y confirmará automáticamente.",
    video: "Video",
    voice: "Voz",
    add_action: "Enviar solicitud de devolución",
    notifications: "Tu solicitud de devolución se ha registrado correctamente.",
  },
  /** {@see StorefrontPageBasketOrderVirtualDashboard} **/
  virtual_order_page: {
    title: "Pedido",
    info: {
      title: "Producto virtual comprado",
    },
  },

  /** {@see StorefrontPageUserProfile} **/
  user_profile: {
    title: "Mi información personal",
    name: "Nombre",
    email: "Correo electrónico",
    tel: "Teléfono",
    identity: "Identificación",
    success_kyc: "KYC verificado",
    no_kyc: "Sin KYC",
    club: "Nivel de usuario",
    subscription: "Suscripción al boletín",
    leave_shop: "Abandonar esta tienda y eliminar todos los niveles de cliente",
    leave_shop_action: "Abandonar tienda",
    edit_personal_info: "Editar información personal",
    leave_dialog: {
      title: "Abandonar tienda",
      message:
        "Cancelar tu suscripción a esta tienda no eliminará la información ni los registros de tus pedidos.",
      action: "Abandonar",
    },
    notifications: {
      leave_success: "Has abandonado la tienda.",
    },
    club_table: {
      discount: "Descuento",
      limit: "Límite",
      currency: "Moneda",
      free_shipping: "Envío gratis",
    },

    my_profile: {
      title: "Mi perfil",
      subtitle: "Esta es la información de mi perfil de cliente para la tienda.",
      edit_action: "Editar perfil"
    },
    subscribe_status: {
      subscribed: "Estoy suscrito/a para recibir las últimas noticias y promociones por correo electrónico.",
      unsubscribed: "No estoy suscrito/a para recibir noticias ni promociones por correo electrónico."
    },
    my_club: {
      subtitle: "Mi nivel de club y sus beneficios."
    },
    kyc: {
      subtitle: "Esta es mi información de identificación global."
    }

  },
  /** {@see StorefrontPageBasketCart} **/
  basket_page: {
    title: "Carrito de compras",
    total_price: "Importe total",
    shipping: "Costo de envío",
    free_shipping: "Envío gratis",
    shipping_not_pay: "No incluido",
    total_discount: "Descuento total",
    customer_club: "Miembro del club de clientes",
    customer_club_discount: "Descuento para miembros",
    final_price: "Pago final",
    lead_time: "Tiempo de preparación",
    lead_time_unit: "hora",
    receive_time: "Hora de entrega preferida",
    select_time: "Selecciona la hora de entrega",
    no_select_time: "Tan pronto como sea posible",
    transportation_type: "Tipo de envío",
    days_input: "Días de entrega",
    days_input_label: "Días",
    days_input_no_data: "Selecciona al menos un día",
    time_input: "Hora de entrega",
    time_input_label: "Entrega a las",
    time_input_label_no_data: "Selecciona al menos un intervalo de tiempo",
    support_cod: "Contra reembolso",
    not_support_cod: "¡No es posible pagar contra reembolso!",
    final_confirm_action: "Confirmación final de pedido",
    pay_and_complete_action: "Pagar ahora",
    pre_confirm_service: "Enviar solicitud",
    cross_selling_discount: "Descuento por conjunto",

    errors: {
      no_address: "Selecciona la dirección a la que quieres que se envíe tu pedido.",
      no_phone: "Introduce un número de contacto para coordinar la entrega del pedido.",
      select_billing_country: "Selecciona tu país de facturación",
      select_billing_state: "Selecciona tu región fiscal",
    },
    same_billing_address: "Misma dirección para facturación",
    same_billing_address_desc:
      "La dirección de facturación es la misma que la dirección de envío.",
    custom_billing_info: "Dirección de facturación diferente",
    custom_billing_info_desc:
      "Puedes introducir tu número de identificación fiscal y establecer una dirección de facturación diferente.",
    basket_empty: "El carrito está vacío",
    extra_shipping_count: "Recibirás {count} paquetes.",
    select_location_error:
      "Busca en el mapa el lugar de entrega del envío y haz clic en el marcador del centro del mapa para fijar la dirección exacta del destinatario.",

    billing_business_desc: "Es una cuenta de empresa con número de identificación fiscal.",
    billing_personal_desc: "Es una cuenta personal.",

    no_billing_title: "Sin facturación",
    no_billing_desc: "Deja la dirección de facturación vacía.",

    can_pay_cod_message:"Puedes pagar este pedido en efectivo al recibirlo.",
  },
  /** {@see SShopBasketItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "Hora",
    count_input: "Cantidad",

    price_changed: "El precio ha cambiado. Nuevo precio:",
    offer: "Consigue {count}x artículo con un {percent}% de descuento",
    offer_free: "Obtén {count}x gratis",
  },

  /** {@see StorefrontUserAddresses} **/
  addresses_page: {
    title: "Mis direcciones",
    subtitle:"Consulta aquí tus direcciones guardadas y añade una nueva fácilmente.",
    new_action: "Nueva dirección",
    receiver: "Destinatario",
    address: "Dirección",
    building_no: "Número de edificio",
    building_unit: "Unidad",
    postcode: "Código postal",
    tel: "Teléfono",
    description: "Nota",

    map: {
      title: "Mis direcciones",
      confirm: "Registro de dirección",
      address_type: "Dirección",
      receptor_type: "Destinatario",
    },
    add_dialog: {
      title: "Nombre de la nueva dirección",
      message: "Introduce un título para la nueva dirección.",
      address_name_input: "Dirección (obligatorio)",
    },
  },
  /** {@see StorefrontPageUserReturns} **/
  return_requests: {
    title: "Solicitudes de devolución",
    subtitle:"Consulta aquí tus solicitudes de devolución. Para los artículos con política de devolución, puedes enviar una solicitud desde la página del pedido.",
  },

  /** {@see StorefrontPageUserWishlist} **/
  user_favorites: {
    title: "Lista de deseos",
  },
  /** {@see StorefrontPageUserComments} **/
  user_comments: {
    title: "Mis comentarios",
    first_post: "Primer comentario",
    last_edit: "Última edición",
  },
  /** {@see StorefrontPageUserGiftcards} **/
  user_gift_cards: {
    title: "Mis tarjetas de regalo",
    add_action: "Añadir tarjeta",
    add_card_dialog: {
      title: "Añadir tarjeta de regalo",
      message:
        "Introduce el número de tarjeta y el código de seguridad. Se añadirá una tarjeta de regalo a tu cuenta.",
      card_number_input: "Número de tarjeta",
      info: "Ten en cuenta que, al comprar en la tienda, tendrás la opción de pagar con tarjetas de regalo. Si eliges este método de pago, el importe se descontará de tu saldo de recarga y afectará directamente al total de tu pedido.",
      add_action: "Registrar tarjeta",
    },
  },

  /** {@see SComparisonButton} **/
  product_comparison: {
    title: "Comparar productos",
    action_button: "Comparar",

    /** {@see SComparisonList} **/
    list: {
      no_data: "No se han añadido productos a la lista de comparación.",
      price: "Precio",
      type: "Tipo",
      brand: "Marca",
      warranty: "Garantía",
      variants_comparison: "Comparar variantes del producto",
      spec: "Especificaciones técnicas",
      pros: "Ventajas",
      cons: "Contras",
      user_review: "Comentarios de usuarios",
      rating: "Valoración",
      rating_count: "Número de reseñas",
      info: "Puedes compartir esta tabla de comparación de productos con tus amigos enviando el siguiente enlace. Además, puedes acceder a ella más tarde guardando el enlace.",
      copy_action: "Copiar enlace de comparación",
      check_list: ["Sí", "Tiene"],
      cross_list: ["No", "No tiene"],
    },
  },
  /** {@see SCategoryFilter} **/
  product_filter_menu: {
    only_original: "Solo originales",
    only_has_discount: "Solo con descuento",
    price_range: "Rango de precios",
    brands: "Marca",
    main_shop_page: "Página principal de la tienda",
    home: "Inicio",
  },

  /** {@see SShopProductRatingView} **/
  product_rating_view: {
    message:
      "Estimado/a {user}, has comprado este producto. ¿Qué opinas de él?",
    notification: {
      title: "Felicitaciones",
      message: "Tu comentario se ha registrado.",
    },
  },

  /** @see StorefrontPageBlogsList **/
  blogs: {
    title: "Blog",
    add_new_blog: "Nuevo blog",
    popular: "Popular",
    topics: "Temas",
    suggestions: "Sugerencias",
  },

  /** @see StorefrontPageOfficial **/
  official_pages: {
    about_us: "Sobre nosotros",
    terms: "Términos de uso",
    privacy: "Política de privacidad",
    contact_us: "Contacto",
  },

  /** @see StorefrontContactUsPage **/
  contact_us_form: {
    title: "Formulario de contacto",
    name: "Nombre",
    email: "Correo electrónico",
    phone: "Teléfono",
    message: "Mensaje",
    notifications: {
      success: "Tu mensaje ha sido enviado.",
    },
    submitted_title: "¡Gracias por contactarnos!",
    submitted_message:
      "Agradecemos el tiempo que has dedicado a contactarnos. Hemos recibido tu mensaje y nuestro equipo lo está revisando. Te responderemos lo antes posible y te agradecemos tu paciencia mientras tanto. Tu interés y tus comentarios son importantes para nosotros, y nos comprometemos a ofrecerte el mejor soporte posible.",
  },

  /** @see SStorefrontMasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title: "Confirmación de pago",
      payment_success: "Pago completado.",
      buy_title: "Comprar",
      pay_by_giftcards: "Tu pedido se pagó con una tarjeta de regalo.",
      free_order: "Tu pedido es gratis.",
      pay_by_cod: "Tu pedido se ha registrado como pago contra reembolso.",
      pay_by_dir:
        "Tu pedido se ha registrado correctamente. Ahora puedes pagar mediante transferencia bancaria directa y luego subir el recibo de pago en la página del pedido.",
      pay_title: "Pago",
      qr_code_payment: "Se ha creado la dirección de pago con código QR.",
      connecting_to_online_gateway: "Conectando con la pasarela de pago en línea.",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Tiempo hasta el inicio",
    title_between_start_end: "Tiempo hasta el final",
    title_after_end: "Finalizado",
    title_no_start_end: "¡Sin periodo de tiempo!",
  },
  /** {@see SStorefrontLotteryPrizesList} **/
  lottery_prizes: {
    message: "Puedes recibir un regalo por pedido.",
  },

  /** {@see SStorefrontCouponsList} **/
  coupons: {
    coupon_code: "Código de cupón",
    add_coupon: "Añadir cupón",
  },

  /** {@see SStorefrontAvocadoCustomerOrderForm} **/
  /** {@see SShopAvocadoCustomerOrderItems} **/
  /** {@see SStorefrontAvocadoCustomerOrderList} **/
  /** {@see StorefrontPageAvocado} **/
  /** {@see StorefrontPageAvocadoCart} **/

  avocado: {
    not_enable: "¡El formulario de Avocado no está activado!",
    last_update: "Última actualización",
    step1:
      "1. Introduce el nombre y los detalles del producto que quieres pedir y haz clic en el botón Añadir.",
    title_plc: "Introduce el nombre del producto.",
    description_plc: "¿Tienes más descripciones de productos?",
    link_plc: "¿Tienes un enlace al producto?",
    image: "Imagen del producto",
    image_msg: "Puedes enviar la imagen del producto si es necesario.",
    add_item: "Añadir artículo",
    items_list: "Lista de productos solicitados",
    currency_msg: "Puedes pagar el importe de este pedido con esta moneda.",
    step2:
      "2. Después de añadir todos los artículos deseados, haz clic en el botón de solicitud de revisión del pedido. En esta etapa, revisaremos el pedido y te informaremos del precio. Al hacer clic en ese enlace, podrás ver el precio y el enlace de pago.",
    order_action: "Registrar pedido",
    show_all: "Mostrar todo",
    show_accepted: "Mostrar artículos confirmados",
    last_orders: "Lista de tus pedidos recientes",
    pending_status: "En revisión",
    check_now: "Revisar pedido",
    add_new_order: "Crear nuevo pedido",
    pay_online: "Pagar en línea",
    pricing_not_completed_message:
      "Tu pedido está en revisión. Pronto lo revisaremos y le asignaremos un precio, y entonces podrás pagarlo.",

    select_address_message:
      "Introduce tu dirección y después podrás enviar el pedido.",

    delete_item_dialog: {
      title: "Quitar artículo del carrito",
      message: "¿Quieres eliminar este artículo del carrito?",
      action: "Sí, eliminar",
    },

    notifications: {
      order_success: "Tu pedido se ha realizado correctamente.",
      delete_success: "Artículo eliminado.",
    },
  },

  /** {@see SHyperCart} **/
  hyper: {
    title: "Crear pedido",
    message:
      "Crea la lista de productos que quieres comprar escaneando el código del producto.",

    currency_msg: "La moneda con la que quieres pagar.",
    order_action: "Pago",
    add_new_order: "Nuevo pedido",
    continue_order: "Continuar pedido",

    delete_item_dialog: {
      title: "Quitar artículo del carrito",
      message: "¿Quieres eliminar este artículo del carrito?",
      action: "Sí, eliminar",
    },
    notifications: {
      order_success: "Tu pedido se ha realizado correctamente.",
      delete_success: "Artículo eliminado.",
    },
  },

  /** {@see SShopRowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Sube la imagen del recibo de pago.",
    upload_payment_receipt_done:
      "✔ Ya has subido la imagen del recibo; espera nuestra aprobación. Si necesitas cambiarla, puedes reemplazar la imagen anterior por una nueva.",
    public_form_title: "Información de cuenta para transferencia de dinero",
  },

  /** @see ServiceBillingItem **/
  service_bill: {
    task: {
      title: "Lista de tareas",
      message: "La lista de tareas incluidas en el paquete de servicio pedido.",
    },
    booking: {
      title: "Reserva",
      message: "He seleccionado el rango de fechas para recibir este pedido.",

      selected_checkin: "Check-in seleccionado por el cliente",
      selected_checkout: "Check-out seleccionado por el cliente",
      change_days_question:
        "¿Necesitas modificar la duración de la reserva para los días seleccionados?",
      show_calendar: "Mostrar calendario de pedidos",
    },
    pricing: {
      title: "Precios",
      message: "¿Cuánto cobras por este servicio?",
    },
    subscription: {
      title: "Suscripción",
      message:
        "Puedes elegir el periodo de suscripción comprando este servicio por días. Informa al comprador si quieres cambiar los valores predeterminados que ya has introducido.",
      duration: "Periodo de suscripción",
    },
    charge: {
      title: "Cargo",
      message:
        "Has especificado un cargo para este artículo. Puedes cambiar el importe del cargo del artículo comprado por el cliente.",
      charge: "Cargo",
    },
  },

  /** @see SAccessPrivateCheck **/
  check_access: {
    waiting_message: "Esperando para comprobar el acceso...",
    no_access_message:
      "Lamentablemente, no tienes acceso a nuestra tienda. <br/>Por favor, contáctanos.",
  },

  /** @see SShopShareOrderButton **/
  share_order: {
    action: "Compartir pedido",
    title: "Comparte este pedido con otras personas.",
    message:
      "Es un enlace seguro; compártelo solo con personas de confianza. Cualquiera que tenga este enlace podrá duplicar tu pedido y ver la dirección seleccionada. Contendrá información sobre tu carrito actual.",
    valid_period: "Este enlace caducará en 48 horas.",
    import_order_action: "Importar pedido",
    retrieve_dialog_title: "Recuperar pedido externo",
    address_included: "Compartir artículos del carrito + dirección",
    address_excluded: "Compartir solo los artículos del carrito",
  },

  /** {@see ProductVariantsView} **/
  variants_view: {
    prices: "Precios",
    inventory: "Inventario",
    discount: "Descuento",
  },

  rating: {
    product_rating_message:
      "Este producto ha recibido una valoración de {rate} de 5 estrellas por parte de {rate_count} personas.",
  },

  /** {@see SProductRelatedProducts} **/
  related_products: {
    card: {
      title: "¡Explorar!",
      same_tags_subtitle: "Encuentra más artículos relacionados destacados.",
      same_category_subtitle: "Encuentra más artículos destacados en esta categoría.",
    },
  },

  /** {@see SProductCrossSells} **/
  cross_selling: {
    title: "Pide {product} con",
  },

  /** {@see SSmartSelectVendor} **/
  select_vendor: {
    item_title: "Ver tienda de {vendor}",
  },

  login: {
    welcome: "Bienvenido",
  },


};
