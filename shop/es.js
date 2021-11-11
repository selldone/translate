export default {
  /** @see ProductRatingView **/
  surveys: ["Muy pobre", "Pobre", "Normal", "Buena", "Excelente"],


  /** @see ShopFooter **/
  footer: {
    map: "Mapa",
    email: "Correo electrónico",
    phone: "Teléfono",
    address: "Dirección",

    copyright:
      "El uso de contenido solo con fines no comerciales y con referencia a la fuente (enlace con {shop_title}). Todos los derechos reservados a {shop_title}.",
    powered_by: "Energizado por",
    privacy: "Política de privacidad",
    term_of_use: "Condiciones de uso",
    shop_app_setting: "Configuración de la tienda y GDPR",

    dialog_setting: {
      title: "Configuración de aplicaciones de compra",
      app_list: "Lista de aplicaciones",
    },
  },

  /** @see ProductCard **/
  product_card: {
    sold_out: "Vendido",
    review_unit: "revisión",
    not_original: "No es original",
  },

  /** @see ShopPage **/
  /** @see Shop **/
  shop: {
    products_filter: "Filtrar",
    native: {
      title: "Inicio de sesión de la aplicación",
      message:
        "Esta aplicación requiere acceso a la información de su cuenta de la tienda. Esto incluye acceso al nombre, número de contacto, dirección, correo electrónico, historial de pedidos, pedidos y publicación de comentarios en esta tienda.",
      message_bold:
        "Asegúrese de usar la aplicación oficial de la tienda para ingresar a esta tienda.",
    },
  },

  /** @see SortView **/
  sort: {
    title: "Ordenar por",
    title_small: "Ordenar por..",
    nothing: "Nada",
    most_views: "La mayoría de las vistas",
    most_likes: "Más popular",
    most_recent: "El mas nuevo",
    most_sell: "Más vendido",
    cheapest: "Lo mas barato",
    most_expensive: "Mas caro",
    only_available: "Disponible",
    view_mode: {
      normal: "Normal",
      grid: "Red",
      list: "Lista",
      insta: "Insta",
    },
  },

  /** @see ProductInfo **/
  product_info: {
    fake: "Falso",
    action: "Subasta",
    compare_limit: "Límite de 10 elementos",
    compare_add: "Añadir a comparar",
    compare_be_in_list: "Añadir a comparar",

    type:"Escribe",
    brand: "Marca",
    category: "Categoría",
    discount: "Descuento",
    track_price: "Seguimiento del precio",
    waiting_for_auction: "¿Esperando subasta?",
    inform_auction: "Háblame de la subasta",
    return_in_days: "Devolución de garantía de {days} días",
    support24h7: "Soporte 24 horas 7 días",
    support_normal:"Soporte de horas de trabajo",
    original_guarantee: "Garantía original ",
    cod_payment:"Asistencia contra reembolso",

    pros: "Pros",
    cons: "Contras",

    external_link: "Lee mas",
    notifications: {
      congratulation: "Felicidades",
      waiting_list_add_success:
       "Le notificaremos cuando este producto sea subastado",
      waiting_list_delete_success: "Saliste de la lista de espera de la subasta. ",
    },

    offer_message: "Compre {min_quantity} y obtenga un {percent}% de descuento en estos artículos",
    up_to: "Hasta {per_order} x por pedido",
    get_free: "LIBERARSE",
    get_off: "OBTENGA {percent}% DE DESCUENTO",
  },

  /** @see BuyButton **/

  buy_button: {
    waiting_for_availability: "Esperando disponibilidad",
    inform_me_when_available: "¿Esperando por esto?",
    pay_buy: "Pagar comprar",
    quantity: "Contar",
    quantity_in_basket: "Artículos en el carrito",
    count_unit: "X",
    remove: "Eliminar",
    add_to_basket: "Añadir a la cesta",
    buy: "Comprar",
    notifications: {
      inform_add_success: "Te avisaremos cuando esté disponible.",
      inform_remove_success: "Ha sido eliminado de la lista de espera",
    },
  },

  /** @see ProductPage **/

  product: {
    review: "Revisar",
    spec: "Especificaciones",
    comments: "Comentarios",
    related_products_title: "Productos relacionados",
    price: "Precio",
    rate: "Índice",
    comment: "comentario",
  },

  /** @see LayoutShop **/
  layout_shop: {
    shop_menu: {
      orders_history: "Historial de pedidos",
      profile: "Perfil",
      favorites: "Mis favoritos",
      gift_cards: "Tarjetas de regalo",
      return_requests: "Solicitudes de devolución",
      basket: "Carrito de compras",
    },
    user_menu: {
      my_shops: "Mis tiendas ",
      go_to_admin: "Administrar {shop_name}",
      exit_from: "Cerrar sesión {shop_name}",
      chips: "{chips} chips ",
    },
    login_to_shop: "Iniciar sesión en la tienda ",
    login_to_shop_short: "acceso",
    item_in_basket_message: "{count} Este artículo está en su carrito. ",
    search_title: "Buscar en la tienda {shop_name} ",
  },

  /** {@see BasketTopMenu} **/
  basket_top_menu: {
    basket: "Carro",
    basket_is_empty: "Tu carrito esta vacío.",
    total_price: "Total",
    view_basket: "Ver carrito",
    more: "Más ...",
    accept_and_pay: "Verificar",
    items: "elementos)",
  },



  /** {@see HistoryOrdersPhysical} **/
  history_orders_physical: {
    rejected: "Rechazado",
    table: {
      code: "Código de orden",
      reserved: "Fecha",
      delivery_state: "Estado de entrega",
      price: "Precio total",
      status: "Estado de pago",
    },
  },
  /** {@see OrdersHistoryListTemplate} **/
  history_orders: {
    table: {
      code: "Código de orden",
      items: "Elementos",
      reserved: "Fecha",
      delivery_state: "Último estado",
      price: "Precio total",
      status: "Estado de pago",
    },
  },

  /** {@see UserPagesLayout} **/
  user_page: {
    menu: {
      gift_card: "Tarjeta de regalo",
      comments: "Comentarios",
      favorites: "Favoritos",
      return_requests: "Devoluciones",
      addresses: "Direcciones",
      profile: "perfil",
      orders: "Pedidos",
    },
  },
  /** {@see MyPhysicalOrderInfoPage} **/
  physical_order_page: {
    title: "Pedido",

    /** {@see CustomerOrderPaymentWidget} **/
    payment: {
      title: "Pago",
      payment_waiting: "A la espera del pago",
      payment_completed: "Pagado",
      table: {
        title: "Título",
        amount: "Monto",
        description: "Descripción",
      },
      total_payment: "Cantidad pagada",
      discount: "Descuento",
      discount_code: "Código de descuento",
      delivery_fee: "Costo de envío",
      delivery_fee_after: "Sin entrega pagada",

      total_price: "Precio total de los artículos",
      total_items_discount: "Artículos con descuento ",
      total_price_after_offers: "Precio total después de aplicar ofertas ",

      buyer_payment: "Importe del pago del comprador ",
    },
    /** {@see CustomerOrderDeliveryWidget} **/
    delivery: {
      title: "Entrega",
      subtitle: "Información del comprador ",
      confirm_received_action: "Confirmar la recepción del producto ",
      confirm_received_info:
        "Haga clic en el botón de confirmación si recibió el pedido. Si es necesario, podrá enviar una referencia si recibe la confirmación.",
      receiver: "Receptor",
      bill: "Factura",
      name: "Nombre",
      tel: "Teléfono",
      email: "Correo electrónico",
      country: "País",
      state: "Estado",
      city: "Ciudad",
      address: "Dirección",
      building_no: "Número de edificio",
      unit_no: "Unidad numérica",
      postal_code: "Código postal",
      description: "Descripción",
      order_delivered: "El pedido ha sido entregado. ",
      delivery_time: "El tiempo de entrega",
      tracking_code: "Codigo de localización",
      tracking_url: "URL de seguimiento ",

      notifications: {
        confirm_delivery: "Su pedido ha sido aprobado.",
      },
    },
    /** {@see BasketItemsListView} **/
    basket_items: {
      original_warranty: "Garantía de originalidad de los productos ",
      return: "Regreso",
      table: {
        product: "nombre del producto",
        count: "Contar",
        unit_price: "Precio unitario",
        total_price: "Precio total",
        discount: "Descuento",
        final_price: "Precio final",
        returned: "Devuelto",
      },
    },
  },

  /** {@see BasketItemReturnForm} **/
  return_request: {
    title: "Regreso",
    count_input: "Número de artículos devueltos",
    count_input_message: "Cuantos regresas? ",
    reason_input: "Razón para regresar",
    reason_input_message: "Seleccione el motivo de la devolución de este artículo",
    note_input: "Descripción",
    note_input_hint: "Describe el motivo de la referencia ... ",
    note_input_message:
      "Describa el motivo por el que recomienda este artículo si es necesario. ",
    media_message:
      "Puede cargar una imagen, audio o video del producto aquí para obtener un mejor soporte para la información del estado del producto. Al seleccionar el archivo, se enviará y confirmará automáticamente.",
    video: "Video",
    voice: "Voice",
    add_action: "Enviar solicitud de devolución ",
    notifications: "Su solicitud de recomendación se ha registrado correctamente.",
  },
  /** {@see MyVirtualOrderInfoPage} **/
  virtual_order_page: {
    title: "Pedido",
    info: {
      title: "Producto virtual adquirido ",
    },
  },

  /** {@see UserProfilePage} **/
  user_profile: {
    title: "Mi información personal",
    name: "Nombre",
    email: "Correo electrónico",
    tel: "Tel",
    identity: "Autenticación",
    success_kyc: "KYC aprobado ",
    club: "Nivel de usuario",
    subscription: "Suscripción a noticias ",
    leave_shop: "Salir de esta tienda y eliminar todos los clientes del nivel ",
    leave_shop_action: "Salir de la tienda ",
    leave_dialog: {
      title: "Salir de la tienda ",
      message:
        "Cancelar la suscripción a esta tienda no eliminará la información y los registros de su pedido",
      action: "Dejar",
    },
    notifications: {
      leave_success: "Salir de la tienda",
    },
    club_table: {
      discount: "Descuento",
      limit: "Límite",
      currency: "Divisa",
      free_shipping: "Envío gratis",
    },
  },
  /** {@see BasketPage} **/
  basket_page: {
    title: "Carrito de compras",
    total_price: "Cantidad total",
    shipping: "Costo de envío",
    free_shipping:"Envío gratis",
    shipping_not_pay: "No incluido",
    total_discount: "Descuento total",
    customer_club: "Miembro del Club de Clientes",
    customer_club_discount: "Descuento para miembros",
    final_price: "Pago final",
    lead_time: "Tiempo de preparación",
    lead_time_unit: "hora",
    receive_time: "Hora de recibir",
    select_time: "Seleccionar hora de entrega",
    no_select_time: "Enviar siempre que esté listo.",
    transportation_type: "tipo de vehiculo",
    days_input: "Días de entrega ",
    days_input_label: "Dias",
    days_input_no_data: "Seleccione al menos un día ",
    time_input: "El tiempo de entrega",
    time_input_label: "Entrega en",
    time_input_label_no_data: "Seleccione al menos un intervalo de tiempo ",
    support_cod: "Contra reembolso ",
    not_support_cod: "¡No se puede pagar localmente! ",
    final_confirm_action: "Confirmación final del pedido",
    pay_and_complete_action: "Pagar ahora",
    pre_confirm_service: "Enviar peticion",

    errors: {
      no_address: "Seleccione la dirección a la que desea que se envíe su pedido. ",
      no_phone: "Introduzca un número de contacto para coordinar la recepción de mercancías",
      select_billing_country: "Seleccione su país de facturación",
      select_billing_state: "Seleccione su región fiscal",
    },
    same_billing_address: "La información de facturación es la misma que la del destinatario ",
    custom_billing_info: "Información de facturación diferente ",
    basket_empty: "La cesta está vacía ",
    extra_shipping_count: "Recibirás {count} paquetes",
    select_location_error:
      "Busque el lugar de recepción del envío en el mapa y haga clic en el indicador en el medio del mapa para determinar la dirección exacta del destinatario. ",
  },
  /** {@see BasketListItems} **/
  basket_items: {
    items_unit: "x",
    lead_unit: "hora",
    count_input: "Contar",

    price_changed: "El precio ha cambiado. nuevo precio:",
    offer: "Obtén {count} x artículo con un {percent}% de descuento",
    offer_free: "Obtén {count} x gratis ",
  },

  /** {@see UserAddressesPage} **/
  addresses_page: {
    title: "Mis direcciones",
    new_action: "Nueva direccion",
    receiver: "Receptor",
    address: "Dirección",
    building_no: "placa",
    building_unit: "unidad",
    postcode: "Código postal",
    tel: "Tel",
    description: "Nota",

    map: {
      title: "Mis direcciones",
      confirm: "Registro de dirección",
      address_type: "Dirección",
      receptor_type: "Receptor",
    },
    add_dialog: {
      title: "Nuevo nombre de dirección",
      message: "Ingrese un título para una nueva dirección.",
      address_name_input:"Dirección (requerida)",
    },
  },
  /** {@see UserReturnRequests} **/
  return_requests: {
    title: "Solicitudes de devolución",
  },
  /** {@see UserFavoritesPage} **/
  user_favorites: {
    title: "Lista de deseos",
  },
  /** {@see UserCommentsPage} **/
  user_comments: {
    title: "Mis comentarios",
    first_post: "Primer comentario",
    last_edit: "Última edición",
  },
  /** {@see UserGiftCardsPage} **/
  user_gift_cards: {
    title: "Mis tarjetas de regalo",
    add_action: "Agregar tarjeta",
    add_card_dialog: {
      title: "Agregar tarjeta de regalo",
      message:
       "Ingrese el número de la tarjeta y el código de seguridad. Se agregará una tarjeta de regalo a su cuenta.",
      card_number_input: "número de tarjeta",
      info:"Nota: Al comprar en la tienda, se le mostrará la opción de pagar con tarjetas de regalo. Al seleccionar esta opción, el monto de su saldo de recarga se deducirá del monto del pedido",
      add_action: "Registro de tarjeta",
    },
  },

  /** {@see ProductComparison} **/
  product_comparison: {
    title: "Comparar producto",
    action_button:"comparar",

    /** {@see ProductComparisonList} **/
    list: {
      no_data: "No se agregaron productos a la lista de comparación.",
      price: "Precio",
      type: "Escribe",
      brand: "Marca",
      warranty: "Garantía",
      variants_comparison: "Compare la diversidad de productos",
      spec: "Especificaciones técnicas",
      pros: "Pros",
      cons: "Contras",
      user_review: "Comentarios del usuario",
      rating: "Clasificación",
      rating_count: "Número de reseñas",
      info: "Puede compartir esta tabla de comparación de productos con sus amigos enviando el siguiente enlace, o acceder a ella más tarde guardando este enlace.",
      copy_action: "Copiar enlace de comparación",
      check_list: ["Sí", "Tiene"],
      cross_list: ["No", "No tiene"],
    },
  },
  /** {@see ProductFilterMenu} **/
  product_filter_menu: {
    only_original: "Solo originales",
    only_has_discount: "Solo con descuento",
    price_range: "Rango de precios",
    brands:"Marca",
    main_shop_page:"Página principal de la tienda",
    home: "Hogar",
  },

  /** {@see ProductRatingView} **/
  product_rating_view: {
    message:
      "Estimado {usuario}: Ha comprado este producto. ¿Qué piensa de este producto?",
    notification: {
      title: "Enhorabuena",
      message: "Tu comentario ha sido grabado. ",
    },
  },

  /** @see ShopBlogsPage **/
  blogs: {
    title: "Blog",
    add_new_blog: "Blog nuevo",
    popular: "Popular",
    topics: "Temas ",
    suggestions: "Sugerencias",
  },

  /** @see ShopProfilePage **/
  official_pages: {
    about_us: "Sobre nosotros",
    terms: "Condiciones de uso",
    privacy: "Política de privacidad",
    contact_us: "Contáctenos",
  },

  /** @see ShopContactUs **/
  contact_us_form: {
    title: "Formulario de contacto",
    name: "Nombre",
    email: "Correo electrónico",
    phone: "Teléfono",
    message: "Mensaje",
    notifications: {
      success: "Tu mensaje ha sido enviado.",
    },
  },

  /** @see MasterPaymentDialog **/
  master_payment: {
    notifications: {
      payment_success_title:"Confirmación de pago",
      payment_success: "Pago completado.",
      buy_title: "Comprar",
      pay_by_giftcards: "Su pedido se pagó con una tarjeta de regalo",
      free_order: "Tu pedido es gratis",
      pay_by_cod: "Su pedido se ha añadido como pago contra reembolso",
      pay_by_dir:
        "Su pedido se ha agregado correctamente. Ahora puede pagar mediante transferencia de dinero directa y luego cargar el recibo de pago en la página del pedido. ",
      pay_title: "Pago",
      qr_code_payment: "Se creó la dirección del código QR de pago",
      connecting_to_online_gateway: "Conexión a la pasarela de pago en línea",
    },
  },

  /** {@see TimeProgressBar} **/
  time_progress_bar: {
    title_before_start: "Quedando hasta el principio",
    title_between_start_end: "Quedando hasta el final",
    title_after_end: "Finalizado",
    title_no_start_end: "¡Sin período de tiempo! ",
  },
  /** {@see LotteryPrizes} **/
  lottery_prizes: {
    message: "Puedes recibir un regalo por pedido. ",
  },

  /** {@see Coupons} **/
  coupons: {
    coupon_code: "Código promocional",
    add_coupon: "Agregar cupón",
  },

  /** {@see AvocadoCustomerAddOrderForm} **/
  /** {@see AvocadoItemsList} **/
  /** {@see AvocadoMyOrdersList} **/
  /** {@see AvocadoBuyerFormPage} **/
  /** {@see AvocadoOrderPage} **/

  avocado: {
    not_enable: "¡El formulario de aguacate no está habilitado! ",
    last_update: "Última actualización:",
    step1:
      "1. Ingrese el nombre y los detalles del producto que desea pedir y haga clic en el botón Agregar.",
    title_plc: "Ingrese el nombre del producto.",
    description_plc: "¿Tiene más descripciones de productos?",
    link_plc: "¿Tiene un enlace al producto? ",
    image: "Imagen del producto",
    image_msg: "Puede enviar la imagen del producto si es necesario. ",
    add_item: "Añadir artículo",
    items_list: "Lista de productos solicitados",
    currency_msg: "Debes pagar el importe de este pedido con esta moneda",
    step2:
      "2. Después de agregar todos los elementos deseados, haga clic en el botón de solicitud de revisión de pedido. En esta etapa, revisaremos el pedido y le informaremos sobre el precio. Al hacer clic en este enlace, podrá ver el precio y el enlace de pago. ",
    order_action: "Registro de pedidos",
    show_all: "Mostrar todo",
    show_accepted: "Mostrar elementos verificados ",
    last_orders: "Lista de sus últimos pedidos ",
    pending_status: "bajo revisión",
    check_now: "Revisar orden",
    add_new_order: "Registrar nuevo pedido",
    pay_online: "Paga en linea",
    pricing_not_completed_message:
      "Se está revisando tu pedido. Su pedido será revisado y valorado pronto y podrá pagarlo. ",

    delete_item_dialog: {
      title: "Eliminar artículo del carrito de la compra ",
      message: "¿Quieres eliminar este artículo del carrito? ",
      action: "Sí, eliminar ",
    },

    notifications: {
      order_success: "Su pedido se realizó correctamente. ",
      delete_success: "Elemento eliminado. ",
    },
  },

  /** {@see HyperAddOrderForm} **/
  hyper: {
    title: "Creación de pedidos ",
    message:
      "Cree la lista de productos que desea comprar escaneando el código del producto. ",

    currency_msg: "La moneda con la que desea pagar. ",
    order_action: "Pago",
    add_new_order: "Nuevo orden",
    continue_order: "Continuar orden",
  },

  /** {@see RowCustomerPendingPayment} **/
  pending_payment: {
    upload_payment_receipt: "Sube la imagen del recibo de pago. ",
    upload_payment_receipt_done:
      "✔ Ya ha subido la imagen del recibo, espere nuestra aprobación. Si necesita cambiar, puede reemplazar la imagen anterior por una nueva. ",
    public_form_title: "Información de la cuenta para la transferencia de dinero",
  },
};
